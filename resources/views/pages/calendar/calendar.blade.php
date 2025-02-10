@extends('layout.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/date-picker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select2.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
@endsection

@section('main-content')
    <div class="container-fluid">
<<<<<<< HEAD
        <div class="row page-titles">
            <div class="col-md-6 col-8 align-self-center">
            </div>
            <div class="col-md-6 col-4 align-self-center">
                <!-- Existing button: Settings button -->
                <button class="right-side-toggle waves-effect waves-light btn-info btn-circle btn-sm pull-right m-l-10">
                    <i class="ti-settings text-white"></i>
                </button>

                <!-- Existing button: Create button -->
                <button class="btn pull-right hidden-sm-down btn-success m-l-10" data-toggle="modal"
                    data-target="#add-contact">
                    <i class="mdi mdi-plus-circle"></i> Create
                </button>
                <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title" id="myModalLabel">Add Public H</h4>
                            </div>
                            <div class="modal-body">
                                <from class="form-horizontal form-material">
                                    <div class="form-group">
                                        <div class="col-md-12 m-b-20">
                                            <input type="text" class="form-control" placeholder="Type name">
                                        </div>
                                        <div class="col-md-12 m-b-20">
                                            <input type="text" class="form-control" placeholder="Email">
                                        </div>
                                        <div class="col-md-12 m-b-20">
                                            <input type="text" class="form-control" placeholder="Phone">
                                        </div>
                                        <div class="col-md-12 m-b-20">
                                            <input type="text" class="form-control" placeholder="Designation">
                                        </div>
                                        <div class="col-md-12 m-b-20">
                                            <input type="text" class="form-control" placeholder="Age">
                                        </div>
                                        <div class="col-md-12 m-b-20">
                                            <input type="text" class="form-control" placeholder="Date of joining">
                                        </div>
                                        <div class="col-md-12 m-b-20">
                                            <input type="text" class="form-control" placeholder="Salary">
                                        </div>
                                        <div class="col-md-12 m-b-20">
                                            <div class="fileupload btn btn-danger btn-rounded waves-effect waves-light">
                                                <span><i class="ion-upload m-r-5"></i>Upload Contact Image</span>
                                                <input type="file" class="upload">
                                            </div>
                                        </div>
                                    </div>
                                </from>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info waves-effect"
                                    data-dismiss="modal">Save</button>
                                <button type="button" class="btn btn-default waves-effect"
                                    data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- New button 1: Button 1 with padding -->
                <button class="btn pull-right hidden-sm-down btn-primary m-l-10">
                    <i class="mdi mdi-pencil"></i> Edit
                </button>

                <!-- New button 2: Button 2 with padding -->
                <button class="btn pull-right hidden-sm-down btn-danger m-l-10">
                    <i class="mdi mdi-delete"></i> Delete
                </button>

                <!-- New button 3: Button 3 with padding -->
                <button class="btn pull-right hidden-sm-down btn-secondary m-l-10">
                    <i class="mdi mdi-eye"></i> View
                </button>

                <!-- New button 4: Button 4 with padding -->
                <button class="btn pull-right hidden-sm-down btn-warning m-l-10">
                    <i class="mdi mdi-alert-circle"></i> Alert
                </button>
            </div>

        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-block">
                        <h2 class="card-title">Data Export</h2>
                        <div class="table-responsive m-t-40">
                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <!-- Select All checkbox -->
                                        <th><input type="checkbox" id="select-all"></th>
                                        <th>Date</th>
                                        <th>Public Holiday</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($publicHolidays as $holiday)
                                        <tr>
                                            <td><input type="checkbox" class="row-select"></td>
                                            <td>{{ \Carbon\Carbon::parse($holiday->date)->format('d M Y') }}</td>
                                            <td>{{ $holiday->name }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="right-sidebar">
            <div class="slimscrollright">
                <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span>
                </div>
                <div class="r-panel-body">
                    <ul id="themecolors" class="m-t-20">
                        <li><b>With Light sidebar</b></li>
                        <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                        <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                        <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                        <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a></li>
                        <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                        <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                        <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                        <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a>
                        </li>
                        <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                        <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                        <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                        <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a>
                        </li>
                        <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a>
                        </li>
                    </ul>
                    <ul class="m-t-20 chatonline">
                        <li><b>Chat option</b></li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user-img"
                                    class="img-circle"> <span>Varun Dhavan <small
                                        class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user-img"
                                    class="img-circle"> <span>Genelia Deshmukh <small
                                        class="text-warning">Away</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user-img"
                                    class="img-circle"> <span>Ritesh Deshmukh <small
                                        class="text-danger">Busy</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user-img"
                                    class="img-circle"> <span>Arijit Sinh <small
                                        class="text-muted">Offline</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user-img"
                                    class="img-circle"> <span>Govinda Star <small
                                        class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user-img"
                                    class="img-circle"> <span>John Abraham<small
                                        class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user-img"
                                    class="img-circle"> <span>Hritik Roshan<small
                                        class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user-img"
                                    class="img-circle"> <span>Pwandeep rajan <small
                                        class="text-success">online</small></span></a>
                        </li>
                    </ul>
=======
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
>>>>>>> fb02015c874fcd093a5c2367557e5f2e8cb3d26f
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
