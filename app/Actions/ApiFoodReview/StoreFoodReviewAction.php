<?php

namespace App\Actions\ApiFoodReview;

use App\Models\FoodReview;
use Illuminate\Support\Str;

class StoreFoodReviewAction
{
    public function execute(array $data): FoodReview
    {
        $foodReview = new FoodReview();
        $foodReview->food_id = $data['food_id'];
        $foodReview->user_id = $data['user_id'];
        $foodReview->uuid = Str::uuid();
        $foodReview->rate = $data['rate'];
        $foodReview->review = $data['review'];

        $foodReview->save();

        return $foodReview;
    }
}
