<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Edit</li>
    </ol>
</nav>

<div class="page">
    <div class="card">
        <div class="card-body">
            <form class="form" method="post" enctype="multipart/form-data">
            <input type="hidden" name="<?= $csrf_name;?>" value="<?= $csrf_token;?>" style="display: none">
                <!-- <input hidden name="id" value="<?php echo $data['getDetail']['data']['id']; ?>" type="text"> -->
                <div class="row">
                    <div class="col-md-6">
                        <p class="fs-4 fw-bold">EDIT FASILITAS UMUM</p>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class=" btn btn-primary waves-effect float-end ms-4" style="width: 25%;">Simpan</button>
                        <!-- <a href="javascript(0);" id="delete" data-id="<?php echo $data['getDetail']['data']['id']; ?>" class=" btn btn-danger waves-effect float-end" style="width: 25%;">Hapus<i class="mdi mdi-trash-can-outline"></i></a> -->
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="material-textfield mb-3">
                                    <input style="width: 100%;" name="" placeholder="" type="text">
                                    <label class="labelmui">Kategori Fasilitas Umum</label>
                                </div>
                                <div class="material-textfield mb-3">
                                    <input style="width: 100%;" name="" placeholder="" type="text">
                                    <label class="labelmui">Jumlah Fasilitas</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <a href="<?= base_url('fasum/ListFasum'); ?>" class=" btn btn-primary waves-effect float-end ms-4" style="width: 25%;">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>




<script>
    $(document).ready(function() {
        $(".form").submit(function(e) {
            $("#overlay").fadeIn(300);
            e.preventDefault();
            var formData = new FormData($('.form')[0]);
            $.ajax({
                url: "<?php echo base_url(); ?>operasi/Akun/storeEdit",
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
                            window.location.href = "<?php echo base_url(); ?>operasi/Akun";
                        });
                    } else {
                        Swal.fire(
                            `${data['message']}`,
                            '',
                            'error'
                        ).then(function() {});
                    }
                }
            });
        });
    });

    $("#delete").on('click', function(e) {
        $("#overlay").fadeIn(300);
        e.preventDefault();
        $.ajax({
            url: "<?php echo base_url(); ?>operasi/Akun/delete",
            method: "POST",
            data: {
                "id": $(this).data("id"),
            },
            dataType: 'JSON',
            // contentType: false,
            // processData: false,  
            success: function(data) {
                $("#overlay").fadeOut(300);
                if (data['status'] == true) {
                    Swal.fire(
                        `${data['message']}`,
                        '',
                        'success'
                    ).then(function() {
                        window.location.href = "<?php echo base_url(); ?>operasi/Akun";
                    });
                } else {
                    Swal.fire(
                        `${data['message']}`,
                        '',
                        'error'
                    ).then(function() {});
                }
            }
        });
    });
</script>