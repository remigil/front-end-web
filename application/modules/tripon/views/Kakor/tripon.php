<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?> - Data Statistik Perjalanan Masyarakat Pengguna Jalan Secara Real Time Untuk Memantau Kondisi Lalu Lintas </a></li>
        <!-- <li class="breadcrumb-item"><a href="#"><?= $title; ?> </a></li> -->
    </ol>
</nav>
<!-- </div> -->
<div class="page">
    <div class="row">
        <div class="col-md-4">
            <div class="grid-example" style="background-color:transparent">
                <div class="cat">
                    <label>
                        <input checked type="radio" value="now" name="filter" id="nowDisplay"><span> Saat ini</span>
                    </label>
                </div>
                <div class="cat">
                    <label>
                        <input type="radio" value="today" name="filter" id="todayDisplay"><span> Hari ini</span>
                    </label>
                </div>
                <div class="cat">
                    <label>
                        <input type="radio" value="week" name="filter" id="weekDisplay"><span> Minggu ini</span>
                    </label>
                </div>
                <div class="cat">
                    <label>
                        <input type="radio" value="month" name="filter" id="monthDisplay"><span> Bulan ini</span>
                    </label>
                </div>
                <div class="cat">
                    <label>
                        <input type="radio" value="year" name="filter" id="yearDisplay"><span> Tahun ini</span>
                    </label>
                </div>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-transparent border-bottom text-uppercase m-3 p-0 pb-2">
                    <h5>TOP DATA PERJALANAN PER PROVINSI</h5>
                    <div class="row align-items-center">
                        <div class="col-md-2">
                            <select class="form-control" id="limit_showData">
                                <option value="3">3</option>
                                <option value="5" selected>5</option>
                                <option value="7">7</option>
                                <option value="10">10</option>
                            </select>

                        </div>
                        <div class="col-md-1">
                            <label for="staticEmail" class="form-label">Show Data</label>
                        </div>
                    </div>
                </div>
                <div class="card-body m-0 p-0">
                    <div class="main-chart">
                        <div id="chart4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-transparent border-bottom text-uppercase m-3 p-0 pb-2">
                    <h5>DATA TRIPON</h5>
                    <p class="fw-bold" style="text-transform:capitalize">Per Jenis Kendaraan</p>
                </div>
                <div class="card-body m-0 p-0">
                    <div class="main-chart">
                        <div id="chart3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card" style="display: none;">
        <div class="card-header bg-primary ">
            <h5 class="modal-title text-white">Filter</h5>
        </div>
        <div class="card-body">
            <form action="">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="material-textfield">
                            <input style="width: 100%;" name="" placeholder="" type="text">
                            <label class="labelmui">Kota Awal</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="material-textfield">
                            <input style="width: 100%;" name="" placeholder="" type="text">
                            <label class="labelmui">Kota Tujuan</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="material-btnfield">
                            <button type="button" class="btn btn-primary" style="width:100%;" onclick="BtnFilter()">Terapkan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="col-sm-12" id="FilterTripOn"></div>


    <div class="card">
        <div class="card-body">
            <table id="dataTable" class="table table-striped dt-responsive  nowrap w-100">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Tanggal Perjalanan</th>
                        <th>Waktu Perjalanan</th>
                        <th>Nama Pengemudi</th>
                        <th>Nomor Registrasi</th>
                        <th>Jumlah Penumpang</th>
                        <th>Jenis Kendaraan</th>
                        <th>Model Kendaraan</th>
                        <th>Lokasi Asal</th>
                        <th>Lokasi Tujuan</th>
                        <th>Informasi Lebih Lanjut</th>
                    </tr>
                </thead>

            </table>

        </div>
    </div>
</div>
<!-- End Page -->



<script>
    $(document).ready(function() {
        $('.dropify').dropify();

        userDataTable = $('#dataTable').DataTable({

            responsive: true,

            scrollX: true,

            // sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

            // buttons: ["excel", "csv", "pdf"],

            oLanguage: {

                sSearch: 'Search:'

            },

            initComplete: function(settings, json) {},

            retrieve: true,

            processing: true,

            serverSide: true,

            serverMethod: 'POST',

            ajax: {

                dataType: 'json',

                url: '<?php echo base_url(); ?>tripon/Tripon/serverSideTable',

                data: function(data) {

                    $("#overlay").fadeIn(300);

                    // console.log(data);

                    // data.filterTgl = $('[name=event_date]').val();

                    // data.filterTgl2 = $('[name=event_date_to]').val(); 

                    // data.filterStatus = $('[name=status]').val();

                    // data.filterName = $('[name=group_name]').val();

                    // data.filterPocName = $('[name=group_poc_name]').val();

                    // data.filterPhone = $('[name=poc_phone]').val();

                    // data.filterThreat = $('[name=threat_level]').val();

                    data.orderField = data.order[0] != undefined ? data.order[0].column : '';

                    data.orderValue = data.order[0] != undefined ? data.order[0].dir : '';

                    data.page = Number(data.start / data.length) + 1

                },

                beforeSend: function(xhr, settings) {

                },

                "dataSrc": function(result) {

                    result.iTotalRecords = result.iTotalRecords;

                    result.iTotalDisplayRecords = result.iTotalRecords;

                    return result.aaData;

                }

            },

            columns: [

                {
                    data: 'id',
                    "width": '2%'
                },
                {
                    data: 'date_departure',
                    "width": '2%'
                },
                {
                    data: 'time_departure',
                    "width": '2%'
                },
                {
                    data: 'person_name',
                    "width": '5%'
                },
                {
                    data: 'no_vehicle',
                    "width": '5%'
                },
                {
                    data: 'passanger',
                    "width": '2%'
                },
                {
                    data: 'type_vehicle',
                    "width": '5%'
                },
                {
                    data: 'brand_vehicle',
                    "width": '5%'
                },
                {
                    data: 'location_start',
                    "width": '5%'
                },
                {
                    data: 'location_end',
                    "width": '5%'
                },

                // {
                //     data: 'passenger'
                // },
                {
                    data: 'action',
                    orderable: false
                }

            ],

            order: [
                [0, "DESC"]
            ],

            drawCallback: function(settings) {

                $("#overlay").fadeOut(300);

            }


        });

        let filter = true;
        let time = true;
        let topTripon = true;
        let limit = $('#limit_showData').val()
        let start_time = moment().format('H:00:00');
        let end_time = moment().add(3, 'hours').format('H:00:00')
        let start_date = moment().format('YYYY-MM-DD');
        let end_date = moment().format('YYYY-MM-DD');


        getPieTripOn(filter, time, start_time, end_time, start_date, end_date);
        getChartProv(filter, time, start_time, end_time, start_date, end_date, limit);

    });


    $("[name=filter]").on("change", function(e) {

        var tanggal;
        var isitype = 'day';
        let filter = true;
        let time = true;

        const date = new Date();
        let limit = $('#limit_showData').val()


        let today = moment().format('YYYY-MM-DD');
        let start_time = moment().format('H:00:00');
        let end_time = moment().add(3, 'hours').format('H:00:00')

        let start_week = moment().clone().startOf('week').format('YYYY-MM-DD')
        let end_week = moment().clone().endOf('week').format('YYYY-MM-DD')


        let start_month = moment().startOf('month').format('YYYY-MM-DD')
        let end_month = moment().endOf('month').format('YYYY-MM-DD');

        let start_year = moment().startOf('year').format('YYYY-MM-DD')
        let end_year = moment().endOf('year').format('YYYY-MM-DD');

        if (this.value == 'now') {
            getChartProv(filter, time, start_time, end_time, today, today, limit);
            getPieTripOn(filter, time, start_time, end_time, today, today);
        } else if (this.value == 'today') {
            getChartProv(filter, time = false, start_time = null, end_time = null, today, today, limit);
            getPieTripOn(filter, time = false, start_time = null, end_time = null, today, today);
        } else if (this.value == 'week') {
            getChartProv(filter, time = false, start_time = null, end_time = null, start_week, end_week, limit);
            getPieTripOn(filter, time = false, start_time = null, end_time = null, start_week, end_week);
        } else if (this.value == 'month') {
            getChartProv(filter, time = false, start_time = null, end_time = null, start_month, end_month, limit);
            getPieTripOn(filter, time = false, start_time = null, end_time = null, start_month, end_month);
        } else if (this.value == 'year') {
            getPieTripOn(filter, time = false, start_time = null, end_time = null, start_year, end_year);
            getChartProv(filter, time = false, start_time = null, end_time = null, start_year, end_year, limit);
        }
        // //  console.log(tanggal);
        // // console.log(tanggal[0]);
        // getStatistik();
    });


    $('#limit_showData').on('change', function() {
        let filter = true;
        let time = true;
        var limit = $('#limit_showData').val();
        var type_filter = $("[name=filter]:checked").val();

        let today = moment().format('YYYY-MM-DD');
        let start_time = moment().format('H:00:00');
        let end_time = moment().add(3, 'hours').format('H:00:00')

        let start_week = moment().clone().startOf('week').format('YYYY-MM-DD')
        let end_week = moment().clone().endOf('week').format('YYYY-MM-DD')


        let start_month = moment().startOf('month').format('YYYY-MM-DD')
        let end_month = moment().endOf('month').format('YYYY-MM-DD');

        let start_year = moment().startOf('year').format('YYYY-MM-DD')
        let end_year = moment().endOf('year').format('YYYY-MM-DD');

        if (type_filter == 'now') {
            getChartProv(filter, time, start_time, end_time, today, today, limit);
            getPieTripOn(filter, time, start_time, end_time, today, today);
        } else if (type_filter == 'today') {
            getChartProv(filter, time = false, start_time = null, end_time = null, today, today, limit);
            getPieTripOn(filter, time = false, start_time = null, end_time = null, today, today);
        } else if (type_filter == 'week') {
            getChartProv(filter, time = false, start_time = null, end_time = null, start_week, end_week, limit);
            getPieTripOn(filter, time = false, start_time = null, end_time = null, start_week, end_week);
        } else if (type_filter == 'month') {
            getChartProv(filter, time = false, start_time = null, end_time = null, start_month, end_month, limit);
            getPieTripOn(filter, time = false, start_time = null, end_time = null, start_month, end_month);
        } else if (type_filter == 'year') {
            getChartProv(filter, time = false, start_time = null, end_time = null, start_year, end_year, limit);
            getPieTripOn(filter, time = false, start_time = null, end_time = null, start_year, end_year);
        }

        console.log(type_filter)

    })


    function getChartProv(filter = null, time = null, start_time = null, end_time = null, start_date = null, end_date = null, limit = null) {
        $.ajax({
            url: "<?= base_url() ?>tripon/tripon_prov",
            type: 'POST',
            data: {
                limit,
                filter,
                time,
                start_date,
                end_date,
                start_time,
                end_time
            },
            dataType: "JSON",
            success: function(results) {
                $("#chart4").html(`<div id="chartprov"></div>`);
                var keberangkatan = {
                    series: [{
                        name: 'Keberangkatan',
                        type: 'column',
                        data: results.keberangkatan,
                        color: "#003A91",
                    }, {
                        name: 'Kedatangan',
                        data: results.kedatangan,
                        type: "column",
                        color: "#CB2D3E",
                    }],
                    chart: {
                        type: 'line',
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
                            columnWidth: '55%',
                            endingShape: 'circle',
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
                        width: 2,
                        colors: ['transparent']
                    },
                    xaxis: {
                        categories: results.provinsi,
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

                    fill: {
                        opacity: 1
                    },

                };

                var keberangkatan2 = new ApexCharts(document.querySelector("#chartprov"), keberangkatan);
                keberangkatan2.render();
            }
        })
    }

    function getPieTripOn(filter = null, time = null, start_time = null, end_time = null, start_date = null, end_date = null) {
        $.ajax({
            url: "<?= base_url() ?>tripon/getTipe_Kendaraan",
            type: 'POST',
            data: {
                filter,
                time,
                start_date,
                end_date,
                start_time,
                end_time
            },
            dataType: "JSON",
            success: function(results) {
                $("#chart3").html(`<div id="chartkendaraan"></div>`);
                var options_tripon_kendaraan = {
                    series: results.jumlah,
                    chart: {
                        height: 380,
                        type: 'pie',
                    },
                    labels: results.type,
                    responsive: [{
                        breakpoint: 480,
                        options: {
                            chart: {
                                width: 200
                            },
                            legend: {
                                position: 'bottom'
                            }
                        }
                    }]
                };

                var tripon_kendaraan = new ApexCharts(document.querySelector("#chartkendaraan"), options_tripon_kendaraan);
                tripon_kendaraan.render();
            }
        })
    }
</script>