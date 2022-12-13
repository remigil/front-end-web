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
    <button type="button" class="btn btn-primary waves-effect mb-2" id="btnTambah" data-bs-toggle="modal" data-bs-target=".TambahFasum">Tambah Jalur</button>
    <div class="card">

        <div class="card-body">

            <table id="datatable" class="table dt-responsive w-100">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Jalur</th>
                        <!-- <th>Jenis Fasum</th> -->
                        <!-- <th>Alamat</th> -->
                        <!-- <th>Kontak</th> -->
                        <th>Warna</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                
            </table>

        </div>
    </div>
</div>
<!-- End Page -->


<!-- ADD Modals -->
<div class="modal fade TambahFasum" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="myLargeModalLabel" style="color:white">Tambah Jalur</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
				<form action="" class="form" id="form_tambah" method="post" enctype="multipart/form-data">
                <input type="hidden" name="<?= $csrf_name;?>" value="<?= $csrf_token;?>" style="display: none">
                    <div class="row">
						<div class="col-md-12 mb-3" style="display: none;"> 
                            <input type="file" name="photo" class="dropify" data-allowed-file-extensions="jpg png jpeg" /> 
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" placeholder="nama fasum" name="namaFasum">
                                <label for="namaFasum">Nama Jalur</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" placeholder="nama fasum" name="fasum_color" id="fasum_color">
                                <label for="namaFasum">Warna Jalur</label>
                            </div>
                        </div>
                        <input hidden type="text" class="form-control" placeholder="nama fasum" value="12" name="jenisFasum"> 
						<input hidden type="text" class="kilometres" name="kilometres" placeholder="15" value="0" />

                        <div class="col-md-6"  style="display: none;">
                            <div class="form-floating mb-3"> 
                                <input type="text" class="form-control" placeholder="Alamat" name="address">
                                <label for="">Alamat</label>
                            </div>  
                        </div> 
                        <div id="listAddress" class="col-md-12"></div>
                        <div class="col-md-6" style="display: none;">
                            <div class="material-textfield mb-3">
                            <input style="width: 100%;" name="cordinate" placeholder="" type="text">
                                <label for="">Coordinate</label>
                            </div>
                        </div>
                    </div>
					<div class="row"  style="display: none;">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="latitude" placeholder="latitude">
                                <label for="latitude">Latitude</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="longitude" placeholder="longitude">
                                <label for="longitude">Longitude</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div id="mapG20Kegiatan" style="height: 500px"></div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <textarea hidden name="fasum_route" id="fasum_route" cols="30" rows="30"></textarea>
                    </div>
					<div class="row mt-3">
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <textarea class="form-control" style="height: 100px" placeholder="isi deskripsi" name="deskripsiFasum"></textarea>
                                <label for="">Deskripsi Jalur</label>
                            </div>
                        </div>
                    </div>
					<div class="row"  style="display: none;">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="kontakFasum" placeholder="kontak">
                                <label for="kontakFasum">Kontak Jalur</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                        	<div class="form-floating mb-3">
                                <select name="statusFasum" class="form-select" aria-label="Floating label select" style="width:100%" required>
									<option selected value="">Pilih Status Fasum</option>
                            		<option value="0">Nonaktif</option>
                            		<option selected value="1">Aktif</option>
                                </select>
                                <label for="">Status</label>
                            </div>
						</div>
                    </div>
					
                    <div class="row"  style="display: none;">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="time" class="form-control" name="jamBuka">
                                <label for="jamBuka">Jam Buka</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="time" class="form-control" name="jamTutup">
                                <label for="jamTutup">Jam Tutup</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn  btn-primary float-end">SIMPAN</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Detail Modals -->
<div class="modal fade DetailFasum" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="myLargeModalLabel" style="color:white">Detail Jalur</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
				<form action="" class="form">
                <input type="hidden" name="<?= $csrf_name;?>" value="<?= $csrf_token;?>" style="display: none">
				<div class="row">
					    <div class="col-md-12 mb-3"  style="display: none;" id="detailViewFoto"> 
                           
                        </div>
                        <div class="col-md-12">
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="namaFasum" name="namaFasum">
                                <label for="namaFasum">Nama Jalur</label>
                            </div>
                        </div>
                        <!-- <div class="col-md-6">
                        	<div class="form-floating mb-3">
                                <select name="jenisFasum" class="form-select" aria-label="Floating label select" style="width:100%" required>
									<option selected value="">Pilih Jenis Fasum</option>
                                    <?php
                        				foreach ($data['getCategory'] as $row) : ?>
                            			<option value="<?php echo $row['id']; ?>"><?php echo $row['name_category_fasum']; ?></option>
                        			<?php endforeach; ?>
                                </select>
                                <label for="">Jenis Fasum</label>
                            </div>
						</div> -->
                        <div class="col-md-6"  style="display: none;">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="address" name="address"> 
                                <label for="">Alamat</label>
                            </div>
                        </div>
                    </div> 
					<div class="row"  style="display: none;">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="latitude" name="latitude">
                                <label for="latitude">Latitude</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="longitude" name="longitude">
                                <label for="longitude">Longitude</label>
                            </div>
                        </div>
                    </div>
					<div class="row">
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <textarea class="form-control" style="height: 100px" placeholder="isi deskripsi" id="deskripsiFasum" name="deskripsiFasum"></textarea>
                                <label for="deskripsi">Deskripsi Jalur</label>
                            </div>
                        </div>
                    </div>
					<div class="row"  style="display: none;">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="kontakFasum" name="kontakFasum">
                                <label for="kontakFasum">Kontak Jalur</label>
                            </div>
                        </div>
                        <div class="col-md-6">
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="statusFasum" name="statusFasum">
                                <label for="statusFasum">Status</label>
                            </div>
                        </div>
                    </div>
					
                    <div class="row" style="display: none;">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="jamBuka" name="jamBuka" >
                                <label for="jamBuka">Jam Buka</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="jamTutup" name="jamTutup">
                                <label for="jamTutup">Jam Tutup</label>
                            </div>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modals -->
<div class="modal fade UbahFasum" id="myModalEdit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="myLargeModalLabel" style="color:white">Edit Jalur</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
				<form action="" class="form" id="form_edit" method="post" enctype="multipart/form-data">
                <input type="hidden" name="<?= $csrf_name;?>" value="<?= $csrf_token;?>" style="display: none">
				<input type="hidden" name="id" value="" id="id_fasum" type="text">
				<div class="row">
						<div class="col-md-12 mb-3"  style="display: none;" id="fotoEdit"> 
                            <input type="file" name="photo" class="dropify" data-allowed-file-extensions="jpg png jpeg"/>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="namaFasum" name="namaFasum">
                                <label for="">Nama Jalur</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" placeholder="nama fasum" name="fasum_color" id="fasum_color">
                                <label for="namaFasum">Warna Jalur</label>
                            </div>
                        </div>
                        <input hidden type="text" class="form-control" placeholder="nama fasum" value="12" name="jenisFasum"> 
                        <input hidden type="text" class="kilometres" name="kilometres" placeholder="15" value="0" />


                        <div class="col-md-6" style="display: none;">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="address" name="address"> 
                                <label for="">Alamat</label>
                            </div>
                        </div>
                        <div id="listAddressEdit" class="col-md-12"></div>
                        <div class="col-md-6" style="display: none;"> 
                            <div class="material-textfield mb-3">
                            <input style="width: 100%;" name="cordinateEdit" id="cordinateEdit" placeholder="" type="text">
                                <label class="labelmui">Coordinate</label>
                            </div>
                        </div>
                    </div>
                         
					<div class="row" style="display: none;">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="latitude" name="latitude">
                                <label for="latitude">Latitude</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="longitude" name="longitude">
                                <label for="longitude">Longitude</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div id="mapEdit" style="height: 500px"></div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <textarea hidden name="fasum_routeEdit" id="fasum_routeEdit" cols="30" rows="30"></textarea>
                    </div>
					<div class="row mt-3">
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <textarea class="form-control" style="height: 100px" placeholder="isi deskripsi" id="deskripsiFasum" name="deskripsiFasum"></textarea>
                                <label for="">Deskripsi Jalur</label>
                            </div>
                        </div>
                    </div>
					<div class="row" style="display: none;">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="kontakFasum" name="kontakFasum">
                                <label for="kontakFasum">Kontak Jalur</label>
                            </div>
                        </div>
                        <div class="col-md-6">
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="statusFasum" name="statusFasum">
                                <label for="statusFasum">Status</label>
                            </div>
                        </div>
                    </div>
					
                    <div class="row" style="display: none;">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="jamBuka" name="jamBuka">
                                <label for="jamBuka">Jam Buka</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="jamTutup" name="jamTutup">
                                <label for="jamTutup">Jam Tutup</label>
                            </div>
                        </div>
                    </div>
                    <button class="btn  btn-primary float-end" id="btn_edit" type="submit">SIMPAN</button>
                </form>
            </div>
        </div>
    </div>
</div>
 

<script>

    let arrayWaypointUtama = [];
    var routeAlternativeUtama;
    var routingAlternativeUtama;

    let arrayWaypointUtamaEdit = [];
    var routeAlternativeUtamaEdit;
    var routingAlternativeUtamaEdit;

    var mapContainerEdit;
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
            position: 'topleft'
        }).addTo(mapContainer);
        L.control.zoom({
            position: 'bottomleft'
        }).addTo(mapContainer);
		
	$('#myModal').on('shown.bs.modal', function() {
            mapContainer.invalidateSize();

            $('.dropify').dropify(); 

            let countlist = 0;
            let list = ""; 
            // $('[name=address]').on("change", function (e) {
            //     // console.log(this.value);
            //     $.get(`https://nominatim.openstreetmap.org/search?format=json&q=${this.value}`, function(ress){
            //         console.log(ress);  
            //         countlist = 0;
            //         list = "";
            //         ress.forEach(el => {
            //             countlist += 1;
            //             list += `<a class="list-group-item" 
            //             id="list${countlist}"   
            //             data-alamat="${el.display_name}"
            //             data-cords="${el.lat},${el.lon}" href="javascript:void(0)">${el.display_name}</a>`;
            //             $('#listAddress').html(list); 
            //         });  

            //         if(list == ""){
            //             countlist = 0;
            //             list = "";
            //             $('#listAddress').html(list); 
            //         }

                    
            //         for (let i = 0; i < ress.length; i++){ 
            //             $(`#list${i+1}`).click(function(){  
            //                 var latlong =  $(this).data('cords').split(',');
            //                 var latitude = parseFloat(latlong[0]);
            //                 var longitude = parseFloat(latlong[1]); 

			// 				$("[name=latitude]").val(latitude);
			// 				$("[name=longitude]").val(longitude);

            //                 // console.log({a:latitude, b:longitude});
            //                 $('[name=address]').val($(this).data('alamat'));
            //                 $('[name=cordinate]').val($(this).data('cords'));
            //                 mapContainer.flyTo([latitude, longitude], 17);  
            //                 list = "";
            //                 $('#listAddress').html(list); 
            //                 $('#listAddress').hide();   
            //             });
            //         }
            //     });

            // });


            // $('[name=cordinate]').on("change", function (e) {

            //     var cordLatLong =  this.value.split(','); 
            //     var cordLat = parseFloat(cordLatLong[0]); 
            //     var corLong = parseFloat(cordLatLong[1]); 

            //     // console.log({a:cordLat, b:corLong});

            //     $.get(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${cordLat}&lon=${corLong}`, function(data){
            //         $('[name=address]').val(data['display_name']); 
            //         mapContainer.flyTo([cordLat, corLong], 17);  
            //     }); 
            // });


            // mapContainer.on("dragend", function (e) {

            //     var corLat = mapContainer.getCenter()['lat'];
            //     var corLng = mapContainer.getCenter()['lng'];
            //     var cord = `${corLat},${corLng}`;

			// 	$("[name=latitude]").val(corLat);
			// 	$("[name=longitude]").val(corLng);
            //     $('[name=cordinate]').val(cord);

            //     $.get(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${corLat}&lon=${corLng}`, function(data){

            //         $('[name=address]').val(data['display_name']); 

            //     }); 

            // });
			


            routeAlternativeUtama = L.Routing.control({
                waypoints: arrayWaypointUtama,
                draggableWaypoints: false,
                router: new L.Routing.osrmv1({
                    language: 'en',
                    profile: 'car'
                }),
                geocoder: L.Control.Geocoder.nominatim({})
            }).addTo(mapContainer);

            function createButton(label, container) {
                var btn = L.DomUtil.create('button', '', container);
                btn.setAttribute('type', 'button');
                btn.innerHTML = label;
                return btn;
            }

            mapContainer.on('click', function(e) {
                var container = L.DomUtil.create('div'),
                    startBtn = createButton('Start from this location', container),
                    destBtn = createButton('Go to this location', container);

                L.DomEvent.on(startBtn, 'click', function() {

                    routeAlternativeUtama.spliceWaypoints(0, 1, e.latlng);
                    mapContainer.closePopup();
                });
                L.DomEvent.on(destBtn, 'click', function() {

                    routeAlternativeUtama.spliceWaypoints(routeAlternativeUtama.getWaypoints().length - 1, 1, e.latlng);
                    mapContainer.closePopup();

                    routingAlternativeUtama = routeAlternativeUtama.getWaypoints();
                    $('#fasum_route').val(JSON.stringify(routingAlternativeUtama));
                });
                L.popup()
                .setContent(container)
                .setLatLng(e.latlng)
                .openOn(mapContainer); 
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

                url: '<?php echo base_url(); ?>masterdata/Fasilitasumum/serverSideTable',

                data: function(data) {

                    $("#overlay").fadeIn(300);

                    // console.log(data);

                    // data.filterTgl = $('[name=event_date]').val();

                    // data.filterTgl2 = $('[name=event_date_to]').val(); 

                    // data.filterStatus = $('[name=status]').val();

                    data.filterCateg = '12';

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
                    data: 'fasum_name'
                },
                // {
                //     data: 'category_fasum'
                // },
				// {
                //     data: 'fasum_address'
                // },
				// {
                //     data: 'fasum_phone'
                // },
				// {
                //     data: 'jam_operasional',
                //     orderable: false
                // },
                {
                    data: 'fasum_color'
                },
				{
                    data: 'fasum_description'
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
            
            if(routingAlternativeUtama){
                $('#fasum_route').val(JSON.stringify(routingAlternativeUtama)); 
                var formData = new FormData($('.form')[0]);
                $.ajax({
                    url: "<?php echo base_url(); ?>masterdata/Fasilitasumum/store",
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
                                $(".TambahFasum").modal('hide');
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
            }else{
                $("#overlay").fadeOut(300);
                Swal.fire(
                    `Jalur Wajib Di Isi !`,
                    '',
                    'error'
                ).then(function() {});
            }
        });
    });

    



	// map pada form edit
	$(document).ready(function() {

		// $('[name=cordinateEdit]').val($('#latitude').val(samsat_lat) + ',' + $('#longitude').val(samsat_lng));
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
        mapContainerEdit = L.map('mapEdit', {
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
        }).addTo(mapContainerEdit);
        L.control.zoom({
            position: 'bottomleft'
        }).addTo(mapContainerEdit);





        
		
		
	});

    function detail(id) {
        $.ajax({
            url: '<?= base_url() ?>masterdata/Fasilitasumum/detailFasum/',
            type: 'POST',
            data: {
                id_fasum: id
            },
            dataType: 'JSON',
            success: function(results) {

                var fotoFas = '';
                if(results.fasum_logo != null){
                    fotoFas = `data-default-file="<?php echo url_api();?>fasum_khusus/${results.fasum_logo}"`;
                }else{
                    fotoFas = `data-default-file="<?php echo base_url();?>assets/no_image.png"`;
                }
                $(`#detailViewFoto`).html(`<input type="file" name="photo" class="dropify" data-allowed-file-extensions="jpg png jpeg" ${fotoFas} />`);
				$('.dropify').dropify(); 
                
                $('.DetailFasum,#namaFasum').attr('disabled', true)
                $('.DetailFasum,#jenisFasum').attr('disabled', true)
                $('.DetailFasum,#address').attr('disabled', true)
                $('.DetailFasum,#latitude').attr('disabled', true)
                $('.DetailFasum,#longitude').attr('disabled', true)
                $('.DetailFasum,#deskripsiFasum').attr('disabled', true)
                $('.DetailFasum,#kontakFasum').attr('disabled', true)
                $('.DetailFasum,#statusFasum').attr('disabled', true)
                $('.DetailFasum,#photo').attr('disabled', true)
                $('.DetailFasum,#jamBuka').attr('disabled', true)
                $('.DetailFasum,#jamTutup').attr('disabled', true)

                $('.DetailFasum,#namaFasum').val(results.fasum_name)
                $('.DetailFasum,#jenisFasum').val(results.fasum_type)
                $('.DetailFasum,#address').val(results.fasum_address)
                $('.DetailFasum,#latitude').val(results.fasum_lat)
                $('.DetailFasum,#longitude').val(results.fasum_lng)
                $('.DetailFasum,#deskripsiFasum').val(results.fasum_description)
                $('.DetailFasum,#kontakFasum').val(results.fasum_phone)
                $('.DetailFasum,#statusFasum').val(results.fasum_status)
                $('.DetailFasum,#photo').val(results.fasum_logo)
                $('.DetailFasum,#jamBuka').val(results.fasum_open_time)
                $('.DetailFasum,#jamTutup').val(results.fasum_close_time)
            }
        })
    }

    function detailEdit(id) { 
        $("#overlay").fadeIn(300);   
        $.ajax({
            url: '<?= base_url() ?>masterdata/Fasilitasumum/detailFasum/',
            type: 'POST',
            data: {
                id_fasum: id
            },
            dataType: 'JSON',
            success: function(results) {
				// console.log(results);

                var fotoFas = '';
                if(results.fasum_logo != null){
                    fotoFas = `data-default-file="<?php echo url_api();?>fasum_khusus/${results.fasum_logo}"`;
                }else{
                    fotoFas = `data-default-file="<?php echo base_url();?>assets/no_image.png"`;
                }
                $(`#fotoEdit`).html(`<input type="file" name="photo" class="dropify" data-allowed-file-extensions="jpg png jpeg" ${fotoFas} />`);
				$('.dropify').dropify(); 

                $('.UbahFasum,#namaFasum').attr('disabled', false)
                $('.UbahFasum,#jenisFasum').attr('disabled', false)
                $('.UbahFasum,#address').attr('disabled', false)
                $('.UbahFasum,#latitude').attr('disabled', false)
                $('.UbahFasum,#longitude').attr('disabled', false)
                $('.UbahFasum,#deskripsiFasum').attr('disabled', false)
                $('.UbahFasum,#kontakFasum').attr('disabled', false)
                $('.UbahFasum,#statusFasum').attr('disabled', false)
                $('.UbahFasum,#photo').attr('disabled', false)
                $('.UbahFasum,#jamBuka').attr('disabled', false)
                $('.UbahFasum,#jamTutup').attr('disabled', false)

                $('#id_fasum').val(results.id)

                $('.UbahFasum,#namaFasum').val(results.fasum_name)
                $('.UbahFasum,#jenisFasum').val(results.fasum_type)

                $('.UbahFasum,#address').val(results.fasum_address)
                $('.UbahFasum,#cordinateEdit').val((results.fasum_lat) + ',' + (results.fasum_lng))
                $('.UbahFasum,#latitude').val(results.fasum_lat)
                $('.UbahFasum,#longitude').val(results.fasum_lng)
                $('.UbahFasum,#deskripsiFasum').val(results.fasum_description)
                $('.UbahFasum,#kontakFasum').val(results.fasum_phone)
                $('.UbahFasum,#statusFasum').val(results.fasum_status)
                $('.UbahFasum,#photo').val(results.fasum_logo)
                $('.UbahFasum,#jamBuka').val(results.fasum_open_time)
                $('.UbahFasum,#jamTutup').val(results.fasum_close_time)
                $('.UbahFasum,#fasum_color').val(results.fasum_color)
              
                $('.UbahFasum,#fasum_routeEdit').val(JSON.stringify(results.route)) 
                arrayWaypointUtamaEdit = results.route;
                // console.log(arrayWaypointUtamaEdit);
                $("#overlay").fadeOut(300);   
                $("#myModalEdit").modal('show');
            }
        })
    }


    $('#myModalEdit').on('shown.bs.modal', function() {
        mapContainerEdit.invalidateSize();

        let countlist = 0;
        let list = ""; 
        // $('[name=address]').on("change", function (e) {
        //     // console.log(this.value);
        //     $.get(`https://nominatim.openstreetmap.org/search?format=json&q=${this.value}`, function(ress){
        //         console.log(ress);  
        //         countlist = 0;
        //         list = "";
        //         ress.forEach(el => {
        //             countlist += 1;
        //             list += `<a class="list-group-item" 
        //             id="list${countlist}"   
        //             data-alamat="${el.display_name}"
        //             data-cords="${el.lat},${el.lon}" href="javascript:void(0)">${el.display_name}</a>`;
        //             $('#listAddressEdit').html(list); 
        //         });  

        //         if(list == ""){
        //             countlist = 0;
        //             list = "";
        //             $('#listAddressEdit').html(list); 
        //         }

                
        //         for (let i = 0; i < ress.length; i++){ 
        //             $(`#list${i+1}`).click(function(){  
        //                 var latlong =  $(this).data('cords').split(',');
        //                 var latitude = parseFloat(latlong[0]);
        //                 var longitude = parseFloat(latlong[1]); 

        // 				$("[name=latitude]").val(latitude);
        // 				$("[name=longitude]").val(longitude);

        //                 console.log({a:latitude, b:longitude});
        //                 $('[name=address]').val($(this).data('alamat'));
        //                 $('[name=cordinateEdit]').val($(this).data('cords'));
        //                 mapContainerEdit.flyTo([latitude, longitude], 17);  
        //                 list = "";
        //                 $('#listAddressEdit').html(list);   
        //                 $('#listAddressEdit').hide(); 
        //             });
        //         }
        //     });

        // });


        // $('[name=cordinateEdit]').on("change", function (e) {

        //     var cordLatLong =  this.value.split(','); 
        //     var cordLat = parseFloat(cordLatLong[0]); 
        //     var corLong = parseFloat(cordLatLong[1]); 

        //     // console.log({a:cordLat, b:corLong});

        //     $.get(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${cordLat}&lon=${corLong}`, function(data){
        //         $('[name=address]').val(data['display_name']); 
        //         mapContainerEdit.flyTo([cordLat, corLong], 17);  
        //     }); 
        // });


        // mapContainerEdit.on("dragend", function (e) {

        //     var corLat = mapContainer.getCenter()['lat'];
        //     var corLng = mapContainer.getCenter()['lng'];
        //     var cord = `${corLat},${corLng}`;

        // 	$("[name=latitude]").val(corLat);
        // 	$("[name=longitude]").val(corLng);
        //     $('[name=cordinateEdit]').val(cord);

        //     $.get(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${corLat}&lon=${corLng}`, function(data){

        //         $('[name=address]').val(data['display_name']); 

        //     }); 

        // });

        console.log(arrayWaypointUtamaEdit);

        routeAlternativeUtamaEdit = L.Routing.control({
            waypoints: arrayWaypointUtamaEdit,
            draggableWaypoints: false,
            router: new L.Routing.osrmv1({
                language: 'en',
                profile: 'car'
            }),
            geocoder: L.Control.Geocoder.nominatim({})
        }).addTo(mapContainerEdit);

        function createButton(label, container) {
            var btn = L.DomUtil.create('button', '', container);
            btn.setAttribute('type', 'button');
            btn.innerHTML = label;
            return btn;
        }

        mapContainerEdit.on('click', function(e) {
            var container = L.DomUtil.create('div'),
                startBtn = createButton('Start from this location', container),
                destBtn = createButton('Go to this location', container);

            L.DomEvent.on(startBtn, 'click', function() {

                routeAlternativeUtamaEdit.spliceWaypoints(0, 1, e.latlng);
                mapContainerEdit.closePopup();
            });
            L.DomEvent.on(destBtn, 'click', function() {

                routeAlternativeUtamaEdit.spliceWaypoints(routeAlternativeUtamaEdit.getWaypoints().length - 1, 1, e.latlng);
                mapContainerEdit.closePopup();

                routingAlternativeUtamaEdit = routeAlternativeUtamaEdit.getWaypoints();
                $('#fasum_routeEdit').val(JSON.stringify(routingAlternativeUtamaEdit));
            });
            L.popup()
            .setContent(container)
            .setLatLng(e.latlng)
            .openOn(mapContainerEdit); 
        });
        

    }); 

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
                    url: "<?php echo base_url(); ?>masterdata/Fasilitasumum/hapusFasum/",
                    type: "POST",
                    data: {
                        id_fasum: id
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
                                $(".TambahFasum").modal('hide');
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

        $('#fasum_routeEdit').val(JSON.stringify(routingAlternativeUtamaEdit));
        var formData = new FormData($('#form_edit')[0]);
        $.ajax({
            url: '<?= base_url() ?>masterdata/Fasilitasumum/updateFasum',
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
                        $(".UbahFasum").modal('hide');
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
        
</script>