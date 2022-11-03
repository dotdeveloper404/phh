<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('dashboard-assets/media/logos/favicon.ico') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.bxslider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">

    <title>@yield('title') | {{ config('app.name') }}</title>

    @vite(['resources/js/app.js'])

    @stack('styles')

</head>

<body>
    @include('partials.header')

    @yield('content')

    @include('partials.footer')

    @stack('scripts')

</body>

</html>
