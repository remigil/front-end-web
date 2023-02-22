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

	<section id="about" class="about">
      <div class="container" data-aos="fade-up">

            <!-- Tabs -->
            <ul class="nav nav-pills mb-3">
              <li><a class="nav-link active" data-bs-toggle="pill" href="#tab1">Korlantas Polri</a></li>
              <li><a class="nav-link" data-bs-toggle="pill" href="#tab2">Ditkamsel</a></li>
              <li><a class="nav-link" data-bs-toggle="pill" href="#tab3">Ditgakkum</a></li>
              <li><a class="nav-link" data-bs-toggle="pill" href="#tab4">Ditregident</a></li>
              <li><a class="nav-link" data-bs-toggle="pill" href="#tab5">Bagops</a></li>
              <li><a class="nav-link" data-bs-toggle="pill" href="#tab6">Bagrenmin</a></li>
              <li><a class="nav-link" data-bs-toggle="pill" href="#tab7">Bagtik</a></li>
              
            </ul><!-- End Tabs -->

            <!-- Tab Content -->
            <div class="tab-content">

              <div class="tab-pane fade show active" id="tab1">
			  <div class="row">
				<div class="col-md-7">
					<div class="row">
						<div class="col-md-12">
							<h4 class="text-center mt-2 p-2" style="background-color: #003A91; color:white; border-radius:10px; height:30px;"><?= $korlantas['name_satker']?> BERTUGAS</h4>
							
							<?= $korlantas['tugas_satker']?>
						</div>
						<div class="col-md-12">
							<h4 class="text-center mt-2 p-2" style="background-color: #003A91; color:white; border-radius:10px; height:30px;"><?= $korlantas['name_satker']?> MENYELENGGARAKAN FUNGSI</h4>
							
							<?= $korlantas['fungsi_satker']?>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="row">
						<div class="col-md-12">
							<iframe width="100%" height="350" src="<?= $korlantas['youtube_satker']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						<div class="col-md-12">
							<img src="<?php echo url_api();?>tugasfungsi/<?php echo $korlantas['picture_satker'];?>" alt="" height="350" width="100%">
						</div>
					</div>
					

				</div>
				
			</div>
              </div><!-- End Tab 1 Content -->
			  
              <div class="tab-pane fade show" id="tab2">
			  <div class="row">
				<div class="col-md-7">
					<div class="row">
						<div class="col-md-12">
							<h4 class="text-center mt-2 p-2" style="background-color: #003A91; color:white; border-radius:10px; height:30px;"><?= $ditkamsel['name_satker']?> BERTUGAS</h4>
							
							<?= $ditkamsel['tugas_satker']?>
						</div>
						<div class="col-md-12">
							<h4 class="text-center mt-2 p-2" style="background-color: #003A91; color:white; border-radius:10px; height:30px;"><?= $ditkamsel['name_satker']?> MENYELENGGARAKAN FUNGSI</h4>
							
							<?= $ditkamsel['fungsi_satker']?>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="row">
						<div class="col-md-12">
							<iframe width="100%" height="350" src="<?= $ditkamsel['youtube_satker']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						<div class="col-md-12">
							<img src="<?php echo url_api();?>tugasfungsi/<?php echo $ditkamsel['picture_satker'];?>" alt="" height="350" width="100%">
						</div>
					</div>
					

				</div>
				
			</div>
              </div><!-- End Tab 2 Content -->

              <div class="tab-pane fade show" id="tab3">
			  <div class="row">
				<div class="col-md-7">
					<div class="row">
						<div class="col-md-12">
							<h4 class="text-center mt-2 p-2" style="background-color: #003A91; color:white; border-radius:10px; height:30px;"><?= $ditgakkum['name_satker']?> BERTUGAS</h4>
							
							<?= $ditgakkum['tugas_satker']?>
						</div>
						<div class="col-md-12">
							<h4 class="text-center mt-2 p-2" style="background-color: #003A91; color:white; border-radius:10px; height:30px;"><?= $ditgakkum['name_satker']?> MENYELENGGARAKAN FUNGSI</h4>
							
							<?= $ditgakkum['fungsi_satker']?>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="row">
						<div class="col-md-12">
							<iframe width="100%" height="350" src="<?= $ditgakkum['youtube_satker']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						<div class="col-md-12">
							<img src="<?php echo url_api();?>tugasfungsi/<?php echo $ditgakkum['picture_satker'];?>" alt="" height="350" width="100%">
						</div>
					</div>
					

				</div>
				
			</div>
              </div><!-- End Tab 3 Content -->

              <div class="tab-pane fade show" id="tab4">
			  <div class="row">
				<div class="col-md-7">
					<div class="row">
						<div class="col-md-12">
							<h4 class="text-center mt-2 p-2" style="background-color: #003A91; color:white; border-radius:10px; height:30px;"><?= $ditregident['name_satker']?> BERTUGAS</h4>
							
							<?= $ditregident['tugas_satker']?>
						</div>
						<div class="col-md-12">
							<h4 class="text-center mt-2 p-2" style="background-color: #003A91; color:white; border-radius:10px; height:30px;"><?= $ditregident['name_satker']?> MENYELENGGARAKAN FUNGSI</h4>
							
							<?= $ditregident['fungsi_satker']?>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="row">
						<div class="col-md-12">
							<iframe width="100%" height="350" src="<?= $ditregident['youtube_satker']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						<div class="col-md-12">
							<img src="<?php echo url_api();?>tugasfungsi/<?php echo $ditregident['picture_satker'];?>" alt="" height="350" width="100%">
						</div>
					</div>
					

				</div>
				
			</div>
              </div><!-- End Tab 4 Content -->

              <div class="tab-pane fade show" id="tab5">
			  <div class="row">
				<div class="col-md-7">
					<div class="row">
						<div class="col-md-12">
							<h4 class="text-center mt-2 p-2" style="background-color: #003A91; color:white; border-radius:10px; height:30px;"><?= $bagops['name_satker']?> BERTUGAS</h4>
							
							<?= $bagops['tugas_satker']?>
						</div>
						<div class="col-md-12">
							<h4 class="text-center mt-2 p-2" style="background-color: #003A91; color:white; border-radius:10px; height:30px;"><?= $bagops['name_satker']?> MENYELENGGARAKAN FUNGSI</h4>
							
							<?= $bagops['fungsi_satker']?>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="row">
						<div class="col-md-12">
							<iframe width="100%" height="350" src="<?= $bagops['youtube_satker']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						<div class="col-md-12">
							<img src="<?php echo url_api();?>tugasfungsi/<?php echo $bagops['picture_satker'];?>" alt="" height="350" width="100%">
						</div>
					</div>
					

				</div>
				
			</div>
              </div><!-- End Tab 5 Content -->

              <div class="tab-pane fade show" id="tab6">
			  <div class="row">
				<div class="col-md-7">
					<div class="row">
						<div class="col-md-12">
							<h4 class="text-center mt-2 p-2" style="background-color: #003A91; color:white; border-radius:10px; height:30px;"><?= $bagrenmin['name_satker']?> BERTUGAS</h4>
							
							<?= $bagrenmin['tugas_satker']?>
						</div>
						<div class="col-md-12">
							<h4 class="text-center mt-2 p-2" style="background-color: #003A91; color:white; border-radius:10px; height:30px;"><?= $bagrenmin['name_satker']?> MENYELENGGARAKAN FUNGSI</h4>
							
							<?= $bagrenmin['fungsi_satker']?>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="row">
						<div class="col-md-12">
							<iframe width="100%" height="350" src="<?= $bagrenmin['youtube_satker']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						<div class="col-md-12">
							<img src="<?php echo url_api();?>tugasfungsi/<?php echo $bagrenmin['picture_satker'];?>" alt="" height="350" width="100%">
						</div>
					</div>
					

				</div>
				
			</div>
              </div><!-- End Tab 6 Content -->

              <div class="tab-pane fade show" id="tab7">
			  <div class="row">
				<div class="col-md-7">
					<div class="row">
						<div class="col-md-12">
							<h4 class="text-center mt-2 p-2" style="background-color: #003A91; color:white; border-radius:10px; height:30px;"><?= $bagtik['name_satker']?> BERTUGAS</h4>
							
							<?= $bagtik['tugas_satker']?>
						</div>
						<div class="col-md-12">
							<h4 class="text-center mt-2 p-2" style="background-color: #003A91; color:white; border-radius:10px; height:30px;"><?= $bagtik['name_satker']?> MENYELENGGARAKAN FUNGSI</h4>
							
							<?= $bagtik['fungsi_satker']?>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="row">
						<div class="col-md-12">
							<iframe width="100%" height="350" src="<?= $bagtik['youtube_satker']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						<div class="col-md-12">
							<img src="<?php echo url_api();?>tugasfungsi/<?php echo $bagtik['picture_satker'];?>" alt="" height="350" width="100%">
						</div>
					</div>
					

				</div>
				
			</div>
              </div><!-- End Tab 7 Content -->

            </div>


      </div>
    </section><!-- End About Section -->
