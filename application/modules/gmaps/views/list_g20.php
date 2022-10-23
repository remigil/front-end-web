<!-- <div class="mapouter">
  <div class="gmap_canvas">
    <iframe style="width: 100%;" height="618" id="gmap_canvas" src="https://www.google.com/maps/place/Bali/@-8.6359009,115.1440683,61521m/data=!3m1!1e3!4m5!3m4!1s0x2dd141d3e8100fa1:0x24910fb14b24e690!8m2!3d-8.4095178!4d115.188916" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    <a href="https://123movies-to.org"></a>
    <br>
    <style>.mapouter{position:relative;text-align:right;height:618px;width:100%;}</style>
    <a href="https://www.embedgooglemap.net">google maps iframe options</a>
    <style>.gmap_canvas {overflow:hidden;background:none!important;height:618px;width:100%;}</style>
  </div>
</div> --> 

<script>
  console.log('ada'); 
  fetch('<?php echo base_url()?>dataVendor/gpsId.json')
    .then((response) => response.json())
    .then((json) => console.log(json));
	  
  // $.ajax({
  //     type : "POST",
  //     url : "http://k3ig20korlantas.id/gpsid", 
  //     // data : {
  //       //    "id": 1,
  //       // }, 
  //       dataType : "JSON",
  //       success : function(result){  
          
          
          
  //         // var formData = new FormData($('.formAdd')[0]); 
  //         // console.log(formData);
 
  
  //     console.log(result);
  //   } 
  // });
</script>