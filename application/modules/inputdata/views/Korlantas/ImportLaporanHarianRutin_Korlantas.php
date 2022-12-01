<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Daftar <?= $title; ?></li>
    </ol>
</nav>
<div class="page">
    <button type="button" class="btn btn-primary waves-effect mb-2" data-bs-toggle="modal" data-bs-target=".ImportFile">Import File</button>
    <button type="button" class="btn btn-info waves-effect mb-2" data-bs-toggle="modal" data-bs-target=".FormatFile">Download Format</button>
    <div class="card">
        <div class="card-body">
            <table id="datatable" class="table dt-responsive w-100">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th width="40%">File</th>
                        <th width="20%">Tanggal Import</th>
                        <th width="15%">Status</th>
                        <th width="20%">Proses</th>
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
                <h5 class="modal-title text-white" id="myLargeModalLabel">Import Laporan Harian Rutin</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="form">
                    <input type="hidden" name="<?= $csrf_name; ?>" value="<?= $csrf_token; ?>" style="display: none">
                    <input type="hidden" name="polda_name" id="polda_name">
                    <input type="hidden" name="jenis_satker_name" id="jenis_satker_name">
                    <input type="hidden" name="jenis_laporan_name" id="jenis_laporan_name">
                    <div class="row">
                        <!-- <div class="col-md-12">
                            <div class="material-selectfield mb-3">
                                <select name="polda_id" id="polda_id">
                                    <option value="0">Pilih</option>
                                    <?php foreach ($data['getPolda'] as $key) : ?>
                                        <option value="<?= $key['id'] ?>"><?= $key['name_polda'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <label class="labelmui">Polda</label>
                            </div>
                        </div> -->
                        <div class="col-md-12">
                            <div class="material-selectfield mb-3">
                                <select name="jenis_satker" id="jenis_satker">
                                    <option value="">Pilih</option>
                                    <option value="1" <?php echo ($data['type'] == 1) ? 'selected' : ''; ?>>Ditgakkum</option>
                                    <option value="2" <?php echo ($data['type'] == 2) ? 'selected' : ''; ?>>Ditkamsel</option>
                                    <option value="3" <?php echo ($data['type'] == 3) ? 'selected' : ''; ?>>Ditregident</option>

                                </select>
                                <label class="labelmui">Satker</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="material-selectfield mb-3">
                                <select name="jenis_laporan" id="jenis_laporan">
                                    <option value="">Pilih</option>
                                </select>
                                <label class="labelmui">Jenis Laporan</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="material-textfield mb-3">
                                <input type="date" name="date" id="date" style="width:100% ;">
                                <label class="labelmui">Tanggal Input</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="material-textfield">
                                <input type="file" name="userfile" style="width:100%;" class="form-control">
                                <label for="" class="labelmui">Pilih File</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary waves-effect float-end me-4" style="width: 25%; letter-spacing: 2px;">UPLOAD</button>
                    </div>
                </form>
            </div>
        </div>
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
                url: '<?php echo base_url(); ?>inputdata/ImportLaporanHarian/listof_import_file',
                data: function(data) {
                    $("#overlay").fadeIn(300);
                    data.orderField = data.order[0] != undefined ? data.order[0].column : '';
                    data.orderValue = data.order[0] != undefined ? data.order[0].dir : '';
                    data.page = Number(data.start / data.length)
                    // data.page = Number(data.start / data.length) + 1
                },
                beforeSend: function(xhr, settings) {},
                "dataSrc": function(result) {
                    result.iTotalRecords = result.iTotalRecords;
                    result.iTotalDisplayRecords = result.iTotalRecords;
                    return result.aaData;
                }
            },
            columns: [{
                    data: 'id'
                },
                {
                    data: 'file_name'
                },
                {
                    data: 'created_at'
                },
                {
                    data: 'status'
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

        const jenis_satker_name = $('#jenis_satker option:selected').text();
        let jenis_satker = $('#jenis_satker').val();
        $('#jenis_laporan').html('')
        if (jenis_satker == 1) {
            $('#jenis_laporan')
                .append(`
                    <option value="">Pilih</option>
                    <option value="1">Data Dakgar Lantas</option>
                    <option value="2">Pelanggaran Konvensional</option>
                    <option value="3">Kecelakaan Lalu Lintas</option>
                    <option value="4">Turjagwali</option>
                `)
        } else if (jenis_satker == 2) {
            $('#jenis_laporan')
                .append(`
                    <option value="">Pilih</option>
                    <option value="5">Dikmaslantas</option>
                    <option value="6">Penyebaran / Pemasangan</option>
                `)
        } else if (jenis_satker == 3) {
            $('#jenis_laporan')
                .append(`
                    <option value="">Pilih</option>
                    <option value="7">SIM</option>
                    <option value="8">BPKB</option>
                    <option value="9">RANMOR</option>
                    <option value="10">STNK</option>
                `)
        } else {
            $('#jenis_laporan')
                .append(`
                    <option value="">Pilih</option>
                `)
        }
        $("#jenis_satker_name").val(jenis_satker_name);
    });

    $('#jenis_satker').on('change', function() {
        const jenis_satker_name = $('#jenis_satker option:selected').text();
        let jenis_satker = $('#jenis_satker').val();
        $('#jenis_laporan').html('')
        if (jenis_satker == 1) {
            $('#jenis_laporan')
                .append(`
                    <option value="">Pilih</option>
                    <option value="1">Data Dakgar Lantas</option>
                    <option value="2">Pelanggaran Konvensional</option>
                    <option value="3">Kecelakaan Lalu Lintas</option>
                    <option value="4">Turjagwali</option>
                `)
        } else if (jenis_satker == 2) {
            $('#jenis_laporan')
                .append(`
                    <option value="">Pilih</option>
                    <option value="5">Dikmaslantas</option>
                    <option value="6">Penyebaran / Pemasangan</option>
                `)
        } else if (jenis_satker == 3) {
            $('#jenis_laporan')
                .append(`
                    <option value="">Pilih</option>
                    <option value="7">SIM</option>
                    <option value="8">BPKB</option>
                    <option value="9">RANMOR</option>
                    <option value="10">STNK</option>
                `)
        } else {
            $('#jenis_laporan')
                .append(`
                    <option value="">Pilih</option>
                `)
        }
        $("#jenis_satker_name").val(jenis_satker_name);
    })

    // $('#polda_id').on('change', function() {
    //     const polda_name = $('#polda_id option:selected').text();
    //     $("#polda_name").val(polda_name);
    // })

    $('#jenis_laporan').on('change', function() {
        const jenis_laporan_name = $('#jenis_laporan option:selected').text();
        $("#jenis_laporan_name").val(jenis_laporan_name);
    })

    $(".form").submit(function(e) {
        $("#overlay").fadeIn(300);
        e.preventDefault();
        var formData = new FormData($('.form')[0]);
        $.ajax({
            url: "<?php echo base_url(); ?>inputdata/ImportLaporanHarian/uploadFile",
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

    function rmfile() {
        id = $('#btn-delete').data('id');
        file_name = $('#btn-delete').data('file_name');
        Swal.fire({
            title: 'Do you want to delete this data?',
            showDenyButton: false,
            showCancelButton: true,
            icon: "warning",
            confirmButtonText: 'Process'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    data: {
                        id: id,
                        file_name: file_name
                    },
                    url: "<?php echo base_url(); ?>inputdata/ImportLaporanHarian/rmfile",
                    success: function(response) {
                        if (response.status === true) {
                            Swal.fire(
                                `Files deleted`,
                                '',
                                'success'
                            ).then(function() {
                                userDataTable.draw();
                            });
                        } else {
                            Swal.fire(
                                `Failed`,
                                '',
                                'error'
                            ).then(function() {});
                        }
                    },
                    error: function(response) {
                        Swal.fire(
                            `Failed`,
                            '',
                            'error'
                        ).then(function() {});
                    }
                })
            } else if (result.isDenied) {
                Swal.fire('Not processed', '', 'info')
            }
        });
    }

    function view() {
        file_name = $('#btn-view').data('file_name');
        Swal.fire({
            title: 'Do you want to view this data?',
            showDenyButton: false,
            showCancelButton: true,
            icon: "warning",
            confirmButtonText: 'Process'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = "<?php echo site_url(); ?>inputdata/ImportLaporanHarian/view/" + file_name + "";
            }
        });
    }

    function format(type) {
        window.location = "<?php echo site_url(); ?>inputdata/ImportLaporanHarian/format/" + type + "";
    }

    function process(type) {
        id = $('#btn-process').data('id');
        // polda_id = $('#btn-process').data('polda_id');
        tanggal = $('#btn-process').data('tanggal');
        status = $('#btn-process').data('status');
        file_name = $('#btn-process').data('file_name');
        Swal.fire({
            title: 'Do you want to process this data?',
            showDenyButton: false,
            showCancelButton: true,
            icon: "warning",
            confirmButtonText: 'Process'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    data: {
                        id: id,
                        // polda_id:polda_id,
                        tanggal: tanggal,
                        status: status,
                        file_name: file_name,
                        type: type
                    },
                    url: '<?php echo base_url(); ?>inputdata/ImportLaporanHarian/process',
                    success: function(response) {
                        $("#overlay").fadeOut(300);
                        if (response.status === true) {
                            Swal.fire(
                                `File processed successfully`,
                                '',
                                'success'
                            ).then(function() {
                                userDataTable.draw();
                            });
                        } else {
                            Swal.fire(
                                `File failed to process`,
                                '',
                                'error'
                            ).then(function() {});
                        }
                    },
                    error: function(response) {
                        Swal.fire(
                            `File failed to process`,
                            '',
                            'error'
                        ).then(function() {});
                    }
                })
            } else if (result.isDenied) {
                Swal.fire('Not processed', '', 'info')
            }
        });
    }
</script>