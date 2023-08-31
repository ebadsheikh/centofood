<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

require_once __DIR__ . '/api/auth-routes.php';

require_once __DIR__ . '/api/category-routes.php';

require_once __DIR__ . '/api/restaurant-routes.php';

require_once __DIR__ . '/api/restaurant-review-routes.php';

require_once __DIR__ . '/api/food-review-routes.php';

require_once __DIR__ . '/api/delivery-address-routes.php';

require_once __DIR__ . '/api/order-routes.php';

require_once __DIR__ . '/api/mobile-setting-routes.php';

require_once __DIR__ . '/api/mobile-theme-routes.php';

require_once __DIR__ . '/api/mobile-slider-routes.php';

require_once __DIR__ . '/api/privacy-policy-routes.php';

require_once __DIR__ . '/api/term-condition-routes.php';

require_once __DIR__ . '/api/profile-routes.php';

require_once __DIR__ . '/api/wishlist-routes.php';
