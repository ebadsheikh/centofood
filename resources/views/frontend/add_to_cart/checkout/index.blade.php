@extends('frontend.layout.master')
@section('content')
    <!-- section start -->
    <section class="section-b-space">
        <div class="container">
            <div class="checkout-page">
                <div class="checkout-form">
                    @if (session('success'))
                        <div class="alert alert-success my-2">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (Session::has('error'))
                        <div class="alert alert-danger my-2">
                            {{ Session('error') }}
                        </div>
                    @endif
                    <form action="{{ route('order.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-sm-12 col-xs-12">
                                <div class="checkout-title">
                                    <h3>{{ __('billing_details') }}</h3>
                                </div>
                                <div class="row check-out">
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">{{ __('full_name') }}</div>
                                        <input type="text" value="{{ $user->name }}" readonly name="name">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">{{ __('phone') }}</div>
                                        <input type="text" name="number" value="{{ $user->mobile_number }}" readonly>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                        <div class="field-label">{{ __('email_address') }}</div>
                                        <input type="email" name="email" value="{{ $user->email }}" readonly>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">{{ __('address') }}</div>
                                        <input type="text" name="address" value="{{ $user->address }}">
                                    </div>
                                    <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                        <div class="field-label">{{ __('instructions') }}</div>
                                        <textarea class="form-control" rows="4" name="instructions">{{ old('instructions') }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 col-xs-12">
                                <div class="checkout-details">
                                    @livewire('checkout-details')
                                    <div class="payment-box">
                                        <div class="upper-box">
                                            <div class="payment-options">
                                                <ul>
                                                    <li>
                                                        <div class="radio-option">
                                                            <input type="radio" checked name="payment-group"
                                                                id="payment-2">
                                                            <label for="payment-2">{{ __('cash_on_delivery') }}<span
                                                                    class="small-text">{{ __('please_send_a_check_to_store_name,store_street,store_town,store_state/county,store_postcode') }}.</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="radio-option stripe">
                                                            <input type="radio"
                                                                {{ auth()->user()->id == $payment->user_id ? 'checked' : '' }}
                                                                onclick="window.location='{{ url('order/stripe') }}'"
                                                                name="payment-group" id="payment-3">
                                                            <label for="payment-3"
                                                                onclick="window.location='{{ url('order/stripe') }}'">{{ __('stripe payments') }}<span
                                                                    class="image"><img
                                                                        src="{{ asset('website/assets/images/Footer payment icons.png') }}"
                                                                        alt=""></span></label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="text-end"><button href="submit"
                                                class="btn-solid btn">{{ __('place_order') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->
@endsection
