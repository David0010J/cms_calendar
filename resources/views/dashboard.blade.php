@extends('layout.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/date-picker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/owlcarousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
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
        </div>
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
@endsection
