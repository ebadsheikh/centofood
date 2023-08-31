<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::controller(UserController::class)
    ->prefix('user')
    ->name('user.')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::get('profile/{user}', 'profile')->name('profile');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{user}', 'edit')->name('edit');
        Route::post('update/{user}', 'update')->name('update');
        Route::get('delete/{user}', 'destroy')->name('delete');
        Route::get('login/{user}', 'login')->name('login');
    });
