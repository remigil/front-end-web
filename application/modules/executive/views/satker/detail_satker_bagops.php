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
                                            <a href="<?= base_url() ?>dashboard/Dashboardeksekutif">
                                                <iconify-icon icon="cil:list-filter" style="font-size: 20px; color: #000;" class=" me-2"></iconify-icon>
                                                <span class=" fs-5" style="color:#000;">Welcome to <b style="text-transform: uppercase; ">Dashboard Executive | </b> <b style="text-transform: uppercase; color:#007DD8;"><?= $this->session->userdata('full_name'); ?></b></span>
                                            </a>
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
    <div class="filter p-3 mt-5" style="background-color: #2E2E2E; height:125px;">
        <div class="container">
            <div class="row">
                <!-- <div class="col-md-3">
                        <div class="form-group row">
                            <label for="waktu" class="form-label text-white text-uppercase">Wilayah</label>
                            <select class="form-control" id="polda_id" name="polda_id">
                                <?php foreach ($polda as $key) : ?>
                                    <option value="<?= $key['id'] ?>"><?= $key['name_polda'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div> -->
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
                            <button type="button" class="btn btn-primary" style="width: 100%;" onclick="ButtonFilter()">Tampilkan</button>
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



                    <div class="row mt-5">

                        <div class="col-md-9 align-self-center">
                            <div id="nama">
                                <h1 style="color:#007DD8 ; text-transform:uppercase;">Bagops</h1>
                            </div>
                            <p>Today is <?= date('l, j F Y') ?></p>
                        </div>
                        <div class="col-md-3 text-end align-self-center">
                            <a href="http://34.143.227.90:3001/v1/laporan_harian/export_laphar" class="text-center"><button class="btn btn-outline-primary" style="width: 200px; border-color:#007DD8;">Export Laporan</button></a>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-12 mt-5">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-md-4 mb-3">
                                    <h4 style="text-transform: uppercase; color:#007DD8;">Statistik Nasional</h4>
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
                                                    <iconify-icon icon="fa6-solid:motorcycle" class="ms-n2" style="font-size: 40px; color: #464646;"></iconify-icon>
                                                </div>
                                                <div class="col-md-10 float-end">
                                                    <span class="fs-6 float-end" style="color:#464646;">
                                                        <span class="fw-bold">Data </span>Turjagwali
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
                                                    <i class='bx bxs-id-card ms-n2' style="font-size: 50px; color: #464646;"></i>
                                                </div>
                                                <div class="col-md-10 float-end">
                                                    <span class="fs-6 float-end" style="color:#464646;">
                                                        Laka <span class="fw-bold">Langgar</span>
                                                    </span>
                                                    <br>
                                                    <span class="fs-6 fw-bold float-end" style="color:#464646;" id="lakalanggar"></span>
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
    <script>
        $(document).ready(function() {
            $("#overlay").fadeIn(300);
            $.ajax({
                type: "GET",
                url: "<?php echo base_url(); ?>executive/Satker_executive/getDitgakkum",
                dataType: "JSON",
                success: function(result) {
                    console.log(result)
                    $('#garlantas').html(`<span class="fs-4" >${result.data.total_garlantas}</span >`);
                    $('#lakalantas').html(`<span class="fs-4" >${result.data.total_lakalantas}</span >`);
                    $('#lakalanggar').html(`<span class="fs-4" >${result.data.total_lakalanggar}</span >`);
                    $('#turjagwali').html(`<span class="fs-4" >${result.data.total_turjagwali}</span >`);
                    $("#charta").html(`<div id="chart" style="width: 500vw"></div>`);
                    $("#overlay").fadeOut(300);
                    var ditgakkum = {
                        series: [{
                            name: 'Pelanggaran',
                            type: 'column',
                            data: result.data.polda_garlantas,
                            color: "#11347A"
                        }, {
                            name: 'Kecelakaan',
                            type: 'column',
                            data: result.data.polda_lakalantas,
                            color: "#CB2D3E"
                        }, {
                            name: 'Turjagwali',
                            type: 'column',
                            data: result.data.polda_turjagwali,
                            color: "#E8D42F"
                        }, {
                            name: 'Lakalanggar',
                            type: 'column',
                            data: result.data.polda_lakalanggar,
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

                        stroke: {
                            show: true,
                            width: [1, 1, 4, 4],
                            colors: ['transparent']
                        },
                        xaxis: {
                            categories: result.data.polda_name,
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

                        tooltip: {
                            // custom: function({
                            //     series,
                            //     seriesIndex,
                            //     dataPointIndex,
                            //     w
                            // }) {
                            //     return (
                            //         `<div class="">
                            //             <header>${series[seriesIndex][dataPointIndex]}</header>
                            //         </div>`


                            // '<div class="">' +
                            // "<span>" +
                            // w.globals.labels[dataPointIndex] +
                            // ": " +
                            // series[seriesIndex][dataPointIndex] +
                            // "</span>" +
                            // "</div>"
                            //         );
                            //     }
                        }
                    };

                    var ditgakkum = new ApexCharts(document.querySelector("#chart"), ditgakkum);
                    ditgakkum.render();
                }
            })



            // var ditregident = {
            //     series: [{
            //         name: 'BPKB',
            //         type: 'column',
            //         data: [90, 12, 54, 65, 78, 98, 89, 32, 49, 98, 32, 56],
            //         color: "#11347A"
            //     }, {
            //         name: 'STNK',
            //         type: 'column',
            //         data: [32, 52, 14, 55, 38, 26, 34, 72, 44, 23, 42, 66],
            //         color: "#CB2D3E"
            //     }, {
            //         name: 'SIM',
            //         type: 'column',
            //         data: [
            //             62, 14, 24, 45, 33, 28, 83, 52, 47, 08, 92, 86,
            //         ],
            //         color: "#E8D42F"
            //     }, {
            //         name: 'RANMOR',
            //         type: 'column',
            //         data: [21, 23, 37, 39, 36, 58, 19, 12, 34, 43, 13, 22],

            //         color: "#3CA55C"
            //     }],
            //     chart: {
            //         height: 400,
            //         type: 'line',
            //         stacked: false
            //     },
            //     plotOptions: {
            //         bar: {
            //             horizontal: false,
            //             columnWidth: '55%',
            //             endingShape: 'rounded',
            //             dataLabels: {
            //                 position: 'top'
            //             }
            //         },
            //     },
            //     dataLabels: {
            //         enabled: true,
            //         style: {
            //             colors: ['#333']
            //         },
            //         offsetY: -15
            //     },

            //     stroke: {
            //         show: true,
            //         width: [1, 1, 4, 4],
            //         colors: ['transparent']
            //     },
            //     xaxis: {
            //         categories: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
            //     },
            //     yaxis: [{
            //         axisTicks: {
            //             show: false,
            //         },
            //         axisBorder: {
            //             show: false,
            //             color: '#008FFB'
            //         },
            //         labels: {
            //             style: {
            //                 colors: '#008FFB',
            //             }
            //         },


            //     }, ],

            //     tooltip: {
            //         // custom: function({
            //         //     series,
            //         //     seriesIndex,
            //         //     dataPointIndex,
            //         //     w
            //         // }) {
            //         //     return (
            //         //         `<div class="">
            //         //             <header>${series[seriesIndex][dataPointIndex]}</header>
            //         //         </div>`


            //         // '<div class="">' +
            //         // "<span>" +
            //         // w.globals.labels[dataPointIndex] +
            //         // ": " +
            //         // series[seriesIndex][dataPointIndex] +
            //         // "</span>" +
            //         // "</div>"
            //         //         );
            //         //     }
            //     }
            // };

            // var ditregident = new ApexCharts(document.querySelector("#chartditregident"), ditregident);
            // ditregident.render();

            // var ditkamsel = {
            //     series: [{
            //         name: 'BPKB',
            //         type: 'column',
            //         data: [90, 12, 54, 65, 78, 98, 89, 32, 49, 98, 32, 56],
            //         color: "#11347A"
            //     }, {
            //         name: 'STNK',
            //         type: 'column',
            //         data: [32, 52, 14, 55, 38, 26, 34, 72, 44, 23, 42, 66],
            //         color: "#CB2D3E"
            //     }, {
            //         name: 'SIM',
            //         type: 'column',
            //         data: [
            //             62, 14, 24, 45, 33, 28, 83, 52, 47, 08, 92, 86,
            //         ],
            //         color: "#E8D42F"
            //     }, {
            //         name: 'RANMOR',
            //         type: 'column',
            //         data: [21, 23, 37, 39, 36, 58, 19, 12, 34, 43, 13, 22],

            //         color: "#3CA55C"
            //     }],
            //     chart: {
            //         height: 400,
            //         type: 'line',
            //         stacked: false
            //     },
            //     plotOptions: {
            //         bar: {
            //             horizontal: false,
            //             columnWidth: '55%',
            //             endingShape: 'rounded',
            //             dataLabels: {
            //                 position: 'top'
            //             }
            //         },
            //     },
            //     dataLabels: {
            //         enabled: true,
            //         style: {
            //             colors: ['#333']
            //         },
            //         offsetY: -15
            //     },

            //     stroke: {
            //         show: true,
            //         width: [1, 1, 4, 4],
            //         colors: ['transparent']
            //     },
            //     xaxis: {
            //         categories: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
            //     },
            //     yaxis: [{
            //         axisTicks: {
            //             show: false,
            //         },
            //         axisBorder: {
            //             show: false,
            //             color: '#008FFB'
            //         },
            //         labels: {
            //             style: {
            //                 colors: '#008FFB',
            //             }
            //         },


            //     }, ],

            //     tooltip: {
            //         // custom: function({
            //         //     series,
            //         //     seriesIndex,
            //         //     dataPointIndex,
            //         //     w
            //         // }) {
            //         //     return (
            //         //         `<div class="">
            //         //             <header>${series[seriesIndex][dataPointIndex]}</header>
            //         //         </div>`


            //         // '<div class="">' +
            //         // "<span>" +
            //         // w.globals.labels[dataPointIndex] +
            //         // ": " +
            //         // series[seriesIndex][dataPointIndex] +
            //         // "</span>" +
            //         // "</div>"
            //         //         );
            //         //     }
            //     }
            // };

            // var ditkamsel = new ApexCharts(document.querySelector("#chartditkamsel"), ditkamsel);
            // ditkamsel.render();


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
                    url: "<?php echo base_url(); ?>executive/Satker_executive/getDitgakkum",
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
                        $('#garlantas').html(`<span class="fs-4" >${result.data.total_garlantas}</span >`);
                        $('#lakalantas').html(`<span class="fs-4" >${result.data.total_lakalantas}</span >`);
                        $('#lakalanggar').html(`<span class="fs-4" >${result.data.total_lakalanggar}</span >`);
                        $('#turjagwali').html(`<span class="fs-4" >${result.data.total_turjagwali}</span >`);

                        var ditgakkum = {
                            series: [{
                                name: 'Pelanggaran',
                                type: 'column',
                                data: result.data.polda_garlantas,
                                color: "#11347A"
                            }, {
                                name: 'Kecelakaan',
                                type: 'column',
                                data: result.data.polda_lakalantas,
                                color: "#CB2D3E"
                            }, {
                                name: 'Turjagwali',
                                type: 'column',
                                data: result.data.polda_turjagwali,
                                color: "#E8D42F"
                            }, {
                                name: 'Lakalanggar',
                                type: 'column',
                                data: result.data.polda_lakalanggar,
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

                            stroke: {
                                show: true,
                                width: [1, 1, 4, 4],
                                colors: ['transparent']
                            },
                            xaxis: {
                                categories: result.data.polda_name,
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

                            tooltip: {
                                // custom: function({
                                //     series,
                                //     seriesIndex,
                                //     dataPointIndex,
                                //     w
                                // }) {
                                //     return (
                                //         `<div class="">
                                //             <header>${series[seriesIndex][dataPointIndex]}</header>
                                //         </div>`


                                // '<div class="">' +
                                // "<span>" +
                                // w.globals.labels[dataPointIndex] +
                                // ": " +
                                // series[seriesIndex][dataPointIndex] +
                                // "</span>" +
                                // "</div>"
                                //         );
                                //     }
                            }
                        };

                        var ditgakkum = new ApexCharts(document.querySelector("#chart"), ditgakkum);
                        ditgakkum.render();

                    }
                })
            }
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
