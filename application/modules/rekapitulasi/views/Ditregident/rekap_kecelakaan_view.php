<!-- Page -->

<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Daftar <?= $title; ?></li>
    </ol>
</nav>
<!-- </div> -->

<!-- data statistik -->
<section class="shadow-sm">
    <div class="card rounded">
        <!-- title & last update -->
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
        <!-- end title & last update -->
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="card-body blue-card">
                        <div class="row align-items-center text-center">
                            <div class="col-md-6">
                                <h4 class="text-light fw-light">Total laka</h4>
                            </div>
                            <div class="col-md-6">
                                <h1 class="text-center blue-card-text"><?= $data['kecelakaan']['jumlah'] ?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body red-card mt-2">
                        <div class="row align-items-center text-center">
                            <div class="col-md-6 rounded">
                                <h4 class="text-light d-inline fw-light">Meninggal Dunia</h4>
                            </div>
                            <div class="col-md-6">
                                <h1 class="red-card-text"><?= $data['kecelakaan']['meninggal_dunia'] ?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body green-card mt-2">
                        <div class="row align-items-center text-center">
                            <div class="col-md-6 text-wrap">
                                <h4 class="text-light fw-light">Luka Berat</h4>
                            </div>
                            <div class="col-md-6">
                                <h1 class="green-card-text text-center"><?= $data['kecelakaan']['luka_berat'] ?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body yellow-card mt-2">
                        <div class="row align-items-center text-center">
                            <div class="col-md-6 text-wrap">
                                <h4 class="text-light fw-light">Luka Ringan</h4>
                            </div>
                            <div class="col-md-6">
                                <h1 class="yellow-card-text text-center"><?= $data['kecelakaan']['luka_ringan'] ?></h1>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-8">
                    <div class="top-five-headline">
                        <h2 class="text-center">10 RANGKING LAKA LANTAS TERTINGGI</h2>
                    </div>
                    <div class="mt-5">
                        <table class="table table-bordered border-primary text-center" style="vertical-align:middle!important" width="100%">
                            <thead class="table-primary">
                                <tr class="text-white">
                                    <th scope="col">No</th>
                                    <th scope="col">Polda</th>
                                    <th scope="col">TOTAL LAKA</th>
                                    <th scope="col">KORBAN MD</th>
                                    <th scope="col">KORBAN LB</th>
                                    <th scope="col">KORBAN LR</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($data['kecelakaan']['topPolda'] as $key) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $key['name_polda'] ?></td>
                                        <td><?= $key['jumlah'] ?></td>
                                        <td><?= $key['meninggal_dunia'] ?></td>
                                        <td><?= $key['luka_berat'] ?></td>
                                        <td><?= $key['luka_ringan'] ?></td>
                                    </tr>
                                    <?php $i++; ?>
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
                    <h4 class="card-title mb-0">Data Kecelakaan Lalu Lintas Seluruh Indonesia</h4>
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
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Data Kerugian Material Seluruh Indonesia</h4>
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
                    <table id="tb_kecelakaan" class="table dt-responsive table-bordered nowrap w-100">
                        <thead class="table-primary text-center" style="vertical-align : middle;text-align:center;">
                            <tr>
                                <th>No</th>
                                <th>Polda</th>
                                <th>Jumlah Kecelakaan</th>
                                <th>MD</th>
                                <th>LB</th>
                                <th>LR</th>
                                <td>Kerugian Material</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($data['kecelakaan']['data_nasional'] as $key) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $key['name_polda'] ?></td>
                                    <td><?= $key['jumlah'] ?></td>
                                    <td><?= $key['meninggal_dunia'] ?></td>
                                    <td><?= $key['luka_berat'] ?></td>
                                    <td><?= $key['luka_ringan'] ?></td>
                                    <td><?= $key['kerugian_material'] ?></td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>


<script>
    $(document).ready(function() {

        $('#tb_kecelakaan').DataTable()
        $("#tb_kecelakaan_tahun").DataTable()

        var poldaName = JSON.parse('<?= json_encode($data['kecelakaan']['polda_name']); ?>');
        var polda_meninggal_dunia = JSON.parse('<?= json_encode($data['kecelakaan']['polda_meninggal_dunia']); ?>');
        var polda_luka_berat = JSON.parse('<?= json_encode($data['kecelakaan']['polda_luka_berat']); ?>');
        var polda_luka_ringan = JSON.parse('<?= json_encode($data['kecelakaan']['polda_luka_ringan']); ?>');
        var polda_kerugian_material = JSON.parse('<?= json_encode($data['kecelakaan']['polda_kerugian_material']); ?>');
        var polda_jumlah = JSON.parse('<?= json_encode($data['kecelakaan']['polda_jumlah']); ?>');


        // Data laka nasional
        var options_laka = {
            series: [{
                name: 'Jumlah',
                type: 'column',
                data: polda_jumlah,
                color: "#11347A"
            }, {
                name: 'Meninggal Dunia',
                type: 'column',
                data: polda_meninggal_dunia,
                color: "#CB2D3E"
            }, {
                name: 'Luka Berat',
                type: 'column',
                data: polda_luka_berat,
                color: "#E8D42F"
            }, {
                name: 'Luka Ringan',
                type: 'column',
                data: polda_luka_ringan,
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

        var dakgar_laka = new ApexCharts(document.querySelector("#chart"), options_laka);
        dakgar_laka.render();


        // Data Kerugian material
        var options_kerugian_material = {
            series: [{
                name: 'Kerugian Material',
                data: polda_kerugian_material,
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
                categories: poldaName
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

        var kerugian_material = new ApexCharts(document.querySelector("#chart2"), options_kerugian_material);
        kerugian_material.render();


    })
</script>
