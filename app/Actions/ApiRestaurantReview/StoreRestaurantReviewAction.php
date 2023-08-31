<?php

namespace App\Actions\ApiRestaurantReview;

use App\Models\RestaurantReview;
use Illuminate\Support\Str;

class StoreRestaurantReviewAction
{
    public function execute(array $data): RestaurantReview
    {
        $restaurantReview = new RestaurantReview();
        $restaurantReview->restaurant_id = $data['restaurant_id'];
        $restaurantReview->user_id = $data['user_id'];
        $restaurantReview->uuid = Str::uuid();
        $restaurantReview->rate = $data['rate'];
        $restaurantReview->review = $data['review'];

        $restaurantReview->save();

        return $restaurantReview;
    }
}
