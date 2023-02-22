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

<!-- Container -->
<div class="container-fluid margin-top-30">
<div class="container-fluid">
<div class="container-fluid">
	<div class="text-center mb-5">
		<h4 style="color: #003A91;">KEDUDUKAN KORLANTAS POLRI</h4>
		<P>Korlantas Polri merupakan unsur pelaksana tugas pokok yang berada di bawah Kapolri:</P>
	</div>
	<div class="row">
		<div class="col-md-12 text-center">
			<img src="<?= url_api() ?>strukturorganisasi/<?= $data['data']['rows'][0]['foto'] ?>" alt="Gambar Struktur" width="1000px">

		</div>
		
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6">
				<h4 class="text-center m-2 p-2" style="background-color: #003A91; color:white; border-radius:10px;">Tugas Korlantas Polri</h4>
				<p class="text-break" style="text-align:justify ;">
					<ol style="text-align: justify;">
                        <?php $zxc = explode("+", ($data['data']['rows'][0]['tugas'])); ?>
                        <?php for ($i = 0; $i < count($zxc); $i++) { ?>
                            <li><?= $zxc[$i]; ?></li>
                        <?php } ?>
					</ol>
				</p>
				</div>
				<div class="col-md-6">
				<h4 class="text-center m-2 p-2" style="background-color: #003A91; color:white; border-radius:10px; ">Fungsi Korlantas Polri</h4>
				<p class="text-break" style="text-align:justify ;">
					<ol style="text-align: justify;">
                        <?php $vbn = explode("+", ($data['data']['rows'][0]['fungsi'])); ?>
                            <?php for ($j = 0; $j < count($vbn); $j++) { ?>
                                <li><?= $vbn[$j]; ?></li>
                        <?php } ?>
						
					</ol>
				</p>
				</div>
			</div>
			
		</div>
	</div>
	

	


    

</div>
</div>
</div>
<!-- Container / End -->


