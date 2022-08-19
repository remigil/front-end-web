<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item">VIP</li>
        <li class="breadcrumb-item">Detail VIP</li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Edit</li>
    </ol>
</nav>

<div class="page">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <p class="fs-4 fw-bold">EDIT VIP</p>
                </div>
                <div class="col-md-6">
                    <a href="<?= base_url('operasi/Vip/Edit'); ?>"> <button type="button" class=" btn btn-primary waves-effect float-end ms-4" style="width: 25%;">Simpan</button></a>
                    <a href="<?= base_url('operasi/Vip/Edit'); ?>"> <button type="button" class=" btn btn-danger waves-effect float-end" style="width: 25%;">Hapus<i class="mdi mdi-trash-can-outline"></i></button></a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="material-textfield mb-3">
                                <input style="width: 100%;" name="" placeholder="" type="text">
                                <label class="labelmui">VIP</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="material-selectfield mb-3">
                                <select name="" id="" class="form-select">
                                    <option value="">Pilih Jabatan</option>
                                    <option value="">Presiden</option>
                                    <option value="">Wakil Presiden</option>
                                </select>
                                <label class="labelmui">Jabatan</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="material-selectfield mb-3">
                                <select name="" id="" class="form-select">
                                    <option value="">Rusia</option>
                                    <option value="">Amerika Serikat</option>
                                </select>
                                <label class="labelmui">Negara Kedatangan</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="material-textfield mb-3">
                                <input style="width: 100%;" name="" placeholder="" type="text">
                                <label class="labelmui">Keterangan</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <a href="<?= base_url('operasi/Vip'); ?>"> <button type="button" class=" btn btn-primary waves-effect float-end ms-4" style="width: 25%;">Kembali</button></a>
            </div>
        </div>
    </div>
</div>