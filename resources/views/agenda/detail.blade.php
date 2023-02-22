@extends('layouts.main')

@section('metadata')
    <meta name="description" content="{{ $agenda->judul }}"/>
    <meta property="og:description" content="{{ $agenda->judul }}"/>
@endsection

@section('content')
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container mt-3">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="{{ url('/agenda') }}">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Cari Agenda" name="cari" id="cari">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Cari</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container" data-aos="fade-up">
            @if($agenda)
                <div class="card mb-3">
                    <div id="imagediv">
                        <div class="img-thumbnail skeleton" id="skeleton-{{ $agenda->id }}"></div>
                        <img class="card-img-top img-id-{{ $agenda->id }}" src="#" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <center>
                            <h2 class="card-title">{{ $agenda->judul }}</h2>
                            <p class="card-text mb-3">
                                Tempat : {{ $agenda->tempat }} ||
                                Waktu : {{ date('Y-m-d H:i', strtotime($agenda->waktu)) }}
                            </p>
                        </center>
                        <p class="card-text">{!! $agenda->body !!}</p>
                        <center>
                            <div class="mt-3 sharethis-inline-share-buttons">
                                <p>Bagikan : </p>
                                <div class="social-links mt-3">
                                    <a href="https://telegram.me/share/url?url={{ url('/berita/detail', $agenda->slug) }}&text={{ $agenda->judul }}"
                                       target="_blank">
                                        <iconify-icon icon="logos:telegram" width="32"></iconify-icon>
                                    </a>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url('/berita/detail', $agenda->slug)) }}&t={{ urlencode($agenda->judul) }}"
                                       target="_blank">
                                        <iconify-icon icon="logos:facebook" width="32"></iconify-icon>
                                    </a>
                                    <a href="https://api.whatsapp.com/send?text={{ $agenda->judul }}%20{{ url('/berita/detail', $agenda->slug) }}"
                                       target="_blank">
                                        <iconify-icon icon="logos:whatsapp-icon" width="32"></iconify-icon>
                                    </a>
                                    <a href="https://twitter.com/intent/tweet?text={{ $agenda->judul }}&url={{ url('/berita/detail', $agenda->slug) }}"
                                       target="_blank">
                                        <iconify-icon icon="skill-icons:twitter" width="32"></iconify-icon>
                                    </a>
                                    <a href="https://www.linkedin.com/shareArticle?token&isFramed=false&url={{ url('/berita/detail', $agenda->slug) }}"
                                       target="_blank">
                                        <iconify-icon icon="skill-icons:linkedin" width="32"></iconify-icon>
                                    </a>
                                    <a href="https://id.pinterest.com/pin-builder/?description={{ $agenda->judul }}&media={{ asset('storage/'.$agenda->gambar) }}&method=button&url={{ url('/berita/detail', $agenda->slug) }}"
                                       target="_blank">
                                        <iconify-icon icon="logos:pinterest" width="32"></iconify-icon>
                                    </a>
                                </div>
                            </div>
                        </center>
                        <hr class="mb-3">
                        <center>
                            <a href="{{ URL::previous() }}" class="btn btn-success mb-3">Kembali</a>
                            <a href="{{ url('/agenda') }}" class="btn btn-primary mb-3">Lihat Semua Agenda</a>
                        </center>
                    </div>
                </div>
            @else
                <center>
                    <h1>Berita tidak ditemukan.</h1>
                </center>
            @endif
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            const image = $('.img-id-{{ $agenda->id }}');
            image.hide();
            var skeleton = $('#skeleton-{{ $agenda->id }}');
            const divimage = $('#imagediv');
            const gambar = '{{ $agenda->gambar }}';
            if (gambar === 'default-post.jpg') {

                divimage.remove();
            } else {
                changeimage('/view-image?location={{ $agenda->gambar }}', image, skeleton)
            }
        });

        function changeimage(url, image, skeleton) {
            fetch(url)
                .then(response => response.blob())
                .then(blob => {
                    const url = URL.createObjectURL(blob);
                    skeleton.remove();
                    image.show();
                    image.attr('src', url);
                });
        }
    </script>
@endsection
