<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <a href="<?= base_url('executive/Polda_executive/statistik_polda/' . $data['id']) ?>" style="color:#0a0a0a ;" class="fs-6"><i class="fas fa-less-than"></i> Kembali</a>
        </div>
        <div class="col-md-6 text-end align-self-center">
            <a href="<?= ENV_API_BASE_URL ?>v1/laporan_harian/bpkb" type="button" button class="btn btn-outline-primary btn-lg" style="width: 200px; border-color:#0007D8;">Export Laporan</a>
            <!-- <a href="http://34.143.227.90:3001/v1/laporan_harian/export_laphar" type="button" button class="btn btn-outline-primary btn-lg" style="width: 200px; border-color:#0007D8;">Export Laporan</a> -->
        </div>
    </div>
    <div class="card mt-5 shadow" style="border-radius:36px !important;">
        <div class="row m-2">
            <div class="col-sm-2 col-md-2 align-self-center">
                <h4>STATISTIK DATA</h4>
                <h4> <span style="text-transform:uppercase ; color:#0007D8">BPKB</span> </h4>
                <h4 class="text-uppercase">Polda&nbsp;<?= $data['poldaid']['name_polda']; ?></h4>
            </div>
            <div class="col-sm-10 col-md-10">
                <div class="row m-2">
                    <div class="col-md-4 col-sm-4 col-xl-4 align-self-center">
                        <div class="card mt-2 mb-2" style="border-radius: 20px !important; border-color:#D9D9D9">
                            <div class="card-body">
                                <div class="row justify-content-between align-items-center" style="height: 80px;">
                                    <div class="col-md-7">
                                        <h5 class="mb-0 ms-3">Hari Ini</h5>
                                    </div>
                                    <div class="col-md-5 float-end">
                                        <h1 class="text-center mb-0" style="color:#464646; font-size:20px; color:#2e93e6;" id="bpkbThisDay"></h1>
                                        <p class="text-center mb-0">BPKB</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xl-4 align-self-center">
                        <div class="card mt-2 mb-2" style="border-radius: 20px !important; border-color:#D9D9D9">
                            <div class="card-body">
                                <div class="row justify-content-between align-items-center" style="height: 80px;">
                                    <div class="col-md-7">
                                        <!-- <h5 class="mb-0 ms-3">Bulan Ini (<?= format_indo(date('m'))  ?>) </h5> -->
                                        <!-- <h5 class="mb-0 ms-3">Bulan Ini <span class="text-danger">(Des)</span></h5> -->
                                        <h5 class="mb-0 ms-3">Bulan Ini <span class="text-danger">(<?= date('M'); ?>)</span></h5>
                                    </div>
                                    <div class="col-md-5 float-end">
                                        <h1 class="text-center mb-0" style="color:#464646; font-size:20px; color:#2e93e6;" id="bpkbThisMonth"></h1>
                                        <p class="text-center mb-0">BPKB</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xl-4 align-self-center">
                        <div class="card mt-2 mb-2" style="border-radius: 20px !important; border-color:#D9D9D9">
                            <div class="card-body">
                                <div class="row justify-content-between align-items-center" style="height: 80px;">
                                    <div class="col-md-7">
                                        <h5 class="mb-0 ms-3">Tahun Ini</h5>
                                    </div>
                                    <div class="col-md-5 float-end">
                                        <h1 class="text-center mb-0" style="color:#464646; font-size:20px; color:#2e93e6;" id="bpkbThisYear"></h1>
                                        <p class="text-center mb-0">BPKB</p>
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

    <div class="card">
        <div class="row">
            <hr style="width:97%; margin: auto">
            <div class="filter mt-4" style=" height:125px;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-9">
                            <label for="waktu" class="form-label text-uppercase text-info">Pilih Periode Waktu</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="waktu" class="form-label text-uppercase">Awal</label>
                                </div>
                                <div class="col-md-4">
                                    <label for="waktu" class="form-label text-uppercase">Akhir</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <input class="form-control form-control-lg" type="date" name="start_date" id="start_date" value="<?= date('Y-m-d', strtotime("-6 days")); ?>">
                                </div>
                                <div class="col-md-4">
                                    <input class="form-control form-control-lg" type="date" name="end_date" id="end_date" value="<?= date('Y-m-d'); ?>">
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-primary float-end btn-lg" style="width: 100%;" onclick="ButtonFilter()">Tampilkan</button>
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

    </div>

</div>
<script src="<?php echo base_url(); ?>assets/admin/libs/sweetalert2/sweetalert2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        let filter = 0
        let id = '<?= $data['poldaid']['id'] ?>'

        var date = new Date();
        var firstDay = new Date(date.getFullYear(), 0).toLocaleDateString("en-GB").split('/').reverse().join('-');
        var lastDay = new Date(date.getFullYear(), 11, 31).toLocaleDateString("en-GB").split('/').reverse().join('-');
        var yesterday = new Date().toLocaleDateString('en-GB').split('/').reverse().join('-')

        var firstDayMonth = new Date(date.getFullYear(), date.getMonth(), 1).toLocaleDateString("en-GB").split('/').reverse().join('-');
        var lastDayMonth = new Date(date.getFullYear(), date.getMonth() + 1, 0).toLocaleDateString("en-GB").split('/').reverse().join('-');

        date.setDate(date.getDate() - 6);
        var seven_daysAgo = date.toLocaleDateString("en-GB").split('/').reverse().join('-');


        bpkb_daily(yesterday, firstDayMonth, lastDayMonth, firstDay, lastDay, id)
        BpkblineChart(seven_daysAgo, yesterday, id)
        jam();
    })










    function ButtonFilter() {
        let filter = 1;
        let id = '<?= $data['poldaid']['id'] ?>'

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
            $("#chart").remove();


            BpkblineChart(start_date, end_date, id)
        }
    }


    function BpkblineChart(seven_daysAgo, yesterday, id) {
        $("#overlay").fadeIn(300);

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/statistik_polda_executive/getLineBpkb/" + id,
            data: {
                start_date: seven_daysAgo,
                end_date: yesterday
            },
            dataType: "JSON",
            success: function(result) {
                $("#overlay").fadeOut(300);

                $('#titleline').html(`<h4 class="card-title mb-0 text-uppercase">${result.title}</h1>`);
                $("#chartdate").html(`<div id="chart2"></div>`);

                if (seven_daysAgo == yesterday) {
                    var chart2 = {
                        series: [{
                                name: '<h6>BBN 1</h6>',
                                type: 'column',
                                data: result.data.polda_bbn_1,
                            }, {
                                name: '<h6>BBN 2</h6>',
                                type: 'column',
                                data: result.data.polda_bbn_2,
                            }, {
                                name: '<h6>Mutasi Masuk</h6>',
                                type: 'column',
                                data: result.data.polda_mutasi_masuk,
                            },
                            {
                                name: '<h6>Mutasi Keluar</h6>',
                                type: 'column',
                                data: result.data.polda_mutasi_keluar,
                            },
                            {
                                name: '<h6>Perubahan dan Pergantian</h6>',
                                type: 'column',
                                data: result.data.polda_perubahan_pergantian,
                            },
                        ],
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

                        xaxis: {
                            categories: result.data.polda_name,
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
                } else {
                    var chart2 = {
                        series: [{
                                name: '<h6>BBN 1</h6>',
                                type: 'line',
                                data: result.data.polda_bbn_1,
                                color: "#11347A"
                            }, {
                                name: '<h6>BBN 2</h6>',
                                type: 'line',
                                data: result.data.polda_bbn_2,
                                color: "#3CA55C"
                            }, {
                                name: '<h6>Mutasi Masuk</h6>',
                                type: 'line',
                                data: result.data.polda_mutasi_masuk,
                                color: "#E8D42F"
                            },
                            {
                                name: '<h6>Mutasi Keluar</h6>',
                                type: 'line',
                                data: result.data.polda_mutasi_keluar,
                                color: "#a85e32"
                            },
                            {
                                name: '<h6>Perubahan dan Pergantian</h6>',
                                type: 'line',
                                data: result.data.polda_perubahan_pergantian,
                                color: "#a83281"
                            },
                        ],
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

                        xaxis: {
                            categories: result.data.polda_name,
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
                }


                var ditgakkum = new ApexCharts(document.querySelector("#chart2"), chart2);
                ditgakkum.render();
            }
        })
    }

    function bpkb_daily(yesterday, firstDayMonth, lastDayMonth, firstDay, lastDay, id) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/statistik_polda_executive/getBpkbDate/" + id,
            dataType: "JSON",
            data: {
                yesterday,
                firstDayMonth,
                lastDayMonth,
                firstDay,
                lastDay
            },
            success: function(result) {
                $("#overlay").fadeOut(300);
                $('#bpkbThisDay').text(result.thisDay)
                $('#bpkbThisMonth').text(result.thisMonth)
                $('#bpkbThisYear').text(result.thisYear)

            }
        })
    }
</script>