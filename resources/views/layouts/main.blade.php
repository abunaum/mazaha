<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MA ZAHA 1 - {{ strtoupper($pages) }}</title>
    <meta name="description" content="Website Resmi MA Zainul Hasan 1 Genggong" />
    <link rel="canonical" href="https://mazainulhasan1.sch.id/" />
    <link rel="next" href="https://mazainulhasan1.sch.id" />
    <meta property="og:locale" content="id_ID" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="MA ZAHA 1 Genggong" />
    <meta property="og:description" content="Website Resmi MA Zainul Hasan 1 Genggong" />
    <meta property="og:url" content="https://mazainulhasan1.sch.id/" />
    <meta property="og:site_name" content="MA ZAHA 1 Genggong" />
    <meta name="twitter:card" content="summary_large_image" />

    <!-- Favicons -->
    <link href="{{ url('/') }}/assets/img/malogo.png" rel="icon">
    <link href="{{ url('/') }}/assets/img/malogo.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Amiri' rel='stylesheet'>
    <!-- Vendor CSS Files -->
    <link href="{{ url('/') }}/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets/panel/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets/panel/vendor/quill/quill.bubble.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ url('/') }}/assets/css/style.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @hasSection('heads')
        @yield('heads')
    @endif
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="{{ url('/') }}">MA ZAHA 1</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="{{ url('/') }}/assets/img/logo.png" alt="" class="img-fluid"></a>-->
        @include('layouts.navbar')
        <!-- .navbar -->

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->

@hasSection('hero')
    @yield('hero')
@endif

<!-- End Hero -->

<main id="main">

    <!-- ======= Clients Section ======= -->
    @yield('content')
    <!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    @include('layouts.footer')
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="{{ url('/') }}/assets/vendor/aos/aos.js"></script>
<script src="{{ url('/') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ url('/') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="{{ url('/') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="{{ url('/') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="{{ url('/') }}/assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ url('/') }}/assets/vendor/php-email-form/validate.js"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
<script src="{{ url('/') }}/assets/panel/vendor/quill/quill.min.js"></script>

<!-- Template Main JS File -->
<script src="{{ url('/') }}/assets/js/main.js"></script>
@hasSection('scripts')
    @yield('scripts')
@endif

</body>

</html>
