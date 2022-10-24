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
                <!-- statistik -->
                <div class="col-md-4">
                    <div class="card-body blue-card">
                        <div class="row align-items-center text-center">
                            <div class="col-md-6">
                                <h4 class="text-light fw-light">Capture Kamera</h4>
                            </div>
                            <div class="col-md-6">
                                <!-- <h1 class="text-center blue-card-text"><?= $data['capture_camera'] ?></h1> -->
                                <h1>capture camera</h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body red-card mt-2">
                        <div class="row align-items-center text-center">
                            <div class="col-md-6 rounded">
                                <h4 class="text-light d-inline fw-light">Validasi Petugas</h4>
                            </div>
                            <div class="col-md-6">
                                <!-- <h1 class="red-card-text"><?= $data['validasi_petugas'] ?></h1> -->
                                <h1 class="red-card-text">validasi petugas</h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body green-card mt-2">
                        <div class="row align-items-center text-center">
                            <div class="col-md-6 text-wrap">
                                <h4 class="text-light fw-light">Konfirmasi Masyarakat</h4>
                            </div>
                            <div class="col-md-6">
                                <!-- <h1 class="green-card-text text-center"><?= $data['konfirmasi_masyarakat'] ?></h1> -->
                                <h1 class="green-card-text text-center">konfirmasi</h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body yellow-card mt-2">
                        <div class="row align-items-center text-center">
                            <div class="col-md-6 text-wrap">
                                <h4 class="text-light fw-light">ODOL</h4>
                            </div>
                            <div class="col-md-6">
                                <!-- <h1 class="yellow-card-text text-center"><?= $data['odol'] ?></h1> -->
                                <h1 class="yellow-card-text text-center">odol</h1>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end statistik -->

                <!-- rangking statistik -->
                <div class="col-md-8">
                    <div class="top-five-headline">
                        <h2 class="text-center">10 RANGKING DAKGAR LANTAS TERTINGGI</h2>
                    </div>
                    <div class="mt-5">
                        <table class="table table-bordered border-primary text-center" style="vertical-align:middle!important" width="100%">
                            <thead class="table-primary">
                                <tr class="text-white">
                                    <th scope="col">No</th>
                                    <th scope="col">POLDA</th>
                                    <th scope="col">Capture Camera</th>
                                    <th scope="col">Validasi Petugas</th>
                                    <th scope="col">Konfirmasi Masyarakat</th>
                                    <th scope="col">ODOL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1 ?>
                                <?php foreach ($data['topPolda'] as $key) : ?>
                                    <?php
                                    $validasi_petugas = $key['statis'] + $key['mobile'];
                                    $konfirmasi_masyarakat = $key['posko'] + $key['online'];
                                    $odol = $key['preemtif'] + $key['preventif'] + $key['odol_227'] + $key['odol_307']

                                    ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $key['name_polda'] ?></td>
                                        <td><?= $key['capture_camera'] ?></td>
                                        <td><?= $validasi_petugas ?></td>
                                        <td><?= $konfirmasi_masyarakat ?></td>
                                        <td><?= $odol ?></td>
                                    </tr>
                                    <?php $i++ ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- end rangking statistik -->
            </div>
        </div>
    </div>
</section>
<!-- end data statistik -->

<!-- filter data -->
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
<!-- end filter data -->

<!-- chart -->
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
<section class="shadow-sm mt-5">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">DATA DAKGAR LANTAS - VALIDASI PETUGAS</h4>
                </div>
                <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                    <div class="main-chart">
                        <div id="chart2" style="width: 350vw"></div>
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
                    <h4 class="card-title mb-0">DATA DAKGAR LANTAS - KONFIRMASI MASYARAKAT</h4>
                </div>
                <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                    <div class="main-chart">
                        <div id="chart3" style="width: 350vw"></div>
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
                    <h4 class="card-title mb-0">DATA DAKGAR LANTAS - ODOL</h4>
                </div>
                <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                    <div class="main-chart">
                        <div id="chart4" style="width: 350vw"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end chart -->

<!-- tabel data -->
<section class="shadow-sm mt-5">
    <div class="row">
        <div class="col-xl-12">
            <div class="card mt-3">
                <div class="card-body">
                    <table id="tb_dakgar_lantas" class="table dt-responsive table-bordered nowrap w-100">
                        <thead class="table-primary text-center" style="vertical-align : middle;text-align:center;">
                            <tr>
                                <th rowspan="2">No</th>
                                <th rowspan="2">Polda</th>
                                <th rowspan="2">Jumlah Capture Camera</th>
                                <th colspan="3">JUMLAH VALIDASI PETUGAS</th>
                                <th colspan="3">JUMLAH KONFIRMASI MASYARAKAT</th>
                                <th colspan="4">ODOL</th>
                            </tr>
                            <tr>
                                <td>STATIS</td>
                                <td>MOBILE</td>
                                <td>TOTAL</td>
                                <td>ONLINE</td>
                                <td>POSKO</td>
                                <td>TOTAL</td>
                                <td>PREEMTIF</td>
                                <td>PRE-VENTIF</td>
                                <td>227</td>
                                <td>307</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($data['polda'] as $key) : ?>
                                <?php $validasi_petugas = $key['statis'] + $key['mobile'];
                                $konfirmasi_masyarakat = $key['posko'] + $key['online'];
                                ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $key['name_polda'] ?></td>
                                    <td><?= $key['capture_camera'] ?></td>
                                    <td><?= $key['statis'] ?></td>
                                    <td><?= $key['mobile'] ?></td>
                                    <td><?= $validasi_petugas ?></td>
                                    <td><?= $key['online'] ?></td>
                                    <td><?= $key['posko'] ?></td>
                                    <td><?= $konfirmasi_masyarakat ?></td>
                                    <td><?= $key['preemtif'] ?></td>
                                    <td><?= $key['preventif'] ?></td>
                                    <td><?= $key['odol_227'] ?></td>
                                    <td><?= $key['odol_307'] ?></td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- end tabel data -->

<!-- chart tahun -->
<section class="shadow-sm mt-5">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">DATA DAKGAR LANTAS - CAPTURE CAMERA - TAHUN <b><?= date('Y') ?></b></h4>
                </div>
                <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                    <div class="main-chart">
                        <div id="chart5" style="width: 100vw"></div>
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
                    <h4 class="card-title mb-0">DATA DAKGAR LANTAS - VALIDASI PETUGAS - TAHUN <b><?= date('Y') ?></h4>
                </div>
                <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                    <div class="main-chart">
                        <div id="chart6" style="width: 100vw"></div>
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
                    <h4 class="card-title mb-0">DATA DAKGAR LANTAS - KONFIRMASI MASYARAKAT - TAHUN <b><?= date('Y') ?></h4>
                </div>
                <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                    <div class="main-chart">
                        <div id="chart7" style="width: 100vw"></div>
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
                    <h4 class="card-title mb-0">DATA DAKGAR LANTAS - ODOL - TAHUN <b><?= date('Y') ?></h4>
                </div>
                <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                    <div class="main-chart">
                        <div id="chart8" style="width: 100vw"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end chart tahun -->

<!-- tabel data per tahun -->
<section class="shadow-sm mt-5">
    <div class="row">
        <div class="col-xl-12">
            <div class="card mt-3">
                <div class="card-body">
                    <table id="tb_dakgar_lantas_tahun" class="table dt-responsive table-bordered nowrap w-100">
                        <thead class="table-primary text-center" style="vertical-align : middle;text-align:center;">
                            <tr>
                                <th rowspan="2">No</th>
                                <th rowspan="2">Polda</th>
                                <th rowspan="2">Jumlah Capture Camera</th>
                                <th colspan="3">JUMLAH VALIDASI PETUGAS</th>
                                <th colspan="3">JUMLAH KONFIRMASI MASYARAKAT</th>
                                <th colspan="4">ODOL</th>
                            </tr>
                            <tr>
                                <td>STATIS</td>
                                <td>MOBILE</td>
                                <td>TOTAL</td>
                                <td>ONLINE</td>
                                <td>POSKO</td>
                                <td>TOTAL</td>
                                <td>PREEMTIF</td>
                                <td>PRE-VENTIF</td>
                                <td>227</td>
                                <td>307</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($data['poldaMonth'] as $key) : ?>
                                <?php $validasi_petugas = $key['statis'] + $key['mobile'];
                                $konfirmasi_masyarakat = $key['posko'] + $key['online'];
                                ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $key['date'] ?></td>
                                    <td><?= $key['capture_camera'] ?></td>
                                    <td><?= $key['statis'] ?></td>
                                    <td><?= $key['mobile'] ?></td>
                                    <td><?= $validasi_petugas ?></td>
                                    <td><?= $key['online'] ?></td>
                                    <td><?= $key['posko'] ?></td>
                                    <td><?= $konfirmasi_masyarakat ?></td>
                                    <td><?= $key['preemtif'] ?></td>
                                    <td><?= $key['preventif'] ?></td>
                                    <td><?= $key['odol_227'] ?></td>
                                    <td><?= $key['odol_307'] ?></td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- end tabel data per tahun -->