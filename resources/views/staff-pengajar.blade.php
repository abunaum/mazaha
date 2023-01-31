@extends('layouts.main')

@section('heads')
    <link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>
    <link href="https://cdn.datatables.net/fixedheader/3.2.4/css/fixedHeader.bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap.min.css" rel="stylesheet"/>
@endsection

@section('content')
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container mt-3">
            <center>
                <h2>Staff Pengajar MA ZAHA 1</h2>
            </center>
        </div>
    </div>
    <section>
        <div class="container" data-aos="fade-up">
            <div>
                <table id="sp" class="display table table-striped table-bordered nowrap" style="width:100%">
                    <thead>
                    <tr>
                        <!--                    <th scope="col">#</th>-->
                        <th scope="col">Nama</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Bidang Studi</th>
                        <th scope="col">No HP</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($gs as $gs)
                        <tr>
                            <td>{{ $gs->name }}</td>
                            <td>{{ $gs->jabatan }}</td>
                            <td>{{ $gs->bidang_studi }}</td>
                            <td>{{ $gs->no_hp }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
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

            // var convertedIntoArray = [];
            // $("table#sp tr").each(function() {
            //     var rowDataArray = [];
            //     var actualData = $(this).find('td');
            //     if (actualData.length > 0) {
            //         actualData.each(function() {
            //             rowDataArray.push($(this).text());
            //         });
            //         convertedIntoArray.push(rowDataArray);
            //     }
            // });
            // console.log(convertedIntoArray);
        });
    </script>
@endsection
