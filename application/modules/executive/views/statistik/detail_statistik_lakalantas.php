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

    <script src="<?php echo base_url(); ?>assets/admin/libs/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>




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
    <div class="filter mt-5" style=" height:125px;">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12">
                    <label for="waktu" class="form-label">Waktu</label>
                    <div class="row">
                        <div class="col-md-4">
                            <input class="form-control" type="date" name="start_date" id="start_date">
                        </div>
                        <div class="col-md-4">
                            <input class="form-control" type="date" name="end_date" id="end_date">
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-primary float-end" style="width: 100%;" onclick="ButtonFilter()">Tampilkan</button>
                        </div>
                        <div class="col-md-2 text-end align-self-center">
                            <!-- <button type="button" class="btn btn-outline-primary float-end" id="btn_export" style="width: 100%;" onclick="ButtonExport()" style="width: 200px; border-color:#007DD8;">Tampilkan</button> -->
                            <!-- <a href="http://34.143.227.90:3001/v1/laporan_harian/export_laphar" class="text-center" id="btn_export"><button class="btn btn-outline-primary" style="width: 200px; border-color:#007DD8;">Export Laporan</button></a> -->
                            <a href="http://34.143.227.90:3001/v1/laporan_harian/export_laphar" type="button" button class="btn btn-outline-primary" style="width: 200px; border-color:#007DD8;">Export Laporan</a>

                            <!-- <a href="http://34.143.227.90:3001/v1/laporan_harian/export_laphar" class="text-center"><button class="btn btn-outline-primary" style="width: 200px; border-color:#007DD8;">Export Laporan</button></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5">
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="container-fluid">
                    <section class="shadow-sm mt-5">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div id="title"></div>
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
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url(); ?>assets/admin/libs/sweetalert2/sweetalert2.min.js"></script>

    <script>
        $(document).ready(function() {
            let filter = 0
            $("#overlay").fadeIn(300);
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>executive/statistik_executive/getDetailStatistikLakalantas",
                data: {
                    filter: filter,
                },
                dataType: "JSON",
                success: function(result) {
                    $("#overlay").fadeOut(300);
                    $('#title').html(`<h4 class="card-title mb-0 text-uppercase">${result.title}</h1>`);
                    $("#charta").html(`<div id="chart" style="width: 500vw"></div>`);

                    let polda_name = result.data.polda_name
                    let polda_jumlah = result.data.polda_jumlah
                    let polda_luka_berat = result.data.polda_luka_berat
                    let polda_luka_ringan = result.data.polda_luka_ringan
                    let polda_meninggal_dunia = result.data.polda_meninggal_dunia
                    // Chart Kecelakaan Lalu Lintas


                    // chart laka
                    var chart = {
                        series: [{
                            name: 'Total Laka',
                            type: 'column',
                            data: polda_jumlah,
                            color: "#11347A"
                        }, {
                            name: 'Meninggal Dunia',
                            type: 'column',
                            data: polda_meninggal_dunia,
                            color: "#11347A"
                        }, {
                            name: 'Luka Berat',
                            type: 'column',
                            data: polda_luka_berat,
                            color: "#CB2D3E"
                        }, {
                            name: 'Luka Ringan',
                            type: 'column',
                            data: polda_luka_ringan,
                            color: "#E8D42F"

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
                            categories: polda_name,
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

                        tooltip: {}
                    };


                    var chart = new ApexCharts(document.querySelector("#chart"), chart);
                    chart.render();

                }
            })
        })

        function ButtonFilter() {
            let filter = 1;
            let start_date = $('#start_date').val()
            let end_date = $('#end_date').val()
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
                    url: "<?php echo base_url(); ?>executive/statistik_executive/getDetailStatistikLakalantas",
                    data: {
                        filter: filter,
                        start_date: start_date,
                        end_date: end_date,
                    },
                    dataType: "JSON",
                    success: function(result) {
                        console.log(result)
                        $("#overlay").fadeOut(300);
                        $('#title').html(`<h4 class="card-title mb-0 text-uppercase">${result.title}</h1>`);
                        $("#charta").html(`<div id="chart" style="width: 500vw"></div>`);
                        // $('#btn_export').attr('href', `http://34.143.227.90:3001/v1/laporan_harian/export_laphar?filter=true&start_date=${start_date}&end_date=${end_date}`)

                        let polda_name = result.data.polda_name
                        let polda_jumlah = result.data.polda_jumlah
                        let polda_luka_berat = result.data.polda_luka_berat
                        let polda_luka_ringan = result.data.polda_luka_ringan
                        let polda_meninggal_dunia = result.data.polda_meninggal_dunia

                        var chart = {
                            series: [{
                                name: 'Total Laka',
                                type: 'column',
                                data: polda_jumlah,
                                color: "#11347A"
                            }, {
                                name: 'Meninggal Dunia',
                                type: 'column',
                                data: polda_meninggal_dunia,
                                color: "#11347A"
                            }, {
                                name: 'Luka Berat',
                                type: 'column',
                                data: polda_luka_berat,
                                color: "#CB2D3E"
                            }, {
                                name: 'Luka Ringan',
                                type: 'column',
                                data: polda_luka_ringan,
                                color: "#E8D42F"
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
                                categories: polda_name,
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
            }
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
    </script>
    <script src="<?php echo base_url(); ?>assets/admin/libs/apexcharts/apexcharts.min.js"></script>
</body>

</html>