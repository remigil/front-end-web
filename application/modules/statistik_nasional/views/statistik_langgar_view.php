 <div class="container-fluid">
     <div class="row">
         <div class="col-md-6">
             <a href="<?= base_url('statistik_nasional') ?>" style="color:#0a0a0a ;" class="fs-6"><i class="fas fa-less-than"></i> Kembali</a>
         </div>
         <div class="col-md-6 text-end align-self-center">
             <a href="http://34.143.227.90:3001/v1/laporan_harian/export_laphar" type="button" button class="btn btn-outline-primary btn-lg" style="width: 200px; border-color:#0007D8;">Export Laporan</a>
         </div>
     </div>

     <div class="card mt-5 shadow" style="border-radius:36px !important;">
         <div class="row m-2">
             <div class="col-sm-2 col-md-2 align-self-center">
                 <h2>DATAA <span style="text-transform:uppercase ; color:#0007D8">Pelanggaran <span style="color:#000;">Nasional</span></span> </h2>
             </div>
             <div class="col-sm-10 col-md-10">
                 <div class="row m-2">
                     <div class="col-md-4 col-sm-4 col-xl-4 align-self-center">
                         <div class="card mt-2 mb-2" style="border-radius: 20px !important; border-color:#D9D9D9">
                             <div class="card-body">
                                 <div class="row justify-content-between align-items-center" style="height: 120px;">
                                     <div class="col-md-7">
                                         <h4 class="mb-0 ms-3">Hari Ini</h4>
                                     </div>
                                     <div class="col-md-5 float-end">
                                         <h3 class="text-center mb-0" style="color:#464646; font-size:25px; color:#0007D8;" id="garlantasThisDay"></h3>
                                         <p class="text-center mb-0">Kejadian</p>
                                     </div>
                                     <div class="col-md-12">
                                         <div class="row">
                                             <div class="col-md-3 ms-n1">
                                                 <span class="fw-bold">PB : <span class="text-danger" style="padding:5px" id="garlantasThisDayPB"></span></span>
                                             </div>
                                             <div class="col-md-3 ms-n1">
                                                 <span class="fw-bold">PS : <span class="text-warning" style="padding:5px" id="garlantasThisDayPS"></span></span>
                                             </div>
                                             <div class="col-md-3 ms-n1">
                                                 <span class="fw-bold">PR : <span class="text-success" style="padding:5px" id="garlantasThisDayPR"></span></span>
                                             </div>
                                             <div class="col-md-3 ms-n1">
                                                 <span class="fw-bold">T : <span class="text-primary" style="padding:5px" id="garlantasThisDayT"></span></span>
                                             </div>
                                         </div>
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
                         <div class="card mt-2 mb-2" style="border-radius: 20px !important; border-color:#D9D9D9">
                             <div class="card-body">
                                 <div class="row justify-content-between align-items-center" style="height: 120px;">
                                     <div class="col-md-7">
                                         <h4 class="mb-0 ms-3">Bulan Ini</h4>
                                     </div>
                                     <div class="col-md-5 float-end">
                                         <h3 class="text-center mb-0" style="color:#464646; font-size:25px; color:#0007D8;" id="garlantasThisMonth"></h3>
                                         <p class="text-center mb-0">Kejadian</p>
                                     </div>
                                     <div class="col-md-12 ">
                                         <div class="row">
                                             <div class="col-md-3 ms-n1">
                                                 <span class="fw-bold">PB : <span class="text-danger" style="padding:5px" id="garlantasThisMonthPB"></span></span>
                                             </div>
                                             <div class="col-md-3">
                                                 <span class="fw-bold">PS : <span class="text-warning" style="padding:5px" id="garlantasThisMonthPS"></span></span>
                                             </div>
                                             <div class="col-md-3">
                                                 <span class="fw-bold">PR : <span class="text-success" style="padding:5px" id="garlantasThisMonthPR"></span></span>
                                             </div>
                                             <div class="col-md-3">
                                                 <span class="fw-bold">T : <span class="text-primary" style="padding:5px" id="garlantasThisMonthT"></span></span>
                                             </div>
                                         </div>
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
                         <div class="card mt-2 mb-2" style="border-radius: 20px !important; border-color:#D9D9D9">
                             <div class="card-body">
                                 <div class="row justify-content-between align-items-center" style="height: 120px;">
                                     <div class="col-md-7">
                                         <h4 class="mb-0 ms-3">Tahun Ini</h4>
                                     </div>
                                     <div class="col-md-5 float-end">
                                         <h3 class="text-center mb-0" style="color:#464646; font-size:25px; color:#0007D8;" id="garlantasThisYear"></h3>
                                         <p class="text-center mb-0">Kejadian</p>
                                     </div>
                                     <div class="col-md-12 ">
                                         <div class="row">
                                             <div class="col-md-3 ms-n1">
                                                 <span class="fw-bold">PB : <span class="text-danger" style="padding:5px" id="garlantasThisYearPB"></span></span>
                                             </div>
                                             <div class="col-md-3">
                                                 <span class="fw-bold">PS : <span class="text-warning" style="padding:5px" id="garlantasThisYearPS"></span></span>
                                             </div>
                                             <div class="col-md-3">
                                                 <span class="fw-bold">PR : <span class="text-success" style="padding:5px" id="garlantasThisYearPR"></span></span>
                                             </div>
                                             <div class="col-md-3">
                                                 <span class="fw-bold">T : <span class="text-primary" style="padding:5px" id="garlantasThisYearT"></span></span>
                                             </div>
                                         </div>
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
     <div class="modal-dialog modal-xl" role="document" style="min-width:70%;">
         <div class="modal-content">
             <div class=" modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Detail Pelanggaran Hari ini Seluruh Polda</h5>
                 <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button> -->
             </div>
             <div class="modal-body">
                 <div style="line-height: 0.8;">
                     <table class="table table-bordered table-hover" id="tableGarlantasDay" style="background:white; ">
                         <thead style="background-color:#0007D8; color:#fff;">
                             <tr class="text-center">
                                 <th scope="col">No</th>
                                 <th scope="col">Polda</th>
                                 <th scope="col">Meninggal Dunia</th>
                                 <th scope="col">Luka Berat</th>
                                 <th scope="col">Luka Ringan</th>
                                 <th scope="col">Insiden Kejadian</th>
                                 <th scope="col">Total</th>
                             </tr>
                         </thead>
                         <tbody id="tbody-garlantasDay">
                         </tbody>
                         <tfoot>
                             <tr class="text-white" style="background-color: #0007D8;">
                                 <th style="text-align: center; vertical-align: middle;" colspan="2" scope="col">Total</th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalpbDay"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalpsDay"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalprDay"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totaltgDay"></span></th>
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
 <div class="modal fade " id="ModalMonth" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background: rgba(0, 0, 0, 0.7);">
     <div class="modal-dialog modal-xl" role="document" style="min-width:70%;">
         <div class="modal-content">
             <div class=" modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Detail Pelanggaran Bulan ini Seluruh Polda</h5>
                 <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button> -->
             </div>
             <div class="modal-body">
                 <div style="line-height: 0.8;">
                     <table class="table table-bordered table-hover" id="tableGarlantasMonth" style="background:white; ">
                         <thead style="background-color:#0007D8; color:#fff;">
                             <tr class="text-center">
                                 <th scope="col">No</th>
                                 <th scope="col">Polda</th>
                                 <th scope="col">Meninggal Dunia</th>
                                 <th scope="col">Luka Berat</th>
                                 <th scope="col">Luka Ringan</th>
                                 <th scope="col">Insiden Kejadian</th>
                                 <th scope="col">Total</th>
                             </tr>
                         </thead>
                         <tbody id="tbody-garlantasMonth">
                         </tbody>
                         <tfoot>
                             <tr class="text-white" style="background-color: #0007D8;">
                                 <th style="text-align: center; vertical-align: middle;" colspan="2" scope="col">Total</th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalpbMonth"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalpsMonth"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalprMonth"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totaltgMonth"></span></th>
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
 <div class="modal fade " id="ModalYear" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background: rgba(0, 0, 0, 0.7);">
     <div class="modal-dialog modal-xl" role="document" style="min-width:70%;">
         <div class="modal-content">
             <div class=" modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Detail Pelanggaran Tahun ini Seluruh Polda</h5>
                 <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button> -->
             </div>
             <div class="modal-body">
                 <div style="line-height: 0.8;">
                     <table class="table table-bordered table-hover" id="tableGarlantasYear" style="background:white; ">
                         <thead style="background-color:#0007D8; color:#fff;">
                             <tr class="text-center">
                                 <th scope="col">No</th>
                                 <th scope="col">Polda</th>
                                 <th scope="col">Meninggal Dunia</th>
                                 <th scope="col">Luka Berat</th>
                                 <th scope="col">Luka Ringan</th>
                                 <th scope="col">Insiden Kejadian</th>
                                 <th scope="col">Total</th>
                             </tr>
                         </thead>
                         <tbody id="tbody-garlantasYear">
                         </tbody>
                         <tfoot>
                             <tr class="text-white" style="background-color: #0007D8;">
                                 <th style="text-align: center; vertical-align: middle;" colspan="2" scope="col">Total</th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalpbYear"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalpsYear"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totalprYear"></span></th>
                                 <th style="text-align: center; vertical-align: middle;" scope="col"><span id="totaltgYear"></span></th>
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
     <div class="container-fluid mt-5">
         <div class="row mt-5 justify-content-center">
             <!-- <div class="col-md-3">
                               <label for="waktu" class="form-label text-uppercase">Wilayah</label>
                               <select class="form-control" id="polda_id" name="polda_id">
                                   <option value="1">Semua Polda</option>
                               </select>
                           </div> -->
             <div class="col-md-9">
                 <label for="waktu" class="form-label text-uppercase">Waktu</label>
             </div>

             <div style="display: flex;">

                 <input class="form-control form-control-lg" type="date" name="start_date" id="start_date">
                 <input class="form-control form-control-lg" type="date" name="end_date" id="end_date">

             </div>
             <div>
                 <button type="button" class="btn btn-primary float-end btn-sm" style="width: 100%;" onclick="ButtonFilter()">Tampilkan</button>

             </div>

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
                         <h5 style="text-align: center;">Ranking Polda Data Pelanggaran Tertinggi <?= date('d M Y', strtotime("-1 days")); ?></h5>
                          <center>
                             <table class="table table-bordered table-hover" id="tableGarlantasDay" style="background-color: white; width:70%">
                                 <thead style="background-color:#0007D8; color:#fff;">
                                     <tr class="text-center">
                                         <th scope="col">No</th>
                                         <th scope="col">Polda</th>
                                         <th scope="col">Pelanggaran Berat</th>
                                         <th scope="col">Pelanggaran Sedang</th>
                                         <th scope="col">Pelanggaran Ringan</th>
                                         <th scope="col">Teguran</th>
                                         <th scope="col">Total</th>
                                     </tr>
                                 </thead>
                                 <tbody id="tbody-garlantasDay">
                                 </tbody>
                             </table>
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
                         <h5 style="text-align: center;">Ranking Polda Data Pelanggaran Tertinggi <?= date('M Y'); ?></h5>
                          <center>
                             <table class="table table-bordered table-hover" id="tableGarlantasMonth" style="background-color: white; width:70%">
                                 <thead style="background-color:#0007D8; color:#fff;">
                                     <tr class="text-center">
                                         <th scope="col">No</th>
                                         <th scope="col">Polda</th>
                                         <th scope="col">Pelanggaran Berat</th>
                                         <th scope="col">Pelanggaran Sedang</th>
                                         <th scope="col">Pelanggaran Ringan</th>
                                         <th scope="col">Teguran</th>
                                         <th scope="col">Total</th>
                                     </tr>
                                 </thead>
                                 <tbody id="tbody-garlantasMonth">
                                 </tbody>
                             </table>
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
                         <h5 style="text-align: center;">Ranking Polda Data Pelanggaran Tertinggi <?= date('Y'); ?></h5>
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
             <!-- <div class="col-md-3">
                               <label for="waktu" class="form-label text-uppercase">Wilayah</label>
                               <select class="form-control" id="polda_id" name="polda_id">
                                   <option value="1">Semua Polda</option>
                               </select>
                           </div> -->
             <hr style="width:97%; margin: auto">
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
         <div class="row">
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
         var polda_id = $('#polda_,#polda_id').val();

         date.setDate(date.getDate() - 6);
         var seven_daysAgo = date.toLocaleDateString("en-GB").split('/').reverse().join('-');

         var limit = $('#limit_showData').val();
         $.ajax({
             type: "POST",
             url: "<?php echo base_url(); ?>executive/statistik_executive/getDetailStatistikGarlantas",
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
                 let polda_pelanggaran_berat = result.data.polda_pelanggaran_berat
                 let polda_pelanggaran_ringan = result.data.polda_pelanggaran_ringan
                 let polda_pelanggaran_sedang = result.data.polda_pelanggaran_sedang
                 let polda_teguran = result.data.polda_teguran

                 var chart = {
                     series: [{
                         name: 'Total Pelanggaran',
                         type: 'column',
                         data: polda_jumlah,
                         color: "#11347A"
                     }, {
                         name: 'Pelanggaran Berat',
                         type: 'column',
                         data: polda_pelanggaran_berat,
                         color: "#11347A"
                     }, {
                         name: 'Pelanggaran Sedang',
                         type: 'column',
                         data: polda_pelanggaran_sedang,
                         color: "#CB2D3E"
                     }, {
                         name: 'Pelanggaran Ringan',
                         type: 'column',
                         data: polda_pelanggaran_ringan,
                         color: "#E8D42F"
                     }, {
                         name: 'Teguran',
                         type: 'column',
                         data: polda_teguran,
                         color: "#E8D42F"

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

         topGarlantasDay(yesterday);
         topGarlantasMonth(firstDayMonth, lastDayMonth)
         topGarlantasYear(firstDay, lastDay)

         garlantas_daily(yesterday, firstDayMonth, lastDayMonth, firstDay, lastDay)
         GarlantaslineChart(seven_daysAgo, yesterday)

         jam()

     })

     $('#limit_showData').on('change', function() {
         let filter = 0
         var limit = $('#limit_showData').val();
         var yesterday = new Date().toLocaleDateString('en-GB').split('/').reverse().join('-')
         $.ajax({
             type: "POST",
             url: "<?php echo base_url(); ?>executive/statistik_executive/getDetailStatistikGarlantas",
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
                 let polda_pelanggaran_berat = result.data.polda_pelanggaran_berat
                 let polda_pelanggaran_ringan = result.data.polda_pelanggaran_ringan
                 let polda_pelanggaran_sedang = result.data.polda_pelanggaran_sedang
                 let polda_teguran = result.data.polda_teguran

                 var chart = {
                     series: [{
                         name: 'Total Pelanggaran',
                         type: 'column',
                         data: polda_jumlah,
                         color: "#11347A"
                     }, {
                         name: 'Pelanggaran Berat',
                         type: 'column',
                         data: polda_pelanggaran_berat,
                         color: "#11347A"
                     }, {
                         name: 'Pelanggaran Sedang',
                         type: 'column',
                         data: polda_pelanggaran_sedang,
                         color: "#CB2D3E"
                     }, {
                         name: 'Pelanggaran Ringan',
                         type: 'column',
                         data: polda_pelanggaran_ringan,
                         color: "#E8D42F"
                     }, {
                         name: 'Teguran',
                         type: 'column',
                         data: polda_teguran,
                         color: "#E8D42F"

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

     function garlantas_daily(yesterday, firstDayMonth, lastDayMonth, firstDay, lastDay) {
         $.ajax({
             type: "POST",
             url: "<?php echo base_url(); ?>executive/statistik_executive/getGarlantasDate",
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
                 $('#garlantasThisDay').text(result.thisDayTotal)
                 $('#garlantasThisDayPB').text(result.thisDayPB)
                 $('#garlantasThisDayPS').text(result.thisDayPS)
                 $('#garlantasThisDayPR').text(result.thisDayPR)
                 $('#garlantasThisDayT').text(result.thisDayT)
                 $('#garlantasThisMonth').text(result.thisMonthTotal)
                 $('#garlantasThisMonthPB').text(result.thisMonthPB)
                 $('#garlantasThisMonthPS').text(result.thisMonthPS)
                 $('#garlantasThisMonthPR').text(result.thisMonthPR)
                 $('#garlantasThisMonthT').text(result.thisMonthT)
                 $('#garlantasThisYear').text(result.thisYearTotal)
                 $('#garlantasThisYearPB').text(result.thisYearPB)
                 $('#garlantasThisYearPS').text(result.thisYearPS)
                 $('#garlantasThisYearPR').text(result.thisYearPR)
                 $('#garlantasThisYearT').text(result.thisYearT)
             }
         })
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
                 url: "<?php echo base_url(); ?>executive/statistik_executive/getDetailStatistikGarlantas",
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
                     let polda_pelanggaran_berat = result.data.polda_pelanggaran_berat
                     let polda_pelanggaran_ringan = result.data.polda_pelanggaran_ringan
                     let polda_pelanggaran_sedang = result.data.polda_pelanggaran_sedang
                     let polda_teguran = result.data.polda_teguran

                     var chart = {
                         series: [{
                             name: 'Total Pelanggaran',
                             type: 'column',
                             data: polda_jumlah,
                             color: "#11347A"
                         }, {
                             name: 'Pelanggaran Berat',
                             type: 'column',
                             data: polda_pelanggaran_berat,
                             color: "#11347A"
                         }, {
                             name: 'Pelanggaran Sedang',
                             type: 'column',
                             data: polda_pelanggaran_sedang,
                             color: "#CB2D3E"
                         }, {
                             name: 'Pelanggaran Ringan',
                             type: 'column',
                             data: polda_pelanggaran_ringan,
                             color: "#E8D42F"
                         }, {
                             name: 'Teguran',
                             type: 'column',
                             data: polda_teguran,
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
                     };
                     var chart = new ApexCharts(document.querySelector("#chart"), chart);
                     chart.render();
                 }
             })
             GarlantaslineChart(start_date, end_date)
         }
     }

     function GarlantaslineChart(seven_daysAgo, yesterday) {

         $.ajax({
             type: "POST",
             url: "<?php echo base_url(); ?>executive/Statistik_executive/getLineGarlantas",
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
                         name: 'Teguran',
                         type: 'line',
                         data: results.data.polda_teguran,
                         color: "#11347A"
                     }, {
                         name: 'Pelanggaran Berat',
                         type: 'line',
                         data: results.data.polda_pelanggaran_berat,
                         color: "#CB2D3E"
                     }, {
                         name: 'Pelanggaran Sedang',
                         type: 'line',
                         data: results.data.polda_pelanggaran_sedang,
                         color: "#E8D42F"
                     }, {
                         name: 'Luka Ringan',
                         type: 'line',
                         data: results.data.polda_pelanggaran_ringan,
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
                 url: "<?php echo base_url(); ?>executive/statistik_executive/exportDatagarlantas",
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

     function topGarlantasDay(yesterday) {
         $.ajax({
             type: "POST",
             url: "<?php echo base_url(); ?>executive/statistik_executive/getTopGarlantas",
             dataType: "JSON",
             data: {
                 yesterday: yesterday
             },
             success: function(result) {
                 $("#overlay").fadeOut(300);
                 var table = '';
                 var resultgarlantas = result.topGarlantas;
                 let nf = new Intl.NumberFormat('en-US');
                 for (let i = 0; i < resultgarlantas.length; i++) {
                     let x = parseInt(i)
                     let no = x + 1
                     table += `<tr class="text-center"> 
                            <td>  ${no}  </td> 
                            <td>  ${resultgarlantas[i].name_polda}  </td> 
                            <td>  ${nf.format(resultgarlantas[i].pelanggaran_berat)}  </td> 
                            <td>  ${nf.format(resultgarlantas[i].pelanggaran_sedang)}  </td> 
                            <td>  ${nf.format(resultgarlantas[i].pelanggaran_ringan)}  </td> 
                            <td>  ${nf.format(resultgarlantas[i].teguran)}  </td>
                            <td>  ${nf.format(resultgarlantas[i].total)}  </td> 
                            </tr>`
                 }
                 $('#tbody-garlantasDay').html(table);
                 $('#totalpbDay').text(result.pelanggaran_berat)
                 $('#totalpsDay').text(result.pelanggaran_sedang)
                 $('#totalprDay').text(result.pelanggaran_ringan)
                 $('#totaltgDay').text(result.teguran)
                 $('#totalDay').text(result.total)
                 <?php $mobile = detect_mobile();
                    if ($mobile === true) { ?>

                     $('#tableGarlantasDay').DataTable({
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

     function topGarlantasMonth(firstDayMonth, lastDayMonth) {
         $.ajax({
             type: "POST",
             url: "<?php echo base_url(); ?>executive/statistik_executive/getGarlantasMonth",
             dataType: "JSON",
             data: {
                 firstDay: firstDayMonth,
                 lastDay: lastDayMonth
             },
             success: function(result) {
                 $("#overlay").fadeOut(300);
                 var table = '';
                 var resultgarlantas = result.topGarlantas;
                 let nf = new Intl.NumberFormat('en-US');
                 for (let i = 0; i < resultgarlantas.length; i++) {
                     let x = parseInt(i)
                     let no = x + 1
                     table += `<tr class="text-center"> 
                            <td>  ${no}  </td> 
                            <td>  ${resultgarlantas[i].name_polda}  </td> 
                            <td>  ${nf.format(resultgarlantas[i].pelanggaran_berat)}  </td> 
                            <td>  ${nf.format(resultgarlantas[i].pelanggaran_sedang)}  </td> 
                            <td>  ${nf.format(resultgarlantas[i].pelanggaran_ringan)}  </td> 
                            <td>  ${nf.format(resultgarlantas[i].teguran)}  </td>
                            <td>  ${nf.format(resultgarlantas[i].total)}  </td> 
                            </tr>`
                 }
                 $('#tbody-garlantasMonth').html(table);
                 $('#totalpbMonth').text(result.pelanggaran_berat)
                 $('#totalpsMonth').text(result.pelanggaran_sedang)
                 $('#totalprMonth').text(result.pelanggaran_ringan)
                 $('#totaltgMonth').text(result.teguran)
                 $('#totalMonth').text(result.total)
                 <?php $mobile = detect_mobile();
                    if ($mobile === true) { ?>

                     $('#tableGarlantasMonth').DataTable({
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

     function topGarlantasYear(firstDay, lastDay) {
         $.ajax({
             type: "POST",
             url: "<?php echo base_url(); ?>executive/statistik_executive/getGarlantasYear",
             dataType: "JSON",
             data: {
                 firstDay: firstDay,
                 lastDay: lastDay
             },
             success: function(result) {
                 $("#overlay").fadeOut(300);
                 var table = '';
                 var resultgarlantas = result.topGarlantas;
                 let nf = new Intl.NumberFormat('en-US');
                 for (let i = 0; i < resultgarlantas.length; i++) {
                     let x = parseInt(i)
                     let no = x + 1
                     table += `<tr class="text-center"> 
                            <td>  ${no}  </td> 
                            <td>  ${resultgarlantas[i].name_polda}  </td> 
                            <td>  ${nf.format(resultgarlantas[i].pelanggaran_berat)}  </td> 
                            <td>  ${nf.format(resultgarlantas[i].pelanggaran_sedang)}  </td> 
                            <td>  ${nf.format(resultgarlantas[i].pelanggaran_ringan)}  </td> 
                            <td>  ${nf.format(resultgarlantas[i].teguran)}  </td>
                            <td>  ${nf.format(resultgarlantas[i].total)}  </td> 
                            </tr>`
                 }
                 $('#tbody-garlantasYear').html(table);
                 $('#totalpbYear').text(result.pelanggaran_berat)
                 $('#totalpsYear').text(result.pelanggaran_sedang)
                 $('#totalprYear').text(result.pelanggaran_ringan)
                 $('#totaltgYear').text(result.teguran)
                 $('#totalYear').text(result.total)
                 <?php $mobile = detect_mobile();
                    if ($mobile === true) { ?>

                     $('#tableGarlantasYear').DataTable({
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
 <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
 <script src="<?php echo base_url(); ?>assets/admin/libs/apexcharts/apexcharts.min.js"></script>