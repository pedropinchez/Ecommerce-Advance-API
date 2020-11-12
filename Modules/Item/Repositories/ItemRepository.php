<?php

namespace Modules\Item\Repositories;

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
     * @param $data
     * @return mixed
     * store new item to db
     */
    public function store($data)
    {
        $item = Item::create($data);
        if(isset($data['image_data']) && $item) {
            foreach ($data['image_data'] as $imageRow) {
                ItemImage::create([
                    'item_id' => $item->id,
                    'business_id' => $item->business_id,
                    'image' => $imageRow['image'],
                    'image_size' => $imageRow['image_size'],
                    'image_title' => $imageRow['image_title']
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
        if($item) {
            $item->update($data);
            if(isset($data['image_data'])) {
                foreach ($data['image_data'] as $image) {
                    ItemImage::create([
                        'item_id' => $item->id,
                        'file_name' => $image
                    ]);
                }
            }
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
        if($item) {
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
        if($item) {
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
        if($itemFile) {
            return true;
        } else {
            return false;
        }
    }

    public function destroyImage($id)
    {
        $itemFile = ItemImage::find($id);
        if($itemFile) {
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
        return Item::with(['category', 'subCategory', 'brand'])->paginate(40);
    }
}
