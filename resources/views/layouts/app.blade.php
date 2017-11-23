<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Финансовая система</title>
    <script type="text/javascript" src="{{ URL::asset('bower/jquery/dist/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('bower/moment/moment.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('bower/moment/locale/ru.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('bower/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('bower/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('bower/bootstrap/dist/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('bower/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') }}" />
 {{--   <script
            src="https://code.jquery.com/jquery-2.2.4.js"
            integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
            crossorigin="anonymous"></script>--}}
  {{--  <script
            src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js"
    ></script>--}}
    <!-- Bootstrap Core CSS -->
{{--    <link href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">--}}
    <!-- MetisMenu CSS -->
    <link href="{{ URL::asset('vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ URL::asset('css/sb-admin-2.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/common.css') }}" rel="stylesheet">

    <!-- Morris Charts CSS -->
 {{--   <link href="{{ URL::asset('vendor/morrisjs/morris.css') }}" rel="stylesheet">--}}

    <!-- Custom Fonts -->
    <link href="{{ URL::asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<div id="wrapper">


    @include('layouts.sidebar')
    @yield('content')
</div>
<!-- /#wrapper -->
<!-- jQuery -->
{{--<script src="{{ URL::asset('vendor/jquery/jquery.min.js') }}"></script>--}}

<!-- Bootstrap Core JavaScript -->
<script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{ URL::asset('vendor/metisMenu/metisMenu.min.js') }}"></script>
<!-- Morris Charts JavaScript -->
{{--<script src="{{ URL::asset('vendor/raphael/raphael.min.js') }}"></script>
<script src="{{ URL::asset('vendor/morrisjs/morris.min.js') }}"></script>
<script src="{{ URL::asset('js/morris-data.js') }}"></script>--}}

<!-- Custom Theme JavaScript -->
<script src="{{URL::asset('js/sb-admin-2.js')}}"></script>
{{--<script src="{{URL::asset('js/moment.js')}}"></script>--}}
<script src="{{URL::asset('js/common.js')}}"></script>

</body>

</html>
