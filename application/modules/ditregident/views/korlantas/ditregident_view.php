<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div id="nama">
                <div style="display: flex;">
                    <?php if ($this->session->userdata['role'] == 'KaBagOps' || $this->session->userdata['role'] == 'Kakorlantas') { ?>
                        <h3><a href="<?= base_url('dashboard') ?>" style="color:#007DD8 ;"><i class="fas fa-less-than"></i>|</a></h3>
                        &nbsp;&nbsp; <h3 style="text-transform: uppercase; color:#007DD8;"> Ditregident</h3>
                    <?php } else { ?>
                        <h3 style="text-transform: uppercase; color:#007DD8;"> Ditregident</h3>
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
                <a href="http://34.143.227.90:3001/v1/laporan_harian/export_laphar" class="text-center"><button class="btn btn-outline-primary" style="width: 200px; border-color:#007DD8;">Export Laporan</button></a>
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
                        <a class="dropdown-item" target="_blank" download href="<?= ApiUrl() ?>laporan_harian/anev_ditregident?type=day&date=<?= date('Y-m-d'); ?>">Harian</a>
                        <a class="dropdown-item" target="_blank" download href="<?= ApiUrl() ?>laporan_harian/anev_ditregident?type=weeks&date=<?= date('Y-m-d'); ?>">Mingguan</a>
                        <a class="dropdown-item" target="_blank" download href="<?= ApiUrl() ?>laporan_harian/anev_ditregident?type=month&date=<?= date('m'); ?>">Bulanan</a>
                        <a class="dropdown-item" target="_blank" download href="<?= ApiUrl() ?>laporan_harian/anev_ditregident?type=triwulan&date=<?= date('m'); ?>">Triwulan</a>
                        <a class="dropdown-item" target="_blank" download href="<?= ApiUrl() ?>laporan_harian/anev_ditregident?type=years&date=<?= date('Y'); ?>">Tahunan</a>
                    </div>
                </div>
            </div>

    </div>
<?php } ?>
</div>

<div class="row">

    <div class="col-md-12 mt-5">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-4 mb-3">
                <h4 style="text-transform: uppercase; color:#007DD8;">Statistik Data Ditregident - <span style="color: red;"> Real Time</span></h4>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <div class="col-md-2">
                <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                    <div class="card-body">
                        <div class="row justify-content-between align-items-center" style="height: 80px;">

                            <div class="col-md-10 float-start">
                                <span class="fs-5 float-start" style="color:#464646;">
                                    <span class="fw-bold"> RANMOR</span>
                                    </br>
                                    <span class="fs-6 fw-bold float-start" style="color:#464646;" id="ranmor"></span>
                                    <span class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detailranmor"></span>
                                    </p>
                            </div>
                            <div class=" col-md-2">
                                <img src="<?= base_url('assets/icon/dashboard/LAKA.png') ?>" alt="" style="width: 45px; margin-left:-25px;">
                                <!-- <iconify-icon icon="material-symbols:credit-card-outline" class="ms-n2" style="font-size: 40px; color: #464646;"></iconify-icon> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                    <div class="card-body">
                        <div class="row justify-content-between align-items-center" style="height: 80px;">

                            <div class="col-md-10 float-start">
                                <span class="fs-5 float-start" style="color:#464646;">
                                    <span class="fw-bold"> SIM</span>
                                    </br>
                                    <span class="fs-6 fw-bold float-start" style="color:#464646;" id="sim"></span>
                                    <span class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detailsim"></span>
                                    </p>
                            </div>
                            <div class=" col-md-2">
                                <img src="<?= base_url('assets/icon/dashboard/SIM.png') ?>" alt="" style="width: 45px; margin-left:-25px;">
                                <!-- <iconify-icon icon="material-symbols:credit-card-outline" class="ms-n2" style="font-size: 40px; color: #464646;"></iconify-icon> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                    <div class="card-body">
                        <div class="row justify-content-between align-items-center" style="height: 80px;">

                            <div class="col-md-10 float-start">
                                <span class="fs-5 float-start" style="color:#464646;">
                                    <span class="fw-bold"> BPKB</span>
                                    <br>
                                    <span class="fs-6 fw-bold float-start" style="color:#464646;" id="bpkb"></span>
                                    <span class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detailbpkb"></span>
                                </span>
                            </div>
                            <div class=" col-md-2">
                                <img src="<?= base_url('assets/icon/dashboard/BPKB.png') ?>" alt="" style="width: 45px; margin-left:-25px;">
                                <!-- <iconify-icon icon="material-symbols:book-rounded" class="ms-n2" style="font-size: 40px; color: #464646;"></iconify-icon> -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-2">
                <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                    <div class="card-body">
                        <div class="row justify-content-between align-items-center" style="height: 80px;">

                            <div class="col-md-10 float-start">
                                <span class="fs-5 float-start" style="color:#464646;">
                                    <span class="fw-bold"> STNK</span>
                                    <br>
                                    <span class="fs-6 fw-bold float-start" style="color:#464646;" id="stnk"></span>
                                    <span class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detailstnk"></span>
                                </span>
                            </div>
                            <div class=" col-md-2">
                                <img src="<?= base_url('assets/icon/dashboard/STNK.png') ?>" alt="" style="width: 45px; margin-left:-25px;">
                                <!-- <iconify-icon icon="material-symbols:credit-card-outline" class="ms-n2" style="font-size: 40px; color: #464646;"></iconify-icon> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-2">
                <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                    <div class="card-body">
                        <div class="row justify-content-between align-items-center" style="height: 80px;">

                            <div class="col-md-10 float-start">
                                <span class="fs-5 float-start" style="color:#464646;">
                                    <span class="fw-bold"> FASMAT SBST</span>
                                    <br>
                                    <span class="fs-6 fw-bold float-start" style="color:#464646;" id="sbst"></span>
                                    <span class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detailsbst"></span>
                                </span>
                            </div>
                            <div class=" col-md-2">
                                <img src="<?= base_url('assets/icon/dashboard/FASMAT_SBST.png') ?>" alt="" style="width: 45px; margin-left:-25px;">
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
                            <div id="titleranmorday"></div>
                        </div>
                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                            <div class="main-chart">
                                <div id="chartdayranmor">
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
                            <div id="titlesimday"></div>
                        </div>
                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                            <div class="main-chart">
                                <div id="chartdaysim">
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
                            <div id="titlebpkbday"></div>
                        </div>
                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                            <div class="main-chart">
                                <div id="chartdaybpkb">
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
                            <div id="titlestnkday"></div>
                        </div>
                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                            <div class="main-chart">
                                <div id="chartdaystnk">
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
                            <div id="titlesbstday"></div>
                        </div>
                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                            <div class="main-chart">
                                <div id="chartdaysbst">
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
                            <div id="titleranmormonth"></div>
                        </div>
                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                            <div class="main-chart">
                                <div id="chartmonthranmor">
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
                            <div id="titlesimmonth"></div>
                        </div>
                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                            <div class="main-chart">
                                <div id="chartmonthsim">
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
                            <div id="titlebpkbmonth"></div>
                        </div>
                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                            <div class="main-chart">
                                <div id="chartmonthbpkb">
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
                            <div id="titlestnkmonth"></div>
                        </div>
                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                            <div class="main-chart">
                                <div id="chartmonthstnk">
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
                            <div id="titlesbstmonth"></div>
                        </div>
                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                            <div class="main-chart">
                                <div id="chartmonthsbst">
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
                            <div id="titleranmoryear"></div>
                        </div>
                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                            <div class="main-chart">
                                <div id="chartyearranmor">
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
                            <div id="titlesimyear"></div>
                        </div>
                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                            <div class="main-chart">
                                <div id="chartyearsim">
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
                            <div id="titlebpkbyear"></div>
                        </div>
                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                            <div class="main-chart">
                                <div id="chartyearbpkb">
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
                            <div id="titlestnkyear"></div>
                        </div>
                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                            <div class="main-chart">
                                <div id="chartyearstnk">
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
                            <div id="titlesbstyear"></div>
                        </div>
                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                            <div class="main-chart">
                                <div id="chartyearsbst">
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
                    <img src="<?= base_url('assets/fe/strukturorganisasi/strukturditregident.png'); ?>" alt="" srcset="">
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
    $("#chartdaysim").html(`<div id="chartday1"></div>`);
    $("#chartdaybpkb").html(`<div id="chartday2"></div>`);
    $("#chartdaystnk").html(`<div id="chartday3"></div>`);
    $("#chartdaysbst").html(`<div id="chartday4"></div>`);
    $("#chartdayranmor").html(`<div id="chartday5"></div>`);

    // Month
    $("#chartmonthsim").html(`<div id="chart1"></div>`);
    $("#chartmonthbpkb").html(`<div id="chart2"></div>`);
    $("#chartmonthstnk").html(`<div id="chart3"></div>`);
    $("#chartmonthsbst").html(`<div id="chart4"></div>`);
    $("#chartmonthranmor").html(`<div id="chart5"></div>`);

    // Year
    $("#chartyearsim").html(`<div id="chartyear1"></div>`);
    $("#chartyearbpkb").html(`<div id="chartyear2"></div>`);
    $("#chartyearstnk").html(`<div id="chartyear3"></div>`);
    $("#chartyearsbst").html(`<div id="chartyear4"></div>`);
    $("#chartyearranmor").html(`<div id="chartyear5"></div>`);


    getStatistik();

    function getStatistik() {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>ditregident/getStatistik",
            dataType: "JSON",
            success: function(result) {
                $("#overlay").fadeOut(300);
                $('#ranmor').html(`<span class="fs-4" >${result.ranmor}</span >`);
                $('#sim').html(`<span class="fs-4" >${result.sim}</span >`);
                $('#bpkb').html(`<span class="fs-4" >${result.bpkb}</span >`);
                $('#stnk').html(`<span class="fs-4" >${result.stnk}</span >`);
                $('#sbst').html(`<span class="fs-4" >${result.sbst}</span>`);
            }
        })
    }

    getRegidentday(today, seven_daysAgo)
    getRegidentmonth(firstDay, lastDay)
    getRegidentyear(three_yearAgo, lastDay)
    // Day
    function getRegidentday(today, seven_daysAgo) {


        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>ditregident/getChartSim",
            data: {
                start_date: seven_daysAgo,
                end_date: today,
                filter: 'day'
            },
            dataType: "JSON",
            success: function(result) {
                let nf = new Intl.NumberFormat('en-US');
                let polda_month = result.data.polda_month
                let baru_a = result.data.baru_a
                let presentase_baru_a = result.data.presentase_baru_a
                let baru_c = result.data.baru_c
                let presentase_baru_c = result.data.presentase_baru_c
                let baru_c1 = result.data.baru_c1
                let presentase_baru_c1 = result.data.presentase_baru_c1
                let baru_c2 = result.data.baru_c2
                let presentase_baru_c2 = result.data.presentase_baru_c2
                let baru_d = result.data.baru_d
                let presentase_baru_d = result.data.presentase_baru_d
                let baru_d1 = result.data.baru_d1
                let presentase_baru_d1 = result.data.presentase_baru_d1

                let perpanjangan_a = result.data.perpanjangan_a
                let presentase_perpanjangan_a = result.data.presentase_perpanjangan_a
                let perpanjangan_au = result.data.perpanjangan_au
                let presentase_perpanjangan_au = result.data.presentase_perpanjangan_au
                let perpanjangan_b1 = result.data.perpanjangan_b1
                let presentase_perpanjangan_b1 = result.data.presentase_perpanjangan_b1
                let perpanjangan_b1u = result.data.perpanjangan_b1u
                let presentase_perpanjangan_b1u = result.data.presentase_perpanjangan_b1u
                let perpanjangan_b2 = result.data.perpanjangan_b2
                let presentase_perpanjangan_b2 = result.data.presentase_perpanjangan_b2
                let perpanjangan_b2u = result.data.perpanjangan_b2u
                let presentase_perpanjangan_b2u = result.data.presentase_perpanjangan_b2u
                let perpanjangan_c = result.data.perpanjangan_c
                let presentase_perpanjangan_c = result.data.presentase_perpanjangan_c
                let perpanjangan_c1 = result.data.perpanjangan_c1
                let presentase_perpanjangan_c1 = result.data.presentase_perpanjangan_c1
                let perpanjangan_c2 = result.data.perpanjangan_c2
                let presentase_perpanjangan_c2 = result.data.presentase_perpanjangan_c2
                let perpanjangan_d = result.data.perpanjangan_d
                let presentase_perpanjangan_d = result.data.presentase_perpanjangan_d
                let perpanjangan_d1 = result.data.perpanjangan_d1
                let presentase_perpanjangan_d1 = result.data.presentase_perpanjangan_d1

                let peningkatan_au = result.data.peningkatan_au
                let presentase_peningkatan_au = result.data.presentase_peningkatan_au
                let peningkatan_b1 = result.data.peningkatan_b1
                let presentase_peningkatan_b1 = result.data.presentase_peningkatan_b1
                let peningkatan_b1u = result.data.peningkatan_b1u
                let presentase_peningkatan_b1u = result.data.presentase_peningkatan_b1u
                let peningkatan_b2 = result.data.peningkatan_b2
                let presentase_peningkatan_b2 = result.data.presentase_peningkatan_b2
                let peningkatan_b2u = result.data.peningkatan_b2u
                let presentase_peningkatan_b2u = result.data.presentase_peningkatan_b2u
                // let bpkb = result.data.bpkb
                // let stnk = result.data.stnk
                // let sbst = result.data.sbst
                $('#titlesimday').html(`<h4 class="card-title mb-0 text-uppercase">PERBANDINGAN DATA SIM HARIAN (7 HARIAN)</h4>`);

                var ditregidentsimday = {
                    series: [{
                        name: "Baru A",
                        data: baru_a
                    }, {
                        name: "Baru C",
                        data: baru_c
                    }, {
                        name: "Baru CI",
                        data: baru_c1
                    }, {
                        name: "Baru CII",
                        data: baru_c2
                    }, {
                        name: "Baru D",
                        data: baru_d
                    }, {
                        name: "Baru DI",
                        data: baru_d1
                    }, {
                        name: "Perpanjangan A",
                        data: perpanjangan_a
                    }, {

                        name: "Perpanjangan AU",
                        data: perpanjangan_au
                    }, {
                        name: "Perpanjangan C",
                        data: perpanjangan_c
                    }, {
                        name: "Perpanjangan CI",
                        data: perpanjangan_c1
                    }, {
                        name: "Perpanjangan CII",
                        data: perpanjangan_c2
                    }, {
                        name: "Perpanjangan D",
                        data: perpanjangan_d
                    }, {
                        name: "Perpanjangan DI",
                        data: perpanjangan_d1
                    }, {
                        name: "Perpanjangan BI",
                        data: perpanjangan_b1
                    }, {
                        name: "Perpanjangan BIU",
                        data: perpanjangan_b1u
                    }, {
                        name: "Perpanjangan BII",
                        data: perpanjangan_b2
                    }, {
                        name: "Perpanjangan BIIU",
                        data: perpanjangan_b2u
                    }, {
                        name: "Peningkatan AU",
                        data: peningkatan_au
                    }, {
                        name: "Peningkatan BI",
                        data: peningkatan_b1
                    }, {
                        name: "Peningkatan BIU",
                        data: peningkatan_b1u
                    }, {
                        name: "Peningkatan BII",
                        data: peningkatan_b2
                    }, {
                        name: "Peningkatan BIIU",
                        data: peningkatan_b2u
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
                                baru_a_sebelumnya = baru_a[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                baru_a_sebelumnya = baru_a[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                baru_a_sebelumnya = baru_a[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                baru_a_sebelumnya = baru_a[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                baru_a_sebelumnya = baru_a[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                baru_a_sebelumnya = baru_a[5];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                baru_c_sebelumnya = baru_c[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                baru_c_sebelumnya = baru_c[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                baru_c_sebelumnya = baru_c[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                baru_c_sebelumnya = baru_c[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                baru_c_sebelumnya = baru_c[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                baru_c_sebelumnya = baru_c[5];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                baru_c1_sebelumnya = baru_c1[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                baru_c1_sebelumnya = baru_c1[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                baru_c1_sebelumnya = baru_c1[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                baru_c1_sebelumnya = baru_c1[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                baru_c1_sebelumnya = baru_c1[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                baru_c1_sebelumnya = baru_c1[5];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                baru_c2_sebelumnya = baru_c2[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                baru_c2_sebelumnya = baru_c2[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                baru_c2_sebelumnya = baru_c2[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                baru_c2_sebelumnya = baru_c2[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                baru_c2_sebelumnya = baru_c2[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                baru_c2_sebelumnya = baru_c2[5];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                baru_d_sebelumnya = baru_d[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                baru_d_sebelumnya = baru_d[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                baru_d_sebelumnya = baru_d[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                baru_d_sebelumnya = baru_d[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                baru_d_sebelumnya = baru_d[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                baru_d_sebelumnya = baru_d[5];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                baru_d1_sebelumnya = baru_d1[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                baru_d1_sebelumnya = baru_d1[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                baru_d1_sebelumnya = baru_d1[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                baru_d1_sebelumnya = baru_d1[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                baru_d1_sebelumnya = baru_d1[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                baru_d1_sebelumnya = baru_d1[5];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                perpanjangan_a_sebelumnya = perpanjangan_a[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                perpanjangan_a_sebelumnya = perpanjangan_a[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                perpanjangan_a_sebelumnya = perpanjangan_a[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                perpanjangan_a_sebelumnya = perpanjangan_a[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                perpanjangan_a_sebelumnya = perpanjangan_a[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                perpanjangan_a_sebelumnya = perpanjangan_a[5];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                perpanjangan_au_sebelumnya = perpanjangan_au[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                perpanjangan_au_sebelumnya = perpanjangan_au[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                perpanjangan_au_sebelumnya = perpanjangan_au[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                perpanjangan_au_sebelumnya = perpanjangan_au[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                perpanjangan_au_sebelumnya = perpanjangan_au[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                perpanjangan_au_sebelumnya = perpanjangan_au[5];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                perpanjangan_b1_sebelumnya = perpanjangan_b1[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                perpanjangan_b1_sebelumnya = perpanjangan_b1[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                perpanjangan_b1_sebelumnya = perpanjangan_b1[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                perpanjangan_b1_sebelumnya = perpanjangan_b1[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                perpanjangan_b1_sebelumnya = perpanjangan_b1[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                perpanjangan_b1_sebelumnya = perpanjangan_b1[5];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                perpanjangan_b1u_sebelumnya = perpanjangan_b1u[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                perpanjangan_b1u_sebelumnya = perpanjangan_b1u[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                perpanjangan_b1u_sebelumnya = perpanjangan_b1u[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                perpanjangan_b1u_sebelumnya = perpanjangan_b1u[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                perpanjangan_b1u_sebelumnya = perpanjangan_b1u[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                perpanjangan_b1u_sebelumnya = perpanjangan_b1u[5];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                perpanjangan_b2_sebelumnya = perpanjangan_b2[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                perpanjangan_b2_sebelumnya = perpanjangan_b2[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                perpanjangan_b2_sebelumnya = perpanjangan_b2[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                perpanjangan_b2_sebelumnya = perpanjangan_b2[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                perpanjangan_b2_sebelumnya = perpanjangan_b2[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                perpanjangan_b2_sebelumnya = perpanjangan_b2[5];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                perpanjangan_b2u_sebelumnya = perpanjangan_b2u[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                perpanjangan_b2u_sebelumnya = perpanjangan_b2u[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                perpanjangan_b2u_sebelumnya = perpanjangan_b2u[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                perpanjangan_b2u_sebelumnya = perpanjangan_b2u[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                perpanjangan_b2u_sebelumnya = perpanjangan_b2u[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                perpanjangan_b2u_sebelumnya = perpanjangan_b2u[5];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                perpanjangan_c_sebelumnya = perpanjangan_c[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                perpanjangan_c_sebelumnya = perpanjangan_c[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                perpanjangan_c_sebelumnya = perpanjangan_c[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                perpanjangan_c_sebelumnya = perpanjangan_c[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                perpanjangan_c_sebelumnya = perpanjangan_c[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                perpanjangan_c_sebelumnya = perpanjangan_c[5];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                perpanjangan_c1_sebelumnya = perpanjangan_c1[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                perpanjangan_c1_sebelumnya = perpanjangan_c1[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                perpanjangan_c1_sebelumnya = perpanjangan_c1[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                perpanjangan_c1_sebelumnya = perpanjangan_c1[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                perpanjangan_c1_sebelumnya = perpanjangan_c1[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                perpanjangan_c1_sebelumnya = perpanjangan_c1[5];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                perpanjangan_c2_sebelumnya = perpanjangan_c2[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                perpanjangan_c2_sebelumnya = perpanjangan_c2[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                perpanjangan_c2_sebelumnya = perpanjangan_c2[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                perpanjangan_c2_sebelumnya = perpanjangan_c2[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                perpanjangan_c2_sebelumnya = perpanjangan_c2[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                perpanjangan_c2_sebelumnya = perpanjangan_c2[5];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                perpanjangan_d_sebelumnya = perpanjangan_d[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                perpanjangan_d_sebelumnya = perpanjangan_d[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                perpanjangan_d_sebelumnya = perpanjangan_d[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                perpanjangan_d_sebelumnya = perpanjangan_d[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                perpanjangan_d_sebelumnya = perpanjangan_d[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                perpanjangan_d_sebelumnya = perpanjangan_d[5];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                perpanjangan_d1_sebelumnya = perpanjangan_d1[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                perpanjangan_d1_sebelumnya = perpanjangan_d1[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                perpanjangan_d1_sebelumnya = perpanjangan_d1[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                perpanjangan_d1_sebelumnya = perpanjangan_d1[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                perpanjangan_d1_sebelumnya = perpanjangan_d1[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                perpanjangan_d1_sebelumnya = perpanjangan_d1[5];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                peningkatan_au_sebelumnya = peningkatan_au[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                peningkatan_au_sebelumnya = peningkatan_au[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                peningkatan_au_sebelumnya = peningkatan_au[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                peningkatan_au_sebelumnya = peningkatan_au[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                peningkatan_au_sebelumnya = peningkatan_au[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                peningkatan_au_sebelumnya = peningkatan_au[5];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                peningkatan_b1_sebelumnya = peningkatan_b1[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                peningkatan_b1_sebelumnya = peningkatan_b1[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                peningkatan_b1_sebelumnya = peningkatan_b1[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                peningkatan_b1_sebelumnya = peningkatan_b1[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                peningkatan_b1_sebelumnya = peningkatan_b1[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                peningkatan_b1_sebelumnya = peningkatan_b1[5];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                peningkatan_b1u_sebelumnya = peningkatan_b1u[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                peningkatan_b1u_sebelumnya = peningkatan_b1u[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                peningkatan_b1u_sebelumnya = peningkatan_b1u[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                peningkatan_b1u_sebelumnya = peningkatan_b1u[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                peningkatan_b1u_sebelumnya = peningkatan_b1u[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                peningkatan_b1u_sebelumnya = peningkatan_b1u[5];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                peningkatan_b2_sebelumnya = peningkatan_b2[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                peningkatan_b2_sebelumnya = peningkatan_b2[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                peningkatan_b2_sebelumnya = peningkatan_b2[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                peningkatan_b2_sebelumnya = peningkatan_b2[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                peningkatan_b2_sebelumnya = peningkatan_b2[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                peningkatan_b2_sebelumnya = peningkatan_b2[5];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                peningkatan_b2u_sebelumnya = peningkatan_b2u[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                peningkatan_b2u_sebelumnya = peningkatan_b2u[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                peningkatan_b2u_sebelumnya = peningkatan_b2u[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                peningkatan_b2u_sebelumnya = peningkatan_b2u[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                peningkatan_b2u_sebelumnya = peningkatan_b2u[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                peningkatan_b2u_sebelumnya = peningkatan_b2u[5];
                            }
                            return (
                                `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 70rem; height:20rem;">`:'<div style="width: 30rem; height:20rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                    <div class="my-2  text-center">   
                                                        <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                    </div>
                                                        <div class="row">
                                                            <div class="col-md-4 ms-1">
                                                                <span class="fw-bold ms-2">Baru</span><br>
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <span class="fw-bold">A</span><br>
                                                                        <span class="fw-bold">C</span><br>
                                                                        <span class="fw-bold">CI</span><br>
                                                                        <span class="fw-bold">CII</span><br>
                                                                        <span class="fw-bold">D</span><br>
                                                                        <span class="fw-bold">DI</span><br>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <span class="fw-bold">${nf.format(baru_a_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(baru_c_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(baru_c1_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(baru_c2_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(baru_d_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(baru_d1_sebelumnya)}</span><br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 ms-n4 me-3">
                                                                <span class="fw-bold">Perpanjangan</span><br>
                                                                <div class="row ms-2">
                                                                    <div class="col-md-2">
                                                                        <span class="fw-bold">A</span><br>
                                                                        <span class="fw-bold">AU</span><br>
                                                                        <span class="fw-bold">C</span><br>
                                                                        <span class="fw-bold">CI</span><br>
                                                                        <span class="fw-bold">CII</span><br>
                                                                        <span class="fw-bold">D</span><br>
                                                                        <span class="fw-bold">DI</span><br>
                                                                        <span class="fw-bold">BI</span><br>
                                                                        <span class="fw-bold">BIU</span><br>
                                                                        <span class="fw-bold">BI</span><br>
                                                                        <span class="fw-bold">BIIU</span><br>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <span class="fw-bold">${nf.format(perpanjangan_a_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_au_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_c_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_c1_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_c2_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_d_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_d1_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_b1_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_b1u_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_b2_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_b2u_sebelumnya)}</span><br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <span class="fw-bold">Peningkatan</span><br>
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <span class="fw-bold">AU</span><br>
                                                                        <span class="fw-bold">BI</span><br>
                                                                        <span class="fw-bold">BIU</span><br>
                                                                        <span class="fw-bold">BII</span><br>
                                                                        <span class="fw-bold">BIIU</span><br>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <span class="fw-bold">${nf.format(peningkatan_au_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(peningkatan_b1_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(peningkatan_b1u_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(peningkatan_b2_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(peningkatan_b2u_sebelumnya)}</span><br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div> 



                                                <div class="col-md-4">
                                                <div style ="border-left: 2px solid silver; height: 500px; position: absolute; left: -5%; top: 0;"></div>
                                                    <div class="my-2  text-center"">   
                                                        <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                    </div>
                                                        <div class="row">
                                                            <div class="col-md-4 ms-1">
                                                                <span class="fw-bold">Baru</span><br>
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <span class="fw-bold">A</span><br>
                                                                        <span class="fw-bold">C</span><br>
                                                                        <span class="fw-bold">CI</span><br>
                                                                        <span class="fw-bold">CII</span><br>
                                                                        <span class="fw-bold">D</span><br>
                                                                        <span class="fw-bold">DI</span><br>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <span class="fw-bold">${nf.format(baru_a[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(baru_c[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(baru_c1[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(baru_c2[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(baru_d[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(baru_d1[dataPointIndex])}</span><br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 ms-n3 me-2">
                                                                <span class="fw-bold">Perpanjangan</span><br>
                                                                <div class="row ms-2">
                                                                    <div class="col-md-2">
                                                                        <span class="fw-bold">A</span><br>
                                                                        <span class="fw-bold">AU</span><br>
                                                                        <span class="fw-bold">C</span><br>
                                                                        <span class="fw-bold">CI</span><br>
                                                                        <span class="fw-bold">CII</span><br>
                                                                        <span class="fw-bold">D</span><br>
                                                                        <span class="fw-bold">DI</span><br>
                                                                        <span class="fw-bold">BI</span><br>
                                                                        <span class="fw-bold">BIU</span><br>
                                                                        <span class="fw-bold">BI</span><br>
                                                                        <span class="fw-bold">BIIU</span><br>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <span class="fw-bold">${nf.format(perpanjangan_a[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_au[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_c[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_c1[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_c2[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_d[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_d1[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_b1[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_b1u[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_b2[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_b2u[dataPointIndex])}</span><br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <span class="fw-bold">Peningkatan</span><br>
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <span class="fw-bold">AU</span><br>
                                                                        <span class="fw-bold">BI</span><br>
                                                                        <span class="fw-bold">BIU</span><br>
                                                                        <span class="fw-bold">BII</span><br>
                                                                        <span class="fw-bold">BIIU</span><br>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <span class="fw-bold">${nf.format(peningkatan_au[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(peningkatan_b1[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(peningkatan_b1u[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(peningkatan_b2[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(peningkatan_b2u[dataPointIndex])}</span><br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div> 

                                                <div class="col-md-4">
                                                <div style ="border-left: 2px solid silver; height: 500px; position: absolute; left: -5%; top: 0;"></div>
                                                    <div class="my-2  text-center"">   
                                                        <span class="fs-6 fw-bold">Presentase</span>
                                                    </div>
                                                        <div class="row">
                                                            <div class="col-md-4 ms-1">
                                                                <span class="fw-bold">Baru</span><br>
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <span class="fw-bold">A</span><br>
                                                                        <span class="fw-bold">C</span><br>
                                                                        <span class="fw-bold">C1</span><br>
                                                                        <span class="fw-bold">C2</span><br>
                                                                        <span class="fw-bold">D</span><br>
                                                                        <span class="fw-bold">D1</span><br>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <span class="fw-bold">${presentase_baru_a[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_baru_c[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_baru_c1[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_baru_c2[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_baru_d[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_baru_d1[dataPointIndex]}%</span><br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 ms-n4 me-3">
                                                                <span class="fw-bold">Perpanjangan</span><br>
                                                                <div class="row ms-2">
                                                                    <div class="col-md-2">
                                                                        <span class="fw-bold">A</span><br>
                                                                        <span class="fw-bold">AU</span><br>
                                                                        <span class="fw-bold">C</span><br>
                                                                        <span class="fw-bold">CI</span><br>
                                                                        <span class="fw-bold">CII</span><br>
                                                                        <span class="fw-bold">D</span><br>
                                                                        <span class="fw-bold">DI</span><br>
                                                                        <span class="fw-bold">BI</span><br>
                                                                        <span class="fw-bold">BIU</span><br>
                                                                        <span class="fw-bold">BI</span><br>
                                                                        <span class="fw-bold">BIIU</span><br>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <span class="fw-bold">${presentase_perpanjangan_a[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_perpanjangan_au[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_perpanjangan_c[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_perpanjangan_c1[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_perpanjangan_c2[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_perpanjangan_d[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_perpanjangan_d1[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_perpanjangan_b1[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_perpanjangan_b1u[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_perpanjangan_b2[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_perpanjangan_b2u[dataPointIndex]}%</span><br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <span class="fw-bold">Peningkatan</span><br>
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <span class="fw-bold">AU</span><br>
                                                                        <span class="fw-bold">BI</span><br>
                                                                        <span class="fw-bold">BIU</span><br>
                                                                        <span class="fw-bold">BII</span><br>
                                                                        <span class="fw-bold">BIIU</span><br>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <span class="fw-bold">${presentase_peningkatan_au[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_peningkatan_b1[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_peningkatan_b1u[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_peningkatan_b2[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_peningkatan_b2u[dataPointIndex]}%</span><br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div> 
                                                    
                                               
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                            <div class="col-md-4 ms-1">
                                                                <span class="fw-bold">Baru</span><br>
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <span class="fw-bold">A</span><br>
                                                                        <span class="fw-bold">C</span><br>
                                                                        <span class="fw-bold">CI</span><br>
                                                                        <span class="fw-bold">CII</span><br>
                                                                        <span class="fw-bold">D</span><br>
                                                                        <span class="fw-bold">DI</span><br>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <span class="fw-bold">${nf.format(baru_a[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(baru_c[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(baru_c1[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(baru_c2[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(baru_d[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(baru_d1[dataPointIndex])}</span><br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 ms-n3 me-2">
                                                                <span class="fw-bold">Perpanjangan</span><br>
                                                                <div class="row ms-2">
                                                                    <div class="col-md-2">
                                                                        <span class="fw-bold">A</span><br>
                                                                        <span class="fw-bold">AU</span><br>
                                                                        <span class="fw-bold">C</span><br>
                                                                        <span class="fw-bold">CI</span><br>
                                                                        <span class="fw-bold">CII</span><br>
                                                                        <span class="fw-bold">D</span><br>
                                                                        <span class="fw-bold">DI</span><br>
                                                                        <span class="fw-bold">BI</span><br>
                                                                        <span class="fw-bold">BIU</span><br>
                                                                        <span class="fw-bold">BI</span><br>
                                                                        <span class="fw-bold">BIIU</span><br>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <span class="fw-bold">${nf.format(perpanjangan_a[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_au[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_c[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_c1[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_c2[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_d[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_d1[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_b1[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_b1u[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_b2[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_b2u[dataPointIndex])}</span><br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <span class="fw-bold">Peningkatan</span><br>
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <span class="fw-bold">AU</span><br>
                                                                        <span class="fw-bold">BI</span><br>
                                                                        <span class="fw-bold">BIU</span><br>
                                                                        <span class="fw-bold">BII</span><br>
                                                                        <span class="fw-bold">BIIU</span><br>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <span class="fw-bold">${nf.format(peningkatan_au[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(peningkatan_b1[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(peningkatan_b1u[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(peningkatan_b2[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(peningkatan_b2u[dataPointIndex])}</span><br>
                                                                    </div>
                                                                </div>
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

                var ditregidentsimday = new ApexCharts(document.querySelector("#chartday1"), ditregidentsimday);
                ditregidentsimday.render();



            }
        })

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>ditregident/getChartBpkb",
            data: {
                start_date: seven_daysAgo,
                end_date: today,
                filter: 'day'
            },
            dataType: "JSON",
            success: function(result) {
                let nf = new Intl.NumberFormat('en-US');
                let polda_month = result.data.polda_month
                let bbn_1 = result.data.bbn_1
                let presentase_bbn_1 = result.data.presentase_bbn_1
                let bbn_2 = result.data.bbn_2
                let presentase_bbn_2 = result.data.presentase_bbn_2
                let mutasi_masuk = result.data.mutasi_masuk
                let presentase_mutasi_masuk = result.data.presentase_mutasi_masuk
                let perubahan_pergantian = result.data.perubahan_pergantian
                let presentase_perubahan_pergantian = result.data.presentase_perubahan_pergantian
                let mutasi_keluar = result.data.mutasi_keluar
                let presentase_mutasi_keluar = result.data.presentase_mutasi_keluar
                $('#titlebpkbday').html(`<h4 class="card-title mb-0 text-uppercase">PERBANDINGAN DATA BPKB HARIAN (7 HARIAN)</h4>`);

                var ditregidentbpkbday = {
                    series: [{
                        name: "BBN 1",
                        data: bbn_1
                    }, {
                        name: "BBN 2",
                        data: bbn_2
                    }, {
                        name: "Mutasi Masuk",
                        data: mutasi_masuk
                    }, {
                        name: "Perubahan Pergantian",
                        data: perubahan_pergantian
                    }, {
                        name: "Mutasi Keluar",
                        data: mutasi_keluar
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
                                bbn_1_sebelumnya = bbn_1[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                bbn_1_sebelumnya = bbn_1[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                bbn_1_sebelumnya = bbn_1[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                bbn_1_sebelumnya = bbn_1[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                bbn_1_sebelumnya = bbn_1[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                bbn_1_sebelumnya = bbn_1[5];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                bbn_2_sebelumnya = bbn_2[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                bbn_2_sebelumnya = bbn_2[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                bbn_2_sebelumnya = bbn_2[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                bbn_2_sebelumnya = bbn_2[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                bbn_2_sebelumnya = bbn_2[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                bbn_2_sebelumnya = bbn_2[5];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                mutasi_masuk_sebelumnya = mutasi_masuk[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                mutasi_masuk_sebelumnya = mutasi_masuk[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                mutasi_masuk_sebelumnya = mutasi_masuk[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                mutasi_masuk_sebelumnya = mutasi_masuk[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                mutasi_masuk_sebelumnya = mutasi_masuk[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                mutasi_masuk_sebelumnya = mutasi_masuk[5];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                perubahan_pergantian_sebelumnya = perubahan_pergantian[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                perubahan_pergantian_sebelumnya = perubahan_pergantian[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                perubahan_pergantian_sebelumnya = perubahan_pergantian[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                perubahan_pergantian_sebelumnya = perubahan_pergantian[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                perubahan_pergantian_sebelumnya = perubahan_pergantian[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                perubahan_pergantian_sebelumnya = perubahan_pergantian[5];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                mutasi_keluar_sebelumnya = mutasi_keluar[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                mutasi_keluar_sebelumnya = mutasi_keluar[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                mutasi_keluar_sebelumnya = mutasi_keluar[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                mutasi_keluar_sebelumnya = mutasi_keluar[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                mutasi_keluar_sebelumnya = mutasi_keluar[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                mutasi_keluar_sebelumnya = mutasi_keluar[5];
                            }

                            return (
                                `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 50rem; height:10rem;">`:'<div style="width: 20rem; height:10rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                    <div class="my-2  text-center">   
                                                        <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                    </div>
                                                        <div class="row">
                                                            <div class="col-md-7 ms-1">
                                                                <span class="fw-bold">BBN I</span><br>
                                                                <span class="fw-bold">BBN II</span><br>
                                                                <span class="fw-bold">Mutasi Masuk</span><br>
                                                                <span class="fw-bold">Perubahan Pergantian</span><br>
                                                                <span class="fw-bold">Mutasi Keluar</span><br>
                                                            </div>
                                                            <div class="col-md-1">
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                            </div>
                                                            <div class="col-md-4 ms-n1">
                                                                <span class="fw-bold">${nf.format(bbn_1_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(bbn_2_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(mutasi_masuk_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(perubahan_pergantian_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(mutasi_keluar_sebelumnya)}</span><br>
                                                            </div>
                                                        </div>
                                                </div> 
                                                <div class="col-md-4">
                                                    <div style ="border-left: 2px solid silver; height: 500px; position: absolute; left: -5%; top: 0;"></div>
                                                    <div class="my-2  text-center"">   
                                                        <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                    </div>
                                                        <div class="row">
                                                            <div class="col-md-7">
                                                                <span class="fw-bold">BBN I</span><br>
                                                                <span class="fw-bold">BBN II</span><br>
                                                                <span class="fw-bold">Mutasi Keluar</span><br>
                                                                <span class="fw-bold">Perubahan Pergantian</span><br>
                                                                <span class="fw-bold">Mutasi Masuk</span><br>
                                                            </div>
                                                            <div class="col-md-1">
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <span class="fw-bold">${nf.format(bbn_1[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(bbn_2[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(mutasi_masuk[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(perubahan_pergantian[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(mutasi_keluar[dataPointIndex])}</span><br>
                                                            </div>
                                                        </div>
                                                </div> 

                                                <div class="col-md-4">
                                                    <div style ="border-left: 2px solid silver; height: 500px; position: absolute; left: -5%; top: 0;"></div>
                                                        <div class="my-2  text-center"">   
                                                            <span class="fs-6 fw-bold">Presentase</span>
                                                        </div>
                                                        <div class="text-center">
                                                            <span class="fw-bold">${presentase_bbn_1[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_bbn_2[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_mutasi_masuk[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_perubahan_pergantian[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_mutasi_keluar[dataPointIndex]}%</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                ` : `
                                                <div class="col-md-12">
                                                    <div class="my-2 text-center">    
                                                        <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-7 ms-1">
                                                            <span class="fw-bold">BBN I</span><br>
                                                            <span class="fw-bold">BBN II</span><br>
                                                            <span class="fw-bold">Mutasi Keluar</span><br>
                                                            <span class="fw-bold">Perubahan Pergantian</span><br>
                                                            <span class="fw-bold">Mutasi Masuk</span><br>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <span class="fw-bold">:</span><br>
                                                            <span class="fw-bold">:</span><br>
                                                            <span class="fw-bold">:</span><br>
                                                            <span class="fw-bold">:</span><br>
                                                            <span class="fw-bold">:</span><br>
                                                        </div>
                                                        <div class="col-md-4 ms-n1" >
                                                            <span class="fw-bold">${nf.format(bbn_1[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(bbn_2[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(mutasi_masuk[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(perubahan_pergantian[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(mutasi_keluar[dataPointIndex])}</span><br>
                                                        </div>
                                                    </div>
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

                var ditregidentbpkbday = new ApexCharts(document.querySelector("#chartday2"), ditregidentbpkbday);
                ditregidentbpkbday.render();
            }
        })

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>ditregident/getChartStnk",
            data: {
                start_date: seven_daysAgo,
                end_date: today,
                filter: 'day'
            },
            dataType: "JSON",
            success: function(result) {
                let nf = new Intl.NumberFormat('en-US');
                let polda_month = result.data.polda_month
                let bbn_1_r2 = result.data.bbn_1_r2
                let presentase_bbn_1_r2 = result.data.presentase_bbn_1_r2
                let bbn_1_r4 = result.data.bbn_1_r4
                let presentase_bbn_1_r4 = result.data.presentase_bbn_1_r4
                let perubahan_r2 = result.data.perubahan_r2
                let presentase_perubahan_r2 = result.data.presentase_perubahan_r2
                let perubahan_r4 = result.data.perubahan_r4
                let presentase_perubahan_r4 = result.data.presentase_perubahan_r4
                let perpanjangan_r2 = result.data.perpanjangan_r2
                let presentase_perpanjangan_r2 = result.data.presentase_perpanjangan_r2
                let perpanjangan_r4 = result.data.perpanjangan_r4
                let presentase_perpanjangan_r4 = result.data.presentase_perpanjangan_r4
                let mutasi_masuk_r2 = result.data.mutasi_masuk_r2
                let presentase_mutasi_masuk_r2 = result.data.presentase_mutasi_masuk_r2
                let mutasi_masuk_r4 = result.data.mutasi_masuk_r4
                let presentase_mutasi_masuk_r4 = result.data.presentase_mutasi_masuk_r4
                let mutasi_keluar_r2 = result.data.mutasi_keluar_r2
                let presentase_mutasi_keluar_r2 = result.data.presentase_mutasi_keluar_r2
                let mutasi_keluar_r4 = result.data.mutasi_keluar_r4
                let presentase_mutasi_keluar_r4 = result.data.presentase_mutasi_keluar_r4
                let pengesahan_r2 = result.data.pengesahan_r2
                let presentase_pengesahan_r2 = result.data.presentase_pengesahan_r2
                let pengesahan_r4 = result.data.pengesahan_r4
                let presentase_pengesahan_r4 = result.data.presentase_pengesahan_r4
                let samolnas_r2 = result.data.samolnas_r2
                let presentase_samolnas_r2 = result.data.presentase_samolnas_r2
                let samolnas_r4 = result.data.samolnas_r4
                let presentase_samolnas_r4 = result.data.presentase_samolnas_r4
                $('#titlestnkday').html(`<h4 class="card-title mb-0 text-uppercase">PERBANDINGAN DATA STNK HARIAN (7 HARIAN)</h4>`);

                var ditregidentstnkday = {
                    series: [{
                        name: "BBN 1 R2",
                        data: bbn_1_r2
                    }, {
                        name: "BBN 1 R4",
                        data: bbn_1_r4
                    }, {
                        name: "Perubahan R2",
                        data: perubahan_r2
                    }, {
                        name: "Perubahan R4",
                        data: perubahan_r4
                    }, {
                        name: "Perpanjangan R2",
                        data: perpanjangan_r2
                    }, {
                        name: "Perpanjangan R4",
                        data: perpanjangan_r4
                    }, {
                        name: "Mutasi Masuk R2",
                        data: mutasi_masuk_r2
                    }, {
                        name: "Mutasi Masuk R4",
                        data: mutasi_masuk_r4
                    }, {
                        name: "Mutasi Keluar R2",
                        data: mutasi_keluar_r2
                    }, {
                        name: "Mutasi Keluar R4",
                        data: mutasi_keluar_r4
                    }, {
                        name: "Pengesahan R2",
                        data: pengesahan_r2
                    }, {
                        name: "Pengesahan R4",
                        data: pengesahan_r4
                    }, {
                        name: "Samolnas R2",
                        data: samolnas_r2
                    }, {
                        name: "Samolnas R4",
                        data: samolnas_r4
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
                                bbn_1_r2_sebelumnya = bbn_1_r2[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                bbn_1_r2_sebelumnya = bbn_1_r2[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                bbn_1_r2_sebelumnya = bbn_1_r2[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                bbn_1_r2_sebelumnya = bbn_1_r2[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                bbn_1_r2_sebelumnya = bbn_1_r2[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                bbn_1_r2_sebelumnya = bbn_1_r2[5];
                            }
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                bbn_1_r4_sebelumnya = bbn_1_r4[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                bbn_1_r4_sebelumnya = bbn_1_r4[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                bbn_1_r4_sebelumnya = bbn_1_r4[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                bbn_1_r4_sebelumnya = bbn_1_r4[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                bbn_1_r4_sebelumnya = bbn_1_r4[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                bbn_1_r4_sebelumnya = bbn_1_r4[5];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                perubahan_r2_sebelumnya = perubahan_r2[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                perubahan_r2_sebelumnya = perubahan_r2[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                perubahan_r2_sebelumnya = perubahan_r2[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                perubahan_r2_sebelumnya = perubahan_r2[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                perubahan_r2_sebelumnya = perubahan_r2[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                perubahan_r2_sebelumnya = perubahan_r2[5];
                            }
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                perubahan_r4_sebelumnya = perubahan_r4[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                perubahan_r4_sebelumnya = perubahan_r4[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                perubahan_r4_sebelumnya = perubahan_r4[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                perubahan_r4_sebelumnya = perubahan_r4[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                perubahan_r4_sebelumnya = perubahan_r4[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                perubahan_r4_sebelumnya = perubahan_r4[5];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                mutasi_masuk_r2_sebelumnya = mutasi_masuk_r2[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                mutasi_masuk_r2_sebelumnya = mutasi_masuk_r2[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                mutasi_masuk_r2_sebelumnya = mutasi_masuk_r2[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                mutasi_masuk_r2_sebelumnya = mutasi_masuk_r2[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                mutasi_masuk_r2_sebelumnya = mutasi_masuk_r2[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                mutasi_masuk_r2_sebelumnya = mutasi_masuk_r2[5];
                            }
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                mutasi_masuk_r4_sebelumnya = mutasi_masuk_r4[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                mutasi_masuk_r4_sebelumnya = mutasi_masuk_r4[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                mutasi_masuk_r4_sebelumnya = mutasi_masuk_r4[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                mutasi_masuk_r4_sebelumnya = mutasi_masuk_r4[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                mutasi_masuk_r4_sebelumnya = mutasi_masuk_r4[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                mutasi_masuk_r4_sebelumnya = mutasi_masuk_r4[5];
                            }
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                mutasi_keluar_r2_sebelumnya = mutasi_keluar_r2[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                mutasi_keluar_r2_sebelumnya = mutasi_keluar_r2[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                mutasi_keluar_r2_sebelumnya = mutasi_keluar_r2[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                mutasi_keluar_r2_sebelumnya = mutasi_keluar_r2[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                mutasi_keluar_r2_sebelumnya = mutasi_keluar_r2[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                mutasi_keluar_r2_sebelumnya = mutasi_keluar_r2[5];
                            }
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                mutasi_keluar_r4_sebelumnya = mutasi_keluar_r4[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                mutasi_keluar_r4_sebelumnya = mutasi_keluar_r4[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                mutasi_keluar_r4_sebelumnya = mutasi_keluar_r4[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                mutasi_keluar_r4_sebelumnya = mutasi_keluar_r4[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                mutasi_keluar_r4_sebelumnya = mutasi_keluar_r4[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                mutasi_keluar_r4_sebelumnya = mutasi_keluar_r4[5];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                perpanjangan_r2_sebelumnya = perpanjangan_r2[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                perpanjangan_r2_sebelumnya = perpanjangan_r2[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                perpanjangan_r2_sebelumnya = perpanjangan_r2[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                perpanjangan_r2_sebelumnya = perpanjangan_r2[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                perpanjangan_r2_sebelumnya = perpanjangan_r2[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                perpanjangan_r2_sebelumnya = perpanjangan_r2[5];
                            }
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                perpanjangan_r4_sebelumnya = perpanjangan_r4[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                perpanjangan_r4_sebelumnya = perpanjangan_r4[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                perpanjangan_r4_sebelumnya = perpanjangan_r4[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                perpanjangan_r4_sebelumnya = perpanjangan_r4[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                perpanjangan_r4_sebelumnya = perpanjangan_r4[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                perpanjangan_r4_sebelumnya = perpanjangan_r4[5];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                pengesahan_r2_sebelumnya = pengesahan_r2[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                pengesahan_r2_sebelumnya = pengesahan_r2[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                pengesahan_r2_sebelumnya = pengesahan_r2[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                pengesahan_r2_sebelumnya = pengesahan_r2[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                pengesahan_r2_sebelumnya = pengesahan_r2[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                pengesahan_r2_sebelumnya = pengesahan_r2[5];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                pengesahan_r4_sebelumnya = pengesahan_r4[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                pengesahan_r4_sebelumnya = pengesahan_r4[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                pengesahan_r4_sebelumnya = pengesahan_r4[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                pengesahan_r4_sebelumnya = pengesahan_r4[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                pengesahan_r4_sebelumnya = pengesahan_r4[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                pengesahan_r4_sebelumnya = pengesahan_r4[5];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                samolnas_r2_sebelumnya = samolnas_r2[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                samolnas_r2_sebelumnya = samolnas_r2[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                samolnas_r2_sebelumnya = samolnas_r2[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                samolnas_r2_sebelumnya = samolnas_r2[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                samolnas_r2_sebelumnya = samolnas_r2[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                samolnas_r2_sebelumnya = samolnas_r2[5];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                samolnas_r4_sebelumnya = samolnas_r4[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                samolnas_r4_sebelumnya = samolnas_r4[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                samolnas_r4_sebelumnya = samolnas_r4[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                samolnas_r4_sebelumnya = samolnas_r4[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                samolnas_r4_sebelumnya = samolnas_r4[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                samolnas_r4_sebelumnya = samolnas_r4[5];
                            }

                            return (
                                `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 50rem; height:25rem;">`:'<div style="width: 20rem; height:25rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                    <div class="my-2  text-center">   
                                                        <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                    </div>
                                                        <div class="row">
                                                            <div class="col-md-7 ms-1">
                                                                <span class="fw-bold">BBN I R2</span><br>
                                                                <span class="fw-bold">BBN I R4</span><br>
                                                                <span class="fw-bold">Perubahan R2</span><br>
                                                                <span class="fw-bold">Perubahan R4</span><br>
                                                                <span class="fw-bold">Perpanjangan R2</span><br>
                                                                <span class="fw-bold">Perpanjangan R4</span><br>
                                                                <span class="fw-bold">Mutasi Masuk R2</span><br>
                                                                <span class="fw-bold">Mutasi Masuk R4</span><br>
                                                                <span class="fw-bold">Mutasi Keluar R2</span><br>
                                                                <span class="fw-bold">Mutasi Keluar R4</span><br>
                                                                <span class="fw-bold">Pengesahan R2</span><br>
                                                                <span class="fw-bold">Pengesahan R4</span><br>
                                                                <span class="fw-bold">Samolnas R2</span><br>
                                                                <span class="fw-bold">Samolnas R4</span><br>
                                                            </div>
                                                            <div class="col-md-1">
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                            </div>
                                                            <div class="col-md-4 ms-n1">
                                                                <span class="fw-bold">${nf.format(bbn_1_r2_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(bbn_1_r4_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(perubahan_r2_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(perubahan_r4_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(perpanjangan_r2_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(perpanjangan_r4_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(mutasi_masuk_r2_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(mutasi_masuk_r4_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(mutasi_keluar_r2_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(mutasi_keluar_r4_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(pengesahan_r2_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(pengesahan_r4_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(samolnas_r2_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(samolnas_r4_sebelumnya)}</span><br>
                                                            </div>
                                                        </div>
                                                </div> 
                                                <div class="col-md-4">
                                                    <div style ="border-left: 2px solid silver; height: 500px; position: absolute; left: -5%; top: 0;"></div>
                                                    <div class="my-2  text-center"">   
                                                        <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                    </div>
                                                        <div class="row">
                                                            <div class="col-md-7">
                                                                <span class="fw-bold">BBN I R2</span><br>
                                                                <span class="fw-bold">BBN I R4</span><br>
                                                                <span class="fw-bold">Perubahan R2</span><br>
                                                                <span class="fw-bold">Perubahan R4</span><br>
                                                                <span class="fw-bold">Perpanjangan R2</span><br>
                                                                <span class="fw-bold">Perpanjangan R4</span><br>
                                                                <span class="fw-bold">Mutasi Masuk R2</span><br>
                                                                <span class="fw-bold">Mutasi Masuk R4</span><br>
                                                                <span class="fw-bold">Mutasi Keluar R2</span><br>
                                                                <span class="fw-bold">Mutasi Keluar R4</span><br>
                                                                <span class="fw-bold">Pengesahan R2</span><br>
                                                                <span class="fw-bold">Pengesahan R4</span><br>
                                                                <span class="fw-bold">Samolnas R2</span><br>
                                                                <span class="fw-bold">Samolnas R4</span><br>
                                                            </div>
                                                            <div class="col-md-1">
                                                            <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <span class="fw-bold">${nf.format(bbn_1_r2[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(bbn_1_r4[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(perubahan_r2[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(perubahan_r4[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(perpanjangan_r2[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(perpanjangan_r4[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(mutasi_masuk_r2[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(mutasi_masuk_r4[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(mutasi_keluar_r2[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(mutasi_keluar_r4[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(pengesahan_r2[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(pengesahan_r4[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(samolnas_r2[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(samolnas_r4[dataPointIndex])}</span><br>
                                                            </div>
                                                        </div>
                                                </div> 

                                                <div class="col-md-4">
                                                    <div style ="border-left: 2px solid silver; height: 500px; position: absolute; left: -5%; top: 0;"></div>
                                                        <div class="my-2  text-center"">   
                                                            <span class="fs-6 fw-bold">Presentase</span>
                                                        </div>
                                                        <div class="text-center">
                                                            <span class="fw-bold">${presentase_bbn_1_r2[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_bbn_1_r4[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_perubahan_r2[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_perubahan_r4[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_perpanjangan_r2[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_perpanjangan_r4[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_mutasi_masuk_r2[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_mutasi_masuk_r4[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_mutasi_keluar_r2[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_mutasi_keluar_r4[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_pengesahan_r2[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_pengesahan_r4[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_samolnas_r2[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_samolnas_r4[dataPointIndex]}%</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                ` : `
                                                <div class="col-md-12">
                                                    <div class="my-2 text-center">    
                                                        <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-7 ms-1">
                                                                <span class="fw-bold">BBN I R2</span><br>
                                                                <span class="fw-bold">BBN I R4</span><br>
                                                                <span class="fw-bold">Perubahan R2</span><br>
                                                                <span class="fw-bold">Perubahan R4</span><br>
                                                                <span class="fw-bold">Perpanjangan R2</span><br>
                                                                <span class="fw-bold">Perpanjangan R4</span><br>
                                                                <span class="fw-bold">Mutasi Masuk R2</span><br>
                                                                <span class="fw-bold">Mutasi Masuk R4</span><br>
                                                                <span class="fw-bold">Mutasi Keluar R2</span><br>
                                                                <span class="fw-bold">Mutasi Keluar R4</span><br>
                                                                <span class="fw-bold">Pengesahan R2</span><br>
                                                                <span class="fw-bold">Pengesahan R4</span><br>
                                                                <span class="fw-bold">Samolnas R2</span><br>
                                                                <span class="fw-bold">Samolnas R4</span><br>
                                                            </div>
                                                            <div class="col-md-1">
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                            </div>
                                                        <div class="col-md-4 ms-n1" >
                                                            <span class="fw-bold">${nf.format(bbn_1_r2[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(bbn_1_r4[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(perubahan_r2[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(perubahan_r4[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(perpanjangan_r2[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(perpanjangan_r4[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(mutasi_masuk_r2[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(mutasi_masuk_r4[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(mutasi_keluar_r2[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(mutasi_keluar_r4[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(pengesahan_r2[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(pengesahan_r4[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(samolnas_r2[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(samolnas_r4[dataPointIndex])}</span><br>
                                                        </div>
                                                    </div>
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

                var ditregidentstnkday = new ApexCharts(document.querySelector("#chartday3"), ditregidentstnkday);
                ditregidentstnkday.render();



            }
        })

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>ditregident/getChartSbst",
            data: {
                start_date: seven_daysAgo,
                end_date: today,
                filter: 'day'
            },
            dataType: "JSON",
            // success: function(result) {}
            success: function(result) {
                let nf = new Intl.NumberFormat('en-US');

                let polda_month = result.data.polda_month
                let sim = result.data.sim
                let presentase_sim = result.data.presentase_sim
                let bpkb = result.data.bpkb
                let presentase_bpkb = result.data.presentase_bpkb
                let stnk = result.data.stnk
                let presentase_stnk = result.data.presentase_stnk
                let tnkb = result.data.tnkb
                let presentase_tnkb = result.data.presentase_tnkb
                let tckb = result.data.tckb
                let presentase_tckb = result.data.presentase_tckb
                let stck = result.data.stck
                let presentase_stck = result.data.presentase_stck
                let skukp = result.data.skukp
                let presentase_skukp = result.data.presentase_skukp
                $('#titlesbstday').html(`<h4 class="card-title mb-0 text-uppercase">PERBANDINGAN DATA SBST HARIAN (7 HARIAN)</h4>`);

                var ditregidentsbstday = {
                    series: [{
                        name: "SIM",
                        data: sim
                    }, {
                        name: "BPKB",
                        data: bpkb
                    }, {
                        name: "STNK",
                        data: stnk
                    }, {
                        name: "TNKB",
                        data: tnkb
                    }, {
                        name: "TCKB",
                        data: tckb
                    }, {
                        name: "STCK",
                        data: stck
                    }, {
                        name: "SKUKP",
                        data: skukp
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
                                sim_sebelumnya = sim[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                sim_sebelumnya = sim[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                sim_sebelumnya = sim[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                sim_sebelumnya = sim[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                sim_sebelumnya = sim[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                sim_sebelumnya = sim[5];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                bpkb_sebelumnya = bpkb[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                bpkb_sebelumnya = bpkb[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                bpkb_sebelumnya = bpkb[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                bpkb_sebelumnya = bpkb[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                bpkb_sebelumnya = bpkb[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                bpkb_sebelumnya = bpkb[5];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                stnk_sebelumnya = stnk[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                stnk_sebelumnya = stnk[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                stnk_sebelumnya = stnk[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                stnk_sebelumnya = stnk[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                stnk_sebelumnya = stnk[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                stnk_sebelumnya = stnk[5];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                tnkb_sebelumnya = tnkb[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                tnkb_sebelumnya = tnkb[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                tnkb_sebelumnya = tnkb[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                tnkb_sebelumnya = tnkb[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                tnkb_sebelumnya = tnkb[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                tnkb_sebelumnya = tnkb[5];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                tckb_sebelumnya = tckb[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                tckb_sebelumnya = tckb[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                tckb_sebelumnya = tckb[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                tckb_sebelumnya = tckb[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                tckb_sebelumnya = tckb[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                tckb_sebelumnya = tckb[5];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                stck_sebelumnya = stck[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                stck_sebelumnya = stck[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                stck_sebelumnya = stck[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                stck_sebelumnya = stck[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                stck_sebelumnya = stck[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                stck_sebelumnya = stck[5];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                skukp_sebelumnya = skukp[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                skukp_sebelumnya = skukp[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                skukp_sebelumnya = skukp[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                skukp_sebelumnya = skukp[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                skukp_sebelumnya = skukp[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                skukp_sebelumnya = skukp[5];
                            }

                            return (
                                `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 50rem; height:12rem;">`:'<div style="width: 20rem; height:12rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                    <div class="my-2  text-center">   
                                                        <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                    </div>
                                                        <div class="row">
                                                            <div class="col-md-7 ms-1">
                                                                <span class="fw-bold">SIM</span><br>
                                                                <span class="fw-bold">BPKB</span><br>
                                                                <span class="fw-bold">STNK</span><br>
                                                                <span class="fw-bold">TNKB</span><br>
                                                                <span class="fw-bold">TCKB</span><br>
                                                                <span class="fw-bold">STCK</span><br>
                                                                <span class="fw-bold">SKUKP</span><br>
                                                            </div>
                                                            <div class="col-md-1">
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                            </div>
                                                            <div class="col-md-4 ms-n1">
                                                                <span class="fw-bold">${nf.format(sim_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(bpkb_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(stnk_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(tnkb_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(tckb_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(stck_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(skukp_sebelumnya)}</span><br>
                                                            </div>
                                                        </div>
                                                </div> 
                                                <div class="col-md-4">
                                                    <div style ="border-left: 2px solid silver; height: 500px; position: absolute; left: -5%; top: 0;"></div>
                                                    <div class="my-2  text-center"">   
                                                        <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                    </div>
                                                        <div class="row">
                                                            <div class="col-md-7">
                                                                <span class="fw-bold">SIM</span><br>
                                                                <span class="fw-bold">BPKB</span><br>
                                                                <span class="fw-bold">STNK</span><br>
                                                                <span class="fw-bold">TNKB</span><br>
                                                                <span class="fw-bold">TCKB</span><br>
                                                                <span class="fw-bold">STCK</span><br>
                                                                <span class="fw-bold">SKUKP</span><br>
                                                            </div>
                                                            <div class="col-md-1">
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <span class="fw-bold">${nf.format(sim[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(bpkb[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(stnk[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(tnkb[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(tckb[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(stck[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(skukp[dataPointIndex])}</span><br>
                                                            </div>
                                                        </div>
                                                </div> 

                                                <div class="col-md-4">
                                                    <div style ="border-left: 2px solid silver; height: 500px; position: absolute; left: -5%; top: 0;"></div>
                                                        <div class="my-2  text-center"">   
                                                            <span class="fs-6 fw-bold">Presentase</span>
                                                        </div>
                                                        <div class="text-center">
                                                            <span class="fw-bold">${presentase_sim[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_bpkb[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_stnk[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_tnkb[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_tckb[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_stck[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_skukp[dataPointIndex]}%</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                ` : `
                                                <div class="col-md-12">
                                                    <div class="my-2 text-center">    
                                                        <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-7 ms-1">
                                                            <span class="fw-bold">SIM</span><br>
                                                            <span class="fw-bold">BPKB</span><br>
                                                            <span class="fw-bold">STNK</span><br>
                                                            <span class="fw-bold">TNKB</span><br>
                                                            <span class="fw-bold">TCKB</span><br>
                                                            <span class="fw-bold">STCK</span><br>
                                                            <span class="fw-bold">SKUKP</span><br></div>
                                                        <div class="col-md-1">
                                                            <span class="fw-bold">:</span><br>
                                                            <span class="fw-bold">:</span><br>
                                                            <span class="fw-bold">:</span><br>
                                                            <span class="fw-bold">:</span><br>
                                                            <span class="fw-bold">:</span><br>
                                                            <span class="fw-bold">:</span><br>
                                                            <span class="fw-bold">:</span><br>
                                                        </div>
                                                        <div class="col-md-4 ms-n1" >
                                                            <span class="fw-bold">${nf.format(sim[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(bpkb[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(stnk[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(tnkb[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(tckb[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(stck[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(skukp[dataPointIndex])}</span><br>
                                                        </div>
                                                    </div>
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

                var ditregidentsbstday = new ApexCharts(document.querySelector("#chartday4"), ditregidentsbstday);
                ditregidentsbstday.render();
            }
        })

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>ditregident/getChartRanmor",
            data: {
                start_date: seven_daysAgo,
                end_date: today,
                filter: 'day'
            },
            dataType: "JSON",
            success: function(result) {
                let nf = new Intl.NumberFormat('en-US');
                let polda_month = result.data.polda_month
                let mobil_penumpang = result.data.mobil_penumpang
                let presentase_mobil_penumpang = result.data.presentase_mobil_penumpang
                let mobil_bus = result.data.mobil_bus
                let presentase_mobil_bus = result.data.presentase_mobil_bus
                let mobil_barang = result.data.mobil_barang
                let presentase_mobil_barang = result.data.presentase_mobil_barang
                let sepeda_motor = result.data.sepeda_motor
                let presentase_sepeda_motor = result.data.presentase_sepeda_motor
                let ransus = result.data.ransus
                let presentase_ransus = result.data.presentase_ransus
                let stck = result.data.stck
                let presentase_stck = result.data.presentase_stck
                let skukp = result.data.skukp
                let presentase_skukp = result.data.presentase_skukp
                $('#titleranmorday').html(`<h4 class="card-title mb-0 text-uppercase">PERBANDINGAN DATA RANMOR HARIAN (7 HARIAN)</h4>`);

                var ditregidentranmorday = {
                    series: [{
                        name: "Mobil Penumpang",
                        data: mobil_penumpang
                    }, {
                        name: "Mobil Bus",
                        data: mobil_bus
                    }, {
                        name: "Mobil Barang",
                        data: mobil_barang
                    }, {
                        name: "Sepeda Motor",
                        data: sepeda_motor
                    }, {
                        name: "Kendaraan Khusus",
                        data: ransus
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
                                mobil_penumpang_sebelumnya = mobil_penumpang[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                mobil_penumpang_sebelumnya = mobil_penumpang[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                mobil_penumpang_sebelumnya = mobil_penumpang[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                mobil_penumpang_sebelumnya = mobil_penumpang[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                mobil_penumpang_sebelumnya = mobil_penumpang[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                mobil_penumpang_sebelumnya = mobil_penumpang[5];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                mobil_bus_sebelumnya = mobil_bus[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                mobil_bus_sebelumnya = mobil_bus[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                mobil_bus_sebelumnya = mobil_bus[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                mobil_bus_sebelumnya = mobil_bus[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                mobil_bus_sebelumnya = mobil_bus[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                mobil_bus_sebelumnya = mobil_bus[5];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                mobil_barang_sebelumnya = mobil_barang[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                mobil_barang_sebelumnya = mobil_barang[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                mobil_barang_sebelumnya = mobil_barang[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                mobil_barang_sebelumnya = mobil_barang[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                mobil_barang_sebelumnya = mobil_barang[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                mobil_barang_sebelumnya = mobil_barang[5];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                sepeda_motor_sebelumnya = sepeda_motor[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                sepeda_motor_sebelumnya = sepeda_motor[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                sepeda_motor_sebelumnya = sepeda_motor[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                sepeda_motor_sebelumnya = sepeda_motor[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                sepeda_motor_sebelumnya = sepeda_motor[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                sepeda_motor_sebelumnya = sepeda_motor[5];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                ransus_sebelumnya = ransus[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                ransus_sebelumnya = ransus[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                ransus_sebelumnya = ransus[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                ransus_sebelumnya = ransus[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                ransus_sebelumnya = ransus[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                ransus_sebelumnya = ransus[5];
                            }


                            return (
                                `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 50rem; height:10rem;">`:'<div style="width: 20rem; height:10rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                    <div class="my-2  text-center">   
                                                        <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                    </div>
                                                        <div class="row">
                                                            <div class="col-md-7 ms-1">
                                                                <span class="fw-bold">Mobil Penumpang</span><br>
                                                                <span class="fw-bold">Mobil Bus</span><br>
                                                                <span class="fw-bold">Mobil Barang</span><br>
                                                                <span class="fw-bold">Sepeda Motor</span><br>
                                                                <span class="fw-bold">Kendaraan Khusus</span><br>
                                                            </div>
                                                            <div class="col-md-1">
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                            </div>
                                                            <div class="col-md-4 ms-n1">
                                                                <span class="fw-bold">${nf.format(mobil_penumpang_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(mobil_bus_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(mobil_barang_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(sepeda_motor_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(ransus_sebelumnya)}</span><br>
                                                            </div>
                                                        </div>
                                                </div> 
                                                <div class="col-md-4">
                                                    <div style ="border-left: 2px solid silver; height: 500px; position: absolute; left: -5%; top: 0;"></div>
                                                    <div class="my-2  text-center"">   
                                                        <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                    </div>
                                                        <div class="row">
                                                            <div class="col-md-7">
                                                                <span class="fw-bold">Mobil Penumpang</span><br>
                                                                <span class="fw-bold">Mobil Bus</span><br>
                                                                <span class="fw-bold">Mobil Barang</span><br>
                                                                <span class="fw-bold">Sepeda Motor</span><br>
                                                                <span class="fw-bold">Kendaraan Khusus</span><br>   </div>
                                                            <div class="col-md-1">
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <span class="fw-bold">${nf.format(mobil_penumpang[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(mobil_bus[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(mobil_barang[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(sepeda_motor[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(ransus[dataPointIndex])}</span><br>
                                                            </div>
                                                        </div>
                                                </div> 

                                                <div class="col-md-4">
                                                    <div style ="border-left: 2px solid silver; height: 500px; position: absolute; left: -5%; top: 0;"></div>
                                                        <div class="my-2  text-center"">   
                                                            <span class="fs-6 fw-bold">Presentase</span>
                                                        </div>
                                                        <div class="text-center">
                                                            <span class="fw-bold">${presentase_mobil_penumpang[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_mobil_bus[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_mobil_barang[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_sepeda_motor[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_ransus[dataPointIndex]}%</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                ` : `
                                                <div class="col-md-12">
                                                    <div class="my-2 text-center">    
                                                        <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-7 ms-1">
                                                                <span class="fw-bold">Mobil Penumpang</span><br>
                                                                <span class="fw-bold">Mobil Bus</span><br>
                                                                <span class="fw-bold">Mobil Barang</span><br>
                                                                <span class="fw-bold">Sepeda Motor</span><br>
                                                                <span class="fw-bold">Kendaraan Khusus</span><br>  
                                                        </div>
                                                        <div class="col-md-1">
                                                            <span class="fw-bold">:</span><br>
                                                            <span class="fw-bold">:</span><br>
                                                            <span class="fw-bold">:</span><br>
                                                            <span class="fw-bold">:</span><br>
                                                            <span class="fw-bold">:</span><br>
                                                        </div>
                                                        <div class="col-md-4 ms-n1" >
                                                            <span class="fw-bold">${nf.format(mobil_penumpang[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(mobil_bus[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(mobil_barang[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(sepeda_motor[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(ransus[dataPointIndex])}</span><br>
                                                        </div>
                                                    </div>
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

                var ditregidentranmorday = new ApexCharts(document.querySelector("#chartday5"), ditregidentranmorday);
                ditregidentranmorday.render();
            }
        })

    }


    // Month
    function getRegidentmonth(firstDay, lastDay) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>ditregident/getChartSim",
            data: {
                start_date: firstDay,
                end_date: lastDay,
                filter: 'month'
            },
            dataType: "JSON",
            success: function(result) {
                let nf = new Intl.NumberFormat('en-US');
                let polda_month = result.data.polda_month
                let baru_a = result.data.baru_a
                let presentase_baru_a = result.data.presentase_baru_a
                let baru_c = result.data.baru_c
                let presentase_baru_c = result.data.presentase_baru_c
                let baru_c1 = result.data.baru_c1
                let presentase_baru_c1 = result.data.presentase_baru_c1
                let baru_c2 = result.data.baru_c2
                let presentase_baru_c2 = result.data.presentase_baru_c2
                let baru_d = result.data.baru_d
                let presentase_baru_d = result.data.presentase_baru_d
                let baru_d1 = result.data.baru_d1
                let presentase_baru_d1 = result.data.presentase_baru_d1

                let perpanjangan_a = result.data.perpanjangan_a
                let presentase_perpanjangan_a = result.data.presentase_perpanjangan_a
                let perpanjangan_au = result.data.perpanjangan_au
                let presentase_perpanjangan_au = result.data.presentase_perpanjangan_au
                let perpanjangan_b1 = result.data.perpanjangan_b1
                let presentase_perpanjangan_b1 = result.data.presentase_perpanjangan_b1
                let perpanjangan_b1u = result.data.perpanjangan_b1u
                let presentase_perpanjangan_b1u = result.data.presentase_perpanjangan_b1u
                let perpanjangan_b2 = result.data.perpanjangan_b2
                let presentase_perpanjangan_b2 = result.data.presentase_perpanjangan_b2
                let perpanjangan_b2u = result.data.perpanjangan_b2u
                let presentase_perpanjangan_b2u = result.data.presentase_perpanjangan_b2u
                let perpanjangan_c = result.data.perpanjangan_c
                let presentase_perpanjangan_c = result.data.presentase_perpanjangan_c
                let perpanjangan_c1 = result.data.perpanjangan_c1
                let presentase_perpanjangan_c1 = result.data.presentase_perpanjangan_c1
                let perpanjangan_c2 = result.data.perpanjangan_c2
                let presentase_perpanjangan_c2 = result.data.presentase_perpanjangan_c2
                let perpanjangan_d = result.data.perpanjangan_d
                let presentase_perpanjangan_d = result.data.presentase_perpanjangan_d
                let perpanjangan_d1 = result.data.perpanjangan_d1
                let presentase_perpanjangan_d1 = result.data.presentase_perpanjangan_d1

                let peningkatan_au = result.data.peningkatan_au
                let presentase_peningkatan_au = result.data.presentase_peningkatan_au
                let peningkatan_b1 = result.data.peningkatan_b1
                let presentase_peningkatan_b1 = result.data.presentase_peningkatan_b1
                let peningkatan_b1u = result.data.peningkatan_b1u
                let presentase_peningkatan_b1u = result.data.presentase_peningkatan_b1u
                let peningkatan_b2 = result.data.peningkatan_b2
                let presentase_peningkatan_b2 = result.data.presentase_peningkatan_b2
                let peningkatan_b2u = result.data.peningkatan_b2u
                let presentase_peningkatan_b2u = result.data.presentase_peningkatan_b2u
                $('#titlesimmonth').html(`<h4 class="card-title mb-0 text-uppercase">PERBANDINGAN DATA SIM BULANAN</h4>`);

                var ditregidentsim = {
                    series: [{
                        name: "Baru A",
                        data: baru_a
                    }, {
                        name: "Baru C",
                        data: baru_c
                    }, {
                        name: "Baru CI",
                        data: baru_c1
                    }, {
                        name: "Baru CII",
                        data: baru_c2
                    }, {
                        name: "Baru D",
                        data: baru_d
                    }, {
                        name: "Baru DI",
                        data: baru_d1
                    }, {
                        name: "Perpanjangan A",
                        data: perpanjangan_a
                    }, {

                        name: "Perpanjangan AU",
                        data: perpanjangan_au
                    }, {
                        name: "Perpanjangan C",
                        data: perpanjangan_c
                    }, {
                        name: "Perpanjangan CI",
                        data: perpanjangan_c1
                    }, {
                        name: "Perpanjangan CII",
                        data: perpanjangan_c2
                    }, {
                        name: "Perpanjangan D",
                        data: perpanjangan_d
                    }, {
                        name: "Perpanjangan DI",
                        data: perpanjangan_d1
                    }, {
                        name: "Perpanjangan BI",
                        data: perpanjangan_b1
                    }, {
                        name: "Perpanjangan BIU",
                        data: perpanjangan_b1u
                    }, {
                        name: "Perpanjangan BII",
                        data: perpanjangan_b2
                    }, {
                        name: "Perpanjangan BIIU",
                        data: perpanjangan_b2u
                    }, {
                        name: "Peningkatan AU",
                        data: peningkatan_au
                    }, {
                        name: "Peningkatan BI",
                        data: peningkatan_b1
                    }, {
                        name: "Peningkatan BIU",
                        data: peningkatan_b1u
                    }, {
                        name: "Peningkatan BII",
                        data: peningkatan_b2
                    }, {
                        name: "Peningkatan BIIU",
                        data: peningkatan_b2u
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
                                baru_a_sebelumnya = baru_a[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                baru_a_sebelumnya = baru_a[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                baru_a_sebelumnya = baru_a[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                baru_a_sebelumnya = baru_a[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                baru_a_sebelumnya = baru_a[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                baru_a_sebelumnya = baru_a[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                baru_a_sebelumnya = baru_a[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                baru_a_sebelumnya = baru_a[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                baru_a_sebelumnya = baru_a[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                baru_a_sebelumnya = baru_a[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                baru_a_sebelumnya = baru_a[10];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                baru_c_sebelumnya = baru_c[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                baru_c_sebelumnya = baru_c[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                baru_c_sebelumnya = baru_c[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                baru_c_sebelumnya = baru_c[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                baru_c_sebelumnya = baru_c[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                baru_c_sebelumnya = baru_c[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                baru_c_sebelumnya = baru_c[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                baru_c_sebelumnya = baru_c[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                baru_c_sebelumnya = baru_c[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                baru_c_sebelumnya = baru_c[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                baru_c_sebelumnya = baru_c[10];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                baru_c1_sebelumnya = baru_c1[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                baru_c1_sebelumnya = baru_c1[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                baru_c1_sebelumnya = baru_c1[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                baru_c1_sebelumnya = baru_c1[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                baru_c1_sebelumnya = baru_c1[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                baru_c1_sebelumnya = baru_c1[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                baru_c1_sebelumnya = baru_c1[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                baru_c1_sebelumnya = baru_c1[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                baru_c1_sebelumnya = baru_c1[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                baru_c1_sebelumnya = baru_c1[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                baru_c1_sebelumnya = baru_c1[10];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                baru_c2_sebelumnya = baru_c2[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                baru_c2_sebelumnya = baru_c2[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                baru_c2_sebelumnya = baru_c2[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                baru_c2_sebelumnya = baru_c2[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                baru_c2_sebelumnya = baru_c2[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                baru_c2_sebelumnya = baru_c2[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                baru_c2_sebelumnya = baru_c2[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                baru_c2_sebelumnya = baru_c2[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                baru_c2_sebelumnya = baru_c2[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                baru_c2_sebelumnya = baru_c2[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                baru_c2_sebelumnya = baru_c2[10];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                baru_d_sebelumnya = baru_d[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                baru_d_sebelumnya = baru_d[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                baru_d_sebelumnya = baru_d[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                baru_d_sebelumnya = baru_d[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                baru_d_sebelumnya = baru_d[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                baru_d_sebelumnya = baru_d[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                baru_d_sebelumnya = baru_d[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                baru_d_sebelumnya = baru_d[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                baru_d_sebelumnya = baru_d[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                baru_d_sebelumnya = baru_d[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                baru_d_sebelumnya = baru_d[10];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                baru_d1_sebelumnya = baru_d1[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                baru_d1_sebelumnya = baru_d1[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                baru_d1_sebelumnya = baru_d1[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                baru_d1_sebelumnya = baru_d1[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                baru_d1_sebelumnya = baru_d1[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                baru_d1_sebelumnya = baru_d1[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                baru_d1_sebelumnya = baru_d1[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                baru_d1_sebelumnya = baru_d1[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                baru_d1_sebelumnya = baru_d1[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                baru_d1_sebelumnya = baru_d1[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                baru_d1_sebelumnya = baru_d1[10];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                perpanjangan_a_sebelumnya = perpanjangan_a[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                perpanjangan_a_sebelumnya = perpanjangan_a[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                perpanjangan_a_sebelumnya = perpanjangan_a[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                perpanjangan_a_sebelumnya = perpanjangan_a[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                perpanjangan_a_sebelumnya = perpanjangan_a[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                perpanjangan_a_sebelumnya = perpanjangan_a[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                perpanjangan_a_sebelumnya = perpanjangan_a[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                perpanjangan_a_sebelumnya = perpanjangan_a[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                perpanjangan_a_sebelumnya = perpanjangan_a[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                perpanjangan_a_sebelumnya = perpanjangan_a[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                perpanjangan_a_sebelumnya = perpanjangan_a[10];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                perpanjangan_au_sebelumnya = perpanjangan_au[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                perpanjangan_au_sebelumnya = perpanjangan_au[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                perpanjangan_au_sebelumnya = perpanjangan_au[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                perpanjangan_au_sebelumnya = perpanjangan_au[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                perpanjangan_au_sebelumnya = perpanjangan_au[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                perpanjangan_au_sebelumnya = perpanjangan_au[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                perpanjangan_au_sebelumnya = perpanjangan_au[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                perpanjangan_au_sebelumnya = perpanjangan_au[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                perpanjangan_au_sebelumnya = perpanjangan_au[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                perpanjangan_au_sebelumnya = perpanjangan_au[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                perpanjangan_au_sebelumnya = perpanjangan_au[10];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                perpanjangan_b1_sebelumnya = perpanjangan_b1[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                perpanjangan_b1_sebelumnya = perpanjangan_b1[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                perpanjangan_b1_sebelumnya = perpanjangan_b1[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                perpanjangan_b1_sebelumnya = perpanjangan_b1[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                perpanjangan_b1_sebelumnya = perpanjangan_b1[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                perpanjangan_b1_sebelumnya = perpanjangan_b1[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                perpanjangan_b1_sebelumnya = perpanjangan_b1[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                perpanjangan_b1_sebelumnya = perpanjangan_b1[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                perpanjangan_b1_sebelumnya = perpanjangan_b1[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                perpanjangan_b1_sebelumnya = perpanjangan_b1[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                perpanjangan_b1_sebelumnya = perpanjangan_b1[10];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                perpanjangan_b1u_sebelumnya = perpanjangan_b1u[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                perpanjangan_b1u_sebelumnya = perpanjangan_b1u[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                perpanjangan_b1u_sebelumnya = perpanjangan_b1u[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                perpanjangan_b1u_sebelumnya = perpanjangan_b1u[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                perpanjangan_b1u_sebelumnya = perpanjangan_b1u[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                perpanjangan_b1u_sebelumnya = perpanjangan_b1u[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                perpanjangan_b1u_sebelumnya = perpanjangan_b1u[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                perpanjangan_b1u_sebelumnya = perpanjangan_b1u[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                perpanjangan_b1u_sebelumnya = perpanjangan_b1u[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                perpanjangan_b1u_sebelumnya = perpanjangan_b1u[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                perpanjangan_b1u_sebelumnya = perpanjangan_b1u[10];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                perpanjangan_b2_sebelumnya = perpanjangan_b2[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                perpanjangan_b2_sebelumnya = perpanjangan_b2[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                perpanjangan_b2_sebelumnya = perpanjangan_b2[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                perpanjangan_b2_sebelumnya = perpanjangan_b2[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                perpanjangan_b2_sebelumnya = perpanjangan_b2[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                perpanjangan_b2_sebelumnya = perpanjangan_b2[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                perpanjangan_b2_sebelumnya = perpanjangan_b2[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                perpanjangan_b2_sebelumnya = perpanjangan_b2[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                perpanjangan_b2_sebelumnya = perpanjangan_b2[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                perpanjangan_b2_sebelumnya = perpanjangan_b2[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                perpanjangan_b2_sebelumnya = perpanjangan_b2[10];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                perpanjangan_b2u_sebelumnya = perpanjangan_b2u[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                perpanjangan_b2u_sebelumnya = perpanjangan_b2u[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                perpanjangan_b2u_sebelumnya = perpanjangan_b2u[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                perpanjangan_b2u_sebelumnya = perpanjangan_b2u[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                perpanjangan_b2u_sebelumnya = perpanjangan_b2u[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                perpanjangan_b2u_sebelumnya = perpanjangan_b2u[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                perpanjangan_b2u_sebelumnya = perpanjangan_b2u[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                perpanjangan_b2u_sebelumnya = perpanjangan_b2u[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                perpanjangan_b2u_sebelumnya = perpanjangan_b2u[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                perpanjangan_b2u_sebelumnya = perpanjangan_b2u[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                perpanjangan_b2u_sebelumnya = perpanjangan_b2u[10];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                perpanjangan_c_sebelumnya = perpanjangan_c[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                perpanjangan_c_sebelumnya = perpanjangan_c[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                perpanjangan_c_sebelumnya = perpanjangan_c[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                perpanjangan_c_sebelumnya = perpanjangan_c[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                perpanjangan_c_sebelumnya = perpanjangan_c[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                perpanjangan_c_sebelumnya = perpanjangan_c[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                perpanjangan_c_sebelumnya = perpanjangan_c[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                perpanjangan_c_sebelumnya = perpanjangan_c[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                perpanjangan_c_sebelumnya = perpanjangan_c[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                perpanjangan_c_sebelumnya = perpanjangan_c[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                perpanjangan_c_sebelumnya = perpanjangan_c[10];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                perpanjangan_c1_sebelumnya = perpanjangan_c1[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                perpanjangan_c1_sebelumnya = perpanjangan_c1[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                perpanjangan_c1_sebelumnya = perpanjangan_c1[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                perpanjangan_c1_sebelumnya = perpanjangan_c1[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                perpanjangan_c1_sebelumnya = perpanjangan_c1[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                perpanjangan_c1_sebelumnya = perpanjangan_c1[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                perpanjangan_c1_sebelumnya = perpanjangan_c1[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                perpanjangan_c1_sebelumnya = perpanjangan_c1[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                perpanjangan_c1_sebelumnya = perpanjangan_c1[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                perpanjangan_c1_sebelumnya = perpanjangan_c1[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                perpanjangan_c1_sebelumnya = perpanjangan_c1[10];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                perpanjangan_c2_sebelumnya = perpanjangan_c2[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                perpanjangan_c2_sebelumnya = perpanjangan_c2[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                perpanjangan_c2_sebelumnya = perpanjangan_c2[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                perpanjangan_c2_sebelumnya = perpanjangan_c2[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                perpanjangan_c2_sebelumnya = perpanjangan_c2[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                perpanjangan_c2_sebelumnya = perpanjangan_c2[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                perpanjangan_c2_sebelumnya = perpanjangan_c2[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                perpanjangan_c2_sebelumnya = perpanjangan_c2[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                perpanjangan_c2_sebelumnya = perpanjangan_c2[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                perpanjangan_c2_sebelumnya = perpanjangan_c2[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                perpanjangan_c2_sebelumnya = perpanjangan_c2[10];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                perpanjangan_d_sebelumnya = perpanjangan_d[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                perpanjangan_d_sebelumnya = perpanjangan_d[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                perpanjangan_d_sebelumnya = perpanjangan_d[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                perpanjangan_d_sebelumnya = perpanjangan_d[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                perpanjangan_d_sebelumnya = perpanjangan_d[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                perpanjangan_d_sebelumnya = perpanjangan_d[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                perpanjangan_d_sebelumnya = perpanjangan_d[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                perpanjangan_d_sebelumnya = perpanjangan_d[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                perpanjangan_d_sebelumnya = perpanjangan_d[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                perpanjangan_d_sebelumnya = perpanjangan_d[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                perpanjangan_d_sebelumnya = perpanjangan_d[10];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                perpanjangan_d1_sebelumnya = perpanjangan_d1[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                perpanjangan_d1_sebelumnya = perpanjangan_d1[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                perpanjangan_d1_sebelumnya = perpanjangan_d1[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                perpanjangan_d1_sebelumnya = perpanjangan_d1[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                perpanjangan_d1_sebelumnya = perpanjangan_d1[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                perpanjangan_d1_sebelumnya = perpanjangan_d1[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                perpanjangan_d1_sebelumnya = perpanjangan_d1[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                perpanjangan_d1_sebelumnya = perpanjangan_d1[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                perpanjangan_d1_sebelumnya = perpanjangan_d1[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                perpanjangan_d1_sebelumnya = perpanjangan_d1[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                perpanjangan_d1_sebelumnya = perpanjangan_d1[10];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                peningkatan_au_sebelumnya = peningkatan_au[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                peningkatan_au_sebelumnya = peningkatan_au[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                peningkatan_au_sebelumnya = peningkatan_au[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                peningkatan_au_sebelumnya = peningkatan_au[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                peningkatan_au_sebelumnya = peningkatan_au[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                peningkatan_au_sebelumnya = peningkatan_au[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                peningkatan_au_sebelumnya = peningkatan_au[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                peningkatan_au_sebelumnya = peningkatan_au[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                peningkatan_au_sebelumnya = peningkatan_au[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                peningkatan_au_sebelumnya = peningkatan_au[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                peningkatan_au_sebelumnya = peningkatan_au[10];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                peningkatan_b1_sebelumnya = peningkatan_b1[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                peningkatan_b1_sebelumnya = peningkatan_b1[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                peningkatan_b1_sebelumnya = peningkatan_b1[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                peningkatan_b1_sebelumnya = peningkatan_b1[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                peningkatan_b1_sebelumnya = peningkatan_b1[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                peningkatan_b1_sebelumnya = peningkatan_b1[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                peningkatan_b1_sebelumnya = peningkatan_b1[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                peningkatan_b1_sebelumnya = peningkatan_b1[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                peningkatan_b1_sebelumnya = peningkatan_b1[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                peningkatan_b1_sebelumnya = peningkatan_b1[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                peningkatan_b1_sebelumnya = peningkatan_b1[10];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                peningkatan_b1u_sebelumnya = peningkatan_b1u[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                peningkatan_b1u_sebelumnya = peningkatan_b1u[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                peningkatan_b1u_sebelumnya = peningkatan_b1u[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                peningkatan_b1u_sebelumnya = peningkatan_b1u[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                peningkatan_b1u_sebelumnya = peningkatan_b1u[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                peningkatan_b1u_sebelumnya = peningkatan_b1u[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                peningkatan_b1u_sebelumnya = peningkatan_b1u[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                peningkatan_b1u_sebelumnya = peningkatan_b1u[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                peningkatan_b1u_sebelumnya = peningkatan_b1u[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                peningkatan_b1u_sebelumnya = peningkatan_b1u[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                peningkatan_b1u_sebelumnya = peningkatan_b1u[10];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                peningkatan_b2_sebelumnya = peningkatan_b2[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                peningkatan_b2_sebelumnya = peningkatan_b2[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                peningkatan_b2_sebelumnya = peningkatan_b2[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                peningkatan_b2_sebelumnya = peningkatan_b2[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                peningkatan_b2_sebelumnya = peningkatan_b2[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                peningkatan_b2_sebelumnya = peningkatan_b2[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                peningkatan_b2_sebelumnya = peningkatan_b2[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                peningkatan_b2_sebelumnya = peningkatan_b2[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                peningkatan_b2_sebelumnya = peningkatan_b2[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                peningkatan_b2_sebelumnya = peningkatan_b2[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                peningkatan_b2_sebelumnya = peningkatan_b2[10];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                peningkatan_b2u_sebelumnya = peningkatan_b2u[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                peningkatan_b2u_sebelumnya = peningkatan_b2u[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                peningkatan_b2u_sebelumnya = peningkatan_b2u[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                peningkatan_b2u_sebelumnya = peningkatan_b2u[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                peningkatan_b2u_sebelumnya = peningkatan_b2u[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                peningkatan_b2u_sebelumnya = peningkatan_b2u[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                peningkatan_b2u_sebelumnya = peningkatan_b2u[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                peningkatan_b2u_sebelumnya = peningkatan_b2u[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                peningkatan_b2u_sebelumnya = peningkatan_b2u[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                peningkatan_b2u_sebelumnya = peningkatan_b2u[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                peningkatan_b2u_sebelumnya = peningkatan_b2u[10];
                            }
                            return (
                                `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 70rem; height:20rem;">`:'<div style="width: 30rem; height:20rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                    <div class="my-2  text-center">   
                                                        <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                    </div>
                                                        <div class="row">
                                                            <div class="col-md-4 ms-1">
                                                                <span class="fw-bold ms-2">Baru</span><br>
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <span class="fw-bold">A</span><br>
                                                                        <span class="fw-bold">C</span><br>
                                                                        <span class="fw-bold">CI</span><br>
                                                                        <span class="fw-bold">CII</span><br>
                                                                        <span class="fw-bold">D</span><br>
                                                                        <span class="fw-bold">DI</span><br>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <span class="fw-bold">${nf.format(baru_a_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(baru_c_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(baru_c1_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(baru_c2_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(baru_d_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(baru_d1_sebelumnya)}</span><br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 ms-n4 me-3">
                                                                <span class="fw-bold">Perpanjangan</span><br>
                                                                <div class="row ms-2">
                                                                    <div class="col-md-2">
                                                                        <span class="fw-bold">A</span><br>
                                                                        <span class="fw-bold">AU</span><br>
                                                                        <span class="fw-bold">C</span><br>
                                                                        <span class="fw-bold">CI</span><br>
                                                                        <span class="fw-bold">CII</span><br>
                                                                        <span class="fw-bold">D</span><br>
                                                                        <span class="fw-bold">DI</span><br>
                                                                        <span class="fw-bold">BI</span><br>
                                                                        <span class="fw-bold">BIU</span><br>
                                                                        <span class="fw-bold">BI</span><br>
                                                                        <span class="fw-bold">BIIU</span><br>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <span class="fw-bold">${nf.format(perpanjangan_a_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_au_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_c_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_c1_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_c2_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_d_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_d1_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_b1_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_b1u_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_b2_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_b2u_sebelumnya)}</span><br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <span class="fw-bold">Peningkatan</span><br>
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <span class="fw-bold">AU</span><br>
                                                                        <span class="fw-bold">BI</span><br>
                                                                        <span class="fw-bold">BIU</span><br>
                                                                        <span class="fw-bold">BII</span><br>
                                                                        <span class="fw-bold">BIIU</span><br>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <span class="fw-bold">${nf.format(peningkatan_au_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(peningkatan_b1_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(peningkatan_b1u_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(peningkatan_b2_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(peningkatan_b2u_sebelumnya)}</span><br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div> 



                                                <div class="col-md-4">
                                                <div style ="border-left: 2px solid silver; height: 500px; position: absolute; left: -5%; top: 0;"></div>
                                                    <div class="my-2  text-center"">   
                                                        <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                    </div>
                                                        <div class="row">
                                                            <div class="col-md-4 ms-1">
                                                                <span class="fw-bold">Baru</span><br>
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <span class="fw-bold">A</span><br>
                                                                        <span class="fw-bold">C</span><br>
                                                                        <span class="fw-bold">CI</span><br>
                                                                        <span class="fw-bold">CII</span><br>
                                                                        <span class="fw-bold">D</span><br>
                                                                        <span class="fw-bold">DI</span><br>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <span class="fw-bold">${nf.format(baru_a[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(baru_c[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(baru_c1[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(baru_c2[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(baru_d[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(baru_d1[dataPointIndex])}</span><br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 ms-n3 me-2">
                                                                <span class="fw-bold">Perpanjangan</span><br>
                                                                <div class="row ms-2">
                                                                    <div class="col-md-2">
                                                                        <span class="fw-bold">A</span><br>
                                                                        <span class="fw-bold">AU</span><br>
                                                                        <span class="fw-bold">C</span><br>
                                                                        <span class="fw-bold">CI</span><br>
                                                                        <span class="fw-bold">CII</span><br>
                                                                        <span class="fw-bold">D</span><br>
                                                                        <span class="fw-bold">DI</span><br>
                                                                        <span class="fw-bold">BI</span><br>
                                                                        <span class="fw-bold">BIU</span><br>
                                                                        <span class="fw-bold">BI</span><br>
                                                                        <span class="fw-bold">BIIU</span><br>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <span class="fw-bold">${nf.format(perpanjangan_a[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_au[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_c[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_c1[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_c2[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_d[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_d1[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_b1[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_b1u[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_b2[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_b2u[dataPointIndex])}</span><br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <span class="fw-bold">Peningkatan</span><br>
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <span class="fw-bold">AU</span><br>
                                                                        <span class="fw-bold">BI</span><br>
                                                                        <span class="fw-bold">BIU</span><br>
                                                                        <span class="fw-bold">BII</span><br>
                                                                        <span class="fw-bold">BIIU</span><br>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <span class="fw-bold">${nf.format(peningkatan_au[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(peningkatan_b1[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(peningkatan_b1u[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(peningkatan_b2[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(peningkatan_b2u[dataPointIndex])}</span><br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div> 

                                                <div class="col-md-4">
                                                <div style ="border-left: 2px solid silver; height: 500px; position: absolute; left: -5%; top: 0;"></div>
                                                    <div class="my-2  text-center"">   
                                                        <span class="fs-6 fw-bold">Presentase</span>
                                                    </div>
                                                        <div class="row">
                                                            <div class="col-md-4 ms-1">
                                                                <span class="fw-bold">Baru</span><br>
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <span class="fw-bold">A</span><br>
                                                                        <span class="fw-bold">C</span><br>
                                                                        <span class="fw-bold">C1</span><br>
                                                                        <span class="fw-bold">C2</span><br>
                                                                        <span class="fw-bold">D</span><br>
                                                                        <span class="fw-bold">D1</span><br>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <span class="fw-bold">${presentase_baru_a[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_baru_c[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_baru_c1[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_baru_c2[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_baru_d[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_baru_d1[dataPointIndex]}%</span><br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 ms-n4 me-3">
                                                                <span class="fw-bold">Perpanjangan</span><br>
                                                                <div class="row ms-2">
                                                                    <div class="col-md-2">
                                                                        <span class="fw-bold">A</span><br>
                                                                        <span class="fw-bold">AU</span><br>
                                                                        <span class="fw-bold">C</span><br>
                                                                        <span class="fw-bold">CI</span><br>
                                                                        <span class="fw-bold">CII</span><br>
                                                                        <span class="fw-bold">D</span><br>
                                                                        <span class="fw-bold">DI</span><br>
                                                                        <span class="fw-bold">BI</span><br>
                                                                        <span class="fw-bold">BIU</span><br>
                                                                        <span class="fw-bold">BI</span><br>
                                                                        <span class="fw-bold">BIIU</span><br>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <span class="fw-bold">${presentase_perpanjangan_a[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_perpanjangan_au[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_perpanjangan_c[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_perpanjangan_c1[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_perpanjangan_c2[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_perpanjangan_d[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_perpanjangan_d1[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_perpanjangan_b1[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_perpanjangan_b1u[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_perpanjangan_b2[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_perpanjangan_b2u[dataPointIndex]}%</span><br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <span class="fw-bold">Peningkatan</span><br>
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <span class="fw-bold">AU</span><br>
                                                                        <span class="fw-bold">BI</span><br>
                                                                        <span class="fw-bold">BIU</span><br>
                                                                        <span class="fw-bold">BII</span><br>
                                                                        <span class="fw-bold">BIIU</span><br>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <span class="fw-bold">${presentase_peningkatan_au[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_peningkatan_b1[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_peningkatan_b1u[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_peningkatan_b2[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_peningkatan_b2u[dataPointIndex]}%</span><br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div> 
                                                    
                                               
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                            <div class="col-md-4 ms-1">
                                                                <span class="fw-bold">Baru</span><br>
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <span class="fw-bold">A</span><br>
                                                                        <span class="fw-bold">C</span><br>
                                                                        <span class="fw-bold">CI</span><br>
                                                                        <span class="fw-bold">CII</span><br>
                                                                        <span class="fw-bold">D</span><br>
                                                                        <span class="fw-bold">DI</span><br>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <span class="fw-bold">${nf.format(baru_a[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(baru_c[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(baru_c1[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(baru_c2[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(baru_d[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(baru_d1[dataPointIndex])}</span><br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 ms-n3 me-2">
                                                                <span class="fw-bold">Perpanjangan</span><br>
                                                                <div class="row ms-2">
                                                                    <div class="col-md-2">
                                                                        <span class="fw-bold">A</span><br>
                                                                        <span class="fw-bold">AU</span><br>
                                                                        <span class="fw-bold">C</span><br>
                                                                        <span class="fw-bold">CI</span><br>
                                                                        <span class="fw-bold">CII</span><br>
                                                                        <span class="fw-bold">D</span><br>
                                                                        <span class="fw-bold">DI</span><br>
                                                                        <span class="fw-bold">BI</span><br>
                                                                        <span class="fw-bold">BIU</span><br>
                                                                        <span class="fw-bold">BI</span><br>
                                                                        <span class="fw-bold">BIIU</span><br>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <span class="fw-bold">${nf.format(perpanjangan_a[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_au[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_c[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_c1[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_c2[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_d[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_d1[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_b1[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_b1u[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_b2[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_b2u[dataPointIndex])}</span><br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <span class="fw-bold">Peningkatan</span><br>
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <span class="fw-bold">AU</span><br>
                                                                        <span class="fw-bold">BI</span><br>
                                                                        <span class="fw-bold">BIU</span><br>
                                                                        <span class="fw-bold">BII</span><br>
                                                                        <span class="fw-bold">BIIU</span><br>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <span class="fw-bold">${nf.format(peningkatan_au[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(peningkatan_b1[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(peningkatan_b1u[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(peningkatan_b2[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(peningkatan_b2u[dataPointIndex])}</span><br>
                                                                    </div>
                                                                </div>
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
                var ditregidentsim = new ApexCharts(document.querySelector("#chart1"), ditregidentsim);
                ditregidentsim.render();
            }
        })

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>ditregident/getChartBpkb",
            data: {
                start_date: firstDay,
                end_date: lastDay,
                filter: 'month'
            },
            dataType: "JSON",
            success: function(result) {
                let nf = new Intl.NumberFormat('en-US');

                let polda_month = result.data.polda_month
                let bbn_1 = result.data.bbn_1
                let presentase_bbn_1 = result.data.presentase_bbn_1
                let bbn_2 = result.data.bbn_2
                let presentase_bbn_2 = result.data.presentase_bbn_2
                let mutasi_masuk = result.data.mutasi_masuk
                let presentase_mutasi_masuk = result.data.presentase_mutasi_masuk
                let perubahan_pergantian = result.data.perubahan_pergantian
                let presentase_perubahan_pergantian = result.data.presentase_perubahan_pergantian
                let mutasi_keluar = result.data.mutasi_keluar
                let presentase_mutasi_keluar = result.data.presentase_mutasi_keluar
                $('#titlebpkbmonth').html(`<h4 class="card-title mb-0 text-uppercase">PERBANDINGAN DATA BPKB BULANAN</h4>`);

                var ditregidentbpkbmonth = {
                    series: [{
                        name: "BBN 1",
                        data: bbn_1
                    }, {
                        name: "BBN 2",
                        data: bbn_2
                    }, {
                        name: "Mutasi Masuk",
                        data: mutasi_masuk
                    }, {
                        name: "Perubahan Pergantian",
                        data: perubahan_pergantian
                    }, {
                        name: "Mutasi Keluar",
                        data: mutasi_keluar
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
                                bbn_1_sebelumnya = bbn_1[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                bbn_1_sebelumnya = bbn_1[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                bbn_1_sebelumnya = bbn_1[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                bbn_1_sebelumnya = bbn_1[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                bbn_1_sebelumnya = bbn_1[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                bbn_1_sebelumnya = bbn_1[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                bbn_1_sebelumnya = bbn_1[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                bbn_1_sebelumnya = bbn_1[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                bbn_1_sebelumnya = bbn_1[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                bbn_1_sebelumnya = bbn_1[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                bbn_1_sebelumnya = bbn_1[10];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                bbn_2_sebelumnya = bbn_2[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                bbn_2_sebelumnya = bbn_2[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                bbn_2_sebelumnya = bbn_2[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                bbn_2_sebelumnya = bbn_2[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                bbn_2_sebelumnya = bbn_2[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                bbn_2_sebelumnya = bbn_2[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                bbn_2_sebelumnya = bbn_2[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                bbn_2_sebelumnya = bbn_2[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                bbn_2_sebelumnya = bbn_2[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                bbn_2_sebelumnya = bbn_2[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                bbn_2_sebelumnya = bbn_2[10];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                mutasi_masuk_sebelumnya = mutasi_masuk[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                mutasi_masuk_sebelumnya = mutasi_masuk[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                mutasi_masuk_sebelumnya = mutasi_masuk[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                mutasi_masuk_sebelumnya = mutasi_masuk[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                mutasi_masuk_sebelumnya = mutasi_masuk[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                mutasi_masuk_sebelumnya = mutasi_masuk[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                mutasi_masuk_sebelumnya = mutasi_masuk[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                mutasi_masuk_sebelumnya = mutasi_masuk[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                mutasi_masuk_sebelumnya = mutasi_masuk[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                mutasi_masuk_sebelumnya = mutasi_masuk[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                mutasi_masuk_sebelumnya = mutasi_masuk[10];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                perubahan_pergantian_sebelumnya = perubahan_pergantian[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                perubahan_pergantian_sebelumnya = perubahan_pergantian[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                perubahan_pergantian_sebelumnya = perubahan_pergantian[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                perubahan_pergantian_sebelumnya = perubahan_pergantian[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                perubahan_pergantian_sebelumnya = perubahan_pergantian[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                perubahan_pergantian_sebelumnya = perubahan_pergantian[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                perubahan_pergantian_sebelumnya = perubahan_pergantian[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                perubahan_pergantian_sebelumnya = perubahan_pergantian[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                perubahan_pergantian_sebelumnya = perubahan_pergantian[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                perubahan_pergantian_sebelumnya = perubahan_pergantian[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                perubahan_pergantian_sebelumnya = perubahan_pergantian[10];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                mutasi_keluar_sebelumnya = mutasi_keluar[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                mutasi_keluar_sebelumnya = mutasi_keluar[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                mutasi_keluar_sebelumnya = mutasi_keluar[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                mutasi_keluar_sebelumnya = mutasi_keluar[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                mutasi_keluar_sebelumnya = mutasi_keluar[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                mutasi_keluar_sebelumnya = mutasi_keluar[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                mutasi_keluar_sebelumnya = mutasi_keluar[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                mutasi_keluar_sebelumnya = mutasi_keluar[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                mutasi_keluar_sebelumnya = mutasi_keluar[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                mutasi_keluar_sebelumnya = mutasi_keluar[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                mutasi_keluar_sebelumnya = mutasi_keluar[5];
                            }

                            return (
                                `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 50rem; height:10rem;">`:'<div style="width: 20rem; height:10rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                    <div class="my-2  text-center">   
                                                        <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                    </div>
                                                        <div class="row">
                                                            <div class="col-md-7 ms-1">
                                                                <span class="fw-bold">BBN I</span><br>
                                                                <span class="fw-bold">BBN II</span><br>
                                                                <span class="fw-bold">Mutasi Masuk</span><br>
                                                                <span class="fw-bold">Perubahan Pergantian</span><br>
                                                                <span class="fw-bold">Mutasi Keluar</span><br>
                                                            </div>
                                                            <div class="col-md-1">
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                            </div>
                                                            <div class="col-md-4 ms-n1">
                                                                <span class="fw-bold">${nf.format(bbn_1_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(bbn_2_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(mutasi_masuk_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(perubahan_pergantian_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(mutasi_keluar_sebelumnya)}</span><br>
                                                            </div>
                                                        </div>
                                                </div> 
                                                <div class="col-md-4">
                                                    <div style ="border-left: 2px solid silver; height: 500px; position: absolute; left: -5%; top: 0;"></div>
                                                    <div class="my-2  text-center"">   
                                                        <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                    </div>
                                                        <div class="row">
                                                            <div class="col-md-7">
                                                                <span class="fw-bold">BBN I</span><br>
                                                                <span class="fw-bold">BBN II</span><br>
                                                                <span class="fw-bold">Mutasi Keluar</span><br>
                                                                <span class="fw-bold">Perubahan Pergantian</span><br>
                                                                <span class="fw-bold">Mutasi Masuk</span><br>
                                                            </div>
                                                            <div class="col-md-1">
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <span class="fw-bold">${nf.format(bbn_1[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(bbn_2[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(mutasi_masuk[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(perubahan_pergantian[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(mutasi_keluar[dataPointIndex])}</span><br>
                                                            </div>
                                                        </div>
                                                </div> 

                                                <div class="col-md-4">
                                                    <div style ="border-left: 2px solid silver; height: 500px; position: absolute; left: -5%; top: 0;"></div>
                                                        <div class="my-2  text-center"">   
                                                            <span class="fs-6 fw-bold">Presentase</span>
                                                        </div>
                                                        <div class="text-center">
                                                            <span class="fw-bold">${presentase_bbn_1[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_bbn_2[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_mutasi_masuk[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_perubahan_pergantian[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_mutasi_keluar[dataPointIndex]}%</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                ` : `
                                                <div class="col-md-12">
                                                    <div class="my-2 text-center">    
                                                        <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-7 ms-1">
                                                            <span class="fw-bold">BBN I</span><br>
                                                            <span class="fw-bold">BBN II</span><br>
                                                            <span class="fw-bold">Mutasi Keluar</span><br>
                                                            <span class="fw-bold">Perubahan Pergantian</span><br>
                                                            <span class="fw-bold">Mutasi Masuk</span><br>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <span class="fw-bold">:</span><br>
                                                            <span class="fw-bold">:</span><br>
                                                            <span class="fw-bold">:</span><br>
                                                            <span class="fw-bold">:</span><br>
                                                            <span class="fw-bold">:</span><br>
                                                        </div>
                                                        <div class="col-md-4 ms-n1" >
                                                            <span class="fw-bold">${nf.format(bbn_1[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(bbn_2[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(mutasi_masuk[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(perubahan_pergantian[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(mutasi_keluar[dataPointIndex])}</span><br>
                                                        </div>
                                                    </div>
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

                var ditregidentbpkbmonth = new ApexCharts(document.querySelector("#chart2"), ditregidentbpkbmonth);
                ditregidentbpkbmonth.render();
            }
        })

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>ditregident/getChartStnk",
            data: {
                start_date: firstDay,
                end_date: lastDay,
                filter: 'month'
            },
            dataType: "JSON",
            success: function(result) {
                let nf = new Intl.NumberFormat('en-US');
                let polda_month = result.data.polda_month
                let bbn_1_r2 = result.data.bbn_1_r2
                let presentase_bbn_1_r2 = result.data.presentase_bbn_1_r2
                let bbn_1_r4 = result.data.bbn_1_r4
                let presentase_bbn_1_r4 = result.data.presentase_bbn_1_r4
                let perubahan_r2 = result.data.perubahan_r2
                let presentase_perubahan_r2 = result.data.presentase_perubahan_r2
                let perubahan_r4 = result.data.perubahan_r4
                let presentase_perubahan_r4 = result.data.presentase_perubahan_r4
                let perpanjangan_r2 = result.data.perpanjangan_r2
                let presentase_perpanjangan_r2 = result.data.presentase_perpanjangan_r2
                let perpanjangan_r4 = result.data.perpanjangan_r4
                let presentase_perpanjangan_r4 = result.data.presentase_perpanjangan_r4
                let mutasi_masuk_r2 = result.data.mutasi_masuk_r2
                let presentase_mutasi_masuk_r2 = result.data.presentase_mutasi_masuk_r2
                let mutasi_masuk_r4 = result.data.mutasi_masuk_r4
                let presentase_mutasi_masuk_r4 = result.data.presentase_mutasi_masuk_r4
                let mutasi_keluar_r2 = result.data.mutasi_keluar_r2
                let presentase_mutasi_keluar_r2 = result.data.presentase_mutasi_keluar_r2
                let mutasi_keluar_r4 = result.data.mutasi_keluar_r4
                let presentase_mutasi_keluar_r4 = result.data.presentase_mutasi_keluar_r4
                let pengesahan_r2 = result.data.pengesahan_r2
                let presentase_pengesahan_r2 = result.data.presentase_pengesahan_r2
                let pengesahan_r4 = result.data.pengesahan_r4
                let presentase_pengesahan_r4 = result.data.presentase_pengesahan_r4
                let samolnas_r2 = result.data.samolnas_r2
                let presentase_samolnas_r2 = result.data.presentase_samolnas_r2
                let samolnas_r4 = result.data.samolnas_r4
                let presentase_samolnas_r4 = result.data.presentase_samolnas_r4
                $('#titlestnkmonth').html(`<h4 class="card-title mb-0 text-uppercase">PERBANDINGAN DATA STNK BULANAN</h4>`);

                var ditregidentstnkmonth = {
                    series: [{
                        name: "BBN 1 R2",
                        data: bbn_1_r2
                    }, {
                        name: "BBN 1 R4",
                        data: bbn_1_r4
                    }, {
                        name: "Perubahan R2",
                        data: perubahan_r2
                    }, {
                        name: "Perubahan R4",
                        data: perubahan_r4
                    }, {
                        name: "Perpanjangan R2",
                        data: perpanjangan_r2
                    }, {
                        name: "Perpanjangan R4",
                        data: perpanjangan_r4
                    }, {
                        name: "Mutasi Masuk R2",
                        data: mutasi_masuk_r2
                    }, {
                        name: "Mutasi Masuk R4",
                        data: mutasi_masuk_r4
                    }, {
                        name: "Mutasi Keluar R2",
                        data: mutasi_keluar_r2
                    }, {
                        name: "Mutasi Keluar R4",
                        data: mutasi_keluar_r4
                    }, {
                        name: "Pengesahan R2",
                        data: pengesahan_r2
                    }, {
                        name: "Pengesahan R4",
                        data: pengesahan_r4
                    }, {
                        name: "Samolnas R2",
                        data: samolnas_r2
                    }, {
                        name: "Samolnas R4",
                        data: samolnas_r4
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
                                bbn_1_r2_sebelumnya = bbn_1_r2[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                bbn_1_r2_sebelumnya = bbn_1_r2[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                bbn_1_r2_sebelumnya = bbn_1_r2[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                bbn_1_r2_sebelumnya = bbn_1_r2[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                bbn_1_r2_sebelumnya = bbn_1_r2[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                bbn_1_r2_sebelumnya = bbn_1_r2[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                bbn_1_r2_sebelumnya = bbn_1_r2[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                bbn_1_r2_sebelumnya = bbn_1_r2[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                bbn_1_r2_sebelumnya = bbn_1_r2[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                bbn_1_r2_sebelumnya = bbn_1_r2[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                bbn_1_r2_sebelumnya = bbn_1_r2[10];
                            }
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                bbn_1_r4_sebelumnya = bbn_1_r4[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                bbn_1_r4_sebelumnya = bbn_1_r4[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                bbn_1_r4_sebelumnya = bbn_1_r4[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                bbn_1_r4_sebelumnya = bbn_1_r4[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                bbn_1_r4_sebelumnya = bbn_1_r4[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                bbn_1_r4_sebelumnya = bbn_1_r4[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                bbn_1_r4_sebelumnya = bbn_1_r4[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                bbn_1_r4_sebelumnya = bbn_1_r4[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                bbn_1_r4_sebelumnya = bbn_1_r4[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                bbn_1_r4_sebelumnya = bbn_1_r4[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                bbn_1_r4_sebelumnya = bbn_1_r4[10];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                perubahan_r2_sebelumnya = perubahan_r2[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                perubahan_r2_sebelumnya = perubahan_r2[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                perubahan_r2_sebelumnya = perubahan_r2[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                perubahan_r2_sebelumnya = perubahan_r2[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                perubahan_r2_sebelumnya = perubahan_r2[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                perubahan_r2_sebelumnya = perubahan_r2[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                perubahan_r2_sebelumnya = perubahan_r2[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                perubahan_r2_sebelumnya = perubahan_r2[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                perubahan_r2_sebelumnya = perubahan_r2[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                perubahan_r2_sebelumnya = perubahan_r2[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                perubahan_r2_sebelumnya = perubahan_r2[10];
                            }
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                perubahan_r4_sebelumnya = perubahan_r4[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                perubahan_r4_sebelumnya = perubahan_r4[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                perubahan_r4_sebelumnya = perubahan_r4[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                perubahan_r4_sebelumnya = perubahan_r4[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                perubahan_r4_sebelumnya = perubahan_r4[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                perubahan_r4_sebelumnya = perubahan_r4[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                perubahan_r4_sebelumnya = perubahan_r4[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                perubahan_r4_sebelumnya = perubahan_r4[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                perubahan_r4_sebelumnya = perubahan_r4[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                perubahan_r4_sebelumnya = perubahan_r4[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                perubahan_r4_sebelumnya = perubahan_r4[10];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                mutasi_masuk_r2_sebelumnya = mutasi_masuk_r2[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                mutasi_masuk_r2_sebelumnya = mutasi_masuk_r2[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                mutasi_masuk_r2_sebelumnya = mutasi_masuk_r2[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                mutasi_masuk_r2_sebelumnya = mutasi_masuk_r2[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                mutasi_masuk_r2_sebelumnya = mutasi_masuk_r2[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                mutasi_masuk_r2_sebelumnya = mutasi_masuk_r2[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                mutasi_masuk_r2_sebelumnya = mutasi_masuk_r2[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                mutasi_masuk_r2_sebelumnya = mutasi_masuk_r2[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                mutasi_masuk_r2_sebelumnya = mutasi_masuk_r2[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                mutasi_masuk_r2_sebelumnya = mutasi_masuk_r2[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                mutasi_masuk_r2_sebelumnya = mutasi_masuk_r2[10];
                            }
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                mutasi_masuk_r4_sebelumnya = mutasi_masuk_r4[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                mutasi_masuk_r4_sebelumnya = mutasi_masuk_r4[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                mutasi_masuk_r4_sebelumnya = mutasi_masuk_r4[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                mutasi_masuk_r4_sebelumnya = mutasi_masuk_r4[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                mutasi_masuk_r4_sebelumnya = mutasi_masuk_r4[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                mutasi_masuk_r4_sebelumnya = mutasi_masuk_r4[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                mutasi_masuk_r4_sebelumnya = mutasi_masuk_r4[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                mutasi_masuk_r4_sebelumnya = mutasi_masuk_r4[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                mutasi_masuk_r4_sebelumnya = mutasi_masuk_r4[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                mutasi_masuk_r4_sebelumnya = mutasi_masuk_r4[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                mutasi_masuk_r4_sebelumnya = mutasi_masuk_r4[10];
                            }
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                mutasi_keluar_r2_sebelumnya = mutasi_keluar_r2[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                mutasi_keluar_r2_sebelumnya = mutasi_keluar_r2[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                mutasi_keluar_r2_sebelumnya = mutasi_keluar_r2[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                mutasi_keluar_r2_sebelumnya = mutasi_keluar_r2[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                mutasi_keluar_r2_sebelumnya = mutasi_keluar_r2[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                mutasi_keluar_r2_sebelumnya = mutasi_keluar_r2[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                mutasi_keluar_r2_sebelumnya = mutasi_keluar_r2[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                mutasi_keluar_r2_sebelumnya = mutasi_keluar_r2[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                mutasi_keluar_r2_sebelumnya = mutasi_keluar_r2[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                mutasi_keluar_r2_sebelumnya = mutasi_keluar_r2[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                mutasi_keluar_r2_sebelumnya = mutasi_keluar_r2[10];
                            }
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                mutasi_keluar_r4_sebelumnya = mutasi_keluar_r4[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                mutasi_keluar_r4_sebelumnya = mutasi_keluar_r4[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                mutasi_keluar_r4_sebelumnya = mutasi_keluar_r4[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                mutasi_keluar_r4_sebelumnya = mutasi_keluar_r4[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                mutasi_keluar_r4_sebelumnya = mutasi_keluar_r4[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                mutasi_keluar_r4_sebelumnya = mutasi_keluar_r4[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                mutasi_keluar_r4_sebelumnya = mutasi_keluar_r4[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                mutasi_keluar_r4_sebelumnya = mutasi_keluar_r4[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                mutasi_keluar_r4_sebelumnya = mutasi_keluar_r4[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                mutasi_keluar_r4_sebelumnya = mutasi_keluar_r4[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                mutasi_keluar_r4_sebelumnya = mutasi_keluar_r4[10];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                perpanjangan_r2_sebelumnya = perpanjangan_r2[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                perpanjangan_r2_sebelumnya = perpanjangan_r2[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                perpanjangan_r2_sebelumnya = perpanjangan_r2[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                perpanjangan_r2_sebelumnya = perpanjangan_r2[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                perpanjangan_r2_sebelumnya = perpanjangan_r2[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                perpanjangan_r2_sebelumnya = perpanjangan_r2[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                perpanjangan_r2_sebelumnya = perpanjangan_r2[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                perpanjangan_r2_sebelumnya = perpanjangan_r2[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                perpanjangan_r2_sebelumnya = perpanjangan_r2[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                perpanjangan_r2_sebelumnya = perpanjangan_r2[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                perpanjangan_r2_sebelumnya = perpanjangan_r2[10];
                            }
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                perpanjangan_r4_sebelumnya = perpanjangan_r4[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                perpanjangan_r4_sebelumnya = perpanjangan_r4[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                perpanjangan_r4_sebelumnya = perpanjangan_r4[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                perpanjangan_r4_sebelumnya = perpanjangan_r4[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                perpanjangan_r4_sebelumnya = perpanjangan_r4[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                perpanjangan_r4_sebelumnya = perpanjangan_r4[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                perpanjangan_r4_sebelumnya = perpanjangan_r4[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                perpanjangan_r4_sebelumnya = perpanjangan_r4[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                perpanjangan_r4_sebelumnya = perpanjangan_r4[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                perpanjangan_r4_sebelumnya = perpanjangan_r4[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                perpanjangan_r4_sebelumnya = perpanjangan_r4[10];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                pengesahan_r2_sebelumnya = pengesahan_r2[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                pengesahan_r2_sebelumnya = pengesahan_r2[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                pengesahan_r2_sebelumnya = pengesahan_r2[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                pengesahan_r2_sebelumnya = pengesahan_r2[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                pengesahan_r2_sebelumnya = pengesahan_r2[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                pengesahan_r2_sebelumnya = pengesahan_r2[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                pengesahan_r2_sebelumnya = pengesahan_r2[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                pengesahan_r2_sebelumnya = pengesahan_r2[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                pengesahan_r2_sebelumnya = pengesahan_r2[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                pengesahan_r2_sebelumnya = pengesahan_r2[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                pengesahan_r2_sebelumnya = pengesahan_r2[10];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                pengesahan_r4_sebelumnya = pengesahan_r4[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                pengesahan_r4_sebelumnya = pengesahan_r4[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                pengesahan_r4_sebelumnya = pengesahan_r4[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                pengesahan_r4_sebelumnya = pengesahan_r4[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                pengesahan_r4_sebelumnya = pengesahan_r4[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                pengesahan_r4_sebelumnya = pengesahan_r4[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                pengesahan_r4_sebelumnya = pengesahan_r4[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                pengesahan_r4_sebelumnya = pengesahan_r4[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                pengesahan_r4_sebelumnya = pengesahan_r4[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                pengesahan_r4_sebelumnya = pengesahan_r4[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                pengesahan_r4_sebelumnya = pengesahan_r4[10];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                samolnas_r2_sebelumnya = samolnas_r2[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                samolnas_r2_sebelumnya = samolnas_r2[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                samolnas_r2_sebelumnya = samolnas_r2[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                samolnas_r2_sebelumnya = samolnas_r2[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                samolnas_r2_sebelumnya = samolnas_r2[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                samolnas_r2_sebelumnya = samolnas_r2[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                samolnas_r2_sebelumnya = samolnas_r2[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                samolnas_r2_sebelumnya = samolnas_r2[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                samolnas_r2_sebelumnya = samolnas_r2[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                samolnas_r2_sebelumnya = samolnas_r2[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                samolnas_r2_sebelumnya = samolnas_r2[10];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                samolnas_r4_sebelumnya = samolnas_r4[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                samolnas_r4_sebelumnya = samolnas_r4[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                samolnas_r4_sebelumnya = samolnas_r4[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                samolnas_r4_sebelumnya = samolnas_r4[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                samolnas_r4_sebelumnya = samolnas_r4[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                samolnas_r4_sebelumnya = samolnas_r4[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                samolnas_r4_sebelumnya = samolnas_r4[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                samolnas_r4_sebelumnya = samolnas_r4[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                samolnas_r4_sebelumnya = samolnas_r4[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                samolnas_r4_sebelumnya = samolnas_r4[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                samolnas_r4_sebelumnya = samolnas_r4[10];
                            }

                            return (
                                `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 50rem; height:25rem;">`:'<div style="width: 20rem; height:25rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                    <div class="my-2  text-center">   
                                                        <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                    </div>
                                                        <div class="row">
                                                            <div class="col-md-7 ms-1">
                                                                <span class="fw-bold">BBN I R2</span><br>
                                                                <span class="fw-bold">BBN I R4</span><br>
                                                                <span class="fw-bold">Perubahan R2</span><br>
                                                                <span class="fw-bold">Perubahan R4</span><br>
                                                                <span class="fw-bold">Perpanjangan R2</span><br>
                                                                <span class="fw-bold">Perpanjangan R4</span><br>
                                                                <span class="fw-bold">Mutasi Masuk R2</span><br>
                                                                <span class="fw-bold">Mutasi Masuk R4</span><br>
                                                                <span class="fw-bold">Mutasi Keluar R2</span><br>
                                                                <span class="fw-bold">Mutasi Keluar R4</span><br>
                                                                <span class="fw-bold">Pengesahan R2</span><br>
                                                                <span class="fw-bold">Pengesahan R4</span><br>
                                                                <span class="fw-bold">Samolnas R2</span><br>
                                                                <span class="fw-bold">Samolnas R4</span><br>
                                                            </div>
                                                            <div class="col-md-1">
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                            </div>
                                                            <div class="col-md-4 ms-n1">
                                                                <span class="fw-bold">${nf.format(bbn_1_r2_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(bbn_1_r4_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(perubahan_r2_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(perubahan_r4_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(perpanjangan_r2_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(perpanjangan_r4_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(mutasi_masuk_r2_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(mutasi_masuk_r4_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(mutasi_keluar_r2_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(mutasi_keluar_r4_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(pengesahan_r2_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(pengesahan_r4_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(samolnas_r2_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(samolnas_r4_sebelumnya)}</span><br>
                                                            </div>
                                                        </div>
                                                </div> 
                                                <div class="col-md-4">
                                                    <div style ="border-left: 2px solid silver; height: 500px; position: absolute; left: -5%; top: 0;"></div>
                                                    <div class="my-2  text-center"">   
                                                        <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                    </div>
                                                        <div class="row">
                                                            <div class="col-md-7">
                                                                <span class="fw-bold">BBN I R2</span><br>
                                                                <span class="fw-bold">BBN I R4</span><br>
                                                                <span class="fw-bold">Perubahan R2</span><br>
                                                                <span class="fw-bold">Perubahan R4</span><br>
                                                                <span class="fw-bold">Perpanjangan R2</span><br>
                                                                <span class="fw-bold">Perpanjangan R4</span><br>
                                                                <span class="fw-bold">Mutasi Masuk R2</span><br>
                                                                <span class="fw-bold">Mutasi Masuk R4</span><br>
                                                                <span class="fw-bold">Mutasi Keluar R2</span><br>
                                                                <span class="fw-bold">Mutasi Keluar R4</span><br>
                                                                <span class="fw-bold">Pengesahan R2</span><br>
                                                                <span class="fw-bold">Pengesahan R4</span><br>
                                                                <span class="fw-bold">Samolnas R2</span><br>
                                                                <span class="fw-bold">Samolnas R4</span><br>
                                                            </div>
                                                            <div class="col-md-1">
                                                            <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <span class="fw-bold">${nf.format(bbn_1_r2[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(bbn_1_r4[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(perubahan_r2[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(perubahan_r4[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(perpanjangan_r2[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(perpanjangan_r4[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(mutasi_masuk_r2[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(mutasi_masuk_r4[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(mutasi_keluar_r2[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(mutasi_keluar_r4[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(pengesahan_r2[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(pengesahan_r4[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(samolnas_r2[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(samolnas_r4[dataPointIndex])}</span><br>
                                                            </div>
                                                        </div>
                                                </div> 

                                                <div class="col-md-4">
                                                    <div style ="border-left: 2px solid silver; height: 500px; position: absolute; left: -5%; top: 0;"></div>
                                                        <div class="my-2  text-center"">   
                                                            <span class="fs-6 fw-bold">Presentase</span>
                                                        </div>
                                                        <div class="text-center">
                                                            <span class="fw-bold">${presentase_bbn_1_r2[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_bbn_1_r4[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_perubahan_r2[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_perubahan_r4[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_perpanjangan_r2[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_perpanjangan_r4[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_mutasi_masuk_r2[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_mutasi_masuk_r4[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_mutasi_keluar_r2[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_mutasi_keluar_r4[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_pengesahan_r2[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_pengesahan_r4[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_samolnas_r2[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_samolnas_r4[dataPointIndex]}%</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                ` : `
                                                <div class="col-md-12">
                                                    <div class="my-2 text-center">    
                                                        <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-7 ms-1">
                                                                <span class="fw-bold">BBN I R2</span><br>
                                                                <span class="fw-bold">BBN I R4</span><br>
                                                                <span class="fw-bold">Perubahan R2</span><br>
                                                                <span class="fw-bold">Perubahan R4</span><br>
                                                                <span class="fw-bold">Perpanjangan R2</span><br>
                                                                <span class="fw-bold">Perpanjangan R4</span><br>
                                                                <span class="fw-bold">Mutasi Masuk R2</span><br>
                                                                <span class="fw-bold">Mutasi Masuk R4</span><br>
                                                                <span class="fw-bold">Mutasi Keluar R2</span><br>
                                                                <span class="fw-bold">Mutasi Keluar R4</span><br>
                                                                <span class="fw-bold">Pengesahan R2</span><br>
                                                                <span class="fw-bold">Pengesahan R4</span><br>
                                                                <span class="fw-bold">Samolnas R2</span><br>
                                                                <span class="fw-bold">Samolnas R4</span><br>
                                                            </div>
                                                            <div class="col-md-1">
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                            </div>
                                                        <div class="col-md-4 ms-n1" >
                                                            <span class="fw-bold">${nf.format(bbn_1_r2[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(bbn_1_r4[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(perubahan_r2[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(perubahan_r4[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(perpanjangan_r2[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(perpanjangan_r4[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(mutasi_masuk_r2[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(mutasi_masuk_r4[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(mutasi_keluar_r2[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(mutasi_keluar_r4[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(pengesahan_r2[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(pengesahan_r4[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(samolnas_r2[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(samolnas_r4[dataPointIndex])}</span><br>
                                                        </div>
                                                    </div>
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

                var ditregidentstnkmonth = new ApexCharts(document.querySelector("#chart3"), ditregidentstnkmonth);
                ditregidentstnkmonth.render();



            }
        })

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>ditregident/getChartSbst",
            data: {
                start_date: firstDay,
                end_date: lastDay,
                filter: 'month'
            },
            dataType: "JSON",
            success: function(result) {
                let nf = new Intl.NumberFormat('en-US');
                let polda_month = result.data.polda_month
                let sim = result.data.sim
                let presentase_sim = result.data.presentase_sim
                let bpkb = result.data.bpkb
                let presentase_bpkb = result.data.presentase_bpkb
                let stnk = result.data.stnk
                let presentase_stnk = result.data.presentase_stnk
                let tnkb = result.data.tnkb
                let presentase_tnkb = result.data.presentase_tnkb
                let tckb = result.data.tckb
                let presentase_tckb = result.data.presentase_tckb
                let stck = result.data.stck
                let presentase_stck = result.data.presentase_stck
                let skukp = result.data.skukp
                let presentase_skukp = result.data.presentase_skukp
                $('#titlesbstmonth').html(`<h4 class="card-title mb-0 text-uppercase">PERBANDINGAN DATA SBST BULANAN</h4>`);

                var ditregidentsbstmonth = {
                    series: [{
                        name: "SIM",
                        data: sim
                    }, {
                        name: "BPKB",
                        data: bpkb
                    }, {
                        name: "STNK",
                        data: stnk
                    }, {
                        name: "TNKB",
                        data: tnkb
                    }, {
                        name: "TCKB",
                        data: tckb
                    }, {
                        name: "STCK",
                        data: stck
                    }, {
                        name: "SKUKP",
                        data: skukp
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
                                sim_sebelumnya = sim[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                sim_sebelumnya = sim[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                sim_sebelumnya = sim[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                sim_sebelumnya = sim[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                sim_sebelumnya = sim[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                sim_sebelumnya = sim[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                sim_sebelumnya = sim[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                sim_sebelumnya = sim[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                sim_sebelumnya = sim[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                sim_sebelumnya = sim[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                sim_sebelumnya = sim[10];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                bpkb_sebelumnya = bpkb[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                bpkb_sebelumnya = bpkb[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                bpkb_sebelumnya = bpkb[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                bpkb_sebelumnya = bpkb[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                bpkb_sebelumnya = bpkb[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                bpkb_sebelumnya = bpkb[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                bpkb_sebelumnya = bpkb[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                bpkb_sebelumnya = bpkb[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                bpkb_sebelumnya = bpkb[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                bpkb_sebelumnya = bpkb[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                bpkb_sebelumnya = bpkb[10];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                stnk_sebelumnya = stnk[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                stnk_sebelumnya = stnk[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                stnk_sebelumnya = stnk[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                stnk_sebelumnya = stnk[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                stnk_sebelumnya = stnk[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                stnk_sebelumnya = stnk[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                stnk_sebelumnya = stnk[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                stnk_sebelumnya = stnk[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                stnk_sebelumnya = stnk[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                stnk_sebelumnya = stnk[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                stnk_sebelumnya = stnk[10];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                tnkb_sebelumnya = tnkb[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                tnkb_sebelumnya = tnkb[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                tnkb_sebelumnya = tnkb[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                tnkb_sebelumnya = tnkb[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                tnkb_sebelumnya = tnkb[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                tnkb_sebelumnya = tnkb[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                tnkb_sebelumnya = tnkb[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                tnkb_sebelumnya = tnkb[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                tnkb_sebelumnya = tnkb[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                tnkb_sebelumnya = tnkb[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                tnkb_sebelumnya = tnkb[10];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                tckb_sebelumnya = tckb[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                tckb_sebelumnya = tckb[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                tckb_sebelumnya = tckb[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                tckb_sebelumnya = tckb[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                tckb_sebelumnya = tckb[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                tckb_sebelumnya = tckb[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                tckb_sebelumnya = tckb[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                tckb_sebelumnya = tckb[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                tckb_sebelumnya = tckb[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                tckb_sebelumnya = tckb[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                tckb_sebelumnya = tckb[10];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                stck_sebelumnya = stck[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                stck_sebelumnya = stck[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                stck_sebelumnya = stck[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                stck_sebelumnya = stck[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                stck_sebelumnya = stck[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                stck_sebelumnya = stck[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                stck_sebelumnya = stck[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                stck_sebelumnya = stck[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                stck_sebelumnya = stck[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                stck_sebelumnya = stck[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                stck_sebelumnya = stck[10];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                skukp_sebelumnya = skukp[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                skukp_sebelumnya = skukp[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                skukp_sebelumnya = skukp[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                skukp_sebelumnya = skukp[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                skukp_sebelumnya = skukp[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                skukp_sebelumnya = skukp[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                skukp_sebelumnya = skukp[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                skukp_sebelumnya = skukp[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                skukp_sebelumnya = skukp[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                skukp_sebelumnya = skukp[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                skukp_sebelumnya = skukp[10];
                            }

                            return (
                                `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 50rem; height:10rem;">`:'<div style="width: 20rem; height:10rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                    <div class="my-2  text-center">   
                                                        <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                    </div>
                                                        <div class="row">
                                                            <div class="col-md-7 ms-1">
                                                                <span class="fw-bold">SIM</span><br>
                                                                <span class="fw-bold">BPKB</span><br>
                                                                <span class="fw-bold">STNK</span><br>
                                                                <span class="fw-bold">TNKB</span><br>
                                                                <span class="fw-bold">TCKB</span><br>
                                                                <span class="fw-bold">STCK</span><br>
                                                                <span class="fw-bold">SKUKP</span><br>
                                                            </div>
                                                            <div class="col-md-1">
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                            </div>
                                                            <div class="col-md-4 ms-n1">
                                                                <span class="fw-bold">${nf.format(sim_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(bpkb_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(stnk_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(tnkb_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(tckb_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(stck_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(skukp_sebelumnya)}</span><br>
                                                            </div>
                                                        </div>
                                                </div> 
                                                <div class="col-md-4">
                                                    <div style ="border-left: 2px solid silver; height: 500px; position: absolute; left: -5%; top: 0;"></div>
                                                    <div class="my-2  text-center"">   
                                                        <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                    </div>
                                                        <div class="row">
                                                            <div class="col-md-7">
                                                                <span class="fw-bold">SIM</span><br>
                                                                <span class="fw-bold">BPKB</span><br>
                                                                <span class="fw-bold">STNK</span><br>
                                                                <span class="fw-bold">TNKB</span><br>
                                                                <span class="fw-bold">TCKB</span><br>
                                                                <span class="fw-bold">STCK</span><br>
                                                                <span class="fw-bold">SKUKP</span><br>
                                                            </div>
                                                            <div class="col-md-1">
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <span class="fw-bold">${nf.format(sim[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(bpkb[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(stnk[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(tnkb[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(tckb[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(stck[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(skukp[dataPointIndex])}</span><br>
                                                            </div>
                                                        </div>
                                                </div> 

                                                <div class="col-md-4">
                                                    <div style ="border-left: 2px solid silver; height: 500px; position: absolute; left: -5%; top: 0;"></div>
                                                        <div class="my-2  text-center"">   
                                                            <span class="fs-6 fw-bold">Presentase</span>
                                                        </div>
                                                        <div class="text-center">
                                                            <span class="fw-bold">${presentase_sim[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_bpkb[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_stnk[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_tnkb[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_tckb[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_stck[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_skukp[dataPointIndex]}%</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                ` : `
                                                <div class="col-md-12">
                                                    <div class="my-2 text-center">    
                                                        <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-7 ms-1">
                                                            <span class="fw-bold">SIM</span><br>
                                                            <span class="fw-bold">BPKB</span><br>
                                                            <span class="fw-bold">STNK</span><br>
                                                            <span class="fw-bold">TNKB</span><br>
                                                            <span class="fw-bold">TCKB</span><br>
                                                            <span class="fw-bold">STCK</span><br>
                                                            <span class="fw-bold">SKUKP</span><br></div>
                                                        <div class="col-md-1">
                                                            <span class="fw-bold">:</span><br>
                                                            <span class="fw-bold">:</span><br>
                                                            <span class="fw-bold">:</span><br>
                                                            <span class="fw-bold">:</span><br>
                                                            <span class="fw-bold">:</span><br>
                                                            <span class="fw-bold">:</span><br>
                                                            <span class="fw-bold">:</span><br>
                                                        </div>
                                                        <div class="col-md-4 ms-n1" >
                                                            <span class="fw-bold">${nf.format(sim[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(bpkb[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(stnk[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(tnkb[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(tckb[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(stck[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(skukp[dataPointIndex])}</span><br>
                                                        </div>
                                                    </div>
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

                var ditregidentsbstmonth = new ApexCharts(document.querySelector("#chart4"), ditregidentsbstmonth);
                ditregidentsbstmonth.render();
            }
        })

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>ditregident/getChartRanmor",
            data: {
                start_date: firstDay,
                end_date: lastDay,
                filter: 'month'
            },
            dataType: "JSON",
            success: function(result) {
                let nf = new Intl.NumberFormat('en-US');
                let polda_month = result.data.polda_month
                let mobil_penumpang = result.data.mobil_penumpang
                let presentase_mobil_penumpang = result.data.presentase_mobil_penumpang
                let mobil_bus = result.data.mobil_bus
                let presentase_mobil_bus = result.data.presentase_mobil_bus
                let mobil_barang = result.data.mobil_barang
                let presentase_mobil_barang = result.data.presentase_mobil_barang
                let sepeda_motor = result.data.sepeda_motor
                let presentase_sepeda_motor = result.data.presentase_sepeda_motor
                let ransus = result.data.ransus
                let presentase_ransus = result.data.presentase_ransus
                let stck = result.data.stck
                let presentase_stck = result.data.presentase_stck
                let skukp = result.data.skukp
                let presentase_skukp = result.data.presentase_skukp
                $('#titleranmormonth').html(`<h4 class="card-title mb-0 text-uppercase">PERBANDINGAN DATA RANMOR BULANAN</h4>`);

                var ditregidentranmormonth = {
                    series: [{
                        name: "Mobil Penumpang",
                        data: mobil_penumpang
                    }, {
                        name: "Mobil Bus",
                        data: mobil_bus
                    }, {
                        name: "Mobil Barang",
                        data: mobil_barang
                    }, {
                        name: "Sepeda Motor",
                        data: sepeda_motor
                    }, {
                        name: "Kendaraan Khusus",
                        data: ransus
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
                                mobil_penumpang_sebelumnya = mobil_penumpang[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                mobil_penumpang_sebelumnya = mobil_penumpang[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                mobil_penumpang_sebelumnya = mobil_penumpang[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                mobil_penumpang_sebelumnya = mobil_penumpang[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                mobil_penumpang_sebelumnya = mobil_penumpang[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                mobil_penumpang_sebelumnya = mobil_penumpang[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                mobil_penumpang_sebelumnya = mobil_penumpang[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                mobil_penumpang_sebelumnya = mobil_penumpang[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                mobil_penumpang_sebelumnya = mobil_penumpang[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                mobil_penumpang_sebelumnya = mobil_penumpang[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                mobil_penumpang_sebelumnya = mobil_penumpang[10];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                mobil_bus_sebelumnya = mobil_bus[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                mobil_bus_sebelumnya = mobil_bus[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                mobil_bus_sebelumnya = mobil_bus[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                mobil_bus_sebelumnya = mobil_bus[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                mobil_bus_sebelumnya = mobil_bus[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                mobil_bus_sebelumnya = mobil_bus[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                mobil_bus_sebelumnya = mobil_bus[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                mobil_bus_sebelumnya = mobil_bus[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                mobil_bus_sebelumnya = mobil_bus[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                mobil_bus_sebelumnya = mobil_bus[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                mobil_bus_sebelumnya = mobil_bus[10];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                mobil_barang_sebelumnya = mobil_barang[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                mobil_barang_sebelumnya = mobil_barang[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                mobil_barang_sebelumnya = mobil_barang[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                mobil_barang_sebelumnya = mobil_barang[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                mobil_barang_sebelumnya = mobil_barang[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                mobil_barang_sebelumnya = mobil_barang[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                mobil_barang_sebelumnya = mobil_barang[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                mobil_barang_sebelumnya = mobil_barang[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                mobil_barang_sebelumnya = mobil_barang[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                mobil_barang_sebelumnya = mobil_barang[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                mobil_barang_sebelumnya = mobil_barang[10];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                sepeda_motor_sebelumnya = sepeda_motor[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                sepeda_motor_sebelumnya = sepeda_motor[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                sepeda_motor_sebelumnya = sepeda_motor[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                sepeda_motor_sebelumnya = sepeda_motor[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                sepeda_motor_sebelumnya = sepeda_motor[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                sepeda_motor_sebelumnya = sepeda_motor[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                sepeda_motor_sebelumnya = sepeda_motor[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                sepeda_motor_sebelumnya = sepeda_motor[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                sepeda_motor_sebelumnya = sepeda_motor[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                sepeda_motor_sebelumnya = sepeda_motor[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                sepeda_motor_sebelumnya = sepeda_motor[10];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                ransus_sebelumnya = ransus[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                ransus_sebelumnya = ransus[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                ransus_sebelumnya = ransus[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                ransus_sebelumnya = ransus[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                ransus_sebelumnya = ransus[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                ransus_sebelumnya = ransus[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                ransus_sebelumnya = ransus[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                ransus_sebelumnya = ransus[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                ransus_sebelumnya = ransus[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                ransus_sebelumnya = ransus[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                ransus_sebelumnya = ransus[10];
                            }


                            return (
                                `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 50rem; height:10rem;">`:'<div style="width: 20rem; height:10rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                    <div class="my-2  text-center">   
                                                        <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                    </div>
                                                        <div class="row">
                                                            <div class="col-md-7 ms-1">
                                                                <span class="fw-bold">Mobil Penumpang</span><br>
                                                                <span class="fw-bold">Mobil Bus</span><br>
                                                                <span class="fw-bold">Mobil Barang</span><br>
                                                                <span class="fw-bold">Sepeda Motor</span><br>
                                                                <span class="fw-bold">Kendaraan Khusus</span><br>
                                                            </div>
                                                            <div class="col-md-1">
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                            </div>
                                                            <div class="col-md-4 ms-n1">
                                                                <span class="fw-bold">${nf.format(mobil_penumpang_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(mobil_bus_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(mobil_barang_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(sepeda_motor_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(ransus_sebelumnya)}</span><br>
                                                            </div>
                                                        </div>
                                                </div> 
                                                <div class="col-md-4">
                                                    <div style ="border-left: 2px solid silver; height: 500px; position: absolute; left: -5%; top: 0;"></div>
                                                    <div class="my-2  text-center"">   
                                                        <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                    </div>
                                                        <div class="row">
                                                            <div class="col-md-7">
                                                                <span class="fw-bold">Mobil Penumpang</span><br>
                                                                <span class="fw-bold">Mobil Bus</span><br>
                                                                <span class="fw-bold">Mobil Barang</span><br>
                                                                <span class="fw-bold">Sepeda Motor</span><br>
                                                                <span class="fw-bold">Kendaraan Khusus</span><br>   </div>
                                                            <div class="col-md-1">
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <span class="fw-bold">${nf.format(mobil_penumpang[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(mobil_bus[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(mobil_barang[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(sepeda_motor[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(ransus[dataPointIndex])}</span><br>
                                                            </div>
                                                        </div>
                                                </div> 

                                                <div class="col-md-4">
                                                    <div style ="border-left: 2px solid silver; height: 500px; position: absolute; left: -5%; top: 0;"></div>
                                                        <div class="my-2  text-center"">   
                                                            <span class="fs-6 fw-bold">Presentase</span>
                                                        </div>
                                                        <div class="text-center">
                                                            <span class="fw-bold">${presentase_mobil_penumpang[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_mobil_bus[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_mobil_barang[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_sepeda_motor[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_ransus[dataPointIndex]}%</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                ` : `
                                                <div class="col-md-12">
                                                    <div class="my-2 text-center">    
                                                        <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-7 ms-1">
                                                                <span class="fw-bold">Mobil Penumpang</span><br>
                                                                <span class="fw-bold">Mobil Bus</span><br>
                                                                <span class="fw-bold">Mobil Barang</span><br>
                                                                <span class="fw-bold">Sepeda Motor</span><br>
                                                                <span class="fw-bold">Kendaraan Khusus</span><br>   
                                                        </div>
                                                        <div class="col-md-1">
                                                            <span class="fw-bold">:</span><br>
                                                            <span class="fw-bold">:</span><br>
                                                            <span class="fw-bold">:</span><br>
                                                            <span class="fw-bold">:</span><br>
                                                            <span class="fw-bold">:</span><br>
                                                        </div>
                                                        <div class="col-md-4 ms-n1" >
                                                            <span class="fw-bold">${nf.format(mobil_penumpang[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(mobil_bus[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(mobil_barang[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(sepeda_motor[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(ransus[dataPointIndex])}</span><br>
                                                        </div>
                                                    </div>
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

                var ditregidentranmormonth = new ApexCharts(document.querySelector("#chart5"), ditregidentranmormonth);
                ditregidentranmormonth.render();
            }
        })
    }


    // Year
    function getRegidentyear(three_yearAgo, lastDay) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>ditregident/getChartSim",
            data: {
                start_date: three_yearAgo,
                end_date: lastDay,
                filter: 'year'
            },
            dataType: "JSON",
            success: function(result) {
                let nf = new Intl.NumberFormat('en-US');
                let polda_month = result.data.polda_month
                let baru_a = result.data.baru_a
                let presentase_baru_a = result.data.presentase_baru_a
                let baru_c = result.data.baru_c
                let presentase_baru_c = result.data.presentase_baru_c
                let baru_c1 = result.data.baru_c1
                let presentase_baru_c1 = result.data.presentase_baru_c1
                let baru_c2 = result.data.baru_c2
                let presentase_baru_c2 = result.data.presentase_baru_c2
                let baru_d = result.data.baru_d
                let presentase_baru_d = result.data.presentase_baru_d
                let baru_d1 = result.data.baru_d1
                let presentase_baru_d1 = result.data.presentase_baru_d1

                let perpanjangan_a = result.data.perpanjangan_a
                let presentase_perpanjangan_a = result.data.presentase_perpanjangan_a
                let perpanjangan_au = result.data.perpanjangan_au
                let presentase_perpanjangan_au = result.data.presentase_perpanjangan_au
                let perpanjangan_b1 = result.data.perpanjangan_b1
                let presentase_perpanjangan_b1 = result.data.presentase_perpanjangan_b1
                let perpanjangan_b1u = result.data.perpanjangan_b1u
                let presentase_perpanjangan_b1u = result.data.presentase_perpanjangan_b1u
                let perpanjangan_b2 = result.data.perpanjangan_b2
                let presentase_perpanjangan_b2 = result.data.presentase_perpanjangan_b2
                let perpanjangan_b2u = result.data.perpanjangan_b2u
                let presentase_perpanjangan_b2u = result.data.presentase_perpanjangan_b2u
                let perpanjangan_c = result.data.perpanjangan_c
                let presentase_perpanjangan_c = result.data.presentase_perpanjangan_c
                let perpanjangan_c1 = result.data.perpanjangan_c1
                let presentase_perpanjangan_c1 = result.data.presentase_perpanjangan_c1
                let perpanjangan_c2 = result.data.perpanjangan_c2
                let presentase_perpanjangan_c2 = result.data.presentase_perpanjangan_c2
                let perpanjangan_d = result.data.perpanjangan_d
                let presentase_perpanjangan_d = result.data.presentase_perpanjangan_d
                let perpanjangan_d1 = result.data.perpanjangan_d1
                let presentase_perpanjangan_d1 = result.data.presentase_perpanjangan_d1

                let peningkatan_au = result.data.peningkatan_au
                let presentase_peningkatan_au = result.data.presentase_peningkatan_au
                let peningkatan_b1 = result.data.peningkatan_b1
                let presentase_peningkatan_b1 = result.data.presentase_peningkatan_b1
                let peningkatan_b1u = result.data.peningkatan_b1u
                let presentase_peningkatan_b1u = result.data.presentase_peningkatan_b1u
                let peningkatan_b2 = result.data.peningkatan_b2
                let presentase_peningkatan_b2 = result.data.presentase_peningkatan_b2
                let peningkatan_b2u = result.data.peningkatan_b2u
                let presentase_peningkatan_b2u = result.data.presentase_peningkatan_b2u
                $('#titlesimyear').html(`<h4 class="card-title mb-0 text-uppercase">PERBANDINGAN DATA SIM TAHUNAN</h4>`);

                var ditregidentsimyear = {
                    series: [{
                        name: "Baru A",
                        data: nf.format(baru_a)
                    }, {
                        name: "Baru C",
                        data: baru_c
                    }, {
                        name: "Baru CI",
                        data: baru_c1
                    }, {
                        name: "Baru CII",
                        data: baru_c2
                    }, {
                        name: "Baru D",
                        data: baru_d
                    }, {
                        name: "Baru DI",
                        data: baru_d1
                    }, {
                        name: "Perpanjangan A",
                        data: perpanjangan_a
                    }, {

                        name: "Perpanjangan AU",
                        data: perpanjangan_au
                    }, {
                        name: "Perpanjangan C",
                        data: perpanjangan_c
                    }, {
                        name: "Perpanjangan CI",
                        data: perpanjangan_c1
                    }, {
                        name: "Perpanjangan CII",
                        data: perpanjangan_c2
                    }, {
                        name: "Perpanjangan D",
                        data: perpanjangan_d
                    }, {
                        name: "Perpanjangan DI",
                        data: perpanjangan_d1
                    }, {
                        name: "Perpanjangan BI",
                        data: perpanjangan_b1
                    }, {
                        name: "Perpanjangan BIU",
                        data: perpanjangan_b1u
                    }, {
                        name: "Perpanjangan BII",
                        data: perpanjangan_b2
                    }, {
                        name: "Perpanjangan BIIU",
                        data: perpanjangan_b2u
                    }, {
                        name: "Peningkatan AU",
                        data: peningkatan_au
                    }, {
                        name: "Peningkatan BI",
                        data: peningkatan_b1
                    }, {
                        name: "Peningkatan BIU",
                        data: peningkatan_b1u
                    }, {
                        name: "Peningkatan BII",
                        data: peningkatan_b2
                    }, {
                        name: "Peningkatan BIIU",
                        data: peningkatan_b2u
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
                                baru_a_sebelumnya = baru_a[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                baru_a_sebelumnya = baru_a[1];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                baru_c_sebelumnya = baru_c[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                baru_c_sebelumnya = baru_c[1];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                baru_c1_sebelumnya = baru_c1[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                baru_c1_sebelumnya = baru_c1[1];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                baru_c2_sebelumnya = baru_c2[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                baru_c2_sebelumnya = baru_c2[1];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                baru_d_sebelumnya = baru_d[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                baru_d_sebelumnya = baru_d[1];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                baru_d1_sebelumnya = baru_d1[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                baru_d1_sebelumnya = baru_d1[1];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                perpanjangan_a_sebelumnya = perpanjangan_a[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                perpanjangan_a_sebelumnya = perpanjangan_a[1];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                perpanjangan_au_sebelumnya = perpanjangan_au[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                perpanjangan_au_sebelumnya = perpanjangan_au[1];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                perpanjangan_b1_sebelumnya = perpanjangan_b1[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                perpanjangan_b1_sebelumnya = perpanjangan_b1[1];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                perpanjangan_b1u_sebelumnya = perpanjangan_b1u[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                perpanjangan_b1u_sebelumnya = perpanjangan_b1u[1];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                perpanjangan_b2_sebelumnya = perpanjangan_b2[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                perpanjangan_b2_sebelumnya = perpanjangan_b2[1];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                perpanjangan_b2u_sebelumnya = perpanjangan_b2u[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                perpanjangan_b2u_sebelumnya = perpanjangan_b2u[1];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                perpanjangan_c_sebelumnya = perpanjangan_c[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                perpanjangan_c_sebelumnya = perpanjangan_c[1];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                perpanjangan_c1_sebelumnya = perpanjangan_c1[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                perpanjangan_c1_sebelumnya = perpanjangan_c1[1];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                perpanjangan_c2_sebelumnya = perpanjangan_c2[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                perpanjangan_c2_sebelumnya = perpanjangan_c2[1];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                perpanjangan_d_sebelumnya = perpanjangan_d[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                perpanjangan_d_sebelumnya = perpanjangan_d[1];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                perpanjangan_d1_sebelumnya = perpanjangan_d1[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                perpanjangan_d1_sebelumnya = perpanjangan_d1[1];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                peningkatan_au_sebelumnya = peningkatan_au[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                peningkatan_au_sebelumnya = peningkatan_au[1];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                peningkatan_b1_sebelumnya = peningkatan_b1[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                peningkatan_b1_sebelumnya = peningkatan_b1[1];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                peningkatan_b1u_sebelumnya = peningkatan_b1u[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                peningkatan_b1u_sebelumnya = peningkatan_b1u[1];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                peningkatan_b2_sebelumnya = peningkatan_b2[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                peningkatan_b2_sebelumnya = peningkatan_b2[1];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                peningkatan_b2u_sebelumnya = peningkatan_b2u[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                peningkatan_b2u_sebelumnya = peningkatan_b2u[1];
                            }
                            return (
                                `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 70rem; height:20rem;">`:'<div style="width: 30rem; height:20rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                    <div class="my-2  text-center">   
                                                        <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                    </div>
                                                        <div class="row">
                                                            <div class="col-md-4 ms-1">
                                                                <span class="fw-bold ms-2">Baru</span><br>
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <span class="fw-bold">A</span><br>
                                                                        <span class="fw-bold">C</span><br>
                                                                        <span class="fw-bold">CI</span><br>
                                                                        <span class="fw-bold">CII</span><br>
                                                                        <span class="fw-bold">D</span><br>
                                                                        <span class="fw-bold">DI</span><br>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <span class="fw-bold">${nf.format(baru_a_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(baru_c_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(baru_c1_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(baru_c2_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(baru_d_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(baru_d1_sebelumnya)}</span><br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 ms-n4 me-3">
                                                                <span class="fw-bold">Perpanjangan</span><br>
                                                                <div class="row ms-2">
                                                                    <div class="col-md-2">
                                                                        <span class="fw-bold">A</span><br>
                                                                        <span class="fw-bold">AU</span><br>
                                                                        <span class="fw-bold">C</span><br>
                                                                        <span class="fw-bold">CI</span><br>
                                                                        <span class="fw-bold">CII</span><br>
                                                                        <span class="fw-bold">D</span><br>
                                                                        <span class="fw-bold">DI</span><br>
                                                                        <span class="fw-bold">BI</span><br>
                                                                        <span class="fw-bold">BIU</span><br>
                                                                        <span class="fw-bold">BI</span><br>
                                                                        <span class="fw-bold">BIIU</span><br>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <span class="fw-bold">${nf.format(perpanjangan_a_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_au_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_c_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_c1_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_c2_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_d_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_d1_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_b1_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_b1u_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_b2_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_b2u_sebelumnya)}</span><br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <span class="fw-bold">Peningkatan</span><br>
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <span class="fw-bold">AU</span><br>
                                                                        <span class="fw-bold">BI</span><br>
                                                                        <span class="fw-bold">BIU</span><br>
                                                                        <span class="fw-bold">BII</span><br>
                                                                        <span class="fw-bold">BIIU</span><br>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <span class="fw-bold">${nf.format(peningkatan_au_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(peningkatan_b1_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(peningkatan_b1u_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(peningkatan_b2_sebelumnya)}</span><br>
                                                                        <span class="fw-bold">${nf.format(peningkatan_b2u_sebelumnya)}</span><br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div> 



                                                <div class="col-md-4">
                                                <div style ="border-left: 2px solid silver; height: 500px; position: absolute; left: -5%; top: 0;"></div>
                                                    <div class="my-2  text-center"">   
                                                        <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                    </div>
                                                        <div class="row">
                                                            <div class="col-md-4 ms-1">
                                                                <span class="fw-bold">Baru</span><br>
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <span class="fw-bold">A</span><br>
                                                                        <span class="fw-bold">C</span><br>
                                                                        <span class="fw-bold">CI</span><br>
                                                                        <span class="fw-bold">CII</span><br>
                                                                        <span class="fw-bold">D</span><br>
                                                                        <span class="fw-bold">DI</span><br>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <span class="fw-bold">${nf.format(baru_a[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(baru_c[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(baru_c1[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(baru_c2[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(baru_d[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(baru_d1[dataPointIndex])}</span><br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 ms-n3 me-2">
                                                                <span class="fw-bold">Perpanjangan</span><br>
                                                                <div class="row ms-2">
                                                                    <div class="col-md-2">
                                                                        <span class="fw-bold">A</span><br>
                                                                        <span class="fw-bold">AU</span><br>
                                                                        <span class="fw-bold">C</span><br>
                                                                        <span class="fw-bold">CI</span><br>
                                                                        <span class="fw-bold">CII</span><br>
                                                                        <span class="fw-bold">D</span><br>
                                                                        <span class="fw-bold">DI</span><br>
                                                                        <span class="fw-bold">BI</span><br>
                                                                        <span class="fw-bold">BIU</span><br>
                                                                        <span class="fw-bold">BI</span><br>
                                                                        <span class="fw-bold">BIIU</span><br>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <span class="fw-bold">${nf.format(perpanjangan_a[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_au[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_c[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_c1[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_c2[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_d[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_d1[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_b1[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_b1u[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_b2[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_b2u[dataPointIndex])}</span><br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <span class="fw-bold">Peningkatan</span><br>
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <span class="fw-bold">AU</span><br>
                                                                        <span class="fw-bold">BI</span><br>
                                                                        <span class="fw-bold">BIU</span><br>
                                                                        <span class="fw-bold">BII</span><br>
                                                                        <span class="fw-bold">BIIU</span><br>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <span class="fw-bold">${nf.format(peningkatan_au[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(peningkatan_b1[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(peningkatan_b1u[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(peningkatan_b2[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(peningkatan_b2u[dataPointIndex])}</span><br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div> 

                                                <div class="col-md-4">
                                                <div style ="border-left: 2px solid silver; height: 500px; position: absolute; left: -5%; top: 0;"></div>
                                                    <div class="my-2  text-center"">   
                                                        <span class="fs-6 fw-bold">Presentase</span>
                                                    </div>
                                                        <div class="row">
                                                            <div class="col-md-4 ms-1">
                                                                <span class="fw-bold">Baru</span><br>
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <span class="fw-bold">A</span><br>
                                                                        <span class="fw-bold">C</span><br>
                                                                        <span class="fw-bold">C1</span><br>
                                                                        <span class="fw-bold">C2</span><br>
                                                                        <span class="fw-bold">D</span><br>
                                                                        <span class="fw-bold">D1</span><br>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <span class="fw-bold">${presentase_baru_a[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_baru_c[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_baru_c1[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_baru_c2[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_baru_d[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_baru_d1[dataPointIndex]}%</span><br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 ms-n4 me-3">
                                                                <span class="fw-bold">Perpanjangan</span><br>
                                                                <div class="row ms-2">
                                                                    <div class="col-md-2">
                                                                        <span class="fw-bold">A</span><br>
                                                                        <span class="fw-bold">AU</span><br>
                                                                        <span class="fw-bold">C</span><br>
                                                                        <span class="fw-bold">CI</span><br>
                                                                        <span class="fw-bold">CII</span><br>
                                                                        <span class="fw-bold">D</span><br>
                                                                        <span class="fw-bold">DI</span><br>
                                                                        <span class="fw-bold">BI</span><br>
                                                                        <span class="fw-bold">BIU</span><br>
                                                                        <span class="fw-bold">BI</span><br>
                                                                        <span class="fw-bold">BIIU</span><br>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <span class="fw-bold">${presentase_perpanjangan_a[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_perpanjangan_au[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_perpanjangan_c[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_perpanjangan_c1[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_perpanjangan_c2[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_perpanjangan_d[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_perpanjangan_d1[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_perpanjangan_b1[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_perpanjangan_b1u[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_perpanjangan_b2[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_perpanjangan_b2u[dataPointIndex]}%</span><br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <span class="fw-bold">Peningkatan</span><br>
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <span class="fw-bold">AU</span><br>
                                                                        <span class="fw-bold">BI</span><br>
                                                                        <span class="fw-bold">BIU</span><br>
                                                                        <span class="fw-bold">BII</span><br>
                                                                        <span class="fw-bold">BIIU</span><br>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <span class="fw-bold">${presentase_peningkatan_au[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_peningkatan_b1[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_peningkatan_b1u[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_peningkatan_b2[dataPointIndex]}%</span><br>
                                                                        <span class="fw-bold">${presentase_peningkatan_b2u[dataPointIndex]}%</span><br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div> 
                                                    
                                               
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                            <div class="col-md-4 ms-1">
                                                                <span class="fw-bold">Baru</span><br>
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <span class="fw-bold">A</span><br>
                                                                        <span class="fw-bold">C</span><br>
                                                                        <span class="fw-bold">CI</span><br>
                                                                        <span class="fw-bold">CII</span><br>
                                                                        <span class="fw-bold">D</span><br>
                                                                        <span class="fw-bold">DI</span><br>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <span class="fw-bold">${nf.format(baru_a[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(baru_c[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(baru_c1[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(baru_c2[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(baru_d[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(baru_d1[dataPointIndex])}</span><br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 ms-n3 me-2">
                                                                <span class="fw-bold">Perpanjangan</span><br>
                                                                <div class="row ms-2">
                                                                    <div class="col-md-2">
                                                                        <span class="fw-bold">A</span><br>
                                                                        <span class="fw-bold">AU</span><br>
                                                                        <span class="fw-bold">C</span><br>
                                                                        <span class="fw-bold">CI</span><br>
                                                                        <span class="fw-bold">CII</span><br>
                                                                        <span class="fw-bold">D</span><br>
                                                                        <span class="fw-bold">DI</span><br>
                                                                        <span class="fw-bold">BI</span><br>
                                                                        <span class="fw-bold">BIU</span><br>
                                                                        <span class="fw-bold">BI</span><br>
                                                                        <span class="fw-bold">BIIU</span><br>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <span class="fw-bold">${nf.format(perpanjangan_a[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_au[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_c[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_c1[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_c2[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_d[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_d1[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_b1[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_b1u[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_b2[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(perpanjangan_b2u[dataPointIndex])}</span><br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <span class="fw-bold">Peningkatan</span><br>
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <span class="fw-bold">AU</span><br>
                                                                        <span class="fw-bold">BI</span><br>
                                                                        <span class="fw-bold">BIU</span><br>
                                                                        <span class="fw-bold">BII</span><br>
                                                                        <span class="fw-bold">BIIU</span><br>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                        <span class="fw-bold">:</span><br>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <span class="fw-bold">${nf.format(peningkatan_au[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(peningkatan_b1[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(peningkatan_b1u[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(peningkatan_b2[dataPointIndex])}</span><br>
                                                                        <span class="fw-bold">${nf.format(peningkatan_b2u[dataPointIndex])}</span><br>
                                                                    </div>
                                                                </div>
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

                var ditregidentsimyear = new ApexCharts(document.querySelector("#chartyear1"), ditregidentsimyear);
                ditregidentsimyear.render();
            }
        })

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>ditregident/getChartBpkb",
            data: {
                start_date: three_yearAgo,
                end_date: lastDay,
                filter: 'year'
            },
            dataType: "JSON",
            success: function(result) {
                let nf = new Intl.NumberFormat('en-US');
                let polda_month = result.data.polda_month
                let bbn_1 = result.data.bbn_1
                let presentase_bbn_1 = result.data.presentase_bbn_1
                let bbn_2 = result.data.bbn_2
                let presentase_bbn_2 = result.data.presentase_bbn_2
                let mutasi_masuk = result.data.mutasi_masuk
                let presentase_mutasi_masuk = result.data.presentase_mutasi_masuk
                let perubahan_pergantian = result.data.perubahan_pergantian
                let presentase_perubahan_pergantian = result.data.presentase_perubahan_pergantian
                let mutasi_keluar = result.data.mutasi_keluar
                let presentase_mutasi_keluar = result.data.presentase_mutasi_keluar
                $('#titlebpkbyear').html(`<h4 class="card-title mb-0 text-uppercase">PERBANDINGAN DATA BPKB TAHUNAN</h4>`);

                var ditregidentbpkbyear = {
                    series: [{
                        name: "BBN 1",
                        data: bbn_1
                    }, {
                        name: "BBN 2",
                        data: bbn_2
                    }, {
                        name: "Mutasi Masuk",
                        data: mutasi_masuk
                    }, {
                        name: "Perubahan Pergantian",
                        data: perubahan_pergantian
                    }, {
                        name: "Mutasi Keluar",
                        data: mutasi_keluar
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
                                bbn_1_sebelumnya = bbn_1[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                bbn_1_sebelumnya = bbn_1[1];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                bbn_2_sebelumnya = bbn_2[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                bbn_2_sebelumnya = bbn_2[1];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                mutasi_masuk_sebelumnya = mutasi_masuk[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                mutasi_masuk_sebelumnya = mutasi_masuk[1];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                perubahan_pergantian_sebelumnya = perubahan_pergantian[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                perubahan_pergantian_sebelumnya = perubahan_pergantian[1];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                mutasi_keluar_sebelumnya = mutasi_keluar[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                mutasi_keluar_sebelumnya = mutasi_keluar[1];
                            }

                            return (
                                `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 50rem; height:10rem;">`:'<div style="width: 20rem; height:10rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                    <div class="my-2  text-center">   
                                                        <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                    </div>
                                                        <div class="row">
                                                            <div class="col-md-7 ms-1">
                                                                <span class="fw-bold">BBN I</span><br>
                                                                <span class="fw-bold">BBN II</span><br>
                                                                <span class="fw-bold">Mutasi Masuk</span><br>
                                                                <span class="fw-bold">Perubahan Pergantian</span><br>
                                                                <span class="fw-bold">Mutasi Keluar</span><br>
                                                            </div>
                                                            <div class="col-md-1">
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                            </div>
                                                            <div class="col-md-4 ms-n1">
                                                                <span class="fw-bold">${nf.format(bbn_1_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(bbn_2_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(mutasi_masuk_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(perubahan_pergantian_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(mutasi_keluar_sebelumnya)}</span><br>
                                                            </div>
                                                        </div>
                                                </div> 
                                                <div class="col-md-4">
                                                    <div style ="border-left: 2px solid silver; height: 500px; position: absolute; left: -5%; top: 0;"></div>
                                                    <div class="my-2  text-center"">   
                                                        <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                    </div>
                                                        <div class="row">
                                                            <div class="col-md-7">
                                                                <span class="fw-bold">BBN I</span><br>
                                                                <span class="fw-bold">BBN II</span><br>
                                                                <span class="fw-bold">Mutasi Keluar</span><br>
                                                                <span class="fw-bold">Perubahan Pergantian</span><br>
                                                                <span class="fw-bold">Mutasi Masuk</span><br>
                                                            </div>
                                                            <div class="col-md-1">
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <span class="fw-bold">${nf.format(bbn_1[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(bbn_2[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(mutasi_masuk[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(perubahan_pergantian[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(mutasi_keluar[dataPointIndex])}</span><br>
                                                            </div>
                                                        </div>
                                                </div> 

                                                <div class="col-md-4">
                                                    <div style ="border-left: 2px solid silver; height: 500px; position: absolute; left: -5%; top: 0;"></div>
                                                        <div class="my-2  text-center"">   
                                                            <span class="fs-6 fw-bold">Presentase</span>
                                                        </div>
                                                        <div class="text-center">
                                                            <span class="fw-bold">${presentase_bbn_1[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_bbn_2[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_mutasi_masuk[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_perubahan_pergantian[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_mutasi_keluar[dataPointIndex]}%</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                ` : `
                                                <div class="col-md-12">
                                                    <div class="my-2 text-center">    
                                                        <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-7 ms-1">
                                                            <span class="fw-bold">BBN I</span><br>
                                                            <span class="fw-bold">BBN II</span><br>
                                                            <span class="fw-bold">Mutasi Keluar</span><br>
                                                            <span class="fw-bold">Perubahan Pergantian</span><br>
                                                            <span class="fw-bold">Mutasi Masuk</span><br>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <span class="fw-bold">:</span><br>
                                                            <span class="fw-bold">:</span><br>
                                                            <span class="fw-bold">:</span><br>
                                                            <span class="fw-bold">:</span><br>
                                                            <span class="fw-bold">:</span><br>
                                                        </div>
                                                        <div class="col-md-4 ms-n1" >
                                                            <span class="fw-bold">${nf.format(bbn_1[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(bbn_2[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(mutasi_masuk[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(perubahan_pergantian[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(mutasi_keluar[dataPointIndex])}</span><br>
                                                        </div>
                                                    </div>
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

                var ditregidentbpkbyear = new ApexCharts(document.querySelector("#chartyear2"), ditregidentbpkbyear);
                ditregidentbpkbyear.render();
            }
        })

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>ditregident/getChartStnk",
            data: {
                start_date: three_yearAgo,
                end_date: lastDay,
                filter: 'year'
            },
            dataType: "JSON",
            success: function(result) {
                let nf = new Intl.NumberFormat('en-US');
                let polda_month = result.data.polda_month
                let bbn_1_r2 = result.data.bbn_1_r2
                let presentase_bbn_1_r2 = result.data.presentase_bbn_1_r2
                let bbn_1_r4 = result.data.bbn_1_r4
                let presentase_bbn_1_r4 = result.data.presentase_bbn_1_r4
                let perubahan_r2 = result.data.perubahan_r2
                let presentase_perubahan_r2 = result.data.presentase_perubahan_r2
                let perubahan_r4 = result.data.perubahan_r4
                let presentase_perubahan_r4 = result.data.presentase_perubahan_r4
                let perpanjangan_r2 = result.data.perpanjangan_r2
                let presentase_perpanjangan_r2 = result.data.presentase_perpanjangan_r2
                let perpanjangan_r4 = result.data.perpanjangan_r4
                let presentase_perpanjangan_r4 = result.data.presentase_perpanjangan_r4
                let mutasi_masuk_r2 = result.data.mutasi_masuk_r2
                let presentase_mutasi_masuk_r2 = result.data.presentase_mutasi_masuk_r2
                let mutasi_masuk_r4 = result.data.mutasi_masuk_r4
                let presentase_mutasi_masuk_r4 = result.data.presentase_mutasi_masuk_r4
                let mutasi_keluar_r2 = result.data.mutasi_keluar_r2
                let presentase_mutasi_keluar_r2 = result.data.presentase_mutasi_keluar_r2
                let mutasi_keluar_r4 = result.data.mutasi_keluar_r4
                let presentase_mutasi_keluar_r4 = result.data.presentase_mutasi_keluar_r4
                let pengesahan_r2 = result.data.pengesahan_r2
                let presentase_pengesahan_r2 = result.data.presentase_pengesahan_r2
                let pengesahan_r4 = result.data.pengesahan_r4
                let presentase_pengesahan_r4 = result.data.presentase_pengesahan_r4
                let samolnas_r2 = result.data.samolnas_r2
                let presentase_samolnas_r2 = result.data.presentase_samolnas_r2
                let samolnas_r4 = result.data.samolnas_r4
                let presentase_samolnas_r4 = result.data.presentase_samolnas_r4
                $('#titlestnkyear').html(`<h4 class="card-title mb-0 text-uppercase">PERBANDINGAN DATA STNK TAHUNAN</h4>`);

                var ditregidentstnkyear = {
                    series: [{
                        name: "BBN 1 R2",
                        data: bbn_1_r2
                    }, {
                        name: "BBN 1 R4",
                        data: bbn_1_r4
                    }, {
                        name: "Perubahan R2",
                        data: perubahan_r2
                    }, {
                        name: "Perubahan R4",
                        data: perubahan_r4
                    }, {
                        name: "Perpanjangan R2",
                        data: perpanjangan_r2
                    }, {
                        name: "Perpanjangan R4",
                        data: perpanjangan_r4
                    }, {
                        name: "Mutasi Masuk R2",
                        data: mutasi_masuk_r2
                    }, {
                        name: "Mutasi Masuk R4",
                        data: mutasi_masuk_r4
                    }, {
                        name: "Mutasi Keluar R2",
                        data: mutasi_keluar_r2
                    }, {
                        name: "Mutasi Keluar R4",
                        data: mutasi_keluar_r4
                    }, {
                        name: "Pengesahan R2",
                        data: pengesahan_r2
                    }, {
                        name: "Pengesahan R4",
                        data: pengesahan_r4
                    }, {
                        name: "Samolnas R2",
                        data: samolnas_r2
                    }, {
                        name: "Samolnas R4",
                        data: samolnas_r4
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
                                bbn_1_r2_sebelumnya = bbn_1_r2[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                bbn_1_r2_sebelumnya = bbn_1_r2[1];
                            }
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                bbn_1_r4_sebelumnya = bbn_1_r4[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                bbn_1_r4_sebelumnya = bbn_1_r4[1];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                perubahan_r2_sebelumnya = perubahan_r2[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                perubahan_r2_sebelumnya = perubahan_r2[1];
                            }
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                perubahan_r4_sebelumnya = perubahan_r4[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                perubahan_r4_sebelumnya = perubahan_r4[1];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                mutasi_masuk_r2_sebelumnya = mutasi_masuk_r2[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                mutasi_masuk_r2_sebelumnya = mutasi_masuk_r2[1];
                            }
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                mutasi_masuk_r4_sebelumnya = mutasi_masuk_r4[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                mutasi_masuk_r4_sebelumnya = mutasi_masuk_r4[1];
                            }
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                mutasi_keluar_r2_sebelumnya = mutasi_keluar_r2[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                mutasi_keluar_r2_sebelumnya = mutasi_keluar_r2[1];
                            }
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                mutasi_keluar_r4_sebelumnya = mutasi_keluar_r4[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                mutasi_keluar_r4_sebelumnya = mutasi_keluar_r4[1];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                perpanjangan_r2_sebelumnya = perpanjangan_r2[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                perpanjangan_r2_sebelumnya = perpanjangan_r2[1];
                            }
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                perpanjangan_r4_sebelumnya = perpanjangan_r4[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                perpanjangan_r4_sebelumnya = perpanjangan_r4[1];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                pengesahan_r2_sebelumnya = pengesahan_r2[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                pengesahan_r2_sebelumnya = pengesahan_r2[1];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                pengesahan_r4_sebelumnya = pengesahan_r4[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                pengesahan_r4_sebelumnya = pengesahan_r4[1];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                samolnas_r2_sebelumnya = samolnas_r2[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                samolnas_r2_sebelumnya = samolnas_r2[1];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                samolnas_r4_sebelumnya = samolnas_r4[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                samolnas_r4_sebelumnya = samolnas_r4[1];
                            }

                            return (
                                `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 50rem; height:25rem;">`:'<div style="width: 20rem; height:25rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                    <div class="my-2  text-center">   
                                                        <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                    </div>
                                                        <div class="row">
                                                            <div class="col-md-7 ms-1">
                                                                <span class="fw-bold">BBN I R2</span><br>
                                                                <span class="fw-bold">BBN I R4</span><br>
                                                                <span class="fw-bold">Perubahan R2</span><br>
                                                                <span class="fw-bold">Perubahan R4</span><br>
                                                                <span class="fw-bold">Perpanjangan R2</span><br>
                                                                <span class="fw-bold">Perpanjangan R4</span><br>
                                                                <span class="fw-bold">Mutasi Masuk R2</span><br>
                                                                <span class="fw-bold">Mutasi Masuk R4</span><br>
                                                                <span class="fw-bold">Mutasi Keluar R2</span><br>
                                                                <span class="fw-bold">Mutasi Keluar R4</span><br>
                                                                <span class="fw-bold">Pengesahan R2</span><br>
                                                                <span class="fw-bold">Pengesahan R4</span><br>
                                                                <span class="fw-bold">Samolnas R2</span><br>
                                                                <span class="fw-bold">Samolnas R4</span><br>
                                                            </div>
                                                            <div class="col-md-1">
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                            </div>
                                                            <div class="col-md-4 ms-n1">
                                                                <span class="fw-bold">${nf.format(bbn_1_r2_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(bbn_1_r4_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(perubahan_r2_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(perubahan_r4_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(perpanjangan_r2_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(perpanjangan_r4_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(mutasi_masuk_r2_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(mutasi_masuk_r4_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(mutasi_keluar_r2_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(mutasi_keluar_r4_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(pengesahan_r2_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(pengesahan_r4_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(samolnas_r2_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(samolnas_r4_sebelumnya)}</span><br>
                                                            </div>
                                                        </div>
                                                </div> 
                                                <div class="col-md-4">
                                                    <div style ="border-left: 2px solid silver; height: 500px; position: absolute; left: -5%; top: 0;"></div>
                                                    <div class="my-2  text-center"">   
                                                        <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                    </div>
                                                        <div class="row">
                                                            <div class="col-md-7">
                                                                <span class="fw-bold">BBN I R2</span><br>
                                                                <span class="fw-bold">BBN I R4</span><br>
                                                                <span class="fw-bold">Perubahan R2</span><br>
                                                                <span class="fw-bold">Perubahan R4</span><br>
                                                                <span class="fw-bold">Perpanjangan R2</span><br>
                                                                <span class="fw-bold">Perpanjangan R4</span><br>
                                                                <span class="fw-bold">Mutasi Masuk R2</span><br>
                                                                <span class="fw-bold">Mutasi Masuk R4</span><br>
                                                                <span class="fw-bold">Mutasi Keluar R2</span><br>
                                                                <span class="fw-bold">Mutasi Keluar R4</span><br>
                                                                <span class="fw-bold">Pengesahan R2</span><br>
                                                                <span class="fw-bold">Pengesahan R4</span><br>
                                                                <span class="fw-bold">Samolnas R2</span><br>
                                                                <span class="fw-bold">Samolnas R4</span><br>
                                                            </div>
                                                            <div class="col-md-1">
                                                            <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <span class="fw-bold">${nf.format(bbn_1_r2[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(bbn_1_r4[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(perubahan_r2[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(perubahan_r4[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(perpanjangan_r2[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(perpanjangan_r4[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(mutasi_masuk_r2[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(mutasi_masuk_r4[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(mutasi_keluar_r2[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(mutasi_keluar_r4[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(pengesahan_r2[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(pengesahan_r4[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(samolnas_r2[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(samolnas_r4[dataPointIndex])}</span><br>
                                                            </div>
                                                        </div>
                                                </div> 

                                                <div class="col-md-4">
                                                    <div style ="border-left: 2px solid silver; height: 500px; position: absolute; left: -5%; top: 0;"></div>
                                                        <div class="my-2  text-center"">   
                                                            <span class="fs-6 fw-bold">Presentase</span>
                                                        </div>
                                                        <div class="text-center">
                                                            <span class="fw-bold">${presentase_bbn_1_r2[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_bbn_1_r4[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_perubahan_r2[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_perubahan_r4[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_perpanjangan_r2[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_perpanjangan_r4[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_mutasi_masuk_r2[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_mutasi_masuk_r4[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_mutasi_keluar_r2[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_mutasi_keluar_r4[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_pengesahan_r2[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_pengesahan_r4[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_samolnas_r2[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_samolnas_r4[dataPointIndex]}%</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                ` : `
                                                <div class="col-md-12">
                                                    <div class="my-2 text-center">    
                                                        <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-7 ms-1">
                                                                <span class="fw-bold">BBN I R2</span><br>
                                                                <span class="fw-bold">BBN I R4</span><br>
                                                                <span class="fw-bold">Perubahan R2</span><br>
                                                                <span class="fw-bold">Perubahan R4</span><br>
                                                                <span class="fw-bold">Perpanjangan R2</span><br>
                                                                <span class="fw-bold">Perpanjangan R4</span><br>
                                                                <span class="fw-bold">Mutasi Masuk R2</span><br>
                                                                <span class="fw-bold">Mutasi Masuk R4</span><br>
                                                                <span class="fw-bold">Mutasi Keluar R2</span><br>
                                                                <span class="fw-bold">Mutasi Keluar R4</span><br>
                                                                <span class="fw-bold">Pengesahan R2</span><br>
                                                                <span class="fw-bold">Pengesahan R4</span><br>
                                                                <span class="fw-bold">Samolnas R2</span><br>
                                                                <span class="fw-bold">Samolnas R4</span><br>
                                                            </div>
                                                            <div class="col-md-1">
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                            </div>
                                                        <div class="col-md-4 ms-n1" >
                                                            <span class="fw-bold">${nf.format(bbn_1_r2[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(bbn_1_r4[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(perubahan_r2[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(perubahan_r4[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(perpanjangan_r2[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(perpanjangan_r4[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(mutasi_masuk_r2[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(mutasi_masuk_r4[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(mutasi_keluar_r2[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(mutasi_keluar_r4[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(pengesahan_r2[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(pengesahan_r4[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(samolnas_r2[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(samolnas_r4[dataPointIndex])}</span><br>
                                                        </div>
                                                    </div>
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

                var ditregidentstnkyear = new ApexCharts(document.querySelector("#chartyear3"), ditregidentstnkyear);
                ditregidentstnkyear.render();



            }
        })

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>ditregident/getChartSbst",
            data: {
                start_date: three_yearAgo,
                end_date: lastDay,
                filter: 'year'
            },
            dataType: "JSON",
            success: function(result) {
                let nf = new Intl.NumberFormat('en-US');
                let polda_month = result.data.polda_month
                let sim = result.data.sim
                let presentase_sim = result.data.presentase_sim
                let bpkb = result.data.bpkb
                let presentase_bpkb = result.data.presentase_bpkb
                let stnk = result.data.stnk
                let presentase_stnk = result.data.presentase_stnk
                let tnkb = result.data.tnkb
                let presentase_tnkb = result.data.presentase_tnkb
                let tckb = result.data.tckb
                let presentase_tckb = result.data.presentase_tckb
                let stck = result.data.stck
                let presentase_stck = result.data.presentase_stck
                let skukp = result.data.skukp
                let presentase_skukp = result.data.presentase_skukp
                $('#titlesbstyear').html(`<h4 class="card-title mb-0 text-uppercase">PERBANDINGAN DATA SBST TAHUNAN</h4>`);

                var ditregidentsbstyear = {
                    series: [{
                        name: "SIM",
                        data: sim
                    }, {
                        name: "BPKB",
                        data: bpkb
                    }, {
                        name: "STNK",
                        data: stnk
                    }, {
                        name: "TNKB",
                        data: tnkb
                    }, {
                        name: "TCKB",
                        data: tckb
                    }, {
                        name: "STCK",
                        data: stck
                    }, {
                        name: "SKUKP",
                        data: skukp
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
                                sim_sebelumnya = sim[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                sim_sebelumnya = sim[1];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                bpkb_sebelumnya = bpkb[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                bpkb_sebelumnya = bpkb[1];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                stnk_sebelumnya = stnk[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                stnk_sebelumnya = stnk[1];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                tnkb_sebelumnya = tnkb[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                tnkb_sebelumnya = tnkb[1];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                tckb_sebelumnya = tckb[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                tckb_sebelumnya = tckb[1];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                stck_sebelumnya = stck[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                stck_sebelumnya = stck[1];
                            }
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                skukp_sebelumnya = skukp[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                skukp_sebelumnya = skukp[1];
                            }
                            return (
                                `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 50rem; height:10rem;">`:'<div style="width: 20rem; height:10rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                    <div class="my-2  text-center">   
                                                        <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                    </div>
                                                        <div class="row">
                                                            <div class="col-md-7 ms-1">
                                                                <span class="fw-bold">SIM</span><br>
                                                                <span class="fw-bold">BPKB</span><br>
                                                                <span class="fw-bold">STNK</span><br>
                                                                <span class="fw-bold">TNKB</span><br>
                                                                <span class="fw-bold">TCKB</span><br>
                                                                <span class="fw-bold">STCK</span><br>
                                                                <span class="fw-bold">SKUKP</span><br>
                                                            </div>
                                                            <div class="col-md-1">
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                            </div>
                                                            <div class="col-md-4 ms-n1">
                                                                <span class="fw-bold">${nf.format(sim_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(bpkb_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(stnk_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(tnkb_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(tckb_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(stck_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(skukp_sebelumnya)}</span><br>
                                                            </div>
                                                        </div>
                                                </div> 
                                                <div class="col-md-4">
                                                    <div style ="border-left: 2px solid silver; height: 500px; position: absolute; left: -5%; top: 0;"></div>
                                                    <div class="my-2  text-center"">   
                                                        <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                    </div>
                                                        <div class="row">
                                                            <div class="col-md-7">
                                                                <span class="fw-bold">SIM</span><br>
                                                                <span class="fw-bold">BPKB</span><br>
                                                                <span class="fw-bold">STNK</span><br>
                                                                <span class="fw-bold">TNKB</span><br>
                                                                <span class="fw-bold">TCKB</span><br>
                                                                <span class="fw-bold">STCK</span><br>
                                                                <span class="fw-bold">SKUKP</span><br>
                                                            </div>
                                                            <div class="col-md-1">
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <span class="fw-bold">${nf.format(sim[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(bpkb[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(stnk[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(tnkb[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(tckb[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(stck[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(skukp[dataPointIndex])}</span><br>
                                                            </div>
                                                        </div>
                                                </div> 

                                                <div class="col-md-4">
                                                    <div style ="border-left: 2px solid silver; height: 500px; position: absolute; left: -5%; top: 0;"></div>
                                                        <div class="my-2  text-center"">   
                                                            <span class="fs-6 fw-bold">Presentase</span>
                                                        </div>
                                                        <div class="text-center">
                                                            <span class="fw-bold">${presentase_sim[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_bpkb[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_stnk[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_tnkb[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_tckb[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_stck[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_skukp[dataPointIndex]}%</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                ` : `
                                                <div class="col-md-12">
                                                    <div class="my-2 text-center">    
                                                        <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-7 ms-1">
                                                            <span class="fw-bold">SIM</span><br>
                                                            <span class="fw-bold">BPKB</span><br>
                                                            <span class="fw-bold">STNK</span><br>
                                                            <span class="fw-bold">TNKB</span><br>
                                                            <span class="fw-bold">TCKB</span><br>
                                                            <span class="fw-bold">STCK</span><br>
                                                            <span class="fw-bold">SKUKP</span><br></div>
                                                        <div class="col-md-1">
                                                            <span class="fw-bold">:</span><br>
                                                            <span class="fw-bold">:</span><br>
                                                            <span class="fw-bold">:</span><br>
                                                            <span class="fw-bold">:</span><br>
                                                            <span class="fw-bold">:</span><br>
                                                            <span class="fw-bold">:</span><br>
                                                            <span class="fw-bold">:</span><br>
                                                        </div>
                                                        <div class="col-md-4 ms-n1" >
                                                            <span class="fw-bold">${nf.format(sim[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(bpkb[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(stnk[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(tnkb[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(tckb[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(stck[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(skukp[dataPointIndex])}</span><br>
                                                        </div>
                                                    </div>
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

                var ditregidentsbstyear = new ApexCharts(document.querySelector("#chartyear4"), ditregidentsbstyear);
                ditregidentsbstyear.render();
            }
        })

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>ditregident/getChartRanmor",
            data: {
                start_date: three_yearAgo,
                end_date: lastDay,
                filter: 'year'
            },
            dataType: "JSON",
            success: function(result) {
                let nf = new Intl.NumberFormat('en-US');
                let polda_month = result.data.polda_month
                let mobil_penumpang = result.data.mobil_penumpang
                let presentase_mobil_penumpang = result.data.presentase_mobil_penumpang
                let mobil_bus = result.data.mobil_bus
                let presentase_mobil_bus = result.data.presentase_mobil_bus
                let mobil_barang = result.data.mobil_barang
                let presentase_mobil_barang = result.data.presentase_mobil_barang
                let sepeda_motor = result.data.sepeda_motor
                let presentase_sepeda_motor = result.data.presentase_sepeda_motor
                let ransus = result.data.ransus
                let presentase_ransus = result.data.presentase_ransus
                let stck = result.data.stck
                let presentase_stck = result.data.presentase_stck
                let skukp = result.data.skukp
                let presentase_skukp = result.data.presentase_skukp
                $('#titleranmoryear').html(`<h4 class="card-title mb-0 text-uppercase">PERBANDINGAN DATA RANMOR TAHUNAN</h4>`);

                var ditregidentranmoryear = {
                    series: [{
                        name: "Mobil Penumpang",
                        data: mobil_penumpang
                    }, {
                        name: "Mobil Bus",
                        data: mobil_bus
                    }, {
                        name: "Mobil Barang",
                        data: mobil_barang
                    }, {
                        name: "Sepeda Motor",
                        data: sepeda_motor
                    }, {
                        name: "Kendaraan Khusus",
                        data: ransus
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
                                mobil_penumpang_sebelumnya = mobil_penumpang[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                mobil_penumpang_sebelumnya = mobil_penumpang[1];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                mobil_bus_sebelumnya = mobil_bus[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                mobil_bus_sebelumnya = mobil_bus[1];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                mobil_barang_sebelumnya = mobil_barang[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                mobil_barang_sebelumnya = mobil_barang[1];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                sepeda_motor_sebelumnya = sepeda_motor[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                sepeda_motor_sebelumnya = sepeda_motor[1];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                ransus_sebelumnya = ransus[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                ransus_sebelumnya = ransus[1];
                            }


                            return (
                                `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 50rem; height:10rem;">`:'<div style="width: 20rem; height:10rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                    <div class="my-2  text-center">   
                                                        <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                    </div>
                                                        <div class="row">
                                                            <div class="col-md-7 ms-1">
                                                                <span class="fw-bold">Mobil Penumpang</span><br>
                                                                <span class="fw-bold">Mobil Bus</span><br>
                                                                <span class="fw-bold">Mobil Barang</span><br>
                                                                <span class="fw-bold">Sepeda Motor</span><br>
                                                                <span class="fw-bold">Kendaraan Khusus</span><br>
                                                            </div>
                                                            <div class="col-md-1">
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                            </div>
                                                            <div class="col-md-4 ms-n1">
                                                                <span class="fw-bold">${nf.format(mobil_penumpang_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(mobil_bus_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(mobil_barang_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(sepeda_motor_sebelumnya)}</span><br>
                                                                <span class="fw-bold">${nf.format(ransus_sebelumnya)}</span><br>
                                                            </div>
                                                        </div>
                                                </div> 
                                                <div class="col-md-4">
                                                    <div style ="border-left: 2px solid silver; height: 500px; position: absolute; left: -5%; top: 0;"></div>
                                                    <div class="my-2  text-center"">   
                                                        <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                    </div>
                                                        <div class="row">
                                                            <div class="col-md-7">
                                                                <span class="fw-bold">Mobil Penumpang</span><br>
                                                                <span class="fw-bold">Mobil Bus</span><br>
                                                                <span class="fw-bold">Mobil Barang</span><br>
                                                                <span class="fw-bold">Sepeda Motor</span><br>
                                                                <span class="fw-bold">Kendaraan Khusus</span><br>   </div>
                                                            <div class="col-md-1">
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                                <span class="fw-bold">:</span><br>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <span class="fw-bold">${nf.format(mobil_penumpang[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(mobil_bus[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(mobil_barang[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(sepeda_motor[dataPointIndex])}</span><br>
                                                                <span class="fw-bold">${nf.format(ransus[dataPointIndex])}</span><br>
                                                            </div>
                                                        </div>
                                                </div> 

                                                <div class="col-md-4">
                                                    <div style ="border-left: 2px solid silver; height: 500px; position: absolute; left: 5%; top: 0;"></div>
                                                        <div class="my-2  text-center"">   
                                                            <span class="fs-6 fw-bold">Presentase</span>
                                                        </div>
                                                        <div class="text-center">
                                                            <span class="fw-bold">${presentase_mobil_penumpang[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_mobil_bus[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_mobil_barang[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_sepeda_motor[dataPointIndex]}%</span><br>
                                                            <span class="fw-bold">${presentase_ransus[dataPointIndex]}%</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                ` : `
                                                <div class="col-md-12">
                                                    <div class="my-2 text-center">    
                                                        <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-7 ms-1">
                                                                <span class="fw-bold">Mobil Penumpang</span><br>
                                                                <span class="fw-bold">Mobil Bus</span><br>
                                                                <span class="fw-bold">Mobil Barang</span><br>
                                                                <span class="fw-bold">Sepeda Motor</span><br>
                                                                <span class="fw-bold">Kendaraan Khusus</span><br>   
                                                        </div>
                                                        <div class="col-md-1">
                                                            <span class="fw-bold">:</span><br>
                                                            <span class="fw-bold">:</span><br>
                                                            <span class="fw-bold">:</span><br>
                                                            <span class="fw-bold">:</span><br>
                                                            <span class="fw-bold">:</span><br>
                                                        </div>
                                                        <div class="col-md-4 ms-n1" >
                                                            <span class="fw-bold">${nf.format(mobil_penumpang[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(mobil_bus[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(mobil_barang[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(sepeda_motor[dataPointIndex])}</span><br>
                                                            <span class="fw-bold">${nf.format(ransus[dataPointIndex])}</span><br>
                                                        </div>
                                                    </div>
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

                var ditregidentranmoryear = new ApexCharts(document.querySelector("#chartyear5"), ditregidentranmoryear);
                ditregidentranmoryear.render();
            }
        })


    }
</script>