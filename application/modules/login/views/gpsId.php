 

<html>
<head>
<script src="https://cdn.jsdelivr.net/npm/clappr@latest/dist/clappr.min.js"> 
</script>
</head>
<div id="player"></div>
<script>
  fetch('<?php echo base_url()?>login/gpsid', {
      method: 'post',
      mode: "same-origin",
      headers: {
          "X-Requested-With": "XMLHttpRequest", 
          "Content-type": "application/x-www-form-urlencoded"
      },
      credentials: "same-origin",
      body: {
        "VehicleId":"862476051307543",
        "VehicleNumber":"b 1925 WKX",
        "DatetimeUTC":"2022-01-13 08:05:51",
        "GpsLocation":"Jalan Petojo Sabangan VI, RW 04, Petojo Selatan, Gambir, Jakarta Pusat, Daerah Khusus Ibukota Jakarta, 10160, Indonesia",
        "Lon":"106.8130966",
        "Lat":"-6.1777583",
        "Speed":"0",
        "Direction":"0",
        "Engine":"OFF",
        "Odometer":146247,
        "Car_status" : "START"
      }
  }).then(response => response.text())
  .then(output => {
    // do stuff
  });
</script>
</body>
</html>