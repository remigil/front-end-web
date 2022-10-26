<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
<!-- greetings -->
<h5 >Welcome to Dashboard Executive</h5>
<h1 style="font-weight:bolder ; text-transform:uppercase; color:#ECB800;">K3I KORLANTAS POLRI</h1>
<p>today is <?= date('j F, Y')?></p>
<!-- end greetings -->

<!-- start content -->
<div class="row">
    <div class="col-lg-7">
        <div class="row">

            <!-- statistik nasional -->
            <div class="col-md-12">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-4">
                        <h4>Statistik Nasional</h4>
                    </div>
                    <div class="col-md-3">
						<p style="color: red; margin-bottom:0;"><?= ucwords('last update ' . date('j F, Y'))  ?></p>
                    </div>
                </div>
                <div class="row">

				<!-- slider statistik nasional -->
				<div class="swiper mySwiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="card" style="border-radius: 5px !important; background-color:#11347A">
								<div class="card-body">
									<div class="row justify-content-between align-items-center" style="height: 80px;">
										<div class="col-xxl-9 col-xl-8 col-lg-8 col-md-7 col-sm-3 col-4">
											<h5 class="text-wrap fw-light text-light">Total Pelanggaran</h5>
											<h6 class="text-wrap fw-light text-light">Lalu Lintas</h6>
											<h3 class="text-white"><?= $data['pelanggaran']['jumlah'] ?></h3>
										</div>
										<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-3 col-sm-2 col-4">
										<img src="<?= base_url('assets/dashboard/icon-pelanggaran-nas.png') ?>" class="img-fluid" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="card" style="border-radius: 5px !important; background-color:#CB2D3E">
								<div class="card-body">
									<div class="row justify-content-between align-items-center" style="height: 80px;">
										<div class="col-xxl-9 col-xl-8 col-lg-8 col-md-7 col-sm-3 col-4">
											<h5 class="text-wrap fw-light text-light">Total Kecelakaan</h5>
											<h6 class="text-wrap fw-light text-light">Lalu Lintas</h6>
											<h3 class="text-white"><?= $data['kecelakaan']['jumlah'] ?></h3>
										</div>
										<div class="col-xxl-3 col-xl-4 col-lg-5 col-md-3 col-sm-2 col-4">
											<img src="<?= base_url('assets/dashboard/icon-kecelakaan-nas.png') ?>" class="img-fluid" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="card" style="border-radius: 5px !important; background-color:#3CA55C">
								<div class="card-body">
									<div class="row justify-content-between align-items-center" style="height: 80px;">
										<div class="col-xxl-9 col-xl-8 col-lg-8 col-md-7 col-sm-3 col-4">
											<h5 class="text-wrap fw-light text-light">Total Kendaraan</h5>
											<h6 class="text-wrap fw-light text-light">Bermotor</h6>
											<h3 class="text-white"><?= $data['ranmor']['jumlah'] ?></h3>
										</div>
										<div class="col-xxl-3 col-xl-5 col-lg-5 col-md-3 col-sm-2 col-4">
											<img src="<?= base_url('assets/dashboard/icon-ranmor-nas.png') ?>" class="img-fluid" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="card" style="border-radius: 5px !important; background-color:#F06619">
								<div class="card-body">
									<div class="row justify-content-between align-items-center" style="height: 80px;">
										<div class="col-xxl-9 col-xl-8 col-lg-8 col-md-7 col-sm-3 col-4">
											<h5 class="text-wrap fw-light text-light">Total Jumlah</h5>
											<h6 class="text-wrap fw-light text-light">SIM</h6>
											<h3 class="text-white"><?= $data['sim']['jumlah'] ?></h3>
										</div>
										<div class="col-xxl-3 col-xl-4 col-lg-5 col-md-3 col-sm-2 col-4">
											<img src="<?= base_url('assets/dashboard/icon-sim-nas.png') ?>" class="img-fluid" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="card" style="border-radius: 5px !important; background-color:#10A9FF">
								<div class="card-body">
									<div class="row justify-content-between align-items-center" style="height: 80px;">
										<div class="col-xxl-9 col-xl-8 col-lg-8 col-md-7 col-sm-3 col-4">
											<h5 class="text-wrap fw-light text-light">Total Jumlah</h5>
											<h6 class="text-wrap fw-light text-light">STNK</h6>
											<h3 class="text-white"><?= $data['stnk']['jumlah'] ?></h3>
										</div>
										<div class="col-xxl-3 col-xl-5 col-lg-5 col-md-3 col-sm-2 col-4">
											<img src="<?= base_url('assets/dashboard/icon-stnk-nas.png') ?>" class="img-fluid" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="card" style="border-radius: 5px !important; background-color:#7A113D">
								<div class="card-body">
									<div class="row justify-content-between align-items-center" style="height: 80px;">
										<div class="col-xxl-9 col-xl-8 col-lg-8 col-md-7 col-sm-3 col-4">
											<h5 class="text-wrap fw-light text-light">Total Dikmas</h5>
											<h6 class="text-wrap fw-light text-light">Lantas</h6>
											<h3 class="text-white"><?= $data['dikmaslantas']['jumlah'] ?></h3>
										</div>
										<div class="col-xxl-3 col-xl-5 col-lg-5 col-md-3 col-sm-2 col-4">
											<img src="<?= base_url('assets/dashboard/icon-dikmaslantas-nas.png') ?>" class="img-fluid" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="card" style="border-radius: 5px !important; background-color:#2C117A">
								<div class="card-body">
									<div class="row justify-content-between align-items-center" style="height: 80px;">
										<div class="col-xxl-9 col-xl-8 col-lg-8 col-md-7 col-sm-3 col-4">
											<h5 class="text-wrap fw-light text-light">Total Penyebaran/</h5>
											<h6 class="text-wrap fw-light text-light">Pemasangan</h6>
											<h3 class="text-white"><?= $data['penyebaran_pemasangan']['jumlah'] ?></h3>
										</div>
										<div class="col-xxl-3 col-xl-3 col-lg-4 col-md-3 col-sm-2 col-4">
											<img src="<?= base_url('assets/dashboard/icon-penyebaran_pemasangan.png') ?>" class="img-fluid" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
						
						
					</div>
				</div>
				<!-- end slider -->

                </div>
            </div>
            <!-- end statistik -->

            <!-- Rank Pelanggaran -->
            <div class="col md-12">
                <div>
                    <h4>10 Polda Pelanggaran Lantas Tertinggi</h4>
                </div>
                <table class="table table-bordered border-primary text-center" style="vertical-align:middle!important" width="100%">
                    <thead class="table-primary">
                        <tr class="text-white">
                            <th scope="col">No</th>
                            <th scope="col" style="width: 30%;">POLDA</th>
                            <th scope="col">Total Pelanggaran</th>
                            <th scope="col">Pelanggaran Berat</th>
                            <th scope="col">Pelanggaran Sedang</th>
                            <th scope="col">Pelanggaran Ringan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        <?php foreach ($data['topPolda_garlantas'] as $key) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td style="text-align:left"><?= $key['name_polda'] ?></td>
                                <td><?= $key['jumlah_pelanggaran'] ?></td>
                                <td><?= $key['pelanggaran_berat'] ?></td>
                                <td><?= $key['pelanggaran_sedang'] ?></td>
                                <td><?= $key['pelanggaran_berat'] ?></td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
            <!-- end Rank Pelanggaran -->

            <!-- grafik turjagwali -->
            <div class="col-md-12">
                <div class="card shadow-sm">
                    <div class="card-header bg-transparent border-bottom text-uppercase m-3 p-0">
                        <h5>Data Turjagwali Seluruh Indonesia</h5>
                    </div>
                    <div>
                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                            <div class="main-chart">
                                <div id="chart2" style="width: 150vw"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end grafik turjagwali -->

        </div>
    </div>

    <!-- Laporan lantas harian -->
    <div class="col-md-5">
        <div>
            <h4>Laporan Lantas Harian</h4>
        </div>
        <div class="mt-2 mb-3">
            <div class="card shadow-sm">
                <div class="mt-5 text-center">
                    <h5>Top 10 Polda Kecelakaan Tertinggi</h5>
                </div>
                <div class="mt-2 mb-2" style="overflow:hidden; overflow-y:scroll;">
                    <div style="max-height: 180vh;">
                        <?php $j = 1; ?>
                        <?php foreach ($data['topPolda_lakalantas'] as $key) : ?>
                            <div class="card ms-4 me-4 mx-1 my-1">
                                <h5 class="card-header bg-primary border-bottom text-uppercase text-light p-2 m-0"><?= $j; ?>. <?= $key['name_polda'] ?></h5>
                                <div class="card-body">
                                    <div class="row text-center">
                                        <div class="col-md-3 col-sm-4">
                                            <h5 class="fw-bold p-0 m-0"><?= $key['jumlah_kecelakaan'] ?></h5>
                                            <p class="p-0 m-0">Total</p>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <h5 class="fw-bold p-0 m-0"><?= $key['meninggal_dunia'] ?></h5>
                                            <p class="p-0 m-0">Meninggal Dunia</p>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <h5 class="fw-bold p-0 m-0"><?= $key['luka_berat'] ?></h5>
                                            <p class="p-0 m-0">Luka Berat</p>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <h5 class="fw-bold p-0 m-0"><?= $key['luka_ringan'] ?></h5>
                                            <p class="p-0 m-0">Luka Ringan</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php $j++; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end laporan harian -->

</div>

<!-- tripon -->
<div class="row">

    <!-- grafik ditgakkum -->
    <div class="col-md-7">
        <div class="card shadow-sm">
            <div class="card-header bg-transparent border-bottom text-uppercase m-3 p-0">
                <h5>DITGAKKUM NASIONAL</h5>
            </div>
            <div>
                <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                    <div class="main-chart">
                        <div id="chart" style="width: 150vw"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end grafik ditgakkum -->

    <div class="col-md-5">
        <!-- grafik tripon jenis -->
        <div class="row">
            <div class="card">
                <div class="card-header bg-transparent border-bottom text-uppercase m-3 p-0">
                    <h5>DATA TRIPON HARIAN</h5>
                    <p class="fw-bold" style="text-transform:capitalize">Per Jenis Kendaraan</p>
                </div>
                <div class="card-body m-0 p-0">
                    <div class="main-chart">
                        <div id="chart3"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- grafik tripon status -->
        <div class="row">
            <div class="card">
                <div class="card-header bg-transparent border-bottom text-uppercase m-3 p-0">
                    <h5>DATA TRIPON HARIAN</h5>
                    <p class="fw-bold" style="text-transform:capitalize">Per Status Perjalanan</p>
                </div>
                <div class="card-body m-0 p-0">
                    <div class="main-chart m-0 p-0">
                        <div id="chart4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end tripon -->

<div class="row">
    <!-- grafik ditregident -->
    <div class="col-md-7">
        <div class="card shadow-sm">
            <div class="card-header bg-transparent border-bottom text-uppercase m-3 p-0">
                <h5>DITREGIDENT NASIONAL</h5>
            </div>
            <div>
                <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                    <div class="main-chart">
                        <div id="chart5" style="width: 150vw"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- grafik troublespot -->
    <div class="col-md-5">
        <div class="card">
            <div class="card-header bg-transparent border-bottom text-center text-uppercase m-3 p-0">
                <h5>TroubleSpot Terkini</h5>
            </div>
            <div class="card-body">
                <div style="overflow-y: scroll; height:545px">
                    <table class="table dt-responsive text-center table-bordered">
                        <thead class="table-primary" style="vertical-align : middle;text-align:center;">
                            <tr>
                                <th>Daerah</th>
                                <th>Lokasi</th>
                                <th>Tindakan</th>
                            </tr>
                        </thead>
                        <tbody style="overflow:scroll;">
                            <?php foreach ($data['troublespot']['data'] as $key) : ?>
                                <tr>
                                    <td><?= $key['polda']['name_polda'] ?></td>
                                    <td><?= $key['location'] ?></td>
                                    <td><?= $key['action'] ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end content -->

<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<script>
    var poldaName = JSON.parse('<?= json_encode($data['turjagwali']['polda_name']); ?>');
    var polda_pengawalan = JSON.parse('<?= json_encode($data['turjagwali']['polda_pengawalan']); ?>');
    var polda_penjagaan = JSON.parse('<?= json_encode($data['turjagwali']['polda_penjagaan']); ?>');
    var polda_pengaturan = JSON.parse('<?= json_encode($data['turjagwali']['polda_pengaturan']); ?>');
    var polda_patroli = JSON.parse('<?= json_encode($data['turjagwali']['polda_patroli']); ?>');

    var polda_ditgakkum = JSON.parse('<?= json_encode($data['ditgakkum']['polda_ditgakkum']); ?>');
    var lakalantas = JSON.parse('<?= json_encode($data['ditgakkum']['lakalantas']); ?>');
    var lakalanggar = JSON.parse('<?= json_encode($data['ditgakkum']['lakalanggar']); ?>');
    var garlantas = JSON.parse('<?= json_encode($data['ditgakkum']['garlantas']); ?>');
    var turjagwali = JSON.parse('<?= json_encode($data['ditgakkum']['turjagwali']); ?>');


    var polda_ditregident = JSON.parse('<?= json_encode($data['ditregident']['polda_ditregident']); ?>');
    var sim = JSON.parse('<?= json_encode($data['ditregident']['sim']); ?>');
    var bpkb = JSON.parse('<?= json_encode($data['ditregident']['bpkb']); ?>');
    var stnk = JSON.parse('<?= json_encode($data['ditregident']['stnk']); ?>');
    var ranmor = JSON.parse('<?= json_encode($data['ditregident']['ranmor']); ?>');

    var polda_tripon = JSON.parse('<?= json_encode($data['tripOn']); ?>');


    var swiper = new Swiper(".mySwiper", {
        breakpoints: {
            1200: {
                slidesPerView: 4,
                spaceBetween: 10,
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 10,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            576: {
                slidesPerView: 1,
                spaceBetween: 50,
            }
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

    $(document).ready(function() {
        var options_ditgakkum = {
            series: [{
                name: 'Data Dakgar Lantas',
                type: 'column',
                data: lakalanggar,
                color: "#003A91"
            }, {
                name: 'Kecelakaan Lalu Lintas',
                type: 'column',
                data: lakalantas,
                color: "#CB2D3E"
            }, {
                name: 'Gar Lantas',
                type: 'column',
                data: garlantas,
                color: "#E8D42F"
            }, {
                name: 'Data Turjagwali',
                type: 'column',
                data: turjagwali,
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
                    columnWidth: '90%',
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
                categories: polda_ditgakkum,
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
                name: 'Pengaturan',
                type: 'column',
                data: polda_pengaturan,
                color: "#11347A"
            }, {
                name: 'Penjagaan',
                type: 'column',
                data: polda_penjagaan,
                color: "#3CA55C"
            }, {
                name: 'Pengawalan',
                type: 'column',
                data: polda_pengawalan,
                color: "#E8D42F"
            }, {
                name: 'Patroli',
                type: 'column',
                data: polda_patroli,
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
                    columnWidth: '90%',
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

        var ditkamsel = new ApexCharts(document.querySelector("#chart2"), options_ditkamsel);
        ditkamsel.render();

        var options_tripon_kendaraan = {
            series: polda_tripon,
            chart: {
                width: 380,
                type: 'pie',
            },
            labels: ['Mobil Pribadi', 'Motor'],
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: 200
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }]
        };

        var tripon_kendaraan = new ApexCharts(document.querySelector("#chart3"), options_tripon_kendaraan);
        tripon_kendaraan.render();


        var options_triopon_kedatangan = {
            series: [{
                name: 'Keberangkatan',
                type: 'column',
                data: [706, 801, 309, 225, 60, 146, 900, 186, 71, 99],
                color: "#003A91"
            }, {
                name: 'Kedatangan',
                type: 'column',
                data: [65, 120, 19, 67, 56, 27, 3, 19, 87, 16],
                color: "#3CA55C"
            }, ],
            chart: {
                height: 200,
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
                categories: ['BANDUNG', 'BANDUNG', 'BOGOR KOTA', 'CIREBON', 'BOGOR', 'SUMEDANG', 'GARUT', 'TASIKMALAYA', 'KARAWANG', 'MAJALENGKA'],
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
                data: sim,
                color: "#003A91"
            }, {
                name: 'STNK',
                type: 'column',
                data: stnk,
                color: "#CB2D3E"
            }, {
                name: 'BPKB',
                type: 'column',
                data: bpkb,
                color: "#E8D42F"
            }, {
                name: 'RANMOR',
                type: 'column',
                data: ranmor,
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
                    columnWidth: '90%',
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
                categories: polda_ditregident
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

    })
</script>
