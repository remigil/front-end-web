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
    <div class="card mt-5 shadow" style="border-radius:36px !important;">
        <div class="row m-2">
            <div class="col-sm-2 col-md-2 align-self-center">
                <h4>STATISTIK DATA</h4>
                <h4> <span style="text-transform:uppercase ; color:#0007D8">STNK</span> </h4>
                <h4>SELURUH INDONESIA </h4>
            </div>
            <div class="col-sm-10 col-md-10">
                <div class="row m-2">
                    <div class="col-md-4 col-sm-4 col-xl-4 align-self-center">
                        <div class="card mt-2 mb-2" style="border-radius: 20px !important; border-color:#D9D9D9">
                            <div class="card-body">
                                <div class="row justify-content-between align-items-center" style="height: 80px;">
                                    <div class="col-md-7">
                                        <h5 class="mb-0 ms-3">Hari Ini</h5>
                                    </div>
                                    <div class="col-md-5 float-end">
                                        <h1 class="text-center mb-0" style="color:#464646; font-size:20px; color:#0007D8;" id="stnkThisDay"></h1>
                                        <p class="text-center mb-0">STNK</p>
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
                        <div class="card mt-2 mb-2" style="border-radius: 20px !important; border-color:#D9D9D9">
                            <div class="card-body">
                                <div class="row justify-content-between align-items-center" style="height: 80px;">
                                    <div class="col-md-7">
                                        <!-- <h5 class="mb-0 ms-3">Bulan Ini (<?= format_indo(date('m'))  ?>) </h5> -->
                                        <!-- <h5 class="mb-0 ms-3">Bulan Ini <span class="text-danger">(Des)</span></h5> -->
                                        <h5 class="mb-0 ms-3">Bulan Ini <span class="text-danger">(<?= date('M'); ?>)</span></h5>
                                    </div>
                                    <div class="col-md-5 float-end">
                                        <h1 class="text-center mb-0" style="color:#464646; font-size:20px; color:#0007D8;" id="stnkThisMonth"></h1>
                                        <p class="text-center mb-0">STNK</p>
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
                        <div class="card mt-2 mb-2" style="border-radius: 20px !important; border-color:#D9D9D9">
                            <div class="card-body">
                                <div class="row justify-content-between align-items-center" style="height: 80px;">
                                    <div class="col-md-7">
                                        <h5 class="mb-0 ms-3">Tahun Ini</h5>
                                    </div>
                                    <div class="col-md-5 float-end">
                                        <h1 class="text-center mb-0" style="color:#464646; font-size:20px; color:#0007D8;" id="stnkThisYear"></h1>
                                        <p class="text-center mb-0">STNK</p>
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
                <h5 class="modal-title" id="modalLabelDay">Detail Surat Tanda Nomor Kendaraan (STNK) tanggal <?= format_indo(date('Y-m-d'))  ?> Seluruh Polda</h5>
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
                    <table class="table table-bordered table-hover" id="tableStnkDay">
                        <thead>
                            <tr class="text-white" style="background-color: #0007D8;">
                                <th style="text-align: center; vertical-align: middle;" rowspan="3" scope="col">No</th>
                                <th style="text-align: center; vertical-align: middle;" rowspan="3" scope="col">Polda</th>
                                <th style="text-align: center; vertical-align: middle;" rowspan="2" colspan="2" scope="col">Bea Balik Nama</th>
                                <th style="text-align: center; vertical-align: middle;" rowspan="2" colspan="2" scope="col">Perubahan</th>
                                <th style="text-align: center; vertical-align: middle;" rowspan="2" colspan="2" scope="col">Perpanjangan</th>
                                <th style="text-align: center; vertical-align: middle;" colspan="4" scope="col">Mutasi</th>
                                <th style="text-align: center; vertical-align: middle;" rowspan="2" colspan="2" scope="col">Pengesahan</th>
                                <th style="text-align: center; vertical-align: middle;" rowspan="2" colspan="2" scope="col">Samolnas</th>
                                <th style="text-align: center; vertical-align: middle;" rowspan="3" scope="col">Total</th>
                            </tr>
                            <tr class="text-white" style="background-color: #0007D8;">
                                <th style="text-align: center; vertical-align: middle;" scope="col" colspan="2">R2</th>
                                <th style="text-align: center; vertical-align: middle;" scope="col" colspan="2">R4</th>
                            </tr>
                            <tr style="background-color:#5150D8; color:#fff; ">
                                <th style="text-align: center;" scope="col">R2</th>
                                <th style="text-align: center;" scope="col">R4</th>
                                <th style="text-align: center;" scope="col">R2</th>
                                <th style="text-align: center;" scope="col">R4</th>
                                <th style="text-align: center;" scope="col">R2</th>
                                <th style="text-align: center;" scope="col">R4</th>
                                <th style="text-align: center;" scope="col">Masuk</th>
                                <th style="text-align: center;" scope="col">Keluar</th>
                                <th style="text-align: center;" scope="col">Masuk</th>
                                <th style="text-align: center;" scope="col">Keluar</th>
                                <th style="text-align: center;" scope="col">R2</th>
                                <th style="text-align: center;" scope="col">R4</th>
                                <th style="text-align: center;" scope="col">R2</th>
                                <th style="text-align: center;" scope="col">R4</th>
                            </tr>
                        </thead>
                        <tbody id="tbody-stnkDay">
                        </tbody>

                        <tfoot>
                            <tr class="text-white" style="background-color: #0007D8;">
                                <th style="text-align: center; vertical-align: middle;" colspan="2" scope="col">Total</th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalbbnr2Day"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalbbnr4Day"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalprr2Day"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalprr4Day"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalpnr2Day"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalpnr4Day"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalmmr2Day"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalmmr4Day"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalmkr2Day"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalmkr4Day"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalpgr2Day"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalpgr4Day"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalsmr2Day"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalsmr4Day"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalDay"></span></th>
                            </tr>
                        </tfoot>
                    </table>
                    <!-- <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="text-white" style="background-color: #0007D8;">
                                <th style="text-align: center; vertical-align: middle; font-size:20px" colspan="2" scope="col">Bea Balik Nama</th>
                            </tr>
                            <tr style="background-color:#5150D8; color:#fff;">
                                <th style="text-align: center;" scope="col">R2</th>
                                <th style="text-align: center;" scope="col">R4</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align: center;"><span id="daybbnr2"></span></td>
                                <td style="text-align: center;"><span id="daybbnr4"></span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="text-white" style="background-color: #0007D8;">
                                <th style="text-align: center; vertical-align: middle; font-size:20px" colspan="2" scope="col">Perubahan</th>
                            </tr>
                            <tr style="background-color:#5150D8; color:#fff; ">
                                <th style="text-align: center;" scope="col">R2</th>
                                <th style="text-align: center;" scope="col">R4</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align: center;"><span id="dayperubahanr2"></span></td>
                                <td style="text-align: center;"><span id="dayperubahanr4"></span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="text-white" style="background-color: #0007D8;">
                                <th style="text-align: center; vertical-align: middle; font-size:20px" colspan="5" scope="col">Perpanjangan</th>
                            </tr>
                            <tr style="background-color:#5150D8; color:#fff;">
                                <th style="text-align: center;" scope="col">R2</th>
                                <th style="text-align: center;" scope="col">R4</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align: center;"><span id="dayperpanjanganr2"></span></td>
                                <td style="text-align: center;"><span id="dayperpanjanganr4"></span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="text-white" style="background-color: #0007D8;">
                                <th style="text-align: center; vertical-align: middle; font-size:20px" colspan="4" scope="col">Mutasi</th>
                            </tr>
                            <tr class="text-white" style="background-color: #0007D8;">
                                <th style="text-align: center; vertical-align: middle; font-size:15px" colspan="2" scope="col">R2</th>
                                <th style="text-align: center; vertical-align: middle; font-size:15px" colspan="2" scope="col">R4</th>
                            </tr>
                            <tr style="background-color:#5150D8; color:#fff;">
                                <th style="text-align: center;" scope="col">Masuk</th>
                                <th style="text-align: center;" scope="col">Keluar</th>
                                <th style="text-align: center;" scope="col">Masuk</th>
                                <th style="text-align: center;" scope="col">Keluar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align: center;"><span id="daymasukr2"></span></td>
                                <td style="text-align: center;"><span id="daykeluarr2"></span></td>
                                <td style="text-align: center;"><span id="daymasukr4"></span></td>
                                <td style="text-align: center;"><span id="daykeluarr4"></span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="text-white" style="background-color: #0007D8;">
                                <th style="text-align: center; vertical-align: middle; font-size:20px" colspan="2" scope="col">Pengesahan</th>
                            </tr>
                            <tr style="background-color:#5150D8; color:#fff; ">
                                <th style="text-align: center;" scope="col">R2</th>
                                <th style="text-align: center;" scope="col">R4</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align: center;"><span id="daypengesahanr2"></span></td>
                                <td style="text-align: center;"><span id="daypengesahanr4"></span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="text-white" style="background-color: #0007D8;">
                                <th style="text-align: center; vertical-align: middle; font-size:20px" colspan="2" scope="col">Samolnas</th>
                            </tr>
                            <tr style="background-color:#5150D8; color:#fff; ">
                                <th style="text-align: center;" scope="col">R2</th>
                                <th style="text-align: center;" scope="col">R4</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align: center;"><span id="daysamolnasr2"></span></td>
                                <td style="text-align: center;"><span id="daysamolnasr4"></span></td>
                            </tr>
                        </tbody>
                    </table> -->
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
                <h5 class="modal-title" id="modalLabelMonth">Detail Surat Tanda Nomor Kendaraan (STNK) Bulan <?= format_indo(date('Y-m'))  ?> Seluruh Polda</h5>
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
                    <table class="table table-bordered table-hover" id="tableStnkMonth">
                        <thead>
                            <tr class="text-white" style="background-color: #0007D8;">
                                <th style="text-align: center; vertical-align: middle;" rowspan="3" scope="col">No</th>
                                <th style="text-align: center; vertical-align: middle;" rowspan="3" scope="col">Polda</th>
                                <th style="text-align: center; vertical-align: middle;" rowspan="2" colspan="2" scope="col">Bea Balik Nama</th>
                                <th style="text-align: center; vertical-align: middle;" rowspan="2" colspan="2" scope="col">Perubahan</th>
                                <th style="text-align: center; vertical-align: middle;" rowspan="2" colspan="2" scope="col">Perpanjangan</th>
                                <th style="text-align: center; vertical-align: middle;" colspan="4" scope="col">Mutasi</th>
                                <th style="text-align: center; vertical-align: middle;" rowspan="2" colspan="2" scope="col">Pengesahan</th>
                                <th style="text-align: center; vertical-align: middle;" rowspan="2" colspan="2" scope="col">Samolnas</th>
                                <th style="text-align: center; vertical-align: middle;" rowspan="3" scope="col">Total</th>
                            </tr>
                            <tr class="text-white" style="background-color: #0007D8;">
                                <th style="text-align: center; vertical-align: middle;" scope="col" colspan="2">R2</th>
                                <th style="text-align: center; vertical-align: middle;" scope="col" colspan="2">R4</th>
                            </tr>
                            <tr style="background-color:#5150D8; color:#fff; ">
                                <th style="text-align: center;" scope="col">R2</th>
                                <th style="text-align: center;" scope="col">R4</th>
                                <th style="text-align: center;" scope="col">R2</th>
                                <th style="text-align: center;" scope="col">R4</th>
                                <th style="text-align: center;" scope="col">R2</th>
                                <th style="text-align: center;" scope="col">R4</th>
                                <th style="text-align: center;" scope="col">Masuk</th>
                                <th style="text-align: center;" scope="col">Keluar</th>
                                <th style="text-align: center;" scope="col">Masuk</th>
                                <th style="text-align: center;" scope="col">Keluar</th>
                                <th style="text-align: center;" scope="col">R2</th>
                                <th style="text-align: center;" scope="col">R4</th>
                                <th style="text-align: center;" scope="col">R2</th>
                                <th style="text-align: center;" scope="col">R4</th>
                            </tr>
                        </thead>
                        <tbody id="tbody-stnkMonth">
                        </tbody>
                        <tfoot>
                            <tr class="text-white" style="background-color: #0007D8;">
                                <th style="text-align: center; vertical-align: middle;" colspan="2" scope="col">Total</th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalbbnr2Month"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalbbnr4Month"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalprr2Month"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalprr4Month"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalpnr2Month"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalpnr4Month"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalmmr2Month"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalmmr4Month"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalmkr2Month"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalmkr4Month"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalpgr2Month"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalpgr4Month"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalsmr2Month"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalsmr4Month"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalMonth"></span></th>
                            </tr>
                        </tfoot>
                    </table>
                    <!-- <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="text-white" style="background-color: #0007D8;">
                                <th style="text-align: center; vertical-align: middle; font-size:20px" colspan="2" scope="col">Bea Balik Nama</th>
                            </tr>
                            <tr style="background-color:#5150D8; color:#fff;">
                                <th style="text-align: center;" scope="col">R2</th>
                                <th style="text-align: center;" scope="col">R4</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align: center;"><span id="monthbbnr2"></span></td>
                                <td style="text-align: center;"><span id="monthbbnr4"></span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="text-white" style="background-color: #0007D8;">
                                <th style="text-align: center; vertical-align: middle; font-size:20px" colspan="2" scope="col">Perubahan</th>
                            </tr>
                            <tr style="background-color:#5150D8; color:#fff; ">
                                <th style="text-align: center;" scope="col">R2</th>
                                <th style="text-align: center;" scope="col">R4</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align: center;"><span id="monthperubahanr2"></span></td>
                                <td style="text-align: center;"><span id="monthperubahanr4"></span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="text-white" style="background-color: #0007D8;">
                                <th style="text-align: center; vertical-align: middle; font-size:20px" colspan="5" scope="col">Perpanjangan</th>
                            </tr>
                            <tr style="background-color:#5150D8; color:#fff;">
                                <th style="text-align: center;" scope="col">R2</th>
                                <th style="text-align: center;" scope="col">R4</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align: center;"><span id="monthperpanjanganr2"></span></td>
                                <td style="text-align: center;"><span id="monthperpanjanganr4"></span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="text-white" style="background-color: #0007D8;">
                                <th style="text-align: center; vertical-align: middle; font-size:20px" colspan="4" scope="col">Mutasi</th>
                            </tr>
                            <tr class="text-white" style="background-color: #0007D8;">
                                <th style="text-align: center; vertical-align: middle; font-size:15px" colspan="2" scope="col">R2</th>
                                <th style="text-align: center; vertical-align: middle; font-size:15px" colspan="2" scope="col">R4</th>
                            </tr>
                            <tr style="background-color:#5150D8; color:#fff;">
                                <th style="text-align: center;" scope="col">Masuk</th>
                                <th style="text-align: center;" scope="col">Keluar</th>
                                <th style="text-align: center;" scope="col">Masuk</th>
                                <th style="text-align: center;" scope="col">Keluar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align: center;"><span id="monthmasukr2"></span></td>
                                <td style="text-align: center;"><span id="monthkeluarr2"></span></td>
                                <td style="text-align: center;"><span id="monthmasukr4"></span></td>
                                <td style="text-align: center;"><span id="monthkeluarr4"></span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="text-white" style="background-color: #0007D8;">
                                <th style="text-align: center; vertical-align: middle; font-size:20px" colspan="2" scope="col">Pengesahan</th>
                            </tr>
                            <tr style="background-color:#5150D8; color:#fff; ">
                                <th style="text-align: center;" scope="col">R2</th>
                                <th style="text-align: center;" scope="col">R4</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align: center;"><span id="monthpengesahanr2"></span></td>
                                <td style="text-align: center;"><span id="monthpengesahanr4"></span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="text-white" style="background-color: #0007D8;">
                                <th style="text-align: center; vertical-align: middle; font-size:20px" colspan="2" scope="col">Samolnas</th>
                            </tr>
                            <tr style="background-color:#5150D8; color:#fff; ">
                                <th style="text-align: center;" scope="col">R2</th>
                                <th style="text-align: center;" scope="col">R4</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align: center;"><span id="monthsamolnasr2"></span></td>
                                <td style="text-align: center;"><span id="monthsamolnasr4"></span></td>
                            </tr>
                        </tbody>
                    </table> -->
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
                <h5 class="modal-title" id="modalLabelYear">Detail Surat Tanda Nomor Kendaraan (STNK) Tahun <?= format_indo(date('Y')) ?> Seluruh Polda</h5>
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
                    <table class="table table-bordered table-hover" id="tableStnkYear">
                        <thead>
                            <tr class="text-white" style="background-color: #0007D8;">
                                <th style="text-align: center; vertical-align: middle;" rowspan="3" scope="col">No</th>
                                <th style="text-align: center; vertical-align: middle;" rowspan="3" scope="col">Polda</th>
                                <th style="text-align: center; vertical-align: middle;" rowspan="2" colspan="2" scope="col">Bea Balik Nama</th>
                                <th style="text-align: center; vertical-align: middle;" rowspan="2" colspan="2" scope="col">Perubahan</th>
                                <th style="text-align: center; vertical-align: middle;" rowspan="2" colspan="2" scope="col">Perpanjangan</th>
                                <th style="text-align: center; vertical-align: middle;" colspan="4" scope="col">Mutasi</th>
                                <th style="text-align: center; vertical-align: middle;" rowspan="2" colspan="2" scope="col">Pengesahan</th>
                                <th style="text-align: center; vertical-align: middle;" rowspan="2" colspan="2" scope="col">Samolnas</th>
                                <th style="text-align: center; vertical-align: middle;" rowspan="3" scope="col">Total</th>
                            </tr>
                            <tr class="text-white" style="background-color: #0007D8;">
                                <th style="text-align: center; vertical-align: middle;" scope="col" colspan="2">R2</th>
                                <th style="text-align: center; vertical-align: middle;" scope="col" colspan="2">R4</th>
                            </tr>
                            <tr style="background-color:#5150D8; color:#fff; ">
                                <th style="text-align: center;" scope="col">R2</th>
                                <th style="text-align: center;" scope="col">R4</th>
                                <th style="text-align: center;" scope="col">R2</th>
                                <th style="text-align: center;" scope="col">R4</th>
                                <th style="text-align: center;" scope="col">R2</th>
                                <th style="text-align: center;" scope="col">R4</th>
                                <th style="text-align: center;" scope="col">Masuk</th>
                                <th style="text-align: center;" scope="col">Keluar</th>
                                <th style="text-align: center;" scope="col">Masuk</th>
                                <th style="text-align: center;" scope="col">Keluar</th>
                                <th style="text-align: center;" scope="col">R2</th>
                                <th style="text-align: center;" scope="col">R4</th>
                                <th style="text-align: center;" scope="col">R2</th>
                                <th style="text-align: center;" scope="col">R4</th>
                            </tr>
                        </thead>
                        <tbody id="tbody-stnkYear">
                        </tbody>
                        <tfoot>
                            <tr class="text-white" style="background-color: #0007D8;">
                                <th style="text-align: center; vertical-align: middle;" colspan="2" scope="col">Total</th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalbbnr2Year"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalbbnr4Year"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalprr2Year"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalprr4Year"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalpnr2Year"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalpnr4Year"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalmmr2Year"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalmmr4Year"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalmkr2Year"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalmkr4Year"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalpgr2Year"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalpgr4Year"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalsmr2Year"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalsmr4Year"></span></th>
                                <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalYear"></span></th>
                            </tr>
                        </tfoot>
                    </table>
                    <!-- <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="text-white" style="background-color: #0007D8;">
                                <th style="text-align: center; vertical-align: middle; font-size:20px" colspan="2" scope="col">Bea Balik Nama</th>
                            </tr>
                            <tr style="background-color:#5150D8; color:#fff;">
                                <th style="text-align: center;" scope="col">R2</th>
                                <th style="text-align: center;" scope="col">R4</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align: center;"><span id="yearbbnr2"></span></td>
                                <td style="text-align: center;"><span id="yearbbnr4"></span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="text-white" style="background-color: #0007D8;">
                                <th style="text-align: center; vertical-align: middle; font-size:20px" colspan="2" scope="col">Perubahan</th>
                            </tr>
                            <tr style="background-color:#5150D8; color:#fff; ">
                                <th style="text-align: center;" scope="col">R2</th>
                                <th style="text-align: center;" scope="col">R4</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align: center;"><span id="yearperubahanr2"></span></td>
                                <td style="text-align: center;"><span id="yearperubahanr4"></span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="text-white" style="background-color: #0007D8;">
                                <th style="text-align: center; vertical-align: middle; font-size:20px" colspan="5" scope="col">Perpanjangan</th>
                            </tr>
                            <tr style="background-color:#5150D8; color:#fff;">
                                <th style="text-align: center;" scope="col">R2</th>
                                <th style="text-align: center;" scope="col">R4</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align: center;"><span id="yearperpanjanganr2"></span></td>
                                <td style="text-align: center;"><span id="yearperpanjanganr4"></span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="text-white" style="background-color: #0007D8;">
                                <th style="text-align: center; vertical-align: middle; font-size:20px" colspan="4" scope="col">Mutasi</th>
                            </tr>
                            <tr class="text-white" style="background-color: #0007D8;">
                                <th style="text-align: center; vertical-align: middle; font-size:15px" colspan="2" scope="col">R2</th>
                                <th style="text-align: center; vertical-align: middle; font-size:15px" colspan="2" scope="col">R4</th>
                            </tr>
                            <tr style="background-color:#5150D8; color:#fff;">
                                <th style="text-align: center;" scope="col">Masuk</th>
                                <th style="text-align: center;" scope="col">Keluar</th>
                                <th style="text-align: center;" scope="col">Masuk</th>
                                <th style="text-align: center;" scope="col">Keluar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align: center;"><span id="yearmasukr2"></span></td>
                                <td style="text-align: center;"><span id="yearkeluarr2"></span></td>
                                <td style="text-align: center;"><span id="yearmasukr4"></span></td>
                                <td style="text-align: center;"><span id="yearkeluarr4"></span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="text-white" style="background-color: #0007D8;">
                                <th style="text-align: center; vertical-align: middle; font-size:20px" colspan="2" scope="col">Pengesahan</th>
                            </tr>
                            <tr style="background-color:#5150D8; color:#fff; ">
                                <th style="text-align: center;" scope="col">R2</th>
                                <th style="text-align: center;" scope="col">R4</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align: center;"><span id="yearpengesahanr2"></span></td>
                                <td style="text-align: center;"><span id="yearpengesahanr4"></span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="text-white" style="background-color: #0007D8;">
                                <th style="text-align: center; vertical-align: middle; font-size:20px" colspan="2" scope="col">Samolnas</th>
                            </tr>
                            <tr style="background-color:#5150D8; color:#fff; ">
                                <th style="text-align: center;" scope="col">R2</th>
                                <th style="text-align: center;" scope="col">R4</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align: center;"><span id="yearsamolnasr2"></span></td>
                                <td style="text-align: center;"><span id="yearsamolnasr4"></span></td>
                            </tr>
                        </tbody>
                    </table> -->
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
                            <div class="col-md-12 mt-3" style="line-height: 0.5;">
                                <h5>Ranking Polda Data STNK Tertinggi <?= date('d M Y'); ?></h5>
                                <div class="card shadow-sm">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="row">
                            <div class="col-md-12 mt-3" style="line-height: 0.5;">
                                <h5>Ranking Polda Data STNK Tertinggi <?= date('M Y'); ?></h5>
                                <div class="card shadow-sm">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="row">
                            <div class="col-md-12 mt-3" style="line-height: 0.5;">
                                <h5>Ranking Polda Data STNK Tertinggi <?= date('Y'); ?></h5>
                                <div class="card shadow-sm">
                                    
                                </div>
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
                                <label for="exampleFormControlSelect1">Pilih Jumlah Polda</label>
                                <select class="form-control" id="limit_showData">
                                    <option value="3">3 Polda</option>
                                    <option value="5" selected>5 Polda</option>
                                    <option value="7">7 Polda</option>
                                    <option value="10">10 Polda</option>
                                    <option value="34">Seluruh Polda</option>
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
            url: "<?php echo base_url(); ?>executive/statistik_executive/getDetailStatistikStnk",
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
                // let polda_baru = result.data.polda_baru
                // let polda_perpanjangan = result.data.polda_perpanjangan
                // let polda_rubentina = result.data.polda_rubentina
                console.log(result);
                // Chart Kecelakaan Lalu Lintas

                // chart stnk
                var chart = {
                    series: [{
                            name: '<h6>BBN</h6>',
                            type: 'column',
                            data: result.data.polda_bbn,
                            color: "#11347A"
                        }, {
                            name: '<h6>Perubahan</h6>',
                            type: 'column',
                            data: result.data.polda_perubahan,
                            color: "#3CA55C"
                        }, {
                            name: '<h6>Perpanjangan</h6>',
                            type: 'column',
                            data: result.data.polda_perpanjangan,
                            color: "#E8D42F"
                        },
                        {
                            name: '<h6>Mutasi Masuk</h6>',
                            type: 'column',
                            data: result.data.polda_mutasi_masuk,
                            color: "#a85e32"
                        },
                        {
                            name: '<h6>Mutasi Keluar</h6>',
                            type: 'column',
                            data: result.data.polda_mutasi_keluar,
                            color: "#a83281"
                        },
                        {
                            name: '<h6>Pengesahan</h6>',
                            type: 'column',
                            data: result.data.polda_pengesahan,
                            color: "#0febf2"
                        },
                        {
                            name: '<h6>Samolnas</h6>',
                            type: 'column',
                            data: result.data.polda_samolnas,
                            color: "#32a897"
                        }
                    ],
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

        topStnkDay(yesterday, yesterday);
        topStnkMonth(firstDayMonth, lastDayMonth);
        topStnkYear(firstDay, lastDay)

        stnk_daily(yesterday, firstDayMonth, lastDayMonth, firstDay, lastDay)

        StnklineChart(seven_daysAgo, yesterday)
        jam();
    })


    $('#limit_showData').on('change', function() {
        let filter = 0
        var limit = $('#limit_showData').val();
        var yesterday = new Date().toLocaleDateString('en-GB').split('/').reverse().join('-')
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/statistik_executive/getDetailStatistikStnk",
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
                // let polda_baru = result.data.polda_baru
                // let polda_perpanjangan = result.data.polda_perpanjangan
                // let polda_rubentina = result.data.polda_rubentina
                // Chart Kecelakaan Lalu Lintas

                // chart laka
                var chart = {
                    series: [{
                            name: '<h6>BBN</h6>',
                            type: 'column',
                            data: result.data.polda_bbn,
                            color: "#11347A"
                        }, {
                            name: '<h6>Perubahan</h6>',
                            type: 'column',
                            data: result.data.polda_perubahan,
                            color: "#3CA55C"
                        }, {
                            name: '<h6>Perpanjangan</h6>',
                            type: 'column',
                            data: result.data.polda_perpanjangan,
                            color: "#E8D42F"
                        },
                        {
                            name: '<h6>Mutasi Masuk</h6>',
                            type: 'column',
                            data: result.data.polda_mutasi_masuk,
                            color: "#a85e32"
                        },
                        {
                            name: '<h6>Mutasi Keluar</h6>',
                            type: 'column',
                            data: result.data.polda_mutasi_keluar,
                            color: "#a83281"
                        },
                        {
                            name: '<h6>Pengesahan</h6>',
                            type: 'column',
                            data: result.data.polda_pengesahan,
                            color: "#0febf2"
                        },
                        {
                            name: '<h6>Samolnas</h6>',
                            type: 'column',
                            data: result.data.polda_samolnas,
                            color: "#32a897"
                        }
                    ],
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


    function stnk_daily(yesterday, firstDayMonth, lastDayMonth, firstDay, lastDay) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/statistik_executive/getStnkDate",
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
                $('#stnkThisDay').text(result.thisDay)
                $('#stnkThisMonth').text(result.thisMonth)
                $('#stnkThisYear').text(result.thisYear)

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
            topStnkDay(start_date, end_date);
            $('#modalLabelDay').text(`Detail STNK Tanggal ${moment(start_date).format('DD MM YYYY')} s.d ${moment(end_date).format('DD MM YYYY')} Seluruh Polda`)
        } else if (type === 'month') {
            start_date = moment($('#start_date_table_m').val()).startOf('month').format('YYYY-MM-DD');
            end_date = moment($('#end_date_table_m').val()).endOf('month').format('YYYY-MM-DD')
            topStnkMonth(start_date, end_date);
            $('#modalLabelMonth').text(`Detail STNK Bulan ${moment(start_date).format('MM YYYY')} s.d ${moment(end_date).format('MM YYYY')} Seluruh Polda`)
        } else if (type === 'year') {
            start_date = moment($('#start_date_table_y').val()).startOf('year').format('YYYY-MM-DD');
            end_date = moment($('#end_date_table_y').val()).endOf('year').format('YYYY-MM-DD')
            topStnkYear(start_date, end_date)
            $('#modalLabelYear').text(`Detail STNK Tahun ${moment(start_date).format('YYYY')} s.d ${moment(end_date).format('YYYY')} Seluruh Polda`)
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
                url: "<?php echo base_url(); ?>executive/statistik_executive/getDetailStatistikStnk",
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
                    // let polda_baru = result.data.polda_baru
                    // let polda_perpanjangan = result.data.polda_perpanjangan
                    // let polda_rubentina = result.data.polda_rubentina
                    // Chart Kecelakaan Lalu Lintas

                    // chart laka
                    var chart = {
                        series: [{
                                name: '<h6>BBN</h6>',
                                type: 'column',
                                data: result.data.polda_bbn,
                                color: "#11347A"
                            }, {
                                name: '<h6>Perubahan</h6>',
                                type: 'column',
                                data: result.data.polda_perubahan,
                                color: "#3CA55C"
                            }, {
                                name: '<h6>Perpanjangan</h6>',
                                type: 'column',
                                data: result.data.polda_perpanjangan,
                                color: "#E8D42F"
                            },
                            {
                                name: '<h6>Mutasi Masuk</h6>',
                                type: 'column',
                                data: result.data.polda_mutasi_masuk,
                                color: "#a85e32"
                            },
                            {
                                name: '<h6>Mutasi Keluar</h6>',
                                type: 'column',
                                data: result.data.polda_mutasi_keluar,
                                color: "#a83281"
                            },
                            {
                                name: '<h6>Pengesahan</h6>',
                                type: 'column',
                                data: result.data.polda_pengesahan,
                                color: "#0febf2"
                            },
                            {
                                name: '<h6>Samolnas</h6>',
                                type: 'column',
                                data: result.data.polda_samolnas,
                                color: "#32a897"
                            },
                        ],
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

            StnklineChart(start_date, end_date)
        }
    }

    function StnklineChart(seven_daysAgo, yesterday) {

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/Statistik_executive/getLineStnk",
            data: {
                start_date: seven_daysAgo,
                end_date: yesterday
            },
            dataType: "JSON",
            success: function(results) {
                $('#titleline').html(`<h4 class="card-title mb-0 text-uppercase">${results.title}</h1>`);
                $("#chartdate").html(`<div id="chart2"></div>`);

                if (seven_daysAgo == yesterday) {
                    var chart2 = {
                        series: [{
                                name: '<h6>BBN</h6>',
                                type: 'column',
                                data: results.data.polda_bbn,
                                color: "#11347A"
                            }, {
                                name: '<h6>Perubahan</h6>',
                                type: 'column',
                                data: results.data.polda_perubahan,
                                color: "#3CA55C"
                            }, {
                                name: '<h6>Perpanjangan</h6>',
                                type: 'column',
                                data: results.data.polda_perpanjangan,
                                color: "#E8D42F"
                            },
                            {
                                name: '<h6>Mutasi Masuk</h6>',
                                type: 'column',
                                data: results.data.polda_mutasi_masuk,
                                color: "#a85e32"
                            },
                            {
                                name: '<h6>Mutasi Keluar</h6>',
                                type: 'column',
                                data: results.data.polda_mutasi_keluar,
                                color: "#a83281"
                            },
                            {
                                name: '<h6>Pengesahan</h6>',
                                type: 'column',
                                data: results.data.polda_pengesahan,
                                color: "#0febf2"
                            },
                            {
                                name: '<h6>Samolnas</h6>',
                                type: 'column',
                                data: results.data.polda_samolnas,
                                color: "#32a897"
                            }
                        ],
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
                        // markers: {
                        //     size: 4,
                        //     colors: '#kkk',
                        //     fillOpacity: 0.9,
                        //     shape: "circle",
                        //     radius: 2,
                        // },
                        xaxis: {
                            categories: results.data.polda_name,
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
                } else {
                    var chart2 = {
                        series: [{
                                name: '<h6>BBN</h6>',
                                type: 'line',
                                data: results.data.polda_bbn,
                                color: "#11347A"
                            }, {
                                name: '<h6>Perubahan</h6>',
                                type: 'line',
                                data: results.data.polda_perubahan,
                                color: "#3CA55C"
                            }, {
                                name: '<h6>Perpanjangan</h6>',
                                type: 'line',
                                data: results.data.polda_perpanjangan,
                                color: "#E8D42F"
                            },
                            {
                                name: '<h6>Mutasi Masuk</h6>',
                                type: 'line',
                                data: results.data.polda_mutasi_masuk,
                                color: "#a85e32"
                            },
                            {
                                name: '<h6>Mutasi Keluar</h6>',
                                type: 'line',
                                data: results.data.polda_mutasi_keluar,
                                color: "#a83281"
                            },
                            {
                                name: '<h6>Pengesahan</h6>',
                                type: 'line',
                                data: results.data.polda_pengesahan,
                                color: "#0febf2"
                            },
                            {
                                name: '<h6>Samolnas</h6>',
                                type: 'line',
                                data: results.data.polda_samolnas,
                                color: "#32a897"
                            }
                        ],
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
                        // markers: {
                        //     size: 4,
                        //     colors: '#kkk',
                        //     fillOpacity: 0.9,
                        //     shape: "circle",
                        //     radius: 2,
                        // },
                        xaxis: {
                            categories: results.data.polda_name,
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
                }

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

    function topStnkDay(start_date, end_date) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/statistik_executive/getTopStnk",
            dataType: "JSON",
            data: {
                start_date: start_date,
                end_date: end_date
            },
            success: function(result) {
                $("#overlay").fadeOut(300);
                var table = '';
                let resultstnk = result.topStnk;

                for (let i = 0; i < resultstnk.length; i++) {
                    let x = parseInt(i)
                    let no = x + 1
                    table += `<tr class="text-center"> 
                        <td>  ${no}  </td> 
                        <td>  ${resultstnk[i].name_polda}  </td> 
                        <td>  ${new Intl.NumberFormat().format(resultstnk[i].bbn_1_r2)}  </td> 
                        <td>  ${new Intl.NumberFormat().format(resultstnk[i].bbn_1_r4)}  </td> 
                        <td>  ${new Intl.NumberFormat().format(resultstnk[i].perubahan_r2)}  </td> 
                        <td>  ${new Intl.NumberFormat().format(resultstnk[i].perubahan_r4)}  </td> 
                        <td>  ${new Intl.NumberFormat().format(resultstnk[i].perpanjangan_r2)}  </td>  
                        <td>  ${new Intl.NumberFormat().format(resultstnk[i].perpanjangan_r4)}  </td>  
                        <td>  ${new Intl.NumberFormat().format(resultstnk[i].mutasi_masuk_r2)}  </td>  
                        <td>  ${new Intl.NumberFormat().format(resultstnk[i].mutasi_keluar_r2)}  </td>  
                        <td>  ${new Intl.NumberFormat().format(resultstnk[i].mutasi_masuk_r4)}  </td>  
                        <td>  ${new Intl.NumberFormat().format(resultstnk[i].mutasi_keluar_r4)}  </td>  
                        <td>  ${new Intl.NumberFormat().format(resultstnk[i].pengesahan_r2)}  </td>  
                        <td>  ${new Intl.NumberFormat().format(resultstnk[i].pengesahan_r4)}  </td>  
                        <td>  ${new Intl.NumberFormat().format(resultstnk[i].samolnas_r2)}  </td>  
                        <td>  ${new Intl.NumberFormat().format(resultstnk[i].samolnas_r4)}  </td>  
                        <td>  ${new Intl.NumberFormat().format(resultstnk[i].total)}  </td>  
                        </tr>`
                }
                $('#tbody-stnkDay').html(table);
                $('#totalbbnr2Day').text(result.bbn_1_r2)
                $('#totalbbnr4Day').text(result.bbn_1_r4)
                $('#totalprr2Day').text(result.perubahan_r2)
                $('#totalprr4Day').text(result.perubahan_r4)
                $('#totalpnr2Day').text(result.perpanjangan_r2)
                $('#totalpnr4Day').text(result.perpanjangan_r4)
                $('#totalmmr2Day').text(result.mutasi_masuk_r2)
                $('#totalmmr4Day').text(result.mutasi_masuk_r4)
                $('#totalmkr2Day').text(result.mutasi_keluar_r2)
                $('#totalmkr4Day').text(result.mutasi_keluar_r4)
                $('#totalpgr2Day').text(result.pengesahan_r2)
                $('#totalpgr4Day').text(result.pengesahan_r4)
                $('#totalsmr2Day').text(result.samolnas_r2)
                $('#totalsmr4Day').text(result.samolnas_r4)
                $('#totalDay').text(result.total)
                <?php $mobile = detect_mobile();
                if ($mobile === true) { ?>

                    $('#tableStnkDay').DataTable({
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

    function topStnkMonth(firstDayMonth, lastDayMonth) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/statistik_executive/getStnkMonth",
            dataType: "JSON",
            data: {
                firstDay: firstDayMonth,
                lastDay: lastDayMonth
            },
            success: function(result) {
                $("#overlay").fadeOut(300);
                var table = '';
                let resultstnk = result.topStnk;
                for (let i = 0; i < resultstnk.length; i++) {
                    let x = parseInt(i)
                    let no = x + 1
                    table += `<tr class="text-center"> 
                        <td>  ${no}  </td> 
                        <td>  ${resultstnk[i].name_polda}  </td> 
                        <td>  ${new Intl.NumberFormat().format(resultstnk[i].bbn_1_r2)}  </td> 
                        <td>  ${new Intl.NumberFormat().format(resultstnk[i].bbn_1_r4)}  </td> 
                        <td>  ${new Intl.NumberFormat().format(resultstnk[i].perubahan_r2)}  </td> 
                        <td>  ${new Intl.NumberFormat().format(resultstnk[i].perubahan_r4)}  </td> 
                        <td>  ${new Intl.NumberFormat().format(resultstnk[i].perpanjangan_r2)}  </td>  
                        <td>  ${new Intl.NumberFormat().format(resultstnk[i].perpanjangan_r4)}  </td>  
                        <td>  ${new Intl.NumberFormat().format(resultstnk[i].mutasi_masuk_r2)}  </td>  
                        <td>  ${new Intl.NumberFormat().format(resultstnk[i].mutasi_keluar_r2)}  </td>  
                        <td>  ${new Intl.NumberFormat().format(resultstnk[i].mutasi_masuk_r4)}  </td>  
                        <td>  ${new Intl.NumberFormat().format(resultstnk[i].mutasi_keluar_r4)}  </td>  
                        <td>  ${new Intl.NumberFormat().format(resultstnk[i].pengesahan_r2)}  </td>  
                        <td>  ${new Intl.NumberFormat().format(resultstnk[i].pengesahan_r4)}  </td>  
                        <td>  ${new Intl.NumberFormat().format(resultstnk[i].samolnas_r2)}  </td>  
                        <td>  ${new Intl.NumberFormat().format(resultstnk[i].samolnas_r4)}  </td>  
                        <td>  ${new Intl.NumberFormat().format(resultstnk[i].total)}  </td>  
                        </tr>`
                }
                $('#tbody-stnkMonth').html(table);
                $('#totalbbnr2Month').text(result.bbn_1_r2)
                $('#totalbbnr4Month').text(result.bbn_1_r4)
                $('#totalprr2Month').text(result.perubahan_r2)
                $('#totalprr4Month').text(result.perubahan_r4)
                $('#totalpnr2Month').text(result.perpanjangan_r2)
                $('#totalpnr4Month').text(result.perpanjangan_r4)
                $('#totalmmr2Month').text(result.mutasi_masuk_r2)
                $('#totalmmr4Month').text(result.mutasi_masuk_r4)
                $('#totalmkr2Month').text(result.mutasi_keluar_r2)
                $('#totalmkr4Month').text(result.mutasi_keluar_r4)
                $('#totalpgr2Month').text(result.pengesahan_r2)
                $('#totalpgr4Month').text(result.pengesahan_r4)
                $('#totalsmr2Month').text(result.samolnas_r2)
                $('#totalsmr4Month').text(result.samolnas_r4)
                $('#totalMonth').text(result.total)
                <?php $mobile = detect_mobile();
                if ($mobile === true) { ?>

                    $('#tableStnkMonth').DataTable({
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

    function topStnkYear(firstDay, lastDay) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/statistik_executive/getStnkYear",
            dataType: "JSON",
            data: {
                firstDay: firstDay,
                lastDay: lastDay
            },
            success: function(result) {
                $("#overlay").fadeOut(300);
                var table = '';
                let resultstnk = result.topStnk;
                for (let i = 0; i < resultstnk.length; i++) {
                    let x = parseInt(i)
                    let no = x + 1
                    table += `<tr class="text-center"> 
                        <td>  ${no}  </td> 
                        <td>  ${resultstnk[i].name_polda}  </td> 
                        <td>  ${new Intl.NumberFormat().format(resultstnk[i].bbn_1_r2)}  </td> 
                        <td>  ${new Intl.NumberFormat().format(resultstnk[i].bbn_1_r4)}  </td> 
                        <td>  ${new Intl.NumberFormat().format(resultstnk[i].perubahan_r2)}  </td> 
                        <td>  ${new Intl.NumberFormat().format(resultstnk[i].perubahan_r4)}  </td> 
                        <td>  ${new Intl.NumberFormat().format(resultstnk[i].perpanjangan_r2)}  </td>  
                        <td>  ${new Intl.NumberFormat().format(resultstnk[i].perpanjangan_r4)}  </td>  
                        <td>  ${new Intl.NumberFormat().format(resultstnk[i].mutasi_masuk_r2)}  </td>  
                        <td>  ${new Intl.NumberFormat().format(resultstnk[i].mutasi_keluar_r2)}  </td>  
                        <td>  ${new Intl.NumberFormat().format(resultstnk[i].mutasi_masuk_r4)}  </td>  
                        <td>  ${new Intl.NumberFormat().format(resultstnk[i].mutasi_keluar_r4)}  </td>  
                        <td>  ${new Intl.NumberFormat().format(resultstnk[i].pengesahan_r2)}  </td>  
                        <td>  ${new Intl.NumberFormat().format(resultstnk[i].pengesahan_r4)}  </td>  
                        <td>  ${new Intl.NumberFormat().format(resultstnk[i].samolnas_r2)}  </td>  
                        <td>  ${new Intl.NumberFormat().format(resultstnk[i].samolnas_r4)}  </td>  
                        <td>  ${new Intl.NumberFormat().format(resultstnk[i].total)}  </td>  
                        </tr>`
                }
                $('#tbody-stnkYear').html(table);
                $('#totalbbnr2Year').text(result.bbn_1_r2)
                $('#totalbbnr4Year').text(result.bbn_1_r4)
                $('#totalprr2Year').text(result.perubahan_r2)
                $('#totalprr4Year').text(result.perubahan_r4)
                $('#totalpnr2Year').text(result.perpanjangan_r2)
                $('#totalpnr4Year').text(result.perpanjangan_r4)
                $('#totalmmr2Year').text(result.mutasi_masuk_r2)
                $('#totalmmr4Year').text(result.mutasi_masuk_r4)
                $('#totalmkr2Year').text(result.mutasi_keluar_r2)
                $('#totalmkr4Year').text(result.mutasi_keluar_r4)
                $('#totalpgr2Year').text(result.pengesahan_r2)
                $('#totalpgr4Year').text(result.pengesahan_r4)
                $('#totalsmr2Year').text(result.samolnas_r2)
                $('#totalsmr4Year').text(result.samolnas_r4)
                $('#totalYear').text(result.total)
                <?php $mobile = detect_mobile();
                if ($mobile === true) { ?>

                    $('#tableStnkYear').DataTable({
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