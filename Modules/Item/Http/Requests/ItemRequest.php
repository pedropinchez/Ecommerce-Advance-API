<?php

namespace Modules\Item\Http\Requests;

use App\Http\Requests\FormRequest;

class ItemRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'business_id' => 'required',
            'unit_id' => 'required',
            'tax_type' => 'required',
            'alert_quantity' => 'required',
            // 'sku' => 'required',
            // 'barcode_type' => 'required',
            // 'created_by' => 'required'
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
            'name.required' => 'Item name is required',
            'business_id.required' => 'Business is required',
            'unit_id.required' => 'Unit is required',
            'tax_type.required' => 'Tax type is required',
            'alert_quantity.required' => 'Alert quantity is required',
            'sku.required' => 'SKU is required',
            'barcode_type.required' => 'Barcode type created is required',
            'created_by.required' => 'Whom created is required'
        ];
    }
}
