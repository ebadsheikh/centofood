<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Food;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Payment;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Stripe\Charge;
use Stripe\Customer;
use Stripe\Stripe;

class OrderController extends Controller
{
    public function stripe()
    {
        return view('frontend.add_to_cart.payment.stripe');
    }

    /**
     * Write code on Method
     *
     * @return View
     */
    public function checkout(): View
    {
        $user = auth()->user();
        $foods = Food::all();
        $payment = Payment::where('user_id', Auth::id())->first();
        return view('frontend.add_to_cart.checkout.index')->with(['foods' => $foods, 'user' => $user, 'payment' => $payment]);
    }

    public function storeOrder(Request $request): RedirectResponse
    {
        try {
            DB::transaction(function () use ($request) {
                $subTotal = 0;
                $total = $subTotal;
                $cartItems = Cart::all();
                foreach ($cartItems as $cartItem) {
                    $subTotal += $cartItem->food->price * $cartItem->quantity;
                    $total += $subTotal + $cartItem->food->restaurant->delivery_fee;
                    $order = Order::create([
                        'user_id' => auth()->user()->id,
                        'restaurant_id' => $cartItem->food->restaurant_id,
                        'tax' => $cartItem->food->restaurant->default_tax,
                        'delivery_fee' => $cartItem->food->restaurant->delivery_fee,
                        'discount' => $cartItem->food->discount_price,
                        'sub_total' => $subTotal,
                        'total' => $total,
                        'active' => $cartItem->food->restaurant->active,
                        'instructions' => $request['instructions'],
                        'order_status_id' => 1,
                    ]);
                    OrderDetail::create([
                        'order_id' => $order->id,
                        'food_id' => $cartItem->food->id,
                        'quantity' => $cartItem->quantity,
                        'total' => $total,
                    ]);
                };
                Cart::where('user_id', Auth::id())->delete();
            });
            return redirect()->route('home')->withSuccess('Order Placed Successfully');
        } catch (Exception $ex) {
            return back()->withError(__('something went wrong'));
        }
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeStripe(Request $request)
    {
        try {
            Stripe::setApiKey(env('STRIPE_SECRET'));
            $amount = 0;

            // Retrieve the cart items from the database for the authenticated user
            $cartItems = Cart::where('user_id', Auth::id())->get();

            // Calculate the total amount based on the cart items
            foreach ($cartItems as $cartItem) {
                $amount += $cartItem->food->price * $cartItem->quantity;
                $description = $cartItem->food->description;
            }

            Customer::create([
                'name' => auth()->user()->name,
                'email' => auth()->user()->email,
            ]);

            // Create the Stripe charge
            Charge::create([
                "amount" => $amount * 100,
                "currency" => "USD",
                "source" => $request->stripeToken,
                "description" => $description,
            ]);

            // Store the order in the database
            // $action->execute($cartItems);

            // Clear the cart items for the authenticated user
            Payment::where('user_id', Auth::id())->create([
                'user_id' => auth()->user()->id,
                'payment_method_id' => 1,
                'payment_status_id' => 1,
                'price' => $amount,
                'description' => $description,
            ]);
            // Cart::where('user_id', Auth::id())->delete();
            // Cart::where('user_id', Auth::id())->delete();


            return redirect()->route('checkout.index')->withSuccess(__('payment sent successfully'));
        } catch (Exception $ex) {
            return back()->withError(__($ex->getMessage()));
        }
    }
}
