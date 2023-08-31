<?php

use App\Http\Controllers\Api\CategoryController;
use Illuminate\Support\Facades\Route;

Route::controller(CategoryController::class)
    ->group(function () {
        Route::get('categories', 'index');
        Route::get('category/food/{category}', 'showCategoryFood');
        Route::get('category/restaurant/{category}', 'showCategoryRestaurant');
    });
