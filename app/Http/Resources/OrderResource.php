<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'user' => new UserResource($this->whenLoaded('user')),
            'restaurant' => new RestaurantResource($this->whenLoaded('restaurant')),
            'delivery_fee' => $this->delivery_fee,
            'delivery_address' => new DeliveryAddressResource($this->whenLoaded('deliveryAddress')),
            'order_status' => new OrderStatusResource($this->whenLoaded('orderStatus')),
            'discount' => $this->discount,
            'tax' => $this->tax,
            'active' => $this->active,
            'instructions' => $this->instructions,
            'sub_total' => $this->sub_total,
            'driver_id' => $this->driver_id,
            'total' => $this->total,
            'payment_method' => new PaymentMethodResource($this->whenLoaded('paymentMethod')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'order_details' => OrderDetailResource::collection($this->whenLoaded('orderDetails')),
        ];
    }
}
