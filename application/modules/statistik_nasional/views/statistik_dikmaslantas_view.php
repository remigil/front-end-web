 <div class="container-fluid">
     <div class="row">
         <div class="col-md-6">
             <a href="<?= base_url('statistik_nasional') ?>" style="color:#0a0a0a ;" class="fs-6"><i class="fas fa-less-than"></i> Kembali</a>
         </div>
         <div class="col-md-6 text-end align-self-center">
             <a href="<?= ENV_API_BASE_URL ?>v1/laporan_harian/dikmaslantas" type="button" button class="btn btn-outline-primary btn-lg" style="width: 200px; border-color:#0007D8;">Export Laporan</a>
         </div>
     </div>
     <div class="card mt-5 shadow" style="border-radius:36px !important;">
         <div class="row m-2">
             <div class="col-sm-2 col-md-2 align-self-center">
                 <h4>STATISTIK DATA</h4>
                 <h4> <span style="text-transform:uppercase ; color:#0007D8">Dikmaslantas</span> </h4>
                 <h4>SELURUH INDONESIA </h4>
             </div>
             <div class="col-sm-10 col-md-10">
                 <div class="row m-2">
                     <div class="col-md-4 col-sm-4 col-xl-4 align-self-center">
                         <div class="card mt-2 mb-2" style="border-radius: 20px !important; border-color:#D9D9D9">
                             <div class="card-body">
                                 <div class="row justify-content-between align-items-center" style="height: 120px;">
                                     <div class="col-md-7">
                                         <h5 class="mb-0 ms-3">Hari Ini</h5>
                                     </div>
                                     <div class="col-md-5 float-end">
                                         <h1 class="text-center mb-0" style="color:#464646; font-size:20px; color:#2e93e6;" id="dikmasThisDay"></h1>
                                         <p class="text-center mb-0">Dikmaslantas</p>
                                     </div>
                                     <div class="col-md-12 ">
                                         <div class="row">
                                             <div class="col-md-4">
                                                 <span class="fw-bold" style="font-size:12px">MC : <span class="text-danger" style=" padding:5px" id="dikmasThisDayMC"></span></span>
                                             </div>
                                             <div class="col-md-4">
                                                 <span class="fw-bold" style="font-size:12px">ME : <span class="text-warning" style=" padding:5px" id="dikmasThisDayME"></span></span>
                                             </div>
                                             <div class="col-md-4">
                                                 <span class="fw-bold" style="font-size:12px">MS : <span class="text-success" style=" padding:5px" id="dikmasThisDayMS"></span></span>
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
                                         <h5 class="mb-0 ms-3">Bulan Ini <span class="text-danger">(<?= date('M'); ?>)</span></h5>

                                     </div>
                                     <div class="col-md-5 float-end">
                                         <h1 class="text-center mb-0" style="color:#464646; font-size:20px; color:#2e93e6;" id="dikmasThisMonth"></h1>
                                         <p class="text-center mb-0">Dikmaslantas</p>
                                     </div>
                                     <div class="col-md-12">
                                         <div class="row">
                                             <div class="col-md-4">
                                                 <span class="fw-bold" style="font-size:12px">MC : <span class="text-danger" style=" padding:5px" id="dikmasThisMonthMC"></span></span>
                                             </div>
                                             <div class="col-md-4">
                                                 <span class="fw-bold" style="font-size:12px">ME : <span class="text-warning" style=" padding:5px" id="dikmasThisMonthME"></span></span>
                                             </div>
                                             <div class="col-md-4">
                                                 <span class="fw-bold" style="font-size:12px">MS : <span class="text-success" style=" padding:5px" id="dikmasThisMonthMS"></span></span>
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
                                         <h5 class="mb-0 ms-3">Tahun Ini</h5>
                                     </div>
                                     <div class="col-md-5 float-end">
                                         <h1 class="text-center mb-0" style="color:#464646; font-size:20px; color:#2e93e6;" id="dikmasThisYear"></h1>
                                         <p class="text-center mb-0">Dikmaslantas</p>
                                     </div>
                                     <div class="col-md-12 ">
                                         <div class="row">
                                             <div class="col-md-4">
                                                 <span class="fw-bold" style="font-size:12px">MC : <span class="text-danger" style=" padding:5px" id="dikmasThisYearMC"></span></span>
                                             </div>
                                             <div class="col-md-4">
                                                 <span class="fw-bold" style="font-size:12px">ME : <span class="text-warning" style=" padding:5px" id="dikmasThisYearME"></span></span>
                                             </div>
                                             <div class="col-md-4">
                                                 <span class="fw-bold" style="font-size:12px">MS : <span class="text-success" style=" padding:5px" id="dikmasThisYearMS"></span></span>
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
             <div class="col-md-12">
                 <div class="d-flex justify-content-center">
                     <div class="col-md-1">
                         <div class="fw-bold" style="height:25px; width:25px; line-height:25px; background-color:#ff0000; border-radius:50%; text-align:center; font-size:12px; color:white;">MC</div>
                     </div>
                     <div class="col-md-1 me-n5">
                         <span style="margin-left:-90px">Media Cetak</span>
                     </div>
                     <div class="col-md-1">
                         <div class="fw-bold" style="height:25px; width:25px; line-height:25px; background-color:#FFFF00; border-radius:50%; text-align:center; font-size:12px; color:black;">ME</div>
                     </div>
                     <div class="col-md-1 me-n5">
                         <span style="margin-left:-90px">Media Elektronik</span>
                     </div>
                     <div class="col-md-1">
                         <div class="fw-bold" style="height:25px; width:25px; line-height:25px; background-color:#00FF00; border-radius:50%; text-align:center; font-size:12px; color:black;">MS</div>
                     </div>
                     <div class="col-md-1 me-n5">
                         <span style="margin-left:-90px">Media Sosial</span>
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
                 <h5 class="modal-title" id="modalLabelDay">Detail Dikmaslantas tanggal <?= format_indo(date('Y-m-d'))  ?> Seluruh Polda </h5>
                 <!-- <h5 class="modal-title" id="modalLabelDay">Detail Kecelakaan tanggal <?= format_indo(date('Y-m-d'))  ?> Seluruh Polda <span class="fs-5">sasdasdasd</span></h5> -->

                 <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button> -->
             </div>
             <div class="modal-body">
                 <div style="line-height: 0.8;">
                     <div class="row mb-3">
                         <div class="col-md-9" style="display: none;">
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
                     <table class="table table-bordered table-hover" id="tableDikmasDay">
                         <thead style="background-color:#007DD8; color:#fff;">
                             <tr class="text-center">
                                 <th scope="col">No</th>
                                 <th scope="col">Polda</th>
                                 <th scope="col">Media Cetak</th>
                                 <th scope="col">Media Elektronik</th>
                                 <th scope="col">Media Sosial</th>
                             </tr>
                         </thead>
                         <tbody id="tbody-dikmasDay">
                         </tbody>
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
                 <h5 class="modal-title" id="modalLabelMonth">Detail Kecelakaan Bulan <?= format_indo(date('Y-m'))  ?> Seluruh Polda</h5>
                 <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button> -->
             </div>
             <div class="modal-body">
                 <div style="line-height: 0.8;">
                     <div class="row mb-3">
                         <div class="col-md-9" style="display: none;">
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
                     <table class="table table-bordered table-hover" id="tableDikmasDay">
                         <thead style="background-color:#007DD8; color:#fff;">
                             <tr class="text-center">
                                 <th scope="col">No</th>
                                 <th scope="col">Polda</th>
                                 <th scope="col">Media Cetak</th>
                                 <th scope="col">Media Elektronik</th>
                                 <th scope="col">Media Sosial</th>
                             </tr>
                         </thead>
                         <tbody id="tbody-dikmasMonth">
                         </tbody>
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
                 <h5 class="modal-title" id="modalLabelYear">Detail Kecelakaan Tahun <?= format_indo(date('Y')) ?> Seluruh Polda</h5>
                 <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button> -->
             </div>
             <div class="modal-body">
                 <div style="line-height: 0.8;">
                     <div class="row mb-3">
                         <div class="col-md-9" style="display: none;">
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
                     <table class="table table-bordered table-hover" id="tableDikmasDay">
                         <thead style="background-color:#007DD8; color:#fff;">
                             <tr class="text-center">
                                 <th scope="col">No</th>
                                 <th scope="col">Polda</th>
                                 <th scope="col">Media Cetak</th>
                                 <th scope="col">Media Elektronik</th>
                                 <th scope="col">Media Sosial</th>
                             </tr>
                         </thead>
                         <tbody id="tbody-dikmasYear">
                         </tbody>
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

         // console.log(firstDay, lastDay)
         $("#overlay").fadeIn(300);
         $.ajax({
             type: "POST",
             url: "<?php echo base_url(); ?>executive/statistik_executive/getDetailStatistikDikmaslantas",
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
                 let polda_media_elektronik = result.data.polda_media_elektronik
                 let polda_media_sosial = result.data.polda_media_sosial
                 let polda_media_cetak = result.data.polda_media_cetak
                 // Chart Dikmaslantas Lalu Lintas

                 // chart laka
                 var chart = {
                     series: [{
                         name: '<h6>Media Cetak</h6>',
                         type: 'column',
                         data: polda_media_cetak,
                         color: "#CB2D3E"
                     }, {
                         name: '<h6>Media Elektronik</h6>',
                         type: 'column',
                         data: polda_media_elektronik,
                         color: "#E8D42F"
                     }, {
                         name: '<h6>Media Sosial</h6>',
                         type: 'column',
                         data: polda_media_sosial,
                         color: "#3CA55C"

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

         topDikmasDay(yesterday);
         topDikmasMonth(firstDayMonth, lastDayMonth);
         topDikmasYear(firstDay, lastDay)

         ditkamsel_daily(yesterday, firstDayMonth, lastDayMonth, firstDay, lastDay)

         DikmaslineChart(seven_daysAgo, yesterday)
         jam();
     })


     $('#limit_showData').on('change', function() {
         let filter = 0
         var limit = $('#limit_showData').val();
         var yesterday = new Date().toLocaleDateString('en-GB').split('/').reverse().join('-')
         $.ajax({
             type: "POST",
             url: "<?php echo base_url(); ?>executive/statistik_executive/getDetailStatistikDikmaslantas",
             data: {
                 filter: filter,
                 limit: limit,
                 yesterday: yesterday
             },
             dataType: "JSON",
             success: function(result) {
                 console.log(result.data)
                 $("#overlay").fadeOut(300);
                 $('#title').html(`<h4 class="card-title mb-0 text-uppercase">${result.title}</h1>`);
                 $("#charta").html(`<div id="chart"></div>`);

                 let polda_id = result.data.polda_id
                 let polda_name = result.data.polda_name
                 let polda_media_elektronik = result.data.polda_media_elektronik
                 let polda_media_sosial = result.data.polda_media_sosial
                 let polda_media_cetak = result.data.polda_media_cetak
                 // Chart Dikmaslantas Lalu Lintas

                 // chart laka
                 var chart = {
                     series: [{
                         name: '<h6>Media Cetak</h6>',
                         type: 'column',
                         data: polda_media_cetak,
                         color: "#CB2D3E"
                     }, {
                         name: '<h6>Media Elektronik</h6>',
                         type: 'column',
                         data: polda_media_elektronik,
                         color: "#E8D42F"
                     }, {
                         name: '<h6>Media Sosial</h6>',
                         type: 'column',
                         data: polda_media_sosial,
                         color: "#3CA55C"

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


     function ditkamsel_daily(yesterday, firstDayMonth, lastDayMonth, firstDay, lastDay) {
         $.ajax({
             type: "POST",
             url: "<?php echo base_url(); ?>executive/statistik_executive/getDitkamselDate",
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
                 $('#dikmasThisDay').text(result.thisDay[0].dikmaslantas)
                 $('#dikmasThisMonth').text(result.thisMonth[0].dikmaslantas)
                 $('#dikmasThisYear').text(result.thisYear.dikmaslantas)

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
                 url: "<?php echo base_url(); ?>executive/statistik_executive/getDetailStatistikDikmaslantas",
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
                     let polda_media_elektronik = result.data.polda_media_elektronik
                     let polda_media_sosial = result.data.polda_media_sosial
                     let polda_media_cetak = result.data.polda_media_cetak

                     var chart = {
                         series: [{
                             name: '<h6>Media Cetak</h6>',
                             type: 'column',
                             data: polda_media_cetak,
                             color: "#CB2D3E"
                         }, {
                             name: '<h6>Media Elektronik</h6>',
                             type: 'column',
                             data: polda_media_elektronik,
                             color: "#E8D42F"
                         }, {
                             name: '<h6>Media Sosial</h6>',
                             type: 'column',
                             data: polda_media_sosial,
                             color: "#3CA55C"

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

             DikmaslineChart(start_date, end_date)
         }
     }

     function DikmaslineChart(seven_daysAgo, yesterday) {

         $.ajax({
             type: "POST",
             url: "<?php echo base_url(); ?>executive/Statistik_executive/getLineDikmas",
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
                             name: '<h6>Media Cetak</h6>',
                             type: 'column',
                             data: results.data.polda_media_cetak,
                             color: "#CB2D3E"
                         }, {
                             name: '<h6>Media Elektronik</h6>',
                             type: 'column',
                             data: results.data.polda_media_elektronik,
                             color: "#E8D42F"
                         }, {
                             name: '<h6>Media Sosial</h6>',
                             type: 'column',
                             data: results.data.polda_media_sosial,
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
                 } else {
                     var chart2 = {
                         series: [{
                             name: '<h6>Media Cetak</h6>',
                             type: 'line',
                             data: results.data.polda_media_cetak,
                             color: "#CB2D3E"
                         }, {
                             name: '<h6>Media Elektronik</h6>',
                             type: 'line',
                             data: results.data.polda_media_elektronik,
                             color: "#E8D42F"
                         }, {
                             name: '<h6>Media Sosial</h6>',
                             type: 'line',
                             data: results.data.polda_media_sosial,
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
                 }



                 var ditkamsel = new ApexCharts(document.querySelector("#chart2"), chart2);
                 ditkamsel.render();
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

     function topDikmasDay(yesterday) {
         $.ajax({
             type: "POST",
             url: "<?php echo base_url(); ?>executive/statistik_executive/getTopDikmas",
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
                        <td>  ${result[i].media_cetak}  </td> 
                        <td>  ${result[i].media_elektronik}  </td> 
                        <td>  ${result[i].media_sosial}  </td>  
                        </tr>`
                 }
                 $('#tbody-dikmasDay').html(table);
                 <?php $mobile = detect_mobile();
                    if ($mobile === true) { ?>

                     $('#tableDikmasDay').DataTable({
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

     function topDikmasMonth(firstDayMonth, lastDayMonth) {
         $.ajax({
             type: "POST",
             url: "<?php echo base_url(); ?>executive/statistik_executive/getDikmasMonth",
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
                            <td>  ${result[i].media_cetak}  </td> 
                            <td>  ${result[i].media_elektronik}  </td> 
                            <td>  ${result[i].media_sosial}  </td> 
                            </tr>`
                 }
                 $('#tbody-dikmasMonth').html(table);
                 <?php $mobile = detect_mobile();
                    if ($mobile === true) { ?>

                     $('#tableDikmasMonth').DataTable({
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

     function topDikmasYear(firstDay, lastDay) {
         $.ajax({
             type: "POST",
             url: "<?php echo base_url(); ?>executive/statistik_executive/getDikmasYear",
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
                            <td>  ${result[i].media_cetak}  </td> 
                            <td>  ${result[i].media_elektronik}  </td> 
                            <td>  ${result[i].media_sosial}  </td> 
                            </tr>`
                 }
                 $('#tbody-dikmasYear').html(table);
                 <?php $mobile = detect_mobile();
                    if ($mobile === true) { ?>

                     $('#tableDikmasYear').DataTable({
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