<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Daftar <?= $title; ?></li>
    </ol>
</nav>
<div class="page">
    <button type="button" class="btn btn-primary waves-effect mb-2 button_tambah" data-bs-toggle="modal" data-bs-target=".ImportFile">Upload File</button>
    <!-- <button type="button" class="btn btn-info waves-effect mb-2" data-bs-toggle="modal" data-bs-target=".FormatFile">Download Format</button> -->
    <div class="card">
        <div class="card-body">
            <table id="datatable" class="table dt-responsive w-100">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th width="20%">Name File</th>
                        <th width="20%">Tipe</th>
                        <th width="20%">Tanggal Upload</th>
                        <th width="20%">Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

<div class="modal fade ImportFile" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Upload Laporan Anev Kamseltibcarlantas</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="form" id="form_tambah" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="<?= $csrf_name; ?>" value="<?= $csrf_token; ?>" style="display: none">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" name="date" placeholder="date">
                                <label for="date">Tanggal Upload</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="title" placeholder="judul">
                                <label for="title">Judul laporan</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select name="tipe" id="tipe" class="form-select" aria-label="Floating label select" style="width:100%" required>
                                    <option value="1">Harian</option>
                                    <option value="2">Mingguan</option>
                                    <option value="3">Bulanan</option>
                                </select>
                                <label for="tipe">Tipe Laporan</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="file" class="form-control" name="file" placeholder="judul">
                                <label for="file">File laporan</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="file" class="form-control" name="cover" placeholder="judul">
                                <label for="cover">Cover laporan</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary waves-effect float-end" style="width: 25%; letter-spacing: 2px;">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div>
</div>

<div class="modal fade FormatFile" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Format Import Laporan Harian</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="list-group">
                    <li class="list-group-item"><button onclick="format(1)" id="btn-format" class="btn btn-xs btn-info">Format Import Dakgar Lantas</button></li>
                    <li class="list-group-item"><button onclick="format(2)" id="btn-format" class="btn btn-xs btn-info">Format Import Pelanggaran Konvensional</button></li>
                    <li class="list-group-item"><button onclick="format(3)" id="btn-format" class="btn btn-xs btn-info">Format Import Kecelakaan Lalu Lintas</button></li>
                    <li class="list-group-item"><button onclick="format(4)" id="btn-format" class="btn btn-xs btn-info">Format Import Turjagwali</button></li>
                    <li class="list-group-item"><button onclick="format(5)" id="btn-format" class="btn btn-xs btn-info">Format Import Dikmaslantas</button></li>
                    <li class="list-group-item"><button onclick="format(6)" id="btn-format" class="btn btn-xs btn-info">Format Import Penyebaran dan Pemasangan</button></li>
                    <li class="list-group-item"><button onclick="format(7)" id="btn-format" class="btn btn-xs btn-info">Format Import SIM</button></li>
                    <li class="list-group-item"><button onclick="format(8)" id="btn-format" class="btn btn-xs btn-info">Format Import BPKB</button></li>
                    <li class="list-group-item"><button onclick="format(9)" id="btn-format" class="btn btn-xs btn-info">Format Import RANMOR</button></li>
                    <li class="list-group-item"><button onclick="format(10)" id="btn-format" class="btn btn-xs btn-info">Format Import STNK</button></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url(); ?>assets/admin/js/jquery.livequery.js"></script>
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

                url: '<?php echo base_url(); ?>inputdata/UploadAnev/serverSideTable',

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
                    data: 'title'
                },
                {
                    data: 'tipe'
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

    });

    $(".form").submit(function(e) {
        $("#overlay").fadeIn(300);
        e.preventDefault();
        var formData = new FormData($('.form')[0]);
        $.ajax({
            url: "<?php echo base_url(); ?>inputdata/UploadAnev/store",
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
                        $(".ImportFile").modal('hide');
                        userDataTable.draw();
                        $('.form')[0].reset()
                    });
                } else {
                    Swal.fire(
                        `${data['message']}`,
                        '',
                        'error'
                    ).then(function() {
                        $('.form')[0].reset()
                    });
                }
            }
        });
    });


    $('.button_tambah').on('click', function() {
        $('.form')[0].reset()
    })

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
                    url: "<?php echo base_url(); ?>inputdata/UploadAnev/delete",
                    type: "POST",
                    data: {
                        id
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
</script>