<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RatesStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'order_details_id' => 'required|exists:order_details,id',
            'rate' => 'required|in:1,2,3,4,5',
        ];
    }
}
