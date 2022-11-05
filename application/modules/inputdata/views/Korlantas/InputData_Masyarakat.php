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
                                    <option value="">--Pilih jenis kegiatan--</option>
                                    <option value="1">Kesehatan Masyarakat</option>
                                </select>
                                <label class="labelmui">Jenis Kegiatan</label>
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
<!-- 
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

    $('#jenis_satker').on('change', function() {
        let jenis_satker = $('#jenis_satker').val()
        $('#jenis_laporan').html('')
        if (jenis_satker == 1) {
            $('#jenis_laporan').append(`<option value="">-Pilih jenis laporan--</option>
                                <option value="1">Giat Protokol Kesehatan</option>
                                `)
        } else {
            $('#jenis_laporan').append(`<option value="">-Pilih jenis laporan--</option>`)
        }
    })


    $('#btn_pilih').on('click', function() {
        $.ajax({
            url: '<?= base_url() ?>inputdata/LaporanHarian/getPolres',
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
                    laporan.push('Tegur Prokes', 'Pembagian Masker', 'Sosialisasi Prokes', 'Giat Baksos')
                    field_input.push(`<input type="number" name="tegur_prokes[]" class="form-control" value="0">`, `<input type="number" name="masker[]" class="form-control" value="0">`, `<input type="number" name="sosial_prokes[]" class="form-control" value="0">`, `<input type="number" name="baksos[]" class="form-control" value="0">`)
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
                        <td><input type="hidden" name="polres_id[]" value="${element.id}">${element.name_polres}</td>
                        ${inputs}
                    </tr>`
                });

                let coloumn = ''
                laporan.forEach((element, index) => {
                    coloumn += `<th>${element}</th>`
                })

                let master_tb = `
                <table id="datatable" class="table table-bordered dt-responsive w-100">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>No</th>
                        <th>Polres</th>
                        ${coloumn}
                    </tr>
                </thead>
                <tbody id="maintablebody">
                    ${body}
                <tbody>
                </table>
                `
                $('.isiRow').html(master_tb)
            }
        })
    })


    $('#btn_submit').on('click', function(e) {
        e.preventDefault();
        const formData = new FormData($('#form-dataharian')[0]);

        $.ajax({
            url: "<?= base_url() ?>inputdata/LaporanMasyarakat/storePolda",
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
</script> -->


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

    $('#jenis_satker').on('change', function() {
        let jenis_satker = $('#jenis_satker').val()
        $('#jenis_laporan').html('')
        if (jenis_satker == 1) {
            $('#jenis_laporan').append(`<option value="">-Pilih jenis laporan--</option>
                                <option value="1">Giat Protokol Kesehatan</option>
                                `)
        } else {
            $('#jenis_laporan').append(`<option value="">-Pilih jenis laporan--</option>`)
        }
    })


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
                    laporan.push('Tegur Prokes', 'Pembagian Masker', 'Sosialisasi Prokes', 'Giat Baksos')
                    field_input.push(`<input type="number" name="tegur_prokes[]" class="form-control" value="0">`, `<input type="number" name="masker[]" class="form-control" value="0">`, `<input type="number" name="sosial_prokes[]" class="form-control" value="0">`, `<input type="number" name="baksos[]" class="form-control" value="0">`)
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

                let master_tb = `
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
                $('.isiRow').html(master_tb)
            }
        })
    })


    $('#btn_submit').on('click', function(e) {
        e.preventDefault();
        const formData = new FormData($('#form-dataharian')[0]);

        $.ajax({
            url: "<?= base_url() ?>inputdata/LaporanMasyarakat/storePolda",
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
