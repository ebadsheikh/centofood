<?php

namespace App\Http\Requests\Api\DeliveryAddress;

use Illuminate\Foundation\Http\FormRequest;

class StoreDeliveryAddressRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'user_id' => 'nullable',
            'description' => 'nullable',
            'address' => 'nullable',
            'latitude' => 'nullable',
            'longitude' => 'nullable',
            'is_default' => 'nullable',
        ];
    }
}
