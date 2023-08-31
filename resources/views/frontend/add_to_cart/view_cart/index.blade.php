@extends('frontend.layout.master')
@section('content')
    <!--section start-->
    <section class="cart-section section-b-space">
        <div class="container">
            @livewire('cart-list')
            <div class="row cart-buttons">
                <div class="col-6"><a href="{{ route('category.show') }}"
                        class="btn btn-solid">{{ __('continue_shopping') }}</a>
                </div>
                <div class="col-6"><a href="{{ route('order.checkout.index') }}"
                        class="btn btn-solid">{{ __('check_out') }}</a>
                </div>
            </div>
        </div>
    </section>
    <!--section end-->
@endsection
