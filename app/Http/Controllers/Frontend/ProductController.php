<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Food;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $categories = Category::all();
        $foods = Food::all();

        return view('frontend.categories.index')->with(['categories' => $categories, 'foods' => $foods]);
    }

    /**
     * Write code on Method
     *
     * @return View
     */
    public function cart(): View
    {
        $foods = Food::all();

        return view('frontend.add_to_cart.view_cart.index')->with(['foods' => $foods]);
    }
}
