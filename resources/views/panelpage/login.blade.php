@extends('panel.auth')
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
    <div class="d-flex justify-content-center py-4">
        <a href="{{ url('/') }}" class="logo d-flex align-items-center w-auto">
            <img src="assets/img/malogo.png" alt="">
            <span class="d-none d-lg-block">MA Zainul Hasan 1</span>
        </a>
    </div><!-- End Logo -->

    <div class="card mb-3">
        <div class="card-body">
            <div class="pt-4 pb-2">
                <h5 class="card-title text-center pb-0 fs-4">Login</h5>
            </div>

            <form class="row g-3 needs-validation" action="{{ url('/autentikasi') }}" method="post" novalidate>
                @csrf
                <div class="col-12">
                    <label for="username" class="form-label">Username</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
                               id="username" value="{{ old('username') }}" autofocus required>
                        @error('username')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-12">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                           id="password" required>
                    @error('password')
                    <div class="invalid-feedback">Silahkan masukkan password</div>
                    @enderror
                </div>

                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Ingat saya</label>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary w-100" type="submit">Login</button>
                </div>
            </form>

        </div>
    </div>
@endsection
