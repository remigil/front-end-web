<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Daftar <?= $title; ?></li>
    </ol>
</nav>


<section>
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle text-start" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #ffffff;color:black; width:350px">
            Filter<i class="fas fa-filter" style="float: right;"></i>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <div class="row text-center m-3">
                <div class="col-md-6">
                    <h6>Wilayah</h6>
                    <div class="form-group">
                        <select class="form-select">
                            <option>Polda</option>
                            <option>Semua Polda</option>
                            <option>Aceh</option>
                            <option>Sumatera Utara</option>
                            <option>Sumatera Selatan</option>
                        </select>
                    </div>
                    <div class="form-group mt-1">
                        <select class="form-select">
                            <option>Polres</option>
                            <option>Semua Polres</option>
                            <option>Jakarta Pusat</option>
                            <option>Jakarta Utara</option>
                            <option>Jakata Barat</option>
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
