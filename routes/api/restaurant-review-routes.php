<?php

use App\Http\Controllers\Api\RestaurantReviewController;
use Illuminate\Support\Facades\Route;

Route::controller(RestaurantReviewController::class)
    ->group(function () {
        Route::get('restaurant/reviews/{restaurant_id}', 'restaurantReview');
        Route::post('restaurant/review/store', 'restaurantReviewStore');
    });
