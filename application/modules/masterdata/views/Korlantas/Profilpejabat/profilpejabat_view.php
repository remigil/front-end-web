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
                        <th>Jenis Pejabat</th>
                        <th>Nama</th>
                        <th>Foto</th>
                        <th>Agama</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Pendidikan</th>
                        <th>Riwayat</th>
                        <th>Pengembangan</th>
                        <th>Tanda Kehormatan</th>
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
                            <select name="id_jenis_pejabat" id="id_jenis_pejabat" class="form-select"
                                aria-label="Floating label select" style="width:100%" required>
                                <option selected value="">Pilih Jenis Pejabat</option>
                                <?php foreach ($data['jenisPejabat'] as $row): ?>
                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['jenis_pejabat']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="form-floating">
                            <input type="text" class="form-control" placeholder="nama" name="name_pejabat">
                            <label for="nama">Nama Pejabat</label>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="form-floating">
                            <input type="file" name="foto_pejabat" class="dropify"
                                data-allowed-file-extensions="jpg png jpeg" />
                            <label for="foto_pejabat">Foto</label>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="form-floating">
                            <input type="text" class="form-control" placeholder="Agama" name="agama">
                            <label for="youtube_satker">Agama</label>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="form-floating">
                            <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir">
                            <label for="youtube_satker">Tempat Lahir</label>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="form-floating">
                            <input type="date" class="form-control" placeholder="Link Youtube" name="date_birth">
                            <label for="youtube_satker">Tanggal Lahir</label>
                        </div>
                    </div>


                    <div class="col-md-12 mb-3">
                        <div class="form-floating">
                            <label for="editor2">Pendidikan Kepolisian</label><br><br>
                            <textarea class="form-control" id="editor1" cols="30" rows="10"></textarea>
                            <textarea hidden class="form-control" name="pendidikan_kepolisian" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="form-floating">
                            <label for="editor2">Riwayat Jabatan</label><br><br>
                            <textarea class="form-control" id="editor2" cols="30" rows="10"></textarea>
                            <textarea hidden class="form-control" name="riwayat_jabatan" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="form-floating">
                            <label for="editor2">Pendidikan pengembangan $ Pelatihan</label><br><br>
                            <textarea class="form-control" id="editor3" cols="30" rows="10"></textarea>
                            <textarea hidden class="form-control" name="pengembangan" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="form-floating">
                            <label for="editor2">Tanda Kehormatan</label><br><br>
                            <textarea class="form-control" id="editor4" cols="30" rows="10"></textarea>
                            <textarea hidden class="form-control" name="tanda_kehormatan" rows="10"></textarea>
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

                url: '<?php echo base_url(); ?>masterdata/Profilpejabat/serverSideTable',

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
                    data: 'id_jenis_pejabat'
                },
                {
                    data: 'name_pejabat'
                },
                {
                    data: 'foto_pejabat'
                },
                {
                    data: 'agama'
                },
                {
                    data: 'tempat_lahir'
                },
                {
                    data: 'date_birth'
                },
                {
                    data: 'pendidikan_kepolisian'
                },
                {
                    data: 'riwayat_jabatan'
                },
                {
                    data: 'pengembangan'
                },
                {
                    data: 'tanda_kehormatan'
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
                url: "<?php echo base_url(); ?>masterdata/Profilpejabat/store",
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
                    url: "<?php echo base_url(); ?>masterdata/Profilpejabat/hapus/",
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