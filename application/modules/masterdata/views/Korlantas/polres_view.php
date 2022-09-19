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


<div class="modal fade TambahPolres" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Tambah Polres</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
			<form action="" class="form" method="post" enctype="multipart/form-data">
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
                                <input type="text" name="namaPolres" id="namaPolres">
                                <label for="" class="labelmui">Nama Polres</label>
                            </div>
							<div class="material-textfield">
                                <input type="text" name="kodeSatpas" id="kodeSatpas">
                                <label for="" class="labelmui">Kode Satpas</label>
                            </div>

                        </div>
                        <div class="col-md-12 mt-2">
                            <div class="material-textfield">
                                <input type="text" name="alamatPolres" id="alamatPolres" style="width:107.3%; margin: 0 0 0 -2.7vh">
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
                                <input type="text" name="alamatPolres" id="alamatPolres" style="width:107.3%; margin: 0 0 0 -2.7vh">
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
                        <div class="col-md-12 mt-2">
                            <div class="material-textfield">
                                <input type="text" name="alamatPolres" id="alamatPolres" style="width:107.3%; margin: 0 0 0 -2.7vh">
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

        // $('#datatable').DataTable();
        var initialCenter = [-2.548926, 118.0148634];
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
        var mapContainer = L.map('mapG20Dashboard', {
            maxZoom: 19,
            minZoom: 1,
            zoomControl: false,
            layers: [googleStreet]
        }).setView(initialCenter, initialZoom);

        var markerClusterGroup = L.markerClusterGroup();
        var icon = L.icon({
            iconUrl: 'http://tourbanyuwangi.com/wp-content/uploads/2018/05/map.png',
            iconSize: [80, 80], // size of the icon
        });

        var arrayData = $.grep(data, function(element, index) {
            return element.coordinate != null && element.coordinate != '';
        });
        // console.log(arrayData); 

        for (let i = 0; i < arrayData.length; i++) {
            var cordinate = arrayData[i].coordinate;
            var latlong = cordinate.split(',');
            var latitude = parseFloat(latlong[0]);
            var longitude = parseFloat(latlong[1]);
            // console.log({a:latitude , b:longitude});

            markerClusterGroup.addLayer(
                L.marker([latitude, longitude], {
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




    });

    $(document).ready(function() {
        $('.dropify').dropify();

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
                // $('.DetailPolres,input,#category').attr('disabled', true)
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
