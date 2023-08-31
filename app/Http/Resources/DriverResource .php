<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DriverResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'delivery_fee' => $this->delivery_fee,
            'total_orders' => $this->total_orders,
            'earning' => $this->earning,
            'available' => $this->available,
        ];
    }
}
