<!-- top panel start -->
<div class="top-panel-adv">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-10">
                <div class="panel-left-content">
                    <h4 class="mb-0">{{ __('welcome_to_multikart') }}!! {{ __('delivery_in') }} <span>10
                            {{ __('minutes') }}.</span></h4>
                    <div class="delivery-area d-md-block d-none">
                        <div>
                            <h5>{{ __('limited_time_offer') }}</h5>
                            <h4>{{ __('code') }}: 25FsfuABdS</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2"><a href="javascript:void(0)" class="close-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- top panel end -->
<!-- header start -->
{{-- @if (isset($setting))
    <header class="{{ $setting->fixed_header == 'Active' ? 'position-fixed col-12' : '' }}" style="z-index: 100">
    @else --}}
{{-- @endif --}}
<header id="sticky-header" class="style-light header-compact">
    <div class="mobile-fix-option"></div>
    <div class="top-header top-header-theme">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="header-contact">
                        <ul>
                            <li>{{ __('welcome_to_our_store_multikart') }}</li>
                            <li><a type="button" class="text-white fw-bold">{{ __('become_a_vendor') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 text-end">
                    @if (Auth::user())
                        <ul class="header-dropdown">
                            <li class="mobile-wishlist pe-0"><a href="#"><i class="fa fa-heart"
                                        aria-hidden="true"></i></a>
                            </li>
                            <li class="onhover-dropdown mobile-account"><i class="fa fa-user" aria-hidden="true"></i>
                                {{ Auth::user()->name }}
                                <ul class="onhover-show-div">
                                    <li><a href="{{ route('user.logout') }}">{{ __('logout') }}</a></li>
                                </ul>
                            </li>
                        </ul>
                    @else
                        <ul class="header-dropdown">
                            <ul class="onhover-show-div">
                                <li><a href="{{ route('user.login.view') }}">{{ __('login') }}</a></li>
                            </ul>
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="main-menu">
                    <div class="menu-left">
                        <div class="brand-logo">
                            {{-- @if ($setting && $setting->hasMedia('application.logo.images'))
                                <img alt="Logo"
                                    src="{{ ' ' . $setting->getFirstMediaUrl('application.logo.images') . ' ' }}"
                                    class="h-25px app-sidebar-logo-default" />
                            @else --}}
                            <img alt="Logo" src="{{ asset('assets/media/logos/default-dark.svg') }}"
                                class="h-25px app-sidebar-logo-default" />
                            {{-- @endif --}}
                        </div>
                    </div>
                    <div>
                        <form class="form_search" role="form">
                            <input id="query search-autocomplete" type="search"
                                placeholder="{{ __('search_any_device_or_gadgets...') }}"
                                class="nav-search nav-search-field" aria-expanded="true">
                            <button type="submit" name="nav-submit-button" class="btn-search">
                                <i class="ti-search"></i>
                            </button>
                        </form>
                    </div>
                    <div class="menu-right pull-right">
                        <div>
                            <div class="icon-nav">
                                @if (Auth::user())
                                    @livewire('cart-counter')
                                @else
                                    <li class="onhover-div mobile-setting">
                                        <div><img src="{{ asset('website/assets/images/icon/setting.png') }}"
                                                class="img-fluid blur-up lazyload" alt=""> <i
                                                class="ti-settings"></i></div>
                                        <div class="show-div setting">
                                            <h6>{{ __('language') }}</h6>
                                            <ul>
                                                <li><a href="#">{{ __('english') }}</a></li>
                                                <li><a href="#">{{ __('french') }}</a></li>
                                            </ul>
                                            <h6>currency</h6>
                                            <ul class="list-inline">
                                                <li><a href="#">{{ __('euro') }}</a></li>
                                                <li><a href="#">{{ __('rupees') }}</a></li>
                                                <li><a href="#">{{ __('pound') }}</a></li>
                                                <li><a href="#">{{ __('doller') }}</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-part bottom-light">
        <div class="container">
            <div class="row">
                <div class="col-12 menu-row">
                    <div data-bs-toggle="modal" data-bs-target="#deliveryarea"
                        class="delivery-area d-lg-flex d-none">
                        <i data-feather="map-pin"></i>
                        <div>
                            <h6>{{ __('delivery_to') }}</h6>
                            <h5>400520</h5>
                        </div>
                    </div>
                    <div class="main-nav-center">
                        <nav id="main-nav" class="text-end">
                            <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                            <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                <li>
                                    <div class="mobile-back text-end">{{ __('back') }}<i
                                            class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                                </li>
                                <li><a href="{{ route('home') }}">{{ __('home') }}</a></li>
                                <li><a href="{{ route('restaurant.show') }}">{{ __('restaurants') }}</a></li>
                                <li><a href="{{ route('category.show') }}">{{ __('categories') }}</a></li>
                                <li><a href="{{ route('about_us.index') }}">{{ __('about_us') }}</a></li>
                                <li><a href="{{ route('contact.show') }}">{{ __('contact_us') }}</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="delivery-area d-xl-flex d-none ms-auto me-0">
                        <div>
                            <h5>Call us: 123-456-7898</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end -->
