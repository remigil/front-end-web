<!DOCTYPE html>

<head>

	<!-- Basic Page Needs
	================================================== -->
	<title><?php echo $title ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
	================================================== -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/fe/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/fe/css/main-color.css" id="colors">
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/logo-k3i.png">

	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.Default.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/leaflet-routing-machine.css" /> 
    <link rel="stylesheet" href="https://unpkg.com/@geoman-io/leaflet-geoman-free@latest/dist/leaflet-geoman.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.css" />



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
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<a href="index-2.html"><img src="<?php echo base_url(); ?>assets/main-logo.png" alt=""></a> 
			</div>
			<!-- Left Side Content / End -->


			<!-- Right Side Content / End -->
			<div class="right-side">
				 
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
					<ul id="responsive">

						<li><a class="current" href="<?php echo base_url()?>home">&nbsp;<i class="im im-icon-Home"></i></a></li>

						<li><a  href="#">PROFIL</a>
							<ul>
								<li><a href="index-2.html">Home 1</a></li>
								<li><a href="index-2-airbnb.html">Home 2 (Airbnb)</a></li>
								<li><a href="index-3.html">Home 3</a></li>
								<li><a href="index-4.html">Home 4</a></li>
								<li><a href="index-5.html">Home 5</a></li>
								<li><a href="index-6.html">Home 6</a></li>
							</ul>
						</li>

						<li><a href="#">SATKER MABES</a>
							<ul>
								<li><a href="#">List Layout</a>
									<ul>
										<li><a href="listings-list-with-sidebar.html">With Sidebar</a></li>
										<li><a href="listings-list-full-width.html">Full Width</a></li>
										<li><a href="listings-list-full-width-with-map.html">Full Width + Map</a></li>
									</ul>
								</li>
								<li><a href="#">Grid Layout</a>
									<ul>
										<li><a href="listings-grid-with-sidebar-1.html">With Sidebar 1</a></li>
										<li><a href="listings-grid-with-sidebar-2.html">With Sidebar 2</a></li>
										<li><a href="listings-grid-full-width.html">Full Width</a></li>
										<li><a href="listings-grid-full-width-with-map.html">Full Width + Map</a></li>
									</ul>
								</li>
								<li><a href="#">Half Screen Map</a>
									<ul>
										<li><a href="listings-half-screen-map-list.html">List Layout</a></li>
										<li><a href="listings-half-screen-map-grid-1.html">Grid Layout 1</a></li>
										<li><a href="listings-half-screen-map-grid-2.html">Grid Layout 2</a></li>
									</ul>
								</li>
								<li><a href="#">Single Listings</a>
									<ul>
										<li><a href="listings-single-page.html">Single Listing 1</a></li>
										<li><a href="listings-single-page-2.html">Single Listing 2</a></li>
										<li><a href="listings-single-page-3.html">Single Listing 3</a></li>
									</ul>
								</li>
								<li><a href="#">Open Street Map</a>
									<ul>
										<li><a href="listings-half-screen-map-list-OpenStreetMap.html">Half Screen Map List Layout</a></li>
										<li><a href="listings-half-screen-map-grid-1-OpenStreetMap.html">Half Screen Map Grid Layout 1</a></li>
										<li><a href="listings-half-screen-map-grid-2-OpenStreetMap.html">Half Screen Map Grid Layout 2</a></li>
										<li><a href="listings-list-full-width-with-map-OpenStreetMap.html">Full Width List</a></li>
										<li><a href="listings-grid-full-width-with-map-OpenStreetMap.html">Full Width Grid</a></li>
										<li><a href="listings-single-page-OpenStreetMap.html">Single Listing</a></li>
									</ul>
								</li>
							</ul>
						</li>

						<li><a href="#">PUBLIKASI</a>
							<ul>
								<li><a href="dashboard.html">Dashboard</a></li>
								<li><a href="dashboard-messages.html">Messages</a></li>
								<li><a href="dashboard-bookings.html">Bookings</a></li>
								<li><a href="dashboard-wallet.html">Wallet</a></li>
								<li><a href="dashboard-my-listings.html">My Listings</a></li>
								<li><a href="dashboard-reviews.html">Reviews</a></li>
								<li><a href="dashboard-bookmarks.html">Bookmarks</a></li>
								<li><a href="dashboard-add-listing.html">Add Listing</a></li>
								<li><a href="dashboard-my-profile.html">My Profile</a></li>
								<li><a href="dashboard-invoice.html">Invoice</a></li>
							</ul>
						</li>

						<li><a href="#">INFORMASI PUBLIK</a>
							<div class="mega-menu mobile-styles three-columns">

									<div class="mega-menu-section">
										<ul>
											<li class="mega-menu-headline">Pages #1</li>
											<li><a href="pages-user-profile.html"><i class="sl sl-icon-user"></i> User Profile</a></li>
											<li><a href="pages-booking.html"><i class="sl sl-icon-check"></i> Booking Page</a></li>
											<li><a href="pages-add-listing.html"><i class="sl sl-icon-plus"></i> Add Listing</a></li>
											<li><a href="pages-blog.html"><i class="sl sl-icon-docs"></i> Blog</a></li>
										</ul>
									</div>
		
									<div class="mega-menu-section">
										<ul>
											<li class="mega-menu-headline">Pages #2</li>
											<li><a href="pages-contact.html"><i class="sl sl-icon-envelope-open"></i> Contact</a></li>
											<li><a href="pages-coming-soon.html"><i class="sl sl-icon-hourglass"></i> Coming Soon</a></li>
											<li><a href="pages-404.html"><i class="sl sl-icon-close"></i> 404 Page</a></li>
											<li><a href="pages-masonry-filtering.html"><i class="sl sl-icon-equalizer"></i> Masonry Filtering</a></li>
										</ul>
									</div>

									<div class="mega-menu-section">
										<ul>
											<li class="mega-menu-headline">Other</li>
											<li><a href="pages-elements.html"><i class="sl sl-icon-settings"></i> Elements</a></li>
											<li><a href="pages-pricing-tables.html"><i class="sl sl-icon-tag"></i> Pricing Tables</a></li>
											<li><a href="pages-typography.html"><i class="sl sl-icon-pencil"></i> Typography</a></li>
											<li><a href="pages-icons.html"><i class="sl sl-icon-diamond"></i> Icons</a></li>
										</ul>
									</div>
									
							</div>
						</li>

						<li><a href="#">MEDIA UPDATE</a>
							<ul>
								<li><a href="dashboard.html">Dashboard</a></li>
								<li><a href="dashboard-messages.html">Messages</a></li>
								<li><a href="dashboard-bookings.html">Bookings</a></li>
								<li><a href="dashboard-wallet.html">Wallet</a></li>
								<li><a href="dashboard-my-listings.html">My Listings</a></li>
								<li><a href="dashboard-reviews.html">Reviews</a></li>
								<li><a href="dashboard-bookmarks.html">Bookmarks</a></li>
								<li><a href="dashboard-add-listing.html">Add Listing</a></li>
								<li><a href="dashboard-my-profile.html">My Profile</a></li>
								<li><a href="dashboard-invoice.html">Invoice</a></li>
							</ul>
						</li>

						<li><a href="#">KONTAK KAMI</a>
							<ul>
								<li><a href="dashboard.html">Dashboard</a></li>
								<li><a href="dashboard-messages.html">Messages</a></li>
								<li><a href="dashboard-bookings.html">Bookings</a></li>
								<li><a href="dashboard-wallet.html">Wallet</a></li>
								<li><a href="dashboard-my-listings.html">My Listings</a></li>
								<li><a href="dashboard-reviews.html">Reviews</a></li>
								<li><a href="dashboard-bookmarks.html">Bookmarks</a></li>
								<li><a href="dashboard-add-listing.html">Add Listing</a></li>
								<li><a href="dashboard-my-profile.html">My Profile</a></li>
								<li><a href="dashboard-invoice.html">Invoice</a></li>
							</ul>
						</li>

						<li><a href="#">LAIN - LAIN</a>
							<ul>
								<li><a href="dashboard.html">Dashboard</a></li>
								<li><a href="dashboard-messages.html">Messages</a></li>
								<li><a href="dashboard-bookings.html">Bookings</a></li>
								<li><a href="dashboard-wallet.html">Wallet</a></li>
								<li><a href="dashboard-my-listings.html">My Listings</a></li>
								<li><a href="dashboard-reviews.html">Reviews</a></li>
								<li><a href="dashboard-bookmarks.html">Bookmarks</a></li>
								<li><a href="dashboard-add-listing.html">Add Listing</a></li>
								<li><a href="dashboard-my-profile.html">My Profile</a></li>
								<li><a href="dashboard-invoice.html">Invoice</a></li>
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
					<li><a href="#">Strukture Organisasi</a></li>
					<li><a href="#">Profile Pejabat</a></li>
					<li><a href="#">Visi dan Misi</a></li>
					<li><a href="#">Sejarah Porlantas</a></li>
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
					<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
					<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
					<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
					<li><a class="vimeo" href="#"><i class="icon-vimeo"></i></a></li>
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


</body>

</html>