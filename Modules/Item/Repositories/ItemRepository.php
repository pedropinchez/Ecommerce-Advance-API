<?php

namespace Modules\Item\Repositories;

use App\Helpers\Base64Encoder;
use App\Helpers\StringHelper;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Modules\Item\Entities\Item;

use Modules\Item\Entities\ItemAttribute;
use Modules\Item\Entities\ItemImage;
use Modules\Item\Interfaces\ItemInterfaces;

class ItemRepository implements ItemInterfaces
{
    /**
     * @return mixed
     * get all the items
     */
    public function index()
    {
        $items = Item::get();
        return $items;
    }
    /**
     * @return mixed
     * get all the items by pagination
     */
    public function indexByPaginate($perPage=20)
    {
        $query = Item::with(['category', 'subCategory', 'unit', 'brand', 'attributes', 'business'])
        ->orderBy('id', 'desc');

        if (request()->search) {
            $query->where('name', 'like', '%' . request()->search . '%');
            $query->orWhere('sku', 'like', '%' . request()->search . '%');
            $query->orWhere('sku_manual', 'like', '%' . request()->search . '%');
        }

        if (request()->category_id) {
            $query->where('category_id', request()->category_id);
        }

        if (request()->sub_category_id) {
            $query->where('sub_category_id', request()->sub_category_id);
        }

        if (request()->brand_id) {
            $query->where('brand_id', request()->brand_id);
        }

        if (request()->unit_id) {
            $query->where('unit_id', request()->unit_id);
        }

        if (request()->business_id) {
            $query->where('business_id', request()->business_id);
        }

        if (request()->isPaginated) {
            $paginateNo = request()->paginateNo ? request()->paginateNo : 20;
            return $query->paginate($paginateNo);
        } else {
            return $query->get();
        }
    }

    /**
     * @param $id
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|null
     * get a specific item with relation
     */
    public function show($id)
    {
        $item = Item::with(['category', 'subCategory', 'unit', 'brand', 'attributes', 'business'])->find($id);
        return $item;
    }


    /**
     * @param $slug
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|null
     * get a specific item with relation
     */
    public function showBySlug($slug)
    {
        $item = Item::with(['category', 'subCategory', 'unit', 'brand', 'attributes', 'business'])
        ->where('sku', $slug)
        ->first();
        return $item;
    }

    /**
     * @param $data
     * @return mixed
     * store new item to db
     */
    public function store($data)
    {
        $item = Item::create($data);
        // Upload Featured and Short Resolution Images
        $featured_image = Base64Encoder::uploadBase64File($data['featured_image'], "/public/images/products/", 'featured-'.time().$item->id, 'product');
        $short_resolation_image = Base64Encoder::uploadBase64File($data['short_resolation_image'], "/public/images/products/", 'short-resolution-'.time().$item->id, 'product');
        $item->featured_image = $featured_image;
        $item->short_resolation_image = $short_resolation_image;
        $item->save();

        // Upload Multiple Images
        if(!is_null($item) && count($data['images']) > 0){
            foreach ($data['images'] as $image) {
                $fileName = null;
                if (isset($image['imageFile']) && !is_null($image['imageFile']) && $image['imageFile'] !== "") {
                    $fileName = Base64Encoder::uploadBase64File($image['imageFile'], "/public/images/products/", time().$item->id, 'product');
                }
                ItemImage::create([
                    'item_id' => $item->id,
                    'business_id' => $item->business_id,
                    'image' => $fileName,
                    'image_size' => $image['imageSize'],
                    'image_title' => $image['imageTitle'],
                ]);
            }
        }
        return $item;
    }

    /**
     * @param $id
     * @param $data
     * @return mixed
     * update item
     */
    public function update($id, $data)
    {
        $item = Item::find($id);
        if ($item) {
            $item->update($data);
            // if (isset($data['image_data'])) {
            //     foreach ($data['image_data'] as $image) {
            //         ItemImage::create([
            //             'item_id' => $item->id,
            //             'file_name' => $image
            //         ]);
            //     }
            // }
        }

        return $item;
    }

    /**
     * @param $id
     * @return bool
     * delete item
     */
    public function destroy($id)
    {
        $item = Item::find($id);
        if ($item) {
            $item->delete();
            $item->attributes()->delete();
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param $businessId
     * @return mixed
     * get items with business
     */
    public function getItemByBusiness($businessId)
    {
        $items = Item::with(['category', 'subCategory', 'unit', 'brand', 'attributes', 'business'])->where('business_id', $businessId)->get();
        return $items;
    }

    /**
     * @param $id
     * @param $data
     * @return mixed
     * update the attribute values with item
     */
    public function updateItemAttribute($id, $data)
    {
        $item = Item::find($id);
        if ($item) {
            $item->attributes()->delete();
            ItemAttribute::insert($data);
        }

        return $item;
    }

    /**
     * @param $categoryId
     * @return mixed
     * get items with category
     */
    public function getItemByCategory($categoryId)
    {
        $items = Item::with(['category', 'subCategory', 'unit', 'brand', 'attributes', 'business'])->where('category_id', $categoryId)->get();
        return $items;
    }

    /**
     * @param $subCategoryId
     * @return mixed
     * get items with subCategory
     */
    public function getItemBySubCategory($subCategoryId)
    {
        $items = Item::with(['category', 'subCategory', 'unit', 'brand', 'attributes', 'business'])->where('sub_category_id', $subCategoryId)->get();
        return $items;
    }

    /**
     * @param $brandId
     * @return mixed
     * get items with brand
     */
    public function getItemByBrand($brandId)
    {
        $items = Item::with(['category', 'subCategory', 'unit', 'brand', 'attributes', 'business'])->where('brand_id', $brandId)->get();
        return $items;
    }

    public function uploadImage($data)
    {
        $itemFile = ItemImage::create($data);
        if ($itemFile) {
            return true;
        } else {
            return false;
        }
    }

    public function destroyImage($id)
    {
        $itemFile = ItemImage::find($id);
        if ($itemFile) {
            $itemFile->delete();
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return mixed
     * get items
     */
    public function getProductList()
    {
        return Item::with([
            'category',
            'subCategory',
            'brand',
        ])
            ->paginate(40);
    }

    /**
     * @return mixed
     * get items
     */
    public function getProductListByCategory($category_id)
    {
        return Item::with([
            'category',
            'subCategory',
            'brand',
        ])
            ->where('category_id', $category_id)
            ->orWhere('sub_category_id', $category_id)
            ->paginate(40);
    }
}
