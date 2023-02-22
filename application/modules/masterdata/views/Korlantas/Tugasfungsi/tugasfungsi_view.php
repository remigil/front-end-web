<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#">Data
                <?= $title; ?>
            </a></li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Daftar
            <?= $title; ?>
        </li>
    </ol>
</nav>
<!-- </div> -->
<div class="page">
    <button type="button" class="btn btn-primary waves-effect mb-2" id="btnTambah" data-bs-toggle="modal"
        data-bs-target=".TambahSatker">Tambah Tugas Fungsi</button>
    <div class="card">

        <div class="card-body">

            <table id="datatable" class="table dt-responsive w-100">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Satker</th>
                        <th>Picture</th>
                        <th>Youtuber</th>
                        <th>Tugas</th>
                        <th>Fungsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>

        </div>
    </div>
</div>
<!-- End Page -->


<div class="modal fade TambahSatker" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Tambah Tugas Fungsi</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="form" id="form_tambah" method="post" enctype="multipart/form-data">

                    <input type="hidden" name="<?= $csrf_name; ?>" value="<?= $csrf_token; ?>" style="display: none">


                    <div class="col-md-12 mb-3">
                        <div class="form-floating">
                            <input type="text" class="form-control" placeholder="nama" name="name_satker">
                            <label for="nama">Nama Satuan Kerja</label>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="form-floating">
                            <input type="file" name="picture_satker" class="dropify"
                                data-allowed-file-extensions="jpg png jpeg" />
                            <label for="picture_satker">Gambar</label>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="form-floating">
                            <input type="text" class="form-control" placeholder="Link Youtube" name="youtube_satker">
                            <label for="youtube_satker">Youtube</label>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="form-floating">
                            <label for="editor1">Tugas Satker</label><br><br>
                            <textarea class="form-control" id="editor1" cols="30" rows="10"></textarea>
                            <textarea hidden class="form-control" name="tugas_satker" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="form-floating">
                            <label for="editor2">Fungsi Satker</label><br><br>
                            <textarea class="form-control" id="editor2" cols="30" rows="10"></textarea>
                            <textarea hidden class="form-control" name="fungsi_satker" rows="10"></textarea>
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
</div><!-- /.modal -->



<script>
    $(document).ready(function () {

        userDataTable = $('#datatable').DataTable({

            responsive: true,

            scrollX: true,

            // sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

            // buttons: ["excel", "csv", "pdf"],

            oLanguage: {

                sSearch: 'Search:'

            },

            initComplete: function (settings, json) { },

            retrieve: true,

            processing: true,

            serverSide: true,

            serverMethod: 'POST',

            ajax: {

                dataType: 'json',

                url: '<?php echo base_url(); ?>masterdata/Tugasfungsi/serverSideTable',

                data: function (data) {

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

                beforeSend: function (xhr, settings) {

                },

                "dataSrc": function (result) {

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
                    data: 'name_satker'
                },
                {
                    data: 'picture_satker'
                },
                {
                    data: 'youtube_satker'
                },
                {
                    data: 'tugas_satker'
                },
                {
                    data: 'fungsi_satker'
                },

                {
                    data: 'action',
                    orderable: false
                }

            ],

            order: [
                [0, "ASC"]
            ],

            drawCallback: function (settings) {

                $("#overlay").fadeOut(300);

            }


        });

        $('.TambahSatker').on('shown.bs.modal', function (event) {
            $('.dropify').dropify();
            CKEDITOR.replace("editor1", {
                removePlugins: ['link', 'image', 'uploadimage']
            });
            CKEDITOR.replace("editor2", {
                removePlugins: ['link', 'image', 'uploadimage']
            });
        });

        $(".form").submit(function (e) {
            $("#overlay").fadeIn(300);
            $("[name=tugas_satker]").val(CKEDITOR.instances.editor1.getData());
            $("[name=fungsi_satker]").val(CKEDITOR.instances.editor2.getData());

            e.preventDefault();
            var formData = new FormData($('.form')[0]);
            $.ajax({
                url: "<?php echo base_url(); ?>masterdata/Tugasfungsi/store",
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
                            $(".TambahSatker").modal('hide');
                            userDataTable.draw();
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
                    url: "<?php echo base_url(); ?>masterdata/Tugasfungsi/hapus/",
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
                                $(".TambahSatker").modal('hide');
                                userDataTable.draw();
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
    }


    $('#btnTambah').on('click', function (e) {
        $('#form_tambah')[0].reset()
    })
</script>