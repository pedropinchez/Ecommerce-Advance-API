<?php

namespace Modules\Item\Repositories;

use App\Helpers\ImageUploadHelper;
use App\Helpers\StringHelper;
use App\Helpers\UploadHelper;
use Modules\Item\Entities\Brand;
use Modules\Item\Interfaces\BrandInterface;
use Auth;
use Illuminate\Support\Facades\DB;

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
        $data['banner']      = UploadHelper::upload('banner', $data['banner'], 'brand-banner-' . '-' . time(), 'images/brands');
        $data['image']       = UploadHelper::upload('image',  $data['image'], 'brand-' . '-' . time(), 'images/brands');
        $data['business_id'] = request()->user()->business_id;
        $data['created_by']  = request()->user()->id;
        $data['slug']        = StringHelper::createSlug($data['name'], 'Modules\Item\Entities\Brand', 'sku');
        $brand               = Brand::create($data);
        return $brand;
    }

    /**
     * Show Brand By ID or Slug
     *
     * @param int|string $icolumn_valued
     *
     * @return object|Modules\Item\Entities\Brand
     *
     * get single brand
     */
    public function show($column_value)
    {
        try {
            if (is_numeric($column_value)) {
                $brand = Brand::with(['business'])->find($column_value);
            } else {
                $brand = Brand::with(['business'])->where('slug', $column_value)->first();
            }

            if(request()->count_products){
                $brand->count_products = DB::table('items')
                ->where('brand_id', $brand->id)
                ->where('deleted_at', null)
                ->count('id');
            }

            return $brand;
        } catch (\Exception $e) {
            return null;
        }
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
        if ($brand) {
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
