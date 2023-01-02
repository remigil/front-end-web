<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">operator</li>
    </ol>
</nav>
<!-- </div> -->
<div class="page">
    <button type="button" class="btn btn-primary waves-effect" data-bs-toggle="modal" data-bs-target=".Tambahoperator">Tambah operator</button>
    <div class="col-12">

        <div class="card mt-3">
            <div class="card-body">
                <table id="datatable" class="table dt-responsive w-100">
                    <thead>
                        <tr>
                            <th>No</th>
                            <!-- <th>Banner</th> -->
                            <th>Logo</th>
                            <th>Name Operation</th>
                            <!-- <th>Document Sprint</th> -->
                            <!-- <th>Background Image</th> -->
                            <th>Tanggal mulai s/d selesai</th> 
                            <th>Aksi</th>
                        </tr>
                    </thead> 
                </table>
            </div>
        </div>

    </div>
</div>
<!-- End Page -->


<div class="modal fade Tambahoperator" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Tambah operator</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form row" method="post" enctype="multipart/form-data">  
                <input type="hidden" name="<?= $csrf_name;?>" value="<?= $csrf_token;?>" style="display: none">
                    <!-- <div class="col-md-12"> 
                        <div class="material-textfield mb-3">
                            <label >Banner</label>
                            <input type="file" name="banner" class="dropify" data-allowed-file-extensions="jpg png jpeg" data-default-file="<?php echo base_url();?>assets/no_image.png"  /> 
                        </div> 
                    </div>  -->
                    
                    <div class="col-md-12">
                        <div class="material-textfield mb-3">
                            <input required style="width: 100%;" name="name_operation" placeholder="" type="text">
                            <label class="labelmui">Nama Operation</label>
                        </div>
                    </div>
                    <!-- <div class="col-md-12">
                        <div class="material-textfield mb-3">
                            <label>Document Sprint</label>
                            <input type="file" name="sprint" class="dropify" data-allowed-file-extensions="jpg png jpeg" data-default-file="<?php echo base_url();?>assets/no_image.png"  /> 
                        </div>
                    </div>  -->
                    <!-- <div class="col-md-12">
                        <div class="material-textfield mb-3">
                            <label>Background</label>
                            <input type="file" name="bg" class="dropify" data-allowed-file-extensions="jpg png jpeg" data-default-file="<?php echo base_url();?>assets/no_image.png"  /> 
                        </div>
                    </div> -->
                    <div class="col-md-12">
                        <div class="material-textfield mb-3">
                            <label>Logo</label>
                            <input type="file" name="logo" class="dropify" data-allowed-file-extensions="jpg png jpeg svg" data-default-file="<?php echo base_url();?>assets/no_image.png"  /> 
                        </div>
                    </div>

                    <div class="col-md-12" style="display: none;">
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

                    <div class="col-md-12 mt-3 mb-3">
                        <div id="mapG20Kegiatan" style="height: 400px"></div>
                    </div>

                    <div class="col-md-6" style="display: none;">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="latitude" placeholder="latitude">
                            <label for="latitude">Latitude</label>
                        </div>
                    </div>
                    <div class="col-md-6" style="display: none;">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="longitude" placeholder="longitude">
                            <label for="longitude">Longitude</label>
                        </div>
                    </div>

                    <input hidden class="form-control" name="zoom_level" id="zoom_level" value="5.5" placeholder="" type="text"> 
 
                    <div class="col-md-6">
                        <div class="material-textfield mb-3">
                            <input required class="form-control" name="start_date" placeholder="" type="date">
                            <label class="labelmui">Start Date</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="material-textfield mb-3">
                            <input required class="form-control" name="end_date" placeholder="" type="date">
                            <label class="labelmui">End Date</label>
                        </div>
                    </div>

                    <div class="col-md-12 float-end">
                        <button class="btn btn-primary float-end" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    var initialZoom;
    $(document).ready(function() {
        $('.dropify').dropify();

        var userDataTable = $('#datatable').DataTable({ 

            responsive: true, 

            scrollX: true,

            // sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

            // buttons: ["excel", "csv", "pdf"],

            oLanguage: {

                sSearch: 'Search:'

            },

            initComplete : function (settings, json) { },

            retrieve : true,

            processing : true,

            serverSide: true,

            serverMethod: 'POST',

            ajax : {

                dataType: 'json',

                url: '<?php echo base_url();?>user/operator/serverSideTable',

                data: function(data){

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

                beforeSend: function (xhr, settings) {
                    
                },

                "dataSrc": function (result) { 

                    result.iTotalRecords = result.iTotalRecords;

                    result.iTotalDisplayRecords = result.iTotalRecords;

                    return result.aaData;

                }

            },

            columns: [ 

                { data: 'id'}, 
                // { data: 'banner'},
                { data: 'logo'},  
                { data: 'name_operation'},
                // { data: 'document_sprint'}, 
                // { data: 'background_image'},
                { data: 'date'},      
                { data: 'action' , orderable : false }

            ],

            order: [[ 0, "DESC" ]],

            drawCallback : function(settings){

                $("#overlay").fadeOut(300); 

            }   

        });  
        
        
        $('[name=cordinate]').val('-1.5707209, 115.4875168');
        var initialCenter = [-1.5707209, 115.4875168];
        initialZoom = $("#zoom_level").val();
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

        $('.Tambahoperator').on('shown.bs.modal', function() {
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
                            list = "";
                            $('#listAddress').html(list);
                            $('#listAddress').hide();
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
                // console.log(e.target._zoom);
                $("#zoom_level").val(e.target._zoom);

                $.get(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${corLat}&lon=${corLng}`, function(data) {

                    $('[name=address]').val(data['display_name']);

                });

            });
        });
        
        $(".form").submit(function(e) {
            $("#overlay").fadeIn(300);
            e.preventDefault(); 
            var formData = new FormData($('.form')[0]); 
            $.ajax({
                url: "<?php echo base_url();?>user/operator/store",
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
                            $(".Tambahoperator").modal('hide');
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
</script>