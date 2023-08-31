<?php

use App\Http\Controllers\Admin\PaymentController;
use Illuminate\Support\Facades\Route;

Route::controller(PaymentController::class)
    ->prefix('payments')
    ->name('payments.')
    ->group(function () {
        Route::get('', 'paymentView')->name('index');
        Route::post('store/payment', 'storePayment')->name('store.payment');
        Route::get('paypal', 'paypalView')->name('paypal');
        Route::post('store/paypal', 'storePaypal')->name('store.paypal');
        Route::get('stripe', 'stripeView')->name('stripe');
        Route::post('store/stripe', 'storeStripe')->name('store.stripe');
        Route::get('razorpay', 'razorpayView')->name('razorpay');
        Route::post('store/razorpay', 'storeRazorpay')->name('store.razorpay');
    });
