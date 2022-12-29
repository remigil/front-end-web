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
                        <div class="col-md-2 text-end align-self-center" style="margin-left: 4%;">
                            <button type="button" class="btn btn-outline-primary" style="width: 200px; border-color:#007DD8;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <!-- <iconify-icon icon="mdi:file-document-multiple"></iconify-icon> -->
                                Struktur Organisasi
                            </button>
                        </div>
                        <div class="col-md-2 text-end align-self-center" style="margin-left: -4%;">
                            <div class="btn-group">
                                <button type="button" class="btn dropdown-toggle btn-outline-primary" data-bs-toggle="dropdown" aria-expanded="false" style="width: 200px; border-color:#007DD8;">
                                    Pilih Laporan <i class="fas fa-caret-down"></i>
                                </button>

                                <!-- <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"  aria-expanded="false">
                                    Dropdown button
                                </button> -->
                                <div class="dropdown-menu" style="width: 200px; background-color:#D9D9D9">
                                    <a class="dropdown-item" target="_blank" download href="<?= ApiUrl() ?>laporan_harian/anev_ditkamsel?type=day&date=<?= date('Y-m-d'); ?>">Harian</a>
                                    <a class="dropdown-item" target="_blank" download href="<?= ApiUrl() ?>laporan_harian/anev_ditkamsel?type=weeks&date=<?= date('Y-m-d'); ?>">Mingguan</a>
                                    <a class="dropdown-item" target="_blank" download href="<?= ApiUrl() ?>laporan_harian/anev_ditkamsel?type=month&date=<?= date('m'); ?>">Bulanan</a>
                                    <a class="dropdown-item" target="_blank" download href="<?= ApiUrl() ?>laporan_harian/anev_ditkamsel?type=triwulan&date=<?= date('m'); ?>">Triwulan</a>
                                    <a class="dropdown-item" target="_blank" download href="<?= ApiUrl() ?>laporan_harian/anev_ditkamsel?type=years&date=<?= date('Y'); ?>">Tahunan</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <div class="row">

                    <div class="col-md-12 mt-5">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-md-4 mb-3">
                                <h4 style="text-transform: uppercase; color:#007DD8;">Statistik Nasional</h4>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                                    <div class="card-body">
                                        <div class="row justify-content-between align-items-center" style="font-size: 40px;">

                                            <div class="col-md-10 float-start">
                                                <p class="fs-5 float-start" style="color:#464646;">
                                                    <span class="fw-bold">Total DIKMAS</span>
                                                    <br>
                                                    <span class="fs-6 fw-bold float-start" style="color:#464646;" id="dikmaslantas"></span>
                                                <p class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detaildikmas"></p>
                                                </p>
                                            </div>
                                            <div class=" col-md-2">
                                                <img src="<?= base_url('assets/icon/dashboard/DIKMAS.png') ?>" alt="" style="width: 60px; margin-left:-25px;">
                                                <!-- <iconify-icon icon="material-symbols:credit-card-outline" class="ms-n2" style="font-size: 40px; color: #464646;"></iconify-icon> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                                    <div class="card-body">
                                        <div class="row justify-content-between align-items-center" style="font-size: 40px;">

                                            <div class="col-md-10 float-start">
                                                <p class="fs-5 float-start" style="color:#464646;">
                                                    <span class="fw-bold">Total JEMENOPSREK</span>
                                                    <br>
                                                    <span class="fs-6 fw-bold float-start" style="color:#464646;" id="jemenopsrek"></span>
                                                <p class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detailjemenopsrek"></p>
                                                </p>
                                            </div>
                                            <div class=" col-md-2">
                                                <img src="<?= base_url('assets/icon/dashboard/JEMENOPSREK.png') ?>" alt="" style="width: 60px; margin-left:-25px;">
                                                <!-- <iconify-icon icon="material-symbols:book-rounded" class="ms-n2" style="font-size: 40px; color: #464646;"></iconify-icon> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                                    <div class="card-body">
                                        <div class="row justify-content-between align-items-center" style="font-size: 40px;">

                                            <div class="col-md-10 float-start">
                                                <p class="fs-5 float-start" style="color:#464646;">
                                                    <span class="fw-bold">Total CEGAH</span>
                                                    <br>
                                                    <span class="fs-6 fw-bold float-start" style="color:#464646;" id="cegah"></span>
                                                <p class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detailcegah"></p>
                                                </p>
                                            </div>
                                            <div class=" col-md-2">
                                                <img src="<?= base_url('assets/icon/dashboard/CEGAH.png') ?>" alt="" style="width: 60px; margin-left:-25px;">
                                                <!-- <iconify-icon icon="material-symbols:credit-card-outline" class="ms-n2" style="font-size: 40px; color: #464646;"></iconify-icon> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                                    <div class="card-body">
                                        <div class="row justify-content-between align-items-center" style="font-size: 40px;">

                                            <div class="col-md-10 float-start">
                                                <p class="fs-5 float-start" style="color:#464646;">
                                                    <span class="fw-bold">Total AUDIT</span>
                                                    <br>
                                                    <span class="fs-6 fw-bold float-start" style="color:#464646;" id="audit"></span>
                                                <p class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detailaudit"></p>
                                                </p>
                                            </div>
                                            <div class=" col-md-2">
                                                <img src="<?= base_url('assets/icon/dashboard/AUDIT.png') ?>" alt="" style="width: 60px; margin-left:-25px;">
                                                <!-- <iconify-icon icon="material-symbols:credit-card-outline" class="ms-n2" style="font-size: 40px; color: #464646;"></iconify-icon> -->
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
                        <section class="shadow-sm mt-5">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div id="titlejemenopsrekday"></div>
                                        </div>
                                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                            <div class="main-chart">
                                                <div id="chartdayjemenopsrek">
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
                                            <div id="titlecegahday"></div>
                                        </div>
                                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                            <div class="main-chart">
                                                <div id="chartdaycegah">
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
                                            <div id="titleauditday"></div>
                                        </div>
                                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                            <div class="main-chart">
                                                <div id="chartdayaudit">
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
                        <section class="shadow-sm mt-5">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div id="titlejemenopsrekmonth"></div>
                                        </div>
                                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                            <div class="main-chart">
                                                <div id="chartmonthjemenopsrek">
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
                                            <div id="titlecegahmonth"></div>
                                        </div>
                                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                            <div class="main-chart">
                                                <div id="chartmonthcegah">
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
                                            <div id="titleauditmonth"></div>
                                        </div>
                                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                            <div class="main-chart">
                                                <div id="chartmonthaudit">
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
                        <section class="shadow-sm mt-5">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div id="titlejemenopsrekyear"></div>
                                        </div>
                                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                            <div class="main-chart">
                                                <div id="chartyearjemenopsrek">
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
                                            <div id="titlecegahyear"></div>
                                        </div>
                                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                            <div class="main-chart">
                                                <div id="chartyearcegah">
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
                                            <div id="titleaudityear"></div>
                                        </div>
                                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                            <div class="main-chart">
                                                <div id="chartyearaudit">
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
                                <img src="<?= base_url('assets/fe/strukturorganisasi/strukturditkamsel.png'); ?>" alt="" srcset="">
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
                $("#chartdaydikmaslantas").html(`<div id="chartday1"></div>`);
                $("#chartdayjemenopsrek").html(`<div id="chartday2"></div>`);
                $("#chartdaycegah").html(`<div id="chartday3"></div>`);
                $("#chartdayaudit").html(`<div id="chartday4"></div>`);

                // Month
                $("#chartmonthdikmaslantas").html(`<div id="chart"></div>`);
                $("#chartmonthjemenopsrek").html(`<div id="chart2"></div>`);
                $("#chartmonthcegah").html(`<div id="chart3"></div>`);
                $("#chartmonthaudit").html(`<div id="chart4"></div>`);

                // Year
                $("#chartyeardikmaslantas").html(`<div id="chartyear"></div>`);
                $("#chartyearjemenopsrek").html(`<div id="chartyear2"></div>`);
                $("#chartyearcegah").html(`<div id="chartyear3"></div>`);
                $("#chartyearaudit").html(`<div id="chartyear4"></div>`);


                getStatistik();

                function getStatistik() {
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>ditkamsel/getStatistik",
                        dataType: "JSON",
                        success: function(result) {
                            $("#overlay").fadeOut(300);
                            $('#dikmaslantas').html(`<span class="fs-4" >${result.dikmaslantas}</span >`);
                            $('#jemenopsrek').html(`<span class="fs-4" >${result.jemenopsrek}</span >`);
                            $('#cegah').html(`<span class="fs-4" >${result.cegah}</span >`);
                            $('#audit').html(`<span class="fs-4" >${result.audit}</span>`);
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
                        url: "<?php echo base_url(); ?>ditkamsel/getChartDitkamsel",
                        data: {
                            start_date: seven_daysAgo,
                            end_date: today,
                            filter: 'day'
                        },
                        dataType: "JSON",
                        success: function(result) {
                            let polda_month = result.data.polda_month
                            let dikmaslantas = result.data.dikmaslantas
                            let jemenopsrek = result.data.jemenopsrek
                            let cegah = result.data.cegah
                            let audit = result.data.audit
                            $('#titledikmaslantasday').html(`<h4 class="card-title mb-0 text-uppercase">DATA DIKMAS HARIAN</h4>`);
                            $('#titlejemenopsrekday').html(`<h4 class="card-title mb-0 text-uppercase">DATA JEMENOPSREK HARIAN</h4>`);
                            $('#titlecegahday').html(`<h4 class="card-title mb-0 text-uppercase">DATA CEGAH & TINDAK HARIAN</h4>`);
                            $('#titleauditday').html(`<h4 class="card-title mb-0 text-uppercase">DATA AUDIT & INSPEKSI HARIAN</h4>`);

                            var ditkamseldikmaslantasday = {
                                series: [{
                                    name: 'DIKMASLANTAS',
                                    type: 'line',
                                    data: dikmaslantas,
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
                                            dikmaslantassebelumnya = dikmaslantas[0];

                                            if (dikmaslantas[0] < dikmaslantas[1]) {
                                                persentasedikmaslantas = 'Naik'
                                            } else if (dikmaslantas[0] > dikmaslantas[1]) {
                                                persentasedikmaslantas = 'Turun'
                                            } else {
                                                persentasedikmaslantas = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            dikmaslantassebelumnya = dikmaslantas[1];
                                            if (dikmaslantas[1] < dikmaslantas[2]) {
                                                persentasedikmaslantas = 'Naik'
                                            } else if (dikmaslantas[1] > dikmaslantas[2]) {
                                                persentasedikmaslantas = 'Turun'
                                            } else {
                                                persentasedikmaslantas = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 4) {
                                            bulansebelumnya = polda_month[2]
                                            dikmaslantassebelumnya = dikmaslantas[2];
                                            if (dikmaslantas[2] < dikmaslantas[3]) {
                                                persentasedikmaslantas = 'Naik'
                                            } else if (dikmaslantas[2] > dikmaslantas[3]) {
                                                persentasedikmaslantas = 'Turun'
                                            } else {
                                                persentasedikmaslantas = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 5) {
                                            bulansebelumnya = polda_month[3]
                                            dikmaslantassebelumnya = dikmaslantas[3];
                                            if (dikmaslantas[3] < dikmaslantas[4]) {
                                                persentasedikmaslantas = 'Naik'
                                            } else if (dikmaslantas[3] > dikmaslantas[4]) {
                                                persentasedikmaslantas = 'Turun'
                                            } else {
                                                persentasedikmaslantas = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 6) {
                                            bulansebelumnya = polda_month[4]
                                            dikmaslantassebelumnya = dikmaslantas[4];
                                            if (dikmaslantas[4] < dikmaslantas[5]) {
                                                persentasedikmaslantas = 'Naik'
                                            } else if (dikmaslantas[4] > dikmaslantas[5]) {
                                                persentasedikmaslantas = 'Turun'
                                            } else {
                                                persentasedikmaslantas = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 7) {
                                            bulansebelumnya = polda_month[5]
                                            dikmaslantassebelumnya = dikmaslantas[5];
                                            if (dikmaslantas[5] < dikmaslantas[6]) {
                                                persentasedikmaslantas = 'Naik'
                                            } else if (dikmaslantas[5] > dikmaslantas[6]) {
                                                persentasedikmaslantas = 'Turun'
                                            } else {
                                                persentasedikmaslantas = 'Sama'
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
                                                            <span class="fw-bold">Total dikmaslantas</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${dikmaslantassebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total dikmaslantas</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${dikmaslantas[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasedikmaslantas}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total dikmaslantas</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${dikmaslantas[dataPointIndex]}</span><br>
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


                            var ditkamseljemenopsrekday = {
                                series: [{
                                    name: 'JEMENOPSREK',
                                    type: 'line',
                                    data: jemenopsrek,
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
                                            jemenopsreksebelumnya = jemenopsrek[0];

                                            if (jemenopsrek[0] < jemenopsrek[1]) {
                                                persentasejemenopsrek = 'Naik'
                                            } else if (jemenopsrek[0] > jemenopsrek[1]) {
                                                persentasejemenopsrek = 'Turun'
                                            } else {
                                                persentasejemenopsrek = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            jemenopsreksebelumnya = jemenopsrek[1];
                                            if (jemenopsrek[1] < jemenopsrek[2]) {
                                                persentasejemenopsrek = 'Naik'
                                            } else if (jemenopsrek[1] > jemenopsrek[2]) {
                                                persentasejemenopsrek = 'Turun'
                                            } else {
                                                persentasejemenopsrek = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 4) {
                                            bulansebelumnya = polda_month[2]
                                            jemenopsreksebelumnya = jemenopsrek[2];
                                            if (jemenopsrek[2] < jemenopsrek[3]) {
                                                persentasejemenopsrek = 'Naik'
                                            } else if (jemenopsrek[2] > jemenopsrek[3]) {
                                                persentasejemenopsrek = 'Turun'
                                            } else {
                                                persentasejemenopsrek = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 5) {
                                            bulansebelumnya = polda_month[3]
                                            jemenopsreksebelumnya = jemenopsrek[3];
                                            if (jemenopsrek[3] < jemenopsrek[4]) {
                                                persentasejemenopsrek = 'Naik'
                                            } else if (jemenopsrek[3] > jemenopsrek[4]) {
                                                persentasejemenopsrek = 'Turun'
                                            } else {
                                                persentasejemenopsrek = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 6) {
                                            bulansebelumnya = polda_month[5]
                                            jemenopsreksebelumnya = jemenopsrek[4];
                                            if (jemenopsrek[4] < jemenopsrek[5]) {
                                                persentasejemenopsrek = 'Naik'
                                            } else if (jemenopsrek[4] > jemenopsrek[5]) {
                                                persentasejemenopsrek = 'Turun'
                                            } else {
                                                persentasejemenopsrek = 'Sama'
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
                                                            <span class="fw-bold">Total jemenopsrek</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${jemenopsreksebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total jemenopsrek</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${jemenopsrek[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasejemenopsrek}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total jemenopsrek</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${jemenopsrek[dataPointIndex]}</span><br>
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

                            var ditkamseljemenopsrekday = new ApexCharts(document.querySelector("#chartday2"), ditkamseljemenopsrekday);
                            ditkamseljemenopsrekday.render();


                            var cegahday = {
                                series: [{
                                    name: 'CEGAH & TINDAK',
                                    type: 'line',
                                    data: cegah,
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
                                            cegahsebelumnya = cegah[0];

                                            if (cegah[0] < cegah[1]) {
                                                cegah = 'Naik'
                                            } else if (cegah[0] > cegah[1]) {
                                                cegah = 'Turun'
                                            } else {
                                                cegah = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            cegahsebelumnya = cegah[1];
                                            if (cegah[1] < cegah[2]) {
                                                cegah = 'Naik'
                                            } else if (cegah[1] > cegah[2]) {
                                                cegah = 'Turun'
                                            } else {
                                                cegah = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 4) {
                                            bulansebelumnya = polda_month[2]
                                            cegahsebelumnya = cegah[2];
                                            if (cegah[2] < cegah[3]) {
                                                cegah = 'Naik'
                                            } else if (cegah[2] > cegah[3]) {
                                                cegah = 'Turun'
                                            } else {
                                                cegah = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 5) {
                                            bulansebelumnya = polda_month[3]
                                            cegahsebelumnya = cegah[3];
                                            if (cegah[3] < cegah[4]) {
                                                cegah = 'Naik'
                                            } else if (cegah[3] > cegah[4]) {
                                                cegah = 'Turun'
                                            } else {
                                                cegah = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 6) {
                                            bulansebelumnya = polda_month[4]
                                            cegahsebelumnya = cegah[4];
                                            if (cegah[4] < cegah[5]) {
                                                cegah = 'Naik'
                                            } else if (cegah[4] > cegah[5]) {
                                                cegah = 'Turun'
                                            } else {
                                                cegah = 'Sama'
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
                                                            <span class="fw-bold">Total cegah</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${cegahsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total cegah</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${cegah[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${cegah}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total cegah</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${cegah[dataPointIndex]}</span><br>
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

                            var cegahday = new ApexCharts(document.querySelector("#chartday3"), cegahday);
                            cegahday.render();


                            var auditday = {
                                series: [{
                                    name: 'AUDIT & INSPEKSI',
                                    type: 'line',
                                    data: audit,
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
                                            auditsebelumnya = audit[0];

                                            if (audit[0] < audit[1]) {
                                                presentaseaudit = 'Naik'
                                            } else if (audit[0] > audit[1]) {
                                                presentaseaudit = 'Turun'
                                            } else {
                                                presentaseaudit = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            auditsebelumnya = audit[1];
                                            if (audit[1] < audit[2]) {
                                                presentaseaudit = 'Naik'
                                            } else if (audit[1] > audit[2]) {
                                                presentaseaudit = 'Turun'
                                            } else {
                                                presentaseaudit = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 4) {
                                            bulansebelumnya = polda_month[2]
                                            auditsebelumnya = audit[2];
                                            if (audit[2] < audit[3]) {
                                                presentaseaudit = 'Naik'
                                            } else if (audit[2] > audit[3]) {
                                                presentaseaudit = 'Turun'
                                            } else {
                                                presentaseaudit = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 5) {
                                            bulansebelumnya = polda_month[3]
                                            auditsebelumnya = audit[3];
                                            if (audit[3] < audit[4]) {
                                                presentaseaudit = 'Naik'
                                            } else if (audit[3] > audit[4]) {
                                                presentaseaudit = 'Turun'
                                            } else {
                                                presentaseaudit = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 6) {
                                            bulansebelumnya = polda_month[4]
                                            auditsebelumnya = audit[4];
                                            if (audit[4] < audit[5]) {
                                                presentaseaudit = 'Naik'
                                            } else if (audit[4] > audit[5]) {
                                                presentaseaudit = 'Turun'
                                            } else {
                                                presentaseaudit = 'Sama'
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
                                                            <span class="fw-bold">Total audit</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${auditsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total audit</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${audit[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${presentaseaudit}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total audit</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${audit[dataPointIndex]}</span><br>
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

                            var auditday = new ApexCharts(document.querySelector("#chartday4"), auditday);
                            auditday.render();
                        }
                    })
                }


                // // Month
                function getDitkamselmonth(firstDay, lastDay) {
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>ditkamsel/getChartDitkamsel",
                        data: {
                            start_date: firstDay,
                            end_date: lastDay,
                            filter: 'month'
                        },
                        dataType: "JSON",
                        success: function(result) {
                            let polda_month = result.data.polda_month
                            let dikmaslantas = result.data.dikmaslantas
                            let jemenopsrek = result.data.jemenopsrek
                            let cegah = result.data.cegah
                            let audit = result.data.audit
                            $('#titledikmaslantasmonth').html(`<h4 class="card-title mb-0 text-uppercase">DATA DIKMAS BULANAN</h4>`);
                            $('#titlejemenopsrekmonth').html(`<h4 class="card-title mb-0 text-uppercase">DATA JEMENOPSREK BULANAN</h4>`);
                            $('#titlecegahmonth').html(`<h4 class="card-title mb-0 text-uppercase">DATA CEGAH & TINDAK BULANAN</h4>`);
                            $('#titleauditmonth').html(`<h4 class="card-title mb-0 text-uppercase">DATA AUDIT & INSPEKSI BULANAN</h4>`);

                            var ditkamseldikmaslantasmonth = {
                                series: [{
                                    name: 'DIKMASLANTAS',
                                    type: 'line',
                                    data: dikmaslantas,
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
                                            dikmaslantassebelumnya = dikmaslantas[0];

                                            if (dikmaslantas[0] < dikmaslantas[1]) {
                                                persentasedikmaslantas = 'Naik'
                                            } else if (dikmaslantas[0] > dikmaslantas[1]) {
                                                persentasedikmaslantas = 'Turun'
                                            } else {
                                                persentasedikmaslantas = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            dikmaslantassebelumnya = dikmaslantas[1];
                                            if (dikmaslantas[1] < dikmaslantas[2]) {
                                                persentasedikmaslantas = 'Naik'
                                            } else if (dikmaslantas[1] > dikmaslantas[2]) {
                                                persentasedikmaslantas = 'Turun'
                                            } else {
                                                persentasedikmaslantas = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 4) {
                                            bulansebelumnya = polda_month[2]
                                            dikmaslantassebelumnya = dikmaslantas[2];
                                            if (dikmaslantas[2] < dikmaslantas[3]) {
                                                persentasedikmaslantas = 'Naik'
                                            } else if (dikmaslantas[2] > dikmaslantas[3]) {
                                                persentasedikmaslantas = 'Turun'
                                            } else {
                                                persentasedikmaslantas = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 5) {
                                            bulansebelumnya = polda_month[3]
                                            dikmaslantassebelumnya = dikmaslantas[3];
                                            if (dikmaslantas[3] < dikmaslantas[4]) {
                                                persentasedikmaslantas = 'Naik'
                                            } else if (dikmaslantas[3] > dikmaslantas[4]) {
                                                persentasedikmaslantas = 'Turun'
                                            } else {
                                                persentasedikmaslantas = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 6) {
                                            bulansebelumnya = polda_month[4]
                                            dikmaslantassebelumnya = dikmaslantas[4];
                                            if (dikmaslantas[4] < dikmaslantas[5]) {
                                                persentasedikmaslantas = 'Naik'
                                            } else if (dikmaslantas[4] > dikmaslantas[5]) {
                                                persentasedikmaslantas = 'Turun'
                                            } else {
                                                persentasedikmaslantas = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 7) {
                                            bulansebelumnya = polda_month[5]
                                            dikmaslantassebelumnya = dikmaslantas[5];
                                            if (dikmaslantas[5] < dikmaslantas[6]) {
                                                persentasedikmaslantas = 'Naik'
                                            } else if (dikmaslantas[5] > dikmaslantas[6]) {
                                                persentasedikmaslantas = 'Turun'
                                            } else {
                                                persentasedikmaslantas = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 8) {
                                            bulansebelumnya = polda_month[6]
                                            dikmaslantassebelumnya = dikmaslantas[6];
                                            if (dikmaslantas[6] < dikmaslantas[7]) {
                                                persentasedikmaslantas = 'Naik'
                                            } else if (dikmaslantas[6] > dikmaslantas[7]) {
                                                persentasedikmaslantas = 'Turun'
                                            } else {
                                                persentasedikmaslantas = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 9) {
                                            bulansebelumnya = polda_month[7]
                                            dikmaslantassebelumnya = dikmaslantas[7];
                                            if (dikmaslantas[7] < dikmaslantas[8]) {
                                                persentasedikmaslantas = 'Naik'
                                            } else if (dikmaslantas[7] > dikmaslantas[8]) {
                                                persentasedikmaslantas = 'Turun'
                                            } else {
                                                persentasedikmaslantas = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 10) {
                                            bulansebelumnya = polda_month[8]
                                            dikmaslantassebelumnya = dikmaslantas[8];
                                            if (dikmaslantas[8] < dikmaslantas[9]) {
                                                persentasedikmaslantas = 'Naik'
                                            } else if (dikmaslantas[8] > dikmaslantas[9]) {
                                                persentasedikmaslantas = 'Turun'
                                            } else {
                                                persentasedikmaslantas = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 11) {
                                            bulansebelumnya = polda_month[9]
                                            dikmaslantassebelumnya = dikmaslantas[9];
                                            if (dikmaslantas[9] < dikmaslantas[10]) {
                                                persentasedikmaslantas = 'Naik'
                                            } else if (dikmaslantas[9] > dikmaslantas[10]) {
                                                persentasedikmaslantas = 'Turun'
                                            } else {
                                                persentasedikmaslantas = `Sama`
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 12) {
                                            bulansebelumnya = polda_month[10]
                                            dikmaslantassebelumnya = dikmaslantas[10];
                                            if (dikmaslantas[10] < dikmaslantas[11]) {
                                                persentasedikmaslantas = 'Naik'
                                            } else if (dikmaslantas[10] > dikmaslantas[11]) {
                                                persentasedikmaslantas = 'Turun'
                                            } else {
                                                persentasedikmaslantas = 'Sama'
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
                                                            <span class="fw-bold">Total dikmaslantas</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${dikmaslantassebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total dikmaslantas</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${dikmaslantas[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasedikmaslantas}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total dikmaslantas</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${dikmaslantas[dataPointIndex]}</span><br>
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


                            var ditkamseljemenopsrekmonth = {
                                series: [{
                                    name: 'JEMENOPSREK',
                                    type: 'line',
                                    data: jemenopsrek,
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
                                            jemenopsreksebelumnya = jemenopsrek[0];

                                            if (jemenopsrek[0] < jemenopsrek[1]) {
                                                persentasejemenopsrek = 'Naik'
                                            } else if (jemenopsrek[0] > jemenopsrek[1]) {
                                                persentasejemenopsrek = 'Turun'
                                            } else {
                                                persentasejemenopsrek = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            jemenopsreksebelumnya = jemenopsrek[1];
                                            if (jemenopsrek[1] < jemenopsrek[2]) {
                                                persentasejemenopsrek = 'Naik'
                                            } else if (jemenopsrek[1] > jemenopsrek[2]) {
                                                persentasejemenopsrek = 'Turun'
                                            } else {
                                                persentasejemenopsrek = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 4) {
                                            bulansebelumnya = polda_month[2]
                                            jemenopsreksebelumnya = jemenopsrek[2];
                                            if (jemenopsrek[2] < jemenopsrek[3]) {
                                                persentasejemenopsrek = 'Naik'
                                            } else if (jemenopsrek[2] > jemenopsrek[3]) {
                                                persentasejemenopsrek = 'Turun'
                                            } else {
                                                persentasejemenopsrek = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 5) {
                                            bulansebelumnya = polda_month[3]
                                            jemenopsreksebelumnya = jemenopsrek[3];
                                            if (jemenopsrek[3] < jemenopsrek[4]) {
                                                persentasejemenopsrek = 'Naik'
                                            } else if (jemenopsrek[3] > jemenopsrek[4]) {
                                                persentasejemenopsrek = 'Turun'
                                            } else {
                                                persentasejemenopsrek = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 6) {
                                            bulansebelumnya = polda_month[4]
                                            jemenopsreksebelumnya = jemenopsrek[4];
                                            if (jemenopsrek[4] < jemenopsrek[5]) {
                                                persentasejemenopsrek = 'Naik'
                                            } else if (jemenopsrek[4] > jemenopsrek[5]) {
                                                persentasejemenopsrek = 'Turun'
                                            } else {
                                                persentasejemenopsrek = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 7) {
                                            bulansebelumnya = polda_month[5]
                                            jemenopsreksebelumnya = jemenopsrek[5];
                                            if (jemenopsrek[5] < jemenopsrek[6]) {
                                                persentasejemenopsrek = 'Naik'
                                            } else if (jemenopsrek[5] > jemenopsrek[6]) {
                                                persentasejemenopsrek = 'Turun'
                                            } else {
                                                persentasejemenopsrek = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 8) {
                                            bulansebelumnya = polda_month[6]
                                            jemenopsreksebelumnya = jemenopsrek[6];
                                            if (jemenopsrek[6] < jemenopsrek[7]) {
                                                persentasejemenopsrek = 'Naik'
                                            } else if (jemenopsrek[6] > jemenopsrek[7]) {
                                                persentasejemenopsrek = 'Turun'
                                            } else {
                                                persentasejemenopsrek = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 9) {
                                            bulansebelumnya = polda_month[7]
                                            jemenopsreksebelumnya = jemenopsrek[7];
                                            if (jemenopsrek[7] < jemenopsrek[8]) {
                                                persentasejemenopsrek = 'Naik'
                                            } else if (jemenopsrek[7] > jemenopsrek[8]) {
                                                persentasejemenopsrek = 'Turun'
                                            } else {
                                                persentasejemenopsrek = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 10) {
                                            bulansebelumnya = polda_month[8]
                                            jemenopsreksebelumnya = jemenopsrek[8];
                                            if (jemenopsrek[8] < jemenopsrek[9]) {
                                                persentasejemenopsrek = 'Naik'
                                            } else if (jemenopsrek[8] > jemenopsrek[9]) {
                                                persentasejemenopsrek = 'Turun'
                                            } else {
                                                persentasejemenopsrek = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 11) {
                                            bulansebelumnya = polda_month[9]
                                            jemenopsreksebelumnya = jemenopsrek[9];
                                            if (jemenopsrek[9] < jemenopsrek[10]) {
                                                persentasejemenopsrek = 'Naik'
                                            } else if (jemenopsrek[9] > jemenopsrek[10]) {
                                                persentasejemenopsrek = 'Turun'
                                            } else {
                                                persentasejemenopsrek = `Sama`
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 12) {
                                            bulansebelumnya = polda_month[10]
                                            jemenopsreksebelumnya = jemenopsrek[10];
                                            if (jemenopsrek[10] < jemenopsrek[11]) {
                                                persentasejemenopsrek = 'Naik'
                                            } else if (jemenopsrek[10] > jemenopsrek[11]) {
                                                persentasejemenopsrek = 'Turun'
                                            } else {
                                                persentasejemenopsrek = 'Sama'
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
                                                            <span class="fw-bold">Total jemenopsrek</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${jemenopsreksebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total jemenopsrek</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${jemenopsrek[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasejemenopsrek}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total jemenopsrek</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${jemenopsrek[dataPointIndex]}</span><br>
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

                            var ditkamseljemenopsrekmonth = new ApexCharts(document.querySelector("#chart2"), ditkamseljemenopsrekmonth);
                            ditkamseljemenopsrekmonth.render();


                            var ditkamselcegahmonth = {
                                series: [{
                                    name: 'CEGAH & TINDAK',
                                    type: 'line',
                                    data: cegah,
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
                                            cegahsebelumnya = cegah[0];

                                            if (cegah[0] < cegah[1]) {
                                                cegah = 'Naik'
                                            } else if (cegah[0] > cegah[1]) {
                                                cegah = 'Turun'
                                            } else {
                                                cegah = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            cegahsebelumnya = cegah[1];
                                            if (cegah[1] < cegah[2]) {
                                                cegah = 'Naik'
                                            } else if (cegah[1] > cegah[2]) {
                                                cegah = 'Turun'
                                            } else {
                                                cegah = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 4) {
                                            bulansebelumnya = polda_month[2]
                                            cegahsebelumnya = cegah[2];
                                            if (cegah[2] < cegah[3]) {
                                                cegah = 'Naik'
                                            } else if (cegah[2] > cegah[3]) {
                                                cegah = 'Turun'
                                            } else {
                                                cegah = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 5) {
                                            bulansebelumnya = polda_month[3]
                                            cegahsebelumnya = cegah[3];
                                            if (cegah[3] < cegah[4]) {
                                                cegah = 'Naik'
                                            } else if (cegah[3] > cegah[4]) {
                                                cegah = 'Turun'
                                            } else {
                                                cegah = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 6) {
                                            bulansebelumnya = polda_month[4]
                                            cegahsebelumnya = cegah[4];
                                            if (cegah[4] < cegah[5]) {
                                                cegah = 'Naik'
                                            } else if (cegah[4] > cegah[5]) {
                                                cegah = 'Turun'
                                            } else {
                                                cegah = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 7) {
                                            bulansebelumnya = polda_month[5]
                                            cegahsebelumnya = cegah[5];
                                            if (cegah[5] < cegah[6]) {
                                                cegah = 'Naik'
                                            } else if (cegah[5] > cegah[6]) {
                                                cegah = 'Turun'
                                            } else {
                                                cegah = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 8) {
                                            bulansebelumnya = polda_month[6]
                                            cegahsebelumnya = cegah[6];
                                            if (cegah[6] < cegah[7]) {
                                                cegah = 'Naik'
                                            } else if (cegah[6] > cegah[7]) {
                                                cegah = 'Turun'
                                            } else {
                                                cegah = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 9) {
                                            bulansebelumnya = polda_month[7]
                                            cegahsebelumnya = cegah[7];
                                            if (cegah[7] < cegah[8]) {
                                                cegah = 'Naik'
                                            } else if (cegah[7] > cegah[8]) {
                                                cegah = 'Turun'
                                            } else {
                                                cegah = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 10) {
                                            bulansebelumnya = polda_month[8]
                                            cegahsebelumnya = cegah[8];
                                            if (cegah[8] < cegah[9]) {
                                                cegah = 'Naik'
                                            } else if (cegah[8] > cegah[9]) {
                                                cegah = 'Turun'
                                            } else {
                                                cegah = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 11) {
                                            bulansebelumnya = polda_month[9]
                                            cegahsebelumnya = cegah[9];
                                            if (cegah[9] < cegah[10]) {
                                                cegah = 'Naik'
                                            } else if (cegah[9] > cegah[10]) {
                                                cegah = 'Turun'
                                            } else {
                                                cegah = `Sama`
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 12) {
                                            bulansebelumnya = polda_month[10]
                                            cegahsebelumnya = cegah[10];
                                            if (cegah[10] < cegah[11]) {
                                                cegah = 'Naik'
                                            } else if (cegah[10] > cegah[11]) {
                                                cegah = 'Turun'
                                            } else {
                                                cegah = 'Sama'
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
                                                            <span class="fw-bold">Total cegah</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${cegahsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total cegah</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${cegah[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${cegah}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total cegah</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${cegah[dataPointIndex]}</span><br>
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

                            var ditkamselcegahmonth = new ApexCharts(document.querySelector("#chart3"), ditkamselcegahmonth);
                            ditkamselcegahmonth.render();


                            var ditkamselauditmonth = {
                                series: [{
                                    name: 'AUDIT & INSPEKSI',
                                    type: 'line',
                                    data: audit,
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
                                            auditsebelumnya = audit[0];

                                            if (audit[0] < audit[1]) {
                                                presentaseaudit = 'Naik'
                                            } else if (audit[0] > audit[1]) {
                                                presentaseaudit = 'Turun'
                                            } else {
                                                presentaseaudit = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            auditsebelumnya = audit[1];
                                            if (audit[1] < audit[2]) {
                                                presentaseaudit = 'Naik'
                                            } else if (audit[1] > audit[2]) {
                                                presentaseaudit = 'Turun'
                                            } else {
                                                presentaseaudit = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 4) {
                                            bulansebelumnya = polda_month[2]
                                            auditsebelumnya = audit[2];
                                            if (audit[2] < audit[3]) {
                                                presentaseaudit = 'Naik'
                                            } else if (audit[2] > audit[3]) {
                                                presentaseaudit = 'Turun'
                                            } else {
                                                presentaseaudit = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 5) {
                                            bulansebelumnya = polda_month[3]
                                            auditsebelumnya = audit[3];
                                            if (audit[3] < audit[4]) {
                                                presentaseaudit = 'Naik'
                                            } else if (audit[3] > audit[4]) {
                                                presentaseaudit = 'Turun'
                                            } else {
                                                presentaseaudit = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 6) {
                                            bulansebelumnya = polda_month[4]
                                            auditsebelumnya = audit[4];
                                            if (audit[4] < audit[5]) {
                                                presentaseaudit = 'Naik'
                                            } else if (audit[4] > audit[5]) {
                                                presentaseaudit = 'Turun'
                                            } else {
                                                presentaseaudit = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 7) {
                                            bulansebelumnya = polda_month[5]
                                            auditsebelumnya = audit[5];
                                            if (audit[5] < audit[6]) {
                                                presentaseaudit = 'Naik'
                                            } else if (audit[5] > audit[6]) {
                                                presentaseaudit = 'Turun'
                                            } else {
                                                presentaseaudit = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 8) {
                                            bulansebelumnya = polda_month[6]
                                            auditsebelumnya = audit[6];
                                            if (audit[6] < audit[7]) {
                                                presentaseaudit = 'Naik'
                                            } else if (audit[6] > audit[7]) {
                                                presentaseaudit = 'Turun'
                                            } else {
                                                presentaseaudit = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 9) {
                                            bulansebelumnya = polda_month[7]
                                            auditsebelumnya = audit[7];
                                            if (audit[7] < audit[8]) {
                                                presentaseaudit = 'Naik'
                                            } else if (audit[7] > audit[8]) {
                                                presentaseaudit = 'Turun'
                                            } else {
                                                presentaseaudit = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 10) {
                                            bulansebelumnya = polda_month[8]
                                            auditsebelumnya = audit[8];
                                            if (audit[8] < audit[9]) {
                                                presentaseaudit = 'Naik'
                                            } else if (audit[8] > audit[9]) {
                                                presentaseaudit = 'Turun'
                                            } else {
                                                presentaseaudit = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 11) {
                                            bulansebelumnya = polda_month[9]
                                            auditsebelumnya = audit[9];
                                            if (audit[9] < audit[10]) {
                                                presentaseaudit = 'Naik'
                                            } else if (audit[9] > audit[10]) {
                                                presentaseaudit = 'Turun'
                                            } else {
                                                audit = `Sama`
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 12) {
                                            bulansebelumnya = polda_month[10]
                                            auditsebelumnya = audit[10];
                                            if (audit[10] < audit[11]) {
                                                presentaseaudit = 'Naik'
                                            } else if (audit[10] > audit[11]) {
                                                presentaseaudit = 'Turun'
                                            } else {
                                                presentaseaudit = 'Sama'
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
                                                            <span class="fw-bold">Total audit</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${auditsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total audit</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${audit[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${presentaseaudit}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total audit</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${audit[dataPointIndex]}</span><br>
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

                            var ditkamselauditmonth = new ApexCharts(document.querySelector("#chart4"), ditkamselauditmonth);
                            ditkamselauditmonth.render();
                        }
                    })
                }

                // // Year
                function getDitkamselyear(three_yearAgo, lastDay) {
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>ditkamsel/getChartDitkamsel",
                        data: {
                            start_date: three_yearAgo,
                            end_date: lastDay,
                            filter: 'year'
                        },
                        dataType: "JSON",
                        success: function(result) {
                            let polda_month = result.data.polda_month
                            let dikmaslantas = result.data.dikmaslantas
                            let jemenopsrek = result.data.jemenopsrek
                            let cegah = result.data.cegah
                            let audit = result.data.audit
                            $('#titledikmaslantasyear').html(`<h4 class="card-title mb-0 text-uppercase">DATA DIKMAS TAHUNAN</h4>`);
                            $('#titlejemenopsrekyear').html(`<h4 class="card-title mb-0 text-uppercase">DATA JEMENOPSREK TAHUNAN</h4>`);
                            $('#titlecegahyear').html(`<h4 class="card-title mb-0 text-uppercase">DATA CEGAH & TINDAK TAHUNAN</h4>`);
                            $('#titleaudityear').html(`<h4 class="card-title mb-0 text-uppercase">DATA AUDIT & INSPEKSI TAHUNAN</h4>`);

                            var ditkamseldikmaslantasyear = {
                                series: [{
                                    name: 'DIKMASLANTAS',
                                    type: 'line',
                                    data: dikmaslantas,
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
                                            dikmaslantassebelumnya = dikmaslantas[0];

                                            if (dikmaslantas[0] < dikmaslantas[1]) {
                                                persentasedikmaslantas = 'Naik'
                                            } else if (dikmaslantas[0] > dikmaslantas[1]) {
                                                persentasedikmaslantas = 'Turun'
                                            } else {
                                                persentasedikmaslantas = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            dikmaslantassebelumnya = dikmaslantas[1];
                                            if (dikmaslantas[1] < dikmaslantas[2]) {
                                                persentasedikmaslantas = 'Naik'
                                            } else if (dikmaslantas[1] > dikmaslantas[2]) {
                                                persentasedikmaslantas = 'Turun'
                                            } else {
                                                persentasedikmaslantas = 'Sama'
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
                                                            <span class="fw-bold">Total dikmaslantas</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${dikmaslantassebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total dikmaslantas</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${dikmaslantas[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasedikmaslantas}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total dikmaslantas</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${dikmaslantas[dataPointIndex]}</span><br>
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


                            var ditkamseljemenopsrekyear = {
                                series: [{
                                    name: 'JEMENOPSREK',
                                    type: 'line',
                                    data: jemenopsrek,
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
                                            jemenopsreksebelumnya = jemenopsrek[0];

                                            if (jemenopsrek[0] < jemenopsrek[1]) {
                                                persentasejemenopsrek = 'Naik'
                                            } else if (jemenopsrek[0] > jemenopsrek[1]) {
                                                persentasejemenopsrek = 'Turun'
                                            } else {
                                                persentasejemenopsrek = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            jemenopsreksebelumnya = jemenopsrek[1];
                                            if (jemenopsrek[1] < jemenopsrek[2]) {
                                                persentasejemenopsrek = 'Naik'
                                            } else if (jemenopsrek[1] > jemenopsrek[2]) {
                                                persentasejemenopsrek = 'Turun'
                                            } else {
                                                persentasejemenopsrek = 'Sama'
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
                                                            <span class="fw-bold">Total jemenopsrek</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${jemenopsreksebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total jemenopsrek</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${jemenopsrek[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasejemenopsrek}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total jemenopsrek</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${jemenopsrek[dataPointIndex]}</span><br>
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

                            var ditkamseljemenopsrekyear = new ApexCharts(document.querySelector("#chartyear2"), ditkamseljemenopsrekyear);
                            ditkamseljemenopsrekyear.render();


                            var ditkamselcegahyear = {
                                series: [{
                                    name: 'CEGAH & TINDAK',
                                    type: 'line',
                                    data: cegah,
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
                                            cegahsebelumnya = cegah[0];

                                            if (cegah[0] < cegah[1]) {
                                                cegah = 'Naik'
                                            } else if (cegah[0] > cegah[1]) {
                                                cegah = 'Turun'
                                            } else {
                                                cegah = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            cegahsebelumnya = cegah[1];
                                            if (cegah[1] < cegah[2]) {
                                                cegah = 'Naik'
                                            } else if (cegah[1] > cegah[2]) {
                                                cegah = 'Turun'
                                            } else {
                                                cegah = 'Sama'
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
                                                            <span class="fw-bold">Total cegah</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${cegahsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total cegah</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${cegah[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${cegah}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total cegah</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${cegah[dataPointIndex]}</span><br>
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

                            var ditkamselcegahyear = new ApexCharts(document.querySelector("#chartyear3"), ditkamselcegahyear);
                            ditkamselcegahyear.render();


                            var ditkamselaudityear = {
                                series: [{
                                    name: 'AUDIT & INSPEKSI',
                                    type: 'line',
                                    data: audit,
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
                                            auditsebelumnya = audit[0];

                                            if (audit[0] < audit[1]) {
                                                presentaseaudit = 'Naik'
                                            } else if (audit[0] > audit[1]) {
                                                presentaseaudit = 'Turun'
                                            } else {
                                                presentaseaudit = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            auditsebelumnya = audit[1];
                                            if (audit[1] < audit[2]) {
                                                presentaseaudit = 'Naik'
                                            } else if (audit[1] > audit[2]) {
                                                presentaseaudit = 'Turun'
                                            } else {
                                                presentaseaudit = 'Sama'
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
                                                            <span class="fw-bold">Total audit</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${auditsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total audit</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${audit[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${audit}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total audit</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${audit[dataPointIndex]}</span><br>
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

                            var ditkamselaudityear = new ApexCharts(document.querySelector("#chartyear4"), ditkamselaudityear);
                            ditkamselaudityear.render();
                        }
                    })
                }
            </script>