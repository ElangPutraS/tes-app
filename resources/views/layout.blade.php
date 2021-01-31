<!DOCTYPE html>
<html>
<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>@yield('title') | Elang Putra S</title>

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dashboard/core.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dashboard/icon-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/packages/datatables/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/packages/datatables/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dashboard/style.css') }}">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    @yield('style')
</head>
<body>

<div class="header">
    <div class="header-left">
        <div class="menu-icon dw dw-menu"></div><h3>Parkir App</h3>
        <div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
    </div>
</div>

<div class="main-container">
    <div class="pd-ltr-20">
        @yield('content')
        <div class="footer-wrap pd-20 mb-20">
            <p class="text-muted small">Elang Putra Sartika &copy; <?= date('Y') ?></p>
        </div>
    </div>
</div>
<!-- js -->
<script src="{{ asset('assets/js/dashboard/core.js') }}"></script>
<script src="{{ asset('assets/js/dashboard/script.min.js') }}"></script>
<script src="{{ asset('assets/js/dashboard/process.js') }}"></script>
<script src="{{ asset('assets/js/dashboard/layout-settings.js') }}"></script>
@yield('script')
</body>
</html>
