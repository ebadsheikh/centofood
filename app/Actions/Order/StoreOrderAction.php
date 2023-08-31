<?php

namespace App\Actions\Order;

use App\Models\Order;
use App\Models\OrderDetail;
use Exception;
use Illuminate\Support\Facades\DB;

class StoreOrderAction
{
    /**
     * Store a newly created order in storage.
     *
     * @param  array  $data
     * @return Order
     * @throws Exception
     */
    public function execute(array $data): Order
    {
        return DB::transaction(function () use ($data) {
            $order = Order::create([
                'user_id' => auth()->user()->id,
                'restaurant_id' => $data['restaurant_id'],
                'tax' => $data['tax'],
                'delivery_fee' => $data['delivery_fee'],
                'discount' => $data['discount'],
                'sub_total' => $data['sub_total'],
                'total' => $data['total'],
                'active' => $data['active'],
                'driver_id' => $data['driver_id'],
                'instructions' => $data['instructions'],
                'order_status_id' => $data['order_status_id'],
                'delivery_address_id' => $data['delivery_address_id'],
                'payment_method_id' => $data['payment_method_id'],
            ]);

            foreach ($data['order_details'] as $detailData) {
                OrderDetail::create([
                    'order_id' => $order->id,
                    'food_id' => $detailData['food_id'],
                    'quantity' => $detailData['quantity'],
                    'total' => $detailData['total'],
                ]);
            }

            return $order;
        });
    }
}
