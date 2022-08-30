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
    <button type="button" class="btn btn-primary waves-effect mb-2" data-bs-toggle="modal" data-bs-target=".TambahPetugas">Tambah Petugas</button>
    <div class="card">

        <div class="card-body">

            <table id="datatable" class="table dt-responsive w-100">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NRP</th>
                        <th>Nama Petugas</th>
                        <th>Status</th>
                        <th>No. Handphone</th>
                        <th>Pangkat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>DN1234VS</td>
                        <td>IKBAL</td>
                        <td>ACTIVE</td>
                        <td>089570190000</td>
                        <td>Bripda</td>
                        <td>
                            <button type="button" class="btn btn-sm btn-primary waves-effect" data-bs-toggle="modal" data-bs-target=".DetailPetugas"><i class="mdi mdi-eye "></i></button>
                            <button type="button" class="btn btn-sm btn-primary waves-effect" data-bs-toggle="modal" data-bs-target=".UbahPetugas"><i class="mdi mdi-pencil-outline "></i></button>
                            <button type="button" class="btn btn-sm btn-primary waves-effect" id="HapusPetugas"><i class="mdi mdi-trash-can-outline "></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>DN1234VZ</td>
                        <td>FIKRI</td>
                        <td>INACTIVE</td>
                        <td>081370190000</td>
                        <td>Bharaka</td>
                        <td>
                            <button type="button" class="btn btn-sm btn-primary waves-effect" data-bs-toggle="modal" data-bs-target=".DetailPetugas"><i class="mdi mdi-eye "></i></button>
                            <button type="button" class="btn btn-sm btn-primary waves-effect" data-bs-toggle="modal" data-bs-target=".UbahPetugas"><i class="mdi mdi-pencil-outline "></i></button>
                            <button type="button" class="btn btn-sm btn-primary waves-effect" id="HapusPetugas"><i class="mdi mdi-trash-can-outline "></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>DN1234NU</td>
                        <td>AJIS</td>
                        <td>ACTIVE</td>
                        <td>085670190002</td>
                        <td>Briptu</td>
                        <td>
                            <button type="button" class="btn btn-sm btn-primary waves-effect" data-bs-toggle="modal" data-bs-target=".DetailPetugas"><i class="mdi mdi-eye "></i></button>
                            <button type="button" class="btn btn-sm btn-primary waves-effect" data-bs-toggle="modal" data-bs-target=".UbahPetugas"><i class="mdi mdi-pencil-outline "></i></button>
                            <button type="button" class="btn btn-sm btn-primary waves-effect" id="HapusPetugas"><i class="mdi mdi-trash-can-outline "></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>
<!-- End Page -->


<div class="modal fade TambahPetugas" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Tambah Petugas</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="form">
                    <div class="row">
                        <div class="col-md-3" style="margin-top:1vh">
                            <input type="file" name="photo" class="dropify rounded" data-allowed-file-extensions="jpg png jpeg" data-default-file="<?php echo base_url(); ?>assets/no_image.png" />
                        </div>
                        <div class="col-md-9">
                            <div class="material-textfield">
                                <input type="text" name="" id="" style="width:105%; margin-bottom:-2vh">
                                <label for="" class="labelmui">Nama Petugas</label>
                            </div>

                            <div class="material-textfield">
                                <input type="text" name="" id="" style=" width:105%; margin-bottom:-2vh">
                                <label for="" class="labelmui">NRP</label>
                            </div>
                            <div class="row mb-4">
                                <div class="material-textfield">
                                    <input type="hidden" name="" id="">
                                    <label for="" class="labelmui">Jenis Kelamin</label>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check" style="margin: -1vh 0 0 2.7vh">
                                        <input class="form-check-input" type="radio" name="jk" id="laki-laki" checked>
                                        <label class="form-check-label" for="laki-laki">
                                            Laki - laki
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3 ">
                                    <div class="form-check" style="margin: -1vh 0 0 2.7vh">
                                        <input class="form-check-input" type="radio" name="jk" id="perempuan">
                                        <label class="form-check-label" for="perempuan">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="material-textfield">
                                <input type="date" name="" id="" style="width:105%; margin-bottom:-2vh">
                                <label for="" class="labelmui">Tanggal Lahir</label>
                            </div>
                            <div class="material-textfield">
                                <input type="text" name="" id="" style="width:105%; margin-bottom:-2vh">
                                <label for="" class="labelmui">No. Handphone</label>
                            </div>
                            <div class="material-textfield">
                                <input type="text" name="" id="" style="width:105%; margin-bottom:-2vh">
                                <label for="" class="labelmui">Pangkat</label>
                            </div>
                            <div class="row mb-3">
                                <div class="material-textfield">
                                    <input type="hidden" name="" id="">
                                    <label for="" class="labelmui">Status</label>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check" style="margin: -1vh 0 0 2.7vh">
                                        <input class=" form-check-input" type="radio" name="flexRadioDefault" id="active" checked>
                                        <label class="form-check-label" for="active">
                                            ACTIVE
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check" style="margin: -1vh 0 0 2.7vh"">
                                        <input class=" form-check-input" type="radio" name="flexRadioDefault" id="inactive">
                                        <label class="form-check-label" for="inactive">
                                            INACTIVE
                                        </label>
                                    </div>
                                </div>
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

<div class="modal fade UbahPetugas" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Edit Petugas</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="form">
                    <div class="row">
                        <div class="col-md-3" style="margin-top:1vh">
                            <input type="file" name="photo" class="dropify rounded" data-allowed-file-extensions="jpg png jpeg" data-default-file="<?php echo base_url(); ?>assets/no_image.png" />
                        </div>
                        <div class="col-md-9">
                            <div class="material-textfield">
                                <input type="text" name="" id="" style="width:105%; margin-bottom:-2vh">
                                <label for="" class="labelmui">Nama Petugas</label>
                            </div>

                            <div class="material-textfield">
                                <input type="text" name="" id="" style=" width:105%; margin-bottom:-2vh">
                                <label for="" class="labelmui">NRP</label>
                            </div>
                            <div class="row mb-4">
                                <div class="material-textfield">
                                    <input type="hidden" name="" id="">
                                    <label for="" class="labelmui">Jenis Kelamin</label>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check" style="margin: -1vh 0 0 2.7vh">
                                        <input class="form-check-input" type="radio" name="jk" id="laki-laki" checked>
                                        <label class="form-check-label" for="laki-laki">
                                            Laki - laki
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3 ">
                                    <div class="form-check" style="margin: -1vh 0 0 2.7vh">
                                        <input class="form-check-input" type="radio" name="jk" id="perempuan">
                                        <label class="form-check-label" for="perempuan">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="material-textfield">
                                <input type="date" name="" id="" style="width:105%; margin-bottom:-2vh">
                                <label for="" class="labelmui">Tanggal Lahir</label>
                            </div>
                            <div class="material-textfield">
                                <input type="text" name="" id="" style="width:105%; margin-bottom:-2vh">
                                <label for="" class="labelmui">No. Handphone</label>
                            </div>
                            <div class="material-textfield">
                                <input type="text" name="" id="" style="width:105%; margin-bottom:-2vh">
                                <label for="" class="labelmui">Pangkat</label>
                            </div>
                            <div class="row mb-3">
                                <div class="material-textfield">
                                    <input type="hidden" name="" id="">
                                    <label for="" class="labelmui">Status</label>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check" style="margin: -1vh 0 0 2.7vh">
                                        <input class=" form-check-input" type="radio" name="flexRadioDefault" id="active" checked>
                                        <label class="form-check-label" for="active">
                                            ACTIVE
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check" style="margin: -1vh 0 0 2.7vh"">
                                        <input class=" form-check-input" type="radio" name="flexRadioDefault" id="inactive">
                                        <label class="form-check-label" for="inactive">
                                            INACTIVE
                                        </label>
                                    </div>
                                </div>
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


<div class="modal fade DetailPetugas" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Detail Petugas</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="form">
                    <div class="row">
                        <div class="col-md-3" style="margin-top:1vh">
                            <input type="file" name="photo" class="dropify rounded" data-allowed-file-extensions="jpg png jpeg" data-default-file="<?php echo base_url(); ?>assets/no_image.png" />
                        </div>
                        <div class="col-md-9">
                            <div class="material-textfield">
                                <input type="text" name="" id="" style="width:105%; margin-bottom:-2vh">
                                <label for="" class="labelmui">Nama Petugas</label>
                            </div>

                            <div class="material-textfield">
                                <input type="text" name="" id="" style=" width:105%; margin-bottom:-2vh">
                                <label for="" class="labelmui">NRP</label>
                            </div>
                            <div class="row mb-4">
                                <div class="material-textfield">
                                    <input type="hidden" name="" id="">
                                    <label for="" class="labelmui">Jenis Kelamin</label>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check" style="margin: -1vh 0 0 2.7vh">
                                        <input class="form-check-input" type="radio" name="jk" id="laki-laki" checked>
                                        <label class="form-check-label" for="laki-laki">
                                            Laki - laki
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3 ">
                                    <div class="form-check" style="margin: -1vh 0 0 2.7vh">
                                        <input class="form-check-input" type="radio" name="jk" id="perempuan">
                                        <label class="form-check-label" for="perempuan">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="material-textfield">
                                <input type="date" name="" id="" style="width:105%; margin-bottom:-2vh">
                                <label for="" class="labelmui">Tanggal Lahir</label>
                            </div>
                            <div class="material-textfield">
                                <input type="text" name="" id="" style="width:105%; margin-bottom:-2vh">
                                <label for="" class="labelmui">No. Handphone</label>
                            </div>
                            <div class="material-textfield">
                                <input type="text" name="" id="" style="width:105%; margin-bottom:-2vh">
                                <label for="" class="labelmui">Pangkat</label>
                            </div>
                            <div class="row mb-3">
                                <div class="material-textfield">
                                    <input type="hidden" name="" id="">
                                    <label for="" class="labelmui">Status</label>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check" style="margin: -1vh 0 0 2.7vh">
                                        <input class=" form-check-input" type="radio" name="flexRadioDefault" id="active" checked>
                                        <label class="form-check-label" for="active">
                                            ACTIVE
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check" style="margin: -1vh 0 0 2.7vh"">
                                        <input class=" form-check-input" type="radio" name="flexRadioDefault" id="inactive">
                                        <label class="form-check-label" for="inactive">
                                            INACTIVE
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <button type="button" class="btn btn-primary waves-effect float-end" data-bs-dismiss="modal" aria-label="Close" style="width: 25%; letter-spacing: 2px;">KEMBALI</button>
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


    $("#HapusPetugas").click(function() {
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