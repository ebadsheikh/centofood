<?php

use App\Http\Controllers\Admin\EarningController;
use Illuminate\Support\Facades\Route;

Route::controller(EarningController::class)
    ->prefix('earning')
    ->name('earnings.')
    ->group(function () {
        Route::get('', 'index')->name('index');
    });
