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
                <div class="col-md-8">
                    <h2 class="text-white"><?= strtoupper($data['headline'])  ?></h2>
                </div>
                <div class="col-md-4">
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
                                <h4 class="text-light fw-light">Jumlah Pelanggaran</h4>
                            </div>
                            <div class="col-md-6">
                                <h1 class="text-center blue-card-text"><?= $data['jumlah'] ?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body red-card mt-2">
                        <div class="row align-items-center text-center">
                            <div class="col-md-6 rounded">
                                <h4 class="text-light d-inline fw-light">Pelanggaran Berat</h4>
                            </div>
                            <div class="col-md-6">
                                <h1 class="red-card-text"><?= $data['pelanggaran_berat'] ?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body green-card mt-2">
                        <div class="row align-items-center text-center">
                            <div class="col-md-6 text-wrap">
                                <h4 class="text-light fw-light">Pelanggaran Sedang</h4>
                            </div>
                            <div class="col-md-6">
                                <h1 class="green-card-text text-center"><?= $data['pelanggaran_sedang'] ?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body yellow-card mt-2">
                        <div class="row align-items-center text-center">
                            <div class="col-md-6 text-wrap">
                                <h4 class="text-light fw-light">Pelanggaran Ringan</h4>
                            </div>
                            <div class="col-md-6">
                                <h1 class="yellow-card-text text-center"><?= $data['pelanggaran_ringan'] ?></h1>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-8">
                    <div class="top-five-headline">
                        <h2 class="text-center">10 RANGKING PELANGGARAN LALU LINTAS KONVENSIONAL TERTINGGI</h2>
                    </div>
                    <div class="mt-5">
                        <table class="table table-bordered border-primary text-center" style="vertical-align:middle!important" width="100%">
                            <thead class="table-primary">
                                <tr class="text-white">
                                    <th scope="col">No</th>
                                    <th scope="col">POLDA</th>
                                    <th scope="col">Jumlah Pelanggaran</th>
                                    <th scope="col">Pelanggaran Berat</th>
                                    <th scope="col">Pelanggaran Sedang</th>
                                    <th scope="col">Pelanggaran Ringan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($data['topPolda'] as $key) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $key['name_polda'] ?></td>
                                        <td><?= $key['jumlah'] ?></td>
                                        <td><?= $key['pelanggaran_berat'] ?></td>
                                        <td><?= $key['pelanggaran_sedang'] ?></td>
                                        <td><?= $key['pelanggaran_ringan'] ?></td>
                                    </tr>
                                    <?php $i++; ?>
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
                    <h4 class="card-title mb-0">DATA DAKGAR LANTAS - Nasional</h4>
                </div>
                <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                    <div class="main-chart">
                        <div id="chart" style="width: 350vw"></div>
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
                    <table id="tb_garlantas_konvensional" class="table dt-responsive table-bordered nowrap w-100">
                        <thead class="table-primary text-center" style="vertical-align : middle;text-align:center;">
                            <tr>
                                <th>No</th>
                                <th>Polda</th>
                                <th>Dakgar</th>
                                <th>Berat</th>
                                <th>Sedang</th>
                                <th>Ringan</th>
                                <td>Teguran</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($data['polda'] as $key) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $key['name_polda'] ?></td>
                                    <td>0</td>
                                    <td><?= $key['pelanggaran_berat'] ?></td>
                                    <td><?= $key['pelanggaran_sedang'] ?></td>
                                    <td><?= $key['pelanggaran_ringan'] ?></td>
                                    <td>0</td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach ?>
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
                    <h4 class="card-title mb-0">DATA DAKGAR LANTAS - Tahun 2021</h4>
                </div>
                <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                    <div class="main-chart">
                        <div id="chart2" style="width: 100vw"></div>
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
                    <table id="tb_garlantas_konvensional_tahun" class="table dt-responsive table-bordered nowrap w-100">
                        <thead class="table-primary text-center" style="vertical-align : middle;text-align:center;">
                            <tr>
                                <th>No</th>
                                <th>Bulan</th>
                                <th>Dakgar</th>
                                <th>Berat</th>
                                <th>Sedang</th>
                                <th>Ringan</th>
                                <td>Teguran</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($data['poldaMonth'] as $key) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $key['date'] ?></td>
                                    <td>0</td>
                                    <td><?= $key['pelanggaran_berat'] ?></td>
                                    <td><?= $key['pelanggaran_sedang'] ?></td>
                                    <td><?= $key['pelanggaran_ringan'] ?></td>
                                    <td>0</td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {

        $('#tb_garlantas_konvensional').DataTable()
        $('#tb_garlantas_konvensional_tahun').DataTable()



        var poldaName = JSON.parse('<?= json_encode($data['poldaName']); ?>');
        var polda_pelanggaran_berat = JSON.parse('<?= json_encode($data['polda_pelanggaran_berat']); ?>');
        var polda_pelanggaran_ringan = JSON.parse('<?= json_encode($data['polda_pelanggaran_ringan']); ?>');
        var polda_pelanggaran_sedang = JSON.parse('<?= json_encode($data['polda_pelanggaran_sedang']); ?>');
        var polda_jumlah = JSON.parse('<?= json_encode($data['polda_jumlah']); ?>');


        var poldaMonth = JSON.parse('<?= json_encode($data['month']); ?>');
        var month_pelanggaran_berat = JSON.parse('<?= json_encode($data['month_pelanggaran_berat']); ?>');
        var month_pelanggaran_ringan = JSON.parse('<?= json_encode($data['month_pelanggaran_ringan']); ?>');
        var month_pelanggaran_sedang = JSON.parse('<?= json_encode($data['month_pelanggaran_sedang']); ?>');
        var month_jumlah = JSON.parse('<?= json_encode($data['month_jumlah']); ?>');


        // Data dakgar Nasional
        var options_dakgar_nasional = {
            series: [{
                name: 'Jumlah',
                type: 'column',
                data: polda_jumlah,
                color: "#11347A"
            }, {
                name: 'Berat',
                type: 'column',
                data: polda_pelanggaran_berat,
                color: "#CB2D3E"
            }, {
                name: 'Sedang',
                type: 'column',
                data: polda_pelanggaran_sedang,
                color: "#E8D42F"
            }, {
                name: 'Ringan',
                type: 'column',
                data: polda_pelanggaran_ringan,
                color: "#3CA55C"
            }],
            chart: {
                height: 350,
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

            stroke: {
                show: true,
                width: [1, 1, 4, 4],
                colors: ['transparent']
            },
            xaxis: {
                categories: poldaName,
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

        var dakgar_nasional = new ApexCharts(document.querySelector("#chart"), options_dakgar_nasional);
        dakgar_nasional.render();


        var options_dakgar_nasional_tahun = {
            series: [{
                name: 'Jumlah',
                type: 'column',
                data: month_jumlah,
                color: "#11347A"
            }, {
                name: 'Berat',
                type: 'column',
                data: month_pelanggaran_berat,
                color: "#CB2D3E"
            }, {
                name: 'Sedang',
                type: 'column',
                data: month_pelanggaran_sedang,
                color: "#E8D42F"
            }, {
                name: 'Ringan',
                type: 'column',
                data: month_pelanggaran_ringan,
                color: "#3CA55C"
            }],
            chart: {
                height: 350,
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

            stroke: {
                show: true,
                width: [1, 1, 4, 4],
                colors: ['transparent']
            },
            xaxis: {
                categories: poldaMonth,
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

        var dakgar_nasional_tahun = new ApexCharts(document.querySelector("#chart2"), options_dakgar_nasional_tahun);
        dakgar_nasional_tahun.render();


    })
</script>