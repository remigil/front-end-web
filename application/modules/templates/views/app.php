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
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.Default.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
    <link rel="stylesheet" href="https://unpkg.com/@geoman-io/leaflet-geoman-free@latest/dist/leaflet-geoman.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.css" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/clockpicker.css">


    <style>
        #mapG20Dashboard {
            height: 700px;
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

        /* Counter-productive?
            .location-pin {
            display: inline-block;
            position: relative;
            top: 50%;
            left: 50%;
            }*/

        .location-pin img {
            width: 46px;
            height: 46px;
            margin: -26px 0 0 -13px;
            z-index: 10;
            position: absolute;
            border-radius: 50%;
            background: #3f51b5;
        }

        .pin {
            width: 50px;
            height: 50px;
            border-radius: 50% 50% 50% 0;
            background: #3f51b5;
            position: absolute;
            transform: rotate(-45deg);
            left: 50%;
            top: 50%;
            margin: -43px 0 0 -30px;
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
    </style>

    <!-- JAVASCRIPT -->
    <script src="<?php echo base_url(); ?>assets/admin/libs/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/libs/metismenu/metisMenu.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/libs/simplebar/simplebar.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/libs/node-waves/waves.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/libs/feather-icons/feather.min.js"></script>

    <?php echo $css ?>
</head>

<body>
    <div id="overlay">
        <div class="loading">
            <div class="spinner" style="margin-left: 23px;margin-bottom: 10px;"></div>
            <p style="color: white; font-size: 15px; margin-left: 3px;">Please Wait</p>
        </div>
    </div>
    <!-- <body data-layout="horizontal"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <?php if ($this->session->userdata['role'] == 'G20') { ?>
                            <a href="<?php echo base_url() ?>dashboard" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="<?php echo base_url(); ?>assets/logo-g20.svg" alt="" style="margin-left: -9px;" height="40">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?php echo base_url(); ?>assets/logo-g20.svg" alt="" style="margin-left: 72px;" height="65">

                                </span>
                            </a>

                            <a href="<?php echo base_url() ?>dashboard" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="<?php echo base_url(); ?>assets/logo-g20.svg" alt="" style="margin-left: -9px;" height="40">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?php echo base_url(); ?>assets/logo-g20.svg" alt="" style="margin-left: 72px;" height="65">

                                </span>
                            </a>
                        <?php } else { ?>
                            <a href="<?php echo base_url() ?>dashboard" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="<?php echo base_url(); ?>assets/logo-k3i.png" alt="" style="margin-left: -9px;" height="40">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?php echo base_url(); ?>assets/main-logo.png" alt="" style="margin-left: 22px;" height="65">
                                </span>
                            </a>

                            <a href="<?php echo base_url() ?>dashboard" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="<?php echo base_url(); ?>assets/logo-k3i.png" alt="" style="margin-left: -9px;" height="40">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?php echo base_url(); ?>assets/main-logo.png" alt="" style="margin-left: 22px;" height="65">
                                </span>
                            </a>
                        <?php } ?>
                    </div>

                    <button type="button" style="margin-left: -15px;background-color: #e4dfec;border-radius: 50%;height: 35px;width: 35px;margin-top: 15px;" class="btn btn-sm px-3 font-size-16 header-item" style="margin-left: 0px;" id="vertical-menu-btn">
                        <div id="changeicon">
                            <input type="text" id="statusicon" name="statusicon" value="right" hidden>
                            <i style="margin-left: -11px;" id="iconleft" class="fa fa-fw fas fa-angle-left"></i>
                            <i style="margin-left: -11px;" id="iconright" class="fa fa-fw fas fa-angle-right"></i>
                        </div>
                    </button>
                    <?php if ($this->uri->segment(1) == "dashboard") { ?>
                        <div>
                            <p style="margin-bottom: 0px;margin-top: 10px;">Welcome to Dashboard Executive</p>
                            <h3 style="display: flex;align-items: center;margin-left: 0px;margin-top: 2px;">K3I KORLANTAS POLRI</h3>
                        </div>
                    <?php } else { ?>
                        <h5 style="display: flex;align-items: center;margin-left: 0px;margin-top: 2px;"><?php echo $title; ?></h5>
                    <?php } ?>
                </div>


                <div class="d-flex">


                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon position-relative" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i data-feather="bell" class="icon-lg"></i>
                            <span class="badge bg-danger rounded-pill">5</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0"> Notifications </h6>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#!" class="small text-reset text-decoration-underline"> Unread (3)</a>
                                    </div>
                                </div>
                            </div>
                            <div data-simplebar style="max-height: 230px;">
                                <a href="#!" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <img src="<?php echo base_url(); ?>assets/admin/images/users/avatar-3.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">James Lemire</h6>
                                            <div class="font-size-13 text-muted">
                                                <p class="mb-1">It will seem like simplified English.</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>1 hour ago</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#!" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 avatar-sm me-3">
                                            <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                <i class="bx bx-cart"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Your order is placed</h6>
                                            <div class="font-size-13 text-muted">
                                                <p class="mb-1">If several languages coalesce the grammar</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>3 min ago</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#!" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 avatar-sm me-3">
                                            <span class="avatar-title bg-success rounded-circle font-size-16">
                                                <i class="bx bx-badge-check"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Your item is shipped</h6>
                                            <div class="font-size-13 text-muted">
                                                <p class="mb-1">If several languages coalesce the grammar</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>3 min ago</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="#!" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <img src="<?php echo base_url(); ?>assets/admin/images/users/avatar-6.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Salena Layfield</h6>
                                            <div class="font-size-13 text-muted">
                                                <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>1 hour ago</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2 border-top d-grid">
                                <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                    <i class="mdi mdi-arrow-right-circle me-1"></i> <span>View More..</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item right-bar-toggle me-2">
                                <i data-feather="settings" class="icon-lg"></i>
                            </button>
                        </div> -->

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item bg-soft-light border-start border-end" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="<?php echo base_url(); ?>assets/logo-k3i.png" alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ms-1 fw-medium"><?php echo $this->session->userdata['full_name']; ?></span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href="apps-contacts-profile.html"><i class="mdi mdi-face-profile font-size-16 align-middle me-1"></i> Profile</a>
                            <a class="dropdown-item" href="auth-lock-screen.html"><i class="mdi mdi-lock font-size-16 align-middle me-1"></i> Lock Screen</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo base_url() ?>login/logout"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu" style="color: #fff; background: url(<?php echo base_url() ?>assets/background-sidebar.png), linear-gradient(175.42deg, #0033EA 11.63%, #013F9F 101.04%); background-blend-mode: overlay, normal; background-position: right;background-size: cover;">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">

                        <?php if ($this->session->userdata['role'] == 'G20') { ?>
                            <li>
                                <a href="<?php echo base_url(); ?>dashboard">
                                    <i data-feather="grid"></i>
                                    <span data-key="t-dashboard">Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>operasi/renpam">
                                    <i data-feather="grid"></i>
                                    <span data-key="t-dashboard">Rencana Pengamanan</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="users"></i>
                                    <span data-key="t-authentication">Operasi</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="<?php echo base_url(); ?>operasi/Kegiatan" data-key="t-login">Jadwal Kegiatan</a></li>
                                    <li><a href="<?php echo base_url(); ?>operasi/Akun" data-key="t-login">Akun</a></li>
                                    <li><a href="<?php echo base_url(); ?>operasi/Vip" data-key="t-register">VIP</a></li>
                                    <li><a href="<?php echo base_url(); ?>operasi/Petugas" data-key="t-login">Petugas</a></li>
                                    <li><a href="<?php echo base_url(); ?>operasi/Kendaraan" data-key="t-login">Kendaraan</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="users"></i>
                                    <span data-key="t-authentication">Laporan</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="<?php echo base_url(); ?>laporan/Panic" data-key="t-login">Panic Button</a></li>
                                    <li><a href="<?php echo base_url(); ?>laporan/Operasi" data-key="t-register">Operasi</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>troublespot">
                                    <i data-feather="grid"></i>
                                    <span data-key="t-dashboard">Troublespot</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="users"></i>
                                    <span data-key="t-authentication">Fasilitas Umum</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="<?php echo base_url(); ?>fasum/ListFasum" data-key="t-login">Data Fasilitas Umum</a></li>
                                    <li><a href="<?php echo base_url(); ?>fasum/KategoriFasum" data-key="t-register">Kategori Fasilitas Umum</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="<?php echo base_url(); ?>zoom">
                                    <i data-feather="grid"></i>
                                    <span data-key="t-dashboard">Zoom</span>
                                </a>
                            </li>


                            <li class="menu-title mt-2" data-key="t-components">User Management</li>

                            <li>
                                <a href="<?php echo base_url(); ?>user/operator">
                                    <i data-feather="grid"></i>
                                    <span data-key="t-dashboard">Operator</span>
                                </a>
                            </li>


                        <?php } else { ?>
                            <li>
                                <a href="<?php echo base_url(); ?>dashboard">
                                    <i data-feather="grid"></i>
                                    <span data-key="t-dashboard">Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="grid"></i>
                                    <span data-key="t-apps">Laporan</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li>
                                        <a href="javascript: void(0);" class="has-arrow">
                                            <span data-key="t-email">Ditgakkum</span>
                                        </a>
                                        <ul class="sub-menu" aria-expanded="false">
                                            <li><a href="<?= base_url('Ditgakkum/DakgarLantas') ?>" data-key="t-inbox">Data Dakgar Lantas</a></li>
                                            <li><a href="<?= base_url('Ditgakkum/GarlantasKonvensional') ?>" data-key="t-read-email">Gar Lantas Konvensional</a></li>
                                            <li><a href="<?= base_url('Ditgakkum/LakaLantas') ?>" data-key="t-read-email">Kecelakan Lalu Lintas</a></li>
                                            <li><a href="<?= base_url('Ditgakkum/Turjawali') ?>" data-key="t-read-email">Data Turjagwali</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);" class="has-arrow">
                                            <span data-key="t-email">Ditkamsel</span>
                                        </a>
                                        <ul class="sub-menu" aria-expanded="false">
                                            <li><a href="<?= base_url('Ditkamsel/DikmasLantas') ?>" data-key="t-inbox">Dikmas Lantas</a></li>
                                            <li><a href="<?= base_url('Ditkamsel/Penyebaran') ?>" data-key="t-read-email">Penyebaran/Pemasangan</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);" class="has-arrow">
                                            <span data-key="t-email">Ditregident</span>
                                        </a>
                                        <ul class="sub-menu" aria-expanded="false">
                                            <li><a href="<?= base_url('Ditregident/Sim') ?>" data-key="t-inbox">SIM</a></li>
                                            <li><a href="<?= base_url('Ditregident/Stnk') ?>" data-key="t-read-email">STNK</a></li>
                                            <li><a href="<?= base_url('Diregident/Bpkb') ?>" data-key="t-read-email">BPKB</a></li>
                                            <li><a href="<?= base_url('Ditregident/Ranmor') ?>" data-key="t-read-email">RANMOR</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="apps-calendar.html">
                                            <span data-key="t-calendar">TripOn</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="apps-chat.html">
                                            <span data-key="t-chat">TroubleSpot</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="grid"></i>
                                    <span data-key="t-apps">Input Data</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="apps-email-read.html" data-key="t-read-email">Laporan Harian</a></li>
                                    <li><a href="apps-email-read.html" data-key="t-read-email">TroubleSpot</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>operasi/operasi">
                                    <i data-feather="grid"></i>
                                    <span data-key="t-dashboard">Rencana Operasi</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>operasi/operasi">
                                    <i data-feather="grid"></i>
                                    <span data-key="t-dashboard">Berita</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>operasi/operasi">
                                    <i data-feather="grid"></i>
                                    <span data-key="t-dashboard">Dokumen Peraturan</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="grid"></i>
                                    <span data-key="t-apps">Management Pengguna</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="apps-email-read.html" data-key="t-read-email">Akun K3I</a></li>
                                    <li><a href="apps-email-read.html" data-key="t-read-email">Akun Masyarakat</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="grid"></i>
                                    <span data-key="t-apps">Master Data</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="apps-email-read.html" data-key="t-read-email">Polda</a></li>
                                    <li><a href="apps-email-read.html" data-key="t-read-email">Polres</a></li>
                                    <li><a href="apps-email-read.html" data-key="t-read-email">Petugas Nasional</a></li>
                                    <li><a href="apps-email-read.html" data-key="t-read-email">Kendaraan Nasional</a></li>
                                    <li><a href="apps-email-read.html" data-key="t-read-email">Samsat</a></li>
                                    <li><a href="apps-email-read.html" data-key="t-read-email">SIM Keliling</a></li>
                                    <li><a href="apps-email-read.html" data-key="t-read-email">CCTV</a></li>
                                    <li><a href="apps-email-read.html" data-key="t-read-email">Fasilitas Umum</a></li>
                                </ul>
                            </li>
                        <?php } ?>
                    </ul>


                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content" style="background-color: #f5f3f4;">
                <div class="container-fluid">

                    <!-- Page Content-->
                    <?php $this->load->view($page_content) ?>

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


            <!-- <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                 <script>document.write(new Date().getFullYear())</script> © K3I. 
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    <script>document.write(new Date().getFullYear())</script> © K3I.
                                    Design & Develop by <a href="#!" class="text-decoration-underline">Themesbrand</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </footer> -->
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->


    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title d-flex align-items-center p-3">

                <h5 class="m-0 me-2">Theme Customizer</h5>

                <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
            </div>

            <!-- Settings -->
            <hr class="m-0" />

            <div class="p-4">
                <h6 class="mb-3">Layout</h6>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout" id="layout-vertical" value="vertical">
                    <label class="form-check-label" for="layout-vertical">Vertical</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout" id="layout-horizontal" value="horizontal">
                    <label class="form-check-label" for="layout-horizontal">Horizontal</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Layout Mode</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-mode" onchange="localStorage.setItem('data-layout-mode', 'light')" id="layout-mode-light" value="light">
                    <label class="form-check-label" for="layout-mode-light">Light</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-mode" onchange="localStorage.setItem('data-layout-mode', 'dark')" id="layout-mode-dark" value="dark">
                    <label class="form-check-label" for="layout-mode-dark">Dark</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Layout Width</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-width" id="layout-width-fuild" value="fuild" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
                    <label class="form-check-label" for="layout-width-fuild">Fluid</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-width" id="layout-width-boxed" value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')">
                    <label class="form-check-label" for="layout-width-boxed">Boxed</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Layout Position</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-position" id="layout-position-fixed" value="fixed" onchange="document.body.setAttribute('data-layout-scrollable', 'false')">
                    <label class="form-check-label" for="layout-position-fixed">Fixed</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-position" id="layout-position-scrollable" value="scrollable" onchange="document.body.setAttribute('data-layout-scrollable', 'true')">
                    <label class="form-check-label" for="layout-position-scrollable">Scrollable</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Topbar Color</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="topbar-color" id="topbar-color-light" value="light" onchange="localStorage.setItem('data-topbar', 'light'); document.body.setAttribute('data-topbar', 'light')">
                    <label class="form-check-label" for="topbar-color-light">Light</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="topbar-color" id="topbar-color-dark" value="dark" onchange="localStorage.setItem('data-topbar', 'dark'); document.body.setAttribute('data-topbar', 'dark')">
                    <label class="form-check-label" for="topbar-color-dark">Dark</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Size</h6>

                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-default" value="default" onchange="localStorage.setItem('data-sidebar-size', 'lg'); document.body.setAttribute('data-sidebar-size', 'lg')">
                    <label class="form-check-label" for="sidebar-size-default">Default</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-compact" value="compact" onchange="localStorage.setItem('data-sidebar-size', 'md'); document.body.setAttribute('data-sidebar-size', 'md')">
                    <label class="form-check-label" for="sidebar-size-compact">Compact</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-small" value="small" onchange="localStorage.setItem('data-sidebar-size', 'sm'); document.body.setAttribute('data-sidebar-size', 'sm')">
                    <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Color</h6>

                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-light" value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
                    <label class="form-check-label" for="sidebar-color-light">Light</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-dark" value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
                    <label class="form-check-label" for="sidebar-color-dark">Dark</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-brand" value="brand" onchange="document.body.setAttribute('data-sidebar', 'brand')">
                    <label class="form-check-label" for="sidebar-color-brand">Brand</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Direction</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-direction" id="layout-direction-ltr" value="ltr">
                    <label class="form-check-label" for="layout-direction-ltr">LTR</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-direction" id="layout-direction-rtl" value="rtl">
                    <label class="form-check-label" for="layout-direction-rtl">RTL</label>
                </div>

            </div>

        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>


    <!-- pace js -->
    <script src="<?php echo base_url(); ?>assets/admin/libs/pace-js/pace.min.js"></script>

    <!-- choices js -->
    <script src="<?php echo base_url(); ?>assets/admin/libs/choices.js/public/assets/scripts/choices.min.js"></script>

    <!-- dropify js -->
    <script src="<?php echo base_url(); ?>assets/admin/js/pages/dropify.js"></script>
    <!-- <script src="<?php echo base_url(); ?>assets/admin/js/pages/dropify.min.js"></script> -->

    <!-- Modal js -->
    <script src="<?php echo base_url(); ?>assets/admin/js/pages/modal.init.js"></script>

    <!-- form mask -->
    <script src="<?php echo base_url(); ?>assets/admin/libs/imask/imask.min.js"></script>

    <!-- form mask init -->
    <script src="<?php echo base_url(); ?>assets/admin/js/pages/form-mask.init.js"></script>

    <!-- dropzone js -->
    <script src="<?php echo base_url(); ?>assets/admin/libs/dropzone/min/dropzone.min.js"></script>

    <!-- glightbox js -->
    <script src="<?php echo base_url(); ?>assets/admin/libs/glightbox/js/glightbox.min.js"></script>

    <!-- lightbox init -->
    <script src="<?php echo base_url(); ?>assets/admin/js/pages/lightbox.init.js"></script>

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
    <script src="<?php echo base_url(); ?>assets/admin/js/pages/dashboard.init.js"></script>

    <!-- Sweet Alerts js -->
    <script src="<?php echo base_url(); ?>assets/admin/libs/sweetalert2/sweetalert2.min.js"></script>

    <!-- Sweet alert init js-->
    <script src="<?php echo base_url(); ?>assets/admin/js/pages/sweetalert.init.js"></script>

    <!-- pristine js -->
    <script src="<?php echo base_url(); ?>assets/admin/libs/pristinejs/pristine.min.js"></script>

    <!-- form validation -->
    <script src="<?php echo base_url(); ?>assets/admin/js/pages/form-validation.init.js"></script>

    <!-- init js -->
    <script src="<?php echo base_url(); ?>assets/admin/js/pages/form-advanced.init.js"></script>

    <!-- datepicker js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>

    <!-- select2 js -->
    <script src="<?php echo base_url(); ?>assets/admin/js/pages/select2.min.js"></script>

    <!-- twitter-bootstrap-wizard js -->
    <script src="<?php echo base_url(); ?>assets/admin/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/libs/twitter-bootstrap-wizard/prettify.js"></script>

    <!-- form wizard init -->
    <script src="<?php echo base_url(); ?>assets/admin/js/pages/form-wizard.init.js"></script>

    <script src="<?php echo base_url(); ?>assets/admin/js/app.js"></script>

    <!-- Leaflet -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js"></script>
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/leaflet-routing-machine.js"></script>
    <script src="https://unpkg.com/@geoman-io/leaflet-geoman-free@latest/dist/leaflet-geoman.min.js"></script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js'></script>


    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>

    <script src="<?php echo base_url(); ?>assets/admin/js/clockpicker.js"></script>

    <?php echo $js ?>

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