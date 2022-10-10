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
                                <h4 class="text-light fw-light">Baru</h4>
                            </div>
                            <div class="col-md-6">
                                <h1 class="text-center blue-card-text">296</h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body red-card mt-2">
                        <div class="row align-items-center text-center">
                            <div class="col-md-6 rounded">
                                <h4 class="text-light d-inline fw-light">Perpanjangan</h4>
                            </div>
                            <div class="col-md-6">
                                <h1 class="red-card-text">160</h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body green-card mt-2">
                        <div class="row align-items-center text-center">
                            <div class="col-md-6 text-wrap">
                                <h4 class="text-light fw-light">Jumlah</h4>
                            </div>
                            <div class="col-md-6">
                                <h1 class="green-card-text text-center">324</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="top-five-headline">
                        <h2 class="text-center">10 RANGKING SIM TERTINGGI</h2>
                    </div>
                    <div class="mt-5 " style="overflow-y: scroll; height:250px">
                        <table class="table table-bordered border-primary text-center" style="vertical-align:middle!important" width="100%">
                            <thead class="table-primary">
                                <tr class="text-white">
                                    <th scope="col">No</th>
                                    <th scope="col">POLRES</th>
                                    <th scope="col">Baru</th>
                                    <th scope="col">Perpanjangan</th>
                                    <th scope="col">Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>POLRESTABES BANDUNG</td>
                                    <td>65</td>
                                    <td>8</td>
                                    <td>73</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>POLRESTA BOGOR</td>
                                    <td>15</td>
                                    <td>32</td>
                                    <td>47</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>POLRES BOGOR</td>
                                    <td>43</td>
                                    <td>24</td>
                                    <td>67</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>POLRESTA SUKABUMI</td>
                                    <td>31</td>
                                    <td>21</td>
                                    <td>52</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>POLRES CIANJUR</td>
                                    <td>21</td>
                                    <td>17</td>
                                    <td>38</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>POLRES PURWAKARTA</td>
                                    <td>25</td>
                                    <td>12</td>
                                    <td>37</td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>POLRES KARAWANG</td>
                                    <td>16</td>
                                    <td>12</td>
                                    <td>28</td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>POLRES SUBANG</td>
                                    <td>24</td>
                                    <td>10</td>
                                    <td>34</td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>POLRES CIMAHI</td>
                                    <td>11</td>
                                    <td>4</td>
                                    <td>15</td>
                                </tr>
                                <tr>
                                    <th scope="row">10</th>
                                    <td>POLRESTA SUKABUMI</td>
                                    <td>22</td>
                                    <td>7</td>
                                    <td>29</td>
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
                            <option>POLRES BOGOR</option>
                            <option>POLRESTA SUKABUMI</option>
                            <option>POLRES SUKABUMI</option>
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
                    <h4 class="card-title mb-0">Data SIM Jawa Barat</h4>
                </div>
                <div class="card-body">
                    <div class="main-chart">
                        <div id="chart"></div>
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
                    <table id="tb_sim" class="table dt-responsive table-bordered nowrap w-100">
                        <thead class="table-primary text-center" style="vertical-align : middle;text-align:center;">
                            <tr>
                                <th>No</th>
                                <th>Polres</th>
                                <th>Baru</th>
                                <td>Perpanjangan</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="1" style="border-right:none">Total</td>
                                <td class="hide"></td>
                                <td>11012</td>
                                <td>5932</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>POLRESTABES BANDUNG</td>
                                <td>2896</td>
                                <td>1860</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>POLRESTA BOGOR</td>
                                <td>2896</td>
                                <td>1860</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>POLRES BOGOR</td>
                                <td>2896</td>
                                <td>1860</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>POLRESTA SUKABUMI</td>
                                <td>2896</td>
                                <td>1860</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>POLRES SUKABUMI</td>
                                <td>2896</td>
                                <td>1860</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>POLRES CIANJUR</td>
                                <td>2896</td>
                                <td>1860</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>POLRES PURWAKARTA</td>
                                <td>2896</td>
                                <td>1860</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>POLRES KARAWANG</td>
                                <td>2896</td>
                                <td>1860</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>POLRES SUBANG</td>
                                <td>2896</td>
                                <td>1860</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>POLRES CIMAHI</td>
                                <td>2896</td>
                                <td>1860</td>
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
                    <h4 class="card-title mb-0">Data SIM 2021</h4>
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
                    <table id="tb_sim_tahun" class="table dt-responsive table-bordered nowrap w-100">
                        <thead class="table-primary text-center" style="vertical-align : middle;text-align:center;">
                            <tr>
                                <th>No</th>
                                <th>Tahun</th>
                                <th>Baru</th>
                                <th>Perpanjangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="1" style="border-right:none">Total</td>
                                <td class="hide"></td>
                                <td>11012</td>
                                <td>5932</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Januari</td>
                                <td>2896</td>
                                <td>1860</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Februari</td>
                                <td>2896</td>
                                <td>1860</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Maret</td>
                                <td>2896</td>
                                <td>1860</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>April</td>
                                <td>2896</td>
                                <td>1860</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Mei</td>
                                <td>2896</td>
                                <td>1860</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Juni</td>
                                <td>2896</td>
                                <td>1860</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Juli</td>
                                <td>2896</td>
                                <td>1860</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Agustus</td>
                                <td>2896</td>
                                <td>1860</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>September</td>
                                <td>2896</td>
                                <td>1860</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Oktober</td>
                                <td>2896</td>
                                <td>1860</td>
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
        $('#tb_sim').DataTable()
        $('#tb_sim_tahun').DataTable()

        //    SIM
        var options_sim = {
            series: [{
                name: 'Baru',
                type: 'column',
                data: [607, 1992, 295, 350, 60, 186, 9, 9, 9, 9],
                color: "#003A91"
            }, {
                name: 'Perpanjangan',
                type: 'column',
                data: [607, 125, 0, 350, 60, 186, 9, 9, 9, 9],
                color: "#3CA55C"
            }, ],
            chart: {
                height: 350,
                type: 'line',
                stacked: false
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '100%',
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

        var sim = new ApexCharts(document.querySelector("#chart"), options_sim);
        sim.render();

        // SIM TAHUN
        var options_sim_tahun = {
            series: [{
                name: 'Baru',
                type: 'column',
                data: [607, 1992, 295, 350, 60, 186, 9, 9, 9, 9],
                color: "#003A91"
            }, {
                name: 'Perpanjangan',
                type: 'column',
                data: [607, 125, 0, 350, 60, 186, 9, 9, 9, 9],
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
                    columnWidth: '100%',
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

        var sim_tahun = new ApexCharts(document.querySelector("#chart1"), options_sim_tahun);
        sim_tahun.render();
    })
</script>