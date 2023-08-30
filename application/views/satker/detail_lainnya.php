<?php
$asd = explode("|", $data['link_youtube_fungsi']);
?>
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="<?= base_url()?>home">Home</a></li>
          <li><?= $breadcrumb?></li>
        </ol>
        <div class="container mt-5">
			<div class="row">
				<div class="col-md-1 text-center">
				<img src="<?php echo url_api(); ?>fungsilain/logo/<?php echo $data['logo_fungsi']; ?>" alt="" width="100%">
				</div>
				<div class="col-md-4">
					<h3><?= $headline?></h3>
					<hr>
					<p>	
					<?= $data['address_fungsi']?>  <br>
						Telp: <?= $data['phone_fungsi']?> <br>
						Email: <a href="mailto:<?= $data['email_fungsi']?>"><?= $data['email_fungsi']?></a> 
					</p>
				</div>
				<div class="col-md-3">
				<p>Website:</p>
					<a href="<?= $data['website_fungsi']?>"><?= $data['website_fungsi']?></a>
					<p>Social Media:</p>
					<ul class="social-icons margin-top-20">
					<li><a class="facebook" href="https://www.facebook.com/<?= $data['facebook_fungsi']?>"><i class="icon-facebook"></i></a></li>
						<li><a class="twitter" href="https://twitter.com/<?= $data['twitter_fungsi']?>"><i class="icon-twitter"></i></a></li>
						<li><a class="instagram" href="https://www.instagram.com/<?= $data['instagram_fungsi']?>/"><i class="icon-instagram"></i></a></li>
						<li><a class="youtube" href="<?= $data['youtube']?>"><i class="icon-youtube"></i></a></li>
					</ul>
				</div>
				<div class="col-md-4">
                    <div style="height: 200px; z-index:1; border: 1px solid black; box-shadow: 2px 3px 3px black" id="map"></div>
					<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15864.742886154554!2d106.80150800000001!3d-6.239236!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb6702055b4d182f6!2sMarkas%20Besar%20Kepolisian%20Negara%20Republik%20Indonesia%20(MABES%20POLRI)!5e0!3m2!1sid!2sid!4v1665326540895!5m2!1sid!2sid" width="100%" height="220" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
				</div>
	
			</div>

		</div>

      </div>
	  
    </section><!-- End Breadcrumbs -->

	<!-- ======= Events Section ======= -->
<section id="events" class="events">
      <div class="container" data-aos="fade-up">
		

	  <div class="section-title">
          <h2>Link Youtube</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

		<!-- <h3>KORBINMAS BAHARKAM POLRI</h3> -->

		<div class="row margin-top-20">
			<div class="col-md-8 border-end shadows">
				<iframe width="100%" height="100%" src="<?= $asd[0] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div class="col-md-4">
				<div class="row" style="height: 450px;overflow-y: auto;scrollbar-width: thin;">
					<div class="col-md-12">
						<iframe width="100%" height="200" src="<?= $asd[1] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<div class="col-md-12">
						<iframe width="100%" height="200" src="<?= $asd[2] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<div class="col-md-12">
						<iframe width="100%" height="200" src="<?= $asd[3] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
		
      </div>
    </section><!-- End Events Section -->

	<!-- ======= Gallery Section ======= -->
<section id="gallery" class="gallery section-bg">
	<div class="container" data-aos="fade-up">

		<div class="section-title">
			<h2>Galeri <?= $breadcrumb?></h2>
			<!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
		</div>

		<div class="gallery-slider swiper">
			<div class="swiper-wrapper align-items-center">
            <?php foreach($dokumentasi as $doc):?>
                <div class="swiper-slide">
                    <a class="glightbox" data-gallery="images-gallery" href="<?= url_api() ?><?= 'fungsilain/galeri/' . $doc['foto'] ?>"><img src="<?= url_api() ?><?= 'fungsilain/galeri/' . $doc['foto'] ?>" class="img-fluid" alt="" width="100%"></a>
                    <p><?= $doc['description']?></p>
                </div>
            <?php endforeach;?>
				
				<div class="swiper-pagination"></div>
			</div>
		</div>
</section><!-- End Gallery Section -->

	<section>
		<div class="container">
			<div class="section-title">
			<h2>Media Sosial <?= $breadcrumb?></h2>
			<!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
		</div>
		<div class="row">
		<div class="col-md-4">
		<iframe id="twitter-widget-1" scrolling="no" allowtransparency="true" allowfullscreen="true" class="" style="border: 1px solid rgba(0, 0, 0, 0.09);border-radius: 15px; position: static; visibility: visible; width: 100%; height: 700px; display: block; flex-grow: 3;" title="Twitter Timeline" src="https://syndication.twitter.com/srv/timeline-profile/screen-name/<?= $data['twitter_fungsi']?>?dnt=false&amp;embedId=twitter-widget-0&amp;frame=false&amp;hideBorder=false&amp;hideFooter=false&amp;hideHeader=false&amp;hideScrollBar=false&amp;lang=id&amp;maxHeight=1000px&amp;origin=https%3A%2F%2Fk3i.korlantas.polri.go.id%2F&amp;sessionId=0311759d0e3ab0003a26bc5fd6f7aa2b8d9d553c&amp;showHeader=true&amp;showReplies=false&amp;siteScreenName=K3IKorlantas&amp;transparent=false&amp;widgetsVersion=1bfeb5c3714e8%3A1661975971032" frameborder="0"></iframe>
				</div>
				<!-- <div class="col-md-4">
					<iframe id="twitter-widget-1" scrolling="no" allowtransparency="true" allowfullscreen="true" class="" style="border: 1px solid rgba(0, 0, 0, 0.09);border-radius: 15px;position: static; visibility: visible; width: 100%; height: 400px; display: block; flex-grow: 1;" title="Twitter Timeline" src="https://syndication.twitter.com/srv/timeline-profile/screen-name/TMCPoldaMetro?dnt=false&amp;embedId=twitter-widget-1&amp;frame=false&amp;hideBorder=false&amp;hideFooter=false&amp;hideHeader=false&amp;hideScrollBar=false&amp;lang=id&amp;maxHeight=1000px&amp;origin=https%3A%2F%2Fk3i.korlantas.polri.go.id%2F&amp;sessionId=0311759d0e3ab0003a26bc5fd6f7aa2b8d9d553c&amp;showHeader=true&amp;showReplies=false&amp;siteScreenName=K3IKorlantas&amp;transparent=false&amp;widgetsVersion=1bfeb5c3714e8%3A1661975971032" frameborder="0"></iframe>
				</div> -->
				<div class="col-md-4">
					<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F<?= $data['facebook_fungsi']?>&tabs=timeline&width=500&height=840&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=392649888900623" width=100% height=700px style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
		</div>
	</div>
		</div>
	</section>

    <script>
	$(document).ready(function() {
		var googleStreet = L.tileLayer('https://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
			maxZoom: 20,
			subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
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
		var gl = L.mapboxGL({
			accessToken: 'pk.eyJ1IjoibW9yZ2Vua2FmZmVlIiwiYSI6IjIzcmN0NlkifQ.0LRTNgCc-envt9d5MzR75w',
			style: 'mapbox://styles/mapbox/traffic-day-v2'
		});

		var trafficMutant = L.gridLayer.googleMutant({
			maxZoom: 24,
			type: "hybrid",
		}).addGoogleLayer("TrafficLayer");

		var trafficMutantRoad = L.gridLayer.googleMutant({
			maxZoom: 24,
			type: "roadmap",
		}).addGoogleLayer("TrafficLayer");

		var map = L.map('map', {
			layers: [googleStreet]
		}).setView([<?= $data['latitude_fungsi'] ?>, <?= $data['longitude_fungsi'] ?>], 15);

		L.tileLayer('https://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
			attribution: '&copy; <a href="https://maps.google.com/">Google Map</a> contributors'
		}).addTo(map);

		L.marker([<?= $data['latitude_fungsi'] ?>, <?= $data['longitude_fungsi'] ?>]).addTo(map)
        .bindPopup('<?= $data['fullname_fungsi'] ?>')
	})
</script>
