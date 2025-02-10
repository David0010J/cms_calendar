@extends('layout.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/date-picker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select2.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
@endsection

@section('main-content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3> Project List</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"> <i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Calendar</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row project-cards">
            <div class="col-md-12 project-list">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6 p-0">
                            <ul class="nav nav-tabs border-tab" id="top-tab" role="tablist">
                                <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-bs-toggle="tab"
                                        href="#top-home" role="tab" aria-controls="top-home" aria-selected="true"><i
                                            data-feather="target"></i>{{ trans('public_holiday.national_holiday') }}</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-bs-toggle="tab"
                                        href="#top-profile" role="tab" aria-controls="top-profile"
                                        aria-selected="false"><i
                                            data-feather="info"></i>{{ trans('public_holiday.other_events') }}</a></li>
                                <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-bs-toggle="tab"
                                        href="#top-contact" role="tab" aria-controls="top-contact"
                                        aria-selected="false"><i
                                            data-feather="check-circle"></i>{{ trans('public_holiday.good_bad_day') }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">

                        <div class="tab-content" id="top-tabContent">
                            <div class="tab-pane fade show active" id="top-home" role="tabpanel"
                                aria-labelledby="top-home-tab">
                                <div class="row">
                                    <!-- Create/Update/Delete Buttons on the right -->
                                    <div class="d-flex justify-content-end mt-3 col-sm-12">
                                        <button class="btn btn-outline-primary me-3 border-3 d-flex align-items-center px-4 py-2 rounded-pill" type="button">
                                            <i class="bi bi-plus-circle me-2"></i> Create
                                        </button>
                                        
                                        <!-- Update Button with Icon and Bold Outline -->
                                        <button class="btn btn-outline-warning me-3 border-3" type="button">
                                            <i class="bi bi-pencil-square me-2"></i> Update
                                        </button>
                                        
                                        <!-- Delete Button with Icon and Bold Outline -->
                                        <button class="btn btn-outline-danger border-3" type="button">
                                            <i class="bi bi-trash me-2"></i> Delete
                                        </button>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4>Table head options</h4><span>Similar to tables , use the modifier
                                                    classes<code>.table-[color]</code> to make <code>thead</code>appear
                                                    in
                                                    any color.</span>
                                            </div>
                                            <div class="card-block row">
                                                <div class="col-sm-12 col-lg-12 col-xl-12">
                                                    <div class="table-responsive theme-scrollbar">
                                                        <table class="table display">
                                                            <thead class="table-light">
                                                                <tr>
                                                                    <th scope="col">Id</th>
                                                                    <th scope="col">First Name</th>
                                                                    <th scope="col">Last Name</th>
                                                                    <th scope="col">Username</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">1</th>
                                                                    <td>Mark</td>
                                                                    <td>Otto</td>
                                                                    <td>@mdo</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">2</th>
                                                                    <td>Jacob</td>
                                                                    <td>Thornton</td>
                                                                    <td>@fat</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">3</th>
                                                                    <td>Larry</td>
                                                                    <td>the Bird</td>
                                                                    <td>@twitter</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="top-profile" role="tabpanel" aria-labelledby="profile-top-tab">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4>Table head options</h4><span>Similar to tables , use the modifier
                                                    classes<code>.table-[color]</code> to make <code>thead</code>appear
                                                    in
                                                    any color.</span>
                                            </div>
                                            <div class="card-block row">
                                                <div class="col-sm-12 col-lg-12 col-xl-12">
                                                    <div class="table-responsive theme-scrollbar">
                                                        <table class="table">
                                                            <thead class="table-light">
                                                                <tr>
                                                                    <th scope="col">Id</th>
                                                                    <th scope="col">First Name</th>
                                                                    <th scope="col">Last Name</th>
                                                                    <th scope="col">Username</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">1</th>
                                                                    <td>Mark</td>
                                                                    <td>Otto</td>
                                                                    <td>@mdo</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">2</th>
                                                                    <td>Jacob</td>
                                                                    <td>Thornton</td>
                                                                    <td>@fat</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">3</th>
                                                                    <td>Larry</td>
                                                                    <td>the Bird</td>
                                                                    <td>@twitter</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="top-contact" role="tabpanel"
                                aria-labelledby="contact-top-tab">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4>Table head options</h4><span>Similar to tables , use the modifier
                                                    classes<code>.table-[color]</code> to make <code>thead</code>appear
                                                    in
                                                    any color.</span>
                                            </div>
                                            <div class="card-block row">
                                                <div class="col-sm-12 col-lg-12 col-xl-12">
                                                    <div class="table-responsive theme-scrollbar">
                                                        <table class="table">
                                                            <thead class="table-light">
                                                                <tr>
                                                                    <th scope="col">Id</th>
                                                                    <th scope="col">First Name</th>
                                                                    <th scope="col">Last Name</th>
                                                                    <th scope="col">Username</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">1</th>
                                                                    <td>Mark</td>
                                                                    <td>Otto</td>
                                                                    <td>@mdo</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">2</th>
                                                                    <td>Jacob</td>
                                                                    <td>Thornton</td>
                                                                    <td>@fat</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">3</th>
                                                                    <td>Larry</td>
                                                                    <td>the Bird</td>
                                                                    <td>@twitter</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
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
    <script src="{{ asset('assets/js/typeahead/handlebars.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead/typeahead.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead/typeahead.custom.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead-search/handlebars.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead-search/typeahead-custom.js') }}"></script>
@endsection
