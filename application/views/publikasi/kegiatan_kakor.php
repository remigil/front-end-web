<!-- <div class="head_content" style="background-image: url('assets/fe/hero.png');"> -->

</div>
<!-- ======= Breadcrumbs ======= -->
    <div class="pagebreadcrumbs">
    	<div class="d-flex align-items-center">
        <div class="container position-relative">
        	<div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
            	<h2><?= $headline?></h2>
            	
            </div>
        	</div>
        </div>
    	</div>
    	<nav>
        <div class="container-fluid" >
        <div class="container-fluid" >
        <div class="container-fluid" >
        	<ol style="list-style: none;">
            <li><a href="<?= base_url()?>home">Home</a></li>
            <li><?= $breadcrumb?></li>
        	</ol>
        </div>
        </div>
        </div>
    	</nav>
    </div><!-- End Breadcrumbs -->


<!-- Content
================================================== -->

<!-- Container -->

<!-- ======= Contact Section ======= -->
<div class="container-fluid">
<div class="container-fluid">
<div class="container-fluid">

	<p class="text-center">kegiatan sehari-hari korlantas dalam menjaga keamanan masyarakat</p>

	<div class="fullwidth border-top margin-top-40 margin-bottom-0 padding-top-60 padding-bottom-65" data-background-color="#ffffff">
        <!-- YT Carousel -->
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <h3 class="headline centered margin-bottom-40 margin-top-10">Video Kegiatan Kakorlantas Polri</h3>
                </div>
                
                <!-- Carousel -->
                <div class="col-md-12">
					<div style="overflow-x: auto;overflow-y:hidden; white-space:nowrap; scrollbar-width: thin;" class="carousel">
				
							<iframe width="360" height="200" src="https://www.youtube.com/embed/SclG0y3UaHU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
						
						
							<iframe width="360" height="200" src="https://www.youtube.com/embed/qHjFoTw6lPY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						
						
							<iframe width="360" height="200" src="https://www.youtube.com/embed/PtXnDn8UPN0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						
						
							<iframe width="360" height="200" src="https://www.youtube.com/embed/FzRqixxX4mg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						
						
							<iframe width="360" height="200" src="https://www.youtube.com/embed/FzRqixxX4mg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						
						
							<iframe width="360" height="200" src="https://www.youtube.com/embed/FzRqixxX4mg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						
					</div>
                </div>
                <!-- Carousel / End -->

            </div>
        </div>
        <!-- Logo Carousel / End -->
    </div>

	<div class="fullwidth border-top margin-top-40 margin-bottom-0 padding-top-60 padding-bottom-65" data-background-color="#ffffff">
        <!-- YT Carousel -->
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <h3 class="headline centered margin-bottom-40 margin-top-10">Photo Kegiatan Kakorlantas Polri</h3>
                </div>
                
                <!-- Carousel -->
                <div class="col-md-12">
					<div style="overflow-x: auto;overflow-y:hidden; white-space:nowrap; scrollbar-width: thin;" class="carousel">
						
							<img src="<?= base_url()?>assets/fe/hero.png" alt="" width="360" height="200">
							<img src="<?= base_url()?>assets/fe/hero.png" alt="" width="360" height="200">
							<img src="<?= base_url()?>assets/fe/hero.png" alt="" width="360" height="200">
							<img src="<?= base_url()?>assets/fe/hero.png" alt="" width="360" height="200">
						
						
							
						
					</div>
                </div>
                <!-- Carousel / End -->

            </div>
        </div>
        <!-- Logo Carousel / End -->
    </div>

	
</div>
</div>
</div>
<!-- Container / End -->

  




<script>
    $(document).ready(function() { 
        var initialCenter = [-2.548926, 118.0148634];
        var initialZoom = 5;
        var googleStreet = L.tileLayer('https://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
            maxZoom: 20,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
            attribution: '&copy; <a href="https://maps.google.com/">Google Map <?= date('Y') ?></a> contributors'
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

        // StART MAP SECTION
        var mapContainer = L.map('map', {
            maxZoom: 20,
            minZoom: 1,
            zoomSnap: 0.25,
            zoomControl: false,
            layers: [googleStreet]
        }).setView(initialCenter, initialZoom);  


        var icon = L.icon({
            iconUrl: 'http://tourbanyuwangi.com/wp-content/uploads/2018/05/map.png',
            iconSize: [80, 80], // size of the icon
        });
                        
                        
        var baseMaps = {
            "Google Map Street": googleStreet,
            "Google Map Satelite": googleSatelite,
            "Google Map Hybrid": googleHybrid,
            "Google Map Terrain": googleTerrain,
        };
        var overlayMaps = {};
        // L.control.layers(baseMaps, overlayMaps, {
        //     position: 'bottomleft'
        // }).addTo(mapContainer);
        // L.control.zoom({
        //     position: 'bottomright'
        // }).addTo(mapContainer);
    });

	
</script>

