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
                        <button class="btn btn-primary" type="button" id="btn_import">Import Excel</button>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target=".FormatFile">Download Format Excel</button>
                    </div>
                </div>

                <div class="isiRow">

                </div>
                <div class="col-md-12">
                    <button type="button" id="btn_submit" class="btn btn-primary waves-effect float-end mt-3" style="width: 10%; letter-spacing: 2px;">SIMPAN</button>
                    <button type="button" class="btn btn-secondary waves-effect float-end mt-3 me-3" style="width: 10%; letter-spacing: 2px;">BATAL</button>
                </div>
            </form>
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

<script>
    $(document).ready(function() {
        $('.dropify').dropify();

        console.log('ok')
        $('#datatable').DataTable({
            scrollY: "450px",
            scrollCollapse: true,
            paging: false,
            bInfo: false
        });
    });
    $('#jenis_laporan').append(`<option value="">-Pilih jenis laporan--</option>
                                <option value="2">Pelanggaran</option>
                                <option value="4">Turjagwali</option>`)


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
                </table>`
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