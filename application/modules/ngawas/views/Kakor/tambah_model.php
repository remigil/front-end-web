<style>
    .modal {
        background-color: rgba(0, 0, 0, 0.30);
    }
</style>
<div class="page">

    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="addModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Merek Kendaraan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" class="formAdd" method="post" enctype="multipart/form-data">

                        <label for="brand" class="form-label">Jenis Kendaraan</label>
                        <div class="input-group mb-3">
                            <select class="form-select" id="type_vehicle" name="type_vehicle" aria-label="Example select with button addon">
                                <option selected>Pilih Jenis Kendaraan</option>
                                <?php
                                foreach ($data['getType'] as $row) : ?>
                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['type_name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <input type="hidden" name="<?= $csrf_name; ?>" value="<?= $csrf_token; ?>" style="display: none">
                        <div class="mb-3">
                            <label for="brand" class="form-label">Nama Merek Kendaraan</label>
                            <input type="text" class="form-control" id="brand" name="brand">
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Kendaraan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" class="formEdit" method="post" enctype="multipart/form-data">
                        <label for="brand" class="form-label">Jenis Kendaraan</label>
                        <input type="hidden" name="<?= $csrf_name; ?>" value="<?= $csrf_token; ?>" style="display: none">
                        <input type="hidden" name="id" value="" id="id" type="text">
                        <div class="input-group mb-3">
                            <select class="form-select" id="type_vehicle" name="type_vehicle" aria-label="Example select with button addon">
                                <option value="">Pilih Jenis Kendaraan</option>
                                <option value="1">Mobil</option>
                                <option value="2">Motor</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="brand" class="form-label">Nama Merek Kendaraan</label>
                            <input type="text" class="form-control" id="brand" name="brand">
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary" id="btnEdit">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="card col-5">
        <!-- <div class="p-3">
            
        </div> -->

        <div class="card-header bg-transparent border-bottom text-uppercase m-3 p-0 pb-2">
            <div class="row">
                <div class="col-6">
                    <h5>DATA Merek KENDARAAN</h5>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <button type="button" class="btn btn-primary col-5" data-bs-toggle="modal" data-bs-target="#addModal">
                        Tambah
                    </button>
                </div>

            </div>
        </div>
        <div class="card-body">
            <table id="dataTable" class="table table-striped dt-responsive  nowrap w-100">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Jenis Kendaraam</th>
                        <th>Merek Kendaraan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

            </table>

        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.dropify').dropify();
        // $("#overlay").fadeIn(300);
        var fetchData = fetch("<?= base_url() ?>ngawas/Ngawas/serverSideModel").then(
            response => response.json()
        ).then(
            data => {
                if (!data.length) {
                    return
                }
                // console.log(data)    

                var table = new DataTable('#dataTable', {
                    data: data.map(item => Object.values(item))
                })
            }
        )

        $(".formAdd").submit(function(e) {
            $("#overlay").fadeIn(300);
            e.preventDefault();
            var formData = new FormData($('.formAdd')[0]);
            $.ajax({
                url: "<?php echo base_url(); ?>ngawas/ngawas/tambah",
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
                            $("#addModal").modal('hide');
                            location.reload();
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

    function hapus(id) {
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
                    url: "<?php echo base_url(); ?>ngawas/ngawas/delete",
                    type: "POST",
                    data: {
                        id: id
                    },
                    dataType: 'JSON',
                    success: function(data) {
                        $("#overlay").fadeOut(300);
                        if (data['status'] == true) {
                            Swal.fire(
                                `${data['message']}`,
                                '',
                                'success'
                            ).then(function() {
                                $("#addModal").modal('hide');
                                location.reload();
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
            }
        })
    }

    function editDetail(id) {
        $.ajax({
            url: '<?= base_url() ?>ngawas/Ngawas/detailKendaraan',
            type: 'POST',
            data: {
                id: id
            },
            dataType: 'JSON',
            success: function(results) {
                console.log(results);
                let data = results.getDetail;
                $('#id').val(data.id)
                $('#editModal,#brand').val(data.brand_name)

            }
        })
    }



    $('#btnEdit').on('click', function(e) {
        e.preventDefault()
        var formData = new FormData($('.formEdit')[0]);
        // console.log(formData);
        $.ajax({
            url: '<?= base_url() ?>ngawas/Ngawas/edit',
            type: 'POST',
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
                        $("#editModal").modal('hide');
                        location.reload();
                    });
                } else {
                    Swal.fire(
                        `${data['message']}`,
                        '',
                        'error'
                    ).then(function() {});
                }
            }
        })
    })


    // $('#btnEdit').on('click', function(e) {
    // $('.form_edit')[0].reset()
    // })
</script>