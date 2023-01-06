 <div class="container-fluid">
     <div class="row">
         <div class="col-md-6">
             <a href="<?= base_url('statistik_nasional') ?>" style="color:#0a0a0a ;" class="fs-6"><i class="fas fa-less-than"></i> Kembali</a>
         </div>
         <div class="col-md-6 text-end align-self-center">
             <a href="<?= ENV_API_BASE_URL ?>v1/laporan_harian/walpjr" type="button" button class="btn btn-outline-primary btn-lg" style="width: 200px; border-color:#0007D8;">Export Laporan</a>
             <!-- <a href="http://34.143.227.90:3001/v1/laporan_harian/export_laphar" type="button" button class="btn btn-outline-primary btn-lg" style="width: 200px; border-color:#0007D8;">Export Laporan</a> -->
         </div>
     </div>
     <div class="card shadow mt-2">
         <div class="row m-2">
             <div class="col-sm-12 col-md-12 align-self-center mt-2 ">
                 <span class="fw-bold fs-2">DATA <span style="text-transform:uppercase ; color:#0007D8">WAL & PJR</span></span>
                 <!-- <span class="fw-bold fs-2">DATA <span style="text-transform:uppercase ; color:#0007D8">WAL & PJR</span> SELURUH INDONESIA</span> -->
             </div>
         </div>
         <div class="card-body">
             <center>
                 <table class="table table-bordered table-hover" id="tableLakaYear" style="background:white; width:80%; line-height:0.8">
                     <thead style="background-color:#0007D8; color:#fff;">
                         <tr class="text-center">
                             <th scope="col">No</th>
                             <th scope="col">No Polisi</th>
                             <th scope="col">Tipe</th>
                             <th scope="col">Merek</th>
                             <th scope="col">Bahan Bakar</th>
                             <th scope="col">Ownership</th>
                         </tr>
                     </thead>
                     <tbody id="tbody-walpjrDay">
                     </tbody>
                 </table>
             </center>
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

         <div class="row">
             <div class="col-md-8">
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
             <div class="col-md-4">
                 <div class="card">
                     <div class="card-header">
                         <div id="titledonut"></div>
                     </div>
                     <div class="card-body">
                         <div class="main-chart">
                             <div id="charttype">
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

         // console.log(firstDay, lastDay)

         topWalpjrDay();
         WalpjrpieChart()
         WalpjrlineChart()
         jam();
     })


     function WalpjrlineChart() {

         $.ajax({
             type: "POST",
             url: "<?php echo base_url(); ?>executive/Statistik_executive/getBrandWalpjr",

             dataType: "JSON",
             success: function(results) {
                 $('#titleline').html(`<h4 class="card-title mb-0 text-uppercase">Merek Kendaraan</h1>`);
                 $("#chartdate").html(`<div id="chart2"></div>`);
                 var chart2 = {
                     series: [{
                         name: '<h6>Honda</h6>',
                         type: 'column',
                         data: [results.honda]
                     }, {
                         name: '<h6>Hyundai</h6>',
                         type: 'column',
                         data: [results.hyundai]
                     }, {
                         name: '<h6>No Desc</h6>',
                         type: 'column',
                         data: [results.nodesc]
                     }, {
                         name: '<h6>Yamaha</h6>',
                         type: 'column',
                         data: [results.yamaha]
                     }, ],
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
                     //  xaxis: {
                     //      categories: results.data.polda_name,
                     //      labels: {
                     //          show: true,
                     //          style: {
                     //              colors: ['#f70505'],
                     //              fontSize: '18px',
                     //              fontWeight: 400,
                     //          }
                     //      },
                     //      tickPlacement: 'between'
                     //  }

                 };



                 var walpjr = new ApexCharts(document.querySelector("#chart2"), chart2);
                 walpjr.render();
             }
         })
     }


     function topWalpjrDay() {
         $.ajax({
             type: "POST",
             url: "<?php echo base_url(); ?>executive/statistik_executive/getTopWalpjr",
             dataType: "JSON",

             success: function(result) {
                 $("#overlay").fadeOut(300);
                 var table = '';
                 let nf = new Intl.NumberFormat('en-US');
                 for (let i = 0; i < result.length; i++) {
                     let x = parseInt(i)
                     let no = x + 1
                     table += `<tr class="text-center"> 
                        <td>  ${no}  </td> 
                        <td>  ${result[i].no_vehicle}  </td>  
                        <td>  ${result[i].brand_vehicle}  </td> 
                        <td>  ${result[i].type_vehicle}  </td> 
                        <td>  ${result[i].fuel_vehicle}  </td> 
                        <td>  ${result[i].ownership_vehicle}  </td> 
                        </tr>`
                 }
                 $('#tbody-walpjrDay').html(table);
                 <?php $mobile = detect_mobile();
                    if ($mobile === true) { ?>

                     $('#tableWalpjrDay').DataTable({
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

     function WalpjrpieChart() {
         $.ajax({
             type: "POST",
             url: "<?php echo base_url(); ?>executive/Statistik_executive/getTypeWalpjr",
             dataType: "JSON",
             success: function(results) {
                 //  console.log(results);
                 $('#titledonut').html(`<h4 class="card-title mb-0 text-uppercase">Tipe Kendaraan</h1>`);
                 $("#charttype").html(`<div id="typechart"></div>`);
                 var options_type = {
                     series: results.total,
                     chart: {
                         height: 380,
                         type: 'pie',
                     },
                     labels: results.type,
                     responsive: [{
                         breakpoint: 480,
                         options: {
                             chart: {
                                 width: 200
                             },
                             legend: {
                                 position: 'bottom'
                             }
                         }
                     }],
                 };

                 var type = new ApexCharts(document.querySelector("#typechart"), options_type);
                 type.render();
             }
         })
     }
 </script>