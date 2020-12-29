@extends('master.master')
@section('title', 'Data Imunisasi')

@section('content')
    <a href="{{ route('table-balita-rinci') }}">
        < Kembali ke Halaman Sebelumnya</a>
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Table Catatan Imunisasi</h1>

            <p class="mb-4">
                Tabel ini berisi Data Imunisasi yang telah diberikan
                {{-- <a target="_blank" href="https://datatables.net">official
                    DataTables documentation</a>. --}}
            </p>

            <a href="{{route('input-data-imunisasi')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Input Data</a>
            <br>
            <br>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Tanggal Pencatatan</th>
                                    <th>HB 0 (0-24 jam)</th>
                                    <th>Polio</th>
                                    <th>DPT-HB-Hib 1</th>
                                    <th>Polio 2</th>
                                    <th>DPT-HB-Hib 2</th>
                                    <th>Polio 3</th>
                                    <th>DPT-HB-Hib 3</th>
                                    <th>Polio 4</th>
                                    <th>IPV</th>
                                    <th>Campak</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <th>Nomor</th>
                                <th>Tanggal Pencatatan</th>
                                <th>HB 0 (0-24 jam)</th>
                                <th>Polio</th>
                                <th>DPT-HB-Hib 1</th>
                                <th>Polio 2</th>
                                <th>DPT-HB-Hib 2</th>
                                <th>Polio 3</th>
                                <th>DPT-HB-Hib 3</th>
                                <th>Polio 4</th>
                                <th>IPV</th>
                                <th>Campak</th>
                            </tfoot>
                            <tbody>
                                <th>1</th>
                                <th>10 Desember 2020</th>
                                <th>11 Desember 2020</th>
                                <th>12 Desember 2020</th>
                                <th>13 Desember 2020</th>
                                <th>13 Desember 2020</th>
                                <th>14 Desember 2020</th>
                                <th>15 Desember 2020</th>
                                <th>16 Desember 2020</th>
                                <th>17 Desember 2020</th>
                                <th>18 Desember 2020</th>
                                <th>1 Desember 2020</th>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        @endsection
