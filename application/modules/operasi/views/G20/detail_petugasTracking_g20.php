<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item">PetugasTracking</li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Detail PetugasTracking</li>
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
                    <a href="<?= base_url('operasi/PetugasTracking/Edit/'.$data['getDetail']['data']['id'].''); ?>"> <button type="button" class=" btn btn-primary waves-effect float-end" style="width: 25%;">Edit <i class="mdi mdi-square-edit-outline"></i></button>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="row text-primary"> 
                                <div class="col-md-2">
                                    <p>NRP USER</p>
                                    <p>TOKEN FCM</p>
                                    <p>TOKEN TRACK</p>
                                    <p>DEVICE USER</p> 
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
                                    <p><?php echo $data['getDetail']['data']['nrp_user'];?></p>
                                    <p><?php echo $data['getDetail']['data']['token_fcm'];?></p>
                                    <p><?php echo $data['getDetail']['data']['token_track'];?></p>
                                    <p><?php echo $data['getDetail']['data']['device_user'];?></p> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-3">
                <a href="<?= base_url('operasi/PetugasTracking'); ?>"><button class="btn btn-sm btn-primary float-end" style="width: 40vh;">Kembali</button></a>

            </div>
        </div>
    </div>
</div>