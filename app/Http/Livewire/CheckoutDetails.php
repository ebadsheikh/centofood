<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Livewire\Component;

class CheckoutDetails extends Component
{
    public $cartitems;
    public $sub_total = 0;
    public $total = 0;
    public $tax = 0;

    public function render()
    {
        $this->cartitems = Cart::with('food')
            ->where(['user_id' => auth()->user()->id])
            ->where('status', '!=', Cart::STATUS['success'])
            ->get();
        $this->total = 0;
        $this->sub_total = 0;
        $this->tax = 0;

        foreach ($this->cartitems as $item) {
            $this->sub_total += $item->food->price * $item->quantity;
        }
        $this->total = $this->sub_total - $this->tax;

        return view('livewire.checkout-details');
    }
}
