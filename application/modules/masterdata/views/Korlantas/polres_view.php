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
    <button type="button" class="btn btn-primary waves-effect mb-2" data-bs-toggle="modal" data-bs-target=".TambahPolres">Tambah Polres</button>
    <div class="card">

        <div class="card-body">

            <table id="datatable" class="table dt-responsive w-100">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Polda</th>
                        <th>Polda</th>
                        <th width="40%">Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>DItlantas Metro Jaya</td>
                        <td>Metro Jaya</td>
                        <td>JL. DAAN MOGOT KM 11 JAKARTA BARAT </td>
                        <td>
                            <button style="background-color:transparent ; border:none" data-bs-toggle="modal" data-bs-target=".DetailPolres">
                                <h3 style=" color:#003A91"><i class="mdi mdi-eye"></i></h3>
                            </button>
                            <button style="background-color:transparent ; border:none" data-bs-toggle="modal" data-bs-target=".UbahPolres">
                                <h3 style="color:#67676D"><i class="mdi mdi-pencil"></i></h3>
                            </button>
                            <button style="background-color:transparent ; border:none" id="HapusPolres">
                                <h3 style="color:#ED171D"><i class="mdi mdi-trash-can"></i></h3>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Polresta Tanggerang</td>
                        <td>Metro Jaya</td>
                        <td>JL. DAAN MOGOT NO. 52 SUKASARI TANGERANG KOTA</td>
                        <td>
                            <button style="background-color:transparent ; border:none" data-bs-toggle="modal" data-bs-target=".DetailPolres">
                                <h3 style=" color:#003A91"><i class="mdi mdi-eye"></i></h3>
                            </button>
                            <button style="background-color:transparent ; border:none" data-bs-toggle="modal" data-bs-target=".UbahPolres">
                                <h3 style="color:#67676D"><i class="mdi mdi-pencil"></i></h3>
                            </button>
                            <button style="background-color:transparent ; border:none" id="HapusPolres">
                                <h3 style="color:#ED171D"><i class="mdi mdi-trash-can"></i></h3>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Polrestabes Bandung</td>
                        <td>Jawa Barat</td>
                        <td>JL. JAWA NO 1 BANDUNG</td>
                        <td>
                            <button style="background-color:transparent ; border:none" data-bs-toggle="modal" data-bs-target=".DetailPolres">
                                <h3 style=" color:#003A91"><i class="mdi mdi-eye"></i></h3>
                            </button>
                            <button style="background-color:transparent ; border:none" data-bs-toggle="modal" data-bs-target=".UbahPolres">
                                <h3 style="color:#67676D"><i class="mdi mdi-pencil"></i></h3>
                            </button>
                            <button style="background-color:transparent ; border:none" id="HapusPolres">
                                <h3 style="color:#ED171D"><i class="mdi mdi-trash-can"></i></h3>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>
<!-- End Page -->


<div class="modal fade TambahPolres" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Tambah Polres</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="form">
                    <div class="row">
                        <div class="col-md-3">
                            <p class="fw-bold fs-5">Icon Polres</p>
                            <input type="file" name="photo" class="dropify rounded" data-allowed-file-extensions="jpg png jpeg" data-default-file="<?php echo base_url(); ?>assets/no_image.png" />
                        </div>
                        <div class="col-md-9">
                            <div class="material-selectfield mb-3">
                                <select name="" id="" style="width:105% ;">
                                    <!-- <select name="" id=""  multiple required> -->
                                    <option value="">Jawa Barat</option>
                                    <option value="">Jawa Tengah</option>
                                    <option value="">Jawa Timur</option>
                                </select>
                                <label class=" labelmui">Polda</label>
                            </div>
                            <div class="material-textfield">
                                <input type="text" name="" id="" style="width:105% ;">
                                <label for="" class="labelmui">Nama Polres</label>
                            </div>

                        </div>
                        <div class="col-md-12 mt-2">
                            <div class="material-textfield">
                                <input type="text" name="" id="" style="width:107.3%; margin: 0 0 0 -2.7vh">
                                <label for="" class="labelmui">Alamat</label>
                            </div>

                        </div>
                    </div>
                    <div class="mb-3 rounded" style="height: 22vh; ;" id="mapG20Dashboard"></div>


                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary waves-effect float-end" style="width: 25%; letter-spacing: 2px;">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade UbahPolres" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Edit Polres</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="form">
                    <div class="row">
                        <div class="col-md-3">
                            <p class="fw-bold fs-5">Icon Polres</p>
                            <input type="file" name="photo" class="dropify rounded" data-allowed-file-extensions="jpg png jpeg" data-default-file="<?php echo base_url(); ?>assets/no_image.png" />
                        </div>
                        <div class="col-md-9">
                            <div class="material-selectfield mb-3">
                                <select name="" id="" style="width:105% ;">
                                    <!-- <select name="" id=""  multiple required> -->
                                    <option value="">Jawa Barat</option>
                                    <option value="">Jawa Tengah</option>
                                    <option value="">Jawa Timur</option>
                                </select>
                                <label class=" labelmui">Polda</label>
                            </div>
                            <div class="material-textfield">
                                <input type="text" name="" id="" style="width:105% ;">
                                <label for="" class="labelmui">Nama Polres</label>
                            </div>

                        </div>
                        <div class="col-md-12 mt-2">
                            <div class="material-textfield">
                                <input type="text" name="" id="" style="width:107.3%; margin: 0 0 0 -2.7vh">
                                <label for="" class="labelmui">Alamat</label>
                            </div>

                        </div>
                    </div>
                    <div class="mb-3 rounded" style="height: 22vh; ;" id="mapG20Dashboard"></div>


                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary waves-effect float-end" style="width: 25%; letter-spacing: 2px;">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade DetailPolres" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Detail Polres</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="form">
                    <div class="row">
                        <div class="col-md-3">
                            <p class="fw-bold fs-5">Icon Polres</p>
                            <input type="file" name="photo" class="dropify rounded" data-allowed-file-extensions="jpg png jpeg" data-default-file="<?php echo base_url(); ?>assets/no_image.png" />
                        </div>
                        <div class="col-md-9">
                            <div class="material-selectfield mb-3">
                                <select name="" id="" style="width:105% ;">
                                    <!-- <select name="" id=""  multiple required> -->
                                    <option value="">Jawa Barat</option>
                                    <option value="">Jawa Tengah</option>
                                    <option value="">Jawa Timur</option>
                                </select>
                                <label class=" labelmui">Polda</label>
                            </div>
                            <div class="material-textfield">
                                <input type="text" name="" id="" style="width:105% ;">
                                <label for="" class="labelmui">Nama Polres</label>
                            </div>

                        </div>
                        <div class="col-md-12 mt-2">
                            <div class="material-textfield">
                                <input type="text" name="" id="" style="width:107.3%; margin: 0 0 0 -2.7vh">
                                <label for="" class="labelmui">Alamat</label>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary waves-effect float-end" style="width: 25%; letter-spacing: 2px;">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<script>
    $(document).ready(function() {
        $('.dropify').dropify();

        $('#datatable').DataTable();
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




    });


    $("#HapusPolres").click(function() {
        Swal.fire({
            title: 'Apakah anda ingin menghapus data ini?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#C61318',
            cancelButtonColor: '#003A91',
            cancelButtonText: 'Batal',
            confirmButtonText: 'Hapus'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: 'Berhasil',
                    text: "Data berhasil dihapus",
                    icon: 'success',
                    confirmButtonColor: '#003A91',
                    confirmButtonText: 'OK'
                })
            }
        })
    })
</script>