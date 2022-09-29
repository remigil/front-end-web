<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->

<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Detail Data <?= $title; ?></li>
    </ol>
</nav>
<!-- </div> -->
<div class="page">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-5">
                    <!-- <p class="fs-4 fw-bold">DETAIL DATA TRIPON <?php echo $data['getDetail']['data']['vehicle_id'];?></p> -->
                    <p class="fs-4 fw-bold">DETAIL DATA TRIPON <?php echo $data['getDetail']['data']['public_vehicle']['no_vehicle'];?></p>
                </div>
                <div class="col-md-7">
                    <!-- ini belum -->
                    <div class="border fw-bold rounded">
                        <div class="ms-3 mt-2 mb-2">
                            <span class="text-primary"> No TRP </span>
                            <span> | <?php echo $data['getDetail']['data']['code'];?></span>
                            <span style=" height: 500px; border-left: 6px solid green;" class="ms-2 me-2"></span>
                            <span class="text-primary">Jumlah Penumpang </span>
                            <?php $jumlah = $data['getDetail']['data']['passenger_trip_ons'];?>
                            <span>| <?= count($jumlah);?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="border rounded" style="height:7vh;background-color:#D5D5D4;">
                        <div class="mt-2 mb-2 ">
                            <div style="border:1px solid #003A91; margin-top:3%"></div>
                            <span class=" fw-bolder text-primary" style="position:absolute; height:15px; left:37px; top: 2%;background:#D5D5D4; padding:0 15px 0 15px;">IDENTITAS PENGENDARA</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="border rounded" style="height:7vh;background-color:#B7D9EC ;">
                        <div class="mt-2 mb-2 text-center">
                            <div style="border:1px solid #003A91; margin-top:6.47%"></div>
                            <span class="fw-bolder  text-primary" style="position:absolute; height:15px; left:25%; top: 2%;background:#B7D9EC; padding:0 15px 0 15px;">RUTE PENGENDARA</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8 mt-3">
                    <div class="row d-flex">
                        <div class="col-md-3">
                            <div class="rounded" style="height:24vh ; width:90%; background-color:grey;"></div>
                        </div>
                        <div class="col-md-9">
                            <div class="row">
                                <div class="border rounded d-flex" style="height:24vh; font-family: 'Open Sans'; margin-left:-1.7vh;">
                                    <div class="col-md-4">
                                        <p class=" fw-bold text-primary mt-3">NAMA LENGKAP</p>
                                        <p class=" fw-bold text-primary">NIK</p>
                                        <p class=" fw-bold text-primary">KEBANGSAAN</p>
                                    </div>
                                    <div class="col-md-1">
                                        <p class=" fw-bold text-primary mt-3">:</p>
                                        <p class=" fw-bold text-primary">:</p>
                                        <p class=" fw-bold text-primary">:</p>
                                    </div>
                                    <div class="col-md-7">
                                        <p class=" fw-bold text-primary mt-3"><?php echo $data['getDetail']['data']['society']['person_name'];?></p>
                                        <p class=" fw-bold text-primary"><?php echo $data['getDetail']['data']['society']['nik'];?></p>
                                        <p class=" fw-bold text-primary"><?php echo $data['getDetail']['data']['society']['nationality'];?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <div style="border:1px solid #003A91;"></div>
                            <span class=" fw-bolder ms-3 text-primary" style="position:absolute; left:20px; top:-9px;background:white; padding:0 15px 0 15px;">IDENTITAS PENUMPANG</span>
                        </div>
                        <div class="col-md-12 mt-4">
                            <table class="table table-bordered ">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NAMA LENGKAP</th>
                                        <th>NIK</th>
                                        <th>KEBANGSAAN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $no = 1;
                                foreach ($data['getDetail']['data']['passenger_trip_ons'] as $row) : ?>
                                    <tr>
                                    <td> <?php echo $no++ ?> </td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['nik']; ?></td>
                                        <td><?php echo $row['nationality']; ?></td>
                                    </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-3">
                    <div class="rounded" id="mapG20Dashboard" style="height:96.7%;"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="border rounded" style="height:7vh;background-color:#D5D5D4;">
                        <div class="mt-2 mb-2 ">
                            <div style="border:1px solid #003A91; margin-top:2.1%"></div>
                            <span class=" fw-bolder text-primary" style="position:absolute; height:15px; left:37px; top: 12px;background:#D5D5D4; padding:0 15px 0 15px;">DETAIL KEBERANGKATAN</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt-4">
                    <div class="border rounded d-flex" style=" font-family: 'Open Sans'; margin-left:-1.7vh;">
                        <table class="table table-borderless fw-bold">
                            <tr>
                                <td width="30%" class="text-primary">TIPE KENDARAAN</td>
                                <td width="5%">:</td>
                                <td><?php echo $data['getDetail']['data']['type_vehicle']['type_name'];?></td>
                            </tr>
                            <tr>
                                <td width="30%" class="text-primary">MEREK KENDARAAN</td>
                                <td width="5%">:</td>
                                <td><?php echo $data['getDetail']['data']['brand_vehicle']['brand_name'];?></td>
                            </tr>
                            <tr>
                                <td width="30%" class="text-primary">WAKTU PENGISIAN DATA</td>
                                <td width="5%">:</td>
                                <td class="fw-bold rounded" style="background-color:#1E7916; color:#FFF;"><?php echo $data['getDetail']['data']['created_at'];?></td>
                            </tr>
                            <tr>
                                <td width="30%" class="text-primary">WAKTU KEBERANGKATAN</td>
                                <td width="5%">:</td>
                                <td class="fw-bold rounded" style="background-color:#BEE5F3; color:#515151"><?php echo $data['getDetail']['data']['departure_date'];?>, <?php echo $data['getDetail']['data']['departure_time'];?></td>
                            </tr>
                            
                            <tr>
                                <td width="30%" class="text-primary">TITIK LOKASI AWAL</td>
                                <td width="5%">:</td>
                                <td class=" fw-bold rounded" style="background-color:#F1F1F1; color:#515151"><?php echo $data['getDetail']['data']['start_coordinate']['latitude'];?>, <?php echo $data['getDetail']['data']['start_coordinate']['longitude'];?> 
                                <div id="alamatLat"></div></td>
                            </tr>
                            <tr>
                                <td width="30%" class="text-primary">TITIK DESTINASI</td>
                                <td width="5%">:</td>
                                <td class=" fw-bold rounded" style="background-color:#F1F1F1; color:#515151"><?php echo $data['getDetail']['data']['start_coordinate']['latitude'];?>, <?php echo $data['getDetail']['data']['end_coordinate']['longitude'];?> 
                                <div id="alamatLat"></div>
                            </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <a href="<?= base_url('tripon'); ?>"> <button class="btn btn-primary waves-effect float-end mt-3" style="width: 25%;">Kembali</button></a>
        </div>
    </div>

    <!-- End Page -->





    <script>
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
                layers: [googleStreet]
            }).setView(initialCenter, initialZoom);


            var startCordLat = '<?php echo $data['getDetail']['data']['start_coordinate']['latitude'];?>';
            var startCordLng = '<?php echo $data['getDetail']['data']['start_coordinate']['longitude'];?>';

            var endCordLat = '<?php echo $data['getDetail']['data']['end_coordinate']['latitude'];?>';
            var endCordLng = '<?php echo $data['getDetail']['data']['end_coordinate']['longitude'];?>';

            // console.log(parseFloat(startCordLat)); 
 

            L.Routing.control({
                show: false, 
                draggableWaypoints: false,
                addWaypoints: false,
                waypoints: [
                    L.latLng(parseFloat(startCordLat), parseFloat(startCordLng)),
                    L.latLng(parseFloat(endCordLat), parseFloat(endCordLng)) 
                ],
                router: new L.Routing.osrmv1({
                    language: 'en',
                    profile: 'car'
                }),
                lineOptions: {
                    styles: [{color: "red", className: 'animateRoute'}]
                }, 
                geocoder: L.Control.Geocoder.nominatim({})
            }).addTo(mapContainer);
   
            $('[name=cordinate]').on("change", function (e) {

// var cordLat = parseFloat(cordLatLong[0]); 
// var corLong = parseFloat(cordLatLong[1]); 

// // console.log({a:cordLat, b:corLong});

// $.get(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${cordLat}&lon=${corLong}`, function(data){
//     $('[name=address]').html(data['display_name']); 
//     mapContainer.flyTo([cordLat, corLong], 17);  
// }); 
// });

  
            mapContainer.setView(initialCenter, initialZoom);

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




        });
    </script>