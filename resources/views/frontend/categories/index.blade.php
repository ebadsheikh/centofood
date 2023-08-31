@extends('frontend.layout.master')
@section('content')
    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>{{ __('categories') }}</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">{{ __('home') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('categories') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- product listing section start -->
    <section class="section-b-space ratio_square category-shop-section">
        <div class="collection-wrapper">
            <div class="container">
                <a href="javascript:void(0)" class="d-xl-none d-inline-block category-mobile-button"><i
                        class="fa fa-bars"></i> {{ __('category') }}</a>
                <div class="row">
                    <div class="col-xl-3">
                        <div class="sidebar-overlay"></div>
                        <div class="nav flex-column" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            @foreach ($categories as $index => $category)
                                <a class="nav-link d-xl-none d-block sidebar-back">{{ __('back') }}</a>
                                <a class="nav-link tablinks {{ $index === 0 ? 'active' : '' }}" data-bs-toggle="tab"
                                    data-bs-target="#tab-{{ $category['id'] }}"
                                    onclick="openTab(event, '{{ $category->id }}')"
                                    role="tab">{{ $category['name'] }}</a>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="tab-content" id="v-pills-tabContent">
                            <livewire:product-list>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product listing section end -->
@endsection
{{-- @section('scripts')
    <script>
        function openTab(evt, tabId) {
            var tabcontent = document.getElementById("#tab-" + tabId);
            if (tabcontent) {
                var tablinks = document.getElementsByClassName("tablinks");
                for (var i = 0; i < tablinks.length; i++) {
                    tablinks[i].classList.remove("active");
                }
                evt.currentTarget.classList.add("active");
                var tabcontent = document.getElementsByClassName("tab-pane");
                for (var i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tabcontent.style.display = "block";
            }
        }
    </script>
@endsection --}}
