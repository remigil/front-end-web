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

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/MarkerCluster.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/MarkerCluster.Default.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/Control.Geocoder.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/leaflet-routing-machine.css" />
    <link rel="stylesheet" href="https://unpkg.com/@geoman-io/leaflet-geoman-free@latest/dist/leaflet-geoman.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.css" />

    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.5.0/mapbox-gl.css' rel='stylesheet' />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/clockpicker.css">


    <link rel="stylesheet" href="https://cdn3.devexpress.com/jslib/18.2.6/css/dx.common.css" />
    <link rel="stylesheet" href="https://cdn3.devexpress.com/jslib/18.2.6/css/dx.light.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Open+Sans:wght@300;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }

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
                                        <div class="col-md-10">
                                            <iconify-icon icon="cil:list-filter" style="font-size: 20px; color: #000;" class=" me-2"></iconify-icon>
                                            <a href="<?= base_url() ?>dashboard/Dashboardeksekutif"><span class=" fs-5" style="color:#000;">Welcome to <b style="text-transform: uppercase; ">Dashboard Executive | </b> <b style="text-transform: uppercase; color:#007DD8;"><?= $this->session->userdata('full_name'); ?></b></span></a>
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </header>
    <div class="mt-5 mb-5"></div>
    <div class="container-fluid mt-5">
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="container-fluid">
                    <div class="row">
                        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

                        <div class="col-md-12  align-self-center">
                            <div class="row mt-5">
                                <div class="col-md-4 mb-1">
                                    <h4 style="text-transform: uppercase; color:#007DD8;">Statistik Nasional</h4>
                                </div>
                                <div class="col-md-3">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="<?= base_url('executive/Statistik_executive/Lakalantas'); ?>">
                                            <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-2 align-self-center">
                                                            <i class="bx bxs-car-crash ms-n2 mt-2 mb-2" style="font-size: 40px; color: #464646;"></i>
                                                        </div>
                                                        <div class="col-md-10 float-end">
                                                            <span class="fs-6 float-end" style="color:#464646;">
                                                                <span class="fw-bold ">Kecelakaan </span>Lalu Lintas
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
                                        <a href="<?= base_url('executive/Statistik_executive/Garlantas'); ?>">
                                            <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-2 align-self-center">
                                                            <iconify-icon icon="ic:round-car-crash" class="ms-n2 mt-2" style="font-size: 45px; color: #464646;"></iconify-icon>
                                                        </div>
                                                        <div class="col-md-10 float-end">
                                                            <span class="fs-6 float-end" style="color:#464646;">
                                                                <span class="fw-bold">Pelanggaran </span>Lalu Lintas
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
                                        <a href="<?= base_url('executive/Statistik_executive/Turjawali'); ?>">
                                            <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-2 align-self-center">
                                                            <iconify-icon icon="ic:baseline-control-camera" class="ms-n2 mt-2" style="font-size: 45px; color: #464646;"></iconify-icon>
                                                            <!-- <i class='bx bxs-id-card ms-n2' style="font-size: 45px; color: #464646;"></i> -->
                                                        </div>
                                                        <div class="col-md-10 float-end">
                                                            <span class="fs-6 float-end" style="color:#464646;">
                                                                <span class="fw-bold">Turjawali</span>
                                                            </span>
                                                            <br><br>
                                                            <span class="fs-4 fw-bold float-end" style="color:#464646;" id="sim"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="<?= base_url('executive/Statistik_executive/Ranmor'); ?>">
                                            <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-2 align-self-center">
                                                            <iconify-icon icon="fa6-solid:motorcycle" class="ms-n2 mt-2" style="font-size: 45px; color: #464646;"></iconify-icon>
                                                        </div>
                                                        <div class="col-md-10 float-end">
                                                            <span class="fs-6 float-end" style="color:#464646;">
                                                                <span class="fw-bold">Kendaraan </span>Bermotor
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



                            <div id="mapG20Dashboard" class="rounded-3" style="height:70vh;">
                            </div>
                            <hr class="mt-4 mb-4" style="border: 2px; color:#007DD8; opacity:100%; ">
                            <div class="container">
                                <div class="row d-flex justify-content-between mb-3">

                                    <!-- <div class="d-flex justify-content-between"> -->
                                    <div class="col-md-2">
                                        <a href="<?= base_url('executive/Satker_executive/ditgakkum'); ?>"><button class="btn btn-outline-primary text-uppercase fw-bold" style="width: 100%; border-color:#007DD8;">Ditgakkum</button></a>
                                    </div>
                                    <div class="col-md-2">
                                        <a href="<?= base_url('executive/Satker_executive/ditregident'); ?>"><button class="btn btn-outline-primary text-uppercase fw-bold" style="width: 100%; border-color:#007DD8;">Ditregident</button></a>
                                    </div>
                                    <div class="col-md-2">
                                        <a href="<?= base_url('executive/Satker_executive/ditkamsel'); ?>"><button class="btn btn-outline-primary text-uppercase fw-bold" style="width: 100%; border-color:#007DD8;">Ditkamsel</button></a>
                                    </div>
                                    <div class="col-md-2">
                                        <a href="#"><button class="btn btn-outline-primary text-uppercase fw-bold" style="width: 100%; border-color:#007DD8;">BagRenMin</button></a>
                                    </div>
                                    <div class="col-md-2">
                                        <a href="#"><button class="btn btn-outline-primary text-uppercase fw-bold" style="width: 100%; border-color:#007DD8;">BagOps</button></a>
                                    </div>
                                    <div class="col-md-2">
                                        <a href="#"><button class="btn btn-outline-primary text-uppercase fw-bold" style="width: 100%; border-color:#007DD8;">BagTik</button></a>
                                    </div>
                                </div>
                                <div class="row d-flex justify-content-center mb-5">
                                    <div class="col-md-6 align-items-center">
                                        <a href="<?= base_url() ?>executive/Opsus_executive/index"><button class="btn btn-md text-uppercase fw-bold" style="width: 100%; background: #E4E4E4;">Data Harian Operasi Khusus</button></a>
                                    </div>
                                    <div class="col-md-6 align-items-center">
                                        <a href="<?= base_url() ?>executive/Anev_executive/index"><button class="btn btn-md text-uppercase fw-bold" style="width: 100%;  background: #E4E4E4;">Anev</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid" style="background:#E9E9E9">
                <div class="container-fluid">
                    <div class="container-fluid">
                        <div class="container-fluid">

                            <div class="row d-flex align-items-center">
                                <div class="col-md-4 mb-1 mt-3">
                                    <span style="color:#007DD8;" class="text-uppercase fw-bold fs-5">Data Rekapitulasi Nasional</span>
                                </div>
                                <div class="col-md-2 mb-1 mt-3"></div>
                                <!-- <div class="col-md-2 mb-1 mt-3 d-flex justify-content-around">
                                    <button class="btn btn-md btn-outline-primary" style="border-radius:10px; border-color:#007DD8; width:75%;">Harian</button>
                                </div>
                                <div class="col-md-2 mb-1 mt-3 d-flex justify-content-around">
                                    <button class="btn btn-md btn-outline-primary" style="border-radius:10px; border-color:#007DD8; width:75%;">Bulanan</button>
                                </div>
                                <div class="col-md-2 mb-1 mt-3 d-flex justify-content-around">
                                    <button class="btn btn-md btn-outline-primary" style="border-radius:10px; border-color:#007DD8; width:75%;">Tahunan</button>
                                </div> -->
                            </div>
                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <h5>10 Polda Pelanggaran Lantas Tertinggi</h5>
                                    <div class="mb-3">
                                        <div class="card shadow-sm" style="border-radius: 30px; overflow: hidden;">
                                            <table class="table table-bordered table-hover rounded">
                                                <thead class="" style="background-color:#007DD8; color:#fff;">
                                                    <tr class="text-center">
                                                        <th scope="col">No</th>
                                                        <th scope="col">Polda</th>
                                                        <th scope="col">Total Pelanggaran</th>
                                                        <th scope="col">Pelanggaran Berat</th>
                                                        <th scope="col">Pelanggaran Sedang</th>
                                                        <th scope="col">Pelanggaran Ringan</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="tbody">

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <section class="shadow-sm mt-5">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5>10 Polda Turjawali Tertinggi</h5>
                                                        </div>
                                                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                                            <div class="main-chart">
                                                                <div id="chartturjawali" style="width: 100vw"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>

                                </div>
                                <div class="col-md-6 mt-3">
                                    <h5>Top 10 Polda Data Kecelakaan Tertinggi</h5>
                                    <div class="mb-3">
                                        <div class="card shadow-sm">
                                            <div class="" style="overflow:hidden; overflow-y:scroll;">
                                                <div style="max-height: 135vh;">
                                                    <div class="card ms-2 me-2 mx-2 my-2">
                                                        <div id="laka"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7">

                                </div>
                                <div class="col-md-5">

                                </div>
                                <div class="col-md-7">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                let app_url = '<%-app_url%>'
                let path = '<%-path%>'
                var marker = new Array();

                $(document).ready(function() {
                    $("#overlay").fadeIn(300);
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>dashboard/getPolda",
                        dataType: "JSON",
                        success: function(result) {
                            $("#overlay").fadeOut(300);

                            let ressData = result;
                            // console.log();


                            for (let i = 0; i < ressData.length; i++) {
                                id = i;
                                var latitude = parseFloat(ressData[i].latitude);
                                var longitude = parseFloat(ressData[i].longitude);

                                var resource = '';

                                marker[i] = L.marker([latitude, longitude], {
                                    icon: L.divIcon({
                                        // className: 'location-pin',
                                        html: `<img src="<?= url_api() . 'polda/logo/' ?>${ressData[i].logo_polda}" style="width: 35px; margin-top: -35px;margin-left: -14.5px;">`,
                                        iconSize: [5, 5],
                                        iconAnchor: [5, 10]
                                    })
                                }).bindPopup(
                                    `<div style="width: 450px;">
                                    <div class="row">
                                        <div class="col-md-2 text-center">
                                            <img src="<?= url_api() . 'polda/logo/' ?>${ressData[i].logo_polda}" style="width: 50px;">
                                        </div>
                                        <div class="col-md-10">
                                            <span class="fs-5 text-uppercase">Polda <b>${ressData[i].name_polda}</b></span><br>
                                            <span>${ressData[i].address}</span>
                                        </div>
                                        <div class="col-md-12 mt-3 text-center">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <span class="fs-6">Total <b> Kecelakaan</b> Lalu Lintas</span>
                                                </div>
                                                <div class="col-md-3">
                                                    <span class="fs-6">Total <b>Pelanggaran</b> Lalu Lintas</span>
                                                </div>
                                                <div class="col-md-3">
                                                    <span class="fs-6">Total <b>Kendaraan Bermotor</b></span>
                                                </div>
                                                <div class="col-md-3">
                                                    <span class="fs-6">Total <b>Sim Nasional</b></span>
                                                </div>    
                                            </div>    
                                        </div>
                                        
                                        <div class="col-md-12 mt-3 text-center">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <span class="fs-3"> <b>${ressData[i].lakalantas}</b></span>
                                                </div>
                                                <div class="col-md-3">
                                                    <span class="fs-3"> <b>${ressData[i].garlantas}</b></span>
                                                </div>
                                                <div class="col-md-3">
                                                    <span class="fs-3"> <b>${ressData[i].sepeda_motor}</b></span>
                                                </div>
                                                <div class="col-md-3">
                                                    <span class="fs-3"> <b>${ressData[i].total}</b></span>
                                                </div>    
                                            </div>    
                                        </div>

                                        <div class="col-md-12 mt-3">
                                            <a href=<?= base_url('executive/Polda_executive/index/') ?>${ressData[i].id}><button class="btn btn-primary float-end">Selengkapnya</button></a>   
                                        </div>
                                        </div>
                                </div>
                                    
                            `, {
                                        minWidth: 100,
                                        maxWidth: 560,
                                        width: 400
                                    }).addTo(mapContainer);
                            }


                        }
                    });



                    $("#overlay").fadeIn(300);
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>dashboard/getGarlantas",
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
                            $('#tbody').html(table);
                        }
                    })

                    $("#overlay").fadeIn(300);
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>dashboard/getLakalantas",
                        dataType: "JSON",
                        success: function(result) {
                            $("#overlay").fadeOut(300);
                            var data = '';

                            for (let i = 0; i < result.length; i++) {
                                let x = parseInt(i)
                                let no = x + 1
                                data += `<h5 class="card-header border-bottom text-uppercase text-light p-2 m-0" style="background-color:#007DD8; color:#fff;">${no}. ${result[i].name_polda}</h5>
                                    <div class="card-body">
                                        <div class="row text-center">
                                            <div class="col-md-3 col-sm-4">
                                                <h5 class="fw-bold p-0 m-0">${result[i].total}</h5>
                                                <p class="p-0 m-0">Total</p>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <h5 class="fw-bold p-0 m-0">${result[i].meninggal_dunia}</h5>
                                                <p class="p-0 m-0">Meninggal Dunia</p>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <h5 class="fw-bold p-0 m-0">${result[i].luka_berat}</h5>
                                                <p class="p-0 m-0">Luka Berat</p>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <h5 class="fw-bold p-0 m-0">${result[i].luka_ringan}</h5>
                                                <p class="p-0 m-0">Luka Ringan</p>
                                            </div>
                                        </div>
                                    </div>`
                            }

                            $('#laka').html(data);
                        }
                    })

                    $("#overlay").fadeIn(300);
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>dashboard/getStatistik",
                        dataType: "JSON",
                        success: function(result) {
                            $("#overlay").fadeOut(300);

                            $('#lakalantas').html(`<span class="fs-4" >${result.lakalantas}</span >`);
                            $('#garlantas').html(`<span class="fs-4" >${result.garlantas}</span >`);
                            $('#motor').html(`<span class="fs-4" >${result.motor}</span>`);
                            $('#sim').html(`<span class="fs-4" >${result.turjagwali}</span >`);
                        }
                    })


                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>dashboard/getTurjagwali",
                        dataType: "JSON",
                        success: function(result) {
                            $("#overlay").fadeOut(300);
                            console.log(result)
                            var turjawali = {
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

                            var turjawali = new ApexCharts(document.querySelector("#chartturjawali"), turjawali);
                            turjawali.render();
                        }
                    })

                    var initialCenter = [-2.25613, 118.005351];

                    var initialZoom = 5.1;
                    var googleStreet = L.tileLayer('https://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
                        maxZoom: 20,
                        subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
                    });
                    var googleHybrid = L.tileLayer('https://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
                        maxZoom: 20,
                        subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
                        attribution: '&copy; <a href="https://maps.google.com/">Google Map <?= date('Y') ?></a> contributors'
                    });
                    var googleSatelite = L.tileLayer('https://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
                        maxZoom: 20,
                        subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
                        attribution: '&copy; <a href="https://maps.google.com/">Google Map <?= date('Y') ?></a> contributors'
                    });
                    var googleTerrain = L.tileLayer('https://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}', {
                        maxZoom: 20,
                        subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
                        attribution: '&copy; <a href="https://maps.google.com/">Google Map <?= date('Y') ?></a> contributors'
                    });
                    var gl = L.mapboxGL({
                        accessToken: 'pk.eyJ1IjoibW9yZ2Vua2FmZmVlIiwiYSI6IjIzcmN0NlkifQ.0LRTNgCc-envt9d5MzR75w',
                        style: 'mapbox://styles/mapbox/traffic-day-v2'
                    });

                    var trafficMutant = L.gridLayer.googleMutant({
                        maxZoom: 24,
                        type: "hybrid",
                    }).addGoogleLayer("TrafficLayer");

                    var trafficMutantRoad = L.gridLayer.googleMutant({
                        maxZoom: 24,
                        type: "roadmap",
                    }).addGoogleLayer("TrafficLayer");

                    // StART MAP SECTION
                    var mapContainer = L.map('mapG20Dashboard', {
                        maxZoom: 20,
                        minZoom: 1,
                        zoomSnap: 0.25,
                        zoomControl: false,
                        layers: [googleStreet]
                    }).setView(initialCenter, initialZoom);

                    var markerClusterGroup = L.markerClusterGroup();
                    var icon = L.icon({
                        iconUrl: 'http://tourbanyuwangi.com/wp-content/uploads/2018/05/map.png',
                        iconSize: [80, 80], // size of the icon
                    });


                    var baseMaps = {
                        "Google Map Street": googleStreet,
                        "Google Map Satelite": googleSatelite,
                        "Google Map Hybrid": googleHybrid,
                        "Google Map Terrain": googleTerrain,
                        "Google Map Street Traffic": trafficMutantRoad,
                        "Google Map Hybrid Traffic": trafficMutant,
                        "MappBox Traffic": gl,
                    };
                    var overlayMaps = {};
                    L.control.layers(baseMaps, overlayMaps, {
                        position: 'topright'
                    }).addTo(mapContainer);
                    L.control.zoom({
                        position: 'topright'
                    }).addTo(mapContainer);

                    mapContainer.doubleClickZoom.enable();
                })
            </script>
            <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>

            <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>


            <!-- choices js -->
            <script src="<?php echo base_url(); ?>assets/admin/libs/choices.js/public/assets/scripts/choices.min.js"></script>

            <!-- dropify js -->
            <script src="<?php echo base_url(); ?>assets/admin/js/pages/dropify.js"></script>
            <!-- <script src="<?php echo base_url(); ?>assets/admin/js/pages/dropify.min.js"></script> -->

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
            <script src="<?php echo base_url(); ?>assets/admin/libs/pdfmake/build/pdfmake.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/admin/libs/pdfmake/build/vfs_fonts.js"></script>
            <script src="<?php echo base_url(); ?>assets/admin/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/admin/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/admin/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

            <!-- Responsive examples -->
            <script src="<?php echo base_url(); ?>assets/admin/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/admin/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

            <!-- apexcharts -->
            <script src="<?php echo base_url(); ?>assets/admin/libs/apexcharts/apexcharts.min.js"></script>

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

            <!-- Leaflet -->
            <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
            <script src="<?php echo base_url(); ?>assets/admin/js/leaflet.markercluster.js"></script>
            <script src="<?php echo base_url(); ?>assets/admin/js/Control.Geocoder.js"></script>
            <script src="<?php echo base_url(); ?>assets/admin/js/leaflet-routing-machine.js"></script>
            <!-- <script src="<?php echo base_url(); ?>assets/admin/js/leaflet-routing-machine.min.js"></script> -->
            <script src="https://unpkg.com/@geoman-io/leaflet-geoman-free@latest/dist/leaflet-geoman.min.js"></script>

            <script src='https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js'></script>

            <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.5.0/mapbox-gl.js'></script>
            <script src="https://unpkg.com/mapbox-gl-leaflet/leaflet-mapbox-gl.js"></script>

            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEY9jbE_zL8SV7c6meCf7-lV3JLcbKnlY" async defer></script>
            <script src="https://unpkg.com/leaflet.gridlayer.googlemutant@latest/dist/Leaflet.GoogleMutant.js"></script>


            <script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/moment.min.js"></script>
            <script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/daterangepicker.js"></script>

            <script src="<?php echo base_url(); ?>assets/admin/js/clockpicker.js"></script>
            <script src="https://cdn.rawgit.com/igorescobar/jQuery-Mask-Plugin/1ef022ab/dist/jquery.mask.min.js"></script>


            <script>
                var sidebar = localStorage.getItem('data-sidebar-size');
                var topbar = localStorage.getItem('data-topbar');
                var layoutMode = localStorage.getItem('data-layout-mode');
                $(document).ready(function() {
                    if ($("#statusicon").val() == 'left') {
                        $("#iconright").show();
                        $("#iconleft").hide();
                        $("#statusicon").val('right');
                    } else {
                        $("#iconright").hide();
                        $("#iconleft").show();
                        $("#statusicon").val('left');
                    }

                    document.body.setAttribute('data-sidebar-size', sidebar);
                    document.body.setAttribute('data-topbar', topbar)
                    document.body.setAttribute("data-layout-mode", layoutMode);
                });

                $("#vertical-menu-btn").on("click", function(event) {
                    if ($("#statusicon").val() == 'left') {
                        $("#iconright").show();
                        $("#iconleft").hide();
                        $("#statusicon").val('right');
                    } else {
                        $("#iconright").hide();
                        $("#iconleft").show();
                        $("#statusicon").val('left');
                    }
                });
            </script>



</body>


</html>