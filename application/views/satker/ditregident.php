

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
						Email: <a href="mailto:ditregident.korlantas@polri.go.id">ditregident.korlantas@polri.go.id</a> 
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

	<!-- Layanan Aplikasi Satker -->
	<div class="row">
		<h3 style="text-transform:uppercase ;">Layanan Aplikasi <?= $breadcrumb?></h3>
		<div class="col-md-3">
			<a href="http://rc.korlantas.polri.go.id:8900/eri2017/index.php" target="_blank" class="img-box" data-background-image="<?php echo base_url();?>assets/fe/bg1.jpg">
				<div class="img-box-content visible">
					<div class="row">
						<div class="col-md-12">
							<img src="<?= base_url()?>assets/fe/client/korlantas.png" alt=""  width="70px" height="70px">
							<h5 style="color: white"><b>ERI</b></h5>
						</div>
						<div class="col-md-12">
							<p style="color: white; font-size:10px">Electronic Registration and Identification adalah sistem untuk mendata serta mengorganisir data-data kendaraan bermotor dan seluruh riwayatnya</p>
						</div>
					</div>
					<!-- <a href="<?php echo base_url()?>home">Selengkapnya</a> --> 
				</div>
			</a>
		</div>
		<div class="col-md-3">
			<a href="https://www.digitalkorlantas.id/" target="_blank" class="img-box" data-background-image="<?php echo base_url();?>assets/fe/bg1.jpg">
				<div class="img-box-content visible">
					<div class="row">
						<div class="col-md-12">
							<img src="<?= base_url()?>assets/fe/client/korlantas.png" alt="" width="70px" height="70px">
							<h5 style="color: white"><b>Digital Korlantas</b></h5>

						</div>
						<div class="col-md-12">
							<p style="color: white; font-size:10px">Aplikasi Digital Korlantas POLRI adalah aplikasi resmi dari Korlantas POLRI Indonesia untuk memudahkan masyarakat untuk mendapatkan layanan di Korlantas.</p>

						</div>
					</div>
					<!-- <a href="<?php echo base_url()?>home">Selengkapnya</a> --> 
				</div>
			</a>
		</div>
		<div class="col-md-3">
			<a href="#" target="_blank" class="img-box" data-background-image="<?php echo base_url();?>assets/fe/bg1.jpg">
				<div class="img-box-content visible">
					<div class="row">
						<div class="col-md-12">
							<img src="<?= base_url()?>assets/fe/client/korlantas.png" alt="" width="70px" height="70px">
							<h5 style="color: white"><b>SBST Online</b></h5>

						</div>
						<div class="col-md-12">
							<p style="color: white; font-size:10px">STNK, BPKB, SIM, dan Tanda Nomor Kendaraan Bermotor (SBST) Online adalah platform untuk menganalisa penggunaan material serta Pendapatan Negara Bukan Pajak terkait pelayanan oleh Korlantas POLRI</p>

						</div>
					</div>
					<!-- <a href="<?php echo base_url()?>home">Selengkapnya</a> --> 
				</div>
			</a>
		</div>
		<div class="col-md-3">
			<a href="https://www.digitalkorlantas.id/faq/" target="_blank" class="img-box" data-background-image="<?php echo base_url();?>assets/fe/bg1.jpg">
				<div class="img-box-content visible">
					<div class="row">
						<div class="col-md-12">
							<img src="<?= base_url()?>assets/fe/client/korlantas.png" alt="" width="70px" height="70px">
							<h5 style="color: white"><b>E-TURJAWALI</b></h5>

						</div>
						<div class="col-md-12">
							<p style="color: white; font-size:10px">Portal Korlantas untuk pengawasan dan pengendalian kegiatan polantas dalam melaksanakan tugas pengaturan, penjagaan dan patroli atau turjawali</p>

						</div>
					</div>
					<!-- <a href="<?php echo base_url()?>home">Selengkapnya</a> --> 
				</div>
			</a>
		</div>

		<!-- Dokumen Peraturan Satker -->
		<div class="col-md-12">
			<h3 style="text-transform:uppercase ;">Dokumen Peraturan</h3>
			<div class="card">
				<div class="card-body">
					<table id="datatable" class="table dt-responsive w-100 table-striped">
						<thead>
							<tr>
								<th width="5%">No</th>
								<th width="40%">Nama Peraturan</th>
							</tr>
						</thead>
						<tbody>
							<tr class="table-striped">
								<td width="5%">1</td>
								<td width="40%"><a href="https://k3i.korlantas.polri.go.id/wp-content/uploads/2021/07/PP-NO-76-THN-2020-TTG-TARIF-PNBP-POLRI.pdf">Peraturan Pemerintah No 76 Tahun 2020 tentang Jenis dan Tarif atas Jenis PNBP yang berlaku pada Polri, dan Lampirannya</a></td>
							</tr>
							<tr>
								<td width="5%">2</td>
								<td width="40%"><a href="https://k3i.korlantas.polri.go.id/wp-content/uploads/2021/07/Perpres-Nomor-5-Tahun-2015-ttg-Samsat-Ranmor.pdf">Peraturan Presiden Nomor 5 Tahun 2015 tentang Penyelenggaraan Samsat Kendaraan Bermotor</a></td>
							</tr>
							<tr>
								<td width="5%">3</td>
								<td width="40%"><a href="https://k3i.korlantas.polri.go.id/wp-content/uploads/2021/08/PERATURAN-KEPOLISIAN-NEGARA-REPUBLIK-INDONESIA-NOMOR-5-TAHUN-2021-TENTANG-PENERBITAN-DAN-PENANDAAN-SURAT-IZIN-MENGEMUDI.pdf">Peraturan Kepolisian Nomor 5 Tahun 2021 tentang Penerbitan dan Penandaan SIM</a></td>
							</tr>
							<tr>
								<td width="5%">4</td>
								<td width="40%"><a href="https://k3i.korlantas.polri.go.id/wp-content/uploads/2021/08/PERATURAN-POLRI-NOMOR-7-TAHUN-2021-TENTANG-REGISTRASI-DAN-IDENTIFIKASI-KENDARAAN-BERMOTOR.pdf">Peraturan Kepolisian Nomor 7 Tahun 2021 tentang Registrasi dan Identifikasi Kendaraan Bermotor</a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<hr>

	<!-- Media Channel -->
	<div class="row">
		<div class="col-md-12">
			<h3 style="text-transform:uppercase ;">Media Channel</h3>
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

	<!-- Dokumen Kegiatan Satker -->
	<div class="row">
		<div class="col-md-12">
			<h3 style="text-transform:uppercase ;">Dokumen Kegiatan Ditgakkum Korlantas Polri</h3>
		</div>
		<div class="col-md-12" style="overflow-x: auto;overflow-y:hidden; white-space:nowrap; scrollbar-width: thin;">
			<div class="content-carousel"  >
				<a href="#">
					<img src="<?= base_url()?>assets/fe/ditgakkum/ditgakkum1.jpg" alt="" width="360" height="200">
				</a>
				<a href="#">
					<img src="<?= base_url()?>assets/fe/ditgakkum/ditgakkum2.jpg" alt="" width="360" height="200">
				</a>
				<a href="#">
					<img src="<?= base_url()?>assets/fe/ditgakkum/ditgakkum3.jpg" alt="" width="360" height="200">
				</a>
				<a href="#">
					<img src="<?= base_url()?>assets/fe/ditgakkum/ditgakkum4.jpg" alt="" width="360" height="200">
				</a>
				<a href="#">
					<img src="<?= base_url()?>assets/fe/ditgakkum/ditgakkum5.jpg" alt="" width="360" height="200">
				</a>
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
