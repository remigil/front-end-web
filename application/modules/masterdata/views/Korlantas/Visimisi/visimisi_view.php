<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
    </ol>
</nav>
<!-- </div> -->
<div class="page">
    <!-- <button type="button" class="btn btn-primary waves-effect mb-2" id="btnTambah" data-bs-toggle="modal" data-bs-target=".TambahVisimisi">Tambah Visimisi</button> -->
    <div class="card">

        <div class="card-body">
            <?php $zxc = explode("+", ($data['data']['rows'][0]['misi'])); ?>
            <form action="" class="form" id="form_tambah" method="post" enctype="multipart/form-data">

                <input type="hidden" name="<?= $csrf_name; ?>" value="<?= $csrf_token; ?>" style="display: none">
                <input type="hidden" name="id" style="display: none" value="<?= $data['data']['rows'][0]['id']; ?>">

                <div class="col-md-12 mb-3">
                    <!-- get data foto dari server -->
                    <input type="file" name="photo" class="dropify" data-allowed-file-extensions="jpg png jpeg" data-default-file="<?= url_api() ?>visimisi/<?= $data['data']['rows'][0]['picture'] ?>" />
                </div>
                <div class="col-md-12">
                    <div class="form-floating mb-3">

                        <textarea class="form-control" id="visi" style="height: 100px" placeholder="Visi" name="visi"><?= $data['data']['rows'][0]['visi']; ?></textarea>
                        <label for="visi">Visi</label>

                    </div>
                </div>
                <?php for ($i = 0; $i < count($zxc); $i++) { ?>

                    <div class="mb-3" id="dynamic_field">
                        <?php if ($i == 0) { ?>
                            <div class="row mb-2">
                            <?php } else { ?>
                                <div class="row mb-2" id="remove<?= $i ?>">
                                <?php } ?>
                                <div class="col-md-11 mb-2">
                                    <div class="form-floating">
                                        <input type="text" name="misi[]" class="form-control name_list" value="<?= $zxc[$i]; ?>">
                                        <label for="misi" class="form-label">Misi</label>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <?php if ($i == 0) { ?>
                                        <button type="button" name="add" id="add" class="btn btn-success">+</button>
                                    <?php } else { ?>
                                        <button type="button" name="remove" id="<?= $i ?>" class="btn btn-danger btn_remove">X</button>
                                    <?php } ?>
                                </div>
                                </div>
                            </div>
                        <?php } ?>


                        <!-- <span class="fw-bold fs-5 text-danger">Dilarang Menggunakan Simbol PLUS (+)</span> -->

                        <div class="col-md-12 mt-3">
                            <button type="submit" class="btn btn-primary waves-effect float-end" style="width: 25%; letter-spacing: 2px;">SIMPAN</button>
                        </div>
            </form>

        </div>
    </div>
</div>
<!-- End Page -->



<script>
    $(document).ready(function() {
        $('.dropify').dropify();

        let asd = "<?= $data['data']['rows'][0]['misi'] ?>";
        let strArray = asd.split(",");
        var i = strArray.length;

        $('#add').click(function() {
            i++;
            $('#dynamic_field').append(`
            <div class="row mb-2" id="remove${i}">
                <div class="col-md-11 mb-2" > 
                    <div class="form-floating">
                        <input type="text" name="misi[]" class="form-control name_list">
                        <label for="misi" class="form-label">Misi</label>
                    </div>
                </div>
            <div class="col-md-1">
                <button type="button" name="remove" id="${i}" class="btn btn-danger btn_remove">X</button>
            </div>
        </div>`);
        });


        $(document).on('click', '.btn_remove', function() {
            var i = $(this).attr("id");
            $('#remove' + i + '').remove();
        });
    });

    $(".form").submit(function(e) {
        $("#overlay").fadeIn(300);
        e.preventDefault();
        var formData = new FormData($('.form')[0]);
        $.ajax({
            url: "<?php echo base_url(); ?>masterdata/Visimisi/updateVisimisi",
            method: "POST",
            data: formData,
            dataType: 'JSON',
            contentType: false,
            processData: false,
            success: function(data) {
                $("#overlay").fadeOut(300);
                if (data['status'] == true) {
                    Swal.fire(
                        `${data['message']}`,
                        '',
                        'success'
                    ).then(function() {
                        location.reload();

                    });
                } else {
                    Swal.fire(
                        `${data['message']}`,
                        '',
                        'error'
                    ).then(function() {
                        location.reload();
                    });
                }
            }
        });
    });
    $('#btnTambah').on('click', function(e) {
        $('#form_tambah')[0].reset()
    })
</script>