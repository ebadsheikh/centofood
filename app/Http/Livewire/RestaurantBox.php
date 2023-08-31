<?php

namespace App\Http\Livewire;

use App\Services\RestaurantBoxQuery;
use Livewire\Component;

class RestaurantBox extends Component
{
    public ?string $callFrom;

    public function mount(?string $callFrom)
    {
        $this->callFrom = $callFrom;
    }

    public function render()
    {
        $restaurants = RestaurantBoxQuery::getRestaurant($this->callFrom);
        return view('livewire.restaurant-box')->with('restaurants', $restaurants);
    }
}
