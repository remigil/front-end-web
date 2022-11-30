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

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/bataspolda/css/qgis2web.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">

    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.5.0/mapbox-gl.css' rel='stylesheet' />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/clockpicker.css">


    <link rel="stylesheet" href="https://cdn3.devexpress.com/jslib/18.2.6/css/dx.common.css" />
    <link rel="stylesheet" href="https://cdn3.devexpress.com/jslib/18.2.6/css/dx.light.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">



    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <style>
        @font-face {
            font-family: 'MortendBold';
            src: url("<?= base_url('assets/fe/font/MortendBold.otf'); ?>");
        }

        .animateLine {
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
            height: 1015px;
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

        #overlayMenu {
            position: fixed;
            top: 0;
            z-index: 3000;
            width: 100%;
            height: 100%;
            display: none;
            background: rgba(0, 0, 0, 0.6);
            left: 0;
        }

        #overlayMenuDisplay {
            position: fixed;
            top: 0;
            z-index: 3000;
            width: 100%;
            height: 100%;
            display: none;
            background: rgba(0, 0, 0, 0.6);
            left: 0;
        }

        #overlayMenuFilter {
            position: fixed;
            top: 0;
            z-index: 3000;
            width: 100%;
            height: 100%;
            display: none;
            background: rgba(0, 0, 0, 0.6);
            left: 0;
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
            /* Bars */
        }

        #incognito:checked+label:before {
            cursor: pointer;
            /* color: red; */
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

        /* selects all of the text within the input element and changes the color of the text */
        .cat label input+span {
            color: #000;
        }


        /* This will declare how a selected input will look giving generic properties */
        .cat input:checked+span {
            color: #1967d2;
            /* text-shadow: 0 0  6px rgba(0, 0, 0, 0.8); */
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


        <?php if ($this->session->userdata['role'] != 'G20' || $this->session->userdata['role'] != 'Kakor' || $this->session->userdata['role'] != 'PJU'  || $this->session->userdata['role'] != 'Operator') { ?>.mm-active .active {
            background: #1d1d1d !important;
        }

        <?php } ?>
        /* @import "compass/css3"; */

        .hide {
            display: none;
        }

        .table-editable {
            position: relative;

        }

        .glyphicon {
            font-size: 20px;
        }

        .table-remove {
            color: #700;
            cursor: pointer;
        }

        .table-up,
        .table-down {
            color: #007;
            cursor: pointer;

            /* &:hover {
            color: #00f;
        } */
        }

        .table-add {
            color: #070;
            cursor: pointer;
            position: absolute;
            top: 8px;
            right: 0;

            /* &:hover {
                color: #0b0;
            } */
        }


        .timer {
            margin-top: 10px;
        }

        .timer>svg {
            width: 200px;
            height: 200px;
        }

        .timer>svg>circle {
            fill: none;
            stroke-opacity: 0.3;
            stroke: #0d6efd;
            stroke-width: 10;
            transform-origin: center center;
            transform: rotate(-90deg);
        }

        .timer>svg>circle+circle {
            stroke-dasharray: 1;
            stroke-dashoffset: 1;
            stroke-linecap: round;
            stroke-opacity: 1;
        }

        .timer.animatable>svg>circle+circle {
            transition: stroke-dashoffset 0.3s ease;
        }

        .timer>svg>text {
            font-size: 2rem;
        }

        .timer>svg>text+text {
            font-size: 1rem;
        }

        .aneh {
            width: 100%;
        }

        .aneh:hover {
            background-color: #003a91;
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

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/aes.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/crypto-js.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"></script>

    <script>
        var csfrData = {};
        csfrData['<?php echo $csrf_name; ?>'] = '<?php echo $csrf_token; ?>';
        $.ajaxSetup({
            data: csfrData
        });
    </script>

    <?php echo $css ?>
</head>

<body oncontextmenu="return false">
    <div id="overlay">
        <div class="loading">
            <div class="spinner" style="margin-left: 23px;margin-bottom: 10px;"></div>
            <p style="color: white; font-size: 15px; margin-left: 3px;">Mohon Tunggu</p>
        </div>
    </div>

    <!-- Begin page -->
    <div id="layout-wrapper">



        <header id="page-topbar">

            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <!-- <?php if ($this->session->userdata['role'] == 'Kakorlantas' || $this->session->userdata['role'] == 'Ditkamsel'  || $this->session->userdata['role'] == 'Ditgakkum' || $this->session->userdata['role'] == 'Ditregident' || $this->session->userdata['role'] == 'KaBagOps' || $this->session->userdata['role'] == 'KaBagRenmin' || $this->session->userdata['role'] == 'KaBagTIK') { ?>
                                <div class="navbar-brand-box" style="background: none;">
                                <?php } else { ?>
                                    <div class="navbar-brand-box">
										<?php } ?> -->

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

                    <?php $mobile = detect_mobile();
                    if ($mobile === false) { ?>
                        <button type="button" style="margin-left: -15px;background-color: #e4dfec;border-radius: 50%;height: 35px;width: 35px;margin-top: 15px;" class="btn btn-sm px-3 font-size-16 header-item" style="margin-left: 0px;" id="vertical-menu-btn">
                            <div id="changeicon">
                                <input type="text" id="statusicon" name="statusicon" value="right" hidden>
                                <i style="margin-left: -11px;" id="iconleft" class="fa fa-fw fas fa-angle-left"></i>
                                <i style="margin-left: -11px;" id="iconright" class="fa fa-fw fas fa-angle-right"></i>
                            </div>
                        </button>
                    <?php } else { ?>
                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>
                    <?php } ?>
                    <?php if ($this->uri->segment(1) == "dashboard" && $this->session->userdata['role'] == 'G20' || $this->session->userdata['role'] == 'Kakorlantas' || $this->session->userdata['role'] == 'Ditkamsel'  || $this->session->userdata['role'] == 'Ditgakkum' || $this->session->userdata['role'] == 'Ditregident' || $this->session->userdata['role'] == 'KaBagOps' || $this->session->userdata['role'] == 'KaBagRenmin' || $this->session->userdata['role'] == 'KaBagTIK' || $this->session->userdata['role'] == 'DivTikMabesPolri') { ?>
                        <div>
                            <?php $mobile = detect_mobile();
                            if ($mobile === true) { ?>
                                <p style="font-size:10px; margin-bottom: 0px;margin-top: 10px;">Welcome to Dashboard Executive</p>
                                <h5 style="display: flex;align-items: center;margin-left: 0px;margin-top: 5px; color: #787878; font-family:MortendBold; font-size:10px; margin-top:2px;" class="text-uppercase">K3I KORLANTAS POLRI -&nbsp; <span style="color:#007DD8 ;"> <?= $this->session->userdata['full_name']; ?></span> </h5>
                            <?php } else { ?>
                                <p style="margin-bottom: 0px;margin-top: 10px;">Welcome to Dashboard Executive</p>
                                <h3 style="display: flex;align-items: center;margin-left: 0px;margin-top: 5px; color: #787878; font-family:MortendBold; font-size:18px; margin-top:2px;" class="text-uppercase">K3I KORLANTAS POLRI -&nbsp; <span style="color:#007DD8 ;"> <?= $this->session->userdata['full_name']; ?></span> </h3>
                            <?php } ?>
                        </div>

                    <?php } else if ($this->uri->segment(1) == "dashboard") { ?>
                        <?php if ($this->session->userdata['role'] == 'Kakorlantas' || $this->session->userdata['role'] == 'Ditkamsel'  || $this->session->userdata['role'] == 'Ditgakkum' || $this->session->userdata['role'] == 'Ditregident' || $this->session->userdata['role'] == 'KaBagOps' || $this->session->userdata['role'] == 'KaBagRenmin' || $this->session->userdata['role'] == 'KaBagTIK') { ?>
                            <h5 style="display: flex;align-items: center;margin-left: 0px;margin-top: 2px; color:black"><?php echo $title; ?></h5>
                        <?php } else if ($this->session->userdata['role'] == 'Kapolda' || $this->session->userdata['role'] == 'Kapolres') { ?>
                            <h5 style="display: flex;align-items: center;margin-left: 0px;margin-top: 2px; color:white"><?php echo $title; ?></h5>
                        <?php } else { ?>
                            <div>
                                <p style="margin-bottom: 0px;margin-top: 10px;">Welcome to Dashboard Executive</p>
                                <h3 style="display: flex;align-items: center;margin-left: 0px;margin-top: 2px; color:#007DD8;">K3I KORLANTAS POLRI</h3>
                            </div>
                        <?php } ?>

                    <?php } else { ?>
                        <?php if ($this->session->userdata['role'] == 'Kakorlantas' || $this->session->userdata['role'] == 'Ditkamsel'  || $this->session->userdata['role'] == 'Ditgakkum' || $this->session->userdata['role'] == 'Ditregident' || $this->session->userdata['role'] == 'KaBagOps' || $this->session->userdata['role'] == 'KaBagRenmin' || $this->session->userdata['role'] == 'KaBagTIK') { ?>
                            <h5 style="display: flex;align-items: center;margin-left: 0px;margin-top: 2px; color:black"><?php echo $title; ?></h5>
                        <?php } else { ?>
                            <h5 style="display: flex;align-items: center;margin-left: 0px;margin-top: 2px;"><?php echo $title; ?></h5>
                        <?php } ?>
                    <?php } ?>
                </div>


                <div class="d-flex">

                    <?php $mobile = detect_mobile();
                    if ($mobile === false) { ?>
                        <p style="text-align: end;position: relative;top: 12px;">
                            <b style="text-transform: uppercase;font-size: 18px;">
                                <?php echo format_indoHari(date('Y-m-d')) ?>
                            </b></br>
                            <span id="jam" style="font-size:15px;font-weight: bold;"></span>
                        </p>
                    <?php } ?>
                    <?php if ($this->session->userdata['role'] != 'Korlantas' || $this->session->userdata['role'] != 'Kapolda' || $this->session->userdata['role'] != 'Polres') { ?>
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon position-relative openNotif" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php if ($this->session->userdata['role'] == 'Kakorlantas' || $this->session->userdata['role'] == 'Ditkamsel'  || $this->session->userdata['role'] == 'Ditgakkum' || $this->session->userdata['role'] == 'Ditregident' || $this->session->userdata['role'] == 'KaBagOps' || $this->session->userdata['role'] == 'KaBagRenmin' || $this->session->userdata['role'] == 'KaBagTIK' || $this->session->userdata['role'] == 'DivTikMabesPolri') { ?>
                                    <!-- <img src="<?= base_url('assets/sidebar/lonceng-notif.svg') ?>" alt="" style="width: 20px; margin-right:10px"> -->
                                    <i data-feather="bell" class="icon-lg"></i>
                                <?php } else if ($this->session->userdata['role'] == 'Kapolda' || $this->session->userdata['role'] == 'Kapolres') { ?>
                                    <img src="<?= base_url('assets/sidebar/icon-notif.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                <?php } else { ?>
                                    <i data-feather="bell" class="icon-lg"></i>
                                <?php } ?>
                                <span class="badge bg-danger rounded-pill" id="totalNotif"></span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0"> Notifications</h6>
                                        </div>
                                        <!-- <div class="col-auto">
                                        <a href="#!" class="small text-reset text-decoration-underline"> Unread (3)</a>
                                    </div> -->
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
                    <?php } ?>

                    <!-- <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item right-bar-toggle me-2">
                                <i data-feather="settings" class="icon-lg"></i>
                            </button>
                        </div> -->

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item bg-soft-light border-start border-end" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php if ($this->session->userdata['role'] == 'Kakorlantas' || $this->session->userdata['role'] == 'Ditkamsel'  || $this->session->userdata['role'] == 'Ditgakkum' || $this->session->userdata['role'] == 'Ditregident' || $this->session->userdata['role'] == 'KaBagOps' || $this->session->userdata['role'] == 'KaBagRenmin' || $this->session->userdata['role'] == 'KaBagTIK' || $this->session->userdata['role'] == 'DivTikMabesPolri') { ?>
                                <!-- <img class="rounded-circle header-profile-user" src="<?php echo base_url(); ?>assets/sidebar/icon-profile-emas.svg" alt="Header Avatar"> -->
                                <img class="rounded-circle header-profile-user" src="<?php echo base_url(); ?>assets/logo-k3i.png" alt="Header Avatar">
                                <!-- <span class="d-none d-xl-inline-block ms-1 fw-medium"><?php echo $this->session->userdata['full_name']; ?></span> -->
                            <?php } else if ($this->session->userdata['role'] == 'Kapolda' || $this->session->userdata['role'] == 'Kapolres') { ?>
                                <img class="rounded-circle header-profile-user" src="<?php echo base_url(); ?>assets/sidebar/icon-profile.svg" alt="Header Avatar">

                            <?php } else { ?>
                                <img class="rounded-circle header-profile-user" src="<?php echo base_url(); ?>assets/logo-k3i.png" alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium"><?php echo $this->session->userdata['full_name']; ?></span>
                            <?php } ?>
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
        <?php if ($this->session->userdata['role'] == 'Kakorlantas' || $this->session->userdata['role'] == 'KaBagOps') { ?>
            <div class="vertical-menu" style="color: #fff; background: url(<?php echo base_url() ?>assets/background-sidebar.png), linear-gradient(175.42deg, #0033EA 11.63%, #013F9F 101.04%); background-blend-mode: overlay, normal; background-position: right;background-size: cover;">
            <?php } else { ?>
                <div class="vertical-menu" style="color: #fff; background: url(<?php echo base_url() ?>assets/background-sidebar.png), linear-gradient(175.42deg, #0033EA 11.63%, #013F9F 101.04%); background-blend-mode: overlay, normal; background-position: right;background-size: cover;">
                <?php } ?>

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
                                <!-- <li>
                                        <a href="<?php echo base_url(); ?>operasi/renpam">
                                            <i data-feather="grid"></i>
                                            <span data-key="t-dashboard">Uraian Kegiatan</span>
                                        </a>
                                    </li> -->
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow">
                                        <i data-feather="users"></i>
                                        <span data-key="t-authentication">Uraian Kegiatan</span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <li><a href="<?php echo base_url(); ?>operasi/renpam/operasi" data-key="t-login">Operasi Puri Agung</a></li>
                                        <li><a href="<?php echo base_url(); ?>operasi/renpam/harian" data-key="t-login">Tidak Terjadwal</a></li>
                                        <li><a href="<?php echo base_url(); ?>operasi/renpam" data-key="t-login">Keseluruhan</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow">
                                        <img src="<?= base_url('assets/sidebar/operasi.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                        <span data-key="t-authentication">Operasi</span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <li><a href="<?php echo base_url(); ?>operasi/Kegiatan" data-key="t-login">Jadwal Kegiatan</a></li>
                                        <li><a href="<?php echo base_url(); ?>operasi/Akun" data-key="t-login">Akun</a></li>
                                        <li><a href="<?php echo base_url(); ?>operasi/Vip" data-key="t-register">VVIP</a></li>
                                        <li><a href="<?php echo base_url(); ?>operasi/Petugas" data-key="t-login">Petugas</a></li>
                                        <li><a href="<?php echo base_url(); ?>operasi/Kendaraan" data-key="t-login">Kendaraan</a></li>
                                        <li><a href="<?php echo base_url(); ?>operasi/Ht" data-key="t-login">HT</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow">
                                        <img src="<?= base_url('assets/sidebar/laporanOperasi.svg') ?>" alt="" style="width: 16px; margin-right:10px">
                                        <span data-key="t-authentication">Laporan Operasi</span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <li><a href="<?php echo base_url(); ?>laporan/Operasi" data-key="t-register">Kegiatan</a></li>
                                        <li><a href="<?php echo base_url(); ?>laporan/Panic" data-key="t-login">Panic Button</a></li>
                                        <li><a href="<?php echo base_url(); ?>laporan/Harian" data-key="t-login">Laporan Harian</a></li>
                                        <li><a href="<?php echo base_url(); ?>laporan/Anev" data-key="t-login">Laporan Anev</a></li>
                                    </ul>
                                </li>
                                <!-- <li>
                                        <a href="<?php echo base_url(); ?>troublespot">
                                            <i data-feather="grid"></i>
                                            <span data-key="t-dashboard">Troublespot</span>
                                        </a>
                                    </li> -->

                                <!-- <li>
                                        <a href="javascript: void(0);" class="has-arrow">
                                            <i data-feather="users"></i>
                                            <span data-key="t-authentication">Fasilitas Umum</span>
                                        </a>
                                        <ul class="sub-menu" aria-expanded="false">
                                            <li><a href="<?php echo base_url(); ?>fasum/ListFasum" data-key="t-login">Data Fasilitas Umum</a></li>
                                            <li><a href="<?php echo base_url(); ?>fasum/KategoriFasum" data-key="t-register">Kategori Fasilitas Umum</a></li>
                                        </ul>
                                    </li> -->

                                <li>
                                    <a href="<?php echo base_url(); ?>masterdata/Cctv">
                                        <img src="<?= base_url('assets/sidebar/cctv.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                        <span data-key="t-dashboard">CCTV</span>
                                    </a>
                                </li>



                                <li>
                                    <a href="<?php echo base_url('dokumenperaturan/DokumenPeraturan'); ?>">
                                        <img src="<?= base_url('assets/sidebar/icon-dokumenperaturan.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                        <span data-key="t-peraturan">Dokumen Peraturan</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="<?php echo base_url(); ?>zoom">
                                        <img src="<?= base_url('assets/sidebar/zoom.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                        <span data-key="t-dashboard">ZOOM</span>
                                    </a>
                                </li>

                                <!-- <li>
                                        <a href="<?php echo base_url(); ?>gmaps">
                                            <i data-feather="grid"></i>
                                            <span data-key="t-dashboard">Peta</span>
                                        </a>
                                    </li> -->

                                <li>
                                    <a target="_blank" href="https://www.google.com/maps/place/Bali/@-8.6359009,115.1440683,61521m/data=!3m1!1e3!4m5!3m4!1s0x2dd141d3e8100fa1:0x24910fb14b24e690!8m2!3d-8.4095178!4d115.188916">
                                        <img src="<?= base_url('assets/sidebar/peta.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                        <span data-key="t-dashboard">Peta</span>
                                    </a>
                                </li>

                                <li class="menu-title mt-2" data-key="t-components">Management System</li>

                                <!-- <li>
                                        <a href="<?php echo base_url(); ?>user/operator">
                                            <i data-feather="grid"></i>
                                            <span data-key="t-dashboard">Operator</span>
                                        </a>
                                    </li> -->

                                <li>
                                    <a href="javascript: void(0);" class="has-arrow">
                                        <img src="<?= base_url('assets/sidebar/masterData.svg') ?>" alt="" style="width: 16px; margin-right:10px">
                                        <span data-key="t-apps">Master Data</span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <?php if ($this->session->userdata['role'] == 'Korlantas') {; ?>
                                            <li><a href="<?php echo base_url('masterdata/Polda'); ?>" data-key="t-read-email">Polda</a></li>
                                            <li><a href="<?php echo base_url('masterdata/Polres'); ?>" data-key="t-read-email">Polres</a></li>
                                        <?php } ?>
                                        <!-- <li><a href="<?php echo base_url('masterdata/Cctv'); ?>" data-key="t-read-email">CCTV</a></li> -->
                                        <li><a href="<?php echo base_url('masterdata/categorySchedule'); ?>" data-key="t-read-email">Kategori Jadwal Kegiatan</a></li>
                                        <li><a href="<?php echo base_url('masterdata/jabatan'); ?>" data-key="t-read-email">Jabatan VIP</a></li>
                                        <li><a href="<?php echo base_url('masterdata/negara'); ?>" data-key="t-read-email">Negara / Organisasi VIP</a></li>
                                        <li><a href="<?php echo base_url('masterdata/pangkat'); ?>" data-key="t-read-email">Pangkat Petugas</a></li>
                                        <li><a href="<?php echo base_url('masterdata/struktural'); ?>" data-key="t-read-email">Structural Petugas</a></li>
                                        <li><a href="<?php echo base_url('masterdata/kepemilikan'); ?>" data-key="t-read-email">Kepemilikan Kendaraan</a></li>
                                        <li><a href="<?php echo base_url('masterdata/bahan_bakar'); ?>" data-key="t-read-email">Bahan Bakar Kendaraan</a></li>
                                        <li><a href="<?php echo base_url('masterdata/Fasilitasumum'); ?>" data-key="t-read-email">Fasilitas Khusus</a></li>
                                        <li><a href="<?php echo base_url('masterdata/Fasilitasumum/radius'); ?>" data-key="t-read-email">Cluster</a></li>
                                    </ul>
                                </li>

                                <li class="menu-title mt-2" data-key="t-components">Sistem Pendukung</li>
                                <li>
                                    <a href="http://rc.korlantas.polri.go.id:8900/eri2017/index.php" target="_blank">
                                        <img src="<?= base_url('assets/sidebar/eri_irsms.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                        <span data-key="t-dashboard">ERI</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://irsms.korlantas.polri.go.id/dashboard/irsms_icell" target="_blank">
                                        <img src="<?= base_url('assets/sidebar/eri_irsms.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                        <span data-key="t-dashboard">IRSMS</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://dakgargakkum.com/dashboard" target="_blank">
                                        <img src="<?= base_url('assets/sidebar/eri_irsms.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                        <span data-key="t-dashboard">E-TILANG</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://backoffice.etle-bali.info" target="_blank">
                                        <img src="<?= base_url('assets/sidebar/eri_irsms.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                        <span data-key="t-dashboard">ETLE</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="http://dashboard.korlantaspolri.id/expose" target="_blank">
                                        <img src="<?= base_url('assets/sidebar/eri_irsms.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                        <span data-key="t-dashboard">GPS RANMOR FOSIL</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="http://siwalpjr.gps.id" target="_blank">
                                        <img src="<?= base_url('assets/sidebar/eri_irsms.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                        <span data-key="t-dashboard">GPS RANMOR LISTRIK</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="http://pjrstream.com/" target="_blank">
                                        <img src="<?= base_url('assets/sidebar/eri_irsms.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                        <span data-key="t-dashboard">BODYCAM</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="https://vo.1data.tech/" target="_blank">
                                        <img src="<?= base_url('assets/sidebar/eri_irsms.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                        <span data-key="t-dashboard">SAMAPTA</span>
                                    </a>
                                </li>

                                <!-- <li>
                                                        <a href="<?php echo base_url(); ?>masterdata/bodycam">
                                                            <img src="<?= base_url('assets/sidebar/icon-dashboard.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                                            <span data-key="t-dashboard">BodyCam</span>
                                                        </a>
                                                    </li> -->

                            <?php } elseif ($this->session->userdata['role'] == 'Kakor' || $this->session->userdata['role'] == 'PJU'  || $this->session->userdata['role'] == 'Operator') { ?>

                                <li>
                                    <a href="<?php echo base_url(); ?>dashboard?start_date=<?= date("Y-m-d") ?>&end_date=<?= date("Y-m-d") ?>">
                                        <img src="<?= base_url('assets/sidebar/icon-dashboard.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                        <span data-key="t-dashboard">Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow">
                                        <img src="<?= base_url('assets/sidebar/laporanOperasi.svg') ?>" alt="" style="width: 16px; margin-right:10px">
                                        <span data-key="t-authentication">Laporan Operasi</span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <li><a href="<?php echo base_url(); ?>laporan/Operasi" data-key="t-register">Kegiatan</a></li>
                                        <li><a href="<?php echo base_url(); ?>laporan/Panic" data-key="t-login">Panic Button</a></li>
                                        <li><a href="<?php echo base_url(); ?>laporan/Harian" data-key="t-login">Laporan Harian</a></li>
                                    </ul>
                                </li>
                                <?php if ($this->session->userdata['role'] != 'Operator') { ?>
                                    <li>
                                        <a href="<?php echo base_url(); ?>dashboard/peta">
                                            <img src="<?= base_url('assets/sidebar/peta.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                            <span data-key="t-dashboard">Peta</span>
                                        </a>
                                    </li>
                                <?php } ?>


                                <li>
                                    <a href="<?php echo base_url(); ?>masterdata/Cctv">
                                        <img src="<?= base_url('assets/sidebar/cctv.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                        <span data-key="t-dashboard">CCTV</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="<?php echo base_url('dokumenperaturan/DokumenPeraturan'); ?>">
                                        <img src="<?= base_url('assets/sidebar/icon-dokumenperaturan.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                        <span data-key="t-peraturan">Dokumen Peraturan</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" class="has-arrow">
                                        <i data-feather="users"></i>
                                        <span data-key="t-authentication">Uraian Kegiatan</span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <li><a href="<?php echo base_url(); ?>operasi/renpam/operasi" data-key="t-login">PAMWAL KTT G20 Bali</a></li>
                                        <li><a href="<?php echo base_url(); ?>operasi/renpam/harian" data-key="t-login">Harian</a></li>
                                        <li><a href="<?php echo base_url(); ?>operasi/renpam" data-key="t-login">Keseluruhan</a></li>
                                    </ul>
                                </li>

                            <?php } elseif ($this->session->userdata['role'] == 'ITDC') { ?>

                                <li>
                                    <a href="<?php echo base_url(); ?>dashboard">
                                        <i data-feather="grid"></i>
                                        <span data-key="t-dashboard">Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>masterdata/cctv/fullscreen">
                                        <img src="<?= base_url('assets/sidebar/cctv.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                        <span data-key="t-dashboard">CCTV</span>
                                    </a>
                                </li>

                            <?php } elseif ($this->session->userdata['role'] == 'DivTikMabesPolri') { ?>
                                <li>
                                    <a href="<?php echo base_url('divtik/div_tik'); ?>" data-key="t-login">
                                        <img src="<?= base_url('assets/sidebar/icon-rekapitulasi-grafik.svg') ?>" alt="" style="width: 15px; margin-right:10px">
                                        <span data-key="t-dashboard" style="color: white;">Statistik Nasional</span>
                                    </a>
                                </li>
                            <?php } elseif ($this->session->userdata['role'] == 'Kakorlantas' || $this->session->userdata['role'] == 'KaBagOps') { ?>

                                <!-- <div class="text-center mt-3">
                                            <?php if ($this->session->userdata['role'] == 'Kakorlantas') { ?>
                                                <img src="<?= base_url('assets/profil_kakor.png') ?>" alt="" width="100px" style="border-radius: 100%;" class="mb-3">
                                                <h5 style="color: #FFCE31;">IRJEN POL Drs. FIRMAN SANTYABUDI, M.Si.</h5>
                                                <p style="color: #969696;">KAKORLANTAS POLRI</p>
                                            <?php } elseif ($this->session->userdata['role'] == 'Ditkamsel') { ?>
                                                <img src="<?= base_url('assets/fe/profil/DIRKAMSEL-CRYSHNANDA.png') ?>" alt="" width="100px" height="100px" style="border-radius: 100%;" class="mb-3">
                                                <h5 style="color: #FFCE31;">BRIGJEN POL Prof. Dr. CHRYSHNANDA DWILAKSANA, M.Si.</h5>
                                                <p style="color: #969696;">DIRKAMSEL</p>
                                            <?php } elseif ($this->session->userdata['role'] == 'Ditgakkum') { ?>
                                                <img src="<?= base_url('assets/fe/profil/DIRGAKKUM-AAN-RAHANAN.jpg') ?>" alt="" width="100px" height="100px" style="border-radius: 100%;" class="mb-3">
                                                <h5 style="color: #FFCE31;">BRIGJEN POL Drs. AAN SUHANAN, M.Si.</h5>
                                                <p style="color: #969696;">DIRGAKKUM</p>
                                            <?php } elseif ($this->session->userdata['role'] == 'Ditregident') { ?>
                                                <img src="<?= base_url('assets/fe/profil/DIRREGIDENT-YUSRI-YUNUS.jpg') ?>" alt="" width="100px" height="100px" style="border-radius: 100%;" class="mb-3">
                                                <h5 style="color: #FFCE31;">BRIGJEN POL Drs. YUSRI YUNUS</h5>
                                                <p style="color: #969696;">DIRREGIDENT</p>
                                            <?php } elseif ($this->session->userdata['role'] == 'KaBagOps') { ?>
                                                <img src="<?= base_url('assets/fe/profil/BAGOPS-EDDY-DJUNAED.jpg') ?>" alt="" width="100px" height="100px" style="border-radius: 100%;" class="mb-3">
                                                <h5 style="color: #FFCE31;">KOMBES POL EDDY DJUNAEDI, S.I.K.</h5>
                                                <p style="color: #969696;">KABAG OPS</p>
                                            <?php } elseif ($this->session->userdata['role'] == 'KaBagRenmin') { ?>
                                                <img src="<?= base_url('assets/fe/profil/BAGRENMIN-Singgamata.jpg') ?>" alt="" width="100px" height="100px" style="border-radius: 100%;" class="mb-3">
                                                <h5 style="color: #FFCE31;">KOMBES POL I MADE AGUS PRASATYA, S.I.K., M.Hum</h5>
                                                <p style="color: #969696;">KABAG RENMIN</p>
                                            <?php } elseif ($this->session->userdata['role'] == 'KaBagTIK') { ?>
                                                <img src="<?= base_url('assets/fe/BAGTIK-AGUS PRASATYA.jpg') ?>" alt="" width="100px" height="100px" style="border-radius: 100%;" class="mb-3">
                                                <h5 style="color: #FFCE31;">KOMBES POL SINGGAMATA, S.I.K., M.H.</h5>
                                                <p style="color: #969696;">KABAG TIK</p>
                                            <?php } ?>
                                        </div> -->

                                <li>
                                    <a href="<?php echo base_url(); ?>statistik_nasional">
                                        <img src="<?= base_url('assets/sidebar/icon-rekapitulasi-grafik.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                        <span data-key="t-dashboard" style="color: white;">Statistik Nasional</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow">
                                        <img src="<?= base_url('assets/sidebar/Subsatker.svg') ?>" alt="" style="width: 20px; margin-right:10px; fill:#123123">
                                        <span data-key="t-authentication" style="color: white;">Subsatker Korlantas</span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="false">

                                        <li>
                                            <a href="<?php echo base_url('ditgakkum'); ?>" data-key="t-login">
                                                <img src="<?= base_url('assets/sidebar/icon-list.svg') ?>" alt="" style="width: 15px; margin-right:10px">
                                                <span data-key="t-dashboard" style="color: white;">DITGAKKUM</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('ditregident'); ?>" data-key="t-login">
                                                <img src="<?= base_url('assets/sidebar/icon-list.svg') ?>" alt="" style="width: 15px; margin-right:10px">
                                                <span data-key="t-dashboard" style="color: white;">DITREGIDENT</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('ditkamsel'); ?>" data-key="t-register">
                                                <img src="<?= base_url('assets/sidebar/icon-list.svg') ?>" alt="" style="width: 15px; margin-right:10px">
                                                <span data-key="t-dashboard" style="color: white;">DITKAMSEL</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('bagrenmin'); ?>" data-key="t-register">
                                                <img src="<?= base_url('assets/sidebar/icon-list.svg') ?>" alt="" style="width: 15px; margin-right:10px">
                                                <span data-key="t-dashboard" style="color: white;">BAGRENMIN</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('bagops'); ?>" data-key="t-register">
                                                <img src="<?= base_url('assets/sidebar/icon-list.svg') ?>" alt="" style="width: 15px; margin-right:10px">
                                                <span data-key="t-dashboard" style="color: white;">BAGOPS</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('bagtik'); ?>" data-key="t-register">
                                                <img src="<?= base_url('assets/sidebar/icon-list.svg') ?>" alt="" style="width: 15px; margin-right:10px">
                                                <span data-key="t-dashboard" style="color: white;">BAGTIK</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <button type="button" class="btn aneh" data-toggle="modal" data-target="#myModalPoldaDisplay1" id="getPoldatable">
                                        <img src="<?= base_url('assets/sidebar/WILAYAH.svg') ?>" alt="" style="width: 20px; margin-right:10px; margin-left:-90px; ">
                                        <span data-key="t-dashboard" style="color: white;">Kewilayahan</span>
                                    </button>
                                    <!-- <a href="<?php echo base_url(); ?>#">
                                                <img src="<?= base_url('assets/sidebar/icon-rekapitulasi-grafik.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                            </a> -->
                                </li>
                                <?php if ($this->session->userdata['role'] == 'Kakorlantas' || $this->session->userdata['role'] == 'KaBagOps') { ?>
                                    <li>
                                        <a href="javascript: void(0);" class="has-arrow">
                                            <img src="<?= base_url('assets/sidebar/satker_polri.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                            <span data-key="t-authentication" style="color: white;">Satker Polri</span>
                                        </a>
                                        <ul class="sub-menu" aria-expanded="false">
                                            <li>
                                                <a href="<?php echo base_url('divtik/div_tik'); ?>" data-key="t-login">
                                                    <img src="<?= base_url('assets/sidebar/icon-list.svg') ?>" alt="" style="width: 15px; margin-right:10px">
                                                    <span data-key="t-dashboard" style="color: white;">DIVTIK MABES POLRI</span>
                                                </a>
                                            </li>
                                            <!-- <li>
                                                        <a href="<?php echo base_url('ditregident'); ?>" data-key="t-login">
                                                            <img src="<?= base_url('assets/sidebar/icon-list.svg') ?>" alt="" style="width: 15px; margin-right:10px">
                                                            <span data-key="t-dashboard" style="color: white;">DITREGIDENT</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url('ditkamsel'); ?>" data-key="t-register">
                                                            <img src="<?= base_url('assets/sidebar/icon-list.svg') ?>" alt="" style="width: 15px; margin-right:10px">
                                                            <span data-key="t-dashboard" style="color: white;">DITKAMSEL</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url('bagrenmin'); ?>" data-key="t-register">
                                                            <img src="<?= base_url('assets/sidebar/icon-list.svg') ?>" alt="" style="width: 15px; margin-right:10px">
                                                            <span data-key="t-dashboard" style="color: white;">BAGRENMIN</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url('bagops'); ?>" data-key="t-register">
                                                            <img src="<?= base_url('assets/sidebar/icon-list.svg') ?>" alt="" style="width: 15px; margin-right:10px">
                                                            <span data-key="t-dashboard" style="color: white;">BAGOPS</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url('bagtik'); ?>" data-key="t-register">
                                                            <img src="<?= base_url('assets/sidebar/icon-list.svg') ?>" alt="" style="width: 15px; margin-right:10px">
                                                            <span data-key="t-dashboard" style="color: white;">BAGTIK</span>
                                                        </a>
                                                    </li> -->
                                        </ul>
                                    </li>
                                <?php } ?>

                                <li>
                                    <a href="javascript: void(0);" class="has-arrow">
                                        <img src="<?= base_url('assets/sidebar/Subsatker.svg') ?>" alt="" style="width: 20px; margin-right:10px; fill:#123123">
                                        <span data-key="t-authentication" style="color: white;">Laporan</span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="false">

                                        <li>
                                            <a href="<?php echo base_url('laporan/laporan_umum'); ?>" data-key="t-login">
                                                <img src="<?= base_url('assets/sidebar/icon-list.svg') ?>" alt="" style="width: 15px; margin-right:10px">
                                                <span data-key="t-dashboard" style="color: white;">Harian</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('#'); ?>" data-key="t-login">
                                                <img src="<?= base_url('assets/sidebar/icon-list.svg') ?>" alt="" style="width: 15px; margin-right:10px">
                                                <span data-key="t-dashboard" style="color: white;">Mingguan</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('#'); ?>" data-key="t-register">
                                                <img src="<?= base_url('assets/sidebar/icon-list.svg') ?>" alt="" style="width: 15px; margin-right:10px">
                                                <span data-key="t-dashboard" style="color: white;">Bulanan</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('#'); ?>" data-key="t-register">
                                                <img src="<?= base_url('assets/sidebar/icon-list.svg') ?>" alt="" style="width: 15px; margin-right:10px">
                                                <span data-key="t-dashboard" style="color: white;">Triwulan</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('#'); ?>" data-key="t-register">
                                                <img src="<?= base_url('assets/sidebar/icon-list.svg') ?>" alt="" style="width: 15px; margin-right:10px">
                                                <span data-key="t-dashboard" style="color: white;">Tahunan</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow">
                                        <img src="<?= base_url('assets/sidebar/Subsatker.svg') ?>" alt="" style="width: 20px; margin-right:10px; fill:#123123">
                                        <span data-key="t-authentication" style="color: white;">Laporan Anev</span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="false">

                                        <li>
                                            <a href="<?php echo base_url('laporan/laporan_anev'); ?>" data-key="t-login">
                                                <img src="<?= base_url('assets/sidebar/icon-list.svg') ?>" alt="" style="width: 15px; margin-right:10px">
                                                <span data-key="t-dashboard" style="color: white;">Harian</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('#'); ?>" data-key="t-login">
                                                <img src="<?= base_url('assets/sidebar/icon-list.svg') ?>" alt="" style="width: 15px; margin-right:10px">
                                                <span data-key="t-dashboard" style="color: white;">Mingguan</span>
                                            </a>
                                        </li>
                                        <li>
                                            <!-- <img src="<?= url_api(); ?>polda/logo/${ressData[i].logo_polda}" style="width:35px;"> -->
                                            <!-- 'http://34.143.227.90:3020/v1/anev/getMonthly?mode=pdf-download&month=' . date('n') . '&year=2022' -->
                                            <a href="<?= url_api('anev/getMonthly?mode=pdf-download&month=' . date('n') . '&year=' . date('Y')); ?>" data-key="t-register">
                                                <img src="<?= base_url('assets/sidebar/icon-list.svg') ?>" alt="" style="width: 15px; margin-right:10px">
                                                <span data-key="t-dashboard" style="color: white;">Bulanan</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('#'); ?>" data-key="t-register">
                                                <img src="<?= base_url('assets/sidebar/icon-list.svg') ?>" alt="" style="width: 15px; margin-right:10px">
                                                <span data-key="t-dashboard" style="color: white;">Triwulan</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('#'); ?>" data-key="t-register">
                                                <img src="<?= base_url('assets/sidebar/icon-list.svg') ?>" alt="" style="width: 15px; margin-right:10px">
                                                <span data-key="t-dashboard" style="color: white;">Tahunan</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- <li>
                                        <a href="<?php echo base_url('anev/Anev'); ?>">
                                            <img src="<?= base_url('assets/sidebar/icon-anev.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                            <span data-key="t-dashboard" style="color: white;">Laporan Anev</span>
                                        </a>
                                    </li> -->
                                <!-- Ini nanti dilanjut -->
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow">
                                        <img src="<?= base_url('assets/sidebar/icon-profile.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                        <span data-key="t-authentication" style="color: white;">Masyarakat</span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <li>
                                            <a href="<?= base_url('tripon') ?>" data-key="t-login">
                                                <img src="<?= base_url('assets/sidebar/icon-list.svg') ?>" alt="" style="width: 15px; margin-right:10px">
                                                <span data-key="t-dashboard" style="color: white;">TripOn</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- Ini nanti dilanjut -->
                                <!-- <div class="" style="height:2px; width:90%; background-color:white; margin:auto;"></div>
                                        <li>
                                            <a href="<?php echo base_url(); ?>statistik_nasional">
                                                <span data-key="t-dashboard" style="color: white;">DIVTIK MABES POLRI</span>
                                            </a>
                                        </li>
                                        <div class="" style="height:2px; width:90%; background-color:white; margin:auto;"></div> -->
                                <!-- <hr style="height: 5px; background-color:white !Important;"> -->

                                <li class="menu-title mt-2 mb-n3" data-key="t-components">Sistem Pendukung Internal</li>
                                <li class="mb-n2">
                                    <a href="http://rc.korlantas.polri.go.id:8900/eri2017/index.php" target="_blank">
                                        <img src="<?= base_url('assets/sidebar/eri_irsms.svg') ?>" alt="" style="width: 15px; margin-right:10px">
                                        <span class="" style="font-size:13px" data-key="t-dashboard">ERI</span>
                                    </a>
                                </li>
                                <li class="mb-n2">
                                    <a href="https://irsms.korlantas.polri.go.id/dashboard/irsms_icell" target="_blank">
                                        <img src="<?= base_url('assets/sidebar/eri_irsms.svg') ?>" alt="" style="width: 13px; margin-right:10px">
                                        <span class="" style="font-size:13px" data-key="t-dashboard">IRSMS</span>
                                    </a>
                                </li>
                                <li class="mb-n2">
                                    <a href="https://dakgargakkum.com/dashboard" target="_blank">
                                        <img src="<?= base_url('assets/sidebar/eri_irsms.svg') ?>" alt="" style="width: 15px; margin-right:10px">
                                        <span class="" style="font-size:13px" data-key="t-dashboard">E-TILANG</span>
                                    </a>
                                </li>
                                <li class="mb-n2">
                                    <a href="http://backoffice.etle-bali.info" target="_blank">
                                        <img src="<?= base_url('assets/sidebar/eri_irsms.svg') ?>" alt="" style="width: 15px; margin-right:10px">
                                        <span class="" style="font-size:13px" data-key="t-dashboard">ETLE</span>
                                    </a>
                                </li>

                                <li class="mb-n2">
                                    <a href="http://dashboard.korlantaspolri.id/expose" target="_blank">
                                        <img src="<?= base_url('assets/sidebar/eri_irsms.svg') ?>" alt="" style="width: 15px; margin-right:10px">
                                        <span class="" style="font-size:13px" data-key="t-dashboard">GPS RANMOR FOSIL</span>
                                    </a>
                                </li>

                                <li class="mb-n2">
                                    <a href="http://siwalpjr.gps.id" target="_blank">
                                        <img src="<?= base_url('assets/sidebar/eri_irsms.svg') ?>" alt="" style="width: 15px; margin-right:10px">
                                        <span class="" style="font-size:13px" data-key="t-dashboard">GPS RANMOR LISTRIK</span>
                                    </a>
                                </li>

                                <li class="mb-n2">
                                    <a href="http://pjrstream.com/" target="_blank">
                                        <img src="<?= base_url('assets/sidebar/eri_irsms.svg') ?>" alt="" style="width: 15px; margin-right:10px">
                                        <span class="" style="font-size:13px" data-key="t-dashboard">BODYCAM</span>
                                    </a>
                                </li>
                                <li class="menu-title mt-2 mb-n3" data-key="t-components">Sistem Pendukung Eksternal</li>
                                <li class="mb-n2">
                                    <a href="https://vo.1data.tech/" target="_blank">
                                        <img src="<?= base_url('assets/sidebar/eri_irsms.svg') ?>" alt="" style="width: 15px; margin-right:10px">
                                        <span class="" style="font-size:13px" data-key="t-dashboard">SAMAPTA</span>
                                    </a>
                                </li>

                            <?php } else if ($this->session->userdata['role'] == 'Kapolda' || $this->session->userdata['role'] == 'Kapolres') { ?>
                                <li>
                                    <a href="<?php echo base_url(); ?>dashboard">
                                        <img src="<?= base_url('assets/sidebar/icon-home.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                        <span data-key="t-dashboard">Beranda</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow">
                                        <img src="<?= base_url('assets/sidebar/icon-rekapitulasi-grafik.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                        <span data-key="t-authentication">Rekapitulasi dan Grafik</span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <li>
                                            <a href="<?php echo base_url('rekapitulasi/Rekap_pelanggaran'); ?>" data-key="t-login">
                                                <img src="<?= base_url('assets/sidebar/icon-list.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                                <span data-key="t-dashboard">Data Pelanggaran</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('rekapitulasi/Rekap_kecelakaan'); ?>" data-key="t-register">
                                                <img src="<?= base_url('assets/sidebar/icon-list.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                                <span data-key="t-dashboard">Data Kecelakaan</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('rekapitulasi/Rekap_turjawali'); ?>" data-key="t-register">
                                                <img src="<?= base_url('assets/sidebar/icon-list.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                                <span data-key="t-dashboard">Data Turjawali</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="<?php echo base_url(); ?>data_harian_opsus/Data_harian_opsus">
                                        <img src="<?= base_url('assets/sidebar/icon-dataharianOpsus.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                        <span data-key="t-dashboard">Data Harian Opsus</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="<?php echo base_url('anev/Anev'); ?>">
                                        <img src="<?= base_url('assets/sidebar/icon-anev.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                        <span data-key="t-dashboard">Anev</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('peta_digital/Peta_digital'); ?>">
                                        <img src="<?= base_url('assets/sidebar/icon-petaDigital.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                        <span data-key="t-dashboard">Peta Digital</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('cctv/Cctv'); ?>">
                                        <img src="<?= base_url('assets/sidebar/icon-cctv.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                        <span data-key="t-dashboard">CCTV</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('tripon/Tripon'); ?>">
                                        <img src="<?= base_url('assets/sidebar/icon-tripon.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                        <span data-key="t-dashboard">Trip On</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://rc.korlantas.polri.go.id:8900/eri2017/index.php">
                                        <img src="<?= base_url('assets/sidebar/icon-eri-irsms.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                        <span data-key="t-dashboard">ERI</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://irsms.korlantas.polri.go.id/dashboard/irsms_icell">
                                        <img src="<?= base_url('assets/sidebar/icon-eri-irsms.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                        <span data-key="t-dashboard">IRSMS</span>
                                    </a>
                                </li>
                            <?php } else if ($this->session->userdata['role'] == 'Kapolda' || $this->session->userdata['role'] == 'Kapolres') { ?>
                                <li>
                                    <a href="<?php echo base_url(); ?>dashboard">
                                        <img src="<?= base_url('assets/sidebar/icon-home.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                        <span data-key="t-dashboard">Beranda</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow">
                                        <img src="<?= base_url('assets/sidebar/icon-rekapitulasi-grafik.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                        <span data-key="t-authentication">Rekapitulasi dan Grafik</span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <li>
                                            <a href="<?php echo base_url('rekapitulasi/Rekap_pelanggaran'); ?>" data-key="t-login">
                                                <img src="<?= base_url('assets/sidebar/icon-list.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                                <span data-key="t-dashboard">Data Pelanggaran</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('rekapitulasi/Rekap_kecelakaan'); ?>" data-key="t-register">
                                                <img src="<?= base_url('assets/sidebar/icon-list.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                                <span data-key="t-dashboard">Data Kecelakaan</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('rekapitulasi/Rekap_turjawali'); ?>" data-key="t-register">
                                                <img src="<?= base_url('assets/sidebar/icon-list.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                                <span data-key="t-dashboard">Data Turjawali</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="<?php echo base_url(); ?>data_harian_opsus/Data_harian_opsus">
                                        <img src="<?= base_url('assets/sidebar/icon-dataharianOpsus.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                        <span data-key="t-dashboard">Data Harian Opsus</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="<?php echo base_url('anev/Anev'); ?>">
                                        <img src="<?= base_url('assets/sidebar/icon-anev.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                        <span data-key="t-dashboard">Anev</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('peta_digital/Peta_digital'); ?>">
                                        <img src="<?= base_url('assets/sidebar/icon-petaDigital.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                        <span data-key="t-dashboard">Peta Digital</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('cctv/Cctv'); ?>">
                                        <img src="<?= base_url('assets/sidebar/icon-cctv.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                        <span data-key="t-dashboard">CCTV</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('tripon/Tripon'); ?>">
                                        <img src="<?= base_url('assets/sidebar/icon-tripon.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                        <span data-key="t-dashboard">Trip On</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://rc.korlantas.polri.go.id:8900/eri2017/index.php">
                                        <img src="<?= base_url('assets/sidebar/icon-eri-irsms.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                        <span data-key="t-dashboard">ERI</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://irsms.korlantas.polri.go.id/dashboard/irsms_icell">
                                        <img src="<?= base_url('assets/sidebar/icon-eri-irsms.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                        <span data-key="t-dashboard">IRSMS</span>
                                    </a>
                                </li>
                            <?php } else { ?>

                                <!-- <li>
                                            <a href="<?php echo base_url(); ?>dashboard">
                                                <img src="<?= base_url('assets/sidebar/icon-dashboard.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                                <span data-key="t-dashboard">Dashboard</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript: void(0);" class="has-arrow">
                                                <img src="<?= base_url('assets/sidebar/icon-laporan.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                                <span data-key="t-laporan">Sub Satker</span>
                                            </a>
                                            <ul class="sub-menu" aria-expanded="false">
                                                <li>
                                                    <a href="javascript: void(0);" class="has-arrow">
                                                        <img src="<?= base_url('assets/sidebar/icon-ditgakkum.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                                        <span data-key="t-ditgakkum">Ditgakkum</span>
                                                    </a>
                                                    <ul class="sub-menu" aria-expanded="false">
                                                        <li><a href="<?= base_url('ditgakkum/dakgarLantas') ?>" data-key="t-dakgar">Data Dakgar Lantas</a></li>
                                                        <li><a href="<?= base_url('ditgakkum/garlantasKonvensional') ?>" data-key="t-garlantas">Gar Lantas Konvensional</a></li>
                                                        <li><a href="<?= base_url('ditgakkum/lakaLantas') ?>" data-key="t-laka">Kecelakan Lalu Lintas</a></li>
                                                        <li><a href="<?= base_url('ditgakkum/turjawali') ?>" data-key="t-turjagwali">Data Turjagwali</a></li>
                                                    </ul>
                                                </li>
            
                                                <li>
                                                    <a href="javascript: void(0);" class="has-arrow">
                                                        <img src="<?= base_url('assets/sidebar/icon-ditregident.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                                        <span data-key="t-ditregident">Ditregident</span>
                                                    </a>
                                                    <ul class="sub-menu" aria-expanded="false">
                                                        <li><a href="<?= base_url('ditregident/sim') ?>" data-key="t-sim">SIM</a></li>
                                                        <li><a href="<?= base_url('ditregident/stnk') ?>" data-key="t-stnk">STNK</a></li>
                                                        <li><a href="<?= base_url('ditregident/bpkb') ?>" data-key="t-bpkb">BPKB</a></li>
                                                        <li><a href="<?= base_url('ditregident/ranmor') ?>" data-key="t-ranmor">RANMOR</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="javascript: void(0);" class="has-arrow">
                                                        <img src="<?= base_url('assets/sidebar/icon-ditkamsel.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                                        <span data-key="t-ditkamsel">Ditkamsel</span>
                                                    </a>
                                                    <ul class="sub-menu" aria-expanded="false">
                                                        <li><a href="<?= base_url('ditkamsel/dikmasLantas') ?>" data-key="t-dikmaslantas">Dikmas Lantas</a></li>
                                                        <li><a href="<?= base_url('ditkamsel/penyebaran') ?>" data-key="t-penyebaran">Penyebaran/Pemasangan</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url('Bagops') ?>">
                                                        <img src="<?= base_url('assets/sidebar/icon-laporan.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                                        <span data-key="t-tripon">BagOps</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url('Bagtik') ?>">
                                                        <img src="<?= base_url('assets/sidebar/icon-laporan.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                                        <span data-key="t-tripon">BagTIK</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url('Bagrenmin') ?>">
                                                        <img src="<?= base_url('assets/sidebar/icon-laporan.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                                        <span data-key="t-tripon">BagRenmin</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li> -->
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow">
                                        <img src="<?= base_url('assets/sidebar/icon-ditkamsel.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                        <span data-key="t-laporan">Satker</span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <li>
                                            <a href="<?= base_url('ditgakkum/inputData') ?>">
                                                <img src="<?= base_url('assets/sidebar/icon-ditregident.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                                <span data-key="t-tripon">Ditgakkum</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="<?= base_url('assets/sidebar/icon-ditregident.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                                <span data-key="t-tripon">Ditkamsel</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="<?= base_url('assets/sidebar/icon-ditregident.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                                <span data-key="t-tripon">Ditregident</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="<?= base_url('assets/sidebar/icon-ditregident.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                                <span data-key="t-tripon">Bagops</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="<?= base_url('assets/sidebar/icon-ditregident.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                                <span data-key="t-tripon">Bagtik</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="<?= base_url('assets/sidebar/icon-ditregident.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                                <span data-key="t-tripon">Bagrenmin</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow">
                                        <img src="<?= base_url('assets/sidebar/icon-operasi.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                        <span data-key="t-laporan">Masyarakat</span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <li>
                                            <a href="<?= base_url('tripon') ?>">
                                                <img src="<?= base_url('assets/sidebar/icon-tripon.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                                <span data-key="t-tripon">TripOn</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow">
                                        <img src="<?= base_url('assets/sidebar/icon-laporan.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                        <span data-key="t-laporan">Spot</span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <li>
                                            <a href="<?= base_url('troublespot') ?>">
                                                <img src="<?= base_url('assets/sidebar/icon-ditregident.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                                <span data-key="t-troublespot">TroubleSpot</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('troublespot/blackspot') ?>">
                                                <img src="<?= base_url('assets/sidebar/icon-ditregident.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                                <span data-key="t-blackspot">BlackSpot</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" class="has-arrow">
                                        <img src="<?= base_url('assets/sidebar/icon-operasi.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                        <span data-key="t-laporan">Operasi</span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <li>
                                            <a href="<?= base_url('operasi/RencanaOperasi') ?>">
                                                <img src="<?= base_url('assets/sidebar/icon-operasi.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                                <span data-key="t-troublespot">Khusus</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('operasi/OperasiRutin') ?>">
                                                <img src="<?= base_url('assets/sidebar/icon-operasi.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                                <span data-key="t-blackspot">Rutin</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="<?php echo base_url('berita'); ?>">
                                        <img src="<?= base_url('assets/sidebar/icon-berita.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                        <span data-key="t-berita">Berita</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('dokumenperaturan/DokumenPeraturan'); ?>">
                                        <img src="<?= base_url('assets/sidebar/icon-dokumenperaturan.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                        <span data-key="t-peraturan">Dokumen Peraturan</span>
                                    </a>
                                </li>
                                <?php if ($this->session->userdata['role'] == 'Korlantas' || $this->session->userdata['role'] == 'OperatorPolda' || $this->session->userdata['role'] == 'OperatorPolres') { ?>

                                    <li>
                                        <a href="javascript: void(0);" class="has-arrow">
                                            <img src="<?= base_url('assets/sidebar/icon-inputdata.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                            <span data-key="t-inputdata">Input Data</span>
                                        </a>
                                        <ul class="sub-menu" aria-expanded="false">
                                            <li><a href="<?= base_url('inputdata/LaporanHarian') ?>" data-key="t-read-email">LapHar Rutin</a></li>
                                        </ul>
                                        <ul class="sub-menu" aria-expanded="false">
                                            <li><a href="<?= base_url('inputdata/LaporanOperasiKhusus') ?>" data-key="t-read-email">LapHar Opsus</a></li>
                                        </ul>
                                        <?php if ($this->session->userdata['role'] == 'Korlantas') { ?>
                                            <ul class="sub-menu" aria-expanded="false">
                                                <li><a href="<?= base_url('inputdata/LaporanNTMC') ?>" data-key="t-read-email">LapHar NTMC</a></li>
                                            </ul>
                                        <?php } ?>
                                        <ul class="sub-menu" aria-expanded="false">
                                            <li><a href="<?= base_url('inputdata/LaporanMasyarakat') ?>" data-key="t-read-email">LapHar Kegiatan Masyarakat</a></li>
                                        </ul>
                                        <ul class="sub-menu" aria-expanded="false">
                                            <li><a href="<?= base_url('#') ?>" data-key="t-read-email">LapHar Kegiatan Pemerintahan</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('inputdata/ImportLaporanHarian') ?>">
                                            <img src="<?= base_url('assets/sidebar/icon-inputdata.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                            <span data-key="t-blackspot">Import Laporan Harian</span>
                                        </a>
                                    </li>
                                    <!-- <li>
                                                            <a href="<?= base_url('inputdata/ImportLaporanHarian') ?>">
                                                                <img src="<?= base_url('assets/sidebar/icon-inputdata.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                                                <span data-key="t-blackspot">Import Laporan Operasional</span>
                                                            </a>
                                                        </li> -->

                                    </li>
                                    <?php if ($this->session->userdata['role'] == 'Korlantas') { ?>
                                        <li>
                                            <a href="javascript: void(0);" class="has-arrow">
                                                <img src="<?= base_url('assets/sidebar/icon-manajemenuser.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                                <span data-key="t-pengguna">Management Pengguna</span>
                                            </a>
                                            <ul class="sub-menu" aria-expanded="false">
                                                <li><a href="<?php echo base_url('pengguna/AkunK3i'); ?>" data-key="t-read-email">Akun K3I</a></li>
                                                <li><a href="<?php echo base_url('pengguna/AkunMasyarakat'); ?>" data-key="t-read-email">Akun Masyarakat</a></li>
                                                <li><a href="<?php echo base_url('pengguna/AkunOperasi'); ?>" data-key="t-read-email">Akun Operasi</a></li>
                                            </ul>
                                        </li>
                                    <?php } ?>
                                <?php } ?>
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow">
                                        <img src="<?= base_url('assets/sidebar/icon-masterdata.svg') ?>" alt="" style="width: 20px; margin-right:10px">
                                        <span data-key="t-masterdata">Master Data</span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <?php if ($this->session->userdata['role'] == 'Korlantas') {; ?>
                                            <li><a href="<?php echo base_url('masterdata/Polda'); ?>" data-key="t-read-email">Polda</a></li>
                                            <li><a href="<?php echo base_url('masterdata/Polres'); ?>" data-key="t-read-email">Polres</a></li>
                                        <?php } ?>
                                        <li><a href="<?php echo base_url('masterdata/Petugasnasional'); ?>" data-key="t-read-email">Petugas Nasional</a></li>
                                        <li><a href="<?php echo base_url('masterdata/Kendaraannasional'); ?>" data-key="t-read-email">Kendaraan Nasional</a></li>
                                        <li><a href="<?php echo base_url('masterdata/Samsat'); ?>" data-key="t-read-email">Samsat</a></li>
                                        <li><a href="<?php echo base_url('masterdata/Simkeliling'); ?>" data-key="t-read-email">SIM Keliling</a></li>
                                        <li><a href="<?php echo base_url('masterdata/Cctv'); ?>" data-key="t-read-email">CCTV</a></li>
                                        <li><a href="<?php echo base_url('masterdata/Fasilitasumum'); ?>" data-key="t-read-email">Fasilitas Umum</a></li>
                                        <li><a href="<?php echo base_url('masterdata/Etilang'); ?>" data-key="t-read-email">ETLE</a></li>
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


            <div class="modal right fade" id="myModalPoldaDisplay1" id="getPoldatable" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabelPoldaDisplay1" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-primary ">
                            <h5 class="modal-title text-white" id="myLargeModalLabelPoldaDisplay1">Polda</h5> &nbsp;<span class="badge bg-danger rounded-pill"></span>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close" id="tutupModalPolda"></button>
                        </div>
                        <div class="modal-body" id="openModalPoldaDisplay1" style="width: 300px;">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right bar overlay-->
            <div class="rightbar-overlay"></div>



            <script>
                // EKSEKUTIF
                // tutupModalPolda



                $('#getPoldatable').on('click', function(e) {
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>dashboard/getPolda",
                        dataType: "JSON",
                        success: function(result) {
                            $("#overlay").fadeOut(300);

                            let ressData = result;
                            // console.log();

                            $("#openModalPoldaDisplay1").html(`
                                <table id="datatablePoldaOnDisplay1" class="table dt-responsive w-100" style="font-size: 12px;">
                                    <thead>
                                        <tr>
                                            <th>Logo</th>
                                            <th>Nama</th>
                                        </tr>
                                    </thead>
                                    <tbody id="isiModalPoldaDisplay1">
                                    </tbody>
                                </table>
                            `);
                            var countPoldaDisplay1 = 0;
                            var listPoldaDisplay1 = '';

                            for (let i = 0; i < ressData.length; i++) {
                                id = i;
                                var latitude = parseFloat(ressData[i].latitude);
                                var longitude = parseFloat(ressData[i].longitude);






                                countPoldaDisplay1 += 1;
                                listPoldaDisplay1 += `
                                <tr>
                                    <td>
                                        <a href=<?= base_url('executive/Polda_executive/') ?>${ressData[i].id}>
                                            <img src="<?= url_api(); ?>polda/logo/${ressData[i].logo_polda}" style="width:35px;">
                                        </a>
                                    </td>
                                    <td>
                                        <a href=<?= base_url('executive/Polda_executive/') ?>${ressData[i].id}>
                                            ${ressData[i].name_polda}
                                        </a>
                                    </td>
                                    </tr>
                `;
                                $('#isiModalPoldaDisplay1').html(listPoldaDisplay1);
                            }

                            for (let i = 0; i < countPoldaDisplay1; i++) {
                                // console.log(`${i+1}`);
                                $(`#flyToMapFilterPolda${i+1}`).on("click", function(e) {
                                    var latlong = $(this).data('cord').split(',');
                                    var latitude = parseFloat(latlong[0]);
                                    var longitude = parseFloat(latlong[1]);
                                    mapContainer.flyTo([latitude, longitude], 20);
                                });
                            }

                            $('#datatablePoldaOnDisplay1').DataTable({
                                // responsive: true,

                                // scrollX: true,

                                // sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

                                // buttons: ["excel", "csv", "pdf"],
                                processing: true,
                                oLanguage: {
                                    sSearch: 'Search:'
                                },
                                sDom: '<"top"f>t<"bottom"p><"clear">'
                            });

                        }
                    });
                })
                $(document).ready(function() {

                })
            </script>
            <!-- pace js -->
            <script src="<?php echo base_url(); ?>assets/admin/libs/pace-js/pace.min.js"></script>

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
            <script src="<?php echo base_url(); ?>assets/admin/bataspolda/js/qgis2web_expressions.js"></script>
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

            <script src="<?php echo base_url(); ?>assets/admin/bataspolda/js/leaflet.rotatedMarker.js"></script>
            <script src="<?php echo base_url(); ?>assets/admin/bataspolda/js/leaflet.pattern.js"></script>
            <script src="<?php echo base_url(); ?>assets/admin/bataspolda/js/leaflet-hash.js"></script>
            <script src="<?php echo base_url(); ?>assets/admin/bataspolda/js/Autolinker.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/admin/bataspolda/js/rbush.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/admin/bataspolda/js/labelgun.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/admin/bataspolda/js/labels.js"></script>

            <script src="<?php echo base_url(); ?>assets/admin/js/leaflet.shpfile.js"></script>
            <script src="<?php echo base_url(); ?>assets/admin/js/shp.js"></script>



            <script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/moment.min.js"></script>
            <script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/daterangepicker.js"></script>

            <script src="<?php echo base_url(); ?>assets/admin/js/clockpicker.js"></script>
            <script src="https://cdn.rawgit.com/igorescobar/jQuery-Mask-Plugin/1ef022ab/dist/jquery.mask.min.js"></script>



            <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
            <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
            <script scr="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.6.0/underscore.js"></script>
            <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>



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

                    jam();
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

                function jam() {
                    var a_p = "";
                    var e = document.getElementById('jam'),
                        d = new Date(),
                        h, m, s;
                    h = d.getHours();
                    m = set(d.getMinutes());
                    s = set(d.getSeconds());

                    if (h < 12) {
                        a_p = "AM";
                    } else {
                        a_p = "PM";
                    }

                    e.innerHTML = h + ':' + m + ':' + s + " " + a_p;

                    setTimeout('jam()', 1000);
                }

                function set(e) {
                    e = e < 10 ? '0' + e : e;
                    return e;
                }
            </script>


            <script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-app.js"></script>
            <script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-messaging.js"></script>
            <?php if ($this->session->userdata['role'] != 'Korlantas' || $this->session->userdata['role'] != 'Kapolda' || $this->session->userdata['role'] != 'Polres') { ?>
                <script>
                    // Initialize the Firebase app by passing in the messagingSenderId
                    var config = {
                        apiKey: "AIzaSyCD0yzgSLiF7_vOgyKP_m8uaONbDc7woo8",

                        authDomain: "g20k3i.firebaseapp.com",

                        projectId: "g20k3i",

                        storageBucket: "g20k3i.appspot.com",

                        messagingSenderId: "475022830226",

                        appId: "1:475022830226:web:51022ccfb162eac1b0144b"

                    };
                    firebase.initializeApp(config);
                    const messaging = firebase.messaging();

                    // messaging.onBackgroundMessage((payload) => {
                    //     console.log('onBackgroundMessage ', payload);
                    //     // Customize notification here
                    //     // const {title, body} = payload.notification;
                    //     // const notificationTitle = title;
                    //     // const notificationOptions = {
                    //     //     body: body,
                    //     //     icon: '/firebase-logo.png'
                    //     // };
                    //     // self.registration.showNotification(notificationTitle,
                    //     //     notificationOptions);



                    // });


                    navigator.serviceWorker.register('firebase-messaging-sw.js')
                        .then(function(registration) {
                            messaging.useServiceWorker(registration);

                            // Request for permission
                            messaging.requestPermission()
                                .then(function() {
                                    // console.log('Notification permission granted.');
                                    // TODO(developer): Retrieve an Instance ID token for use with FCM.
                                    messaging.getToken()
                                        .then(function(currentToken) {
                                            if (currentToken) {
                                                // console.log('Token: ' + currentToken)
                                                sendTokenToServer(currentToken);
                                            } else {
                                                // console.log('No Instance ID token available. Request permission to generate one.');
                                                setTokenSentToServer(false);
                                            }
                                        })
                                        .catch(function(err) {
                                            // console.log('An error occurred while retrieving token. ', err);
                                            setTokenSentToServer(false);
                                        });
                                })
                                .catch(function(err) {
                                    // console.log('Unable to get permission to notify.', err);
                                });
                        });


                    // Handle incoming messages
                    messaging.onMessage(function(payload) {
                        // console.log("Notification received: ", payload);
                        // toastr["info"](payload.notification.body, payload.notification.title);
                    });

                    // Callback fired if Instance ID token is updated.
                    messaging.onTokenRefresh(function() {
                        messaging.getToken()
                            .then(function(refreshedToken) {
                                // console.log('Token refreshed.');
                                // Indicate that the new Instance ID token has not yet been sent 
                                // to the app server.
                                setTokenSentToServer(false);
                                // Send Instance ID token to app server.
                                sendTokenToServer(refreshedToken);
                            })
                            .catch(function(err) {
                                // console.log('Unable to retrieve refreshed token ', err);
                            });
                    });

                    // Send the Instance ID token your application server, so that it can:
                    // - send messages back to this app
                    // - subscribe/unsubscribe the token from topics
                    function sendTokenToServer(currentToken) {
                        if (!isTokenSentToServer()) {
                            // console.log('Sending token to server...');
                            // TODO(developer): Send the current token to your server.
                            setTokenSentToServer(true);
                        } else {
                            // console.log('Token already sent to server so won\'t send it again ' + 'unless it changes');
                        }
                    }

                    function isTokenSentToServer() {
                        return window.localStorage.getItem('sentToServer') == 1;
                    }

                    function setTokenSentToServer(sent) {
                        window.localStorage.setItem('sentToServer', sent ? 1 : 0);
                    }


                    var countlistNotif;
                    var listNotif = "";

                    function serverSideGetNotif() {
                        $.ajax({
                            type: "POST",
                            url: "<?php echo base_url(); ?>notifikasi/getNotif",
                            data: {
                                "page": null
                            },
                            dataType: "JSON",
                            success: function(result) {
                                let ressData = result['data'];
                                // console.log(ressData);
                                countlistNotif = 0;
                                listNotif = "";
                                let linkWeb = "";

                                $("#overlay").fadeOut(300);
                                if (ressData.length > 0) {
                                    listNotif += `<div data-simplebar style="max-height: 230px;" >`;
                                    ressData.forEach(el => {
                                        if (el.type == "laporan") {
                                            linkWeb = el.web.replace("korlantasg20://laporan/detail/", "https://k3ig20korlantas.id/laporan/operasi/detail/");
                                        } else {
                                            linkWeb = el.web.replace("korlantasg20://laporan/detail/", "https://k3ig20korlantas.id/laporan/panic/detail/");
                                        }
                                        // console.log(linkWeb);
                                        countlistNotif += 1;
                                        listNotif += `
                                    <a href="${linkWeb}" target="_blank" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <img src="<?php echo base_url(); ?>assets/admin/images/users/avatar-3.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">${el.title}</h6>
                                                <div class="font-size-13 text-muted">
                                                    <p class="mb-1">${el.description}</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>${el.created_at}</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                `;
                                        $("#listDataNotif").html(listNotif);
                                    });
                                    listNotif += `</div>`;
                                } else {
                                    listNotif = "Tidak ada notifikasi!";
                                    $('#listDataNotif').html(listNotif);
                                }

                            }
                        });
                    }



                    $(`.openNotif`).click(function() {
                        $("#overlay").fadeIn(300);
                        serverSideGetNotif();
                    });

                    var jumlahNotif = "";
                    // setInterval(function() {
                    //     // console.log('idowae')
                    //     $.ajax({
                    //         type : "POST",
                    //         url : "<?php echo base_url(); ?>notifikasi/getCountNotif", 
                    //         data : {
                    //             "page" : null
                    //         }, 
                    //         dataType : "JSON",
                    //         success : function(res){  
                    //             jumlahNotif = res.total_data;

                    //             $("#totalNotif").html(res.total_data);
                    //         }
                    //     });
                    // }, 10000);
                </script>
            <?php } ?>

            <!-- <script src="<?php echo base_url(); ?>firebase-messaging-sw.js"></script> -->


</body>


</html>