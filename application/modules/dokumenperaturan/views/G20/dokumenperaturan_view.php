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
    <button type="button" class="btn btn-primary waves-effect mb-2" id="btnTambah" data-bs-toggle="modal" data-bs-target=".TambahDokumenPeraturan">Tambah Dokumen Peraturan</button>
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
                <form action="" class="form" id="form_tambah" method="post" enctype="multipart/form-data">
					<div class="col-md-12 mb-3"> 
                        <input type="file" name="files" class="dropify" data-allowed-file-extensions="pdf docx doc"/> 
                    </div>
				<div class="form-floating mb-3">
                        <select name="kategoriPeraturan" class="form-select" aria-label="Floating label select" style="width:100%" required>
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
                        <label for="kategoriPeraturan">Kategori Peraturan</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" placeholder="judul" name="judulPeraturan" style="width:100% ;">
                        <label for="">Nama Dokumen Peraturan</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" placeholder="tahun" name="tahunPeraturan" style="width:100% ;">
                        <label for="">Tahun</label>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary waves-effect float-end" style="width: 25%; letter-spacing: 2px;">SIMPAN</button>
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
                <form action="" class="form" id="form_edit" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id" value="" id="id_peraturan" type="text">
				<div class="col-md-12 mb-3"> 
                        <input type="file" name="files" id="files" class="dropify" data-allowed-file-extensions="pdf docx doc"/> 
                    </div>
				<div class="form-floating mb-3">
                        <select name="kategoriPeraturan" id="kategoriPeraturan" class="form-select" aria-label="Floating label select" style="width:100%" required>
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
                        <label for="kategoriPeraturan">Kategori Peraturan</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="judulPeraturan" placeholder="judul" name="judulPeraturan" style="width:100% ;">
                        <label for="">Nama Dokumen Peraturan</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="tahunPeraturan" placeholder="tahun" name="tahunPeraturan" style="width:100% ;">
                        <label for="">Tahun</label>
                    </div>
                    <div class="col-md-12">
					<button type="submit" class="btn btn-primary waves-effect float-end" id="btn_edit" style="width: 25%; letter-spacing: 2px;">SIMPAN</button>
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
				<div class="col-md-12 mb-3" id="fileDownload"> 
                        
                </div>
				<div class="form-floating mb-3">
                        <select name="kategoriPeraturan" id="kategoriPeraturan" class="form-control" aria-label="Floating label select" style="width:100%" required>
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
                        <label for="kategoriPeraturan">Kategori Peraturan</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="judulPeraturan" placeholder="judul" name="judulPeraturan" style="width:100% ;">
                        <label for="">Nama Dokumen Peraturan</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="tahunPeraturan" placeholder="tahun" name="tahunPeraturan" style="width:100% ;">
                        <label for="">Tahun</label>
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
                    data: 'year'
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
            url: '<?= base_url() ?>DokumenPeraturan/detailPeraturan',
            type: 'POST',
            data: {
                "id_peraturan": id
            },
            dataType: 'JSON',
            success: function(results) {
                $('.DetailDokumenPeraturan,#kategoriPeraturan').attr('disabled', true)
                $('.DetailDokumenPeraturan,#judulPeraturan').attr('disabled', true)
                $('.DetailDokumenPeraturan,#tahunPeraturan').attr('disabled', true)
                $('.DetailDokumenPeraturan,#files').attr('disabled', true)

                if(results.fileReg != null){
                    $("#fileDownload").html(` 
                    <a style="color: black;" class="btn" href="<?php echo urlApi()?>regulation_doc/${results.fileReg}" target="_blank">
                        <i style="color: black;" class="fa  fas fa-download "></i> Download File
                    </a>`);
                }else{
                    $("#fileDownload").html(` `);
                }
                
                $('.DetailDokumenPeraturan,#kategoriPeraturan').val(results.regulation_category)
                $('.DetailDokumenPeraturan,#judulPeraturan').val(results.regulation_name)
                $('.DetailDokumenPeraturan,#tahunPeraturan').val(results.year)
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
                $('.UbahDokumenPeraturan,#kategoriPeraturan').attr('disabled', false)
                $('.UbahDokumenPeraturan,#judulPeraturan').attr('disabled', false)
                $('.UbahDokumenPeraturan,#tahunPeraturan').attr('disabled', false)
				$('.UbahDokumenPeraturan,#files').attr('disabled', false)

                $('#id_peraturan').val(results.id)

                $('.UbahDokumenPeraturan,#kategoriPeraturan').val(results.regulation_category)
                $('.UbahDokumenPeraturan,#judulPeraturan').val(results.regulation_name)
                $('.UbahDokumenPeraturan,#tahunPeraturan').val(results.year)
                $('.UbahDokumenPeraturan,#files').val(results.file)
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

	$('#btnTambah').on('click', function(e){
		$('#form_tambah')[0].reset()
	})
	$('#btnEdit').on('click', function(e){
		$('#form_edit')[0].reset()
	})
</script>