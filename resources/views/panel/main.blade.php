<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $title_panel }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ url('/') }}/assets/img/malogo.png" rel="icon">
    <link href="{{ url('/') }}/assets/img/malogo.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('/') }}/assets/panel/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets/panel/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets/panel/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets/panel/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets/panel/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets/panel/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets/panel/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ url('/') }}/assets/panel/css/style.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @hasSection('heads')
        @yield('heads')
    @endif
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="{{ $url_panel.'/dashboard' }}" class="logo d-flex align-items-center">
            <img src="{{ url('/') }}/assets/img/LOGO.png" alt="">
            <span class="d-none d-lg-block">{{ $nama_panel }}</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
    </div><!-- End Search Bar -->
    @include('panel.navbar')
    <!-- End Icons Navigation -->

</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link {{ $pages === 'Dashboard' ? '' : 'collapsed' }}" href="{{ $url_panel.'/dashboard' }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        @if(auth()->user()->role === 'admin')
            @include('panel.sidebar.admin')
        @endif
        @if(auth()->user()->role === 'admin' || auth()->user()->role === 'media')
            @include('panel.sidebar.media')
        @endif
    </ul>
</aside>
<!-- End Sidebar-->

<main id="main" class="main">

    <div class="pagetitle">
        <h1>{{ $pages }}</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ $url_panel.'/dashboard' }}">Home</a></li>
                <li class="breadcrumb-item active">{{ $pages }}</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    @yield('content')

</main><!-- End #main -->

<!-- ======= Footer ======= -->
@include('panel.footer')
<!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="{{ url('/') }}/assets/panel/vendor/apexcharts/apexcharts.min.js"></script>
<script src="{{ url('/') }}/assets/panel/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ url('/') }}/assets/panel/vendor/chart.js/chart.min.js"></script>
<script src="{{ url('/') }}/assets/panel/vendor/echarts/echarts.min.js"></script>
<script src="{{ url('/') }}/assets/panel/vendor/quill/quill.min.js"></script>
<script src="{{ url('/') }}/assets/panel/vendor/simple-datatables/simple-datatables.js"></script>
<script src="{{ url('/') }}/assets/panel/vendor/tinymce/tinymce.min.js"></script>
<script src="{{ url('/') }}/assets/panel/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="{{ url('/') }}/assets/panel/js/main.js"></script>
@hasSection('scripts')
    @yield('scripts')
@endif

</body>

</html>
