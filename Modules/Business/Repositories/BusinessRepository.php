<?php

namespace Modules\Business\Repositories;

use App\Helpers\StringHelper;
use App\Helpers\UploadHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
        $query = DB::table('business')
            ->join('currencies', 'business.currency_id', '=', 'currencies.id')
            ->select('business.*', 'currencies.currency')
            ->orderBy('id', 'desc');

        if (request()->search) {
            $query->where('name', 'like', '%' . request()->search . '%');
            $query->orWhere('bin', 'like', '%' . request()->search . '%');
            $query->orWhere('slug', 'like', '%' . request()->search . '%');
        }

        if (request()->isPaginated) {
            $paginateNo = request()->paginateNo ? request()->paginateNo : 20;
            return $query->paginate($paginateNo);
        } else {
            return $query->get();
        }
    }

    /**
     * Get Shipping Charge By Business ID
     *
     * @param int $business_id
     *
     * @return object
     */
    public function get_shipping_charge_by_business_id($business_id)
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
     * @param array $data
     * @return object $user
     */
    public function create($data)
    {
        if (isset($data['logo'])) {
            $data['logo'] = UploadHelper::upload('logo',  $data['logo'], 'vendor-logo-' . '-' . time(), 'images/vendors');
        }

        if (isset($data['banner'])) {
            $data['banner'] = UploadHelper::upload('banner',  $data['banner'], 'vendor-banner-' . '-' . time(), 'images/vendors');
        }

        $data['slug'] = StringHelper::createSlug($data['name'], 'Modules\Business\Entities\Business', 'slug', '');
        $business     = Business::create($data);
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
        try {
            if (is_numeric($column_value)) {
                $business = Business::where('business.id', $column_value)
                    ->join('currencies', 'currencies.id',  '=', 'business.currency_id')
                    ->select('business.*', 'currencies.currency as currency_name', 'currencies.symbol as currency_symbol')
                    ->first();
            } else {
                $business = Business::where('slug', $column_value)
                    ->join('currencies', 'currencies.id',  '=', 'business.currency_id')
                    ->select('business.*', 'currencies.currency as currency_name', 'currencies.symbol as currency_symbol')
                    ->first();
            }

            if (request()->count_products) {
                $business->count_products = DB::table('items')
                    ->where('business_id', $business->id)
                    ->where('deleted_at', null)
                    ->count('business.id');
            }
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
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

            if (isset($data['logo'])) {
                $data['logo'] = UploadHelper::update('logo',  $data['logo'], 'vendor-logo-' . '-' . time(), 'images/vendors', $business->logo);
            } else {
                $data['logo'] = $business->logo;
            }

            if (isset($data['banner'])) {
                $data['banner'] = UploadHelper::update('banner',  $data['banner'], 'vendor-banner-' . '-' . time(), 'images/vendors', $business->banner);
            } else {
                $data['banner'] = $business->banner;
            }

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
