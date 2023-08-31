<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Food;
use Livewire\Component;

class ProductList extends Component
{
    public $foods;
    public $categories;

    public function render()
    {
        $this->foods = Food::get();
        $this->categories = Category::get();

        return view('livewire.product-list');
    }

    public function ProductCart($id)
    {
        if (auth()->user()) {
            // add to cart
            $data = [
                'user_id' => auth()->user()->id,
                'food_id' => $id,
            ];
            Cart::updateOrCreate($data);

            $this->emit('updateCartCount');
        } else {
            // redirect to login page
            return redirect(route('login'));
        }
    }
}
