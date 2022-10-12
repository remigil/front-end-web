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
                    <p class="text-end mx-4 text-dark fs-6 fw-light"><?= ucwords('last update ' . date('j F, Y'))  ?></p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="card-body blue-card">
                        <div class="row align-items-center text-center">
                            <div class="col-md-6">
                                <h4 class="text-light fw-light">Total laka</h4>
                            </div>
                            <div class="col-md-6">
                                <h1 class="text-center blue-card-text"><?= $data['jumlah'] ?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body red-card mt-2">
                        <div class="row align-items-center text-center">
                            <div class="col-md-6 rounded">
                                <h4 class="text-light d-inline fw-light">Meninggal Dunia</h4>
                            </div>
                            <div class="col-md-6">
                                <h1 class="red-card-text"><?= $data['meninggal_dunia'] ?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body green-card mt-2">
                        <div class="row align-items-center text-center">
                            <div class="col-md-6 text-wrap">
                                <h4 class="text-light fw-light">Luka Berat</h4>
                            </div>
                            <div class="col-md-6">
                                <h1 class="green-card-text text-center"><?= $data['luka_berat'] ?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body yellow-card mt-2">
                        <div class="row align-items-center text-center">
                            <div class="col-md-6 text-wrap">
                                <h4 class="text-light fw-light">Luka Ringan</h4>
                            </div>
                            <div class="col-md-6">
                                <h1 class="yellow-card-text text-center"><?= $data['luka_ringan'] ?></h1>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-8">
                    <div class="top-five-headline">
                        <h2 class="text-center">10 RANGKING LAKA LANTAS TERTINGGI</h2>
                    </div>
                    <div class="mt-5">
                        <table class="table table-bordered border-primary text-center" style="vertical-align:middle!important" width="100%">
                            <thead class="table-primary">
                                <tr class="text-white">
                                    <th scope="col">No</th>
                                    <th scope="col">Polda</th>
                                    <th scope="col">TOTAL LAKA</th>
                                    <th scope="col">KORBAN MD</th>
                                    <th scope="col">KORBAN LB</th>
                                    <th scope="col">KORBAN LR</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($data['topPolda'] as $key) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $key['name_polda'] ?></td>
                                        <td><?= $key['jumlah'] ?></td>
                                        <td><?= $key['meninggal_dunia'] ?></td>
                                        <td><?= $key['luka_berat'] ?></td>
                                        <td><?= $key['luka_ringan'] ?></td>
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
                    <h4 class="card-title mb-0">Data Kecelakaan Lalu Lintas Seluruh Indonesia</h4>
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
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Data Kerugian Material Seluruh Indonesia</h4>
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
                    <table id="tb_kecelakaan" class="table dt-responsive table-bordered nowrap w-100">
                        <thead class="table-primary text-center" style="vertical-align : middle;text-align:center;">
                            <tr>
                                <th>No</th>
                                <th>Polda</th>
                                <th>Jumlah Kecelakaan</th>
                                <th>MD</th>
                                <th>LB</th>
                                <th>LR</th>
                                <td>Kerugian Material</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($data['polda'] as $key) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $key['name_polda'] ?></td>
                                    <td><?= $key['jumlah'] ?></td>
                                    <td><?= $key['meninggal_dunia'] ?></td>
                                    <td><?= $key['luka_berat'] ?></td>
                                    <td><?= $key['luka_ringan'] ?></td>
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

<section>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Data Kecelakaan Lalu Lintas Seluruh Indonesia Tahun <b><?= date('Y') ?></b></h4>
                </div>
                <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                    <div class="main-chart">
                        <div id="chart3" style="width: 100vw"></div>
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
                    <h4 class="card-title mb-0">Data Kerugian Material <b><?= date('Y') ?></b></h4>
                </div>
                <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                    <div class="main-chart">
                        <div id="chart4" style="width: 100vw"></div>
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
                    <table id="tb_kecelakaan_tahun" class="table dt-responsive table-bordered nowrap w-100">
                        <thead class="table-primary text-center" style="vertical-align : middle;text-align:center;">
                            <tr>
                                <th>No</th>
                                <th>Bulan</th>
                                <th>Jumlah Kecelakaan</th>
                                <th>MD</th>
                                <th>LB</th>
                                <th>LR</th>
                                <td>Kerugian Material</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($data['poldaMonth'] as $key) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $key['date'] ?></td>
                                    <td><?= $key['jumlah'] ?></td>
                                    <td><?= $key['meninggal_dunia'] ?></td>
                                    <td><?= $key['luka_berat'] ?></td>
                                    <td><?= $key['luka_ringan'] ?></td>
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

        $('#tb_kecelakaan').DataTable()
        $("#tb_kecelakaan_tahun").DataTable()

        var poldaName = JSON.parse('<?= json_encode($data['poldaName']); ?>');
        var polda_meninggal_dunia = JSON.parse('<?= json_encode($data['polda_meninggal_dunia']); ?>');
        var polda_luka_berat = JSON.parse('<?= json_encode($data['polda_luka_berat']); ?>');
        var polda_luka_ringan = JSON.parse('<?= json_encode($data['polda_luka_ringan']); ?>');
        var polda_jumlah = JSON.parse('<?= json_encode($data['polda_jumlah']); ?>');


        var poldaMonth = JSON.parse('<?= json_encode($data['month']); ?>');
        var month_meninggal_dunia = JSON.parse('<?= json_encode($data['month_meninggal_dunia']); ?>');
        var month_luka_berat = JSON.parse('<?= json_encode($data['month_luka_berat']); ?>');
        var month_luka_ringan = JSON.parse('<?= json_encode($data['month_luka_ringan']); ?>');
        var month_jumlah = JSON.parse('<?= json_encode($data['month_jumlah']); ?>');
        // Data laka nasional
        var options_laka = {
            series: [{
                name: 'Jumlah',
                type: 'column',
                data: polda_jumlah,
                color: "#11347A"
            }, {
                name: 'Meninggal Dunia',
                type: 'column',
                data: polda_meninggal_dunia,
                color: "#CB2D3E"
            }, {
                name: 'Luka Berat',
                type: 'column',
                data: polda_luka_berat,
                color: "#E8D42F"
            }, {
                name: 'Luka Ringan',
                type: 'column',
                data: polda_luka_ringan,
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

        var dakgar_laka = new ApexCharts(document.querySelector("#chart"), options_laka);
        dakgar_laka.render();


        // Data Kerugian material
        var options_kerugian_material = {
            series: [{
                name: 'Kerugian Material',
                data: [25061, 2113, 7832, 8076, 1387, 2119, 106, 235, 1052, 1262, 7810],
                color: '#11347A'
            }, ],
            chart: {
                type: 'bar',
                height: 350
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
                offsetY: -25
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: ['METRO JAYA', 'JATENG', 'JATIM', 'JABAR', 'DIY', 'BANTEN', 'SUMBAR', 'JAMBI', 'RIAU', 'LAMPUNG', 'NTT'],
            },
            yaxis: {
                title: {
                    text: ''
                }
            },
            fill: {
                opacity: 1
            },
            legend: {
                show: true,
                showForSingleSeries: true,
                markers: {
                    fillColors: ['#11347A']
                }
            }
        };

        var kerugian_material = new ApexCharts(document.querySelector("#chart2"), options_kerugian_material);
        kerugian_material.render();


        // Data laka nasional tahun
        var options_laka_tahun = {
            series: [{
                name: 'Jumlah',
                type: 'column',
                data: month_jumlah,
                color: "#11347A"
            }, {
                name: 'Meninggal Dunia',
                type: 'column',
                data: month_meninggal_dunia,
                color: "#CB2D3E"
            }, {
                name: 'Luka Berat',
                type: 'column',
                data: month_luka_berat,
                color: "#E8D42F"
            }, {
                name: 'Luka Ringan',
                type: 'column',
                data: month_luka_ringan,
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

        var dakgar_laka_tahun = new ApexCharts(document.querySelector("#chart3"), options_laka_tahun);
        dakgar_laka_tahun.render();


        // Data Kerugian material
        var options_kerugian_material_tahun = {
            series: [{
                name: 'Kerugian Material',
                data: [25061, 2113, 7832, 8076, 1387, 2119, 106, 235, 1052, 1262, 7810],
                color: '#11347A'
            }, ],
            chart: {
                type: 'bar',
                height: 350
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
                offsetY: -25
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November'],
            },
            yaxis: {
                title: {
                    text: ''
                }
            },
            fill: {
                opacity: 1
            },
            legend: {
                show: true,
                showForSingleSeries: true,
                markers: {
                    fillColors: ['#11347A']
                }
            }
        };

        var kerugian_material_tahun = new ApexCharts(document.querySelector("#chart4"), options_kerugian_material_tahun);
        kerugian_material_tahun.render();


    })
</script>