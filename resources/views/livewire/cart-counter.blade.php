<div>
    <ul>
        <li class="onhover-div mobile-setting">
            <div><img src="{{ asset('website/assets/images/icon/setting.png') }}" class="img-fluid blur-up lazyload"
                    alt=""> <i class="ti-settings"></i></div>
            <div class="show-div setting">
                <h6>{{ __('language') }}</h6>
                <ul>
                    <li><a href="#">{{ __('english') }}</a></li>
                    <li><a href="#">{{ __('french') }}</a></li>
                </ul>
                <h6>{{ __('currency') }}</h6>
                <ul class="list-inline">
                    <li><a href="#">{{ __('euro') }}</a></li>
                    <li><a href="#">{{ __('rupees') }}</a></li>
                    <li><a href="#">{{ __('pound') }}</a></li>
                    <li><a href="#">{{ __('doller') }}</a></li>
                </ul>
            </div>
        </li>
        <li class="onhover-div mobile-cart">
            <a href="{{ route('view_cart.index') }}"><img src="{{ asset('website/assets/images/icon/cart.png') }}"
                    class="img-fluid blur-up lazyload" alt=""> <i class="ti-shopping-cart"></i></a>
            <span class="cart_qty_cls">{{ $total }}</span>
        </li>
    </ul>
</div>
