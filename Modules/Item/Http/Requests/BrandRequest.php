<?php

namespace Modules\Item\Http\Requests;

use App\Http\Requests\FormRequest;

class BrandRequest extends FormRequest
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
            'name.required' => 'Brand name is required',
            'business_id.required' => 'Business is required',
            'created_by.required' => 'Whom created is required'
        ];
    }
}
