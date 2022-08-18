<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Data Akun</li>
    </ol>
</nav>
<!-- </div> -->
<div class="page">
    <button type="button" class="btn btn-primary waves-effect" data-bs-toggle="modal" data-bs-target=".TambahAkun">Tambah Akun</button>
    <div class="card mt-3">
        <div class="card-body">
            <table id="datatable" class="table dt-responsive  nowrap w-100">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Akun</th>
                        <th>Polres</th>
                        <th>Ketua TIM</th>
                        <th>No. Kendaraan</th>
                        <th>VIP</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Patroli Bali 1</td>
                        <td>Polresta Denpasar</td>
                        <td>Made</td>
                        <td>1783-17</td>
                        <td>Putin</td>
                        <td>
                            <button class="btn btn-sm btn-primary" type="button" data-bs-toggle="modal" data-bs-target=".SettingAkun"><i class="mdi mdi-cog "></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Patroli Bali 1</td>
                        <td>Polres Bandung</td>
                        <td>Ketut</td>
                        <td>1793-07</td>
                        <td>Jokowi</td>
                        <td>
                            <button class="btn btn-sm btn-primary" type="button" data-bs-toggle="modal" data-bs-target=".SettingAkun"><i class="mdi mdi-cog   "></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>
<!-- End Page -->


<div class="modal fade TambahAkun" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Tambah Akun</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="material-textfield mb-3">
                        <input style="width: 100%;" name="NoAkun" placeholder="" type="text">
                        <label class="labelmui">No Akun</label>
                    </div>
                    <div class="material-textfield mb-3">
                        <input style="width: 100%;" name="JenisAkun" placeholder="" type="text">
                        <label class="labelmui">Jenis Akun</label>
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

<div class="modal fade SettingAkun" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Akun</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="material-textfield mb-3">
                        <input style="width: 100%;" name="NoAkun" placeholder="" type="text">
                        <label class="labelmui">No Akun</label>
                    </div>
                    <div class="material-textfield mb-3">
                        <input style="width: 100%;" name="JenisAkun" placeholder="" type="text">
                        <label class="labelmui">Jenis Akun</label>
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


<!-- <div class="modal fade UbahAkun" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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


<div class="modal fade UploadAkun" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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