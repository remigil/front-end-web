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
                    <div class="item-card blue-card m-2">
                        <h4 class="text-light ps-2 d-inline fw-light">Media Cetak</h4>
                    </div>
                    <div class="item-card red-card m-2">
                        <h4 class="text-light ps-2 d-inline fw-light">Media Elektronik</h4>
                    </div>
                    <div class="item-card green-card m-2">
                        <h4 class="text-light ps-2 d-inline fw-light">Media Sosial</h4>
                    </div>
                    <div class="item-card yellow-card m-2">
                        <h4 class="text-light ps-2 d-inline fw-light">Laka Langgar</h4>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="top-five-headline">
                        <h2 class="text-center">5 RANGKING DIKMAS LANTAS TERTINGGI</h2>
                    </div>
                    <div class="mt-5">
                        <table class="table table-bordered border-primary">
                            <thead class="table-primary">
                                <tr class="text-white">
                                    <th scope="col">No</th>
                                    <th scope="col">Polda</th>
                                    <th scope="col">Media Cetak</th>
                                    <th scope="col">Media Elektronik</th>
                                    <th scope="col">Media Sosial</th>
                                    <th scope="col">Laka Langgar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Jawa Barat</td>
                                    <td>86</td>
                                    <td>42</td>
                                    <td>2</td>
                                    <td>94</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jawa Barat</td>
                                    <td>86</td>
                                    <td>42</td>
                                    <td>2</td>
                                    <td>94</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Jawa Barat</td>
                                    <td>86</td>
                                    <td>42</td>
                                    <td>2</td>
                                    <td>94</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Jawa Barat</td>
                                    <td>86</td>
                                    <td>42</td>
                                    <td>2</td>
                                    <td>94</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Jawa Barat</td>
                                    <td>86</td>
                                    <td>42</td>
                                    <td>2</td>
                                    <td>94</td>
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
    <div class="col-6">
        <h4>Wilayah</h4>
        <form action="">
            <div class="row">
                <div class="col-md-6">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Polda</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Polda</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
        </form>
    </div>
    <hr>
</section>

<section>
    <div class="col-12">
        <h4>Waktu</h4>
        <form action="">
            <div class="row">
                <div class="col-md-3">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Customize</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <input type="date" placeholder="Tanggal mulai" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="col-md-3">
                    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary table-head form-control">Tampilkan</button>
                </div>
            </div>
        </form>
    </div>
    <hr>
</section>

<section class="shadow-sm mt-5">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Data Dikmas Lantas Seluruh Indonesia</h4>
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
            <div class="card mt-3">
                <div class="card-body">
                    <table id="tb_dikmaslantas" class="table dt-responsive table-bordered nowrap w-100">
                        <thead class="table-primary text-center" style="vertical-align : middle;text-align:center;">
                            <tr>
                                <th>No</th>
                                <th>Polda</th>
                                <th>Penluh</th>
                                <th>Media Cetak</th>
                                <th>Media Elektronik</th>
                                <th>Media Sosial</th>
                                <td>Laka & Langgar</td>
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
                                <td>METRO JAYA</td>
                                <td>2896</td>
                                <td>1860</td>
                                <td>324</td>
                                <td>931</td>
                                <td>1875</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>JATENG</td>
                                <td>2896</td>
                                <td>1860</td>
                                <td>324</td>
                                <td>931</td>
                                <td>1875</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>JABAR</td>
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

<section class="shadow-sm mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Data Dikmas Lantas Tahun 2021</h4>
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
                    <table id="tb_dikmaslantas_tahun" class="table dt-responsive table-bordered nowrap w-100">
                        <thead class="table-primary text-center" style="vertical-align : middle;text-align:center;">
                            <tr>
                                <th>No</th>
                                <th>Tahun</th>
                                <th>Penluh</th>
                                <th>Media Cetak</th>
                                <th>Media Elektronik</th>
                                <th>Media Sosial</th>
                                <td>Laka & Langgar</td>
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
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        $('#tb_dikmaslantas').DataTable()
        $('#tb_dikmaslantas_tahun').DataTable()

        // Dikmas Lantas
        var options_dikmas_lantas = {
            series: [{
                name: 'Media Cetak',
                type: 'column',
                data: [607, 1992, 295, 350, 60, 186, 9, 9, 9, 9],
                color: "#11347A"
            }, {
                name: 'Media Elektronik',
                type: 'column',
                data: [607, 125, 0, 350, 60, 186, 9, 9, 9, 9],
                color: "#CB2D3E"
            }, {
                name: 'Media Sosial',
                type: 'column',
                data: [0, 1777, 295, 0, 0, 0, 0, 0, 0, 0],
                color: "#E8D42F"
            }, {
                name: 'Laka langgar',
                type: 'column',
                data: [0, 1777, 295, 0, 0, 0, 0, 0, 0, 0],
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
                categories: ['METRO JAYA', 'JATENG', 'JATIM', 'JABAR', 'DIY', 'BANTEN', 'SUMBAR', 'JAMBI', 'RIAU', 'LAMPUNG'],
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

        var dikmas_lantas = new ApexCharts(document.querySelector("#chart"), options_dikmas_lantas);
        dikmas_lantas.render();

        // Dikmas Lantas Tahun 2021
        var options_dikmas_lantas_tahun = {
            series: [{
                name: 'Media Cetak',
                type: 'column',
                data: [607, 1992, 295, 350, 60, 186, 9, 9, 9, 9],
                color: "#11347A"
            }, {
                name: 'Media Elektronik',
                type: 'column',
                data: [607, 125, 0, 350, 60, 186, 9, 9, 9, 9],
                color: "#CB2D3E"
            }, {
                name: 'Media Sosial',
                type: 'column',
                data: [0, 1777, 295, 0, 0, 0, 0, 0, 0, 0],
                color: "#E8D42F"
            }, {
                name: 'Laka langgar',
                type: 'column',
                data: [0, 1777, 295, 0, 0, 0, 0, 0, 0, 0],
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

        var dikmas_lantas_tahun = new ApexCharts(document.querySelector("#chart2"), options_dikmas_lantas_tahun);
        dikmas_lantas_tahun.render();
    })
</script>