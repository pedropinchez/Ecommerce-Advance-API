<?php

namespace Modules\Promotional\Http\Requests;

use App\Http\Requests\FormRequest;

class PollRequest extends FormRequest
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
            'type' => 'required'
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
            'type.required' => 'Type is required'
        ];
    }
}
