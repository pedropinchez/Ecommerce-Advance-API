<?php

namespace Modules\Customer\Http\Requests;

use App\Http\Requests\FormRequest;

class AddressRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'street1' => 'required',
            'street2' => 'nullable|string',
            'city_id' => 'required|numeric',
            'city' => 'required|string',
            'area_id' => 'required|numeric',
            'area' => 'required|string',
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
            //
        ];
    }
}
