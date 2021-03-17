<?php

namespace Modules\Coupon\Repositories;

use App\Helpers\ImageUploadHelper;
use App\Helpers\UploadHelper;
use Modules\Coupon\Entities\Coupon;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Modules\Business\Entities\Business;
use Modules\Business\Repositories\BusinessRepository;
use Modules\Coupon\Entities\CouponType;
use Modules\Sales\Repositories\CartRepository;

class CouponRepository
{
    public $cartRepository;
    public $businessRepository;

    public function __construct(CartRepository $cartRepository, BusinessRepository $businessRepository)
    {
        $this->cartRepository     = $cartRepository;
        $this->businessRepository = $businessRepository;
    }
    /**
     * @return mixed
     * get all the coupons with business
     */
    public function index()
    {
        $query = Coupon::orderBy('id', 'desc')->with('coupon_type');
        if (request()->search) {
            $query->where('code', 'like', '%' . request()->search . '%');
            $query->orWhere('description', 'like', '%' . request()->search . '%');
        }
        if (request()->isPaginated) {
            $paginateNo = request()->paginateNo ? request()->paginateNo : 20;
            return $query->paginate($paginateNo);
        } else {
            return $query->get();
        }
    }

    /**
     * @return mixed
     * get all Coupon Types
     */
    public function getCouponTypes()
    {
        return CouponType::orderBy('id', 'desc')->select('id', 'name', 'code')->get();
    }

    /**
     * @param $data
     * @return mixed
     * insert coupon to db
     */
    public function store($data)
    {
        if ($this->checkCouponCodeExists($data['code'])) {
            throw new \Exception("Coupon Code already exists, Please use another code !");
        } else {
            if (isset($data['image'])) {
                $data['image'] = UploadHelper::upload('image',  $data['image'], 'coupon-' . '-' . time(), 'images/coupons');
            }
            $data['business_id'] = Business::getMainBusinessID();
            $coupon = Coupon::create($data);
            return $coupon;
        }
    }

    /**
     * @param $id
     * @return mixed
     * get single coupon
     */
    public function show($id)
    {
        return Coupon::with(['business', 'coupon_type'])->find($id);
    }

    /**
     * Check Coupon By Code
     *
     * @param string $code
     *
     * @return mixed
     */
    public function checkCouponByCode($code, $carts = [])
    {
        $order_amount = 0;
        $total_product = 0;

        $coupon_valid_message = 'Congratulations, Coupon applied successfully !';
        $coupon_invalid_message = 'Sorry, Coupon is invalid !';

        $coupon_response = [
            'status' => false,
            'discount_amount' => 0,
            'apply_free_shipping' => false,
            'message' => $coupon_invalid_message
        ];

        if (count($carts) === 0) {
            $coupon_response['message'] = 'Cart item is empty, Please select cart item first.';
            return $coupon_response;
        }

        $cart_items = $this->cartRepository->get_cart_details($carts);

        foreach ($cart_items as $key => $item) {
            $order_amount += (float) ($item->quantity * $item->selling_price);
            $total_product += (float) $item->quantity;
        }

        $coupon = DB::table('coupons')
            ->where('code', trim($code))
            ->whereDate('coupon_start_date', '<=', Carbon::now())
            ->whereDate('coupon_expiry_date', '>=', Carbon::now())
            ->first();

        if (is_null($coupon)) {
            return $coupon_response;
        } else {

            if ($coupon->usage_count !== 0 && $coupon->usage_limit !== 0 && $coupon->usage_count >= $coupon->usage_limit) {
                return $coupon_response;
            }

            if ($coupon->is_free_shiping) {
                $coupon_response['status'] = true;
                $coupon_response['apply_free_shipping'] = true;

                // Calculate shipping cost for these businesses and set that data to the discount_amount
                $total_shipping_cost = 0;

                foreach ($cart_items as $item) {
                    $total_shipping_cost += (float) $this->businessRepository->get_shipping_charge_by_business_id($item->business_id)->shipping_charge;
                }

                $coupon_response['message']         = $coupon_valid_message;
                $coupon_response['discount_amount'] = $total_shipping_cost;
            } else {

                // Get coupon amount type and type, based on that type, add discount amount
                $coupon_amount_type = $coupon->amount_type;
                $coupon_type_id     = $coupon->coupon_type_id;

                $coupon_response['coupon']             = $coupon;
                $coupon_response['coupon_type_id']     = $coupon_type_id;
                $coupon_response['order_amount']       = $order_amount;
                $coupon_response['total_product']      = $total_product;
                $coupon_response['coupon_amount_type'] = $coupon_amount_type;
                $coupon_response['cart_items']         = $cart_items;

                switch ($coupon_type_id) {
                    case 1:     // Cart
                    case 2:     // Order
                        $coupon_response['coupon_type'] = 'cart|order';
                        $discount_amount = $this->get_coupon_discount_by_amount_type($coupon_response);
                        $coupon_response['discount_amount'] = $discount_amount;
                        $coupon_response['status'] = $discount_amount > 0 ? true : false;
                        $coupon_response['message'] = $coupon_valid_message;

                        break;

                    case 3:     // Product
                        $coupon_response['coupon_type'] = 'product';

                        break;

                    case 4:     // Category
                        $coupon_response['coupon_type'] = 'category';

                        break;

                    default:
                        # code...
                        break;
                }
            }

            unset($coupon_response['coupon_amount_type']);
            unset($coupon_response['coupon_type_id']);
            unset($coupon_response['cart_items']);
            unset($coupon_response['coupon']);
            return $coupon_response;
        }
    }

    public function get_coupon_discount_by_amount_type($args = [])
    {
        $discount_amount = 0;

        switch ($args['coupon_amount_type']) {

            case 'percentage':
                // total order amount er x %
                $discount_amount = $args['order_amount'] * ($args['coupon']->coupon_amount / 100);
                break;

            case 'numeric':
                $discount_amount = $args['coupon']->coupon_amount;
                break;

            default:
                $discount_amount = 0;
                break;
        }

        return $discount_amount;
    }

    /**
     * @param $id
     * @param $data
     * @return mixed
     * update coupon
     */
    public function update($id, $data)
    {
        $coupon = Coupon::find($id);
        $data['image'] = !isset($data['image']) ? $coupon->image : UploadHelper::update('image',  $data['image'], 'coupon-' . '-' . time(), 'images/coupons', $coupon->image);
        $coupon->update($data);
        return $coupon;
    }

    /**
     * @param $id
     * @return bool
     * delete coupon
     */
    public function destroy($id)
    {
        $coupon = Coupon::find($id);
        if ($coupon) {
            $coupon->delete();
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param $businessId
     * @return mixed
     * get all the coupons of business
     */
    public function getCouponByBusiness($businessId)
    {
        return Coupon::with(['business'])->where('business_id', $businessId)->get();
    }

    public function checkCouponCodeExists($code)
    {
        return Coupon::where('code', $code)->exists();
    }
}
