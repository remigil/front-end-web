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

        <form action="" class="form" id="form_tambah" method="post" enctype="multipart/form-data">
        
                    <input type="hidden" name="<?= $csrf_name; ?>" value="<?= $csrf_token; ?>" style="display: none">
                    <div class="col-md-12 mb-3">
                        <input type="file" name="photo" class="dropify" data-allowed-file-extensions="jpg png jpeg" />
                    </div>
                    <!-- <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <textarea class="form-control" style="height: 100px" placeholder="Misi" name="misi"></textarea>
                            <label for="misi">Misi</label>
                        </div>
                        <div class="list-group" id="listAddress"></div>
                    </div> -->
                    <hr>
                    <h5>Tugas</h5>
                    <div class="mb-3" id="dynamic_fieldtugas">
                        <div class="row mb-2">
                            <div class="col-md-11 mb-2">
                                <div class="form-floating">
                                    <input type="text" name="tugas[]" class="form-control name_list">
                                    <label for="tugas" class="form-label">Tugas</label>
                                    <br>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <button type="button" name="addtugas" id="addtugas" class="btn btn-success">+</button>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h5>Fungsi</h5>
                    <div class="mb-3" id="dynamic_fieldfungsi">
                        <div class="row mb-2">
                            <div class="col-md-11 mb-2">
                                <div class="form-floating">
                                    <input type="text" name="fungsijabatan[]" class="form-control name_list">
                                    <label for="fungsi" class="form-label">Fungsi</label>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <button type="button" name="addfungsi" id="addfungsi" class="btn btn-success">+</button>
                            </div>
                        </div>
                    </div>
                    

                    <div class="col-md-12 mt-3">
                        <button type="submit" class="btn btn-primary waves-effect float-end" style="width: 25%; letter-spacing: 2px;">SIMPAN</button>
                        <a href="<?php echo base_url('masterdata/Fungsisatker'); ?>" class="btn btn-secondary waves-effect float-end" style="width: 25%; letter-spacing: 2px; border:1;">Kembali</a>
                    </div>
                </form>

        </div>
    </div>
</div>
<!-- End Page -->



<script>
    $(document).ready(function() {
        $('.dropify').dropify();
        var i = 1;

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
            i++;
            $('#dynamic_fieldfungsi').append(`
            <div class="row mb-2" id="remove${i}">
                <div class="col-md-11 mb-2" > 
                    <div class="form-floating">
                        <input type="text" name="fungsi[]" class="form-control name_list">
                        <label for="fungsi" class="form-label">Fungsi</label>
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
    $(document).ready(function() {
        userDataTable = $('#datatable').DataTable({

            responsive: true,

            scrollX: true,

            // sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

            // buttons: ["excel", "csv", "pdf"],

            oLanguage: {

                sSearch: 'Search:'

            },

            initComplete: function(settings, json) {},

            retrieve: true,

            processing: true,

            serverSide: true,

            serverMethod: 'POST',

            ajax: {

                dataType: 'json',

                url: '<?php echo base_url(); ?>masterdata/Visimisi/serverSideTable',

                data: function(data) {

                    $("#overlay").fadeIn(300);

                    // console.log(data);

                    // data.filterTgl = $('[name=event_date]').val();

                    // data.filterTgl2 = $('[name=event_date_to]').val(); 

                    // data.filterStatus = $('[name=status]').val();

                    // data.filterName = $('[name=group_name]').val();

                    // data.filterPocName = $('[name=group_poc_name]').val();

                    // data.filterPhone = $('[name=poc_phone]').val();

                    // data.filterThreat = $('[name=threat_level]').val();

                    data.orderField = data.order[0] != undefined ? data.order[0].column : '';

                    data.orderValue = data.order[0] != undefined ? data.order[0].dir : '';

                    data.page = Number(data.start / data.length) + 1

                },

                beforeSend: function(xhr, settings) {

                },

                "dataSrc": function(result) {

                    result.iTotalRecords = result.iTotalRecords;

                    result.iTotalDisplayRecords = result.iTotalRecords;

                    return result.aaData;

                }

            },

            columns: [

                {
                    data: 'id'
                },
                {
                    data: 'visi'
                },
                // {
                //     data: 'code_satpas'
                // },
                {
                    data: 'misi'
                },
                {
                    data: 'action',
                    orderable: false
                }

            ],

            order: [
                [0, "ASC"]
            ],

            drawCallback: function(settings) {

                $("#overlay").fadeOut(300);

            }


        });

        $(".form").submit(function(e) {
            $("#overlay").fadeIn(300);
            e.preventDefault();
            var formData = new FormData($('.form')[0]);
            $.ajax({
                url: "<?php echo base_url(); ?>masterdata/Visimisi/store",
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
                            $(".TambahVisimisi").modal('hide');
                            userDataTable.draw();
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
                    url: "<?php echo base_url(); ?>masterdata/Visimisi/hapusVisimisi/",
                    type: "POST",
                    data: {
                        id_polda: id
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
                                $(".TambahVisimisi").modal('hide');
                                userDataTable.draw();
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

    $('#btn_edit').on('click', function(e) {
        e.preventDefault()
        var formData = new FormData($('#form_edit')[0]);
        $.ajax({
            url: '<?= base_url() ?>masterdata/Visimisi/updateVisimisi',
            type: 'POST',
            data: formData,
            dataType: 'JSON',
            contentType: false,
            processData: false,
            success: function(results) {
                $("#overlay").fadeOut(300);
                if (results['status'] == true) {
                    Swal.fire(
                        `${results['message']}`,
                        '',
                        'success'
                    ).then(function() {
                        $(".UbahVisimisi").modal('hide');
                        userDataTable.draw();
                    });
                } else {
                    Swal.fire(
                        `${results['message']}`,
                        '',
                        'error'
                    ).then(function() {});
                }
            }
        })
    })

    $('#btnTambah').on('click', function(e) {
        $('#form_tambah')[0].reset()
    })
    $('#btnEdit').on('click', function(e) {
        $('#form_edit')[0].reset()
    })
</script>