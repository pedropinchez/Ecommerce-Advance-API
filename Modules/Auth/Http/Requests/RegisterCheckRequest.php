<?php

namespace Modules\Auth\Http\Requests;

use Exception;
use App\Http\Requests\FormRequest;

class RegisterCheckRequest extends FormRequest
{
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
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'phone_no' => 'nullable|string|max:15',
            'email' => 'nullable|string|email',
        ];
    }

    /**
     * Get the messages for the rules
     *
     * @return array
     */
    public function messages()
    {
        return [
            'email.email' => 'Invalid Email, Please use another email',
            'phone_no.max' => 'Please a phone no max of 15 digits',
        ];
    }
}
