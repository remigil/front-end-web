<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item">Akun</li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Detail Akun</li>
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
                    <a href="<?= base_url('operasi/Akun/Edit/'.$data['getDetail']['data']['id'].''); ?>"> <button type="button" class=" btn btn-primary waves-effect float-end" style="width: 25%;">Edit <i class="mdi mdi-square-edit-outline"></i></button>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-2">
                            <p>NAMA AKUN</p>
                            <p>VIP</p>
                            <p>POLRES</p>
                            <p>KETUA TIM</p>
                            <p>NO. KENDARAAN</p>
                        </div>
                        <div class="col-1">
                            <p>:</p>
                            <p>:</p>
                            <p>:</p>
                            <p>:</p>
                            <p>:</p>
                        </div>
                        <div class="col-3">
                            <p><?php echo $data['getDetail']['data']['name_account'];?></p> 
                            <p><?php echo ($data['getDetail']['data']['vip'] == null ? '-' : $data['getDetail']['data']['vip']);?></p>
                            <p><?php echo ($data['getDetail']['data']['name_polres'] == null ? '-' : $data['getDetail']['data']['name_polres']);?></p>
                            <p><?php echo ($data['getDetail']['data']['leader_team'] == null ? '-' : $data['getDetail']['data']['leader_team']);?></p>
                            <p><?php echo ($data['getDetail']['data']['no_vehicle'] == null ? '-' : $data['getDetail']['data']['no_vehicle']);?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 mt-3">
                <a href="<?= base_url('operasi/Akun'); ?>"><button class="btn btn-sm btn-primary float-end" style="width: 40vh;">Kembali</button></a>
            </div>
        </div>
    </div>
</div>