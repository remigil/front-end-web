<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title><?php echo $title; ?> | K3I</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />


    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/logo-k3i.png">


    <!-- twitter-bootstrap-wizard css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/libs/twitter-bootstrap-wizard/prettify.css">

    <!-- datepicker css -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">

    <!-- select2 css -->
    <link href="<?php echo base_url(); ?>assets/admin/css/select2.min.css" rel="stylesheet" />

    <!-- dropify js -->
    <link href="<?php echo base_url(); ?>assets/admin/css/dropify.css" rel="stylesheet" type="text/css" />

    <!-- choices css -->
    <link href="<?php echo base_url(); ?>assets/admin/libs/choices.js/public/assets/styles/choices.min.css" rel="stylesheet" type="text/css" />


    <!-- Sweet Alert-->
    <link href="<?php echo base_url(); ?>assets/admin/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

    <!-- dropzone css -->
    <link href="<?php echo base_url(); ?>assets/admin/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />

    <!-- DataTables -->
    <link href="<?php echo base_url(); ?>assets/admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="<?php echo base_url(); ?>assets/admin/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- plugin css -->
    <link href="<?php echo base_url(); ?>assets/admin/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

    <!-- glightbox css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/libs/glightbox/css/glightbox.min.css">

    <!-- plugin css -->
    <link href="<?php echo base_url(); ?>assets/admin/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

    <!-- preloader css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/preloader.min.css" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="<?php echo base_url(); ?>assets/admin/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?php echo base_url(); ?>assets/admin/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?php echo base_url(); ?>assets/admin/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />




    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/clockpicker.css">


    <link rel="stylesheet" href="https://cdn3.devexpress.com/jslib/18.2.6/css/dx.common.css" />
    <link rel="stylesheet" href="https://cdn3.devexpress.com/jslib/18.2.6/css/dx.light.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <style>
        #overlay {
            position: fixed;
            top: 0;
            z-index: 3000;
            width: 100%;
            height: 100%;
            display: none;
            background: rgba(0, 0, 0, 0.6);
        }

        .loading {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            font: 14px arial;
        }

        .spinner {
            width: 40px;
            height: 40px;
            border: 4px #ddd solid;
            border-top: 4px #2e93e6 solid;
            border-radius: 50%;
            animation: sp-anime 0.8s infinite linear;
        }

        @keyframes sp-anime {
            100% {
                transform: rotate(360deg);
            }
        }

        .is-hide {
            display: none;
        }
    </style>

    <!-- JAVASCRIPT -->
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script> -->

    <script src="<?php echo base_url(); ?>assets/admin/libs/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/libs/metismenu/metisMenu.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/libs/simplebar/simplebar.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/libs/node-waves/waves.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/libs/feather-icons/feather.min.js"></script>


    <script src="https://cdn3.devexpress.com/jslib/18.2.6/js/dx.all.js"></script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>



    <script>
        var csfrData = {};
        csfrData['<?php echo $csrf_name; ?>'] = '<?php echo $csrf_token; ?>';
        $.ajaxSetup({
            data: csfrData
        });
    </script>
</head>

<body>
    <div id="overlay">
        <div class="loading">
            <div class="spinner" style="margin-left: 23px;margin-bottom: 10px;"></div>
            <p style="color: white; font-size: 15px; margin-left: 3px;">Please Wait</p>
        </div>
    </div>
    <header id="page-topbar" style="background: #fff;">
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="container-fluid">
                    <div class="container-fluid">
                        <div class="navbar">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12 d-flex align-items-center" style="margin:-20px 0 -20px 0;">
                                        <div class="col-md-6">
                                            <a href="<?= base_url() ?>dashboard/Dashboardeksekutif">
                                                <iconify-icon icon="cil:arrow-circle-left" style="font-size: 30px; color:#007DD8;"></iconify-icon>
                                            </a>
                                            <span class="fs-1" style="color:#000;"><b style="text-transform: uppercase; "> | </b></span>
                                            <a href="<?= base_url() ?>dashboard/Dashboardeksekutif">
                                                <iconify-icon icon="cil:home" style="font-size: 30px; color: #000;"></iconify-icon>
                                            </a>
                                            <a href="<?= base_url() ?>dashboard/Dashboardeksekutif"><span class=" fs-5" style="color:#000;">Welcome to <b style="text-transform: uppercase; ">Dashboard Executive</b></span></a>
                                        </div>
                                        <div class="col-md-4">
                                            <p style="text-align: end;position: relative;top: 12px; margin-right:15px">
                                                <b style="text-transform: uppercase;font-size: 18px;">
                                                    <?php echo format_indoHari(date('Y-m-d')) ?>
                                                </b><br>
                                                <span id="jam" style="font-size:15px;font-weight: bold;"></span>
                                            </p>
                                        </div>
                                        <div class="col-md-2 d-flex align-items-center ms-n5 ms-n5 ">
                                            <a href="https://irsms.korlantas.polri.go.id/dashboard/irsms_icell" target="_blank"><button type="button" class="btn btn-sm btn-outline-primary float-end border border-primary me-3 ms-5">IRSMS</button></a>
                                            <a href="http://rc.korlantas.polri.go.id:8900/eri2017/laprekappolda.php" target="_blank"><button type="button" class="btn btn-sm btn-outline-primary float-end border border-primary me-3">ERI</button></a>

                                            <!-- notif -->
                                            <div class="dropdown d-inline-block">
                                                <button type="button" class="btn header-item noti-icon position-relative openNotif" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img width="20px" class="" src="<?= base_url('assets/sidebar/icon-notif-grey.svg') ?>" alt="">
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                                                    <div class="p-3">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <h6 class="m-0"> Notifications</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="listDataNotif">
                                                    </div>
                                                    <div class="p-2 border-top d-grid">
                                                        <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                                            <i class="mdi mdi-arrow-right-circle me-1"></i> <span>View More..</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown d-inline-block">
                                                <button type="button" class="btn header-item bg-soft-light  mb-4" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img height="75px" width="30px" class=" rounded-circle" src="<?= base_url('assets/sidebar/icon-profile-grey.svg'); ?>" alt="Header Avatar">
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="apps-contacts-profile.html"><i class="mdi mdi-face-profile font-size-16 align-middle me-1"></i> Profile</a>
                                                    <a class="dropdown-item" href="auth-lock-screen.html"><i class="mdi mdi-lock font-size-16 align-middle me-1"></i> Lock Screen</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="<?php echo base_url() ?>login/logout"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a>
                                                </div>
                                            </div>
                                            <b style="text-transform: uppercase; color:#007DD8;"><?= $this->session->userdata('full_name'); ?></b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </header>
    <div class="filter p-3 mt-5" style="background-color: #2E2E2E; height:125px;">
        <div class="container">

            <form action="" id="form_filter" class="p-3">
                <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" style="display: none">

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group row">
                            <div class="" id="polda_"></div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <label for="waktu" class="form-label text-white text-uppercase">Waktu</label>
                        <div class="row">
                            <div class="col-md-5">
                                <input class="form-control" type="date" name="start_date" id="start_date">
                            </div>
                            <div class="col-md-5">
                                <input class="form-control" type="date" name="end_date" id="end_date">
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-primary" type="submit" id="btn_filter" style="width: 100%;">Tampilkan</button>
                            </div>
                        </div>

                    </div>


                </div>
            </form>

        </div>
    </div>
    <div class="container-fluid mt-5">
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="container-fluid">
                    <div class="row mt-5">
                        <div class="col-md-1 d-flex">
                            <div id="logo"></div>
                        </div>
                        <div class="col-md-7 align-self-center">
                            <div id="nama"></div>
                            <p>Today is <?= date('l, j F Y') ?></p>
                        </div>
                        <div class="col-md-3 text-end align-self-center">
                            <a href="http://34.143.227.90:3001/v1/laporan_harian/export_laphar?polda_id=<?= $id ?>" class="text-center" id="btn_export"><button class="btn btn-outline-primary" style="width: 200px; border-color:#007DD8;">Export Laporan</button></a>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-12 mt-5">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-md-12 mb-3">
                                    <div id="statistik"></div>
                                </div>
                                <div class="col-md-3">
                                    <!-- <p style="color: red; margin-bottom:0;"><?= ucwords('last update ' . date('j F, Y'))  ?></p> -->
                                    <!-- <p style="color: red; margin-bottom:0;"><?= ucwords('last update ' . date('j F, Y'))  ?></p> -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                                        <div class="card-body">
                                            <div class="row justify-content-between align-items-center" style="height: 80px;">
                                                <div class="col-md-2">
                                                    <i class='bx bxs-car-crash ms-n2' style="font-size: 50px; color: #464646;"></i>
                                                </div>
                                                <div class="col-md-10 float-end">
                                                    <span class="fs-6 float-end" style="color:#464646;">
                                                        <span class="fw-bold">Kecelakaan </span>Lalu Lintas
                                                    </span>
                                                    <br>
                                                    <span class="fs-6 fw-bold float-end" style="color:#464646;" id="lakalantas"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </a>
                                </div>

                                <div class="col-md-3">
                                    <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                                        <div class="card-body">
                                            <div class="row justify-content-between align-items-center" style="height: 80px;">
                                                <div class="col-md-2">
                                                    <iconify-icon icon="ic:round-car-crash" class="ms-n2" style="font-size: 50px; color: #464646;"></iconify-icon>
                                                </div>
                                                <div class="col-md-10 float-end">
                                                    <span class="fs-6 float-end" style="color:#464646;">
                                                        <span class="fw-bold">Pelanggaran </span>Lalu Lintas
                                                    </span>
                                                    <br>
                                                    <span class="fs-6 fw-bold float-end" style="color:#464646;" id="garlantas"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </a>
                                </div>

                                <div class="col-md-3">
                                    <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                                        <div class="card-body">
                                            <div class="row justify-content-between align-items-center" style="height: 80px;">
                                                <div class="col-md-2">
                                                    <iconify-icon icon="ic:baseline-control-camera" class="ms-n2 mt-2" style="font-size: 45px; color: #464646;"></iconify-icon>
                                                </div>
                                                <div class="col-md-10 float-end">
                                                    <span class="fs-6 float-end" style="color:#464646;">
                                                        <span class="fw-bold">Turjagwali</span>
                                                    </span>
                                                    <br>
                                                    <span class="fs-6 fw-bold float-end" style="color:#464646;" id="turjagwali"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </a>
                                </div>

                                <div class="col-md-3">
                                    <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                                        <div class="card-body">
                                            <div class="row justify-content-between align-items-center" style="height: 80px;">
                                                <div class="col-md-2">
                                                    <img src="<?= base_url() ?>assets/dashboard/icon-ranmor.svg" alt="ranmor" width="60px">
                                                </div>
                                                <div class="col-md-10 float-end">
                                                    <span class="fs-6 float-end" style="color:#464646;">
                                                        <span class="fw-bold">Kendaraan </span>Bermotor
                                                    </span>
                                                    <br>
                                                    <span class="fs-6 fw-bold float-end" style="color:#464646;" id="motor"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- end statistik -->
                    </div>


                    <section class="shadow-sm mt-5">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div id="namaditgakkum"></div>
                                    </div>
                                    <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                        <div class="main-chart">
                                            <div id="charta">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="shadow-sm mt-5">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div id="namaditkamsel"></div>
                                    </div>
                                    <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                        <div class="main-chart">
                                            <div id="chartb">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="shadow-sm mt-5">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div id="namaditregident"></div>
                                    </div>
                                    <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                        <div class="main-chart">
                                            <div id="chartc">
                                            </div>
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
    <script>
        $(document).ready(function() {
            let filter = 0;
            let id = '<?= $id ?>'
            var date = new Date();
            var firstDay = new Date(date.getFullYear(), 0).toLocaleDateString("en-GB").split('/').reverse().join('-');
            var lastDay = new Date(date.getFullYear(), 11, 31).toLocaleDateString("en-GB").split('/').reverse().join('-');
            var polda_id = $('#polda_,#polda_id').val();
            // console.log(polda_id)

            // const offset = yourDate.getTimezoneOffset()
            // yourDate = new Date(yourDate.getTime() - (offset * 60 * 1000))
            // let a = firstDay.toISOString().split('T')[0]
            // let b = lastDay.toISOString().split('T')[0]
            // console.log(firstDay, lastDay)
            $("#overlay").fadeIn(300);
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>executive/polda_executive/getDetailPolda",
                data: {
                    id: id
                },
                dataType: "JSON",
                success: function(result) {
                    var ressPoldaall = result.poldaall
                    var ressPolda = result.polda
                    $("#overlay").fadeOut(300);
                    $('#motor').html(`<h1>${result.motor}</h1>`);
                    $('#turjagwali').html(`<h1>${result.turjagwali}</h1>`);
                    $('#garlantas').html(`<h1>${result.garlantas}</h1>`);
                    $('#lakalantas').html(`<h1>${result.lakalantas}</h1>`);
                    $('#logo').html(`<img src="<?= url_api() . 'polda/logo/' ?>${ressPolda.logo_polda}" alt="img-polda" width="100px">`);
                    $('#nama').html(`<h1 style="color:#007DD8 ; text-transform:uppercase;">Polda ${ressPolda.name_polda}</h1>`);
                    $('#namaditgakkum').html(`<h4 class="card-title mb-0 text-uppercase">Data Ditgakkum Polda ${ressPolda.name_polda}</h4>`);
                    $('#namaditkamsel').html(`<h4 class="card-title mb-0 text-uppercase">Data Ditkamsel Polda ${ressPolda.name_polda}</h4>`);
                    $('#namaditregident').html(`<h4 class="card-title mb-0 text-uppercase">Data Ditregident Polda ${ressPolda.name_polda}</h4>`);
                    $('#statistik').html(`<h4 style="text-transform: uppercase; color:#007DD8;">Statistik Polda ${ressPolda.name_polda}</h4>`);
                    $('#polda_').html(`<label for="waktu" class="form-label text-white text-uppercase">Wilayah</label>
                        <select class="form-control" id="polda_id" name="polda_id">
                            <option value="${result.polda.id}">Polda ${result.polda.name_polda}</option>
                        </select>
                        `)
                    $.each(ressPoldaall, (i, resp) => {
                        $('#polda_id').append(`<option value="${resp.id}">Polda ${resp.name_polda}</option>`)
                    })
                    $("#charta").html(`<div id="chart"></div>`);
                    $("#chartb").html(`<div id="chart2"></div>`);
                    $("#chartc").html(`<div id="chart3"></div>`);

                }
            })

            getDitgakkum(firstDay, lastDay, id, filter)
            getDitkamsel(firstDay, lastDay, id, filter)
            getDitregident(firstDay, lastDay, id, filter)

        })


        $('#btn_filter').on('click', function(e) {
            e.preventDefault();
            var date = new Date();
            var firstDay = new Date(date.getFullYear(), 0).toLocaleDateString("en-GB").split('/').reverse().join('-');
            var lastDay = new Date(date.getFullYear(), 11, 31).toLocaleDateString("en-GB").split('/').reverse().join('-');

            let filter = 1;
            let polda_id = $('#polda_id').val()
            let start_date = $('#start_date').val()
            let end_date = $('#end_date').val()
            $("#overlay").fadeIn(300);
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>executive/polda_executive/getDetailPolda_filter",
                data: {
                    id: polda_id,
                    start_date: start_date,
                    end_date: end_date
                },
                dataType: "JSON",
                success: function(result) {
                    var ressPolda = result.polda
                    $("#overlay").fadeOut(300);
                    $('#motor').html(`<h1>${result.motor}</h1>`);
                    $('#turjagwali').html(`<h1>${result.turjagwali}</h1>`);
                    $('#garlantas').html(`<h1>${result.garlantas}</h1>`);
                    $('#lakalantas').html(`<h1>${result.lakalantas}</h1>`);
                    $('#logo').html(`<img src="<?= url_api() . 'polda/logo/' ?>${ressPolda.logo_polda}" alt="img-polda" width="100px">`);
                    $('#btn_export').attr('href', `http://34.143.227.90:3001/v1/laporan_harian/export_laphar?polda_id=${polda_id}`)
                    $('#nama').html(`<h1 style="color:#007DD8 ; text-transform:uppercase;">Polda ${ressPolda.name_polda}</h1>`);
                    $('#namaditgakkum').html(`<h4 class="card-title mb-0 text-uppercase">Data Ditgakkum Polda ${ressPolda.name_polda}</h4>`);
                    $('#namaditkamsel').html(`<h4 class="card-title mb-0 text-uppercase">Data Ditkamsel Polda ${ressPolda.name_polda}</h4>`);
                    $('#namaditregident').html(`<h4 class="card-title mb-0 text-uppercase">Data Ditregident Polda ${ressPolda.name_polda}</h4>`);
                    $('#statistik').html(`<h4 style="text-transform: uppercase; color:#007DD8;">Statistik Polda ${ressPolda.name_polda}</h4>`);


                }
            })
            $("#charta").html(`<div id="chart"></div>`);
            $("#chartb").html(`<div id="chart2"></div>`);
            $("#chartc").html(`<div id="chart3"></div>`);

            getDitgakkum(start_date, end_date, polda_id, filter)
            getDitkamsel(start_date, end_date, polda_id, filter)
            getDitregident(start_date, end_date, polda_id, filter)
        })


        function getDitgakkum(firstDay, lastDay, id, filter) {
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>executive/polda_executive/getChartDitgakkum",
                data: {
                    id: id,
                    start_date: firstDay,
                    end_date: lastDay,
                    filter: filter
                },
                dataType: "JSON",
                success: function(result) {
                    // console.log(result)
                    var polda_month = result.data.polda_month;
                    var garlantas = result.data.garlantas;
                    var lakalantas = result.data.lakalantas;
                    var turjagwali = result.data.turjagwali;
                    var lakalanggar = result.data.lakalanggar;
                    var ditgakkum = {
                        series: [{
                            name: 'Garlantas',
                            type: 'line',
                            data: garlantas,
                            color: "#11347A"
                        }, {
                            name: 'Lakalantas',
                            type: 'line',
                            data: lakalantas,
                            color: "#CB2D3E"
                        }, {
                            name: 'Turjagwali',
                            type: 'line',
                            data: turjagwali,
                            color: "#E8D42F"
                        }, {
                            name: 'Lakalanggar',
                            type: 'line',
                            data: lakalanggar,
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
                                    garlantassebelumnya = garlantas[0];
                                    lakalantassebelumnya = lakalantas[0];
                                    turjagwalisebelumnya = turjagwali[0];
                                    lakalanggarsebelumnya = lakalanggar[0];
                                    if (garlantas[0] < garlantas[1]) {
                                        persentasegarlantas = 'Naik'
                                    } else if (garlantas[0] > garlantas[1]) {
                                        persentasegarlantas = 'Turun'
                                    } else {
                                        persentasegarlantas = 'Seimbang'
                                    }
                                    if (lakalantas[0] < lakalantas[1]) {
                                        persentaselakalantas = 'Naik'
                                    } else if (lakalantas[0] > lakalantas[1]) {
                                        persentaselakalantas = 'Turun'
                                    } else {
                                        persentaselakalantas = 'Seimbang'
                                    }
                                    if (turjagwali[0] < turjagwali[1]) {
                                        persentaseturjagwali = 'Naik'
                                    } else if (turjagwali[0] > turjagwali[1]) {
                                        persentaseturjagwali = 'Turun'
                                    } else {
                                        persentaseturjagwali = 'Seimbang'
                                    }
                                    if (lakalanggar[0] < lakalanggar[1]) {
                                        persentaselakalanggar = 'Naik'
                                    } else if (lakalanggar[0] > lakalanggar[1]) {
                                        persentaselakalanggar = 'Turun'
                                    } else {
                                        persentaselakalanggar = 'Seimbang'
                                    }
                                } else if (w.globals.labels[dataPointIndex] == 3) {
                                    bulansebelumnya = polda_month[1]
                                    garlantassebelumnya = garlantas[1];
                                    lakalantassebelumnya = lakalantas[1];
                                    turjagwalisebelumnya = turjagwali[1];
                                    lakalanggarsebelumnya = lakalanggar[1];
                                    if (garlantas[1] < garlantas[2]) {
                                        persentasegarlantas = 'Naik'
                                    } else if (garlantas[1] > garlantas[2]) {
                                        persentasegarlantas = 'Turun'
                                    } else {
                                        persentasegarlantas = 'Seimbang'
                                    }
                                    if (lakalantas[1] < lakalantas[2]) {
                                        persentaselakalantas = 'Naik'
                                    } else if (lakalantas[1] > lakalantas[2]) {
                                        persentaselakalantas = 'Turun'
                                    } else {
                                        persentaselakalantas = 'Seimbang'
                                    }
                                    if (turjagwali[1] < turjagwali[2]) {
                                        persentaseturjagwali = 'Naik'
                                    } else if (turjagwali[1] > turjagwali[2]) {
                                        persentaseturjagwali = 'Turun'
                                    } else {
                                        persentaseturjagwali = 'Seimbang'
                                    }
                                    if (lakalanggar[1] < lakalanggar[2]) {
                                        persentaselakalanggar = 'Naik'
                                    } else if (lakalanggar[1] > lakalanggar[2]) {
                                        persentaselakalanggar = 'Turun'
                                    } else {
                                        persentaselakalanggar = 'Seimbang'
                                    }


                                } else if (w.globals.labels[dataPointIndex] == 4) {
                                    bulansebelumnya = polda_month[2]
                                    garlantassebelumnya = garlantas[2];
                                    lakalantassebelumnya = lakalantas[2];
                                    turjagwalisebelumnya = turjagwali[2];
                                    lakalanggarsebelumnya = lakalanggar[2];
                                    if (garlantas[2] < garlantas[3]) {
                                        persentasegarlantas = 'Naik'
                                    } else if (garlantas[2] > garlantas[3]) {
                                        persentasegarlantas = 'Turun'
                                    } else {
                                        persentasegarlantas = 'Seimbang'
                                    }
                                    if (lakalantas[2] < lakalantas[3]) {
                                        persentaselakalantas = 'Naik'
                                    } else if (lakalantas[2] > lakalantas[3]) {
                                        persentaselakalantas = 'Turun'
                                    } else {
                                        persentaselakalantas = 'Seimbang'
                                    }
                                    if (turjagwali[2] < turjagwali[3]) {
                                        persentaseturjagwali = 'Naik'
                                    } else if (turjagwali[2] > turjagwali[3]) {
                                        persentaseturjagwali = 'Turun'
                                    } else {
                                        persentaseturjagwali = 'Seimbang'
                                    }
                                    if (lakalanggar[2] < lakalanggar[3]) {
                                        persentaselakalanggar = 'Naik'
                                    } else if (lakalanggar[2] > lakalanggar[3]) {
                                        persentaselakalanggar = 'Turun'
                                    } else {
                                        persentaselakalanggar = 'Seimbang'
                                    }

                                } else if (w.globals.labels[dataPointIndex] == 5) {
                                    bulansebelumnya = polda_month[3]
                                    garlantassebelumnya = garlantas[3];
                                    lakalantassebelumnya = lakalantas[3];
                                    turjagwalisebelumnya = turjagwali[3];
                                    lakalanggarsebelumnya = lakalanggar[3];
                                    if (garlantas[3] < garlantas[4]) {
                                        persentasegarlantas = 'Naik'
                                    } else if (garlantas[3] > garlantas[4]) {
                                        persentasegarlantas = 'Turun'
                                    } else {
                                        persentasegarlantas = 'Seimbang'
                                    }
                                    if (lakalantas[3] < lakalantas[4]) {
                                        persentaselakalantas = 'Naik'
                                    } else if (lakalantas[3] > lakalantas[4]) {
                                        persentaselakalantas = 'Turun'
                                    } else {
                                        persentaselakalantas = 'Seimbang'
                                    }
                                    if (turjagwali[3] < turjagwali[4]) {
                                        persentaseturjagwali = 'Naik'
                                    } else if (turjagwali[3] > turjagwali[4]) {
                                        persentaseturjagwali = 'Turun'
                                    } else {
                                        persentaseturjagwali = 'Seimbang'
                                    }
                                    if (lakalanggar[3] < lakalanggar[4]) {
                                        persentaselakalanggar = 'Naik'
                                    } else if (lakalanggar[3] > lakalanggar[4]) {
                                        persentaselakalanggar = 'Turun'
                                    } else {
                                        persentaselakalanggar = 'Seimbang'
                                    }

                                } else if (w.globals.labels[dataPointIndex] == 6) {
                                    bulansebelumnya = polda_month[4]
                                    garlantassebelumnya = garlantas[4];
                                    lakalantassebelumnya = lakalantas[4];
                                    turjagwalisebelumnya = turjagwali[4];
                                    lakalanggarsebelumnya = lakalanggar[4];
                                    if (garlantas[4] < garlantas[5]) {
                                        persentasegarlantas = 'Naik'
                                    } else if (garlantas[4] > garlantas[5]) {
                                        persentasegarlantas = 'Turun'
                                    } else {
                                        persentasegarlantas = 'Seimbang'
                                    }
                                    if (lakalantas[4] < lakalantas[5]) {
                                        persentaselakalantas = 'Naik'
                                    } else if (lakalantas[4] > lakalantas[5]) {
                                        persentaselakalantas = 'Turun'
                                    } else {
                                        persentaselakalantas = 'Seimbang'
                                    }
                                    if (turjagwali[4] < turjagwali[5]) {
                                        persentaseturjagwali = 'Naik'
                                    } else if (turjagwali[4] > turjagwali[5]) {
                                        persentaseturjagwali = 'Turun'
                                    } else {
                                        persentaseturjagwali = 'Seimbang'
                                    }
                                    if (lakalanggar[4] < lakalanggar[5]) {
                                        persentaselakalanggar = 'Naik'
                                    } else if (lakalanggar[4] > lakalanggar[5]) {
                                        persentaselakalanggar = 'Turun'
                                    } else {
                                        persentaselakalanggar = 'Seimbang'
                                    }

                                } else if (w.globals.labels[dataPointIndex] == 7) {
                                    bulansebelumnya = polda_month[5]
                                    garlantassebelumnya = garlantas[5];
                                    lakalantassebelumnya = lakalantas[5];
                                    turjagwalisebelumnya = turjagwali[5];
                                    lakalanggarsebelumnya = lakalanggar[5];
                                    if (garlantas[5] < garlantas[6]) {
                                        persentasegarlantas = 'Naik'
                                    } else if (garlantas[5] > garlantas[6]) {
                                        persentasegarlantas = 'Turun'
                                    } else {
                                        persentasegarlantas = 'Seimbang'
                                    }
                                    if (lakalantas[5] < lakalantas[6]) {
                                        persentaselakalantas = 'Naik'
                                    } else if (lakalantas[5] > lakalantas[6]) {
                                        persentaselakalantas = 'Turun'
                                    } else {
                                        persentaselakalantas = 'Seimbang'
                                    }
                                    if (turjagwali[5] < turjagwali[6]) {
                                        persentaseturjagwali = 'Naik'
                                    } else if (turjagwali[5] > turjagwali[6]) {
                                        persentaseturjagwali = 'Turun'
                                    } else {
                                        persentaseturjagwali = 'Seimbang'
                                    }
                                    if (lakalanggar[5] < lakalanggar[6]) {
                                        persentaselakalanggar = 'Naik'
                                    } else if (lakalanggar[5] > lakalanggar[6]) {
                                        persentaselakalanggar = 'Turun'
                                    } else {
                                        persentaselakalanggar = 'Seimbang'
                                    }

                                } else if (w.globals.labels[dataPointIndex] == 8) {
                                    bulansebelumnya = polda_month[6]
                                    garlantassebelumnya = garlantas[6];
                                    lakalantassebelumnya = lakalantas[6];
                                    turjagwalisebelumnya = turjagwali[6];
                                    lakalanggarsebelumnya = lakalanggar[6];
                                    if (garlantas[6] < garlantas[7]) {
                                        persentasegarlantas = 'Naik'
                                    } else if (garlantas[6] > garlantas[7]) {
                                        persentasegarlantas = 'Turun'
                                    } else {
                                        persentasegarlantas = 'Seimbang'
                                    }
                                    if (lakalantas[6] < lakalantas[7]) {
                                        persentaselakalantas = 'Naik'
                                    } else if (lakalantas[6] > lakalantas[7]) {
                                        persentaselakalantas = 'Turun'
                                    } else {
                                        persentaselakalantas = 'Seimbang'
                                    }
                                    if (turjagwali[6] < turjagwali[7]) {
                                        persentaseturjagwali = 'Naik'
                                    } else if (turjagwali[6] > turjagwali[7]) {
                                        persentaseturjagwali = 'Turun'
                                    } else {
                                        persentaseturjagwali = 'Seimbang'
                                    }
                                    if (lakalanggar[6] < lakalanggar[7]) {
                                        persentaselakalanggar = 'Naik'
                                    } else if (lakalanggar[6] > lakalanggar[7]) {
                                        persentaselakalanggar = 'Turun'
                                    } else {
                                        persentaselakalanggar = 'Seimbang'
                                    }

                                } else if (w.globals.labels[dataPointIndex] == 9) {
                                    bulansebelumnya = polda_month[7]
                                    garlantassebelumnya = garlantas[7];
                                    lakalantassebelumnya = lakalantas[7];
                                    turjagwalisebelumnya = turjagwali[7];
                                    lakalanggarsebelumnya = lakalanggar[7];
                                    if (garlantas[7] < garlantas[8]) {
                                        persentasegarlantas = 'Naik'
                                    } else if (garlantas[7] > garlantas[8]) {
                                        persentasegarlantas = 'Turun'
                                    } else {
                                        persentasegarlantas = 'Seimbang'
                                    }
                                    if (lakalantas[7] < lakalantas[8]) {
                                        persentaselakalantas = 'Naik'
                                    } else if (lakalantas[7] > lakalantas[8]) {
                                        persentaselakalantas = 'Turun'
                                    } else {
                                        persentaselakalantas = 'Seimbang'
                                    }
                                    if (turjagwali[7] < turjagwali[8]) {
                                        persentaseturjagwali = 'Naik'
                                    } else if (turjagwali[7] > turjagwali[8]) {
                                        persentaseturjagwali = 'Turun'
                                    } else {
                                        persentaseturjagwali = 'Seimbang'
                                    }
                                    if (lakalanggar[7] < lakalanggar[8]) {
                                        persentaselakalanggar = 'Naik'
                                    } else if (lakalanggar[7] > lakalanggar[8]) {
                                        persentaselakalanggar = 'Turun'
                                    } else {
                                        persentaselakalanggar = 'Seimbang'
                                    }

                                } else if (w.globals.labels[dataPointIndex] == 10) {
                                    bulansebelumnya = polda_month[8]
                                    garlantassebelumnya = garlantas[8];
                                    lakalantassebelumnya = lakalantas[8];
                                    turjagwalisebelumnya = turjagwali[8];
                                    lakalanggarsebelumnya = lakalanggar[8];
                                    if (garlantas[8] < garlantas[9]) {
                                        persentasegarlantas = 'Naik'
                                    } else if (garlantas[8] > garlantas[9]) {
                                        persentasegarlantas = 'Turun'
                                    } else {
                                        persentasegarlantas = 'Seimbang'
                                    }
                                    if (lakalantas[8] < lakalantas[9]) {
                                        persentaselakalantas = 'Naik'
                                    } else if (lakalantas[8] > lakalantas[9]) {
                                        persentaselakalantas = 'Turun'
                                    } else {
                                        persentaselakalantas = 'Seimbang'
                                    }
                                    if (turjagwali[8] < turjagwali[9]) {
                                        persentaseturjagwali = 'Naik'
                                    } else if (turjagwali[8] > turjagwali[9]) {
                                        persentaseturjagwali = 'Turun'
                                    } else {
                                        persentaseturjagwali = 'Seimbang'
                                    }
                                    if (lakalanggar[8] < lakalanggar[9]) {
                                        persentaselakalanggar = 'Naik'
                                    } else if (lakalanggar[8] > lakalanggar[9]) {
                                        persentaselakalanggar = 'Turun'
                                    } else {
                                        persentaselakalanggar = 'Seimbang'
                                    }

                                } else if (w.globals.labels[dataPointIndex] == 11) {
                                    bulansebelumnya = polda_month[9]
                                    garlantassebelumnya = garlantas[9];
                                    lakalantassebelumnya = lakalantas[9];
                                    turjagwalisebelumnya = turjagwali[9];
                                    lakalanggarsebelumnya = lakalanggar[9];
                                    if (garlantas[9] < garlantas[10]) {
                                        persentasegarlantas = 'Naik'
                                    } else if (garlantas[9] > garlantas[10]) {
                                        persentasegarlantas = 'Turun'
                                    } else {
                                        persentasegarlantas = `Seimbang`
                                    }
                                    if (lakalantas[9] < lakalantas[10]) {
                                        persentaselakalantas = 'Naik'
                                    } else if (lakalantas[9] > lakalantas[10]) {
                                        persentaselakalantas = 'Turun'
                                    } else {
                                        persentaselakalantas = `Seimbang`
                                    }
                                    if (turjagwali[9] < turjagwali[10]) {
                                        persentaseturjagwali = 'Naik'
                                    } else if (turjagwali[9] > turjagwali[10]) {
                                        persentaseturjagwali = 'Turun'
                                    } else {
                                        persentaseturjagwali = `Seimbang`
                                    }
                                    if (lakalanggar[9] < lakalanggar[10]) {
                                        persentaselakalanggar = 'Naik'
                                    } else if (lakalanggar[9] > lakalanggar[10]) {
                                        persentaselakalanggar = 'Turun'
                                    } else {
                                        persentaselakalanggar = `Seimbang`
                                    }

                                } else if (w.globals.labels[dataPointIndex] == 12) {
                                    bulansebelumnya = polda_month[10]
                                    garlantassebelumnya = garlantas[10];
                                    lakalantassebelumnya = lakalantas[10];
                                    turjagwalisebelumnya = turjagwali[10];
                                    lakalanggarsebelumnya = lakalanggar[10];
                                    if (garlantas[10] < garlantas[11]) {
                                        persentasegarlantas = 'Naik'
                                    } else if (garlantas[10] > garlantas[11]) {
                                        persentasegarlantas = 'Turun'
                                    } else {
                                        persentasegarlantas = 'Seimbang'
                                    }
                                    if (lakalantas[10] < lakalantas[11]) {
                                        persentaselakalantas = 'Naik'
                                    } else if (lakalantas[10] > lakalantas[11]) {
                                        persentaselakalantas = 'Turun'
                                    } else {
                                        persentaselakalantas = 'Seimbang'
                                    }
                                    if (turjagwali[10] < turjagwali[11]) {
                                        persentaseturjagwali = 'Naik'
                                    } else if (turjagwali[10] > turjagwali[11]) {
                                        persentaseturjagwali = 'Turun'
                                    } else {
                                        persentaseturjagwali = 'Seimbang'
                                    }
                                    if (lakalanggar[10] < lakalanggar[11]) {
                                        persentaselakalanggar = 'Naik'
                                    } else if (lakalanggar[10] > lakalanggar[11]) {
                                        persentaselakalanggar = 'Turun'
                                    } else {
                                        persentaselakalanggar = 'Seimbang'
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
                                                            <span class="fw-bold">Total Garlantas</span><br>
                                                            <span class="fw-bold">Total Lakalantas</span><br>
                                                            <span class="fw-bold">Total Turjagwali</span><br>
                                                            <span class="fw-bold">Total Lakalanggar</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${garlantassebelumnya}</span><br>
                                                            <span class="fw-bold">${lakalantassebelumnya}</span><br>
                                                            <span class="fw-bold">${turjagwalisebelumnya}</span><br>
                                                            <span class="fw-bold">${lakalanggarsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total Garlantas</span><br>
                                                            <span class="fw-bold">Total Lakalantas</span><br>
                                                            <span class="fw-bold">Total Turjagwali</span><br>
                                                            <span class="fw-bold">Total Lakalanggar</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${garlantas[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${lakalantas[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${turjagwali[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${lakalanggar[dataPointIndex]}</span><br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasegarlantas}</span><br>
                                                    <span class="fw-bold">${persentaselakalantas}</span><br>
                                                    <span class="fw-bold">${persentaseturjagwali}</span><br>
                                                    <span class="fw-bold">${persentaselakalanggar}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total Garlantas</span><br>
                                                            <span class="fw-bold">Total Lakalantas</span><br>
                                                            <span class="fw-bold">Total Turjagwali</span><br>
                                                            <span class="fw-bold">Total Lakalanggar</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${garlantas[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${lakalantas[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${turjagwali[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${lakalanggar[dataPointIndex]}</span><br>
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
                    var ditgakkum = new ApexCharts(document.querySelector("#chart"), ditgakkum);
                    ditgakkum.render();
                }
            })
        }

        function getDitkamsel(firstDay, lastDay, id, filter) {
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>executive/polda_executive/getChartDitkamsel",
                data: {
                    id: id,
                    start_date: firstDay,
                    end_date: lastDay,
                    filter: filter
                },
                dataType: "JSON",
                success: function(result) {
                    // console.log(result)
                    let polda_month = result.data.polda_month
                    let dikmaslantas = result.data.dikmaslantas
                    let penyebaran = result.data.penyebaran
                    var ditkamsel = {
                        series: [{
                            name: 'Dikmaslantas',
                            type: 'line',
                            data: dikmaslantas,
                            color: "#11347A"
                        }, {
                            name: 'Penyebaran/Pemasangan',
                            type: 'line',
                            data: penyebaran,
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
                                    dikmaslantassebelumnya = dikmaslantas[0];
                                    penyebaransebelumnya = penyebaran[0];
                                    if (dikmaslantas[0] < dikmaslantas[1]) {
                                        persentasedikmaslantas = 'Naik'
                                    } else if (dikmaslantas[0] > dikmaslantas[1]) {
                                        persentasedikmaslantas = 'Turun'
                                    } else {
                                        persentasedikmaslantas = 'Seimbang'
                                    }
                                    if (penyebaran[0] < penyebaran[1]) {
                                        persentasepenyebaran = 'Naik'
                                    } else if (penyebaran[0] > penyebaran[1]) {
                                        persentasepenyebaran = 'Turun'
                                    } else {
                                        persentasepenyebaran = 'Seimbang'
                                    }
                                } else if (w.globals.labels[dataPointIndex] == 3) {
                                    bulansebelumnya = polda_month[1]
                                    dikmaslantassebelumnya = dikmaslantas[1];
                                    penyebaransebelumnya = penyebaran[1];

                                    if (dikmaslantas[1] < dikmaslantas[2]) {
                                        persentasedikmaslantas = 'Naik'
                                    } else if (dikmaslantas[1] > dikmaslantas[2]) {
                                        persentasedikmaslantas = 'Turun'
                                    } else {
                                        persentasedikmaslantas = 'Seimbang'
                                    }
                                    if (penyebaran[1] < penyebaran[2]) {
                                        persentasepenyebaran = 'Naik'
                                    } else if (penyebaran[1] > penyebaran[2]) {
                                        persentasepenyebaran = 'Turun'
                                    } else {
                                        persentasepenyebaran = 'Seimbang'
                                    }
                                } else if (w.globals.labels[dataPointIndex] == 4) {
                                    bulansebelumnya = polda_month[2]
                                    dikmaslantassebelumnya = dikmaslantas[2];
                                    penyebaransebelumnya = penyebaran[2];

                                    if (dikmaslantas[2] < dikmaslantas[3]) {
                                        persentasedikmaslantas = 'Naik'
                                    } else if (dikmaslantas[2] > dikmaslantas[3]) {
                                        persentasedikmaslantas = 'Turun'
                                    } else {
                                        persentasedikmaslantas = 'Seimbang'
                                    }
                                    if (penyebaran[2] < penyebaran[3]) {
                                        persentasepenyebaran = 'Naik'
                                    } else if (penyebaran[2] > penyebaran[3]) {
                                        persentasepenyebaran = 'Turun'
                                    } else {
                                        persentasepenyebaran = 'Seimbang'
                                    }
                                } else if (w.globals.labels[dataPointIndex] == 5) {
                                    bulansebelumnya = polda_month[3]
                                    dikmaslantassebelumnya = dikmaslantas[3];
                                    penyebaransebelumnya = penyebaran[3];

                                    if (dikmaslantas[3] < dikmaslantas[4]) {
                                        persentasedikmaslantas = 'Naik'
                                    } else if (dikmaslantas[3] > dikmaslantas[4]) {
                                        persentasedikmaslantas = 'Turun'
                                    } else {
                                        persentasedikmaslantas = 'Seimbang'
                                    }
                                    if (penyebaran[3] < penyebaran[4]) {
                                        persentasepenyebaran = 'Naik'
                                    } else if (penyebaran[3] > penyebaran[4]) {
                                        persentasepenyebaran = 'Turun'
                                    } else {
                                        persentasepenyebaran = 'Seimbang'
                                    }


                                } else if (w.globals.labels[dataPointIndex] == 6) {
                                    bulansebelumnya = polda_month[4]
                                    dikmaslantassebelumnya = dikmaslantas[4];
                                    penyebaransebelumnya = penyebaran[4];

                                    if (dikmaslantas[4] < dikmaslantas[5]) {
                                        persentasedikmaslantas = 'Naik'
                                    } else if (dikmaslantas[4] > dikmaslantas[5]) {
                                        persentasedikmaslantas = 'Turun'
                                    } else {
                                        persentasedikmaslantas = 'Seimbang'
                                    }
                                    if (penyebaran[4] < penyebaran[5]) {
                                        persentasepenyebaran = 'Naik'
                                    } else if (penyebaran[4] > penyebaran[5]) {
                                        persentasepenyebaran = 'Turun'
                                    } else {
                                        persentasepenyebaran = 'Seimbang'
                                    }


                                } else if (w.globals.labels[dataPointIndex] == 7) {
                                    bulansebelumnya = polda_month[5]
                                    dikmaslantassebelumnya = dikmaslantas[5];
                                    penyebaransebelumnya = penyebaran[5];

                                    if (dikmaslantas[5] < dikmaslantas[6]) {
                                        persentasedikmaslantas = 'Naik'
                                    } else if (dikmaslantas[5] > dikmaslantas[6]) {
                                        persentasedikmaslantas = 'Turun'
                                    } else {
                                        persentasedikmaslantas = 'Seimbang'
                                    }
                                    if (penyebaran[5] < penyebaran[6]) {
                                        persentasepenyebaran = 'Naik'
                                    } else if (penyebaran[5] > penyebaran[6]) {
                                        persentasepenyebaran = 'Turun'
                                    } else {
                                        persentasepenyebaran = 'Seimbang'
                                    }


                                } else if (w.globals.labels[dataPointIndex] == 8) {
                                    bulansebelumnya = polda_month[6]
                                    dikmaslantassebelumnya = dikmaslantas[6];
                                    penyebaransebelumnya = penyebaran[6];

                                    if (dikmaslantas[6] < dikmaslantas[7]) {
                                        persentasedikmaslantas = 'Naik'
                                    } else if (dikmaslantas[6] > dikmaslantas[7]) {
                                        persentasedikmaslantas = 'Turun'
                                    } else {
                                        persentasedikmaslantas = 'Seimbang'
                                    }
                                    if (penyebaran[6] < penyebaran[7]) {
                                        persentasepenyebaran = 'Naik'
                                    } else if (penyebaran[6] > penyebaran[7]) {
                                        persentasepenyebaran = 'Turun'
                                    } else {
                                        persentasepenyebaran = 'Seimbang'
                                    }


                                } else if (w.globals.labels[dataPointIndex] == 9) {
                                    bulansebelumnya = polda_month[7]
                                    dikmaslantassebelumnya = dikmaslantas[7];
                                    penyebaransebelumnya = penyebaran[7];

                                    if (dikmaslantas[7] < dikmaslantas[8]) {
                                        persentasedikmaslantas = 'Naik'
                                    } else if (dikmaslantas[7] > dikmaslantas[8]) {
                                        persentasedikmaslantas = 'Turun'
                                    } else {
                                        persentasedikmaslantas = 'Seimbang'
                                    }
                                    if (penyebaran[7] < penyebaran[8]) {
                                        persentasepenyebaran = 'Naik'
                                    } else if (penyebaran[7] > penyebaran[8]) {
                                        persentasepenyebaran = 'Turun'
                                    } else {
                                        persentasepenyebaran = 'Seimbang'
                                    }


                                } else if (w.globals.labels[dataPointIndex] == 10) {
                                    bulansebelumnya = polda_month[8]
                                    dikmaslantassebelumnya = dikmaslantas[8];
                                    penyebaransebelumnya = penyebaran[8];

                                    if (dikmaslantas[8] < dikmaslantas[9]) {
                                        persentasedikmaslantas = 'Naik'
                                    } else if (dikmaslantas[8] > dikmaslantas[9]) {
                                        persentasedikmaslantas = 'Turun'
                                    } else {
                                        persentasedikmaslantas = 'Seimbang'
                                    }
                                    if (penyebaran[8] < penyebaran[9]) {
                                        persentasepenyebaran = 'Naik'
                                    } else if (penyebaran[8] > penyebaran[9]) {
                                        persentasepenyebaran = 'Turun'
                                    } else {
                                        persentasepenyebaran = 'Seimbang'
                                    }


                                } else if (w.globals.labels[dataPointIndex] == 11) {
                                    bulansebelumnya = polda_month[9]
                                    dikmaslantassebelumnya = dikmaslantas[9];
                                    penyebaransebelumnya = penyebaran[9];

                                    if (dikmaslantas[9] < dikmaslantas[10]) {
                                        persentasedikmaslantas = 'Naik'
                                    } else if (dikmaslantas[9] > dikmaslantas[10]) {
                                        persentasedikmaslantas = 'Turun'
                                    } else {
                                        persentasedikmaslantas = `Seimbang`
                                    }
                                    if (penyebaran[9] < penyebaran[10]) {
                                        persentasepenyebaran = 'Naik'
                                    } else if (penyebaran[9] > penyebaran[10]) {
                                        persentasepenyebaran = 'Turun'
                                    } else {
                                        persentasepenyebaran = `Seimbang`
                                    }


                                } else if (w.globals.labels[dataPointIndex] == 12) {
                                    bulansebelumnya = polda_month[10]
                                    dikmaslantassebelumnya = dikmaslantas[10];
                                    penyebaransebelumnya = penyebaran[10];

                                    if (dikmaslantas[10] < dikmaslantas[11]) {
                                        persentasedikmaslantas = 'Naik'
                                    } else if (dikmaslantas[10] > dikmaslantas[11]) {
                                        persentasedikmaslantas = 'Turun'
                                    } else {
                                        persentasedikmaslantas = 'Seimbang'
                                    }
                                    if (penyebaran[10] < penyebaran[11]) {
                                        persentasepenyebaran = 'Naik'
                                    } else if (penyebaran[10] > penyebaran[11]) {
                                        persentasepenyebaran = 'Turun'
                                    } else {
                                        persentasepenyebaran = 'Seimbang'
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
                                                            <span class="fw-bold">Total Dikmaslantas</span><br>
                                                            <span class="fw-bold">Total Penyebaran</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${dikmaslantassebelumnya}</span><br>
                                                            <span class="fw-bold">${penyebaransebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total Dikmaslantas</span><br>
                                                            <span class="fw-bold">Total Penyebaran</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${dikmaslantas[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${penyebaran[dataPointIndex]}</span><br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasedikmaslantas}</span><br>
                                                    <span class="fw-bold">${persentasepenyebaran}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total Dikmaslantas</span><br>
                                                            <span class="fw-bold">Total Penyebaran</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${dikmaslantas[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${penyebaran[dataPointIndex]}</span><br>
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

                    var ditkamsel = new ApexCharts(document.querySelector("#chart2"), ditkamsel);
                    ditkamsel.render();
                }
            })
        }

        function getDitregident(firstDay, lastDay, id, filter) {
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>executive/polda_executive/getChartDitregident",
                data: {
                    id: id,
                    start_date: firstDay,
                    end_date: lastDay,
                    filter: filter
                },
                dataType: "JSON",
                success: function(result) {
                    let polda_month = result.data.polda_month
                    let bpkb = result.data.bpkb
                    let stnk = result.data.stnk
                    let sim = result.data.sim
                    let ranmor = result.data.ranmor
                    var ditregident = {
                        series: [{
                            name: 'BPKB',
                            type: 'line',
                            data: bpkb,
                            color: "#11347A"
                        }, {
                            name: 'STNK',
                            type: 'line',
                            data: stnk,
                            color: "#CB2D3E"
                        }, {
                            name: 'SIM',
                            type: 'line',
                            data: sim,
                            color: "#E8D42F"
                        }, {
                            name: 'RANMOR',
                            type: 'line',
                            data: ranmor,
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
                                    bpkbsebelumnya = bpkb[0];
                                    stnksebelumnya = stnk[0];
                                    simsebelumnya = sim[0];
                                    ranmorsebelumnya = ranmor[0];
                                    if (bpkb[0] < bpkb[1]) {
                                        persentasebpkb = 'Naik'
                                    } else if (bpkb[0] > bpkb[1]) {
                                        persentasebpkb = 'Turun'
                                    } else {
                                        persentasebpkb = 'Seimbang'
                                    }
                                    if (stnk[0] < stnk[1]) {
                                        persentasestnk = 'Naik'
                                    } else if (stnk[0] > stnk[1]) {
                                        persentasestnk = 'Turun'
                                    } else {
                                        persentasestnk = 'Seimbang'
                                    }
                                    if (sim[0] < sim[1]) {
                                        persentasesim = 'Naik'
                                    } else if (sim[0] > sim[1]) {
                                        persentasesim = 'Turun'
                                    } else {
                                        persentasesim = 'Seimbang'
                                    }
                                    if (ranmor[0] < ranmor[1]) {
                                        persentaseranmor = 'Naik'
                                    } else if (ranmor[0] > ranmor[1]) {
                                        persentaseranmor = 'Turun'
                                    } else {
                                        persentaseranmor = 'Seimbang'
                                    }
                                } else if (w.globals.labels[dataPointIndex] == 3) {
                                    bulansebelumnya = polda_month[1]
                                    bpkbsebelumnya = bpkb[1];
                                    stnksebelumnya = stnk[1];
                                    simsebelumnya = sim[1];
                                    ranmorsebelumnya = ranmor[1];
                                    if (bpkb[1] < bpkb[2]) {
                                        persentasebpkb = 'Naik'
                                    } else if (bpkb[1] > bpkb[2]) {
                                        persentasebpkb = 'Turun'
                                    } else {
                                        persentasebpkb = 'Seimbang'
                                    }
                                    if (stnk[1] < stnk[2]) {
                                        persentasestnk = 'Naik'
                                    } else if (stnk[1] > stnk[2]) {
                                        persentasestnk = 'Turun'
                                    } else {
                                        persentasestnk = 'Seimbang'
                                    }
                                    if (sim[1] < sim[2]) {
                                        persentasesim = 'Naik'
                                    } else if (sim[1] > sim[2]) {
                                        persentasesim = 'Turun'
                                    } else {
                                        persentasesim = 'Seimbang'
                                    }
                                    if (ranmor[1] < ranmor[2]) {
                                        persentaseranmor = 'Naik'
                                    } else if (ranmor[1] > ranmor[2]) {
                                        persentaseranmor = 'Turun'
                                    } else {
                                        persentaseranmor = 'Seimbang'
                                    }


                                } else if (w.globals.labels[dataPointIndex] == 4) {
                                    bulansebelumnya = polda_month[2]
                                    bpkbsebelumnya = bpkb[2];
                                    stnksebelumnya = stnk[2];
                                    simsebelumnya = sim[2];
                                    ranmorsebelumnya = ranmor[2];
                                    if (bpkb[2] < bpkb[3]) {
                                        persentasebpkb = 'Naik'
                                    } else if (bpkb[2] > bpkb[3]) {
                                        persentasebpkb = 'Turun'
                                    } else {
                                        persentasebpkb = 'Seimbang'
                                    }
                                    if (stnk[2] < stnk[3]) {
                                        persentasestnk = 'Naik'
                                    } else if (stnk[2] > stnk[3]) {
                                        persentasestnk = 'Turun'
                                    } else {
                                        persentasestnk = 'Seimbang'
                                    }
                                    if (sim[2] < sim[3]) {
                                        persentasesim = 'Naik'
                                    } else if (sim[2] > sim[3]) {
                                        persentasesim = 'Turun'
                                    } else {
                                        persentasesim = 'Seimbang'
                                    }
                                    if (ranmor[2] < ranmor[3]) {
                                        persentaseranmor = 'Naik'
                                    } else if (ranmor[2] > ranmor[3]) {
                                        persentaseranmor = 'Turun'
                                    } else {
                                        persentaseranmor = 'Seimbang'
                                    }

                                } else if (w.globals.labels[dataPointIndex] == 5) {
                                    bulansebelumnya = polda_month[3]
                                    bpkbsebelumnya = bpkb[3];
                                    stnksebelumnya = stnk[3];
                                    simsebelumnya = sim[3];
                                    ranmorsebelumnya = ranmor[3];
                                    if (bpkb[3] < bpkb[4]) {
                                        persentasebpkb = 'Naik'
                                    } else if (bpkb[3] > bpkb[4]) {
                                        persentasebpkb = 'Turun'
                                    } else {
                                        persentasebpkb = 'Seimbang'
                                    }
                                    if (stnk[3] < stnk[4]) {
                                        persentasestnk = 'Naik'
                                    } else if (stnk[3] > stnk[4]) {
                                        persentasestnk = 'Turun'
                                    } else {
                                        persentasestnk = 'Seimbang'
                                    }
                                    if (sim[3] < sim[4]) {
                                        persentasesim = 'Naik'
                                    } else if (sim[3] > sim[4]) {
                                        persentasesim = 'Turun'
                                    } else {
                                        persentasesim = 'Seimbang'
                                    }
                                    if (ranmor[3] < ranmor[4]) {
                                        persentaseranmor = 'Naik'
                                    } else if (ranmor[3] > ranmor[4]) {
                                        persentaseranmor = 'Turun'
                                    } else {
                                        persentaseranmor = 'Seimbang'
                                    }

                                } else if (w.globals.labels[dataPointIndex] == 6) {
                                    bulansebelumnya = polda_month[4]
                                    bpkbsebelumnya = bpkb[4];
                                    stnksebelumnya = stnk[4];
                                    simsebelumnya = sim[4];
                                    ranmorsebelumnya = ranmor[4];
                                    if (bpkb[4] < bpkb[5]) {
                                        persentasebpkb = 'Naik'
                                    } else if (bpkb[4] > bpkb[5]) {
                                        persentasebpkb = 'Turun'
                                    } else {
                                        persentasebpkb = 'Seimbang'
                                    }
                                    if (stnk[4] < stnk[5]) {
                                        persentasestnk = 'Naik'
                                    } else if (stnk[4] > stnk[5]) {
                                        persentasestnk = 'Turun'
                                    } else {
                                        persentasestnk = 'Seimbang'
                                    }
                                    if (sim[4] < sim[5]) {
                                        persentasesim = 'Naik'
                                    } else if (sim[4] > sim[5]) {
                                        persentasesim = 'Turun'
                                    } else {
                                        persentasesim = 'Seimbang'
                                    }
                                    if (ranmor[4] < ranmor[5]) {
                                        persentaseranmor = 'Naik'
                                    } else if (ranmor[4] > ranmor[5]) {
                                        persentaseranmor = 'Turun'
                                    } else {
                                        persentaseranmor = 'Seimbang'
                                    }

                                } else if (w.globals.labels[dataPointIndex] == 7) {
                                    bulansebelumnya = polda_month[5]
                                    bpkbsebelumnya = bpkb[5];
                                    stnksebelumnya = stnk[5];
                                    simsebelumnya = sim[5];
                                    ranmorsebelumnya = ranmor[5];
                                    if (bpkb[5] < bpkb[6]) {
                                        persentasebpkb = 'Naik'
                                    } else if (bpkb[5] > bpkb[6]) {
                                        persentasebpkb = 'Turun'
                                    } else {
                                        persentasebpkb = 'Seimbang'
                                    }
                                    if (stnk[5] < stnk[6]) {
                                        persentasestnk = 'Naik'
                                    } else if (stnk[5] > stnk[6]) {
                                        persentasestnk = 'Turun'
                                    } else {
                                        persentasestnk = 'Seimbang'
                                    }
                                    if (sim[5] < sim[6]) {
                                        persentasesim = 'Naik'
                                    } else if (sim[5] > sim[6]) {
                                        persentasesim = 'Turun'
                                    } else {
                                        persentasesim = 'Seimbang'
                                    }
                                    if (ranmor[5] < ranmor[6]) {
                                        persentaseranmor = 'Naik'
                                    } else if (ranmor[5] > ranmor[6]) {
                                        persentaseranmor = 'Turun'
                                    } else {
                                        persentaseranmor = 'Seimbang'
                                    }

                                } else if (w.globals.labels[dataPointIndex] == 8) {
                                    bulansebelumnya = polda_month[6]
                                    bpkbsebelumnya = bpkb[6];
                                    stnksebelumnya = stnk[6];
                                    simsebelumnya = sim[6];
                                    ranmorsebelumnya = ranmor[6];
                                    if (bpkb[6] < bpkb[7]) {
                                        persentasebpkb = 'Naik'
                                    } else if (bpkb[6] > bpkb[7]) {
                                        persentasebpkb = 'Turun'
                                    } else {
                                        persentasebpkb = 'Seimbang'
                                    }
                                    if (stnk[6] < stnk[7]) {
                                        persentasestnk = 'Naik'
                                    } else if (stnk[6] > stnk[7]) {
                                        persentasestnk = 'Turun'
                                    } else {
                                        persentasestnk = 'Seimbang'
                                    }
                                    if (sim[6] < sim[7]) {
                                        persentasesim = 'Naik'
                                    } else if (sim[6] > sim[7]) {
                                        persentasesim = 'Turun'
                                    } else {
                                        persentasesim = 'Seimbang'
                                    }
                                    if (ranmor[6] < ranmor[7]) {
                                        persentaseranmor = 'Naik'
                                    } else if (ranmor[6] > ranmor[7]) {
                                        persentaseranmor = 'Turun'
                                    } else {
                                        persentaseranmor = 'Seimbang'
                                    }

                                } else if (w.globals.labels[dataPointIndex] == 9) {
                                    bulansebelumnya = polda_month[7]
                                    bpkbsebelumnya = bpkb[7];
                                    stnksebelumnya = stnk[7];
                                    simsebelumnya = sim[7];
                                    ranmorsebelumnya = ranmor[7];
                                    if (bpkb[7] < bpkb[8]) {
                                        persentasebpkb = 'Naik'
                                    } else if (bpkb[7] > bpkb[8]) {
                                        persentasebpkb = 'Turun'
                                    } else {
                                        persentasebpkb = 'Seimbang'
                                    }
                                    if (stnk[7] < stnk[8]) {
                                        persentasestnk = 'Naik'
                                    } else if (stnk[7] > stnk[8]) {
                                        persentasestnk = 'Turun'
                                    } else {
                                        persentasestnk = 'Seimbang'
                                    }
                                    if (sim[7] < sim[8]) {
                                        persentasesim = 'Naik'
                                    } else if (sim[7] > sim[8]) {
                                        persentasesim = 'Turun'
                                    } else {
                                        persentasesim = 'Seimbang'
                                    }
                                    if (ranmor[7] < ranmor[8]) {
                                        persentaseranmor = 'Naik'
                                    } else if (ranmor[7] > ranmor[8]) {
                                        persentaseranmor = 'Turun'
                                    } else {
                                        persentaseranmor = 'Seimbang'
                                    }

                                } else if (w.globals.labels[dataPointIndex] == 10) {
                                    bulansebelumnya = polda_month[8]
                                    bpkbsebelumnya = bpkb[8];
                                    stnksebelumnya = stnk[8];
                                    simsebelumnya = sim[8];
                                    ranmorsebelumnya = ranmor[8];
                                    if (bpkb[8] < bpkb[9]) {
                                        persentasebpkb = 'Naik'
                                    } else if (bpkb[8] > bpkb[9]) {
                                        persentasebpkb = 'Turun'
                                    } else {
                                        persentasebpkb = 'Seimbang'
                                    }
                                    if (stnk[8] < stnk[9]) {
                                        persentasestnk = 'Naik'
                                    } else if (stnk[8] > stnk[9]) {
                                        persentasestnk = 'Turun'
                                    } else {
                                        persentasestnk = 'Seimbang'
                                    }
                                    if (sim[8] < sim[9]) {
                                        persentasesim = 'Naik'
                                    } else if (sim[8] > sim[9]) {
                                        persentasesim = 'Turun'
                                    } else {
                                        persentasesim = 'Seimbang'
                                    }
                                    if (ranmor[8] < ranmor[9]) {
                                        persentaseranmor = 'Naik'
                                    } else if (ranmor[8] > ranmor[9]) {
                                        persentaseranmor = 'Turun'
                                    } else {
                                        persentaseranmor = 'Seimbang'
                                    }

                                } else if (w.globals.labels[dataPointIndex] == 11) {
                                    bulansebelumnya = polda_month[9]
                                    bpkbsebelumnya = bpkb[9];
                                    stnksebelumnya = stnk[9];
                                    simsebelumnya = sim[9];
                                    ranmorsebelumnya = ranmor[9];
                                    if (bpkb[9] < bpkb[10]) {
                                        persentasebpkb = 'Naik'
                                    } else if (bpkb[9] > bpkb[10]) {
                                        persentasebpkb = 'Turun'
                                    } else {
                                        persentasebpkb = `Seimbang`
                                    }
                                    if (stnk[9] < stnk[10]) {
                                        persentasestnk = 'Naik'
                                    } else if (stnk[9] > stnk[10]) {
                                        persentasestnk = 'Turun'
                                    } else {
                                        persentasestnk = `Seimbang`
                                    }
                                    if (sim[9] < sim[10]) {
                                        persentasesim = 'Naik'
                                    } else if (sim[9] > sim[10]) {
                                        persentasesim = 'Turun'
                                    } else {
                                        persentasesim = `Seimbang`
                                    }
                                    if (ranmor[9] < ranmor[10]) {
                                        persentaseranmor = 'Naik'
                                    } else if (ranmor[9] > ranmor[10]) {
                                        persentaseranmor = 'Turun'
                                    } else {
                                        persentaseranmor = `Seimbang`
                                    }

                                } else if (w.globals.labels[dataPointIndex] == 12) {
                                    bulansebelumnya = polda_month[10]
                                    bpkbsebelumnya = bpkb[10];
                                    stnksebelumnya = stnk[10];
                                    simsebelumnya = sim[10];
                                    ranmorsebelumnya = ranmor[10];
                                    if (bpkb[10] < bpkb[11]) {
                                        persentasebpkb = 'Naik'
                                    } else if (bpkb[10] > bpkb[11]) {
                                        persentasebpkb = 'Turun'
                                    } else {
                                        persentasebpkb = 'Seimbang'
                                    }
                                    if (stnk[10] < stnk[11]) {
                                        persentasestnk = 'Naik'
                                    } else if (stnk[10] > stnk[11]) {
                                        persentasestnk = 'Turun'
                                    } else {
                                        persentasestnk = 'Seimbang'
                                    }
                                    if (sim[10] < sim[11]) {
                                        persentasesim = 'Naik'
                                    } else if (sim[10] > sim[11]) {
                                        persentasesim = 'Turun'
                                    } else {
                                        persentasesim = 'Seimbang'
                                    }
                                    if (ranmor[10] < ranmor[11]) {
                                        persentaseranmor = 'Naik'
                                    } else if (ranmor[10] > ranmor[11]) {
                                        persentaseranmor = 'Turun'
                                    } else {
                                        persentaseranmor = 'Seimbang'
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
                                                            <span class="fw-bold">Total Bpkb</span><br>
                                                            <span class="fw-bold">Total Stnk</span><br>
                                                            <span class="fw-bold">Total Sim</span><br>
                                                            <span class="fw-bold">Total Ranmor</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${bpkbsebelumnya}</span><br>
                                                            <span class="fw-bold">${stnksebelumnya}</span><br>
                                                            <span class="fw-bold">${simsebelumnya}</span><br>
                                                            <span class="fw-bold">${ranmorsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total Bpkb</span><br>
                                                            <span class="fw-bold">Total Stnk</span><br>
                                                            <span class="fw-bold">Total Sim</span><br>
                                                            <span class="fw-bold">Total Ranmor</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${bpkb[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${stnk[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${sim[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${ranmor[dataPointIndex]}</span><br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasebpkb}</span><br>
                                                    <span class="fw-bold">${persentasestnk}</span><br>
                                                    <span class="fw-bold">${persentasesim}</span><br>
                                                    <span class="fw-bold">${persentaseranmor}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total Bpkb</span><br>
                                                            <span class="fw-bold">Total Stnk</span><br>
                                                            <span class="fw-bold">Total Sim</span><br>
                                                            <span class="fw-bold">Total Ranmor</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${bpkb[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${stnk[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${sim[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${ranmor[dataPointIndex]}</span><br>
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

                    var ditregident = new ApexCharts(document.querySelector("#chart3"), ditregident);
                    ditregident.render();
                }
            })
        }
    </script>
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>


    <!-- choices js -->
    <script src="<?php echo base_url(); ?>assets/admin/libs/choices.js/public/assets/scripts/choices.min.js"></script>


    <!-- Modal js -->
    <!-- <script src="<?php echo base_url(); ?>assets/admin/js/pages/modal.init.js"></script> -->

    <!-- form mask -->
    <script src="<?php echo base_url(); ?>assets/admin/libs/imask/imask.min.js"></script>

    <!-- form mask init -->
    <!-- <script src="<?php echo base_url(); ?>assets/admin/js/pages/form-mask.init.js"></script> -->

    <!-- dropzone js -->
    <script src="<?php echo base_url(); ?>assets/admin/libs/dropzone/min/dropzone.min.js"></script>

    <!-- glightbox js -->
    <script src="<?php echo base_url(); ?>assets/admin/libs/glightbox/js/glightbox.min.js"></script>

    <!-- lightbox init -->
    <!-- <script src="<?php echo base_url(); ?>assets/admin/js/pages/lightbox.init.js"></script> -->

    <!-- Required datatable js -->
    <script src="<?php echo base_url(); ?>assets/admin/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

    <!-- Buttons examples -->
    <script src="<?php echo base_url(); ?>assets/admin/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/libs/jszip/jszip.min.js"></script>
    <!-- <script src="<?php echo base_url(); ?>assets/admin/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/libs/pdfmake/build/vfs_fonts.js"></script> -->
    <script src="<?php echo base_url(); ?>assets/admin/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

    <!-- Responsive examples -->
    <script src="<?php echo base_url(); ?>assets/admin/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <!-- apexcharts -->
    <script src="<?php echo base_url(); ?>assets/admin/libs/apexcharts/apexcharts.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <!-- Plugins js-->
    <script src="<?php echo base_url(); ?>assets/admin/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>

    <!-- dashboard init -->
    <!-- <script src="<?php echo base_url(); ?>assets/admin/js/pages/dashboard.init.js"></script> -->

    <!-- Sweet Alerts js -->
    <script src="<?php echo base_url(); ?>assets/admin/libs/sweetalert2/sweetalert2.min.js"></script>

    <!-- Sweet alert init js-->
    <!-- <script src="<?php echo base_url(); ?>assets/admin/js/pages/sweetalert.init.js"></script> -->

    <!-- pristine js -->
    <script src="<?php echo base_url(); ?>assets/admin/libs/pristinejs/pristine.min.js"></script>

    <!-- form validation -->
    <!-- <script src="<?php echo base_url(); ?>assets/admin/js/pages/form-validation.init.js"></script> -->

    <!-- init js -->
    <!-- <script src="<?php echo base_url(); ?>assets/admin/js/pages/form-advanced.init.js"></script> -->

    <!-- datepicker js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>

    <!-- select2 js -->
    <script src="<?php echo base_url(); ?>assets/admin/js/pages/select2.min.js"></script>

    <!-- twitter-bootstrap-wizard js -->
    <script src="<?php echo base_url(); ?>assets/admin/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/libs/twitter-bootstrap-wizard/prettify.js"></script>

    <!-- form wizard init -->
    <!-- <script src="<?php echo base_url(); ?>assets/admin/js/pages/form-wizard.init.js"></script> -->

    <script src="<?php echo base_url(); ?>assets/admin/js/app.js"></script>



    <script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/moment.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/daterangepicker.js"></script>

    <script src="<?php echo base_url(); ?>assets/admin/js/clockpicker.js"></script>


</body>


</html>