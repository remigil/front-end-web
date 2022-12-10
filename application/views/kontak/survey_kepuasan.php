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

	<!-- ======= Contact Section ======= -->
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

            </div>

          </div>

          <div class="col-lg-8">
		  <h3>Form Survey Kepuasan Pengguna Layanan Web K3I</h4>
				<p>Sebagai bentuk peningkatan pelayanan kepada masyarakat, Kami ingin memberikan pelayanan yang terbaik pada Pusat Kendali Koordinasi Komunikasi Informasi K3I Korlantas Polri , Silahkan isi Form Survey berikut ini :</p>
				<form action="" class="form-survey" id="survey" method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-12">
							<div class="material-textfield">
								<label for="" class="labelmui">Bagaimana penampilan web K3I saat ini ?</label>
							</div>
							<div class="form-item mb-3">
								<select name="tampilan" id="tampilan" class="form-select" style="width:100% ; font-size:15px ;" required>
								<!-- <select name="" id=""  multiple required> -->
									<option selected>Pilih penilaian</option>
									<option value="1">Sangat Bagus</option>
									<option value="2">Bagus</option>
									<option value="3">Kurang Bagus</option>
									<option value="4">Jelek</option>
									<option value="5">Jelek Sekali</option>
								</select>
							</div>
						</div>
						<div class="col-md-12">
							<div class="material-textfield">
								<label for="" class="labelmui">Seberapa mudah anda mencari informasi yang ada pada web K3I?</label>
							</div>
							<div class="form-item mb-3">
								<select name="tampilan" id="tampilan" class="form-select" style="width:100% ; font-size:15px ;" required>
								<!-- <select name="" id=""  multiple required> -->
									<option selected>Pilih penilaian</option>
									<option value="1">Sangat Mudah</option>
									<option value="2">Mudah</option>
									<option value="3">Kurang Mudah</option>
									<option value="4">Tidak Mudah</option>
								</select>
							</div>
						</div>
						<div class="col-md-12">
							<div class="material-textfield">
								<label for="" class="labelmui">Apakah Web K3I menyajikan informasi yang terkini, akurat, informatif dan terpercaya ?</label>
							</div>
							<div class="form-item mb-3">
								<select name="tampilan" id="tampilan" class="form-select" style="width:100% ; font-size:15px ;" required>
								<!-- <select name="" id=""  multiple required> -->
									<option selected>Pilih penilaian</option>
									<option value="1">Sangat Puas</option>
									<option value="2">Puas</option>
									<option value="3">Kurang Puas</option>
									<option value="4">Tidak Puas</option>
								</select>
							</div>
						</div>
						<div class="col-md-12">
							<div class="material-textfield">
								<label for="" class="labelmui">Seberapa cepat waktu yang dibutuhkan untuk memperoleh informasi yang anda cari?</label>
							</div>
							<div class="form-item mb-3">
								<select name="tampilan" id="tampilan" class="form-select" style="width:100% ; font-size:15px ;" required>
								<!-- <select name="" id=""  multiple required> -->
									<option selected>Pilih penilaian</option>
									<option value="1">Sangat Cepat</option>
									<option value="2">Cepat</option>
									<option value="3">Kurang Cepat</option>
									<option value="4">Tidak Cepat</option>
								</select>
							</div>
						</div>
						<div class="col-md-12">
							<button type="submit" class="btn btn-primary waves-effect float-end" id="btn_edit" style="width: 25%; letter-spacing: 2px ; font-size:15px ;">KIRIM</button>
						</div>
					</div>
				</form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

