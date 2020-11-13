<?php

namespace Modules\Business\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaxRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'business_id' => 'required',
            'name' => 'required',
            'calculation_type' => 'required',
            'amount' => 'required',
            'is_tax_group' => 'required',
            'rounding_type' => 'required',
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
            'name.required' => 'Name is required',
            'business_id.required' => 'Business is required',
            'created_by.required' => 'By whom created is required',
            'calculation_type.required' => 'Calculation type is required',
            'is_tax_group.required' => 'Tax group type is required',
            'amount.required' => 'Amount is required',
            'rounding_type' => 'Rounding type is required'
        ];
    }
}
