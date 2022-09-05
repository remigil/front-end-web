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
                    <p class="fs-4 fw-bold">DETAIL DATA TRIPON F4462 AAD</p>
                </div>
                <div class="col-md-7">
                    <!-- ini belum -->
                    <div class="border fw-bold rounded">
                        <div class="ms-3 mt-2 mb-2">
                            <span class="text-primary"> No TRP </span>
                            <span> | TRP/F/1210/19/2022/JABAR/BOGOR</span>
                            <span style=" height: 500px; border-left: 6px solid green;" class="ms-2 me-2"></span>
                            <span class="text-primary">Jumlah Penumpang </span>
                            <span>| 4</span>
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
                                        <p class=" fw-bold text-primary mt-3">BINTANG</p>
                                        <p class=" fw-bold text-primary">3201234567890123</p>
                                        <p class=" fw-bold text-primary">INDONESIA</p>
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
                                    <tr>
                                        <td>1</td>
                                        <td>EREN YEAGER</td>
                                        <td>3201234567890123</td>
                                        <td>INDONESIA</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>ANIE LIONHART</td>
                                        <td>3201234567890123</td>
                                        <td>INDONESIA</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>PIEKE FINGER</td>
                                        <td>3201234567890123</td>
                                        <td>INDONESIA</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>REINER BRAUN</td>
                                        <td>3201234567890123</td>
                                        <td>INDONESIA</td>
                                    </tr>
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
                                <td>MOBIL PRIBADI</td>
                            </tr>
                            <tr>
                                <td width="30%" class="text-primary">MEREK KENDARAAN</td>
                                <td width="5%">:</td>
                                <td>HONDA</td>
                            </tr>
                            <tr>
                                <td width="30%" class="text-primary">WAKTU KEBERANGKATAN</td>
                                <td width="5%">:</td>
                                <td class="fw-bold rounded" style="background-color:#BEE5F3; color:#515151">Selasa, 19 Juli 2022, Pukul 18 : 00 WIB</td>
                            </tr>
                            <tr>
                                <td width="30%" class="text-primary">WAKTU PENGISIAN DATA</td>
                                <td width="5%">:</td>
                                <td class="fw-bold rounded" style="background-color:#1E7916; color:#FFF;">Senin 18 Juli 2022, Pukul 07 : 44 WIB</td>
                            </tr>
                            <tr>
                                <td width="30%" class="text-primary">TITIK LOKASI AWAL</td>
                                <td width="5%">:</td>
                                <td class=" fw-bold rounded" style="background-color:#F1F1F1; color:#515151">-6.601172920128401, 106.80702103945605 Botani Square, Jalan Sholeh Iskandar, RT.01/RW.10, Kedungbadak, Kota Bogor, Jawa Barat</td>
                            </tr>
                            <tr>
                                <td width="30%" class="text-primary">TITIK DESTINASI</td>
                                <td width="5%">:</td>
                                <td class=" fw-bold rounded" style="background-color:#F1F1F1; color:#515151">-6.175264396563681, 106.82709915294522 Monas, Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta</td>
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

            var markerClusterGroup = L.markerClusterGroup();
            var icon = L.icon({
                iconUrl: 'http://tourbanyuwangi.com/wp-content/uploads/2018/05/map.png',
                iconSize: [80, 80], // size of the icon
            });

            var arrayData = $.grep(data, function(element, index) {
                return element.coordinate != null && element.coordinate != '';
            });
            // console.log(arrayData); 

            for (let i = 0; i < arrayData.length; i++) {
                var cordinate = arrayData[i].coordinate;
                var latlong = cordinate.split(',');
                var latitude = parseFloat(latlong[0]);
                var longitude = parseFloat(latlong[1]);
                // console.log({a:latitude , b:longitude});

                markerClusterGroup.addLayer(
                    L.marker([latitude, longitude], {
                        icon
                    }).bindPopup(`
                <div class="text-center" style="width: 300px;">
                    <div class="card-block">
                        <a class="avatar avatar-lg" href="javascript:void(0)">
                            <img src="${window.location.origin}/${pisah[1]}/assets_admin/assets/images/logo-colored.png" alt="Logo">
                        </a>
                        <h4 class="profile-user">${arrayData[i].group_name}</h4>
                    </div>
                    <div class="row ">
                        <div class="col-md-12 col-12" style="margin-top: -15px;">
                            <div class="row text-left">
                                <div class="col-md-4 col-4">
                                    <h5 class="profile-job">Location :</h5>  
                                </div>
                                <div class="col-md-8 col-8">
                                    <p style="margin-top: 11px;">${arrayData[i].obvit_name}</p>
                                </div>
                            </div> 
                        </div> 
                        <div class="col-md-12 col-12" style="margin-top: -15px;">
                            <div class="row text-left">
                                <div class="col-md-4 col-4">
                                    <h5 class="profile-job">POC :</h5>  
                                </div>
                                <div class="col-md-8 col-8">
                                    <p style="margin-top: 11px;">${arrayData[i].group_poc_name}</p>
                                </div>
                            </div> 
                        </div>  
                        <div class="col-md-12 col-12" style="margin-top: -15px;">
                            <div class="row text-left">
                                <div class="col-md-4 col-4">
                                    <h5 class="profile-job">Demand :</h5>  
                                </div>
                                <div class="col-md-8 col-8">
                                    <p style="margin-top: 11px;">${arrayData[i].demand}</p>
                                </div>
                            </div> 
                        </div>  
                    </div>
                    <div class="card-footer">
                        <div class="row no-space">
                            <div class="col-4" style="display: grid">
                                <span>Participant/s</span>
                                <span class="badge badge-round badge-primary" style="margin-left: 5px;margin-right: 5px;">${arrayData[i].participant_number}</span> 
                            </div>
                            <div class="col-4" style="display: grid">
                                <span>Threat Level</span> 
                                ${arrayData[i].threat_level == 1 ? '<span class="badge badge-round badge-warning" style="margin-left: 5px;margin-right: 5px;">Low</span>' : ''}
                                ${arrayData[i].threat_level == 2 ? '<span class="badge badge-round badge-primary" style="margin-left: 5px;margin-right: 5px;">Medium</span>' : ''}
                                ${arrayData[i].threat_level == 3 ? '<span class="badge badge-round badge-danger" style="margin-left: 5px;margin-right: 5px;">High</span>' : ''}
                                ${arrayData[i].threat_level == 4 ? '<span class="badge badge-round badge-danger" style="margin-left: 5px;margin-right: 5px;">High</span>' : ''}
                                ${arrayData[i].threat_level == 5 ? '<span class="badge badge-round badge-danger" style="margin-left: 5px;margin-right: 5px;">High</span>' : ''}
                                ${arrayData[i].threat_level == 6 ? '<span class="badge badge-round badge-danger" style="margin-left: 5px;margin-right: 5px;">High</span>' : ''}
                                ${arrayData[i].threat_level == 7 ? '<span class="badge badge-round badge-danger" style="margin-left: 5px;margin-right: 5px;">High</span>' : ''}
                                ${arrayData[i].threat_level == 8 ? '<span class="badge badge-round badge-danger" style="margin-left: 5px;margin-right: 5px;">High</span>' : ''}
                                ${arrayData[i].threat_level == 9 ? '<span class="badge badge-round badge-danger" style="margin-left: 5px;margin-right: 5px;">High</span>' : ''}
                                ${arrayData[i].threat_level == 10 ? '<span class="badge badge-round badge-danger" style="margin-left: 5px;margin-right: 5px;">High</span>' : ''}
                                ${arrayData[i].threat_level == 11 ? '<span class="badge badge-round badge-danger" style="margin-left: 5px;margin-right: 5px;">High</span>' : ''}
                                ${arrayData[i].threat_level == 12 ? '<span class="badge badge-round badge-danger" style="margin-left: 5px;margin-right: 5px;">High</span>' : ''}
                            </div>
                            <div class="col-4" style="display: grid">
                                <span>Event Date</span> 
                                <span class="badge badge-round badge-primary" style="margin-left: 5px;margin-right: 5px;">${arrayData[i].event_date}</span> 
                            </div>
                        </div>
                    </div>
                </div>
            `)
                );
            }
            mapContainer.addLayer(markerClusterGroup);
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