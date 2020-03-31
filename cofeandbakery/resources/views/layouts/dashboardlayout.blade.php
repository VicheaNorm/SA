<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        COFFEE GANGE
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{asset('admina/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('admina/assets/css/paper-dashboard.css?v=2.0.0')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('admina/assets/demo/demo.css')}}" rel="stylesheet" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div id="app">
    @include('inc.dboard')
    <div class="container" style="margin-left: 200px;">
        {{-- @include('inc.messages') --}}
        @yield('content')
    </div>
</div>

<!--   Core JS Files   -->
<script src="{{asset('admina/assets/js/core/jquery.min.js')}}"></script>
<script src="{{asset('admina/assets/js/core/popper.min.js')}}"></script>
<script src="{{asset('admina/assets/js/core/bootstrap.min.js')}}"></script>
<script src="{{asset('admina/assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="{{asset('admina/assets/js/plugins/chartjs.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('admina/assets/js/plugins/bootstrap-notify.js')}}"></script>

<script src="{{asset('admina/assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript')}}"></script>

<script src="{{asset('admina/assets/demo/demo.js')}}"></script>
<script>
    $(document).ready(function() {
        demo.initChartsPages();
    });
</script>
</body>
</html>


