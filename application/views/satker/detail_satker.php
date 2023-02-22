<?php 
$asd = explode("|", $data['link_playlist']);
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
					<img src="<?= base_url()?>assets/korlantas-hd.png" alt="" width="100%">
				</div>
				<div class="col-md-7">
					<h3><?= $headline?></h3>
					<hr>
					<p>	
						Informasi Lalu Lintas Indonesia on Korlantas Polri, Jl. MT Haryono Kav. 37-38 <br>
						Call Center : 1-500-669 || SMS center : 9119<br>
						Email: <a href="mailto:<?= $data['email_satker']?>"><?= $data['email_satker']?></a> 
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

    <?php if($layanan == null){?>

    <?php }else{?>
<!-- ======= Featured Services Section ======= -->
<section id="featured-services" class="featured-services">
			
      <div class="container">
        <div class="section-title">
            <h2>Layanan Aplikasi <?= $breadcrumb?></h2>
            <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="row gy-4">
            <?php
            foreach ($layanan as $data): ?>
            <div class="col-xl-3 col-md-6 p-2" data-aos="zoom-out" >
                <div class="service-item position-relative" style="background-color: #E0E7FF; border-radius:10px;">
                <div class="service-item-upper">
                <div class="icon text-center"><img src="<?= url_api() ?><?= 'fungsisatker/logo/' . $data['logo_layanan'] ?>" alt=""  width="70px" height="70px"></div>
                <h4 class="text-center"><a href="https://irsms.korlantas.polri.go.id/dashboard/irsms_icell/#" class="stretched-link fs-5"><?= $data['name_layanan']?></a></h4>
                <p class="text-center mb-5"><?= $data['description']?></p>
                </div>
                
                </div>
            </div><!-- End Service Item -->
            <?php endforeach;?>
        </div>

      </div>
    </section><!-- End Featured Services Section -->
    <?php }?>

	

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
          <h2>Dokumen Kegiatan Ditgakkum Korlantas Polri</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <?php foreach($dokumentasi as $doc):?>
                <div class="swiper-slide">
                    <a class="glightbox" data-gallery="images-gallery" href="<?= url_api() ?><?= 'fungsisatker/dokumen/' . $doc['file'] ?>"><img src="<?= url_api() ?><?= 'fungsisatker/dokumen/' . $doc['file'] ?>" class="img-fluid" alt="" width="100%"></a>
                    <p><?= $doc['description']?></p>
                </div>
            <?php endforeach;?>
            
            
            
          <!-- <div class="swiper-pagination"></div> -->
        </div>

      </div>
    </section><!-- End Gallery Section -->

  <script>
    $(document).ready(function() {
      $('#category1').DataTable();
    });
  </script>
