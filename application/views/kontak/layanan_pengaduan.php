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
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d126916.97940835782!2d106.84999300000001!3d-6.243214!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfa8b81b7b3cc946f!2sPusat%20Kendali%20Koordinasi%20Komunikasi%20dan%20Informasi%20Korlantas%20Polri!5e0!3m2!1sid!2sid!4v1665028541383!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div><!-- End Breadcrumbs -->


<!-- Content
================================================== -->

<!-- Container -->

<!-- ======= Contact Section ======= -->
<div class="containter">

	<section id="contact" class="contact">
		<div class="container">
	
			<div class="row gy-5 gx-lg-5">
	
			<div class="col-lg-4">
	
				<div class="info">
					<h3>Pusat Kendali, Koordinasi, Komunikasi dan Informasi Korlantas Polri</h3>
					<p>Call Center : 1-500-669</p>
					<p>SMS center : 9119</p>
	
					<div class="info-item d-flex">
						<i class="bi bi-geo-alt flex-shrink-0"></i>
						<div>
							<h4>Alamat:</h4>
							<p>Jl. MT Haryono Kav. 37 – 38, Jakarta 12770</p>
						</div>
					</div><!-- End Info Item -->
				</div>
			</div>
			<div class="col-lg-8">
				<h3>Form layanan pengaduan</h4>
				<p style="text-align:justify ;">
					Dalam rangka mewujudkan Kamseltibcarlantas dan pelayanan yang Prima di bidang Lalu Lintas, Korlantas Polri menyediakan sistem untuk penanganan pengaduan publik secara online, berupa situs dan aplikasi k3i Korlantas Polri , yang merupakan Sistem Pengelolaan Pengaduan Pelayanan Publik. Pengaduan yang kami layani adalah yang berhubungan dengan permasalahan Lalu Lintas antara lain:
				</p>
				<ol>
					<li>Informasi bidang lalu Lintas</li>
					<li>Kecelakaan Lalu Lintas</li>
					<li>Kemacetan Lalu Lintas</li>
					<li>Rambu-rambu Lalu Lintas</li>
					<li>Calo, Pungli, Suap</li>
					<li>Balap Liar</li>
					<li>Dan informasi terkait lainnya.</li>
				</ol>
				<p style="text-align:justify ;">
					Selain layanan Pengaduan di <b><a href="<?= base_url()?>home">Web K3I</a></b> ini, Korlantas Polri juga menyiapkan layanan <b><a href="<?= base_url()?>Layanan_chatbot">Chatbot K3I</a></b>  dan <b><a href="Contact_center">Contact Center NTMC</a></b> di Play Store maupun App Store yang operasional 1 x 24 jam, Call Center 1500669, SMS Center 9119.
				</p>
				<form action="" class="form-pengaduan" id="pengaduan" method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-6">
							<div class="form-item mb-3">
								<input type="text" id="name" class="form-control" name="name" placeholder="Nama">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-item mb-3">
								<input type="text" id="notelp" class="form-control" name="notelp" placeholder="No Telepon">
							</div>
						</div>
						<div class="col-md-12">
							<textarea name="pesan" id="pesan" cols="30" rows="10" placeholder="Tulis Pesan"></textarea>
						</div>
						<div class="col-md-12">
							
						</div>
						<div class="col-md-12">
							<button type="submit" class="btn btn-primary waves-effect float-end" id="btn_edit" style="width: 100%; letter-spacing: 2px ; font-size:15px ;">KIRIM</button>
						</div>
					</div>
				</form>
			</div><!-- End Contact Form -->
	
			</div>
	
		  </div>
		</section><!-- End Contact Section -->
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
