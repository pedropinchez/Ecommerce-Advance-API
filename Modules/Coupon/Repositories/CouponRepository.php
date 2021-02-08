<?php

namespace Modules\Coupon\Repositories;

use App\Helpers\ImageUploadHelper;
use App\Helpers\UploadHelper;
use Modules\Coupon\Entities\Coupon;
use Auth;
use Modules\Coupon\Entities\CouponType;

class CouponRepository
{
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
        $data['image'] = UploadHelper::upload('image',  $data['image'], 'coupon-' . '-' . time(), 'images/coupons');
        $coupon = Coupon::create($data);
        return $coupon;
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
     * @param $id
     * @param $data
     * @return mixed
     * update coupon
     */
    public function update($id, $data)
    {
        $coupon = Coupon::find($id);
        $data['image'] = is_null($data['image']) ? $coupon->image : UploadHelper::update('image',  $data['image'], 'coupon-' . '-' . time(), 'images/coupons', $coupon->image);
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
        if($coupon) {
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
}
