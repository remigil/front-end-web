<div class="row">
    <div class="col-md-12"> 

    <!-- <a href='#' id='export'>Export Features</a> -->
        <div style="display:flex;z-index: 999;position: absolute;">
            <div class="dropdown d-inline-block">
                <div style="cursor: pointer; display:flex; width:350px; height:40px; background-color:white; border-radius:0.25rem;margin: 10px;border: 1px solid var(--bs-input-border);" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="row" style="margin-left: 0px;"> 
                        <div class="col-md-12">
                            <div style="display: flex;">
                                <i class="fa fa-fw fas fa-align-justify" style="margin: 10px;z-index: 9;"></i>
                                <input type="text" placeholder="Telusuri Peta" name="search" style="height: 38px;border: none;margin-left: -47px;width: 347px;padding-left: 50px;"> 
                                <i class="fa fa-fw fas fa-search" style="margin: 10px;z-index: 9;margin-left: -30px;"></i>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="dropdown-menu" style="background: transparent; border: transparent; box-shadow: none;">
                    <div style="width: 348px; background-color: white;border-radius: 0.25rem;margin-left: 7px;margin-top: -10px;">
                        <div style="margin-left: 0px;overflow-x: scroll;height: 400px;scrollbar-width: thin;position: relative; padding: 15px;">
                            <form class="form" method="POST" enctype="multipart/form-data"> 
                                <div class="row">
                                    <div class="col-md-12 mb-1">
                                        <label for="waktu">Tanggal</label>
                                        <div id="reportrange" class="pull-right" style="border-radius: 0.25rem; height: 40px; background: #fff; cursor: pointer; padding: 10px 10px; border: 1px solid #ccc;">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <span style="font-size: 14px;"></span> <b class="caret"></b>
                                                </div>
                                                <div class="col-md-2">
                                                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <input hidden type="date" id="startdate" name="startdate">
                                        <input hidden type="date" id="enddate" name="enddate">
                                    </div>  
                                    <div class="dropdown-divider"></div>

                                    <div class="col-md-12 mt-1">
                                        <p style="font-size: 17px;">OPERASI</p>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="checkbox" name="polres" id="polres" class="form-input" >  
                                        <span>Polres</span> 
                                    </div>   
                                    <div class="col-md-6">
                                        <input type="checkbox" name="tur" id="tur" class="form-input" >  
                                        <span>Turjawali</span> 
                                    </div> 
                                    <div class="col-md-6 mt-3">
                                        <input type="checkbox" name="vip" id="vip" class="form-input" >  
                                        <span>VIP</span> 
                                    </div> 
                                    <div class="col-md-6 mt-3">
                                        <input type="checkbox" name="cctv" id="cctv" class="form-input" >  
                                        <span>CCTV</span> 
                                    </div>  
    
                                    <div class="dropdown-divider"></div>
                                    <div class="col-md-12">
                                        <p style="font-size: 17px;">Laporan</p>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="checkbox" name="panic" id="panic" class="form-input" >  
                                        <span>Panic Button</span> 
                                    </div>   
                                    <div class="col-md-6">
                                        <input type="checkbox" name="operasi" id="operasi" class="form-input" >  
                                        <span>Operasi</span> 
                                    </div>   
    
                                    <div class="dropdown-divider"></div>
                                    <div class="col-md-12 ">
                                        <p style="font-size: 17px;">Location Of Interest</p>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="checkbox" name="panic" id="panic" class="form-input" >  
                                        <span>Fasilitas Umum</span> 
                                    </div>   
                                    <div class="col-md-6">
                                        <input type="checkbox" name="operasi" id="operasi" class="form-input" >  
                                        <span>Public Event</span> 
                                    </div>   
                                    <!-- <div class="dropdown-divider"></div> -->
    
                                    <!-- <div class="material-textfield">
                                        <input style="width: 100%;" placeholder="Pilih Tanggal" name="password" type="password">
                                        <label class="labelmui">Tanggal</label>
                                    </div> --> 
                                </div>
 
                            </form>
                        </div>
                    </div>
                    <!-- item-->
                </div>
            </div>  
        </div>
        <div id="mapG20Dashboard"></div>
    </div>
</div>
  

<script src="https://cdn.socket.io/3.1.3/socket.io.min.js"></script>
<script>
    $(function() {

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


    let app_url = '<%-app_url%>' 
    let path = '<%-path%>'
    
    let data = [];  
    let connected = false; 
    var socket = io('http://k3ig20korlantas.id:3001/', {
    // query: {
    //     token: "eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1aWQiOiJWVEpHYzJSSFZtdFlNU3RWTDJodWIxRnFjbFZMZW5wUmNHcEdUSGRIUzJnMVptMWlUelowYmtGV1JUMCIsIm5ycF91c2VyIjoiVlRKR2MyUkhWbXRZTVRoNmVIVnhNWFZ5TkcxRk1XdFZZa1ZKTkRCVWNWQjNUakJZWWs4M1NWbHZkejAiLCJvZmZpY2VyIjoiVlRKR2MyUkhWbXRZTVN0VFQwYzRNVzh3UVhOamNtWkNMeXQyTmxSdVlsaE1SRm94Umpodk9XTnVhejAiLCJ0aW1lc3RhbXAiOjE2NjA5ODc0NDksImlhdCI6MTY2MDk4NzQ0OSwiZXhwIjoxNjYwOTkxMDQ5LCJhdWQiOiJHMjAiLCJpc3MiOiJLb3JsYW50YXNQb2xyaSIsInN1YiI6IkszSUcyMCJ9.vapdm1lwH-ifw72nfFtCE39XmNFg0N46CvaDFvafp-A2jidKC2_Nn_rwZCTy_I5BI3Usb1028Bwx6kZbXg3WoQ",
    //     user_nrp: "3232912480",
    //     type: "operator", //['admin', 'kakor', 'operator'],
    // }
        query: {
        
            username: "kakor",
            password: "1legalitas!!",
            
            type: "Admin"
        }
    });
    var markerArray = new Array();
    var patrolArray = new Array();


  $(document).ready(function() { 
    // alert('oke');
     
    $("#turjawali").select2(); 


    serverSideGet();
    


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


   
    socket.on("connected", function(resSocket){
        console.log(socket.id);
        console.log(resSocket);
        console.log('ido1');
    });
    // socket.emit("trackingUser", {
    //     lat: 1234,
    //     lon: 1234234
    // })



    function serverSideGet(){

        $.ajax({
            type : "POST",
            url : "<?php echo base_url();?>dashboard/getTracking", 
            data : {
                "status" : '1',
            }, 
            dataType : "JSON",
            success : function(result){ 
                var id;
                let ress = result['data']; 
                console.log(result['data']);
                if (ress.length > 0) {   
                    
                    for (let i = 0; i < ress.length; i++) { 
                        id = ress.id_user; 

                        var jenis = '';
                        if(ress[i].type_vehicle != 'Sepeda Motor'){
                            jenis = `<img src="<?php echo base_url();?>assets/admin/images/mobil.png"><div class="pin"></div><div class="pulse"></div>`;
                        }else{
                            jenis = `<img src="<?php echo base_url();?>assets/admin/images/sepedaMotor.png"><div class="pin"></div><div class="pulse"></div>`
                        }

                        if(markerArray[id] != null){ 
                        markerArray[id].setLatLng([ress[i].latitude,ress[i].longitude], { icon: L.divIcon({
                            className: 'location-pin',
                            html: jenis,
                            iconSize: [30, 30],
                            //iconAnchor: [18, 30]
                            iconAnchor: [10, 33]
                            }) }).bindPopup(`
                            <div class="text-center" style="width: 300px;"> 
                                <div class="row mt-3">
                                    <div class="col-md-12 col-12" style="margin-left: 110px;margin-bottom: 10px;margin-top: 10px;">
                                        <div class="avatar-xl me-3">
                                            <img src="<?php echo base_url();?>assets/admin/images/users/avatar-2.jpg" alt="" class="img-fluid rounded-circle d-block  float-center">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12" style="height: 30px;">
                                        <div class="row text-start">
                                            <div class="col-md-5 col-6">
                                                <p style="font-size: 13px;font-weight: bold;">Nama Akun</p>  
                                            </div>
                                            <div class="col-md-2">
                                                <p style="font-size: 13px;"> : </p>
                                            </div>
                                            <div class="col-md-5 col-6">
                                                <p style="font-size: 13px;">${ress[i].name_account}</p>
                                            </div>
                                        </div> 
                                    </div> 
                                    <div class="col-md-12 col-12" style="height: 30px;">
                                        <div class="row text-start">
                                            <div class="col-md-5 col-6">
                                                <p style="font-size: 13px;font-weight: bold;">Ketua Tim</p>  
                                            </div>
                                            <div class="col-md-2">
                                                <p style="font-size: 13px;"> : </p>
                                            </div>
                                            <div class="col-md-5 col-6">
                                                <p style="font-size: 13px;">${ress[i].name_team}</p>
                                            </div>
                                        </div> 
                                    </div>  
                                    <div class="col-md-12 col-12" style="height: 30px;">
                                        <div class="row text-start">
                                            <div class="col-md-5 col-6">
                                                <p style="font-size: 13px;font-weight: bold;">VIP</p>  
                                            </div>
                                            <div class="col-md-2">
                                                <p style="font-size: 13px;"> : </p>
                                            </div>
                                            <div class="col-md-5 col-6">
                                                <p style="font-size: 13px;">${ress[i].vip}</p>
                                            </div>
                                        </div> 
                                    </div>  
                                    <div class="col-md-12 col-12" style="height: 30px;">
                                        <div class="row text-start">
                                            <div class="col-md-5 col-6">
                                                <p style="font-size: 13px;font-weight: bold;">NRP</p>  
                                            </div>
                                            <div class="col-md-2">
                                                <p style="font-size: 13px;"> : </p>
                                            </div>
                                            <div class="col-md-5 col-6">
                                                <p style="font-size: 13px;">${ress[i].nrp_user}</p>
                                            </div>
                                        </div> 
                                    </div>  
                                    <div class="col-md-12 col-12" style="height: 30px;">
                                        <div class="row text-start">
                                            <div class="col-md-5 col-6">
                                                <p style="font-size: 13px;font-weight: bold;">No Kendaraan</p>  
                                            </div>
                                            <div class="col-md-2">
                                                <p style="font-size: 13px;"> : </p>
                                            </div>
                                            <div class="col-md-5 col-6">
                                                <p style="font-size: 13px;">${ress[i].no_vehicle}</p>
                                            </div>
                                        </div> 
                                    </div>  
                                    <div class="col-md-12 col-12 mb-3" style="height: 30px;">
                                        <div class="row text-start">
                                            <div class="col-md-5 col-6">
                                                <p style="font-size: 13px;font-weight: bold;">Jenis Kendaraan</p>  
                                            </div>
                                            <div class="col-md-2">
                                                <p style="font-size: 13px;"> : </p>
                                            </div>
                                            <div class="col-md-5 col-6">
                                                <p style="font-size: 13px;">${ress[i].type_vehicle}</p>
                                            </div>
                                        </div> 
                                    </div>  
                                </div>
                            </div>
                        `).update();  
                        }else{ 
                        markerArray[id] = L.marker([ress[i].latitude,ress[i].longitude], { icon: L.divIcon({
                            className: 'location-pin',
                            html: jenis,
                            iconSize: [30, 30],
                            //iconAnchor: [18, 30]
                            iconAnchor: [10, 33]
                            }) }).bindPopup(`
                            <div class="text-center" style="width: 300px;"> 
                                <div class="row mt-3">
                                    <div class="col-md-12 col-12" style="margin-left: 110px;margin-bottom: 10px;margin-top: 10px;">
                                        <div class="avatar-xl me-3">
                                            <img src="<?php echo base_url();?>assets/admin/images/users/avatar-2.jpg" alt="" class="img-fluid rounded-circle d-block  float-center">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12" style="height: 30px;">
                                        <div class="row text-start">
                                            <div class="col-md-5 col-6">
                                                <p style="font-size: 13px;font-weight: bold;">Nama Akun</p>  
                                            </div>
                                            <div class="col-md-2">
                                                <p style="font-size: 13px;"> : </p>
                                            </div>
                                            <div class="col-md-5 col-6">
                                                <p style="font-size: 13px;">${ress[i].name_account}</p>
                                            </div>
                                        </div> 
                                    </div> 
                                    <div class="col-md-12 col-12" style="height: 30px;">
                                        <div class="row text-start">
                                            <div class="col-md-5 col-6">
                                                <p style="font-size: 13px;font-weight: bold;">Ketua Tim</p>  
                                            </div>
                                            <div class="col-md-2">
                                                <p style="font-size: 13px;"> : </p>
                                            </div>
                                            <div class="col-md-5 col-6">
                                                <p style="font-size: 13px;">${ress[i].name_team}</p>
                                            </div>
                                        </div> 
                                    </div>  
                                    <div class="col-md-12 col-12" style="height: 30px;">
                                        <div class="row text-start">
                                            <div class="col-md-5 col-6">
                                                <p style="font-size: 13px;font-weight: bold;">VIP</p>  
                                            </div>
                                            <div class="col-md-2">
                                                <p style="font-size: 13px;"> : </p>
                                            </div>
                                            <div class="col-md-5 col-6">
                                                <p style="font-size: 13px;">${ress[i].vip}</p>
                                            </div>
                                        </div> 
                                    </div>  
                                    <div class="col-md-12 col-12" style="height: 30px;">
                                        <div class="row text-start">
                                            <div class="col-md-5 col-6">
                                                <p style="font-size: 13px;font-weight: bold;">NRP</p>  
                                            </div>
                                            <div class="col-md-2">
                                                <p style="font-size: 13px;"> : </p>
                                            </div>
                                            <div class="col-md-5 col-6">
                                                <p style="font-size: 13px;">${ress[i].nrp_user}</p>
                                            </div>
                                        </div> 
                                    </div>  
                                    <div class="col-md-12 col-12" style="height: 30px;">
                                        <div class="row text-start">
                                            <div class="col-md-5 col-6">
                                                <p style="font-size: 13px;font-weight: bold;">No Kendaraan</p>  
                                            </div>
                                            <div class="col-md-2">
                                                <p style="font-size: 13px;"> : </p>
                                            </div>
                                            <div class="col-md-5 col-6">
                                                <p style="font-size: 13px;">${ress[i].no_vehicle}</p>
                                            </div>
                                        </div> 
                                    </div>  
                                    <div class="col-md-12 col-12 mb-3" style="height: 30px;">
                                        <div class="row text-start">
                                            <div class="col-md-5 col-6">
                                                <p style="font-size: 13px;font-weight: bold;">Jenis Kendaraan</p>  
                                            </div>
                                            <div class="col-md-2">
                                                <p style="font-size: 13px;"> : </p>
                                            </div>
                                            <div class="col-md-5 col-6">
                                                <p style="font-size: 13px;">${ress[i].type_vehicle}</p>
                                            </div>
                                        </div> 
                                    </div>  
                                </div>
                            </div>
                        `).addTo(mapContainer);    
                        }
                    }

                }else{

                     

                    $("#overlay").fadeOut(300);  
                } 
            },
            error: function () { 
                console.log("gagal connect");
            } 
        });

    }

    

    socket.on('from server', function(ress) { 
        console.log('ido2');
        var id = ress.id_user;
        console.log(ress) 

        for (let i = 0; i < ress.length; i++) { 
            if(markerArray[id] != null){ 
              markerArray[id].setLatLng([ress[i].latitude,ress[i].longitude], { icon: L.divIcon({
                  className: 'location-pin',
                  html: `<img src="-"><div class="pin"></div><div class="pulse"></div>`,
                  iconSize: [30, 30],
                  //iconAnchor: [18, 30]
                  iconAnchor: [10, 33]
                }) }).bindPopup(`
                  <div class="text-center" style="width: 300px;">
                      <div class="card-block">
                          <a class="avatar avatar-lg" href="javascript:void(0)">
                              <img src="-" alt="Logo">
                          </a>
                          <h4 class="profile-user">-</h4>
                          <h5 class="profile-user">-</h5>
                      </div> 
                  </div>
              `).update();  
            }else{ 
              markerArray[id] = L.marker([ress[i].latitude,ress[i].longitude], { icon: L.divIcon({
                  className: 'location-pin',
                  html: `<img src="-"><div class="pin"></div><div class="pulse"></div>`,
                  iconSize: [30, 30],
                  //iconAnchor: [18, 30]
                  iconAnchor: [10, 33]
                }) }).bindPopup(`
                  <div class="text-center" style="width: 300px;">
                      <div class="card-block">
                          <a class="avatar avatar-lg" href="javascript:void(0)">
                              <img src="-" alt="Logo">
                          </a>
                          <h4 class="profile-user">-</h4>
                          <h5 class="profile-user">-</h5>
                      </div> 
                  </div>
              `).addTo(mapContainer);    
            }
        }
    }) 
    socket.on('sendToAdmin', function(ress) { 
        var id = ress.id_user;
        console.log('ido3');
        console.log(ress);
        
        for (let i = 0; i < ress.length; i++) { 
            console.log(ress[i].id_user);
            if(markerArray[id] != null){ 
              markerArray[id].setLatLng([ress[i].latitude,ress[i].longitude], { icon: L.divIcon({
                  className: 'location-pin',
                  html: `<img src="-"><div class="pin"></div><div class="pulse"></div>`,
                  iconSize: [30, 30],
                  //iconAnchor: [18, 30]
                  iconAnchor: [10, 33]
                }) }).bindPopup(`
                  <div class="text-center" style="width: 300px;">
                      <div class="card-block">
                          <a class="avatar avatar-lg" href="javascript:void(0)">
                              <img src="-" alt="Logo">
                          </a>
                          <h4 class="profile-user">-</h4>
                          <h5 class="profile-user">-</h5>
                      </div> 
                  </div>
              `).update();  
            }else{ 
              markerArray[id] = L.marker([ress[i].latitude,ress[i].longitude], { icon: L.divIcon({
                  className: 'location-pin',
                  html: `<img src="-"><div class="pin"></div><div class="pulse"></div>`,
                  iconSize: [30, 30],
                  //iconAnchor: [18, 30]
                  iconAnchor: [10, 33]
                }) }).bindPopup(`
                  <div class="text-center" style="width: 300px;">
                      <div class="card-block">
                          <a class="avatar avatar-lg" href="javascript:void(0)">
                              <img src="-" alt="Logo">
                          </a>
                          <h4 class="profile-user">-</h4>
                          <h5 class="profile-user">-</h5>
                      </div> 
                  </div>
              `).addTo(mapContainer);    
            }

        }
    });
 

  
    // var control = L.Routing.control({
    //     waypoints: [
    //         L.latLng(-8.451740, 115.089643),
    //         L.latLng(-8.551740, 115.077643),
    //         L.latLng(-8.551740, 115.289643),
    //     ],
    //     router: new L.Routing.osrmv1({
    //         language: 'en',
    //         profile: 'car'
    //     }),
    //     geocoder: L.Control.Geocoder.nominatim({})
    // }).addTo(mapContainer);


    // function createButton(label, container) {
    //     var btn = L.DomUtil.create('button', '', container);
    //     btn.setAttribute('type', 'button');
    //     btn.innerHTML = label;
    //     return btn;
    // }

    // mapContainer.on('click', function(e) {
    //     var container = L.DomUtil.create('div'),
    //         startBtn = createButton('Start from this location', container),
    //         destBtn = createButton('Go to this location', container);

    //     L.DomEvent.on(startBtn, 'click', function() {
    //         control.spliceWaypoints(0, 1, e.latlng);
    //         mapContainer.closePopup();
    //     });
    //     L.DomEvent.on(destBtn, 'click', function() {
    //         control.spliceWaypoints(control.getWaypoints().length - 1, 1, e.latlng);
    //         mapContainer.closePopup();
    //     });
    //     L.popup()
    //         .setContent(container)
    //         .setLatLng(e.latlng)
    //         .openOn(mapContainer);
    // });

    // mapContainer.doubleClickZoom.disable();
    // mapContainer.on('dblclick', function(e) { 
    //     alert(e.latlng);
    // }); 
 

    // mapContainer.on('pm:create', (e) => {
    //     e.layer.setStyle({ pmIgnore: false });
    //     L.PM.reInitLayer(e.layer);
    // });
    // mapContainer.pm.addControls({  
    //     position: 'bottomleft',  
    //     drawCircle: true,  
    // });  

    // mapContainer.on('pm:drawstart', ({ workingLayer }) => {
    // workingLayer.on('pm:vertexadded', (e) => {
    //     console.log(e);
    // });
    // });

 


    // // Initialise the FeatureGroup to store editable layers
    // var featureGroup = new L.FeatureGroup();
    // mapContainer.addLayer(featureGroup);

    // // define custom marker
    // var MyCustomMarker = L.Icon.extend({
    // options: {
    //     shadowUrl: null,
    //     iconAnchor: new L.Point(12, 12),
    //     iconSize: new L.Point(24, 24),
    //     iconUrl: 'https://upload.wikimedia.org/wikipedia/commons/6/6b/Information_icon4_orange.svg'
    // }
    // });

    // var drawPluginOptions = {
    //     position: 'bottomleft',
    //     draw: {
    //         polyline: {
    //             shapeOptions: {
    //                 color: '#f357a1',
    //                 weight: 10
    //             }
    //         },
    //         polygon: {
    //             allowIntersection: false, // Restricts shapes to simple polygons
    //             drawError: {
    //                 color: '#e1e100', // Color the shape will turn when intersects
    //                 message: '<strong>Polygon draw does not allow intersections!<strong> (allowIntersection: false)' // Message that will show when intersect
    //             },
    //             shapeOptions: {
    //                 color: '#bada55'
    //             }
    //         },
    //         circle: true, // Turns off this drawing tool
    //         rectangle: {
    //             shapeOptions: {
    //                 clickable: false
    //             }
    //         },
    //         marker: {
    //             icon: new MyCustomMarker()
    //         }
    //     },
    //     edit: {
    //         featureGroup: featureGroup, //REQUIRED!!
    //         remove: false
    //     }
    // };



    // // Initialise the draw control and pass it the FeatureGroup of editable layers
    // var drawControl = new L.Control.Draw(drawPluginOptions);
    // mapContainer.addControl(drawControl);


    // var featureGroup = new L.FeatureGroup();
    // mapContainer.addLayer(featureGroup); 

    // mapContainer.on('draw:created', function(e) {
    // var type = e.layerType,
    //     layer = e.layer;

    // if (type === 'marker') {
    //     layer.bindPopup('A popup!');
    // }

    // featureGroup.addLayer(layer);
    // });

    // document.getElementById('export').onclick = function(e) {
    //     // Extract GeoJson from featureGroup
    //     var data = featureGroup.toGeoJSON();

    //     // Stringify the GeoJson
    //     var convertedData = 'text/json;charset=utf-8,' + encodeURIComponent(JSON.stringify(data));

    //     // Create export
    //     document.getElementById('export').setAttribute('href', 'data:' + convertedData);
    //     document.getElementById('export').setAttribute('download','data.geojson');
    // }

    

    // var arrayData = $.grep(data, function (element, index) {
    //     return element.coordinate != null && element.coordinate != '';
    // });
    // console.log(arrayData); 

    // for (let i = 0; i < arrayData.length; i++) { 
    //     var cordinate = arrayData[i].coordinate;
    //     var latlong =  cordinate.split(',');
    //     var latitude = parseFloat(latlong[0]);
    //     var longitude = parseFloat(latlong[1]);
    //     // console.log({a:latitude , b:longitude});

    //     markerClusterGroup.addLayer(
    //         L.marker([latitude,longitude], {
    //             icon
    //         }).bindPopup(`
    //             <div class="text-center" style="width: 300px;">
    //                 <div class="card-block">
    //                     <a class="avatar avatar-lg" href="javascript:void(0)">
    //                         <img src="${window.location.origin}/${pisah[1]}/assets_admin/assets/images/logo-colored.png" alt="Logo">
    //                     </a>
    //                     <h4 class="profile-user">${arrayData[i].group_name}</h4>
    //                 </div>
    //                 <div class="row ">
    //                     <div class="col-md-12 col-12" style="margin-top: -15px;">
    //                         <div class="row text-left">
    //                             <div class="col-md-4 col-4">
    //                                 <h5 class="profile-job">Location :</h5>  
    //                             </div>
    //                             <div class="col-md-8 col-8">
    //                                 <p style="margin-top: 11px;">${arrayData[i].obvit_name}</p>
    //                             </div>
    //                         </div> 
    //                     </div> 
    //                     <div class="col-md-12 col-12" style="margin-top: -15px;">
    //                         <div class="row text-left">
    //                             <div class="col-md-4 col-4">
    //                                 <h5 class="profile-job">POC :</h5>  
    //                             </div>
    //                             <div class="col-md-8 col-8">
    //                                 <p style="margin-top: 11px;">${arrayData[i].group_poc_name}</p>
    //                             </div>
    //                         </div> 
    //                     </div>  
    //                     <div class="col-md-12 col-12" style="margin-top: -15px;">
    //                         <div class="row text-left">
    //                             <div class="col-md-4 col-4">
    //                                 <h5 class="profile-job">Demand :</h5>  
    //                             </div>
    //                             <div class="col-md-8 col-8">
    //                                 <p style="margin-top: 11px;">${arrayData[i].demand}</p>
    //                             </div>
    //                         </div> 
    //                     </div>  
    //                 </div>
    //                 <div class="card-footer">
    //                     <div class="row no-space">
    //                         <div class="col-4" style="display: grid">
    //                             <span>Participant/s</span>
    //                             <span class="badge badge-round badge-primary" style="margin-left: 5px;margin-right: 5px;">${arrayData[i].participant_number}</span> 
    //                         </div>
    //                         <div class="col-4" style="display: grid">
    //                             <span>Threat Level</span> 
    //                             ${arrayData[i].threat_level == 1 ? '<span class="badge badge-round badge-warning" style="margin-left: 5px;margin-right: 5px;">Low</span>' : ''}
    //                             ${arrayData[i].threat_level == 2 ? '<span class="badge badge-round badge-primary" style="margin-left: 5px;margin-right: 5px;">Medium</span>' : ''}
    //                             ${arrayData[i].threat_level == 3 ? '<span class="badge badge-round badge-danger" style="margin-left: 5px;margin-right: 5px;">High</span>' : ''}
    //                             ${arrayData[i].threat_level == 4 ? '<span class="badge badge-round badge-danger" style="margin-left: 5px;margin-right: 5px;">High</span>' : ''}
    //                             ${arrayData[i].threat_level == 5 ? '<span class="badge badge-round badge-danger" style="margin-left: 5px;margin-right: 5px;">High</span>' : ''}
    //                             ${arrayData[i].threat_level == 6 ? '<span class="badge badge-round badge-danger" style="margin-left: 5px;margin-right: 5px;">High</span>' : ''}
    //                             ${arrayData[i].threat_level == 7 ? '<span class="badge badge-round badge-danger" style="margin-left: 5px;margin-right: 5px;">High</span>' : ''}
    //                             ${arrayData[i].threat_level == 8 ? '<span class="badge badge-round badge-danger" style="margin-left: 5px;margin-right: 5px;">High</span>' : ''}
    //                             ${arrayData[i].threat_level == 9 ? '<span class="badge badge-round badge-danger" style="margin-left: 5px;margin-right: 5px;">High</span>' : ''}
    //                             ${arrayData[i].threat_level == 10 ? '<span class="badge badge-round badge-danger" style="margin-left: 5px;margin-right: 5px;">High</span>' : ''}
    //                             ${arrayData[i].threat_level == 11 ? '<span class="badge badge-round badge-danger" style="margin-left: 5px;margin-right: 5px;">High</span>' : ''}
    //                             ${arrayData[i].threat_level == 12 ? '<span class="badge badge-round badge-danger" style="margin-left: 5px;margin-right: 5px;">High</span>' : ''}
    //                         </div>
    //                         <div class="col-4" style="display: grid">
    //                             <span>Event Date</span> 
    //                             <span class="badge badge-round badge-primary" style="margin-left: 5px;margin-right: 5px;">${arrayData[i].event_date}</span> 
    //                         </div>
    //                     </div>
    //                 </div>
    //             </div>
    //         `)
    //     ); 
    // }   
    // mapContainer.addLayer(markerClusterGroup);
    mapContainer.setView(initialCenter, initialZoom); 




 
  });
</script> 
