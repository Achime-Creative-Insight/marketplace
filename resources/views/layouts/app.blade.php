<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
@include('layouts.header')
<<<<<<< HEAD
<main id="app" class="flex-grow-1">
    @yield('content')
</main>
=======
<div id="app">
    <main class="flex-grow-1">
        @yield('content')
    </main>
</div>
>>>>>>> 57e9a951bf0d9225c0927c3c029eaa864a8dd72c
@include('layouts.footer')
</body>
</html>
