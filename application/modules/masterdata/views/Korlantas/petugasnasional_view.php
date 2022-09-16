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
    <button type="button" class="btn btn-primary waves-effect mb-2" data-bs-toggle="modal" data-bs-target=".TambahPetugas">Tambah Petugas</button>
    <div class="card">

        <div class="card-body">

            <table id="datatable" class="table dt-responsive w-100">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NRP</th>
                        <th>Nama Petugas</th>
                        <th>Status</th>
                        <th>No. Handphone</th>
                        <th>Pangkat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                
            </table>

        </div>
    </div>
</div>
<!-- End Page -->


<div class="modal fade TambahPetugas" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Tambah Petugas</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
			<form action="" class="form" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-3" style="margin-top:1vh">
                            <input type="file" name="photo" id="" class="dropify rounded" data-allowed-file-extensions="jpg png jpeg" data-default-file="<?php echo base_url(); ?>assets/no_image.png" />
                        </div>
                        <div class="col-md-9">
							<div class="material-textfield">
								<input type="text" name="nrpPetugas" id="" style=" width:105%; margin-bottom:-2vh">
								<label for="" class="labelmui">NRP</label>
							</div>
                            <div class="material-textfield">
                                <input type="text" name="namaPetugas" id="" style="width:105%; margin-bottom:-2vh">
                                <label for="" class="labelmui">Nama Petugas</label>
                            </div>

                            <!-- <div class="row mb-4">
                                <div class="material-textfield">
                                    <input type="hidden" name="" id="">
                                    <label for="" class="labelmui">Jenis Kelamin</label>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check" style="margin: -1vh 0 0 2.7vh">
                                        <input class="form-check-input" type="radio" name="jk" id="laki-laki" checked>
                                        <label class="form-check-label" for="laki-laki">
                                            Laki - laki
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3 ">
                                    <div class="form-check" style="margin: -1vh 0 0 2.7vh">
                                        <input class="form-check-input" type="radio" name="jk" id="perempuan">
                                        <label class="form-check-label" for="perempuan">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="material-textfield">
                                <input type="date" name="" id="" style="width:105%; margin-bottom:-2vh">
                                <label for="" class="labelmui">Tanggal Lahir</label>
                            </div> -->
                            <div class="material-textfield">
                                <input type="text" name="noHP" id="noHP" style="width:105%; margin-bottom:-2vh">
                                <label for="" class="labelmui">No. Handphone</label>
                            </div>
                            <div class="material-textfield">
                                <input type="text" name="pangkat" id="pangkat" style="width:105%; margin-bottom:-2vh">
                                <label for="" class="labelmui">Pangkat</label>
                            </div>
                            <div class="material-textfield">
                                <input type="text" name="pamPetugas" id="pamPetugas" style="width:105%; margin-bottom:-2vh">
                                <label for="" class="labelmui">PAM Petugas</label>
                            </div>
                            <div class="material-textfield">
                                <input type="text" name="struktural" id="struktural" style="width:105%; margin-bottom:-2vh">
                                <label for="" class="labelmui">Struktural</label>
                            </div>
                            <div class="row mb-3">
                                <div class="material-textfield">
                                    <input type="hidden" name="status" id="status">
                                    <label for="" class="labelmui">Status</label>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check" style="margin: -1vh 0 0 2.7vh">
                                        <input class=" form-check-input" type="radio" name="flexRadioDefault" id="active" checked>
                                        <label class="form-check-label" for="active">
                                            ACTIVE
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check" style="margin: -1vh 0 0 2.7vh"">
                                        <input class=" form-check-input" type="radio" name="flexRadioDefault" id="inactive">
                                        <label class="form-check-label" for="inactive">
                                            INACTIVE
                                        </label>
                                    </div>
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

<div class="modal fade UbahPetugas" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Edit Petugas</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
			<form action="" class="form" id="form_edit" method="post" enctype="multipart/form-data">
			<input type="hidden" name="id" value="" id="id_petugas" type="text">
				<div class="row">
                        <div class="col-md-3" style="margin-top:1vh">
                            <input type="file" name="photo" id="photo" class="dropify rounded" data-allowed-file-extensions="jpg png jpeg" data-default-file="<?php echo base_url(); ?>assets/no_image.png" />
                        </div>
                        <div class="col-md-9">
							<div class="material-textfield">
								<input type="text" name="nrpPetugas" id="nrpPetugas" style=" width:105%; margin-bottom:-2vh">
								<label for="" class="labelmui">NRP</label>
							</div>
                            <div class="material-textfield">
                                <input type="text" name="namaPetugas" id="namaPetugas" style="width:105%; margin-bottom:-2vh">
                                <label for="" class="labelmui">Nama Petugas</label>
                            </div>

                            <!-- <div class="row mb-4">
                                <div class="material-textfield">
                                    <input type="hidden" name="" id="">
                                    <label for="" class="labelmui">Jenis Kelamin</label>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check" style="margin: -1vh 0 0 2.7vh">
                                        <input class="form-check-input" type="radio" name="jk" id="laki-laki" checked>
                                        <label class="form-check-label" for="laki-laki">
                                            Laki - laki
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3 ">
                                    <div class="form-check" style="margin: -1vh 0 0 2.7vh">
                                        <input class="form-check-input" type="radio" name="jk" id="perempuan">
                                        <label class="form-check-label" for="perempuan">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="material-textfield">
                                <input type="date" name="" id="" style="width:105%; margin-bottom:-2vh">
                                <label for="" class="labelmui">Tanggal Lahir</label>
                            </div> -->
                            <div class="material-textfield">
                                <input type="text" name="noHP" id="noHP" style="width:105%; margin-bottom:-2vh">
                                <label for="" class="labelmui">No. Handphone</label>
                            </div>
                            <div class="material-textfield">
                                <input type="text" name="pangkat" id="pangkat" style="width:105%; margin-bottom:-2vh">
                                <label for="" class="labelmui">Pangkat</label>
                            </div>
							<div class="material-textfield">
                                <input type="text" name="pamPetugas" id="pamPetugas" style="width:105%; margin-bottom:-2vh">
                                <label for="" class="labelmui">PAM Petugas</label>
                            </div>
                            <div class="material-textfield">
                                <input type="text" name="struktural" id="struktural" style="width:105%; margin-bottom:-2vh">
                                <label for="" class="labelmui">Struktural</label>
                            </div>
                            <div class="row mb-3">
                                <div class="material-textfield">
                                    <input type="hidden" name="status" id="status">
                                    <label for="" class="labelmui">Status</label>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check" style="margin: -1vh 0 0 2.7vh">
                                        <input class=" form-check-input" type="radio" name="flexRadioDefault" id="active" checked>
                                        <label class="form-check-label" for="active">
                                            ACTIVE
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check" style="margin: -1vh 0 0 2.7vh"">
                                        <input class=" form-check-input" type="radio" name="flexRadioDefault" id="inactive">
                                        <label class="form-check-label" for="inactive">
                                            INACTIVE
                                        </label>
                                    </div>
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


<div class="modal fade DetailPetugas" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Detail Petugas</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="form">
				<div class="row">
                        <div class="col-md-3" style="margin-top:1vh">
                            <input type="file" name="photo" id="photo" class="dropify rounded" data-allowed-file-extensions="jpg png jpeg" data-default-file="<?php echo base_url(); ?>assets/no_image.png" />
                        </div>
                        <div class="col-md-9">
							<div class="material-textfield">
								<input type="text" name="nrpPetugas" id="nrpPetugas" style=" width:105%; margin-bottom:-2vh">
								<label for="" class="labelmui">NRP</label>
							</div>
                            <div class="material-textfield">
                                <input type="text" name="namaPetugas" id="namaPetugas" style="width:105%; margin-bottom:-2vh">
                                <label for="" class="labelmui">Nama Petugas</label>
                            </div>

                            <!-- <div class="row mb-4">
                                <div class="material-textfield">
                                    <input type="hidden" name="" id="">
                                    <label for="" class="labelmui">Jenis Kelamin</label>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check" style="margin: -1vh 0 0 2.7vh">
                                        <input class="form-check-input" type="radio" name="jk" id="laki-laki" checked>
                                        <label class="form-check-label" for="laki-laki">
                                            Laki - laki
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3 ">
                                    <div class="form-check" style="margin: -1vh 0 0 2.7vh">
                                        <input class="form-check-input" type="radio" name="jk" id="perempuan">
                                        <label class="form-check-label" for="perempuan">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="material-textfield">
                                <input type="date" name="" id="" style="width:105%; margin-bottom:-2vh">
                                <label for="" class="labelmui">Tanggal Lahir</label>
                            </div> -->
                            <div class="material-textfield">
                                <input type="text" name="noHP" id="noHP" style="width:105%; margin-bottom:-2vh">
                                <label for="" class="labelmui">No. Handphone</label>
                            </div>
                            <div class="material-textfield">
                                <input type="text" name="pangkat" id="pangkat" style="width:105%; margin-bottom:-2vh">
                                <label for="" class="labelmui">Pangkat</label>
                            </div>
							<div class="material-textfield">
                                <input type="text" name="pamPetugas" id="pamPetugas" style="width:105%; margin-bottom:-2vh">
                                <label for="" class="labelmui">PAM Petugas</label>
                            </div>
                            <div class="material-textfield">
                                <input type="text" name="struktural" id="struktural" style="width:105%; margin-bottom:-2vh">
                                <label for="" class="labelmui">Struktural</label>
                            </div>
                            <div class="row mb-3">
                                <div class="material-textfield">
                                    <input type="hidden" name="status" id="status">
                                    <label for="" class="labelmui">Status</label>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check" style="margin: -1vh 0 0 2.7vh">
                                        <input class=" form-check-input" type="radio" name="flexRadioDefault" id="active" checked>
                                        <label class="form-check-label" for="active">
                                            ACTIVE
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check" style="margin: -1vh 0 0 2.7vh"">
                                        <input class=" form-check-input" type="radio" name="flexRadioDefault" id="inactive">
                                        <label class="form-check-label" for="inactive">
                                            INACTIVE
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <button type="button" class="btn btn-primary waves-effect float-end" data-bs-dismiss="modal" aria-label="Close" style="width: 25%; letter-spacing: 2px;">KEMBALI</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<script>
    $(document).ready(function() {
        $('.dropify').dropify();

        
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

                url: '<?php echo base_url(); ?>masterdata/Petugasnasional/serverSideTable',

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
                    data: 'nrp_officer'
                },
                {
                    data: 'name_officer'
                },
                {
					data: 'phone_officer'
                },
				{
					data: 'rank_officer'
                },
				{
					data: 'status_officer'
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
                url: "<?php echo base_url(); ?>masterdata/Petugasnasional/store",
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
                            $(".TambahPetugasnasional").modal('hide');
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
            url: '<?= base_url() ?>masterdata/Petugasnasional/detailPetugas/',
            type: 'POST',
            data: {
                id_petugas: id
            },
            dataType: 'JSON',
            success: function(results) {
                $('.DetailPetugasnasional,input').attr('readonly', true)
                // $('.DetailPetugasnasional,input,#category').attr('disabled', true)
                $('.DetailPetugasnasional,#nrpPetugas').val(results.nrp_officer)
                $('.DetailPetugasnasional,#namaPetugas').val(results.name_officer)
                $('.DetailPetugasnasional,#noHP').val(results.phone_officer)
                $('.DetailPetugasnasional,#pangkat').val(results.rank_officer)
                $('.DetailPetugasnasional,#pamPetugas').val(results.pam_officer)
                $('.DetailPetugasnasional,#struktural').val(results.structural_officer)
                $('.DetailPetugasnasional,#status').val(results.status_officer)
                
            }
        })
    }

    function detailEdit(id) {
        $.ajax({
            url: '<?= base_url() ?>masterdata/Petugasnasional/detailPetugas/',
            type: 'POST',
            data: {
                id_petugas: id
            },
            dataType: 'JSON',
            success: function(results) {
                $('.UbahPetugasnasional,input').attr('readonly', false)
                // $('.UbahPetugasnasional,input,#category').attr('disabled', false)
                $('#id_petugas').val(results.id)
                $('.DetailPetugasnasional,#nrpPetugas').val(results.nrp_officer)
                $('.DetailPetugasnasional,#namaPetugas').val(results.name_petugas)
                $('.DetailPetugasnasional,#noHP').val(results.phone_officer)
                $('.DetailPetugasnasional,#pangkat').val(results.rank_officer)
				$('.DetailPetugasnasional,#pamPetugas').val(results.pam_officer)
                $('.DetailPetugasnasional,#struktural').val(results.structural_officer)
                $('.DetailPetugasnasional,#status').val(results.status_officer)
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
                    url: "<?php echo base_url(); ?>masterdata/Petugasnasional/hapusPetugas/",
                    type: "POST",
                    data: {
                        id_petugas: id
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
                                $(".TambahPetugas").modal('hide');
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
            url: '<?= base_url() ?>masterdata/Petugasnasional/updatepetugas',
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
                        $(".UbahPetugasnasional").modal('hide');
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
