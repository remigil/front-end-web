<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <a href="<?= base_url('statistik_nasional') ?>" style="color:#0a0a0a ;" class="fs-6"><i class="fas fa-less-than"></i> Kembali</a>
        </div>
        <div class="col-md-6 text-end align-self-center">
            <a href="http://34.143.227.90:3001/v1/laporan_harian/export_laphar" type="button" button class="btn btn-outline-info btn-lg" style="width: 200px; border-color:#007DD8;">Export Laporan</a>
        </div>
    </div>
    <div class="card mt-5 shadow" style="border-radius:36px !important;">
        <div class="row m-2">
            <div class="col-sm-12 col-md-12 align-self-center text-center">
                <h2> DATA</h2>
                <h2> <span style="text-transform:uppercase ; color:#0007D8">BLACKSPOT</span> </h2>
                <h2>SELURUH INDONESIA </h2>
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
                <div class="col-md-12 mt-3">
                    <div class="card shadow-sm">
                        <table class="table table-bordered table-hover" id="tableBlackspot">
                            <thead style="background-color:#007DD8; color:#fff;">
                                <tr class="text-center">
                                    <th scope="col">No</th>
                                    <th scope="col">Satuan Kerja</th>
                                    <th scope="col">Lokasi Kecelakaan</th>
                                    <th scope="col">Waktu Kecelakaan</th>
                                    <th scope="col">Penyebab Kecelakaan</th>
                                    <th scope="col">Tindakan yang Dilakukan</th>
                                    <th scope="col">Tanggal</th>
                                </tr>
                            </thead>
                            <tbody id="tbody-Blackspot">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <!-- <div class="row" >
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
            <div class="row" >
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
            </div> -->
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
                url: "<?php echo base_url(); ?>executive/statistik_executive/getDetailStatistikBlackspot",
                // url: "<?php echo base_url(); ?>executive/statistik_executive/getDetailStatistikBlackspot",
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
                    let polda_Blackspot = result.data.polda_Blackspot
                    // Chart Wal pjr Lalu Lintas

                    var chart = {
                        series: [{
                            name: '<h6>Total Blackspot</h6>',
                            type: 'column',
                            data: polda_Blackspot,
                            color: "#11347A"
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

            topBlackspotDay(yesterday);

            blackspot_daily(yesterday, firstDayMonth, lastDayMonth, firstDay, lastDay)

            BlackspotlineChart(seven_daysAgo, yesterday)
            jam();
        })


        $('#limit_showData').on('change', function() {
            let filter = 0
            var limit = $('#limit_showData').val();
            var yesterday = new Date().toLocaleDateString('en-GB').split('/').reverse().join('-')
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>executive/statistik_executive/getDetailStatistikBlackspot",
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
                    let polda_Blackspot = result.data.Blackspot

                    var chart = {
                        series: [{
                            name: '<h6>Total Blackspot</h6>',
                            type: 'column',
                            data: polda_Blackspot,
                            color: "#11347A"
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


        function Blackspot_daily(yesterday, firstDayMonth, lastDayMonth, firstDay, lastDay) {
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>executive/statistik_executive/getBlackspotDate",
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
                    $('#BlackspotThisDay').text(result.thisDay)

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
                    url: "<?php echo base_url(); ?>executive/statistik_executive/getDetailStatistikBlackspot",
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
                        let polda_Blackspot = result.data.Blackspot

                        var chart = {
                            series: [{
                                name: '<h6>Total Blackspot</h6>',
                                type: 'column',
                                data: polda_Blackspot,
                                color: "#11347A"
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

                BlackspotlineChart(start_date, end_date)
            }
        }

        function BlackspotlineChart(seven_daysAgo, yesterday) {

            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>executive/Statistik_executive/getLineBlackspot",
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
                            name: '<h6>Total Blackspot</h6>',
                            type: 'line',
                            data: results.data.polda_Blackspot,
                            color: "#11347A"
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

                    var Blackspot = new ApexCharts(document.querySelector("#chart2"), chart2);
                    Blackspot.render();
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

        function topBlackspotDay(yesterday) {
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>executive/statistik_executive/getTopBlackspot",
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
                        <td>  ${result[i].lokasi}  </td> 
                        <td>  ${result[i].waktu}  </td> 
                        <td>  ${result[i].penyebab}  </td> 
                        <td>  ${result[i].tindakan}  </td> 
                        <td>  ${result[i].tanggal}  </td> 
                        </tr>`
                    }
                    $('#tbody-Blackspot').html(table);
                    <?php $mobile = detect_mobile();
                    if ($mobile === true) { ?>

                        $('#tableBlackspot').DataTable({
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