@extends('panel.main')

@section('heads')
    <link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>
    <link href="https://cdn.datatables.net/fixedheader/3.2.4/css/fixedHeader.bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap.min.css" rel="stylesheet"/>
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
            <div class="col-lg-12">
                <table id="sp" class="display table table-striped table-bordered nowrap mb-3" style="width:100%">
                    <thead>
                    <tr>
                        <!--                    <th scope="col">#</th>-->
                        <th scope="col">Nama</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Bidang Studi</th>
                        <th scope="col">Email</th>
                        <th scope="col">No HP</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($gs as $g)
                        <tr>
                            <td>{{ $g->name }}</td>
                            <td>{{ $g->jabatan }}</td>
                            <td @if($g->bidang_studi === '') style="text-align: center" @endif>{{ $g->bidang_studi === '' ? '-' : $g->bidang_studi }}</td>
                            <td>{{ $g->email }}</td>
                            <td>{{ $g->no_hp }}</td>
                            <td>{{ $g->alamat }}</td>
                            <td>
                                @if(auth()->user()->id !== $g->uid)
                                    <form id="form-hps-{{ $g->id }}" action="{{ route('gs-hapus', $g->uid) }}" method="post" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button type="button" class="btn btn-sm btn-danger"  onclick="hapus('{{ $g->name }}','form-hps-{{ $g->id }}')">Hapus</button>
                                    </form>
                                @endif
                                <a class="btn btn-sm btn-warning d-inline m-1"
                                   href="{{ route('gs-edit', $g->uid)}}">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <center>
                    <a class="btn btn-primary m-3" href="{{ route('backup-gs') }}" target="_blank">Backup</a>
                    <button type="button" class="btn btn-warning m-3" data-bs-toggle="modal"
                            data-bs-target="#restoreModal">
                        Restore
                    </button>
                    <button type="button" class="btn btn-success m-3" data-bs-toggle="modal"
                            data-bs-target="#tambahModal">
                        Tambah
                    </button>
                </center>
                <div class="modal fade" id="restoreModal" tabindex="-1" aria-labelledby="restoreModalLabel">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="restoreModalLabel">Restore Post</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="row g-3" method="post" action="{{ route('restore-gs') }}"
                                      enctype="multipart/form-data">
                                    <p style="color: #77181f">Restore akan menghapus guru dan staff yang ada dan akan menimpa dengan guru dan staff yang di upload!!!</p>
                                    @csrf
                                    <div class="mb-3">
                                        <label for="filejson" class="form-label">File.json</label>
                                        <input class="form-control @error('filejson') is-invalid @enderror mb-2"
                                               type="file" id="filejson" name="filejson" required>
                                        @error('filejson')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="text-center">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal
                                        </button>
                                        <button type="submit" class="btn btn-success">Restore</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel">
                    <div class="modal-dialog modal-fullscreen">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="tambahModalLabel">Tambah Guru & Staff</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="row g-3" action="{{ route('gs-tambah') }}" method="POST">
                                    @csrf
                                    <div class="col-md-12">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                               id="nama" name="nama" placeholder="Nama">
                                        @error('nama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="jabatan" class="form-label">Jabatan</label>
                                        <input type="text" class="form-control @error('jabatan') is-invalid @enderror"
                                               id="jabatan" name="jabatan" placeholder="Jabatan">
                                        @error('jabatan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="bidang_studi" class="form-label">Bidang Studi</label>
                                        <input type="text" class="form-control" id="bidang_studi" name="bidang_studi"
                                               placeholder="Bidang Studi">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="role" class="form-label">Role</label>
                                        <select id="role" class="form-select" name="role" id="role">
                                            <option value="admin">Admin</option>
                                            <option value="guru">Guru</option>
                                            <option value="siswa">Siswa</option>
                                            <option value="user">User</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control @error('username') is-invalid @enderror"
                                               id="username" name="username">
                                        @error('username')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                               id="email" name="email">
                                        @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               id="password" name="password">
                                        @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <input type="text" class="form-control" id="alamat" name="alamat"
                                               placeholder="Alamat">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="nohp" class="form-label">No HP</label>
                                        <input type="text" class="form-control" id="nohp" name="nohp"
                                               placeholder="08xxxxxxxxx">
                                    </div>
                                    <div class="text-center">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal
                                        </button>
                                        <button type="submit" class="btn btn-success">Tambah</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.2.4/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            var table = $('#sp').DataTable({
                responsive: true
            });
            new $.fn.dataTable.FixedHeader(table);
        });
        function hapus(nama, idform){
            this.form = document.getElementById(idform);
            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Data " + nama + " akan dihapus!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.form.submit();
                }
            })
        }
    </script>
@endsection
