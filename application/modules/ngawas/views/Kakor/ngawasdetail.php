<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<style>

.card {
    border: 1;
    border-radius: 10px
}

.c-details span {
    font-weight: 300;
    font-size: 13px
}

.icon {
    width: 50px;
    height: 50px;
    background-color: #eee;
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 39px
}

.badge span {
    background-color: #fffbec;
    width: 60px;
    height: 25px;
    padding-bottom: 3px;
    border-radius: 5px;
    display: flex;
    color: #fed85d;
    justify-content: center;
    align-items: center
}

.progress {
    height: 10px;
    border-radius: 10px
}

.progress div {
    background-color: red
}

.text1 {
    font-size: 14px;
    font-weight: 600
}

.text2 {
    color: #a5aec0
}
</style>
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
                    <p class="fs-4 fw-bold">DETAIL DATA NGAWAS <?php echo $data['getDetail']['data']['public_vehicle']['no_vehicle']; ?></p>
                </div>
                <div class="col-md-7">
                    <div class="border fw-bold rounded">
                        <div class="ms-3 mt-2 mb-2">
                            <span class="text-primary"> No BNG </span>
                            <span> | <?php echo $data['getDetail']['data']['code']; ?></span>
                            <span style=" height: 500px; border-left: 6px solid green;" class="ms-2 me-2"></span>
                            <span class="text-primary">Jumlah Penumpang </span>
                            <?php $jumlah = $data['getDetail']['data']['penumpangs']; ?>
                            <span>| <?= count($jumlah); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-md-8">
                    <div class="border rounded" style="height:7vh;background-color:#D5D5D4;">
                        <div class="mt-2 mb-2 ">
                            <span class=" fw-bolder text-primary" style="position:absolute; height:15px; left:37px; top: 2%;background:#D5D5D4;">RUTE PERJALANAN</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="border rounded" style="height:7vh;background-color:#B7D9EC ;">
                        <div class="mt-2 mb-2 text-center">
                            <span class="fw-bolder  text-primary" style="position:absolute;">PENGENDARA</span>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="row">
               <div class="col-md-8 mt-3">
                    <div class="rounded" id="mapG20Dashboard" style="height:100%;"></div>
               </div>
                    <div class="col-md-4 mt-3">
                        <div class="row d-flex">
                            <div class="col-md-12">
                                   <div class="row">
                                        <div class="card">

                                             <div class="card-body">
                                                  <!-- <h5 class="card-title"><?php echo $data['getDetail']['data']['society']['person_name']; ?></h5>
                                                  <p class="card-text">Nik. <?php echo $data['getDetail']['data']['society']['nik']; ?></p> -->
                                                  <div class="d-flex justify-content-between">
                                                       <div class="d-flex flex-row align-items-center">
                                                       <div class="icon"> <i class="bx bx-user"></i> </div>
                                                       <div class="ms-2 c-details">
                                                            <h3 class="mb-0"><?php echo $data['getDetail']['data']['society']['person_name']; ?></h3> <span>Nik. <?php echo $data['getDetail']['data']['society']['nik']; ?></span>
                                                       </div>
                                                       </div>
                                                       <div class="badge"> <span>Design</span> </div>
                                                  </div>

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
                                            <!-- <th>KEBANGSAAN</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($data['getDetail']['data']['penumpangs'] as $row) : ?>
                                            <tr>
                                                <td> <?php echo $no++ ?> </td>
                                                <td><?php echo $row['name']; ?></td>
                                                <td><?php echo $row['nik']; ?></td>
                                                <!-- <td><?php echo $row['nationality']; ?></td> -->
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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
                                <td><?php echo $data['getDetail']['data']['type_vehicle']['type_name']; ?></td>
                            </tr>
                            <tr>
                                <td width="30%" class="text-primary">MEREK KENDARAAN</td>
                                <td width="5%">:</td>
                                <td><?php echo $data['getDetail']['data']['brand_vehicle']['brand_name']; ?></td>
                            </tr>
                            <tr>
                                <td width="30%" class="text-primary">WAKTU PENGISIAN DATA</td>
                                <td width="5%">:</td>
                                <td class="fw-bold rounded" style="background-color:#1E7916; color:#FFF;"><?php echo date('H:i:s d-m-Y', strtotime($data['getDetail']['data']['created_at'])); ?></td>
                            </tr>
                            <tr>
                                <td width="30%" class="text-primary">WAKTU KEBERANGKATAN</td>
                                <td width="5%">:</td>
                                <td class="fw-bold rounded" style="background-color:#BEE5F3; color:#515151"><?php echo date('H:i', strtotime($data['getDetail']['data']['departure_time'])); ?>, <?php echo date('d-m-Y', strtotime($data['getDetail']['data']['departure_date'])); ?></td>
                            </tr>

                            <tr>
                                <td width="30%" class="text-primary">TITIK LOKASI AWAL</td>
                                <td width="5%">:</td>
                                <td class=" fw-bold rounded" style="background-color:#F1F1F1; color:#515151"><?php echo $data['getDetail']['data']['start_coordinate']['latitude']; ?>, <?php echo $data['getDetail']['data']['start_coordinate']['longitude']; ?>
                                    <div id="alamatLat"></div>
                                </td>
                            </tr>
                            <tr>
                                <td width="30%" class="text-primary">TITIK DESTINASI</td>
                                <td width="5%">:</td>
                                <td class=" fw-bold rounded" style="background-color:#F1F1F1; color:#515151"><?php echo $data['getDetail']['data']['start_coordinate']['latitude']; ?>, <?php echo $data['getDetail']['data']['end_coordinate']['longitude']; ?>
                                    <div id="alamatLat"></div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <a href="<?= base_url('ngawas'); ?>"> <button class="btn btn-primary waves-effect float-end mt-3" style="width: 25%;">Kembali</button></a>
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


            var startCordLat = '<?php echo $data['getDetail']['data']['start_coordinate']['latitude']; ?>';
            var startCordLng = '<?php echo $data['getDetail']['data']['start_coordinate']['longitude']; ?>';

            var endCordLat = '<?php echo $data['getDetail']['data']['end_coordinate']['latitude']; ?>';
            var endCordLng = '<?php echo $data['getDetail']['data']['end_coordinate']['longitude']; ?>';

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
                    styles: [{
                        color: "#01796f",
                        className: 'animateRoute'
                    }]
                },
                geocoder: L.Control.Geocoder.nominatim({})
            }).addTo(mapContainer);

            $('[name=cordinate]').on("change", function(e) {
                // console.log({a:cordLat, b:corLong});
                $.get(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${startCordLat}&lon=${startCordLng}`, function(data) {
                    $('[name=alamatLat]').html(data['display_name']);
                    mapContainer.flyTo([startCordLat, startCordLng], 17);
                });
            });


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