<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="<?= base_url() ?>home">Home</a></li>
      <li style="text-transform: lowercase ;"><?= $breadcrumb ?></li>
    </ol>
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-1 text-center">
          <img src="<?= url_api() ?>polda/logo/<?= $polda['logo_polda'] ?>" alt="" width="100%">
        </div>
        <div class="col-md-7">
          <h3 style="text-transform:uppercase"><?= $headline ?></h3>
          <hr>
          <p>
            <?= $polda['address'] ?> <br>
            Telp: (021) 721814 <br>
          </p>
        </div>
        <div class="col-md-4">
          <p>Website:</p>
          <a href="<?= $polda['website'] ?>"><?= $polda['website'] ?></a>
          <p>Social Media:</p>
          <ul class="social-icons margin-top-20">
            <li><a class="facebook" href="https://web.facebook.com/<?= $polda['facebook'] ?>" target="_blank"><i class="icon-facebook"></i></a></li>
            <li><a class="twitter" href="https://twitter.com/<?= $polda['twitter'] ?>" target="_blank"><i class="icon-twitter"></i></a></li>
            <li><a class="instagram" href="https://www.instagram.com/<?= $polda['instagram'] ?>" target="_blank"><i class="icon-instagram"></i></a></li>
            <li><a class="youtube" href="<?= $polda['youtube'] ?>" target="_blank"><i class="icon-youtube"></i></a></li>
          </ul>
        </div>

      </div>

    </div>

  </div>
  <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d63458.9587091969!2d106.803352!3d-6.239342!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2388a7a048cd514e!2sBaharkam%20Polri!5e0!3m2!1sid!2sid!4v1665878384384!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="mt-5"></iframe> -->
</section><!-- End Breadcrumbs -->

						

<!-- ======= Featured Services Section ======= -->
<section id="featured-services" class="featured-services">

  <div class="container">
    <div class="section-title">
      <h2>Statistik <?= $headline ?></h2>
      <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
    </div>
    <div class="row gy-4">

      <div class="col-xl-3 col-md-6 p-2" data-aos="zoom-out">
        <div class="service-item position-relative" style="background-color: #ff555b; border-radius:10px; color:#3b3b3b">
					<div class="service-item-upper">
						<div class="icon text-center">
							<iconify-icon icon="bxs:car-crash" width="50"></iconify-icon>
						</div>
						<h4 class="text-center"><a href="https://irsms.korlantas.polri.go.id/dashboard/irsms_icell/#" class="stretched-link fs-5" style="color:#3b3b3b">Kecelakaan Lalu Lintas</a></h4>
						<h1 id="lakalantas" class="text-center fw-bold mb-5"><?= number_format($ditgakkum['data'][0]['lakalantas'], 0, '', '.');  ?></h1>
						
					</div>
        </div>
      </div><!-- End Service Item -->
      <div class="col-xl-3 col-md-6 p-2" data-aos="zoom-out">
        <div class="service-item position-relative" style="background-color: #fffd51; border-radius:10px; color:#3b3b3b">
					<div class="service-item-upper">
						<div class="icon text-center">
							<iconify-icon icon="ic:sharp-car-crash" width="50"></iconify-icon>
						</div>
						<h4 class="text-center"><a href="https://dakgargakkum.com/dashboard" class="stretched-link fs-5" style="color:#3b3b3b">Pelanggaran Lalu Lintas</a></h4>
						<h1 id="garlantas" class="text-center fw-bold mb-5"><?= number_format($ditgakkum['data'][0]['garlantas'], 0, '', '.');  ?></h1>
						
					</div>
        </div>
      </div><!-- End Service Item -->
      <div class="col-xl-3 col-md-6 p-2" data-aos="zoom-out">
        <div class="service-item position-relative" style="background-color: #40e48a; border-radius:10px; color:#3b3b3b">
					<div class="service-item-upper">
						<div class="icon text-center">
							<iconify-icon icon="mdi:car-multiple" width="50"></iconify-icon>
							<iconify-icon icon="mdi:atv" width="50"></iconify-icon>
						</div>
						<h4 class="text-center"><a href="http://rc.korlantas.polri.go.id:8900/eri2017/laprekappolda.php" class="stretched-link fs-5" style="color:#3b3b3b">Kendaraan Bermotor</a></h4>
						<h1 id="motor" class="text-center fw-bold mb-5"><?= number_format($ditregident['data'][0]['ranmor'], 0, '', '.');  ?></h1>
						
					</div>
        </div>
      </div><!-- End Service Item -->
      <div class="col-xl-3 col-md-6 p-2" data-aos="zoom-out">
        <div class="service-item position-relative" style="background-color: #5a8cff; border-radius:10px; color:#3b3b3b">
					<div class="service-item-upper">
						<div class="icon text-center">
							<iconify-icon icon="mdi:card-account-details-outline" width="50"></iconify-icon>
						</div>
						<h4 class="text-center"><a href="#" class="stretched-link fs-5" style="color:#3b3b3b">SIM Nasional</a></h4>
						<h1 id="sim" class="text-center fw-bold mb-5"><?= number_format($ditregident['data'][0]['sim'], 0, '', '.');  ?></h1>
						
					</div>
        </div>
      </div><!-- End Service Item -->



    </div>

  </div>
</section><!-- End Featured Services Section -->

<section>
	<div class="container-fluid">
	<div class="section-title">
      <h2>Peta Lokasi Polres Jajaran <?= $headline ?></h2>
      <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
    </div>
		<div class="col-md-12 mt-3">
      <div class="row" style="display:flex;z-index: 999;position: absolute;">
        <div class="dropdown d-inline-block">
          <div style="cursor: pointer; display:flex; width:300px; height:40px; background-color:white; border-radius:0.25rem;margin: 10px;border: 1px solid var(--bs-input-border);" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div>
                <div class="row" style="margin-left: 0px;">
                    <div class="col-md-12">
                        <div style="display: flex;">
                            <i class="fa fa-fw fas fa-align-justify" style="margin: 10px;z-index: 9;" onClick="hitungGpsId()"></i>
                            <input type="text" placeholder="Telusuri Peta" name="searchAlamat" style="height: 38px;border: none;margin-left: -47px;width: 260px;padding-left: 50px;">
                            <i class="fa fa-fw fas fa-search" style="margin: 10px;z-index: 9;margin-left: 0px;"></i>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn" style=" display:none; color: #495057; margin-left: 10px; background-color: #fff;width: 40px;font-size: 15px;" data-bs-toggle="modal" data-bs-target="#myModalFilter">
                <i style="margin-left: -2px;" class="fa fa-fw fas fa-filter"></i>
            </button>
            <div id="listAddress" style="position: absolute;top: 60px;margin-left: 4px;border-radius: 0.3rem;"></div>
          </div>
        </div>
      </div>
			<div style="height: 800px;" class="mt-3" id="mapG20Dashboard"></div>
		
		</div>

	</div>
	
</section>

<!-- ======= About Section ======= -->
<section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Media Sosial NTMC</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <!-- Tabs -->
        <ul class="nav nav-pills mb-3">
          <li><a class="nav-link active" data-bs-toggle="pill" href="#tab1">Data Polres</a></li>
          <li><a class="nav-link" data-bs-toggle="pill" href="#tab2">Data Satpas</a></li>
          <li><a class="nav-link" data-bs-toggle="pill" href="#tab3">Data Samsat</a></li>
          <li><a class="nav-link" data-bs-toggle="pill" href="#tab4">Link CCTV</a></li>

        </ul><!-- End Tabs -->

        <!-- Tab Content -->
        <div class="tab-content">

          <div class="tab-pane fade show active" id="tab1">

          <table class="table table-striped">
            <thead>
              <tr>
                <th width="5%">No</th>
                <th width="25%">Nama Polres</th>
                <th>Alamat</th>
              </tr>
            </thead>
            <tbody>
              <tr class="table-striped">
                <td>1</td>
                <td>Polres 1</td>
                <td>Jl. Polres</td>
              </tr>
              
            </tbody>
          </table>

          </div><!-- End Tab 1 Content -->

          <div class="tab-pane fade show" id="tab2">

          <table class="table table-striped">
            <thead>
              <tr>
                <th width="5%">No</th>
                <th width="25%">Nama Polres</th>
                <th width="15%">Kode Satpas</th>
                <th>Alamat</th>
              </tr>
            </thead>
            <tbody>
              <tr class="table-striped">
                <td>1</td>
                <td>Polres 1</td>
                <td>001</td>
                <td>Jl. Polres</td>
              </tr>
              
            </tbody>
          </table>

          </div><!-- End Tab 2 Content -->

          <div class="tab-pane fade show" id="tab3">

          <table class="table table-striped">
            <thead>
              <tr>
                <th width="5%">No</th>
                <th width="25%">Nama Samsat</th>
                <th>Alamat</th>
              </tr>
            </thead>
            <tbody>
              <tr class="table-striped">
                <td>1</td>
                <td>Samsat 1</td>
                <td>Jl. Samsat</td>
              </tr>
              
            </tbody>
          </table>

          </div><!-- End Tab 2 Content -->

          <div class="tab-pane fade show" id="tab4">

          <table class="table table-striped">
            <thead>
              <tr>
                <th width="5%">No</th>
                <th width="25%">Nama CCTV</th>
                <th>Link CCTV</th>
              </tr>
            </thead>
            <tbody>
              <tr class="table-striped">
                <td>1</td>
                <td>CCTV 1</td>
                <td>https://cctv1.go.id</td>
              </tr>
              
            </tbody>
          </table>

          </div><!-- End Tab 2 Content -->

        </div>
        
      </div>
    </section><!-- End About Section -->




<!-- ======= Events Section ======= -->
<section id="events" class="events">
  <div class="container" data-aos="fade-up">


    <div class="section-title">
      <h2>Link Sosial Media</h2>
      <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
    </div>

    <h3>Youtube Ditlantas <?= $polda['name_polda']?></h3>

    <div class="row margin-top-20">
      <div class="col-md-12 border-end shadows">
        <iframe width="100%" height="600px" src="<?= $polda['link_playlist']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <!-- <div class="col-md-4">
        <div class="row" style="height: 450px;overflow-y: auto;scrollbar-width: thin;">
          <div class="col-md-12">
            <iframe width="100%" height="200" src="https://www.youtube.com/embed/'xAYCvUh4-ic'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="col-md-12">
            <iframe width="100%" height="200" src="https://www.youtube.com/embed/6gvKr0Vc2Pc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="col-md-12">
            <iframe width="100%" height="200" src="https://www.youtube.com/embed/glFV_qDSUWQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div> -->
    </div>
    <!-- <hr class="mt-5 mb-5"> -->




  </div>
</section><!-- End Events Section -->

<section >
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-md-4">
			<h3>Twitter Ditlantas <?= $polda['name_polda']?></h3>
        <iframe id="twitter-widget-1" scrolling="no" allowtransparency="true" allowfullscreen="true" class="" style="border: 1px solid rgba(0, 0, 0, 0.09);border-radius: 15px;position: static; visibility: visible; width: 100%; height: 870px; display: block; flex-grow: 1;" title="Twitter Timeline" src="https://syndication.twitter.com/srv/timeline-profile/screen-name/<?= $polda['twitter'] ?>?dnt=false&amp;embedId=twitter-widget-1&amp;frame=false&amp;hideBorder=false&amp;hideFooter=false&amp;hideHeader=false&amp;hideScrollBar=false&amp;lang=id&amp;maxHeight=1000px&amp;origin=https%3A%2F%2Fk3i.korlantas.polri.go.id%2F&amp;sessionId=0311759d0e3ab0003a26bc5fd6f7aa2b8d9d553c&amp;showHeader=true&amp;showReplies=false&amp;siteScreenName=K3IKorlantas&amp;transparent=false&amp;widgetsVersion=1bfeb5c3714e8%3A1661975971032" frameborder="0"></iframe>

      </div>
      <!-- <div class="col-md-4">
			<iframe id="twitter-widget-1" scrolling="no" allowtransparency="true" allowfullscreen="true" class="" style="border: 1px solid rgba(0, 0, 0, 0.09);border-radius: 15px;position: static; visibility: visible; width: 100%; height: 700px; display: block; flex-grow: 1;" title="Twitter Timeline" src="https://syndication.twitter.com/srv/timeline-profile/screen-name/korpolairud?dnt=false&amp;embedId=twitter-widget-1&amp;frame=false&amp;hideBorder=false&amp;hideFooter=false&amp;hideHeader=false&amp;hideScrollBar=false&amp;lang=id&amp;maxHeight=1000px&amp;origin=https%3A%2F%2Fk3i.korlantas.polri.go.id%2F&amp;sessionId=0311759d0e3ab0003a26bc5fd6f7aa2b8d9d553c&amp;showHeader=true&amp;showReplies=false&amp;siteScreenName=K3IKorlantas&amp;transparent=false&amp;widgetsVersion=1bfeb5c3714e8%3A1661975971032" frameborder="0"></iframe>
				
		</div> -->
      <div class="col-md-4">
			<h3>Facebook Ditlantas <?= $polda['name_polda']?></h3>
        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F<?= $polda['facebook'] ?>&tabs=timeline&width=500&height=870&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=392649888900623" width=100% height=870px style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
      </div>
    </div>
  </div>
</section>
<script>
	$(document).ready(function() {  
		let id= '<?= $polda['id'] ?>';
		let marker = []
		$.ajax({
			type: "POST",
			url: "<?= base_url(); ?>ditlantas_polda/getDetailPolda",
			data: {
				id: id
			},
			dataType: "JSON",
			success: function(result) {
				var ressPolda = result.polda;
				var ressPolres = result.polres;
				// console.log(ressPolres);

							
							let zxc = ressPolda.zoomview.split(",")
							let lat = parseFloat(zxc[0])
							let long = parseFloat(zxc[1])
										var initialCenter = [lat, long];
        var initialZoom = 8;
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

			

        var shpFile = new L.Shapefile(`<?php echo base_url(); ?>assets/admin/shp/SHP/${ressPolda.file_shp}`, {
        	pointToLayer: function(feature, latlng) {
				var smallIcon = new L.divIcon({
        	iconAnchor: [20, 51],
          popupAnchor: [0, -51],
          className: 'listeo-marker-icon',
          html: '<div class="marker-container">' +
          '<div class="marker-card">' +
          '<div class="front face"><i class="im im-icon-Globe"></i></div>' +
          '<div class="back face"><i class="im im-icon-Globe"></i></div>' +
          '<div class="marker-arrow"></div>' +
          '</div>' +
          '</div>'
          });


          var mark = L.marker(latlng, {
          	icon: smallIcon
          })
          cluster.addLayer(mark)
          return cluster;

          },
          onEachFeature: function(feature, layer) {
          if (feature.properties) {
          layer.bindPopup(Object.keys(feature.properties).map(function(k) {
          return (`<h5>${k}</h5><div>${feature.properties[k]}</div>`);
          }).join("<hr>"), {
          maxWidth: 400,
          maxHeight: 250,
          scrollbarWidth: 'thin',
          className: 'leaflet-infoBox'
          });
          }
          }
          });

						//  for (let i = 0; i < ressPolres.length; i++) {
            //         id = i;
            //         var latitude = parseFloat(ressPolres[i].latitude);
            //         var longitude = parseFloat(ressPolres[i].longitude);

            //         var resource = '';

            //         marker = L.marker([latitude, longitude], {
            //             icon: L.divIcon({
            //                 // className: 'location-pin',
            //                 html: `<img src="<?= base_url('assets/pin.png') ?>" style="width: 50px; margin-top: -35px;margin-left: -21px;">`,
            //                 // html: `<img src="<?= url_api() . 'polda/logo/' ?>${ressPolres[i].logo_polda}" style="width: 25px; margin-top: -35px;margin-left: -14.5px;">`,
            //                 iconSize: [5, 5],
            //                 iconAnchor: [5, 10]
            //             })
            //         }).addTo(mapContainer)
												
            //     }

					


        // StART MAP SECTION
        var mapContainer = L.map('mapG20Dashboard', {
                        maxZoom: 20,
                        minZoom: 1,
                        zoomSnap: 0.25,
                        zoomControl: false,
												fullscreenControl: true,
                        layers: [googleHybrid, shpFile]
                    }).setView(initialCenter, initialZoom);

                    var myRenderer = L.canvas({
                        padding: 0.5
                    });

                    var markerClusterGroup = L.markerClusterGroup();
                    var icon = L.icon({
                        iconUrl: 'http://tourbanyuwangi.com/wp-content/uploads/2018/05/map.png',
                        iconSize: [80, 80], // size of the icon
                    });


                    var baseMaps = {
                        "Google Map Street": googleStreet,
                        "Google Map Satelite": googleSatelite,
                        "Google Map Hybrid": googleHybrid,
                        "Google Map Terrain": googleTerrain,
                        "Google Map Street Traffic": trafficMutantRoad,
                        "Google Map Hybrid Traffic": trafficMutant,
                        "MappBox Traffic": gl,
                    };
                    var overlayMaps = {
                        "Batas Wilayah": shpFile
                    };
                    L.control.layers(baseMaps, overlayMaps, {
                        position: 'topright'
                    }).addTo(mapContainer);
                    L.control.zoom({
                        position: 'topright'
                    }).addTo(mapContainer);

                    mapContainer.doubleClickZoom.enable();
									}})
	  
	  


});
</script>
