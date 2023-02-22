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

<!-- ======= Contact Section ======= -->

<div class="container">

	<div class="row p-5">
		<div class="col-md-6">
		<h3>Informasi Berkala</h3>
			<p>deskripsi:</p>
			<p>Seluruh Informasi berkala merupakan Informasi yang wajib disediakan setiap saat.</p>
		
			<h3>Perizinan</h3>
			<p>deskripsi:</p>
			<p>Informasi mengenai ringkasan berupa syarat dan SOP pelayanan di lingkungan Korlantas Polri :</p>
			<ul>
				<li>Direktorat Kamsel Korlantas Polri;</li>
				<li>Direktorat Gakkum Korlantas Polri;</li>
				<li>Direktorat Regident Korlantas Polri;</li>
				<li>Bagops Korlantas Polri;</li>
				<li>Bagrenmin Korlantas Polri;</li>
				<li>Bag TIK Korlantas Polri.</li>
			</ul>
		
			<h3>Organisasi, Administrasi, Kepegawaian dan Keuangan</h3>
			<p>deskripsi:</p>
			<h5>Informasi mengenai Pedoman Organisasi :</h5>
			<ul>
				<li>Organisasi dan Tata Kerja Korlantas Polri</li>
				<li>Tata Cara Tetap Pelaksanaan tugas dan fungsi Korlantas Polri</li>
				<li>Tata Cara Tetap Pelaksanaan Komunikasi Publik (Kehumasan)</li>
				<li>Standar Prosedur Operasional Layanan Informasi Publik</li>
			</ul>
			<h5>Informasi mengenai Pedoman Administrasi :</h5>
			<ul>
				<li>
					Sistem Administrasi Perkantoran, yang terdiri dari :
					<ul>
					
						<li><a href="<?= url_api().'regulation_doc/PERATURAN-KAPOLRI-NOMOR-7-TAHUN-2017-TENTANG-NASKAH-DINAS-DAN-TATA-PERSURATAN-DINAS-DILINGKUNGAN-KEPOLISIAN-NEGARA-REPUBLIK-INDONESIA.pdf'?>" target="_blank" rel="noopener">Peraturan Kepala Kepolisian Negara Republik Indonesia Nomor 7 Tahun 2017 Tentang Naskah Dinas Dan Tata Persuratan Dinas Di Lingkungan Kepolisian Negara Republik Indonesia</a></li>
					</ul>
				</li>
				<li>Kode Klasifikasi Arsip Korlantas Polri</li>
				<li>Petunjuk Teknis Tata Naskah Dinas</li>
				<li>Petunjuk Pelaksanaan Tata Naskah Dinas Elektronik</li>
				<li>Jadwal Retensi Arsip</li>
			</ul>

			<h5>Informasi mengenai Pedoman Kepegawaian :</h5>
			<ul>
				<li>Kode Etik Pegawai Negeri pada Kepolisian Negara Republik Indonesia</li>
				<li>Jabatan Umum dan Peta Jabatan di Lingkungan Korlantas Polri</li>
				<li>Pedoman Penyusunan SOP di Lingkungan Korlantas Polri</li>
				<li>Kelas Jabatan di Lingkungan Korlantas Polri</li>
				<li>Tata Cara Penilaian Prestasi Kerja Pegawai Negeri pada Polri di Lingkungan Korlantas Polri</li>
			</ul>

			<h5>Informasi mengenai Keuangan :</h5>
			<ul>
				<li>Tata Cara Penghitungan dan Pemberian Tunjangan Kinerja Pegawai</li>
				<li>Standar Biaya</li>
				<li>Tata Cara Tetap Administrasi Pelaksanaan Anggaran</li>
				<li>Persyaratan Penyedia Barang/Jasa di Lingkungan Korlantas Polri dan Pendampingan terhadap Proses Pemilihan Penyedia Barang/Jasa</li>
				<li>Pelaksanaan Penetapan Pengelola Anggaran</li>
				<li>Persiapan Pelaksanaan Anggaran DIPA</li>
				<li>Persyaratan Penyedia Barang/Jasa</li>
			</ul>
		</div>
		<div class="col-md-6">
		<h3>Statistik dan Informasi Transportasi</h3>
			<p>deskripsi:</p>
			<p>Informasi mengenai Statistik dan Informasi bidang lalu lintas yang dirangkum ke dalam sebuah buku dan di terbitkan setiap tahunnya :</p>
			<ul>
				<li>
					Buku Polantas Dalam Angka Korlantas Polri;
					<ul>
						<?php foreach($getpp as $doc):?>
							<li><a href="<?= url_api() . 'regulation_doc/'.$doc['fileReg'].''?>"><?= $doc['regulation_name']?></a></li>
						<?php endforeach;?>
						
					</ul>
				</li>
			</ul>

			<h3>Persuratan KORLANTAS POLRI</h3>
			<p>deskripsi:</p>
			<p>Informasi mengenai persuratan keluar ataupun masuk di lingkungan KORLANTAS POLRI dapat diraih melalui permohonan informasi publik. Berikut contoh dokumen persuratan KORLANTAS POLRI .</p>

			<h3>Dokumen Pendukung</h3>
			<p>deskripsi:</p>
			<p>Informasi mengenai dokumen pendukung dalam penyusunan Peraturan/Kebijakan/Keputusan yang telah ditetapkan oleh Korlantas Polri dapat di raih melalui permohonan informasi publik. Berikut merupakan contoh dokumen pendukung tersebut :</p>
			<ul>
				<li>Tahun 2021</li>
				<li>Tahun 2020</li>
				<li>Tahun 2019</li>
			</ul>

			<h3>Dokumen Perjanjian Kerja</h3>
			<p>deskripsi</p>
			<p>Informasi mengenai surat-surat perjanjian kerja dengan pihak ketiga mengenai Pengadaan Barang dan Jasa, berikut dokumen pendukungnya dapat diraih melalui permohonan informasi publik. Berikut merupakan contoh dokumen perjanjian dengan pihak ke 3 :</p>
			<ul>
				<li>Tahun 2021</li>
				<li>Tahun 2020</li>
				<li>Tahun 2019</li>
			</ul>
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
