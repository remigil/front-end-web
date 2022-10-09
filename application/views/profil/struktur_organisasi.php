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
	<div class="text-center mb-5">
		<h4 style="color: #003A91;">KEDUDUKAN KORLANTAS POLRI</h4>
		<P>Korlantas Polri merupakan unsur pelaksana tugas pokok yang berada di bawah Kapolri:</P>
	</div>
	<div class="row">
		<div class="col-md-12 text-center">
			<img src="<?= base_url()?>assets/fe/struktur-organisasi.jpg" alt="">

		</div>
		<div class="col-md-12">
			<h4 class="text-center mt-2 p-2" style="background-color: #003A91; color:white; border-radius:10px; height:30px;">Tugas Korlantas Polri</h4>
			<p class="text-break" style="text-align:justify ;">
				<ol>
					<li>Membina dan menyelenggarakan fungsi lalu lintas yang meliputi pendidikan masyarakat, penegakan hukum, pengkajian masalah lalu lintas, registrasi dan identifikasi pengemudi dan kendaraan bermotor serta patroli jalan raya;</li>
					<li>Melaksanakan penertiban lalu lintas, manajemen operasional dan rekayasa lalu lintas (engineering);</li>
					<li>Menyelenggarakan pusat Komunikasi, Koordinasi, Kendali dan Informasi (K3I) tentang lalu lintas;</li>
					<li>Mengkoordinasikan pemangku kepentingan yang berkaitan dengan penyelenggaraan lalu lintas;</li>
					<li>Memberikan rekomendasi dampak lalu lintas; dan</li>
					<li>Melaksanakan koordinasi dan/atau pengawasan PPNS.</li>
				</ol>
			</p>
		</div>
		<div class="col-md-12">
			<h4 class="text-center mt-2 p-2" style="background-color: #003A91; color:white; border-radius:10px; height:30px;">Fungsi Korlantas Polri</h4>
			<p class="text-break" style="text-align:justify ;">
				<ol>
					<li>Penyusunan kebijakan strategis yang berkaitan dengan peran dan fungsi polisi lalu lintas, perumusan dan atau pengembangan sistem dan metode termasuk petunjuk pelaksanaan fungsi lalu lintas, membangun kemitraan dan kerjasama baik dalam maupun luar negeri, serta menyelenggarakan koordinasi dengan pemangku kepentingan lainnya di bidang lalu lintas;</li>
					<li>Pelaksanaan manajemen operasional lalu lintas yang meliputi kegiatan memelihara dan mewujudkan keamanan, keselamatan, ketertiban dan kelancaran lalu lintas di jalan raya, jalan tol, serta jalan-jalan luar kota sebagai penghubung (linking ping) antar kesatuan lalu lintas melalui kegiatan pengaturan, penjagaan, pengawalan, patroli, TPKP, Quick Respon Time, dan menjadi jejaring National Traffic Management Centre (NTMC);</li>
					<li>Pengembangan sistem dan metode termasuk petunjuk pelaksanaan teknis penegakan hukum yang meliputi kegiatan penindakan terhadap pelanggaran aturan lalu lintas, penanganan kecelakaan lalu lintas,penyidikan kecelakaan lalu lintas, serta koordinasi dan pengawasan PPNS;</li>
					<li>Pendidikan masyarakat dalam berlalu lintas, melalui kegiatan sosialisasi, penanaman nilai, membangun kesadaran, kepekaan, kepedulian akan tertib lalu lintas, serta pendidikan berlalu lintas secara formal dan informal;</li>
					<li>Pembinaan teknis dan administrasi registrasi serta identifikasi pengemudi dan kendaraan bermotor yang meliputi kegiatan pengecekan administrasi dan fisik kendaraan serta pengujian kompetensi pengemudi untuk menjamin keabsahan dokumen kendaraan bermotor dan sarana kontrol dalam rangka penegakan hukum maupun untuk kepentingan forensik kepolisian;</li>
					<li>Pengkajian bidang lalu lintas yang meliputi kegiatan keamanan dan keselamatan lalu lintas, pemetaan, inventarisasi, identifikasi wilayah, masalah maupun potensi-potensi yang berkaitan dengan lalu lintas dalam sistem Filling and Recording, baik untuk kepentingan internal maupun eksternal kepolisian, serta perumusan rekomendasi dampak lalu lintas; dan</li>
					<li>Pelaksanaan operasional NTMC, yang meliputi kegiatan pengumpulan, pengolahan dan penyajian data lalu lintas, sebagai pusat kendali, koordinasi, komunikasi, dan informasi, pengembangan sistem dan teknologi informasi dan komunikasi lalu lintas, serta pelayanan informasi lalu lintas yang menyangkut pelanggaran dan kecelakaan lalu lintas dengan lingkup data jajaran Polri.</li>
				</ol>
			</p>
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
