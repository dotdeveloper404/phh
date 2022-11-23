<!DOCTYPE html>
<html lang="en">

<!--begin::Head-->

<head>
    <title>@yield('title') | {{ config('app.name') }}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="{{ asset('dashboard-assets/media/logos/favicon.ico') }}" />

    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->

    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('dashboard-assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard-assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->

    <style>
        body {
            background-image: url({{ asset('assets/images/bg4.jpg') }});
        }
    </style>

    @stack('styles')

    @vite('resources/js/app.js')
</head>
<!--end::Head-->

<!--begin::Body-->
<body id="kt_body" class="app-blank app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
    <div style="overflow-y: scroll">
        @yield('content')
    </div>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="{{ asset('dashboard-assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('dashboard-assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->

    @stack('scripts')

</body>
<!--end::Body-->

</html>
