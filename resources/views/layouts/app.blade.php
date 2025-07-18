<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Themescript JS -->
        <script src="{{ asset('admin/js/theme-script.js') }}" type="text/javascript"></script>
        
        <!-- Apple Touch Icon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-touch-icon.png') }}">

        <!-- Favicon -->
        <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
        <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">

        @stack('links')
        
        <link href="{{ asset('admin/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />
        <link href="{{ asset('admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <!-- body start -->
    <body class="loading" data-layout-color="light"  data-layout-mode="default" data-layout-size="fluid" data-topbar-color="light" data-leftbar-position="fixed" data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='true'>

        <!-- Begin page -->
        <div id="wrapper">
            <x-app-topbar></x-app-topbar>

            <x-app-leftbar></x-app-leftbar>
            <div class="content-page">
                <div class="content">
                    <div class="container-fluid">
                        {{ $slot }}
                    </div>
                </div>

                <x-app-footer></x-app-footer>
            </div>
        </div>

        {{-- <x-app-rightbar></x-app-rightbar> --}}
        
        <!-- Vendor -->
        <script src="{{ asset('admin/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('admin/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('admin/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('admin/libs/node-waves/waves.min.js') }}"></script>
        <script src="{{ asset('admin/libs/waypoints/lib/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('admin/libs/jquery.counterup/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('admin/libs/feather-icons/feather.min.js') }}"></script>
        @stack('scripts')
        <script src="{{ asset('admin/js/app.min.js') }}"></script>
    </body>
</html>
