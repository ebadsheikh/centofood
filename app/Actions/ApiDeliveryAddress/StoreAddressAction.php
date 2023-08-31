<?php

namespace App\Actions\ApiDeliveryAddress;

use App\Models\DeliveryAddress;

class StoreAddressAction
{
    public function execute(array $data): DeliveryAddress
    {
        $deliveryAddress = new DeliveryAddress();
        $deliveryAddress->user_id = $data['user_id'];
        $deliveryAddress->description = $data['description'];
        $deliveryAddress->address = $data['address'];
        $deliveryAddress->latitude = $data['latitude'];
        $deliveryAddress->longitude = $data['longitude'];
        $deliveryAddress->is_default = $data['is_default'];

        $deliveryAddress->save();

        return $deliveryAddress;
    }
}
