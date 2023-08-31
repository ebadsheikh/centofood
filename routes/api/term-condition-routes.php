<?php

use App\Http\Controllers\Api\TermAndConditionController;
use Illuminate\Support\Facades\Route;

Route::controller(TermAndConditionController::class)
    ->prefix('term/condition')
    ->group(function () {
        Route::get('', 'index');
    });
