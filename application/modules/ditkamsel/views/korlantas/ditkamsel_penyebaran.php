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
                                <h4 class="text-light fw-light">Spanduk</h4>
                            </div>
                            <div class="col-md-6">
                                <h1 class="text-center blue-card-text"><?= $data['spanduk'] ?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body red-card mt-2">
                        <div class="row align-items-center text-center">
                            <div class="col-md-6 rounded">
                                <h4 class="text-light d-inline fw-light">Leafflet</h4>
                            </div>
                            <div class="col-md-6">
                                <h1 class="red-card-text"><?= $data['leaflet'] ?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body green-card mt-2">
                        <div class="row align-items-center text-center">
                            <div class="col-md-6 text-wrap">
                                <h4 class="text-light fw-light">Sticker</h4>
                            </div>
                            <div class="col-md-6">
                                <h1 class="green-card-text text-center"><?= $data['stiker'] ?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body yellow-card mt-2">
                        <div class="row align-items-center text-center">
                            <div class="col-md-6 text-wrap">
                                <h4 class="text-light fw-light">Bilboard</h4>
                            </div>
                            <div class="col-md-6">
                                <h1 class="yellow-card-text text-center"><?= $data['billboard'] ?></h1>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-8">
                    <div class="top-five-headline">
                        <h2 class="text-center">10 RANGKING PENYEBARAN DAN PEMASANGAN TERTINGGI</h2>
                    </div>
                    <div class="mt-5">
                        <table class="table table-bordered border-primary text-center" style="vertical-align:middle!important" width="100%">
                            <thead class="table-primary">
                                <tr class="text-white">
                                    <th scope="col">No</th>
                                    <th scope="col">POLDA</th>
                                    <th scope="col">Spanduk</th>
                                    <th scope="col">Leaflet</th>
                                    <th scope="col">Sticker</th>
                                    <th scope="col">Bilboard</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($data['topPolda'] as $key) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $key['name_polda'] ?></td>
                                        <td><?= $key['spanduk'] ?></td>
                                        <td><?= $key['leaflet'] ?></td>
                                        <td><?= $key['stiker'] ?></td>
                                        <td><?= $key['billboard'] ?></td>
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
                            <option>Metro Jaya</option>
                            <option>Jawa Barat</option>
                            <option>Jawa Tengah</option>
                            <option>Jawa Timur</option>
                            <option>Sumatra Barat</option>
                            <option>Sumatra Selatan</option>
                            <option>Kalimantan Utara</option>
                            <option>Kalimantan Tengah</option>
                            <option>Sulawesi barat</option>
                            <option>Bali</option>
                        </select>
                    </div>
                    <div class="form-group mt-1">
                        <select class="form-select">
                            <option>Polres</option>
                            <option>Semua Polres</option>
                            <option>POLRESTABES BANDUNG</option>
                            <option>POLRESTA BOGOR</option>
                            <option>POLRES BOGOR</option>
                            <option>POLRESTA SUKABUMI</option>
                            <option>POLRES SUKABUMI</option>
                            <option>POLRES CIANJUR</option>
                            <option>POLRES PURWAKARTAPURWAKARTA</option>
                            <option>POLRES KARAWANG</option>
                            <option>POLRES SUBANG</option>
                            <option>POLRES CIMAHI</option>
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
                    <h4 class="card-title mb-0">Data Penyebaran dan Pemasangan Seluruh Indonesia</h4>
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
                    <table id="tb_penyebaran" class="table dt-responsive table-bordered nowrap w-100">
                        <thead class="table-primary text-center" style="vertical-align : middle;text-align:center;">
                            <tr>
                                <th>No</th>
                                <th>Polda</th>
                                <th>Spanduk</th>
                                <th>Leaflet</th>
                                <th>Stiker</th>
                                <th>Bilboard</th>
                                <td>JEMENSOSPREK</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($data['polda'] as $key) : ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $key['name_polda'] ?></td>
                                    <td><?= $key['spanduk'] ?></td>
                                    <td><?= $key['leaflet'] ?></td>
                                    <td><?= $key['stiker'] ?></td>
                                    <td><?= $key['billboard'] ?></td>
                                    <td>0</td>
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

<section class="shadow-sm mt-5">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Data Penyebaran dan Pemasangan Tahun 2021</h4>
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
                    <table id="tb_penyebaran_tahun" class="table dt-responsive table-bordered nowrap w-100">
                        <thead class="table-primary text-center" style="vertical-align : middle;text-align:center;">
                            <tr>
                                <th>No</th>
                                <th>Bulan</th>
                                <th>Spanduk</th>
                                <th>Leaflet</th>
                                <th>Stiker</th>
                                <th>Bilboard</th>
                                <td>JEMENSOSPREK</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($data['poldaMonth'] as $key) : ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $key['date'] ?></td>
                                    <td><?= $key['spanduk'] ?></td>
                                    <td><?= $key['leaflet'] ?></td>
                                    <td><?= $key['stiker'] ?></td>
                                    <td><?= $key['billboard'] ?></td>
                                    <td>0</td>
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
        $('#tb_penyebaran').DataTable()
        $('#tb_penyebaran_tahun').DataTable()

        // Dikmas penyebaran

        var poldaName = JSON.parse('<?= json_encode($data['poldaName']); ?>');
        var polda_stiker = JSON.parse('<?= json_encode($data['polda_stiker']); ?>');
        var polda_spanduk = JSON.parse('<?= json_encode($data['polda_spanduk']); ?>');
        var polda_leaflet = JSON.parse('<?= json_encode($data['polda_leaflet']); ?>');
        var polda_billboard = JSON.parse('<?= json_encode($data['polda_billboard']); ?>');
        var polda_jemensosprek = JSON.parse('<?= json_encode($data['polda_jemensosprek']); ?>');



        var poldaMonth = JSON.parse('<?= json_encode($data['month']); ?>');
        var month_stiker = JSON.parse('<?= json_encode($data['month_stiker']); ?>');
        var month_spanduk = JSON.parse('<?= json_encode($data['month_spanduk']); ?>');
        var month_leaflet = JSON.parse('<?= json_encode($data['month_leaflet']); ?>');
        var month_billboard = JSON.parse('<?= json_encode($data['month_billboard']); ?>');
        var month_jemensosprek = JSON.parse('<?= json_encode($data['month_jemensosprek']); ?>');


        var options_penyebaran = {
            series: [{
                name: 'Spanduk',
                type: 'column',
                data: polda_spanduk,
                color: "#11347A"
            }, {
                name: 'Leaflet',
                type: 'column',
                data: polda_leaflet,
                color: "#CB2D3E"
            }, {
                name: 'Stiker',
                type: 'column',
                data: polda_stiker,
                color: "#E8D42F"
            }, {
                name: 'Billboard',
                type: 'column',
                data: polda_billboard,
                color: "#3CA55C"
            }, {
                name: 'JEMENSOSPREK',
                type: 'column',
                data: polda_jemensosprek,
                color: "#11617A"
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

        var penyebaran = new ApexCharts(document.querySelector("#chart"), options_penyebaran);
        penyebaran.render();

        // Dikmas penyebaran Tahun
        var options_penyebaran_tahun = {
            series: [{
                name: 'Spanduk',
                type: 'column',
                data: month_spanduk,
                color: "#11347A"
            }, {
                name: 'Leaflet',
                type: 'column',
                data: month_leaflet,
                color: "#CB2D3E"
            }, {
                name: 'Stiker',
                type: 'column',
                data: month_stiker,
                color: "#E8D42F"
            }, {
                name: 'Billboard',
                type: 'column',
                data: month_billboard,
                color: "#3CA55C"
            }, {
                name: 'JEMENSOSPREK',
                type: 'column',
                data: month_jemensosprek,
                color: "#69B8DB"
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

        var penyebaran_tahun = new ApexCharts(document.querySelector("#chart1"), options_penyebaran_tahun);
        penyebaran_tahun.render();
    })
</script>