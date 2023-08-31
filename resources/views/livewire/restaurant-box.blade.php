@if (count($restaurants) > 0)
    @foreach ($restaurants as $restaurant)
        @if($restaurant->active = 1)
            <div class="product-box product-style-4 col-2">
                <div class="img-wrapper">
                    <div class="front">
                        <a href="{{ route('restaurant.profile', $restaurant['slug']) }}"><img
                                alt=""
                                src="{{ $restaurant->getFirstMediaUrl('restaurant.images') }}"
                                class="img-fluid blur-up lazyload bg-img"></a>
                    </div>
                    <div class="cart-detail"><a href="javascript:void(0)"
                                                title="Add to Wishlist"><i
                                class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#quick-view"
                                                                                title="Quick View"><i
                                class="ti-search" aria-hidden="true"></i></a> <a
                            href="compare.html" title="Compare"><i class="ti-reload"
                                                                   aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="product-info">
                    <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                            class="fa fa-star"></i>
                        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                    </div>
                    <a href="{{ route('restaurant.profile', $restaurant['slug']) }}">
                        <h6>{{ $restaurant['name'] }}</h6>
                    </a>
                </div>
            </div>
        @endif
    @endforeach
@endif
