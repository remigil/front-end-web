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
                <input type="hidden" name="id" value="<?php echo $data["tugasfungsi"]["id"] ?>" style="display: none">


                <div class="col-md-12 mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" placeholder="nama"
                            value="<?php echo $data["tugasfungsi"]["name_satker"] ?>" name="name_satker">
                        <label for="nama">Nama Satuan Kerja</label>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="form-floating">
                        <input type="file" name="picture_satker" class="dropify"
                            <?php if($data["tugasfungsi"]['picture_satker'] != null){?> 
                                data-default-file="<?php echo url_api();?>tugasfungsi/<?php echo $data["tugasfungsi"]['picture_satker'];?>"  
                            <?php }else{?>
                                data-default-file="<?php echo base_url();?>assets/no_image.png"
                            <?php }?>
                            data-allowed-file-extensions="jpg png jpeg" />
                        <label for="picture_satker">Gambar</label>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" placeholder="Link Youtube"
                            value="<?php echo $data["tugasfungsi"]["youtube_satker"] ?>" name="youtube_satker">
                        <label for="youtube_satker">Youtube</label>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="form-floating">
                        <label for="editor1">Tugas Satker</label><br><br>
                        <textarea class="form-control" id="editor1" cols="30"
                            rows="10"><?php echo $data["tugasfungsi"]["tugas_satker"] ?></textarea>
                        <textarea hidden class="form-control" name="tugas_satker" cols="30"
                            rows="10"><?php echo $data["tugasfungsi"]["tugas_satker"] ?></textarea>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="form-floating">
                        <label for="editor2">Fungsi Satker</label><br><br>
                        <textarea class="form-control" id="editor2" cols="30"
                            rows="10"><?php echo $data["tugasfungsi"]["fungsi_satker"] ?></textarea>
                        <textarea hidden class="form-control" name="fungsi_satker"
                            rows="10"><?php echo $data["tugasfungsi"]["fungsi_satker"] ?></textarea>
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
        CKEDITOR.replace("editor2", {
            removePlugins: ['link', 'image', 'uploadimage']
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
        $("[name=tugas_satker]").val(CKEDITOR.instances.editor1.getData());
        $("[name=fungsi_satker]").val(CKEDITOR.instances.editor2.getData());

        e.preventDefault();
        var formData = new FormData($('.form')[0]);
        $.ajax({
            url: "<?php echo base_url(); ?>masterdata/Tugasfungsi/storeUpdate",
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
                        window.location.href = "<?php echo base_url();?>masterdata/Tugasfungsi";
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
</script>