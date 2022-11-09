<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#">Data <?= $title; ?></a></li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Daftar <?= $title; ?></li>
    </ol>
</nav>

<div class="row align-items-center">
    <div class="col-md-6">
        <div class="mb-3">
            <button type="button" class="btn btn-primary waves-effect mb-2" data-bs-toggle="modal" data-bs-target="#addModal">Tambah CCTV</button>
        </div>
    </div>

    <div class="col-md-6">
        <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
            <div>
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo base_url()?>masterdata/cctv" data-bs-toggle="tooltip" data-bs-placement="top" title="List"><i class="bx bx-list-ul"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="<?php echo base_url()?>masterdata/cctv/thumbnail" data-bs-toggle="tooltip" data-bs-placement="top" title="Grid"><i class="bx bx-grid-alt"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="<?php echo base_url()?>masterdata/cctv/fullscreen" data-bs-toggle="tooltip" data-bs-placement="top" title="FullScreen"><i class="bx bx bx-fullscreen"></i></a>
                    </li>
                </ul>
            </div> 
        </div>

    </div>
</div>
<!-- end row -->

<!-- </div> -->
<div class="page">  
    <div class="card">

        <div class="card-body">

            <table id="datatable" class="table dt-responsive w-100">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Type</th>
                        <th>Alamat IP</th>
                        <th>Alamat</th>
                        <th>Latitude</th>
                        <th>Longitude</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead> 
            </table>

        </div>
    </div>
</div>
<!-- End Page -->


<!-- ADD Modals -->
<div class="modal fade " id="addModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="myLargeModalLabel" style="color:white">Tambah CCTV</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="formAdd" method="post" enctype="multipart/form-data"> 
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="type_cctv" placeholder="Type CCTV">
                                <label for="type_cctv">Type CCTV</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="ip_cctv" placeholder="Alamat Ip">
                                <label for="ip_cctv">Alamat IP</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="username" placeholder="isi nama samsat">
                                <label for="username">Username</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="link_cctv" placeholder="isi nama samsat">
                                <label for="link_cctv">Link CCTV</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="gateway_cctv" placeholder="isi nama samsat">
                                <label for="gateway_cctv">Gateway CCTV</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="password" placeholder="isi nama samsat">
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input name="address" class="form-control" placeholder="Alamat" type="text" required>
                                <label for="address">Alamat</label>
                            </div> 
                            <div class="list-group" id="listAddress"></div>
                        </div> 
                        <div class="col-md-6" style="display: none;">
                            <div class="form-floating mb-3">
                            <input style="width: 100%;" name="cordinate" class="form-control" type="text">
                                <label for="cordinate">Coordinate</label>
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div id="mapG20Dashboard" style="height: 400px">
                                <img src="<?php echo base_url();?>assets/pin.png" width="80" height="80" style="position: relative;z-index: 1000;left: 43%;top: 37%;">
                            </div>
                        </div>
                    </div>
                     
                    <button class="btn  btn-primary float-end" type="submit">SIMPAN</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Detail Modals -->
<div class="modal fade bs-example-modal-lg" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="myLargeModalLabel" style="color:white">Detail CCTV</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="formDetail" method="post" enctype="multipart/form-data"> 
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input readonly type="text" class="form-control" name="type_cctvDetail" id="type_cctvDetail" placeholder="Type CCTV">
                                <label for="type_cctvDetail">Type CCTV</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input readonly type="text" class="form-control" name="ip_cctvDetail" id="ip_cctvDetail" placeholder="Alamat Ip">
                                <label for="ip_cctvDetail">Alamat IP</label>
                            </div>
							<div class="form-floating mb-3">
                                <input readonly type="text" class="form-control" name="username" id="usernameDetail" placeholder="isi nama samsat">
                                <label for="username">Username</label>
                            </div> 
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input readonly type="text" class="form-control" name="link_cctvDetail" id="link_cctvDetail" placeholder="isi nama samsat">
                                <label for="link_cctvDetail">Link CCTV</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input readonly type="text" class="form-control" name="gateway_cctvDetail" id="gateway_cctvDetail" placeholder="isi nama samsat">
                                <label for="gateway_cctvDetail">Gateway CCTV</label>
                            </div>
							<div class="form-floating mb-3">
                                <input readonly type="text" class="form-control" name="password" id="passwordDetail" placeholder="isi nama samsat">
                                <label for="password">Password</label>
                            </div> 
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-floating mb-3">
                                <input readonly name="addressDetail" id="addressDetail" class="form-control" placeholder="Alamat" type="text" required>
                                <label for="addressDetail">Alamat</label>
                            </div>  
                        </div>  
                        <div class="col-md-6">
                            <div id="mapG20DashboardDetail" style="height: 300px">
                                <img src="<?php echo base_url();?>assets/pin.png" width="80" height="80" style="position: relative;z-index: 1000;left: 43%;top: 37%;">
                            </div>
                        </div>
                        <div class="col-md-6" id="videoCCTV">

                        </div>
                    </div>
                     
                    
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modals -->
<div class="modal fade UbahCCTV" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="myLargeModalLabel" style="color:white">Edit CCTV</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form_edit" method="post" enctype="multipart/form-data"> 
				<input type="hidden" name="id" value="" id="id_cctv" type="text">
				<div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="type_cctv" id="type_cctvEdit" placeholder="Type CCTV">
                                <label for="type_cctv">Type CCTV</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="ip_cctv" id="ip_cctvEdit" placeholder="Alamat Ip">
                                <label for="ip_cctv">Alamat IP</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="username" id="usernameEdit" placeholder="isi nama samsat">
                                <label for="username">Username</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="link_cctv" id="link_cctvEdit" placeholder="isi nama samsat">
                                <label for="link_cctv">Link CCTV</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="gateway_cctv" id="gateway_cctvEdit" placeholder="isi nama samsat">
                                <label for="gateway_cctv">Gateway CCTV</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="password" id="passwordEdit" placeholder="isi nama samsat">
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input name="address" class="form-control" placeholder="Alamat" id="addressEdit" type="text" required>
                                <label for="address">Alamat</label>
                            </div> 
                            <div class="list-group" id="listAddress"></div>
                        </div> 
                        <div class="col-md-6" style="display: none;">
                            <div class="form-floating mb-3">
                            <input style="width: 100%;" name="cordinate" id="cordinateEdit" class="form-control" type="text">
                                <label for="cordinate">Coordinate</label>
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div id="mapEdit" style="height: 400px">
                                <img src="<?php echo base_url();?>assets/pin.png" width="80" height="80" style="position: relative;z-index: 1000;left: 43%;top: 37%;">
                            </div>
                        </div>
						<!-- <div class="col-md-12 mt-3">
							<div class="form-floating mb-3">
								<select name="status_cctv" class="form-select" aria-label="Floating label select" style="width:100%" required>
									<option selected>Pilih Status CCTV</option>
									<option value="1">Inactive</option>
									<option value="2">Active</option>
								</select>
                                <label for="status">Status CCTV</label>
                            </div>
						</div> -->
                    </div>
                     
                    <button type="submit" class="btn  btn-primary float-end" id="btn_edit">SIMPAN</button>
                </form>
            </div>
        </div>
    </div>
</div>



<script>
    var userDataTable;
    $(document).ready(function() { 

        userDataTable = $('#datatable').DataTable({

            responsive: true,

            scrollX: true,

            // sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

            // buttons: ["excel", "csv", "pdf"],

            oLanguage: {

                sSearch: 'Search:'

            },

            initComplete: function(settings, json) {},

            retrieve: true,

            processing: true,

            serverSide: true,

            serverMethod: 'POST',

            ajax: {

                dataType: 'json',

                url: '<?php echo base_url(); ?>masterdata/cctv/serverSideTable',

                data: function(data) {

                    $("#overlay").fadeIn(300);

                    // console.log(data);

                    // data.filterTgl = $('[name=event_date]').val();

                    // data.filterTgl2 = $('[name=event_date_to]').val(); 

                    // data.filterStatus = $('[name=status]').val();

                    // data.filterName = $('[name=group_name]').val();

                    // data.filterPocName = $('[name=group_poc_name]').val();

                    // data.filterPhone = $('[name=poc_phone]').val();

                    // data.filterThreat = $('[name=threat_level]').val();

                    data.orderField = data.order[0] != undefined ? data.order[0].column : '';

                    data.orderValue = data.order[0] != undefined ? data.order[0].dir : '';

                    data.page = Number(data.start / data.length) + 1

                },

                beforeSend: function(xhr, settings) {

                },

                "dataSrc": function(result) {

                    result.iTotalRecords = result.iTotalRecords;

                    result.iTotalDisplayRecords = result.iTotalRecords;

                    return result.aaData;

                }

            },

            columns: [

                {
                    data: 'id'
                },
                {
                    data: 'type_cctv'
                }, 
                {
                    data: 'ip_cctv'
                },
                {
                    data: 'address_cctv'
                }, 
                {
                    data: 'lat_cctv'
                }, 
                {
                    data: 'lng_cctv'
                }, 
                {
                    data: 'status_cctv'
                }, 
                {
                    data: 'action',
                    orderable: false
                }

            ],

            order: [
                [0, "DESC"]
            ],

            drawCallback: function(settings) {

                $("#overlay").fadeOut(300);

            }

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

        $('#addModal').on('shown.bs.modal', function() { 
            mapContainer.invalidateSize();

            let countlist = 0;
            let list = ""; 
            $('[name=address]').on("change", function (e) {
                // console.log(this.value);
                $.get(`https://nominatim.openstreetmap.org/search?format=json&q=${this.value}`, function(ress){
                    console.log(ress);  
                    countlist = 0;
                    list = "";
                    ress.forEach(el => {
                        countlist += 1;
                        list += `<a class="list-group-item" 
                        id="list${countlist}"   
                        data-alamat="${el.display_name}"
                        data-cords="${el.lat},${el.lon}" href="javascript:void(0)">${el.display_name}</a>`;
                        $('#listAddress').html(list); 
                    });  

                    if(list == ""){
                        countlist = 0;
                        list = "";
                        $('#listAddress').html(list); 
                    }

                    
                    for (let i = 0; i < ress.length; i++){ 
                        $(`#list${i+1}`).click(function(){  
                            var latlong =  $(this).data('cords').split(',');
                            var latitude = parseFloat(latlong[0]);
                            var longitude = parseFloat(latlong[1]); 

                            // console.log({a:latitude, b:longitude});
                            $('[name=address]').val($(this).data('alamat'));
                            $('[name=cordinate]').val($(this).data('cords'));
                            mapContainer.flyTo([latitude, longitude], 17);    
                        });
                    }
                });

            });


            $('[name=cordinate]').on("change", function (e) {

                var cordLatLong =  this.value.split(','); 
                var cordLat = parseFloat(cordLatLong[0]); 
                var corLong = parseFloat(cordLatLong[1]); 

                // console.log({a:cordLat, b:corLong});

                $.get(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${cordLat}&lon=${corLong}`, function(data){
                    $('[name=address]').val(data['display_name']); 
                    mapContainer.flyTo([cordLat, corLong], 17);  
                }); 
            });


            mapContainer.on("dragend", function (e) {

                var corLat = mapContainer.getCenter()['lat'];
                var corLng = mapContainer.getCenter()['lng'];
                var cord = `${corLat},${corLng}`;
                $('[name=cordinate]').val(cord);

                $.get(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${corLat}&lon=${corLng}`, function(data){

                    $('[name=address]').val(data['display_name']); 

                }); 

            }); 


        }); 

        $(".formAdd").submit(function(e) {
            $("#overlay").fadeIn(300);
            e.preventDefault(); 
            var formData = new FormData($('.formAdd')[0]); 
            $.ajax({
                url: "<?php echo base_url();?>masterdata/cctv/store",
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
                            $("#addModal").modal('hide');
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

 

    function detail(id) {
        $('#detailModal').modal('show');
        
        $('#detailModal').on('shown.bs.modal', function(event) { 

            $.ajax({
                type : "POST",
                url : "<?php echo base_url();?>masterdata/cctv/getIdCCTV", 
                data : {
                    "id" : id, 
                }, 
                dataType : "JSON",
                success : function(result){  
                    var ress = result['data'];
                    console.log(ress.ip_cctv);
                    if(ress){ 
                       
                        $('#type_cctvDetail').val(ress.type_cctv);
                        $('#ip_cctvDetail').val(ress.ip_cctv);
                        $('#link_cctvDetail').val(ress.link_cctv);
                        $('#gateway_cctvDetail').val(ress.gateway_cctv);
                        $('#addressDetail').val(ress.address_cctv);
						$('#usernameDetail').val(ress.username_cctv); 
                        $('#passwordDetail').val(ress.password_cctv);  


                        var resource = '';
                        if(ress.ip_cctv == 'https://balisatudata.baliprov.go.id/peta-cctv'){
                            resource = `<iframe id="myIframe" src="${ress.link_cctv}" style="width: 100%; height: 100%"></iframe>`;
                        }else{
                            resource = `<img style="width: 100%;  height: 100%" src="${ress.link_cctv}" />`;
                        }
                        $("#videoCCTV").html(resource);

                        // videoCCTV
                        
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
                        var mapContainer = L.map('mapG20DashboardDetail', {
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
                            position: 'topright'
                        }).addTo(mapContainer);
                        L.control.zoom({
                            position: 'bottomleft'
                        }).addTo(mapContainer);
                    }else{
                        Swal.fire(
                            `Terjadi Kesalahan Pada System`,
                            '',
                            'error'
                        ).then(function() {});
                    }
                }
            });
            
        });
    }

    function editData(id) {
        $('#editModal').modal('show');
        
        $('#editModal').on('shown.bs.modal', function(event) { 

            $.ajax({
                type : "POST",
                url : "<?php echo base_url();?>masterdata/cctv/getIdCCTV", 
                data : {
                    "id" : id, 
                }, 
                dataType : "JSON",
                success : function(result){  
                    var ress = result['data'];
                    console.log(ress);
                    if(ress){ 
                       
                        $('#type_cctvEdit').val(ress.type_cctv);
                        $('#ip_cctvEdit').val(ress.ip_cctv);
                        $('#link_cctvEdit').val(ress.link_cctv);
                        $('#gateway_cctvEdit').val(ress.gateway_cctv);
                        $('#addressEdit').val(ress.address_cctv); 
                        $('#usernameEdit').val(ress.username_cctv); 
                        $('#passwordEdit').val(ress.password_cctv); 
                        


                        var resource = '';
                        if(ress.ip_cctv == 'https://balisatudata.baliprov.go.id/peta-cctv'){
                            resource = `<iframe id="myIframe" src="${ress.link_cctv}" style="width: 100%; height: 100%"></iframe>`;
                        }else{
                            resource = `<img style="width: 100%;  height: 100%" src="${ress.link_cctv}" />`;
                        }
                        $("#videoCCTV").html(resource);

                        // videoCCTV
                        
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
                        var mapContainer = L.map('mapEdit', {
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
							position: 'topright'
						}).addTo(mapContainer);
						L.control.zoom({
							position: 'bottomleft'
						}).addTo(mapContainer);

						$('#editModal').on('shown.bs.modal', function() { 
							mapContainer.invalidateSize();

							let countlist = 0;
							let list = ""; 
							$('[name=address]').on("change", function (e) {
								// console.log(this.value);
								$.get(`https://nominatim.openstreetmap.org/search?format=json&q=${this.value}`, function(ress){
									console.log(ress);  
									countlist = 0;
									list = "";
									ress.forEach(el => {
										countlist += 1;
										list += `<a class="list-group-item" 
										id="list${countlist}"   
										data-alamat="${el.display_name}"
										data-cords="${el.lat},${el.lon}" href="javascript:void(0)">${el.display_name}</a>`;
										$('#listAddress').html(list); 
									});  

									if(list == ""){
										countlist = 0;
										list = "";
										$('#listAddress').html(list); 
									}

									
									for (let i = 0; i < ress.length; i++){ 
										$(`#list${i+1}`).click(function(){  
											var latlong =  $(this).data('cords').split(',');
											var latitude = parseFloat(latlong[0]);
											var longitude = parseFloat(latlong[1]); 

											// console.log({a:latitude, b:longitude});
											$('[name=address]').val($(this).data('alamat'));
											$('[name=cordinate]').val($(this).data('cords'));
											mapContainer.flyTo([latitude, longitude], 17);    
										});
									}
								});

							});


							$('[name=cordinate]').on("change", function (e) {

								var cordLatLong =  this.value.split(','); 
								var cordLat = parseFloat(cordLatLong[0]); 
								var corLong = parseFloat(cordLatLong[1]); 

								// console.log({a:cordLat, b:corLong});

								$.get(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${cordLat}&lon=${corLong}`, function(data){
									$('[name=address]').val(data['display_name']); 
									mapContainer.flyTo([cordLat, corLong], 17);  
								}); 
							});


							mapContainer.on("dragend", function (e) {

								var corLat = mapContainer.getCenter()['lat'];
								var corLng = mapContainer.getCenter()['lng'];
								var cord = `${corLat},${corLng}`;
								$('[name=cordinate]').val(cord);

								$.get(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${corLat}&lon=${corLng}`, function(data){

									$('[name=address]').val(data['display_name']); 

								}); 

							}); 


						}); 
                    }else{
                        Swal.fire(
                            `Terjadi Kesalahan Pada System`,
                            '',
                            'error'
                        ).then(function() {});
                    }
                }
            });
            
        });
    }

    function hapus(id) { 
        Swal.fire({

        title: 'Anda yakin ingin menghapus ?',

        text: "",

        icon: 'warning',

        showCancelButton: true,

        confirmButtonColor: '#3085d6',

        cancelButtonColor: '#d33',

        confirmButtonText: 'Yes'

        }).then((result) => {

            if (result.value == true) {
                $("#overlay").fadeIn(300);

                $.ajax({
                    url: "<?php echo base_url(); ?>masterdata/cctv/hapusCCTV",
                    method: "POST",
                    data: {
                        "id": id,
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
                                userDataTable.ajax.reload();
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

            } else { 
                userDataTable.ajax.reload(); 
            }

        });

		
    }
	$('#btn_edit').on('click', function(e) {
        e.preventDefault()
        var formData = new FormData($('#form_edit')[0]);
        $.ajax({
            url: '<?= base_url() ?>masterdata/Cctv/updateCCTV',
            type: 'POST',
            data: formData,
            dataType: 'JSON',
            contentType: false,
            processData: false,
            success: function(results) {
                $("#overlay").fadeOut(300);
                if (results['status'] == true) {
                    Swal.fire(
                        `${results['message']}`,
                        '',
                        'success'
                    ).then(function() {
                        $(".UbahCCTV").modal('hide');
                        userDataTable.draw();
                    });
                } else {
                    Swal.fire(
                        `${results['message']}`,
                        '',
                        'error'
                    ).then(function() {});
                }
            }
        })
    })
</script>
