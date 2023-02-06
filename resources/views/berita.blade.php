@extends('layouts.main')

@section('content')
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container mt-3">
            <center>
                <h2>Media Informasi MA Zainul Hasan 1</h2>
            </center>
        </div>
    </div>
    <section>
        <div class="container" data-aos="fade-up">
            @if($posts->count())
                <div class="card mb-3">
                    <div style="max-height: 350px; overflow: hidden">
                        <img class="card-img-top" src="{{ asset('storage/'.$posts[0]->gambar) }}" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <center>
                            <h2 class="card-title">{{ $posts[0]->judul }}</h2>
                            <p class="card-text mb-3"><small
                                    class="text-muted">Diposting {{ \Carbon\Carbon::parse($posts[0]->created_at)->diffForHumans() }}
                                    . By {{ $posts[0]->nama_author }} | Kategori : {{ $posts[0]->nama_kategori }}</small>
                            </p>
                        </center>
                        <p class="card-text">{{ $posts[0]->excerpt }}</p>
                        <center>
                            <a href="{{ url('/berita/detail/', $posts[0]->slug) }}" class="btn btn-primary mb-3">Baca
                                Selengkapnya</a>
                        </center>
                    </div>
                </div>
            @else
                <center>
                    <h1>Post tidak ditemukan.</h1>
                </center>
            @endif
        </div>
        <div class="container" data-aos="fade-up">
            <div class="row">
                @foreach($posts->skip(1) as $post)
                    <div class="col-md-4">
                        <div class="card">
                            <div style="max-height: 250px; overflow: hidden">
                            <img class="card-img-top" src="{{ asset('storage/'.$post->gambar) }}" alt="Gambar" style="height: 270px">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->judul }}</h5>
                                <p class="ql-align-justify">{{ Str::limit($post->excerpt, 200, '...') }}</p>
                                <a href="{{ url('/berita/detail/', $post->slug) }}" class="btn btn-primary mb-3">Baca
                                    Selengkapnya</a>
                                <p class="card-text"><small
                                        class="text-muted">Diposting {{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}
                                        . By {{ $post->nama_author }} | Kategori : {{ $post->nama_kategori }}</small>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
