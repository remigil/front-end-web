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
    <button type="button" class="btn btn-primary waves-effect mb-2" id="btnTambah" data-bs-toggle="modal" data-bs-target=".TambahPolda">Tambah Stackholder</button>
    <div class="card">

        <div class="card-body">

            <table id="datatable" class="table dt-responsive w-100">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Stackholder</th>
                        <!-- <th>Kode Satpas</th> -->
                        <th width="40%">Alamat</th>
                        <th>No. Telp</th>
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
                <h5 class="modal-title text-white" id="myLargeModalLabel">Tambah Stackholder</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="form" id="form_tambah" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="<?= $csrf_name; ?>" value="<?= $csrf_token; ?>" style="display: none">
                    <div class="col-md-12 mb-3">
                        <input type="file" name="photo" class="dropify" data-allowed-file-extensions="jpg png jpeg" />
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" placeholder="nama" name="namaStackholder">
                                <label for="nama">Nama Stackholder</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" placeholder="nama" name="fullname">
                                <label for="nama">Fullname Stackholder</label>
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
                        <div class="col-md-4">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="no_telp">
                                <label for="no_telp">No Telp</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="call_center">
                                <label for="call_center">Call Center</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="fax">
                                <label for="fax">Fax</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="nomor" name="email">
                            <label for="">Email</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="nomor" name="facebook">
                            <label for="">Facebook</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="nomor" name="youtube">
                            <label for="">Youtube</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="nomor" name="link_playlist">
                            <label for="">Link Playlist Youtube</label>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="nomor" name="twitter">
                            <label for="">Twitter</label>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="nomor" name="instagram">
                            <label for="">Instagram</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="nomor" name="url">
                            <label for="">website</label>
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
                <h5 class="modal-title text-white" id="myLargeModalLabel">Edit Stackholder</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="form" id="form_edit" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="<?= $csrf_name; ?>" value="<?= $csrf_token; ?>" style="display: none">
                    <input type="hidden" name="id_stackholder" value="" id="id_stackholder" type="text">
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <img src="" alt="logo_polda" id="logo" width="150px">
                        </div>
                        <div class="col-md-9">
                            <div class="col-md-12 mb-3">
                                <input type="file" name="photo" id="photo" class="dropify" data-allowed-file-extensions="jpg png jpeg">
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" placeholder="nama" name="namaStackholder" id="nameStackholder">
                                        <label for="nama">Nama Stackholder</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" placeholder="nama" name="fullname" id="fullname">
                                        <label for="nama">Nama Fullname</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" style="height: 100px" placeholder="Alamat" name="address" id="alamat"></textarea>
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
                                        <input type="text" class="form-control" name="latitude" id="latitude">
                                        <label for="latitude">Latitude</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="longitude" id="longitude">
                                        <label for="longitude">Longitude</label>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-12 mt-3">
                                <div id="mapEdit" style="height: 400px">
                                    <img src="<?php echo base_url(); ?>assets/pin.png" width="80" height="80" style="position: relative;z-index: 1000;left: 43%;top: 37%;">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="no_telp" id="no_telp">
                                        <label for="no_telp">No Telp</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="call_center" id="call_center">
                                        <label for="call_center">Call Center</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="fax" id="fax">
                                        <label for="fax">Fax</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" placeholder="nomor" id="email" name="email">
                                    <label for="">Email</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" placeholder="nomor" id="facebook" name="facebook">
                                    <label for="">Facebook</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="youtube" placeholder="nomor" name="youtube">
                                    <label for="">Youtube</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="link_playlist" placeholder="nomor" name="link_playlist">
                                    <label for="">Link Playlist Youtube</label>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" placeholder="nomor" id="twitter" name="twitter">
                                    <label for="">Twitter</label>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" placeholder="nomor" id="instagram" name="instagram">
                                    <label for="">Instagram</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" placeholder="nomor" id="url" name="url">
                                    <label for="">website</label>
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



<div class="modal fade TambahLayanan" id="myLayanan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Tambah Layanan Stackholder</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="" id="form_tambahlayanan" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="<?= $csrf_name; ?>" value="<?= $csrf_token; ?>" style="display: none">
                    <div class="col-md-12 mb-3">
                        <input type="file" name="photo" class="dropify" data-allowed-file-extensions="jpg png jpeg" />
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="material-selectfield mb-3">
                                <select name="stackholder_id" id="stackholder_id">
                                </select>
                                <label class="labelmui">Stackholder</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="material-textfield mb-3">
                                <input type="text" name="title" style="width:100% ;">
                                <label class="labelmui">Nama Layanan</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="material-textfield mb-3">
                                <input type="text" name="url" style="width:100% ;">
                                <label class="labelmui">Url</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mt-3">
                        <button type="button" class="btn btn-primary waves-effect float-end" id="btn_addLayanan" style="width: 25%; letter-spacing: 2px;">SIMPAN</button>
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

                url: '<?php echo base_url(); ?>masterdata/Stackholder/serverSideTable',

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
                    data: 'title'
                },
                // {
                //     data: 'code_satpas'
                // },
                {
                    data: 'alamat'
                },
                {
                    data: 'no_telp'
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
                url: "<?php echo base_url(); ?>masterdata/Stackholder/store",
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
                $('.DetailPolda,#photo').attr('data-default-file', `<?= url_api() ?>polda/logo/${results.logo_polda}`)
                // $('.DetailPolda,#kodeSatpas').attr('disabled', true)
                $('.DetailPolda,#namaPolda').attr('disabled', true)
                $('.DetailPolda,#address').attr('disabled', true)
                $('.DetailPolda,#latitude').attr('disabled', true)
                $('.DetailPolda,#longitude').attr('disabled', true)
                $('.DetailPolda,#open_time').attr('disabled', true)
                $('.DetailPolda,#close_time').attr('disabled', true)
                $('.DetailPolda,#phone_polda').attr('disabled', true)

                // $('.DetailPolda,#logo').val(results.logo_polda)
                // $('.DetailPolda,#kodeSatpas').val(results.code_satpas)
                $('.DetailPolda,#namaPolda').val(results.name_polda)
                $('.DetailPolda,#address').val(results.address)
                $('.DetailPolda,#latitude').val(results.latitude)
                $('.DetailPolda,#longitude').val(results.longitude)
                $('.DetailPolda,#open_time').val(results.open_time)
                $('.DetailPolda,#close_time').val(results.close_time)
                $('.DetailPolda,#phone_polda').val(results.phone_polda)

            }
        })
    }

    function detailEdit(id) {
        $.ajax({
            url: '<?= base_url() ?>masterdata/Stackholder/detailStackholder',
            type: 'POST',
            data: {
                id_stackholder: id
            },
            dataType: 'JSON',
            success: function(results) {
                console.log(results);
                $('.UbahPolda,#logo').attr('src', `<?= url_api() ?>stakeholder/${results.icon}`)
                $('.UbahPolda,#photo').data('data-default-file', `<?= url_api() ?>stakeholder/${results.icon}`)
                $('.UbahPolda,#cordinateEdit').attr('disabled', false)
                $('.UbahPolda,#nameStackholder').val('disabled', false)
                $('.UbahPolda,#fullname').val('disabled', false)

                $('.UbahPolda,#alamat').attr('disabled', false)
                $('.UbahPolda,#latitude').attr('disabled', false)
                $('.UbahPolda,#longitude').attr('disabled', false)
                $('.UbahPolda,#no_telp').attr('disabled', false)
                $('.UbahPolda,#call_center').attr('disabled', false)
                $('.UbahPolda,#fax').attr('disabled', false)
                $('.UbahPolda,#email').attr('disabled', false)
                $('.UbahPolda,#link_playlist').attr('disabled', false)
                $('.UbahPolda,#facebook').attr('disabled', false)
                $('.UbahPolda,#twitter').attr('disabled', false)
                $('.UbahPolda,#youtube').attr('disabled', false)
                $('.UbahPolda,#instagram').attr('disabled', false)
                $('.UbahPolda,#url').attr('disabled', false)

                $('#id_stackholder').val(results.id)

                $('.UbahPolda,#nameStackholder').val(results.title)
                $('.UbahPolda,#fullname').val(results.fullname)
                $('.UbahPolda,#alamat').val(results.alamat)
                $('.UbahPolda,#cordinateEdit').val((results.latitude) + ',' + (results.longitude))
                $('.UbahPolda,#latitude').val(results.latitude)
                $('.UbahPolda,#longitude').val(results.longitude)
                $('.UbahPolda,#no_telp').val(results.no_telp)
                $('.UbahPolda,#call_center').val(results.call_center)
                $('.UbahPolda,#fax').val(results.fax)
                $('.UbahPolda,#email').val(results.email)
                $('.UbahPolda,#link_playlist').val(results.link_playlist)
                $('.UbahPolda,#facebook').val(results.facebook)
                $('.UbahPolda,#twitter').val(results.twitter)
                $('.UbahPolda,#youtube').val(results.youtube)
                $('.UbahPolda,#instagram').val(results.instagram)
                $('.UbahPolda,#url').val(results.url)

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
                    url: "<?php echo base_url(); ?>masterdata/Stackholder/hapusStackholder/",
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


    function addLayanan(id) {
        $('#myLayanan').modal('show');
        $('#stackholder_id').html(``)
        $.ajax({
            url: '<?= base_url() ?>masterdata/Stackholder/detailStackholder',
            type: 'POST',
            data: {
                id_stackholder: id
            },
            dataType: 'JSON',
            success: function(results) {
                console.log(results);
                $('#stackholder_id').append(`<option value="${results.id}">${results.title}</option>`)
            }
        })
    }

    $('#btn_edit').on('click', function(e) {
        e.preventDefault()
        var formData = new FormData($('#form_edit')[0]);
        $.ajax({
            url: '<?= base_url() ?>masterdata/Stackholder/updateStackholder',
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

    $('#btn_addLayanan').on('click', function(e) {
        e.preventDefault()
        var formData = new FormData($('#form_tambahlayanan')[0]);
        $.ajax({
            url: "<?php echo base_url(); ?>masterdata/Stackholder/store_layanan",
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
                        $(".TambahLayanan").modal('hide');
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
    })
    $('#btnTambah').on('click', function(e) {
        $('#form_tambah')[0].reset()
    })
    $('#btnEdit').on('click', function(e) {
        $('#form_edit')[0].reset()
    })
</script>