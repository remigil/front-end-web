<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#">
                <?= $title; ?>
            </a></li>
    </ol>
</nav>
<!-- </div> -->
<div class="page">
    <!-- <button type="button" class="btn btn-primary waves-effect mb-2" id="btnTambah" data-bs-toggle="modal" data-bs-target=".TambahVisimisi">Tambah Visimisi</button> -->
    <div class="card">

        <div class="card-body">

            <form action="" class="form" id="form_tambah" method="post" enctype="multipart/form-data">
                <input type="hidden" name="<?= $csrf_name; ?>" value="<?= $csrf_token; ?>" style="display: none">
                <input type="hidden" name="id" value="<?php echo $data["publikasi"]["id"] ?>" style="display: none">


                <div class="col-md-12 mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" placeholder="nama"
                            value="<?php echo $data["publikasi"]["name_publikasi"] ?>" name="name_publikasi">
                        <label for="nama">Nama Satuan Kerja</label>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" placeholder="Link Youtube"
                            value="<?php echo $data["publikasi"]["link_youtube_publikasi"] ?>"
                            name="link_youtube_publikasi">
                        <label for="youtube_satker">Youtube</label>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="form-floating">
                        <label for="editor1">Keterangan Publikasi</label><br><br>
                        <textarea class="form-control" id="editor1" cols="30"
                            rows="10"><?php echo $data["publikasi"]["description_publikasi"] ?></textarea>
                        <textarea hidden class="form-control" name="description_publikasi" cols="30"
                            rows="10"><?php echo $data["publikasi"]["description_publikasi"] ?></textarea>
                    </div>
                </div>


                <label class="mt-3">Dokumen Publikasi</label><br><br>


                <?php if (count($data["publikasi"]["dokumenpublikasis"]) != 0) { ?>
                    <?php for ($i = 0; $i < count($data["publikasi"]["dokumenpublikasis"]); $i++) { ?>
                        <div class="col-md-12 mb-3" id="dynamic_fieldEdit">

                            <div class="row mb-2" id="removeEdit<?= $i ?>">
                                <input hidden type="text" name="idDokumenEdit[]" class="form-control name_listEdit"
                                    value="<?php echo $data["publikasi"]["dokumenpublikasis"][$i]['id'] ?>">

                                <div class="col-md-4 mb-2">
                                    <div class="form-floating">
                                        <input type="text" name="descriptionEdit[]" class="form-control name_listEdit"
                                            value="<?php echo ($data["publikasi"]["dokumenpublikasis"] ? $data["publikasi"]["dokumenpublikasis"][$i]['description'] : '') ?>">
                                        <label for="description" class="form-label">Keterangan</label>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-2">
                                    <div style="display: flex;">
                                        <?php if ($data["publikasi"]["dokumenpublikasis"][$i]['foto'] != null) { ?>
                                            <img src="<?php echo url_api(); ?>publikasi/<?php echo $data["publikasi"]["dokumenpublikasis"][$i]['foto']; ?>"
                                                alt="" class="rounded-circle avatar-md">
                                        <?php } else { ?>
                                            <img src="<?php echo base_url(); ?>assets/no_image.png" alt=""
                                                class="rounded avatar-md">
                                        <?php } ?>

                                        <input type="file" name="fotoEdit[]" style="margin-left: 5px; margin-top: 10px;"
                                            class="form-control name_listEdit">
                                    </div>
                                </div>
                                <div class="col-md-4 mb-2">
                                    <div class="form-floating">
                                        <input type="text" name="link_fotoEdit[]" class="form-control name_listEdit"
                                            value="<?php echo ($data["publikasi"]["dokumenpublikasis"] ? $data["publikasi"]["dokumenpublikasis"][$i]['link_foto'] : '') ?>">
                                        <label for="link_fotoEdit" class="form-label">Link Foto</label>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <button type="button" name="remove"
                                        id="<?= $data["publikasi"]["dokumenpublikasis"][$i]['id'] ?>"
                                        class="btn btn-danger btn_removeEdit">X</button>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>

                <div class="col-md-12 mb-3" id="dynamic_field">
                    <div class="row mb-2">
                        <div class="col-md-4 mb-2">
                            <div class="form-floating">
                                <input type="text" name="description[]" class="form-control name_list">
                                <label for="description" class="form-label">Keterangan</label>
                            </div>
                        </div>
                        <div class="col-md-3 mb-2">
                            <input type="file" name="foto[]" style="margin-top: 10px;" class="form-control name_list">
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="form-floating">
                                <input type="text" name="link_foto[]" class="form-control name_list">
                                <label for="link_foto" class="form-label">Link Foto</label>
                            </div>
                        </div>
                        <div class="col-md-1">

                            <button type="button" name="add" id="add" class="btn btn-success">+</button>

                        </div>
                    </div>
                </div>



                <label class="mt-3">Link Publikasi</label><br><br>
                <?php if (count($data["publikasi"]["linkpublikasis"]) != 0) { ?>
                    <?php for ($i = 0; $i < count($data["publikasi"]["linkpublikasis"]); $i++) { ?>
                        <div class="col-md-12 mb-3" id="dynamic_fieldEdit">

                            <div class="row mb-2" id="removeEdit<?= $i ?>">

                                <input hidden type="text" name="idLinkEdit[]" class="form-control name_listEdit"
                                    value="<?php echo $data["publikasi"]["linkpublikasis"][$i]['id'] ?>">

                                <div class="col-md-11 mb-2">
                                    <div class="form-floating">
                                        <input type="text" name="link_youtube_publikasiDokEdit[]"
                                            class="form-control name_listLink"
                                            value="<?php echo ($data["publikasi"]["linkpublikasis"] ? $data["publikasi"]["linkpublikasis"][$i]['link_youtube_publikasi'] : '') ?>">
                                        <label for="link_youtube_publikasiDokEdit" class="form-label">Link
                                            Youtube</label>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <button type="button" name="remove"
                                        id="<?= $data["publikasi"]["linkpublikasis"][$i]['id'] ?>"
                                        class="btn btn-danger btn_removeEditLink">X</button>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>

                <div class="col-md-12 mb-3" id="dynamic_fieldLink">
                    <div class="row mb-2">
                        <div class="col-md-11 mb-2">
                            <div class="form-floating">
                                <input type="text" name="link_youtube_publikasiDok[]"
                                    class="form-control name_listLink">
                                <label for="link_youtube_publikasiDok" class="form-label">Link
                                    Youtube</label>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <button type="button" name="add" id="addLink" class="btn btn-success">+</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mt-3">
                    <button type="submit" class="btn btn-primary waves-effect float-end"
                        style="width: 25%; letter-spacing: 2px;">SIMPAN</button>
                        <a href="<?php echo base_url('masterdata/Fungsisatker'); ?>" class="btn btn-secondary waves-effect float-end" style="width: 25%; letter-spacing: 2px; border:1;">Kembali</a>
                </div>
            </form>

        </div>
    </div>
</div>
<!-- End Page -->



<script>
    $(document).ready(function () {
        $('.dropify').dropify();
        CKEDITOR.replace("editor1", {
            removePlugins: ['link', 'image', 'uploadimage']
        });


        var i = 1;
        $('#add').click(function () {
            i++;
            $('#dynamic_field').append(`
            <div class="row mb-2" id="remove${i}">
                <div class="col-md-4 mb-2">
                    <div class="form-floating">
                        <input type="text" name="description[]" class="form-control name_list" >
                        <label for="description" class="form-label">Keterangan</label>
                    </div>
                </div>
                <div class="col-md-3 mb-2"> 
                    <input type="file" name="foto[]" style="margin-top: 10px;"
                        class="form-control name_list">
                </div>
                <div class="col-md-4 mb-2">
                    <div class="form-floating">
                        <input type="text" name="link_foto[]" class="form-control name_list" >
                        <label for="link_foto" class="form-label">Link Foto</label>
                    </div>
                </div>
                <div class="col-md-1">
                    <button type="button" name="remove" id="${i}" class="btn btn-danger btn_remove">X</button>
                </div>
            </div>
            `);
        });

        $(document).on('click', '.btn_remove', function () {
            var i = $(this).attr("id");
            $('#remove' + i + '').remove();
        });


        var ii = 1;
        $('#addLink').click(function () {
            ii++;
            $('#dynamic_fieldLink').append(`
            <div class="row mb-2" id="removeLink${ii}">
                <div class="col-md-11 mb-2">
                    <div class="form-floating">
                        <input type="text" name="link_youtube_publikasiDok[]" class="form-control name_listLink" >
                        <label for="link_youtube_publikasiDok" class="form-label">Link Youtube</label>
                    </div>
                </div> 
                <div class="col-md-1">
                    <button type="button" name="remove" id="${ii}" class="btn btn-danger btn_removeLink">X</button>
                </div>
            </div>
            `);
        });

        $(document).on('click', '.btn_removeLink', function () {
            var i = $(this).attr("id");
            $('#removeLink' + i + '').remove();
        });




        $(document).on('click', '.btn_removeEdit', function () {
            var id = $(this).attr("id");
            // console.log(id);
            Swal.fire({
                title: 'Apakah anda ingin menghapus data ini?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#C61318',
                cancelButtonColor: '#003A91',
                cancelButtonText: 'Batal',
                confirmButtonText: 'Hapus',
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "<?php echo base_url(); ?>masterdata/Publikasi/hapusDokumen",
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
                                ).then(function () { });
                            }
                        }
                    });
                }
            })
        });

        $(document).on('click', '.btn_removeEditLink', function () {
            var id = $(this).attr("id");
            // console.log(id);
            Swal.fire({
                title: 'Apakah anda ingin menghapus data ini?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#C61318',
                cancelButtonColor: '#003A91',
                cancelButtonText: 'Batal',
                confirmButtonText: 'Hapus',
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "<?php echo base_url(); ?>masterdata/Publikasi/hapusLink",
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
                                ).then(function () { });
                            }
                        }
                    });
                }
            })
        });



        $('#btnTambah').on('click', function (e) {
            $('#form_tambah')[0].reset()
        })
        $('#btnEdit').on('click', function (e) {
            $('#form_edit')[0].reset()
        })
    });

    $(".form").submit(function (e) {
        $("#overlay").fadeIn(300);
        $("[name=description_publikasi]").val(CKEDITOR.instances.editor1.getData());

        e.preventDefault();
        var formData = new FormData($('.form')[0]);
        $.ajax({
            url: "<?php echo base_url(); ?>masterdata/Publikasi/storeUpdate",
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
                        window.location.href = "<?php echo base_url(); ?>masterdata/Publikasi";
                    });
                } else {
                    Swal.fire(
                        `${data['message']}`,
                        '',
                        'error'
                    ).then(function () {
                        // location.reload();
                    });
                }
            }
        });
    });
</script>