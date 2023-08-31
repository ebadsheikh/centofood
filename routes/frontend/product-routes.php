<?php

use App\Http\Controllers\Frontend\ProductController;
use Illuminate\Support\Facades\Route;

Route::controller(ProductController::class)
    ->group(function () {
        Route::get('/categories', 'index')->name('category.show');
        Route::get('/cart', 'cart')->name('cart');
        Route::get('/add-to-cart/{id}', 'addToCart')->name('add.to.cart');
        Route::patch('update-cart', 'update')->name('update.cart');
        Route::delete('remove-from-cart', 'destroy')->name('remove.from.cart');
    });
