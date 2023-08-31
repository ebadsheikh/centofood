<?php

use App\Http\Middleware\Permissions;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

require_once __DIR__ . '/admin/auth-routes.php';

Route::middleware('auth')->group(function () {
    require_once __DIR__ . '/admin/user-routes.php';

    require_once __DIR__ . '/admin/role-routes.php';

    require_once __DIR__ . '/admin/permission-routes.php';

    require_once __DIR__ . '/admin/restaurant-routes.php';

    require_once __DIR__ . '/admin/gallery-routes.php';

    require_once __DIR__ . '/admin/language-translation-routes.php';

    require_once __DIR__ . '/admin/cuisine-routes.php';

    require_once __DIR__ . '/admin/faq-category-routes.php';

    require_once __DIR__ . '/admin/faq-routes.php';

    require_once __DIR__ . '/admin/category-routes.php';

    require_once __DIR__ . '/admin/food-routes.php';

    require_once __DIR__ . '/admin/currency-routes.php';

    require_once __DIR__ . '/admin/coupon-routes.php';

    require_once __DIR__ . '/admin/driver-payout-routes.php';

    require_once __DIR__ . '/admin/extra-group-routes.php';

    require_once __DIR__ . '/admin/extras-routes.php';

    require_once __DIR__ . '/admin/restaurant-payout-routes.php';

    require_once __DIR__ . '/admin/nutrition-routes.php';

    require_once __DIR__ . '/admin/global-setting-routes.php';

    require_once __DIR__ . '/admin/mail-setting-routes.php';

    require_once __DIR__ . '/admin/setting-type-routes.php';

    require_once __DIR__ . '/admin/distance-unit-routes.php';

    require_once __DIR__ . '/admin/social-auth-routes.php';

    require_once __DIR__ . '/admin/localisation-routes.php';

    require_once __DIR__ . '/admin/dashboard-routes.php';

    require_once __DIR__ . '/admin/mobile-setting-routes.php';

    require_once __DIR__ . '/admin/mobile-screen-routes.php';

    require_once __DIR__ . '/admin/mobile-theme-routes.php';

    require_once __DIR__ . '/admin/driver-routes.php';

    require_once __DIR__ . '/admin/mobile-slider-routes.php';

    require_once __DIR__ . '/admin/mass-unit-routes.php';

    require_once __DIR__ . '/admin/discount-type-routes.php';

    require_once __DIR__ . '/admin/order-status-routes.php';

    require_once __DIR__ . '/admin/payment-routes.php';

    require_once __DIR__ . '/admin/order-routes.php';

    require_once __DIR__ . '/admin/delivery-address-routes.php';

    require_once __DIR__ . '/admin/file-manager-routes.php';

    require_once __DIR__ . '/admin/food-review-routes.php';

    require_once __DIR__ . '/admin/restaurant-review-routes.php';

    require_once __DIR__ . '/admin/earning-routes.php';

    require_once __DIR__ . '/admin/favorite-routes.php';

    require_once __DIR__ . '/admin/privacy-policy-routes.php';

    require_once __DIR__ . '/admin/term-condition-routes.php';

    Route::view('payouts/management', 'admin.payouts_management.index')->name('payouts_management.index');
    Route::view('role/list', 'admin.role_list.index')->name('role_list.index');
    Route::view('role/list/create', 'admin.role_list.create')->name('role_list.create');
    Route::view('permission/list', 'admin.permission_list.index')->name('permission_list.index');
    Route::view('push/notification', 'admin.push_notification.index')->name('push_notification.index');
    Route::view('transactions', 'admin.transactions.index')->name('transactions.index');
    Route::view('english/transactions', 'admin.transactions.english')->name('transactions.english');
    Route::view('esapagnol/transactions', 'admin.transactions.esapagnol')->name('transactions.esapagnol');
    Route::view('french/transactions', 'admin.transactions.french')->name('transactions.french');
    Route::view('portuguese/transactions', 'admin.transactions.portuguese')->name('transactions.portuguese');
    Route::view('order/view', 'admin.orders.view')->name('orders.view');
});

require_once __DIR__ . '/user/user-auth-routes.php';

require_once __DIR__ . '/admin/socialite-routes.php';

Route::withoutMiddleware(Permissions::class)->group(function () {
    // Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::view('profile/index', 'frontend.profile.index')->name('profile.index');
    Route::view('about-us/index', 'frontend.about_us.index')->name('about_us.index');
    // Route::view('contact-us/index', 'frontend.contact_us.index')->name('contact_us.index');
    Route::view('view_cart/index', 'frontend.add_to_cart.view_cart.index')->name('view_cart.index');
    // Route::view('checkout/index', 'frontend.add_to_cart.checkout.index')->name('checkout.index');
    Route::view('forget/password', 'frontend.auth.forgetpassword')->name('forgetpassword');
    // Route::get('/category/show', [CategoryController::class, 'show'])->name('category.show');

    require_once __DIR__ . '/frontend/home-routes.php';

    require_once __DIR__ . '/frontend/product-routes.php';

    require_once __DIR__ . '/frontend/contact-routes.php';

    require_once __DIR__ . '/frontend/order-routes.php';
});
