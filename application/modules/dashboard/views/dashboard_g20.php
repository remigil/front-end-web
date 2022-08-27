
<div class="row" style="margin-top: -40px;">
    <div class="col-md-12"> 

    <!-- <a href='#' id='export'>Export Features</a> -->
        <div style="top: 50px;right: 10px;position: relative;z-index: 999;text-align: end;"> 
            <a href="javascript:void(0)" class="btn" style="background-color: #fff;width: 40px;font-size: 15px;" data-bs-toggle="modal" data-bs-target="#myModalFilter">
                <i style="margin-left: -2px;" class="fa fa-fw fas fa-filter"></i>
            </a> 
        </div>
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
                                        <input type="checkbox" name="instruksi" id="instruksi" class="form-input" >  
                                        <span>Instruksi</span> 
                                    </div>  
                                    <div class="col-md-6 mt-3">
                                        <input type="checkbox" name="turjawali" id="turjawali" class="form-input" >  
                                        <span>Turjawali</span> 
                                    </div>  
                                    <div class="col-md-6 mt-3">
                                        <input type="checkbox" checked name="jadwal" id="jadwal" class="form-input" >  
                                        <span>Jadwal Kegiatan</span> 
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
                                        <input type="checkbox" name="fasilitas" id="fasilitas" class="form-input" >  
                                        <span>Fasilitas Umum</span> 
                                    </div>   
                                    <div class="col-md-6">
                                        <input type="checkbox" name="troublespot" id="troublespot" class="form-input" >  
                                        <span>Trouble Spot</span> 
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
                <form class="form" method="post" enctype="multipart/form-data"> 
                    
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
                            <div class="material-textfield mb-3">
                                <input required style="width: 100%;" name="subjek" placeholder="" type="text">
                                <label class="labelmui">Subjek</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="material-textfield mb-3">
                                <input required type="text" name="endTime" class="form-control" id="endTime" value="<?php echo date('H:i')?>" data-default="<?php echo date('H:i')?>"> 
                                <label class="labelmui">Waktu Selesai</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="material-textfield mb-3">
                                <input required style="width: 100%;" name="instruksi" placeholder="" type="text">
                                <label class="labelmui">Instruksi</label>
                            </div>
                        </div>
                         
                        <div class="col-md-6" style="display: none;">
                            <div class="material-textfield mb-3">
                            <input style="width: 100%;" name="cordinate" placeholder="" type="text">
                                <label class="labelmui">Coordinate</label>
                            </div>
                        </div>

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
    var markerJadwal = new Array();
    var routingJadwal = new Array();
    var routingRenpam = new Array();


  $(document).ready(function() { 
    // alert('oke');
      
    // var arrayContoh = [ 
    //     {-8.551740, 115.077643},
    //     {-8.451740, 115.089643},
    //     {-8.458519301130188,115.14931575647383},
    //     {-8.452198812821242,115.09396433830263},
    //     {-8.5068977,115.2622931},
    // ];

    serverSideGet();
    serverSideGetJadwal();


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
                console.log('get Controller');

                if (ress.length > 0) {    
                    for (let i = 0; i < ress.length; i++) { 
                        id = ress[i].id_user; 

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
                                                    <p style="font-size: 12px;font-weight: bold;">VIP</p>  
                                                </div>
                                                <div class="col-md-2">
                                                    <p style="font-size: 12px;"> : </p>
                                                </div>
                                                <div class="col-md-5 col-6">
                                                    <p style="font-size: 12px;">${ress[i].vip}</p>
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
                                                    <p style="font-size: 12px;font-weight: bold;">VIP</p>  
                                                </div>
                                                <div class="col-md-2">
                                                    <p style="font-size: 12px;"> : </p>
                                                </div>
                                                <div class="col-md-5 col-6">
                                                    <p style="font-size: 12px;">${ress[i].vip}</p>
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

                }else{ 
                    $("#overlay").fadeOut(300);  
                } 
            },
            error: function () { 
                console.log("gagal connect");
            } 
        }); 
    }


    function serverSideGetJadwal(){
        $("#overlay").fadeIn(300);  
        $.ajax({
            type : "POST",
            url : "<?php echo base_url();?>dashboard/getJadwal", 
            data : {
                "status" : '1',
            }, 
            dataType : "JSON",
            success : function(result){ 
                let ress = result['data'];
                console.log(ress);
                $("#overlay").fadeOut(300);
                
                if(ress.length > 0){ 
                    var id; 
                    for (let i = 0; i < ress.length; i++) { 
                        console.log(ress[i].coordinate_schedule);
                        id = i; 
                        var cordinateJadwal = ress[i].coordinate_schedule;
                        var latlongJadwal =  cordinateJadwal.split(',');
                        var latitudeJadwal = parseFloat(latlongJadwal[0]);
                        var longitudeJadwal = parseFloat(latlongJadwal[1]);

                        markerJadwal[id] = L.marker([latitudeJadwal,longitudeJadwal], { icon: L.divIcon({
                            // className: 'location-pin',
                            html: `<img src="<?php echo base_url();?>assets/icon/jadwal kegiatan.png" style="margin-top: -10px;margin-left: -10px;">`,
                            iconSize: [10, 10],
                            iconAnchor: [5, 20]
                            // iconAnchor: [10, 33]
                            }) }).bindPopup(`
                                <div class="text-center" style="width: 260px; height: 140px"> 
                                    <div class="row mt-3"> 
                                        <div class="col-md-12 col-12" style="height: 30px;">
                                            <div class="row text-start">
                                                <div class="col-md-5">
                                                    <p style="font-size: 12px;font-weight: bold;">Kegiatan</p>  
                                                </div>
                                                <div class="col-md-1">
                                                    <p style="font-size: 12px;"> : </p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p style="font-size: 12px;">${ress[i].activity}</p>
                                                </div>
                                            </div> 
                                        </div> 
                                        <div class="col-md-12 col-12" style="height: 30px;">
                                            <div class="row text-start">
                                                <div class="col-md-5">
                                                    <p style="font-size: 12px;font-weight: bold;">Tanggal Kegiatan</p>  
                                                </div>
                                                <div class="col-md-1">
                                                    <p style="font-size: 12px;"> : </p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p style="font-size: 12px;">${ress[i].date_schedule.substr(0, 10)}</p>
                                                </div>
                                            </div> 
                                        </div>  
                                        <div class="col-md-12 col-12" style="height: 30px;">
                                            <div class="row text-start">
                                                <div class="col-md-5">
                                                    <p style="font-size: 12px;font-weight: bold;">Waktu</p>  
                                                </div>
                                                <div class="col-md-1">
                                                    <p style="font-size: 12px;"> : </p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p style="font-size: 12px;">${ress[i].start_time.substr(0, 5)} - ${ress[i].end_time.substr(0, 5)} WITA</p>
                                                </div>
                                            </div> 
                                        </div>  
                                        <div class="col-md-12 col-12" style="height: 30px;">
                                            <div class="row text-start">
                                                <div class="col-md-5">
                                                    <p style="font-size: 12px;font-weight: bold;">Alamat</p>  
                                                </div>
                                                <div class="col-md-1">
                                                    <p style="font-size: 12px;"> : </p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p style="font-size: 12px;">${ress[i].address_schedule}</p>
                                                </div>
                                            </div> 
                                        </div>   
                                    </div>
                                </div>
                        `,{minWidth : 100,maxWidth : 560,width : 400}).addTo(mapContainer);  
                    }
                }
            }
        });

    }
    
    $("#jadwal").on("change", function (e) {
        if($(this).is(':checked')){ 
            serverSideGetJadwal();
        }else{ 
            for (let i = 0; i < markerJadwal.length; i++) { 
                mapContainer.removeLayer(markerJadwal[i]);
            }

        }
        
    });
    

    socket.on('from server', function(ress) { 
        console.log('ido2');
        var id = ress[i].id_user;
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
        var id = ress[i].id_user;
        console.log('ido3');
        console.log(ress);
        
        for (let i = 0; i < ress.length; i++) { 
            // console.log(ress[i].id_user);

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
                                        <p style="font-size: 12px;font-weight: bold;">VIP</p>  
                                    </div>
                                    <div class="col-md-2">
                                        <p style="font-size: 12px;"> : </p>
                                    </div>
                                    <div class="col-md-5 col-6">
                                        <p style="font-size: 12px;">${ress[i].vip}</p>
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
                                        <p style="font-size: 12px;font-weight: bold;">VIP</p>  
                                    </div>
                                    <div class="col-md-2">
                                        <p style="font-size: 12px;"> : </p>
                                    </div>
                                    <div class="col-md-5 col-6">
                                        <p style="font-size: 12px;">${ress[i].vip}</p>
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


                        // console.log(routingJadwal);
                        // if(routingJadwal.length != 0){
                        //     mapContainer.removeLayer(routingJadwal[0]);
                        //     mapContainer.removeControl(routingJadwal[0]);
                        //     console.log('kehapus');
                        // }
                          
                        // var dataCord = $(this).data('cordarray').split(" / "); 
                        // var obj = {}; 
                        // data = [];
                        // for (let ii = 0; ii < dataCord.length; ii++){ 
                        //     var latlong =  dataCord[ii].split(',');
                        //     var latitude = parseFloat(latlong[0]);
                        //     var longitude = parseFloat(latlong[1]); 
                        //     obj = {}; 
                        //     obj = L.latLng(latitude, longitude);
                        //     data.push(obj);   
                        // } 

                        // routingJadwal[0] = L.Routing.control({
                        //     waypoints: data,
                        //     router: new L.Routing.osrmv1({
                        //         language: 'en',
                        //         profile: 'car'
                        //     }),
                        //     geocoder: L.Control.Geocoder.nominatim({})
                        // }).addTo(mapContainer);
                        // console.log(routingJadwal);
                    });
                } 
            }
        });

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
                ress.forEach(el => {
                    route.push(el.route);
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
                    id="listRenpamClick${countlist}"   
                    data-cord=${JSON.stringify(el.route)} 
                    href="javascript:void(0)">${status} &nbsp;&nbsp; ${el.name_renpam}</a>`;
                    $('#listRenpam').html(list); 
                });  

                 

                for (let i = 0; i < ress.length; i++){ 
                    $(`#listRenpamClick${i+1}`).click(function(){    

                        console.log(routingRenpam);
                        // if(routingRenpam.length != 0){
                        //     mapContainer.removeLayer(routingRenpam[0]);
                        //     mapContainer.removeControl(routingRenpam[0]);
                        //     console.log('kehapus');
                        // } 

                        routingRenpam[i] = L.Routing.control({
                            waypoints: route[i],
                            router: new L.Routing.osrmv1({
                                language: 'en',
                                profile: 'car'
                            }),
                            geocoder: L.Control.Geocoder.nominatim({})
                        }).addTo(mapContainer);
                        routingRenpam[i].hide();
                        console.log(routingRenpam);
                    });
                } 
            }
        });
    });




    
    mapContainer.on('dblclick', function(e) { 
        $('#myModal').modal('show');
    }); 
 
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
            waypoints: [
                L.latLng(-8.451740, 115.089643),
                L.latLng(-8.551740, 115.077643),
                L.latLng(-8.551740, 115.289643),
            ],
            router: new L.Routing.osrmv1({
                language: 'en',
                profile: 'car'
            }),
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
    });

 
    mapContainer.setView(initialCenter, initialZoom); 




 
  });


    
</script> 
