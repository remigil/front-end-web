<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Detail <?= $title; ?></li>
    </ol>
</nav>
<!-- </div> -->
<div class="page">
    <div class="card">

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <p class="fs-3 fw-bold text-primary">Detail Operasi</p>
                </div>
                <div class="col-md-6 mt-2">
                    <button type="button" class="btn btn-primary waves-effect float-end me-4" data-bs-toggle="modal" data-bs-target=".UbahRencanaOperasi" style=" letter-spacing: 2px;">EDIT</button>
                    <button type="button" class="btn btn-danger waves-effect float-end me-4" id="HapusRencanaOperasi" style=" letter-spacing: 2px;">HAPUS</button>
                </div>
            </div>
            <hr style="height:5px;border-width:0;color:gray;background-color:gray">
            <div class="row">
                <div class="col-md-5">
                    <p class="fs-5 fw-bold text-primary">Identitas Operasi</p>
                    <table class="table table-borderless">
                        <tr>
                            <td>Nama Operasi</td>
                            <td>:</td>
                            <td>Operasi Keselamatan</td>
                        </tr>
                        <tr>
                            <td>Jenis Operasi</td>
                            <td>:</td>
                            <td>Operasi Keselamatan 2022</td>
                        </tr>
                        <tr>
                            <td>Nama Operasi</td>
                            <td>:</td>
                            <td>13/06/2022 - 26/06/2022</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-7">
                    <p class="fs-5 fw-bold text-primary">Aset Operasi</p>
                    <div class="row d-flex">
                        <div class="col-md-2">
                            <p class="fw-bold">Logo Operasi</p>
                            <img src=<?= base_url('assets/image-default.png'); ?> alt="" class="rounded">
                        </div>
                        <div class="col-md-3 ms-5">
                            <p class="fw-bold">Background Operasi</p>
                            <img src=<?= base_url('assets/image-default.png'); ?> alt="" class="rounded">
                        </div>
                        <div class="col-md-5 ">
                            <p class="fw-bold">Banner Operasi</p>
                            <img src=<?= base_url('assets/image-default.png'); ?> alt="" class="rounded">
                        </div>
                    </div>
                </div>
            </div>
            <hr class="mt-5" style="height:5px;border-width:0;color:gray;background-color:gray">
            <div class="row">
                <div class="col-md-5 mt-4">
                    <p class="fs-4 fw-bold text-primary">Identitas Operasi</p>
                </div>
                <table id="datatable" class="table dt-responsive w-100">
                    <thead>
                        <tr>
                            <th>Polda</th>
                            <th>Polres</th>
                            <th>Username</th>
                            <th>Password</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Metro Jaya</td>
                            <td>Polres Metro Jakbar</td>
                            <td>Polmetjakbar</td>
                            <td>opskeselamatan2022</td>
                        </tr>
                        <tr>
                            <td>Metro Jaya</td>
                            <td>Polres Metro Jaktim</td>
                            <td>Polmetjaktim</td>
                            <td>opskeselamatan2022</td>
                        </tr>
                        <tr>
                            <td>Metro Jaya</td>
                            <td>Polres Metro Jakut</td>
                            <td>Polmetjakut</td>
                            <td>opskeselamatan2022</td>
                        </tr>
                        <tr>
                            <td>Metro Jaya</td>
                            <td>Polres Metro Jaksel</td>
                            <td>Polmetjaksel</td>
                            <td>opskeselamatan2022</td>
                        </tr>
                        <tr>
                            <td>Metro Jaya</td>
                            <td>Polres Metro Jakpus</td>
                            <td>Polmetjakpus</td>
                            <td>opskeselamatan2022</td>
                        </tr>
                        <tr>
                            <td>Polda Jawa Barat</td>
                            <td>Polrestabes Bandung</td>
                            <td>PolmetBandung</td>
                            <td>opskeselamatan2022</td>
                        </tr>
                        <tr>
                            <td>Polda Jawa Barat</td>
                            <td>Polres Bandung</td>
                            <td>PolmetBandung</td>
                            <td>opskeselamatan2022</td>
                        </tr>
                        <tr>
                            <td>Polda Jawa Barat</td>
                            <td>Polresta Bogor</td>
                            <td>PolmetBogor</td>
                            <td>opskeselamatan2022</td>
                        </tr>
                        <tr>
                            <td>Polda Jawa Barat</td>
                            <td>Polres Bogor</td>
                            <td>PolmetBogor</td>
                            <td>opskeselamatan2022</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-12 ">
                <a href="<?= base_url('operasi/RencanaOperasi'); ?>"><button class="btn btn-primary float-end" style="width:15%; letter-spacing:2px">KEMBALI</button></a>

            </div>
        </div>
    </div>
    <!-- End Page -->


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
                        <div class="material-textfield">
                            <input type="file" name="" id="" style="width:100%;" class="form-control">
                            <label for="" class="labelmui">Logo</label>
                        </div>
                        <div class="material-textfield">
                            <input type="file" name="" id="" style="width:100%;" class="form-control">
                            <label for="" class="labelmui">Background Image</label>
                        </div>
                        <div class="material-textfield">
                            <input type="file" name="" id="" style="width:100%;" class="form-control">
                            <label for="" class="labelmui">Banner</label>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary waves-effect float-end me-4" style="width: 25%; letter-spacing: 2px;">SIMPAN</button>
                        </div>

                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <script>
        $(document).ready(function() {
            $('.dropify').dropify();

            $('#datatable').DataTable({
                "scrollY": "200px",
                "scrollCollapse": true,
                "paging": false
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