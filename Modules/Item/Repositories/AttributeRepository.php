<?php

namespace Modules\Item\Repositories;

use App\Helpers\StringHelper;
use Modules\Item\Entities\Attribute;
use Modules\Item\Entities\AttributeValue;
use Modules\Item\Interfaces\AttributeInterface;

class AttributeRepository implements AttributeInterface
{
    /**
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     * get all the attributes
     */
    public function index()
    {
        return Attribute::with(['attributeValues'])->get();
    }

    /**
     * @param $data
     * @return mixed
     * @throws \Exception
     * store attribute to db
     */
    public function store($data)
    {
        $data['slug'] = $this->generateSlug($data['name']);
        return Attribute::create($data);
    }

    /**
     * @param $id
     * @return mixed
     * details attribute
     */
    public function show($id)
    {
        return Attribute::with(['attributeValues'])->find($id);
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
        $attribute = Attribute::find($id);
        if($attribute) {
            if($data['name'] != $attribute->name) {
                $data['slug'] = $this->generateSlug($data['name']);
            }
            $attribute->update($data);
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
        if($attribute) {
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
