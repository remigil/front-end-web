<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Daftar <?= $title; ?></li>
    </ol>
</nav>
<!-- </div> -->
<div class="top-five-headline">
	<h2 class="text-center">LAPORAN HARIAN ANEV KORBAN LAKA LANTAS</h2>
</div>
<div class="row mt-3">
	<div class="col-md-6">
		<label for="waktu" class="form-label"> Waktu</label>
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
<div class="row">
	<div class="col-md-6">
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
	</div>
	<div class="col-md-6">
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
	</div>
</div>

<table class="table table-bordered border-primary text-center" style="vertical-align:middle!important" width="100%">
	<thead class="table-primary">
		<tr class="text-white">
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
	</tbody>
</table>
