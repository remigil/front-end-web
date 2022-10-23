<div class="row">
    <input hidden type="text" id="typeRenpam">
    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-h-100" id="pengawalan">
            <!-- card body -->
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-12">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Pengawalan</span>
                        <table class="table table-bordered" style="width: 100%;">
                            <thead>
                                <th style="text-align: center">Proses</th>
                                <th style="text-align: center">Selesai</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="text-align: center">
                                        <h4 class="mb-3">
                                            <p>1</p>
                                        </h4>
                                    </td>
                                    <td style="text-align: center">
                                        <h4 class="mb-3">
                                            <p>1</p>
                                        </h4>
                                    </td>
                                </tr>
                            </tbody> 
                        </table>
                        
                    </div>
 
                </div> 
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-h-100" id="pengaturan">
            <!-- card body -->
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-12">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Pengaturan</span>
                        <table class="table table-bordered" style="width: 100%;">
                            <thead>
                                <th style="text-align: center">Proses</th>
                                <th style="text-align: center">Selesai</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="text-align: center">
                                        <h4 class="mb-3">
                                            <p>1</p>
                                        </h4>
                                    </td>
                                    <td style="text-align: center">
                                        <h4 class="mb-3">
                                            <p>1</p>
                                        </h4>
                                    </td>
                                </tr>
                            </tbody> 
                        </table>
                        
                    </div>
                </div>
                 
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col-->

    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-h-100" id="penjagaan">
            <!-- card body -->
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-12">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Penjagaan</span>
                        <table class="table table-bordered" style="width: 100%;">
                            <thead>
                                <th style="text-align: center">Proses</th>
                                <th style="text-align: center">Selesai</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="text-align: center">
                                        <h4 class="mb-3">
                                            <p>1</p>
                                        </h4>
                                    </td>
                                    <td style="text-align: center">
                                        <h4 class="mb-3">
                                            <p>1</p>
                                        </h4>
                                    </td>
                                </tr>
                            </tbody> 
                        </table>
                        
                    </div>
                </div> 
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div>

<script> 

    $('#myModal').on('shown.bs.modal', function() { 
        var div = $(event.relatedTarget); // Tombol dimana modal di tampilkan
        var modal = $(this);   

        console.log(dataDetailRenpam);
        
        var initialCenter = [-8.451740, 115.089643];
        var initialZoom = 9.65;
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
        var mapContainerRenpam = L.map('mapG20Kakor', {
            maxZoom: 20,
            minZoom: 1,
            zoomSnap: 0.25,
            zoomControl: false,
            layers: [googleStreet]
        }).setView(initialCenter, initialZoom);

        var baseMaps = {
            "Google Map Street": googleStreet,
            "Google Map Satelite": googleSatelite,
            "Google Map Hybrid": googleHybrid,
            "Google Map Terrain": googleTerrain,
        };
        var overlayMaps = {};
        L.control.layers(baseMaps, overlayMaps, {
            position: 'topleft'
        }).addTo(mapContainerRenpam);
        L.control.zoom({
            position: 'bottomleft'
        }).addTo(mapContainerRenpam); 


        var route = new Array(); 
        if(dataDetailRenpam['route'] != null){ 
            route[0] = L.Routing.control({
                show: true, 
                draggableWaypoints: false,
                addWaypoints: false,
                waypoints: dataDetailRenpam['route'],
                router: new L.Routing.osrmv1({
                    language: 'en',
                    profile: 'car'
                }),
                // lineOptions: {
                //     styles: [{color: 'red', opacity: 1, weight: 3, zIndex: 2056}]
                // },
                geocoder: L.Control.Geocoder.nominatim({})
            }).addTo(mapContainerRenpam); 
            
        }

        var routeAlternative1 = new Array(); 
        if(dataDetailRenpam['route_alternatif_1'] != null){
            routeAlternative1[0] = L.Routing.control({
                show: false, 
                draggableWaypoints: false,
                addWaypoints: false,
                waypoints: dataDetailRenpam['route_alternatif_1'],
                router: new L.Routing.osrmv1({
                    language: 'en',
                    profile: 'car'
                }),
                lineOptions: {
                    styles: [{color: "gray", opacity: 0.8, weight: 3, dashArray: "5,12"}]
                },
                createMarker: function(i, wp, nWps) {
                    if (i === 0 || i === nWps + 1) {
                        // here change the starting and ending icons
                        return L.marker(wp.latLng, {
                            icon: L.divIcon({
                                className: "location-pin",
                                html: `<img src="https://cdn-icons-png.flaticon.com/512/178/178753.png"><div class="pin"></div><div class="pulse"></div>`,
                                iconSize: [5, 5],
                                //iconAnchor: [18, 30]
                                iconAnchor: [5, 10],
                            }),
                            draggable: this.draggableWaypoints,
                        });
                    } else if (i === nWps - 1) {
                        return L.marker(wp.latLng, {
                            icon: L.divIcon({
                                className: "location-pin",
                                html: `<img src="https://cdn-icons-png.flaticon.com/512/178/178753.png"><div class="pin"></div><div class="pulse"></div>`,
                                iconSize: [5, 5],
                                //iconAnchor: [18, 30]
                                iconAnchor: [5, 10],
                            }),
                            draggable: this.draggableWaypoints,
                        });
                    } else {
                        // here change all the others
                        var options = {
                                draggable: this.draggableWaypoints,
                            },
                            marker = L.marker(wp.latLng, {
                            icon: L.divIcon({
                                className: "location-pin",
                                html: `<img src="https://cdn-icons-png.flaticon.com/512/178/178753.png"><div class="pin"></div><div class="pulse"></div>`,
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
            }).addTo(mapContainerRenpam);
        }

        var routeAlternative2 = new Array(); 
        if(dataDetailRenpam['route_alternatif_2'] != null){
            routeAlternative2[0] = L.Routing.control({
                show: false, 
                draggableWaypoints: false,
                addWaypoints: false,
                waypoints: dataDetailRenpam['route_alternatif_2'],
                router: new L.Routing.osrmv1({
                    language: 'en',
                    profile: 'car'
                }),
                lineOptions: {
                    styles: [{color: "green", opacity: 0.8, weight: 3, dashArray: "5,12"}]
                },
                createMarker: function(i, wp, nWps) {
                    if (i === 0 || i === nWps + 1) {
                        // here change the starting and ending icons
                        return L.marker(wp.latLng, {
                            icon: L.divIcon({
                                className: "location-pin",
                                html: `<img src="https://www.citypng.com/public/uploads/preview/hd-round-emergency-exit-escape-sign-icon-symbol-png-316282089114htwnmbnbp.png"><div class="pin"></div><div class="pulse"></div>`,
                                iconSize: [5, 5],
                                //iconAnchor: [18, 30]
                                iconAnchor: [5, 10],
                            }),
                            draggable: this.draggableWaypoints,
                        });
                    } else if (i === nWps - 1) {
                        return L.marker(wp.latLng, {
                            icon: L.divIcon({
                                className: "location-pin",
                                html: `<img src="https://www.citypng.com/public/uploads/preview/hd-round-emergency-exit-escape-sign-icon-symbol-png-316282089114htwnmbnbp.png"><div class="pin"></div><div class="pulse"></div>`,
                                iconSize: [5, 5],
                                //iconAnchor: [18, 30]
                                iconAnchor: [5, 10],
                            }),
                            draggable: this.draggableWaypoints,
                        });
                    } else {
                        // here change all the others
                        var options = {
                                draggable: this.draggableWaypoints,
                            },
                            marker = L.marker(wp.latLng, {
                            icon: L.divIcon({
                                className: "location-pin",
                                html: `<img src="https://www.citypng.com/public/uploads/preview/hd-round-emergency-exit-escape-sign-icon-symbol-png-316282089114htwnmbnbp.png"><div class="pin"></div><div class="pulse"></div>`,
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
            }).addTo(mapContainerRenpam);
        }

        mapContainerRenpam.invalidateSize(); 

    });   
</script>
