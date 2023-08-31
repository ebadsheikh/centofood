<?php

use App\Http\Controllers\Admin\RestaurantController;
use Illuminate\Support\Facades\Route;

Route::controller(RestaurantController::class)
    ->prefix('restaurant')
    ->name('restaurant.')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('list', 'requestedRestaurant')->name('list');
        Route::get('create', 'create')->name('create');
        Route::get('show', 'show')->name('show');
        Route::get('/profile', 'profile')->name('profile');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{restaurant:slug}', 'edit')->name('edit');
        Route::post('update/{restaurant:slug}', 'update')->name('update');
        Route::get('delete/{restaurant:slug}', 'destroy')->name('delete');
    });
