<div class="row">
    <div class="col-md-3">
        <h3 style="text-transform: uppercase; color:#ffffff;"><a href="<?= base_url('dashboard') ?>" style="color:red;"><i class="fas fa-less-than"></i> | </a> Statistik Nasional</h3>
    </div>
    <div class="col-md-4 mt-n3">
        <div class="grid-example mt-sm-0">
            <div class="cat  ">
                <label>
                    <input checked type="radio" value="day" name="filter" id="harianDisplay"><span> Harian</span>
                </label>
            </div>
            <div class="cat ">
                <label>
                    <input type="radio" value="month" name="filter" id="bulananDisplay"><span> Bulanan</span>
                </label>
            </div>
            <div class="cat ">
                <label>
                    <input type="radio" value="year" name="filter" id="tahunanDisplay"><span> Tahunan</span>
                </label>
            </div>
        </div>
    </div>
</div>
<div class="row ">

    <div class="col-md-12" style="text-align: center;">

        <!-- <button class="btn btn-primary" style="border-radius: 20px;"> Harian</button>
            <button class="btn btn-primary" style="border-radius: 20px;"> Bulanan</button>
            <button class="btn btn-primary" style="border-radius: 20px;"> Tahunan</button> -->
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-3">
                <div class="col-md-12  text-center mb-2">
                    <span class="fs-4 fw-bold text-white text-uppercase">Ditgakkum</span>
                </div>
                <div class="col-md-12">
                    <a href="<?= base_url('statistik_nasional/Lakalantas'); ?>">
                        <div class="card" style="border-color: #10627a;  border-radius: 20px !important; background-color:#10627a">
                            <div class="card-body">
                                <div class="row justify-content-between align-items-center" style=" height: 60px;">

                                    <div class=" col-md-10 float-start">
                                        <span class="fs-5 float-start" style="color:#ffffff;">
                                            <span class="fw-bold "> LAKA </span>
                                            </br>
                                            <span class="fs-5 fw-bold float-start" style="color:#ffffff;" id="lakalantas"></span>
                                            <p class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detailLaka"></p>
                                        </span>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="<?= base_url('assets/icon/dashboard/LAKA.png') ?>" alt="" style="width: 50px; margin-left:-25px;">
                                        <!-- <i class='bx bxs-car-crash ms-n2' style="font-size: 40px; color: #ffffff;"></i> -->
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-center" style="line-height: 0.05;border-color: #1A95BA;  border-radius: 0 0 20px 20px  !important; background-color:#1A95BA">
                                <span class="text-white fw-bold fs-5 "> Selengkapnya</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-12">
                    <a href="<?= base_url('statistik_nasional/Garlantas'); ?>">
                        <div class="card" style="border-color: #cb2e3f;  border-radius: 20px !important; background-color:#cb2e3f">
                            <div class="card-body">
                                <div class="row justify-content-between align-items-center" style=" height: 60px;">
                                    <div class=" col-md-10 float-start">
                                        <span class="fs-5 float-start" style="color:#ffffff;">
                                            <span class="fw-bold"> GARLANTAS </span>
                                            </br>
                                            <span class="fs-5 fw-bold float-start" style="color:#ffffff;" id="garlantas"></span>
                                            <p class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detailgarlantas"></p>
                                        </span>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="<?= base_url('assets/icon/dashboard/GARLANTAS.png') ?>" alt="" style="width: 50px; margin-left:-25px;">
                                        <!-- <iconify-icon icon="fa6-solid:motorcycle" class="ms-n2" style="font-size: 30px; color: #ffffff;"></iconify-icon> -->
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-center" style="line-height: 0.05;border-color: #cb2e3f;  border-radius: 0 0 20px 20px  !important; background-color:#167794;">
                                <span class="text-white fw-bold fs-5"> Selengkapnya</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class=" col-md-12">
                    <a href="<?= base_url('statistik_nasional/Turjagwali'); ?>">
                        <div class="card" style="border-color: #ca3fd8;  border-radius: 20px !important; background-color:#ca3fd8">
                            <div class="card-body">
                                <div class="row justify-content-between align-items-center" style=" height: 60px;">
                                    <div class=" col-md-10 float-start">
                                        <span class="fs-5 float-start" style="color:#ffffff;">
                                            <span class="fw-bold"> TURJAGWALI</span>
                                            </br>
                                            <span class="fs-5 fw-bold float-start" style="color:#ffffff;" id="turjagwali"></span>
                                            <p class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detailturjagwali"></p>
                                        </span>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="<?= base_url('assets/icon/dashboard/TURJAGWALI.png') ?>" alt="" style="width: 50px; margin-left:-25px;">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-center" style="line-height: 0.05;border-color: #1A95BA;  border-radius: 0 0 20px 20px  !important; background-color:#1A95BA">
                                <span class="text-white fw-bold fs-5 "> Selengkapnya</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-12">
                    <a href="<?= base_url('statistik_nasional/Walpjr'); ?>">
                        <div class="card" style="border-color: #babf01;  border-radius: 20px !important; background-color:#babf01">
                            <div class="card-body">
                                <div class="row justify-content-between align-items-center" style=" height: 60px;">
                                    <div class=" col-md-10 float-start">
                                        <span class="fs-5 float-start" style="color:#ffffff;">
                                            <span class="fw-bold"> WAL & PJR</span>
                                            </br>
                                            <span class="fs-6 fw-bold float-start" style="color:#ffffff;" id="walpjr"></span>
                                            <p class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detailwalpjr"></p>
                                        </span>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="<?= base_url('assets/icon/dashboard/WAL_PJR.png') ?>" alt="" style="width: 50px; margin-left:-25px;">
                                        <!-- <i class='bx bxs-car-crash ms-n2' style="font-size: 40px; color: #ffffff;"></i> -->
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-center" style="line-height: 0.05; border-color: #1A95BA;  border-radius: 0 0 20px 20px  !important; background-color:#1A95BA">
                                <span class="text-white fw-bold fs-5 "> Selengkapnya</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="col-md-12  text-center mb-2">
                    <span class="fs-4 fw-bold text-white text-uppercase">Ditregident</span>
                </div>
                <div class="col-md-12">
                    <a href="<?= base_url('statistik_nasional/ranmor'); ?>">
                        <div class="card" style="border-color: #9747f3;  border-radius: 20px !important; background-color:#9747f3">
                            <div class="card-body">
                                <div class="row justify-content-between align-items-center" style=" height: 60px;">
                                    <div class="col-md-10 float-start">
                                        <p class="fs-5 float-start" style="color:#ffffff;">
                                            <span class="fw-bold"> RANMOR</span>
                                            <br>
                                            <span class="fs-6 fw-bold float-start" style="color:#ffffff;" id="ranmor"></span>
                                            <span class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detailranmor"></span>
                                        </p>
                                    </div>
                                    <div class=" col-md-2">
                                        <img src="<?= base_url('assets/icon/dashboard/LAKA.png') ?>" alt="" style="width: 50px; margin-left:-25px;">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-center" style="line-height: 0.05;border-color: #1A95BA;  border-radius: 0 0 20px 20px  !important; background-color:#1A95BA">
                                <span class="text-white fw-bold fs-5 "> Selengkapnya</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-12">
                    <a href="<?= base_url('statistik_nasional/Sim'); ?>">
                        <div class="card" style="border-color: #f3478f;  border-radius: 20px !important; background-color:#f3478f">
                            <div class="card-body">
                                <div class="row justify-content-between align-items-center" style=" height: 60px;">
                                    <div class="col-md-10 float-start">
                                        <p class="fs-5 float-start" style="color:#ffffff;">
                                            <span class="fw-bold"> SIM</span>
                                            </br>
                                            <span class="fs-6 fw-bold float-start" style="color:#ffffff;" id="sim"></span>
                                            <span class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detailsim"></span>
                                        </p>
                                    </div>
                                    <div class=" col-md-2">
                                        <img src="<?= base_url('assets/icon/dashboard/SIM.png') ?>" alt="" style="width: 50px; margin-left:-25px;">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-center" style="line-height: 0.05;border-color: #1A95BA;  border-radius: 0 0 20px 20px  !important; background-color:#1A95BA">
                                <span class="text-white fw-bold fs-5 "> Selengkapnya</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-12">
                    <a href="<?= base_url('statistik_nasional/Bpkb'); ?>">
                        <div class="card" style="border-color: #48c0f4;  border-radius: 20px !important; background-color:#48c0f4">
                            <div class="card-body">
                                <div class="row justify-content-between align-items-center" style=" height: 60px;">
                                    <div class="col-md-10 float-start">
                                        <p class="fs-5 float-start" style="color:#ffffff;">
                                            <span class="fw-bold"> BPKB</span>
                                            <br>
                                            <span class="fs-6 fw-bold float-start" style="color:#ffffff;" id="bpkb"></span>
                                            <span class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detailbpkb"></span>
                                        </p>
                                    </div>
                                    <div class=" col-md-2">
                                        <img src="<?= base_url('assets/icon/dashboard/BPKB.png') ?>" alt="" style="width: 50px; margin-left:-25px;">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-center" style="line-height: 0.05;border-color: #1A95BA;  border-radius: 0 0 20px 20px  !important; background-color:#1A95BA">
                                <span class="text-white fw-bold fs-5 "> Selengkapnya</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-12">
                    <a href="<?= base_url('statistik_nasional/Stnk'); ?>">
                        <div class="card" style="border-color: #f4af48;  border-radius: 20px !important; background-color:#f4af48">
                            <div class="card-body">
                                <div class="row justify-content-between align-items-center" style=" height: 60px;">
                                    <div class="col-md-10 float-start">
                                        <p class="fs-5 float-start" style="color:#ffffff;">
                                            <span class="fw-bold"> STNK</span>
                                            <br>
                                            <span class="fs-6 fw-bold float-start" style="color:#ffffff;" id="stnk"></span>
                                            <span class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detailstnk"></span>
                                        </p>
                                    </div>
                                    <div class=" col-md-2">
                                        <img src="<?= base_url('assets/icon/dashboard/STNK.png') ?>" alt="" style="width: 50px; margin-left:-25px;">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-center" style="line-height: 0.05;border-color: #1A95BA;  border-radius: 0 0 20px 20px  !important; background-color:#1A95BA">
                                <span class="text-white fw-bold fs-5 "> Selengkapnya</span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- <div class="col-md-12">
                    <a href="<?= base_url('statistik_nasional/sbst'); ?>">
                        <div class="card" style="border-color: #f34799;  border-radius: 20px !important; background-color:#f34799">
                            <div class="card-body">
                                <div class="row justify-content-between align-items-center" style=" height: 60px;">
                                    <div class="col-md-10 float-start">
                                        <p class="fs-5 float-start" style="color:#ffffff;">
                                            <span class="fw-bold"> SBST</span>
                                            <br>
                                            <span class="fs-6 fw-bold float-start" style="color:#ffffff;" id="sbst"></span>
                                            <span class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detailsbst"></span>
                                        </p>
                                    </div>
                                    <div class=" col-md-2">
                                        <img src="<?= base_url('assets/icon/dashboard/FASMAT_SBST.png') ?>" alt="" style="width: 50px; margin-left:-25px;">
                                   </div>
                                </div>
                            </div>
                            <div class="card-footer text-center" style="line-height: 0.05;border-color: #1A95BA;  border-radius: 0 0 20px 20px  !important; background-color:#1A95BA">
                                <span class="text-white fw-bold fs-5 "> Selengkapnya</span>
                            </div>
                        </div>
                    </a>
                </div> -->
            </div>
            <div class="col-md-3">
                <div class="col-md-12  text-center mb-2">
                    <span class="fs-4 fw-bold text-white text-uppercase">Ditkamsel</span>
                </div>
                <div class="col-md-12">
                    <a href="<?= base_url('statistik_nasional/Blackspot'); ?>">
                        <div class="card" style="border-color: #7b113f;  border-radius: 20px !important; background-color:#7b113f">
                            <div class="card-body">
                                <div class="row justify-content-between align-items-center" style=" height: 60px;">
                                    <div class="col-md-10 float-start">
                                        <p class="fs-5 float-start" style="color:#ffffff;">
                                            <span class="fw-bold"> BLACKSPOT</span>
                                            <br>
                                            <span class="fs-6 fw-bold float-start" style="color:#ffffff;" id="blackspot"></span>
                                            <span class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detailblackspot"></span>
                                        </p>
                                    </div>
                                    <div class=" col-md-2">
                                        <img src="<?= base_url('assets/icon/dashboard/SPOT.png') ?>" alt="" style="width: 50px; margin-left:-25px;">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-center" style="line-height: 0.05;border-color: #1A95BA;  border-radius: 0 0 20px 20px  !important; background-color:#1A95BA">
                                <span class="text-white fw-bold fs-5 "> Selengkapnya</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-12">
                    <a href="<?= base_url('statistik_nasional/Troublespot'); ?>">
                        <div class="card" style="border-color: #e2ab1d;  border-radius: 20px !important; background-color:#e2ab1d">
                            <div class="card-body">
                                <div class="row justify-content-between align-items-center" style=" height: 60px;">
                                    <div class="col-md-10 float-start">
                                        <p class="fs-5 float-start" style="color:#ffffff;">
                                            <span class="fw-bold"> TROUBLESPOT</span>
                                            <br>
                                            <span class="fs-6 fw-bold float-start" style="color:#ffffff;" id="troublespot"></span>
                                            <span class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detailtroublespot"></span>
                                        </p>
                                    </div>
                                    <div class=" col-md-2">
                                        <img src="<?= base_url('assets/icon/dashboard/SPOT.png') ?>" alt="" style="width: 50px; margin-left:-25px;">
                                        <!-- <iconify-icon icon="material-symbols:book-rounded" class="ms-n2" style="font-size: 40px; color: #ffffff;"></iconify-icon> -->
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-center" style="line-height: 0.05;border-color: #1A95BA;  border-radius: 0 0 20px 20px  !important; background-color:#1A95BA; padding-top:-20px">
                                <span class="text-white fw-bold fs-5 "> Selengkapnya</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-12">
                    <a href="<?= base_url('statistik_nasional/Rekalantas'); ?>">
                        <div class="card" style="border-color: #7b113f;  border-radius: 20px !important; background-color:#7b113f">
                            <div class="card-body">
                                <div class="row justify-content-between align-items-center" style=" height: 60px;">
                                    <div class="col-md-10 float-start">
                                        <p class="fs-5 float-start" style="color:#ffffff;">
                                            <span class="fw-bold"> REKA LANTAS</span>
                                            <br>
                                            <span class="fs-6 fw-bold float-start" style="color:#ffffff;" id="rekalantas"></span>
                                            <span class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detailrekalantas"></span>
                                        </p>
                                    </div>
                                    <div class=" col-md-2">
                                        <img src="<?= base_url('assets/icon/dashboard/REKA.png') ?>" alt="" style="width: 50px; margin-left:-25px;">
                                        <!-- <iconify-icon icon="material-symbols:credit-card-outline" class="ms-n2" style="font-size: 40px; color: #ffffff;"></iconify-icon> -->
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-center" style="line-height: 0.05;border-color: #1A95BA;  border-radius: 0 0 20px 20px  !important; background-color:#1A95BA">
                                <span class="text-white fw-bold fs-5 "> Selengkapnya</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-12">
                    <a href="<?= base_url('statistik_nasional/Dikmas'); ?>">
                        <div class="card" style="border-color: #36c602;  border-radius: 20px !important; background-color:#36c602">
                            <div class="card-body">
                                <div class="row justify-content-between align-items-center" style=" height: 60px;">
                                    <div class="col-md-10 float-start">
                                        <p class="fs-5 float-start" style="color:#ffffff;">
                                            <span class="fw-bold"> DIKMAS</span>
                                            <br>
                                            <span class="fs-6 fw-bold float-start" style="color:#ffffff;" id="dikmas"></span>
                                            <span class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detaildikmas"></span>
                                        </p>
                                    </div>
                                    <div class=" col-md-2">
                                        <img src="<?= base_url('assets/icon/dashboard/DIKMAS.png') ?>" alt="" style="width: 50px; margin-left:-25px;">
                                        <!-- <iconify-icon icon="material-symbols:credit-card-outline" class="ms-n2" style="font-size: 40px; color: #ffffff;"></iconify-icon> -->
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-center" style="line-height: 0.05;border-color: #1A95BA;  border-radius: 0 0 20px 20px  !important; background-color:#1A95BA;">
                                <span class="text-white fw-bold fs-5 "> Selengkapnya</span>
                            </div>
                        </div>
                    </a>

                </div>
            </div>
            <div class="col-md-3">
                <div class="col-md-12  text-center mb-2">
                    <span class="fs-4 fw-bold text-white text-uppercase">Bag & Lainnya</span>
                </div>
                <div class="col-md-12">
                    <a href="<?= base_url('bagrenmin'); ?>">
                        <!-- <a href="<?= base_url('statistik_nasional/Subrenop'); ?>"> -->
                        <div class="card" style="border-color: #33c36c;  border-radius: 20px !important; background-color:#33c36c">
                            <div class="card-body">
                                <div class="row justify-content-between align-items-center" style=" height: 60px;">
                                    <div class="col-md-10 float-start">
                                        <p class="fs-5 float-start" style="color:#ffffff;">
                                            <span class="fw-bold">BAGRENMIN</span>
                                            <br>
                                            <span class="fs-6 fw-bold float-start" style="color:#ffffff;" id="subrenop"></span>
                                            <span class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detailsubrenop"></span>
                                        </p>
                                    </div>
                                    <div class=" col-md-2">
                                        <img src="<?= base_url('assets/icon/dashboard/SUBBAG_RENOP.png') ?>" alt="" style="width: 50px; margin-left:-25px;">
                                        <!-- <iconify-icon icon="material-symbols:credit-card-outline" class="ms-n2" style="font-size: 40px; color: #ffffff;"></iconify-icon> -->
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-center" style="line-height: 0.05;border-color: #1A95BA;  border-radius: 0 0 20px 20px  !important; background-color:#1A95BA">
                                <span class="text-white fw-bold fs-5 "> Selengkapnya</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-12">
                    <!-- <a href="<?= base_url('statistik_nasional/Subdalops'); ?>"> -->
                    <a href="<?= base_url('bagops'); ?>">
                        <div class="card" style="border-color: #9d2cf8;  border-radius: 20px !important; background-color:#9d2cf8">
                            <div class="card-body">
                                <div class="row justify-content-between align-items-center" style=" height: 60px;">
                                    <div class="col-md-10 float-start">
                                        <p class="fs-5 float-start" style="color:#ffffff;">
                                            <span class="fw-bold">BAGOPS</span>
                                            <br>
                                            <span class="fs-6 fw-bold float-start" style="color:#ffffff;" id="subdalops"></span>
                                            <span class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detailsubdalops"></span>
                                        </p>
                                    </div>
                                    <div class=" col-md-2">
                                        <img src="<?= base_url('assets/icon/dashboard/SUBBAG_DALOPS.png') ?>" alt="" style="width: 50px; margin-left:-25px;">
                                        <!-- <iconify-icon icon="material-symbols:book-rounded" class="ms-n2" style="font-size: 40px; color: #ffffff;"></iconify-icon> -->
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-center" style="line-height: 0.05;border-color: #1A95BA;  border-radius: 0 0 20px 20px  !important; background-color:#1A95BA">
                                <span class="text-white fw-bold fs-5 "> Selengkapnya</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-12">
                    <!-- <a href="<?= base_url('statistik_nasional/Subkerma'); ?>"> -->
                    <a href="<?= base_url('bagtik'); ?>">
                        <div class="card" style="border-color: #f14924;  border-radius: 20px !important; background-color:#f14924">
                            <div class="card-body">
                                <div class="row justify-content-between align-items-center" style=" height: 60px;">
                                    <div class="col-md-10 float-start">
                                        <p class="fs-5 float-start" style="color:#ffffff;">
                                            <span class="fw-bold">BAGTIK</span>
                                            <br>
                                            <span class="fs-6 fw-bold float-start" style="color:#ffffff;" id="subkerma"></span>
                                            <span class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detailsubkerma"></span>
                                        </p>
                                    </div>
                                    <div class=" col-md-2">
                                        <img src="<?= base_url('assets/icon/dashboard/SUBBAG_KERMA.png') ?>" alt="" style="width: 50px; margin-left:-25px;">
                                        <!-- <iconify-icon icon="material-symbols:credit-card-outline" class="ms-n2" style="font-size: 40px; color: #ffffff;"></iconify-icon> -->
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-center" style="line-height: 0.05;border-color: #1A95BA;  border-radius: 0 0 20px 20px  !important; background-color:#1A95BA">
                                <span class="text-white fw-bold fs-5 "> Selengkapnya</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-12">
                    <!-- <a href="<?= base_url('statistik_nasional/Subkerma'); ?>"> -->
                    <a href="<?= base_url('bagtik'); ?>">
                        <div class="card" style="border-color: #484848;  border-radius: 20px !important; background-color:#484848">
                            <div class="card-body">
                                <div class="row justify-content-between align-items-center" style=" height: 60px;">
                                    <div class="col-md-10 float-start">
                                        <p class="fs-5 float-start" style="color:#ffffff;">
                                            <span class="fw-bold">Data Keseluruhan</span>
                                            <br>
                                            <span class="fs-6 fw-bold float-start" style="color:#ffffff;" id="subkerma"></span>
                                            <span class="float-start m-0 p-0 fw-bold" style="font-size: 18px;">0</span>
                                            <!-- <span class="float-start m-0 p-0 ms-2 fw-bold" style="font-size: 18px;">0</span> -->
                                        </p>
                                    </div>
                                    <div class=" col-md-2">
                                        <img src="<?= base_url('assets/icon/dashboard/SUBBAG_KERMA.png') ?>" alt="" style="width: 50px; margin-left:-25px;">
                                        <!-- <iconify-icon icon="material-symbols:credit-card-outline" class="ms-n2" style="font-size: 40px; color: #ffffff;"></iconify-icon> -->
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-center" style="line-height: 0.05;border-color: #1A95BA;  border-radius: 0 0 20px 20px  !important; background-color:#1A95BA">
                                <span class="text-white fw-bold fs-5 "> Selengkapnya</span>
                            </div>
                        </div>
                    </a>
                </div>
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
        var tanggal;
        var isitype = 'day';


        //  notSelected
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
                //  console.log(tanggal);
                // console.log(tanggal[0]);
                getStatistik();
            });


            getStatistik();

            function getStatistik() {
                $("#overlay").fadeIn(300);
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url(); ?>statistik_nasional/Statistik_nasional/getStatistik",
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

                        $('#sbst').html(`<span class="fs-5" >${result.sbst}</span >`);
                        $('#detailsbst').html(`${result['compare']['sbst']}`);

                        $('#sim').html(`<span class="fs-5" >${result.sim}</span>`);
                        $('#detailsim').html(`${result['compare']['sim']}`);

                        $('#ranmor').html(`<span class="fs-5" >${result.ranmor}</span >`);
                        $('#detailranmor').html(`${result['compare']['ranmor']}`);

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