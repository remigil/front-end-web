<div class="row">
    <div class="col-md-4 mb-1">
        <h4 style="text-transform: uppercase; color:#007DD8;">Statistik Nasional</h4>
    </div>
    <div class="col-md-3">
    </div>
</div>

<div class="col-md-12">
    <div class="row">
        <div class="col-md-3">
            <a href="<?= base_url('statistik_nasional/Lakalantas'); ?>">
                <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2 align-self-center">
                                <i class="bx bxs-car-crash ms-n2 mt-2 mb-2" style="font-size: 40px; color: #464646;"></i>
                            </div>
                            <div class="col-md-10 float-end">
                                <span class="fs-6 float-end" style="color:#464646;">
                                    <span class="fw-bold ">Total Kecelakaan </span>Lalu Lintas
                                </span>
                                <br><br>
                                <span class="fs-4 fw-bold float-end" style="color:#464646;" id="lakalantas"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="<?= base_url('statistik_nasional/Garlantas'); ?>">
                <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2 align-self-center">
                                <i class="bx bxs-car-crash ms-n2 mt-2 mb-2" style="font-size: 40px; color: #464646;"></i>
                            </div>
                            <div class="col-md-10 float-end">
                                <span class="fs-6 float-end" style="color:#464646;">
                                    <span class="fw-bold">Total Pelanggaran </span>Lalu Lintas
                                </span>
                                <br><br>
                                <span class="fs-4 fw-bold float-end" style="color:#464646;" id="garlantas"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="<?= base_url('statistik_nasional/Turjagwali'); ?>">
                <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2 align-self-center">
                                <!-- <iconify-icon icon="ic:baseline-control-camera" class="ms-n2 mt-2" style="font-size: 45px; color: #464646;"></iconify-icon> -->
                                <i class='bx bxs-id-card ms-n2' style="font-size: 40px; color: #464646;"></i>
                            </div>
                            <div class="col-md-10 float-end">
                                <span class="fs-6 float-end" style="color:#464646;">
                                    <span class="fw-bold">Total Turjagwali</span>
                                </span>
                                <br><br>
                                <span class="fs-4 fw-bold float-end" style="color:#464646;" id="turjagwali"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="<?= base_url('statistik_nasional/Ranmor'); ?>">
                <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2 align-self-center">
                                <img src="<?= base_url() ?>assets/dashboard/icon-ranmor.svg" alt="ranmor" width="60px">
                            </div>
                            <div class="col-md-10 float-end">
                                <span class="fs-6 float-end" style="color:#464646;">
                                    <span class="fw-bold">Total Kendaraan </span>Bermotor
                                </span>
                                <br><br>
                                <span class="fs-6 fw-bold float-end" style="color:#464646;" id="motor"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

    </div>
</div>
<div class="container-fluid" style="background:#E9E9E9">
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="container-fluid">

                <div class="row d-flex align-items-center">
                    <div class="col-md-12 mb-1 mt-3 text-center">
                        <span style="color:#007DD8;" class="text-uppercase fw-bold fs-1">Data Rekapitulasi Nasional</span>
                    </div>
                </div>

                <div class="row d-flex">
                    <div class="col-md-6 mt-3">
                        <h5>10 Polda Pelanggaran Lantas Tertinggi</h5>
                        <div class="mb-3">
                            <div class="card shadow-sm" style="border-radius: 30px; overflow: hidden;">
                                <table class="table table-bordered table-hover rounded">
                                    <thead class="" style="background-color:#007DD8; color:#fff;">
                                        <tr class="text-center">
                                            <th scope="col">No</th>
                                            <th scope="col">Polda</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Berat</th>
                                            <th scope="col">Sedang</th>
                                            <th scope="col">Ringan</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody-pelanggaran">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-3">
                        <h5>10 Polda Kecelakaan Tertinggi</h5>
                        <div class="mb-3">
                            <div class="card shadow-sm" style="border-radius: 30px; overflow: hidden;">
                                <table class="table table-bordered table-hover rounded">
                                    <thead class="" style="background-color:#007DD8; color:#fff;">
                                        <tr class="text-center">
                                            <th scope="col">No</th>
                                            <th scope="col">Polda</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Meninggal Dunia</th>
                                            <th scope="col">Luka Berat</th>
                                            <th scope="col">Luka Ringan</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody-kecelakaan">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row d-flex">
                    <div class="col-md-12 mt-3">
                        <div class="mb-3">
                            <section class="shadow-sm">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>10 Polda Turjagwali Tertinggi</h5>
                                            </div>
                                            <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                                <div class="main-chart">
                                                    <div id="chartturjagwali" style="width: 100vw"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    getStatistik();

    function getStatistik() {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>statistik_nasional/getStatistik",
            dataType: "JSON",
            success: function(result) {
                $("#overlay").fadeOut(300);

                $('#lakalantas').html(`<span class="fs-4" >${result.lakalantas}</span >`);
                $('#garlantas').html(`<span class="fs-4" >${result.garlantas}</span >`);
                $('#motor').html(`<span class="fs-4" >${result.motor}</span>`);
                $('#turjagwali').html(`<span class="fs-4" >${result.turjagwali}</span >`);
            }
        })
    }

    getGarlantas();

    function getGarlantas() {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>statistik_nasional/getGarlantas",
            dataType: "JSON",
            success: function(result) {
                $("#overlay").fadeOut(300);
                var table = '';

                for (let i = 0; i < result.length; i++) {
                    let x = parseInt(i)
                    let no = x + 1
                    table += `<tr class="text-center"> 
                                <td>  ${no}  </td> 
                                <td>  ${result[i].name_polda}  </td> 
                                <td>  ${result[i].total}  </td> 
                                <td>  ${result[i].pelanggaran_berat}  </td> 
                                <td>  ${result[i].pelanggaran_sedang}  </td> 
                                <td>  ${result[i].pelanggaran_ringan}  </td> 
                                </tr>`
                }
                $('#tbody-pelanggaran').html(table);
            }
        });
    }


    getLakalantas();

    function getLakalantas() {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>statistik_nasional/getLakalantas",
            dataType: "JSON",
            success: function(result) {
                $("#overlay").fadeOut(300);
                var table = '';

                for (let i = 0; i < result.length; i++) {
                    let x = parseInt(i)
                    let no = x + 1
                    table += `<tr class="text-center"> 
                                <td>  ${no}  </td> 
                                <td>  ${result[i].name_polda}  </td> 
                                <td>  ${result[i].insiden_kecelakaan}  </td> 
                                <td>  ${result[i].meninggal_dunia}  </td> 
                                <td>  ${result[i].luka_berat}  </td> 
                                <td>  ${result[i].luka_ringan}  </td> 
                                </tr>`
                }
                $('#tbody-kecelakaan').html(table);
            }
        })
    }


    getStatistik();

    function getStatistik() {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>statistik_nasional/getStatistik",
            dataType: "JSON",
            success: function(result) {
                $("#overlay").fadeOut(300);

                $('#lakalantas').html(`<span class="fs-4" >${result.lakalantas}</span >`);
                $('#garlantas').html(`<span class="fs-4" >${result.garlantas}</span >`);
                $('#motor').html(`<span class="fs-4" >${result.motor}</span>`);
                $('#turjagwali').html(`<span class="fs-4" >${result.turjagwali}</span >`);
            }
        })
    }


    getTurjagwali();

    function getTurjagwali() {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>statistik_nasional/getTurjagwali",
            dataType: "JSON",
            success: function(result) {
                $("#overlay").fadeOut(300);
                console.log(result)
                var turjagwali = {
                    series: [{
                        name: 'Pengaturan',
                        type: 'column',
                        data: result.polda_pengaturan,
                        color: "#11347A"
                    }, {
                        name: 'Pengawalan',
                        type: 'column',
                        data: result.polda_pengawalan,
                        color: "#CB2D3E"
                    }, {
                        name: 'Patroli',
                        type: 'column',
                        data: result.polda_patroli,
                        color: "#E8D42F"
                    }, {
                        name: 'Penjagaan',
                        type: 'column',
                        data: result.polda_penjagaan,
                        color: "#346EFA"
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

                    stroke: {
                        show: true,
                        width: [1, 1, 4, 4],
                        colors: ['transparent']
                    },
                    xaxis: {
                        categories: result.polda_name,
                    },
                    yaxis: [{
                        axisTicks: {
                            show: false,
                        },
                        axisBorder: {
                            show: false,
                            color: '#008FFB'
                        },
                        // labels: {
                        //     style: {
                        //         colors: '#008FFB',
                        //     }
                        // },


                    }, ],
                };

                var turjagwali = new ApexCharts(document.querySelector("#chartturjagwali"), turjagwali);
                turjagwali.render();
            }
        })
    }
</script>