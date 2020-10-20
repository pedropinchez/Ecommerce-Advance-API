<?php

namespace Modules\Item\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemAttributeRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'item_id' => 'required',
            'attribute_id' => 'required',
            'business_id' => 'required',
            'attribute_values' => 'required'
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * @return array
     * Custom validation message
     */
    public function messages()
    {
        return [
            'item_id.required' => 'Item is required',
            'business_id.required' => 'Business is required',
            'attribute_id.required' => 'Attribute is required',
            'attribute_values.required' => 'Attribute value is required'
        ];
    }
}
