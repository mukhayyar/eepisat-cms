<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Bamantara EEPISAT PENS</title>
    <link rel="icon"
        href="https://d33wubrfki0l68.cloudfront.net/9c80d635033669c5a01e07bad6ad4216eb6d28d6/d3243/asset/eepisat.png"
        type="image/gif">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.min.css">
    @if (app()->environment('local'))
        @if (Request::isSecure()) 
        <link rel="stylesheet" href="{{ secure_asset('dist/css/frontend/main.css') }}">
        @else
        <link rel="stylesheet" href="{{ asset('dist/css/frontend/main.css') }}">
        @endif
    @else
        @if (Request::isSecure()) 
        <link rel="stylesheet" href="{{ secure_asset('dist/css/frontend/main.min.css') }}">
        @else
        <link rel="stylesheet" href="{{ asset('dist/css/frontend/main.min.css') }}">
        @endif
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-XF5VRJQR7G"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'G-XF5VRJQR7G');
        </script>
    @endif
    @stack('styles')
    <meta name="author" content="EEPISAT">
    <meta name="keywords"
        content="EEPISAT, Bamantara EEPISAT, Tim Dirgantara PENS, CanSat Competition, CanSat Team, CanSat Indonesia" />
    <meta name="description"
        content="Tim Bamantara EEPISAT berfokus pada pengembangan muatan roket berbasis Satelit Kaleng sejak tahun 2020." />
    <style>
        a.newsParagraph:hover {
            text-decoration: underline;
            text-decoration-color: #f6d75b;
        }
    </style>
</head>

<body>
    <header>
        <ul class="navMenuDesktop">

            <li class="none {{ Route::is('frontend.index') ? 'aktif' : '' }}"><a
                    href="{{ route('frontend.index') }}">Home</a></li>
            <li class="none {{ Route::is('frontend.about') ? 'aktif' : '' }}"><a class="" href="/about">About
                    Us</a></li>
            <li class="none {{ Route::is('frontend.gallery') ? 'aktif' : '' }}"><a href="/gallery">Gallery</a></li>
            <div class="/logo">
                <a href="/"><img
                        src="https://d33wubrfki0l68.cloudfront.net/9c80d635033669c5a01e07bad6ad4216eb6d28d6/d3243/asset/eepisat.png"
                        height="100px" width="100px" loading="lazy"></a>
            </div>
            <li class="none {{ Route::is('frontend.teams') ? 'aktif' : '' }}"><a href="/teams">Teams</a></li>
            <li class="none {{ Route::is('frontend.news') ? 'aktif' : '' }}"><a href="/news">News</a></li>
            <li class="none {{ Route::is('frontend.contact') ? 'aktif' : '' }}"><a href="/contact">Contact</a></li>
        </ul>
        <ul class="navMenuMobile">
            <li class="none {{ Route::is('frontend.index') ? 'aktif' : '' }}"><a href="/">Home</a></li>
            <li class="none {{ Route::is('frontend.about') ? 'aktif' : '' }}"><a href="/about">About Us</a></li>
            <li class="none {{ Route::is('frontend.gallery') ? 'aktif' : '' }}"><a href="/gallery">Gallery</a></li>
            <li class="none {{ Route::is('frontend.teams') ? 'aktif' : '' }}"><a href="/teams">Teams</a></li>
            <li class="none {{ Route::is('frontend.news') ? 'aktif' : '' }}"><a href="/news">News</a></li>
            <li class="none {{ Route::is('frontend.contact') ? 'aktif' : '' }}"><a href="/contact">Contact</a></li>
        </ul>
        <div class="menuToggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header>

    @yield('body')

    <script src="/dist/js/frontend/menuMobileScript.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    @stack('scripts')
</body>

</html>
