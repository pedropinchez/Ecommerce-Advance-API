<?php

namespace Modules\Item\Repositories;

use App\Helpers\Base64Encoder;
use App\Helpers\StringHelper;
use App\Models\Project;
use Exception;
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
    public function indexByPaginate($perPage = 20)
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
        $item = Item::with(['category', 'subCategory', 'subCategory2', 'unit', 'brand', 'business'])->find($id);
        $item['attributes'] = ItemAttribute::getAttributeWithValuesByItem($id);
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
        // Upload Featured and Short Resolution Images
        if (isset($data['featured_image'])) {
            $featured_image = Base64Encoder::uploadBase64File($data['featured_image'], "/images/products/", 'featured-' . time() . '-' . uniqid(), 'product');
            $data['featured_image'] = $featured_image;
        }
        if (isset($data['short_resolation_image'])) {
            $short_resolation_image = Base64Encoder::uploadBase64File($data['short_resolation_image'], "/images/products/", 'short-resolution-' . time() . '-' . uniqid(), 'product');
            $data['short_resolation_image'] = $short_resolation_image;
        }

        $item = Item::create($data);
        $item->save();

        // Upload Multiple Images
        if (!is_null($item) && isset($data['images']) && count($data['images']) > 0) {
            foreach ($data['images'] as $image) {
                $fileName = null;
                if (isset($image['base64']) && !is_null($image['base64']) && $image['base64'] !== "") {
                    $fileName = Base64Encoder::uploadBase64File($image['base64'], "/images/products/", time() . $item->id, 'product');
                }
                ItemImage::create([
                    'item_id' => $item->id,
                    'business_id' => $item->business_id,
                    'image' => $fileName,
                    'image_size' => $image['size'],
                    'image_title' => $image['name'],
                ]);
            }
        }

        // Upload Attribute if it has
        $attributeRepository = new AttributeRepository();
        if (!is_null($item) && isset($data['attributes']) && count($data['attributes']) > 0) {
            $datas = [];
            foreach ($data['attributes'] as $attribute) {
                $attributes = ItemAttribute::where('item_id', $item->id)
                    ->where('attribute_id', $attribute['attribute_id'])
                    ->first();
                $attribute['item_id'] = $item->id;
                $attribute['business_id'] = 1;
                // $attribute['attribute_values'] = $attribute['attribute_values'];
                array_push($datas, $attribute);

                if (!is_null($attributes)) {
                    $attributeRepository->storeItemAttributes($datas, false);
                } else {
                    $attributeRepository->storeItemAttributes($datas, true);
                }
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
            // Upload Featured and Short Resolution Images
            if (isset($data['featured_image']) && $item->featured_image !== $data['featured_image']) {
                $featured_image = Base64Encoder::updateBase64File($data['featured_image'], "/images/products/", $item->featured_image, 'product');
                $data['featured_image'] = $featured_image;
            } else {
                $data['featured_image'] = $item->featured_image;
            }

            if (isset($data['short_resolation_image']) && $item->short_resolation_image !== $data['short_resolation_image']) {
                $short_resolation_image = Base64Encoder::updateBase64File($data['short_resolation_image'], "/images/products/", $item->short_resolation_image, 'product');
                $data['short_resolation_image'] = $short_resolation_image;
            } else {
                $data['short_resolation_image'] = $item->short_resolation_image;
            }

            $item->update($data);

            // Upload Multiple Images
            if (!is_null($item) && count($data['images']) > 0) {
                foreach ($data['images'] as $image) {
                    if (!isset($image['id'])) {
                        $fileName = null;
                        if (isset($image['base64']) && !is_null($image['base64']) && $image['base64'] !== "") {
                            $fileName = Base64Encoder::uploadBase64File($image['base64'], "/images/products/", time() . $item->id, 'product');
                        }
                        ItemImage::create([
                            'item_id' => $item->id,
                            'business_id' => $item->business_id,
                            'image' => $fileName,
                            'image_size' => $image['size'],
                            'image_title' => $image['name'],
                        ]);
                    }
                }
            }

            // Upload Attribute if it has
            $attributeRepository = new AttributeRepository();
            if (!is_null($item) && count($data['attributes']) > 0) {
                $datas = [];
                foreach ($data['attributes'] as $attribute) {
                    $attributes = ItemAttribute::where('item_id', $item->id)
                        ->where('attribute_id', $attribute['attribute_id'])
                        ->first();
                    $attribute['item_id'] = $item->id;
                    $attribute['business_id'] = 1;
                    array_push($datas, $attribute);

                    if (!is_null($attributes)) {
                        $attributeRepository->storeItemAttributes($datas, false);
                    } else {
                        $attributeRepository->storeItemAttributes($datas, true);
                    }
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
    public function getProductList($data)
    {
        try {
            $query = Item::orderBy('id', 'desc');
            $page = isset($data['page']) ? $data['page'] : 1;

            if (isset($data['search'])) {
                $search = trim($data['search']);
                $query->where('name', 'like', '%' . $search . '%');
                $query->orWhere('description', 'like', '%' . $search . '%');
                $query->orWhere('sku', 'like', '%' . $search . '%');
            }

            if (isset($data['category'])) {
                $query->where('category_id', $data['category']);
            }

            if (isset($data['brand'])) {
                $query->where('brand_id', $data['brand']);
            }

            if (isset($data['min_price'])) {
                $query->where('default_selling_price', '>=', $data['min_price']);
            }

            if (isset($data['max_price'])) {
                $query->where('default_selling_price', '<=', $data['max_price']);
            }

            $output = $query->paginate(20);
            $itemsCollection = collect($output);
            // foreach ($itemsCollection as $key => $item) {
            //     // If
            //     if (isset($data['attributes'])) {
            //         $attributes = $data['attributes'];
            //         // Get all attributes and separate them using comma
            //         $attributesArray = explode(',', $attributes);
            //         foreach ($attributesArray as $key => $value) {
            //             $trimmedAttribute = trim($value);
            //             $attribute_id = (int) explode(':', $trimmedAttribute)[0];
            //             $attribute_value_id = (int) explode(':', $trimmedAttribute)[1];
            //             $attributesArray[$key] = $attribute_value_id;
            //         }
            //     }
            //     // return $attributesArray;

            //     $itemsCollection[$key] = $item;
            // }

            // return $itemsCollection->forPage($page, 20);
            return $output;
        } catch (\Exception $e) {
            return $e->getMessage();
            throw new Exception('Invalid Query Parameters. Please give a valid query !');
        }
    }

    public function searchItemFrontend($data)
    {
        try {
            $query = Item::orderBy('id', 'desc')
            ->select(
                "name",
                "sku",
                "description",
                "current_stock",
                "default_selling_price",
                "offer_selling_price",
                "is_offer_enable",
            );


            if (isset($data['search'])) {
                $search = trim($data['search']);
                $query->where('name', 'like', '%' . $search . '%');
                $query->orWhere('description', 'like', '%' . $search . '%');
                $query->orWhere('sku', 'like', '%' . $search . '%');
            }

            $output = $query->paginate(10);
            return $output;
        } catch (\Exception $e) {
            return $e->getMessage();
            throw new Exception('Invalid Query Parameters. Please give a valid query !');
        }
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
