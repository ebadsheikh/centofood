<div>
    @foreach ($categories as $index => $category)
        <div class="tab-pane fade {{ $index === 0 ? 'show active' : '' }}" id="tab-{{ $category->id }}">
            <div class="title8">
                <h2>{{ $category['name'] }}</h2>
                <p>{{ strip_tags($category['description']) }}</p>
            </div>
            <div class="row g-sm-4 g-3">
                @foreach ($foods as $food)
                    @if ($food['category_id'] == $category['id'])
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="product-box product-style-5">
                                <a href="product-page.html">
                                    <h6>{{ $food['name'] }}</h6>
                                </a>
                                <h5>{{ $food['weight'] }} mg</h5>
                                <h4>${{ $food['price'] }}</h4>
                                <div class="addtocart_btn">
                                    <button class="add-button add_cart" wire:click="ProductCart({{ $food->id }})">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="{{ route('food.profile', $food['slug']) }}">
                                            <img alt="" src="{{ $food->getFirstMediaUrl('food.images') }}"
                                                class="img-fluid blur-up lazyload bg-img">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    @endforeach
</div>
