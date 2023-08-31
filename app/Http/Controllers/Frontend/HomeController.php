<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use App\Models\DiscountType;
use App\Models\GlobalSetting;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $discountType = DiscountType::latest()->paginate(3);
        $coupons = Coupon::latest()->paginate(3);

        return view('frontend.user.index')->with([
            'discountType' => $discountType,
            'coupons' => $coupons,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function master(): View
    {
        $setting = GlobalSetting::first();

        return view('frontend.layout.master')->with('setting', $setting);
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function footer(): View
    {
        $setting = GlobalSetting::first();

        return view('frontend.layout.footer')->with('setting', $setting);
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function header(): View
    {
        $setting = GlobalSetting::first();

        return view('frontend.layout.header')->with('setting', $setting);
    }
}
