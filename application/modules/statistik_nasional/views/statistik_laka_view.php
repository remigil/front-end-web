 <div class="container-fluid">
     <div class="row">
         <div class="col-md-6">
             <a href="<?= base_url('statistik_nasional') ?>" style="color:#0a0a0a ;" class="fs-6"><i class="fas fa-less-than"></i> Kembali</a>
         </div>
         <div class="col-md-6 text-end align-self-center">
             <a href="http://34.143.227.90:3001/v1/laporan_harian/export_laphar" type="button" button class="btn btn-outline-primary btn-lg" style="width: 200px; border-color:#0007D8;">Export Laporan</a>
             <!-- <button type="button" class="btn btn-outline-primary float-end" id="btn_export" style="width: 100%;" onclick="ButtonExport()" style="width: 200px; border-color:#0007D8;">Tampilkan</button> -->
             <!-- <a href="http://34.143.227.90:3001/v1/laporan_harian/export_laphar" class="text-center" id="btn_export"><button class="btn btn-outline-primary" style="width: 200px; border-color:#0007D8;">Export Laporan</button></a> -->
             <!-- <a href="http://34.143.227.90:3001/v1/laporan_harian/export_laphar" class="text-center"><button class="btn btn-outline-primary" style="width: 200px; border-color:#0007D8;">Export Laporan</button></a> -->
         </div>
     </div>

     <div class="card mt-5 p-1 shadow" style="border-radius:36px !important;">
         <div class="row m-2">
             <div class="col-sm-3 col-md-4 align-self-center">
                 <h2>DATA <span style="text-transform:uppercase ; color:#2e93e6">Kecelakaan <span style="color:#000;">Nasional</span></span> </h2>
             </div>
             <div class="col-sm-9 col-md-8">
                 <div class="row m-2">
                     <div class="col-md-4 col-sm-4 col-xl-4 align-self-center">
                         <div class="card p-1 mt-2 mb-2" style="border-radius: 20px !important; border-color:#D9D9D9; width:105%">
                             <div class="card-body p-1">
                                 <div class="row justify-content-between align-items-center" style="height: 80px;">
                                     <div class="col-md-7">
                                         <h5 class="mb-0 ms-3">Hari Ini</h5>
                                     </div>
                                     <div class="col-md-5 float-end">
                                         <h1 class="text-center mb-0" style="color:#464646; font-size:25px; color:#2e93e6;" id="lakaThisDay"></h1>
                                         <p class="text-center mb-0">Kejadian</p>
                                     </div>
                                     <div class="col-md-12 ms-3">
                                         <div class="row">
                                             <div class="col-md-4">
                                                 <span class="fw-bold">MD : <span class="text-danger" style=" padding:5px" id="lakaThisDayMD"></span></span>
                                             </div>
                                             <div class="col-md-4">
                                                 <span class="fw-bold">LB : <span class="text-warning" style=" padding:5px" id="lakaThisDayLB"></span></span>
                                             </div>
                                             <div class="col-md-4">
                                                 <span class="fw-bold">LR : <span class="text-success" style=" padding:5px" id="lakaThisDayLR"></span></span>
                                             </div>
                                         </div>

                                     </div>
                                 </div>
                             </div>

                         </div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xl-4 align-self-center">
                         <div class="card p-1 mt-2 mb-2" style="border-radius: 20px !important; border-color:#D9D9D9; width:105%">
                             <div class="card-body p-1">
                                 <div class="row justify-content-between align-items-center" style="height: 80px;">
                                     <div class="col-md-7">
                                         <h5 class="mb-0 ms-3">Bulan Ini</h5>
                                     </div>
                                     <div class="col-md-5 float-end">
                                         <h1 class="text-center mb-0" style="color:#464646; font-size:25px; color:#2e93e6;" id="lakaThisMonth"></h1>
                                         <p class="text-center mb-0">Kejadian</p>
                                     </div>
                                     <div class="col-md-12 ms-3">
                                         <div class="row">
                                             <div class="col-md-4">
                                                 <span class="fw-bold">MD : <span class="text-danger" style=" padding:5px" id="lakaThisMonthMD"></span></span>
                                             </div>
                                             <div class="col-md-4">
                                                 <span class="fw-bold">LB : <span class="text-warning" style=" padding:5px" id="lakaThisMonthLB"></span></span>
                                             </div>
                                             <div class="col-md-4">
                                                 <span class="fw-bold">LR : <span class="text-success" style=" padding:5px" id="lakaThisMonthLR"></span></span>
                                             </div>
                                         </div>
                                     </div>
                                 </div>

                             </div>
                         </div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xl-4 align-self-center">
                         <div class="card p-1 mt-2 mb-2" style="border-radius: 20px !important; border-color:#D9D9D9;  width:105%">
                             <div class="card-body p-1">
                                 <div class="row justify-content-between align-items-center" style="height: 80px;">
                                     <div class="col-md-7">
                                         <h5 class="mb-0 ms-3">Tahun Ini</h5>
                                     </div>
                                     <div class="col-md-5 float-end">
                                         <h1 class="text-center mb-0" style="color:#464646; font-size:25px; color:#2e93e6;" id="lakaThisYear"></h1>
                                         <p class="text-center mb-0">Kejadian</p>
                                     </div>
                                     <div class="col-md-12 ms-3">
                                         <div class="row">
                                             <div class="col-md-4">
                                                 <span class="fw-bold">MD : <span class="text-danger" style=" padding:5px" id="lakaThisYearMD"></span></span>
                                             </div>
                                             <div class="col-md-4">
                                                 <span class="fw-bold">LB : <span class="text-warning" style=" padding:5px" id="lakaThisYearLB"></span></span>

                                             </div>
                                             <div class="col-md-4">
                                                 <span class="fw-bold">LR : <span class="text-success" style=" padding:5px" id="lakaThisYearLR"></span></span>
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
 <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Data Kecelekaan</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <div class="row">
                     <div class="col-md-12">
                         <span>Hari Ini</span> <br>
                         <span>Insiden Kejadian : 10</span> <br>
                         <span>Korban Luka Berat : 10</span><br>
                         <span>Korban Luka Ringan : 10</span><br>
                         <span>Korban Meninggal Dunia : 10</span><br>
                     </div>
                 </div>
             </div>

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

             <button type="button" class="btn btn-primary float-end btn-sm" style="width: 100%;" onclick="ButtonFilter()">Tampilkan</button>
             <a href="http://34.143.227.90:3001/v1/laporan_harian/export_laphar" type="button" button class="btn btn-outline-primary float-end btn-sm mt-2" style="width: 100%; border-color:#0007D8;">Export Laporan</a>


         </div>
     </div>
 <?php } else { ?>
 <?php } ?>

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
                         <h5 style="text-align: center;">Ranking Polda Data Kecelakaan Tertinggi <?= date('d M Y'); ?></h5>
                         <!-- <div class="card shadow-sm"> -->
                         <center>
                             <table class="table table-bordered table-hover" id="tableLakaDay" style="background:white; width:70%">
                                 <thead style="background-color:#0007D8; color:#fff;">
                                     <tr class="text-center">
                                         <th scope="col">No</th>
                                         <th scope="col">Polda</th>
                                         <th scope="col">Meninggal Dunia</th>
                                         <th scope="col">Luka Berat</th>
                                         <th scope="col">Luka Ringan</th>
                                         <th scope="col">Insiden Kejadian</th>
                                         <th scope="col">Kerugian Material</th>
                                     </tr>
                                 </thead>
                                 <tbody id="tbody-lakaDay">
                                 </tbody>
                             </table>
                         </center>
                         <!-- </div> -->
                     </div>
                 </div>
             </div>
             <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                 <div class="row">
                     <div class="col-md-9">
                         <div class="row">
                             <div class="col-md-4">
                                 <input class="form-control form-control-lg" type="date" name="" id="">
                             </div>
                             <div class="col-md-4">
                                 <input class="form-control form-control-lg" type="date" name="" id="">
                             </div>
                             <div class="col-md-2">
                                 <button type="button" class="btn btn-primary float-end btn-lg" style="width: 100%;" onclick="ButtonFilter()">Tampilkan</button>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-12 mt-5" style="line-height: 0.5;">
                         <h5 style="text-align: center;">Ranking Polda Data Kecelakaan Tertinggi <?= date('M Y'); ?></h5>
                         <!-- <div class="card shadow-sm"> -->
                         <center>
                             <table class="table table-bordered table-hover" id="tableLakaMonth" style="background:white; width:70%">
                                 <thead style="background-color:#0007D8; color:#fff;">
                                     <tr class="text-center">
                                         <th scope="col">No</th>
                                         <th scope="col">Polda</th>
                                         <th scope="col">Meninggal Dunia</th>
                                         <th scope="col">Luka Berat</th>
                                         <th scope="col">Luka Ringan</th>
                                         <th scope="col">Insiden Kejadian</th>
                                         <th scope="col">Kerugian Material</th>
                                     </tr>
                                 </thead>
                                 <tbody id="tbody-lakaMonth">
                                 </tbody>
                             </table>
                         </center>

                         <!-- </div> -->
                     </div>
                 </div>
             </div>
             <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                 <div class="row">
                     <div class="col-md-9">
                         <!-- <label for="waktu" class="form-label text-uppercase">Waktu</label> -->
                         <div class="row">
                             <div class="col-md-4">
                                 <input class="form-control form-control-lg" type="date" name="" id="">
                             </div>
                             <div class="col-md-4">
                                 <input class="form-control form-control-lg" type="date" name="" id="">
                             </div>
                             <div class="col-md-2">
                                 <button type="button" class="btn btn-primary float-end btn-lg" style="width: 100%;" onclick="ButtonFilter()">Tampilkan</button>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-12 mt-5" style="line-height: 0.5;">
                         <h5 style="text-align: center;">Ranking Polda Data Kecelakaan Tertinggi <?= date('Y'); ?></h5>
                         <!-- <div class="card shadow-sm"> -->
                         <center>
                             <table class="table table-bordered table-hover" id="tableLakaYear" style="background:white; width:70%">
                                 <thead style="background-color:#0007D8; color:#fff;">
                                     <tr class="text-center">
                                         <th scope="col">No</th>
                                         <th scope="col">Polda</th>
                                         <th scope="col">Meninggal Dunia</th>
                                         <th scope="col">Luka Berat</th>
                                         <th scope="col">Luka Ringan</th>
                                         <th scope="col">Insiden Kejadian</th>
                                         <th scope="col">Kerugian Material</th>
                                     </tr>
                                 </thead>
                                 <tbody id="tbody-lakaYear">
                                 </tbody>
                             </table>
                             <!-- </div> -->
                         </center>
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
             url: "<?php echo base_url(); ?>executive/statistik_executive/getDetailStatistikLakalantas",
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
                 let polda_luka_berat = result.data.polda_luka_berat
                 let polda_luka_ringan = result.data.polda_luka_ringan
                 let polda_meninggal_dunia = result.data.polda_meninggal_dunia
                 let polda_insiden_kecelakaan = result.data.insiden_kecelakaan
                 // Chart Kecelakaan Lalu Lintas

                 // chart laka
                 var chart = {
                     series: [{
                         name: '<h6>Total Laka</h6>',
                         type: 'column',
                         data: polda_insiden_kecelakaan,
                         color: "#11347A"
                     }, {
                         name: '<h6>Meninggal Dunia</h6>',
                         type: 'column',
                         data: polda_meninggal_dunia,
                         color: "#CB2D3E"
                     }, {
                         name: '<h6>Luka Berat</h6>',
                         type: 'column',
                         data: polda_luka_berat,
                         color: "#E8D42F"
                     }, {
                         name: '<h6>Luka Ringan</h6>',
                         type: 'column',
                         data: polda_luka_ringan,
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

         topLakaDay(yesterday);
         topLakaMonth(firstDayMonth, lastDayMonth);
         topLakaYear(firstDay, lastDay)

         laka_daily(yesterday, firstDayMonth, lastDayMonth, firstDay, lastDay)

         LakalineChart(seven_daysAgo, yesterday)
         jam();
     })


     $('#limit_showData').on('change', function() {
         let filter = 0
         var limit = $('#limit_showData').val();
         var yesterday = new Date().toLocaleDateString('en-GB').split('/').reverse().join('-')
         $.ajax({
             type: "POST",
             url: "<?php echo base_url(); ?>executive/statistik_executive/getDetailStatistikLakalantas",
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
                 let polda_jumlah = result.data.insiden_kecelakaan
                 let polda_luka_berat = result.data.polda_luka_berat
                 let polda_luka_ringan = result.data.polda_luka_ringan
                 let polda_meninggal_dunia = result.data.polda_meninggal_dunia
                 // Chart Kecelakaan Lalu Lintas

                 // chart laka
                 var chart = {
                     series: [{
                         name: '<h6>Total Laka</h6>',
                         type: 'column',
                         data: polda_jumlah,
                         color: "#11347A"
                     }, {
                         name: '<h6>Meninggal Dunia</h6>',
                         type: 'column',
                         data: polda_meninggal_dunia,
                         color: "#CB2D3E"
                     }, {
                         name: '<h6>Luka Berat</h6>',
                         type: 'column',
                         data: polda_luka_berat,
                         color: "#E8D42F"
                     }, {
                         name: '<h6>Luka Ringan</h6>',
                         type: 'column',
                         data: polda_luka_ringan,
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


     function laka_daily(yesterday, firstDayMonth, lastDayMonth, firstDay, lastDay) {
         $.ajax({
             type: "POST",
             url: "<?php echo base_url(); ?>executive/statistik_executive/getLakaDate",
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
                 $('#lakaThisDay').text(result.thisDay)
                 $('#lakaThisDayLR').text(result.thisDayLR)
                 $('#lakaThisDayLB').text(result.thisDayLB)
                 $('#lakaThisDayMD').text(result.thisDayMD)
                 $('#lakaThisMonth').text(result.thisMonth)
                 $('#lakaThisMonthLR').text(result.thisMonthLR)
                 $('#lakaThisMonthLB').text(result.thisMonthLB)
                 $('#lakaThisMonthMD').text(result.thisMonthMD)
                 $('#lakaThisYear').text(result.thisYear)
                 $('#lakaThisYearLR').text(result.thisYearLR)
                 $('#lakaThisYearLB').text(result.thisYearLB)
                 $('#lakaThisYearMD').text(result.thisYearMD)
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
                 url: "<?php echo base_url(); ?>executive/statistik_executive/getDetailStatistikLakalantas",
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
                     let polda_jumlah = result.data.insiden_kecelakaan
                     let polda_luka_berat = result.data.polda_luka_berat
                     let polda_luka_ringan = result.data.polda_luka_ringan
                     let polda_meninggal_dunia = result.data.polda_meninggal_dunia

                     var chart = {
                         series: [{
                             name: '<h6>Total Laka</h6>',
                             type: 'column',
                             data: polda_jumlah,
                             color: "#11347A"
                         }, {
                             name: '<h6>Meninggal Dunia</h6>',
                             type: 'column',
                             data: polda_meninggal_dunia,
                             color: "#CB2D3E"
                         }, {
                             name: '<h6>Luka Berat</h6>',
                             type: 'column',
                             data: polda_luka_berat,
                             color: "#E8D42F"
                         }, {
                             name: '<h6>Luka Ringan</h6>',
                             type: 'column',
                             data: polda_luka_ringan,
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

             LakalineChart(start_date, end_date)
         }
     }

     function LakalineChart(seven_daysAgo, yesterday) {

         $.ajax({
             type: "POST",
             url: "<?php echo base_url(); ?>executive/Statistik_executive/getLineLaka",
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
                         name: '<h6>Total Laka</h6>',
                         type: 'line',
                         data: results.data.polda_insiden_kecelakaan,
                         color: "#11347A"
                     }, {
                         name: '<h6>Meninggal Dunia</h6>',
                         type: 'line',
                         data: results.data.polda_meninggal_dunia,
                         color: "#CB2D3E"
                     }, {
                         name: '<h6>Luka Berat</h6>',
                         type: 'line',
                         data: results.data.polda_luka_berat,
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

     function topLakaDay(yesterday) {
         $.ajax({
             type: "POST",
             url: "<?php echo base_url(); ?>executive/statistik_executive/getTopLaka",
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
                        <td>  ${result[i].meninggal_dunia}  </td> 
                        <td>  ${result[i].luka_berat}  </td> 
                        <td>  ${result[i].luka_ringan}  </td> 
                        <td>  ${result[i].insiden_kecelakaan}  </td>
                        <td>  ${nf.format(result[i].kerugian_material)}  </td> 
                        </tr>`
                 }
                 $('#tbody-lakaDay').html(table);
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

     function topLakaMonth(firstDayMonth, lastDayMonth) {
         $.ajax({
             type: "POST",
             url: "<?php echo base_url(); ?>executive/statistik_executive/getLakaMonth",
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
                            <td>  ${result[i].meninggal_dunia}  </td> 
                            <td>  ${result[i].luka_berat}  </td> 
                            <td>  ${result[i].luka_ringan}  </td> 
                            <td>  ${result[i].insiden_kecelakaan}  </td>
                            <td>  ${nf.format(result[i].kerugian_material)}  </td> 
                            </tr>`
                 }
                 $('#tbody-lakaMonth').html(table);
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

     function topLakaYear(firstDay, lastDay) {
         $.ajax({
             type: "POST",
             url: "<?php echo base_url(); ?>executive/statistik_executive/getLakaYear",
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
                            <td>  ${result[i].meninggal_dunia}  </td> 
                            <td>  ${result[i].luka_berat}  </td> 
                            <td>  ${result[i].luka_ringan}  </td> 
                            <td>  ${result[i].insiden_kecelakaan}  </td>
                            <td>  ${nf.format(result[i].kerugian_material)}  </td> 
                            </tr>`
                 }
                 $('#tbody-lakaYear').html(table);
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
 </script>