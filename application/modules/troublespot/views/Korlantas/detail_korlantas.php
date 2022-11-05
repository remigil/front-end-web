<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <!-- <li class="breadcrumb-item">Troublespot</li> -->
        <li class="breadcrumb-item active fw-bold" aria-current="page">Detail Troublespot</li>
    </ol>
</nav>
<div class="page">
<div class="row"> 
<div class="col-md-12 mb-2">
                    <a href="<?php echo base_url()?>troublespot/Troublespot/Edit/<?php echo $data['getDetail']['data']['id'];?>"> <button type="button" class=" btn btn-primary waves-effect float-end" style="width: 15%;">Edit <i class="mdi mdi-square-edit-outline"></i></button></a>
                </div>
<div class="card">
<!-- <div class="col-md-12"> -->
<div class="card-body" style="padding: 10px;">
        
        <!-- < class="row mb-3" >  -->
        <div class="col-md-12" >
                <div style="display: flex;text-align: center;align-content: end;float: right;">
                    <div style="font-size: 13px; border:1px solid black; border-radius: 0.25rem; padding: 10px; margin-right:10px"> <span class="text-primary"> NO. TS | </span><?php echo $data['getDetail']['data']['no_ts'];?> </div> 
                    <div style="font-size: 13px; border:1px solid black; border-radius: 0.25rem; padding: 10px;"> <span class="text-primary">Tanggal Pelaporan | </span><?php echo $data['getDetail']['data']['report_date'];?></div>
                </div>
            </div>
            <div class="col-md-12 mt-3 mb-3">
                <h3 style="font-variant: all-petite-caps;">Detail Data Troublespot</h3>
            </div>
            
            
            <div class="col-md-12 mt-3 ">
                <div style=" font-size: 13px; background-color: #d5d5d4; border-radius: 0.25rem; padding: 10px;"> <b>WILAYAH KEMACETAN</b> </div>
            </div>
            

            <div class="col-md-12 ">
                <div>
                    
                    <div class="mt-3" style="font-size: 13px; border:1px solid black; border-radius: 0.25rem; padding: 15px;">
                        <div class="row mt-2">
                            <div class="col-md-3 text-left">
                                PELAPOR
                            </div> 
                            <div class="col-md-1 text-center">
                                :
                            </div> 
                            <div class="col-md-6 text-left">
                            <?php echo $data['getDetail']['data']['reporter_name'];?>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-3 text-left">
                                POLDA
                            </div> 
                            <div class="col-md-1 text-center">
                                :
                            </div> 
                            <div class="col-md-6 text-left">
                            <?php echo $data['getDetail']['data']['polda']['name_polda'];?>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-3 text-left">
                                POLRES
                            </div> 
                            <div class="col-md-1 text-center">
                                :
                            </div> 
                            <div class="col-md-6 text-left">
                            <?php echo $data['getDetail']['data']['polre']['name_polres'];?>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-3 text-left">
                                PENYEBAB KEMACETAN
                            </div> 
                            <div class="col-md-1 text-center">
                                :
                            </div> 
                            <div class="col-md-6 text-left" >
                                 <div>
                                 <?php echo $data['getDetail']['data']['traffic_reason'];?>
                                 </div> 
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-3 text-left">
                                LOKASI KEJADIAN
                            </div> 
                            <div class="col-md-1 text-center">
                                :
                            </div> 
                            <div class="col-md-6 text-left">
                            <?php echo $data['getDetail']['data']['location'];?>
                            </div>
                        </div>
                        <div class="row mt-2">
                        <div class="col-md-12 mt-3">
                            <div id="mapG20Troublespot" style="height: 350px"></div>
                        </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-3 text-left">
                                LATITUDE, LONGITUDE
                            </div> 
                            <div class="col-md-1 text-center">
                                :
                            </div> 
                            <div class="col-md-6 text-left">
                            <?php echo $data['getDetail']['data']['latitude'];?> , <?php echo $data['getDetail']['data']['longitude'];?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-12 mt-3">
                <div style="font-size: 13px; background-color: #d5d5d4; border-radius: 0.25rem; padding: 10px;"> <b>TINDAKAN KEMACETAN</b> </div>
            </div>

            <div class="col-md-12 mt-3">
                <div> 
                    <div style="font-size: 13px; border:1px solid black; border-radius: 0.25rem; padding: 15px;">
                        <div class="row mt-2">
                            <div class="col-md-3 text-left">
                                KETERANGAN
                            </div> 
                            <div class="col-md-1 text-center">
                                :
                            </div> 
                            <div class="col-md-6 text-left">
                            <?php echo $data['getDetail']['data']['desc'];?> 
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-3 text-left">
                                PERMASALAHAN
                            </div> 
                            <div class="col-md-1 text-center">
                                :
                            </div> 
                            <div class="col-md-6 text-left">
                                <div ><?php echo $data['getDetail']['data']['problem'];?>
                                 </div> 
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-3 text-left">
                                REKOMENDASI
                            </div> 
                            <div class="col-md-1 text-center">
                                :
                            </div> 
                            <div class="col-md-6 text-left"> 
                                <div ><?php echo $data['getDetail']['data']['recommendation'];?>
                                 </div> 
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-3 text-left">
                                TINDAKAN
                            </div> 
                            <div class="col-md-1 text-center">
                                :
                            </div> 
                            <div class="col-md-6 text-left" >
                                 <div >
                                 <?php echo $data['getDetail']['data']['action'];?> 
                                 </div> 
                            </div>
                        </div>
                        
                        <div class="row mt-2">
                            <div class="col-md-3 text-left">
                                HASIL YANG DICAPAI
                            </div> 
                            <div class="col-md-1 text-center">
                                :
                            </div> 
                            <div class="col-md-6 text-left">
                            <?php echo $data['getDetail']['data']['result'];?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12  mt-3 mb-3"> 
                <div style="display: flex;text-align: center;align-content: end;float: inline-end;margin-right: 10px;">
                    <a class="btn btn-primary" style="width: 200px;" href="<?php echo base_url()?>troublespot">Kembali</a>
                </div>
            </div>
    
</div>  
</div>
    
</div>
</div>

  


<script>
    $(function() {

        var start = moment().subtract(29, 'days');
        var end = moment();

        function cb(start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY')); 
            $('#startdate').val(start.format('YYYY-MM-DD'));
            $('#enddate').val(end.format('YYYY-MM-DD'));
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

    });
  $(document).ready(function() {  

    $('#dataTables-example').DataTable({ 
        processing: true,
    });
     

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
    var mapContainer = L.map('mapG20Troublespot', {
        maxZoom: 20,
        minZoom: 1,
        zoomSnap: 0.25,
        zoomControl: false,
        layers: [googleStreet]
    }).setView(initialCenter, initialZoom); 

    // var markerClusterGroup = L.markerClusterGroup(); 
    var icon = L.icon({
        iconUrl: 'http://tourbanyuwangi.com/wp-content/uploads/2018/05/map.png',
        iconSize: [80, 80], // size of the icon
    });

	var coordLat = '<?= $data['getDetail']['data']['latitude'] ?>';
    var coordLng = '<?= $data['getDetail']['data']['longitude'] ?>';

	L.marker([parseFloat(coordLat), parseFloat(coordLng)]).addTo(mapContainer);  

	mapContainer.setView(initialCenter, initialZoom);
                    
                    
    var baseMaps = {
        "Google Map Street": googleStreet,
        "Google Map Satelite": googleSatelite,
        "Google Map Hybrid": googleHybrid,
        "Google Map Terrain": googleTerrain,
    };
    var overlayMaps = {};
    L.control.layers(baseMaps, overlayMaps, {
        position: 'bottomleft'
    }).addTo(mapContainer);
    L.control.zoom({
        position: 'bottomright'
    }).addTo(mapContainer);

    mapContainer.flyTo([parseFloat(coordLat), parseFloat(coordLng)], 20); 




 
  });
</script> 
