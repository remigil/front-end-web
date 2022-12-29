<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 align-self-center">
            <div id="nama">
                <div style="display: flex;">
                    <h3><a href="<?= base_url('dashboard') ?>" style="color:#007DD8 ;"><i class="fas fa-less-than"></i>|</a></h3>
                    &nbsp;&nbsp; <h3 style="text-transform: uppercase; color:#007DD8;">Bagian Operasi</h3>

                </div>
            </div>
            <p>Today is <?= date('l, j F Y') ?></p>
        </div>
        <?php $mobile = detect_mobile();
        if ($mobile === true) { ?>
            <!-- <div class="col-md-12" style="margin-left: -15px;">
                <button type="button" class="btn btn-primary ms-3" style=" border: 0.5px solid #0275d8; height:-20px" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <iconify-icon icon="mdi:file-document-multiple"></iconify-icon>
                </button>
                <a href="http://34.143.227.90:3001/v1/laporan_harian/export_laphar" class="text-center"><button class="btn btn-outline-primary" style="width: 200px; border-color:#007DD8;">Export Laporan</button></a>
            </div> -->
        <?php } else { ?>
            <!-- <div class="col-md-1 text-end align-self-center">
                <button type="button" class="btn btn-primary ms-3" style=" border: 0.5px solid #0275d8; height:-20px" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <iconify-icon icon="mdi:file-document-multiple"></iconify-icon>
                </button>
            </div>
            <div class="col-md-3 text-end align-self-center">
                <a href="http://34.143.227.90:3001/v1/laporan_harian/export_laphar" class="text-center"><button class="btn btn-outline-primary" style="width: 200px; border-color:#007DD8;">Export Laporan</button></a>
            </div> -->
        <?php } ?>
    </div>


</div>

<div class="container-fluid">
    <div class="row mb-3">
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Pilih Operasi</label>
                <select class="form-control form-select" name="operasi_id" id="operasi_id">
                    <?php foreach ($data['getOperasi'] as $key) : ?>
                        <option value="<?= $key['id'] ?>"><?= $key['name_operation'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center m-3 fw-bold" id="titleoperasi" style="text-transform:uppercase; text-decoration: underline;"></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-headline">
                <div class="card-body row">
                    <h2 class="text-center">GIAT DIKMASLANTAS (PREEMTIVE) DAN GIAT PREVENTIF</h2>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <h5 class="text-center">Penluh</h5>
                            <div id="chart1"></div>
                        </div>
                        <div class="col-md-4">
                            <h5 class="text-center">Penyebaran Pemasangan</h5>
                            <div id="chart2"></div>
                        </div>
                        <div class="col-md-4">
                            <h5 class="text-center">Turjagwali</h5>
                            <div id="chart3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-headline">
                <div class="card-body row">
                    <h2 class="text-center">GIAT GAKKUM LANTAS (PELANGGARAN)</h2>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="text-center">Penindakan Pelanggaran Lalu Lintas</h3>
                            <div id="chart4"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <h3 class="text-center">Jenis Pelanggaran Lalu Lintas</h3>
                        <div class="col-md-6">
                            <h5 class="text-center">Kendaraan Roda 2</h5>
                            <div id="chart5"></div>
                        </div>
                        <div class="col-md-6">
                            <h5 class="text-center">Kendaraan Roda 4</h5>
                            <div id="chart6"></div>
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <h5 class="text-center">Barang Bukti yang disita</h5>
                            <div id="chart7"></div>
                        </div>
                        <div class="col-md-6">
                            <h5 class="text-center">Ranmor Yang Terlibat Pelanggaran</h5>
                            <div id="chart8"></div>
                        </div>
                        <div class="col-md-3">
                            <h5 class="text-center">Profesi Pelaku Pelanggaran</h5>
                            <div id="chart9"></div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="text-center">Usia Pelaku Pelanggaran</h5>
                            <div id="chart10"></div>
                        </div>
                        <div class="col-md-6">
                            <h5 class="text-center">Golongan SIM Pelaku Pelanggaran</h5>
                            <div id="chart11"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <h3 class="text-center">Lokasi Pelanggaran Lalu Lintas</h3>
                        <div class="col-md-4">
                            <h5 class="text-center">Berdasarkan Kawasan</h5>
                            <div id="chart12"></div>
                        </div>
                        <div class="col-md-4">
                            <h5 class="text-center">Berdasarkan Status Jalan</h5>
                            <div id="chart13"></div>
                        </div>
                        <div class="col-md-4">
                            <h5 class="text-center">Berdasarkan Fungsi Jalan</h5>
                            <div id="chart14"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-headline">
                <div class="card-body row">
                    <h2 class="text-center">GIAT GAKKUM LANTAS (KECELAKAAN)</h2>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-15">
                            <h5 class="text-center">Jumlah Kecelakaan</h5>
                            <div id="chart15"></div>
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <h5 class="text-center">Usia Korban</h5>
                            <div id="chart16"></div>
                        </div>
                        <div class="col-md-4">
                            <h5 class="text-center">Pekerjaan Korban</h5>
                            <div id="chart17"></div>
                        </div>
                        <div class="col-md-4">
                            <h5 class="text-center">Pendidikan Korban</h5>
                            <div id="chart18"></div>
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <h5 class="text-center">Usia Pelaku</h5>
                            <div id="chart19"></div>
                        </div>
                        <div class="col-md-4">
                            <h5 class="text-center">Pekerjaan Pelaku</h5>
                            <div id="chart20"></div>
                        </div>
                        <div class="col-md-4">
                            <h5 class="text-center">Jenis Ranmor Yang Digunakan</h5>
                            <div id="chart21"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="row">
        <div class="card">
            <h3>GIAT DIKMASLANTAS (PRE-EMTIF)</h3>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card-header">
                            <div id="title">PENLUH</div>
                        </div>
                        <div class="card-body">

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-header">
                            <div id="title">PENYEBARAN / PEMASANGAN</div>
                        </div>
                        <div class="card-body">

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div> -->
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-uppercase" id="exampleModalLabel">Struktur Organisasi <?= $title; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <center>
                    <img src="<?= base_url('assets/fe/strukturorganisasi/strukturbagops.png'); ?>" alt="" srcset="">
                </center>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.36.3/apexcharts.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        let operation_id = $('#operasi_id').val()
        $('#titleoperasi').text($('#operasi_id').text())
        getPenluh(operation_id)
        getPenyebaran(operation_id)
        getTurjagwali(operation_id)
        getPelanggaran(operation_id)
        getPelanggaranMotor(operation_id)
        getPelanggaranMobil(operation_id)
        getBukti(operation_id)
        getRanmor(operation_id)
        getProfesi(operation_id)
        getUsia(operation_id)
        getSim(operation_id)
        getFungsiJalan(operation_id)
        getKawasanJalan(operation_id)
        getStatusJalan(operation_id)
        getKecelakaan(operation_id)
        getUsiaKorban(operation_id)
        getPekerjaanKorban(operation_id);
        getPendidikanKorban(operation_id)
        getUsiaPelaku(operation_id)
        getPekerjaanPelaku(operation_id);
        getRanmorPelaku(operation_id)
    })


    $('#operasi_id').on('change', function() {
        $('#titleoperasi').text($('#operasi_id option:selected').text())
        let operation_id = $('#operasi_id').val()
        getPenluh(operation_id)
        getPenyebaran(operation_id)
        getTurjagwali(operation_id)
        getPelanggaran(operation_id)
        getPelanggaranMotor(operation_id)
        getPelanggaranMobil(operation_id)
        getBukti(operation_id)
        getRanmor(operation_id)
        getProfesi(operation_id)
        getUsia(operation_id)
        getSim(operation_id)
        getFungsiJalan(operation_id)
        getKawasanJalan(operation_id)
        getStatusJalan(operation_id)
        getKecelakaan(operation_id)
        getUsiaKorban(operation_id)
        getPekerjaanKorban(operation_id);
        getPendidikanKorban(operation_id)
        getUsiaPelaku(operation_id)
        getPekerjaanPelaku(operation_id);
        getRanmorPelaku(operation_id)
    })


    function getUsiaPelaku(operation_id) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>bagops/getUsiaPelaku",
            dataType: "JSON",
            data: {
                operasi_id: operation_id
            },
            success: function(results) {
                $("#chart19").html(`<div id="usiapelakuchart"></div>`);
                var options_usiapelaku = {
                    series: results.jumlah,
                    chart: {
                        height: 380,
                        type: 'pie',
                    },
                    labels: results.type,
                    responsive: [{
                        breakpoint: 480,
                        options: {
                            chart: {
                                width: 200
                            },
                            legend: {
                                position: 'bottom'
                            }
                        }
                    }],
                };

                var usiapelaku = new ApexCharts(document.querySelector("#usiapelakuchart"), options_usiapelaku);
                usiapelaku.render();
            }
        })
    }

    function getPekerjaanPelaku(operation_id) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>bagops/getPekerjaanPelaku",
            dataType: "JSON",
            data: {
                operasi_id: operation_id
            },
            success: function(results) {
                $("#chart20").html(`<div id="pekerjaanpelakuchart"></div>`);
                var options_pekerjaanpelaku = {
                    series: results.jumlah,
                    chart: {
                        height: 380,
                        type: 'pie',
                    },
                    labels: results.type,
                    responsive: [{
                        breakpoint: 480,
                        options: {
                            chart: {
                                width: 200
                            },
                            legend: {
                                position: 'bottom'
                            }
                        }
                    }],
                };

                var pekerjaanpelaku = new ApexCharts(document.querySelector("#pekerjaanpelakuchart"), options_pekerjaanpelaku);
                pekerjaanpelaku.render();
            }
        })
    }

    function getRanmorPelaku(operation_id) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>bagops/getRanmorPelaku",
            dataType: "JSON",
            data: {
                operasi_id: operation_id
            },
            success: function(results) {
                $("#chart21").html(`<div id="ranmorpelakuchart"></div>`);
                var options_ranmorpelaku = {
                    series: results.jumlah,
                    chart: {
                        height: 380,
                        type: 'pie',
                    },
                    labels: results.type,
                    responsive: [{
                        breakpoint: 480,
                        options: {
                            chart: {
                                width: 200
                            },
                            legend: {
                                position: 'bottom'
                            }
                        }
                    }],
                };

                var ranmorpelaku = new ApexCharts(document.querySelector("#ranmorpelakuchart"), options_ranmorpelaku);
                ranmorpelaku.render();
            }
        })
    }

    function getUsiaKorban(operation_id) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>bagops/getUsiaKorban",
            dataType: "JSON",
            data: {
                operasi_id: operation_id
            },
            success: function(results) {
                $("#chart16").html(`<div id="usiakorbanchart"></div>`);
                var options_usiakorban = {
                    series: [{
                        name: 'Jumlah usiakorban',
                        data: results.jumlah,
                        color: "#bf1b49",
                    }],
                    chart: {
                        type: 'bar',
                        height: 380
                    },
                    tooltip: {
                        fixed: {
                            enabled: true
                        }
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: '40%',
                            endingShape: 'circle',
                            dataLabels: {
                                position: 'top'
                            }
                        },
                    },
                    dataLabels: {
                        enabled: true,
                        style: {
                            colors: ['#333']
                        },
                        offsetY: -15
                    },
                    stroke: {
                        show: true,
                        width: 2,
                        colors: ['transparent']
                    },
                    xaxis: {
                        categories: results.type,
                        labels: {
                            show: true,
                            rotate: -45,
                            rotateAlways: false,
                            hideOverlappingLabels: true,
                            showDuplicates: false,
                            trim: false,
                            minHeight: undefined,
                            maxHeight: 120,
                            style: {
                                // color: '#000000',
                                fontSize: '12px',
                                fontFamily: 'Helvetica, Arial, sans-serif',
                                fontWeight: 'bold',
                                cssClass: 'apexcharts-xaxis-label',
                            },
                        },
                    },

                    fill: {
                        opacity: 1
                    },

                };

                var usiakorban = new ApexCharts(document.querySelector("#usiakorbanchart"), options_usiakorban);
                usiakorban.render();
            }
        })
    }

    function getPekerjaanKorban(operation_id) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>bagops/getPekerjaanKorban",
            dataType: "JSON",
            data: {
                operasi_id: operation_id
            },
            success: function(results) {
                $("#chart17").html(`<div id="pekerjaankorbanchart"></div>`);
                var options_pekerjaankorban = {
                    series: [{
                        name: 'Jumlah pekerjaankorban',
                        data: results.jumlah,
                        color: "#bf1b49",
                    }],
                    chart: {
                        type: 'bar',
                        height: 380
                    },
                    tooltip: {
                        fixed: {
                            enabled: true
                        }
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: '40%',
                            endingShape: 'circle',
                            dataLabels: {
                                position: 'top'
                            }
                        },
                    },
                    dataLabels: {
                        enabled: true,
                        style: {
                            colors: ['#333']
                        },
                        offsetY: -15
                    },
                    stroke: {
                        show: true,
                        width: 2,
                        colors: ['transparent']
                    },
                    xaxis: {
                        categories: results.type,
                        labels: {
                            show: true,
                            rotate: -45,
                            rotateAlways: false,
                            hideOverlappingLabels: true,
                            showDuplicates: false,
                            trim: false,
                            minHeight: undefined,
                            maxHeight: 120,
                            style: {
                                // color: '#000000',
                                fontSize: '12px',
                                fontFamily: 'Helvetica, Arial, sans-serif',
                                fontWeight: 'bold',
                                cssClass: 'apexcharts-xaxis-label',
                            },
                        },
                    },

                    fill: {
                        opacity: 1
                    },

                };

                var pekerjaankorban = new ApexCharts(document.querySelector("#pekerjaankorbanchart"), options_pekerjaankorban);
                pekerjaankorban.render();
            }
        })
    }

    function getPendidikanKorban(operation_id) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>bagops/getPendidikanKorban",
            dataType: "JSON",
            data: {
                operasi_id: operation_id
            },
            success: function(results) {
                $("#chart18").html(`<div id="pendidikankorbanchart"></div>`);
                var options_pendidikankorban = {
                    series: [{
                        name: 'Jumlah pendidikankorban',
                        data: results.jumlah,
                        color: "#bf1b49",
                    }],
                    chart: {
                        type: 'bar',
                        height: 380
                    },
                    tooltip: {
                        fixed: {
                            enabled: true
                        }
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: '40%',
                            endingShape: 'circle',
                            dataLabels: {
                                position: 'top'
                            }
                        },
                    },
                    dataLabels: {
                        enabled: true,
                        style: {
                            colors: ['#333']
                        },
                        offsetY: -15
                    },
                    stroke: {
                        show: true,
                        width: 2,
                        colors: ['transparent']
                    },
                    xaxis: {
                        categories: results.type,
                        labels: {
                            show: true,
                            rotate: -45,
                            rotateAlways: false,
                            hideOverlappingLabels: true,
                            showDuplicates: false,
                            trim: false,
                            minHeight: undefined,
                            maxHeight: 120,
                            style: {
                                // color: '#000000',
                                fontSize: '12px',
                                fontFamily: 'Helvetica, Arial, sans-serif',
                                fontWeight: 'bold',
                                cssClass: 'apexcharts-xaxis-label',
                            },
                        },
                    },

                    fill: {
                        opacity: 1
                    },

                };

                var pendidikankorban = new ApexCharts(document.querySelector("#pendidikankorbanchart"), options_pendidikankorban);
                pendidikankorban.render();
            }
        })
    }

    function getKecelakaan(operation_id) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>bagops/getKecelakaan",
            dataType: "JSON",
            data: {
                operasi_id: operation_id
            },
            success: function(results) {
                $("#chart15").html(`<div id="kecelakaanchart"></div>`);
                var options_kecelakaan = {
                    series: [{
                        name: 'Jumlah kecelakaan',
                        data: results.jumlah,
                        color: "#bf1b49",
                    }],
                    chart: {
                        type: 'bar',
                        height: 380
                    },
                    tooltip: {
                        fixed: {
                            enabled: true
                        }
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: '40%',
                            endingShape: 'circle',
                            dataLabels: {
                                position: 'top'
                            }
                        },
                    },
                    dataLabels: {
                        enabled: true,
                        style: {
                            colors: ['#333']
                        },
                        offsetY: -15
                    },
                    stroke: {
                        show: true,
                        width: 2,
                        colors: ['transparent']
                    },
                    xaxis: {
                        categories: results.type,
                        labels: {
                            show: true,
                            rotate: -45,
                            rotateAlways: false,
                            hideOverlappingLabels: true,
                            showDuplicates: false,
                            trim: false,
                            minHeight: undefined,
                            maxHeight: 120,
                            style: {
                                // color: '#000000',
                                fontSize: '12px',
                                fontFamily: 'Helvetica, Arial, sans-serif',
                                fontWeight: 'bold',
                                cssClass: 'apexcharts-xaxis-label',
                            },
                        },
                    },

                    fill: {
                        opacity: 1
                    },

                };

                var kecelakaan = new ApexCharts(document.querySelector("#kecelakaanchart"), options_kecelakaan);
                kecelakaan.render();
            }
        })
    }


    function getPenluh(operation_id) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>bagops/getPenluh",
            dataType: "JSON",
            data: {
                operasi_id: operation_id
            },
            success: function(results) {
                $("#chart1").html(`<div id="penluhchart"></div>`);
                var options_penluh = {
                    series: results.jumlah,
                    chart: {
                        height: 380,
                        type: 'pie',
                    },
                    labels: results.type,
                    responsive: [{
                        breakpoint: 480,
                        options: {
                            chart: {
                                width: 200
                            },
                            legend: {
                                position: 'bottom'
                            }
                        }
                    }],
                };

                var penluh = new ApexCharts(document.querySelector("#penluhchart"), options_penluh);
                penluh.render();
            }
        })
    }

    function getRanmor(operation_id) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>bagops/getRanmor",
            dataType: "JSON",
            data: {
                operasi_id: operation_id
            },
            success: function(results) {
                $("#chart8").html(`<div id="ranmorchart"></div>`);
                var options_ranmor = {
                    series: results.jumlah,
                    chart: {
                        height: 380,
                        type: 'pie',
                    },
                    labels: results.type,
                    responsive: [{
                        breakpoint: 480,
                        options: {
                            chart: {
                                width: 200
                            },
                            legend: {
                                position: 'bottom'
                            }
                        }
                    }],
                };

                var ranmor = new ApexCharts(document.querySelector("#ranmorchart"), options_ranmor);
                ranmor.render();
            }
        })
    }

    function getProfesi(operation_id) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>bagops/getProfesi",
            dataType: "JSON",
            data: {
                operasi_id: operation_id
            },
            success: function(results) {
                $("#chart9").html(`<div id="profesichart"></div>`);
                var options_profesi = {
                    series: results.jumlah,
                    chart: {
                        height: 380,
                        type: 'pie',
                    },
                    labels: results.type,
                    responsive: [{
                        breakpoint: 480,
                        options: {
                            chart: {
                                width: 200
                            },
                            legend: {
                                position: 'bottom'
                            }
                        }
                    }],
                };

                var profesi = new ApexCharts(document.querySelector("#profesichart"), options_profesi);
                profesi.render();
            }
        })
    }

    function getBukti(operation_id) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>bagops/getBuktiPelanggaran",
            dataType: "JSON",
            data: {
                operasi_id: operation_id
            },
            success: function(results) {
                $("#chart7").html(`<div id="buktipelanggaranchart"></div>`);
                var options_buktipelanggaran = {
                    series: results.jumlah,
                    chart: {
                        height: 380,
                        type: 'pie',
                    },
                    labels: results.type,
                    responsive: [{
                        breakpoint: 480,
                        options: {
                            chart: {
                                width: 200
                            },
                            legend: {
                                position: 'bottom'
                            }
                        }
                    }],
                };

                var buktipelanggaran = new ApexCharts(document.querySelector("#buktipelanggaranchart"), options_buktipelanggaran);
                buktipelanggaran.render();
            }
        })
    }

    function getPelanggaranMotor(operation_id) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>bagops/getPelanggaranMotor",
            dataType: "JSON",
            data: {
                operasi_id: operation_id
            },
            success: function(results) {
                $("#chart5").html(`<div id="pelanggaranmotorchart"></div>`);
                var options_pelanggaranmotor = {
                    series: [{
                        name: 'Jumlah model kendaraan',
                        data: results.jumlah
                    }],
                    chart: {
                        type: 'bar',
                        height: 370
                    },
                    plotOptions: {
                        bar: {
                            borderRadius: 4,
                            horizontal: true,
                        }
                    },
                    tooltip: {
                        enabled: true,
                    },
                    dataLabels: {
                        enabled: true,
                        style: {
                            colors: ['#ffffff']
                        },
                        offsetY: 0,
                        offsetX: -15
                    },
                    xaxis: {
                        categories: results.type
                    }
                };

                var pelanggaranmotor = new ApexCharts(document.querySelector("#pelanggaranmotorchart"), options_pelanggaranmotor);
                pelanggaranmotor.render();
            }
        })
    }

    function getPelanggaranMobil(operation_id) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>bagops/getPelanggaranMobil",
            dataType: "JSON",
            data: {
                operasi_id: operation_id
            },
            success: function(results) {
                $("#chart6").html(`<div id="pelanggaranmobilchart"></div>`);
                var options_pelanggaranmobil = {
                    series: [{
                        name: 'Jumlah model kendaraan',
                        data: results.jumlah
                    }],
                    chart: {
                        type: 'bar',
                        height: 370
                    },
                    plotOptions: {
                        bar: {
                            borderRadius: 4,
                            horizontal: true,
                        }
                    },
                    tooltip: {
                        enabled: true,
                    },
                    dataLabels: {
                        enabled: true,
                        style: {
                            colors: ['#ffffff']
                        },
                        offsetY: 0,
                        offsetX: -15
                    },
                    xaxis: {
                        categories: results.type
                    }
                };

                var pelanggaranmobil = new ApexCharts(document.querySelector("#pelanggaranmobilchart"), options_pelanggaranmobil);
                pelanggaranmobil.render();
            }
        })
    }


    function getTurjagwali(operation_id) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>bagops/getTurjagwali",
            dataType: "JSON",
            data: {
                operasi_id: operation_id
            },
            success: function(results) {
                $("#chart3").html(`<div id="turjagwalichart"></div>`);
                var options_turjagwali = {
                    series: results.jumlah,
                    chart: {
                        height: 380,
                        type: 'pie',
                    },
                    labels: results.type,
                    responsive: [{
                        breakpoint: 480,
                        options: {
                            chart: {
                                width: 200
                            },
                            legend: {
                                position: 'bottom'
                            }
                        }
                    }],
                };

                var turjagwali = new ApexCharts(document.querySelector("#turjagwalichart"), options_turjagwali);
                turjagwali.render();
            }
        })
    }

    function getPelanggaran(operation_id) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>bagops/getPelanggaran",
            dataType: "JSON",
            data: {
                operasi_id: operation_id
            },
            success: function(results) {
                $("#chart4").html(`<div id="pelanggaranchart"></div>`);
                var options_pelanggaran = {
                    series: [{
                        name: 'Jumlah Pelanggaran',
                        data: results.jumlah,
                        color: "#003A91",
                    }],
                    chart: {
                        type: 'bar',
                        height: 380
                    },
                    tooltip: {
                        fixed: {
                            enabled: true
                        }
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: '40%',
                            endingShape: 'circle',
                            dataLabels: {
                                position: 'top'
                            }
                        },
                    },
                    dataLabels: {
                        enabled: true,
                        style: {
                            colors: ['#333']
                        },
                        offsetY: -15
                    },
                    stroke: {
                        show: true,
                        width: 2,
                        colors: ['transparent']
                    },
                    xaxis: {
                        categories: results.type,
                        labels: {
                            show: true,
                            rotate: -45,
                            rotateAlways: false,
                            hideOverlappingLabels: true,
                            showDuplicates: false,
                            trim: false,
                            minHeight: undefined,
                            maxHeight: 120,
                            style: {
                                // color: '#000000',
                                fontSize: '12px',
                                fontFamily: 'Helvetica, Arial, sans-serif',
                                fontWeight: 'bold',
                                cssClass: 'apexcharts-xaxis-label',
                            },
                        },
                    },

                    fill: {
                        opacity: 1
                    },

                };

                var pelanggaran = new ApexCharts(document.querySelector("#pelanggaranchart"), options_pelanggaran);
                pelanggaran.render();
            }
        })
    }


    function getUsia(operation_id) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>bagops/getUsia",
            dataType: "JSON",
            data: {
                operasi_id: operation_id
            },
            success: function(results) {
                $("#chart10").html(`<div id="usiachart"></div>`);
                var options_usia = {
                    series: [{
                        name: 'Jumlah usia',
                        data: results.jumlah,
                        color: "#003A91",
                    }],
                    chart: {
                        type: 'bar',
                        height: 380
                    },
                    tooltip: {
                        fixed: {
                            enabled: true
                        }
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: '40%',
                            endingShape: 'circle',
                            dataLabels: {
                                position: 'top'
                            }
                        },
                    },
                    dataLabels: {
                        enabled: true,
                        style: {
                            colors: ['#333']
                        },
                        offsetY: -15
                    },
                    stroke: {
                        show: true,
                        width: 2,
                        colors: ['transparent']
                    },
                    xaxis: {
                        categories: results.type,
                        labels: {
                            show: true,
                            rotate: -45,
                            rotateAlways: false,
                            hideOverlappingLabels: true,
                            showDuplicates: false,
                            trim: false,
                            minHeight: undefined,
                            maxHeight: 120,
                            style: {
                                // color: '#000000',
                                fontSize: '12px',
                                fontFamily: 'Helvetica, Arial, sans-serif',
                                fontWeight: 'bold',
                                cssClass: 'apexcharts-xaxis-label',
                            },
                        },
                    },

                    fill: {
                        opacity: 1
                    },

                };

                var usia = new ApexCharts(document.querySelector("#usiachart"), options_usia);
                usia.render();
            }
        })
    }

    function getSim(operation_id) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>bagops/getSim",
            dataType: "JSON",
            data: {
                operasi_id: operation_id
            },
            success: function(results) {
                $("#chart11").html(`<div id="simchart"></div>`);
                var options_sim = {
                    series: [{
                        name: 'Jumlah sim',
                        data: results.jumlah,
                        color: "#fc0303",
                    }],
                    chart: {
                        type: 'bar',
                        height: 380
                    },
                    tooltip: {
                        fixed: {
                            enabled: true
                        }
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: '40%',
                            endingShape: 'circle',
                            dataLabels: {
                                position: 'top'
                            }
                        },
                    },
                    dataLabels: {
                        enabled: true,
                        style: {
                            colors: ['#333']
                        },
                        offsetY: -15
                    },
                    stroke: {
                        show: true,
                        width: 2,
                        colors: ['transparent']
                    },
                    xaxis: {
                        categories: results.type,
                        labels: {
                            show: true,
                            rotate: -45,
                            rotateAlways: false,
                            hideOverlappingLabels: true,
                            showDuplicates: false,
                            trim: false,
                            minHeight: undefined,
                            maxHeight: 120,
                            style: {
                                // color: '#000000',
                                fontSize: '12px',
                                fontFamily: 'Helvetica, Arial, sans-serif',
                                fontWeight: 'bold',
                                cssClass: 'apexcharts-xaxis-label',
                            },
                        },
                    },

                    fill: {
                        opacity: 1
                    },

                };

                var sim = new ApexCharts(document.querySelector("#simchart"), options_sim);
                sim.render();
            }
        })
    }


    function getPenyebaran(operation_id) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>bagops/getPenyebaran",
            dataType: "JSON",
            data: {
                operasi_id: operation_id
            },
            success: function(results) {
                $("#chart2").html(`<div id="penyebaranchart"></div>`);
                var options_penyebaran = {
                    series: results.jumlah,
                    chart: {
                        height: 380,
                        type: 'pie',
                    },
                    labels: results.type,
                    responsive: [{
                        breakpoint: 480,
                        options: {
                            chart: {
                                width: 200
                            },
                            legend: {
                                position: 'bottom'
                            }
                        }
                    }]
                };

                var penyebaran = new ApexCharts(document.querySelector("#penyebaranchart"), options_penyebaran);
                penyebaran.render();
            }
        })
    }


    function getKawasanJalan(operation_id) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>bagops/getKawasanJalan",
            dataType: "JSON",
            data: {
                operasi_id: operation_id
            },
            success: function(results) {
                $("#chart12").html(`<div id="kawasanchart"></div>`);
                var options_kawasan = {
                    series: results.jumlah,
                    chart: {
                        height: 380,
                        type: 'donut',
                    },
                    labels: results.type,
                    responsive: [{
                        breakpoint: 480,
                        options: {
                            chart: {
                                width: 200
                            },
                            legend: {
                                position: 'bottom'
                            }
                        }
                    }]
                };

                var kawasan = new ApexCharts(document.querySelector("#kawasanchart"), options_kawasan);
                kawasan.render();
            }
        })
    }

    function getStatusJalan(operation_id) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>bagops/getStatusJalan",
            dataType: "JSON",
            data: {
                operasi_id: operation_id
            },
            success: function(results) {
                $("#chart13").html(`<div id="statuschart"></div>`);
                var options_status = {
                    series: results.jumlah,
                    chart: {
                        height: 380,
                        type: 'donut',
                    },
                    labels: results.type,
                    responsive: [{
                        breakpoint: 480,
                        options: {
                            chart: {
                                width: 200
                            },
                            legend: {
                                position: 'bottom'
                            }
                        }
                    }]
                };

                var status = new ApexCharts(document.querySelector("#statuschart"), options_status);
                status.render();
            }
        })
    }

    function getFungsiJalan(operation_id) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>bagops/getFungsiJalan",
            dataType: "JSON",
            data: {
                operasi_id: operation_id
            },
            success: function(results) {
                $("#chart14").html(`<div id="fungsichart"></div>`);
                var options_fungsi = {
                    series: results.jumlah,
                    chart: {
                        height: 380,
                        type: 'donut',
                    },
                    labels: results.type,
                    responsive: [{
                        breakpoint: 480,
                        options: {
                            chart: {
                                width: 200
                            },
                            legend: {
                                position: 'bottom'
                            }
                        }
                    }]
                };

                var fungsi = new ApexCharts(document.querySelector("#fungsichart"), options_fungsi);
                fungsi.render();
            }
        })
    }
</script>
<!-- <script>
    $(document).ready(function() {
        let operation_id = $('#operasi_id').val()
        getPenluh(operation_id)
    })


    function getPenluh(operation_id) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>bagops/getPenluh",
            dataType: "JSON",
            data: {
                operasi_id: operation_id
            },
            success: function(result) {
                console.log(result)
                $("#chart1").html(`<div id="penluhchart"></div>`);
                var options_tripon_kendaraan = {
                    series: results.jumlah,
                    chart: {
                        height: 380,
                        type: 'pie',
                    },
                    labels: results.type,
                    responsive: [{
                        breakpoint: 480,
                        options: {
                            chart: {
                                width: 200
                            },
                            legend: {
                                position: 'bottom'
                            }
                        }
                    }]
                };

                var tripon_kendaraan = new ApexCharts(document.querySelector("#chartkendaraan"), options_tripon_kendaraan);
                tripon_kendaraan.render();
            }
        })
    }
    var date = new Date();
    var year = new Date();
    var firstDay = new Date(date.getFullYear(), 0).toLocaleDateString("en-GB").split('/').reverse().join('-');
    var lastDay = new Date(date.getFullYear(), 11, 31).toLocaleDateString("en-GB").split('/').reverse().join('-');
    var today = new Date().toLocaleDateString('en-GB').split('/').reverse().join('-')

    date.setDate(date.getDate() - 6);
    var seven_daysAgo = date.toLocaleDateString("en-GB").split('/').reverse().join('-');

    year.setFullYear(year.getFullYear() - 2);
    var dataawal = year.toLocaleDateString("en-GB").split('/').reverse().join('-');
    var daymonth = firstDay.split('-');
    var year = dataawal.split('-');
    var three_yearAgo = year[0] + '-' + daymonth[1] + '-' + daymonth[2];

    // Day
    $("#chartdaysubbagrenopop").html(`<div id="chartday1"></div>`);
    $("#chartdaysubbagdalops").html(`<div id="chartday2"></div>`);
    $("#chartdaysubbagkerma").html(`<div id="chartday3"></div>`);
    $("#chartdaysubbaganev").html(`<div id="chartday4"></div>`);

    // Month
    $("#chartmonthsubbagrenopop").html(`<div id="chart"></div>`);
    $("#chartmonthsubbagdalops").html(`<div id="chart2"></div>`);
    $("#chartmonthsubbagkerma").html(`<div id="chart3"></div>`);
    $("#chartmonthsubbaganev").html(`<div id="chart4"></div>`);

    // Year
    $("#chartyearsubbagrenopop").html(`<div id="chartyear"></div>`);
    $("#chartyearsubbagdalops").html(`<div id="chartyear2"></div>`);
    $("#chartyearsubbagkerma").html(`<div id="chartyear3"></div>`);
    $("#chartyearsubbaganev").html(`<div id="chartyear4"></div>`);


    getStatistik();

    function getStatistik() {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>bagops/getStatistik",
            dataType: "JSON",
            success: function(result) {
                $("#overlay").fadeOut(300);
                $('#subbagrenop').html(`<span class="fs-4" >${result.subbagrenop}</span >`);
                $('#subbagdalops').html(`<span class="fs-4" >${result.subbagdalops}</span >`);
                $('#subbagkerma').html(`<span class="fs-4" >${result.subbagkerma}</span >`);
                $('#subbaganev').html(`<span class="fs-4" >${result.subbaganev}</span>`);
            }
        })
    }

    getBagopsday(today, seven_daysAgo)
    getBagopsmonth(firstDay, lastDay)
    getBagopsyear(three_yearAgo, lastDay)
    // Day
    function getBagopsday(today, seven_daysAgo) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>bagops/getChartBagops",
            data: {
                start_date: seven_daysAgo,
                end_date: today,
                filter: 'day'
            },
            dataType: "JSON",
            success: function(result) {
                let polda_month = result.data.polda_month
                let subbagrenop = result.data.subbagrenop
                let subbagdalops = result.data.subbagdalops
                let subbagkerma = result.data.subbagkerma
                let subbaganev = result.data.subbaganev
                $('#titlesubbagrenopopday').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG RENOP HARIAN</h4>`);
                $('#titlesubbagdalopsday').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG DALOPS HARIAN</h4>`);
                $('#titlesubbagkermaday').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG KERMA HARIAN</h4>`);
                $('#titlesubbaganevday').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG ANEV HARIAN</h4>`);

                var bagopssubbagrenopday = {
                    series: [{
                        name: 'SUBBAG RENOP',
                        type: 'line',
                        data: subbagrenop,
                        color: "#11347A"
                    }],
                    chart: {
                        height: 400,
                        type: 'line',
                        stacked: false
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: '55%',
                            endingShape: 'rounded',
                            dataLabels: {
                                position: 'top'
                            }
                        },
                    },
                    dataLabels: {
                        enabled: true,
                        style: {
                            colors: ['#333']
                        },
                        offsetY: -15
                    },
                    markers: {
                        size: 4,
                        colors: '#kkk',
                        fillOpacity: 0.9,
                        shape: "circle",
                        radius: 2,
                    },
                    xaxis: {
                        categories: polda_month,
                    },
                    tooltip: {
                        custom: function({
                            series,
                            seriesIndex,
                            dataPointIndex,
                            seriesName,
                            w
                        }) {
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                subbagrenopsebelumnya = subbagrenop[0];

                                if (subbagrenop[0] < subbagrenop[1]) {
                                    persentasesubbagrenop = 'Naik'
                                } else if (subbagrenop[0] > subbagrenop[1]) {
                                    persentasesubbagrenop = 'Turun'
                                } else {
                                    persentasesubbagrenop = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbagrenopsebelumnya = subbagrenop[1];
                                if (subbagrenop[1] < subbagrenop[2]) {
                                    persentasesubbagrenop = 'Naik'
                                } else if (subbagrenop[1] > subbagrenop[2]) {
                                    persentasesubbagrenop = 'Turun'
                                } else {
                                    persentasesubbagrenop = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                subbagrenopsebelumnya = subbagrenop[2];
                                if (subbagrenop[2] < subbagrenop[3]) {
                                    persentasesubbagrenop = 'Naik'
                                } else if (subbagrenop[2] > subbagrenop[3]) {
                                    persentasesubbagrenop = 'Turun'
                                } else {
                                    persentasesubbagrenop = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                subbagrenopsebelumnya = subbagrenop[3];
                                if (subbagrenop[3] < subbagrenop[4]) {
                                    persentasesubbagrenop = 'Naik'
                                } else if (subbagrenop[3] > subbagrenop[4]) {
                                    persentasesubbagrenop = 'Turun'
                                } else {
                                    persentasesubbagrenop = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                subbagrenopsebelumnya = subbagrenop[4];
                                if (subbagrenop[4] < subbagrenop[5]) {
                                    persentasesubbagrenop = 'Naik'
                                } else if (subbagrenop[4] > subbagrenop[5]) {
                                    persentasesubbagrenop = 'Turun'
                                } else {
                                    persentasesubbagrenop = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                subbagrenopsebelumnya = subbagrenop[5];
                                if (subbagrenop[5] < subbagrenop[6]) {
                                    persentasesubbagrenop = 'Naik'
                                } else if (subbagrenop[5] > subbagrenop[6]) {
                                    persentasesubbagrenop = 'Turun'
                                } else {
                                    persentasesubbagrenop = 'Sama'
                                }
                            }
                            return (
                                `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 36rem; height:10rem;">`:'<div style="width: 16rem; height:10rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                <div class="my-2  text-center"">   
                                                    <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-8 ms-1">
                                                            <span class="fw-bold">Total SUBBAG RENOP</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbagrenopsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total SUBBAG RENOP</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagrenop[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesubbagrenop}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total SUBBAG RENOP</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagrenop[dataPointIndex]}</span><br>
                                                            </div>
                                                    </div>
                                                </div>`}
                                            </div>
                                        </div>
                                    </div>`
                            );
                        }
                    }
                };

                var bagopssubbagrenopday = new ApexCharts(document.querySelector("#chartday1"), bagopssubbagrenopday);
                bagopssubbagrenopday.render();


                var bagopssubbagdalopsday = {
                    series: [{
                        name: 'SUBBAG DALOPS',
                        type: 'line',
                        data: subbagdalops,
                        color: "#CB2D3E"
                    }],
                    chart: {
                        height: 400,
                        type: 'line',
                        stacked: false
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: '55%',
                            endingShape: 'rounded',
                            dataLabels: {
                                position: 'top'
                            }
                        },
                    },
                    dataLabels: {
                        enabled: true,
                        style: {
                            colors: ['#333']
                        },
                        offsetY: -15
                    },
                    markers: {
                        size: 4,
                        colors: '#kkk',
                        fillOpacity: 0.9,
                        shape: "circle",
                        radius: 2,
                    },
                    xaxis: {
                        categories: polda_month,
                    },
                    tooltip: {
                        custom: function({
                            series,
                            seriesIndex,
                            dataPointIndex,
                            seriesName,
                            w
                        }) {
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                subbagdalopssebelumnya = subbagdalops[0];

                                if (subbagdalops[0] < subbagdalops[1]) {
                                    persentasesubbagdalops = 'Naik'
                                } else if (subbagdalops[0] > subbagdalops[1]) {
                                    persentasesubbagdalops = 'Turun'
                                } else {
                                    persentasesubbagdalops = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbagdalopssebelumnya = subbagdalops[1];
                                if (subbagdalops[1] < subbagdalops[2]) {
                                    persentasesubbagdalops = 'Naik'
                                } else if (subbagdalops[1] > subbagdalops[2]) {
                                    persentasesubbagdalops = 'Turun'
                                } else {
                                    persentasesubbagdalops = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                subbagdalopssebelumnya = subbagdalops[2];
                                if (subbagdalops[2] < subbagdalops[3]) {
                                    persentasesubbagdalops = 'Naik'
                                } else if (subbagdalops[2] > subbagdalops[3]) {
                                    persentasesubbagdalops = 'Turun'
                                } else {
                                    persentasesubbagdalops = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                subbagdalopssebelumnya = subbagdalops[3];
                                if (subbagdalops[3] < subbagdalops[4]) {
                                    persentasesubbagdalops = 'Naik'
                                } else if (subbagdalops[3] > subbagdalops[4]) {
                                    persentasesubbagdalops = 'Turun'
                                } else {
                                    persentasesubbagdalops = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[5]
                                subbagdalopssebelumnya = subbagdalops[4];
                                if (subbagdalops[4] < subbagdalops[5]) {
                                    persentasesubbagdalops = 'Naik'
                                } else if (subbagdalops[4] > subbagdalops[5]) {
                                    persentasesubbagdalops = 'Turun'
                                } else {
                                    persentasesubbagdalops = 'Sama'
                                }
                            }

                            return (
                                `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 36rem; height:10rem;">`:'<div style="width: 16rem; height:10rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                <div class="my-2  text-center"">   
                                                    <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-8 ms-1">
                                                            <span class="fw-bold">Total SUBBAG DALOPS</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbagdalopssebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total SUBBAG DALOPS</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagdalops[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesubbagdalops}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total SUBBAG DALOPS</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagdalops[dataPointIndex]}</span><br>
                                                            </div>
                                                    </div>
                                                </div>`}
                                            </div>
                                        </div>
                                    </div>`

                            );
                        }
                    }

                };

                var bagopssubbagdalopsday = new ApexCharts(document.querySelector("#chartday2"), bagopssubbagdalopsday);
                bagopssubbagdalopsday.render();


                var bagopssubbagkermaday = {
                    series: [{
                        name: 'SUBBAG KERMA',
                        type: 'line',
                        data: subbagkerma,
                        color: "#3CA55C"
                    }],
                    chart: {
                        height: 400,
                        type: 'line',
                        stacked: false
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: '55%',
                            endingShape: 'rounded',
                            dataLabels: {
                                position: 'top'
                            }
                        },
                    },
                    dataLabels: {
                        enabled: true,
                        style: {
                            colors: ['#333']
                        },
                        offsetY: -15
                    },
                    markers: {
                        size: 4,
                        colors: '#kkk',
                        fillOpacity: 0.9,
                        shape: "circle",
                        radius: 2,
                    },
                    xaxis: {
                        categories: polda_month,
                    },
                    tooltip: {
                        custom: function({
                            series,
                            seriesIndex,
                            dataPointIndex,
                            seriesName,
                            w
                        }) {
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                subbagkermasebelumnya = subbagkerma[0];

                                if (subbagkerma[0] < subbagkerma[1]) {
                                    persentasesubbagkerma = 'Naik'
                                } else if (subbagkerma[0] > subbagkerma[1]) {
                                    persentasesubbagkerma = 'Turun'
                                } else {
                                    persentasesubbagkerma = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbagkermasebelumnya = subbagkerma[1];
                                if (subbagkerma[1] < subbagkerma[2]) {
                                    persentasesubbagkerma = 'Naik'
                                } else if (subbagkerma[1] > subbagkerma[2]) {
                                    persentasesubbagkerma = 'Turun'
                                } else {
                                    persentasesubbagkerma = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                subbagkermasebelumnya = subbagkerma[2];
                                if (subbagkerma[2] < subbagkerma[3]) {
                                    persentasesubbagkerma = 'Naik'
                                } else if (subbagkerma[2] > subbagkerma[3]) {
                                    persentasesubbagkerma = 'Turun'
                                } else {
                                    persentasesubbagkerma = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                subbagkermasebelumnya = subbagkerma[3];
                                if (subbagkerma[3] < subbagkerma[4]) {
                                    persentasesubbagkerma = 'Naik'
                                } else if (subbagkerma[3] > subbagkerma[4]) {
                                    persentasesubbagkerma = 'Turun'
                                } else {
                                    persentasesubbagkerma = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                subbagkermasebelumnya = subbagkerma[4];
                                if (subbagkerma[4] < subbagkerma[5]) {
                                    persentasesubbagkerma = 'Naik'
                                } else if (subbagkerma[4] > subbagkerma[5]) {
                                    persentasesubbagkerma = 'Turun'
                                } else {
                                    persentasesubbagkerma = 'Sama'
                                }
                            }

                            return (
                                `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 36rem; height:10rem;">`:'<div style="width: 16rem; height:10rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                <div class="my-2  text-center"">   
                                                    <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-8 ms-1">
                                                            <span class="fw-bold">Total SUBBAG KERMA</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbagkermasebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total SUBBAG KERMA</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagkerma[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesubbagkerma}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total SUBBAG KERMA</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagkerma[dataPointIndex]}</span><br>
                                                            </div>
                                                    </div>
                                                </div>`}
                                            </div>
                                        </div>
                                    </div>`

                            );
                        }
                    }

                };

                var bagopssubbagkermaday = new ApexCharts(document.querySelector("#chartday3"), bagopssubbagkermaday);
                bagopssubbagkermaday.render();


                var bagopssubbaganevday = {
                    series: [{
                        name: 'SUBBAG ANEV',
                        type: 'line',
                        data: subbaganev,
                        color: "#EDF12D"
                    }],
                    chart: {
                        height: 400,
                        type: 'line',
                        stacked: false
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: '55%',
                            endingShape: 'rounded',
                            dataLabels: {
                                position: 'top'
                            }
                        },
                    },
                    dataLabels: {
                        enabled: true,
                        style: {
                            colors: ['#333']
                        },
                        offsetY: -15
                    },
                    markers: {
                        size: 4,
                        colors: '#kkk',
                        fillOpacity: 0.9,
                        shape: "circle",
                        radius: 2,
                    },
                    xaxis: {
                        categories: polda_month,
                    },
                    tooltip: {
                        custom: function({
                            series,
                            seriesIndex,
                            dataPointIndex,
                            seriesName,
                            w
                        }) {
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                subbaganevsebelumnya = subbaganev[0];

                                if (subbaganev[0] < subbaganev[1]) {
                                    persentasesubbaganev = 'Naik'
                                } else if (subbaganev[0] > subbaganev[1]) {
                                    persentasesubbaganev = 'Turun'
                                } else {
                                    persentasesubbaganev = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbaganevsebelumnya = subbaganev[1];
                                if (subbaganev[1] < subbaganev[2]) {
                                    persentasesubbaganev = 'Naik'
                                } else if (subbaganev[1] > subbaganev[2]) {
                                    persentasesubbaganev = 'Turun'
                                } else {
                                    persentasesubbaganev = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                subbaganevsebelumnya = subbaganev[2];
                                if (subbaganev[2] < subbaganev[3]) {
                                    persentasesubbaganev = 'Naik'
                                } else if (subbaganev[2] > subbaganev[3]) {
                                    persentasesubbaganev = 'Turun'
                                } else {
                                    persentasesubbaganev = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                subbaganevsebelumnya = subbaganev[3];
                                if (subbaganev[3] < subbaganev[4]) {
                                    persentasesubbaganev = 'Naik'
                                } else if (subbaganev[3] > subbaganev[4]) {
                                    persentasesubbaganev = 'Turun'
                                } else {
                                    persentasesubbaganev = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                subbaganevsebelumnya = subbaganev[4];
                                if (subbaganev[4] < subbaganev[5]) {
                                    persentasesubbaganev = 'Naik'
                                } else if (subbaganev[4] > subbaganev[5]) {
                                    persentasesubbaganev = 'Turun'
                                } else {
                                    persentasesubbaganev = 'Sama'
                                }
                            }

                            return (
                                `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 36rem; height:10rem;">`:'<div style="width: 16rem; height:10rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                <div class="my-2  text-center"">   
                                                    <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-8 ms-1">
                                                            <span class="fw-bold">Total SUBBAG ANEV</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbaganevsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total SUBBAG ANEV</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbaganev[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesubbaganev}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total SUBBAG ANEV</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbaganev[dataPointIndex]}</span><br>
                                                            </div>
                                                    </div>
                                                </div>`}
                                            </div>
                                        </div>
                                    </div>`

                            );
                        }
                    }

                };

                var bagopssubbaganevday = new ApexCharts(document.querySelector("#chartday4"), bagopssubbaganevday);
                bagopssubbaganevday.render();
            }
        })
    }


    // // Month
    function getBagopsmonth(firstDay, lastDay) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>bagops/getChartBagops",
            data: {
                start_date: firstDay,
                end_date: lastDay,
                filter: 'month'
            },
            dataType: "JSON",
            success: function(result) {
                let polda_month = result.data.polda_month
                let subbagrenop = result.data.subbagrenop
                let subbagdalops = result.data.subbagdalops
                let subbagkerma = result.data.subbagkerma
                let subbaganev = result.data.subbaganev
                $('#titlesubbagrenopopmonth').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG RENOP BULANAN</h4>`);
                $('#titlesubbagdalopsmonth').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG DALOPS BULANAN</h4>`);
                $('#titlesubbagkermamonth').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG KERMA BULANAN</h4>`);
                $('#titlesubbaganevmonth').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG ANEV BULANAN</h4>`);

                var bagopssubbagrenopmonth = {
                    series: [{
                        name: 'SUBBAG RENOP',
                        type: 'line',
                        data: subbagrenop,
                        color: "#11347A"
                    }],
                    chart: {
                        height: 400,
                        type: 'line',
                        stacked: false
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: '55%',
                            endingShape: 'rounded',
                            dataLabels: {
                                position: 'top'
                            }
                        },
                    },
                    dataLabels: {
                        enabled: true,
                        style: {
                            colors: ['#333']
                        },
                        offsetY: -15
                    },
                    markers: {
                        size: 4,
                        colors: '#kkk',
                        fillOpacity: 0.9,
                        shape: "circle",
                        radius: 2,
                    },
                    xaxis: {
                        categories: polda_month,
                    },
                    tooltip: {
                        custom: function({
                            series,
                            seriesIndex,
                            dataPointIndex,
                            seriesName,
                            w
                        }) {
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                subbagrenopsebelumnya = subbagrenop[0];

                                if (subbagrenop[0] < subbagrenop[1]) {
                                    persentasesubbagrenop = 'Naik'
                                } else if (subbagrenop[0] > subbagrenop[1]) {
                                    persentasesubbagrenop = 'Turun'
                                } else {
                                    persentasesubbagrenop = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbagrenopsebelumnya = subbagrenop[1];
                                if (subbagrenop[1] < subbagrenop[2]) {
                                    persentasesubbagrenop = 'Naik'
                                } else if (subbagrenop[1] > subbagrenop[2]) {
                                    persentasesubbagrenop = 'Turun'
                                } else {
                                    persentasesubbagrenop = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                subbagrenopsebelumnya = subbagrenop[2];
                                if (subbagrenop[2] < subbagrenop[3]) {
                                    persentasesubbagrenop = 'Naik'
                                } else if (subbagrenop[2] > subbagrenop[3]) {
                                    persentasesubbagrenop = 'Turun'
                                } else {
                                    persentasesubbagrenop = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                subbagrenopsebelumnya = subbagrenop[3];
                                if (subbagrenop[3] < subbagrenop[4]) {
                                    persentasesubbagrenop = 'Naik'
                                } else if (subbagrenop[3] > subbagrenop[4]) {
                                    persentasesubbagrenop = 'Turun'
                                } else {
                                    persentasesubbagrenop = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                subbagrenopsebelumnya = subbagrenop[4];
                                if (subbagrenop[4] < subbagrenop[5]) {
                                    persentasesubbagrenop = 'Naik'
                                } else if (subbagrenop[4] > subbagrenop[5]) {
                                    persentasesubbagrenop = 'Turun'
                                } else {
                                    persentasesubbagrenop = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                subbagrenopsebelumnya = subbagrenop[5];
                                if (subbagrenop[5] < subbagrenop[6]) {
                                    persentasesubbagrenop = 'Naik'
                                } else if (subbagrenop[5] > subbagrenop[6]) {
                                    persentasesubbagrenop = 'Turun'
                                } else {
                                    persentasesubbagrenop = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                subbagrenopsebelumnya = subbagrenop[6];
                                if (subbagrenop[6] < subbagrenop[7]) {
                                    persentasesubbagrenop = 'Naik'
                                } else if (subbagrenop[6] > subbagrenop[7]) {
                                    persentasesubbagrenop = 'Turun'
                                } else {
                                    persentasesubbagrenop = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                subbagrenopsebelumnya = subbagrenop[7];
                                if (subbagrenop[7] < subbagrenop[8]) {
                                    persentasesubbagrenop = 'Naik'
                                } else if (subbagrenop[7] > subbagrenop[8]) {
                                    persentasesubbagrenop = 'Turun'
                                } else {
                                    persentasesubbagrenop = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                subbagrenopsebelumnya = subbagrenop[8];
                                if (subbagrenop[8] < subbagrenop[9]) {
                                    persentasesubbagrenop = 'Naik'
                                } else if (subbagrenop[8] > subbagrenop[9]) {
                                    persentasesubbagrenop = 'Turun'
                                } else {
                                    persentasesubbagrenop = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                subbagrenopsebelumnya = subbagrenop[9];
                                if (subbagrenop[9] < subbagrenop[10]) {
                                    persentasesubbagrenop = 'Naik'
                                } else if (subbagrenop[9] > subbagrenop[10]) {
                                    persentasesubbagrenop = 'Turun'
                                } else {
                                    persentasesubbagrenop = `Sama`
                                }

                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                subbagrenopsebelumnya = subbagrenop[10];
                                if (subbagrenop[10] < subbagrenop[11]) {
                                    persentasesubbagrenop = 'Naik'
                                } else if (subbagrenop[10] > subbagrenop[11]) {
                                    persentasesubbagrenop = 'Turun'
                                } else {
                                    persentasesubbagrenop = 'Sama'
                                }
                            }

                            return (
                                `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 36rem; height:10rem;">`:'<div style="width: 16rem; height:10rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                <div class="my-2  text-center"">   
                                                    <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-8 ms-1">
                                                            <span class="fw-bold">Total SUBBAG RENOP</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbagrenopsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total SUBBAG RENOP</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagrenop[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesubbagrenop}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total SUBBAG RENOP</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagrenop[dataPointIndex]}</span><br>
                                                            </div>
                                                    </div>
                                                </div>`}
                                            </div>
                                        </div>
                                    </div>`
                            );
                        }
                    }
                };

                var bagopssubbagrenopmonth = new ApexCharts(document.querySelector("#chart"), bagopssubbagrenopmonth);
                bagopssubbagrenopmonth.render();


                var bagopssubbagdalopsmonth = {
                    series: [{
                        name: 'SUBBAG DALOPS',
                        type: 'line',
                        data: subbagdalops,
                        color: "#CB2D3E"
                    }],
                    chart: {
                        height: 400,
                        type: 'line',
                        stacked: false
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: '55%',
                            endingShape: 'rounded',
                            dataLabels: {
                                position: 'top'
                            }
                        },
                    },
                    dataLabels: {
                        enabled: true,
                        style: {
                            colors: ['#333']
                        },
                        offsetY: -15
                    },
                    markers: {
                        size: 4,
                        colors: '#kkk',
                        fillOpacity: 0.9,
                        shape: "circle",
                        radius: 2,
                    },
                    xaxis: {
                        categories: polda_month,
                    },
                    tooltip: {
                        custom: function({
                            series,
                            seriesIndex,
                            dataPointIndex,
                            seriesName,
                            w
                        }) {
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                subbagdalopssebelumnya = subbagdalops[0];

                                if (subbagdalops[0] < subbagdalops[1]) {
                                    persentasesubbagdalops = 'Naik'
                                } else if (subbagdalops[0] > subbagdalops[1]) {
                                    persentasesubbagdalops = 'Turun'
                                } else {
                                    persentasesubbagdalops = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbagdalopssebelumnya = subbagdalops[1];
                                if (subbagdalops[1] < subbagdalops[2]) {
                                    persentasesubbagdalops = 'Naik'
                                } else if (subbagdalops[1] > subbagdalops[2]) {
                                    persentasesubbagdalops = 'Turun'
                                } else {
                                    persentasesubbagdalops = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                subbagdalopssebelumnya = subbagdalops[2];
                                if (subbagdalops[2] < subbagdalops[3]) {
                                    persentasesubbagdalops = 'Naik'
                                } else if (subbagdalops[2] > subbagdalops[3]) {
                                    persentasesubbagdalops = 'Turun'
                                } else {
                                    persentasesubbagdalops = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                subbagdalopssebelumnya = subbagdalops[3];
                                if (subbagdalops[3] < subbagdalops[4]) {
                                    persentasesubbagdalops = 'Naik'
                                } else if (subbagdalops[3] > subbagdalops[4]) {
                                    persentasesubbagdalops = 'Turun'
                                } else {
                                    persentasesubbagdalops = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                subbagdalopssebelumnya = subbagdalops[4];
                                if (subbagdalops[4] < subbagdalops[5]) {
                                    persentasesubbagdalops = 'Naik'
                                } else if (subbagdalops[4] > subbagdalops[5]) {
                                    persentasesubbagdalops = 'Turun'
                                } else {
                                    persentasesubbagdalops = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                subbagdalopssebelumnya = subbagdalops[5];
                                if (subbagdalops[5] < subbagdalops[6]) {
                                    persentasesubbagdalops = 'Naik'
                                } else if (subbagdalops[5] > subbagdalops[6]) {
                                    persentasesubbagdalops = 'Turun'
                                } else {
                                    persentasesubbagdalops = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                subbagdalopssebelumnya = subbagdalops[6];
                                if (subbagdalops[6] < subbagdalops[7]) {
                                    persentasesubbagdalops = 'Naik'
                                } else if (subbagdalops[6] > subbagdalops[7]) {
                                    persentasesubbagdalops = 'Turun'
                                } else {
                                    persentasesubbagdalops = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                subbagdalopssebelumnya = subbagdalops[7];
                                if (subbagdalops[7] < subbagdalops[8]) {
                                    persentasesubbagdalops = 'Naik'
                                } else if (subbagdalops[7] > subbagdalops[8]) {
                                    persentasesubbagdalops = 'Turun'
                                } else {
                                    persentasesubbagdalops = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                subbagdalopssebelumnya = subbagdalops[8];
                                if (subbagdalops[8] < subbagdalops[9]) {
                                    persentasesubbagdalops = 'Naik'
                                } else if (subbagdalops[8] > subbagdalops[9]) {
                                    persentasesubbagdalops = 'Turun'
                                } else {
                                    persentasesubbagdalops = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                subbagdalopssebelumnya = subbagdalops[9];
                                if (subbagdalops[9] < subbagdalops[10]) {
                                    persentasesubbagdalops = 'Naik'
                                } else if (subbagdalops[9] > subbagdalops[10]) {
                                    persentasesubbagdalops = 'Turun'
                                } else {
                                    persentasesubbagdalops = `Sama`
                                }

                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                subbagdalopssebelumnya = subbagdalops[10];
                                if (subbagdalops[10] < subbagdalops[11]) {
                                    persentasesubbagdalops = 'Naik'
                                } else if (subbagdalops[10] > subbagdalops[11]) {
                                    persentasesubbagdalops = 'Turun'
                                } else {
                                    persentasesubbagdalops = 'Sama'
                                }
                            }

                            return (
                                `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 36rem; height:10rem;">`:'<div style="width: 16rem; height:10rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                <div class="my-2  text-center"">   
                                                    <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-8 ms-1">
                                                            <span class="fw-bold">Total SUBBAG DALOPS</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbagdalopssebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total SUBBAG DALOPS</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagdalops[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesubbagdalops}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total SUBBAG DALOPS</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagdalops[dataPointIndex]}</span><br>
                                                            </div>
                                                    </div>
                                                </div>`}
                                            </div>
                                        </div>
                                    </div>`

                            );
                        }
                    }

                };

                var bagopssubbagdalopsmonth = new ApexCharts(document.querySelector("#chart2"), bagopssubbagdalopsmonth);
                bagopssubbagdalopsmonth.render();


                var bagopssubbagkermamonth = {
                    series: [{
                        name: 'SUBBAG KERMA',
                        type: 'line',
                        data: subbagkerma,
                        color: "#3CA55C"
                    }],
                    chart: {
                        height: 400,
                        type: 'line',
                        stacked: false
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: '55%',
                            endingShape: 'rounded',
                            dataLabels: {
                                position: 'top'
                            }
                        },
                    },
                    dataLabels: {
                        enabled: true,
                        style: {
                            colors: ['#333']
                        },
                        offsetY: -15
                    },
                    markers: {
                        size: 4,
                        colors: '#kkk',
                        fillOpacity: 0.9,
                        shape: "circle",
                        radius: 2,
                    },
                    xaxis: {
                        categories: polda_month,
                    },
                    tooltip: {
                        custom: function({
                            series,
                            seriesIndex,
                            dataPointIndex,
                            seriesName,
                            w
                        }) {
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                subbagkermasebelumnya = subbagkerma[0];

                                if (subbagkerma[0] < subbagkerma[1]) {
                                    persentasesubbagkerma = 'Naik'
                                } else if (subbagkerma[0] > subbagkerma[1]) {
                                    persentasesubbagkerma = 'Turun'
                                } else {
                                    persentasesubbagkerma = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbagkermasebelumnya = subbagkerma[1];
                                if (subbagkerma[1] < subbagkerma[2]) {
                                    persentasesubbagkerma = 'Naik'
                                } else if (subbagkerma[1] > subbagkerma[2]) {
                                    persentasesubbagkerma = 'Turun'
                                } else {
                                    persentasesubbagkerma = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                subbagkermasebelumnya = subbagkerma[2];
                                if (subbagkerma[2] < subbagkerma[3]) {
                                    persentasesubbagkerma = 'Naik'
                                } else if (subbagkerma[2] > subbagkerma[3]) {
                                    persentasesubbagkerma = 'Turun'
                                } else {
                                    persentasesubbagkerma = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                subbagkermasebelumnya = subbagkerma[3];
                                if (subbagkerma[3] < subbagkerma[4]) {
                                    persentasesubbagkerma = 'Naik'
                                } else if (subbagkerma[3] > subbagkerma[4]) {
                                    persentasesubbagkerma = 'Turun'
                                } else {
                                    persentasesubbagkerma = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                subbagkermasebelumnya = subbagkerma[4];
                                if (subbagkerma[4] < subbagkerma[5]) {
                                    persentasesubbagkerma = 'Naik'
                                } else if (subbagkerma[4] > subbagkerma[5]) {
                                    persentasesubbagkerma = 'Turun'
                                } else {
                                    persentasesubbagkerma = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                subbagkermasebelumnya = subbagkerma[5];
                                if (subbagkerma[5] < subbagkerma[6]) {
                                    persentasesubbagkerma = 'Naik'
                                } else if (subbagkerma[5] > subbagkerma[6]) {
                                    persentasesubbagkerma = 'Turun'
                                } else {
                                    persentasesubbagkerma = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                subbagkermasebelumnya = subbagkerma[6];
                                if (subbagkerma[6] < subbagkerma[7]) {
                                    persentasesubbagkerma = 'Naik'
                                } else if (subbagkerma[6] > subbagkerma[7]) {
                                    persentasesubbagkerma = 'Turun'
                                } else {
                                    persentasesubbagkerma = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                subbagkermasebelumnya = subbagkerma[7];
                                if (subbagkerma[7] < subbagkerma[8]) {
                                    persentasesubbagkerma = 'Naik'
                                } else if (subbagkerma[7] > subbagkerma[8]) {
                                    persentasesubbagkerma = 'Turun'
                                } else {
                                    persentasesubbagkerma = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                subbagkermasebelumnya = subbagkerma[8];
                                if (subbagkerma[8] < subbagkerma[9]) {
                                    persentasesubbagkerma = 'Naik'
                                } else if (subbagkerma[8] > subbagkerma[9]) {
                                    persentasesubbagkerma = 'Turun'
                                } else {
                                    persentasesubbagkerma = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                subbagkermasebelumnya = subbagkerma[9];
                                if (subbagkerma[9] < subbagkerma[10]) {
                                    persentasesubbagkerma = 'Naik'
                                } else if (subbagkerma[9] > subbagkerma[10]) {
                                    persentasesubbagkerma = 'Turun'
                                } else {
                                    persentasesubbagkerma = `Sama`
                                }

                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                subbagkermasebelumnya = subbagkerma[10];
                                if (subbagkerma[10] < subbagkerma[11]) {
                                    persentasesubbagkerma = 'Naik'
                                } else if (subbagkerma[10] > subbagkerma[11]) {
                                    persentasesubbagkerma = 'Turun'
                                } else {
                                    persentasesubbagkerma = 'Sama'
                                }
                            }

                            return (
                                `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 36rem; height:10rem;">`:'<div style="width: 16rem; height:10rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                <div class="my-2  text-center"">   
                                                    <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-8 ms-1">
                                                            <span class="fw-bold">Total SUBBAG KERMA</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbagkermasebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total SUBBAG KERMA</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagkerma[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesubbagkerma}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total SUBBAG KERMA</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagkerma[dataPointIndex]}</span><br>
                                                            </div>
                                                    </div>
                                                </div>`}
                                            </div>
                                        </div>
                                    </div>`

                            );
                        }
                    }

                };

                var bagopssubbagkermamonth = new ApexCharts(document.querySelector("#chart3"), bagopssubbagkermamonth);
                bagopssubbagkermamonth.render();


                var bagopssubbaganevmonth = {
                    series: [{
                        name: 'SUBBAG ANEV',
                        type: 'line',
                        data: subbaganev,
                        color: "#EDF12D"
                    }],
                    chart: {
                        height: 400,
                        type: 'line',
                        stacked: false
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: '55%',
                            endingShape: 'rounded',
                            dataLabels: {
                                position: 'top'
                            }
                        },
                    },
                    dataLabels: {
                        enabled: true,
                        style: {
                            colors: ['#333']
                        },
                        offsetY: -15
                    },
                    markers: {
                        size: 4,
                        colors: '#kkk',
                        fillOpacity: 0.9,
                        shape: "circle",
                        radius: 2,
                    },
                    xaxis: {
                        categories: polda_month,
                    },
                    tooltip: {
                        custom: function({
                            series,
                            seriesIndex,
                            dataPointIndex,
                            seriesName,
                            w
                        }) {
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                subbaganevsebelumnya = subbaganev[0];

                                if (subbaganev[0] < subbaganev[1]) {
                                    persentasesubbaganev = 'Naik'
                                } else if (subbaganev[0] > subbaganev[1]) {
                                    persentasesubbaganev = 'Turun'
                                } else {
                                    persentasesubbaganev = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbaganevsebelumnya = subbaganev[1];
                                if (subbaganev[1] < subbaganev[2]) {
                                    persentasesubbaganev = 'Naik'
                                } else if (subbaganev[1] > subbaganev[2]) {
                                    persentasesubbaganev = 'Turun'
                                } else {
                                    persentasesubbaganev = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                subbaganevsebelumnya = subbaganev[2];
                                if (subbaganev[2] < subbaganev[3]) {
                                    persentasesubbaganev = 'Naik'
                                } else if (subbaganev[2] > subbaganev[3]) {
                                    persentasesubbaganev = 'Turun'
                                } else {
                                    persentasesubbaganev = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                subbaganevsebelumnya = subbaganev[3];
                                if (subbaganev[3] < subbaganev[4]) {
                                    persentasesubbaganev = 'Naik'
                                } else if (subbaganev[3] > subbaganev[4]) {
                                    persentasesubbaganev = 'Turun'
                                } else {
                                    persentasesubbaganev = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                subbaganevsebelumnya = subbaganev[4];
                                if (subbaganev[4] < subbaganev[5]) {
                                    persentasesubbaganev = 'Naik'
                                } else if (subbaganev[4] > subbaganev[5]) {
                                    persentasesubbaganev = 'Turun'
                                } else {
                                    persentasesubbaganev = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                subbaganevsebelumnya = subbaganev[5];
                                if (subbaganev[5] < subbaganev[6]) {
                                    persentasesubbaganev = 'Naik'
                                } else if (subbaganev[5] > subbaganev[6]) {
                                    persentasesubbaganev = 'Turun'
                                } else {
                                    persentasesubbaganev = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                subbaganevsebelumnya = subbaganev[6];
                                if (subbaganev[6] < subbaganev[7]) {
                                    persentasesubbaganev = 'Naik'
                                } else if (subbaganev[6] > subbaganev[7]) {
                                    persentasesubbaganev = 'Turun'
                                } else {
                                    persentasesubbaganev = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                subbaganevsebelumnya = subbaganev[7];
                                if (subbaganev[7] < subbaganev[8]) {
                                    persentasesubbaganev = 'Naik'
                                } else if (subbaganev[7] > subbaganev[8]) {
                                    persentasesubbaganev = 'Turun'
                                } else {
                                    persentasesubbaganev = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                subbaganevsebelumnya = subbaganev[8];
                                if (subbaganev[8] < subbaganev[9]) {
                                    persentasesubbaganev = 'Naik'
                                } else if (subbaganev[8] > subbaganev[9]) {
                                    persentasesubbaganev = 'Turun'
                                } else {
                                    persentasesubbaganev = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                subbaganevsebelumnya = subbaganev[9];
                                if (subbaganev[9] < subbaganev[10]) {
                                    persentasesubbaganev = 'Naik'
                                } else if (subbaganev[9] > subbaganev[10]) {
                                    persentasesubbaganev = 'Turun'
                                } else {
                                    subbaganev = `Sama`
                                }

                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                subbaganevsebelumnya = subbaganev[10];
                                if (subbaganev[10] < subbaganev[11]) {
                                    persentasesubbaganev = 'Naik'
                                } else if (subbaganev[10] > subbaganev[11]) {
                                    persentasesubbaganev = 'Turun'
                                } else {
                                    persentasesubbaganev = 'Sama'
                                }
                            }

                            return (
                                `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 36rem; height:10rem;">`:'<div style="width: 16rem; height:10rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                <div class="my-2  text-center"">   
                                                    <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-8 ms-1">
                                                            <span class="fw-bold">Total SUBBAG ANEV</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbaganevsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total SUBBAG ANEV</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbaganev[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesubbaganev}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total SUBBAG ANEV</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbaganev[dataPointIndex]}</span><br>
                                                            </div>
                                                    </div>
                                                </div>`}
                                            </div>
                                        </div>
                                    </div>`

                            );
                        }
                    }

                };

                var bagopssubbaganevmonth = new ApexCharts(document.querySelector("#chart4"), bagopssubbaganevmonth);
                bagopssubbaganevmonth.render();
            }
        })
    }

    // Year
    function getBagopsyear(three_yearAgo, lastDay) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>bagops/getChartBagops",
            data: {
                start_date: three_yearAgo,
                end_date: lastDay,
                filter: 'year'
            },
            dataType: "JSON",
            success: function(result) {
                let polda_month = result.data.polda_month
                let subbagrenop = result.data.subbagrenop
                let subbagdalops = result.data.subbagdalops
                let subbagkerma = result.data.subbagkerma
                let subbaganev = result.data.subbaganev
                $('#titlesubbagrenopopyear').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG RENOP TAHUNAN</h4>`);
                $('#titlesubbagdalopsyear').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG DALOPS TAHUNAN</h4>`);
                $('#titlesubbagkermayear').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG KERMA TAHUNAN</h4>`);
                $('#titlesubbaganevyear').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG ANEV TAHUNAN</h4>`);

                var bagopssubbagrenopyear = {
                    series: [{
                        name: 'SUBBAG RENOP',
                        type: 'line',
                        data: subbagrenop,
                        color: "#11347A"
                    }],
                    chart: {
                        height: 400,
                        type: 'line',
                        stacked: false
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: '55%',
                            endingShape: 'rounded',
                            dataLabels: {
                                position: 'top'
                            }
                        },
                    },
                    dataLabels: {
                        enabled: true,
                        style: {
                            colors: ['#333']
                        },
                        offsetY: -15
                    },
                    markers: {
                        size: 4,
                        colors: '#kkk',
                        fillOpacity: 0.9,
                        shape: "circle",
                        radius: 2,
                    },
                    xaxis: {
                        categories: polda_month,
                    },
                    tooltip: {
                        custom: function({
                            series,
                            seriesIndex,
                            dataPointIndex,
                            seriesName,
                            w
                        }) {
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                subbagrenopsebelumnya = subbagrenop[0];

                                if (subbagrenop[0] < subbagrenop[1]) {
                                    persentasesubbagrenop = 'Naik'
                                } else if (subbagrenop[0] > subbagrenop[1]) {
                                    persentasesubbagrenop = 'Turun'
                                } else {
                                    persentasesubbagrenop = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbagrenopsebelumnya = subbagrenop[1];
                                if (subbagrenop[1] < subbagrenop[2]) {
                                    persentasesubbagrenop = 'Naik'
                                } else if (subbagrenop[1] > subbagrenop[2]) {
                                    persentasesubbagrenop = 'Turun'
                                } else {
                                    persentasesubbagrenop = 'Sama'
                                }

                            }

                            return (
                                `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 36rem; height:10rem;">`:'<div style="width: 16rem; height:10rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                <div class="my-2  text-center"">   
                                                    <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-8 ms-1">
                                                            <span class="fw-bold">Total SUBBAG RENOP</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbagrenopsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total SUBBAG RENOP</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagrenop[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesubbagrenop}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total SUBBAG RENOP</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagrenop[dataPointIndex]}</span><br>
                                                            </div>
                                                    </div>
                                                </div>`}
                                            </div>
                                        </div>
                                    </div>`
                            );
                        }
                    }
                };

                var bagopssubbagrenopyear = new ApexCharts(document.querySelector("#chartyear"), bagopssubbagrenopyear);
                bagopssubbagrenopyear.render();


                var bagopssubbagdalopsyear = {
                    series: [{
                        name: 'SUBBAG DALOPS',
                        type: 'line',
                        data: subbagdalops,
                        color: "#CB2D3E"
                    }],
                    chart: {
                        height: 400,
                        type: 'line',
                        stacked: false
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: '55%',
                            endingShape: 'rounded',
                            dataLabels: {
                                position: 'top'
                            }
                        },
                    },
                    dataLabels: {
                        enabled: true,
                        style: {
                            colors: ['#333']
                        },
                        offsetY: -15
                    },
                    markers: {
                        size: 4,
                        colors: '#kkk',
                        fillOpacity: 0.9,
                        shape: "circle",
                        radius: 2,
                    },
                    xaxis: {
                        categories: polda_month,
                    },
                    tooltip: {
                        custom: function({
                            series,
                            seriesIndex,
                            dataPointIndex,
                            seriesName,
                            w
                        }) {
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                subbagdalopssebelumnya = subbagdalops[0];

                                if (subbagdalops[0] < subbagdalops[1]) {
                                    persentasesubbagdalops = 'Naik'
                                } else if (subbagdalops[0] > subbagdalops[1]) {
                                    persentasesubbagdalops = 'Turun'
                                } else {
                                    persentasesubbagdalops = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbagdalopssebelumnya = subbagdalops[1];
                                if (subbagdalops[1] < subbagdalops[2]) {
                                    persentasesubbagdalops = 'Naik'
                                } else if (subbagdalops[1] > subbagdalops[2]) {
                                    persentasesubbagdalops = 'Turun'
                                } else {
                                    persentasesubbagdalops = 'Sama'
                                }

                            }

                            return (
                                `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 36rem; height:10rem;">`:'<div style="width: 16rem; height:10rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                <div class="my-2  text-center"">   
                                                    <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-8 ms-1">
                                                            <span class="fw-bold">Total SUBBAG DALOPS</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbagdalopssebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total SUBBAG DALOPS</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagdalops[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesubbagdalops}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total SUBBAG DALOPS</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagdalops[dataPointIndex]}</span><br>
                                                            </div>
                                                    </div>
                                                </div>`}
                                            </div>
                                        </div>
                                    </div>`

                            );
                        }
                    }

                };

                var bagopssubbagdalopsyear = new ApexCharts(document.querySelector("#chartyear2"), bagopssubbagdalopsyear);
                bagopssubbagdalopsyear.render();


                var bagopssubbagkermayear = {
                    series: [{
                        name: 'SUBBAG KERMA',
                        type: 'line',
                        data: subbagkerma,
                        color: "#3CA55C"
                    }],
                    chart: {
                        height: 400,
                        type: 'line',
                        stacked: false
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: '55%',
                            endingShape: 'rounded',
                            dataLabels: {
                                position: 'top'
                            }
                        },
                    },
                    dataLabels: {
                        enabled: true,
                        style: {
                            colors: ['#333']
                        },
                        offsetY: -15
                    },
                    markers: {
                        size: 4,
                        colors: '#kkk',
                        fillOpacity: 0.9,
                        shape: "circle",
                        radius: 2,
                    },
                    xaxis: {
                        categories: polda_month,
                    },
                    tooltip: {
                        custom: function({
                            series,
                            seriesIndex,
                            dataPointIndex,
                            seriesName,
                            w
                        }) {
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                subbagkermasebelumnya = subbagkerma[0];

                                if (subbagkerma[0] < subbagkerma[1]) {
                                    persentasesubbagkerma = 'Naik'
                                } else if (subbagkerma[0] > subbagkerma[1]) {
                                    persentasesubbagkerma = 'Turun'
                                } else {
                                    persentasesubbagkerma = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbagkermasebelumnya = subbagkerma[1];
                                if (subbagkerma[1] < subbagkerma[2]) {
                                    persentasesubbagkerma = 'Naik'
                                } else if (subbagkerma[1] > subbagkerma[2]) {
                                    persentasesubbagkerma = 'Turun'
                                } else {
                                    persentasesubbagkerma = 'Sama'
                                }

                            }

                            return (
                                `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 36rem; height:10rem;">`:'<div style="width: 16rem; height:10rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                <div class="my-2  text-center"">   
                                                    <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-8 ms-1">
                                                            <span class="fw-bold">Total SUBBAG KERMA</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbagkermasebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total SUBBAG KERMA</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagkerma[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesubbagkerma}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total SUBBAG KERMA</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagkerma[dataPointIndex]}</span><br>
                                                            </div>
                                                    </div>
                                                </div>`}
                                            </div>
                                        </div>
                                    </div>`

                            );
                        }
                    }

                };

                var bagopssubbagkermayear = new ApexCharts(document.querySelector("#chartyear3"), bagopssubbagkermayear);
                bagopssubbagkermayear.render();


                var bagopssubbaganevyear = {
                    series: [{
                        name: 'SUBBAG ANEV',
                        type: 'line',
                        data: subbaganev,
                        color: "#EDF12D"
                    }],
                    chart: {
                        height: 400,
                        type: 'line',
                        stacked: false
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: '55%',
                            endingShape: 'rounded',
                            dataLabels: {
                                position: 'top'
                            }
                        },
                    },
                    dataLabels: {
                        enabled: true,
                        style: {
                            colors: ['#333']
                        },
                        offsetY: -15
                    },
                    markers: {
                        size: 4,
                        colors: '#kkk',
                        fillOpacity: 0.9,
                        shape: "circle",
                        radius: 2,
                    },
                    xaxis: {
                        categories: polda_month,
                    },
                    tooltip: {
                        custom: function({
                            series,
                            seriesIndex,
                            dataPointIndex,
                            seriesName,
                            w
                        }) {
                            if (w.globals.labels[dataPointIndex] == 2) {
                                bulansebelumnya = polda_month[0]
                                subbaganevsebelumnya = subbaganev[0];

                                if (subbaganev[0] < subbaganev[1]) {
                                    persentasesubbaganev = 'Naik'
                                } else if (subbaganev[0] > subbaganev[1]) {
                                    persentasesubbaganev = 'Turun'
                                } else {
                                    persentasesubbaganev = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbaganevsebelumnya = subbaganev[1];
                                if (subbaganev[1] < subbaganev[2]) {
                                    persentasesubbaganev = 'Naik'
                                } else if (subbaganev[1] > subbaganev[2]) {
                                    persentasesubbaganev = 'Turun'
                                } else {
                                    persentasesubbaganev = 'Sama'
                                }

                            }

                            return (
                                `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 36rem; height:10rem;">`:'<div style="width: 16rem; height:10rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                <div class="my-2  text-center"">   
                                                    <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-8 ms-1">
                                                            <span class="fw-bold">Total SUBBAG ANEV</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbaganevsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total SUBBAG ANEV</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbaganev[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesubbaganev}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total SUBBAG ANEV</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbaganev[dataPointIndex]}</span><br>
                                                            </div>
                                                    </div>
                                                </div>`}
                                            </div>
                                        </div>
                                    </div>`

                            );
                        }
                    }

                };

                var bagopssubbaganevyear = new ApexCharts(document.querySelector("#chartyear4"), bagopssubbaganevyear);
                bagopssubbaganevyear.render();
            }
        })
    }
</script> -->