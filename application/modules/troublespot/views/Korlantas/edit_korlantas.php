<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Edit <?= $title; ?></li>
    </ol>
</nav>
<!-- </div> -->

<div class="page">
    <div class="card">
        
        <div class="card-body">
        <form class="form" method="post" enctype="multipart/form-data">
            <input type="hidden" name="<?= $csrf_name;?>" value="<?= $csrf_token;?>" style="display: none">
            <input hidden name="id" value="<?php echo $data['getDetail']['data']['id'];?>" type="text">
            <div class="row">
                    <div class="col-md-12">
                        <a href="<?= base_url('troublespot/Troublespot'); ?>" class="btn btn-primary waves-effect float-end ms-4" style="width: 25%;">Kembali</a> 
                    </div>
                            <div class="col-md-6">
                                <div class="material-textfield">
                                    <input style="width: 100%;" name="no_ts" value="<?php echo $data['getDetail']['data']['no_ts'];?>" type="text">
                                    <label for="" class="labelmui">No. TS</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="material-textfield">
                                    <input required style="width: 100%;" name="tanggal_pelaporan" id="datepicker" class="form-control" value="<?php echo substr($data['getDetail']['data']['report_date'],0,10);?>" type="date" >
                                    <label for="" class="labelmui">Tanggal Pelaporan</label>
                            </div>    
                    </div>
                    <div class="col-md-6">
                        <div class="material-textfield">
                            <input required style="width: 100%;" name="nama_pelapor" value="<?php echo $data['getDetail']['data']['reporter_name'];?>" type="text">
                            <label for="" class="labelmui">Nama Pelapor</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="material-selectfield">
                        <select class="form-select" name="polda_id" id="polda_id" >
							<option selected value="<?= $data['getDetail']['data']['polda_id']?>"><?= $data['getDetail']['data']['polda']['name_polda']?></option>
							<?php
							foreach ($data['getPolda'] as $row) : ?>
								<option value="<?php echo $row['id']; ?>"><?php echo $row['name_polda']; ?></option>
							<?php endforeach; ?>
                        </select>
                            <label for="" class="labelmui">Polda</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="material-textfield">
                            <input style="width: 100%;" name="penyebab_kemacetan" value="<?php echo $data['getDetail']['data']['traffic_reason'];?>" type="text">
                            <label for="" class="labelmui">Penyebab Kemacetan</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="material-selectfield">
                        <select class="form-select" name="polres" id="polres">
                        <option selected value="<?= $data['getDetail']['data']['polres_id']?>"><?= $data['getDetail']['data']['polre']['name_polres']?></option>
                        	<?php
							foreach ($data['getPolda'] as $row) : ?>
								<option value="<?php echo $row['id']; ?>"><?php echo $row['name_polda']; ?></option>
							<?php endforeach; ?>
                        
                        </select>
                            <label for="" class="labelmui">Polres</label>
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
                
                <div id="titikMarker" class="row"> 
                    <div class="col-md-12">
                        <div class="material-textfield">
                            <input style="width: 100%;" name="lokasi_kejadian" value="<?php echo $data['getDetail']['data']['location'];?>" type="text">
                            <label for="" class="labelmui">Lokasi Kejadian</label>
                        </div>
                        <div class="list-group" id="listAddress"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="material-textfield">
                            <input style="width: 100%;" name="latitude" value="<?php echo $data['getDetail']['data']['latitude'];?>" type="text">
                            <label for="" class="labelmui">Latitude</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="material-textfield">
                            <input style="width: 100%;" name="longitude" value="<?php echo $data['getDetail']['data']['longitude'];?>" type="text">
                            <label for="" class="labelmui">Longitude</label>
                        </div>
                    </div>
                </div>

                <textarea hidden name="routeUtama" id="routeUtama" cols="30" rows="10"><?php echo json_encode($data['getDetail']['data']['route']);?></textarea>
                <div id="routeMarker">
                </div>
                
                <div class="col-md-12">
                    <div class="mt-2 mb-3 rounded" id="mapG20Dashboard" style="height: 50vh; width:100%">
                        <img id="titikMarkerMap" src="<?php echo base_url(); ?>assets/pin.png" width="80" height="80" style="position: relative;z-index: 1000;left: 43%;top: 37%;">
                    </div>
                </div> 

                <div class="col-md-12">
                    <div class="material-textfield">
                        <input style="width: 100%;" name="keterangan" value="<?php echo $data['getDetail']['data']['desc'];?>" type="text">
                        <label for="" class="labelmui">Keterangan</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="material-textfield">
                        <input style="width: 100%;" name="permasalahan" value="<?php echo $data['getDetail']['data']['problem'];?>" type="text">
                        <label for="" class="labelmui">Permasalahan</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="material-textfield">
                        <input style="width: 100%;" name="rekomendasi" value="<?php echo $data['getDetail']['data']['recommendation'];?>" type="text">
                        <label for="" class="labelmui">Rekomendasi</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="material-textfield">
                        <input style="width: 100%;" name="tindakan" value="<?php echo $data['getDetail']['data']['action'];?>" type="text">
                        <label for="" class="labelmui">Tindakan</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="material-textfield">
                        <input style="width: 100%;" name="hasil_dicapai" value="<?php echo $data['getDetail']['data']['result'];?>" type="text">
                        <label for="" class="labelmui">Hasil yang Dicapai</label>
                    </div>
                </div>
                
            <div class="col-md-12 mb-3">
            <button type="submit" class=" btn btn-primary waves-effect float-end ms-4" style="width: 25%;">Simpan</button>
            <a href="javascript(0);" id="delete" data-id="<?php echo $data['getDetail']['data']['id'];?>" class=" btn btn-danger waves-effect float-end" style="width: 25%;">Hapus<i class="mdi mdi-trash-can-outline"></i></a>
            </div>
            </div>
            </form>
        </div>

    </div>
</div>
<!-- End Page -->


<script>
    let arrayWaypointUtama = [];
    var routeAlternativeUtama;

    $(document).ready(function() {
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
            position: 'topleft'
        }).addTo(mapContainer);
        L.control.zoom({
            position: 'bottomleft'
        }).addTo(mapContainer);

        
        <?php if ($data['getDetail']['data']['route'] != null || $data['getDetail']['data']['route'] != '') {?> 
            $("#titikMarker").hide();
            $("#titikMarkerMap").hide();
            $("#routeMarker").show();
            $("#formRadios2").prop('checked', true); 
            mapContainer.invalidateSize();

            routeAlternativeUtama = L.Routing.control({
                waypoints: JSON.parse($('#routeUtama').val()),
                router: new L.Routing.osrmv1({
                    language: 'en',
                    profile: 'car'
                }),
                geocoder: L.Control.Geocoder.nominatim({})
            }).addTo(mapContainer); 
        <?php }else if ($data['getDetail']['data']['latitude'] != null || $data['getDetail']['data']['longitude'] != null){ ?>
            var latt = parseFloat($("[name=latitude]").val());
            var longg = parseFloat($("[name=longitude]").val());
            mapContainer.flyTo([latt, longg], 17);
        <?php } ?>

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
                mapContainer.invalidateSize();

                if(routeAlternativeUtama){
                    routeAlternativeUtama.remove();         
                } 
            }else{
                $("#titikMarker").hide();
                $("#titikMarkerMap").hide();
                $("#routeMarker").show();
                mapContainer.invalidateSize();

                routeAlternativeUtama = L.Routing.control({
                    waypoints: arrayWaypointUtama,
                    router: new L.Routing.osrmv1({
                        language: 'en',
                        profile: 'car'
                    }),
                    geocoder: L.Control.Geocoder.nominatim({})
                }).addTo(mapContainer);  
            }

            
            mapContainer.flyTo([-1.5707209, 115.4875168], 5);
        });



        function createButton(label, container) {
            var btn = L.DomUtil.create('button', '', container);
            btn.setAttribute('type', 'button');
            btn.innerHTML = label;
            return btn;
        }

        mapContainer.on('click', function(e) {
            var container = L.DomUtil.create('div'),
                startBtn = createButton('Start from this location', container),
                destBtn = createButton('Go to this location', container);

            L.DomEvent.on(startBtn, 'click', function() {

                routeAlternativeUtama.spliceWaypoints(0, 1, e.latlng);
                mapContainer.closePopup();
            });
            L.DomEvent.on(destBtn, 'click', function() {

                routeAlternativeUtama.spliceWaypoints(routeAlternativeUtama.getWaypoints().length - 1, 1, e.latlng);
                mapContainer.closePopup();

                routingAlternativeUtama = routeAlternativeUtama.getWaypoints();
                $('#routeUtama').val(JSON.stringify(routingAlternativeUtama));
            });
            L.popup()
            .setContent(container)
            .setLatLng(e.latlng)
            .openOn(mapContainer); 
        });



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
                        mapContainer.flyTo([latitude, longitude], 17);
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

                $('[name=lokasi_kejadian]').val(data['display_name']);

            });

        });



        $(".form").submit(function(e) {
            $("#overlay").fadeIn(300);
            e.preventDefault(); 
             
            
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

            var formData = new FormData($('.form')[0]); 
            $.ajax({
                url: "<?php echo base_url();?>troublespot/Troublespot/storeEdit",
                method: "POST",
                data: formData,
                dataType: 'JSON',
                contentType: false,
                processData: false,  
                success: function (data) {
                    $("#overlay").fadeOut(300);
                    if(data['status'] == true){
                        Swal.fire(
                        `${data['message']}`, 
                        '',
                        'success'
                        ).then(function() {  
                            window.location.href = "<?php echo base_url();?>troublespot/Troublespot";
                        }); 
                    }else{
                        Swal.fire(
                        `${data['message']}`, 
                        '',
                        'error'
                        ).then(function() { 
                        });
                    } 
                }
            }); 
        });
    });

    
    

    $("#delete").on('click', function(e) {
        $("#overlay").fadeIn(300);
        e.preventDefault();  
        $.ajax({
            url: "<?php echo base_url();?>troublespot/Troublespot/delete",
            method: "POST",
            data: {
                "id": $(this).data("id"),
            },
            dataType: 'JSON',
            // contentType: false,
            // processData: false,  
            success: function (data) {
                $("#overlay").fadeOut(300);
                if(data['status'] == true){
                    Swal.fire(
                    `${data['message']}`, 
                    '',
                    'success'
                    ).then(function() {  
                        window.location.href = "<?php echo base_url();?>troublespot/Troublespot";
                    }); 
                }else{
                    Swal.fire(
                    `${data['message']}`, 
                    '',
                    'error'
                    ).then(function() { 
                    });
                } 
            }
        }); 
    });
</script>
