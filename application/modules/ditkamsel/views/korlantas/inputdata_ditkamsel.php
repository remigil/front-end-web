<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item ">Input Data</li>
        <li class="breadcrumb-item active fw-bold" aria-current="page"><a href="#"><?= $title; ?></a></li>
    </ol>
</nav>
<!-- </div> -->
<div class="page">
    <div class="card">
        <div class="card-body">
            <form action="" id="form-dataharian">
                <input type="hidden" name="<?= $csrf_name; ?>" value="<?= $csrf_token; ?>" style="display: none">
                <div class="row d-flex">
                    <div class="col-md-3">
                        <div class="material-selectfield mb-3">
                            <select name="jenis_laporan" id="jenis_laporan">
                            </select>
                            <label class="labelmui">Jenis Laporan</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="material-textfield mb-3">
                            <input type="date" name="date" id="date" style="width:100% ;">

                            <label class="labelmui">Tanggal Input</label>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <button class="btn btn-primary" type="button" id="btn_pilih">Pilih</button>
                    </div>
                    <div class="col-md-3">
                        <button type="button" class="btn btn-primary waves-effect mb-2" data-bs-toggle="modal" data-bs-target=".ImportFile">Import File</button>
                        <button type="button" class="btn btn-info waves-effect mb-2" data-bs-toggle="modal" data-bs-target=".FormatFile">Download Format</button>
                    </div>
                </div>

                <div class="isiRow">

                </div>
            </form>
        </div>
    </div>
</div>

<div class="page">
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
                <form action="" class="form" id="form_import">
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
                                <select name="jenis_satker" id="jenis_satker_dropdown">
                                    <option value="">Pilih</option>
                                    <option value="2" selected>Ditkamsel</option>
                                </select>
                                <label class="labelmui">Satker</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="material-selectfield mb-3">
                                <select name="jenis_laporan" id="jenis_laporan_dropdown">
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
                        <button type="button" id="btn_uploadFile" class="btn btn-primary waves-effect float-end me-4" style="width: 25%; letter-spacing: 2px;">UPLOAD</button>
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
                    <li class="list-group-item">
                        <h4>Ditkamsel</h4>
                    </li>
                    <li class="list-group-item"><button onclick="format(5)" id="btn-format" class="btn btn-xs btn-info">Format Import Dikmaslantas</button></li>
                    <li class="list-group-item"><button onclick="format(6)" id="btn-format" class="btn btn-xs btn-info">Format Import Penyebaran dan Pemasangan</button></li>
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
                url: '<?php echo base_url(); ?>ditkamsel/Ditkamsel/listof_import_file',
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


        const jenis_satker_name = $('#jenis_satker_dropdown option:selected').text();
        let jenis_satker_dropdown = $('#jenis_satker_dropdown').val();
        $('#jenis_laporan_dropdown').html('')
        if (jenis_satker_dropdown == 2) {
            $('#jenis_laporan_dropdown')
                .append(`
                    <option value="">Pilih</option>
                    <option value="5">Dikmaslantas</option>
                    <option value="6">Penyebaran / Pemasangan</option>
                `)
        }
        $("#jenis_satker_name").val(jenis_satker_name);


    });
    $('#jenis_laporan').append(`<option value="">-Pilih jenis laporan--</option>
                                        <option value="5">Dikmaslantas</option>
                                        <option value="6">Penyebaran / Pemasangan</option>`)


    $('#btn_pilih').on('click', function() {
        $.ajax({
            url: '<?= base_url() ?>inputdata/LaporanHarian/getPolda',
            type: 'POST',
            data: {
                polda_id: $('#polda_id').val()
            },
            dataType: 'JSON',
            success: function(results) {

                let jenis_laporan = $('#jenis_laporan').val();
                let laporan = [];
                let field_input = [];


                if (jenis_laporan == 1) {
                    field_input.push(`<input type="number" name="capture_camera[]" class="form-control" value="0">`, `<input type="number" name="statis[]" class="form-control" value="0">`, `<input type="number" name="mobile[]" class="form-control" value="0">`, `<input type="number" name="online[]" class="form-control" value="0">`, `<input type="number" name="posko[]" class="form-control" value="0">`, `<input type="number" name="preemtif[]" class="form-control" value="0">`, `<input type="number" name="preventif[]" class="form-control" value="0">`, `<input type="number" name="odol_227[]" class="form-control" value="0">`, `<input type="number" name="odol_307[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 2) {
                    laporan.push('Pelanggaran Berat', 'Pelanggaran Sedang', 'Pelanggaran Ringan', 'Teguran')
                    field_input.push(`<input type="number" name="pelanggaran_berat[]" class="form-control" value="0">`, `<input type="number" name="pelanggaran_sedang[]" class="form-control" value="0">`, `<input type="number" name="pelanggaran_ringan[]" class="form-control" value="0">`, `<input type="number" name="teguran[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 3) {
                    laporan.push('Meninggal dunia', 'Luka Berat', 'Luka Ringan', 'Kerugian Material')
                    field_input.push(`<input type="number" name="meninggal_dunia[]" class="form-control" value="0">`, `<input type="number" name="luka_berat[]" class="form-control" value="0">`, `<input type="number" name="luka_ringan[]" class="form-control" value="0">`, `<input type="number" name="kerugian_material[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 4) {
                    laporan.push('Penjagaan', 'Pengawalan', 'Patroli', 'Pengaturan')
                    field_input.push(`<input type="number" name="penjagaan[]" class="form-control" value="0">`, `<input type="number" name="pengawalan[]" class="form-control" value="0">`, `<input type="number" name="patroli[]" class="form-control" value="0">`, `<input type="number" name="pengaturan[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 5) {
                    laporan.push('Media Cetak', 'Media Elektronik', 'Media Sosial', 'Laka Langgar')
                    field_input.push(`<input type="number" name="media_cetak[]" class="form-control" value="0">`, `<input type="number" name="media_elektronik[]" class="form-control" value="0">`, `<input type="number" name="media_sosial[]" class="form-control" value="0">`, `<input type="number" name="laka_langgar[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 6) {
                    laporan.push('Stiker', 'Leaflet', 'Spanduk', 'Billboard', 'JEMENSOSPREK')
                    field_input.push(`<input type="number" name="stiker[]" class="form-control" value="0">`, `<input type="number" name="leaflet[]" class="form-control" value="0">`, `<input type="number" name="spanduk[]" class="form-control" value="0">`, `<input type="number" name="billboard[]" class="form-control" value="0">`, `<input type="number" name="jemensosprek[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 7) {
                    laporan.push('Baru', 'Perpanjangan')
                    field_input.push(`<input type="number" name="baru[]" class="form-control" value="0">`, `<input type="number" name="perpanjangan[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 8) {
                    laporan.push('Baru', 'Perpanjangan', 'RUBENTINA')
                    field_input.push(`<input type="number" name="baru[]" class="form-control" value="0">`, `<input type="number" name="perpanjangan[]" class="form-control" value="0">`, `<input type="number" name="rubentina[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 9) {
                    laporan.push('Mobil Penumpang', 'Mobil Barang', 'Mobil Bus', 'Ransus', 'Sepeda Motor')
                    field_input.push(`<input type="number" name="mobil_penumpang[]" class="form-control" value="0">`, `<input type="number" name="mobil_barang[]" class="form-control" value="0">`, `<input type="number" name="mobil_bus[]" class="form-control" value="0">`, `<input type="number" name="ransus[]" class="form-control" value="0">`, `<input type="number" name="sepeda_motor[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 10) {
                    laporan.push('Baru', 'Perpanjangan', 'RUBENTINA')
                    field_input.push(`<input type="number" name="baru[]" class="form-control" value="0">`, `<input type="number" name="perpanjangan[]" class="form-control" value="0">`, `<input type="number" name="rubentina[]" class="form-control" value="0">`)
                }

                let inputs = ''
                field_input.forEach((element, index) => {
                    inputs += `<td>${element}</td>`
                })

                console.log(inputs)

                let body = ''
                results.forEach((element, index) => {
                    body += `
                    <tr>
                        <td>${index+1}</td>
                        <td><input type="hidden" name="polda_id[]" value="${element.id}">${element.name_polda}</td>
                        ${inputs}
                    </tr>`
                });

                let coloumn = ''
                laporan.forEach((element, index) => {
                    coloumn += `<th>${element}</th>`
                })

                let master_tb = ''
                if (jenis_laporan != 1) {
                    master_tb = `
                <table id="datatable" class="table table-bordered dt-responsive w-100">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>No</th>
                        <th>Polda</th>
                        ${coloumn}
                    </tr>
                </thead>
                <tbody id="maintablebody">
                    ${body}
                <tbody>
                </table>

                 <div class="col-md-12">
                    <button type="button" id="btn_submit" class="btn btn-primary waves-effect float-end mt-3" style="width: 10%; letter-spacing: 2px;">SIMPAN</button>
                    <button type="button" class="btn btn-secondary waves-effect float-end mt-3 me-3" style="width: 10%; letter-spacing: 2px;">BATAL</button>
                </div>
                `
                } else {
                    master_tb = `<table id="datatable" class="table table-bordered dt-responsive w-100">
                <thead class="bg-primary text-white text-center">
                    <tr>
                        <th rowspan="2"  style="vertical-align : middle;text-align:center;" >No</th>
                        <th rowspan="2"  style="vertical-align : middle;text-align:center;">Polda</th>
                        <th rowspan="2"  style="vertical-align : middle;text-align:center;">Jumlah Capture Camera</th>
                        <th colspan="2">Jumlah Validasi Petugas</th>
                        <th colspan="2">Jumlah Konfirmasi Masyarakat</th>
                        <th colspan="4">ODOL</th>
                    </tr>
                    <tr>
                        <td>Statis</td>
                        <td>Mobile</td>
                        <td>Online</td>
                        <td>Posko</td>
                        <td>Pre-Emtif</td>
                        <td>Pre-Ventif</td>
                        <td>227</td>
                        <td>307</td>
                    </tr>
                </thead>
                <tbody id="maintablebody">
                    ${body}
                <tbody>
                </table>
                
                 <div class="col-md-12">
                    <button type="button" id="btn_submit" class="btn btn-primary waves-effect float-end mt-3" style="width: 10%; letter-spacing: 2px;">SIMPAN</button>
                    <button type="button" class="btn btn-secondary waves-effect float-end mt-3 me-3" style="width: 10%; letter-spacing: 2px;">BATAL</button>
                </div>
                `
                }


                $('.isiRow').html(master_tb)
            }
        })
    })
    $('#btn_submit').on('click', function(e) {
        e.preventDefault();
        const formData = new FormData($('#form-dataharian')[0]);

        $.ajax({
            url: "<?= base_url() ?>inputdata/LaporanHarian/storePolda",
            method: "POST",
            data: formData,
            dataType: "JSON",
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
                        window.location.reload();
                    });
                } else {
                    Swal.fire(
                        `${data['message']}`,
                        '',
                        'error'
                    ).then(function() {});
                }
            }
        })
    })


    $("#btn_uploadFile").on('click', function(e) {
        $("#overlay").fadeIn(300);
        e.preventDefault();
        var formData = new FormData($('#form_import')[0]);
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


    $('#jenis_laporan_dropdown').on('change', function() {
        const jenis_laporan_name = $('#jenis_laporan_dropdown option:selected').text();
        $("#jenis_laporan_name").val(jenis_laporan_name);
    })

    function format(type) {
        window.location = "<?php echo site_url(); ?>inputdata/ImportLaporanHarian/format/" + type + "";
    }


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