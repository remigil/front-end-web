<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item">Uraian Kegiatan</li>
        <li class="breadcrumb-item">Detail Uraian Kegiatan</li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Edit</li>
    </ol>
</nav>

<div class="page">
    <div class="card">
        <div class="card-body">
            <form class="form" method="post" enctype="multipart/form-data">
                <input hidden name="id" value="<?php echo $data['getDetail']['data']['id']; ?>" type="text">
                <div class="row">
                    <div class="col-md-6">
                        <p class="fs-4 fw-bold">EDIT URAIAN KEGIATAN</p>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class=" btn btn-primary waves-effect float-end ms-4" style="width: 25%;">Simpan</button>
                        <a href="javascript(0);" id="delete" data-id="<?php echo $data['getDetail']['data']['id']; ?>" class=" btn btn-danger waves-effect float-end" style="width: 25%;">Hapus<i class="mdi mdi-trash-can-outline"></i></a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="material-textfield mb-3">
                                    <input required style="width: 100%;" name="instruksi" placeholder="" value="<?php echo $data['getDetail']['data']['name_renpam']; ?>" type="text">
                                    <label class="labelmui">Uraian Kegiatan</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="material-selectfield mb-3">
                                    <select required name="id_account[]" id="id_account" style="height: 200px;" multiple>
                                        <?php foreach ($data['getAccount'] as $row) : ?>
                                            <option 
                                                <?php foreach ($data['getDetail']['data']['accounts'] as $rowSelect) : ?> 
                                                    <?php if ($rowSelect['name_account'] == $row['name_account']){?>
                                                        selected
                                                    <?php }else{ ?>

                                                    <?php } ?> 
                                                <?php endforeach; ?> 

                                                value="<?php echo $row['id']; ?>"><?php echo $row['name_account']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <label style="margin-top: -20px;font-size: 14px;" class="labelmui">Unit Pengawalan</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="material-textfield mb-3">
                                    <input required style="width: 100%;" name="date" id="datepicker" class="form-control" value="<?php echo $data['getDetail']['data']['date']; ?>" type="date">
                                    <label class="labelmui">Tanggal</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="material-selectfield mb-3">
                                    <select name="id_vip[]" id="id_vip" style="height: 200px" multiple>
                                        <?php foreach ($data['getVip'] as $row) : ?>
                                            <option 
                                                <?php foreach ($data['getDetail']['data']['vips'] as $rowSelect) : ?> 
                                                    <?php echo ($rowSelect['name_vip'] == $row['name_vip'] ? 'selected' : ''); ?>
                                                <?php endforeach; ?> 
                                                value="<?php echo $row['id']; ?>"><?php echo $row['name_vip']; ?> ( <?= $row['country_arrival_vip'] ?> )
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <label style="margin-top: -20px;font-size: 14px;" class="labelmui">VIP</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="material-textfield mb-3">
                                    <input required type="text" name="startTime" class="form-control" id="startTime" value="<?php echo $data['getDetail']['data']['start_time']; ?>" data-default="<?php echo date('H:i') ?>">
                                    <label class="labelmui">Waktu Mulai</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="material-selectfield mb-3">
                                    <select required name="subjek" id="select" >
                                        <option <?php echo ($data['getDetail']['data']['type_renpam'] == null ? 'selected' : ''); ?> value="">Pilih Subjek</option>
                                        <option <?php echo ($data['getDetail']['data']['type_renpam'] == '1' ? 'selected' : ''); ?> value="1">Patroli</option>
                                        <option <?php echo ($data['getDetail']['data']['type_renpam'] == '2' ? 'selected' : ''); ?> value="2">Pengawalan</option>
                                        <option <?php echo ($data['getDetail']['data']['type_renpam'] == '3' ? 'selected' : ''); ?> value="3">Penjagaan</option>
                                        <option <?php echo ($data['getDetail']['data']['type_renpam'] == '4' ? 'selected' : ''); ?> value="4">Pengaturan</option>
                                        <option <?php echo ($data['getDetail']['data']['type_renpam'] == '5' ? 'selected' : ''); ?> value="5">Penutupan</option>

                                    </select>
                                    <!-- <label class="labelmui">Subjek</label> -->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="material-textfield mb-3">
                                    <input style="width: 100%;" name="total_vehicle" placeholder="" value="<?php echo $data['getDetail']['data']['total_vehicle']; ?>" type="text">
                                    <label class="labelmui">Jumlah kendaraan yang dikawal</label>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="material-textfield mb-3">
                                    <input style="width: 100%;" name="order_renpam" placeholder="" value="<?php echo $data['getDetail']['data']['order_renpam']; ?>" type="text">
                                    <label class="labelmui">Urutan</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="material-textfield mb-3">
                                    <input required style="width: 100%;" name="title_start" value="<?php echo $data['getDetail']['data']['title_start']; ?>" placeholder="" type="text">
                                    <label class="labelmui">Lokasi Awal</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="material-textfield mb-3">
                                    <input style="width: 100%;" name="title_end" value="<?php echo $data['getDetail']['data']['title_end']; ?>" placeholder="" type="text">
                                    <label class="labelmui">Lokasi Akhir</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="material-textfield mb-3">
                                    <input type="text" name="note_kakor" value="<?php echo $data['getDetail']['data']['note_kakor']; ?>" class="form-control" id="note_kakor">
                                    <label class="labelmui">Instruksi Kakor</label>
                                </div>
                            </div>
                            <!-- <div class="col-md-6">
                                <div class="material-textfield mb-3">
                                    <input required type="text" name="endTime" class="form-control" id="endTime" value="<?php echo date('H:i') ?>" data-default="<?php echo date('H:i') ?>"> 
                                    <label class="labelmui">Waktu Selesai</label>
                                </div>
                            </div> -->


                            <div class="col-md-12">
                                <a href="javascript:void(0);" class="btn btn-primary waves-effect" style="background: #b935b9" data-bs-toggle="modal" data-bs-target="#myModal"><?php echo ($data['getDetail']['data']['route_alternatif_1'] > 0 ? 'Edit' : 'Add'); ?> Rute Alternative</a>
                                <a href="javascript:void(0);" class="btn btn-primary waves-effect" style="background: gray" data-bs-toggle="modal" data-bs-target="#myModal2"><?php echo ($data['getDetail']['data']['route_alternatif_2'] > 0 ? 'Edit' : 'Add'); ?> Rute Escape</a>
                                <a href="javascript:void(0);" class="btn btn-primary waves-effect" style="background: #000dda" data-bs-toggle="modal" data-bs-target="#myModal3"><?php echo ($data['getDetail']['data']['route_masyarakat'] > 0 ? 'Edit' : 'Add'); ?> Rute Masyarakat</a>
                                <a href="javascript:void(0);" class="btn btn-primary waves-effect" style="background: #bdbd0b" data-bs-toggle="modal" data-bs-target="#myModal4"><?php echo ($data['getDetail']['data']['route_umum'] > 0 ? 'Edit' : 'Add'); ?> Rute Umum</a>
                            </div>

                            <textarea hidden name="ruteawal" id="ruteawal" cols="5" rows="5"></textarea>
                            <textarea hidden name="coordsAlternative1" id="coordsAlternative1" cols="5" rows="5"></textarea>
                            <textarea hidden name="coordsAlternative2" id="coordsAlternative2" cols="5" rows="5"></textarea>
                            <textarea hidden name="coordsAlternative3" id="coordsAlternative3" cols="5" rows="5"></textarea>
                            <textarea hidden name="coordsAlternative4" id="coordsAlternative4" cols="5" rows="5"></textarea>


                            <textarea hidden name="dummyUtama" id="dummyUtama" cols="5" rows="5"><?php echo json_encode($data['getDetail']['data']['route'])?></textarea>


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



    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" data-bs-backdrop="static" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary ">
                    <h5 class="modal-title text-white" id="myLargeModalLabel">Tambah Alternative</h5>
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

    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" data-bs-backdrop="static" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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

    <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" data-bs-backdrop="static" aria-labelledby="myLargeModalLabel3" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary ">
                    <h5 class="modal-title text-white" id="myLargeModalLabel3">Tambah Route Masyarakat</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="mapG20Alternative3" style="height: 500px"></div>
                        </div>
                    </div>

                    <div class="col-md-6 mt-3 float-end">
                        <button class="btn btn-primary float-end" id="submitAlternative3">Simpan</button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" data-bs-backdrop="static" aria-labelledby="myLargeModalLabel4" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary ">
                    <h5 class="modal-title text-white" id="myLargeModalLabel4">Tambah Route Masyarakat</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="mapG20Alternative4" style="height: 500px"></div>
                        </div>
                    </div>

                    <div class="col-md-6 mt-3 float-end">
                        <button class="btn btn-primary float-end" id="submitAlternative4">Simpan</button>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <script>
        var routingRenpam = new Array();
        var routingAlternative1 = new Array();
        var routingAlternative2 = new Array();
        var routingAlternative3 = new Array();
        var routingAlternative4 = new Array();
        let arrayWaypoint = [];
        var ressFasumKhusus;

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

            $.ajax({
                type : "POST",
                url : "<?php echo base_url();?>operasi/renpam/getFasus", 
                data : { 
                    "radius" : 1, 
                }, 
                dataType : "JSON",
                success : function(result){  
                    ressFasumKhusus = result['data'];
                    console.log(ressFasumKhusus);

                    for (let i = 0; i < ressFasumKhusus.length; i++) { 
            
                        var latitudeFasum = parseFloat(ressFasumKhusus[i].fasum_lat);
                        var longitudeFasum = parseFloat(ressFasumKhusus[i].fasum_lng); 
                        L.marker([latitudeFasum,longitudeFasum], { icon: L.divIcon({
                            // className: 'location-pin',
                            html: `<img src="<?php echo url_api();?>fasum_khusus/${ressFasumKhusus[i].fasum_logo}" style="width: 40px; margin-top: -45px;margin-left: -18.5px;">`,
                            iconSize: [5, 5],
                            iconAnchor: [5, 10]
                            // iconAnchor: [10, 33]
                            }) }).bindPopup(`
                                <div class="text-center" style="width: 300px;"> 
                                    <div class="row mt-3">
                                        <div class="col-md-12 col-12" style="margin-left: 110px;margin-bottom: 10px;margin-top: 10px;">
                                            <div class="avatar-xl me-3">
                                                <img src="<?php echo url_api();?>fasum_khusus/${ressFasumKhusus[i].fasum_logo}" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 100%;">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12 mt-3">
                                            <h5>${ressFasumKhusus[i].fasum_name}</h5> 
                                            <span>- ${ressFasumKhusus[i].category_fasum.name_category_fasum} -</span>
                                        </div>
                                        
                                        <div class="col-md-12 col-12 mt-2">
                                            <div class="row text-start">
                                                <div class="col-md-5 col-6">
                                                    <p style="font-size: 12px;font-weight: bold;">Alamat</p>  
                                                </div>
                                                <div class="col-md-1">
                                                    <p style="font-size: 12px;"> : </p>
                                                </div>
                                                <div class="col-md-6 col-6">
                                                    <p style="font-size: 12px;">${ressFasumKhusus[i].fasum_address}</p>
                                                </div>
                                            </div> 
                                        </div>  
                                        <div class="col-md-12 col-12"  style="margin-top: -30px;">
                                            <div class="row text-start">
                                                <div class="col-md-5 col-6">
                                                    <p style="font-size: 12px;font-weight: bold;">No Telpon</p>  
                                                </div>
                                                <div class="col-md-1">
                                                    <p style="font-size: 12px;"> : </p>
                                                </div>
                                                <div class="col-md-6 col-6">
                                                    <p style="font-size: 12px;">${ressFasumKhusus[i].fasum_phone}</p>
                                                </div>
                                            </div> 
                                        </div>  
                                        <div class="col-md-12 col-12" style="margin-top: -30px;">
                                            <div class="row text-start">
                                                <div class="col-md-5 col-6">
                                                    <p style="font-size: 12px;font-weight: bold;">Waktu</p>  
                                                </div>
                                                <div class="col-md-1">
                                                    <p style="font-size: 12px;"> : </p>
                                                </div>
                                                <div class="col-md-6 col-6">
                                                    <p style="font-size: 12px;">${ressFasumKhusus[i].fasum_open_time != null ? ressFasumKhusus[i].fasum_open_time : '00:00'} - ${ressFasumKhusus[i].fasum_close_time != null ? ressFasumKhusus[i].fasum_close_time : '00:00'} WITA</p>
                                                </div>
                                            </div> 
                                        </div>   
                                    </div>
                                </div> 
                        `,{minWidth : 100,maxWidth : 560,width : 400}).addTo(mapContainer);  
                    }
                }
            });

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
            var mapContainer = L.map('mapG20Kegiatan', {
                maxZoom: 20,
                minZoom: 1,
                zoomSnap: 0.25,
                zoomControl: false,
                layers: [googleHybrid]
            }).setView(initialCenter, initialZoom);

            
            var route = $("#dummyUtama").val();
            routingRenpam[0] = L.Routing.control({
                waypoints: JSON.parse(route),
                router: new L.Routing.osrmv1({
                    language: 'en',
                    profile: 'car'
                }),
                draggableWaypoints: true,
                routeWhileDragging: false,
                geocoder: L.Control.Geocoder.nominatim({})
            }).addTo(mapContainer);
         
            $('#ruteawal').val(JSON.stringify(routingRenpam[0].getWaypoints())); 


            
            
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
                            window.location.href = "<?php echo base_url(); ?>operasi/renpam";
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


        $('#myModal').on('shown.bs.modal', function() {
            console.log(ressFasumKhusus);
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

            for (let i = 0; i < ressFasumKhusus.length; i++) { 
            
                var latitudeFasum = parseFloat(ressFasumKhusus[i].fasum_lat);
                var longitudeFasum = parseFloat(ressFasumKhusus[i].fasum_lng); 
                L.marker([latitudeFasum,longitudeFasum], { icon: L.divIcon({
                    // className: 'location-pin',
                    html: `<img src="<?php echo url_api();?>fasum_khusus/${ressFasumKhusus[i].fasum_logo}" style="width: 40px; margin-top: -45px;margin-left: -18.5px;">`,
                    iconSize: [5, 5],
                    iconAnchor: [5, 10]
                    // iconAnchor: [10, 33]
                    }) }).bindPopup(`
                        <div class="text-center" style="width: 300px;"> 
                            <div class="row mt-3">
                                <div class="col-md-12 col-12" style="margin-left: 110px;margin-bottom: 10px;margin-top: 10px;">
                                    <div class="avatar-xl me-3">
                                        <img src="<?php echo url_api();?>fasum_khusus/${ressFasumKhusus[i].fasum_logo}" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 100%;">
                                    </div>
                                </div>
                                <div class="col-md-12 col-12 mt-3">
                                    <h5>${ressFasumKhusus[i].fasum_name}</h5> 
                                    <span>- ${ressFasumKhusus[i].category_fasum.name_category_fasum} -</span>
                                </div>
                                
                                <div class="col-md-12 col-12 mt-2">
                                    <div class="row text-start">
                                        <div class="col-md-5 col-6">
                                            <p style="font-size: 12px;font-weight: bold;">Alamat</p>  
                                        </div>
                                        <div class="col-md-1">
                                            <p style="font-size: 12px;"> : </p>
                                        </div>
                                        <div class="col-md-6 col-6">
                                            <p style="font-size: 12px;">${ressFasumKhusus[i].fasum_address}</p>
                                        </div>
                                    </div> 
                                </div>  
                                <div class="col-md-12 col-12"  style="margin-top: -30px;">
                                    <div class="row text-start">
                                        <div class="col-md-5 col-6">
                                            <p style="font-size: 12px;font-weight: bold;">No Telpon</p>  
                                        </div>
                                        <div class="col-md-1">
                                            <p style="font-size: 12px;"> : </p>
                                        </div>
                                        <div class="col-md-6 col-6">
                                            <p style="font-size: 12px;">${ressFasumKhusus[i].fasum_phone}</p>
                                        </div>
                                    </div> 
                                </div>  
                                <div class="col-md-12 col-12" style="margin-top: -30px;">
                                    <div class="row text-start">
                                        <div class="col-md-5 col-6">
                                            <p style="font-size: 12px;font-weight: bold;">Waktu</p>  
                                        </div>
                                        <div class="col-md-1">
                                            <p style="font-size: 12px;"> : </p>
                                        </div>
                                        <div class="col-md-6 col-6">
                                            <p style="font-size: 12px;">${ressFasumKhusus[i].fasum_open_time != null ? ressFasumKhusus[i].fasum_open_time : '00:00'} - ${ressFasumKhusus[i].fasum_close_time != null ? ressFasumKhusus[i].fasum_close_time : '00:00'} WITA</p>
                                        </div>
                                    </div> 
                                </div>   
                            </div>
                        </div> 
                `,{minWidth : 100,maxWidth : 560,width : 400}).addTo(mapContainerRenpam);  
            }

            var routeDataAlternative1 = '<?php echo json_encode($data['getDetail']['data']['route_alternatif_1']) ?>';
            var resAlternative1 = JSON.parse(routeDataAlternative1);
            if (routeDataAlternative1 != 'null' && resAlternative1.length > 0) {
                arrayWaypoint = resAlternative1;
                console.log('ada json');
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

            $("#submitAlternative1").on('click', function(e) {
                routingAlternative1 = routeAlternative1.getWaypoints();
                $('#coordsAlternative1').val(JSON.stringify(routingAlternative1));
                $("#myModal").modal('hide');
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

            for (let i = 0; i < ressFasumKhusus.length; i++) { 
            
                var latitudeFasum = parseFloat(ressFasumKhusus[i].fasum_lat);
                var longitudeFasum = parseFloat(ressFasumKhusus[i].fasum_lng); 
                L.marker([latitudeFasum,longitudeFasum], { icon: L.divIcon({
                    // className: 'location-pin',
                    html: `<img src="<?php echo url_api();?>fasum_khusus/${ressFasumKhusus[i].fasum_logo}" style="width: 40px; margin-top: -45px;margin-left: -18.5px;">`,
                    iconSize: [5, 5],
                    iconAnchor: [5, 10]
                    // iconAnchor: [10, 33]
                    }) }).bindPopup(`
                        <div class="text-center" style="width: 300px;"> 
                            <div class="row mt-3">
                                <div class="col-md-12 col-12" style="margin-left: 110px;margin-bottom: 10px;margin-top: 10px;">
                                    <div class="avatar-xl me-3">
                                        <img src="<?php echo url_api();?>fasum_khusus/${ressFasumKhusus[i].fasum_logo}" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 100%;">
                                    </div>
                                </div>
                                <div class="col-md-12 col-12 mt-3">
                                    <h5>${ressFasumKhusus[i].fasum_name}</h5> 
                                    <span>- ${ressFasumKhusus[i].category_fasum.name_category_fasum} -</span>
                                </div>
                                
                                <div class="col-md-12 col-12 mt-2">
                                    <div class="row text-start">
                                        <div class="col-md-5 col-6">
                                            <p style="font-size: 12px;font-weight: bold;">Alamat</p>  
                                        </div>
                                        <div class="col-md-1">
                                            <p style="font-size: 12px;"> : </p>
                                        </div>
                                        <div class="col-md-6 col-6">
                                            <p style="font-size: 12px;">${ressFasumKhusus[i].fasum_address}</p>
                                        </div>
                                    </div> 
                                </div>  
                                <div class="col-md-12 col-12"  style="margin-top: -30px;">
                                    <div class="row text-start">
                                        <div class="col-md-5 col-6">
                                            <p style="font-size: 12px;font-weight: bold;">No Telpon</p>  
                                        </div>
                                        <div class="col-md-1">
                                            <p style="font-size: 12px;"> : </p>
                                        </div>
                                        <div class="col-md-6 col-6">
                                            <p style="font-size: 12px;">${ressFasumKhusus[i].fasum_phone}</p>
                                        </div>
                                    </div> 
                                </div>  
                                <div class="col-md-12 col-12" style="margin-top: -30px;">
                                    <div class="row text-start">
                                        <div class="col-md-5 col-6">
                                            <p style="font-size: 12px;font-weight: bold;">Waktu</p>  
                                        </div>
                                        <div class="col-md-1">
                                            <p style="font-size: 12px;"> : </p>
                                        </div>
                                        <div class="col-md-6 col-6">
                                            <p style="font-size: 12px;">${ressFasumKhusus[i].fasum_open_time != null ? ressFasumKhusus[i].fasum_open_time : '00:00'} - ${ressFasumKhusus[i].fasum_close_time != null ? ressFasumKhusus[i].fasum_close_time : '00:00'} WITA</p>
                                        </div>
                                    </div> 
                                </div>   
                            </div>
                        </div> 
                `,{minWidth : 100,maxWidth : 560,width : 400}).addTo(mapContainerRenpam2);  
            }

            var routeDataAlternative2 = '<?php echo json_encode($data['getDetail']['data']['route_alternatif_2']) ?>';
            var resAlternative2 = JSON.parse(routeDataAlternative2);
            // console.log(resAlternative2);
            if (routeDataAlternative2 != 'null' && resAlternative2.length > 0) {
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

            $("#submitAlternative2").on('click', function(e) {
                routingAlternative2 = routeAlternative2.getWaypoints();
                $('#coordsAlternative2').val(JSON.stringify(routingAlternative2));
                $("#myModal2").modal('hide');
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

for (let i = 0; i < ressFasumKhusus.length; i++) { 

    var latitudeFasum = parseFloat(ressFasumKhusus[i].fasum_lat);
    var longitudeFasum = parseFloat(ressFasumKhusus[i].fasum_lng); 
    L.marker([latitudeFasum,longitudeFasum], { icon: L.divIcon({
        // className: 'location-pin',
        html: `<img src="<?php echo url_api();?>fasum_khusus/${ressFasumKhusus[i].fasum_logo}" style="width: 40px; margin-top: -45px;margin-left: -18.5px;">`,
        iconSize: [5, 5],
        iconAnchor: [5, 10]
        // iconAnchor: [10, 33]
        }) }).bindPopup(`
            <div class="text-center" style="width: 300px;"> 
                <div class="row mt-3">
                    <div class="col-md-12 col-12" style="margin-left: 110px;margin-bottom: 10px;margin-top: 10px;">
                        <div class="avatar-xl me-3">
                            <img src="<?php echo url_api();?>fasum_khusus/${ressFasumKhusus[i].fasum_logo}" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 100%;">
                        </div>
                    </div>
                    <div class="col-md-12 col-12 mt-3">
                        <h5>${ressFasumKhusus[i].fasum_name}</h5> 
                        <span>- ${ressFasumKhusus[i].category_fasum.name_category_fasum} -</span>
                    </div>
                    
                    <div class="col-md-12 col-12 mt-2">
                        <div class="row text-start">
                            <div class="col-md-5 col-6">
                                <p style="font-size: 12px;font-weight: bold;">Alamat</p>  
                            </div>
                            <div class="col-md-1">
                                <p style="font-size: 12px;"> : </p>
                            </div>
                            <div class="col-md-6 col-6">
                                <p style="font-size: 12px;">${ressFasumKhusus[i].fasum_address}</p>
                            </div>
                        </div> 
                    </div>  
                    <div class="col-md-12 col-12"  style="margin-top: -30px;">
                        <div class="row text-start">
                            <div class="col-md-5 col-6">
                                <p style="font-size: 12px;font-weight: bold;">No Telpon</p>  
                            </div>
                            <div class="col-md-1">
                                <p style="font-size: 12px;"> : </p>
                            </div>
                            <div class="col-md-6 col-6">
                                <p style="font-size: 12px;">${ressFasumKhusus[i].fasum_phone}</p>
                            </div>
                        </div> 
                    </div>  
                    <div class="col-md-12 col-12" style="margin-top: -30px;">
                        <div class="row text-start">
                            <div class="col-md-5 col-6">
                                <p style="font-size: 12px;font-weight: bold;">Waktu</p>  
                            </div>
                            <div class="col-md-1">
                                <p style="font-size: 12px;"> : </p>
                            </div>
                            <div class="col-md-6 col-6">
                                <p style="font-size: 12px;">${ressFasumKhusus[i].fasum_open_time != null ? ressFasumKhusus[i].fasum_open_time : '00:00'} - ${ressFasumKhusus[i].fasum_close_time != null ? ressFasumKhusus[i].fasum_close_time : '00:00'} WITA</p>
                            </div>
                        </div> 
                    </div>   
                </div>
            </div> 
    `,{minWidth : 100,maxWidth : 560,width : 400}).addTo(mapContainerRenpam3);  
}

            var routeDataAlternative3 = '<?php echo json_encode($data['getDetail']['data']['route_masyarakat']) ?>';
            var resAlternative3 = JSON.parse(routeDataAlternative3);
            // console.log(resAlternative3);
            if (routeDataAlternative3 != 'null' && resAlternative3.length > 0) {
                arrayWaypoint = resAlternative3
            }

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
                $("#myModal3").modal('hide');
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

for (let i = 0; i < ressFasumKhusus.length; i++) { 

    var latitudeFasum = parseFloat(ressFasumKhusus[i].fasum_lat);
    var longitudeFasum = parseFloat(ressFasumKhusus[i].fasum_lng); 
    L.marker([latitudeFasum,longitudeFasum], { icon: L.divIcon({
        // className: 'location-pin',
        html: `<img src="<?php echo url_api();?>fasum_khusus/${ressFasumKhusus[i].fasum_logo}" style="width: 40px; margin-top: -45px;margin-left: -18.5px;">`,
        iconSize: [5, 5],
        iconAnchor: [5, 10]
        // iconAnchor: [10, 33]
        }) }).bindPopup(`
            <div class="text-center" style="width: 300px;"> 
                <div class="row mt-3">
                    <div class="col-md-12 col-12" style="margin-left: 110px;margin-bottom: 10px;margin-top: 10px;">
                        <div class="avatar-xl me-3">
                            <img src="<?php echo url_api();?>fasum_khusus/${ressFasumKhusus[i].fasum_logo}" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 100%;">
                        </div>
                    </div>
                    <div class="col-md-12 col-12 mt-3">
                        <h5>${ressFasumKhusus[i].fasum_name}</h5> 
                        <span>- ${ressFasumKhusus[i].category_fasum.name_category_fasum} -</span>
                    </div>
                    
                    <div class="col-md-12 col-12 mt-2">
                        <div class="row text-start">
                            <div class="col-md-5 col-6">
                                <p style="font-size: 12px;font-weight: bold;">Alamat</p>  
                            </div>
                            <div class="col-md-1">
                                <p style="font-size: 12px;"> : </p>
                            </div>
                            <div class="col-md-6 col-6">
                                <p style="font-size: 12px;">${ressFasumKhusus[i].fasum_address}</p>
                            </div>
                        </div> 
                    </div>  
                    <div class="col-md-12 col-12"  style="margin-top: -30px;">
                        <div class="row text-start">
                            <div class="col-md-5 col-6">
                                <p style="font-size: 12px;font-weight: bold;">No Telpon</p>  
                            </div>
                            <div class="col-md-1">
                                <p style="font-size: 12px;"> : </p>
                            </div>
                            <div class="col-md-6 col-6">
                                <p style="font-size: 12px;">${ressFasumKhusus[i].fasum_phone}</p>
                            </div>
                        </div> 
                    </div>  
                    <div class="col-md-12 col-12" style="margin-top: -30px;">
                        <div class="row text-start">
                            <div class="col-md-5 col-6">
                                <p style="font-size: 12px;font-weight: bold;">Waktu</p>  
                            </div>
                            <div class="col-md-1">
                                <p style="font-size: 12px;"> : </p>
                            </div>
                            <div class="col-md-6 col-6">
                                <p style="font-size: 12px;">${ressFasumKhusus[i].fasum_open_time != null ? ressFasumKhusus[i].fasum_open_time : '00:00'} - ${ressFasumKhusus[i].fasum_close_time != null ? ressFasumKhusus[i].fasum_close_time : '00:00'} WITA</p>
                            </div>
                        </div> 
                    </div>   
                </div>
            </div> 
    `,{minWidth : 100,maxWidth : 560,width : 400}).addTo(mapContainerRenpam4);  
}

            var routeDataAlternative4 = '<?php echo json_encode($data['getDetail']['data']['route_umum']) ?>';
            var resAlternative4 = JSON.parse(routeDataAlternative4);
            // console.log(resAlternative4);
            if (routeDataAlternative4 != 'null' && resAlternative4.length > 0) {
                arrayWaypoint = resAlternative4
            }

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
                $("#myModal4").modal('hide');
            });
        });

        $(".form").submit(function(e) {
            $('#ruteawal').val(JSON.stringify(routingRenpam[0].getWaypoints())); 
            $("#overlay").fadeIn(300);
            e.preventDefault();
            var formData = new FormData($('.form')[0]);

            $.ajax({
                url: "<?php echo base_url(); ?>operasi/Renpam/storeEdit",
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
                            window.location.href = "<?php echo base_url(); ?>operasi/Renpam";
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
    </script>