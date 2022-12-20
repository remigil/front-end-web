<!DOCTYPE html>
<html>
<head>
    <title>Full Canvas</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/leaflet.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/MarkerCluster.Default.css">
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.1/leaflet.ie.css" />
    <![endif]-->
    <style>
        html, body, #map { height: 100%; padding: 0; margin: 0;}
    </style>
    <script src="<?php echo base_url(); ?>assets/lib/leaflet.js"></script>
    <script src="<?php echo base_url(); ?>assets/lib/elasticsearch.js"></script>
    <script src="<?php echo base_url(); ?>assets/lib/ngeohash.js"></script>
    <script src="<?php echo base_url(); ?>assets/lib/leaflet-marker-cluster.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.2.min.js"   integrity="sha256-lZFHibXzMHo3GGeehn1hudTAP3Sc0uKXBXAzHX1sjtk="   crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>assets/lib/parse-1.2.13.min.js"></script>
</head>
<body>
<div id="map"></div>
<script>
    var tiles = L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
			maxZoom: 9,
			attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors, Points &copy 2012 LINZ'
		});
    map = L.map('map', { zoom: 13, layers: [tiles]});
    map.on('load', function(e){
        search()
    });
    map.setView([-8.751740, 115.149643], 5);
    map.on('zoomend dragend',function(e){
        // search();
    });
    markers = L.markerClusterGroup({
        chunkedLoading: true,
        spiderfyOnMaxZoom: true,
        showCoverageOnHover: true,
        iconCreateFunction: function(cluster) {
            //Grouping the cluster returned by the server, if 
            var markers = cluster.getAllChildMarkers();
            var markerCount = 0;
            markers.forEach(function(m){markerCount = markerCount + m.count;});

            return new L.DivIcon({ html: '<div class=" clustergroup0 leaflet-marker-icon marker-cluster marker-cluster-medium leaflet-zoom-animated leaflet-clickable" tabindex="0" style="margin-left: -20px; margin-top: -20px; width: 40px; height: 40px; z-index: 233;"><div><span>'+markerCount+'</span></div></div>' });
        }
    });
    map.addLayer(markers);
    /* This will add all the clusters as returned by the elastic server.*/ 
    function makePoints(aggs){
        points = {};

        var markerList = [];
        aggs.forEach(function(agg, index){
            var center = geohash.decode (agg.key);//elastic return a geohas so need to change it into lat/lon
            console.log(center);
            var myIcon = L.divIcon({ html: '<div class="clustergroup0 leaflet-marker-icon marker-cluster marker-cluster-medium leaflet-zoom-animated leaflet-clickable" tabindex="0" style="margin-left: -20px; margin-top: -20px; width: 40px; height: 40px; z-index: 233;"><div><span>'+agg.doc_count+'</span></div></div>' });
            var marker = L.marker(new L.LatLng(center.latitude, center.longitude),{
                icon: L.divIcon({
                // className: 'location-pin',
                html: `<img src="<?php echo base_url();?>assets/icon/cctv.png" style="width: 40px; margin-top: -45px;margin-left: -18.5px;">`,
                iconSize: [5, 5],
                iconAnchor: [5, 10]
                // iconAnchor: [10, 33]
                })
            });
            marker.count = agg.doc_count;
            marker.sentiment = agg.sentiment_avg.value;
            marker.bindPopup(''+agg.doc_count);
            markerList.push(marker);
        });
        markers.addLayers(markerList);
    }

    
    function search(){
        var b = map.getBounds();
        var b1 = {
            "trlat": b.getNorthWest().lat,
            "trlon": b.getNorthWest().lng, 
            "bllat": b.getSouthEast().lat, 
            "bllon": b.getSouthEast().lng
        }
        //Get the zoom level
        var zoom = 3;
        if(map.getZoom() >= 5 && map.getZoom() <= 8){
            zoom =4;
        }
        else if(map.getZoom() >= 9 && map.getZoom() <= 11){
            zoom =5;
        }
        else if(map.getZoom() >= 12 && map.getZoom() <= 14){
            zoom =6;
        }
        else if(map.getZoom() >= 15 && map.getZoom() <= 17){
            zoom =7;
        }
        else if(map.getZoom() >= 18){
            zoom =8;
        }
        //making elastic api call via parse visit https://parse.com/
        // console.log(b1);
        var d = {
                "bounds": b1,
                "zoom": zoom
              };
                $.ajax({
	        method: "POST",
	        url: "https://parseapi.back4app.com/functions/search",
	        data: JSON.stringify(d),
                dataType: "text",
	        headers: {
	            "content-type": "application/json",
	            "X-Parse-Application-Id": "OjImjwifOD5EladE5585UAS3CJGy7ednZjucd5SE",
	            "X-Parse-REST-API-Key": "TC3nNk6nae1COCn0bZJ0XE76KBT4F5eR4Pm3gPWR"
	        }
    	})
	.done(function(resp) {
            markers.clearLayers();
            var r = JSON.parse(resp)
            r = JSON.parse(r.result)
            // console.log(r);
            makePoints(r.aggregations.zoom.buckets);
        })
        .fail(function(error) {
            console.log(error)
        }); 
   }
</script>
</body>
</html>