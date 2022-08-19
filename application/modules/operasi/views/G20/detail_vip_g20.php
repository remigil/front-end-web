<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item">VIP</li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Detail VIP</li>
    </ol>
</nav>

<div class="page">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <p class="fs-4 fw-bold">DETAIL VIP</p>
                </div>
                <div class="col-md-6">
                    <a href="<?= base_url('operasi/Vip/Edit'); ?>"> <button type="button" class=" btn btn-primary waves-effect float-end" style="width: 25%;">Edit <i class="mdi mdi-square-edit-outline"></i></button>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="row text-primary">
                                <div class="col-2">
                                    <p>NAMA VIP</p>
                                    <p>NEGARA KEDATANGAN</p>
                                    <p>JABATAN</p>
                                    <p>KETERANGAN</p>
                                </div>
                                <div class="col-1">
                                    <p>:</p>
                                    <p>:</p>
                                    <p>:</p>
                                    <p>:</p>
                                </div>
                                <div class="col-3">
                                    <p>PUTIN</p>
                                    <p>Rusia</p>
                                    <p>Presiden</p>
                                    <p>-</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-3">
                <a href="<?= base_url('operasi/Vip'); ?>"><button class="btn btn-sm btn-primary float-end" style="width: 40vh;">Kembali</button></a>

            </div>
        </div>
    </div>
</div>