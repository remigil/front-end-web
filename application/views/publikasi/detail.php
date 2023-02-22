<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="<?= base_url() ?>home">Home</a></li>
      <li><?= $title ?></li>
    </ol>
    <h2 class="text-uppercase"><?= $title ?></h2>

  </div>
</section><!-- End Breadcrumbs -->


<!-- ======= Clients Section ======= -->
<section id="clients" class="clients">
  <div class="container">
    
    <div class="section-title">
          <p class="text-center"><?= $data['description_publikasi']; ?></p><br>
          <h2>Vidio <?= $title ?></h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="clients-slider1 swiper">
          <div class="swiper-wrapper align-items-center text-center">
						
          <?php foreach ($linkpublikasi as $data) : ?>
              <div class="swiper-slide">
                <iframe width="100%" height="300px" src="<?= $data['link_youtube_publikasi']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            <?php endforeach ?>
            
           

            

          </div>
          <div class="swiper-pagination mt-5"></div>
          <div class="swiper-button-next p-5" style="background-color: rgba(51, 51, 51, 0.5); border-radius:50px; color:#fff; top:50px"></div>
          <div class="swiper-button-prev p-5" style="background-color: rgba(51, 51, 51, 0.5); border-radius:50px; color:#fff; top:50px"></div>

        </div>

      </div>
    </section><!-- End Clients Section -->
    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery section-bg">
      <div class="container" data-aos="fade-up">

	  <div class="section-title">
          <h2>Dokumen Kegiatan Ditgakkum Korlantas Polri</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
          <?php foreach ($dokpublikasi as $data) :  ?>
                <div class="swiper-slide">
                    <a class="glightbox" data-gallery="images-gallery" href="<?= url_api(); ?>publikasi/<?= $data['foto']; ?>"><img src="<?= url_api(); ?>publikasi/<?= $data['foto']; ?>" class="img-fluid" alt="" width="100%"></a>
                    <p><?= $data['description']; ?></p>
                </div>
            <?php endforeach;?>
            
            
            
          <!-- <div class="swiper-pagination"></div> -->
        </div>

      </div>
    </section><!-- End Gallery Section -->

