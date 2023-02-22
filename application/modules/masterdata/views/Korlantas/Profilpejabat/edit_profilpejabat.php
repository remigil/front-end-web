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
                <input type="hidden" name="id" value="<?php echo $data["profilepejabat"]["id"] ?>" style="display: none">
 
                <div class="col-md-12 mb-3">
                    <div class="form-floating">
                        <select name="id_jenis_pejabat" id="id_jenis_pejabat" class="form-select"
                            aria-label="Floating label select" style="width:100%" required>
                            <option selected value="">Pilih Jenis Pejabat</option>
                            <?php foreach ($data['jenisPejabat'] as $row): ?>
                                <option value="<?php echo $row['id']; ?>" <?php echo($row['jenis_pejabat'] == $data["profilepejabat"]['jenispejabats'][0]['jenis_pejabat']  ? 'selected' : '')?>><?php echo $row['jenis_pejabat']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" placeholder="nama" value="<?php echo $data["profilepejabat"]["name_pejabat"] ?>" name="name_pejabat">
                        <label for="nama">Nama Pejabat</label>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="form-floating">
                        <input type="file" name="foto_pejabat" class="dropify"
                            <?php if($data["profilepejabat"]['foto_pejabat'] != null){?> 
                                data-default-file="<?php echo url_api();?>profilepejabat/<?php echo $data["profilepejabat"]['foto_pejabat'];?>"  
                            <?php }else{?>
                                data-default-file="<?php echo base_url();?>assets/no_image.png"
                            <?php }?>
                            data-allowed-file-extensions="jpg png jpeg" />
                        <label for="foto_pejabat">Foto</label>
                    </div>
                </div> 
                <div class="col-md-12 mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" placeholder="Agama" value="<?php echo $data["profilepejabat"]["agama"] ?>" name="agama">
                        <label for="youtube_satker">Agama</label>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" placeholder="Tempat Lahir" value="<?php echo $data["profilepejabat"]["tempat_lahir"] ?>" name="tempat_lahir">
                        <label for="youtube_satker">Tempat Lahir</label>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="form-floating">
                        <input type="date" class="form-control" placeholder="Tanggal Lahir" value="<?php echo $data["profilepejabat"]["date_birth"] ?>" name="date_birth">
                        <label for="youtube_satker">Tanggal Lahir</label>
                    </div>
                </div>

                <div class="col-md-12 mb-3">
                    <div class="form-floating">
                        <label for="editor2">Pendidikan Kepolisian</label><br><br>
                        <textarea class="form-control" id="editor1" cols="30" rows="10"><?php echo $data["profilepejabat"]["pendidikan_kepolisian"] ?></textarea>
                        <textarea hidden class="form-control" name="pendidikan_kepolisian" rows="10"><?php echo $data["profilepejabat"]["pendidikan_kepolisian"] ?></textarea>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="form-floating">
                        <label for="editor2">Riwayat Jabatan</label><br><br>
                        <textarea class="form-control" id="editor2" cols="30" rows="10"><?php echo $data["profilepejabat"]["riwayat_jabatan"] ?></textarea>
                        <textarea hidden class="form-control" name="riwayat_jabatan" rows="10"><?php echo $data["profilepejabat"]["riwayat_jabatan"] ?></textarea>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="form-floating">
                        <label for="editor2">Pendidikan Pengembangan & Pelatihan</label><br><br>
                        <textarea class="form-control" id="editor3" cols="30" rows="10"><?php echo $data["profilepejabat"]["pengembangan"] ?></textarea>
                        <textarea hidden class="form-control" name="pengembangan" rows="10"><?php echo $data["profilepejabat"]["pengembangan"] ?></textarea>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="form-floating">
                        <label for="editor2">Tanda Kehormatan</label><br><br>
                        <textarea class="form-control" id="editor4" cols="30" rows="10"><?php echo $data["profilepejabat"]["tanda_kehormatan"] ?></textarea>
                        <textarea hidden class="form-control" name="tanda_kehormatan" rows="10"><?php echo $data["profilepejabat"]["tanda_kehormatan"] ?></textarea>
                    </div>
                </div>




                 


                <div class="col-md-12 mt-3">
                    <button type="submit" class="btn btn-primary waves-effect float-end"
                        style="width: 25%; letter-spacing: 2px;">SIMPAN</button>
                </div>
            </form>

        </div>
    </div>
</div>
<!-- End Page -->



<script>
    $(document).ready(function () {
        new Choices('#id_jenis_pejabat', {
            searchEnabled: true,
            removeItemButton: true,
            removeItems: true,
            itemSelectText: '',
            classNames: {
                containerOuter: 'choices select-choices',
            },
        });
        $('.dropify').dropify();
            CKEDITOR.replace("editor1", {
                removePlugins: ['link', 'image', 'uploadimage']
            });
            CKEDITOR.replace("editor2", {
                removePlugins: ['link', 'image', 'uploadimage']
            });
            CKEDITOR.replace("editor3", {
                removePlugins: ['link', 'image', 'uploadimage']
            });
            CKEDITOR.replace("editor4", {
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
        $("[name=pendidikan_kepolisian]").val(CKEDITOR.instances.editor1.getData());
        $("[name=riwayat_jabatan]").val(CKEDITOR.instances.editor2.getData());
        $("[name=pengembangan]").val(CKEDITOR.instances.editor3.getData());
        $("[name=tanda_kehormatan]").val(CKEDITOR.instances.editor4.getData());

        e.preventDefault();
        var formData = new FormData($('.form')[0]);
        $.ajax({
            url: "<?php echo base_url(); ?>masterdata/Profilpejabat/storeUpdate",
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
                        window.location.href = "<?php echo base_url();?>masterdata/Profilpejabat";
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