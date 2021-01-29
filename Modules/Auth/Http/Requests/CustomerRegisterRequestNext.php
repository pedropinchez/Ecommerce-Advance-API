<?php

namespace Modules\Auth\Http\Requests;

use App\Http\Requests\FormRequest;

class CustomerRegisterRequestNext extends FormRequest
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
            'phone_no' => 'required|string|max:15',
            'otp' => 'required|max:10|string',
            'password' => 'required|min:6|confirmed',
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
            'phone_no.required' => 'Please give phone no',
            'otp.required' => 'Please give OTP',
            'password.required' => 'Please give password',
        ];
    }
}
