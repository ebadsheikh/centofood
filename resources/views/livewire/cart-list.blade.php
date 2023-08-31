<div class="row">
    <div class="col-sm-12">
        <div class="cart_counter">
            <div class="countdownholder">
                Your cart will be expired in<span id="timer"></span> minutes!
            </div>
            <a href="checkout.html" class="cart_checkout btn btn-solid btn-xs">check out</a>
        </div>
    </div>
    <div class="col-sm-12 table-responsive-xs">
        <table class="table cart-table">
            <thead>
                <tr class="table-head">
                    <th scope="col">{{ __('image') }}</th>
                    <th scope="col">{{ __('product_name') }}</th>
                    <th scope="col">{{ __('price') }}</th>
                    <th scope="col">{{ __('quantity') }}</th>
                    <th scope="col">{{ __('action') }}</th>
                    <th scope="col">{{ __('total') }}</th>
                </tr>
            </thead>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <tbody>
                @foreach ($cartitems as $id => $details)
                    {{-- @php $total += $details->food->price * $details->quantity @endphp --}}
                    <tr data-id="{{ $id }}">
                        <td data-th="Product">
                            <a href="#"><img src="{{ $details->food->getFirstMediaUrl('food.images') }}"
                                    alt=""></a>
                        </td>
                        <td><a href="#">{{ $details->food->name }}</a>
                        </td>
                        <td>
                            <h2>${{ $details->food->price }}</h2>
                        </td>
                        <td>
                            <div class="qty-box">
                                <div class="input-group"><span class="input-group-prepend"><button type="button"
                                            class="btn quantity-left-minus my_button1" data-type="minus"
                                            wire:click="decrementQty({{ $details->id }})" data-field=""><i
                                                class="fa fa-solid fa-minus"><span
                                                    class="hide d-none">-</span></i></button> </span>
                                    <input type="text" class="form-control input-number" id="CAT_Custom_410671"
                                        name="CAT_Custom_410671" maxlength="4000" value="{{ $details->quantity }}">
                                    <span class="input-group-prepend"><button type="button"
                                            wire:click="incrementQty({{ $details->id }})"
                                            class="btn quantity-right-plus my_button1" data-type="plus"
                                            data-field=""><i class="fa fa-solid fa-plus"><span
                                                    class="hide d-none">+</span></i></button></span>
                                </div>
                            </div>
                        </td>
                        <td><a wire:click="removeItem({{ $details->id }})" class="icon cursor-pointer remove-from-cart"><i
                                    class="ti-close"></i></a>
                        </td>
                        <td>
                            <h2 class="td-color">{{ $details->food->price * $details->quantity }}</h2>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="table-responsive-md">
            <table class="table cart-table ">
                <tfoot>
                    <tr>
                        <td>{{ __('total_price') }} : </td>
                        <td>
                            <h2>${{ $total }}</h2>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
