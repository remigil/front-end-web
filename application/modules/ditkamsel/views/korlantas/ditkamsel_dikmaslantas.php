<section class="shadow-sm">
    <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/';">
        <ol class="breadcrumb fs-5">
            <li class="breadcrumb-item"><a href="#"><?= $data['menu'] ?></a></li>
            <li class="breadcrumb-item active fw-bold" aria-current="page"><?= $data['submenu'] ?></li>
        </ol>
    </nav>
</section>
<section class="shadow-sm">
    <div class="card rounded">
        <div class="card-header card-headline">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2 class="text-white"><?= strtoupper($data['headline'])  ?></h2>
                </div>
                <div class="col-md-6">
                    <p class="text-end mx-4 text-dark fs-6 fw-light"><?= ucwords('last update 13 Agustus 2022') ?></p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="card-body blue-card">
                        <div class="row align-items-center text-center">
                            <div class="col-md-6">
                                <h4 class="text-light fw-light">Media Cetak</h4>
                            </div>
                            <div class="col-md-6">
                                <h1 class="text-center blue-card-text"><?= $data['media_cetak'] ?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body red-card mt-2">
                        <div class="row align-items-center text-center">
                            <div class="col-md-6 rounded">
                                <h4 class="text-light d-inline fw-light">Media Elektronik</h4>
                            </div>
                            <div class="col-md-6">
                                <h1 class="red-card-text"><?= $data['media_elektronik'] ?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body green-card mt-2">
                        <div class="row align-items-center text-center">
                            <div class="col-md-6 text-wrap">
                                <h4 class="text-light fw-light">Media Sosial</h4>
                            </div>
                            <div class="col-md-6">
                                <h1 class="green-card-text text-center"><?= $data['media_sosial'] ?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body yellow-card mt-2">
                        <div class="row align-items-center text-center">
                            <div class="col-md-6 text-wrap">
                                <h4 class="text-light fw-light">Laka Langgar</h4>
                            </div>
                            <div class="col-md-6">
                                <h1 class="yellow-card-text text-center"><?= $data['laka_langgar'] ?></h1>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-8">
                    <div class="top-five-headline">
                        <h2 class="text-center">10 RANGKING DIKMAS LANTAS TERTINGGI</h2>
                    </div>
                    <div class="mt-5">
                        <table class="table table-bordered border-primary text-center" style="vertical-align:middle!important" width="100%">
                            <thead class="table-primary">
                                <tr class="text-white">
                                    <th scope="col">No</th>
                                    <th scope="col">POLDA</th>
                                    <th scope="col">Media Cetak</th>
                                    <th scope="col">Media Elektronik</th>
                                    <th scope="col">Media Sosial</th>
                                    <th scope="col">Laka Langgar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1 ?>
                                <?php foreach ($data['topPolda'] as $key) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $key['name_polda'] ?></td>
                                        <td><?= $key['media_cetak'] ?></td>
                                        <td><?= $key['media_elektronik'] ?></td>
                                        <td><?= $key['media_sosial'] ?></td>
                                        <td><?= $key['laka_langgar'] ?></td>
                                    </tr>
                                    <?php $i++ ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle text-start" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #ffffff;color:black; width:350px">
            Filter<i class="fas fa-filter" style="float: right;"></i>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <div class="row text-center m-3">
                <div class="col-md-6">
                    <h6>Wilayah</h6>
                    <div class="form-group">
                        <select class="form-select">
                            <option>Polda</option>
                            <option>Semua Polda</option>
                            <option>Metro Jaya</option>
                            <option>Jawa Barat</option>
                            <option>Jawa Tengah</option>
                            <option>Jawa Timur</option>
                            <option>Sumatra Barat</option>
                            <option>Sumatra Selatan</option>
                            <option>Kalimantan Utara</option>
                            <option>Kalimantan Tengah</option>
                            <option>Sulawesi barat</option>
                            <option>Bali</option>
                        </select>
                    </div>
                    <div class="form-group mt-1">
                        <select class="form-select">
                            <option>Polres</option>
                            <option>Semua Polres</option>
                            <option>POLRESTABES BANDUNG</option>
                            <option>POLRESTA BOGOR</option>
                            <option>POLRES BOGOR</option>
                            <option>POLRESTA SUKABUMI</option>
                            <option>POLRES SUKABUMI</option>
                            <option>POLRES CIANJUR</option>
                            <option>POLRES PURWAKARTAPURWAKARTA</option>
                            <option>POLRES KARAWANG</option>
                            <option>POLRES SUBANG</option>
                            <option>POLRES CIMAHI</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <h6>Waktu</h6>
                    <div class="form-group">
                        <select class="form-select">
                            <option>Pilih Waktu</option>
                            <option>Tahun</option>
                            <option>Bulan</option>
                            <option>Customize</option>
                        </select>
                    </div>
                    <div class="form-group mt-1">
                        <input class="form-control" type="date" value="">
                    </div>
                    <div class="form-group mt-1">
                        <input class="form-control" type="date" value="">
                    </div>
                </div>
                <button class="btn btn-primary mt-2" type="button">Tampilkan</button>
            </div>
        </ul>
    </div>
</section>

<section class="shadow-sm mt-5">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Data Dikmas Lantas Seluruh Indonesia</h4>
                </div>
                <div class="card-body" style="overflow:hidden; overflow-x:scroll;">
                    <div class="main-chart">
                        <div id="chart" style="width:350vw;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="shadow-sm mt-5">
    <div class="row">
        <div class="col-xl-12">
            <div class="card mt-3">
                <div class="card-body">
                    <table id="tb_dikmaslantas" class="table dt-responsive table-bordered nowrap w-100">
                        <thead class="table-primary text-center" style="vertical-align : middle;text-align:center;">
                            <tr>
                                <th>No</th>
                                <th>Polda</th>
                                <th>Jumlah</th>
                                <th>Media Cetak</th>
                                <th>Media Elektronik</th>
                                <th>Media Sosial</th>
                                <td>Laka & Langgar</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($data['polda'] as $key) : ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $key['name_polda'] ?></td>
                                    <td><?= $key['jumlah'] ?></td>
                                    <td><?= $key['media_cetak'] ?></td>
                                    <td><?= $key['media_elektronik'] ?></td>
                                    <td><?= $key['media_sosial'] ?></td>
                                    <td><?= $key['laka_langgar'] ?></td>
                                    <?php $i++ ?>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="shadow-sm mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Data Dikmas Lantas Tahun 2021</h4>
                </div>
                <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                    <div class="main-chart">
                        <div id="chart2" style="width: 100vw"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="shadow-sm mt-5">
    <div class="row">
        <div class="col-xl-12">
            <div class="card mt-3">
                <div class="card-body">
                    <table id="tb_dikmaslantas_tahun" class="table dt-responsive table-bordered nowrap w-100">
                        <thead class="table-primary text-center" style="vertical-align : middle;text-align:center;">
                            <tr>
                                <th>No</th>
                                <th>Bulan</th>
                                <th>Jumlah</th>
                                <th>Media Cetak</th>
                                <th>Media Elektronik</th>
                                <th>Media Sosial</th>
                                <td>Laka & Langgar</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1 ?>
                            <?php foreach ($data['poldaMonth'] as $key) : ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $key['date'] ?></td>
                                    <td><?= $key['jumlah'] ?></td>
                                    <td><?= $key['media_cetak'] ?></td>
                                    <td><?= $key['media_elektronik'] ?></td>
                                    <td><?= $key['media_sosial'] ?></td>
                                    <td><?= $key['laka_langgar'] ?></td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        // $('#tb_dikmaslantas').DataTable({

        //     responsive: true,

        //     scrollX: true,

        //     // sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

        //     // buttons: ["excel", "csv", "pdf"],

        //     oLanguage: {

        //         sSearch: 'Search:'

        //     },

        //     initComplete: function(settings, json) {},

        //     retrieve: true,

        //     processing: true,

        //     serverSide: true,

        //     serverMethod: 'POST',

        //     ajax: {

        //         dataType: 'json',

        //         url: '<?php echo base_url(); ?>ditkamsel/DikmasLantas/tableByPolda',

        //         data: function(data) {

        //             $("#overlay").fadeIn(300);

        //             // console.log(data);

        //             // data.filterTgl = $('[name=event_date]').val();

        //             // data.filterTgl2 = $('[name=event_date_to]').val(); 

        //             // data.filterStatus = $('[name=status]').val();

        //             // data.filterName = $('[name=group_name]').val();

        //             // data.filterPocName = $('[name=group_poc_name]').val();

        //             // data.filterPhone = $('[name=poc_phone]').val();

        //             // data.filterThreat = $('[name=threat_level]').val();

        //             data.orderField = data.order[0] != undefined ? data.order[0].column : '';

        //             data.orderValue = data.order[0] != undefined ? data.order[0].dir : '';

        //             data.page = Number(data.start / data.length) + 1

        //         },

        //         beforeSend: function(xhr, settings) {

        //         },

        //         "dataSrc": function(result) {

        //             result.iTotalRecords = result.iTotalRecords;

        //             result.iTotalDisplayRecords = result.iTotalRecords;

        //             return result.aaData;

        //         }

        //     },

        //     columns: [

        //         {
        //             data: 'id'
        //         },
        //         {
        //             data: 'name_polda'
        //         },
        //         {
        //             data: 'jumlah'
        //         },
        //         {
        //             data: 'media_cetak'
        //         },
        //         {
        //             data: 'media_elektronik'
        //         },
        //         {
        //             data: 'media_sosial'
        //         },
        //         {
        //             data: 'laka_langgar'
        //         },

        //     ],

        //     order: [
        //         [0, "DESC"]
        //     ],

        //     drawCallback: function(settings) {

        //         $("#overlay").fadeOut(300);

        //     }

        // })
        // Dikmas Lantas

        var poldaName = JSON.parse('<?= json_encode($data['poldaName']); ?>');
        var polda_media_cetak = JSON.parse('<?= json_encode($data['polda_media_cetak']); ?>');
        var polda_media_elektronik = JSON.parse('<?= json_encode($data['polda_media_elektronik']); ?>');
        var polda_media_sosial = JSON.parse('<?= json_encode($data['polda_media_sosial']); ?>');
        var polda_laka_langgar = JSON.parse('<?= json_encode($data['polda_laka_langgar']); ?>');


        var poldaMonth = JSON.parse('<?= json_encode($data['month']); ?>');
        var month_media_cetak = JSON.parse('<?= json_encode($data['month_media_cetak']); ?>');
        var month_media_elektronik = JSON.parse('<?= json_encode($data['month_media_elektronik']); ?>');
        var month_media_sosial = JSON.parse('<?= json_encode($data['month_media_sosial']); ?>');
        var month_laka_langgar = JSON.parse('<?= json_encode($data['month_laka_langgar']); ?>');


        console.log(poldaName)
        var options_dikmas_lantas = {
            series: [{
                name: 'Media Cetak',
                type: 'column',
                data: polda_media_cetak,
                color: "#11347A"
            }, {
                name: 'Media Elektronik',
                type: 'column',
                data: polda_media_elektronik,
                color: "#CB2D3E"
            }, {
                name: 'Media Sosial',
                type: 'column',
                data: polda_media_sosial,
                color: "#E8D42F"
            }, {
                name: 'Laka langgar',
                type: 'column',
                data: polda_laka_langgar,
                color: "#3CA55C"
            }],
            chart: {
                height: 350,
                type: 'line',
                stacked: false,
                offsetY: 10
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '50%',
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
                categories: poldaName,
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
                tooltip: {
                    enable: false
                }
            }, ],
        };

        var dikmas_lantas = new ApexCharts(document.querySelector("#chart"), options_dikmas_lantas);
        dikmas_lantas.render();

        // Dikmas Lantas Tahun 2021
        var options_dikmas_lantas_tahun = {
            series: [{
                name: 'Media Cetak',
                type: 'column',
                data: month_media_cetak,
                color: "#11347A"
            }, {
                name: 'Media Elektronik',
                type: 'column',
                data: month_media_elektronik,
                color: "#CB2D3E"
            }, {
                name: 'Media Sosial',
                type: 'column',
                data: month_media_sosial,
                color: "#E8D42F"
            }, {
                name: 'Laka langgar',
                type: 'column',
                data: month_laka_langgar,
                color: "#3CA55C"
            }],
            chart: {
                height: 350,
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
                categories: poldaMonth
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
                tooltip: {
                    enable: false
                }
            }, ],
        };

        var dikmas_lantas_tahun = new ApexCharts(document.querySelector("#chart2"), options_dikmas_lantas_tahun);
        dikmas_lantas_tahun.render();

        $('#tb_dikmaslantas').DataTable()
        $('#tb_dikmaslantas_tahun').DataTable()
    })
</script>