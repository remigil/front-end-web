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
					<img src="<?= base_url()?>assets/fe/client/korlantas.png" alt="">
				</div>
				<div class="col-md-7">
					<h3><?= $headline?></h3>
					<hr>
					<p>	
						Informasi Lalu Lintas Indonesia on Korlantas Polri, Jl. MT Haryono Kav. 37-38 <br>
						Call Center : 1-500-669 || SMS center : 9119<br>
						Email: <a href="mailto:ditgakkum.korlantas@polri.go.id">ditgakkum.korlantas@polri.go.id</a> 
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

	<!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
			
      <div class="container">
			<div class="section-title">
          <h2>Layanan Aplikasi <?= $breadcrumb?></h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 p-2" data-aos="zoom-out" >
            <div class="service-item position-relative" style="background-color: #E0E7FF; border-radius:10px;">
              <div class="icon text-center"><img src="<?= base_url()?>assets/fe/client/irsms.png" alt=""  width="70px" height="70px"></div>
              <h4 class="text-center"><a href="https://irsms.korlantas.polri.go.id/dashboard/irsms_icell/#" class="stretched-link fs-5">IRSMS</a></h4>
              <p class="text-center">Integrated Road Safety Management System adalah pendataan secara elektronik fenomena kecelakaan lalu lintas dan analisanya</p>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-3 col-md-6 p-2" data-aos="zoom-out" >
            <div class="service-item position-relative" style="background-color: #E0E7FF; border-radius:10px;">
              <div class="icon text-center"><img src="<?= base_url()?>assets/fe/client/etle-pmj.png" alt="" width="70px" height="70px"></div>
              <h4 class="text-center"><a href="https://www.etle-pmj.info/id/" class="stretched-link fs-5">E-TLE</a></h4>
              <p class="text-center">Electronic Traffic Law Enforcement adalah sistem penegakkan hukum lalu lintas berbasis elektronik dengan bukti – bukti pelanggaran dalam format elektronik</p>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-3 col-md-6 p-2" data-aos="zoom-out">
            <div class="service-item position-relative" style="background-color: #E0E7FF; border-radius:10px;">
              <div class="icon text-center"><img src="<?= base_url()?>assets/fe/client/korlantas.png" alt="" width="70px" height="70px"></div>
              <h4 class="text-center"><a href="https://dakgargakkum.com/dashboard" class="stretched-link fs-5">E-DAKGAR</a></h4>
              <p class="text-center">E – Dakgar adalah sistem Penindakan Pelanggaran Secara Online dan Transparan yang dicatat secara elektronik dan, dapat di cek secara online.</p>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-3 col-md-6 p-2" data-aos="zoom-out">
            <div class="service-item position-relative" style="background-color: #E0E7FF; border-radius:10px;">
              <div class="icon text-center"><img src="<?= base_url()?>assets/fe/client/eturjawali.png" alt="" width="70px" height="70px"></div>
              <h4 class="text-center"><a href="https://eturjawali.korlantas.polri.go.id/secure/login?redir=aHR0cHM6Ly9ldHVyamF3YWxpLmtvcmxhbnRhcy5wb2xyaS5nby5pZC8=#" class="stretched-link fs-5">E-TURJAWALI</a></h4>
              <p class="text-center">Portal Korlantas untuk pengawasan dan pengendalian kegiatan polantas dalam melaksanakan tugas pengaturan, penjagaan dan patroli atau turjawali</p>
            </div>
          </div><!-- End Service Item -->



        </div>

      </div>
    </section><!-- End Featured Services Section -->

	<section>

		<div class="container">
	<!-- Dokumen Peraturan Satker -->
	<div class="col-md-12">
	<div class="section-title">
          <h2>Dokumen Peraturan </h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>
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
									<td width="40%"><a href="https://k3i.korlantas.polri.go.id/wp-content/uploads/2021/07/UU-NOMOR-2-TAHUN-2002-TTG-KEPOLISIAN-NEGARA-REPUBLIK-INDONESIA.pdf">UU Nomor 2 Tahun 2002 tentang Kepolisian Negara Republik Indonesia</a></td>
								</tr>
								<tr>
									<td width="5%">2</td>
									<td width="40%"><a href="https://k3i.korlantas.polri.go.id/wp-content/uploads/2021/08/UNDANG-UNDANG-NOMOR-22-TAHUN-2009-TENTANG-LALU-LINTAS-DAN-ANGKUTAN-JALAN.pdf">UU Nomor 22 Tahun 2009 tentang Lalu Lintas & Angkutan Jalan</a></td>
								</tr>
								<tr>
									<td width="5%">3</td>
									<td width="40%"><a href="https://k3i.korlantas.polri.go.id/wp-content/uploads/2021/08/PERATURAN-PEMERINTAH-NOMOR-80-TAHUN-2012-TENTANG-TARA-CARA-RIKSA-RANMOR-DI-JALAN-DAKGAR-LLAJ.pdf">Peraturan Pemerintah No 80 Tahun 2012 tentang Tata Cara Riksa Ranmor di Jalan dan Penegakan Pelanggaran Lalu Lintas dan Angkutan Jalan</a></td>
								</tr>
								<tr>
									<td width="5%">4</td>
									<td width="40%"><a href="https://k3i.korlantas.polri.go.id/wp-content/uploads/2021/08/PERATURAN-PEMERINTAH-NOMOR-55-TAHUN-2012-TENTANG-KENDARAAN.pdf">Peraturan Pemerintah Nomor 55 Tahun 2012 tentang Kendaraan</a></td>
								</tr>
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
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/videoseries?list=PLeX9JoXPx287WCl8x8yRe5PSd3VROvZ4Z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="col-md-4">
                                <div class="row" style="height: 450px;overflow-y: auto;scrollbar-width: thin;">
                                    <div class="col-md-12">
                                        <iframe width="100%" height="200" src="https://www.youtube.com/embed/FzRqixxX4mg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                    <div class="col-md-12">
                                        <iframe width="100%" height="200" src="https://www.youtube.com/embed/PtXnDn8UPN0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                    <div class="col-md-12">
                                        <iframe width="100%" height="200" src="https://www.youtube.com/embed/FzRqixxX4mg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
          <h2>Dokumen Kegiatan Ditgakkum Korlantas Polri</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide">
				<a class="glightbox" data-gallery="images-gallery" href="<?= base_url()?>assets/fe/ditgakkum/ditgakkum1.jpg"><img src="<?= base_url()?>assets/fe/ditgakkum/ditgakkum1.jpg" class="img-fluid" alt="" width="100%"></a>
				<p>Dirgakkum Brigjen Pol Aan Suhanan saat menggelar pelatihan dan sosialisasi penertiban ODOl di Tol Cikampek, Selasa (25/1/22).</p>
			</div>
            <div class="swiper-slide">
				<a class="glightbox" data-gallery="images-gallery" href="<?= base_url()?>assets/fe/ditgakkum/ditgakkum2.jpg"><img src="<?= base_url()?>assets/fe/ditgakkum/ditgakkum2.jpg" class="img-fluid" alt="" width="100%"></a>
				<p>Dirgakkum Brigjen Pol Aan Suhanan</p>
			</div>
            <div class="swiper-slide">
				<a class="glightbox" data-gallery="images-gallery" href="<?= base_url()?>assets/fe/ditgakkum/ditgakkum3.jpg"><img src="<?= base_url()?>assets/fe/ditgakkum/ditgakkum3.jpg" class="img-fluid" alt="" width="100%"></a>
				<p>Dirgakkum Brigjen Pol Aan Suhanan, Dirkamsel Brigjen Pol Chryshnanda Dwilaksana, Dirregident Brigjen Pol Yusri Yunus, serta Kabagops Kombes Pol Eddy Djunaedi berkunjung ke Kantor Berita TVOne, 19 Januari 2022</p>
			</div>
            <div class="swiper-slide">
				<a class="glightbox" data-gallery="images-gallery" href="<?= base_url()?>assets/fe/ditgakkum/ditgakkum4.jpg"><img src="<?= base_url()?>assets/fe/ditgakkum/ditgakkum4.jpg" class="img-fluid" alt="" width="100%"></a>
				<p>Direktur Gakkum Brigjen Pol Aan Suhanan Konferensi Pers Arus Lalu lintas Tahun Baru, 30 Desember 2021</p>
			</div>
            <div class="swiper-slide">
				<a class="glightbox" data-gallery="images-gallery" href="<?= base_url()?>assets/fe/ditgakkum/ditgakkum5.jpg"><img src="<?= base_url()?>assets/fe/ditgakkum/ditgakkum5.jpg" class="img-fluid" alt="" width="100%"></a>
				<p>Dirgakkum Korlantas Polri Brigjen Pol Aan Suhanan di Rakernis Fungsi Gakkum Tahun Anggaran 2021 di Ballroom Hotel Ciputra, Jakarta, Senin 6-8 Desember 2021</p>
			</div>
            
            
          <!-- <div class="swiper-pagination"></div> -->
        </div>

      </div>
    </section><!-- End Gallery Section -->
