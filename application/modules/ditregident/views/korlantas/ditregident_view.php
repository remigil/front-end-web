            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 align-self-center">
                        <div class="row">
                            <div class="col-md-1">
                                <h3><a href="<?= base_url('dashboard') ?>" style="color:#007DD8 ;"><i class="fas fa-less-than"></i></a></h3>
                            </div>
                            <div class="col-md-3 ms-n4">
                                <h3 style="text-transform: uppercase; color:#007DD8;"> Ditregident</h3>
                            </div>
                        </div>
                        <p>Today is <?= date('l, j F Y') ?></p>
                    </div>
                    <div class="col-md-1 text-end align-self-center">
                        <button type="button" class="btn btn-primary ms-3" style=" border: 0.5px solid #0275d8; height:-20px" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <iconify-icon icon="mdi:file-document-multiple"></iconify-icon>
                        </button>

                    </div>
                    <div class="col-md-3 text-end align-self-center"> <a href="http://34.143.227.90:3001/v1/laporan_harian/export_laphar" class="text-center"><button class="btn btn-outline-primary" style="width: 200px; border-color:#007DD8;">Export Laporan</button></a>
                    </div>
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
                                                    <span class="fw-bold">Total SIM</span>
                                                </span>
                                                <br>
                                                <span class="fs-6 fw-bold float-end" style="color:#464646;" id="sim"></span>
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
                                                    <span class="fw-bold">Total BPKB</span>
                                                </span>
                                                <br>
                                                <span class="fs-6 fw-bold float-end" style="color:#464646;" id="bpkb"></span>
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
                                                    <span class="fw-bold">Total STNK</span>
                                                </span>
                                                <br>
                                                <span class="fs-6 fw-bold float-end" style="color:#464646;" id="stnk"></span>
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
                                                    <span class="fw-bold">Total FASMAT SBST</span>
                                                </span>
                                                <br>
                                                <span class="fs-6 fw-bold float-end" style="color:#464646;" id="sbst"></span>
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
                                            <div id="titlebpknday"></div>
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
                                            <div id="titlebpknmonth"></div>
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
                                            <div id="titlebpknyear"></div>
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

                // Month
                $("#chartmonthsim").html(`<div id="chart"></div>`);
                $("#chartmonthbpkb").html(`<div id="chart2"></div>`);
                $("#chartmonthstnk").html(`<div id="chart3"></div>`);
                $("#chartmonthsbst").html(`<div id="chart4"></div>`);

                // Year
                $("#chartyearsim").html(`<div id="chartyear"></div>`);
                $("#chartyearbpkb").html(`<div id="chartyear2"></div>`);
                $("#chartyearstnk").html(`<div id="chartyear3"></div>`);
                $("#chartyearsbst").html(`<div id="chartyear4"></div>`);


                getStatistik();

                function getStatistik() {
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>ditregident/getStatistik",
                        dataType: "JSON",
                        success: function(result) {
                            $("#overlay").fadeOut(300);
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
                        url: "<?php echo base_url(); ?>ditregident/getChartDitregident",
                        data: {
                            start_date: seven_daysAgo,
                            end_date: today,
                            filter: 'day'
                        },
                        dataType: "JSON",
                        success: function(result) {
                            let polda_month = result.data.polda_month
                            let sim = result.data.sim
                            let bpkb = result.data.bpkb
                            let stnk = result.data.stnk
                            let sbst = result.data.sbst
                            $('#titlesimday').html(`<h4 class="card-title mb-0 text-uppercase">DATA SIM HARIAN</h4>`);
                            $('#titlebpknday').html(`<h4 class="card-title mb-0 text-uppercase">DATA BPKB HARIAN</h4>`);
                            $('#titlestnkday').html(`<h4 class="card-title mb-0 text-uppercase">DATA STNK HARIAN</h4>`);
                            $('#titlesbstday').html(`<h4 class="card-title mb-0 text-uppercase">DATA SBST HARIAN</h4>`);

                            var ditregidentsimday = {
                                series: [{
                                    name: 'SIM',
                                    type: 'line',
                                    data: sim,
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
                                            simsebelumnya = sim[0];

                                            if (sim[0] < sim[1]) {
                                                persentasesim = 'Naik'
                                            } else if (sim[0] > sim[1]) {
                                                persentasesim = 'Turun'
                                            } else {
                                                persentasesim = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            simsebelumnya = sim[1];
                                            if (sim[1] < sim[2]) {
                                                persentasesim = 'Naik'
                                            } else if (sim[1] > sim[2]) {
                                                persentasesim = 'Turun'
                                            } else {
                                                persentasesim = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 4) {
                                            bulansebelumnya = polda_month[2]
                                            simsebelumnya = sim[2];
                                            if (sim[2] < sim[3]) {
                                                persentasesim = 'Naik'
                                            } else if (sim[2] > sim[3]) {
                                                persentasesim = 'Turun'
                                            } else {
                                                persentasesim = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 5) {
                                            bulansebelumnya = polda_month[3]
                                            simsebelumnya = sim[3];
                                            if (sim[3] < sim[4]) {
                                                persentasesim = 'Naik'
                                            } else if (sim[3] > sim[4]) {
                                                persentasesim = 'Turun'
                                            } else {
                                                persentasesim = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 6) {
                                            bulansebelumnya = polda_month[4]
                                            simsebelumnya = sim[4];
                                            if (sim[4] < sim[5]) {
                                                persentasesim = 'Naik'
                                            } else if (sim[4] > sim[5]) {
                                                persentasesim = 'Turun'
                                            } else {
                                                persentasesim = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 7) {
                                            bulansebelumnya = polda_month[5]
                                            simsebelumnya = sim[5];
                                            if (sim[5] < sim[6]) {
                                                persentasesim = 'Naik'
                                            } else if (sim[5] > sim[6]) {
                                                persentasesim = 'Turun'
                                            } else {
                                                persentasesim = 'Sama'
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
                                                            <span class="fw-bold">Total SIM</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${simsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total SIM</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${sim[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesim}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total SIM</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${sim[dataPointIndex]}</span><br>
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


                            var ditregidentbpkbday = {
                                series: [{
                                    name: 'BPKB',
                                    type: 'line',
                                    data: bpkb,
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
                                            bpkbsebelumnya = bpkb[0];

                                            if (bpkb[0] < bpkb[1]) {
                                                persentasebpkb = 'Naik'
                                            } else if (bpkb[0] > bpkb[1]) {
                                                persentasebpkb = 'Turun'
                                            } else {
                                                persentasebpkb = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            bpkbsebelumnya = bpkb[1];
                                            if (bpkb[1] < bpkb[2]) {
                                                persentasebpkb = 'Naik'
                                            } else if (bpkb[1] > bpkb[2]) {
                                                persentasebpkb = 'Turun'
                                            } else {
                                                persentasebpkb = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 4) {
                                            bulansebelumnya = polda_month[2]
                                            bpkbsebelumnya = bpkb[2];
                                            if (bpkb[2] < bpkb[3]) {
                                                persentasebpkb = 'Naik'
                                            } else if (bpkb[2] > bpkb[3]) {
                                                persentasebpkb = 'Turun'
                                            } else {
                                                persentasebpkb = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 5) {
                                            bulansebelumnya = polda_month[3]
                                            bpkbsebelumnya = bpkb[3];
                                            if (bpkb[3] < bpkb[4]) {
                                                persentasebpkb = 'Naik'
                                            } else if (bpkb[3] > bpkb[4]) {
                                                persentasebpkb = 'Turun'
                                            } else {
                                                persentasebpkb = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 6) {
                                            bulansebelumnya = polda_month[5]
                                            bpkbsebelumnya = bpkb[4];
                                            if (bpkb[4] < bpkb[5]) {
                                                persentasebpkb = 'Naik'
                                            } else if (bpkb[4] > bpkb[5]) {
                                                persentasebpkb = 'Turun'
                                            } else {
                                                persentasebpkb = 'Sama'
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
                                                            <span class="fw-bold">Total BPKB</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${bpkbsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total BPKB</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${bpkb[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasebpkb}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total BPKB</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${bpkb[dataPointIndex]}</span><br>
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


                            var ditregidentstnkday = {
                                series: [{
                                    name: 'STNK',
                                    type: 'line',
                                    data: stnk,
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
                                            stnksebelumnya = stnk[0];

                                            if (stnk[0] < stnk[1]) {
                                                persentasestnk = 'Naik'
                                            } else if (stnk[0] > stnk[1]) {
                                                persentasestnk = 'Turun'
                                            } else {
                                                persentasestnk = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            stnksebelumnya = stnk[1];
                                            if (stnk[1] < stnk[2]) {
                                                persentasestnk = 'Naik'
                                            } else if (stnk[1] > stnk[2]) {
                                                persentasestnk = 'Turun'
                                            } else {
                                                persentasestnk = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 4) {
                                            bulansebelumnya = polda_month[2]
                                            stnksebelumnya = stnk[2];
                                            if (stnk[2] < stnk[3]) {
                                                persentasestnk = 'Naik'
                                            } else if (stnk[2] > stnk[3]) {
                                                persentasestnk = 'Turun'
                                            } else {
                                                persentasestnk = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 5) {
                                            bulansebelumnya = polda_month[3]
                                            stnksebelumnya = stnk[3];
                                            if (stnk[3] < stnk[4]) {
                                                persentasestnk = 'Naik'
                                            } else if (stnk[3] > stnk[4]) {
                                                persentasestnk = 'Turun'
                                            } else {
                                                persentasestnk = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 6) {
                                            bulansebelumnya = polda_month[4]
                                            stnksebelumnya = stnk[4];
                                            if (stnk[4] < stnk[5]) {
                                                persentasestnk = 'Naik'
                                            } else if (stnk[4] > stnk[5]) {
                                                persentasestnk = 'Turun'
                                            } else {
                                                persentasestnk = 'Sama'
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
                                                            <span class="fw-bold">Total STNK</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${stnksebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total STNK</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${stnk[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasestnk}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total STNK</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${stnk[dataPointIndex]}</span><br>
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


                            var ditregidentsbstday = {
                                series: [{
                                    name: 'SBST',
                                    type: 'line',
                                    data: sbst,
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
                                            sbstsebelumnya = sbst[0];

                                            if (sbst[0] < sbst[1]) {
                                                persentasesbst = 'Naik'
                                            } else if (sbst[0] > sbst[1]) {
                                                persentasesbst = 'Turun'
                                            } else {
                                                persentasesbst = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            sbstsebelumnya = sbst[1];
                                            if (sbst[1] < sbst[2]) {
                                                persentasesbst = 'Naik'
                                            } else if (sbst[1] > sbst[2]) {
                                                persentasesbst = 'Turun'
                                            } else {
                                                persentasesbst = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 4) {
                                            bulansebelumnya = polda_month[2]
                                            sbstsebelumnya = sbst[2];
                                            if (sbst[2] < sbst[3]) {
                                                persentasesbst = 'Naik'
                                            } else if (sbst[2] > sbst[3]) {
                                                persentasesbst = 'Turun'
                                            } else {
                                                persentasesbst = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 5) {
                                            bulansebelumnya = polda_month[3]
                                            sbstsebelumnya = sbst[3];
                                            if (sbst[3] < sbst[4]) {
                                                persentasesbst = 'Naik'
                                            } else if (sbst[3] > sbst[4]) {
                                                persentasesbst = 'Turun'
                                            } else {
                                                persentasesbst = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 6) {
                                            bulansebelumnya = polda_month[4]
                                            sbstsebelumnya = sbst[4];
                                            if (sbst[4] < sbst[5]) {
                                                persentasesbst = 'Naik'
                                            } else if (sbst[4] > sbst[5]) {
                                                persentasesbst = 'Turun'
                                            } else {
                                                persentasesbst = 'Sama'
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
                                                            <span class="fw-bold">Total SBST</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${sbstsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total SBST</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${sbst[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesbst}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total SBST</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${sbst[dataPointIndex]}</span><br>
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
                }


                // Month
                function getRegidentmonth(firstDay, lastDay) {
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>ditregident/getChartDitregident",
                        data: {
                            start_date: firstDay,
                            end_date: lastDay,
                            filter: 'month'
                        },
                        dataType: "JSON",
                        success: function(result) {
                            let polda_month = result.data.polda_month
                            let sim = result.data.sim
                            let bpkb = result.data.bpkb
                            let stnk = result.data.stnk
                            let sbst = result.data.sbst
                            $('#titlesimmonth').html(`<h4 class="card-title mb-0 text-uppercase">DATA SIM BULANAN</h4>`);
                            $('#titlebpknmonth').html(`<h4 class="card-title mb-0 text-uppercase">DATA BPKB BULANAN</h4>`);
                            $('#titlestnkmonth').html(`<h4 class="card-title mb-0 text-uppercase">DATA STNK BULANAN</h4>`);
                            $('#titlesbstmonth').html(`<h4 class="card-title mb-0 text-uppercase">DATA SBST BULANAN</h4>`);

                            var ditregidentsim = {
                                series: [{
                                    name: 'SIM',
                                    type: 'line',
                                    data: sim,
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
                                            simsebelumnya = sim[0];

                                            if (sim[0] < sim[1]) {
                                                persentasesim = 'Naik'
                                            } else if (sim[0] > sim[1]) {
                                                persentasesim = 'Turun'
                                            } else {
                                                persentasesim = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            simsebelumnya = sim[1];
                                            if (sim[1] < sim[2]) {
                                                persentasesim = 'Naik'
                                            } else if (sim[1] > sim[2]) {
                                                persentasesim = 'Turun'
                                            } else {
                                                persentasesim = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 4) {
                                            bulansebelumnya = polda_month[2]
                                            simsebelumnya = sim[2];
                                            if (sim[2] < sim[3]) {
                                                persentasesim = 'Naik'
                                            } else if (sim[2] > sim[3]) {
                                                persentasesim = 'Turun'
                                            } else {
                                                persentasesim = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 5) {
                                            bulansebelumnya = polda_month[3]
                                            simsebelumnya = sim[3];
                                            if (sim[3] < sim[4]) {
                                                persentasesim = 'Naik'
                                            } else if (sim[3] > sim[4]) {
                                                persentasesim = 'Turun'
                                            } else {
                                                persentasesim = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 6) {
                                            bulansebelumnya = polda_month[4]
                                            simsebelumnya = sim[4];
                                            if (sim[4] < sim[5]) {
                                                persentasesim = 'Naik'
                                            } else if (sim[4] > sim[5]) {
                                                persentasesim = 'Turun'
                                            } else {
                                                persentasesim = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 7) {
                                            bulansebelumnya = polda_month[5]
                                            simsebelumnya = sim[5];
                                            if (sim[5] < sim[6]) {
                                                persentasesim = 'Naik'
                                            } else if (sim[5] > sim[6]) {
                                                persentasesim = 'Turun'
                                            } else {
                                                persentasesim = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 8) {
                                            bulansebelumnya = polda_month[6]
                                            simsebelumnya = sim[6];
                                            if (sim[6] < sim[7]) {
                                                persentasesim = 'Naik'
                                            } else if (sim[6] > sim[7]) {
                                                persentasesim = 'Turun'
                                            } else {
                                                persentasesim = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 9) {
                                            bulansebelumnya = polda_month[7]
                                            simsebelumnya = sim[7];
                                            if (sim[7] < sim[8]) {
                                                persentasesim = 'Naik'
                                            } else if (sim[7] > sim[8]) {
                                                persentasesim = 'Turun'
                                            } else {
                                                persentasesim = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 10) {
                                            bulansebelumnya = polda_month[8]
                                            simsebelumnya = sim[8];
                                            if (sim[8] < sim[9]) {
                                                persentasesim = 'Naik'
                                            } else if (sim[8] > sim[9]) {
                                                persentasesim = 'Turun'
                                            } else {
                                                persentasesim = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 11) {
                                            bulansebelumnya = polda_month[9]
                                            simsebelumnya = sim[9];
                                            if (sim[9] < sim[10]) {
                                                persentasesim = 'Naik'
                                            } else if (sim[9] > sim[10]) {
                                                persentasesim = 'Turun'
                                            } else {
                                                persentasesim = `Sama`
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 12) {
                                            bulansebelumnya = polda_month[10]
                                            simsebelumnya = sim[10];
                                            if (sim[10] < sim[11]) {
                                                persentasesim = 'Naik'
                                            } else if (sim[10] > sim[11]) {
                                                persentasesim = 'Turun'
                                            } else {
                                                persentasesim = 'Sama'
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
                                                            <span class="fw-bold">Total SIM</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${simsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total SIM</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${sim[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesim}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total SIM</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${sim[dataPointIndex]}</span><br>
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

                            var ditregidentsim = new ApexCharts(document.querySelector("#chart"), ditregidentsim);
                            ditregidentsim.render();


                            var ditregident = {
                                series: [{
                                    name: 'BPKB',
                                    type: 'line',
                                    data: bpkb,
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
                                            bpkbsebelumnya = bpkb[0];

                                            if (bpkb[0] < bpkb[1]) {
                                                persentasebpkb = 'Naik'
                                            } else if (bpkb[0] > bpkb[1]) {
                                                persentasebpkb = 'Turun'
                                            } else {
                                                persentasebpkb = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            bpkbsebelumnya = bpkb[1];
                                            if (bpkb[1] < bpkb[2]) {
                                                persentasebpkb = 'Naik'
                                            } else if (bpkb[1] > bpkb[2]) {
                                                persentasebpkb = 'Turun'
                                            } else {
                                                persentasebpkb = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 4) {
                                            bulansebelumnya = polda_month[2]
                                            bpkbsebelumnya = bpkb[2];
                                            if (bpkb[2] < bpkb[3]) {
                                                persentasebpkb = 'Naik'
                                            } else if (bpkb[2] > bpkb[3]) {
                                                persentasebpkb = 'Turun'
                                            } else {
                                                persentasebpkb = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 5) {
                                            bulansebelumnya = polda_month[3]
                                            bpkbsebelumnya = bpkb[3];
                                            if (bpkb[3] < bpkb[4]) {
                                                persentasebpkb = 'Naik'
                                            } else if (bpkb[3] > bpkb[4]) {
                                                persentasebpkb = 'Turun'
                                            } else {
                                                persentasebpkb = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 6) {
                                            bulansebelumnya = polda_month[4]
                                            bpkbsebelumnya = bpkb[4];
                                            if (bpkb[4] < bpkb[5]) {
                                                persentasebpkb = 'Naik'
                                            } else if (bpkb[4] > bpkb[5]) {
                                                persentasebpkb = 'Turun'
                                            } else {
                                                persentasebpkb = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 7) {
                                            bulansebelumnya = polda_month[5]
                                            bpkbsebelumnya = bpkb[5];
                                            if (bpkb[5] < bpkb[6]) {
                                                persentasebpkb = 'Naik'
                                            } else if (bpkb[5] > bpkb[6]) {
                                                persentasebpkb = 'Turun'
                                            } else {
                                                persentasebpkb = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 8) {
                                            bulansebelumnya = polda_month[6]
                                            bpkbsebelumnya = bpkb[6];
                                            if (bpkb[6] < bpkb[7]) {
                                                persentasebpkb = 'Naik'
                                            } else if (bpkb[6] > bpkb[7]) {
                                                persentasebpkb = 'Turun'
                                            } else {
                                                persentasebpkb = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 9) {
                                            bulansebelumnya = polda_month[7]
                                            bpkbsebelumnya = bpkb[7];
                                            if (bpkb[7] < bpkb[8]) {
                                                persentasebpkb = 'Naik'
                                            } else if (bpkb[7] > bpkb[8]) {
                                                persentasebpkb = 'Turun'
                                            } else {
                                                persentasebpkb = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 10) {
                                            bulansebelumnya = polda_month[8]
                                            bpkbsebelumnya = bpkb[8];
                                            if (bpkb[8] < bpkb[9]) {
                                                persentasebpkb = 'Naik'
                                            } else if (bpkb[8] > bpkb[9]) {
                                                persentasebpkb = 'Turun'
                                            } else {
                                                persentasebpkb = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 11) {
                                            bulansebelumnya = polda_month[9]
                                            bpkbsebelumnya = bpkb[9];
                                            if (bpkb[9] < bpkb[10]) {
                                                persentasebpkb = 'Naik'
                                            } else if (bpkb[9] > bpkb[10]) {
                                                persentasebpkb = 'Turun'
                                            } else {
                                                persentasebpkb = `Sama`
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 12) {
                                            bulansebelumnya = polda_month[10]
                                            bpkbsebelumnya = bpkb[10];
                                            if (bpkb[10] < bpkb[11]) {
                                                persentasebpkb = 'Naik'
                                            } else if (bpkb[10] > bpkb[11]) {
                                                persentasebpkb = 'Turun'
                                            } else {
                                                persentasebpkb = 'Sama'
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
                                                            <span class="fw-bold">Total BPKB</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${bpkbsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total BPKB</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${bpkb[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasebpkb}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total BPKB</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${bpkb[dataPointIndex]}</span><br>
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

                            var ditregident = new ApexCharts(document.querySelector("#chart2"), ditregident);
                            ditregident.render();


                            var ditregidentstnk = {
                                series: [{
                                    name: 'STNK',
                                    type: 'line',
                                    data: stnk,
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
                                            stnksebelumnya = stnk[0];

                                            if (stnk[0] < stnk[1]) {
                                                persentasestnk = 'Naik'
                                            } else if (stnk[0] > stnk[1]) {
                                                persentasestnk = 'Turun'
                                            } else {
                                                persentasestnk = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            stnksebelumnya = stnk[1];
                                            if (stnk[1] < stnk[2]) {
                                                persentasestnk = 'Naik'
                                            } else if (stnk[1] > stnk[2]) {
                                                persentasestnk = 'Turun'
                                            } else {
                                                persentasestnk = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 4) {
                                            bulansebelumnya = polda_month[2]
                                            stnksebelumnya = stnk[2];
                                            if (stnk[2] < stnk[3]) {
                                                persentasestnk = 'Naik'
                                            } else if (stnk[2] > stnk[3]) {
                                                persentasestnk = 'Turun'
                                            } else {
                                                persentasestnk = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 5) {
                                            bulansebelumnya = polda_month[3]
                                            stnksebelumnya = stnk[3];
                                            if (stnk[3] < stnk[4]) {
                                                persentasestnk = 'Naik'
                                            } else if (stnk[3] > stnk[4]) {
                                                persentasestnk = 'Turun'
                                            } else {
                                                persentasestnk = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 6) {
                                            bulansebelumnya = polda_month[4]
                                            stnksebelumnya = stnk[4];
                                            if (stnk[4] < stnk[5]) {
                                                persentasestnk = 'Naik'
                                            } else if (stnk[4] > stnk[5]) {
                                                persentasestnk = 'Turun'
                                            } else {
                                                persentasestnk = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 7) {
                                            bulansebelumnya = polda_month[5]
                                            stnksebelumnya = stnk[5];
                                            if (stnk[5] < stnk[6]) {
                                                persentasestnk = 'Naik'
                                            } else if (stnk[5] > stnk[6]) {
                                                persentasestnk = 'Turun'
                                            } else {
                                                persentasestnk = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 8) {
                                            bulansebelumnya = polda_month[6]
                                            stnksebelumnya = stnk[6];
                                            if (stnk[6] < stnk[7]) {
                                                persentasestnk = 'Naik'
                                            } else if (stnk[6] > stnk[7]) {
                                                persentasestnk = 'Turun'
                                            } else {
                                                persentasestnk = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 9) {
                                            bulansebelumnya = polda_month[7]
                                            stnksebelumnya = stnk[7];
                                            if (stnk[7] < stnk[8]) {
                                                persentasestnk = 'Naik'
                                            } else if (stnk[7] > stnk[8]) {
                                                persentasestnk = 'Turun'
                                            } else {
                                                persentasestnk = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 10) {
                                            bulansebelumnya = polda_month[8]
                                            stnksebelumnya = stnk[8];
                                            if (stnk[8] < stnk[9]) {
                                                persentasestnk = 'Naik'
                                            } else if (stnk[8] > stnk[9]) {
                                                persentasestnk = 'Turun'
                                            } else {
                                                persentasestnk = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 11) {
                                            bulansebelumnya = polda_month[9]
                                            stnksebelumnya = stnk[9];
                                            if (stnk[9] < stnk[10]) {
                                                persentasestnk = 'Naik'
                                            } else if (stnk[9] > stnk[10]) {
                                                persentasestnk = 'Turun'
                                            } else {
                                                persentasestnk = `Sama`
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 12) {
                                            bulansebelumnya = polda_month[10]
                                            stnksebelumnya = stnk[10];
                                            if (stnk[10] < stnk[11]) {
                                                persentasestnk = 'Naik'
                                            } else if (stnk[10] > stnk[11]) {
                                                persentasestnk = 'Turun'
                                            } else {
                                                persentasestnk = 'Sama'
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
                                                            <span class="fw-bold">Total STNK</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${stnksebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total STNK</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${stnk[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasestnk}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total STNK</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${stnk[dataPointIndex]}</span><br>
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

                            var ditregidentstnk = new ApexCharts(document.querySelector("#chart3"), ditregidentstnk);
                            ditregidentstnk.render();


                            var ditregidentsbst = {
                                series: [{
                                    name: 'SBST',
                                    type: 'line',
                                    data: sbst,
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
                                            sbstsebelumnya = sbst[0];

                                            if (sbst[0] < sbst[1]) {
                                                persentasesbst = 'Naik'
                                            } else if (sbst[0] > sbst[1]) {
                                                persentasesbst = 'Turun'
                                            } else {
                                                persentasesbst = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            sbstsebelumnya = sbst[1];
                                            if (sbst[1] < sbst[2]) {
                                                persentasesbst = 'Naik'
                                            } else if (sbst[1] > sbst[2]) {
                                                persentasesbst = 'Turun'
                                            } else {
                                                persentasesbst = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 4) {
                                            bulansebelumnya = polda_month[2]
                                            sbstsebelumnya = sbst[2];
                                            if (sbst[2] < sbst[3]) {
                                                persentasesbst = 'Naik'
                                            } else if (sbst[2] > sbst[3]) {
                                                persentasesbst = 'Turun'
                                            } else {
                                                persentasesbst = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 5) {
                                            bulansebelumnya = polda_month[3]
                                            sbstsebelumnya = sbst[3];
                                            if (sbst[3] < sbst[4]) {
                                                persentasesbst = 'Naik'
                                            } else if (sbst[3] > sbst[4]) {
                                                persentasesbst = 'Turun'
                                            } else {
                                                persentasesbst = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 6) {
                                            bulansebelumnya = polda_month[4]
                                            sbstsebelumnya = sbst[4];
                                            if (sbst[4] < sbst[5]) {
                                                persentasesbst = 'Naik'
                                            } else if (sbst[4] > sbst[5]) {
                                                persentasesbst = 'Turun'
                                            } else {
                                                persentasesbst = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 7) {
                                            bulansebelumnya = polda_month[5]
                                            sbstsebelumnya = sbst[5];
                                            if (sbst[5] < sbst[6]) {
                                                persentasesbst = 'Naik'
                                            } else if (sbst[5] > sbst[6]) {
                                                persentasesbst = 'Turun'
                                            } else {
                                                persentasesbst = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 8) {
                                            bulansebelumnya = polda_month[6]
                                            sbstsebelumnya = sbst[6];
                                            if (sbst[6] < sbst[7]) {
                                                persentasesbst = 'Naik'
                                            } else if (sbst[6] > sbst[7]) {
                                                persentasesbst = 'Turun'
                                            } else {
                                                persentasesbst = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 9) {
                                            bulansebelumnya = polda_month[7]
                                            sbstsebelumnya = sbst[7];
                                            if (sbst[7] < sbst[8]) {
                                                persentasesbst = 'Naik'
                                            } else if (sbst[7] > sbst[8]) {
                                                persentasesbst = 'Turun'
                                            } else {
                                                persentasesbst = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 10) {
                                            bulansebelumnya = polda_month[8]
                                            sbstsebelumnya = sbst[8];
                                            if (sbst[8] < sbst[9]) {
                                                persentasesbst = 'Naik'
                                            } else if (sbst[8] > sbst[9]) {
                                                persentasesbst = 'Turun'
                                            } else {
                                                persentasesbst = 'Sama'
                                            }
                                        } else if (w.globals.labels[dataPointIndex] == 11) {
                                            bulansebelumnya = polda_month[9]
                                            sbstsebelumnya = sbst[9];
                                            if (sbst[9] < sbst[10]) {
                                                persentasesbst = 'Naik'
                                            } else if (sbst[9] > sbst[10]) {
                                                persentasesbst = 'Turun'
                                            } else {
                                                persentasesbst = `Sama`
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 12) {
                                            bulansebelumnya = polda_month[10]
                                            sbstsebelumnya = sbst[10];
                                            if (sbst[10] < sbst[11]) {
                                                persentasesbst = 'Naik'
                                            } else if (sbst[10] > sbst[11]) {
                                                persentasesbst = 'Turun'
                                            } else {
                                                persentasesbst = 'Sama'
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
                                                            <span class="fw-bold">Total SBST</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${sbstsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total SBST</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${sbst[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesbst}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total SBST</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${sbst[dataPointIndex]}</span><br>
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

                            var ditregidentsbst = new ApexCharts(document.querySelector("#chart4"), ditregidentsbst);
                            ditregidentsbst.render();
                        }
                    })
                }

                // Year
                function getRegidentyear(three_yearAgo, lastDay) {
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>ditregident/getChartDitregident",
                        data: {
                            start_date: three_yearAgo,
                            end_date: lastDay,
                            filter: 'year'
                        },
                        dataType: "JSON",
                        success: function(result) {
                            let polda_month = result.data.polda_month
                            let sim = result.data.sim
                            let bpkb = result.data.bpkb
                            let stnk = result.data.stnk
                            let sbst = result.data.sbst
                            $('#titlesimyear').html(`<h4 class="card-title mb-0 text-uppercase">DATA SIM TAHUNAN</h4>`);
                            $('#titlebpknyear').html(`<h4 class="card-title mb-0 text-uppercase">DATA BPKB TAHUNAN</h4>`);
                            $('#titlestnkyear').html(`<h4 class="card-title mb-0 text-uppercase">DATA STNK TAHUNAN</h4>`);
                            $('#titlesbstyear').html(`<h4 class="card-title mb-0 text-uppercase">DATA SBST TAHUNAN</h4>`);

                            var ditregidentsimyear = {
                                series: [{
                                    name: 'SIM',
                                    type: 'line',
                                    data: sim,
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
                                            simsebelumnya = sim[0];

                                            if (sim[0] < sim[1]) {
                                                persentasesim = 'Naik'
                                            } else if (sim[0] > sim[1]) {
                                                persentasesim = 'Turun'
                                            } else {
                                                persentasesim = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            simsebelumnya = sim[1];
                                            if (sim[1] < sim[2]) {
                                                persentasesim = 'Naik'
                                            } else if (sim[1] > sim[2]) {
                                                persentasesim = 'Turun'
                                            } else {
                                                persentasesim = 'Sama'
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
                                                            <span class="fw-bold">Total SIM</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${simsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total SIM</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${sim[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesim}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total SIM</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${sim[dataPointIndex]}</span><br>
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

                            var ditregidentsimyear = new ApexCharts(document.querySelector("#chartyear"), ditregidentsimyear);
                            ditregidentsimyear.render();


                            var ditregidentyear = {
                                series: [{
                                    name: 'BPKB',
                                    type: 'line',
                                    data: bpkb,
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
                                            bpkbsebelumnya = bpkb[0];

                                            if (bpkb[0] < bpkb[1]) {
                                                persentasebpkb = 'Naik'
                                            } else if (bpkb[0] > bpkb[1]) {
                                                persentasebpkb = 'Turun'
                                            } else {
                                                persentasebpkb = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            bpkbsebelumnya = bpkb[1];
                                            if (bpkb[1] < bpkb[2]) {
                                                persentasebpkb = 'Naik'
                                            } else if (bpkb[1] > bpkb[2]) {
                                                persentasebpkb = 'Turun'
                                            } else {
                                                persentasebpkb = 'Sama'
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
                                                            <span class="fw-bold">Total BPKB</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${bpkbsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total BPKB</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${bpkb[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasebpkb}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total BPKB</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${bpkb[dataPointIndex]}</span><br>
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

                            var ditregidentyear = new ApexCharts(document.querySelector("#chartyear2"), ditregidentyear);
                            ditregidentyear.render();


                            var ditregidentstnkyear = {
                                series: [{
                                    name: 'STNK',
                                    type: 'line',
                                    data: stnk,
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
                                            stnksebelumnya = stnk[0];

                                            if (stnk[0] < stnk[1]) {
                                                persentasestnk = 'Naik'
                                            } else if (stnk[0] > stnk[1]) {
                                                persentasestnk = 'Turun'
                                            } else {
                                                persentasestnk = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            stnksebelumnya = stnk[1];
                                            if (stnk[1] < stnk[2]) {
                                                persentasestnk = 'Naik'
                                            } else if (stnk[1] > stnk[2]) {
                                                persentasestnk = 'Turun'
                                            } else {
                                                persentasestnk = 'Sama'
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
                                                            <span class="fw-bold">Total STNK</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${stnksebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total STNK</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${stnk[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasestnk}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total STNK</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${stnk[dataPointIndex]}</span><br>
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


                            var ditregidentsbstyear = {
                                series: [{
                                    name: 'SBST',
                                    type: 'line',
                                    data: sbst,
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
                                            sbstsebelumnya = sbst[0];

                                            if (sbst[0] < sbst[1]) {
                                                persentasesbst = 'Naik'
                                            } else if (sbst[0] > sbst[1]) {
                                                persentasesbst = 'Turun'
                                            } else {
                                                persentasesbst = 'Sama'
                                            }

                                        } else if (w.globals.labels[dataPointIndex] == 3) {
                                            bulansebelumnya = polda_month[1]
                                            sbstsebelumnya = sbst[1];
                                            if (sbst[1] < sbst[2]) {
                                                persentasesbst = 'Naik'
                                            } else if (sbst[1] > sbst[2]) {
                                                persentasesbst = 'Turun'
                                            } else {
                                                persentasesbst = 'Sama'
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
                                                            <span class="fw-bold">Total SBST</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${sbstsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total SBST</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${sbst[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesbst}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total SBST</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${sbst[dataPointIndex]}</span><br>
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
                }
            </script>