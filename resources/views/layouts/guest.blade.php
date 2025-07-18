<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="keywords" content="E-commerce, APP Web, Gestion des commandes, Matériels de Construction" />
        <meta name="robots" content="index, follow" />
        <meta name="description" content="Site E-commerce de Matériels de Construction, App Web de Gestion des commandes" />
        <meta name="author" content="@sylya" />

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />

        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/themify-icons.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/layers.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/settings.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/megamenu.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/shortcodes.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}"/>
    </head>
    <body>

        <!--page start-->
        <div class="page">

            <x-header></x-header>

            {{ $title ?? '' }}
            <!--site-main start-->
            <div class="site-main">
                {{ $slot }}
            </div>

            <x-footer></x-footer>
        </div>

        <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
        <script src="{{ asset('js/jquery-migrate-3.4.1.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script> 
        <script src="{{ asset('js/tether.min.js') }}"></script>
        <script src="{{ asset('js/jquery.easing.js') }}"></script>    
        <script src="{{ asset('js/jquery-waypoints.js') }}"></script>    
        <script src="{{ asset('js/jquery-validate.js') }}"></script> 
        <script src="{{ asset('js/numinate.min.js') }}"></script>
        <script src="{{ asset('js/slick.js') }}"></script>
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/price_range_script.js') }}"></script>
        <script src="{{ asset('js/easyzoom.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>

        <!-- Revolution Slider -->
        <script src="{{ asset('revolution/js/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
        <script src="{{ asset('revolution/js/slider.js') }}"></script>

        <!-- Revolution Extensions -->
        <script src="{{ asset('revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
        <script src="{{ asset('revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
        <script src="{{ asset('revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
        <script src="{{ asset('revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
        <script src="{{ asset('revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
        <script src="{{ asset('revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
        <script src="{{ asset('revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
        <script src="{{ asset('revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
        <script src="{{ asset('revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    </body>
</html>
