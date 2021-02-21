<?php

namespace Modules\Item\Repositories;

use App\Helpers\StringHelper;
use Modules\Business\Entities\Business;
use Modules\Item\Entities\Attribute;
use Modules\Item\Entities\AttributeValue;
use Modules\Item\Entities\ItemAttribute;
use Modules\Item\Interfaces\AttributeInterface;

class AttributeRepository implements AttributeInterface
{
    /**
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     * get all the attributes
     */
    public function index()
    {
        // return Attribute::with(['attributeValues'])->get();
        $query = Attribute::withCount('attributeValues')->with('category')->orderBy('id', 'desc');
        if (request()->search) {
            $query->where('name', 'like', '%' . request()->search . '%');
        }
        if (request()->category_id) {
            $query->where('category_id', request()->category_id);
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
     * @throws \Exception
     * store attribute to db
     */
    public function store($data)
    {
        $attribute = Attribute::where('name', $data['name'])->where('category_id', $data['category_id'])->first();
        if (is_null($attribute)) {
            $data['business_id'] = request()->user()->business_id;
            $data['slug'] = $this->generateSlug($data['name']);
            $attribute = Attribute::create($data);
        }
        if (count($data['values']) > 0) {
            foreach ($data['values'] as $key => $value) {
                $value['attribute_id'] = $attribute->id;
                AttributeValue::create($value);
            }
        }
        return $attribute;
    }

    /**
     * storeItemAttributes
     */
    public function storeItemAttributes($attributes, $isInsert = true)
    {
        if(count($attributes) > 0){
            if($isInsert){
                foreach ($attributes as $attribute) {
                    $attributeValue = ItemAttribute::where('item_id', $attribute['item_id'])
                    ->where('attribute_id', $attribute['attribute_id'])->first();
                    if(!is_null($attributeValue)){
                        $attributeValue->update($attribute);
                    }else{
                        ItemAttribute::create($attribute);
                    }
                }
                // ItemAttribute::insert($attributes);
            }else{
                foreach ($attributes as $attribute) {
                    ItemAttribute::where('item_id', $attribute['item_id'])
                    ->where('attribute_id', $attribute['attribute_id'])
                    ->update($attribute);
                }
            }
        }
    }

    /**
     * @param $id
     * @return mixed
     * details attribute
     */
    public function show($id)
    {
        return Attribute::with(['attributeValues', 'category'])->find($id);
    }

    /**
     * @param $id
     * @param $data
     * @return mixed
     * @throws \Exception
     * update attribute
     */
    public function update($id, $data)
    {
        $attributeValueRepository = new AttributeValueRepository();
        $attribute = Attribute::find($id);
        if (!is_null($attribute)) {
            $data['business_id'] = Business::getMainBusinessID();
            if ($data['name'] != $attribute->name) {
                $data['slug'] = $this->generateSlug($data['name']);
            }
            $attribute->update($data);
            //$attributeValueRepository->destroyByAttributeID($attribute->id);

            if (isset($data['deleted_values']) && count($data['deleted_values']) > 0) {
                foreach ($data['deleted_values'] as $value) {
                    $attributeValueRepository->destroy($value['id']);
                }
            }

            if (count($data['values']) > 0) {
                foreach ($data['values'] as $value) {
                    $value['attribute_id'] = $attribute->id;
                    if(isset($value['id'])){
                        $attributeValue = $attributeValueRepository->show($value['id']);
                        if(!is_null($attributeValue))
                            $attributeValue->update($value);
                        else
                            AttributeValue::create($value);
                    }else{
                        AttributeValue::create($value);
                    }

                }
            }
        }

        return $attribute;
    }

    /**
     * @param $id
     * @return bool
     * delete attribute & also values
     */
    public function destroy($id)
    {
        $attribute = Attribute::find($id);
        if ($attribute) {
            $attribute->delete();
            AttributeValue::where('attribute_id', $id)->delete();
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param $businessId
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     * get attributes with matching business
     */
    public function getAttributeByBusiness($businessId)
    {
        return Attribute::with(['attributeValues'])->where('business_id', $businessId)->get();
    }

    /**
     * @param $categoryId
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     * get attributes with matching category
     */
    public function getAttributeByCategory($categoryId)
    {
        return Attribute::with(['attributeValues'])->where('category_id', $categoryId)->get();
    }

    /**
     * @param $businessId
     * @param $categoryId
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     * get attributes with matching category & business
     */
    public function getAttributeByCategoryAndBusiness($businessId, $categoryId)
    {
        return Attribute::with(['attributeValues'])
            ->where('business_id', $businessId)
            ->where('category_id', $categoryId)
            ->get();
    }

    /**
     * @param $value
     * @return string|string[]|null
     * @throws \Exception
     * generate slug
     */
    public function generateSlug($value)
    {
        return StringHelper::createSlug($value, 'Modules\Item\Entities\Attribute', 'slug');
    }
}
