<?php

namespace Modules\Promotional\Http\Requests;

use App\Http\Requests\FormRequest;

class GiftCardTransactionRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_id' => 'required',
            'business_id' => 'required',
            'gift_card_id' => 'required',
            'paid_total' => 'required',
            'payment_status' => 'required'
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
            'user_id.required' => 'User is required',
            'business_id.required' => 'Business is required',
            'gift_card_id.required' => 'Gift card / Voucher is required',
            'paid_total.required' => 'Total is required',
            'payment_status.required' => 'Payment status is required'
        ];
    }
}
