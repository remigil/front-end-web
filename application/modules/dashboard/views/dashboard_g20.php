<!-- <button id="cekarrayTrack">cek marker tracking</button> -->
<div class="row">
    <div class="col-md-12"> 

    <!-- <a href='#' id='export'>Export Features</a> -->
        <div style="top: 50px;right: 10px;position: relative;z-index: 999;text-align: end;"> 
           
        </div>
        <div style="display:flex;z-index: 999;position: absolute;">
            <div class="dropdown d-inline-block">
                <div style="cursor: pointer; display:flex; width:350px; height:40px; background-color:white; border-radius:0.25rem;margin: 10px;border: 1px solid var(--bs-input-border);" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div>
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
                    <a href="javascript:void(0)" class="btn" style="margin-left: 10px; background-color: #fff;width: 40px;font-size: 15px;" data-bs-toggle="modal" data-bs-target="#myModalFilter">
                        <i style="margin-left: -2px;" class="fa fa-fw fas fa-filter"></i>
                    </a> 
                </div>
                
                
                <div class="dropdown-menu" style="background: transparent; border: transparent; box-shadow: none;">
                    <div style="width: 348px; background-color: white;border-radius: 0.25rem;margin-left: 7px;margin-top: -10px;">
                        <div style="margin-left: 0px;overflow-x: scroll;height: 460px;scrollbar-width: thin;position: relative; padding: 15px;">
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
                                        <input type="checkbox"  name="filter" value="polres" id="polres" class="form-input" >  
                                        <span>Polres</span> 
                                    </div> 
                                    <div class="col-md-6">
                                        <input type="checkbox" name="filter" value="instruksi" id="instruksi" class="form-input" >  
                                        <span>Instruksi</span> 
                                    </div>  
                                    <div class="col-md-6 mt-3">
                                        <input type="checkbox" checked name="filter" value="turjawali" id="turjawali" class="form-input" >  
                                        <span>Turjawali</span> 
                                    </div>  
                                    <div class="col-md-6 mt-3">
                                        <input type="checkbox"  name="filter" value="jadwal_kegiatan" id="jadwal" class="form-input" >  
                                        <span>Jadwal Kegiatan</span> 
                                    </div> 
                                    <div class="col-md-6 mt-3">
                                        <input type="checkbox" name="filter" value="vip" id="vip" class="form-input" >  
                                        <span>VIP</span> 
                                    </div> 
                                    <div class="col-md-6 mt-3">
                                        <input type="checkbox" checked name="filter" value="cctv" id="cctv" class="form-input" >  
                                        <span>CCTV</span> 
                                    </div>  
    
                                    <div class="dropdown-divider"></div>
                                    <div class="col-md-12">
                                        <p style="font-size: 17px;">Laporan</p>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="checkbox" name="filter" value="panic_button" id="panic" class="form-input" >  
                                        <span>Panic Button</span> 
                                    </div>   
                                    <div class="col-md-6">
                                        <input type="checkbox" name="filter" value="operasi" id="operasi" class="form-input" >  
                                        <span>Operasi</span> 
                                    </div>   
    
                                    <div class="dropdown-divider"></div>
                                    <div class="col-md-12 ">
                                        <p style="font-size: 17px;">Location Of Interest</p>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="checkbox" name="filter" value="fasum" id="fasum" class="form-input" >  
                                        <span>Fasilitas Umum</span> 
                                    </div>   
                                    <div class="col-md-6">
                                        <input type="checkbox" name="filter" value="troublespot" id="troublespot" class="form-input" >  
                                        <span>Trouble Spot</span> 
                                    </div>   
                                    <div class="col-md-12 mt-3" id="menuKategori">
                                        <p style="font-size: 17px;">Fasilitas Umum Kategori</p> 
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="checkbox" checked name="filterFasumKateg" value="mosque" id="mosque" class="form-input" >  
                                                <span>mosque</span> 
                                            </div>
                                            <div class="col-md-6">
                                                <input type="checkbox" checked name="filterFasumKateg" value="school" id="school" class="form-input" >  
                                                <span>School</span> 
                                            </div>
                                            <div class="col-md-6">
                                                <input type="checkbox" checked name="filterFasumKateg" value="cafe" id="cafe" class="form-input" >  
                                                <span>Cafe</span> 
                                            </div>
                                            <div class="col-md-6">
                                                <input type="checkbox" checked name="filterFasumKateg" value="hospital" id="hospital" class="form-input" >  
                                                <span>Hospital</span> 
                                            </div>
                                            <div class="col-md-6">
                                                <input type="checkbox" checked name="filterFasumKateg" value="lodging" id="lodging" class="form-input" >  
                                                <span>Lodging</span> 
                                            </div>
                                            <div class="col-md-6">
                                                <input type="checkbox" checked name="filterFasumKateg" value="restaurant" id="restaurant" class="form-input" >  
                                                <span>Restaurant</span> 
                                            </div>
                                            <div class="col-md-6">
                                                <input type="checkbox" checked name="filterFasumKateg" value="tourist_attraction" id="tourist_attraction" class="form-input" >  
                                                <span>Tourist Attraction</span> 
                                            </div>
                                            <div class="col-md-6">
                                                <input type="checkbox" checked name="filterFasumKateg" value="fire_station" id="fire_station" class="form-input" >  
                                                <span>Fire Station</span> 
                                            </div>
                                            <div class="col-md-6">
                                                <input type="checkbox" checked name="filterFasumKateg" value="shopping_mall" id="shopping_mall" class="form-input" >  
                                                <span>Shopping Mall</span> 
                                            </div>
                                            <div class="col-md-6">
                                                <input type="checkbox" checked name="filterFasumKateg" value="gas_station" id="gas_station" class="form-input" >  
                                                <span>Gas Station</span> 
                                            </div>
                                        </div>
                                    </div> 

                                    <div class="row mt-2">
                                        <div class="col-md-12">
                                            <a href="javascript:void(0);" class="btn btn-primary" id="filterCari" style="width: 100%">Search</a>
                                        </div>
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

 
<!-- Modal -->
<div class="modal right fade" id="myModalFilter" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg modal-dialog-centered">
    
        <!-- Modal content-->
        <div class="modal-content" style="width: 400px;">
            <div class="modal-header bg-primary">
                <h4 class="modal-title text-white" id="myLargeModalLabel">Filters Map</h4>
                <button type="button" class="btn-close btn-close-white" data-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item" id="jadwalKegiatan">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button fw-medium" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                                Jadwal Kegiatan
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body text-muted">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="list-group" id="listJadwal"> 
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Rencana Pengamanan
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body text-muted">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="list-group" id="listRenpam"> 
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div> 

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading3">
                            <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapse3" aria-expanded="false" aria-controls="flush-collapse3">
                                Petugas
                            </button>
                        </h2>
                        <div id="flush-collapse3" class="accordion-collapse collapse" aria-labelledby="flush-heading3"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body text-muted">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="list-group" id="listPetugas"> 
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div> 
                </div><!-- end accordion -->
            </div>
        </div>
      
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
            <form class="formR" method="post" enctype="multipart/form-data"> 
                    
                    <div class="row">  

                        <div class="col-md-6">
                            <div class="material-selectfield mb-3">
                                <select required name="id_account[]" id="id_account" style="height: 200px;" multiple> 
                                    <?php foreach($data['getAccount'] as $row): ?>
                                        <option value="<?php echo $row['id'];?>"><?php echo $row['name_account'];?></option> 
                                    <?php endforeach; ?> 
                                </select>
                                <label style="margin-top: -20px;font-size: 14px;" class="labelmui">Tim</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="material-textfield mb-3">
                                <input required style="width: 100%;" name="date" id="datepicker" class="form-control" value="<?= date('Y-m-d') ?>" type="date" >
                                <label class="labelmui">Tanggal</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="material-selectfield mb-3">
                                <select required name="id_vip[]" id="id_vip" style="height: 200px" multiple> 
                                    <?php foreach($data['getVip'] as $row): ?>
                                        <option value="<?php echo $row['id'];?>"><?php echo $row['name_vip'];?></option> 
                                    <?php endforeach; ?> 
                                </select>
                                <label style="margin-top: -20px;font-size: 14px;" class="labelmui">VIP</label>
                            </div>
                        </div>  
                        <div class="col-md-6">
                            <div class="material-textfield mb-3">
                                <input required type="text" name="startTime" class="form-control" id="startTime" value="<?php echo date('H:i')?>" data-default="<?php echo date('H:i')?>"> 
                                <label class="labelmui">Waktu Mulai</label>
                            </div>
                        </div>
                        <div class="col-md-6"> 
                            <div class="material-selectfield mb-3">
                                <select name="subjek" class="form-select">
                                    <option selected value="">Pilih Subjek</option> 
                                    <option value="1">Patroli</option> 
                                    <option value="2">Pengawalan</option> 
                                    <option value="3">Penjagaan</option> 
                                    <option value="4">Pengaturan</option> 
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
                                <input required style="width: 100%;" name="instruksi" placeholder="" type="text">
                                <label class="labelmui">Instruksi</label>
                            </div>
                        </div>
                         
                        <input hidden style="width: 100%;" name="ruteawal" id="ruteawal" placeholder="" type="text">

                        <div class="col-md-12 mt-3">
                            <div id="mapG20Kegiatan" style="height: 500px"></div>
                        </div>
                    </div>   

                    <div class="col-md-6 mt-3 float-end">
                        <button class="btn btn-primary float-end" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
  

<script src="https://cdn.socket.io/3.1.3/socket.io.min.js"></script>
<script>
    $(function() {

        var start = moment();
        var end = moment();

        function cb(start, end) {
            $('#reportrange span').html(start.format('MMMM D') + ' - ' + end.format('MMMM D')); 
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
        
            username: "Kakor",
            password: "a",
            
            type: "Admin"
        }
    });
    console.log(socket);
    var markerArray = new Array();
    var markerJadwal = new Array();
    var markerCCTV = new Array();
    var markerFasum = new Array();
    var markerPolres = new Array();
    var routingJadwal = new Array();
    var routingRenpam = new Array();
    var routingRenpam1 = new Array();
    var routingRenpam2 = new Array();
    var arrayFilter = [];
    var arrayFilterFasumKategori = [];


  $(document).ready(function() { 
    // alert('oke');
      
    // var arrayContoh = [ 
    //     {-8.551740, 115.077643},
    //     {-8.451740, 115.089643},
    //     {-8.458519301130188,115.14931575647383},
    //     {-8.452198812821242,115.09396433830263},
    //     {-8.5068977,115.2622931},
    // ];  


    var initialCenter = [-8.451740, 115.089643];
    var initialZoom = 9.65;
    var googleStreet = L.tileLayer('https://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
        maxZoom: 20,
        subdomains: ['mt0', 'mt1', 'mt2', 'mt3'] 
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
    
    mapContainer.doubleClickZoom.disable();
   
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
        $("#overlay").fadeIn(300);   

        
        let countlist = 0;
        let list = ""; 
        $.ajax({
            type : "POST",
            url : "<?php echo base_url();?>dashboard/getTracking", 
            data : {
                "status" : '1',
            }, 
            dataType : "JSON",
            success : function(result){  
                $("#overlay").fadeOut(300); 
                let ress = result['data']; 
                // console.log(result['data']);
                // console.log('get Controller');

                if (ress.length > 0) {    
                    for (let i = 0; i < ress.length; i++) {  

                        var jenis = '';
                        if(ress[i].type_vehicle == 'Sepeda Motor'){
                            // jenis = `<img src="<?php echo base_url();?>assets/admin/images/mobil.png"><div class="pin"></div><div class="pulse"></div>`;
                            jenis = `<img src="<?php echo base_url();?>assets/icon/motor.png" style="width: 22px;margin-top: -10px;margin-left: -10px;">`;
                        }else if(ress[i].type_vehicle == 'Mobil'){
                            jenis = `<img src="<?php echo base_url();?>assets/icon/mobil.png" style="width: 22px;margin-top: -10px;margin-left: -10px;">`;
                        }else{
                            // jenis = `<img src="<?php echo base_url();?>assets/admin/images/sepedaMotor.png"><div class="pin"></div><div class="pulse"></div>`
                            jenis = `<img src="<?php echo base_url();?>assets/icon/topi.png" style="width: 22px;margin-top: -10px;margin-left: -10px;">`;
                        }

                        
                        if(markerArray[ress[i].id_officer] != null){ 
                            markerArray[ress[i].id_officer].setLatLng([ress[i].latitude,ress[i].longitude], { icon: L.divIcon({
                                // className: 'location-pin',
                                html: jenis,
                                iconSize: [5, 5],
                                iconAnchor: [5, 10]
                                // iconAnchor: [10, 33]
                                }) }).bindPopup(`
                                <div class="text-center" style="width: 300px;"> 
                                    <div class="row mt-3">
                                        <div class="col-md-12 col-12" style="margin-left: 110px;margin-bottom: 10px;margin-top: 10px;">
                                            <div class="avatar-xl me-3">
                                                <img src="<?php echo base_url();?>assets/user.jpg" alt="" class="img-fluid rounded-circle d-block  float-center">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12" style="height: 30px;">
                                            <div class="row text-start">
                                                <div class="col-md-5 col-6">
                                                    <p style="font-size: 12px;font-weight: bold;">Nama Akun</p>  
                                                </div>
                                                <div class="col-md-2">
                                                    <p style="font-size: 12px;"> : </p>
                                                </div>
                                                <div class="col-md-5 col-6">
                                                    <p style="font-size: 12px;">${ress[i].name_account}</p>
                                                </div>
                                            </div> 
                                        </div> 
                                        <div class="col-md-12 col-12" style="height: 30px;">
                                            <div class="row text-start">
                                                <div class="col-md-5 col-6">
                                                    <p style="font-size: 12px;font-weight: bold;">Ketua Tim</p>  
                                                </div>
                                                <div class="col-md-2">
                                                    <p style="font-size: 12px;"> : </p>
                                                </div>
                                                <div class="col-md-5 col-6">
                                                    <p style="font-size: 12px;">${ress[i].name_team}</p>
                                                </div>
                                            </div> 
                                        </div>  
                                        <div class="col-md-12 col-12" style="height: 30px;">
                                            <div class="row text-start">
                                                <div class="col-md-5 col-6">
                                                    <p style="font-size: 12px;font-weight: bold;">No Telfon</p>  
                                                </div>
                                                <div class="col-md-2">
                                                    <p style="font-size: 12px;"> : </p>
                                                </div>
                                                <div class="col-md-5 col-6">
                                                    <a href="https://api.whatsapp.com/send?phone=${ress[i].handphone}" target="_blank"><p style="font-size: 12px;">${ress[i].handphone}</p></a>
                                                </div>
                                            </div> 
                                        </div>  
                                        <div class="col-md-12 col-12" style="height: 30px;">
                                            <div class="row text-start">
                                                <div class="col-md-5 col-6">
                                                    <p style="font-size: 12px;font-weight: bold;">NRP</p>  
                                                </div>
                                                <div class="col-md-2">
                                                    <p style="font-size: 12px;"> : </p>
                                                </div>
                                                <div class="col-md-5 col-6">
                                                    <p style="font-size: 12px;">${ress[i].nrp_user}</p>
                                                </div>
                                            </div> 
                                        </div>  
                                        <div class="col-md-12 col-12" style="height: 30px;">
                                            <div class="row text-start">
                                                <div class="col-md-5 col-6">
                                                    <p style="font-size: 12px;font-weight: bold;">No Kendaraan</p>  
                                                </div>
                                                <div class="col-md-2">
                                                    <p style="font-size: 12px;"> : </p>
                                                </div>
                                                <div class="col-md-5 col-6">
                                                    <p style="font-size: 12px;">${ress[i].no_vehicle}</p>
                                                </div>
                                            </div> 
                                        </div>  
                                        <div class="col-md-12 col-12 mb-3" style="height: 30px;">
                                            <div class="row text-start">
                                                <div class="col-md-5 col-6">
                                                    <p style="font-size: 12px;font-weight: bold;">Jenis Kendaraan</p>  
                                                </div>
                                                <div class="col-md-2">
                                                    <p style="font-size: 12px;"> : </p>
                                                </div>
                                                <div class="col-md-5 col-6">
                                                    <p style="font-size: 12px;">${ress[i].type_vehicle}</p>
                                                </div>
                                            </div> 
                                        </div>  
                                    </div>
                                </div>
                            `).update();  
                        }else{ 
                            markerArray[ress[i].id_officer] = L.marker([ress[i].latitude,ress[i].longitude], { icon: L.divIcon({
                                // className: 'location-pin',
                                html: jenis,
                                iconSize: [5, 5],
                                iconAnchor: [5, 10]
                                // iconAnchor: [10, 33]
                                }) }).bindPopup(`
                                <div class="text-center" style="width: 300px;"> 
                                    <div class="row mt-3">
                                        <div class="col-md-12 col-12" style="margin-left: 110px;margin-bottom: 10px;margin-top: 10px;">
                                            <div class="avatar-xl me-3">
                                                <img src="<?php echo base_url();?>assets/user.jpg" alt="" class="img-fluid rounded-circle d-block  float-center">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12" style="height: 30px;">
                                            <div class="row text-start">
                                                <div class="col-md-5 col-6">
                                                    <p style="font-size: 12px;font-weight: bold;">Nama Akun</p>  
                                                </div>
                                                <div class="col-md-2">
                                                    <p style="font-size: 12px;"> : </p>
                                                </div>
                                                <div class="col-md-5 col-6">
                                                    <p style="font-size: 12px;">${ress[i].name_account}</p>
                                                </div>
                                            </div> 
                                        </div> 
                                        <div class="col-md-12 col-12" style="height: 30px;">
                                            <div class="row text-start">
                                                <div class="col-md-5 col-6">
                                                    <p style="font-size: 12px;font-weight: bold;">Ketua Tim</p>  
                                                </div>
                                                <div class="col-md-2">
                                                    <p style="font-size: 12px;"> : </p>
                                                </div>
                                                <div class="col-md-5 col-6">
                                                    <p style="font-size: 12px;">${ress[i].name_team}</p>
                                                </div>
                                            </div> 
                                        </div>  
                                        <div class="col-md-12 col-12" style="height: 30px;">
                                            <div class="row text-start">
                                                <div class="col-md-5 col-6">
                                                    <p style="font-size: 12px;font-weight: bold;">No Telfon</p>  
                                                </div>
                                                <div class="col-md-2">
                                                    <p style="font-size: 12px;"> : </p>
                                                </div>
                                                <div class="col-md-5 col-6">
                                                    <a href="https://api.whatsapp.com/send?phone=${ress[i].handphone}" target="_blank"><p style="font-size: 12px;">${ress[i].handphone}</p></a>
                                                </div>
                                            </div> 
                                        </div>  
                                        <div class="col-md-12 col-12" style="height: 30px;">
                                            <div class="row text-start">
                                                <div class="col-md-5 col-6">
                                                    <p style="font-size: 12px;font-weight: bold;">NRP</p>  
                                                </div>
                                                <div class="col-md-2">
                                                    <p style="font-size: 12px;"> : </p>
                                                </div>
                                                <div class="col-md-5 col-6">
                                                    <p style="font-size: 12px;">${ress[i].nrp_user}</p>
                                                </div>
                                            </div> 
                                        </div>  
                                        <div class="col-md-12 col-12" style="height: 30px;">
                                            <div class="row text-start">
                                                <div class="col-md-5 col-6">
                                                    <p style="font-size: 12px;font-weight: bold;">No Kendaraan</p>  
                                                </div>
                                                <div class="col-md-2">
                                                    <p style="font-size: 12px;"> : </p>
                                                </div>
                                                <div class="col-md-5 col-6">
                                                    <p style="font-size: 12px;">${ress[i].no_vehicle}</p>
                                                </div>
                                            </div> 
                                        </div>  
                                        <div class="col-md-12 col-12 mb-3" style="height: 30px;">
                                            <div class="row text-start">
                                                <div class="col-md-5 col-6">
                                                    <p style="font-size: 12px;font-weight: bold;">Jenis Kendaraan</p>  
                                                </div>
                                                <div class="col-md-2">
                                                    <p style="font-size: 12px;"> : </p>
                                                </div>
                                                <div class="col-md-5 col-6">
                                                    <p style="font-size: 12px;">${ress[i].type_vehicle}</p>
                                                </div>
                                            </div> 
                                        </div>  
                                    </div>
                                </div>
                            `).addTo(mapContainer);    
                        }
                      
                    }


                      
                    countlist = 0;
                    list = "";
                    ress.forEach(el => { 
                        countlist += 1;
                        list += `<div class="list-group-item text-start" style="display: flex;" 
                        href="javascript:void(0)">${el.name_officer} 
                            <div style="right: 1px;position: absolute;">
                            
                            <div style="display: flex;">
                                <a class="btn" style="margin-top: -7px;" href="https://api.whatsapp.com/send?phone=${el.handphone}" target="_blank"><i class="fa fas fa-phone "></i></a> 
                                    <div class="switch">
                                        <input class="flag" type="checkbox" id="flag${countlist}" 
                                        data-id="${el.id_officer}"  
                                        data-nama="${el.name_team}"  
                                        data-akun="${el.name_account}" 
                                        data-nrp="${el.nrp_user}"
                                        data-telp="${el.handphone}"
                                        data-cord="${el.latitude},${el.longitude}"
                                        data-toggle="toggle"  data-onstyle="success" data-offstyle="danger" data-on="Approved" data-off="Not Approved" data-size="lg"> 
                                        <label for="flag${countlist}"></label>
                                    </div>
                                    <button class="btn" style="margin-top: -7px;"
                                        id="listPetugasClick${countlist}"   
                                        data-nama="${el.name_team}"  
                                        data-akun="${el.name_account}" 
                                        data-nrp="${el.nrp_user}"
                                        data-telp="${el.handphone}"
                                        data-cord="${el.latitude},${el.longitude}" >
                                        <i class="fa fas fa-eye"></i>
                                    </button>
                                </div>

                              
                            </div>
                        </div>`;
                        $('#listPetugas').html(list); 
                    });  

                    
                    for (let i = 0; i < ress.length; i++){ 
                        $(`#listPetugasClick${i+1}`).click(function(){   
                            var latlong =  $(this).data('cord').split(',');
                            var latitude = parseFloat(latlong[0]);
                            var longitude = parseFloat(latlong[1]); 
                            mapContainer.flyTo([latitude, longitude], 17);    
                        });

                        $(`#flag${i+1}`).on("change", function (e) {
                            // alert($(this).data('id'));
                            if($(`#flag${i+1}`).is(':checked')){
                                mapContainer.removeLayer(markerArray[$(this).data('id')]); 
                            }else{
                                mapContainer.addLayer(markerArray[$(this).data('id')]); 
                            }
                        });

                        // $(`#listPetugasIncognito${i+1}`).click(function(){   
                        //     console.log(markerArray[$(this).data('id')]);
                        //     mapContainer.removeLayer(markerArray[$(this).data('id')]); 
                        // }); 
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

    function togglePress(e) {
        const btn = e.target;
        const isPressed = btn.getAttribute("aria-pressed"); 
        if (isPressed == "false") {
            btn.setAttribute("aria-pressed", true);
        } else {
            btn.setAttribute("aria-pressed", false);
        } 
    }
    document.querySelector("button").addEventListener("click", togglePress);

    socket.on('from server', function(ress) { 
        console.log('ido2'); 
        console.log(ress) 

        // for (let i = 0; i < ress.length; i++) {  
            if(markerArray[ress.id_officer] != null){ 
              markerArray[ress.id_officer].setLatLng([ress.latitude,ress.longitude], { icon: L.divIcon({
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
              markerArray[ress.id_officer] = L.marker([ress.latitude,ress.longitude], { icon: L.divIcon({
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
        // }
    }) 
    socket.on('sendToAdminMobile', function(ress) { 
        console.log('ido3');
        console.log(ress); 


       
        // for (let i = 0; i < ress.length; i++) {  

            var jenis = '';
            if(ress.type_vehicle == 'Sepeda Motor'){
                // jenis = `<img src="<?php echo base_url();?>assets/admin/images/mobil.png"><div class="pin"></div><div class="pulse"></div>`;
                jenis = `<img src="<?php echo base_url();?>assets/icon/motor.png" style="width: 22px;margin-top: -10px;margin-left: -10px;">`;
            }else if(ress.type_vehicle == 'Mobil'){
                jenis = `<img src="<?php echo base_url();?>assets/icon/mobil.png" style="width: 22px;margin-top: -10px;margin-left: -10px;">`;
            }else{
                // jenis = `<img src="<?php echo base_url();?>assets/admin/images/sepedaMotor.png"><div class="pin"></div><div class="pulse"></div>`
                jenis = `<img src="<?php echo base_url();?>assets/icon/topi.png" style="width: 22px;margin-top: -10px;margin-left: -10px;">`;
            }
 
            if(markerArray[ress.id_officer] != null){ 
            markerArray[ress.id_officer].setLatLng([ress.latitude,ress.longitude], { icon: L.divIcon({
                //   className: 'location-pin',
                html: jenis,
                iconSize: [5, 5],
                iconAnchor: [5, 10]
                // iconAnchor: [10, 33]
                }) }).bindPopup(`
                    <div class="text-center" style="width: 300px;"> 
                        <div class="row mt-3">
                            <div class="col-md-12 col-12" style="margin-left: 110px;margin-bottom: 10px;margin-top: 10px;">
                                <div class="avatar-xl me-3">
                                    <img src="<?php echo base_url();?>assets/user.jpg" alt="" class="img-fluid rounded-circle d-block  float-center">
                                </div>
                            </div>
                            <div class="col-md-12 col-12" style="height: 30px;">
                                <div class="row text-start">
                                    <div class="col-md-5 col-6">
                                        <p style="font-size: 12px;font-weight: bold;">Nama Akun</p>  
                                    </div>
                                    <div class="col-md-2">
                                        <p style="font-size: 12px;"> : </p>
                                    </div>
                                    <div class="col-md-5 col-6">
                                        <p style="font-size: 12px;">${ress.name_account}</p>
                                    </div>
                                </div> 
                            </div> 
                            <div class="col-md-12 col-12" style="height: 30px;">
                                <div class="row text-start">
                                    <div class="col-md-5 col-6">
                                        <p style="font-size: 12px;font-weight: bold;">Ketua Tim</p>  
                                    </div>
                                    <div class="col-md-2">
                                        <p style="font-size: 12px;"> : </p>
                                    </div>
                                    <div class="col-md-5 col-6">
                                        <p style="font-size: 12px;">${ress.name_team}</p>
                                    </div>
                                </div> 
                            </div>  
                            <div class="col-md-12 col-12" style="height: 30px;">
                                <div class="row text-start">
                                    <div class="col-md-5 col-6">
                                        <p style="font-size: 12px;font-weight: bold;">No Telfon</p>  
                                    </div>
                                    <div class="col-md-2">
                                        <p style="font-size: 12px;"> : </p></a>
                                    </div>
                                    <div class="col-md-5 col-6">
                                    <a href="https://api.whatsapp.com/send?phone=${ress.handphone}" target="_blank"><p style="font-size: 12px;">${ress.handphone}</p></a>
                                    </div>
                                </div> 
                            </div>  
                            <div class="col-md-12 col-12" style="height: 30px;">
                                <div class="row text-start">
                                    <div class="col-md-5 col-6">
                                        <p style="font-size: 12px;font-weight: bold;">NRP</p>  
                                    </div>
                                    <div class="col-md-2">
                                        <p style="font-size: 12px;"> : </p>
                                    </div>
                                    <div class="col-md-5 col-6">
                                        <p style="font-size: 12px;">${ress.nrp_user}</p>
                                    </div>
                                </div> 
                            </div>  
                            <div class="col-md-12 col-12" style="height: 30px;">
                                <div class="row text-start">
                                    <div class="col-md-5 col-6">
                                        <p style="font-size: 12px;font-weight: bold;">No Kendaraan</p>  
                                    </div>
                                    <div class="col-md-2">
                                        <p style="font-size: 12px;"> : </p>
                                    </div>
                                    <div class="col-md-5 col-6">
                                        <p style="font-size: 12px;">${ress.no_vehicle}</p>
                                    </div>
                                </div> 
                            </div>  
                            <div class="col-md-12 col-12 mb-3" style="height: 30px;">
                                <div class="row text-start">
                                    <div class="col-md-5 col-6">
                                        <p style="font-size: 12px;font-weight: bold;">Jenis Kendaraan</p>  
                                    </div>
                                    <div class="col-md-2">
                                        <p style="font-size: 12px;"> : </p>
                                    </div>
                                    <div class="col-md-5 col-6">
                                        <p style="font-size: 12px;">${ress.type_vehicle}</p>
                                    </div>
                                </div> 
                            </div>  
                        </div>
                    </div>
            `).update();  
            }else{ 
            markerArray[ress.id_officer] = L.marker([ress.latitude,ress.longitude], { icon: L.divIcon({
                //   className: 'location-pin',
                html: jenis,
                iconSize: [5, 5],
                iconAnchor: [5, 10]
                // iconAnchor: [10, 33]
                }) }).bindPopup(`
                    <div class="text-center" style="width: 300px;"> 
                        <div class="row mt-3">
                            <div class="col-md-12 col-12" style="margin-left: 110px;margin-bottom: 10px;margin-top: 10px;">
                                <div class="avatar-xl me-3">
                                    <img src="<?php echo base_url();?>assets/user.jpg" alt="" class="img-fluid rounded-circle d-block  float-center">
                                </div>
                            </div>
                            <div class="col-md-12 col-12" style="height: 30px;">
                                <div class="row text-start">
                                    <div class="col-md-5 col-6">
                                        <p style="font-size: 12px;font-weight: bold;">Nama Akun</p>  
                                    </div>
                                    <div class="col-md-2">
                                        <p style="font-size: 12px;"> : </p>
                                    </div>
                                    <div class="col-md-5 col-6">
                                        <p style="font-size: 12px;">${ress.name_account}</p>
                                    </div>
                                </div> 
                            </div> 
                            <div class="col-md-12 col-12" style="height: 30px;">
                                <div class="row text-start">
                                    <div class="col-md-5 col-6">
                                        <p style="font-size: 12px;font-weight: bold;">Ketua Tim</p>  
                                    </div>
                                    <div class="col-md-2">
                                        <p style="font-size: 12px;"> : </p>
                                    </div>
                                    <div class="col-md-5 col-6">
                                        <p style="font-size: 12px;">${ress.name_team}</p>
                                    </div>
                                </div> 
                            </div>  
                            <div class="col-md-12 col-12" style="height: 30px;">
                                <div class="row text-start">
                                    <div class="col-md-5 col-6">
                                        <p style="font-size: 12px;font-weight: bold;">No Telfon</p>  
                                    </div>
                                    <div class="col-md-2">
                                        <p style="font-size: 12px;"> : </p>
                                    </div>
                                    <div class="col-md-5 col-6">
                                    <a href="https://api.whatsapp.com/send?phone=${ress.handphone}" target="_blank"><p style="font-size: 12px;">${ress.handphone}</p></a>
                                    </div>
                                </div> 
                            </div>  
                            <div class="col-md-12 col-12" style="height: 30px;">
                                <div class="row text-start">
                                    <div class="col-md-5 col-6">
                                        <p style="font-size: 12px;font-weight: bold;">NRP</p>  
                                    </div>
                                    <div class="col-md-2">
                                        <p style="font-size: 12px;"> : </p>
                                    </div>
                                    <div class="col-md-5 col-6">
                                        <p style="font-size: 12px;">${ress.nrp_user}</p>
                                    </div>
                                </div> 
                            </div>  
                            <div class="col-md-12 col-12" style="height: 30px;">
                                <div class="row text-start">
                                    <div class="col-md-5 col-6">
                                        <p style="font-size: 12px;font-weight: bold;">No Kendaraan</p>  
                                    </div>
                                    <div class="col-md-2">
                                        <p style="font-size: 12px;"> : </p>
                                    </div>
                                    <div class="col-md-5 col-6">
                                        <p style="font-size: 12px;">${ress.no_vehicle}</p>
                                    </div>
                                </div> 
                            </div>  
                            <div class="col-md-12 col-12 mb-3" style="height: 30px;">
                                <div class="row text-start">
                                    <div class="col-md-5 col-6">
                                        <p style="font-size: 12px;font-weight: bold;">Jenis Kendaraan</p>  
                                    </div>
                                    <div class="col-md-2">
                                        <p style="font-size: 12px;"> : </p>
                                    </div>
                                    <div class="col-md-5 col-6">
                                        <p style="font-size: 12px;">${ress.type_vehicle}</p>
                                    </div>
                                </div> 
                            </div>  
                        </div>
                    </div>
            `).addTo(mapContainer);    
            }
        

        // } 
    });

    var centerMap = mapContainer.getCenter();
    var centerLat = centerMap['lat'];
    var centerLng = centerMap['lng'];  


    
    serverSideGet();
    
    serverSideFilter();  
    // serverSideGetJadwal();
    // serverSideGetCCTV(); 
    // serverSideGetFasum();
    // serverSideGetPolres();

    mapContainer.on('dragend',function(e){ 
        var ada = mapContainer.getCenter();
        centerLat = ada['lat'];
        centerLng = ada['lng'];   
        if($('#fasum').is(':checked')){ 
            serverSideFilter();
        }
    });

    $("#menuKategori").hide();
    $("#fasum").on("change", function (e) {
        if($('#fasum').is(':checked')){
            $("#menuKategori").show();
        }else{
            $("#menuKategori").hide();
        }
    });

    function serverSideFilter(){
        $("#overlay").fadeIn(300);   
        arrayFilter = [];
        $("input:checkbox[name=filter]:checked").each(function(){
            arrayFilter.push($(this).val());
        });  

        arrayFilterFasumKategori = [];
        $("input:checkbox[name=filterFasumKateg]:checked").each(function(){
            arrayFilterFasumKategori.push($(this).val());
        });  


        for (let i = 0; i < markerJadwal.length; i++) { 
            mapContainer.removeLayer(markerJadwal[i]);
        }
        markerJadwal = new Array();

        for (let i = 0; i < markerCCTV.length; i++) { 
            mapContainer.removeLayer(markerCCTV[i]);
        } 
        markerCCTV = new Array();  

        for (let i = 0; i < markerFasum.length; i++) { 
            mapContainer.removeLayer(markerFasum[i]);
        }
        markerFasum = new Array();  

        for (let i = 0; i < markerPolres.length; i++) { 
            mapContainer.removeLayer(markerPolres[i]);
        }
        markerPolres = new Array(); 

        // console.log(`${centerLat},${centerLng}`);  
        
        

        $.ajax({
            type : "POST",
            url : "<?php echo base_url();?>dashboard/getFilter", 
            data : {
                "filter" : arrayFilter.toString(),
                "radius" : 15000,
                "coordinate" : `${centerLat},${centerLng}`,
                "type" : arrayFilterFasumKategori.toString(), 
            }, 
            dataType : "JSON",
            success : function(result){  
                $("#overlay").fadeOut(300); 
                var ressTurjawali = result['data']['turjawali'];
                var ressPolres = result['data']['polres'];
                var ressCctv = result['data']['cctv'];
                var ressLaporan = result['data']['titik_laporan'];
                var ressFasum = result['data']['fasum'];
                var ressTroublespot = result['data']['troublespot'];
                var ressSchedule = result['data']['jadwal_kegiatan'];
                var ressOperasi = result['data']['operasi'];
                // console.log(result);

                if(ressTurjawali && ressTurjawali.length > 0){  
                    var filterTurjawali = ressTurjawali.filter(function (e) {
                        return e.latitude != null && e.longitude != null;
                    }); 
                }
                if(ressPolres && ressPolres.length > 0){  
                    var filterpolres = ressPolres.filter(function (e) {
                        return e.latitude != null && e.longitude != null;
                    }); 

                    if(filterpolres.length > 0){  
                        var logoMarker = '';
                        var logoBody = '';
                        for (let i = 0; i < filterpolres.length; i++) {  
    
                                var latitudePolres = parseFloat(filterpolres[i].latitude);
                                var longitudePolres = parseFloat(filterpolres[i].longitude); 
        
                                markerPolres[i] = L.marker([latitudePolres,longitudePolres], { icon: L.divIcon({
                                    // className: 'location-pin',
                                    html: `<img src="<?php echo base_url();?>assets/icon/polres.png" style="width: 22px;margin-top: -10px;margin-left: -10px;">`,
                                    iconSize: [5, 5],
                                    iconAnchor: [5, 10]
                                    // iconAnchor: [10, 33]
                                    }) }).bindPopup(`
                                        <div class="text-center" style="width: 300px;"> 
                                            <div class="row mt-3">
                                                <div class="col-md-12 col-12" style="margin-left: 110px;margin-bottom: 10px;margin-top: 10px;">
                                                    <div class="avatar-xl me-3">
                                                        <img src="<?php echo base_url();?>assets/icon/polres.png" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 100%;">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12 mt-3">
                                                    <h5>${filterpolres[i].name_polres}</h5> 
                                                </div>
                                                <div class="col-md-12 col-12 mt-3">
                                                    <div class="row text-start">
                                                        <div class="col-md-5 col-6">
                                                            <p style="font-size: 12px;font-weight: bold;">Alamat</p>  
                                                        </div>
                                                        <div class="col-md-1">
                                                            <p style="font-size: 12px;"> : </p>
                                                        </div>
                                                        <div class="col-md-6 col-6">
                                                            <p style="font-size: 12px;">${filterpolres[i].address}</p>
                                                        </div>
                                                    </div> 
                                                </div> 
                                                <div class="col-md-12 col-12" style="margin-top: -30px;">
                                                    <div class="row text-start">
                                                        <div class="col-md-5 col-6">
                                                            <p style="font-size: 12px;font-weight: bold;">Kode</p>  
                                                        </div>
                                                        <div class="col-md-1">
                                                            <p style="font-size: 12px;"> : </p>
                                                        </div>
                                                        <div class="col-md-6 col-6">
                                                            <p style="font-size: 12px;">${filterpolres[i].code_satpas}</p>
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
                                                            <p style="font-size: 12px;">${filterpolres[i].phone_polres != null ? filterpolres[i].phone_polres : '-'}</p>
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
                                                            <p style="font-size: 12px;">${filterpolres[i].open_time != null ? filterpolres[i].open_time : '00:00'} - ${filterpolres[i].close_time != null ? filterpolres[i].close_time : '00:00'} WITA</p>
                                                        </div>
                                                    </div> 
                                                </div>   
                                            </div>
                                        </div> 
                                `,{minWidth : 100,maxWidth : 560,width : 400}).addTo(mapContainer);  
                            

                        }
                    }
                }
                if(ressCctv && ressCctv.length > 0){  
                    var filterCctv = ressCctv.filter(function (e) {
                        return e.lat_cctv != null && e.lng_cctv != null;
                    });  

                    if(filterCctv.length > 0){  
                        for (let i = 0; i < filterCctv.length; i++) {     
                            id = i;  
                            var latitudeCCTV = parseFloat(filterCctv[i].lat_cctv);
                            var longitudeCCTV = parseFloat(filterCctv[i].lng_cctv);

                            var resource = '';
                            if(filterCctv[i].ip_cctv == 'https://balisatudata.baliprov.go.id/peta-cctv'){
                                resource = `<iframe id="myIframe" src="${filterCctv[i].link_cctv}" style="width: 300px; height: 250.25px;"></iframe>`;
                            }else{
                                resource = `<img style="width: 300px;" src="${filterCctv[i].link_cctv}" />`;
                            }

                            markerCCTV[i] = L.marker([latitudeCCTV,longitudeCCTV], { icon: L.divIcon({
                                // className: 'location-pin',
                                html: `<img src="<?php echo base_url();?>assets/icon/cctv.png" style="width: 22px; margin-top: -10px;margin-left: -10px;">`,
                                iconSize: [5, 5],
                                iconAnchor: [5, 10]
                                // iconAnchor: [10, 33]
                                }) }).bindPopup(`
                                <div style="width: 300px;">
                                    <div class="row">
                                        <div class="col-md-12" style="text-align: center;">
                                            <h5>${filterCctv[i].address_cctv}</h5>
                                        </div>
                                        <div class="col-md-12"> 
                                            ${resource}
                                        </div> 
                                    </div>
                                </div>
                                    
                            `,{minWidth : 100,maxWidth : 560,width : 400}).addTo(mapContainer);   
                        }
                    }
                } 
                if(ressLaporan && ressLaporan.length > 0){  
                    var filterLaporan = ressLaporan.filter(function (e) {
                        return e.lat_cctv != null && e.lng_cctv != null;
                    });   
                }
                if(ressFasum && ressFasum.length > 0){ 
                    var filterFasum = ressFasum.filter(function (e) {
                        return e.geometry.location.lat != null && e.geometry.location.lng != null;
                    }); 

                    if(filterFasum.length > 0){  
                        var logoMarker = '';
                        var logoBody = '';
                        for (let i = 0; i < filterFasum.length; i++) {  
                            // if(filterFasum[i].fasum_type == 1){
                            //     logoMarker = `hotel.png`;
                            //     logoBody = `hotel.png`;
                            // }else if(filterFasum[i].fasum_type == 2){
                            //     logoMarker = `rumah ibadah.png`;
                            //     logoBody = `rumah ibadah.png`;
                            // }else if(filterFasum[i].fasum_type == 3){
                            //     logoMarker = `pom bensin.png`;
                            //     logoBody = `pom bensin.png`;
                            // }else if(filterFasum[i].fasum_type == 4){
                            //     logoMarker = `rest_area.png`;
                            //     logoBody = `rest_area.png`;
                            // }else if(filterFasum[i].fasum_type == 5){
                            //     logoMarker = `rumah makan.png`;
                            //     logoBody = `rumah makan.png`;
                            // }else if(filterFasum[i].fasum_type == 6){
                            //     logoMarker = `wisata.png`;
                            //     logoBody = `wisata.png`;
                            // }else if(filterFasum[i].fasum_type == 7){
                            //     logoMarker = `damkar.png`;
                            //     logoBody = `damkar.png`;
                            // }else if(filterFasum[i].fasum_type == 8){
                            //     logoMarker = `rumah sakit umum.png`;
                            //     logoBody = `rumah sakit umum.png`;
                            // }
                            
                                var latitudeFasum = parseFloat(filterFasum[i].geometry.location.lat);
                                var longitudeFasum = parseFloat(filterFasum[i].geometry.location.lng); 
                                markerFasum[i] = L.marker([latitudeFasum,longitudeFasum], { icon: L.divIcon({
                                    className: 'location-pin',
                                    html: `<img style="background-color:${filterFasum[i].icon_background_color};" src="${filterFasum[i].icon}"><div class="pin" style="background-color:${filterFasum[i].icon_background_color}"></div>`,
                                    iconSize: [5, 5],
                                    //iconAnchor: [18, 30]
                                    iconAnchor: [5, 10]

                                    }) }).bindPopup(`
                                        <div class="text-center" style="width: 300px;"> 
                                            <div class="row mt-3">
                                                <div class="col-md-12 col-12" style="margin-left: 110px;margin-bottom: 10px;margin-top: 10px;">
                                                    <div class="avatar-xl me-3">
                                                        <img src="${filterFasum[i].icon}" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 100%;">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12 mt-3">
                                                    <h5>Fasilitas Umum</h5>
                                                    <span style="font-size: 14px;">- ${filterFasum[i].name} -</span>
                                                </div>
                                                <div class="col-md-12 col-12 mt-3">
                                                    <div class="row text-start">
                                                        <div class="col-md-5 col-6">
                                                            <p style="font-size: 12px;font-weight: bold;">Nama Fasilitas</p>  
                                                        </div>
                                                        <div class="col-md-1">
                                                            <p style="font-size: 12px;"> : </p>
                                                        </div>
                                                        <div class="col-md-6 col-6">
                                                            <p style="font-size: 12px;">${filterFasum[i].name}</p>
                                                        </div>
                                                    </div> 
                                                </div>     
                                            </div>
                                        </div> 
                                `,{minWidth : 100,maxWidth : 560,width : 400}).addTo(mapContainer);  
                            
                        }
                    }
                }  
                if(ressTroublespot && ressTroublespot.length > 0){ 
                    var filterTroublespot = ressTroublespot.filter(function (e) {
                        return e.lat_cctv != null && e.lng_cctv != null;
                    }); 
                }   
                if(ressSchedule && ressSchedule.length > 0){  
                    var filterSchedule = ressSchedule.filter(function (e) {
                        return e.coordinate_schedule != null;
                    });   
                    // console.log(filterSchedule); 
                    if(filterSchedule.length > 0){  
                        for (var i = 0; i < filterSchedule.length; i++) {   
                            
                            var cordinateJadwal = filterSchedule[i].coordinate_schedule;
                            var latlongJadwal =  cordinateJadwal.split(',');
                            var latitudeJadwal = parseFloat(latlongJadwal[0]);
                            var longitudeJadwal = parseFloat(latlongJadwal[1]);
                            

                                markerJadwal[i] = L.marker([latitudeJadwal,longitudeJadwal], { icon: L.divIcon({
                                    // className: 'location-pin',
                                    html: `<img src="<?php echo base_url();?>assets/icon/jadwal kegiatan.png" style="width: 22px;margin-top: -10px;margin-left: -10px;">`,
                                    iconSize: [5, 5],
                                    iconAnchor: [5, 10]
                                    // iconAnchor: [10, 33]
                                    }) }).bindPopup(`
                                        <div class="text-center" style="width: 300px;"> 
                                            <div class="row mt-3"> 
                                                <div class="col-md-12 col-12" style="margin-left: 110px;margin-bottom: 10px;margin-top: 10px;">
                                                    <div class="avatar-xl me-3">
                                                        <img src="<?php echo base_url();?>assets/icon/jadwal kegiatan.png" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 100%;">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12 mt-3">
                                                    <h5>Jadwal Kegiatan</h5> 
                                                </div>
                                                <div class="col-md-12 col-12 mt-1">
                                                    <div class="row text-start">
                                                        <div class="col-md-5">
                                                            <p style="font-size: 12px;font-weight: bold;">Kegiatan</p>  
                                                        </div>
                                                        <div class="col-md-1">
                                                            <p style="font-size: 12px;"> : </p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p style="font-size: 12px;">${filterSchedule[i].activity}</p>
                                                        </div>
                                                    </div> 
                                                </div> 
                                                <div class="col-md-12 col-12" style="margin-top: -30px;">
                                                    <div class="row text-start">
                                                        <div class="col-md-5">
                                                            <p style="font-size: 12px;font-weight: bold;">Tanggal Kegiatan</p>  
                                                        </div>
                                                        <div class="col-md-1">
                                                            <p style="font-size: 12px;"> : </p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p style="font-size: 12px;">${filterSchedule[i].date_schedule.substr(0, 10)}</p>
                                                        </div>
                                                    </div> 
                                                </div>  
                                                <div class="col-md-12 col-12" style="margin-top: -30px;">
                                                    <div class="row text-start">
                                                        <div class="col-md-5">
                                                            <p style="font-size: 12px;font-weight: bold;">Waktu</p>  
                                                        </div>
                                                        <div class="col-md-1">
                                                            <p style="font-size: 12px;"> : </p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p style="font-size: 12px;">${filterSchedule[i].start_time.substr(0, 5)} - ${filterSchedule[i].end_time.substr(0, 5)} WITA</p>
                                                        </div>
                                                    </div> 
                                                </div>  
                                                <div class="col-md-12 col-12" style="margin-top: -30px;">
                                                    <div class="row text-start">
                                                        <div class="col-md-5">
                                                            <p style="font-size: 12px;font-weight: bold;">Alamat</p>  
                                                        </div>
                                                        <div class="col-md-1">
                                                            <p style="font-size: 12px;"> : </p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p style="font-size: 12px;">${filterSchedule[i].address_schedule}</p>
                                                        </div>
                                                    </div> 
                                                </div>   
                                            </div>
                                        </div>
                                `,{minWidth : 100,maxWidth : 560,width : 400}).addTo(mapContainer);  
                            
                        }
                    }
                }   
                if(ressOperasi && ressOperasi.length > 0){ 
                    var filterOperasi = ressOperasi.filter(function (e) {
                        return e.lat_cctv != null && e.lng_cctv != null;
                    });   
                } 




            }
        });
    }

    $("#filterCari").on("click", function (e) { 
        serverSideFilter();
    });

    // $("[name=filter]").on("change", function (e) { 
    //     serverSideFilter();
    // });
    // $("[name=filterFasumKateg]").on("change", function (e) { 
    //     serverSideFilter();
    // });
    

    


    // function serverSideGetJadwal(){
    //     $("#overlay").fadeIn(300);  
    //     $.ajax({
    //         type : "POST",
    //         url : "<?php echo base_url();?>dashboard/getJadwal", 
    //         data : {
    //             "status" : '1',
    //         }, 
    //         dataType : "JSON",
    //         success : function(result){ 
    //             let ressData = result['data'];
    //             $("#overlay").fadeOut(300);

    //             let ress = ressData.filter(function (e) {
    //                 return e.coordinate_schedule != null;
    //             });   
                
    //             if(ress.length > 0){  
    //                 for (let i = 0; i < ress.length; i++) {   
                        
    //                     var cordinateJadwal = ress[i].coordinate_schedule;
    //                     var latlongJadwal =  cordinateJadwal.split(',');
    //                     var latitudeJadwal = parseFloat(latlongJadwal[0]);
    //                     var longitudeJadwal = parseFloat(latlongJadwal[1]);
                         

    //                         markerJadwal[i] = L.marker([latitudeJadwal,longitudeJadwal], { icon: L.divIcon({
    //                             // className: 'location-pin',
    //                             html: `<img src="<?php echo base_url();?>assets/icon/jadwal kegiatan.png" style="width: 22px;margin-top: -10px;margin-left: -10px;">`,
    //                             iconSize: [5, 5],
    //                             iconAnchor: [5, 10]
    //                             // iconAnchor: [10, 33]
    //                             }) }).bindPopup(`
    //                                 <div class="text-center" style="width: 300px;"> 
    //                                     <div class="row mt-3"> 
    //                                         <div class="col-md-12 col-12" style="margin-left: 110px;margin-bottom: 10px;margin-top: 10px;">
    //                                             <div class="avatar-xl me-3">
    //                                                 <img src="<?php echo base_url();?>assets/icon/jadwal kegiatan.png" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 100%;">
    //                                             </div>
    //                                         </div>
    //                                         <div class="col-md-12 col-12 mt-3">
    //                                             <h5>Jadwal Kegiatan</h5> 
    //                                         </div>
    //                                         <div class="col-md-12 col-12 mt-1">
    //                                             <div class="row text-start">
    //                                                 <div class="col-md-5">
    //                                                     <p style="font-size: 12px;font-weight: bold;">Kegiatan</p>  
    //                                                 </div>
    //                                                 <div class="col-md-1">
    //                                                     <p style="font-size: 12px;"> : </p>
    //                                                 </div>
    //                                                 <div class="col-md-6">
    //                                                     <p style="font-size: 12px;">${ress[i].activity}</p>
    //                                                 </div>
    //                                             </div> 
    //                                         </div> 
    //                                         <div class="col-md-12 col-12" style="margin-top: -30px;">
    //                                             <div class="row text-start">
    //                                                 <div class="col-md-5">
    //                                                     <p style="font-size: 12px;font-weight: bold;">Tanggal Kegiatan</p>  
    //                                                 </div>
    //                                                 <div class="col-md-1">
    //                                                     <p style="font-size: 12px;"> : </p>
    //                                                 </div>
    //                                                 <div class="col-md-6">
    //                                                     <p style="font-size: 12px;">${ress[i].date_schedule.substr(0, 10)}</p>
    //                                                 </div>
    //                                             </div> 
    //                                         </div>  
    //                                         <div class="col-md-12 col-12" style="margin-top: -30px;">
    //                                             <div class="row text-start">
    //                                                 <div class="col-md-5">
    //                                                     <p style="font-size: 12px;font-weight: bold;">Waktu</p>  
    //                                                 </div>
    //                                                 <div class="col-md-1">
    //                                                     <p style="font-size: 12px;"> : </p>
    //                                                 </div>
    //                                                 <div class="col-md-6">
    //                                                     <p style="font-size: 12px;">${ress[i].start_time.substr(0, 5)} - ${ress[i].end_time.substr(0, 5)} WITA</p>
    //                                                 </div>
    //                                             </div> 
    //                                         </div>  
    //                                         <div class="col-md-12 col-12" style="margin-top: -30px;">
    //                                             <div class="row text-start">
    //                                                 <div class="col-md-5">
    //                                                     <p style="font-size: 12px;font-weight: bold;">Alamat</p>  
    //                                                 </div>
    //                                                 <div class="col-md-1">
    //                                                     <p style="font-size: 12px;"> : </p>
    //                                                 </div>
    //                                                 <div class="col-md-6">
    //                                                     <p style="font-size: 12px;">${ress[i].address_schedule}</p>
    //                                                 </div>
    //                                             </div> 
    //                                         </div>   
    //                                     </div>
    //                                 </div>
    //                         `,{minWidth : 100,maxWidth : 560,width : 400}).addTo(mapContainer);  
                         
    //                 }
    //             }
    //         }
    //     });

    // }


    
    // $("#jadwal").on("change", function (e) {
    //     if($(this).is(':checked')){ 
    //         serverSideGetJadwal();
    //     }else{ 
    //         for (let i = 0; i < markerJadwal.length; i++) { 
    //             mapContainer.removeLayer(markerJadwal[i]);
    //         }
    //         markerJadwal = new Array();
    //     } 
    // });
    

 

    function getRenpam(){
        let countlist = 0;
        let list = ""; 
        var data = []; 
        $.ajax({
            type : "POST",
            url : "<?php echo base_url();?>dashboard/getRenpam", 
            data : {
                "status" : '1',
            }, 
            dataType : "JSON",
            success : function(result){ 
                let ress = result['data'];
                // console.log(result['test']);
                countlist = 0;
                list = "";
                var status = ""; 
                var route = []; 
                var route1 = []; 
                var route2 = []; 
                ress.forEach(el => {
                    route.push(el.route);
                    route1.push(el.route_alternatif_1);
                    route2.push(el.route_alternatif_2);
                    if(el.status_renpam == 1){
                        status = `
                        <div>
                            <div class="rounded-circle m-auto" style="background:green; height:20px ; width:20px"></div>
                        </div>`;
                    }else{
                        status = `
                        <div>
                            <div class="rounded-circle m-auto" style="background:red; height:20px ; width:20px"></div>
                        </div>
                        `;
                    }
 
                    countlist += 1;
                    list += `<a class="list-group-item text-start" style="display: flex;"  
                        href="javascript:void(0)">${status} &nbsp;&nbsp; ${el.name_renpam}
                        <input type="checkbox" class="form-input" name="selectRenpam" id="listRenpamClick${countlist}" data-cord=${JSON.stringify(el.route)} >
                    </a>`;
                    $('#listRenpam').html(list); 
                });  

                 

                for (let i = 0; i < ress.length; i++){ 
                    $(`#listRenpamClick${i+1}`).on("change", function (e) {

                        // console.log(route[i]); 
                        

                        if(route[i] != null && route[i][0]['latLng'] != null){
                            
                            if($(this).is(':checked')){   
                                routingRenpam[i] = null;
                                routingRenpam[i] = L.Routing.control({
                                    show:false,
                                    draggableWaypoints: false,
                                    addWaypoints: false,
                                    waypoints: route[i],
                                    router: new L.Routing.osrmv1({
                                        language: 'en',
                                        profile: 'car'
                                    }),
                                    lineOptions: {
                                        // styles: [{color: "blue", className: 'animateRoute'}]
                                        styles: [{color: "blue"}]
                                    }, 
                                    // routeLine: function(r) {
                                    //     var lines = L.Routing.line(r, {  styles: [{color: '#19afc3', opacity: 0.8, weight: 9},
                                    //                                                 {color: '#00ffb4', opacity: 0.8, weight: 6},
                                    //                                                 {color: '#00fdf6', opacity: 1, weight: 2}],
                                    //                                         addWaypoints: true
                                    //                                     });
                                    //     lines.on('linetouched', function(e) { 
                                    //         console.log(e);
                                    //         alert("jalan kaaga"); 
                                    //     });
                                    //     return lines;
                                    // },
                                    geocoder: L.Control.Geocoder.nominatim({})
                                }).addTo(mapContainer);  
                                // mapContainer.addControl(routingRenpam[i]); 
                            }else{ 
                                mapContainer.removeControl(routingRenpam[i]);  
                            }
                            
                             
                        }else{
                            Swal.fire(
                            `Route tidak ada, atau belum di daftarkan!`, 
                            '',
                            'error'
                            ).then(function() { 
                            });
                        }

                        if(route1[i] != null && route1[i][0]['latLng'] != null){
                            
                            if($(this).is(':checked')){  
                                routingRenpam1[i] = null;
                                routingRenpam1[i] = L.Routing.control({
                                    show:false,
                                    draggableWaypoints: false,
                                    addWaypoints: false,
                                    waypoints: route1[i],
                                    router: new L.Routing.osrmv1({
                                        language: 'en',
                                        profile: 'car'
                                    }),
                                    lineOptions: {
                                        styles: [{color: "yellow", className: 'animateLine'}]
                                    },
                                    createMarker: function(i, wp, nWps) {
                                        if (i === 0 || i === nWps + 1) {
                                            // here change the starting and ending icons
                                            return L.marker(wp.latLng, {
                                                icon: L.divIcon({
                                                    className: "location-pin",
                                                    html: `<img src="https://cdn-icons-png.flaticon.com/512/178/178753.png"><div class="pin"></div><div class="pulse"></div>`,
                                                    iconSize: [5, 5],
                                                    //iconAnchor: [18, 30]
                                                    iconAnchor: [5, 10],
                                                }),
                                                draggable: this.draggableWaypoints,
                                            });
                                        } else if (i === nWps - 1) {
                                            return L.marker(wp.latLng, {
                                                icon: L.divIcon({
                                                    className: "location-pin",
                                                    html: `<img src="https://cdn-icons-png.flaticon.com/512/178/178753.png"><div class="pin"></div><div class="pulse"></div>`,
                                                    iconSize: [5, 5],
                                                    //iconAnchor: [18, 30]
                                                    iconAnchor: [5, 10],
                                                }),
                                                draggable: this.draggableWaypoints,
                                            });
                                        } else {
                                            // here change all the others
                                            var options = {
                                                    draggable: this.draggableWaypoints,
                                                },
                                                marker = L.marker(wp.latLng, {
                                                icon: L.divIcon({
                                                    className: "location-pin",
                                                    html: `<img src="https://cdn-icons-png.flaticon.com/512/178/178753.png"><div class="pin"></div><div class="pulse"></div>`,
                                                    iconSize: [5, 5],
                                                    //iconAnchor: [18, 30]
                                                    iconAnchor: [5, 10],
                                                }),
                                                draggable: this.draggableWaypoints,
                                            });
    
                                            return marker;
                                        }
                                    },
                                    geocoder: L.Control.Geocoder.nominatim({})
                                }).addTo(mapContainer); 
                                // mapContainer.addControl(routingRenpam1[i]);  
                            }else{
                                mapContainer.removeControl(routingRenpam1[i]);   
                            }
                        }else{
                            Swal.fire(
                            `Route Alternative tidak ada, atau belum di daftarkan!`, 
                            '',
                            'warning'
                            ).then(function() { 
                            });
                        }

                        if(route2[i] != null && route2[i][0]['latLng'] != null){ 
                            
                            if($(this).is(':checked')){  
                                routingRenpam2[i] = null;
                                routingRenpam2[i] = L.Routing.control({
                                    show:false,
                                    draggableWaypoints: false,
                                    addWaypoints: false,
                                    waypoints: route2[i],
                                    router: new L.Routing.osrmv1({
                                        language: 'en',
                                        profile: 'car'
                                    }),
                                    lineOptions: {
                                        styles: [{color: "red", className: 'animateLine'}]
                                        // styles: [{className: 'animateLine'}]
                                    },
                                    createMarker: function(i, wp, nWps) {
                                        if (i === 0 || i === nWps + 1) {
                                            // here change the starting and ending icons
                                            return L.marker(wp.latLng, {
                                                icon: L.divIcon({
                                                    className: "location-pin",
                                                    html: `<img src="https://www.citypng.com/public/uploads/preview/hd-round-emergency-exit-escape-sign-icon-symbol-png-316282089114htwnmbnbp.png"><div class="pin"></div><div class="pulse"></div>`,
                                                    iconSize: [5, 5],
                                                    //iconAnchor: [18, 30]
                                                    iconAnchor: [5, 10],
                                                }),
                                                draggable: this.draggableWaypoints,
                                            });
                                        } else if (i === nWps - 1) {
                                            return L.marker(wp.latLng, {
                                                icon: L.divIcon({
                                                    className: "location-pin",
                                                    html: `<img src="https://www.citypng.com/public/uploads/preview/hd-round-emergency-exit-escape-sign-icon-symbol-png-316282089114htwnmbnbp.png"><div class="pin"></div><div class="pulse"></div>`,
                                                    iconSize: [5, 5],
                                                    //iconAnchor: [18, 30]
                                                    iconAnchor: [5, 10],
                                                }),
                                                draggable: this.draggableWaypoints,
                                            });
                                        } else {
                                            // here change all the others
                                            var options = {
                                                    draggable: this.draggableWaypoints,
                                                },
                                                marker = L.marker(wp.latLng, {
                                                icon: L.divIcon({
                                                    className: "location-pin",
                                                    html: `<img src="https://www.citypng.com/public/uploads/preview/hd-round-emergency-exit-escape-sign-icon-symbol-png-316282089114htwnmbnbp.png"><div class="pin"></div><div class="pulse"></div>`,
                                                    iconSize: [5, 5],
                                                    //iconAnchor: [18, 30]
                                                    iconAnchor: [5, 10],
                                                }),
                                                draggable: this.draggableWaypoints,
                                            });
    
                                            return marker;
                                        }
                                    },
                                    geocoder: L.Control.Geocoder.nominatim({})
                                }).addTo(mapContainer); 
                                // mapContainer.addControl(routingRenpam1[i]); 
                            }else{
                                mapContainer.removeControl(routingRenpam2[i]); 
                            }
                        }else{
                            Swal.fire(
                            `Route Escape tidak ada, atau belum di daftarkan!`, 
                            '',
                            'warning'
                            ).then(function() { 
                            });
                        }
                        // console.log(routingRenpam);
                    });
                } 
            }
        });
    }
     
    
    
    var openModalFilter = false;
    $('#myModalFilter').on('shown.bs.modal', function() { 


        let countlist = 0;
        let list = ""; 
        var data = []; 
        $.ajax({
            type : "POST",
            url : "<?php echo base_url();?>dashboard/getJadwal", 
            data : {
                "status" : '1',
            }, 
            dataType : "JSON",
            success : function(result){ 
                let ress = result['data'];
                // console.log(result['test']);
                countlist = 0;
                list = "";
                var status = ""; 
                if($('#jadwal').is(':checked')){
                    ress.forEach(el => {
                        if(el.status_schedule == 1){
                            status = `
                            <div>
                                <div class="rounded-circle m-auto" style="background:green; height:20px ; width:20px"></div>
                            </div>`;
                        }else{
                            status = `
                            <div>
                                <div class="rounded-circle m-auto" style="background:red; height:20px ; width:20px"></div>
                            </div>
                            `;
                        }
                        countlist += 1;
                        list += `<a class="list-group-item text-start" style="display: flex;"
                        id="listJadwalClick${countlist}"   
                        data-alamat="${el.address_schedule}"  
                        data-cord="${el.coordinate_schedule}"
                        href="javascript:void(0)">${status} &nbsp;&nbsp; ${el.activity}</a>`;
                        $('#listJadwal').html(list); 
                    });  
                    for (let i = 0; i < ress.length; i++){ 
                        $(`#listJadwalClick${i+1}`).click(function(){   
                            var latlong =  $(this).data('cord').split(',');
                            var latitude = parseFloat(latlong[0]);
                            var longitude = parseFloat(latlong[1]); 
                            mapContainer.flyTo([latitude, longitude], 17); 
    
     
                        });
                    } 
                }else{
                    $('#listJadwal').html('Mohon untuk pilih filter Jadwal!'); 
                }
 
            }
        });

        
        if(openModalFilter == false){
            openModalFilter = true;
            getRenpam();
        } 

 
    });


    // function serverSideGetCCTV(){
    //     $("#overlay").fadeIn(300);  
    //     $.ajax({
    //         type : "POST",
    //         url : "<?php echo base_url();?>dashboard/getCCTV", 
    //         data : {
    //             "status" : '1',
    //         }, 
    //         dataType : "JSON",
    //         success : function(result){ 
    //             let ressData = result['data'];
    //             let ress = ressData.filter(function (e) {
    //                 return e.lat_cctv != null && e.lng_cctv != null;
    //             });   
                
    //             $("#overlay").fadeOut(300);
                
    //             if(ress.length > 0){  
    //                 for (let i = 0; i < ress.length; i++) {     
    //                     id = i;  
    //                     var latitudeCCTV = parseFloat(ress[i].lat_cctv);
    //                     var longitudeCCTV = parseFloat(ress[i].lng_cctv);

    //                     var resource = '';
    //                     if(ress[i].ip_cctv == 'https://balisatudata.baliprov.go.id/peta-cctv'){
    //                         resource = `<iframe id="myIframe" src="${ress[i].link_cctv}" style="width: 300px; height: 250.25px;"></iframe>`;
    //                     }else{
    //                         resource = `<img style="width: 300px;" src="${ress[i].link_cctv}" />`;
    //                     }

    //                     markerCCTV[i] = L.marker([latitudeCCTV,longitudeCCTV], { icon: L.divIcon({
    //                         // className: 'location-pin',
    //                         html: `<img src="<?php echo base_url();?>assets/icon/cctv.png" style="width: 22px; margin-top: -10px;margin-left: -10px;">`,
    //                         iconSize: [5, 5],
    //                         iconAnchor: [5, 10]
    //                         // iconAnchor: [10, 33]
    //                         }) }).bindPopup(`
    //                         <div style="width: 300px;">
    //                             <div class="row">
    //                                 <div class="col-md-12" style="text-align: center;">
    //                                     <h5>${ress[i].address_cctv}</h5>
    //                                 </div>
    //                                 <div class="col-md-12"> 
    //                                     ${resource}
    //                                 </div> 
    //                             </div>
    //                         </div>
                                
    //                     `,{minWidth : 100,maxWidth : 560,width : 400}).addTo(mapContainer);   
    //                 }
    //             }
    //         }
    //     }); 
    // } 

    // $("#cctv").on("change", function (e) {
    //     if($(this).is(':checked')){ 
    //         serverSideGetCCTV();
    //     }else{ 
    //         for (let i = 0; i < markerCCTV.length; i++) { 
    //             mapContainer.removeLayer(markerCCTV[i]);
    //         } 
    //         markerCCTV = new Array();  
    //     } 
    // });



    // function serverSideGetFasum(){ 
    //     $("#overlay").fadeIn(300);   
    //     $.ajax({
    //         type : "POST",
    //         url : "<?php echo base_url();?>dashboard/getFasum", 
    //         data : {
    //             "status" : '1',
    //         }, 
    //         dataType : "JSON",
    //         success : function(result){ 
    //             let ressData = result['data'];
    //             let ress = ressData.filter(function (e) {
    //                 return e.fasum_lat != null && e.fasum_lng != null;
    //             });  
    //             $("#overlay").fadeOut(300);
                
    //             if(ress.length > 0){  
    //                 var logoMarker = '';
    //                 var logoBody = '';
    //                 for (let i = 0; i < ress.length; i++) {  
    //                     if(ress[i].fasum_type == 1){
    //                         logoMarker = `hotel.png`;
    //                         logoBody = `hotel.png`;
    //                     }else if(ress[i].fasum_type == 2){
    //                         logoMarker = `rumah ibadah.png`;
    //                         logoBody = `rumah ibadah.png`;
    //                     }else if(ress[i].fasum_type == 3){
    //                         logoMarker = `pom bensin.png`;
    //                         logoBody = `pom bensin.png`;
    //                     }else if(ress[i].fasum_type == 4){
    //                         logoMarker = `rest_area.png`;
    //                         logoBody = `rest_area.png`;
    //                     }else if(ress[i].fasum_type == 5){
    //                         logoMarker = `rumah makan.png`;
    //                         logoBody = `rumah makan.png`;
    //                     }else if(ress[i].fasum_type == 6){
    //                         logoMarker = `wisata.png`;
    //                         logoBody = `wisata.png`;
    //                     }else if(ress[i].fasum_type == 7){
    //                         logoMarker = `damkar.png`;
    //                         logoBody = `damkar.png`;
    //                     }else if(ress[i].fasum_type == 8){
    //                         logoMarker = `rumah sakit umum.png`;
    //                         logoBody = `rumah sakit umum.png`;
    //                     }
                        
    //                         var latitudeFasum = parseFloat(ress[i].fasum_lat);
    //                         var longitudeFasum = parseFloat(ress[i].fasum_lng); 
    //                         markerFasum[i] = L.marker([latitudeFasum,longitudeFasum], { icon: L.divIcon({
    //                             // className: 'location-pin',
    //                             html: `<img src="<?php echo base_url();?>assets/icon/${logoMarker}" style="width: 22px; margin-top: -10px;margin-left: -10px;">`,
    //                             iconSize: [5, 5],
    //                             iconAnchor: [5, 10]
    //                             // iconAnchor: [10, 33]
    //                             }) }).bindPopup(`
    //                                 <div class="text-center" style="width: 300px;"> 
    //                                     <div class="row mt-3">
    //                                         <div class="col-md-12 col-12" style="margin-left: 110px;margin-bottom: 10px;margin-top: 10px;">
    //                                             <div class="avatar-xl me-3">
    //                                                 <img src="<?php echo base_url();?>assets/icon/${logoBody}" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 100%;">
    //                                             </div>
    //                                         </div>
    //                                         <div class="col-md-12 col-12 mt-3">
    //                                             <h5>Fasilitas Umum</h5>
    //                                             <span style="font-size: 14px;">- ${ress[i].category_fasum.name_category_fasum} -</span>
    //                                         </div>
    //                                         <div class="col-md-12 col-12 mt-3">
    //                                             <div class="row text-start">
    //                                                 <div class="col-md-5 col-6">
    //                                                     <p style="font-size: 12px;font-weight: bold;">Nama Fasilitas</p>  
    //                                                 </div>
    //                                                 <div class="col-md-1">
    //                                                     <p style="font-size: 12px;"> : </p>
    //                                                 </div>
    //                                                 <div class="col-md-6 col-6">
    //                                                     <p style="font-size: 12px;">${ress[i].fasum_name}</p>
    //                                                 </div>
    //                                             </div> 
    //                                         </div> 
    //                                         <div class="col-md-12 col-12" style="margin-top: -30px;">
    //                                             <div class="row text-start">
    //                                                 <div class="col-md-5 col-6">
    //                                                     <p style="font-size: 12px;font-weight: bold;">Alamat</p>  
    //                                                 </div>
    //                                                 <div class="col-md-1">
    //                                                     <p style="font-size: 12px;"> : </p>
    //                                                 </div>
    //                                                 <div class="col-md-6 col-6">
    //                                                     <p style="font-size: 12px;">${ress[i].fasum_address}</p>
    //                                                 </div>
    //                                             </div> 
    //                                         </div>  
    //                                         <div class="col-md-12 col-12"  style="margin-top: -30px;">
    //                                             <div class="row text-start">
    //                                                 <div class="col-md-5 col-6">
    //                                                     <p style="font-size: 12px;font-weight: bold;">No Telpon</p>  
    //                                                 </div>
    //                                                 <div class="col-md-1">
    //                                                     <p style="font-size: 12px;"> : </p>
    //                                                 </div>
    //                                                 <div class="col-md-6 col-6">
    //                                                     <p style="font-size: 12px;">${ress[i].fasum_phone}</p>
    //                                                 </div>
    //                                             </div> 
    //                                         </div>  
    //                                         <div class="col-md-12 col-12" style="margin-top: -30px;">
    //                                             <div class="row text-start">
    //                                                 <div class="col-md-5 col-6">
    //                                                     <p style="font-size: 12px;font-weight: bold;">Waktu</p>  
    //                                                 </div>
    //                                                 <div class="col-md-1">
    //                                                     <p style="font-size: 12px;"> : </p>
    //                                                 </div>
    //                                                 <div class="col-md-6 col-6">
    //                                                     <p style="font-size: 12px;">${ress[i].fasum_open_time != null ? ress[i].fasum_open_time : '00:00'} - ${ress[i].fasum_close_time != null ? ress[i].fasum_close_time : '00:00'} WITA</p>
    //                                                 </div>
    //                                             </div> 
    //                                         </div>   
    //                                     </div>
    //                                 </div> 
    //                         `,{minWidth : 100,maxWidth : 560,width : 400}).addTo(mapContainer);  
                         
    //                 }
    //             }
    //         }
    //     }); 
    // } 

    // $("#fasum").on("change", function (e) {
    //     if($(this).is(':checked')){  
    //         serverSideGetFasum();
    //     }else{ 
    //         for (let i = 0; i < markerFasum.length; i++) { 
    //             mapContainer.removeLayer(markerFasum[i]);
    //         }
    //         markerFasum = new Array();  
    //     } 
    // });



    // function serverSideGetPolres(){
    //     $("#overlay").fadeIn(300);   
    //     $.ajax({
    //         type : "POST",
    //         url : "<?php echo base_url();?>dashboard/getPolres", 
    //         data : {
    //             "status" : '1',
    //         }, 
    //         dataType : "JSON",
    //         success : function(result){ 
    //             let ressData = result['data'];
    //             let ress = ressData.filter(function (e) {
    //                 return e.latitude != null && e.longitude != null;
    //             });  
    //             $("#overlay").fadeOut(300);
                
    //             if(ress.length > 0){  
    //                 var logoMarker = '';
    //                 var logoBody = '';
    //                 for (let i = 0; i < ress.length; i++) {  
 
    //                         var latitudePolres = parseFloat(ress[i].latitude);
    //                         var longitudePolres = parseFloat(ress[i].longitude); 
    
    //                         markerPolres[i] = L.marker([latitudePolres,longitudePolres], { icon: L.divIcon({
    //                             // className: 'location-pin',
    //                             html: `<img src="<?php echo base_url();?>assets/icon/polres.png" style="width: 22px;margin-top: -10px;margin-left: -10px;">`,
    //                             iconSize: [5, 5],
    //                             iconAnchor: [5, 10]
    //                             // iconAnchor: [10, 33]
    //                             }) }).bindPopup(`
    //                                 <div class="text-center" style="width: 300px;"> 
    //                                     <div class="row mt-3">
    //                                         <div class="col-md-12 col-12" style="margin-left: 110px;margin-bottom: 10px;margin-top: 10px;">
    //                                             <div class="avatar-xl me-3">
    //                                                 <img src="<?php echo base_url();?>assets/icon/polres.png" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 100%;">
    //                                             </div>
    //                                         </div>
    //                                         <div class="col-md-12 col-12 mt-3">
    //                                             <h5>${ress[i].name_polres}</h5> 
    //                                         </div>
    //                                         <div class="col-md-12 col-12 mt-3">
    //                                             <div class="row text-start">
    //                                                 <div class="col-md-5 col-6">
    //                                                     <p style="font-size: 12px;font-weight: bold;">Alamat</p>  
    //                                                 </div>
    //                                                 <div class="col-md-1">
    //                                                     <p style="font-size: 12px;"> : </p>
    //                                                 </div>
    //                                                 <div class="col-md-6 col-6">
    //                                                     <p style="font-size: 12px;">${ress[i].address}</p>
    //                                                 </div>
    //                                             </div> 
    //                                         </div> 
    //                                         <div class="col-md-12 col-12" style="margin-top: -30px;">
    //                                             <div class="row text-start">
    //                                                 <div class="col-md-5 col-6">
    //                                                     <p style="font-size: 12px;font-weight: bold;">Kode</p>  
    //                                                 </div>
    //                                                 <div class="col-md-1">
    //                                                     <p style="font-size: 12px;"> : </p>
    //                                                 </div>
    //                                                 <div class="col-md-6 col-6">
    //                                                     <p style="font-size: 12px;">${ress[i].code_satpas}</p>
    //                                                 </div>
    //                                             </div> 
    //                                         </div>  
    //                                         <div class="col-md-12 col-12"  style="margin-top: -30px;">
    //                                             <div class="row text-start">
    //                                                 <div class="col-md-5 col-6">
    //                                                     <p style="font-size: 12px;font-weight: bold;">No Telpon</p>  
    //                                                 </div>
    //                                                 <div class="col-md-1">
    //                                                     <p style="font-size: 12px;"> : </p>
    //                                                 </div>
    //                                                 <div class="col-md-6 col-6">
    //                                                     <p style="font-size: 12px;">${ress[i].phone_polres != null ? ress[i].phone_polres : '-'}</p>
    //                                                 </div>
    //                                             </div> 
    //                                         </div>  
    //                                         <div class="col-md-12 col-12" style="margin-top: -30px;">
    //                                             <div class="row text-start">
    //                                                 <div class="col-md-5 col-6">
    //                                                     <p style="font-size: 12px;font-weight: bold;">Waktu</p>  
    //                                                 </div>
    //                                                 <div class="col-md-1">
    //                                                     <p style="font-size: 12px;"> : </p>
    //                                                 </div>
    //                                                 <div class="col-md-6 col-6">
    //                                                     <p style="font-size: 12px;">${ress[i].open_time != null ? ress[i].open_time : '00:00'} - ${ress[i].close_time != null ? ress[i].close_time : '00:00'} WITA</p>
    //                                                 </div>
    //                                             </div> 
    //                                         </div>   
    //                                     </div>
    //                                 </div> 
    //                         `,{minWidth : 100,maxWidth : 560,width : 400}).addTo(mapContainer);  
                        

    //                 }
    //             }
    //         }
    //     }); 
    // } 

    // $("#polres").on("change", function (e) {
    //     if($(this).is(':checked')){ 
    //         serverSideGetPolres();
    //     }else{ 
    //         for (let i = 0; i < markerPolres.length; i++) { 
    //             mapContainer.removeLayer(markerPolres[i]);
    //         }
    //         markerPolres = new Array();  
    //     } 
    // });

    
    mapContainer.on('dblclick', function(e) { 
        $('#myModal').modal('show');
    }); 
 
    let arrayWaypoint = [];
    $('#myModal').on('shown.bs.modal', function() {
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
        


        $('[name=cordinate]').val('-8.451740, 115.089643');
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
        var mapContainerInstruksi = L.map('mapG20Kegiatan', {
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
        }).addTo(mapContainerInstruksi);
        L.control.zoom({
            position: 'bottomleft'
        }).addTo(mapContainerInstruksi);
        
        // mapContainerInstruksi.invalidateSize(); 
        
        var control = L.Routing.control({
            waypoints: arrayWaypoint,
            router: new L.Routing.osrmv1({
                language: 'en',
                profile: 'car'
            }),
            showAlternatives: true,
            geocoder: L.Control.Geocoder.nominatim({})
        }).addTo(mapContainerInstruksi);


        function createButton(label, container) {
            var btn = L.DomUtil.create('button', '', container);
            btn.setAttribute('type', 'button');
            btn.innerHTML = label;
            return btn;
        }

        mapContainerInstruksi.on('click', function(e) {
            var container = L.DomUtil.create('div'),
                startBtn = createButton('Start from this location', container), 
                destBtn = createButton('Go to this location', container);

            L.DomEvent.on(startBtn, 'click', function() {  

                control.spliceWaypoints(0, 1, e.latlng);
                mapContainerInstruksi.closePopup();
            }); 
            L.DomEvent.on(destBtn, 'click', function() { 

                control.spliceWaypoints(control.getWaypoints().length - 1, 1, e.latlng);
                mapContainerInstruksi.closePopup();
            });
            L.popup()
                .setContent(container)
                .setLatLng(e.latlng)
                .openOn(mapContainerInstruksi);
        });



        $(".formR").submit(function(e) {
            $("#overlay").fadeIn(300);
            e.preventDefault(); 

            var routeArray = new Array();
            routeArray = control.getWaypoints();
            $('#ruteawal').val(JSON.stringify(routeArray)); 

            var formData = new FormData($('.formR')[0]); 
            $.ajax({
                url: "<?php echo base_url();?>operasi/Renpam/store",
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
                            $("#myModal").modal('hide');
                            userDataTable.draw(); 
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
    
    
    
    
});

$('#cekarrayTrack').on('click', function(e) { 
    console.log(markerFasum);
});

    
</script> 
