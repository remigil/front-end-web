<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <a href="<?= base_url('statistik_nasional') ?>" style="color:#0a0a0a ;" class="fs-6"><i class="fas fa-less-than"></i> Kembali</a>
        </div>
        <div class="col-md-6 text-end align-self-center">
            <a href="<?= ENV_API_BASE_URL ?>v1/laporan_harian/troublespot" type="button" button class="btn btn-outline-primary btn-lg" style="width: 200px; border-color:#0007D8;">Export Laporan</a>
            <!-- <a href="http://34.143.227.90:3001/v1/laporan_harian/export_laphar" type="button" button class="btn btn-outline-primary btn-lg" style="width: 200px; border-color:#0007D8;">Export Laporan</a> -->
        </div>
    </div>
    <div class="card mt-5 p-1 shadow" style="border-radius:36px !important;">
        <div class="row m-2">
            <div class="col-sm-2 col-md-6 align-self-center">
                <h3>STATISTIK DATA <span style="text-transform:uppercase ; color:#0007D8">Troublespot</span> SELURUH INDONESIA</h3>
            </div>
            <div class="col-sm-8 col-md-6">
                <div class="row m-2">
                    <div class="col-md-6 col-sm-6 col-xl-6 align-self-center"></div>
                    <div class="col-md-6 col-sm-6 col-xl-6 align-self-center">
                        <div class="card p-1 mt-2 mb-2" style="border-radius: 20px !important; border-color:#D9D9D9">
                            <div class="card-body p-1">
                                <div class="row justify-content-between align-items-center" style="height: 80px;">

                                    <div class="col-md-12 float-end">
                                        <h1 class="text-center mb-0" style="color:#464646; font-size:25px; color:#2e93e6;" id="totaltroublespot"></h1>
                                        <p class="text-center mb-0">Troublespot</p>
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

    <div class="card" style="display: none;">
        <div class="row">
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
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <div id="title">TOP DATA TROUBLESPOT LALU LINTAS</div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Pilih Jumlah Polda</label>
                                    <select class="form-control form-select" id="limit_showData">
                                        <option value="3">3 Troublespot</option>
                                        <option value="5" selected>5 Troublespot</option>
                                        <option value="7">7 Troublespot</option>
                                        <option value="10">10 Troublespot</option>
                                        <option value="34">Keseluruhan Troublespot</option>
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
    </div>

    <div class="card">
        <div class="row mt-5">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center mb-4">
                    <h2>Rangking Troublespot</h2>
                </div>
            </div>
        </div>
        <div id="cardtroublespot"></div>
    </div>

</div>
<script src="<?php echo base_url(); ?>assets/admin/libs/sweetalert2/sweetalert2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


<script>
    $(document).ready(function() {
        var date = new Date();
        var filter = 0
        var firstDay = new Date(date.getFullYear(), 0).toLocaleDateString("en-GB").split('/').reverse().join('-');
        var lastDay = new Date(date.getFullYear(), 11, 31).toLocaleDateString("en-GB").split('/').reverse().join('-');
        var yesterday = new Date().toLocaleDateString('en-GB').split('/').reverse().join('-')

        var firstDayMonth = new Date(date.getFullYear(), date.getMonth(), 1).toLocaleDateString("en-GB").split('/').reverse().join('-');
        var lastDayMonth = new Date(date.getFullYear(), date.getMonth() + 1, 0).toLocaleDateString("en-GB").split('/').reverse().join('-');

        date.setDate(date.getDate() - 6);
        var seven_daysAgo = date.toLocaleDateString("en-GB").split('/').reverse().join('-');

        var limit = $('#limit_showData').val();

        getBarTroublespot(filter, limit, firstDay, lastDay)
        getLineTroublespot(filter = 1, firstDay, lastDay, 'year')
        getStatistikTroublespot(filter = 1, yesterday, firstDay, lastDay, firstDayMonth, lastDayMonth)
        TroublespotToday(yesterday, yesterday)
        TroublespotMonth(firstDayMonth, lastDayMonth)
        TroublespotYear(firstDay, lastDay)
        getCardTroublespot()

    })

    function getCardTroublespot() {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/statistik_executive/getCardTroublespot",

            dataType: "JSON",
            success: function(result) {
                var card = '';
                card += `<div class="d-flex justify-content-around mb-5">`
                for (let i = 0; i < result.length; i++) {
                    let x = parseInt(i)
                    card += `
                    <div class="col-md-2 col-sm-2 col-xs-2">
                        <div class="pri_table_list">
                            <h3 style="background-color:#083174; color:white">#${x+1} <br/> <span>Polda ${result[i].name_polda}</span></h3>
                            <ol>
                                <li class="check">
                                    <h3>${result[i].total}</h3>
                                    <h5 class="mt-3">Total Troublespot</h5>
                                </li>
                            </ol>
                        </div>
                    </div>`
                }
                card += `</div>`

                $('#cardtroublespot').html(card);

            }
        })
    }

    $('#limit_showData').on('change', function() {
        var limit = $('#limit_showData').val();
        var start_date = $('#start_date').val();
        var end_date = $('#end_date').val();

        if (start_date == '' && end_date == '') {
            getBarTroublespot(0, limit, 0, null, null)
        } else {
            getBarTroublespot(0, limit, 0, start_date, start_date)
        }

    })

    function ButtonFilterOnTable(type) {
        if (type === 'day') {
            var start_date = $('#start_date_table').val();
            var end_date = $('#end_date_table').val();
            $('#modalLabelDay').text(`Detail Troublespot Tanggal ${moment(start_date).format('DD MM YYYY')} s.d ${moment(end_date).format('DD MM YYYY')} Seluruh Polda`)
            TroublespotToday(start_date, end_date)
        } else if (type === 'month') {
            var start_date = moment($('#start_date_table_m').val()).startOf('month').format('YYYY-MM-DD');
            var end_date = moment($('#end_date_table_m').val()).endOf('month').format('YYYY-MM-DD')
            $('#modalLabelMonth').text(`Detail Troublespot Bulan ${moment(start_date).format('MM YYYY')} s.d ${moment(end_date).format('MM YYYY')} Seluruh Polda`)
            TroublespotMonth(start_date, end_date)
        } else if (type === 'year') {
            var start_date = moment($('#start_date_table_y').val()).startOf('year').format('YYYY-MM-DD');
            var end_date = moment($('#end_date_table_y').val()).endOf('year').format('YYYY-MM-DD')
            $('#modalLabelYear').text(`Detail Troublespot Tahun ${moment(start_date).format('YYYY')} s.d ${moment(end_date).format('YYYY')} Seluruh Polda`)
            TroublespotYear(start_date, end_date)
        }
    }


    function TroublespotToday(start_date, end_date) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/statistik_executive/troublespotToday",
            dataType: "JSON",
            data: {
                start_date,
                end_date
            },
            success: function(result) {
                console.log(result)
                var table = '';
                for (let i = 0; i < result.length; i++) {
                    let x = parseInt(i)
                    table += `<tr class="text-center"> 
                        <td>  ${i+1}  </td> 
                        <td>  ${result[i].no_ts}  </td> 
                        <td>  ${result[i].polda.name_polda}  </td> 
                        <td>  ${result[i].location}  </td> 
                        <td>  ${result[i].traffic_reason || ''}  </td> 
                        </tr>`
                }
                $('#tbody-lakaDay').html(table);
            }
        })
    }


    function TroublespotMonth(start_date, end_date) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/statistik_executive/troublespotMonth",
            dataType: "JSON",
            data: {
                start_date,
                end_date
            },
            success: function(result) {
                var table = '';
                console.log(result)
                for (let i = 0; i < result.length; i++) {
                    let x = parseInt(i)
                    table += `<tr class="text-center"> 
                        <td>  ${i+1}  </td> 
                        <td>  ${result[i].no_ts}  </td> 
                        <td>  ${result[i].polda.name_polda}  </td> 
                        <td>  ${result[i].location}  </td> 
                        <td>  ${result[i].traffic_reason || ''}  </td> 
                        </tr>`
                }
                $('#tbody-lakaMonth').html(table);
            }
        })
    }

    function TroublespotYear(start_date, end_date) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/statistik_executive/troublespotYear",
            dataType: "JSON",
            data: {
                start_date,
                end_date
            },
            success: function(result) {
                var table = '';
                console.log(result)
                for (let i = 0; i < result.length; i++) {
                    let x = parseInt(i)
                    table += `<tr class="text-center"> 
                        <td>  ${i+1}  </td> 
                        <td>  ${result[i].no_ts}  </td> 
                        <td>  ${result[i].polda.name_polda}  </td> 
                        <td>  ${result[i].location}  </td> 
                        <td>  ${result[i].traffic_reason || ''}  </td> 
                        </tr>`
                }
                $('#tbody-lakaYear').html(table);
            }
        })
    }

    function ButtonFilter() {
        let filter = 2
        let start_date = $('#start_date').val();
        let end_date = $('#end_date').val();
        let limit = $('#limit_showData').val();
        let type = 'day';

        if (start_date === '' || end_date === '') {
            Swal.fire({
                icon: 'error',
                title: 'Waktu mulai dan waktu akhir harus terisi!',
            })
        } else {
            getBarTroublespot(filter, limit, start_date, end_date)
            getLineTroublespot(filter, start_date, end_date, type)
        }


    }




    function getStatistikTroublespot(filter, yesterday, firstDay, lastDay, firstDayMonth, lastDayMonth) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/statistik_executive/getTroublespotStatistik",
            dataType: "JSON",
            data: {
                yesterday,
                firstDayMonth,
                lastDayMonth,
                firstDay,
                lastDay,
                filter
            },
            success: function(result) {
                console.log(result);
                $("#overlay").fadeOut(300);
                $('#jemenopsrekThisDay').text(result.today)
                $('#jemenopsrekThisMonth').text(result.month)
                $('#jemenopsrekThisYear').text(result.year)
                $('#totaltroublespot').text(result.total)


            }
        })
    }


    function getBarTroublespot(filter = null, limit = null, start_date = null, end_date = null) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/statistik_executive/getBarTroublespot",
            data: {
                filter: filter,
                limit: limit,
                start_date: start_date,
                end_date: end_date
            },
            dataType: "JSON",
            success: function(result) {
                $("#charta").html(`<div id="troublespotchart"></div>`);

                var options_troublespot = {
                    series: [{
                        name: 'Jumlah troublespot',
                        data: result.total,
                        color: "#003A91",
                    }],
                    chart: {
                        type: 'bar',
                        height: 380
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
                            endingShape: 'circle',
                            dataLabels: {
                                position: 'top'
                            }
                        },
                    },
                    dataLabels: {
                        enabled: true,
                        style: {
                            colors: ['#333'],
                            fontSize: '16px',
                        },
                        offsetY: -20
                    },
                    stroke: {
                        show: true,
                        width: 2,
                        colors: ['transparent']
                    },
                    xaxis: {
                        categories: result.name_polda,
                        labels: {
                            show: true,
                            rotate: -45,
                            rotateAlways: false,
                            hideOverlappingLabels: true,
                            showDuplicates: false,
                            trim: false,
                            minHeight: undefined,
                            maxHeight: 120,
                            style: {
                                // color: '#000000',
                                fontSize: '16px',
                                fontFamily: 'Helvetica, Arial, sans-serif',
                                fontWeight: 'bold',
                                cssClass: 'apexcharts-xaxis-label',
                            },
                        },
                    },

                    fill: {
                        opacity: 1
                    },

                };

                var troublespot = new ApexCharts(document.querySelector("#troublespotchart"), options_troublespot);
                troublespot.render();

            }
        })
    }

    function getLineTroublespot(filter = null, start_date = null, end_date = null, type = null) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/Statistik_executive/getLineTroublespot",
            data: {
                start_date: start_date,
                end_date: end_date,
                filter: filter,
                type: type
            },
            dataType: "JSON",
            success: function(results) {
                $('#titleline').html(`<h4 class="card-title mb-0 text-uppercase">${results.title}</h1>`);
                $("#chartdate").html(`<div id="chart2"></div>`);
                var chart2 = {
                    series: [{
                        name: '<h6>Total Troublespot</h6>',
                        type: 'line',
                        data: results.total,
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
                        categories: results.date,
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

                var walpjr = new ApexCharts(document.querySelector("#chart2"), chart2);
                walpjr.render();
            }
        })
    }
</script>
<!-- <script>
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
            url: "<?php echo base_url(); ?>executive/statistik_executive/getDetailStatistikWalpjr",
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
                let polda_jemenopsrek = result.data.polda_walpjr
                // Chart Wal pjr Lalu Lintas

                var chart = {
                    series: [{
                        name: '<h6>Total Jemenopsrek</h6>',
                        type: 'column',
                        data: polda_jemenopsrek,
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

        topJemenopsrekDay(yesterday);
        topJemenopsrekMonth(firstDayMonth, lastDayMonth);
        topJemenopsrekYear(firstDay, lastDay)

        jemenopsrek_daily(yesterday, firstDayMonth, lastDayMonth, firstDay, lastDay)

        JemenopsreklineChart(seven_daysAgo, yesterday)
        jam();
    })


    $('#limit_showData').on('change', function() {
        let filter = 0
        var limit = $('#limit_showData').val();
        var yesterday = new Date().toLocaleDateString('en-GB').split('/').reverse().join('-')
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/statistik_executive/getDetailStatistikWalpjr",
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
                let polda_jemenopsrek = result.data.walpjr

                var chart = {
                    series: [{
                        name: '<h6>Total Jemenopsrek</h6>',
                        type: 'column',
                        data: polda_jemenopsrek,
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


    function jemenopsrek_daily(yesterday, firstDayMonth, lastDayMonth, firstDay, lastDay) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/statistik_executive/getWalpjrDate",
            dataType: "JSON",
            data: {
                yesterday,
                firstDayMonth,
                lastDayMonth,
                firstDay,
                lastDay
            },
            success: function(result) {
                console.log(result);
                $("#overlay").fadeOut(300);
                $('#jemenopsrekThisDay').text(result.thisDay)
                $('#jemenopsrekThisMonth').text(result.thisMonth)
                $('#jemenopsrekThisYear').text(result.thisYear)

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
                url: "<?php echo base_url(); ?>executive/statistik_executive/getDetailStatistikWalpjr",
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
                    let polda_jemenopsrek = result.data.walpjr

                    var chart = {
                        series: [{
                            name: '<h6>Total Jemenopsrek</h6>',
                            type: 'column',
                            data: polda_jemenopsrek,
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

            JemenopsreklineChart(start_date, end_date)
        }
    }

    function JemenopsreklineChart(seven_daysAgo, yesterday) {

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/Statistik_executive/getLineWalpjr",
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
                        name: '<h6>Total Jemenopsrek</h6>',
                        type: 'line',
                        data: results.data.polda_walpjr,
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

                var walpjr = new ApexCharts(document.querySelector("#chart2"), chart2);
                walpjr.render();
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

    function topJemenopsrekDay(yesterday) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/statistik_executive/getTopWalpjr",
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
                    table += `<tr class="text-center"> 
                        <td>  ${no}  </td> 
                        <td>  ${result[i].name_polda}  </td>  
                        <td>  ${result[i].walpjr}  </td> 
                        </tr>`
                }
                $('#tbody-jemenopsrekDay').html(table);
                <?php $mobile = detect_mobile();
                if ($mobile === true) { ?>

                    $('#tableJemenopsrekDay').DataTable({
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

    function topJemenopsrekMonth(firstDayMonth, lastDayMonth) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/statistik_executive/getWalpjrMonth",
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
                    table += `<tr class="text-center"> 
                            <td>  ${no}  </td> 
                            <td>  ${result[i].name_polda}  </td>  
                            <td>  ${result[i].walpjr}  </td> 
                            </tr>`
                }
                $('#tbody-jemenopsrekMonth').html(table);
                <?php $mobile = detect_mobile();
                if ($mobile === true) { ?>

                    $('#tableJemenopsrekMonth').DataTable({
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

    function topJemenopsrekYear(firstDay, lastDay) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/statistik_executive/getWalpjrYear",
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
                    table += `<tr class="text-center"> 
                            <td>  ${no}  </td> 
                            <td>  ${result[i].name_polda}  </td>  
                            <td>  ${result[i].walpjr}  </td> 
                            </tr>`
                }
                $('#tbody-jemenopsrekYear').html(table);
                <?php $mobile = detect_mobile();
                if ($mobile === true) { ?>

                    $('#tableJemenopsrekYear').DataTable({
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
</script> -->