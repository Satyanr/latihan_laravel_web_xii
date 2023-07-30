<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="/uikit/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="/uikit/assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="/uikit/assets/demo/demo.css" rel="stylesheet" />
    
  <link rel="apple-touch-icon" sizes="76x76" href="/uikit/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/uikit/assets/img/favicon.png">


    @stack('styles')

</head>

<body class="landing-page sidebar-collapse">
    {{-- top navbar  --}}
    <x-home.topbar />

    {{-- content --}}
    @yield('content')


@stack('scripts')
<!--   Core JS Files   -->
<script src="/uikit/assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="/uikit/assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="/uikit/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="/uikit/assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="/uikit/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="/uikit/assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="/uikit/assets/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>
</body>

</html>
