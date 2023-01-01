 <div class="container-fluid">
     <div class="row">
         <div class="col-md-6">
             <a href="<?= base_url('executive/Polda_executive/statistik_polda/' . $data['id']) ?>" style="color:#0a0a0a ;" class="fs-6"><i class="fas fa-less-than"></i> Kembali</a>
         </div>
         <div class="col-md-6 text-end align-self-center">
             <a href="<?= ENV_API_BASE_URL ?>v1/laporan_harian/laka" type="button" button class="btn btn-outline-primary btn-lg" style="width: 200px; border-color:#0007D8;">Export Laporan</a>
         </div>
     </div>

     <div class="card mt-5 shadow" style="border-radius:36px !important;">
         <div class="row m-2">
             <div class="col-sm-2 col-md-2 align-self-center">
                 <h4>STATISTIK DATA</h4>
                 <h4> <span style="text-transform:uppercase ; color:#0007D8">Kecelakaan Lalu Lintas </span> </h4>
                 <h4 class="text-uppercase"><?= $data['poldaid']['name_polda']; ?> </h4>
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
                                         <h1 class="text-center mb-0" style="color:#464646; font-size:20px; color:#0007D8;" id="lakaThisDay"></h1>
                                         <p class="text-center mb-0">Kejadian</p>
                                     </div>
                                     <div class="col-md-12 ">
                                         <div class="row">
                                             <div class="col-md-4">
                                                 <span class="fw-bold" style="font-size:12px">MD : <span class="text-danger" style=" padding:5px" id="lakaThisDayMD"></span></span>
                                             </div>
                                             <div class="col-md-4">
                                                 <span class="fw-bold" style="font-size:12px">LB : <span class="text-warning" style=" padding:5px" id="lakaThisDayLB"></span></span>
                                             </div>
                                             <div class="col-md-4">
                                                 <span class="fw-bold" style="font-size:12px">LR : <span class="text-success" style=" padding:5px" id="lakaThisDayLR"></span></span>
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
                                         <!-- <h5 class="mb-0 ms-3" >Bulan Ini</h5> -->
                                     </div>
                                     <div class="col-md-5 float-end">
                                         <h1 class="text-center mb-0" style="color:#464646; font-size:20px; color:#0007D8;" id="lakaThisMonth"></h1>
                                         <p class="text-center mb-0">Kejadian</p>
                                     </div>
                                     <div class="col-md-12 ">
                                         <div class="row">
                                             <div class="col-md-4">
                                                 <span class="fw-bold" style="font-size:12px">MD : <span class="text-danger" style=" padding:5px" id="lakaThisMonthMD"></span></span>
                                             </div>
                                             <div class="col-md-4">
                                                 <span class="fw-bold" style="font-size:12px">LB : <span class="text-warning" style=" padding:5px" id="lakaThisMonthLB"></span></span>
                                             </div>
                                             <div class="col-md-4">
                                                 <span class="fw-bold" style="font-size:12px">LR : <span class="text-success" style=" padding:5px" id="lakaThisMonthLR"></span></span>
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
                                         <h1 class="text-center mb-0" style="color:#464646; font-size:20px; color:#0007D8;" id="lakaThisYear"></h1>
                                         <p class="text-center mb-0">Kejadian</p>
                                     </div>
                                     <div class="col-md-12 ">
                                         <div class="row">
                                             <div class="col-md-4">
                                                 <span class="fw-bold" style="font-size:12px">MD : <span class="text-danger" style=" padding:5px" id="lakaThisYearMD"></span></span>
                                             </div>
                                             <div class="col-md-4">
                                                 <span class="fw-bold" style="font-size:12px">LB : <span class="text-warning" style=" padding:5px" id="lakaThisYearLB"></span></span>
                                             </div>
                                             <div class="col-md-4">
                                                 <span class="fw-bold" style="font-size:12px">LR : <span class="text-success" style=" padding:5px" id="lakaThisYearLR"></span></span>
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
                                 <div class="fw-bold" style="height:25px; width:25px; line-height:25px; background-color:#ff0000; border-radius:50%; text-align:center; font-size:12px; color:white;">MD</div>
                             </div>
                             <div class="col-md-1 me-n5">
                                 <span style="margin-left:-80px">Meninggal Dunia</span>
                             </div>
                             <div class="col-md-1">
                                 <div class="fw-bold" style="height:25px; width:25px; line-height:25px; background-color:#FFFF00; border-radius:50%; text-align:center; font-size:12px; color:black;">LB</div>
                             </div>
                             <div class="col-md-1 me-n5">
                                 <span style="margin-left:-80px">Luka Berat</span>
                             </div>
                             <div class="col-md-1">
                                 <div class="fw-bold" style="height:25px; width:25px; line-height:25px; background-color:#00FF00; border-radius:50%; text-align:center; font-size:12px; color:black;">LR</div>
                             </div>
                             <div class="col-md-1 me-n5">
                                 <span style="margin-left:-80px">Luka Ringan</span>
                             </div>
                         </div>
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

             <button type="button" class="btn btn-info float-end btn-sm" style="width: 100%;" onclick="ButtonFilter()">Tampilkan</button>
             <a href="http://34.143.227.90:3001/v1/laporan_harian/export_laphar" type="button" button class="btn btn-outline-info float-end btn-sm mt-2" style="width: 100%; border-color:#007DD8;">Export Laporan</a>


         </div>
     </div>
 <?php } else { ?>




 <?php } ?>

 <div class="container-fluid">

     <div class="card">
         <div class="row">
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
     </div>

 </div>
 <script src="<?php echo base_url(); ?>assets/admin/libs/sweetalert2/sweetalert2.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
 <script>
     $(document).ready(function() {
         let id = '<?= $data['id'] ?> '
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
             url: "<?php echo base_url(); ?>executive/statistik_polda_executive/getDetailStatistikLakalantas/" + id,
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
         let id = '<?= $data['id'] ?> '
         let filter = 0
         var limit = $('#limit_showData').val();
         var yesterday = new Date().toLocaleDateString('en-GB').split('/').reverse().join('-')
         $.ajax({
             type: "POST",
             url: "<?php echo base_url(); ?>executive/statistik_polda_executive/getDetailStatistikLakalantas/" + id,
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
         let id = '<?= $data['id'] ?> '

         $.ajax({
             type: "POST",
             url: "<?php echo base_url(); ?>executive/statistik_polda_executive/getLakaDate/" + id,
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
         let id = '<?= $data['id'] ?> '

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
                 url: "<?php echo base_url(); ?>executive/statistik_polda_executive/getDetailStatistikLakalantas/" + id,
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
         let id = '<?= $data['id'] ?>'

         $.ajax({
             type: "POST",
             url: "<?php echo base_url(); ?>executive/statistik_polda_executive/getLineLaka/" + id,
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
                             name: '<h6>Total Laka</h6>',
                             type: 'column',
                             data: results.data.polda_insiden_kecelakaan,
                             color: "#11347A"
                         }, {
                             name: '<h6>Meninggal Dunia</h6>',
                             type: 'column',
                             data: results.data.polda_meninggal_dunia,
                             color: "#CB2D3E"
                         }, {
                             name: '<h6>Luka Berat</h6>',
                             type: 'column',
                             data: results.data.polda_luka_berat,
                             color: "#E8D42F"
                         }, {
                             name: '<h6>Luka Ringan</h6>',
                             type: 'column',
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
                 } else {
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
                 url: "<?php echo base_url(); ?>executive/statistik_polda_executive/exportDatalakalantas/" + id,
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
         let id = '<?= $data['id'] ?> '

         $.ajax({
             type: "POST",
             url: "<?php echo base_url(); ?>executive/statistik_polda_executive/getTopLaka/" + id,
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
         let id = '<?= $data['id'] ?> '

         $.ajax({
             type: "POST",
             url: "<?php echo base_url(); ?>executive/statistik_polda_executive/getLakaMonth/" + id,
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
         let id = '<?= $data['id'] ?> '

         $.ajax({
             type: "POST",
             url: "<?php echo base_url(); ?>executive/statistik_polda_executive/getLakaYear/" + id,
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