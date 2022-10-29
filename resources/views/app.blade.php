<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.bxslider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">

    @vite(['resources/js/app.js'])

    @stack('styles')

    <style>
        .btn_add_to_cart {
            background: #000;
            color: #fff;
            padding: 0 20px;
            line-height: 40px;
            display: inline-block;
            border-radius: 30px;
            margin-left: 20px;
        }

        /* .cartlist button {
            background: #fd0006
        } */
    </style>

</head>

<body>
    @include('partials.header')


    @yield('content')


    @include('partials.footer')

    @stack('scripts')

</body>

</html>
