<?php

use App\Http\Controllers\Admin\FoodController;
use Illuminate\Support\Facades\Route;

Route::controller(FoodController::class)
    ->prefix('food')
    ->name('food.')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('/profile', 'profile')->name('profile');
        Route::get('edit/{food:slug}', 'edit')->name('edit');
        Route::post('update/{food:slug}', 'update')->name('update');
        Route::get('delete/{food:slug}', 'destroy')->name('delete');
    });
