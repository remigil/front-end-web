<section class="shadow-sm">
    <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/';">
        <ol class="breadcrumb fs-5">
            <li class="breadcrumb-item"><a href="#"><?= $data['menu'] ?></a></li>
            <li class="breadcrumb-item active fw-bold" aria-current="page"><?= $data['submenu'] ?></li>
        </ol>
    </nav>
</section>
<section class="shadow-sm">
    <div class="card rounded">
        <div class="card-header card-headline">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2 class="text-white"><?= strtoupper($data['headline'])  ?></h2>
                </div>
                <div class="col-md-6">
                    <p class="text-end mx-4 text-dark fs-6 fw-light"><?= ucwords('last update 13 Agustus 2022') ?></p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="card-body blue-card">
                        <div class="row align-items-center text-center">
                            <div class="col-md-6">
                                <h4 class="text-light fw-light">Mobil Penumpang</h4>
                            </div>
                            <div class="col-md-6">
                                <h1 class="text-center blue-card-text"><?= $data['mobil_penumpang'] ?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body red-card mt-2">
                        <div class="row align-items-center text-center">
                            <div class="col-md-6 rounded">
                                <h4 class="text-light d-inline fw-light">Mobil Barang</h4>
                            </div>
                            <div class="col-md-6">
                                <h1 class="red-card-text"><?= $data['mobil_barang'] ?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body green-card mt-2">
                        <div class="row align-items-center text-center">
                            <div class="col-md-6 text-wrap">
                                <h4 class="text-light fw-light">Mobil Bus</h4>
                            </div>
                            <div class="col-md-6">
                                <h1 class="green-card-text text-center"><?= $data['mobil_bus'] ?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body yellow-card mt-2">
                        <div class="row align-items-center text-center">
                            <div class="col-md-6 text-wrap">
                                <h4 class="text-light fw-light">Ransus</h4>
                            </div>
                            <div class="col-md-6">
                                <h1 class="yellow-card-text text-center"><?= $data['ransus'] ?></h1>
                            </div>
                        </div>
                    </div>

                    <div class="card-body orange-card mt-2">
                        <div class="row align-items-center text-center">
                            <div class="col-md-6 text-wrap">
                                <h4 class="text-light fw-light">Sepeda Motor</h4>
                            </div>
                            <div class="col-md-6">
                                <h1 class="orange-card-text text-center"><?= $data['sepeda_motor'] ?></h1>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-8">
                    <div class="top-five-headline">
                        <h2 class="text-center">10 RANGKING RANMOR TERTINGGI</h2>
                    </div>
                    <div class="mt-5">
                        <table class="table table-bordered border-primary text-center" style="vertical-align:middle!important" width="100%">
                            <thead class="table-primary">
                                <tr class="text-white">
                                    <th scope="col">No</th>
                                    <th scope="col">POLDA</th>
                                    <th scope="col">Mobil Penumpang</th>
                                    <th scope="col">Mobil Barang</th>
                                    <th scope="col">Mobil Bus</th>
                                    <th scope="col">Ransus</th>
                                    <th scope="col">Sepeda Motor</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1 ?>
                                <?php foreach ($data['topPolda'] as $key) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $key['name_polda'] ?></td>
                                        <td><?= $key['mobil_penumpang'] ?></td>
                                        <td><?= $key['mobil_barang'] ?></td>
                                        <td><?= $key['mobil_bus'] ?></td>
                                        <td><?= $key['ransus'] ?></td>
                                        <td><?= $key['sepeda_motor'] ?></td>
                                    </tr>
                                    <?php $i++ ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle text-start" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #ffffff;color:black; width:350px">
            Filter<i class="fas fa-filter" style="float: right;"></i>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <div class="row text-center m-3">
                <div class="col-md-6">
                    <h6>Wilayah</h6>
                    <div class="form-group">
                        <select class="form-select">
                            <option>Polda</option>
                            <option>Semua Polda</option>
                            <option>Aceh</option>
                            <option>Sumatera Utara</option>
                            <option>Sumatera Selatan</option>
                        </select>
                    </div>
                    <div class="form-group mt-1">
                        <select class="form-select">
                            <option>Polres</option>
                            <option>Semua Polres</option>
                            <option>Jakarta Pusat</option>
                            <option>Jakarta Utara</option>
                            <option>Jakata Barat</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <h6>Waktu</h6>
                    <div class="form-group">
                        <select class="form-select">
                            <option>Pilih Waktu</option>
                            <option>Tahun</option>
                            <option>Bulan</option>
                            <option>Customize</option>
                        </select>
                    </div>
                    <div class="form-group mt-1">
                        <input class="form-control" type="date" value="">
                    </div>
                    <div class="form-group mt-1">
                        <input class="form-control" type="date" value="">
                    </div>
                </div>
                <button class="btn btn-primary mt-2" type="button">Tampilkan</button>
            </div>
        </ul>
    </div>
</section>

<section class="shadow-sm mt-5">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Data Ranmor Indonesia</h4>
                </div>
                <div class="card-body" style="overflow:hidden; overflow-x:scroll;">
                    <div class="main-chart">
                        <div id="chart" style="width:350vw;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="shadow-sm mt-5">
    <div class="row">
        <div class="col-xl-12">
            <div class="card mt-3">
                <div class="card-body">
                    <table id="tb_bpkb" class="table dt-responsive table-bordered nowrap w-100">
                        <thead class="table-primary text-center" style="vertical-align : middle;text-align:center;">
                            <tr>
                                <th>No</th>
                                <th>POLDA</th>
                                <th>Mobil Penumpang</th>
                                <td>Mobil Barang</td>
                                <td>Mobil Bus</td>
                                <td>Ransus</td>
                                <td>Sepeda Motor</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($data['polda'] as $key) : ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $key['name_polda'] ?></td>
                                    <td><?= $key['mobil_penumpang'] ?></td>
                                    <td><?= $key['mobil_barang'] ?></td>
                                    <td><?= $key['mobil_bus'] ?></td>
                                    <td><?= $key['ransus'] ?></td>
                                    <td><?= $key['sepeda_motor'] ?></td>
                                    <?php $i++ ?>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
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
                    <h4 class="card-title mb-0">Data Ranmor 2021</h4>
                </div>
                <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                    <div class="main-chart">
                        <div id="chart1" style="width: 100vw"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="shadow-sm mt-5">
    <div class="row">
        <div class="col-xl-12">
            <div class="card mt-3">
                <div class="card-body">
                    <table id="tb_bpkb_tahun" class="table dt-responsive table-bordered nowrap w-100">
                        <thead class="table-primary text-center" style="vertical-align : middle;text-align:center;">
                            <tr>
                                <th>No</th>
                                <th>Bulan</th>
                                <th>Mobil Penumpang</th>
                                <th>Mobil Barang</th>
                                <th>Mobil Bus</th>
                                <th>Ransus</th>
                                <th>Sepeda Motor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1 ?>
                            <?php foreach ($data['poldaMonth'] as $key) : ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $key['date'] ?></td>
                                    <td><?= $key['mobil_penumpang'] ?></td>
                                    <td><?= $key['mobil_barang'] ?></td>
                                    <td><?= $key['mobil_bus'] ?></td>
                                    <td><?= $key['ransus'] ?></td>
                                    <td><?= $key['sepeda_motor'] ?></td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        $('#tb_bpkb').DataTable()
        $('#tb_bpkb_tahun').DataTable()

        var poldaName = JSON.parse('<?= json_encode($data['poldaName']); ?>');
        var polda_mobil_penumpang = JSON.parse('<?= json_encode($data['polda_mobil_penumpang']); ?>');
        var polda_mobil_barang = JSON.parse('<?= json_encode($data['polda_mobil_barang']); ?>');
        var polda_mobil_bus = JSON.parse('<?= json_encode($data['polda_mobil_bus']); ?>');
        var polda_ransus = JSON.parse('<?= json_encode($data['polda_ransus']); ?>');
        var polda_sepeda_motor = JSON.parse('<?= json_encode($data['polda_sepeda_motor']); ?>');



        var poldaMonth = JSON.parse('<?= json_encode($data['month']); ?>');
        var month_mobil_penumpang = JSON.parse('<?= json_encode($data['month_mobil_penumpang']); ?>');
        var month_mobil_barang = JSON.parse('<?= json_encode($data['month_mobil_barang']); ?>');
        var month_mobil_bus = JSON.parse('<?= json_encode($data['month_mobil_bus']); ?>');
        var month_ransus = JSON.parse('<?= json_encode($data['month_ransus']); ?>');
        var month_sepeda_motor = JSON.parse('<?= json_encode($data['month_sepeda_motor']); ?>');

        //    STNK
        var options_stnk = {
            series: [{
                    name: 'Mobil Penumpang',
                    type: 'column',
                    data: polda_mobil_penumpang,
                    color: "#003A91"
                }, {
                    name: 'Mobil Barang',
                    type: 'column',
                    data: polda_mobil_barang,
                    color: "#CB2D3E"
                },
                {
                    name: 'Mobil Bus',
                    type: 'column',
                    data: polda_mobil_bus,
                    color: "#E8D42F"
                }, {
                    name: 'Ransus',
                    type: 'column',
                    data: polda_ransus,
                    color: "#3CA55C"
                }, {
                    name: 'Sepeda Motor',
                    type: 'column',
                    data: polda_sepeda_motor,
                    color: "#11617A"
                },
            ],
            chart: {
                height: 350,
                type: 'line',
                stacked: false
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '40%',
                    dataLabels: {
                        position: 'top'
                    }
                },
            },

            stroke: {
                show: true,
                colors: ['transparent']
            },
            xaxis: {
                categories: poldaName
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
                tooltip: {
                    enable: false
                }
            }, ],
        };

        var stnk = new ApexCharts(document.querySelector("#chart"), options_stnk);
        stnk.render();

        // STNK TAHUN
        var options_stnk_tahun = {
            series: [{
                    name: 'Mobil Penumpang',
                    type: 'column',
                    data: month_mobil_penumpang,
                    color: "#003A91"
                }, {
                    name: 'Mobil Barang',
                    type: 'column',
                    data: month_mobil_barang,
                    color: "#CB2D3E"
                },
                {
                    name: 'Mobil Bus',
                    type: 'column',
                    data: month_mobil_bus,
                    color: "#E8D42F"
                }, {
                    name: 'Ransus',
                    type: 'column',
                    data: month_ransus,
                    color: "#3CA55C"
                }, {
                    name: 'Ransus',
                    type: 'column',
                    data: month_sepeda_motor,
                    color: "#11617A"
                },
            ],
            chart: {
                height: 350,
                type: 'line',
                stacked: false
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '40%',
                    dataLabels: {
                        position: 'top'
                    }
                },
            },

            stroke: {
                show: true,
                colors: ['transparent']
            },
            xaxis: {
                categories: poldaMonth
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
                tooltip: {
                    enable: false
                }
            }, ],
        };

        var stnk_tahun = new ApexCharts(document.querySelector("#chart1"), options_stnk_tahun);
        stnk_tahun.render();
    })
</script>