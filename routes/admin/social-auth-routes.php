<?php

use App\Http\Controllers\Admin\SocialiteAuthenticationController;
use Illuminate\Support\Facades\Route;

Route::controller(SocialiteAuthenticationController::class)
    ->prefix('social/authentication')
    ->name('socialite-auth.')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::post('store', 'store')->name('store');
    });
