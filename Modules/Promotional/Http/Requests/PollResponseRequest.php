<?php

namespace Modules\Promotional\Http\Requests;

use App\Http\Requests\FormRequest;

class PollResponseRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'poll_id' => 'required',
            'poll_option_id' => 'required'
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
            'poll_id.required' => 'Poll is required',
            'poll_option_id.required' => 'Poll option is required'
        ];
    }
}
