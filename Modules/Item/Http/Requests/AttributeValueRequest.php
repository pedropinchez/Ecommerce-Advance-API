<?php

namespace Modules\Item\Http\Requests;

use App\Http\Requests\FormRequest;

class AttributeValueRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'value' => 'required',
            'code' => 'required',
            'attribute_id' => 'required'
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
            'value.required' => 'Value is required',
            'code.required' => 'Code is required',
            'attribute_id.required' => 'Attribute is required'
        ];
    }
}
