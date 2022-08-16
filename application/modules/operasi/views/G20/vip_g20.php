<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Data VIP</li>
    </ol>
</nav>
<!-- </div> -->
<div class="page">
    <button type="button" class="btn btn-primary waves-effect" data-bs-toggle="modal" data-bs-target=".TambahVIP">Tambah VIP</button>
    <div class="card mt-3">
        <div class="card-body">
            <table id="datatable" class="table dt-responsive  nowrap w-100">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama VIP</th>
                        <th>Negara Kedatangan</th>
                        <th>Penempatan</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Putin</td>
                        <td>Russia</td>
                        <td>Hotel Nusa Dua</td>
                        <td></td>
                        <td>
                            <a href="<?= base_url('operasi/Vip/Detail'); ?>"><button class="btn btn-sm btn-primary"><i class="mdi mdi-cog "></i></button></a>
                            <!-- <button class="btn btn-sm btn-primary" type="button" data-bs-toggle="modal" data-bs-target=".SettingVIP"><i class="mdi mdi-cog "></i></button> -->
                            <!-- <button class="btn btn-sm btn-warning" type="button" data-bs-toggle="modal" data-bs-target=".UbahVIP"><i class="mdi mdi-pencil"></i></button>
                            <button class="btn btn-sm btn-success" type="button" data-bs-toggle="modal" data-bs-target=".UploadVIP"><i class="mdi mdi-file-upload"></i></button> -->
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Joe Biden</td>
                        <td>Amerika Serikat</td>
                        <td>Hotel Nusa Dua</td>
                        <td></td>
                        <td>
                            <a href="<?= base_url('operasi/Vip/Detail'); ?>"><button class="btn btn-sm btn-primary"><i class="mdi mdi-cog "></i></button></a>
                            <!-- <button class="btn btn-sm btn-warning" type="button" data-bs-toggle="modal" data-bs-target=".UbahVIP"><i class="mdi mdi-pencil"></i></button>
                            <button class="btn btn-sm btn-success" type="button" data-bs-toggle="modal" data-bs-target=".UploadVIP"><i class="mdi mdi-file-upload"></i></button> -->
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>
<!-- End Page -->


<div class="modal fade TambahVIP" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Tambah VIP</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="material-textfield mb-3">
                        <input style="width: 100%;" name="NamaVIP" placeholder="" type="text">
                        <label class="labelmui">Nama VIP</label>
                    </div>
                    <div class="material-textfield mb-3">
                        <input style="width: 100%;" name="NegaraKedatangan" placeholder="" type="text">
                        <label class="labelmui">Negara Kedatangan</label>
                    </div>
                    <div class="material-textfield mb-3">
                        <input style="width: 100%;" name="Penempatan" placeholder="" type="text">
                        <label class="labelmui">Penempatan</label>
                    </div>
                    <div class="material-textfield mb-3">
                        <input style="width: 100%;" name="Keterangan" placeholder="" type="text">
                        <label class="labelmui">Keterangan</label>
                    </div>
                    <div class="col-md-6 float-end">
                        <button class="btn btn-primary float-end" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade SettingVIP" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">VIP</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="material-textfield mb-3">
                        <input style="width: 100%;" name="NamaVIP" placeholder="" type="text">
                        <label class="labelmui">Nama VIP</label>
                    </div>
                    <div class="material-textfield mb-3">
                        <input style="width: 100%;" name="NegaraKedatangan" placeholder="" type="text">
                        <label class="labelmui">Negara Kedatangan</label>
                    </div>
                    <div class="material-textfield mb-3">
                        <input style="width: 100%;" name="Penempatan" placeholder="" type="text">
                        <label class="labelmui">Penempatan</label>
                    </div>
                    <div class="material-textfield mb-3">
                        <input style="width: 100%;" name="Keterangan" placeholder="" type="text">
                        <label class="labelmui">Keterangan</label>
                    </div>
                    <div class="col-md-6 float-end">
                        <button class="btn btn-primary float-end" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- <div class="modal fade UbahVIP" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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


<div class="modal fade UploadVIP" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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