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
                        <div class="col-3">
                            <p>NAMA AKUN</p>  
                        </div>
                        <div class="col-1">
                            <p>:</p> 
                        </div>
                        <div class="col-8">
                            <p><?php echo $data['getDetail']['data']['name_account'];?></p>  
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3"> 
                            <p>PETUGAS</p> 
                        </div>
                        <div class="col-1">
                            <p>:</p> 
                        </div>
                        <div class="col-8"> 
                            <ul>
                                <?php foreach ($data['getDetail']['data']['officer'] as $row) : ?>
                                    <li><?php echo $row['name_officer']; ?>  ( <?php echo $row['nrp_officer']; ?> )</li> 
                                <?php endforeach; ?>
                            </ul> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3"> 
                            <p>KETUA TIM</p> 
                        </div>
                        <div class="col-1">
                            <p>:</p> 
                        </div>
                        <div class="col-8"> 
                            <p><?php echo ($data['getDetail']['data']['leader_team'] == null ? '-' : $data['getDetail']['data']['leader_team']);?></p> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3"> 
                            <p>NO. KENDARAAN</p>
                        </div>
                        <div class="col-1">
                            <p>:</p> 
                        </div>
                        <div class="col-8">
                            <p><?php echo ($data['getDetail']['data']['vehicle']['no_vehicle'] == null ? '-' : $data['getDetail']['data']['vehicle']['no_vehicle']);?></p>
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