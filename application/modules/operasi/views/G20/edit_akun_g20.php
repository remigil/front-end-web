<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item">Akun</li>
        <li class="breadcrumb-item">Detail Akun</li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Edit</li>
    </ol>
</nav>

<div class="page">
    <div class="card">
        <div class="card-body">
            <form class="form" method="post" enctype="multipart/form-data"> 
                <input hidden name="id" value="<?php echo $data['getDetail']['data']['id'];?>" type="text">
                <div class="row">
                    <div class="col-md-6">
                        <p class="fs-4 fw-bold">EDIT AKUN</p>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class=" btn btn-primary waves-effect float-end ms-4" style="width: 25%;">Simpan</button>
                        <a href="javascript(0);" id="delete" data-id="<?php echo $data['getDetail']['data']['id'];?>" class=" btn btn-danger waves-effect float-end" style="width: 25%;">Hapus<i class="mdi mdi-trash-can-outline"></i></a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="material-textfield mb-3">
                                    <input style="width: 100%;" name="namaAkun" placeholder="Nama Akun" type="text">
                                    <label class="labelmui">Nama Akun</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="material-textfield mb-3">
                                    <input style="width: 100%;" name="" placeholder="" type="text">
                                    <label class="labelmui">Ketua Tim</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="material-selectfield mb-3">
                                    <select name="polres" class="form-select">
                                        <option selected value="">Pilih Polres</option> 
                                        <?php foreach($data['getPolres'] as $row): ?>
                                            <option value="<?php echo $row['id'];?>"><?php echo $row['name_polres'];?></option> 
                                        <?php endforeach; ?> 
                                    </select>
                                    <label class="labelmui">Polres</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="material-selectfield mb-3">
                                    <select name="id_vip" class="form-select">
                                        <option selected value="">Pilih VIP</option> 
                                        <?php foreach($data['getVip'] as $row): ?>
                                            <option value="<?php echo $row['id'];?>"><?php echo $row['name_vip'];?></option> 
                                        <?php endforeach; ?> 
                                    </select>
                                    <label class="labelmui">VIP</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="material-textfield mb-3">
                                    <input style="width: 100%;" name="ketuaTeam" placeholder="Ketua Team" type="text">
                                    <label class="labelmui">Ketua Team</label>
                                </div> 
                            </div>
                            <div class="col-md-6">
                                <div class="material-selectfield mb-3">
                                    <select name="id_kendaraan" class="form-select">
                                        <option selected value="">Pilih No Kendaraan</option> 
                                        <?php foreach($data['getVehicle'] as $row): ?>
                                            <option value="<?php echo $row['id'];?>"><?php echo $row['no_vehicle'];?></option> 
                                        <?php endforeach; ?> 
                                    </select>
                                    <label class="labelmui">No Kendaraan</label>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <a href="<?= base_url('operasi/Akun'); ?>"> <button type="button" class=" btn btn-primary waves-effect float-end ms-4" style="width: 25%;">Kembali</button></a>
                </div>
            </form>
        </div>
    </div>
</div>