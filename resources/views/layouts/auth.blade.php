<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

  <!-- Fonts -->
  <link href="{{ asset('fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

  <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

  <script src="{{ asset('jquery/jquery.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="{{ asset('chart.js/Chart.min.js') }}"></script>


  <!-- Page level custom scripts -->
  <script src="{{ asset('js/demo/chart-area-demo.js') }}" defer></script>
  <script src="{{ asset('js/demo/chart-pie-demo.js') }}" defer></script>

</head>

<body id="page-top" style="margin-top:100px">


  <!-- Begin Page Content -->
  @yield('content')
  <!-- End of Main Content -->

  <!-- Footer -->


</body>

</html>