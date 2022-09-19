<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Edit <?= $title; ?></li>
    </ol>
</nav>
<!-- </div> -->

<div class="page">
    <div class="card">
        
        <div class="card-body">
        <form class="form" method="post" enctype="multipart/form-data">
        <input hidden name="id" value="<?php echo $data['getDetail']['data']['id'];?>" type="text">
    <div class="row">
            <div class="col-md-12">
            <a href="<?= base_url('troublespot/Troublespot'); ?>" class="btn btn-primary waves-effect float-end ms-4" style="width: 25%;">Kembali</a>

            
            </div>
                            <div class="col-md-6">
                                <div class="material-textfield">
                                    <input style="width: 100%;" name="no_ts" value="<?php echo $data['getDetail']['data']['no_ts'];?>" type="text">
                                    <label for="" class="labelmui">No. TS</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="material-textfield">
                                    <input required style="width: 100%;" name="tanggal_pelaporan" id="datepicker" class="form-control" value="<?php echo substr($data['getDetail']['data']['report_date'],0,10);?>" type="date" >
                                    <label for="" class="labelmui">Tanggal Pelaporan</label>
                            </div>    
                    </div>
                    <div class="col-md-6">
                        <div class="material-textfield">
                            <input style="width: 100%;" name="nama_pelapor" value="<?php echo $data['getDetail']['data']['reporter_name'];?>" type="text">
                            <label for="" class="labelmui">Nama Pelapor</label>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="material-textfield">
                            <input style="width: 100%;" name="penyebab_kemacetan" value="<?php echo $data['getDetail']['data']['traffic_reason'];?>" type="text">
                            <label for="" class="labelmui">Penyebab Kemacetan</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="material-selectfield">
                        <select class="form-select" name="polres" id="polres">
                        <option value="1">POLRESTABES BANDUNG</option>
                        <option value="2">POLRESTA BOGOR</option>
                        <option value="3">POLRES BOGOR</option>
                        
                        </select>
                            <label for="" class="labelmui">Polres</label>
                        </div>
                    </div>
                    
                
                <div class="col-md-6">
                    <div class="material-textfield">
                        <input style="width: 100%;" name="lokasi_kejadian" value="<?php echo $data['getDetail']['data']['location'];?>" type="text">
                        <label for="" class="labelmui">Lokasi Kejadian</label>
                    </div>
                </div>
                
                <div class="col-md-12">
                    <div class="mt-2 mb-3 rounded" id="mapG20Dashboard" style="height: 50vh; width:100%"></div>
                </div>
                <div class="col-md-6">
                                <div class="material-textfield">
                                    <input style="width: 100%;" name="latitude" value="<?php echo $data['getDetail']['data']['latitude'];?>" type="text">
                                    <label for="" class="labelmui">Latitude</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="material-textfield">
                                    <input style="width: 100%;" name="longitude" value="<?php echo $data['getDetail']['data']['longitude'];?>" type="text">
                                    <label for="" class="labelmui">Longitude</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="material-textfield">
                                    <input style="width: 100%;" name="keterangan" value="<?php echo $data['getDetail']['data']['desc'];?>" type="text">
                                    <label for="" class="labelmui">Keterangan</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="material-textfield">
                                    <input style="width: 100%;" name="permasalahan" value="<?php echo $data['getDetail']['data']['problem'];?>" type="text">
                                    <label for="" class="labelmui">Permasalahan</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="material-textfield">
                                    <input style="width: 100%;" name="rekomendasi" value="<?php echo $data['getDetail']['data']['recommendation'];?>" type="text">
                                    <label for="" class="labelmui">Rekomendasi</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="material-textfield">
                                    <input style="width: 100%;" name="tindakan" value="<?php echo $data['getDetail']['data']['action'];?>" type="text">
                                    <label for="" class="labelmui">Tindakan</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="material-textfield">
                                    <input style="width: 100%;" name="hasil_dicapai" value="<?php echo $data['getDetail']['data']['result'];?>" type="text">
                                    <label for="" class="labelmui">Hasil yang Dicapai</label>
                                </div>
                            </div>
                
            <div class="col-md-12 mb-3">
            <button type="submit" class=" btn btn-primary waves-effect float-end ms-4" style="width: 25%;">Simpan</button>
            <a href="javascript(0);" id="delete" data-id="<?php echo $data['getDetail']['data']['id'];?>" class=" btn btn-danger waves-effect float-end" style="width: 25%;">Hapus<i class="mdi mdi-trash-can-outline"></i></a>
            </div>
            </div>
            </form>
        </div>

    </div>
</div>
<!-- End Page -->


<script>
    $(document).ready(function() {
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


    })

    $(document).ready(function() {
        $(".form").submit(function(e) {
            $("#overlay").fadeIn(300);
            e.preventDefault(); 
            var formData = new FormData($('.form')[0]); 
            $.ajax({
                url: "<?php echo base_url();?>troublespot/Troublespot/storeEdit",
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
                            window.location.href = "<?php echo base_url();?>troublespot/Troublespot";
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

    $("#delete").on('click', function(e) {
        $("#overlay").fadeIn(300);
        e.preventDefault();  
        $.ajax({
            url: "<?php echo base_url();?>troublespot/Troublespot/delete",
            method: "POST",
            data: {
                "id": $(this).data("id"),
            },
            dataType: 'JSON',
            // contentType: false,
            // processData: false,  
            success: function (data) {
                $("#overlay").fadeOut(300);
                if(data['status'] == true){
                    Swal.fire(
                    `${data['message']}`, 
                    '',
                    'success'
                    ).then(function() {  
                        window.location.href = "<?php echo base_url();?>troublespot/Troublespot";
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
</script>