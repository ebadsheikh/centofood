<?php

namespace App\Http\Livewire;

use App\Services\FoodBoxQuery;
use Livewire\Component;

class CheapFoodBox extends Component
{
    public ?string $callFrom;

    public function mount(?string $callFrom)
    {
        $this->callFrom = $callFrom;
    }

    public function render()
    {
        $foods = FoodBoxQuery::getFood($this->callFrom);
        return view('livewire.cheap-food-box')->with('foods', $foods);
    }
}
