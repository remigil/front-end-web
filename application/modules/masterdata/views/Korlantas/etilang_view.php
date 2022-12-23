<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#">Data <?= $title; ?></a></li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Daftar <?= $title; ?></li>
    </ol>
</nav>

<div class="row align-items-center">
    <div class="col-md-6">
        <div class="mb-3">
            <button type="button" class="btn btn-primary waves-effect mb-2" id="btnTambah" data-bs-toggle="modal" data-bs-target=".TambahETLE">Tambah ETLE</button>
        </div>
    </div>

    <div class="col-md-6">
        <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
            <div>
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo base_url() ?>masterdata/etilang" data-bs-toggle="tooltip" data-bs-placement="top" title="List"><i class="bx bx-list-ul"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="<?php echo base_url() ?>masterdata/etilang/thumbnail" data-bs-toggle="tooltip" data-bs-placement="top" title="Grid"><i class="bx bx-grid-alt"></i></a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>
<!-- end row -->

<!-- </div> -->
<div class="page">
    <div class="card">

        <div class="card-body">

            <table id="datatable" class="table dt-responsive w-100">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Type</th>
                        <th>Alamat IP</th>
                        <th>Alamat</th>
                        <th>Latitude</th>
                        <th>Longitude</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>

        </div>
    </div>
</div>
<!-- End Page -->


<!-- ADD Modals -->
<div class="modal fade TambahETLE" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="myLargeModalLabel" style="color:white">Tambah ETLE</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="form" id="form_tambah" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="tipeETLE" placeholder="ETLE">
                                <label for="tipeETLE">Type ETLE</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="jenisETLE" placeholder="ETLE">
                                <label for="jenisETLE">Jenis ETLE</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="ipETLE" placeholder="ETLE">
                                <label for="ipETLE">IP ETLE</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="merekETLE" placeholder="ETLE">
                                <label for="merekETLE">Merek ETLE</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="gatewayETLE" placeholder="ETLE">
                                <label for="gatewayETLE">Gateway ETLE</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="linkETLE" placeholder="ETLE">
                                <label for="linkETLE">Link ETLE</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input name="lokasiETLE" class="form-control" placeholder="Alamat" type="text" required>
                                <label for="address">Lokasi ETLE</label>
                            </div>
                            <div class="list-group" id="listAddress"></div>
                        </div>
                        <div class="col-md-6" style="display: none;">
                            <div class="form-floating mb-3">
                                <input style="width: 100%;" name="cordinate" class="form-control" type="text">
                                <label for="cordinate">Coordinate</label>
                            </div>
                        </div>
                        <div class="col-md-12 mt-3 mb-3">
                            <div id="mapG20Dashboard" style="height: 400px">
                                <img src="<?php echo base_url(); ?>assets/pin.png" width="80" height="80" style="position: relative;z-index: 1000;left: 43%;top: 37%;">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="vmsETLE" placeholder="ETLE">
                                <label for="vmsETLE">VMS ETLE</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="username" placeholder="ETLE">
                                <label for="username">Username</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="password" placeholder="ETLE">
                                <label for="password">Password</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="material-textfield">
                            <input type="hidden" name="status">
                            <label for="" class="labelmui">Status</label>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check" style="margin: -1vh 0 0 2.7vh">
                                <input class=" form-check-input" type="radio" name="flexRadioDefault" id="active" checked>
                                <label class="form-check-label" for="active">
                                    ACTIVE
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check" style="margin: -1vh 0 0 2.7vh">
                                <input class=" form-check-input" type="radio" name="flexRadioDefault" id="inactive">
                                <label class="form-check-label" for="inactive">
                                    INACTIVE
                                </label>
                            </div>
                        </div>
                    </div>

                    <button class="btn  btn-primary float-end" type="submit">SIMPAN</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Ubah Modals -->
<div class="modal fade UbahETLE" id="myModalEdit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="myLargeModalLabel" style="color:white">Ubah ETLE</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="form" id="form_edit" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="" id="id_etle" type="text">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="tipeETLE" name="tipeETLE" placeholder="ETLE">
                                <label for="tipeETLE">Type ETLE</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="jenisETLE" name="jenisETLE" placeholder="ETLE">
                                <label for="jenisETLE">Jenis ETLE</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="ipETLE" name="ipETLE" placeholder="ETLE">
                                <label for="ipETLE">IP ETLE</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="merekETLE" name="merekETLE" placeholder="ETLE">
                                <label for="merekETLE">Merek ETLE</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="gatewayETLE" name="gatewayETLE" placeholder="ETLE">
                                <label for="gatewayETLE">Gateway ETLE</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="linkETLE" name="linkETLE" placeholder="ETLE">
                                <label for="linkETLE">Link ETLE</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input name="lokasiETLE" class="form-control" id="lokasiETLE" placeholder="Alamat" type="text" required>
                                <label for="address">Lokasi ETLE</label>
                            </div>
                            <div class="list-group" id="listAddress"></div>
                        </div>
                        <div class="col-md-6" style="display: none;">
                            <div class="form-floating mb-3">
                                <input style="width: 100%;" name="cordinateEdit" id="cordinateEdit" class="form-control" type="text">
                                <label for="cordinate">Coordinate</label>
                            </div>
                        </div>
                        <div class="col-md-12 mt-3 mb-3">
                            <div id="mapEdit" style="height: 400px">
                                <img src="<?php echo base_url(); ?>assets/pin.png" width="80" height="80" style="position: relative;z-index: 1000;left: 43%;top: 37%;">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="vmsETLE" name="vmsETLE" placeholder="ETLE">
                                <label for="vmsETLE">VMS ETLE</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="username" name="username" placeholder="ETLE">
                                <label for="username">Username</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="password" name="password" placeholder="ETLE">
                                <label for="password">Password</label>
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

<!-- Detail Modals -->
<div class="modal fade DetailETLE" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="myLargeModalLabel" style="color:white">Detail ETLE</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="tipeETLE" name="tipeETLE" placeholder="ETLE">
                                <label for="tipeETLE">Type ETLE</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="jenisETLE" name="jenisETLE" placeholder="ETLE">
                                <label for="jenisETLE">Jenis ETLE</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="ipETLE" name="ipETLE" placeholder="ETLE">
                                <label for="ipETLE">IP ETLE</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="merekETLE" name="merekETLE" placeholder="ETLE">
                                <label for="merekETLE">Merek ETLE</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="gatewayETLE" name="gatewayETLE" placeholder="ETLE">
                                <label for="gatewayETLE">Gateway ETLE</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="linkETLE" name="linkETLE" placeholder="ETLE">
                                <label for="linkETLE">Link ETLE</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input name="lokasiETLE" id="lokasiETLE" class="form-control" placeholder="Alamat" type="text" required>
                                <label for="address">Lokasi ETLE</label>
                            </div>
                            <div class="list-group" id="listAddress"></div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="vmsETLE" name="vmsETLE" placeholder="ETLE">
                                <label for="vmsETLE">VMS ETLE</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="username" name="username" placeholder="ETLE">
                                <label for="username">Username</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="password" name="password" placeholder="ETLE">
                                <label for="password">Password</label>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>



<script>
    $(document).ready(function() {

        var userDataTable = $('#datatable').DataTable({

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

                url: '<?php echo base_url(); ?>masterdata/Etilang/serverSideTable',

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
                    data: 'type_etle'
                },
                {
                    data: 'ip_etle'
                },
                {
                    data: 'address_etle'
                },
                {
                    data: 'lat_etle'
                },
                {
                    data: 'lng_etle'
                },
                {
                    data: 'status_etle'
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

            }

        });



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
        var mapContainer = L.map('mapG20Dashboard', {
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

            let countlist = 0;
            let list = "";
            $('[name=lokasiETLE]').on("change", function(e) {
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

                            // console.log({a:latitude, b:longitude});
                            $('[name=lokasiETLE]').val($(this).data('alamat'));
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
                    $('[name=lokasiETLE]').val(data['display_name']);
                    mapContainer.flyTo([cordLat, corLong], 17);
                });
            });


            mapContainer.on("dragend", function(e) {

                var corLat = mapContainer.getCenter()['lat'];
                var corLng = mapContainer.getCenter()['lng'];
                var cord = `${corLat},${corLng}`;
                $('[name=cordinate]').val(cord);

                $.get(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${corLat}&lon=${corLng}`, function(data) {

                    $('[name=lokasiETLE]').val(data['display_name']);

                });

            });


        });

        $(".form").submit(function(e) {
            $("#overlay").fadeIn(300);
            e.preventDefault();
            var formData = new FormData($('.form')[0]);
            $.ajax({
                url: "<?php echo base_url(); ?>masterdata/Etilang/store",
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
                            $(".TambahETLE").modal('hide');
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
            $('[name=lokasiETLE]').on("change", function(e) {
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
                            $('[name=lokasiETLE]').val($(this).data('alamat'));
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
                    $('[name=lokasiETLE]').val(data['display_name']);
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

                    $('[name=lokasiETLE]').val(data['display_name']);

                });

            });


        });

        var latlong11 = $('[name=cordinateEdit]').val().split(',');
        var latitude11 = parseFloat(latlong11[0]);
        var longitude11 = parseFloat(latlong11[1]);
        mapContainer.flyTo([latitude11, longitude11], 17);

    });

    function detail(id) {
        $.ajax({
            url: '<?= base_url() ?>masterdata/Etilang/detailETLE/',
            type: 'POST',
            data: {
                id_etle: id
            },
            dataType: 'JSON',
            success: function(results) {

                $('.DetailETLE,#tipeETLE').attr('disabled', true)
                $('.DetailETLE,#jenisETLE').attr('disabled', true)
                $('.DetailETLE,#ipETLE').attr('disabled', true)
                $('.DetailETLE,#merekETLE').attr('disabled', true)
                $('.DetailETLE,#gatewayETLE').attr('disabled', true)
                $('.DetailETLE,#linkETLE').attr('disabled', true)
                $('.DetailETLE,#lokasiETLE').attr('disabled', true)
                $('.DetailETLE,#vmsETLE').attr('disabled', true)
                $('.DetailETLE,#username').attr('disabled', true)
                $('.DetailETLE,#password').attr('disabled', true)
                $('.DetailETLE,#status').attr('disabled', true)

                $('.DetailETLE,#tipeETLE').val(results.type_etle)
                $('.DetailETLE,#jenisETLE').val(results.jenis_etle)
                $('.DetailETLE,#ipETLE').val(results.ip_etle)
                $('.DetailETLE,#merekETLE').val(results.merek_etle)
                $('.DetailETLE,#gatewayETLE').val(results.gateway_etle)
                $('.DetailETLE,#linkETLE').val(results.link_etle)
                $('.DetailETLE,#lokasiETLE').val(results.address_etle)
                $('.DetailETLE,#vmsETLE').val(results.vms_etle)
                $('.DetailETLE,#username').val(results.username_etle)
                $('.DetailETLE,#password').val(results.password_etle)
                $('.DetailETLE,#status').val(results.status_etle)
            }
        })
    }

    function detailEdit(id) {
        $.ajax({
            url: '<?= base_url() ?>masterdata/Etilang/detailETLE',
            type: 'POST',
            data: {
                id_etle: id
            },
            dataType: 'JSON',
            success: function(results) {
                $('.UbahETLE,#tipeETLE').attr('disabled', false)
                $('.UbahETLE,#jenisETLE').attr('disabled', false)
                $('.UbahETLE,#ipETLE').attr('disabled', false)
                $('.UbahETLE,#merekETLE').attr('disabled', false)
                $('.UbahETLE,#gatewayETLE').attr('disabled', false)
                $('.UbahETLE,#linkETLE').attr('disabled', false)
                $('.UbahETLE,#lokasiETLE').attr('disabled', false)
                $('.UbahETLE,#vmsETLE').attr('disabled', false)
                $('.UbahETLE,#username').attr('disabled', false)
                $('.UbahETLE,#password').attr('disabled', false)
                $('.UbahETLE,#status').attr('disabled', false)

                $('#id_etle').val(results.id)

                $('.UbahETLE,#tipeETLE').val(results.type_etle)
                $('.UbahETLE,#jenisETLE').val(results.jenis_etle)
                $('.UbahETLE,#ipETLE').val(results.ip_etle)
                $('.UbahETLE,#merekETLE').val(results.merek_etle)
                $('.UbahETLE,#gatewayETLE').val(results.gateway_etle)
                $('.UbahETLE,#linkETLE').val(results.link_etle)
                $('.UbahETLE,#lokasiETLE').val(results.address_etle)
                $('.UbahETLE,#vmsETLE').val(results.vms_etle)
                $('.UbahETLE,#username').val(results.username_etle)
                $('.UbahETLE,#password').val(results.password_etle)
                $('.UbahETLE,#status').val(results.status_etle)
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
                    url: "<?php echo base_url(); ?>masterdata/Etilang/hapusETLE/",
                    type: "POST",
                    data: {
                        id_etle: id
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
                                $(".TambahETLE").modal('hide');
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
            url: '<?= base_url() ?>masterdata/Etilang/updateETLE',
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
                        $(".UbahETLE").modal('hide');
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