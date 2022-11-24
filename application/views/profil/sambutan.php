<!-- <div class="head_content" style="background-image: url('assets/fe/hero.png'); background-size:cover;"></div> -->

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
	<div class="row">
		<div class="col-md-12">
			<div class="text-center mb-5">
				<h4 style="color: #003A91;">SELAMAT DATANG DI PORTAL PUSAT KENDALI KOORDINASI KOMUNIKASI DAN INFORMASI KORLANTAS POLRI</h4>
			</div>

		</div>

		<div class="col-md-12">
			<p class="text-break" style="text-align:justify;">
			<b><a href="<?= base_url()?>home"> www.k3i.korlantas.polri.go.id</a></b> merupakan bentuk pelayanan masyarakat online di bidang Lalu Lintas dan Angkutan Jalan (LLAJ), dimana salah satu elemen penting dalam mewujudkan penyelenggaraan negara yang terbuka adalah hak publik untuk memperoleh pelayanan dan informasi publik sesuai tatanan di dalam berbangsa dan bernegara. Dalam hal ini, pemerintahan di Indonesia beserta institusi lainnya seperti kami Korlantas Polri bekerja untuk memastikan bahwa setiap rakyat di seluruh tanah air harus dapat merasakan kehadiran pelayanan pemerintahan di bidang LLAJ yang diselenggarakan oleh Polri sebagai salah satu pemangku kepentingan sesuai amanat Undang-Undang No.22 Tahun 2009 tentang LLAJ. Untuk itu Korlantas Polri sebagai pusat kendali, koordinasi, komunikasi dan informasi lalu lintas selalu berusaha untuk memenuhi hak pelayanan, keterbukaan informasi, dan perlindungan masyarakat yang prima dan lebih mengedepankan kepentingan umum, mempermudah urusan publik, mempersingkat waktu proses pelaksanaan urusan publik, dll.
			</p>
			<p class="text-break" style="text-align:justify ;">
			Untuk menjalankan fungsi organisasi guna mencapai visi dan misinya, Korlantas Polri dilengkapi dengan program kerja, yang salah satunya adalah program transformasi menuju Polri yang Presisi [Prediktif, responsibilitas, transparansi, berkeadilan} pada fungsi lalu lintas Polri yang terdiri dari 16 program yaitu :
			</p>
			<p>
				<ul>
					<li>Penataan Kelembagaan</li>
					<li>Perubahan Sistem dan Metode Organisasi.</li>
					<li>Menjadikan SDM Polri Yang Unggul di Era Police 4.0.</li>
					<li>Perubahan Teknologi Kepolisian Modern di Era Police 4.0.</li>
					<li>Pemantapan Kinerja Pemeliharaan Keamanan dan Ketertiban Masyarakat.</li>
					<li>Peningkatan Kinerja Penegakan Hukum.</li>
					<li>Pemantapan Dukungan Polri Dalam Penanganan Covid-19.</li>
					<li>Pemulihan Ekonomi Nasional.</li>
					<li>Menjamin Keamanan Program Prioritas Nasional.</li>
					<li>Penguatan Penanganan Konflik Sosial.</li>
					<li>Peningkatan Kualitas Pelayanan Publik Polri.</li>
					<li>Mewujudkan Pelayanan Publik Polri Yang Terintegrasi.</li>
					<li>Pemantapan Komunikasi Publik.</li>
					<li>Pengawasan Pimpinan Dalam Setiap Kegiatan.</li>
					<li>Penguatan Fungsi Pengawasan.</li>
					<li>Pengawasan Oleh Masyarakat Pencari Keadilan (Public Complaint).</li>
				</ul>
			</p>
			<p class="text-break" style="text-align:justify ;">
			Terwujudnya pelayanan bidang Lalu Lintas dan Angkutan Jalan yang aman, selamat, tertib, lancar, dan terpadu merupakan tujuan yang diamanatkan oleh Undang-undang nomor 22 tahun 2009 tentang Lalu Lintas dan Angkutan Jalan. Untuk mencapai tujuan tersebut diperlukan berbagai perangkat pengelolaan, antara lain adalah pelayanan Online. Dalam hal ini, untuk mendukung kemudahan pencapaiannya dan dapat menyentuh ke seluruh penjuru masyarakat Negara Kesatuan Republik Indonesia, Korlantas Polri memperkenalkan pelayanan online tahap awal berbasis web melalui <b><a href="<?= base_url()?>home">www.k3i.korlantas.polri.go.id.</a></b>
			</p>
			<p class="text-break" style="text-align:justify ;">
			Pelayanan online ini akan menjadi komitmen kami untuk di kembangkan terus sehingga pada suatu saat, dan sesuai pertumbuhan ekonomi masyarakat dan teknologi informasi dan komunikasi, penyelenggaraan LLAJ online dapat seluruhnya memenuhi kebutuhan masyarakat dan para pemangku kepentingan di seluruh tanah air.
			</p>
			<p class="mb-5">
			Hormat Kami,
				<br><br>
			<b>Kepala Korps Lalu Lintas Polri</b>
				<br><br><br><br>
			<b>Drs. Firman Santyabudi, M.Si.</b>
				<br><br>
			<b>Inspektur Jendral Polisi</b>
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
