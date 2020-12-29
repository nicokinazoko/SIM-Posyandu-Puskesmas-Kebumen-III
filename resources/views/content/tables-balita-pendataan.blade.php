@extends('master.master')
@section('title', 'Pendataan Balita')


@section('content')
    <a href="{{ route('table-balita-rinci') }}">
        < Kembali ke Halaman Sebelumnya
    </a>
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Data Hasil Pendataaan</h1>

            <p class="mb-4">Tabel ini berisi data dari pendataan balita setiap bulan
                {{-- <a target="_blank" href="https://datatables.net">official
                    DataTables documentation</a>. --}}
            </p>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Hasil Pendataan</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Tanggal Pengukuran</th>
                                    <th>Berat Badan</th>
                                    <th>Tinggi Badan</th>
                                    <th>BB/U</th>
                                    <th>ZS BB/U</th>
                                    <th>TB/U</th>
                                    <th>ZS TB/U</th>
                                    <th>BB/TB</th>
                                    <th>Naik/Tidak</th>
                                    <th>Lingkar Kepala</th>
                                    <th>PMT</th>
                                    <th>Jumlah Vitamin A</th>
                                    <th>KPSP</th>
                                    <th>KIA</th>
                                    <th>ASI Ekslusif</th>
                                    <th>Kader Pencatat</th>
                                    <th>Daerah</th>
                                    <th>Nama Posyandu</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Tanggal Pengukuran</th>
                                    <th>Berat Badan</th>
                                    <th>Tinggi Badan</th>
                                    <th>BB/U</th>
                                    <th>ZS BB/U</th>
                                    <th>TB/U</th>
                                    <th>ZS TB/U</th>
                                    <th>BB/TB</th>
                                    <th>Naik/Tidak</th>
                                    <th>Lingkar Kepala</th>
                                    <th>PMT</th>
                                    <th>Jumlah Vitamin A</th>
                                    <th>KPSP</th>
                                    <th>KIA</th>
                                    <th>ASI Ekslusif</th>
                                    <th>Kader Pencatat</th>
                                    <th>Daerah</th>
                                    <th>Nama Posyandu</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <th>10/08/2020</th>
                                    <th>14.7</th>
                                    <th>96</th>
                                    <th>Berat Badan Normal</th>
                                    <th>-1.49</th>
                                    <th>Pendek</th>
                                    <th>-2.9</th>
                                    <th>Gizi Baik</th>
                                    <th>Tidak</th>
                                    <th>Lingkar Kepala</th>
                                    <th></th>
                                    <th>1</th>
                                    <th></th>
                                    <th></th>
                                    <th>E6</th>
                                    <th>Jumlah Vitamin A</th>
                                    <th>Jemur</th>
                                    <th>Widodo</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endsection
