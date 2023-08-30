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

    /* .leaflet-control-layers-list {
        margin-top: 5px;
    } */

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

    #time-ranges {
        position: absolute;
        top: 100px;
        right: 100%px;
        z-index: 1000;
        padding: 1em;
        margin: 1em;
        background: white;
    }

    #time-ranges input {
        display: inline-block;
        border: 1px solid #999;
        font-size: 14px;
        border-radius: 4px;
        height: 28px;
        line-height: 28px;
    }

    #time-ranges input[type="submit"] {
        box-sizing: content-box;
        padding: 0 1em;
        text-transform: uppercase;
        color: white;
        background: #5c7db8;
        border-color: #5c7db8;
    }

    .legend {
        text-align: left;
        line-height: 18px;
        color: #555;
    }

    .legend i {
        width: 18px;
        height: 18px;
        float: left;
        margin-right: 8px;
        opacity: 0.7;
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

    .card2 {
        border-radius: 10px 10px 0px 0px !important;
        background-color: #fff;

    }

    .header h2 {
        color: #01796f !important;
        font-weight: bold;
        margin-top: -4;
        z-index: 100;
        border-radius: 10px !important;
    }

    /* Gaya untuk popup */


    .custom-popup {
        background: yellow !important;
        border: solid 3px red;
        color: red;
        font-size: 14;
        border-radius: 10px;
    }

    .custom-popup::before {
        content: "";
        position: absolute;
        border: 3px solid red;
        width: calc(90% + 40px);
        height: calc(80% + 40px);
        animation: pulse 0.6s linear infinite;
        border-radius: 10px;
        left: 0%;
        /* Center horizontally */
        top: 0%;
        /* Center vertically */
        transform: translate(-50%, -50%);
        /* Center the element */
        transition: all 0.6s ease-in-out;
    }

    .custom-popup::after {
        content: "";
        /* display: block; */
        position: absolute;
        border: 3px solid #eb5e60;
        width: calc(90% + 40px);
        height: calc(80% + 40px);
        animation: pulse 0.56s linear infinite;
        /* padding: 5px; */
        border-radius: 10px;
        left: 0%;
        top: 0%;
        transform: translate(-50%, -50%);
        transition: all 0.6s ease-in-out;
    }

    @keyframes pulse {
        0% {
            transform: scale(0.5);
            opacity: 0
        }

        50% {
            transform: scale(1);
            opacity: 1
        }

        100% {
            transform: scale(1.3);
            opacity: 0
        }
    }

    /* .leaflet-popup-tip-container {
        display: none;
    } */
</style>
<!-- 
<button title="Filter" id="button" style="background: transparent;height:40px;border:none;margin-top:-3px" onclick="changeData()">
                Filter
            </button> -->






<!-- <form action="">
    <input type="hidden" name="<?= $csrf_name; ?>" value="<?= $csrf_token; ?>" style="display: none">
    <div class="row">
        <div class="col-md-12">
            <div class="card" style="margin-bottom:0">
                <div class="row mt-3">
                    <div class="col-md-3">
                        <div class="material-selectfield">
                            <div class="material-textfield">
                                <input type="date" name="start_date" id="start_date" style="width:100% ;">
                                <label class="labelmui">Filter tanggal mulai</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="material-selectfield">
                            <div class="material-textfield">
                                <input type="date" name="end_date" id="end_date" style="width:100% ;">
                                <label class="labelmui">Filter tanggal selesai</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <button class="btn btn-primary mt-3" type="button" id="btn_pilih" onclick="changedata()">Tampilkan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form> -->

<div class="card2 p-4 header">
    <h1 class="text-center">Peta Sebaran Titik Keberangkatan dan Kedatangan Perjalanan Masyarakat di Kota Bogor</h1>
    <h2 class="text-center fw-bold"> Bulan <?php echo format_indoTglWkt(date('Y-m-d')) ?> </h2>
</div>

<!-- <div id="time-ranges" class="leaflet-bar">
    <form action="#" id="form">
        <label for="from">
            From
            <input id="from" type="date" value="today" name="from" />
        </label>
        <label for="to">
            To
            <input id="to" type="date" value="today" name="to" />
        </label>
        <input type="submit" value="Update" />
    </form>
</div> -->

<div class="row">
    <div class="col-md-12">
        <div id="mapG20Dashboard">

        </div>
    </div>
</div>



<script src="<?php echo base_url(); ?>assets/fe/js/kabbogor_polygon.js"></script>


<script>
    // console.log('hello')




    $(document).ready(function() {






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



        function getColor(d) {
            return d > 50 ? '#800026' :
                d > 30 ? '#BD0026' :
                d > 20 ? '#E31A1C' :
                d > 10 ? '#FC4E2A' :
                d > 5 ? '#FD8D3C' :
                d > 0 ? '#FED976' :
                d === 0 ? '#707071' :
                '#fff'
        }


        let GeoJson = [
            'BogorBarat.geojson',
            'BogorSelatan.geojson',
            'BogorTengah.geojson',
            'BogorTimur.geojson',
            'BogorUtara.geojson',
            'TanahSereal.geojson'
        ]




        let kecamatanGroup1 = L.layerGroup();
        let kecamatanGroup2 = L.layerGroup();

        let pushRespon = [];

        $.ajax({
            url: '<?= base_url() ?>ngawas/choropleth',
            type: 'POST',
            dataType: 'JSON',
            success: async function(result) {
                var ressData = result;
                // console.log(ressData);
                pushRespon = ressData;
                var dataJSON = GeoJson;
                var fetchPromises = [];

                for (var i in GeoJson) {
                    var data = GeoJson[i];
                    var url = `<?= base_url() ?>assets/fe/js/` + data;
                    var fetchPromise = fetch(url).then(response => response.json());
                    fetchPromises.push(fetchPromise);
                }
                // Menunggu semua permintaan fetch selesai
                var fetchedJsons = await Promise.all(fetchPromises);

                // Membuat lapisan GeoJSON dari setiap hasil fetch
                for (var i in fetchedJsons) {
                    var json = fetchedJsons[i];
                    console.log(json);

                    var geojson = L.geoJson(json, {
                        style: warna1,
                        onEachFeature: onEachFeature
                    }).addTo(kecamatanGroup1);

                }

                // Menambahkan LayerGroup ke peta setelah semua lapisan GeoJSON dibuat
                markergrup_kedatangan.addLayer(kecamatanGroup1);

                // console.log(ressData);
                // let pushRespon = ressData.push
            }
        });


        var jumlahTitik1 = [];

        var warna1 = function style(feature) {
            let totaldata1 = null;
            for (var i in pushRespon) {
                if (pushRespon[i].kode === feature.properties.kode) {
                    totaldata1 = pushRespon[i].kedatangan;

                    jumlahTitik1.push({
                        kode: feature.properties.kode,
                        totaldata: totaldata1
                    });
                }
            }

            // console.log(jumlahTitik + '  KEDATANGAN')
            // return totaldata;
            var style = {
                color: 'white',
                fillColor: getColor(totaldata1),
                weight: 2,
                opacity: 1,
                fillOpacity: 0.7,
                dashArray: 3
            }
            // var koordinat = feature.properties.koordinat;
            return style;
        }





        $.ajax({
            url: '<?= base_url() ?>ngawas/choropleth',
            type: 'POST',
            dataType: 'JSON',
            success: async function(result) {
                var ressData = result;
                pushRespon = ressData;
                var dataJSON = GeoJson;
                var fetchPromises = [];

                for (var i in GeoJson) {
                    var data = GeoJson[i];
                    var url = `<?= base_url() ?>assets/fe/js/` + data;
                    var fetchPromise = fetch(url).then(response => response.json());
                    fetchPromises.push(fetchPromise);
                }

                // Menunggu semua permintaan fetch selesai
                var fetchedJsons = await Promise.all(fetchPromises);

                // Membuat lapisan GeoJSON dari setiap hasil fetch
                for (var i in fetchedJsons) {
                    var json = fetchedJsons[i];
                    // console.log(json);

                    var geojson = L.geoJson(json, {
                        style: warna2,
                        onEachFeature: onEachFeature
                    }).addTo(kecamatanGroup2);

                }

                // Menambahkan LayerGroup ke peta setelah semua lapisan GeoJSON dibuat
                markergrup_keberangkatan.addLayer(kecamatanGroup2);

                // console.log(ressData);
                // let pushRespon = ressData.push
            }
        });



        var jumlahTitik2 = [];
        var warna2 = function style(feature) {
            let totaldata2 = 0;
            for (i in pushRespon) {
                if (pushRespon[i].kode === feature.properties.kode) {
                    totaldata2 = pushRespon[i].keberangkatan;

                    jumlahTitik2.push({
                        kode: feature.properties.kode,
                        totaldata: totaldata2
                    });

                }
                // console.log(totaldata2)

            }
            // console.log(totaldata2 + '  KEBERANGKATAN')
            // return totaldata;
            var layerStyle = {
                color: 'white',
                fillColor: getColor(totaldata2),
                weight: 2,
                opacity: 1,
                fillOpacity: 0.7,
                dashArray: 3
            }

            var koordinat = feature.properties.koordinat;

            if (totaldata2 > 5) {
                // Membuat popup dengan nama kecamatan
                var popupContent = `
                <div class="popup-warning text-center">
                    <h3><strong>PERINGATAN!</strong></h3>
                    <h5>Terdapat ${totaldata2}  Titik Keberangkatan di <span class="kecamatan-name">
                        ${feature.properties.KECAMATAN}
                    </span></h5>
                </div>`;

                var popup = L.popup({
                        autoClose: false,
                        className: 'custom-popup'
                    })

                    .setLatLng(koordinat)
                    .setContent(popupContent)
                    .openOn(map);
            }

            return layerStyle;



        }



        function highlightFeature(e) {
            var layer = e.target;

            layer.setStyle({
                weight: 5,
                color: '#666',
                dashArray: '',
                fillOpacity: 0.7
            });

            if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
                layer.bringToFront();
            }

            info.update(layer.feature.properties);
        }


        function resetHighlight(e) {
            var layer = e.target;
            layer.setStyle({
                color: 'white',
                weight: 2,
                opacity: 1,
                fillOpacity: 0.7,
                dashArray: 3
            });
            info.update();

        }

        function zoomToFeature(e) {
            map.fitBounds(e.target.getBounds());
        }

        function onEachFeature(feature, layer) {
            layer.on({
                mouseover: highlightFeature,
                mouseout: resetHighlight,
                click: zoomToFeature
            });
        }

        var legend = L.control({
            position: 'bottomright'
        });

        legend.onAdd = function(map) {

            var div = L.DomUtil.create('div', 'info legend');
            var grades = [0, 1, 5, 10, 20, 30, 50];
            var labels = [];
            var from, to;
            var legendTitle = 'Jumlah Titik Perjalanan'; // Ganti dengan judul yang diinginkan
            labels.push('<h6 class="text-center">' + legendTitle + '</h6>');

            for (var i = 0; i < grades.length; i++) {
                from = grades[i];
                to = grades[i + 1];

                if (from === 0) {
                    labels.push(
                        '<i style="background:' + getColor(from) + '"></i> ' +
                        from);
                } else {
                    labels.push(
                        '<i style="background:' + getColor(from + 1) + '"></i> ' +
                        from + (to ? '&ndash;' + to : '+'));
                }
            }


            div.innerHTML = labels.join('<br>');
            return div;
        };

        legend.addTo(map);








        var iconOtw = L.icon({
            // iconUrl :'https://leafletjs.com/examples/custom-icons/leaf-green.png',
            iconUrl: '<?= base_url() ?>assets/fe/otw.png',
            iconSize: [20, 30],
            // iconAnchor: [22, 94],
            popupAnchor: [-0, -16]
        })

        var markergrup_keberangkatan = L.markerClusterGroup({
            spiderfyOnMaxZoom: true, // Enable spiderfy animation on max zoom
            showCoverageOnHover: false, // Disable showing cluster coverage on hover
            animate: true, // Enable cluster animation
            animateAddingMarkers: true // Enable animation when adding markers to the cluster
        });
        var marker_keberangkatan = [];

        $.ajax({
            url: '<?= base_url() ?>ngawas/sebaran',
            type: 'POST',
            dataType: 'JSON',
            success: function(result) {
                ressData = result;
                // var cluster = ressData

                for (var i = 0; i < ressData.length; i++) {
                    if (ressData[i].kode_kec_start != "") {
                        var lat_keberangkatan = parseFloat(ressData[i].start_coordinate.latitude)
                        var lng_keberangkatan = parseFloat(ressData[i].start_coordinate.longitude)

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



        // var baseMaps = {
        //     "MappBox Traffic": gl,
        //     "Google Map Street": googleStreet,
        //     "Google Map Satelite": googleSatelite,

        // };


        var baseMaps = {
            "Keberangkatan": markergrup_keberangkatan,
            "Kedatangan": markergrup_kedatangan,

        };


        var overlayMaps = {
            // "Keberangkatan": markergrup_keberangkatan,
            // "Kedatangan": markergrup_kedatangan,
        };


        // Buat objek pengendali lapisan dengan properti position dan collapsed
        var layerControl = L.control.layers(baseMaps, overlayMaps, {
            position: 'topright',
            collapsed: false
        }).addTo(map);

        var info = L.control();

        info.onAdd = function(map) {
            this._div = L.DomUtil.create('div', 'info');
            this.update();
            return this._div;
        };

        info.update = function(props) {
            var infoText = '<h4>Jumlah Titik Perjalanan</h4>';

            if (props) {
                for (var i = 0; i < jumlahTitik2.length; i++) {
                    if (jumlahTitik2[i].kode === props.kode) {
                        infoText += '<h5>' + props.KECAMATAN + '<br/></h5>' + jumlahTitik2[i].totaldata + ' Titik Keberangkatan<br><br>';
                    }
                }

                for (var i = 0; i < jumlahTitik1.length; i++) {
                    if (jumlahTitik1[i].kode === props.kode) {
                        infoText += jumlahTitik1[i].totaldata + ' Titik Kedatangan<br>';
                    }
                }



            } else {
                infoText += 'Dekatkan Mouse Untuk Melihat';
            }

            this._div.innerHTML = infoText;
        };

        info.addTo(map);

        var legend = L.control({
            position: "bottomright"
        });

        legend.onAdd = function(map) {
            var div = L.DomUtil.create("div", "info legend");
            var labels = ["Keberangkatan", "Kedatangan"];
            var title = "Legenda"
            var icons = [
                '<?= base_url() ?>assets/fe/otw.png',
                '<?= base_url() ?>assets/fe/datang.png'
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




        // Atur properti CSS untuk menambahkan lebar
        var controlContainer = layerControl.getContainer();
        controlContainer.style.width = '250px';
        // controlContainer.style.marginTop = '30px';


        L.control.zoom({
            position: 'topleft',
        }).addTo(map);

        map.doubleClickZoom.disable();


        var centerMap = map.getCenter();
        var centerLat = centerMap['lat'];
        var centerLng = centerMap['lng'];




    });
</script>