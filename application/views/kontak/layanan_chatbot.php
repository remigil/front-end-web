<div class="head_content" style="background-image: url('assets/fe/hero.png');">

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
        <div class="container" >
        	<ol style="list-style: none;">
            <li><a href="<?= base_url()?>home">Home</a></li>
            <li><?= $breadcrumb?></li>
        	</ol>
        </div>
    	</nav>
    </div><!-- End Breadcrumbs -->


<!-- Content
================================================== -->

<!-- Container -->
<div class="container margin-top-30">
	<div id="chatbotk3i">
		<div class="row">
			<div class="col-md-12 text-center mb-5">
				<h4>TENTANG CHATBOT K3I</h4>
				<p>Chatbot k3i merupakan layanan informasi Korlantas POLRI yang didukung asisten virtual untuk penyediaan dan penerimaan informasi.</p>
				<h4>PETUNJUK PENGGUNAAN</h4>
				<p>Pengunjung dapat langsung mengakses asisten virtual ini baik dari website k3i maupun aplikasi k3i untuk memulai proses komunikasi. Terkait pengaduan, agen Korlantas POLRI akan mendata dan juga meneruskan laporan baik ke petugas Korlantas maupun satker dan stakeholders. terkait</p>
			</div>
			<div class="col-md-12 mb-5">
				<div class="row">
					<div class="col-md-3">
						<img src="<?= base_url()?>assets/fe/chatbot-02.jpg" alt="">
					</div>
					<div class="col-md-3">
						<img src="<?= base_url()?>assets/fe/chatbot-01.jpg" alt="">
					</div>
					<div class="col-md-3">
						<img src="<?= base_url()?>assets/fe/chatbot-03.jpg" alt="">
					</div>
					<div class="col-md-3">
						<img src="<?= base_url()?>assets/fe/chatbot-04.jpg" alt="">
					</div>
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
