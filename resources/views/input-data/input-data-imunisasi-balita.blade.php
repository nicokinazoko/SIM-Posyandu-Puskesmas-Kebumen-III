@extends('master.master')
@section('title', 'Input Imunisasi')
@section('content')
    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Input Data Imunisasi</h6>
        </div>
        <div class="card-body">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Masukan Data Tanggal Imunisasi </h1>
            </div>
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">NIK Balita</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="NIK Balita" disabled="disabled">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Nama Balita</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama Balita"
                        disabled="disabled">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">HB 0 (0 - 24 Jam)</label>
                    <input type="date" class="form-control" id="exampleInputPassword1">
                    <small id="emailHelp" class="form-text text-muted">
                        Diisi dengan format tanggal hari/bulan/tahun
                    </small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">BCG</label>
                    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Nama Balita">
                    <small id="emailHelp" class="form-text text-muted">
                        Diisi dengan format tanggal hari/bulan/tahun
                    </small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Polio</label>
                    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Nama Balita">
                    <small id="emailHelp" class="form-text text-muted">
                        Diisi dengan format tanggal hari/bulan/tahun
                    </small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">DPT-HB-Hib 1</label>
                    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Nama Balita">
                    <small id="emailHelp" class="form-text text-muted">
                        Diisi dengan format tanggal hari/bulan/tahun
                    </small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Polio 2</label>
                    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Nama Balita">
                    <small id="emailHelp" class="form-text text-muted">
                        Diisi dengan format tanggal hari/bulan/tahun
                    </small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">DPT-HB-Hib 2</label>
                    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Nama Balita">
                    <small id="emailHelp" class="form-text text-muted">
                        Diisi dengan format tanggal hari/bulan/tahun
                    </small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Polio 3</label>
                    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Nama Balita">
                    <small id="emailHelp" class="form-text text-muted">
                        Diisi dengan format tanggal hari/bulan/tahun
                    </small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">DPT-HB-Hib 3</label>
                    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Nama Balita">
                    <small id="emailHelp" class="form-text text-muted">
                        Diisi dengan format tanggal hari/bulan/tahun
                    </small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Polio 4</label>
                    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Nama Balita">
                    <small id="emailHelp" class="form-text text-muted">
                        Diisi dengan format tanggal hari/bulan/tahun
                    </small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">IPV</label>
                    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Nama Balita">
                    <small id="emailHelp" class="form-text text-muted">
                        Diisi dengan format tanggal hari/bulan/tahun
                    </small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Campak</label>
                    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Nama Balita">
                    <small id="emailHelp" class="form-text text-muted">
                        Diisi dengan format tanggal hari/bulan/tahun
                    </small>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <hr>
        </div>
    @endsection
