<?php

namespace Modules\Item\Http\Requests;

use App\Http\Requests\FormRequest;

class FeaturedItemRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'item_id' => 'required|numeric'
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
            'item_id.required' => 'Please select an item',
            'item_id.numeric' => 'Please select a valid item',
        ];
    }
}
