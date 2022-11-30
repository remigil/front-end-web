 <div class="container-fluid">
     <div class="row">
         <div class="col-md-6">
             <a href="<?= base_url('executive/Polda_executive/statistik_polda/' . $data['id']) ?>" style="color:#0a0a0a ;" class="fs-6"><i class="fas fa-less-than"></i> Kembali</a>
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
                 <h2>DATA <span style="text-transform:uppercase ; color:#2e93e6">Dikmaslantas <span style="color:#000;">Polda&nbsp;<?= $data['poldaid']['name_polda']; ?></span></span> </h2>
             </div>
             <div class="col-sm-8 col-md-7">
                 <div class="row m-2">
                     <div class="col-md-4 col-sm-4 col-xl-4 align-self-center">
                         <div class="card p-1 mt-2 mb-2" style="border-radius: 20px !important; border-color:#D9D9D9">
                             <div class="card-body p-1">
                                 <div class="row justify-content-between align-items-center" style="height: 80px;">
                                     <div class="col-md-7">
                                         <h4 class="mb-0 ms-3">Harian</h4>
                                     </div>
                                     <div class="col-md-5 float-end">
                                         <h1 class="text-center mb-0" style="color:#464646; font-size:25px; color:#2e93e6;" id="dikmasThisDay"></h1>
                                         <p class="text-center mb-0">Dikmaslantas</p>
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
                                         <h4 class="mb-0 ms-3">Bulanan</h4>
                                     </div>
                                     <div class="col-md-5 float-end">
                                         <h1 class="text-center mb-0" style="color:#464646; font-size:25px; color:#2e93e6;" id="dikmasThisMonth"></h1>
                                         <p class="text-center mb-0">Dikmaslantas</p>
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
                                         <h4 class="mb-0 ms-3">Tahunan</h4>
                                     </div>
                                     <div class="col-md-5 float-end">
                                         <h1 class="text-center mb-0" style="color:#464646; font-size:25px; color:#2e93e6;" id="dikmasThisYear"></h1>
                                         <p class="text-center mb-0">Dikmaslantas</p>
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
         <div class="row m-3" style="font-size: 16px; display:none;">
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
                                 <h5>Ranking Polda Data Dikmaslantas Tertinggi <?= date('d M Y'); ?></h5>
                                 <div class="card shadow-sm">
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
                         </div>
                     </div>
                     <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                         <div class="row">
                             <div class="col-md-12 mt-3">
                                 <h5>Ranking Polda Data Dikmaslantas Tertinggi <?= date('M Y'); ?></h5>
                                 <div class="card shadow-sm">
                                     <table class="table table-bordered table-hover" id="tableDikmasMonth">
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
                         </div>
                     </div>
                     <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                         <div class="row">
                             <div class="col-md-12 mt-3">
                                 <h5>Ranking Polda Data Dikmaslantas Tertinggi <?= date('Y'); ?></h5>
                                 <div class="card shadow-sm">
                                     <table class="table table-bordered table-hover" id="tableDikmasYear">
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
         <div class="row" style="display:none;">
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
         let id = '<?= $data['id'] ?>'
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
             url: "<?php echo base_url(); ?>executive/statistik_polda_executive/getDetailStatistikDikmaslantas/" + id,
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

         topDikmasDay(yesterday, id);
         topDikmasMonth(firstDayMonth, lastDayMonth, id);
         topDikmasYear(firstDay, lastDay, id)

         ditkamsel_daily(yesterday, firstDayMonth, lastDayMonth, firstDay, lastDay, id)

         DikmaslineChart(seven_daysAgo, yesterday, id)
         jam();
     })


     $('#limit_showData').on('change', function() {
         let filter = 0
         var limit = $('#limit_showData').val();
         var yesterday = new Date().toLocaleDateString('en-GB').split('/').reverse().join('-')
         $.ajax({
             type: "POST",
             url: "<?php echo base_url(); ?>executive/statistik_polda_executive/getDetailStatistikDikmaslantas/" + id,
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


     function ditkamsel_daily(yesterday, firstDayMonth, lastDayMonth, firstDay, lastDay, id) {
         $.ajax({
             type: "POST",
             url: "<?php echo base_url(); ?>executive/statistik_polda_executive/getDitkamselDate/" + id,
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
         let id = '<?= $data['id'] ?>'
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
                 url: "<?php echo base_url(); ?>executive/statistik_polda_executive/getDetailStatistikDikmaslantas/" + id,
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

             DikmaslineChart(start_date, end_date, id)
         }
     }

     function DikmaslineChart(seven_daysAgo, yesterday, id) {

         $.ajax({
             type: "POST",
             url: "<?php echo base_url(); ?>executive/statistik_polda_executive/getLineDikmas/" + id,
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

     function topDikmasDay(yesterday, id) {
         $.ajax({
             type: "POST",
             url: "<?php echo base_url(); ?>executive/statistik_polda_executive/getTopDikmas/" + id,
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

     function topDikmasMonth(firstDayMonth, lastDayMonth, id) {
         $.ajax({
             type: "POST",
             url: "<?php echo base_url(); ?>executive/statistik_polda_executive/getDikmasMonth/" + id,
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

     function topDikmasYear(firstDay, lastDay, id) {
         $.ajax({
             type: "POST",
             url: "<?php echo base_url(); ?>executive/statistik_polda_executive/getDikmasYear/" + id,
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