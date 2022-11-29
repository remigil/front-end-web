<div class="row">
    <div class="col-md-4 mb-1">
        <h3 style="text-transform: uppercase; color:#007DD8;"><a href="<?= base_url('dashboard') ?>" style="color:#007DD8 ;"><i class="fas fa-less-than"></i></a> <?= $title; ?> <?= $data['poldaid']['name_polda']; ?></h3>
    </div>
    <div class="col-md-3">
    </div>
</div>
<div class="row mt-5">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-3">
                <!-- <a href="<?= base_url('statistik_nasional/Lakalantas'); ?>"> -->
                <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                    <div class="card-body">
                        <div class="row justify-content-between align-items-center" style="height: 80px;">
                            <div class="col-md-2">
                                <i class='bx bxs-car-crash ms-n2' style="font-size: 50px; color: #464646;"></i>
                            </div>
                            <div class="col-md-10 float-end">
                                <span class="fs-4 float-end" style="color:#464646;">
                                    <span class="fw-bold ">Total LAKA </span>
                                    <span>
                                        <p class="float-end m-0 p-0" style="font-size: 14px;">Efektif data Rabu, 16 November 2022</p>
                                    </span>
                                </span>

                                <br>
                                <br>
                                <span class="fs-4 fw-bold float-end" style="color:#464646;" id="lakalantas"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </a> -->
            </div>
            <div class="col-md-3">
                <!-- <a href="<?= base_url('statistik_nasional/Garlantas'); ?>"> -->
                <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                    <div class="card-body">
                        <div class="row justify-content-between align-items-center" style="height: 80px;">
                            <div class="col-md-2">
                                <iconify-icon icon="fa6-solid:motorcycle" class="ms-n2" style="font-size: 40px; color: #464646;"></iconify-icon>
                            </div>
                            <div class="col-md-10 float-end">
                                <span class="fs-4 float-end" style="color:#464646;">
                                    <span class="fw-bold">Total GARLANTAS </span>
                                </span>
                                <br><br>
                                <span class="fs-4 fw-bold float-end" style="color:#464646;" id="garlantas"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </a> -->
            </div>
            <div class="col-md-3">
                <!-- <a href="<?= base_url('statistik_nasional/Turjagwali'); ?>"> -->
                <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                    <div class="card-body">
                        <div class="row justify-content-between align-items-center" style="height: 80px;">
                            <div class="col-md-2">
                                <iconify-icon icon="ic:round-car-crash" class="ms-n2" style="font-size: 50px; color: #464646;"></iconify-icon>
                            </div>
                            <div class="col-md-10 float-end">
                                <span class="fs-4 float-end" style="color:#464646;">
                                    <span class="fw-bold">Total Turjagwali</span>
                                </span>
                                <br><br>
                                <span class="fs-4 fw-bold float-end" style="color:#464646;" id="turjagwali"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </a> -->
            </div>
            <div class="col-md-3">
                <!-- <a href="<?= base_url('statistik_nasional/Walpjr'); ?>"> -->

                <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                    <div class="card-body">
                        <div class="row justify-content-between align-items-center" style="height: 80px;">
                            <div class="col-md-2">
                                <i class='bx bxs-car-crash ms-n2' style="font-size: 50px; color: #464646;"></i>
                            </div>
                            <div class="col-md-10 float-end">
                                <span class="fs-4 float-end" style="color:#464646;">
                                    <span class="fw-bold">Total WAL & PJR</span>
                                    <!-- <span class="fw-bold">Total WAL & PJR Hari ini</span> -->
                                </span>
                                <br>
                                <br>
                                <span class="fs-6 fw-bold float-end" style="color:#464646;" id="walpjr"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </a> -->
            </div>
        </div>
        <!-- <div class="row">
            
            <div class="col-md-3">
                 <a href="<?= base_url('statistik_nasional/Ranmor'); ?>">
                    <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2 align-self-center">
                                    <img src="<?= base_url() ?>assets/dashboard/icon-ranmor.svg" alt="ranmor" width="60px">
                                </div>
                                <div class="col-md-10 float-end">
                                    <span class="fs-4 float-end" style="color:#464646;">
                                        <span class="fw-bold">Total Kendaraan </span>Bermotor
                                    </span>
                                    <br><br>
                                    <span class="fs-6 fw-bold float-end" style="color:#464646;" id="motor"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>             </div>

        </div> -->

        <div class="row">
            <div class="col-md-3">
                <!-- <a href="<?= base_url('statistik_nasional/Sim'); ?>"> -->
                <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                    <div class="card-body">
                        <div class="row justify-content-between align-items-center" style="font-size: 40px;">
                            <div class=" col-md-2">
                                <iconify-icon icon="material-symbols:credit-card-outline" class="ms-n2" style="font-size: 40px; color: #464646;"></iconify-icon>
                            </div>
                            <div class="col-md-10 float-end">
                                <span class="fs-4 float-end" style="color:#464646;">
                                    <span class="fw-bold">Total SIM</span>
                                </span>
                                <br>
                                <span class="fs-6 fw-bold float-end" style="color:#464646;" id="sim"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </a> -->
            </div>

            <div class="col-md-3">
                <!-- <a href="<?= base_url('statistik_nasional/Bpkb'); ?>"> -->
                <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                    <div class="card-body">
                        <div class="row justify-content-between align-items-center" style="font-size: 40px;">
                            <div class=" col-md-2">
                                <iconify-icon icon="material-symbols:book-rounded" class="ms-n2" style="font-size: 50px; color: #464646;"></iconify-icon>
                            </div>
                            <div class="col-md-10 float-end">
                                <span class="fs-4 float-end" style="color:#464646;">
                                    <span class="fw-bold">Total BPKB</span>
                                </span>
                                <br>
                                <span class="fs-6 fw-bold float-end" style="color:#464646;" id="bpkb"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </a> -->
            </div>

            <div class="col-md-3">
                <!-- <a href="<?= base_url('statistik_nasional/Stnk'); ?>"> -->
                <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                    <div class="card-body">
                        <div class="row justify-content-between align-items-center" style="font-size: 40px;">
                            <div class=" col-md-2">
                                <iconify-icon icon="material-symbols:credit-card-outline" class="ms-n2" style="font-size: 40px; color: #464646;"></iconify-icon>
                            </div>
                            <div class="col-md-10 float-end">
                                <span class="fs-4 float-end" style="color:#464646;">
                                    <span class="fw-bold">Total STNK</span>
                                </span>
                                <br>
                                <span class="fs-6 fw-bold float-end" style="color:#464646;" id="stnk"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </a> -->
            </div>

            <div class="col-md-3">
                <!-- <a href="<?= base_url('statistik_nasional/Sbst'); ?>"> -->
                <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                    <div class="card-body">
                        <div class="row justify-content-between align-items-center" style="font-size: 40px;">
                            <div class=" col-md-2">
                                <iconify-icon icon="material-symbols:credit-card-outline" class="ms-n2" style="font-size: 40px; color: #464646;"></iconify-icon>
                            </div>
                            <div class="col-md-10 float-end">
                                <span class="fs-4 float-end" style="color:#464646;">
                                    <span class="fw-bold">Total FASMAT SBST</span>
                                </span>
                                <br>
                                <span class="fs-6 fw-bold float-end" style="color:#464646;" id="sbst"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </a> -->
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <!-- <a href="<?= base_url('statistik_nasional/Dikmas'); ?>"> -->
                <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                    <div class="card-body">
                        <div class="row justify-content-between align-items-center" style="font-size: 40px;">
                            <div class=" col-md-2">
                                <iconify-icon icon="material-symbols:credit-card-outline" class="ms-n2" style="font-size: 40px; color: #464646;"></iconify-icon>
                            </div>
                            <div class="col-md-10 float-end">
                                <span class="fs-4 float-end" style="color:#464646;">
                                    <span class="fw-bold">Total DIKMAS</span>
                                </span>
                                <br>
                                <span class="fs-6 fw-bold float-end" style="color:#464646;" id="dikmas"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </a> -->
            </div>

            <div class="col-md-3">
                <!-- <a href="<?= base_url('statistik_nasional/Jemenopsrek'); ?>"> -->
                <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                    <div class="card-body">
                        <div class="row justify-content-between align-items-center" style="font-size: 40px;">
                            <div class=" col-md-2">
                                <iconify-icon icon="material-symbols:book-rounded" class="ms-n2" style="font-size: 50px; color: #464646;"></iconify-icon>
                            </div>
                            <div class="col-md-10 float-end">
                                <span class="fs-4 float-end" style="color:#464646;">
                                    <span class="fw-bold">Total JEMENOPSREK</span>
                                </span>
                                <br>
                                <span class="fs-6 fw-bold float-end" style="color:#464646;" id="jemenopsrek"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </a> -->
            </div>

            <div class="col-md-3">
                <!-- <a href="<?= base_url('statistik_nasional/Cegah'); ?>"> -->
                <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                    <div class="card-body">
                        <div class="row justify-content-between align-items-center" style="font-size: 40px;">
                            <div class=" col-md-2">
                                <iconify-icon icon="material-symbols:credit-card-outline" class="ms-n2" style="font-size: 40px; color: #464646;"></iconify-icon>
                            </div>
                            <div class="col-md-10 float-end">
                                <span class="fs-4 float-end" style="color:#464646;">
                                    <span class="fw-bold">Total CEGAH</span>
                                </span>
                                <br>
                                <span class="fs-6 fw-bold float-end" style="color:#464646;" id="cegah"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </a> -->
            </div>

            <div class="col-md-3">
                <!-- <a href="<?= base_url('statistik_nasional/Audit'); ?>"> -->
                <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                    <div class="card-body">
                        <div class="row justify-content-between align-items-center" style="font-size: 40px;">
                            <div class=" col-md-2">
                                <iconify-icon icon="material-symbols:credit-card-outline" class="ms-n2" style="font-size: 40px; color: #464646;"></iconify-icon>
                            </div>
                            <div class="col-md-10 float-end">
                                <span class="fs-4 float-end" style="color:#464646;">
                                    <span class="fw-bold">Total AUDIT</span>
                                </span>
                                <br>
                                <span class="fs-6 fw-bold float-end" style="color:#464646;" id="audit"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </a> -->
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <!-- <a href="<?= base_url('statistik_nasional/Subrenop'); ?>"> -->
                <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                    <div class="card-body">
                        <div class="row justify-content-between align-items-center" style="font-size: 40px;">
                            <div class=" col-md-2">
                                <iconify-icon icon="material-symbols:credit-card-outline" class="ms-n2" style="font-size: 40px; color: #464646;"></iconify-icon>
                            </div>
                            <div class="col-md-10 float-end">
                                <span class="fs-4 float-end" style="color:#464646;">
                                    <span class="fw-bold">Total SUBBAG RENOP</span>
                                </span>
                                <br>
                                <span class="fs-6 fw-bold float-end" style="color:#464646;" id="subrenop"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </a> -->
            </div>

            <div class="col-md-3">
                <!-- <a href="<?= base_url('statistik_nasional/Subdalops'); ?>"> -->
                <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                    <div class="card-body">
                        <div class="row justify-content-between align-items-center" style="font-size: 40px;">
                            <div class=" col-md-2">
                                <iconify-icon icon="material-symbols:book-rounded" class="ms-n2" style="font-size: 50px; color: #464646;"></iconify-icon>
                            </div>
                            <div class="col-md-10 float-end">
                                <span class="fs-4 float-end" style="color:#464646;">
                                    <span class="fw-bold">Total SUBBAG DALOPS</span>
                                </span>
                                <br>
                                <span class="fs-6 fw-bold float-end" style="color:#464646;" id="subdalops"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </a> -->
            </div>

            <div class="col-md-3">
                <!-- <a href="<?= base_url('statistik_nasional/Subkerma'); ?>"> -->
                <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                    <div class="card-body">
                        <div class="row justify-content-between align-items-center" style="font-size: 40px;">
                            <div class=" col-md-2">
                                <iconify-icon icon="material-symbols:credit-card-outline" class="ms-n2" style="font-size: 40px; color: #464646;"></iconify-icon>
                            </div>
                            <div class="col-md-10 float-end">
                                <span class="fs-4 float-end" style="color:#464646;">
                                    <span class="fw-bold">Total SUBBAG KERMA</span>
                                </span>
                                <br>
                                <span class="fs-6 fw-bold float-end" style="color:#464646;" id="subkerma"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </a> -->
            </div>

            <div class="col-md-3">
                <!-- <a href="<?= base_url('statistik_nasional/Subanev'); ?>"> -->
                <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                    <div class="card-body">
                        <div class="row justify-content-between align-items-center" style="font-size: 40px;">
                            <div class=" col-md-2">
                                <iconify-icon icon="material-symbols:credit-card-outline" class="ms-n2" style="font-size: 40px; color: #464646;"></iconify-icon>
                            </div>
                            <div class="col-md-10 float-end">
                                <span class="fs-4 float-end" style="color:#464646;">
                                    <span class="fw-bold">Total SUBBAG ANEV</span>
                                </span>
                                <br>
                                <span class="fs-6 fw-bold float-end" style="color:#464646;" id="subanev"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </a> -->
            </div>
        </div>


    </div>


    <?php $mobile = detect_mobile();
    if ($mobile === true) { ?>



        <div class="row d-flex align-items-center">
            <div class="col-md-12 mb-1 mt-3 text-center">
                <span style="color:#007DD8;" class="text-uppercase fw-bold fs-1">Data Rekapitulasi Nasional</span>
            </div>
        </div>

        <div class="row d-flex">
            <div class="col-md-6 mt-3">
                <h5>10 Polda Pelanggaran Lantas Tertinggi</h5>
                <div class="mb-3">
                    <div class="card shadow-sm" style="border-radius: 30px; overflow: hidden;">
                        <table class="table table-bordered table-hover rounded" style="font-size: 17px;" id="tablePelanggaran">
                            <thead class="" style="background-color:#007DD8; color:#fff;">
                                <tr class="text-center">
                                    <th scope="col">No</th>
                                    <th scope="col">Polda</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Pelanggaran Berat</th>
                                    <th scope="col">Pelanggaran Sedang</th>
                                    <th scope="col">Pelanggaran Ringan</th>
                                </tr>
                            </thead>
                            <tbody id="tbody-pelanggaran">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mt-3">
                <h5>10 Polda Kecelakaan Tertinggi</h5>
                <div class="mb-3">
                    <div class="card shadow-sm" style="border-radius: 30px; overflow: hidden;">
                        <table class="table table-bordered table-hover rounded" style="font-size: 17px;" id="tableKecelakaan">
                            <thead class="" style="background-color:#007DD8; color:#fff;">
                                <tr class="text-center">
                                    <th scope="col">No</th>
                                    <th scope="col">Polda</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Meninggal Dunia</th>
                                    <th scope="col">Luka Berat</th>
                                    <th scope="col">Luka Ringan</th>
                                </tr>
                            </thead>
                            <tbody id="tbody-kecelakaan">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <div class="row d-flex">
            <div class="col-md-12 mt-3">
                <div class="mb-3">
                    <section class="shadow-sm">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>10 Polda Turjagwali Tertinggi</h5>
                                    </div>
                                    <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                        <div class="main-chart">
                                            <div id="chartturjagwali" style="width: 130vw"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

    <?php } else { ?>
        <!-- <div class="container-fluid" style="background:#E9E9E9">
            <div class="container-fluid">
                <div class="container-fluid">
                    <div class="container-fluid">

                        <div class="row d-flex align-items-center">
                            <div class="col-md-12 mb-1 mt-3 text-center">
                                <span style="color:#007DD8;" class="text-uppercase fw-bold fs-1">Data Rekapitulasi Nasional</span>
                            </div>
                        </div>

                        <div class="row d-flex">
                            <div class="col-md-6 mt-3">
                                <h5>10 Polda Pelanggaran Lantas Tertinggi</h5>
                                <div class="mb-3">
                                    <div class="card shadow-sm" style="border-radius: 30px; overflow: hidden;">
                                        <table class="table table-bordered table-hover rounded" style="font-size: 17px;">
                                            <thead class="" style="background-color:#007DD8; color:#fff;">
                                                <tr class="text-center">
                                                    <th scope="col">No</th>
                                                    <th scope="col">Polda</th>
                                                    <th scope="col">Total</th>
                                                    <th scope="col">Pelanggaran Berat</th>
                                                    <th scope="col">Pelanggaran Sedang</th>
                                                    <th scope="col">Pelanggaran Ringan</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbody-pelanggaran">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <h5>10 Polda Kecelakaan Tertinggi</h5>
                                <div class="mb-3">
                                    <div class="card shadow-sm" style="border-radius: 30px; overflow: hidden;">
                                        <table class="table table-bordered table-hover rounded" style="font-size: 17px;">
                                            <thead class="" style="background-color:#007DD8; color:#fff;">
                                                <tr class="text-center">
                                                    <th scope="col">No</th>
                                                    <th scope="col">Polda</th>
                                                    <th scope="col">Total</th>
                                                    <th scope="col">Meninggal Dunia</th>
                                                    <th scope="col">Luka Berat</th>
                                                    <th scope="col">Luka Ringan</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbody-kecelakaan">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row d-flex">
                            <div class="col-md-12 mt-3">
                                <div class="mb-3">
                                    <section class="shadow-sm">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>10 Polda Turjagwali Tertinggi</h5>
                                                    </div>
                                                    <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                                        <div class="main-chart">
                                                            <div id="chartturjagwali" style="width: 130vw"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    <?php } ?>

    <script>
        // getStatistik();

        // function getStatistik() {
        //     let id = '<?= $data['id'] ?>'
        //     console.log(id);
        //     $.ajax({
        //         type: "POST",
        //         url: "<?php echo base_url(); ?>Polda_executive/getStatistik" / +id,
        //         dataType: "JSON",
        //         data: {
        //             id: id
        //         },
        //         success: function(result) {
        //             $("#overlay").fadeOut(300);

        //             $('#lakalantas').html(`<span class="fs-4" >${result.lakalantas}</span >`);
        //             $('#garlantas').html(`<span class="fs-4" >${result.garlantas}</span >`);
        //             $('#turjagwali').html(`<span class="fs-4" >${result.turjagwali}</span >`);
        //             $('#walpjr').html(`<span class="fs-4" >${result.walpjr}</span>`);

        //             $('#bpkb').html(`<span class="fs-4" >${result.bpkb}</span >`);
        //             $('#stnk').html(`<span class="fs-4" >${result.stnk}</span >`);
        //             $('#sim').html(`<span class="fs-4" >${result.sim}</span>`);
        //             $('#sbst').html(`<span class="fs-4" >${result.sbst}</span >`);

        //             $('#dikmas').html(`<span class="fs-4" >${result.dikmas}</span >`);
        //             $('#jemenopsrek').html(`<span class="fs-4" >${result.jemenopsrek}</span >`);
        //             $('#cegah').html(`<span class="fs-4" >${result.cegah}</span>`);
        //             $('#audit').html(`<span class="fs-4" >${result.audit}</span >`);

        //             $('#subrenop').html(`<span class="fs-4" >${result.subrenop}</span >`);
        //             $('#subdalops').html(`<span class="fs-4" >${result.subdalops}</span >`);
        //             $('#subkerma').html(`<span class="fs-4" >${result.subkerma}</span>`);
        //             $('#subanev').html(`<span class="fs-4" >${result.subanev}</span >`);
        //         }
        //     })
        // }

        getGarlantas();

        function getGarlantas() {
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>statistik_nasional/getGarlantas",
                dataType: "JSON",
                success: function(result) {
                    $("#overlay").fadeOut(300);
                    var table = '';

                    for (let i = 0; i < result.length; i++) {
                        let x = parseInt(i)
                        let no = x + 1
                        table += `<tr class="text-center"> 
                                <td>  ${no}  </td> 
                                <td>  ${result[i].name_polda}  </td> 
                                <td>  ${result[i].total}  </td> 
                                <td>  ${result[i].pelanggaran_berat}  </td> 
                                <td>  ${result[i].pelanggaran_sedang}  </td> 
                                <td>  ${result[i].pelanggaran_ringan}  </td> 
                                </tr>`
                    }
                    $('#tbody-pelanggaran').html(table);

                    <?php $mobile = detect_mobile();
                    if ($mobile === true) { ?>

                        $('#tablePelanggaran').DataTable({
                            responsive: true,

                            scrollX: true,

                            sDom: '<"dt-panelmenu clearfix"flr>t<"dt-panelfooter clearfix"ip>',

                            // buttons: ["excel", "csv", "pdf"],
                            processing: true,
                            oLanguage: {
                                sSearch: 'Search:'
                            },
                        });

                    <?php } ?>
                }
            });
        }


        getLakalantas();

        function getLakalantas() {
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>statistik_nasional/getLakalantas",
                dataType: "JSON",
                success: function(result) {
                    $("#overlay").fadeOut(300);
                    var table = '';

                    for (let i = 0; i < result.length; i++) {
                        let x = parseInt(i)
                        let no = x + 1
                        table += `<tr class="text-center"> 
                                <td>  ${no}  </td> 
                                <td>  ${result[i].name_polda}  </td> 
                                <td>  ${result[i].insiden_kecelakaan}  </td> 
                                <td>  ${result[i].meninggal_dunia}  </td> 
                                <td>  ${result[i].luka_berat}  </td> 
                                <td>  ${result[i].luka_ringan}  </td> 
                                </tr>`
                    }
                    $('#tbody-kecelakaan').html(table);

                    <?php $mobile = detect_mobile();
                    if ($mobile === true) { ?>
                        $('#tableKecelakaan').DataTable({
                            responsive: true,

                            scrollX: true,

                            sDom: '<"dt-panelmenu clearfix"flr>t<"dt-panelfooter clearfix"ip>',

                            // buttons: ["excel", "csv", "pdf"],
                            processing: true,
                            oLanguage: {
                                sSearch: 'Search:'
                            },
                        });
                    <?php } ?>
                }
            })
        }

        getTurjagwali();

        function getTurjagwali() {
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>statistik_nasional/getTurjagwali",
                dataType: "JSON",
                success: function(result) {
                    $("#overlay").fadeOut(300);
                    // console.log(result)
                    var turjagwali = {
                        series: [{
                            name: 'Pengaturan',
                            type: 'column',
                            data: result.polda_pengaturan,
                            color: "#11347A"
                        }, {
                            name: 'Pengawalan',
                            type: 'column',
                            data: result.polda_pengawalan,
                            color: "#CB2D3E"
                        }, {
                            name: 'Patroli',
                            type: 'column',
                            data: result.polda_patroli,
                            color: "#E8D42F"
                        }, {
                            name: 'Penjagaan',
                            type: 'column',
                            data: result.polda_penjagaan,
                            color: "#346EFA"
                        }],
                        chart: {
                            height: 400,
                            type: 'line',
                            stacked: false
                        },
                        plotOptions: {
                            bar: {
                                horizontal: false,
                                columnWidth: '55%',
                                endingShape: 'rounded',
                                dataLabels: {
                                    position: 'top'
                                }
                            },
                        },
                        dataLabels: {
                            enabled: true,
                            style: {
                                colors: ['#333']
                            },
                            offsetY: -15,
                        },

                        stroke: {
                            show: true,
                            width: [1, 1, 4, 4],
                            colors: ['transparent']
                        },
                        xaxis: {
                            categories: result.polda_name,
                            labels: {
                                show: true,
                                style: {
                                    colors: ['#f70505'],
                                    fontSize: '18px',
                                    fontWeight: 400,
                                }
                            }
                        },
                        yaxis: [{
                            axisTicks: {
                                show: false,
                            },
                            axisBorder: {
                                show: false,
                                color: '#008FFB'
                            },
                            // labels: {
                            //     style: {
                            //         colors: '#008FFB',
                            //     }
                            // },


                        }, ],
                    };

                    var turjagwali = new ApexCharts(document.querySelector("#chartturjagwali"), turjagwali);
                    turjagwali.render();
                }
            })
        }

        getStatistik();

        function getStatistik() {
            let id = '<?= $data['id'] ?>'
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>executive/Polda_executive/getStatistik/" + id,
                // data: {
                //     id: id
                // },
                dataType: "JSON",
                success: function(result) {
                    $("#overlay").fadeOut(300);

                    $('#lakalantas').html(`<span class="fs-4" >${result.lakalantas}</span >`);
                    $('#garlantas').html(`<span class="fs-4" >${result.garlantas}</span >`);
                    $('#turjagwali').html(`<span class="fs-4" >${result.turjagwali}</span >`);
                    $('#walpjr').html(`<span class="fs-4" >${result.walpjr}</span>`);

                    $('#bpkb').html(`<span class="fs-4" >${result.bpkb}</span >`);
                    $('#stnk').html(`<span class="fs-4" >${result.stnk}</span >`);
                    $('#sim').html(`<span class="fs-4" >${result.sim}</span>`);
                    $('#sbst').html(`<span class="fs-4" >${result.sbst}</span >`);

                    $('#dikmas').html(`<span class="fs-4" >${result.dikmas}</span >`);
                    $('#jemenopsrek').html(`<span class="fs-4" >${result.jemenopsrek}</span >`);
                    $('#cegah').html(`<span class="fs-4" >${result.cegah}</span>`);
                    $('#audit').html(`<span class="fs-4" >${result.audit}</span >`);

                    $('#subrenop').html(`<span class="fs-4" >${result.subrenop}</span >`);
                    $('#subdalops').html(`<span class="fs-4" >${result.subdalops}</span >`);
                    $('#subkerma').html(`<span class="fs-4" >${result.subkerma}</span>`);
                    $('#subanev').html(`<span class="fs-4" >${result.subanev}</span >`);
                }
            })
        }
    </script>