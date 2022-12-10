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

	<section id="contact" class="contact">
      <div class="map">
	  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d126916.97940835782!2d106.84999300000001!3d-6.243214!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfa8b81b7b3cc946f!2sPusat%20Kendali%20Koordinasi%20Komunikasi%20dan%20Informasi%20Korlantas%20Polri!5e0!3m2!1sid!2sid!4v1665028541383!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div><!-- End Google Maps -->

      <div class="container">

        <div class="row gy-5 gx-lg-5">

          <div class="col-lg-4">

		  <div class="info">
              <h3>Pusat Kendali, Koordinasi, Komunikasi dan Informasi Korlantas Polri</h3>
              <!-- <p>Et id eius voluptates atque nihil voluptatem enim in tempore minima sit ad mollitia commodi minus.</p> -->

              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Location:</h4>
                  <p>Jl. MT Haryono Kav. 37 – 38, Jakarta 12770</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Call Center:</h4>
                  <p>1-500-669</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>SMS center:</h4>
                  <p>9119</p>
                </div>
              </div><!-- End Info Item -->

				<div class="text-center fs-5 mt-5">
					<a href="https://twitter.com/K3IKorlantas" class="twitter"><i class="bx bxl-twitter"></i></a>
					<a href="https://www.facebook.com/K3I-Korlantas-105187678596891" class="facebook"><i class="bx bxl-facebook"></i></a>
					<a href="https://www.instagram.com/k3ikorlantaspolri/" class="instagram"><i class="bx bxl-instagram"></i></a>
					<a href="https://www.youtube.com/channel/UCXr0rFTNDPLYkU0-PONdjLg" class="youtube"><i class="bx bxl-youtube"></i></a>

				</div>



			  

            </div>

          </div>

          <div class="col-lg-8">
		  <h3>Form layanan pengaduan</h4>
				<p style="text-align:justify ;">
					Dalam rangka mewujudkan Kamseltibcarlantas dan pelayanan yang Prima di bidang Lalu Lintas, Korlantas Polri menyediakan sistem untuk penanganan pengaduan publik secara online, berupa situs dan aplikasi k3i Korlantas Polri , yang merupakan Sistem Pengelolaan Pengaduan Pelayanan Publik. Pengaduan yang kami layani adalah yang berhubungan dengan permasalahan Lalu Lintas antara lain:
				</p>
				<ol>
					<li>Informasi bidang lalu Lintas</li>
					<li>Kecelakaan Lalu Lintas</li>
					<li>Kemacetan Lalu Lintas</li>
					<li>Rambu-rambu Lalu Lintas</li>
					<li>Calo, Pungli, Suap</li>
					<li>Balap Liar</li>
					<li>Dan informasi terkait lainnya.</li>
				</ol>
				<p style="text-align:justify ;">
					Selain layanan Pengaduan di <b><a href="<?= base_url()?>home">Web K3I</a></b> ini, Korlantas Polri juga menyiapkan layanan <b><a href="<?= base_url()?>Layanan_chatbot">Chatbot K3I</a></b>  dan <b><a href="Contact_center">Contact Center NTMC</a></b> di Play Store maupun App Store yang operasional 1 x 24 jam, Call Center 1500669, SMS Center 9119.
				</p>
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

