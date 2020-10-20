<?php

namespace Modules\Sales\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransactionRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'business_id' => 'required',
            'type' => 'required',
            'delivery_status' => 'required',
            'payment_status' => 'required',
            'discount_type_id' => 'required',
            'tax_id' => 'required',
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
            'business_id' => 'Business is required',
            'type' => 'Type is required',
            'delivery_status' => 'Delivery status is required',
            'payment_status' => 'Payment status is required',
            'discount_type_id' => 'Discount type is required',
            'tax_id' => 'Tax is required',
            'created_by' => 'Whom created is required'
        ];
    }
}
