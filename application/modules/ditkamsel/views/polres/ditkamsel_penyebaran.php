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
                <div class="col-md-3">
                    <div class="card-body blue-card mt-2">
                        <div class="row align-items-center text-center">
                            <div class="col-md-6">
                                <h4 class="text-light fw-light">Spanduk</h4>
                            </div>
                            <div class="col-md-6">
                                <h1 class="text-center blue-card-text">296</h1>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="col-md-3">
				<div class="card-body red-card mt-2">
                        <div class="row align-items-center text-center">
                            <div class="col-md-6 rounded">
                                <h4 class="text-light d-inline fw-light">Leaflet</h4>
                            </div>
                            <div class="col-md-6">
                                <h1 class="red-card-text">160</h1>
                            </div>
                        </div>
                    </div>
				</div>
				<div class="col-md-3">
				<div class="card-body green-card mt-2">
                        <div class="row align-items-center text-center">
                            <div class="col-md-6 text-wrap">
                                <h4 class="text-light fw-light">Sticker</h4>
                            </div>
                            <div class="col-md-6">
                                <h1 class="green-card-text text-center">324</h1>
                            </div>
                        </div>
                    </div>
				</div>
				<div class="col-md-3">
				<div class="card-body yellow-card mt-2">
                        <div class="row align-items-center text-center">
                            <div class="col-md-6 text-wrap">
                                <h4 class="text-light fw-light">Bilboard</h4>
                            </div>
                            <div class="col-md-6">
                                <h1 class="yellow-card-text text-center">91</h1>
                            </div>
                        </div>
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
                
                <div class="col-md-12">
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
                    <h4 class="card-title mb-0">Data Penyebaran dan Pemasangan Polres Bogor Tahun 2021</h4>
                </div>
                <div class="card-body">
                    <div class="main-chart">
                        <div id="chart1"></div>
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
                                <th>Tahun</th>
                                <th>Spanduk</th>
                                <th>Leaflet</th>
                                <th>Stiker</th>
                                <th>Bilboard</th>
                                <td>JEMENSOSPREK</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="1" style="border-right:none">Total</td>
                                <td class="hide"></td>
                                <td>11012</td>
                                <td>5932</td>
                                <td>1700</td>
                                <td>5935</td>
                                <td>10412</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Januari</td>
                                <td>2896</td>
                                <td>1860</td>
                                <td>324</td>
                                <td>931</td>
                                <td>1875</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Februari</td>
                                <td>2896</td>
                                <td>1860</td>
                                <td>324</td>
                                <td>931</td>
                                <td>1875</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Maret</td>
                                <td>2896</td>
                                <td>1860</td>
                                <td>324</td>
                                <td>931</td>
                                <td>1875</td>
                            </tr>
							<tr>
                                <td>4</td>
                                <td>April</td>
                                <td>2896</td>
                                <td>1860</td>
                                <td>324</td>
                                <td>931</td>
                                <td>1875</td>
                            </tr>
							<tr>
                                <td>5</td>
                                <td>Mei</td>
                                <td>2896</td>
                                <td>1860</td>
                                <td>324</td>
                                <td>931</td>
                                <td>1875</td>
                            </tr>
							<tr>
                                <td>6</td>
                                <td>Juni</td>
                                <td>2896</td>
                                <td>1860</td>
                                <td>324</td>
                                <td>931</td>
                                <td>1875</td>
                            </tr>
							<tr>
                                <td>7</td>
                                <td>Juli</td>
                                <td>2896</td>
                                <td>1860</td>
                                <td>324</td>
                                <td>931</td>
                                <td>1875</td>
                            </tr>
							<tr>
                                <td>8</td>
                                <td>Agustus</td>
                                <td>2896</td>
                                <td>1860</td>
                                <td>324</td>
                                <td>931</td>
                                <td>1875</td>
                            </tr>
							<tr>
                                <td>9</td>
                                <td>September</td>
                                <td>2896</td>
                                <td>1860</td>
                                <td>324</td>
                                <td>931</td>
                                <td>1875</td>
                            </tr>
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
        var options_penyebaran = {
            series: [{
                name: 'Spanduk',
                type: 'column',
                data: [607, 1992, 295, 350, 60, 186, 9, 9, 9, 9],
                color: "#11347A"
            }, {
                name: 'Leaflet',
                type: 'column',
                data: [607, 125, 0, 350, 60, 186, 9, 9, 9, 9],
                color: "#CB2D3E"
            }, {
                name: 'Stiker',
                type: 'column',
                data: [0, 1777, 295, 0, 0, 0, 0, 0, 0, 0],
                color: "#E8D42F"
            }, {
                name: 'Billboard',
                type: 'column',
                data: [0, 1777, 295, 0, 0, 0, 0, 0, 0, 0],
                color: "#3CA55C"
            }, {
                name: 'JEMENSOSPREK',
                type: 'column',
                data: [0, 1777, 295, 0, 0, 0, 0, 0, 0, 0],
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
                categories: ['POLRESTABES BANDUNG', 'POLRESTA BOGOR', 'POLRES BOGOR', 'POLRESTA SUKABUMI', 'POLRES SUKABUMI', 'POLRES CIANJUR', 'POLRES PURWAKARTA', 'POLRES KARAWANG', 'POLRES SUBANG', 'POLRES CIMAHI'],
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
                data: [607, 1992, 295, 350, 60, 186, 9, 9, 9, 9],
                color: "#11347A"
            }, {
                name: 'Leaflet',
                type: 'column',
                data: [607, 125, 0, 350, 60, 186, 9, 9, 9, 9],
                color: "#CB2D3E"
            }, {
                name: 'Stiker',
                type: 'column',
                data: [0, 1777, 295, 0, 0, 0, 0, 0, 0, 0],
                color: "#E8D42F"
            }, {
                name: 'Billboard',
                type: 'column',
                data: [0, 1777, 295, 0, 0, 0, 0, 0, 0, 0],
                color: "#3CA55C"
            }, {
                name: 'JEMENSOSPREK',
                type: 'column',
                data: [0, 1777, 295, 0, 0, 0, 0, 0, 0, 0],
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
                categories: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober'],
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
