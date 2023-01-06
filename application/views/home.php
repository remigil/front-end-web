  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators mt-5" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->

          <div class="carousel-item active" style="background-image: url(assets/fe/slider-home6.png)">
            <div class="carousel-container" style="top:0;">
              <div class="carousel-content">
                <img src="<?= base_url() ?>assets/logo-nav.png" alt="">
                <h2 class="animate__animated animate__fadeInDown">Selamat Datang di <span>Portal K3I Korlantas Polri</span></h2>
                <p class="animate__animated animate__fadeInUp" style="text-shadow: 2px 2px #000;"><b>www.k3i.korlantas.polri.go.id</b> merupakan bentuk pelayanan masyarakat online di bidang Lalu Lintas dan Angkutan Jalan (LLAJ), dimana salah satu elemen penting dalam mewujudkan penyelenggaraan negara yang terbuka adalah hak publik untuk memperoleh pelayanan dan informasi publik sesuai tatanan di dalam berbangsa dan bernegara. Dalam hal ini, pemerintahan di Indonesia beserta institusi lainnya seperti kami Korlantas Polri bekerja untuk memastikan bahwa setiap rakyat di seluruh tanah air harus dapat merasakan kehadiran pelayanan pemerintahan di bidang LLAJ yang diselenggarakan oleh Polri sebagai salah satu pemangku kepentingan sesuai amanat Undang-Undang No.22 Tahun 2009 tentang LLAJ.</p>
                <!-- <a href="" class="btn-get-started animate__animated animate__fadeInUp">Telusuri</a> -->
              </div>
            </div>
          </div>


          <?php 
						$i = 0;
					foreach ($semuaberita as $key) : 
						if (++$i == 7) break;
					?>
            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image:url(assets/fe/hero-wall.png); padding-top:100px">
              <div class="carousel-container" style="padding-top: 100px;">
                <div class="carousel-content">
                  <!-- <img src="<?= base_url() ?>assets/logo-nav.png" alt=""> -->
									<div class="container pt-5">
										<div class="row">
											<div class="col-md-5">
												<div class="news_image">
													<img width="500" src="<?= url_api() ?>news/<?= $key['picture'] ?>" class="img-fluid" style="height:300px">
												</div>
												
											</div>
											<div class="col-md-7">
												<h2 class="animate__animated fanimate__adeInDown fs-6" style="text-align: left;color:#fffd51; margin-bottom:10px !important">berita</h2>
												<h2 class="animate__animated fanimate__adeInDown fs-4" style="text-align: left;"><?= $key['title'] ?></h2>
												<p class="animate__animated animate__fadeInUp fs-7" style="text-shadow: 2px 2px #000; text-align:left; width:100% !important"><?= substr($key['content'], 0, 250) . '. . .' ?></p>
												<a href="berita_front/detailberita/<?= $key['id'] ?>" class="btn-get-started animate__animated animate__fadeInUp">Baca Selengkapnya</a>
	
											</div>
										</div>

									</div>
                  <!-- <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a> -->
                </div>
              </div>
            </div>
          <?php endforeach; ?>

          <!-- Slide 3 -->



        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
		<div class="container-fluid" style="padding-left: 150px; padding-right:150px">
			<div class="row shadow mb-5 bg-body rounded">
	
				<div class="col-md-2">
					<div class="container-fluid">
						<h4 class="text-black p-2">Informasi</h4>
					</div>
	
				</div>
				<div class="col-md-10">
					<div class="teks-berita">
						<marquee behavior="" direction="" style="color: white; background-color:#073888;" class="p-2" onMouseOver="this.stop()" onMouseOut="this.start()">
							SELAMAT DATANG DI PORTAL PUSAT KENDALI KOORDINASI KOMUNIKASI DAN INFORMASI KORLANTAS POLRI
							<?php foreach ($semuaberita as $data) : ?>
								<a href="berita_front/detailberita/<?= $data['id'] ?>" class="mx-3" style="text-decoration: none; color:#fff">|| <?= $data['title'] ?> ||</a>
							<?php endforeach; ?>
						</marquee>

					</div>
	
				</div>
			</div>

		</div>

  </section><!-- End Hero -->
  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">

      <div class="container">
        <div class="section-title">
          <h2>Statistik Nasional</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 p-2" data-aos="zoom-out">
            <div class="service-item position-relative" style="background-color: #ff555b; border-radius:10px; color:#3b3b3b">
              <div class="service-item-upper">
                <div class="icon text-center">
                  <iconify-icon icon="bxs:car-crash" width="50"></iconify-icon>
                </div>
                <h4 class="text-center"><a href="https://irsms.korlantas.polri.go.id/dashboard/irsms_icell/#" class="stretched-link fs-5" style="color:#3b3b3b" target="_balnk">Kecelakaan Lalu Lintas</a></h4>
                <h1 id="lakalantas" class="text-center fw-bold"></h1>
                <div class="text-center mt-4">
                  <h6>Data Laka s.d</h6>
                  <h6><?php echo format_indoHari(date('Y-m-d')) ?></h6>

                </div>

              </div>
              <p class="text-center pt-3 pb-3 fw-bold" style="padding: 0; border-radius:10px;">selengkapnya</p>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-3 col-md-6 p-2" data-aos="zoom-out">
            <div class="service-item position-relative" style="background-color: #fffd51; border-radius:10px; color:#3b3b3b">
              <div class="service-item-upper">
                <div class="icon text-center">
                  <iconify-icon icon="ic:sharp-car-crash" width="50"></iconify-icon>
                </div>
                <h4 class="text-center"><a href="https://dakgargakkum.com/dashboard" class="stretched-link fs-5" style="color:#3b3b3b" target="_blank">Pelanggaran Lalu Lintas</a></h4>
                <h1 id="garlantas" class="text-center fw-bold"></h1>
                <div class="text-center mt-4">
                  <h6>Data Dakgar s.d </h6>
                  <h6><?php echo format_indoHari(date('Y-m-d')) ?></h6>

                </div>

              </div>
              <p class="text-center pt-3 pb-3 fw-bold" style="padding: 0; border-radius:10px;">selengkapnya</p>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-3 col-md-6 p-2" data-aos="zoom-out">
            <div class="service-item position-relative" style="background-color: #40e48a; border-radius:10px; color:#3b3b3b">
              <div class="service-item-upper">
                <div class="icon text-center">
                  <iconify-icon icon="mdi:car-multiple" width="50"></iconify-icon>
                  <iconify-icon icon="mdi:atv" width="50"></iconify-icon>
                </div>
                <h4 class="text-center"><a href="http://rc.korlantas.polri.go.id:8900/eri2017/laprekappolda.php" class="stretched-link fs-5" style="color:#3b3b3b" target="_blank">Kendaraan Bermotor</a></h4>
                <h1 id="motor" class="text-center fw-bold"></h1>
                <div class="text-center mt-4">
                  <h6>Data Ranmor s.d </h6>
                  <h6><?php echo format_indoHari(date('Y-m-d')) ?></h6>

                </div>

              </div>
              <p class="text-center pt-3 pb-3 fw-bold" style="padding: 0; border-radius:10px;">selengkapnya</p>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-3 col-md-6 p-2" data-aos="zoom-out">
            <div class="service-item position-relative" style="background-color: #5a8cff; border-radius:10px; color:#3b3b3b">
              <div class="service-item-upper">
                <div class="icon text-center">
                  <iconify-icon icon="mdi:card-account-details-outline" width="50"></iconify-icon>
                </div>
                <h4 class="text-center"><a href="#" class="stretched-link fs-5" style="color:#3b3b3b" target="_blank">SIM Nasional</a></h4>
                <h1 id="sim" class="text-center fw-bold"></h1>
                <div class="text-center mt-4">
                  <h6>Data Sim s.d </h6>
                  <h6><?php echo format_indoHari(date('Y-m-d')) ?></h6>

                </div>

              </div>
              <p class="text-center pt-3 pb-3 fw-bold" style="padding: 0; border-radius:10px;">selengkapnya</p>
            </div>
          </div><!-- End Service Item -->



        </div>

      </div>
    </section><!-- End Featured Services Section -->


    <section id="map-polda" class="map-polda">
      <div class="section-title">
        <h2>Peta Polda Se-Indonesia</h2>
        <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
      </div>

      <div class="container-fluid">
        <div id="map" style="height: 800px;"></div>
      </div>

      <!-- get logo polda by looping -->
      <!-- <div class="row">
				<div class="col-md-12">
					<div class="logo_polda text-center">
					<?php foreach ($logopolda as $polda) : ?>
						<a href="<?= base_url() ?>ditlantas_polda/<?= $polda['id'] ?>">
							<img src="<?= url_api() ?>polda/logo/<?= $polda['logo_polda'] ?>" alt="" width="40px" class="m-2">
						</a>
						<?php endforeach; ?>
					</div>
				</div>
			</div> -->

      <!-- get logo polda manual -->
      
      <div class="container mt-5 ">
      <div class="section-title">
        <h2>Link Kewilayahan Se-Indonesia</h2>
        <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
      </div>

        <div class="row">
          <div class="col-md-12">
  
            <div class="logo_polda text-center">
              <div class="d-flex justify-content-between">
                
                <a href="<?= base_url() ?>Ditlantas_polda/VTJGc2RHVmtYMS9wTkR4R0lkWkcxdkwydkp5dmNEcEJxMmtMUURqdzllTT0">
                  <img src="<?= url_api() ?>polda/logo/Polda_Aceh.png" alt="" width="50px" class="m-2">
                  <p class="nama_polda">Aceh</p>
                </a>
                <a href="<?= base_url() ?>Ditlantas_polda/VTJGc2RHVmtYMStoeEZZVmN6MmE1TGRnQm5TMkJxV2tDc2N6V1l5Sk1QND0">
                  <img src="<?= url_api() ?>polda/logo/Polda_Sumut.png" alt="" width="50px" class="m-2">
                  <p class="nama_polda">Sumut</p>
                </a>
                <a href="<?= base_url() ?>Ditlantas_polda/VTJGc2RHVmtYMStYeHJqNjJTZjZyc2N5RzVsbDlpeGs3UFN2cEp1SjFrWT0">
                  <img src="<?= url_api() ?>polda/logo/Polda_Sumbar.png" alt="" width="50px" class="m-2">
                  <p class="nama_polda">Sumbar</p>
                </a>
                <a href="<?= base_url() ?>Ditlantas_polda/VTJGc2RHVmtYMStkRnMvVi9ZaWFxTVc4Qm9ZUHM5Z2VOQy9RcWplSkYraz0">
                  <img src="<?= url_api() ?>polda/logo/Polda_Riau.png" alt="" width="50px" class="m-2">
                  <p class="nama_polda">Riau</p>
                </a>
                <a href="<?= base_url() ?>Ditlantas_polda/VTJGc2RHVmtYMThmY3hwZUJHYWdFN3VpYUlFeVcrYWhpeTZWa1BXV0tHMD0">
                  <img src="<?= url_api() ?>polda/logo/Polda_Bengkulu.png" alt="" width="50px" class="m-2">
                  <p class="nama_polda">Bengkulu</p>
                </a>
                <a href="<?= base_url() ?>Ditlantas_polda/VTJGc2RHVmtYMS9YUHMvc3JBMkZLSHdhUEs3VW1hQlBleHlWbEVzN0lSST0">
                  <img src="<?= url_api() ?>polda/logo/Polda_Jambi.png" alt="" width="50px" class="m-2">
                  <p class="nama_polda">Jambi</p>
                </a>
                <a href="<?= base_url() ?>Ditlantas_polda/VTJGc2RHVmtYMTl3aFlmWHd2NjFHbHB1aE96UWhQLzh3MmdlYThsTlBsRT0">
                  <img src="<?= url_api() ?>polda/logo/Polda_Sumsel.png" alt="" width="50px" class="m-2">
                  <p class="nama_polda">Sumsel</p>
                </a>
                <a href="<?= base_url() ?>Ditlantas_polda/VTJGc2RHVmtYMSsrOHBCZGZoM1ZLWnZvdHFEYkFrVGxkOXpiYWczK0FPMD0">
                  <img src="<?= url_api() ?>polda/logo/Polda_Lampung.png" alt="" width="50px" class="m-2">
                  <p class="nama_polda">Lampung</p>
                </a>
                <a href="<?= base_url() ?>Ditlantas_polda/VTJGc2RHVmtYMStBOGVndlZMV3JpRGVwV0IraGFTRWg3Z2c3VFJKYXVhND0">
                  <img src="<?= url_api() ?>polda/logo/Polda_Metro_Jaya.png" alt="" width="50px" class="m-2">
                  <p class="nama_polda">Metro Jaya</p>
                </a>
                <a href="<?= base_url() ?>Ditlantas_polda/VTJGc2RHVmtYMTk5TVRlWVA4REh6L2ZqSFI4R215ZlJsaHM3OHVJT0ViND0">
                  <img src="<?= url_api() ?>polda/logo/Polda_Jabar.png" alt="" width="50px" class="m-2">
                  <p class="nama_polda">Jabar</p>
                </a>
                <a href="<?= base_url() ?>Ditlantas_polda/VTJGc2RHVmtYMS9RakZNK1Z4SEUyY3ZCcTFTbzRnRmt2SmlVOGtRUzBwaz0">
                  <img src="<?= url_api() ?>polda/logo/Polda_Jateng.png" alt="" width="50px" class="m-2">
                  <p class="nama_polda">Jateng</p>
                </a>
                <a href="<?= base_url() ?>Ditlantas_polda/VTJGc2RHVmtYMTlvenVBR01YRVh3OWhDV1RCK1JoSEVpRzc5Sk5kV0FJWT0">
                  <img src="<?= url_api() ?>polda/logo/Polda_DIY.png" alt="" width="50px" class="m-2">
                  <p class="nama_polda">DIY</p>
                </a>
                <a href="<?= base_url() ?>Ditlantas_polda/VTJGc2RHVmtYMS9xdkozcXlWVXFXc0JCT013NHdDdUpVRWp3aWFETVR6ST0">
                  <img src="<?= url_api() ?>polda/logo/Polda_Jatim.png" alt="" width="50px" class="m-2">
                  <p class="nama_polda">Jatim</p>
                </a>
                <a href="<?= base_url() ?>Ditlantas_polda/VTJGc2RHVmtYMTh6TVlublVIQjlhUU5YMS9xWDlKOHFpbE55QTRYU0E3Zz0">
                  <img src="<?= url_api() ?>polda/logo/Polda_Bali.png" alt="" width="50px" class="m-2">
                  <p class="nama_polda">Bali</p>
                </a>
                <a href="<?= base_url() ?>Ditlantas_polda/VTJGc2RHVmtYMThPcnJzZkFKbGxFdjVvYW1QTEhMejJNV3dFOStTNnRGST0">
                  <img src="<?= url_api() ?>polda/logo/Polda_NTB.png" alt="" width="50px" class="m-2">
                  <p class="nama_polda">NTB</p>
                </a>
                <a href="<?= base_url() ?>Ditlantas_polda/VTJGc2RHVmtYMThmQXNxeUgyMzhMTFBDTlAzQkpJUzJsZmxJeVNHTks1dz0">
                  <img src="<?= url_api() ?>polda/logo/Polda_NTT.png" alt="" width="50px" class="m-2">
                  <p class="nama_polda">NTT</p>
                </a>
                <a href="<?= base_url() ?>Ditlantas_polda/VTJGc2RHVmtYMStVajlYaXd3YzNwWEd0cmNyeDlWbDltRElEQS9leVhUOD0">
                  <img src="<?= url_api() ?>polda/logo/Polda_Kalbar.png" alt="" width="50px" class="m-2">
                  <p class="nama_polda">Kalbar</p>
                </a>
                
                
                
              </div>
              <div class="d-flex justify-content-between">
                <a href="<?= base_url() ?>Ditlantas_polda/VTJGc2RHVmtYMS9yOGxua3ZCQ2lxQW0vMlA3TE0wejBacjIzbzlVQnAyZz0">
                  <img src="<?= url_api() ?>polda/logo/Polda_Kalsel.png" alt="" width="50px" class="m-2">
                  <p class="nama_polda">Kalsel</p>
                </a>
                <a href="<?= base_url() ?>Ditlantas_polda/VTJGc2RHVmtYMTlqMktVMnRFVGZWekdXTUVydkJyaWNuZmcxdXYxeE5PST0">
                  <img src="<?= url_api() ?>polda/logo/Polda_Kalteng.png" alt="" width="50px" class="m-2">
                  <p class="nama_polda">Kalteng</p>
                </a>
                <a href="<?= base_url() ?>Ditlantas_polda/VTJGc2RHVmtYMStseGQyTko2eUwxY0RqKzNYTHpKQ1NUaXArK1p3ZEdrMD0">
                  <img src="<?= url_api() ?>polda/logo/Polda_Kaltim.png" alt="" width="50px" class="m-2">
                  <p class="nama_polda">Kaltim</p>
                </a>
                <a href="<?= base_url() ?>Ditlantas_polda/VTJGc2RHVmtYMTlGb29lT25WR251VklHZ0Ewcm5sS2JOc2wrNGhBZktnTT0">
                  <img src="<?= url_api() ?>polda/logo/Polda_Sulsel.png" alt="" width="50px" class="m-2">
                  <p class="nama_polda">Sulsel</p>
                </a>
                <a href="<?= base_url() ?>Ditlantas_polda/VTJGc2RHVmtYMTlwNHRrckZGSG1hc2ZXQ1ROa2tNdTUybnMvOU94alJlVT0">
                  <img src="<?= url_api() ?>polda/logo/Polda_Sultra.png" alt="" width="50px" class="m-2">
                  <p class="nama_polda">Sultra</p>
                </a>
                <a href="<?= base_url() ?>Ditlantas_polda/VTJGc2RHVmtYMThPOGR2emEyd3VXMUZPbXNSZDFWRVJJVksxV2Z0am0zRT0">
                  <img src="<?= url_api() ?>polda/logo/Polda_Sulteng.png" alt="" width="50px" class="m-2">
                  <p class="nama_polda">Sulteng</p>
                </a>
                <a href="<?= base_url() ?>Ditlantas_polda/VTJGc2RHVmtYMS91eW1ycmtYSW50UGhzRi9xV0FCQktBTHNNRkRqWG04VT0">
                  <img src="<?= url_api() ?>polda/logo/Polda_Sulawesi_Utara.png" alt="" width="50px" class="m-2">
                  <p class="nama_polda">Sulut</p>
                </a>
                <a href="<?= base_url() ?>Ditlantas_polda/VTJGc2RHVmtYMTlQU1FmWHZHTit0WGdmd3pxSHhLTTFqbENFUEhnUkpHMD0">
                  <img src="<?= url_api() ?>polda/logo/Polda_Maluku.png" alt="" width="50px" class="m-2">
                  <p class="nama_polda">Maluku</p>
                </a>
                <a href="<?= base_url() ?>Ditlantas_polda/VTJGc2RHVmtYMThXMksvT1ZWc08wY09LODdOL1VBNHJIRU1WWWN2Ynh5RT0">
                  <img src="<?= url_api() ?>polda/logo/Polda_Papua.png" alt="" width="50px" class="m-2">
                  <p class="nama_polda">Papua</p>
                </a>
                <a href="<?= base_url() ?>Ditlantas_polda/VTJGc2RHVmtYMTlkSlBrT0FZRmxDbXA1eXIwdWhZZFdicVFSM1gweEFvYz0">
                  <img src="<?= url_api() ?>polda/logo/Polda_Kep_Babel.png" alt="" width="50px" class="m-2">
                  <p class="nama_polda">Babel</p>
                </a>
                <a href="<?= base_url() ?>Ditlantas_polda/VTJGc2RHVmtYMS92elB1ZWt1SkdhNE5nU01lYzdDTk9IOExvTm1nVC85bz0">
                  <img src="<?= url_api() ?>polda/logo/polda_Banten.png" alt="" width="50px" class="m-2">
                  <p class="nama_polda">Banten</p>
                </a>
                <a href="<?= base_url() ?>Ditlantas_polda/VTJGc2RHVmtYMTlHQmIxSzlFTmlaVytmVTJld2ZKZjZmVUhjdktiRnlOVT0">
                  <img src="<?= url_api() ?>polda/logo/Polda_Gorontalo.png" alt="" width="50px" class="m-2">
                  <p class="nama_polda">Gorontalo</p>
                </a>
                <a href="<?= base_url() ?>Ditlantas_polda/VTJGc2RHVmtYMThHYVFTaUwweFNOdUNMNEFZZkpZS2dkMUhLNFFNRXBhcz0">
                  <img src="<?= url_api() ?>polda/logo/Polda_Maluku_Utara.png" alt="" width="50px" class="m-2">
                  <p class="nama_polda">Malut</p>
                </a>
                <a href="<?= base_url() ?>Ditlantas_polda/VTJGc2RHVmtYMThJTEE1NUNwT1JTd2xQZnFka2dPWFlNZ2duT0Q3UWZyST0">
                  <img src="<?= url_api() ?>polda/logo/Polda_Kep_Riau.png" alt="" width="50px" class="m-2">
                  <p class="nama_polda">Kepri</p>
                </a>
                <a href="<?= base_url() ?>Ditlantas_polda/VTJGc2RHVmtYMThZQVJPVWpqZWYwUzBnOVNrVERUM3MyRkVrM2pOL0FkUT0">
                  <img src="<?= url_api() ?>polda/logo/Polda_Papua_Barat.png" alt="" width="50px" class="m-2">
                  <p class="nama_polda">Papua Barat</p>
                </a>
                <a href="<?= base_url() ?>Ditlantas_polda/VTJGc2RHVmtYMTlvYzF5QTU4YmpWMzkxNFBNUldFY2ZMWVFYRjBsbkNoYz0">
                  <img src="<?= url_api() ?>polda/logo/Polda_Sulbar.png" alt="" width="50px" class="m-2">
                  <p class="nama_polda">Sulbar</p>
                </a>
                <a href="<?= base_url() ?>Ditlantas_polda/VTJGc2RHVmtYMS9UaGVKL1J6Z0FjWTBEV3dsdDBGUTFOS1BLUXVWVk1hcz0">
                  <img src="<?= url_api() ?>polda/logo/Polda_Kaltara.png" alt="" width="50px" class="m-2">
                  <p class="nama_polda">Kaltara</p>
                </a>
              </div>
  
            </div>
          </div>
        </div>
      </div>

    </section>



    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">

      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Berita Terkini</h2>

          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="row">

          <?php
          $i = 0;
          foreach ($semuaberita as $data) :
            if (++$i == 5) break; ?>

            <div class="col-lg-3 mt-5" data-aos="fade-up" data-aos-delay="200">
              <div class="post-box">
                <div class="post-img"><img width="500" src="<?= url_api() ?>news/<?= $data['picture'] ?>" class="img-fluid" style="height: 210px;"></div>
                <div class="meta">
                  <span class="post-date"><?= $data['category_news'][0]['name_category_news'] ?></span>
                  <span class="post-author"> / Korlantas Polri</span>
                </div>
								<div class="row">
									<div class="col-md-12 d-block">
									<h4 class="post-title fs-6" style="height: 80px;"><?= substr($data['title'],0,150); ?></h4>
									</div>
									<div class="col-md-12 d-block">
									<p style="text-align: justify;" style="height: 100px;"><?= substr($data['content'], 0, 260) . '. . .' ?></p>
									</div>
									<div class="col-md-12 d-block">
									<a href="berita_front/detailberita/<?= $data['id'] ?>" class="readmore stretched-link"><span>Baca Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
									</div>
								</div>
                
                
                
              </div>
            </div>

          <?php endforeach; ?>



        </div>

        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <a href="<?= base_url() ?>berita_front"><button class="btn btn-lg btn-primary mt-5" style="width: 100%;">Lihat Berita Lainnya</button></a>

            </div>
          </div>
        </div>

      </div>

    </section><!-- End Recent Blog Posts Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">

      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Berita Stakeholder</h2>

          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="row">

          <?php
          $i = 0;
                                                                            foreach ($beritastakeholder as $data) :
            if (++$i == 5) break; ?>

            <div class="col-lg-3 mt-5" data-aos="fade-up" data-aos-delay="200">
              <div class="post-box">
                <div class="post-img"><img width="500" src="<?= url_api() ?>news/<?= $data['picture'] ?>" class="img-fluid" style="height: 210px;"></div>
                <div class="meta">
                  <span class="post-date"><?= $data['category_news'][0]['name_category_news'] ?></span>
                  <span class="post-author"> / Korlantas Polri</span>
                </div>
								<div class="row">
									<div class="col-md-12 d-block">
									<h4 class="post-title fs-6" style="height: 80px;"><?= substr($data['title'],0,150); ?></h4>
									</div>
									<div class="col-md-12 d-block">
									<p style="text-align: justify;" style="height: 100px;"><?= substr($data['content'], 0, 260) . '. . .' ?></p>
									</div>
									<div class="col-md-12 d-block">
									<a href="berita_front/detailberita/<?= $data['id'] ?>" class="readmore stretched-link"><span>Baca Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
									</div>
								</div>
                
                
                
              </div>
            </div>

          <?php endforeach; ?>



        </div>

        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <a href="<?= base_url() ?>berita_front"><button class="btn btn-lg btn-primary mt-5" style="width: 100%;">Lihat Berita Lainnya</button></a>

            </div>
          </div>
        </div>

      </div>

    </section><!-- End Recent Blog Posts Section -->





    <!-- ======= Constructions Section ======= -->
    <section id="constructions" class="constructions">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Layanan Online Korlantas Terintegrasi</h2>
          <!-- <a href="" class="btn-get-started animate__animated animate__fadeInUp">Telusuri</a> -->
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5 justify-content-center">
                <div class="card-bg p-4" style="background-image: url(assets/fe/slider-1.png);">
                    <a href="https://samsatdigital.id/"><img src="<?= base_url() ?>assets/fe/client/signal-hd-putih.png" alt="" width="200" class="mx-auto d-block mt-5"></a>
                  </div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <a href="https://samsatdigital.id/">
                      <h4 class="card-title">SIGNAL (Samsat Digital Nasional)</h4>
                    </a>
                    <p>SIGNAL adalah samsat digital nasional, sebuah aplikasi untuk memudahkan masyarakat membayar pajak kendaraan bermotor secara aman dan mudah</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg p-4" style="background-image: url(assets/fe/slider-1.png);">
                    <a href="https://www.digitalkorlantas.id/"><img src="<?= base_url() ?>assets/fe/client/sinar-hd.png" alt="" width="170" class="mx-auto d-block mt-3"></a>
                  </div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <a href="https://www.digitalkorlantas.id/">
                      <h4 class="card-title">SINAR (SIM Nasional Presisi)</h4>
                    </a>
                    <p>SINAR adalah Sistem perpanjangan SIM secara online yang dapat dimanfaatkan masyarakat untuk mendapatkan pelayanan yang lebih optimal</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg p-4" style="background-image: url(assets/fe/slider-1.png); background-size:cover;">
                    <a href="https://siminternasional.korlantas.polri.go.id/"><img src="<?= base_url() ?>assets/korlantas-hd.png" alt="" width="150" class="mx-auto d-block mt-3"></a>
                  </div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <a href="https://siminternasional.korlantas.polri.go.id/">
                      <h4 class="card-title">SIM Internasional</h4>
                    </a>
                    <p class="fs-7">Pelayanan SIM Internasional Korlantas Polri merupakan portal pendaftaran dan penerbitan SIM Internasional secara online bagi seluruh warga negara Indonesia yang akan mengemudikan kendaraan bermotor di luar negeri.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg p-2" style="background-image: url(assets/fe/slider-1.png);">
                    <a href="https://korlantas.polri.go.id/"><img src="<?= base_url() ?>assets/korlantas-hd.png" alt="" width="50%" class="d-block mx-auto mt-2"></a>
                    <a href="https://ntmcpolri.info/"><img src="<?= base_url() ?>assets/fe/client/ntmc_korlantas.png" alt="" width="50%" class="d-block mx-auto mt-2"></a>
                  </div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <a href="#">
                      <h4 class="card-title">Website Korlantas & NTMC </h4>
                    </a>
                    <p>Website Korlantas & NTMC adalah pusat kendali informasi & komunikasi yang mengintegrasikan sistem informasi di ke lima pemangku kepentingan bidang lalu lintas (Polri, Kementerian PU, Perhubungan, Perindustrian, & Riset Teknologi)</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

        </div>

      </div>
    </section><!-- End Constructions Section -->


    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container">

        <div class="section-title">
          <h2>Aplikasi Korlantas Terintegrasi</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center text-center">
						
            <div class="swiper-slide">
              <a target="_blank" href="http://103.154.174.55/#/pages/dashboard"><img src="<?php echo base_url(); ?>assets/fe/client/bigdata-hd.png" alt="" width="100" class="p-3"></a>
              <p>Big Data</p>
            </div>
            <div class="swiper-slide">
              <a target="_blank" href="http://k3i.korlantas.polri.go.id/cctv/"><img src="<?php echo base_url(); ?>assets/fe/client/cctv-hd.png" alt="" width="100"></a>
              <p>CCTV</p>
            </div>
            <div class="swiper-slide">
              <a target="_blank" href="https://k3i.korlantas.polri.go.id/dis/"><img src="<?php echo base_url(); ?>assets/fe/client/dis-hd.png" alt="" width="100"></a>
              <p>DIS</p>
            </div>
            <div class="swiper-slide">
              <a target="_blank" href="http://dakgargakkum.com/dashboard"><img src="<?php echo base_url(); ?>assets/fe/client/etle-hd.png" alt="" width="100"></a>
              <p>E-TILANG</p>
            </div>

            <!-- <div class="swiper-slide">
							<a target="_blank" href="https://maps.korlantas.polri.go.id/portal/home/"><img src="<?php echo base_url(); ?>assets/fe/client/intan.png" alt="" width="100"></a>
              <p>INTAN</p>
						</div> -->
            <div class="swiper-slide">
              <a target="_blank" href="https://irsms.korlantas.polri.go.id/dashboard/irsms_icell/#"><img src="<?php echo base_url(); ?>assets/fe/client/irsms-hd.png" alt="" width="100"></a>
              <p>IRSMS</p>
            </div>
            <div class="swiper-slide">
              <a target="_blank" href="https://www.digitalkorlantas.id/"><img src="<?php echo base_url(); ?>assets/korlantas-hd.png" alt="" width="100"></a>
              <p>Digital Korlantas</p>
            </div>
            <div class="swiper-slide">
              <a target="_blank" href="https://1500669.com/"><img src="<?php echo base_url(); ?>assets/fe/client/ntmc_korlantas.png" alt="" width="100"></a>
              <p>Contact Center</p>
            </div>
            <!-- <div class="swiper-slide">
							<a target="_blank" href="https://rasirosakorlantas.id/"><img src="<?php echo base_url(); ?>assets/fe/client/rarirosa.png" alt="" width="100"></a>
              <p>RASIROSA</p>
						</div> -->
            <div class="swiper-slide">
              <a target="_blank" href="http://103.154.174.26/index.php"><img src="<?php echo base_url(); ?>assets/fe/client/sbst-hd.png" alt="" width="100"></a>
              <p>SBST</p>
            </div>
            <div class="swiper-slide">
              <a target="_blank" href="http://sislapops.com/home"><img src="<?php echo base_url(); ?>assets/fe/client/sislapops-hd.png" alt="" width="100" class="mb-4"></a>
              <p>SISLAPOPS</p>
            </div>
            <div class="swiper-slide">
              <a target="_blank" href="http://rc.korlantas.polri.go.id:8900/eri2017/laprekappolda.php"><img src="<?php echo base_url(); ?>assets/fe/client/Eri.png" alt="" width="100%"></a>
              <p>ERI</p>
            </div>

          </div>
          <div class="swiper-pagination mt-5"></div>
          <div class="swiper-button-next p-5" style="background-color: rgba(51, 51, 51, 0.5); border-radius:50px; color:#fff; top:50px"></div>
          <div class="swiper-button-prev p-5" style="background-color: rgba(51, 51, 51, 0.5); border-radius:50px; color:#fff; top:50px"></div>

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Media Sosial NTMC</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <!-- Tabs -->
        <ul class="nav nav-pills mb-3">
          <li><a class="nav-link active" data-bs-toggle="pill" href="#tab1">NEWS FLASH</a></li>
          <li><a class="nav-link" data-bs-toggle="pill" href="#tab2">NTMC CHANNEL</a></li>
          <li><a class="nav-link" data-bs-toggle="pill" href="#tab3">NTMC POLRI</a></li>

        </ul><!-- End Tabs -->

        <!-- Tab Content -->
        <div class="tab-content">

          <div class="tab-pane fade show active" id="tab1">

            <div class="row margin-top-20">
              <div class="col-md-8 border-end shadows">
              <iframe width="100%" height="100%" src="https://www.youtube.com/embed/videoseries?list=PLkRjBQuRKlZhSU5ruui7cfGnPqrWNyDUx" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              <div class="col-md-4">
                <div class="row" style="height: 450px;overflow-y: auto;scrollbar-width: thin;">
                  <div class="col-md-12">
                    <iframe width="100%" height="200" src="https://www.youtube.com/embed/videoseries?list=PLkRjBQuRKlZhr68Y7Q3pYszu3xwwGGEWo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                  <div class="col-md-12">
                    <iframe width="100%" height="200" src="https://www.youtube.com/embed/videoseries?list=PLkRjBQuRKlZiRhVpxCG_GIkU8qIDuVsoL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                  <div class="col-md-12">
                    <iframe width="100%" height="200" src="https://www.youtube.com/embed/videoseries?list=PLkRjBQuRKlZhPvc90jNW4o-6KH6gLSLm9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                </div>
              </div>
            </div>

          </div><!-- End Tab 1 Content -->

          <div class="tab-pane fade show" id="tab2">

            <div class="row margin-top-20">
              <div class="col-md-8">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/videoseries?list=PLeX9JoXPx287MG9mUCeRI2TMD1rGZgKew" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              <div class="col-md-4">
                <div class="row" style="height: 450px;overflow-y: auto;scrollbar-width: thin;">
                  <div class="col-md-12">
                    <iframe width="100%" height="200" src="https://www.youtube.com/embed/videoseries?list=PLeX9JoXPx287WCl8x8yRe5PSd3VROvZ4Z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                  <div class="col-md-12">
                    <iframe width="100%" height="200" src="https://www.youtube.com/embed/videoseries?list=PLeX9JoXPx285qn30iKm-V_u7wr-gOlj7U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                  <div class="col-md-12">
                    <iframe width="100%" height="200" src="https://www.youtube.com/embed/videoseries?list=PLeX9JoXPx287PYIAGDdyjY67kvhZBUN_x" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                </div>
              </div>
            </div>

          </div><!-- End Tab 2 Content -->

          <div class="tab-pane fade show" id="tab3">

            <div class="row margin-top-20">
              <div class="col-md-8">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/videoseries?list=PLkRjBQuRKlZhSU5ruui7cfGnPqrWNyDUx" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              <div class="col-md-4">
                <div class="row" style="height: 450px;overflow-y: auto;scrollbar-width: thin;">
                  <div class="col-md-12">
                    <iframe width="100%" height="200" src="https://www.youtube.com/embed/videoseries?list=PLkRjBQuRKlZiRhVpxCG_GIkU8qIDuVsoL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                  <div class="col-md-12">
                    <iframe width="100%" height="200" src="https://www.youtube.com/embed/videoseries?list=PLkRjBQuRKlZjbI-kL-waXbHJRd7cmiRYa" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                  <div class="col-md-12">
                    <iframe width="100%" height="200" src="https://www.youtube.com/embed/videoseries?list=PLkRjBQuRKlZj2pQDOfwMfjwAQMaAtvv3f" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                </div>
              </div>
            </div>

          </div><!-- End Tab 2 Content -->

        </div>
        <div class="row align-items-center">
          <div class="col-md-12 align-self-center">
            <a href="https://1500669.com/"><img src="<?= base_url() ?>assets/fe/contactntmc.png" alt="" width="600" class="mx-auto d-block mt-5"></a>

          </div>
        </div>
      </div>
    </section><!-- End About Section -->


    <section>
      <div class="container">
        <div class="col-md-12 margin-bottom-50 margin-top-50">
          <div class="row">
            <div class="col-md-4">
              <iframe id="twitter-widget-1" scrolling="no" allowtransparency="true" allowfullscreen="true" class="" style="border: 1px solid rgba(0, 0, 0, 0.09);border-radius: 15px; position: static; visibility: visible; width: 100%; height: 870px; display: block; flex-grow: 3;" title="Twitter Timeline" src="https://syndication.twitter.com/srv/timeline-profile/screen-name/NTMCLantasPolri?dnt=false&amp;embedId=twitter-widget-0&amp;frame=false&amp;hideBorder=false&amp;hideFooter=false&amp;hideHeader=false&amp;hideScrollBar=false&amp;lang=id&amp;maxHeight=1000px&amp;origin=https%3A%2F%2Fk3i.korlantas.polri.go.id%2F&amp;sessionId=0311759d0e3ab0003a26bc5fd6f7aa2b8d9d553c&amp;showHeader=true&amp;showReplies=false&amp;siteScreenName=K3IKorlantas&amp;transparent=false&amp;widgetsVersion=1bfeb5c3714e8%3A1661975971032" frameborder="0"></iframe>
            </div>
            <div class="col-md-4">
              <iframe id="twitter-widget-1" scrolling="no" allowtransparency="true" allowfullscreen="true" class="" style="border: 1px solid rgba(0, 0, 0, 0.09);border-radius: 15px;position: static; visibility: visible; width: 100%; height: 870px; display: block; flex-grow: 1;" title="Twitter Timeline" src="https://syndication.twitter.com/srv/timeline-profile/screen-name/TMCPoldaMetro?dnt=false&amp;embedId=twitter-widget-1&amp;frame=false&amp;hideBorder=false&amp;hideFooter=false&amp;hideHeader=false&amp;hideScrollBar=false&amp;lang=id&amp;maxHeight=1000px&amp;origin=https%3A%2F%2Fk3i.korlantas.polri.go.id%2F&amp;sessionId=0311759d0e3ab0003a26bc5fd6f7aa2b8d9d553c&amp;showHeader=true&amp;showReplies=false&amp;siteScreenName=K3IKorlantas&amp;transparent=false&amp;widgetsVersion=1bfeb5c3714e8%3A1661975971032" frameborder="0"></iframe>
            </div>
            <div class="col-md-4">
              <iframe id="twitter-widget-1" scrolling="no" allowtransparency="true" allowfullscreen="true" class="" style="border: 1px solid rgba(0, 0, 0, 0.09);border-radius: 15px;position: static; visibility: visible; width: 100%; height: 870px; display: block; flex-grow: 1;" title="Twitter Timeline" src="https://syndication.twitter.com/srv/timeline-profile/screen-name/KemenkesRI?dnt=false&amp;embedId=twitter-widget-2&amp;frame=false&amp;hideBorder=false&amp;hideFooter=false&amp;hideHeader=false&amp;hideScrollBar=false&amp;lang=id&amp;maxHeight=1000px&amp;origin=https%3A%2F%2Fk3i.korlantas.polri.go.id%2F&amp;sessionId=0311759d0e3ab0003a26bc5fd6f7aa2b8d9d553c&amp;showHeader=true&amp;showReplies=false&amp;siteScreenName=K3IKorlantas&amp;transparent=false&amp;widgetsVersion=1bfeb5c3714e8%3A1661975971032" frameborder="0"></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>


  </main><!-- End #main -->

  <script src="https://cdn.socket.io/4.5.3/socket.io.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/bataspolda/data/BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1.js"></script>
  <script>
    let app_url = '<%-app_url%>'
    let path = '<%-path%>'
    var marker = new Array();
    $(document).ready(function() {
      $("#overlay").fadeIn(300);
      $.ajax({
        type: "POST",
        url: "<?php echo base_url(); ?>home/getPolda",
        dataType: "JSON",
        success: function(result) {
          $("#overlay").fadeOut(300);

          let ressData = result;
          // console.log(ressData.length);


          for (let i = 0; i < ressData.length; i++) {
            id = i;
            var latitude = parseFloat(ressData[i].latitude);
            var longitude = parseFloat(ressData[i].longitude);

            var resource = '';

            marker[i] = L.marker([latitude, longitude], {
              icon: L.divIcon({
                // className: 'location-pin',
                html: `<img src="<?= base_url('assets/pin.png') ?>" style="width: 50px; margin-top: -35px;margin-left: -21px;">`,
                // html: `<img src="<?= url_api() . 'polda/logo/' ?>${ressData[i].logo_polda}" style="width: 25px; margin-top: -35px;margin-left: -14.5px;">`,
                iconSize: [5, 5],
                iconAnchor: [5, 10]
              })
            }).bindPopup(
              `<div style="width: 350px;">
						<div class="row">
							<div class="col-md-2 text-center">
								<img src="<?= url_api() . 'polda/logo/' ?>${ressData[i].logo_polda}" style="width: 50px;">
							</div>
							<div class="col-md-10">
								<span class="fs-5 text-uppercase">Polda <b>${ressData[i].name_polda}</b></span><br>
								<span>${ressData[i].address}</span>
							</div>
							<div class="col-md-12 mt-3 text-center">
								<div class="row">
									<div class="col-md-3">
										<span class="fs-7">Total <b> Kecelakaan</b> Lalu Lintas</span>
									</div>
									<div class="col-md-3">
										<span class="fs-7">Total <b>Pelanggaran</b> Lalu Lintas</span>
									</div>
									<div class="col-md-3">
										<span class="fs-7">Total <b>Turjagwali</b></span>
									</div>    
									<div class="col-md-3">
										<span class="fs-7">Total <b>Kendaraan Bermotor</b></span>
									</div>
								</div>    
							</div>
							
							<div class="col-md-12 mt-3 text-center">
								<div class="row">
									<div class="col-md-3">
										<span class="fs-5"> <b>${ressData[i].lakalantas}</b></span>
									</div>
									<div class="col-md-3">
										<span class="fs-5"> <b>${ressData[i].garlantas}</b></span>
									</div>
									<div class="col-md-3">
									<span class="fs-5"> <b>${ressData[i].turjagwali}</b></span>
									</div>    
									<div class="col-md-3">
										<span class="fs-5"> <b>${ressData[i].sepeda_motor}</b></span>
									</div>
								</div>    
							</div>

							<div class="col-md-12 mt-3">
							<!-- <a href=<?= base_url('Ditlantas_polda/'); ?>${ressData[i].id}><button class="btn btn-primary float-start">Halaman</button></a> -->
								<!-- <a href=${ressData[i].website} target="_blank"><button class="btn btn-primary float-end">Selengkapnya</button></a> -->
								<a href=<?= base_url('Ditlantas_polda/'); ?>${ressData[i].id} class="fs-7"><button class="btn btn-primary float-end fs-7">Selengkapnya</button></a>   
							</div>
							</div>
					</div>
						
				`, {
                minWidth: 100,
                maxWidth: 560,
                width: 400
              }).addTo(mapContainer);
          }

        }
      });

      // 	getStatistik();

      // function getStatistik() {
      //     $.ajax({
      //         type: "POST",
      //         url: "<?php echo base_url(); ?>statistik_nasional/getStatistik",
      //         dataType: "JSON",
      //         success: function(result) {
      //             $("#overlay").fadeOut(300);

      //             $('#lakalantas').html(`<span class="fs-4" >${result.lakalantas}</span >`);
      //             $('#garlantas').html(`<span class="fs-4" >${result.garlantas}</span >`);
      //             $('#motor').html(`<span class="fs-4" >${result.motor}</span>`);
      //             $('#sim').html(`<span class="fs-4" >${result.sim}</span >`);
      //         }
      //     })
      // }

      $("#overlay").fadeIn(300);
      $.ajax({
        type: "POST",
        url: "<?php echo base_url(); ?>home/getStatistik",
        dataType: "JSON",
        success: function(result) {
          // console.log(result)
          $("#overlay").fadeOut(300);

          $('#lakalantas').html(`${result.lakalantas}`);
          $('#garlantas').html(`${result.garlantas}`);
          $('#motor').html(`${result.motor}`);
          $('#sim').html(`${result.sim}`);
        }
      })

      $.ajax({
        type: "POST",
        url: "<?php echo base_url(); ?>home/getBerita",
        dataType: "JSON",
        success: function(result) {
          console.log(result.data)
          console.log(result);
          $('#title_berita').html(`${results.title}`);
          $('#isi_berita').val(result.content)
        }
      })

      var initialCenter = [-2.0719551, 116.5213869];
      var initialZoom = 5.25;
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

      // StART MAP SECTION
      var mapContainer = L.map('map', {
				maxZoom: 20,
        minZoom: 1,
        zoomSnap: 0.25,
        zoomControl: false,
				fullscreenControl: true,
        layers: [googleHybrid]
      }).setView(initialCenter, initialZoom);
			
			


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
      var overlayMaps = {};
      L.control.layers(baseMaps, overlayMaps, {
        position: 'topright'
      }).addTo(mapContainer);
      L.control.zoom({
        position: 'topright'
      }).addTo(mapContainer);
      
      

      mapContainer.doubleClickZoom.disable();

      var autolinker = new Autolinker({
        truncate: {
          length: 30,
          location: 'smart'
        }
      });
      var bounds_group = new L.featureGroup([]);

      function setBounds() {}


      function pop_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1(feature, layer) {
        var popupContent = `<table> 
                    <tr>
                        <h5>Provinsi</h5>
                        <td colspan="2"> ${feature.properties['PROVINSI'] !== null ? autolinker.link(feature.properties['PROVINSI'].toLocaleString()) : ''} </td>
                    </tr> 
                </table>`;
        layer.bindPopup(popupContent, {
          maxHeight: 400
        });
      }

      function style_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1_0(feature) {
        switch (String(feature.properties['PROVINSI'])) {
          case 'ACEH':
            return {
              pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                opacity: 1,
                color: 'rgba(51,160,44,1.0)',
                dashArray: '10,5',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 3.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(215,25,28,0.00392156862745098)',
                interactive: true,
            }
            break;
          case 'BALI':
            return {
              pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                opacity: 1,
                color: 'rgba(255,5,13,1.0)',
                dashArray: '10,5',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 3.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(219,43,36,0.0)',
                interactive: true,
            }
            break;
          case 'BANTEN':
            return {
              pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '10,5',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 3.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(224,60,44,0.0)',
                interactive: true,
            }
            break;
          case 'BENGKULU':
            return {
              pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                opacity: 1,
                color: 'rgba(251,230,44,1.0)',
                dashArray: '10,5',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 3.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(228,78,52,0.0)',
                interactive: true,
            }
            break;
          case 'DAERAH ISTIMEWA YOGYAKARTA':
            return {
              pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                opacity: 1,
                color: 'rgba(73,211,126,1.0)',
                dashArray: '10,5',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 3.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(233,95,60,0.0)',
                interactive: true,
            }
            break;
          case 'DKI JAKARTA':
            return {
              pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                opacity: 1,
                color: 'rgba(166,206,227,1.0)',
                dashArray: '10,5',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 3.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(237,113,69,0.0)',
                interactive: true,
            }
            break;
          case 'GORONTALO':
            return {
              pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                opacity: 1,
                color: 'rgba(178,223,138,1.0)',
                dashArray: '10,5',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 3.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(242,130,77,0.0)',
                interactive: true,
            }
            break;
          case 'JAMBI':
            return {
              pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                opacity: 1,
                color: 'rgba(255,127,0,1.0)',
                dashArray: '10,5',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 3.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(246,148,85,0.0)',
                interactive: true,
            }
            break;
          case 'JAWA BARAT':
            return {
              pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                opacity: 1,
                color: 'rgba(202,0,32,1.0)',
                dashArray: '10,5',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 3.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(251,165,93,0.0196078431372549)',
                interactive: true,
            }
            break;
          case 'JAWA TENGAH':
            return {
              pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                opacity: 1,
                color: 'rgba(251,154,153,1.0)',
                dashArray: '10,5',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 3.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(253,179,103,0.0)',
                interactive: true,
            }
            break;
          case 'JAWA TIMUR':
            return {
              pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                opacity: 1,
                color: 'rgba(166,206,227,1.0)',
                dashArray: '10,5',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 3.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(253,188,114,0.0)',
                interactive: true,
            }
            break;
          case 'KALIMANTAN BARAT':
            return {
              pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                opacity: 1,
                color: 'rgba(31,120,180,1.0)',
                dashArray: '10,5',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 3.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,198,125,0.0)',
                interactive: true,
            }
            break;
          case 'KALIMANTAN SELATAN':
            return {
              pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                opacity: 1,
                color: 'rgba(253,191,111,1.0)',
                dashArray: '10,5',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 3.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,207,136,0.0)',
                interactive: true,
            }
            break;
          case 'KALIMANTAN TENGAH':
            return {
              pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                opacity: 1,
                color: 'rgba(178,223,138,1.0)',
                dashArray: '10,5',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 3.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,217,147,0.0)',
                interactive: true,
            }
            break;
          case 'KALIMANTAN TIMUR':
            return {
              pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                opacity: 1,
                color: 'rgba(145,82,45,1.0)',
                dashArray: '10,5',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 3.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,226,158,0.0)',
                interactive: true,
            }
            break;
          case 'KALIMANTAN UTARA':
            return {
              pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                opacity: 1,
                color: 'rgba(213,180,60,1.0)',
                dashArray: '10,5',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 3.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,236,170,0.0)',
                interactive: true,
            }
            break;
          case 'KEPULAUAN BANGKA BELITUNG':
            return {
              pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                opacity: 1,
                color: 'rgba(141,90,153,1.0)',
                dashArray: '10,5',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 3.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,245,181,0.0)',
                interactive: true,
            }
            break;
          case 'KEPULAUAN RIAU':
            return {
              pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                opacity: 1,
                color: 'rgba(232,113,141,1.0)',
                dashArray: '10,5',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 3.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,255,192,0.0)',
                interactive: true,
            }
            break;
          case 'LAMPUNG':
            return {
              pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                opacity: 1,
                color: 'rgba(190,178,151,1.0)',
                dashArray: '10,5',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 3.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(245,251,182,0.0)',
                interactive: true,
            }
            break;
          case 'MALUKU':
            return {
              pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                opacity: 1,
                color: 'rgba(183,72,75,1.0)',
                dashArray: '10,5',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 3.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(234,246,172,0.0)',
                interactive: true,
            }
            break;
          case 'MALUKU UTARA':
            return {
              pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                opacity: 1,
                color: 'rgba(225,89,137,1.0)',
                dashArray: '10,5',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 3.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(224,242,162,0.0)',
                interactive: true,
            }
            break;
          case 'NUSA TENGGARA BARAT':
            return {
              pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                opacity: 1,
                color: 'rgba(125,139,143,1.0)',
                dashArray: '10,5',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 3.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(213,237,152,0.0)',
                interactive: true,
            }
            break;
          case 'NUSA TENGGARA TIMUR':
            return {
              pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                opacity: 1,
                color: 'rgba(213,180,60,1.0)',
                dashArray: '10,5',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 3.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(203,233,141,0.0)',
                interactive: true,
            }
            break;
          case 'PAPUA':
            return {
              pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                opacity: 1,
                color: 'rgba(243,166,178,1.0)',
                dashArray: '10,5',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 3.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(192,228,131,0.0)',
                interactive: true,
            }
            break;
          case 'PAPUA BARAT':
            return {
              pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                opacity: 1,
                color: 'rgba(125,183,140,1.0)',
                dashArray: '10,5',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 3.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(182,224,121,0.0)',
                interactive: true,
            }
            break;
          case 'RIAU':
            return {
              pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                opacity: 1,
                color: 'rgba(150,227,255,1.0)',
                dashArray: '10,5',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 3.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(171,219,111,0.0)',
                interactive: true,
            }
            break;
          case 'SULAWESI BARAT':
            return {
              pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                opacity: 1,
                color: 'rgba(125,183,162,1.0)',
                dashArray: '10,5',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 3.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(158,213,104,0.0)',
                interactive: true,
            }
            break;
          case 'SULAWESI SELATAN':
            return {
              pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                opacity: 1,
                color: 'rgba(153,164,88,1.0)',
                dashArray: '10,5',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 3.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(141,205,99,0.0)',
                interactive: true,
            }
            break;
          case 'SULAWESI TENGAH':
            return {
              pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                opacity: 1,
                color: 'rgba(198,113,232,1.0)',
                dashArray: '10,5',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 3.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(125,197,94,0.0)',
                interactive: true,
            }
            break;
          case 'SULAWESI TENGGARA':
            return {
              pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                opacity: 1,
                color: 'rgba(98,113,72,1.0)',
                dashArray: '10,5',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 3.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(108,189,89,0.0)',
                interactive: true,
            }
            break;
          case 'SULAWESI UTARA':
            return {
              pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                opacity: 1,
                color: 'rgba(231,209,72,1.0)',
                dashArray: '10,5',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 3.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(92,182,84,0.0)',
                interactive: true,
            }
            break;
          case 'SUMATERA BARAT':
            return {
              pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                opacity: 1,
                color: 'rgba(80,207,104,1.0)',
                dashArray: '10,5',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 3.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(75,174,79,0.0)',
                interactive: true,
            }
            break;
          case 'SUMATERA SELATAN':
            return {
              pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                opacity: 1,
                color: 'rgba(141,125,143,1.0)',
                dashArray: '10,5',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 3.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(59,166,75,0.0)',
                interactive: true,
            }
            break;
          case 'SUMATERA UTARA':
            return {
              pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '10,5',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 3.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(42,158,70,0.0)',
                interactive: true,
            }
            break;
          default:
            return {
              pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(26,150,65,1.0)',
                interactive: true,
            }
            break;
        }
      }
      mapContainer.createPane('pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1');
      mapContainer.getPane('pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1').style.zIndex = 401;
      mapContainer.getPane('pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1').style['mix-blend-mode'] = 'normal';
      var layer_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1 = new L.geoJson(json_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1, {
        attribution: '',
        interactive: true,
        dataVar: 'json_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
        layerName: 'layer_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
        pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
        onEachFeature: pop_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1,
        style: style_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1_0,
      });
      bounds_group.addLayer(layer_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1);
      mapContainer.addLayer(layer_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1);
      setBounds();

      $("[name=searchAlamat]").on("change", function(e) {
        $('#listAddress').show();
        // console.log(this.value);
        $.get(`https://nominatim.openstreetmap.org/search?format=json&q=${this.value}`, function(ress) {
          console.log(ress);
          countlist = 0;
          list = "";
          ress.forEach(el => {
            countlist += 1;
            list += `<a class="list-group-item" style="width: 300px;"
                    id="list${countlist}"   
                    data-alamat="${el.display_name}"
                    data-cords="${el.lat},${el.lon}" href="javascript:void(0)">${el.display_name}</a>`;
            $('#listAddress').html(list);
          });


          if (list == "") {
            countlist = 0;
            list = "";
            $('#listAddress').html(list);
          }


          for (let i = 0; i < ress.length; i++) {
            $(`#list${i+1}`).click(function() {
              var latlong = $(this).data('cords').split(',');
              var latitude = parseFloat(latlong[0]);
              var longitude = parseFloat(latlong[1]);

              $('#listAddress').hide();
              // console.log({a:latitude, b:longitude});
              $('[name=address]').val($(this).data('alamat'));
              $('[name=cordinate]').val($(this).data('cords'));
              mapContainer.flyTo([latitude, longitude], 17);
            });
          }
        });
      });


      
    });
  </script>
