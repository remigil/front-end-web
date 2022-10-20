 

<html>
<head>
<script src="https://cdn.jsdelivr.net/npm/clappr@latest/dist/clappr.min.js"> 
</script>
</head>
<div id="player"></div>
<script>
  $(document).ready(function() { 
    file_get_contents('php://input');
  });
  function file_get_contents(filename) {
    alert('jalan');
    fetch(filename).then((resp) => resp.text()).then(function(data) {
        return data;
    });
  }
</script>
</body>
</html>