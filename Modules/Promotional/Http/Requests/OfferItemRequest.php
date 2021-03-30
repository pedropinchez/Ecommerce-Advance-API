<?php

namespace Modules\Promotional\Http\Requests;

use App\Http\Requests\FormRequest;

class OfferItemRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'item_id'       => 'required|numeric',
            'current_price' => 'required|numeric',
            'offer_price'   => 'required|numeric',
            'offer_type'    => 'required|string',
            'start_date'    => 'nullable|string',
            'end_date'      => 'nullable|string',
            'is_unlimited'  => 'nullable|numeric',
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
     *
     * Custom validation message
     */
    public function messages()
    {
        return [
            'item_id.required'       => 'Item is required',
            'current_price.required' => 'Current Price is required',
            'offer_price.required'   => 'Offer Price is required',
            'offer_type.required'    => 'Offer Type is required',
        ];
    }
}
