<?php

namespace Modules\Business\Repositories;

use App\Helpers\StringHelper;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Modules\Auth\Entities\User;
use Modules\Auth\Interfaces\AuthInterface;
use Modules\Business\Entities\Business;
use Modules\Business\Entities\BusinessLocation;

class BusinessRepository
{
    /**
     * Business all
     *
     * @param integer $id
     * @return object $Business
     */
    public function all()
    {
        $Businesses = DB::table('business')
            ->join('currencies', 'business.currency_id', '=', 'currencies.id')
            ->select('business.*', 'currencies.currency')
            ->orderBy('id', 'desc')
            ->get();
        return $Businesses;
    }

    /**
     * Get Shipping Charge By Business ID
     *
     * @param int $business_id
     *
     * @return object
     */
    public function get_shipping_charge_by_business_id ( $business_id )
    {
        return DB::table('business')
        ->select(
            'shipping_charge_city',
            'shipping_charge_city as shipping_charge',
            'shipping_charge_local'
        )
        ->where('id', $business_id)
        ->first();
    }


    /**
     * create new business
     *
     * @param Request $request
     * @return object $user
     */
    public function create(Request $request)
    {
        $business_id = DB::table('business')->insertGetId(
            [
                'name' => $request->name,
                'bin' => $request->bin,
                'slug' => StringHelper::createSlug($request->name, Modules\Business\Entities\Business::class, 'slug', ''),
                'start_date' => $request->start_date,
                'tax_number_1' => $request->tax_number_1,
                'tax_number_2' => $request->tax_number_2,
                'tax_label_1' => $request->tax_label_1,
                'tax_label_2' => $request->tax_label_2,
                'default_profit_percent' => $request->default_profit_percent,
                'owner_id' => $request->owner_id,
                'time_zone' => $request->time_zone,
                'fy_start_month' => $request->fy_start_month,
                'default_sales_discount' => $request->default_sales_discount,
                'accounting_method' => $request->accounting_method,
                'sell_price_tax' => $request->sell_price_tax,
                'currency_id' => $request->currency_id,
                'logo' => $request->logo,
                'sku_prefix' => $request->sku_prefix,
                'enable_tooltip' => $request->enable_tooltip
            ]
        );
        $business = $this->findBusinessById(($business_id));
        return $business;
    }

    public function registerAsVendor($data, $user)
    {
        if (!is_null($user)) {
            try {
                // Create Data in Business table
                $business = Business::create([
                    'name' => $data['business_name'],
                    'slug' => StringHelper::createSlug($data['business_name'], 'Modules\Business\Entities\Business', 'slug', ''),
                    'currency_id' => 1,
                    'tax_label_1' => 'Tax',
                    'owner_id' => $user->id,
                ]);

                // Create Data in Business_Locations table
                $location = BusinessLocation::create([
                    'business_id' => $business->id,
                    'name' => $business->name,
                    'country' => 'Bangladesh',
                    'phone_no' => $user->phone_no,
                    'email' => $user->email,
                ]);
                return $business;
            } catch (\Exception $e) {
                // throw new \Exception("Somethings wrong registering business !");
                throw new \Exception($e->getMessage());
            }
        } else {
            throw new \Exception("Please register first as a user, then try again !");
        }
    }

    /**
     * find business by bin no
     *
     * @param string $bin
     * @return object $business
     */
    public function findBusinessByBIN($bin)
    {
        $business = DB::table('business')->where('bin', $bin)->first();
        return $business;
    }

    /**
     * find Business by ID
     *
     * @param int|string $column_value
     *
     * @return object Business
     */
    public function findBusinessById($column_value)
    {
        if (is_numeric($column_value)) {
            $business = Business::find($column_value);
        } else {
            $business = Business::where('slug', $column_value)->first();
        }

        return $business;
    }


    /**
     * update Business
     *
     * @param $data
     * @param integer $id
     * @return object $user
     */
    public function updateBusiness($data, $id)
    {
        $business = Business::find($id);
        if ($business) {
            $business->update($data);
        }

        return $business;
    }

    /**
     * delete user by ID
     *
     * @param integer $id
     * @return object $user
     */
    public function deleteBusinessAccount($id)
    {
        $user =  $this->findBusinessById($id);
        DB::table("business")->where('id', $id)->delete();
        return $user;
    }

    public function getShopList()
    {
        return DB::table('business')
            ->join('currencies', 'business.currency_id', '=', 'currencies.id')
            ->select('business.*', 'currencies.currency')
            ->orderBy('id', 'desc')
            ->paginate(30);
    }
}
