@if (count($foods) > 0 )
    @foreach ($foods as $food)
        @if($food->price <500.19)
            <div class="product-box product-style-4 col-2">
                <div class="img-wrapper">
                    <div class="front">
                        <a href="{{ route('food.profile', $food['slug']) }}"><img alt=""
                                                                                  src="{{ $food->getFirstMediaUrl('food.images') }}"
                                                                                  class="img-fluid blur-up lazyload bg-img"></a>
                    </div>
                    <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist"><i
                                class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#quick-view"
                                                                                title="Quick View"><i
                                class="ti-search" aria-hidden="true"></i></a> <a href="compare.html"
                                                                                 title="Compare"><i
                                class="ti-reload" aria-hidden="true"></i></a></div>
                </div>
                <div class="product-info">
                    <a href="{{ route('food.profile', $food['slug']) }}">
                        <h6>{{ $food['name'] }}</h6>
                    </a>
                    <h5>{{ $food['weight'] }} {{ __('mg') }}</h5>
                    <h4>${{ $food['price'] }}</h4>
                    <div class="addtocart_btn">
                        <a href="{{ route('add.to.cart', $food->id) }}" class="add-button add_cart"
                           title="Add to cart">
                            <i class="fa fa-plus"></i>
                        </a>
                        <div class="qty-box cart_qty">
                            <div class="input-group">
                                <button type="button" class="btn quantity-left-minus"
                                        data-type="minus" data-field="">
                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                </button>
                                <input type="text" name="quantity"
                                       class="form-control input-number qty-input" value="1">
                                <button typr="button" type="button" class="btn quantity-right-plus"
                                        data-type="plus" data-field="">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
@endif
