<!DOCTYPE html>

<head>

	<!-- Basic Page Needs
	================================================== -->
	<title><?php echo $title ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
	================================================== -->
	<link href="<?php echo base_url(); ?>assets/admin/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url();?>assets/fe/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/fe/css/main-color.css" id="colors">
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/logo-k3i.png">

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
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->



	<!-- Scripts
	================================================== -->
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
	<script type="text/javascript" src="<?php echo base_url();?>assets/fe/scripts/custom.js"></script>




	<!-- REVOLUTION SLIDER SCRIPT -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/fe/scripts/themepunch.tools.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/fe/scripts/themepunch.revolution.min.js"></script>

	<script type="text/javascript">
		var tpj=jQuery;			
		var revapi4;
		tpj(document).ready(function() {
			if(tpj("#rev_slider_4_1").revolution == undefined){
				revslider_showDoubleJqueryError("#rev_slider_4_1");
			}else{
				revapi4 = tpj("#rev_slider_4_1").show().revolution({
					sliderType:"standard",
					jsFileLocation:"<?php echo base_url();?>assets/fe/scripts/",
					sliderLayout:"auto",
					dottedOverlay:"none",
					delay:9000,
					navigation: {
						keyboardNavigation:"off",
						keyboard_direction: "horizontal",
						mouseScrollNavigation:"off",
						onHoverStop:"on",
						touch:{
							touchenabled:"on",
							swipe_threshold: 75,
							swipe_min_touches: 1,
							swipe_direction: "horizontal",
							drag_block_vertical: false
						}
						,
						arrows: {
							style:"zeus",
							enable:true,
							hide_onmobile:true,
							hide_under:600,
							hide_onleave:true,
							hide_delay:200,
							hide_delay_mobile:1200,
							tmp:'<div class="tp-title-wrap"></div>',
							left: {
								h_align:"left",
								v_align:"center",
								h_offset:40,
								v_offset:0
							},
							right: {
								h_align:"right",
								v_align:"center",
								h_offset:40,
								v_offset:0
							}
						}
						,
						bullets: {
					enable:false,
					hide_onmobile:true,
					hide_under:600,
					style:"hermes",
					hide_onleave:true,
					hide_delay:200,
					hide_delay_mobile:1200,
					direction:"horizontal",
					h_align:"center",
					v_align:"bottom",
					h_offset:0,
					v_offset:32,
					space:5,
					tmp:''
						}
					},
					viewPort: {
						enable:true,
						outof:"pause",
						visible_area:"80%"
				},
				responsiveLevels:[1200,992,768,480],
				visibilityLevels:[1200,992,768,480],
				gridwidth:[1180,1024,778,480],
				gridheight:[640,500,400,300],
				lazyType:"none",
				parallax: {
					type:"mouse",
					origo:"slidercenter",
					speed:2000,
					levels:[2,3,4,5,6,7,12,16,10,25,47,48,49,50,51,55],
					type:"mouse",
				},
				shadow:0,
				spinner:"off",
				stopLoop:"off",
				stopAfterLoops:-1,
				stopAtSlide:-1,
				shuffle:"off",
				autoHeight:"off",
				hideThumbsOnMobile:"off",
				hideSliderAtLimit:0,
				hideCaptionAtLimit:0,
				hideAllCaptionAtLilmit:0,
				debugMode:false,
				fallbacks: {
					simplifyAll:"off",
					nextSlideOnWindowFocus:"off",
					disableFocusListener:false,
				}
			});
			}
		});	/*ready*/
	</script>	


	<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
		(Load Extensions only on Local File Systems ! 
		The following part can be removed on Server for On Demand Loading) -->	
	<script type="text/javascript" src="<?php echo base_url();?>assets/fe/scripts/extensions/revolution.extension.actions.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/fe/scripts/extensions/revolution.extension.carousel.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/fe/scripts/extensions/revolution.extension.kenburn.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/fe/scripts/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/fe/scripts/extensions/revolution.extension.migration.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/fe/scripts/extensions/revolution.extension.navigation.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/fe/scripts/extensions/revolution.extension.parallax.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/fe/scripts/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/fe/scripts/extensions/revolution.extension.video.min.js"></script>




	<!-- Style Switcher
	================================================== -->
	<script src="<?php echo base_url();?>assets/fe/scripts/switcher.js"></script>



	 <!-- Leaflet -->
	<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js"></script>
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/leaflet-routing-machine.js"></script>
    <script src="https://unpkg.com/@geoman-io/leaflet-geoman-free@latest/dist/leaflet-geoman.min.js"></script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js'></script>


</head>

<body class="transparent-header">

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container">

	<!-- Header -->
	<div id="header">
		<div class="container-fluid">
			<div class="container-fluid">
				<div class="container-fluid align-middle">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<a href="<?php echo base_url()?>home"><img src="<?php echo base_url(); ?>assets/main-logo.png" alt=""></a> 
			</div>
			<!-- Left Side Content / End -->


			<!-- Right Side Content / End -->
			<div class="right-side mt-4">

				<!-- Mobile Navigation -->
				<div class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation" class="style-1">
					<ul id="responsive mt-5">

						<li><a class="current" href="<?php echo base_url()?>home">&nbsp;<i class="im im-icon-Home"></i></a></li>
						
						<li><a  href="#">PROFIL</a>
							<ul>
								<li><a href="<?= base_url()?>sambutan">Sambutan</a></li>
								<li><a href="<?= base_url()?>struktur_organisasi">Struktur Organisasi</a></li>
								<li><a href="<?= base_url()?>profil_pejabat">Profil Pejabat</a></li>
								<li><a href="<?= base_url()?>visi_misi">Visi dan Misi</a></li>
								<li><a href="<?= base_url()?>tugas_fungsi">Tugas dan Fungsi</a></li>
								<li><a href="<?= base_url()?>organisasi_tatakerja">Organisasi dan Tata Kerja</a></li>
								<li><a href="<?= base_url()?>sejarah">Sejarah POLANTAS</a></li>
							</ul>
						</li>

						<li><a href="#">SATKER MABES</a>
							<div class="mega-menu mobile-styles two-columns">

									<div class="mega-menu-section">
										<ul>
											<li class="mega-menu-headline">KORLANTAS</li>
											<li><a href="<?= base_url()?>ditgakkum_front"><i class="sl sl-icon-user"></i> DITGAKUM</a></li>
											<li><a href="<?= base_url()?>ditregident_front"><i class="sl sl-icon-check"></i> DITREGIDENT</a></li>
											<li><a href="<?= base_url()?>ditkamsel_front"><i class="sl sl-icon-plus"></i> DITKAMSEL</a></li>
											<li><a href="<?= base_url()?>bagrenmin_front"><i class="sl sl-icon-docs"></i> BAGRENMIN</a></li>
											<li><a href="<?= base_url()?>bagops_front"><i class="sl sl-icon-docs"></i> BAGOPS</a></li>
											<li><a href="<?= base_url()?>bagtik_front"><i class="sl sl-icon-docs"></i> BAGTIK</a></li>
										</ul>
									</div>
		
									<div class="mega-menu-section">
										<ul>
											<li class="mega-menu-headline">FUNGSI LAINNYA</li>
											<li><a href="<?= base_url()?>baharkam"><i class="sl sl-icon-envelope-open"></i> BAHARKAM</a></li>
											<li><a href="<?= base_url()?>asops"><i class="sl sl-icon-hourglass"></i> ASOPS</a></li>
											<li><a href="<?= base_url()?>divtik"><i class="sl sl-icon-close"></i> DIVTIK</a></li>
											<li><a href="<?= base_url()?>bareskrim"><i class="sl sl-icon-equalizer"></i> BARESKIM</a></li>
											<li><a href="<?= base_url()?>divhumas"><i class="sl sl-icon-equalizer"></i> DIVHUMAS</a></li>
											<li><a href="<?= base_url()?>itwasum"><i class="sl sl-icon-equalizer"></i> ITWASUM</a></li>
										</ul>
									</div> 
									
							</div>
						</li>

						<li><a href="#">PUBLIKASI</a>
							<ul>
								<li><a href="<?= base_url()?>konferensi_pers">Konfersi Pers</a></li>
								<li><a href="<?= base_url()?>kegiatan_kakor">Kegiatan Kakorlantas</a></li>
								<li><a href="<?= base_url()?>riset_media">Riset Media Center NTMC</a></li>
								<li><a href="<?= base_url()?>kegiatan_khusus">Kegiatan Khusus (PAM PPKM)</a></li> 
							</ul>
						</li>
 

						<li><a href="#">INFORMASI PUBLIK</a>
							<ul>
								<li><a href="<?= base_url()?>informasi_setiap_saat">Informasi Setiap Saat</a></li>
								<li><a href="<?= base_url()?>informasi_berkala">Informasi Berkala</a></li>
								<li><a href="<?= base_url()?>informasi_serta_merta">Informasi Serta Merta</a></li>
								<li><a href="<?= base_url()?>uu_peraturan">UU dan Peraturan</a></li> 
							</ul>
						</li>
 

						<li><a href="#">MEDIA UPDATE</a>
							<ul>
								<li><a href="<?= base_url()?>berita_ppkm">Update Berita PPKM</a></li>
								<li><a href="<?= base_url()?>berita_kecelakaan">Update Berita Kecelakaan Lalulintas</a></li>
								<li><a href="<?= base_url()?>berita_pelanggaran">Update Berita Pelanggaran Lalulintas</a></li>
								<li><a href="<?= base_url()?>berita_kemacetan">Update Berita Kemacetan Lalulintas</a></li>
								<li><a href="<?= base_url()?>berita_satpas">Update Berita Satpas</a></li>
								<li><a href="<?= base_url()?>berita_etle">Update Berita ETLE</a></li>
								<li><a href="<?= base_url()?>berita_kontijensi">Update Berita Kontijensi (Penanganan Covid-19)</a></li> 
							</ul>
						</li>

						<li><a href="#">KONTAK KAMI</a>
							<ul>
								<li><a href="<?= base_url()?>layanan_chatbot">Layanan Chatbot k3i Korlantas</a></li>
								<li><a href="<?= base_url()?>survey_kepuasan">Survey Kepuasan</a></li>
								<li><a href="<?= base_url()?>layanan_pengaduan">Layanan Pengaduan</a></li>
								<li><a href="<?= base_url()?>contact_center">Contact Center NTMC</a></li> 
							</ul>
						</li>

						<li><a href="#">LAIN - LAIN</a>
							<ul>
								<li><a href="<?= base_url()?>cctv_streaming">CCTV Streaming</a></li>
								<!-- <li><a href="<?= base_url()?>link_pengecekan_etle">Link Pengecekan Status ETLE</a></li> -->
								<li><a href="https://etle-pmj.info/id">Link Pengecekan Status ETLE</a></li>
								<!-- <li><a href="<?= base_url()?>link_layanan_polisiku">Link ke Layanan Polisiku</a></li> -->
								<li><a href="https://polri.go.id/polisiku">Link ke Layanan Polisiku</a></li>
								<!-- <li><a href="<?= base_url()?>link_tvradio_polri">Link ke TV-RADIO POLRI</a></li>  -->
								<li><a href="https://tvradio.polri.go.id/">Link ke TV-RADIO POLRI</a></li> 
							</ul>
						</li>
						
					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			<!-- Right Side Content / End -->
 

				</div>
			</div>
		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->


<?php echo $contents ?> 



<!-- Footer
================================================== -->
<div id="footer" class="dark">
	<!-- Main -->
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<p style="color: white;">Peta Ke Korlantas Polri </p> 
				<div style="background-color: white; border: 1px solid black; border-radius: 10px;">
					<h5 class="headline centered margin-top-20" style="font-weight: bold;">Dapatkan arah Transportasi Umum ke Kantor Pusat Kendali Koordinasi Komunikasi dan Informasi Korlantas Polri</h5>
					<iframe allowtransparency="true" class="" src="https://widgets.moovit.com/ws/fp/CF1755A1AD0C1795E0530100007F9822/4255280?metroId=2044&amp;lang=in" style="height: 319px;" width="100%" frameborder="0"></iframe>
				</div>
			</div>

			<div class="col-md-3">
				<h4>Tentang Korlantas</h4>
				<ul class="footer-links">
					<li><a href="<?= base_url()?>struktur_organisasi">Struktur Organisasi</a></li>
					<li><a href="<?= base_url()?>profil_pejabat">Profil Pejabat</a></li>
					<li><a href="<?= base_url()?>visi_misi">Visi dan Misi</a></li>
					<li><a href="<?= base_url()?>sejarah">Sejarah Porlantas</a></li>
					<li><a href="#">Sitemap</a></li> 
				</ul> 
				<div class="clearfix"></div>
			</div>		
			<div class="col-md-4">
				<h4>Layanan</h4>  
				<ul class="footer-links"> 
					<li><a href="#">SIGNAL (Samsat Digital Nasional)</a></li>
					<li><a href="#">SINAR (SIM Nasional Presisi)</a></li>
					<li><a href="#">SIM Internasional</a></li>
					<li><a href="#">NTMC</a></li>
					<li><a href="#">IRSMS</a></li>
					<li><a href="#">E-TILANG</a></li>
					<li><a href="#">ERI</a></li>
				</ul>
				<div class="clearfix"></div>
			</div>	

			<div class="col-md-3">
				<h4>Info Kontak</h4>
				<div class="text-widget">
					<span>
						Pusat Kendali, Koordinasi, Komunikasi dan Informasi Korlantas Polri
						Jl. MT Haryono Kav. 37 – 38,
						Jakarta 12770
						Call Center : 1-500-669
						SMS center : 9119
					</span>
				</div>

			</div>

			<div class="col-md-3"> 
				<h4>Social Media</h4>
				<ul class="social-icons margin-top-20">
					<li><a class="facebook" href="https://web.facebook.com/pusatk3ikorlantaspolri/"><i class="icon-facebook"></i></a></li>
					<li><a class="twitter" href="https://twitter.com/K3IKorlantas"><i class="icon-twitter"></i></a></li>
					<li><a class="instagram" href="https://www.instagram.com/k3ikorlantaspolri/"><i class="icon-instagram"></i></a></li>
					<li><a class="youtube" href="https://www.youtube.com/channel/UCXr0rFTNDPLYkU0-PONdjLg"><i class="icon-youtube"></i></a></li>
				</ul>
			</div>

		</div>
		
		<!-- Copyright -->
		<div class="row">
			<div class="col-md-12">
				<div class="copyrights">
					<img src="<?php echo base_url();?>assets/logo-k3i.png" alt="" width="50"> <br>
					Korps Lalu Lintas Kepolisian Negara Republik Indonesia <br>
					© 2021 Pusat Kendali, Koordinasi, Komunikasi, dan Informasi Korlantas Polri</div>
			</div>
		</div>

	</div>

</div>
<!-- Footer / End -->


<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>


</div>
<!-- Wrapper / End -->




<div id="style-switcher">
	<h2>Color Switcher <a href="#"><i class="sl sl-icon-settings"></i></a></h2>
	
	<div>
		<ul class="colors" id="color1">
			<li><a href="#" class="main" title="Main"></a></li>
			<li><a href="#" class="blue" title="Blue"></a></li>
			<li><a href="#" class="green" title="Green"></a></li>
			<li><a href="#" class="orange" title="Orange"></a></li>
			<li><a href="#" class="navy" title="Navy"></a></li>
			<li><a href="#" class="yellow" title="Yellow"></a></li>
			<li><a href="#" class="peach" title="Peach"></a></li>
			<li><a href="#" class="beige" title="Beige"></a></li>
			<li><a href="#" class="purple" title="Purple"></a></li>
			<li><a href="#" class="celadon" title="Celadon"></a></li>
			<li><a href="#" class="red" title="Red"></a></li>
			<li><a href="#" class="brown" title="Brown"></a></li>
			<li><a href="#" class="cherry" title="Cherry"></a></li>
			<li><a href="#" class="cyan" title="Cyan"></a></li>
			<li><a href="#" class="gray" title="Gray"></a></li>
			<li><a href="#" class="olive" title="Olive"></a></li>
		</ul>
	</div>
		
</div>
<!-- Style Switcher / End -->

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

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
