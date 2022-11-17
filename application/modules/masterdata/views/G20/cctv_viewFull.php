<!DOCTYPE html>
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
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/leaflet-routing-machine.css" />
    <link rel="stylesheet" href="https://unpkg.com/@geoman-io/leaflet-geoman-free@latest/dist/leaflet-geoman.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.css" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/clockpicker.css">


    <link rel="stylesheet" href="https://cdn3.devexpress.com/jslib/18.2.6/css/dx.common.css" />
    <link rel="stylesheet" href="https://cdn3.devexpress.com/jslib/18.2.6/css/dx.light.css" />

    <style>
        .animateLine {   
            stroke-dasharray: 10; 
            animation: dash linear infinite;
            animation-duration: 15.5833s; 
        }

        .animateRoute {
            stroke-dasharray: 10;
            stroke-dashoffset: 1920;
            animation: dash linear  infinite;
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

        #incognito + label:before {
            cursor: pointer;
            content: "\f505"; /* Bars */
        }

        #incognito:checked + label:before {
            cursor: pointer;
            /* color: red; */
            content: "\f506";
        }


        .dropzone {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 4px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
        height: 460px;
        margin-bottom: 20px;
        padding: 20px;
        transition: background-color 0.25s ease-in;
        
            &:hover {
                background-color: #fcfcfc;
                border-color: #5bc0de;
            }
            
            .panel {
                border-color: #5bc0de;
                
                &:hover {
                    cursor: default;
                }
            }
            
            .panel-heading {
                border-color: #5bc0de;
                background-color: #5bc0de;
                color: #fff;
            }
            
            .panel-title {
                position: relative;
                
                .fa {
                    display: block;
                    position: absolute;
                    top: 0;
                    right: 0;
                    width: 15px;
                    height: 15px;
                    z-index: 2;
                    color: #fff;
                    
                    &:hover {
                        cursor: pointer;
                    }
                }
            }
        }

        .panel {
            &:hover {
                border-color: #5bc0de;
                cursor: move;
                
                .panel-heading {
                    border-color: #5bc0de;
                    background-color: #5bc0de;
                    color: #fff;
                }
            }
        }

        .over {
        border-style: dashed;
        }

        .selected {
        display: none;
        } 
 

        .cloned {
            opacity: 0.5;
        
            &.selected {
                display: block;
            }
        }


        .panel-title {
        position: relative;
            
            .fa {
                display: none;
            }
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

    

    <script type="module">
        // Import the functions you need from the SDKs you need
        import { initializeApp } from "https://www.gstatic.com/firebasejs/9.9.4/firebase-app.js";
        // TODO: Add SDKs for Firebase products that you want to use
        // https://firebase.google.com/docs/web/setup#available-libraries

        // Your web app's Firebase configuration
        const firebaseConfig = {
            apiKey: "AIzaSyCD0yzgSLiF7_vOgyKP_m8uaONbDc7woo8",
            authDomain: "g20k3i.firebaseapp.com",
            projectId: "g20k3i",
            storageBucket: "g20k3i.appspot.com",
            messagingSenderId: "475022830226",
            appId: "1:475022830226:web:51022ccfb162eac1b0144b"
        };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        console.log(app);
    </script>

    <script>
        var csfrData = {}; 
        csfrData['<?php echo $this->security->get_csrf_token_name(); ?>'] = '<?php echo $this->security->get_csrf_hash(); ?>';
        $.ajaxSetup({
            data: csfrData 
        });  
    </script>

    <?php echo $css ?>
</head>

<body style="background-color: #f5f3f4;">
    <div id="overlay">
        <div class="loading">
            <div class="spinner" style="margin-left: 23px;margin-bottom: 10px;"></div>
            <p style="color: white; font-size: 15px; margin-left: 3px;">Please Wait</p>
        </div>
    </div>
    <!-- <body data-layout="horizontal"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">
 
 
    <div class="vertical-menu" style="background: white; top: 0"> 
        <div data-simplebar class="h-100">
 
                <!-- Left Menu Start -->
                <main>
                <div class="row"  style="margin: 5px;"> 

                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item" id="clickRoad">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button fw-medium" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                                    CCTV MAINROAD &nbsp;<span class="badge bg-danger rounded-pill" id="tlistMainroad"></span>
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body text-muted">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="drag-container" id="listMainroad">  

                                                     
 
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item" id="clickGerbang">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    CCTV GERBANG &nbsp;<span class="badge bg-danger rounded-pill" id="tlistGerbang"></span>
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body text-muted">
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="drag-container" id="listGerbang"> 
                                                
                                            </div>
                                        </div> 
                                    </div>

                                </div>
                            </div>
                        </div> 

                        <div class="accordion-item" id="clickRamp">
                            <h2 class="accordion-header" id="flush-heading3">
                                <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse3" aria-expanded="false" aria-controls="flush-collapse3">
                                    ETHLE RAMP &nbsp;<span class="badge bg-danger rounded-pill" id="tlistRamp"></span>
                                </button>
                            </h2>
                            <div id="flush-collapse3" class="accordion-collapse collapse" aria-labelledby="flush-heading3"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body text-muted">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="drag-container" id="listRamp"> 
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div> 

                        <div class="accordion-item" id="clickEthle">
                            <h2 class="accordion-header" id="flush-heading4">
                                <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                                    CCTV ETLE &nbsp;<span class="badge bg-danger rounded-pill" id="tlistEthle"></span>
                                </button>
                            </h2>
                            <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body text-muted">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="drag-container" id="listEthle"> 
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div> 

                        <div class="accordion-item" id="clickBaliSatu">
                            <h2 class="accordion-header" id="flush-heading5">
                                <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                                    BALI SATU DATA &nbsp;<span class="badge bg-danger rounded-pill" id="tlistBaliSatu"></span>
                                </button>
                            </h2>
                            <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body text-muted">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="drag-container" id="listBaliSatu"> 
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div> 

                        <div class="accordion-item" id="clickCctv">
                            <h2 class="accordion-header" id="flush-heading6">
                                <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6">
                                    CCTV &nbsp;<span class="badge bg-danger rounded-pill" id="tlistCctv"></span>
                                </button>
                            </h2>
                            <div id="flush-collapse6" class="accordion-collapse collapse" aria-labelledby="flush-heading6"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body text-muted">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="drag-container" id="listCctv"> 
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div> 
                        
                    </div>
                </div>
            </main>
        </div> 
    </div>



    <div class="main-content">

        <div class="page-content" style="background-color: #f5f3f4; padding: 0;">
            <div class="container-fluid">

                    <!-- Page -->
                    <!-- <div class="kotak" style="border-style:solid ;"> -->
                    <!-- <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:0px; ">
                        <ol class="breadcrumb shadow-sm">
                            <li class="breadcrumb-item"><a href="<?= base_url()?>masterdata/cctv/">List Data CCTV</a></li>
                            <li class="breadcrumb-item active fw-bold" aria-current="page">Daftar <?= $title; ?></li>
                        </ol>
                    </nav> -->

                    <div class="row align-items-center">
                        <!-- <div class="col-md-6">
                            <div class="mb-3">
                                <button type="button" class="btn btn-primary waves-effect mb-2" data-bs-toggle="modal" data-bs-target="#addModal">Tambah CCTV</button>
                            </div>
                        </div> -->
                        <div class="col-md-8">
                            <div style="display: none;"> 
                                <input hidden type="text" name="halaman" id="halaman" value="1"> 
                                <nav aria-label="Page navigation example" style="padding-top: 11px;">
                                    <ul class="pagination">
                                        <li class="page-item" id="backHalaman"><a class="page-link" href="javascript:void(0);">Kembali</a></li>
                                        <!-- <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li> -->
                                        <li class="page-item" id="nextHalaman"><a class="page-link" href="javascript:void(0);">Selanjutnya</a></li>
                                    </ul>
                                </nav> 
                                <div class="form-floating mb-3" style="margin: 5px; width: 50%;"> 
                                    <select class="form-select" name="kategoriFilter" style="height: 50px;">
                                        <option selected value="">Pilih Kategori CCTV</option>
                                        <option value="CCTV MAINROAD">CCTV MAINROAD</option>
                                        <option value="CCTV GERBANG">CCTV GERBANG</option>
                                        <option value="CCTV RAMP">CCTV RAMP</option>
                                        <option value="CCTV ETHLE">CCTV ETHLE</option>
                                        <option value="BALISATUDATA">BALI SATU DATA</option>
                                        <option value="CCTV">CCTV</option> 
                                    </select>
                                    <label for="kategoriFilter">Filter CCTV</label>
                                </div>
                                <div class="form-floating mb-3" style="margin: 5px; width: 50%;">
                                    <input type="text" class="form-control" name="searchFilter" placeholder="Search" style="height: 50px;">
                                    <label for="searchFilter">Search</label>
                                </div> 
                                
                            </div>
                        </div>

                        <div class="col-md-8">
                            <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:0px; margin-top: 5px; ">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= base_url()?>masterdata/cctv/">List Data CCTV Bali</a></li>
                                    <li class="breadcrumb-item active fw-bold" aria-current="page">Daftar <?= $title; ?></li>
                                </ol>
                            </nav>
                        </div>

                        <div class="col-md-4">
                            <div class="d-flex flex-wrap align-items-center justify-content-end gap-2" style="margin: 5px;">
                                <div>
                                    <ul class="nav nav-pills">
                                        <li class="nav-item">
                                            <a class="nav-link " href="<?php echo base_url()?>masterdata/cctv" data-bs-toggle="tooltip" data-bs-placement="top" title="List"><i class="bx bx-list-ul"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="<?php echo base_url()?>masterdata/cctv/thumbnail" data-bs-toggle="tooltip" data-bs-placement="top" title="Grid"><i class="bx bx-grid-alt"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active" href="<?php echo base_url()?>masterdata/cctv/fullscreen" data-bs-toggle="tooltip" data-bs-placement="top" title="FullScreen"><i class="bx bx bx-fullscreen"></i></a>
                                        </li>
                                    </ul>
                                </div> 
                            </div> 
                        </div>

                         

                    </div>
                    <!-- end row -->  

                    <div class="col-sm-12 col-md-12">
                        <div id="container" class="row taro" >
                            
                        </div>
                    </div>
                    <!-- <div class="row" id="listCCTV"></div> -->

                    

 

                    <!-- FullScreen Modals -->
                    <div class="modal fade " id="fullModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel1" aria-hidden="true">
                        <div class="modal-dialog modal-fullscreen">
                            <div class="modal-content">
                                <div class="modal-header bg-primary" id="judulModal">
                                    
                                </div>
                                <div class="modal-body">
                                    <div id="layarFull"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>



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
    <script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js"></script>
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/leaflet-routing-machine.js"></script>
    <!-- <script src="<?php echo base_url(); ?>assets/admin/js/leaflet-routing-machine.min.js"></script> -->
    <script src="https://unpkg.com/@geoman-io/leaflet-geoman-free@latest/dist/leaflet-geoman.min.js"></script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js'></script>


    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>

    <script src="<?php echo base_url(); ?>assets/admin/js/clockpicker.js"></script>

    <?php echo $js ?>


    <script>

        let countlistCCTV = 0;
        let clickViewCctv = 0;
        var dummyCCTV = [];

        $(document).ready(function() {  
            serverSideGetCCTV();  
        });

        

        const EVENTS = {
        TOUCH_MOVE: "touchmove",
        MOUSE_MOVE: "mousemove",
        MOUSE_UP: "mouseup",
        MOUSE_DOWN: "mousedown",
        TOUCH_END: "touchend",
        TOUCH_START: "touchstart",
        TOUCH_CANCEL: "touchcancel",
        DRAG_START: "dragstart",
        DRAG_END: "dragend"
        };
        const DIRECTIONS = {
        LEFT: "left",
        RIGHT: "right",
        UP: "up",
        DOWN: "down",
        TOP: "top",
        BOTTOM: "bottom",
        AFTEREND: "afterend",
        BEFOREBEGIN: "beforebegin"
        };
        const CLASS_NAMES = {
        guideLine: "__sortable_draggable-guide-line"
        };
        const containerStack = [];

        function detectLeftButton(evt) {
        evt = evt || window.event;
        if ("buttons" in evt) {
            return evt.buttons === 1;
        }
        let button = evt.which || evt.button;
        return button === 1;
        }
        const getParent = (el) =>
        el && el.parentNode === document.body ? null : el && el.parentNode;

        function getImmediateChild(dropTarget, target) {
        let immediate = target;
        // eslint-disable-next-line max-len
        while (
            immediate &&
            immediate !== dropTarget &&
            immediate &&
            getParent(immediate) !== dropTarget
        ) {
            immediate = getParent(immediate);
        }
        if (immediate === document.body) {
            return null;
        }
        if (target === dropTarget) {
            return null;
        }
        return immediate;
        }

        function renderMirrorImage(dragEl, clientX, clientY) {
        if (!dragEl) {
            return;
        }
        let rect = dragEl.getBoundingClientRect();
        const _mirror = dragEl.cloneNode(true);
        _mirror.style.position = "fixed";
        _mirror.classList.add("mirror");
        _mirror.style.opacity = 0.5;
        _mirror.style.width = `${rect.width}px`;
        _mirror.style.height = `${rect.height}px`;
        _mirror.style.top = `${rect.top}px`;
        _mirror.style.left = `${rect.left}px`;
        _mirror.__offsetX = clientX - rect.left;
        _mirror.__offsetY = clientY - rect.top;
        // _mirror.style.transform = `translate(${Math.abs(clientX - rect.left - rect.width/2)}px, -${Math.abs(clientY - rect.top - rect.height / 2)}px)`;
        document.body.appendChild(_mirror);
        return _mirror;
        }

        class Dragoned {
        constructor(container, options = {}) {
            if (typeof container === "string") {
            container = document.querySelector(container);
            }
            if (!container || !container instanceof HTMLElement) {
            return new Error(
                "Dragoned: container must be a string or an HTMLElement"
            );
            }
            this.createGuideLine();
            this.onMouseUp = this.onMouseUp.bind(this);
            this.dragStart = this.dragStart.bind(this);
            this.onMouseMove = this.onMouseMove.bind(this);
            this.dragEnd = this.dragEnd.bind(this);
            this.container = container;
            this.moveY = 0;
            this.moveX = 0;
            this.mouseUp = false;
            this.optionsInit(options);
            containerStack.push(this);
            this.init();
        }
        optionsInit(options) {
            this.options = {
            draggable: options.draggable,
            handle: options.handle,
            delay: typeof options.delay === "number" ? options.delay : 0,
            preventDefault: options.preventDefault,
            direction: options.direction,
            onStart: options.onStart,
            onMove: options.onMove,
            onClone: options.onClone,
            onEnd: options.onEnd,
            body: options.body || document.body,
            clone: options.clone,
            group: options.group,
            sort: options.sort
            };
        }

        createGuideLine() {
            this.guideLine = document.createElement("div");
            this.guideLine.className = CLASS_NAMES.guideLine;
            this.guideLine.style.position = "absolute";
            this.guideLine.style.borderRadius = `.5rem`;
            this.guideLine.style.backgroundColor = "rgb(70, 25, 194)";
        }

        init() {
            this.bindDrag(this.container);
        }
        dragEnd() {
            this.mouseUp = true;
            if (this.mirror) {
            this.mirror.remove();
            this.mirror = null;
            }

            this.dragEl.style.opacity = 1;
            this.guideLine.remove();
            this.guideLine.style.left = `${-9999}px`;
            this.guideLine.style.top = `${-9999}px`;
            document.removeEventListener(EVENTS.MOUSE_MOVE, this.onMouseMove);
            document.removeEventListener(EVENTS.TOUCH_MOVE, this.onMouseMove, {
            passive: false
            });
            document.removeEventListener(EVENTS.MOUSE_UP, this.dragEnd);
            document.removeEventListener(EVENTS.TOUCH_END, this.dragEnd);
            if (this.direction && this.dropEl) {
            const cloneEl =
                this.options.clone === true ? this.dragEl.cloneNode(true) : this.dragEl;
            if (
                this.options.clone === true &&
                typeof this.options.onClone === "function"
            ) {
                this.options.onClone({
                from: this.container,
                oldIndex: this.oldIndex,
                clone: this.cloneEl
                });
            }
            this.dropEl.insertAdjacentElement(this.direction, cloneEl);
            const to = this.dropEl.Sortable__container__;
            const from = this.container;
            this.newIndex = Array.prototype.indexOf.call(to.children, cloneEl);

            delete this.dragEl.Sortable__container__;
            delete this.dragEl.Sortable__container__;

            if (typeof this.options.onEnd === "function") {
                this.options.onEnd({
                item: cloneEl,
                to,
                from,
                newIndex: this.newIndex,
                oldIndex: this.oldIndex,
                direction: this.direction
                });
            }
            }
        }
        onMouseMove(event) {
            event.preventDefault();
            if (event.type === EVENTS.MOUSE_MOVE && !detectLeftButton(event)) {
            this.guideLine.remove();
            document.removeEventListener(EVENTS.MOUSE_MOVE, this.onMouseMove);
            }
            const clientY =
            event.type === EVENTS.TOUCH_MOVE
                ? event.touches[0].clientY
                : event.clientY;
            const clientX =
            event.type === EVENTS.TOUCH_MOVE
                ? event.touches[0].clientX
                : event.clientX;
            const pageY =
            event.type === EVENTS.TOUCH_MOVE ? event.touches[0].pageY : event.pageY;
            if (clientY < this.moveY) {
            this.mouseDirection = DIRECTIONS.TOP;
            } else if (clientY > this.moveY) {
            this.mouseDirection = DIRECTIONS.BOTTOM;
            }
            this.moveY = clientY;
            this.moveX = clientX;
            function getScrollParent(node) {
            if (node == null) {
                return null;
            }

            if (node.scrollHeight > node.clientHeight) {
                return node;
            } else {
                return getScrollParent(node.parentNode);
            }
            }

            const scroller = (_target) => {
            let scrollableEl = getScrollParent(_target) || document.body;
            // console.log(scrollableEl);
            const scrollUp = () => scrollableEl.scroll(0, scrollableEl.scrollTop - 1);
            const scrollBottom = () =>
                scrollableEl.scroll(0, scrollableEl.scrollTop + 1);
            if (
                this.mirror &&
                this.moveY < 100 &&
                this.mouseDirection === DIRECTIONS.TOP
            ) {
                scrollUp();
                setTimeout(() => {
                scroller();
                }, 100);
            } else if (
                this.mirror &&
                window.innerHeight - this.moveY < 100 &&
                this.mouseDirection === DIRECTIONS.BOTTOM
            ) {
                scrollBottom();
                setTimeout(() => {
                scroller();
                }, 100);
            }
            };

            if (this.mirror && this.dragEl) {
            this.mirror.style.left = `${
                clientX - document.body.offsetLeft - this.mirror.__offsetX
            }px`;
            this.mirror.style.top = `${
                clientY - document.body.offsetTop - this.mirror.__offsetY
            }px`;
            this.mirror.style.display = "none";
            }
            const _target = document.elementFromPoint(clientX, clientY);
            scroller(_target);
            // here
            let dropEl;
            let dropInstance;
            for (let index = 0; index < containerStack.length; index++) {
            const current = containerStack[index];
            const immediate = getImmediateChild(current.container, _target);
            if (immediate) {
                dropInstance = current;
                dropEl = immediate;
                dropEl.Sortable__container__ = current.container;
                break;
            }
            }
            if (this.mirror) {
            this.mirror.style.display = "block";
            }
            if (dropEl && dropEl !== this.dragEl) {
            if (dropInstance.options.sort === false) {
                return;
            }
            if (typeof this.options.onMove === "function") {
                this.options.onMove({
                item: this.dragEl,
                to: dropInstance.container,
                from: this.container,
                newIndex: Array.prototype.indexOf.call(
                    dropInstance.container.children,
                    dropEl
                ),
                oldIndex: Array.prototype.indexOf.call(
                    this.container.children,
                    this.dragEl
                )
                });
            }
            this.dragEl.style.opacity = 0.2;
            this.guideLine.style.opacity = 1;
            const rect = dropEl.getBoundingClientRect();
            this.guideLine.style.width = `${rect.width}px`;
            this.guideLine.style.height = "4px";
            // is mouse is on the top of the element
            if (
                rect.bottom > this.moveY &&
                rect.bottom - rect.height / 2 < this.moveY
            ) {
                this.direction = DIRECTIONS.AFTEREND;
                this.dropEl = dropEl;
                this.dragEl = this.dragEl;
                this.guideLine.style.top = `${
                pageY - pageY + window.pageYOffset + rect.top + rect.height
                }px`;
                this.guideLine.style.left = `${rect.left}px`;
            } else if (
                rect.top < this.moveY &&
                rect.top + rect.height / 2 > this.moveY
            ) {
                this.dropEl = dropEl;
                this.direction = DIRECTIONS.BEFOREBEGIN;
                this.guideLine.style.top = `${
                pageY - pageY + window.pageYOffset + rect.top
                }px`;
                this.guideLine.style.left = `${rect.left}px`;
            }
            }
        }
        onMouseUp() {
            this.mouseUp = true;
            clearTimeout(this.pressDelay);
            document.removeEventListener(EVENTS.MOUSE_UP, this.onMouseUp);
        }
        dragStart(event) {
            this.mouseUp = false;
            // clickViewCctv += 1;
            // console.log(event);

            if (event.type === EVENTS.MOUSE_DOWN && !detectLeftButton(event)) {
            return;
            }
            this.can = true;
            // continue if user clicked for 1 second
            const start = () => {
            document.body.appendChild(this.guideLine);
            const clientY =
                event.type === EVENTS.TOUCH_START
                ? event.touches[0].clientY
                : event.clientY;
            const clientX =
                event.type === EVENTS.TOUCH_START
                ? event.touches[0].clientX
                : event.clientX;
            const target = event.target;
            let draggableEl;
            let handleEl;
            if (this.options.draggable) {
                draggableEl = target.closest(this.options.draggable);
                if (!draggableEl) {
                return;
                }
            }
            if (this.options.handle) {
                handleEl = target.closest(this.options.handle);
                if (!handleEl) {
                return;
                }
            }
            const dragEl = getImmediateChild(this.container, target);
            if (!dragEl) {
                return;
            }
            if (!this.mirror) {
                this.mirror = renderMirrorImage(dragEl, clientX, clientY);
            }
            if (typeof this.options.onStart === "function") {
                this.options.onStart({
                from: this.container,
                oldIndex: this.oldIndex,
                item: dragEl
                });
            }
            this.dragEl = dragEl;
            this.dragEl.Sortable__container__ = this.container;
            this.oldIndex = Array.prototype.indexOf.call(
                this.container.children,
                dragEl
            );
            document.addEventListener(EVENTS.MOUSE_MOVE, this.onMouseMove);
            document.addEventListener(EVENTS.TOUCH_MOVE, this.onMouseMove, {
                passive: false
            });
            document.addEventListener(EVENTS.MOUSE_UP, this.dragEnd);
            document.addEventListener(EVENTS.TOUCH_END, this.dragEnd);
            };
            document.addEventListener(EVENTS.MOUSE_UP, this.onMouseUp);
            this.pressDelay = setTimeout(() => {
            if (this.mouseUp === false) {
                start();
            }
            }, this.options.delay);
        }

        bindDrag(container) {
            container.style.userSelect = "none";
            container.addEventListener(EVENTS.MOUSE_DOWN, this.dragStart);
            container.addEventListener(EVENTS.TOUCH_START, this.dragStart);
        }
        destroy() {
            const index = containerStack.findIndex((c) => c === this);
            if (index !== -1) {
            containerStack.splice(index, 1);
            }
            this.container.removeEventListener(EVENTS.MOUSE_DOWN, this.dragStart);
            this.container.removeEventListener(EVENTS.TOUCH_START, this.dragStart);
            if (this.mirror) {
            this.mirror.remove();
            }
            if (this.guideLine) {
            this.guideLine.remove();
            }
        }
        }

        window.addEventListener("DOMContentLoaded", (event) => {
            (function () {
                const container = new Dragoned(document.querySelector("#container"), {
                    // draggable:".item",
                    // handle:".handle",
                    group: "blocks-group",
                    delay: 100,
                    onEnd: (data) => {}
                });
                //=========Initialize start here=========//
                const draggable = new Dragoned(document.querySelector("#listMainroad"), {
                    // draggable:".item",
                    // handle:".handle",
                    sort: false,
                    clone: true,
                    group: "blocks-group",
                    onEnd: (data) => {
                        const { item } = data;
                        const type = item.dataset.type;
                        const vms = item.dataset.vms;
                        const no = item.dataset.no;
                        var filterDummyCCTV = dummyCCTV.filter(function (e) {
                                                return e.vms_cctv == vms;
                                            }); 
                        // console.log(filterDummyCCTV);
                        

                        if(filterDummyCCTV.length > 0){
                            
                            if(filterDummyCCTV[0]['ip_cctv'] == 'https://balisatudata.baliprov.go.id/peta-cctv'){
                                resource = `<button onClick="openFull('${filterDummyCCTV[0]['ip_cctv']}', '${filterDummyCCTV[0]['link_cctv']}', '${filterDummyCCTV[0]['address_cctv']}', '${filterDummyCCTV[0]['type_cctv']}')" style="position: absolute;margin-bottom: 5px;margin-left: 5px;bottom: 0;" class="btn btn-primary" ><i class="fa fa-eye" ></i></button>
                                <button onClick="deleteView(this, '${no}')" style="position: absolute;margin-bottom: 5px;margin-left: 55px;bottom: 0;" class="btn btn-danger" ><i class="fa fa-trash" ></i></button>
                                <iframe id="myIframe"  src="${filterDummyCCTV[0]['link_cctv']}" style="width: 100%; height: 100%;"   ></iframe>`;
                            }else{
                                resource = `<button onClick="openFull('${filterDummyCCTV[0]['ip_cctv']}', '${filterDummyCCTV[0]['link_cctv']}', '${filterDummyCCTV[0]['address_cctv']}', '${filterDummyCCTV[0]['type_cctv']}')" style="position: absolute;margin-bottom: 5px;margin-left: 5px;bottom: 0;" class="btn btn-primary" ><i class="fa fa-eye" ></i></button>
                                <button onClick="deleteView(this, '${no}')" style="position: absolute;margin-bottom: 5px;margin-left: 55px;bottom: 0;" class="btn btn-danger" ><i class="fa fa-trash" ></i></button>
                                <img style="width: 100%; height: 100%;"  src="${filterDummyCCTV[0]['link_cctv']}"/>`;
                            } 
                        }else{
                            resource = ``;
                            console.log('Data tidak ada');
                        }
                        
                        switch (type) { 
                            case "text": 
                                item.innerHTML = `
                                    ${resource}
                                `;
                                $(".taro .drag-item").removeClass("col-md-12");
                                $(".taro .drag-item").addClass('col-md-4');
                                break; 
                            default:
                                break;
                        }
                    }
                });

                const draggableGerbang = new Dragoned(document.querySelector("#listGerbang"), {
                    // draggable:".item",
                    // handle:".handle",
                    sort: false,
                    clone: true,
                    group: "blocks-group",
                    onEnd: (data) => {
                        const { item } = data;
                        const type = item.dataset.type;
                        const vms = item.dataset.vms;
                        const no = item.dataset.no;
                        var filterDummyCCTV = dummyCCTV.filter(function (e) {
                                                return e.vms_cctv == vms;
                                            }); 
                        // console.log(filterDummyCCTV);
                        if(filterDummyCCTV.length > 0){
                            
                            if(filterDummyCCTV[0]['ip_cctv'] == 'https://balisatudata.baliprov.go.id/peta-cctv'){
                                resource = `<button onClick="openFull('${filterDummyCCTV[0]['ip_cctv']}', '${filterDummyCCTV[0]['link_cctv']}', '${filterDummyCCTV[0]['address_cctv']}', '${filterDummyCCTV[0]['type_cctv']}')" style="position: absolute;margin-bottom: 5px;margin-left: 5px;bottom: 0;" class="btn btn-primary" ><i class="fa fa-eye" ></i></button>
                                <button onClick="deleteView(this, '${no}')" style="position: absolute;margin-bottom: 5px;margin-left: 55px;bottom: 0;" class="btn btn-danger" ><i class="fa fa-trash" ></i></button>
                                <iframe id="myIframe"  src="${filterDummyCCTV[0]['link_cctv']}" style="width: 100%; height: 100%;"   ></iframe>`;
                            }else{
                                resource = `<button onClick="openFull('${filterDummyCCTV[0]['ip_cctv']}', '${filterDummyCCTV[0]['link_cctv']}', '${filterDummyCCTV[0]['address_cctv']}', '${filterDummyCCTV[0]['type_cctv']}')" style="position: absolute;margin-bottom: 5px;margin-left: 5px;bottom: 0;" class="btn btn-primary" ><i class="fa fa-eye" ></i></button>
                                <button onClick="deleteView(this, '${no}')" style="position: absolute;margin-bottom: 5px;margin-left: 55px;bottom: 0;" class="btn btn-danger" ><i class="fa fa-trash" ></i></button>
                                <img style="width: 100%; height: 100%;"  src="${filterDummyCCTV[0]['link_cctv']}"/>`;
                            } 
                        }else{
                            resource = ``;
                            console.log('Data tidak ada');
                        }
                        
                        switch (type) { 
                            case "text":
                                item.innerHTML = `
                                    ${resource}
                                `;
                                $(".taro .drag-item").removeClass("col-md-12");
                                $(".taro .drag-item").addClass('col-md-4');
                                break; 
                            default:
                                break;
                        }
                    }
                });

                const draggableRamp = new Dragoned(document.querySelector("#listRamp"), {
                    // draggable:".item",
                    // handle:".handle",
                    sort: false,
                    clone: true,
                    group: "blocks-group",
                    onEnd: (data) => {
                        const { item } = data;
                        const type = item.dataset.type;
                        const vms = item.dataset.vms;
                        const no = item.dataset.no;
                        var filterDummyCCTV = dummyCCTV.filter(function (e) {
                                                return e.vms_cctv == vms;
                                            }); 
                        // console.log(filterDummyCCTV);
                        if(filterDummyCCTV.length > 0){
                            
                            if(filterDummyCCTV[0]['ip_cctv'] == 'https://balisatudata.baliprov.go.id/peta-cctv'){
                                resource = `<button onClick="openFull('${filterDummyCCTV[0]['ip_cctv']}', '${filterDummyCCTV[0]['link_cctv']}', '${filterDummyCCTV[0]['address_cctv']}', '${filterDummyCCTV[0]['type_cctv']}')" style="position: absolute;margin-bottom: 5px;margin-left: 5px;bottom: 0;" class="btn btn-primary" ><i class="fa fa-eye" ></i></button>
                                <button onClick="deleteView(this, '${no}')" style="position: absolute;margin-bottom: 5px;margin-left: 55px;bottom: 0;" class="btn btn-danger" ><i class="fa fa-trash" ></i></button>
                                <iframe id="myIframe"  src="${filterDummyCCTV[0]['link_cctv']}" style="width: 100%; height: 100%;"   ></iframe>`;
                            }else{
                                resource = `<button onClick="openFull('${filterDummyCCTV[0]['ip_cctv']}', '${filterDummyCCTV[0]['link_cctv']}', '${filterDummyCCTV[0]['address_cctv']}', '${filterDummyCCTV[0]['type_cctv']}')" style="position: absolute;margin-bottom: 5px;margin-left: 5px;bottom: 0;" class="btn btn-primary" ><i class="fa fa-eye" ></i></button>
                                <button onClick="deleteView(this, '${no}')" style="position: absolute;margin-bottom: 5px;margin-left: 55px;bottom: 0;" class="btn btn-danger" ><i class="fa fa-trash" ></i></button>
                                <img style="width: 100%; height: 100%;"  src="${filterDummyCCTV[0]['link_cctv']}"/>`;
                            } 
                        }else{
                            resource = ``;
                            console.log('Data tidak ada');
                        }
                        
                        switch (type) { 
                            case "text":
                                item.innerHTML = `
                                    ${resource}
                                `;
                                $(".taro .drag-item").removeClass("col-md-12");
                                $(".taro .drag-item").addClass('col-md-4');
                                break; 
                            default:
                                break;
                        }
                    }
                });

                const draggableEthle = new Dragoned(document.querySelector("#listEthle"), {
                    // draggable:".item",
                    // handle:".handle",
                    sort: false,
                    clone: true,
                    group: "blocks-group",
                    onEnd: (data) => {
                        const { item } = data;
                        const type = item.dataset.type;
                        const vms = item.dataset.vms;
                        const no = item.dataset.no;
                        var filterDummyCCTV = dummyCCTV.filter(function (e) {
                                                return e.vms_cctv == vms;
                                            }); 
                        // console.log(filterDummyCCTV);
                        if(filterDummyCCTV.length > 0){
                            
                            if(filterDummyCCTV[0]['ip_cctv'] == 'https://balisatudata.baliprov.go.id/peta-cctv'){
                                resource = `<button onClick="openFull('${filterDummyCCTV[0]['ip_cctv']}', '${filterDummyCCTV[0]['link_cctv']}', '${filterDummyCCTV[0]['address_cctv']}', '${filterDummyCCTV[0]['type_cctv']}')" style="position: absolute;margin-bottom: 5px;margin-left: 5px;bottom: 0;" class="btn btn-primary" ><i class="fa fa-eye" ></i></button>
                                <button onClick="deleteView(this, '${no}')" style="position: absolute;margin-bottom: 5px;margin-left: 55px;bottom: 0;" class="btn btn-danger" ><i class="fa fa-trash" ></i></button>
                                <iframe id="myIframe"  src="${filterDummyCCTV[0]['link_cctv']}" style="width: 100%; height: 100%;"   ></iframe>`;
                            }else{
                                resource = `<button onClick="openFull('${filterDummyCCTV[0]['ip_cctv']}', '${filterDummyCCTV[0]['link_cctv']}', '${filterDummyCCTV[0]['address_cctv']}', '${filterDummyCCTV[0]['type_cctv']}')" style="position: absolute;margin-bottom: 5px;margin-left: 5px;bottom: 0;" class="btn btn-primary" ><i class="fa fa-eye" ></i></button>
                                <button onClick="deleteView(this, '${no}')" style="position: absolute;margin-bottom: 5px;margin-left: 55px;bottom: 0;" class="btn btn-danger" ><i class="fa fa-trash" ></i></button>
                                <img style="width: 100%; height: 100%;"  src="${filterDummyCCTV[0]['link_cctv']}"/>`;
                            } 
                        }else{
                            resource = ``;
                            console.log('Data tidak ada');
                        }
                        
                        switch (type) { 
                            case "text":
                                item.innerHTML = `
                                    ${resource}
                                `;
                                $(".taro .drag-item").removeClass("col-md-12");
                                $(".taro .drag-item").addClass('col-md-4');
                                break; 
                            default:
                                break;
                        }
                    }
                });

                const draggableBaliSatu = new Dragoned(document.querySelector("#listBaliSatu"), {
                    // draggable:".item",
                    // handle:".handle",
                    sort: false,
                    clone: true,
                    group: "blocks-group",
                    onEnd: (data) => {
                        const { item } = data;
                        const type = item.dataset.type;
                        const vms = item.dataset.vms;
                        const no = item.dataset.no;
                        var filterDummyCCTV = dummyCCTV.filter(function (e) {
                                                return e.vms_cctv == vms;
                                            }); 
                        // console.log(filterDummyCCTV);
                        if(filterDummyCCTV.length > 0){
                            
                            if(filterDummyCCTV[0]['ip_cctv'] == 'https://balisatudata.baliprov.go.id/peta-cctv'){
                                resource = `<button onClick="openFull('${filterDummyCCTV[0]['ip_cctv']}', '${filterDummyCCTV[0]['link_cctv']}', '${filterDummyCCTV[0]['address_cctv']}', '${filterDummyCCTV[0]['type_cctv']}')" style="position: absolute;margin-bottom: 5px;margin-left: 5px;bottom: 0;" class="btn btn-primary" ><i class="fa fa-eye" ></i></button>
                                <button onClick="deleteView(this, '${no}')" style="position: absolute;margin-bottom: 5px;margin-left: 55px;bottom: 0;" class="btn btn-danger" ><i class="fa fa-trash" ></i></button>
                                <iframe id="myIframe"  src="${filterDummyCCTV[0]['link_cctv']}" style="width: 100%; height: 100%;"   ></iframe>`;
                            }else{
                                resource = `<button onClick="openFull('${filterDummyCCTV[0]['ip_cctv']}', '${filterDummyCCTV[0]['link_cctv']}', '${filterDummyCCTV[0]['address_cctv']}', '${filterDummyCCTV[0]['type_cctv']}')" style="position: absolute;margin-bottom: 5px;margin-left: 5px;bottom: 0;" class="btn btn-primary" ><i class="fa fa-eye" ></i></button>
                                <button onClick="deleteView(this, '${no}')" style="position: absolute;margin-bottom: 5px;margin-left: 55px;bottom: 0;" class="btn btn-danger" ><i class="fa fa-trash" ></i></button>
                                <img style="width: 100%; height: 100%;"  src="${filterDummyCCTV[0]['link_cctv']}"/>`;
                            } 
                        }else{
                            resource = ``;
                            console.log('Data tidak ada');
                        }
                        
                        switch (type) { 
                            case "text":
                                item.innerHTML = `
                                    ${resource}
                                `;
                                $(".taro .drag-item").removeClass("col-md-12");
                                $(".taro .drag-item").addClass('col-md-4');
                                break; 
                            default:
                                break;
                        }
                    }
                });

                const draggableCctv = new Dragoned(document.querySelector("#listCctv"), {
                    // draggable:".item",
                    // handle:".handle",
                    sort: false,
                    clone: true,
                    group: "blocks-group",
                    onEnd: (data) => {
                        const { item } = data;
                        const type = item.dataset.type;
                        const vms = item.dataset.vms;
                        const no = item.dataset.no;
                        var filterDummyCCTV = dummyCCTV.filter(function (e) {
                                                return e.vms_cctv == vms;
                                            }); 
                        // console.log(filterDummyCCTV);
                        if(filterDummyCCTV.length > 0){
                            
                            if(filterDummyCCTV[0]['ip_cctv'] == 'https://balisatudata.baliprov.go.id/peta-cctv'){
                                resource = `<button onClick="openFull('${filterDummyCCTV[0]['ip_cctv']}', '${filterDummyCCTV[0]['link_cctv']}', '${filterDummyCCTV[0]['address_cctv']}', '${filterDummyCCTV[0]['type_cctv']}')" style="position: absolute;margin-bottom: 5px;margin-left: 5px;bottom: 0;" class="btn btn-primary" ><i class="fa fa-eye" ></i></button>
                                <button onClick="deleteView(this, '${no}')" style="position: absolute;margin-bottom: 5px;margin-left: 55px;bottom: 0;" class="btn btn-danger" ><i class="fa fa-trash" ></i></button>
                                <iframe id="myIframe"  src="${filterDummyCCTV[0]['link_cctv']}" style="width: 100%; height: 100%;"   ></iframe>`;
                            }else{
                                resource = `<button onClick="openFull('${filterDummyCCTV[0]['ip_cctv']}', '${filterDummyCCTV[0]['link_cctv']}', '${filterDummyCCTV[0]['address_cctv']}', '${filterDummyCCTV[0]['type_cctv']}')" style="position: absolute;margin-bottom: 5px;margin-left: 5px;bottom: 0;" class="btn btn-primary" ><i class="fa fa-eye" ></i></button>
                                <button onClick="deleteView(this, '${no}')" style="position: absolute;margin-bottom: 5px;margin-left: 55px;bottom: 0;" class="btn btn-danger" ><i class="fa fa-trash" ></i></button>
                                <img style="width: 100%; height: 100%;"  src="${filterDummyCCTV[0]['link_cctv']}"/>`;
                            } 
                        }else{
                            resource = ``;
                            console.log('Data tidak ada');
                        }
                        
                        switch (type) { 
                            case "text":
                                item.innerHTML = `
                                    ${resource}
                                `;
                                $(".taro .drag-item").removeClass("col-md-12");
                                $(".taro .drag-item").addClass('col-md-4');
                                break; 
                            default:
                                break;
                        }
                    }
                });


                
            })();
        });



        function serverSideGetCCTV(){
            $("#overlay").fadeIn(300); 
            $.ajax({
                type : "POST",
                url : "<?php echo base_url();?>masterdata/cctv/getCCTVFullScreen", 
                data : {
                    "kategoriFilter" : null,
                    "searchFilter": null,
                    "page": null,
                }, 
                dataType : "JSON",
                success : function(result){   
                    let ressData = result['data'];
                        
                    let ress = ressData.filter(function (e) {
                        return e.lat_cctv != null && e.lng_cctv != null;
                    });   

                    dummyCCTV = ress;
                    // console.log(result);

                    $("#overlay").fadeOut(300);
                    if(ress.length > 0){   
                        
                        // countlistCCTV = 0;
                        listSideCCTV = ""; 
                        
                        var ressMainRoad = ress.filter(function (e) {
                            return e.type_cctv == "CCTV MAINROAD";
                        }); 
                        var openMainRoad = false;
                        var countRoad;

                        var ressMainGerbang = ress.filter(function (e) {
                            return e.type_cctv == "CCTV GERBANG";
                        }); 
                        var openGerbang = false;
                        var countGerbang;

                        var ressMainRamp = ress.filter(function (e) {
                            return e.type_cctv == "CCTV RAMP";
                        }); 
                        var openRamp = false;
                        var countRamp;

                        var ressMainEthle = ress.filter(function (e) {
                            return e.type_cctv == "CCTV ETHLE";
                        }); 
                        var openEthle = false;
                        var countEthle;

                        var ressMainBali = ress.filter(function (e) {
                            return e.type_cctv == "BALISATUDATA";
                        }); 
                        var openBali = false;
                        var countBali;

                        var ressMainCctv = ress.filter(function (e) {
                            return e.type_cctv == "CCTV";
                        }); 
                        var openCctv = false;
                        var countCctv;

                        // console.log(ressMainRoad);
                        
                        if(ressMainRoad.length > 0){ 
                            if(openMainRoad == false){
                                // $("#clickRoad").on("click", function (e) { 
                                    listSideCCTV = '';
                                    $("#tlistMainroad").html(`${ressMainRoad.length}`);
                                    ressMainRoad.forEach(el => {
                                        countlistCCTV += 1; 

                                        listSideCCTV += `   
                                            <div data-type="text" data-vms="${el.vms_cctv}" data-no="${countlistCCTV}" class="drag-item" style="padding: calc(var(--bs-gutter-x) * 0.1);">
                                                <h5 class="panel-title" style="font-size: 14px;">${countlistCCTV}. ${el.type_cctv} - ${el.address_cctv}</h5>
                                            </div>  
                                        `;
                                        $("#listMainroad").html(listSideCCTV);  
                                    });  
                                    openMainRoad = true;  
                                // }); 
                            }

                            var listSideContainer = '';
                            for (let i = 0; i < 12; i++){  
                                if(ress[i]['ip_cctv'] == 'https://balisatudata.baliprov.go.id/peta-cctv'){
                                    resource = `
                                    <button onClick="openFull('${ress[i]['ip_cctv']}', '${ress[i]['link_cctv']}', '${ress[i]['address_cctv']}', '${ress[i]['type_cctv']}')" style="position: absolute;margin-bottom: 5px;margin-left: 5px;bottom: 0;" class="btn btn-primary" ><i class="fa fa-eye" ></i></button>
                                    <button onClick="deleteView(this, '${i+1}')" style="position: absolute;margin-bottom: 5px;margin-left: 55px;bottom: 0;" class="btn btn-danger" ><i class="fa fa-trash" ></i></button>
                                    <iframe id="myIframe" src="${ress[i]['link_cctv']}" style="width: 100%; height: 100%;"></iframe>`;
                                }else{
                                    resource = `
                                    <button onClick="openFull('${ress[i]['ip_cctv']}', '${ress[i]['link_cctv']}', '${ress[i]['address_cctv']}', '${ress[i]['type_cctv']}')" style="position: absolute;margin-bottom: 5px;margin-left: 5px;bottom: 0;" class="btn btn-primary" ><i class="fa fa-eye" ></i></button>
                                    <button onClick="deleteView(this, '${i+1}')" style="position: absolute;margin-bottom: 5px;margin-left: 55px;bottom: 0;" class="btn btn-danger" ><i class="fa fa-trash" ></i></button>
                                    <img style="width: 100%; height: 100%;" src="${ress[i]['link_cctv']}" />`;
                                } 
                                listSideContainer += `
                                    <div data-type="text" class="block col-md-4" style="padding: calc(var(--bs-gutter-x) * 0.1);">
                                        ${resource}
                                    </div>
                                `;
                                $("#container").html(listSideContainer);
                            }
                        }else{
                            $("#tlistMainroad").html(``);
                        }



                        
                        if(ressMainGerbang.length > 0){
                            if(openGerbang == false){
                                // $("#clickGerbang").on("click", function (e) { 
                                    listSideCCTV = '';
                                    $("#tlistGerbang").html(`${ressMainGerbang.length}`);
                                    ressMainGerbang.forEach(el => { 
                                        countlistCCTV += 1; 

                                        listSideCCTV += `    
                                            <div data-type="text" data-vms="${el.vms_cctv}"  data-no="${countlistCCTV}" class="drag-item" style="padding: calc(var(--bs-gutter-x) * 0.1);">
                                                <h5 class="panel-title" style="font-size: 14px;">${countlistCCTV}. ${el.type_cctv} - ${el.address_cctv}</h5>
                                            </div>    
                                        `;
                                        $("#listGerbang").html(listSideCCTV); 
                                    });  

                                        
                                    openGerbang = true;     
                                // });  
                            }
                        }else{
                            $("#tlistGerbang").html(``);
                        }
                        
                        if(ressMainRamp.length > 0){
                            if(openRamp == false){
                                // $("#clickRamp").on("click", function (e) { 
                                    listSideCCTV = '';
                                    $("#tlistRamp").html(`${ressMainRamp.length}`);
                                    ressMainRamp.forEach(el => {
                                        countlistCCTV += 1; 

                                        listSideCCTV += `    
                                            <div data-type="text" data-vms="${el.vms_cctv}"  data-no="${countlistCCTV}" class="drag-item" style="padding: calc(var(--bs-gutter-x) * 0.1);">
                                                <h5 class="panel-title" style="font-size: 14px;">${countlistCCTV}. ${el.type_cctv} - ${el.address_cctv}</h5>
                                            </div>  
                                        `;
                                        $("#listRamp").html(listSideCCTV); 
                                    });   
                                // });
                                openRamp = true;
                            }
                        }else{
                            $("#tlistRamp").html(``);
                        }

                        if(ressMainEthle.length > 0){
                            if(openEthle == false){
                                // $("#clickEthle").on("click", function (e) { 
                                    listSideCCTV = '';
                                    $("#tlistEthle").html(`${ressMainEthle.length}`);
                                    ressMainEthle.forEach(el => {
                                        countlistCCTV += 1; 

                                        listSideCCTV += `    
                                            <div data-type="text" data-vms="${el.vms_cctv}"  data-no="${countlistCCTV}" class="drag-item" style="padding: calc(var(--bs-gutter-x) * 0.1);">
                                                <h5 class="panel-title" style="font-size: 14px;">${countlistCCTV}. ${el.type_cctv} - ${el.address_cctv}</h5>
                                            </div>  
                                        `;
                                        $("#listEthle").html(listSideCCTV); 
                                    });   
                                // });
                                openEthle = true;
                            }
                        }else{
                            $("#tlistEthle").html(`0`);
                        }

                        if(ressMainBali.length > 0){
                            if(openBali == false){
                                // $("#clickBaliSatu").on("click", function (e) { 
                                    listSideCCTV = '';
                                    $("#tlistBaliSatu").html(`${ressMainBali.length}`);
                                    ressMainBali.forEach(el => {
                                        countlistCCTV += 1; 

                                        listSideCCTV += `    
                                            <div data-type="text" data-vms="${el.vms_cctv}"  data-no="${countlistCCTV}" class="drag-item" style="padding: calc(var(--bs-gutter-x) * 0.1);">
                                                <h5 class="panel-title" style="font-size: 14px;">${countlistCCTV}. ${el.type_cctv} - ${el.address_cctv}</h5>
                                            </div>  
                                        `;
                                        $("#listBaliSatu").html(listSideCCTV); 
                                    });   
                                // });
                                openBali = true;
                            }
                        }else{
                            $("#tlistBaliSatu").html(`0`);
                        }

                        if(ressMainCctv.length > 0){
                            if(openCctv == false){
                                // $("#clickCctv").on("click", function (e) { 
                                    listSideCCTV = '';
                                    $("#tlistCctv").html(`${ressMainCctv.length}`);
                                    ressMainCctv.forEach(el => {
                                        countlistCCTV += 1; 

                                        listSideCCTV += `    
                                            <div data-type="text" data-vms="${el.vms_cctv}"  data-no="${countlistCCTV}" class="drag-item" style="padding: calc(var(--bs-gutter-x) * 0.1);">
                                                <h5 class="panel-title" style="font-size: 14px;">${countlistCCTV}. ${el.type_cctv} - ${el.address_cctv}</h5>
                                            </div>  
                                        `;
                                        $("#listCctv").html(listSideCCTV); 
                                    });     
                                // });
                                openCctv = true;
                            }
                        }else{
                            $("#tlistCctv").html(`0`);
                        }

                         
                        $(".drag-container .drag-item").addClass('col-md-12');
                        
                        // for (let i = 0; i < ress.length; i++){   
                        //     // console.log(`urutan ke ${i+1}`);

                        //     $(`#${ress[i]['id']}`).on("click", function (event) { 
                        //         var myIp = $(this).data('ip'); 
                        //         var myLink = $(this).data('resource'); 
                        //         var myType = $(this).data('type'); 
                        //         var myAlamat = $(this).data('alamat');

                        //         if(myIp == 'https://balisatudata.baliprov.go.id/peta-cctv'){
                        //             resource = `<iframe id="myIframe" src="${myLink}" style="width: 100%; height: 100%;"></iframe>`;
                        //         }else{
                        //             resource = `<img style="width: 100%;" src="${myLink}" />`;
                        //         }
                        //         // console.log(myLink);
                        //         $("#fullModal").modal('show');
                        //         $("#layarFull").html(`${resource}`);
                        //         $("#judulModal").html(`
                        //             <h5 class="modal-title" id="myLargeModalLabel1" style="color:white">${myType} - ${myAlamat}</h5>
                        //             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        //         `);
                                
                        //     });
                        // }
                        
                        // $('#fullModal').on('shown.bs.modal', function(event) {
                            
                        //     // alert('oke');
                        //     // $("#fullModal").modal('hide');
                        // });
                        
                    }else{
                        listCCTV = "";
                        $('#listCCTV').html(listCCTV); 
                    }
                }
            });
        } 

        function openFull(myIp, myLink, myType, myAlamat){ 

            if(myIp == 'https://balisatudata.baliprov.go.id/peta-cctv'){
                resource = `<iframe id="myIframe" src="${myLink}" style="width: 100%; height: 100%;"></iframe>`;
            }else{
                resource = `<img style="width: 100%;" src="${myLink}" />`;
            }
            // console.log(myLink);
            $("#fullModal").modal('show');
            $("#layarFull").html(`${resource}`);
            $("#judulModal").html(`
                <h5 class="modal-title" id="myLargeModalLabel1" style="color:white">${myType} - ${myAlamat}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            `);
        }

        function deleteView(ev, nomor){
            // alert(nomor);
            var clones = ev.parentNode;
            clones.parentNode.removeChild(clones); 
        }
        

    </script>

  
</body>



</html>