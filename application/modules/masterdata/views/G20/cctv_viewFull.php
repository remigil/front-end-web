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




#thumbs {
    text-align: center;
    margin-bottom: 2em;
    background: #ccc;
    padding: 0.5em;
}
#thumbs img {
    width: 150px;
    height: 140px;
    margin: 0 1em;
    cursor: move;
}
#layout-area table {
    width: 100%;
    border-spacing: 2%;
    table-layout: fixed;
}
#target, #target2 {
    display: none;
}
#target td {
    width: 30%;
    height: 140px;
    vertical-align: top;
}
textarea.caption {
    display: block;
    width: 95%;
    margin: 10px auto;
    height: 50px;
    border: none;
    background: #eee;
}
#layout-area .sized {
    display: block;
    max-width: 100%;
    max-height: 100%;
}
#layout-area .img-container {
    width: 100%;
    height: 150px;
    background: #eee;
    overflow: hidden;
    position: relative;
}
#layout-area .img-inserted {
    background: #fff;
}
img.ui-draggable {
    z-index: 100000;
}
#layout-area .remove {
    width: 26px;
    height: 26px;
    cursor: pointer;
    background: #000;
    color: #fff;
    text-align: center;
    line-height: 26px;
    font-size: 20px;
    position: absolute;
    top: 0;
    right: 0;
    display: none;
}
#target td.header {
    width: 100%;
}
#target td.header input, #target2 td.text input {
    width: 100%;
    margin-bottom: 0.5em;
    display: block;
    padding: 0.3em;
    border: none;
    text-align: center;
    background: #eee;
}
#choose-layout {
    width: 480px;
    margin: 2em auto;
    overflow: hidden;
}
#choose-layout div {
    width: 230px;
    text-align: center;
}
#choose-layout .layout {
    height: 180px;
    line-height: 180px;
    background: #eee;
}
#layout-1 {
    float: left;
}
#layout-2 {
    float: right;
}
#choose-layout img {
    display: block;
    max-width: 100%;
}
#target2 td {
    vertical-align: top;
}
#target2 td.logo {
    width: 50%;
}
#target2 td.text {
    width: 50%;
}
#target2 td[colspan] {
    width: 100%;
}
#target2 td[colspan] input {
    width: 100%;
    margin-bottom: 0.5em;
    display: block;
    padding: 0.3em;
    border: none;
    background: #eee;
    text-align: center;
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
                                            <div class="list-group" id="listMainroad"> 
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
                                            <div class="list-group" id="listGerbang"> 
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
                                            <div class="list-group" id="listRamp"> 
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
                                    CCTV ETHLE &nbsp;<span class="badge bg-danger rounded-pill" id="tlistEthle"></span>
                                </button>
                            </h2>
                            <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body text-muted">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="list-group" id="listEthle"> 
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
                                            <div class="list-group" id="listBaliSatu"> 
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
                                            <div class="list-group" id="listCctv"> 
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
   
            <div id="thumbs">
                <img src="https://lh4.googleusercontent.com/-MP6drmKHpmc/T1Mrj1mAsDI/AAAAAAAAA3o/nqv3fXcyOCw/w387-h310/mac.jpg" class="thumb" />
                <img src="https://lh4.googleusercontent.com/-MP6drmKHpmc/T1Mrj1mAsDI/AAAAAAAAA3o/nqv3fXcyOCw/w387-h310/mac.jpg" class="thumb" />
                <img src="https://lh4.googleusercontent.com/-MP6drmKHpmc/T1Mrj1mAsDI/AAAAAAAAA3o/nqv3fXcyOCw/w387-h310/mac.jpg" class="thumb" />
            </div>
            <div id="layout-area">
                <div id="choose-layout">
                    <h3>Choose a layout</h3>
                    <div id="layout-1">
                        <div class="layout">1</div>
                        <p>
                            <input type="radio" value="target2" id="l1" />
                        </p>
                    </div>
                    <div id="layout-2">
                        <div class="layout">2</div>
                        <p>
                            <input type="radio" value="target" id="l2" />
                        </p>
                    </div>
                </div>
                <table id="target2">
                    <tr>
                        <td class="logo">
                            <div class="img-container"></div>
                        </td>
                        <td class="text">
                            <input type="text" id="title" value="Title" />
                            <input type="text" id="sub-title" value="Subtitle" />
                            <input type="text" id="evident" value="Title" />
                        </td>
                    </tr>
                    <tr>
                        <td class="half">
                            <div class="img-container"></div>
                            <textarea class="caption"></textarea>
                        </td>
                        <td class="half">
                            <div class="img-container"></div>
                            <textarea class="caption"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="data">
                            <input type="text" id="dati" value="Data" />
                        </td>
                    </tr>
                </table>
                <table id="target">
                    <tr>
                        <td class="header" colspan="3">
                            <input type="text" id="name" value="Details" />
                            <input type="text" id="data" value="Details" />
                            <input type="text" id="speciality" value="Details" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="img-container"></div>
                            <textarea class="caption"></textarea>
                        </td>
                        <td>
                            <div class="img-container"></div>
                            <textarea class="caption"></textarea>
                        </td>
                        <td>
                            <div class="img-container"></div>
                            <textarea class="caption"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="img-container"></div>
                            <textarea class="caption"></textarea>
                        </td>
                        <td>
                            <div class="img-container"></div>
                            <textarea class="caption"></textarea>
                        </td>
                        <td>
                            <div class="img-container"></div>
                            <textarea class="caption"></textarea>
                        </td>
                    </tr>
                </table>
            </div>
            <p>
                <button id="html">HTML</button>
            </p>
            <div id="output"></div>


            <script>
                var LayoutHandler = {
    fn: {
        start: function () {
            $('div.img-container').each(function () {
                var div = $(this);
                $('<span class="remove"/>').text('X').appendTo(div);
            });


            $('img.thumb').draggable({
                containment: '#layout-area',
                revert: 'invalid',
                helper: 'clone'
            });

            $('div.img-container').droppable({
                accept: 'img.thumb',
                drop: function (event, ui) {
                    var div = $(this);
                    var img = ui.draggable;
                    var copy = img.clone();
                    $(copy).addClass('sized').appendTo(div);
                    div.addClass('img-inserted');
                    $('span.remove', div).show();
                }

            });


        },

        remove: function () {
            $('span.remove').on('click', function () {
                var span = $(this);
                span.parent().find('img').remove();
                span.parent().removeClass('img-inserted');
                span.hide();
            });

        },

        oninput: function () {
            $('input[type="text"]', '#layout-area').focus(function () {
                $(this).val('');
            });
        },

        chooseLayout: function () {
            $('input[type="radio"]', '#choose-layout').change(function () {
                var $input = $(this);
                if ($input.prop('checked')) {
                    var target = $('#' + $input.val());
                    target.show().siblings('table').hide();
                    $input.parents('#choose-layout').find('input').not($input).removeAttr('checked');
                    $('#choose-layout').hide();
                }
            });

        },

        toHTML: function () {
            $('#html').click(function () {
                var html = '<table style="table-layout: fixed; width: 100%; border-spacing: 3%; border-collapse: separate;">';
                if ($('#target').is(':visible')) {
                    $('tr', '#target').each(function () {
                        var tr = $(this);
                        html += '<tr>';
                        $('td', tr).each(function () {
                            var td = $(this);
                            if (!td.is('td.header')) {
                                var img = $('img', td);
                                var text = $('textarea', td).val();
                                html += '<td style="width: 33%;">';
                                html += (img.length) ? '<img src="' + img.attr('src') + '" style="display: block; max-width: 100%;" />' : '<div style="width: 100%;"></div>';
                                html += '<p style="text-align: center;">' + text + '</p>';
                                html += '</td>';
                            } else {
                                var name = $('#name', td).val();
                                var data = $('#data', td).val();
                                var speciality = $('#speciality', td).val();
                                html += '<td colspan="3" style="width: 100%;">';
                                html += '<h1 style="text-align: center;">' + name + '</h1>';
                                html += '<p style="text-align: center;"><strong>' + data + '</strong></p>';
                                html += '<p style="text-align: center;"><strong>' + speciality + '</strong></p>';
                                html += '</td>';
                            }
                        });
                        html += '</tr>';
                    });
                }
                if ($('#target2').is(':visible')) {
                    $('tr', '#target2').each(function () {
                        var $tr = $(this);
                        html += '<tr>';
                        $('td', $tr).each(function () {
                            var $td = $(this);
                            if ($td.is('td.logo')) {
                                var $img = $('img', $td);
                                html += '<td style="width: 50%;">';
                                html += ($img.length) ? '<img src="' + $img.attr('src') + '" style="display: block; margin: 0 auto; max-width: 100%;" />' : '<div style="width: 100%;"></div>';
                                html += '</td>';
                            }
                            if ($td.is('td.text')) {
                                var title = $('#title', $td).val();
                                var subtitle = $('#sub-title', $td).val();
                                var evident = $('#evident', $td).val();

                                html += '<td style="width: 50%; text-align: center;">';
                                html += '<h1>' + title + '</h1>';
                                html += '<p><strong>' + subtitle + '</strong></p>';
                                html += '<p><strong>' + evident + '</strong></p>';
                                html += '</td>';
                            }
                            if ($td.is('td.half')) {
                                var img = $('img', $td);
                                var text = $('textarea', $td).val();
                                html += '<td style="width: 50%;">';
                                html += (img.length) ? '<img src="' + img.attr('src') + '" style="display: block; max-width: 100%;" />' : '<div style="width: 100%;"></div>';
                                html += '<p style="text-align: center;">' + text + '</p>';
                                html += '</td>';

                            }

                            if ($td.is('td.data')) {
                                var $text = $('#dati').val();
                                html += '<td colspan="2" style="width: 100%; text-align: center;">';
                                html += '<p><strong>' + $text + '</strong></p>';
                                html += '</td>';
                            }

                        });
                        html += '</tr>';
                    });

                }
                html += '</table>';
                $('#output').html(html);
                $('html, body').animate({
                    scrollTop: $('#output').offset().top
                }, 400);
            });

        }
    },

    init: function () {
        for (var method in this.fn) {
            this.fn[method]();
        }

    }
};

$(function () {
    LayoutHandler.init();
});
            </script>

            </div>
        </div>
                    
               


 

    </div>
    <!-- END layout-wrapper -->
 

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
