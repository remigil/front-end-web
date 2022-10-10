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
    <button type="button" class="btn btn-primary waves-effect mb-2" id="btnTambah" data-bs-toggle="modal" data-bs-target=".TambahPetugas">Tambah Petugas</button>
    <div class="card">

        <div class="card-body">

            <table id="datatable" class="table dt-responsive w-100">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NRP</th>
                        <th>Nama Petugas</th>
                        <th>No. Handphone</th>
                        <th>Pangkat</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

            </table>

        </div>
    </div>
</div>
<!-- End Page -->


<div class="modal fade TambahPetugas" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Tambah Petugas</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="form" id="form_tambah" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-3" style="margin-top:1vh">
                            <input type="file" name="photo" class="dropify rounded" data-allowed-file-extensions="jpg png jpeg" data-default-file="<?php echo base_url(); ?>assets/no_image.png" />
                        </div>
                        <div class="col-md-9">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" placeholder="nrp" name="nrpPetugas">
                                <label for="">NRP</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" placeholder="nama" name="namaPetugas">
                                <label for="">Nama Petugas</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" placeholder="no" name="noHP">
                                <label for="">No. Handphone</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" placeholder="pangkat" name="pangkat">
                                <label for="">Pangkat</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" placeholder="pam" name="pamPetugas">
                                <label for="">PAM Petugas</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" placeholder="struktur" name="struktural">
                                <label for="">Struktural</label>
                            </div>
                            <div class="row mb-3">
                                <div class="material-textfield">
                                    <input type="hidden" name="status">
                                    <label for="" class="labelmui">Status</label>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check" style="margin: -1vh 0 0 2.7vh">
                                        <input class=" form-check-input" type="radio" name="flexRadioDefault" id="active" value="1" checked>
                                        <label class="form-check-label" for="active">
                                            ACTIVE
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check" style="margin: -1vh 0 0 2.7vh">
                                        <input class=" form-check-input" type="radio" name="flexRadioDefault" value="0" id="inactive">
                                        <label class="form-check-label" for="inactive">
                                            INACTIVE
                                        </label>
                                    </div>
                                </div>
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

<div class="modal fade UbahPetugas" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Edit Petugas</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="form" id="form_edit" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="" id="id_petugas" type="text">
                    <div class="row">
                        <div class="col-md-3" style="margin-top:1vh">
                            <input type="file" name="photo" id="photo" class="dropify rounded" data-allowed-file-extensions="jpg png jpeg" data-default-file="<?php echo base_url(); ?>assets/no_image.png" />
                        </div>
                        <div class="col-md-9">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="nrpPetugas" placeholder="nrp" name="nrpPetugas">
                                <label for="">NRP</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="namaPetugas" placeholder="nama" name="namaPetugas">
                                <label for="">Nama Petugas</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="noHP" placeholder="no" name="noHP">
                                <label for="">No. Handphone</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="pangkat" placeholder="pangkat" name="pangkat">
                                <label for="">Pangkat</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="pamPetugas" placeholder="pam" name="pamPetugas">
                                <label for="">PAM Petugas</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="struktural" placeholder="struktur" name="struktural">
                                <label for="">Struktural</label>
                            </div>
                            <div class="row mb-3">
                                <div class="material-textfield">
                                    <input type="hidden" id="status" name="status">
                                    <label for="" class="labelmui">Status</label>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check" style="margin: -1vh 0 0 2.7vh">
                                        <input class=" form-check-input" type="radio" name="flexRadioDefault" id="active" value="1" checked>
                                        <label class="form-check-label" for="active">
                                            ACTIVE
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check" style="margin: -1vh 0 0 2.7vh">
                                        <input class=" form-check-input" type="radio" name="flexRadioDefault" value="0" id="inactive">
                                        <label class="form-check-label" for="inactive">
                                            INACTIVE
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary waves-effect float-end me-4" id="btn_edit" style="width: 25%; letter-spacing: 2px;">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade DetailPetugas" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Detail Petugas</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="form">
				<div class="row">
                        <div class="col-md-3" style="margin-top:1vh">
                            <input type="file" name="photo" id="photo" class="dropify rounded" data-allowed-file-extensions="jpg png jpeg" data-default-file="<?php echo base_url(); ?>assets/no_image.png" />
                        </div>
                        <div class="col-md-9">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="nrpPetugas" placeholder="nrp" name="nrpPetugas">
                                <label for="">NRP</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="namaPetugas" placeholder="nama" name="namaPetugas">
                                <label for="">Nama Petugas</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="noHP" placeholder="no" name="noHP">
                                <label for="">No. Handphone</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="pangkat" placeholder="pangkat" name="pangkat">
                                <label for="">Pangkat</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="pamPetugas" placeholder="pam" name="pamPetugas">
                                <label for="">PAM Petugas</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="struktural" placeholder="struktur" name="struktural">
                                <label for="">Struktural</label>
                            </div>
                            <div class="row mb-3">
                                <div class="material-textfield">
                                    <input type="hidden" id="status" name="status">
                                    <label for="" class="labelmui">Status</label>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check" style="margin: -1vh 0 0 2.7vh">
                                        <input class=" form-check-input" type="radio" name="flexRadioDefault" id="active" value="1" checked>
                                        <label class="form-check-label" for="active">
                                            ACTIVE
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check" style="margin: -1vh 0 0 2.7vh">
                                        <input class=" form-check-input" type="radio" name="flexRadioDefault" value="0" id="inactive">
                                        <label class="form-check-label" for="inactive">
                                            INACTIVE
                                        </label>
                                    </div>
                                </div>
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

                url: '<?php echo base_url(); ?>masterdata/Petugasnasional/serverSideTable',

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
                    data: 'nrp_officer'
                },
                {
                    data: 'name_officer'
                },
                {
                    data: 'phone_officer'
                },
                {
                    data: 'rank_officer'
                },
                {
                    data: 'status_officer'
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
                url: "<?php echo base_url(); ?>masterdata/Petugasnasional/store",
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
                            $(".TambahPetugas").modal('hide');
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
            url: '<?= base_url() ?>masterdata/Petugasnasional/detailPetugas/',
            type: 'POST',
            data: {
                id_petugas: id
            },
            dataType: 'JSON',
            success: function(results) {
                
                $('.DetailPetugasnasional,#nrpPetugas').attr('disabled', true)
                $('.DetailPetugasnasional,#namaPetugas').attr('disabled', true)
                $('.DetailPetugasnasional,#noHP').attr('disabled', true)
                $('.DetailPetugasnasional,#pangkat').attr('disabled', true)
                $('.DetailPetugasnasional,#pamPetugas').attr('disabled', true)
                $('.DetailPetugasnasional,#struktural').attr('disabled', true)
                $('.DetailPetugasnasional,#status').attr('disabled', true)
                

                $('.DetailPetugasnasional,#nrpPetugas').val(results.nrp_officer)
                $('.DetailPetugasnasional,#namaPetugas').val(results.name_officer)
                $('.DetailPetugasnasional,#noHP').val(results.phone_officer)
                $('.DetailPetugasnasional,#pangkat').val(results.rank_officer)
                $('.DetailPetugasnasional,#pamPetugas').val(results.pam_officer)
                $('.DetailPetugasnasional,#struktural').val(results.structural_officer)
                $('.DetailPetugasnasional,#status').val(results.status_officer)

            }
        })
    }

    function detailEdit(id) {
        $.ajax({
            url: '<?= base_url() ?>masterdata/Petugasnasional/detailPetugas/',
            type: 'POST',
            data: {
                id_petugas: id
            },
            dataType: 'JSON',
            success: function(results) {

                $('.UbahPetugasnasional,#nrpPetugas').attr('disabled', false)
                $('.UbahPetugasnasional,#namaPetugas').attr('disabled', false)
                $('.UbahPetugasnasional,#noHP').attr('disabled', false)
                $('.UbahPetugasnasional,#pangkat').attr('disabled', false)
                $('.UbahPetugasnasional,#pamPetugas').attr('disabled', false)
                $('.UbahPetugasnasional,#struktural').attr('disabled', false)
                $('.UbahPetugasnasional,#status').attr('disabled', false)

                $('#id_petugas').val(results.id)

                $('.UbahPetugasnasional,#nrpPetugas').val(results.nrp_officer)
                $('.UbahPetugasnasional,#namaPetugas').val(results.name_officer)
                $('.UbahPetugasnasional,#noHP').val(results.phone_officer)
                $('.UbahPetugasnasional,#pangkat').val(results.rank_officer)
                $('.UbahPetugasnasional,#pamPetugas').val(results.pam_officer)
                $('.UbahPetugasnasional,#struktural').val(results.structural_officer)
                $('.UbahPetugasnasional,#status').val(results.status_officer)
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
                    url: "<?php echo base_url(); ?>masterdata/Petugasnasional/hapusPetugas/",
                    type: "POST",
                    data: {
                        id_petugas: id
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
                                $(".TambahPetugas").modal('hide');
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
            url: '<?= base_url() ?>masterdata/Petugasnasional/updatepetugas',
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
                        $(".UbahPetugasnasional").modal('hide');
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
