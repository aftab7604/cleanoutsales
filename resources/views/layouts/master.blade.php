<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Clean Out') | EstateBit Real Estate Theme Bootstrap HTML5 Template</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/line-icons.css') }}">
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slicknav.css') }}">
    <!-- Color Switcher -->
    {{-- <link rel="stylesheet" type="text/css" href="assets/css/color-switcher.css"> --}}
    <!-- Range Slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ion.rangeSlider.css') }}">
    <!-- Range Slider  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ion.rangeSlider.skinFlat.css') }}">
    <!-- Nivo Lightbox -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/nivo-lightbox.css') }}" >
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <!-- Owl carousel -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
    <!-- Tweaks -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/tweaks.css') }}">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css"/>
    @yield('styles')
    <script>
      window.APP_URL = "{{ env('APP_URL') }}";
    </script>
  </head>
  <body>

    <!-- Header Area wrapper Starts -->
    @include('partials.header')
    <!-- Header Area wrapper End -->



    <!-- Main content Start -->
    @yield('content')
    <!-- Main content End -->



    <!-- Footer Section Start -->
    @include('partials.footer')
    <!-- Footer Section End -->

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
      <i class="lni-chevron-up"></i>
    </a>

    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('assets/js/jquery-min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    {{-- <script src="assets/js/color-switcher.js"></script> --}}
    <script src="{{ asset('assets/js/jquery.mixitup.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/ion.rangeSlider.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.parallax.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('assets/js/nivo-lightbox.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('assets/js/contact-form-script.min.js') }}"></script>

    <!-- Util Scripts -->
    <script src="{{ asset('assets/js/utils/postalcode.js') }}"></script>
    <script src="{{ asset('assets/js/utils/utilLib.js') }}"></script>

    @yield('scripts')
  </body>
</html>
