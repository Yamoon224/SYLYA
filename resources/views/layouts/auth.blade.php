<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Admin Gestion E-commerce de vente de materiels de construction">
        <meta name="keywords" content="E-commerce, Construction, Matériels, Paiement en ligne, Livraison à domicile">
        <meta name="author" content="@sylya">
        <meta name="robots" content="index, follow">

        <!-- Title -->
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Apple Touch Icon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-touch-icon.png') }}">

        <!-- Favicon -->
        <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">

        <!-- App css -->
		<link href="{{ asset('admin/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />
		<link href="{{ asset('admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body class="loading authentication-bg authentication-bg-pattern">
        <div class="account-pages my-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="text-center">   
                            <a href="index.html">
                            </a>
                        </div>
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="text-center mb-4">
                                    <img src="{{ asset('images/logo/black.png') }}" alt="" height="40" class="mx-auto">
                                    <p class="text-muted"></p>
                                </div>
                                {{ $slot }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Vendor -->
        <script src="{{ asset('admin/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('admin/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('admin/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('admin/libs/node-waves/waves.min.js') }}"></script>
        <script src="{{ asset('admin/libs/waypoints/lib/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('admin/libs/jquery.counterup/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('admin/libs/feather-icons/feather.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('admin/js/app.min.js') }}"></script>
        @stack('scripts')
    </body>
</html>
