<?php

use App\Http\Controllers\Admin\FavoriteController;
use Illuminate\Support\Facades\Route;

Route::controller(FavoriteController::class)
    ->prefix('favorite')
    ->name('favorite.')
    ->group(function () {
        Route::get('', 'index')->name('index');
    });
