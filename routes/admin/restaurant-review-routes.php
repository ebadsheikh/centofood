<?php

use App\Http\Controllers\Admin\RestaurantReviewController;
use Illuminate\Support\Facades\Route;

Route::controller(RestaurantReviewController::class)
    ->prefix('restaurant/review')
    ->name('restaurant_review.')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('edit/{restaurantReview:uuid}', 'edit')->name('edit');
        Route::post('update/{restaurantReview:uuid}', 'update')->name('update');
        Route::get('delete/{restaurantReview:uuid}', 'destroy')->name('delete');
    });
