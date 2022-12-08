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
                         <span>A : <span id="simbarua"></span></span> <br>
                         <span>C : <span id="simbaruc"></span></span><br>
                         <span>D : <span id="simbarud"></span></span><br>
                     </div>
                     <div class="col-md-3">
                         <span>Perpanjangan</span> <br>
                         <span>A : <span id="simperpanjangana"></span></span> <br>
                         <span>AU : <span id="simperpanjanganau"></span></span> <br>
                         <span>C : <span id="simperpanjanganb1"></span></span><br>
                         <span>C1 : <span id="simperpanjanganb1u"></span></span><br>
                         <span>C2 : <span id="simperpanjanganb2"></span></span><br>
                         <span>D : <span id="simperpanjanganb2u"></span></span><br>
                         <span>D1 : <span id="simperpanjanganc"></span></span><br>
                         <span>B1 : <span id="simperpanjanganc1"></span></span><br>
                         <span>B1U : <span id="simperpanjanganc2"></span></span><br>
                         <span>B2 : <span id="simperpanjangand"></span></span><br>
                         <span>B2U : <span id="simperpanjangand1"></span></span><br>
                     </div>
                     <div class="col-md-3">
                         <span>Peningkatan</span> <br>
                         <span>AU : <span id="simpeningkatanau"></span></span> <br>
                         <span>B1 : <span id="simpeningkatanb1"></span></span><br>
                         <span>B1U : <span id="simpeningkatanb1u"></span></span><br>
                         <span>B2 : <span id="simpeningkatanb2"></span></span><br>
                         <span>B2U : <span id="simpeningkatanb2u"></span></span><br>
                     </div>
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
                 $("#overlay").fadeOut(300);
                 $('#simThisDay').text(result.thisDay)
                 $('#simThisMonth').text(result.thisMonth)
                 $('#simThisYear').text(result.thisYear)
                 $('#simbarua').text(result.detailsthisDay.baru_a)
                 $('#simbaruc').text(result.detailsthisDay.baru_c)
                 $('#simbarud').text(result.detailsthisDay.baru_d)
                 $('#simperpanjangana').text(result.detailsthisDay.perpanjangan_a)
                 $('#simperpanjanganau').text(result.detailsthisDay.perpanjangan_au)
                 $('#simperpanjanganb1').text(result.detailsthisDay.perpanjangan_b1)
                 $('#simperpanjanganb1u').text(result.detailsthisDay.perpanjangan_b1u)
                 $('#simperpanjanganb2').text(result.detailsthisDay.perpanjangan_b2)
                 $('#simperpanjanganb2u').text(result.detailsthisDay.perpanjangan_b2u)
                 $('#simperpanjanganc').text(result.detailsthisDay.perpanjangan_c)
                 $('#simperpanjanganc1').text(result.detailsthisDay.perpanjangan_c1)
                 $('#simperpanjanganc2').text(result.detailsthisDay.perpanjangan_c2)
                 $('#simperpanjangand').text(result.detailsthisDay.perpanjangan_d)
                 $('#simperpanjangand1').text(result.detailsthisDay.perpanjangan_d1)
                 $('#simpeningkatanau').text(result.detailsthisDay.peningkatan_au)
                 $('#simpeningkatanb1').text(result.detailsthisDay.peningkatan_b1)
                 $('#simpeningkatanb1u').text(result.detailsthisDay.peningkatan_b1u)
                 $('#simpeningkatanb2').text(result.detailsthisDay.peningkatan_b2)
                 $('#simpeningkatanb2u').text(result.detailsthisDay.peningkatan_b2u)

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