<?php

namespace Modules\Item\Entities;

use Illuminate\Database\Eloquent\Model;

class ItemAttribute extends Model
{
    protected $fillable = [
        'item_id',
        'attribute_id',
        'business_id',
        'attribute_values'
    ];

    protected $casts = [
        'attribute_values' => 'array'
    ];

    public function attribute()
    {
        return $this->belongsTo(Attribute::class)->select('id', 'name');
    }

    public static function getAttributeWithValuesByItem($item_id)
    {
        $item_attributes = ItemAttribute::groupBy('attribute_id')
            ->select('attribute_id')
            ->where('item_id', $item_id)
            ->get();

        $data = [];
        foreach ($item_attributes as $key => $attribute) {
            $attribute = Attribute::where('id', $attribute['attribute_id'])->select('id', 'name')->first();

            if (!is_null($attribute)) {
                $data[$key] = $attribute;
                $values = ItemAttribute::where('item_id', $item_id)
                    ->where('attribute_id', $attribute->id)
                    ->select('id', 'attribute_id', 'attribute_values')
                    ->get();
                foreach ($values as $key2 => $attVal) {
                    $data[$key]['attribute_id'] = $attVal['attribute_id'];
                    $data[$key]['values'] = $attVal;
                    $attribute_values = $attVal['attribute_values'];
                    $items = [];
                    foreach ($attribute_values as $key3 =>  $value) {
                        $attribute_value = AttributeValue::select('id', 'value', 'code')->where('id', $value)->first();
                        if (!is_null($attribute_value)) {
                            array_push($items, $attribute_value);
                        }
                    }
                    $data[$key]['values']['attribute_values_data'] = $items;
                }
            }
        }
        return $data;
    }
}
