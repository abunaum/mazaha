@extends('layouts.main')

@section('content')

    @if(!$posts->count() && request('cari'))
        <script>
            var err = '{{ request('cari') }}'
            Swal.fire({
                title: 'Ooops!',
                html: 'hasil pencarian "' + err + '" tidak ditemukan.',
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

    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container mt-3">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    {{--                    <form action="{{ url('/berita') }}">--}}
                    <div class="input-group mb-3">
                        <input type="text" class="form-control @if(!$posts->count()) is-invalid @endif"
                               placeholder="Cari Berita" name="cari" value="{{ request('cari') }}">
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
        @if($posts->count())
            <div class="container" data-aos="fade-up">
                <div class="card mb-3">
                    <div style="max-height: 350px; overflow: hidden">
                        <div class="img-thumbnail skeleton" id="skeleton-{{ $posts[0]->id }}"></div>
                        <img class="card-img-top img-id-{{ $posts[0]->id }}" src="#" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <center>
                            <h2 class="card-title">{{ $posts[0]->judul }}</h2>
                            <p class="card-text mb-3"><small
                                    class="text-muted">Diposting {{ \Carbon\Carbon::parse($posts[0]->created_at)->diffForHumans() }}
                                    . By <a
                                        href="{{ url('/berita?author='.$posts[0]->nama_author) }}">{{ $posts[0]->nama_author }}</a>
                                    | Kategori
                                    : <a
                                        href="{{ url('/berita?kategori='.$posts[0]->nama_kategori) }}">{{ $posts[0]->nama_kategori }}</a></small>
                            </p>
                        </center>
                        <p class="card-text">{{ $posts[0]->excerpt }}</p>
                        <center>
                            <a href="{{ url('/berita/detail', $posts[0]->slug) }}" class="btn btn-primary mb-3">Baca
                                Selengkapnya</a>
                        </center>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    @foreach($posts->skip(1) as $post)
                        <div class="col-md-4 mb-3">
                            <div class="card" data-aos="fade-in">
                                <div style="max-height: 250px; overflow: hidden">
                                    <div class="img-thumbnail skeleton" id="skeleton-{{ $post->id }}"></div>
                                    <img class="card-img-top img-id-{{ $post->id }}" src="#" alt="Gambar"
                                         style="height: 270px">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $post->judul }}</h5>
                                    <p class="ql-align-justify">{{ Str::limit($post->excerpt, 200, '...') }}</p>
                                    <a href="{{ url('/berita/detail', $post->slug) }}" class="btn btn-primary mb-3">Baca
                                        Selengkapnya</a>
                                    <p class="card-text">
                                        <small class="text-muted">
                                            Diposting : {{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}.
                                        </small>
                                        <br>
                                        <small class="text-muted">
                                            Kategori : <a
                                                href="{{ url('/berita?kategori='.$post->nama_kategori) }}">{{ $post->nama_kategori }}</a>.
                                        </small>
                                        <br>
                                        <small class="text-muted">
                                            By : <a
                                                href="{{ url('/berita?author='.$post->nama_author) }}">{{ $post->nama_author }}</a>.
                                        </small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center mt-3">
                    {{ $posts->links() }}
                </div>
            </div>
        @else
            <center>
                <h1>Post tidak ditemukan.</h1>
            </center>
        @endif
    </section>
@endsection

@section('scripts')
    @php
    $newdata = [];
    for ($i = 0; $i < count($posts); $i++) {
        $setdata = [
            'id' => $posts[$i]->id,
            'gambar' => $posts[$i]->gambar
        ];
        array_push($newdata, $setdata);
    }
    $newdata = json_encode($newdata);
    @endphp
    <script>
        $(document).ready(function () {
            const data = {!! $newdata !!};
            data.forEach(function (d) {
                const url = '/view-image?location=' + d.gambar;
                const image = $('.img-id-' + d.id);
                const skeleton = $('#skeleton-' + d.id);
                changeimage(url, image, skeleton)
            });
        });

        function changeimage(url, image, skeleton) {
            console.log('fetch url : '+url);
            fetch(url)
                .then(response => response.blob())
                .then(blob => {
                    const gambar = URL.createObjectURL(blob);
                    skeleton.remove();
                    image.attr('src', gambar);
                });
        }
    </script>
@endsection
