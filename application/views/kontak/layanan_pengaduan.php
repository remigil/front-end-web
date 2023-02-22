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
              <h3 class="mb-4">Pusat Kendali, Koordinasi, Komunikasi dan Informasi Korlantas Polri</h3>
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

				<div class="text-center fs-5 mt-5 mx-auto">
          <h6 class="fw-bold">Media Sosial K3I</h6>
          <ul class="social-icons d-flex justify-content-center">
            <li><a href="https://twitter.com/K3IKorlantas" class="twitter"><i class="bx bxl-twitter"></i></a></li>
            <li><a href="https://www.facebook.com/K3I-Korlantas-105187678596891" class="facebook"><i class="bx bxl-facebook"></i></a></li>
            <li><a href="https://www.instagram.com/k3ikorlantaspolri/" class="instagram"><i class="bx bxl-instagram"></i></a></li>
            <li><a href="https://www.youtube.com/channel/UCXr0rFTNDPLYkU0-PONdjLg" class="youtube"><i class="bx bxl-youtube"></i></a></li>
          </ul>
          <h6 class="fw-bold mt-4">Media Sosial NTMC</h6>
          <ul class="social-icons d-flex justify-content-center">
            <li><a href="https://twitter.com/NTMC_Info" class="twitter"><i class="bx bxl-twitter"></i></a></li>
            <li><a href="https://id-id.facebook.com/NTMCPOLRI/" class="facebook"><i class="bx bxl-facebook"></i></a></li>
            <li><a href="https://www.instagram.com/ntmc_polri/?hl=id" class="instagram"><i class="bx bxl-instagram"></i></a></li>
            <li><a href="https://www.youtube.com/c/NTMCChannel" class="youtube"><i class="bx bxl-youtube"></i></a></li>
          </ul>
					
					
					
					

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
					Selain layanan Pengaduan di <b><a href="<?= base_url()?>home">Web K3I</a></b> ini, Korlantas Polri juga menyiapkan layanan <b><a href="https://ccntmc.1500669.com/">Contact Center NTMC</a></b> di Play Store maupun App Store yang operasional 1 x 24 jam, Call Center 1500669, SMS Center 9119.
				</p>
            <form action="" method="post" class="form " enctype="multipart/form-data">
            <input type="hidden" name="<?= $csrf_name; ?>" value="<?= $csrf_token; ?>" style="display: none">
              <div class="row">
                <div class="col-md-4 form-group">
                  <input type="text" name="nama" class="form-control"  placeholder="Masukan Nama" required>
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email"  placeholder="Masukan Email" required>
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="nohp"  placeholder="Masukan Nomor Handphone" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <select name="subjek" id="subjek" class="form-select" style="width:100% ; font-size:15px ;" required>
                  <!-- <select name="" id=""  multiple required> -->
                  <option selected="0">Pilih Subjek</option>
                  <option value="1">Informasi bidang lalu Lintas</option>
                  <option value="2">Kecelakaan Lalu Lintas</option>
                  <option value="3">Kemacetan Lalu Lintas</option>
                  <option value="4">Rambu-rambu Lalu Lintas</option>
                  <option value="5">Calo, Pungli, Suap</option>
                  <option value="6">Balap Liar</option>
                  <option value="7">Informasi terkait lainnya</option>
                </select>
                <!-- <input type="text" class="form-control" name="subjek"  placeholder="Subjek" required> -->
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="deskripsi" placeholder="Deskripsi" required></textarea>
              </div>
              
              <div class="text-center"><button type="submit" class="btn btn-primary mt-4 mb-2" style="width: 100%;" onclick="submit()">Kirim Pengaduan</button></div>
              <div class="text-center">--- Atau ---</div>
              <div class="text-center"><a href="https://ccntmc.1500669.com/" class="btn btn-outline-primary mt-2" style="width: 100%;">lanjutkan pengaduan ke contact center NTMC</a></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

<script>
  $(document).ready(function() {
    $(".form").submit(function(e) {
      $("#overlay").fadeIn(300);
      e.preventDefault();
      var formData = new FormData($('.form')[0]);
      $.ajax({
          url: "kirim_pengaduan",
          method: "POST",
          data: formData,
          dataType: 'JSON',
          contentType: false,
          processData: false,
          success: function(data) {
              $("#overlay").fadeOut(300);
              if (data['status'] == true) {
                  Swal.fire(
                      `${data['message']}`,
                      '',
                      'success'
                  )
              } else {
                  Swal.fire(
                      `${data['message']}`,
                      '',
                      'error'
                  ).then(function() {});
              }
          }
      });
    });
    
  })
  function submit(){
    reset()
  }
</script>