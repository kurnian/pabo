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

  <link href="{{ asset('css/coming-soon.min.css') }}" rel="stylesheet">


  <script src="{{ asset('jquery/jquery.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->

  <!-- Page level plugins -->


  <!-- Page level custom scripts -->

</head>

<body id="page-top">


  <!-- Begin Page Content -->
  @yield('content')
  <!-- End of Main Content -->

  <!-- Footer -->
  <script src="{{ asset('vide/jquery.vide.min.js') }}" defer></script>

  <script src="{{ asset('js/coming-soon.min.js') }}" defer></script>

</body>

</html>