<div class="row">
    <div class="col-md-4 mb-1">
        <h3 style="text-transform: uppercase; color:#007DD8;"><a href="<?= base_url('executive/Polda_executive/' . $data['id']) ?>" style="color:#007DD8 ;"><i class="fas fa-less-than"></i></a> <?= $title; ?> <?= $data['poldaid']['name_polda']; ?></h3>
    </div>
    <div class="col-md-3">
    </div>
</div>
<div class="row mt-5">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-3">
                <a href="<?= base_url('executive/Polda_executive/Lakalantas/' . $data['id']); ?>">
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
                </a>
            </div>
            <div class="col-md-3">
                <a href="<?= base_url('executive/Polda_executive/Garlantas/' . $data['id']); ?>">
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
                </a>
            </div>
            <div class="col-md-3">
                <a href="<?= base_url('executive/Polda_executive/Turjagwali/' . $data['id']); ?>">
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
                </a>
            </div>
            <div class="col-md-3">
                <a href="<?= base_url('executive/Polda_executive/Walpjr/' . $data['id']); ?>">

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
                </a>
            </div>
        </div>
        <!-- <div class="row">
            
            <div class="col-md-3">
                 a href="<?= base_url('executive/Polda_executive/Ranmor/' . $data['id']); ?>"> 
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
        </a>
    </div>

</div> -->

        <div class="row">
            <div class="col-md-3">
                <a href="<?= base_url('executive/Polda_executive/Sim/' . $data['id']); ?>">
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
                </a>
            </div>

            <div class="col-md-3">
                <a href="<?= base_url('executive/Polda_executive/Bpkb/' . $data['id']); ?>">
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
                </a>
            </div>

            <div class="col-md-3">
                <a href="<?= base_url('executive/Polda_executive/Stnk/' . $data['id']); ?>">
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
                </a>
            </div>

            <div class="col-md-3">
                <a href="<?= base_url('executive/Polda_executive/Sbst/' . $data['id']); ?>">
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
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <a href="<?= base_url('executive/Polda_executive/Dikmas/' . $data['id']); ?>">
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
                </a>
            </div>

            <div class="col-md-3">
                <a href="<?= base_url('executive/Polda_executive/Jemenopsrek/' . $data['id']); ?>">
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
                </a>
            </div>

            <div class="col-md-3">
                <a href="<?= base_url('executive/Polda_executive/Cegah/' . $data['id']); ?>">
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
                </a>
            </div>

            <div class="col-md-3">
                <a href="<?= base_url('executive/Polda_executive/Audit/' . $data['id']); ?>">
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
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <a href="<?= base_url('executive/Polda_executive/Subrenop/' . $data['id']); ?>">
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
                </a>
            </div>

            <div class="col-md-3">
                <a href="<?= base_url('executive/Polda_executive/Subdalops/' . $data['id']); ?>">
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
                </a>
            </div>

            <div class="col-md-3">
                <a href="<?= base_url('executive/Polda_executive/Subkerma/' . $data['id']); ?>">
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
                </a>
            </div>

            <div class="col-md-3">
                <a href="<?= base_url('executive/Polda_executive/Subanev/' . $data['id']); ?>">
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
                </a>
            </div>
        </div>


    </div>

    <script>
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