<div class="row">
    <div class="col-md-4">
        <h3 style="text-transform: uppercase; color:#ffffff;"><a href="<?= base_url('executive/Polda_executive/' . $data['id']) ?>" style="color:#ffffff ;"><i class="fas fa-less-than"></i> | </a> <?= $title; ?> <?= $data['poldaid']['name_polda']; ?></h3>
    </div>
    <div class="row justify-content-center">
        <div class="col-4" style="justify-content: center;display: flex;">
            <div class="grid-example mt-2 mt-sm-0">
                <div class="cat">
                    <label>
                        <input checked type="radio" value="day" name="filter" id="harianDisplay"><span> Harian</span>
                    </label>
                </div>
                <div class="cat">
                    <label>
                        <input type="radio" value="month" name="filter" id="bulananDisplay"><span> Bulanan</span>
                    </label>
                </div>
                <div class="cat">
                    <label>
                        <input type="radio" value="year" name="filter" id="tahunanDisplay"><span> Tahunan</span>
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12" style="text-align: center;">

        <!-- <button class="btn btn-primary" style="border-radius: 20px;"> Harian</button>
            <button class="btn btn-primary" style="border-radius: 20px;"> Bulanan</button>
            <button class="btn btn-primary" style="border-radius: 20px;"> Tahunan</button> -->
    </div>
</div>
<div class="row mt-5">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-3">
                <a href="<?= base_url('executive/Polda_executive/Lakalantas/' . $data['id']); ?>">
                    <div class="card" style="border-color: #10627a; box-shadow: 5px 10px 18px #0000007a; border-radius: 20px !important; background-color:#10627a">
                        <div class="card-body">
                            <div class="row justify-content-between align-items-center" style="height: 80px;">

                                <div class="col-md-10 float-start">
                                    <span class="fs-5 float-start" style="color:#ffffff;">
                                        Total<span class="fw-bold "> LAKA </span>
                                        </br>
                                        <span class="fs-5 fw-bold float-start" style="color:#ffffff;" id="lakalantas"></span>
                                        <p class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detailLaka"></p>
                                    </span>
                                </div>
                                <div class="col-md-2">
                                    <img src="<?= base_url('assets/icon/dashboard/LAKA.png') ?>" alt="" style="width: 60px; margin-left:-25px;">
                                    <!-- <i class='bx bxs-car-crash ms-n2' style="font-size: 40px; color: #ffffff;"></i> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="<?= base_url('executive/Polda_executive/Garlantas/' . $data['id']); ?>">
                    <div class="card" style="border-color: #cb2e3f; box-shadow: 5px 10px 18px #0000007a; border-radius: 20px !important; background-color:#cb2e3f">
                        <div class="card-body">
                            <div class="row justify-content-between align-items-center" style="height: 80px;">

                                <div class="col-md-10 float-start">
                                    <span class="fs-5 float-start" style="color:#ffffff;">
                                        Total<span class="fw-bold"> GARLANTAS </span>
                                        </br>
                                        <span class="fs-5 fw-bold float-start" style="color:#ffffff;" id="garlantas"></span>
                                        <p class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detailgarlantas"></p>
                                    </span>

                                </div>
                                <div class="col-md-2">
                                    <img src="<?= base_url('assets/icon/dashboard/GARLANTAS.png') ?>" alt="" style="width: 60px; margin-left:-25px;">
                                    <!-- <iconify-icon icon="fa6-solid:motorcycle" class="ms-n2" style="font-size: 30px; color: #ffffff;"></iconify-icon> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="<?= base_url('executive/Polda_executive/Turjagwali/' . $data['id']); ?>">
                    <div class="card" style="border-color: #ca3fd8; box-shadow: 5px 10px 18px #0000007a; border-radius: 20px !important; background-color:#ca3fd8">
                        <div class="card-body">
                            <div class="row justify-content-between align-items-center" style="height: 80px;">

                                <div class="col-md-10 float-start">
                                    <span class="fs-5 float-start" style="color:#ffffff;">
                                        Total <span class="fw-bold"> Turjagwali</span>
                                        </br>
                                        <span class="fs-5 fw-bold float-start" style="color:#ffffff;" id="turjagwali"></span>
                                        <p class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detailturjagwali"></p>
                                    </span>
                                </div>
                                <div class="col-md-2">
                                    <img src="<?= base_url('assets/icon/dashboard/TURJAGWALI.png') ?>" alt="" style="width: 60px; margin-left:-25px;">
                                    <!-- <iconify-icon icon="ic:round-car-crash" class="ms-n2" style="font-size: 40px; color: #ffffff;"></iconify-icon> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="<?= base_url('executive/Polda_executive/Walpjr/' . $data['id']); ?>">
                    <div class="card" style="border-color: #babf01; box-shadow: 5px 10px 18px #0000007a; border-radius: 20px !important; background-color:#babf01">
                        <div class="card-body">
                            <div class="row justify-content-between align-items-center" style="height: 80px;">

                                <div class="col-md-10 float-start">
                                    <span class="fs-5 float-start" style="color:#ffffff;">
                                        Total<span class="fw-bold"> WAL & PJR</span>
                                        </br>
                                        <span class="fs-6 fw-bold float-start" style="color:#ffffff;" id="walpjr"></span>
                                        <p class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detailwalpjr"></p>
                                    </span>
                                </div>
                                <div class="col-md-2">
                                    <img src="<?= base_url('assets/icon/dashboard/WAL_PJR.png') ?>" alt="" style="width: 60px; margin-left:-25px;">
                                    <!-- <i class='bx bxs-car-crash ms-n2' style="font-size: 40px; color: #ffffff;"></i> -->
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
                    <div class="card" style="border-color: #f3478f; box-shadow: 5px 10px 18px #0000007a; border-radius: 20px !important; background-color:#f3478f">
                        <div class="card-body">
                            <div class="row justify-content-between align-items-center" style="font-size: 40px;">
                                <div class="col-md-10 float-start">
                                    <p class="fs-5 float-start" style="color:#ffffff;">
                                        Total<span class="fw-bold"> SIM</span>
                                        </br>
                                        <span class="fs-6 fw-bold float-start" style="color:#ffffff;" id="sim"></span>
                                        <span class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detailsim"></span>
                                    </p>
                                </div>
                                <div class=" col-md-2">
                                    <img src="<?= base_url('assets/icon/dashboard/SIM.png') ?>" alt="" style="width: 60px; margin-left:-25px;">
                                    <!-- <iconify-icon icon="material-symbols:credit-card-outline" class="ms-n2" style="font-size: 40px; color: #ffffff;"></iconify-icon> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3">
                <a href="<?= base_url('executive/Polda_executive/Bpkb/' . $data['id']); ?>">
                    <div class="card" style="border-color: #48c0f4; box-shadow: 5px 10px 18px #0000007a; border-radius: 20px !important; background-color:#48c0f4">
                        <div class="card-body">
                            <div class="row justify-content-between align-items-center" style="font-size: 40px;">

                                <div class="col-md-10 float-start">
                                    <p class="fs-5 float-start" style="color:#ffffff;">
                                        <span class="fw-bold">Total BPKB</span>
                                        <br>
                                        <span class="fs-6 fw-bold float-start" style="color:#ffffff;" id="bpkb"></span>
                                    <p class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detailbpkb"></p>
                                    </p>
                                </div>
                                <div class=" col-md-2">
                                    <img src="<?= base_url('assets/icon/dashboard/BPKB.png') ?>" alt="" style="width: 60px; margin-left:-25px;">
                                    <!-- <iconify-icon icon="material-symbols:book-rounded" class="ms-n2" style="font-size: 40px; color: #ffffff;"></iconify-icon> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3">
                <a href="<?= base_url('executive/Polda_executive/Stnk/' . $data['id']); ?>">
                    <div class="card" style="border-color: #f4af48; box-shadow: 5px 10px 18px #0000007a; border-radius: 20px !important; background-color:#f4af48">
                        <div class="card-body">
                            <div class="row justify-content-between align-items-center" style="font-size: 40px;">

                                <div class="col-md-10 float-start">
                                    <p class="fs-5 float-start" style="color:#ffffff;">
                                        <span class="fw-bold">Total STNK</span>
                                        <br>
                                        <span class="fs-6 fw-bold float-start" style="color:#ffffff;" id="stnk"></span>
                                    <p class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detailstnk"></p>
                                    </p>
                                </div>
                                <div class=" col-md-2">
                                    <img src="<?= base_url('assets/icon/dashboard/STNK.png') ?>" alt="" style="width: 60px; margin-left:-25px;">
                                    <!-- <iconify-icon icon="material-symbols:credit-card-outline" class="ms-n2" style="font-size: 40px; color: #ffffff;"></iconify-icon> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3">
                <a href="<?= base_url('executive/Polda_executive/Sbst/' . $data['id']); ?>">
                    <div class="card" style="border-color: #f34799; box-shadow: 5px 10px 18px #0000007a; border-radius: 20px !important; background-color:#f34799">
                        <div class="card-body">
                            <div class="row justify-content-between align-items-center" style="font-size: 40px;">

                                <div class="col-md-10 float-start">
                                    <p class="fs-5 float-start" style="color:#ffffff;">
                                        <span class="fw-bold">Total FASMAT SBST</span>
                                        <br>
                                        <span class="fs-6 fw-bold float-start" style="color:#ffffff;" id="sbst"></span>
                                    <p class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detailsbst"></p>
                                    </p>
                                </div>
                                <div class=" col-md-2">
                                    <img src="<?= base_url('assets/icon/dashboard/FASMAT_SBST.png') ?>" alt="" style="width: 60px; margin-left:-25px;">
                                    <!-- <iconify-icon icon="material-symbols:credit-card-outline" class="ms-n2" style="font-size: 40px; color: #ffffff;"></iconify-icon> -->
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
                    <div class="card" style="border-color: #7b113f; box-shadow: 5px 10px 18px #0000007a; border-radius: 20px !important; background-color:#7b113f">
                        <div class="card-body">
                            <div class="row justify-content-between align-items-center" style="font-size: 40px;">

                                <div class="col-md-10 float-start">
                                    <p class="fs-5 float-start" style="color:#ffffff;">
                                        <span class="fw-bold">Total DIKMAS</span>
                                        <br>
                                        <span class="fs-6 fw-bold float-start" style="color:#ffffff;" id="dikmas"></span>
                                    <p class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detaildikmas"></p>
                                    </p>
                                </div>
                                <div class=" col-md-2">
                                    <img src="<?= base_url('assets/icon/dashboard/DIKMAS.png') ?>" alt="" style="width: 60px; margin-left:-25px;">
                                    <!-- <iconify-icon icon="material-symbols:credit-card-outline" class="ms-n2" style="font-size: 40px; color: #ffffff;"></iconify-icon> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3">
                <a href="<?= base_url('executive/Polda_executive/Jemenopsrek/' . $data['id']); ?>">
                    <div class="card" style="border-color: #e2ab1d; box-shadow: 5px 10px 18px #0000007a; border-radius: 20px !important; background-color:#e2ab1d">
                        <div class="card-body">
                            <div class="row justify-content-between align-items-center" style="font-size: 40px;">

                                <div class="col-md-10 float-start">
                                    <p class="fs-5 float-start" style="color:#ffffff;">
                                        <span class="fw-bold">Total JEMENOPSREK</span>
                                        <br>
                                        <span class="fs-6 fw-bold float-start" style="color:#ffffff;" id="jemenopsrek"></span>
                                    <p class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detailjemenopsrek"></p>
                                    </p>
                                </div>
                                <div class=" col-md-2">
                                    <img src="<?= base_url('assets/icon/dashboard/JEMENOPSREK.png') ?>" alt="" style="width: 60px; margin-left:-25px;">
                                    <!-- <iconify-icon icon="material-symbols:book-rounded" class="ms-n2" style="font-size: 40px; color: #ffffff;"></iconify-icon> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3">
                <a href="<?= base_url('executive/Polda_executive/Cegah/' . $data['id']); ?>">
                    <div class="card" style="border-color: #7b113f; box-shadow: 5px 10px 18px #0000007a; border-radius: 20px !important; background-color:#7b113f">
                        <div class="card-body">
                            <div class="row justify-content-between align-items-center" style="font-size: 40px;">

                                <div class="col-md-10 float-start">
                                    <p class="fs-5 float-start" style="color:#ffffff;">
                                        <span class="fw-bold">Total CEGAH</span>
                                        <br>
                                        <span class="fs-6 fw-bold float-start" style="color:#ffffff;" id="cegah"></span>
                                    <p class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detailcegah"></p>
                                    </p>
                                </div>
                                <div class=" col-md-2">
                                    <img src="<?= base_url('assets/icon/dashboard/CEGAH.png') ?>" alt="" style="width: 60px; margin-left:-25px;">
                                    <!-- <iconify-icon icon="material-symbols:credit-card-outline" class="ms-n2" style="font-size: 40px; color: #ffffff;"></iconify-icon> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3">
                <a href="<?= base_url('executive/Polda_executive/Audit/' . $data['id']); ?>">
                    <div class="card" style="border-color: #36c602; box-shadow: 5px 10px 18px #0000007a; border-radius: 20px !important; background-color:#36c602">
                        <div class="card-body">
                            <div class="row justify-content-between align-items-center" style="font-size: 40px;">

                                <div class="col-md-10 float-start">
                                    <p class="fs-5 float-start" style="color:#ffffff;">
                                        <span class="fw-bold">Total AUDIT</span>
                                        <br>
                                        <span class="fs-6 fw-bold float-start" style="color:#ffffff;" id="audit"></span>
                                    <p class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detailaudit"></p>
                                    </p>
                                </div>
                                <div class=" col-md-2">
                                    <img src="<?= base_url('assets/icon/dashboard/AUDIT.png') ?>" alt="" style="width: 60px; margin-left:-25px;">
                                    <!-- <iconify-icon icon="material-symbols:credit-card-outline" class="ms-n2" style="font-size: 40px; color: #ffffff;"></iconify-icon> -->
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
                    <div class="card" style="border-color: #33c36c; box-shadow: 5px 10px 18px #0000007a; border-radius: 20px !important; background-color:#33c36c">
                        <div class="card-body">
                            <div class="row justify-content-between align-items-center" style="font-size: 40px;">

                                <div class="col-md-10 float-start">
                                    <p class="fs-5 float-start" style="color:#ffffff;">
                                        <span class="fw-bold">Total SUBBAG RENOP</span>
                                        <br>
                                        <span class="fs-6 fw-bold float-start" style="color:#ffffff;" id="subrenop"></span>
                                    <p class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detailsubrenop"></p>
                                    </p>
                                </div>
                                <div class=" col-md-2">
                                    <img src="<?= base_url('assets/icon/dashboard/SUBBAG_RENOP.png') ?>" alt="" style="width: 60px; margin-left:-25px;">
                                    <!-- <iconify-icon icon="material-symbols:credit-card-outline" class="ms-n2" style="font-size: 40px; color: #ffffff;"></iconify-icon> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3">
                <a href="<?= base_url('executive/Polda_executive/Subdalops/' . $data['id']); ?>">
                    <div class="card" style="border-color: #9d2cf8; box-shadow: 5px 10px 18px #0000007a; border-radius: 20px !important; background-color:#9d2cf8">
                        <div class="card-body">
                            <div class="row justify-content-between align-items-center" style="font-size: 40px;">

                                <div class="col-md-10 float-start">
                                    <p class="fs-5 float-start" style="color:#ffffff;">
                                        <span class="fw-bold">Total SUBBAG DALOPS</span>
                                        <br>
                                        <span class="fs-6 fw-bold float-start" style="color:#ffffff;" id="subdalops"></span>
                                    <p class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detailsubdalops"></p>
                                    </p>
                                </div>
                                <div class=" col-md-2">
                                    <img src="<?= base_url('assets/icon/dashboard/SUBBAG_DALOPS.png') ?>" alt="" style="width: 60px; margin-left:-25px;">
                                    <!-- <iconify-icon icon="material-symbols:book-rounded" class="ms-n2" style="font-size: 40px; color: #ffffff;"></iconify-icon> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3">
                <a href="<?= base_url('executive/Polda_executive/Subkerma/' . $data['id']); ?>">
                    <div class="card" style="border-color: #f14924; box-shadow: 5px 10px 18px #0000007a; border-radius: 20px !important; background-color:#f14924">
                        <div class="card-body">
                            <div class="row justify-content-between align-items-center" style="font-size: 40px;">

                                <div class="col-md-10 float-start">
                                    <p class="fs-5 float-start" style="color:#ffffff;">
                                        <span class="fw-bold">Total SUBBAG KERMA</span>
                                        <br>
                                        <span class="fs-6 fw-bold float-start" style="color:#ffffff;" id="subkerma"></span>
                                    <p class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detailsubkerma"></p>
                                    </p>
                                </div>
                                <div class=" col-md-2">
                                    <img src="<?= base_url('assets/icon/dashboard/SUBBAG_KERMA.png') ?>" alt="" style="width: 60px; margin-left:-25px;">
                                    <!-- <iconify-icon icon="material-symbols:credit-card-outline" class="ms-n2" style="font-size: 40px; color: #ffffff;"></iconify-icon> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3">
                <a href="<?= base_url('executive/Polda_executive/Subanev/' . $data['id']); ?>">
                    <div class="card" style="border-color: #3263c2; box-shadow: 5px 10px 18px #0000007a; border-radius: 20px !important; background-color:#3263c2">
                        <div class="card-body">
                            <div class="row justify-content-between align-items-center" style="font-size: 40px;">

                                <div class="col-md-10 float-start">
                                    <p class="fs-5 float-start" style="color:#ffffff;">
                                        <span class="fw-bold">Total SUBBAG ANEV</span>
                                        <br>
                                        <span class="fs-6 fw-bold float-start" style="color:#ffffff;" id="subanev"></span>
                                    <p class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detailsubanev"></p>
                                    </p>
                                </div>
                                <div class=" col-md-2">
                                    <img src="<?= base_url('assets/icon/dashboard/SUBBAG_ANEV.png') ?>" alt="" style="width: 60px; margin-left:-25px;">
                                    <!-- <iconify-icon icon="material-symbols:credit-card-outline" class="ms-n2" style="font-size: 40px; color: #ffffff;"></iconify-icon> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>


    </div>

    <script>
        var tanggal;
        var isitype = 'day';
        let id = '<?= $data['id'] ?>'




        $('document').ready(function() {
            $("[name=filter]").on("change", function(e) {
                if (this.value == 'day') {
                    tanggal = [moment().format('YYYY-MM-DD'), moment().format('YYYY-MM-DD')];
                    isitype = 'day';
                } else if (this.value == 'month') {
                    tanggal = [moment().startOf('month').format('YYYY-MM-DD'), moment().endOf('month').format('YYYY-MM-DD')];
                    isitype = 'month';
                } else if (this.value == 'year') {
                    tanggal = [moment().startOf('year').format('YYYY-MM-DD'), moment().endOf('year').format('YYYY-MM-DD')];
                    isitype = 'year';
                }
                // console.log(tanggal[0]);
                getStatistik();
            });


            getStatistik();

            function getStatistik() {
                $("#overlay").fadeIn(300);
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url(); ?>executive/Polda_executive/getStatistik/" + id,

                    // type: "POST",
                    // url: "<?php echo base_url(); ?>statistik_nasional/Statistik_nasional/getStatistik",
                    data: {
                        "type": isitype,
                        "startDate": tanggal ? tanggal[0] : `${moment().format('YYYY-MM-DD')}`,
                        "endDate": tanggal ? tanggal[1] : `${moment().format('YYYY-MM-DD')}`
                    },
                    dataType: "JSON",
                    success: function(result) {
                        $("#overlay").fadeOut(300);

                        $('#lakalantas').html(`<span class="fs-5" >${result.lakalantas}</span >`);
                        $('#detailLaka').html(`${result['compare']['lakalantas']}`);


                        $('#garlantas').html(`<span class="fs-5" >${result.garlantas}</span >`);
                        $('#detailgarlantas').html(`${result['compare']['garlantas']}`);

                        $('#turjagwali').html(`<span class="fs-5" >${result.turjagwali}</span >`);
                        $('#detailturjagwali').html(`${result['compare']['turjagwali']}`);

                        $('#walpjr').html(`<span class="fs-5" >${result.walpjr}</span>`);
                        $('#detailwalpjr').html(`${result['compare']['walpjr']}`);

                        $('#bpkb').html(`<span class="fs-5" >${result.bpkb}</span >`);
                        $('#detailbpkb').html(`${result['compare']['bpkb']}`);

                        $('#stnk').html(`<span class="fs-5" >${result.stnk}</span >`);
                        $('#detailstnk').html(`${result['compare']['stnk']}`);

                        $('#sim').html(`<span class="fs-5" >${result.sim}</span>`);
                        $('#detailsim').html(`${result['compare']['sim']}`);

                        $('#sbst').html(`<span class="fs-5" >${result.sbst}</span >`);
                        $('#detailsbst').html(`${result['compare']['sbst']}`);

                        $('#dikmas').html(`<span class="fs-5" >${result.dikmas}</span >`);
                        $('#detaildikmas').html(`${result['compare']['dikmas']}`);

                        $('#jemenopsrek').html(`<span class="fs-5" >${result.jemenopsrek}</span >`);
                        $('#detailjemenopsrek').html(`${result['compare']['jemenopsrek']}`);

                        $('#cegah').html(`<span class="fs-5" >${result.cegah}</span>`);
                        $('#detailcegah').html(`${result['compare']['cegah']}`);

                        $('#audit').html(`<span class="fs-5" >${result.audit}</span >`);
                        $('#detailaudit').html(`${result['compare']['audit']}`);

                        $('#subrenop').html(`<span class="fs-5" >${result.subrenop}</span >`);
                        $('#detailsubrenop').html(`${result['compare']['subrenop']}`);

                        $('#subdalops').html(`<span class="fs-5" >${result.subdalops}</span >`);
                        $('#detailsubdalops').html(`${result['compare']['subdalops']}`);

                        $('#subkerma').html(`<span class="fs-5" >${result.subkerma}</span>`);
                        $('#detailsubkerma').html(`${result['compare']['subkerma']}`);

                        $('#subanev').html(`<span class="fs-5" >${result.subanev}</span >`);
                        $('#detailsubanev').html(`${result['compare']['subanev']}`);

                    }
                })
            }

        });
    </script>