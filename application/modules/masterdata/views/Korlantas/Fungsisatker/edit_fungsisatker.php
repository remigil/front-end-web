<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#">
                <?= $title; ?>
            </a></li>
    </ol>
</nav>
<?php
$layanan = $data['layananfungsisatker']['data']['data'];
$dokumen = $data['dokumenfungsisatker']['data']['data'];

?>
<!-- </div> -->
<div class="page">
    <button type="button" class="btn btn-primary waves-effect mb-2" id="btnTambah" data-bs-toggle="modal"
        data-bs-target=".TambahLayanan">Tambah Layanan Satker</button>
    <button type="button" class="btn btn-info waves-effect mb-2" id="btnTambah" data-bs-toggle="modal"
        data-bs-target=".TambahDokumen">Tambah Dokumen Satker</button>

    <div class="modal fade TambahLayanan" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary ">
                    <h5 class="modal-title text-white" id="myLargeModalLabel">Tambah Layanan Satuan Kerja</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" class="form_tambah_layanan" id="form_tambah_layanan" method="post"
                        enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $data['fungsisatker']['data']['data']['id']; ?>"
                            style="display: none">

                        <input type="hidden" name="<?= $csrf_name; ?>" value="<?= $csrf_token; ?>"
                            style="display: none">
                        <div class="col-md-12 mb-3" id="dynamic_layanan">
                            <div class="row">

                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-12 mb-2">
                                            <label for="logo_layanan" class="form-label">Logo Layanan</label>
                                            <input type="file" name="logo_layanan[]" class="form-control">

                                        </div>
                                        <div class=" col-md-12 mb-2">
                                            <div class="form-floating">
                                                <input type="text" name="name_layanan[]" class="form-control name_list"
                                                    value="<?= $layanan[$i]['name_layanan'] ?>">
                                                <label for="name_layanan" class="form-label">Nama Layanan</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-floating">
                                                <input type="text" name="description[]" class="form-control name_list"
                                                    value="<?= $layanan[$i]['description'] ?>">
                                                <label for="description" class="form-label">Deskripsi</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mt-5">
                                    <button type="button" name="addlayanan" id="addlayanan" class="btn btn-success"
                                        style="width:100%; height:80%; font-size:300%">+</button>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <button type="submit" class="btn btn-primary waves-effect float-end"
                                style="width: 25%; letter-spacing: 2px;">SIMPAN</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <div class="modal fade TambahDokumen" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary ">
                    <h5 class="modal-title text-white" id="myLargeModalLabel">Tambah Dokumen Satuan Kerja</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" class="form_tambah_dokumen" id="form_tambah_dokumen" method="post"
                        enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $data['fungsisatker']['data']['data']['id']; ?>"
                            style="display: none">

                        <input type="hidden" name="<?= $csrf_name; ?>" value="<?= $csrf_token; ?>"
                            style="display: none">
                        <div class="col-md-12 mb-3" id="dynamic_dokumen">
                            <div class="row">

                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-12 mb-2">
                                            <label for="dokumen" class="form-label">Dokumen</label>
                                            <input type="file" name="file[]" class="form-control">
                                            <span class="text-danger">Dokumen Berbentuk .pdf / .word</span>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-floating">
                                                <input type="text" name="description[]" class="form-control name_list"
                                                    value="<?= $dokumen[$i]['description'] ?>">
                                                <label for="description" class="form-label">Deskripsi</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mt-5">
                                    <button type="button" name="adddokumen" id="adddokumen" class="btn btn-success"
                                        style="width:100%; height:80%; font-size:300%">+</button>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <button type="submit" class="btn btn-primary waves-effect float-end"
                                style="width: 25%; letter-spacing: 2px;">SIMPAN</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <div class="card">

        <div class="card-body">

            <form action="" class="form" id="form_tambah" method="post" enctype="multipart/form-data">

                <input type="hidden" name="<?= $csrf_name; ?>" value="<?= $csrf_token; ?>" style="display: none">
                <input type="hidden" name="id" value="<?= $data['fungsisatker']['data']['data']['id']; ?>"
                    style="display: none">


                <div class="col-md-12 mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" placeholder="nama" name="name_satker"
                            value="<?= $data['fungsisatker']['data']['data']['name_satker']; ?>">
                        <label for="nama">Nama Satuan Kerja</label>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="fullname_satker"
                            value="<?= $data['fungsisatker']['data']['data']['fullname_satker']; ?>">
                        <label for="fullname_satker">Fullname Satuan Kerja</label>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="email_satker"
                            value="<?= $data['fungsisatker']['data']['data']['email_satker']; ?>">
                        <label for="email_satker"> Satuan Kerja</label>
                    </div>
                </div>
                <h5>Layanan Satuan Kerja</h5>
                <?php
                for ($i = 0; $i < count($layanan); $i++) { ?>

                    <div class="col-md-12 mb-3">
                        <div class="row">
                            <div class="col-md-2 border">

                                <?php if ($layanan[$i]['logo_layanan']) { ?>
                                    <img src="<?= url_api() ?><?='fungsisatker/logo/' . $layanan[$i]['logo_layanan'] ?> " alt=""
                                        style="width:100%; height:100">
                                <?php } else { ?>
                                    <img src="<?= base_url() ?><?='assets/no_image.png' ?> " alt=""
                                        style="width:100%; height:100">
                                <?php } ?>
                            </div>
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <input type="hidden" name="idlayanan[]" class="form-control name_list"
                                            value="<?= $layanan[$i]['id'] ?>">
                                        <label for="logo_layanan" class="form-label">Logo Layanan</label>
                                        <input type="file" name="logo_layanan[]" class="form-control">

                                    </div>
                                    <div class=" col-md-12 mb-2">
                                        <div class="form-floating">
                                            <input type="text" name="name_layanan[]" class="form-control name_list"
                                                value="<?= $layanan[$i]['name_layanan'] ?>">
                                            <label for="name_layanan" class="form-label">Nama Layanan</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" name="descriptionlayanan[]" class="form-control name_list"
                                                value="<?= $layanan[$i]['description'] ?>">
                                            <label for="descriptionlayanan" class="form-label">Deskripsi</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1 mt-3">

                                <button type="button" name="removelayanan" id="<?= $layanan[$i]['id'] ?>"
                                    class="btn btn-danger btn_removelayanan"
                                    style="width:100%; height:80%; font-size:300%">-</button>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <hr class="mb-5">
                <h5>Dokumen Satuan Kerja</h5>
                <?php
                for ($i = 0; $i < count($dokumen); $i++) { ?>

                    <div class="col-md-12 mb-3">
                        <div class="row">
                            <div class="col-md-2 border">

                                <?php if ($dokumen[$i]['file']) { ?>
                                    <img src="<?= url_api(); ?><?='fungsisatker/dokumen/' . $dokumen[$i]['file'] ?> " alt=""
                                        style="width:100%; height:100">
                                <?php } else { ?>
                                    <img src="<?= base_url() ?><?='assets/no_image.png' ?> " alt=""
                                        style="width:100%; height:100">
                                <?php } ?>
                            </div>
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <input type="hidden" name="iddokumen[]" class="form-control name_list"
                                            value="<?= $dokumen[$i]['id'] ?>">
                                        <label for="file" class="form-label">Dokumen</label>
                                        <input type="file" name="file[]" class="form-control">
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" name="descriptiondokumen[]" class="form-control name_list"
                                                value="<?= $dokumen[$i]['description'] ?>">
                                            <label for="descriptiondokumen" class="form-label">Deskripsi</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1 mt-3">

                                <button type="button" name="removedokumen" id="<?= $dokumen[$i]['id'] ?>"
                                    class="btn btn-danger btn_removedokumen"
                                    style="width:100%; height:80%; font-size:300%">-</button>
                            </div>
                        </div>
                    </div>
                <?php } ?>


                <div class="col-md-12 mt-5">
                    <button type="submit" class="btn btn-primary waves-effect float-end" style="width: 25%; letter-spacing: 2px;">SIMPAN</button>
                        <a href="<?php echo base_url('masterdata/Fungsisatker'); ?>" class="btn btn-secondary waves-effect float-end" style="width: 25%; letter-spacing: 2px; border:1;">Kembali</a>
                </div>
            </form>

        </div>
    </div>
</div>
<!-- End Page -->
<script>
    $(document).ready(function () {
        $(".form").submit(function (e) {
            $("#overlay").fadeIn(300);
            e.preventDefault();
            var formData = new FormData($('.form')[0]);
            $.ajax({
                url: "<?php echo base_url(); ?>masterdata/Fungsisatker/update",
                method: "POST",
                data: formData,
                dataType: 'JSON',
                contentType: false,
                processData: false,
                success: function (data) {
                    $("#overlay").fadeOut(300);
                    if (data['status'] == true) {
                        Swal.fire(
                            `${data['message']}`,
                            '',
                            'success'
                        ).then(function () {
                            location.reload();

                        });
                    } else {
                        Swal.fire(
                            `${data['message']}`,
                            '',
                            'error'
                        ).then(function () { });
                    }
                }
            });
        });

        $(".form_tambah_layanan").submit(function (e) {
            $("#overlay").fadeIn(300);
            e.preventDefault();
            var formData = new FormData($('.form_tambah_layanan')[0]);
            $.ajax({
                url: "<?php echo base_url(); ?>masterdata/Fungsisatker/storelayanan",
                method: "POST",
                data: formData,
                dataType: 'JSON',
                contentType: false,
                processData: false,
                success: function (data) {
                    $("#overlay").fadeOut(300);
                    if (data['status'] == true) {
                        Swal.fire(
                            `${data['message']}`,
                            '',
                            'success'
                        ).then(function () {

                            $(".TambahVisimisi").modal('hide');
                            location.reload();
                        });
                    } else {
                        Swal.fire(
                            `${data['message']}`,
                            '',
                            'error'
                        ).then(function () { });
                    }
                }
            });
        });

        $(document).on('click', '.btn_removelayanan', function () {
            var id = $(this).attr("id");
            Swal.fire({
                title: 'Apakah anda ingin menghapus layanan ini?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#C61318',
                cancelButtonColor: '#003A91',
                cancelButtonText: 'Batal',
                confirmButtonText: 'Hapus',
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "<?php echo base_url(); ?>masterdata/Fungsisatker/hapuslayanan/",
                        type: "POST",
                        data: {
                            id: id
                        },
                        dataType: 'JSON',
                        success: function (data) {
                            $("#overlay").fadeOut(300);
                            if (data['status'] == true) {
                                Swal.fire(
                                    `${data['message']}`,
                                    '',
                                    'success'
                                ).then(function () {
                                    location.reload();

                                });
                            } else {
                                Swal.fire(
                                    `${data['message']}`,
                                    '',
                                    'error'
                                ).then(function () {
                                    location.reload();

                                });
                            }
                        }
                    });
                }
            })
        });
        i = 1;
        $('#addlayanan').click(function () {
            i++;
            $('#dynamic_layanan').append(`
            <div class="row mt-3 mb-2" id="removelayanana${i}">
               
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <label for="logo_layanan" class="form-label">Logo Layanan</label>
                            <input type="file" name="logo_layanan[]" class="form-control" ">
                        </div>
                        <div class="col-md-12 mb-2">
                            <div class="form-floating mb-4">
                                <input type="text" name="name_layanan[]" class="form-control name_list">
                                <label for="name_layanan" class="form-label">Nama Layanan</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" name="description[]" class="form-control name_list">
                                <label for="description" class="form-label">Deskripsi</label>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="col-md-3 mt-5">
                <button type="button" name="removelayanana" id="${i}" class="btn btn-danger btn_removelayanana" style="width:100%; height:80%; font-size:300%">-</button>
            </div>
        </div>`);
        });

        $(document).on('click', '.btn_removelayanana', function () {
            var i = $(this).attr("id");
            $('#removelayanana' + i + '').remove();
        });


        $(".form_tambah_dokumen").submit(function (e) {
            $("#overlay").fadeIn(300);
            e.preventDefault();
            var formData = new FormData($('.form_tambah_dokumen')[0]);
            $.ajax({
                url: "<?php echo base_url(); ?>masterdata/Fungsisatker/storedokumen",
                method: "POST",
                data: formData,
                dataType: 'JSON',
                contentType: false,
                processData: false,
                success: function (data) {
                    $("#overlay").fadeOut(300);
                    if (data['status'] == true) {
                        Swal.fire(
                            `${data['message']}`,
                            '',
                            'success'
                        ).then(function () {

                            $(".TambahDokumen").modal('hide');
                            location.reload();
                        });
                    } else {
                        Swal.fire(
                            `${data['message']}`,
                            '',
                            'error'
                        ).then(function () {
                            $(".TambahDokumen").modal('hide');
                            location.reload();
                        });
                    }
                }
            });
        });

        $(document).on('click', '.btn_removedokumen', function () {
            var id = $(this).attr("id");
            Swal.fire({
                title: 'Apakah anda ingin menghapus dokumen ini?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#C61318',
                cancelButtonColor: '#003A91',
                cancelButtonText: 'Batal',
                confirmButtonText: 'Hapus',
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "<?php echo base_url(); ?>masterdata/Fungsisatker/hapusdokumen/",
                        type: "POST",
                        data: {
                            id: id
                        },
                        dataType: 'JSON',
                        success: function (data) {
                            $("#overlay").fadeOut(300);
                            if (data['status'] == true) {
                                Swal.fire(
                                    `${data['message']}`,
                                    '',
                                    'success'
                                ).then(function () {
                                    location.reload();

                                });
                            } else {
                                Swal.fire(
                                    `${data['message']}`,
                                    '',
                                    'error'
                                ).then(function () {
                                    location.reload();

                                });
                            }
                        }
                    });
                }
            })
        });
        i = 1;
        $('#adddokumen').click(function () {
            i++;
            $('#dynamic_dokumen').append(`
            <div class="row mt-3 mb-2" id="removedokumena${i}">
               
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <label for="file" class="form-label">Dokumen</label>
                            <input type="file" name="file[]" class="form-control">
                            <span class="text-danger">Dokumen Berbentuk .pdf / .word</span>

                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" name="description[]" class="form-control name_list">
                                <label for="description" class="form-label">Deskripsi</label>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="col-md-3 mt-5">
                <button type="button" name="removedokumena" id="${i}" class="btn btn-danger btn_removedokumena" style="width:100%; height:80%; font-size:300%">-</button>
            </div>
        </div>`);
        });

        $(document).on('click', '.btn_removedokumena', function () {
            var i = $(this).attr("id");
            $('#removedokumena' + i + '').remove();
        });


    });
    $(document).ready(function () {



    });
</script>