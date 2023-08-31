<?php

use App\Http\Controllers\Api\PrivacyPolicyController;
use Illuminate\Support\Facades\Route;

Route::controller(PrivacyPolicyController::class)
    ->prefix('privacy/policy')
    ->group(function () {
        Route::get('', 'index');
    });
