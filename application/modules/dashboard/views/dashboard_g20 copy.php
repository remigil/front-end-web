<div id="map22" style="height: 700px;
            width: 100%"></div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEY9jbE_zL8SV7c6meCf7-lV3JLcbKnlY&callback=initMap&v=weekly" defer></script>
<script>
/**
 * @license
 * Copyright 2019 Google LLC. All Rights Reserved.
 * SPDX-License-Identifier: Apache-2.0
 */
var map;

function initMap() {
    map = new google.maps.Map(document.getElementById("map22"), {
    center: {
        lat: -34.397,
        lng: 150.644
    },
    zoom: 8,
    });
}


$(document).ready(function() {
    initMap();
});
</script>