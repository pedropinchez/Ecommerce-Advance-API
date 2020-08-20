<?php

namespace Modules\Item\Repositories;

use Modules\Item\Entities\AttributeValue;
use Modules\Item\Interfaces\AttributeValueInterface;

class AttributeValueRepository implements AttributeValueInterface
{
    /**
     * @return mixed
     * get all the attribute values
     */
    public function index()
    {
        return AttributeValue::get();
    }

    /**
     * @param $data
     * @return mixed
     * store value to db
     */
    public function store($data)
    {
        return AttributeValue::create($data);
    }

    /**
     * @param $id
     * @return mixed
     * get the attribute details
     */
    public function show($id)
    {
        return AttributeValue::find($id);
    }

    /**
     * @param $id
     * @param $data
     * @return mixed
     * update the attribute value
     */
    public function update($id, $data)
    {
        $attributeValue = AttributeValue::find($id);
        if($attributeValue) {
            $attributeValue->update($data);
        }

        return $attributeValue;
    }

    /**
     * @param $id
     * @return bool
     * delete the attribute
     */
    public function destroy($id)
    {
        $attributeValue = AttributeValue::find($id);
        if($attributeValue) {
            $attributeValue->delete();
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param $attributeId
     * @return mixed
     * get the attribute value with attribute
     */
    public function getAttributeValueByAttribute($attributeId)
    {
        return AttributeValue::where('attribute_id', $attributeId)->get();
    }
}
