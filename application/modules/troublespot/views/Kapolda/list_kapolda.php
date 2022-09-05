<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
    </ol>
</nav>
<!-- </div> -->
<div class="page">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 ">
                    <label for="waktu" class="form-label"> Waktu</label>
                    <input class="form-control" type="date" name="waktu" id="waktu">
                </div>
                <div class="col-md-3 ">
                    <label class="form-label">Jenis Permasalahan</label>
                    <select class="form-select">
                        <option>Semua Permasalahan</option>
                        <option>Permaslahan 1</option>
                        <option>Permaslahan 2</option>
                    </select>
                </div>
                <div class="col-md-3 ">
                    <label class="form-label">Polres</label>
                    <select class="form-select">
                        <option>POLRESTABES BANDUNG</option>
                        <option>POLRESTA BOGOR</option>
                        <option>POLRES BOGOR</option>
                        <option>POLRESTA SUKABUMI</option>
                        <option>POLRES SUBANG</option>
                    </select>
                </div>
            </div>
            <div class="mt-3" id="mapG20Dashboard" style="width: 100%; height:50vh;"></div>
            <button class=" mt-3 btn btn-primary float-end"> Tampilkan </button>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <table id="tripon" class="table table-striped dt-responsive w-100">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama Polres</th>
                        <th>Lokasi Kejadian</th>
                        <th>Waktu Pengkajian</th>
                        <th>Informasi Lebih Lanjut</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>POLRES SUBANG</td>
                        <td>Jl. Mayjend Sutoyo No.29, Karanganyar, Kec. Subang, Kabupaten Subang, Jawa Barat 41211</td>
                        <td>5 jam</td>
                        <td class="text-center">
                            <a href="<?= base_url('troublespot/Detail'); ?>"><button class="btn btn-sm btn-primary" type="button">Detail</button></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>POLRESTABES BANDUNG</td>
                        <td>Jl. Merdeka No.18-21, Babakan Ciamis, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40117</td>
                        <td>6 jam</td>
                        <td class="text-center">
                            <a href="<?= base_url('troublespot/Detail'); ?>"><button class="btn btn-sm btn-primary" type="button">Detail</button></a>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
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


    function BtnFilter() {
        console.log('asdasd');
        $('#FilterTripOn').html(`<div class="card">
        <div class="card-body">
            <table class="table table-bordered text-center fw-bold">
                <thead class="table-primary">
                    <tr>
                        <th>Kota Awal</th>
                        <th>Kota Terdaftar</th>
                        <th>Jumlah TripOn Terdaftar</th>
                        <th>Jumlah Penumpang Terdaftar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Bogor</td>
                        <td>Bandung</td>
                        <td>1230</td>
                        <td>123</td>
                    </tr>
                    <tr>
                        <td>Bandung</td>
                        <td>Bogor</td>
                        <td>123</td>
                        <td>1230</td>
                    </tr>
                    <tr>
                        <td colspan="2">Total</td>
                        <td>1353</td>
                        <td>1353</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
        `)
    }
</script>