 <div class="container-fluid">
     <div class="row">
         <div class="col-md-6">
             <a href="<?= base_url('executive/Polda_executive/statistik_polda/' . $data['id']) ?>" style="color:#0a0a0a ;" class="fs-6"><i class="fas fa-less-than"></i> Kembali</a>
         </div>
         <div class="col-md-6 text-end align-self-center">
             <a href="<?= ENV_API_BASE_URL ?>v1/laporan_harian/langgar" type="button" button class="btn btn-outline-primary btn-lg" style="width: 200px; border-color:#0007D8;">Export Laporan</a>
         </div>
     </div>

     <div class="card mt-5 shadow" style="border-radius:36px !important;">
         <div class="row m-2">
             <div class="col-sm-2 col-md-2 align-self-center">
                 <h4>STATISTIK DATA</h4>
                 <h4> <span style="text-transform:uppercase ; color:#0007D8">Pelanggaran Lalu Lintas </span> </h4>
                 <h4 class="text-uppercase"><?= $data['poldaid']['name_polda']; ?> </h4>
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
                                         <h3 class="text-center mb-0" style="color:#464646; font-size:20px; color:#0007D8;" id="garlantasThisDay"></h3>
                                         <p class="text-center mb-0">Kejadian</p>
                                     </div>
                                     <div class="col-md-12">
                                         <div class="row">
                                             <div class="col-md-4 ms-n1">
                                                 <span class="fw-bold" style="font-size:12px;">PB : <span class="text-danger" style="padding:5px" id="garlantasThisDayPB"></span></span>
                                             </div>
                                             <div class="col-md-4 ms-n1">
                                                 <span class="fw-bold" style="font-size:12px;">PS : <span class="text-warning" style="padding:5px" id="garlantasThisDayPS"></span></span>
                                             </div>
                                             <div class="col-md-4 ms-n1">
                                                 <span class="fw-bold" style="font-size:12px;">PR : <span class="text-success" style="padding:5px" id="garlantasThisDayPR"></span></span>
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
                                         <h5 class="mb-0 ms-3">Bulan Ini</h5>
                                     </div>
                                     <div class="col-md-5 float-end">
                                         <h3 class="text-center mb-0" style="color:#464646; font-size:20px; color:#0007D8;" id="garlantasThisMonth"></h3>
                                         <p class="text-center mb-0">Kejadian</p>
                                     </div>
                                     <div class="col-md-12">
                                         <div class="row">
                                             <div class="col-md-4 ms-n1">
                                                 <span class="fw-bold" style="font-size:12px;">PB : <span class="text-danger" style="padding:5px" id="garlantasThisMonthPB"></span></span>
                                             </div>
                                             <div class="col-md-4 ms-n1">
                                                 <span class="fw-bold" style="font-size:12px;">PS : <span class="text-warning" style="padding:5px" id="garlantasThisMonthPS"></span></span>
                                             </div>
                                             <div class="col-md-4 ms-n1">
                                                 <span class="fw-bold" style="font-size:12px;">PR : <span class="text-success" style="padding:5px" id="garlantasThisMonthPR"></span></span>
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
                                         <h3 class="text-center mb-0" style="color:#464646; font-size:20px; color:#0007D8;" id="garlantasThisYear"></h3>
                                         <p class="text-center mb-0">Kejadian</p>
                                     </div>
                                     <div class="col-md-12">
                                         <div class="row">
                                             <div class="col-md-4 ms-n1">
                                                 <span class="fw-bold" style="font-size:12px;">PB : <span class="text-danger" style="padding:5px" id="garlantasThisYearPB"></span></span>
                                             </div>
                                             <div class="col-md-4 ms-n1">
                                                 <span class="fw-bold" style="font-size:12px;">PS : <span class="text-warning" style="padding:5px" id="garlantasThisYearPS"></span></span>
                                             </div>
                                             <div class="col-md-4 ms-n1">
                                                 <span class="fw-bold" style="font-size:12px;">PR : <span class="text-success" style="padding:5px" id="garlantasThisYearPR"></span></span>
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
                         <div class="fw-bold" style="height:25px; width:25px; line-height:25px; background-color:#ff0000; border-radius:50%; text-align:center; font-size:12px; color:white;">PB</div>
                     </div>
                     <div class="col-md-1 me-n5">
                         <span style="margin-left:-90px">Pelanggaran Berat</span>
                     </div>
                     <div class="col-md-1">
                         <div class="fw-bold" style="height:25px; width:25px; line-height:25px; background-color:#FFFF00; border-radius:50%; text-align:center; font-size:12px; color:black;">PS</div>
                     </div>
                     <div class="col-md-1 me-n5">
                         <span style="margin-left:-90px">Pelanggaran Sedang</span>
                     </div>
                     <div class="col-md-1">
                         <div class="fw-bold" style="height:25px; width:25px; line-height:25px; background-color:#00FF00; border-radius:50%; text-align:center; font-size:12px; color:black;">PR</div>
                     </div>
                     <div class="col-md-1 me-n5">
                         <span style="margin-left:-90px">Pelanggaran Ringan</span>
                     </div>
                 </div>
             </div>
         </div>
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
                 <button type="button" class="btn btn-info float-end btn-sm" style="width: 100%;" onclick="ButtonFilter()">Tampilkan</button>

             </div>

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
         var polda_id = $('#polda_,#polda_id').val();

         date.setDate(date.getDate() - 6);
         var seven_daysAgo = date.toLocaleDateString("en-GB").split('/').reverse().join('-');

         var limit = $('#limit_showData').val();
         $.ajax({
             type: "POST",
             url: "<?php echo base_url(); ?>executive/statistik_polda_executive/getDetailStatistikGarlantas/" + id,
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
                 // Chart Kecelakaan Lalu Lintas

                 // chart laka
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
         let id = '<?= $data['id'] ?> '

         let filter = 0
         var limit = $('#limit_showData').val();
         var yesterday = new Date().toLocaleDateString('en-GB').split('/').reverse().join('-')
         $.ajax({
             type: "POST",
             url: "<?php echo base_url(); ?>executive/statistik_polda_executive/getDetailStatistikGarlantas/" + id,
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
                 // Chart Kecelakaan Lalu Lintas

                 // chart laka
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
         let id = '<?= $data['id'] ?> '

         $.ajax({
             type: "POST",
             url: "<?php echo base_url(); ?>executive/statistik_polda_executive/getGarlantasDate/" + id,
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
                 url: "<?php echo base_url(); ?>executive/statistik_polda_executive/getDetailStatistikGarlantas/" + id,
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
         let id = '<?= $data['id'] ?> '

         $.ajax({
             type: "POST",
             url: "<?php echo base_url(); ?>executive/statistik_polda_executive/getLineGarlantas/" + id,
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
                             name: 'Pelanggaran Berat',
                             type: 'column',
                             data: results.data.polda_pelanggaran_berat,
                             color: "#CB2D3E"
                         }, {
                             name: 'Pelanggaran Sedang',
                             type: 'column',
                             data: results.data.polda_pelanggaran_sedang,
                             color: "#E8D42F"
                         }, {
                             name: 'Luka Ringan',
                             type: 'column',
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
                 } else {
                     var chart2 = {
                         series: [{
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
                 url: "<?php echo base_url(); ?>executive/statistik_polda_executive/exportDatagarlantas/" + id,
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
         let id = '<?= $data['id'] ?> '

         $.ajax({
             type: "POST",
             url: "<?php echo base_url(); ?>executive/statistik_polda_executive/getTopGarlantas/" + id,
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
                            <td>  ${result[i].pelanggaran_berat}  </td> 
                            <td>  ${result[i].pelanggaran_sedang}  </td> 
                            <td>  ${result[i].pelanggaran_ringan}  </td> 
                            <td>  ${result[i].teguran}  </td>
                            <td>  ${nf.format(result[i].total)}  </td> 
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

     function topGarlantasMonth(firstDayMonth, lastDayMonth) {
         let id = '<?= $data['id'] ?> '

         $.ajax({
             type: "POST",
             url: "<?php echo base_url(); ?>executive/statistik_polda_executive/getGarlantasMonth/" + id,
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
                            <td>  ${result[i].pelanggaran_berat}  </td> 
                            <td>  ${result[i].pelanggaran_sedang}  </td> 
                            <td>  ${result[i].pelanggaran_ringan}  </td> 
                            <td>  ${result[i].teguran}  </td>
                            <td>  ${result[i].total}  </td> 
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

     function topGarlantasYear(firstDay, lastDay) {
         let id = '<?= $data['id'] ?> '

         $.ajax({
             type: "POST",
             url: "<?php echo base_url(); ?>executive/statistik_polda_executive/getGarlantasYear/" + id,
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
                            <td>  ${result[i].pelanggaran_berat}  </td> 
                            <td>  ${result[i].pelanggaran_sedang}  </td> 
                            <td>  ${result[i].pelanggaran_ringan}  </td> 
                            <td>  ${result[i].teguran}  </td>
                            <td>  ${result[i].total}  </td> 
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