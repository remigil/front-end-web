<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <a href="<?= base_url('statistik_nasional') ?>" style="color:#0a0a0a ;" class="fs-6"><i class="fas fa-less-than"></i> Kembali</a>
        </div>
        <div class="col-md-6 text-end align-self-center">
            <a href="http://34.143.227.90:3001/v1/laporan_harian/export_laphar" type="button" button class="btn btn-outline-primary btn-lg" style="width: 200px; border-color:#0007D8;">Export Laporan</a>

        </div>
    </div>

    <div class="card mt-5 p-1 shadow" style="border-radius:36px !important;">
        <div class="row m-2">
            <div class="col-sm-4 col-md-3 align-self-center">
                <h2>DATA <span style="text-transform:uppercase ; color:#0007D8">Turjagwali <span style="color:#000;">Nasional</span></span> </h2>
            </div>
            <div class="col-sm-8 col-md-9">
                <div class="row m-2">
                    <div class="col-md-4 col-sm-4 col-xl-4 align-self-center">
                        <div class="card p-1 mt-2 mb-2" style="border-radius: 20px !important; border-color:#D9D9D9">
                            <div class="card-body p-1">
                                <div class="row justify-content-between align-items-center" style="height: 80px;">
                                    <div class="col-md-7">
                                        <h4 class="mb-0 ms-3">Hari Ini</h4>
                                    </div>
                                    <div class="col-md-5 float-end">
                                        <h1 class="text-center mb-0" style="color:#464646; font-size:25px; color:#0007D8;" id="turjagwaliThisDay"></h1>
                                        <p class="text-center mb-0">Kegiatan</p>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-3 ms-n1">
                                                <span class="fw-bold">TR : <span class="text-danger" style="padding:5px" id="turjagwaliThisDayTR"></span></span>
                                            </div>
                                            <div class="col-md-3 ms-n1">
                                                <span class="fw-bold">PJ : <span class="text-warning" style="padding:5px" id="turjagwaliThisDayPJ"></span></span>
                                            </div>
                                            <div class="col-md-3 ms-n1">
                                                <span class="fw-bold">PW : <span class="text-success" style="padding:5px" id="turjagwaliThisDayPW"></span></span>
                                            </div>
                                            <div class="col-md-3 ms-n1">
                                                <span class="fw-bold">PT : <span class="text-primary" style="padding:5px" id="turjagwaliThisDayPT"></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 ms-3">
                                        <div class="row">
                                            <div class="col-md-4 ms-n3 rounded-bottom" style=" width: 100%; background-color:#0007D8; height:40px; border-radius:20px 0 20px 20; ">
                                                <button type="button" class="btn btn-outline-info text-white fw-bold" style="width:100% ;" data-toggle="modal" data-target="#ModalDay">
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
                                        <h1 class="text-center mb-0" style="color:#464646; font-size:25px; color:#0007D8;" id="turjagwaliThisMonth"></h1>
                                        <p class="text-center mb-0">Kegiatan</p>
                                    </div>
                                    <div class="col-md-12 ">
                                        <div class="row">
                                            <div class="col-md-3 ms-n1">
                                                <span class="fw-bold">TR : <span class="text-danger" style="padding:5px" id="turjagwaliThisMonthTR"></span></span>
                                            </div>
                                            <div class="col-md-3">
                                                <span class="fw-bold">PJ : <span class="text-warning" style="padding:5px" id="turjagwaliThisMonthPJ"></span></span>
                                            </div>
                                            <div class="col-md-3">
                                                <span class="fw-bold">PW : <span class="text-success" style="padding:5px" id="turjagwaliThisMonthPW"></span></span>
                                            </div>
                                            <div class="col-md-3">
                                                <span class="fw-bold">PT : <span class="text-primary" style="padding:5px" id="turjagwaliThisMonthPT"></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 ms-3">
                                        <div class="row">
                                            <div class="col-md-4 ms-n3 rounded-bottom" style=" width: 100%; background-color:#0007D8; height:40px; border-radius:20px 0 20px 20; ">
                                                <button type="button" class="btn btn-outline-info text-white fw-bold" style="width:100% ;" data-toggle="modal" data-target="#ModalMonth">
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
                                        <h1 class="text-center mb-0" style="color:#464646; font-size:25px; color:#0007D8;" id="turjagwaliThisYear"></h1>
                                        <p class="text-center mb-0">Kegiatan</p>
                                    </div>
                                    <div class="col-md-12 ">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <span class="fw-bold">TR : <span class="text-danger" style="padding:5px" id="turjagwaliThisYearTR"></span></span>
                                            </div>
                                            <div class="col-md-3">
                                                <span class="fw-bold">PJ : <span class="text-warning" style="padding:5px" id="turjagwaliThisYearPJ"></span></span>
                                            </div>
                                            <div class="col-md-3">
                                                <span class="fw-bold">PW : <span class="text-success" style="padding:5px" id="turjagwaliThisYearPW"></span></span>
                                            </div>
                                            <div class="col-md-3">
                                                <span class="fw-bold">PT : <span class="text-primary" style="padding:5px" id="turjagwaliThisYearPT"></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 ms-3">
                                        <div class="row">
                                            <div class="col-md-4 ms-n3 rounded-bottom" style=" width: 100%; background-color:#0007D8; height:40px; border-radius:20px 0 20px 20; ">
                                                <button type="button" class="btn btn-outline-info text-white fw-bold" style="width:100% ;" data-toggle="modal" data-target="#ModalYear">
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
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class=" modal-header">
                <h5 class="modal-title" id="modalLabelDay">Detail Turjagwali Tanggal <?= format_indo(date('Y-m-d')) ?> Seluruh Polda</h5>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button> -->
            </div>
            <div class="modal-body">
                <div class="container" style="line-height: 0.8;">
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
                    <table class="table table-bordered table-hover" id="tableLakaDay" style="background: white;">
                        <thead style="background-color:#0007D8; color:#fff;">
                            <tr class="text-center">
                                <th scope="col">No</th>
                                <th scope="col">Polda</th>
                                <th scope="col">Pengaturan</th>
                                <th scope="col">Penjagaan</th>
                                <th scope="col">Pengawalan</th>
                                <th scope="col">Patroli</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody id="tbody-lakaDay">
                        </tbody>
                        <tfoot>
                            <tr class="text-white" style="background-color: #0007D8;">
                                <th style="text-align: center; vertical-align: middle;" colspan="2" scope="col">Total</th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalpengaturanDay"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalpenjagaanDay"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalpengawalanDay"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalpatroliDay"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalDay"></span></th>
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

<div class="modal fade" id="ModalMonth" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background: rgba(0, 0, 0, 0.7);">
    <div class=" modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabelMonth">Detail Turjagwali Bulan <?= format_indo(date('Y-m')) ?> Seluruh Polda</h5>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button> -->
            </div>
            <div class="modal-body">
                <div class="container" style="line-height: 0.8;">
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
                    <table class="table table-bordered table-hover" id="tableLakaMonth" style=" background: white;">
                        <thead style="background-color:#0007D8; color:#fff;">
                            <tr class="text-center">
                                <th scope="col">No</th>
                                <th scope="col">Polda</th>
                                <th scope="col">Pengaturan</th>
                                <th scope="col">Penjagaan</th>
                                <th scope="col">Pengawalan</th>
                                <th scope="col">Patroli</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody id="tbody-lakaMonth">
                        </tbody>
                        <tfoot>
                            <tr class="text-white" style="background-color: #0007D8;">
                                <th style="text-align: center; vertical-align: middle;" colspan="2" scope="col">Total</th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalpengaturanMonth"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalpenjagaanMonth"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalpengawalanMonth"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalpatroliMonth"></span></th>
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
                <h5 class="modal-title" id="modalLabelYear">Detail Turjagwali Tahun <?= format_indo(date('Y')) ?> Seluruh Polda</h5>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button> -->
            </div>
            <div class="modal-body">
                <div class="container" style="line-height: 0.8;">
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
                    <table class="table table-bordered table-hover" id="tableLakaYear" style="background: white;">
                        <thead style="background-color:#0007D8; color:#fff;">
                            <tr class="text-center">
                                <th scope="col">No</th>
                                <th scope="col">Polda</th>
                                <th scope="col">Pengaturan</th>
                                <th scope="col">Penjagaan</th>
                                <th scope="col">Pengawalan</th>
                                <th scope="col">Patroli</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody id="tbody-lakaYear">
                        </tbody>
                        <tfoot>
                            <tr class="text-white" style="background-color: #0007D8;">
                                <th style="text-align: center; vertical-align: middle;" colspan="2" scope="col">Total</th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalpengaturanYear"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalpenjagaanYear"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalpengawalanYear"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalpatroliYear"></span></th>
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
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-4">
                                <input class="form-control form-control-lg" type="date" name="" id="" value="<?= date('Y'); ?>">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control form-control-lg" type="date" name="" id="" value="<?= date('Y'); ?>">
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-primary float-end btn-lg" style="width: 100%;" onclick="ButtonFilter()">Tampilkan</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-5" style="line-height: 0.5;">
                        <h5 style="text-align:center">Ranking Polda Data Turjagwali Tertinggi <?= date('d M Y', strtotime("-1 days")); ?></h5>
                        <center>

                        </center>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-4">
                                <input class="form-control form-control-lg" type="date" name="" id="" value="<?= date('Y'); ?>">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control form-control-lg" type="date" name="" id="" value="<?= date('Y'); ?>">
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-primary float-end btn-lg" style="width: 100%;" onclick="ButtonFilter()">Tampilkan</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-5" style="line-height: 0.5;">
                        <h5 style="text-align: center;">Ranking Polda Data Turjagwali Tertinggi <?= date('M Y'); ?></h5>
                        <center>

                        </center>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-4">
                                <input class="form-control form-control-lg" type="date" name="" id="" value="<?= date('Y'); ?>">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control form-control-lg" type="date" name="" id="" value="<?= date('Y'); ?>">
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-primary float-end btn-lg" style="width: 100%;" onclick="ButtonFilter()">Tampilkan</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-5" style="line-height: 0.5;">
                        <h5 style="text-align: center;">Ranking Polda Data Turjagwali Tertinggi <?= date('Y'); ?></h5>
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


    <!-- <div class="row">
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
        </div> -->




</div>
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
            url: "<?php echo base_url(); ?>executive/statistik_executive/getDetailStatistikTurjawali",
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
                let polda_jumlah = result.data.polda_jumlah
                let polda_pengaturan = result.data.polda_pengaturan
                let polda_penjagaan = result.data.polda_penjagaan
                let polda_pengawalan = result.data.polda_pengawalan
                let polda_patroli = result.data.polda_patroli
                // Chart Kecelakaan Lalu Lintas


                // chart laka
                var chart = {
                    series: [{
                        name: 'Total Turjawali',
                        type: 'column',
                        data: polda_jumlah,
                        color: "#008B8B"
                    }, {
                        name: 'Pengaturan',
                        type: 'column',
                        data: polda_pengaturan,
                        color: "#11347A"
                    }, {
                        name: 'Penjagaan',
                        type: 'column',
                        data: polda_penjagaan,
                        color: "#CB2D3E"
                    }, {
                        name: 'Pengawalan',
                        type: 'column',
                        data: polda_pengawalan,
                        color: "#E8D42F"
                    }, {
                        name: 'Patroli',
                        type: 'column',
                        data: polda_patroli,
                        color: "#3CA55C"

                    }],

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

                    stroke: {
                        show: true,
                        width: [1, 1, 4, 4, 4],
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
                };


                var chart = new ApexCharts(document.querySelector("#chart"), chart);
                chart.render();

            }
        })

        topTurjagwaliDay(yesterday, yesterday);
        topTurjagwaliMonth(firstDayMonth, lastDayMonth)
        topTurjagwaliYear(firstDay, lastDay)

        ditgakkum_daily(yesterday, firstDayMonth, lastDayMonth, firstDay, lastDay)
        TurjagwalilineChart(seven_daysAgo, yesterday)
        jam()

    })

    $('#limit_showData').on('change', function() {
        let filter = 0
        var limit = $('#limit_showData').val();
        var yesterday = new Date().toLocaleDateString('en-GB').split('/').reverse().join('-')
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/statistik_executive/getDetailStatistikTurjawali",
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
                let polda_jumlah = result.data.polda_jumlah
                let polda_pengaturan = result.data.polda_pengaturan
                let polda_penjagaan = result.data.polda_penjagaan
                let polda_pengawalan = result.data.polda_pengawalan
                let polda_patroli = result.data.polda_patroli
                // Chart Kecelakaan Lalu Lintas


                // chart laka
                var chart = {
                    series: [{
                        name: 'Total Turjawali',
                        type: 'column',
                        data: polda_jumlah,
                        color: "#008B8B"
                    }, {
                        name: 'Pengaturan',
                        type: 'column',
                        data: polda_pengaturan,
                        color: "#11347A"
                    }, {
                        name: 'Penjagaan',
                        type: 'column',
                        data: polda_penjagaan,
                        color: "#CB2D3E"
                    }, {
                        name: 'Pengawalan',
                        type: 'column',
                        data: polda_pengawalan,
                        color: "#E8D42F"
                    }, {
                        name: 'Patroli',
                        type: 'column',
                        data: polda_patroli,
                        color: "#3CA55C"

                    }],

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

                    stroke: {
                        show: true,
                        width: [1, 1, 4, 4, 4],
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
                };


                var chart = new ApexCharts(document.querySelector("#chart"), chart);
                chart.render();

            }
        })
    })

    function ditgakkum_daily(yesterday, firstDayMonth, lastDayMonth, firstDay, lastDay) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/statistik_executive/getTurjagwaliDate",
            dataType: "JSON",
            data: {
                yesterday,
                firstDayMonth,
                lastDayMonth,
                firstDay,
                lastDay
            },
            success: function(result) {
                console.log(result);
                $("#overlay").fadeOut(300);
                $('#turjagwaliThisDay').text(result.thisDayTotal)
                $('#turjagwaliThisDayTR').text(result.thisDayTUR)
                $('#turjagwaliThisDayPJ').text(result.thisDayJAG)
                $('#turjagwaliThisDayPW').text(result.thisDayWAL)
                $('#turjagwaliThisDayPT').text(result.thisDayLI)
                $('#turjagwaliThisMonth').text(result.thisMonthTotal)
                $('#turjagwaliThisMonthTR').text(result.thisMonthTUR)
                $('#turjagwaliThisMonthPJ').text(result.thisMonthJAG)
                $('#turjagwaliThisMonthPW').text(result.thisMonthWAL)
                $('#turjagwaliThisMonthPT').text(result.thisMonthLI)
                $('#turjagwaliThisYear').text(result.thisYearTotal)
                $('#turjagwaliThisYearTR').text(result.thisYearTUR)
                $('#turjagwaliThisYearPJ').text(result.thisYearJAG)
                $('#turjagwaliThisYearPW').text(result.thisYearWAL)
                $('#turjagwaliThisYearPT').text(result.thisYearLI)
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
            topTurjagwaliDay(start_date, end_date);
            $('#modalLabelDay').text(`Detail Turjagwali Tanggal ${moment(start_date).format('DD MM YYYY')} s.d ${moment(end_date).format('DD MM YYYY')} Seluruh Polda`)
        } else if (type === 'month') {
            start_date = moment($('#start_date_table_m').val()).startOf('month').format('YYYY-MM-DD');
            end_date = moment($('#end_date_table_m').val()).endOf('month').format('YYYY-MM-DD')
            topTurjagwaliMonth(start_date, end_date);
            $('#modalLabelMonth').text(`Detail Turjagwali Bulan ${moment(start_date).format('MM YYYY')} s.d ${moment(end_date).format('MM YYYY')} Seluruh Polda`)
        } else if (type === 'year') {
            start_date = moment($('#start_date_table_y').val()).startOf('year').format('YYYY-MM-DD');
            end_date = moment($('#end_date_table_y').val()).endOf('year').format('YYYY-MM-DD')
            topTurjagwaliYear(start_date, end_date)
            $('#modalLabelYear').text(`Detail Turjagwali Tahun ${moment(start_date).format('YYYY')} s.d ${moment(end_date).format('YYYY')} Seluruh Polda`)
        }
        //  $.ajax({
        //      url: "<?php echo base_url(); ?>executive/statistik_executive/getDetailStatistikLakalantas",
        //      data: {
        //          filter: filter,
        //          start_date: start_date,
        //          end_date: end_date,
        //          limit: 34
        //      },
        //      type: 'POST',
        //      dataType: 'JSON',
        //      success: function(results) {
        //          console.log(results);
        //          $("#overlay").fadeOut(300);
        //          $('#modalLabelDay').text(`Detail Kecelakaan tanggal ${results.data.start_date} s.d ${results.data.end_date} Seluruh Polda`)
        //          var table = '';
        //          let resultlaka = results.data;
        //          let nf = new Intl.NumberFormat('en-US');

        //          for (let i = 0; i < resultlaka.polda_name.length; i++) {
        //              let x = parseInt(i)
        //              let no = x + 1
        //              table += `<tr class="text-center"> 
        //                  <td>  ${no}  </td> 
        //                  <td>  ${resultlaka.polda_name[i]}  </td> 
        //                  <td>  ${nf.format(resultlaka.polda_meninggal_dunia[i])}  </td> 
        //                  <td>  ${nf.format(resultlaka.polda_luka_berat[i])}  </td> 
        //                  <td>  ${nf.format(resultlaka.polda_luka_ringan[i])}  </td> 
        //                  <td>  ${nf.format(resultlaka.insiden_kecelakaan[i])}  </td>
        //                  <td>  ${nf.format(resultlaka.polda_kerugian_material[i])}  </td> 
        //                  </tr>`
        //          }


        //          if (type == 'day') {
        //              $('#tbody-lakaDay').html(table);
        //              $('#totalmdDay').text(resultlaka.total_meninggal_dunia)
        //              $('#totallbDay').text(resultlaka.total_luka_berat)
        //              $('#totallrDay').text(resultlaka.total_luka_ringan)
        //              $('#totalikDay').text(resultlaka.total_insiden_kecelakaan)
        //              $('#totalkmDay').text(resultlaka.total_kerugian_material)
        //          } else if (type == 'month') {
        //              $('#tbody-lakaMonth').html(table);
        //              $('#totalmdMonth').text(result.meninggal_dunia)
        //              $('#totallbMonth').text(result.luka_berat)
        //              $('#totallrMonth').text(result.luka_ringan)
        //              $('#totalikMonth').text(result.insiden_kecelakaan)
        //              $('#totalkmMonth').text(result.kerugian_material)
        //          }

        //      }
        //  })
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
                url: "<?php echo base_url(); ?>executive/statistik_executive/getDetailStatistikTurjawali",
                data: {
                    filter: filter,
                    start_date: start_date,
                    end_date: end_date,
                    limit: limit
                },
                dataType: "JSON",
                success: function(result) {
                    console.log(result)
                    $("#overlay").fadeOut(300);
                    $('#title').html(`<h4 class="card-title mb-0 text-uppercase">${result.title}</h1>`);
                    $("#charta").html(`<div id="chart"></div>`);
                    // $('#btn_export').attr('href', `http://34.143.227.90:3001/v1/laporan_harian/export_laphar?filter=true&start_date=${start_date}&end_date=${end_date}`)

                    let polda_id = result.data.polda_id
                    let polda_name = result.data.polda_name
                    let polda_jumlah = result.data.polda_jumlah
                    let polda_pengaturan = result.data.polda_pengaturan
                    let polda_penjagaan = result.data.polda_penjagaan
                    let polda_pengawalan = result.data.polda_pengawalan
                    let polda_patroli = result.data.polda_patroli

                    var chart = {
                        series: [{
                            name: 'Total Turjawali',
                            type: 'column',
                            data: polda_jumlah,
                            color: "#008B8B"
                        }, {
                            name: 'Pengaturan',
                            type: 'column',
                            data: polda_pengaturan,
                            color: "#11347A"
                        }, {
                            name: 'Penjagaan',
                            type: 'column',
                            data: polda_penjagaan,
                            color: "#CB2D3E"
                        }, {
                            name: 'Pengawalan',
                            type: 'column',
                            data: polda_pengawalan,
                            color: "#E8D42F"
                        }, {
                            name: 'Patroli',
                            type: 'column',
                            data: polda_patroli,
                            color: "#3CA55C"

                        }],

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

                        stroke: {
                            show: true,
                            width: [1, 1, 4, 4, 4],
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
                    };
                    var chart = new ApexCharts(document.querySelector("#chart"), chart);
                    chart.render();
                }
            })
            TurjagwalilineChart(start_date, end_date)
        }
    }

    function TurjagwalilineChart(seven_daysAgo, yesterday) {

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/Statistik_executive/getLineTurjagwali",
            data: {
                start_date: seven_daysAgo,
                end_date: yesterday
            },
            dataType: "JSON",
            success: function(results) {
                $('#titleline').html(`<h4 class="card-title mb-0 text-uppercase">${results.title}</h1>`);
                $("#chartdate").html(`<div id="chart2"></div>`);
                console.log(results)

                var chart2 = {
                    series: [{
                        name: 'Pengaturan',
                        type: 'line',
                        data: results.data.polda_pengaturan,
                        color: "#11347A"
                    }, {
                        name: 'Penjagaan',
                        type: 'line',
                        data: results.data.polda_penjagaan,
                        color: "#CB2D3E"
                    }, {
                        name: 'Pengawalan',
                        type: 'line',
                        data: results.data.polda_pengawalan,
                        color: "#E8D42F"
                    }, {
                        name: 'Patroli',
                        type: 'line',
                        data: results.data.polda_patroli,
                        color: "#3CA55C"
                    }],
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
                        categories: results.data.polda_name,
                        labels: {
                            show: true,
                            style: {
                                colors: 'red',
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
                url: "<?php echo base_url(); ?>executive/statistik_executive/exportDataturjawali",
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

    function topTurjagwaliDay(start_date, end_date) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/statistik_executive/getTopTurjagwali",
            dataType: "JSON",
            data: {
                start_date: start_date,
                end_date: end_date
            },
            success: function(result) {
                $("#overlay").fadeOut(300);
                var table = '';
                var resultturjagwali = result.topTurjagwali;
                console.log(resultturjagwali);
                let nf = new Intl.NumberFormat('en-US');
                for (let i = 0; i < resultturjagwali.length; i++) {
                    let x = parseInt(i)
                    let no = x + 1
                    table += `<tr class="text-center"> 
                            <td>  ${no}  </td> 
                            <td>  ${resultturjagwali[i].name_polda}  </td> 
                            <td>  ${nf.format(resultturjagwali[i].pengaturan)}  </td> 
                            <td>  ${nf.format(resultturjagwali[i].penjagaan)}  </td> 
                            <td>  ${nf.format(resultturjagwali[i].pengawalan)}  </td> 
                            <td>  ${nf.format(resultturjagwali[i].patroli)}  </td>
                            <td>  ${nf.format(resultturjagwali[i].total)}  </td>
                            </tr>`
                }
                $('#tbody-lakaDay').html(table);
                $('#totalpengaturanDay').text(result.pengaturan)
                $('#totalpenjagaanDay').text(result.penjagaan)
                $('#totalpengawalanDay').text(result.pengawalan)
                $('#totalpatroliDay').text(result.patroli)
                $('#totalDay').text(result.total)
                <?php $mobile = detect_mobile();
                if ($mobile === true) { ?>

                    $('#tableLakaDay').DataTable({
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

    function topTurjagwaliMonth(firstDayMonth, lastDayMonth) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/statistik_executive/getTurjagwaliMonth",
            dataType: "JSON",
            data: {
                firstDay: firstDayMonth,
                lastDay: lastDayMonth
            },
            success: function(result) {
                $("#overlay").fadeOut(300);
                var table = '';
                var resultturjagwali = result.topTurjagwali;
                let nf = new Intl.NumberFormat('en-US');
                for (let i = 0; i < resultturjagwali.length; i++) {
                    let x = parseInt(i)
                    let no = x + 1
                    table += `<tr class="text-center"> 
                            <td>  ${no}  </td> 
                            <td>  ${resultturjagwali[i].name_polda}  </td> 
                            <td>  ${nf.format(resultturjagwali[i].pengaturan)}  </td> 
                            <td>  ${nf.format(resultturjagwali[i].penjagaan)}  </td> 
                            <td>  ${nf.format(resultturjagwali[i].pengawalan)}  </td> 
                            <td>  ${nf.format(resultturjagwali[i].patroli)}  </td>
                            <td>  ${nf.format(resultturjagwali[i].total)}  </td>
                            </tr>`
                }
                $('#tbody-lakaMonth').html(table);
                $('#totalpengaturanMonth').text(result.pengaturan)
                $('#totalpenjagaanMonth').text(result.penjagaan)
                $('#totalpengawalanMonth').text(result.pengawalan)
                $('#totalpatroliMonth').text(result.patroli)
                $('#totalMonth').text(result.total)
                <?php $mobile = detect_mobile();
                if ($mobile === true) { ?>

                    $('#tableLakaMonth').DataTable({
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

    function topTurjagwaliYear(firstDay, lastDay) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/statistik_executive/getTurjagwaliYear",
            dataType: "JSON",
            data: {
                firstDay: firstDay,
                lastDay: lastDay
            },
            success: function(result) {
                $("#overlay").fadeOut(300);
                var table = '';
                var resultturjagwali = result.topTurjagwali;
                let nf = new Intl.NumberFormat('en-US');
                for (let i = 0; i < resultturjagwali.length; i++) {
                    let x = parseInt(i)
                    let no = x + 1
                    table += `<tr class="text-center"> 
                            <td>  ${no}  </td> 
                            <td>  ${resultturjagwali[i].name_polda}  </td> 
                            <td>  ${nf.format(resultturjagwali[i].pengaturan)}  </td> 
                            <td>  ${nf.format(resultturjagwali[i].penjagaan)}  </td> 
                            <td>  ${nf.format(resultturjagwali[i].pengawalan)}  </td> 
                            <td>  ${nf.format(resultturjagwali[i].patroli)}  </td>
                            <td>  ${nf.format(resultturjagwali[i].total)}  </td>
                            </tr>`
                }
                $('#tbody-lakaYear').html(table);
                $('#totalpengaturanYear').text(result.pengaturan)
                $('#totalpenjagaanYear').text(result.penjagaan)
                $('#totalpengawalanYear').text(result.pengawalan)
                $('#totalpatroliYear').text(result.patroli)
                $('#totalYear').text(result.total)
                <?php $mobile = detect_mobile();
                if ($mobile === true) { ?>

                    $('#tableLakaYear').DataTable({
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

    function jam() {
        var a_p = "";
        var e = document.getElementById('jam'),
            d = new Date(),
            h, m, s;
        h = d.getHours();
        m = set(d.getMinutes());
        s = set(d.getSeconds());

        if (h < 12) {
            a_p = "AM";
        } else {
            a_p = "PM";
        }

        e.innerHTML = h + ':' + m + ':' + s + " " + a_p;

        setTimeout('jam()', 1000);
    }

    function set(e) {
        e = e < 10 ? '0' + e : e;
        return e;
    }
</script>