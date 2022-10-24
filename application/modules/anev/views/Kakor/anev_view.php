<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
	<ol class="breadcrumb shadow-sm">
		<li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
		<li class="breadcrumb-item active fw-bold" aria-current="page">Daftar <?= $title; ?></li>
	</ol>
</nav>
<!-- </div> -->
<div class="row mt-3">
	<div class="col-md-12 d-flex">
		<div class="col-md-4">
			<label for="kategori" class="form-label"> KATEGORI ANEV</label>
			<div class="dropdown">
				<button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
					Anev Kecelakaan
				</button>
				<ul class="dropdown-menu">
					<li><a class="dropdown-item" href="#">Pertama</a></li>
					<li><a class="dropdown-item" href="#">Kedua</a></li>
					<li><a class="dropdown-item" href="#">Ketiga</a></li>
				</ul>
			</div>
		</div>

		<div class="col-md-6">
			<label for="waktu" class="form-label"> WAKTU</label>
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
	</div>

</div>
</div>
<div class="row mt-3 col-md-12">
	<div class="top-five-headline">
		<h2 class="text-center">LAPORAN HARIAN ANEV KORBAN LAKA LANTAS</h2>
	</div>
</div>


<div class="row">
	<div class="col-md-12 mt-3">
		<div class="card shadow-sm">
			<div class="card-header bg-transparent border-bottom text-uppercase m-3 p-0">
				<h5 style="text-align: center; color: grey;">Data Grafik Top 10 Polda Laporan Harian Anev 2022</h5>
			</div>
			<div>
				<div class="card-body" style="overflow:hidden; overflow-x:scroll">
					<div class="main-chart">
						<div id="chart" style="width: 80vw"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-7">

		<div class="card">
			<div class="card-header">
				<h4 class="card-title mb-0">DATA DAKGAR LANTAS - CAPTURE CAMERA</h4>
			</div>
			<div class="card-body" style="overflow:hidden; overflow-x:scroll">
				<div class="main-chart">
					<div id="chart2" style="width: 30vw; margin-left:auto; margin-right:auto; display:block;"></div>
				</div>
				<div>
					<text style="font-style: bold;">Keterangan :</text>
				</div>
				<div>
					<table style="margin-left:auto;margin-right:auto">
						<thead>
							<tr>
								<th style="width: 8vw;">Selasa, 18-10-2022</th>
								<th style="width: 5vw;"></th>
								<th style="width: 8vw;">Rabu, 19-10-2022</th>
								<th style="width: 5vw;"></th>
								<th style="width: 5vw;">Angka</th>
								<th style="width: 5vw;">Presentase</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<div class="d-flex">
										<div class="box1 align-self-center" style="width: 10px; height: 10px; background: blue;">
										</div>
										<div class="ms-2">
											<text>Total Laka</text>
										</div>
									</div>
								</td>
								<td>143</td>
								<td>
									<div class="d-flex">
										<div class="box1 align-self-center" style="width: 10px; height: 10px; background: blue;">
										</div>
										<div class="ms-2">
											<text>Total Laka</text>
										</div>
									</div>
								</td>
								<td>29</td>
								<td style="color: blue;">29</td>
								<td>-5%</td>
							</tr>
							<tr>
								<td>
									<div class="d-flex">
										<div class="box1 align-self-center" style="width: 10px; height: 10px; background: red;">
										</div>
										<div class="ms-2">
											<text>Meninggal Dunia</text>
										</div>
									</div>
								</td>
								<td>5</td>
								<td>
									<div class="d-flex">
										<div class="box1 align-self-center" style="width: 10px; height: 10px; background: red;">
										</div>
										<div class="ms-2">
											<text>Meninggal Dunia</text>
										</div>
									</div>
								</td>
								<td>5</td>
								<td style="color: blue;">5</td>
								<td>76%</td>
							</tr>
							<tr>
								<td>
									<div class="d-flex">
										<div class="box1 align-self-center" style="width: 10px; height: 10px; background: yellow;">
										</div>
										<div class="ms-2">
											<text>Luka Berat</text>
										</div>
									</div>
								</td>
								<td>6</td>
								<td>
									<div class="d-flex">
										<div class="box1 align-self-center" style="width: 10px; height: 10px; background: yellow;">
										</div>
										<div class="ms-2">
											<text>Luka Berat</text>
										</div>
									</div>
								</td>
								<td>10</td>
								<td style="color: blue;">10</td>
								<td>80%</td>
							</tr>
							<tr>
								<td>
									<div class="d-flex">
										<div class="box1 align-self-center" style="width: 10px; height: 10px; background: green;">
										</div>
										<div class="ms-2">
											<text>Luka Ringan</text>
										</div>
									</div>
								</td>
								<td>101</td>
								<td>
									<div class="d-flex">
										<div class="box1 align-self-center" style="width: 10px; height: 10px; background: green;">
										</div>
										<div class="ms-2">
											<text>Luka Ringan</text>
										</div>
									</div>
								</td>
								<td>35</td>
								<td style="color: blue;">35</td>
								<td>30%</td>
							</tr>
						</tbody>
					</table>
				</div>
				</section>
			</div>
		</div>
	</div>
	<div class="col-md-5">
		<section class="shadow-sm">
			<div class="row">
				<div class="col-xl-12">
					<div class="card">
						<div class="card-header">
							<h4 class="card-title mb-0">DATA DAKGAR LANTAS - CAPTURE CAMERA</h4>
						</div>
						<div class="card-body" style="overflow:hidden; overflow-x:scroll;">
							<div class="main-chart">
								<div id="chart3" style="width: 15vw; margin-left:auto; margin-right:auto; display:block;"></div>
							</div>
							<div>
								<text style="font-style: bold;">Keterangan :</text>
							</div>
							<div>
								<table style="margin-left:auto;margin-right:auto">
									<thead>
										<tr>
											<th style="width: 8vw;">Selasa, 18-10-2022</th>
											<th style="width: 5vw;"></th>
											<th style="width: 8vw;">Rabu, 19-10-2022</th>
											<th style="width: 5vw;"></th>
											<th style="width: 5vw;">Angka</th>
											<th style="width: 5vw;">Presentase</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="d-flex">
													<div class="box1 align-self-center" style="width: 10px; height: 10px; background: blue;">
													</div>
													<div class="ms-2">
														<text>Material Loss</text>
													</div>
												</div>
											</td>
											<td>143</td>
											<td>
												<div class="d-flex">
													<div class="box1 align-self-center" style="width: 10px; height: 10px; background: blue;">
													</div>
													<div class="ms-2">
														<text>Material Loss</text>
													</div>
												</div>
											</td>
											<td>29</td>
											<td style="color: blue;">29</td>
											<td>-5%</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>

<div class="col-mt-5">
	<div class="row mt-5 col-md-12">
		<div class="top-five-headline">
			<h2 class="text-center">LAPORAN HARIAN ANEV DATA DAKGAR</h2>
		</div>
	</div>

	<div class="col-md-8 mt-3" style="height: 100%;">
		<label for="waktu" class="form-label" style="size: 20;"> Waktu</label>
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

		<div class="card">
			<div class="card-header">
				<h4 class="card-title mb-0">DATA DAKGAR LANTAS - CAPTURE CAMERA</h4>
			</div>
			<div class="card-body" style="overflow:hidden; overflow-x:scroll">
				<div class="main-chart">
					<div id="chart4" style="width: 30vw; position:sticky"></div>
				</div>
				<div>
					<text style="font-style: bold;">Keterangan :</text>
				</div>
				<div style="position:center">
					<table>
						<thead>
							<tr>
								<th style="width: 5vw;">Selasa, 18-10-2022</th>
								<th style="width: 5vw;"></th>
								<th style="width: 5vw;">Rabu, 19-10-2022</th>
								<th style="width: 5vw;"></th>
								<th style="width: 5vw;">Angka</th>
								<th style="width: 5vw;">Presentase</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<div class="box1" style="width: 10px; height: 10px; background: blue;">
									</div>
								</td>
								<td>143</td>
								<td>
									<div class="box1" style="width: 10px; height: 10px; background: blue;">
									</div>
								</td>
								<td>29</td>
								<td style="color: blue;">29</td>
								<td>-5%</td>
							</tr>
							<tr>
								<td>
									<div class="box2" style="width: 10px; height: 10px; background: red;">
									</div>
								</td>
								<td>5</td>
								<td>
									<div class="box2" style="width: 10px; height: 10px; background: red;">
									</div>
								</td>
								<td>5</td>
								<td style="color: blue;">5</td>
								<td>76%</td>
							</tr>
							<tr>
								<td>
									<div class="box2" style="width: 10px; height: 10px; background: yellow;">
									</div>
								</td>
								<td>6</td>
								<td>
									<div class="box2" style="width: 10px; height: 10px; background: yellow;">
									</div>
								</td>
								<td>10</td>
								<td style="color: blue;">10</td>
								<td>80%</td>
							</tr>
							<tr>
								<td>
									<div class="box2" style="width: 10px; height: 10px; background: green;">
									</div>
								</td>
								<td>101</td>
								<td>
									<div class="box2" style="width: 10px; height: 10px; background: green;">
									</div>
								</td>
								<td>35</td>
								<td style="color: blue;">35</td>
								<td>30%</td>
							</tr>
						</tbody>
					</table>
				</div>
				</section>
			</div>
		</div>
	</div>

	<div class="page mt-5">
		<table id="datatable" class="table table-bordered border-secondary text-center" style="vertical-align:middle!important" width="100%">
			<thead class="table-info">
				<tr class="text-grey">
					<th scope="col" rowspan="2">No</th>
					<th scope="col" rowspan="2" style="width: 30%;">Uraian</th>
					<th scope="col" colspan="2">Waktu</th>
					<th scope="col" colspan="2">Trend</th>
					<th scope="col" rowspan="2">Keterangan</th>
					<th scope="col" rowspan="2">Laporan Anev</th>
				</tr>
				<tr>
					<th>Selasa, 18-10-2022</th>
					<th>Rabu, 19-10-2022</th>
					<th>Angka</th>
					<th>Presentase</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">1</th>
					<td>test</td>
					<td>test</td>
					<td>test</td>
					<td>test</td>
					<td>test</td>
					<td>test</td>
					<td>test</td>
				</tr>
				<tr>
					<th scope="row">1</th>
					<td>test</td>
					<td>test</td>
					<td>test</td>
					<td>test</td>
					<td>test</td>
					<td>test</td>
					<td>test</td>
				</tr>
				<tr>
					<th scope="row">1</th>
					<td>test</td>
					<td>test</td>
					<td>test</td>
					<td>test</td>
					<td>test</td>
					<td>test</td>
					<td>test</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>


<script>
	$(document).ready(function() {
		var options_ditgakkum = {
			series: [{
				name: '1 Oktober 2022',
				type: 'column',
				data: [706, 801, 309, 225, 60, 146, 900, 186, 71, 199],
				color: "#003A91"
			}, {
				name: '2 Oktober 2022',
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
				categories: ['POLDA METRO JAYA', 'POLDA JABAR', 'POLDA JATENG', 'POLDA JATIM', 'POLDA BALI', 'POLDA BANTEN', 'POLDA SUMBAR', 'POLDA LAMPUNG', 'POLDA ACEH', 'POLDA KALBAR'],
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
				name: 'Total Kecelakaan',
				type: 'column',
				data: [706, 801],
				color: "#003A91"
			}, {
				name: 'Meninggal Dunia',
				type: 'column',
				data: [65, 120],
				color: "#CB2D3E"
			}, {
				name: 'Luka Berat',
				type: 'column',
				data: [89, 678],
				color: "#E8D42F"
			}, {
				name: 'Luka Ringan',
				type: 'column',
				data: [890, 171],
				color: "#3CA55C"
			}],
			chart: {
				height: 500,
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
				categories: ['METRO JAYA', 'JAWA BARAT'],
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
				name: 'Total Material Loss',
				type: 'column',
				data: [706, 801],
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
				categories: ['Selasa, 18-10-2022', 'Rabu, 19-10-2022'],
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
				name: 'Jumlah Dakgar',
				type: 'column',
				data: [706, 801],
				color: "#003A91"
			}, {
				name: 'Gar Berat',
				type: 'column',
				data: [65, 120],
				color: "#CB2D3E"
			}, {
				name: 'Gar Sedang',
				type: 'column',
				data: [89, 678],
				color: "#E8D42F"
			}, {
				name: 'Gar Ringan',
				type: 'column',
				data: [890, 171],
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
				categories: ['Selasa, 18-10-2022', 'Rabu, 19-10-2022'],
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