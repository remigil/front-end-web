
<div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="card">
                    <div class="card-header bg-transparent border-bottom text-uppercase m-3 p-0">
                    <h5>Laporan Operasi</h5>
                    <span><?php echo date('Y-m-d')?></span>
                    </div>
                    <div class="card-body m-0 p-0">
                        <div class="main-chart">
                            <div id="chartLaporan"></div>
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
                    <span><?php echo date('Y-m-d')?></span>
                    </div>
                    <div class="card-body m-0 p-0">
                        <div class="main-chart">
                            <div id="chartOperasi"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>


<script>

    var optionsLaporan = null;
    var optionsOperasi = null;

    $(document).ready(function() {
        
        $.ajax({
            type : "POST",
            url : "<?php echo base_url();?>laporan/Harian/getDayReport", 
            data : {
                "start_date" : moment().format("YYYY-MM-DD"),
                "end_date" : moment().format("YYYY-MM-DD"), 
            }, 
            dataType : "JSON",
            success : function(result){  

                if(result['data'].length > 0 || result['data'] != null){
                    var ress = result['data'][0];
                    console.log(ress);
                    optionsLaporan = {
                        series: [{
                            data: [ress['t_report_kriminal'], ress['t_report_lalu_lintas'], ress['t_report_kemacetan'], ress['t_report_bencanaalam'], ress['t_report_pengaturan'], ress['t_report_pengawalan'], ress['t_report_lainnya']]
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
                                'Kriminal',
                                'Lalu lintas',
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

                        series: [ress['t_rengiat_done'], ress['t_rengiat_failed']],
                        chart: {
                            width: 380,
                            type: 'pie',
                        },
                        labels: [ "Selesai", "Gagal"],
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
                   
                } else{

                }
            }
        });
        
        
        

 
    });
</script>