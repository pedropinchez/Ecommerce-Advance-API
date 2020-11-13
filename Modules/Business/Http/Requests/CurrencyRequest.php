<?php

namespace Modules\Business\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CurrencyRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'country' => 'required',
            'currency' => 'required',
            'code' => 'required',
            'symbol' => 'required',
            'thousand_separator' => 'required',
            'decimal_separator' => 'required'
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
            'currency.required' => 'Currency is required',
            'symbol.required' => 'Symbol is required',
            'country.required' => 'Country type is required',
            'code.required' => 'Code is required',
            'thousand_separator.required' => 'Thousand separator is required',
            'decimal_separator' => 'Decimal separator code is required'
        ];
    }
}
