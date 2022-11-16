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
    <div class="mt-5 mb-5"></div>
    <div class="mt-5 mb-5 p-3"></div>
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

                    <div class="title mt-3">
						<h1>Data Operasi Nasional</h1>
					</div>

                    <div class="page mt-3 mb-5">
							<div class="page mt-3">
								<div class="card shadow-sm">
									<div class="card-body">
										<!-- <div style="width: 25%; float:right; border: 1px; margin-bottom: 10px">
										<input type="search" class="form-control light-table-filter" data-table="table-hower" placeholder="Search..." />
									</div> -->
										<table id="datatable" class="table dt-responsive w-100" style="width: 800px;
								margin: 0 auto;">
											<thead>
												<tr class="table-info">
													<th>No</th>
													<th>Nama Operasi</th>
													<th>Tanggal Mulai</th>
													<th>Tanggal Berakhir</th>
													<th>Laporan Harian</th>
												</tr>
											</thead>
											<tbody>
												
											</tbody>
										</table>

									</div>
								</div>
							</div>
						</div>

						<div class="title mt-3">
							<h1>CCTV Nasional</h1>
						</div>

						<div class="row align-items-center">
							

							<div class="col-md-6">
								<div class="form-floating mb-3">
								
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
							</div>

							<div class="col-md-6">
								<div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
									<div>
										<div class="form-floating mb-3">
											<input type="text" class="form-control" name="searchFilter" placeholder="Search" style="height: 50px;">
											<label for="searchFilter">Search</label>
										</div>
									</div> 
								</div> 
							</div>
							

						</div>
						<!-- end row -->
						
						<div class="row" id="listCCTV"></div>

						<div class="row">
							<input hidden type="text" name="halaman" id="halaman" value="1">
							<div class="col-md-6">
								<nav aria-label="Page navigation example">
									<ul class="pagination">
										<li class="page-item" id="backHalaman"><a class="page-link" href="javascript:void(0);">Kembali</a></li>
										<!-- <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li> -->
										<li class="page-item" id="nextHalaman"><a class="page-link" href="javascript:void(0);">Selanjutnya</a></li>
									</ul>
								</nav>
							</div>
						</div>

                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {

			serverSideGetCCTV(); 

        
        
        let countlistCCTV = 0;
        let listCCTV = ""; 
        $('[name=kategoriFilter]').on("change", function (e) {
            countlistCCTV = 0;
            listCCTV = "";
            $('#listCCTV').html(listCCTV); 
            serverSideGetCCTV();
        });
        $('[name=searchFilter]').on("change", function (e) {
            countlistCCTV = 0;
            listCCTV = "";
            $('#listCCTV').html(listCCTV); 
            serverSideGetCCTV();
        });

        // if($('[name=halaman]').val() == 1){
        //     $("#backHalaman").addClass("disabled");
        // }
        $("#backHalaman").on("click", function (e) {
            var nilaiHalaman = parseFloat($('[name=halaman]').val()) - 1;
            if(nilaiHalaman < 1){
                $("#backHalaman").addClass("disabled");
            }else{
                $('[name=halaman]').val(nilaiHalaman);
                serverSideGetCCTV()
            } 
        });
        $("#nextHalaman").on("click", function (e) {
            var nilaiHalaman = parseFloat($('[name=halaman]').val()) + 1;
            if(nilaiHalaman > 1){
                $("#backHalaman").removeClass("disabled");
                $('[name=halaman]').val(nilaiHalaman);
                serverSideGetCCTV()
            }
        });
        function serverSideGetCCTV(){
            $("#overlay").fadeIn(300); 
            $.ajax({
                type : "POST",
                url : "<?php echo base_url();?>masterdata/cctv/getCCTV", 
                data : {
                    "kategoriFilter" : $('[name=kategoriFilter]').val(),
                    "searchFilter": $('[name=searchFilter]').val(),
                    "page": $('[name=halaman]').val(),
                }, 
                dataType : "JSON",
                success : function(result){  
                    let ressData = result['data'];
                    if(ressData.length > 0){

                    }else{

                    } 
                    let ress = ressData.filter(function (e) {
                        return e.lat_cctv != null && e.lng_cctv != null;
                    });   
                    // console.log(result);

                    $("#overlay").fadeOut(300);
                    if(ress.length > 0){   
                        countlistCCTV = 0;
                        listCCTV = "";

                        ress.forEach(el => {
                            if(el.ip_cctv == 'https://balisatudata.baliprov.go.id/peta-cctv'){
                                resource = `<iframe id="myIframe" src="${el.link_cctv}" style="width: 230px; height: 250.25px;"></iframe>`;
                            }else{
                                resource = `<img style="width: 230px;" src="${el.link_cctv}" />`;
                            }
                            countlistCCTV += 1;
                            listCCTV += `
                                <div class="col-xl-3 col-sm-6">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <div class="dropdown text-end">
                                                <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                    <i class="bx bx-dots-horizontal-rounded"></i>
                                                </a>
                                                
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Edit</a> 
                                                    <a class="dropdown-item" href="#">Hapus</a>
                                                </div>
                                            </div>
                                            
                                            <div class="row mb-4">
                                                <div class="col-md-12">
                                                ${resource}
                                                </div>
                                            </div>
                                            <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">${el.type_cctv}</a></h5>
                                            <p class="text-muted mb-2">${el.address_cctv}</p>
                                            
                                        </div> 
                                    </div> 
                                </div>
                            `;
                            $('#listCCTV').html(listCCTV); 
                        });  
                        
                    }else{
                        listCCTV = "";
                        $('#listCCTV').html(listCCTV); 
                    }
                }
            });
        } 
            $("#overlay").fadeIn(300);


			userDataTable = $('#datatable').DataTable({


			responsive: true,

			scrollX: true,

			// sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

			// buttons: ["excel", "csv", "pdf"],

			oLanguage: {

				sSearch: 'Search:'

			},

			initComplete: function(settings, json) {},

			retrieve: true,

			processing: true,

			serverSide: true,

			serverMethod: 'POST',

			ajax: {

				dataType: 'json',

				url: '<?php echo base_url(); ?>executive/Opsus_executive/serverSideTable',

				data: function(data) {

					$("#overlay").fadeIn(300);

					// console.log(data);

					// data.filterTgl = $('[name=event_date]').val();

					// data.filterTgl2 = $('[name=event_date_to]').val(); 

					// data.filterStatus = $('[name=status]').val();

					// data.filterName = $('[name=group_name]').val();

					// data.filterPocName = $('[name=group_poc_name]').val();

					// data.filterPhone = $('[name=poc_phone]').val();

					// data.filterThreat = $('[name=threat_level]').val();

					data.orderField = data.order[0] != undefined ? data.order[0].column : '';

					data.orderValue = data.order[0] != undefined ? data.order[0].dir : '';

					data.page = Number(data.start / data.length) + 1

				},

				beforeSend: function(xhr, settings) {

				},

				"dataSrc": function(result) {

					result.iTotalRecords = result.iTotalRecords;

					result.iTotalDisplayRecords = result.iTotalRecords;

					return result.aaData;

				}

			},

			columns: [

				{
					data: 'id'
				},
				{
					data: 'name_operation'
				},
				{
					data: 'date_start_operation'
				},
				{
					data: 'date_end_operation'
				},
				{
					data: 'action',
					orderable: false
				}

			],

			order: [
				[0, "ASC"]
			],

			drawCallback: function(settings) {

				$("#overlay").fadeOut(300);

			}


			});

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
