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
            <input type="hidden" name="<?= $csrf_name;?>" value="<?= $csrf_token;?>" style="display: none">
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
                        <div class="col-md-2">
                            <div class="material-selectfield mb-3">
                                <select name="operasi_id" id="operasi_id">
                                    <!-- <select name="" id=""  multiple required> -->
                                    <option value="0">--Pilih operasi---</option>
                                    <?php foreach ($data['getOperasi'] as $key) : ?>
                                        <option value="<?= $key['id'] ?>"><?= $key['name_operation'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <label class="labelmui">Operasi</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="material-selectfield mb-3">
                                <select name="jenis_satker" id="jenis_satker">
                                    <!-- <select name="" id=""  multiple required> -->
                                    <option value="">--Pilih jenis laporan--</option>
                                    <option value="1">Pelanggaran</option>
                                    <option value="2">Kecelakaan</option>
                                    <option value="3">Turjagwali</option>
                                </select>
                                <label class="labelmui">Jenis Laporan</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="material-selectfield mb-3">
                                <select name="jenis_laporan" id="jenis_laporan">
                                    <!-- <select name="" id=""  multiple required> -->
                                    <option value="">-Pilih jenis laporan--</option>
                                </select>
                                <label class="labelmui">Jenis Laporan</label>
                            </div>
                        </div>
                        <div class="col-md-2">
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

<!-- <script>
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
                                <option value="1">Pelanggaran Lalu Lintas</option>
                                <option value="2">Pelanggaran Ranmor Roda 2</option>
                                <option value="3">Pelanggaran Ranmor Roda 4</option>
                                <option value="4">Barang Bukti</option>
                                <option value="5">Kendaraan yang Terlibat</option>
                                <option value="6">Profesi Pelaku</option>
                                <option value="7">Usia Pelaku</option>
                                <option value="8">SIM Pelaku</option>
                                <option value="9">Lokasi Kawasan</option>
                                <option value="10">Lokasi Status Jalan</option>
                                <option value="11">Lokasi Fungsi Jalan</option>
                                <option value="12">Dikmaslantas</option>
                                <option value="13">Penyebaran / Pemasangan</option>
                                <option value="14">Giat Lantas</option>`)
        } else if (jenis_satker == 2) {
            $('#jenis_laporan').append(`<option value="">-Pilih jenis laporan--</option>
                                        <option value="15">Kecelakaan Lalu Lintas</option>
                                        <option value="16">Usia Korban</option>
                                        <option value="17">Pekerjaan Korban</option>
                                        <option value="18">Pendidikan Korban</option>
                                        <option value="19">Usia Pelaku</option>
                                        <option value="20">Pekerjaan Pelaku</option>
                                        <option value="21">Ranmor yang Terlibat</option>`)
        } else if (jenis_satker == 3) {
            $('#jenis_laporan').append(`<option value="">-Pilih jenis laporan--</option>
                                        <option value="22">Turjagwali</option>`)
        } else {
            $('#jenis_laporan').append(`<option value="">-Pilih jenis laporan--</option>`)
        }
    })

    $('#jenis_satker').on('change', function() {
        let jenis_satker = $('#jenis_satker').val()
        $('#jenis_laporan').html('')
        if (jenis_satker == 1) {
            $('#jenis_laporan').append(`<option value="">-Pilih jenis laporan--</option>
                                <option value="1">Pelanggaran Lalu Lintas</option>
                                <option value="2">Pelanggaran Ranmor Roda 2</option>
                                <option value="3">Pelanggaran Ranmor Roda 4</option>
                                <option value="4">Barang Bukti</option>
                                <option value="5">Kendaraan yang Terlibat</option>
                                <option value="6">Profesi Pelaku</option>
                                <option value="7">Usia Pelaku</option>
                                <option value="8">SIM Pelaku</option>
                                <option value="9">Lokasi Kawasan</option>
                                <option value="10">Lokasi Status Jalan</option>
                                <option value="11">Lokasi Fungsi Jalan</option>
                                <option value="12">Dikmaslantas</option>
                                <option value="13">Penyebaran / Pemasangan</option>
                                <option value="14">Giat Lantas</option>`)
        } else if (jenis_satker == 2) {
            $('#jenis_laporan').append(`<option value="">-Pilih jenis laporan--</option>
                                        <option value="15">Kecelakaan Lalu Lintas</option>
                                        <option value="16">Usia Korban</option>
                                        <option value="17">Pekerjaan Korban</option>
                                        <option value="18">Pendidikan Korban</option>
                                        <option value="19">Usia Pelaku</option>
                                        <option value="20">Pekerjaan Pelaku</option>
                                        <option value="21">Ranmor yang Terlibat</option>`)
        } else if (jenis_satker == 3) {
            $('#jenis_laporan').append(`<option value="">-Pilih jenis laporan--</option>
                                        <option value="22">Turjagwali</option>`)
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
                    laporan.push('Statis', 'Mobile', 'Teguran')
                    field_input.push(`<input type="number" name="statis[]" class="form-control" value="0">`, `<input type="number" name="mobile[]" class="form-control" value="0">`, `<input type="number" name="teguran[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 2) {
                    laporan.push('Gun Helm SNI', 'Melawan Arus', 'Bermain HP', 'Terpengaruh Alkohol', 'Batas Kecepatan', 'Dibawah Umur', 'Lain-lain')
                    field_input.push(`<input type="number" name="tanpa_helm[]" class="form-control" value="0">`, `<input type="number" name="lawan_arus[]" class="form-control" value="0">`, `<input type="number" name="bermain_hp[]" class="form-control" value="0">`, `<input type="number" name="pengaruh_alkohol[]" class="form-control" value="0">`, `<input type="number" name="max_kecepatan[]" class="form-control" value="0">`, `<input type="number" name="dibawah_umur[]" class="form-control" value="0">`, `<input type="number" name="lain_lain[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 3) {
                    laporan.push('Melawan Arus', 'Bermain Hp', 'Terpengaruh Alkohol', 'Batas Kecepatan', 'Dibawah Umur', 'Tanpa Safety Belt', 'Lain-lain')
                    field_input.push(`<input type="number" name="lawan_arus[]" class="form-control" value="0">`, `<input type="number" name="guna_hp[]" class="form-control" value="0">`, `<input type="number" name="pengaruh_alkohol[]" class="form-control" value="0">`, `<input type="number" name="max_kecepatan[]" class="form-control" value="0">`, `<input type="number" name="dibawah_umur[]" class="form-control" value="0">`, `<input type="number" name="tanpa_sabuk[]" class="form-control" value="0">`, `<input type="number" name="lain_lain[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 4) {
                    laporan.push('SIM', 'STNK', 'Kendaraan Bermotor')
                    field_input.push(`<input type="number" name="sim[]" class="form-control" value="0">`, `<input type="number" name="stnk[]" class="form-control" value="0">`, `<input type="number" name="kendaraan_bermotor[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 5) {
                    laporan.push('Sepeda Motor', 'Mobil Penumpang', 'Bus', 'Mobil Barang', 'Ransus')
                    field_input.push(`<input type="number" name="sepeda_motor[]" class="form-control" value="0">`, `<input type="number" name="mobil_penumpang[]" class="form-control" value="0">`, `<input type="number" name="bus[]" class="form-control" value="0">`, `<input type="number" name="mobil_barang[]" class="form-control" value="0">`, `<input type="number" name="ransus[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 6) {
                    laporan.push('PNS', 'Karyawan/Swasta', 'Mahasiswa/Pelajar', 'Pengemudi', 'TNI', 'POLRI', 'Lain-lain')
                    field_input.push(`<input type="number" name="pns[]" class="form-control" value="0">`, `<input type="number" name="karyawan[]" class="form-control" value="0">`, `<input type="number" name="mahasiswa_pelajar[]" class="form-control" value="0">`, `<input type="number" name="pengemudi[]" class="form-control" value="0">`, `<input type="number" name="tni[]" class="form-control" value="0">`, `<input type="number" name="polri[]" class="form-control" value="0">`, `<input type="number" name="lain_lain[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 7) {
                    laporan.push('0-15 Tahun', '16-20 Tahun', '21-25 Tahun', '26-30 Tahun', '31-35 Tahun', '36-40 Tahun', '41-45 Tahun', '46-50 Tahun', '50-55 Tahun', '56-60', '> 60 Tahun')
                    field_input.push(`<input type="number" name="max_15[]" class="form-control" value="0">`, `<input type="number" name="max_20[]" class="form-control" value="0">`, `<input type="number" name="max_25[]" class="form-control" value="0">`, `<input type="number" name="max_30[]" class="form-control" value="0">`, `<input type="number" name="max_35[]" class="form-control" value="0">`, `<input type="number" name="max_40[]" class="form-control" value="0">`, `<input type="number" name="max_45[]" class="form-control" value="0">`, `<input type="number" name="max_50[]" class="form-control" value="0">`, `<input type="number" name="max_55[]" class="form-control" value="0">`, `<input type="number" name="max_60[]" class="form-control" value="0">`, `<input type="number" name="lain_lain[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 8) {
                    laporan.push('A', 'A Umum ', 'B I', 'B I Umum', 'B II', 'B II Umum', 'C', 'D', 'SIM Internasional', 'Tanpa SIM')
                    field_input.push(`<input type="number" name="sim_a[]" class="form-control" value="0">`, `<input type="number" name="sim_a_umum[]" class="form-control" value="0">`, `<input type="number" name="sim_b[]" class="form-control" value="0">`, `<input type="number" name="sim_b_satu_umum[]" class="form-control" value="0">`, `<input type="number" name="sim_b_dua_umum[]" class="form-control" value="0">`, `<input type="number" name="sim_c[]" class="form-control" value="0">`, `<input type="number" name="sim_d[]" class="form-control" value="0">`, `<input type="number" name="sim_internasional[]" class="form-control" value="0">`, `<input type="number" name="tanpa_sim[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 9) {
                    laporan.push('Pemukiman', 'Perbelanjaan', 'Perkantoran', 'Wisata', 'Industri')
                    field_input.push(`<input type="number" name="pemukiman[]" class="form-control" value="0">`, `<input type="number" name="perbelanjaan[]" class="form-control" value="0">`, `<input type="number" name="perkantoran[]" class="form-control" value="0">`, `<input type="number" name="wisata[]" class="form-control" value="0">`, `<input type="number" name="industri[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 10) {
                    laporan.push('Nasional', 'Provinsi', 'Kabupaten/Kota', 'Desa/Lingkungan')
                    field_input.push(`<input type="number" name="nasional[]" class="form-control" value="0">`, `<input type="number" name="provinsi[]" class="form-control" value="0">`, `<input type="number" name="kab_kota[]" class="form-control" value="0">`, `<input type="number" name="desa_lingkungan[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 11) {
                    laporan.push('Arteri', 'Kolektor', 'Lokal', 'Lingkungan')
                    field_input.push(`<input type="number" name="arteri[]" class="form-control" value="0">`, `<input type="number" name="kolektor[]" class="form-control" value="0">`, `<input type="number" name="lokal[]" class="form-control" value="0">`, `<input type="number" name="lingkungan[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 12) {
                    laporan.push('Media Cetak', 'Media Elektronik', 'Media Sosial', 'Daerah Laka & Langgar')
                    field_input.push(`<input type="number" name="media_cetak[]" class="form-control" value="0">`, `<input type="number" name="media_elektronik[]" class="form-control" value="0">`, `<input type="number" name="media_sosial[]" class="form-control" value="0">`, `<input type="number" name="laka_langgar[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 13) {
                    laporan.push('Spanduk', 'Leaflet', 'Sticker', 'Bilboard')
                    field_input.push(`<input type="number" name="spanduk[]" class="form-control" value="0">`, `<input type="number" name="leaflet[]" class="form-control" value="0">`, `<input type="number" name="stiker[]" class="form-control" value="0">`, `<input type="number" name="billboard[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 14) {
                    laporan.push('Pengaturan', 'Penjagaan', 'Pengawalan', 'Patroli')
                    field_input.push(`<input type="number" name="pengaturan[]" class="form-control" value="0">`, `<input type="number" name="penjagaan[]" class="form-control" value="0">`, `<input type="number" name="pengawalan[]" class="form-control" value="0">`, `<input type="number" name="patroli[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 15) {
                    laporan.push('Meninggal Dunia', 'Luka Berat', 'Luka Ringan', 'Kerugian Material')
                    field_input.push(`<input type="number" name="meninggal_dunia[]" class="form-control" value="0">`, `<input type="number" name="luka_berat[]" class="form-control" value="0">`, `<input type="number" name="luka_ringan[]" class="form-control" value="0">`, `<input type="number" name="kerugian_material[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 16) {
                    laporan.push('0-4 Tahun', '5-9 Tahun', '10-14 Tahun', '15-19 Tahun', '20-24 Tahun', '25-29 Tahun', '30-34 Tahun', '35-39 Tahun', '40-44 Tahun', '45-49 Tahun', '50-54 Tahun', '55-59 Tahun', '> 60 Tahun')
                    field_input.push(`<input type="number" name="max_4[]" class="form-control" value="0">`, `<input type="number" name="max_9[]" class="form-control" value="0">`, `<input type="number" name="max_14[]" class="form-control" value="0">`, `<input type="number" name="max_19[]" class="form-control" value="0">`, `<input type="number" name="max_24[]" class="form-control" value="0">`, `<input type="number" name="max_29[]" class="form-control" value="0">`, `<input type="number" name="max_34[]" class="form-control" value="0">`, `<input type="number" name="max_39[]" class="form-control" value="0">`, `<input type="number" name="max_44[]" class="form-control" value="0">`, `<input type="number" name="max_49[]" class="form-control" value="0">`, `<input type="number" name="max_54[]" class="form-control" value="0">`, `<input type="number" name="max_59[]" class="form-control" value="0">`, `<input type="number" name="lain_lain[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 17) {
                    laporan.push('PNS', 'Karyawan/Swasta', 'Mahasiswa/Pelajar', 'Pengemudi', 'TNI', 'POLRI', 'Lain-lain')
                    field_input.push(`<input type="number" name="pns[]" class="form-control" value="0">`, `<input type="number" name="karyawan[]" class="form-control" value="0">`, `<input type="number" name="mahasiswa[]" class="form-control" value="0">`, `<input type="number" name="pengemudi[]" class="form-control" value="0">`, `<input type="number" name="tni[]" class="form-control" value="0">`, `<input type="number" name="polri[]" class="form-control" value="0">`, `<input type="number" name="lain_lain[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 18) {
                    laporan.push('SD/Sederajat', 'SLTP/Sederajat', 'SLTA/Sederajat', 'D3', 'S1', 'S2', 'Data Tidak Diketahui')
                    field_input.push(`<input type="number" name="sd[]" class="form-control" value="0">`, `<input type="number" name="sltp[]" class="form-control" value="0">`, `<input type="number" name="slta[]" class="form-control" value="0">`, `<input type="number" name="d3[]" class="form-control" value="0">`, `<input type="number" name="s1[]" class="form-control" value="0">`, `<input type="number" name="s2[]" class="form-control" value="0">`, `<input type="number" name="tidak_diketahui[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 19) {
                    laporan.push('< 14 Tahun', '15-16 Tahun', '17-21 Tahun', '22-29 Tahun', '30-39 Tahun', '40-49 Tahun', '50-59 Tahun', '> 60 Tahun', 'Data Tidak Diketahui')
                    field_input.push(`<input type="number" name="min_14[]" class="form-control" value="0">`, `<input type="number" name="max_16[]" class="form-control" value="0">`, `<input type="number" name="max_21[]" class="form-control" value="0">`, `<input type="number" name="max_29[]" class="form-control" value="0">`, `<input type="number" name="max_39[]" class="form-control" value="0">`, `<input type="number" name="max_49[]" class="form-control" value="0">`, `<input type="number" name="max_59[]" class="form-control" value="0">`, `<input type="number" name="max_60[]" class="form-control" value="0">`, `<input type="number" name="tidak_diketahui[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 20) {
                    laporan.push('PNS', 'Karyawan/Swasta', 'Mahasiswa/Pelajar', 'Pengemudi', 'TNI', 'POLRI', 'Lain-lain')
                    field_input.push(`<input type="number" name="pns[]" class="form-control" value="0">`, `<input type="number" name="karyawan[]" class="form-control" value="0">`, `<input type="number" name="mahasiswa[]" class="form-control" value="0">`, `<input type="number" name="pengemudi[]" class="form-control" value="0">`, `<input type="number" name="tni[]" class="form-control" value="0">`, `<input type="number" name="polri[]" class="form-control" value="0">`, `<input type="number" name="lain_lain[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 21) {
                    laporan.push('Sepeda Motor', 'Mobil Penumpang', 'Bus', 'Mobil Barang', 'Ransus')
                    field_input.push(`<input type="number" name="sepeda_motor[]" class="form-control" value="0">`, `<input type="number" name="mobil_penumpang[]" class="form-control" value="0">`, `<input type="number" name="bus[]" class="form-control" value="0">`, `<input type="number" name="mobil_barang[]" class="form-control" value="0">`, `<input type="number" name="ransus[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 22) {
                    laporan.push('Penjagaan', 'Pengawalan', 'Patroli', 'Pengaturan')
                    field_input.push(`<input type="number" name="penjagaan[]" class="form-control" value="0">`, `<input type="number" name="pengawalan[]" class="form-control" value="0">`, `<input type="number" name="patroli[]" class="form-control" value="0">`, `<input type="number" name="pengaturan[]" class="form-control" value="0">`)
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
            url: "<?= base_url() ?>inputdata/LaporanOperasiKhusus/storeData",
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
                                <option value="1">Pelanggaran Lalu Lintas</option>
                                <option value="2">Pelanggaran Ranmor Roda 2</option>
                                <option value="3">Pelanggaran Ranmor Roda 4</option>
                                <option value="4">Barang Bukti</option>
                                <option value="5">Kendaraan yang Terlibat</option>
                                <option value="6">Profesi Pelaku</option>
                                <option value="7">Usia Pelaku</option>
                                <option value="8">SIM Pelaku</option>
                                <option value="9">Lokasi Kawasan</option>
                                <option value="10">Lokasi Status Jalan</option>
                                <option value="11">Lokasi Fungsi Jalan</option>
                                <option value="12">Dikmaslantas</option>
                                <option value="13">Penyebaran / Pemasangan</option>
                                <option value="14">Giat Lantas</option>`)
        } else if (jenis_satker == 2) {
            $('#jenis_laporan').append(`<option value="">-Pilih jenis laporan--</option>
                                        <option value="15">Kecelakaan Lalu Lintas</option>
                                        <option value="16">Usia Korban</option>
                                        <option value="17">Pekerjaan Korban</option>
                                        <option value="18">Pendidikan Korban</option>
                                        <option value="19">Usia Pelaku</option>
                                        <option value="20">Pekerjaan Pelaku</option>
                                        <option value="21">Ranmor yang Terlibat</option>`)
        } else if (jenis_satker == 3) {
            $('#jenis_laporan').append(`<option value="">-Pilih jenis laporan--</option>
                                        <option value="22">Turjagwali</option>`)
        } else {
            $('#jenis_laporan').append(`<option value="">-Pilih jenis laporan--</option>`)
        }
    })

    $('#jenis_satker').on('change', function() {
        let jenis_satker = $('#jenis_satker').val()
        $('#jenis_laporan').html('')
        if (jenis_satker == 1) {
            $('#jenis_laporan').append(`<option value="">-Pilih jenis laporan--</option>
                                <option value="1">Pelanggaran Lalu Lintas</option>
                                <option value="2">Pelanggaran Ranmor Roda 2</option>
                                <option value="3">Pelanggaran Ranmor Roda 4</option>
                                <option value="4">Barang Bukti</option>
                                <option value="5">Kendaraan yang Terlibat</option>
                                <option value="6">Profesi Pelaku</option>
                                <option value="7">Usia Pelaku</option>
                                <option value="8">SIM Pelaku</option>
                                <option value="9">Lokasi Kawasan</option>
                                <option value="10">Lokasi Status Jalan</option>
                                <option value="11">Lokasi Fungsi Jalan</option>
                                <option value="12">Dikmaslantas</option>
                                <option value="13">Penyebaran / Pemasangan</option>
                                <option value="14">Giat Lantas</option>`)
        } else if (jenis_satker == 2) {
            $('#jenis_laporan').append(`<option value="">-Pilih jenis laporan--</option>
                                        <option value="15">Kecelakaan Lalu Lintas</option>
                                        <option value="16">Usia Korban</option>
                                        <option value="17">Pekerjaan Korban</option>
                                        <option value="18">Pendidikan Korban</option>
                                        <option value="19">Usia Pelaku</option>
                                        <option value="20">Pekerjaan Pelaku</option>
                                        <option value="21">Ranmor yang Terlibat</option>`)
        } else if (jenis_satker == 3) {
            $('#jenis_laporan').append(`<option value="">-Pilih jenis laporan--</option>
                                        <option value="22">Turjagwali</option>`)
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
                    laporan.push('Statis', 'Mobile', 'Teguran')
                    field_input.push(`<input type="number" name="statis[]" class="form-control" value="0">`, `<input type="number" name="mobile[]" class="form-control" value="0">`, `<input type="number" name="teguran[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 2) {
                    laporan.push('Gun Helm SNI', 'Melawan Arus', 'Bermain HP', 'Terpengaruh Alkohol', 'Batas Kecepatan', 'Dibawah Umur', 'Lain-lain')
                    field_input.push(`<input type="number" name="tanpa_helm[]" class="form-control" value="0">`, `<input type="number" name="lawan_arus[]" class="form-control" value="0">`, `<input type="number" name="bermain_hp[]" class="form-control" value="0">`, `<input type="number" name="pengaruh_alkohol[]" class="form-control" value="0">`, `<input type="number" name="max_kecepatan[]" class="form-control" value="0">`, `<input type="number" name="dibawah_umur[]" class="form-control" value="0">`, `<input type="number" name="lain_lain[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 3) {
                    laporan.push('Melawan Arus', 'Bermain Hp', 'Terpengaruh Alkohol', 'Batas Kecepatan', 'Dibawah Umur', 'Tanpa Safety Belt', 'Lain-lain')
                    field_input.push(`<input type="number" name="lawan_arus[]" class="form-control" value="0">`, `<input type="number" name="guna_hp[]" class="form-control" value="0">`, `<input type="number" name="pengaruh_alkohol[]" class="form-control" value="0">`, `<input type="number" name="max_kecepatan[]" class="form-control" value="0">`, `<input type="number" name="dibawah_umur[]" class="form-control" value="0">`, `<input type="number" name="tanpa_sabuk[]" class="form-control" value="0">`, `<input type="number" name="lain_lain[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 4) {
                    laporan.push('SIM', 'STNK', 'Kendaraan Bermotor')
                    field_input.push(`<input type="number" name="sim[]" class="form-control" value="0">`, `<input type="number" name="stnk[]" class="form-control" value="0">`, `<input type="number" name="kendaraan_bermotor[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 5) {
                    laporan.push('Sepeda Motor', 'Mobil Penumpang', 'Bus', 'Mobil Barang', 'Ransus')
                    field_input.push(`<input type="number" name="sepeda_motor[]" class="form-control" value="0">`, `<input type="number" name="mobil_penumpang[]" class="form-control" value="0">`, `<input type="number" name="bus[]" class="form-control" value="0">`, `<input type="number" name="mobil_barang[]" class="form-control" value="0">`, `<input type="number" name="ransus[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 6) {
                    laporan.push('PNS', 'Karyawan/Swasta', 'Mahasiswa/Pelajar', 'Pengemudi', 'TNI', 'POLRI', 'Lain-lain')
                    field_input.push(`<input type="number" name="pns[]" class="form-control" value="0">`, `<input type="number" name="karyawan[]" class="form-control" value="0">`, `<input type="number" name="mahasiswa_pelajar[]" class="form-control" value="0">`, `<input type="number" name="pengemudi[]" class="form-control" value="0">`, `<input type="number" name="tni[]" class="form-control" value="0">`, `<input type="number" name="polri[]" class="form-control" value="0">`, `<input type="number" name="lain_lain[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 7) {
                    laporan.push('0-15 Tahun', '16-20 Tahun', '21-25 Tahun', '26-30 Tahun', '31-35 Tahun', '36-40 Tahun', '41-45 Tahun', '46-50 Tahun', '50-55 Tahun', '56-60', '> 60 Tahun')
                    field_input.push(`<input type="number" name="max_15[]" class="form-control" value="0">`, `<input type="number" name="max_20[]" class="form-control" value="0">`, `<input type="number" name="max_25[]" class="form-control" value="0">`, `<input type="number" name="max_30[]" class="form-control" value="0">`, `<input type="number" name="max_35[]" class="form-control" value="0">`, `<input type="number" name="max_40[]" class="form-control" value="0">`, `<input type="number" name="max_45[]" class="form-control" value="0">`, `<input type="number" name="max_50[]" class="form-control" value="0">`, `<input type="number" name="max_55[]" class="form-control" value="0">`, `<input type="number" name="max_60[]" class="form-control" value="0">`, `<input type="number" name="lain_lain[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 8) {
                    laporan.push('A', 'A Umum ', 'B I', 'B I Umum', 'B II', 'B II Umum', 'C', 'D', 'SIM Internasional', 'Tanpa SIM')
                    field_input.push(`<input type="number" name="sim_a[]" class="form-control" value="0">`, `<input type="number" name="sim_a_umum[]" class="form-control" value="0">`, `<input type="number" name="sim_b[]" class="form-control" value="0">`, `<input type="number" name="sim_b_satu_umum[]" class="form-control" value="0">`, `<input type="number" name="sim_b_dua_umum[]" class="form-control" value="0">`, `<input type="number" name="sim_c[]" class="form-control" value="0">`, `<input type="number" name="sim_d[]" class="form-control" value="0">`, `<input type="number" name="sim_internasional[]" class="form-control" value="0">`, `<input type="number" name="tanpa_sim[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 9) {
                    laporan.push('Pemukiman', 'Perbelanjaan', 'Perkantoran', 'Wisata', 'Industri')
                    field_input.push(`<input type="number" name="pemukiman[]" class="form-control" value="0">`, `<input type="number" name="perbelanjaan[]" class="form-control" value="0">`, `<input type="number" name="perkantoran[]" class="form-control" value="0">`, `<input type="number" name="wisata[]" class="form-control" value="0">`, `<input type="number" name="industri[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 10) {
                    laporan.push('Nasional', 'Provinsi', 'Kabupaten/Kota', 'Desa/Lingkungan')
                    field_input.push(`<input type="number" name="nasional[]" class="form-control" value="0">`, `<input type="number" name="provinsi[]" class="form-control" value="0">`, `<input type="number" name="kab_kota[]" class="form-control" value="0">`, `<input type="number" name="desa_lingkungan[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 11) {
                    laporan.push('Arteri', 'Kolektor', 'Lokal', 'Lingkungan')
                    field_input.push(`<input type="number" name="arteri[]" class="form-control" value="0">`, `<input type="number" name="kolektor[]" class="form-control" value="0">`, `<input type="number" name="lokal[]" class="form-control" value="0">`, `<input type="number" name="lingkungan[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 12) {
                    laporan.push('Media Cetak', 'Media Elektronik', 'Media Sosial', 'Daerah Laka & Langgar')
                    field_input.push(`<input type="number" name="media_cetak[]" class="form-control" value="0">`, `<input type="number" name="media_elektronik[]" class="form-control" value="0">`, `<input type="number" name="media_sosial[]" class="form-control" value="0">`, `<input type="number" name="laka_langgar[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 13) {
                    laporan.push('Spanduk', 'Leaflet', 'Sticker', 'Bilboard')
                    field_input.push(`<input type="number" name="spanduk[]" class="form-control" value="0">`, `<input type="number" name="leaflet[]" class="form-control" value="0">`, `<input type="number" name="stiker[]" class="form-control" value="0">`, `<input type="number" name="billboard[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 14) {
                    laporan.push('Pengaturan', 'Penjagaan', 'Pengawalan', 'Patroli')
                    field_input.push(`<input type="number" name="pengaturan[]" class="form-control" value="0">`, `<input type="number" name="penjagaan[]" class="form-control" value="0">`, `<input type="number" name="pengawalan[]" class="form-control" value="0">`, `<input type="number" name="patroli[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 15) {
                    laporan.push('Meninggal Dunia', 'Luka Berat', 'Luka Ringan', 'Kerugian Material')
                    field_input.push(`<input type="number" name="meninggal_dunia[]" class="form-control" value="0">`, `<input type="number" name="luka_berat[]" class="form-control" value="0">`, `<input type="number" name="luka_ringan[]" class="form-control" value="0">`, `<input type="number" name="kerugian_material[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 16) {
                    laporan.push('0-4 Tahun', '5-9 Tahun', '10-14 Tahun', '15-19 Tahun', '20-24 Tahun', '25-29 Tahun', '30-34 Tahun', '35-39 Tahun', '40-44 Tahun', '45-49 Tahun', '50-54 Tahun', '55-59 Tahun', '> 60 Tahun')
                    field_input.push(`<input type="number" name="max_4[]" class="form-control" value="0">`, `<input type="number" name="max_9[]" class="form-control" value="0">`, `<input type="number" name="max_14[]" class="form-control" value="0">`, `<input type="number" name="max_19[]" class="form-control" value="0">`, `<input type="number" name="max_24[]" class="form-control" value="0">`, `<input type="number" name="max_29[]" class="form-control" value="0">`, `<input type="number" name="max_34[]" class="form-control" value="0">`, `<input type="number" name="max_39[]" class="form-control" value="0">`, `<input type="number" name="max_44[]" class="form-control" value="0">`, `<input type="number" name="max_49[]" class="form-control" value="0">`, `<input type="number" name="max_54[]" class="form-control" value="0">`, `<input type="number" name="max_59[]" class="form-control" value="0">`, `<input type="number" name="lain_lain[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 17) {
                    laporan.push('PNS', 'Karyawan/Swasta', 'Mahasiswa/Pelajar', 'Pengemudi', 'TNI', 'POLRI', 'Lain-lain')
                    field_input.push(`<input type="number" name="pns[]" class="form-control" value="0">`, `<input type="number" name="karyawan[]" class="form-control" value="0">`, `<input type="number" name="mahasiswa[]" class="form-control" value="0">`, `<input type="number" name="pengemudi[]" class="form-control" value="0">`, `<input type="number" name="tni[]" class="form-control" value="0">`, `<input type="number" name="polri[]" class="form-control" value="0">`, `<input type="number" name="lain_lain[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 18) {
                    laporan.push('SD/Sederajat', 'SLTP/Sederajat', 'SLTA/Sederajat', 'D3', 'S1', 'S2', 'Data Tidak Diketahui')
                    field_input.push(`<input type="number" name="sd[]" class="form-control" value="0">`, `<input type="number" name="sltp[]" class="form-control" value="0">`, `<input type="number" name="slta[]" class="form-control" value="0">`, `<input type="number" name="d3[]" class="form-control" value="0">`, `<input type="number" name="s1[]" class="form-control" value="0">`, `<input type="number" name="s2[]" class="form-control" value="0">`, `<input type="number" name="tidak_diketahui[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 19) {
                    laporan.push('< 14 Tahun', '15-16 Tahun', '17-21 Tahun', '22-29 Tahun', '30-39 Tahun', '40-49 Tahun', '50-59 Tahun', '> 60 Tahun', 'Data Tidak Diketahui')
                    field_input.push(`<input type="number" name="min_14[]" class="form-control" value="0">`, `<input type="number" name="max_16[]" class="form-control" value="0">`, `<input type="number" name="max_21[]" class="form-control" value="0">`, `<input type="number" name="max_29[]" class="form-control" value="0">`, `<input type="number" name="max_39[]" class="form-control" value="0">`, `<input type="number" name="max_49[]" class="form-control" value="0">`, `<input type="number" name="max_59[]" class="form-control" value="0">`, `<input type="number" name="max_60[]" class="form-control" value="0">`, `<input type="number" name="tidak_diketahui[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 20) {
                    laporan.push('PNS', 'Karyawan/Swasta', 'Mahasiswa/Pelajar', 'Pengemudi', 'TNI', 'POLRI', 'Lain-lain')
                    field_input.push(`<input type="number" name="pns[]" class="form-control" value="0">`, `<input type="number" name="karyawan[]" class="form-control" value="0">`, `<input type="number" name="mahasiswa[]" class="form-control" value="0">`, `<input type="number" name="pengemudi[]" class="form-control" value="0">`, `<input type="number" name="tni[]" class="form-control" value="0">`, `<input type="number" name="polri[]" class="form-control" value="0">`, `<input type="number" name="lain_lain[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 21) {
                    laporan.push('Sepeda Motor', 'Mobil Penumpang', 'Bus', 'Mobil Barang', 'Ransus')
                    field_input.push(`<input type="number" name="sepeda_motor[]" class="form-control" value="0">`, `<input type="number" name="mobil_penumpang[]" class="form-control" value="0">`, `<input type="number" name="bus[]" class="form-control" value="0">`, `<input type="number" name="mobil_barang[]" class="form-control" value="0">`, `<input type="number" name="ransus[]" class="form-control" value="0">`)
                } else if (jenis_laporan == 22) {
                    laporan.push('Penjagaan', 'Pengawalan', 'Patroli', 'Pengaturan')
                    field_input.push(`<input type="number" name="penjagaan[]" class="form-control" value="0">`, `<input type="number" name="pengawalan[]" class="form-control" value="0">`, `<input type="number" name="patroli[]" class="form-control" value="0">`, `<input type="number" name="pengaturan[]" class="form-control" value="0">`)
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
            url: "<?= base_url() ?>inputdata/LaporanOperasiKhusus/storeData",
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
