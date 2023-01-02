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
                    <a href="<?= base_url('user/operator/Edit/'.$data['getDetail']['data']['id'].''); ?>"> <button type="button" class=" btn btn-primary waves-effect float-end" style="width: 25%;">Edit <i class="mdi mdi-square-edit-outline"></i></button>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="row text-primary">
                                <div class="col-md-3">
                                    <img src="<?php echo ($data['getDetail']['data']['logo'] != null ? ''.url_api().'logo/'.$data['getDetail']['data']['logo'].'' : '');?>" alt="">
                                </div>
                                <div class="col-md-2">
                                    <p>NAMA OPERASI</p>
                                    <p>TANGGAL MULAI</p>
                                    <p>TANGGAL SELESAI</p> 
                                </div>
                                <div class="col-md-1">
                                    <p>:</p>
                                    <p>:</p>
                                    <p>:</p> 
                                </div>
                                <div class="col-md-6"> 
                                    <p><?php echo ($data['getDetail']['data']['name_operation'] ? $data['getDetail']['data']['name_operation'] : '-');?></p>
                                    <p><?php echo ($data['getDetail']['data']['date_start_operation'] ? $data['getDetail']['data']['date_start_operation'] : '-');?></p>
                                    <p><?php echo ($data['getDetail']['data']['date_end_operation'] ? $data['getDetail']['data']['date_end_operation'] : '-');?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-3">
                <a href="<?= base_url('user/operator'); ?>"><button class="btn btn-sm btn-primary float-end" style="width: 40vh;">Kembali</button></a>

            </div>
        </div>
    </div>
</div>