<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <a href="<?= base_url('executive/Polda_executive/statistik_polda/' . $data['id']) ?>" style="color:#0a0a0a ;" class="fs-6"><i class="fas fa-less-than"></i> Kembali</a>
        </div>
        <div class="col-md-6 text-end align-self-center">
            <a href="<?= ENV_API_BASE_URL ?>v1/laporan_harian/ranmor" type="button" button class="btn btn-outline-primary btn-lg" style="width: 200px; border-color:#0007D8;">Export Laporan</a>
            <!-- <a href="http://34.143.227.90:3001/v1/laporan_harian/export_laphar" type="button" button class="btn btn-outline-primary btn-lg" style="width: 200px; border-color:#0007D8;">Export Laporan</a> -->
        </div>
    </div>
    <div class="card mt-5 shadow" style="border-radius:36px !important;">
        <div class="row m-2">
            <div class="col-sm-2 col-md-2 align-self-center">
                <h4>STATISTIK DATA</h4>
                <h4> <span style="text-transform:uppercase ; color:#0007D8">Ranmor</span> </h4>
                <h4 class="text-uppercase"><?= $data['poldaid']['name_polda']; ?></h4>

            </div>
            <div class="col-sm-10 col-md-10">
                <div class="row m-2">
                    <div class="col-md-4 col-sm-4 col-xl-4 align-self-center">
                        <div class="card mt-2 mb-2" style="border-radius: 20px !important; border-color:#D9D9D9">
                            <div class="card-body">
                                <div class="row justify-content-between align-items-center" style="height: 120px;">
                                    <div class="col-md-7">
                                        <h5 class="mb-0 ms-3">Hari Ini</h5>
                                    </div>
                                    <div class="col-md-5 float-end">
                                        <h1 class="text-center mb-0" style="color:#464646; font-size:20px; color:#0007D8;" id="ranmorThisDay"></h1>
                                        <p class="text-center mb-0">ranmor</p>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="d-flex justify-content-between">
                                            <div class="col-md-2 ms-n1">
                                                <span class="fw-bold" style="font-size:12px;">MP : <span class=" text-danger" style="padding:5px" id="ranmorThisDayMP"></span></span>
                                            </div>
                                            <div class="col-md-2 ms-n1">
                                                <span class="fw-bold" style="font-size:12px;">MS : <span class=" text-warning" style="padding:5px" id="ranmorThisDayMS"></span></span>
                                            </div>
                                            <div class="col-md-2 ms-n1">
                                                <span class="fw-bold" style="font-size:12px;">MB : <span class=" text-primary" style="padding:5px" id="ranmorThisDayMB"></span></span>
                                            </div>
                                            <div class="col-md-2 ms-n1">
                                                <span class="fw-bold" style="font-size:12px;">SM : <span class=" text-success" style="padding:5px" id="ranmorThisDaySM"></span></span>
                                            </div>
                                            <div class="col-md-2 ms-n1">
                                                <span class="fw-bold" style="font-size:12px;">RN : <span class=" text-success" style="padding:5px" id="ranmorThisDayRN"></span></span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xl-4 align-self-center">
                        <div class="card mt-2 mb-2" style="border-radius: 20px !important; border-color:#D9D9D9">
                            <div class="card-body">
                                <div class="row justify-content-between align-items-center" style="height: 120px;">
                                    <div class="col-md-7">
                                        <h5 class="mb-0 ms-3">Bulan Ini <span class="text-danger">(<?= date('M'); ?>)</span></h5>
                                    </div>
                                    <div class="col-md-5 float-end">
                                        <h1 class="text-center mb-0" style="color:#464646; font-size:20px; color:#0007D8;" id="ranmorThisMonth"></h1>
                                        <p class="text-center mb-0">ranmor</p>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="d-flex justify-content-between">
                                            <div class="col-md-2 ms-n1">
                                                <span class="fw-bold" style="font-size:12px;">MP : <span class=" text-danger" style="padding:5px" id="ranmorThisMonthMP"></span></span>
                                            </div>
                                            <div class="col-md-2 ms-n1">
                                                <span class="fw-bold" style="font-size:12px;">MS : <span class=" text-success" style="padding:5px" id="ranmorThisMonthMS"></span></span>
                                            </div>
                                            <div class="col-md-2 ms-n1">
                                                <span class="fw-bold" style="font-size:12px;">MB : <span class=" text-primary" style="padding:5px" id="ranmorThisMonthMB"></span></span>
                                            </div>
                                            <div class="col-md-2 ms-n1">
                                                <span class="fw-bold" style="font-size:12px;">SM : <span class=" text-success" style="padding:5px" id="ranmorThisMonthSM"></span></span>
                                            </div>
                                            <div class="col-md-2 ms-n1">
                                                <span class="fw-bold" style="font-size:12px;">RN : <span class=" text-success" style="padding:5px" id="ranmorThisMonthRN"></span></span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xl-4 align-self-center">
                        <div class="card mt-2 mb-2" style="border-radius: 20px !important; border-color:#D9D9D9">
                            <div class="card-body">
                                <div class="row justify-content-between align-items-center" style="height: 120px;">
                                    <div class="col-md-7">
                                        <h5 class="mb-0 ms-3">Tahun Ini</h5>
                                    </div>
                                    <div class="col-md-5 float-end">
                                        <h1 class="text-center mb-0" style="color:#464646; font-size:20px; color:#0007D8;" id="ranmorThisYear"></h1>
                                        <p class="text-center mb-0">ranmor</p>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="d-flex justify-content-between">
                                            <div class="col-md-2 ms-n1">
                                                <span class="fw-bold" style="font-size:12px;">MP : <span class=" text-danger" style="padding:5px" id="ranmorThisYearMP"></span></span>
                                            </div>
                                            <div class="col-md-2 ms-n1">
                                                <span class="fw-bold" style="font-size:12px;">MS : <span class=" text-success" style="padding:5px" id="ranmorThisYearMS"></span></span>
                                            </div>
                                            <div class="col-md-2 ms-n1">
                                                <span class="fw-bold" style="font-size:12px;">MB : <span class=" text-primary" style="padding:5px" id="ranmorThisYearMB"></span></span>
                                            </div>
                                            <div class="col-md-2 ms-n1">
                                                <span class="fw-bold" style="font-size:12px;">SM : <span class=" text-success" style="padding:5px" id="ranmorThisYearSM"></span></span>
                                            </div>
                                            <div class="col-md-2 ms-n1">
                                                <span class="fw-bold" style="font-size:12px;">RN : <span class=" text-success" style="padding:5px" id="ranmorThisYearRN"></span></span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <div class="d-flex justify-content-center">
                        <div class="col-md-1">
                            <div class="fw-bold text-white" style="height:25px; width:25px; line-height:25px; background-color:#FF0000; border-radius:50%; text-align:center; font-size:12px;">MP</div>
                        </div>
                        <div class="col-md-1 me-n4">
                            <span style="margin-left:-66px">Mobil Penumpang</span>
                        </div>
                        <div class="col-md-1">
                            <div class="fw-bold" style="height:25px; width:25px; line-height:25px; background-color:#FFFF00; border-radius:50%; text-align:center; font-size:12px;">MS</div>
                        </div>
                        <div class="col-md-1 me-n4">
                            <span style="margin-left:-66px">Mobil Bus</span>
                        </div>
                        <div class="col-md-1">
                            <div class="fw-bold text-white" style="height:25px; width:25px; line-height:25px; background-color:#0000FF; border-radius:50%; text-align:center; font-size:12px;">MB</div>
                        </div>
                        <div class="col-md-1 me-n4">
                            <span style="margin-left:-66px">Mobil Barang</span>
                        </div>
                        <div class="col-md-1">
                            <div class="fw-bold text-white" style="height:25px; width:25px; line-height:25px; background-color:#800080; border-radius:50%; text-align:center; font-size:12px;">SM</div>
                        </div>
                        <div class="col-md-1">
                            <span style="margin-left:-66px">Sepeda Motor</span>
                        </div>
                        <div class="col-md-1">
                            <div class="fw-bold" style="height:25px; width:25px; line-height:25px; background-color:#00FF00; border-radius:50%; text-align:center; font-size:12px;">RN</div>
                        </div>
                        <div class="col-md-1">
                            <span style="margin-left:-66px">Ransus</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- <div class="row m-3">
    <div class="col-xl-12">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
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
                <div class="row">
                    <div class="col-md-12 mt-3" style="line-height: 0.5;">
                        <h5 style="text-align:center">Data Ranmor Seluruh Polda</h5>
                        <center>

                        </center>
                        <span class="fw-bold" style="margin-left: 238px;">Sumber Data : ERI &nbsp; Last Update : <?= date('d M Y H:i:s', strtotime("-1 days")); ?></span><br>
                      
                    </div>

                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row">
                    <div class="col-md-12 mt-3" style="line-height: 0.5;">
                        <h5 style="text-align:center">Ranking Polda Data Ranmor Tertinggi <?= date('M Y'); ?></h5>
                        <center>

                        </center>
                        <span class="fw-bold" style="margin-left: 238px;">Sumber Data : ERI &nbsp; Last Update : <?= date('d M Y H:i:s', strtotime("-1 days")); ?></span><br>


                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="row">
                    <div class="col-md-12 mt-3" style="line-height: 0.5;">
                        <h5 style="text-align:center">Ranking Polda Data Ranmor Tertinggi <?= date('Y'); ?></h5>
                       <center>

                        </center>
                        <span class="fw-bold" style="margin-left: 238px;">Sumber Data : ERI &nbsp; Last Update : <?= date('d M Y H:i:s', strtotime("-1 days")); ?></span><br>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

    <?php $mobile = detect_mobile();
    if ($mobile === true) { ?>
        <div class="container-fluid">
            <div class="row mt-5 justify-content-center">
                <div class="col-md-9">
                    <label for="waktu" class="form-label text-uppercase">Pilih Waktu</label>
                </div>

                <div style="display: flex;">

                    <input class="form-control form-control-lg" type="date" name="start_date" id="start_date">
                    <input class="form-control form-control-lg" type="date" name="end_date" id="end_date">

                </div>
                <div>
                    <button type="button" class="btn btn-primary float-end btn-sm" style="width: 100%;" onclick="ButtonFilter()">Tampilkan</button>
                    <a href="http://34.143.227.90:3001/v1/laporan_harian/export_laphar" type="button" button class="btn btn-outline-primary float-end btn-sm mt-2" style="width: 100%; border-color:#0007D8;">Export Laporan</a>
                </div>
            </div>
        </div>
    <?php } ?>

    <div class="container-fluid">
        <div class="card">
            <div class="row">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script>
        $(".apexcharts-xaxistooltip").click(function() {
            var selectedpolda = $(this).text();
            // do something
        });
        $(document).ready(function() {

            let id = '<?= $data['poldaid']['id'] ?>'
            let filter = 0
            var date = new Date();
            var firstDay = new Date(date.getFullYear(), 0).toLocaleDateString("en-GB").split('/').reverse().join('-');
            var lastDay = new Date(date.getFullYear(), 11, 31).toLocaleDateString("en-GB").split('/').reverse().join('-');
            var yesterday = new Date().toLocaleDateString('en-GB').split('/').reverse().join('-')


            var firstDayMonth = new Date(date.getFullYear(), date.getMonth(), 1).toLocaleDateString("en-GB").split('/').reverse().join('-');
            var lastDayMonth = new Date(date.getFullYear(), date.getMonth() + 1, 0).toLocaleDateString("en-GB").split('/').reverse().join('-');


            date.setDate(date.getDate() - 6);
            var seven_daysAgo = date.toLocaleDateString("en-GB").split('/').reverse().join('-');



            ranmor_daily(yesterday, firstDayMonth, lastDayMonth, firstDay, lastDay, id)
            RanmorlineChart(seven_daysAgo, yesterday, id)

            jam()
        })

        function ButtonFilter() {
            let id = '<?= $data['poldaid']['id'] ?>'

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
                $("#chart").remove();

                RanmorlineChart(start_date, end_date, id)

            }
        }

        function ranmor_daily(yesterday, firstDayMonth, lastDayMonth, firstDay, lastDay, id) {
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>executive/statistik_polda_executive/getRanmorDate/" + id,
                dataType: "JSON",
                data: {
                    yesterday,
                    firstDayMonth,
                    lastDayMonth,
                    firstDay,
                    lastDay,
                    id
                },
                success: function(result) {
                    $("#overlay").fadeOut(300);
                    $('#ranmorThisDay').text(result.thisDay)
                    $('#ranmorThisDayMP').text(result.thisDayMP)
                    $('#ranmorThisDayMS').text(result.thisDayMS)
                    $('#ranmorThisDayMB').text(result.thisDayMB)
                    $('#ranmorThisDaySM').text(result.thisDaySM)
                    $('#ranmorThisDayRN').text(result.thisDayRN)
                    $('#ranmorThisMonth').text(result.thisMonth)
                    $('#ranmorThisMonthMP').text(result.thisMonthMP)
                    $('#ranmorThisMonthMS').text(result.thisMonthMS)
                    $('#ranmorThisMonthSM').text(result.thisMonthSM)
                    $('#ranmorThisMonthMB').text(result.thisMonthMB)
                    $('#ranmorThisMonthRN').text(result.thisMonthRN)
                    $('#ranmorThisYear').text(result.thisYear)
                    $('#ranmorThisYearMP').text(result.thisYearMP)
                    $('#ranmorThisYearMS').text(result.thisYearMS)
                    $('#ranmorThisYearMB').text(result.thisYearMB)
                    $('#ranmorThisYearSM').text(result.thisYearSM)
                    $('#ranmorThisYearRN').text(result.thisYearRN)
                }
            })
        }

        function RanmorlineChart(seven_daysAgo, yesterday, id) {
            $("#overlay").fadeIn(300);

            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>executive/statistik_polda_executive/getLineRanmor/" + id,
                data: {
                    start_date: seven_daysAgo,
                    end_date: yesterday,
                },
                dataType: "JSON",
                success: function(result) {
                    $("#overlay").fadeOut(300);

                    $('#titleline').html(`<h4 class="card-title mb-0 text-uppercase">${result.title}</h1>`);
                    $("#chartdate").html(`<div id="chart2"></div>`);

                    if (seven_daysAgo == yesterday) {
                        var chart2 = {
                            series: [{
                                    name: 'Mobil Penumpang',
                                    type: 'column',
                                    data: result.data.polda_mobil_penumpang,
                                    color: "#CB2D3E"
                                }, {
                                    name: 'Mobil Bus',
                                    type: 'column',
                                    data: result.data.polda_mobil_bus,
                                    color: "#E8D42F"
                                },
                                {
                                    name: 'Mobil Barang',
                                    type: 'column',
                                    data: result.data.polda_mobil_barang,
                                    color: "#11347A"
                                }, {
                                    name: 'Sepeda Motor',
                                    type: 'column',
                                    data: result.data.polda_sepeda_motor,
                                    color: "#800080"
                                }, {
                                    name: 'Ransus',
                                    type: 'column',
                                    data: result.data.polda_ransus,
                                    color: "#3CA55C"
                                }
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
                            // markers: {
                            //     size: 4,
                            //     colors: '#kkk',
                            //     fillOpacity: 0.9,
                            //     shape: "circle",
                            //     radius: 2,
                            // },
                            xaxis: {
                                categories: result.data.polda_name,
                                labels: {
                                    show: true,
                                    style: {
                                        colors: 'red',
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
                                name: 'Mobil Penumpang',
                                type: 'line',
                                data: result.data.polda_mobil_penumpang,
                                color: "#CB2D3E"
                            }, {
                                name: 'Mobil Bus',
                                type: 'line',
                                data: result.data.polda_mobil_bus,
                                color: "#E8D42F"
                            }, {
                                name: 'Mobil Barang',
                                type: 'line',
                                data: result.data.polda_mobil_barang,
                                color: "#11347A"
                            }, {
                                name: 'Sepeda Motor',
                                type: 'line',
                                data: result.data.polda_sepeda_motor,
                                color: "#800080"
                            }, {
                                name: 'Ransus',
                                type: 'line',
                                data: result.data.polda_ransus,
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
                            // markers: {
                            //     size: 4,
                            //     colors: '#kkk',
                            //     fillOpacity: 0.9,
                            //     shape: "circle",
                            //     radius: 2,
                            // },
                            xaxis: {
                                categories: result.data.polda_name,
                                labels: {
                                    show: true,
                                    style: {
                                        colors: 'red',
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

        function jam() {
            var a_p = "";
            var e = document.getElementById('jam'),
                d = new Date(),
                h, m, s;
            h = d.getHours();
            m = set(d.getMinutes());
            s = set(d.getSeconds());

            if (h < 12) {
                a_p = "AM";
            } else {
                a_p = "PM";
            }

            e.innerHTML = h + ':' + m + ':' + s + " " + a_p;

            setTimeout('jam()', 1000);
        }

        function set(e) {
            e = e < 10 ? '0' + e : e;
            return e;
        }
    </script>