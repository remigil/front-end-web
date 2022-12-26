<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <a href="<?= base_url('statistik_nasional') ?>" style="color:#0a0a0a ;" class="fs-6"><i class="fas fa-less-than"></i> Kembali</a>
        </div>
        <div class="col-md-6 text-end align-self-center">
            <a href="http://34.143.227.90:3001/v1/laporan_harian/export_laphar" type="button" button class="btn btn-outline-info btn-lg" style="width: 200px; border-color:#007DD8;">Export Laporan</a>
            <!-- <button type="button" class="btn btn-outline-info float-end" id="btn_export" style="width: 100%;" onclick="ButtonExport()" style="width: 200px; border-color:#007DD8;">Tampilkan</button> -->
            <!-- <a href="http://34.143.227.90:3001/v1/laporan_harian/export_laphar" class="text-center" id="btn_export"><button class="btn btn-outline-info" style="width: 200px; border-color:#007DD8;">Export Laporan</button></a> -->
            <!-- <a href="http://34.143.227.90:3001/v1/laporan_harian/export_laphar" class="text-center"><button class="btn btn-outline-primary" style="width: 200px; border-color:#007DD8;">Export Laporan</button></a> -->
        </div>
    </div>
    <div class="card mt-5 p-1 shadow" style="border-radius:36px !important;">
        <div class="row m-2">
            <div class="col-sm-4 col-md-5 align-self-center">
                <h2>DATA <span style="text-transform:uppercase ; color:#0007D8">BPKB <span style="color:#000;">Nasional</span></span> </h2>
            </div>
            <div class="col-sm-8 col-md-7">
                <div class="row m-2">
                    <div class="col-md-4 col-sm-4 col-xl-4 align-self-center">
                        <div class="card p-1 mt-2 mb-2" style="border-radius: 20px !important; border-color:#D9D9D9">
                            <div class="card-body p-1">
                                <div class="row justify-content-between align-items-center" style="height: 80px;">
                                    <div class="col-md-7">
                                        <h4 class="mb-0 ms-3">Hari Ini</h4>
                                    </div>
                                    <div class="col-md-5 float-end">
                                        <h1 class="text-center mb-0" style="color:#464646; font-size:25px; color:#2e93e6;" id="bpkbThisDay"></h1>
                                        <p class="text-center mb-0">BPKB</p>
                                    </div>
                                    <div class="col-md-12 ms-3">
                                        <div class="row">
                                            <div class="col-md-4 ms-n3 rounded-bottom" style=" width: 100%; background-color:#0007D8; height:40px; border-radius:20px 0 20px 20; ">
                                                <button type="button" class="btn btn-outline-primary text-white fw-bold" style="width:100% ;" data-toggle="modal" data-target="#ModalDay">
                                                    Detail
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xl-4 align-self-center">
                        <div class="card p-1 mt-2 mb-2" style="border-radius: 20px !important; border-color:#D9D9D9">
                            <div class="card-body p-1">
                                <div class="row justify-content-between align-items-center" style="height: 80px;">
                                    <div class="col-md-7">
                                        <h4 class="mb-0 ms-3">Bulan Ini</h4>
                                    </div>
                                    <div class="col-md-5 float-end">
                                        <h1 class="text-center mb-0" style="color:#464646; font-size:25px; color:#2e93e6;" id="bpkbThisMonth"></h1>
                                        <p class="text-center mb-0">BPKB</p>
                                    </div>
                                    <div class="col-md-12 ms-3">
                                        <div class="row">
                                            <div class="col-md-4 ms-n3 rounded-bottom" style=" width: 100%; background-color:#0007D8; height:40px; border-radius:20px 0 20px 20; ">
                                                <button type="button" class="btn btn-outline-primary text-white fw-bold" style="width:100% ;" data-toggle="modal" data-target="#ModalMonth">
                                                    Detail
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xl-4 align-self-center">
                        <div class="card p-1 mt-2 mb-2" style="border-radius: 20px !important; border-color:#D9D9D9">
                            <div class="card-body p-1">
                                <div class="row justify-content-between align-items-center" style="height: 80px;">
                                    <div class="col-md-7">
                                        <h4 class="mb-0 ms-3">Tahun Ini</h4>
                                    </div>
                                    <div class="col-md-5 float-end">
                                        <h1 class="text-center mb-0" style="color:#464646; font-size:25px; color:#2e93e6;" id="bpkbThisYear"></h1>
                                        <p class="text-center mb-0">BPKB</p>
                                    </div>
                                    <div class="col-md-12 ms-3">
                                        <div class="row">
                                            <div class="col-md-4 ms-n3 rounded-bottom" style=" width: 100%; background-color:#0007D8; height:40px; border-radius:20px 0 20px 20; ">
                                                <button type="button" class="btn btn-outline-primary text-white fw-bold" style="width:100% ;" data-toggle="modal" data-target="#ModalYear">
                                                    Detail
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade " id="ModalDay" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background: rgba(0, 0, 0, 0.7);">
    <div class="modal-dialog modal-xl" role="document" style="min-width:40%;">
        <div class="modal-content">
            <div class=" modal-header">
                <h5 class="modal-title" id="modalLabelDay">Detail Buku Kepemilikan Kendaraan Bermotor (BPKB) Tanggal <?= format_indo(date('Y-m-d'))  ?> Seluruh Polda</h5>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button> -->
            </div>
            <div class="modal-body">
                <div style="line-height: 0.8;">
                    <div class="row mb-3">
                        <div class="col-md-9">
                            <label for="waktu" class="form-label text-uppercase text-info">Pilih Periode Waktu</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="waktu" class="form-label text-uppercase">Awal</label>
                                </div>
                                <div class="col-md-4">
                                    <label for="waktu" class="form-label text-uppercase">Akhir</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <input class="form-control form-control-lg" type="date" name="start_date_table" id="start_date_table" value="<?= date('Y-m-d'); ?>">
                                </div>
                                <div class="col-md-4">
                                    <input class="form-control form-control-lg" type="date" name="end_date_table" id="end_date_table" value="<?= date('Y-m-d'); ?>">
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-primary float-end btn-lg" style="width: 100%;" onclick="ButtonFilterOnTable('day')">Tampilkan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered table-hover" id="tableBpkbDay" style="background:white;">
                        <thead>
                            <tr class="text-white" style="background-color: #0007D8;">
                                <th style="text-align: center; vertical-align: middle" scope="col" rowspan="2">No</th>
                                <th style="text-align: center; vertical-align: middle" scope="col" rowspan="2">Polda</th>
                                <th style="text-align: center; vertical-align: middle" scope="col" colspan="2">Bea Balik Nama</th>
                                <th style="text-align: center; vertical-align: middle" scope="col" rowspan="2">Mutasi Masuk</th>
                                <th style="text-align: center; vertical-align: middle" scope="col" rowspan="2">Perubahan Pergantian</th>
                                <th style="text-align: center; vertical-align: middle" scope="col" rowspan="2">Mutasi Keluar</th>
                                <th style="text-align: center; vertical-align: middle" scope="col" rowspan="2">Total</th>
                            </tr>
                            <tr class="text-center" style="background-color:#5150D8; color:#fff;">
                                <th style="text-align: center; vertical-align: middle" scope="col ">1</th>
                                <th style="text-align: center; vertical-align: middle" scope="col ">2</th>
                            </tr>
                        </thead>
                        <tbody id="tbody-bpkbDay">
                        </tbody>
                        <tfoot>
                            <tr class="text-white" style="background-color: #0007D8;">
                                <th style="text-align: center; vertical-align: middle;" colspan="2" scope="col">Total</th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalbbn1Day"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalbbn2Day"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalmmDay"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalppDay"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalmkDay"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalDay"></span></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>

                <!-- <span class="fw-bold fs-5 text-danger"> * Data SIM diUpdate Setiap Bulan</span> -->
            </div>
            <!-- <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             </div> -->
        </div>
    </div>
</div>

<div class="modal fade" id="ModalMonth" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background: rgba(0, 0, 0, 0.7);">
    <div class=" modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabelMonth">Detail Buku Kepemilikan Kendaraan Bermotor (BPKB) Bulan <?= format_indo(date('Y-m'))  ?> Seluruh Polda</h5>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button> -->
            </div>
            <div class="modal-body">
                <div style="line-height: 0.8;">
                    <div class="row mb-3">
                        <div class="col-md-9">
                            <label for="waktu" class="form-label text-uppercase text-info">Pilih Periode Waktu</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="waktu" class="form-label text-uppercase">Awal</label>
                                </div>
                                <div class="col-md-4">
                                    <label for="waktu" class="form-label text-uppercase">Akhir</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <input class="form-control form-control-lg" type="month" name="start_date_table" id="start_date_table_m" value="<?= date('Y-m'); ?>">
                                </div>
                                <div class="col-md-4">
                                    <input class="form-control form-control-lg" type="month" name="end_date_table" id="end_date_table_m" value="<?= date('Y-m'); ?>">
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-primary float-end btn-lg" style="width: 100%;" onclick="ButtonFilterOnTable('month')">Tampilkan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered table-hover" id="tableBpkbMonth" style="background:white;">
                        <thead>
                            <tr class="text-white" style="background-color: #0007D8;">
                                <th style="text-align: center; vertical-align: middle" scope="col" rowspan="2">No</th>
                                <th style="text-align: center; vertical-align: middle" scope="col" rowspan="2">Polda</th>
                                <th style="text-align: center; vertical-align: middle" scope="col" colspan="2">Bea Balik Nama</th>
                                <th style="text-align: center; vertical-align: middle" scope="col" rowspan="2">Mutasi Masuk</th>
                                <th style="text-align: center; vertical-align: middle" scope="col" rowspan="2">Perubahan Pergantian</th>
                                <th style="text-align: center; vertical-align: middle" scope="col" rowspan="2">Mutasi Keluar</th>
                                <th style="text-align: center; vertical-align: middle" scope="col" rowspan="2">Total</th>
                            </tr>
                            <tr class="text-center" style="background-color:#5150D8; color:#fff;">
                                <th style="text-align: center; vertical-align: middle" scope="col ">1</th>
                                <th style="text-align: center; vertical-align: middle" scope="col ">2</th>
                            </tr>
                        </thead>
                        <tbody id="tbody-bpkbMonth">
                        </tbody>
                        <tfoot>
                            <tr class="text-white" style="background-color: #0007D8;">
                                <th style="text-align: center; vertical-align: middle;" colspan="2" scope="col">Total</th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalbbn1Month"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalbbn2Month"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalmmMonth"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalppMonth"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalmkMonth"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalMonth"></span></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <!-- <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             </div> -->
        </div>
    </div>
</div>
<div class="modal  fade" id="ModalYear" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background: rgba(0, 0, 0, 0.7);">
    <div class=" modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabelYear">Detail Buku Kepemilikan Kendaraan Bermotor (BPKB) Tahun <?= format_indo(date('Y')) ?> Seluruh Polda</h5>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button> -->
            </div>
            <div class="modal-body">
                <div style="line-height: 0.8;">
                    <div class="row mb-3">
                        <div class="col-md-9">
                            <label for="waktu" class="form-label text-uppercase text-info">Pilih Periode Waktu</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="waktu" class="form-label text-uppercase">Awal</label>
                                </div>
                                <div class="col-md-4">
                                    <label for="waktu" class="form-label text-uppercase">Akhir</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <input class="form-control form-control-lg" type="number" name="start_date_table" id="start_date_table_y" value="<?= date('Y'); ?>">
                                </div>
                                <div class="col-md-4">
                                    <input class="form-control form-control-lg" type="number" name="end_date_table" id="end_date_table_y" value="<?= date('Y'); ?>">
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-primary float-end btn-lg" style="width: 100%;" onclick="ButtonFilterOnTable('year')">Tampilkan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered table-hover" id="tableBpkbYear" style="background:white;">
                        <thead>
                            <tr class="text-white" style="background-color: #0007D8;">
                                <th style="text-align: center; vertical-align: middle" scope="col" rowspan="2">No</th>
                                <th style="text-align: center; vertical-align: middle" scope="col" rowspan="2">Polda</th>
                                <th style="text-align: center; vertical-align: middle" scope="col" colspan="2">Bea Balik Nama</th>
                                <th style="text-align: center; vertical-align: middle" scope="col" rowspan="2">Mutasi Masuk</th>
                                <th style="text-align: center; vertical-align: middle" scope="col" rowspan="2">Perubahan Pergantian</th>
                                <th style="text-align: center; vertical-align: middle" scope="col" rowspan="2">Mutasi Keluar</th>
                                <th style="text-align: center; vertical-align: middle" scope="col" rowspan="2">Total</th>
                            </tr>
                            <tr class="text-center" style="background-color:#5150D8; color:#fff;">
                                <th style="text-align: center; vertical-align: middle" scope="col ">1</th>
                                <th style="text-align: center; vertical-align: middle" scope="col ">2</th>
                            </tr>
                        </thead>
                        <tbody id="tbody-bpkbYear">
                        </tbody>
                        <tfoot>
                            <tr class="text-white" style="background-color: #0007D8;">
                                <th style="text-align: center; vertical-align: middle;" colspan="2" scope="col">Total</th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalbbn1Year"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalbbn2Year"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalmmYear"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalppYear"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalmkYear"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalYear"></span></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <!-- <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             </div> -->
        </div>
    </div>
</div>


<?php $mobile = detect_mobile();
if ($mobile === true) { ?>
    <div class="filter mb-5" style=" height:125px;">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12 align-self-center">
                    <label for="waktu" class="form-label text-uppercase">Waktu</label>
                </div>

            </div>
            <div style="display: flex;">

                <input class="form-control form-control-lg" type="date" name="start_date" id="start_date">
                <input class="form-control form-control-lg" type="date" name="end_date" id="end_date">

            </div>

            <button type="button" class="btn btn-info float-end btn-sm" style="width: 100%;" onclick="ButtonFilter()">Tampilkan</button>
            <a href="http://34.143.227.90:3001/v1/laporan_harian/export_laphar" type="button" button class="btn btn-outline-info float-end btn-sm mt-2" style="width: 100%; border-color:#007DD8;">Export Laporan</a>


        </div>
    </div>
<?php } else { ?>




<?php } ?>

<!-- <div class="row m-3" style="font-size: 16px;">
    <div class="col-xl-12">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-toggle="pill" data-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Harian</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Bulanan</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-toggle="pill" data-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Tahunan</button>
            </li>
        </ul>


        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row">
                    <div class="col-md-12 mt-5" style="line-height: 0.5;">
                        <h5 style="text-align: center;">Ranking Polda Data BPKB Tertinggi <?= date('d M Y'); ?></h5>
                        <center>

                        </center>
                     </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row">
                    <div class="col-md-12 mt-5" style="line-height: 0.5;">
                        <h5 style="text-align: center;">Ranking Polda Data BPKB Tertinggi <?= date('M Y'); ?></h5>
                        <center>

                        </center>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="row">
                    <div class="col-md-12 mt-5" style="line-height: 0.5;">
                        <h5 style="text-align: center;">Ranking Polda Data Kecelakaan Tertinggi <?= date('Y'); ?></h5>
                        <center>

                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<div class="container-fluid">
    <div class="card">
        <div class="row">
            <div class="filter mt-4" style=" height:125px;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-9">
                            <label for="waktu" class="form-label text-uppercase text-info">Pilih Periode Waktu</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="waktu" class="form-label text-uppercase">Awal</label>
                                </div>
                                <div class="col-md-4">
                                    <label for="waktu" class="form-label text-uppercase">Akhir</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <input class="form-control form-control-lg" type="date" name="start_date" id="start_date" value="<?= date('Y-m-d', strtotime("-6 days")); ?>">
                                </div>
                                <div class="col-md-4">
                                    <input class="form-control form-control-lg" type="date" name="end_date" id="end_date" value="<?= date('Y-m-d'); ?>">
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-primary float-end btn-lg" style="width: 100%;" onclick="ButtonFilter()">Tampilkan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <div id="titleline"></div>
                </div>
                <div class="card-body">
                    <div class="main-chart">
                        <div id="chartdate">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <div id="title"></div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Show data</label>
                                <select class="form-control" id="limit_showData">
                                    <option value="3">3</option>
                                    <option value="5" selected>5</option>
                                    <option value="7">7</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="main-chart">
                        <div id="charta">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<script src="<?php echo base_url(); ?>assets/admin/libs/sweetalert2/sweetalert2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        let filter = 0
        var date = new Date();
        var firstDay = new Date(date.getFullYear(), 0).toLocaleDateString("en-GB").split('/').reverse().join('-');
        var lastDay = new Date(date.getFullYear(), 11, 31).toLocaleDateString("en-GB").split('/').reverse().join('-');
        var yesterday = new Date().toLocaleDateString('en-GB').split('/').reverse().join('-')

        var firstDayMonth = new Date(date.getFullYear(), date.getMonth(), 1).toLocaleDateString("en-GB").split('/').reverse().join('-');
        var lastDayMonth = new Date(date.getFullYear(), date.getMonth() + 1, 0).toLocaleDateString("en-GB").split('/').reverse().join('-');

        date.setDate(date.getDate() - 6);
        var seven_daysAgo = date.toLocaleDateString("en-GB").split('/').reverse().join('-');

        var limit = $('#limit_showData').val();

        $("#overlay").fadeIn(300);
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/statistik_executive/getDetailStatistikBpkb",
            data: {
                filter: filter,
                limit: limit,
                yesterday: yesterday
            },
            dataType: "JSON",
            success: function(result) {
                $("#overlay").fadeOut(300);
                $('#title').html(`<h4 class="card-title mb-0 text-uppercase">${result.title}</h1>`);
                $("#charta").html(`<div id="chart"></div>`);

                let polda_id = result.data.polda_id
                let polda_name = result.data.polda_name
                let polda_baru = result.data.polda_baru
                let polda_perpanjangan = result.data.polda_perpanjangan
                let polda_rubentina = result.data.polda_rubentina
                // Chart Kecelakaan Lalu Lintas

                // chart laka
                var chart = {
                    series: [{
                        name: '<h6>BPKB Baru</h6>',
                        type: 'column',
                        data: polda_baru,
                        color: "#11347A"
                    }, {
                        name: '<h6>BPKB Perpanjang</h6>',
                        type: 'column',
                        data: polda_perpanjangan,
                        color: "#3CA55C"
                    }, {
                        name: '<h6>BPKB Rubentina</h6>',
                        type: 'column',
                        data: polda_rubentina,
                        color: "#E8D42F"
                    }, ],
                    chart: {
                        height: '400',
                        type: 'line',
                        stacked: false,
                        events: {
                            dataPointSelection: (event, chartContext, config) => {
                                // var selectedpolda = pad(config.dataPointIndex);
                                window.location.href = '../../executive/Polda_executive/index/' + polda_id[config.dataPointIndex]
                            }
                        },

                    },
                    tooltip: {
                        fixed: {
                            enabled: true
                        }
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: '40%',
                            endingShape: 'rounded',
                            dataLabels: {
                                position: 'top'
                            }
                        },
                    },
                    dataLabels: {
                        enabled: true,
                        style: {
                            colors: ['#333']
                        },
                        offsetY: -15
                    },

                    stroke: {
                        show: true,
                        width: [1, 1, 4, 4],
                        colors: ['transparent']
                    },
                    xaxis: {
                        categories: polda_name,
                        labels: {
                            show: true,
                            style: {
                                colors: 'red',
                                fontSize: '18px',
                                fontWeight: 400,

                            }
                        },
                        tickPlacement: 'between'
                    },
                    yaxis: [{
                        axisTicks: {
                            show: false,
                        },
                        axisBorder: {
                            show: false,
                            color: '#008FFB'
                        },
                        labels: {
                            style: {
                                colors: '#008FFB',
                            }
                        },


                    }, ],

                };


                var chart = new ApexCharts(document.querySelector("#chart"), chart);
                chart.render();

            }
        })

        topBpkbDay(yesterday, yesterday);
        topBpkbMonth(firstDayMonth, lastDayMonth);
        topBpkbYear(firstDay, lastDay)

        bpkb_daily(yesterday, firstDayMonth, lastDayMonth, firstDay, lastDay)

        BpkblineChart(seven_daysAgo, yesterday)
        jam();
    })


    $('#limit_showData').on('change', function() {
        let filter = 0
        var limit = $('#limit_showData').val();
        var yesterday = new Date().toLocaleDateString('en-GB').split('/').reverse().join('-')
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/statistik_executive/getDetailStatistikBpkb",
            data: {
                filter: filter,
                limit: limit,
                yesterday: yesterday
            },
            dataType: "JSON",
            success: function(result) {
                $("#overlay").fadeOut(300);
                $('#title').html(`<h4 class="card-title mb-0 text-uppercase">${result.title}</h1>`);
                $("#charta").html(`<div id="chart"></div>`);

                let polda_id = result.data.polda_id
                let polda_name = result.data.polda_name
                let polda_baru = result.data.polda_baru
                let polda_perpanjangan = result.data.polda_perpanjangan
                let polda_rubentina = result.data.polda_rubentina
                // Chart Kecelakaan Lalu Lintas

                // chart laka
                var chart = {
                    series: [{
                        name: '<h6>BPKB Baru</h6>',
                        type: 'column',
                        data: polda_baru,
                        color: "#11347A"
                    }, {
                        name: '<h6>BPKB Perpanjangan</h6>',
                        type: 'column',
                        data: polda_perpanjangan,
                        color: "#3CA55C"
                    }, {
                        name: '<h6>BPKB Rubentina</h6>',
                        type: 'column',
                        data: polda_rubentina,
                        color: "#E8D42F"
                    }, ],
                    chart: {
                        height: '400',
                        type: 'line',
                        stacked: false,
                        events: {
                            dataPointSelection: (event, chartContext, config) => {
                                // var selectedpolda = pad(config.dataPointIndex);
                                window.location.href = '../../executive/Polda_executive/index/' + polda_id[config.dataPointIndex]
                            }
                        },

                    },
                    tooltip: {
                        fixed: {
                            enabled: true
                        }
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: '40%',
                            endingShape: 'rounded',
                            dataLabels: {
                                position: 'top'
                            }
                        },
                    },
                    dataLabels: {
                        enabled: true,
                        style: {
                            colors: ['#333']
                        },
                        offsetY: -15
                    },

                    stroke: {
                        show: true,
                        width: [1, 1, 4, 4],
                        colors: ['transparent']
                    },
                    xaxis: {
                        categories: polda_name,
                        labels: {
                            show: true,
                            style: {
                                colors: 'red',
                                fontSize: '18px',
                                fontWeight: 400,

                            }
                        },
                        tickPlacement: 'between'
                    },
                    yaxis: [{
                        axisTicks: {
                            show: false,
                        },
                        axisBorder: {
                            show: false,
                            color: '#008FFB'
                        },
                        labels: {
                            style: {
                                colors: '#008FFB',
                            }
                        },


                    }, ],

                };


                var chart = new ApexCharts(document.querySelector("#chart"), chart);
                chart.render();

            }
        })
    })


    function bpkb_daily(yesterday, firstDayMonth, lastDayMonth, firstDay, lastDay) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/statistik_executive/getBpkbDate",
            dataType: "JSON",
            data: {
                yesterday,
                firstDayMonth,
                lastDayMonth,
                firstDay,
                lastDay
            },
            success: function(result) {
                $("#overlay").fadeOut(300);
                $('#bpkbThisDay').text(result.thisDay)
                $('#bpkbThisMonth').text(result.thisMonth)
                $('#bpkbThisYear').text(result.thisYear)

            }
        })
    }

    function ButtonFilterOnTable(type) {
        let filter = 1;
        let start_date = '';
        let end_date = '';
        if (type === 'day') {
            start_date = $('#start_date_table').val();
            end_date = $('#end_date_table').val()
            topBpkbDay(start_date, end_date);
            $('#modalLabelDay').text(`Detail BPKB Tanggal ${moment(start_date).format('DD MM YYYY')} s.d ${moment(end_date).format('DD MM YYYY')} Seluruh Polda`)
        } else if (type === 'month') {
            start_date = moment($('#start_date_table_m').val()).startOf('month').format('YYYY-MM-DD');
            end_date = moment($('#end_date_table_m').val()).endOf('month').format('YYYY-MM-DD')
            topBpkbMonth(start_date, end_date);
            $('#modalLabelMonth').text(`Detail BPKB Bulan ${moment(start_date).format('MM YYYY')} s.d ${moment(end_date).format('MM YYYY')} Seluruh Polda`)
        } else if (type === 'year') {
            start_date = moment($('#start_date_table_y').val()).startOf('year').format('YYYY-MM-DD');
            end_date = moment($('#end_date_table_y').val()).endOf('year').format('YYYY-MM-DD')
            topBpkbYear(start_date, end_date)
            $('#modalLabelYear').text(`Detail BPKB Tahun ${moment(start_date).format('YYYY')} s.d ${moment(end_date).format('YYYY')} Seluruh Polda`)
        }

    }


    function ButtonFilter() {
        let filter = 1;
        let start_date = $('#start_date').val()
        let end_date = $('#end_date').val()
        var limit = $('#limit_showData').val();
        if ((start_date != '' && end_date == '') || (start_date == '' && end_date != '')) {
            Swal.fire({
                icon: 'error',
                title: 'Waktu mulai dan waktu akhir harus terisi!',
            })
        } else if (start_date > end_date) {
            Swal.fire({
                icon: 'error',
                title: 'Waktu mulai tidak boleh melewati waktu akhir!',
            })
        } else if (start_date == '' && end_date == '') {
            Swal.fire({
                icon: 'error',
                title: 'Waktu mulai dan waktu akhir belum terisi!',
            })
        } else {
            $("#overlay").fadeIn(300);
            $("#chart").remove();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>executive/statistik_executive/getDetailStatistikBpkb",
                data: {
                    filter: filter,
                    start_date: start_date,
                    end_date: end_date,
                    limit: limit
                },
                dataType: "JSON",
                success: function(result) {
                    $("#overlay").fadeOut(300);
                    $('#title').html(`<h4 class="card-title mb-0 text-uppercase">${result.title}</h1>`);
                    $("#charta").html(`<div id="chart"></div>`);
                    // $('#btn_export').attr('href', `http://34.143.227.90:3001/v1/laporan_harian/export_laphar?filter=true&start_date=${start_date}&end_date=${end_date}`)

                    let polda_id = result.data.polda_id
                    let polda_name = result.data.polda_name
                    let polda_baru = result.data.polda_baru
                    let polda_perpanjangan = result.data.polda_perpanjangan
                    let polda_rubentina = result.data.polda_rubentina

                    var chart = {
                        series: [{
                            name: '<h6>BPKB Baru</h6>',
                            type: 'column',
                            data: polda_baru,
                            color: "#11347A"
                        }, {
                            name: '<h6>BPKB Perpanjangan</h6>',
                            type: 'column',
                            data: polda_perpanjangan,
                            color: "#3CA55C"
                        }, {
                            name: '<h6>BPKB Rubentina</h6>',
                            type: 'column',
                            data: polda_rubentina,
                            color: "#E8D42F"
                        }, ],
                        chart: {
                            height: '400',
                            type: 'line',
                            stacked: false,
                            events: {
                                dataPointSelection: (event, chartContext, config) => {
                                    // var selectedpolda = pad(config.dataPointIndex);
                                    window.location.href = '../../executive/Polda_executive/index/' + polda_id[config.dataPointIndex]
                                }
                            },

                        },
                        tooltip: {
                            fixed: {
                                enabled: true
                            }
                        },
                        plotOptions: {
                            bar: {
                                horizontal: false,
                                columnWidth: '40%',
                                endingShape: 'rounded',
                                dataLabels: {
                                    position: 'top'
                                }
                            },
                        },
                        dataLabels: {
                            enabled: true,
                            style: {
                                colors: ['#333']
                            },
                            offsetY: -15
                        },

                        stroke: {
                            show: true,
                            width: [1, 1, 4, 4],
                            colors: ['transparent']
                        },
                        xaxis: {
                            categories: polda_name,
                            labels: {
                                show: true,
                                style: {
                                    colors: ['#f70505'],
                                    fontSize: '18px',
                                    fontWeight: 1000,
                                }
                            },
                            tickPlacement: 'between'
                        },
                        yaxis: [{
                            axisTicks: {
                                show: false,
                            },
                            axisBorder: {
                                show: false,
                                color: '#008FFB'
                            },
                            labels: {
                                style: {
                                    colors: '#008FFB',
                                }
                            },


                        }, ],

                    };


                    var chart = new ApexCharts(document.querySelector("#chart"), chart);
                    chart.render();

                }
            })

            BpkblineChart(start_date, end_date)
        }
    }

    function BpkblineChart(seven_daysAgo, yesterday) {

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/Statistik_executive/getLineBpkb",
            data: {
                start_date: seven_daysAgo,
                end_date: yesterday
            },
            dataType: "JSON",
            success: function(result) {
                $('#titleline').html(`<h4 class="card-title mb-0 text-uppercase">${result.title}</h1>`);
                $("#chartdate").html(`<div id="chart2"></div>`);


                var chart2 = {
                    series: [{
                        name: '<h6>BPKB Baru</h6>',
                        type: 'line',
                        data: result.data.polda_baru,
                        color: "#11347A"
                    }, {
                        name: '<h6>BPKB Perpanjangan</h6>',
                        type: 'line',
                        data: result.data.polda_perpanjangan,
                        color: "#3CA55C"
                    }, {
                        name: '<h6>BPKB Rubentina</h6>',
                        type: 'line',
                        data: result.data.polda_rubentina,
                        color: "#E8D42F"
                    }, ],
                    chart: {
                        height: 400,
                        type: 'line',
                        stacked: false
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: '55%',
                            endingShape: 'rounded',
                            dataLabels: {
                                position: 'top'
                            }
                        },
                    },
                    dataLabels: {
                        enabled: true,
                        style: {
                            colors: ['#333']
                        },
                        offsetY: -15
                    },
                    markers: {
                        size: 4,
                        colors: '#kkk',
                        fillOpacity: 0.9,
                        shape: "circle",
                        radius: 2,
                    },
                    xaxis: {
                        categories: result.data.polda_name,
                        labels: {
                            show: true,
                            style: {
                                colors: ['#f70505'],
                                fontSize: '18px',
                                fontWeight: 400,
                            }
                        },
                        tickPlacement: 'between'
                    }

                };

                var ditgakkum = new ApexCharts(document.querySelector("#chart2"), chart2);
                ditgakkum.render();
            }
        })
    }

    function ButtonExport() {
        let filter = 1;
        let start_date = $('#start_date').val()
        let end_date = $('#end_date').val()
        if (start_date > end_date) {
            Swal.fire({
                icon: 'error',
                title: 'Waktu mulai tidak boleh melewati waktu akhir!',
            })
        } else {
            $("#overlay").fadeIn(300);
            $("#chart").remove();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>executive/statistik_executive/exportDatalakalantas",
                data: {
                    filter: filter,
                    start_date: start_date,
                    end_date: end_date,
                },
                dataType: "JSON",
                success: function(result) {
                    $("#overlay").fadeOut(300);

                    Swal.fire({
                        icon: 'error',
                        title: 'Waktu mulai tidak boleh melewati waktu akhir!',
                    })
                }
            })
        }
    }

    function topBpkbDay(start_date, end_date) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/statistik_executive/getTopBpkb",
            dataType: "JSON",
            data: {
                start_date: start_date,
                end_date: end_date
            },
            success: function(result) {
                $("#overlay").fadeOut(300);
                var table = '';
                let resultbpkb = result.topBpkb;

                for (let i = 0; i < resultbpkb.length; i++) {
                    let x = parseInt(i)
                    let no = x + 1
                    table += `<tr class="text-center"> 
                            <td>  ${no}  </td> 
                            <td>  ${resultbpkb[i].name_polda}  </td> 
                            <td>  ${resultbpkb[i].bbn_1}  </td> 
                            <td>  ${resultbpkb[i].bbn_2}  </td> 
                            <td>  ${resultbpkb[i].mutasi_masuk}  </td> 
                            <td>  ${resultbpkb[i].perubahan_pergantian}  </td> 
                            <td>  ${resultbpkb[i].mutasi_keluar}  </td> 
                            <td>  ${resultbpkb[i].total}  </td> 
                             
                            </tr>`
                }
                $('#tbody-bpkbDay').html(table);
                $('#totalbbn1Day').text(result.bbn_1)
                $('#totalbbn2Day').text(result.bbn_2)
                $('#totalmmDay').text(result.mutasi_masuk)
                $('#totalppDay').text(result.perubahan_pergantian)
                $('#totalmkDay').text(result.mutasi_keluar)
                $('#totalDay').text(result.total)
                <?php $mobile = detect_mobile();
                if ($mobile === true) { ?>

                    $('#tableBpkbDay').DataTable({
                        responsive: true,

                        scrollX: true,

                        sDom: '<"dt-panelmenu clearfix"flr>t<"dt-panelfooter clearfix"ip>',

                        // buttons: ["excel", "csv", "pdf"],
                        processing: true,
                        oLanguage: {
                            sSearch: 'Search:'
                        },
                    });

                <?php } ?>
            }
        })
    }

    function topBpkbMonth(firstDayMonth, lastDayMonth) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/statistik_executive/getBpkbMonth",
            dataType: "JSON",
            data: {
                firstDay: firstDayMonth,
                lastDay: lastDayMonth
            },
            success: function(result) {
                $("#overlay").fadeOut(300);
                var table = '';
                let resultbpkb = result.topBpkb;

                for (let i = 0; i < resultbpkb.length; i++) {
                    let x = parseInt(i)
                    let no = x + 1
                    table += `<tr class="text-center"> 
                            <td>  ${no}  </td> 
                            <td>  ${resultbpkb[i].name_polda}  </td> 
                            <td>  ${resultbpkb[i].bbn_1}  </td> 
                            <td>  ${resultbpkb[i].bbn_2}  </td> 
                            <td>  ${resultbpkb[i].mutasi_masuk}  </td> 
                            <td>  ${resultbpkb[i].perubahan_pergantian}  </td> 
                            <td>  ${resultbpkb[i].mutasi_keluar}  </td> 
                            <td>  ${resultbpkb[i].total}  </td> 
                             
                            </tr>`
                }
                $('#tbody-bpkbMonth').html(table);
                $('#totalbbn1Month').text(result.bbn_1)
                $('#totalbbn2Month').text(result.bbn_2)
                $('#totalmmMonth').text(result.mutasi_masuk)
                $('#totalppMonth').text(result.perubahan_pergantian)
                $('#totalmkMonth').text(result.mutasi_keluar)
                $('#totalMonth').text(result.total)
                <?php $mobile = detect_mobile();
                if ($mobile === true) { ?>

                    $('#tableBpkbMonth').DataTable({
                        responsive: true,

                        scrollX: true,

                        sDom: '<"dt-panelmenu clearfix"flr>t<"dt-panelfooter clearfix"ip>',

                        // buttons: ["excel", "csv", "pdf"],
                        processing: true,
                        oLanguage: {
                            sSearch: 'Search:'
                        },
                    });

                <?php } ?>
            }
        })
    }

    function topBpkbYear(firstDay, lastDay) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/statistik_executive/getBpkbYear",
            dataType: "JSON",
            data: {
                firstDay: firstDay,
                lastDay: lastDay
            },
            success: function(result) {
                $("#overlay").fadeOut(300);
                var table = '';
                let resultbpkb = result.topBpkb;

                for (let i = 0; i < resultbpkb.length; i++) {
                    let x = parseInt(i)
                    let no = x + 1
                    table += `<tr class="text-center"> 
                            <td>  ${no}  </td> 
                            <td>  ${resultbpkb[i].name_polda}  </td> 
                            <td>  ${resultbpkb[i].bbn_1}  </td> 
                            <td>  ${resultbpkb[i].bbn_2}  </td> 
                            <td>  ${resultbpkb[i].mutasi_masuk}  </td> 
                            <td>  ${resultbpkb[i].perubahan_pergantian}  </td> 
                            <td>  ${resultbpkb[i].mutasi_keluar}  </td> 
                            <td>  ${resultbpkb[i].total}  </td> 
                             
                            </tr>`
                }
                $('#tbody-bpkbYear').html(table);
                $('#totalbbn1Year').text(result.bbn_1)
                $('#totalbbn2Year').text(result.bbn_2)
                $('#totalmmYear').text(result.mutasi_masuk)
                $('#totalppYear').text(result.perubahan_pergantian)
                $('#totalmkYear').text(result.mutasi_keluar)
                $('#totalYear').text(result.total)
                <?php $mobile = detect_mobile();
                if ($mobile === true) { ?>

                    $('#tableBpkbYear').DataTable({
                        responsive: true,

                        scrollX: true,

                        sDom: '<"dt-panelmenu clearfix"flr>t<"dt-panelfooter clearfix"ip>',

                        // buttons: ["excel", "csv", "pdf"],
                        processing: true,
                        oLanguage: {
                            sSearch: 'Search:'
                        },
                    });

                <?php } ?>
            }
        })
    }
</script>