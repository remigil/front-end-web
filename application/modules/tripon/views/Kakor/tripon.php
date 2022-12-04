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
    <div class="card" style="display:none ;">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 ">
                    <label for="waktu" class="form-label"> Waktu</label>
                    <input class="form-control" type="date" name="waktu" id="waktu">
                </div>
                <div class="col-md-3 ">
                    <label class="form-label">Kendaraan</label>
                    <select name="type_vehicle" class="form-select" style="width:100%" id="type_name" required>
                        <option selected value="">Pilih Jenis Kendaraan</option>
                        <?php
                        foreach ($data['getVehicle'] as $row) : ?>
                            <option value="<?php echo $row['id']; ?>"><?php echo $row['type_name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-3 ">
                    <label class="form-label">Titik</label>
                    <select class="form-select">
                        <option>Titik Kemacetan</option>
                        <option>Large Kemacetan</option>
                        <option>Small Kemacetan</option>
                    </select>
                </div>
            </div>
            <div style="height: 450px;" class="mt-3" id="mapG20Dashboard"></div>
            <button class=" mt-3 btn btn-primary float-end"> Tampilkan </button>
        </div>
    </div>


    <div class="row">
        <div class="col-md-8">
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
                        <th>Nama Pengemudi</th>
                        <th>Nomor Registrasi</th>
                        <th>Jumlah Penumpang</th>
                        <th>Jenis Kendaraan</th>
                        <th>Model Kendaraan</th>
                        <th>Lokasi Asal</th>
                        <th>Lokasi Tujuan</th>

                        <!-- <th>Penumpang</th> -->
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
                    data: 'id'
                },
                {
                    data: 'person_name',
                },
                {
                    data: 'no_vehicle'
                },
                {
                    data: 'passanger'
                },
                {
                    data: 'type_vehicle'
                },
                {
                    data: 'brand_vehicle'
                },
                {
                    data: 'location_start'
                },
                {
                    data: 'location_end'
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
                [0, "ASC"]
            ],

            drawCallback: function(settings) {

                $("#overlay").fadeOut(300);

            }


        });


        let limit = $('#limit_showData').val()


        getPieTripOn();
        getChartProv(limit);

    });

    function getChartProv(limit) {
        $.ajax({
            url: "<?= base_url() ?>tripon/tripon_prov",
            type: 'POST',
            data: {
                limit
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

    function getPieTripOn() {
        $.ajax({
            url: "<?= base_url() ?>tripon/getTipe_Kendaraan",
            type: 'POST',
            dataType: "JSON",
            success: function(results) {
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

                var tripon_kendaraan = new ApexCharts(document.querySelector("#chart3"), options_tripon_kendaraan);
                tripon_kendaraan.render();
            }
        })
    }


    $('#limit_showData').on('change', function() {
        let filter = 0
        var limit = $('#limit_showData').val();
        $.ajax({
            url: "<?= base_url() ?>tripon/tripon_prov",
            type: 'POST',
            data: {
                limit
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

    })

    function BtnFilter() {
        $('#FilterTripOn').html(`<div class="card">
        <div class="card-body">
            <table class="table table-bordered text-center fw-bold">
                <thead class="table-primary">
                    <tr>
                        <th>Kota Awal</th>
                        <th>Kota Tujuan</th>
                        <th>Jumlah TripOn Terdaftar</th>
                        <th>Jumlah Penumpang Terdaftar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Bogor</td>
                        <td>Bandung</td>
                        <td>1230</td>
                        <td>123</td>
                    </tr>
                    <tr>
                        <td>Bandung</td>
                        <td>Bogor</td>
                        <td>123</td>
                        <td>1230</td>
                    </tr>
                    <tr>
                        <td colspan="2">Total</td>
                        <td>1353</td>
                        <td>1353</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
        `)
    }
</script>