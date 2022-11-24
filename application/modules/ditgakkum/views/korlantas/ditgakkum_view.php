            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 align-self-center">
                        <div id="nama">
                            <div style="display: flex;">
                                <h3><a href="<?= base_url('dashboard') ?>" style="color:#007DD8 ;"><i class="fas fa-less-than"></i></a></h3>
                                &nbsp;&nbsp; <h3 style="text-transform: uppercase; color:#007DD8;"> Ditgakkum</h3>

                            </div>
                        </div>
                        <p>Today is <?= date('l, j F Y') ?></p>
                    </div>

                    <?php $mobile = detect_mobile();
                    if ($mobile === true) { ?>
                        <div class="col-md-12" style="margin-left: -15px;">
                            <button type="button" class="btn btn-primary ms-3" style=" border: 0.5px solid #0275d8; height:-20px" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <iconify-icon icon="mdi:file-document-multiple"></iconify-icon>
                            </button>
                            <button type="button" class="btn dropdown-toggle btn-outline-primary" data-toggle="dropdown" aria-expanded="false" style="width: 200px; border-color:#007DD8;">
                                Export Laporan
                            </button>

                            <div class="dropdown-menu" style="width: 200px;">
                                <a class="dropdown-item" href="http://34.143.227.90:3001/v1/laporan_harian/anev_gakkum?type=day&date=<?= date('Y-m-d'); ?>">Harian</a>
                                <a class="dropdown-item" href="http://34.143.227.90:3001/v1/laporan_harian/anev_gakkum?type=month&date=<?= date('m'); ?>">Bulanan</a>
                                <a class="dropdown-item" href="http://34.143.227.90:3001/v1/laporan_harian/anev_gakkum?type=years&date=<?= date('Y'); ?>">Tahunan</a>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="col-md-1 text-end align-self-center">
                            <button type="button" class="btn btn-primary ms-3" style=" border: 0.5px solid #0275d8; height:-20px" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <iconify-icon icon="mdi:file-document-multiple"></iconify-icon>
                            </button>
                        </div>
                        <div class="col-md-3 text-end align-self-center">

                            <div class="btn-group">
                                <button type="button" class="btn dropdown-toggle btn-outline-primary" data-toggle="dropdown" aria-expanded="false" style="width: 200px; border-color:#007DD8;">
                                    Export Laporan
                                </button>

                                <div class="dropdown-menu" style="width: 200px;">
                                    <a class="dropdown-item" href="http://34.143.227.90:3001/v1/laporan_harian/anev_gakkum?type=day&date=<?= date('Y-m-d'); ?>">Harian</a>
                                    <a class="dropdown-item" href="http://34.143.227.90:3001/v1/laporan_harian/anev_gakkum?type=month&date=<?= date('m'); ?>">Bulanan</a>
                                    <a class="dropdown-item" href="http://34.143.227.90:3001/v1/laporan_harian/anev_gakkum?type=years&date=<?= date('Y'); ?>">Tahunan</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <div class=" row">

                    <div class="col-md-12 mt-5">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-md-4 mb-3">
                                <h4 style="text-transform: uppercase; color:#007DD8;">Statistik Nasional</h4>
                            </div>
                            <div class="col-md-3">
                                <!-- <p style="color: red; margin-bottom:0;"><?= ucwords('last update ' . date('j F, Y'))  ?></p> -->
                                <!-- <p style="color: red; margin-bottom:0;"><?= ucwords('last update ' . date('j F, Y'))  ?></p> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                                    <div class="card-body">
                                        <div class="row justify-content-between align-items-center" style="height: 80px;">
                                            <div class="col-md-2">
                                                <i class='bx bxs-car-crash ms-n2' style="font-size: 50px; color: #464646;"></i>
                                            </div>
                                            <div class="col-md-10 float-end">
                                                <span class="fs-6 float-end" style="color:#464646;">
                                                    <span class="fw-bold">Total WAL & PJR</span>
                                                    <!-- <span class="fw-bold">Total WAL & PJR Hari ini</span> -->
                                                </span>
                                                <br>
                                                <span class="fs-6 fw-bold float-end" style="color:#464646;" id="walpjr"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-3">
                                <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                                    <div class="card-body">
                                        <div class="row justify-content-between align-items-center" style="height: 80px;">
                                            <div class="col-md-2">
                                                <iconify-icon icon="ic:round-car-crash" class="ms-n2" style="font-size: 50px; color: #464646;"></iconify-icon>
                                            </div>
                                            <div class="col-md-10 float-end">
                                                <span class="fs-6 float-end" style="color:#464646;">
                                                    <span class="fw-bold">TATIB </span>
                                                </span>
                                                <br>
                                                <span class="fs-6 fw-bold float-end" style="color:#464646;" id="turjagwali"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>

                            <div class="col-md-3">
                                <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                                    <div class="card-body">
                                        <div class="row justify-content-between align-items-center" style="height: 80px;">
                                            <div class="col-md-2">
                                                <iconify-icon icon="fa6-solid:motorcycle" class="ms-n2" style="font-size: 40px; color: #464646;"></iconify-icon>
                                            </div>
                                            <div class="col-md-10 float-end">
                                                <span class="fs-6 float-end" style="color:#464646;">
                                                    <span class="fw-bold">DAKGAR </span>
                                                </span>
                                                <br>
                                                <span class="fs-6 fw-bold float-end" style="color:#464646;" id="garlantas"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>

                            <div class="col-md-3">
                                <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                                    <div class="card-body">
                                        <div class="row justify-content-between align-items-center" style="height: 80px;">
                                            <div class="col-md-2">
                                                <i class='bx bxs-car-crash ms-n2' style="font-size: 50px; color: #464646;"></i>
                                            </div>
                                            <div class="col-md-10 float-end">
                                                <span class="fs-6 float-end" style="color:#464646;">
                                                    <span class="fw-bold">LAKA</span>
                                                </span>
                                                <br>
                                                <span class="fs-6 fw-bold float-end" style="color:#464646;" id="lakalantas"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end statistik -->
                </div>

                <ul class="nav nav-pills  mt-3" id="pills-tab" role="tablist">
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
                        <section class="shadow-sm mt-5">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div id="titlewalpjrday"></div>
                                        </div>
                                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                            <div class="main-chart">
                                                <div id="chartdaya">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="shadow-sm mt-5">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div id="titletatibday"></div>
                                        </div>
                                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                            <div class="main-chart">
                                                <div id="chartdayb">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="shadow-sm mt-5">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div id="titlegarlantasday"></div>
                                        </div>
                                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                            <div class="main-chart">
                                                <div id="chartdayc">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="shadow-sm mt-5">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div id="titlelakalantasday"></div>
                                        </div>
                                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                            <div class="main-chart">
                                                <div id="chartdayd">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <section class="shadow-sm mt-5">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div id="titlewalpjrmonth"></div>
                                        </div>
                                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                            <div class="main-chart">
                                                <div id="chartmontha">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="shadow-sm mt-5">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div id="titletatibmonth"></div>
                                        </div>
                                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                            <div class="main-chart">
                                                <div id="chartmonthb">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="shadow-sm mt-5">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div id="titlegarlantasmonth"></div>
                                        </div>
                                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                            <div class="main-chart">
                                                <div id="chartmonthc">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="shadow-sm mt-5">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div id="titlelakalantasmonth"></div>
                                        </div>
                                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                            <div class="main-chart">
                                                <div id="chartmonthd">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <section class="shadow-sm mt-5">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div id="titlewalpjryear"></div>
                                        </div>
                                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                            <div class="main-chart">
                                                <div id="chartyeara">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="shadow-sm mt-5">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div id="titletatibyear"></div>
                                        </div>
                                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                            <div class="main-chart">
                                                <div id="chartyearb">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="shadow-sm mt-5">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div id="titlegarlantasyear"></div>
                                        </div>
                                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                            <div class="main-chart">
                                                <div id="chartyearc">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="shadow-sm mt-5">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div id="titlelakalantasyear"></div>
                                        </div>
                                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                            <div class="main-chart">
                                                <div id="chartyeard">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-uppercase" id="exampleModalLabel">Struktur Organisasi <?= $title; ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <center>
                                <img src="<?= base_url('assets/fe/strukturorganisasi/strukturditgakkum.png'); ?>" alt="" srcset="">
                            </center>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.36.3/apexcharts.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
            <script>
                var date = new Date();
                var year = new Date();
                var firstDay = new Date(date.getFullYear(), 0).toLocaleDateString("en-GB").split('/').reverse().join('-');
                var lastDay = new Date(date.getFullYear(), 11, 31).toLocaleDateString("en-GB").split('/').reverse().join('-');
                var today = new Date().toLocaleDateString('en-GB').split('/').reverse().join('-')

                date.setDate(date.getDate() - 6);
                var seven_daysAgo = date.toLocaleDateString("en-GB").split('/').reverse().join('-');

                year.setFullYear(year.getFullYear() - 2);
                var dataawal = year.toLocaleDateString("en-GB").split('/').reverse().join('-');
                var daymonth = firstDay.split('-');
                var year = dataawal.split('-');
                var three_yearAgo = year[0] + '-' + daymonth[1] + '-' + daymonth[2];

                // Day
                $("#chartdaya").html(`<div id="chartday1"></div>`);
                $("#chartdayb").html(`<div id="chartday2"></div>`);
                $("#chartdayc").html(`<div id="chartday3"></div>`);
                $("#chartdayd").html(`<div id="chartday4"></div>`);

                // Month
                $("#chartmontha").html(`<div id="chart"></div>`);
                $("#chartmonthb").html(`<div id="chart2"></div>`);
                $("#chartmonthc").html(`<div id="chart3"></div>`);
                $("#chartmonthd").html(`<div id="chart4"></div>`);

                // Year
                $("#chartyeara").html(`<div id="chartyear"></div>`);
                $("#chartyearb").html(`<div id="chartyear2"></div>`);
                $("#chartyearc").html(`<div id="chartyear3"></div>`);
                $("#chartyeard").html(`<div id="chartyear4"></div>`);


                getStatistik();

                function getStatistik() {
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>ditgakkum/getStatistik",
                        dataType: "JSON",
                        success: function(result) {
                            $("#overlay").fadeOut(300);
                            $('#lakalantas').html(`<span class="fs-4" >${result.lakalantas}</span >`);
                            $('#garlantas').html(`<span class="fs-4" >${result.garlantas}</span >`);
                            $('#turjagwali').html(`<span class="fs-4" >${result.turjagwali}</span >`);
                            $('#walpjr').html(`<span class="fs-4" >${result.walpjr}</span>`);
                        }
                    })
                }

                getDitgakkumday(today, seven_daysAgo)
                getDitgakkummonth(firstDay, lastDay)
                getDitgakkumyear(three_yearAgo, lastDay)
                // Day
                function getDitgakkumday(today, seven_daysAgo) {
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>ditgakkum/getChartDitgakkum",
                        data: {
                            start_date: seven_daysAgo,
                            end_date: today,
                            filter: 'day'
                        },
                        dataType: "JSON",
                        success: function(result) {
                            let polda_month = result.data.polda_month
                            let walpjr = result.data.walpjr
                            let turjagwali = result.data.turjagwali
                            let garlantas = result.data.garlantas
                            let lakalantas = result.data.lakalantas
                            $('#titlewalpjrday').html(`<h4 class="card-title mb-0 text-uppercase">DATA WAL & PJR HARIAN</h4>`);
                            $('#titletatibday').html(`<h4 class="card-title mb-0 text-uppercase">DATA TATIB HARIAN</h4>`);
                            $('#titlegarlantasday').html(`<h4 class="card-title mb-0 text-uppercase">DATA DAKGAR HARIAN</h4>`);
                            $('#titlelakalantasday').html(`<h4 class="card-title mb-0 text-uppercase">DATA LAKA HARIAN</h4>`);

                            var ditgakkumwalpjrday = {
                                series: [{
                                    name: 'WAL & PJR',
                                    type: 'line',
                                    data: walpjr,
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
                                    categories: polda_month,
                                },
                                tooltip: {
                                    custom: function({
                                        series,
                                        seriesIndex,
                                        dataPointIndex,
                                        seriesName,
                                        w
                                    }) {
                                        if (w.globals.labels[dataPointIndex] == 2) {
                                            bulansebelumnya = polda_month[0]
                                            walpjrsebelumnya = walpjr[0];

                                            if (walpjr[0] < walpjr[1]) {
                                                persentasewalpjr = 'Naik'
                                            } else if (walpjr[0] > walpjr[1]) {
                                                persentasewalpjr = 'Turun'
                                            } else {
                                                persentasewalpjr = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            walpjrsebelumnya = walpjr[1];
                                            if (walpjr[1] < walpjr[2]) {
                                                persentasewalpjr = 'Naik'
                                            } else if (walpjr[1] > walpjr[2]) {
                                                persentasewalpjr = 'Turun'
                                            } else {
                                                persentasewalpjr = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 4) {
                                            bulansebelumnya = polda_month[2]
                                            walpjrsebelumnya = walpjr[2];
                                            if (walpjr[2] < walpjr[3]) {
                                                persentasewalpjr = 'Naik'
                                            } else if (walpjr[2] > walpjr[3]) {
                                                persentasewalpjr = 'Turun'
                                            } else {
                                                persentasewalpjr = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 5) {
                                            bulansebelumnya = polda_month[3]
                                            walpjrsebelumnya = walpjr[3];
                                            if (walpjr[3] < walpjr[4]) {
                                                persentasewalpjr = 'Naik'
                                            } else if (walpjr[3] > walpjr[4]) {
                                                persentasewalpjr = 'Turun'
                                            } else {
                                                persentasewalpjr = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 6) {
                                            bulansebelumnya = polda_month[4]
                                            walpjrsebelumnya = walpjr[4];
                                            if (walpjr[4] < walpjr[5]) {
                                                persentasewalpjr = 'Naik'
                                            } else if (walpjr[4] > walpjr[5]) {
                                                persentasewalpjr = 'Turun'
                                            } else {
                                                persentasewalpjr = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 7) {
                                            bulansebelumnya = polda_month[5]
                                            walpjrsebelumnya = walpjr[5];
                                            if (walpjr[5] < walpjr[6]) {
                                                persentasewalpjr = 'Naik'
                                            } else if (walpjr[5] > walpjr[6]) {
                                                persentasewalpjr = 'Turun'
                                            } else {
                                                persentasewalpjr = 'Sama'
                                            }
                                        }
                                        return (
                                            `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 36rem; height:10rem;">`:'<div style="width: 16rem; height:10rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                <div class="my-2  text-center"">   
                                                    <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-8 ms-1">
                                                            <span class="fw-bold">Total WAL & PJR</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${walpjrsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total WAL & PJR</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${walpjr[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasewalpjr}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total WAL & PJR</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${walpjr[dataPointIndex]}</span><br>
                                                            </div>
                                                    </div>
                                                </div>`}
                                            </div>
                                        </div>
                                    </div>`
                                        );
                                    }
                                }
                            };

                            var ditgakkumwalpjrday = new ApexCharts(document.querySelector("#chartday1"), ditgakkumwalpjrday);
                            ditgakkumwalpjrday.render();


                            var ditgakkumtatibday = {
                                series: [{
                                    name: 'Tatib',
                                    type: 'line',
                                    data: turjagwali,
                                    color: "#CB2D3E"
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
                                    categories: polda_month,
                                },
                                tooltip: {
                                    custom: function({
                                        series,
                                        seriesIndex,
                                        dataPointIndex,
                                        seriesName,
                                        w
                                    }) {
                                        if (w.globals.labels[dataPointIndex] == 2) {
                                            bulansebelumnya = polda_month[0]
                                            turjagwalisebelumnya = turjagwali[0];

                                            if (turjagwali[0] < turjagwali[1]) {
                                                persentaseturjagwali = 'Naik'
                                            } else if (turjagwali[0] > turjagwali[1]) {
                                                persentaseturjagwali = 'Turun'
                                            } else {
                                                persentaseturjagwali = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            turjagwalisebelumnya = turjagwali[1];
                                            if (turjagwali[1] < turjagwali[2]) {
                                                persentaseturjagwali = 'Naik'
                                            } else if (turjagwali[1] > turjagwali[2]) {
                                                persentaseturjagwali = 'Turun'
                                            } else {
                                                persentaseturjagwali = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 4) {
                                            bulansebelumnya = polda_month[2]
                                            turjagwalisebelumnya = turjagwali[2];
                                            if (turjagwali[2] < turjagwali[3]) {
                                                persentaseturjagwali = 'Naik'
                                            } else if (turjagwali[2] > turjagwali[3]) {
                                                persentaseturjagwali = 'Turun'
                                            } else {
                                                persentaseturjagwali = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 5) {
                                            bulansebelumnya = polda_month[3]
                                            turjagwalisebelumnya = turjagwali[3];
                                            if (turjagwali[3] < turjagwali[4]) {
                                                persentaseturjagwali = 'Naik'
                                            } else if (turjagwali[3] > turjagwali[4]) {
                                                persentaseturjagwali = 'Turun'
                                            } else {
                                                persentaseturjagwali = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 6) {
                                            bulansebelumnya = polda_month[5]
                                            turjagwalisebelumnya = turjagwali[4];
                                            if (turjagwali[4] < turjagwali[5]) {
                                                persentaseturjagwali = 'Naik'
                                            } else if (turjagwali[4] > turjagwali[5]) {
                                                persentaseturjagwali = 'Turun'
                                            } else {
                                                persentaseturjagwali = 'Sama'
                                            }
                                        }

                                        return (
                                            `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 36rem; height:10rem;">`:'<div style="width: 16rem; height:10rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                <div class="my-2  text-center"">   
                                                    <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-8 ms-1">
                                                            <span class="fw-bold">Total TATIB</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${turjagwalisebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total TATIB</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${turjagwali[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentaseturjagwali}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total TATIB</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${turjagwali[dataPointIndex]}</span><br>
                                                            </div>
                                                    </div>
                                                </div>`}
                                            </div>
                                        </div>
                                    </div>`

                                        );
                                    }
                                }

                            };

                            var ditgakkumtatibday = new ApexCharts(document.querySelector("#chartday2"), ditgakkumtatibday);
                            ditgakkumtatibday.render();


                            var ditgakkumdakgarday = {
                                series: [{
                                    name: 'DAKGAR',
                                    type: 'line',
                                    data: garlantas,
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
                                    categories: polda_month,
                                },
                                tooltip: {
                                    custom: function({
                                        series,
                                        seriesIndex,
                                        dataPointIndex,
                                        seriesName,
                                        w
                                    }) {
                                        if (w.globals.labels[dataPointIndex] == 2) {
                                            bulansebelumnya = polda_month[0]
                                            garlantassebelumnya = garlantas[0];

                                            if (garlantas[0] < garlantas[1]) {
                                                persentasegarlantas = 'Naik'
                                            } else if (garlantas[0] > garlantas[1]) {
                                                persentasegarlantas = 'Turun'
                                            } else {
                                                persentasegarlantas = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            garlantassebelumnya = garlantas[1];
                                            if (garlantas[1] < garlantas[2]) {
                                                persentasegarlantas = 'Naik'
                                            } else if (garlantas[1] > garlantas[2]) {
                                                persentasegarlantas = 'Turun'
                                            } else {
                                                persentasegarlantas = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 4) {
                                            bulansebelumnya = polda_month[2]
                                            garlantassebelumnya = garlantas[2];
                                            if (garlantas[2] < garlantas[3]) {
                                                persentasegarlantas = 'Naik'
                                            } else if (garlantas[2] > garlantas[3]) {
                                                persentasegarlantas = 'Turun'
                                            } else {
                                                persentasegarlantas = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 5) {
                                            bulansebelumnya = polda_month[3]
                                            garlantassebelumnya = garlantas[3];
                                            if (garlantas[3] < garlantas[4]) {
                                                persentasegarlantas = 'Naik'
                                            } else if (garlantas[3] > garlantas[4]) {
                                                persentasegarlantas = 'Turun'
                                            } else {
                                                persentasegarlantas = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 6) {
                                            bulansebelumnya = polda_month[4]
                                            garlantassebelumnya = garlantas[4];
                                            if (garlantas[4] < garlantas[5]) {
                                                persentasegarlantas = 'Naik'
                                            } else if (garlantas[4] > garlantas[5]) {
                                                persentasegarlantas = 'Turun'
                                            } else {
                                                persentasegarlantas = 'Sama'
                                            }
                                        }

                                        return (
                                            `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 36rem; height:10rem;">`:'<div style="width: 16rem; height:10rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                <div class="my-2  text-center"">   
                                                    <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-8 ms-1">
                                                            <span class="fw-bold">Total DAKGAR</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${garlantassebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total DAKGAR</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${garlantas[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasegarlantas}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total DAKGAR</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${garlantas[dataPointIndex]}</span><br>
                                                            </div>
                                                    </div>
                                                </div>`}
                                            </div>
                                        </div>
                                    </div>`

                                        );
                                    }
                                }

                            };

                            var ditgakkumdakgarday = new ApexCharts(document.querySelector("#chartday3"), ditgakkumdakgarday);
                            ditgakkumdakgarday.render();


                            var ditgakkumlakaday = {
                                series: [{
                                    name: 'LAKA',
                                    type: 'line',
                                    data: lakalantas,
                                    color: "#EDF12D"
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
                                    categories: polda_month,
                                },
                                tooltip: {
                                    custom: function({
                                        series,
                                        seriesIndex,
                                        dataPointIndex,
                                        seriesName,
                                        w
                                    }) {
                                        if (w.globals.labels[dataPointIndex] == 2) {
                                            bulansebelumnya = polda_month[0]
                                            lakalantassebelumnya = lakalantas[0];

                                            if (lakalantas[0] < lakalantas[1]) {
                                                persentaselakalantas = 'Naik'
                                            } else if (lakalantas[0] > lakalantas[1]) {
                                                persentaselakalantas = 'Turun'
                                            } else {
                                                persentaselakalantas = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            lakalantassebelumnya = lakalantas[1];
                                            if (lakalantas[1] < lakalantas[2]) {
                                                persentaselakalantas = 'Naik'
                                            } else if (lakalantas[1] > lakalantas[2]) {
                                                persentaselakalantas = 'Turun'
                                            } else {
                                                persentaselakalantas = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 4) {
                                            bulansebelumnya = polda_month[2]
                                            lakalantassebelumnya = lakalantas[2];
                                            if (lakalantas[2] < lakalantas[3]) {
                                                persentaselakalantas = 'Naik'
                                            } else if (lakalantas[2] > lakalantas[3]) {
                                                persentaselakalantas = 'Turun'
                                            } else {
                                                persentaselakalantas = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 5) {
                                            bulansebelumnya = polda_month[3]
                                            lakalantassebelumnya = lakalantas[3];
                                            if (lakalantas[3] < lakalantas[4]) {
                                                persentaselakalantas = 'Naik'
                                            } else if (lakalantas[3] > lakalantas[4]) {
                                                persentaselakalantas = 'Turun'
                                            } else {
                                                persentaselakalantas = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 6) {
                                            bulansebelumnya = polda_month[4]
                                            lakalantassebelumnya = lakalantas[4];
                                            if (lakalantas[4] < lakalantas[5]) {
                                                persentaselakalantas = 'Naik'
                                            } else if (lakalantas[4] > lakalantas[5]) {
                                                persentaselakalantas = 'Turun'
                                            } else {
                                                persentaselakalantas = 'Sama'
                                            }
                                        }

                                        return (
                                            `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 36rem; height:10rem;">`:'<div style="width: 16rem; height:10rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                <div class="my-2  text-center"">   
                                                    <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-8 ms-1">
                                                            <span class="fw-bold">Total LAKA</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${lakalantassebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total LAKA</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${lakalantas[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentaselakalantas}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total LAKA</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${lakalantas[dataPointIndex]}</span><br>
                                                            </div>
                                                    </div>
                                                </div>`}
                                            </div>
                                        </div>
                                    </div>`

                                        );
                                    }
                                }

                            };

                            var ditgakkumlakaday = new ApexCharts(document.querySelector("#chartday4"), ditgakkumlakaday);
                            ditgakkumlakaday.render();
                        }
                    })
                }


                // Month
                function getDitgakkummonth(firstDay, lastDay) {
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>ditgakkum/getChartDitgakkum",
                        data: {
                            start_date: firstDay,
                            end_date: lastDay,
                            filter: 'month'
                        },
                        dataType: "JSON",
                        success: function(result) {
                            let polda_month = result.data.polda_month
                            let walpjr = result.data.walpjr
                            let turjagwali = result.data.turjagwali
                            let garlantas = result.data.garlantas
                            let lakalantas = result.data.lakalantas
                            $('#titlewalpjrmonth').html(`<h4 class="card-title mb-0 text-uppercase">DATA WAL & PJR BULANAN</h4>`);
                            $('#titletatibmonth').html(`<h4 class="card-title mb-0 text-uppercase">DATA TATIB BULANAN</h4>`);
                            $('#titlegarlantasmonth').html(`<h4 class="card-title mb-0 text-uppercase">DATA DAKGAR BULANAN</h4>`);
                            $('#titlelakalantasmonth').html(`<h4 class="card-title mb-0 text-uppercase">DATA LAKA BULANAN</h4>`);

                            var ditgakkumwalpjr = {
                                series: [{
                                    name: 'WAL & PJR',
                                    type: 'line',
                                    data: walpjr,
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
                                    categories: polda_month,
                                },
                                tooltip: {
                                    custom: function({
                                        series,
                                        seriesIndex,
                                        dataPointIndex,
                                        seriesName,
                                        w
                                    }) {
                                        if (w.globals.labels[dataPointIndex] == 2) {
                                            bulansebelumnya = polda_month[0]
                                            walpjrsebelumnya = walpjr[0];

                                            if (walpjr[0] < walpjr[1]) {
                                                persentasewalpjr = 'Naik'
                                            } else if (walpjr[0] > walpjr[1]) {
                                                persentasewalpjr = 'Turun'
                                            } else {
                                                persentasewalpjr = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            walpjrsebelumnya = walpjr[1];
                                            if (walpjr[1] < walpjr[2]) {
                                                persentasewalpjr = 'Naik'
                                            } else if (walpjr[1] > walpjr[2]) {
                                                persentasewalpjr = 'Turun'
                                            } else {
                                                persentasewalpjr = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 4) {
                                            bulansebelumnya = polda_month[2]
                                            walpjrsebelumnya = walpjr[2];
                                            if (walpjr[2] < walpjr[3]) {
                                                persentasewalpjr = 'Naik'
                                            } else if (walpjr[2] > walpjr[3]) {
                                                persentasewalpjr = 'Turun'
                                            } else {
                                                persentasewalpjr = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 5) {
                                            bulansebelumnya = polda_month[3]
                                            walpjrsebelumnya = walpjr[3];
                                            if (walpjr[3] < walpjr[4]) {
                                                persentasewalpjr = 'Naik'
                                            } else if (walpjr[3] > walpjr[4]) {
                                                persentasewalpjr = 'Turun'
                                            } else {
                                                persentasewalpjr = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 6) {
                                            bulansebelumnya = polda_month[4]
                                            walpjrsebelumnya = walpjr[4];
                                            if (walpjr[4] < walpjr[5]) {
                                                persentasewalpjr = 'Naik'
                                            } else if (walpjr[4] > walpjr[5]) {
                                                persentasewalpjr = 'Turun'
                                            } else {
                                                persentasewalpjr = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 7) {
                                            bulansebelumnya = polda_month[5]
                                            walpjrsebelumnya = walpjr[5];
                                            if (walpjr[5] < walpjr[6]) {
                                                persentasewalpjr = 'Naik'
                                            } else if (walpjr[5] > walpjr[6]) {
                                                persentasewalpjr = 'Turun'
                                            } else {
                                                persentasewalpjr = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 8) {
                                            bulansebelumnya = polda_month[6]
                                            walpjrsebelumnya = walpjr[6];
                                            if (walpjr[6] < walpjr[7]) {
                                                persentasewalpjr = 'Naik'
                                            } else if (walpjr[6] > walpjr[7]) {
                                                persentasewalpjr = 'Turun'
                                            } else {
                                                persentasewalpjr = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 9) {
                                            bulansebelumnya = polda_month[7]
                                            walpjrsebelumnya = walpjr[7];
                                            if (walpjr[7] < walpjr[8]) {
                                                persentasewalpjr = 'Naik'
                                            } else if (walpjr[7] > walpjr[8]) {
                                                persentasewalpjr = 'Turun'
                                            } else {
                                                persentasewalpjr = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 10) {
                                            bulansebelumnya = polda_month[8]
                                            walpjrsebelumnya = walpjr[8];
                                            if (walpjr[8] < walpjr[9]) {
                                                persentasewalpjr = 'Naik'
                                            } else if (walpjr[8] > walpjr[9]) {
                                                persentasewalpjr = 'Turun'
                                            } else {
                                                persentasewalpjr = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 11) {
                                            bulansebelumnya = polda_month[9]
                                            walpjrsebelumnya = walpjr[9];
                                            if (walpjr[9] < walpjr[10]) {
                                                persentasewalpjr = 'Naik'
                                            } else if (walpjr[9] > walpjr[10]) {
                                                persentasewalpjr = 'Turun'
                                            } else {
                                                persentasewalpjr = `Sama`
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 12) {
                                            bulansebelumnya = polda_month[10]
                                            walpjrsebelumnya = walpjr[10];
                                            if (walpjr[10] < walpjr[11]) {
                                                persentasewalpjr = 'Naik'
                                            } else if (walpjr[10] > walpjr[11]) {
                                                persentasewalpjr = 'Turun'
                                            } else {
                                                persentasewalpjr = 'Sama'
                                            }
                                        }

                                        return (
                                            `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 36rem; height:10rem;">`:'<div style="width: 16rem; height:10rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                <div class="my-2  text-center"">   
                                                    <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-8 ms-1">
                                                            <span class="fw-bold">Total WAL & PJR</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${walpjrsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total WAL & PJR</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${walpjr[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasewalpjr}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total WAL & PJR</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${walpjr[dataPointIndex]}</span><br>
                                                            </div>
                                                    </div>
                                                </div>`}
                                            </div>
                                        </div>
                                    </div>`
                                        );
                                    }
                                }
                            };

                            var ditgakkumwalpjr = new ApexCharts(document.querySelector("#chart"), ditgakkumwalpjr);
                            ditgakkumwalpjr.render();


                            var ditgakkumtatib = {
                                series: [{
                                    name: 'Tatib',
                                    type: 'line',
                                    data: turjagwali,
                                    color: "#CB2D3E"
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
                                    categories: polda_month,
                                },
                                tooltip: {
                                    custom: function({
                                        series,
                                        seriesIndex,
                                        dataPointIndex,
                                        seriesName,
                                        w
                                    }) {
                                        if (w.globals.labels[dataPointIndex] == 2) {
                                            bulansebelumnya = polda_month[0]
                                            turjagwalisebelumnya = turjagwali[0];

                                            if (turjagwali[0] < turjagwali[1]) {
                                                persentaseturjagwali = 'Naik'
                                            } else if (turjagwali[0] > turjagwali[1]) {
                                                persentaseturjagwali = 'Turun'
                                            } else {
                                                persentaseturjagwali = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            turjagwalisebelumnya = turjagwali[1];
                                            if (turjagwali[1] < turjagwali[2]) {
                                                persentaseturjagwali = 'Naik'
                                            } else if (turjagwali[1] > turjagwali[2]) {
                                                persentaseturjagwali = 'Turun'
                                            } else {
                                                persentaseturjagwali = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 4) {
                                            bulansebelumnya = polda_month[2]
                                            turjagwalisebelumnya = turjagwali[2];
                                            if (turjagwali[2] < turjagwali[3]) {
                                                persentaseturjagwali = 'Naik'
                                            } else if (turjagwali[2] > turjagwali[3]) {
                                                persentaseturjagwali = 'Turun'
                                            } else {
                                                persentaseturjagwali = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 5) {
                                            bulansebelumnya = polda_month[3]
                                            turjagwalisebelumnya = turjagwali[3];
                                            if (turjagwali[3] < turjagwali[4]) {
                                                persentaseturjagwali = 'Naik'
                                            } else if (turjagwali[3] > turjagwali[4]) {
                                                persentaseturjagwali = 'Turun'
                                            } else {
                                                persentaseturjagwali = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 6) {
                                            bulansebelumnya = polda_month[4]
                                            turjagwalisebelumnya = turjagwali[4];
                                            if (turjagwali[4] < turjagwali[5]) {
                                                persentaseturjagwali = 'Naik'
                                            } else if (turjagwali[4] > turjagwali[5]) {
                                                persentaseturjagwali = 'Turun'
                                            } else {
                                                persentaseturjagwali = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 7) {
                                            bulansebelumnya = polda_month[5]
                                            turjagwalisebelumnya = turjagwali[5];
                                            if (turjagwali[5] < turjagwali[6]) {
                                                persentaseturjagwali = 'Naik'
                                            } else if (turjagwali[5] > turjagwali[6]) {
                                                persentaseturjagwali = 'Turun'
                                            } else {
                                                persentaseturjagwali = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 8) {
                                            bulansebelumnya = polda_month[6]
                                            turjagwalisebelumnya = turjagwali[6];
                                            if (turjagwali[6] < turjagwali[7]) {
                                                persentaseturjagwali = 'Naik'
                                            } else if (turjagwali[6] > turjagwali[7]) {
                                                persentaseturjagwali = 'Turun'
                                            } else {
                                                persentaseturjagwali = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 9) {
                                            bulansebelumnya = polda_month[7]
                                            turjagwalisebelumnya = turjagwali[7];
                                            if (turjagwali[7] < turjagwali[8]) {
                                                persentaseturjagwali = 'Naik'
                                            } else if (turjagwali[7] > turjagwali[8]) {
                                                persentaseturjagwali = 'Turun'
                                            } else {
                                                persentaseturjagwali = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 10) {
                                            bulansebelumnya = polda_month[8]
                                            turjagwalisebelumnya = turjagwali[8];
                                            if (turjagwali[8] < turjagwali[9]) {
                                                persentaseturjagwali = 'Naik'
                                            } else if (turjagwali[8] > turjagwali[9]) {
                                                persentaseturjagwali = 'Turun'
                                            } else {
                                                persentaseturjagwali = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 11) {
                                            bulansebelumnya = polda_month[9]
                                            turjagwalisebelumnya = turjagwali[9];
                                            if (turjagwali[9] < turjagwali[10]) {
                                                persentaseturjagwali = 'Naik'
                                            } else if (turjagwali[9] > turjagwali[10]) {
                                                persentaseturjagwali = 'Turun'
                                            } else {
                                                persentaseturjagwali = `Sama`
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 12) {
                                            bulansebelumnya = polda_month[10]
                                            turjagwalisebelumnya = turjagwali[10];
                                            if (turjagwali[10] < turjagwali[11]) {
                                                persentaseturjagwali = 'Naik'
                                            } else if (turjagwali[10] > turjagwali[11]) {
                                                persentaseturjagwali = 'Turun'
                                            } else {
                                                persentaseturjagwali = 'Sama'
                                            }
                                        }

                                        return (
                                            `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 36rem; height:10rem;">`:'<div style="width: 16rem; height:10rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                <div class="my-2  text-center"">   
                                                    <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-8 ms-1">
                                                            <span class="fw-bold">Total TATIB</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${turjagwalisebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total TATIB</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${turjagwali[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentaseturjagwali}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total TATIB</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${turjagwali[dataPointIndex]}</span><br>
                                                            </div>
                                                    </div>
                                                </div>`}
                                            </div>
                                        </div>
                                    </div>`

                                        );
                                    }
                                }

                            };

                            var ditgakkumtatib = new ApexCharts(document.querySelector("#chart2"), ditgakkumtatib);
                            ditgakkumtatib.render();


                            var ditgakkumdakgar = {
                                series: [{
                                    name: 'DAKGAR',
                                    type: 'line',
                                    data: garlantas,
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
                                    categories: polda_month,
                                },
                                tooltip: {
                                    custom: function({
                                        series,
                                        seriesIndex,
                                        dataPointIndex,
                                        seriesName,
                                        w
                                    }) {
                                        if (w.globals.labels[dataPointIndex] == 2) {
                                            bulansebelumnya = polda_month[0]
                                            garlantassebelumnya = garlantas[0];

                                            if (garlantas[0] < garlantas[1]) {
                                                persentasegarlantas = 'Naik'
                                            } else if (garlantas[0] > garlantas[1]) {
                                                persentasegarlantas = 'Turun'
                                            } else {
                                                persentasegarlantas = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            garlantassebelumnya = garlantas[1];
                                            if (garlantas[1] < garlantas[2]) {
                                                persentasegarlantas = 'Naik'
                                            } else if (garlantas[1] > garlantas[2]) {
                                                persentasegarlantas = 'Turun'
                                            } else {
                                                persentasegarlantas = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 4) {
                                            bulansebelumnya = polda_month[2]
                                            garlantassebelumnya = garlantas[2];
                                            if (garlantas[2] < garlantas[3]) {
                                                persentasegarlantas = 'Naik'
                                            } else if (garlantas[2] > garlantas[3]) {
                                                persentasegarlantas = 'Turun'
                                            } else {
                                                persentasegarlantas = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 5) {
                                            bulansebelumnya = polda_month[3]
                                            garlantassebelumnya = garlantas[3];
                                            if (garlantas[3] < garlantas[4]) {
                                                persentasegarlantas = 'Naik'
                                            } else if (garlantas[3] > garlantas[4]) {
                                                persentasegarlantas = 'Turun'
                                            } else {
                                                persentasegarlantas = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 6) {
                                            bulansebelumnya = polda_month[4]
                                            garlantassebelumnya = garlantas[4];
                                            if (garlantas[4] < garlantas[5]) {
                                                persentasegarlantas = 'Naik'
                                            } else if (garlantas[4] > garlantas[5]) {
                                                persentasegarlantas = 'Turun'
                                            } else {
                                                persentasegarlantas = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 7) {
                                            bulansebelumnya = polda_month[5]
                                            garlantassebelumnya = garlantas[5];
                                            if (garlantas[5] < garlantas[6]) {
                                                persentasegarlantas = 'Naik'
                                            } else if (garlantas[5] > garlantas[6]) {
                                                persentasegarlantas = 'Turun'
                                            } else {
                                                persentasegarlantas = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 8) {
                                            bulansebelumnya = polda_month[6]
                                            garlantassebelumnya = garlantas[6];
                                            if (garlantas[6] < garlantas[7]) {
                                                persentasegarlantas = 'Naik'
                                            } else if (garlantas[6] > garlantas[7]) {
                                                persentasegarlantas = 'Turun'
                                            } else {
                                                persentasegarlantas = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 9) {
                                            bulansebelumnya = polda_month[7]
                                            garlantassebelumnya = garlantas[7];
                                            if (garlantas[7] < garlantas[8]) {
                                                persentasegarlantas = 'Naik'
                                            } else if (garlantas[7] > garlantas[8]) {
                                                persentasegarlantas = 'Turun'
                                            } else {
                                                persentasegarlantas = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 10) {
                                            bulansebelumnya = polda_month[8]
                                            garlantassebelumnya = garlantas[8];
                                            if (garlantas[8] < garlantas[9]) {
                                                persentasegarlantas = 'Naik'
                                            } else if (garlantas[8] > garlantas[9]) {
                                                persentasegarlantas = 'Turun'
                                            } else {
                                                persentasegarlantas = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 11) {
                                            bulansebelumnya = polda_month[9]
                                            garlantassebelumnya = garlantas[9];
                                            if (garlantas[9] < garlantas[10]) {
                                                persentasegarlantas = 'Naik'
                                            } else if (garlantas[9] > garlantas[10]) {
                                                persentasegarlantas = 'Turun'
                                            } else {
                                                persentasegarlantas = `Sama`
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 12) {
                                            bulansebelumnya = polda_month[10]
                                            garlantassebelumnya = garlantas[10];
                                            if (garlantas[10] < garlantas[11]) {
                                                persentasegarlantas = 'Naik'
                                            } else if (garlantas[10] > garlantas[11]) {
                                                persentasegarlantas = 'Turun'
                                            } else {
                                                persentasegarlantas = 'Sama'
                                            }
                                        }

                                        return (
                                            `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 36rem; height:10rem;">`:'<div style="width: 16rem; height:10rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                <div class="my-2  text-center"">   
                                                    <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-8 ms-1">
                                                            <span class="fw-bold">Total DAKGAR</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${garlantassebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total DAKGAR</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${garlantas[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasegarlantas}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total DAKGAR</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${garlantas[dataPointIndex]}</span><br>
                                                            </div>
                                                    </div>
                                                </div>`}
                                            </div>
                                        </div>
                                    </div>`

                                        );
                                    }
                                }

                            };

                            var ditgakkumdakgar = new ApexCharts(document.querySelector("#chart3"), ditgakkumdakgar);
                            ditgakkumdakgar.render();


                            var ditgakkumlaka = {
                                series: [{
                                    name: 'LAKA',
                                    type: 'line',
                                    data: lakalantas,
                                    color: "#EDF12D"
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
                                    categories: polda_month,
                                },
                                tooltip: {
                                    custom: function({
                                        series,
                                        seriesIndex,
                                        dataPointIndex,
                                        seriesName,
                                        w
                                    }) {
                                        if (w.globals.labels[dataPointIndex] == 2) {
                                            bulansebelumnya = polda_month[0]
                                            lakalantassebelumnya = lakalantas[0];

                                            if (lakalantas[0] < lakalantas[1]) {
                                                persentaselakalantas = 'Naik'
                                            } else if (lakalantas[0] > lakalantas[1]) {
                                                persentaselakalantas = 'Turun'
                                            } else {
                                                persentaselakalantas = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            lakalantassebelumnya = lakalantas[1];
                                            if (lakalantas[1] < lakalantas[2]) {
                                                persentaselakalantas = 'Naik'
                                            } else if (lakalantas[1] > lakalantas[2]) {
                                                persentaselakalantas = 'Turun'
                                            } else {
                                                persentaselakalantas = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 4) {
                                            bulansebelumnya = polda_month[2]
                                            lakalantassebelumnya = lakalantas[2];
                                            if (lakalantas[2] < lakalantas[3]) {
                                                persentaselakalantas = 'Naik'
                                            } else if (lakalantas[2] > lakalantas[3]) {
                                                persentaselakalantas = 'Turun'
                                            } else {
                                                persentaselakalantas = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 5) {
                                            bulansebelumnya = polda_month[3]
                                            lakalantassebelumnya = lakalantas[3];
                                            if (lakalantas[3] < lakalantas[4]) {
                                                persentaselakalantas = 'Naik'
                                            } else if (lakalantas[3] > lakalantas[4]) {
                                                persentaselakalantas = 'Turun'
                                            } else {
                                                persentaselakalantas = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 6) {
                                            bulansebelumnya = polda_month[4]
                                            lakalantassebelumnya = lakalantas[4];
                                            if (lakalantas[4] < lakalantas[5]) {
                                                persentaselakalantas = 'Naik'
                                            } else if (lakalantas[4] > lakalantas[5]) {
                                                persentaselakalantas = 'Turun'
                                            } else {
                                                persentaselakalantas = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 7) {
                                            bulansebelumnya = polda_month[5]
                                            lakalantassebelumnya = lakalantas[5];
                                            if (lakalantas[5] < lakalantas[6]) {
                                                persentaselakalantas = 'Naik'
                                            } else if (lakalantas[5] > lakalantas[6]) {
                                                persentaselakalantas = 'Turun'
                                            } else {
                                                persentaselakalantas = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 8) {
                                            bulansebelumnya = polda_month[6]
                                            lakalantassebelumnya = lakalantas[6];
                                            if (lakalantas[6] < lakalantas[7]) {
                                                persentaselakalantas = 'Naik'
                                            } else if (lakalantas[6] > lakalantas[7]) {
                                                persentaselakalantas = 'Turun'
                                            } else {
                                                persentaselakalantas = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 9) {
                                            bulansebelumnya = polda_month[7]
                                            lakalantassebelumnya = lakalantas[7];
                                            if (lakalantas[7] < lakalantas[8]) {
                                                persentaselakalantas = 'Naik'
                                            } else if (lakalantas[7] > lakalantas[8]) {
                                                persentaselakalantas = 'Turun'
                                            } else {
                                                persentaselakalantas = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 10) {
                                            bulansebelumnya = polda_month[8]
                                            lakalantassebelumnya = lakalantas[8];
                                            if (lakalantas[8] < lakalantas[9]) {
                                                persentaselakalantas = 'Naik'
                                            } else if (lakalantas[8] > lakalantas[9]) {
                                                persentaselakalantas = 'Turun'
                                            } else {
                                                persentaselakalantas = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 11) {
                                            bulansebelumnya = polda_month[9]
                                            lakalantassebelumnya = lakalantas[9];
                                            if (lakalantas[9] < lakalantas[10]) {
                                                persentaselakalantas = 'Naik'
                                            } else if (lakalantas[9] > lakalantas[10]) {
                                                persentaselakalantas = 'Turun'
                                            } else {
                                                persentaselakalantas = `Sama`
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 12) {
                                            bulansebelumnya = polda_month[10]
                                            lakalantassebelumnya = lakalantas[10];
                                            if (lakalantas[10] < lakalantas[11]) {
                                                persentaselakalantas = 'Naik'
                                            } else if (lakalantas[10] > lakalantas[11]) {
                                                persentaselakalantas = 'Turun'
                                            } else {
                                                persentaselakalantas = 'Sama'
                                            }
                                        }

                                        return (
                                            `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 36rem; height:10rem;">`:'<div style="width: 16rem; height:10rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                <div class="my-2  text-center"">   
                                                    <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-8 ms-1">
                                                            <span class="fw-bold">Total LAKA</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${lakalantassebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total LAKA</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${lakalantas[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentaselakalantas}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total LAKA</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${lakalantas[dataPointIndex]}</span><br>
                                                            </div>
                                                    </div>
                                                </div>`}
                                            </div>
                                        </div>
                                    </div>`

                                        );
                                    }
                                }

                            };

                            var ditgakkumlaka = new ApexCharts(document.querySelector("#chart4"), ditgakkumlaka);
                            ditgakkumlaka.render();
                        }
                    })
                }

                // Year
                function getDitgakkumyear(three_yearAgo, lastDay) {
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>ditgakkum/getChartDitgakkum",
                        data: {
                            start_date: three_yearAgo,
                            end_date: lastDay,
                            filter: 'year'
                        },
                        dataType: "JSON",
                        success: function(result) {
                            let polda_month = result.data.polda_month
                            let walpjr = result.data.walpjr
                            let turjagwali = result.data.turjagwali
                            let garlantas = result.data.garlantas
                            let lakalantas = result.data.lakalantas
                            $('#titlewalpjryear').html(`<h4 class="card-title mb-0 text-uppercase">DATA WAL & PJR TAHUNAN</h4>`);
                            $('#titletatibyear').html(`<h4 class="card-title mb-0 text-uppercase">DATA TATIB TAHUNAN</h4>`);
                            $('#titlegarlantasyear').html(`<h4 class="card-title mb-0 text-uppercase">DATA DAKGAR TAHUNAN</h4>`);
                            $('#titlelakalantasyear').html(`<h4 class="card-title mb-0 text-uppercase">DATA LAKA TAHUNAN</h4>`);

                            var ditgakkumwalpjryear = {
                                series: [{
                                    name: 'WAL & PJR',
                                    type: 'line',
                                    data: walpjr,
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
                                    categories: polda_month,
                                },
                                tooltip: {
                                    custom: function({
                                        series,
                                        seriesIndex,
                                        dataPointIndex,
                                        seriesName,
                                        w
                                    }) {
                                        if (w.globals.labels[dataPointIndex] == 2) {
                                            bulansebelumnya = polda_month[0]
                                            walpjrsebelumnya = walpjr[0];

                                            if (walpjr[0] < walpjr[1]) {
                                                persentasewalpjr = 'Naik'
                                            } else if (walpjr[0] > walpjr[1]) {
                                                persentasewalpjr = 'Turun'
                                            } else {
                                                persentasewalpjr = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            walpjrsebelumnya = walpjr[1];
                                            if (walpjr[1] < walpjr[2]) {
                                                persentasewalpjr = 'Naik'
                                            } else if (walpjr[1] > walpjr[2]) {
                                                persentasewalpjr = 'Turun'
                                            } else {
                                                persentasewalpjr = 'Sama'
                                            }

                                        }

                                        return (
                                            `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 36rem; height:10rem;">`:'<div style="width: 16rem; height:10rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                <div class="my-2  text-center"">   
                                                    <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-8 ms-1">
                                                            <span class="fw-bold">Total WAL & PJR</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${walpjrsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total WAL & PJR</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${walpjr[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasewalpjr}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total WAL & PJR</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${walpjr[dataPointIndex]}</span><br>
                                                            </div>
                                                    </div>
                                                </div>`}
                                            </div>
                                        </div>
                                    </div>`
                                        );
                                    }
                                }
                            };

                            var ditgakkumwalpjryear = new ApexCharts(document.querySelector("#chartyear"), ditgakkumwalpjryear);
                            ditgakkumwalpjryear.render();


                            var ditgakkumtatibyear = {
                                series: [{
                                    name: 'Tatib',
                                    type: 'line',
                                    data: turjagwali,
                                    color: "#CB2D3E"
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
                                    categories: polda_month,
                                },
                                tooltip: {
                                    custom: function({
                                        series,
                                        seriesIndex,
                                        dataPointIndex,
                                        seriesName,
                                        w
                                    }) {
                                        if (w.globals.labels[dataPointIndex] == 2) {
                                            bulansebelumnya = polda_month[0]
                                            turjagwalisebelumnya = turjagwali[0];

                                            if (turjagwali[0] < turjagwali[1]) {
                                                persentaseturjagwali = 'Naik'
                                            } else if (turjagwali[0] > turjagwali[1]) {
                                                persentaseturjagwali = 'Turun'
                                            } else {
                                                persentaseturjagwali = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            turjagwalisebelumnya = turjagwali[1];
                                            if (turjagwali[1] < turjagwali[2]) {
                                                persentaseturjagwali = 'Naik'
                                            } else if (turjagwali[1] > turjagwali[2]) {
                                                persentaseturjagwali = 'Turun'
                                            } else {
                                                persentaseturjagwali = 'Sama'
                                            }

                                        }

                                        return (
                                            `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 36rem; height:10rem;">`:'<div style="width: 16rem; height:10rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                <div class="my-2  text-center"">   
                                                    <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-8 ms-1">
                                                            <span class="fw-bold">Total TATIB</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${turjagwalisebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total TATIB</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${turjagwali[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentaseturjagwali}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total TATIB</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${turjagwali[dataPointIndex]}</span><br>
                                                            </div>
                                                    </div>
                                                </div>`}
                                            </div>
                                        </div>
                                    </div>`

                                        );
                                    }
                                }

                            };

                            var ditgakkumtatibyear = new ApexCharts(document.querySelector("#chartyear2"), ditgakkumtatibyear);
                            ditgakkumtatibyear.render();


                            var ditgakkumdakgaryear = {
                                series: [{
                                    name: 'DAKGAR',
                                    type: 'line',
                                    data: garlantas,
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
                                    categories: polda_month,
                                },
                                tooltip: {
                                    custom: function({
                                        series,
                                        seriesIndex,
                                        dataPointIndex,
                                        seriesName,
                                        w
                                    }) {
                                        if (w.globals.labels[dataPointIndex] == 2) {
                                            bulansebelumnya = polda_month[0]
                                            garlantassebelumnya = garlantas[0];

                                            if (garlantas[0] < garlantas[1]) {
                                                persentasegarlantas = 'Naik'
                                            } else if (garlantas[0] > garlantas[1]) {
                                                persentasegarlantas = 'Turun'
                                            } else {
                                                persentasegarlantas = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            garlantassebelumnya = garlantas[1];
                                            if (garlantas[1] < garlantas[2]) {
                                                persentasegarlantas = 'Naik'
                                            } else if (garlantas[1] > garlantas[2]) {
                                                persentasegarlantas = 'Turun'
                                            } else {
                                                persentasegarlantas = 'Sama'
                                            }

                                        }

                                        return (
                                            `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 36rem; height:10rem;">`:'<div style="width: 16rem; height:10rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                <div class="my-2  text-center"">   
                                                    <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-8 ms-1">
                                                            <span class="fw-bold">Total DAKGAR</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${garlantassebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total DAKGAR</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${garlantas[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasegarlantas}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total DAKGAR</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${garlantas[dataPointIndex]}</span><br>
                                                            </div>
                                                    </div>
                                                </div>`}
                                            </div>
                                        </div>
                                    </div>`

                                        );
                                    }
                                }

                            };

                            var ditgakkumdakgaryear = new ApexCharts(document.querySelector("#chartyear3"), ditgakkumdakgaryear);
                            ditgakkumdakgaryear.render();


                            var ditgakkumlakayear = {
                                series: [{
                                    name: 'LAKA',
                                    type: 'line',
                                    data: lakalantas,
                                    color: "#EDF12D"
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
                                    categories: polda_month,
                                },
                                tooltip: {
                                    custom: function({
                                        series,
                                        seriesIndex,
                                        dataPointIndex,
                                        seriesName,
                                        w
                                    }) {
                                        if (w.globals.labels[dataPointIndex] == 2) {
                                            bulansebelumnya = polda_month[0]
                                            lakalantassebelumnya = lakalantas[0];

                                            if (lakalantas[0] < lakalantas[1]) {
                                                persentaselakalantas = 'Naik'
                                            } else if (lakalantas[0] > lakalantas[1]) {
                                                persentaselakalantas = 'Turun'
                                            } else {
                                                persentaselakalantas = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            lakalantassebelumnya = lakalantas[1];
                                            if (lakalantas[1] < lakalantas[2]) {
                                                persentaselakalantas = 'Naik'
                                            } else if (lakalantas[1] > lakalantas[2]) {
                                                persentaselakalantas = 'Turun'
                                            } else {
                                                persentaselakalantas = 'Sama'
                                            }

                                        }

                                        return (
                                            `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 36rem; height:10rem;">`:'<div style="width: 16rem; height:10rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                <div class="my-2  text-center"">   
                                                    <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-8 ms-1">
                                                            <span class="fw-bold">Total LAKA</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${lakalantassebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total LAKA</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${lakalantas[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentaselakalantas}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total LAKA</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${lakalantas[dataPointIndex]}</span><br>
                                                            </div>
                                                    </div>
                                                </div>`}
                                            </div>
                                        </div>
                                    </div>`

                                        );
                                    }
                                }

                            };

                            var ditgakkumlakayear = new ApexCharts(document.querySelector("#chartyear4"), ditgakkumlakayear);
                            ditgakkumlakayear.render();
                        }
                    })
                }
            </script>