<div class="container-fluid mt-5">
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="row mt-5">
                    <div class="col-md-9 align-self-center">
                        <div id="nama">
                            <h1 style="color:#007DD8 ; text-transform:uppercase;">Ditgakkum</h1>
                        </div>
                        <p>Today is <?= date('l, j F Y') ?></p>
                    </div>
                    <div class="col-md-3 text-end align-self-center">
                        <a href="http://34.143.227.90:3001/v1/laporan_harian/export_laphar" class="text-center"><button class="btn btn-outline-primary" style="width: 200px; border-color:#007DD8;">Export Laporan</button></a>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-12 mt-5">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-md-4 mb-3">
                                <h4 style="text-transform: uppercase; color:#007DD8;">Statistik Nasional</h4>
                            </div>
                            <div class="col-md-3">
                                <!-- <p style="color: red; margin-bottom:0;"><?= ucwords('last update ' . date('j F, Y'))  ?></p> -->
                                <!-- <p style="color: red; margin-bottom:0;"><?= ucwords('last update ' . date('j F, Y'))  ?></p> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                                    <div class="card-body">
                                        <div class="row justify-content-between align-items-center" style="height: 80px;">
                                            <div class="col-md-2">
                                                <i class='bx bxs-car-crash ms-n2' style="font-size: 50px; color: #464646;"></i>
                                            </div>
                                            <div class="col-md-10 float-end">
                                                <span class="fs-6 float-end" style="color:#464646;">
                                                    <span class="fw-bold">Total WAL & PJR Hari ini</span>
                                                </span>
                                                <br>
                                                <span class="fs-6 fw-bold float-end" style="color:#464646;" id="lakalantas"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-3">
                                <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                                    <div class="card-body">
                                        <div class="row justify-content-between align-items-center" style="height: 80px;">
                                            <div class="col-md-2">
                                                <iconify-icon icon="ic:round-car-crash" class="ms-n2" style="font-size: 50px; color: #464646;"></iconify-icon>
                                            </div>
                                            <div class="col-md-10 float-end">
                                                <span class="fs-6 float-end" style="color:#464646;">
                                                    <span class="fw-bold">TATIB </span>
                                                </span>
                                                <br>
                                                <span class="fs-6 fw-bold float-end" style="color:#464646;" id="garlantas"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>

                            <div class="col-md-3">
                                <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                                    <div class="card-body">
                                        <div class="row justify-content-between align-items-center" style="height: 80px;">
                                            <div class="col-md-2">
                                                <iconify-icon icon="fa6-solid:motorcycle" class="ms-n2" style="font-size: 40px; color: #464646;"></iconify-icon>
                                            </div>
                                            <div class="col-md-10 float-end">
                                                <span class="fs-6 float-end" style="color:#464646;">
                                                    <span class="fw-bold">DAKGAR </span>
                                                </span>
                                                <br>
                                                <span class="fs-6 fw-bold float-end" style="color:#464646;" id="turjagwali"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>

                            <div class="col-md-3">
                                <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                                    <div class="card-body">
                                        <div class="row justify-content-between align-items-center" style="height: 80px;">
                                            <div class="col-md-2">
                                                <i class='bx bxs-car-crash ms-n2' style="font-size: 50px; color: #464646;"></i>
                                            </div>
                                            <div class="col-md-10 float-end">
                                                <span class="fs-6 float-end" style="color:#464646;">
                                                    <span class="fw-bold">LAKA </span>
                                                </span>
                                                <br>
                                                <span class="fs-6 fw-bold float-end" style="color:#464646;" id="lakalanggar"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end statistik -->
                </div>

                <section class="shadow-sm mt-5">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                    <div id="title"></div>
                                </div>
                                <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                    <div class="main-chart">
                                        <div id="charta">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
</div>