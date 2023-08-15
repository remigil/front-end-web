<style>
    /* CSS untuk kontrol lapisan */
    .leaflet-control-layers {
        background-color: rgba(255, 255, 255, 0.8);
        border-radius: 5px;
        padding: 10px;
    }

    .leaflet-control-layers-toggle {
        font-weight: bold;
    }

    .leaflet-control-layers-list {
        margin-top: 5px;
    }

    .leaflet-control-layers label {
        display: block;
        margin-bottom: 5px;
        font-size: 18px;
    }



    /* Gaya untuk hover saat mengarahkan kursor ke label */
    .leaflet-control-layers label:hover {
        background-color: rgba(0, 0, 0, 0.1);
    }

    /* Checkbox berwarna */
    input[type="checkbox"] {
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        width: 20px;
        height: 20px;
        border: 2px solid #000;
        border-radius: 4px;
        outline: none;
        cursor: pointer;
    }

    /* Checkbox tercentang */
    input[type="checkbox"]:checked {
        background-color: #01796f;
    }

    /* Checkbox tercentang dengan warna kotak centang */
    input[type="checkbox"]:checked::before {
        content: '\2713';
        display: block;
        width: 100%;
        height: 100%;
        color: #fff;
        text-align: center;
        line-height: 18px;
        font-size: 16px;
    }

    /* Hapus tampilan default radio button */
    input[type="radio"] {
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
    }

    /* Bentuk dasar radio button */
    input[type="radio"] {
        display: inline-block;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        border: 2px solid #ccc;
    }

    /* Tampilan radio button ketika dipilih */
    input[type="radio"]:checked {
        background-color: #01796f;
    }

    /* Tampilan label radio button */
    label {
        margin-right: 10px;
        font-weight: bold;
    }

    .legend {
        background-color: #fff;
        padding: 10px;
        box-shadow: 0 1px 5px rgba(0, 0, 0, 0.4);
    }

    .legend-item {
        display: flex;
        align-items: center;
        margin-bottom: 5px;
    }

    .legend-item img {
        width: 24px;
        height: 30px;
        margin-right: 5px;
    }

    .legend-title {
        font-weight: bold;
        margin-bottom: 15px;
        font-size: 18px;
        text-align: center;
    }

    .info.legend.leaflet-control {
        width: 200;
    }
</style>

<div class="row">
    <div class="col-md-12">
        <!-- <h1>Peta Sebara Titik Ke</h1> -->
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div id="mapG20Dashboard">

        </div>
    </div>
</div>



<script src="<?php echo base_url(); ?>assets/fe/js/kabbogor_polygon.js"></script>

<script>
    $(document).ready(function() {
        var data = '<?= base_url() ?>ngawas/sebaran';
        // console.log(data)


        var initialCenter = [-6.6035992, 106.8092627];
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
        // Buat objek gaya (style) untuk layer GeoJSON
        var customStyle = {
            fillColor: 'grey',
            weight: 2,
            opacity: 1,
            color: 'none',
            // dashArray: '3',
            // fillOpacity: 0.5
        };

        // Buat layer GeoJSON dengan gaya khusus
        var kabbogor_polygon = L.geoJSON(kabbogorpol, {
            style: customStyle
        }).addTo(map);



        //getBatasWilayah

        function addGeoJsonLayer(url, popupText) {
            $.getJSON(url, function(data) {
                var geoLayer = L.geoJson(data, {
                    style: function(feature) {
                        return {
                            fillColor: 'white',
                            opacity: '1',
                            weight: 3.5,
                            color: 'black',
                            dashArray: '2',
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
        var iconOtw = L.icon({
            // iconUrl :'https://leafletjs.com/examples/custom-icons/leaf-green.png',
            iconUrl: '<?= base_url() ?>assets/fe/otw.png',
            iconSize: [20, 30],
            // iconAnchor: [22, 94],
            popupAnchor: [-0, -16]
        })

        var markergrup_keberangkatan = L.markerClusterGroup();
        var marker_keberangkatan = [];
        $.ajax({
            url: '<?= base_url() ?>ngawas/sebaran',
            type: 'POST',
            dataType: 'JSON',
            success: function(result) {
                let ressData = result;
                // console.log(result);

                for (var i = 0; i < ressData.length; i++) {
                    if (ressData[i].kode_kec_start != "") {
                        var lat_keberangkatan = parseFloat(ressData[i].start_coordinate.latitude)
                        var lng_keberangkatan = parseFloat(ressData[i].start_coordinate.longitude)
                        // console.log(lng_keberangkatan);
                        var nama = ressData[i].society.person_name
                        var type_vehicle = ressData[i].type_vehicle.type_name
                        var loc_start = ressData[i].subdistrict_start
                        var loc_end = ressData[i].district_end
                        var id = ressData[i].id

                        marker_keberangkatan[i] = L.marker([lat_keberangkatan, lng_keberangkatan], {
                            icon: iconOtw
                        }).bindPopup(`
                        <div style="width:900px;">
                        <table border="0">
                            <tbody>
                                <tr><td>Pengemudi</td><td>:</td><td>${nama}</td></tr>
                                <tr><td>Tipe Kendaraan</td><td>:</td><td>${type_vehicle}</td></tr>
                                <tr><td>Lokasi Awal</td><td>:</td><td>${loc_start}</td></tr>
                                <tr><td>Lokasi Tujuan</td><td>:</td><td>${loc_end}</td></tr>
                                
                                </tbody>
                                </table>
                                <a href="Ngawas/detail/${id}"><button class="btn btn-sm btn-primary mt-3" type="button">Detail</button></a>
                        </div>

                        `);
                        markergrup_keberangkatan.addLayer(marker_keberangkatan[i]);

                    }
                }


            }
        })
        map.addLayer(markergrup_keberangkatan)

        // kedatangan 
        var iconDatang = L.icon({
            iconUrl: '<?= base_url() ?>assets/fe/datang.png',
            iconSize: [20, 30],
            // iconAnchor: [22, 94],
            popupAnchor: [-0, -16]
        })
        var markergrup_kedatangan = L.markerClusterGroup();
        var marker_kedatangan = [];
        $.ajax({
            url: '<?= base_url() ?>ngawas/sebaran',
            type: 'POST',
            dataType: 'JSON',
            success: function(result) {
                let ressData = result;
                // console.log(result);

                for (var i = 0; i < ressData.length; i++) {
                    if (ressData[i].kode_kec_end != "") {
                        var lat_kedatangan = parseFloat(ressData[i].end_coordinate.latitude)
                        var lng_kedatangan = parseFloat(ressData[i].end_coordinate.longitude)
                        var nama = ressData[i].society.person_name
                        var type_vehicle = ressData[i].type_vehicle.type_name
                        var loc_start = ressData[i].district_start
                        var loc_end = ressData[i].subdistrict_end
                        var id = ressData[i].id
                        // console.log(lng_kedatangan);

                        marker_kedatangan[i] = L.marker([lat_kedatangan, lng_kedatangan], {
                            icon: iconDatang
                        }).bindPopup(`
                        <div style="width:500px;">
                        <table border="0">
                            <tbody>
                                <tr><td>Nama Pengemudi</td><td>:</td><td>${nama}</td></tr>
                                <tr><td>Tipe Kendaraan</td><td>:</td><td>${type_vehicle}</td></tr>
                                <tr><td>Lokasi Awal</td><td>:</td><td>${loc_start}</td></tr>
                                <tr><td>Lokasi Tujuan</td><td>:</td><td>${loc_end}</td></tr>
                                
                                </tbody>
                                </table>
                                <a href="Ngawas/detail/${id}"><button class="btn btn-sm btn-primary mt-3" type="button">Detail</button>
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
        controlContainer.style.marginTop = '30px';


        L.control.zoom({
            position: 'topleft',
        }).addTo(map);

        map.doubleClickZoom.disable();


        var centerMap = map.getCenter();
        var centerLat = centerMap['lat'];
        var centerLng = centerMap['lng'];

        // console.log('hello');


        var legend = L.control({
            position: "bottomleft"
        });

        legend.onAdd = function(map) {
            var div = L.DomUtil.create("div", "info legend");
            var labels = ["Kedatangan", "Keberangkatan"];
            var title = "Legend"
            var icons = [
                '<?= base_url() ?>assets/fe/datang.png',
                '<?= base_url() ?>assets/fe/otw.png'
            ];

            // Tambahkan judul pada legenda
            div.innerHTML = '<div class="legend-title">' + title + '</div>';

            // Loop through the labels and icons to create the legend items
            for (var i = 0; i < labels.length; i++) {
                div.innerHTML +=
                    '<div class="legend-item"><img class="mb-3" src="' + icons[i] + '" alt="' + labels[i] + '"/> ' + labels[i] + '</div>';
            }

            return div;
        };

        legend.addTo(map);



    });
</script>