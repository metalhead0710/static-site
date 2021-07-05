<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('meta')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @yield('css')
</head>
<body>
    <div id="app">
        @include('layouts.partials.header')
        @yield('content')
        @include('layouts.partials.footer')
    </div>
    @yield('scripts')
</body>
</html>
