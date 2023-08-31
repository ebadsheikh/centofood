<?php

namespace App\Services;

use App\Enums\FoodsEnum;
use App\Models\Food;

class FoodBoxQuery
{
    public static function getFood(?string $callFrom = null)
    {
        $query = Food::withCount(['extra', 'nutrition']);
        if ($callFrom === FoodsEnum::FOOD_SECTION_HOME_PAGE->value) {
            $query->limit(5);
        } else {
            $query->paginate(20);
        }

        $foods = $query->get();

        return $foods;
    }
}
