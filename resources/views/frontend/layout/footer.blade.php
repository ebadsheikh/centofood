<!-- footer start -->
<footer class="footer-light footer-expand pb-0">
    <div class="light-layout">
        <div class="container">
            <section class="small-section border-section border-top-0">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="subscribe">
                            <div>
                                <h4>{{ __('know_it_all_first!') }}</h4>
                                <p>{{ __('never_miss_anything_from_multikart_by_signing_up_to_our_newsletter') }}.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form
                            action="https://pixelstrap.us19.list-manage.com/subscribe/post?u=5a128856334b598b395f1fc9b&amp;id=082f74cbda"
                            class="form-inline subscribe-form auth-form needs-validation" method="post"
                            id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">
                            <div class="form-group mx-sm-3">
                                <input type="text" class="form-control" name="EMAIL" id="mce-EMAIL"
                                       placeholder="{{ __('enter_your_email') }}" required="required">
                            </div>
                            <button type="submit" class="btn btn-solid" id="mc-submit">{{ __('subscribe') }}</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="section-t-space section-b-space light-layout">
        <div class="container">
            <div class="row footer-theme partition-f">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-title footer-mobile-title">
                        <h4>about</h4>
                    </div>
                    <div class="footer-contant">
                        <div class="footer-logo">
                            {{-- @if ($setting && $setting->hasMedia('application.logo.images'))
                                <img alt="Logo"
                                    src="{{ ' ' . $setting->getFirstMediaUrl('application.logo.images') . ' ' }}"
                                    class="h-25px app-sidebar-logo-default" />
                            @else --}}
                            <img alt="Logo" src="{{ asset('assets/media/logos/default-dark.svg') }}"
                                 class="h-25px app-sidebar-logo-default"/>
                            {{-- @endif --}}
                        </div>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p> --}}
                        <div class="footer-social">
                            <ul>
                                <li><a href="{{ $setting['facebook_link'] ?? '#' }}"><i
                                            class="fa fa-facebook-f"></i></a>
                                </li>
                                <li><a href="{{ $setting['google_link'] ?? '#' }}"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li><a href="{{ $setting['twitter_link'] ?? '#' }}"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="{{ $setting['insta_link'] ?? '#' }}"><i class="fa fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col offset-xxl-1">
                    <div class="sub-title">
                        <div class="footer-title">
                            <h4>{{ __('our_products') }}</h4>
                        </div>
                        <div class="footer-contant">
                            <ul>
                                <li><a href="#">{{ __('mens') }}</a></li>
                                <li><a href="#">{{ __('womens') }}</a></li>
                                <li><a href="#">{{ __('clothing') }}</a></li>
                                <li><a href="#">{{ __('accessories') }}</a></li>
                                <li><a href="#">{{ __('featured') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="sub-title">
                        <div class="footer-title">
                            <h4>{{ __('why_we_choose') }}</h4>
                        </div>
                        <div class="footer-contant">
                            <ul>
                                <li><a href="#">{{ __('shipping_&_return') }}</a></li>
                                <li><a href="#">{{ __('secure_shopping') }}</a></li>
                                <li><a href="#">{{ __('gallary') }}</a></li>
                                <li><a href="#">{{ __('affiliates') }}</a></li>
                                <li><a href="#">{{ __('contacts') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="sub-title">
                        <div class="footer-title">
                            <h4>{{ __('store_information') }}</h4>
                        </div>
                        <div class="footer-contant">
                            <ul class="contact-list">
                                <li><i
                                        class="fa fa-map-marker"></i>{{ __('centoFood_multi_restaurant'), __('multi_restaurant_pakistan') }}
                                    345-659
                                </li>
                                <li><i class="fa fa-phone"></i>{{ __('call_us') }}: 123-456-7898</li>
                                <li><i class="fa fa-envelope"></i>{{ __('email_us') }}: <a
                                        href="#">Support@Fiot.com</a></li>
                                <li><i class="fa fa-fax"></i>{{ __('fax') }}: 123456</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row small-section pb-0 d-md-block d-none">
                <div class="col-12 popular-search-section">
                    <h4 class="mt-5">{{ __('cities_we_serve') }}</h4>
                    <ul>
                        <li><a href="#">{{ __('karachi') }}</a></li>
                        <li><a href="#">{{ __('lahore') }}</a></li>
                        <li><a href="#">{{ __('islamabad') }}</a></li>
                    </ul>
                    <h4 class="mt-5">{{ __('About CentoFood') }}</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua. Ut enim ad minim veniam,sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                    <h4 class="mt-5">{{ __('payment_partners') }}</h4>
                    <div>
                        <img src="website/assets/images/payment-footer.png" alt="" class="img-fluid payment-img">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="footer-end">
                        <p><i class="fa fa-copyright" aria-hidden="true"></i> 2022-23
                            {{ __('themeforest_powered_by_centoSquare') }}
                        </p>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="payment-card-bottom">
                        <ul>
                            <li>
                                <a href="#"><img src="{{ asset('website/assets/images/icon/visa.png') }}"
                                                 alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img
                                        src="{{ asset('website/assets/images/icon/mastercard.png') }}"
                                        alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img
                                        src="{{ asset('website/assets/images/icon/paypal.png') }}"
                                        alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img
                                        src="{{ asset('website/assets/images/icon/american-express.png') }}"
                                        alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img
                                        src="{{ asset('assets/website/assets/images/icon/discover.png') }}"
                                        alt=""></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->
