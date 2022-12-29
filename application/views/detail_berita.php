<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="<?= base_url()?>">Home</a></li>
          <li><a href="<?= base_url()?>berita_front">Berita</a></li>
          <li><a href="<?= base_url()?>berita_front">Detail Berita</a></li>
        </ol>
        <!-- <h2>Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</h2> -->

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

              <div class="entry-img">
                <img src="<?= url_api() ?>news/<?= $getDetail['picture'] ?>" alt="" class="img-fluid" width="100%">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html"><?= $getDetail['title']?></a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">Korlantas Polri</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01"><?= $getDetail['date']?></time></a></li>
                  <!-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li> -->
                </ul>
              </div>

              <div class="entry-content">
                <p style="text-align: justify;">
                  <?= $getDetail['content']?>
                </p>

                

              </div>

              

            </article><!-- End blog entry -->

            <div class="blog-author d-flex align-items-center">
              <img src="<?= base_url()?>assets/korlantas-hd.png" class="rounded-circle float-left" alt="">
              <div>
                <h4>Korlantas Polri</h4>
                <div class="social-links">
                  <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                  <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                  <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                </div>
                <p>
				Korps Lalu Lintas Kepolisian Negara Republik Indonesia
				<br> © 2022 Pusat Kendali, Koordinasi, Komunikasi, dan Informasi Korlantas Polri
                </p>
              </div>
            </div><!-- End blog author bio -->

            

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

              

              <h3 class="sidebar-title">Recent Posts</h3>
              <div class="sidebar-item recent-posts">
			  <?php 
						$i=0;
						foreach ( $semuaberita as $data) : 
							if (++$i == 4) break;?>
                <div class="post-item clearfix">
                  <img src="<?= url_api() ?>news/<?= $data['picture'] ?>" alt="">
                  <h4><a href="<?=$data['id']; ?>"><?=$data['title']; ?></a></h4>
                  <time datetime="2020-01-01"><?= format_indoTglWkt($data['updated_at']); ?></time>
                </div>

				<?php endforeach; ?>

                

              </div><!-- End sidebar recent posts-->

              

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Single Section -->

  </main><!-- End #main -->
