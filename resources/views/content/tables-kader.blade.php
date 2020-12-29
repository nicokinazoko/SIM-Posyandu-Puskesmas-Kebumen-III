@extends('master.master')
@section('title', 'Data Kader')
@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Kader </h1>

    <p class="mb-4">Halaman ini berisi Data Kader yang telah dimasukkan ke dalam sistem
        <a target="_blank" href="https://datatables.net">official
            DataTables documentation</a>.
    </p>

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
                                <th>NIK</th>
                                <th>Nama Balita</th>
                                <th>Jenis Kelamin</th>
                                <th>Tanggal Lahir</th>
                                <th>Nama Orang Tua</th>
                                <th>Desa</th>
                                <th>Posyandu</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>NIK</th>
                                <th>Nama Balita</th>
                                <th>Jenis Kelamin</th>
                                <th>Tanggal Lahir</th>
                                <th>Nama Orang Tua</th>
                                <th>Desa/Kelurahan</th>
                                <th>Posyandu</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <th>3305120211150003</th>
                                <th>AFFAN NUR MAJIB</th>
                                <th>Laki-Laki</th>
                                <th>02/11/2015</th>
                                <th>SIGIT SUSANTO</th>
                                <th>GEMEKSEKTI</th>
                                <th>Sumelang</th>
                                <th>SUMELANG</th>
                                <th>
                                    <a href="#" class="btn btn-danger btn-circle btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </th>
                            </tr>
                            <tr>
                                <th>3305122212150004 </th>
                                <th>ZAYYAN FAQIH RABBANI</th>
                                <th>Laki-Laki</th>
                                <th>22/12/2015</th>
                                <th>SURAHMAN</th>
                                <th>GEMEKSEKTI</th>
                                <th>Sumelang</th>
                                <th>SUMELANG</th>
                                <th>
                                    <a href="#" class="btn btn-danger btn-circle btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </th>
                            </tr>
                            <tr>
                                <th>3305125909150003</th>
                                <th>AQILA RAJENDRA</th>
                                <th>Laki-Laki</th>
                                <th>19/09/2015</th>
                                <th>SUPRIYANTO</th>
                                <th>GEMEKSEKTI</th>
                                <th>Tanuraksan I</th>
                                <th>GEMEKSEKTI</th>
                                <th>
                                    <a href="#" class="btn btn-danger btn-circle btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </th>
                            </tr>
                            <tr>
                                <th>3305126506160005</th>
                                <th>AZIZAH SALSABILA R</th>
                                <th>Perempuan</th>
                                <th>25/06/2016</th>
                                <th>IMRON MUZAKI</th>
                                <th>GEMEKSEKTI</th>
                                <th>Tanuraksan I</th>
                                <th>Gemeksekti</th>
                                <th>
                                    <a href="#" class="btn btn-danger btn-circle btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </th>
                            </tr>
                            <tr>
                                <th>3305121010170002</th>
                                <th>SYARIF ADNAN</th>
                                <th>Laki-Laki</th>
                                <th>10/10/2017</th>
                                <th>ISWANI ULFAH</th>
                                <th>JEMUR</th>
                                <th>WIDODO</th>
                                <th>JEMUR</th>
                                <th>
                                    <a href="#" class="btn btn-danger btn-circle btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </th>
                            </tr>
                            <tr>
                                <th>330512551150002</th>
                                <th>NOVITA ANGGUN A</th>
                                <th>Perempuan</th>
                                <th>15/11/2015</th>
                                <th>NUR BUDIYATI</th>
                                <th>JEMUR</th>
                                <th>WIDODO</th>
                                <th>JEMUR</th>
                                <th>
                                    <a href="#" class="btn btn-danger btn-circle btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
