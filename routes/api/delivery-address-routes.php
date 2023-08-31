<?php

use App\Http\Controllers\Api\DeliveryAddressController;
use Illuminate\Support\Facades\Route;

Route::controller(DeliveryAddressController::class)
    ->group(function () {
        Route::get('addresses/{user}', 'deliveryAddresses');
        Route::post('address/store', 'StoreDeliveryAddresses');
    });
