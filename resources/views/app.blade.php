<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    {{-- <title>Satrany Ecommerce</title> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend') }}/assets/images/logo/logo.png">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/icofont.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/nivo-slider.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/percircle.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/responsive.css">
    <!-- loader-->
    <link href="{{ asset('backend/assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('backend/assets/js/pace.min.js') }}"></script>
    <script src="/backend/assets/js/sweet_alert.js" defer></script>
    <!-- Vendors JS -->
    {{-- <script src="{{ asset('frontend') }}/assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/jquery-1.12.4.min.js"></script> --}}
    <!-- Plugins JS -->
    {{-- <script src="{{ asset('frontend') }}/assets/js/popper.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/jquery.mixitup.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/jquery-ui.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/jquery.scrollUp.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/jquery.countdown.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/jquery.nivo.slider.pack.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/owl.carousel.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/plugins.js"></script> --}}
    <!-- Activation JS -->
    {{-- <script src="{{ asset('frontend') }}/assets/js/main.js"></script> --}}
    @vite('resources/js/frontend/app.js')
    @inertiaHead
</head>

<body>
    @inertia
</body>

</html>
