<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="application/javascript">
    <meta name="_token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="robots" content="noindex" />
    <link rel="shortcut icon" href="{{ asset('icon/mef.ico') }}" />
    <title>@yield('pageTitle', 'ប្រតិទិន - ជំហានចាប់ផ្ដើមឆ្ពោះទៅកាន់រដ្ឋាភិបាលអេឡិកត្រូនិក')</title>
    <script type="text/javascript" src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-ui.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/global-front.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link href="{{ asset('css/select2-4.1.0.css') }}" rel="stylesheet">
    <link href="{{ asset('css/datepicker-1.9.0.min.css') }}" rel="stylesheet">
    <style>
        .error-message {
            color: red;
            display: none;
        }

        .input-error {
            border-color: red;
            box-shadow: 0 0 5px red;
            padding: 0.375rem 0.75rem;
        }

        .bordered {
            border-color: rgb(236, 235, 235) !important;
        }
        .custom-select2 {
            opacity: 0.8;
            /* Adjust opacity */
            border-color: rgb(236, 235, 235) !important;
            /* Change border color */
            width: 100%;
            /* Set width */
            height: 35px;
            /* Set height */
        }
        .select2-container--default .select2-selection--single {
            border-color: rgb(236, 235, 235) !important;
            /* Change border color */
            height: 35px;
            /* Set height */
            line-height: 35px;
            /* Align text vertically */
        }
        .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 35px;
            /* Align text vertically */
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 35px;
            /* Align arrow vertically */
        }
        input[type=password] {
            font-family: 'time new roman' !important;
        }
    </style>
</head>
<body>
    <input type="hidden" name="baseUrl" id="baseUrl" value="{{ asset('') }}" />
    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}" />
    <div id="div-header">
        @yield('content')
    </div>
    <div id="waiting-load" class="display-none">
        <img src="{{ asset('jqwidgets/styles/images/loader.gif') }}" alt="" />
    </div>
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
    <script>
        var positionNotify = "top-right";
        //	document.cookie = "firebaseToken=";
    </script>
    <script src="{{ asset('js/expandy.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script type="text/javascript">
        $('.col-md-9').makeExpander({
            toggleElement: 'h6',
            jqAnim: false,
            showFirst: false,
            accordion: false,
            speed: 1400,
            indicator: 'arrow'
        });
    </script>

    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script src="{{ asset('js/datepicker-1.9.0.min.js') }}"></script>
    <script src="{{ asset('js/form-validation.js') }}"></script>
    {{-- Calendar jQuery --}}
    <script>
        $(document).ready(function() {
            $('#DATEOFBIRTH, #NATION_ID_EXPIRED_DATE_VALUE,#PASSPORT_ID_EXPIRED_DATE_VALUE, #FIRST_GET_OFFICER_DATE_VALUE, #FIRST_START_WORKING_DATE_FOR_GOV_VALUE, #CURRETN_PROMOTE_OFFICER_DATE_VALUE, #CURRENT_GET_OFFICER_DATE_VALUE, #ADDITIONAL_WORKING_DATE_FOR_GOV_VALUE')
                .datepicker({
                    format: 'yyyy-mm-dd',
                    autoclose: true,
                    todayHighlight: true
                });
        });
        // AWARD-SECTION DATEPICKER
        $(document).ready(function() {
            $('.RECEIVEDAWARD, .DISCIPLINEDATE').datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true,
                todayHighlight: true
            });
        });

        // GENERAL KNOWLEDGE DATEPICKER
        $(document).ready(function() {
            $('.STARTDATE, .ENDDATE').datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true,
                todayHighlight: true
            });
        });

        // FMAILY SITUATION DATEPICKER
        $(document).ready(function() {
            $('.DAD_DOB, .MOM_DOB, .SIBLING_DOB, .SON_DOB').datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true,
                todayHighlight: true
            });
        });

        // WORKING HISTORY

        $(document).ready(function() {
            $('.STARTWORKPUBLIC, .ENDWORKPUBLIC, .STARTWORKPRIVATE, .ENDWORKPRIVATE').datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true,
                todayHighlight: true
            });
        });
    </script>
</body>

</html>
