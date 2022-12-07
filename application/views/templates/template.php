<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $title?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url()?>assets/logo-k3i.png" rel="icon">
  <!-- <link href="<?= base_url()?>assets/fe/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/MarkerCluster.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/MarkerCluster.Default.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/Control.Geocoder.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/leaflet-routing-machine.css" />
    <link rel="stylesheet" href="https://unpkg.com/@geoman-io/leaflet-geoman-free@latest/dist/leaflet-geoman.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.css" />

    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.5.0/mapbox-gl.css' rel='stylesheet' />
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url()?>assets/fe/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/fe/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/fe/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/fe/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/fe/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/fe/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
	<script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>

	<script data-cfasync="false" src="<?php echo base_url();?>assets/fe/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/fe/scripts/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/fe/scripts/jquery-migrate-3.1.0.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/fe/scripts/mmenu.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/fe/scripts/chosen.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/fe/scripts/slick.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/fe/scripts/rangeslider.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/fe/scripts/magnific-popup.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/fe/scripts/waypoints.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/fe/scripts/counterup.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/fe/scripts/jquery-ui.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/fe/scripts/tooltips.min.js"></script>
	

  <!-- Template Main CSS File -->
  <link href="<?= base_url()?>assets/fe/css/style.css" rel="stylesheet">

	<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js"></script>
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/leaflet-routing-machine.js"></script>
    <script src="https://unpkg.com/@geoman-io/leaflet-geoman-free@latest/dist/leaflet-geoman.min.js"></script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js'></script>

	<script>
        var csfrData = {};
        csfrData['<?php echo $csrf_name; ?>'] = '<?php echo $csrf_token; ?>';
        $.ajaxSetup({
            data: csfrData
        });
    </script>
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <p style="margin: 0; color:white;"><?php echo format_indoHari(date('Y-m-d')) ?></p>
      </div>
      <!-- <div class="contact-info d-none d-md-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
      </div> -->
      <div class="social-links d-none d-md-flex align-items-center">
	  	<div class="input-group">
			<input type="text" class="form-control" placeholder="Masukan kata kunci" aria-label="Recipient's username" aria-describedby="basic-addon2">
			<div class="input-group-append">
				<button class="btn btn-outline-secondary" type="button">Cari</button>
			</div>
		</div>
        <a href="https://twitter.com/K3IKorlantas" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/K3I-Korlantas-105187678596891" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/k3ikorlantaspolri/" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.youtube.com/channel/UCXr0rFTNDPLYkU0-PONdjLg" class="youtube"><i class="bi bi-youtube"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center p-5" style="border-bottom: 10px solid red; border-image:url(assets/fe/border-nav.jpg) 30 round">
    <div class="container d-flex justify-content-between align-items-center" >

      <div class="logo">
        <!-- <h1><a href="index.html">Eterna</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="<?= base_url()?>home"><img src="<?= base_url()?>assets/fe/brand-header.png" alt="" class="img-fluid" ></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
		<li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul> 
				<li><a href="<?= base_url()?>sambutan">Sambutan</a></li>
				<li><a href="<?= base_url()?>struktur_organisasi">Struktur Organisasi</a></li>
				<li><a href="<?= base_url()?>profil_pejabat">Profil Pejabat</a></li>
				<li><a href="<?= base_url()?>visi_misi">Visi dan Misi</a></li>
				<li><a href="<?= base_url()?>tugas_fungsi">Tugas dan Fungsi</a></li>
				<!-- <li><a href="<?= base_url()?>organisasi_tatakerja">Organisasi dan Tata Kerja</a></li> -->
				<li><a href="<?= base_url()?>sejarah">Sejarah POLANTAS</a></li>
            </ul>
        </li>
		<li class="dropdown megamenu"><a href="#"><span>Satker Mabes</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li>
				<h5>Korlantas</h5>
				<hr width="80%">
			  	<a href="<?= base_url()?>ditgakkum_front">DITGAKUM</a>
				<a href="<?= base_url()?>ditregident_front">DITREGIDENT</a>
                <a href="<?= base_url()?>ditkamsel_front">DITKAMSEL</a>
				<a href="<?= base_url()?>bagrenmin_front">BAGRENMIN</a>
				<a href="<?= base_url()?>bagops_front">BAGOPS</a>
				<a href="<?= base_url()?>bagtik_front">BAGTIK</a>
              </li>
              <li>
				<h5>Fungsi Lainnya</h5>
				<hr width="80%">
			  	<a href="<?= base_url()?>baharkam">BAHARKAM</a>
				<a href="<?= base_url()?>asops">ASOPS</a>
                <a href="<?= base_url()?>divtik">DIVTIK</a>
				<a href="<?= base_url()?>bareskrim">BARESKIM</a>
				<a href="<?= base_url()?>divhumas">DIVHUMAS</a>
				<a href="<?= base_url()?>itwasum">ITWASUM</a>
              </li>
              
            </ul>
          </li>
		<li class="dropdown megamenu"><a href="#"><span>stakeholder</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li>
			  	<a href="<?= base_url()?>kemendagri">KEMENDAGRI</a>
				<a href="<?= base_url()?>kemenhub">KEMENHUB</a>
                <a href="<?= base_url()?>kemenkes">KEMENKES</a>
				<a href="<?= base_url()?>kemenpupr">KEMENPERIN</a>
				<a href="<?= base_url()?>kemenpupr">KEMENPUPR</a>
				<a href="<?= base_url()?>badan_riset">BADAN RISET DAN INOVASI NASIONAL</a>
				<a href="<?= base_url()?>kemenkeu">KEMENKEU</a>
              </li>
              <li>
			  	<a href="<?= base_url()?>kemendikbud">KEMENDIKBUD</a>
				<a href="<?= base_url()?>kemenhan">KEMENHAN</a>
                <a href="<?= base_url()?>ditjen_bina">DITJEN BINA WARGA</a>
				<a href="<?= base_url()?>dukcapil">DUKCAPIL</a>
				<a href="<?= base_url()?>jasa_raharja">PT JASA RAHARJA</a>
				<a href="<?= base_url()?>jasa_marga">JASA MARGA</a>
              </li>
			  <li>
			  	<a href="<?= base_url()?>mabes_tni">MABES TNI</a>
				<a href="<?= base_url()?>satgas_covid">SATGAS COVID</a>
                <a href="<?= base_url()?>bmkg">BMKG</a>
				<a href="<?= base_url()?>bnn">BNN</a>
				<a href="<?= base_url()?>bnpb">BNPB</a>
				<a href="<?= base_url()?>bnpt">BNPT</a>
				<a href="<?= base_url()?>bps">BPS</a>
			  </li>
              
            </ul>
          </li>
		
          
          
          <li class="dropdown"><a href="#"><span>Publikasi</span> <i class="bi bi-chevron-down"></i></a>
            <ul> 
				<li><a href="<?= base_url()?>konferensi_pers">Konfersi Pers</a></li>
				<li><a href="<?= base_url()?>kegiatan_kakor">Kegiatan Kakorlantas</a></li>
				<!-- <li><a href="<?= base_url()?>riset_media">Riset Media Center NTMC</a></li> -->
				<li><a href="<?= base_url()?>kegiatan_khusus">Kegiatan Khusus (PAM PPKM)</a></li> 
            </ul>
        </li>
		<li class="dropdown"><a href="#"><span>Pustaka</span> <i class="bi bi-chevron-down"></i></a>
            <ul> 
				<li><a href="<?= base_url()?>informasi_setiap_saat">Informasi Setiap Saat</a></li>
				<li><a href="<?= base_url()?>informasi_berkala">Informasi Berkala</a></li>
				<li><a href="<?= base_url()?>informasi_serta_merta">Informasi Serta Merta</a></li>
				<li><a href="<?= base_url()?>undang_undang">UU dan Peraturan</a></li> 
            </ul>
        </li>
		<li class="dropdown"><a href="#"><span>Kontak Kami</span> <i class="bi bi-chevron-down"></i></a>
            <ul> 
				<li><a href="<?= base_url()?>survey_kepuasan">Survey Kepuasan</a></li>
				<li><a href="<?= base_url()?>layanan_pengaduan">Layanan Pengaduan</a></li>
				<li><a href="<?= base_url()?>https://ccntmc.1500669.com/">Contact Center NTMC</a></li> 
            </ul>
        </li>
		<li class="dropdown"><a href="#"><span>Lain-lain</span> <i class="bi bi-chevron-down"></i></a>
            <ul> 
				<li><a href="<?= base_url()?>cctv_streaming">CCTV Streaming</a></li>
				<li><a href="https://etle-pmj.info/id">Link Pengecekan Status ETLE</a></li>
				<li><a href="https://polri.go.id/polisiku">Link ke Layanan Polisiku</a></li>
				<li><a href="https://tvradio.polri.go.id/">Link ke TV-RADIO POLRI</a></li> 
            </ul>
        </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
	
</header><!-- End Header -->
	
	
		<?php echo $contents ?> 
	
	
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <!-- <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div> -->

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-md-4 footer-links">
						<div class="container" style="background-color: white; color:black; border: 1px solid black; border-radius: 10px;">
							<h6 class="headline centered text-center mt-3">Dapatkan arah Transportasi Umum ke Kantor Pusat Kendali Koordinasi Komunikasi dan Informasi Korlantas Polri</h6>
							<iframe allowtransparency="true" class="" src="https://widgets.moovit.com/ws/fp/CF1755A1AD0C1795E0530100007F9822/4255280?metroId=2044&amp;lang=in" style="height: 319px;" width="100%" frameborder="0"></iframe>
						</div>
          </div>

          <div class="col-md-2 footer-links">
            <h4>Dasar Hukum / Referensi</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Undang Undang Republik Indonesia</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Peraturan Pemerintah Republik indonesia</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">peraturan Presiden Republik Indonesia</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Peraturan Kepolisian Negara Republik Indonesia</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Peraturan Kepala Polisi Negara Republik Indonesia</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Peraturan kepala Korps Lalu Lintas POLRI</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Peraturan Lain-lain</a></li>
            </ul>
						<!-- <img src="<?= base_url()?>assets/fe/contactntmc.png" alt=""> -->
          </div>

          <div class="col-md-2 footer-links">
            <h4>Tentang korlantas</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Struktur Organisasi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Profil Pejabat</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Visi dan Misi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Sejarah POLANTAS</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Sitemap</a></li>
            </ul>
          </div>

          <div class="col-md-2 footer-contact">
            <h4>Info Kontak</h4>
						<p>Pusat Kendali, Koordinasi, Komunikasi dan Informasi Korlantas Polri</p>
            <p>
							Jl. MT Haryono Kav. 37 – 38, <br>
              Jakarta 12770<br>
              <br>
              <strong>Call Center:</strong> 1-500-669<br>
              <strong>SMS Center:</strong> 9119<br>
              <strong>WA Center:</strong> 0851-7155-2928<br>
            </p>

          </div>

          <div class="col-md-2 footer-info">
            <h3>Sosial Media K3I</h3>
            <!-- <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p> -->
            <div class="social-links mt-3">
              <a href="https://twitter.com/K3IKorlantas" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="https://www.facebook.com/K3I-Korlantas-105187678596891" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/k3ikorlantaspolri/" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://www.youtube.com/channel/UCXr0rFTNDPLYkU0-PONdjLg" class="youtube"><i class="bx bxl-youtube"></i></a>
            </div><br><br>
						<h3>Sosial Media NTMC</h3>
            <!-- <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p> -->
            <div class="social-links mt-3">
              <a href="https://twitter.com/NTMC_Info" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="https://id-id.facebook.com/NTMCPOLRI/" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/ntmc_polri/?hl=id" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://www.youtube.com/c/NTMCChannel" class="youtube"><i class="bx bxl-youtube"></i></a>
            </div>
						
          </div>
		  
          

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
	  	Korps Lalu Lintas Kepolisian Negara Republik Indonesia <br>
		© 2022 Pusat Kendali, Koordinasi, Komunikasi, dan Informasi Korlantas Polri</div>
      </div>
      
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url()?>assets/fe/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?= base_url()?>assets/fe/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url()?>assets/fe/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url()?>assets/fe/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url()?>assets/fe/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url()?>assets/fe/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="<?= base_url()?>assets/fe/vendor/php-email-form/validate.js"></script>

	

  <!-- Template Main JS File -->
  <script src="<?= base_url()?>assets/fe/js/main.js"></script>

	<!-- Leaflet -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
<script src="<?php echo base_url(); ?>assets/admin/js/leaflet.markercluster.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/Control.Geocoder.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/leaflet-routing-machine.js"></script>
<!-- <script src="<?php echo base_url(); ?>assets/admin/js/leaflet-routing-machine.min.js"></script> -->
<script src="https://unpkg.com/@geoman-io/leaflet-geoman-free@latest/dist/leaflet-geoman.min.js"></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js'></script>

<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.5.0/mapbox-gl.js'></script>
<script src="https://unpkg.com/mapbox-gl-leaflet/leaflet-mapbox-gl.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEY9jbE_zL8SV7c6meCf7-lV3JLcbKnlY" async defer></script>
<script src="https://unpkg.com/leaflet.gridlayer.googlemutant@latest/dist/Leaflet.GoogleMutant.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->

</body>

</html>
