@extends('panel.main')

@section('heads')
@endsection

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
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-8">
                <form method="post" action="{{ $url_panel.'/post' }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul"
                               name="judul" autofocus>
                        @error('judul')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="slug">Slug</label>
                        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug"
                               name="slug">
                        @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="kategori">Kategori</label>
                        <select class="form-control @error('kategori') is-invalid @enderror" id="kategori"
                                name="kategori">
                            @foreach($categories as $c)
                                <option value="{{ $c->id }}">{{ $c->nama }}</option>
                            @endforeach
                        </select>
                        @error('kategori')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="body">Body</label>
                        <div class="quill-textarea">
                            {!! old('body') !!}
                        </div>
                        <textarea style="display: none" id="body" name="body"></textarea>
                        @error('body')
                        <div style="color: red">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input class="form-control @error('gambar') is-invalid @enderror" type="file" id="gambar" name="gambar">
                        @error('gambar')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="time">Waktu</label>
                        <input type="datetime-local" class="form-control @error('time') is-invalid @enderror" id="time" name="time" value="{{ date('Y-m-d\TH:i:s') }}">
                        @error('time')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Buat Post</button>
                </form>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        const judul = document.querySelector('#judul');
        const slug = document.querySelector('#slug');

        judul.addEventListener('change', function () {
            fetch('{{ $url_panel.'/post' }}/checkSlug?judul=' + judul.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        })

        $(document).ready(function () {
            var toolbarOptions = [
                [{'header': [1, 2, 3, 4, 5, 6, false]}],
                [{'font': []}],
                ['bold', 'italic', 'underline', 'strike'],
                [{'list': 'ordered'}, {'list': 'bullet'}],
                [{'align': []}],
                [{'script': 'sub'}, {'script': 'super'}],
                [{'indent': '-1'}, {'indent': '+1'}],
                [{'direction': 'rtl'}],
                [{'color': []}, {'background': []}],
                ['link'],
                ['formula'],
                ['code-block']
            ];
            var quill = new Quill('.quill-textarea', {
                placeholder: 'Enter Detail',
                theme: 'snow',
                modules: {
                    toolbar: toolbarOptions
                }
            });

            const oldBody = '{!! old('body') !!}';
            if (oldBody) {
                $('#body').val(quill.container.firstChild.innerHTML);
            }

            quill.on('text-change', function (delta, oldDelta, source) {
                $('#body').val(quill.container.firstChild.innerHTML);
            });
        });
    </script>
@endsection
