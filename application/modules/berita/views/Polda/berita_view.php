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
    <button type="button" class="btn btn-primary waves-effect mb-2" data-bs-toggle="modal" data-bs-target=".TambahBerita">Tambah Berita</button>
    <div class="card">

        <div class="card-body">

            <table id="datatable" class="table dt-responsive w-100">
                <thead>
                    <tr>
                        <th>Judul Berita</th>
                        <th>Isi Berita</th>
                        <th>Author</th>
                        <th>Tanggal Berita</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Polrid Tegaskan Perubahan Warna Plat Hitam Jadi Putih Gratis</td>
                        <td>Korps Lalu Lintas ( Korlantas ) segera merealisasikan perubahan warna dari hitam menjadi putih pada Tanda Nomor Kendaraan Bermotor (TNKB) atau pelat nomor kendaraan . Dirregident Korlantas Polri Brigjen Yusri Yunus mengatakan tidak mengungkapkan kapan mulai dilaksanakan, tapi perubahan warna itu akan dilakukan secepatnya</td>
                        <td>Jamal</td>
                        <td>Sabtu, 2022-08-20</td>
                        <td>
                            <button style="background-color:transparent ; border:none" data-bs-toggle="modal" data-bs-target=".DetailBerita">
                                <h3 style=" color:#003A91"><i class="mdi mdi-eye"></i></h3>
                            </button>
                            <button style="background-color:transparent ; border:none" data-bs-toggle="modal" data-bs-target=".UbahBerita">
                                <h3 style="color:#67676D"><i class="mdi mdi-pencil"></i></h3>
                            </button>
                            <button style="background-color:transparent ; border:none" id="HapusBerita">
                                <h3 style="color:#ED171D"><i class="mdi mdi-trash-can"></i></h3>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Jadwal Uji Coba Ganjil Genap di Tol Jakarta-Cikampek</td>
                        <td>Korps Polisi Lalu Lintas ( Korlantas ) bakal melaksanakan uji coba penerapan rekayasa lalu lintas ganjil-genap di ruas Tol Jakarta-Cikampek pada Senin, 25 April 2022 besok. Hal ini dilakukan untuk, keamanan, dan kelancaran pelaksanaan mudik Lebaran 2022.</td>
                        <td>Asep</td>
                        <td>Sabtu, 2022-08-20</td>
                        <td>
                            <button style="background-color:transparent ; border:none" data-bs-toggle="modal" data-bs-target=".DetailBerita">
                                <h3 style=" color:#003A91"><i class="mdi mdi-eye"></i></h3>
                            </button>
                            <button style="background-color:transparent ; border:none" data-bs-toggle="modal" data-bs-target=".UbahBerita">
                                <h3 style="color:#67676D"><i class="mdi mdi-pencil"></i></h3>
                            </button>
                            <button style="background-color:transparent ; border:none" id="HapusBerita">
                                <h3 style="color:#ED171D"><i class="mdi mdi-trash-can"></i></h3>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Kakorlantas Akan Amati Terus Jalur Mudik</td>
                        <td>Kepala Korps Lalu Lintas (Kakorlantas) Polri Irjen Pol Firman Shantyabudi menegaskan pihaknya akan terus mengamati situasi mengenai arus mudik menjelang Hari Raya Idul Fitri 1443 Hijriyah. Hal tersebut diungkapkannya saat meninjau beberapa titik jalur mudik di Jalan Tol Jakarta-Cikampek.</td>
                        <td>Ujang</td>
                        <td>Sabtu, 2022-08-20</td>
                        <td>
                            <button style="background-color:transparent ; border:none" data-bs-toggle="modal" data-bs-target=".DetailBerita">
                                <h3 style=" color:#003A91"><i class="mdi mdi-eye"></i></h3>
                            </button>
                            <button style="background-color:transparent ; border:none" data-bs-toggle="modal" data-bs-target=".UbahBerita">
                                <h3 style="color:#67676D"><i class="mdi mdi-pencil"></i></h3>
                            </button>
                            <button style="background-color:transparent ; border:none" id="HapusBerita">
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


<div class="modal fade TambahBerita" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Tambah Berita</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="form">
                    <div class="material-textfield">
                        <input type="text" name="" id="" style="width:100% ;">
                        <label for="" class="labelmui">Judul Berita</label>
                    </div>
                    <div class="material-textfield">
                        <input type="text" name="" id="" style="width:100% ;">
                        <label for="" class="labelmui">Isi Berita</label>
                    </div>
                    <div class="material-textfield">
                        <input type="file" name="" id="" style="width:100% ;" class="form-control">
                        <label for="" class="labelmui">Foto Berita</label>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary waves-effect float-end me-4" style="width: 25%; letter-spacing: 2px;">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade UbahBerita" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Edit Berita</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="form">
                    <div class="material-textfield">
                        <input type="text" name="" id="" style="width:100% ;">
                        <label for="" class="labelmui">Judul Berita</label>
                    </div>
                    <div class="material-textfield">
                        <input type="text" name="" id="" style="width:100% ;">
                        <label for="" class="labelmui">Isi Berita</label>
                    </div>
                    <div class="material-textfield">
                        <input type="file" name="" id="" style="width:100% ;" class="form-control">
                        <label for="" class="labelmui">Foto Berita</label>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary waves-effect float-end me-4" style="width: 25%; letter-spacing: 2px;">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade DetailBerita" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Detail Berita</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="form">
                    <div class="material-textfield">
                        <input type="text" name="" id="" style="width:100% ;">
                        <label for="" class="labelmui">Judul Berita</label>
                    </div>
                    <div class="material-textfield">
                        <input type="text" name="" id="" style="width:100% ;">
                        <label for="" class="labelmui">Isi Berita</label>
                    </div>
                    <div class="material-textfield">
                        <input type="file" name="" id="" style="width:100% ;" class="form-control">
                        <label for="" class="labelmui">Foto Berita</label>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade UploadBerita" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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


    $("#HapusBerita").click(function() {
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