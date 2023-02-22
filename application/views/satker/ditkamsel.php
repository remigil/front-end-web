<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
	<div class="container">
		<ol>
			<li><a href="<?= base_url() ?>home">Home</a></li>
			<li><?= $breadcrumb ?></li>
		</ol>
		<div class="container mt-5">
			<div class="row">
				<div class="col-md-1 text-center">
					<img src="<?= base_url() ?>assets/korlantas-hd.png" alt="" width="100%">
				</div>
				<div class="col-md-7">
					<h3><?= $headline ?></h3>
					<hr>
					<p>
						Informasi Lalu Lintas Indonesia on Korlantas Polri, Jl. MT Haryono Kav. 37-38 <br>
						Call Center : 1-500-669 || SMS center : 9119<br>
						Email: <a href="mailto:ditkamsel.korlantas@polri.go.id">ditkamsel.korlantas@polri.go.id
						</a>
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
</section><!-- End Breadcrumbs -->



<section>
	<div class="container">
		<!-- Dokumen Peraturan Satker -->
		<div class="col-md-12">
			<h3 style="text-transform:uppercase ;">Dokumen Peraturan</h3>
			<div class="card">
				<div class="card-body">
				<table id="category1" class="table table-striped display" style="width:100%">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <!-- <th>Jenis Peraturan</th> -->
                            <th width="75%">Nama Peraturan</th>
                            <th>Tahun</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($getdoc as $doc) :
                        ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $doc['regulation_name'] ?></td>
                                <td><?= $doc['year'] ?></td>
                                <td>
                                    <a class="btn btn-success" href="<?= url_api() . 'regulation_doc/' . $doc['fileReg'] ?>">
                                        <i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i>
                                    </a>


                                </td>

                            </tr>
                        <?php endforeach; ?>


                    </tbody>
                </table>
				</div>
			</div>
		</div>
	</div>
	</div>
</section>

<!-- ======= Events Section ======= -->
<section id="events" class="events">
	<div class="container" data-aos="fade-up">
		<div class="section-title">
			<h2>Media Channel</h2>
			<!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
		</div>

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
	</div>
</section><!-- End Events Section -->

<!-- ======= Gallery Section ======= -->
<section id="gallery" class="gallery section-bg">
	<div class="container" data-aos="fade-up">

		<div class="section-title">
			<h2>Dokumen Kegiatan Ditkamsel Korlantas Polri</h2>
			<!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
		</div>

		<div class="gallery-slider swiper">
			<div class="swiper-wrapper align-items-center">
				<div class="swiper-slide">
					<a class="glightbox" data-gallery="images-gallery" href="<?= base_url() ?>assets/fe/ditkamsel/ditkamsel1.jpg"><img src="<?= base_url() ?>assets/fe/ditkamsel/ditkamsel1.jpg" class="img-fluid" alt="" width="100%"></a>
					<p class="fs-7">Direktur Keamanan dan Keselamatan (Dirkamsel) Korlantas Polri, Brigjen Pol. Dr. Chryshnanda Dwilaksana,</p>
				</div>
				<div class="swiper-slide">
					<a class="glightbox" data-gallery="images-gallery" href="<?= base_url() ?>assets/fe/ditkamsel/ditkamsel2.jpg"><img src="<?= base_url() ?>assets/fe/ditkamsel/ditkamsel2.jpg" class="img-fluid" alt="" width="100%"></a>
					<p class="fs-7">Dirkamsel Korlantas Polri saat dampingi Kakorlantas Menghadiri Raker Komisi V DPR Mengenai Infrastruktur dan Transportasi 6/4/2022</p>
				</div>
				<div class="swiper-slide">
					<a class="glightbox" data-gallery="images-gallery" href="<?= base_url() ?>assets/fe/ditkamsel/ditkamsel3.jpg"><img src="<?= base_url() ?>assets/fe/ditkamsel/ditkamsel3.jpg" class="img-fluid" alt="" width="100%"></a>
					<p class="fs-7">Dirkamsel Korlantas Polri Brigjen Pol Chryshnanda DL Dirgakkum Korlantas Polri Brigjen Pol Aan Suhanan, Kabagops Korlantas Polri Kombes Pol Eddi Djunaedi, Dirut PT Jasa Raharja Rivan Purwantono serta Dirlantas Jatim Kombes Pol Latif Usman Dampingi Kakorlantas POLRI tinjau persiapan pelaksanaan Operasi Ketupat 2022 di Surabaya, Jawa Timur. Kamis 10 Maret 2022.</p>
				</div>
				<div class="swiper-slide">
					<a class="glightbox" data-gallery="images-gallery" href="<?= base_url() ?>assets/fe/ditkamsel/ditkamsel4.jpg"><img src="<?= base_url() ?>assets/fe/ditkamsel/ditkamsel4.jpg" class="img-fluid" alt="" width="100%"></a>
					<p class="fs-7">Kasubdit Jemen Opsrek Ditkamsel Korlantas Polri Kombes Pol Indra Jafar meninjau Pos Pam di terminal Lamongan.</p>
				</div>
				<div class="swiper-slide">
					<a class="glightbox" data-gallery="images-gallery" href="<?= base_url() ?>assets/fe/ditkamsel/ditkamsel5.jpg"><img src="<?= base_url() ?>assets/fe/ditkamsel/ditkamsel5.jpg" class="img-fluid" alt="" width="100%"></a>
					<p class="fs-7">Direktur Keamanan dan Keselamatan (Dirkamsel) Korlantas Polri, Brigjen Pol. Dr. Chryshnanda Dwilaksana, saat Mendampingi Kakorlantas berkunjung ke gedung TV One, 19 Januari 2021</p>
				</div>
				<div class="swiper-pagination"></div>
			</div>
		</div>
</section><!-- End Gallery Section -->

<script>
    $(document).ready(function() {
      $('#category1').DataTable();
    });
  </script>