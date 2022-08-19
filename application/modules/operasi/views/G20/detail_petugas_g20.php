<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item">Petugas</li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Detail Petugas</li>
    </ol>
</nav>


<div class="page">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <p class="fs-4 fw-bold">DETAIL AKUN</p>
                </div>
                <div class="col-md-6">
                    <a href="<?= base_url('operasi/Petugas/Edit'); ?>"> <button type="button" class=" btn btn-primary waves-effect float-end" style="width: 25%;">Edit <i class="mdi mdi-square-edit-outline"></i></button>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="row text-primary">
                                <div class="col-3">
                                    <div class="rounded" style="height:200px; width:200px; background:grey;"></div>
                                </div>
                                <div class="col-2">
                                    <p>NAMA PETUGAS</p>
                                    <p>NRP</p>
                                    <p>PANGKAT</p>
                                    <p>STRUKTURAN</p>
                                    <p>DALAM PAM</p>
                                    <p>NOMOR HANDPHONE</p>
                                    <p>STATUS</p>
                                </div>
                                <div class="col-1">
                                    <p>:</p>
                                    <p>:</p>
                                    <p>:</p>
                                    <p>:</p>
                                    <p>:</p>
                                    <p>:</p>
                                    <p>:</p>
                                </div>
                                <div class="col-6">
                                    <p>Juni Sutopo</p>
                                    <p>73060169</p>
                                    <p>AIPTU</p>
                                    <p>BANIT SUBDITWAL & PJR DITGAKKUM KORLANTAS POLRI</p>
                                    <p>SDA</p>
                                    <p>081356410675</p>
                                    <p>Active</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-3">
                <a href="<?= base_url('operasi/Petugas'); ?>"><button class="btn btn-sm btn-primary float-end" style="width: 40vh;">Kembali</button></a>

            </div>
        </div>
    </div>
</div>