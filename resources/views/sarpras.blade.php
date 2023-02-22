@extends('layouts.main')
@section('content')
    @if(session()->has('error'))
        <script>
            var err = '{{ session('error') }}'
            Swal.fire({
                title: 'Ooops!',
                html: err,
                icon: 'error',
                timer: 5000,
                timerProgressBar: true,
                showConfirmButton: false,
                didOpen: () => {
                },
                willClose: () => {
                }
            }).then((result) => {
                /* Read more about handling dismissals below */
                if (result.dismiss === Swal.DismissReason.timer) {
                }
            })
        </script>
    @endif

    @if(session()->has('sukses'))
        <script>
            var sks = '{{ session('sukses') }}'
            Swal.fire({
                title: 'Mantap.',
                html: sks,
                icon: 'success',
                timer: 5000,
                timerProgressBar: true,
                showConfirmButton: false,
                didOpen: () => {
                },
                willClose: () => {
                }
            }).then((result) => {
                /* Read more about handling dismissals below */
                if (result.dismiss === Swal.DismissReason.timer) {
                }
            })
        </script>
    @endif

    <!-- ======= Contact Section ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container mt-3">
            <div class="section-title">
                <h2>Sarana prasarana</h2>
            </div>
        </div>
    </div>
    <section id="program-pilihan" class="services section-bg">
        <div class="container" data-aos="fade-up">
            <div class="row">
                @for($i = 1; $i <= 12; $i++)
                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch mb-3" data-aos="zoom-in"
                         data-aos-delay="100">
                        <div class="program-box">
                            <div class="text-center">
                                <img src="assets/img/LOGO.png" class="img-thumbnail program-unggulan mb-3"
                                     alt="logo" style="">
                                <h4>Sarana Prasana {{ $i }}</h4>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section><!-- End Services Section -->

@endsection

@section('scripts')

@endsection
