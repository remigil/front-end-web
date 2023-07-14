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

<script src="<?php echo base_url(); ?>assets/fe/js/kotabogor_polygon.js"></script>

<script>

    $(document).ready(function() {
        var data = '<?= base_url()?>ngawas/sebaran';
        console.log(data);
        
        

         var initialCenter = [-6.6035992,106.8092627];
         var initialZoom = 12.66;
        //  var initialZoom = 11;

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
        var map = L.map('mapG20Dashboard', {
             maxZoom: 20,
             minZoom: 1,
             zoomSnap: 0.25,
             zoomControl: false,
             layers: [gl]
          }).setView(initialCenter, initialZoom);
        //   var kotaBogorPol = L.geoJson(kotabogorpol).addTo(map);


          //getBatasWilayah
        
        function addGeoJsonLayer(url, popupText) {
        $.getJSON(url, function(data) {
            var geoLayer = L.geoJson(data, {
            style: function(feature) {
                return {
                fillColor: 'white',
                opacity:'0.5'
                }
            },
            }).addTo(map);

            geoLayer.eachLayer(function(layer) {
            layer.bindPopup(popupText);
            });
        });
        }

        addGeoJsonLayer("<?php echo base_url('assets/fe/js/BogorSelatan.geojson') ?>", "Kecamatan Bogor Selatan");
        addGeoJsonLayer("<?php echo base_url('assets/fe/js/BogorTengah.geojson') ?>", "Kecamatan Bogor Tengah");
        addGeoJsonLayer("<?php echo base_url('assets/fe/js/BogorTimur.geojson') ?>", "Kecamatan Bogor Timur");
        addGeoJsonLayer("<?php echo base_url('assets/fe/js/BogorUtara.geojson') ?>", "Kecamatan Bogor Utara");
        addGeoJsonLayer("<?php echo base_url('assets/fe/js/TanahSereal.geojson') ?>", "Kecamatan Tanah Sereal");
        addGeoJsonLayer("<?php echo base_url('assets/fe/js/bogor-barat.json') ?>", "Kecamatan Bogor Barat");


        // array
        // var markers = L.markerClusterGroup();
        // var marker_array = [
        // ["Bogor Selatan", -6.637869, 106.813483],
        // ["Bogor Timur", -6.617142, 106.825682],
        // ["Bogor Utara", -6.573078, 106.822610],
        // ["Bogor Tengah", -6.598313, 106.799308],
        // ["Tanah Sereal", -6.547166, 106.785686],
        // ["Bogor Barat", -6.573392, 106.766256]
        // ];

        // for (var i = 0; i < marker_array.length; i++) {
        // var marker = new L.marker([marker_array[i][1], marker_array[i][2]]).bindPopup(marker_array[i][0]);
        // markers.addLayer(marker);
        // }

        // map.addLayer(markers);

        // keberangkatan 
        var markergrup_keberangkatan = L.markerClusterGroup();
        var marker_keberangkatan = [];
        $.ajax({
            url: '<?= base_url()?>ngawas/sebaran',
            type: 'POST',
            dataType: 'JSON',
            success: function(result) {
                let ressData = result;
                // console.log(result);
                
                for (var i = 0; i < ressData.length; i++) {
                    if(ressData[i].kode_kec_start != ""){
                        var lat_keberangkatan = parseFloat(ressData[i].start_coordinate.latitude)
                        var lng_keberangkatan = parseFloat(ressData[i].start_coordinate.longitude)
                        // console.log(lng_keberangkatan);
    
                        marker_keberangkatan[i] = L.marker([lat_keberangkatan,lng_keberangkatan]).bindPopup(ressData[i].society.person_name);
                        markergrup_keberangkatan.addLayer(marker_keberangkatan[i]);

                    }
                }
            
        
            }
        })
        map.addLayer(markergrup_keberangkatan)

        // kedatangan 
        var markergrup_kedatangan = L.markerClusterGroup();
        var marker_kedatangan = [];
        $.ajax({
            url: '<?= base_url()?>ngawas/sebaran',
            type: 'POST',
            dataType: 'JSON',
            success: function(result) {
                let ressData = result;
                // console.log(result);
                
                for (var i = 0; i < ressData.length; i++) {
                    if(ressData[i].kode_kec_end != ""){
                        var lat_kedatangan = parseFloat(ressData[i].end_coordinate.latitude)
                        var lng_kedatangan = parseFloat(ressData[i].end_coordinate.longitude)
                        var nama = ressData[i].society.person_name
                        var type_vehicle = ressData[i].type_vehicle.type_name
                        var loc_end = ressData[i].subdistrict_end
                        var nama = ressData[i].society.person_name
                        var nama = ressData[i].society.person_name
                        // console.log(lng_kedatangan);
    
                        marker_kedatangan[i] = L.marker([lat_kedatangan,lng_kedatangan]).bindPopup(`
                        <div style="width:400px;">
                        <table border="0">
                            <tbody>
                                <tr><td>Nama Pengemudi</td><td>:</td><td>${nama}</td></tr>
                                <tr><td>Tipe Kendaraan</td><td>:</td><td>${type_vehicle}</td></tr>
                                <tr><td>Lokasi Tujuan</td><td>:</td><td>${loc_end}</td></tr>
                                
                            </tbody>
                        </table>
                        </div>

                        
                        `);
                        markergrup_kedatangan.addLayer(marker_kedatangan[i]);

                    }
                }
            
        
            }
        })
        // map.addLayer(markergrup_kedatangan)
        


        

       

        var myRenderer = L.canvas({
             padding: 0.5
          });

       

        var baseMaps = {
            "MappBox Traffic": gl,
            "Google Map Street": googleStreet,
            "Google Map Satelite": googleSatelite,
            // "Google Map Hybrid": googleHybrid,
            // "Google Map Terrain": googleTerrain,
            // "Google Map Street Traffic": trafficMutantRoad,
            // "Google Map Hybrid Traffic": trafficMutant,
        };
        
        var overlayMaps = {
            "Keberangkatan": markergrup_keberangkatan,
            "Kedatangan": markergrup_kedatangan,
        };


        // Buat objek pengendali lapisan dengan properti position dan collapsed
        var layerControl = L.control.layers(baseMaps, overlayMaps, {
        position: 'topright',
        collapsed: false
        }).addTo(map);

        // Atur properti CSS untuk menambahkan lebar
        var controlContainer = layerControl.getContainer();
        controlContainer.style.width = '400px';
        controlContainer.style.fontSize = '20px';


        L.control.zoom({
            position: 'topleft'
        }).addTo(map);

        map.doubleClickZoom.disable();

        
        var centerMap = map.getCenter();
        var centerLat = centerMap['lat'];
        var centerLng = centerMap['lng'];
    });

    

    


</script>