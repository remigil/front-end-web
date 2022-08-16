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
                            <input type="text" placeholder="Telusuri Peta" name="search">
                            <!-- <p style="margin: 6px;">Telusuri Peta</p> -->
                        </div>
                        <div class="col-md-3">
                            <i class="fa fa-fw fas fa-search" style="margin: 10px;"></i>
                        </div>
                    </div>
                </div>
                <div class="dropdown-menu" style="background: transparent; border: transparent; box-shadow: none;">
                    <div style="width: 248px; background-color: white;border-radius: 0.25rem;margin-left: 7px;margin-top: -10px;">
                        <div class="row" style="margin-left: 0px;overflow-x: scroll;height: 480px;scrollbar-width: thin;position: relative; padding: 15px;">
                            <form class="form" method="POST" enctype="multipart/form-data"> 
                                <div class="col-md-12 mt-2">
                                    <p style="font-size: 17px;">OPERASI</p>
                                </div>
                                <div class="col-md-12 ms-2">
                                    <input type="checkbox" name="polres" id="polres" class="form-input" >  
                                    <span>Polres</span> 
                                </div>   
                                <div class="col-md-12 mt-3 ms-2">
                                    <input type="checkbox" name="tur" id="tur" class="form-input" >  
                                    <span>Turjawali</span> 
                                </div> 
                                <div class="col-md-12 mt-3 ms-2">
                                    <input type="checkbox" name="vip" id="vip" class="form-input" >  
                                    <span>VIP</span> 
                                </div> 
                                <div class="col-md-12 mt-3 ms-2">
                                    <input type="checkbox" name="cctv" id="cctv" class="form-input" >  
                                    <span>CCTV</span> 
                                </div>  

                                <div class="dropdown-divider"></div>
                                <div class="col-md-12">
                                    <p style="font-size: 17px;">Laporan</p>
                                </div>
                                <div class="col-md-12 mt-3 ms-2">
                                    <input type="checkbox" name="panic" id="panic" class="form-input" >  
                                    <span>Panic Button</span> 
                                </div>   
                                <div class="col-md-12 mt-3 ms-2">
                                    <input type="checkbox" name="operasi" id="operasi" class="form-input" >  
                                    <span>Operasi</span> 
                                </div>   

                                <div class="dropdown-divider"></div>
                                <div class="col-md-12 ">
                                    <p style="font-size: 17px;">Location Of Interest</p>
                                </div>
                                <div class="col-md-12 mt-3 ms-2">
                                    <input type="checkbox" name="panic" id="panic" class="form-input" >  
                                    <span>Fasilitas Umum</span> 
                                </div>   
                                <div class="col-md-12 mt-3 ms-2">
                                    <input type="checkbox" name="operasi" id="operasi" class="form-input" >  
                                    <span>Public Event</span> 
                                </div>   
                                <div class="dropdown-divider"></div>
 
                            </form>
                        </div>
                    </div>
                    <!-- item-->
                </div>
            </div> 
            <!-- <select class="form-select" name="sebaran" style="margin: 10px;">
                <option selected value="">Titik Sebaran</option>
                <option value="Polres">Polres</option>
                <option value="Turjawali">Turjawali</option>
                <option value="Operasi">Operasi</option>
                <option value="CCTV">CCTV</option>
                <option value="Titik Laporan">Titik Laporan</option>
                <option value="Fasilitas Umum">Fasilitas Umum</option>
                <option value="Public Event">Public Event</option>
                <option value="Kecelakaan">Kecelakaan</option>
            </select> -->
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

    $("#turjawali").select2();
     

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
