<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <a href="<?= base_url('executive/Polda_executive/statistik_polda/' . $data['id']) ?>" style="color:#0a0a0a ;" class="fs-6"><i class="fas fa-less-than"></i> Kembali</a>
        </div>
        <div class="col-md-6 text-end align-self-center">
            <a href="<?= ENV_API_BASE_URL ?>v1/laporan_harian/sim" type="button" button class="btn btn-outline-primary btn-lg" style="width: 200px; border-color:#0007D8;">Export Laporan</a>
        </div>
    </div>
    <div class="card mt-5 shadow" style="border-radius:36px !important;">
        <div class="row m-2">
            <div class="col-sm-4 col-md-4 align-self-center">
                <h4>STATISTIK DATA <span style="text-transform:uppercase ; color:#0007D8">SIM</span> </h4>
                <h4> </h4>
                <h4 class="text-uppercase"><?= $data['poldaid']['name_polda']; ?></h4>

            </div>
            <div class="col-sm-4 col-md-4"></div>
            <div class="col-sm-4 col-md-4">
                <div class="row m-2">
                    <!-- <div class="col-md-4 col-sm-4 col-xl-4 align-self-center">
                        <div class="card mt-2 mb-2" style="border-radius: 20px !important; border-color:#D9D9D9">
                            <div class="card-body">
                                <div class="row justify-content-between align-items-center" style="height: 120px;">
                                    <div class="col-md-7">
                                        <h5 class="mb-0 ms-3">Hari Ini</h5>
                                    </div>
                                    <div class="col-md-5 float-end">
                                        <h1 class="text-center mb-0" style="color:#464646; font-size:20px; color:#0007D8;" id="simThisDay"></h1>
                                        <p class="text-center mb-0">Sim</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-md-4 col-sm-4 col-xl-4 align-self-center">
                        <div class="card mt-2 mb-2" style="border-radius: 20px !important; border-color:#D9D9D9">
                            <div class="card-body">
                                <div class="row justify-content-between align-items-center" style="height: 120px;">
                                    <div class="col-md-7">
                                       <h5 class="mb-0 ms-3">Bulan Ini <span class="text-danger">(<?= date('M'); ?>)</span></h5>
                                    </div>
                                    <div class="col-md-5 float-end">
                                        <h1 class="text-center mb-0" style="color:#464646; font-size:20px; color:#0007D8;" id="simThisMonth"></h1>
                                        <p class="text-center mb-0">Sim</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-md-12 col-sm-12 col-xl-12 align-self-center">
                        <div class="card mt-2 mb-2" style="border-radius: 20px !important; border-color:#D9D9D9">
                            <div class="card-body">
                                <div class="row justify-content-between align-items-center" style="height: 120px;">
                                    <div class="col-md-7">
                                        <h5 class="mb-0 ms-3">Tahun Ini</h5>
                                    </div>
                                    <div class="col-md-5 float-end">
                                        <h1 class="text-center mb-0" style="color:#464646; font-size:20px; color:#0007D8;" id="simThisYear"></h1>
                                        <p class="text-center mb-0">Sim</p>
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
                                    <input class="form-control form-control-lg" type="date" name="start_date" id="start_date" value="<?= date('Y-m-d', strtotime("-6 days")); ?>">
                                </div>
                                <div class="col-md-4">
                                    <input class="form-control form-control-lg" type="date" name="end_date" id="end_date" value="<?= date('Y-m-d'); ?>">
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-primary float-end btn-lg" style="width: 100%;" onclick="ButtonFilter()">Tampilkan</button>
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
    </div>

</div>
<script src="<?php echo base_url(); ?>assets/admin/libs/sweetalert2/sweetalert2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        let id = '<?= $data['poldaid']['id'] ?>'
        let filter = 0
        var date = new Date();
        var firstDay = new Date(date.getFullYear(), 0).toLocaleDateString("en-GB").split('/').reverse().join('-');
        var lastDay = new Date(date.getFullYear(), 11, 31).toLocaleDateString("en-GB").split('/').reverse().join('-');
        var yesterday = new Date().toLocaleDateString('en-GB').split('/').reverse().join('-')

        var firstDayMonth = new Date(date.getFullYear(), date.getMonth(), 1).toLocaleDateString("en-GB").split('/').reverse().join('-');
        var lastDayMonth = new Date(date.getFullYear(), date.getMonth() + 1, 0).toLocaleDateString("en-GB").split('/').reverse().join('-');

        date.setDate(date.getDate() - 6);
        var seven_daysAgo = date.toLocaleDateString("en-GB").split('/').reverse().join('-');




        sim_daily(yesterday, firstDayMonth, lastDayMonth, firstDay, lastDay, id)
        SimlineChart(seven_daysAgo, yesterday, id)
        jam();
    })

    function ButtonFilter() {
        let id = '<?= $data['poldaid']['id'] ?>'

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
            SimlineChart(start_date, end_date, id)

        }
    }

    function sim_daily(yesterday, firstDayMonth, lastDayMonth, firstDay, lastDay, id) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/statistik_polda_executive/getSimDate/" + id,
            dataType: "JSON",
            data: {
                yesterday,
                firstDayMonth,
                lastDayMonth,
                firstDay,
                lastDay
            },
            success: function(result) {
                $("#overlay").fadeOut(300);
                $('#simThisDay').text(result.thisDay)
                $('#simThisMonth').text(result.thisMonth)
                $('#simThisYear').text(result.thisYear)
                $('#daysimbarua').text(result.detailsthisDay.baru_a)
                $('#daysimbaruc').text(result.detailsthisDay.baru_c)
                $('#daysimbaruc1').text(result.detailsthisDay.baru_c1)
                $('#daysimbaruc2').text(result.detailsthisDay.baru_c2)
                $('#daysimbarud').text(result.detailsthisDay.baru_d)
                $('#daysimbarud1').text(result.detailsthisDay.baru_d1)
                $('#daysimperpanjangana').text(result.detailsthisDay.perpanjangan_a)
                $('#daysimperpanjanganau').text(result.detailsthisDay.perpanjangan_au)
                $('#daysimperpanjanganb1').text(result.detailsthisDay.perpanjangan_b1)
                $('#daysimperpanjanganb1u').text(result.detailsthisDay.perpanjangan_b1u)
                $('#daysimperpanjanganb2').text(result.detailsthisDay.perpanjangan_b2)
                $('#daysimperpanjanganb2u').text(result.detailsthisDay.perpanjangan_b2u)
                $('#daysimperpanjanganc').text(result.detailsthisDay.perpanjangan_c)
                $('#daysimperpanjanganc1').text(result.detailsthisDay.perpanjangan_c1)
                $('#daysimperpanjanganc2').text(result.detailsthisDay.perpanjangan_c2)
                $('#daysimperpanjangand').text(result.detailsthisDay.perpanjangan_d)
                $('#daysimperpanjangand1').text(result.detailsthisDay.perpanjangan_d1)
                $('#daysimpeningkatanau').text(result.detailsthisDay.peningkatan_au)
                $('#daysimpeningkatanb1').text(result.detailsthisDay.peningkatan_b1)
                $('#daysimpeningkatanb1u').text(result.detailsthisDay.peningkatan_b1u)
                $('#daysimpeningkatanb2').text(result.detailsthisDay.peningkatan_b2)
                $('#daysimpeningkatanb2u').text(result.detailsthisDay.peningkatan_b2u)
                $('#monthsimbarua').text(result.detailsthisMonth.baru_a)
                $('#monthsimbaruc').text(result.detailsthisMonth.baru_c)
                $('#monthsimbaruc1').text(result.detailsthisMonth.baru_c1)
                $('#monthsimbaruc2').text(result.detailsthisMonth.baru_c2)
                $('#monthsimbarud').text(result.detailsthisMonth.baru_d)
                $('#monthsimbarud1').text(result.detailsthisMonth.baru_d1)
                $('#monthsimperpanjangana').text(result.detailsthisMonth.perpanjangan_a)
                $('#monthsimperpanjanganau').text(result.detailsthisMonth.perpanjangan_au)
                $('#monthsimperpanjanganb1').text(result.detailsthisMonth.perpanjangan_b1)
                $('#monthsimperpanjanganb1u').text(result.detailsthisMonth.perpanjangan_b1u)
                $('#monthsimperpanjanganb2').text(result.detailsthisMonth.perpanjangan_b2)
                $('#monthsimperpanjanganb2u').text(result.detailsthisMonth.perpanjangan_b2u)
                $('#monthsimperpanjanganc').text(result.detailsthisMonth.perpanjangan_c)
                $('#monthsimperpanjanganc1').text(result.detailsthisMonth.perpanjangan_c1)
                $('#monthsimperpanjanganc2').text(result.detailsthisMonth.perpanjangan_c2)
                $('#monthsimperpanjangand').text(result.detailsthisMonth.perpanjangan_d)
                $('#monthsimperpanjangand1').text(result.detailsthisMonth.perpanjangan_d1)
                $('#monthsimpeningkatanau').text(result.detailsthisMonth.peningkatan_au)
                $('#monthsimpeningkatanb1').text(result.detailsthisMonth.peningkatan_b1)
                $('#monthsimpeningkatanb1u').text(result.detailsthisMonth.peningkatan_b1u)
                $('#monthsimpeningkatanb2').text(result.detailsthisMonth.peningkatan_b2)
                $('#monthsimpeningkatanb2u').text(result.detailsthisMonth.peningkatan_b2u)
                $('#yearsimbarua').text(result.detailsthisYear.baru_a)
                $('#yearsimbaruc').text(result.detailsthisYear.baru_c)
                $('#yearsimbaruc1').text(result.detailsthisYear.baru_c1)
                $('#yearsimbaruc2').text(result.detailsthisYear.baru_c2)
                $('#yearsimbarud').text(result.detailsthisYear.baru_d)
                $('#yearsimbarud1').text(result.detailsthisYear.baru_d1)
                $('#yearsimperpanjangana').text(result.detailsthisYear.perpanjangan_a)
                $('#yearsimperpanjanganau').text(result.detailsthisYear.perpanjangan_au)
                $('#yearsimperpanjanganb1').text(result.detailsthisYear.perpanjangan_b1)
                $('#yearsimperpanjanganb1u').text(result.detailsthisYear.perpanjangan_b1u)
                $('#yearsimperpanjanganb2').text(result.detailsthisYear.perpanjangan_b2)
                $('#yearsimperpanjanganb2u').text(result.detailsthisYear.perpanjangan_b2u)
                $('#yearsimperpanjanganc').text(result.detailsthisYear.perpanjangan_c)
                $('#yearsimperpanjanganc1').text(result.detailsthisYear.perpanjangan_c1)
                $('#yearsimperpanjanganc2').text(result.detailsthisYear.perpanjangan_c2)
                $('#yearsimperpanjangand').text(result.detailsthisYear.perpanjangan_d)
                $('#yearsimperpanjangand1').text(result.detailsthisYear.perpanjangan_d1)
                $('#yearsimpeningkatanau').text(result.detailsthisYear.peningkatan_au)
                $('#yearsimpeningkatanb1').text(result.detailsthisYear.peningkatan_b1)
                $('#yearsimpeningkatanb1u').text(result.detailsthisYear.peningkatan_b1u)
                $('#yearsimpeningkatanb2').text(result.detailsthisYear.peningkatan_b2)
                $('#yearsimpeningkatanb2u').text(result.detailsthisYear.peningkatan_b2u)

            }
        })
    }


    function SimlineChart(seven_daysAgo, yesterday, id) {

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/statistik_polda_executive/getLineSim/" + id,
            data: {
                start_date: seven_daysAgo,
                end_date: yesterday
            },
            dataType: "JSON",
            success: function(result) {
                $("#overlay").fadeOut(300);

                let nf = new Intl.NumberFormat('en-US');

                let polda_month = result.data.polda_month
                let baru_a = result.data.baru_a
                let baru_c = result.data.baru_c
                let baru_c1 = result.data.baru_c1
                let baru_c2 = result.data.baru_c2
                let baru_d = result.data.baru_d
                let baru_d1 = result.data.baru_d1

                let perpanjangan_a = result.data.perpanjangan_a
                let perpanjangan_au = result.data.perpanjangan_au
                let perpanjangan_c = result.data.perpanjangan_c
                let perpanjangan_c1 = result.data.perpanjangan_c1
                let perpanjangan_c2 = result.data.perpanjangan_c2
                let perpanjangan_d = result.data.perpanjangan_d
                let perpanjangan_d1 = result.data.perpanjangan_d1
                let perpanjangan_b1 = result.data.perpanjangan_b1
                let perpanjangan_b1u = result.data.perpanjangan_b1u
                let perpanjangan_b2 = result.data.perpanjangan_b2
                let perpanjangan_b2u = result.data.perpanjangan_b2u

                let peningkatan_au = result.data.peningkatan_au
                let peningkatan_b1 = result.data.peningkatan_b1
                let peningkatan_b1u = result.data.peningkatan_b1u
                let peningkatan_b2 = result.data.peningkatan_b2
                let peningkatan_b2u = result.data.peningkatan_b2u






                $('#titleline').html(`<h4 class="card-title mb-0 text-uppercase">${result.title}</h1>`);
                $("#chartdate").html(`<div id="chart2"></div>`);


                if (seven_daysAgo == yesterday) {
                    var chart2 = {
                        series: [{
                            name: 'Baru A',
                            type: 'column',
                            data: baru_a
                        }, {
                            name: 'Baru C',
                            type: 'column',
                            data: baru_c
                        }, {
                            name: 'Baru CI',
                            type: 'column',
                            data: baru_c1
                        }, {
                            name: 'Baru CII',
                            type: 'column',
                            data: baru_c2
                        }, {
                            name: 'Baru D',
                            type: 'column',
                            data: baru_d
                        }, {
                            name: 'Baru DI',
                            type: 'column',
                            data: baru_d1
                        }, {
                            name: 'Perpanjangan A',
                            type: 'column',
                            data: perpanjangan_a
                        }, {
                            name: 'Perpanjangan C',
                            type: 'column',
                            data: perpanjangan_c
                        }, {
                            name: 'Perpanjangan CI',
                            type: 'column',
                            data: perpanjangan_c1
                        }, {
                            name: 'Perpanjangan CII',
                            type: 'column',
                            data: perpanjangan_c2
                        }, {
                            name: 'Perpanjangan D',
                            type: 'column',
                            data: perpanjangan_d
                        }, {
                            name: 'Perpanjangan DI',
                            type: 'column',
                            data: perpanjangan_d1
                        }, {
                            name: 'Perpanjangan AU',
                            type: 'column',
                            data: perpanjangan_au
                        }, {
                            name: 'Perpanjangan BI',
                            type: 'column',
                            data: perpanjangan_b1
                        }, {
                            name: 'Perpanjangan BIU',
                            type: 'column',
                            data: perpanjangan_b1u
                        }, {
                            name: 'Perpanjangan BII',
                            type: 'column',
                            data: perpanjangan_b2
                        }, {
                            name: 'Perpanjangan BIIU',
                            type: 'column',
                            data: perpanjangan_b2u
                        }, ],
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

                            offsetY: -15
                        },
                        //  markers: {
                        //      size: 4,
                        //      colors: '#kkk',
                        //      fillOpacity: 0.9,
                        //      shape: "circle",
                        //      radius: 2,
                        //  },
                        xaxis: {
                            categories: polda_month,
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
                        tooltip: {
                            custom: function({
                                series,
                                seriesIndex,
                                dataPointIndex,
                                seriesName,
                                w
                            }) {

                                return (
                                    `<div style="width: 30rem; height:20rem;">
                                   <div class="col-md-12">
                                       <div class="row">
                                           <div class="col-md-12">
                                               <div class="my-2 text-center">    
                                                   <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                               </div>
                                                   <div class="row">
                                                       <div class="col-md-4 ms-1">
                                                           <span class="fw-bold">Baru</span><br>
                                                           <div class="row">
                                                               <div class="col-md-2">
                                                                   <span class="fw-bold">A</span><br>
                                                                   <span class="fw-bold">C</span><br>
                                                                   <span class="fw-bold">CI</span><br>
                                                                   <span class="fw-bold">CII</span><br>
                                                                   <span class="fw-bold">D</span><br>
                                                                   <span class="fw-bold">DI</span><br>
                                                               </div>
                                                               <div class="col-md-1">
                                                                   <span class="fw-bold">:</span><br>
                                                                   <span class="fw-bold">:</span><br>
                                                                   <span class="fw-bold">:</span><br>
                                                                   <span class="fw-bold">:</span><br>
                                                                   <span class="fw-bold">:</span><br>
                                                                   <span class="fw-bold">:</span><br>
                                                               </div>
                                                               <div class="col-md-3">
                                                                   <span class="fw-bold">${nf.format(baru_a[dataPointIndex])}</span><br>
                                                                   <span class="fw-bold">${nf.format(baru_c[dataPointIndex])}</span><br>
                                                                   <span class="fw-bold">${nf.format(baru_c1[dataPointIndex])}</span><br>
                                                                   <span class="fw-bold">${nf.format(baru_c2[dataPointIndex])}</span><br>
                                                                   <span class="fw-bold">${nf.format(baru_d[dataPointIndex])}</span><br>
                                                                   <span class="fw-bold">${nf.format(baru_d1[dataPointIndex])}</span><br>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <div class="col-md-4 ms-n3 me-2">
                                                           <span class="fw-bold">Perpanjangan</span><br>
                                                           <div class="row ms-2">
                                                               <div class="col-md-2">
                                                                   <span class="fw-bold">A</span><br>
                                                                   <span class="fw-bold">AU</span><br>
                                                                   <span class="fw-bold">C</span><br>
                                                                   <span class="fw-bold">CI</span><br>
                                                                   <span class="fw-bold">CII</span><br>
                                                                   <span class="fw-bold">D</span><br>
                                                                   <span class="fw-bold">DI</span><br>
                                                                   <span class="fw-bold">BI</span><br>
                                                                   <span class="fw-bold">BIU</span><br>
                                                                   <span class="fw-bold">BI</span><br>
                                                                   <span class="fw-bold">BIIU</span><br>
                                                               </div>
                                                               <div class="col-md-1">
                                                                   <span class="fw-bold">:</span><br>
                                                                   <span class="fw-bold">:</span><br>
                                                                   <span class="fw-bold">:</span><br>
                                                                   <span class="fw-bold">:</span><br>
                                                                   <span class="fw-bold">:</span><br>
                                                                   <span class="fw-bold">:</span><br>
                                                                   <span class="fw-bold">:</span><br>
                                                                   <span class="fw-bold">:</span><br>
                                                                   <span class="fw-bold">:</span><br>
                                                                   <span class="fw-bold">:</span><br>
                                                                   <span class="fw-bold">:</span><br>
                                                               </div>
                                                               <div class="col-md-3">
                                                                   <span class="fw-bold">${nf.format(perpanjangan_a[dataPointIndex])}</span><br>
                                                                   <span class="fw-bold">${nf.format(perpanjangan_au[dataPointIndex])}</span><br>
                                                                   <span class="fw-bold">${nf.format(perpanjangan_c[dataPointIndex])}</span><br>
                                                                   <span class="fw-bold">${nf.format(perpanjangan_c1[dataPointIndex])}</span><br>
                                                                   <span class="fw-bold">${nf.format(perpanjangan_c2[dataPointIndex])}</span><br>
                                                                   <span class="fw-bold">${nf.format(perpanjangan_d[dataPointIndex])}</span><br>
                                                                   <span class="fw-bold">${nf.format(perpanjangan_d1[dataPointIndex])}</span><br>
                                                                   <span class="fw-bold">${nf.format(perpanjangan_b1[dataPointIndex])}</span><br>
                                                                   <span class="fw-bold">${nf.format(perpanjangan_b1u[dataPointIndex])}</span><br>
                                                                   <span class="fw-bold">${nf.format(perpanjangan_b2[dataPointIndex])}</span><br>
                                                                   <span class="fw-bold">${nf.format(perpanjangan_b2u[dataPointIndex])}</span><br>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <div class="col-md-4">
                                                           <span class="fw-bold">Peningkatan</span><br>
                                                           <div class="row">
                                                               <div class="col-md-2">
                                                                   <span class="fw-bold">AU</span><br>
                                                                   <span class="fw-bold">BI</span><br>
                                                                   <span class="fw-bold">BIU</span><br>
                                                                   <span class="fw-bold">BII</span><br>
                                                                   <span class="fw-bold">BIIU</span><br>
                                                               </div>
                                                               <div class="col-md-1">
                                                                   <span class="fw-bold">:</span><br>
                                                                   <span class="fw-bold">:</span><br>
                                                                   <span class="fw-bold">:</span><br>
                                                                   <span class="fw-bold">:</span><br>
                                                                   <span class="fw-bold">:</span><br>
                                                               </div>
                                                               <div class="col-md-3">
                                                                   <span class="fw-bold">${nf.format(peningkatan_au[dataPointIndex])}</span><br>
                                                                   <span class="fw-bold">${nf.format(peningkatan_b1[dataPointIndex])}</span><br>
                                                                   <span class="fw-bold">${nf.format(peningkatan_b1u[dataPointIndex])}</span><br>
                                                                   <span class="fw-bold">${nf.format(peningkatan_b2[dataPointIndex])}</span><br>
                                                                   <span class="fw-bold">${nf.format(peningkatan_b2u[dataPointIndex])}</span><br>
                                                               </div>
                                                           </div>
                                                       </div>
                                                   </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>`
                                );
                            }
                        }

                    };
                } else {
                    var chart2 = {
                        series: [{
                            name: 'Baru A',
                            data: baru_a
                        }, {
                            name: 'Baru C',
                            data: baru_c
                        }, {
                            name: 'Baru CI',
                            data: baru_c1
                        }, {
                            name: 'Baru CII',
                            data: baru_c2
                        }, {
                            name: 'Baru D',
                            data: baru_d
                        }, {
                            name: 'Baru DI',
                            data: baru_d1
                        }, {
                            name: 'Perpanjangan A',
                            data: perpanjangan_a
                        }, {
                            name: 'Perpanjangan C',
                            data: perpanjangan_c
                        }, {
                            name: 'Perpanjangan CI',
                            data: perpanjangan_c1
                        }, {
                            name: 'Perpanjangan CII',
                            data: perpanjangan_c2
                        }, {
                            name: 'Perpanjangan D',
                            data: perpanjangan_d
                        }, {
                            name: 'Perpanjangan DI',
                            data: perpanjangan_d1
                        }, {
                            name: 'Perpanjangan AU',
                            data: perpanjangan_au
                        }, {
                            name: 'Perpanjangan BI',
                            data: perpanjangan_b1
                        }, {
                            name: 'Perpanjangan BIU',
                            data: perpanjangan_b1u
                        }, {
                            name: 'Perpanjangan BII',
                            data: perpanjangan_b2
                        }, {
                            name: 'Perpanjangan BIIU',
                            data: perpanjangan_b2u
                        }, ],
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

                            offsetY: -15
                        },
                        //  markers: {
                        //      size: 4,
                        //      colors: '#kkk',
                        //      fillOpacity: 0.9,
                        //      shape: "circle",
                        //      radius: 2,
                        //  },
                        xaxis: {
                            categories: polda_month,
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
                        tooltip: {
                            custom: function({
                                series,
                                seriesIndex,
                                dataPointIndex,
                                seriesName,
                                w
                            }) {

                                return (
                                    `<div style="width: 30rem; height:20rem;">
                                   <div class="col-md-12">
                                       <div class="row">
                                           <div class="col-md-12">
                                               <div class="my-2 text-center">    
                                                   <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                               </div>
                                                   <div class="row">
                                                       <div class="col-md-4 ms-1">
                                                           <span class="fw-bold">Baru</span><br>
                                                           <div class="row">
                                                               <div class="col-md-2">
                                                                   <span class="fw-bold">A</span><br>
                                                                   <span class="fw-bold">C</span><br>
                                                                   <span class="fw-bold">CI</span><br>
                                                                   <span class="fw-bold">CII</span><br>
                                                                   <span class="fw-bold">D</span><br>
                                                                   <span class="fw-bold">DI</span><br>
                                                               </div>
                                                               <div class="col-md-1">
                                                                   <span class="fw-bold">:</span><br>
                                                                   <span class="fw-bold">:</span><br>
                                                                   <span class="fw-bold">:</span><br>
                                                                   <span class="fw-bold">:</span><br>
                                                                   <span class="fw-bold">:</span><br>
                                                                   <span class="fw-bold">:</span><br>
                                                               </div>
                                                               <div class="col-md-3">
                                                                   <span class="fw-bold">${nf.format(baru_a[dataPointIndex])}</span><br>
                                                                   <span class="fw-bold">${nf.format(baru_c[dataPointIndex])}</span><br>
                                                                   <span class="fw-bold">${nf.format(baru_c1[dataPointIndex])}</span><br>
                                                                   <span class="fw-bold">${nf.format(baru_c2[dataPointIndex])}</span><br>
                                                                   <span class="fw-bold">${nf.format(baru_d[dataPointIndex])}</span><br>
                                                                   <span class="fw-bold">${nf.format(baru_d1[dataPointIndex])}</span><br>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <div class="col-md-4 ms-n3 me-2">
                                                           <span class="fw-bold">Perpanjangan</span><br>
                                                           <div class="row ms-2">
                                                               <div class="col-md-2">
                                                                   <span class="fw-bold">A</span><br>
                                                                   <span class="fw-bold">AU</span><br>
                                                                   <span class="fw-bold">C</span><br>
                                                                   <span class="fw-bold">CI</span><br>
                                                                   <span class="fw-bold">CII</span><br>
                                                                   <span class="fw-bold">D</span><br>
                                                                   <span class="fw-bold">DI</span><br>
                                                                   <span class="fw-bold">BI</span><br>
                                                                   <span class="fw-bold">BIU</span><br>
                                                                   <span class="fw-bold">BI</span><br>
                                                                   <span class="fw-bold">BIIU</span><br>
                                                               </div>
                                                               <div class="col-md-1">
                                                                   <span class="fw-bold">:</span><br>
                                                                   <span class="fw-bold">:</span><br>
                                                                   <span class="fw-bold">:</span><br>
                                                                   <span class="fw-bold">:</span><br>
                                                                   <span class="fw-bold">:</span><br>
                                                                   <span class="fw-bold">:</span><br>
                                                                   <span class="fw-bold">:</span><br>
                                                                   <span class="fw-bold">:</span><br>
                                                                   <span class="fw-bold">:</span><br>
                                                                   <span class="fw-bold">:</span><br>
                                                                   <span class="fw-bold">:</span><br>
                                                               </div>
                                                               <div class="col-md-3">
                                                                   <span class="fw-bold">${nf.format(perpanjangan_a[dataPointIndex])}</span><br>
                                                                   <span class="fw-bold">${nf.format(perpanjangan_au[dataPointIndex])}</span><br>
                                                                   <span class="fw-bold">${nf.format(perpanjangan_c[dataPointIndex])}</span><br>
                                                                   <span class="fw-bold">${nf.format(perpanjangan_c1[dataPointIndex])}</span><br>
                                                                   <span class="fw-bold">${nf.format(perpanjangan_c2[dataPointIndex])}</span><br>
                                                                   <span class="fw-bold">${nf.format(perpanjangan_d[dataPointIndex])}</span><br>
                                                                   <span class="fw-bold">${nf.format(perpanjangan_d1[dataPointIndex])}</span><br>
                                                                   <span class="fw-bold">${nf.format(perpanjangan_b1[dataPointIndex])}</span><br>
                                                                   <span class="fw-bold">${nf.format(perpanjangan_b1u[dataPointIndex])}</span><br>
                                                                   <span class="fw-bold">${nf.format(perpanjangan_b2[dataPointIndex])}</span><br>
                                                                   <span class="fw-bold">${nf.format(perpanjangan_b2u[dataPointIndex])}</span><br>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <div class="col-md-4">
                                                           <span class="fw-bold">Peningkatan</span><br>
                                                           <div class="row">
                                                               <div class="col-md-2">
                                                                   <span class="fw-bold">AU</span><br>
                                                                   <span class="fw-bold">BI</span><br>
                                                                   <span class="fw-bold">BIU</span><br>
                                                                   <span class="fw-bold">BII</span><br>
                                                                   <span class="fw-bold">BIIU</span><br>
                                                               </div>
                                                               <div class="col-md-1">
                                                                   <span class="fw-bold">:</span><br>
                                                                   <span class="fw-bold">:</span><br>
                                                                   <span class="fw-bold">:</span><br>
                                                                   <span class="fw-bold">:</span><br>
                                                                   <span class="fw-bold">:</span><br>
                                                               </div>
                                                               <div class="col-md-3">
                                                                   <span class="fw-bold">${nf.format(peningkatan_au[dataPointIndex])}</span><br>
                                                                   <span class="fw-bold">${nf.format(peningkatan_b1[dataPointIndex])}</span><br>
                                                                   <span class="fw-bold">${nf.format(peningkatan_b1u[dataPointIndex])}</span><br>
                                                                   <span class="fw-bold">${nf.format(peningkatan_b2[dataPointIndex])}</span><br>
                                                                   <span class="fw-bold">${nf.format(peningkatan_b2u[dataPointIndex])}</span><br>
                                                               </div>
                                                           </div>
                                                       </div>
                                                   </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>`
                                );
                            }
                        }

                    };
                }

                var ditregident = new ApexCharts(document.querySelector("#chart2"), chart2);
                ditregident.render();
            }
        })
    }
</script>