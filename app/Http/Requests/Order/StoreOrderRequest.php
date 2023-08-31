<?php

namespace App\Http\Requests\Order;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
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
            'user_id' => auth()->user()->id,
            'restaurant_id' => 'required|integer|exists:restaurants,id',
            'tax' => 'required',
            'delivery_fee' => 'required',
            'discount' => 'required',
            'sub_total' => 'required|integer',
            'total' => 'required|integer',
            'active' => 'required',
            'driver_id' => 'required|integer|exists:drivers,id',
            'instructions' => 'required',
            'order_status_id' => 'required|exists:order_statuses,id',
            'delivery_address_id' => 'required|exists:delivery_addresses,id',
            'payment_method_id' => 'required|integer|exists:payment_methods,id',
            'order_details' => 'required',
            'order_details.*.food_id' => 'required|integer|exists:foods,id',
            'order_details.*.quantity' => 'required|integer',
            'order_details.*.total' => 'required|numeric',
        ];
    }
}
