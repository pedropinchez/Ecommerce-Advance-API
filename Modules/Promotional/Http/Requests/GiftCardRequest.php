<?php

namespace Modules\Promotional\Http\Requests;

use App\Http\Requests\FormRequest;

class GiftCardRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'price_value_for' => 'required',
            'change_price_value' => 'required',
            'image' => 'nullable|image',
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
            'title.required' => 'Title is required',
            'price_value_for.required' => 'Price is required',
            'change_price_value.required' => 'Customer Price Value is required',
        ];
    }
}
