<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item">Uraian Kegiatan</li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Detail Uraian Kegiatan</li>
        <!-- <li class="breadcrumb-item active fw-bold" aria-current="page">Detail Rencana Pengamanan</li> -->
    </ol>
</nav>

<div class="page">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <p class="fs-4 fw-bold">DETAIL RENCANA PENGAMANAN</p>
                </div>
                <div class="col-md-6">
                    <a href="<?php echo base_url() ?>operasi/Renpam/Edit/<?php echo $data['getDetail']['data']['id']; ?>">
                        <button type="button" class=" btn btn-primary waves-effect float-end" style="width: 25%;">Edit <i class="mdi mdi-square-edit-outline"></i></button>
                    </a>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-2">
                            <p>SUBJEK</p>
                            <p>INSTRUKSI</p>
                            <p>LOKASI</p>
                            <p>TANGGAL</p>
                            <p>WAKTU</p>
                            <p>INSTRUKSI KAKOR</p>
                        </div>
                        <div class="col-1">
                            <p>:</p>
                            <p>:</p>
                            <p>:</p>
                            <p>:</p>
                            <p>:</p>
                        </div>
                        <div class="col-3">
                            <p>
                                <?php if ($data['getDetail']['data']['type_renpam'] == 1) { ?>
                                    Patroli
                                <?php } else if ($data['getDetail']['data']['type_renpam'] == 2) { ?>
                                    Pengawalan
                                <?php } else if ($data['getDetail']['data']['type_renpam'] == 3) { ?>
                                    Penjagaan
                                <?php } else if ($data['getDetail']['data']['type_renpam'] == 4) { ?>
                                    Pengaturan
                                <?php } else if ($data['getDetail']['data']['type_renpam'] == 5) { ?>
                                    Penutupan
                                <?php } ?>
                            </p>
                            <p><?php echo $data['getDetail']['data']['name_renpam']; ?></p>
                            <p><?php echo ($data['getDetail']['data']['title_start'] != null ? $data['getDetail']['data']['title_start'] : '-'); ?> To <?php echo ($data['getDetail']['data']['title_end'] !=  null ? $data['getDetail']['data']['title_end'] : '-'); ?></p>
                            <p><?php echo format_indo($data['getDetail']['data']['date']); ?></p>
                            <p><?php echo $data['getDetail']['data']['start_time']; ?> - <?php echo $data['getDetail']['data']['start_time']; ?> WITA</p>
                            <p><?php echo ($data['getDetail']['data']['note_kakor'] != null ? $data['getDetail']['data']['note_kakor'] : '-'); ?></p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="">
                <p class="fs-4 fw-bold">PETA LOKASI</p>
            </div>
            <div style="height: 110vh;" class="mt-3 rounded" id="mapG20Dashboard"></div>


            <div class="col-12 mt-3">
                <a href="<?= base_url('operasi/Renpam'); ?>"><button class="btn btn-sm btn-primary float-end" style="width: 40vh;">Kembali</button></a>
            </div>
        </div>
    </div>
</div>

<textarea name="routeUtama" id="" cols="30" rows="10"><?php echo json_encode($data['getDetail']['data']['route']) ?></textarea>
<textarea name="route1" id="" cols="30" rows="10"><?php echo json_encode($data['getDetail']['data']['route_alternatif_1']) ?></textarea>
<textarea name="route2" id="" cols="30" rows="10"><?php echo json_encode($data['getDetail']['data']['route_alternatif_2']) ?></textarea>
<textarea name="route3" id="" cols="30" rows="10"><?php echo json_encode($data['getDetail']['data']['route_masyarakat']) ?></textarea>
<textarea name="route4" id="" cols="30" rows="10"><?php echo json_encode($data['getDetail']['data']['route_umum']) ?></textarea>


<script>
    var routingRenpam = new Array();
    var routingRenpam1 = new Array();
    var routingRenpam2 = new Array();
    var routingRenpam3 = new Array();
    var routingRenpam4 = new Array();

    var awal = '<?php echo json_encode($data['getDetail']['data']['title_start']) ?>';
    var akhir = '<?php echo json_encode($data['getDetail']['data']['title_end']) ?>';
    var titikAwal = awal == null ? '-' : awal;
    var titikAkhir = akhir == null ? '-' : akhir;

    var route1 = $("[name=route1]").val();
    var route2 = $("[name=route2]").val();
    var route3 = $("[name=route3]").val();
    var route4 = $("[name=route4]").val();
    var route = $("[name=routeUtama]").val();
    // console.log(JSON.parse(route));

    var typeRenpam = '<?php echo json_encode($data['getDetail']['data']['type_renpam']) ?>';

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
            maxZoom: 20,
            minZoom: 1,
            zoomSnap: 0.25,
            zoomControl: false,
            layers: [googleHybrid]
        }).setView(initialCenter, initialZoom);



        if (typeRenpam == 3) { //penjagaan
            iconMarkerRenpam = `https://cdn-icons-png.flaticon.com/512/1323/1323306.png`;
            markerType = `<img src="${iconMarkerRenpam}"><div class="pin"></div><div class="pulse"></div>`;
            markerTypeOther = `<img src="${iconMarkerRenpam}"><div class="pin" style="background: gray;"></div><div class="pulse"></div>`;
            markerTypeEnd = `<img src="${iconMarkerRenpam}"><div class="pin" style="background: green;"></div><div class="pulse"></div>`;
        } else if (typeRenpam == 4) { //pengaturan
            iconMarkerRenpam = `https://cdn-icons-png.flaticon.com/512/196/196781.png`;
            markerType = `<img src="${iconMarkerRenpam}"><div class="pin"></div><div class="pulse"></div>`;
            markerTypeOther = `<img src="${iconMarkerRenpam}"><div class="pin" style="background: gray;"></div><div class="pulse"></div>`;
            markerTypeEnd = `<img src="${iconMarkerRenpam}"><div class="pin" style="background: green;"></div><div class="pulse"></div>`;
        } else if (typeRenpam == 5) { //penutupan
            iconMarkerRenpam = `https://cdn-icons-png.flaticon.com/512/196/196764.png`;
            markerType = `<img src="${iconMarkerRenpam}"><div class="pin"></div><div class="pulse"></div>`;
            markerTypeOther = `<img src="${iconMarkerRenpam}"><div class="pin" style="background: gray;"></div><div class="pulse"></div>`;
            markerTypeEnd = `<img src="${iconMarkerRenpam}"><div class="pin" style="background: green;"></div><div class="pulse"></div>`;
        } else {
            iconMarkerRenpam = `https://cdn-icons-png.flaticon.com/512/178/178753.png`;
            markerType = `<img src="${iconMarkerRenpam}"><div class="pin"></div><div class="pulse"></div>`;
            markerTypeOther = `<img src="${iconMarkerRenpam}"><div class="pin" style="background: gray;"></div><div class="pulse"></div>`;
            markerTypeEnd = `<img src="${iconMarkerRenpam}"><div class="pin" style="background: green;"></div><div class="pulse"></div>`;
        }




        if (route1 != 'null') {
            routingRenpam1[0] = L.Routing.control({
                show: false,
                draggableWaypoints: false,
                addWaypoints: false,
                waypoints: JSON.parse(route1),
                router: new L.Routing.osrmv1({
                    language: 'en',
                    profile: 'car'
                }),
                lineOptions: {
                    styles: [{
                        color: "#b935b9",
                        className: 'animateRoute'
                    }]
                },
                createMarker: function(i, wp, nWps) {
                    if (i === 0 || i === nWps + 1) {
                        // here change the starting and ending icons
                        return L.marker(wp.latLng, {
                            icon: L.divIcon({
                                className: "location-pin",
                                html: markerType,
                                iconSize: [5, 5],
                                //iconAnchor: [18, 30]
                                iconAnchor: [5, 10],
                            }),
                            draggable: this.draggableWaypoints,
                        }).bindPopup(`
                            <div class="text-center"> 
                                <h3>${titikAwal}</h3>
                            </div> 
                        `);
                    } else if (i === nWps - 1) {
                        return L.marker(wp.latLng, {
                            icon: L.divIcon({
                                className: "location-pin",
                                html: markerTypeEnd,
                                iconSize: [5, 5],
                                //iconAnchor: [18, 30]
                                iconAnchor: [5, 10],
                            }),
                            draggable: this.draggableWaypoints,
                        }).bindPopup(`
                            <div class="text-center"> 
                                <h3>${titikAkhir}</h3>
                            </div> 
                        `);
                    } else {
                        // here change all the others
                        var options = {
                                draggable: this.draggableWaypoints,
                            },
                            marker = L.marker(wp.latLng, {
                                icon: L.divIcon({
                                    className: "location-pin",
                                    html: markerTypeOther,
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
            }).addTo(mapContainer);
        }


        if (route2 != 'null') {
            routingRenpam2[0] = L.Routing.control({
                show: false,
                draggableWaypoints: false,
                addWaypoints: false,
                waypoints: JSON.parse(route2),
                router: new L.Routing.osrmv1({
                    language: 'en',
                    profile: 'car'
                }),
                lineOptions: {
                    styles: [{
                        color: "gray",
                        className: 'animateRoute'
                    }]
                },
                createMarker: function(i, wp, nWps) {
                    if (i === 0 || i === nWps + 1) {
                        // here change the starting and ending icons
                        return L.marker(wp.latLng, {
                            icon: L.divIcon({
                                className: "location-pin",
                                html: markerType,
                                iconSize: [5, 5],
                                //iconAnchor: [18, 30]
                                iconAnchor: [5, 10],
                            }),
                            draggable: this.draggableWaypoints,
                        }).bindPopup(`
                            <div class="text-center"> 
                                <h3>${titikAwal}</h3>
                            </div> 
                        `);
                    } else if (i === nWps - 1) {
                        return L.marker(wp.latLng, {
                            icon: L.divIcon({
                                className: "location-pin",
                                html: markerTypeEnd,
                                iconSize: [5, 5],
                                //iconAnchor: [18, 30]
                                iconAnchor: [5, 10],
                            }),
                            draggable: this.draggableWaypoints,
                        }).bindPopup(`
                            <div class="text-center"> 
                                <h3>${titikAkhir}</h3>
                            </div> 
                        `);
                    } else {
                        // here change all the others
                        var options = {
                                draggable: this.draggableWaypoints,
                            },
                            marker = L.marker(wp.latLng, {
                                icon: L.divIcon({
                                    className: "location-pin",
                                    html: markerTypeOther,
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
            }).addTo(mapContainer);
        }


        if (route3 != 'null') {
            routingRenpam3[0] = L.Routing.control({
                show: false,
                draggableWaypoints: false,
                addWaypoints: false,
                waypoints: JSON.parse(route3),
                router: new L.Routing.osrmv1({
                    language: 'en',
                    profile: 'car'
                }),
                lineOptions: {
                    styles: [{
                        color: "#000dda",
                        className: 'animateRoute'
                    }]
                },
                createMarker: function(i, wp, nWps) {
                    if (i === 0 || i === nWps + 1) {
                        // here change the starting and ending icons
                        return L.marker(wp.latLng, {
                            icon: L.divIcon({
                                className: "location-pin",
                                // html: `<div class="pin"></div><div class="pulse"></div>`,
                                iconSize: [5, 5],
                                //iconAnchor: [18, 30]
                                iconAnchor: [5, 10],
                            }),
                            draggable: this.draggableWaypoints,
                        }).bindPopup(`
                            <div class="text-center"> 
                                <h3>${titikAwal}</h3>
                            </div> 
                        `);
                    } else if (i === nWps - 1) {
                        return L.marker(wp.latLng, {
                            icon: L.divIcon({
                                className: "location-pin",
                                // html: `<div class="pin" style="background: green;"></div><div class="pulse"></div>`,
                                iconSize: [5, 5],
                                //iconAnchor: [18, 30]
                                iconAnchor: [5, 10],
                            }),
                            draggable: this.draggableWaypoints,
                        }).bindPopup(`
                            <div class="text-center"> 
                                <h3>${titikAkhir}</h3>
                            </div> 
                        `);
                    } else {
                        // here change all the others
                        var options = {
                                draggable: this.draggableWaypoints,
                            },
                            marker = L.marker(wp.latLng, {
                                icon: L.divIcon({
                                    className: "location-pin",
                                    // html: `<div class="pin" style="background: gray;"></div><div class="pulse"></div>`,
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
            }).addTo(mapContainer);
        }


        if (route4 != 'null') {
            routingRenpam4[0] = L.Routing.control({
                show: false,
                draggableWaypoints: false,
                addWaypoints: false,
                waypoints: JSON.parse(route4),
                router: new L.Routing.osrmv1({
                    language: 'en',
                    profile: 'car'
                }),
                lineOptions: {
                    styles: [{
                        color: "#bdbd0b",
                        className: 'animateRoute'
                    }]
                },
                createMarker: function(i, wp, nWps) {
                    if (i === 0 || i === nWps + 1) {
                        // here change the starting and ending icons
                        return L.marker(wp.latLng, {
                            icon: L.divIcon({
                                className: "location-pin",
                                // html: `<div class="pin"></div><div class="pulse"></div>`,
                                iconSize: [5, 5],
                                //iconAnchor: [18, 30]
                                iconAnchor: [5, 10],
                            }),
                            draggable: this.draggableWaypoints,
                        }).bindPopup(`
                            <div class="text-center"> 
                                <h3>${titikAwal}</h3>
                            </div> 
                        `);
                    } else if (i === nWps - 1) {
                        return L.marker(wp.latLng, {
                            icon: L.divIcon({
                                className: "location-pin",
                                // html: `<div class="pin" style="background: green;"></div><div class="pulse"></div>`,
                                iconSize: [5, 5],
                                //iconAnchor: [18, 30]
                                iconAnchor: [5, 10],
                            }),
                            draggable: this.draggableWaypoints,
                        }).bindPopup(`
                            <div class="text-center"> 
                                <h3>${titikAkhir}</h3>
                            </div> 
                        `);
                    } else {
                        // here change all the others
                        var options = {
                                draggable: this.draggableWaypoints,
                            },
                            marker = L.marker(wp.latLng, {
                                icon: L.divIcon({
                                    className: "location-pin",
                                    // html: `<div class="pin" style="background: gray;"></div><div class="pulse"></div>`,
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
            }).addTo(mapContainer);
        }


        if (route != 'null') {
            routingRenpam[0] = L.Routing.control({
                show: false,
                draggableWaypoints: false,
                addWaypoints: false,
                waypoints: JSON.parse(route),
                router: new L.Routing.osrmv1({
                    language: 'en',
                    profile: 'car'
                }),
                routeWhileDragging: false,
                lineOptions: {
                    styles: [{
                        color: "red",
                        className: 'animateRoute'
                    }]
                },
                createMarker: function(i, wp, nWps) {
                    if (i === 0 || i === nWps + 1) {
                        // here change the starting and ending icons
                        return L.marker(wp.latLng, {
                            icon: L.divIcon({
                                className: "location-pin",
                                html: markerType,
                                iconSize: [5, 5],
                                //iconAnchor: [18, 30]
                                iconAnchor: [5, 10],
                            }),
                            draggable: this.draggableWaypoints,
                        }).bindPopup(`
                            <div class="text-center"> 
                                <h3>${titikAwal}</h3>
                            </div> 
                        `);
                    } else if (i === nWps - 1) {
                        return L.marker(wp.latLng, {
                            icon: L.divIcon({
                                className: "location-pin",
                                html: markerTypeEnd,
                                iconSize: [5, 5],
                                //iconAnchor: [18, 30]
                                iconAnchor: [5, 10],
                            }),
                            draggable: this.draggableWaypoints,
                        }).bindPopup(`
                            <div class="text-center"> 
                                <h3>${titikAkhir}</h3>
                            </div> 
                        `);
                    } else {
                        // here change all the others
                        var options = {
                                draggable: this.draggableWaypoints,
                            },
                            marker = L.marker(wp.latLng, {
                                icon: L.divIcon({
                                    className: "location-pin",
                                    html: markerTypeOther,
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
            }).addTo(mapContainer);
        }


        var baseMaps = {
            "Google Map Street": googleStreet,
            "Google Map Satelite": googleSatelite,
            "Google Map Hybrid": googleHybrid,
            "Google Map Terrain": googleTerrain,
        };
        var overlayMaps = {};
        L.control.layers(baseMaps, overlayMaps, {
            position: 'topleft'
        }).addTo(mapContainer);
        L.control.zoom({
            position: 'bottomleft'
        }).addTo(mapContainer);




    });
</script>