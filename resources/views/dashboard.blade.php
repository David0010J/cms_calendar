@extends('layouts.partials.master')

@section('content')
    <div class="page-wrapper">

        <!-- Container fluid  -->

        <div class="container-fluid">

            <!-- Bread crumb and right sidebar toggle -->

            <div class="row page-titles">
                <div class="col-md-6 col-8 align-self-center">
                    <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
                </div>
                <div class="col-md-6 col-4 align-self-center">
                    {{-- <button
                        class="right-side-toggle waves-effect waves-light btn-info btn-circle btn-sm pull-right m-l-10"><i
                            class="ti-settings text-white"></i></button>
                    <button class="btn pull-right hidden-sm-down btn-success"><i class="mdi mdi-plus-circle"></i>
                        Create</button>
                    <div class="dropdown pull-right m-r-10 hidden-sm-down">
                    </div> --}}
                </div>
            </div>

            <!-- End Bread crumb and right sidebar toggle -->


            <!-- Start Page Content -->

            <div class="row">
                <!-- Column -->
                <div class="col-md-6 col-lg-3 col-xlg-3">
                    <div class="card card-inverse card-info">
                        <div class="box bg-info text-center">
                            <h1 class="font-light text-white">2,064</h1>
                            <h6 class="text-white">Sessions</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3 col-xlg-3">
                    <div class="card card-primary card-inverse">
                        <div class="box text-center">
                            <h1 class="font-light text-white">1,738</h1>
                            <h6 class="text-white">Users</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3 col-xlg-3">
                    <div class="card card-inverse card-success">
                        <div class="box text-center">
                            <h1 class="font-light text-white">5963</h1>
                            <h6 class="text-white">Page Views</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3 col-xlg-3">
                    <div class="card card-inverse card-warning">
                        <div class="box text-center">
                            <h1 class="font-light text-white">10%</h1>
                            <h6 class="text-white">Bounce Rate</h6>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row -->
            <div class="row">
                <!-- Column -->
                <div class="col-12">
                    <div class="card">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="p-20">
                                    <h2 class="font-medium text-inverse">Welcome Steave</h2>
                                    <h6 class="card-subtitle">you have 4 new messages</h6>
                                    <div class="message-box m-t-30">
                                        <div class="message-widget">
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="../assets/images/users/1.jpg"
                                                        alt="user" class="img-circle"> <span
                                                        class="profile-status online pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Lorem Ipsum is
                                                        simply dummy text of the printing and type setting industry.
                                                        Lorem Ipsum has been.</span> <span class="time">9:30
                                                        AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="../assets/images/users/2.jpg"
                                                        alt="user" class="img-circle"> <span
                                                        class="profile-status busy pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song!
                                                        See you at</span> <span class="time">9:10 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <span class="round">A</span> <span
                                                        class="profile-status away pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Arijit Sinh</h5> <span class="mail-desc">Simply dummy text
                                                        of the printing and typesetting industry.</span> <span
                                                        class="time">9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="../assets/images/users/4.jpg"
                                                        alt="user" class="img-circle"> <span
                                                        class="profile-status offline pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my
                                                        admin!</span> <span class="time">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 b-l">
                                <div class="card-block">
                                    <h4 class="font-medium text-inverse">Product Calculation</h4>
                                    <ul class="list-inline">
                                        <li class="p-l-0">
                                            <h6 class="text-muted"><i class="fa fa-circle m-r-5 text-success"></i>2016</h6>
                                        </li>
                                        <li>
                                            <h6 class="text-muted"><i class="fa fa-circle m-r-5 text-info"></i>2017</h6>
                                        </li>
                                    </ul>
                                    <div class="total-revenue4" style="height: 350px;"></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>
            <!-- Row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-block">
                            <div class="pull-right">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-secondary">Today</button>
                                    <button type="button" class="btn btn-secondary">Week</button>
                                    <button type="button" class="btn btn-secondary">Month</button>
                                </div>
                            </div>
                            <h4 class="card-title">Members Activity</h4>
                            <h6 class="card-subtitle">what members preformance / weekly status</h6>
                            <div class="table-responsive m-t-40">
                                <table class="table table-hover v-middle">
                                    <thead>
                                        <tr>
                                            <th style="width: 60px;"> Member </th>
                                            <th> Name </th>
                                            <th> Earnings </th>
                                            <th> Posts </th>
                                            <th> Reviews </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img class="img-circle" src="../assets/images/users/1.jpg" alt="user"
                                                    width="50">
                                            </td>
                                            <td>
                                                <a href="javascript:;">Govinda</a>
                                            </td>
                                            <td> $325 </td>
                                            <td> 45 </td>
                                            <td>
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star-half-full text-warning"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img class="img-circle" src="../assets/images/users/2.jpg" alt="user"
                                                    width="50">
                                            </td>
                                            <td>
                                                <a href="javascript:;">Genelia</a>
                                            </td>
                                            <td> $225 </td>
                                            <td> 35 </td>
                                            <td>
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star-half-full text-warning"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img class="img-circle" src="../assets/images/users/3.jpg" alt="user"
                                                    width="50">
                                            </td>
                                            <td>
                                                <a href="javascript:;">Hrithik</a>
                                            </td>
                                            <td> $185 </td>
                                            <td> 28 </td>
                                            <td>
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star-half-full text-warning"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img class="img-circle" src="../assets/images/users/4.jpg" alt="user"
                                                    width="50">
                                            </td>
                                            <td>
                                                <a href="javascript:;">Salman</a>
                                            </td>
                                            <td> $125 </td>
                                            <td> 25 </td>
                                            <td>
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star-half-full text-warning"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img class="img-circle" src="../assets/images/users/2.jpg" alt="user"
                                                    width="50">
                                            </td>
                                            <td>
                                                <a href="javascript:;">Genelia</a>
                                            </td>
                                            <td> $225 </td>
                                            <td> 35 </td>
                                            <td>
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star-half-full text-warning"></i>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="text-center">
                                    <button class="btn btn-success">Check more</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-block">
                            <h4 class="card-title">Customer Support</h4>
                            <h6 class="card-subtitle">24 new support ticket request generate</h6>
                        </div>
                        <div class="comment-widgets">
                            <!-- Comment Row -->
                            <div class="d-flex flex-row comment-row">
                                <div class="p-2"><span class="round"><img src="../assets/images/users/1.jpg"
                                            alt="user" width="50"></span></div>
                                <div class="comment-text w-100">
                                    <h5>James Anderson</h5>
                                    <p class="m-b-5">Lorem Ipsum is simply dummy text of the printing and type
                                        setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the
                                        printing and type setting industry.</p>
                                    <div class="comment-footer">
                                        <span class="text-muted pull-right">April 14, 2016</span>
                                        <span class="label label-light-info">Pending</span>
                                        <span class="action-icons">
                                            <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                            <a href="javascript:void(0)"><i class="ti-check"></i></a>
                                            <a href="javascript:void(0)"><i class="ti-heart"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Comment Row -->
                            <div class="d-flex flex-row comment-row active">
                                <div class="p-2"><span class="round"><img src="../assets/images/users/2.jpg"
                                            alt="user" width="50"></span></div>
                                <div class="comment-text active w-100">
                                    <h5>Michael Jorden</h5>
                                    <p class="m-b-5">Lorem Ipsum is simply dummy text of the printing and type
                                        setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the
                                        printing and type setting industry..</p>
                                    <div class="comment-footer ">
                                        <span class="text-muted pull-right">April 14, 2016</span>
                                        <span class="label label-light-success">Approved</span>
                                        <span class="action-icons active">
                                            <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                            <a href="javascript:void(0)"><i class="icon-close"></i></a>
                                            <a href="javascript:void(0)"><i class="ti-heart text-danger"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Comment Row -->
                            <div class="d-flex flex-row comment-row">
                                <div class="p-2"><span class="round"><img src="../assets/images/users/3.jpg"
                                            alt="user" width="50"></span></div>
                                <div class="comment-text w-100">
                                    <h5>Johnathan Doeting</h5>
                                    <p class="m-b-5">Lorem Ipsum is simply dummy text of the printing and type
                                        setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the
                                        printing and type setting industry.</p>
                                    <div class="comment-footer">
                                        <span class="text-muted pull-right">April 14, 2016</span>
                                        <span class="label label-light-danger">Rejected</span>
                                        <span class="action-icons">
                                            <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                            <a href="javascript:void(0)"><i class="ti-check"></i></a>
                                            <a href="javascript:void(0)"><i class="ti-heart"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- End PAge Content -->


            <!-- Right sidebar -->


        </div>

        <!-- End Container fluid  -->


        <!-- footer -->

        @include('layouts.partials.footer')

        <!-- End footer -->

    </div>
@endsection
