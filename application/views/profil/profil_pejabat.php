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

<!-- Content
================================================== -->

<section id="about" class="about">
      <div class="container" data-aos="fade-up">

            <!-- Tabs -->
            <ul class="nav nav-pills mb-3">
              <li><a class="nav-link active" data-bs-toggle="pill" href="#tab1">Kakorlantas</a></li>
              <li><a class="nav-link" data-bs-toggle="pill" href="#tab2">Direktur</a></li>
              <li><a class="nav-link" data-bs-toggle="pill" href="#tab3">Kabag</a></li>
              <li><a class="nav-link" data-bs-toggle="pill" href="#tab4">Kasubdit Ditgakkum</a></li>
              <li><a class="nav-link" data-bs-toggle="pill" href="#tab5">Kasubdit Ditkamsel</a></li>
              <li><a class="nav-link" data-bs-toggle="pill" href="#tab6">Kasubdit Ditregident</a></li>
              
            </ul><!-- End Tabs -->

            <!-- Tab Content -->
            <div class="tab-content">

              <div class="tab-pane fade show active" id="tab1">
			  	<div class="row">
					<div class="col-md-2">
						<h4 class="text-center"><b>KAKORLANTAS POLRI</b></h4>
						<div class="d-flex justify-content-center">
							<img src="<?php echo url_api();?>profilepejabat/<?php echo $kakor['foto_pejabat'];?>" alt="" style="border-radius:10px ;" width="150rem" class="d-flex justify-content-center">
						</div>
					</div>
					<div class="col-md-10">
						<div class="info-pejabat">
							<h4>Nama</h4>
							<p><?= $kakor['name_pejabat'];?></p>
							<hr>
						</div>
						<div class="info-pejabat">
							<h4>Tempat, Tanggal Lahir</h4>
							<p><?= $kakor['tempat_lahir']?>,<?= $kakor['date_birth']?></p>
							<hr>
						</div>
						<div class="info-pejabat">
							<h4>Pendidikan Kepolisian</h4>
							<?= $kakor['pendidikan_kepolisian']?>
							<hr>
						</div>
						<div class="info-pejabat">
							<h4>Riwayat Jabatan</h4>
							<div class="row">
								<div class="col-md-12">
								<?= $kakor['riwayat_jabatan']?>
								</div>
								
							</div>
							<hr>
						</div>
						<div class="info-pejabat">
							<h4>Pendidikan Pengembangan &amp; Pelatihan</h4>
							<?= $kakor['pengembangan']?>
							<hr>
						</div>
						<div class="info-pejabat">
							<h4>Tanda Kehormatan</h4>
							<?= $kakor['tanda_kehormatan']?>
							<hr>
						</div>
					</div>
				</div>
              </div><!-- End Tab 1 Content -->

              <div class="tab-pane fade show" id="tab2">
			  <div class="row">

			  <?php
			  foreach($direktur as $dir):

			  ?>

<div class="col-md-4">
		<h4 class="text-center"><b><?= $dir['jenispejabats'][0]['jenis_pejabat']?></b></h4>
		<div class="d-flex justify-content-center">
			<img src="<?php echo url_api();?>profilepejabat/<?php echo $dir['foto_pejabat'];?>" alt="foto pejabat" style="border-radius:10px ;" width="150rem">
		</div>
		<div class="info-pejabat">
			<h4>Nama</h4>
			<p><?= $dir['name_pejabat']?></p>
			<hr>
		</div>
		<div class="info-pejabat">
			<h4>Tempat, Tanggal Lahir</h4>
			<p><?= $dir['tempat_lahir']?>, <?= $dir['date_birth']?></p>
			<hr>
		</div>
		<div class="info-pejabat">
			<h4>Agama</h4>
			<p><?= $dir['agama']?></p>
			<hr>
		</div>
		<div class="info-pejabat">
			<h4>Pendidikan Kepolisian</h4>
			<?= $dir['pendidikan_kepolisian']?>
			<hr>
		</div>
		<div class="info-pejabat">
			<h4>Riwayat Jabatan</h4>
					<?= $dir['riwayat_jabatan']?>
			<hr>
		</div>
		<div class="info-pejabat">
			<h4>Pendidikan Pengembangan &amp; Pelatihan</h4>
			<?= $dir['pengembangan']?>
			<hr>
		</div>
		<div class="info-pejabat">
			<h4>Tanda Kehormatan</h4>
			<?= $dir['tanda_kehormatan']?>
			<hr>
		</div>
	</div>

			  <?php endforeach;?>

		</div>
              </div><!-- End Tab 2 Content -->

              <div class="tab-pane fade show" id="tab3">
			  <div class="row">
			  <?php
			  foreach($kabag as $dir):

			  ?>

<div class="col-md-4">
		<h4 class="text-center"><b><?= $dir['jenispejabats'][0]['jenis_pejabat']?></b></h4>
		<div class="d-flex justify-content-center">
			<img src="<?php echo url_api();?>profilepejabat/<?php echo $dir['foto_pejabat'];?>" alt="foto pejabat" style="border-radius:10px ;" width="150rem">
		</div>
		<div class="info-pejabat">
			<h4>Nama</h4>
			<p><?= $dir['name_pejabat']?></p>
			<hr>
		</div>
		<div class="info-pejabat">
			<h4>Tempat, Tanggal Lahir</h4>
			<p><?= $dir['tempat_lahir']?>, <?= $dir['date_birth']?></p>
			<hr>
		</div>
		<div class="info-pejabat">
			<h4>Agama</h4>
			<p><?= $dir['agama']?></p>
			<hr>
		</div>
		<div class="info-pejabat">
			<h4>Pendidikan Kepolisian</h4>
			<?= $dir['pendidikan_kepolisian']?>
			<hr>
		</div>
		<div class="info-pejabat">
			<h4>Riwayat Jabatan</h4>
					<?= $dir['riwayat_jabatan']?>
			<hr>
		</div>
		<div class="info-pejabat">
			<h4>Pendidikan Pengembangan &amp; Pelatihan</h4>
			<?= $dir['pengembangan']?>
			<hr>
		</div>
		<div class="info-pejabat">
			<h4>Tanda Kehormatan</h4>
			<?= $dir['tanda_kehormatan']?>
			<hr>
		</div>
	</div>

			  <?php endforeach;?>


		</div>
              </div><!-- End Tab 3 Content -->

              <div class="tab-pane fade show" id="tab4">
			  <div class="row">

			  <?php
			  foreach($ditgakkum as $dir):

			  ?>

<div class="col-md-3">
		<h4 class="text-center"><b><?= $dir['jenispejabats'][0]['jenis_pejabat']?></b></h4>
		<div class="d-flex justify-content-center">
			<img src="<?php echo url_api();?>profilepejabat/<?php echo $dir['foto_pejabat'];?>" alt="foto pejabat" style="border-radius:10px ;" width="150rem">
		</div>
		<div class="info-pejabat">
			<h4>Nama</h4>
			<p><?= $dir['name_pejabat']?></p>
			<hr>
		</div>
		<div class="info-pejabat">
			<h4>Tempat, Tanggal Lahir</h4>
			<p><?= $dir['tempat_lahir']?>, <?= $dir['date_birth']?></p>
			<hr>
		</div>
		<div class="info-pejabat">
			<h4>Agama</h4>
			<p><?= $dir['agama']?></p>
			<hr>
		</div>
		<div class="info-pejabat">
			<h4>Pendidikan Kepolisian</h4>
			<?= $dir['pendidikan_kepolisian']?>
			<hr>
		</div>
		<div class="info-pejabat">
			<h4>Riwayat Jabatan</h4>
					<?= $dir['riwayat_jabatan']?>
			<hr>
		</div>
		<div class="info-pejabat">
			<h4>Pendidikan Pengembangan &amp; Pelatihan</h4>
			<?= $dir['pengembangan']?>
			<hr>
		</div>
		<div class="info-pejabat">
			<h4>Tanda Kehormatan</h4>
			<?= $dir['tanda_kehormatan']?>
			<hr>
		</div>
	</div>

			  <?php endforeach;?>
	
</div>
              </div><!-- End Tab 4 Content -->

              <div class="tab-pane fade show" id="tab5">
			  <div class="row">

			  <?php
			  foreach($ditkamsel as $dir):

			  ?>

<div class="col-md-3">
		<h4 class="text-center"><b><?= $dir['jenispejabats'][0]['jenis_pejabat']?></b></h4>
		<div class="d-flex justify-content-center">
			<img src="<?php echo url_api();?>profilepejabat/<?php echo $dir['foto_pejabat'];?>" alt="foto pejabat" style="border-radius:10px ;" width="150rem">
		</div>
		<div class="info-pejabat">
			<h4>Nama</h4>
			<p><?= $dir['name_pejabat']?></p>
			<hr>
		</div>
		<div class="info-pejabat">
			<h4>Tempat, Tanggal Lahir</h4>
			<p><?= $dir['tempat_lahir']?>, <?= $dir['date_birth']?></p>
			<hr>
		</div>
		<div class="info-pejabat">
			<h4>Agama</h4>
			<p><?= $dir['agama']?></p>
			<hr>
		</div>
		<div class="info-pejabat">
			<h4>Pendidikan Kepolisian</h4>
			<?= $dir['pendidikan_kepolisian']?>
			<hr>
		</div>
		<div class="info-pejabat">
			<h4>Riwayat Jabatan</h4>
					<?= $dir['riwayat_jabatan']?>
			<hr>
		</div>
		<div class="info-pejabat">
			<h4>Pendidikan Pengembangan &amp; Pelatihan</h4>
			<?= $dir['pengembangan']?>
			<hr>
		</div>
		<div class="info-pejabat">
			<h4>Tanda Kehormatan</h4>
			<?= $dir['tanda_kehormatan']?>
			<hr>
		</div>
	</div>

			  <?php endforeach;?>

</div>
              </div><!-- End Tab 5 Content -->

              <div class="tab-pane fade show" id="tab6">
			  <div class="row">

			  <?php
			  foreach($ditregident as $dir):

			  ?>

<div class="col-md-3">
		<h4 class="text-center"><b><?= $dir['jenispejabats'][0]['jenis_pejabat']?></b></h4>
		<div class="d-flex justify-content-center">
			<img src="<?php echo url_api();?>profilepejabat/<?php echo $dir['foto_pejabat'];?>" alt="foto pejabat" style="border-radius:10px ;" width="150rem">
		</div>
		<div class="info-pejabat">
			<h4>Nama</h4>
			<p><?= $dir['name_pejabat']?></p>
			<hr>
		</div>
		<div class="info-pejabat">
			<h4>Tempat, Tanggal Lahir</h4>
			<p><?= $dir['tempat_lahir']?>, <?= $dir['date_birth']?></p>
			<hr>
		</div>
		<div class="info-pejabat">
			<h4>Agama</h4>
			<p><?= $dir['agama']?></p>
			<hr>
		</div>
		<div class="info-pejabat">
			<h4>Pendidikan Kepolisian</h4>
			<?= $dir['pendidikan_kepolisian']?>
			<hr>
		</div>
		<div class="info-pejabat">
			<h4>Riwayat Jabatan</h4>
					<?= $dir['riwayat_jabatan']?>
			<hr>
		</div>
		<div class="info-pejabat">
			<h4>Pendidikan Pengembangan &amp; Pelatihan</h4>
			<?= $dir['pengembangan']?>
			<hr>
		</div>
		<div class="info-pejabat">
			<h4>Tanda Kehormatan</h4>
			<?= $dir['tanda_kehormatan']?>
			<hr>
		</div>
	</div>

			  <?php endforeach;?>


</div>
              </div><!-- End Tab 6 Content -->

            </div>


      </div>
    </section><!-- End About Section -->
  

