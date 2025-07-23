<!DOCTYPE html>
<html lang="en">
<head>
    @stack('styles')

    <meta charset="utf-8">
    <link rel="icon" href="{{ asset('images/title.ico') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>{{ $title ?? 'Dashboard' }}</title>
    <!-- BEGIN: CSS Assets-->
    @vite([
    'resources/js/app.js',
    'resources/dist/css/app.css',
    'resources/dist/js/app.js',
])

    <!-- END: CSS Assets-->
</head>

    <body class="app">
        <!-- BEGIN: Mobile Menu -->
        @include('partials.mobile-menuquaility')
        <!-- END: Mobile Menu -->
        <div class="flex">
            <!-- BEGIN: Side Menu -->
            @include('partials.sidebar')

            <!-- END: Side Menu -->
            <!-- BEGIN: Content -->
            <div class="content">
                <!-- BEGIN: Top Bar -->
                @include('partials.header')

                @yield('content')
            </div>
        </div>
        <!-- BEGIN: JS Assets-->
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
        <script src="{{ asset('dist/js/app.js') }}"></script>
        <script src="https://unpkg.com/feather-icons"></script>
        <!-- END: JS Assets-->
    </body>
</html>
