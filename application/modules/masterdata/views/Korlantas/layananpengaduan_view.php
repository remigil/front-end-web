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

            <table id="datatable" class="table dt-responsive w-100">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Subjek Pengaduan</th>
                        <th>Nama Pengirim</th>
                        <th>Email</th>
                        
                        <th>Aksi</th>
                    </tr>
                </thead>
                <!-- <tbody>
                    <tr>
                        <td>1</td>
                        <td>IRJEN POL Drs. FIRMAN SANTYABUDI, M.Si.</td>
                        <td>KAKORLANTAS POLRI</td>
                        <td>
                            <button style="background-color:transparent ; border:none" data-bs-toggle="modal" onclick="detail(`' . $field['id'] . '`)" data-bs-target=".DetailVisimisi">
                                <h3 style=" color:#003A91"><i class="mdi mdi-eye"></i></h3>
                            </button>

                            <button style="background-color:transparent ; border:none" data-bs-toggle="modal" id="btnEdit" onclick="detailEdit(`' . $field['id'] . '`)" data-bs-target=".UbahVisimisi">
					            <h3 style="color:#67676D"><i class="mdi mdi-pencil"></i></h3>
				            </button>
                        </td>
                    </tr>
                </tbody> -->
            </table>

        </div>
    </div>
</div>
<!-- End Page -->

<!-- Detail Pejabat -->
<div class="modal fade Detail" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Detail Survey</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="form">

                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="name_complaint" placeholder="nama">
                                    <label for="nama">Nama Pengirim</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="email_complaint" placeholder="email">
                                    <label for="email">Email Pengirim</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="subjek_complaint" placeholder="subjek">
                                    <label for="subjek">Subjek Pengaduan</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" style="height: 100px" id="deskripsi_complaint" placeholder="Alamat" name="deskripsi_complaint"></textarea>
                                    <label for="deskripsi">Deskripsi</label>
                                </div>
                            </div>

                      
                    
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<script>
    $(document).ready(function() {
        var i = 1;

        $('#add').click(function() {
            i++;
            $('#dynamic_field').append(`
            <div class="row mb-2" id="remove${i}">
                <div class="col-md-11 mb-2" > 
                    <div class="form-floating">
                        <input type="text" name="misi[]" class="form-control name_list">
                        <label for="misi" class="form-label">Misi</label>
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

                url: '<?php echo base_url(); ?>masterdata/layananpengaduan/serverSideTable',

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
                    data: 'subjek_complaint'
                },
                
                {
                    data: 'name_complaint'
                },
                {
                    data: 'email_complaint'
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

        
    });

    function detail(id) {
        // console.log("ok");
        $.ajax({
            url: '<?= base_url() ?>masterdata/layananpengaduan/detail',
            type: 'POST',
            data: {
                id_pengaduan : id
            },
            dataType: 'JSON',
            success: function(results) {
                if(results.subjek_complaint == 1){
                    var subjek = "Informasi Bidang Lalu Lintas"
                }else if(results.subjek_complaint == 2){
                    var subjek = "Kecelakaan Lalu Lintas"
                }else if(results.subjek_complaint == 3){
                    var subjek = "Kemacetan Lalu Lintas"
                }else if(results.subjek_complaint == 4){
                    var subjek = "Rambu-rambu Lalu Lintas"
                }else if(results.subjek_complaint == 5){
                    var subjek = "Calo, Pungli, Suap"
                }else if(results.subjek_complaint == 6){
                    var subjek = "Balap Liar"
                }else if(results.subjek_complaint == 7){
                    var subjek = "Informasi Lain"
                }

                $('.Detail,#name_complaint').attr('disabled', true)
                $('.Detail,#email_complaint').attr('disabled', true)
                $('.Detail,#subjek_complaint').attr('disabled', true)
                $('.Detail,#deskripsi_complaint').attr('disabled', true)
                
                
                $('.Detail,#name_complaint').val(results.name_complaint)
                $('.Detail,#email_complaint').val(results.email_complaint)
                $('.Detail,#subjek_complaint').val(subjek)
                $('.Detail,#deskripsi_complaint').val(results.deskripsi_complaint)
               

               

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
                    url: "<?php echo base_url(); ?>masterdata/layananpengaduan/hapusVisimisi/",
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