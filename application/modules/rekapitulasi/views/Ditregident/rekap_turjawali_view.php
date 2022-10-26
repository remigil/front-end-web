<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Daftar <?= $title; ?></li>
    </ol>
</nav>
<!-- </div> -->
<section class="shadow-sm">
    <div class="card rounded">
        <div class="card-header card-headline">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2 class="text-white"><?= strtoupper($data['title'])  ?></h2>
                </div>
                <div class="col-md-6">
                    <p class="text-end mx-4 text-dark fs-6 fw-light"><?= ucwords('last update ' . date('j F, Y'))  ?></p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="card-body blue-card">
                        <div class="row align-items-center text-center">
                            <div class="col-md-6">
                                <h4 class="text-light fw-light">Pengaturan</h4>
                            </div>
                            <div class="col-md-6">
                                <h1 class="text-center blue-card-text"><?= $data['turjagwali']['pengaturan'] ?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body red-card mt-2">
                        <div class="row align-items-center text-center">
                            <div class="col-md-6 rounded">
                                <h4 class="text-light d-inline fw-light">Penjagaan</h4>
                            </div>
                            <div class="col-md-6">
                                <h1 class="red-card-text"><?= $data['turjagwali']['penjagaan'] ?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body green-card mt-2">
                        <div class="row align-items-center text-center">
                            <div class="col-md-6 text-wrap">
                                <h4 class="text-light fw-light">Pengawalan</h4>
                            </div>
                            <div class="col-md-6">
                                <h1 class="green-card-text text-center"><?= $data['turjagwali']['pengawalan'] ?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body yellow-card mt-2">
                        <div class="row align-items-center text-center">
                            <div class="col-md-6 text-wrap">
                                <h4 class="text-light fw-light">Patroli</h4>
                            </div>
                            <div class="col-md-6">
                                <h1 class="yellow-card-text text-center"><?= $data['turjagwali']['patroli'] ?></h1>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-8">
                    <div class="top-five-headline">
                        <h2 class="text-center">10 RANGKING TURJAGWALI</h2>
                    </div>
                    <div class="mt-5">
                        <table class="table table-bordered border-primary text-center" style="vertical-align:middle!important" width="100%">
                            <thead class="table-primary">
                                <tr class="text-white">
                                    <th scope="col">No</th>
                                    <th scope="col">Polda</th>
                                    <th scope="col">Pengaturan</th>
                                    <th scope="col">Penjagaan</th>
                                    <th scope="col">Pengawalan</th>
                                    <th scope="col">Patroli</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1 ?>
                                <?php foreach ($data['turjagwali']['topPolda'] as $key) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $key['name_polda'] ?></td>
                                        <td><?= $key['pengaturan'] ?></td>
                                        <td><?= $key['penjagaan'] ?></td>
                                        <td><?= $key['pengawalan'] ?></td>
                                        <td><?= $key['patroli'] ?></td>
                                    </tr>
                                    <?php $i++ ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="row mt-3">
<div class="col-md-12 d-flex">

		<div class="col-md-6">
			<div class="row">
				<div class="col-md-4">
					<label for="kategoriAnev" class="form-label">Wilayah</label>
					<select name="kategoriAnev" class="form-select" aria-label="Floating label select" style="width:100%" required>
						<option selected value="">Pilih Wilayah</option>
						<option value="">Polda 1</option>
						<option value="">Polda 2</option>
						
					</select>
				</div>
				<div class="col-md-8">
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
</div>

<section class="shadow-sm mt-5">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Data Turjawali Seluruh Indonesia</h4>
                </div>
                <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                    <div class="main-chart">
                        <div id="chart" style="width: 350vw"></div>
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
                    <table id="tb_turjagwali" class="table dt-responsive table-bordered nowrap w-100">
                        <thead class="table-primary text-center" style="vertical-align : middle;text-align:center;">
                            <tr>
                                <th>No</th>
                                <th>POLDA</th>
                                <th>Jumlah Data</th>
                                <th>Pengaturan</th>
                                <th>Penjagaan</th>
                                <th>Pengawalan</th>
                                <td>Patroli</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($data['turjagwali']['data_nasional'] as $key) : ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $key['name_polda'] ?></td>
                                    <td><?= $key['jumlah'] ?></td>
                                    <td><?= $key['pengaturan'] ?></td>
                                    <td><?= $key['penjagaan'] ?></td>
                                    <td><?= $key['pengawalan'] ?></td>
                                    <td><?= $key['patroli'] ?></td>
                                    <?php $i++ ?>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {

        $('#tb_turjagwali').DataTable()
        $('#tb_turjawali_tahun').DataTable()

        var poldaName = JSON.parse('<?= json_encode($data['turjagwali']['polda_name']); ?>');
        var polda_pengawalan = JSON.parse('<?= json_encode($data['turjagwali']['polda_pengawalan']); ?>');
        var polda_penjagaan = JSON.parse('<?= json_encode($data['turjagwali']['polda_penjagaan']); ?>');
        var polda_pengaturan = JSON.parse('<?= json_encode($data['turjagwali']['polda_pengaturan']); ?>');
        var polda_patroli = JSON.parse('<?= json_encode($data['turjagwali']['polda_patroli']); ?>');


        // Turjawali seluruh indonesia
        var options_turjawali = {
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

        var turjawali = new ApexCharts(document.querySelector("#chart"), options_turjawali);
        turjawali.render();

    })
</script>
