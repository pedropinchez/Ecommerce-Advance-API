<?php

namespace Modules\Business\Http\Requests;

use App\Http\Requests\FormRequest;

class SliderRequest extends FormRequest
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
            // 'image' => 'required|image',
            'button_link' => 'nullable|url',
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
            'title.required' => 'Slider title is required',
            'business_id.required' => 'Business is required',
            'created_by.required' => 'Whom created is required'
        ];
    }
}
