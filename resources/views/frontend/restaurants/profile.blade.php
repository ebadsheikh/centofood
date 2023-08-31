@extends('frontend.layout.master')
@section('content')
    <!-- vendor cover start -->
    <div class="vendor-cover">
        <div>
            <img src="{{ $restaurant->getFirstMediaUrl('restaurant.images') }}" alt="" class="bg-img lazyload blur-up">
        </div>
    </div>
    <!-- vendor cover end -->


    <!-- section start -->
    <section class="vendor-profile pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="profile-left">
                        <div class="profile-image">
                            <div>
                                <img src="{{ $restaurant->getFirstMediaUrl('restaurant.images') }}" alt=""
                                     class="img-fluid">
                                <h3>{{ $restaurant['name'] }}</h3>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h6>750 {{ __('followers') }} | 10 {{ __('review') }}</h6>
                            </div>
                        </div>
                        <div class="profile-detail">
                            <div>
                                <p>{{ strip_tags($restaurant['information']) }}</p>
                                <p>{{ strip_tags($restaurant['description']) }}</p>
                            </div>
                        </div>
                        <div class="vendor-contact">
                            <div>
                                <h6>follow us:</h6>
                                <div class="footer-social">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                                <h6>{{ __('if_you_have_any_query') }}:</h6>
                                <a href="#" class="btn btn-solid btn-sm">{{ __('contact_us') }}</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Section ends -->


    <!-- collection section start -->
    <section class="section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="collection-wrapper">
                        <div class="collection-content ratio_asos">
                            <div class="page-main-content">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="filter-main-btn"><span class="filter-btn btn btn-theme"><i
                                                    class="fa fa-filter"
                                                    aria-hidden="true"></i> {{ __('filter') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="collection-product-wrapper">
                                    <div class="product-top-filter">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="product-filter-content">
                                                    <div class="search-count">
                                                        <h5>{{ __('showing_products_1-24_of_10_result') }}</h5>
                                                    </div>
                                                    <div class="collection-view">
                                                        <ul>
                                                            <li><i class="fa fa-th grid-layout-view"></i></li>
                                                            <li><i class="fa fa-list-ul list-layout-view"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="collection-grid-view">
                                                        <ul>
                                                            <li><img src="../assets/images/icon/2.png" alt=""
                                                                     class="product-2-layout-view"></li>
                                                            <li><img src="../assets/images/icon/3.png" alt=""
                                                                     class="product-3-layout-view"></li>
                                                            <li><img src="../assets/images/icon/4.png" alt=""
                                                                     class="product-4-layout-view"></li>
                                                            <li><img src="../assets/images/icon/6.png" alt=""
                                                                     class="product-6-layout-view"></li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-page-per-view">
                                                        <select>
                                                            <option value="High to low">{{ __('24_products_per_page') }}
                                                            </option>
                                                            <option value="Low to High">{{ __('50_products_per_page') }}
                                                            </option>
                                                            <option value="Low to High">{{ '100_products_per_page' }}
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="product-page-filter">
                                                        <select>
                                                            <option
                                                                value="High to low">{{ __('sorting_items') }}</option>
                                                            <option value="Low to High">50 {{ __('products') }}</option>
                                                            <option value="Low to High">
                                                                100 {{ __('products') }}</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrapper-grid">
                                        <div class="row">
                                            <div class="col-xl-3 col-6 col-grid-box">
                                                @if (count($foods) > 0)
                                                    @foreach ($foods as $food)
                                                        @if ($food['restaurant_id'] = $restaurant['id'])
                                                            <div class="product-box product-style-4">
                                                                <div class="img-wrapper">
                                                                    <div class="front">
                                                                        <a href="product-page.html"><img alt=""
                                                                                                         src="{{ $food->getFirstMediaUrl('food.images') }}"
                                                                                                         class="img-fluid blur-up lazyload bg-img"></a>
                                                                    </div>
                                                                    <div class="cart-detail"><a
                                                                            href="javascript:void(0)"
                                                                            title="Add to Wishlist"><i class="ti-heart"
                                                                                                       aria-hidden="true"></i></a>
                                                                        <a
                                                                            href="#" data-bs-toggle="modal"
                                                                            data-bs-target="#quick-view"
                                                                            title="Quick View"><i class="ti-search"
                                                                                                  aria-hidden="true"></i></a>
                                                                        <a
                                                                            href="compare.html" title="Compare"><i
                                                                                class="ti-reload"
                                                                                aria-hidden="true"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="product-info">
                                                                    <a href="product-page.html">
                                                                        <h6>{{ $food['slug'] }}</h6>
                                                                    </a>
                                                                    <h5>{{ $food['weight'] }} {{ __('mg') }}</h5>
                                                                    <h4>${{ $food['price'] }}</h4>
                                                                    <div class="addtocart_btn">
                                                                        <button class="add-button add_cart"
                                                                                title="Add to cart">
                                                                            <i class="fa fa-plus"></i>
                                                                        </button>
                                                                        <div class="qty-box cart_qty">
                                                                            <div class="input-group">
                                                                                <button type="button"
                                                                                        class="btn quantity-left-minus"
                                                                                        data-type="minus" data-field="">
                                                                                    <i class="fa fa-minus"
                                                                                       aria-hidden="true"></i>
                                                                                </button>
                                                                                <input type="text" name="quantity"
                                                                                       class="form-control input-number qty-input"
                                                                                       value="1">
                                                                                <a href="{{ route('add.to.cart', $food->id) }}"
                                                                                   class="btn quantity-right-plus"
                                                                                   data-type="plus" data-field="">
                                                                                    <i class="fa fa-plus"
                                                                                       aria-hidden="true"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @else
                                                            <span
                                                                class="text-center col-12 m-auto"><small>{{ __('no_food_available_from_this_restaurant') }}</small>
                                                            </span>
                                                        @endif
                                                    @endforeach
                                                @else
                                                    <span
                                                        class="text-center col-12 m-auto"><small>{{ __('no_food_available') }}</small>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- collection section end -->
@endsection
