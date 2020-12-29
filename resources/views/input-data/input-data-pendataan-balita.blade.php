@extends('master.master')
@section('title', 'Input Pendataan')
@section('content')

<a href="{{ route('table-balita-pendataan') }}">
    < Kembali ke Halaman Sebelumnya</a>
    <br>
    <br>

    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Input Pendataan Balita</h6>
        </div>
        <div class="card-body">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Masukan Data Pendataan Balita </h1>
            </div>
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">NIK Balita</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="NIK Balita" disabled="disabled">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nama Balita</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama Balita" disabled="disabled">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Pengukuran Balita</label>
                    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Tanggal Lahir Kader">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Berat Badan</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Berat Badan">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Tinggi Badan</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Tinggi Badan">
                </div>
                <div class="form-group ">
                    <label for="inputState">ASI Ekslusif</label>
                    <select id="inputState" class="form-control">
                        {{-- <option selected>Choose...</option>
                        --}}
                        <option> E1</option>
                        <option> E2</option>
                        <option> E3</option>
                        <option> E4</option>
                        <option> E5</option>
                        <option> E6</option>
                    </select>
                    <small id="emailHelp" class="form-text text-muted">Silahkan Pilih

                    </small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Lingkar Kepala</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Lingkar Kepala">
                </div>
                <div class="form-group ">
                    <label for="inputState">PMT Diterima</label>
                    <select id="inputState" class="form-control">
                        {{-- <option selected>Choose...</option>
                        --}}
                        <option>Ya</option>
                        <option>Tidak</option>
                    </select>
                    <small id="emailHelp" class="form-text text-muted">Silahkan Pilih

                    </small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Jumlah Vitamin A</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Jumlah Vitamin A">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">KPSP</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="KPSP">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">KIA</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="KIA">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nama Kader</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama Kader">
                </div>
                <div class="form-group ">
                    <label for="inputState">Daerah Posyandu</label>
                    <select id="inputState" class="form-control">
                        {{-- <option selected>Choose...</option>
                        --}}
                        <option> Kutosari</option>
                        <option> Kebumen</option>
                        <option> Bumirejo</option>
                        <option> Karangsari</option>
                        <option> Gemesekti</option>
                        <option> Jemur</option>
                    </select>
                    <small id="emailHelp" class="form-text text-muted">Silahkan Pilih

                    </small>
                </div>
                <div class="form-group ">
                    <label for="inputState">Nama Posyandu</label>
                    <select id="inputState" class="form-control">
                        {{-- <option selected>Choose...</option>
                        --}}
                        <option> A</option>
                        <option> B</option>
                        <option> C</option>
                        <option> D</option>
                        <option> E</option>
                        <option> F</option>
                    </select>
                    <small id="emailHelp" class="form-text text-muted">Silahkan Pilih

                    </small>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <hr>
        </div>
    @endsection
