@extends('others.others_layout.master')
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
@endsection
@section('others_content')
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="login-card">
                    <div>
                        <div><a class="logo"><img class="img-fluid for-light" style="width:100%;"
                                    src="{{ asset('assets/images/logo/logo2.png') }}" alt="login page"></a></div>
                        <div class="login-main">

                            <!-- Login Form -->
                            <form class="theme-form" role="form" method="POST" action="{{ route('login.post') }}">
                                @csrf
                                <h5 style="text-align: center" class="text-center">
                                    ជំហានចាប់ផ្ដើមឆ្ពោះទៅកាន់ប្រតិទិនអេឡិកត្រូនិក
                                </h5>
                                <hr />

                                <!-- User Name Field -->
                                <div class="form-group">
                                    <input class="form-control" name="user_name" id="user_name" required type="text"
                                        placeholder="{{ trans('users.userName') }}" value="{{ old('user_name') }}">
                                </div>

                                <!-- Password Field -->
                                <div class="form-group">
                                    <div class="form-input position-relative">
                                        <input class="form-control" type="password" name="password" id="password" required
                                            placeholder="{{ trans('users.password') }}">
                                        <div class="show-hide"><span class="show"> </span></div>
                                    </div>
                                </div>

                                <div class="form-group mb-0">
                                    <div class="text-end mt-3">
                                        <button class="btn btn-dark btn-block w-100" type="submit"
                                            style="border-radius: 5px;">
                                            ចូលប្រព័ន្ធ
                                        </button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <ul class="login-social">
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <style>
        body {
            background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
            font-size: 16px;
        }
    </style>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
@endsection
