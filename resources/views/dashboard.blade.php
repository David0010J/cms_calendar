@extends('layout.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/date-picker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/owlcarousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/date-picker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/whether-icon.css') }}">
    <style>
        table,
        th,
        td {
            border-collapse: collapse;
            text-align: center;
            border-color: rgb(178, 191, 196) transparent;
            border: 1px solid #9e9e9e;
        }
    </style>
@endsection
@section('main-content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>{{ trans('file.dashboard') }}</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">{{ trans('file.dashboard') }}</li>
                        {{-- <li class="breadcrumb-item active">Ecommerce</li> --}}
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid dashboard-2">
        <div class="row">
            <div class="col-xl-12 col-md-12 box-col-70 xl-70">
                <div class="row">
                    <div class="col-lg-3 col-md-6 box-col-4">
                        <div class="card profit-card">
                            <div class="card-header pb-0">
                                <div class="d-flex justify-content-between">
                                    <div class="flex-grow-1">
                                        <p class="square-after f-w-600 header-text-primary">
                                            {{ trans('attendance.sick_leave') }}<i class="fa fa-circle"> </i></p>
                                        <h4>$8,55,462</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <div class="profit-wrapper header-text-primary icon-bg-primary"><i
                                                class="fa fa-arrow-up"></i></div>
                                        <h6 class="header-text-primary">79.21%</h6>
                                        <p class="mb-0">More Than last month</p>
                                    </div>
                                </div>
                                <div class="right-side icon-right-primary"><i class="fa fa-usd"></i>
                                    <div class="shap-block">
                                        <div class="rounded-shap animate-bg-primary"><i></i><i></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 box-col-4">
                        <div class="card profit-card">
                            <div class="card-header pb-0">
                                <div class="d-flex justify-content-between">
                                    <div class="flex-grow-1">
                                        <p class="square-after f-w-600 header-text-danger">
                                            {{ trans('attendance.maternity_leave') }}<i class="fa fa-circle"> </i></p>
                                        <h4>$8,55,462</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <div class="profit-wrapper header-text-danger icon-bg-danger"><i
                                                class="fa fa-arrow-up"></i></div>
                                        <h6 class="header-text-danger">79.21%</h6>
                                        <p class="mb-0">More Than last month</p>
                                    </div>
                                </div>
                                <div class="right-side icon-right-danger"><i class="fa fa-user"></i>
                                    <div class="shap-block">
                                        <div class="rounded-shap animate-bg-danger"><i></i><i></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 box-col-4">
                        <div class="card visitor-card">
                            <div class="card-header pb-0">
                                <div class="d-flex justify-content-between">
                                    <div class="flex-grow-1">
                                        <p class="square-after f-w-600 header-text-info">
                                            {{ trans('attendance.special_leave') }}<i class="fa fa-circle"> </i></p>
                                        <h4>813K</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <div class="profit-wrapper header-text-info icon-bg-info"><i
                                                class="fa fa-arrow-up"></i></div>
                                        <h6 class="header-text-info">86.94%</h6>
                                        <p class="mb-0">More Than last month</p>
                                    </div>
                                </div>
                                <div class="right-side icon-right-info"><i class="fa fa-user"></i>
                                    <div class="shap-block">
                                        <div class="rounded-shap animate-bg-primary"><i></i><i></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 box-col-4">
                        <div class="card sell-card">
                            <div class="card-header pb-0">
                                <div class="d-flex justify-content-between">
                                    <div class="flex-grow-1">
                                        <p class="square-after f-w-600 header-text-success">
                                            {{ trans('attendance.annual_leave') }}<i class="fa fa-circle"> </i></p>
                                        <h4>2,41,658</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <div class="profit-wrapper header-text-success icon-bg-success"><i
                                                class="fa fa-arrow-up"></i></div>
                                        <h6 class="header-text-success">94.40%</h6>
                                        <p class="mb-0">Look Pretty Good</p>
                                    </div>
                                </div>
                                <div class="right-side icon-right-success"><i class="fa fa-shopping-basket"></i>
                                    <div class="shap-block">
                                        <div class="rounded-shap animate-bg-success"><i></i><i></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xxl-6 col-xl-12 xl-100 col-sm-12 box-col-12">
                <div class="card o-hidden">
                    <div class="weather-widget-two">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-5 col-md-6">
                                    <div class="mobile-clock-widget">
                                        <div>
                                            <ul class="clock" id="clock">
                                                <li class="hour" id="hour"></li>
                                                <li class="min" id="min"></li>
                                                <li class="sec" id="sec"></li>
                                            </ul>
                                            <div class="date f-24 mb-2" id="date"><span id="monthDay"></span><span
                                                    id="year">, </span></div>
                                            <div>
                                                <p class="m-0 f-14 text-light">kolkata, India</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-7 col-md-6">
                                    <div class="widget-list">
                                        <ul>
                                            <li>
                                                <div class="d-flex">
                                                    <svg class="climacon climacon_cloudDrizzleMoonFillAlt"
                                                        id="cloudDrizzleMoonFillAlt" version="1.1"
                                                        viewBox="15 15 70 70">
                                                        <g
                                                            class="climacon_iconWrap climacon_iconWrap-cloudDrizzleMoonFillAlt">
                                                            <g
                                                                class="climacon_wrapperComponent climacon_wrapperComponent-moon climacon_componentWrap-moon_cloud">
                                                                <path
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody"
                                                                    d="M61.023,50.641c-6.627,0-11.999-5.372-11.999-11.998c0-6.627,5.372-11.999,11.999-11.999c0.755,0,1.491,0.078,2.207,0.212c-0.132,0.576-0.208,1.173-0.208,1.788c0,4.418,3.582,7.999,8,7.999c0.614,0,1.212-0.076,1.788-0.208c0.133,0.717,0.211,1.452,0.211,2.208C73.021,45.269,67.649,50.641,61.023,50.641z">
                                                                </path>
                                                                <path
                                                                    class="climacon_component climacon_component-fill climacon_component-fill_moon"
                                                                    fill="#FFFFFF"
                                                                    d="M59.235,30.851c-3.556,0.813-6.211,3.989-6.211,7.792c0,4.417,3.581,7.999,7.999,7.999c3.802,0,6.979-2.655,7.791-6.211C63.961,39.527,60.139,35.705,59.235,30.851z">
                                                                </path>
                                                            </g>
                                                            <g
                                                                class="climacon_wrapperComponent climacon_wrapperComponent-drizzle">
                                                                <path
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left"
                                                                    id="Drizzle-Left_1_6"
                                                                    d="M56.969,57.672l-2.121,2.121c-1.172,1.172-1.172,3.072,0,4.242c1.17,1.172,3.07,1.172,4.24,0c1.172-1.17,1.172-3.07,0-4.242L56.969,57.672z">
                                                                </path>
                                                                <path
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle"
                                                                    d="M50.088,57.672l-2.119,2.121c-1.174,1.172-1.174,3.07,0,4.242c1.17,1.172,3.068,1.172,4.24,0s1.172-3.07,0-4.242L50.088,57.672z">
                                                                </path>
                                                                <path
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right"
                                                                    d="M43.033,57.672l-2.121,2.121c-1.172,1.172-1.172,3.07,0,4.242s3.07,1.172,4.244,0c1.172-1.172,1.172-3.07,0-4.242L43.033,57.672z">
                                                                </path>
                                                            </g>
                                                            <g class="climacon_componentWrap climacon_componentWrap_cloud">
                                                                <path
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_cloud"
                                                                    d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z">
                                                                </path>
                                                                <path
                                                                    class="climacon_component climacon_component-fill climacon_component-fill_cloud"
                                                                    fill="#FFFFFF"
                                                                    d="M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    <div class="flex-grow-1">
                                                        <h5>25*C</h5>
                                                    </div><span>Peris</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex">
                                                    <svg class="climacon climacon_cloudLightningMoonFill"
                                                        id="cloudLightningMoonFill" version="1.1" viewBox="15 15 70 70">
                                                        <g
                                                            class="climacon_iconWrap climacon_iconWrap-cloudLightningMoonFill">
                                                            <g
                                                                class="climacon_wrapperComponent climacon_wrapperComponent-moon climacon_componentWrap-moon_cloud">
                                                                <path
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody"
                                                                    d="M61.023,50.641c-6.627,0-11.999-5.372-11.999-11.998c0-6.627,5.372-11.999,11.999-11.999c0.755,0,1.491,0.078,2.207,0.212c-0.132,0.576-0.208,1.173-0.208,1.788c0,4.418,3.582,7.999,8,7.999c0.614,0,1.212-0.076,1.788-0.208c0.133,0.717,0.211,1.452,0.211,2.208C73.021,45.269,67.649,50.641,61.023,50.641z">
                                                                </path>
                                                                <path
                                                                    class="climacon_component climacon_component-fill climacon_component-fill_moon"
                                                                    fill="#FFFFFF"
                                                                    d="M59.235,30.851c-3.556,0.813-6.211,3.989-6.211,7.792c0,4.417,3.581,7.999,7.999,7.999c3.802,0,6.979-2.655,7.791-6.211C63.961,39.527,60.139,35.705,59.235,30.851z">
                                                                </path>
                                                            </g>
                                                            <g
                                                                class="climacon_wrapperComponent climacon_wrapperComponent-lightning">
                                                                <polygon
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_lightning"
                                                                    points="48.001,51.641 57.999,51.641 52,61.641 58.999,61.641 46.001,77.639 49.601,65.641 43.001,65.641 ">
                                                                </polygon>
                                                            </g>
                                                            <g class="climacon_componentWrap climacon_componentWrap_cloud">
                                                                <path
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_cloud"
                                                                    d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z">
                                                                </path>
                                                                <path
                                                                    class="climacon_component climacon_component-fill climacon_component-fill_cloud"
                                                                    fill="#FFFFFF"
                                                                    d="M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    <div class="flex-grow-1">
                                                        <h5>25*C</h5>
                                                    </div><span>New York</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex">
                                                    <svg class="climacon climacon_cloudHailAltSun" id="cloudHailAltSunalt"
                                                        version="1.1" viewBox="15 15 70 70">
                                                        <g class="climacon_iconWrap climacon_iconWrap-cloudHailAltSun">
                                                            <g
                                                                class="climacon_componentWrap climacon_componentWrap-sun climacon_componentWrap-sun_cloud">
                                                                <g
                                                                    class="climacon_componentWrap climacon_componentWrap_sunSpoke">
                                                                    <path
                                                                        class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                        d="M80.029,43.611h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S81.135,43.611,80.029,43.611z">
                                                                    </path>
                                                                    <path
                                                                        class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                        d="M72.174,30.3c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L72.174,30.3z">
                                                                    </path>
                                                                    <path
                                                                        class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                        d="M58.033,25.614c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C60.033,24.718,59.135,25.614,58.033,25.614z">
                                                                    </path>
                                                                    <path
                                                                        class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                        d="M43.892,30.3l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C45.939,31.081,44.673,31.081,43.892,30.3z">
                                                                    </path>
                                                                    <path
                                                                        class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                        d="M42.033,41.612c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C41.139,39.612,42.033,40.509,42.033,41.612z">
                                                                    </path>
                                                                    <path
                                                                        class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                        d="M43.892,52.925c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L43.892,52.925z">
                                                                    </path>
                                                                    <path
                                                                        class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                        d="M58.033,57.61c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C56.033,58.505,56.928,57.61,58.033,57.61z">
                                                                    </path>
                                                                    <path
                                                                        class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                        d="M72.174,52.925l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C70.125,52.144,71.391,52.144,72.174,52.925z">
                                                                    </path>
                                                                </g>
                                                                <g
                                                                    class="climacon_wrapperComponent climacon_wrapperComponent-sunBody">
                                                                    <circle
                                                                        class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody"
                                                                        cx="58.033" cy="41.612" r="11.999"></circle>
                                                                    <circle
                                                                        class="climacon_component climacon_component-fill climacon_component-fill_sunBody"
                                                                        fill="#FFFFFF" cx="58.033" cy="41.612"
                                                                        r="7.999"></circle>
                                                                </g>
                                                            </g>
                                                            <g
                                                                class="climacon_wrapperComponent climacon_wrapperComponent-hailAlt">
                                                                <g
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-left">
                                                                    <circle cx="42" cy="65.498" r="2"></circle>
                                                                </g>
                                                                <g
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-middle">
                                                                    <circle cx="49.999" cy="65.498" r="2"></circle>
                                                                </g>
                                                                <g
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-right">
                                                                    <circle cx="57.998" cy="65.498" r="2"></circle>
                                                                </g>
                                                                <g
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-left">
                                                                    <circle cx="42" cy="65.498" r="2"></circle>
                                                                </g>
                                                                <g
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-middle">
                                                                    <circle cx="49.999" cy="65.498" r="2"></circle>
                                                                </g>
                                                                <g
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-right">
                                                                    <circle cx="57.998" cy="65.498" r="2"></circle>
                                                                </g>
                                                            </g>
                                                            <g class="climacon_componentWrap climacon_componentWrap_cloud">
                                                                <path
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_cloud"
                                                                    d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z">
                                                                </path>
                                                                <path
                                                                    class="climacon_component climacon_component-fill climacon_component-fill_cloud"
                                                                    fill="#FFFFFF"
                                                                    d="M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    <div class="flex-grow-1">
                                                        <h5>25*C</h5>
                                                    </div><span>India</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-6 xl-50 col-md-6 box-col-6">
                <div class="card">
                    <div class="cal-date-widget card-body">
                        <div class="cal-datepicker">
                            <div class="datepicker-here float-sm-end" data-language="en"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-6 xl-50 col-md-6 box-col-6">
                <div class="card">
                    <div class="widget-feedback card-body">
                        <div class="feedback-top text-center">
                            <svg class="fill-primary" viewBox="0 0 44 46" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.73709 35.2337C6.17884 31.58 4.00316 26.8452 3.49802 21.7377C1.60687 24.237 0.581465 27.3024 0.586192 30.5195C0.589372 32.612 1.03986 34.692 1.89348 36.5729L0.1333 41.9282C-0.169286 42.8488 0.0517454 43.8484 0.7102 44.5369C1.17358 45.0213 1.78451 45.2794 2.4128 45.2794C2.67714 45.2794 2.94458 45.2337 3.2054 45.14L8.32806 43.2997C10.1272 44.1922 12.1167 44.6631 14.1182 44.6665C17.2557 44.6709 20.2418 43.558 22.657 41.5068C17.8005 41.0474 13.2702 38.8615 9.73709 35.2337Z">
                                </path>
                                <path
                                    d="M43.8418 35.7427L41.2863 27.9674C42.5181 25.3348 43.1691 22.407 43.1735 19.4611C43.181 14.3388 41.2854 9.49561 37.8357 5.82369C34.3853 2.15096 29.7875 0.0836476 24.889 0.00251856C19.8097 -0.0814855 15.0354 1.93839 11.446 5.69081C7.85665 9.44332 5.92425 14.4346 6.00469 19.7451C6.08229 24.8661 8.05972 29.673 11.5726 33.2803C15.078 36.8798 19.6988 38.861 24.5879 38.8608C24.5975 38.8608 24.6077 38.8608 24.6171 38.8608C27.435 38.8563 30.2356 38.1757 32.7537 36.8879L40.1911 39.5596C40.501 39.671 40.8188 39.7252 41.1329 39.7252C41.8795 39.7252 42.6055 39.4187 43.1563 38.8428C43.9388 38.0247 44.2014 36.8369 43.8418 35.7427ZM26.3834 26.1731H16.7865C16.0633 26.1731 15.477 25.5601 15.477 24.804C15.477 24.0479 16.0633 23.435 16.7865 23.435H26.3833C27.1066 23.435 27.6929 24.048 27.6929 24.804C27.6929 25.5602 27.1067 26.1731 26.3834 26.1731ZM32.3894 20.5426H16.7866C16.0633 20.5426 15.4771 19.9296 15.4771 19.1736C15.4771 18.4176 16.0634 17.8046 16.7866 17.8046H32.3894C33.1127 17.8046 33.6989 18.4176 33.6989 19.1736C33.6989 19.9296 33.1127 20.5426 32.3894 20.5426ZM32.3894 14.912H16.7866C16.0633 14.912 15.4771 14.299 15.4771 13.543C15.4771 12.7869 16.0634 12.1739 16.7866 12.1739H32.3894C33.1127 12.1739 33.6989 12.787 33.6989 13.543C33.6989 14.299 33.1127 14.912 32.3894 14.912Z">
                                </path>
                            </svg>
                            <h3>Customer Feedback</h3>
                            <h6 class="f-w-400">385749</h6>
                        </div>
                        <div id="feedback-chart"></div>
                        <ul>
                            <li>
                                <h4>Positive</h4>
                                <h5 class="font-success">90%</h5>
                            </li>
                            <li>
                                <h4>Negative</h4>
                                <h5 class="font-danger">10%</h5>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/chart/knob/knob.min.js') }}"></script>
    <script src="{{ asset('assets/js/chart/knob/knob-chart.js') }}"></script>
    <script src="{{ asset('assets/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('assets/js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ asset('assets/js/prism/prism.min.js') }}"></script>
    <script src="{{ asset('assets/js/clipboard/clipboard.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom-card/custom-card.js') }}"></script>
    <script src="{{ asset('assets/js/notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.en.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.custom.js') }}"></script>
    <script src="{{ asset('assets/js/owlcarousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead/handlebars.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead/typeahead.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead/typeahead.custom.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead-search/handlebars.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead-search/typeahead-custom.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard/dashboard_2.js') }}"></script>
    <script src="{{ asset('assets/js/counter/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/counter/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/counter/counter-custom.js') }}"></script>
    <script src="{{ asset('assets/js/general-widget.js') }}"></script>
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection
