<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Daftar <?= $title; ?></li>
    </ol>
</nav>
<!-- </div> -->
<div class="page">
    <button type="button" class="btn btn-primary waves-effect" data-bs-toggle="modal" data-bs-target="#myModal">Tambah Rencana Pengamanan</button>
    <div class="card mt-3">
        <div class="card-body">
            <table id="datatable" class="table dt-responsive w-100">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tim</th>
                        <th>VIP</th>
                        <th>Subjek</th>
                        <th>Instruksi</th>
                        <th>Lokasi</th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Aksi</th>
                    </tr>
                </thead> 
            </table>
        </div>

    </div>
</div>
<!-- End Page -->



<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Tambah Instruksi</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body"> 
                <form class="form" method="post" enctype="multipart/form-data"> 
                    
                    <div class="row">  

                        <div class="col-md-6">
                            <div class="material-selectfield mb-3">
                                <select required name="id_account[]" id="id_account" style="height: 200px;" multiple> 
                                    <?php foreach($data['getAccount'] as $row): ?>
                                        <option value="<?php echo $row['id'];?>"><?php echo $row['name_account'];?></option> 
                                    <?php endforeach; ?> 
                                </select>
                                <label style="margin-top: -20px;font-size: 14px;" class="labelmui">Tim</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="material-textfield mb-3">
                                <input required style="width: 100%;" name="date" id="datepicker" class="form-control" value="<?= date('Y-m-d') ?>" type="date" >
                                <label class="labelmui">Tanggal</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="material-selectfield mb-3">
                                <select required name="id_vip[]" id="id_vip" style="height: 200px" multiple> 
                                    <?php foreach($data['getVip'] as $row): ?>
                                        <option value="<?php echo $row['id'];?>"><?php echo $row['name_vip'];?></option> 
                                    <?php endforeach; ?> 
                                </select>
                                <label style="margin-top: -20px;font-size: 14px;" class="labelmui">VIP</label>
                            </div>
                        </div>  
                        <div class="col-md-6">
                            <div class="material-textfield mb-3">
                                <input required type="text" name="startTime" class="form-control" id="startTime" value="<?php echo date('H:i')?>" data-default="<?php echo date('H:i')?>"> 
                                <label class="labelmui">Waktu Mulai</label>
                            </div>
                        </div>
                        <div class="col-md-6"> 
                            <div class="material-selectfield mb-3">
                                <select name="subjek" class="form-select">
                                    <option selected value="">Pilih Subjek</option> 
                                    <option value="1">Patroli</option> 
                                    <option value="2">Pengawalan</option> 
                                    <option value="3">Penjagaan</option> 
                                </select>
                                <label class="labelmui">Subjek</label>
                            </div>
                        </div>
                        <div class="col-md-6"></div>
                        <!-- <div class="col-md-6">
                            <div class="material-textfield mb-3">
                                <input required type="text" name="endTime" class="form-control" id="endTime" value="<?php echo date('H:i')?>" data-default="<?php echo date('H:i')?>"> 
                                <label class="labelmui">Waktu Selesai</label>
                            </div>
                        </div> -->
                        <div class="col-md-12">
                            <div class="material-textfield mb-3">
                                <input required style="width: 100%;" name="instruksi" placeholder="" type="text">
                                <label class="labelmui">Instruksi</label>
                            </div>
                        </div>
                         
                        <input hidden style="width: 100%;" name="ruteawal" id="ruteawal" placeholder="" type="text">

                        <div class="col-md-12 mt-3">
                            <div id="mapG20Kegiatan" style="height: 500px"></div>
                        </div>
                    </div>   

                    <div class="col-md-6 mt-3 float-end">
                        <button class="btn btn-primary float-end" type="submit">Simpan</button>
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

            initComplete : function (settings, json) { },

            retrieve : true,

            processing : true,

            serverSide: true,

            serverMethod: 'POST',

            ajax : {

                dataType: 'json',

                url: '<?php echo base_url();?>operasi/Renpam/serverSideTable',

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
                { data: 'accounts', orderable : false },
                { data: 'vips', orderable : false }, 
                { data: 'type_renpam'},  
                { data: 'name_renpam'},   
                { data: 'lokasi'},  
                { data: 'date'},  
                { data: 'waktu', orderable : false}, 
                { data: 'action' , orderable : false }

            ],

            order: [[ 0, "DESC" ]],

            drawCallback : function(settings){

                $("#overlay").fadeOut(300); 

            }   

        });   



       


        let arrayWaypoint = []; 
        var obj = {}; 
        $('#myModal').on('shown.bs.modal', function() {
            console.log(arrayWaypoint);
            
            $('#startTime').clockpicker({
                autoclose: true
            });
            $('#endTime').clockpicker({
                autoclose: true
            });
    
            new Choices('#id_vip', {
                searchEnabled: true,
                removeItemButton: true,
                removeItems: true,
                itemSelectText: '',
                classNames: {
                    containerOuter: 'choices select-choices',
                },
            });

            new Choices('#id_account', {
                searchEnabled: true,
                removeItemButton: true,
                removeItems: true,
                itemSelectText: '',
                classNames: {
                    containerOuter: 'choices select-choices',
                },
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
            var mapContainerInstruksi = L.map('mapG20Kegiatan', {
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
            }).addTo(mapContainerInstruksi);
            L.control.zoom({
                position: 'bottomleft'
            }).addTo(mapContainerInstruksi);
            
            // mapContainerInstruksi.invalidateSize(); 
            
            var control = L.Routing.control({
                waypoints: arrayWaypoint,
                router: new L.Routing.osrmv1({
                    language: 'en',
                    profile: 'car'
                }),
                showAlternatives: true,
                geocoder: L.Control.Geocoder.nominatim({})
            }).addTo(mapContainerInstruksi);


            function createButton(label, container) {
                var btn = L.DomUtil.create('button', '', container);
                btn.setAttribute('type', 'button');
                btn.innerHTML = label;
                return btn;
            }

            mapContainerInstruksi.on('click', function(e) {
                var container = L.DomUtil.create('div'),
                    startBtn = createButton('Start from this location', container), 
                    destBtn = createButton('Go to this location', container);

                L.DomEvent.on(startBtn, 'click', function() {  

                    control.spliceWaypoints(0, 1, e.latlng);
                    mapContainerInstruksi.closePopup();
                }); 
                L.DomEvent.on(destBtn, 'click', function() { 

                    control.spliceWaypoints(control.getWaypoints().length - 1, 1, e.latlng);
                    mapContainerInstruksi.closePopup();
                });
                L.popup()
                    .setContent(container)
                    .setLatLng(e.latlng)
                    .openOn(mapContainerInstruksi);
            });



            $(".form").submit(function(e) {
                $("#overlay").fadeIn(300);
                e.preventDefault(); 

                var routeArray = new Array();
                routeArray = control.getWaypoints();
                $('#ruteawal').val(JSON.stringify(routeArray)); 

                var formData = new FormData($('.form')[0]); 
                $.ajax({
                    url: "<?php echo base_url();?>operasi/Renpam/store",
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
                                $("#myModal").modal('hide');
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
    });
</script>