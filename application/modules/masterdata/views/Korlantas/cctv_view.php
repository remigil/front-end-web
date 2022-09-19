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
		<button type="button" class="btn btn-primary waves-effect mb-2" data-bs-toggle="modal" data-bs-target=".TambahCCTV">Tambah CCTV</button>
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
<div class="modal fade TambahCCTV" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="myLargeModalLabel" style="color:white">Tambah CCTV</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
				<form action="" class="form" method="post" enctype="multipart/form-data">
					<div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
								<input type="text" class="form-control" id="tipeCCTV" name="tipeCCTV" placeholder="CCTV">
                                <label for="tipeCCTV">Type CCTV</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
								<input type="text" class="form-control" id="jenisCCTV" name="jenisCCTV" placeholder="CCTV">
                                <label for="jenisCCTV">Jenis CCTV</label>
                            </div>
                        </div>
						<div class="col-md-6">
                            <div class="form-floating mb-3">
								<input type="text" class="form-control" id="ipCCTV" name="ipCCTV" placeholder="CCTV">
                                <label for="ipCCTV">IP CCTV</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
								<input type="text" class="form-control" id="merekCCTV" name="merekCCTV" placeholder="CCTV">
                                <label for="merekCCTV">Merek CCTV</label>
                            </div>
                        </div>
						<div class="col-md-6">
                            <div class="form-floating mb-3">
								<input type="text" class="form-control" id="gatewayCCTV" name="gatewayCCTV" placeholder="CCTV">
                                <label for="gatewayCCTV">Gateway CCTV</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
								<input type="text" class="form-control" id="linkCCTV" name="linkCCTV" placeholder="CCTV">
                                <label for="linkCCTV">Link CCTV</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input name="lokasiCCTV" id="lokasiCCTV" class="form-control" placeholder="Alamat" type="text" required>
                                <label for="address">Lokasi CCTV</label>
                            </div> 
                            <div class="list-group" id="listAddress"></div>
                        </div> 
                        <div class="col-md-6" style="display: none;">
                            <div class="form-floating mb-3">
                            <input style="width: 100%;" name="cordinate" class="form-control" type="text">
                                <label for="cordinate">Coordinate</label>
                            </div>
                        </div>
                        <div class="col-md-12 mt-3 mb-3">
                            <div id="mapG20Dashboard" style="height: 400px">
                                <img src="<?php echo base_url();?>assets/pin.png" width="80" height="80" style="position: relative;z-index: 1000;left: 43%;top: 37%;">
                            </div>
                        </div>
                    </div>
					<div class="row">
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
								<input type="text" class="form-control" id="vmsCCTV" name="vmsCCTV" placeholder="CCTV">
                                <label for="vmsCCTV">VMS CCTV</label>
                            </div>
                        </div>
						<div class="col-md-6">
                            <div class="form-floating mb-3">
								<input type="text" class="form-control" id="username" name="username" placeholder="CCTV">
                                <label for="username">Username</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
								<input type="text" class="form-control" id="password" name="password" placeholder="CCTV">
                                <label for="password">Password</label>
                            </div>
                        </div>
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
                     
                    <button class="btn  btn-primary float-end" type="submit">SIMPAN</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade UbahCCTV" id="" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Edit CCTV</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="form" id="form_edit" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id" value="" id="id_cctv" type="text">
				<div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
								<input type="text" class="form-control" id="tipeCCTV" name="tipeCCTV" placeholder="CCTV">
                                <label for="tipeCCTV">Type CCTV</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
								<input type="text" class="form-control" id="jenisCCTV" name="jenisCCTV" placeholder="CCTV">
                                <label for="jenisCCTV">Jenis CCTV</label>
                            </div>
                        </div>
						<div class="col-md-6">
                            <div class="form-floating mb-3">
								<input type="text" class="form-control" id="ipCCTV" name="ipCCTV" placeholder="CCTV">
                                <label for="ipCCTV">IP CCTV</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
								<input type="text" class="form-control" id="merekCCTV" name="merekCCTV" placeholder="CCTV">
                                <label for="merekCCTV">Merek CCTV</label>
                            </div>
                        </div>
						<div class="col-md-6">
                            <div class="form-floating mb-3">
								<input type="text" class="form-control" id="gatewayCCTV" name="gatewayCCTV" placeholder="CCTV">
                                <label for="gatewayCCTV">Gateway CCTV</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
								<input type="text" class="form-control" id="linkCCTV" name="linkCCTV" placeholder="CCTV">
                                <label for="linkCCTV">Link CCTV</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input name="lokasiCCTV" id="lokasiCCTV" class="form-control" placeholder="Alamat" type="text" required>
                                <label for="address">Lokasi CCTV</label>
                            </div> 
                            <div class="list-group" id="listAddress"></div>
                        </div> 
                        <div class="col-md-6" style="display: none;">
                            <div class="form-floating mb-3">
                            <input style="width: 100%;" name="cordinate" class="form-control" type="text">
                                <label for="cordinate">Coordinate</label>
                            </div>
                        </div>
                        <div class="col-md-12 mt-3 mb-3">
                            <div id="mapG20Dashboard" style="height: 400px">
                                <img src="<?php echo base_url();?>assets/pin.png" width="80" height="80" style="position: relative;z-index: 1000;left: 43%;top: 37%;">
                            </div>
                        </div>
                    </div>
					<div class="row">
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
								<input type="text" class="form-control" id="vmsCCTV" name="vmsCCTV" placeholder="CCTV">
                                <label for="vmsCCTV">VMS CCTV</label>
                            </div>
                        </div>
						<div class="col-md-6">
                            <div class="form-floating mb-3">
								<input type="text" class="form-control" id="username" name="username" placeholder="CCTV">
                                <label for="username">Username</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
								<input type="text" class="form-control" id="password" name="password" placeholder="CCTV">
                                <label for="password">Password</label>
                            </div>
                        </div>
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

					<button class="btn  btn-primary float-end" type="submit">SIMPAN</button>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Detail Modals -->
<div class="modal fade DetailCCTV" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="myLargeModalLabel" style="color:white">Detail Akun</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
				<div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
								<input type="text" class="form-control" id="tipeCCTV" name="tipeCCTV" placeholder="CCTV">
                                <label for="tipeCCTV">Type CCTV</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
								<input type="text" class="form-control" id="jenisCCTV" name="jenisCCTV" placeholder="CCTV">
                                <label for="jenisCCTV">Jenis CCTV</label>
                            </div>
                        </div>
						<div class="col-md-6">
                            <div class="form-floating mb-3">
								<input type="text" class="form-control" id="ipCCTV" name="ipCCTV" placeholder="CCTV">
                                <label for="ipCCTV">IP CCTV</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
								<input type="text" class="form-control" id="merekCCTV" name="merekCCTV" placeholder="CCTV">
                                <label for="merekCCTV">Merek CCTV</label>
                            </div>
                        </div>
						<div class="col-md-6">
                            <div class="form-floating mb-3">
								<input type="text" class="form-control" id="gatewayCCTV" name="gatewayCCTV" placeholder="CCTV">
                                <label for="gatewayCCTV">Gateway CCTV</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
								<input type="text" class="form-control" id="linkCCTV" name="linkCCTV" placeholder="CCTV">
                                <label for="linkCCTV">Link CCTV</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input name="lokasiCCTV" id="lokasiCCTV" class="form-control" placeholder="Alamat" type="text" required>
                                <label for="address">Lokasi CCTV</label>
                            </div> 
                            <div class="list-group" id="listAddress"></div>
                        </div> 
                        
                    </div>
					<div class="row">
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
								<input type="text" class="form-control" id="vmsCCTV" name="vmsCCTV" placeholder="CCTV">
                                <label for="vmsCCTV">VMS CCTV</label>
                            </div>
                        </div>
						<div class="col-md-6">
                            <div class="form-floating mb-3">
								<input type="text" class="form-control" id="username" name="username" placeholder="CCTV">
                                <label for="username">Username</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
								<input type="text" class="form-control" id="password" name="password" placeholder="CCTV">
                                <label for="password">Password</label>
                            </div>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>



<script>
    $(document).ready(function() { 

        var userDataTable = $('#datatable').DataTable({

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

                url: '<?php echo base_url(); ?>masterdata/Cctv/serverSideTable',

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

        $(".form").submit(function(e) {
            $("#overlay").fadeIn(300);
            e.preventDefault();
            var formData = new FormData($('.form')[0]);
            $.ajax({
                url: "<?php echo base_url(); ?>masterdata/Cctv/store",
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
                            $(".TambahCCTV").modal('hide');
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
            url: '<?= base_url() ?>masterdata/Cctv/detailCCTV/',
            type: 'POST',
            data: {
                id_cctv: id
            },
            dataType: 'JSON',
            success: function(results) {
                $('.DetailCCTV,input').attr('readonly', true)
                // $('.DetailCCTV,input,#category').attr('disabled', true)
                $('.DetailCCTV,#tipeCCTV').val(results.type_cctv)
                $('.DetailCCTV,#jenisCCTV').val(results.jenis_cctv)
                $('.DetailCCTV,#ipCCTV').val(results.ip_cctv)
                $('.DetailCCTV,#merekCCTV').val(results.merek_cctv)
                $('.DetailCCTV,#gatewayCCTV').val(results.gateway_cctv)
                $('.DetailCCTV,#linkCCTV').val(results.link_cctv)
                $('.DetailCCTV,#lokasiCCTV').val(results.address_cctv)
                $('.DetailCCTV,#vmsCCTV').val(results.vms_cctv)
                $('.DetailCCTV,#username').val(results.username_cctv)
                $('.DetailCCTV,#password').val(results.password)
                $('.DetailCCTV,#status').val(results.status_cctv)
            }
        })
    }

    function detailEdit(id) {
        $.ajax({
            url: '<?= base_url() ?>mastedata/Cctv/detailCCTV/',
            type: 'POST',
            data: {
                id_cctv: id
            },
            dataType: 'JSON',
            success: function(results) {
                $('.UbahCCTV,input').attr('readonly', false)
                // $('.DetailCCTV,input,#category').attr('disabled', true)
                $('#id_cctv').val(results.id)
                $('.DetailCCTV,#tipeCCTV').val(results.type_cctv)
                $('.DetailCCTV,#jenisCCTV').val(results.jenis_cctv)
                $('.DetailCCTV,#ipCCTV').val(results.ip_cctv)
                $('.DetailCCTV,#merekCCTV').val(results.merek_cctv)
                $('.DetailCCTV,#gatewayCCTV').val(results.gateway_cctv)
                $('.DetailCCTV,#linkCCTV').val(results.link_cctv)
                $('.DetailCCTV,#lokasiCCTV').val(results.address_cctv)
                $('.DetailCCTV,#vmsCCTV').val(results.vms_cctv)
                $('.DetailCCTV,#username').val(results.username_cctv)
                $('.DetailCCTV,#password').val(results.password_cctv)
				$('.DetailCCTV,#status').val(results.status_cctv)
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
                    url: "<?php echo base_url(); ?>masterdata/Cctv/hapusCCTV/",
                    type: "POST",
                    data: {
                        id_cctv: id
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
                                $(".TambahCCTV").modal('hide');
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
