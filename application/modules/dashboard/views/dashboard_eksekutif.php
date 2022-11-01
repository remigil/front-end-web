<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title><?php echo $title; ?> | K3I</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />

    <?php if ($this->session->userdata['role'] == 'G20') { ?>
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/logo-g20.svg">
    <?php } else { ?>
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/logo-k3i.png">
    <?php } ?>

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

    <style>
        /* .animateLine {
            stroke-dasharray: 10;
            animation: dash linear infinite;
            animation-duration: 15.5833s;
        }

        .animateRoute {
            stroke-dasharray: 10;
            stroke-dashoffset: 1920;
            animation: dash linear infinite;
            animation-duration: 20.5833s;
        }

        @keyframes dash {
            to {
                stroke-dashoffset: 1000;
            }
        }

        .leaflet-retina .leaflet-control-layers-toggle {
            background-image: url("<?php echo base_url(); ?>assets/map_layer.png");
            background-size: 36px 36px;
        }

        #mapG20Dashboard {
            height: 900px;
            width: 100%
        }

        #mapG20Troublespot {
            height: 500px;
            width: 100%
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


        .switch {
            display: block;
            margin-top: 10px;
        }

        .switch h3 {
            font-weight: 400;
            padding-bottom: 6px;
        }

        .switch input[type=checkbox] {
            display: none;
        }

        .switch input[type=checkbox]:checked+label {
            background-color: #2f7df9;
        }

        .switch input[type=checkbox]:checked+label:after {
            left: 26px;
        }

        .switch label {
            transition: all 200ms ease-in-out;
            display: inline-block;
            position: relative;
            height: 15px;
            width: 40px;
            border-radius: 40px;
            cursor: pointer;
            background-color: #ddd;
            color: transparent;
        }

        .switch label:after {
            transition: all 200ms ease-in-out;
            content: " ";
            position: absolute;
            height: 14px;
            width: 14px;
            border-radius: 50%;
            background-color: white;
            top: 0px;
            left: 0px;
            right: auto;
            box-shadow: 1px 1px 1px gray;
        }

        .switch.colored input[type=checkbox]:checked+label {
            background-color: #55c946;
        }

        .switch.colored label {
            background-color: #ff4949;
        }

  
        .location-pin img {
            width: 20px;
            height: 20px;
            margin: -13px 0 0 -13px;
            z-index: 10;
            position: absolute;
            border-radius: 50%;
            background: #3f51b5;
        }

        .pin {
            width: 30px;
            height: 30px;
            border-radius: 50% 50% 50% 0;
            background: #3f51b5;
            position: absolute;
            transform: rotate(-45deg);
            left: 50%;
            top: 50%;
            margin: -20px 0 0 -20px;
        }

        .pin:after {
            content: '';
            width: 26px;
            height: 26px;
            margin: 2px 0 0 2px;
            position: absolute;
            border-radius: 50%;
        }

        .pulse {
            background: rgba(0, 0, 0, 0.2);
            border-radius: 50%;
            height: 14px;
            width: 14px;
            position: absolute;
            left: 50%;
            top: 50%;
            margin: 15px 0px 0px -12px;
            transform: rotateX(55deg);
            z-index: -2;
        }

        .pulse:after {
            content: "";
            border-radius: 50%;
            height: 40px;
            width: 40px;
            position: absolute;
            margin: -16px 0 0 -13px;
            animation: pulsate 2.5s ease-out;
            animation-iteration-count: infinite;
            opacity: 0;
            background: rgba(94, 190, 255, 0.5);
            box-shadow: 0 0 1px 2px #2d99d3;
            animation-delay: 1.1s;
        }

        .material-textfield {
            position: relative;
            margin: 1vh 2.7vh 3vh 2.7vh;
        }

        .material-btnfield {
            position: relative;
            margin: -2vh 2.7vh 2vh 2.7vh;
        }

        .labelmui {
            position: absolute;
            font-size: 14px;
            left: 0px;
            top: 50%;
            transform: translateY(-50%);
            background-color: white;
            color: #4E4E4E;
            padding: 0 0.3rem;
            margin: 0 0.5rem;
            transition: .1s ease-out;
            transform-origin: left top;
            pointer-events: none;
            font-family: 'Open Sans';
            font-weight: bold;
        }

        .material-textfield input {
            font-size: 0.9rem;
            outline: none;
            border: 1px solid #D4D4D4;
            border-radius: 5px;
            padding: 1rem 0.7rem;
            color: gray;
            transition: 0.1s ease-out;
            width: 100%;
            height: 48px;
            color: #D5D5D4;
            font-family: 'Open Sans';
        }

        .material-textfield input:focus {
            border-color: #003A91;
            color: #7E7E7E;

        }

        .material-textfield input:focus+.labelmui {
            color: #003A91;
            top: 0;
            transform: translateY(-50%) scale(.9);
        }

        .material-textfield input:not(:placeholder-shown)+.labelmui {
            top: 0;
            transform: translateY(-50%) scale(.9);
        }



        .material-selectfield {
            position: relative;
            margin: 1vh 2.7vh 3vh 2.7vh;
        }

        .material-selectfield select {
            font-size: 0.9rem;
            outline: none;
            border: 1px solid rgba(0, 0, 0, 0.23);
            border-radius: 5px;
            color: gray;
            transition: 0.1s ease-out;
            width: 100%;
            height: 48px;
            background-color: transparent;
            font-family: 'Open Sans';

        }

        .material-selectfield select:focus {
            border-color: #003A91;
        }

        .material-selectfield select:focus+.labelmui {
            color: #003A91;
            top: 0;
            transform: translateY(-50%) scale(.9);
        }

        .material-selectfield select:not(:placeholder-shown)+.labelmui {
            top: 0;
            transform: translateY(-50%) scale(.9);
        }

        .judulheader {
            background-color: white;
            width: 100%;
            height: 50px;
            padding: 14px;
            font-size: 15px;
            margin-top: -19px;
        }

        .modal.right.fade.in .modal-dialog {
            right: 0 !important;
            transform: translateX(-50%);
        }

        .modal.right .modal-content {
            height: 100%;
            overflow: auto;
            border-radius: 0;
        }

        .modal.right .modal-dialog {
            position: fixed;
            margin: auto;
            height: 100%;
            -webkit-transform: translate3d(0%, 0, 0);
            -ms-transform: translate3d(0%, 0, 0);
            -o-transform: translate3d(0%, 0, 0);
            transform: translate3d(0%, 0, 0);
        }

        .modal.right.fade.in .modal-dialog {
            transform: translateX(0%);
        }

        .modal.right.fade .modal-dialog {
            right: 0;
            -webkit-transition: opacity 0.3s linear, right 0.3s ease-out;
            -moz-transition: opacity 0.3s linear, right 0.3s ease-out;
            -o-transition: opacity 0.3s linear, right 0.3s ease-out;
            transition: opacity 0.3s linear, right 0.3s ease-out;
        }


        .modal.right .modal-header {
            background-color: #50caff;
            color: #fff
        }

        .modal.right .modal-header::after {
            content: "";
            display: inline-block;
        }

        .modal.right .close {
            text-shadow: none;
            opacity: 1;
            color: #ff4d4d;
            font-size: 26px
        }


        #incognito {
            display: none;
        }

        #incognito+label:before {
            cursor: pointer;
            content: "\f505";
        }

        #incognito:checked+label:before {
            cursor: pointer;
            content: "\f506";
        }


        .cat {
            margin: 4px;
            background-color: white;
            border-radius: 50rem !important;
            border: 1px solid #fff;
            overflow: hidden;
            float: left;
        }

        .cat label {
            float: left;
            line-height: 1.7em;
            width: auto;
            height: 1.5em;
            padding-left: 10px;
            padding-right: 10px;
            cursor: pointer;
        }

        .cat label span {
            text-align: center;
            padding: 3px 0;
            display: block;
            font-size: 13px;
        }

        .cat label input {
            position: absolute;
            display: none;
            color: #000 !important;
        }

        .cat label input+span {
            color: #000;
        }


        .cat input:checked+span {
            color: #1967d2;
        }

        .fasumDisplay input:checked+.cat {
            background-color: #e8f0fe;
        }

        .hotelDisplay input:checked+.cat {
            background-color: #e8f0fe;
        }

        .turjawaliDisplay input:checked+.cat {
            background-color: #e8f0fe;
        }

        .kegiatanDisplay input:checked+.cat {
            background-color: #e8f0fe;
        }

        */
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

                                    <div class="col-md-12 d-flex align-items-center">
                                        <div class="col-md-10 ">

                                            <iconify-icon icon="cil:list-filter" style="font-size: 20px; color: #000;" class=" me-2"></iconify-icon>
                                            <span class=" fs-5" style="color:#000;">Welcome to <b style="text-transform: uppercase; ">Dashboard Executive | </b> <b style="text-transform: uppercase; color:#007DD8;"><?= $this->session->userdata('full_name'); ?></b></span>
                                        </div>
                                        <div class="col-md-2 d-flex align-items-center ms-n4">
                                            <button type="button" class="btn btn-sm btn-outline-primary float-end border border-primary me-3 ms-5">IRSMS</button>
                                            <button type="button" class="btn btn-sm btn-outline-primary float-end border border-primary me-3">ERI</button>
                                            <img height="50px" width="25px" class="" src="<?= base_url('assets/sidebar/lonceng-notif.svg') ?>" alt="">
                                            <img height="50px" width="25px" class=" ms-3 rounded-circle  " src="<?= base_url('assets/sidebar/icon-profile-emas.svg'); ?>" alt="Header Avatar">

                                            <!-- </div> -->
                                            <!-- <div class="col-md-1"> -->
                                            <!-- <button type="button" class="p-2 btn btn-sm btn-outline-primary float-end border border-primary me-3">ERI</button> -->

                                            <!-- </div> -->
                                            <!-- <div class="col-md-1"> -->

                                            <!-- </div> -->
                                        </div>
                                        <!-- <div class="dropdown d-inline-block">
                                            <button type="button" class="btn header-item bg-soft-light border-start border-end" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> -->

                                        <!-- </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    
                                                <a class="dropdown-item" href="apps-contacts-profile.html"><i class="mdi mdi-face-profile font-size-16  me-1"></i> Profile</a>
                                                <a class="dropdown-item" href="auth-lock-screen.html"><i class="mdi mdi-lock font-size-16  me-1"></i> Lock Screen</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="<?php echo base_url() ?>login/logout"><i class="mdi mdi-logout font-size-16  me-1"></i> Logout</a>
                                            </div>
                                        </div>
                                        <button type="button" class="btn header-item noti-icon position-relative openNotif" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> -->



                                        <!-- </button>
                                    </div> -->
                                    </div>
                                </div>
                                <!-- <div class="" style="height:20px ; width:20px; background-color:red"></div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </header>
    <div class="container-fluid mt-5">
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="container-fluid">
                    <div class="row">
                        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

                        <div class="col-md-12  align-self-center">
                            <div class="row">
                                <div class="col-md-4 mb-1">
                                    <h4 style="text-transform: uppercase; color:#007DD8;">Statistik Nasional</h4>
                                </div>
                                <div class="col-md-3">
                                    <!-- <p style="color: red; margin-bottom:0;"><?= ucwords('last update ' . date('j F, Y'))  ?></p> -->
                                    <!-- <p style="color: red; margin-bottom:0;"><?= ucwords('last update ' . date('j F, Y'))  ?></p> -->
                                </div>
                            </div>

                            <!-- slider statistik nasional -->
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                                            <div class="card-body">
                                                <div class="row justify-content-between align-items-center" style="height: 80px;">
                                                    <div class="col-md-2">
                                                        <i class='bx bxs-car-crash' style="font-size: 50px; color: #007DD8;"></i>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <h5 class="text-wrap fw-light text-black">Kecelakaan <br> Lalu Lintas</h5>
                                                        <!-- <h3 class="text-white"><?= $data['pelanggaran']['jumlah'] ?></h3> -->
                                                    </div>
                                                    <div class="col-md-5 text-end">
                                                        <h1 style="color: #007DD8;">123</h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                                            <div class="card-body">
                                                <div class="row justify-content-between align-items-center" style="height: 80px;">
                                                    <div class="col-md-2">
                                                        <iconify-icon icon="ic:round-car-crash" style="font-size: 50px; color: #007DD8;"></iconify-icon>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <h5 class="text-wrap fw-light text-black">Pelanggaran <br> Lalu Lintas</h5>

                                                        <!-- <h3 class="text-white"><?= $data['pelanggaran']['jumlah'] ?></h3> -->

                                                    </div>
                                                    <div class="col-md-5 text-end">
                                                        <h1 style="color: #007DD8;">123</h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                                            <div class="card-body">
                                                <div class="row justify-content-between align-items-center" style="height: 80px;">
                                                    <div class="col-md-2">
                                                        <iconify-icon icon="fa6-solid:motorcycle" style="font-size: 40px; color: #007DD8;"></iconify-icon>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <h5 class="text-wrap fw-light text-black">Kendaraan <br> Bermotor</h5>

                                                        <!-- <h3 class="text-white"><?= $data['pelanggaran']['jumlah'] ?></h3> -->

                                                    </div>
                                                    <div class="col-md-5 text-end">
                                                        <h1 style="color: #007DD8;">123</h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                                            <div class="card-body">
                                                <div class="row justify-content-between align-items-center" style="height: 80px;">
                                                    <div class="col-md-2">
                                                        <i class='bx bxs-id-card' style="font-size: 50px; color: #007DD8;"></i>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <h5 class="text-wrap fw-light text-black">Jumlah SIM <br> Nasional</h5>

                                                        <!-- <h3 class="text-white"><?= $data['pelanggaran']['jumlah'] ?></h3> -->

                                                    </div>
                                                    <div class="col-md-5 text-end">
                                                        <h1 style="color: #007DD8;">123</h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div><!-- end slider -->

                            <!-- </div> -->
                        </div>
                        <!-- end statistik -->
                    </div>


                    <div id="mapG20Dashboard" class="rounded-3" style="height:80vh;">
                    </div>
                    <hr style="border: 2px; color:#007DD8; opacity:100%;">
                    <div class="container">
                        <div class="row d-flex justify-content-between mb-5">

                            <!-- <div class="d-flex justify-content-between"> -->
                            <div class="col-md-2">
                                <a href="#"><button class="btn btn-outline-primary text-uppercase fw-bold" style="width: 100%; border-color:#007DD8;">Ditgakkum</button></a>
                            </div>
                            <div class="col-md-2">
                                <a href="#"><button class="btn btn-outline-primary text-uppercase fw-bold" style="width: 100%; border-color:#007DD8;">Ditregident</button></a>
                            </div>
                            <div class="col-md-2">
                                <a href="#"><button class="btn btn-outline-primary text-uppercase fw-bold" style="width: 100%; border-color:#007DD8;">Ditkamsel</button></a>
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
                                <a href="#"><button class="btn btn-md text-uppercase fw-bold" style="width: 100%; background: #E4E4E4;">Data Harian Operasi Khusus</button></a>
                            </div>
                            <div class="col-md-6 align-items-center">
                                <a href="#"><button class="btn btn-md text-uppercase fw-bold" style="width: 100%;  background: #E4E4E4;">Anev</button></a>
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
                        <div class="col-md-2 mb-1 mt-3 d-flex justify-content-around">
                            <button class="btn btn-md btn-outline-primary" style="border-radius:10px; border-color:#007DD8; width:75%;">Harian</button>
                        </div>
                        <div class="col-md-2 mb-1 mt-3 d-flex justify-content-around">
                            <button class="btn btn-md btn-outline-primary" style="border-radius:10px; border-color:#007DD8; width:75%;">Bulanan</button>
                        </div>
                        <div class="col-md-2 mb-1 mt-3 d-flex justify-content-around">
                            <button class="btn btn-md btn-outline-primary" style="border-radius:10px; border-color:#007DD8; width:75%;">Tahunan</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7 mt-4">
                            <h5>10 Polda Pelanggaran Lantas Tertinggi</h5>

                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-7">

                            <div class="mb-3">
                                <div class="card shadow-sm">
                                    <table class="table table-bordered table-hover rounded">
                                        <thead class="table-primary">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First</th>
                                                <th scope="col">Last</th>
                                                <th scope="col">Handle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td colspan="2">Larry the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="mb-3">
                                <div class="card shadow-sm">
                                    <div class="mt-5 text-center">
                                        <h5>Top 10 Polda Tertinggi</h5>
                                    </div>
                                    <div class="mt-2 mb-2" style="overflow:hidden; overflow-y:scroll;">
                                        <div style="max-height: 102vh;">
                                            <div class="card ms-4 me-4 mx-1 my-1">
                                                <h5 class="card-header bg-primary border-bottom text-uppercase text-light p-2 m-0"><?= $i; ?>. <?= $key['name_polda'] ?></h5>
                                                <div class="card-body">
                                                    <div class="row text-center">
                                                        <div class="col-md-3 col-sm-4">
                                                            <h5 class="fw-bold p-0 m-0"><?= $key['kemacetan'] ?></h5>
                                                            <p class="p-0 m-0">Kemacematan</p>
                                                        </div>
                                                        <div class="col-md-3 col-sm-6">
                                                            <h5 class="fw-bold p-0 m-0"><?= $key['garlantas'] ?></h5>
                                                            <p class="p-0 m-0">Pelanggaran</p>
                                                        </div>
                                                        <div class="col-md-3 col-sm-6">
                                                            <h5 class="fw-bold p-0 m-0"><?= $key['lakalantas'] ?></h5>
                                                            <p class="p-0 m-0">Kecelakaan</p>
                                                        </div>
                                                        <div class="col-md-3 col-sm-6">
                                                            <h5 class="fw-bold p-0 m-0"><?= $key['total'] ?></h5>
                                                            <p class="p-0 m-0">Total</p>
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
        </div>
    </div>
    <script>
        let app_url = '<%-app_url%>'
        let path = '<%-path%>'
        $(document).ready(function() {
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

        if (ressCctv && ressCctv.length > 0) {
            var filterCctv = ressCctv.filter(function(e) {
                return e.lat_cctv != null && e.lng_cctv != null;
            });

            if (filterCctv.length > 0) {
                $('#openModalCctvDisplay').html(`
                                <table id="datatableCctvOnDisplay" class="table dt-responsive w-100">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Type</th> 
                                            <th>Nama</th> 
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="isiModalCctvDisplay">
                                    </tbody>
                                </table>                     
                            `);
                var countCctvDisplay = 0;
                var listCctvDisplay = '';
                $('#totalCctvDisplay').html(filterCctv.length);

                for (let i = 0; i < filterCctv.length; i++) {
                    countCctvDisplay += 1;
                    listCctvDisplay += `
                                    <tr>
                                        <td>${countCctvDisplay}</td>
                                        <td><a href="<?= base_url() ?>masterdata/Cctv" target="_blank">${filterCctv[i].type_cctv}</a></td> 
                                        <td>${filterCctv[i].vms_cctv}</td> 
                                        <td>
                                            <a class="btn" style="margin-top: -10px;"  
                                                id="flyToMapFilterCctv${countCctvDisplay}"
                                                data-cord="${filterCctv[i].lat_cctv},${filterCctv[i].lng_cctv}" 
                                                href="javascript:void(0)">
                                                <i style="color: #495057;" class="fa fas fa-eye"></i>
                                            </a> 
                                        </td>
                                    </tr>
                                `;
                    $('#isiModalCctvDisplay').html(listCctvDisplay);



                    id = i;
                    var latitudeCCTV = parseFloat(filterCctv[i].lat_cctv);
                    var longitudeCCTV = parseFloat(filterCctv[i].lng_cctv);

                    var resource = '';
                    if (filterCctv[i].ip_cctv == 'https://balisatudata.baliprov.go.id/peta-cctv') {
                        resource = `<iframe id="myIframe" src="${filterCctv[i].link_cctv}" style="width: 300px; height: 250.25px;"></iframe>`;
                    } else {
                        resource = `<img style="width: 300px;" src="${filterCctv[i].link_cctv}" />`;
                    }

                    cctvClusterGroup.addLayer(markerCCTV[i] = L.marker([latitudeCCTV, longitudeCCTV], {
                        icon: L.divIcon({
                            // className: 'location-pin',
                            html: `<img src="<?php echo base_url(); ?>assets/icon/cctv.png" style="width: 40px; margin-top: -45px;margin-left: -18.5px;">`,
                            iconSize: [5, 5],
                            iconAnchor: [5, 10]
                            // iconAnchor: [10, 33]
                        })
                    }).bindPopup(`
                                    <div style="width: 300px;">
                                        <div class="row">
                                            <div class="col-md-12" style="text-align: center;">
                                                <h5>${filterCctv[i].address_cctv}</h5>
                                            </div>
                                            <div class="col-md-12"> 
                                                ${resource}
                                            </div> 
                                        </div>
                                    </div>
                                        
                                    `, {
                        minWidth: 100,
                        maxWidth: 560,
                        width: 400
                    }));
                }


                for (let i = 0; i < countCctvDisplay; i++) {
                    console.log(`${i+1}`);
                    $(`#flyToMapFilterCctv${i+1}`).on("click", function(e) {
                        var latlong = $(this).data('cord').split(',');
                        var latitude = parseFloat(latlong[0]);
                        var longitude = parseFloat(latlong[1]);
                        mapContainer.flyTo([latitude, longitude], 20);
                    });
                }
                $('#datatableCctvOnDisplay').DataTable();
                mapContainer.addLayer(cctvClusterGroup);
            }
        }
    </script>
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            breakpoints: {
                1200: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
                992: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                576: {
                    slidesPerView: 1,
                    spaceBetween: 50,
                }
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
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