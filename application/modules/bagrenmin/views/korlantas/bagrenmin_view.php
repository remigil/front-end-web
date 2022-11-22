<div class="container-fluid">
    <div class="row">
        <div class="col-md-9 align-self-center">
            <div id="nama">
                <h1 style="color:#007DD8 ; text-transform:uppercase;">Bagrenmin</h1>
            </div>
            <p>Today is <?= date('l, j F Y') ?></p>
        </div>
        <div class="col-md-3 text-end align-self-center">
            <a href="http://34.143.227.90:3001/v1/laporan_harian/export_laphar" class="text-center"><button class="btn btn-outline-primary" style="width: 200px; border-color:#007DD8;">Export Laporan</button></a>
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
                                        <span class="fw-bold">Total SUBBAG REN</span>
                                    </span>
                                    <br>
                                    <span class="fs-6 fw-bold float-end" style="color:#464646;" id="subbagren"></span>
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
                                        <span class="fw-bold">Total SUBBAG SDM</span>
                                    </span>
                                    <br>
                                    <span class="fs-6 fw-bold float-end" style="color:#464646;" id="subbagsdm"></span>
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
                                        <span class="fw-bold">Total SUBBAG ADA</span>
                                    </span>
                                    <br>
                                    <span class="fs-6 fw-bold float-end" style="color:#464646;" id="subbagada"></span>
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
                                        <span class="fw-bold">Total SUBBAG LOG</span>
                                    </span>
                                    <br>
                                    <span class="fs-6 fw-bold float-end" style="color:#464646;" id="subbaglog"></span>
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
                                <div id="titlesubbagrenday"></div>
                            </div>
                            <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                <div class="main-chart">
                                    <div id="chartdaysubbagren">
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
                                <div id="titlesubbagsdmday"></div>
                            </div>
                            <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                <div class="main-chart">
                                    <div id="chartdaysubbagsdm">
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
                                <div id="titlesubbagadaday"></div>
                            </div>
                            <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                <div class="main-chart">
                                    <div id="chartdaysubbagada">
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
                                <div id="titlesubbaglogday"></div>
                            </div>
                            <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                <div class="main-chart">
                                    <div id="chartdaysubbaglog">
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
                                <div id="titlesubbagrenmonth"></div>
                            </div>
                            <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                <div class="main-chart">
                                    <div id="chartmonthsubbagren">
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
                                <div id="titlesubbagsdmmonth"></div>
                            </div>
                            <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                <div class="main-chart">
                                    <div id="chartmonthsubbagsdm">
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
                                <div id="titlesubbagadamonth"></div>
                            </div>
                            <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                <div class="main-chart">
                                    <div id="chartmonthsubbagada">
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
                                <div id="titlesubbaglogmonth"></div>
                            </div>
                            <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                <div class="main-chart">
                                    <div id="chartmonthsubbaglog">
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
                                <div id="titlesubbagrenyear"></div>
                            </div>
                            <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                <div class="main-chart">
                                    <div id="chartyearsubbagren">
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
                                <div id="titlesubbagsdmyear"></div>
                            </div>
                            <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                <div class="main-chart">
                                    <div id="chartyearsubbagsdm">
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
                                <div id="titlesubbagadayear"></div>
                            </div>
                            <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                <div class="main-chart">
                                    <div id="chartyearsubbagada">
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
                                <div id="titlesubbaglogyear"></div>
                            </div>
                            <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                <div class="main-chart">
                                    <div id="chartyearsubbaglog">
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
    $("#chartdaysubbagren").html(`<div id="chartday1"></div>`);
    $("#chartdaysubbagsdm").html(`<div id="chartday2"></div>`);
    $("#chartdaysubbagada").html(`<div id="chartday3"></div>`);
    $("#chartdaysubbaglog").html(`<div id="chartday4"></div>`);

    // Month
    $("#chartmonthsubbagren").html(`<div id="chart"></div>`);
    $("#chartmonthsubbagsdm").html(`<div id="chart2"></div>`);
    $("#chartmonthsubbagada").html(`<div id="chart3"></div>`);
    $("#chartmonthsubbaglog").html(`<div id="chart4"></div>`);

    // Year
    $("#chartyearsubbagren").html(`<div id="chartyear"></div>`);
    $("#chartyearsubbagsdm").html(`<div id="chartyear2"></div>`);
    $("#chartyearsubbagada").html(`<div id="chartyear3"></div>`);
    $("#chartyearsubbaglog").html(`<div id="chartyear4"></div>`);


    getStatistik();

    function getStatistik() {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>bagrenmin/getStatistik",
            dataType: "JSON",
            success: function(result) {
                $("#overlay").fadeOut(300);
                $('#subbagren').html(`<span class="fs-4" >${result.subbagren}</span >`);
                $('#subbagsdm').html(`<span class="fs-4" >${result.subbagsdm}</span >`);
                $('#subbagada').html(`<span class="fs-4" >${result.subbagada}</span >`);
                $('#subbaglog').html(`<span class="fs-4" >${result.subbaglog}</span>`);
            }
        })
    }

    getBagrenminday(today, seven_daysAgo)
    getBagrenminmonth(firstDay, lastDay)
    getBagrenminyear(three_yearAgo, lastDay)
    // Day
    function getBagrenminday(today, seven_daysAgo) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>bagrenmin/getChartBagrenmin",
            data: {
                start_date: seven_daysAgo,
                end_date: today,
                filter: 'day'
            },
            dataType: "JSON",
            success: function(result) {
                let polda_month = result.data.polda_month
                let subbagren = result.data.subbagren
                let subbagsdm = result.data.subbagsdm
                let subbagada = result.data.subbagada
                let subbaglog = result.data.subbaglog
                $('#titlesubbagrenday').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG REN HARIAN</h4>`);
                $('#titlesubbagsdmday').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG SDM HARIAN</h4>`);
                $('#titlesubbagadaday').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG ADA HARIAN</h4>`);
                $('#titlesubbaglogday').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG LOG HARIAN</h4>`);

                var bagrenminsubbagrenday = {
                    series: [{
                        name: 'subbagren',
                        type: 'line',
                        data: subbagren,
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
                                subbagrensebelumnya = subbagren[0];

                                if (subbagren[0] < subbagren[1]) {
                                    persentasesubbagren = 'Naik'
                                } else if (subbagren[0] > subbagren[1]) {
                                    persentasesubbagren = 'Turun'
                                } else {
                                    persentasesubbagren = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbagrensebelumnya = subbagren[1];
                                if (subbagren[1] < subbagren[2]) {
                                    persentasesubbagren = 'Naik'
                                } else if (subbagren[1] > subbagren[2]) {
                                    persentasesubbagren = 'Turun'
                                } else {
                                    persentasesubbagren = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                subbagrensebelumnya = subbagren[2];
                                if (subbagren[2] < subbagren[3]) {
                                    persentasesubbagren = 'Naik'
                                } else if (subbagren[2] > subbagren[3]) {
                                    persentasesubbagren = 'Turun'
                                } else {
                                    persentasesubbagren = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                subbagrensebelumnya = subbagren[3];
                                if (subbagren[3] < subbagren[4]) {
                                    persentasesubbagren = 'Naik'
                                } else if (subbagren[3] > subbagren[4]) {
                                    persentasesubbagren = 'Turun'
                                } else {
                                    persentasesubbagren = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                subbagrensebelumnya = subbagren[4];
                                if (subbagren[4] < subbagren[5]) {
                                    persentasesubbagren = 'Naik'
                                } else if (subbagren[4] > subbagren[5]) {
                                    persentasesubbagren = 'Turun'
                                } else {
                                    persentasesubbagren = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                subbagrensebelumnya = subbagren[5];
                                if (subbagren[5] < subbagren[6]) {
                                    persentasesubbagren = 'Naik'
                                } else if (subbagren[5] > subbagren[6]) {
                                    persentasesubbagren = 'Turun'
                                } else {
                                    persentasesubbagren = 'Sama'
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
                                                            <span class="fw-bold">Total subbagren</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbagrensebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total subbagren</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagren[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesubbagren}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total subbagren</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagren[dataPointIndex]}</span><br>
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

                var bagrenminsubbagrenday = new ApexCharts(document.querySelector("#chartday1"), bagrenminsubbagrenday);
                bagrenminsubbagrenday.render();


                var bagrenminsubbagsdmday = {
                    series: [{
                        name: 'subbagsdm',
                        type: 'line',
                        data: subbagsdm,
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
                                subbagsdmsebelumnya = subbagsdm[0];

                                if (subbagsdm[0] < subbagsdm[1]) {
                                    persentasesubbagsdm = 'Naik'
                                } else if (subbagsdm[0] > subbagsdm[1]) {
                                    persentasesubbagsdm = 'Turun'
                                } else {
                                    persentasesubbagsdm = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbagsdmsebelumnya = subbagsdm[1];
                                if (subbagsdm[1] < subbagsdm[2]) {
                                    persentasesubbagsdm = 'Naik'
                                } else if (subbagsdm[1] > subbagsdm[2]) {
                                    persentasesubbagsdm = 'Turun'
                                } else {
                                    persentasesubbagsdm = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                subbagsdmsebelumnya = subbagsdm[2];
                                if (subbagsdm[2] < subbagsdm[3]) {
                                    persentasesubbagsdm = 'Naik'
                                } else if (subbagsdm[2] > subbagsdm[3]) {
                                    persentasesubbagsdm = 'Turun'
                                } else {
                                    persentasesubbagsdm = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                subbagsdmsebelumnya = subbagsdm[3];
                                if (subbagsdm[3] < subbagsdm[4]) {
                                    persentasesubbagsdm = 'Naik'
                                } else if (subbagsdm[3] > subbagsdm[4]) {
                                    persentasesubbagsdm = 'Turun'
                                } else {
                                    persentasesubbagsdm = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[5]
                                subbagsdmsebelumnya = subbagsdm[4];
                                if (subbagsdm[4] < subbagsdm[5]) {
                                    persentasesubbagsdm = 'Naik'
                                } else if (subbagsdm[4] > subbagsdm[5]) {
                                    persentasesubbagsdm = 'Turun'
                                } else {
                                    persentasesubbagsdm = 'Sama'
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
                                                            <span class="fw-bold">Total subbagsdm</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbagsdmsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total subbagsdm</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagsdm[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesubbagsdm}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total subbagsdm</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagsdm[dataPointIndex]}</span><br>
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

                var bagrenminsubbagsdmday = new ApexCharts(document.querySelector("#chartday2"), bagrenminsubbagsdmday);
                bagrenminsubbagsdmday.render();


                var bagrenminsubbagadaday = {
                    series: [{
                        name: 'subbagada',
                        type: 'line',
                        data: subbagada,
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
                                subbagadasebelumnya = subbagada[0];

                                if (subbagada[0] < subbagada[1]) {
                                    persentasesubbagada = 'Naik'
                                } else if (subbagada[0] > subbagada[1]) {
                                    persentasesubbagada = 'Turun'
                                } else {
                                    persentasesubbagada = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbagadasebelumnya = subbagada[1];
                                if (subbagada[1] < subbagada[2]) {
                                    persentasesubbagada = 'Naik'
                                } else if (subbagada[1] > subbagada[2]) {
                                    persentasesubbagada = 'Turun'
                                } else {
                                    persentasesubbagada = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                subbagadasebelumnya = subbagada[2];
                                if (subbagada[2] < subbagada[3]) {
                                    persentasesubbagada = 'Naik'
                                } else if (subbagada[2] > subbagada[3]) {
                                    persentasesubbagada = 'Turun'
                                } else {
                                    persentasesubbagada = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                subbagadasebelumnya = subbagada[3];
                                if (subbagada[3] < subbagada[4]) {
                                    persentasesubbagada = 'Naik'
                                } else if (subbagada[3] > subbagada[4]) {
                                    persentasesubbagada = 'Turun'
                                } else {
                                    persentasesubbagada = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                subbagadasebelumnya = subbagada[4];
                                if (subbagada[4] < subbagada[5]) {
                                    persentasesubbagada = 'Naik'
                                } else if (subbagada[4] > subbagada[5]) {
                                    persentasesubbagada = 'Turun'
                                } else {
                                    persentasesubbagada = 'Sama'
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
                                                            <span class="fw-bold">Total subbagada</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbagadasebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total subbagada</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagada[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesubbagada}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total subbagada</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagada[dataPointIndex]}</span><br>
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

                var bagrenminsubbagadaday = new ApexCharts(document.querySelector("#chartday3"), bagrenminsubbagadaday);
                bagrenminsubbagadaday.render();


                var bagrenminsubbaglogday = {
                    series: [{
                        name: 'subbaglog',
                        type: 'line',
                        data: subbaglog,
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
                                subbaglogsebelumnya = subbaglog[0];

                                if (subbaglog[0] < subbaglog[1]) {
                                    subbaglog = 'Naik'
                                } else if (subbaglog[0] > subbaglog[1]) {
                                    subbaglog = 'Turun'
                                } else {
                                    subbaglog = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbaglogsebelumnya = subbaglog[1];
                                if (subbaglog[1] < subbaglog[2]) {
                                    subbaglog = 'Naik'
                                } else if (subbaglog[1] > subbaglog[2]) {
                                    subbaglog = 'Turun'
                                } else {
                                    subbaglog = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                subbaglogsebelumnya = subbaglog[2];
                                if (subbaglog[2] < subbaglog[3]) {
                                    subbaglog = 'Naik'
                                } else if (subbaglog[2] > subbaglog[3]) {
                                    subbaglog = 'Turun'
                                } else {
                                    subbaglog = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                subbaglogsebelumnya = subbaglog[3];
                                if (subbaglog[3] < subbaglog[4]) {
                                    subbaglog = 'Naik'
                                } else if (subbaglog[3] > subbaglog[4]) {
                                    subbaglog = 'Turun'
                                } else {
                                    subbaglog = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                subbaglogsebelumnya = subbaglog[4];
                                if (subbaglog[4] < subbaglog[5]) {
                                    subbaglog = 'Naik'
                                } else if (subbaglog[4] > subbaglog[5]) {
                                    subbaglog = 'Turun'
                                } else {
                                    subbaglog = 'Sama'
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
                                                            <span class="fw-bold">Total subbaglog</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbaglogsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total subbaglog</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbaglog[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${subbaglog}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total subbaglog</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbaglog[dataPointIndex]}</span><br>
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

                var bagrenminsubbaglogday = new ApexCharts(document.querySelector("#chartday4"), bagrenminsubbaglogday);
                bagrenminsubbaglogday.render();
            }
        })
    }


    // // Month
    function getBagrenminmonth(firstDay, lastDay) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>bagrenmin/getChartBagrenmin",
            data: {
                start_date: firstDay,
                end_date: lastDay,
                filter: 'month'
            },
            dataType: "JSON",
            success: function(result) {
                let polda_month = result.data.polda_month
                let subbagren = result.data.subbagren
                let subbagsdm = result.data.subbagsdm
                let subbagada = result.data.subbagada
                let subbaglog = result.data.subbaglog
                $('#titlesubbagrenmonth').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG REN BULANAN</h4>`);
                $('#titlesubbagsdmmonth').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG SDM BULANAN</h4>`);
                $('#titlesubbagadamonth').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG ADA BULANAN</h4>`);
                $('#titlesubbaglogmonth').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG LOG BULANAN</h4>`);

                var bagrenminsubbagrenmonth = {
                    series: [{
                        name: 'subbagren',
                        type: 'line',
                        data: subbagren,
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
                                subbagrensebelumnya = subbagren[0];

                                if (subbagren[0] < subbagren[1]) {
                                    persentasesubbagren = 'Naik'
                                } else if (subbagren[0] > subbagren[1]) {
                                    persentasesubbagren = 'Turun'
                                } else {
                                    persentasesubbagren = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbagrensebelumnya = subbagren[1];
                                if (subbagren[1] < subbagren[2]) {
                                    persentasesubbagren = 'Naik'
                                } else if (subbagren[1] > subbagren[2]) {
                                    persentasesubbagren = 'Turun'
                                } else {
                                    persentasesubbagren = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                subbagrensebelumnya = subbagren[2];
                                if (subbagren[2] < subbagren[3]) {
                                    persentasesubbagren = 'Naik'
                                } else if (subbagren[2] > subbagren[3]) {
                                    persentasesubbagren = 'Turun'
                                } else {
                                    persentasesubbagren = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                subbagrensebelumnya = subbagren[3];
                                if (subbagren[3] < subbagren[4]) {
                                    persentasesubbagren = 'Naik'
                                } else if (subbagren[3] > subbagren[4]) {
                                    persentasesubbagren = 'Turun'
                                } else {
                                    persentasesubbagren = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                subbagrensebelumnya = subbagren[4];
                                if (subbagren[4] < subbagren[5]) {
                                    persentasesubbagren = 'Naik'
                                } else if (subbagren[4] > subbagren[5]) {
                                    persentasesubbagren = 'Turun'
                                } else {
                                    persentasesubbagren = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                subbagrensebelumnya = subbagren[5];
                                if (subbagren[5] < subbagren[6]) {
                                    persentasesubbagren = 'Naik'
                                } else if (subbagren[5] > subbagren[6]) {
                                    persentasesubbagren = 'Turun'
                                } else {
                                    persentasesubbagren = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                subbagrensebelumnya = subbagren[6];
                                if (subbagren[6] < subbagren[7]) {
                                    persentasesubbagren = 'Naik'
                                } else if (subbagren[6] > subbagren[7]) {
                                    persentasesubbagren = 'Turun'
                                } else {
                                    persentasesubbagren = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                subbagrensebelumnya = subbagren[7];
                                if (subbagren[7] < subbagren[8]) {
                                    persentasesubbagren = 'Naik'
                                } else if (subbagren[7] > subbagren[8]) {
                                    persentasesubbagren = 'Turun'
                                } else {
                                    persentasesubbagren = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                subbagrensebelumnya = subbagren[8];
                                if (subbagren[8] < subbagren[9]) {
                                    persentasesubbagren = 'Naik'
                                } else if (subbagren[8] > subbagren[9]) {
                                    persentasesubbagren = 'Turun'
                                } else {
                                    persentasesubbagren = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                subbagrensebelumnya = subbagren[9];
                                if (subbagren[9] < subbagren[10]) {
                                    persentasesubbagren = 'Naik'
                                } else if (subbagren[9] > subbagren[10]) {
                                    persentasesubbagren = 'Turun'
                                } else {
                                    persentasesubbagren = `Sama`
                                }

                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                subbagrensebelumnya = subbagren[10];
                                if (subbagren[10] < subbagren[11]) {
                                    persentasesubbagren = 'Naik'
                                } else if (subbagren[10] > subbagren[11]) {
                                    persentasesubbagren = 'Turun'
                                } else {
                                    persentasesubbagren = 'Sama'
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
                                                            <span class="fw-bold">Total subbagren</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbagrensebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total subbagren</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagren[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesubbagren}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total subbagren</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagren[dataPointIndex]}</span><br>
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

                var bagrenminsubbagrenmonth = new ApexCharts(document.querySelector("#chart"), bagrenminsubbagrenmonth);
                bagrenminsubbagrenmonth.render();


                var bagrenminsubbagsdmmonth = {
                    series: [{
                        name: 'subbagsdm',
                        type: 'line',
                        data: subbagsdm,
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
                                subbagsdmsebelumnya = subbagsdm[0];

                                if (subbagsdm[0] < subbagsdm[1]) {
                                    persentasesubbagsdm = 'Naik'
                                } else if (subbagsdm[0] > subbagsdm[1]) {
                                    persentasesubbagsdm = 'Turun'
                                } else {
                                    persentasesubbagsdm = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbagsdmsebelumnya = subbagsdm[1];
                                if (subbagsdm[1] < subbagsdm[2]) {
                                    persentasesubbagsdm = 'Naik'
                                } else if (subbagsdm[1] > subbagsdm[2]) {
                                    persentasesubbagsdm = 'Turun'
                                } else {
                                    persentasesubbagsdm = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                subbagsdmsebelumnya = subbagsdm[2];
                                if (subbagsdm[2] < subbagsdm[3]) {
                                    persentasesubbagsdm = 'Naik'
                                } else if (subbagsdm[2] > subbagsdm[3]) {
                                    persentasesubbagsdm = 'Turun'
                                } else {
                                    persentasesubbagsdm = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                subbagsdmsebelumnya = subbagsdm[3];
                                if (subbagsdm[3] < subbagsdm[4]) {
                                    persentasesubbagsdm = 'Naik'
                                } else if (subbagsdm[3] > subbagsdm[4]) {
                                    persentasesubbagsdm = 'Turun'
                                } else {
                                    persentasesubbagsdm = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                subbagsdmsebelumnya = subbagsdm[4];
                                if (subbagsdm[4] < subbagsdm[5]) {
                                    persentasesubbagsdm = 'Naik'
                                } else if (subbagsdm[4] > subbagsdm[5]) {
                                    persentasesubbagsdm = 'Turun'
                                } else {
                                    persentasesubbagsdm = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                subbagsdmsebelumnya = subbagsdm[5];
                                if (subbagsdm[5] < subbagsdm[6]) {
                                    persentasesubbagsdm = 'Naik'
                                } else if (subbagsdm[5] > subbagsdm[6]) {
                                    persentasesubbagsdm = 'Turun'
                                } else {
                                    persentasesubbagsdm = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                subbagsdmsebelumnya = subbagsdm[6];
                                if (subbagsdm[6] < subbagsdm[7]) {
                                    persentasesubbagsdm = 'Naik'
                                } else if (subbagsdm[6] > subbagsdm[7]) {
                                    persentasesubbagsdm = 'Turun'
                                } else {
                                    persentasesubbagsdm = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                subbagsdmsebelumnya = subbagsdm[7];
                                if (subbagsdm[7] < subbagsdm[8]) {
                                    persentasesubbagsdm = 'Naik'
                                } else if (subbagsdm[7] > subbagsdm[8]) {
                                    persentasesubbagsdm = 'Turun'
                                } else {
                                    persentasesubbagsdm = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                subbagsdmsebelumnya = subbagsdm[8];
                                if (subbagsdm[8] < subbagsdm[9]) {
                                    persentasesubbagsdm = 'Naik'
                                } else if (subbagsdm[8] > subbagsdm[9]) {
                                    persentasesubbagsdm = 'Turun'
                                } else {
                                    persentasesubbagsdm = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                subbagsdmsebelumnya = subbagsdm[9];
                                if (subbagsdm[9] < subbagsdm[10]) {
                                    persentasesubbagsdm = 'Naik'
                                } else if (subbagsdm[9] > subbagsdm[10]) {
                                    persentasesubbagsdm = 'Turun'
                                } else {
                                    persentasesubbagsdm = `Sama`
                                }

                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                subbagsdmsebelumnya = subbagsdm[10];
                                if (subbagsdm[10] < subbagsdm[11]) {
                                    persentasesubbagsdm = 'Naik'
                                } else if (subbagsdm[10] > subbagsdm[11]) {
                                    persentasesubbagsdm = 'Turun'
                                } else {
                                    persentasesubbagsdm = 'Sama'
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
                                                            <span class="fw-bold">Total subbagsdm</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbagsdmsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total subbagsdm</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagsdm[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesubbagsdm}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total subbagsdm</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagsdm[dataPointIndex]}</span><br>
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

                var bagrenminsubbagsdmmonth = new ApexCharts(document.querySelector("#chart2"), bagrenminsubbagsdmmonth);
                bagrenminsubbagsdmmonth.render();


                var bagrenminsubbagadamonth = {
                    series: [{
                        name: 'subbagada',
                        type: 'line',
                        data: subbagada,
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
                                subbagadasebelumnya = subbagada[0];

                                if (subbagada[0] < subbagada[1]) {
                                    persentasesubbagada = 'Naik'
                                } else if (subbagada[0] > subbagada[1]) {
                                    persentasesubbagada = 'Turun'
                                } else {
                                    persentasesubbagada = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbagadasebelumnya = subbagada[1];
                                if (subbagada[1] < subbagada[2]) {
                                    persentasesubbagada = 'Naik'
                                } else if (subbagada[1] > subbagada[2]) {
                                    persentasesubbagada = 'Turun'
                                } else {
                                    persentasesubbagada = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                subbagadasebelumnya = subbagada[2];
                                if (subbagada[2] < subbagada[3]) {
                                    persentasesubbagada = 'Naik'
                                } else if (subbagada[2] > subbagada[3]) {
                                    persentasesubbagada = 'Turun'
                                } else {
                                    persentasesubbagada = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                subbagadasebelumnya = subbagada[3];
                                if (subbagada[3] < subbagada[4]) {
                                    persentasesubbagada = 'Naik'
                                } else if (subbagada[3] > subbagada[4]) {
                                    persentasesubbagada = 'Turun'
                                } else {
                                    persentasesubbagada = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                subbagadasebelumnya = subbagada[4];
                                if (subbagada[4] < subbagada[5]) {
                                    persentasesubbagada = 'Naik'
                                } else if (subbagada[4] > subbagada[5]) {
                                    persentasesubbagada = 'Turun'
                                } else {
                                    persentasesubbagada = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                subbagadasebelumnya = subbagada[5];
                                if (subbagada[5] < subbagada[6]) {
                                    persentasesubbagada = 'Naik'
                                } else if (subbagada[5] > subbagada[6]) {
                                    persentasesubbagada = 'Turun'
                                } else {
                                    persentasesubbagada = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                subbagadasebelumnya = subbagada[6];
                                if (subbagada[6] < subbagada[7]) {
                                    persentasesubbagada = 'Naik'
                                } else if (subbagada[6] > subbagada[7]) {
                                    persentasesubbagada = 'Turun'
                                } else {
                                    persentasesubbagada = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                subbagadasebelumnya = subbagada[7];
                                if (subbagada[7] < subbagada[8]) {
                                    persentasesubbagada = 'Naik'
                                } else if (subbagada[7] > subbagada[8]) {
                                    persentasesubbagada = 'Turun'
                                } else {
                                    persentasesubbagada = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                subbagadasebelumnya = subbagada[8];
                                if (subbagada[8] < subbagada[9]) {
                                    persentasesubbagada = 'Naik'
                                } else if (subbagada[8] > subbagada[9]) {
                                    persentasesubbagada = 'Turun'
                                } else {
                                    persentasesubbagada = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                subbagadasebelumnya = subbagada[9];
                                if (subbagada[9] < subbagada[10]) {
                                    persentasesubbagada = 'Naik'
                                } else if (subbagada[9] > subbagada[10]) {
                                    persentasesubbagada = 'Turun'
                                } else {
                                    persentasesubbagada = `Sama`
                                }

                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                subbagadasebelumnya = subbagada[10];
                                if (subbagada[10] < subbagada[11]) {
                                    persentasesubbagada = 'Naik'
                                } else if (subbagada[10] > subbagada[11]) {
                                    persentasesubbagada = 'Turun'
                                } else {
                                    persentasesubbagada = 'Sama'
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
                                                            <span class="fw-bold">Total subbagada</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbagadasebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total subbagada</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagada[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesubbagada}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total subbagada</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagada[dataPointIndex]}</span><br>
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

                var bagrenminsubbagadamonth = new ApexCharts(document.querySelector("#chart3"), bagrenminsubbagadamonth);
                bagrenminsubbagadamonth.render();


                var bagrenminsubbaglogmonth = {
                    series: [{
                        name: 'subbaglog',
                        type: 'line',
                        data: subbaglog,
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
                                subbaglogsebelumnya = subbaglog[0];

                                if (subbaglog[0] < subbaglog[1]) {
                                    subbaglog = 'Naik'
                                } else if (subbaglog[0] > subbaglog[1]) {
                                    subbaglog = 'Turun'
                                } else {
                                    subbaglog = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbaglogsebelumnya = subbaglog[1];
                                if (subbaglog[1] < subbaglog[2]) {
                                    subbaglog = 'Naik'
                                } else if (subbaglog[1] > subbaglog[2]) {
                                    subbaglog = 'Turun'
                                } else {
                                    subbaglog = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                subbaglogsebelumnya = subbaglog[2];
                                if (subbaglog[2] < subbaglog[3]) {
                                    subbaglog = 'Naik'
                                } else if (subbaglog[2] > subbaglog[3]) {
                                    subbaglog = 'Turun'
                                } else {
                                    subbaglog = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                subbaglogsebelumnya = subbaglog[3];
                                if (subbaglog[3] < subbaglog[4]) {
                                    subbaglog = 'Naik'
                                } else if (subbaglog[3] > subbaglog[4]) {
                                    subbaglog = 'Turun'
                                } else {
                                    subbaglog = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                subbaglogsebelumnya = subbaglog[4];
                                if (subbaglog[4] < subbaglog[5]) {
                                    subbaglog = 'Naik'
                                } else if (subbaglog[4] > subbaglog[5]) {
                                    subbaglog = 'Turun'
                                } else {
                                    subbaglog = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                subbaglogsebelumnya = subbaglog[5];
                                if (subbaglog[5] < subbaglog[6]) {
                                    subbaglog = 'Naik'
                                } else if (subbaglog[5] > subbaglog[6]) {
                                    subbaglog = 'Turun'
                                } else {
                                    subbaglog = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                subbaglogsebelumnya = subbaglog[6];
                                if (subbaglog[6] < subbaglog[7]) {
                                    subbaglog = 'Naik'
                                } else if (subbaglog[6] > subbaglog[7]) {
                                    subbaglog = 'Turun'
                                } else {
                                    subbaglog = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                subbaglogsebelumnya = subbaglog[7];
                                if (subbaglog[7] < subbaglog[8]) {
                                    subbaglog = 'Naik'
                                } else if (subbaglog[7] > subbaglog[8]) {
                                    subbaglog = 'Turun'
                                } else {
                                    subbaglog = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                subbaglogsebelumnya = subbaglog[8];
                                if (subbaglog[8] < subbaglog[9]) {
                                    subbaglog = 'Naik'
                                } else if (subbaglog[8] > subbaglog[9]) {
                                    subbaglog = 'Turun'
                                } else {
                                    subbaglog = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                subbaglogsebelumnya = subbaglog[9];
                                if (subbaglog[9] < subbaglog[10]) {
                                    subbaglog = 'Naik'
                                } else if (subbaglog[9] > subbaglog[10]) {
                                    subbaglog = 'Turun'
                                } else {
                                    subbaglog = `Sama`
                                }

                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                subbaglogsebelumnya = subbaglog[10];
                                if (subbaglog[10] < subbaglog[11]) {
                                    subbaglog = 'Naik'
                                } else if (subbaglog[10] > subbaglog[11]) {
                                    subbaglog = 'Turun'
                                } else {
                                    subbaglog = 'Sama'
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
                                                            <span class="fw-bold">Total subbaglog</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbaglogsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total subbaglog</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbaglog[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${subbaglog}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total subbaglog</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbaglog[dataPointIndex]}</span><br>
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

                var bagrenminsubbaglogmonth = new ApexCharts(document.querySelector("#chart4"), bagrenminsubbaglogmonth);
                bagrenminsubbaglogmonth.render();
            }
        })
    }

    // Year
    function getBagrenminyear(three_yearAgo, lastDay) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>bagrenmin/getChartBagrenmin",
            data: {
                start_date: three_yearAgo,
                end_date: lastDay,
                filter: 'year'
            },
            dataType: "JSON",
            success: function(result) {
                let polda_month = result.data.polda_month
                let subbagren = result.data.subbagren
                let subbagsdm = result.data.subbagsdm
                let subbagada = result.data.subbagada
                let subbaglog = result.data.subbaglog
                $('#titlesubbagrenyear').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG REN TAHUNAN</h4>`);
                $('#titlesubbagsdmyear').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG SDM TAHUNAN</h4>`);
                $('#titlesubbagadayear').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG ADA TAHUNAN</h4>`);
                $('#titlesubbaglogyear').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG LOG TAHUNAN</h4>`);

                var bagrenminsubbagrenyear = {
                    series: [{
                        name: 'subbagren',
                        type: 'line',
                        data: subbagren,
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
                                subbagrensebelumnya = subbagren[0];

                                if (subbagren[0] < subbagren[1]) {
                                    persentasesubbagren = 'Naik'
                                } else if (subbagren[0] > subbagren[1]) {
                                    persentasesubbagren = 'Turun'
                                } else {
                                    persentasesubbagren = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbagrensebelumnya = subbagren[1];
                                if (subbagren[1] < subbagren[2]) {
                                    persentasesubbagren = 'Naik'
                                } else if (subbagren[1] > subbagren[2]) {
                                    persentasesubbagren = 'Turun'
                                } else {
                                    persentasesubbagren = 'Sama'
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
                                                            <span class="fw-bold">Total subbagren</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbagrensebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total subbagren</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagren[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesubbagren}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total subbagren</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagren[dataPointIndex]}</span><br>
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

                var bagrenminsubbagrenyear = new ApexCharts(document.querySelector("#chartyear"), bagrenminsubbagrenyear);
                bagrenminsubbagrenyear.render();


                var bagrenminsubbagsdmyear = {
                    series: [{
                        name: 'subbagsdm',
                        type: 'line',
                        data: subbagsdm,
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
                                subbagsdmsebelumnya = subbagsdm[0];

                                if (subbagsdm[0] < subbagsdm[1]) {
                                    persentasesubbagsdm = 'Naik'
                                } else if (subbagsdm[0] > subbagsdm[1]) {
                                    persentasesubbagsdm = 'Turun'
                                } else {
                                    persentasesubbagsdm = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbagsdmsebelumnya = subbagsdm[1];
                                if (subbagsdm[1] < subbagsdm[2]) {
                                    persentasesubbagsdm = 'Naik'
                                } else if (subbagsdm[1] > subbagsdm[2]) {
                                    persentasesubbagsdm = 'Turun'
                                } else {
                                    persentasesubbagsdm = 'Sama'
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
                                                            <span class="fw-bold">Total subbagsdm</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbagsdmsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total subbagsdm</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagsdm[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesubbagsdm}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total subbagsdm</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagsdm[dataPointIndex]}</span><br>
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

                var bagrenminsubbagsdmyear = new ApexCharts(document.querySelector("#chartyear2"), bagrenminsubbagsdmyear);
                bagrenminsubbagsdmyear.render();


                var bagrenminsubbagadayear = {
                    series: [{
                        name: 'subbagada',
                        type: 'line',
                        data: subbagada,
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
                                subbagadasebelumnya = subbagada[0];

                                if (subbagada[0] < subbagada[1]) {
                                    persentasesubbagada = 'Naik'
                                } else if (subbagada[0] > subbagada[1]) {
                                    persentasesubbagada = 'Turun'
                                } else {
                                    persentasesubbagada = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbagadasebelumnya = subbagada[1];
                                if (subbagada[1] < subbagada[2]) {
                                    persentasesubbagada = 'Naik'
                                } else if (subbagada[1] > subbagada[2]) {
                                    persentasesubbagada = 'Turun'
                                } else {
                                    persentasesubbagada = 'Sama'
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
                                                            <span class="fw-bold">Total subbagada</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbagadasebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total subbagada</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagada[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesubbagada}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total subbagada</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagada[dataPointIndex]}</span><br>
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

                var bagrenminsubbagadayear = new ApexCharts(document.querySelector("#chartyear3"), bagrenminsubbagadayear);
                bagrenminsubbagadayear.render();


                var bagrenminsubbaglogyear = {
                    series: [{
                        name: 'subbaglog',
                        type: 'line',
                        data: subbaglog,
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
                                subbaglogsebelumnya = subbaglog[0];

                                if (subbaglog[0] < subbaglog[1]) {
                                    subbaglog = 'Naik'
                                } else if (subbaglog[0] > subbaglog[1]) {
                                    subbaglog = 'Turun'
                                } else {
                                    subbaglog = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbaglogsebelumnya = subbaglog[1];
                                if (subbaglog[1] < subbaglog[2]) {
                                    subbaglog = 'Naik'
                                } else if (subbaglog[1] > subbaglog[2]) {
                                    subbaglog = 'Turun'
                                } else {
                                    subbaglog = 'Sama'
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
                                                            <span class="fw-bold">Total subbaglog</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbaglogsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total subbaglog</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbaglog[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${subbaglog}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total subbaglog</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbaglog[dataPointIndex]}</span><br>
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

                var bagrenminsubbaglogyear = new ApexCharts(document.querySelector("#chartyear4"), bagrenminsubbaglogyear);
                bagrenminsubbaglogyear.render();
            }
        })
    }
</script>