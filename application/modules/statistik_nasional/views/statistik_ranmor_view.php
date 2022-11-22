<div class="container-fluid">
    <a href="<?= base_url('statistik_nasional') ?>" style="color:#0a0a0a ;" class="fs-6"><i class="fas fa-less-than"></i> Kembali</a>
    <div class="card mt-5 p-1 shadow" style="border-radius:36px !important;">
        <div class="row m-2">
            <div class="col-sm-4 col-md-5 align-self-center">
                <h2>Data <span style="text-transform:uppercase ; color:#2e93e6">Kendaraan Bermotor <span style="color:#000;">Nasional</span></span> </h2>
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
                                        <h1 class="text-center mb-0" style="color:#464646; font-size:25px; color:#2e93e6;" id="ranmorThisDay"></h1>
                                        <p class="text-center mb-0">ranmor</p>
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
                                        <h1 class="text-center mb-0" style="color:#464646; font-size:25px; color:#2e93e6;" id="ranmorThisMonth"></h1>
                                        <p class="text-center mb-0">ranmor</p>
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
                                        <h1 class="text-center mb-0" style="color:#464646; font-size:25px; color:#2e93e6;" id="ranmorThisYear"></h1>
                                        <p class="text-center mb-0">ranmor</p>
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

<div class="container-fluid">
    <div class="row mt-5 justify-content-center">
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
                <div class="col-md-2 text-end align-self-center">
                    <!-- <button type="button" class="btn btn-outline-info float-end" id="btn_export" style="width: 100%;" onclick="ButtonExport()" style="width: 200px; border-color:#007DD8;">Tampilkan</button> -->
                    <!-- <a href="http://34.143.227.90:3001/v1/laporan_harian/export_laphar" class="text-center" id="btn_export"><button class="btn btn-outline-info" style="width: 200px; border-color:#007DD8;">Export Laporan</button></a> -->
                    <a href="http://34.143.227.90:3001/v1/laporan_harian/export_laphar" type="button" button class="btn btn-outline-info btn-lg" style="width: 200px; border-color:#007DD8;">Export Laporan</a>

                    <!-- <a href="http://34.143.227.90:3001/v1/laporan_harian/export_laphar" class="text-center"><button class="btn btn-outline-primary" style="width: 200px; border-color:#007DD8;">Export Laporan</button></a> -->
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <section class="shadow-sm mt-5">
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

        <div class="row m-3">
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
                                <h5>Ranking Polda Data Ranmor Tertinggi <?= date('d M Y', strtotime("-1 days")); ?></h5>
                                <div class="card shadow-sm">
                                    <table class="table table-bordered table-hover">
                                        <thead style="background-color:#007DD8; color:#fff;">
                                            <tr class="text-center">
                                                <th scope="col">No</th>
                                                <th scope="col">Polda</th>
                                                <th scope="col">Mobil Barang</th>
                                                <th scope="col">Mobil Penumpang</th>
                                                <th scope="col">Mobil Bus</th>
                                                <th scope="col">Ransus</th>
                                                <th scope="col">Sepeda Motor</th>
                                                <th scope="col">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody-lakaDay">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="row">
                            <div class="col-md-12 mt-3">
                                <h5>Ranking Polda Data Ranmor Tertinggi <?= date('M Y'); ?></h5>
                                <div class="card shadow-sm">
                                    <table class="table table-bordered table-hover">
                                        <thead style="background-color:#007DD8; color:#fff;">
                                            <tr class="text-center">
                                                <th scope="col">No</th>
                                                <th scope="col">Polda</th>
                                                <th scope="col">Mobil Barang</th>
                                                <th scope="col">Mobil Penumpang</th>
                                                <th scope="col">Mobil Bus</th>
                                                <th scope="col">Ransus</th>
                                                <th scope="col">Sepeda Motor</th>
                                                <th scope="col">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody-lakaMonth">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="row">
                            <div class="col-md-12 mt-3">
                                <h5>Ranking Polda Data Ranmor Tertinggi <?= date('Y'); ?></h5>
                                <div class="card shadow-sm">
                                    <table class="table table-bordered table-hover">
                                        <thead style="background-color:#007DD8; color:#fff;">
                                            <tr class="text-center">
                                                <th scope="col">No</th>
                                                <th scope="col">Polda</th>
                                                <th scope="col">Mobil Barang</th>
                                                <th scope="col">Mobil Penumpang</th>
                                                <th scope="col">Mobil Bus</th>
                                                <th scope="col">Ransus</th>
                                                <th scope="col">Sepeda Motor</th>
                                                <th scope="col">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody-lakaYear">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script>
    $(".apexcharts-xaxistooltip").click(function() {
        var selectedpolda = $(this).text();
        // do something
    });
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
        $("#overlay").fadeIn(300);
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/statistik_executive/getDetailStatistikRanmor",
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
                // $("#charta").html(`<div id="chart"></div>`);

                let polda_id = result.data.polda_id
                let polda_name = result.data.polda_name
                let polda_jumlah = result.data.polda_jumlah
                let polda_mobil_penumpang = result.data.polda_mobil_penumpang
                let polda_mobil_barang = result.data.polda_mobil_barang
                let polda_mobil_bus = result.data.polda_mobil_bus
                let polda_ransus = result.data.polda_ransus
                let polda_sepeda_motor = result.data.polda_sepeda_motor
                // Chart Kecelakaan Lalu Lintas


                // chart laka
                var chart = {
                    series: [{
                        name: 'Total Ranmor',
                        type: 'column',
                        data: polda_jumlah,
                        color: "#11347A"
                    }, {
                        name: 'Mobil Penumpang',
                        type: 'column',
                        data: polda_mobil_penumpang,
                        color: "#11347A"
                    }, {
                        name: 'Mobil Barang',
                        type: 'column',
                        data: polda_mobil_barang,
                        color: "#CB2D3E"
                    }, {
                        name: 'Mobil Bus',
                        type: 'column',
                        data: polda_mobil_bus,
                        color: "#E8D42F"
                    }, {
                        name: 'Ransus',
                        type: 'column',
                        data: polda_ransus,
                        color: "#E8D42F"
                    }, {
                        name: 'Sepeda Motor',
                        type: 'column',
                        data: polda_sepeda_motor,
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
                        width: [1, 1, 4, 4, 4, 4],
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
                            enabled: true,
                            position: 'topRight',
                            offsetX: -250,
                            offsetY: 0,
                        }
                    },
                };


                var chart = new ApexCharts(document.querySelector("#chart"), chart);
                chart.render();

            }
        })

        topRanmorDay(yesterday);
        topRanmorMonth(firstDayMonth, lastDayMonth);
        topRanmorYear(firstDay, lastDay);

        ranmor_daily(yesterday, firstDayMonth, lastDayMonth, firstDay, lastDay)
        RanmorlineChart(seven_daysAgo, yesterday)

        jam()
    })

    $('#limit_showData').on('change', function() {
        let filter = 0
        var limit = $('#limit_showData').val();
        var yesterday = new Date().toLocaleDateString('en-GB').split('/').reverse().join('-')
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/statistik_executive/getDetailStatistikRanmor",
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
                // $("#charta").html(`<div id="chart"></div>`);

                let polda_id = result.data.polda_id
                let polda_name = result.data.polda_name
                let polda_jumlah = result.data.polda_jumlah
                let polda_mobil_penumpang = result.data.polda_mobil_penumpang
                let polda_mobil_barang = result.data.polda_mobil_barang
                let polda_mobil_bus = result.data.polda_mobil_bus
                let polda_ransus = result.data.polda_ransus
                let polda_sepeda_motor = result.data.polda_sepeda_motor
                // Chart Kecelakaan Lalu Lintas


                // chart laka
                var chart = {
                    series: [{
                        name: 'Total Ranmor',
                        type: 'column',
                        data: polda_jumlah,
                        color: "#11347A"
                    }, {
                        name: 'Mobil Penumpang',
                        type: 'column',
                        data: polda_mobil_penumpang,
                        color: "#11347A"
                    }, {
                        name: 'Mobil Barang',
                        type: 'column',
                        data: polda_mobil_barang,
                        color: "#CB2D3E"
                    }, {
                        name: 'Mobil Bus',
                        type: 'column',
                        data: polda_mobil_bus,
                        color: "#E8D42F"
                    }, {
                        name: 'Ransus',
                        type: 'column',
                        data: polda_ransus,
                        color: "#E8D42F"
                    }, {
                        name: 'Sepeda Motor',
                        type: 'column',
                        data: polda_sepeda_motor,
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
                        width: [1, 1, 4, 4, 4, 4],
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
                            enabled: true,
                            position: 'topRight',
                            offsetX: -250,
                            offsetY: 0,
                        }
                    },
                };


                var chart = new ApexCharts(document.querySelector("#chart"), chart);
                chart.render();

            }
        })
    })

    function ranmor_daily(yesterday, firstDayMonth, lastDayMonth, firstDay, lastDay) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/statistik_executive/getRanmorDate",
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
                $('#ranmorThisDay').text(result.thisDay[0].ranmor)
                $('#ranmorThisMonth').text(result.thisMonth[0].ranmor)
                $('#ranmorThisYear').text(result.thisYear.ranmor)
            }
        })
    }

    function RanmorlineChart(seven_daysAgo, yesterday) {

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/Statistik_executive/getLineRanmor",
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
                        name: 'Mobil Barang',
                        type: 'line',
                        data: results.data.polda_mobil_barang,
                        color: "#11347A"
                    }, {
                        name: 'Mobil Penumpang',
                        type: 'line',
                        data: results.data.polda_mobil_penumpang,
                        color: "#CB2D3E"
                    }, {
                        name: 'Mobil Bus',
                        type: 'line',
                        data: results.data.polda_mobil_bus,
                        color: "#E8D42F"
                    }, {
                        name: 'Ransus',
                        type: 'line',
                        data: results.data.polda_ransus,
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

                var ditgakkum = new ApexCharts(document.querySelector("#chart2"), chart2);
                ditgakkum.render();
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
                url: "<?php echo base_url(); ?>executive/statistik_executive/getDetailStatistikRanmor",
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
                    $('#btn_export').attr('href', `http://34.143.227.90:3001/v1/laporan_harian/export_laphar?filter=true&start_date=${start_date}&end_date=${end_date}`)

                    let polda_id = result.data.polda_id
                    let polda_name = result.data.polda_name
                    let polda_jumlah = result.data.polda_jumlah
                    let polda_mobil_penumpang = result.data.polda_mobil_penumpang
                    let polda_mobil_barang = result.data.polda_mobil_barang
                    let polda_mobil_bus = result.data.polda_mobil_bus
                    let polda_ransus = result.data.polda_ransus
                    let polda_sepeda_motor = result.data.polda_sepeda_motor
                    // Chart Kecelakaan Lalu Lintas


                    // chart laka
                    var chart = {
                        series: [{
                            name: 'Total Turjawali',
                            type: 'column',
                            data: polda_jumlah,
                            color: "#11347A"
                        }, {
                            name: 'Mobil Penumpang',
                            type: 'column',
                            data: polda_mobil_penumpang,
                            color: "#11347A"
                        }, {
                            name: 'Mobil Barang',
                            type: 'column',
                            data: polda_mobil_barang,
                            color: "#CB2D3E"
                        }, {
                            name: 'Mobil Bus',
                            type: 'column',
                            data: polda_mobil_bus,
                            color: "#E8D42F"
                        }, {
                            name: 'Ransus',
                            type: 'column',
                            data: polda_ransus,
                            color: "#E8D42F"
                        }, {
                            name: 'Sepeda Motor',
                            type: 'column',
                            data: polda_sepeda_motor,
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
                            width: [1, 1, 4, 4, 4, 4],
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
                                enabled: true,
                                position: 'topRight',
                                offsetX: -220,
                                offsetY: 0,
                            }
                        },
                    };


                    var chart = new ApexCharts(document.querySelector("#chart"), chart);
                    chart.render();

                }
            })
            RanmorlineChart(start_date, end_date)

        }
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
                url: "<?php echo base_url(); ?>executive/statistik_executive/exportDataranmor",
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


    function topRanmorDay(yesterday) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/statistik_executive/getTopRanmor",
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
                            <td>  ${result[i].mobil_barang}  </td> 
                            <td>  ${result[i].mobil_penumpang}  </td> 
                            <td>  ${result[i].mobil_bus}  </td> 
                            <td>  ${result[i].ransus}  </td>
                            <td>  ${result[i].sepeda_motor}  </td>
                            <td>  ${result[i].total}  </td> 
                            </tr>`
                }
                $('#tbody-lakaDay').html(table);
            }
        })
    }

    function topRanmorMonth(firstDayMonth, lastDayMonth) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/statistik_executive/getRanmorMonth",
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
                            <td>  ${result[i].mobil_barang}  </td> 
                            <td>  ${result[i].mobil_penumpang}  </td> 
                            <td>  ${result[i].mobil_bus}  </td> 
                            <td>  ${result[i].ransus}  </td>
                            <td>  ${result[i].sepeda_motor}  </td>
                            <td>  ${result[i].total}  </td>  
                            </tr>`
                }
                $('#tbody-lakaMonth').html(table);
            }
        })
    }

    function topRanmorYear(firstDay, lastDay) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/statistik_executive/getRanmorYear",
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
                            <td>  ${result[i].mobil_barang}  </td> 
                            <td>  ${result[i].mobil_penumpang}  </td> 
                            <td>  ${result[i].mobil_bus}  </td> 
                            <td>  ${result[i].ransus}  </td>
                            <td>  ${result[i].sepeda_motor}  </td>
                            <td>  ${result[i].total}  </td>  
                            </tr>`
                }
                $('#tbody-lakaYear').html(table);
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