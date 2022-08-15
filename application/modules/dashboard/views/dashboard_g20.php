<div class="row">
    <div class="col-md-12">
        <div style="display:flex;z-index: 999;position: absolute;">
            <div class="dropdown d-inline-block">
                <div style="cursor: pointer; display:flex; width:250px; height:40px; background-color:white; border-radius:0.25rem;margin: 10px;border: 1px solid var(--bs-input-border);" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="row" style="margin-left: 0px;">
                        <div class="col-md-3">
                            <i class="fa fa-fw fas fa-align-justify" style="margin: 10px;"></i>
                        </div>
                        <div class="col-md-6">
                            <p style="margin: 6px;">Telusuri Peta</p>
                        </div>
                        <div class="col-md-3">
                            <i class="fa fa-fw fas fa-search" style="margin: 10px;"></i>
                        </div>
                    </div>
                </div>
                <div class="dropdown-menu" style="background: transparent; border: transparent; box-shadow: none;">
                    <div style="width: 248px; background-color: white;border-radius: 0.25rem;margin-left: 7px;margin-top: -18px;">
                        <div class="row" style="margin-left: 0px;overflow-x: scroll;height: 580px;scrollbar-width: thin;position: relative;">
                            <form class="form" method="POST" enctype="multipart/form-data"> 
                                <div class="col-md-12 mt-4">
                                    <p style="font-size: 17px;">PENUGASAN</p>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <label  class="form-label" for="titiklokasikeberangkatan">Titik Lokasi Keberangkatan</label>
                                    <input type="text" style="height: 15px;" class="form-input" name="tikke" placeholder="test"> 
                                </div> 
                                <div class="col-md-12  mt-3"> 
                                    <label  class="form-label" for="titiklokasitujuan">Titik Lokasi Tujuan</label>
                                    <input type="text" style="height: 15px;" class="form-input" name="tiktu" placeholder="test2">
                                </div>
                                <div class="col-md-12  mt-3"> 
                                    <label  class="form-label" for="namavip">Nama VIP</label>
                                    <input type="text" class="form-input" name="nama_vip" placeholder="test2">
                                </div>
                                <div class="col-md-12  mt-3"> 
                                    <label  class="form-label" for="negaravip">Negara Kedatangan VIP</label>
                                    <input type="text" readonly class="form-input" name="negara_vip" placeholder="test2">
                                </div>
                                <div class="col-md-12  mt-3"> 
                                    <label  class="form-label" for="turjawali">Turjawali</label>
                                    <input type="text" class="form-input" name="turjawali" placeholder="test2">
                                </div>
                                <div class="col-md-12  mt-3"> 
                                    <label  class="form-label" for="kendaraan">Kendaraan</label>
                                    <input type="text" class="form-input" name="kendaraan" placeholder="test2">
                                </div>
                                <div class="col-md-12  mt-3"> 
                                    <label  class="form-label" for="turjawali">Deskripsi Penugasan</label>
                                    <textarea name="deskripsi" class="form-input" placeholder="test2" cols="25" rows="7"></textarea> 
                                </div>
                                <div class="col-md-12  mt-3 mb-3"> 
                                    <div style="display: flex;text-align: center;align-content: end;float: inline-end;margin-right: 10px;">
                                        <button class="btn btn-primary">Kirim</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- item-->
                </div>
            </div>
            <!-- <div id="telusuri-peta" data-bs-toggle="modal" data-bs-target="#modaltelusuripeta" style="cursor: pointer; display:flex; width:400px; height:40px; background-color:white; border-radius:0.25rem;margin: 10px;border: 1px solid var(--bs-input-border);">
                <div class="row">
                    <div class="col-md-3">
                        <i class="fa fa-fw fas fa-align-justify" style="margin: 10px;"></i>
                    </div>
                    <div class="col-md-6">
                        <p style="margin: 6px;">Telusuri Peta</p>
                    </div>
                    <div class="col-md-3">
                        <i class="fa fa-fw fas fa-search" style="margin: 10px;"></i>
                    </div>
                </div>
            </div> -->
            <select class="form-select" name="sebaran" style="margin: 10px;">
                <option selected value="">Titik Sebaran</option>
                <option value="Polres">Polres</option>
                <option value="Turjawali">Turjawali</option>
                <option value="Operasi">Operasi</option>
                <option value="CCTV">CCTV</option>
                <option value="Titik Laporan">Titik Laporan</option>
                <option value="Fasilitas Umum">Fasilitas Umum</option>
                <option value="Public Event">Public Event</option>
                <option value="Kecelakaan">Kecelakaan</option>
            </select>
        </div>
        <div id="mapG20Dashboard"></div>
    </div>
</div>
  


<script>
  $(document).ready(function() { 
    // alert('oke');

    // $("#overlay").fadeIn(300);  

    // $('#telusuri-peta').on("click",function(event){
        // var id = $(this).data("id");
        // alert('oke');
    // }); 

    $('#telusuri-peta').on("click",function(event){
        $('.side-slide').animate({left: "0px"}, 200);
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
    var mapContainer = L.map('mapG20Dashboard', {
        maxZoom: 20,
        minZoom: 1,
        zoomSnap: 0.25,
        zoomControl: false,
        layers: [googleStreet]
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
        position: 'bottomleft'
    }).addTo(mapContainer);
    L.control.zoom({
        position: 'bottomright'
    }).addTo(mapContainer);

    var arrayData = $.grep(data, function (element, index) {
        return element.coordinate != null && element.coordinate != '';
    });
    // console.log(arrayData); 

    for (let i = 0; i < arrayData.length; i++) { 
        var cordinate = arrayData[i].coordinate;
        var latlong =  cordinate.split(',');
        var latitude = parseFloat(latlong[0]);
        var longitude = parseFloat(latlong[1]);
        // console.log({a:latitude , b:longitude});

        markerClusterGroup.addLayer(
            L.marker([latitude,longitude], {
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




 
  });
</script> 
