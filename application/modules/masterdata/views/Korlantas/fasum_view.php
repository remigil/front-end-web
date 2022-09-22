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
    <button type="button" class="btn btn-primary waves-effect mb-2" data-bs-toggle="modal" data-bs-target=".TambahFasum">Tambah Fasilitas Umum</button>
    <div class="card">

        <div class="card-body">

            <table id="datatable" class="table dt-responsive w-100">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Fasum</th>
                        <th>Jenis Fasum</th>
                        <th>Alamat</th>
                        <th>Kontak</th>
                        <th>Jam Operasional</th>
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
                <h5 class="modal-title" id="myLargeModalLabel" style="color:white">Tambah Fasilitas Umum</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
				<form action="" class="form" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="namaFasum" name="namaFasum">
                                <label for="">Nama Fasilitas Umum</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="jenisFasum" name="jenisFasum">
                                <label for="">Jenis Fasilitas Umum</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                            <div class="form-floating mb-3">
								<textarea class="form-control" style="height: 100px" placeholder="Alamat" id="address" name="address"></textarea>
                                <label for="">Alamat</label>
                            </div> 
                            <div class="list-group" id="listAddress"></div>
                        </div> 
                        <div class="col-md-6" style="display: none;">
                            <div class="material-textfield mb-3">
                            <input style="width: 100%;" name="cordinate" placeholder="" type="text">
                                <label class="labelmui">Coordinate</label>
                            </div>
                        </div>
					<div class="row">
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
                            <div id="mapG20Kegiatan" style="height: 400px">
                                <img src="<?php echo base_url();?>assets/pin.png" width="80" height="80" style="position: relative;z-index: 1000;left: 43%;top: 37%;">
                            </div>
                        </div>
					<div class="row mt-3">
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <textarea class="form-control" style="height: 100px" placeholder="isi deskripsi" id="deskripsiFasum" name="deskripsiFasum"></textarea>
                                <label for="">Deskripsi Fasilitas Umum</label>
                            </div>
                        </div>
                    </div>
					<div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="kontakFasum" name="kontakFasum">
                                <label for="kontakFasum">Kontak Fasilitas Umum</label>
                            </div>
                        </div>
                        <div class="col-md-6">
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="statusFasum" name="statusFasum">
                                <label for="statusFasum">Status</label>
                            </div>
                        </div>
                    </div>
					<div class="row">
                        <div class="col-md-12">
							<div class="form-floating mb-3">
								<input type="file" name="photo" id="" style="width:100% ;" class="form-control">
                        		<label for="" class="labelmui">Logo Fasilitas Umum</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="time" class="form-control" id="jamBuka" name="jamBuka">
                                <label for="jamBuka">Jam Buka</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="time" class="form-control" id="jamTutup" name="jamTutup">
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
                <h5 class="modal-title" id="myLargeModalLabel" style="color:white">Detail Fasilitas Umum</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
				<form action="" class="form">
				<div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="namaFasum" name="namaFasum">
                                <label for="namaFasum">Nama Fasilitas Umum</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="jenisFasum" name="jenisFasum">
                                <label for="jenisFasum">Jenis Fasilitas Umum</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <textarea class="form-control" style="height: 100px" placeholder="isi alamat" id="alamatFasum" name="alamatFasum"></textarea>
                                <label for="">Alamat</label>
                            </div>
                        </div>
                    </div>
					<div class="row">
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
                            <div class="mt-1 mb-3 rounded" style="height: 22vh; ;" id="mapG20Dashboard"></div>
                        </div>
                    </div>
					<div class="row">
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <textarea class="form-control" style="height: 100px" placeholder="isi deskripsi" id="deskripsiFasum" name="deskripsiFasum"></textarea>
                                <label for="deskripsi">Deskripsi Fasilitas Umum</label>
                            </div>
                        </div>
                    </div>
					<div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="kontakFasum" name="kontakFasum">
                                <label for="kontakFasum">Kontak Fasilitas Umum</label>
                            </div>
                        </div>
                        <div class="col-md-6">
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="statusFasum" name="statusFasum">
                                <label for="statusFasum">Status</label>
                            </div>
                        </div>
                    </div>
					<div class="row">
                        <div class="col-md-12">
							<div class="form-floating mb-3">
								<input type="file" name="photo" id="photo" style="width:100% ;" class="form-control">
                        		<label for="" class="labelmui">Logo Fasilitas Umum</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="time" class="form-control" id="jamBuka" name="jamBuka" >
                                <label for="jamBuka">Jam Buka</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="time" class="form-control" id="jamTutup" name="jamTutup">
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
<div class="modal fade UbahFasum" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="myLargeModalLabel" style="color:white">Edit Fasilitas Umum</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
				<form action="" class="form" id="form_edit" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id" value="" id="id_fasum" type="text">
				<div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="namaFasum" name="namaFasum">
                                <label for="namaFasum">Nama Fasilitas Umum</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="jenisFasum" name="jenisFasum">
                                <label for="jenisFasum">Jenis Fasilitas Umum</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <textarea class="form-control" style="height: 100px" placeholder="isi alamat" id="alamatFasum" name="alamatFasum"></textarea>
                                <label for="">Alamat</label>
                            </div>
                        </div>
                    </div>
					<div class="row">
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
                            <div class="mt-1 mb-3 rounded" style="height: 22vh; ;" id="mapG20Dashboard"></div>
                        </div>
                    </div>
					<div class="row">
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <textarea class="form-control" style="height: 100px" placeholder="isi deskripsi" id="deskripsiFasum" name="deskripsiFasum"></textarea>
                                <label for="deskripsi">Deskripsi Fasilitas Umum</label>
                            </div>
                        </div>
                    </div>
					<div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="kontakFasum" name="kontakFasum">
                                <label for="kontakFasum">Kontak Fasilitas Umum</label>
                            </div>
                        </div>
                        <div class="col-md-6">
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="statusFasum" name="statusFasum">
                                <label for="statusFasum">Status</label>
                            </div>
                        </div>
                    </div>
					<div class="row">
                        <div class="col-md-12">
							<div class="form-floating mb-3">
								<input type="file" name="photo" id="photo" style="width:100% ;" class="form-control">
                        		<label for="" class="labelmui">Logo Fasilitas Umum</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="time" class="form-control" id="jamBuka" name="jamBuka" >
                                <label for="jamBuka">Jam Buka</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="time" class="form-control" id="jamTutup" name="jamTutup">
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

<div class="modal fade UploadFasum" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title w-100 text-center" id="myLargeModalLabel">Upload File</h5>
            </div>
            <div class="modal-body">

                <form action="" class="form">
                    <div class="col-md-12">
                        <input type="file" name="photo" class="dropify rounded" data-allowed-file-extensions="jpg png jpeg" data-default-file="<?php echo base_url(); ?>assets/no_image.png" />
                    </div>
                    <button type="submit" class="btn btn-primary waves-effect float-end mt-3" style="width: 100%; letter-spacing: 2px;">UPLOAD FILE</button>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<script>

	$(document).ready(function() {
        $('.dropify').dropify();

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

                url: '<?php echo base_url(); ?>masterdata/Fasilitasumum/serverSideTable',

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
                    data: 'fasum_name'
                },
                {
                    data: 'fasum_type'
                },
				{
                    data: 'fasum_address'
                },
				{
                    data: 'fasum_phone'
                },
				{
                    data: 'jam_operasional'
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
        });
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
                $('.DetailFasum,input').attr('readonly', true)
                // $('.DetailFasum,input,#category').attr('disabled', true)
                $('.DetailFasum,#namaFasum').val(results.fasum_name)
                $('.DetailFasum,#jenisFasum').val(results.fasum_type)
                $('.DetailFasum,#alamatFasum').val(results.fasum_address)
                $('.DetailFasum,#latitude').val(results.fasum_lat)
                $('.DetailFasum,#longitude').val(results.fasum_lng)
                $('.DetailFasum,#deskripsiFasum').val(results.fasum_description)
                $('.DetailFasum,#kontakFasum').val(results.fasum_phone)
                $('.DetailFasum,#statusFasum').val(results.fasum_status)
                // $('.DetailFasum,#photo').val(results.fasum_logo)
                $('.DetailFasum,#jamBuka').val(results.fasum_open_time)
                $('.DetailFasum,#jamTutup').val(results.fasum_close_time)
            }
        })
    }

    function detailEdit(id) {
        $.ajax({
            url: '<?= base_url() ?>masterdata/Fasilitasumum/detailFasum/',
            type: 'POST',
            data: {
                id_fasum: id
            },
            dataType: 'JSON',
            success: function(results) {
                $('.UbahFasum,input').attr('readonly', false)
                // $('.DetailFasum,input,#category').attr('disabled', true)
				$('#id_fasum').val(results.id)
                $('.DetailFasum,#namaFasum').val(results.fasum_name)
                $('.DetailFasum,#jenisFasum').val(results.fasum_type)
                $('.DetailFasum,#alamatFasum').val(results.fasum_address)
                $('.DetailFasum,#latitude').val(results.fasum_lat)
                $('.DetailFasum,#longitude').val(results.fasum_lng)
                $('.DetailFasum,#deskripsiFasum').val(results.fasum_description)
                $('.DetailFasum,#kontakFasum').val(results.fasum_phone)
                $('.DetailFasum,#statusFasum').val(results.fasum_status)
                // $('.DetailFasum,#photo').val(results.fasum_logo)
                $('.DetailFasum,#jamBuka').val(results.fasum_open_time)
                $('.DetailFasum,#jamTutup').val(results.fasum_close_time)
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
        
</script>
