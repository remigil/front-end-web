<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <ol>
            <li><a href="<?= base_url() ?>home">Home</a></li>
            <li><?= $breadcrumb ?></li>
        </ol>
        <h2><?= $headline ?></h2>

    </div>
</section><!-- End Breadcrumbs -->


<!-- Content
================================================== -->

<!-- Container -->
<div class="container-fluid margin-top-30">
    <div class="container-fluid">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="text-center mb-5">
                        <h4 class="mb-5" style="color: #003A91;">Visi & Misi Korlantas Polri</h4>
                        <!-- <img src="<?= base_url() ?>assets/fe/presisi_2.jpg" alt=""> -->
                        
                                <img src="<?= url_api() ?>visimisi/<?= $data['data']['rows'][0]['picture'] ?>" alt="Gambar Banner" width="1100px">

                        
                        <p class="mt-5" style="color: #003A91;"><b>Polantas siap mendukung transformasi menuju Polri yang PRESISI ( Prediktif – Responsibilitas – Transparansi Berkeadilan )</b></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4 class="text-center mt-2 p-2" style="background-color: #003A91; color:white; border-radius:10px; ">Visi Korlantas Polri</h4>
                    <p class="text-break" style="text-align:justify ;">
                        <?= $data['data']['rows'][0]['visi']; ?></p>
                </div>
                <div class="col-md-6">
                    <h4 class="text-center mt-2 p-2" style="background-color: #003A91; color:white; border-radius:10px; ">Misi Korlantas Polri</h4>
                    <p class="text-break">
                    <ol style="text-align:justify ;">
                        <?php $zxc = explode("+", ($data['data']['rows'][0]['misi'])); ?>
                        <?php for ($i = 0; $i < count($zxc); $i++) { ?>
                            <li><?= $zxc[$i]; ?></li>
                        <?php } ?>
                    </ol>
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Container / End -->