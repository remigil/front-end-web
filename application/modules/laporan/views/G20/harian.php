
    <div class="row">
        <div class="col-md-4 mb-3" style="display: flex;">  
            <input required class="form-control" type="date" id="startdate" name="startdate" value="<?php echo date('Y-m-d')?>"> &nbsp;&nbsp;<span style="margin-top: 7px;">To</span>&nbsp;&nbsp;
            <input required class="form-control" type="date" id="enddate" name="enddate" value="<?php echo date('Y-m-d')?>">
            &nbsp;&nbsp;<button class="btn btn-primary" id="searchtgl">Cari</button>
        </div> 
    </div>
    <div class="row"> 

        <div class="col-md-12">
            <div class="row">
                <div class="card">
                    <div class="card-header bg-transparent border-bottom text-uppercase m-3 p-0">
                    <h5>Laporan Kegiatan</h5>
                    <span id="tglfilter2"></span>
                    </div>
                    <div class="card-body m-0 p-0">
                        <div class="main-chart">
                            <div id="chartLaporan1"></div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="card">
                    <div class="card-header bg-transparent border-bottom text-uppercase m-3 p-0">
                    <h5>Laporan IRSMS</h5> 
                    </div>
                    <div class="card-body m-0 p-0">
                        <div class="main-chart">
                            <div id="chartIRSMS1"></div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="card">
                    <div class="card-header bg-transparent border-bottom text-uppercase m-3 p-0">
                    <h5>Laporan IRSMS Material Loss</h5> 
                    </div>
                    <div class="card-body m-0 p-0">
                        <div class="main-chart">
                            <div id="chartIRSMS2"></div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="card">
                    <div class="card-header bg-transparent border-bottom text-uppercase m-3 p-0">
                    <h5>Petugas Aktif</h5>
                    <span id="tglfilter1"></span>
                    </div>
                    <div class="card-body m-0 p-0">
                        <div class="main-chart">
                            <div id="chartPetugasAktif1"></div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        
        <div class="col-md-6">
            <div class="row">
                <div class="card">
                    <div class="card-header bg-transparent border-bottom text-uppercase m-3 p-0">
                    <h5>Laporan Operasi</h5>
                    <span id="tglfilter3"></span>
                    </div>
                    <div class="card-body m-0 p-0">
                        <div class="main-chart">
                            <div id="chartOperasi1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 

        <div class="col-md-12">
            <div class="card row">
                <div class="card-header bg-transparent border-bottom text-uppercase m-3 p-0">
                    <h5>Petugas Aktif</h5> 
                </div>
                <div class="col-md-12" id="tablePetugas">
                    
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card row">
                <div class="card-header bg-transparent border-bottom text-uppercase m-3 p-0">
                    <h5>Laporan Kegiatan</h5> 
                </div>
                <div class="col-md-12" id="tableKegiatan">
                    
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card row">
                <div class="card-header bg-transparent border-bottom text-uppercase m-3 p-0">
                    <h5>Laporan IRSMS</h5> 
                </div>
                <div class="col-md-12" id="tableIRSMS">
                    
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card row">
                <div class="card-header bg-transparent border-bottom text-uppercase m-3 p-0">
                    <h5>Laporan Operasi</h5> 
                </div>
                <div class="col-md-12" id="tableOperasi">
                    
                </div>
            </div>
        </div>
</div>


<script>

    var optionsLaporan = null;
    var optionsOperasi = null;
    var dataTablePetugas;
    var dataTableKegiatan;
    var dataTableOperasi;

    $(document).ready(function() {
        
        function getReport(){
            $("#overlay").fadeIn(300); 
            $.ajax({
                type : "POST",
                url : "<?php echo base_url();?>laporan/Harian/getDayReport", 
                data : {
                    "start_date" : $('#startdate').val(),
                    "end_date" : $('#enddate').val(), 
                }, 
                dataType : "JSON",
                success : function(result){  
 
                    $('#chartPetugasAktif').remove();
                    $('#chartPetugasAktif1').html(`
                        <div id="chartPetugasAktif"></div>
                    `);

                    $('#chartLaporan').remove();
                    $('#chartLaporan1').html(`
                        <div id="chartLaporan"></div>
                    `);

                    // $('#chartIRSMS').remove();
                    // $('#chartIRSMS1').html(`
                    //     <div id="chartIRSMS"></div>
                    // `);

                    $('#chartOperasi').remove();
                    $('#chartOperasi1').html(`
                        <div id="chartOperasi"></div>
                    `);

                    $('#datatablePetugas').remove();
                    $('#tablePetugas').html(`
                        <table id="datatablePetugas" class="table table-bordered dt-responsive w-100" style="font-size: 10px;">
                            <thead> 
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Mobil</th>
                                    <th>Motor</th>
                                    <th>Tanpa Kendaraan</th>  
                                    <th>Total</th>
                                </tr>
                            </thead> 
                            <tbody id="isiPetugas"></tbody>
                        </table>
                    `);

                    $('#datatableKegiatan').remove();
                    $('#tableKegiatan').html(`
                        <table id="datatableKegiatan" class="table table-bordered dt-responsive w-100" style="font-size: 10px;">
                            <thead> 
                                <tr>
                                    <th>No</th> 
                                    <th>Tanggal</th> 
                                    <th>Pengaturan</th>
                                    <th>Pengawalan</th>
                                    <th>Lainnya</th>  
                                    <th>Total</th>
                                </tr>
                            </thead> 
                            <tbody id="isiKegiatan"></tbody>
                        </table>
                    `);

                    $('#datatableIRSMS').remove();
                    $('#tableIRSMS').html(`
                        <table id="datatableIRSMS" class="table table-bordered dt-responsive w-100" style="font-size: 10px;">
                            <thead> 
                                <tr>
                                    <th>No</th> 
                                    <th>Tanggal</th>
                                    <th>Kerugian Material</th>
                                    <th>Meninggal Dunia</th>
                                    <th>Luka Berat</th>
                                    <th>Luka Ringan</th> 
                                    <th>Total Korban</th> 
                                </tr>
                            </thead> 
                            <tbody id="isiIRSMS"></tbody>
                        </table>
                    `);

                    $('#datatableOperasi').remove();
                    $('#tableOperasi').html(`
                        <table id="datatableOperasi" class="table table-bordered dt-responsive w-100" style="font-size: 10px;">
                            <thead> 
                                <tr>
                                    <th rowspan="2" class="text-center">No</th> 
                                    <th rowspan="2" class="text-center">Tanggal</th> 
                                    <th class="text-center">Jadwal Kegiatan</th>
                                    <th colspan="2" class="text-center">Uraian Kegiatan</th> 
                                    <th rowspan="2" class="text-center">Total</th>
                                </tr>
                                <tr> 
                                    <th>Selesai</th>
                                    <th>Selesai</th>
                                    <th>Gagal</th>  
                                </tr>
                            </thead> 
                            <tbody id="isiOperasi"></tbody>
                        </table>
                    `);


                    console.log(result);
                    
    
                    if(result['data'].length > 0 || result['data'] != null){
                        var t_officer_active = 0;
                        var t_officer_active_car = 0;
                        var t_officer_active_bike = 0;
                        var t_officer_active_not_driving = 0;
                        var t_report_kriminal = 0;
                        var t_report_lalu_lintas = 0;
                        var t_report_kemacetan = 0;
                        var t_report_bencanaalam = 0;
                        var t_report_pengaturan = 0;
                        var t_report_pengawalan = 0;
                        var t_report_lainnya = 0;
                        var t_schedule_done = 0;
                        var t_rengiat_done = 0;
                        var t_rengiat_failed = 0;  

                        var t_materialloss = 0;  
                        var t_md = 0;  
                        var t_lb = 0;  
                        var t_lr = 0;  
                        var t_korban = 0;   

                        var listPetugas = ``;
                        var urutanPetugas = 0;
                        var listKegiatan = ``;
                        var urutanKegiatan = 0;
                        var listOperasi = ``;
                        var urutanOperasi = 0;

                        // IRSMS
                        var listIRSMS = ``;
                        var urutanIRSMS = 0;

                        var pluckOfficer_active = result['data'].map(el => { return parseInt(el.t_officer_active) });
                        var sumOfficer_active = pluckOfficer_active.reduce(function(a, b) {
                            return a + b;
                        }, 0);

                        var pluckOfficer_active_car = result['data'].map(el => { return parseInt(el.t_officer_active_car) });
                        var sumOfficer_active_car = pluckOfficer_active_car.reduce(function(a, b) {
                            return a + b;
                        }, 0);

                        var pluckOfficer_active_bike = result['data'].map(el => { return parseInt(el.t_officer_active_bike) });
                        var sumOfficer_active_bike = pluckOfficer_active_bike.reduce(function(a, b) {
                            return a + b;
                        }, 0);

                        var pluckOfficer_active_not_driving = result['data'].map(el => { return parseInt(el.t_officer_active_not_driving) });
                        var sumOfficer_active_not_driving = pluckOfficer_active_not_driving.reduce(function(a, b) {
                            return a + b;
                        }, 0); 

                        var pluckReport_kriminal = result['data'].map(el => { return parseInt(el.t_report_kriminal) });
                        var sumReport_kriminal = pluckReport_kriminal.reduce(function(a, b) {
                            return a + b;
                        }, 0); 

                        var pluckReport_lalu_lintas = result['data'].map(el => { return parseInt(el.t_report_lalu_lintas) });
                        var sumReport_lalu_lintas = pluckReport_lalu_lintas.reduce(function(a, b) {
                            return a + b;
                        }, 0); 
                        
                        var pluckReport_kemacetan = result['data'].map(el => { return parseInt(el.t_report_kemacetan) });
                        var sumReport_kemacetan = pluckReport_kemacetan.reduce(function(a, b) {
                            return a + b;
                        }, 0); 

                        var pluckReport_bencanaalam = result['data'].map(el => { return parseInt(el.t_report_bencanaalam) });
                        var sumReport_bencanaalam = pluckReport_bencanaalam.reduce(function(a, b) {
                            return a + b;
                        }, 0);  

                        var pluckReport_pengaturan = result['data'].map(el => { return parseInt(el.t_report_pengaturan) });
                        var sumReport_pengaturan = pluckReport_pengaturan.reduce(function(a, b) {
                            return a + b;
                        }, 0); 

                        var pluckReport_pengawalan = result['data'].map(el => { return parseInt(el.t_report_pengawalan) });
                        var sumReport_pengawalan = pluckReport_pengawalan.reduce(function(a, b) {
                            return a + b;
                        }, 0); 

                        var pluckReport_lainnya = result['data'].map(el => { return parseInt(el.t_report_lainnya) });
                        var sumReport_lainnya = pluckReport_lainnya.reduce(function(a, b) {
                            return a + b;
                        }, 0); 

                        var pluckSchedule_done = result['data'].map(el => { return parseInt(el.t_schedule_done) });
                        var sumSchedule_done = pluckSchedule_done.reduce(function(a, b) {
                            return a + b;
                        }, 0);  

                        var pluckRengiat_done = result['data'].map(el => { return parseInt(el.t_rengiat_done) });
                        var sumRengiat_done = pluckRengiat_done.reduce(function(a, b) {
                            return a + b;
                        }, 0);   

                        var pluckRengiat_failed = result['data'].map(el => { return parseInt(el.t_rengiat_failed) });
                        var sumRengiat_failed = pluckRengiat_failed.reduce(function(a, b) {
                            return a + b;
                        }, 0); 
                        
                        

                        // IRSMS
                        var pluckMaterialloss = result['data'].map(el => { return parseInt(el.t_materialloss) });
                        var sumMaterialloss = pluckMaterialloss.reduce(function(a, b) {
                            return a + b;
                        }, 0); 

                        var pluckMd = result['data'].map(el => { return parseInt(el.t_md) });
                        var sumMd = pluckMd.reduce(function(a, b) {
                            return a + b;
                        }, 0); 

                        var pluckLb = result['data'].map(el => { return parseInt(el.t_lb) });
                        var sumLb = pluckLb.reduce(function(a, b) {
                            return a + b;
                        }, 0); 

                        var pluckLr = result['data'].map(el => { return parseInt(el.t_lr) });
                        var sumLr = pluckLr.reduce(function(a, b) {
                            return a + b;
                        }, 0); 

                        var pluckKorban = result['data'].map(el => { return parseInt(el.t_korban) });
                        var sumKorban = pluckKorban.reduce(function(a, b) {
                            return a + b;
                        }, 0); 


                        var ress = result['data'][0]; 
    
    
                        optionsPetugas = {
                            series: [{
                                data: [sumOfficer_active, sumOfficer_active_car, sumOfficer_active_bike, sumOfficer_active_not_driving]
                            }],
                            chart: {
                                height: 298,
                                type: 'bar',
                                events: {
                                    click: function(chart, w, e) {
                                    // console.log(chart, w, e)
                                    }
                                }
                            },
                            // colors: colors,
                            plotOptions: {
                                bar: {
                                    columnWidth: '45%',
                                    distributed: true,
                                }
                            },
                            dataLabels: {
                                enabled: false
                            },
                            legend: {
                                show: false
                            },
                            xaxis: {
                                categories: [ 
                                    'Total',
                                    'Mobil',
                                    'Motor',
                                    'Tidak Berkendara', 
                                ],
                                labels: {
                                    style: {
                                    //   colors: colors,
                                    fontSize: '12px'
                                    }
                                }
                            }
                        };
                        var chart = new ApexCharts(document.querySelector("#chartPetugasAktif"), optionsPetugas);
                        chart.render();
    
    
                        optionsLaporan = {
                            series: [{
                                data: [sumReport_pengaturan, sumReport_pengawalan, sumReport_lainnya]
                            }],
                            chart: {
                                height: 350,
                                type: 'bar',
                                events: {
                                    click: function(chart, w, e) {
                                    // console.log(chart, w, e)
                                    }
                                }
                            },
                            // colors: colors,
                            plotOptions: {
                                bar: {
                                    columnWidth: '45%',
                                    distributed: true,
                                }
                            },
                            dataLabels: {
                                enabled: false
                            },
                            legend: {
                                show: false
                            },
                            xaxis: {
                                categories: [  
                                    'Pengaturan',
                                    'Pengawalan',
                                    'Lainnya',
                                ],
                                labels: {
                                    style: {
                                    //   colors: colors,
                                    fontSize: '12px'
                                    }
                                }
                            }
                        };
                        var chart = new ApexCharts(document.querySelector("#chartLaporan"), optionsLaporan);
                        chart.render();


                        // optionsIRSMS = {
                        //     series: [{
                        //         data: [sumMaterialloss, sumMd, sumLb, sumLr, sumKorban]
                        //     }],
                        //     chart: {
                        //         height: 350,
                        //         type: 'bar',
                        //         events: {
                        //             click: function(chart, w, e) {
                        //             // console.log(chart, w, e)
                        //             }
                        //         }
                        //     },
                        //     // colors: colors,
                        //     plotOptions: {
                        //         bar: {
                        //             columnWidth: '45%',
                        //             distributed: true,
                        //         }
                        //     },
                        //     dataLabels: {
                        //         enabled: false
                        //     },
                        //     legend: {
                        //         show: false
                        //     },
                        //     xaxis: {
                        //         categories: [ 
                        //             'Kerugian Material',
                        //             'Meninggal Dunia',
                        //             'Luka Berat',
                        //             'Luka Ringan',
                        //             'Total Korban', 
                        //         ],
                        //         labels: {
                        //             style: {
                        //             //   colors: colors,
                        //             fontSize: '12px'
                        //             }
                        //         }
                        //     }
                        // };
                        // var chart = new ApexCharts(document.querySelector("#chartIRSMS"), optionsIRSMS);
                        // chart.render();
    
    
                        optionsOperasi = {  
    
                            series: [  sumSchedule_done, sumRengiat_done, sumRengiat_failed ],
                            chart: {
                                width: 550,
                                type: 'pie',
                            },
                            labels: [ "Uraian Kegiatan - Gagal","Uraian Kegiatan - Selesai","Jadwal Kegiatan - Selesai"], 
                            // colors: ['green','red'], 
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
                            }]
                        };
                        var chartOperasi = new ApexCharts(document.querySelector("#chartOperasi"), optionsOperasi);
                        chartOperasi.render();
                       

                        listPetugas = ``;
                        urutanPetugas = 0;
                        listKegiatan = ``;
                        urutanKegiatan = 0;
                        listOperasi = ``;
                        urutanOperasi = 0;


                        listIRSMS = ``;
                        urutanIRSMS = 0;
                        result['data'].forEach(el => {
                            urutanPetugas += 1;
                            listPetugas += `
                                <tr>
                                    <td>${urutanPetugas}</td>
                                    <td>${el.date}</td> 
                                    <td>${el.t_officer_active_car}</td> 
                                    <td>${el.t_officer_active_bike}</td> 
                                    <td>${el.t_officer_active_not_driving}</td> 
                                    <td>${el.t_officer_active}</td> 
                                </tr>
                            `;
                            $('#isiPetugas').html(listPetugas);

                            urutanKegiatan += 1;
                            listKegiatan += `
                                <tr>
                                    <td>${urutanKegiatan}</td>
                                    <td>${el.date}</td>  
                                    <td>${el.t_report_pengaturan}</td>  
                                    <td>${el.t_report_pengawalan}</td>  
                                    <td>${el.t_report_lainnya}</td> 
                                    <td>${el.t_report}</td> 
                                </tr>
                            `;
                            $('#isiKegiatan').html(listKegiatan);

                            urutanIRSMS += 1;
                            listIRSMS += `
                                <tr>
                                    <td>${urutanIRSMS}</td>
                                    <td>${el.date}</td> 
                                    <td>${el.t_materialloss}</td> 
                                    <td>${el.t_md}</td> 
                                    <td>${el.t_lb}</td> 
                                    <td>${el.t_lr}</td>  
                                    <td>${el.t_korban}</td>   
                                </tr>
                            `;
                            $('#isiIRSMS').html(listIRSMS);

                            urutanOperasi += 1;
                            listOperasi += `
                                <tr>
                                    <td>${urutanOperasi}</td>
                                    <td>${el.date}</td> 
                                    <td>${el.t_schedule_done}</td> 
                                    <td>${el.t_rengiat_done}</td> 
                                    <td>${el.t_rengiat_failed}</td>  
                                    <td>${el.t_rengiat}</td>  
                                </tr>
                            `;
                            $('#isiOperasi').html(listOperasi);
                        });
                        dataTablePetugas = $('#datatablePetugas').DataTable({
                            responsive: true,

                            scrollX: true,

                            sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

                            buttons: [  "excel", "csv",
                                // {
                                //     extend:'pdfHtml5',
                                //     text:'Export PDF',
                                //     orientation:'portrait',
                                //     customize : function(doc){
                                //         var colCount = new Array();
                                //         $('#datatablePetugas').find('tbody tr:first-child td').each(function(){
                                //             if($(this).attr('colspan')){
                                //                 for(var i=1;i<=$(this).attr('colspan');$i++){
                                //                     colCount.push('*');
                                //                 }
                                //             }else{ colCount.push('*'); }
                                //         });
                                //         doc.content[1].table.widths = colCount;
                                //     }
                                // }
                            ],
                            processing: true,
                            oLanguage: {

                                sSearch: 'Search:'

                            },
                        }); 
                        dataTableKegiatan = $('#datatableKegiatan').DataTable({
                            responsive: true,

                            scrollX: true,

                            sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

                            buttons: [  "excel", "csv",
                                // {
                                //     extend:'pdfHtml5',
                                //     text:'Export PDF',
                                //     orientation:'portrait',
                                //     customize : function(doc){
                                //         var colCount = new Array();
                                //         $('#datatableKegiatan').find('tbody tr:first-child td').each(function(){
                                //             if($(this).attr('colspan')){
                                //                 for(var i=1;i<=$(this).attr('colspan');$i++){
                                //                     colCount.push('*');
                                //                 }
                                //             }else{ colCount.push('*'); }
                                //         });
                                //         doc.content[1].table.widths = colCount;
                                //     }
                                // }
                            ],
                            processing: true,
                            oLanguage: {

                                sSearch: 'Search:'

                            },
                        }); 

                        dataTableIRSMS = $('#datatableIRSMS').DataTable({
                            responsive: true,

                            scrollX: true,

                            sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

                            buttons: [  "excel", "csv",
                                // {
                                //     extend:'pdfHtml5',
                                //     text:'Export PDF',
                                //     orientation:'portrait',
                                //     customize : function(doc){
                                //         var colCount = new Array();
                                //         $('#datatableIRSMS').find('tbody tr:first-child td').each(function(){
                                //             if($(this).attr('colspan')){
                                //                 for(var i=1;i<=$(this).attr('colspan');$i++){
                                //                     colCount.push('*');
                                //                 }
                                //             }else{ colCount.push('*'); }
                                //         });
                                //         doc.content[1].table.widths = colCount;
                                //     }
                                // }
                            ],
                            processing: true,
                            oLanguage: {

                                sSearch: 'Search:'

                            },
                        }); 
                        dataTableOperasi = $('#datatableOperasi').DataTable({
                            responsive: true,

                            scrollX: true,

                            sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

                            buttons: [  "excel", "csv",
                                // {
                                //     extend:'pdfHtml5',
                                //     text:'Export PDF',
                                //     orientation:'portrait',
                                //     customize : function(doc){
                                //         var colCount = new Array();
                                //         $('#datatableOperasi').find('tbody tr:first-child td').each(function(){
                                //             if($(this).attr('colspan')){
                                //                 for(var i=1;i<=$(this).attr('colspan');$i++){
                                //                     colCount.push('*');
                                //                 }
                                //             }else{ colCount.push('*'); }
                                //         });
                                //         doc.content[1].table.widths = colCount;
                                //     }
                                // }
                            ],
                            processing: true,
                            oLanguage: {

                                sSearch: 'Search:'

                            },
                        });

                    } else{
    
                    }
                    $("#overlay").fadeOut(300); 
                }
            }); 
        }
        function getReportIrsms(){
            // $("#overlay").fadeIn(300); 
            $.ajax({
                type : "POST",
                url : "<?php echo base_url();?>laporan/Harian/getDayReportIrsms", 
                data : {
                    "start_date" : $('#startdate').val(),
                }, 
                dataType : "JSON",
                success : function(result){  
 
                    console.log({testResult: result})
                    $('#chartIRSMS').remove();
                    $('#chartIRSMS1').html(`
                        <div id="chartIRSMS"></div>
                    `);
                    $('#chartIRSMSnew').remove();
                    $('#chartIRSMS2').html(`
                        <div id="chartIRSMSnew"></div>
                    `);

               
                    
    
                    // if(result['data'].length > 0 || result['data'] != null){
                     

                        // IRSMS
                        var listIRSMS = ``;
                        var urutanIRSMS = 0;


                        optionsIRSMS2 ={
                            series: result.irsms2,
                            chart: {
                                height: 350,
                                type: 'bar',
                                stacked: false,
                                toolbar: {
                                show: false
                                }
                            },
                            // colors: ['#13d820', '#f7eb04'],
                            dataLabels: {
                                enabled: false,
                                style: {
                                colors: ['#000']
                                }
                            },
                            plotOptions: {
                                bar: {
                                horizontal: false,
                                

                                }
                            },
                            xaxis: {
                                categories: result.dateMonth
                            },
                            // yaxis: {
                            //     max: 10,
                            //     labels: {
                            //     show: true,
                            //     trim: false
                            //     }
                            // }

                            }
                      
                      
                      
                      
                      
                      
                      
                            optionsIRSMS ={
                            series: result.irsms1,
                            chart: {
                                height: 350,
                                type: 'bar',
                                stacked: false,
                                toolbar: {
                                show: false
                                }
                            },
                            // colors: ['#13d820', '#f7eb04'],
                            dataLabels: {
                                enabled: false,
                                style: {
                                colors: ['#000']
                                }
                            },
                            plotOptions: {
                                bar: {
                                horizontal: false,
                                

                                }
                            },
                            xaxis: {
                                categories: result.dateMonth
                            },
                            // yaxis: {
                            //     max: 10,
                            //     labels: {
                            //     show: true,
                            //     trim: false
                            //     }
                            // }

                            }
                        var chart = new ApexCharts(document.querySelector("#chartIRSMS"), optionsIRSMS);
                        chart.render();
                        var chart = new ApexCharts(document.querySelector("#chartIRSMSnew"), optionsIRSMS2);
                        chart.render();
    
    
                   
                    // } else{
    
                    // }
                    // $("#overlay").fadeOut(300); 
                }
            }); 
        }

        getReport();
        getReportIrsms();
        $("#searchtgl").on("click", function (e) { 
            getReport();
        });

 
    });
</script>