@extends('master.master')
@section('title', 'Edit Balita')
@section('content')
<a href="{{ route('table-balita-rinci') }}">
    < Kembali ke Halaman Sebelumnya
</a>
<br>
<br>
    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Data Balita</h6>
        </div>
        <div class="card-body">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Masukan Data Balita </h1>
            </div>
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">NIK</label>
                    <input type="number" min="1000000000000000" max="9999999999999999" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="NIK Balita">
                    <small id="emailHelp" class="form-text text-muted">
                        Minimal dan Maksimal 16 Angka. Contoh 3301234567891231
                    </small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nama Balita</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama Balita">
                </div>
                <div class="form-group ">
                    <label for="inputState">Jenis Kelamin</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option> Laki-Laki</option>
                        <option> Perempuan</option>
                    </select>
                    <small id="emailHelp" class="form-text text-muted">Silahkan Pilih
                    </small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Tempat Lahir </label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Alamat Balita">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nama Orang Tua Balita</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama Orang Tua Balita">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nomor Orang Tua Balita</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nomor Orang Tua Balita">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <hr>
        </div>
    @endsection
