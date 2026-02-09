<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="wpOceans">
        
        <!-- Resource Hints for Performance -->
        <link rel="dns-prefetch" href="https://fonts.googleapis.com">
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
        <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
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
        
        <!-- Preload critical intro image -->
        <link rel="preload" as="image" href="{{ asset('assets/images/about/intro-invitation.png') }}" media="(max-width: 1024px), (orientation: portrait)">
        <link rel="preload" as="image" href="{{ asset('assets/images/about/intro-desktop.png') }}" media="(min-width: 1025px) and (orientation: landscape)">

        <!-- Critical Styles (load first) -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" media="all">
        <link href="{{ asset('assets/sass/style.css') }}" rel="stylesheet" media="all">
        
        <!-- Icon Fonts (load async) -->
        <link href="{{ asset('assets/css/themify-icons.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" media="print" onload="this.media='all'">
        <link href="{{ asset('assets/css/flaticon.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
        
        <!-- Non-Critical Styles (load async - only load what's needed) -->
        <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
        <link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
        <link href="{{ asset('assets/css/owl.theme.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
        <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
        <link href="{{ asset('assets/css/jquery.fancybox.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
        <!-- Removed unused CSS: slick.css, slick-theme.css, swiper.min.css, nice-select.css, owl.transitions.css, odometer-theme-default.css, jquery-ui.css, auth-pages.css -->
        
        <noscript>
            <link href="{{ asset('assets/css/themify-icons.css') }}" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
            <link href="{{ asset('assets/css/flaticon.css') }}" rel="stylesheet">
            <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
            <link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet">
            <link href="{{ asset('assets/css/owl.theme.css') }}" rel="stylesheet">
            <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet">
            <link href="{{ asset('assets/css/jquery.fancybox.css') }}" rel="stylesheet">
        </noscript>
        @stack('styles')
        @isset($css){!! $css !!}@endisset
    </head>
    <body>
        @yield('content')

        <!-- Critical JavaScript (load first) -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" defer></script>
        
        <!-- Non-Critical JavaScript (load async/defer) -->
        <script src="{{ asset('assets/js/modernizr.custom.js') }}" defer></script>
        <script src="{{ asset('assets/js/jquery-plugin-collection.js') }}" defer></script>
        <script src="{{ asset('assets/js/gsap-active.js') }}" defer></script>
        <!-- Custom script for this template -->
        <script src="{{ asset('assets/js/script.js') }}" defer></script>
        
        <!-- Performance: Preload critical resources -->
        <link rel="preload" href="{{ asset('assets/images/slider/image.png') }}" as="image" fetchpriority="high">
        @stack('scripts')
        @isset($script){!! $script !!}@endisset
    </body>
</html>
