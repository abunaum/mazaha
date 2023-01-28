<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $pages }} - MA ZAHA 1</title>

    <!-- Favicons -->
    <link href="assets/img/malogo.png" rel="icon">
    <link href="assets/img/malogo.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/panel/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/panel/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/panel/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/panel/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/panel/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/panel/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/panel/vendor/simple-datatables/style.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Template Main CSS File -->
    <link href="assets/panel/css/style.css" rel="stylesheet">
</head>

<body>

<main>
    <div class="container">
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                        @yield('content')

                        <div class="credits">
                            <!-- All the links in the footer should remain intact. -->
                            <!-- You can delete the links only if you purchased the pro version. -->
                            <!-- Licensing information: https://bootstrapmade.com/license/ -->
                            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                            Designed by <a href="https://t.me/@abu_naum">Ahmad Yani</a>
                        </div>

                    </div>
                </div>
            </div>

        </section>

    </div>
</main><!-- End #main -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/panel/vendor/apexcharts/apexcharts.min.js"></script>
<script src="assets/panel/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/panel/vendor/chart.js/chart.min.js"></script>
<script src="assets/panel/vendor/echarts/echarts.min.js"></script>
<script src="assets/panel/vendor/quill/quill.min.js"></script>
<script src="assets/panel/vendor/simple-datatables/simple-datatables.js"></script>
<script src="assets/panel/vendor/tinymce/tinymce.min.js"></script>
<script src="assets/panel/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/panel/js/main.js"></script>

</body>

</html>
