<?php

use App\Http\Controllers\User\UserAuthController;
use Illuminate\Support\Facades\Route;

Route::controller(UserAuthController::class)
    ->prefix('user')
    ->name('user.')
    ->group(function () {
        Route::get('login', 'userLoginView')->name('login.view');
        Route::get('register', 'create')->name('create.view');
        Route::post('register-user', 'registerUser')->name('register');
        Route::post('login-user', 'userLogin')->name('login');
        Route::get('logout', 'logout')->name('logout');
    });
