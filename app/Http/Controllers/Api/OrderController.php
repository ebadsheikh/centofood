<?php

namespace App\Http\Controllers\Api;

use App\Actions\Order\StoreOrderAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Order\StoreOrderRequest;
use App\Http\Resources\OrderResource;
use App\Models\Order;
use App\Traits\ApiResponser;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;

class OrderController extends Controller
{
    use ApiResponser;

    /**
     * Get all orders.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        try {
            // Retrieve all orders
            $orders = Order::all();

            // Transform the orders into a collection of OrderResource
            return OrderResource::collection($orders);
        } catch (Exception $ex) {
            // Handle any exception that occurs
            return response()->json(['error' => $ex->getMessage()], 500);
        }
    }

    /**
     * Store a new order.
     *
     * @param  \App\Http\Requests\StoreOrderRequest  $request
     * @param  \App\Http\Actions\StoreOrderAction  $action
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreOrderRequest $request, StoreOrderAction $action): JsonResponse
    {
        try {
            $validatedData = $request->validated();
            $order = $action->execute($validatedData);

            $order->load('orderDetails');

            return response()->json(new OrderResource($order), 200);
        } catch (ValidationException $ex) {
            return response()->json($ex->errors(), 422);
        } catch (Exception $ex) {
            return response()->json(['error' => $ex->getMessage()], 500);
        }
    }
}
