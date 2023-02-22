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
    <button type="button" class="btn btn-primary waves-effect mb-2" id="btnTambah" data-bs-toggle="modal" data-bs-target=".TambahPolda">Tambah Polda</button>
    <div class="card">

        <div class="card-body">

            <table id="datatable" class="table dt-responsive w-100">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Polda</th>
                        <!-- <th>Kode Satpas</th> -->
                        <th width="40%">Alamat</th>
                        <th>No. Telepon Polda</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>

        </div>
    </div>
</div>
<!-- End Page -->


<div class="modal fade TambahPolda" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Tambah Polda</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="form" id="form_tambah" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="<?= $csrf_name; ?>" value="<?= $csrf_token; ?>" style="display: none">
                    <div class="col-md-12 mb-3">
                        <input type="file" name="photo" class="dropify" data-allowed-file-extensions="jpg png jpeg" />
                    </div>
                    <div class="row">
                        <!-- <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" placeholder="kode" name="kodeSatpas">
                                <label for="kode">Kode Satpas</label>
                            </div>
                        </div> -->
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" placeholder="nama" name="namaPolda">
                                <label for="nama">Nama Polda</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <textarea class="form-control" style="height: 100px" placeholder="Alamat" name="address"></textarea>
                            <label for="alamat">Alamat</label>
                        </div>
                        <div class="list-group" id="listAddress"></div>
                    </div>
                    <div class="col-md-6" style="display: none;">
                        <div class="form-floating mb-3">
                            <input style="width: 100%;" class="form-control" name="cordinate" placeholder="" type="text">
                            <label for="">Coordinate</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="latitude">
                                <label for="latitude">Latitude</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="longitude">
                                <label for="longitude">Longitude</label>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 mt-1">
                        <div id="mapG20Kegiatan" style="height: 400px">
                            <img src="<?php echo base_url(); ?>assets/pin.png" width="80" height="80" style="position: relative;z-index: 1000;left: 43%;top: 37%;">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="time" class="form-control" name="open_time">
                                <label for="jambuka">Jam Buka</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="time" class="form-control" name="close_time">
                                <label for="jamtutup">Jam Tutup</label>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="nomor" id="facebook" name="facebook">
                            <label for="">Facebook Polda</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="youtube" placeholder="nomor" name="youtube">
                            <label for="">Youtube Polda</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="link_playlist" placeholder="nomor" name="link_playlist">
                            <label for="">Link Playlist</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="link_CCTV" placeholder="nomor" name="link_CCTV">
                            <label for="">Link CCTV</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="nomor" id="twitter" name="twitter">
                            <label for="">Twitter Polda</label>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="nomor" id="instagram" name="instagram">
                            <label for="">Instagram Polda</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="nomor" name="phone_polda">
                            <label for="">Nomor Telepon Polda</label>
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

<div class="modal fade UbahPolda" id="myModalEdit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Edit Polda</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="form" id="form_edit" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="<?= $csrf_name; ?>" value="<?= $csrf_token; ?>" style="display: none">
                    <input type="hidden" name="id" value="" id="id_polda" type="text">
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <img src="" alt="logo_polda" id="logo" width="150px">
                        </div>
                        <div class="col-md-9">
                            <div class="col-md-12 mb-3">
                                <input type="file" name="photo" id="photo" class="dropify" data-allowed-file-extensions="jpg png jpeg" data-default-file="Logo-Polda" />
                            </div>
                            <!-- <div class="col-md-12">
						<div class="form-floating mb-3">
							<input type="file" class="form-control" id="photo" placeholder="photo" name="photo">
							<label for="photo">Logo Polda</label>
						</div>
					</div> -->
                            <div class="row">
                                <!-- <div class="col-md-12">
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="kodeSatpas" placeholder="kode" name="kodeSatpas">
							<label for="kode">Kode Satpas</label>
						</div>
					</div> -->
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="namaPolda" name="namaPolda" placeholder="nama">
                                        <label for="">Nama Polda</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" placeholder="nama" name="kodeSatpas">
                                        <label for="nama">Kode Satpas</label>
                                    </div>
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
                                    <img src="<?php echo base_url(); ?>assets/pin.png" width="80" height="80" style="position: relative;z-index: 1000;left: 43%;top: 37%;">
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
                                    <input type="text" class="form-control" placeholder="nomor" id="facebook" name="facebook">
                                    <label for="">Facebook Polda</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" placeholder="nomor" id="youtube" name="youtube">
                                    <label for="">Youtube Polda</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="link_playlist" placeholder="nomor" name="link_playlist">
                                    <label for="">Link Playlist</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="link_cctv" placeholder="nomor" name="link_cctv">
                                    <label for="">Link CCTV</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" placeholder="nomor" id="twitter" name="twitter">
                                    <label for="">Twitter Polda</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" placeholder="nomor" id="instagram" name="instagram">
                                    <label for="">Instagram Polda</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="phone_polda" placeholder="nomor" name="phone_polda">
                                    <label for="">Nomor Telepon Polda</label>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <button type="submit" id="btn_edit" class="btn btn-primary waves-effect float-end" style="width: 25%; letter-spacing: 2px;">SIMPAN</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade DetailPolda" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Detail Polda</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="form">
                    <div class="row">
                        <div class="col-md-3 mb-3 text-center">
                            <!-- <input type="file" name="photo" id="photo" class="dropify" data-allowed-file-extensions="jpg png jpeg" /> -->
                            <img src="" alt="logo_polda" id="logo" width="150px">
                        </div>
                        <div class="col-md-9">
                            <div class="row">
                                <!-- <div class="col-md-12">
									<div class="form-floating mb-3">
										<input type="text" class="form-control" id="kodeSatpas" placeholder="kode" name="kodeSatpas">
										<label for="kode">Kode Satpas</label>
									</div>
								</div> -->
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="namaPolda" placeholder="nama">
                                        <label for="">Nama Polda</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" style="height: 100px" id="address" placeholder="Alamat" name="address"></textarea>
                                    <label for="alamat">Alamat</label>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" id="latitude" class="form-control" name="latitude">
                                        <label for="latitude">Latitude</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" id="longitude" class="form-control" name="longitude">
                                        <label for="longitude">Longitude</label>
                                    </div>
                                </div>

                            </div>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="time" id="open_time" class="form-control" name="open_time">
                                        <label for="jambuka">Jam Buka</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="time" id="close_time" class="form-control" name="close_time">
                                        <label for="jamtutup">Jam Tutup</label>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="phone_polda" placeholder="nomor" name="phone_polda">
                                    <label for="">Nomor Telepon Polda</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" placeholder="nomor" id="facebook" name="facebook">
                                    <label for="">Facebook Polda</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" placeholder="nomor" id="youtube" name="youtube">
                                    <label for="">Youtube Polda</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="link_playlist" placeholder="nomor" name="link_playlist">
                                    <label for="">Link Playlist</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="link_cctv" placeholder="nomor" name="link_cctv">
                                    <label for="">Link CCTV</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" placeholder="nomor" id="twitter" name="twitter">
                                    <label for="">Twitter Polda</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" placeholder="nomor" id="instagram" name="instagram">
                                    <label for="">Instagram Polda</label>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- <div class="col-md-12">
							<div class="form-floating mb-3">
								<input type="file" class="form-control" id="photo" placeholder="photo" name="photo">
								<label for="photo">Logo Polda</label>
							</div>
						</div> -->
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
            $('[name=address]').on("change", function(e) {
                // console.log(this.value);
                $.get(`https://nominatim.openstreetmap.org/search?format=json&q=${this.value}`, function(ress) {
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

                    if (list == "") {
                        countlist = 0;
                        list = "";
                        $('#listAddress').html(list);
                    }


                    for (let i = 0; i < ress.length; i++) {
                        $(`#list${i+1}`).click(function() {
                            var latlong = $(this).data('cords').split(',');
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


            $('[name=cordinate]').on("change", function(e) {

                var cordLatLong = this.value.split(',');
                var cordLat = parseFloat(cordLatLong[0]);
                var corLong = parseFloat(cordLatLong[1]);

                // console.log({a:cordLat, b:corLong});

                $.get(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${cordLat}&lon=${corLong}`, function(data) {
                    $('[name=address]').val(data['display_name']);
                    mapContainer.flyTo([cordLat, corLong], 17);
                });
            });


            mapContainer.on("dragend", function(e) {

                var corLat = mapContainer.getCenter()['lat'];
                var corLng = mapContainer.getCenter()['lng'];
                var cord = `${corLat},${corLng}`;

                $("[name=latitude]").val(corLat);
                $("[name=longitude]").val(corLng);
                $('[name=cordinate]').val(cord);

                $.get(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${corLat}&lon=${corLng}`, function(data) {

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

                url: '<?php echo base_url(); ?>masterdata/Polda/serverSideTable',

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
                // {
                //     data: 'code_satpas'
                // },
                {
                    data: 'address'
                },
                {
                    data: 'phone_polda'
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
                url: "<?php echo base_url(); ?>masterdata/Polda/store",
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
                            $(".TambahPolda").modal('hide');
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
        var initialCenter = [-0.8458708, 118.8661073];
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
            $('[name=address]').on("change", function(e) {
                // console.log(this.value);
                $.get(`https://nominatim.openstreetmap.org/search?format=json&q=${this.value}`, function(ress) {
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

                    if (list == "") {
                        countlist = 0;
                        list = "";
                        $('#listAddress').html(list);
                    }


                    for (let i = 0; i < ress.length; i++) {
                        $(`#list${i+1}`).click(function() {
                            var latlong = $(this).data('cords').split(',');
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


            $('[name=cordinate]').on("change", function(e) {

                var cordLatLong = this.value.split(',');
                var cordLat = parseFloat(cordLatLong[0]);
                var corLong = parseFloat(cordLatLong[1]);

                // console.log({a:cordLat, b:corLong});

                $.get(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${cordLat}&lon=${corLong}`, function(data) {
                    $('[name=address]').val(data['display_name']);
                    mapContainer.flyTo([cordLat, corLong], 17);
                });
            });


            mapContainer.on("dragend", function(e) {

                var corLat = mapContainer.getCenter()['lat'];
                var corLng = mapContainer.getCenter()['lng'];
                var cord = `${corLat},${corLng}`;

                $("[name=latitude]").val(corLat);
                $("[name=longitude]").val(corLng);
                $('[name=cordinate]').val(cord);

                $.get(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${corLat}&lon=${corLng}`, function(data) {

                    $('[name=address]').val(data['display_name']);

                });

            });


        });

    });

    function detail(id) {
        // console.log("ok");
        $.ajax({
            url: '<?= base_url() ?>masterdata/Polda/detailPolda/',
            type: 'POST',
            data: {
                id_polda: id
            },
            dataType: 'JSON',
            success: function(results) {
                // console.log(results)
                // console.log(`<?= url_api() ?>polda/logo/${results.logo_polda}`)
                $('.DetailPolda,#logo').attr('src', `<?= url_api() ?>polda/logo/${results.logo_polda}`)
                // $('.DetailPolda,#kodeSatpas').attr('disabled', true)
                $('.DetailPolda,#namaPolda').attr('disabled', true)
                $('.DetailPolda,#address').attr('disabled', true)
                $('.DetailPolda,#latitude').attr('disabled', true)
                $('.DetailPolda,#longitude').attr('disabled', true)
                $('.DetailPolda,#open_time').attr('disabled', true)
                $('.DetailPolda,#close_time').attr('disabled', true)
                $('.DetailPolda,#phone_polda').attr('disabled', true)

                $('.DetailPolda,#facebook').attr('disabled', true)
                $('.DetailPolda,#twitter').attr('disabled', true)
                $('.DetailPolda,#youtube').attr('disabled', true)
                $('.DetailPolda,#link_playlist').attr('disabled', true)
                $('.DetailPolda,#link_cctv').attr('disabled', true)
                $('.DetailPolda,#instagram').attr('disabled', true)

                // $('.DetailPolda,#logo').val(results.logo_polda)
                // $('.DetailPolda,#kodeSatpas').val(results.code_satpas)
                $('.DetailPolda,#namaPolda').val(results.name_polda)
                $('.DetailPolda,#address').val(results.address)
                $('.DetailPolda,#latitude').val(results.latitude)
                $('.DetailPolda,#longitude').val(results.longitude)
                $('.DetailPolda,#open_time').val(results.open_time)
                $('.DetailPolda,#close_time').val(results.close_time)
                $('.DetailPolda,#phone_polda').val(results.phone_polda)

                $('.DetailPolda,#facebook').val(results.facebook)
                $('.DetailPolda,#twitter').val(results.twitter)
                $('.DetailPolda,#youtube').val(results.youtube)
                $('.DetailPolda,#link_playlist').val(results.link_playlist)
                $('.DetailPolda,#link_cctv').val(results.link_cctv)
                $('.DetailPolda,#instagram').val(results.instagram)

            }
        })
    }

    function detailEdit(id) {
        $.ajax({
            url: '<?= base_url() ?>masterdata/Polda/detailPolda/',
            type: 'POST',
            data: {
                id_polda: id
            },
            dataType: 'JSON',
            success: function(results) {
                console.log(results)
                console.log(`<?= url_api() ?>polda/logo/${results.logo_polda}`)
                $('.UbahPolda,#logo').attr('src', `<?= url_api() ?>polda/logo/${results.logo_polda}`)
                $('.UbahPolda,#photo').data('default-file', `<?= url_api() ?>polda/logo/${results.logo_polda}`)
                // $('.UbahPolda,#kodeSatpas').attr('disabled', false)
                $('.UbahPolda,#namaPolda').attr('disabled', false)
                $('.UbahPolda,#address').attr('disabled', false)
                $('.UbahPolda,#cordinateEdit').attr('disabled', false)
                $('.UbahPolda,#latitude').attr('disabled', false)
                $('.UbahPolda,#longitude').attr('disabled', false)
                $('.UbahPolda,#open_time').attr('disabled', false)
                $('.UbahPolda,#close_time').attr('disabled', false)
                $('.UbahPolda,#phone_polda').attr('disabled', false)

                $('.UbahPolda,#facebook').attr('disabled', false)
                $('.UbahPolda,#twitter').attr('disabled', false)
                $('.UbahPolda,#youtube').attr('disabled', false)
                $('.UbahPolda,#link_playlist').attr('disabled', false)
                $('.UbahPolda,#link_cctv').attr('disabled', false)
                $('.UbahPolda,#instagram').attr('disabled', false)

                $('#id_polda').val(results.id)

                // $('.UbahPolda,#photo').val(results.logo_polda)
                // $('.UbahPolda,#kodeSatpas').val(results.code_satpas)
                $('.UbahPolda,#namaPolda').val(results.name_polda)
                $('.UbahPolda,#address').val(results.address)
                $('.UbahPolda,#cordinateEdit').val((results.latitude) + ',' + (results.longitude))
                $('.UbahPolda,#latitude').val(results.latitude)
                $('.UbahPolda,#longitude').val(results.longitude)
                $('.UbahPolda,#open_time').val(results.open_time)
                $('.UbahPolda,#close_time').val(results.close_time)
                $('.UbahPolda,#phone_polda').val(results.phone_polda)


                $('.UbahPolda,#facebook').val(results.facebook)
                $('.UbahPolda,#twitter').val(results.twitter)
                $('.UbahPolda,#youtube').val(results.youtube)
                $('.UbahPolda,#link_playlist').val(results.link_playlist)
                $('.UbahPolda,#link_cctv').val(results.link_cctv)
                $('.UbahPolda,#instagram').val(results.instagram)
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
                    url: "<?php echo base_url(); ?>masterdata/Polda/hapusPolda/",
                    type: "POST",
                    data: {
                        id_polda: id
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
                                $(".TambahPolda").modal('hide');
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
            url: '<?= base_url() ?>masterdata/Polda/updatePolda',
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
                        $(".UbahPolda").modal('hide');
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

    $('#btnTambah').on('click', function(e) {
        $('#form_tambah')[0].reset()
    })
    $('#btnEdit').on('click', function(e) {
        $('#form_edit')[0].reset()
    })
</script>