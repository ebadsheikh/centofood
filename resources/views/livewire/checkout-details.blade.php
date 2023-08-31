<div class="order-box">
    <div class="title-box">
        <div>{{ __('product') }} <span>{{ __('total') }}</span></div>
    </div>
    <ul class="qty">
        @foreach ($cartitems as $id => $details)
            <li>{{ $details->food->name }} × {{ $details['quantity'] }}
                <span>${{ $details->food->price * $details['quantity'] }}</span>
            </li>
        @endforeach
    </ul>
    <ul class="sub-total">
        <li>{{ __('subtotal') }} <span class="count">${{ $total }}</span>
        </li>
        <li>{{ __('shipping') }}
            <div class="shipping">
                <div class="shopping-option">
                    <label for="free-shipping">${{ $details->food->restaurant->delivery_fee }}</label>
                </div>
            </div>
        </li>
    </ul>
    <ul class="total">
        <li>{{ __('total') }} <span class="count">${{ $total + $details->food->restaurant->delivery_fee }}</span>
        </li>
    </ul>
</div>
