<?php

use App\Http\Controllers\Api\RestaurantController;
use Illuminate\Support\Facades\Route;

Route::controller(RestaurantController::class)
    ->group(function () {
        Route::get('restaurants', 'index');
        Route::get('restaurant/menu/category/{restaurant}', 'showRestaurantCategory');
        Route::get('restaurant/menu/food/{restaurant}', 'showRestaurantFood');
        Route::get('restaurant/profile/{restaurant}', 'showRestaurantProfile');
    });
