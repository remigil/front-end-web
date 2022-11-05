<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#">Data <?= $title; ?></a></li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Daftar <?= $title; ?></li>
    </ol>
</nav>
<!-- </div> -->
<div class="page">
    <button type="button" class="btn btn-primary waves-effect mb-2" id="btnTambah" data-bs-toggle="modal" data-bs-target=".TambahPolres">Tambah Polres</button>
    <div class="card">

        <div class="card-body">

            <table id="datatable" class="table dt-responsive w-100">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Polda</th>
                        <th>Nama Polres</th>
						<th>Kode Satpas</th>
                        <th width="40%">Alamat</th>
						<th>Latitude</th>
						<th>Longitude</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

            </table>

        </div>
    </div>
</div>
<!-- End Page -->


<div class="modal fade TambahPolres" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Tambah Polres</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
			<form action="" class="form" id="form_tambah" method="post" enctype="multipart/form-data">
                    
						<div class="col-md-12 mb-3"> 
                            <input type="file" name="photo" class="dropify" data-allowed-file-extensions="jpg png jpeg" /> 
                        </div>
                        
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <select name="namaPolda" class="form-select" style="width:100%" required>
									<option selected value="">Pilih Polda</option>
                                    <?php
                        				foreach ($data['getPolda'] as $row) : ?>
                            			<option value="<?php echo $row['id']; ?>"><?php echo $row['name_polda']; ?></option>
                        			<?php endforeach; ?>
                                </select>
                                <label for="polda">Polda</label>
                            </div>
						</div>
						<div class="col-md-12">
							<div class="form-floating mb-3">
								<input type="text" class="form-control" placeholder="kode" name="kodeSatpas">
								<label for="">Kode Satpas</label>
							</div>
						</div>
						<div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" placeholder="nama" name="namaPolres">
                                <label for="">Nama Polres</label>
                            </div>
						</div>

                        <div class="col-md-12">
                            <div class="form-floating mb-3">
								<textarea class="form-control" style="height: 100px" placeholder="Alamat" name="address"></textarea>
                                <label>Alamat</label>
                            </div> 
                            <div class="list-group" id="listAddress"></div>
                        </div> 
                        <div class="col-md-6" style="display: none;">
                            <div class="form-floating mb-3">
                            <input style="width: 100%;" class="form-control" name="cordinate" placeholder="" type="text">
                                <label>Coordinate</label>
                            </div>
                        </div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-floating mb-3">
									<input type="text" class="form-control" name="latitude" >
									<label for="">Latitude</label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-floating mb-3">
									<input type="text" class="form-control" name="longitude" >
									<label for="">Longitude</label>
								</div>
							</div>
							
						</div>
						
						<div class="col-md-12 mt-3">
                            <div id="mapG20Kegiatan" style="height: 400px">
                                <img src="<?php echo base_url();?>assets/pin.png" width="80" height="80" style="position: relative;z-index: 1000;left: 43%;top: 37%;">
                            </div>
                        </div>
						<div class="row mt-3">
							<div class="col-md-6">
								<div class="form-floating mb-3">
									<input type="time" class="form-control" name="open_time">
									<label for="">Jam Buka</label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-floating mb-3">
									<input type="time" class="form-control" name="close_time">
									<label for="">Jam Tutup</label>
								</div>
							</div>
							
						</div>
						<div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" placeholder="nomor" name="phone_polres">
                                <label for="">Nomor Telepon Polres</label>
                            </div>
                        </div>

                    <div class="col-md-12 mt-3">
                        <button type="submit" class="btn btn-primary waves-effect float-end" style="width: 25%; letter-spacing: 2px;">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade UbahPolres" id="myModalEdit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Edit Polres</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
				<form action="" class="form" id="form_edit" method="post" enctype="multipart/form-data">
					<input type="hidden" name="id" value="" id="id_polres" type="text">
						<!-- <div class="col-md-12 mb-3"> 
                            <input type="file" name="photo" id="photo" class="dropify" data-allowed-file-extensions="jpg png jpeg" /> 
                        </div> -->
                        
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <select name="namaPolda" id="namaPolda" class="form-select" style="width:100%" required>
										
                                    <?php
                        				foreach ($data['getPolda'] as $row) : ?>
                            			<option value="<?php echo $row['id']; ?>"><?php echo $row['name_polda']; ?></option>
                        			<?php endforeach; ?>
                                </select>
                                <label for="polda">Polda</label>
                            </div>
						</div>
						<div class="col-md-12">
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="kodeSatpas" placeholder="kode" name="kodeSatpas">
								<label for="">Kode Satpas</label>
							</div>
						</div>
						<div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="namaPolres" placeholder="nama" name="namaPolres">
                                <label for="">Nama Polres</label>
                            </div>
						</div>

                        <div class="col-md-12">
                            <div class="form-floating mb-3">
								<textarea class="form-control" style="height: 100px" id="address" placeholder="Alamat" name="address"></textarea>
                                <label>Alamat</label>
                            </div> 
                            <div class="list-group" id="listAddress"></div>
                        </div> 
                        <div class="col-md-6" style="display: none;">
                            <div class="form-floating mb-3">
                            <input style="width: 100%;" class="form-control" name="cordinate" placeholder="" type="text">
                                <label>Coordinate</label>
                            </div>
                        </div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-floating mb-3">
									<input type="text" class="form-control" name="latitude" id="latitude">
									<label for="">Latitude</label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-floating mb-3">
									<input type="text" class="form-control" name="longitude" id="longitude">
									<label for="">Longitude</label>
								</div>
							</div>
							
						</div>
						
						<div class="col-md-12 mt-3">
                            <div id="mapEdit" style="height: 400px">
                                <img src="<?php echo base_url();?>assets/pin.png" width="80" height="80" style="position: relative;z-index: 1000;left: 43%;top: 37%;">
                            </div>
                        </div>
						<div class="row mt-3">
							<div class="col-md-6">
								<div class="form-floating mb-3">
									<input type="time" class="form-control" id="open_time" name="open_time">
									<label for="">Jam Buka</label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-floating mb-3">
									<input type="time" class="form-control" id="close_time" name="close_time">
									<label for="">Jam Tutup</label>
								</div>
							</div>
							
						</div>
						<div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="phone_polres" placeholder="nomor" name="phone_polres">
                                <label for="">Nomor Telepon Polres</label>
                            </div>
                        </div>


                    <div class="col-md-12">
                        <button type="submit" id="btn_edit" class="btn btn-primary waves-effect float-end" style="width: 25%; letter-spacing: 2px;">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade DetailPolres" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Detail Polres</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="form">
						<div class="col-md-12 mb-3"> 
                            <!-- <input type="file" name="photo" id="photo" class="dropify" data-allowed-file-extensions="jpg png jpeg" />  -->
                        </div>
                        
                        <div class="col-md-12">
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="namaPolda" placeholder="nama" name="namaPolda">
								<label for="">Nama Polda</label>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="kodeSatpas" placeholder="kode" name="kodeSatpas">
								<label for="">Kode Satpas</label>
							</div>
						</div>
						<div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="namaPolres" placeholder="nama" name="namaPolres">
                                <label for="">Nama Polres</label>
                            </div>
						</div>

                        <div class="col-md-12">
                            <div class="form-floating mb-3">
								<textarea class="form-control" style="height: 100px" id="address" placeholder="Alamat" name="address"></textarea>
                                <label>Alamat</label>
                            </div> 
                            
                        </div> 
                        
						<div class="row">
							<div class="col-md-6">
								<div class="form-floating mb-3">
									<input type="text" class="form-control" name="latitude" id="latitude">
									<label for="">Latitude</label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-floating mb-3">
									<input type="text" class="form-control" name="longitude" id="longitude">
									<label for="">Longitude</label>
								</div>
							</div>
							
						</div>
						
						
						<div class="row mt-3">
							<div class="col-md-6">
								<div class="form-floating mb-3">
									<input type="time" class="form-control" id="open_time" name="open_time">
									<label for="">Jam Buka</label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-floating mb-3">
									<input type="time" class="form-control" id="close_time" name="close_time">
									<label for="">Jam Tutup</label>
								</div>
							</div>
							
						</div>
						<div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="phone_polres" placeholder="nomor" name="phone_polres">
                                <label for="">Nomor Telepon Polda</label>
                            </div>
                        </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<script>

    $(document).ready(function() {
        $('.dropify').dropify();

		$('[name=cordinate]').val('-1.5707209, 115.4875168');
        var initialCenter = [-1.5707209, 115.4875168];
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
        var mapContainer = L.map('mapG20Kegiatan', {
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
		
	$('#myModal').on('shown.bs.modal', function() {
            mapContainer.invalidateSize();

            $('.dropify').dropify();



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

							$("[name=latitude]").val(latitude);
							$("[name=longitude]").val(longitude);

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

				$("[name=latitude]").val(corLat);
				$("[name=longitude]").val(corLng);
                $('[name=cordinate]').val(cord);

                $.get(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${corLat}&lon=${corLng}`, function(data){

                    $('[name=address]').val(data['display_name']); 

                }); 

            });
			

        });

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

                url: '<?php echo base_url(); ?>masterdata/Polres/serverSideTable',

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
					data: 'name_polda'
                },
				{
					data: 'name_polres'
				},
				{
					data: 'code_satpas'
                },
				{
					data: 'address'
				},
				{
                    data: 'latitude'
                },
				{
                    data: 'longitude'
                },
                {
                    data: 'action',
                    orderable: false
                }

            ],

            order: [
                [0, "ASC"]
            ],

            drawCallback: function(settings) {

                $("#overlay").fadeOut(300);

            }


        });

        $(".form").submit(function(e) {
            $("#overlay").fadeIn(300);
            e.preventDefault();
            var formData = new FormData($('.form')[0]);
            $.ajax({
                url: "<?php echo base_url(); ?>masterdata/Polres/store",
                method: "POST",
                data: formData,
                dataType: 'JSON',
                contentType: false,
                processData: false,
                success: function(data) {
                    $("#overlay").fadeOut(300);
                    if (data['status'] == true) {
                        Swal.fire(
                            `${data['message']}`,
                            '',
                            'success'
                        ).then(function() {
                            $(".TambahPolres").modal('hide');
                            userDataTable.draw();
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
        });
    });

	// map pada form edit

	$(document).ready(function() {
        var initialCenter = [-8.751740, 115.149643];
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
		
		$('#myModalEdit').on('shown.bs.modal', function() {
            mapContainer.invalidateSize();

            $('.dropify').dropify();



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

							$("[name=latitude]").val(latitude);
							$("[name=longitude]").val(longitude);

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

				$("[name=latitude]").val(corLat);
				$("[name=longitude]").val(corLng);
                $('[name=cordinate]').val(cord);

                $.get(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${corLat}&lon=${corLng}`, function(data){

                    $('[name=address]').val(data['display_name']); 

                }); 

            });
			

        });

	});

    function detail(id) {
        $.ajax({
            url: '<?= base_url() ?>masterdata/Polres/detailPolres/',
            type: 'POST',
            data: {
                id_polres: id
            },
            dataType: 'JSON',
            success: function(results) {
                console.log(results)
                $('.DetailPolres,#logo_polres').attr('disabled', true)
                $('.DetailPolres,#namaPolda').attr('disabled', true)
                $('.DetailPolres,#namaPolres').attr('disabled', true)
                $('.DetailPolres,#kodeSatpas').attr('disabled', true)
                $('.DetailPolres,#address').attr('disabled', true)
                $('.DetailPolres,#latitude').attr('disabled', true)
                $('.DetailPolres,#longitude').attr('disabled', true)
                $('.DetailPolres,#open_time').attr('disabled', true)
                $('.DetailPolres,#close_time').attr('disabled', true)
                $('.DetailPolres,#phone_polres').attr('disabled', true)

                $('.DetailPolres,#logo_polres').val(results.logo_polres)
                $('.DetailPolres,#namaPolda').val(results.polda.name_polda)
                $('.DetailPolres,#namaPolres').val(results.name_polres)
                $('.DetailPolres,#kodeSatpas').val(results.code_satpas)
                $('.DetailPolres,#address').val(results.address)
                $('.DetailPolres,#latitude').val(results.latitude)
                $('.DetailPolres,#longitude').val(results.longitude)
                $('.DetailPolres,#open_time').val(results.open_time)
                $('.DetailPolres,#close_time').val(results.close_time)
                $('.DetailPolres,#phone_polres').val(results.phone_polres)
                
            }
        })
    }

    function detailEdit(id) {
        $.ajax({
            url: '<?= base_url() ?>masterdata/Polres/detailPolres/',
            type: 'POST',
            data: {
                id_polres: id
            },
            dataType: 'JSON',
            success: function(results) {
                $('.UbahPolres,#logo_polres').attr('disabled', false)
                $('.UbahPolres,#namaPolda').attr('disabled', false)
                $('.UbahPolres,#namaPolres').attr('disabled', false)
                $('.UbahPolres,#kodeSatpas').attr('disabled', false)
                $('.UbahPolres,#address').attr('disabled', false)
                $('.UbahPolres,#latitude').attr('disabled', false)
                $('.UbahPolres,#longitude').attr('disabled', false)
                $('.UbahPolres,#open_time').attr('disabled', false)
                $('.UbahPolres,#close_time').attr('disabled', false)
                $('.UbahPolres,#phone_polres').attr('disabled', false)

                $('#id_polres').val(results.id)

                $('.UbahPolres,#logo_polres').val(results.logo_polres)
                $('.UbahPolres,#namaPolda').val(results.polda.id)
                $('.UbahPolres,#namaPolres').val(results.name_polres)
                $('.UbahPolres,#kodeSatpas').val(results.code_satpas)
                $('.UbahPolres,#address').val(results.address)
                $('.UbahPolres,#latitude').val(results.latitude)
                $('.UbahPolres,#longitude').val(results.longitude)
                $('.UbahPolres,#open_time').val(results.open_time)
                $('.UbahPolres,#close_time').val(results.close_time)
                $('.UbahPolres,#phone_polres').val(results.phone_polres)
            }
        })
    }

    function hapus(id) {
        Swal.fire({
            title: 'Apakah anda ingin menghapus data ini?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#C61318',
            cancelButtonColor: '#003A91',
            cancelButtonText: 'Batal',
            confirmButtonText: 'Hapus',
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "<?php echo base_url(); ?>masterdata/Polres/hapusPolres/",
                    type: "POST",
                    data: {
                        id_polres: id
                    },
                    dataType: 'JSON',
                    success: function(data) {
                        $("#overlay").fadeOut(300);
                        if (data['status'] == true) {
                            Swal.fire(
                                `${data['message']}`,
                                '',
                                'success'
                            ).then(function() {
                                $(".TambahPolres").modal('hide');
                                userDataTable.draw();
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
            }
        })
    }

    $('#btn_edit').on('click', function(e) {
        e.preventDefault()
        var formData = new FormData($('#form_edit')[0]);
        $.ajax({
            url: '<?= base_url() ?>masterdata/Polres/updatePolres',
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
                        $(".UbahPolres").modal('hide');
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

	$('#btnTambah').on('click', function(e){
		$('#form_tambah')[0].reset()
	})
	$('#btnEdit').on('click', function(e){
		$('#form_edit')[0].reset()
	})
	
</script>
