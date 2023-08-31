<?php

use App\Http\Controllers\Admin\AuthController;
use Illuminate\Support\Facades\Route;

Route::controller(AuthController::class)
    ->name('auth.')
    ->group(function () {
        Route::get('login', 'loginView')->name('login');
        Route::post('login-user', 'userLogin')->name('login.user');
        Route::get('register', 'registerView')->name('register');
        Route::post('check-register', 'checkRegister')->name('check.register');
        Route::get('logout', 'logout')->name('logout');
    });
