<?php

namespace Modules\Item\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UnitRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'actual_name' => 'required',
            'business_id' => 'required',
            'short_name' => 'required',
            'allow_decimal' => 'boolean',
            'created_by' => 'required'
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
            'actual_name.required' => 'Unit name is required',
            'business_id.required' => 'Business is required',
            'short_name.required' => 'Short name is required',
            'allow_decimal.required' => 'Allow decimal is required',
            'created_by.required' => 'Whom created is required'
        ];
    }
}
