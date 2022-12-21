<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item">Panic Button</li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Detail Panic Button</li>
    </ol>
</nav>

<div class="page">
    <div class="card">
        <div class="card-body">
            <div class="row">

                <div class="col-md-6">
                    <p class="fs-4 fw-bold">DETAIL LAPORAN PANIC BUTTON</p>
                </div>
                <div class="col-md-6">
                    <button type="button" class=" btn btn-primary waves-effect float-end" data-bs-toggle="modal" data-bs-target=".BuatInstruksi" style="width: 35%;">Buat Instruksi <i class="mdi mdi-square-edit-outline"></i></button>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <!-- <div class="row">
                        <div class="col-6 d-flex text-primary">
                            <div class="">
                                <p>NAMA PETUGAS PELAPOR</p>
                                <p>KATEGORI LAPORAN</p>
                                <p>DESKRIPSI</p>
                                <p>WAKTU INSIDEN</p>
                                <p>NOMOR LAPORAN</p>
                            </div>
                            <div class="ms-3">
                                <p>:</p>
                                <p>:</p>
                                <p>:</p>
                                <p>:</p>
                                <p>:</p>
                            </div>
                            <div class="ms-3">
                                <p><?= $data['getDetail']['name_officer']; ?></p>
                                <p><?= $data['getDetail']['categori']; ?></p>
                                <p><?= $data['getDetail']['description']; ?></p>
                                <p><?= $data['getDetail']['created_at']; ?></p>
                                <p><?= $data['getDetail']['code']; ?></p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="rounded float-end" style="background-color: grey; height:27vh; width: 60vh;"></div>
                        </div>
                    </div> -->
                    <div class="row mb-3">
                        <div class="col-3"></div>
                        <div class="col-6">
                            <img src=ENV_API_BASE_URL."uploads/laporan/<?= $data['getDetail']['foto']; ?>" class="rounded float-end" style="height:100%; width: 100%;">
                        </div>
                        <div class="col-3"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <p>NAMA PETUGAS PELAPOR</p>
                        </div>
                        <div class="col-md-8">
                            <p>: <?= ($data['getDetail']['officer']['name_officer'] != null ? $data['getDetail']['officer']['name_officer'] : '-'); ?></p>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col-md-4">
                            <p>KATEGORI LAPORAN</p>
                        </div>
                        <div class="col-md-8">
                            <p>: <?= ($data['getDetail']['categori'] != null ? $data['getDetail']['categori'] : '-'); ?></p>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col-md-4">
                            <p>NOMOR LAPORAN</p>
                        </div>
                        <div class="col-md-8">
                            <p>: <?= ($data['getDetail']['code'] != null ? $data['getDetail']['code'] : '-'); ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <p>WAKTU INSIDEN</p>
                        </div>
                        <div class="col-md-8">
                            <p>: <?= format_indoTglWkt($data['getDetail']['created_at']); ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <p>DESKRIPSI</p>
                        </div>
                        <div class="col-md-8">
                            <p>: <?= ($data['getDetail']['code'] != null ? nl2br($data['getDetail']['description']) : '-'); ?></p>
                        </div>
                    </div>
                    <div style="height: 400px;" class="mt-3 rounded" id="mapG20Dashboard"></div>
                </div>
            </div>
            <div class="col-12 mt-3">
                <a href="<?= base_url('laporan/Panic'); ?>"><button class="btn btn-sm btn-primary float-end" style="width: 40vh;">Kembali</button></a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade BuatInstruksi" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Buat Instruksi</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <input type="hidden" name="<?= $csrf_name; ?>" value="<?= $csrf_token; ?>" style="display: none">
                    <div class="material-selectfield mb-3">
                        <select name="" id="" class="form-select">
                            <option value="">Pilih Tim</option>
                            <option value="">Rusia</option>
                            <option value="">Amerikat Serikat</option>
                            <option value="">Indonesia</option>
                        </select>
                        <label class="labelmui">Tim</label>
                    </div>
                    <div class="material-textfield mb-3">
                        <input style="width: 100%;" name="" placeholder="" type="text">
                        <label class="labelmui">Subjek</label>
                    </div>
                    <div class="material-textfield mb-3">
                        <input style="width: 100%;" name="" placeholder="" type="text">
                        <label class="labelmui">Instruksi</label>
                    </div>
                    <div class="material-textfield mb-3">
                        <input style="width: 100%;" name="" placeholder="" type="text">
                        <label class="labelmui">Lokasi</label>
                    </div>
                    <div style="height: 50vh;" class="mt-3 rounded" id="mapG20Dashboard"></div>
                    <div class="col-md-6 float-end">
                        <button class="btn btn-primary float-end" type="submit">Simpan</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {

        var initialCenter = [-0.8458708, 118.8661073];
        var initialZoom = 4.5;
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
            layers: [googleSatelite]
        }).setView(initialCenter, initialZoom);

        var icon = L.icon({
            iconUrl: 'http://tourbanyuwangi.com/wp-content/uploads/2018/05/map.png',
            iconSize: [80, 80], // size of the icon
        });

        var coordLat = '<?= $data['getDetail']['coordinate']['latitude'] ?>';
        var coordLng = '<?= $data['getDetail']['coordinate']['longitude'] ?>';

        // console.log({a:coordLat , b:coordLng});

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
            position: 'topright'
        }).addTo(mapContainer);
        L.control.zoom({
            position: 'bottomleft'
        }).addTo(mapContainer);

        mapContainer.flyTo([parseFloat(coordLat), parseFloat(coordLng)], 20);


    });
</script>