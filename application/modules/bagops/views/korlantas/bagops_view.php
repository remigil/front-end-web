<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 align-self-center">
            <div id="nama"> 
                <div style="display: flex;"> 
                    <h3><a href="<?= base_url('dashboard') ?>" style="color:#007DD8 ;"><i class="fas fa-less-than"></i></a></h3>
                    &nbsp;&nbsp; <h3 style="text-transform: uppercase; color:#007DD8;"> Bagops</h3>
                
                </div>
            </div>
            <p>Today is <?= date('l, j F Y') ?></p>
        </div>
        <?php $mobile = detect_mobile(); if($mobile === true){ ?>
            <div class="col-md-12" style="margin-left: -15px;">
                <button type="button" class="btn btn-primary ms-3" style=" border: 0.5px solid #0275d8; height:-20px" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <iconify-icon icon="mdi:file-document-multiple"></iconify-icon>
                </button>  
                <a href="http://34.143.227.90:3001/v1/laporan_harian/export_laphar" class="text-center"><button class="btn btn-outline-primary" style="width: 200px; border-color:#007DD8;">Export Laporan</button></a>
            </div>
        <?php } else { ?>
            <div class="col-md-1 text-end align-self-center">
                <button type="button" class="btn btn-primary ms-3" style=" border: 0.5px solid #0275d8; height:-20px" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <iconify-icon icon="mdi:file-document-multiple"></iconify-icon>
                </button> 
            </div>
            <div class="col-md-3 text-end align-self-center">
                <a href="http://34.143.227.90:3001/v1/laporan_harian/export_laphar" class="text-center"><button class="btn btn-outline-primary" style="width: 200px; border-color:#007DD8;">Export Laporan</button></a>
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
                            <div class="row justify-content-between align-items-center" style="height: 80px;">
                                <div class="col-md-2">
                                    <iconify-icon icon="material-symbols:credit-card-outline" class="ms-n2" style="font-size: 40px; color: #464646;"></iconify-icon>
                                </div>
                                <div class="col-md-10 float-end">
                                    <span class="fs-6 float-end" style="color:#464646;">
                                        <span class="fw-bold">Total SUBBAG RENOP</span>
                                    </span>
                                    <br>
                                    <span class="fs-6 fw-bold float-end" style="color:#464646;" id="subbagrenop"></span>
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
                                    <iconify-icon icon="material-symbols:book-rounded" class="ms-n2" style="font-size: 50px; color: #464646;"></iconify-icon>
                                </div>
                                <div class="col-md-10 float-end">
                                    <span class="fs-6 float-end" style="color:#464646;">
                                        <span class="fw-bold">Total SUBBAG DALOPS</span>
                                    </span>
                                    <br>
                                    <span class="fs-6 fw-bold float-end" style="color:#464646;" id="subbagdalops"></span>
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
                                    <iconify-icon icon="material-symbols:credit-card-outline" class="ms-n2" style="font-size: 40px; color: #464646;"></iconify-icon>
                                </div>
                                <div class="col-md-10 float-end">
                                    <span class="fs-6 float-end" style="color:#464646;">
                                        <span class="fw-bold">Total SUBBAG KERMA</span>
                                    </span>
                                    <br>
                                    <span class="fs-6 fw-bold float-end" style="color:#464646;" id="subbagkerma"></span>
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
                                    <iconify-icon icon="material-symbols:credit-card-outline" class="ms-n2" style="font-size: 40px; color: #464646;"></iconify-icon>
                                </div>
                                <div class="col-md-10 float-end">
                                    <span class="fs-6 float-end" style="color:#464646;">
                                        <span class="fw-bold">Total SUBBAG ANEV</span>
                                    </span>
                                    <br>
                                    <span class="fs-6 fw-bold float-end" style="color:#464646;" id="subbaganev"></span>
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
                                <div id="titlesubbagrenopopday"></div>
                            </div>
                            <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                <div class="main-chart">
                                    <div id="chartdaysubbagrenopop">
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
                                <div id="titlesubbagdalopsday"></div>
                            </div>
                            <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                <div class="main-chart">
                                    <div id="chartdaysubbagdalops">
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
                                <div id="titlesubbagkermaday"></div>
                            </div>
                            <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                <div class="main-chart">
                                    <div id="chartdaysubbagkerma">
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
                                <div id="titlesubbaganevday"></div>
                            </div>
                            <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                <div class="main-chart">
                                    <div id="chartdaysubbaganev">
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
                                <div id="titlesubbagrenopopmonth"></div>
                            </div>
                            <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                <div class="main-chart">
                                    <div id="chartmonthsubbagrenopop">
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
                                <div id="titlesubbagdalopsmonth"></div>
                            </div>
                            <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                <div class="main-chart">
                                    <div id="chartmonthsubbagdalops">
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
                                <div id="titlesubbagkermamonth"></div>
                            </div>
                            <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                <div class="main-chart">
                                    <div id="chartmonthsubbagkerma">
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
                                <div id="titlesubbaganevmonth"></div>
                            </div>
                            <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                <div class="main-chart">
                                    <div id="chartmonthsubbaganev">
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
                                <div id="titlesubbagrenopopyear"></div>
                            </div>
                            <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                <div class="main-chart">
                                    <div id="chartyearsubbagrenopop">
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
                                <div id="titlesubbagdalopsyear"></div>
                            </div>
                            <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                <div class="main-chart">
                                    <div id="chartyearsubbagdalops">
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
                                <div id="titlesubbagkermayear"></div>
                            </div>
                            <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                <div class="main-chart">
                                    <div id="chartyearsubbagkerma">
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
                                <div id="titlesubbaganevyear"></div>
                            </div>
                            <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                <div class="main-chart">
                                    <div id="chartyearsubbaganev">
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
                    <img src="<?= base_url('assets/fe/strukturorganisasi/strukturbagops.png'); ?>" alt="" srcset="">
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
    $("#chartdaysubbagrenopop").html(`<div id="chartday1"></div>`);
    $("#chartdaysubbagdalops").html(`<div id="chartday2"></div>`);
    $("#chartdaysubbagkerma").html(`<div id="chartday3"></div>`);
    $("#chartdaysubbaganev").html(`<div id="chartday4"></div>`);

    // Month
    $("#chartmonthsubbagrenopop").html(`<div id="chart"></div>`);
    $("#chartmonthsubbagdalops").html(`<div id="chart2"></div>`);
    $("#chartmonthsubbagkerma").html(`<div id="chart3"></div>`);
    $("#chartmonthsubbaganev").html(`<div id="chart4"></div>`);

    // Year
    $("#chartyearsubbagrenopop").html(`<div id="chartyear"></div>`);
    $("#chartyearsubbagdalops").html(`<div id="chartyear2"></div>`);
    $("#chartyearsubbagkerma").html(`<div id="chartyear3"></div>`);
    $("#chartyearsubbaganev").html(`<div id="chartyear4"></div>`);


    getStatistik();

    function getStatistik() {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>bagops/getStatistik",
            dataType: "JSON",
            success: function(result) {
                $("#overlay").fadeOut(300);
                $('#subbagrenop').html(`<span class="fs-4" >${result.subbagrenop}</span >`);
                $('#subbagdalops').html(`<span class="fs-4" >${result.subbagdalops}</span >`);
                $('#subbagkerma').html(`<span class="fs-4" >${result.subbagkerma}</span >`);
                $('#subbaganev').html(`<span class="fs-4" >${result.subbaganev}</span>`);
            }
        })
    }

    getBagopsday(today, seven_daysAgo)
    getBagopsmonth(firstDay, lastDay)
    getBagopsyear(three_yearAgo, lastDay)
    // Day
    function getBagopsday(today, seven_daysAgo) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>bagops/getChartBagops",
            data: {
                start_date: seven_daysAgo,
                end_date: today,
                filter: 'day'
            },
            dataType: "JSON",
            success: function(result) {
                let polda_month = result.data.polda_month
                let subbagrenop = result.data.subbagrenop
                let subbagdalops = result.data.subbagdalops
                let subbagkerma = result.data.subbagkerma
                let subbaganev = result.data.subbaganev
                $('#titlesubbagrenopopday').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG RENOP HARIAN</h4>`);
                $('#titlesubbagdalopsday').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG DALOPS HARIAN</h4>`);
                $('#titlesubbagkermaday').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG KERMA HARIAN</h4>`);
                $('#titlesubbaganevday').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG ANEV HARIAN</h4>`);

                var bagopssubbagrenopday = {
                    series: [{
                        name: 'SUBBAG RENOP',
                        type: 'line',
                        data: subbagrenop,
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
                                subbagrenopsebelumnya = subbagrenop[0];

                                if (subbagrenop[0] < subbagrenop[1]) {
                                    persentasesubbagrenop = 'Naik'
                                } else if (subbagrenop[0] > subbagrenop[1]) {
                                    persentasesubbagrenop = 'Turun'
                                } else {
                                    persentasesubbagrenop = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbagrenopsebelumnya = subbagrenop[1];
                                if (subbagrenop[1] < subbagrenop[2]) {
                                    persentasesubbagrenop = 'Naik'
                                } else if (subbagrenop[1] > subbagrenop[2]) {
                                    persentasesubbagrenop = 'Turun'
                                } else {
                                    persentasesubbagrenop = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                subbagrenopsebelumnya = subbagrenop[2];
                                if (subbagrenop[2] < subbagrenop[3]) {
                                    persentasesubbagrenop = 'Naik'
                                } else if (subbagrenop[2] > subbagrenop[3]) {
                                    persentasesubbagrenop = 'Turun'
                                } else {
                                    persentasesubbagrenop = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                subbagrenopsebelumnya = subbagrenop[3];
                                if (subbagrenop[3] < subbagrenop[4]) {
                                    persentasesubbagrenop = 'Naik'
                                } else if (subbagrenop[3] > subbagrenop[4]) {
                                    persentasesubbagrenop = 'Turun'
                                } else {
                                    persentasesubbagrenop = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                subbagrenopsebelumnya = subbagrenop[4];
                                if (subbagrenop[4] < subbagrenop[5]) {
                                    persentasesubbagrenop = 'Naik'
                                } else if (subbagrenop[4] > subbagrenop[5]) {
                                    persentasesubbagrenop = 'Turun'
                                } else {
                                    persentasesubbagrenop = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                subbagrenopsebelumnya = subbagrenop[5];
                                if (subbagrenop[5] < subbagrenop[6]) {
                                    persentasesubbagrenop = 'Naik'
                                } else if (subbagrenop[5] > subbagrenop[6]) {
                                    persentasesubbagrenop = 'Turun'
                                } else {
                                    persentasesubbagrenop = 'Sama'
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
                                                            <span class="fw-bold">Total SUBBAG RENOP</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbagrenopsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total SUBBAG RENOP</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagrenop[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesubbagrenop}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total SUBBAG RENOP</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagrenop[dataPointIndex]}</span><br>
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

                var bagopssubbagrenopday = new ApexCharts(document.querySelector("#chartday1"), bagopssubbagrenopday);
                bagopssubbagrenopday.render();


                var bagopssubbagdalopsday = {
                    series: [{
                        name: 'SUBBAG DALOPS',
                        type: 'line',
                        data: subbagdalops,
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
                                subbagdalopssebelumnya = subbagdalops[0];

                                if (subbagdalops[0] < subbagdalops[1]) {
                                    persentasesubbagdalops = 'Naik'
                                } else if (subbagdalops[0] > subbagdalops[1]) {
                                    persentasesubbagdalops = 'Turun'
                                } else {
                                    persentasesubbagdalops = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbagdalopssebelumnya = subbagdalops[1];
                                if (subbagdalops[1] < subbagdalops[2]) {
                                    persentasesubbagdalops = 'Naik'
                                } else if (subbagdalops[1] > subbagdalops[2]) {
                                    persentasesubbagdalops = 'Turun'
                                } else {
                                    persentasesubbagdalops = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                subbagdalopssebelumnya = subbagdalops[2];
                                if (subbagdalops[2] < subbagdalops[3]) {
                                    persentasesubbagdalops = 'Naik'
                                } else if (subbagdalops[2] > subbagdalops[3]) {
                                    persentasesubbagdalops = 'Turun'
                                } else {
                                    persentasesubbagdalops = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                subbagdalopssebelumnya = subbagdalops[3];
                                if (subbagdalops[3] < subbagdalops[4]) {
                                    persentasesubbagdalops = 'Naik'
                                } else if (subbagdalops[3] > subbagdalops[4]) {
                                    persentasesubbagdalops = 'Turun'
                                } else {
                                    persentasesubbagdalops = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[5]
                                subbagdalopssebelumnya = subbagdalops[4];
                                if (subbagdalops[4] < subbagdalops[5]) {
                                    persentasesubbagdalops = 'Naik'
                                } else if (subbagdalops[4] > subbagdalops[5]) {
                                    persentasesubbagdalops = 'Turun'
                                } else {
                                    persentasesubbagdalops = 'Sama'
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
                                                            <span class="fw-bold">Total SUBBAG DALOPS</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbagdalopssebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total SUBBAG DALOPS</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagdalops[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesubbagdalops}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total SUBBAG DALOPS</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagdalops[dataPointIndex]}</span><br>
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

                var bagopssubbagdalopsday = new ApexCharts(document.querySelector("#chartday2"), bagopssubbagdalopsday);
                bagopssubbagdalopsday.render();


                var bagopssubbagkermaday = {
                    series: [{
                        name: 'SUBBAG KERMA',
                        type: 'line',
                        data: subbagkerma,
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
                                subbagkermasebelumnya = subbagkerma[0];

                                if (subbagkerma[0] < subbagkerma[1]) {
                                    persentasesubbagkerma = 'Naik'
                                } else if (subbagkerma[0] > subbagkerma[1]) {
                                    persentasesubbagkerma = 'Turun'
                                } else {
                                    persentasesubbagkerma = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbagkermasebelumnya = subbagkerma[1];
                                if (subbagkerma[1] < subbagkerma[2]) {
                                    persentasesubbagkerma = 'Naik'
                                } else if (subbagkerma[1] > subbagkerma[2]) {
                                    persentasesubbagkerma = 'Turun'
                                } else {
                                    persentasesubbagkerma = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                subbagkermasebelumnya = subbagkerma[2];
                                if (subbagkerma[2] < subbagkerma[3]) {
                                    persentasesubbagkerma = 'Naik'
                                } else if (subbagkerma[2] > subbagkerma[3]) {
                                    persentasesubbagkerma = 'Turun'
                                } else {
                                    persentasesubbagkerma = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                subbagkermasebelumnya = subbagkerma[3];
                                if (subbagkerma[3] < subbagkerma[4]) {
                                    persentasesubbagkerma = 'Naik'
                                } else if (subbagkerma[3] > subbagkerma[4]) {
                                    persentasesubbagkerma = 'Turun'
                                } else {
                                    persentasesubbagkerma = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                subbagkermasebelumnya = subbagkerma[4];
                                if (subbagkerma[4] < subbagkerma[5]) {
                                    persentasesubbagkerma = 'Naik'
                                } else if (subbagkerma[4] > subbagkerma[5]) {
                                    persentasesubbagkerma = 'Turun'
                                } else {
                                    persentasesubbagkerma = 'Sama'
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
                                                            <span class="fw-bold">Total SUBBAG KERMA</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbagkermasebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total SUBBAG KERMA</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagkerma[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesubbagkerma}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total SUBBAG KERMA</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagkerma[dataPointIndex]}</span><br>
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

                var bagopssubbagkermaday = new ApexCharts(document.querySelector("#chartday3"), bagopssubbagkermaday);
                bagopssubbagkermaday.render();


                var bagopssubbaganevday = {
                    series: [{
                        name: 'SUBBAG ANEV',
                        type: 'line',
                        data: subbaganev,
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
                                subbaganevsebelumnya = subbaganev[0];

                                if (subbaganev[0] < subbaganev[1]) {
                                    persentasesubbaganev = 'Naik'
                                } else if (subbaganev[0] > subbaganev[1]) {
                                    persentasesubbaganev = 'Turun'
                                } else {
                                    persentasesubbaganev = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbaganevsebelumnya = subbaganev[1];
                                if (subbaganev[1] < subbaganev[2]) {
                                    persentasesubbaganev = 'Naik'
                                } else if (subbaganev[1] > subbaganev[2]) {
                                    persentasesubbaganev = 'Turun'
                                } else {
                                    persentasesubbaganev = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                subbaganevsebelumnya = subbaganev[2];
                                if (subbaganev[2] < subbaganev[3]) {
                                    persentasesubbaganev = 'Naik'
                                } else if (subbaganev[2] > subbaganev[3]) {
                                    persentasesubbaganev = 'Turun'
                                } else {
                                    persentasesubbaganev = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                subbaganevsebelumnya = subbaganev[3];
                                if (subbaganev[3] < subbaganev[4]) {
                                    persentasesubbaganev = 'Naik'
                                } else if (subbaganev[3] > subbaganev[4]) {
                                    persentasesubbaganev = 'Turun'
                                } else {
                                    persentasesubbaganev = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                subbaganevsebelumnya = subbaganev[4];
                                if (subbaganev[4] < subbaganev[5]) {
                                    persentasesubbaganev = 'Naik'
                                } else if (subbaganev[4] > subbaganev[5]) {
                                    persentasesubbaganev = 'Turun'
                                } else {
                                    persentasesubbaganev = 'Sama'
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
                                                            <span class="fw-bold">Total SUBBAG ANEV</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbaganevsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total SUBBAG ANEV</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbaganev[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesubbaganev}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total SUBBAG ANEV</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbaganev[dataPointIndex]}</span><br>
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

                var bagopssubbaganevday = new ApexCharts(document.querySelector("#chartday4"), bagopssubbaganevday);
                bagopssubbaganevday.render();
            }
        })
    }


    // // Month
    function getBagopsmonth(firstDay, lastDay) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>bagops/getChartBagops",
            data: {
                start_date: firstDay,
                end_date: lastDay,
                filter: 'month'
            },
            dataType: "JSON",
            success: function(result) {
                let polda_month = result.data.polda_month
                let subbagrenop = result.data.subbagrenop
                let subbagdalops = result.data.subbagdalops
                let subbagkerma = result.data.subbagkerma
                let subbaganev = result.data.subbaganev
                $('#titlesubbagrenopopmonth').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG RENOP BULANAN</h4>`);
                $('#titlesubbagdalopsmonth').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG DALOPS BULANAN</h4>`);
                $('#titlesubbagkermamonth').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG KERMA BULANAN</h4>`);
                $('#titlesubbaganevmonth').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG ANEV BULANAN</h4>`);

                var bagopssubbagrenopmonth = {
                    series: [{
                        name: 'SUBBAG RENOP',
                        type: 'line',
                        data: subbagrenop,
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
                                subbagrenopsebelumnya = subbagrenop[0];

                                if (subbagrenop[0] < subbagrenop[1]) {
                                    persentasesubbagrenop = 'Naik'
                                } else if (subbagrenop[0] > subbagrenop[1]) {
                                    persentasesubbagrenop = 'Turun'
                                } else {
                                    persentasesubbagrenop = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbagrenopsebelumnya = subbagrenop[1];
                                if (subbagrenop[1] < subbagrenop[2]) {
                                    persentasesubbagrenop = 'Naik'
                                } else if (subbagrenop[1] > subbagrenop[2]) {
                                    persentasesubbagrenop = 'Turun'
                                } else {
                                    persentasesubbagrenop = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                subbagrenopsebelumnya = subbagrenop[2];
                                if (subbagrenop[2] < subbagrenop[3]) {
                                    persentasesubbagrenop = 'Naik'
                                } else if (subbagrenop[2] > subbagrenop[3]) {
                                    persentasesubbagrenop = 'Turun'
                                } else {
                                    persentasesubbagrenop = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                subbagrenopsebelumnya = subbagrenop[3];
                                if (subbagrenop[3] < subbagrenop[4]) {
                                    persentasesubbagrenop = 'Naik'
                                } else if (subbagrenop[3] > subbagrenop[4]) {
                                    persentasesubbagrenop = 'Turun'
                                } else {
                                    persentasesubbagrenop = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                subbagrenopsebelumnya = subbagrenop[4];
                                if (subbagrenop[4] < subbagrenop[5]) {
                                    persentasesubbagrenop = 'Naik'
                                } else if (subbagrenop[4] > subbagrenop[5]) {
                                    persentasesubbagrenop = 'Turun'
                                } else {
                                    persentasesubbagrenop = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                subbagrenopsebelumnya = subbagrenop[5];
                                if (subbagrenop[5] < subbagrenop[6]) {
                                    persentasesubbagrenop = 'Naik'
                                } else if (subbagrenop[5] > subbagrenop[6]) {
                                    persentasesubbagrenop = 'Turun'
                                } else {
                                    persentasesubbagrenop = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                subbagrenopsebelumnya = subbagrenop[6];
                                if (subbagrenop[6] < subbagrenop[7]) {
                                    persentasesubbagrenop = 'Naik'
                                } else if (subbagrenop[6] > subbagrenop[7]) {
                                    persentasesubbagrenop = 'Turun'
                                } else {
                                    persentasesubbagrenop = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                subbagrenopsebelumnya = subbagrenop[7];
                                if (subbagrenop[7] < subbagrenop[8]) {
                                    persentasesubbagrenop = 'Naik'
                                } else if (subbagrenop[7] > subbagrenop[8]) {
                                    persentasesubbagrenop = 'Turun'
                                } else {
                                    persentasesubbagrenop = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                subbagrenopsebelumnya = subbagrenop[8];
                                if (subbagrenop[8] < subbagrenop[9]) {
                                    persentasesubbagrenop = 'Naik'
                                } else if (subbagrenop[8] > subbagrenop[9]) {
                                    persentasesubbagrenop = 'Turun'
                                } else {
                                    persentasesubbagrenop = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                subbagrenopsebelumnya = subbagrenop[9];
                                if (subbagrenop[9] < subbagrenop[10]) {
                                    persentasesubbagrenop = 'Naik'
                                } else if (subbagrenop[9] > subbagrenop[10]) {
                                    persentasesubbagrenop = 'Turun'
                                } else {
                                    persentasesubbagrenop = `Sama`
                                }

                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                subbagrenopsebelumnya = subbagrenop[10];
                                if (subbagrenop[10] < subbagrenop[11]) {
                                    persentasesubbagrenop = 'Naik'
                                } else if (subbagrenop[10] > subbagrenop[11]) {
                                    persentasesubbagrenop = 'Turun'
                                } else {
                                    persentasesubbagrenop = 'Sama'
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
                                                            <span class="fw-bold">Total SUBBAG RENOP</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbagrenopsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total SUBBAG RENOP</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagrenop[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesubbagrenop}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total SUBBAG RENOP</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagrenop[dataPointIndex]}</span><br>
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

                var bagopssubbagrenopmonth = new ApexCharts(document.querySelector("#chart"), bagopssubbagrenopmonth);
                bagopssubbagrenopmonth.render();


                var bagopssubbagdalopsmonth = {
                    series: [{
                        name: 'SUBBAG DALOPS',
                        type: 'line',
                        data: subbagdalops,
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
                                subbagdalopssebelumnya = subbagdalops[0];

                                if (subbagdalops[0] < subbagdalops[1]) {
                                    persentasesubbagdalops = 'Naik'
                                } else if (subbagdalops[0] > subbagdalops[1]) {
                                    persentasesubbagdalops = 'Turun'
                                } else {
                                    persentasesubbagdalops = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbagdalopssebelumnya = subbagdalops[1];
                                if (subbagdalops[1] < subbagdalops[2]) {
                                    persentasesubbagdalops = 'Naik'
                                } else if (subbagdalops[1] > subbagdalops[2]) {
                                    persentasesubbagdalops = 'Turun'
                                } else {
                                    persentasesubbagdalops = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                subbagdalopssebelumnya = subbagdalops[2];
                                if (subbagdalops[2] < subbagdalops[3]) {
                                    persentasesubbagdalops = 'Naik'
                                } else if (subbagdalops[2] > subbagdalops[3]) {
                                    persentasesubbagdalops = 'Turun'
                                } else {
                                    persentasesubbagdalops = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                subbagdalopssebelumnya = subbagdalops[3];
                                if (subbagdalops[3] < subbagdalops[4]) {
                                    persentasesubbagdalops = 'Naik'
                                } else if (subbagdalops[3] > subbagdalops[4]) {
                                    persentasesubbagdalops = 'Turun'
                                } else {
                                    persentasesubbagdalops = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                subbagdalopssebelumnya = subbagdalops[4];
                                if (subbagdalops[4] < subbagdalops[5]) {
                                    persentasesubbagdalops = 'Naik'
                                } else if (subbagdalops[4] > subbagdalops[5]) {
                                    persentasesubbagdalops = 'Turun'
                                } else {
                                    persentasesubbagdalops = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                subbagdalopssebelumnya = subbagdalops[5];
                                if (subbagdalops[5] < subbagdalops[6]) {
                                    persentasesubbagdalops = 'Naik'
                                } else if (subbagdalops[5] > subbagdalops[6]) {
                                    persentasesubbagdalops = 'Turun'
                                } else {
                                    persentasesubbagdalops = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                subbagdalopssebelumnya = subbagdalops[6];
                                if (subbagdalops[6] < subbagdalops[7]) {
                                    persentasesubbagdalops = 'Naik'
                                } else if (subbagdalops[6] > subbagdalops[7]) {
                                    persentasesubbagdalops = 'Turun'
                                } else {
                                    persentasesubbagdalops = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                subbagdalopssebelumnya = subbagdalops[7];
                                if (subbagdalops[7] < subbagdalops[8]) {
                                    persentasesubbagdalops = 'Naik'
                                } else if (subbagdalops[7] > subbagdalops[8]) {
                                    persentasesubbagdalops = 'Turun'
                                } else {
                                    persentasesubbagdalops = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                subbagdalopssebelumnya = subbagdalops[8];
                                if (subbagdalops[8] < subbagdalops[9]) {
                                    persentasesubbagdalops = 'Naik'
                                } else if (subbagdalops[8] > subbagdalops[9]) {
                                    persentasesubbagdalops = 'Turun'
                                } else {
                                    persentasesubbagdalops = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                subbagdalopssebelumnya = subbagdalops[9];
                                if (subbagdalops[9] < subbagdalops[10]) {
                                    persentasesubbagdalops = 'Naik'
                                } else if (subbagdalops[9] > subbagdalops[10]) {
                                    persentasesubbagdalops = 'Turun'
                                } else {
                                    persentasesubbagdalops = `Sama`
                                }

                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                subbagdalopssebelumnya = subbagdalops[10];
                                if (subbagdalops[10] < subbagdalops[11]) {
                                    persentasesubbagdalops = 'Naik'
                                } else if (subbagdalops[10] > subbagdalops[11]) {
                                    persentasesubbagdalops = 'Turun'
                                } else {
                                    persentasesubbagdalops = 'Sama'
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
                                                            <span class="fw-bold">Total SUBBAG DALOPS</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbagdalopssebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total SUBBAG DALOPS</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagdalops[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesubbagdalops}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total SUBBAG DALOPS</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagdalops[dataPointIndex]}</span><br>
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

                var bagopssubbagdalopsmonth = new ApexCharts(document.querySelector("#chart2"), bagopssubbagdalopsmonth);
                bagopssubbagdalopsmonth.render();


                var bagopssubbagkermamonth = {
                    series: [{
                        name: 'SUBBAG KERMA',
                        type: 'line',
                        data: subbagkerma,
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
                                subbagkermasebelumnya = subbagkerma[0];

                                if (subbagkerma[0] < subbagkerma[1]) {
                                    persentasesubbagkerma = 'Naik'
                                } else if (subbagkerma[0] > subbagkerma[1]) {
                                    persentasesubbagkerma = 'Turun'
                                } else {
                                    persentasesubbagkerma = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbagkermasebelumnya = subbagkerma[1];
                                if (subbagkerma[1] < subbagkerma[2]) {
                                    persentasesubbagkerma = 'Naik'
                                } else if (subbagkerma[1] > subbagkerma[2]) {
                                    persentasesubbagkerma = 'Turun'
                                } else {
                                    persentasesubbagkerma = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                subbagkermasebelumnya = subbagkerma[2];
                                if (subbagkerma[2] < subbagkerma[3]) {
                                    persentasesubbagkerma = 'Naik'
                                } else if (subbagkerma[2] > subbagkerma[3]) {
                                    persentasesubbagkerma = 'Turun'
                                } else {
                                    persentasesubbagkerma = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                subbagkermasebelumnya = subbagkerma[3];
                                if (subbagkerma[3] < subbagkerma[4]) {
                                    persentasesubbagkerma = 'Naik'
                                } else if (subbagkerma[3] > subbagkerma[4]) {
                                    persentasesubbagkerma = 'Turun'
                                } else {
                                    persentasesubbagkerma = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                subbagkermasebelumnya = subbagkerma[4];
                                if (subbagkerma[4] < subbagkerma[5]) {
                                    persentasesubbagkerma = 'Naik'
                                } else if (subbagkerma[4] > subbagkerma[5]) {
                                    persentasesubbagkerma = 'Turun'
                                } else {
                                    persentasesubbagkerma = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                subbagkermasebelumnya = subbagkerma[5];
                                if (subbagkerma[5] < subbagkerma[6]) {
                                    persentasesubbagkerma = 'Naik'
                                } else if (subbagkerma[5] > subbagkerma[6]) {
                                    persentasesubbagkerma = 'Turun'
                                } else {
                                    persentasesubbagkerma = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                subbagkermasebelumnya = subbagkerma[6];
                                if (subbagkerma[6] < subbagkerma[7]) {
                                    persentasesubbagkerma = 'Naik'
                                } else if (subbagkerma[6] > subbagkerma[7]) {
                                    persentasesubbagkerma = 'Turun'
                                } else {
                                    persentasesubbagkerma = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                subbagkermasebelumnya = subbagkerma[7];
                                if (subbagkerma[7] < subbagkerma[8]) {
                                    persentasesubbagkerma = 'Naik'
                                } else if (subbagkerma[7] > subbagkerma[8]) {
                                    persentasesubbagkerma = 'Turun'
                                } else {
                                    persentasesubbagkerma = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                subbagkermasebelumnya = subbagkerma[8];
                                if (subbagkerma[8] < subbagkerma[9]) {
                                    persentasesubbagkerma = 'Naik'
                                } else if (subbagkerma[8] > subbagkerma[9]) {
                                    persentasesubbagkerma = 'Turun'
                                } else {
                                    persentasesubbagkerma = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                subbagkermasebelumnya = subbagkerma[9];
                                if (subbagkerma[9] < subbagkerma[10]) {
                                    persentasesubbagkerma = 'Naik'
                                } else if (subbagkerma[9] > subbagkerma[10]) {
                                    persentasesubbagkerma = 'Turun'
                                } else {
                                    persentasesubbagkerma = `Sama`
                                }

                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                subbagkermasebelumnya = subbagkerma[10];
                                if (subbagkerma[10] < subbagkerma[11]) {
                                    persentasesubbagkerma = 'Naik'
                                } else if (subbagkerma[10] > subbagkerma[11]) {
                                    persentasesubbagkerma = 'Turun'
                                } else {
                                    persentasesubbagkerma = 'Sama'
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
                                                            <span class="fw-bold">Total SUBBAG KERMA</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbagkermasebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total SUBBAG KERMA</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagkerma[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesubbagkerma}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total SUBBAG KERMA</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagkerma[dataPointIndex]}</span><br>
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

                var bagopssubbagkermamonth = new ApexCharts(document.querySelector("#chart3"), bagopssubbagkermamonth);
                bagopssubbagkermamonth.render();


                var bagopssubbaganevmonth = {
                    series: [{
                        name: 'SUBBAG ANEV',
                        type: 'line',
                        data: subbaganev,
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
                                subbaganevsebelumnya = subbaganev[0];

                                if (subbaganev[0] < subbaganev[1]) {
                                    persentasesubbaganev = 'Naik'
                                } else if (subbaganev[0] > subbaganev[1]) {
                                    persentasesubbaganev = 'Turun'
                                } else {
                                    persentasesubbaganev = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbaganevsebelumnya = subbaganev[1];
                                if (subbaganev[1] < subbaganev[2]) {
                                    persentasesubbaganev = 'Naik'
                                } else if (subbaganev[1] > subbaganev[2]) {
                                    persentasesubbaganev = 'Turun'
                                } else {
                                    persentasesubbaganev = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                subbaganevsebelumnya = subbaganev[2];
                                if (subbaganev[2] < subbaganev[3]) {
                                    persentasesubbaganev = 'Naik'
                                } else if (subbaganev[2] > subbaganev[3]) {
                                    persentasesubbaganev = 'Turun'
                                } else {
                                    persentasesubbaganev = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                subbaganevsebelumnya = subbaganev[3];
                                if (subbaganev[3] < subbaganev[4]) {
                                    persentasesubbaganev = 'Naik'
                                } else if (subbaganev[3] > subbaganev[4]) {
                                    persentasesubbaganev = 'Turun'
                                } else {
                                    persentasesubbaganev = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                subbaganevsebelumnya = subbaganev[4];
                                if (subbaganev[4] < subbaganev[5]) {
                                    persentasesubbaganev = 'Naik'
                                } else if (subbaganev[4] > subbaganev[5]) {
                                    persentasesubbaganev = 'Turun'
                                } else {
                                    persentasesubbaganev = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                subbaganevsebelumnya = subbaganev[5];
                                if (subbaganev[5] < subbaganev[6]) {
                                    persentasesubbaganev = 'Naik'
                                } else if (subbaganev[5] > subbaganev[6]) {
                                    persentasesubbaganev = 'Turun'
                                } else {
                                    persentasesubbaganev = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                subbaganevsebelumnya = subbaganev[6];
                                if (subbaganev[6] < subbaganev[7]) {
                                    persentasesubbaganev = 'Naik'
                                } else if (subbaganev[6] > subbaganev[7]) {
                                    persentasesubbaganev = 'Turun'
                                } else {
                                    persentasesubbaganev = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                subbaganevsebelumnya = subbaganev[7];
                                if (subbaganev[7] < subbaganev[8]) {
                                    persentasesubbaganev = 'Naik'
                                } else if (subbaganev[7] > subbaganev[8]) {
                                    persentasesubbaganev = 'Turun'
                                } else {
                                    persentasesubbaganev = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                subbaganevsebelumnya = subbaganev[8];
                                if (subbaganev[8] < subbaganev[9]) {
                                    persentasesubbaganev = 'Naik'
                                } else if (subbaganev[8] > subbaganev[9]) {
                                    persentasesubbaganev = 'Turun'
                                } else {
                                    persentasesubbaganev = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                subbaganevsebelumnya = subbaganev[9];
                                if (subbaganev[9] < subbaganev[10]) {
                                    persentasesubbaganev = 'Naik'
                                } else if (subbaganev[9] > subbaganev[10]) {
                                    persentasesubbaganev = 'Turun'
                                } else {
                                    subbaganev = `Sama`
                                }

                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                subbaganevsebelumnya = subbaganev[10];
                                if (subbaganev[10] < subbaganev[11]) {
                                    persentasesubbaganev = 'Naik'
                                } else if (subbaganev[10] > subbaganev[11]) {
                                    persentasesubbaganev = 'Turun'
                                } else {
                                    persentasesubbaganev = 'Sama'
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
                                                            <span class="fw-bold">Total SUBBAG ANEV</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbaganevsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total SUBBAG ANEV</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbaganev[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesubbaganev}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total SUBBAG ANEV</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbaganev[dataPointIndex]}</span><br>
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

                var bagopssubbaganevmonth = new ApexCharts(document.querySelector("#chart4"), bagopssubbaganevmonth);
                bagopssubbaganevmonth.render();
            }
        })
    }

    // Year
    function getBagopsyear(three_yearAgo, lastDay) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>bagops/getChartBagops",
            data: {
                start_date: three_yearAgo,
                end_date: lastDay,
                filter: 'year'
            },
            dataType: "JSON",
            success: function(result) {
                let polda_month = result.data.polda_month
                let subbagrenop = result.data.subbagrenop
                let subbagdalops = result.data.subbagdalops
                let subbagkerma = result.data.subbagkerma
                let subbaganev = result.data.subbaganev
                $('#titlesubbagrenopopyear').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG RENOP TAHUNAN</h4>`);
                $('#titlesubbagdalopsyear').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG DALOPS TAHUNAN</h4>`);
                $('#titlesubbagkermayear').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG KERMA TAHUNAN</h4>`);
                $('#titlesubbaganevyear').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG ANEV TAHUNAN</h4>`);

                var bagopssubbagrenopyear = {
                    series: [{
                        name: 'SUBBAG RENOP',
                        type: 'line',
                        data: subbagrenop,
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
                                subbagrenopsebelumnya = subbagrenop[0];

                                if (subbagrenop[0] < subbagrenop[1]) {
                                    persentasesubbagrenop = 'Naik'
                                } else if (subbagrenop[0] > subbagrenop[1]) {
                                    persentasesubbagrenop = 'Turun'
                                } else {
                                    persentasesubbagrenop = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbagrenopsebelumnya = subbagrenop[1];
                                if (subbagrenop[1] < subbagrenop[2]) {
                                    persentasesubbagrenop = 'Naik'
                                } else if (subbagrenop[1] > subbagrenop[2]) {
                                    persentasesubbagrenop = 'Turun'
                                } else {
                                    persentasesubbagrenop = 'Sama'
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
                                                            <span class="fw-bold">Total SUBBAG RENOP</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbagrenopsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total SUBBAG RENOP</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagrenop[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesubbagrenop}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total SUBBAG RENOP</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagrenop[dataPointIndex]}</span><br>
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

                var bagopssubbagrenopyear = new ApexCharts(document.querySelector("#chartyear"), bagopssubbagrenopyear);
                bagopssubbagrenopyear.render();


                var bagopssubbagdalopsyear = {
                    series: [{
                        name: 'SUBBAG DALOPS',
                        type: 'line',
                        data: subbagdalops,
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
                                subbagdalopssebelumnya = subbagdalops[0];

                                if (subbagdalops[0] < subbagdalops[1]) {
                                    persentasesubbagdalops = 'Naik'
                                } else if (subbagdalops[0] > subbagdalops[1]) {
                                    persentasesubbagdalops = 'Turun'
                                } else {
                                    persentasesubbagdalops = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbagdalopssebelumnya = subbagdalops[1];
                                if (subbagdalops[1] < subbagdalops[2]) {
                                    persentasesubbagdalops = 'Naik'
                                } else if (subbagdalops[1] > subbagdalops[2]) {
                                    persentasesubbagdalops = 'Turun'
                                } else {
                                    persentasesubbagdalops = 'Sama'
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
                                                            <span class="fw-bold">Total SUBBAG DALOPS</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbagdalopssebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total SUBBAG DALOPS</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagdalops[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesubbagdalops}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total SUBBAG DALOPS</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagdalops[dataPointIndex]}</span><br>
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

                var bagopssubbagdalopsyear = new ApexCharts(document.querySelector("#chartyear2"), bagopssubbagdalopsyear);
                bagopssubbagdalopsyear.render();


                var bagopssubbagkermayear = {
                    series: [{
                        name: 'SUBBAG KERMA',
                        type: 'line',
                        data: subbagkerma,
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
                                subbagkermasebelumnya = subbagkerma[0];

                                if (subbagkerma[0] < subbagkerma[1]) {
                                    persentasesubbagkerma = 'Naik'
                                } else if (subbagkerma[0] > subbagkerma[1]) {
                                    persentasesubbagkerma = 'Turun'
                                } else {
                                    persentasesubbagkerma = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbagkermasebelumnya = subbagkerma[1];
                                if (subbagkerma[1] < subbagkerma[2]) {
                                    persentasesubbagkerma = 'Naik'
                                } else if (subbagkerma[1] > subbagkerma[2]) {
                                    persentasesubbagkerma = 'Turun'
                                } else {
                                    persentasesubbagkerma = 'Sama'
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
                                                            <span class="fw-bold">Total SUBBAG KERMA</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbagkermasebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total SUBBAG KERMA</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagkerma[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesubbagkerma}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total SUBBAG KERMA</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagkerma[dataPointIndex]}</span><br>
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

                var bagopssubbagkermayear = new ApexCharts(document.querySelector("#chartyear3"), bagopssubbagkermayear);
                bagopssubbagkermayear.render();


                var bagopssubbaganevyear = {
                    series: [{
                        name: 'SUBBAG ANEV',
                        type: 'line',
                        data: subbaganev,
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
                                subbaganevsebelumnya = subbaganev[0];

                                if (subbaganev[0] < subbaganev[1]) {
                                    persentasesubbaganev = 'Naik'
                                } else if (subbaganev[0] > subbaganev[1]) {
                                    persentasesubbaganev = 'Turun'
                                } else {
                                    persentasesubbaganev = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbaganevsebelumnya = subbaganev[1];
                                if (subbaganev[1] < subbaganev[2]) {
                                    persentasesubbaganev = 'Naik'
                                } else if (subbaganev[1] > subbaganev[2]) {
                                    persentasesubbaganev = 'Turun'
                                } else {
                                    persentasesubbaganev = 'Sama'
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
                                                            <span class="fw-bold">Total SUBBAG ANEV</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbaganevsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total SUBBAG ANEV</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbaganev[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesubbaganev}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total SUBBAG ANEV</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbaganev[dataPointIndex]}</span><br>
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

                var bagopssubbaganevyear = new ApexCharts(document.querySelector("#chartyear4"), bagopssubbaganevyear);
                bagopssubbaganevyear.render();
            }
        })
    }
</script>