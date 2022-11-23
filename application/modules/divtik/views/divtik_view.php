<div class="row justify-content-between">
    <div class="col-md-4 mb-1">
        <h3 style="text-transform: uppercase; color:#007DD8;"><a href="<?= base_url('dashboard') ?>" style="color:#007DD8 ;"><i class="fas fa-less-than"></i></a> Statistik Nasional</h3>
    </div>
    <div class="col-md-3 text-end">
        <a href="http://rc.korlantas.polri.go.id:8900/eri2017/index.php" target="_blank" style="font-weight:bold ;">ERI</a>
        <span>|</span>
        <a href="https://irsms.korlantas.polri.go.id/dashboard/irsms_icell" target="_blank" style="font-weight:bold ;">IRSMS</a>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-3">
                <a href="<?= base_url('statistik_nasional/Lakalantas'); ?>">
                    <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2 align-self-center">
                                    <i class="bx bxs-car-crash ms-n2 mt-2 mb-2" style="font-size: 40px; color: #464646;"></i>
                                </div>
                                <div class="col-md-10 float-end">
                                    <span class="fs-4 float-end" style="color:#464646;">
                                        <span class="fw-bold ">Total Kecelakaan </span>Lalu Lintas
                                        <span>
                                            <p class="float-end m-0 p-0" style="font-size: 14px;">Efektif data Rabu, 16 November 2022</p>
                                        </span>
                                    </span>

                                    <br>
                                    <br>
                                    <span class="fs-4 fw-bold float-end" style="color:#464646;" id="lakalantas"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="<?= base_url('statistik_nasional/Garlantas'); ?>">
                    <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2 align-self-center">
                                    <i class="bx bxs-car-crash ms-n2 mt-2 mb-2" style="font-size: 40px; color: #464646;"></i>
                                </div>
                                <div class="col-md-10 float-end">
                                    <span class="fs-4 float-end" style="color:#464646;">
                                        <span class="fw-bold">Total Pelanggaran </span>Lalu Lintas
                                    </span>
                                    <br><br>
                                    <span class="fs-4 fw-bold float-end" style="color:#464646;" id="garlantas"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="<?= base_url('statistik_nasional/Turjagwali'); ?>">
                    <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2 align-self-center">
                                    <!-- <iconify-icon icon="ic:baseline-control-camera" class="ms-n2 mt-2" style="font-size: 45px; color: #464646;"></iconify-icon> -->
                                    <i class='bx bxs-id-card ms-n2' style="font-size: 40px; color: #464646;"></i>
                                </div>
                                <div class="col-md-10 float-end">
                                    <span class="fs-4 float-end" style="color:#464646;">
                                        <span class="fw-bold">Total Turjagwali</span>
                                    </span>
                                    <br><br>
                                    <span class="fs-4 fw-bold float-end" style="color:#464646;" id="turjagwali"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="<?= base_url('statistik_nasional/Ranmor'); ?>">
                    <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2 align-self-center">
                                    <img src="<?= base_url() ?>assets/dashboard/icon-ranmor.svg" alt="ranmor" width="60px">
                                </div>
                                <div class="col-md-10 float-end">
                                    <span class="fs-4 float-end" style="color:#464646;">
                                        <span class="fw-bold">Total Kendaraan </span>Bermotor
                                    </span>
                                    <br><br>
                                    <span class="fs-6 fw-bold float-end" style="color:#464646;" id="motor"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card p-3">
            <div class="main-chart">
                <div id="chart_laka"></div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card p-3">
            <div class="main-chart">
                <div id="chart_gar"></div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card p-3">
            <div class="main-chart">
                <div id="chart_turjag"></div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card p-3">
            <div class="main-chart">
                <div id="chart_ranmor"></div>
            </div>
        </div>
    </div>
</div>



<script>
    $(document).ready(function() {

        getLakaDivtik();
        getPelanggaranDivtik();
        getTurjagwaliDivtik()
        getRanmorDivTik()


    })

    function getLakaDivtik() {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>divtik/Div_tik/getKecelakaan",
            dataType: "JSON",
            success: function(result) {
                console.log(result)
                $("#overlay").fadeOut(300);

                // let polda_name = result.polda_name

                var chart_laka = {
                    series: [{
                            name: result.laka_date_yesterday,
                            data: result.laka_insiden_yesterday
                        },
                        {
                            name: result.laka_date_today,
                            data: result.laka_insiden_today

                        }
                    ],
                    chart: {
                        height: 350,
                        type: 'line',
                    },
                    dataLabels: {
                        enabled: true,
                        style: {
                            fontSize: '14px',
                            fontFamily: 'Helvetica, Arial, sans-serif',
                            fontWeight: 'bold',
                            colors: undefined
                        },
                        background: {
                            enabled: true,
                            foreColor: '#fff',
                            padding: 4,
                            borderRadius: 2,
                            borderWidth: 1,
                            borderColor: '#fff',
                            opacity: 0.9,
                            dropShadow: {
                                enabled: false,
                                top: 1,
                                left: 1,
                                blur: 1,
                                color: '#000',
                                opacity: 0.45
                            }
                        },
                    },
                    title: {
                        text: 'Jumlah Kecelakaan',
                        align: 'left'
                    },
                    markers: {
                        size: 0,
                        hover: {
                            sizeOffset: 6
                        }
                    },
                    xaxis: {
                        categories: result.laka_polda_name,
                    },
                    tooltip: {
                        y: [{
                                title: {
                                    formatter: function(val) {
                                        return 'Total Kecelakaan '
                                    }
                                }
                            },
                            {
                                title: {
                                    formatter: function(val) {
                                        return "Total Kecelakaan"
                                    }
                                }
                            }
                        ]
                    },
                    grid: {
                        borderColor: '#f1f1f1',
                    }
                };

                var chart1 = new ApexCharts(document.querySelector("#chart_laka"), chart_laka);
                chart1.render();

            }
        })
    }

    function getPelanggaranDivtik() {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>divtik/Div_tik/getPelanggaran",
            dataType: "JSON",
            success: function(result) {
                console.log(result)
                $("#overlay").fadeOut(300);

                let polda_name = result.polda_name

                var asd = {
                    series: [{
                            name: result.pelanggaran_date_yesterday,
                            data: result.pelanggaran_insiden_yesterday
                        },
                        {
                            name: result.pelanggaran_date_today,
                            data: result.pelanggaran_insiden_today
                        }
                    ],
                    chart: {
                        height: 350,
                        type: 'line',
                    },
                    dataLabels: {
                        enabled: true,
                        style: {
                            fontSize: '14px',
                            fontFamily: 'Helvetica, Arial, sans-serif',
                            fontWeight: 'bold',
                            colors: undefined
                        },
                        background: {
                            enabled: true,
                            foreColor: '#fff',
                            padding: 4,
                            borderRadius: 2,
                            borderWidth: 1,
                            borderColor: '#fff',
                            opacity: 0.9,
                            dropShadow: {
                                enabled: false,
                                top: 1,
                                left: 1,
                                blur: 1,
                                color: '#000',
                                opacity: 0.45
                            }
                        },
                    },
                    title: {
                        text: 'Jumlah Pelanggaran',
                        align: 'left'
                    },
                    markers: {
                        size: 0,
                        hover: {
                            sizeOffset: 6
                        }
                    },
                    xaxis: {
                        categories: result.pelanggaran_polda_name,
                    },
                    tooltip: {
                        y: [{
                                title: {
                                    formatter: function(val) {
                                        return 'Total Pelanggaran '
                                    }
                                }
                            },
                            {
                                title: {
                                    formatter: function(val) {
                                        return "Total Pelanggaran"
                                    }
                                }
                            }
                        ]
                    },
                    grid: {
                        borderColor: '#f1f1f1',
                    }
                };

                var bsd = new ApexCharts(document.querySelector("#chart_gar"), asd);
                bsd.render();

            }
        })
    }

    function getTurjagwaliDivtik() {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>divtik/Div_tik/getTurjagwali",
            dataType: "JSON",
            success: function(result) {
                console.log(result)
                $("#overlay").fadeOut(300);

                var options2 = {
                    series: [{
                        data: result.turjagwali_insiden_today
                    }],
                    chart: {
                        type: 'bar',
                        height: 350
                    },
                    plotOptions: {
                        bar: {
                            borderRadius: 4,
                            horizontal: true,
                        }
                    },
                    dataLabels: {
                        enabled: true,
                        style: {
                            fontSize: '14px',
                            fontFamily: 'Helvetica, Arial, sans-serif',
                            fontWeight: 'bold',
                            colors: undefined
                        },
                        background: {
                            enabled: true,
                            foreColor: '#fff',
                            padding: 4,
                            borderRadius: 2,
                            borderWidth: 1,
                            borderColor: '#fff',
                            opacity: 0.9,
                            dropShadow: {
                                enabled: false,
                                top: 1,
                                left: 1,
                                blur: 1,
                                color: '#000',
                                opacity: 0.45
                            }
                        },
                    },
                    title: {
                        text: '5 Polda Total Turjagwali Tertinggi Hari Ini',
                        align: 'left'
                    },
                    xaxis: {
                        categories: result.turjagwali_polda_name,
                    },
                    tooltip: {
                        y: [{
                            title: {
                                formatter: function(val) {
                                    return 'Total Turjagwali '
                                }
                            }
                        }, ]
                    },
                };

                var chart3 = new ApexCharts(document.querySelector("#chart_turjag"), options2);
                chart3.render();

            }
        })
    }
    var options4 = {
        series: [{
            name: 'Mobil Penumpang',
            data: [44, 55, 41, 67, 22, 43]
        }, {
            name: 'Mobil Bus',
            data: [13, 23, 20, 8, 13, 27]
        }, {
            name: 'Mobil Barang',
            data: [11, 17, 15, 15, 21, 14]
        }, {
            name: 'Ransus',
            data: [21, 7, 25, 13, 22, 8]
        }, {
            name: 'Sepeda Motor',
            data: [21, 7, 25, 13, 22, 8]
        }],
        chart: {
            type: 'bar',
            height: 350,
            stacked: true,
            toolbar: {
                show: true
            },
            zoom: {
                enabled: true
            }
        },
        responsive: [{
            breakpoint: 480,
            options: {
                legend: {
                    position: 'bottom',
                    offsetX: -10,
                    offsetY: 0
                }
            }
        }],
        plotOptions: {
            bar: {
                horizontal: false,
                borderRadius: 10,
                dataLabels: {
                    total: {
                        enabled: true,
                        style: {
                            fontSize: '13px',
                            fontWeight: 900
                        }
                    }
                }
            },
        },
        xaxis: {
            type: 'datetime',
            categories: ['01/01/2011 GMT', '01/02/2011 GMT', '01/03/2011 GMT', '01/04/2011 GMT',
                '01/05/2011 GMT', '01/06/2011 GMT'
            ],
        },
        legend: {
            position: 'right',
            offsetY: 40
        },
        fill: {
            opacity: 1
        },

        title: {
            text: '5 Polda Total Ranmor Tertinggi Hari Ini',
            align: 'left'
        },
    };

    var chart4 = new ApexCharts(document.querySelector("#chart_ranmor"), options4);
    chart4.render();

    function getRanmorDivTik() {

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>divtik/Div_tik/getRanmor",
            dataType: "JSON",
            success: function(result) {
                console.log(result)
                $("#overlay").fadeOut(300);

                var options4 = {
                    series: [{
                        name: 'Mobil Penumpang',
                        data: result.ranmor_mobil_penumpang
                    }, {
                        name: 'Mobil Bus',
                        data: result.ranmor_mobil_bus
                    }, {
                        name: 'Mobil Barang',
                        data: result.ranmor_mobil_barang
                    }, {
                        name: 'Ransus',
                        data: result.ranmor_ransus
                    }, {
                        name: 'Sepeda Motor',
                        data: result.ranmor_sepeda_motor
                    }],
                    chart: {
                        type: 'bar',
                        height: 350,
                        stacked: true,
                        toolbar: {
                            show: true
                        },
                        zoom: {
                            enabled: true
                        }
                    },
                    responsive: [{
                        breakpoint: 480,
                        options: {
                            legend: {
                                position: 'bottom',
                                offsetX: -10,
                                offsetY: 0
                            }
                        }
                    }],
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            borderRadius: 10,
                            dataLabels: {
                                total: {
                                    enabled: true,
                                    style: {
                                        fontSize: '13px',
                                        fontWeight: 900
                                    }
                                }
                            }
                        },
                    },
                    xaxis: {
                        categories: result.ranmor_polda_name,
                    },
                    legend: {
                        position: 'right',
                        offsetY: 40
                    },
                    fill: {
                        opacity: 1
                    },

                    title: {
                        text: '5 Polda Total Ranmor Tertinggi Hari Ini',
                        align: 'left'
                    },
                };

                var chart4 = new ApexCharts(document.querySelector("#chart_ranmor"), options4);
                chart4.render();

            }
        })
    }
</script>

<script>
    getStatistik();

    function getStatistik() {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>statistik_nasional/getStatistik",
            dataType: "JSON",
            success: function(result) {
                $("#overlay").fadeOut(300);

                $('#lakalantas').html(`<span class="fs-4" >${result.lakalantas}</span >`);
                $('#garlantas').html(`<span class="fs-4" >${result.garlantas}</span >`);
                $('#motor').html(`<span class="fs-4" >${result.motor}</span>`);
                $('#turjagwali').html(`<span class="fs-4" >${result.turjagwali}</span >`);
            }
        })
    }

    getGarlantas();

    function getGarlantas() {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>statistik_nasional/getGarlantas",
            dataType: "JSON",
            success: function(result) {
                $("#overlay").fadeOut(300);
                var table = '';

                for (let i = 0; i < result.length; i++) {
                    let x = parseInt(i)
                    let no = x + 1
                    table += `<tr class="text-center"> 
                                <td>  ${no}  </td> 
                                <td>  ${result[i].name_polda}  </td> 
                                <td>  ${result[i].total}  </td> 
                                <td>  ${result[i].pelanggaran_berat}  </td> 
                                <td>  ${result[i].pelanggaran_sedang}  </td> 
                                <td>  ${result[i].pelanggaran_ringan}  </td> 
                                </tr>`
                }
                $('#tbody-pelanggaran').html(table);
            }
        });
    }


    getLakalantas();

    function getLakalantas() {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>statistik_nasional/getLakalantas",
            dataType: "JSON",
            success: function(result) {
                $("#overlay").fadeOut(300);
                var table = '';

                for (let i = 0; i < result.length; i++) {
                    let x = parseInt(i)
                    let no = x + 1
                    table += `<tr class="text-center"> 
                                <td>  ${no}  </td> 
                                <td>  ${result[i].name_polda}  </td> 
                                <td>  ${result[i].insiden_kecelakaan}  </td> 
                                <td>  ${result[i].meninggal_dunia}  </td> 
                                <td>  ${result[i].luka_berat}  </td> 
                                <td>  ${result[i].luka_ringan}  </td> 
                                </tr>`
                }
                $('#tbody-kecelakaan').html(table);
            }
        })
    }


    getStatistik();

    function getStatistik() {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>statistik_nasional/getStatistik",
            dataType: "JSON",
            success: function(result) {
                $("#overlay").fadeOut(300);

                $('#lakalantas').html(`<span class="fs-4" >${result.lakalantas}</span >`);
                $('#garlantas').html(`<span class="fs-4" >${result.garlantas}</span >`);
                $('#motor').html(`<span class="fs-4" >${result.motor}</span>`);
                $('#turjagwali').html(`<span class="fs-4" >${result.turjagwali}</span >`);
            }
        })
    }


    getTurjagwali();

    function getTurjagwali() {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>statistik_nasional/getTurjagwali",
            dataType: "JSON",
            success: function(result) {
                $("#overlay").fadeOut(300);
                console.log(result)
                var turjagwali = {
                    series: [{
                        name: 'Pengaturan',
                        type: 'column',
                        data: result.polda_pengaturan,
                        color: "#11347A"
                    }, {
                        name: 'Pengawalan',
                        type: 'column',
                        data: result.polda_pengawalan,
                        color: "#CB2D3E"
                    }, {
                        name: 'Patroli',
                        type: 'column',
                        data: result.polda_patroli,
                        color: "#E8D42F"
                    }, {
                        name: 'Penjagaan',
                        type: 'column',
                        data: result.polda_penjagaan,
                        color: "#346EFA"
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
                        offsetY: -15,
                    },

                    stroke: {
                        show: true,
                        width: [1, 1, 4, 4],
                        colors: ['transparent']
                    },
                    xaxis: {
                        categories: result.polda_name,
                        labels: {
                            show: true,
                            style: {
                                colors: ['#f70505'],
                                fontSize: '18px',
                                fontWeight: 400,
                            }
                        }
                    },
                    yaxis: [{
                        axisTicks: {
                            show: false,
                        },
                        axisBorder: {
                            show: false,
                            color: '#008FFB'
                        },
                        // labels: {
                        //     style: {
                        //         colors: '#008FFB',
                        //     }
                        // },


                    }, ],
                };

                var turjagwali = new ApexCharts(document.querySelector("#chartturjagwali"), turjagwali);
                turjagwali.render();
            }
        })
    }
</script>