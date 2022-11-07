<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title> | K3I</title>
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



    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <style>
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

            &:hover {
                color: #f00;
            }
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
 
 
<!-- </div> --> 
<div class="page" >
    <div class="card mt-3">
        <div class="card-body">
            <table id="datatable" class="table dt-responsive w-100">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Nama Petugas Pelapor</th>
                        <th>Kategori</th>
                        <th>Deskripsi</th>
                        <th>Waktu</th>
                        <th>No. Telepon</th>
                        <!-- <th>Aksi</th> -->
                    </tr>
                </thead>

            </table>
        </div>

    </div>
</div>
<!-- End Page -->

 
<script>
 
    $(document).ready(function() {
        

        userDataTable = $('#datatable').DataTable({

            responsive: true,

            scrollX: true,

            sDom: '<"dt-panelmenu clearfix"lr>t<"dt-panelfooter clearfix">',

            lengthMenu: [
                [10, 25, 50, 150, 999999],
                [10, 25, 50, 150, 'All'],
            ],

            // buttons: ["excel", "csv", "pdf"],

            // buttons: [   
            //         {
            //             extend:    'excel',
            //             titleAttr:    'excel',
            //             text:      '<i class="fadeIn animated bx bx-file"></i> ',
            //             className: 'btn btn-success box-shadow--4dp btn-sm-menu',
            //             messageTop: 'Agents Data',
            //             exportOptions: {
            //                 columns: [0, 1, 2, 3, 4, 5, 6] 
            //             }

            //         },
            //         {
            //             extend: 'pdfHtml5',
            //             titleAttr: 'PDF',
            //             extension: ".pdf",
            //             orientation:'landscape', 
            //             pageSize: 'A4',
            //             text: '<i class="fadeIn animated bx bx-file-blank"></i> ',
            //             className: 'btn btn-warning box-shadow--4dp btn-sm-menu', 
            //             exportOptions: {
            //                 columns: [0, 1, 2, 3, 4, 5, 6] 
            //             }, 
                         

            //         },
            //         {
            //             extend: 'print',
            //             titleAttr: 'print',
            //             orientation:'landscape',
            //             text:      '<i class="fadeIn animated bx bx-printer"></i> ',
            //             className: 'btn btn-danger box-shadow--4dp btn-sm-menu', 
            //             exportOptions: {
            //                 columns: [0, 1, 2, 3, 4, 5, 6] 
            //             },
            //             customize: function ( win ) {
            //                 // $(win.document.body)
            //                 //     .css( 'font-size', '10pt' )
            //                 //     .prepend(
            //                 //         '<div><img src="http://datatables.net/media/images/logo-fade.png" style="position:absolute; top:0; left:0;"  alt="logo"/></div>'
            //                 //     );

            //                 $(win.document.body).find( 'table' )
            //                     .addClass( 'compact' )
            //                     .css( 'font-size', 'inherit' );
            //             },



            //         },
            //         {
            //             extend:    'colvis',
            //             titleAttr:    'Filter Column',
            //             text:      '<i class="fadeIn animated bx bx-filter"></i> ',
            //             className: 'btn btn-dark box-shadow--4dp btn-sm-menu'
            //         }
            // ],

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

                url: '<?php echo base_url(); ?>laporan/operasi/serverSideTable',

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
                    data: 'foto', 
                    orderable: false
                },
                {
                    data: 'name_officer', 
                    orderable: false
                },
                {
                    data: 'categori'
                },
                {
                    data: 'description'
                },
                {
                    data: 'created_at',
                    render: function ( data, type, row, meta ) {
                    return moment(data).format('DD MMM YYYY h:mm A');
                    }
                },
                {
                    data: 'phone_officer',
                    orderable: false
                }


                // {
                //     data: 'action',
                //     orderable: false
                // }

            ],

            order: [
                [0, "DESC"]
            ],

            drawCallback: function(settings) {

                $("#overlay").fadeOut(300);
                client();

            }


        });


        function client() {

            $(".deletedata").on("click", function(event) {

                Swal.fire({

                    title: 'Anda yakin ingin menghapus ?',

                    text: "",

                    icon: 'warning',

                    showCancelButton: true,

                    confirmButtonColor: '#3085d6',

                    cancelButtonColor: '#d33',

                    confirmButtonText: 'Yes'

                }).then((result) => {

                    if (result.value == true) {
                        $("#overlay").fadeIn(300);

                        $.ajax({
                            url: "<?php echo base_url(); ?>laporan/Operasi/delete",
                            method: "POST",
                            data: {
                                "id": $(this).data("id"),
                            },
                            dataType: 'JSON',
                            // contentType: false,
                            // processData: false,  
                            success: function(data) {
                                $("#overlay").fadeOut(300);
                                if (data['status'] == true) {
                                    Swal.fire(
                                        `${data['message']}`,
                                        '',
                                        'success'
                                    ).then(function() {
                                        userDataTable.ajax.reload();
                                    });
                                } else {
                                    Swal.fire(
                                        `${data['message']}`,
                                        '',
                                        'error'
                                    ).then(function() {});
                                }
                            }
                        });

                    } else {

                        userDataTable.ajax.reload();


                    }

                });



            });
        }
    });
 
</script>

 


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



                        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
                        <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
                        <script scr="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.6.0/underscore.js"></script>
 


</body>


</html>