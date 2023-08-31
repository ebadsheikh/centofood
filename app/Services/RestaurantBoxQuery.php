<?php

namespace App\Services;

use App\Enums\RestaurantEnum;
use App\Models\Restaurant;

class RestaurantBoxQuery
{
    public static function getRestaurant(?string $callFrom = null)
    {
        $query = Restaurant::withCount(['foods', 'cuisines']);
        if ($callFrom === RestaurantEnum::RESTAURANT_SECTION_HOME_PAGE->value) {
            $query->limit(5);
        } else {
            $query->paginate(20);
        }

        $restaurants = $query->get();

        return $restaurants;
    }
}
