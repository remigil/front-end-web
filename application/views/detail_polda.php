<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="<?= base_url() ?>home">Home</a></li>
      <li style="text-transform: lowercase ;"><?= $breadcrumb ?></li>
    </ol>
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-1 text-center">
          <img src="<?= url_api() ?>polda/logo/<?= $polda['logo_polda'] ?>" alt="" width="100%">
        </div>
        <div class="col-md-7">
          <h3 style="text-transform:uppercase"><?= $headline ?></h3>
          <hr>
          <p>
            <?= $polda['address'] ?> <br>
            Telp: (021) 721814 <br>
          </p>
        </div>
        <div class="col-md-4">
          <p>Website:</p>
          <a href="<?= $polda['website'] ?>"><?= $polda['website'] ?></a>
          <p>Social Media:</p>
          <ul class="social-icons margin-top-20">
            <li><a class="facebook" href="https://web.facebook.com/<?= $polda['facebook'] ?>" target="_blank"><i class="icon-facebook"></i></a></li>
            <li><a class="twitter" href="https://twitter.com/<?= $polda['twitter'] ?>" target="_blank"><i class="icon-twitter"></i></a></li>
            <li><a class="instagram" href="https://www.instagram.com/<?= $polda['instagram'] ?>" target="_blank"><i class="icon-instagram"></i></a></li>
            <li><a class="youtube" href="<?= $polda['youtube'] ?>" target="_blank"><i class="icon-youtube"></i></a></li>
          </ul>
        </div>

      </div>

    </div>

  </div>
  <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d63458.9587091969!2d106.803352!3d-6.239342!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2388a7a048cd514e!2sBaharkam%20Polri!5e0!3m2!1sid!2sid!4v1665878384384!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="mt-5"></iframe> -->
</section><!-- End Breadcrumbs -->
<!-- ======= Featured Services Section ======= -->
<section id="featured-services" class="featured-services">

  <div class="container">
    <div class="section-title">
      <h2>Statistik <?= $headline ?></h2>
      <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
    </div>
    <div class="row gy-4">

      <div class="col-xl-3 col-md-6 p-2" data-aos="zoom-out">
        <div class="service-item position-relative" style="background-color: #ff555b; border-radius:10px; color:#3b3b3b">
          <div class="icon text-center">
            <iconify-icon icon="bxs:car-crash" width="50"></iconify-icon>
          </div>
          <h4 class="text-center"><a href="https://irsms.korlantas.polri.go.id/dashboard/irsms_icell/#" class="stretched-link fs-5" style="color:#3b3b3b">Kecelakaan Lalu Lintas</a></h4>
          <h1 id="lakalantas" class="text-center"><?= number_format($ditgakkum['data'][0]['lakalantas'], 0, '', '.');  ?></h1>
        </div>
      </div><!-- End Service Item -->
      <div class="col-xl-3 col-md-6 p-2" data-aos="zoom-out">
        <div class="service-item position-relative" style="background-color: #fffd51; border-radius:10px; color:#3b3b3b">
          <div class="icon text-center">
            <iconify-icon icon="ic:sharp-car-crash" width="50"></iconify-icon>
          </div>
          <h4 class="text-center"><a href="https://dakgargakkum.com/dashboard" class="stretched-link fs-5" style="color:#3b3b3b">Pelanggaran Lalu Lintas</a></h4>
          <h1 id="garlantas" class="text-center"><?= number_format($ditgakkum['data'][0]['garlantas'], 0, '', '.');  ?></h1>
        </div>
      </div><!-- End Service Item -->
      <div class="col-xl-3 col-md-6 p-2" data-aos="zoom-out">
        <div class="service-item position-relative" style="background-color: #40e48a; border-radius:10px; color:#3b3b3b">
          <div class="icon text-center">
            <iconify-icon icon="mdi:car-multiple" width="50"></iconify-icon>
            <iconify-icon icon="mdi:atv" width="50"></iconify-icon>
          </div>
          <h4 class="text-center"><a href="http://rc.korlantas.polri.go.id:8900/eri2017/laprekappolda.php" class="stretched-link fs-5" style="color:#3b3b3b">Kendaraan Bermotor</a></h4>
          <h1 id="motor" class="text-center"><?= number_format($ditregident['data'][0]['ranmor'], 0, '', '.');  ?></h1>
        </div>
      </div><!-- End Service Item -->
      <div class="col-xl-3 col-md-6 p-2" data-aos="zoom-out">
        <div class="service-item position-relative" style="background-color: #5a8cff; border-radius:10px; color:#3b3b3b">
          <div class="icon text-center">
            <iconify-icon icon="mdi:card-account-details-outline" width="50"></iconify-icon>
          </div>
          <h4 class="text-center"><a href="https://k3i.korlantas.polri.go.id/laporan-produksi-sim/" class="stretched-link fs-5" style="color:#3b3b3b">SIM Nasional</a></h4>
          <h1 id="sim" class="text-center"><?= number_format($ditregident['data'][0]['sim'], 0, '', '.');  ?></h1>
        </div>
      </div><!-- End Service Item -->



    </div>

  </div>
</section><!-- End Featured Services Section -->



<!-- ======= Events Section ======= -->
<section id="events" class="events">
  <div class="container" data-aos="fade-up">


    <div class="section-title">
      <h2>Link Sosial Media</h2>
      <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
    </div>

    <!-- <h3>KORBINMAS BAHARKAM POLRI</h3> -->

    <div class="row margin-top-20">
      <div class="col-md-8 border-end shadows">
        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/8-avdziYWg8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="col-md-4">
        <div class="row" style="height: 450px;overflow-y: auto;scrollbar-width: thin;">
          <div class="col-md-12">
            <iframe width="100%" height="200" src="https://www.youtube.com/embed/'xAYCvUh4-ic'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="col-md-12">
            <iframe width="100%" height="200" src="https://www.youtube.com/embed/6gvKr0Vc2Pc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="col-md-12">
            <iframe width="100%" height="200" src="https://www.youtube.com/embed/glFV_qDSUWQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
    <hr class="mt-5 mb-5">




  </div>
</section><!-- End Events Section -->

<section>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <iframe id="twitter-widget-1" scrolling="no" allowtransparency="true" allowfullscreen="true" class="" style="border: 1px solid rgba(0, 0, 0, 0.09);border-radius: 15px;position: static; visibility: visible; width: 100%; height: 700px; display: block; flex-grow: 1;" title="Twitter Timeline" src="https://syndication.twitter.com/srv/timeline-profile/screen-name/<?= $polda['twitter'] ?>?dnt=false&amp;embedId=twitter-widget-1&amp;frame=false&amp;hideBorder=false&amp;hideFooter=false&amp;hideHeader=false&amp;hideScrollBar=false&amp;lang=id&amp;maxHeight=1000px&amp;origin=https%3A%2F%2Fk3i.korlantas.polri.go.id%2F&amp;sessionId=0311759d0e3ab0003a26bc5fd6f7aa2b8d9d553c&amp;showHeader=true&amp;showReplies=false&amp;siteScreenName=K3IKorlantas&amp;transparent=false&amp;widgetsVersion=1bfeb5c3714e8%3A1661975971032" frameborder="0"></iframe>

      </div>
      <!-- <div class="col-md-4">
			<iframe id="twitter-widget-1" scrolling="no" allowtransparency="true" allowfullscreen="true" class="" style="border: 1px solid rgba(0, 0, 0, 0.09);border-radius: 15px;position: static; visibility: visible; width: 100%; height: 700px; display: block; flex-grow: 1;" title="Twitter Timeline" src="https://syndication.twitter.com/srv/timeline-profile/screen-name/korpolairud?dnt=false&amp;embedId=twitter-widget-1&amp;frame=false&amp;hideBorder=false&amp;hideFooter=false&amp;hideHeader=false&amp;hideScrollBar=false&amp;lang=id&amp;maxHeight=1000px&amp;origin=https%3A%2F%2Fk3i.korlantas.polri.go.id%2F&amp;sessionId=0311759d0e3ab0003a26bc5fd6f7aa2b8d9d553c&amp;showHeader=true&amp;showReplies=false&amp;siteScreenName=K3IKorlantas&amp;transparent=false&amp;widgetsVersion=1bfeb5c3714e8%3A1661975971032" frameborder="0"></iframe>
				
		</div> -->
      <div class="col-md-4">
        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F<?= $polda['facebook'] ?>&tabs=timeline&width=500&height=840&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=392649888900623" width=100% height=700px style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
      </div>
    </div>
  </div>
</section>

<script>
  let app_url = '<%-app_url%>'
  let path = '<%-path%>'

  $(document).ready(function() {
    $.ajax({
      type: "POST",
      url: "<?php echo base_url(); ?>ditlantas_polda/getPolda",
      dataType: "JSON",
      success: function(result) {

        let ressData = result;
        // console.log(result)
        $("#overlay").fadeOut(300);

        $('#lakalantas').html(`${ressData[i].lakalantas}`);
        $('#garlantas').html(`${ressData[i].garlantas}`);
        $('#motor').html(`${ressData[i].sepeda_motor}`);
        $('#sim').html(`${ressData[i].turjagwali}`);
      }
    })
  })
</script>