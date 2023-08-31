<?php

use App\Http\Controllers\Admin\FoodReviewController;
use Illuminate\Support\Facades\Route;

Route::controller(FoodReviewController::class)
    ->prefix('food/review')
    ->name('food_review.')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('edit/{foodReview:uuid}', 'edit')->name('edit');
        Route::post('update/{foodReview:uuid}', 'update')->name('update');
        Route::get('delete/{foodReview:uuid}', 'destroy')->name('delete');
    });
