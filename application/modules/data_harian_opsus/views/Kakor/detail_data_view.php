<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Daftar <?= $title; ?></li>
    </ol>
</nav>

<div class="card-header card-headline">
    <div class="row align-items-center">
        <div class="col-md-6">
            <!-- <h2 class="text-white"><?= strtoupper($data['headline'])  ?></h2> -->
            <h2 style="color: white; text-align:center;">DAFTAR LAPORAN OPERASI PATUH 2021</h2>
        </div>

    </div>
</div>

<div class="row mt-5">
    <div class="col-md-6">
        <div class="card shadow-sm" style="height: 100%;">
            <div class="card-header bg-transparent border-bottom text-uppercase m-3 p-0">
                <h5 style="text-align: center; color: grey;">Top 10 Polda Data Kecelakaan</h5>
            </div>
            <div>
                <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                    <div class="main-chart">
                        <div id="chart" style="width: 60vw"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card shadow-sm" style="height: 100%;">
            <div class="card-header bg-transparent border-bottom text-uppercase m-3 p-0">
                <h5 style="text-align: center; color: grey;">Top 10 Polda Data Kecelakaan: Kerugian Material</h5>
            </div>
            <div>
                <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                    <div class="main-chart">
                        <div id="chart2" style="width: 50vw"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12 mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-transparent border-bottom text-uppercase m-3 p-0">
                <h5 style="text-align: center; color: grey;">Top 10 Polda Data Pelanggaran</h5>
            </div>
            <div>
                <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                    <div class="main-chart">
                        <div id="chart3" style="width: 80vw"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-8" style="height: 100%;">
        <label for="waktu" class="form-label" style="size: 20;"> Range Waktu</label>
        <div class="row">
            <div class="col-md-4">
                <input class="form-control" type="date" name="waktu" id="waktu">
            </div>

            <div class="col-md-4">
                <input class="form-control" type="date" name="waktu" id="waktu">
            </div>

            <div class="col-md-4">
                <button class="btn btn-primary"> Tampilkan </button>
            </div>
        </div>
    </div>

    <div class="col-md-12 mt-3">
        <div class="card shadow-sm">
            <div class="card-header bg-transparent border-bottom text-uppercase m-3 p-0">
                <h5 style="text-align: center; color: grey;">Data Nasional Harian: 1 Oktober 2022-2 Oktober 2022</h5>
            </div>
            <div>
                <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                    <div class="main-chart">
                        <div id="chart4" style="width: 80vw"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page mt-5">
    <div class="card shadow-sm">
        <div class="card-body">
            <!-- <div style="width: 25%; float:right; border: 1px; margin-bottom: 10px">
                <input type="search" class="form-control light-table-filter" data-table="table-hower" placeholder="Search..." />
            </div> -->
            <table id="datatable" class="table dt-responsive w-100" style="width: 800px;
        margin: 0 auto;">
                <thead>
                    <tr class="table-info">
                        <th scope="col">No</th>
                        <th scope="col">Tanggal Laporan</th>
                        <th scope="col">Deskripsi Laporan</th>
                        <th scope="col">PDF File</th>
                        <th scope="col">Excel File</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-light">
                        <th>1</th>
                        <th>First</th>
                        <th>Last</th>
                        <th scope="col">
                            <button class="btn btn-danger"> PDF </button>
                        </th>
                        <th scope="col">
                            <button class="btn btn-success"> Excel </button>
                        </th>
                    </tr>
                    <tr>
                        <th>2</th>
                        <th>First</th>
                        <th>Last</th>
                        <th scope="col">
                            <button class="btn btn-danger"> PDF </button>
                        </th>
                        <th scope="col">
                            <button class="btn btn-success"> Excel </button>
                        </th>
                    </tr>
                    <tr class="table-light">
                        <th>3</th>
                        <th>First</th>
                        <th>Last</th>
                        <th scope="col">
                            <button class="btn btn-danger"> PDF </button>
                        </th>
                        <th scope="col">
                            <button class="btn btn-success"> Excel </button>
                        </th>
                    </tr>
                    <tr>
                        <th>4</th>
                        <th>First</th>
                        <th>Last</th>
                        <th scope="col">
                            <button class="btn btn-danger"> PDF </button>
                        </th>
                        <th scope="col">
                            <button class="btn btn-success"> Excel </button>
                        </th>
                    </tr>
                    <tr class="table-light">
                        <th>5</th>
                        <th>First</th>
                        <th>Last</th>
                        <th scope="col">
                            <button class="btn btn-danger"> PDF </button>
                        </th>
                        <th scope="col">
                            <button class="btn btn-success"> Excel </button>
                        </th>
                    </tr>
                    </thead>
            </table>

        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        var options_ditgakkum = {
            series: [{
                name: 'Total Kecelakaan',
                type: 'column',
                data: [706, 801, 309, 225, 60, 146, 900, 186, 71, 99],
                color: "#003A91"
            }, {
                name: 'Meninggal Dunia',
                type: 'column',
                data: [65, 120, 19, 67, 56, 27, 3, 19, 87, 16],
                color: "#CB2D3E"
            }, {
                name: 'Luka Berat',
                type: 'column',
                data: [89, 678, 21, 345, 78, 65, 34, 91, 87, 11],
                color: "#E8D42F"
            }, {
                name: 'Luka Ringan',
                type: 'column',
                data: [890, 171, 212, 124, 65, 321, 121, 111, 123, 34],
                color: "#3CA55C"
            }],
            chart: {
                height: 625,
                type: 'line',
                stacked: false
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '80%',
                    endingShape: 'rounded',
                    dataLabels: {
                        position: 'top'
                    }
                },
            },
            dataLabels: {
                enabled: true,
                offsetY: -15,
                style: {
                    fontSize: '9px'
                },
                background: {
                    enabled: false,

                },
            },

            stroke: {
                show: true,
                width: [1, 1, 4, 4],
                colors: ['transparent']
            },
            xaxis: {
                categories: ['METRO JAYA', 'JAWA BARAT', 'JAWA TIMUR', 'JAWA TENGAH', 'BANTEN', 'SUMBAR', 'JAMBI', 'RIAU', 'LAMPUNG', 'BALI'],
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

        var ditgakkum = new ApexCharts(document.querySelector("#chart"), options_ditgakkum);
        ditgakkum.render();


        var options_ditkamsel = {
            series: [{
                name: 'Total Kerugian Material',
                type: 'column',
                data: [706, 801, 309, 225, 60, 146, 900, 186, 71, 99],
                color: "#003A91"
            }, {
                name: 'Penyabaran/Pemasangan',
                type: 'column',
            }, ],
            chart: {
                height: 555,
                type: 'line',
                stacked: false
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '80%',
                    endingShape: 'rounded',
                    dataLabels: {
                        position: 'top'
                    }
                },
            },
            dataLabels: {
                enabled: true,
                offsetY: -15,
                style: {
                    fontSize: '9px'
                },
                background: {
                    enabled: false,

                },
            },

            stroke: {
                show: true,
                width: [1, 1, 4, 4],
                colors: ['transparent']
            },
            xaxis: {
                categories: ['POLRESTABES BANDUNG', 'POLRESTA BANDUNG', 'POLRESTA BOGOR KOTA', 'POLRESTA CIREBON', 'POLRES BOGOR', 'POLRES SUMEDANG', 'POLRES GARUT', 'POLRES TASIKMALAYA', 'POLRES KARAWANG', 'POLRES MAJALENGKA'],
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

        var ditkamsel = new ApexCharts(document.querySelector("#chart2"), options_ditkamsel);
        ditkamsel.render();

        var options_tripon_kendaraan = {
            series: [{
                name: 'Total Pelanggaran',
                type: 'column',
                data: [706, 801, 309, 225, 60, 146, 900, 186, 71, 99],
                color: "#003A91"
            }, {
                name: 'Gar Berat',
                type: 'column',
                data: [65, 120, 19, 67, 56, 27, 3, 19, 87, 16],
                color: "#CB2D3E"
            }, {
                name: 'Gar Sedang',
                type: 'column',
                data: [89, 678, 21, 345, 78, 65, 34, 91, 87, 11],
                color: "#E8D42F"
            }, {
                name: 'Gar Ringan',
                type: 'column',
                data: [890, 171, 212, 124, 65, 321, 121, 111, 123, 34],
                color: "#3CA55C"
            }],
            chart: {
                height: 625,
                type: 'line',
                stacked: false
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '80%',
                    endingShape: 'rounded',
                    dataLabels: {
                        position: 'top'
                    }
                },
            },
            dataLabels: {
                enabled: true,
                offsetY: -15,
                style: {
                    fontSize: '9px'
                },
                background: {
                    enabled: false,

                },
            },

            stroke: {
                show: true,
                width: [1, 1, 4, 4],
                colors: ['transparent']
            },
            xaxis: {
                categories: ['POLRESTABES BANDUNG', 'POLRESTA BANDUNG', 'POLRESTA BOGOR KOTA', 'POLRESTA CIREBON', 'POLRES BOGOR', 'POLRES SUMEDANG', 'POLRES GARUT', 'POLRES TASIKMALAYA', 'POLRES KARAWANG', 'POLRES MAJALENGKA'],
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

        var tripon_kendaraan = new ApexCharts(document.querySelector("#chart3"), options_tripon_kendaraan);
        tripon_kendaraan.render();


        var options_triopon_kedatangan = {
            series: [{
                name: 'Kecelakan',
                type: 'column',
                data: [706, 801, 309, 225, 60, 146, 900, 186, 71, 199],
                color: "#003A91"
            }, {
                name: 'Pelanggaran',
                type: 'column',
                data: [65, 120, 19, 67, 56, 27, 30, 19, 87, 96],
                color: "#CB2D3E"

            }, ],
            chart: {
                height: 555,
                type: 'line',
                stacked: false
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '80%',
                    endingShape: 'rounded',
                    dataLabels: {
                        position: 'top'
                    }
                },
            },
            dataLabels: {
                enabled: true,
                offsetY: -15,
                style: {
                    fontSize: '9px'
                },
                background: {
                    enabled: false,

                },
            },

            stroke: {
                show: true,
                width: [1, 1, 4, 4],
                colors: ['transparent']
            },
            xaxis: {
                categories: ['POLRESTABES BANDUNG', 'POLRESTA BANDUNG', 'POLRESTA BOGOR KOTA', 'POLRESTA CIREBON', 'POLRES BOGOR', 'POLRES SUMEDANG', 'POLRES GARUT', 'POLRES TASIKMALAYA', 'POLRES KARAWANG', 'POLRES MAJALENGKA'],
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

        var kedatangan = new ApexCharts(document.querySelector("#chart4"), options_triopon_kedatangan);
        kedatangan.render();

        var options_ditregident = {
            series: [{
                name: 'SIM',
                type: 'column',
                data: [706, 801, 309, 225, 60, 146, 900, 186, 71, 99],
                color: "#003A91"
            }, {
                name: 'STNK',
                type: 'column',
                data: [65, 120, 19, 67, 56, 27, 3, 19, 87, 16],
                color: "#CB2D3E"
            }, {
                name: 'BPKB',
                type: 'column',
                data: [90, 111, 178, 16, 89, 27, 34, 100, 23, 98],
                color: "#E8D42F"
            }, {
                name: 'RANMOR',
                type: 'column',
                data: [95, 128, 195, 617, 516, 99, 39, 89, 17, 78],
                color: "#3CA55C"
            }, ],
            chart: {
                height: 555,
                type: 'line',
                stacked: false
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '80%',
                    endingShape: 'rounded',
                    dataLabels: {
                        position: 'top'
                    }
                },
            },
            dataLabels: {
                enabled: true,
                offsetY: -15,
                style: {
                    fontSize: '9px'
                },
                background: {
                    enabled: false,

                },
            },

            stroke: {
                show: true,
                width: [1, 1, 4, 4],
                colors: ['transparent']
            },
            xaxis: {
                // categories: ['METRO JAYA', 'JATENG', 'JATIM', 'JABAR', 'DIY', 'BANTEN', 'SUMBAR', 'JAMBI', 'RIAU', 'LAMPUNG', 'DIY YOGYAKARTA', 'BALI', 'KALIMANTAN TIMUR'],
                categories: ['POLRESTABES BANDUNG', 'POLRESTA BANDUNG', 'POLRESTA BOGOR KOTA', 'POLRESTA CIREBON', 'POLRES BOGOR', 'POLRES SUMEDANG', 'POLRES GARUT', 'POLRES TASIKMALAYA', 'POLRES KARAWANG', 'POLRES MAJALENGKA'],
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

        var ditregident = new ApexCharts(document.querySelector("#chart5"), options_ditregident);
        ditregident.render();

        $('#datatable').DataTable({
            scrollX: true,
        });

    })
</script>