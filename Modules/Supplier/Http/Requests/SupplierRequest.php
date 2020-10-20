<?php

namespace Modules\Supplier\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupplierRequest extends FormRequest
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
            'mobile' => 'required',
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
            'name.required' => 'Supplier name is required',
            'business_id.required' => 'Business is required',
            'mobile.required' => 'Mobile is required',
            'created_by.required' => 'By Whom created is required is required'
        ];
    }
}
