<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="wpOceans">
        <!-- SEO + Share Meta -->
<meta property="og:title" content="Kandhasivanayagam ❤️ Priyanka Wedding" />
<meta property="og:description" content="Join us to celebrate the wedding of Kandhasivanayagam and Priyanka. Save the date and be part of our beautiful journey." />
<meta property="og:image" content="{{ asset('assets/images/share.png') }}" />
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:type" content="website" />

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Kandhasivanayagam ❤️ Priyanka Wedding">
<meta name="twitter:description" content="Join us to celebrate the wedding of Kandhasivanayagam and Priyanka. Save the date and be part of our beautiful journey.">
<meta name="twitter:image" content="{{ asset('assets/images/share.png') }}">

        <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
        <title>@yield('title', 'Kandhasivanayagam ❤️ Priyanka Wedding')</title>

        <!-- Styles -->
        <link href="{{ asset('assets/css/themify-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="{{ asset('assets/css/flaticon.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/owl.theme.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/slick.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/slick-theme.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/swiper.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/nice-select.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/owl.transitions.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/jquery.fancybox.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/odometer-theme-default.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/jquery-ui.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/auth-pages.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/sass/style.css') }}" rel="stylesheet">
        @stack('styles')
        @isset($css){!! $css !!}@endisset
    </head>
    <body>
        @yield('content')

        <!-- All JavaScript files -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <!-- Plugins for this template -->
        <script src="{{ asset('assets/js/modernizr.custom.js') }}"></script>
        <script src="{{ asset('assets/js/jquery-plugin-collection.js') }}"></script>
        <script src="{{ asset('assets/js/gsap-active.js') }}"></script>
        <!-- Custom script for this template -->
        <script src="{{ asset('assets/js/script.js') }}"></script>
        @stack('scripts')
        @isset($script){!! $script !!}@endisset
    </body>
</html>
