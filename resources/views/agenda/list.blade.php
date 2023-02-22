@extends('layouts.main')

@section('content')

    @if(!$agendas->count() && request('cari'))
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
                    <form action="{{ url('/berita') }}">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control @if(!$agendas->count()) is-invalid @endif"
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
        @if($agendas->count())
            <div class="container">
                <div class="row justify-content-center">
                    @foreach($agendas as $agenda)
                        <div class="col-md-4 mb-3">
                            <div class="card" data-aos="fade-in">
                                <div style="max-height: 250px; overflow: hidden">
                                    <div class="img-thumbnail skeleton" id="skeleton-{{ $agenda->id }}"></div>
                                    <img class="card-img-top img-id-{{ $agenda->id }}" src="#" alt="Gambar"
                                         style="height: 270px">
                                </div>
                                <div class="card-body">
                                    <center>
                                    <h5 class="card-title">{{ $agenda->judul }}</h5>
                                    </center>
                                    <p class="ql-align-justify">{{ Str::limit(strip_tags($agenda->body), 200, '...') }}</p>
                                    <a href="{{ url('/agenda/detail', $agenda->id) }}" class="btn btn-primary mb-3">Baca
                                        Selengkapnya</a>
                                    <p class="card-text">
                                        <small class="text-muted">
                                            Tempat : {{ $agenda->tempat }}
                                        </small>
                                        <br>
                                        <small class="text-muted">
                                            Waktu : {{ date('Y-m-d H:i', strtotime($agenda->waktu)) }}
                                        </small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center mt-3">
                    {{ $agendas->onEachSide(1)->links() }}
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
        for ($i = 0; $i < count($agendas); $i++) {
            $setdata = [
                'id' => $agendas[$i]->id,
                'gambar' => $agendas[$i]->gambar
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
