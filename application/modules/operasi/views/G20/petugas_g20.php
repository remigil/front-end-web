<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Petugas</li>
    </ol>
</nav>
<!-- </div> -->
<div class="page">
    <button type="button" class="btn btn-primary waves-effect" data-bs-toggle="modal" data-bs-target=".TambahPetugas">Tambah Petugas</button>
    <div class="col-12">

        <div class="card mt-3">
            <div class="card-body">
                <table id="datatable" class="table dt-responsive w-100">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NRP</th>
                            <th>Nama Petugas</th>
                            <th>Pangkat</th>
                            <th style="width:20% ;">Strukturan</th>
                            <th>Dalam PAM</th>
                            <th>No. Handphone</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>73060169</td>
                            <td>Juni Sutopo</td>
                            <td>AIPTU</td>
                            <td style="width :20%;">BANIT SUBDITWAL & PJR DITGAKKUM KORLANTAS POLRI</td>
                            <td>SDA</td>
                            <td>081356410675</td>
                            <td>Active</td>
                            <td>
                                <a href="<?= base_url('operasi/Petugas/Detail'); ?>"><button class="btn btn-sm btn-primary"><i class="mdi mdi-cog "></i></button></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>73060169</td>
                            <td>Zaenal Arifin</td>
                            <td>AIPTU</td>
                            <td style="width :20%;">BANIT SUBDITWAL & PJR DITGAKKUM KORLANTAS POLRI</td>
                            <td>SDA</td>
                            <td>089570294300</td>
                            <td>Inactive</td>
                            <td>
                                <a href="<?= base_url('operasi/Petugas/Detail'); ?>"><button class="btn btn-sm btn-primary"><i class="mdi mdi-cog "></i></button></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
<!-- End Page -->


<div class="modal fade TambahPetugas" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Tambah Petugas</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-12">
                    <div class="kotak mb-4 rounded" style="margin-left:270px; height: 200px; width:200px; background:grey; "></div>
                </div>
                <form action="">
                    <div class="material-textfield mb-3">
                        <input style="width: 100%;" name="NamaPetugas" placeholder="" type="text">
                        <label class="labelmui">Nama Petugas</label>
                    </div>
                    <div class="material-textfield mb-3">
                        <input style="width: 100%;" name="NRP" placeholder="" type="text">
                        <label class="labelmui">NRP</label>
                    </div>
                    <div class="material-selectfield mb-3">
                        <select class="form-select">
                            <option selected>Pilih Pangkat</option>
                            <option value="">AIPTU</option>
                            <option value="">AIPDA</option>
                            <option value="">BRIPKA</option>
                            <option value="">BRIGADIR</option>
                            <option value="">BRIPTU</option>
                        </select>
                        <label class="labelmui">Pangkat</label>
                    </div>
                    <div class="material-selectfield mb-3">
                        <select class="form-select">
                            <option selected>Pilih Strukturan</option>
                            <option value="">BANIT SUBDITWAL & PJR DITGAKKUM KORLANTAS POLRI</option>
                            <option value="">BA DITLANTAS POLDA BANTEN</option>
                            <option value="">BA DITLANTAS POLDA JABAR</option>
                            <option value="">BA DITLANTAS POLDA JATENG</option>
                            <option value="">BA DITLANTAS POLDA JATIM</option>
                            <option value="">BA DITLANTAS POLDA BALI</option>
                        </select>
                        <label class="labelmui">Strukturan</label>
                    </div>
                    <div class="material-textfield mb-3">
                        <input style="width: 100%;" name="nohp" placeholder="" type="text">
                        <label class="labelmui">Dalam PAM</label>
                    </div>
                    <div class="material-textfield mb-3">
                        <input style="width: 100%;" name="nohp" placeholder="" type="text">
                        <label class="labelmui">No. Handphone</label>
                    </div>
                    <div class="material-selectfield mb-3">
                        <select class="form-select">
                            <option selected>Pilih Status</option>
                            <option value="">Active</option>
                            <option value="">Inactive</option>
                        </select>
                        <label class="labelmui">Status</label>
                    </div>
                    <div class="col-md-6 float-end">
                        <button class="btn btn-primary float-end" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#datatable').DataTable();
    });
</script>