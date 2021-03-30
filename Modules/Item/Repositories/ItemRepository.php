<?php

namespace Modules\Item\Repositories;

use App\Helpers\Base64Encoder;
use App\Helpers\StringHelper;
use App\Models\Project;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
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

    public function getItemsForDropdown()
    {
        $items = DB::table('items')->select(
            'id',
            'id as value',
            'name',
            DB::raw('CONCAT(name, " (", sku, ") ", "#", id) as label'),
            'sku'
        )->get();
        return $items;
    }

    /**
     * @return mixed
     * get all the items by pagination
     */
    public function indexByPaginate($perPage = 20)
    {
        $query = Item::with(['category', 'subCategory', 'unit', 'brand', 'attributes', 'business']);
            // ->orderBy('id', 'desc');

        if (request()->orderby) {
            $query->orderBy('id', request()->orderby);
        }else {
            $query->orderBy('id', 'desc');
        }

        if (request()->search) {
            $query->where('name', 'like', '%' . request()->search . '%');
            $query->orWhere('sku', 'like', '%' . request()->search . '%');
            $query->orWhere('sku_manual', 'like', '%' . request()->search . '%');
        }

        if (request()->category_id) {
            $query->where('category_id', request()->category_id);
            $query->orWhere('sub_category_id', request()->category_id);
            $query->orWhere('sub_category_id2', request()->category_id);
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
        if (request()->user()->hasPermissionTo('all_business.view')) {
            if (request()->business_id) {
                $query->where('business_id', request()->business_id);
            }
        } else {
            $query->where('business_id', request()->user()->business_id);
        }


        if (request()->isPaginated) {
            $paginateNo = request()->paginateNo ? request()->paginateNo : 20;
            return $query->paginate($paginateNo);
        } else {
            return $query->get();
        }
    }

    /**
     * Get Item Short Informations by Item IDS
     *
     * @param array $ids
     *
     * @return array items list
     */
    public function get_items_short_info_by_ids($ids = [])
    {
        $items = DB::table('items')
            ->leftJoin('tax_rates', 'tax_rates.id', '=', 'items.tax')
            ->leftJoin('business', 'items.business_id', '=', 'business.id')
            ->select(
                'items.id as item_id',
                'items.name as item_name',
                'items.sku as item_sku',
                'items.is_offer_enable',
                'items.default_selling_price',
                'items.offer_selling_price',
                'items.business_id',
                'tax_rates.amount as tax_amount',
                'tax_rates.calculation_type as tax_calculation_type',
                'business.shipping_charge_city as shipping_charge',
                'business.name as business_name',
            )
            ->whereIn('items.id', $ids)
            ->get();

        $item_rendered = [];

        foreach ($items as $item) {
            if ($item->is_offer_enable) {
                $item->selling_price = $item->offer_selling_price;
            } else {
                $item->selling_price = $item->default_selling_price;
            }

            // if($item->tax_amount > 0) {
            //     // $item_price =
            //     if( $item->tax_calculation_type === 'fixed') {
            //         $item->selling_price = $item->selling_price - $item->tax_amount;
            //     } else {
            //         $item->selling_price = $item->selling_price + ( $item->selling_price * $item->tax_amount / 100);
            //     }
            // }
            $item_rendered[] = $item;
        }

        return $item_rendered;
    }

    /**
     * @param $id
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|null
     * get a specific item with relation
     */
    public function show($id)
    {
        $item = Item::with(['category', 'subCategory', 'subCategory2', 'unit', 'brand', 'business', 'tax'])->find($id);
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
        $item = Item::with(['category', 'subCategory', 'subCategory2', 'unit', 'brand', 'business', 'tax'])
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
        if (!isset($data['sku']) || strlen($data['sku']) === 0) {
            $data['sku'] = $this->generateSlug($data['name']);
        } else {
            // Check if SKU is already exist or not else create new with embedding something
            $SKUItem = Item::where('sku', $data['sku'])->first();
            if (!is_null($SKUItem))
                $data['sku'] = $this->generateSlug($data['sku']);
            else
                $this->generateSlug($data['name']);
        }
        $data['barcode_type'] = isset($data['barcode_type']) ? $data['barcode_type'] : 'C39';

        // Upload Featured and Short Resolution Images
        if (isset($data['featured_image'])) {
            $featured_image = Base64Encoder::uploadBase64File($data['featured_image'], "/images/products/", 'featured-' . time() . '-' . uniqid(), 'product');
            $data['featured_image'] = $featured_image;
        }
        if (isset($data['short_resolation_image'])) {
            $short_resolation_image = Base64Encoder::uploadBase64File($data['short_resolation_image'], "/images/products/", 'short-resolution-' . time() . '-' . uniqid(), 'product');
            $data['short_resolation_image'] = $short_resolation_image;
        }
        $data['business_id'] = request()->user()->business_id;
        $data['created_by'] = request()->user()->id;
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
                // $attribute['attribute_values'] = json_encode($attribute['attribute_values']);
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

            $data['business_id'] = request()->user()->business_id;
            $item->update($data);

            // Delete if deleted any image selected
            if (isset($data['deleted_images']) && count($data['deleted_images']) > 0) {
                foreach ($data['deleted_images'] as $image) {
                    $this->deleteItemImage($image);
                }
            }

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
            // if (!is_null($item) && count($data['attributes']) > 0) {
            //     $datas = [];
            //     foreach ($data['attributes'] as $attribute) {
            //         $attributes = ItemAttribute::where('item_id', $item->id)
            //             ->where('attribute_id', $attribute['attribute_id'])
            //             ->first();
            //         $attribute['item_id'] = $item->id;
            //         $attribute['business_id'] = 1;
            //         array_push($datas, $attribute);

            //         if (!is_null($attributes)) {
            //             $attributeRepository->storeItemAttributes($datas, false);
            //         } else {
            //             $attributeRepository->storeItemAttributes($datas, true);
            //         }
            //     }
            // }

            // Delete if deleted any attribute selected
            if (isset($data['deleted_attributes']) && count($data['deleted_attributes']) > 0) {
                foreach ($data['deleted_attributes'] as $attribute) {
                    $this->deleteItemAttribute($attribute['id'], $item->id);
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
                    // $attribute['attribute_values'] = json_encode($attribute['attribute_values']);
                    $newAttribute['item_id'] = $item->id;
                    $newAttribute['attribute_id'] = $attribute['attribute_id'];
                    $newAttribute['attribute_values'] = isset($attribute['values']['attribute_values']) ? $attribute['values']['attribute_values'] : $attribute['attribute_values'];
                    $newAttribute['business_id'] = 1;
                    // $attribute['attribute_values'] = $attribute['attribute_values'];
                    array_push($datas, $newAttribute);

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

    public function deleteItemAttribute($attribute_id, $item_id)
    {
        ItemAttribute::where('item_id', $item_id)->where('attribute_id', $attribute_id)->delete();
        return true;
    }

    public function deleteItemImage($item_image)
    {
        $item_image = ItemImage::find($item_image['id']);
        if (!is_null($item_image)) {
            $location = public_path() . '/images/products/' . $item_image['image'];
            if (File::exists($location)) {
                File::delete($location);
            }

            $item_image->delete();
            return true;
        }
        return false;
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
        $items = Item::with(['category', 'subCategory', 'unit', 'brand', 'attributes', 'business'])
            ->where('category_id', $categoryId)
            ->get();

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
            $query = DB::table('items')->where('deleted_at', null);

            $page  = isset($data['page']) ? $data['page'] : 1;

            if (request()->orderby) {
                $query->orderBy('id', request()->orderby);
            }else {
                $query->orderBy('id', 'desc');
            }

            if (isset($data['search'])) {
                $search = trim($data['search']);
                $query->where('name', 'like', '%' . $search . '%');
                $query->orWhere('description', 'like', '%' . $search . '%');
                $query->orWhere('sku', 'like', '%' . $search . '%');
            }

            if (isset($data['category'])) {
                $category = trim($data['category']);

                if (is_numeric($category)) {
                    $category = intval($category);
                } else { // Slug/Short Code is passed
                    $cRepo    = new CategoryRepository();
                    $cat      = $cRepo->getCategoryBySlug($category);
                    $category = $cat ? $cat->id : 0;
                }

                $query->where(function($query) use ($category) {
                    $query->where('category_id', $category)
                          ->orWhere('sub_category_id', $category)
                          ->orWhere('sub_category_id2', $category);
                });
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

            if (isset($data['rating'])) {
                $average_rating = (float) $data['rating'];
                $min_value      = floor($average_rating);
                $max_value      = ceil($min_value + 0.9);

                $query->where(function ($query) use ($min_value, $max_value) {
                    $query->where('average_rating', '>=', $min_value)
                        ->where('average_rating', '<', $max_value);
                });
            }

            // Selective field only to make query faster
            $query->select(
                'items.id',
                'name',
                'sku',
                'featured_image',
                'featured_image',
                'default_selling_price',
                'offer_selling_price',
                'is_offer_enable',
                'current_stock',
                'average_rating'
            );

            $output = $query->paginate(20);
            // $itemsCollection = collect($output);
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

    /**
     * Search Item for frontend
     *
     * @param string $data
     *
     * @return array searched result with merging items, categories and tags array
     */
    public function searchItemFrontend($data)
    {

        try {

            if (isset($data['search'])) {
                $search = trim($data['search']);

                // Get 4 items
                $itemsArray = $this->getItemForSearchingByItem($search, 4);

                // Get 4 categories
                $categoryItemsArray = $this->getItemForSearchingByCategory($search, 4);

                // Get 3 tags
                // Future Task

                $searchedItems = array_merge($itemsArray, $categoryItemsArray);

                return $searchedItems;
            }
        } catch (\Exception $e) {
            return $e->getMessage();
            throw new Exception('Invalid Query Parameters. Please give a valid query !');
        }
    }

    public function getItemForSearchingByItem($search = '', $limit = 4)
    {
        $query = DB::table('items')
            ->select(
                'name',
                'sku',
                'current_stock',
                'default_selling_price',
                'offer_selling_price',
                'is_offer_enable',
                'featured_image'
            );

        $query->where('name', 'like', '%' . $search . '%');
        $query->orWhere('sku', 'like', '%' . $search . '%');

        $items = $query->limit($limit)->get();
        foreach ($items as $key => $item) {
            $data = [
                'slug' => $item->sku,
                'search_name' => $item->name,
                'search_image_url' => url('images/products/' . $item->featured_image),
                'is_item' => true,
                'search_price' => $item->is_offer_enable ? $item->offer_selling_price  : $item->default_selling_price,
                'is_category' => false,
                'is_tag' => false,
            ];
            $items[$key] = $data;
        }
        return $items->toArray();
    }


    public function getItemForSearchingByCategory($search = '', $limit = 3)
    {
        $query = DB::table('categories')
            ->select(
                'name',
                'short_code as sku',
                'image'
            );

        $query->where('name', 'like', '%' . $search . '%');
        $query->orWhere('short_code', 'like', '%' . $search . '%');

        $items = $query->limit($limit)->get();

        foreach ($items as $key => $item) {
            $data = [
                'slug' => $item->sku,
                'search_name' => $item->name,
                'search_image_url' => url('images/categories/' . $item->image),
                'is_item' => false,
                'search_price' => null,
                'is_category' => true,
                'is_tag' => false,
            ];
            $items[$key] = $data;
        }
        return $items->toArray();
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

    public function generateSlug($value)
    {
        return StringHelper::createSlug($value, 'Modules\Item\Entities\Item', 'sku');
    }
}
