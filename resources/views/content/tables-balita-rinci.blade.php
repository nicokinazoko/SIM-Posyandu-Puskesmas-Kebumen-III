@extends('master.master')
@section('title', 'Keterangan Balita')


@section('content')
    <a href="{{ route('home') }}">
        < Kembali ke Halaman Utama
    </a>

    <!-- Basic Card Example -->
    <h1 class="h3 mb-2 text-gray-800">Rincian Balita</h1>

    <p class="mb-4">Berikut adalah rincian Balita
        {{-- <a target="_blank" href="https://datatables.net">official
            DataTables documentation</a>. --}}
    </p>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Edit Data</a>
            <br>
            <br>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Rincian Balita</h6>
        </div>
        <div class="card-body">
            <table class="table" width="100%" cellspacing="0">
                <tbody>
                    <tr>
                        <th>NIK</th>
                        <th>3305120211150003</th>
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <th>AFFAN NUR MAJIB</th>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <th>Laki-Laki</th>
                    </tr>
                    <tr>
                        <th>Tanggal Lahir</th>
                        <th>02/11/2015</th>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <th>SUMELANG</th>
                    </tr>
                    <tr>
                        <th>Nama Orang Tua </th>
                        <th>SIGIT SUSANTO</th>
                    </tr>
                    <tr>
                        <th>Provinsi</th>
                        <th>Jawa Tengah</th>
                    </tr>
                    <tr>
                        <th>Kabupaten/Kota </th>
                        <th>Kebumen</th>
                    </tr>
                    <tr>
                        <th>Kecamatan </th>
                        <th>Kebumen</th>
                    </tr>
                    <tr>
                        <th>Puskesmas </th>
                        <th>Kebumen III</th>
                    </tr>
                    <tr>
                        <th>Desa/Kelurahan </th>
                        <th>Gemesekti</th>
                    </tr>
                    <tr>
                        <th>Posyandu</th>
                        <th>Sumelang</th>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <th>Sumelang</th>
                    </tr>
                    <tr>
                        <th>Hasil Pendataan</th>
                        <th>
                            <a href="{{route('table-balita-pendataan')}}">Klik Disini</a>
                        </th>
                    </tr>
                    <tr>
                        <th>Hasil Imunisasi</th>
                        <th>
                            <a href="{{route('table-balita-imunisasi')}}">Klik Disini</a>
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
