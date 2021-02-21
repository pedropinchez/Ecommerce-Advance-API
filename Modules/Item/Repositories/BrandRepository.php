<?php

namespace Modules\Item\Repositories;

use App\Helpers\ImageUploadHelper;
use App\Helpers\UploadHelper;
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
        $query = Brand::orderBy('id', 'desc');
        if (request()->search) {
            $query->where('name', 'like', '%' . request()->search . '%');
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
     * @param $data
     * @return mixed
     * insert brand to db
     */
    public function store($data)
    {
        $data['banner'] = UploadHelper::upload('banner', $data['banner'], 'brand-banner-' . '-' . time(), 'images/brands');
        $data['image'] = UploadHelper::upload('image',  $data['image'], 'brand-' . '-' . time(), 'images/brands');
        $data['business_id'] = request()->user()->business_id;
        $data['created_by'] = request()->user()->id;
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
        return Brand::with(['business'])->find($id);
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
        $data['banner'] = is_null($data['banner']) ? $brand->banner : UploadHelper::update('banner', $data['banner'], 'brand-banner-' . '-' . time(), 'images/brands', $brand->banner);
        $data['image'] = is_null($data['image']) ? $brand->image : UploadHelper::update('image',  $data['image'], 'brand-' . '-' . time(), 'images/brands', $brand->image);
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
        return Brand::with(['business'])->where('business_id', $businessId)->get();
    }
}
