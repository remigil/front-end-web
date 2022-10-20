 

<html>
<head>
<script src="https://cdn.jsdelivr.net/npm/clappr@latest/dist/clappr.min.js"> 
</script>
</head>
<div id="player"></div>
<script>
function file_get_contents(filename) {
    fetch(filename).then((resp) => resp.text()).then(function(data) {
        return data;
    });
}
file_get_contents('php://input');
</script>
</body>
</html>