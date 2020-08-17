<?php

namespace Modules\Item\Repositories;

use Modules\Item\Entities\Brand;
use Modules\Item\Interfaces\BrandInterface;
use Auth;

class BrandRepository implements BrandInterface
{
    /**
     * @return mixed
     * get all the brands with business
     */
    public function index()
    {
        return Brand::get();
    }

    /**
     * @param $data
     * @return mixed
     * insert brand to db
     */
    public function store($data)
    {
        $brand = Brand::create($data);
        return $brand;
    }

    /**
     * @param $id
     * @return mixed
     * get single brand
     */
    public function show($id)
    {
        return Brand::find($id);
    }

    /**
     * @param $id
     * @param $data
     * @return mixed
     * update brand
     */
    public function update($id, $data)
    {
        $brand = Brand::find($id);
        $brand->update($data);
        return $brand;
    }

    /**
     * @param $id
     * @return bool
     * delete brand
     */
    public function destroy($id)
    {
        $brand = Brand::find($id);
        if($brand) {
            $brand->delete();
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param $businessId
     * @return mixed
     * get all the brands of business
     */
    public function getBrandByBusiness($businessId)
    {
        return Brand::where('business_id', $businessId)->get();
    }
}
