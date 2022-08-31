<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Daftar <?= $title; ?></li>
    </ol>
</nav>
<!-- </div> -->
<div class="page">
    <button type="button" class="btn btn-primary waves-effect mb-2" data-bs-toggle="modal" data-bs-target=".TambahRencanaOperasi">Tambah Rencana Operasi</button>
    <div class="card">

        <div class="card-body">

            <table id="datatable" class="table dt-responsive w-100">
                <thead>
                    <tr>
                        <th>Nama Operasi</th>
                        <th>Jenis Operasi</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Akhir</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>OPERASI KESELAMATAN 2022</td>
                        <td>OPERASI KESELAMATAN</td>
                        <td>2022-06-13</td>
                        <td>2022-06-26</td>
                        <td>
                            <button type="button" class="btn btn-sm btn-primary waves-effect" data-bs-toggle="modal" data-bs-target=".DetailRencanaOperasi"><i class="mdi mdi-eye "></i></button>
                            <button type="button" class="btn btn-sm btn-primary waves-effect" data-bs-toggle="modal" data-bs-target=".UbahRencanaOperasi"><i class="mdi mdi-pencil-outline "></i></button>
                            <button type="button" class="btn btn-sm btn-primary waves-effect" data-bs-toggle="modal" data-bs-target=".UploadRencanaOperasi"><i class="mdi mdi-file-upload "></i></button>
                            <button type="button" class="btn btn-sm btn-primary waves-effect" id="HapusRencanaOperasi"><i class="mdi mdi-trash-can-outline "></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>
<!-- End Page -->


<div class="modal fade TambahRencanaOperasi" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Tambah Rencana Operasi</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="fw-bold ms-4"> Identitas Operasi</p>
                <form action="" class="form">
                    <div class="material-textfield">
                        <input type="text" name="" id="" style="width:100% ;">
                        <label for="" class="labelmui">Jenis Operasi yang Akan Dilaksanakan</label>
                    </div>
                    <div class="material-textfield">
                        <input type="text" name="" id="" style="width:100% ;">
                        <label for="" class="labelmui">Nama Operasi</label>
                    </div>
                    <div class="material-selectfield mb-3">
                        <select name="" id="">
                            <!-- <select name="" id=""  multiple required> -->
                            <option value="">Jawa Barat</option>
                            <option value="">Jawa Tengah</option>
                            <option value="">Jawa Timur</option>
                        </select>
                        <label class="labelmui">Polda</label>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="material-textfield">
                                <input type="date" name="" id="" style="width:100% ;">
                                <label for="" class="labelmui">Tanggal Mulai</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="material-textfield">
                                <input type="date" name="" id="" style="width:100% ;">
                                <label for="" class="labelmui">Tanggal Selesai</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary waves-effect float-end me-4" style="width: 25%; letter-spacing: 2px;">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade UbahRencanaOperasi" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Edit Rencana Operasi</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="fw-bold ms-4"> Identitas Operasi</p>
                <form action="" class="form">
                    <div class="material-textfield">
                        <input type="text" name="" id="" style="width:100% ;">
                        <label for="" class="labelmui">Jenis Operasi yang Akan Dilaksanakan</label>
                    </div>
                    <div class="material-textfield">
                        <input type="text" name="" id="" style="width:100% ;">
                        <label for="" class="labelmui">Nama Operasi</label>
                    </div>
                    <div class="material-selectfield mb-3">
                        <select name="" id="">
                            <!-- <select name="" id=""  multiple required> -->
                            <option value="">Jawa Barat</option>
                            <option value="">Jawa Tengah</option>
                            <option value="">Jawa Timur</option>
                        </select>
                        <label class="labelmui">Polda</label>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="material-textfield">
                                <input type="date" name="" id="" style="width:100% ;">
                                <label for="" class="labelmui">Tanggal Mulai</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="material-textfield">
                                <input type="date" name="" id="" style="width:100% ;">
                                <label for="" class="labelmui">Tanggal Selesai</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary waves-effect float-end me-4" style="width: 25%; letter-spacing: 2px;">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade DetailRencanaOperasi" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Detail Rencana Operasi</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="fw-bold ms-4"> Identitas Operasi</p>
                <form action="" class="form">
                    <div class="material-textfield">
                        <input type="text" name="" id="" style="width:100% ;">
                        <label for="" class="labelmui">Jenis Operasi yang Akan Dilaksanakan</label>
                    </div>
                    <div class="material-textfield">
                        <input type="text" name="" id="" style="width:100% ;">
                        <label for="" class="labelmui">Nama Operasi</label>
                    </div>
                    <div class="material-selectfield mb-3">
                        <select name="" id="">
                            <!-- <select name="" id=""  multiple required> -->
                            <option value="">Jawa Barat</option>
                            <option value="">Jawa Tengah</option>
                            <option value="">Jawa Timur</option>
                        </select>
                        <label class="labelmui">Polda</label>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="material-textfield">
                                <input type="date" name="" id="" style="width:100% ;">
                                <label for="" class="labelmui">Tanggal Mulai</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="material-textfield">
                                <input type="date" name="" id="" style="width:100% ;">
                                <label for="" class="labelmui">Tanggal Selesai</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary waves-effect float-end me-4" style="width: 25%; letter-spacing: 2px;">KEMBALI</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade UploadRencanaOperasi" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title w-100 text-center" id="myLargeModalLabel">Upload File</h5>
            </div>
            <div class="modal-body">

                <form action="" class="form">
                    <div class="col-md-12">
                        <input type="file" name="photo" class="dropify rounded" data-allowed-file-extensions="jpg png jpeg" data-default-file="<?php echo base_url(); ?>assets/no_image.png" />
                    </div>
                    <button type="submit" class="btn btn-primary waves-effect float-end mt-3" style="width: 100%; letter-spacing: 2px;">UPLOAD FILE</button>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script>
    $(document).ready(function() {
        $('.dropify').dropify();

        $('#datatable').DataTable();
    });


    $("#HapusRencanaOperasi").click(function() {
        Swal.fire({
            title: 'Apakah anda ingin menghapus data ini?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#C61318',
            cancelButtonColor: '#003A91',
            cancelButtonText: 'Batal',
            confirmButtonText: 'Hapus'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: 'Berhasil',
                    text: "Data berhasil dihapus",
                    icon: 'success',
                    confirmButtonColor: '#003A91',
                    confirmButtonText: 'OK'
                })
            }
        })
    })
</script>