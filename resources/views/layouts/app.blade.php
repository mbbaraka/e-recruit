<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Online Recruitment System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="This is an oline recruitment platform developed for the award of a Bachelors of Information Technology">
        <meta name="keywords" content="Online recruitment system, ORS, e-recruit, recruitment">
        <meta name="author" content="Baraka Mark Bright">
        <meta name="csrf-token" content="{{ csrf_token() }}">

            <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-grid.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/colors/colors.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/fonts/css/all.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/summernote/summernote-bs4.css') }}">

    </head>
    <body>
        @include('sweetalert::alert')

    {{-- <div class="page-loading">
        <img src="images/loader.gif" alt="" />
        <span>Skip Loader</span>
    </div> --}}

    <div class="theme-layout" id="scrollup">

        @include('partials.header')

        @yield('content')

        @include('partials.footer')

    </div>
    @include('partials.modals')

    <script src="{{ asset('assets/js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('assets/js/modernizr.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/script.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/parallax.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/select-chosen.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/select2.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/counter.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/tag.js') }}" type="text/javascript"></script>
    <script>
      $('#select2').select2();

        $(function () {
            // Summernote
            $('.text-area').summernote()
        })
    </script>
    </body>

    <!-- Mirrored from grandetest.com/theme/jobhunt-html/index8.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Dec 2019 18:53:52 GMT -->
    </html>


