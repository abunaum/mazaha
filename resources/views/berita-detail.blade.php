@extends('layouts.main')

@section('content')
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container mt-3">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="{{ url('/berita') }}">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Cari Berita" name="cari" id="cari">
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
            @if($posts)
                <div class="card mb-3">
                    <div>
                        <img class="card-img-top" src="{{ asset('storage/'.$posts->gambar) }}" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <center>
                            <h2 class="card-title">{{ $posts->judul }}</h2>
                            <p class="card-text mb-3"><small
                                    class="text-muted">Diposting {{ \Carbon\Carbon::parse($posts->created_at)->diffForHumans() }}
                                    . By <a href="{{ url('/berita?cari='.$posts->nama_author) }}">{{ $posts->nama_author }}</a> | Kategori : {{ $posts->nama_kategori }}</small>
                            </p>
                        </center>
                        <p class="card-text">{!! $posts->body !!}</p>
                        <center>
                            <div class="mt-3 sharethis-inline-share-buttons">
                                <p>Bagikan : </p>
                                <div class="social-links mt-3">
                                    <a href="https://telegram.me/share/url?url={{ url('/berita/detail', $posts->slug) }}&text={{ $posts->judul }}"
                                       target="_blank">
                                        <iconify-icon icon="logos:telegram" width="32"></iconify-icon>
                                    </a>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url('/berita/detail', $posts->slug)) }}&t={{ urlencode($posts->judul) }}" target="_blank">
                                        <iconify-icon icon="logos:facebook" width="32"></iconify-icon>
                                    </a>
                                    <a href="https://api.whatsapp.com/send?text={{ $posts->judul }}%20{{ url('/berita/detail', $posts->slug) }}" target="_blank">
                                        <iconify-icon icon="logos:whatsapp-icon" width="32"></iconify-icon>
                                    </a>
                                    <a href="https://twitter.com/intent/tweet?text={{ $posts->judul }}&url={{ url('/berita/detail', $posts->slug) }}" target="_blank">
                                        <iconify-icon icon="skill-icons:twitter" width="32"></iconify-icon>
                                    </a>
                                    <a href="https://www.linkedin.com/shareArticle?token&isFramed=false&url={{ url('/berita/detail', $posts->slug) }}" target="_blank">
                                        <iconify-icon icon="skill-icons:linkedin" width="32"></iconify-icon>
                                    </a>
                                    <a href="https://id.pinterest.com/pin-builder/?description={{ $posts->judul }}&media={{ asset('storage/'.$posts->gambar) }}&method=button&url={{ url('/berita/detail', $posts->slug) }}" target="_blank">
                                        <iconify-icon icon="logos:pinterest" width="32"></iconify-icon>
                                    </a>
                                </div>
                            </div>
                        </center>
                        <hr class="mb-3">
                        <center>
                            <a href="{{ url('/berita') }}" class="btn btn-primary mb-3">Lihat Semua Berita</a>
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
