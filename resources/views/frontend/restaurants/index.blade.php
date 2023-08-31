@extends('frontend.layout.master')
@section('content')
    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>{{ __('restaurants') }}</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">{{ __('home') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('restaurants') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!--section start-->
    <section class="collection section-b-space ratio_square ">
        <div class="container">
            <div class="row partition-collection">
                @foreach ($restaurants as $restaurant)
                    @if ($restaurant['active'] == 1)
                        <div class="col-lg-3 col-md-6">
                            <div class="collection-block">
                                <div>
                                    @if (null !== $restaurant->hasMedia('restaurant.images'))
                                        <img src="{{ $restaurant->getFirstMediaUrl('restaurant.images') }}"
                                            class="img-fluid blur-up lazyload bg-img" alt="">
                                    @else
                                        <img src="{{ asset('assets/website/assets/images/foodIcon.png') }}"
                                            class="img-fluid blur-up lazyload bg-img" alt="">
                                    @endif
                                </div>
                                <div class="collection-content">
                                    <h3>{{ $restaurant['name'] }}</h3>
                                    <p>{{ strip_tags($restaurant['description']) }}</p><a
                                        href="{{ route('restaurant.profile', $restaurant['slug']) }}"
                                        class="btn btn-outline">{{ __('view_now') }} !</a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    <!--Section ends-->
@endsection
