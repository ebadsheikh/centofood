<?php

use App\Http\Controllers\Api\FoodReviewController;
use Illuminate\Support\Facades\Route;

Route::controller(FoodReviewController::class)
    ->group(function () {
        Route::get('food/reviews/{food_id}', 'foodReview');
        Route::post('food/review/store', 'foodReviewStore');
        Route::get('recent/food/reviews', 'recentFoodReview');
    });
