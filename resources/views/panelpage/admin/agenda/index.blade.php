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
                        <th scope="col">Judul</th>
                        <th scope="col">Tempat</th>
                        <th scope="col">Waktu</th>
                        <th scope="col">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($agenda as $g)
                        <tr>
                            <td>{{ $g->judul }}</td>
                            <td>{{ $g->tempat }}</td>
                            <td>{{ $g->waktu }}</td>
                            <td>
                                <form id="form-hps-{{ $g->id }}" action="{{ route('agenda-hapus', $g->id) }}" method="post"
                                      class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button type="button" class="btn btn-sm btn-danger"
                                            onclick="hapus('{{ $g->judul }}','form-hps-{{ $g->id }}')">Hapus
                                    </button>
                                </form>
                                <a class="btn btn-sm btn-warning d-inline m-1"
                                   href="{{ route('agenda-edit', $g->id)}}">
                                    Edit
                                </a>
                                <a class="btn btn-sm btn-success d-inline m-1"
                                   href="{{ route('agenda-detail', $g->id)}}" target="_blank">
                                    Lihat
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <center>
                    <a class="btn btn-primary m-3" href="{{ route('backup-agenda') }}" target="_blank">Backup</a>
                    <button type="button" class="btn btn-warning m-3" data-bs-toggle="modal"
                            data-bs-target="#restoreModal">
                        Restore
                    </button>
                    <a class="btn btn-success m-3" href="{{ route('agenda-tambah') }}">Tambah</a>
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
                                <form class="row g-3" method="post" action="{{ route('restore-agenda') }}"
                                      enctype="multipart/form-data">
                                    <p style="color: #77181f">Restore akan menghapus post yang ada dan akan menimpa
                                        dengan post yang di upload!!!</p>
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

        function hapus(nama, idform) {
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
