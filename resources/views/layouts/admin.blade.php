<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/admin')}}/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('assets/admin')}}/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets/admin')}}/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="{{ asset('assets/admin')}}/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ asset('assets/admin')}}/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('assets/admin')}}/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets/admin')}}/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets/admin')}}/assets/images/favicon.png" />
    @yield('css')
    @yield('javascript')
</head>

<body>
<div class="container-scroller">
@include('admin._navigation')
    <div class="container-fluid page-body-wrapper">
        @include('admin._header')
    <div class="main-panel">
        <div class="content-wrapper">
            @yield('content')
        </div>
        @include('admin._footer')
        @yield('footer')
    </div>
    </div>
</div>
<script src="{{ asset('assets/admin')}}/assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{ asset('assets/admin')}}/assets/vendors/chart.js/Chart.min.js"></script>
<script src="{{ asset('assets/admin')}}/assets/vendors/progressbar.js/progressbar.min.js"></script>
<script src="{{ asset('assets/admin')}}/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
<script src="{{ asset('assets/admin')}}/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="{{ asset('assets/admin')}}/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset('assets/admin')}}/assets/js/off-canvas.js"></script>
<script src="{{ asset('assets/admin')}}/assets/js/hoverable-collapse.js"></script>
<script src="{{ asset('assets/admin')}}/assets/js/misc.js"></script>
<script src="{{ asset('assets/admin')}}/assets/js/settings.js"></script>
<script src="{{ asset('assets/admin')}}/assets/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{ asset('assets/admin')}}/assets/js/dashboard.js"></script>

</body>
</html>
