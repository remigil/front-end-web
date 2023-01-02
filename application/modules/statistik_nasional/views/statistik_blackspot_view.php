<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <a href="<?= base_url('statistik_nasional') ?>" style="color:#0a0a0a ;" class="fs-6"><i class="fas fa-less-than"></i> Kembali</a>
        </div>
        <div class="col-md-6 text-end align-self-center">
            <a href="<?= ENV_API_BASE_URL ?>v1/laporan_harian/blankspot" type="button" button class="btn btn-outline-primary btn-lg" style="width: 200px; border-color:#0007D8;">Export Laporan</a>
            <!-- <a href="http://34.143.227.90:3001/v1/laporan_harian/export_laphar" type="button" button class="btn btn-outline-primary btn-lg" style="width: 200px; border-color:#0007D8;">Export Laporan</a> -->
        </div>
    </div>
    <div class="card mt-5 p-1 shadow" style="border-radius:36px !important;">
        <div class="row m-2">
            <div class="col-sm-2 col-md-6 align-self-center">
                <h3>STATISTIK DATA <span style="text-transform:uppercase ; color:#0007D8">Blankspot</span> SELURUH INDONESIA</h3>
            </div>
            <div class="col-sm-8 col-md-6">
                <div class="row m-2">
                    <div class="col-md-4 col-sm-4 col-xl-4 align-self-center">
                        <div class="card p-1 mt-2 mb-2" style="border-radius: 20px !important; border-color:#D9D9D9">
                            <div class="card-body p-1">
                                <div class="row justify-content-between align-items-center" style="height: 80px;">
                                    <div class="col-md-7">
                                        <h4 class="mb-0 ms-3">Harian</h4>
                                    </div>
                                    <div class="col-md-5 float-end">
                                        <h1 class="text-center mb-0" style="color:#464646; font-size:25px; color:#2e93e6;" id="jemenopsrekThisDay"></h1>
                                        <p class="text-center mb-0">Blankspot</p>
                                    </div>
                                    <div class="col-md-12 ms-3">
                                        <div class="row">
                                            <div class="col-md-4 ms-n3 rounded-bottom" style=" width: 100%; background-color:#0007D8; height:40px; border-radius:20px 0 20px 20; ">
                                                <button type="button" class="btn btn-outline-primary text-white fw-bold" style="width:100% ;" data-toggle="modal" data-target="#ModalDay">
                                                    Detail
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xl-4 align-self-center">
                        <div class="card p-1 mt-2 mb-2" style="border-radius: 20px !important; border-color:#D9D9D9">
                            <div class="card-body p-1">
                                <div class="row justify-content-between align-items-center" style="height: 80px;">
                                    <div class="col-md-7">
                                        <h4 class="mb-0 ms-3">Bulanan</h4>
                                    </div>
                                    <div class="col-md-5 float-end">
                                        <h1 class="text-center mb-0" style="color:#464646; font-size:25px; color:#2e93e6;" id="jemenopsrekThisMonth"></h1>
                                        <p class="text-center mb-0">Blankspot</p>
                                    </div>
                                    <div class="col-md-12 ms-3">
                                        <div class="row">
                                            <div class="col-md-4 ms-n3 rounded-bottom" style=" width: 100%; background-color:#0007D8; height:40px; border-radius:20px 0 20px 20; ">
                                                <button type="button" class="btn btn-outline-primary text-white fw-bold" style="width:100% ;" data-toggle="modal" data-target="#ModalMonth">
                                                    Detail
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xl-4 align-self-center">
                        <div class="card p-1 mt-2 mb-2" style="border-radius: 20px !important; border-color:#D9D9D9">
                            <div class="card-body p-1">
                                <div class="row justify-content-between align-items-center" style="height: 80px;">
                                    <div class="col-md-7">
                                        <h4 class="mb-0 ms-3">Tahunan</h4>
                                    </div>
                                    <div class="col-md-5 float-end">
                                        <h1 class="text-center mb-0" style="color:#464646; font-size:25px; color:#2e93e6;" id="jemenopsrekThisYear"></h1>
                                        <p class="text-center mb-0">Blankspot</p>
                                    </div>
                                    <div class="col-md-12 ms-3">
                                        <div class="row">
                                            <div class="col-md-4 ms-n3 rounded-bottom" style=" width: 100%; background-color:#0007D8; height:40px; border-radius:20px 0 20px 20; ">
                                                <button type="button" class="btn btn-outline-primary text-white fw-bold" style="width:100% ;" data-toggle="modal" data-target="#ModalYear">
                                                    Detail
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade " id="ModalDay" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background: rgba(0, 0, 0, 0.7);">
    <div class="modal-dialog modal-xl" role="document" style="min-width:70%;">
        <div class="modal-content">
            <div class=" modal-header">
                <h5 class="modal-title" id="modalLabelDay">Detail Blankspot tanggal <?= format_indo(date('Y-m-d'))  ?> Seluruh Polda </h5>
                <!-- <h5 class="modal-title" id="modalLabelDay">Detail Blankspot tanggal <?= format_indo(date('Y-m-d'))  ?> Seluruh Polda <span class="fs-5">sasdasdasd</span></h5> -->

                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button> -->
            </div>
            <div class="modal-body">
                <div style="line-height: 0.8;">
                    <div class="row mb-3">
                        <div class="col-md-9">
                            <label for="waktu" class="form-label text-uppercase text-info">Pilih Periode Waktu</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="waktu" class="form-label text-uppercase">Awal</label>
                                </div>
                                <div class="col-md-4">
                                    <label for="waktu" class="form-label text-uppercase">Akhir</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <input class="form-control form-control-lg" type="date" name="start_date_table" id="start_date_table" value="<?= date('Y-m-d'); ?>">
                                </div>
                                <div class="col-md-4">
                                    <input class="form-control form-control-lg" type="date" name="end_date_table" id="end_date_table" value="<?= date('Y-m-d'); ?>">
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-primary float-end btn-lg" style="width: 100%;" onclick="ButtonFilterOnTable('day')">Tampilkan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered table-hover" id="tableLakaDay" style="background:white; ">
                        <thead style="background-color:#0007D8; color:#fff;">
                            <tr class="text-center">
                                <th scope="col" style="width:fit-content;">No</th>
                                <th scope="col">Kode Blankspot</th>
                                <th scope="col">Polda</th>
                                <th scope="col">Lokasi Kejadian</th>
                                <th scope="col">Permasalahan</th>
                            </tr>
                        </thead>
                        <tbody id="tbody-lakaDay">
                        </tbody>
                    </table>
                </div>

            </div>
            <!-- <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             </div> -->
        </div>
    </div>
</div>
<div class="modal fade " id="ModalMonth" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background: rgba(0, 0, 0, 0.7);">
    <div class="modal-dialog modal-xl" role="document" style="min-width:70%;">
        <div class="modal-content">
            <div class=" modal-header">
                <h5 class="modal-title" id="modalLabelMonth">Detail Blankspot Bulan <?= format_indo(date('Y-m'))  ?> Seluruh Polda</h5>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button> -->
            </div>
            <div class="modal-body">
                <div style="line-height: 0.8;">
                    <div class="row mb-3">
                        <div class="col-md-9">
                            <label for="waktu" class="form-label text-uppercase text-info">Pilih Periode Waktu</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="waktu" class="form-label text-uppercase">Awal</label>
                                </div>
                                <div class="col-md-4">
                                    <label for="waktu" class="form-label text-uppercase">Akhir</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <input class="form-control form-control-lg" type="month" name="start_date_table" id="start_date_table_m" value="<?= date('Y-m'); ?>">
                                </div>
                                <div class="col-md-4">
                                    <input class="form-control form-control-lg" type="month" name="end_date_table" id="end_date_table_m" value="<?= date('Y-m'); ?>">
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-primary float-end btn-lg" style="width: 100%;" onclick="ButtonFilterOnTable('month')">Tampilkan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered table-hover" id="tableLakaMonth" style="background:white; ">
                        <thead style="background-color:#0007D8; color:#fff;">
                            <tr class="text-center">
                                <th scope="col" style="width:fit-content;">No</th>
                                <th scope="col">Kode Blankspot</th>
                                <th scope="col">Polda</th>
                                <th scope="col">Lokasi Kejadian</th>
                                <th scope="col">Permasalahan</th>
                            </tr>
                        </thead>
                        <tbody id="tbody-lakaMonth">
                        </tbody>

                    </table>
                </div>

            </div>
            <!-- <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             </div> -->
        </div>
    </div>
</div>
<div class="modal fade " id="ModalYear" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background: rgba(0, 0, 0, 0.7);">
    <div class="modal-dialog modal-xl" role="document" style="min-width:70%;">
        <div class="modal-content">
            <div class=" modal-header">
                <h5 class="modal-title" id="modalLabelYear">Detail Blankspot Tahun <?= format_indo(date('Y')) ?> Seluruh Polda</h5>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button> -->
            </div>
            <div class="modal-body">
                <div style="line-height: 0.8;">
                    <div class="row mb-3">
                        <div class="col-md-9">
                            <label for="waktu" class="form-label text-uppercase text-info">Pilih Periode Waktu</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="waktu" class="form-label text-uppercase">Awal</label>
                                </div>
                                <div class="col-md-4">
                                    <label for="waktu" class="form-label text-uppercase">Akhir</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <input class="form-control form-control-lg" type="number" name="start_date_table" id="start_date_table_y" value="<?= date('Y'); ?>">
                                </div>
                                <div class="col-md-4">
                                    <input class="form-control form-control-lg" type="number" name="end_date_table" id="end_date_table_y" value="<?= date('Y'); ?>">
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-primary float-end btn-lg" style="width: 100%;" onclick="ButtonFilterOnTable('year')">Tampilkan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered table-hover" id="tableLakaYear" style="background:white; ">
                        <thead style="background-color:#0007D8; color:#fff;">
                            <tr class="text-center">
                                <th scope="col">No</th>
                                <th scope="col">Kode Blankspot</th>
                                <th scope="col">Polda</th>
                                <th scope="col">Lokasi Kejadian</th>
                                <th scope="col">Permasalahan</th>
                            </tr>
                        </thead>
                        <tbody id="tbody-lakaYear">
                        </tbody>

                    </table>
                </div>

            </div>
            <!-- <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             </div> -->
        </div>
    </div>
</div>


<?php $mobile = detect_mobile();
if ($mobile === true) { ?>
    <div class="filter mb-5" style=" height:125px;">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12 align-self-center">
                    <label for="waktu" class="form-label text-uppercase">Waktu</label>
                </div>

            </div>
            <div style="display: flex;">

                <input class="form-control form-control-lg" type="date" name="start_date" id="start_date">
                <input class="form-control form-control-lg" type="date" name="end_date" id="end_date">

            </div>

            <button type="button" class="btn btn-info float-end btn-sm" style="width: 100%;" onclick="ButtonFilter()">Tampilkan</button>
            <a href="http://34.143.227.90:3001/v1/laporan_harian/export_laphar" type="button" button class="btn btn-outline-info float-end btn-sm mt-2" style="width: 100%; border-color:#007DD8;">Export Laporan</a>


        </div>
    </div>
<?php } else { ?>




<?php } ?>

<div class="container-fluid">

    <div class="card">
        <div class="row">
            <hr style="width:97%; margin: auto">
            <div class="filter mt-4" style=" height:125px;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-9">
                            <label for="waktu" class="form-label text-uppercase">Waktu</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <input class="form-control form-control-lg" type="date" name="start_date" id="start_date">
                                </div>
                                <div class="col-md-4">
                                    <input class="form-control form-control-lg" type="date" name="end_date" id="end_date">
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-info float-end btn-lg" style="width: 100%;" onclick="ButtonFilter()">Tampilkan</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <div id="titleline"></div>
                    </div>
                    <div class="card-body">
                        <div class="main-chart">
                            <div id="chartdate">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <div id="title">TOP DATA Blankspot LALU LINTAS</div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Pilih Jumlah Polda</label>
                                    <select class="form-control form-select" id="limit_showData">
                                        <option value="3">3 Blankspot</option>
                                        <option value="5" selected>5 Blankspot</option>
                                        <option value="7">7 Blankspot</option>
                                        <option value="10">10 Blankspot</option>
                                        <option value="34">Keseluruhan Blankspot</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="main-chart">
                            <div id="charta">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="<?php echo base_url(); ?>assets/admin/libs/sweetalert2/sweetalert2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


<script>
    $(document).ready(function() {
        var date = new Date();
        var filter = 0
        var firstDay = new Date(date.getFullYear(), 0).toLocaleDateString("en-GB").split('/').reverse().join('-');
        var lastDay = new Date(date.getFullYear(), 11, 31).toLocaleDateString("en-GB").split('/').reverse().join('-');
        var yesterday = new Date().toLocaleDateString('en-GB').split('/').reverse().join('-')

        var firstDayMonth = new Date(date.getFullYear(), date.getMonth(), 1).toLocaleDateString("en-GB").split('/').reverse().join('-');
        var lastDayMonth = new Date(date.getFullYear(), date.getMonth() + 1, 0).toLocaleDateString("en-GB").split('/').reverse().join('-');

        date.setDate(date.getDate() - 6);
        var seven_daysAgo = date.toLocaleDateString("en-GB").split('/').reverse().join('-');

        var limit = $('#limit_showData').val();

        getBarBlankspot(filter, limit, firstDay, lastDay)
        getLineBlankspot(filter = 1, firstDay, lastDay, 'year')
        getStatistikBlankspot(filter = 1, yesterday, firstDay, lastDay, firstDayMonth, lastDayMonth)
        BlankspotToday(yesterday, yesterday)
        BlankspotMonth(firstDayMonth, lastDayMonth)
        BlankspotYear(firstDay, lastDay)
    })

    $('#limit_showData').on('change', function() {
        var limit = $('#limit_showData').val();
        var start_date = $('#start_date').val();
        var end_date = $('#end_date').val();

        if (start_date == '' && end_date == '') {
            getBarBlankspot(0, limit, 0, null, null)
        } else {
            getBarBlankspot(0, limit, 0, start_date, start_date)
        }

    })

    function ButtonFilterOnTable(type) {
        if (type === 'day') {
            var start_date = $('#start_date_table').val();
            var end_date = $('#end_date_table').val();
            $('#modalLabelDay').text(`Detail Blankspot Tanggal ${moment(start_date).format('DD MM YYYY')} s.d ${moment(end_date).format('DD MM YYYY')} Seluruh Polda`)
            BlankspotToday(start_date, end_date)
        } else if (type === 'month') {
            var start_date = moment($('#start_date_table_m').val()).startOf('month').format('YYYY-MM-DD');
            var end_date = moment($('#end_date_table_m').val()).endOf('month').format('YYYY-MM-DD')
            $('#modalLabelMonth').text(`Detail Blankspot Bulan ${moment(start_date).format('MM YYYY')} s.d ${moment(end_date).format('MM YYYY')} Seluruh Polda`)
            BlankspotMonth(start_date, end_date)
        } else if (type === 'year') {
            var start_date = moment($('#start_date_table_y').val()).startOf('year').format('YYYY-MM-DD');
            var end_date = moment($('#end_date_table_y').val()).endOf('year').format('YYYY-MM-DD')
            $('#modalLabelYear').text(`Detail Blankspot Tahun ${moment(start_date).format('YYYY')} s.d ${moment(end_date).format('YYYY')} Seluruh Polda`)
            BlankspotYear(start_date, end_date)
        }
    }


    function BlankspotToday(start_date, end_date) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/statistik_executive/blankspotToday",
            dataType: "JSON",
            data: {
                start_date,
                end_date
            },
            success: function(result) {
                console.log(result)
                var table = '';
                for (let i = 0; i < result.length; i++) {
                    let x = parseInt(i)
                    table += `<tr class="text-center"> 
                        <td>  ${i+1}  </td> 
                        <td>  ${result[i].no_ts}  </td> 
                        <td>  ${result[i].polda.name_polda}  </td> 
                        <td>  ${result[i].location}  </td> 
                        <td>  ${result[i].traffic_reason || ''}  </td> 
                        </tr>`
                }
                $('#tbody-lakaDay').html(table);
            }
        })
    }


    function BlankspotMonth(start_date, end_date) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/statistik_executive/blankspotMonth",
            dataType: "JSON",
            data: {
                start_date,
                end_date
            },
            success: function(result) {
                var table = '';
                console.log(result)
                for (let i = 0; i < result.length; i++) {
                    let x = parseInt(i)
                    table += `<tr class="text-center"> 
                        <td>  ${i+1}  </td> 
                        <td>  ${result[i].no_ts}  </td> 
                        <td>  ${result[i].polda.name_polda}  </td> 
                        <td>  ${result[i].location}  </td> 
                        <td>  ${result[i].traffic_reason || ''}  </td> 
                        </tr>`
                }
                $('#tbody-lakaMonth').html(table);
            }
        })
    }

    function BlankspotYear(start_date, end_date) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/statistik_executive/blankspotYear",
            dataType: "JSON",
            data: {
                start_date,
                end_date
            },
            success: function(result) {
                var table = '';
                console.log(result)
                for (let i = 0; i < result.length; i++) {
                    let x = parseInt(i)
                    table += `<tr class="text-center"> 
                        <td>  ${i+1}  </td> 
                        <td>  ${result[i].no_ts}  </td> 
                        <td>  ${result[i].polda.name_polda}  </td> 
                        <td>  ${result[i].location}  </td> 
                        <td>  ${result[i].traffic_reason || ''}  </td> 
                        </tr>`
                }
                $('#tbody-lakaYear').html(table);
            }
        })
    }

    function ButtonFilter() {
        let filter = 2
        let start_date = $('#start_date').val();
        let end_date = $('#end_date').val();
        let limit = $('#limit_showData').val();
        let type = 'day';

        if (start_date === '' || end_date === '') {
            Swal.fire({
                icon: 'error',
                title: 'Waktu mulai dan waktu akhir harus terisi!',
            })
        } else {
            getBarBlankspot(filter, limit, start_date, end_date)
            getLineBlankspot(filter, start_date, end_date, type)
        }


    }




    function getStatistikBlankspot(filter, yesterday, firstDay, lastDay, firstDayMonth, lastDayMonth) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/statistik_executive/getBlankspotStatistik",
            dataType: "JSON",
            data: {
                yesterday,
                firstDayMonth,
                lastDayMonth,
                firstDay,
                lastDay,
                filter
            },
            success: function(result) {
                console.log(result);
                $("#overlay").fadeOut(300);
                $('#jemenopsrekThisDay').text(result.today)
                $('#jemenopsrekThisMonth').text(result.month)
                $('#jemenopsrekThisYear').text(result.year)

            }
        })
    }


    function getBarBlankspot(filter = null, limit = null, start_date = null, end_date = null) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/statistik_executive/getBarBlankspot",
            data: {
                filter: filter,
                limit: limit,
                start_date: start_date,
                end_date: end_date
            },
            dataType: "JSON",
            success: function(result) {
                $("#charta").html(`<div id="blankspotchart"></div>`);

                var options_Blankspot = {
                    series: [{
                        name: 'Jumlah Blankspot',
                        data: result.total,
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
                            colors: ['#333'],
                            fontSize: '16px',
                        },
                        offsetY: -20
                    },
                    stroke: {
                        show: true,
                        width: 2,
                        colors: ['transparent']
                    },
                    xaxis: {
                        categories: result.name_polda,
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
                                fontSize: '16px',
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

                var Blankspot = new ApexCharts(document.querySelector("#blankspotchart"), options_Blankspot);
                Blankspot.render();

            }
        })
    }

    function getLineBlankspot(filter = null, start_date = null, end_date = null, type = null) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/Statistik_executive/getLineBlankspot",
            data: {
                start_date: start_date,
                end_date: end_date,
                filter: filter,
                type: type
            },
            dataType: "JSON",
            success: function(results) {
                $('#titleline').html(`<h4 class="card-title mb-0 text-uppercase">${results.title}</h1>`);
                $("#chartdate").html(`<div id="chart2"></div>`);
                var chart2 = {
                    series: [{
                        name: '<h6>Total Blankspot</h6>',
                        type: 'line',
                        data: results.total,
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
                        categories: results.date,
                        labels: {
                            show: true,
                            style: {
                                colors: ['#f70505'],
                                fontSize: '18px',
                                fontWeight: 400,
                            }
                        },
                        tickPlacement: 'between'
                    }

                };

                var walpjr = new ApexCharts(document.querySelector("#chart2"), chart2);
                walpjr.render();
            }
        })
    }
</script>
<!-- <script>
    $(document).ready(function() {
        let filter = 0
        var date = new Date();
        var firstDay = new Date(date.getFullYear(), 0).toLocaleDateString("en-GB").split('/').reverse().join('-');
        var lastDay = new Date(date.getFullYear(), 11, 31).toLocaleDateString("en-GB").split('/').reverse().join('-');
        var yesterday = new Date().toLocaleDateString('en-GB').split('/').reverse().join('-')

        var firstDayMonth = new Date(date.getFullYear(), date.getMonth(), 1).toLocaleDateString("en-GB").split('/').reverse().join('-');
        var lastDayMonth = new Date(date.getFullYear(), date.getMonth() + 1, 0).toLocaleDateString("en-GB").split('/').reverse().join('-');

        date.setDate(date.getDate() - 6);
        var seven_daysAgo = date.toLocaleDateString("en-GB").split('/').reverse().join('-');

        var limit = $('#limit_showData').val();

        // console.log(firstDay, lastDay)
        $("#overlay").fadeIn(300);
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/statistik_executive/getDetailStatistikWalpjr",
            data: {
                filter: filter,
                limit: limit,
                yesterday: yesterday
            },
            dataType: "JSON",
            success: function(result) {
                $("#overlay").fadeOut(300);
                $('#title').html(`<h4 class="card-title mb-0 text-uppercase">${result.title}</h1>`);
                $("#charta").html(`<div id="chart"></div>`);

                let polda_id = result.data.polda_id
                let polda_name = result.data.polda_name
                let polda_jemenopsrek = result.data.polda_walpjr
                // Chart Wal pjr Lalu Lintas

                var chart = {
                    series: [{
                        name: '<h6>Total Jemenopsrek</h6>',
                        type: 'column',
                        data: polda_jemenopsrek,
                        color: "#11347A"
                    }],
                    chart: {
                        height: '400',
                        type: 'line',
                        stacked: false,
                        events: {
                            dataPointSelection: (event, chartContext, config) => {
                                // var selectedpolda = pad(config.dataPointIndex);
                                window.location.href = '../../executive/Polda_executive/index/' + polda_id[config.dataPointIndex]
                            }
                        },

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
                        categories: polda_name,
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


                var chart = new ApexCharts(document.querySelector("#chart"), chart);
                chart.render();

            }
        })

        topJemenopsrekDay(yesterday);
        topJemenopsrekMonth(firstDayMonth, lastDayMonth);
        topJemenopsrekYear(firstDay, lastDay)

        jemenopsrek_daily(yesterday, firstDayMonth, lastDayMonth, firstDay, lastDay)

        JemenopsreklineChart(seven_daysAgo, yesterday)
        jam();
    })


    $('#limit_showData').on('change', function() {
        let filter = 0
        var limit = $('#limit_showData').val();
        var yesterday = new Date().toLocaleDateString('en-GB').split('/').reverse().join('-')
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/statistik_executive/getDetailStatistikWalpjr",
            data: {
                filter: filter,
                limit: limit,
                yesterday: yesterday
            },
            dataType: "JSON",
            success: function(result) {
                $("#overlay").fadeOut(300);
                $('#title').html(`<h4 class="card-title mb-0 text-uppercase">${result.title}</h1>`);
                $("#charta").html(`<div id="chart"></div>`);

                let polda_id = result.data.polda_id
                let polda_name = result.data.polda_name
                let polda_jemenopsrek = result.data.walpjr

                var chart = {
                    series: [{
                        name: '<h6>Total Jemenopsrek</h6>',
                        type: 'column',
                        data: polda_jemenopsrek,
                        color: "#11347A"
                    }],
                    chart: {
                        height: '400',
                        type: 'line',
                        stacked: false,
                        events: {
                            dataPointSelection: (event, chartContext, config) => {
                                // var selectedpolda = pad(config.dataPointIndex);
                                window.location.href = '../../executive/Polda_executive/index/' + polda_id[config.dataPointIndex]
                            }
                        },

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
                        categories: polda_name,
                        labels: {
                            show: true,
                            style: {
                                colors: ['#f70505'],
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


                var chart = new ApexCharts(document.querySelector("#chart"), chart);
                chart.render();

            }
        })
    })


    function jemenopsrek_daily(yesterday, firstDayMonth, lastDayMonth, firstDay, lastDay) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/statistik_executive/getWalpjrDate",
            dataType: "JSON",
            data: {
                yesterday,
                firstDayMonth,
                lastDayMonth,
                firstDay,
                lastDay
            },
            success: function(result) {
                console.log(result);
                $("#overlay").fadeOut(300);
                $('#jemenopsrekThisDay').text(result.thisDay)
                $('#jemenopsrekThisMonth').text(result.thisMonth)
                $('#jemenopsrekThisYear').text(result.thisYear)

            }
        })
    }


    function ButtonFilter() {
        let filter = 1;
        let start_date = $('#start_date').val()
        let end_date = $('#end_date').val()
        var limit = $('#limit_showData').val();
        if ((start_date != '' && end_date == '') || (start_date == '' && end_date != '')) {
            Swal.fire({
                icon: 'error',
                title: 'Waktu mulai dan waktu akhir harus terisi!',
            })
        } else if (start_date > end_date) {
            Swal.fire({
                icon: 'error',
                title: 'Waktu mulai tidak boleh melewati waktu akhir!',
            })
        } else if (start_date == '' && end_date == '') {
            Swal.fire({
                icon: 'error',
                title: 'Waktu mulai dan waktu akhir belum terisi!',
            })
        } else {
            $("#overlay").fadeIn(300);
            $("#chart").remove();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>executive/statistik_executive/getDetailStatistikWalpjr",
                data: {
                    filter: filter,
                    start_date: start_date,
                    end_date: end_date,
                    limit: limit
                },
                dataType: "JSON",
                success: function(result) {
                    console.log(result)
                    $("#overlay").fadeOut(300);
                    $('#title').html(`<h4 class="card-title mb-0 text-uppercase">${result.title}</h1>`);
                    $("#charta").html(`<div id="chart"></div>`);
                    // $('#btn_export').attr('href', `http://34.143.227.90:3001/v1/laporan_harian/export_laphar?filter=true&start_date=${start_date}&end_date=${end_date}`)

                    let polda_id = result.data.polda_id
                    let polda_name = result.data.polda_name
                    let polda_jemenopsrek = result.data.walpjr

                    var chart = {
                        series: [{
                            name: '<h6>Total Jemenopsrek</h6>',
                            type: 'column',
                            data: polda_jemenopsrek,
                            color: "#11347A"
                        }],
                        chart: {
                            height: '400',
                            type: 'line',
                            stacked: false,
                            events: {
                                dataPointSelection: (event, chartContext, config) => {
                                    // var selectedpolda = pad(config.dataPointIndex);
                                    window.location.href = '../../executive/Polda_executive/index/' + polda_id[config.dataPointIndex]
                                }
                            },

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
                            categories: polda_name,
                            labels: {
                                show: true,
                                style: {
                                    colors: ['#f70505'],
                                    fontSize: '18px',
                                    fontWeight: 1000,
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


                    var chart = new ApexCharts(document.querySelector("#chart"), chart);
                    chart.render();

                }
            })

            JemenopsreklineChart(start_date, end_date)
        }
    }

    function JemenopsreklineChart(seven_daysAgo, yesterday) {

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/Statistik_executive/getLineWalpjr",
            data: {
                start_date: seven_daysAgo,
                end_date: yesterday
            },
            dataType: "JSON",
            success: function(results) {
                $('#titleline').html(`<h4 class="card-title mb-0 text-uppercase">${results.title}</h1>`);
                $("#chartdate").html(`<div id="chart2"></div>`);

                var chart2 = {
                    series: [{
                        name: '<h6>Total Jemenopsrek</h6>',
                        type: 'line',
                        data: results.data.polda_walpjr,
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
                        categories: results.data.polda_name,
                        labels: {
                            show: true,
                            style: {
                                colors: ['#f70505'],
                                fontSize: '18px',
                                fontWeight: 400,
                            }
                        },
                        tickPlacement: 'between'
                    }

                };

                var walpjr = new ApexCharts(document.querySelector("#chart2"), chart2);
                walpjr.render();
            }
        })
    }

    function ButtonExport() {
        let filter = 1;
        let start_date = $('#start_date').val()
        let end_date = $('#end_date').val()
        if (start_date > end_date) {
            Swal.fire({
                icon: 'error',
                title: 'Waktu mulai tidak boleh melewati waktu akhir!',
            })
        } else {
            $("#overlay").fadeIn(300);
            $("#chart").remove();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>executive/statistik_executive/exportDatalakalantas",
                data: {
                    filter: filter,
                    start_date: start_date,
                    end_date: end_date,
                },
                dataType: "JSON",
                success: function(result) {
                    $("#overlay").fadeOut(300);

                    Swal.fire({
                        icon: 'error',
                        title: 'Waktu mulai tidak boleh melewati waktu akhir!',
                    })
                }
            })
        }
    }

    function topJemenopsrekDay(yesterday) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/statistik_executive/getTopWalpjr",
            dataType: "JSON",
            data: {
                yesterday: yesterday
            },
            success: function(result) {
                $("#overlay").fadeOut(300);
                var table = '';
                let nf = new Intl.NumberFormat('en-US');
                for (let i = 0; i < result.length; i++) {
                    let x = parseInt(i)
                    table += `<tr class="text-center"> 
                        <td>  ${no}  </td> 
                        <td>  ${result[i].name_polda}  </td>  
                        <td>  ${result[i].walpjr}  </td> 
                        </tr>`
                }
                $('#tbody-jemenopsrekDay').html(table);
                <?php $mobile = detect_mobile();
                if ($mobile === true) { ?>

                    $('#tableJemenopsrekDay').DataTable({
                        responsive: true,

                        scrollX: true,

                        sDom: '<"dt-panelmenu clearfix"flr>t<"dt-panelfooter clearfix"ip>',

                        // buttons: ["excel", "csv", "pdf"],
                        processing: true,
                        oLanguage: {
                            sSearch: 'Search:'
                        },
                    });

                <?php } ?>
            }
        })
    }

    function topJemenopsrekMonth(firstDayMonth, lastDayMonth) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/statistik_executive/getWalpjrMonth",
            dataType: "JSON",
            data: {
                firstDay: firstDayMonth,
                lastDay: lastDayMonth
            },
            success: function(result) {
                $("#overlay").fadeOut(300);
                var table = '';
                let nf = new Intl.NumberFormat('en-US');
                for (let i = 0; i < result.length; i++) {
                    let x = parseInt(i)
                    table += `<tr class="text-center"> 
                            <td>  ${no}  </td> 
                            <td>  ${result[i].name_polda}  </td>  
                            <td>  ${result[i].walpjr}  </td> 
                            </tr>`
                }
                $('#tbody-jemenopsrekMonth').html(table);
                <?php $mobile = detect_mobile();
                if ($mobile === true) { ?>

                    $('#tableJemenopsrekMonth').DataTable({
                        responsive: true,

                        scrollX: true,

                        sDom: '<"dt-panelmenu clearfix"flr>t<"dt-panelfooter clearfix"ip>',

                        // buttons: ["excel", "csv", "pdf"],
                        processing: true,
                        oLanguage: {
                            sSearch: 'Search:'
                        },
                    });

                <?php } ?>
            }
        })
    }

    function topJemenopsrekYear(firstDay, lastDay) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/statistik_executive/getWalpjrYear",
            dataType: "JSON",
            data: {
                firstDay: firstDay,
                lastDay: lastDay
            },
            success: function(result) {
                $("#overlay").fadeOut(300);
                var table = '';
                let nf = new Intl.NumberFormat('en-US');
                for (let i = 0; i < result.length; i++) {
                    let x = parseInt(i)
                    table += `<tr class="text-center"> 
                            <td>  ${no}  </td> 
                            <td>  ${result[i].name_polda}  </td>  
                            <td>  ${result[i].walpjr}  </td> 
                            </tr>`
                }
                $('#tbody-jemenopsrekYear').html(table);
                <?php $mobile = detect_mobile();
                if ($mobile === true) { ?>

                    $('#tableJemenopsrekYear').DataTable({
                        responsive: true,

                        scrollX: true,

                        sDom: '<"dt-panelmenu clearfix"flr>t<"dt-panelfooter clearfix"ip>',

                        // buttons: ["excel", "csv", "pdf"],
                        processing: true,
                        oLanguage: {
                            sSearch: 'Search:'
                        },
                    });

                <?php } ?>
            }
        })
    }
</script> -->