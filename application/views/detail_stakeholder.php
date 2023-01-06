<!-- ======= Breadcrumbs ======= -->
<?php
$asd = explode("|", $stakeholder['link_playlist']);
?>
<section id="breadcrumbs" class="breadcrumbs">
	<div class="container">

		<ol>
			<li><a href="<?= base_url() ?>home">Home</a></li>
			<li><?= $breadcrumb ?></li>
		</ol>
		<div class="container-fluid mt-5">
			<div class="row">
				<div class="col-md-1 text-center">
					<img src="<?= url_api() ?>stakeholder/<?= $stakeholder['icon'] ?>" alt="" width="100%">
				</div>
				<div class="col-md-4">
					<h3><?= $stakeholder['fullname'] ?></h3>
					<hr>
					<p>
						<?= $stakeholder['alamat'] ?> <br>
						Telp: <?= $stakeholder['no_telp'] ?>, Fax: <?= $stakeholder['fax'] ?> Call-center: <?= $stakeholder['call_center'] ?><br>
						Email: <a href="mailto:<?= $stakeholder['email'] ?>"><?= $stakeholder['email'] ?></a>
					</p>
				</div>
				<div class="col-md-3">
					<p>Website:</p>
					<a href="<?= $stakeholder['url'] ?>"><?= $stakeholder['url'] ?></a>
					<p>Social Media:</p>
					<ul class="social-icons margin-top-20">
						<li><a class="facebook" href="https://www.facebook.com/<?= $stakeholder['facebook'] ?>?_rdc=1&_rdr"><i class="icon-facebook"></i></a></li>
						<li><a class="twitter" href="https://twitter.com/<?= $stakeholder['twitter'] ?>"><i class="icon-twitter"></i></a></li>
						<li><a class="instagram" href="https://www.instagram.com/<?= $stakeholder['instagram'] ?>/?utm_source=ig_embed&ig_rid=db55f016-5d27-4cc0-871b-d925e32c38fb"><i class="icon-instagram"></i></a></li>
						<li><a class="youtube" href="<?= $stakeholder['youtube'] ?>"><i class="icon-youtube"></i></a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<div style="height: 200px; z-index:1;" id="map"></div>
					<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d28108.39961480636!2d106.82794556302969!3d-6.163824152437846!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x30b7ec7f0aeb8f12!2s<?= $stakeholder['fullname'] ?>!5e0!3m2!1sid!2sid!4v1670669074240!5m2!1sid!2sid" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->

				</div>

			</div>

		</div>

	</div>


</section><!-- End Breadcrumbs -->

<!-- ======= Events Section ======= -->
<section id="events" class="events">
	<div class="container" data-aos="fade-up">


		<div class="section-title">
			<h2>Media Sosial <?= $stakeholder['title'] ?></h2>
			<!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
		</div>

		<h3>Link Youtube <?= $stakeholder['title'] ?></h3>


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
		<!-- <hr class="mt-5 mb-5"> -->




	</div>
</section><!-- End Events Section -->


<!-- sosmed -->
<section>
	<div class="container">

		<div class="row">
			<div class="col-md-4">
				<h3>Link Twitter</h3>
				<iframe id="twitter-widget-1" scrolling="no" allowtransparency="true" allowfullscreen="true" class="" style="border: 1px solid rgba(0, 0, 0, 0.09);border-radius: 15px;position: static; visibility: visible; width: 100%; height: 870px; display: block; flex-grow: 1;" title="Twitter Timeline" src="https://syndication.twitter.com/srv/timeline-profile/screen-name/<?= $stakeholder['twitter'] ?>?dnt=false&amp;embedId=twitter-widget-1&amp;frame=false&amp;hideBorder=false&amp;hideFooter=false&amp;hideHeader=false&amp;hideScrollBar=false&amp;lang=id&amp;maxHeight=1000px&amp;origin=https%3A%2F%2Fk3i.korlantas.polri.go.id%2F&amp;sessionId=0311759d0e3ab0003a26bc5fd6f7aa2b8d9d553c&amp;showHeader=true&amp;showReplies=false&amp;siteScreenName=K3IKorlantas&amp;transparent=false&amp;widgetsVersion=1bfeb5c3714e8%3A1661975971032" frameborder="0"></iframe>

			</div>
			<!-- <div class="col-md-4">
			<iframe id="twitter-widget-1" scrolling="no" allowtransparency="true" allowfullscreen="true" class="" style="border: 1px solid rgba(0, 0, 0, 0.09);border-radius: 15px;position: static; visibility: visible; width: 100%; height: 700px; display: block; flex-grow: 1;" title="Twitter Timeline" src="https://syndication.twitter.com/srv/timeline-profile/screen-name/korpolairud?dnt=false&amp;embedId=twitter-widget-1&amp;frame=false&amp;hideBorder=false&amp;hideFooter=false&amp;hideHeader=false&amp;hideScrollBar=false&amp;lang=id&amp;maxHeight=1000px&amp;origin=https%3A%2F%2Fk3i.korlantas.polri.go.id%2F&amp;sessionId=0311759d0e3ab0003a26bc5fd6f7aa2b8d9d553c&amp;showHeader=true&amp;showReplies=false&amp;siteScreenName=K3IKorlantas&amp;transparent=false&amp;widgetsVersion=1bfeb5c3714e8%3A1661975971032" frameborder="0"></iframe>
				
		</div> -->
			<div class="col-md-4">
				<h3>Link Facebook</h3>
				<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F<?= $stakeholder['facebook'] ?>&tabs=timeline&width=500&height=870&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=392649888900623" width=100% height=870px style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
			</div>
			<div class="col-md-4">
				<h3>Dokumen Peraturan</h3>
				<div class="card">
					<div class="card-body">
						<table id="datatable" class="table table-striped table-hover dt-responsive w-100 table-striped">
							<thead>
								<tr>
									<th width="5%">No</th>
									<th width="40%">Nama Peraturan</th>
								</tr>
							</thead>
							<tbody>
								<?php
								if($getdoc == []):

								?>
								<tr>
									<td></td>
									<td>Data Tidak Ditemukan</td>
								</tr>
								<?php endif;?>

								<?php
								$i = 1;
								// var_dump($getdoc);die;
									foreach($getdoc as $doc): 

								?>
								
									<tr>
										<td width="5%"><?= $i++?></td>
										<td width="40%"><a href="<?= url_api()?>regulation_doc/<?= $doc['fileReg']?>"><?= $doc['regulation_name']?></a></td>
									</tr>
								<?php endforeach;?>
								
								
							</tbody>
						</table>
						<a href="<?= $stakeholder['url']?>"><button class="btn btn-lg btn-primary" style="width: 100%;">Selengkapnya</button></a>
					</div>
				</div>
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
		}).setView([<?= $stakeholder['latitude'] ?>, <?= $stakeholder['longitude'] ?>], 15);


		L.tileLayer('https://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
			attribution: '&copy; <a href="https://maps.google.com/">Google Map</a> contributors'
		}).addTo(map);

		L.marker([<?= $stakeholder['latitude'] ?>, <?= $stakeholder['longitude'] ?>]).addTo(map)
			.bindPopup('<?= $stakeholder['fullname'] ?> | <br><a href="<?= $stakeholder['link_gmaps']?>" target="_blank">go to map</a>')
			.openPopup();
	})
</script>
