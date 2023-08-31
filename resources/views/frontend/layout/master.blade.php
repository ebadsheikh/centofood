<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    {{-- @if ($setting && $setting->getMediaCollection('setting.images'))
        <link rel="shortcut icon" href="{{ ' ' . $setting->getFirstMediaUrl('setting.images') . ' ' }}" />
    @else --}}
    <link rel="shortcut icon" href="{{ asset('website/assets/media/logos/default-dark.svg') }}" />
    {{-- @endif
    @if (isset($setting->application_name))
        <title>
            {{ $setting->application_name ?? '' }} </title>
    @elseif (isset($setting->short_description))
        <title> | {{ $setting['short_description'] ?? '' }}</title>
    @endif --}}
    <title>
        {{ __('multirestaurant') }} | {{ __('brings_everything_at_your_doorstep') }}</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{ asset('website/assets/css/vendors/font-awesome.css') }}">
    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('website/assets/css/vendors/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('website/assets/css/vendors/slick-theme.css') }}">
    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('website/assets/css/vendors/animate.css') }}">
    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('website/assets/css/vendors/themify-icons.css') }}">
    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('website/assets/css/vendors/bootstrap.css') }}">
    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('website/assets/css/style.css') }}">
    @livewireStyles()

</head>

<body class="theme-color-30 mulish-font">

    @include('frontend.layout.header')
    @yield('content')
    @include('frontend.layout.footer')

    <!-- tap to top -->
    <div class="tap-top">
        <div>
            <i class="fa fa-angle-double-up"></i>
        </div>
    </div>
    <!-- tap to top End -->
    @livewireScripts()
    @yield('scripts')
    <!-- latest jquery-->
    <script src="{{ asset('website/assets/js/jquery-3.3.1.min.js') }}"></script>

    <!-- fly cart ui jquery-->
    <script src="{{ asset('website/assets/js/jquery-ui.min.js') }}"></script>

    <!-- exitintent jquery-->
    <script src="{{ asset('website/assets/js/jquery.exitintent.js') }}"></script>
    <script src="{{ asset('website/assets/js/exit.js') }}"></script>

    <!-- slick js-->
    <script src="{{ asset('website/assets/js/slick.js') }}"></script>

    <!-- menu js-->
    <script src="{{ asset('website/assets/js/menu.js') }}"></script>

    <!-- lazyload js-->
    <script src="{{ asset('website/assets/js/lazysizes.min.js') }}"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('website/assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Bootstrap Notification js-->
    <script src="{{ asset('website/assets/js/bootstrap-notify.min.js') }}"></script>

    <!-- Fly cart js-->
    <script src="{{ asset('website/assets/js/fly-cart.js') }}"></script>

    <!-- Theme js-->
    <script src="{{ asset('website/assets/js/theme-setting.js') }}"></script>
    <script src="{{ asset('website/assets/js/script.js') }}"></script>
    @yield('scripts')
    <script>
        $(window).on('load', function() {
            setTimeout(function() {
                $('#exampleModal').modal('show');
            }, 2500);
        });

        function openSearch() {
            document.getElementById("search-overlay").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("search-overlay").style.display = "none";
        }
    </script>

</body>

</html>
