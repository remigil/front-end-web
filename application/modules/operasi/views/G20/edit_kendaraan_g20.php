<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item">Detail Kendaraan</li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Edit</li>
    </ol>
</nav>

<div class="page">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <p class="fs-4 fw-bold">EDIT KENDARAAN</p>
                </div>
                <div class="col-md-6">
                    <a href="<?= base_url('operasi/Kegiatan/Edit'); ?>"> <button type="button" class=" btn btn-primary waves-effect float-end ms-4" style="width: 25%;">Simpan</button></a>
                    <a href="<?= base_url('operasi/Kegiatan/Edit'); ?>"> <button type="button" class=" btn btn-danger waves-effect float-end" style="width: 25%;">Hapus<i class="mdi mdi-trash-can-outline"></i></button></a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="material-textfield mb-3">
                                <input style="width: 100%;" name="" placeholder="" type="text">
                                <label class="labelmui">Nomor</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="material-textfield mb-3">
                                <input style="width: 100%;" name="" placeholder="" type="text">
                                <label class="labelmui">Merek</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="material-selectfield mb-3">
                                <select class="form-select" name="" id="">
                                    <option value="">Pilih Jenis Kendaraan</option>
                                    <option value="">Sepeda Motor</option>
                                    <option value="">Mobil</option>
                                </select>
                                <label class="labelmui">Jenis</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="material-selectfield mb-3">
                                <select class="form-select" name="" id="">
                                    <option value="">Pilih Kepemilikan</option>
                                    <option value="">Kepemilikan 1</option>
                                    <option value="">Kepemilikan 2</option>
                                    <option value="">Kepemilikan 3</option>
                                    <option value="">Kepemilikan 4</option>
                                </select>
                                <label class="labelmui">Kepemilikan</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-3">
                <a href="<?= base_url('operasi/Kendaraan'); ?>"><button class="btn btn-sm btn-primary float-end w-25" style="height:5vh ;">Kembali</button></a>
            </div>
        </div>
    </div>
</div>