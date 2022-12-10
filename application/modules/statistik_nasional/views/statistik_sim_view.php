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
                 <h2>DATA <span style="text-transform:uppercase ; color:#2e93e6">Sim <span style="color:#000;">Nasional</span></span> </h2>
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
                                         <h1 class="text-center mb-0" style="color:#464646; font-size:25px; color:#2e93e6;" id="simThisDay"></h1>
                                         <p class="text-center mb-0">Sim</p>
                                     </div>
                                     <div class="col-md-12 ms-3">
                                         <div class="row">
                                             <div class="col-md-4 ms-n3 rounded-bottom" style=" width: 100%; background:#007DD8; height:40px; border-radius:20px 0 20px 20; ">
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
                                         <h1 class="text-center mb-0" style="color:#464646; font-size:25px; color:#2e93e6;" id="simThisMonth"></h1>
                                         <p class="text-center mb-0">Sim</p>
                                     </div>
                                     <div class="col-md-12 ms-3">
                                         <div class="row">
                                             <div class="col-md-4 ms-n3 rounded-bottom" style=" width: 100%; background:#007DD8; height:40px; border-radius:20px 0 20px 20; ">
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
                                         <h1 class="text-center mb-0" style="color:#464646; font-size:25px; color:#2e93e6;" id="simThisYear"></h1>
                                         <p class="text-center mb-0">Sim</p>
                                     </div>
                                     <div class="col-md-12 ms-3">
                                         <div class="row">
                                             <div class="col-md-4 ms-n3 rounded-bottom" style=" width: 100%; background:#007DD8; height:40px; border-radius:20px 0 20px 20; ">
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


 <div class="modal fade" id="ModalDay" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Detail Sim Hari Ini</h5>
                 <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button> -->
             </div>
             <div class="modal-body">
                 <div class="row">
                     <div class="col-md-3">
                         <span>Baru</span> <br>
                         <span>A : <span id="daysimbarua"></span></span> <br>
                         <span>C : <span id="daysimbaruc"></span></span><br>
                         <span>D : <span id="daysimbarud"></span></span><br>
                     </div>
                     <div class="col-md-3">
                         <span>Perpanjangan</span> <br>
                         <span>A : <span id="daysimperpanjangana"></span></span> <br>
                         <span>AU : <span id="daysimperpanjanganau"></span></span> <br>
                         <span>C : <span id="daysimperpanjanganb1"></span></span><br>
                         <span>C1 : <span id="daysimperpanjanganb1u"></span></span><br>
                         <span>C2 : <span id="daysimperpanjanganb2"></span></span><br>
                         <span>D : <span id="daysimperpanjanganb2u"></span></span><br>
                         <span>D1 : <span id="daysimperpanjanganc"></span></span><br>
                         <span>B1 : <span id="daysimperpanjanganc1"></span></span><br>
                         <span>B1U : <span id="daysimperpanjanganc2"></span></span><br>
                         <span>B2 : <span id="daysimperpanjangand"></span></span><br>
                         <span>B2U : <span id="daysimperpanjangand1"></span></span><br>
                     </div>
                     <div class="col-md-3">
                         <span>Peningkatan</span> <br>
                         <span>AU : <span id="daysimpeningkatanau"></span></span> <br>
                         <span>B1 : <span id="daysimpeningkatanb1"></span></span><br>
                         <span>B1U : <span id="daysimpeningkatanb1u"></span></span><br>
                         <span>B2 : <span id="daysimpeningkatanb2"></span></span><br>
                         <span>B2U : <span id="daysimpeningkatanb2u"></span></span><br>
                     </div>
                 </div>
             </div>
             <!-- <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             </div> -->
         </div>
     </div>
 </div>

 <div class="modal fade" id="ModalMonth" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Detail Sim Bulan Ini</h5>
                 <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button> -->
             </div>
             <div class="modal-body">
                 <div class="row">
                     <div class="col-md-3">
                         <span>Baru</span> <br>
                         <span>A : <span id="monthsimbarua"></span></span> <br>
                         <span>C : <span id="monthsimbaruc"></span></span><br>
                         <span>D : <span id="monthsimbarud"></span></span><br>
                     </div>
                     <div class="col-md-3">
                         <span>Perpanjangan</span> <br>
                         <span>A : <span id="monthsimperpanjangana"></span></span> <br>
                         <span>AU : <span id="monthsimperpanjanganau"></span></span> <br>
                         <span>C : <span id="monthsimperpanjanganb1"></span></span><br>
                         <span>C1 : <span id="monthsimperpanjanganb1u"></span></span><br>
                         <span>C2 : <span id="monthsimperpanjanganb2"></span></span><br>
                         <span>D : <span id="monthsimperpanjanganb2u"></span></span><br>
                         <span>D1 : <span id="monthsimperpanjanganc"></span></span><br>
                         <span>B1 : <span id="monthsimperpanjanganc1"></span></span><br>
                         <span>B1U : <span id="monthsimperpanjanganc2"></span></span><br>
                         <span>B2 : <span id="monthsimperpanjangand"></span></span><br>
                         <span>B2U : <span id="monthsimperpanjangand1"></span></span><br>
                     </div>
                     <div class="col-md-3">
                         <span>Peningkatan</span> <br>
                         <span>AU : <span id="monthsimpeningkatanau"></span></span> <br>
                         <span>B1 : <span id="monthsimpeningkatanb1"></span></span><br>
                         <span>B1U : <span id="monthsimpeningkatanb1u"></span></span><br>
                         <span>B2 : <span id="monthsimpeningkatanb2"></span></span><br>
                         <span>B2U : <span id="monthsimpeningkatanb2u"></span></span><br>
                     </div>
                 </div>
             </div>
             <!-- <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             </div> -->
         </div>
     </div>
 </div>
 <div class="modal fade" id="ModalYear" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Detail Sim Tahun Ini</h5>
                 <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button> -->
             </div>
             <div class="modal-body">
                 <div class="row">
                     <table class="table table-bordered table-hover">
                         <thead style="background-color:#007DD8; color:#fff; ">
                             <tr>
                                 <th style="text-align: center; vertical-align: middle;" colspan="3" scope="col">Baru</th>
                             </tr>
                             <tr>
                                 <th style="text-align: center;" scope="col">A</th>
                                 <th style="text-align: center;" scope="col">C</th>
                                 <th style="text-align: center;" scope="col">D</th>
                             </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <td style="text-align: center;"><span id="yearsimbarua"></span></td>
                                 <td style="text-align: center;"><span id="yearsimbaruc"></span></td>
                                 <td style="text-align: center;"><span id="yearsimbarud"></span></td>
                             </tr>
                         </tbody>
                     </table>
                     <table class="table table-bordered table-hover">
                         <thead style="background-color:#007DD8; color:#fff; ">
                             <tr>
                                 <th style="text-align: center; vertical-align: middle;" colspan="11" scope="col">Perpanjangan</th>
                             </tr>
                             <tr>
                                 <th style="text-align: center;" scope="col">A</th>
                                 <th style="text-align: center;" scope="col">AU</th>
                                 <th style="text-align: center;" scope="col">B1</th>
                                 <th style="text-align: center;" scope="col">B1U</th>
                                 <th style="text-align: center;" scope="col">B2</th>
                                 <th style="text-align: center;" scope="col">B2U</th>
                                 <th style="text-align: center;" scope="col">C</th>
                                 <th style="text-align: center;" scope="col">C1</th>
                                 <th style="text-align: center;" scope="col">C2</th>
                                 <th style="text-align: center;" scope="col">D</th>
                                 <th style="text-align: center;" scope="col">D1</th>
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
                         <thead style="background-color:#007DD8; color:#fff; ">
                             <tr>
                                 <th style="text-align: center; vertical-align: middle;" colspan="5" scope="col">Peningkatan</th>
                             </tr>
                             <tr>
                                 <th style="text-align: center;" scope="col">AU</th>
                                 <th style="text-align: center;" scope="col">B1</th>
                                 <th style="text-align: center;" scope="col">B1U</th>
                                 <th style="text-align: center;" scope="col">B2</th>
                                 <th style="text-align: center;" scope="col">B2U</th>
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
                     </table>
                     <!-- <div class="col-md-3">
                         <span>Baru</span> <br>
                         <span>A : </span> <br>
                         <span>C : </span><br>
                         <span>D : </span><br>
                     </div>
                     <div class="col-md-3">
                         <span>Perpanjangan</span> <br>
                         <span>A : <span id="yearsimperpanjangana"></span></span> <br>
                         <span>AU : <span id="yearsimperpanjanganau"></span></span> <br>
                         <span>C : <span id="yearsimperpanjanganb1"></span></span><br>
                         <span>C1 : <span id="yearsimperpanjanganb1u"></span></span><br>
                         <span>C2 : <span id="yearsimperpanjanganb2"></span></span><br>
                         <span>D : <span id="yearsimperpanjanganb2u"></span></span><br>
                         <span>D1 : <span id="yearsimperpanjanganc"></span></span><br>
                         <span>B1 : <span id="yearsimperpanjanganc1"></span></span><br>
                         <span>B1U : <span id="yearsimperpanjanganc2"></span></span><br>
                         <span>B2 : <span id="yearsimperpanjangand"></span></span><br>
                         <span>B2U : <span id="yearsimperpanjangand1"></span></span><br>
                     </div>
                     <div class="col-md-3">
                         <span>Peningkatan</span> <br>
                         <span>AU : <span id="yearsimpeningkatanau"></span></span> <br>
                         <span>B1 : <span id="yearsimpeningkatanb1"></span></span><br>
                         <span>B1U : <span id="yearsimpeningkatanb1u"></span></span><br>
                         <span>B2 : <span id="yearsimpeningkatanb2"></span></span><br>
                         <span>B2U : <span id="yearsimpeningkatanb2u"></span></span><br>
                     </div> -->
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

 <div class="container-fluid">

     <div class="card">
         <div class="row m-3" style="font-size: 16px;">
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
                             <div class="col-md-12 mt-3">
                                 <h5>Ranking Polda Data Sim Tertinggi <?= date('d M Y'); ?></h5>
                                 <div class="card shadow-sm">
                                     <table class="table table-bordered table-hover" id="tableSimDay">
                                         <thead style="background-color:#007DD8; color:#fff; ">
                                             <tr>
                                                 <th style="text-align: center; vertical-align: middle;" rowspan="2" scope="col">No</th>
                                                 <th style="text-align: center; vertical-align: middle;" rowspan="2" scope="col">Polda</th>
                                                 <th style="text-align: center; vertical-align: middle;" colspan="3" scope="col">Baru</th>
                                                 <th style="text-align: center; vertical-align: middle;" colspan="11" scope="col">Perpanjangan</th>
                                                 <th style="text-align: center; vertical-align: middle;" colspan="5" scope="col">Peningkatan</th>
                                             </tr>
                                             <tr>
                                                 <th style="text-align: center;" scope="col">A</th>
                                                 <th style="text-align: center;" scope="col">C</th>
                                                 <th style="text-align: center;" scope="col">D</th>
                                                 <th style="text-align: center;" scope="col">A</th>
                                                 <th style="text-align: center;" scope="col">AU</th>
                                                 <th style="text-align: center;" scope="col">C</th>
                                                 <th style="text-align: center;" scope="col">C1</th>
                                                 <th style="text-align: center;" scope="col">C2</th>
                                                 <th style="text-align: center;" scope="col">D</th>
                                                 <th style="text-align: center;" scope="col">D1</th>
                                                 <th style="text-align: center;" scope="col">B1</th>
                                                 <th style="text-align: center;" scope="col">B1U</th>
                                                 <th style="text-align: center;" scope="col">B2</th>
                                                 <th style="text-align: center;" scope="col">B2U</th>
                                                 <th style="text-align: center;" scope="col">AU</th>
                                                 <th style="text-align: center;" scope="col">B1</th>
                                                 <th style="text-align: center;" scope="col">B1U</th>
                                                 <th style="text-align: center;" scope="col">B2</th>
                                                 <th style="text-align: center;" scope="col">B2U</th>
                                             </tr>
                                         </thead>
                                         <tbody id="tbody-simDay">
                                         </tbody>
                                     </table>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                         <div class="row">
                             <div class="col-md-12 mt-3">
                                 <h5>Ranking Polda Data Sim Tertinggi <?= date('M Y'); ?></h5>
                                 <div class="card shadow-sm">
                                     <table class="table table-bordered table-hover" id="tableSimMonth">
                                         <thead style="background-color:#007DD8; color:#fff; ">
                                             <tr>
                                                 <th style="text-align: center; vertical-align: middle;" rowspan="2" scope="col">No</th>
                                                 <th style="text-align: center; vertical-align: middle;" rowspan="2" scope="col">Polda</th>
                                                 <th style="text-align: center; vertical-align: middle;" colspan="3" scope="col">Baru</th>
                                                 <th style="text-align: center; vertical-align: middle;" colspan="11" scope="col">Perpanjangan</th>
                                                 <th style="text-align: center; vertical-align: middle;" colspan="5" scope="col">Peningkatan</th>
                                             </tr>
                                             <tr>
                                                 <th style="text-align: center;" scope="col">A</th>
                                                 <th style="text-align: center;" scope="col">C</th>
                                                 <th style="text-align: center;" scope="col">D</th>
                                                 <th style="text-align: center;" scope="col">A</th>
                                                 <th style="text-align: center;" scope="col">AU</th>
                                                 <th style="text-align: center;" scope="col">C</th>
                                                 <th style="text-align: center;" scope="col">C1</th>
                                                 <th style="text-align: center;" scope="col">C2</th>
                                                 <th style="text-align: center;" scope="col">D</th>
                                                 <th style="text-align: center;" scope="col">D1</th>
                                                 <th style="text-align: center;" scope="col">B1</th>
                                                 <th style="text-align: center;" scope="col">B1U</th>
                                                 <th style="text-align: center;" scope="col">B2</th>
                                                 <th style="text-align: center;" scope="col">B2U</th>
                                                 <th style="text-align: center;" scope="col">AU</th>
                                                 <th style="text-align: center;" scope="col">B1</th>
                                                 <th style="text-align: center;" scope="col">B1U</th>
                                                 <th style="text-align: center;" scope="col">B2</th>
                                                 <th style="text-align: center;" scope="col">B2U</th>
                                             </tr>
                                         </thead>
                                         <tbody id="tbody-simMonth">
                                         </tbody>
                                     </table>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                         <div class="row">
                             <div class="col-md-12 mt-3">
                                 <h5>Ranking Polda Data Sim Tertinggi <?= date('Y'); ?></h5>
                                 <div class="card shadow-sm">
                                     <table class="table table-bordered table-hover" id="tableSimYear">
                                         <thead style="background-color:#007DD8; color:#fff; ">
                                             <tr>
                                                 <th style="text-align: center; vertical-align: middle;" rowspan="2" scope="col">No</th>
                                                 <th style="text-align: center; vertical-align: middle;" rowspan="2" scope="col">Polda</th>
                                                 <th style="text-align: center; vertical-align: middle;" colspan="3" scope="col">Baru</th>
                                                 <th style="text-align: center; vertical-align: middle;" colspan="11" scope="col">Perpanjangan</th>
                                                 <th style="text-align: center; vertical-align: middle;" colspan="5" scope="col">Peningkatan</th>
                                             </tr>
                                             <tr>
                                                 <th style="text-align: center;" scope="col">A</th>
                                                 <th style="text-align: center;" scope="col">C</th>
                                                 <th style="text-align: center;" scope="col">D</th>
                                                 <th style="text-align: center;" scope="col">A</th>
                                                 <th style="text-align: center;" scope="col">AU</th>
                                                 <th style="text-align: center;" scope="col">C</th>
                                                 <th style="text-align: center;" scope="col">C1</th>
                                                 <th style="text-align: center;" scope="col">C2</th>
                                                 <th style="text-align: center;" scope="col">D</th>
                                                 <th style="text-align: center;" scope="col">D1</th>
                                                 <th style="text-align: center;" scope="col">B1</th>
                                                 <th style="text-align: center;" scope="col">B1U</th>
                                                 <th style="text-align: center;" scope="col">B2</th>
                                                 <th style="text-align: center;" scope="col">B2U</th>
                                                 <th style="text-align: center;" scope="col">AU</th>
                                                 <th style="text-align: center;" scope="col">B1</th>
                                                 <th style="text-align: center;" scope="col">B1U</th>
                                                 <th style="text-align: center;" scope="col">B2</th>
                                                 <th style="text-align: center;" scope="col">B2U</th>
                                             </tr>
                                         </thead>
                                         <tbody id="tbody-simYear">
                                         </tbody>
                                     </table>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="row">
             <hr style="width:97%; margin: auto">
             <div class="filter mt-4" style=" height:125px;">
                 <div class="container-fluid">
                     <div class="row">
                         <div class="col-md-9">
                             <label for="waktu" class="form-label text-uppercase">Waktu</label>
                             <div class="row">
                                 <div class="col-md-4">
                                     <input class="form-control form-control-lg" type="date" name="start_date" id="start_date">
                                 </div>
                                 <div class="col-md-4">
                                     <input class="form-control form-control-lg" type="date" name="end_date" id="end_date">
                                 </div>
                                 <div class="col-md-2">
                                     <button type="button" class="btn btn-info float-end btn-lg" style="width: 100%;" onclick="ButtonFilter()">Tampilkan</button>
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

         topSimDay(yesterday);
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
                 console.log(result);
                 $("#overlay").fadeOut(300);
                 $('#simThisDay').text(result.thisDay)
                 $('#simThisMonth').text(result.thisMonth)
                 $('#simThisYear').text(result.thisYear)
                 $('#daysimbarua').text(result.detailsthisDay.baru_a)
                 $('#daysimbaruc').text(result.detailsthisDay.baru_c)
                 $('#daysimbarud').text(result.detailsthisDay.baru_d)
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
                 $('#monthsimbarud').text(result.detailsthisMonth.baru_d)
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
                 $('#yearsimbarud').text(result.detailsthisYear.baru_d)
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

             LakalineChart(start_date, end_date)
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
             success: function(results) {
                 $('#titleline').html(`<h4 class="card-title mb-0 text-uppercase">${results.title}</h1>`);
                 $("#chartdate").html(`<div id="chart2"></div>`);


                 var chart2 = {
                     series: [{
                         name: '<h6>Total Laka</h6>',
                         type: 'line',
                         data: results.data.polda_insiden_kecelakaan,
                         color: "#11347A"
                     }, {
                         name: '<h6>Baru</h6>',
                         type: 'line',
                         data: results.data.polda_meninggal_dunia,
                         color: "#CB2D3E"
                     }, {
                         name: '<h6>Perpanjangan</h6>',
                         type: 'line',
                         data: results.data.polda_perpanjangan,
                         color: "#E8D42F"
                     }, {
                         name: '<h6>Luka Ringan</h6>',
                         type: 'line',
                         data: results.data.polda_luka_ringan,
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

     function topSimDay(yesterday) {
         $.ajax({
             type: "POST",
             url: "<?php echo base_url(); ?>executive/statistik_executive/getTopSim",
             dataType: "JSON",
             data: {
                 yesterday: yesterday
             },
             success: function(result) {
                 $("#overlay").fadeOut(300);
                 var table = '';
                 let nf = new Intl.NumberFormat('en-US');
                 for (let i = 0; i < result.length; i++) {
                     let x = parseInt(i)
                     let no = x + 1
                     table += `<tr class="text-center"> 
                        <td>  ${no}  </td> 
                        <td>  ${result[i].name_polda}  </td> 
                        <td>  ${result[i].baru_a}  </td> 
                        <td>  ${result[i].baru_c}  </td> 
                        <td>  ${result[i].baru_d}  </td> 
                        <td>  ${result[i].perpanjangan_a}  </td>  
                        <td>  ${result[i].perpanjangan_au}  </td>  
                        <td>  ${result[i].perpanjangan_c}  </td>  
                        <td>  ${result[i].perpanjangan_c1}  </td>  
                        <td>  ${result[i].perpanjangan_c2}  </td>  
                        <td>  ${result[i].perpanjangan_d}  </td>  
                        <td>  ${result[i].perpanjangan_d1}  </td>  
                        <td>  ${result[i].perpanjangan_b1}  </td>  
                        <td>  ${result[i].perpanjangan_b1u}  </td>  
                        <td>  ${result[i].perpanjangan_b2}  </td>  
                        <td>  ${result[i].perpanjangan_b2u}  </td>  
                        <td>  ${result[i].peningkatan_au}  </td>  
                        <td>  ${result[i].peningkatan_b1}  </td>  
                        <td>  ${result[i].peningkatan_b1u}  </td>  
                        <td>  ${result[i].peningkatan_b2}  </td>  
                        <td>  ${result[i].peningkatan_b2u}  </td>  
                        </tr>`
                 }
                 $('#tbody-simDay').html(table);
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
                 let nf = new Intl.NumberFormat('en-US');
                 for (let i = 0; i < result.length; i++) {
                     let x = parseInt(i)
                     let no = x + 1
                     table += `<tr class="text-center"> 
                     <td>  ${no}  </td> 
                        <td>  ${result[i].name_polda}  </td> 
                        <td>  ${result[i].baru_a}  </td> 
                        <td>  ${result[i].baru_c}  </td> 
                        <td>  ${result[i].baru_d}  </td> 
                        <td>  ${result[i].perpanjangan_a}  </td>  
                        <td>  ${result[i].perpanjangan_au}  </td>  
                        <td>  ${result[i].perpanjangan_c}  </td>  
                        <td>  ${result[i].perpanjangan_c1}  </td>  
                        <td>  ${result[i].perpanjangan_c2}  </td>  
                        <td>  ${result[i].perpanjangan_d}  </td>  
                        <td>  ${result[i].perpanjangan_d1}  </td>  
                        <td>  ${result[i].perpanjangan_b1}  </td>  
                        <td>  ${result[i].perpanjangan_b1u}  </td>  
                        <td>  ${result[i].perpanjangan_b2}  </td>  
                        <td>  ${result[i].perpanjangan_b2u}  </td>  
                        <td>  ${result[i].peningkatan_au}  </td>  
                        <td>  ${result[i].peningkatan_b1}  </td>  
                        <td>  ${result[i].peningkatan_b1u}  </td>  
                        <td>  ${result[i].peningkatan_b2}  </td>  
                        <td>  ${result[i].peningkatan_b2u}  </td>  
                        </tr>`
                 }
                 $('#tbody-simMonth').html(table);
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
                 let nf = new Intl.NumberFormat('en-US');
                 for (let i = 0; i < result.length; i++) {
                     let x = parseInt(i)
                     let no = x + 1
                     table += `<tr class="text-center"> 
                        <td>  ${no}  </td> 
                        <td>  ${result[i].name_polda}  </td> 
                        <td>  ${result[i].baru_a}  </td> 
                        <td>  ${result[i].baru_c}  </td> 
                        <td>  ${result[i].baru_d}  </td> 
                        <td>  ${result[i].perpanjangan_a}  </td>  
                        <td>  ${result[i].perpanjangan_au}  </td>  
                        <td>  ${result[i].perpanjangan_c}  </td>  
                        <td>  ${result[i].perpanjangan_c1}  </td>  
                        <td>  ${result[i].perpanjangan_c2}  </td>  
                        <td>  ${result[i].perpanjangan_d}  </td>  
                        <td>  ${result[i].perpanjangan_d1}  </td>  
                        <td>  ${result[i].perpanjangan_b1}  </td>  
                        <td>  ${result[i].perpanjangan_b1u}  </td>  
                        <td>  ${result[i].perpanjangan_b2}  </td>  
                        <td>  ${result[i].perpanjangan_b2u}  </td>  
                        <td>  ${result[i].peningkatan_au}  </td>  
                        <td>  ${result[i].peningkatan_b1}  </td>  
                        <td>  ${result[i].peningkatan_b1u}  </td>  
                        <td>  ${result[i].peningkatan_b2}  </td>  
                        <td>  ${result[i].peningkatan_b2u}  </td>  
                        </tr>`
                 }
                 $('#tbody-simYear').html(table);
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