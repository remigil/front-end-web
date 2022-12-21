<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#">Data <?= $title; ?></a></li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Daftar <?= $title; ?></li>
    </ol>
</nav>
<!-- </div> -->
<div class="page">
    <button type="button" class="btn btn-primary waves-effect mb-2" id="btnTambah" data-bs-toggle="modal" data-bs-target=" .TambahSimkel">Tambah SIM Keliling</button>
    <div class="card">

        <div class="card-body">

            <table id="datatable" class="table dt-responsive w-100">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama SIM Keliling</th>
                        <th>Alamat</th>
                        <th>Jam Operasional</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

            </table>

        </div>
    </div>
</div>
<!-- End Page -->

<!-- ADD Modals -->
<div class="modal fade TambahSimkel" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="myLargeModalLabel" style="color:white">Tambah SIM Keliling</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row m-3">
                    <div class="col-md-12">
                        <form action="" class="form" id="form_tambah" method="post" enctype="multipart/form-data">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="name_sim_keliling" placeholder="Sim Keliling">
                                <label for="name_sim_keliling">Nama SIM Keliling</label>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" style="height: 100px" placeholder="Alamat" name="address"></textarea>
                                    <label for="">Alamat</label>
                                </div>
                                <div class="list-group" id="listAddress"></div>
                            </div>
                            <div class="col-md-6" style="display: none;">
                                <div class="material-textfield mb-3">
                                    <input style="width: 100%;" name="cordinate" placeholder="" type="text">
                                    <label class="labelmui">Coordinate</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="latitude" placeholder="Samsat">
                                        <label for="latitude">Latitude</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="longitude" placeholder="Samsat">
                                        <label for="longitude">Longitude</label>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-12 mt-3">
                                <div id="mapG20Kegiatan" style="height: 400px">
                                    <img src="<?php echo base_url(); ?>assets/pin.png" width="80" height="80" style="position: relative;z-index: 1000;left: 43%;top: 37%;">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="time" class="form-control" name="sim_keliling_open_time" placeholder="">
                                        <label for="sim_keliling_open_time">Jam Buka</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="time" class="form-control" name="sim_keliling_close_time" placeholder="">
                                        <label for="sim_keliling_close_time">Jam Tutup</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary waves-effect float-end" style="width: 25%; letter-spacing: 2px;">SIMPAN</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modals -->
<div class="modal fade UbahSimkel" id="myModalEdit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="myLargeModalLabel" style="color:white">Edit SIM Keliling</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row m-3">
                    <div class="col-md-12">
                        <form action="" class="form" id="form_edit" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="" id="id_simkel" type="text">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="name_sim_keliling" id="name_sim_keliling" placeholder="Sim Keliling">
                                <label for="">Nama SIM Keliling</label>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" style="height: 100px" placeholder="Alamat" id="address" name="address"></textarea>
                                    <label for="">Alamat</label>
                                </div>
                                <div class="list-group" id="listAddress"></div>
                            </div>
                            <div class="col-md-6" style="display: none;">
                                <div class="material-textfield mb-3">
                                    <input style="width: 100%;" name="cordinateEdit" id="cordinateEdit" placeholder="" type="text">
                                    <label class="labelmui">Coordinate</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="latitude" name="latitude" placeholder="Samsat">
                                        <label for="latitude">Latitude</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="longitude" name="longitude" placeholder="Samsat">
                                        <label for="longitude">Longitude</label>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-12 mt-3">
                                <div id="mapEdit" style="height: 400px">
                                    <img src="<?php echo base_url(); ?>assets/pin.png" width="80" height="80" style="position: relative;z-index: 1000;left: 43%;top: 37%;">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="time" class="form-control" name="sim_keliling_open_time" id="sim_keliling_open_time" placeholder="">
                                        <label for="">Jam Buka</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="time" class="form-control" name="sim_keliling_close_time" id="sim_keliling_close_time" placeholder="">
                                        <label for="">Jam Tutup</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary waves-effect float-end" id="btn_edit" style="width: 25%; letter-spacing: 2px;">SIMPAN</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Detail Modals -->
<div class="modal fade DetailSimkel" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="myLargeModalLabel" style="color:white">Detail SIM Keliling</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row m-3">
                    <div class="col-md-12">
                        <form action="" class="form" id="form_edit" method="post" enctype="multipart/form-data">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="name_sim_keliling" id="name_sim_keliling" placeholder="Sim Keliling">
                                <label for="name_sim_keliling">Nama SIM Keliling</label>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" style="height: 100px" placeholder="Alamat" id="address" name="address"></textarea>
                                    <label for="">Alamat</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="latitude" name="latitude" placeholder="Samsat">
                                        <label for="latitude">Latitude</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="longitude" name="longitude" placeholder="Samsat">
                                        <label for="longitude">Longitude</label>
                                    </div>
                                </div>

                            </div>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="time" class="form-control" name="sim_keliling_open_time" id="sim_keliling_open_time" placeholder="">
                                        <label for="sim_keliling_open_time">Jam Buka</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="time" class="form-control" name="sim_keliling_close_time" id="sim_keliling_close_time" placeholder="">
                                        <label for="sim_keliling_close_time">Jam Tutup</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script>
    $(document).ready(function() {
        $('.dropify').dropify();

        $('[name=cordinate]').val('-1.5707209, 115.4875168');
        var initialCenter = [-1.5707209, 115.4875168];
        var initialZoom = 5;
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
        var mapContainer = L.map('mapG20Kegiatan', {
            maxZoom: 20,
            minZoom: 1,
            zoomSnap: 0.25,
            zoomControl: false,
            layers: [googleStreet]
        }).setView(initialCenter, initialZoom);

        var baseMaps = {
            "Google Map Street": googleStreet,
            "Google Map Satelite": googleSatelite,
            "Google Map Hybrid": googleHybrid,
            "Google Map Terrain": googleTerrain,
        };
        var overlayMaps = {};
        L.control.layers(baseMaps, overlayMaps, {
            position: 'topright'
        }).addTo(mapContainer);
        L.control.zoom({
            position: 'bottomleft'
        }).addTo(mapContainer);

        $('#myModal').on('shown.bs.modal', function() {
            mapContainer.invalidateSize();

            $('.dropify').dropify();



            let countlist = 0;
            let list = "";
            $('[name=address]').on("change", function(e) {
                // console.log(this.value);
                $.get(`https://nominatim.openstreetmap.org/search?format=json&q=${this.value}`, function(ress) {
                    console.log(ress);
                    countlist = 0;
                    list = "";
                    ress.forEach(el => {
                        countlist += 1;
                        list += `<a class="list-group-item" 
                        id="list${countlist}"   
                        data-alamat="${el.display_name}"
                        data-cords="${el.lat},${el.lon}" href="javascript:void(0)">${el.display_name}</a>`;
                        $('#listAddress').html(list);
                    });

                    if (list == "") {
                        countlist = 0;
                        list = "";
                        $('#listAddress').html(list);
                    }


                    for (let i = 0; i < ress.length; i++) {
                        $(`#list${i+1}`).click(function() {
                            var latlong = $(this).data('cords').split(',');
                            var latitude = parseFloat(latlong[0]);
                            var longitude = parseFloat(latlong[1]);

                            $("[name=latitude]").val(latitude);
                            $("[name=longitude]").val(longitude);

                            // console.log({a:latitude, b:longitude});
                            $('[name=address]').val($(this).data('alamat'));
                            $('[name=cordinate]').val($(this).data('cords'));
                            mapContainer.flyTo([latitude, longitude], 17);
                        });
                    }
                });

            });


            $('[name=cordinate]').on("change", function(e) {

                var cordLatLong = this.value.split(',');
                var cordLat = parseFloat(cordLatLong[0]);
                var corLong = parseFloat(cordLatLong[1]);

                // console.log({a:cordLat, b:corLong});

                $.get(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${cordLat}&lon=${corLong}`, function(data) {
                    $('[name=address]').val(data['display_name']);
                    mapContainer.flyTo([cordLat, corLong], 17);
                });
            });


            mapContainer.on("dragend", function(e) {

                var corLat = mapContainer.getCenter()['lat'];
                var corLng = mapContainer.getCenter()['lng'];
                var cord = `${corLat},${corLng}`;

                $("[name=latitude]").val(corLat);
                $("[name=longitude]").val(corLng);
                $('[name=cordinate]').val(cord);

                $.get(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${corLat}&lon=${corLng}`, function(data) {

                    $('[name=address]').val(data['display_name']);

                });

            });


        });

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

                url: '<?php echo base_url(); ?>masterdata/Simkeliling/serverSideTable',

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
                    data: 'name_sim_keliling'
                },
                {
                    data: 'address'
                },
                {
                    data: 'jam_operasional'
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

        // map pada form edit

        $(document).ready(function() {

            // $('[name=cordinateEdit]').val($('#latitude').val(samsat_lat) + ',' + $('#longitude').val(samsat_lng));
            var initialCenter = [-0.8458708, 118.8661073];
            var initialZoom = 5;
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
            var mapContainer = L.map('mapEdit', {
                maxZoom: 20,
                minZoom: 1,
                zoomSnap: 0.25,
                zoomControl: false,
                layers: [googleStreet]
            }).setView(initialCenter, initialZoom);

            var baseMaps = {
                "Google Map Street": googleStreet,
                "Google Map Satelite": googleSatelite,
                "Google Map Hybrid": googleHybrid,
                "Google Map Terrain": googleTerrain,
            };
            var overlayMaps = {};
            L.control.layers(baseMaps, overlayMaps, {
                position: 'topright'
            }).addTo(mapContainer);
            L.control.zoom({
                position: 'bottomleft'
            }).addTo(mapContainer);

            $('#myModalEdit').on('shown.bs.modal', function() {
                mapContainer.invalidateSize();

                let countlist = 0;
                let list = "";
                $('[name=address]').on("change", function(e) {
                    // console.log(this.value);
                    $.get(`https://nominatim.openstreetmap.org/search?format=json&q=${this.value}`, function(ress) {
                        console.log(ress);
                        countlist = 0;
                        list = "";
                        ress.forEach(el => {
                            countlist += 1;
                            list += `<a class="list-group-item" 
				id="list${countlist}"   
				data-alamat="${el.display_name}"
				data-cords="${el.lat},${el.lon}" href="javascript:void(0)">${el.display_name}</a>`;
                            $('#listAddress').html(list);
                        });

                        if (list == "") {
                            countlist = 0;
                            list = "";
                            $('#listAddress').html(list);
                        }


                        for (let i = 0; i < ress.length; i++) {
                            $(`#list${i+1}`).click(function() {
                                var latlong = $(this).data('cords').split(',');
                                var latitude = parseFloat(latlong[0]);
                                var longitude = parseFloat(latlong[1]);

                                $("[name=latitude]").val(latitude);
                                $("[name=longitude]").val(longitude);

                                // console.log({a:latitude, b:longitude});
                                $('[name=address]').val($(this).data('alamat'));
                                $('[name=cordinateEdit]').val($(this).data('cords'));
                                mapContainer.flyTo([latitude, longitude], 17);
                            });
                        }
                    });

                });


                $('[name=cordinateEdit]').on("change", function(e) {

                    var cordLatLong = this.value.split(',');
                    var cordLat = parseFloat(cordLatLong[0]);
                    var corLong = parseFloat(cordLatLong[1]);

                    // console.log({a:cordLat, b:corLong});

                    $.get(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${cordLat}&lon=${corLong}`, function(data) {
                        $('[name=address]').val(data['display_name']);
                        mapContainer.flyTo([cordLat, corLong], 17);
                    });
                });


                mapContainer.on("dragend", function(e) {

                    var corLat = mapContainer.getCenter()['lat'];
                    var corLng = mapContainer.getCenter()['lng'];
                    var cord = `${corLat},${corLng}`;

                    $("[name=latitude]").val(corLat);
                    $("[name=longitude]").val(corLng);
                    $('[name=cordinateEdit]').val(cord);

                    $.get(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${corLat}&lon=${corLng}`, function(data) {

                        $('[name=address]').val(data['display_name']);

                    });

                });


            });

            // var latlong11 =  $('[name=cordinate]').val().split(',');
            // var latitude11 = parseFloat(latlong11[0]);
            // var longitude11 = parseFloat(latlong11[1]); 
            // mapContainer.flyTo([latitude11, longitude11], 17);

        });

        $(".form").submit(function(e) {
            $("#overlay").fadeIn(300);
            e.preventDefault();
            var formData = new FormData($('.form')[0]);
            $.ajax({
                url: "<?php echo base_url(); ?>masterdata/Simkeliling/store",
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
                            $(".AddSim").modal('hide');
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

    function detail(id) {
        console.log(id);
        $.ajax({
            url: '<?= base_url() ?>masterdata/Simkeliling/detail',
            type: 'POST',
            data: {
                id_simkel: id
            },
            dataType: 'JSON',
            success: function(results) {

                $('.DetailSimkel,#name_sim_keliling').attr('disabled', true)
                $('.DetailSimkel,#address').attr('disabled', true)
                $('.DetailSimkel,#cordinateEdit').attr('disabled', true)
                $('.DetailSimkel,#latitude').attr('disabled', true)
                $('.DetailSimkel,#longitude').attr('disabled', true)
                $('.DetailSimkel,#sim_keliling_open_time').attr('disabled', true)
                $('.DetailSimkel,#sim_keliling_close_time').attr('disabled', true)

                $('.DetailSimkel,#name_sim_keliling').val(results.name_sim_keliling)
                $('.DetailSimkel,#address').val(results.address)
                $('.DetailSimkel,#latitude').val(results.latitude)
                $('.DetailSimkel,#longitude').val(results.longitude)
                $('.DetailSimkel,#sim_keliling_open_time').val(results.sim_keliling_open_time)
                $('.DetailSimkel,#sim_keliling_close_time').val(results.sim_keliling_close_time)
            }
        })
    }

    function detailEdit(id) {
        $.ajax({
            url: '<?= base_url() ?>masterdata/Simkeliling/detail',
            type: 'POST',
            data: {
                id_simkel: id
            },
            dataType: 'JSON',
            success: function(results) {
                $('.UbahSimkel,#name_sim_keliling').attr('disabled', false)
                $('.UbahSimkel,#address').attr('disabled', false)
                $('.UbahSimkel,#cordinateEdit').attr('disabled', false)
                $('.UbahSimkel,#latitude').attr('disabled', false)
                $('.UbahSimkel,#longitude').attr('disabled', false)
                $('.UbahSimkel,#sim_keliling_open_time').attr('disabled', false)
                $('.UbahSimkel,#sim_keliling_close_time').attr('disabled', false)

                $('#id_simkel').val(results.id)

                $('.UbahSimkel,#name_sim_keliling').val(results.name_sim_keliling)
                $('.UbahSimkel,#address').val(results.address)
                $('.UbahSimkel,#cordinateEdit').val((results.latitude) + ',' + (results.longitude))
                $('.UbahSimkel,#latitude').val(results.latitude)
                $('.UbahSimkel,#longitude').val(results.longitude)
                $('.UbahSimkel,#sim_keliling_open_time').val(results.sim_keliling_open_time)
                $('.UbahSimkel,#sim_keliling_close_time').val(results.sim_keliling_close_time)
            }
        })
    }

    function hapus(id) {
        Swal.fire({
            title: 'Apakah anda ingin menghapus data ini?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#C61318',
            cancelButtonColor: '#003A91',
            cancelButtonText: 'Batal',
            confirmButtonText: 'Hapus',
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "<?php echo base_url(); ?>masterdata/Simkeliling/hapus/",
                    type: "POST",
                    data: {
                        id_simkel: id
                    },
                    dataType: 'JSON',
                    success: function(data) {
                        $("#overlay").fadeOut(300);
                        if (data['status'] == true) {
                            Swal.fire(
                                `${data['message']}`,
                                '',
                                'success'
                            ).then(function() {
                                $(".TambahSimkel").modal('hide');
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
            }
        })
    }

    $('#btn_edit').on('click', function(e) {
        e.preventDefault()
        var formData = new FormData($('#form_edit')[0]);
        $.ajax({
            url: '<?= base_url() ?>masterdata/Simkeliling/updateSimkel',
            type: 'POST',
            data: formData,
            dataType: 'JSON',
            contentType: false,
            processData: false,
            success: function(results) {
                $("#overlay").fadeOut(300);
                if (results['status'] == true) {
                    Swal.fire(
                        `${results['message']}`,
                        '',
                        'success'
                    ).then(function() {
                        $(".UbahSimkel").modal('hide');
                        userDataTable.draw();
                    });
                } else {
                    Swal.fire(
                        `${results['message']}`,
                        '',
                        'error'
                    ).then(function() {});
                }
            }
        })
    })

    $('#btnTambah').on('click', function(e) {
        $('#form_tambah')[0].reset()
    })
    $('#btnEdit').on('click', function(e) {
        $('#form_edit')[0].reset()
    })
</script>