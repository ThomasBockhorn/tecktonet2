<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="Tecktonet main website 2.0">

    <!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/template_css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/template_css/slicknav.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/template_css/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/template_css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/template_css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/template_css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/template_css/animate-text.css') }}">
    <link rel="stylesheet" href="{{ asset('css/template_css/magnific-popup.css') }}">
    <!--<link rel="stylesheet" href="{{ asset('css/template_css/font-awesome.min.css') }}">-->
    <script src="https://kit.fontawesome.com/791afc6e4d.js" crossorigin="anonymous"></script>

    <!-- Ruby CSS -->
    <link rel="stylesheet" href="{{asset('css/template_css//normalize.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" href="{{asset('css/template_css//responsive.css')}}">
		
    <!-- Color CSS -->
    <!--<link rel="stylesheet" href="css/color/color1.css">-->
	<!--<link rel="stylesheet" href="css/color/color2.css">-->
	<!--<link rel="stylesheet" href="css/color/color3.css">-->
	<!--<link rel="stylesheet" href="css/color/color4.css">-->
	<!--<link rel="stylesheet" href="css/color/color5.css">-->
	<!--<link rel="stylesheet" href="css/color/color6.css">-->
	<!--<link rel="stylesheet" href="css/color/color8.css">-->
	<!--<link rel="stylesheet" href="css/color/color9.css">-->
    <link rel="stylesheet" href="{{ asset('css/template_css/color/color7.css') }}">
    <link rel="stylesheet" href="#" id="colors">
    
</head>
<body>
    <div id="app">
        @include('components/navbar/navbar')
        @yield('content')
        @include('components/footer/footer')
    </div>

    <script src="{{ asset('js/template_js/jquery.min.js')}}"></script>
    <script src="{{ asset('js/template_js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/template_js/colors.js')}}"></script>
    <script src="{{ asset('js/template_js/jquery.nav.js')}}"></script>
    <script src="{{ asset('js/template_js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{ asset('js/template_js/jquery.slicknav.min.js')}}"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="{{ asset('js/template_js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('js/template_js/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('js/template_js/wow.min.js')}}"></script>
    <script src="{{ asset('js/template_js/jquery.stellar.min.js')}}"></script>
    <script src="{{ asset('js/template_js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('js/template_js/animate-text.js')}}"></script>
    <script src="{{ asset('js/template_js/particles.min.js')}}"></script>
    <script src="{{ asset('js/template_js/particle-code.js')}}"></script>
    <script src="{{ asset('js/template_js/jquery.counterup.min.js')}}"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyC0RqLa90WDfoJedoE3Z_Gy7a7o8PCL2jw"></script>
    <script type="text/javascript" src="{{ asset('js/template_js/gmaps.min.js') }}"></script>
    <script src="{{ asset('js/template_js/main.js')}}"></script>
</body>
</html>
