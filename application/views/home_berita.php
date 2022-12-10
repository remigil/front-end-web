<main id="main">

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

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-9 entries">

		  <?php 
						$i=0;
						foreach ( $databerita as $data) : 
							// if (++$i == 4) break;?>

            <article class="entry">

              <div class="entry-img">
                <img src="<?= url_api() ?>news/<?= $data['picture'] ?>" alt="" class="img-fluid" width="100%">
              </div>

              <h2 class="entry-title">
                <a href="berita_front/detailberita/<?= $data['id']?>"><?=$data['title']; ?></a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
				<?= substr($data['content'], 0, 250) . '. . .' ?>
                </p>
                <div class="read-more">
                  <a href="berita_front/detailberita/<?= $data['id']?>">Baca Selengkapnya</a>
                </div>
              </div>

            </article><!-- End blog entry -->

			<?php endforeach; ?>

		  </div>

            

          <div class="col-lg-3">

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
						foreach ( $databerita as $data) : 
							if (++$i == 4) break;?>
                <div class="post-item clearfix">
                  <img src="<?= url_api() ?>news/<?= $data['picture'] ?>" alt="">
                  <h4><a href="berita_front/detailberita<?=$data['id']; ?>"><?=$data['title']; ?></a></h4>
                  <time datetime="2020-01-01"><?=$data['updated_at']; ?></time>
                </div>

				<?php endforeach; ?>

                

              </div><!-- End sidebar recent posts-->

              

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->
