<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item ">Input Data</li>
        <li class="breadcrumb-item active fw-bold" aria-current="page"><a href="#"><?= $title; ?></a></li>
    </ol>
</nav>
<!-- </div> -->
<div class="page">

    <div class="card">

        <div class="card-body">
            <div class="col-md-12">
                <div class="row d-flex">
                    <div class="col-md-3">
                        <div class="material-selectfield mb-3">
                            <select name="" id="">
                                <!-- <select name="" id=""  multiple required> -->
                                <option value="">SEMUA POLRES</option>
                                <option value="">POLRESTABES BANDUNG</option>
                                <option value="">POLRESTA BOGOR</option>
                                <option value="">POLRES BOGOR</option>
                                <option value="">POLRESTA SUKABUMI</option>
                                <option value="">POLRES CIANJUR</option>
                            </select>
                            <label class="labelmui">Polres</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="material-selectfield mb-3">
                            <select name="" id="">
                                <!-- <select name="" id=""  multiple required> -->
                                <option value="">Ditgakkum</option>
                                <option value="">Ditkamsel</option>
                                <option value="">Ditregident</option>
                            </select>
                            <label class="labelmui">Satker Mabes</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="material-selectfield mb-3">
                            <select name="" id="">
                                <!-- <select name="" id=""  multiple required> -->
                                <option value="">Data Dakgar Lantas</option>
                                <option value="">Pelanggaran Konvensional</option>
                                <option value="">Kecelakaan Lalu Lintas</option>
                                <option value="">Turjagwali</option>
                                <option value="">Dikmaslantas</option>
                                <option value="">Penyebaran / Pemasangan</option>
                                <option value="">SIM</option>
                                <option value="">BPKB</option>
                                <option value="">RANMOR</option>
                                <option value="">STNK</option>
                            </select>
                            <label class="labelmui">Jenis Laporan</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="material-textfield mb-3">
                            <input type="date" name="" id="" style="width:100% ;">

                            <label class="labelmui">Tanggal Input</label>
                        </div>
                    </div>
                </div>
            </div>

            <table id="datatable" class="table table-bordered dt-responsive w-100">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>No</th>
                        <th>Polres</th>
                        <th>Jumlah Data</th>
                        <th>Pengaturan</th>
                        <th>Penjagaan</th>
                        <th>Pengawalan</th>
                        <th>Patroli</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>POLRESTABES BANDUNG</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>POLRESTA BOGOR</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>POLRES BOGOR</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>POLRESTA SUKABUMI</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>POLRES SUKABUMI</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>POLRES CIANJUR</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>POLRES PURWAKARTAPURWAKARTA</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>POLRES KARAWANG</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>POLRES SUBANG</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>POLRES CIMAHI</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                </tbody>
            </table>
            <div class="col-md-12">
                <button type="button" class="btn btn-primary waves-effect float-end mt-3" style="width: 10%; letter-spacing: 2px;">SIMPAN</button>
                <button type="button" class="btn btn-secondary waves-effect float-end mt-3 me-3" style="width: 10%; letter-spacing: 2px;">BATAL</button>

            </div>
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
                        <select class="form-select" name="" id="">
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

        $('#datatable').DataTable({
            scrollY: "450px",
            scrollCollapse: true,
            paging: false,
            bInfo: false
        });
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