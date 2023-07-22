<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta name="google-site-verification" content="YUGAFMu1rhylt8yrWVXg19RqgGh2D6xxwjoJZSnzaWo" />
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/img/logo/favicon.png') }}">
    @include('includes.front.css')
    @yield('extraCSS')
</head>

<body>
    @include('includes.front.header')
    @include('includes.front.topbar')
    <div class="body-overlay"></div>
    <!-- back to top start  -->
    <a href="#main-wrapper" id="tp-backto-top" class="tp-back-to-top show">
        <span>
            <i class="fal fa-angle-double-up"></i>
        </span>
    </a>
    <!-- back to top end  -->
    @yield('main')
    @include('includes.front.footer')
    @include('includes.front.script')
    @yield('extraJS')
</body>

</html>
