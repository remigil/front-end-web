<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item">Detail Petugas</li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Edit</li>
    </ol>
</nav>

<div class="page">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <p class="fs-4 fw-bold">EDIT PETUGAS</p>
                </div>
                <div class="col-md-6">
                    <a href="<?= base_url('operasi/Kegiatan/Edit'); ?>"> <button type="button" class=" btn btn-primary waves-effect float-end ms-4" style="width: 25%;">Simpan</button></a>
                    <a href="<?= base_url('operasi/Kegiatan/Edit'); ?>"> <button type="button" class=" btn btn-danger waves-effect float-end" style="width: 25%;">Hapus<i class="mdi mdi-trash-can-outline"></i></button></a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="rounded m-auto" style="height: 200px; width:200px; background:grey;"></div>
                    <div class="row mt-5">
                        <div class="col-md-6">
                            <div class="material-textfield mb-3">
                                <input style="width: 100%;" name="" placeholder="" type="text">
                                <label class="labelmui">Nama Petugas</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="material-selectfield mb-3">
                                <select name="" id="" class="form-select">
                                    <option value="">Pilih Strukturan</option>
                                    <option value="">Strukturan 1</option>
                                    <option value="">Strukturan 2</option>
                                </select>
                                <label class="labelmui">Strukturan</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="material-textfield mb-3">
                                <input style="width: 100%;" name="" placeholder="" type="text">
                                <label class="labelmui">NRP</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="material-selectfield mb-3">
                                <select name="" id="" class="form-select">
                                    <option value="">Pilih Dalam PAM</option>
                                    <option value="">Dalam PAM 1</option>
                                    <option value="">Dalam PAM 2</option>
                                </select>
                                <label class="labelmui">Dalam PAM</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="material-selectfield mb-3">
                                <select class="form-select" name="" id="">
                                    <option value="">Pilih Pangkat</option>
                                    <option value="">Pangkat 2</option>
                                    <option value="">Pangkat 3</option>
                                    <option value="">Pangkat 4</option>
                                </select>
                                <label class="labelmui">Pangkat </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="material-selectfield mb-3">
                                <select class="form-select" name="" id="">
                                    <option value="">Pilih Status</option>
                                    <option value="">Active</option>
                                    <option value="">Inactive</option>
                                </select>
                                <label class="labelmui">Status </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <a href="<?= base_url('operasi/Petugas'); ?>"> <button type="button" class=" btn btn-primary waves-effect float-end ms-4" style="width: 25%;">Kembali</button></a>
            </div>
        </div>
    </div>
</div>