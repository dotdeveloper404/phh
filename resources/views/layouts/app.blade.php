@inject('order', 'App\Services\OrderWidgetService')

<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@yield('title') | {{ config('app.name') }}</title>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="{{ asset('dashboard-assets/media/logos/favicon.ico') }}" />
    <!-- begin::Fonts(mandatory for all pages) -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->

    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('dashboard-assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard-assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->

    <link rel="stylesheet" type="text/css" src="{{ asset('dashboard-assets/plugins/DataTables/datatables.min.css') }}">


    @vite(['resources/js/app.js'])

    <style>
        .dataTables_filter {
            text-align: end
        }

        .dataTables_filter label {
            text-align: start
        }

        #DataTables_Table_0_paginate
        .pagination {
            justify-content: end
        }
    </style>

    @stack('styles')
</head>

<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="false"
    data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true"
    data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
    data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">

    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">

        <!--begin::Page-->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">

            <!--begin::Header-->
            <div id="kt_app_header" class="app-header">

                <!--begin::Header container-->
                <div class="app-container container-fluid d-flex align-items-stretch justify-content-between"
                    id="kt_app_header_container">

                    <!--begin::Header wrapper-->
                    <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1"
                        id="kt_app_header_wrapper">

                        <!--begin::Orders widgets-->
                        <div class="app-navbar flex-shrink-0">
                            <div class="btn btn-primary my-4 me-2">
                                Total Orders <span class="badge bg-danger ms-2">{{ $order->totalOrders() }}</span>
                            </div>

                            <div class="btn btn-primary my-4 mx-2">
                                Pending Orders <span
                                    class="badge bg-danger ms-2">{{ $order->totalPendingOrders() }}</span>
                            </div>

                            <div class="btn btn-primary my-4 ms-2">
                                Completed Orders <span
                                    class="badge bg-danger ms-2">{{ $order->totalCompletedOrders() }}</span>
                            </div>

                        </div>
                        <!--end::Orders widgets-->

                        <!--begin::User menu-->
                        <div class="app-navbar flex-shrink-0">

                            <!--begin::User menu-->
                            <div class="app-navbar-item ms-1 ms-lg-3" id="kt_header_user_menu_toggle">

                                <!--begin::Menu wrapper-->
                                <div class="cursor-pointer symbol symbol-35px symbol-md-50px"
                                    data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                                    data-kt-menu-placement="bottom-end">
                                    <img src="{{ asset('dashboard-assets/media/avatars/300-1.jpg') }}" alt="user" />
                                </div>

                                <!--begin::User account menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                                    data-kt-menu="true">

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content d-flex align-items-center px-3">

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-50px me-5">
                                                <img alt="Logo"
                                                    src="{{ asset('dashboard-assets/media/avatars/300-1.jpg') }}" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Username-->
                                            <div class="d-flex flex-column">
                                                <div class="fw-bold d-flex align-items-center fs-5">
                                                    {{ auth()->user()->name }}
                                                    <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">
                                                        {{ auth()->user()->getRoleNames()->first() }}
                                                    </span>
                                                </div>
                                                <span class="fw-semibold text-muted text-hover-primary fs-7">
                                                    {{ auth()->user()->email }}
                                                </span>
                                            </div>
                                            <!--end::Username-->

                                        </div>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="#" class="menu-link px-5">My Profile</a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="javascript:void(0)" onclick="$('#logoutForm').submit()"
                                            class="menu-link px-5">Sign Out</a>
                                    </div>
                                    <!--end::Menu item-->

                                </div>
                                <!--end::User account menu-->

                                <!--end::Menu wrapper-->
                            </div>
                            <!--end::User menu-->

                        </div>
                        <!--end::User menu-->

                    </div>
                    <!--end::Header wrapper-->

                </div>
                <!--end::Header container-->


            </div>
            <!--end::Header-->

            <!--begin::Wrapper-->
            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

                <!--begin::Sidebar-->
                <div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true"
                    data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}"
                    data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start">

                    <!--begin::Logo-->
                    <div class="app-sidebar-logo justify-content-center p-6" id="kt_app_sidebar_logo"
                        style="height: unset !important">

                        <!--begin::Logo image-->
                        <a href="{{ route('home.index') }}">

                            <img alt="Logo" src="{{ asset('dashboard-assets/media/logos/default-logo.png') }}"
                                class="w-125px app-sidebar-logo-default" />
                            <img alt="Logo" src="{{ asset('dashboard-assets/media/logos/small-logo.png') }}"
                                class="h-20px w-30px app-sidebar-logo-minimize" />

                        </a>
                        <!--end::Logo image-->

                        <!--begin::Sidebar toggle-->
                        <div id="kt_app_sidebar_toggle"
                            class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary body-bg h-30px w-30px position-absolute top-50 start-100 translate-middle rotate"
                            data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
                            data-kt-toggle-name="app-sidebar-minimize">

                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
                            <span class="svg-icon svg-icon-2 rotate-180">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.5"
                                        d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z"
                                        fill="currentColor" />
                                    <path
                                        d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->

                        </div>
                        <!--end::Sidebar toggle-->

                    </div>
                    <!--end::Logo-->

                    <!--begin::sidebar menu-->
                    <div class="app-sidebar-menu overflow-hidden flex-column-fluid">

                        <!--begin::Menu wrapper-->
                        <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5"
                            data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto"
                            data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
                            data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px"
                            data-kt-scroll-save-state="true">

                            <!--begin::Menu-->
                            <div class="menu menu-column menu-rounded menu-sub-indention px-3"
                                id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">

                                {{-- Dashboard --}}
                                <div class="menu-item">
                                    <a class="menu-link @route('dashboard') active @endroute"
                                        href="{{ route('dashboard') }}">
                                        <span class="menu-icon">
                                            <span class="svg-icon svg-icon-2">
                                                <i class="bi bi-grid-fill fs-2"></i>
                                            </span>
                                        </span>
                                        <span class="menu-title">Dashboard</span>
                                    </a>
                                </div>

                                @role('Admin')

                                    {{-- Users --}}
                                    <div class="menu-item">
                                        <a class="menu-link @route('users.index') active @endroute"
                                            href="{{ route('users.index') }}">
                                            <span class="menu-icon">
                                                <span class="svg-icon svg-icon-2">
                                                    <i class="fa fa-users fs-2"></i>
                                                </span>
                                            </span>
                                            <span class="menu-title">Users</span>
                                        </a>
                                    </div>

                                    {{-- Roles --}}
                                    {{-- <div class="menu-item">
                                        <a class="menu-link @route('roles.index') active @endroute"
                                            href="{{ route('roles.index') }}">
                                            <span class="menu-icon">
                                                <span class="svg-icon svg-icon-2">
                                                    <i class="bi bi-person-badge-fill fs-2"></i>
                                                </span>
                                            </span>
                                            <span class="menu-title">Roles</span>
                                        </a>
                                    </div> --}}

                                    {{-- Leads --}}
                                    <div class="menu-item">
                                        <a class="menu-link @route('contact.index') active @endroute"
                                            href="{{ route('contact.index') }}">
                                            <span class="menu-icon">
                                                <span class="svg-icon svg-icon-2">
                                                    <i class="fa-solid fa-calendar-check fs-2"></i>
                                                </span>
                                            </span>
                                            <span class="menu-title">Leads</span>
                                        </a>
                                    </div>

                                @endrole

                                {{-- Deals --}}
                                <div class="menu-item">
                                    <a class="menu-link @route('deals.index') active @endroute"
                                        href="{{ route('deals.index') }}">
                                        <span class="menu-icon">
                                            <span class="svg-icon svg-icon-2">
                                                <i class="bi bi-bag-plus-fill fs-2"></i>
                                            </span>
                                        </span>
                                        <span class="menu-title">Deals</span>
                                    </a>
                                </div>

                                {{-- Orders --}}
                                <div class="menu-item">
                                    <a class="menu-link @route('order.index') active @endroute"
                                        href="{{ route('order.index') }}">
                                        <span class="menu-icon">
                                            <span class="svg-icon svg-icon-2">
                                                <i class="bi bi-cart-check-fill fs-2"></i>
                                            </span>
                                        </span>
                                        <span class="menu-title">Orders</span>
                                    </a>
                                </div>


                                {{-- Products --}}
                                {{-- <div class="menu-item">
                                    <a class="menu-link @route('product.index') active @endroute" href="{{ route('product.index') }}">
                                        <span class="menu-icon">
                                            <span class="svg-icon svg-icon-2">
                                                <i class="bi bi-bag-plus-fill fs-2"></i>
                                            </span>
                                        </span>
                                        <span class="menu-title">Products</span>
                                    </a>
                                </div> --}}

                                <!--Simple link-->
                                {{-- <div class="menu-item">
                                    <a class="menu-link" href="apps/calendar.html">
                                        <span class="menu-icon">
                                            <span class="svg-icon svg-icon-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.3"
                                                        d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                        </span>
                                        <span class="menu-title">Calendar</span>
                                    </a>
                                </div> --}}
                                <!--Simple link-->

                                <!--Dropdown Link-->
                                {{-- <div data-kt-menu-trigger="click" class="menu-item show menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <span class="svg-icon svg-icon-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="2" y="2" width="9"
                                                        height="9" rx="2" fill="currentColor" />
                                                    <rect opacity="0.3" x="13" y="2"
                                                        width="9" height="9" rx="2"
                                                        fill="currentColor" />
                                                    <rect opacity="0.3" x="13" y="13"
                                                        width="9" height="9" rx="2"
                                                        fill="currentColor" />
                                                    <rect opacity="0.3" x="2" y="13"
                                                        width="9" height="9" rx="2"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                        </span>
                                        <span class="menu-title">Dashboards</span>
                                        <span class="menu-arrow"></span>
                                    </span>

                                    <div class="menu-sub menu-sub-accordion">
                                        <div class="menu-item">
                                            <a class="menu-link active" href="index.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Default</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="dashboards/ecommerce.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">eCommerce</span>
                                            </a>
                                        </div>
                                    </div>
                                </div> --}}
                                <!--Dropdown Link-->

                            </div>
                            <!--end::Menu-->

                        </div>
                        <!--end::Menu wrapper-->

                    </div>
                    <!--end::sidebar menu-->

                    <!--begin::Footer-->
                    <div class="app-sidebar-footer flex-column-auto pt-2 pb-6 px-6" id="kt_app_sidebar_footer">
                        <a href="javascript:void(0)" onclick="$('#logoutForm').submit()"
                            class="btn btn-flex flex-center btn-custom btn-primary overflow-hidden text-nowrap px-0 h-40px w-100">
                            <span class="btn-label me-3">Logout</span>
                            <i class="bi bi-box-arrow-right"
                                style="font-size: 15px; padding-right: 0 !important;"></i>
                        </a>
                    </div>
                    <form action="{{ route('logout') }}" method="post" id="logoutForm">@csrf</form>
                    <!--end::Footer-->

                </div>
                <!--end::Sidebar-->

                <!--begin::Main-->
                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">

                    <!--begin::Content wrapper-->
                    <div class="d-flex flex-column flex-column-fluid">

                        <!--begin::Toolbar-->
                        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">

                            <!--begin::Toolbar container-->
                            <div id="kt_app_toolbar_container"
                                class="app-container container-fluid d-flex flex-stack">

                                <!--begin::Page title-->
                                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">

                                    <!--begin::Title-->
                                    <h1
                                        class="page-heading d-flex text-dark fw-bold flex-column justify-content-center my-0">
                                        {{ $title ?? '' }}
                                    </h1>
                                    <!--end::Title-->

                                    <!--begin::Breadcrumb-->
                                    @isset($breadcrumbs)
                                        <ul class="breadcrumb breadcrumb-dot fw-semibold fs-7 my-0 pt-1">
                                            @foreach ($breadcrumbs as $b)
                                                @if ($b['link'])
                                                    <li class="breadcrumb-item pe-3">
                                                        <a href="{{ $b['link'] }}"
                                                            class="text-primary text-hover-dark">{{ $b['name'] }}</a>
                                                    </li>
                                                @else
                                                    <li class="breadcrumb-item pe-3 text-muted">{{ $b['name'] }}</li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    @endisset
                                    <!--end::Breadcrumb-->

                                </div>
                                <!--end::Page title-->

                                @if (isset($addButton) && $addButton)
                                    <div>
                                        <a class="btn btn-primary" href="{{ $btn['link'] }}">
                                            {{ $btn['text'] }}
                                        </a>
                                    </div>
                                @endif

                            </div>
                            <!--end::Toolbar container-->

                        </div>
                        <!--end::Toolbar-->

                        <!--begin::Content-->
                        <div id="kt_app_content" class="app-content flex-column-fluid bg-white">

                            <!--begin::Content container-->
                            <div id="kt_app_content_container" class="app-container container-fluid">

                                @yield('content')

                            </div>
                            <!--end::Content container-->

                        </div>
                        <!--end::Content-->

                    </div>
                </div>

            </div>
            <!--end::Wrapper-->

        </div>
        <!--end::Page-->

    </div>
    <!--end::App-->

    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="{{ asset('dashboard-assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('dashboard-assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->

    <script src="{{ asset('dashboard-assets/plugins/DataTables/datatables.min.js') }}"></script>

    @stack('scripts')
    <script>
        $(function() {
            $('.datatable').DataTable();
        })
    </script>
</body>
