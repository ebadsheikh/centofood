<?php

use App\Http\Controllers\Api\WishListController;
use Illuminate\Support\Facades\Route;

Route::controller(WishListController::class)
    ->group(function () {
        Route::get('wishlist/show/{userId}', 'wishListShow');
        Route::post('wishlist/store', 'wishListStore');
        Route::delete('wishlist/delete/{wishList}', 'wishListDelete');
    });
