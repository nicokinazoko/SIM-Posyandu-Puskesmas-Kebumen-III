@extends('master.master')
@section('title', 'Data Kader')
@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Kader </h1>

    <p class="mb-4">Halaman ini berisi Data Kader yang telah dimasukkan ke dalam sistem
        {{-- <a target="_blank" href="https://datatables.net">official
            DataTables documentation</a>. --}}
    </p>

    <a href="{{route('input-data-kader')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Input Data</a>
    <br>
    <br>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button"
            aria-expanded="true" aria-controls="collapseCardExample">
            <h6 class="m-0 font-weight-bold text-primary">Collapsable Card Example</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="collapseCardExample">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kader</th>
                                <th>Tempat</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>Nama Posyandu</th>
                                <th>Rekam Medis</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama Kader</th>
                                <th>Tempat</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>Nama Posyandu</th>
                                <th>Rekam Medis</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <th>1</th>
                                <th>setiyaningsih</th>
                                <th></th>
                                <th>13/01/1986</th>
                                <th>jemur, 03/01</th>
                                <th>balita widodo</th>
                                <th></th>
                            </tr>
                            <tr>
                                <th>2</th>
                                <th>siti aminah</th>
                                <th></th>
                                <th>20/05/1981</th>
                                <th>jemur, 02/01</th>
                                <th>balita widodo</th>
                                <th></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
