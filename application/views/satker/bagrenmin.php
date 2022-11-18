<div class="head_content" style="background-image: url('assets/fe/hero.png');">

</div>
<!-- ======= Breadcrumbs ======= -->
    <div class="pagebreadcrumbs">
    	<nav>
			<div class="container p-4" >
				<ol style="list-style: none;">
				<li><a href="<?= base_url()?>home">Home</a></li>
				<li><?= $breadcrumb?></li>
				</ol>
			</div>
    	</nav>
		<div class="container">
			<div class="row">
				<div class="col-md-1 text-center">
					<img src="<?= base_url()?>assets/fe/client/korlantas.png" alt="">
				</div>
				<div class="col-md-7">
					<h3><?= $headline?></h3>
					<hr>
					<p>	
						Informasi Lalu Lintas Indonesia on Korlantas Polri, Jl. MT Haryono Kav. 37-38 <br>
						Call Center : 1-500-669 || SMS center : 9119<br>
						Email: <a href="mailto:bagrenmin.korlantas@polri.go.id">bagrenmin.korlantas@polri.go.id</a> 
					</p>
				</div>
				<div class="col-md-4">
					<p>Website:</p>
					<a href="https://korlantas.polri.go.id/">https://korlantas.polri.go.id/</a>
					<p>Social Media:</p>
					<ul class="social-icons margin-top-20">
						<li><a class="facebook" href="https://web.facebook.com/pusatk3ikorlantaspolri/"><i class="icon-facebook"></i></a></li>
						<li><a class="twitter" href="https://twitter.com/K3IKorlantas"><i class="icon-twitter"></i></a></li>
						<li><a class="instagram" href="https://www.instagram.com/k3ikorlantaspolri/"><i class="icon-instagram"></i></a></li>
						<li><a class="youtube" href="https://www.youtube.com/channel/UCXr0rFTNDPLYkU0-PONdjLg"><i class="icon-youtube"></i></a></li>
					</ul>
				</div>
	
			</div>

		</div>
	</div>

    </div><!-- End Breadcrumbs -->


<!-- Content
================================================== -->

<!-- Container -->
<div class="container margin-top-30">

	<!-- <div class="row">
		<div class="col-md-8">
			<h3>Layanan Aplikasi Ditgakkum Korlantas Polri</h3>
			<div class="col-md-3">
				test
			</div>
			<div class="col-md-3">
				test
			</div>
			<div class="col-md-3">
				test
			</div>
			<div class="col-md-3">
				test
			</div>
		</div>
		<div class="col-md-4">
			<h3>Dokumen Peraturan</h3>
			<ol>
				<li>test</li>
				<li>test</li>
			</ol>
		</div>
	</div>
	<hr> -->

	<div class="row">
		<div class="col-md-12">
			<h3>Media Channel</h3>
			<img src="<?php echo base_url();?>assets/fe/banner.png" alt="">
		</div>
		<div class="col-md-8">
			<iframe width="760" height="450" src="https://www.youtube.com/embed/qHjFoTw6lPY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div> 
		<div class="col-md-4">
			<div class="row" style="height: 450px;overflow-y: auto;scrollbar-width: thin;">
				<div class="col-md-12">
					<iframe width="360" height="200" src="https://www.youtube.com/embed/FzRqixxX4mg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
				</div>
				<div class="col-md-12">
					<iframe width="360" height="200" src="https://www.youtube.com/embed/qHjFoTw6lPY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<div class="col-md-12">
					<iframe width="360" height="200" src="https://www.youtube.com/embed/FzRqixxX4mg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</div> 
	</div>
	<hr>

	<div class="row">
		<div class="col-md-12">
			<h3>Dokumen Kegiatan Bagrenmin Korlantas Polri</h3>
		</div>
		<div class="col-md-8">
			<iframe width="760" height="450" src="https://www.youtube.com/embed/qHjFoTw6lPY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div> 
		<div class="col-md-4">
			<div class="row" style="height: 450px;overflow-y: auto;scrollbar-width: thin;">
				<div class="col-md-12">
					<iframe width="360" height="200" src="https://www.youtube.com/embed/FzRqixxX4mg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
				</div>
				<div class="col-md-12">
					<iframe width="360" height="200" src="https://www.youtube.com/embed/qHjFoTw6lPY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<div class="col-md-12">
					<iframe width="360" height="200" src="https://www.youtube.com/embed/FzRqixxX4mg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
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
