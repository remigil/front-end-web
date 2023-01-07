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
	<div class="col-md-6">
		<form action="" method="post" id="form_filter">
			<label for="waktu" class="form-label"> Filter</label>
			<div class="row">
				<div class="col-md-3">
					<input class="form-control" type="date" name="start_date" id="waktu">
				</div>
				<div class="col-md-3">
					<input class="form-control" type="date" name="end_date" id="waktu">
				</div>
				<div class="col-md-3">
					<button class="btn btn-primary">Tampilkan</button>
				</div>
			</div>
		</form>
	</div>

	<div class="col-md-6">
		<form action="" method="post" id="form_download_anev">
			<div class="row no-gutters">
				<label for="waktu" class="form-label">Download File Anev</label>
				<div class="col-md-3">
					<div class="form-group row">
						<select class="form-control" id="type_anev" name="type_anev">
							<option value="">---Pilih Anev---</option>
							<option value="1">Harian</option>
							<option value="2">Bulanan</option>
						</select>
					</div>
				</div>
				<div class="col-md-4" id="form_type_anev">
				</div>
				<div class="col-md-2">
					<a href="" class="btn btn-primary" type="button" id="btn_download_anev">Download</a>
				</div>
			</div>
		</form>
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
				<h4 class="card-title mb-0"></h4>
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
								<th style="width: 8vw;">Kamis, 24-11-2022</th>
								<th style="width: 5vw;"></th>
								<th style="width: 8vw;">Jum'at, 25-11-2022</th>
								<th style="width: 5vw;"></th>
								<th style="width: 5vw;">Angka</th>
								<th style="width: 5vw;">Presentase</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<div class="d-flex">
										<div class="box1 align-self-center" style="width: 10px; height: 10px; background: #11347A;">
										</div>
										<div class="ms-2">
											<text>Total Laka</text>
										</div>
									</div>
								</td>
								<td>143</td>
								<td>
									<div class="d-flex">
										<div class="box1 align-self-center" style="width: 10px; height: 10px; background: #11347A;">
										</div>
										<div class="ms-2">
											<text>Total Laka</text>
										</div>
									</div>
								</td>
								<td>29</td>
								<td style="color: blue;">-144</td>
								<td>-80%</td>
							</tr>
							<tr>
								<td>
									<div class="d-flex">
										<div class="box1 align-self-center" style="width: 10px; height: 10px; background: #CB2D3E;">
										</div>
										<div class="ms-2">
											<text>Meninggal Dunia</text>
										</div>
									</div>
								</td>
								<td>5</td>
								<td>
									<div class="d-flex">
										<div class="box1 align-self-center" style="width: 10px; height: 10px; background: #CB2D3E;">
										</div>
										<div class="ms-2">
											<text>Meninggal Dunia</text>
										</div>
									</div>
								</td>
								<td>5</td>
								<td style="color: blue;">0</td>
								<td>0%</td>
							</tr>
							<tr>
								<td>
									<div class="d-flex">
										<div class="box1 align-self-center" style="width: 10px; height: 10px; background: #E8D42F;">
										</div>
										<div class="ms-2">
											<text>Luka Berat</text>
										</div>
									</div>
								</td>
								<td>6</td>
								<td>
									<div class="d-flex">
										<div class="box1 align-self-center" style="width: 10px; height: 10px; background: #E8D42F;">
										</div>
										<div class="ms-2">
											<text>Luka Berat</text>
										</div>
									</div>
								</td>
								<td>10</td>
								<td style="color: blue;">4</td>
								<td>67%</td>
							</tr>
							<tr>
								<td>
									<div class="d-flex">
										<div class="box1 align-self-center" style="width: 10px; height: 10px; background: #3CA55C;">
										</div>
										<div class="ms-2">
											<text>Luka Ringan</text>
										</div>
									</div>
								</td>
								<td>101</td>
								<td>
									<div class="d-flex">
										<div class="box1 align-self-center" style="width: 10px; height: 10px; background: #3CA55C;">
										</div>
										<div class="ms-2">
											<text>Luka Ringan</text>
										</div>
									</div>
								</td>
								<td>35</td>
								<td style="color: blue;">-66</td>
								<td>-65%</td>
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
							<h4 class="card-title mb-0"></h4>
						</div>
						<div class="card-body" style="overflow:hidden; overflow-x:scroll;">
							<div class="main-chart">
								<div id="chart3" style="width: 15vw; margin-left:auto; margin-right:auto; display:block;"></div>
							</div>
							<div>
								<text style="font-style: bold;">Keterangan :</text>
							</div>
							<div>
								<table style="margin-left:auto; margin-right:auto;">
									<thead>
										<tr>
											<th style="width: 8vw;">Kamis, 24-11-2022</th>
											<th style="width: 5vw;"></th>
											<th style="width: 8vw;">Jum'at, 25-11-2022</th>
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
											<td style="color: blue;">-144</td>
											<td>-80%</td>
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

	<div class="page mt-5">
		<div class="card pt-4 pb-4">
			<div class="ms-4 me-4">
				<table id="datatable" class="table table-bordered text-center" style="width:100%;">
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
							<th>Kamis, 24-11-2022</th>
							<th>Jum'at, 25-11-2022</th>
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
				<h4 class="card-title mb-0"></h4>
			</div>
			<div class="card-body" style="overflow:hidden; overflow-x:scroll">
				<div class="main-chart">
					<div id="chart4" style="width: 30vw; margin-left:auto; margin-right:auto; display:block;"></div>
				</div>
				<div>
					<text style="font-style: bold;">Keterangan :</text>
				</div>
				<div>
					<table style="margin-left:auto;margin-right:auto">
						<thead>
							<tr>
								<th style="width: 8vw;">Kamis, 24-11-2022</th>
								<th style="width: 5vw;"></th>
								<th style="width: 8vw;">Jum'at, 25-11-2022</th>
								<th style="width: 5vw;"></th>
								<th style="width: 5vw;">Angka</th>
								<th style="width: 5vw;">Presentase</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<div class="d-flex">
										<div class="box1 align-self-center" style="width: 10px; height: 10px; background: #11347A;">
										</div>
										<div class="ms-2">
											<text>Jumlah Dakgar</text>
										</div>
									</div>
								</td>
								<td>143</td>
								<td>
									<div class="d-flex">
										<div class="box1 align-self-center" style="width: 10px; height: 10px; background: #11347A;">
										</div>
										<div class="ms-2">
											<text>Jumlah Dakgar</text>
										</div>
									</div>
								</td>
								<td>29</td>
								<td style="color: blue;">-144</td>
								<td>-80%</td>
							</tr>
							<tr>
								<td>
									<div class="d-flex">
										<div class="box1 align-self-center" style="width: 10px; height: 10px; background: #CB2D3E;">
										</div>
										<div class="ms-2">
											<text>Gar Berat</text>
										</div>
									</div>
								</td>
								<td>5</td>
								<td>
									<div class="d-flex">
										<div class="box1 align-self-center" style="width: 10px; height: 10px; background: #CB2D3E;">
										</div>
										<div class="ms-2">
											<text>Gar Berat</text>
										</div>
									</div>
								</td>
								<td>5</td>
								<td style="color: blue;">0</td>
								<td>0%</td>
							</tr>
							<tr>
								<td>
									<div class="d-flex">
										<div class="box1 align-self-center" style="width: 10px; height: 10px; background: #E8D42F;">
										</div>
										<div class="ms-2">
											<text>Gar Sedang</text>
										</div>
									</div>
								</td>
								<td>6</td>
								<td>
									<div class="d-flex">
										<div class="box1 align-self-center" style="width: 10px; height: 10px; background: #E8D42F;">
										</div>
										<div class="ms-2">
											<text>Gar Sedang</text>
										</div>
									</div>
								</td>
								<td>10</td>
								<td style="color: blue;">4</td>
								<td>67%</td>
							</tr>
							<tr>
								<td>
									<div class="d-flex">
										<div class="box1 align-self-center" style="width: 10px; height: 10px; background: #3CA55C;">
										</div>
										<div class="ms-2">
											<text>Gar Ringan</text>
										</div>
									</div>
								</td>
								<td>101</td>
								<td>
									<div class="d-flex">
										<div class="box1 align-self-center" style="width: 10px; height: 10px; background: #3CA55C;">
										</div>
										<div class="ms-2">
											<text>Gar Ringan</text>
										</div>
									</div>
								</td>
								<td>35</td>
								<td style="color: blue;">-66</td>
								<td>-65%</td>
							</tr>
						</tbody>
					</table>
				</div>
				</section>
			</div>
		</div>
	</div>

	<div class="page mt-5">
		<div class="card pt-4 pb-4">
			<div class="ms-4 me-4">
				<table id="datatable" class="table table-bordered text-center" style="width:100%;">
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
							<th>Kamis, 24-11-2022</th>
							<th>Jum'at, 25-11-2022</th>
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
				categories: ['Kamis, 24-11-2022', 'Jumat, 25-11-2022'],
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
				// offsetY: -15,
				style: {
					fontSize: '9px'
				},
				background: {
					enabled: false,

				},
			},

			stroke: {
				show: true,
				// width: [1, 1, 4, 4],
				colors: ['transparent']
			},
			xaxis: {
				categories: ['Kamis, 24-11-2022', 'Jumat, 25-11-2022'],
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

		// $('#datatable').DataTable({
		// 	scrollX: true,
		// });

	})


	$('#type_anev').on('change', function() {
		let type = $('#type_anev').val();
		console.log(type)

		if (type == 1) {
			$('#form_type_anev').html(`
				<div class="form-group row">
						<label for="date_anev" class="col-sm-4 col-form-label">Tanggal</label>
						<div class="col-sm-8">
							<input type="date" class="form-control" id="date_anev" name="date_anev">
						</div>
					</div>`)
		} else if (type == 2) {
			$('#form_type_anev').html(`
					<div class="form-group row">
						<label for="month_anev" class="col-sm-4 col-form-label">Bulan</label>
						<div class="col-sm-8">
							<input type="month" class="form-control" id="month_anev" name="month_anev">
						</div>
					</div>
			`)
		} else {
			$('#form_type_anev').html(``)
		}
	})

	$('#btn_download_anev').on('click', function(e) {
		e.preventDefault()
		let = '';
		let type = $('#type_anev').val()
		if (type == 1) {
			let date = $('#date_anev').val()
			url = `anev/getDaily?mode=pdf-download&date=${date}`
		} else if (type == 2) {
			let date = $('#month_anev').val();
			month = date.split('-');
			url = `anev/getMonthly?mode=pdf-download&month=${month[1]}&year=${month[0]}`;
		}

		window.open(
			`<?= ApiUrl() ?>${url}`,
			'_blank' // <- This is what makes it open in a new window.
		);

	})
</script>