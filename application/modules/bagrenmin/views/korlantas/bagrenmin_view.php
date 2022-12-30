<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 align-self-center">
            <div id="nama">
                <div style="display: flex;">
                    <?php if ($this->session->userdata['role'] == 'KaBagOps' || $this->session->userdata['role'] == 'Kakorlantas') { ?>
                        <h3><a href="<?= base_url('dashboard') ?>" style="color:#007DD8 ;"><i class="fas fa-less-than"></i>|</a></h3>
                        &nbsp;&nbsp; <h3 style="text-transform: uppercase; color:#007DD8;"> Bagrenmin</h3>
                    <?php } else { ?>
                        <h3 style="text-transform: uppercase; color:#007DD8;"> Bagrenmin</h3>
                    <?php } ?>
                </div>
            </div>
            <p>Today is <?= date('l, j F Y') ?></p>
        </div>
        <!-- <?php $mobile = detect_mobile();
                if ($mobile === true) { ?>
            <div class="col-md-12" style="margin-left: -15px;">
                <button type="button" class="btn btn-primary ms-3" style=" border: 0.5px solid #0275d8; height:-20px" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <iconify-icon icon="mdi:file-document-multiple"></iconify-icon>
                </button>
                <a href="http://34.143.227.90:3001/v1/laporan_harian/export_laphar" class="text-center"><button class="btn btn-outline-primary" style="width: 200px; border-color:#007DD8;">Export Laporan</button></a>
            </div>
        <?php } else { ?>
            <div class="col-md-1 text-end align-self-center">
                <button type="button" class="btn btn-primary ms-3" style=" border: 0.5px solid #0275d8; height:-20px" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <iconify-icon icon="mdi:file-document-multiple"></iconify-icon>
                </button>
            </div>
            <div class="col-md-3 text-end align-self-center">
                <a href="http://34.143.227.90:3001/v1/laporan_harian/export_laphar" class="text-center"><button class="btn btn-outline-primary" style="width: 200px; border-color:#007DD8;">Export Laporan</button></a>
            </div>
        <?php } ?> -->
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-headline">
                <div class="card-body row">
                    <h2 class="text-center" style="text-transform: uppercase;">Data SDM Personel Lalu Lintas Seluruh Indonesia</h2>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="text-center">SDM POLANTAS</h5>
                            <table class="table table-bordered table-hover" id="tableLakaYear" style="background:white; ">
                                <thead style="background-color:#0007D8; color:#fff;">
                                    <tr class="text-center">
                                        <th scope="col">Polda</th>
                                        <th scope="col">Irjen</th>
                                        <th scope="col">Brigjen</th>
                                        <th scope="col">KBP</th>
                                        <th scope="col">AKBP</th>
                                        <th scope="col">KP</th>
                                        <th scope="col">AKP</th>
                                        <th scope="col">IPTU</th>
                                        <th scope="col">IPDA</th>
                                        <th scope="col">AIPTU</th>
                                        <th scope="col">AIPDA</th>
                                        <th scope="col">BRIPKA</th>
                                        <th scope="col">BRIGDR</th>
                                        <th scope="col">BRIPTU</th>
                                        <th scope="col">BRIPDA</th>
                                        <th scope="col">JUMLAH</th>
                                        <th scope="col">PNS</th>
                                        <th scope="col">TOTAL</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody-lakaYear">
                                    <tr>
                                        <td style="text-align:center ; vertical-align:middle" scope="col">Korlantas Polri</td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col">1</td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col">3</td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col">27</td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col">27</td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col">32</td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col">93</td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col">0</td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col">0</td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col">406</td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col">0</td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col">0</td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col">0</td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col">0</td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col">0</td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col">589</td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col">125</td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col">714</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center ; vertical-align:middle" scope="col">Pusdik Lantas</td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col">0</td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col">0</td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col">1</td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col">9</td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col">19</td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col">53</td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col">0</td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col">0</td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col">16</td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col">0</td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col">0</td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col">0</td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col">0</td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col">0</td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col">131</td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col">50</td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col">181</td>
                                    </tr>
                                    <?php foreach ($data['sdm_polantas'] as $key) : ?>
                                        <?php $jumlah = ($key['polda_name'] + $key['irjen'] + $key['brigjen'] + $key['kbp'] + $key['akbp'] + $key['kp'] + $key['akp'] + $key['iptu'] +  $key['ipda'] +  $key['aiptu'] + $key['aipda'] + $key['bripka'] + $key['brigdr'] + $key['briptu'] + $key['bripda']); ?>
                                        <?php $total = ($key['polda_name'] + $key['irjen'] + $key['brigjen'] + $key['kbp'] + $key['akbp'] + $key['kp'] + $key['akp'] + $key['iptu'] +  $key['ipda'] +  $key['aiptu'] + $key['aipda'] + $key['bripka'] + $key['brigdr'] + $key['briptu'] + $key['bripda']) + $key['pns']; ?>

                                        <?php $irjen += $key['irjen'];
                                        $brigjen += $key['brigjen'];
                                        $kbp += $key['kbp'];
                                        $akbp += $key['akbp'];
                                        $kp += $key['kp'];
                                        $akp += $key['akp'];
                                        $aiptu += $key['iptu'];
                                        $ipda +=  $key['ipda'];
                                        $aiptu +=  $key['aiptu'];
                                        $aipda += $key['aipda'];
                                        $bripka += $key['bripka'];
                                        $brigdr += $key['brigdr'];
                                        $briptu += $key['briptu'];
                                        $bripda += $key['bripda'];
                                        $pns += $key['pns'];
                                        $jumlah_jumlah += $jumlah;
                                        $total_total += $total;
                                        ?>

                                        <tr>
                                            <td style="text-align:center ; vertical-align:middle" scope="col"><?= $key['name_polda'] ?></td>
                                            <td style="text-align:center ; vertical-align:middle" scope="col"><?= $key['irjen'] ?></td>
                                            <td style="text-align:center ; vertical-align:middle" scope="col"><?= $key['brigjen'] ?></td>
                                            <td style="text-align:center ; vertical-align:middle" scope="col"><?= $key['kbp'] ?></td>
                                            <td style="text-align:center ; vertical-align:middle" scope="col"><?= $key['akbp'] ?></td>
                                            <td style="text-align:center ; vertical-align:middle" scope="col"><?= $key['kp'] ?></td>
                                            <td style="text-align:center ; vertical-align:middle" scope="col"><?= $key['akp'] ?></td>
                                            <td style="text-align:center ; vertical-align:middle" scope="col"><?= $key['iptu'] ?></td>
                                            <td style="text-align:center ; vertical-align:middle" scope="col"><?= $key['ipda'] ?></td>
                                            <td style="text-align:center ; vertical-align:middle" scope="col"><?= $key['aiptu'] ?></td>
                                            <td style="text-align:center ; vertical-align:middle" scope="col"><?= $key['aipda'] ?></td>
                                            <td style="text-align:center ; vertical-align:middle" scope="col"><?= $key['bripka'] ?></td>
                                            <td style="text-align:center ; vertical-align:middle" scope="col"><?= $key['brigdr'] ?></td>
                                            <td style="text-align:center ; vertical-align:middle" scope="col"><?= $key['briptu'] ?></td>
                                            <td style="text-align:center ; vertical-align:middle" scope="col"><?= $key['bripda'] ?></td>
                                            <td style="text-align:center ; vertical-align:middle" scope="col"><?= $jumlah ?></td>
                                            <td style="text-align:center ; vertical-align:middle" scope="col"><?= $key['pns'] ?></td>
                                            <td style="text-align:center ; vertical-align:middle" scope="col"><?= $total ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot style="background-color:#0007D8; color:#fff;">
                                    <tr>
                                        <td style="text-align:center ; vertical-align:middle" scope="col">Total</td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col"><?= $irjen + 1 ?></td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col"><?= $brigjen + 3 ?></td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col"><?= $kbp + 27 + 1 ?></td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col"><?= $akbp + 27 + 9 ?></td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col"><?= $kp + 32 + 19 ?></td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col"><?= $akp + 93 + 53 ?></td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col"><?= $iptu ?></td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col"><?= $ipda ?></td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col"><?= $aiptu + 406 + 16 ?></td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col"><?= $aipda ?></td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col"><?= $bripka ?></td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col"><?= $brigdr ?></td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col"><?= $briptu ?></td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col"><?= $bripda ?></td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col"><?= $jumlah_jumlah + 589 + 131 ?></td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col"><?= $pns + 50 ?></td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col"><?= $total_total + 714 + 181 ?></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card card-headline">
                <div class="card-body row">
                    <h2 class="text-center" style="text-transform: uppercase;">Data Perencanaan dan Anggaran Korlantas Polri</h2>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="text-center">Data Perencanaan dan Anggaran Seluruh Indonesia</h5>
                            <table class="table table-bordered table-hover" id="tableLakaYear" style="background:white; ">
                                <thead style="background-color:#0007D8; color:#fff;">
                                    <tr class="text-center">
                                        <th scope="col">Polda</th>
                                        <th scope="col">Program Kerja</th>
                                        <th scope="col">Belanja Barang</th>
                                        <th scope="col">Belanja Modal</th>
                                        <th scope="col">Gaji Pegawai</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody-lakaYear">
                                    <tr>
                                        <td style="text-align:center ; vertical-align:middle" scope="col">Korlantas Polri</td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col">86</td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col">86</td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col">99</td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col">86</td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col">357</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center ; vertical-align:middle" scope="col">Pusdik Lantas</td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col">21</td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col">21</td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col">46</td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col">21</td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col">109</td>
                                    </tr>
                                    <?php foreach ($data['rengar'] as $key) : ?>
                                        <?php $jumlah = ($key['program_kegiatan'] + $key['belanja_barang'] + $key['belanja_modal'] + $key['gaji_pegawai']); ?>

                                        <?php $program_kegiatan += $key['program_kegiatan'];
                                        $belanja_barang += $key['belanja_barang'];
                                        $belanja_modal += $key['belanja_modal'];
                                        $gaji_pegawai += $key['gaji_pegawai'];
                                        $jumlah_jumlah += $jumlah;
                                        ?>

                                        <tr>
                                            <td style="text-align:center ; vertical-align:middle" scope="col"><?= $key['name_polda'] ?></td>
                                            <td style="text-align:center ; vertical-align:middle" scope="col"><?= $key['program_kegiatan'] ?></td>
                                            <td style="text-align:center ; vertical-align:middle" scope="col"><?= $key['belanja_barang'] ?></td>
                                            <td style="text-align:center ; vertical-align:middle" scope="col"><?= $key['belanja_modal'] ?></td>
                                            <td style="text-align:center ; vertical-align:middle" scope="col"><?= $key['gaji_pegawai'] ?></td>
                                            <td style="text-align:center ; vertical-align:middle" scope="col"><?= $jumlah ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot style="background-color:#0007D8; color:#fff;">
                                    <tr>
                                        <td style="text-align:center ; vertical-align:middle" scope="col">Total</td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col"><?= $program_kegiatan + 86 + 21 ?></td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col"><?= $belanja_barang + 86 + 21 ?></td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col"><?= $belanja_modal + 99 + 46 ?></td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col"><?= $gaji_pegawai + 86 + 21 ?></td>
                                        <td style="text-align:center ; vertical-align:middle" scope="col"><?= $jumlah_jumlah + 357 + 109 ?></td>

                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                    <img src="<?= base_url('assets/fe/strukturorganisasi/strukturbagrenmin.png'); ?>" alt="" srcset="">
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
        getSDM()
    })

    function getSDM() {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>bagrenmin/getSDM",
            dataType: "JSON",
            success: function(results) {
                $("#chart1").html(`<div id="sdmchart"></div>`);
                var options_sdm = {
                    series: [{
                        name: 'IRJEN',
                        type: 'column',
                        data: results.irjen,
                        color: "#11347A"
                    }, {
                        name: 'BRIGJEN',
                        type: 'column',
                        data: results.brigjen,
                        color: "#CB2D3E"
                    }, {
                        name: 'KBP',
                        type: 'column',
                        data: results.kbp,
                        color: "#E8D42F"
                    }, {
                        name: 'AKBP',
                        type: 'column',
                        data: results.akbp,
                        color: "#3CA55C"

                    }, {
                        name: 'KP',
                        type: 'column',
                        data: results.kp,
                        color: "#3CA15C"

                    }, {
                        name: 'AKP',
                        type: 'column',
                        data: results.akp,
                        color: "#3BA55C"

                    }, {
                        name: 'IPTU',
                        type: 'column',
                        data: results.iptu,
                        color: "#3BD55C"

                    }, {
                        name: 'IPDA',
                        type: 'column',
                        data: results.ipda,
                        color: "#3BD55C"

                    }, {
                        name: 'AIPTU',
                        type: 'column',
                        data: results.aiptu,
                        color: "#3BD55C"

                    }, {
                        name: 'AIPDA',
                        type: 'column',
                        data: results.aipda,
                        color: "#3BD55C"

                    }, {
                        name: 'BRIPKA',
                        type: 'column',
                        data: results.bripka,
                        color: "#3BD51"

                    }, {
                        name: 'BRIGDR',
                        type: 'column',
                        data: results.brigdr,
                        color: "#3BD51"

                    }, {
                        name: 'BRIPTU',
                        type: 'column',
                        data: results.briptu,
                        color: "#3BD51"

                    }, {
                        name: 'BRIPDA',
                        type: 'column',
                        data: results.bripda,
                        color: "#3BD512"

                    }, {
                        name: 'PNS',
                        type: 'column',
                        data: results.bripda,
                        color: "#3CE51"

                    }],
                    chart: {
                        height: '400',
                        type: 'line',
                        stacked: false,
                    },
                    tooltip: {
                        fixed: {
                            enabled: true
                        }
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: '50%%',
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
                        categories: results.polda_name,
                        labels: {
                            show: true,
                            style: {
                                colors: 'red',
                                fontSize: '18px',
                                fontWeight: 400,

                            }
                        },
                        tickPlacement: 'between'
                    },
                    yaxis: [{
                        axisTicks: {
                            show: false,
                        },
                        axisBorder: {
                            show: false,
                            color: '#008FFB'
                        },
                        labels: {
                            style: {
                                colors: '#008FFB',
                            }
                        },


                    }, ],

                };

                var sdm = new ApexCharts(document.querySelector("#sdmchart"), options_sdm);
                sdm.render();
            }
        })
    }
</script>
<!-- <script>
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
    $("#chartdaysubbagren").html(`<div id="chartday1"></div>`);
    $("#chartdaysubbagsdm").html(`<div id="chartday2"></div>`);
    $("#chartdaysubbagada").html(`<div id="chartday3"></div>`);
    $("#chartdaysubbaglog").html(`<div id="chartday4"></div>`);

    // Month
    $("#chartmonthsubbagren").html(`<div id="chart"></div>`);
    $("#chartmonthsubbagsdm").html(`<div id="chart2"></div>`);
    $("#chartmonthsubbagada").html(`<div id="chart3"></div>`);
    $("#chartmonthsubbaglog").html(`<div id="chart4"></div>`);

    // Year
    $("#chartyearsubbagren").html(`<div id="chartyear"></div>`);
    $("#chartyearsubbagsdm").html(`<div id="chartyear2"></div>`);
    $("#chartyearsubbagada").html(`<div id="chartyear3"></div>`);
    $("#chartyearsubbaglog").html(`<div id="chartyear4"></div>`);


    getStatistik();

    function getStatistik() {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>bagrenmin/getStatistik",
            dataType: "JSON",
            success: function(result) {
                $("#overlay").fadeOut(300);
                $('#subbagren').html(`<span class="fs-4" >${result.subbagren}</span >`);
                $('#subbagsdm').html(`<span class="fs-4" >${result.subbagsdm}</span >`);
                $('#subbagada').html(`<span class="fs-4" >${result.subbagada}</span >`);
                $('#subbaglog').html(`<span class="fs-4" >${result.subbaglog}</span>`);
            }
        })
    }

    getBagrenminday(today, seven_daysAgo)
    getBagrenminmonth(firstDay, lastDay)
    getBagrenminyear(three_yearAgo, lastDay)
    // Day
    function getBagrenminday(today, seven_daysAgo) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>bagrenmin/getChartBagrenmin",
            data: {
                start_date: seven_daysAgo,
                end_date: today,
                filter: 'day'
            },
            dataType: "JSON",
            success: function(result) {
                let polda_month = result.data.polda_month
                let subbagren = result.data.subbagren
                let subbagsdm = result.data.subbagsdm
                let subbagada = result.data.subbagada
                let subbaglog = result.data.subbaglog
                $('#titlesubbagrenday').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG REN HARIAN</h4>`);
                $('#titlesubbagsdmday').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG SDM HARIAN</h4>`);
                $('#titlesubbagadaday').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG ADA HARIAN</h4>`);
                $('#titlesubbaglogday').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG LOG HARIAN</h4>`);

                var bagrenminsubbagrenday = {
                    series: [{
                        name: 'subbagren',
                        type: 'line',
                        data: subbagren,
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
                                subbagrensebelumnya = subbagren[0];

                                if (subbagren[0] < subbagren[1]) {
                                    persentasesubbagren = 'Naik'
                                } else if (subbagren[0] > subbagren[1]) {
                                    persentasesubbagren = 'Turun'
                                } else {
                                    persentasesubbagren = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbagrensebelumnya = subbagren[1];
                                if (subbagren[1] < subbagren[2]) {
                                    persentasesubbagren = 'Naik'
                                } else if (subbagren[1] > subbagren[2]) {
                                    persentasesubbagren = 'Turun'
                                } else {
                                    persentasesubbagren = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                subbagrensebelumnya = subbagren[2];
                                if (subbagren[2] < subbagren[3]) {
                                    persentasesubbagren = 'Naik'
                                } else if (subbagren[2] > subbagren[3]) {
                                    persentasesubbagren = 'Turun'
                                } else {
                                    persentasesubbagren = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                subbagrensebelumnya = subbagren[3];
                                if (subbagren[3] < subbagren[4]) {
                                    persentasesubbagren = 'Naik'
                                } else if (subbagren[3] > subbagren[4]) {
                                    persentasesubbagren = 'Turun'
                                } else {
                                    persentasesubbagren = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                subbagrensebelumnya = subbagren[4];
                                if (subbagren[4] < subbagren[5]) {
                                    persentasesubbagren = 'Naik'
                                } else if (subbagren[4] > subbagren[5]) {
                                    persentasesubbagren = 'Turun'
                                } else {
                                    persentasesubbagren = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                subbagrensebelumnya = subbagren[5];
                                if (subbagren[5] < subbagren[6]) {
                                    persentasesubbagren = 'Naik'
                                } else if (subbagren[5] > subbagren[6]) {
                                    persentasesubbagren = 'Turun'
                                } else {
                                    persentasesubbagren = 'Sama'
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
                                                            <span class="fw-bold">Total subbagren</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbagrensebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total subbagren</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagren[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesubbagren}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total subbagren</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagren[dataPointIndex]}</span><br>
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

                var bagrenminsubbagrenday = new ApexCharts(document.querySelector("#chartday1"), bagrenminsubbagrenday);
                bagrenminsubbagrenday.render();


                var bagrenminsubbagsdmday = {
                    series: [{
                        name: 'subbagsdm',
                        type: 'line',
                        data: subbagsdm,
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
                                subbagsdmsebelumnya = subbagsdm[0];

                                if (subbagsdm[0] < subbagsdm[1]) {
                                    persentasesubbagsdm = 'Naik'
                                } else if (subbagsdm[0] > subbagsdm[1]) {
                                    persentasesubbagsdm = 'Turun'
                                } else {
                                    persentasesubbagsdm = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbagsdmsebelumnya = subbagsdm[1];
                                if (subbagsdm[1] < subbagsdm[2]) {
                                    persentasesubbagsdm = 'Naik'
                                } else if (subbagsdm[1] > subbagsdm[2]) {
                                    persentasesubbagsdm = 'Turun'
                                } else {
                                    persentasesubbagsdm = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                subbagsdmsebelumnya = subbagsdm[2];
                                if (subbagsdm[2] < subbagsdm[3]) {
                                    persentasesubbagsdm = 'Naik'
                                } else if (subbagsdm[2] > subbagsdm[3]) {
                                    persentasesubbagsdm = 'Turun'
                                } else {
                                    persentasesubbagsdm = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                subbagsdmsebelumnya = subbagsdm[3];
                                if (subbagsdm[3] < subbagsdm[4]) {
                                    persentasesubbagsdm = 'Naik'
                                } else if (subbagsdm[3] > subbagsdm[4]) {
                                    persentasesubbagsdm = 'Turun'
                                } else {
                                    persentasesubbagsdm = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[5]
                                subbagsdmsebelumnya = subbagsdm[4];
                                if (subbagsdm[4] < subbagsdm[5]) {
                                    persentasesubbagsdm = 'Naik'
                                } else if (subbagsdm[4] > subbagsdm[5]) {
                                    persentasesubbagsdm = 'Turun'
                                } else {
                                    persentasesubbagsdm = 'Sama'
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
                                                            <span class="fw-bold">Total subbagsdm</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbagsdmsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total subbagsdm</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagsdm[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesubbagsdm}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total subbagsdm</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagsdm[dataPointIndex]}</span><br>
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

                var bagrenminsubbagsdmday = new ApexCharts(document.querySelector("#chartday2"), bagrenminsubbagsdmday);
                bagrenminsubbagsdmday.render();


                var bagrenminsubbagadaday = {
                    series: [{
                        name: 'subbagada',
                        type: 'line',
                        data: subbagada,
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
                                subbagadasebelumnya = subbagada[0];

                                if (subbagada[0] < subbagada[1]) {
                                    persentasesubbagada = 'Naik'
                                } else if (subbagada[0] > subbagada[1]) {
                                    persentasesubbagada = 'Turun'
                                } else {
                                    persentasesubbagada = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbagadasebelumnya = subbagada[1];
                                if (subbagada[1] < subbagada[2]) {
                                    persentasesubbagada = 'Naik'
                                } else if (subbagada[1] > subbagada[2]) {
                                    persentasesubbagada = 'Turun'
                                } else {
                                    persentasesubbagada = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                subbagadasebelumnya = subbagada[2];
                                if (subbagada[2] < subbagada[3]) {
                                    persentasesubbagada = 'Naik'
                                } else if (subbagada[2] > subbagada[3]) {
                                    persentasesubbagada = 'Turun'
                                } else {
                                    persentasesubbagada = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                subbagadasebelumnya = subbagada[3];
                                if (subbagada[3] < subbagada[4]) {
                                    persentasesubbagada = 'Naik'
                                } else if (subbagada[3] > subbagada[4]) {
                                    persentasesubbagada = 'Turun'
                                } else {
                                    persentasesubbagada = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                subbagadasebelumnya = subbagada[4];
                                if (subbagada[4] < subbagada[5]) {
                                    persentasesubbagada = 'Naik'
                                } else if (subbagada[4] > subbagada[5]) {
                                    persentasesubbagada = 'Turun'
                                } else {
                                    persentasesubbagada = 'Sama'
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
                                                            <span class="fw-bold">Total subbagada</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbagadasebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total subbagada</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagada[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesubbagada}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total subbagada</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagada[dataPointIndex]}</span><br>
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

                var bagrenminsubbagadaday = new ApexCharts(document.querySelector("#chartday3"), bagrenminsubbagadaday);
                bagrenminsubbagadaday.render();


                var bagrenminsubbaglogday = {
                    series: [{
                        name: 'subbaglog',
                        type: 'line',
                        data: subbaglog,
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
                                subbaglogsebelumnya = subbaglog[0];

                                if (subbaglog[0] < subbaglog[1]) {
                                    subbaglog = 'Naik'
                                } else if (subbaglog[0] > subbaglog[1]) {
                                    subbaglog = 'Turun'
                                } else {
                                    subbaglog = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbaglogsebelumnya = subbaglog[1];
                                if (subbaglog[1] < subbaglog[2]) {
                                    subbaglog = 'Naik'
                                } else if (subbaglog[1] > subbaglog[2]) {
                                    subbaglog = 'Turun'
                                } else {
                                    subbaglog = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                subbaglogsebelumnya = subbaglog[2];
                                if (subbaglog[2] < subbaglog[3]) {
                                    subbaglog = 'Naik'
                                } else if (subbaglog[2] > subbaglog[3]) {
                                    subbaglog = 'Turun'
                                } else {
                                    subbaglog = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                subbaglogsebelumnya = subbaglog[3];
                                if (subbaglog[3] < subbaglog[4]) {
                                    subbaglog = 'Naik'
                                } else if (subbaglog[3] > subbaglog[4]) {
                                    subbaglog = 'Turun'
                                } else {
                                    subbaglog = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                subbaglogsebelumnya = subbaglog[4];
                                if (subbaglog[4] < subbaglog[5]) {
                                    subbaglog = 'Naik'
                                } else if (subbaglog[4] > subbaglog[5]) {
                                    subbaglog = 'Turun'
                                } else {
                                    subbaglog = 'Sama'
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
                                                            <span class="fw-bold">Total subbaglog</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbaglogsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total subbaglog</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbaglog[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${subbaglog}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total subbaglog</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbaglog[dataPointIndex]}</span><br>
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

                var bagrenminsubbaglogday = new ApexCharts(document.querySelector("#chartday4"), bagrenminsubbaglogday);
                bagrenminsubbaglogday.render();
            }
        })
    }


    // // Month
    function getBagrenminmonth(firstDay, lastDay) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>bagrenmin/getChartBagrenmin",
            data: {
                start_date: firstDay,
                end_date: lastDay,
                filter: 'month'
            },
            dataType: "JSON",
            success: function(result) {
                let polda_month = result.data.polda_month
                let subbagren = result.data.subbagren
                let subbagsdm = result.data.subbagsdm
                let subbagada = result.data.subbagada
                let subbaglog = result.data.subbaglog
                $('#titlesubbagrenmonth').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG REN BULANAN</h4>`);
                $('#titlesubbagsdmmonth').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG SDM BULANAN</h4>`);
                $('#titlesubbagadamonth').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG ADA BULANAN</h4>`);
                $('#titlesubbaglogmonth').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG LOG BULANAN</h4>`);

                var bagrenminsubbagrenmonth = {
                    series: [{
                        name: 'subbagren',
                        type: 'line',
                        data: subbagren,
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
                                subbagrensebelumnya = subbagren[0];

                                if (subbagren[0] < subbagren[1]) {
                                    persentasesubbagren = 'Naik'
                                } else if (subbagren[0] > subbagren[1]) {
                                    persentasesubbagren = 'Turun'
                                } else {
                                    persentasesubbagren = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbagrensebelumnya = subbagren[1];
                                if (subbagren[1] < subbagren[2]) {
                                    persentasesubbagren = 'Naik'
                                } else if (subbagren[1] > subbagren[2]) {
                                    persentasesubbagren = 'Turun'
                                } else {
                                    persentasesubbagren = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                subbagrensebelumnya = subbagren[2];
                                if (subbagren[2] < subbagren[3]) {
                                    persentasesubbagren = 'Naik'
                                } else if (subbagren[2] > subbagren[3]) {
                                    persentasesubbagren = 'Turun'
                                } else {
                                    persentasesubbagren = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                subbagrensebelumnya = subbagren[3];
                                if (subbagren[3] < subbagren[4]) {
                                    persentasesubbagren = 'Naik'
                                } else if (subbagren[3] > subbagren[4]) {
                                    persentasesubbagren = 'Turun'
                                } else {
                                    persentasesubbagren = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                subbagrensebelumnya = subbagren[4];
                                if (subbagren[4] < subbagren[5]) {
                                    persentasesubbagren = 'Naik'
                                } else if (subbagren[4] > subbagren[5]) {
                                    persentasesubbagren = 'Turun'
                                } else {
                                    persentasesubbagren = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                subbagrensebelumnya = subbagren[5];
                                if (subbagren[5] < subbagren[6]) {
                                    persentasesubbagren = 'Naik'
                                } else if (subbagren[5] > subbagren[6]) {
                                    persentasesubbagren = 'Turun'
                                } else {
                                    persentasesubbagren = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                subbagrensebelumnya = subbagren[6];
                                if (subbagren[6] < subbagren[7]) {
                                    persentasesubbagren = 'Naik'
                                } else if (subbagren[6] > subbagren[7]) {
                                    persentasesubbagren = 'Turun'
                                } else {
                                    persentasesubbagren = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                subbagrensebelumnya = subbagren[7];
                                if (subbagren[7] < subbagren[8]) {
                                    persentasesubbagren = 'Naik'
                                } else if (subbagren[7] > subbagren[8]) {
                                    persentasesubbagren = 'Turun'
                                } else {
                                    persentasesubbagren = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                subbagrensebelumnya = subbagren[8];
                                if (subbagren[8] < subbagren[9]) {
                                    persentasesubbagren = 'Naik'
                                } else if (subbagren[8] > subbagren[9]) {
                                    persentasesubbagren = 'Turun'
                                } else {
                                    persentasesubbagren = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                subbagrensebelumnya = subbagren[9];
                                if (subbagren[9] < subbagren[10]) {
                                    persentasesubbagren = 'Naik'
                                } else if (subbagren[9] > subbagren[10]) {
                                    persentasesubbagren = 'Turun'
                                } else {
                                    persentasesubbagren = `Sama`
                                }

                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                subbagrensebelumnya = subbagren[10];
                                if (subbagren[10] < subbagren[11]) {
                                    persentasesubbagren = 'Naik'
                                } else if (subbagren[10] > subbagren[11]) {
                                    persentasesubbagren = 'Turun'
                                } else {
                                    persentasesubbagren = 'Sama'
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
                                                            <span class="fw-bold">Total subbagren</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbagrensebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total subbagren</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagren[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesubbagren}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total subbagren</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagren[dataPointIndex]}</span><br>
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

                var bagrenminsubbagrenmonth = new ApexCharts(document.querySelector("#chart"), bagrenminsubbagrenmonth);
                bagrenminsubbagrenmonth.render();


                var bagrenminsubbagsdmmonth = {
                    series: [{
                        name: 'subbagsdm',
                        type: 'line',
                        data: subbagsdm,
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
                                subbagsdmsebelumnya = subbagsdm[0];

                                if (subbagsdm[0] < subbagsdm[1]) {
                                    persentasesubbagsdm = 'Naik'
                                } else if (subbagsdm[0] > subbagsdm[1]) {
                                    persentasesubbagsdm = 'Turun'
                                } else {
                                    persentasesubbagsdm = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbagsdmsebelumnya = subbagsdm[1];
                                if (subbagsdm[1] < subbagsdm[2]) {
                                    persentasesubbagsdm = 'Naik'
                                } else if (subbagsdm[1] > subbagsdm[2]) {
                                    persentasesubbagsdm = 'Turun'
                                } else {
                                    persentasesubbagsdm = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                subbagsdmsebelumnya = subbagsdm[2];
                                if (subbagsdm[2] < subbagsdm[3]) {
                                    persentasesubbagsdm = 'Naik'
                                } else if (subbagsdm[2] > subbagsdm[3]) {
                                    persentasesubbagsdm = 'Turun'
                                } else {
                                    persentasesubbagsdm = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                subbagsdmsebelumnya = subbagsdm[3];
                                if (subbagsdm[3] < subbagsdm[4]) {
                                    persentasesubbagsdm = 'Naik'
                                } else if (subbagsdm[3] > subbagsdm[4]) {
                                    persentasesubbagsdm = 'Turun'
                                } else {
                                    persentasesubbagsdm = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                subbagsdmsebelumnya = subbagsdm[4];
                                if (subbagsdm[4] < subbagsdm[5]) {
                                    persentasesubbagsdm = 'Naik'
                                } else if (subbagsdm[4] > subbagsdm[5]) {
                                    persentasesubbagsdm = 'Turun'
                                } else {
                                    persentasesubbagsdm = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                subbagsdmsebelumnya = subbagsdm[5];
                                if (subbagsdm[5] < subbagsdm[6]) {
                                    persentasesubbagsdm = 'Naik'
                                } else if (subbagsdm[5] > subbagsdm[6]) {
                                    persentasesubbagsdm = 'Turun'
                                } else {
                                    persentasesubbagsdm = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                subbagsdmsebelumnya = subbagsdm[6];
                                if (subbagsdm[6] < subbagsdm[7]) {
                                    persentasesubbagsdm = 'Naik'
                                } else if (subbagsdm[6] > subbagsdm[7]) {
                                    persentasesubbagsdm = 'Turun'
                                } else {
                                    persentasesubbagsdm = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                subbagsdmsebelumnya = subbagsdm[7];
                                if (subbagsdm[7] < subbagsdm[8]) {
                                    persentasesubbagsdm = 'Naik'
                                } else if (subbagsdm[7] > subbagsdm[8]) {
                                    persentasesubbagsdm = 'Turun'
                                } else {
                                    persentasesubbagsdm = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                subbagsdmsebelumnya = subbagsdm[8];
                                if (subbagsdm[8] < subbagsdm[9]) {
                                    persentasesubbagsdm = 'Naik'
                                } else if (subbagsdm[8] > subbagsdm[9]) {
                                    persentasesubbagsdm = 'Turun'
                                } else {
                                    persentasesubbagsdm = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                subbagsdmsebelumnya = subbagsdm[9];
                                if (subbagsdm[9] < subbagsdm[10]) {
                                    persentasesubbagsdm = 'Naik'
                                } else if (subbagsdm[9] > subbagsdm[10]) {
                                    persentasesubbagsdm = 'Turun'
                                } else {
                                    persentasesubbagsdm = `Sama`
                                }

                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                subbagsdmsebelumnya = subbagsdm[10];
                                if (subbagsdm[10] < subbagsdm[11]) {
                                    persentasesubbagsdm = 'Naik'
                                } else if (subbagsdm[10] > subbagsdm[11]) {
                                    persentasesubbagsdm = 'Turun'
                                } else {
                                    persentasesubbagsdm = 'Sama'
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
                                                            <span class="fw-bold">Total subbagsdm</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbagsdmsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total subbagsdm</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagsdm[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesubbagsdm}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total subbagsdm</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagsdm[dataPointIndex]}</span><br>
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

                var bagrenminsubbagsdmmonth = new ApexCharts(document.querySelector("#chart2"), bagrenminsubbagsdmmonth);
                bagrenminsubbagsdmmonth.render();


                var bagrenminsubbagadamonth = {
                    series: [{
                        name: 'subbagada',
                        type: 'line',
                        data: subbagada,
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
                                subbagadasebelumnya = subbagada[0];

                                if (subbagada[0] < subbagada[1]) {
                                    persentasesubbagada = 'Naik'
                                } else if (subbagada[0] > subbagada[1]) {
                                    persentasesubbagada = 'Turun'
                                } else {
                                    persentasesubbagada = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbagadasebelumnya = subbagada[1];
                                if (subbagada[1] < subbagada[2]) {
                                    persentasesubbagada = 'Naik'
                                } else if (subbagada[1] > subbagada[2]) {
                                    persentasesubbagada = 'Turun'
                                } else {
                                    persentasesubbagada = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                subbagadasebelumnya = subbagada[2];
                                if (subbagada[2] < subbagada[3]) {
                                    persentasesubbagada = 'Naik'
                                } else if (subbagada[2] > subbagada[3]) {
                                    persentasesubbagada = 'Turun'
                                } else {
                                    persentasesubbagada = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                subbagadasebelumnya = subbagada[3];
                                if (subbagada[3] < subbagada[4]) {
                                    persentasesubbagada = 'Naik'
                                } else if (subbagada[3] > subbagada[4]) {
                                    persentasesubbagada = 'Turun'
                                } else {
                                    persentasesubbagada = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                subbagadasebelumnya = subbagada[4];
                                if (subbagada[4] < subbagada[5]) {
                                    persentasesubbagada = 'Naik'
                                } else if (subbagada[4] > subbagada[5]) {
                                    persentasesubbagada = 'Turun'
                                } else {
                                    persentasesubbagada = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                subbagadasebelumnya = subbagada[5];
                                if (subbagada[5] < subbagada[6]) {
                                    persentasesubbagada = 'Naik'
                                } else if (subbagada[5] > subbagada[6]) {
                                    persentasesubbagada = 'Turun'
                                } else {
                                    persentasesubbagada = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                subbagadasebelumnya = subbagada[6];
                                if (subbagada[6] < subbagada[7]) {
                                    persentasesubbagada = 'Naik'
                                } else if (subbagada[6] > subbagada[7]) {
                                    persentasesubbagada = 'Turun'
                                } else {
                                    persentasesubbagada = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                subbagadasebelumnya = subbagada[7];
                                if (subbagada[7] < subbagada[8]) {
                                    persentasesubbagada = 'Naik'
                                } else if (subbagada[7] > subbagada[8]) {
                                    persentasesubbagada = 'Turun'
                                } else {
                                    persentasesubbagada = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                subbagadasebelumnya = subbagada[8];
                                if (subbagada[8] < subbagada[9]) {
                                    persentasesubbagada = 'Naik'
                                } else if (subbagada[8] > subbagada[9]) {
                                    persentasesubbagada = 'Turun'
                                } else {
                                    persentasesubbagada = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                subbagadasebelumnya = subbagada[9];
                                if (subbagada[9] < subbagada[10]) {
                                    persentasesubbagada = 'Naik'
                                } else if (subbagada[9] > subbagada[10]) {
                                    persentasesubbagada = 'Turun'
                                } else {
                                    persentasesubbagada = `Sama`
                                }

                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                subbagadasebelumnya = subbagada[10];
                                if (subbagada[10] < subbagada[11]) {
                                    persentasesubbagada = 'Naik'
                                } else if (subbagada[10] > subbagada[11]) {
                                    persentasesubbagada = 'Turun'
                                } else {
                                    persentasesubbagada = 'Sama'
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
                                                            <span class="fw-bold">Total subbagada</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbagadasebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total subbagada</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagada[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesubbagada}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total subbagada</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagada[dataPointIndex]}</span><br>
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

                var bagrenminsubbagadamonth = new ApexCharts(document.querySelector("#chart3"), bagrenminsubbagadamonth);
                bagrenminsubbagadamonth.render();


                var bagrenminsubbaglogmonth = {
                    series: [{
                        name: 'subbaglog',
                        type: 'line',
                        data: subbaglog,
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
                                subbaglogsebelumnya = subbaglog[0];

                                if (subbaglog[0] < subbaglog[1]) {
                                    subbaglog = 'Naik'
                                } else if (subbaglog[0] > subbaglog[1]) {
                                    subbaglog = 'Turun'
                                } else {
                                    subbaglog = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbaglogsebelumnya = subbaglog[1];
                                if (subbaglog[1] < subbaglog[2]) {
                                    subbaglog = 'Naik'
                                } else if (subbaglog[1] > subbaglog[2]) {
                                    subbaglog = 'Turun'
                                } else {
                                    subbaglog = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                subbaglogsebelumnya = subbaglog[2];
                                if (subbaglog[2] < subbaglog[3]) {
                                    subbaglog = 'Naik'
                                } else if (subbaglog[2] > subbaglog[3]) {
                                    subbaglog = 'Turun'
                                } else {
                                    subbaglog = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                subbaglogsebelumnya = subbaglog[3];
                                if (subbaglog[3] < subbaglog[4]) {
                                    subbaglog = 'Naik'
                                } else if (subbaglog[3] > subbaglog[4]) {
                                    subbaglog = 'Turun'
                                } else {
                                    subbaglog = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                subbaglogsebelumnya = subbaglog[4];
                                if (subbaglog[4] < subbaglog[5]) {
                                    subbaglog = 'Naik'
                                } else if (subbaglog[4] > subbaglog[5]) {
                                    subbaglog = 'Turun'
                                } else {
                                    subbaglog = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                subbaglogsebelumnya = subbaglog[5];
                                if (subbaglog[5] < subbaglog[6]) {
                                    subbaglog = 'Naik'
                                } else if (subbaglog[5] > subbaglog[6]) {
                                    subbaglog = 'Turun'
                                } else {
                                    subbaglog = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                subbaglogsebelumnya = subbaglog[6];
                                if (subbaglog[6] < subbaglog[7]) {
                                    subbaglog = 'Naik'
                                } else if (subbaglog[6] > subbaglog[7]) {
                                    subbaglog = 'Turun'
                                } else {
                                    subbaglog = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                subbaglogsebelumnya = subbaglog[7];
                                if (subbaglog[7] < subbaglog[8]) {
                                    subbaglog = 'Naik'
                                } else if (subbaglog[7] > subbaglog[8]) {
                                    subbaglog = 'Turun'
                                } else {
                                    subbaglog = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                subbaglogsebelumnya = subbaglog[8];
                                if (subbaglog[8] < subbaglog[9]) {
                                    subbaglog = 'Naik'
                                } else if (subbaglog[8] > subbaglog[9]) {
                                    subbaglog = 'Turun'
                                } else {
                                    subbaglog = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                subbaglogsebelumnya = subbaglog[9];
                                if (subbaglog[9] < subbaglog[10]) {
                                    subbaglog = 'Naik'
                                } else if (subbaglog[9] > subbaglog[10]) {
                                    subbaglog = 'Turun'
                                } else {
                                    subbaglog = `Sama`
                                }

                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                subbaglogsebelumnya = subbaglog[10];
                                if (subbaglog[10] < subbaglog[11]) {
                                    subbaglog = 'Naik'
                                } else if (subbaglog[10] > subbaglog[11]) {
                                    subbaglog = 'Turun'
                                } else {
                                    subbaglog = 'Sama'
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
                                                            <span class="fw-bold">Total subbaglog</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbaglogsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total subbaglog</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbaglog[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${subbaglog}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total subbaglog</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbaglog[dataPointIndex]}</span><br>
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

                var bagrenminsubbaglogmonth = new ApexCharts(document.querySelector("#chart4"), bagrenminsubbaglogmonth);
                bagrenminsubbaglogmonth.render();
            }
        })
    }

    // Year
    function getBagrenminyear(three_yearAgo, lastDay) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>bagrenmin/getChartBagrenmin",
            data: {
                start_date: three_yearAgo,
                end_date: lastDay,
                filter: 'year'
            },
            dataType: "JSON",
            success: function(result) {
                let polda_month = result.data.polda_month
                let subbagren = result.data.subbagren
                let subbagsdm = result.data.subbagsdm
                let subbagada = result.data.subbagada
                let subbaglog = result.data.subbaglog
                $('#titlesubbagrenyear').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG REN TAHUNAN</h4>`);
                $('#titlesubbagsdmyear').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG SDM TAHUNAN</h4>`);
                $('#titlesubbagadayear').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG ADA TAHUNAN</h4>`);
                $('#titlesubbaglogyear').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG LOG TAHUNAN</h4>`);

                var bagrenminsubbagrenyear = {
                    series: [{
                        name: 'subbagren',
                        type: 'line',
                        data: subbagren,
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
                                subbagrensebelumnya = subbagren[0];

                                if (subbagren[0] < subbagren[1]) {
                                    persentasesubbagren = 'Naik'
                                } else if (subbagren[0] > subbagren[1]) {
                                    persentasesubbagren = 'Turun'
                                } else {
                                    persentasesubbagren = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbagrensebelumnya = subbagren[1];
                                if (subbagren[1] < subbagren[2]) {
                                    persentasesubbagren = 'Naik'
                                } else if (subbagren[1] > subbagren[2]) {
                                    persentasesubbagren = 'Turun'
                                } else {
                                    persentasesubbagren = 'Sama'
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
                                                            <span class="fw-bold">Total subbagren</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbagrensebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total subbagren</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagren[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesubbagren}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total subbagren</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagren[dataPointIndex]}</span><br>
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

                var bagrenminsubbagrenyear = new ApexCharts(document.querySelector("#chartyear"), bagrenminsubbagrenyear);
                bagrenminsubbagrenyear.render();


                var bagrenminsubbagsdmyear = {
                    series: [{
                        name: 'subbagsdm',
                        type: 'line',
                        data: subbagsdm,
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
                                subbagsdmsebelumnya = subbagsdm[0];

                                if (subbagsdm[0] < subbagsdm[1]) {
                                    persentasesubbagsdm = 'Naik'
                                } else if (subbagsdm[0] > subbagsdm[1]) {
                                    persentasesubbagsdm = 'Turun'
                                } else {
                                    persentasesubbagsdm = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbagsdmsebelumnya = subbagsdm[1];
                                if (subbagsdm[1] < subbagsdm[2]) {
                                    persentasesubbagsdm = 'Naik'
                                } else if (subbagsdm[1] > subbagsdm[2]) {
                                    persentasesubbagsdm = 'Turun'
                                } else {
                                    persentasesubbagsdm = 'Sama'
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
                                                            <span class="fw-bold">Total subbagsdm</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbagsdmsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total subbagsdm</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagsdm[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesubbagsdm}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total subbagsdm</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagsdm[dataPointIndex]}</span><br>
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

                var bagrenminsubbagsdmyear = new ApexCharts(document.querySelector("#chartyear2"), bagrenminsubbagsdmyear);
                bagrenminsubbagsdmyear.render();


                var bagrenminsubbagadayear = {
                    series: [{
                        name: 'subbagada',
                        type: 'line',
                        data: subbagada,
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
                                subbagadasebelumnya = subbagada[0];

                                if (subbagada[0] < subbagada[1]) {
                                    persentasesubbagada = 'Naik'
                                } else if (subbagada[0] > subbagada[1]) {
                                    persentasesubbagada = 'Turun'
                                } else {
                                    persentasesubbagada = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbagadasebelumnya = subbagada[1];
                                if (subbagada[1] < subbagada[2]) {
                                    persentasesubbagada = 'Naik'
                                } else if (subbagada[1] > subbagada[2]) {
                                    persentasesubbagada = 'Turun'
                                } else {
                                    persentasesubbagada = 'Sama'
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
                                                            <span class="fw-bold">Total subbagada</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbagadasebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total subbagada</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagada[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesubbagada}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total subbagada</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagada[dataPointIndex]}</span><br>
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

                var bagrenminsubbagadayear = new ApexCharts(document.querySelector("#chartyear3"), bagrenminsubbagadayear);
                bagrenminsubbagadayear.render();


                var bagrenminsubbaglogyear = {
                    series: [{
                        name: 'subbaglog',
                        type: 'line',
                        data: subbaglog,
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
                                subbaglogsebelumnya = subbaglog[0];

                                if (subbaglog[0] < subbaglog[1]) {
                                    subbaglog = 'Naik'
                                } else if (subbaglog[0] > subbaglog[1]) {
                                    subbaglog = 'Turun'
                                } else {
                                    subbaglog = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbaglogsebelumnya = subbaglog[1];
                                if (subbaglog[1] < subbaglog[2]) {
                                    subbaglog = 'Naik'
                                } else if (subbaglog[1] > subbaglog[2]) {
                                    subbaglog = 'Turun'
                                } else {
                                    subbaglog = 'Sama'
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
                                                            <span class="fw-bold">Total subbaglog</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbaglogsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total subbaglog</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbaglog[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${subbaglog}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total subbaglog</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbaglog[dataPointIndex]}</span><br>
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

                var bagrenminsubbaglogyear = new ApexCharts(document.querySelector("#chartyear4"), bagrenminsubbaglogyear);
                bagrenminsubbaglogyear.render();
            }
        })
    }
</script> -->