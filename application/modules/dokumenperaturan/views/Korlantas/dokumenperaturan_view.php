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
    <button type="button" class="btn btn-primary waves-effect mb-2" data-bs-toggle="modal" data-bs-target=".TambahDokumenPeraturan">Tambah Dokumen Peraturan</button>
    <div class="card">

        <div class="card-body">

            <table id="datatable" class="table dt-responsive w-100">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th>Jenis Peraturan</th>
                        <th width="40%">Nama Peraturan</th>
                        <th>Tahun</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td width="5%">1</td>
                        <td>Undang - undang</td>
                        <td width="40%">UNDANG-UNDANG DASAR NEGARA REPUBLIK INDONESIA TAHUN 1945</td>
                        <td>1945</td>
                        <td>
                            <button style="background-color:transparent ; border:none" data-bs-toggle="modal" data-bs-target=".DetailDokumenPeraturan">
                                <h3 style=" color:#003A91"><i class="mdi mdi-eye"></i></h3>
                            </button>
                            <button style="background-color:transparent ; border:none" data-bs-toggle="modal" data-bs-target=".UbahDokumenPeraturan">
                                <h3 style="color:#67676D"><i class="mdi mdi-pencil"></i></h3>
                            </button>
                            <button style="background-color:transparent ; border:none" id="HapusDokumenPeraturan">
                                <h3 style="color:#ED171D"><i class="mdi mdi-trash-can"></i></h3>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td width="5%">2</td>
                        <td>Undang - undang</td>
                        <td width="40%">UU NOMOR 2 TAHUN 2002 TTG KEPOLISIAN NEGARA REPUBLIK INDONESIA</td>
                        <td>2002</td>
                        <td>
                            <button style="background-color:transparent ; border:none" data-bs-toggle="modal" data-bs-target=".DetailDokumenPeraturan">
                                <h3 style=" color:#003A91"><i class="mdi mdi-eye"></i></h3>
                            </button>
                            <button style="background-color:transparent ; border:none" data-bs-toggle="modal" data-bs-target=".UbahDokumenPeraturan">
                                <h3 style="color:#67676D"><i class="mdi mdi-pencil"></i></h3>
                            </button>
                            <button style="background-color:transparent ; border:none" id="HapusDokumenPeraturan">
                                <h3 style="color:#ED171D"><i class="mdi mdi-trash-can"></i></h3>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td width="5%">3</td>
                        <td>Peraturan Pemerintah</td>
                        <td width="40%">PERATURAN PEMERINTAH NOMOR 55 TAHUN 2012 TENTANG KENDARAAN</td>
                        <td>2012</td>
                        <td>
                            <button style="background-color:transparent ; border:none" data-bs-toggle="modal" data-bs-target=".DetailDokumenPeraturan">
                                <h3 style=" color:#003A91"><i class="mdi mdi-eye"></i></h3>
                            </button>
                            <button style="background-color:transparent ; border:none" data-bs-toggle="modal" data-bs-target=".UbahDokumenPeraturan">
                                <h3 style="color:#67676D"><i class="mdi mdi-pencil"></i></h3>
                            </button>
                            <button style="background-color:transparent ; border:none" id="HapusDokumenPeraturan">
                                <h3 style="color:#ED171D"><i class="mdi mdi-trash-can"></i></h3>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td width="5%">4</td>
                        <td>Peraturan Kapolri</td>
                        <td width="40%">PERATURAN KAPOLRI NOMOR 1 TAHUN 2019 TENTANG SISTEM MANAJEMEN DAN STANDAR KEBERHASILAN OPERASIONAL POLRI</td>
                        <td>2019</td>
                        <td>
                            <button style="background-color:transparent ; border:none" data-bs-toggle="modal" data-bs-target=".DetailDokumenPeraturan">
                                <h3 style=" color:#003A91"><i class="mdi mdi-eye"></i></h3>
                            </button>
                            <button style="background-color:transparent ; border:none" data-bs-toggle="modal" data-bs-target=".UbahDokumenPeraturan">
                                <h3 style="color:#67676D"><i class="mdi mdi-pencil"></i></h3>
                            </button>
                            <button style="background-color:transparent ; border:none" id="HapusDokumenPeraturan">
                                <h3 style="color:#ED171D"><i class="mdi mdi-trash-can"></i></h3>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td width="5%">5</td>
                        <td>Peraturan Kakorlantas Polri</td>
                        <td width="40%">KEPUTUSAN KAKORLANTAS NOMOR KEP-166-VIII-2019 TENTANG NRKB PILIHAN</td>
                        <td>2019</td>
                        <td>
                            <button style="background-color:transparent ; border:none" data-bs-toggle="modal" data-bs-target=".DetailDokumenPeraturan">
                                <h3 style=" color:#003A91"><i class="mdi mdi-eye"></i></h3>
                            </button>
                            <button style="background-color:transparent ; border:none" data-bs-toggle="modal" data-bs-target=".UbahDokumenPeraturan">
                                <h3 style="color:#67676D"><i class="mdi mdi-pencil"></i></h3>
                            </button>
                            <button style="background-color:transparent ; border:none" id="HapusDokumenPeraturan">
                                <h3 style="color:#ED171D"><i class="mdi mdi-trash-can"></i></h3>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>
<!-- End Page -->


<div class="modal fade TambahDokumenPeraturan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Tambah Dokumen Peraturan</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="form">
                    <div class="material-textfield">
                        <input type="text" name="" id="" style="width:100% ;">
                        <label for="" class="labelmui">Jenis Dokumen Peraturan</label>
                    </div>
                    <div class="material-textfield">
                        <input type="text" name="" id="" style="width:100% ;">
                        <label for="" class="labelmui">Nama Dokumen Peraturan</label>
                    </div>
                    <div class="material-textfield">
                        <input type="file" name="" id="" style="width:100% ;" class="form-control">
                        <label for="" class="labelmui">File Dokumen Peraturan</label>
                    </div>
                    <div class="material-textfield">
                        <input type="text" name="" id="" style="width:100% ;">
                        <label for="" class="labelmui">Tahun</label>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary waves-effect float-end me-4" style="width: 25%; letter-spacing: 2px;">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade UbahDokumenPeraturan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Edit Dokumen Peraturan</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="form">
                    <div class="material-textfield">
                        <input type="text" name="" id="" style="width:100% ;">
                        <label for="" class="labelmui">Jenis Dokumen Peraturan</label>
                    </div>
                    <div class="material-textfield">
                        <input type="text" name="" id="" style="width:100% ;">
                        <label for="" class="labelmui">Nama Dokumen Peraturan</label>
                    </div>
                    <div class="material-textfield">
                        <input type="file" name="" id="" style="width:100% ;" class="form-control">
                        <label for="" class="labelmui">File Dokumen Peraturan</label>
                    </div>
                    <div class="material-textfield">
                        <input type="text" name="" id="" style="width:100% ;">
                        <label for="" class="labelmui">Tahun</label>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary waves-effect float-end me-4" style="width: 25%; letter-spacing: 2px;">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade DetailDokumenPeraturan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Detail Dokumen Peraturan</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="form">
                    <div class="material-textfield">
                        <input type="text" name="" id="" style="width:100% ;">
                        <label for="" class="labelmui">Jenis Dokumen Peraturan</label>
                    </div>
                    <div class="material-textfield">
                        <input type="text" name="" id="" style="width:100% ;">
                        <label for="" class="labelmui">Nama Dokumen Peraturan</label>
                    </div>
                    <div class="material-textfield">
                        <input type="file" name="" id="" style="width:100% ;" class="form-control">
                        <label for="" class="labelmui">File Dokumen Peraturan</label>
                    </div>
                    <div class="material-textfield">
                        <input type="text" name="" id="" style="width:100% ;">
                        <label for="" class="labelmui">Tahun</label>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade UploadDokumenPeraturan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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


    $("#HapusDokumenPeraturan").click(function() {
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