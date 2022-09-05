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
                                <h4 class="text-light fw-light">Capture Kamera</h4>
                            </div>
                            <div class="col-md-6">
                                <h1 class="text-center blue-card-text">706</h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body red-card mt-2">
                        <div class="row align-items-center text-center">
                            <div class="col-md-6 rounded">
                                <h4 class="text-light d-inline fw-light">Validasi Petugas</h4>
                            </div>
                            <div class="col-md-6">
                                <h1 class="red-card-text">56</h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body green-card mt-2">
                        <div class="row align-items-center text-center">
                            <div class="col-md-6 text-wrap">
                                <h4 class="text-light fw-light">Konfirmasi Masyarakat</h4>
                            </div>
                            <div class="col-md-6">
                                <h1 class="green-card-text text-center">401</h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body yellow-card mt-2">
                        <div class="row align-items-center text-center">
                            <div class="col-md-6 text-wrap">
                                <h4 class="text-light fw-light">ODOL</h4>
                            </div>
                            <div class="col-md-6">
                                <h1 class="yellow-card-text text-center">385</h1>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-8">
                    <div class="top-five-headline">
                        <h2 class="text-center">10 RANGKING DAKGAR LANTAS TERTINGGI</h2>
                    </div>
                    <div class="mt-5">
                        <table class="table table-bordered border-primary text-center" style="vertical-align:middle!important" width="100%">
                            <thead class="table-primary">
                                <tr class="text-white">
                                    <th scope="col">No</th>
                                    <th scope="col">POLRES</th>
                                    <th scope="col">Capture Camera</th>
                                    <th scope="col">Validasi Petugas</th>
                                    <th scope="col">Konfirmasi Masyarakat</th>
                                    <th scope="col">ODOL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>POLRESTABES BANDUNG</td>
                                    <td>86</td>
                                    <td>42</td>
                                    <td>2</td>
                                    <td>94</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>POLRESTA BOGOR</td>
                                    <td>75</td>
                                    <td>42</td>
                                    <td>2</td>
                                    <td>35</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>POLRES BOGOR</td>
                                    <td>43</td>
                                    <td>24</td>
                                    <td>1</td>
                                    <td>18</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>POLRESTA SUKABUMI</td>
                                    <td>31</td>
                                    <td>21</td>
                                    <td>6</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>POLRES SUKABUMI</td>
                                    <td>22</td>
                                    <td>7</td>
                                    <td>5</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>POLRES CIANJUR</td>
                                    <td>86</td>
                                    <td>42</td>
                                    <td>2</td>
                                    <td>94</td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>POLRES PURWAKARTA</td>
                                    <td>75</td>
                                    <td>42</td>
                                    <td>2</td>
                                    <td>35</td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>POLRES KARAWANG</td>
                                    <td>43</td>
                                    <td>24</td>
                                    <td>1</td>
                                    <td>18</td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>POLRES SUBANG</td>
                                    <td>31</td>
                                    <td>21</td>
                                    <td>6</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <th scope="row">10</th>
                                    <td>POLRES CIMAHI</td>
                                    <td>22</td>
                                    <td>7</td>
                                    <td>5</td>
                                    <td>2</td>
                                </tr>
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
                    
                    <div class="form-group mt-1">
                        <select class="form-select">
                            <option>Polres</option>
                            <option>Semua Polres</option>
                            <option>POLRESTABES BANDUNG</option>
                            <option>POLRESTA BOGOR</option>
                            <option>POLRESTA SUKABUMI</option>
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
                    <h4 class="card-title mb-0">DATA DAKGAR LANTAS - CAPTURE CAMERA</h4>
                </div>
                <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                    <div class="main-chart">
                        <div id="chart" style="width: 100vw"></div>
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
                    <h4 class="card-title mb-0">DATA DAKGAR LANTAS - VALIDASI PETUGAS</h4>
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
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">DATA DAKGAR LANTAS - KONFIRMASI MASYARAKAT</h4>
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
                    <h4 class="card-title mb-0">DATA DAKGAR LANTAS - ODOL</h4>
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
                    <table id="tb_dakgar_lantas" class="table dt-responsive table-bordered nowrap w-100">
                        <thead class="table-primary text-center" style="vertical-align : middle;text-align:center;">
                            <tr>
                                <th rowspan="2">No</th>
                                <th rowspan="2">POLRES</th>
                                <th rowspan="2">Jumlah Capture Camera</th>
                                <th colspan="3">JUMLAH VALIDASI PETUGAS</th>
                                <th colspan="3">JUMLAH KONFIRMASI MASYARAKAT</th>
                                <th colspan="4">ODOL</th>
                            </tr>
                            <tr>
                                <td>STATIS</td>
                                <td>MOBILE</td>
                                <td>TOTAL</td>
                                <td>ONLINE</td>
                                <td>POSKO</td>
                                <td>TOTAL</td>
                                <td>PREEMTIF</td>
                                <td>PRE-VENTIF</td>
                                <td>227</td>
                                <td>307</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="1" style="border-right:none">Total</td>
                                <td class="hide"></td>
                                <td>67645</td>
                                <td>2100</td>
                                <td>1846</td>
                                <td>3946</td>
                                <td>886</td>
                                <td>583</td>
                                <td>1469</td>
                                <td>724212</td>
                                <td>429941</td>
                                <td>21</td>
                                <td>34084</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>POLRESTABES BANDUNG</td>
                                <td>67645</td>
                                <td>2100</td>
                                <td>1846</td>
                                <td>3946</td>
                                <td>886</td>
                                <td>583</td>
                                <td>1469</td>
                                <td>724212</td>
                                <td>429941</td>
                                <td>21</td>
                                <td>34084</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>POLRESTA BOGOR</td>
                                <td>67645</td>
                                <td>2100</td>
                                <td>1846</td>
                                <td>3946</td>
                                <td>886</td>
                                <td>583</td>
                                <td>1469</td>
                                <td>724212</td>
                                <td>429941</td>
                                <td>21</td>
                                <td>34084</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>POLRES BOGOR</td>
                                <td>67645</td>
                                <td>2100</td>
                                <td>1846</td>
                                <td>3946</td>
                                <td>886</td>
                                <td>583</td>
                                <td>1469</td>
                                <td>724212</td>
                                <td>429941</td>
                                <td>21</td>
                                <td>34084</td>
                            </tr>
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
                    <h4 class="card-title mb-0">DATA DAKGAR LANTAS - CAPTURE CAMERA - TAHUN 2021</h4>
                </div>
                <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                    <div class="main-chart">
                        <div id="chart5" style="width: 100vw"></div>
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
                    <h4 class="card-title mb-0">DATA DAKGAR LANTAS - VALIDASI PETUGAS</h4>
                </div>
                <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                    <div class="main-chart">
                        <div id="chart6" style="width: 100vw"></div>
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
                    <h4 class="card-title mb-0">DATA DAKGAR LANTAS - KONFIRMASI MASYARAKAT</h4>
                </div>
                <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                    <div class="main-chart">
                        <div id="chart7" style="width: 100vw"></div>
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
                    <h4 class="card-title mb-0">DATA DAKGAR LANTAS - ODOL</h4>
                </div>
                <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                    <div class="main-chart">
                        <div id="chart8" style="width: 100vw"></div>
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
                    <table id="tb_dakgar_lantas_tahun" class="table dt-responsive table-bordered nowrap w-100">
                        <thead class="table-primary text-center" style="vertical-align : middle;text-align:center;">
                            <tr>
                                <th rowspan="2">No</th>
                                <th rowspan="2">BULAN</th>
                                <th rowspan="2">Jumlah Capture Camera</th>
                                <th colspan="3">JUMLAH VALIDASI PETUGAS</th>
                                <th colspan="3">JUMLAH KONFIRMASI MASYARAKAT</th>
                                <th colspan="4">ODOL</th>
                            </tr>
                            <tr>
                                <td>STATIS</td>
                                <td>MOBILE</td>
                                <td>TOTAL</td>
                                <td>ONLINE</td>
                                <td>POSKO</td>
                                <td>TOTAL</td>
                                <td>PREEMTIF</td>
                                <td>PRE-VENTIF</td>
                                <td>227</td>
                                <td>307</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="1" style="border-right:none">Total</td>
                                <td class="hide"></td>
                                <td>67645</td>
                                <td>2100</td>
                                <td>1846</td>
                                <td>3946</td>
                                <td>886</td>
                                <td>583</td>
                                <td>1469</td>
                                <td>724212</td>
                                <td>429941</td>
                                <td>21</td>
                                <td>34084</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>JANUARI</td>
                                <td>67645</td>
                                <td>2100</td>
                                <td>1846</td>
                                <td>3946</td>
                                <td>886</td>
                                <td>583</td>
                                <td>1469</td>
                                <td>724212</td>
                                <td>429941</td>
                                <td>21</td>
                                <td>34084</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>FEBRUARI</td>
                                <td>67645</td>
                                <td>2100</td>
                                <td>1846</td>
                                <td>3946</td>
                                <td>886</td>
                                <td>583</td>
                                <td>1469</td>
                                <td>724212</td>
                                <td>429941</td>
                                <td>21</td>
                                <td>34084</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>MARET</td>
                                <td>67645</td>
                                <td>2100</td>
                                <td>1846</td>
                                <td>3946</td>
                                <td>886</td>
                                <td>583</td>
                                <td>1469</td>
                                <td>724212</td>
                                <td>429941</td>
                                <td>21</td>
                                <td>34084</td>
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
        $('#tb_dakgar_lantas').DataTable()
        $('#tb_dakgar_lantas_tahun').DataTable()
        // Capture Kamera
        var options_capture_camera = {
            series: [{
                name: 'JUMLAH CAPTURE CAMERA',
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
                categories: ['POLRESTABES BANDUNG', 'POLRESTA BOGOR', 'POLRESTA SUKABUMI', 'POLRES SUKABUMI', 'POLRES CIANJUR', 'POLRES PURWAKARTA', 'POLRES KARAWANG', 'POLRES SUBANG', 'POLRES INDRAMAYU', 'POLRES KUNINGAN', 'POLRES CIMAHI'],
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

        var capture_camera = new ApexCharts(document.querySelector(" #chart"), options_capture_camera);
        capture_camera.render();


        // Validasi petugas
        var options_validasi_petugas = {
            series: [{
                name: 'Total',
                type: 'column',
                data: [607, 1992, 295, 350, 60, 186, 9, 9, 9, 9],
                color: "#11347A"
            }, {
                name: 'Statis',
                type: 'column',
                data: [607, 125, 0, 350, 60, 186, 9, 9, 9, 9],
                color: "#3CA55C"
            }, {
                name: 'Mobile',
                type: 'column',
                data: [0, 1777, 295, 0, 0, 0, 0, 0, 0, 0],
                color: "#E8D42F"
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
                categories: ['POLRESTABES BANDUNG', 'POLRES BANDUNG', 'POLRESTA BOGOR', 'POLRES BOGOR', 'POLRES PURWAKARTA', 'POLRES KARAWANG', 'POLRES SUBANG', 'POLRES INDRAMAYU', 'POLRES KUNINGAN', 'POLRES CIMAHI'],
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

        var validasi_petugas = new ApexCharts(document.querySelector("#chart2"), options_validasi_petugas);
        validasi_petugas.render();


        // Konfirmasi masyrakat
        var options_konfirmasi_petugas = {
            series: [{
                name: 'Total',
                type: 'column',
                data: [607, 1992, 295, 350, 60, 186, 9, 9, 9, 9],
                color: "#11347A"
            }, {
                name: 'Posko',
                type: 'column',
                data: [607, 125, 0, 350, 60, 186, 9, 9, 9, 9],
                color: "#3CA55C"
            }, {
                name: 'Online',
                type: 'column',
                data: [0, 1777, 295, 0, 0, 0, 0, 0, 0, 0],
                color: "#E8D42F"
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
                width: [1, 1, 4]
            },
            xaxis: {
                categories: ['POLRESTABES BANDUNG', 'POLRES BANDUNG', 'POLRESTA BOGOR', 'POLRES BOGOR', 'POLRES PURWAKARTA', 'POLRES KARAWANG', 'POLRES SUBANG', 'POLRES INDRAMAYU', 'POLRES KUNINGAN', 'POLRES CIMAHI'],
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
                    enabled: false
                }
            }, ],
        };

        var konfirmasi_masyarakat = new ApexCharts(document.querySelector("#chart3"), options_konfirmasi_petugas);
        konfirmasi_masyarakat.render();


        // ODOL
        var options_odol = {
            series: [{
                name: 'PREMTIF',
                type: 'column',
                data: [44, 55, 57, 56, 61, 58, 63, 60, 66],
                color: "#11347A",
            }, {
                name: 'PREVENTIF',
                data: [76, 85, 101, 98, 87, 105, 91, 114, 94],
                type: "column",
                color: "#3CA55C",
            }, {
                name: '227',
                data: [35, 41, 36, 26, 45, 48, 52, 53, 41],
                type: "column",
                color: "#E8D42F"
            }, {
                name: '307',
                data: [35, 41, 36, 26, 45, 48, 52, 53, 41],
                type: "column",
                color: "#CB2D3E"
            }],
            chart: {
                type: 'line',
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
                offsetY: -15
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: ['POLRESTABES BANDUNG', 'POLRES BANDUNG', 'POLRESTA BOGOR', 'POLRES BOGOR', 'POLRES PURWAKARTA', 'POLRES KARAWANG', 'POLRES SUBANG', 'POLRES INDRAMAYU', 'POLRES KUNINGAN', 'POLRES CIMAHI'],
            },
            yaxis: {
                title: {
                    text: '$ (thousands)'
                }
            },
            fill: {
                opacity: 1
            },

        };

        var odol = new ApexCharts(document.querySelector("#chart4"), options_odol);
        odol.render();


        // DATA DAKGAR LANTAS - CAPTURE CAMERA 2021
        var options_capture_camera_tahun = {
            series: [{
                name: 'JUMLAH CAPTURE CAMERA',
                data: [25061, 2113, 7832, 8076, 1387, 2119, 106, 235, 1052, 1262, 7810, 1000],
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
                categories: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
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

        var capture_camera_tahun = new ApexCharts(document.querySelector(" #chart5"), options_capture_camera_tahun);
        capture_camera_tahun.render();

        // DATA DAKGAR LANTAS - VALIDASI PETUGAS
        var options_validasi_petugas_tahun = {
            series: [{
                name: 'Total',
                type: 'column',
                data: [607, 1992, 295, 350, 60, 186, 9, 9, 9, 9],
                color: "#11347A"
            }, {
                name: 'Statis',
                type: 'column',
                data: [607, 125, 0, 350, 60, 186, 9, 9, 9, 9],
                color: "#3CA55C"
            }, {
                name: 'Mobile',
                type: 'column',
                data: [0, 1777, 295, 0, 0, 0, 0, 0, 0, 0],
                color: "#E8D42F"
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

        var validasi_petugas_tahun = new ApexCharts(document.querySelector("#chart6"), options_validasi_petugas_tahun);
        validasi_petugas_tahun.render();


        // DATA DAKGAR LANTAS - KONFIRMASI MASYARAKAT
        var options_konfirmasi_masyarakat_tahun = {
            series: [{
                name: 'Total',
                type: 'column',
                data: [607, 1992, 295, 350, 60, 186, 9, 9, 9, 9],
                color: "#11347A"
            }, {
                name: 'Statis',
                type: 'column',
                data: [607, 125, 0, 350, 60, 186, 9, 9, 9, 9],
                color: "#3CA55C"
            }, {
                name: 'Mobile',
                type: 'column',
                data: [0, 1777, 295, 0, 0, 0, 0, 0, 0, 0],
                color: "#E8D42F"
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

        var konfirmasi_masyarakat_tahun = new ApexCharts(document.querySelector("#chart7"), options_konfirmasi_masyarakat_tahun);
        konfirmasi_masyarakat_tahun.render();



        var options_odol_tahun = {
            series: [{
                name: 'Total',
                type: 'column',
                data: [607, 1992, 295, 350, 60, 186, 9, 9, 9, 9],
                color: "#11347A"
            }, {
                name: 'Statis',
                type: 'column',
                data: [607, 125, 0, 350, 60, 186, 9, 9, 9, 9],
                color: "#3CA55C"
            }, {
                name: 'Mobile',
                type: 'column',
                data: [0, 1777, 295, 0, 0, 0, 0, 0, 0, 0],
                color: "#E8D42F"
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

        var odol_tahun = new ApexCharts(document.querySelector("#chart8"), options_odol_tahun);
        odol_tahun.render();


    })
</script>