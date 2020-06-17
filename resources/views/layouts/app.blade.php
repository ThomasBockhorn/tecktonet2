<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="description" content="">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="{{ asset('assets/plugins/chartist-js/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/chartist-js/dist/chartist-init.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css')}}" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="{{ asset('assets/plugins/c3-master/c3.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/backend_css/style.css')}}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{ asset('css/backend_css/colors/blue.css')}}" id="theme" rel="stylesheet">
    <!--font awesome -->
    <script src="https://kit.fontawesome.com/791afc6e4d.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="app">
    <body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        @include('components/backend_components/navbar/navbar')
        @include('components/backend_components/navbar/sidebar')
        <main class="py-4">
            @yield('content')
        </main>
    </div>
     <!--<footer class="footer"> © 2017 Material Pro Admin by wrappixel.com </footer>-->
<!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets/plugins/bootstrap/js/tether.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('js/backend_js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('js/backend_js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('js/backend_js/sidebarmenu.js')}}"></script>
    <!--stickey kit -->
    <script src="{{ asset('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('js/backend_js/custom.min.js')}}"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="{{ asset('assets/plugins/chartist-js/dist/chartist.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <!--c3 JavaScript -->
    <script src="{{ asset('assets/plugins/d3/d3.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/c3-master/c3.min.js')}}"></script>
    <!-- Chart JS -->
    <script src="{{ asset('js/dashboard1.js')}}"></script>
</body>
</html>
