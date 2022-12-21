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
                    <a href="<?= base_url('operasi/Petugas/Edit/' . $data['getDetail']['data']['id'] . ''); ?>"> <button type="button" class=" btn btn-primary waves-effect float-end" style="width: 25%;">Edit <i class="mdi mdi-square-edit-outline"></i></button>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="row text-primary">
                                <div class="col-md-3">
                                    <img src="<?php echo ($data['getDetail']['data']['photo_officer'] != null ? '' . url_api() . '/officer/' . $data['getDetail']['data']['photo_officer'] . '' : ''); ?>" alt="">
                                </div>
                                <div class="col-md-2">
                                    <p>NAMA PETUGAS</p>
                                    <p>NRP</p>
                                    <p>PANGKAT</p>
                                    <p>STRUKTURAN</p>
                                    <p>DALAM PAM</p>
                                    <p>NOMOR HANDPHONE</p>
                                    <p>STATUS</p>
                                </div>
                                <div class="col-md-1">
                                    <p>:</p>
                                    <p>:</p>
                                    <p>:</p>
                                    <p>:</p>
                                    <p>:</p>
                                    <p>:</p>
                                    <p>:</p>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo $data['getDetail']['data']['name_officer']; ?></p>
                                    <p><?php echo $data['getDetail']['data']['nrp_officer']; ?></p>
                                    <p><?php echo $data['getDetail']['data']['rank_officer']; ?></p>
                                    <p><?php echo $data['getDetail']['data']['structural_officer']; ?></p>
                                    <p><?php echo $data['getDetail']['data']['pam_officer']; ?></p>
                                    <p><?php echo $data['getDetail']['data']['phone_officer']; ?></p>
                                    <p><?php echo ($data['getDetail']['data']['status_officer'] == '1' ? 'Active' : 'Nonactive'); ?></p>
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