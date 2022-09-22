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
    <button type="button" class="btn btn-primary waves-effect mb-2" data-bs-toggle="modal" data-bs-target=".TambahPolres">Tambah Polres</button>
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
			<form action="" class="form" method="post" enctype="multipart/form-data">
                    <div class="row">
					<div class="col-md-12 mb-3"> 
                            <input type="file" name="photo" class="dropify" data-allowed-file-extensions="jpg png jpeg" data-default-file="<?php echo base_url();?>assets/no_image.png"  /> 
                        </div>
                        <!-- <div class="col-md-3">
                            <p class="fw-bold fs-5">Icon Polres</p>
                            <input type="file" name="photo" class="dropify rounded" data-allowed-file-extensions="jpg png jpeg" data-default-file="<?php echo base_url(); ?>assets/no_image.png" />
                        </div> -->
                        <div class="col-md-12">
                            <div class="material-selectfield mb-3">
                                <select name="namaPolda" id="namaPolda">
                                    <!-- <select name="" id=""  multiple required> -->
                                    <option value="1">Jawa Barat</option>
                                    <option value="2">Jawa Tengah</option>
                                    <option value="3">Jawa Timur</option>
                                </select>
                                <label class=" labelmui">Polda</label>
                            </div>
                            <div class="material-textfield">
                                <input type="text" name="namaPolres" id="namaPolres">
                                <label for="" class="labelmui">Nama Polres</label>
                            </div>
							<div class="material-textfield">
                                <input type="text" name="kodeSatpas" id="kodeSatpas">
                                <label for="" class="labelmui">Kode Satpas</label>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="material-textfield mb-3">
                                <input style="width: 100%;" name="alamatPolres" placeholder="" type="text" required>
                                <label class="labelmui">Alamat</label>
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
								<div class="material-textfield">
									<input type="text" name="latitude" id="latitude">
									<label for="" class="labelmui">Latitude</label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="material-textfield">
									<input type="text" name="longitude" id="longitude">
									<label for="" class="labelmui">Longitude</label>
								</div>
							</div>
							
						</div>
						
                    </div>
					<div class="col-md-12 mt-3">
                            <div id="mapG20Kegiatan" style="height: 400px">
                                <img src="<?php echo base_url();?>assets/pin.png" width="80" height="80" style="position: relative;z-index: 1000;left: 43%;top: 37%;">
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

<div class="modal fade UbahPolres" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Edit Polres</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
			<form action="" class="form" id="form_edit" method="post" enctype="multipart/form-data">
			<input type="hidden" name="id" value="" id="id_polres" type="text">
                    <div class="row">
                        <!-- <div class="col-md-3">
                            <p class="fw-bold fs-5">Icon Polres</p>
                            <input type="file" name="photo" class="dropify rounded" data-allowed-file-extensions="jpg png jpeg" data-default-file="<?php echo base_url(); ?>assets/no_image.png" />
                        </div> -->
                        <div class="col-md-12">
                            <div class="material-selectfield mb-3">
                                <select name="namaPolda" id="namaPolda">
                                    <!-- <select name="" id=""  multiple required> -->
                                    <option value="1">Jawa Barat</option>
                                    <option value="2">Jawa Tengah</option>
                                    <option value="3">Jawa Timur</option>
                                </select>
                                <label class=" labelmui">Polda</label>
                            </div>
                            <div class="material-textfield">
                                <input type="text" name="namaPPolres" id="namaPolres">
                                <label for="" class="labelmui">Nama Polres</label>
                            </div>
							<div class="material-textfield">
                                <input type="text" name="kodeSatpas" id="kodeSatpas">
                                <label for="" class="labelmui">Kode Satpas</label>
                            </div>

                        </div>
                        <div class="col-md-12 mt-2">
                            <div class="material-textfield">
                                <input type="text" name="alamatPolres" id="alamatPolres">
                                <label for="" class="labelmui">Alamat</label>
                            </div>

                        </div>
						<div class="row">
							<div class="col-md-6">
								<div class="material-textfield">
									<input type="text" name="latitude" id="latitude">
									<label for="" class="labelmui">Latitude</label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="material-textfield">
									<input type="text" name="longitude" id="longitude">
									<label for="" class="labelmui">Longitude</label>
								</div>
							</div>
							
						</div>
                    </div>
                    <div class="mb-3 rounded" style="height: 22vh; ;" id="mapG20Dashboard"></div>


                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary waves-effect float-end" style="width: 25%; letter-spacing: 2px;">SIMPAN</button>
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
                    <div class="row">
                        <!-- <div class="col-md-3">
                            <p class="fw-bold fs-5">Icon Polres</p>
                            <input type="file" name="photo" class="dropify rounded" data-allowed-file-extensions="jpg png jpeg" data-default-file="<?php echo base_url(); ?>assets/no_image.png" />
                        </div> -->
                        <div class="col-md-12">
                            <div class="material-selectfield mb-3">
                                <select name="namaPolda" id="namaPolda">
                                    <!-- <select name="" id=""  multiple required> -->
                                    <option value="1">Jawa Barat</option>
                                    <option value="2">Jawa Tengah</option>
                                    <option value="3">Jawa Timur</option>
                                </select>
                                <label class=" labelmui">Polda</label>
                            </div>
                            <div class="material-textfield">
                                <input type="text" name="namaPPolres" id="namaPolres">
                                <label for="" class="labelmui">Nama Polres</label>
                            </div>
							<div class="material-textfield">
                                <input type="text" name="kodeSatpas" id="kodeSatpas">
                                <label for="" class="labelmui">Kode Satpas</label>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="material-textfield">
                                <label for="alamatPolres">Alamat</label>
                                <textarea type="text" name="alamatPolres" id="alamatPolres" style="width:100%; height:100%;"></textarea>
                            </div>

                        </div>
						<div class="row">
							<div class="col-md-6">
								<div class="material-textfield">
									<input type="text" name="latitude" id="latitude">
									<label for="" class="labelmui">latitude</label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="material-textfield">
									<input type="text" name="longitude" id="longitude">
									<label for="" class="labelmui">Longitude</label>
								</div>
							</div>
							
						</div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary waves-effect float-end" style="width: 25%; letter-spacing: 2px;">SIMPAN</button>
                    </div>
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
            $('[name=alamatPolres]').on("change", function (e) {
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
                            $('[name=alamatPolres]').val($(this).data('alamat'));
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
                    $('[name=alamatPolres]').val(data['display_name']); 
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

                    $('[name=alamatPolres]').val(data['display_name']); 

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
					data: 'polda_id'
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

    function detail(id) {
        $.ajax({
            url: '<?= base_url() ?>masterdata/Polres/detailPolres/',
            type: 'POST',
            data: {
                id_polres: id
            },
            dataType: 'JSON',
            success: function(results) {
                $('.DetailPolres,input').attr('readonly', true)
                $('.DetailPolres,input,#namaPolda').attr('disabled', true)
                $('.DetailPolres,input,#alamatPolres').attr('disabled', true)
                $('.DetailPolres,#namaPolda').val(results.id_polda)
                $('.DetailPolres,#namaPolres').val(results.name_polres)
                $('.DetailPolres,#kodeSatpas').val(results.code_satpas)
                $('.DetailPolres,#alamatPolres').val(results.address)
                $('.DetailPolres,#latitude').val(results.latitude)
                $('.DetailPolres,#longitude').val(results.longitude)
                
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
                $('.UbahPolres,input').attr('readonly', false)
                // $('.UbahPolres,input,#category').attr('disabled', false)
                $('#id_polres').val(results.id)
                $('.UbahPolres,#namaPolda').val(results.id_polda)
                $('.UbahPolres,#namaPolres').val(results.name_polres)
                $('.UbahPolres,#kodeSatpas').val(results.code_satpas)
                $('.UbahPolres,#alamatPolres').val(results.address)
                $('.UbahPolres,#latitude').val(results.latitude)
                $('.UbahPolres,#longitude').val(results.longitude)
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
	
</script>
