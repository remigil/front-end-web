
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

 
<!-- greetings -->
<h5 >Welcome to Dashboard Executive</h5>
<h1 style="font-weight:bolder ; text-transform:uppercase; color:#000dda;"><?php echo $this->session->userdata['full_name']; ?></h1>
<p>today is <?= date('j F, Y')?></p>
<!-- end greetings -->
<!-- Slider Statistik -->

<div class="row">
	<div class="col-lg-12">
		<div class="row justify-content-between align-items-center">
			<div class="col-md-4">
				<h4>Statistik Polda</h4>
			</div>
			<div class="col-md-3">
				<p style="color: red; margin-bottom:0;"><?= ucwords('last update ' . date('j F, Y'))  ?></p>
			</div>
		</div>
		<div class="row">
			<div class="swiper mySwiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="card" style="border-radius: 5px !important; background-color:#11347A">
							<div class="card-body">
								<div class="row justify-content-between align-items-center" style="height: 80px;">
									<div class="col-xxl-9 col-xl-8 col-lg-8 col-md-7 col-sm-3 col-4">
										<h4 class="text-wrap fw-light text-light">Total Pelanggaran</h4>
										<h5 class="text-wrap fw-light text-light">Lalu Lintas</h5>
										<h2 class="text-white"><?= $data['pelanggaran']['jumlah'] ?></h2>
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
										<h4 class="text-wrap fw-light text-light">Total Kecelakaan</h4>
										<h5 class="text-wrap fw-light text-light">Lalu Lintas</h5>
										<h2 class="text-white"><?= $data['kecelakaan']['jumlah'] ?></h2>
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
										<h4 class="text-wrap fw-light text-light">Total Kendaraan</h4>
										<h5 class="text-wrap fw-light text-light">Bermotor</h5>
										<h2 class="text-white"><?= $data['ranmor']['jumlah'] ?></h2>
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
										<h4 class="text-wrap fw-light text-light">Total Jumlah</h4>
										<h5 class="text-wrap fw-light text-light">SIM</h5>
										<h2 class="text-white"><?= $data['sim']['jumlah'] ?></h2>
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
										<h4 class="text-wrap fw-light text-light">Total Jumlah</h4>
										<h5 class="text-wrap fw-light text-light">STNK</h5>
										<h2 class="text-white"><?= $data['stnk']['jumlah'] ?></h2>
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
										<h4 class="text-wrap fw-light text-light">Total Dikmas</h4>
										<h5 class="text-wrap fw-light text-light">Lantas</h5>
										<h2 class="text-white"><?= $data['dikmaslantas']['jumlah'] ?></h2>
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
										<h4 class="text-wrap fw-light text-light">Total Penyebaran/</h4>
										<h5 class="text-wrap fw-light text-light">Pemasangan</h5>
										<h2 class="text-white"><?= $data['penyebaran_pemasangan']['jumlah'] ?></h2>
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
		</div>
	</div>
</div>

<!-- end slider statistik  -->


<div class="row">
	<div class="col-md-12">
		<h4>DIREKTORAT LANTAS POLDA</h4>
	</div>
	<!-- grafik ditgakkum -->
    <div class="col-md-7">
        <div class="card shadow-sm">
            <div class="card-header bg-transparent border-bottom text-uppercase m-3 p-0">
                <h5>DITGAKKUM POLDA</h5>
            </div>
            <div>
                <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                    <div class="main-chart">
                        <div id="chart" style="width: 90vw"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end grafik ditgakkum -->
	<div class="col-md-5">
		<div class="row">
			<div class="card">
				<div class="card-header bg-transparent border-bottom text-uppercase m-3 p-0">
					<h5>DATA NASIONAL TRIPON HARIAN</h5>
					<p class="fw-bold" style="text-transform:capitalize">Per Jenis Kendaraan</p>
				</div>
				<div class="card-body m-0 p-0">
					<div class="main-chart">
						<div id="chart3"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="card">
				<div class="card-header bg-transparent border-bottom text-uppercase m-3 p-0">
					<h5>DATA NASIONAL TRIPON HARIAN</h5>
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
<div class="row">
	<!-- grafik ditregident -->
    <div class="col-md-7">
        <div class="card shadow-sm">
            <div class="card-header bg-transparent border-bottom text-uppercase m-3 p-0">
                <h5>DITREGIDENT POLDA</h5>
            </div>
            <div>
                <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                    <div class="main-chart">
                        <div id="chart5" style="width: 50vw"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div class="col-md-5">
		<div class="card">
			<div class="card-header bg-transparent border-bottom text-center text-uppercase m-3 p-0">
				<h5>TroubleSpot Terkini</h5>
			</div>
			<div class="card-body">
				<div style="overflow-x: auto;scrollbar-width: thin;">
					<table id="datatable" class="table dt-responsive text-center table-bordered w-100">
						<thead class="table-primary" style="vertical-align : middle;text-align:center;">
							<tr>
								<th>Daerah</th>
								<th>Lokasi</th>
								<th>TIndakan</th>
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
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<script>

    var polres_ditgakkum = JSON.parse('<?= json_encode($data['ditgakkum']['polres_ditgakkum']); ?>');
    var lakalantas = JSON.parse('<?= json_encode($data['ditgakkum']['lakalantas']); ?>');
    var lakalanggar = JSON.parse('<?= json_encode($data['ditgakkum']['lakalanggar']); ?>');
    var garlantas = JSON.parse('<?= json_encode($data['ditgakkum']['garlantas']); ?>');
    var turjagwali = JSON.parse('<?= json_encode($data['ditgakkum']['turjagwali']); ?>'); 


    var polres_ditregident = JSON.parse('<?= json_encode($data['ditregident']['polres_ditregident']); ?>');
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

    var getDataTable;
	$(document).ready(function() {
        getDataTable = $('#datatable').DataTable({ 
            responsive: true,  
            scrollX: true, 
            // sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>', 
            // buttons: ["excel", "csv", "pdf"], 
            oLanguage: { 
                sSearch: 'Search:'

            },
        });

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
                categories: polres_ditgakkum,
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


		// var options_ditkamsel = {
		// 	series: [{
		// 		name: 'Dikmas Lantas',
		// 		type: 'column',
		// 		data: [706],
		// 		color: "#003A91"
		// 	}, {
		// 		name: 'Penyabaran/Pemasangan',
		// 		type: 'column',
		// 		data: [65],
		// 		color: "#3CA55C"
		// 	}, ],
		// 	chart: {
		// 		height: 555,
		// 		type: 'line',
		// 		stacked: false
		// 	},
		// 	plotOptions: {
		// 		bar: {
		// 			horizontal: false,
		// 			columnWidth: '80%',
		// 			endingShape: 'rounded',
		// 			dataLabels: {
		// 				position: 'top'
		// 			}
		// 		},
		// 	},
		// 	dataLabels: {
		// 		enabled: true,
		// 		offsetY: -15,
		// 		style: {
		// 			fontSize: '9px'
		// 		},
		// 		background: {
		// 			enabled: false,

		// 		},
		// 	},

		// 	stroke: {
		// 		show: true,
		// 		width: [1, 1, 4, 4],
		// 		colors: ['transparent']
		// 	},
		// 	xaxis: {
		// 		categories: ['POLRES BOGOR'],
		// 	},
		// 	yaxis: [{
		// 		axisTicks: {
		// 			show: false,
		// 		},
		// 		axisBorder: {
		// 			show: false,
		// 			color: '#008FFB'
		// 		},
		// 		labels: {
		// 			style: {
		// 				colors: '#008FFB',
		// 			}
		// 		},
		// 		tooltip: {
		// 			enable: false
		// 		}
		// 	}, ],
		// };

		// var ditkamsel = new ApexCharts(document.querySelector("#chart2"), options_ditkamsel);
		// ditkamsel.render();

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
                    columnWidth: '70%',
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
                categories: polres_ditregident
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
