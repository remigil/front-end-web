<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item ">Input Data</li>
        <li class="breadcrumb-item active fw-bold" aria-current="page"><a href="#"><?= $title; ?></a></li>
    </ol>
</nav>
<!-- </div> -->
<div class="page">

    <div class="card">

        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="col-md-12">
                        <p class="fs-3 fw-medium">Foto Lokasi</p>
                        <div class="rounded" style="background-color:grey ; width: 22vw; height:45vh"></div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="material-textfield">
                                    <input type="text" name="" id="" style="width:110%; margin:0 0 0 0">
                                    <label for="" class="labelmui">No. TS</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="material-textfield">
                                    <input type="date" name="" id="" style="width:110%; margin:0 0 0 -1.72vh">
                                    <label for="" class="labelmui">Tanggal Pelaporan</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="material-textfield">
                            <input type="text" name="" id="" style="width:102.7%;">
                            <label for="" class="labelmui">Nama Pelapor</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="material-selectfield">
                            <select name="" id="" style="width:102.7%;">
                                <option value="">Pilih Polda</option>
                                <option value="">Polda 1</option>
                                <option value="">Polda 2</option>
                                <option value="">Polda 3</option>
                                <option value="">Polda 4</option>
                            </select>
                            <label for="" class="labelmui">Polda</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="material-selectfield">
                            <select name="" id="" style="width:102.7%;">
                                <option value="">Pilih Polres</option>
                                <option value="">Polres 1</option>
                                <option value="">Polres 2</option>
                                <option value="">Polres 3</option>
                                <option value="">Polres 4</option>
                            </select>
                            <label for="" class="labelmui">Polres</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="material-textfield">
                            <input type="text" name="" id="" style="width:102.7%;">
                            <label for="" class="labelmui">Penyebab Kemacetan</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="material-textfield">
                        <input type="text" name="" id="" style="width:103.6%; margin: 0 0 0 -2.7vh">
                        <label for="" class="labelmui">Lokasi Kejadian</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="material-textfield">
                        <input type="text" name="" id="" style="width:107.2%; margin: 0 0 0 -2.7vh">
                        <label for="" class=" labelmui">Lattitude</label>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="material-textfield">
                        <input type="text" name="" id="" style="width:107.2%; margin: 0 0 0 -2.7vh">
                        <label for="" class=" labelmui">Longitude</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mt-2 mb-3 rounded" id="mapG20Dashboard" style="height: 40vh; width:100%"></div>
                </div>
                <div class="col-md-12">
                    <div class="material-textfield">
                        <input type="text" name="" id="" style="width:103.6%; margin: 0 0 0 -2.7vh">
                        <label for="" class="labelmui">Keterangan</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="material-textfield">
                        <input type="text" name="" id="" style="width:103.6%; margin: 0 0 0 -2.7vh">
                        <label for="" class="labelmui">Permasalahan</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="material-textfield">
                        <input type="text" name="" id="" style="width:103.6%; margin: 0 0 0 -2.7vh">
                        <label for="" class="labelmui">Rekomendasi</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="material-textfield">
                        <input type="text" name="" id="" style="width:103.6%; margin: 0 0 0 -2.7vh">
                        <label for="" class="labelmui">Tindakan</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="material-textfield">
                        <input type="text" name="" id="" style="width:103.6%; margin: 0 0 0 -2.7vh">
                        <label for="" class="labelmui">Hasil yang dicapai</label>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <button type="button" class="btn btn-primary waves-effect float-end mt-3" style="width: 20%; letter-spacing: 2px;">SIMPAN</button>
            </div>
        </div>

    </div>
</div>
<!-- End Page -->


<div class="modal fade TambahRencanaOperasi" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Tambah Rencana Operasi</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="fw-bold ms-4"> Identitas Operasi</p>
                <form action="" class="form">
                    <div class="material-textfield">
                        <input type="text" name="" id="" style="width:100% ;">
                        <label for="" class="labelmui">Jenis Operasi yang Akan Dilaksanakan</label>
                    </div>
                    <div class="material-textfield">
                        <input type="text" name="" id="" style="width:100% ;">
                        <label for="" class="labelmui">Nama Operasi</label>
                    </div>
                    <div class="material-selectfield mb-3">
                        <select name="" id="">
                            <!-- <select name="" id=""  multiple required> -->
                            <option value="">Jawa Barat</option>
                            <option value="">Jawa Tengah</option>
                            <option value="">Jawa Timur</option>
                        </select>
                        <label class="labelmui">Polda</label>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="material-textfield">
                                <input type="date" name="" id="" style="width:100% ;">
                                <label for="" class="labelmui">Tanggal Mulai</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="material-textfield">
                                <input type="date" name="" id="" style="width:100% ;">
                                <label for="" class="labelmui">Tanggal Selesai</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary waves-effect float-end me-4" style="width: 25%; letter-spacing: 2px;">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade UbahRencanaOperasi" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Edit Rencana Operasi</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="fw-bold ms-4"> Identitas Operasi</p>
                <form action="" class="form">
                    <div class="material-textfield">
                        <input type="text" name="" id="" style="width:100% ;">
                        <label for="" class="labelmui">Jenis Operasi yang Akan Dilaksanakan</label>
                    </div>
                    <div class="material-textfield">
                        <input type="text" name="" id="" style="width:100% ;">
                        <label for="" class="labelmui">Nama Operasi</label>
                    </div>
                    <div class="material-selectfield mb-3">
                        <select name="" id="">
                            <!-- <select name="" id=""  multiple required> -->
                            <option value="">Jawa Barat</option>
                            <option value="">Jawa Tengah</option>
                            <option value="">Jawa Timur</option>
                        </select>
                        <label class="labelmui">Polda</label>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="material-textfield">
                                <input type="date" name="" id="" style="width:100% ;">
                                <label for="" class="labelmui">Tanggal Mulai</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="material-textfield">
                                <input type="date" name="" id="" style="width:100% ;">
                                <label for="" class="labelmui">Tanggal Selesai</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary waves-effect float-end me-4" style="width: 25%; letter-spacing: 2px;">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade DetailRencanaOperasi" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Detail Rencana Operasi</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="fw-bold ms-4"> Identitas Operasi</p>
                <form action="" class="form">
                    <div class="material-textfield">
                        <input type="text" name="" id="" style="width:100% ;">
                        <label for="" class="labelmui">Jenis Operasi yang Akan Dilaksanakan</label>
                    </div>
                    <div class="material-textfield">
                        <input type="text" name="" id="" style="width:100% ;">
                        <label for="" class="labelmui">Nama Operasi</label>
                    </div>
                    <div class="material-selectfield mb-3">
                        <select name="" id="">
                            <!-- <select name="" id=""  multiple required> -->
                            <option value="">Jawa Barat</option>
                            <option value="">Jawa Tengah</option>
                            <option value="">Jawa Timur</option>
                        </select>
                        <label class="labelmui">Polda</label>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="material-textfield">
                                <input type="date" name="" id="" style="width:100% ;">
                                <label for="" class="labelmui">Tanggal Mulai</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="material-textfield">
                                <input type="date" name="" id="" style="width:100% ;">
                                <label for="" class="labelmui">Tanggal Selesai</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary waves-effect float-end me-4" style="width: 25%; letter-spacing: 2px;">KEMBALI</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade UploadRencanaOperasi" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title w-100 text-center" id="myLargeModalLabel">Upload File</h5>
            </div>
            <div class="modal-body">

                <form action="" class="form">
                    <div class="col-md-12">
                        <input type="file" name="photo" class="dropify rounded" data-allowed-file-extensions="jpg png jpeg" data-default-file="<?php echo base_url(); ?>assets/no_image.png" />
                    </div>
                    <button type="submit" class="btn btn-primary waves-effect float-end mt-3" style="width: 100%; letter-spacing: 2px;">UPLOAD FILE</button>
                </form>
            </div>
        </div><!-- /.modal-content -->

    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
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
</script>