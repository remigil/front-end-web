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
                        <th>Nama Pengirim</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                
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
                                    <input type="text" class="form-control" id="name_survey" placeholder="nama">
                                    <label for="">Nama Pengirim</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="email_survey" placeholder="email">
                                    <label for="">Email Pengirim</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" style="height: 100px" id="address_survey" placeholder="Alamat" name="address_survey"></textarea>
                                    <label for="alamat">Alamat Pengirim</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-floating mb-3">
                                        <input type="text" id="design_survey" class="form-control" name="design_survey">
                                        <label for="design_survey">Desain Tampilan</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating mb-3">
                                        <input type="text" id="convenience_survey" class="form-control" name="convenience_survey">
                                        <label for="convenience_survey">Kemudahan Pencarian</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating mb-3">
                                        <input type="text" id="accurate_survey" class="form-control" name="accurate_survey">
                                        <label for="accurate_survey">Keakuratan Informasi</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating mb-3">
                                        <input type="text" id="fast_survey" class="form-control" name="fast_survey">
                                        <label for="fast_survey">Kecepatan Informasi</label>
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

                url: '<?php echo base_url(); ?>masterdata/surveykepuasan/serverSideTable',

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
                    data: 'name_survey'
                },
                {
                    data: 'email_survey'
                },
                {
                    data: 'address_survey'
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

    function detail(id) {
        // console.log("ok");
        $.ajax({
            url: '<?= base_url() ?>masterdata/surveykepuasan/detail',
            type: 'POST',
            data: {
                id_survey : id
            },
            dataType: 'JSON',
            success: function(results) {
                if(results.design_survey == 1){
                    var desain = "Sangat Bagus"
                }else if(results.design_survey == 2){
                    var desain = "Bagus"
                }else if(results.design_survey == 3){
                    var desain = "Kurang Bagus"
                }else if(results.design_survey == 4){
                    var desain = "Jelek"
                }else if(results.design_survey == 5){
                    var desain = "Jelek Sekali"
                }

                if(results.design_survey == 1){
                    var kemudahan = "Sangat Mudah"
                }else if(results.design_survey == 2){
                    var kemudahan = "Mudah"
                }else if(results.design_survey == 3){
                    var kemudahan = "Kurang Mudah"
                }else if(results.design_survey == 4){
                    var kemudahan = "Tidak Mudah"
                }

                if(results.design_survey == 1){
                    var akurat = "Sangat Puas"
                }else if(results.design_survey == 2){
                    var akurat = "Puas"
                }else if(results.design_survey == 3){
                    var akurat = "Kurang Puas"
                }else if(results.design_survey == 4){
                    var akurat = "Tidak Puas"
                }

                if(results.design_survey == 1){
                    var kecepatan = "Sangat Cepat"
                }else if(results.design_survey == 2){
                    var kecepatan = "Cepat"
                }else if(results.design_survey == 3){
                    var kecepatan = "Kurang Cepat"
                }else if(results.design_survey == 4){
                    var kecepatan = "Tidak Cepat"
                }

                $('.DetailPolda,#name_survey').attr('disabled', true)
                $('.DetailPolda,#email_survey').attr('disabled', true)
                $('.DetailPolda,#address_survey').attr('disabled', true)
                $('.DetailPolda,#design_survey').attr('disabled', true)
                $('.DetailPolda,#convenience_survey').attr('disabled', true)
                $('.DetailPolda,#accurate_survey').attr('disabled', true)
                $('.DetailPolda,#fast_survey').attr('disabled', true)
                
                $('.DetailPolda,#name_survey').val(results.name_survey)
                $('.DetailPolda,#email_survey').val(results.email_survey)
                $('.DetailPolda,#address_survey').val(results.address_survey)
                $('.DetailPolda,#design_survey').val(desain)
                $('.DetailPolda,#convenience_survey').val(kemudahan)
                $('.DetailPolda,#accurate_survey').val(akurat)
                $('.DetailPolda,#fast_survey').val(kecepatan)

               

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