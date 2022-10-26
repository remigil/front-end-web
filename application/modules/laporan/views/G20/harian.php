
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
                                    <th>Pelanggaran</th>
                                    <th>Kecelakaan lalu lintas</th>
                                    <th>Kemacetan</th>
                                    <th>Bencana Alam</th> 
                                    <th>Pengaturan</th>
                                    <th>Pengawalan</th>
                                    <th>Lainnya</th>  
                                    <th>Total</th>
                                </tr>
                            </thead> 
                            <tbody id="isiKegiatan"></tbody>
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

                        var listPetugas = ``;
                        var urutanPetugas = 0;
                        var listKegiatan = ``;
                        var urutanKegiatan = 0;
                        var listOperasi = ``;
                        var urutanOperasi = 0;

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
                                data: [sumReport_kriminal, sumReport_lalu_lintas, sumReport_kemacetan, sumReport_bencanaalam, sumReport_pengaturan, sumReport_pengawalan, sumReport_lainnya]
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
                                    'Pelanggaran',
                                    'Kecelakaan lalu lintas',
                                    'Kemacetan',
                                    'Bencana Alam',
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
                                    <td>${el.t_report_kriminal}</td> 
                                    <td>${el.t_report_lalu_lintas}</td> 
                                    <td>${el.t_report_kemacetan}</td> 
                                    <td>${el.t_report_bencanaalam}</td>  
                                    <td>${el.t_report_pengaturan}</td>  
                                    <td>${el.t_report_pengawalan}</td>  
                                    <td>${el.t_report_lainnya}</td> 
                                    <td>${el.t_report}</td> 
                                </tr>
                            `;
                            $('#isiKegiatan').html(listKegiatan);

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

        getReport();
        
        $("#searchtgl").on("click", function (e) { 
            getReport();
        });

 
    });
</script>