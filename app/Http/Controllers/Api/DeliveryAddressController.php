<?php

namespace App\Http\Controllers\Api;

use App\Actions\ApiDeliveryAddress\StoreAddressAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\DeliveryAddress\StoreDeliveryAddressRequest;
use App\Http\Resources\DeliveryAddressResource;
use App\Http\Resources\UserAddressResource;
use App\Models\User;
use Exception;
use Illuminate\Validation\ValidationException;

class DeliveryAddressController extends Controller
{
    public function deliveryAddresses(User $user)
    {
        try {
            return new UserAddressResource($user->load(['deliveryAddresses']));
        } catch (Exception $ex) {
            return response()->json(['error' => $ex->getMessage()], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreDeliveryAddressRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function StoreDeliveryAddresses(StoreDeliveryAddressRequest $request, StoreAddressAction $action)
    {
        try {
            $validatedData = $request->validated();
            $deliveryAddress = $action->execute($validatedData);
            return response()->json(new DeliveryAddressResource($deliveryAddress), 200);
        } catch (ValidationException $ex) {
            return response()->json($ex->errors(), 422);
        } catch (Exception $ex) {
            return response()->json(['error' => $ex->getMessage()], 500);
        }
    }
}
