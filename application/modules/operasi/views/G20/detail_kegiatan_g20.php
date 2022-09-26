<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item">Jadwal Kegiatan</li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Detail Jadwal Kegiatan</li>
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
                    <a href="<?php echo base_url()?>operasi/Kegiatan/Edit/<?php echo $data['getDetail']['data']['id'];?>"> 
                        <button type="button" class=" btn btn-primary waves-effect float-end" style="width: 25%;">Edit <i class="mdi mdi-square-edit-outline"></i></button>
                    </a>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row"> 
                        <div class="col-2">
                            <p>KEGIATAN</p> 
                            <p>TANGGAL</p>
                            <p>WAKTU</p>
                            <p>LOKASI</p>
                        </div>
                        <div class="col-1">
                            <p>:</p>
                            <p>:</p>
                            <p>:</p>
                            <p>:</p>
                        </div>
                        <div class="col-3">
                            <p><?php echo $data['getDetail']['data']['activity'];?></p> 
                            <p><?php echo format_indo($data['getDetail']['data']['date_schedule']);?></p>
                            <p><?php echo $data['getDetail']['data']['start_time'];?> - <?php echo $data['getDetail']['data']['start_time'];?>  WITA</p>
                            <p><?php echo $data['getDetail']['data']['address_schedule'];?></p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="">
                <p class="fs-4 fw-bold">PETA LOKASI</p>
            </div>
            <div style="height: 50vh;" class="mt-3 rounded" id="mapG20Dashboard"></div>


            <div class="col-12 mt-3">
                <a href="<?= base_url('operasi/Kegiatan'); ?>"><button class="btn btn-sm btn-primary float-end" style="width: 40vh;">Kembali</button></a>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {

        var initialCenter = [-8.751740, 115.149643];
        var initialZoom = 11.65;
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
            maxZoom: 20,
            minZoom: 1,
            zoomSnap: 0.25,
            zoomControl: false,
            layers: [googleHybrid]
        }).setView(initialCenter, initialZoom); 

        var cords = "<?php echo $data['getDetail']['data']['coordinate_schedule'];?>";
        var latlongJadwal =  cords.split(',');
        var latitudeJadwal = parseFloat(latlongJadwal[0]);
        var longitudeJadwal = parseFloat(latlongJadwal[1]); 
        // console.log({a:latitudeJadwal , b:longitudeJadwal});

        L.marker([latitudeJadwal,longitudeJadwal], { icon: L.divIcon({ 
                html: `<img src="<?php echo base_url();?>assets/icon/jadwal kegiatan.png" style="margin-top: -10px;margin-left: -10px;">`,
                iconSize: [10, 10],
                iconAnchor: [5, 20]
            }) 
        }).addTo(mapContainer);  

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
</script>