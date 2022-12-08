<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="<?= base_url()?>home">Home</a></li>
          <li><?= $breadcrumb?></li>
        </ol>
        <h2><?= $headline?></h2>

      </div>
    </section><!-- End Breadcrumbs -->


<!-- Content
================================================== -->

<!-- Container -->
<div class="container-fluid margin-top-30">
<div class="container-fluid">
<div class="container-fluid">
	
	<div class="row">
		<div class="col-md-12">
			<div class="text-center mb-5">
				<h4 class="mb-5" style="color: #003A91;">Visi & Misi Korlantas Polri</h4>
				<img src="<?= base_url()?>assets/fe/presisi.jpg" alt="">
				<p class="mt-5" style="color: #003A91;"><b>Polantas siap mendukung transformasi menuju Polri yang PRESISI ( Prediktif –  Responsibilitas – Transparansi Berkeadilan )</b></p>
			</div>
		</div>
		<div class="col-md-6">
			<h4 class="text-center mt-2 p-2" style="background-color: #003A91; color:white; border-radius:10px; height:30px;">Visi Korlantas Polri</h4>
			<p class="text-break" style="text-align:justify ;">
			Polisi Lalu Lintas (Polantas) Indonesia adalah mewujudkan pelayanan kamseltibcarlantas yang prima dan unggul melalui penegakan hukum yang tegas, adil, dan humanis; dalam rangka meningkatkan kesadaran dan kepatuhan berlalu lintas, serta terjalinnya sinergi polisional yang proaktif, dalam rangka memantapkan situasi keamanan dalam negeri.
			</p>
		</div>
		<div class="col-md-6">
			<h4 class="text-center mt-2 p-2" style="background-color: #003A91; color:white; border-radius:10px; height:30px;">Misi Korlantas Polri</h4>
			<p class="text-break">
				<ol style="text-align:justify ;">
					<li>Memelihara dan mewujudkan pelayanan keamanan, keselamatan, ketertiban dan kelancaran lalu lintas yang prima dan unggul secara cepat, tepat, efisien, transparan dan akuntabel.</li>
					<li>Menjaga keamanan, ketertiban, dan kelancaran lalu lintas dalam rangka menangkal dan mencegah potensi gangguan keamanan di jalan, serta menjamin keselamatan dan kelancaran arus lalu lintas orang dan barang.</li>
					<li>Melaksanakan penegakan hukum secara profesional, objektif, proposional, dan efektif di bidang lalu lintas; serta memberikan perlindungan, pengayoman dan pelayanan secara mudah, transparan, akuntabel, dan tidak diskriminatif, dalam rangka menjamin kepastian hukum dan rasa keadilan.</li>
					<li>Mengembangkan sinergitas polisional yang proaktif berbasis pada masyarakat patuh dan sadar hukum.</li>
					<li>Menjamin keberhasilan penanggulangan permasalahan lalu lintas guna meningkatkan laju pertumbuhan ekonomi dan stabilitas keamanan dalam negeri.</li>
					<li>Mengelola secara profesional, transparan, akuntabel, dan modern seluruh sumber daya Polantas guna mendukung tugas Polri.</li>
					<li>Mewujudkan budaya tertib lalu lintas dengan terus melaksanakan kampanye pelopor keselamatan berlalu lintas.</li>
					<li>Mengembangkan sarana dan prasarana di bidang lalu lintas sesuai tuntutan dan harapan masyakarat, serta optimalisasi pusat kendali sistem informasi dan komunikasi lalu lintas angkutan jalan dalam rangka menjamin pelayanan keamanan, keselamatan, ketertiban dan kelancaran berlalu lintas kepada masyarakat.</li>
				</ol>
			</p>
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
