@extends('master.master')
@section('title', 'Edit Kader')
@section('content')
    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Data Kader</h6>
        </div>
        <div class="card-body">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Masukan Data Kader </h1>
            </div>
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Kader</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Nama Kader">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Tempat Lahir Kader</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Tempat Lahir Kader">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Lahir Kader</label>
                    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Tanggal Lahir Kader">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Alamat Kader</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Alamat Kader">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Rekam Medis Kader</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Rekam Medis Kader">
                </div>
                <div class="form-group ">
                    <label for="inputState">Daerah Kader</label>
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
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <hr>
        </div>
    @endsection
