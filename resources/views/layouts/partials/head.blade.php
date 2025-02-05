<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<!-- Favicon icon -->
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('build/assets/images/favicon.png') }}">
<title>@yield('title')</title>
<!-- Bootstrap Core CSS -->
<link href="{{ asset('build/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<!-- chartist CSS -->
<link href="{{ asset('build/assets/plugins/chartist-js/dist/chartist.min.css') }}" rel="stylesheet">
<link href="{{ asset('build/assets/plugins/chartist-js/dist/chartist-init.css') }}" rel="stylesheet">
<link href="{{ asset('build/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css') }}"
    rel="stylesheet">
<link href="{{ asset('build/assets/plugins/css-chart/css-chart.css') }}" rel="stylesheet">
<!-- Custom CSS -->
<link href="{{ asset('build/assets/css/style.css') }}" rel="stylesheet">
<!-- You can change the theme colors from here -->
<link href="{{ asset('build/assets/css/colors/blue.css') }}" id="theme" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link href="{{ asset('build/assets/fonts/Siemreap-Regular.ttf') }}" rel="stylesheet">
@yield('css')
