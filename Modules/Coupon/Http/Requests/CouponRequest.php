<?php

namespace Modules\Coupon\Http\Requests;

use App\Http\Requests\FormRequest;

class CouponRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // 'code' => 'required|unique:coupons',
            // 'coupon_amount' => 'required',
            // 'coupon_type_id ' => 'required',
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
            'code.required' => 'Coupon code is required',
            'coupon_amount.required' => 'Coupon coupon amount is required',
            'coupon_type_id.required' => 'Coupon type is required',
        ];
    }
}
