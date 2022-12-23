<div class="row">
    <div class="col-md-6 mb-3">
        <label for="waktu">Tanggal</label>
        <div id="reportrange"  style="border-radius: 0.25rem; height: 40px; background: #fff; cursor: pointer; padding: 10px 10px; border: 1px solid #ccc;">
            <div class="row">
                <div class="col-md-10">
                    <span style="font-size: 14px;"></span> <b class="caret"></b>
                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                </div> 
            </div>
        </div>
        
        <input hidden type="date" id="startdate" name="startdate">
        <input hidden type="date" id="enddate" name="enddate">
    </div>  
    <div class="col-md-6">
        <a style="margin-top: 30px;" href="javascript:void(0);" id="submitSearch" class="btn btn-primary">Search</a>
    </div>
</div>
<div class="row">
    <input hidden type="text" id="typeRenpam">
    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-h-100" id="pengawalan">
            <!-- card body -->
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-12">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Pengawalan</span>
                        <table class="table table-bordered" style="width: 100%;">
                            <thead>
                                <th style="text-align: center">Proses</th>
                                <th style="text-align: center">Selesai</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="text-align: center">
                                        <h4 class="mb-3">
                                            <span class="counter-value" data-target="<?php echo $data['filterProsesPengawalan']?>">0</span>
                                        </h4>
                                    </td>
                                    <td style="text-align: center">
                                        <h4 class="mb-3">
                                            <span class="counter-value" data-target="<?php echo $data['filterDonePengawalan']?>">0</span>
                                        </h4>
                                    </td>
                                </tr>
                            </tbody> 
                        </table>
                        
                    </div>
 
                </div> 
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-h-100" id="pengaturan">
            <!-- card body -->
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-12">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Pengaturan</span>
                        <table class="table table-bordered" style="width: 100%;">
                            <thead>
                                <th style="text-align: center">Proses</th>
                                <th style="text-align: center">Selesai</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="text-align: center">
                                        <h4 class="mb-3">
                                            <span class="counter-value" data-target="<?php echo $data['filterProsesPengaturan']?>">0</span>
                                        </h4>
                                    </td>
                                    <td style="text-align: center">
                                        <h4 class="mb-3">
                                            <span class="counter-value" data-target="<?php echo $data['filterDonePengaturan']?>">0</span>
                                        </h4>
                                    </td>
                                </tr>
                            </tbody> 
                        </table>
                        
                    </div>
                </div>
                 
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col-->

    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-h-100" id="penjagaan">
            <!-- card body -->
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-12">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Penjagaan</span>
                        <table class="table table-bordered" style="width: 100%;">
                            <thead>
                                <th style="text-align: center">Proses</th>
                                <th style="text-align: center">Selesai</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="text-align: center">
                                        <h4 class="mb-3">
                                            <span class="counter-value" data-target="<?php echo $data['filterProsesPenjagaan']?>">0</span>
                                        </h4>
                                    </td>
                                    <td style="text-align: center">
                                        <h4 class="mb-3">
                                            <span class="counter-value" data-target="<?php echo $data['filterDonePenjagaan']?>">0</span>
                                        </h4>
                                    </td>
                                </tr>
                            </tbody> 
                        </table>
                        
                    </div>
                </div> 
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-h-100" id="patroli">
            <!-- card body -->
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-12">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Patroli</span>
                        <table class="table table-bordered" style="width: 100%;">
                            <thead>
                                <th style="text-align: center">Proses</th>
                                <th style="text-align: center">Selesai</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="text-align: center">
                                        <h4 class="mb-3">
                                            <span class="counter-value" data-target="<?php echo $data['filterProsesPatroli']?>">0</span>
                                        </h4>
                                    </td>
                                    <td style="text-align: center">
                                        <h4 class="mb-3">
                                            <span class="counter-value" data-target="<?php echo $data['filterDonePatroli']?>">0</span>
                                        </h4>
                                    </td>
                                </tr>
                            </tbody> 
                        </table>
                        
                    </div>
                </div> 
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->   

    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-h-100">
            <!-- card body -->
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-12">
                        <span class="text-muted mb-3 " style="display: flex;">Total Renpam &nbsp;
                            <h5 class="mb-3" id="totalRenpam"> 
                            </h5>
                            <button id="refresh" class="btn " style="margin-top: -17px;"><i class="fa fas fa-undo "></i></button>
                        </span>
                        <table class="table table-bordered" style="width: 100%;">
                            <thead>
                                <th style="text-align: center">Proses</th>
                                <th style="text-align: center">Selesai</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="text-align: center">
                                        <h4 class="mb-3">
                                            <span class="counter-value" data-target="<?php echo $data['filterProses']?>">0</span>
                                        </h4>
                                    </td>
                                    <td style="text-align: center">
                                        <h4 class="mb-3">
                                            <span class="counter-value" data-target="<?php echo $data['filterDone']?>">0</span>
                                        </h4>
                                    </td>
                                </tr>
                            </tbody> 
                        </table>
                    </div>
                    <div class="col-6">
                        <div id="mini-chart4" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                    </div>
                </div> 
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->  
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-body">
                <div class="mb-3" id="titleData">
                    <h4>Data Rencana Pengamanan</h4> 
                </div>
                <table id="datatable" class="table dt-responsive no-warp w-100">
                    <thead>
                        <tr>
                            <th>Status</th>
                            <th>Kegiatan</th>
                            <th>Jam Mulai</th>
                            <th>Delegasi</th>
                            <th>Personil</th>
                            <th>Jenis Kendali</th>
                            <th>Lokasi</th>
                            <th>Rute</th>
                            <th>Alternative</th>
                            <th>Escape</th>
                            <th>Hasil/Output</th> 
                            <th>Catatan Kakor</th>
                            <!-- <th>Lihat Posisi</th> -->
                        </tr>
                    </thead> 
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Map Rencana Pengamanan</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">  
                <div class="row">   
                    <div class="col-md-12">
                        <div id="maps"></div> 
                    </div>
                </div>  
            </div>
        </div>
    </div>
</div> 

<script> 

    var dataDetailRenpam = []; 

    $(document).ready(function() {
        var userDataTable = $('#datatable').DataTable({ 

            responsive: true, 

            // scrollX: true,

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

                    data.filterTgl = "<?= $data['start_date']?>";

                    data.filterTgl2 = "<?= $data['end_date']?>"; 

                    // data.filterStatus = $('[name=status]').val();

                    data.filterSchedule = '';

                    data.filterTypeRenpam = $("#typeRenpam").val();

                    data.filterCategoryRenpam = '';

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

                { data: 'status_renpam'}, 
                { data: 'name_renpam' },
                { data: 'start_time' }, 
                { data: 'vips', orderable : false},  
                { data: 'accounts', orderable : false},   
                { data: 'type_renpam'},  
                { data: 'lokasi', orderable : false},  
                { data: 'route', orderable : false}, 
                { data: 'route_alternatif_1' , orderable : false }, 
                { data: 'route_alternatif_2' , orderable : false }, 
                { data: 'choose_rute'},  
                { data: 'note' , orderable : false }
                // { data: 'lihat' , orderable : false }

            ],

            order: [[ 0, "DESC" ]],

            drawCallback : function(settings){
                // console.log(settings);
                $("#overlay").fadeOut(300); 
                var totalRecord = settings._iRecordsTotal;
                // console.log(totalRecord);
                var listTotal = "";
                listTotal = '';
                listTotal = `<span class="counter-value" data-target="0">${totalRecord}</span>`;
                $('#totalRenpam').html(listTotal);

                maps();
                
                
            }   

        });  
 

        // var start = moment().subtract(29, 'days');
        var start = moment("<?= $data['start_date']?>");
        var end = moment("<?= $data['end_date']?>"); 
        // alert(start);
        
        function cb(start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY')); 
            $('#startdate').val(start.format('YYYY-MM-DD'));
            $('#enddate').val(end.format('YYYY-MM-DD')); 
            // userDataTable.draw(); 
        }

        $('#reportrange').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
            'Hari Ini': [moment(), moment()],
            'Kemarin': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            '7 Hari Kemarin': [moment().subtract(6, 'days'), moment()],
            '30 Hari Kemarin': [moment().subtract(29, 'days'), moment()],
            'Bulan Ini': [moment().startOf('month'), moment().endOf('month')],
            'Bulan Kemarin': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')], 
            'Tahun Ini': [moment().startOf('year'), moment().endOf('year')],
            'Tahun Lalu': [moment().subtract(1, 'year').startOf('year'), moment().subtract(1, 'year').endOf('year')],
            }
        }, cb);

        cb(start, end);   

        $('#submitSearch').on('click', function(e) { 
            window.location.href = `<?php echo base_url();?>dashboard?start_date=${$('#startdate').val()}&end_date=${$('#enddate').val()}`;
        });

        $("#patroli").on('click', function(e) { 
            $("#typeRenpam").val('1');
            $("#titleData").html(`<h4>Data Patroli</h4> `);
            userDataTable.draw(); 
        }); 
        $("#pengawalan").on('click', function(e) { 
            $("#typeRenpam").val('2');
            $("#titleData").html(`<h4>Data Pengawalan</h4>`);
            userDataTable.draw(); 
        }); 
        $("#penjagaan").on('click', function(e) { 
            $("#typeRenpam").val('3');
            $("#titleData").html(`<h4>Data Penjagaan</h4>`);
            userDataTable.draw(); 
        }); 
        $("#pengaturan").on('click', function(e) { 
            $("#typeRenpam").val('4');
            $("#titleData").html(`<h4>Data Pengaturan</h4>`);
            userDataTable.draw(); 
        }); 
        

        $("#refresh").on('click', function(e) { 
            $("#typeRenpam").val('');
            $("#titleData").html(`<h4>Data Rencana Pengamanan</h4> `);
            userDataTable.draw(); 
        }); 
    });  


   

    function maps() {
        $(".flag").on("click",function(event){
            var ids = $(this).data("id");  

            $("#overlay").fadeIn(300); 
            $.ajax({
            type : "POST",
            url : "<?php echo base_url();?>dashboard/getIdRenpam", 
            data : {
                "id" : ids, 
            }, 
            dataType : "JSON",
            success : function(result){  
                $("#overlay").fadeOut(300); 
                var res = result['data']['data']; 
                if(result['isSuccess'] == true){
                    dataDetailRenpam = [];
                    dataDetailRenpam = res; 
                    $("#mapG20Kakor").remove();
                    $("#maps").html(`<div id="mapG20Kakor"  style="height: 500px"></div>`);
                    $("#myModal").modal('show');
                }else{
                    Swal.fire(
                    `Mohon cek signal anda!`, 
                    '',
                    'error'
                    ).then(function() { 
                    });
                }
            }
        });
 
        });
    }

    $('#myModal').on('shown.bs.modal', function() { 
        var div = $(event.relatedTarget); // Tombol dimana modal di tampilkan
        var modal = $(this);   

        console.log(dataDetailRenpam);
        
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
        var mapContainerRenpam = L.map('mapG20Kakor', {
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
        }).addTo(mapContainerRenpam);
        L.control.zoom({
            position: 'bottomleft'
        }).addTo(mapContainerRenpam); 


        var route = new Array(); 
        if(dataDetailRenpam['route'] != null){ 
            route[0] = L.Routing.control({
                show: true, 
                draggableWaypoints: false,
                addWaypoints: false,
                waypoints: dataDetailRenpam['route'],
                router: new L.Routing.osrmv1({
                    language: 'en',
                    profile: 'car'
                }),
                // lineOptions: {
                //     styles: [{color: 'red', opacity: 1, weight: 3, zIndex: 2056}]
                // },
                geocoder: L.Control.Geocoder.nominatim({})
            }).addTo(mapContainerRenpam); 
            
        }

        var routeAlternative1 = new Array(); 
        if(dataDetailRenpam['route_alternatif_1'] != null){
            routeAlternative1[0] = L.Routing.control({
                show: false, 
                draggableWaypoints: false,
                addWaypoints: false,
                waypoints: dataDetailRenpam['route_alternatif_1'],
                router: new L.Routing.osrmv1({
                    language: 'en',
                    profile: 'car'
                }),
                lineOptions: {
                    styles: [{color: "gray", opacity: 0.8, weight: 3, dashArray: "5,12"}]
                },
                createMarker: function(i, wp, nWps) {
                    if (i === 0 || i === nWps + 1) {
                        // here change the starting and ending icons
                        return L.marker(wp.latLng, {
                            icon: L.divIcon({
                                className: "location-pin",
                                html: `<img src="https://cdn-icons-png.flaticon.com/512/178/178753.png"><div class="pin"></div><div class="pulse"></div>`,
                                iconSize: [5, 5],
                                //iconAnchor: [18, 30]
                                iconAnchor: [5, 10],
                            }),
                            draggable: this.draggableWaypoints,
                        });
                    } else if (i === nWps - 1) {
                        return L.marker(wp.latLng, {
                            icon: L.divIcon({
                                className: "location-pin",
                                html: `<img src="https://cdn-icons-png.flaticon.com/512/178/178753.png"><div class="pin"></div><div class="pulse"></div>`,
                                iconSize: [5, 5],
                                //iconAnchor: [18, 30]
                                iconAnchor: [5, 10],
                            }),
                            draggable: this.draggableWaypoints,
                        });
                    } else {
                        // here change all the others
                        var options = {
                                draggable: this.draggableWaypoints,
                            },
                            marker = L.marker(wp.latLng, {
                            icon: L.divIcon({
                                className: "location-pin",
                                html: `<img src="https://cdn-icons-png.flaticon.com/512/178/178753.png"><div class="pin"></div><div class="pulse"></div>`,
                                iconSize: [5, 5],
                                //iconAnchor: [18, 30]
                                iconAnchor: [5, 10],
                            }),
                            draggable: this.draggableWaypoints,
                        });

                        return marker;
                    }
                },
                geocoder: L.Control.Geocoder.nominatim({})
            }).addTo(mapContainerRenpam);
        }

        var routeAlternative2 = new Array(); 
        if(dataDetailRenpam['route_alternatif_2'] != null){
            routeAlternative2[0] = L.Routing.control({
                show: false, 
                draggableWaypoints: false,
                addWaypoints: false,
                waypoints: dataDetailRenpam['route_alternatif_2'],
                router: new L.Routing.osrmv1({
                    language: 'en',
                    profile: 'car'
                }),
                lineOptions: {
                    styles: [{color: "green", opacity: 0.8, weight: 3, dashArray: "5,12"}]
                },
                createMarker: function(i, wp, nWps) {
                    if (i === 0 || i === nWps + 1) {
                        // here change the starting and ending icons
                        return L.marker(wp.latLng, {
                            icon: L.divIcon({
                                className: "location-pin",
                                html: `<img src="https://www.citypng.com/public/uploads/preview/hd-round-emergency-exit-escape-sign-icon-symbol-png-316282089114htwnmbnbp.png"><div class="pin"></div><div class="pulse"></div>`,
                                iconSize: [5, 5],
                                //iconAnchor: [18, 30]
                                iconAnchor: [5, 10],
                            }),
                            draggable: this.draggableWaypoints,
                        });
                    } else if (i === nWps - 1) {
                        return L.marker(wp.latLng, {
                            icon: L.divIcon({
                                className: "location-pin",
                                html: `<img src="https://www.citypng.com/public/uploads/preview/hd-round-emergency-exit-escape-sign-icon-symbol-png-316282089114htwnmbnbp.png"><div class="pin"></div><div class="pulse"></div>`,
                                iconSize: [5, 5],
                                //iconAnchor: [18, 30]
                                iconAnchor: [5, 10],
                            }),
                            draggable: this.draggableWaypoints,
                        });
                    } else {
                        // here change all the others
                        var options = {
                                draggable: this.draggableWaypoints,
                            },
                            marker = L.marker(wp.latLng, {
                            icon: L.divIcon({
                                className: "location-pin",
                                html: `<img src="https://www.citypng.com/public/uploads/preview/hd-round-emergency-exit-escape-sign-icon-symbol-png-316282089114htwnmbnbp.png"><div class="pin"></div><div class="pulse"></div>`,
                                iconSize: [5, 5],
                                //iconAnchor: [18, 30]
                                iconAnchor: [5, 10],
                            }),
                            draggable: this.draggableWaypoints,
                        });

                        return marker;
                    }
                },
                geocoder: L.Control.Geocoder.nominatim({})
            }).addTo(mapContainerRenpam);
        }

        mapContainerRenpam.invalidateSize(); 

    });   
</script>
