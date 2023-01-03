<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
    </ol>
</nav>
<!-- </div> -->
<div class="page">
    <div class="card" style="display: none;">
        <div class="card-body">
            <div class="row" style="width: 95%;">
                <div class="col-md-3">
                    <label for="waktu">Waktu</label>
                    <div id="reportrange" class="pull-right" style="border-radius: 0.25rem; height: 40px; background: #fff; cursor: pointer; padding: 10px 10px; border: 1px solid #ccc;">
                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
                        <span></span> <b class="caret"></b>
                    </div>
                    <input hidden type="date" id="startdate" name="startdate">
                    <input hidden type="date" id="enddate" name="enddate">
                </div>
                <div class="col-md-3 ">
                    <label class="form-label">Jenis Permasalahan</label>
                    <select class="form-select">
                        <option>Semua Permasalahan</option>
                        <option value="1">Tindak Kriminal</option>
                        <option value="2">Kecelakaan</option>
                        <option value="3">Bencana Alam</option>
                        <option value="4">Kemacetan</option>
                        <option value="999">Lainnya</option>
                    </select>
                </div>
                <div class="col-md-3 ">
                    <label class="form-label">POLDA</label>
                    <select name="polda_id" class="form-select" style="width:100%" id="polda" required>
                        <option selected value="">Pilih Polda</option>
                        <?php
                        foreach ($data['getPolda'] as $row) : ?>
                            <option value="<?php echo $row['id']; ?>"><?php echo $row['name_polda']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-3 ">
                    <label class="form-label">POLRES</label>
                    <select class="form-select" style="width:100%" id="polres" required>
                        <option>Pilih Polres</option>
						<?php
                        foreach ($data['getPolres'] as $row) : ?>
                            <option value="<?php echo $row['id']; ?>"><?php echo $row['name_polres']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="mt-3" id="mapG20Dashboard" style="width: 100%; height:50vh;"></div>
            <button class=" mt-3 btn btn-primary float-end"> Tampilkan </button>
        </div>
    </div>
    <!-- <a href="<?= base_url('troublespot/Tambah'); ?>"><button class="btn btn-sm btn-primary" type="button" style="height: 6vh;">Tambah Troublespot</button></a> -->
    <button type="button" class="btn btn-primary waves-effect mb-2" data-bs-toggle="modal" data-bs-target=".TambahTroublespot">Tambah Troublespot</button>
    <div class="card mt-2">
        <div class="card-body">
            <table id="datatable" class="table table-striped dt-responsive w-100">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama Polda</th>
                        <th>Nama Polres</th>
                        <th>Lokasi Kejadian</th>
                        <th style="width: 15%;">Waktu Pengkajian</th>
                        <th style="width: 15%;">Aksi</th>
                    </tr>
                </thead>

            </table>

        </div>
    </div>
</div>
<!-- End Page -->

<div class="modal fade TambahTroublespot" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Tambah Troublespot</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="form" id="form_tambah" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="<?= $csrf_name;?>" value="<?= $csrf_token;?>" style="display: none">
                    <div class="row">  
                        <div class="col-md-6">
                            <div class="material-textfield">
                                <input type="date" name="tanggal_pelaporan" id="" required>
                                <label for="" class="labelmui">Tanggal Pelaporan</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="material-textfield">
                                <input type="text" name="nama_pelapor" id="" required>
                                <label for="" class="labelmui">Nama Pelapor</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="material-selectfield">
                                <select name="polda_id" class="form-select" style="width:100%" id="poldamodal" required>
                                    <option selected value="">Pilih Polda</option>
                                    <?php
                                    foreach ($data['getPolda'] as $row) : ?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['name_polda']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <label for="" class="labelmui">Polda</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="material-selectfield" id="selectPolres">
                                <select name="polres_id" class="form-select" style="width:100%" id="polresmodal" required>
                                    <option>Pilih Polres</option>
									<?php
									foreach ($data['getPolres'] as $row) : ?>
										<option value="<?php echo $row['id']; ?>"><?php echo $row['name_polres']; ?></option>
									<?php endforeach; ?>
                                </select>
                                <label for="" class="labelmui">Polres</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="material-textfield">
                                <input type="text" name="penyebab_kemacetan" id="">
                                <label for="" class="labelmui">Penyebab Kemacetan</label>
                            </div>
                        </div>

                        <div class="col-md-6 ms-3">
                            <h5 class="font-size-14 mb-3"> Pilih Tampilan Marker</h5>
                            <div style="display: flex;">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" value="1" name="formRadios"
                                        id="formRadios1" checked>
                                    <label class="form-check-label" for="formRadios1">
                                        Titik Marker
                                    </label>
                                </div>
                                <div class="form-check ms-3">
                                    <input class="form-check-input" type="radio" value="2" name="formRadios"
                                        id="formRadios2">
                                    <label class="form-check-label" for="formRadios2">
                                        Route Marker
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div id="titikMarker"> 
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" style="height: 100px" placeholder="Alamat" id="lokasi_kejadian" name="lokasi_kejadian"></textarea>
                                    <label for="">Lokasi Kejadian</label>
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
                        </div>
                            
                        <div id="routeMarker">
                            <textarea hidden name="routeUtama" id="routeUtama" cols="30" rows="10"></textarea>
                        </div>
                                

                        <div class="col-md-12 mt-3 mb-3">
                            <div id="mapG20Kegiatan" style="height: 400px">
                                <img id="titikMarkerMap" src="<?php echo base_url(); ?>assets/pin.png" width="80" height="80" style="position: relative;z-index: 1000;left: 43%;top: 37%;">
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="material-textfield">
                                <input type="text" name="keterangan" id="">
                                <label for="" class=" labelmui">Keterangan</label>
                            </div>
                        </div>
                        <div class="col-md-12 ">
                            <div class="material-textfield">
                                <input type="text" name="permasalahan" id="">
                                <label for="" class=" labelmui">Permasalahan</label>
                            </div>
                        </div>
                        <div class="col-md-12 ">
                            <div class="material-textfield">
                                <input type="text" name="rekomendasi" id="">
                                <label for="" class=" labelmui">rekomendasi</label>
                            </div>
                        </div>
                        <div class="col-md-12 ">
                            <div class="material-textfield">
                                <input type="text" name="tindakan" id="">
                                <label for="" class=" labelmui">Tindakan</label>
                            </div>
                        </div>
                        <div class="col-md-12 ">
                            <div class="material-textfield">
                                <input type="text" name="hasil_dicapai" id="">
                                <label for="" class=" labelmui">Hasil yang dicapai</label>
                            </div>
                        </div>

                    </div>



                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary waves-effect float-end me-4" style="width: 25%; letter-spacing: 2px;">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>

    let arrayWaypointUtama = [];
    var routeAlternativeUtama;

    $(document).ready(function() {
        $('#tripon').DataTable();


        var initialCenter = [-2.548926, 118.0148634];
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
            maxZoom: 19,
            minZoom: 1,
            zoomControl: false,
            layers: [googleHybrid]
        }).setView(initialCenter, initialZoom);

        var markerClusterGroup = L.markerClusterGroup();
        var icon = L.icon({
            iconUrl: 'http://tourbanyuwangi.com/wp-content/uploads/2018/05/map.png',
            iconSize: [80, 80], // size of the icon
        }); 



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
            
            // $("#titikMarker").hide();
            // $("#titikMarkerMap").hide(); 
            $("#routeMarker").hide();
            $("[name=lokasi_kejadian]").val('');
            $("[name=cordinate]").val('');
            $("[name=latitude]").val('');
            $("[name=longitude]").val(''); 
            // $("[name=formRadios]").prop('checked', false); 

            // $('[name=cordinate]').val('-1.5707209, 115.4875168');
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

            var mapContainerMarker = L.map('mapG20Kegiatan', {
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
            }).addTo(mapContainerMarker);
            L.control.zoom({
                position: 'bottomleft'
            }).addTo(mapContainerMarker); 



            $("[name=formRadios]").on("change", function(e) { 
                $("[name=lokasi_kejadian]").val('');
                $("[name=cordinate]").val('');
                $("[name=latitude]").val(null);
                $("[name=longitude]").val(null);
                $('#routeUtama').val('');
                
                if (this.value == '1') {
                     
                    $("#titikMarker").show();
                    $("#titikMarkerMap").show();
                    $("#routeMarker").hide();
                    mapContainerMarker.invalidateSize();

                    if(routeAlternativeUtama){
                        routeAlternativeUtama.remove();         
                    }
                }else{
                    $("#titikMarker").hide();
                    $("#titikMarkerMap").hide();
                    $("#routeMarker").show();
                    mapContainerMarker.invalidateSize();

                    routeAlternativeUtama = L.Routing.control({
                        waypoints: arrayWaypointUtama,
                        router: new L.Routing.osrmv1({
                            language: 'en',
                            profile: 'car'
                        }),
                        geocoder: L.Control.Geocoder.nominatim({})
                    }).addTo(mapContainerMarker);

                    function createButton(label, container) {
                        var btn = L.DomUtil.create('button', '', container);
                        btn.setAttribute('type', 'button');
                        btn.innerHTML = label;
                        return btn;
                    }

                    mapContainerMarker.on('click', function(e) {
                        var container = L.DomUtil.create('div'),
                            startBtn = createButton('Start from this location', container),
                            destBtn = createButton('Go to this location', container);

                        L.DomEvent.on(startBtn, 'click', function() {

                            routeAlternativeUtama.spliceWaypoints(0, 1, e.latlng);
                            mapContainerMarker.closePopup();
                        });
                        L.DomEvent.on(destBtn, 'click', function() {

                            routeAlternativeUtama.spliceWaypoints(routeAlternativeUtama.getWaypoints().length - 1, 1, e.latlng);
                            mapContainerMarker.closePopup();

                            routingAlternativeUtama = routeAlternativeUtama.getWaypoints();
                            $('#routeUtama').val(JSON.stringify(routingAlternativeUtama));
                        });
                        L.popup()
                        .setContent(container)
                        .setLatLng(e.latlng)
                        .openOn(mapContainerMarker); 
                    });
                }

                
                mapContainerMarker.flyTo([-1.5707209, 115.4875168], 5);
            });

            

            

            $('.dropify').dropify();



            let countlist = 0;
            let list = "";
            $('[name=lokasi_kejadian]').on("change", function(e) {
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

                    $('#listAddress').show();

                    for (let i = 0; i < ress.length; i++) {
                        $(`#list${i+1}`).click(function() {
                            var latlong = $(this).data('cords').split(',');
                            var latitude = parseFloat(latlong[0]);
                            var longitude = parseFloat(latlong[1]);

                            $("[name=latitude]").val(latitude);
                            $("[name=longitude]").val(longitude);

                            // console.log({a:latitude, b:longitude});
                            $('[name=lokasi_kejadian]').val($(this).data('alamat'));
                            $('[name=cordinate]').val($(this).data('cords'));
                            mapContainerMarker.flyTo([latitude, longitude], 17);
                            $('#listAddress').hide();
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
                    $('[name=lokasi_kejadian]').val(data['display_name']);
                    mapContainerMarker.flyTo([cordLat, corLong], 17);
                });
            });


            mapContainerMarker.on("dragend", function(e) {

                var corLat = mapContainerMarker.getCenter()['lat'];
                var corLng = mapContainerMarker.getCenter()['lng'];
                var cord = `${corLat},${corLng}`;

                $("[name=latitude]").val(corLat);
                $("[name=longitude]").val(corLng);
                $('[name=cordinate]').val(cord);

                $.get(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${corLat}&lon=${corLng}`, function(data) {

                    $('[name=lokasi_kejadian]').val(data['display_name']);

                });

            });


        });

        // City change
        $('#polda').change(function() {
            var id = $(this).val();
            console.log(id);
            $.ajax({
                url: '<?= base_url() ?>troublespot/Troublespot/GetPolres/' + id,
                method: 'post',
                dataType: 'json',
                success: function(response) {

                    // Remove options 
                    $('#polres').find('option').not(':first').remove();

                    // Add options
                    $.each(response, function(index, data) {
                        $('#polres').append(`<option value=" ${data.id} ">${data.name_polres}</option>`);
                    });
                }
            });
        });

        $("#selectPolres").hide();
        $('#poldamodal').change(function() {
            var id = $(this).val();
            console.log(id);
            $.ajax({
                url: '<?= base_url() ?>troublespot/Troublespot/GetPolres/' + id,
                method: 'post',
                dataType: 'json',
                success: function(response) {
                    $("#selectPolres").show();

                    // Remove options 
                    $('#polresmodal').find('option').not(':first').remove();

                    // Add options
                    $.each(response, function(index, data) {
                        $('#polresmodal').append(`<option value=" ${data.id} ">${data.name_polres}</option>`);
                    });
                }
            });
        });
        $('.dropify').dropify();

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

                url: '<?php echo base_url(); ?>troublespot/Troublespot/serverSideTable',

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
                    data: 'polda_id'
                },
                {
                    data: 'polres_id'
                },
                {
                    data: 'location'
                },
                {
                    data: 'created_at'
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

        $(".form").submit(function(e) {
            $("#overlay").fadeIn(300);
            e.preventDefault();
            var formData = new FormData($('.form')[0]);
             

            if($("[name=latitude]").val() != null && $("[name=longitude]").val() != ''){
                $('#routeUtama').val('');
            }else{
                $("[name=lokasi_kejadian]").val('');
                $("[name=cordinate]").val('');
                $("[name=latitude]").val(null);
                $("[name=longitude]").val(null);

                routingAlternativeUtama = routeAlternativeUtama.getWaypoints();
                $('#routeUtama').val(JSON.stringify(routingAlternativeUtama));
            }

            $.ajax({
                url: "<?php echo base_url(); ?>troublespot/Troublespot/store",
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
                            $(".TambahTroublespot").modal('hide');
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

        var start = moment().subtract(29, 'days');
        var end = moment();

        function cb(start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            $('#startdate').val(start.format('YYYY-MM-DD'));
            $('#enddate').val(end.format('YYYY-MM-DD'));
        }

        $('#reportrange').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
                'Hari Ini': [moment(), moment()],
                'Kemarin': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                '7 Hari Kemarin': [moment().subtract(6, 'days'), moment()],
                '30 Hari Kemarin': [moment().subtract(29, 'days'), moment()],
                'Bulan Ini': [moment().startOf('month'), moment().endOf('month')],
                'Bulan Kemarin': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
                'Tahun Ini': [moment().startOf('year'), moment().endOf('year')],
                'Tahun Lalu': [moment().subtract(1, 'year').startOf('year'), moment().subtract(1, 'year').endOf('year')],
            }
        }, cb);

        cb(start, end);

    });

    
    // Conditional select Polda Polres
</script>
