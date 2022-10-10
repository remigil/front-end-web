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
                            <?php echo $data['getDetail']['data']['polda_id'];?>
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
                            <?php echo $data['getDetail']['data']['polres_id'];?>
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

    var markerClusterGroup = L.markerClusterGroup(); 
    var icon = L.icon({
        iconUrl: 'http://tourbanyuwangi.com/wp-content/uploads/2018/05/map.png',
        iconSize: [80, 80], // size of the icon
    });
                    
                    
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

    var arrayData = $.grep(data, function (element, index) {
        return element.coordinate != null && element.coordinate != '';
    });
    // console.log(arrayData); 

    for (let i = 0; i < arrayData.length; i++) { 
        var cordinate = arrayData[i].coordinate;
        var latlong =  cordinate.split(',');
        var latitude = parseFloat(latlong[0]);
        var longitude = parseFloat(latlong[1]);
        // console.log({a:latitude , b:longitude});

        markerClusterGroup.addLayer(
            L.marker([latitude,longitude], {
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




 
  });
</script> 
