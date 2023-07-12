<!-- <button onClick="hitungGpsId()">cek marker tracking</button> -->
<!-- <div id="openLastDisplay" style="cursor: pointer; width: 23px;height: 45px;background-color: rgba(0, 13, 218, 0.79);border: 1px solid rgba(255, 255, 255, 0.39);border-radius: 5px 0px 0px 5px;position: fixed;right: 20px;z-index: 401;top: 400px;font-size: 25px;padding-left: 4px;color: white;padding-top: 3px;">
    <i class="fa fas fa-chevron-left"></i>
</div> -->
<div class="row">
    <div class="col-md-12">
        <div id="mapG20Dashboard">
            
        </div>
    </div>
</div>


<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->

<script src="https://cdn.socket.io/4.5.3/socket.io.min.js"></script>
<!-- <script src="<?php echo base_url(); ?>assets/fe/js/batasWilayah.js"></script> -->
<script src="<?php echo base_url(); ?>assets/fe/js/kotabogor_polygon.js"></script>

<script>

    $(document).ready(function() {

         var initialCenter = [-6.6035992,106.8092627];
         var initialZoom = 12.66;

        var googleStreet = L.tileLayer('https://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
            maxZoom: 20,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
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
        var gl = L.mapboxGL({
            accessToken: 'pk.eyJ1IjoibW9yZ2Vua2FmZmVlIiwiYSI6IjIzcmN0NlkifQ.0LRTNgCc-envt9d5MzR75w',
            style: 'mapbox://styles/mapbox/traffic-day-v2'
        });

        var trafficMutant = L.gridLayer.googleMutant({
            maxZoom: 24,
            type: "hybrid",
        }).addGoogleLayer("TrafficLayer");

        var trafficMutantRoad = L.gridLayer.googleMutant({
            maxZoom: 24,
            type: "roadmap",
        }).addGoogleLayer("TrafficLayer");


        // StART MAP SECTION
        var mapContainer = L.map('mapG20Dashboard', {
             maxZoom: 20,
             minZoom: 1,
             zoomSnap: 0.25,
             zoomControl: false,
             layers: [gl]
          }).setView(initialCenter, initialZoom);
        //   var kotaBogorPol = L.geoJson(kotabogorpol).addTo(mapContainer);


          //getBatasWilayah
          $.getJSON("<?php echo base_url('assets/fe/js/BogorSelatan.geojson') ?>", function(data){
            geoLayer = L.geoJson(data, {
                style : function(feature) {
                    return {
                        fillColor: 'white',
                    }
                },

            }).addTo(mapContainer);

            geoLayer.eachLayer(function(layer) {
                layer.bindPopup("Kecamatan Bogor Selatan");
            });
          });


          $.getJSON("<?php echo base_url('assets/fe/js/BogorTengah.geojson') ?>", function(data){
            geoLayer = L.geoJson(data, {
                style : function(feature) {
                    return {
                        fillColor: 'white',
                    }
                },

            }).addTo(mapContainer);

            geoLayer.eachLayer(function(layer) {
                layer.bindPopup("Kecamatan Bogor Tengah");
            });
          });


          $.getJSON("<?php echo base_url('assets/fe/js/BogorTimur.geojson') ?>", function(data){
            geoLayer = L.geoJson(data, {
                style : function(feature) {
                    return {
                        fillColor: 'white',
                    }
                },

            }).addTo(mapContainer);

            geoLayer.eachLayer(function(layer) {
                layer.bindPopup("Kecamatan Bogor Timur");
            });
          });


          $.getJSON("<?php echo base_url('assets/fe/js/BogorUtara.geojson') ?>", function(data){
            geoLayer = L.geoJson(data, {
                style : function(feature) {
                    return {
                        fillColor: 'white',
                    }
                },

            }).addTo(mapContainer);

            geoLayer.eachLayer(function(layer) {
                layer.bindPopup("Kecamatan Bogor Utara");
            });
          });

          $.getJSON("<?php echo base_url('assets/fe/js/TanahSereal.geojson') ?>", function(data){
            geoLayer = L.geoJson(data, {
                style : function(feature) {
                    return {
                        fillColor: 'white',
                    }
                },

            }).addTo(mapContainer);

            geoLayer.eachLayer(function(layer) {
                layer.bindPopup("Kecamatan Tanah Sereal");
            });
          });

          $.getJSON("<?php echo base_url('assets/fe/js/bogor-barat.json') ?>", function(data){
            geoLayer = L.geoJson(data, {
                style : function(feature) {
                    return {
                        fillColor: 'white',
                    }
                },

            }).addTo(mapContainer);

            geoLayer.eachLayer(function(layer) {
                layer.bindPopup("Kecamatan Tanah Sereal");
            });
          });



        var myRenderer = L.canvas({
             padding: 0.5
          });

        var markerClusterGroup = L.markerClusterGroup();
        var icon = L.icon({
            iconUrl: 'http://tourbanyuwangi.com/wp-content/uploads/2018/05/map.png',
            iconSize: [80, 80], // size of the icon
        });

        var baseMaps = {
            "MappBox Traffic": gl,
            "Google Map Street": googleStreet,
            "Google Map Satelite": googleSatelite,
            "Google Map Hybrid": googleHybrid,
            "Google Map Terrain": googleTerrain,
            "Google Map Street Traffic": trafficMutantRoad,
            "Google Map Hybrid Traffic": trafficMutant,
        };
        var overlayMaps = {
            // "Batas Wilayah": shpFile,
        };
        L.control.layers(baseMaps, overlayMaps, {
            position: 'topright'
        }).addTo(mapContainer);
        L.control.zoom({
            position: 'topright'
        }).addTo(mapContainer);

        mapContainer.doubleClickZoom.disable();

        socket.on("connected", function(resSocket) {
            console.log(socket.id);
            console.log(resSocket);
            console.log('ido1');
        });

        var centerMap = mapContainer.getCenter();
        var centerLat = centerMap['lat'];
        var centerLng = centerMap['lng'];
    });


</script>