<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Daftar <?= $title; ?></li>
    </ol>
</nav>
<!-- </div> -->

<div class="page">
    <button type="button" class="btn btn-primary waves-effect" id="btnTambah" data-bs-toggle="modal" data-bs-target=".TambahBerita">Tambah Berita</button>
    <div class="col-12">

        <div class="card mt-3">
            <div class="card-body">
                <table id="datatable" class="table dt-responsive w-100">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kategori Berita</th>
                            <th>Judul Berita</th>
                            <th>Isi Berita</th>
                            <th>Author</th>
                            <th>Tanggal Berita</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>

    </div>
</div>
<!-- End Page -->


<div class="modal fade TambahBerita" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Tambah Berita</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="form" id="form_tambah" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="<?= $csrf_name; ?>" value="<?= $csrf_token; ?>" style="display: none">
                    <div class="col-md-12 mb-3">
                        <input type="file" name="photo" class="dropify" data-allowed-file-extensions="jpg png jpeg" data-default-file="<?php echo base_url(); ?>assets/no_image.png" />
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <select name="category" class="form-select" aria-label="Floating label select" style="width:100%" required>
                                    <!-- <select name="" id=""  multiple required> -->
                                    <option selected>Pilih Kategori</option>
                                    <?php
                                    foreach ($data['getBerita'] as $row) : ?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['name_category_news']; ?></option>
                                    <?php endforeach; ?>


                                </select>
                                <label for="category">Kategori Berita</label>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" name="date" placeholder="date">
                                <label for="date">Tanggal Berita</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="title" placeholder="judul">
                        <label for="title">Judul Berita</label>
                    </div>

                    <div class="form-floating mb-3">
                        <textarea class="form-control" style="height: 100px" placeholder="isi" name="content"></textarea>
                        <label for="content">Isi Berita</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="link" placeholder="judul">
                        <label for="link">Link Berita</label>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary waves-effect float-end" style="width: 25%; letter-spacing: 2px;">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade UbahBerita" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Edit Berita</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="form" id="form_edit" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="<?= $csrf_name; ?>" value="<?= $csrf_token; ?>" style="display: none">
                    <input type="hidden" name="id" value="" id="id_berita" type="text">
                    <div class="col-md-12 mb-3">
                        <!-- get data foto dari server -->
                        <input type="file" name="photo" class="dropify" data-allowed-file-extensions="jpg png jpeg" data-default-file="<?php echo base_url(); ?>assets/no_image.png" />
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <select name="category" id="category" class="form-select" aria-label="Floating label select" style="width:100%" required>
                                    <!-- <select name="" id=""  multiple required> -->
                                    <option selected id="category"></option>
                                    <?php
                                    foreach ($data['getBerita'] as $row) : ?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['name_category_news']; ?></option>
                                    <?php endforeach; ?>

                                </select>
                                <label for="category">Kategori Berita</label>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="date" id="date" class="form-control" name="date" placeholder="date">
                                <label for="date">Tanggal Berita</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" id="title" class="form-control" name="title" placeholder="judul">
                        <label for="title">Judul Berita</label>
                    </div>

                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="content" style="height: 100px" placeholder="isi" name="content"></textarea>
                        <label for="content">Isi Berita</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" id="link" class="form-control" name="link" placeholder="judul">
                        <label for="link">Link Berita</label>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary waves-effect float-end" id="btn_edit" style="width: 25%; letter-spacing: 2px;">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade DetailBerita" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Detail Berita</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="form">
                    <input type="hidden" name="<?= $csrf_name; ?>" value="<?= $csrf_token; ?>" style="display: none">
                    <div class="col-md-12 mb-3">
                        <!-- get data foto dari server -->
                        <input type="file" name="photo" class="dropify" data-allowed-file-extensions="jpg png jpeg" data-default-file="<?php echo base_url(); ?>assets/no_image.png" />
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <select name="category" id="category" class="form-control" aria-label="Floating label select" style="width:100%" required>
                                    <!-- <select name="" id=""  multiple required> -->
                                    <option selected>Pilih Kategori</option>
                                    <option value="1">Berita PPKM</option>
                                    <option value="2">Berita Kecelakaan Lalu Lintas</option>
                                    <option value="3">Berita Pelanggaran Lalu Lintas</option>
                                    <option value="4">Berita Kemacetan Lalu Lintas</option>
                                    <option value="5">Berita Satpas</option>
                                    <option value="6">Berita ETLE</option>
                                    <option value="7">Berita Kontijensi</option>

                                </select>
                                <label for="category">Kategori Berita</label>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" id="date" class="form-control" name="date" placeholder="date">
                                <label for="date">Tanggal Berita</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" id="title" class="form-control" name="title" placeholder="judul">
                        <label for="title">Judul Berita</label>
                    </div>

                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="content" style="height: 100px" placeholder="isi" name="content"></textarea>
                        <label for="content">Isi Berita</label>
                    </div>

                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->




<div class="modal fade UploadBerita" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title w-100 text-center" id="myLargeModalLabel">Upload File</h5>
            </div>
            <div class="modal-body">

                <form action="" class="form">
                    <input type="hidden" name="<?= $csrf_name; ?>" value="<?= $csrf_token; ?>" style="display: none">
                    <div class="col-md-12">
                        <input type="file" name="photo" class="dropify rounded" data-allowed-file-extensions="jpg png jpeg" data-default-file="<?php echo base_url(); ?>assets/no_image.png" />
                    </div>
                    <button type="submit" class="btn btn-primary waves-effect float-end mt-3" style="width: 100%; letter-spacing: 2px;">UPLOAD FILE</button>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script>
    $(document).ready(function() {
        $('.dropify').dropify();

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

                url: '<?php echo base_url(); ?>berita/Berita/serverSideTable',

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
                    data: 'news_category'
                },
                {
                    data: 'title'
                },
                {
                    data: 'content'
                },
                {
                    data: 'author'
                },
                {
                    data: 'date'
                },
                {
                    data: 'action',
                    orderable: false
                }

            ],

            order: [
                [0, "DESC"]
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
                url: "<?php echo base_url(); ?>berita/Berita/store",
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
                            $(".TambahBerita").modal('hide');
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

    function detail(id) {
        // console.log("ok")
        $.ajax({
            url: '<?= base_url() ?>berita/detailBerita',
            type: 'POST',
            data: {
                id_berita: id
            },
            dataType: 'JSON',
            success: function(results) {
                console.log(results)
                $('.DetailBerita,#title').attr('disabled', true)
                $('.DetailBerita,#category').attr('disabled', true)
                $('.DetailBerita,#content').attr('disabled', true)
                $('.DetailBerita,#photo').attr('disabled', true)
                $('.DetailBerita,#date').attr('disabled', true)

                $('.DetailBerita,#title').val(results.title)
                $('.DetailBerita,#category').val(results.news_category)
                $('.DetailBerita,#content').val(results.content)
                $('.DetailBerita,#photo').val(results.picture)
                $('.DetailBerita,#date').val(results.date)
            }
        })
    }

    function detailEdit(id) {
        $.ajax({
            url: '<?= base_url() ?>berita/detailBerita/',
            type: 'POST',
            data: {
                id_berita: id
            },
            dataType: 'JSON',
            success: function(results) {
                // $('.UbahBerita,').attr('readonly', false)
                $('.UbahBerita,#title').attr('disabled', false)
                $('.UbahBerita,#category').attr('disabled', false)
                $('.UbahBerita,#content').attr('disabled', false)
                $('.UbahBerita,#link').attr('disabled', false)
                $('.UbahBerita,#photo').attr('disabled', false)
                $('.UbahBerita,#date').attr('disabled', false)

                $('#id_berita').val(results.id)

                $('.UbahBerita,#title').val(results.title)
                $('.UbahBerita,#category').val(results.news_category)
                $('.UbahBerita,#content').val(results.content)
                $('.UbahBerita,#link').val(results.link)
                $('.UbahBerita,#photo').val(results.picture)
                $('.UbahBerita,#date').val(results.date)
            }
        })
    }

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
                    url: "<?php echo base_url(); ?>berita/hapusBerita/",
                    type: "POST",
                    data: {
                        id_berita: id
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
                                $(".TambahBerita").modal('hide');
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
            url: '<?= base_url() ?>berita/updateBerita',
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
                        $(".UbahBerita").modal('hide');
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