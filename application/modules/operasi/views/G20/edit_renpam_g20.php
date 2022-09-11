<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item">Rencana Pengawalan</li>
        <li class="breadcrumb-item">Detail Rencana Pengawalan</li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Edit</li>
    </ol>
</nav>

<div class="page">
    <div class="card">
        <div class="card-body">
            <form class="form" method="post" enctype="multipart/form-data"> 
                <input hidden name="id" value="<?php echo $data['getDetail']['data']['id'];?>" type="text">
                <div class="row">
                    <div class="col-md-6">
                        <p class="fs-4 fw-bold">EDIT RENCANA PENGAWALAN</p>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class=" btn btn-primary waves-effect float-end ms-4" style="width: 25%;">Simpan</button>
                        <a href="javascript(0);" id="delete" data-id="<?php echo $data['getDetail']['data']['id'];?>" class=" btn btn-danger waves-effect float-end" style="width: 25%;">Hapus<i class="mdi mdi-trash-can-outline"></i></a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                    <div class="row">  
                            <div class="col-md-6">
                                <div class="material-selectfield mb-3">
                                    <select required name="id_account[]" id="id_account" style="height: 200px;" multiple> 
                                        <?php foreach($data['getAccount'] as $row): ?> 
                                            <option 
                                                <?php foreach ($data['getDetail']['data']['accounts'] as $rowSelect) : ?>
                                                    <?php echo ($rowSelect['name_account'] == $row['name_account'] ? 'selected' : '');?>  
                                                <?php endforeach; ?>
                                                value="<?php echo $row['id']; ?>"><?php echo $row['name_account']; ?>
                                            </option>
                                        <?php endforeach; ?> 
                                    </select>
                                    <label style="margin-top: -20px;font-size: 14px;" class="labelmui">Tim</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="material-textfield mb-3">
                                    <input required style="width: 100%;" name="date" id="datepicker" class="form-control" value="<?php echo $data['getDetail']['data']['date'];?>" type="date" >
                                    <label class="labelmui">Tanggal</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="material-selectfield mb-3">
                                    <select required name="id_vip[]" id="id_vip" style="height: 200px" multiple> 
                                        <?php foreach($data['getVip'] as $row): ?> 
                                            <option 
                                                <?php foreach ($data['getDetail']['data']['vips'] as $rowSelect) : ?>
                                                    <?php echo ($rowSelect['name_vip'] == $row['name_vip'] ? 'selected' : '');?>  
                                                <?php endforeach; ?>
                                                value="<?php echo $row['id']; ?>"><?php echo $row['name_vip']; ?>
                                            </option>
                                        <?php endforeach; ?> 
                                    </select>
                                    <label style="margin-top: -20px;font-size: 14px;" class="labelmui">VIP</label>
                                </div>
                            </div>  
                            <div class="col-md-6">
                                <div class="material-textfield mb-3">
                                    <input required type="text" name="startTime" class="form-control" id="startTime" value="<?php echo $data['getDetail']['data']['start_time'];?>" data-default="<?php echo date('H:i')?>"> 
                                    <label class="labelmui">Waktu Mulai</label>
                                </div>
                            </div>
                            <div class="col-md-6"> 
                                <div class="material-selectfield mb-3">
                                    <select name="subjek" class="form-select">
                                        <option <?php echo ($data['getDetail']['data']['type_renpam'] == null ? 'selected' : '');?> value="">Pilih Subjek</option> 
                                        <option <?php echo ($data['getDetail']['data']['type_renpam'] == '1' ? 'selected' : '');?> value="1">Patroli</option> 
                                        <option <?php echo ($data['getDetail']['data']['type_renpam'] == '2' ? 'selected' : '');?> value="2">Pengawalan</option> 
                                        <option <?php echo ($data['getDetail']['data']['type_renpam'] == '3' ? 'selected' : '');?> value="3">Penjagaan</option> 
                                        <option <?php echo ($data['getDetail']['data']['type_renpam'] == '4' ? 'selected' : '');?> value="4">Pengaturan</option> 
                                    </select>
                                    <label class="labelmui">Subjek</label>
                                </div>
                            </div>
                            <div class="col-md-6"></div>
                            <!-- <div class="col-md-6">
                                <div class="material-textfield mb-3">
                                    <input required type="text" name="endTime" class="form-control" id="endTime" value="<?php echo date('H:i')?>" data-default="<?php echo date('H:i')?>"> 
                                    <label class="labelmui">Waktu Selesai</label>
                                </div>
                            </div> -->
                            <div class="col-md-12">
                                <div class="material-textfield mb-3">
                                    <input required style="width: 100%;" name="instruksi" placeholder="" value="<?php echo $data['getDetail']['data']['name_renpam'];?>" type="text">
                                    <label class="labelmui">Instruksi</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <a href="javascript:void(0);" class="btn btn-primary waves-effect" data-bs-toggle="modal" data-bs-target="#myModal"><?php echo ($data['getDetail']['data']['route_alternatif_1'] > 0 ? 'Edit' : 'Add');?> Rute Alternative</a>
                                <a href="javascript:void(0);" class="btn btn-primary waves-effect" data-bs-toggle="modal" data-bs-target="#myModal2"><?php echo ($data['getDetail']['data']['route_alternatif_2'] > 0 ? 'Edit' : 'Add');?> Rute Escape</a>
                            </div>
                            
                            <input hidden style="width: 100%;" name="ruteawal" id="ruteawal" placeholder="" type="text">
                            <textarea hidden name="coordsAlternative1" id="coordsAlternative1" cols="30" rows="10"></textarea>
                            <textarea hidden name="coordsAlternative2" id="coordsAlternative2" cols="30" rows="10"></textarea>

                            <div class="col-md-12 mt-3">
                                <div id="mapG20Kegiatan" style="height: 700px"></div>
                            </div>
                        </div>  
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <a href="<?= base_url('operasi/Kegiatan'); ?>" class="btn btn-sm btn-primary float-end w-25" style="height:5vh ;">Kembali</a>
                </div>
            </form>
        </div>
    </div>



    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary ">
                    <h5 class="modal-title text-white" id="myLargeModalLabel">Tambah Instruksi</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">  
                    <div class="row">   
                        <div class="col-md-12">
                            <div id="mapG20Alternative1" style="height: 500px"></div> 
                        </div>
                    </div>   

                    <div class="col-md-6 mt-3 float-end">
                        <button class="btn btn-primary float-end" id="submitAlternative1">Simpan</button>
                    </div>
                
                </div>
            </div>
        </div>
    </div> 

    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary ">
                    <h5 class="modal-title text-white" id="myLargeModalLabel">Tambah Escape</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">  
                    <div class="row">   
                        <div class="col-md-12">
                            <div id="mapG20Alternative2" style="height: 500px"></div> 
                        </div>
                    </div>   

                    <div class="col-md-6 mt-3 float-end">
                        <button class="btn btn-primary float-end" id="submitAlternative2">Simpan</button>
                    </div>
                
                </div>
            </div>
        </div>
    </div> 


<script>
    var routingRenpam = new Array();
    var routingAlternative1 = new Array();
    let arrayWaypoint = []; 

    $(document).ready(function() {
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
 
        var initialCenter = [-8.451740, 115.089643];
        var initialZoom = 9.65;
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

        var route = '<?php echo json_encode($data['getDetail']['data']['route'])?>';  
        routingRenpam[0] = L.Routing.control({
            waypoints: JSON.parse(route),
            router: new L.Routing.osrmv1({
                language: 'en',
                profile: 'car'
            }),
            routeWhileDragging: false,
            geocoder: L.Control.Geocoder.nominatim({})
        }).addTo(mapContainer); 

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

                routingRenpam[0].spliceWaypoints(0, 1, e.latlng);
                mapContainer.closePopup();
            }); 
            L.DomEvent.on(destBtn, 'click', function() { 

                routingRenpam[0].spliceWaypoints(routingRenpam[0].getWaypoints().length - 1, 1, e.latlng);
                mapContainer.closePopup();
            });
            L.popup()
                .setContent(container)
                .setLatLng(e.latlng)
                .openOn(mapContainer);
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

  


        
    });

    $("#delete").on('click', function(e) {
        $("#overlay").fadeIn(300);
        e.preventDefault();  
        $.ajax({
            url: "<?php echo base_url();?>operasi/Kegiatan/delete",
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
                        window.location.href = "<?php echo base_url();?>operasi/Kegiatan";
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


    $('#myModal').on('shown.bs.modal', function() {    
        
        var initialCenter = [-8.451740, 115.089643];
        var initialZoom = 9.65;
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
            position: 'topleft'
        }).addTo(mapContainerRenpam);
        L.control.zoom({
            position: 'bottomleft'
        }).addTo(mapContainerRenpam); 


        mapContainerRenpam.invalidateSize(); 

        var routeDataAlternative1 = '<?php echo json_encode($data['getDetail']['data']['route_alternatif_1'])?>';  
        var resAlternative1 = JSON.parse(routeDataAlternative1);
        console.log(resAlternative1);
        if(resAlternative1.length > 0){
            arrayWaypoint = resAlternative1
        }

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

        $("#submitAlternative1").on('click', function(e){ 
            routingAlternative1 = routeAlternative1.getWaypoints();
            $('#coordsAlternative1').val(JSON.stringify(routingAlternative1));  
            $("#myModal").modal('hide');
        });
    });


    $('#myModal2').on('shown.bs.modal', function() {    
        
        var initialCenter = [-8.451740, 115.089643];
        var initialZoom = 9.65;
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
            position: 'topleft'
        }).addTo(mapContainerRenpam2);
        L.control.zoom({
            position: 'bottomleft'
        }).addTo(mapContainerRenpam2); 


        mapContainerRenpam2.invalidateSize(); 

        var routeDataAlternative2 = '<?php echo json_encode($data['getDetail']['data']['route_alternatif_2'])?>';  
        var resAlternative2 = JSON.parse(routeDataAlternative2);
        console.log(resAlternative2);
        if(resAlternative2.length > 0){
            arrayWaypoint = resAlternative2
        }

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

        $("#submitAlternative2").on('click', function(e){ 
            routingAlternative2 = routeAlternative2.getWaypoints();
            $('#coordsAlternative2').val(JSON.stringify(routingAlternative2));  
            $("#myModal2").modal('hide');
        });
    });

    $(".form").submit(function(e) {
        $("#overlay").fadeIn(300);
        e.preventDefault();  
        var formData = new FormData($('.form')[0]); 
        console.log(formData);

        $.ajax({
            url: "<?php echo base_url();?>operasi/Renpam/storeEdit",
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
                        window.location.href = "<?php echo base_url();?>operasi/Renpam";
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