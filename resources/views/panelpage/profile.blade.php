@extends('panel.main')

@section('heads')
    <link href="{{ url('/') }}/assets/css/profile.css" rel="stylesheet">
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
            <center>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ url('assets/img/user.png') }}" class="card-img-top img-prfl" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $user->name }}<br>({{ '@'.$user->username }})</h5>
                            <a onclick="sosial('telegram', '{{ $user->telegram }}')">
                                <iconify-icon icon="logos:telegram" width="32" height="32"></iconify-icon>
                            </a>
                            <a onclick="sosial('facebook', '{{ $user->facebook }}')">
                                <iconify-icon icon="logos:facebook" width="32" height="32"></iconify-icon>
                            </a>
                            <a onclick="sosial('instagram', '{{ $user->instagram }}')">
                                <iconify-icon icon="skill-icons:instagram" width="32" height="32"></iconify-icon>
                            </a>
                        </div>
                    </div>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#EPModal">
                        Edit Profile
                    </button>
                    <div class="modal fade" id="EPModal" tabindex="-1" aria-labelledby="EPModalLabel">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="EPModalLabel">Edit Profile</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="row g-3" method="post"
                                          action="{{ route('profile.update', 'profile') }}"
                                          enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <center>
                                            <img src="{{ url('assets/img/user.png') }}" alt=""
                                                 class="gambarprev img-thumbnail mb-3" style="max-width: 200px">
                                        </center>
                                        <div class="mb-3">
                                            <label for="gambar" class="form-label">Gambar</label>
                                            <input class="form-control @error('gambar') is-invalid @enderror mb-2"
                                                   type="file" id="gambar" name="gambar" onchange="previewimg()">
                                            @error('gambar')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-12">
                                            <label for="nama" class="form-label">Nama</label>
                                            <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                                   id="nama" name="nama" value="{{ old('nama') ?? $user->name }}"
                                                   required>
                                            @error('nama')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-12">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="text"
                                                   class="form-control @error('username') is-invalid @enderror"
                                                   id="username" name="username"
                                                   value="{{ old('username') ?? $user->username }}" required>
                                            @error('username')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-12">
                                            <label for="telegram" class="form-label">Username Telegram</label>
                                            <div class="input-group">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="text"
                                                       class="form-control @error('telegram') is-invalid @enderror"
                                                       id="telegram" name="telegram" value="{{ $user->telegram }}"
                                                       placeholder="username">
                                                @error('telegram')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="facebook" class="form-label">Username Facebook</label>
                                            <div class="input-group">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="text"
                                                       class="form-control @error('facebook') is-invalid @enderror"
                                                       id="facebook" name="facebook" value="{{ $user->facebook }}"
                                                       placeholder="username">
                                                @error('facebook')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="instagram" class="form-label">Username Instagram</label>
                                            <div class="input-group">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="text"
                                                       class="form-control @error('instagram') is-invalid @enderror"
                                                       id="instagram" name="instagram" value="{{ $user->instagram }}"
                                                       placeholder="username">
                                                @error('instagram')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal
                                            </button>
                                            <button type="submit" class="btn btn-success">Edit Profile</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#GPModal">
                        Ganti Password
                    </button>
                    <div class="modal fade" id="GPModal" tabindex="-1" aria-labelledby="GPModalLabel">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="GPModalLabel">Ganti Password</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="row g-3" method="post"
                                          action="{{ route('profile.update', 'password') }}">
                                        @csrf
                                        @method('put')
                                        <div class="col-md-12">
                                            <label for="passwordbaru" class="form-label">Password Baru</label>
                                            <input type="password"
                                                   class="form-control @error('passwordbaru') is-invalid @enderror"
                                                   id="passwordbaru" name="passwordbaru" required>
                                            @error('passwordbaru')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-12">
                                            <label for="ulangipassword" class="form-label">Ulangi Password Baru</label>
                                            <input type="password"
                                                   class="form-control @error('ulangipassword') is-invalid @enderror"
                                                   id="ulangipassword" name="ulangipassword" required>
                                            @error('ulangipassword')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="text-center">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal
                                            </button>
                                            <button type="submit" class="btn btn-success">Ubah Password</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </center>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            const image = '{{ $user->image }}';
            if (image !== '') {
                const url = '{{ url('/view-image?location=') }}' + image;
                const imagecontent = $('.img-prfl');
                const previmg = $('.gambarprev');
                changeimage(url, imagecontent);
                changeimage(url, previmg);
            }
        });

        function changeimage(url, image) {
            fetch(url)
                .then(response => response.blob())
                .then(blob => {
                    const url = URL.createObjectURL(blob);
                    image.attr('src', url);
                });
        }

        function previewimg() {
            const image = document.querySelector('#gambar');
            const previmg = $('.gambarprev');
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function (oFREvent) {
                previmg.attr('src', oFREvent.target.result);
            };
        }

        function sosial(sosial, username) {
            switch (sosial) {
                case 'telegram':
                    if (username === '') {
                        Swal.fire({
                            title: 'Ooops!',
                            html: 'link telegram masih kosong',
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
                    } else {
                        window.open('https://t.me/' + username, '_blank');
                    }
                    break;
                case 'facebook':
                    if (username === '') {
                        Swal.fire({
                            title: 'Ooops!',
                            html: 'link facebook masih kosong',
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
                    } else {
                        window.open('https://facebook.com/' + username, '_blank');
                    }
                    break;
                case 'instagram':
                    if (username === '') {
                        Swal.fire({
                            title: 'Ooops!',
                            html: 'link instagram masih kosong',
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
                    } else {
                        window.open('https://instagram.com/' + username, '_blank');
                    }
                default:
                    break;
            }
        }
    </script>
@endsection
