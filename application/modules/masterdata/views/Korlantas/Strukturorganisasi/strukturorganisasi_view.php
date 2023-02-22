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
            <?php $zxc = explode("+", ($data['data']['rows'][0]['tugas'])); ?>
            <?php $vbn = explode("+", ($data['data']['rows'][0]['fungsi'])); ?>
            <form action="" class="form" id="form_tambah" method="post" enctype="multipart/form-data">

                <input type="hidden" name="<?= $csrf_name; ?>" value="<?= $csrf_token; ?>" style="display: none">
                <input type="hidden" name="id" style="display: none" value="<?= $data['data']['rows'][0]['id']; ?>">
                <div class="col-md-12 mb-3">
                        <input type="file" name="photo" class="dropify" data-allowed-file-extensions="jpg png jpeg" data-default-file="<?= url_api() ?>visimisi/<?= $data['data']['rows'][0]['foto'] ?>" />
                    </div>
                <div class="row">

                    <div class="col-md-6">
                        <h5>Tugas Korlantas Polri</h5>
                    <?php for ($i = 0; $i < count($zxc); $i++) { ?>
                    
                    <div class="mb-3" id="dynamic_fieldtugas">
                        <?php if ($i == 0) { ?>
                            <div class="row mb-2">
                            <?php } else { ?>
                                <div class="row mb-2" id="remove<?= $i ?>">
                                <?php } ?>
                                <div class="col-md-11 mb-2">
                                    <div class="form-floating">
                                        <input type="text" name="tugas[]" class="form-control name_list" value="<?= $zxc[$i]; ?>">
                                        <label for="tugas" class="form-label">Tugas</label>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <?php if ($i == 0) { ?>
                                        <button type="button" name="addtugas" id="addtugas" class="btn btn-success">+</button>
                                    <?php } else { ?>
                                        <button type="button" name="remove" id="<?= $i ?>" class="btn btn-danger btn_remove">X</button>
                                    <?php } ?>
                                </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                    <div class="col-md-6">
                        <h5>Fungsi Korlantas Polri</h5>
                    <?php for ($j = 0; $j < count($vbn); $j++) { ?>

                        <div class="mb-3" id="dynamic_fieldfungsi">
                            <?php if ($j == 0) { ?>
                                <div class="row mb-2">
                                <?php } else { ?>
                                    <div class="row mb-2" id="remove<?= $j ?>">
                                    <?php } ?>
                                    <div class="col-md-11 mb-2">
                                        <div class="form-floating">
                                            <input type="text" name="fungsi[]" class="form-control name_list" value="<?= $vbn[$j]; ?>">
                                            <label for="fungsi" class="form-label">Fungsi</label>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <?php if ($j == 0) { ?>
                                            <button type="button" name="addfungsi" id="addfungsi" class="btn btn-success">+</button>
                                        <?php } else { ?>
                                            <button type="button" name="remove" id="<?= $j ?>" class="btn btn-danger btn_remove">X</button>
                                        <?php } ?>
                                    </div>
                                    </div>
                                </div>
                            <?php } ?>
                    </div>
                </div>
                
                        
                


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
        let asd = "<?= $data['data']['rows'][0]['tugas'] ?>";
        let fgh = "<?= $data['data']['rows'][0]['fungsi'] ?>";
        let strArray1 = asd.split(",");
        let strArray2 = fgh.split(",");
        var i = strArray1.length;
        var j = strArray2.length;

        $('#addtugas').click(function() {
            i++;
            $('#dynamic_fieldtugas').append(`
            <div class="row mb-2" id="remove${i}">
                <div class="col-md-11 mb-2" > 
                    <div class="form-floating">
                        <input type="text" name="tugas[]" class="form-control name_list">
                        <label for="tugas" class="form-label">Tugas</label>
                    </div>
                </div>
            <div class="col-md-1">
                <button type="button" name="remove" id="${i}" class="btn btn-danger btn_remove">X</button>
            </div>
        </div>`);
        });

        $('#addfungsi').click(function() {
            j++;
            $('#dynamic_fieldfungsi').append(`
            <div class="row mb-2" id="remove${j}">
                <div class="col-md-11 mb-2" > 
                    <div class="form-floating">
                        <input type="text" name="fungsi[]" class="form-control name_list">
                        <label for="fungsi" class="form-label">Fungsi</label>
                    </div>
                </div>
            <div class="col-md-1">
                <button type="button" name="remove" id="${j}" class="btn btn-danger btn_remove">X</button>
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
            url: "<?php echo base_url(); ?>masterdata/strukturorganisasi/update",
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