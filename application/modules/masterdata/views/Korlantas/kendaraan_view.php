<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#">Data <?= $title; ?></a></li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Daftar <?= $title; ?></li>
    </ol>
</nav>
<!-- </div> -->
<div class="page">
    <button type="button" class="btn btn-primary waves-effect mb-2" id="btnTambah" data-bs-toggle="modal" data-bs-target=".TambahKendaraan">Tambah Kendaraan</button>
    <div class="card">
        <div class="card-body">
            <table id="datatable" class="table dt-responsive w-100">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No. Kendaraan</th>
                        <th>Jenis Kendaraan</th>
                        <th>Merk</th>
                        <th>Kepemilikan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                
            </table>

        </div>
    </div>
</div>
<!-- End Page -->


<div class="modal fade TambahKendaraan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Tambah Kendaraan</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
			<form action="" class="form" id="form_tambah" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" placeholder="no" name="noKendaraan">
                                <label for="">No. Kendaraan</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
								<select name="jenisKendaraan" class="form-select" required>
									<option selected>Pilih Jenis Kendaraan</option>
									<option value="Sepeda Motor">Sepeda Motor</option>
									<option value="Mobil">Mobil</option>
                                    
                                </select>
                                <label for="jenis">Jenis Kendaraan</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="merekKendaraan" placeholder="merek" name="merekKendaraan">
                                <label for="">Merk</label>
                            </div>
                        </div>
                        <div class="col-md-12">
							<div class="form-floating mb-3">
                                <input type="text" class="form-control" id="kepemilikan" placeholder="owner" name="kepemilikan">
                                <label for="">Kepemilikan</label>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary waves-effect float-end" style="width: 25%; letter-spacing: 2px;">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade UbahKendaraan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Edit Kendaraan</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
			<form action="" class="form" id="form_edit" method="post" enctype="multipart/form-data">
			<input type="hidden" name="id" value="" id="id_kendaraan" type="text">
			<div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="noKendaraan" placeholder="no" name="noKendaraan">
                                <label for="">No. Kendaraan</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
								<select name="jenisKendaraan" id="jenisKendaraan" class="form-select">
									<option value="Sepeda Motor">Sepeda Motor</option>
									<option value="Mobil">Mobil</option>
                                    
                                </select>
                                <label for="jenis">Jenis Kendaraan</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="merekKendaraan" placeholder="merek" name="merekKendaraan">
                                <label for="">Merk</label>
                            </div>
                        </div>
                        <div class="col-md-12">
							<div class="form-floating mb-3">
                                <input type="text" class="form-control" id="kepemilikan" placeholder="owner" name="kepemilikan">
                                <label for="">Kepemilikan</label>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <button type="submit" id="btn_edit" class="btn btn-primary waves-effect float-end" style="width: 25%; letter-spacing: 2px;">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade DetailKendaraan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Detail Kendaraan</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="form">
					<div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="noKendaraan" placeholder="no" name="noKendaraan">
                                <label for="">No. Kendaraan</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="jenisKendaraan" placeholder="jenis" name="jenisKendaraan">
                                <label for="">Jenis Kendaraan</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="merekKendaraan" placeholder="merek" name="merekKendaraan">
                                <label for="">Merk</label>
                            </div>
                        </div>
                        <div class="col-md-12">
							<div class="form-floating mb-3">
                                <input type="text" class="form-control" id="kepemilikan" placeholder="owner" name="kepemilikan">
                                <label for="">Kepemilikan</label>
                            </div>
                        </div>
                    </div>
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

                url: '<?php echo base_url(); ?>masterdata/Kendaraannasional/serverSideTable',

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
                    data: 'no_vehicle'
                },
                {
                    data: 'type_vehicle'
                },
                {
                    data: 'brand_vehicle'
                },
                {	
                    data: 'ownership_vehicle'
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
                url: "<?php echo base_url(); ?>masterdata/Kendaraannasional/store",
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
                            $(".TambahKendaraan").modal('hide');
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
            url: '<?= base_url() ?>masterdata/Kendaraannasional/detailKendaraan/',
            type: 'POST',
            data: {
                id_kendaraan: id
            },
            dataType: 'JSON',
            success: function(results) {
                
                $('.DetailKendaraan,#noKendaraan').attr('disabled', true)
                $('.DetailKendaraan,#jenisKendaraan').attr('disabled', true)
                $('.DetailKendaraan,#merekKendaraan').attr('disabled', true)
                $('.DetailKendaraan,#kepemilikan').attr('disabled', true)

				
                $('.DetailKendaraan,#noKendaraan').val(results.no_vehicle)
                $('.DetailKendaraan,#jenisKendaraan').val(results.type_vehicle)
                $('.DetailKendaraan,#merekKendaraan').val(results.brand_vehicle)
                $('.DetailKendaraan,#kepemilikan').val(results.ownership_vehicle)
            }
        })
    }

    function detailEdit(id) {
        $.ajax({
            url: '<?= base_url() ?>masterdata/Kendaraannasional/detailKendaraan/',
            type: 'POST',
            data: {
                id_kendaraan: id
            },
            dataType: 'JSON',
            success: function(results) {
                
                $('.UbahKendaraan,#noKendaraan').attr('disabled', false)
                $('.UbahKendaraan,#jenisKendaraan').attr('disabled', false)
                $('.UbahKendaraan,#merekKendaraan').attr('disabled', false)
                $('.UbahKendaraan,#kepemilikan').attr('disabled', false)

                $('#id_kendaraan').val(results.id)

                $('.UbahKendaraan,#noKendaraan').val(results.no_vehicle)
                $('.UbahKendaraan,#jenisKendaraan').val(results.type_vehicle)
                $('.UbahKendaraan,#merekKendaraan').val(results.brand_vehicle)
                $('.UbahKendaraan,#kepemilikan').val(results.ownership_vehicle)
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
                    url: "<?php echo base_url(); ?>masterdata/Kendaraannasional/hapusKendaraan/",
                    type: "POST",
                    data: {
                        id_kendaraan: id
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
                                $(".TambahKendaraan").modal('hide');
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
            url: '<?= base_url() ?>masterdata/Kendaraannasional/updateKendaraan',
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
                        $(".UbahKendaraan").modal('hide');
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
