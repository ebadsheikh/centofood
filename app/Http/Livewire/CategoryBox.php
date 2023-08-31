<?php

namespace App\Http\Livewire;

use App\Services\CategoryBoxQuery;
use Livewire\Component;

class CategoryBox extends Component
{
    public ?string $callFrom;

    public function mount(?string $callFrom)
    {
        $this->callFrom = $callFrom;
    }

    public function render()
    {
        $categories = CategoryBoxQuery::getCategories($this->callFrom);
        return view('livewire.category-box')->with('categories', $categories);
    }
}
