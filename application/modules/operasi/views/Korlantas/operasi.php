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
    <button type="button" class="btn btn-primary waves-effect mb-2" data-bs-toggle="modal" data-bs-target=".TambahRencanaOperasi">Tambah Rencana Operasi</button>
    <div class="card">

        <div class="card-body">

            <table id="datatable" class="table dt-responsive w-100">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Operasi</th>
                        <th>Tanggal Pelaksanaan</th>
                        <th>Tanggal Selesai</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                
            </table>

        </div>
    </div>
</div>
<!-- End Page -->


<div class="modal fade TambahRencanaOperasi" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Tambah Rencana Operasi</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
                <form action="" class="form">
                    
                    <div class="row">
                        <div class="col-md-12">
                        <div class="material-textfield">
                        <input type="text" name="name_operation" id="" style="width:100% ;">
                        <label for="" class="labelmui">Nama Operasi</label>
                    </div>
                        </div>
                        <div class="col-md-6">
                            <div class="material-textfield">
                                <input type="date" name="date_start_operation" id="" style="width:100% ;">
                                <label for="" class="labelmui">Tanggal Pelaksanaan</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="material-textfield">
                                <input type="date" name="date_end_operation" id="" style="width:100% ;">
                                <label for="" class="labelmui">Tanggal Selesai</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                   <div class="material-textfield">
                        <input type="file" name="photo" id="" style="width:100%;" class="form-control">
                        <label for="" class="labelmui">Document Sprint</label>
                    </div>
                   </div>
                   <div class="col-md-12">
                   <div class="material-textfield">
                        <input type="file" name="photo" id="" style="width:100%;" class="form-control">
                        <label for="" class="labelmui">Logo</label>
                    </div>
                   </div>
                   <div class="col-md-12">
                   <div class="material-textfield">
                        <input type="file" name="photo" id="" style="width:100%;" class="form-control">
                        <label for="" class="labelmui">Background Image</label>
                    </div>
                   </div>
                   <div class="col-md-12">
                   <div class="material-textfield">
                        <input type="file" name="photo" id="" style="width:100%;" class="form-control">
                        <label for="" class="labelmui">Banner</label>
                    </div>
                   </div>
                    </div>
       
            
                    
                    
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary waves-effect float-end me-4" style="width: 25%; letter-spacing: 2px;">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade UbahRencanaOperasi" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Edit Rencana Operasi</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="fw-bold ms-4"> Identitas Operasi</p>
                <form action="" class="form">
                    <div class="material-textfield">
                        <input type="text" name="" id="" style="width:100% ;">
                        <label for="" class="labelmui">Jenis Operasi yang Akan Dilaksanakan</label>
                    </div>
                    <div class="material-textfield">
                        <input type="text" name="" id="" style="width:100% ;">
                        <label for="" class="labelmui">Nama Operasi</label>
                    </div>
                    <div class="material-selectfield mb-3">
                        <select name="" id="">
                            <!-- <select name="" id=""  multiple required> -->
                            <option value="">Jawa Barat</option>
                            <option value="">Jawa Tengah</option>
                            <option value="">Jawa Timur</option>
                        </select>
                        <label class="labelmui">Polda</label>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="material-textfield">
                                <input type="date" name="" id="" style="width:100% ;">
                                <label for="" class="labelmui">Tanggal Mulai</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="material-textfield">
                                <input type="date" name="" id="" style="width:100% ;">
                                <label for="" class="labelmui">Tanggal Selesai</label>
                            </div>
                        </div>
                    </div>
                    <div class="material-textfield">
                        <input type="file" name="" id="" style="width:100%;" class="form-control">
                        <label for="" class="labelmui">Logo</label>
                    </div>
                    <div class="material-textfield">
                        <input type="file" name="" id="" style="width:100%;" class="form-control">
                        <label for="" class="labelmui">Background Image</label>
                    </div>
                    <div class="material-textfield">
                        <input type="file" name="" id="" style="width:100%;" class="form-control">
                        <label for="" class="labelmui">Banner</label>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary waves-effect float-end me-4" style="width: 25%; letter-spacing: 2px;">SIMPAN</button>
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

                url: '<?php echo base_url(); ?>operasi/RencanaOperasi/serverSideTable',

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
					data: 'name_operation'
                },
				{
					data: 'date_start_operation'
				},
				{
					data: 'date_end_operation'
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

    $(".form").submit(function(e) {
            $("#overlay").fadeIn(300);
            e.preventDefault();
            var formData = new FormData($('.form')[0]);
            $.ajax({
                url: "<?php echo base_url(); ?>operasi/RencanaOperasi/store",
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
                            $(".TambahRencanaOperasi").modal('hide');
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

    $("#HapusRencanaOperasi").click(function() {
        Swal.fire({
            title: 'Apakah anda ingin menghapus data ini?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#C61318',
            cancelButtonColor: '#003A91',
            cancelButtonText: 'Batal',
            confirmButtonText: 'Hapus'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: 'Berhasil',
                    text: "Data berhasil dihapus",
                    icon: 'success',
                    confirmButtonColor: '#003A91',
                    confirmButtonText: 'OK'
                })
            }
        })
    })
</script>