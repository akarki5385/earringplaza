<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> {{ config('app.name', 'Laravel') }}</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/vendor/venobox/venobox.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet" type="text/css">




        <link href="{{ asset('assets1/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('assets1/css/owl.carousel.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('assets1/css/font-awesome.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('assets1/css/ionicons.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('assets1/css/flaticon.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('assets1/css/simple-line-icons.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('assets1/css/animate.css') }}" type="text/css" rel="stylesheet">
		<link href="{{ asset('assets1/css/jquery-ui.min.css') }}" type="text/css" rel="stylesheet">
        <link id="page_favicon" href="{{ asset('assets/favicon.ico') }}" rel="icon" type="image/x-icon">
		<!--Main Slider-->
		<link href="{{ asset('assets1/css/settings.css') }}" type="text/css" rel="stylesheet" media="screen">
		<link href="{{ asset('assets1/css/layers.css') }}" type="text/css" rel="stylesheet" media="screen">

		<link href="{{ asset('assets1/css/style.css') }}" type="text/css" rel="stylesheet">
		<link href="{{ asset('assets1/css/index.css') }}" type="text/css" rel="stylesheet">
		<link href="{{ asset('assets1/css/header.css') }}" type="text/css" rel="stylesheet">
		<link href="{{ asset('assets1/css/footer.css') }}" type="text/css" rel="stylesheet">
		<link href="{{ asset('assets1/css/convert.css') }}" type="text/css" rel="stylesheet">
		<link href="{{ asset('assets1/css/theme-color/default.css') }}" rel="stylesheet" type="text/css" id="theme-color" />

  <!-- Template Main CSS File -->
  {{-- <link href="assets/css/style.css" rel="stylesheet"> --}}

  <!-- =======================================================
  * Template Name: Restaurantly - v1.1.0
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


    <body>

        @include('layouts.navbar')

        @yield('content')


        @include('layouts.footer')



  <!-- Vendor JS Files -->
  <script  src="{{ asset('assets/vendor/jquery/jquery.min.js') }}" type="text/javascript"></script>
  <script  src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
  <script  src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}" type="text/javascript"></script>
  <script  src="{{ asset('assets/vendor/php-email-form/validate.js') }}" type="text/javascript"></script>
  <script  src="{{ asset('assets/vendor/owl.carousel/owl.carousel.min.js') }}" type="text/javascript"></script>
  <script  src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}" type="text/javascript"></script>
  <script  src="{{ asset('assets/vendor/venobox/venobox.min.js') }}" type="text/javascript"></script>
  <script  src="{{ asset('assets/vendor/aos/aos.js') }}" type="text/javascript"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}" type="text/javascript"></script>

</body>

</html>
