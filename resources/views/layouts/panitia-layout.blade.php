<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>{{ $title }}</title>
    <!-- Custom CSS -->
    <link href="{{ asset('template/assets/extra-libs/c3/c3.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="{{ asset('template/dist/css/style.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('template/css/custom.css') }}">
    <script src="{{ asset('js/jquery.js') }}"></script>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">

        <x-panitia-top-bar></x-panitia-top-bar>

        <x-panitia-side-bar></x-panitia-side-bar>

        {{ $slot }}
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('template/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('template/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="{{ asset('template/dist/js/app-style-switcher.js') }}"></script>
    <script src="{{ asset('template/dist/js/feather.min.js') }}"></script>
    <script src="{{ asset('template/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('template/dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('template/dist/js/custom.min.js') }}"></script>
    <!--This page JavaScript -->
    <script src="{{ asset('template/assets/extra-libs/c3/d3.min.js') }}"></script>
    <script src="{{ asset('template/assets/extra-libs/c3/c3.min.js') }}"></script>
    <script src="{{ asset('template/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('template/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('template/dist/js/pages/dashboards/dashboard1.min.js') }}"></script>
</body>

</html>
