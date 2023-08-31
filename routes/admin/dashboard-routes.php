<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::controller(DashboardController::class)
    ->group(function () {
        Route::get('dashboard', 'totalCount')->name('dashboard');
        Route::get('master');
    });
