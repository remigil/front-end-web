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
                <div class="col-md-12">
                    <div class="row d-flex">
                        <!-- <div class="col-md-2">
                            <div class="material-selectfield mb-3">
                                <select name="polda_id" id="polda_id">
                                    <select name="" id=""  multiple required>
                                    <option value="0">--Pilih polda---</option>
                                    <?php foreach ($data['getPolda'] as $key) : ?>
                                        <option value="<?= $key['id'] ?>"><?= $key['name_polda'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <label class="labelmui">Polda</label>
                            </div>
                        </div> -->
                        <div class="col-md-3">
                            <div class="material-selectfield mb-3">
                                <select name="jenis_satker" id="jenis_satker">
                                    <!-- <select name="" id=""  multiple required> -->
                                    <option value="">--Pilih jenis Satker--</option>
                                    <option value="1">Media Center NTMC On Air</option>
                                    <option value="2">Media Center NTMC Off Air</option>
                                    <option value="3">Dokumentasi (Monitoring)</option>
                                    <option value="4">Aktivitas NTMC Korlantas</option>
                                    <!-- <option value="5">Status CCTV Korlantas</option>
                                    <option value="6">Status CCTV Yang Terintegrasi</option> -->
                                </select>
                                <label class="labelmui">Satker</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="material-selectfield mb-3">
                                <select name="jenis_laporan" id="jenis_laporan">
                                    <!-- <select name="" id=""  multiple required> -->
                                    <option value="">-Pilih jenis laporan--</option>
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
<!-- End Page -->

<script>
    $(document).ready(function() {
        $('.dropify').dropify();

        console.log('ok')
        $('#datatable').DataTable({
            scrollY: "450px",
            scrollX: true,

            scrollCollapse: true,
            paging: false,
            bInfo: false
        });
    });

    $('#jenis_satker').on('change', function() {
        let jenis_satker = $('#jenis_satker').val()
        $('#jenis_laporan').html('')
        if (jenis_satker == 1) {
            $('#jenis_laporan').append(`<option value="">-Pilih jenis laporan--</option>
                                        <option value="1">NTMC On Air Program TV</option>
                                        <option value="2">NTMC On Air Program Online</option>
                                        <option value="3">NTMC On Air Program Media Sosial</option>`)
        } else if (jenis_satker == 2) {
            $('#jenis_laporan').append(`<option value="">-Pilih jenis laporan--</option>
                                        <option value="4">NTMC Off Air Program </option>`)
        } else if (jenis_satker == 3) {
            $('#jenis_laporan').append(`<option value="">-Pilih jenis laporan--</option>
                                        <option value="5">Dokumentasi Media TV</option>
                                        <option value="6">Dokumentasi Media Twitter</option>
                                        <option value="7">Dokumentasi Media Facebook</option>
                                        <option value="8">Dokumentasi Media Portal Online</option>
                                        <option value="9">Dokumentasi Media Instagram</option>`)
        } else if (jenis_satker == 4) {
            $('#jenis_laporan').append(`<option value="">-Pilih jenis laporan--</option>
                                        <option value="10">Aktivitas Media Sosial NTMC</option>
                                        <option value="11">Aktivitas On Air Radio NTMC</option>
                                        <option value="12">Aktivitas Pengaduan NTMC</option>`)

        } else {
            $('#jenis_laporan').append(`<option value="">-Pilih jenis laporan--</option>`)
        }
    })


    $('#btn_pilih').on('click', function() {

        let jenis_laporan = $('#jenis_laporan').val();
        let laporan = [];
        let field_input = [];


        if (jenis_laporan == 1) {
            laporan.push('Program', 'Live Report', 'Live Program', 'Tapping', 'Vlog CCTV')
            field_input.push(`<input type="number" name="program" class="form-control" value="0">`, `<input type="number" name="live_report" class="form-control" value="0">`, `<input type="number" name="live_program" class="form-control" value="0">`, `<input type="number" name="tapping" class="form-control" value="0">`, `<input type="number" name="vlog_cctv" class="form-control" value="0">`)
        } else if (jenis_laporan == 2) {
            laporan.push('Web NTMC', 'Web Korlantas')
            field_input.push(`<input type="number" name="web_ntmc" class="form-control" value="0">`, `<input type="number" name="web_korlantas" class="form-control" value="0">`)
        } else if (jenis_laporan == 3) {
            laporan.push('Facebook', 'Instagram', 'Twitter')
            field_input.push(`<input type="number" name="facebook" class="form-control" value="0">`, `<input type="number" name="instagram" class="form-control" value="0">`, `<input type="number" name="twitter" class="form-control" value="0">`)
        } else if (jenis_laporan == 4) {
            laporan.push('Sosialisasi', 'Timtam')
            field_input.push(`<input type="number" name="sosialisasi" class="form-control" value="0">`, `<input type="number" name="timtam" class="form-control" value="0">`)
        } else if (jenis_laporan == 5) {
            laporan.push('Media TV')
            field_input.push(`<input type="number" name="media_tv" class="form-control" value="0">`)
        } else if (jenis_laporan == 6) {
            laporan.push('Positif Korlantas', 'Negatif Korlantas', 'Lakalantas', 'Positif Polri', 'Negatif Polri', 'Liputan/Dokumen')
            field_input.push(`<input type="number" name="positif_korlantas" class="form-control" value="0">`, `<input type="number" name="negatif_korlantas" class="form-control" value="0">`, `<input type="number" name="lakalantas" class="form-control" value="0">`, `<input type="number" name="positif_polri" class="form-control" value="0">`, `<input type="number" name="negatif_polri" class="form-control" value="0">`, `<input type="number" name="liputan" class="form-control" value="0">`)
        } else if (jenis_laporan == 7) {
            laporan.push('Positif Korlantas', 'Negatif Korlantas', 'Lakalantas', 'Positif Polri', 'Negatif Polri', 'Liputan/Dokumen')
            field_input.push(`<input type="number" name="positif_korlantas" class="form-control" value="0">`, `<input type="number" name="negatif_korlantas" class="form-control" value="0">`, `<input type="number" name="lakalantas" class="form-control" value="0">`, `<input type="number" name="positif_polri" class="form-control" value="0">`, `<input type="number" name="negatif_polri" class="form-control" value="0">`, `<input type="number" name="liputan" class="form-control" value="0">`)
        } else if (jenis_laporan == 8) {
            laporan.push('Positif Korlantas', 'Negatif Korlantas', 'Lakalantas', 'Positif Polri', 'Negatif Polri', 'Liputan/Dokumen')
            field_input.push(`<input type="number" name="positif_korlantas" class="form-control" value="0">`, `<input type="number" name="negatif_korlantas" class="form-control" value="0">`, `<input type="number" name="lakalantas" class="form-control" value="0">`, `<input type="number" name="positif_polri" class="form-control" value="0">`, `<input type="number" name="negatif_polri" class="form-control" value="0">`, `<input type="number" name="liputan" class="form-control" value="0">`)
        } else if (jenis_laporan == 9) {
            laporan.push('Positif Korlantas', 'Negatif Korlantas', 'Lakalantas', 'Positif Polri', 'Negatif Polri', 'Liputan/Dokumen')
            field_input.push(`<input type="number" name="positif_korlantas" class="form-control" value="0">`, `<input type="number" name="negatif_korlantas" class="form-control" value="0">`, `<input type="number" name="lakalantas" class="form-control" value="0">`, `<input type="number" name="positif_polri" class="form-control" value="0">`, `<input type="number" name="negatif_polri" class="form-control" value="0">`, `<input type="number" name="liputan" class="form-control" value="0">`)
        } else if (jenis_laporan == 10) {
            laporan.push('Facebook', 'Twitter')
            field_input.push(`<input type="number" name="facebook" class="form-control" value="0">`, `<input type="number" name="twitter" class="form-control" value="0">`)
        } else if (jenis_laporan == 11) {
            laporan.push('GEN FM', 'JAK FM', 'MOST FM', 'KISS FM')
            field_input.push(`<input type="number" name="gen_fm" class="form-control" value="0">`, `<input type="number" name="jak_fm" class="form-control" value="0">`, `<input type="number" name="most_fm" class="form-control" value="0">`, `<input type="number" name="kiss_fm" class="form-control" value="0">`)
        } else if (jenis_laporan == 12) {
            laporan.push('Radio PJR', 'SMS 9119', 'WA Center', 'Call Center')
            field_input.push(`<input type="number" name="radio_pjr" class="form-control" value="0">`, `<input type="number" name="sms_9119" class="form-control" value="0">`, `<input type="number" name="wa_center" class="form-control" value="0">`, `<input type="number" name="call_center" class="form-control" value="0">`)
        }

        let inputs = ''
        field_input.forEach((element, index) => {
            inputs += `<td>${element}</td>`
        })

        let laporans = ''
        laporan.forEach((element, index) => {
            laporans += `<td>${element}</td>`
        })

        let body = ''
        laporan.forEach((element, index) => {
            body += `<tr>
                    <td>${index+1}</td>
                    <td>${element}</td>
                    <td>${field_input[index]}</td>
                    </tr>`
        })

        console.log(body)

        let master_tb = `
                <table id="datatable" class="table table-bordered dt-responsive w-100">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Nilai</th>
                    </tr>
                </thead>
                <tbody id="maintablebody">
               ${body}
                <tbody>
                </table>
                `

        $('.isiRow').html(master_tb)

    })


    $('#btn_submit').on('click', function(e) {
        e.preventDefault();
        const formData = new FormData($('#form-dataharian')[0]);

        $.ajax({
            url: "<?= base_url() ?>inputdata/LaporanNTMC/storeNtmc",
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

<!-- <style>
    table {
        border: 1px solid black;
        overflow-x: scroll;
        overflow-y: scroll;
        position: sticky;
    }

    .card-body {
        overflow: auto;
        white-space: nowrap;
    }

    /* th {
        position: sticky;
        top: 0%;
        color: white;
        border: 1px solid black;
        padding: 10px;
    }

    .table-wrapper {
        max-height: 300px;
        overflow-x: scroll;
    } */
</style> -->