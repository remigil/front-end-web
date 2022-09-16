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
    <button type="button" class="btn btn-primary waves-effect mb-2" data-bs-toggle="modal" data-bs-target=".TambahDokumenPeraturan">Tambah Dokumen Peraturan</button>
    <div class="card">

        <div class="card-body">

            <table id="datatable" class="table dt-responsive w-100">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th>Jenis Peraturan</th>
                        <th width="40%">Nama Peraturan</th>
                        <th>Tahun</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                
            </table>

        </div>
    </div>
</div>
<!-- End Page -->


<div class="modal fade TambahDokumenPeraturan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Tambah Dokumen Peraturan</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="form">
				<div class="material-selectfield mb-3">
                        <select name="kategoriPeraturan" id="form-select">
                            <!-- <select name="" id=""  multiple required> -->
                            <option selected>Pilih Kategori</option>
                            <option value="1">Undang-undang</option>
                            <option value="2">Peraturan Pemerintah</option>
                            <option value="3">Peraturan Presiden</option>
                            <option value="4">Peraturan Kepolisian</option>
                            <option value="5">Peraturan Kapolri</option>
                            <option value="6">Peraturan Kakorlantas POLRI</option>
                            <option value="7">Peraturan Lain-lain</option>

                        </select>
                        <label class="labelmui">Kategori Peraturan</label>
                    </div>
                    <div class="material-textfield">
                        <input type="text" name="judulPeraturan" id="" style="width:100% ;">
                        <label for="" class="labelmui">Nama Dokumen Peraturan</label>
                    </div>
                    <div class="material-textfield">
                        <input type="file" name="files" id="" style="width:100% ;" class="form-control">
                        <label for="" class="labelmui">File Dokumen Peraturan</label>
                    </div>
                    <div class="material-textfield">
                        <input type="text" name="tahunPeraturan" id="" style="width:100% ;">
                        <label for="" class="labelmui">Tahun</label>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary waves-effect float-end me-4" style="width: 25%; letter-spacing: 2px;">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade UbahDokumenPeraturan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Edit Dokumen Peraturan</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="form">
				<div class="material-selectfield mb-3">
                        <select name="kategoriPeraturan" id="form-select">
                            <!-- <select name="" id=""  multiple required> -->
                            <option selected>Pilih Kategori</option>
                            <option value="1">Undang-undang</option>
                            <option value="2">Peraturan Pemerintah</option>
                            <option value="3">Peraturan Presiden</option>
                            <option value="4">Peraturan Kepolisian</option>
                            <option value="5">Peraturan Kapolri</option>
                            <option value="6">Peraturan Kakorlantas POLRI</option>
                            <option value="7">Peraturan Lain-lain</option>

                        </select>
                        <label class="labelmui">Kategori Peraturan</label>
                    </div>
                    <div class="material-textfield">
                        <input type="text" name="judulPeraturan" id="" style="width:100% ;">
                        <label for="" class="labelmui">Nama Dokumen Peraturan</label>
                    </div>
                    <div class="material-textfield">
                        <input type="file" name="files" id="" style="width:100% ;" class="form-control">
                        <label for="" class="labelmui">File Dokumen Peraturan</label>
                    </div>
                    <div class="material-textfield">
                        <input type="text" name="tahunPeraturan" id="" style="width:100% ;">
                        <label for="" class="labelmui">Tahun</label>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary waves-effect float-end me-4" style="width: 25%; letter-spacing: 2px;">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade DetailDokumenPeraturan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Detail Dokumen Peraturan</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="form">
                    <div class="material-textfield">
                        <input type="text" name="" id="" style="width:100% ;">
                        <label for="" class="labelmui">Jenis Dokumen Peraturan</label>
                    </div>
                    <div class="material-textfield">
                        <input type="text" name="" id="" style="width:100% ;">
                        <label for="" class="labelmui">Nama Dokumen Peraturan</label>
                    </div>
                    <div class="material-textfield">
                        <input type="file" name="files" id="" style="width:100% ;" class="form-control">
                        <label for="" class="labelmui">File Dokumen Peraturan</label>
                    </div>
                    <div class="material-textfield">
                        <input type="text" name="" id="" style="width:100% ;">
                        <label for="" class="labelmui">Tahun</label>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade UploadDokumenPeraturan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title w-100 text-center" id="myLargeModalLabel">Upload File</h5>
            </div>
            <div class="modal-body">

                <form action="" class="form">
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

                url: '<?php echo base_url(); ?>dokumenperaturan/DokumenPeraturan/serverSideTable',

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
                    data: 'regulation_category'
                },
                {
                    data: 'regulation_name'
                },
                {
                    data: 'file'
                },
                {
                    data: 'year'
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
                url: "<?php echo base_url(); ?>dokumenperaturan/DokumenPeraturan/store",
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
                            $(".TambahDokumenPeraturan").modal('hide');
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
        $.ajax({
            url: '<?= base_url() ?>DokumenPeraturan/detailPeraturan/',
            type: 'POST',
            data: {
                id_peraturan: id
            },
            dataType: 'JSON',
            success: function(results) {
                $('.DetailDokumenPeraturan,input').attr('readonly', true)
                $('.DetailDokumenPeraturan,input,#category').attr('disabled', true)
                $('.DetailDokumenPeraturan,#title').val(results.title)
                $('.DetailDokumenPeraturan,#category').val(results.news_category)
                $('.DetailDokumenPeraturan,#content').val(results.content)
            }
        })
    }

    function detailEdit(id) {
        $.ajax({
            url: '<?= base_url() ?>DokumenPeraturan/detailPeraturan/',
            type: 'POST',
            data: {
                id_peraturan: id
            },
            dataType: 'JSON',
            success: function(results) {
                $('.UbahDokumenPeraturan,input').attr('readonly', false)
                $('.UbahDokumenPeraturan,input,#category').attr('disabled', false)
                $('#id_peraturan').val(results.id)
                $('.UbahDokumenPeraturan,#title').val(results.title)
                $('.UbahDokumenPeraturan,#category').val(results.news_category)
                $('.UbahDokumenPeraturan,#content').val(results.content)
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
                    url: "<?php echo base_url(); ?>DokumenPeraturan/hapusPeraturan/",
                    type: "POST",
                    data: {
                        id_peraturan: id
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
                                $(".TambahDokumenPeraturan").modal('hide');
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
            url: '<?= base_url() ?>DokumenPeraturan/updatePeraturan',
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
                        $(".UbahDokumenPeraturan").modal('hide');
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
</script>
