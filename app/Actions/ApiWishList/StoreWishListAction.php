<?php

namespace App\Actions\ApiWishList;

use App\Models\WishList;

class StoreWishListAction
{
    public function execute(array $data): WishList
    {
        $wishList = new WishList();
        $wishList->user_id = $data['user_id'];
        $wishList->food_id = $data['food_id'];

        $wishList->save();

        return $wishList;
    }
}
