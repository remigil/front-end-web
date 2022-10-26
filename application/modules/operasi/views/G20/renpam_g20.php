<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#">Operasi</a></li>
        <li class="breadcrumb-item active fw-bold" aria-current="page"><?= $title; ?></li>
    </ol>
</nav>
<!-- </div> -->
<div class="page">
    <button type="button" class="btn btn-primary waves-effect" data-bs-toggle="modal" data-bs-target="#myModal">Tambah Uraian Kegiatan</button>
    <div class="card mt-3">
        <div class="card-body">

            <div class="row">
                <div class="col-md-4 mb-3" style="display: flex;">  
                    <input required class="form-control" type="date" id="startdate" name="startdate" value="2022-11-01"> &nbsp;&nbsp;<span style="margin-top: 7px;">To</span>&nbsp;&nbsp;
                    <input required class="form-control" type="date" id="enddate" name="enddate" value="2022-11-20">
                    &nbsp;&nbsp;<button class="btn btn-primary" id="searchtgl">Cari</button>
                </div> 
            </div>

            <table id="datatable" class="table dt-responsive w-100">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Unit Pengawalan</th>
                        <th>Delegasi</th>
                        <th>Subjek</th>
                        <!-- <th>Waktu</th> -->
                        <th>Uraian Kegiatan</th>
                        <th>Instruksi</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>

    </div>
</div>
<!-- End Page -->



<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Tambah Uraian Kegiatan</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form" method="post" enctype="multipart/form-data">
                    <input hidden name="category_renpam" value="<?php echo $data['category']; ?>" type="text">
                    
                    <div class="row">

                        <div class="col-md-6">
                            <div class="material-textfield mb-3">
                                <input required style="width: 100%;" name="instruksi" placeholder="" type="text">
                                <label class="labelmui">Uraian Kegiatan</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="material-selectfield mb-3">
                                <select required name="id_account[]" id="id_account" style="height: 200px;" multiple>
                                    <?php foreach ($data['getAccount'] as $row) : ?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['name_account']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <label style="margin-top: -20px;font-size: 14px;" class="labelmui">Unit Pengawalan</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="material-textfield mb-3">
                                <input required style="width: 100%;" name="date" id="datepicker" class="form-control" value="<?= date('Y-m-d') ?>" type="date">
                                <label class="labelmui">Tanggal</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="material-selectfield mb-3">
                                <select  name="id_vip[]" id="id_vip" style="height: 200px" multiple>
                                    <?php foreach ($data['getVip'] as $row) : ?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['name_vip']; ?> ( <?= $row['country_arrival_vip'] ?> )</option>
                                    <?php endforeach; ?>
                                </select>
                                <label style="margin-top: -20px;font-size: 14px;" class="labelmui">VVIP</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="material-textfield mb-3">
                                <input required type="text" name="startTime" class="form-control" id="startTime" value="<?php echo date('H:i') ?>" data-default="<?php echo date('H:i') ?>">
                                <label class="labelmui">Waktu Mulai</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="material-selectfield mb-3">
                                <select name="subjek" id="select" class="form-select">
                                    <option selected value="">Pilih Subjek</option>
                                    <option value="1">Patroli</option>
                                    <option value="2">Pengawalan</option>
                                    <option value="3">Penjagaan</option>
                                    <option value="4">Pengaturan</option>
                                    <option value="5">Penutupan</option>
                                </select>
                                <!-- <label class="labelmui">Subjek</label> -->
                            </div> 
                        </div>
                        <div class="col-md-6">
                            <div class="material-textfield mb-3">
                                <input style="width: 100%;" name="total_vehicle" placeholder="" type="text">
                                <label class="labelmui">Jumlah kendaraan yang dikawal</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="material-textfield mb-3">
                                <input style="width: 100%;" name="order_renpam" placeholder="" type="text">
                                <label class="labelmui">Urutan</label>
                            </div>
                        </div>
                        <!-- <div class="col-md-6"></div> -->
                        <div class="col-md-6">
                            <div class="material-textfield mb-3">
                                <input required style="width: 100%;" name="title_start" placeholder="" type="text">
                                <label class="labelmui">Lokasi Awal</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="material-textfield mb-3">
                                <input style="width: 100%;" name="title_end" placeholder="" type="text">
                                <label class="labelmui">Lokasi Akhir</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="material-textfield mb-3">
                                <input type="text" name="note_kakor" class="form-control" id="note_kakor">
                                <label class="labelmui">Instruksi Kakor</label>
                            </div>
                        </div>
                        <!-- <div class="col-md-6">
                            <div class="material-textfield mb-3">
                                <input required type="text" name="endTime" class="form-control" id="endTime" value="<?php echo date('H:i') ?>" data-default="<?php echo date('H:i') ?>"> 
                                <label class="labelmui">Waktu Selesai</label>
                            </div>
                        </div> -->


                        <textarea hidden name="ruteawal" id="ruteawal" cols="2" rows="2"></textarea>
                        <textarea hidden name="coordsAlternative1" id="coordsAlternative1" cols="5" rows="5"></textarea>
                        <textarea hidden name="coordsAlternative2" id="coordsAlternative2" cols="5" rows="5"></textarea>
                        <textarea hidden name="coordsAlternative3" id="coordsAlternative3" cols="5" rows="5"></textarea>
                        <textarea hidden name="coordsAlternative4" id="coordsAlternative4" cols="5" rows="5"></textarea>

                        <!-- <div class="col-md-12 mt-3">
                            <div id="mapG20Kegiatan" style="height: 500px"></div>
                        </div> -->
                    </div>

                    <div class="col-md-12 mt-3 float-end">
                        <a href="javascript:void(0);" class="btn btn-primary waves-effect" style="background: red" data-bs-toggle="modal" data-bs-target="#myModalUtama"> Rute Utama</a>
                        <a href="javascript:void(0);" class="btn btn-primary waves-effect" style="background: #b935b9" data-bs-toggle="modal" data-bs-target="#myModal1"> Rute Alternative</a>
                        <a href="javascript:void(0);" class="btn btn-primary waves-effect" style="background: gray" data-bs-toggle="modal" data-bs-target="#myModal2"> Rute Escape</a>
                        <a href="javascript:void(0);" class="btn btn-primary waves-effect" style="background: #000dda" data-bs-toggle="modal" data-bs-target="#myModal3"> Rute Masyarakat</a>
                        <a href="javascript:void(0);" class="btn btn-primary waves-effect" style="background: #bdbd0b" data-bs-toggle="modal" data-bs-target="#myModal4"> Rute Umum</a>
                        <button class="btn btn-primary float-end" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="myModalUtama" tabindex="-1" role="dialog" data-bs-backdrop="static" aria-labelledby="myLargeModalLabelUtama" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabelUtama">Tambah Utama</h5>
                <!-- <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button> -->
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div id="mapG20Kegiatan" style="height: 500px"></div>
                    </div>
                </div>

                <div class="col-md-6 mt-3 float-end">
                    <button class="btn btn-primary float-end" id="submitAlternativeUtama" data-bs-toggle="modal" data-bs-target="#myModal">Simpan</button>
                    <!-- <button class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#myModal" style="margin: 5px">Kembali</button> -->
                </div>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" data-bs-backdrop="static" aria-labelledby="myLargeModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel1">Tambah Alternative</h5>
                <!-- <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button> -->
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div id="mapG20Alternative1" style="height: 500px"></div>
                    </div>
                </div>

                <div class="col-md-6 mt-3 float-end">
                    <button class="btn btn-primary float-end" id="submitAlternative1" data-bs-toggle="modal" data-bs-target="#myModal">Simpan</button>
                    <!-- <button class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#myModal" style="margin: 5px">Kembali</button> -->
                </div>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" data-bs-backdrop="static" aria-labelledby="myLargeModalLabel2" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel2">Tambah Escape</h5>
                <!-- <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button> -->
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div id="mapG20Alternative2" style="height: 500px"></div>
                    </div>
                </div>

                <div class="col-md-6 mt-3 float-end">
                    <button class="btn btn-primary float-end" id="submitAlternative2" data-bs-toggle="modal" data-bs-target="#myModal">Simpan</button>
                    <!-- <button class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#myModal" style="margin: 5px">Kembali</button> -->
                </div>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" data-bs-backdrop="static" aria-labelledby="myLargeModalLabel3" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel3">Tambah Route Masyarakat</h5>
                <!-- <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button> -->
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div id="mapG20Alternative3" style="height: 500px"></div>
                    </div>
                </div>

                <div class="col-md-6 mt-3 float-end">
                    <button class="btn btn-primary float-end" id="submitAlternative3" data-bs-toggle="modal" data-bs-target="#myModal">Simpan</button>
                    <!-- <button class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#myModal" style="margin: 5px">Kembali</button> -->
                </div>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" data-bs-backdrop="static" aria-labelledby="myLargeModalLabel4" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel4">Tambah Umum</h5>
                <!-- <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button> -->
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div id="mapG20Alternative4" style="height: 500px"></div>
                    </div>
                </div>

                <div class="col-md-6 mt-3 float-end">
                    <button class="btn btn-primary float-end" id="submitAlternative4" data-bs-toggle="modal" data-bs-target="#myModal">Simpan</button>
                    <!-- <button class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#myModal" style="margin: 5px">Kembali</button> -->
                </div>

            </div>
        </div>
    </div>
</div>

<script>

    $(document).ready(function() {
        $( '[name=total_vehicle]' ).mask('000000000');
        $( '[name=order_renpam]' ).mask('000000000');

        new Choices('#select', {
            searchEnabled: true,
            removeItemButton: true,
            removeItems: true,
            itemSelectText: '',
            classNames: {
                containerOuter: 'choices select-choices',
            },
        });   
        
        var userDataTable = $('#datatable').DataTable({

            responsive: true,

            scrollX: true,

            sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

            buttons: ["excel", "csv", "pdf"],

            lengthMenu: [
                [10, 25, 50, 999999],
                [10, 25, 50, 'All'],
            ],

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

                url: '<?php echo base_url(); ?>operasi/Renpam/serverSideTable',

                data: function(data) {

                    $("#overlay").fadeIn(300);

                    // console.log(data);

                    data.filterTgl = $('#startdate').val();

                    data.filterTgl2 = $('#enddate').val();

                    // data.filterStatus = $('[name=status]').val();

                    data.filterSchedule = '';

                    data.filterTypeRenpam = '';

                    data.filterCategoryRenpam = '<?php echo $data['category']; ?>';

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
                    data: 'date'
                },
                {
                    data: 'accounts',
                    orderable: false
                },
                {
                    data: 'vips',
                    orderable: false
                },
                {
                    data: 'type_renpam'
                },

                // {
                //     data: 'waktu',
                //     orderable: false
                // },
                {
                    data: 'route'
                },
                {
                    data: 'note_kakor',
                },
                {
                    data: 'keterangan',
                },

                {
                    data: 'action',
                    orderable: false
                }

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
                            url: "<?php echo base_url(); ?>operasi/renpam/delete",
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

        // var start = moment();
        // var end = moment(); 
        // // alert(start);

        $("#searchtgl").on("click", function (e) { 
            userDataTable.draw(); 
        });
        
        // function cb(start, end) {
        //     $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY')); 
        //     $('#startdate').val(start.format('YYYY-MM-DD'));
        //     $('#enddate').val(end.format('YYYY-MM-DD')); 
        //     userDataTable.draw(); 
        // }

        // $('#reportrange').daterangepicker({
        //     startDate: start,
        //     endDate: end,
        //     ranges: {
        //     'Hari Ini': [moment(), moment()],
        //     'Kemarin': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        //     '7 Hari Kemarin': [moment().subtract(6, 'days'), moment()],
        //     '30 Hari Kemarin': [moment().subtract(29, 'days'), moment()],
        //     'Bulan Ini': [moment().startOf('month'), moment().endOf('month')],
        //     'Bulan Kemarin': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')], 
        //     'Tahun Ini': [moment().startOf('year'), moment().endOf('year')],
        //     'Tahun Lalu': [moment().subtract(1, 'year').startOf('year'), moment().subtract(1, 'year').endOf('year')],
        //     }
        // }, cb);

        // cb(start, end);   

        let arrayWaypoint = [];
        var obj = {};
        $('#myModal').on('shown.bs.modal', function() {
            console.log(arrayWaypoint);

            $('#startTime').clockpicker({
                autoclose: true
            });
            $('#endTime').clockpicker({
                autoclose: true
            });

            new Choices('#id_vip', {
                searchEnabled: true,
                removeItemButton: true,
                removeItems: true,
                itemSelectText: '',
                classNames: {
                    containerOuter: 'choices select-choices',
                },
            });

            new Choices('#id_account', {
                searchEnabled: true,
                removeItemButton: true,
                removeItems: true,
                itemSelectText: '',
                classNames: {
                    containerOuter: 'choices select-choices',
                },
            });



            // $('[name=cordinate]').val('-8.451740, 115.089643');
            // var initialCenter = [-8.451740, 115.089643];
            // var initialZoom = 9.65;
            // var googleStreet = L.tileLayer('https://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
            //     maxZoom: 20,
            //     subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
            //     attribution: '&copy; <a href="https://maps.google.com/">Google Map <?= date('Y') ?></a> contributors'
            // });
            // var googleHybrid = L.tileLayer('https://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
            //     maxZoom: 20,
            //     subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
            //     attribution: '&copy; <a href="https://maps.google.com/">Google Map <?= date('Y') ?></a> contributors'
            // });
            // var googleSatelite = L.tileLayer('https://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
            //     maxZoom: 20,
            //     subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
            //     attribution: '&copy; <a href="https://maps.google.com/">Google Map <?= date('Y') ?></a> contributors'
            // });
            // var googleTerrain = L.tileLayer('https://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}', {
            //     maxZoom: 20,
            //     subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
            //     attribution: '&copy; <a href="https://maps.google.com/">Google Map <?= date('Y') ?></a> contributors'
            // });

            // // StART MAP SECTION
            // var mapContainerInstruksi = L.map('mapG20Kegiatan', {
            //     maxZoom: 20,
            //     minZoom: 1,
            //     zoomSnap: 0.25,
            //     zoomControl: false,
            //     layers: [googleHybrid]
            // }).setView(initialCenter, initialZoom);

            // var baseMaps = {
            //     "Google Map Street": googleStreet,
            //     "Google Map Satelite": googleSatelite,
            //     "Google Map Hybrid": googleHybrid,
            //     "Google Map Terrain": googleTerrain,
            // };
            // var overlayMaps = {};
            // L.control.layers(baseMaps, overlayMaps, {
            //     position: 'topleft'
            // }).addTo(mapContainerInstruksi);
            // L.control.zoom({
            //     position: 'bottomleft'
            // }).addTo(mapContainerInstruksi);

            // // mapContainerInstruksi.invalidateSize(); 

            // var control = L.Routing.control({
            //     waypoints: arrayWaypoint,
            //     router: new L.Routing.osrmv1({
            //         language: 'en',
            //         profile: 'car'
            //     }),
            //     showAlternatives: true,
            //     geocoder: L.Control.Geocoder.nominatim({})
            // }).addTo(mapContainerInstruksi);


            // function createButton(label, container) {
            //     var btn = L.DomUtil.create('button', '', container);
            //     btn.setAttribute('type', 'button');
            //     btn.innerHTML = label;
            //     return btn;
            // }

            // mapContainerInstruksi.on('click', function(e) {
            //     var container = L.DomUtil.create('div'),
            //         startBtn = createButton('Start from this location', container), 
            //         destBtn = createButton('Go to this location', container);

            //     L.DomEvent.on(startBtn, 'click', function() {  

            //         control.spliceWaypoints(0, 1, e.latlng);
            //         mapContainerInstruksi.closePopup();
            //     }); 
            //     L.DomEvent.on(destBtn, 'click', function() { 

            //         control.spliceWaypoints(control.getWaypoints().length - 1, 1, e.latlng);
            //         mapContainerInstruksi.closePopup();
            //     });
            //     L.popup()
            //         .setContent(container)
            //         .setLatLng(e.latlng)
            //         .openOn(mapContainerInstruksi);
            // }); 
        });

        $(".form").submit(function(e) {
            $("#overlay").fadeIn(300);
            e.preventDefault();

            // var routeArray = new Array();
            // routeArray = control.getWaypoints();
            // $('#ruteawal').val(JSON.stringify(routeArray)); 

            var formData = new FormData($('.form')[0]);
            $.ajax({
                url: "<?php echo base_url(); ?>operasi/Renpam/store",
                method: "POST",
                data: formData,
                dataType: 'JSON',
                contentType: false,
                processData: false,
                success: function(data) {
                    $("#overlay").fadeOut(300);
                    if (data['status'] == true) {
                        Swal.fire(
                            `${data['message']}`,
                            '',
                            'success'
                        ).then(function() {
                            $("#myModal").modal('hide');
                            userDataTable.draw();
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
        });
    });





    var routingAlternativeUtama = new Array();
    var routingAlternative1 = new Array();
    var routingAlternative2 = new Array();
    var routingAlternative3 = new Array();
    var routingAlternative4 = new Array();
    let arrayWaypointUtama = [];
    let arrayWaypoint = [];

    $('#myModalUtama').on('shown.bs.modal', function() {

        var initialCenter = [-8.751740, 115.149643];
        var initialZoom = 11.65;
        var googleStreet = L.tileLayer('https://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
            maxZoom: 20,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
            attribution: '&copy; <a href="https://maps.google.com/">Google Map <?= date('Y') ?></a> contributors'
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

        // StART MAP SECTION
        var mapContainerRenpamUtama = L.map('mapG20Kegiatan', {
            maxZoom: 20,
            minZoom: 1,
            zoomSnap: 0.25,
            zoomControl: false,
            layers: [googleHybrid]
        }).setView(initialCenter, initialZoom);

        var baseMaps = {
            "Google Map Street": googleStreet,
            "Google Map Satelite": googleSatelite,
            "Google Map Hybrid": googleHybrid,
            "Google Map Terrain": googleTerrain,
        };
        var overlayMaps = {};
        L.control.layers(baseMaps, overlayMaps, {
            position: 'topleft'
        }).addTo(mapContainerRenpamUtama);
        L.control.zoom({
            position: 'bottomleft'
        }).addTo(mapContainerRenpamUtama);


        mapContainerRenpamUtama.invalidateSize();


        var routeAlternativeUtama = L.Routing.control({
            waypoints: arrayWaypointUtama,
            router: new L.Routing.osrmv1({
                language: 'en',
                profile: 'car'
            }),
            geocoder: L.Control.Geocoder.nominatim({})
        }).addTo(mapContainerRenpamUtama);


        function createButton(label, container) {
            var btn = L.DomUtil.create('button', '', container);
            btn.setAttribute('type', 'button');
            btn.innerHTML = label;
            return btn;
        }

        mapContainerRenpamUtama.on('click', function(e) {
            var container = L.DomUtil.create('div'),
                startBtn = createButton('Start from this location', container),
                destBtn = createButton('Go to this location', container);

            L.DomEvent.on(startBtn, 'click', function() {

                routeAlternativeUtama.spliceWaypoints(0, 1, e.latlng);
                mapContainerRenpamUtama.closePopup();
            });
            L.DomEvent.on(destBtn, 'click', function() {

                routeAlternativeUtama.spliceWaypoints(routeAlternativeUtama.getWaypoints().length - 1, 1, e.latlng);
                mapContainerRenpamUtama.closePopup();
            });
            L.popup()
                .setContent(container)
                .setLatLng(e.latlng)
                .openOn(mapContainerRenpamUtama);


        });

        $("#submitAlternativeUtama").on('click', function(e) {
            routingAlternativeUtama = routeAlternativeUtama.getWaypoints();
            $('#ruteawal').val(JSON.stringify(routingAlternativeUtama));
            // $("#myModal1").modal('hide');
        });
    });

    $('#myModal1').on('shown.bs.modal', function() {

        var initialCenter = [-8.751740, 115.149643];
        var initialZoom = 11.65;
        var googleStreet = L.tileLayer('https://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
            maxZoom: 20,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
            attribution: '&copy; <a href="https://maps.google.com/">Google Map <?= date('Y') ?></a> contributors'
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

        // StART MAP SECTION
        var mapContainerRenpam = L.map('mapG20Alternative1', {
            maxZoom: 20,
            minZoom: 1,
            zoomSnap: 0.25,
            zoomControl: false,
            layers: [googleHybrid]
        }).setView(initialCenter, initialZoom);

        var baseMaps = {
            "Google Map Street": googleStreet,
            "Google Map Satelite": googleSatelite,
            "Google Map Hybrid": googleHybrid,
            "Google Map Terrain": googleTerrain,
        };
        var overlayMaps = {};
        L.control.layers(baseMaps, overlayMaps, {
            position: 'topleft'
        }).addTo(mapContainerRenpam);
        L.control.zoom({
            position: 'bottomleft'
        }).addTo(mapContainerRenpam);


        mapContainerRenpam.invalidateSize();


        var routeAlternative1 = L.Routing.control({
            waypoints: arrayWaypoint,
            router: new L.Routing.osrmv1({
                language: 'en',
                profile: 'car'
            }),
            geocoder: L.Control.Geocoder.nominatim({})
        }).addTo(mapContainerRenpam);


        function createButton(label, container) {
            var btn = L.DomUtil.create('button', '', container);
            btn.setAttribute('type', 'button');
            btn.innerHTML = label;
            return btn;
        }

        mapContainerRenpam.on('click', function(e) {
            var container = L.DomUtil.create('div'),
                startBtn = createButton('Start from this location', container),
                destBtn = createButton('Go to this location', container);

            L.DomEvent.on(startBtn, 'click', function() {

                routeAlternative1.spliceWaypoints(0, 1, e.latlng);
                mapContainerRenpam.closePopup();
            });
            L.DomEvent.on(destBtn, 'click', function() {

                routeAlternative1.spliceWaypoints(routeAlternative1.getWaypoints().length - 1, 1, e.latlng);
                mapContainerRenpam.closePopup();
            });
            L.popup()
                .setContent(container)
                .setLatLng(e.latlng)
                .openOn(mapContainerRenpam);


        });

        $("#submitAlternative1").on('click', function(e) {
            routingAlternative1 = routeAlternative1.getWaypoints();
            $('#coordsAlternative1').val(JSON.stringify(routingAlternative1));
            // $("#myModal1").modal('hide');
        });
    });


    $('#myModal2').on('shown.bs.modal', function() {

        var initialCenter = [-8.751740, 115.149643];
        var initialZoom = 11.65;
        var googleStreet = L.tileLayer('https://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
            maxZoom: 20,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
            attribution: '&copy; <a href="https://maps.google.com/">Google Map <?= date('Y') ?></a> contributors'
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

        // StART MAP SECTION
        var mapContainerRenpam2 = L.map('mapG20Alternative2', {
            maxZoom: 20,
            minZoom: 1,
            zoomSnap: 0.25,
            zoomControl: false,
            layers: [googleHybrid]
        }).setView(initialCenter, initialZoom);

        var baseMaps = {
            "Google Map Street": googleStreet,
            "Google Map Satelite": googleSatelite,
            "Google Map Hybrid": googleHybrid,
            "Google Map Terrain": googleTerrain,
        };
        var overlayMaps = {};
        L.control.layers(baseMaps, overlayMaps, {
            position: 'topleft'
        }).addTo(mapContainerRenpam2);
        L.control.zoom({
            position: 'bottomleft'
        }).addTo(mapContainerRenpam2);


        mapContainerRenpam2.invalidateSize();



        var routeAlternative2 = L.Routing.control({
            waypoints: arrayWaypoint,
            router: new L.Routing.osrmv1({
                language: 'en',
                profile: 'car'
            }),
            geocoder: L.Control.Geocoder.nominatim({})
        }).addTo(mapContainerRenpam2);


        function createButton(label, container) {
            var btn = L.DomUtil.create('button', '', container);
            btn.setAttribute('type', 'button');
            btn.innerHTML = label;
            return btn;
        }

        mapContainerRenpam2.on('click', function(e) {
            var container = L.DomUtil.create('div'),
                startBtn = createButton('Start from this location', container),
                destBtn = createButton('Go to this location', container);

            L.DomEvent.on(startBtn, 'click', function() {

                routeAlternative2.spliceWaypoints(0, 1, e.latlng);
                mapContainerRenpam2.closePopup();
            });
            L.DomEvent.on(destBtn, 'click', function() {

                routeAlternative2.spliceWaypoints(routeAlternative2.getWaypoints().length - 1, 1, e.latlng);
                mapContainerRenpam2.closePopup();
            });
            L.popup()
                .setContent(container)
                .setLatLng(e.latlng)
                .openOn(mapContainerRenpam2);


        });

        $("#submitAlternative2").on('click', function(e) {
            routingAlternative2 = routeAlternative2.getWaypoints();
            $('#coordsAlternative2').val(JSON.stringify(routingAlternative2));
            // $("#myModal2").modal('hide');
        });
    });

    $('#myModal3').on('shown.bs.modal', function() {

        var initialCenter = [-8.751740, 115.149643];
        var initialZoom = 11.65;
        var googleStreet = L.tileLayer('https://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
            maxZoom: 20,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
            attribution: '&copy; <a href="https://maps.google.com/">Google Map <?= date('Y') ?></a> contributors'
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

        // StART MAP SECTION
        var mapContainerRenpam3 = L.map('mapG20Alternative3', {
            maxZoom: 20,
            minZoom: 1,
            zoomSnap: 0.25,
            zoomControl: false,
            layers: [googleHybrid]
        }).setView(initialCenter, initialZoom);

        var baseMaps = {
            "Google Map Street": googleStreet,
            "Google Map Satelite": googleSatelite,
            "Google Map Hybrid": googleHybrid,
            "Google Map Terrain": googleTerrain,
        };
        var overlayMaps = {};
        L.control.layers(baseMaps, overlayMaps, {
            position: 'topleft'
        }).addTo(mapContainerRenpam3);
        L.control.zoom({
            position: 'bottomleft'
        }).addTo(mapContainerRenpam3);


        mapContainerRenpam3.invalidateSize();



        var routeAlternative3 = L.Routing.control({
            waypoints: arrayWaypoint,
            router: new L.Routing.osrmv1({
                language: 'en',
                profile: 'car'
            }),
            geocoder: L.Control.Geocoder.nominatim({})
        }).addTo(mapContainerRenpam3);


        function createButton(label, container) {
            var btn = L.DomUtil.create('button', '', container);
            btn.setAttribute('type', 'button');
            btn.innerHTML = label;
            return btn;
        }

        mapContainerRenpam3.on('click', function(e) {
            var container = L.DomUtil.create('div'),
                startBtn = createButton('Start from this location', container),
                destBtn = createButton('Go to this location', container);

            L.DomEvent.on(startBtn, 'click', function() {

                routeAlternative3.spliceWaypoints(0, 1, e.latlng);
                mapContainerRenpam3.closePopup();
            });
            L.DomEvent.on(destBtn, 'click', function() {

                routeAlternative3.spliceWaypoints(routeAlternative3.getWaypoints().length - 1, 1, e.latlng);
                mapContainerRenpam3.closePopup();
            });
            L.popup()
                .setContent(container)
                .setLatLng(e.latlng)
                .openOn(mapContainerRenpam3);


        });

        $("#submitAlternative3").on('click', function(e) {
            routingAlternative3 = routeAlternative3.getWaypoints();
            $('#coordsAlternative3').val(JSON.stringify(routingAlternative3));
            // $("#myModal2").modal('hide');
        });
    });


    $('#myModal4').on('shown.bs.modal', function() {

        var initialCenter = [-8.751740, 115.149643];
        var initialZoom = 11.65;
        var googleStreet = L.tileLayer('https://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
            maxZoom: 20,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
            attribution: '&copy; <a href="https://maps.google.com/">Google Map <?= date('Y') ?></a> contributors'
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

        // StART MAP SECTION
        var mapContainerRenpam4 = L.map('mapG20Alternative4', {
            maxZoom: 20,
            minZoom: 1,
            zoomSnap: 0.25,
            zoomControl: false,
            layers: [googleHybrid]
        }).setView(initialCenter, initialZoom);

        var baseMaps = {
            "Google Map Street": googleStreet,
            "Google Map Satelite": googleSatelite,
            "Google Map Hybrid": googleHybrid,
            "Google Map Terrain": googleTerrain,
        };
        var overlayMaps = {};
        L.control.layers(baseMaps, overlayMaps, {
            position: 'topleft'
        }).addTo(mapContainerRenpam4);
        L.control.zoom({
            position: 'bottomleft'
        }).addTo(mapContainerRenpam4);


        mapContainerRenpam4.invalidateSize();



        var routeAlternative4 = L.Routing.control({
            waypoints: arrayWaypoint,
            router: new L.Routing.osrmv1({
                language: 'en',
                profile: 'car'
            }),
            geocoder: L.Control.Geocoder.nominatim({})
        }).addTo(mapContainerRenpam4);


        function createButton(label, container) {
            var btn = L.DomUtil.create('button', '', container);
            btn.setAttribute('type', 'button');
            btn.innerHTML = label;
            return btn;
        }

        mapContainerRenpam4.on('click', function(e) {
            var container = L.DomUtil.create('div'),
                startBtn = createButton('Start from this location', container),
                destBtn = createButton('Go to this location', container);

            L.DomEvent.on(startBtn, 'click', function() {

                routeAlternative4.spliceWaypoints(0, 1, e.latlng);
                mapContainerRenpam4.closePopup();
            });
            L.DomEvent.on(destBtn, 'click', function() {

                routeAlternative4.spliceWaypoints(routeAlternative4.getWaypoints().length - 1, 1, e.latlng);
                mapContainerRenpam4.closePopup();
            });
            L.popup()
                .setContent(container)
                .setLatLng(e.latlng)
                .openOn(mapContainerRenpam4);


        });

        $("#submitAlternative4").on('click', function(e) {
            routingAlternative4 = routeAlternative4.getWaypoints();
            $('#coordsAlternative4').val(JSON.stringify(routingAlternative4));
            // $("#myModal2").modal('hide');
        });
    });
</script>