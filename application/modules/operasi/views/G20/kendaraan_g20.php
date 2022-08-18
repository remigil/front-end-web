<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Data Kendaraan</li>
    </ol>
</nav>
<!-- </div> -->
<div class="page">
    <button type="button" class="btn btn-primary waves-effect" data-bs-toggle="modal" data-bs-target=".TambahKendaraan">Tambah Kendaraan</button>
    <div class="card mt-3">
        <div class="card-body">
            <table id="datatable" class="table dt-responsive w-100">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No. Kendaraan</th>
                        <th>Jenis Kendaraan</th>
                        <th>Merek</th>
                        <th>Kepemilikan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>1783-07</td>
                        <td>Sepeda Motor</td>
                        <td>Honda Goidwing</td>
                        <td>Polres Bandung</td>
                        <td><button class="btn btn-sm btn-primary" type="button" data-bs-toggle="modal" data-bs-target=".SettingKendaraan"><i class="mdi mdi-cog "></i></button>
                            <!-- <button class="btn btn-sm btn-warning" type="button" data-bs-toggle="modal" data-bs-target=".UbahKendaraan"><i class="mdi mdi-pencil"></i></button>
                            <button class="btn btn-sm btn-success" type="button" data-bs-toggle="modal" data-bs-target=".UploadKendaraan"><i class="mdi mdi-file-upload"></i></button> -->
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>1785-01</td>
                        <td>Mobil</td>
                        <td>Mitsubishi Lancer</td>
                        <td>Polresta Denpasar</td>
                        <td><button class="btn btn-sm btn-primary" type="button" data-bs-toggle="modal" data-bs-target=".SettingKendaraan"><i class="mdi mdi-cog   "></i></button>
                            <!-- <button class="btn btn-sm btn-warning" type="button" data-bs-toggle="modal" data-bs-target=".UbahKendaraan"><i class="mdi mdi-pencil"></i></button>
                            <button class="btn btn-sm btn-success" type="button" data-bs-toggle="modal" data-bs-target=".UploadKendaraan"><i class="mdi mdi-file-upload"></i></button> -->
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>
<!-- End Page -->


<div class="modal fade TambahKendaraan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Tambah Kendaraan</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="material-textfield mb-3">
                        <input style="width: 100%;" name="NoKendaraan" placeholder="" type="text">
                        <label class="labelmui">No Kendaraan</label>
                    </div>
                    <div class="material-selectfield mb-3">
                        <select class="form-select">
                            <option selected>Pilih Jenis Kendaraan</option>
                            <option value="">Mobil</option>
                            <option value="">Motor</option>
                        </select>
                        <label class="labelmui">Jenis Kendaraan</label>
                    </div>
                    <div class="material-textfield mb-3">
                        <input style="width: 100%;" name="Merek" placeholder="" type="text">
                        <label class="labelmui">Merek</label>
                    </div>
                    <div class="material-selectfield mb-3">
                        <select class="form-select">
                            <option selected>Pilih Kepemilikan</option>
                            <option value="">Polres Bandung</option>
                            <option value="">Polresta Denpasar</option>
                        </select>
                        <label class="labelmui">Kepemilikan</label>
                    </div>
                    <div class="col-md-6 float-end">
                        <button class="btn btn-primary float-end" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade SettingKendaraan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Kendaraan</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="material-textfield mb-3">
                        <input style="width: 100%;" name="NoKendaraan" placeholder="" type="text">
                        <label class="labelmui">No Kendaraan</label>
                    </div>
                    <div class="material-textfield mb-3">
                        <input style="width: 100%;" name="JenisKendaraan" placeholder="" type="text">
                        <label class="labelmui">Jenis Kendaraan</label>
                    </div>
                    <div class="material-textfield mb-3">
                        <input style="width: 100%;" name="Merek" placeholder="" type="text">
                        <label class="labelmui">Merek</label>
                    </div>
                    <div class="material-textfield mb-3">
                        <input style="width: 100%;" name="Kepemilikan" placeholder="" type="text">
                        <label class="labelmui">Kepemilikan</label>
                    </div>
                    <div class="col-md-6 float-end">
                        <button class="btn btn-primary float-end" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- <div class="modal fade UbahKendaraan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Edit Rencana Operasi</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="material-textfield mb-3">
                        <input style="width: 100%;" name="jenisoperasi" placeholder="" type="text">
                        <label class="labelmui">Rencana</label>
                    </div>
                    <div class="material-textfield mb-3">
                        <input style="width: 100%;" name="namaoperaso" placeholder="" type="text">
                        <label class="labelmui">Subjek</label>
                    </div>
                    <div class="col-md-6 float-end">
                        <button class="btn btn-primary float-end" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="modal fade UploadKendaraan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Upload</h5>
            </div>
            <div class="modal-body">
                <form action="#" class="dropzone">
                    <div class="fallback">
                        <input name="file" type="file">
                    </div>
                    <div class="dz-message needsclick">
                        <div class="mb-3">
                            <i class="display-4 text-muted bx bx-cloud-upload"></i>
                        </div>
                        <h5>Drop files here or click to upload.</h5>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> -->


<script>
    $(document).ready(function() {
        $('#datatable').DataTable();
    });
</script>