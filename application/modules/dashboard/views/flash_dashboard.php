<style>
    /* CSS untuk kontrol lapisan */
.leaflet-control-layers {
  background-color: rgba(255, 255, 255, 0.8);
  border-radius: 5px;
  padding: 10px;}

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





</style>

<button title="Filter" id="button" style="background: transparent;height:40px;border:none;margin-top:-3px" onclick="changeData()">
                Filter
            </button>

<div class="row">
    <div class="col-md-12">
        <div id="mapG20Dashboard">
            
        </div>
    </div>
</div>



<!-- <script src="<?php echo base_url(); ?>assets/fe/js/kotabogor_polygon.js"></script> -->

<script>

    // console.log('hello')

    $(document).ready(function() {
        var data = '<?= base_url()?>ngawas/sebaran';
        // console.log(data);
        
        

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
            
            }).addTo(map);

            geoLayer.eachLayer(function(layer) {
            layer.bindPopup(popupText);
            });
        });
        }


        function getColor(d) {
        return d > 40 ? '#0F5304' :
            d > 30 ? '#1CBE0D' :
            d > 20 ? '#67E404' :
            d > 10 ? '#E15E03' :
            d > 0 ? '#FFA262' :
                    '#686869';
    }


let GeoJson = [
    'BogorSelatan.geojson',
    'BogorTengah.geojson',
    'BogorTimur.geojson',
    'BogorUtara.geojson',
    'TanahSereal.geojson',
    'bogor-barat.json'
]


// let kecamatanGroup = L.LayerGroup();
// console.log(GeoJson);


        // let kecamatanGroup = L.layerGroup();
        let kecamatanGroup = L.layerGroup();
        getGeoJson = async () => {
        for (i in GeoJson) {
            var data = GeoJson[i]
        
            url = `<?= base_url() ?>assets/fe/js/` + data
            let get = await fetch(url)
            let json = await get.json();
            // console.log(json);
            geojson = L.geoJson(json, {
               
            }).addTo(kecamatanGroup)
        }
    }
    getGeoJson().then(() => {
        kecamatanGroup.addTo(map)
    })

      

   let changeData = async () => {
        udata = '<?= base_url()?>ngawas/sebaran'
let get = await fetch(udata);
let json = await get.json()
console.log(json);
   }

        

        var iconOtw = L.icon({
            // iconUrl :'https://leafletjs.com/examples/custom-icons/leaf-green.png',
            iconUrl :'<?= base_url()?>assets/fe/otw.png',
            iconSize: [20, 30],
            // iconAnchor: [22, 94],
            popupAnchor: [-0, -16]
        })

        var markergrup_keberangkatan = L.markerClusterGroup();
        var marker_keberangkatan = [];

        $.ajax({
            url: '<?= base_url()?>ngawas/sebaran',
            type: 'POST',
            dataType: 'JSON',
            success: function(result) {
                ressData = result;
                
                
                for (var i = 0; i < ressData.length; i++) {
                    if(ressData[i].kode_kec_start != ""){
                        var lat_keberangkatan = parseFloat(ressData[i].start_coordinate.latitude)
                        var lng_keberangkatan = parseFloat(ressData[i].start_coordinate.longitude)
                        
                        var nama = ressData[i].society.person_name
                        var type_vehicle = ressData[i].type_vehicle.type_name
                        var loc_start = ressData[i].subdistrict_start
                        var loc_end = ressData[i].district_end
                        var id = ressData[i].id
    
                        marker_keberangkatan[i] = L.marker([lat_keberangkatan,lng_keberangkatan],{icon: iconOtw}).bindPopup(`
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


    //     function style(feature) {
    //     totaldata = 0
       
        
    // }
    // style();

  

        // kedatangan 
        var iconDatang = L.icon({
            iconUrl :'<?= base_url()?>assets/fe/datang.png',
            iconSize: [20, 30],
            // iconAnchor: [22, 94],
            popupAnchor: [-0, -16]
        })
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
                        var loc_start = ressData[i].district_start
                        var loc_end = ressData[i].subdistrict_end
                        var id = ressData[i].id
                        // console.log(lng_kedatangan);
    
                        marker_kedatangan[i] = L.marker([lat_kedatangan,lng_kedatangan],{icon: iconDatang}).bindPopup(`
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
    });

    

    


</script>