            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 ">
                        <div id="nama">
                            <div style="display: flex;">
                                <?php if ($this->session->userdata['role'] == 'KaBagOps' || $this->session->userdata['role'] == 'Kakorlantas') { ?>
                                    <h3><a href="<?= base_url('dashboard') ?>" style="color:#007DD8 ;"><i class="fas fa-less-than"></i>|</a></h3>
                                    &nbsp;&nbsp; <h3 style="text-transform: uppercase; color:#007DD8;"> Ditkamsel</h3>
                                <?php } else { ?>
                                    <h3 style="text-transform: uppercase; color:#007DD8;"> Ditkamsel</h3>
                                <?php } ?>
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
                                <a class="dropdown-item" download href="<?= ApiUrl() ?>laporan_harian/anev_ditkamsel?type=day&date=<?= date('Y-m-d'); ?>">Harian</a>
                                <a class="dropdown-item" download href="<?= ApiUrl() ?>laporan_harian/anev_ditkamsel?type=weeks&date=<?= date('Y-m-d'); ?>">Mingguan</a>
                                <a class="dropdown-item" download href="<?= ApiUrl() ?>laporan_harian/anev_ditkamsel?type=month&date=<?= date('m'); ?>">Bulanan</a>
                                <a class="dropdown-item" download href="<?= ApiUrl() ?>laporan_harian/anev_ditkamsel?type=triwulan&date=<?= date('m'); ?>">Triwulan</a>
                                <a class="dropdown-item" download href="<?= ApiUrl() ?>laporan_harian/anev_ditkamsel?type=years&date=<?= date('Y'); ?>">Tahunan</a>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="col-md-2 text-end align-self-center" style="margin-left: 4%;"></div>
                        <div class="col-md-2 text-end align-self-center" style="margin-left: -4%;">
                            <button type="button" class="btn btn-outline-primary" style="width: 200px; border-color:#007DD8;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Struktur Organisasi
                            </button>
                        </div>
                        <div class="row">
                            <div class="col-md-2 text-end align-self-center">
                                <div class="form-group">
                                    <select class="form-control form-select" id="type">
                                        <option>Pilih Laporan</option>
                                        <option value="day">Harian</option>
                                        <option value="weeks">Mingguan</option>
                                        <option value="month">Bulanan</option>
                                        <option value="triwulan">Triwulan</option>
                                        <option value="years">Tahunan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <input type="date" class="form-control" id="type_date">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <button type="button" class="btn btn-primary" id="btn_export_laporan">
                                    Export Laporan
                                </button>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <div class="row">

                    <div class="col-md-12 mt-5">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-md-4 mb-3">
                                <h4 style="text-transform: uppercase; color:#007DD8;">Statistik Data Ditkamsel - <span style="color: red;"> Real Time</span></h4>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                                    <div class="card-body">
                                        <div class="row justify-content-between align-items-center" style="height: 80px;">

                                            <div class="col-md-10 float-start">
                                                <span class="fs-5 float-start" style="color:#464646;">
                                                    Total<span class="fw-bold text-uppercase"> Blackspot</span>
                                                    <br>
                                                    <span class="fs-6 fw-bold float-start" style="color:#464646;" id="blackspot"></span>
                                                    <p class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detailblack"></p>
                                                </span>
                                            </div>
                                            <div class=" col-md-2">
                                                <img src="<?= base_url('assets/icon/dashboard/SPOT.png') ?>" alt="" style="width: 60px; margin-left:-25px;">
                                                <!-- <iconify-icon icon="material-symbols:book-rounded" class="ms-n2" style="height: 80px; color: #464646;"></iconify-icon> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                                    <div class="card-body">
                                        <div class="row justify-content-between align-items-center" style="height: 80px;">

                                            <div class="col-md-10 float-start">
                                                <span class="fs-5 float-start" style="color:#464646;">
                                                    Total<span class="fw-bold text-uppercase"> Troublespot</span>
                                                    <br>
                                                    <span class="fs-6 fw-bold float-start" style="color:#464646;" id="troublespot"></span>
                                                    <p class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detailtrouble"></p>
                                                </span>
                                            </div>
                                            <div class=" col-md-2">
                                                <img src="<?= base_url('assets/icon/dashboard/SPOT.png') ?>" alt="" style="width: 60px; margin-left:-25px;">
                                                <!-- <iconify-icon icon="material-symbols:credit-card-outline" class="ms-n2" style="height: 80px; color: #464646;"></iconify-icon> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                                    <div class="card-body">
                                        <div class="row justify-content-between align-items-center" style="height: 80px;">

                                            <div class="col-md-10 float-start">
                                                <span class="fs-5 float-start" style="color:#464646;">
                                                    Total<span class="fw-bold text-uppercase"> Reka Lantas</span>
                                                    <br>
                                                    <span class="fs-6 fw-bold float-start" style="color:#464646;" id="rekalantas"></span>
                                                    <p class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detailreka"></p>
                                                </span>
                                            </div>
                                            <div class=" col-md-2">
                                                <img src="<?= base_url('assets/icon/dashboard/REKA.png') ?>" alt="" style="width: 60px; margin-left:-25px;">
                                                <!-- <iconify-icon icon="material-symbols:credit-card-outline" class="ms-n2" style="height: 80px; color: #464646;"></iconify-icon> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                                    <div class="card-body">
                                        <div class="row justify-content-between align-items-center" style="height: 80px;">

                                            <div class="col-md-10 float-start">
                                                <span class="fs-5 float-start" style="color:#464646;">
                                                    Total<span class="fw-bold text-uppercase"> DIKMAS</span>
                                                    <br>
                                                    <span class="fs-6 fw-bold float-start" style="color:#464646;" id="dikmaslantas"></span>
                                                    <p class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detaildikmas"></p>
                                                </span>
                                            </div>
                                            <div class=" col-md-2">
                                                <img src="<?= base_url('assets/icon/dashboard/DIKMAS.png') ?>" alt="" style="width: 60px; margin-left:-25px;">
                                                <!-- <iconify-icon icon="material-symbols:credit-card-outline" class="ms-n2" style="height: 80px; color: #464646;"></iconify-icon> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                            <div id="titleblackspotday"></div>
                                        </div>
                                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                            <div class="main-chart">
                                                <div id="chartdayblackspot">
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
                                            <div id="titletroublespotday"></div>
                                        </div>
                                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                            <div class="main-chart">
                                                <div id="chartdaytroublespot">
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
                                            <div id="titlerekalantasday"></div>
                                        </div>
                                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                            <div class="main-chart">
                                                <div id="chartdayrekalantas">
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
                                            <div id="titledikmaslantasday"></div>
                                        </div>
                                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                            <div class="main-chart">
                                                <div id="chartdaydikmaslantas">
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
                                            <div id="titleblackspotmonth"></div>
                                        </div>
                                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                            <div class="main-chart">
                                                <div id="chartmonthblackspot">
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
                                            <div id="titletroublespotmonth"></div>
                                        </div>
                                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                            <div class="main-chart">
                                                <div id="chartmonthtroublespot">
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
                                            <div id="titlerekalantasmonth"></div>
                                        </div>
                                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                            <div class="main-chart">
                                                <div id="chartmonthrekalantas">
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
                                            <div id="titledikmaslantasmonth"></div>
                                        </div>
                                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                            <div class="main-chart">
                                                <div id="chartmonthdikmaslantas">
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
                                            <div id="titleblackspotyear"></div>
                                        </div>
                                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                            <div class="main-chart">
                                                <div id="chartyearblackspot">
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
                                            <div id="titletroublespotyear"></div>
                                        </div>
                                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                            <div class="main-chart">
                                                <div id="chartyeartroublespot">
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
                                            <div id="titlerekalantasyear"></div>
                                        </div>
                                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                            <div class="main-chart">
                                                <div id="chartyearrekalantas">
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
                                            <div id="titledikmaslantasyear"></div>
                                        </div>
                                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                            <div class="main-chart">
                                                <div id="chartyeardikmaslantas">
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
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-uppercase" id="exampleModalLabel">Struktur Organisasi <?= $title; ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <center>
                                <img src="<?= base_url('assets/fe/strukturorganisasi/strukturditkamsel.png'); ?>" alt="" srcset="" width="100%">
                            </center>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.3/moment.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.36.3/apexcharts.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
            <script>
                var date = new Date();
                var year = new Date();
                var firstDay = new Date(date.getFullYear(), 0).toLocaleDateString("en-GB").split('/').reverse().join('-');
                var lastDay = new Date(date.getFullYear(), 11, 31).toLocaleDateString("en-GB").split('/').reverse().join('-');
                var today = moment().add(1, 'days').format('YYYY-MM-DD');

                console.log(today)

                date.setDate(date.getDate() - 6);
                var seven_daysAgo = date.toLocaleDateString("en-GB").split('/').reverse().join('-');

                year.setFullYear(year.getFullYear() - 2);
                var dataawal = year.toLocaleDateString("en-GB").split('/').reverse().join('-');
                var daymonth = firstDay.split('-');
                var year = dataawal.split('-');
                var three_yearAgo = year[0] + '-' + daymonth[1] + '-' + daymonth[2];

                // Day
                $("#chartdayblackspot").html(`<div id="chartday2"></div>`);
                $("#chartdaytroublespot").html(`<div id="chartday3"></div>`);
                $("#chartdayrekalantas").html(`<div id="chartday4"></div>`);
                $("#chartdaydikmaslantas").html(`<div id="chartday1"></div>`);

                // Month
                $("#chartmonthblackspot").html(`<div id="chart2"></div>`);
                $("#chartmonthtroublespot").html(`<div id="chart3"></div>`);
                $("#chartmonthrekalantas").html(`<div id="chart4"></div>`);
                $("#chartmonthdikmaslantas").html(`<div id="chart"></div>`);

                // Year
                $("#chartyearblackspot").html(`<div id="chartyear2"></div>`);
                $("#chartyeartroublespot").html(`<div id="chartyear3"></div>`);
                $("#chartyearrekalantas").html(`<div id="chartyear4"></div>`);
                $("#chartyeardikmaslantas").html(`<div id="chartyear"></div>`);


                getStatistik();

                function getStatistik() {
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>ditkamsel/getStatistik",
                        dataType: "JSON",
                        success: function(result) {
                            console.log(result);
                            $("#overlay").fadeOut(300);
                            $('#dikmaslantas').html(`<span class="fs-4" >${result.dikmaslantas}</span >`);
                            $('#troublespot').html(`<span class="fs-4" >${result.troublespot}</span >`);
                            $('#blackspot').html(`<span class="fs-4" >${result.blackspot}</span >`);
                            $('#rekalantas').html(`<span class="fs-4" >${result.rekalantas}</span>`);
                        }
                    })
                }

                getDitkamselday(today, seven_daysAgo)
                getDitkamselmonth(firstDay, lastDay)
                getDitkamselyear(three_yearAgo, lastDay)
                // Day
                function getDitkamselday(today, seven_daysAgo) {
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>ditkamsel/getChartBlackspot",
                        data: {
                            start_date: seven_daysAgo,
                            end_date: today,
                            filter: 'day'
                        },
                        dataType: "JSON",
                        success: function(result) {
                            let polda_month = result.data.polda_month
                            let blackspot = result.data.blackspot
                            let presentase_blackspot = result.data.presentase_blackspot
                            $('#titleblackspotday').html(`<h4 class="card-title mb-0 text-uppercase">DATA BLACKSPOT HARIAN</h4>`);

                            var ditkamselblackspotday = {
                                series: [{
                                    name: 'Blackspot',
                                    type: 'line',
                                    data: blackspot,
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
                                // markers: {
                                //     size: 4,
                                //     colors: '#kkk',
                                //     fillOpacity: 0.9,
                                //     shape: "circle",
                                //     radius: 2,
                                // },
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
                                            blackspotsebelumnya = blackspot[0];
                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            blackspotsebelumnya = blackspot[1];
                                        } else if (w.globals.labels[dataPointIndex] == 4) {
                                            bulansebelumnya = polda_month[2]
                                            blackspotsebelumnya = blackspot[2];
                                        } else if (w.globals.labels[dataPointIndex] == 5) {
                                            bulansebelumnya = polda_month[3]
                                            blackspotsebelumnya = blackspot[3];
                                        } else if (w.globals.labels[dataPointIndex] == 6) {
                                            bulansebelumnya = polda_month[4]
                                            blackspotsebelumnya = blackspot[4];
                                        } else if (w.globals.labels[dataPointIndex] == 7) {
                                            bulansebelumnya = polda_month[5]
                                            blackspotsebelumnya = blackspot[5];
                                        }

                                        return (
                                            `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 40rem; height:10rem;">`:'<div style="width: 16rem; height:10rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                <div class="my-2  text-center"">   
                                                    <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-9">
                                                            <span class="fw-bold">Total Blackspot</span><br>
                                                         </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${blackspotsebelumnya}</span><br>
                                                         </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-9">
                                                            <span class="fw-bold">Total Blackspot</span><br>
                                                        </div>   
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${blackspot[dataPointIndex]}</span><br>
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${presentase_blackspot[dataPointIndex]}%</span><br>
                                                     </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-9">
                                                            <span class="fw-bold">Total Blackspot</span><br>
                                                        </div>   
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${blackspot[dataPointIndex]}</span><br>
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

                            var ditkamselblackspotday = new ApexCharts(document.querySelector("#chartday2"), ditkamselblackspotday);
                            ditkamselblackspotday.render();
                        }
                    })

                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>ditkamsel/getChartTroublespot",
                        data: {
                            start_date: seven_daysAgo,
                            end_date: today,
                            filter: 'day'
                        },
                        dataType: "JSON",
                        success: function(result) {
                            let polda_month = result.data.polda_month
                            let troublespot = result.data.troublespot
                            let presentase_troublespot = result.data.presentase_troublespot
                            $('#titletroublespotday').html(`<h4 class="card-title mb-0 text-uppercase">DATA TROUBLESPOT HARIAN</h4>`);

                            var ditkamseltroublespotday = {
                                series: [{
                                    name: 'troublespot',
                                    type: 'line',
                                    data: troublespot,
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
                                // markers: {
                                //     size: 4,
                                //     colors: '#kkk',
                                //     fillOpacity: 0.9,
                                //     shape: "circle",
                                //     radius: 2,
                                // },
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
                                            troublespotsebelumnya = troublespot[0];
                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            troublespotsebelumnya = troublespot[1];
                                        } else if (w.globals.labels[dataPointIndex] == 4) {
                                            bulansebelumnya = polda_month[2]
                                            troublespotsebelumnya = troublespot[2];
                                        } else if (w.globals.labels[dataPointIndex] == 5) {
                                            bulansebelumnya = polda_month[3]
                                            troublespotsebelumnya = troublespot[3];
                                        } else if (w.globals.labels[dataPointIndex] == 6) {
                                            bulansebelumnya = polda_month[4]
                                            troublespotsebelumnya = troublespot[4];
                                        } else if (w.globals.labels[dataPointIndex] == 7) {
                                            bulansebelumnya = polda_month[5]
                                            troublespotsebelumnya = troublespot[5];
                                        }

                                        return (
                                            `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 40rem; height:10rem;">`:'<div style="width: 16rem; height:10rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                <div class="my-2  text-center"">   
                                                    <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-9">
                                                            <span class="fw-bold">Total Troublespot</span><br>
                                                         </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${troublespotsebelumnya}</span><br>
                                                         </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-9">
                                                            <span class="fw-bold">Total Troublespot</span><br>
                                                        </div>   
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${troublespot[dataPointIndex]}</span><br>
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${presentase_troublespot[dataPointIndex]}%</span><br>
                                                     </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-9">
                                                            <span class="fw-bold">Total Troublespot</span><br>
                                                        </div>   
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${troublespot[dataPointIndex]}</span><br>
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

                            var ditkamseltroublespotday = new ApexCharts(document.querySelector("#chartday3"), ditkamseltroublespotday);
                            ditkamseltroublespotday.render();
                        }
                    })

                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>ditkamsel/getChartRekalantas",
                        data: {
                            start_date: seven_daysAgo,
                            end_date: today,
                            filter: 'day'
                        },
                        dataType: "JSON",
                        success: function(result) {
                            let polda_month = result.data.polda_month
                            let jalan_nasional = result.data.jalan_nasional
                            let jalan_provinsi = result.data.jalan_provinsi
                            let lain_lain = result.data.lain_lain
                            let presentase_jalan_nasional = result.data.presentase_jalan_nasional
                            let presentase_jalan_provinsi = result.data.presentase_jalan_provinsi
                            let presentase_lain_lain = result.data.presentase_lain_lain
                            $('#titlerekalantasday').html(`<h4 class="card-title mb-0 text-uppercase">DATA REKALANTAS HARIAN</h4>`);

                            var ditkamselrekalantasday = {
                                series: [{
                                    name: 'Jalan Nasional',
                                    type: 'line',
                                    data: jalan_nasional,
                                }, {
                                    name: 'Jalan Provinsi',
                                    type: 'line',
                                    data: jalan_provinsi,
                                }, {
                                    name: 'Lain - lain',
                                    type: 'line',
                                    data: lain_lain,
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
                                // markers: {
                                //     size: 4,
                                //     colors: '#kkk',
                                //     fillOpacity: 0.9,
                                //     shape: "circle",
                                //     radius: 2,
                                // },
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
                                            jalan_nasionalsebelumnya = jalan_nasional[0];
                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            jalan_nasionalsebelumnya = jalan_nasional[1];
                                        } else if (w.globals.labels[dataPointIndex] == 4) {
                                            bulansebelumnya = polda_month[2]
                                            jalan_nasionalsebelumnya = jalan_nasional[2];
                                        } else if (w.globals.labels[dataPointIndex] == 5) {
                                            bulansebelumnya = polda_month[3]
                                            jalan_nasionalsebelumnya = jalan_nasional[3];
                                        } else if (w.globals.labels[dataPointIndex] == 6) {
                                            bulansebelumnya = polda_month[4]
                                            jalan_nasionalsebelumnya = jalan_nasional[4];
                                        } else if (w.globals.labels[dataPointIndex] == 7) {
                                            bulansebelumnya = polda_month[5]
                                            jalan_nasionalsebelumnya = jalan_nasional[5];
                                        }
                                        if (w.globals.labels[dataPointIndex] == 2) {
                                            bulansebelumnya = polda_month[0]
                                            jalan_provinsisebelumnya = jalan_provinsi[0];
                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            jalan_provinsisebelumnya = jalan_provinsi[1];
                                        } else if (w.globals.labels[dataPointIndex] == 4) {
                                            bulansebelumnya = polda_month[2]
                                            jalan_provinsisebelumnya = jalan_provinsi[2];
                                        } else if (w.globals.labels[dataPointIndex] == 5) {
                                            bulansebelumnya = polda_month[3]
                                            jalan_provinsisebelumnya = jalan_provinsi[3];
                                        } else if (w.globals.labels[dataPointIndex] == 6) {
                                            bulansebelumnya = polda_month[4]
                                            jalan_provinsisebelumnya = jalan_provinsi[4];
                                        } else if (w.globals.labels[dataPointIndex] == 7) {
                                            bulansebelumnya = polda_month[5]
                                            jalan_provinsisebelumnya = jalan_provinsi[5];
                                        }
                                        if (w.globals.labels[dataPointIndex] == 2) {
                                            bulansebelumnya = polda_month[0]
                                            lain_lainsebelumnya = lain_lain[0];
                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            lain_lainsebelumnya = lain_lain[1];
                                        } else if (w.globals.labels[dataPointIndex] == 4) {
                                            bulansebelumnya = polda_month[2]
                                            lain_lainsebelumnya = lain_lain[2];
                                        } else if (w.globals.labels[dataPointIndex] == 5) {
                                            bulansebelumnya = polda_month[3]
                                            lain_lainsebelumnya = lain_lain[3];
                                        } else if (w.globals.labels[dataPointIndex] == 6) {
                                            bulansebelumnya = polda_month[4]
                                            lain_lainsebelumnya = lain_lain[4];
                                        } else if (w.globals.labels[dataPointIndex] == 7) {
                                            bulansebelumnya = polda_month[5]
                                            lain_lainsebelumnya = lain_lain[5];
                                        }
                                        return (
                                            `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 40rem; height:10rem;">`:'<div style="width: 16rem; height:10rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                <div class="my-2  text-center"">   
                                                    <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-9">
                                                            <span class="fw-bold">Total Jalan Nasional</span><br>
                                                            <span class="fw-bold">Total Jalan Provinsi</span><br>
                                                            <span class="fw-bold">Total Lain - lain</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${jalan_nasionalsebelumnya}</span><br>
                                                            <span class="fw-bold">${jalan_provinsisebelumnya}</span><br>
                                                            <span class="fw-bold">${lain_lainsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-9">
                                                            <span class="fw-bold">Total Jalan Nasional</span><br>
                                                            <span class="fw-bold">Total Jalan Provinsi</span><br>
                                                            <span class="fw-bold">Total Lain - lain</span><br>
                                                        </div>   
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${jalan_nasional[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${jalan_provinsi[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${lain_lain[dataPointIndex]}</span><br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${presentase_jalan_nasional[dataPointIndex]}%</span><br>
                                                    <span class="fw-bold">${presentase_jalan_provinsi[dataPointIndex]}%</span><br>
                                                    <span class="fw-bold">${presentase_lain_lain[dataPointIndex]}%</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-9">
                                                            <span class="fw-bold">Total Jalan Nasional</span><br>
                                                            <span class="fw-bold">Total Jalan Provinsi</span><br>
                                                            <span class="fw-bold">Total Lain - lain</span><br>
                                                        </div>   
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${jalan_nasional[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${jalan_provinsi[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${lain_lain[dataPointIndex]}</span><br>
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

                            var ditkamselrekalantasday = new ApexCharts(document.querySelector("#chartday4"), ditkamselrekalantasday);
                            ditkamselrekalantasday.render();
                        }
                    })

                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>ditkamsel/getChartDikmaslantas",
                        data: {
                            start_date: seven_daysAgo,
                            end_date: today,
                            filter: 'day'
                        },
                        dataType: "JSON",
                        success: function(result) {
                            let polda_month = result.data.polda_month
                            let media_cetak = result.data.media_cetak
                            let media_elektronik = result.data.media_elektronik
                            let media_sosial = result.data.media_sosial
                            let presentase_media_cetak = result.data.presentase_media_cetak
                            let presentase_media_elektronik = result.data.presentase_media_elektronik
                            let presentase_media_sosial = result.data.presentase_media_sosial
                            $('#titledikmaslantasday').html(`<h4 class="card-title mb-0 text-uppercase">DATA DIKMASLANTAS HARIAN</h4>`);

                            var ditkamseldikmaslantasday = {
                                series: [{
                                    name: 'Media Cetak',
                                    type: 'line',
                                    data: media_cetak,
                                }, {
                                    name: 'Media Elektronik',
                                    type: 'line',
                                    data: media_elektronik,
                                }, {
                                    name: 'Media Sosial',
                                    type: 'line',
                                    data: media_sosial,
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
                                // markers: {
                                //     size: 4,
                                //     colors: '#kkk',
                                //     fillOpacity: 0.9,
                                //     shape: "circle",
                                //     radius: 2,
                                // },
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
                                            media_cetaksebelumnya = media_cetak[0];
                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            media_cetaksebelumnya = media_cetak[1];
                                        } else if (w.globals.labels[dataPointIndex] == 4) {
                                            bulansebelumnya = polda_month[2]
                                            media_cetaksebelumnya = media_cetak[2];
                                        } else if (w.globals.labels[dataPointIndex] == 5) {
                                            bulansebelumnya = polda_month[3]
                                            media_cetaksebelumnya = media_cetak[3];
                                        } else if (w.globals.labels[dataPointIndex] == 6) {
                                            bulansebelumnya = polda_month[4]
                                            media_cetaksebelumnya = media_cetak[4];
                                        } else if (w.globals.labels[dataPointIndex] == 7) {
                                            bulansebelumnya = polda_month[5]
                                            media_cetaksebelumnya = media_cetak[5];
                                        }
                                        if (w.globals.labels[dataPointIndex] == 2) {
                                            bulansebelumnya = polda_month[0]
                                            media_elektroniksebelumnya = media_elektronik[0];
                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            media_elektroniksebelumnya = media_elektronik[1];
                                        } else if (w.globals.labels[dataPointIndex] == 4) {
                                            bulansebelumnya = polda_month[2]
                                            media_elektroniksebelumnya = media_elektronik[2];
                                        } else if (w.globals.labels[dataPointIndex] == 5) {
                                            bulansebelumnya = polda_month[3]
                                            media_elektroniksebelumnya = media_elektronik[3];
                                        } else if (w.globals.labels[dataPointIndex] == 6) {
                                            bulansebelumnya = polda_month[4]
                                            media_elektroniksebelumnya = media_elektronik[4];
                                        } else if (w.globals.labels[dataPointIndex] == 7) {
                                            bulansebelumnya = polda_month[5]
                                            media_elektroniksebelumnya = media_elektronik[5];
                                        }
                                        if (w.globals.labels[dataPointIndex] == 2) {
                                            bulansebelumnya = polda_month[0]
                                            media_sosialsebelumnya = media_sosial[0];
                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            media_sosialsebelumnya = media_sosial[1];
                                        } else if (w.globals.labels[dataPointIndex] == 4) {
                                            bulansebelumnya = polda_month[2]
                                            media_sosialsebelumnya = media_sosial[2];
                                        } else if (w.globals.labels[dataPointIndex] == 5) {
                                            bulansebelumnya = polda_month[3]
                                            media_sosialsebelumnya = media_sosial[3];
                                        } else if (w.globals.labels[dataPointIndex] == 6) {
                                            bulansebelumnya = polda_month[4]
                                            media_sosialsebelumnya = media_sosial[4];
                                        } else if (w.globals.labels[dataPointIndex] == 7) {
                                            bulansebelumnya = polda_month[5]
                                            media_sosialsebelumnya = media_sosial[5];
                                        }
                                        return (
                                            `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 40rem; height:10rem;">`:'<div style="width: 16rem; height:10rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                <div class="my-2  text-center"">   
                                                    <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-9">
                                                            <span class="fw-bold">Total Media Cetak</span><br>
                                                            <span class="fw-bold">Total Media Elektronik</span><br>
                                                            <span class="fw-bold">Total Media Sosial</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${media_cetaksebelumnya}</span><br>
                                                            <span class="fw-bold">${media_elektroniksebelumnya}</span><br>
                                                            <span class="fw-bold">${media_sosialsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-9">
                                                            <span class="fw-bold">Total Media Cetak</span><br>
                                                            <span class="fw-bold">Total Media Elektronik</span><br>
                                                            <span class="fw-bold">Total Media Sosial</span><br>
                                                        </div>   
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${media_cetak[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${media_elektronik[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${media_sosial[dataPointIndex]}</span><br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${presentase_media_cetak[dataPointIndex]}%</span><br>
                                                    <span class="fw-bold">${presentase_media_elektronik[dataPointIndex]}%</span><br>
                                                    <span class="fw-bold">${presentase_media_sosial[dataPointIndex]}%</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-9">
                                                            <span class="fw-bold">Total Media Cetak</span><br>
                                                            <span class="fw-bold">Total Media Elektronik</span><br>
                                                            <span class="fw-bold">Total Media Sosial</span><br>
                                                        </div>   
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${media_cetak[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${media_elektronik[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${media_sosial[dataPointIndex]}</span><br>
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

                            var ditkamseldikmaslantasday = new ApexCharts(document.querySelector("#chartday1"), ditkamseldikmaslantasday);
                            ditkamseldikmaslantasday.render();
                        }
                    })
                }


                // // Month
                function getDitkamselmonth(firstDay, lastDay) {
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>ditkamsel/getChartBlackspot",
                        data: {
                            start_date: firstDay,
                            end_date: lastDay,
                            filter: 'month'
                        },
                        dataType: "JSON",
                        success: function(result) {
                            let polda_month = result.data.polda_month
                            let blackspot = result.data.blackspot
                            let presentase_blackspot = result.data.presentase_blackspot
                            $('#titleblackspotmonth').html(`<h4 class="card-title mb-0 text-uppercase">DATA BLACKSPOT BULANAN</h4>`);

                            var ditkamselblackspotmonth = {
                                series: [{
                                    name: 'Blackspot',
                                    type: 'line',
                                    data: blackspot,
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
                                // markers: {
                                //     size: 4,
                                //     colors: '#kkk',
                                //     fillOpacity: 0.9,
                                //     shape: "circle",
                                //     radius: 2,
                                // },
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
                                            blackspotsebelumnya = blackspot[0];
                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            blackspotsebelumnya = blackspot[1];
                                        } else if (w.globals.labels[dataPointIndex] == 4) {
                                            bulansebelumnya = polda_month[2]
                                            blackspotsebelumnya = blackspot[2];
                                        } else if (w.globals.labels[dataPointIndex] == 5) {
                                            bulansebelumnya = polda_month[3]
                                            blackspotsebelumnya = blackspot[3];
                                        } else if (w.globals.labels[dataPointIndex] == 6) {
                                            bulansebelumnya = polda_month[4]
                                            blackspotsebelumnya = blackspot[4];
                                        } else if (w.globals.labels[dataPointIndex] == 7) {
                                            bulansebelumnya = polda_month[5]
                                            blackspotsebelumnya = blackspot[5];
                                        } else if (w.globals.labels[dataPointIndex] == 8) {
                                            bulansebelumnya = polda_month[6]
                                            blackspotsebelumnya = blackspot[6];
                                        } else if (w.globals.labels[dataPointIndex] == 9) {
                                            bulansebelumnya = polda_month[7]
                                            blackspotsebelumnya = blackspot[7];
                                        } else if (w.globals.labels[dataPointIndex] == 10) {
                                            bulansebelumnya = polda_month[8]
                                            blackspotsebelumnya = blackspot[8];
                                        } else if (w.globals.labels[dataPointIndex] == 11) {
                                            bulansebelumnya = polda_month[9]
                                            blackspotsebelumnya = blackspot[9];
                                        } else if (w.globals.labels[dataPointIndex] == 12) {
                                            bulansebelumnya = polda_month[10]
                                            blackspotsebelumnya = blackspot[10];
                                        }

                                        return (
                                            `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 40rem; height:10rem;">`:'<div style="width: 16rem; height:10rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                <div class="my-2  text-center"">   
                                                    <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-9">
                                                            <span class="fw-bold">Total Blackspot</span><br>
                                                         </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${blackspotsebelumnya}</span><br>
                                                         </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-9">
                                                            <span class="fw-bold">Total Blackspot</span><br>
                                                        </div>   
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${blackspot[dataPointIndex]}</span><br>
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${presentase_blackspot[dataPointIndex]}%</span><br>
                                                     </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-9">
                                                            <span class="fw-bold">Total Blackspot</span><br>
                                                        </div>   
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${blackspot[dataPointIndex]}</span><br>
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

                            var ditkamselblackspotmonth = new ApexCharts(document.querySelector("#chart2"), ditkamselblackspotmonth);
                            ditkamselblackspotmonth.render();
                        }
                    })

                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>ditkamsel/getChartTroublespot",
                        data: {
                            start_date: firstDay,
                            end_date: lastDay,
                            filter: 'month'
                        },
                        dataType: "JSON",
                        success: function(result) {
                            let polda_month = result.data.polda_month
                            let troublespot = result.data.troublespot
                            let presentase_troublespot = result.data.presentase_troublespot
                            $('#titletroublespotmonth').html(`<h4 class="card-title mb-0 text-uppercase">DATA TROUBLESPOT BULANAN</h4>`);

                            var ditkamseltroublespotmonth = {
                                series: [{
                                    name: 'troublespot',
                                    type: 'line',
                                    data: troublespot,
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
                                // markers: {
                                //     size: 4,
                                //     colors: '#kkk',
                                //     fillOpacity: 0.9,
                                //     shape: "circle",
                                //     radius: 2,
                                // },
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
                                            troublespotsebelumnya = troublespot[0];
                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            troublespotsebelumnya = troublespot[1];
                                        } else if (w.globals.labels[dataPointIndex] == 4) {
                                            bulansebelumnya = polda_month[2]
                                            troublespotsebelumnya = troublespot[2];
                                        } else if (w.globals.labels[dataPointIndex] == 5) {
                                            bulansebelumnya = polda_month[3]
                                            troublespotsebelumnya = troublespot[3];
                                        } else if (w.globals.labels[dataPointIndex] == 6) {
                                            bulansebelumnya = polda_month[4]
                                            troublespotsebelumnya = troublespot[4];
                                        } else if (w.globals.labels[dataPointIndex] == 7) {
                                            bulansebelumnya = polda_month[5]
                                            troublespotsebelumnya = troublespot[5];
                                        } else if (w.globals.labels[dataPointIndex] == 8) {
                                            bulansebelumnya = polda_month[6]
                                            troublespotsebelumnya = troublespot[6];
                                        } else if (w.globals.labels[dataPointIndex] == 9) {
                                            bulansebelumnya = polda_month[7]
                                            troublespotsebelumnya = troublespot[7];
                                        } else if (w.globals.labels[dataPointIndex] == 10) {
                                            bulansebelumnya = polda_month[8]
                                            troublespotsebelumnya = troublespot[8];
                                        } else if (w.globals.labels[dataPointIndex] == 11) {
                                            bulansebelumnya = polda_month[9]
                                            troublespotsebelumnya = troublespot[9];
                                        } else if (w.globals.labels[dataPointIndex] == 12) {
                                            bulansebelumnya = polda_month[10]
                                            troublespotsebelumnya = troublespot[10];
                                        }

                                        return (
                                            `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 40rem; height:10rem;">`:'<div style="width: 16rem; height:10rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                <div class="my-2  text-center"">   
                                                    <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-9">
                                                            <span class="fw-bold">Total Troublespot</span><br>
                                                         </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${troublespotsebelumnya}</span><br>
                                                         </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-9">
                                                            <span class="fw-bold">Total Troublespot</span><br>
                                                        </div>   
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${troublespot[dataPointIndex]}</span><br>
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${presentase_troublespot[dataPointIndex]}%</span><br>
                                                     </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-9">
                                                            <span class="fw-bold">Total Troublespot</span><br>
                                                        </div>   
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${troublespot[dataPointIndex]}</span><br>
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

                            var ditkamseltroublespotmonth = new ApexCharts(document.querySelector("#chart3"), ditkamseltroublespotmonth);
                            ditkamseltroublespotmonth.render();
                        }
                    })

                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>ditkamsel/getChartRekalantas",
                        data: {
                            start_date: firstDay,
                            end_date: lastDay,
                            filter: 'month'
                        },
                        dataType: "JSON",
                        success: function(result) {
                            let polda_month = result.data.polda_month
                            let jalan_nasional = result.data.jalan_nasional
                            let jalan_provinsi = result.data.jalan_provinsi
                            let lain_lain = result.data.lain_lain
                            let presentase_jalan_nasional = result.data.presentase_jalan_nasional
                            let presentase_jalan_provinsi = result.data.presentase_jalan_provinsi
                            let presentase_lain_lain = result.data.presentase_lain_lain
                            $('#titlerekalantasmonth').html(`<h4 class="card-title mb-0 text-uppercase">DATA REKALANTAS BULANAN</h4>`);

                            var ditkamselrekalantasmonth = {
                                series: [{
                                    name: 'Jalan Nasional',
                                    type: 'line',
                                    data: jalan_nasional,
                                }, {
                                    name: 'Jalan Provinsi',
                                    type: 'line',
                                    data: jalan_provinsi,
                                }, {
                                    name: 'Lain - lain',
                                    type: 'line',
                                    data: lain_lain,
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
                                // markers: {
                                //     size: 4,
                                //     colors: '#kkk',
                                //     fillOpacity: 0.9,
                                //     shape: "circle",
                                //     radius: 2,
                                // },
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
                                            jalan_nasionalsebelumnya = jalan_nasional[0];
                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            jalan_nasionalsebelumnya = jalan_nasional[1];
                                        } else if (w.globals.labels[dataPointIndex] == 4) {
                                            bulansebelumnya = polda_month[2]
                                            jalan_nasionalsebelumnya = jalan_nasional[2];
                                        } else if (w.globals.labels[dataPointIndex] == 5) {
                                            bulansebelumnya = polda_month[3]
                                            jalan_nasionalsebelumnya = jalan_nasional[3];
                                        } else if (w.globals.labels[dataPointIndex] == 6) {
                                            bulansebelumnya = polda_month[4]
                                            jalan_nasionalsebelumnya = jalan_nasional[4];
                                        } else if (w.globals.labels[dataPointIndex] == 7) {
                                            bulansebelumnya = polda_month[5]
                                            jalan_nasionalsebelumnya = jalan_nasional[5];
                                        } else if (w.globals.labels[dataPointIndex] == 8) {
                                            bulansebelumnya = polda_month[6]
                                            jalan_nasionalsebelumnya = jalan_nasional[6];
                                        } else if (w.globals.labels[dataPointIndex] == 9) {
                                            bulansebelumnya = polda_month[7]
                                            jalan_nasionalsebelumnya = jalan_nasional[7];
                                        } else if (w.globals.labels[dataPointIndex] == 10) {
                                            bulansebelumnya = polda_month[8]
                                            jalan_nasionalsebelumnya = jalan_nasional[8];
                                        } else if (w.globals.labels[dataPointIndex] == 11) {
                                            bulansebelumnya = polda_month[9]
                                            jalan_nasionalsebelumnya = jalan_nasional[9];
                                        } else if (w.globals.labels[dataPointIndex] == 12) {
                                            bulansebelumnya = polda_month[10]
                                            jalan_nasionalsebelumnya = jalan_nasional[10];
                                        }
                                        if (w.globals.labels[dataPointIndex] == 2) {
                                            bulansebelumnya = polda_month[0]
                                            jalan_provinsisebelumnya = jalan_provinsi[0];
                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            jalan_provinsisebelumnya = jalan_provinsi[1];
                                        } else if (w.globals.labels[dataPointIndex] == 4) {
                                            bulansebelumnya = polda_month[2]
                                            jalan_provinsisebelumnya = jalan_provinsi[2];
                                        } else if (w.globals.labels[dataPointIndex] == 5) {
                                            bulansebelumnya = polda_month[3]
                                            jalan_provinsisebelumnya = jalan_provinsi[3];
                                        } else if (w.globals.labels[dataPointIndex] == 6) {
                                            bulansebelumnya = polda_month[4]
                                            jalan_provinsisebelumnya = jalan_provinsi[4];
                                        } else if (w.globals.labels[dataPointIndex] == 7) {
                                            bulansebelumnya = polda_month[5]
                                            jalan_provinsisebelumnya = jalan_provinsi[5];
                                        } else if (w.globals.labels[dataPointIndex] == 8) {
                                            bulansebelumnya = polda_month[6]
                                            jalan_provinsisebelumnya = jalan_provinsi[6];
                                        } else if (w.globals.labels[dataPointIndex] == 9) {
                                            bulansebelumnya = polda_month[7]
                                            jalan_provinsisebelumnya = jalan_provinsi[7];
                                        } else if (w.globals.labels[dataPointIndex] == 10) {
                                            bulansebelumnya = polda_month[8]
                                            jalan_provinsisebelumnya = jalan_provinsi[8];
                                        } else if (w.globals.labels[dataPointIndex] == 11) {
                                            bulansebelumnya = polda_month[9]
                                            jalan_provinsisebelumnya = jalan_provinsi[9];
                                        } else if (w.globals.labels[dataPointIndex] == 12) {
                                            bulansebelumnya = polda_month[10]
                                            jalan_provinsisebelumnya = jalan_provinsi[10];
                                        }
                                        if (w.globals.labels[dataPointIndex] == 2) {
                                            bulansebelumnya = polda_month[0]
                                            lain_lainsebelumnya = lain_lain[0];
                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            lain_lainsebelumnya = lain_lain[1];
                                        } else if (w.globals.labels[dataPointIndex] == 4) {
                                            bulansebelumnya = polda_month[2]
                                            lain_lainsebelumnya = lain_lain[2];
                                        } else if (w.globals.labels[dataPointIndex] == 5) {
                                            bulansebelumnya = polda_month[3]
                                            lain_lainsebelumnya = lain_lain[3];
                                        } else if (w.globals.labels[dataPointIndex] == 6) {
                                            bulansebelumnya = polda_month[4]
                                            lain_lainsebelumnya = lain_lain[4];
                                        } else if (w.globals.labels[dataPointIndex] == 7) {
                                            bulansebelumnya = polda_month[5]
                                            lain_lainsebelumnya = lain_lain[5];
                                        } else if (w.globals.labels[dataPointIndex] == 8) {
                                            bulansebelumnya = polda_month[6]
                                            lain_lainsebelumnya = lain_lain[6];
                                        } else if (w.globals.labels[dataPointIndex] == 9) {
                                            bulansebelumnya = polda_month[7]
                                            lain_lainsebelumnya = lain_lain[7];
                                        } else if (w.globals.labels[dataPointIndex] == 10) {
                                            bulansebelumnya = polda_month[8]
                                            lain_lainsebelumnya = lain_lain[8];
                                        } else if (w.globals.labels[dataPointIndex] == 11) {
                                            bulansebelumnya = polda_month[9]
                                            lain_lainsebelumnya = lain_lain[9];
                                        } else if (w.globals.labels[dataPointIndex] == 12) {
                                            bulansebelumnya = polda_month[10]
                                            lain_lainsebelumnya = lain_lain[10];
                                        }
                                        return (
                                            `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 40rem; height:10rem;">`:'<div style="width: 16rem; height:10rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                <div class="my-2  text-center"">   
                                                    <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-9">
                                                            <span class="fw-bold">Total Jalan Nasional</span><br>
                                                            <span class="fw-bold">Total Jalan Provinsi</span><br>
                                                            <span class="fw-bold">Total Lain - lain</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${jalan_nasionalsebelumnya}</span><br>
                                                            <span class="fw-bold">${jalan_provinsisebelumnya}</span><br>
                                                            <span class="fw-bold">${lain_lainsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-9">
                                                            <span class="fw-bold">Total Jalan Nasional</span><br>
                                                            <span class="fw-bold">Total Jalan Provinsi</span><br>
                                                            <span class="fw-bold">Total Lain - lain</span><br>
                                                        </div>   
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${jalan_nasional[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${jalan_provinsi[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${lain_lain[dataPointIndex]}</span><br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${presentase_jalan_nasional[dataPointIndex]}%</span><br>
                                                    <span class="fw-bold">${presentase_jalan_provinsi[dataPointIndex]}%</span><br>
                                                    <span class="fw-bold">${presentase_lain_lain[dataPointIndex]}%</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-9">
                                                            <span class="fw-bold">Total Jalan Nasional</span><br>
                                                            <span class="fw-bold">Total Jalan Provinsi</span><br>
                                                            <span class="fw-bold">Total Lain - lain</span><br>
                                                        </div>   
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${jalan_nasional[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${jalan_provinsi[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${lain_lain[dataPointIndex]}</span><br>
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

                            var ditkamselrekalantasmonth = new ApexCharts(document.querySelector("#chart4"), ditkamselrekalantasmonth);
                            ditkamselrekalantasmonth.render();
                        }
                    })

                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>ditkamsel/getChartDikmaslantas",
                        data: {
                            start_date: firstDay,
                            end_date: lastDay,
                            filter: 'month'
                        },
                        dataType: "JSON",
                        success: function(result) {
                            let polda_month = result.data.polda_month
                            let media_cetak = result.data.media_cetak
                            let media_elektronik = result.data.media_elektronik
                            let media_sosial = result.data.media_sosial
                            let presentase_media_cetak = result.data.presentase_media_cetak
                            let presentase_media_elektronik = result.data.presentase_media_elektronik
                            let presentase_media_sosial = result.data.presentase_media_sosial
                            $('#titledikmaslantasmonth').html(`<h4 class="card-title mb-0 text-uppercase">DATA DIKMASLANTAS BULANAN</h4>`);

                            var ditkamseldikmaslantasmonth = {
                                series: [{
                                    name: 'Media Cetak',
                                    type: 'line',
                                    data: media_cetak,
                                }, {
                                    name: 'Media Elektronik',
                                    type: 'line',
                                    data: media_elektronik,
                                }, {
                                    name: 'Media Sosial',
                                    type: 'line',
                                    data: media_sosial,
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
                                // markers: {
                                //     size: 4,
                                //     colors: '#kkk',
                                //     fillOpacity: 0.9,
                                //     shape: "circle",
                                //     radius: 2,
                                // },
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
                                            media_cetaksebelumnya = media_cetak[0];
                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            media_cetaksebelumnya = media_cetak[1];
                                        } else if (w.globals.labels[dataPointIndex] == 4) {
                                            bulansebelumnya = polda_month[2]
                                            media_cetaksebelumnya = media_cetak[2];
                                        } else if (w.globals.labels[dataPointIndex] == 5) {
                                            bulansebelumnya = polda_month[3]
                                            media_cetaksebelumnya = media_cetak[3];
                                        } else if (w.globals.labels[dataPointIndex] == 6) {
                                            bulansebelumnya = polda_month[4]
                                            media_cetaksebelumnya = media_cetak[4];
                                        } else if (w.globals.labels[dataPointIndex] == 7) {
                                            bulansebelumnya = polda_month[5]
                                            media_cetaksebelumnya = media_cetak[5];
                                        } else if (w.globals.labels[dataPointIndex] == 8) {
                                            bulansebelumnya = polda_month[6]
                                            media_cetaksebelumnya = media_cetak[6];
                                        } else if (w.globals.labels[dataPointIndex] == 9) {
                                            bulansebelumnya = polda_month[7]
                                            media_cetaksebelumnya = media_cetak[7];
                                        } else if (w.globals.labels[dataPointIndex] == 10) {
                                            bulansebelumnya = polda_month[8]
                                            media_cetaksebelumnya = media_cetak[8];
                                        } else if (w.globals.labels[dataPointIndex] == 11) {
                                            bulansebelumnya = polda_month[9]
                                            media_cetaksebelumnya = media_cetak[9];
                                        } else if (w.globals.labels[dataPointIndex] == 12) {
                                            bulansebelumnya = polda_month[10]
                                            media_cetaksebelumnya = media_cetak[10];
                                        }
                                        if (w.globals.labels[dataPointIndex] == 2) {
                                            bulansebelumnya = polda_month[0]
                                            media_elektroniksebelumnya = media_elektronik[0];
                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            media_elektroniksebelumnya = media_elektronik[1];
                                        } else if (w.globals.labels[dataPointIndex] == 4) {
                                            bulansebelumnya = polda_month[2]
                                            media_elektroniksebelumnya = media_elektronik[2];
                                        } else if (w.globals.labels[dataPointIndex] == 5) {
                                            bulansebelumnya = polda_month[3]
                                            media_elektroniksebelumnya = media_elektronik[3];
                                        } else if (w.globals.labels[dataPointIndex] == 6) {
                                            bulansebelumnya = polda_month[4]
                                            media_elektroniksebelumnya = media_elektronik[4];
                                        } else if (w.globals.labels[dataPointIndex] == 7) {
                                            bulansebelumnya = polda_month[5]
                                            media_elektroniksebelumnya = media_elektronik[5];
                                        } else if (w.globals.labels[dataPointIndex] == 8) {
                                            bulansebelumnya = polda_month[6]
                                            media_elektroniksebelumnya = media_elektronik[6];
                                        } else if (w.globals.labels[dataPointIndex] == 9) {
                                            bulansebelumnya = polda_month[7]
                                            media_elektroniksebelumnya = media_elektronik[7];
                                        } else if (w.globals.labels[dataPointIndex] == 10) {
                                            bulansebelumnya = polda_month[8]
                                            media_elektroniksebelumnya = media_elektronik[8];
                                        } else if (w.globals.labels[dataPointIndex] == 11) {
                                            bulansebelumnya = polda_month[9]
                                            media_elektroniksebelumnya = media_elektronik[9];
                                        } else if (w.globals.labels[dataPointIndex] == 12) {
                                            bulansebelumnya = polda_month[10]
                                            media_elektroniksebelumnya = media_elektronik[10];
                                        }
                                        if (w.globals.labels[dataPointIndex] == 2) {
                                            bulansebelumnya = polda_month[0]
                                            media_sosialsebelumnya = media_sosial[0];
                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            media_sosialsebelumnya = media_sosial[1];
                                        } else if (w.globals.labels[dataPointIndex] == 4) {
                                            bulansebelumnya = polda_month[2]
                                            media_sosialsebelumnya = media_sosial[2];
                                        } else if (w.globals.labels[dataPointIndex] == 5) {
                                            bulansebelumnya = polda_month[3]
                                            media_sosialsebelumnya = media_sosial[3];
                                        } else if (w.globals.labels[dataPointIndex] == 6) {
                                            bulansebelumnya = polda_month[4]
                                            media_sosialsebelumnya = media_sosial[4];
                                        } else if (w.globals.labels[dataPointIndex] == 7) {
                                            bulansebelumnya = polda_month[5]
                                            media_sosialsebelumnya = media_sosial[5];
                                        } else if (w.globals.labels[dataPointIndex] == 8) {
                                            bulansebelumnya = polda_month[6]
                                            media_sosialsebelumnya = media_sosial[6];
                                        } else if (w.globals.labels[dataPointIndex] == 9) {
                                            bulansebelumnya = polda_month[7]
                                            media_sosialsebelumnya = media_sosial[7];
                                        } else if (w.globals.labels[dataPointIndex] == 10) {
                                            bulansebelumnya = polda_month[8]
                                            media_sosialsebelumnya = media_sosial[8];
                                        } else if (w.globals.labels[dataPointIndex] == 11) {
                                            bulansebelumnya = polda_month[9]
                                            media_sosialsebelumnya = media_sosial[9];
                                        } else if (w.globals.labels[dataPointIndex] == 12) {
                                            bulansebelumnya = polda_month[10]
                                            media_sosialsebelumnya = media_sosial[10];
                                        }
                                        return (
                                            `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 40rem; height:10rem;">`:'<div style="width: 16rem; height:10rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                <div class="my-2  text-center"">   
                                                    <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-9">
                                                            <span class="fw-bold">Total Media Cetak</span><br>
                                                            <span class="fw-bold">Total Media Elektronik</span><br>
                                                            <span class="fw-bold">Total Media Sosial</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${media_cetaksebelumnya}</span><br>
                                                            <span class="fw-bold">${media_elektroniksebelumnya}</span><br>
                                                            <span class="fw-bold">${media_sosialsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-9">
                                                            <span class="fw-bold">Total Media Cetak</span><br>
                                                            <span class="fw-bold">Total Media Elektronik</span><br>
                                                            <span class="fw-bold">Total Media Sosial</span><br>
                                                        </div>   
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${media_cetak[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${media_elektronik[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${media_sosial[dataPointIndex]}</span><br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${presentase_media_cetak[dataPointIndex]}%</span><br>
                                                    <span class="fw-bold">${presentase_media_elektronik[dataPointIndex]}%</span><br>
                                                    <span class="fw-bold">${presentase_media_sosial[dataPointIndex]}%</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-9">
                                                            <span class="fw-bold">Total Media Cetak</span><br>
                                                            <span class="fw-bold">Total Media Elektronik</span><br>
                                                            <span class="fw-bold">Total Media Sosial</span><br>
                                                        </div>   
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${media_cetak[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${media_elektronik[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${media_sosial[dataPointIndex]}</span><br>
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

                            var ditkamseldikmaslantasmonth = new ApexCharts(document.querySelector("#chart"), ditkamseldikmaslantasmonth);
                            ditkamseldikmaslantasmonth.render();
                        }
                    })


                }

                // // Year
                function getDitkamselyear(three_yearAgo, lastDay) {
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>ditkamsel/getChartBlackspot",
                        data: {
                            start_date: three_yearAgo,
                            end_date: lastDay,
                            filter: 'year'
                        },
                        dataType: "JSON",
                        success: function(result) {
                            let polda_month = result.data.polda_month
                            let blackspot = result.data.blackspot
                            let presentase_blackspot = result.data.presentase_blackspot
                            $('#titleblackspotyear').html(`<h4 class="card-title mb-0 text-uppercase">DATA BLACKSPOT TAHUNAN</h4>`);

                            var ditkamselblackspotyear = {
                                series: [{
                                    name: 'Blackspot',
                                    type: 'line',
                                    data: blackspot,
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
                                // markers: {
                                //     size: 4,
                                //     colors: '#kkk',
                                //     fillOpacity: 0.9,
                                //     shape: "circle",
                                //     radius: 2,
                                // },
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
                                            blackspotsebelumnya = blackspot[0];
                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            blackspotsebelumnya = blackspot[1];
                                        }

                                        return (
                                            `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 40rem; height:10rem;">`:'<div style="width: 16rem; height:10rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                <div class="my-2  text-center"">   
                                                    <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-9">
                                                            <span class="fw-bold">Total Blackspot</span><br>
                                                         </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${blackspotsebelumnya}</span><br>
                                                         </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-9">
                                                            <span class="fw-bold">Total Blackspot</span><br>
                                                        </div>   
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${blackspot[dataPointIndex]}</span><br>
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${presentase_blackspot[dataPointIndex]}%</span><br>
                                                     </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-9">
                                                            <span class="fw-bold">Total Blackspot</span><br>
                                                        </div>   
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${blackspot[dataPointIndex]}</span><br>
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

                            var ditkamselblackspotyear = new ApexCharts(document.querySelector("#chartyear2"), ditkamselblackspotyear);
                            ditkamselblackspotyear.render();
                        }
                    })

                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>ditkamsel/getChartTroublespot",
                        data: {
                            start_date: three_yearAgo,
                            end_date: lastDay,
                            filter: 'year'
                        },
                        dataType: "JSON",
                        success: function(result) {
                            let polda_month = result.data.polda_month
                            let troublespot = result.data.troublespot
                            let presentase_troublespot = result.data.presentase_troublespot
                            $('#titletroublespotyear').html(`<h4 class="card-title mb-0 text-uppercase">DATA TROUBLESPOT TAHUNAN</h4>`);

                            var ditkamseltroublespotyear = {
                                series: [{
                                    name: 'troublespot',
                                    type: 'line',
                                    data: troublespot,
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
                                // markers: {
                                //     size: 4,
                                //     colors: '#kkk',
                                //     fillOpacity: 0.9,
                                //     shape: "circle",
                                //     radius: 2,
                                // },
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
                                            troublespotsebelumnya = troublespot[0];
                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            troublespotsebelumnya = troublespot[1];
                                        }

                                        return (
                                            `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 40rem; height:10rem;">`:'<div style="width: 16rem; height:10rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                <div class="my-2  text-center"">   
                                                    <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-9">
                                                            <span class="fw-bold">Total Troublespot</span><br>
                                                         </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${troublespotsebelumnya}</span><br>
                                                         </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-9">
                                                            <span class="fw-bold">Total Troublespot</span><br>
                                                        </div>   
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${troublespot[dataPointIndex]}</span><br>
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${presentase_troublespot[dataPointIndex]}%</span><br>
                                                     </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-9">
                                                            <span class="fw-bold">Total Troublespot</span><br>
                                                        </div>   
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${troublespot[dataPointIndex]}</span><br>
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

                            var ditkamseltroublespotyear = new ApexCharts(document.querySelector("#chartyear3"), ditkamseltroublespotyear);
                            ditkamseltroublespotyear.render();
                        }
                    })

                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>ditkamsel/getChartRekalantas",
                        data: {
                            start_date: three_yearAgo,
                            end_date: lastDay,
                            filter: 'year'
                        },
                        dataType: "JSON",
                        success: function(result) {
                            let polda_month = result.data.polda_month
                            let jalan_nasional = result.data.jalan_nasional
                            let jalan_provinsi = result.data.jalan_provinsi
                            let lain_lain = result.data.lain_lain
                            let presentase_jalan_nasional = result.data.presentase_jalan_nasional
                            let presentase_jalan_provinsi = result.data.presentase_jalan_provinsi
                            let presentase_lain_lain = result.data.presentase_lain_lain
                            $('#titlerekalantasyear').html(`<h4 class="card-title mb-0 text-uppercase">DATA REKALANTAS TAHUNAN</h4>`);

                            var ditkamselrekalantasyear = {
                                series: [{
                                    name: 'Jalan Nasional',
                                    type: 'line',
                                    data: jalan_nasional,
                                }, {
                                    name: 'Jalan Provinsi',
                                    type: 'line',
                                    data: jalan_provinsi,
                                }, {
                                    name: 'Lain - lain',
                                    type: 'line',
                                    data: lain_lain,
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
                                // markers: {
                                //     size: 4,
                                //     colors: '#kkk',
                                //     fillOpacity: 0.9,
                                //     shape: "circle",
                                //     radius: 2,
                                // },
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
                                            jalan_nasionalsebelumnya = jalan_nasional[0];
                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            jalan_nasionalsebelumnya = jalan_nasional[1];
                                        }
                                        if (w.globals.labels[dataPointIndex] == 2) {
                                            bulansebelumnya = polda_month[0]
                                            jalan_provinsisebelumnya = jalan_provinsi[0];
                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            jalan_provinsisebelumnya = jalan_provinsi[1];
                                        }
                                        if (w.globals.labels[dataPointIndex] == 2) {
                                            bulansebelumnya = polda_month[0]
                                            lain_lainsebelumnya = lain_lain[0];
                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            lain_lainsebelumnya = lain_lain[1];
                                        }
                                        return (
                                            `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 40rem; height:10rem;">`:'<div style="width: 16rem; height:10rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                <div class="my-2  text-center"">   
                                                    <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-9">
                                                            <span class="fw-bold">Total Jalan Nasional</span><br>
                                                            <span class="fw-bold">Total Jalan Provinsi</span><br>
                                                            <span class="fw-bold">Total Lain - lain</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${jalan_nasionalsebelumnya}</span><br>
                                                            <span class="fw-bold">${jalan_provinsisebelumnya}</span><br>
                                                            <span class="fw-bold">${lain_lainsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-9">
                                                            <span class="fw-bold">Total Jalan Nasional</span><br>
                                                            <span class="fw-bold">Total Jalan Provinsi</span><br>
                                                            <span class="fw-bold">Total Lain - lain</span><br>
                                                        </div>   
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${jalan_nasional[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${jalan_provinsi[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${lain_lain[dataPointIndex]}</span><br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${presentase_jalan_nasional[dataPointIndex]}%</span><br>
                                                    <span class="fw-bold">${presentase_jalan_provinsi[dataPointIndex]}%</span><br>
                                                    <span class="fw-bold">${presentase_lain_lain[dataPointIndex]}%</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-9">
                                                            <span class="fw-bold">Total Jalan Nasional</span><br>
                                                            <span class="fw-bold">Total Jalan Provinsi</span><br>
                                                            <span class="fw-bold">Total Lain - lain</span><br>
                                                        </div>   
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${jalan_nasional[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${jalan_provinsi[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${lain_lain[dataPointIndex]}</span><br>
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

                            var ditkamselrekalantasyear = new ApexCharts(document.querySelector("#chartyear4"), ditkamselrekalantasyear);
                            ditkamselrekalantasyear.render();
                        }
                    })

                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>ditkamsel/getChartDikmaslantas",
                        data: {
                            start_date: three_yearAgo,
                            end_date: lastDay,
                            filter: 'year'
                        },
                        dataType: "JSON",
                        success: function(result) {
                            let polda_month = result.data.polda_month
                            let media_cetak = result.data.media_cetak
                            let media_elektronik = result.data.media_elektronik
                            let media_sosial = result.data.media_sosial
                            let presentase_media_cetak = result.data.presentase_media_cetak
                            let presentase_media_elektronik = result.data.presentase_media_elektronik
                            let presentase_media_sosial = result.data.presentase_media_sosial
                            $('#titledikmaslantasyear').html(`<h4 class="card-title mb-0 text-uppercase">DATA DIKMASLANTAS TAHUNAN</h4>`);

                            var ditkamseldikmaslantasyear = {
                                series: [{
                                    name: 'Media Cetak',
                                    type: 'line',
                                    data: media_cetak,
                                }, {
                                    name: 'Media Elektronik',
                                    type: 'line',
                                    data: media_elektronik,
                                }, {
                                    name: 'Media Sosial',
                                    type: 'line',
                                    data: media_sosial,
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
                                // markers: {
                                //     size: 4,
                                //     colors: '#kkk',
                                //     fillOpacity: 0.9,
                                //     shape: "circle",
                                //     radius: 2,
                                // },
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
                                            media_cetaksebelumnya = media_cetak[0];
                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            media_cetaksebelumnya = media_cetak[1];
                                        }
                                        if (w.globals.labels[dataPointIndex] == 2) {
                                            bulansebelumnya = polda_month[0]
                                            media_elektroniksebelumnya = media_elektronik[0];
                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            media_elektroniksebelumnya = media_elektronik[1];
                                        }
                                        if (w.globals.labels[dataPointIndex] == 2) {
                                            bulansebelumnya = polda_month[0]
                                            media_sosialsebelumnya = media_sosial[0];
                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            media_sosialsebelumnya = media_sosial[1];
                                        }
                                        return (
                                            `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 40rem; height:10rem;">`:'<div style="width: 16rem; height:10rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                <div class="my-2  text-center"">   
                                                    <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-9">
                                                            <span class="fw-bold">Total Media Cetak</span><br>
                                                            <span class="fw-bold">Total Media Elektronik</span><br>
                                                            <span class="fw-bold">Total Media Sosial</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${media_cetaksebelumnya}</span><br>
                                                            <span class="fw-bold">${media_elektroniksebelumnya}</span><br>
                                                            <span class="fw-bold">${media_sosialsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-9">
                                                            <span class="fw-bold">Total Media Cetak</span><br>
                                                            <span class="fw-bold">Total Media Elektronik</span><br>
                                                            <span class="fw-bold">Total Media Sosial</span><br>
                                                        </div>   
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${media_cetak[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${media_elektronik[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${media_sosial[dataPointIndex]}</span><br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${presentase_media_cetak[dataPointIndex]}%</span><br>
                                                    <span class="fw-bold">${presentase_media_elektronik[dataPointIndex]}%</span><br>
                                                    <span class="fw-bold">${presentase_media_sosial[dataPointIndex]}%</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-9">
                                                            <span class="fw-bold">Total Media Cetak</span><br>
                                                            <span class="fw-bold">Total Media Elektronik</span><br>
                                                            <span class="fw-bold">Total Media Sosial</span><br>
                                                        </div>   
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${media_cetak[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${media_elektronik[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${media_sosial[dataPointIndex]}</span><br>
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

                            var ditkamseldikmaslantasyear = new ApexCharts(document.querySelector("#chartyear"), ditkamseldikmaslantasyear);
                            ditkamseldikmaslantasyear.render();
                        }
                    })

                    $('#type').on('change', function() {
                        console.log($('#type').val())
                        let type = $('#type').val()
                        if (type == 'day') {
                            $('#type_date').attr('type', 'date')
                        } else if (type == 'weeks') {
                            $('#type_date').attr('type', 'date')
                        } else if (type == 'month') {
                            $('#type_date').attr('type', 'month')
                        } else if (type == 'triwulan') {
                            $('#type_date').attr('type', 'month')
                        } else if (type == 'years') {
                            $('#type_date').attr('type', 'month')
                        }
                    })

                    $('#btn_export_laporan').on('click', function(e) {
                        e.preventDefault()
                        let = '';
                        let type = $('#type').val()
                        let date = $('#type_date').val();
                        let url = `laporan_harian/anev_ditkamsel?date=${date}&type=${type}`

                        if (type == 'month') {
                            console.log(date)
                        }

                        window.open(
                            `<?= ApiUrl() ?>${url}`,
                            '_blank' // <- This is what makes it open in a new window.
                        );

                    })
                }
            </script>