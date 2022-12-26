 <div class="container-fluid">
     <div class="row">
         <div class="col-md-6">
             <a href="<?= base_url('statistik_nasional') ?>" style="color:#0a0a0a ;" class="fs-6"><i class="fas fa-less-than"></i> Kembali</a>
         </div>
         <div class="col-md-6 text-end align-self-center">
             <a href="http://34.143.227.90:3001/v1/laporan_harian/export_laphar" type="button" button class="btn btn-outline-primary btn-lg" style="width: 200px; border-color:#007DD8;">Export Laporan</a>
             <!-- <button type="button" class="btn btn-outline-primary float-end" id="btn_export" style="width: 100%;" onclick="ButtonExport()" style="width: 200px; border-color:#007DD8;">Tampilkan</button> -->
             <!-- <a href="http://34.143.227.90:3001/v1/laporan_harian/export_laphar" class="text-center" id="btn_export"><button class="btn btn-outline-primary" style="width: 200px; border-color:#007DD8;">Export Laporan</button></a> -->
             <!-- <a href="http://34.143.227.90:3001/v1/laporan_harian/export_laphar" class="text-center"><button class="btn btn-outline-primary" style="width: 200px; border-color:#007DD8;">Export Laporan</button></a> -->
         </div>
     </div>
     <div class="card mt-5 p-1 shadow" style="border-radius:36px !important;">
         <div class="row m-2">
             <div class="col-sm-4 col-md-4 align-self-center">
                 <h2>DATA <span style="text-transform:uppercase ; color:#0007D8">Sim <span style="color:#000;">Nasional</span></span> </h2>
             </div>
             <div class="col-sm-8 col-md-8">
                 <div class="row m-2">
                     <div class="col-md-4 col-sm-4 col-xl-4 align-self-center">
                         <div class="card p-1 mt-2 mb-2" style="border-radius: 20px !important; border-color:#D9D9D9">
                             <div class="card-body p-1">
                                 <div class="row justify-content-between align-items-center" style="height: 80px;">
                                     <div class="col-md-7">
                                         <h4 class="mb-0 ms-3">Hari Ini</h4>
                                     </div>
                                     <div class="col-md-5 float-end">
                                         <h1 class="text-center mb-0" style="color:#464646; font-size:25px; color:#2e93e6;" id="simThisDay"></h1>
                                         <p class="text-center mb-0">Sim</p>
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
                                         <h1 class="text-center mb-0" style="color:#464646; font-size:25px; color:#2e93e6;" id="simThisMonth"></h1>
                                         <p class="text-center mb-0">Sim</p>
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
                                         <h1 class="text-center mb-0" style="color:#464646; font-size:25px; color:#2e93e6;" id="simThisYear"></h1>
                                         <p class="text-center mb-0">Sim</p>
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
     <div class="modal-dialog modal-fullscreen" role="document" style="min-width:70%;">
         <div class="modal-content">
             <div class=" modal-header">
                 <h5 class="modal-title" id="modalLabelDay">Detail Surat Izin Mengemudi (SIM) Tanggal <?= format_indo(date('Y-m-d'))  ?> Seluruh Polda</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
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
                     <table class="table table-bordered table-hover" id="tableSimDay">
                         <thead>
                             <tr class="text-white" style="background-color: #0007D8;">
                                 <th style="text-align: center; vertical-align: middle;" rowspan="2" scope="col">No</th>
                                 <th style="text-align: center; vertical-align: middle;" rowspan="2" scope="col">Polda</th>
                                 <th style="text-align: center; vertical-align: middle;" colspan="6" scope="col">Baru</th>
                                 <th style="text-align: center; vertical-align: middle;" colspan="11" scope="col">Perpanjangan</th>
                                 <th style="text-align: center; vertical-align: middle;" colspan="5" scope="col">Peningkatan</th>
                                 <th style="text-align: center; vertical-align: middle;" rowspan="2" scope="col">Total</th>
                             </tr>
                             <tr style="background-color:#5150D8; color:#fff; ">
                                 <th style="text-align: center;" scope="col">A</th>
                                 <th style="text-align: center;" scope="col">C</th>
                                 <th style="text-align: center;" scope="col">CI</th>
                                 <th style="text-align: center;" scope="col">CII</th>
                                 <th style="text-align: center;" scope="col">D</th>
                                 <th style="text-align: center;" scope="col">DI</th>
                                 <th style="text-align: center;" scope="col">A</th>
                                 <th style="text-align: center;" scope="col">AU</th>
                                 <th style="text-align: center;" scope="col">C</th>
                                 <th style="text-align: center;" scope="col">CI</th>
                                 <th style="text-align: center;" scope="col">CII</th>
                                 <th style="text-align: center;" scope="col">D</th>
                                 <th style="text-align: center;" scope="col">DI</th>
                                 <th style="text-align: center;" scope="col">BI</th>
                                 <th style="text-align: center;" scope="col">BIU</th>
                                 <th style="text-align: center;" scope="col">BII</th>
                                 <th style="text-align: center;" scope="col">BIIU</th>
                                 <th style="text-align: center;" scope="col">AU</th>
                                 <th style="text-align: center;" scope="col">BI</th>
                                 <th style="text-align: center;" scope="col">BIU</th>
                                 <th style="text-align: center;" scope="col">BII</th>
                                 <th style="text-align: center;" scope="col">BIIU</th>
                             </tr>
                         </thead>
                         <tbody id="tbody-simDay">
                         </tbody>
                         <tfoot>
                             <tr class="text-white" style="background-color: #0007D8;">
                                 <th style="text-align: center; vertical-align: middle;" colspan="2" scope="col">Total</th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalbaruaDay"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalbarucDay"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalbaruc1Day"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalbaruc2Day"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalbarudDay"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalbarud1Day"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalperpanjanganaDay"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalperpanjanganauDay"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalperpanjangancDay"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalperpanjanganc1Day"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalperpanjanganc2Day"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalperpanjangandDay"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalperpanjangand1Day"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalperpanjanganb1Day"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalperpanjanganb1uDay"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalperpanjanganb2Day"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalperpanjanganb2uDay"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalpeningkatanauDay"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalpeningkatanb1Day"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalpeningkatanb1uDay"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalpeningkatanb2Day"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalpeningkatanb2uDay"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalDay"></span></th>
                             </tr>
                         </tfoot>
                     </table>
                     <!-- <table class="table table-bordered table-hover">
                         <thead>
                             <tr class="text-white" style="background-color: #0007D8;">
                                 <th style="text-align: center; vertical-align: middle; font-size:20px" colspan="6" scope="col">Baru</th>
                             </tr>
                             <tr style="background-color:#5150D8; color:#fff;">
                                 <th style="text-align: center;" scope="col">A</th>
                                 <th style="text-align: center;" scope="col">C</th>
                                 <th style="text-align: center;" scope="col">CI</th>
                                 <th style="text-align: center;" scope="col">CII</th>
                                 <th style="text-align: center;" scope="col">D</th>
                                 <th style="text-align: center;" scope="col">DI</th>
                             </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <td style="text-align: center;"><span id="daysimbarua"></span></td>
                                 <td style="text-align: center;"><span id="daysimbaruc"></span></td>
                                 <td style="text-align: center;"><span id="daysimbaruc1"></span></td>
                                 <td style="text-align: center;"><span id="daysimbaruc2"></span></td>
                                 <td style="text-align: center;"><span id="daysimbarud"></span></td>
                                 <td style="text-align: center;"><span id="daysimbarud1"></span></td>
                             </tr>
                         </tbody>
                     </table>
                     <table class="table table-bordered table-hover">
                         <thead>
                             <tr class="text-white" style="background-color: #0007D8;">
                                 <th style="text-align: center; vertical-align: middle; font-size:20px" colspan="11" scope="col">Perpanjangan</th>
                             </tr>
                             <tr style="background-color:#5150D8; color:#fff; ">
                                 <th style="text-align: center;" scope="col">A</th>
                                 <th style="text-align: center;" scope="col">AU</th>
                                 <th style="text-align: center;" scope="col">BI</th>
                                 <th style="text-align: center;" scope="col">BIU</th>
                                 <th style="text-align: center;" scope="col">BII</th>
                                 <th style="text-align: center;" scope="col">BIIU</th>
                                 <th style="text-align: center;" scope="col">C</th>
                                 <th style="text-align: center;" scope="col">CI</th>
                                 <th style="text-align: center;" scope="col">CII</th>
                                 <th style="text-align: center;" scope="col">D</th>
                                 <th style="text-align: center;" scope="col">DI</th>
                             </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <td style="text-align: center;"><span id="daysimperpanjangana"></span></td>
                                 <td style="text-align: center;"><span id="daysimperpanjanganau"></span></td>
                                 <td style="text-align: center;"><span id="daysimperpanjanganb1"></span></td>
                                 <td style="text-align: center;"><span id="daysimperpanjanganb1u"></span></td>
                                 <td style="text-align: center;"><span id="daysimperpanjanganb2"></span></td>
                                 <td style="text-align: center;"><span id="daysimperpanjanganb2u"></span></td>
                                 <td style="text-align: center;"><span id="daysimperpanjanganc"></span></td>
                                 <td style="text-align: center;"><span id="daysimperpanjanganc1"></span></td>
                                 <td style="text-align: center;"><span id="daysimperpanjanganc2"></span></td>
                                 <td style="text-align: center;"><span id="daysimperpanjangand"></span></td>
                                 <td style="text-align: center;"><span id="daysimperpanjangand1"></span></td>
                             </tr>
                         </tbody>
                     </table>
                     <table class="table table-bordered table-hover">
                         <thead>
                             <tr class="text-white" style="background-color: #0007D8;">
                                 <th style="text-align: center; vertical-align: middle; font-size:20px" colspan="5" scope="col">Peningkatan</th>
                             </tr>
                             <tr style="background-color:#5150D8; color:#fff;">
                                 <th style="text-align: center;" scope="col">AU</th>
                                 <th style="text-align: center;" scope="col">BI</th>
                                 <th style="text-align: center;" scope="col">BIU</th>
                                 <th style="text-align: center;" scope="col">BII</th>
                                 <th style="text-align: center;" scope="col">BIIU</th>
                             </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <td style="text-align: center;"><span id="daysimpeningkatanau"></span></td>
                                 <td style="text-align: center;"><span id="daysimpeningkatanb1"></span></td>
                                 <td style="text-align: center;"><span id="daysimpeningkatanb1u"></span></td>
                                 <td style="text-align: center;"><span id="daysimpeningkatanb2"></span></td>
                                 <td style="text-align: center;"><span id="daysimpeningkatanb2u"></span></td>
                             </tr>
                         </tbody>
                     </table> -->
                 </div>

                 <span class="fw-bold fs-5 text-danger"> * Data SIM diUpdate Setiap Bulan</span>
             </div>
             <!-- <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             </div> -->
         </div>
     </div>
 </div>

 <div class="modal fade" id="ModalMonth" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background: rgba(0, 0, 0, 0.7);">
     <div class=" modal-dialog modal-fullscreen" role="document" style="min-width:70%">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="modalLabelMonth">Detail Surat Izin Mengemudi (SIM) Bulan <?= format_indo(date('Y-m'))  ?> Seluruh Polda</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
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
                     <table class="table table-bordered table-hover" id="tableSimMonth">
                         <thead>
                             <tr class="text-white" style="background-color: #0007D8;">
                                 <th style="text-align: center; vertical-align: middle;" rowspan="2" scope="col">No</th>
                                 <th style="text-align: center; vertical-align: middle;" rowspan="2" scope="col">Polda</th>
                                 <th style="text-align: center; vertical-align: middle;" colspan="6" scope="col">Baru</th>
                                 <th style="text-align: center; vertical-align: middle;" colspan="11" scope="col">Perpanjangan</th>
                                 <th style="text-align: center; vertical-align: middle;" colspan="5" scope="col">Peningkatan</th>
                                 <th style="text-align: center; vertical-align: middle;" rowspan="2" scope="col">Total</th>
                             </tr>
                             <tr style="background-color:#5150D8; color:#fff; ">
                                 <th style="text-align: center;" scope="col">A</th>
                                 <th style="text-align: center;" scope="col">C</th>
                                 <th style="text-align: center;" scope="col">CI</th>
                                 <th style="text-align: center;" scope="col">CII</th>
                                 <th style="text-align: center;" scope="col">D</th>
                                 <th style="text-align: center;" scope="col">DI</th>

                                 <th style="text-align: center;" scope="col">A</th>
                                 <th style="text-align: center;" scope="col">AU</th>
                                 <th style="text-align: center;" scope="col">C</th>
                                 <th style="text-align: center;" scope="col">CI</th>
                                 <th style="text-align: center;" scope="col">CII</th>
                                 <th style="text-align: center;" scope="col">D</th>
                                 <th style="text-align: center;" scope="col">DI</th>
                                 <th style="text-align: center;" scope="col">BI</th>
                                 <th style="text-align: center;" scope="col">BIU</th>
                                 <th style="text-align: center;" scope="col">BII</th>
                                 <th style="text-align: center;" scope="col">BIIU</th>

                                 <th style="text-align: center;" scope="col">AU</th>
                                 <th style="text-align: center;" scope="col">BI</th>
                                 <th style="text-align: center;" scope="col">BIU</th>
                                 <th style="text-align: center;" scope="col">BII</th>
                                 <th style="text-align: center;" scope="col">BIIU</th>
                             </tr>
                         </thead>
                         <tbody id="tbody-simMonth">
                         </tbody>
                         <tfoot>
                             <tr class="text-white" style="background-color: #0007D8;">
                                 <th style="text-align: center; vertical-align: middle;" colspan="2" scope="col">Total</th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalbaruaMonth"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalbarucMonth"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalbaruc1Month"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalbaruc2Month"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalbarudMonth"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalbarud1Month"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalperpanjanganaMonth"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalperpanjanganauMonth"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalperpanjangancMonth"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalperpanjanganc1Month"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalperpanjanganc2Month"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalperpanjangandMonth"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalperpanjangand1Month"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalperpanjanganb1Month"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalperpanjanganb1uMonth"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalperpanjanganb2Month"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalperpanjanganb2uMonth"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalpeningkatanauMonth"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalpeningkatanb1Month"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalpeningkatanb1uMonth"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalpeningkatanb2Month"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalpeningkatanb2uMonth"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalMonth"></span></th>
                             </tr>
                         </tfoot>
                     </table>
                     <!-- <table class="table table-bordered table-hover">
                         <thead>
                             <tr class="text-white" style="background-color: #0007D8;">
                                 <th style="text-align: center; vertical-align: middle; font-size:20px" colspan="6" scope="col">Baru</th>
                             </tr>
                             <tr style="background-color:#5150D8; color:#fff;">
                                 <th style="text-align: center;" scope="col">A</th>
                                 <th style="text-align: center;" scope="col">C</th>
                                 <th style="text-align: center;" scope="col">CI</th>
                                 <th style="text-align: center;" scope="col">CII</th>
                                 <th style="text-align: center;" scope="col">D</th>
                                 <th style="text-align: center;" scope="col">DI</th>
                             </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <td style="text-align: center;"><span id="monthsimbarua"></span></td>
                                 <td style="text-align: center;"><span id="monthsimbaruc"></span></td>
                                 <td style="text-align: center;"><span id="monthsimbaruc1"></span></td>
                                 <td style="text-align: center;"><span id="monthsimbaruc2"></span></td>
                                 <td style="text-align: center;"><span id="monthsimbarud"></span></td>
                                 <td style="text-align: center;"><span id="monthsimbarud1"></span></td>
                             </tr>
                         </tbody>
                     </table>
                     <table class="table table-bordered table-hover">
                         <thead>
                             <tr class="text-white" style="background-color: #0007D8;">
                                 <th style="text-align: center; vertical-align: middle; font-size:20px" colspan="11" scope="col">Perpanjangan</th>
                             </tr>
                             <tr style="background-color:#5150D8; color:#fff; ">
                                 <th style="text-align: center;" scope="col">A</th>
                                 <th style="text-align: center;" scope="col">AU</th>
                                 <th style="text-align: center;" scope="col">BI</th>
                                 <th style="text-align: center;" scope="col">BIU</th>
                                 <th style="text-align: center;" scope="col">BII</th>
                                 <th style="text-align: center;" scope="col">BIIU</th>
                                 <th style="text-align: center;" scope="col">C</th>
                                 <th style="text-align: center;" scope="col">CI</th>
                                 <th style="text-align: center;" scope="col">CII</th>
                                 <th style="text-align: center;" scope="col">D</th>
                                 <th style="text-align: center;" scope="col">DI</th>
                             </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <td style="text-align: center;"><span id="monthsimperpanjangana"></span></td>
                                 <td style="text-align: center;"><span id="monthsimperpanjanganau"></span></td>
                                 <td style="text-align: center;"><span id="monthsimperpanjanganb1"></span></td>
                                 <td style="text-align: center;"><span id="monthsimperpanjanganb1u"></span></td>
                                 <td style="text-align: center;"><span id="monthsimperpanjanganb2"></span></td>
                                 <td style="text-align: center;"><span id="monthsimperpanjanganb2u"></span></td>
                                 <td style="text-align: center;"><span id="monthsimperpanjanganc"></span></td>
                                 <td style="text-align: center;"><span id="monthsimperpanjanganc1"></span></td>
                                 <td style="text-align: center;"><span id="monthsimperpanjanganc2"></span></td>
                                 <td style="text-align: center;"><span id="monthsimperpanjangand"></span></td>
                                 <td style="text-align: center;"><span id="monthsimperpanjangand1"></span></td>
                             </tr>
                         </tbody>
                     </table>
                     <table class="table table-bordered table-hover">
                         <thead>
                             <tr class="text-white" style="background-color: #0007D8;">
                                 <th style="text-align: center; vertical-align: middle; font-size:20px" colspan="5" scope="col">Peningkatan</th>
                             </tr>
                             <tr style="background-color:#5150D8; color:#fff;">
                                 <th style="text-align: center;" scope="col">AU</th>
                                 <th style="text-align: center;" scope="col">BI</th>
                                 <th style="text-align: center;" scope="col">BIU</th>
                                 <th style="text-align: center;" scope="col">BII</th>
                                 <th style="text-align: center;" scope="col">BIIU</th>
                             </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <td style="text-align: center;"><span id="monthsimpeningkatanau"></span></td>
                                 <td style="text-align: center;"><span id="monthsimpeningkatanb1"></span></td>
                                 <td style="text-align: center;"><span id="monthsimpeningkatanb1u"></span></td>
                                 <td style="text-align: center;"><span id="monthsimpeningkatanb2"></span></td>
                                 <td style="text-align: center;"><span id="monthsimpeningkatanb2u"></span></td>
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
     <div class=" modal-dialog modal-fullscreen" role="document" style="min-width:70%">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="modalLabelYear">Detail Surat Izin Mengemudi (SIM) Tahun <?= format_indo(date('Y')) ?> Seluruh Polda</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
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
                     <table class="table table-bordered table-hover" id="tableSimYear">
                         <thead>
                             <tr class="text-white" style="background-color: #0007D8;">
                                 <th style="text-align: center; vertical-align: middle;" rowspan="2" scope="col">No</th>
                                 <th style="text-align: center; vertical-align: middle;" rowspan="2" scope="col">Polda</th>
                                 <th style="text-align: center; vertical-align: middle;" colspan="6" scope="col">Baru</th>
                                 <th style="text-align: center; vertical-align: middle;" colspan="11" scope="col">Perpanjangan</th>
                                 <th style="text-align: center; vertical-align: middle;" colspan="5" scope="col">Peningkatan</th>
                                 <th style="text-align: center; vertical-align: middle;" rowspan="2" scope="col">Total</th>
                             </tr>
                             <tr style="background-color:#5150D8; color:#fff;">
                                 <th style="text-align: center;" scope="col">A</th>
                                 <th style="text-align: center;" scope="col">C</th>
                                 <th style="text-align: center;" scope="col">CI</th>
                                 <th style="text-align: center;" scope="col">CII</th>
                                 <th style="text-align: center;" scope="col">D</th>
                                 <th style="text-align: center;" scope="col">DI</th>
                                 <th style="text-align: center;" scope="col">A</th>
                                 <th style="text-align: center;" scope="col">AU</th>
                                 <th style="text-align: center;" scope="col">C</th>
                                 <th style="text-align: center;" scope="col">CI</th>
                                 <th style="text-align: center;" scope="col">CII</th>
                                 <th style="text-align: center;" scope="col">D</th>
                                 <th style="text-align: center;" scope="col">DI</th>
                                 <th style="text-align: center;" scope="col">BI</th>
                                 <th style="text-align: center;" scope="col">BIU</th>
                                 <th style="text-align: center;" scope="col">BII</th>
                                 <th style="text-align: center;" scope="col">BIIU</th>
                                 <th style="text-align: center;" scope="col">AU</th>
                                 <th style="text-align: center;" scope="col">BI</th>
                                 <th style="text-align: center;" scope="col">BIU</th>
                                 <th style="text-align: center;" scope="col">BII</th>
                                 <th style="text-align: center;" scope="col">BIIU</th>
                             </tr>
                         </thead>
                         <tbody id="tbody-simYear">
                         </tbody>
                         <tfoot>
                             <tr class="text-white" style="background-color: #0007D8;">
                                 <th style="text-align: center; vertical-align: middle;" colspan="2" scope="col">Total</th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalbaruaYear"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalbarucYear"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalbaruc1Year"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalbaruc2Year"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalbarudYear"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalbarud1Year"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalperpanjanganaYear"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalperpanjanganauYear"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalperpanjangancYear"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalperpanjanganc1Year"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalperpanjanganc2Year"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalperpanjangandYear"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalperpanjangand1Year"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalperpanjanganb1Year"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalperpanjanganb1uYear"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalperpanjanganb2Year"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalperpanjanganb2uYear"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalpeningkatanauYear"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalpeningkatanb1Year"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalpeningkatanb1uYear"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalpeningkatanb2Year"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalpeningkatanb2uYear"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalYear"></span></th>
                             </tr>
                         </tfoot>
                     </table>
                     <!-- <table class="table table-bordered table-hover">
                         <thead>
                             <tr class="text-white" style="background-color: #0007D8;">
                                 <th style="text-align: center; vertical-align: middle; font-size:20px" colspan="6" scope="col">Baru</th>
                             </tr>
                             <tr style="background-color:#5150D8; color:#fff;">
                                 <th style="text-align: center;" scope="col">A</th>
                                 <th style="text-align: center;" scope="col">C</th>
                                 <th style="text-align: center;" scope="col">CI</th>
                                 <th style="text-align: center;" scope="col">CII</th>
                                 <th style="text-align: center;" scope="col">D</th>
                                 <th style="text-align: center;" scope="col">DI</th>
                             </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <td style="text-align: center;"><span id="yearsimbarua"></span></td>
                                 <td style="text-align: center;"><span id="yearsimbaruc"></span></td>
                                 <td style="text-align: center;"><span id="yearsimbaruc1"></span></td>
                                 <td style="text-align: center;"><span id="yearsimbaruc2"></span></td>
                                 <td style="text-align: center;"><span id="yearsimbarud"></span></td>
                                 <td style="text-align: center;"><span id="yearsimbarud1"></span></td>
                             </tr>
                         </tbody>
                     </table>
                     <table class="table table-bordered table-hover">
                         <thead>
                             <tr class="text-white" style="background-color: #0007D8;">
                                 <th style="text-align: center; vertical-align: middle; font-size:20px" colspan="11" scope="col">Perpanjangan</th>
                             </tr>
                             <tr style="background-color:#5150D8; color:#fff; ">
                                 <th style="text-align: center;" scope="col">A</th>
                                 <th style="text-align: center;" scope="col">AU</th>
                                 <th style="text-align: center;" scope="col">BI</th>
                                 <th style="text-align: center;" scope="col">BIU</th>
                                 <th style="text-align: center;" scope="col">BII</th>
                                 <th style="text-align: center;" scope="col">BIIU</th>
                                 <th style="text-align: center;" scope="col">C</th>
                                 <th style="text-align: center;" scope="col">CI</th>
                                 <th style="text-align: center;" scope="col">CII</th>
                                 <th style="text-align: center;" scope="col">D</th>
                                 <th style="text-align: center;" scope="col">DI</th>
                             </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <td style="text-align: center;"><span id="yearsimperpanjangana"></span></td>
                                 <td style="text-align: center;"><span id="yearsimperpanjanganau"></span></td>
                                 <td style="text-align: center;"><span id="yearsimperpanjanganb1"></span></td>
                                 <td style="text-align: center;"><span id="yearsimperpanjanganb1u"></span></td>
                                 <td style="text-align: center;"><span id="yearsimperpanjanganb2"></span></td>
                                 <td style="text-align: center;"><span id="yearsimperpanjanganb2u"></span></td>
                                 <td style="text-align: center;"><span id="yearsimperpanjanganc"></span></td>
                                 <td style="text-align: center;"><span id="yearsimperpanjanganc1"></span></td>
                                 <td style="text-align: center;"><span id="yearsimperpanjanganc2"></span></td>
                                 <td style="text-align: center;"><span id="yearsimperpanjangand"></span></td>
                                 <td style="text-align: center;"><span id="yearsimperpanjangand1"></span></td>
                             </tr>
                         </tbody>
                     </table>
                     <table class="table table-bordered table-hover">
                         <thead>
                             <tr class="text-white" style="background-color: #0007D8;">
                                 <th style="text-align: center; vertical-align: middle; font-size:20px" colspan="5" scope="col">Peningkatan</th>
                             </tr>
                             <tr style="background-color:#5150D8; color:#fff;">
                                 <th style="text-align: center;" scope="col">AU</th>
                                 <th style="text-align: center;" scope="col">BI</th>
                                 <th style="text-align: center;" scope="col">BIU</th>
                                 <th style="text-align: center;" scope="col">BII</th>
                                 <th style="text-align: center;" scope="col">BIIU</th>
                             </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <td style="text-align: center;"><span id="yearsimpeningkatanau"></span></td>
                                 <td style="text-align: center;"><span id="yearsimpeningkatanb1"></span></td>
                                 <td style="text-align: center;"><span id="yearsimpeningkatanb1u"></span></td>
                                 <td style="text-align: center;"><span id="yearsimpeningkatanb2"></span></td>
                                 <td style="text-align: center;"><span id="yearsimpeningkatanb2u"></span></td>
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

                 <input class="form-control form-control-lg" type="date" name="start_date" id="start_date" value="<?= date('Y-m-d', strtotime("-6 days")); ?>">
                 <input class="form-control form-control-lg" type="date" name="end_date" id="end_date" value="<?= date('Y-m-d'); ?>">
             </div>

             <button type="button" class="btn btn-primary float-end btn-sm" style="width: 100%;" onclick="ButtonFilter()">Tampilkan</button>
             <a href="http://34.143.227.90:3001/v1/laporan_harian/export_laphar" type="button" button class="btn btn-outline-primary float-end btn-sm mt-2" style="width: 100%; border-color:#007DD8;">Export Laporan</a>


         </div>
     </div>
 <?php } else { ?>




 <?php } ?>

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
             url: "<?php echo base_url(); ?>executive/statistik_executive/getDetailStatistikSim",
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
                 // Chart Kecelakaan Lalu Lintas

                 // chart laka
                 var chart = {
                     series: [{

                         name: '<h6>Sim Baru</h6>',
                         type: 'column',
                         data: polda_baru,
                         color: "#CB2D3E"
                     }, {
                         name: '<h6>Perpanjangan</h6>',
                         type: 'column',
                         data: polda_perpanjangan,
                         color: "#E8D42F"
                     }],
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

         topSimDay(yesterday, yesterday);
         topSimMonth(firstDayMonth, lastDayMonth);
         topSimYear(firstDay, lastDay)

         sim_daily(yesterday, firstDayMonth, lastDayMonth, firstDay, lastDay)
         SimlineChart(seven_daysAgo, yesterday)
         jam();
     })


     $('#limit_showData').on('change', function() {
         let filter = 0
         var limit = $('#limit_showData').val();
         var yesterday = new Date().toLocaleDateString('en-GB').split('/').reverse().join('-')
         $.ajax({
             type: "POST",
             url: "<?php echo base_url(); ?>executive/statistik_executive/getDetailStatistikSim",
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

                 var chart = {
                     series: [{
                         name: '<h6>Sim Baru</h6>',
                         type: 'column',
                         data: polda_baru,
                         color: "#11347A"
                     }, {
                         name: '<h6>Sim Perpanjangan</h6>',
                         type: 'column',
                         data: polda_perpanjangan,
                         color: "#CB2D3E"
                     }],
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


     function sim_daily(yesterday, firstDayMonth, lastDayMonth, firstDay, lastDay) {
         $.ajax({
             type: "POST",
             url: "<?= base_url(); ?>executive/statistik_executive/getSimDate",
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
                 $('#simThisDay').text(result.thisDay)
                 $('#simThisMonth').text(result.thisMonth)
                 $('#simThisYear').text(result.thisYear)
                 $('#daysimbarua').text(result.detailsthisDay.baru_a)
                 $('#daysimbaruc').text(result.detailsthisDay.baru_c)
                 $('#daysimbaruc1').text(result.detailsthisDay.baru_c1)
                 $('#daysimbaruc2').text(result.detailsthisDay.baru_c2)
                 $('#daysimbarud').text(result.detailsthisDay.baru_d)
                 $('#daysimbarud1').text(result.detailsthisDay.baru_d1)
                 $('#daysimperpanjangana').text(result.detailsthisDay.perpanjangan_a)
                 $('#daysimperpanjanganau').text(result.detailsthisDay.perpanjangan_au)
                 $('#daysimperpanjanganb1').text(result.detailsthisDay.perpanjangan_b1)
                 $('#daysimperpanjanganb1u').text(result.detailsthisDay.perpanjangan_b1u)
                 $('#daysimperpanjanganb2').text(result.detailsthisDay.perpanjangan_b2)
                 $('#daysimperpanjanganb2u').text(result.detailsthisDay.perpanjangan_b2u)
                 $('#daysimperpanjanganc').text(result.detailsthisDay.perpanjangan_c)
                 $('#daysimperpanjanganc1').text(result.detailsthisDay.perpanjangan_c1)
                 $('#daysimperpanjanganc2').text(result.detailsthisDay.perpanjangan_c2)
                 $('#daysimperpanjangand').text(result.detailsthisDay.perpanjangan_d)
                 $('#daysimperpanjangand1').text(result.detailsthisDay.perpanjangan_d1)
                 $('#daysimpeningkatanau').text(result.detailsthisDay.peningkatan_au)
                 $('#daysimpeningkatanb1').text(result.detailsthisDay.peningkatan_b1)
                 $('#daysimpeningkatanb1u').text(result.detailsthisDay.peningkatan_b1u)
                 $('#daysimpeningkatanb2').text(result.detailsthisDay.peningkatan_b2)
                 $('#daysimpeningkatanb2u').text(result.detailsthisDay.peningkatan_b2u)
                 $('#monthsimbarua').text(result.detailsthisMonth.baru_a)
                 $('#monthsimbaruc').text(result.detailsthisMonth.baru_c)
                 $('#monthsimbaruc1').text(result.detailsthisMonth.baru_c1)
                 $('#monthsimbaruc2').text(result.detailsthisMonth.baru_c2)
                 $('#monthsimbarud').text(result.detailsthisMonth.baru_d)
                 $('#monthsimbarud1').text(result.detailsthisMonth.baru_d1)
                 $('#monthsimperpanjangana').text(result.detailsthisMonth.perpanjangan_a)
                 $('#monthsimperpanjanganau').text(result.detailsthisMonth.perpanjangan_au)
                 $('#monthsimperpanjanganb1').text(result.detailsthisMonth.perpanjangan_b1)
                 $('#monthsimperpanjanganb1u').text(result.detailsthisMonth.perpanjangan_b1u)
                 $('#monthsimperpanjanganb2').text(result.detailsthisMonth.perpanjangan_b2)
                 $('#monthsimperpanjanganb2u').text(result.detailsthisMonth.perpanjangan_b2u)
                 $('#monthsimperpanjanganc').text(result.detailsthisMonth.perpanjangan_c)
                 $('#monthsimperpanjanganc1').text(result.detailsthisMonth.perpanjangan_c1)
                 $('#monthsimperpanjanganc2').text(result.detailsthisMonth.perpanjangan_c2)
                 $('#monthsimperpanjangand').text(result.detailsthisMonth.perpanjangan_d)
                 $('#monthsimperpanjangand1').text(result.detailsthisMonth.perpanjangan_d1)
                 $('#monthsimpeningkatanau').text(result.detailsthisMonth.peningkatan_au)
                 $('#monthsimpeningkatanb1').text(result.detailsthisMonth.peningkatan_b1)
                 $('#monthsimpeningkatanb1u').text(result.detailsthisMonth.peningkatan_b1u)
                 $('#monthsimpeningkatanb2').text(result.detailsthisMonth.peningkatan_b2)
                 $('#monthsimpeningkatanb2u').text(result.detailsthisMonth.peningkatan_b2u)
                 $('#yearsimbarua').text(result.detailsthisYear.baru_a)
                 $('#yearsimbaruc').text(result.detailsthisYear.baru_c)
                 $('#yearsimbaruc1').text(result.detailsthisYear.baru_c1)
                 $('#yearsimbaruc2').text(result.detailsthisYear.baru_c2)
                 $('#yearsimbarud').text(result.detailsthisYear.baru_d)
                 $('#yearsimbarud1').text(result.detailsthisYear.baru_d1)
                 $('#yearsimperpanjangana').text(result.detailsthisYear.perpanjangan_a)
                 $('#yearsimperpanjanganau').text(result.detailsthisYear.perpanjangan_au)
                 $('#yearsimperpanjanganb1').text(result.detailsthisYear.perpanjangan_b1)
                 $('#yearsimperpanjanganb1u').text(result.detailsthisYear.perpanjangan_b1u)
                 $('#yearsimperpanjanganb2').text(result.detailsthisYear.perpanjangan_b2)
                 $('#yearsimperpanjanganb2u').text(result.detailsthisYear.perpanjangan_b2u)
                 $('#yearsimperpanjanganc').text(result.detailsthisYear.perpanjangan_c)
                 $('#yearsimperpanjanganc1').text(result.detailsthisYear.perpanjangan_c1)
                 $('#yearsimperpanjanganc2').text(result.detailsthisYear.perpanjangan_c2)
                 $('#yearsimperpanjangand').text(result.detailsthisYear.perpanjangan_d)
                 $('#yearsimperpanjangand1').text(result.detailsthisYear.perpanjangan_d1)
                 $('#yearsimpeningkatanau').text(result.detailsthisYear.peningkatan_au)
                 $('#yearsimpeningkatanb1').text(result.detailsthisYear.peningkatan_b1)
                 $('#yearsimpeningkatanb1u').text(result.detailsthisYear.peningkatan_b1u)
                 $('#yearsimpeningkatanb2').text(result.detailsthisYear.peningkatan_b2)
                 $('#yearsimpeningkatanb2u').text(result.detailsthisYear.peningkatan_b2u)

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
             topSimDay(start_date, end_date);
             $('#modalLabelDay').text(`Detail SIM Tanggal ${moment(start_date).format('DD MM YYYY')} s.d ${moment(end_date).format('DD MM YYYY')} Seluruh Polda`)
         } else if (type === 'month') {
             start_date = moment($('#start_date_table_m').val()).startOf('month').format('YYYY-MM-DD');
             end_date = moment($('#end_date_table_m').val()).endOf('month').format('YYYY-MM-DD')
             topSimMonth(start_date, end_date);
             $('#modalLabelMonth').text(`Detail SIM Bulan ${moment(start_date).format('MM YYYY')} s.d ${moment(end_date).format('MM YYYY')} Seluruh Polda`)
         } else if (type === 'year') {
             start_date = moment($('#start_date_table_y').val()).startOf('year').format('YYYY-MM-DD');
             end_date = moment($('#end_date_table_y').val()).endOf('year').format('YYYY-MM-DD')
             topSimYear(start_date, end_date)
             $('#modalLabelYear').text(`Detail SIM Tahun ${moment(start_date).format('YYYY')} s.d ${moment(end_date).format('YYYY')} Seluruh Polda`)
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
                 url: "<?php echo base_url(); ?>executive/statistik_executive/getDetailStatistikSim",
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

                     var chart = {
                         series: [{
                             name: '<h6>Sim Baru</h6>',
                             type: 'column',
                             data: polda_baru,
                             color: "#11347A"
                         }, {
                             name: '<h6>Sim Perpanjangan</h6>',
                             type: 'column',
                             data: polda_perpanjangan,
                             color: "#CB2D3E"
                         }],
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

             SimlineChart(start_date, end_date)
         }
     }

     function SimlineChart(seven_daysAgo, yesterday) {

         $.ajax({
             type: "POST",
             url: "<?php echo base_url(); ?>executive/Statistik_executive/getLineSim",
             data: {
                 start_date: seven_daysAgo,
                 end_date: yesterday
             },
             dataType: "JSON",
             success: function(result) {
                 console.log(result);
                 $('#titleline').html(`<h4 class="card-title mb-0 text-uppercase">${result.title}</h1>`);
                 $("#chartdate").html(`<div id="chart2"></div>`);


                 var chart2 = {
                     series: [{
                         name: '<h6>Baru</h6>',
                         type: 'line',
                         data: result.data.polda_baru,
                         color: "#CB2D3E"
                     }, {
                         name: '<h6>Perpanjangan</h6>',
                         type: 'line',
                         data: result.data.polda_perpanjangan,
                         color: "#E8D42F"
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

     function topSimDay(start_date, end_date) {
         $.ajax({
             type: "POST",
             url: "<?php echo base_url(); ?>executive/statistik_executive/getTopSim",
             dataType: "JSON",
             data: {
                 start_date: start_date,
                 end_date: end_date
             },
             success: function(result) {
                 $("#overlay").fadeOut(300);
                 var table = '';
                 let total = 0;
                 let resultsim = result.topSim;
                 for (let i = 0; i < resultsim.length; i++) {
                     let x = parseInt(i)
                     let no = x + 1
                     table += `<tr class="text-center"> 
                     <td>  ${no}  </td> 
                        <td>  ${resultsim[i].name_polda}  </td> 
                        <td>  ${resultsim[i].baru_a}  </td> 
                        <td>  ${resultsim[i].baru_c}  </td> 
                        <td>  ${resultsim[i].baru_c1}  </td> 
                        <td>  ${resultsim[i].baru_c2}  </td>
                        <td>  ${resultsim[i].baru_d}  </td> 
                        <td>  ${resultsim[i].baru_d1}  </td> 
                        <td>  ${resultsim[i].perpanjangan_a}  </td>  
                        <td>  ${resultsim[i].perpanjangan_au}  </td>  
                        <td>  ${resultsim[i].perpanjangan_c}  </td>  
                        <td>  ${resultsim[i].perpanjangan_c1}  </td>  
                        <td>  ${resultsim[i].perpanjangan_c2}  </td>  
                        <td>  ${resultsim[i].perpanjangan_d}  </td>  
                        <td>  ${resultsim[i].perpanjangan_d1}  </td>  
                        <td>  ${resultsim[i].perpanjangan_b1}  </td>  
                        <td>  ${resultsim[i].perpanjangan_b1u}  </td>  
                        <td>  ${resultsim[i].perpanjangan_b2}  </td>  
                        <td>  ${resultsim[i].perpanjangan_b2u}  </td>  
                        <td>  ${resultsim[i].peningkatan_au}  </td>  
                        <td>  ${resultsim[i].peningkatan_b1}  </td>  
                        <td>  ${resultsim[i].peningkatan_b1u}  </td>  
                        <td>  ${resultsim[i].peningkatan_b2}  </td>  
                        <td>  ${resultsim[i].peningkatan_b2u}  </td>  
                        <td>  ${resultsim[i].total}  </td>  
                        </tr>`
                 }
                 $('#tbody-simDay').html(table);
                 $('#totalbaruaDay').text(result.baru_a)
                 $('#totalbarucDay').text(result.baru_c)
                 $('#totalbaruc1Day').text(result.baru_c1)
                 $('#totalbaruc2Day').text(result.baru_c2)
                 $('#totalbarudDay').text(result.baru_d)
                 $('#totalbarud1Day').text(result.baru_d1)
                 $('#totalperpanjanganaDay').text(result.perpanjangan_a)
                 $('#totalperpanjanganauDay').text(result.perpanjangan_au)
                 $('#totalperpanjangancDay').text(result.perpanjangan_c)
                 $('#totalperpanjanganc1Day').text(result.perpanjangan_c1)
                 $('#totalperpanjanganc2Day').text(result.perpanjangan_c2)
                 $('#totalperpanjangandDay').text(result.perpanjangan_d)
                 $('#totalperpanjangand1Day').text(result.perpanjangan_d1)
                 $('#totalperpanjanganb1Day').text(result.perpanjangan_b1)
                 $('#totalperpanjanganb1uDay').text(result.perpanjangan_b1u)
                 $('#totalperpanjanganb2Day').text(result.perpanjangan_b2)
                 $('#totalperpanjanganb2uDay').text(result.perpanjangan_b2u)
                 $('#totalpeningkatanauDay').text(result.peningkatan_au)
                 $('#totalpeningkatanb1Day').text(result.peningkatan_b1)
                 $('#totalpeningkatanb1uDay').text(result.peningkatan_b1u)
                 $('#totalpeningkatanb2Day').text(result.peningkatan_b2)
                 $('#totalpeningkatanb2uDay').text(result.peningkatan_b2u)
                 $('#totalDay').text(result.total)
                 <?php $mobile = detect_mobile();
                    if ($mobile === true) { ?>

                     $('#tableSimDay').DataTable({
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

     function topSimMonth(firstDayMonth, lastDayMonth) {
         $.ajax({
             type: "POST",
             url: "<?php echo base_url(); ?>executive/statistik_executive/getSimMonth",
             dataType: "JSON",
             data: {
                 firstDay: firstDayMonth,
                 lastDay: lastDayMonth
             },
             success: function(result) {
                 $("#overlay").fadeOut(300);
                 var table = '';
                 let resultsim = result.topSim;
                 for (let i = 0; i < resultsim.length; i++) {
                     let x = parseInt(i)
                     let no = x + 1
                     table += `<tr class="text-center"> 
                     <td>  ${no}  </td> 
                        <td>  ${resultsim[i].name_polda}  </td> 
                        <td>  ${resultsim[i].baru_a}  </td> 
                        <td>  ${resultsim[i].baru_c}  </td> 
                        <td>  ${resultsim[i].baru_c1}  </td> 
                        <td>  ${resultsim[i].baru_c2}  </td>
                        <td>  ${resultsim[i].baru_d}  </td> 
                        <td>  ${resultsim[i].baru_d1}  </td> 
                        <td>  ${resultsim[i].perpanjangan_a}  </td>  
                        <td>  ${resultsim[i].perpanjangan_au}  </td>  
                        <td>  ${resultsim[i].perpanjangan_c}  </td>  
                        <td>  ${resultsim[i].perpanjangan_c1}  </td>  
                        <td>  ${resultsim[i].perpanjangan_c2}  </td>  
                        <td>  ${resultsim[i].perpanjangan_d}  </td>  
                        <td>  ${resultsim[i].perpanjangan_d1}  </td>  
                        <td>  ${resultsim[i].perpanjangan_b1}  </td>  
                        <td>  ${resultsim[i].perpanjangan_b1u}  </td>  
                        <td>  ${resultsim[i].perpanjangan_b2}  </td>  
                        <td>  ${resultsim[i].perpanjangan_b2u}  </td>  
                        <td>  ${resultsim[i].peningkatan_au}  </td>  
                        <td>  ${resultsim[i].peningkatan_b1}  </td>  
                        <td>  ${resultsim[i].peningkatan_b1u}  </td>  
                        <td>  ${resultsim[i].peningkatan_b2}  </td>  
                        <td>  ${resultsim[i].peningkatan_b2u}  </td>  
                        <td>  ${resultsim[i].total}  </td>  
                        </tr>`
                 }
                 $('#tbody-simMonth').html(table);
                 $('#totalbaruaMonth').text(result.baru_a)
                 $('#totalbarucMonth').text(result.baru_c)
                 $('#totalbaruc1Month').text(result.baru_c1)
                 $('#totalbaruc2Month').text(result.baru_c2)
                 $('#totalbarudMonth').text(result.baru_d)
                 $('#totalbarud1Month').text(result.baru_d1)
                 $('#totalperpanjanganaMonth').text(result.perpanjangan_a)
                 $('#totalperpanjanganauMonth').text(result.perpanjangan_au)
                 $('#totalperpanjangancMonth').text(result.perpanjangan_c)
                 $('#totalperpanjanganc1Month').text(result.perpanjangan_c1)
                 $('#totalperpanjanganc2Month').text(result.perpanjangan_c2)
                 $('#totalperpanjangandMonth').text(result.perpanjangan_d)
                 $('#totalperpanjangand1Month').text(result.perpanjangan_d1)
                 $('#totalperpanjanganb1Month').text(result.perpanjangan_b1)
                 $('#totalperpanjanganb1uMonth').text(result.perpanjangan_b1u)
                 $('#totalperpanjanganb2Month').text(result.perpanjangan_b2)
                 $('#totalperpanjanganb2uMonth').text(result.perpanjangan_b2u)
                 $('#totalpeningkatanauMonth').text(result.peningkatan_au)
                 $('#totalpeningkatanb1Month').text(result.peningkatan_b1)
                 $('#totalpeningkatanb1uMonth').text(result.peningkatan_b1u)
                 $('#totalpeningkatanb2Month').text(result.peningkatan_b2)
                 $('#totalpeningkatanb2uMonth').text(result.peningkatan_b2u)
                 $('#totalMonth').text(result.total)


                 <?php $mobile = detect_mobile();
                    if ($mobile === true) { ?>

                     $('#tableSimMonth').DataTable({
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

     function topSimYear(firstDay, lastDay) {
         $.ajax({
             type: "POST",
             url: "<?php echo base_url(); ?>executive/statistik_executive/getSimYear",
             dataType: "JSON",
             data: {
                 firstDay: firstDay,
                 lastDay: lastDay
             },
             success: function(result) {
                 $("#overlay").fadeOut(300);
                 var table = '';
                 let resultsim = result.topSim;
                 for (let i = 0; i < resultsim.length; i++) {
                     let x = parseInt(i)
                     let no = x + 1
                     table += `<tr class="text-center"> 
                     <td>  ${no}  </td> 
                        <td>  ${resultsim[i].name_polda}  </td> 
                        <td>  ${resultsim[i].baru_a}  </td> 
                        <td>  ${resultsim[i].baru_c}  </td> 
                        <td>  ${resultsim[i].baru_c1}  </td> 
                        <td>  ${resultsim[i].baru_c2}  </td>
                        <td>  ${resultsim[i].baru_d}  </td> 
                        <td>  ${resultsim[i].baru_d1}  </td> 
                        <td>  ${resultsim[i].perpanjangan_a}  </td>  
                        <td>  ${resultsim[i].perpanjangan_au}  </td>  
                        <td>  ${resultsim[i].perpanjangan_c}  </td>  
                        <td>  ${resultsim[i].perpanjangan_c1}  </td>  
                        <td>  ${resultsim[i].perpanjangan_c2}  </td>  
                        <td>  ${resultsim[i].perpanjangan_d}  </td>  
                        <td>  ${resultsim[i].perpanjangan_d1}  </td>  
                        <td>  ${resultsim[i].perpanjangan_b1}  </td>  
                        <td>  ${resultsim[i].perpanjangan_b1u}  </td>  
                        <td>  ${resultsim[i].perpanjangan_b2}  </td>  
                        <td>  ${resultsim[i].perpanjangan_b2u}  </td>  
                        <td>  ${resultsim[i].peningkatan_au}  </td>  
                        <td>  ${resultsim[i].peningkatan_b1}  </td>  
                        <td>  ${resultsim[i].peningkatan_b1u}  </td>  
                        <td>  ${resultsim[i].peningkatan_b2}  </td>  
                        <td>  ${resultsim[i].peningkatan_b2u}  </td>  
                        <td>  ${resultsim[i].total}  </td>  
                        </tr>`
                 }
                 $('#tbody-simYear').html(table);
                 $('#totalbaruaYear').text(result.baru_a)
                 $('#totalbarucYear').text(result.baru_c)
                 $('#totalbaruc1Year').text(result.baru_c1)
                 $('#totalbaruc2Year').text(result.baru_c2)
                 $('#totalbarudYear').text(result.baru_d)
                 $('#totalbarud1Year').text(result.baru_d1)
                 $('#totalperpanjanganaYear').text(result.perpanjangan_a)
                 $('#totalperpanjanganauYear').text(result.perpanjangan_au)
                 $('#totalperpanjangancYear').text(result.perpanjangan_c)
                 $('#totalperpanjanganc1Year').text(result.perpanjangan_c1)
                 $('#totalperpanjanganc2Year').text(result.perpanjangan_c2)
                 $('#totalperpanjangandYear').text(result.perpanjangan_d)
                 $('#totalperpanjangand1Year').text(result.perpanjangan_d1)
                 $('#totalperpanjanganb1Year').text(result.perpanjangan_b1)
                 $('#totalperpanjanganb1uYear').text(result.perpanjangan_b1u)
                 $('#totalperpanjanganb2Year').text(result.perpanjangan_b2)
                 $('#totalperpanjanganb2uYear').text(result.perpanjangan_b2u)
                 $('#totalpeningkatanauYear').text(result.peningkatan_au)
                 $('#totalpeningkatanb1Year').text(result.peningkatan_b1)
                 $('#totalpeningkatanb1uYear').text(result.peningkatan_b1u)
                 $('#totalpeningkatanb2Year').text(result.peningkatan_b2)
                 $('#totalpeningkatanb2uYear').text(result.peningkatan_b2u)
                 $('#totalYear').text(result.total)
                 <?php $mobile = detect_mobile();
                    if ($mobile === true) { ?>

                     $('#tableSimYear').DataTable({
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