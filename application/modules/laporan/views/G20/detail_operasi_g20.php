<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Detail Operasi</li>
    </ol>
</nav>

<div class="page">
    <div class="card">
        <div class="card-body">
            <div class="row">

                <div class="col-md-6">
                    <p class="fs-4 fw-bold">DETAIL JADWAL KEGIATAN</p>
                </div>
                <div class="col-md-6">

                    <button type="button" class=" btn btn-primary waves-effect float-end" style="width: 25%;">Edit <i class="mdi mdi-square-edit-outline"></i></button>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row">

                        <div class="col-12">
                            <div class="row mb-3">
                                <div class="col-3"></div>
                                <div class="col-6">
                                    <img src="<?= ENV_API_BASE_URL?>uploads/laporan/<?= $data['getDetail']['foto']; ?>" class="rounded float-end" style="height:100%; width: 100%;">
                                </div>
                                <div class="col-3"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <p>NAMA PETUGAS PELAPOR</p>
                                </div>
                                <div class="col-md-8">
                                    <p>: <?= $data['getDetail']['name_officer']; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <p>KATEGORI LAPORAN</p>
                                </div>
                                <div class="col-md-8">
                                    <p>: <?= $data['getDetail']['categori']; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <p>WAKTU</p>
                                </div>
                                <div class="col-md-8">
                                    <p>: <?= format_indoTglWkt($data['getDetail']['created_at']); ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <p>NOMOR TELEPON</p>
                                </div>
                                <div class="col-md-8">
                                    <p>: <?= $data['getDetail']['phone_officer']; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <p>DESKRIPSI</p>
                                </div>
                                <div class="col-md-8">
                                    <p>: <?= nl2br($data['getDetail']['description']); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="height: 400px;" class="mt-3 rounded" id="mapG20Dashboard"></div>
                </div>
            </div>




            <div class="col-12 mt-3">
                <a href="<?= base_url('laporan/Operasi'); ?>"><button class="btn btn-sm btn-primary float-end" style="width: 40vh;">Kembali</button></a>

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