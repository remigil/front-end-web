<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 align-self-center">
            <div id="nama">
                <div style="display: flex;">
                    <h3><a href="<?= base_url('executive/Polda_executive/' . $data['id']) ?>" style="color:#007DD8 ;"><i class="fas fa-less-than"></i>|</a></h3>
                    &nbsp;&nbsp; <h3 style="text-transform: uppercase; color:#007DD8;"> SUBGAKKUM POLDA <?= $data['poldaid']['name_polda']; ?> </h3>

                </div>
            </div>
            <p>Today is <?= date('l, j F Y') ?></p>
        </div>

        <?php $mobile = detect_mobile();
        if ($mobile === true) { ?>
            <div class="col-md-12" style="margin-left: -15px;">
                <!-- <button type="button" class="btn btn-primary ms-3" style=" border: 0.5px solid #0275d8; height:-20px" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <iconify-icon icon="mdi:file-document-multiple"></iconify-icon>
                </button> -->
                <!-- <button type="button" class="btn dropdown-toggle btn-outline-primary" data-toggle="dropdown" aria-expanded="false" style="width: 200px; border-color:#007DD8;">
                    Export Laporan
                </button> -->

                <!-- <div class="dropdown-menu" style="width: 200px;">
                    <a class="dropdown-item" target="_blank" href="http://34.143.227.90:3019/v1/laporan_harian/anev_gakkum?type=day&date=<?= date('Y-m-d'); ?>">Harian</a>
                    <a class="dropdown-item" target="_blank" href="http://34.143.227.90:3019/v1/laporan_harian/anev_gakkum?type=weeks&date=<?= date('Y-m-d'); ?>">Mingguan</a>
                    <a class="dropdown-item" target="_blank" href="http://34.143.227.90:3019/v1/laporan_harian/anev_gakkum?type=month&date=<?= date('m'); ?>">Bulanan</a>
                    <a class="dropdown-item" target="_blank" href="http://34.143.227.90:3019/v1/laporan_harian/anev_gakkum?type=triwulan&date=<?= date('m'); ?>">Triwulan</a>
                    <a class="dropdown-item" target="_blank" href="http://34.143.227.90:3019/v1/laporan_harian/anev_gakkum?type=years&date=<?= date('Y'); ?>">Tahunan</a>
                </div> -->
            </div>
        <?php } else { ?>
            <!-- <div class="col-md-1 text-end align-self-center">
                <button type="button" class="btn btn-primary ms-3" style=" border: 0.5px solid #0275d8; height:-20px" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <iconify-icon icon="mdi:file-document-multiple"></iconify-icon>
                </button>
            </div> -->
            <div class="col-md-3 text-end align-self-center">

                <div class="btn-group">
                    <!-- <button type="button" class="btn dropdown-toggle btn-outline-primary" data-toggle="dropdown" aria-expanded="false" style="width: 200px; border-color:#007DD8;">
                        Export Laporan
                    </button>

                    <div class="dropdown-menu" style="width: 200px;">
                        <a class="dropdown-item" target="_blank" href="http://34.143.227.90:3019/v1/laporan_harian/anev_gakkum?type=day&date=<?= date('Y-m-d'); ?>">Harian</a>
                        <a class="dropdown-item" target="_blank" href="http://34.143.227.90:3019/v1/laporan_harian/anev_gakkum?type=weeks&date=<?= date('Y-m-d'); ?>">Mingguan</a>
                        <a class="dropdown-item" target="_blank" href="http://34.143.227.90:3019/v1/laporan_harian/anev_gakkum?type=month&date=<?= date('m'); ?>">Bulanan</a>
                        <a class="dropdown-item" target="_blank" href="http://34.143.227.90:3019/v1/laporan_harian/anev_gakkum?type=triwulan&date=<?= date('m'); ?>">Triwulan</a>
                        <a class="dropdown-item" target="_blank" href="http://34.143.227.90:3019/v1/laporan_harian/anev_gakkum?type=years&date=<?= date('Y'); ?>">Tahunan</a>
                    </div> -->
                </div>
            </div>
        <?php } ?>
    </div>

    <div class=" row">

        <div class="col-md-12 mt-5">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-4 mb-3">
                    <h4 style="text-transform: uppercase; color:#007DD8;">Statistik POLDA <?= $data['poldaid']['name_polda']; ?></h4>
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

                                <div class="col-md-10 float-start">
                                    <span class="fs-5 float-start" style="color:#464646;">
                                        Total<span class="fw-bold "> LAKA </span>
                                        </br>
                                        <span class="fs-5 fw-bold float-start" style="color:#464646;" id="lakalantas"></span>
                                        <p class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detailLaka"></p>
                                    </span>
                                </div>
                                <div class="col-md-2">
                                    <img src="<?= base_url('assets/icon/dashboard/LAKA.png') ?>" alt="" style="width: 60px; margin-left:-25px;">
                                    <!-- <i class='bx bxs-car-crash ms-n2' style="font-size: 40px; color: #464646;"></i> -->
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
                                        Total<span class="fw-bold"> GARLANTAS </span>
                                        </br>
                                        <span class="fs-5 fw-bold float-start" style="color:#464646;" id="garlantas"></span>
                                        <p class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detailgarlantas"></p>
                                    </span>
                                </div>
                                <div class="col-md-2">
                                    <img src="<?= base_url('assets/icon/dashboard/GARLANTAS.png') ?>" alt="" style="width: 60px; margin-left:-25px;">
                                    <!-- <iconify-icon icon="fa6-solid:motorcycle" class="ms-n2" style="font-size: 30px; color: #464646;"></iconify-icon> -->
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
                                        Total <span class="fw-bold"> Turjagwali</span>
                                        </br>
                                        <span class="fs-5 fw-bold float-start" style="color:#464646;" id="turjagwali"></span>
                                        <p class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detailturjagwali"></p>
                                    </span>
                                </div>
                                <div class="col-md-2">
                                    <img src="<?= base_url('assets/icon/dashboard/TURJAGWALI.png') ?>" alt="" style="width: 60px; margin-left:-25px;">
                                    <!-- <iconify-icon icon="ic:round-car-crash" class="ms-n2" style="font-size: 40px; color: #464646;"></iconify-icon> -->
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
                                        Total<span class="fw-bold"> WAL & PJR</span>
                                        </br>
                                        <span class="fs-6 fw-bold float-start" style="color:#464646;" id="walpjr"></span>
                                        <p class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detailwalpjr"></p>
                                    </span>
                                </div>
                                <div class="col-md-2">
                                    <img src="<?= base_url('assets/icon/dashboard/WAL_PJR.png') ?>" alt="" style="width: 60px; margin-left:-25px;">
                                    <!-- <i class='bx bxs-car-crash ms-n2' style="font-size: 40px; color: #464646;"></i> -->
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



        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
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
        </div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
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
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.36.3/apexcharts.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script>
    let polda_id = '<?= $data['id'] ?>'
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
            url: "<?php echo base_url(); ?>ditgakkum/subditgakkum/getStatistik/" + polda_id,
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
            url: "<?php echo base_url(); ?>ditgakkum/subditgakkum/getChartLaka/" + polda_id,
            data: {
                start_date: seven_daysAgo,
                end_date: today,
                filter: 'day'
            },
            dataType: "JSON",
            success: function(result) {
                let polda_month = result.data.polda_month
                let insiden_kecelakaan = result.data.insiden_kecelakaan
                let persentase_kecelakaan = result.data.persentase_kecelakaan
                let meninggal_dunia = result.data.meninggal_dunia
                let persentase_md = result.data.persentase_md
                let luka_berat = result.data.luka_berat
                let persentase_lb = result.data.persentase_lb
                let luka_ringan = result.data.luka_ringan
                let persentase_lr = result.data.persentase_lr

                $('#titlelakalantasday').html(`<h4 class="card-title mb-0 text-uppercase">PERBANDINGAN DATA LAKA HARIAN (7 Harian)</h4>`);

                var ditgakkumlakaday = {
                    series: [{
                        name: 'Insiden Kecekalaan',
                        type: 'line',
                        data: insiden_kecelakaan,
                        color: "#5400D8"
                    }, {
                        name: 'Meninggal Dunia',
                        type: 'line',
                        data: meninggal_dunia,
                        color: "#D80000"
                    }, {
                        name: 'Luka Berat',
                        type: 'line',
                        data: luka_berat,
                        color: "#D8A700"
                    }, {
                        name: 'Luka Ringan',
                        type: 'line',
                        data: luka_ringan,
                        color: "#80D800"
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
                                insiden_kecelakaansebelumnya = insiden_kecelakaan[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                insiden_kecelakaansebelumnya = insiden_kecelakaan[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                insiden_kecelakaansebelumnya = insiden_kecelakaan[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                insiden_kecelakaansebelumnya = insiden_kecelakaan[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                insiden_kecelakaansebelumnya = insiden_kecelakaan[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                insiden_kecelakaansebelumnya = insiden_kecelakaan[5];
                            }
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                meninggal_duniasebelumnya = meninggal_dunia[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                meninggal_duniasebelumnya = meninggal_dunia[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                meninggal_duniasebelumnya = meninggal_dunia[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                meninggal_duniasebelumnya = meninggal_dunia[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                meninggal_duniasebelumnya = meninggal_dunia[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                meninggal_duniasebelumnya = meninggal_dunia[5];
                            }
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                luka_beratsebelumnya = luka_berat[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                luka_beratsebelumnya = luka_berat[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                luka_beratsebelumnya = luka_berat[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                luka_beratsebelumnya = luka_berat[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                luka_beratsebelumnya = luka_berat[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                luka_beratsebelumnya = luka_berat[5];
                            }
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                luka_ringansebelumnya = luka_ringan[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                luka_ringansebelumnya = luka_ringan[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                luka_ringansebelumnya = luka_ringan[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                luka_ringansebelumnya = luka_ringan[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                luka_ringansebelumnya = luka_ringan[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                luka_ringansebelumnya = luka_ringan[5];
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
                                                            <span class="fw-bold">Total MD</span><br>
                                                            <span class="fw-bold">Total LB</span><br>
                                                            <span class="fw-bold">Total LR</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${insiden_kecelakaansebelumnya}</span><br>
                                                            <span class="fw-bold">${meninggal_duniasebelumnya}</span><br>
                                                            <span class="fw-bold">${luka_beratsebelumnya}</span><br>
                                                            <span class="fw-bold">${luka_ringansebelumnya}</span><br>
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
                                                            <span class="fw-bold">Total MD</span><br>
                                                            <span class="fw-bold">Total LB</span><br>
                                                            <span class="fw-bold">Total LR</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${insiden_kecelakaan[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${meninggal_dunia[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${luka_berat[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${luka_ringan[dataPointIndex]}</span><br>                                     </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentase_kecelakaan[dataPointIndex]} %</span><br>
                                                    <span class="fw-bold">${persentase_md[dataPointIndex]} %</span><br>
                                                    <span class="fw-bold">${persentase_lb[dataPointIndex]} %</span><br>
                                                    <span class="fw-bold">${persentase_lr[dataPointIndex]} %</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total LAKA</span><br>
                                                            <span class="fw-bold">Total MD</span><br>
                                                            <span class="fw-bold">Total LB</span><br>
                                                            <span class="fw-bold">Total LR</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${insiden_kecelakaan[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${meninggal_dunia[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${luka_berat[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${luka_ringan[dataPointIndex]}</span><br>                                     </div>
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

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>ditgakkum/subditgakkum/getChartGarlantas/" + polda_id,
            data: {
                start_date: seven_daysAgo,
                end_date: today,
                filter: 'day'
            },
            dataType: "JSON",
            success: function(result) {
                let polda_month = result.data.polda_month
                let pelanggaran_berat = result.data.pelanggaran_berat
                let persentase_pb = result.data.persentase_pb
                let pelanggaran_sedang = result.data.pelanggaran_sedang
                let persentase_ps = result.data.persentase_ps
                let pelanggaran_ringan = result.data.pelanggaran_ringan
                let persentase_pr = result.data.persentase_pr
                let teguran = result.data.teguran
                let persentase_tg = result.data.persentase_tg
                $('#titlegarlantasday').html(`<h4 class="card-title mb-0 text-uppercase">PERBANDINGAN DATA GARLANTAS HARIAN (7 Harian)</h4>`);

                var ditgakkumdakgarday = {
                    series: [{
                        name: 'Pelanggaran Berat',
                        type: 'line',
                        data: pelanggaran_berat,
                        color: "#D80000"
                    }, {
                        name: 'Pelanggaran Sedang',
                        type: 'line',
                        data: pelanggaran_sedang,
                        color: "#D8A700"
                    }, {
                        name: 'Pelanggaran Ringan',
                        type: 'line',
                        data: pelanggaran_ringan,
                        color: "#80D800"
                    }, {
                        name: 'Teguran',
                        type: 'line',
                        data: teguran,
                        color: "#5400D8"
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
                                pelanggaran_beratsebelumnya = pelanggaran_berat[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                pelanggaran_beratsebelumnya = pelanggaran_berat[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                pelanggaran_beratsebelumnya = pelanggaran_berat[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                pelanggaran_beratsebelumnya = pelanggaran_berat[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                pelanggaran_beratsebelumnya = pelanggaran_berat[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                pelanggaran_beratsebelumnya = pelanggaran_berat[5];
                            }
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                pelanggaran_sedangsebelumnya = pelanggaran_sedang[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                pelanggaran_sedangsebelumnya = pelanggaran_sedang[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                pelanggaran_sedangsebelumnya = pelanggaran_sedang[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                pelanggaran_sedangsebelumnya = pelanggaran_sedang[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                pelanggaran_sedangsebelumnya = pelanggaran_sedang[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                pelanggaran_sedangsebelumnya = pelanggaran_sedang[5];
                            }
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                pelanggaran_ringansebelumnya = pelanggaran_ringan[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                pelanggaran_ringansebelumnya = pelanggaran_ringan[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                pelanggaran_ringansebelumnya = pelanggaran_ringan[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                pelanggaran_ringansebelumnya = pelanggaran_ringan[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                pelanggaran_ringansebelumnya = pelanggaran_ringan[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                pelanggaran_ringansebelumnya = pelanggaran_ringan[5];
                            }
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                teguransebelumnya = teguran[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                teguransebelumnya = teguran[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                teguransebelumnya = teguran[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                teguransebelumnya = teguran[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                teguransebelumnya = teguran[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                teguransebelumnya = teguran[5];
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
                                                            <span class="fw-bold">Total PB</span><br>
                                                            <span class="fw-bold">Total PS</span><br>
                                                            <span class="fw-bold">Total PR</span><br>
                                                            <span class="fw-bold">Total TG</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${pelanggaran_beratsebelumnya}</span><br>
                                                            <span class="fw-bold">${pelanggaran_sedangsebelumnya}</span><br>
                                                            <span class="fw-bold">${pelanggaran_ringansebelumnya}</span><br>
                                                            <span class="fw-bold">${teguransebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total PB</span><br>
                                                            <span class="fw-bold">Total PS</span><br>
                                                            <span class="fw-bold">Total PR</span><br>
                                                            <span class="fw-bold">Total TG</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${pelanggaran_berat[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${pelanggaran_sedang[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${pelanggaran_ringan[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${teguran[dataPointIndex]}</span><br>        
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentase_pb[dataPointIndex]} %</span><br>
                                                    <span class="fw-bold">${persentase_ps[dataPointIndex]} %</span><br>
                                                    <span class="fw-bold">${persentase_pr[dataPointIndex]} %</span><br>
                                                    <span class="fw-bold">${persentase_tg[dataPointIndex]} %</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total PB</span><br>
                                                            <span class="fw-bold">Total PS</span><br>
                                                            <span class="fw-bold">Total PR</span><br>
                                                            <span class="fw-bold">Total TG</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${pelanggaran_berat[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${pelanggaran_sedang[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${pelanggaran_ringan[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${teguran[dataPointIndex]}</span><br>         
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

                var ditgakkumdakgarday = new ApexCharts(document.querySelector("#chartday3"), ditgakkumdakgarday);
                ditgakkumdakgarday.render();

            }
        })

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>ditgakkum/subditgakkum/getChartTatib/" + polda_id,
            data: {
                start_date: seven_daysAgo,
                end_date: today,
                filter: 'day'
            },
            dataType: "JSON",
            success: function(result) {
                let polda_month = result.data.polda_month
                let pengaturan = result.data.pengaturan
                let persentase_pengaturan = result.data.persentase_pengaturan
                let pengawalan = result.data.pengawalan
                let persentase_pengawalan = result.data.persentase_pengawalan
                let penjagaan = result.data.penjagaan
                let persentase_penjagaan = result.data.persentase_penjagaan
                let patroli = result.data.patroli
                let persentase_patroli = result.data.persentase_patroli
                $('#titletatibday').html(`<h4 class="card-title mb-0 text-uppercase">PERBANDINGAN DATA TURJAGWALI HARIAN (7 Harian)</h4>`);


                var ditgakkumtatibday = {
                    series: [{
                        name: 'Pengaturan',
                        type: 'line',
                        data: pengaturan,
                        color: "#5400D8"
                    }, {
                        name: 'Pengawalan',
                        type: 'line',
                        data: pengawalan,
                        color: "#D80000"
                    }, {
                        name: 'Penjagaan',
                        type: 'line',
                        data: penjagaan,
                        color: "#D8A700"
                    }, {
                        name: 'Patroli',
                        type: 'line',
                        data: patroli,
                        color: "#80D800"
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
                                pengaturansebelumnya = pengaturan[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                pengaturansebelumnya = pengaturan[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                pengaturansebelumnya = pengaturan[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                pengaturansebelumnya = pengaturan[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                pengaturansebelumnya = pengaturan[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                pengaturansebelumnya = pengaturan[5];
                            }
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                pengawalansebelumnya = pengawalan[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                pengawalansebelumnya = pengawalan[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                pengawalansebelumnya = pengawalan[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                pengawalansebelumnya = pengawalan[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                pengawalansebelumnya = pengawalan[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                pengawalansebelumnya = pengawalan[5];
                            }
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                penjagaansebelumnya = penjagaan[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                penjagaansebelumnya = penjagaan[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                penjagaansebelumnya = penjagaan[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                penjagaansebelumnya = penjagaan[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                penjagaansebelumnya = penjagaan[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                penjagaansebelumnya = penjagaan[5];
                            }
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                patrolisebelumnya = patroli[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                patrolisebelumnya = patroli[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                patrolisebelumnya = patroli[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                patrolisebelumnya = patroli[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                patrolisebelumnya = patroli[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                patrolisebelumnya = patroli[5];
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
                                                        <span class="fw-bold">Total Pengaturan</span><br>
                                                        <span class="fw-bold">Total Pengawalan</span><br>
                                                        <span class="fw-bold">Total Penjagaan</span><br>
                                                        <span class="fw-bold">Total Patroli</span><br>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <span class="fw-bold">${pengaturansebelumnya}</span><br>
                                                        <span class="fw-bold">${pengawalansebelumnya}</span><br>
                                                        <span class="fw-bold">${penjagaansebelumnya}</span><br>
                                                        <span class="fw-bold">${patrolisebelumnya}</span><br>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="col-md-4">
                                            <div class="my-2 text-center">    
                                                <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                            </div>
                                            <div class="row">
                                                    <div class="col-md-8">
                                                        <span class="fw-bold">Total Pengaturan</span><br>
                                                        <span class="fw-bold">Total Pengawalan</span><br>
                                                        <span class="fw-bold">Total Penjagaan</span><br>
                                                        <span class="fw-bold">Total Patroli</span><br>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <span class="fw-bold">${pengaturan[dataPointIndex]}</span><br>
                                                        <span class="fw-bold">${pengawalan[dataPointIndex]}</span><br>
                                                        <span class="fw-bold">${penjagaan[dataPointIndex]}</span><br>
                                                        <span class="fw-bold">${patroli[dataPointIndex]}</span><br>        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 text-center">
                                            <div class="my-2 text-center">
                                                <span class="fs-6 fw-bold">Presentase</span>
                                            </div>
                                                <span class="fw-bold">${persentase_pengaturan[dataPointIndex]} %</span><br>
                                                <span class="fw-bold">${persentase_pengawalan[dataPointIndex]} %</span><br>
                                                <span class="fw-bold">${persentase_penjagaan[dataPointIndex]} %</span><br>
                                                <span class="fw-bold">${persentase_patroli[dataPointIndex]} %</span><br>
                                            </div>
                                            ` : `
                                            <div class="col-md-12">
                                            <div class="my-2 text-center">    
                                                <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                            </div>
                                            <div class="row">
                                                    <div class="col-md-7 ms-2">
                                                        <span class="fw-bold">Total Pengaturan</span><br>
                                                        <span class="fw-bold">Total Pengawalan</span><br>
                                                        <span class="fw-bold">Total Penjagaan</span><br>
                                                        <span class="fw-bold">Total Patroli</span><br>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <span class="fw-bold">${pengaturan[dataPointIndex]}</span><br>
                                                        <span class="fw-bold">${pengawalan[dataPointIndex]}</span><br>
                                                        <span class="fw-bold">${penjagaan[dataPointIndex]}</span><br>
                                                        <span class="fw-bold">${patroli[dataPointIndex]}</span><br>         
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

                var ditgakkumtatibday = new ApexCharts(document.querySelector("#chartday2"), ditgakkumtatibday);
                ditgakkumtatibday.render();

            }
        })

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>ditgakkum/subditgakkum/getChartWalPjr/"+polda_id,
            data: {
                start_date: seven_daysAgo,
                end_date: today,
                filter: 'day'
            },
            dataType: "JSON",
            success: function(result) {
                let polda_month = result.data.polda_month
                let wal = result.data.wal
                let persentase_wal = result.data.persentase_wal
                let pjr = result.data.pjr
                let persentase_pjr = result.data.persentase_pjr


                $('#titlewalpjrday').html(`<h4 class="card-title mb-0 text-uppercase">PERBANDINGAN DATA WAL & PJR HARIAN (7 Harian)</h4>`);

                var ditgakkumwalpjrday = {
                    series: [{
                        name: 'WAL',
                        type: 'line',
                        data: wal,
                        color: "#5400D8"
                    }, {
                        name: 'PJR',
                        type: 'line',
                        data: pjr,
                        color: "#D80000"
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
                                walsebelumnya = wal[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                walsebelumnya = wal[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                walsebelumnya = wal[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                walsebelumnya = wal[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                walsebelumnya = wal[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                walsebelumnya = wal[5];
                            }
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                pjrsebelumnya = pjr[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                pjrsebelumnya = pjr[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                pjrsebelumnya = pjr[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                pjrsebelumnya = pjr[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                pjrsebelumnya = pjr[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                pjrsebelumnya = pjr[5];
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
                                                            <span class="fw-bold">Total WAL</span><br>
                                                            <span class="fw-bold">Total PJR</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${walsebelumnya}</span><br>
                                                            <span class="fw-bold">${pjrsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total WAL</span><br>
                                                            <span class="fw-bold">Total PJR</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${wal[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${pjr[dataPointIndex]}</span><br>         
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentase_wal[dataPointIndex]} %</span><br>
                                                    <span class="fw-bold">${persentase_pjr[dataPointIndex]} %</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total WAL</span><br>
                                                            <span class="fw-bold">Total PJR</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${wal[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${pjr[dataPointIndex]}</span><br>
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
                var ditgakkumwalpjrday = new ApexCharts(document.querySelector("#chartday1"), ditgakkumwalpjrday);
                ditgakkumwalpjrday.render();
            }
        })
    }

    // // Month
    function getDitgakkummonth(firstDay, lastDay) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>ditgakkum/subditgakkum/getChartLaka/"+polda_id,
            data: {
                start_date: firstDay,
                end_date: lastDay,
                filter: 'month'
            },
            dataType: "JSON",
            success: function(result) {
                let polda_month = result.data.polda_month
                let insiden_kecelakaan = result.data.insiden_kecelakaan
                let persentase_kecelakaan = result.data.persentase_kecelakaan
                let meninggal_dunia = result.data.meninggal_dunia
                let persentase_md = result.data.persentase_md
                let luka_berat = result.data.luka_berat
                let persentase_lb = result.data.persentase_lb
                let luka_ringan = result.data.luka_ringan
                let persentase_lr = result.data.persentase_lr
                // $('#titlewalpjrmonth').html(`<h4 class="card-title mb-0 text-uppercase">DATA WAL & PJR BULANAN</h4>`);
                // $('#titletatibmonth').html(`<h4 class="card-title mb-0 text-uppercase">DATA TATIB BULANAN</h4>`);
                // $('#titlegarlantasmonth').html(`<h4 class="card-title mb-0 text-uppercase">DATA GARLANTAS BULANAN</h4>`);
                $('#titlelakalantasmonth').html(`<h4 class="card-title mb-0 text-uppercase">PERBANDINGAN DATA LAKA BULANAN</h4>`);


                var ditgakkumlaka = {
                    series: [{
                        name: 'Insiden Kecekalaan',
                        type: 'line',
                        data: insiden_kecelakaan,
                        color: "#5400D8"
                    }, {
                        name: 'Meninggal Dunia',
                        type: 'line',
                        data: meninggal_dunia,
                        color: "#D80000"
                    }, {
                        name: 'Luka Berat',
                        type: 'line',
                        data: luka_berat,
                        color: "#D8A700"
                    }, {
                        name: 'Luka Ringan',
                        type: 'line',
                        data: luka_ringan,
                        color: "#80D800"
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
                                insiden_kecelakaansebelumnya = insiden_kecelakaan[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                insiden_kecelakaansebelumnya = insiden_kecelakaan[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                insiden_kecelakaansebelumnya = insiden_kecelakaan[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                insiden_kecelakaansebelumnya = insiden_kecelakaan[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                insiden_kecelakaansebelumnya = insiden_kecelakaan[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                insiden_kecelakaansebelumnya = insiden_kecelakaan[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                insiden_kecelakaansebelumnya = insiden_kecelakaan[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                insiden_kecelakaansebelumnya = insiden_kecelakaan[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                insiden_kecelakaansebelumnya = insiden_kecelakaan[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                insiden_kecelakaansebelumnya = insiden_kecelakaan[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                insiden_kecelakaansebelumnya = insiden_kecelakaan[10];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                meninggal_duniasebelumnya = meninggal_dunia[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                meninggal_duniasebelumnya = meninggal_dunia[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                meninggal_duniasebelumnya = meninggal_dunia[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                meninggal_duniasebelumnya = meninggal_dunia[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                meninggal_duniasebelumnya = meninggal_dunia[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                meninggal_duniasebelumnya = meninggal_dunia[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                meninggal_duniasebelumnya = meninggal_dunia[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                meninggal_duniasebelumnya = meninggal_dunia[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                meninggal_duniasebelumnya = meninggal_dunia[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                meninggal_duniasebelumnya = meninggal_dunia[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                meninggal_duniasebelumnya = meninggal_dunia[10];
                            }
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                luka_beratsebelumnya = luka_berat[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                luka_beratsebelumnya = luka_berat[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                luka_beratsebelumnya = luka_berat[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                luka_beratsebelumnya = luka_berat[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                luka_beratsebelumnya = luka_berat[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                luka_beratsebelumnya = luka_berat[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                luka_beratsebelumnya = luka_berat[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                luka_beratsebelumnya = luka_berat[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                luka_beratsebelumnya = luka_berat[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                luka_beratsebelumnya = luka_berat[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                luka_beratsebelumnya = luka_berat[10];
                            }
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                luka_ringansebelumnya = luka_ringan[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                luka_ringansebelumnya = luka_ringan[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                luka_ringansebelumnya = luka_ringan[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                luka_ringansebelumnya = luka_ringan[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                luka_ringansebelumnya = luka_ringan[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                luka_ringansebelumnya = luka_ringan[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                luka_ringansebelumnya = luka_ringan[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                luka_ringansebelumnya = luka_ringan[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                luka_ringansebelumnya = luka_ringan[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                luka_ringansebelumnya = luka_ringan[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                luka_ringansebelumnya = luka_ringan[10];
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
                                                            <span class="fw-bold">Total MD</span><br>
                                                            <span class="fw-bold">Total LB</span><br>
                                                            <span class="fw-bold">Total LR</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${insiden_kecelakaansebelumnya}</span><br>
                                                            <span class="fw-bold">${meninggal_duniasebelumnya}</span><br>
                                                            <span class="fw-bold">${luka_beratsebelumnya}</span><br>
                                                            <span class="fw-bold">${luka_ringansebelumnya}</span><br>
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
                                                            <span class="fw-bold">Total MD</span><br>
                                                            <span class="fw-bold">Total LB</span><br>
                                                            <span class="fw-bold">Total LR</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${insiden_kecelakaan[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${meninggal_dunia[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${luka_berat[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${luka_ringan[dataPointIndex]}</span><br>         
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentase_kecelakaan[dataPointIndex]} %</span><br>
                                                    <span class="fw-bold">${persentase_md[dataPointIndex]} %</span><br>
                                                    <span class="fw-bold">${persentase_lb[dataPointIndex]} %</span><br>
                                                    <span class="fw-bold">${persentase_lr[dataPointIndex]} %</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                    <div class="my-2 text-center">    
                                                        <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                    </div>
                                                        <div class="row">
                                                            <div class="col-md-8 ms-2">
                                                            <span class="fw-bold">Total LAKA</span><br>
                                                                <span class="fw-bold">Total MD</span><br>
                                                                <span class="fw-bold">Total LB</span><br>
                                                                <span class="fw-bold">Total LR</span><br>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <span class="fw-bold">${insiden_kecelakaan[dataPointIndex]}</span><br>
                                                                <span class="fw-bold">${meninggal_dunia[dataPointIndex]}</span><br>
                                                                <span class="fw-bold">${luka_berat[dataPointIndex]}</span><br>
                                                                <span class="fw-bold">${luka_ringan[dataPointIndex]}</span><br> 
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

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>ditgakkum/subditgakkum/getChartGarlantas/"+polda_id,
            data: {
                start_date: firstDay,
                end_date: lastDay,
                filter: 'month'
            },
            dataType: "JSON",
            success: function(result) {
                let polda_month = result.data.polda_month
                let pelanggaran_berat = result.data.pelanggaran_berat
                let persentase_pb = result.data.persentase_pb
                let pelanggaran_sedang = result.data.pelanggaran_sedang
                let persentase_ps = result.data.persentase_ps
                let pelanggaran_ringan = result.data.pelanggaran_ringan
                let persentase_pr = result.data.persentase_pr
                let teguran = result.data.teguran
                let persentase_tg = result.data.persentase_tg
                $('#titlegarlantasmonth').html(`<h4 class="card-title mb-0 text-uppercase">PERBANDINGAN DATA GARLANTAS BULANAN</h4>`);



                var ditgakkumdakgar = {
                    series: [{
                        name: 'Pelanggaran Berat',
                        type: 'line',
                        data: pelanggaran_berat,
                        color: "#D80000"
                    }, {
                        name: 'Pelanggaran Sedang',
                        type: 'line',
                        data: pelanggaran_sedang,
                        color: "#D8A700"
                    }, {
                        name: 'Pelanggaran Ringan',
                        type: 'line',
                        data: pelanggaran_ringan,
                        color: "#80D800"
                    }, {
                        name: 'Teguran',
                        type: 'line',
                        data: teguran,
                        color: "#5400D8"
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
                                pelanggaran_beratsebelumnya = pelanggaran_berat[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                pelanggaran_beratsebelumnya = pelanggaran_berat[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                pelanggaran_beratsebelumnya = pelanggaran_berat[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                pelanggaran_beratsebelumnya = pelanggaran_berat[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                pelanggaran_beratsebelumnya = pelanggaran_berat[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                pelanggaran_beratsebelumnya = pelanggaran_berat[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                pelanggaran_beratsebelumnya = pelanggaran_berat[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                pelanggaran_beratsebelumnya = pelanggaran_berat[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                pelanggaran_beratsebelumnya = pelanggaran_berat[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                pelanggaran_beratsebelumnya = pelanggaran_berat[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                pelanggaran_beratsebelumnya = pelanggaran_berat[10];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                pelanggaran_sedangsebelumnya = pelanggaran_sedang[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                pelanggaran_sedangsebelumnya = pelanggaran_sedang[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                pelanggaran_sedangsebelumnya = pelanggaran_sedang[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                pelanggaran_sedangsebelumnya = pelanggaran_sedang[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                pelanggaran_sedangsebelumnya = pelanggaran_sedang[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                pelanggaran_sedangsebelumnya = pelanggaran_sedang[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                pelanggaran_sedangsebelumnya = pelanggaran_sedang[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                pelanggaran_sedangsebelumnya = pelanggaran_sedang[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                pelanggaran_sedangsebelumnya = pelanggaran_sedang[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                pelanggaran_sedangsebelumnya = pelanggaran_sedang[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                pelanggaran_sedangsebelumnya = pelanggaran_sedang[10];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                pelanggaran_ringansebelumnya = pelanggaran_ringan[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                pelanggaran_ringansebelumnya = pelanggaran_ringan[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                pelanggaran_ringansebelumnya = pelanggaran_ringan[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                pelanggaran_ringansebelumnya = pelanggaran_ringan[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                pelanggaran_ringansebelumnya = pelanggaran_ringan[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                pelanggaran_ringansebelumnya = pelanggaran_ringan[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                pelanggaran_ringansebelumnya = pelanggaran_ringan[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                pelanggaran_ringansebelumnya = pelanggaran_ringan[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                pelanggaran_ringansebelumnya = pelanggaran_ringan[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                pelanggaran_ringansebelumnya = pelanggaran_ringan[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                pelanggaran_ringansebelumnya = pelanggaran_ringan[10];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                teguransebelumnya = teguran[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                teguransebelumnya = teguran[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                teguransebelumnya = teguran[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                teguransebelumnya = teguran[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                teguransebelumnya = teguran[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                teguransebelumnya = teguran[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                teguransebelumnya = teguran[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                teguransebelumnya = teguran[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                teguransebelumnya = teguran[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                teguransebelumnya = teguran[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                teguransebelumnya = teguran[10];
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
                                                            <span class="fw-bold">Total PB</span><br>
                                                            <span class="fw-bold">Total PS</span><br>
                                                            <span class="fw-bold">Total PR</span><br>
                                                            <span class="fw-bold">Total TG</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${pelanggaran_beratsebelumnya}</span><br>
                                                            <span class="fw-bold">${pelanggaran_sedangsebelumnya}</span><br>
                                                            <span class="fw-bold">${pelanggaran_ringansebelumnya}</span><br>
                                                            <span class="fw-bold">${teguransebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total PB</span><br>
                                                            <span class="fw-bold">Total PS</span><br>
                                                            <span class="fw-bold">Total PR</span><br>
                                                            <span class="fw-bold">Total TG</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${pelanggaran_berat[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${pelanggaran_sedang[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${pelanggaran_ringan[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${teguran[dataPointIndex]}</span><br>        
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentase_pb[dataPointIndex]} %</span><br>
                                                    <span class="fw-bold">${persentase_ps[dataPointIndex]} %</span><br>
                                                    <span class="fw-bold">${persentase_pr[dataPointIndex]} %</span><br>
                                                    <span class="fw-bold">${persentase_tg[dataPointIndex]} %</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total PB</span><br>
                                                            <span class="fw-bold">Total PS</span><br>
                                                            <span class="fw-bold">Total PR</span><br>
                                                            <span class="fw-bold">Total TG</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${pelanggaran_berat[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${pelanggaran_sedang[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${pelanggaran_ringan[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${teguran[dataPointIndex]}</span><br>         
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
                }
                var ditgakkumdakgar = new ApexCharts(document.querySelector("#chart3"), ditgakkumdakgar);
                ditgakkumdakgar.render();
            }
        })

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>ditgakkum/subditgakkum/getChartTatib/"+polda_id,
            data: {
                start_date: firstDay,
                end_date: lastDay,
                filter: 'month'
            },
            dataType: "JSON",
            success: function(result) {
                let polda_month = result.data.polda_month
                let pengaturan = result.data.pengaturan
                let persentase_pengaturan = result.data.persentase_pengaturan
                let pengawalan = result.data.pengawalan
                let persentase_pengawalan = result.data.persentase_pengawalan
                let penjagaan = result.data.penjagaan
                let persentase_penjagaan = result.data.persentase_penjagaan
                let patroli = result.data.patroli
                let persentase_patroli = result.data.persentase_patroli
                $('#titletatibmonth').html(`<h4 class="card-title mb-0 text-uppercase">PERBANDINGAN DATA TURJAGWALI BULANAN</h4>`);


                var ditgakkumtatib = {
                    series: [{
                        name: 'Pengaturan',
                        type: 'line',
                        data: pengaturan,
                        color: "#5400D8"
                    }, {
                        name: 'Pengawalan',
                        type: 'line',
                        data: pengawalan,
                        color: "#D80000"
                    }, {
                        name: 'Penjagaan',
                        type: 'line',
                        data: penjagaan,
                        color: "#D8A700"
                    }, {
                        name: 'Patroli',
                        type: 'line',
                        data: patroli,
                        color: "#80D800"
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
                                pengaturansebelumnya = pengaturan[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                pengaturansebelumnya = pengaturan[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                pengaturansebelumnya = pengaturan[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                pengaturansebelumnya = pengaturan[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                pengaturansebelumnya = pengaturan[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                pengaturansebelumnya = pengaturan[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                pengaturansebelumnya = pengaturan[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                pengaturansebelumnya = pengaturan[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                pengaturansebelumnya = pengaturan[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                pengaturansebelumnya = pengaturan[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                pengaturansebelumnya = pengaturan[10];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                pengawalansebelumnya = pengawalan[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                pengawalansebelumnya = pengawalan[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                pengawalansebelumnya = pengawalan[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                pengawalansebelumnya = pengawalan[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                pengawalansebelumnya = pengawalan[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                pengawalansebelumnya = pengawalan[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                pengawalansebelumnya = pengawalan[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                pengawalansebelumnya = pengawalan[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                pengawalansebelumnya = pengawalan[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                pengawalansebelumnya = pengawalan[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                pengawalansebelumnya = pengawalan[10];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                penjagaansebelumnya = penjagaan[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                penjagaansebelumnya = penjagaan[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                penjagaansebelumnya = penjagaan[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                penjagaansebelumnya = penjagaan[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                penjagaansebelumnya = penjagaan[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                penjagaansebelumnya = penjagaan[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                penjagaansebelumnya = penjagaan[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                penjagaansebelumnya = penjagaan[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                penjagaansebelumnya = penjagaan[8]
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                penjagaansebelumnya = penjagaan[9]
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                penjagaansebelumnya = penjagaan[10]
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                patrolisebelumnya = patroli[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                patrolisebelumnya = patroli[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                patrolisebelumnya = patroli[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                patrolisebelumnya = patroli[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                patrolisebelumnya = patroli[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                patrolisebelumnya = patroli[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                patrolisebelumnya = patroli[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                patrolisebelumnya = patroli[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                patrolisebelumnya = patroli[8]
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                patrolisebelumnya = patroli[9]
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                patrolisebelumnya = patroli[10]
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
                                                        <span class="fw-bold">Total Pengaturan</span><br>
                                                        <span class="fw-bold">Total Pengawalan</span><br>
                                                        <span class="fw-bold">Total Penjagaan</span><br>
                                                        <span class="fw-bold">Total Patroli</span><br>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <span class="fw-bold">${pengaturansebelumnya}</span><br>
                                                        <span class="fw-bold">${pengawalansebelumnya}</span><br>
                                                        <span class="fw-bold">${penjagaansebelumnya}</span><br>
                                                        <span class="fw-bold">${patrolisebelumnya}</span><br>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="col-md-4">
                                            <div class="my-2 text-center">    
                                                <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                            </div>
                                            <div class="row">
                                                    <div class="col-md-8">
                                                        <span class="fw-bold">Total Pengaturan</span><br>
                                                        <span class="fw-bold">Total Pengawalan</span><br>
                                                        <span class="fw-bold">Total Penjagaan</span><br>
                                                        <span class="fw-bold">Total Patroli</span><br>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <span class="fw-bold">${pengaturan[dataPointIndex]}</span><br>
                                                        <span class="fw-bold">${pengawalan[dataPointIndex]}</span><br>
                                                        <span class="fw-bold">${penjagaan[dataPointIndex]}</span><br>
                                                        <span class="fw-bold">${patroli[dataPointIndex]}</span><br>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 text-center">
                                            <div class="my-2 text-center">
                                                <span class="fs-6 fw-bold">Presentase</span>
                                            </div>
                                                <span class="fw-bold">${persentase_pengaturan[dataPointIndex]} %</span><br>
                                                <span class="fw-bold">${persentase_pengawalan[dataPointIndex]} %</span><br>
                                                <span class="fw-bold">${persentase_penjagaan[dataPointIndex]} %</span><br>
                                                <span class="fw-bold">${persentase_patroli[dataPointIndex]} %</span><br>

                                            </div>
                                            ` : `
                                            <div class="col-md-12">
                                            <div class="my-2 text-center">    
                                                <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                            </div>
                                            <div class="row">
                                                    <div class="col-md-7 ms-2">
                                                        <span class="fw-bold">Total Pengaturan</span><br>
                                                        <span class="fw-bold">Total Pengawalan</span><br>
                                                        <span class="fw-bold">Total Penjagaan</span><br>
                                                        <span class="fw-bold">Total Patroli</span><br>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <span class="fw-bold">${pengaturan[dataPointIndex]}</span><br>
                                                        <span class="fw-bold">${pengawalan[dataPointIndex]}</span><br>
                                                        <span class="fw-bold">${penjagaan[dataPointIndex]}</span><br>
                                                        <span class="fw-bold">${patroli[dataPointIndex]}</span><br>

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

                var ditgakkumtatib = new ApexCharts(document.querySelector("#chart2"), ditgakkumtatib);
                ditgakkumtatib.render();
            }
        })

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>ditgakkum/subditgakkum/getChartWalPjr/"+polda_id,
            data: {
                start_date: firstDay,
                end_date: lastDay,
                filter: 'month'
            },
            dataType: "JSON",
            success: function(result) {
                let polda_month = result.data.polda_month
                let wal = result.data.wal
                let persentase_wal = result.data.persentase_wal
                let pjr = result.data.pjr
                let persentase_pjr = result.data.persentase_pjr


                $('#titlewalpjrmonth').html(`<h4 class="card-title mb-0 text-uppercase">PERBANDINGAN DATA WAL & PJR BULANAN</h4>`);

                var ditgakkumwalpjr = {
                    series: [{
                        name: 'WAL',
                        type: 'line',
                        data: wal,
                        color: "#5400D8"
                    }, {
                        name: 'PJR',
                        type: 'line',
                        data: pjr,
                        color: "#D80000"
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
                                walsebelumnya = wal[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                walsebelumnya = wal[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                walsebelumnya = wal[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                walsebelumnya = wal[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                walsebelumnya = wal[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                walsebelumnya = wal[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                walsebelumnya = wal[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                walsebelumnya = wal[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                walsebelumnya = wal[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                walsebelumnya = wal[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                walsebelumnya = wal[10];
                            }
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                pjrsebelumnya = pjr[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                pjrsebelumnya = pjr[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                pjrsebelumnya = pjr[2];
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                pjrsebelumnya = pjr[3];
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                pjrsebelumnya = pjr[4];
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                pjrsebelumnya = pjr[5];
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                pjrsebelumnya = pjr[6];
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                pjrsebelumnya = pjr[7];
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                pjrsebelumnya = pjr[8];
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                pjrsebelumnya = pjr[9];
                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                pjrsebelumnya = pjr[10];
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
                                                            <span class="fw-bold">Total WAL</span><br>
                                                            <span class="fw-bold">Total PJR</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${walsebelumnya}</span><br>
                                                            <span class="fw-bold">${pjrsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total WAL</span><br>
                                                            <span class="fw-bold">Total PJR</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${wal[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${pjr[dataPointIndex]}</span><br>         
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentase_wal[dataPointIndex]} %</span><br>
                                                    <span class="fw-bold">${persentase_pjr[dataPointIndex]} %</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total WAL</span><br>
                                                            <span class="fw-bold">Total PJR</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${wal[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${pjr[dataPointIndex]}</span><br>
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
                var ditgakkumwalpjr = new ApexCharts(document.querySelector("#chart"), ditgakkumwalpjr);
                ditgakkumwalpjr.render();
            }
        })
    }


    // // Year
    function getDitgakkumyear(three_yearAgo, lastDay) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>ditgakkum/subditgakkum/getChartLaka/"+polda_id,
            data: {
                start_date: three_yearAgo,
                end_date: lastDay,
                filter: 'year'
            },
            dataType: "JSON",
            success: function(result) {
                let polda_month = result.data.polda_month
                let insiden_kecelakaan = result.data.insiden_kecelakaan
                let persentase_kecelakaan = result.data.persentase_kecelakaan
                let meninggal_dunia = result.data.meninggal_dunia
                let persentase_md = result.data.persentase_md
                let luka_berat = result.data.luka_berat
                let persentase_lb = result.data.persentase_lb
                let luka_ringan = result.data.luka_ringan
                let persentase_lr = result.data.persentase_lr
                // $('#titlewalpjryear').html(`<h4 class="card-title mb-0 text-uppercase">DATA WAL & PJR TAHUNAN</h4>`);
                // $('#titletatibyear').html(`<h4 class="card-title mb-0 text-uppercase">DATA TATIB TAHUNAN</h4>`);
                // $('#titlegarlantasyear').html(`<h4 class="card-title mb-0 text-uppercase">DATA GARLANTAS TAHUNAN</h4>`);
                $('#titlelakalantasyear').html(`<h4 class="card-title mb-0 text-uppercase">PERBANDINGAN DATA LAKA TAHUNAN</h4>`);

                var ditgakkumlakayear = {
                    series: [{
                        name: 'Insiden Kecekalaan',
                        type: 'line',
                        data: insiden_kecelakaan,
                        color: "#5400D8"
                    }, {
                        name: 'Meninggal Dunia',
                        type: 'line',
                        data: meninggal_dunia,
                        color: "#D80000"
                    }, {
                        name: 'Luka Berat',
                        type: 'line',
                        data: luka_berat,
                        color: "#D8A700"
                    }, {
                        name: 'Luka Ringan',
                        type: 'line',
                        data: luka_ringan,
                        color: "#80D800"
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
                                insiden_kecelakaansebelumnya = insiden_kecelakaan[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                insiden_kecelakaansebelumnya = insiden_kecelakaan[1];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                meninggal_duniasebelumnya = meninggal_dunia[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                meninggal_duniasebelumnya = meninggal_dunia[1];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                luka_beratsebelumnya = luka_berat[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                luka_beratsebelumnya = luka_berat[1];
                            }

                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                luka_ringansebelumnya = luka_ringan[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                luka_ringansebelumnya = luka_ringan[1];
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
                                                            <span class="fw-bold">Total MD</span><br>
                                                            <span class="fw-bold">Total LB</span><br>
                                                            <span class="fw-bold">Total LR</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${insiden_kecelakaansebelumnya}</span><br>
                                                            <span class="fw-bold">${meninggal_duniasebelumnya}</span><br>
                                                            <span class="fw-bold">${luka_beratsebelumnya}</span><br>
                                                            <span class="fw-bold">${luka_ringansebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8 ms-1">
                                                            <span class="fw-bold">Total LAKA</span><br>
                                                            <span class="fw-bold">Total MD</span><br>
                                                            <span class="fw-bold">Total LB</span><br>
                                                            <span class="fw-bold">Total LR</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${insiden_kecelakaan[dataPointIndex]}</span><br>                                                        
                                                            <span class="fw-bold">${meninggal_dunia[dataPointIndex]}</span><br>                                                        
                                                            <span class="fw-bold">${luka_berat[dataPointIndex]}</span><br>                                                        
                                                            <span class="fw-bold">${luka_ringan[dataPointIndex]}</span><br> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                    <div class="my-2 text-center">
                                                        <span class="fs-6 fw-bold">Presentase</span>
                                                    </div>
                                                        <span class="fw-bold">${persentase_kecelakaan[dataPointIndex]} %</span><br>
                                                        <span class="fw-bold">${persentase_md[dataPointIndex]} %</span><br>
                                                        <span class="fw-bold">${persentase_lb[dataPointIndex]} %</span><br>
                                                        <span class="fw-bold">${persentase_lr[dataPointIndex]} %</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total LAKA</span><br>
                                                            <span class="fw-bold">Total MD</span><br>
                                                            <span class="fw-bold">Total LB</span><br>
                                                            <span class="fw-bold">Total LR</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${insiden_kecelakaan[dataPointIndex]}</span><br>                                                      
                                                            <span class="fw-bold">${meninggal_dunia[dataPointIndex]}</span><br>                                                       
                                                            <span class="fw-bold">${luka_berat[dataPointIndex]}</span><br>                                                      
                                                            <span class="fw-bold">${luka_ringan[dataPointIndex]}</span><br> 
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

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>ditgakkum/subditgakkum/getChartGarlantas/"+polda_id,
            data: {
                start_date: three_yearAgo,
                end_date: lastDay,
                filter: 'year'
            },
            dataType: "JSON",
            success: function(result) {
                let polda_month = result.data.polda_month
                let pelanggaran_berat = result.data.pelanggaran_berat
                let persentase_pb = result.data.persentase_pb
                let pelanggaran_sedang = result.data.pelanggaran_sedang
                let persentase_ps = result.data.persentase_ps
                let pelanggaran_ringan = result.data.pelanggaran_ringan
                let persentase_pr = result.data.persentase_pr
                let teguran = result.data.teguran
                let persentase_tg = result.data.persentase_tg
                $('#titlegarlantasyear').html(`<h4 class="card-title mb-0 text-uppercase">PERBANDINGAN DATA GARLANTAS TAHUNAN</h4>`);

                var ditgakkumdakgaryear = {
                    series: [{
                        name: 'Pelanggaran Berat',
                        type: 'line',
                        data: pelanggaran_berat,
                        color: "#D80000"
                    }, {
                        name: 'Pelanggaran Sedang',
                        type: 'line',
                        data: pelanggaran_sedang,
                        color: "#D8A700"
                    }, {
                        name: 'Pelanggaran Ringan',
                        type: 'line',
                        data: pelanggaran_ringan,
                        color: "#80D800"
                    }, {
                        name: 'Teguran',
                        type: 'line',
                        data: teguran,
                        color: "#5400D8"
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
                                pelanggaran_beratsebelumnya = pelanggaran_berat[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                pelanggaran_beratsebelumnya = pelanggaran_berat[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                pelanggaran_beratsebelumnya = pelanggaran_berat[2];
                            }
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                pelanggaran_sedangsebelumnya = pelanggaran_sedang[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                pelanggaran_sedangsebelumnya = pelanggaran_sedang[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                pelanggaran_sedangsebelumnya = pelanggaran_sedang[2];
                            }
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                pelanggaran_ringansebelumnya = pelanggaran_ringan[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                pelanggaran_ringansebelumnya = pelanggaran_ringan[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                pelanggaran_ringansebelumnya = pelanggaran_ringan[2];
                            }
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                teguransebelumnya = teguran[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                teguransebelumnya = teguran[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                teguransebelumnya = teguran[2];
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
                                                            <span class="fw-bold">Total PB</span><br>
                                                            <span class="fw-bold">Total PS</span><br>
                                                            <span class="fw-bold">Total PR</span><br>
                                                            <span class="fw-bold">Total TG</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${pelanggaran_beratsebelumnya}</span><br>
                                                            <span class="fw-bold">${pelanggaran_sedangsebelumnya}</span><br>
                                                            <span class="fw-bold">${pelanggaran_ringansebelumnya}</span><br>
                                                            <span class="fw-bold">${teguransebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total PB</span><br>
                                                            <span class="fw-bold">Total PS</span><br>
                                                            <span class="fw-bold">Total PR</span><br>
                                                            <span class="fw-bold">Total TG</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${pelanggaran_berat[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${pelanggaran_sedang[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${pelanggaran_ringan[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${teguran[dataPointIndex]}</span><br>        
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentase_pb[dataPointIndex]} %</span><br>
                                                    <span class="fw-bold">${persentase_ps[dataPointIndex]} %</span><br>
                                                    <span class="fw-bold">${persentase_pr[dataPointIndex]} %</span><br>
                                                    <span class="fw-bold">${persentase_tg[dataPointIndex]} %</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total PB</span><br>
                                                            <span class="fw-bold">Total PS</span><br>
                                                            <span class="fw-bold">Total PR</span><br>
                                                            <span class="fw-bold">Total TG</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${pelanggaran_berat[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${pelanggaran_sedang[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${pelanggaran_ringan[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${teguran[dataPointIndex]}</span><br>         
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

                var ditgakkumdakgaryear = new ApexCharts(document.querySelector("#chartyear3"), ditgakkumdakgaryear);
                ditgakkumdakgaryear.render();

            }
        })


        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>ditgakkum/subditgakkum/getChartTatib/"+polda_id,
            data: {
                start_date: three_yearAgo,
                end_date: lastDay,
                filter: 'year'
            },
            dataType: "JSON",
            success: function(result) {
                let polda_month = result.data.polda_month
                let pengaturan = result.data.pengaturan
                let persentase_pengaturan = result.data.persentase_pengaturan
                let pengawalan = result.data.pengawalan
                let persentase_pengawalan = result.data.persentase_pengawalan
                let penjagaan = result.data.penjagaan
                let persentase_penjagaan = result.data.persentase_penjagaan
                let patroli = result.data.patroli
                let persentase_patroli = result.data.persentase_patroli
                $('#titletatibyear').html(`<h4 class="card-title mb-0 text-uppercase">PERBANDINGAN DATA TURJAGWALI TAHUNAN</h4>`);


                var ditgakkumtatibyear = {
                    series: [{
                        name: 'Pengaturan',
                        type: 'line',
                        data: pengaturan,
                        color: "#5400D8"
                    }, {
                        name: 'Pengawalan',
                        type: 'line',
                        data: pengawalan,
                        color: "#D80000"
                    }, {
                        name: 'Penjagaan',
                        type: 'line',
                        data: penjagaan,
                        color: "#D8A700"
                    }, {
                        name: 'Patroli',
                        type: 'line',
                        data: patroli,
                        color: "#80D800"
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
                                pengaturansebelumnya = pengaturan[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                pengaturansebelumnya = pengaturan[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                pengaturansebelumnya = pengaturan[2];
                            }
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                pengawalansebelumnya = pengawalan[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                pengawalansebelumnya = pengawalan[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                pengawalansebelumnya = pengawalan[2];
                            }
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                penjagaansebelumnya = penjagaan[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                penjagaansebelumnya = penjagaan[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                penjagaansebelumnya = penjagaan[2];
                            }
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                patrolisebelumnya = patroli[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                patrolisebelumnya = patroli[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                patrolisebelumnya = patroli[2];
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
                                                        <span class="fw-bold">Total Pengaturan</span><br>
                                                        <span class="fw-bold">Total Pengawalan</span><br>
                                                        <span class="fw-bold">Total Penjagaan</span><br>
                                                        <span class="fw-bold">Total Patroli</span><br>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <span class="fw-bold">${pengaturansebelumnya}</span><br>
                                                        <span class="fw-bold">${pengawalansebelumnya}</span><br>
                                                        <span class="fw-bold">${penjagaansebelumnya}</span><br>
                                                        <span class="fw-bold">${patrolisebelumnya}</span><br>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="col-md-4">
                                            <div class="my-2 text-center">    
                                                <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                            </div>
                                            <div class="row">
                                                    <div class="col-md-8">
                                                        <span class="fw-bold">Total Pengaturan</span><br>
                                                        <span class="fw-bold">Total Pengawalan</span><br>
                                                        <span class="fw-bold">Total Penjagaan</span><br>
                                                        <span class="fw-bold">Total Patroli</span><br>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <span class="fw-bold">${pengaturan[dataPointIndex]}</span><br>
                                                        <span class="fw-bold">${pengawalan[dataPointIndex]}</span><br>
                                                        <span class="fw-bold">${penjagaan[dataPointIndex]}</span><br>
                                                        <span class="fw-bold">${patroli[dataPointIndex]}</span><br>        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 text-center">
                                            <div class="my-2 text-center">
                                                <span class="fs-6 fw-bold">Presentase</span>
                                            </div>
                                                <span class="fw-bold">${persentase_pengaturan[dataPointIndex]} %</span><br>
                                                <span class="fw-bold">${persentase_pengawalan[dataPointIndex]} %</span><br>
                                                <span class="fw-bold">${persentase_penjagaan[dataPointIndex]} %</span><br>
                                                <span class="fw-bold">${persentase_patroli[dataPointIndex]} %</span><br>
                                            </div>
                                            ` : `
                                            <div class="col-md-12">
                                            <div class="my-2 text-center">    
                                                <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                            </div>
                                            <div class="row">
                                                    <div class="col-md-7 ms-2">
                                                        <span class="fw-bold">Total Pengaturan</span><br>
                                                        <span class="fw-bold">Total Pengawalan</span><br>
                                                        <span class="fw-bold">Total Penjagaan</span><br>
                                                        <span class="fw-bold">Total Patroli</span><br>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <span class="fw-bold">${pengaturan[dataPointIndex]}</span><br>
                                                        <span class="fw-bold">${pengawalan[dataPointIndex]}</span><br>
                                                        <span class="fw-bold">${penjagaan[dataPointIndex]}</span><br>
                                                        <span class="fw-bold">${patroli[dataPointIndex]}</span><br>         
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

                var ditgakkumtatibyear = new ApexCharts(document.querySelector("#chartyear2"), ditgakkumtatibyear);
                ditgakkumtatibyear.render();

            }
        })
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>ditgakkum/subditgakkum/getChartWalPjr/"+polda_id,
            data: {
                start_date: three_yearAgo,
                end_date: lastDay,
                filter: 'year'
            },
            dataType: "JSON",
            success: function(result) {
                let polda_month = result.data.polda_month
                let wal = result.data.wal
                let persentase_wal = result.data.persentase_wal
                let pjr = result.data.pjr
                let persentase_pjr = result.data.persentase_pjr


                $('#titlewalpjryear').html(`<h4 class="card-title mb-0 text-uppercase">PERBANDINGAN DATA WAL & PJR TAHUNAN</h4>`);

                var ditgakkumwalpjryear = {
                    series: [{
                        name: 'WAL',
                        type: 'line',
                        data: wal,
                        color: "#5400D8"
                    }, {
                        name: 'PJR',
                        type: 'line',
                        data: pjr,
                        color: "#D80000"
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
                                walsebelumnya = wal[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                walsebelumnya = wal[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                walsebelumnya = wal[2];
                            }
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                pjrsebelumnya = pjr[0];
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                pjrsebelumnya = pjr[1];
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                pjrsebelumnya = pjr[2];
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
                                                            <span class="fw-bold">Total WAL</span><br>
                                                            <span class="fw-bold">Total PJR</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${walsebelumnya}</span><br>
                                                            <span class="fw-bold">${pjrsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total WAL</span><br>
                                                            <span class="fw-bold">Total PJR</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${wal[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${pjr[dataPointIndex]}</span><br>         
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentase_wal[dataPointIndex]} %</span><br>
                                                    <span class="fw-bold">${persentase_pjr[dataPointIndex]} %</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total WAL</span><br>
                                                            <span class="fw-bold">Total PJR</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${wal[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${pjr[dataPointIndex]}</span><br>
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
                var ditgakkumwalpjryear = new ApexCharts(document.querySelector("#chartyear"), ditgakkumwalpjryear);
                ditgakkumwalpjryear.render();
            }
        })
    }
</script>