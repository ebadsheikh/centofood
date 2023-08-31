<?php

use App\Http\Controllers\Admin\SocialiteController;
use Illuminate\Support\Facades\Route;

Route::controller(SocialiteController::class)->group(function () {
    Route::get('auth/{service}', 'redirect');
    Route::get('auth/{service}/call-back', 'callback');
});
