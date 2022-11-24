<div id="openLastDisplay" style="cursor: pointer; width: 23px;height: 45px;background-color: rgba(0, 13, 218, 0.79);border: 1px solid rgba(255, 255, 255, 0.39);border-radius: 5px 0px 0px 5px;position: fixed;right: 20px;z-index: 401;top: 400px;font-size: 25px;padding-left: 4px;color: white;padding-top: 3px; display:none">
    <i class="fa fas fa-chevron-left"></i>
</div>


<!-- <div class="filter" style=" height:125px;">
    <div class="container">

        <form action="" id="form_filter" class="">
            <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" style="display: none">
            <div class="row" style="display:none">
                <div class="col-md-3">
                    <div class="form-group row">
                        <div class="" id="polda_"></div>
                    </div>
                </div>
                <div class="col-md-9">
                    <label for="waktu" class="form-label  text-uppercase">Waktu</label>
                    <div class="row">
                        <div class="col-md-5">
                            <input class="form-control" type="date" name="start_date" id="start_date">
                        </div>
                        <div class="col-md-5">
                            <input class="form-control" type="date" name="end_date" id="end_date">
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-primary" type="submit" id="btn_filter" style="width: 100%;">Tampilkan</button>
                        </div>
                    </div>

                </div>


            </div>
        </form>

    </div>
</div> -->
<div class="container-fluid">
    <div class="row">
        <!-- <div class="row mt-5"> -->
        <div class="col-md-1 d-flex">
            <div id="logo"></div>
        </div>
        <div class="col-md-8 align-self-center">
            <div id="nama"></div>
            <p>Today is <?= date('l, j F Y') ?></p>
        </div>
        <div class="col-md-3 text-end align-self-center" style="display:none">
            <a href="http://34.143.227.90:3001/v1/laporan_harian/export_laphar?polda_id=<?= $data['id'] ?>" class="text-center" id="btn_export"><button class="btn btn-outline-primary" style="width: 200px; border-color:#007DD8;">Export Laporan</button></a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-9">
            <!-- <div class="col-md-12"> -->
            <div class="row" style="display:flex;z-index: 999;position: absolute;">
                <div class="dropdown d-inline-block">
                    <div style="cursor: pointer; display:flex; width:260px; height:40px; background-color:white; border-radius:0.25rem;margin: 10px;border: 1px solid var(--bs-input-border);" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div>
                            <div class="row" style="margin-left: 0px;">
                                <div class="col-md-12">
                                    <div style="display: flex;">
                                        <i class="fa fa-fw fas fa-align-justify" style="margin: 10px;z-index: 9;" onClick="hitungGpsId()"></i>
                                        <input type="text" placeholder="Telusuri Peta" name="searchAlamat" style="height: 38px;border: none;margin-left: -47px;width: 260px;padding-left: 50px;">
                                        <i class="fa fa-fw fas fa-search" style="margin: 10px;z-index: 9;margin-left: -30px;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn" style="color: #495057; margin-left: 10px; background-color: #fff;width: 40px;font-size: 15px; " data-bs-toggle="modal" data-bs-target="#myModalFilter">
                            <i style="margin-left: -2px;" class="fa fa-fw fas fa-filter"></i>
                        </button>
                        <div id="listAddress" style="position: absolute;top: 60px;margin-left: 4px;border-radius: 0.3rem;"></div>

                    </div>

                    <div style="position: absolute;left: 330px;width: 1500px;top: 6px;">

                        <div class="cat poldaDisplay" style="margin-left: 10px; display: none;">
                            <div class="btn-group">
                                <label>
                                    <input checked type="checkbox" value="polda" name="filter" id="poldaDisplay"><span><i class="fa fas fa-vector-square"></i> Polda</span>
                                </label>
                                <button id="poldaFilterModal" class="btn" style="color: black; background-color: #ffffff;height: 30px;margin-left: -10px;">
                                    <i class="mdi mdi-chevron-down" style="bottom: 4px;position: relative;"></i>
                                </button>
                            </div>
                        </div>
                        <div class="cat polresDisplay" style="margin-left: 10px;">
                            <div class="btn-group">
                                <label>
                                    <input checked type="checkbox" value="polres" name="filter" id="polresDisplay"><span><i class="fa fas fa-vector-square"></i> Polres</span>
                                </label>
                                <button id="polresFilterModal" class="btn" style="color: black; background-color: #ffffff;height: 30px;margin-left: -10px;">
                                    <i class="mdi mdi-chevron-down" style="bottom: 4px;position: relative;"></i>
                                </button>
                            </div>
                        </div>
                        <div class="cat jalurBeatDisplay" style="margin-left: 10px; display:none">
                            <div class="btn-group">
                                <label>
                                    <input type="checkbox" value="jalur_beat" name="filter" id="jalurBeatDisplay"><span><i class="fa fas fa-route"></i> Jalur Beat</span>
                                </label>
                                <button id="jalurBeatFilterModal" class="btn" style="color: black; background-color: #ffffff;height: 30px;margin-left: -10px;">
                                    <i class="mdi mdi-chevron-down" style="bottom: 4px;position: relative;"></i>
                                </button>
                            </div>
                        </div>
                        <div class="cat" style="margin-left: 10px;">
                            <label>

                                <div class="dropdown-toggle" id="dropdownMenuButtonDisplay" style="padding-top: 3px;color: #1967d2;" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fas fa-user-shield"></i> Petugas
                                </div>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonDisplay">
                                    <label class="dropdown-item" style="width: 100%;height: 100%;">
                                        <input checked type="checkbox" value="r2Listrik" name="filter" id="r2ListrikDisplay"><span style="text-align: start;" id="loadR2ListrikDisplay">R2 Listrik</span>
                                    </label>
                                    <label class="dropdown-item" style="width: 100%;height: 100%;">
                                        <input checked type="checkbox" value="r4Listrik" name="filter" id="r4ListrikDisplay"><span style="text-align: start;" id="loadR4ListrikDisplay">R4 Listrik</span>
                                    </label>
                                    <label class="dropdown-item" style="width: 100%;height: 100%;">
                                        <input checked type="checkbox" value="r2Fosil" name="filter" id="r2FosilDisplay"><span style="text-align: start;" id="loadR2FosilDisplay">R2 Fosil</span>
                                    </label>
                                    <label class="dropdown-item" style="width: 100%;height: 100%;">
                                        <input checked type="checkbox" value="r4Fosil" name="filter" id="r4FosilDisplay"><span style="text-align: start;" id="loadR4FosilDisplay">R4 Fosil</span>
                                    </label>
                                    <label class="dropdown-item" style="width: 100%;height: 100%;">
                                        <input checked type="checkbox" value="gatur" name="filter" id="gaturDisplay"><span style="text-align: start;" id="loadGaturDisplay">Gatur</span>
                                    </label>
                                    <label class="dropdown-item" style="width: 100%;height: 100%;">
                                        <button id="petugasFilterModal" class="btn" style="color: #5f95df; background-color: #ffffff;height: 30px;margin-left: -10px;">
                                            List Personil Lantas
                                        </button>
                                    </label>


                                </div>
                            </label>
                        </div>
                        <div class="cat fasumKhususDisplay" style="margin-left: 10px;">
                            <div class="btn-group">
                                <label>
                                    <input checked type="checkbox" value="fasum_khusus" name="filter" id="fasumKhususDisplay"><span><i class="fa far fa-building"></i> Fasum Khusus</span>
                                </label>
                                <button id="fasumFilterModal" class="btn" style="color: black; background-color: #ffffff;height: 30px;margin-left: -10px;">
                                    <i class="mdi mdi-chevron-down" style="bottom: 4px;position: relative;"></i>
                                </button>
                            </div>
                        </div>
                        <div class="cat clusterDisplay" style="margin-left: 10px; display:none;">
                            <div class="btn-group">
                                <label>
                                    <input checked type="checkbox" value="cluster" name="filter" id="clusterDisplay"><span><i class="fa fas fa-vector-square"></i> Cluster</span>
                                </label>
                                <button id="clusterFilterModal" class="btn" style="color: black; background-color: #ffffff;height: 30px;margin-left: -10px;">
                                    <i class="mdi mdi-chevron-down" style="bottom: 4px;position: relative;"></i>
                                </button>
                            </div>
                        </div>

                        <!-- <div class="cat gpsIdDisplay" style="margin-left: 10px;">  
                    <label>
                        <input type="checkbox" value="gpsId" name="gpsId" id="gpsIdDisplay"><span><i class="fa fas fa-car-side"></i> Kendaraan Listrik</span>
                    </label>  
                </div> -->

                        <div class="cat kegiatanDisplay" style="display:none">
                            <div class="btn-group">
                                <label>
                                    <input type="checkbox" value="jadwal_kegiatan" name="filter" id="kegiatanDisplay"><span><i class="mdi mdi-card-account-details-star"></i> Jadwal Kegiatan</span>
                                </label>
                                <button id="jadwalFilterModal" class="btn" style="color: black; background-color: #ffffff;height: 30px;margin-left: -10px;">
                                    <i class="mdi mdi-chevron-down" style="bottom: 4px;position: relative;"></i>
                                </button>
                            </div>
                        </div>

                        <div class="cat cctvDisplay">
                            <div class="btn-group">
                                <label>
                                    <input type="checkbox" checked value="cctv" name="filter" id="cctvDisplay"><span><i class="mdi mdi-camera-marker"></i> CCTV</span>
                                </label>
                                <button id="cctvFilterModal" class="btn" style="color: black; background-color: #ffffff;height: 30px;margin-left: -10px;">
                                    <i class="mdi mdi-chevron-down" style="bottom: 4px;position: relative;"></i>
                                </button>
                            </div>
                        </div>
                        <div class="cat operasiDisplay" style="display:none">
                            <div class="btn-group">
                                <label>
                                    <input type="checkbox" value="titik_laporan" name="filter" id="operasiDisplay"><span><i class="mdi mdi-clipboard-flow"></i> Laporan</span>
                                </label>
                                <button id="operasiFilterModal" class="btn" style="color: black; background-color: #ffffff;height: 30px;margin-left: -10px;">
                                    <i class="mdi mdi-chevron-down" style="bottom: 4px;position: relative;"></i>
                                </button>
                            </div>
                        </div>

                        <div class="cat panicDisplay" style="margin-left: 10px; display:none">
                            <div class="btn-group">
                                <label>
                                    <input type="checkbox" value="titik_panicButton" name="filter" id="panicDisplay"><span><i class="mdi mdi-chat-alert"></i> Panic Button</span>
                                </label>
                                <button id="panicFilterModal" class="btn" style="color: black; background-color: #ffffff;height: 30px;margin-left: -10px;">
                                    <i class="mdi mdi-chevron-down" style="bottom: 4px;position: relative;"></i>
                                </button>
                            </div>
                        </div>

                    </div>

                    <div class="dropdown-menu" style="background: transparent; border: transparent; box-shadow: none;">
                        <div style="width: 308px; background-color: white;border-radius: 0.25rem;margin-left: 7px;margin-top: 0px;">
                            <div style="margin-left: 0px;overflow-x: scroll;height: 435px;scrollbar-width: thin;position: relative; padding: 15px;">
                                <form class="form" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="<?= $csrf_name; ?>" value="<?= $csrf_token; ?>" style="display: none">
                                    <div class="row">
                                        <label for="waktu">Tanggal</label>
                                        <div class="col-md-12" style="display: flex;">
                                            <input required class="form-control" type="date" id="startdate" name="startdate" value="2022-11-01"> &nbsp;&nbsp;<span style="margin-top: 7px;">To</span>&nbsp;&nbsp;
                                            <input required class="form-control" type="date" id="enddate" name="enddate" value="2022-11-20">
                                        </div>
                                        <div class="dropdown-divider"></div>

                                        <div class="col-md-12 mt-1">
                                            <p style="font-size: 17px;">OPERASI</p>
                                        </div>
                                        <div class="col-md-6">
                                            <input checked type="checkbox" name="filter" value="polres" id="polres" class="form-input">
                                            <span>Polres</span>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="checkbox" name="filter" value="instruksi" id="instruksi" class="form-input">
                                            <span>Instruksi</span>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="checkbox" checked name="filter" value="" id="turjawali" class="form-input">
                                            <span>Turjawali</span>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="checkbox" name="filter" value="jadwal_kegiatan" id="jadwal" class="form-input">
                                            <span>Jadwal Kegiatan</span>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="checkbox" name="filter" value="vip" id="vip" class="form-input">
                                            <span>VIP</span>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="checkbox" checked name="filter" value="cctv" id="cctv" class="form-input">
                                            <span>CCTV</span>
                                        </div>

                                        <div class="dropdown-divider"></div>
                                        <div class="col-md-12">
                                            <p style="font-size: 17px;">Laporan</p>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="checkbox" name="filter" value="titik_panicButton" id="panic" class="form-input">
                                            <span>Panic Button</span>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="checkbox" name="filter" value="titik_laporan" id="operasi" class="form-input">
                                            <span>Operasi</span>
                                        </div>

                                        <div class="dropdown-divider"></div>
                                        <div class="col-md-12 ">
                                            <p style="font-size: 17px;">Location Of Interest</p>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="checkbox" name="filter" value="fasum" id="fasum" class="form-input">
                                            <span>Fasilitas Umum</span>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="checkbox" name="filter" value="fasum_khusus" id="fasum_khusus" class="form-input">
                                            <span>Fasilitas Khusus</span>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="checkbox" name="filter" value="cluster" id="cluster" class="form-input">
                                            <span>Cluster</span>
                                        </div>
                                        <div class="col-md-6">
                                            <input checked type="checkbox" name="filter" value="gpsId" id="gpsId" class="form-input">
                                            <span>Kendaraan Listrik</span>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="checkbox" name="filter" value="troublespot" id="troublespot" class="form-input">
                                            <span>Trouble Spot</span>
                                        </div>
                                        <div class="col-md-12 mt-3" id="menuKategori">
                                            <p style="font-size: 17px;">Fasilitas Umum Kategori</p>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="checkbox" checked name="filterFasumKateg" value="mosque" id="mosque" class="form-input">
                                                    <span>mosque</span>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="checkbox" checked name="filterFasumKateg" value="school" id="school" class="form-input">
                                                    <span>School</span>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="checkbox" checked name="filterFasumKateg" value="cafe" id="cafe" class="form-input">
                                                    <span>Cafe</span>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="checkbox" checked name="filterFasumKateg" value="hospital" id="hospital" class="form-input">
                                                    <span>Hospital</span>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="checkbox" checked name="filterFasumKateg" value="lodging" id="lodging" class="form-input">
                                                    <span>Lodging</span>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="checkbox" checked name="filterFasumKateg" value="restaurant" id="restaurant" class="form-input">
                                                    <span>Restaurant</span>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="checkbox" checked name="filterFasumKateg" value="tourist_attraction" id="tourist_attraction" class="form-input">
                                                    <span>Tourist Attraction</span>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="checkbox" checked name="filterFasumKateg" value="fire_station" id="fire_station" class="form-input">
                                                    <span>Fire Station</span>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="checkbox" checked name="filterFasumKateg" value="shopping_mall" id="shopping_mall" class="form-input">
                                                    <span>Shopping Mall</span>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="checkbox" checked name="filterFasumKateg" value="gas_station" id="gas_station" class="form-input">
                                                    <span>Gas Station</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <a href="javascript:void(0);" class="btn btn-primary" id="filterCari" style="width: 100%">Search</a>
                                            </div>
                                        </div>
                                        <!-- <div class="dropdown-divider"></div> -->

                                        <!-- <div class="material-textfield">
                                    <input style="width: 100%;" placeholder="Pilih Tanggal" name="password" type="password">
                                    <label class="labelmui">Tanggal</label>
                                </div> -->
                                    </div>

                                </form>
                            </div>
                        </div>
                        <!-- item-->
                    </div>
                </div>
            </div>

            <div id="mapG20Dashboard" class="rounded-3" style="height:70vh; width:100%;">
                <div style="bottom: 10px;left: 10px;position: absolute;z-index: 999; display:none;">
                    <img src="<?= base_url() ?>assets/legenda_web.png" style="width: 12vw;" />
                </div>
            </div>
        </div>


        <div class="col-md-3">
            <!-- <div class="row justify-content-between align-items-center">
                <div class="col-md-12 mb-3">
                    <div id="statistik"></div>
                </div>
                <div class="col-md-3">
                </div>
            </div> -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                        <div class="card-body">
                            <div class="row justify-content-between align-items-center">
                                <div class=" col-md-2">
                                    <i class='bx bxs-car-crash ms-n2' style="font-size: 20px; color: #464646;"></i>
                                </div>
                                <div class="col-md-10 float-end">
                                    <span class="fs-6 float-end" style="color:#464646;">
                                        <span class="fw-bold">Kecelakaan </span>Lalu Lintas
                                    </span>
                                    <br>
                                    <span class="fs-6 fw-bold float-end" style="color:#464646;" id="lakalantas"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col-md-12">
                    <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                        <div class="card-body">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-md-2">
                                    <iconify-icon icon="ic:round-car-crash" class="ms-n2" style="font-size: 20px; color: #464646;"></iconify-icon>
                                </div>
                                <div class="col-md-10 float-end">
                                    <span class="fs-6 float-end" style="color:#464646;">
                                        <span class="fw-bold">Pelanggaran </span>Lalu Lintas
                                    </span>
                                    <br>
                                    <span class="fs-6 fw-bold float-end" style="color:#464646;" id="garlantas"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col-md-12">
                    <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                        <div class="card-body">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-md-2">
                                    <iconify-icon icon="ic:baseline-control-camera" class="ms-n2 mt-2" style="font-size: 17px; color: #464646;"></iconify-icon>
                                </div>
                                <div class="col-md-10 float-end">
                                    <span class="fs-6 float-end" style="color:#464646;">
                                        <span class="fw-bold">Turjagwali</span>
                                    </span>
                                    <br>
                                    <span class="fs-6 fw-bold float-end" style="color:#464646;" id="turjagwali"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col-md-12">
                    <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                        <div class="card-body">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-md-2">
                                    <img src="<?= base_url() ?>assets/dashboard/icon-ranmor.svg" alt="ranmor" width="30px">
                                </div>
                                <div class="col-md-10 float-end">
                                    <span class="fs-6 float-end" style="color:#464646;">
                                        <span class="fw-bold">Kendaraan </span>Bermotor
                                    </span>
                                    <br>
                                    <span class="fs-6 fw-bold float-end" style="color:#464646;" id="motor"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <!-- </div> -->
            <!-- end statistik -->
        </div>



        <section class="shadow-sm mt-5" style="display:none">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <div id="namaditgakkum"></div>
                        </div>
                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                            <div class="main-chart">
                                <div id="charta">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="shadow-sm mt-5" style="display:none">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <div id="namaditkamsel"></div>
                        </div>
                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                            <div class="main-chart">
                                <div id="chartb">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="shadow-sm mt-5" style="display:none">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <div id="namaditregident"></div>
                        </div>
                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                            <div class="main-chart">
                                <div id="chartc">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>




    <!-- Modal -->
    <div class="modal right fade" id="myModalFilter" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg modal-dialog-centered">

            <!-- Modal content-->
            <div class="modal-content" style="width: 600px;">
                <div class="modal-header bg-primary">
                    <h4 class="modal-title text-white" id="myLargeModalLabel">Turjawali Filter
                    </h4>
                    <button type="button" class="btn-close btn-close-white" data-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <!-- <div id="overlayMenuFilter" style="height: 9.5%;top: 64px;">
                    <div class="loading" style="display: flex;">
                        <div class="spinner" ></div>
                        <p style="color: white; font-size: 15px; margin-left: 3px;">Mohon Tunggu </br> Fitur Akan Aktif Segera</p> 
                    </div>
                </div> -->
                    <div class="accordion accordion-flush" id="accordionFlushExample">

                        <div class="accordion-item">
                            <div class="btn btn-soft-link waves-effect" id="openPetugas" style="color: #4e555b;position: relative;top: 10px;z-index: 5;left: 490px;"><i class="fa fas fa-redo"></i></div>
                            <h2 class="accordion-header" id="flush-headingPetugas" style="margin-top: -50px;">
                                <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsePetugas" aria-expanded="false" aria-controls="flush-collapsePetugas">
                                    <div>
                                        <p>
                                            Personil Lantas &nbsp;<span class="badge bg-danger rounded-pill" id="totalPetugasOn"></span>
                                            </br>
                                            <b><?php echo format_indoHari(date('Y-m-d')) ?></b>
                                        </p>
                                    </div>
                                </button>
                            </h2>
                            <div id="flush-collapsePetugas" class="accordion-collapse collapse" aria-labelledby="flush-headingPetugas" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body text-muted">
                                    <div style="margin-left: 15px;">
                                        </br>
                                        Total Aktif : &nbsp;<span class="badge bg-success rounded-pill" id="totalPetugasAktif"></span>
                                        </br>
                                        Total Tidak Aktif : &nbsp;<span class="badge bg-warning rounded-pill" id="totalPetugasTidakAktif"></span>
                                    </div>
                                    <div id="dataPetugasTrack">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingUraianNonKegiatan">
                                <button id="openUraianNonKegiatan" class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseUraianNonKegiatan" aria-expanded="false" aria-controls="flush-collapseUraianNonKegiatan">
                                    Tidak Terjadwal &nbsp;<span class="badge bg-danger rounded-pill" id="totalUraianNonKegiatan"></span>
                                </button>
                            </h2>
                            <div id="flush-collapseUraianNonKegiatan" class="accordion-collapse collapse" aria-labelledby="flush-headingUraianNonKegiatan" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body text-muted">

                                    <table id="datatableUraianNonKegiatan" class="table dt-responsive w-100">
                                        <thead>
                                            <tr>
                                                <th>Rute</th>
                                                <th>No</th>
                                                <th>Negara</th>
                                                <th>Lokasi</th>
                                                <th>Berangkat</th>
                                                <th>Petugas</th>
                                                <th>Catatan</th>
                                            </tr>
                                        </thead>
                                        <tbody id="listUraianNonKegiatan">
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                        <div class="listCategoriSchedule"></div>

                    </div>

                </div>
            </div>

        </div>
    </div>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary ">
                    <h5 class="modal-title text-white" id="myLargeModalLabel">Tambah Uraian Kegiatan</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="formR" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="<?= $csrf_name; ?>" value="<?= $csrf_token; ?>" style="display: none">
                        <div class="row">


                            <div class="col-md-6">
                                <div class="material-textfield mb-3">
                                    <input required style="width: 100%;" name="instruksi" placeholder="" type="text">
                                    <label class="labelmui">Uraian Kegiatan</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="material-selectfield mb-3">
                                    <select required name="category_renpam" class="form-select">
                                        <option value="">Pilih Category</option>
                                        <option value="1">Operasi</option>
                                        <option selected value="2">Harian</option>
                                    </select>
                                    <label class="labelmui">Categori Rengiat</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="material-selectfield mb-3">
                                    <select required name="id_account[]" id="id_account" style="height: 200px;" multiple>
                                        <?php foreach ($data['getAccount'] as $row) : ?>
                                            <option value="<?php echo $row['id']; ?>"><?php echo $row['name_account']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <label style="margin-top: -20px;font-size: 14px;" class="labelmui">Unit Pengawalan</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="material-textfield mb-3">
                                    <input required style="width: 100%;" name="date" id="datepicker" class="form-control" value="<?= date('Y-m-d') ?>" type="date">
                                    <label class="labelmui">Tanggal</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="material-selectfield mb-3">
                                    <select name="id_vip[]" id="id_vip" style="height: 200px" multiple>
                                        <?php foreach ($data['getVip'] as $row) : ?>
                                            <option value="<?php echo $row['id']; ?>"><?php echo $row['name_vip']; ?> ( <?= $row['country_arrival_vip'] ?> )</option>
                                        <?php endforeach; ?>
                                    </select>
                                    <label style="margin-top: -20px;font-size: 14px;" class="labelmui">VVIP</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="material-textfield mb-3">
                                    <input required type="text" name="startTime" class="form-control" id="startTime" value="<?php echo date('H:i') ?>" data-default="<?php echo date('H:i') ?>">
                                    <label class="labelmui">Waktu Mulai</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="material-selectfield mb-3">
                                    <select required name="subjek" class="form-select">
                                        <option selected value="">Pilih Subjek</option>
                                        <option value="1">Patroli</option>
                                        <option value="2">Pengawalan</option>
                                        <option value="3">Penjagaan</option>
                                        <option value="4">Pengaturan</option>
                                        <option value="5">Penutupan</option>
                                    </select>
                                    <label class="labelmui">Subjek</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="material-textfield mb-3">
                                    <input style="width: 100%;" name="total_vehicle" placeholder="" type="text">
                                    <label class="labelmui">Jumlah kendaraan yang dikawal</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="material-textfield mb-3">
                                    <input style="width: 100%;" name="order_renpam" placeholder="" type="text">
                                    <label class="labelmui">Urutan</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="material-textfield mb-3">
                                    <input required style="width: 100%;" name="title_start" placeholder="" type="text">
                                    <label class="labelmui">Lokasi Awal</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="material-textfield mb-3">
                                    <input style="width: 100%;" name="title_end" placeholder="" type="text">
                                    <label class="labelmui">Lokasi Akhir</label>
                                </div>
                            </div>
                            <div class="col-md-12" style="display: none;">
                                <div class="material-textfield mb-3">
                                    <input type="text" name="note_kakor" class="form-control" id="note_kakor">
                                    <label class="labelmui">Catatan Uraian Kegiatan</label>
                                </div>
                            </div>
                            <!-- <div class="col-md-6">
                            <div class="material-textfield mb-3">
                                <input required type="text" name="endTime" class="form-control" id="endTime" value="<?php echo date('H:i') ?>" data-default="<?php echo date('H:i') ?>"> 
                                <label class="labelmui">Waktu Selesai</label>
                            </div>
                        </div> -->


                            <textarea hidden name="ruteawal" id="ruteawal" cols="2" rows="2"></textarea>
                            <textarea hidden name="coordsAlternative1" id="coordsAlternative1" cols="2" rows="2"></textarea>
                            <textarea hidden name="coordsAlternative2" id="coordsAlternative2" cols="2" rows="2"></textarea>
                            <textarea hidden name="coordsAlternative3" id="coordsAlternative3" cols="2" rows="2"></textarea>
                            <textarea hidden name="coordsAlternative4" id="coordsAlternative4" cols="2" rows="2"></textarea>

                            <!-- <div class="col-md-12 mt-3">
                            <div id="mapG20Kegiatan" style="height: 500px"></div>
                        </div> -->
                        </div>

                        <div class="col-md-12 mt-3 float-end">
                            <a href="javascript:void(0);" class="btn btn-primary waves-effect" style="background: red" data-bs-toggle="modal" data-bs-target="#myModalUtama"> Rute Utama</a>
                            <a href="javascript:void(0);" class="btn btn-primary waves-effect" style="background: #b935b9" data-bs-toggle="modal" data-bs-target="#myModal1"> Rute Alternative</a>
                            <a href="javascript:void(0);" class="btn btn-primary waves-effect" style="background: gray" data-bs-toggle="modal" data-bs-target="#myModal2"> Rute Escape</a>
                            <a href="javascript:void(0);" class="btn btn-primary waves-effect" style="background: #000dda" data-bs-toggle="modal" data-bs-target="#myModal3"> Rute Masyarakat</a>
                            <a href="javascript:void(0);" class="btn btn-primary waves-effect" style="background: #bdbd0b" data-bs-toggle="modal" data-bs-target="#myModal4"> Rute Umum</a>
                            <button class="btn btn-primary float-end" type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <div class="modal fade" id="myModalUtama" tabindex="-1" role="dialog" data-bs-backdrop="static" aria-labelledby="myLargeModalLabelUtama" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary ">
                    <h5 class="modal-title text-white" id="myLargeModalLabelUtama">Tambah Utama</h5>
                    <!-- <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button> -->
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="mapG20Kegiatan" style="height: 500px"></div>
                        </div>
                    </div>

                    <div class="col-md-6 mt-3 float-end">
                        <button class="btn btn-primary float-end" id="submitAlternativeUtama" data-bs-toggle="modal" data-bs-target="#myModal">Simpan</button>
                        <!-- <button class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#myModal" style="margin: 5px">Kembali</button> -->
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" data-bs-backdrop="static" aria-labelledby="myLargeModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary ">
                    <h5 class="modal-title text-white" id="myLargeModalLabel1">Tambah Alternative</h5>
                    <!-- <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button> -->
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="mapG20Alternative1" style="height: 500px"></div>
                        </div>
                    </div>

                    <div class="col-md-6 mt-3 float-end">
                        <button class="btn btn-primary float-end" id="submitAlternative1" data-bs-toggle="modal" data-bs-target="#myModal">Simpan</button>
                        <!-- <button class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#myModal" style="margin: 5px">Kembali</button> -->
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" data-bs-backdrop="static" aria-labelledby="myLargeModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary ">
                    <h5 class="modal-title text-white" id="myLargeModalLabel2">Tambah Escape</h5>
                    <!-- <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button> -->
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="mapG20Alternative2" style="height: 500px"></div>
                        </div>
                    </div>

                    <div class="col-md-6 mt-3 float-end">
                        <button class="btn btn-primary float-end" id="submitAlternative2" data-bs-toggle="modal" data-bs-target="#myModal">Simpan</button>
                        <!-- <button class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#myModal" style="margin: 5px">Kembali</button> -->
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" data-bs-backdrop="static" aria-labelledby="myLargeModalLabel3" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary ">
                    <h5 class="modal-title text-white" id="myLargeModalLabel3">Tambah Masyarakat</h5>
                    <!-- <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button> -->
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="mapG20Alternative3" style="height: 500px"></div>
                        </div>
                    </div>

                    <div class="col-md-6 mt-3 float-end">
                        <button class="btn btn-primary float-end" id="submitAlternative3" data-bs-toggle="modal" data-bs-target="#myModal">Simpan</button>
                        <!-- <button class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#myModal" style="margin: 5px">Kembali</button> -->
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" data-bs-backdrop="static" aria-labelledby="myLargeModalLabel4" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary ">
                    <h5 class="modal-title text-white" id="myLargeModalLabel4">Tambah Masyarakat</h5>
                    <!-- <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button> -->
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="mapG20Alternative4" style="height: 500px"></div>
                        </div>
                    </div>

                    <div class="col-md-6 mt-3 float-end">
                        <button class="btn btn-primary float-end" id="submitAlternative4" data-bs-toggle="modal" data-bs-target="#myModal">Simpan</button>
                        <!-- <button class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#myModal" style="margin: 5px">Kembali</button> -->
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="myModalNoteKakor" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabelNoteKakor" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary ">
                    <h5 class="modal-title text-white" id="myLargeModalLabelNoteKakor">Tambah Catatan Uraian Kegiatan</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="formNoteKakor" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="<?= $csrf_name; ?>" value="<?= $csrf_token; ?>" style="display: none">
                        <div class="row">
                            <textarea hidden name="accountsNoteKakor" id="accountsNoteKakor" cols="5" rows="5"></textarea>
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input hidden style="width: 100%;" name="id" id="idNoteKakor" placeholder="" type="text">
                                    <input required class="form-control" name="note_kakor" id="noteKakor" placeholder="" type="text">
                                    <label for="noteKakor">Catatan Uraian Kegiatan</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating mb-3" id="statusRenpam">
                                    <!-- <input type="text" class="form-control" id="status" name="status"> -->
                                    <select name="statusNoteKakor" class="form-control" id="statusNoteKakor">
                                        <option value="">Pilih Status</option>
                                        <option value="0">Gagal</option>
                                        <option value="1">Berhasil</option>
                                        <option value="2">Tertunda</option>
                                    </select>
                                    <label for="statusNoteKakor">Status</label>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6 mt-3 float-end">
                            <button class="btn btn-primary float-end" type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="myModalPetugas" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabelPetugas" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary ">
                    <h5 class="modal-title text-white" id="myLargeModalLabelPetugas">Daftar Personil</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="isiModalPetugas">

                </div>
            </div>
        </div>
    </div>



    <!-- MODAL FOR FILTER -->
    <div class="modal right fade" id="myModalPoldaDisplay" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabelPoldaDisplay" aria-hidden="true" data-backdrop="false">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary ">
                    <h5 class="modal-title text-white" id="myLargeModalLabelPoldaDisplay">Polda</h5> &nbsp;<span class="badge bg-danger rounded-pill" id="totalPoldaDisplay"></span>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="openModalPoldaDisplay" style="width: 550px;">
                </div>
            </div>
        </div>
    </div>
    <div class="modal right fade" id="myModalPolresDisplay" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabelPolresDisplay" aria-hidden="true" data-backdrop="false">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary ">
                    <h5 class="modal-title text-white" id="myLargeModalLabelPolresDisplay">Polres</h5> &nbsp;<span class="badge bg-danger rounded-pill" id="totalPolresDisplay"></span>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="openModalPolresDisplay" style="width: 550px;">
                </div>
            </div>
        </div>
    </div>

    <div class="modal right fade" id="myModalJalurBeatDisplay" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabelJalurBeatDisplay" aria-hidden="true" data-backdrop="false">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary ">
                    <h5 class="modal-title text-white" id="myLargeModalLabelJalurBeatDisplay">Jalur Beat</h5> &nbsp;<span class="badge bg-danger rounded-pill" id="totalJalurBeatDisplay"></span>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="openModalJalurBeatDisplay" style="width: 550px;">
                </div>
            </div>
        </div>
    </div>

    <div class="modal right fade" id="myModalPetugasDisplay" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabelPetugasDisplay" aria-hidden="true" data-backdrop="false">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary ">
                    <div>
                        <div style="display: flex;">
                            <h5 class="modal-title text-white" id="myLargeModalLabelPetugasDisplay">Personil Lantas</h5>
                            &nbsp;<span class="badge bg-danger rounded-pill" id="totalPetugasDisplay"></span>
                        </div>
                        <b><?php echo format_indoHari(date('Y-m-d')) ?></b>
                    </div>

                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div style="margin-left: 15px;">
                    </br>
                    Total Aktif : &nbsp;<span class="badge bg-success rounded-pill" id="totalPetugasAktifDisplay"></span>
                    </br>
                    Total Tidak Aktif : &nbsp;<span class="badge bg-warning rounded-pill" id="totalPetugasTidakAktifDisplay"></span>
                    </br>
                    Jenis Kendaraan - Mobil Listrik : &nbsp;<span class="badge bg-info rounded-pill" id="totalPetugasCarListrikDisplay"></span>
                    </br>
                    Jenis Kendaraan - Sepeda Motor Listrik : &nbsp;<span class="badge bg-info rounded-pill" id="totalPetugasBikeListrikDisplay"></span>
                    </br>
                    Jenis Kendaraan - Mobil Fosil : &nbsp;<span class="badge bg-primary rounded-pill" id="totalPetugasCarFosilDisplay"></span>
                    </br>
                    Jenis Kendaraan - Sepeda Motor Fosil : &nbsp;<span class="badge bg-primary rounded-pill" id="totalPetugasBikeFosilDisplay"></span>
                    </br>
                    Petugas PAM ROLAKIR : &nbsp;<span class="badge rounded-pill" style="background-color: #800080;" id="totalPetugasNonDisplay"></span>

                </div>
                <div class="modal-body" id="openModalPetugasDisplay" style="width: 550px;">
                    <div id="overlayMenuDisplay">
                        <div class="loading">
                            <div class="spinner" style="margin-left: 55px;margin-bottom: 10px;"></div>
                            <p style="color: white; font-size: 15px; margin-left: 3px; text-align: center;">Mohon Tunggu </br> Fitur Akan Aktif Segera</p>
                        </div>
                    </div>
                    <table id="datatablePetugasOnDisplay" class="table dt-responsive w-100" style="font-size: 12px;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Delegasi</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="isiModalPetugasDisplay">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal right fade" id="myModalFasumKhususDisplay" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabelFasumKhususDisplay" aria-hidden="true" data-backdrop="false">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary ">
                    <h5 class="modal-title text-white" id="myLargeModalLabelFasumKhususDisplay">Fasilitas Khusus</h5> &nbsp;<span class="badge bg-danger rounded-pill" id="totalFasumKhususDisplay"></span>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="openModalFasumKhususDisplay" style="width: 550px;">
                </div>
            </div>
        </div>
    </div>
    <div class="modal right fade" id="myModalClusterDisplay" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabelClusterDisplay" aria-hidden="true" data-backdrop="false">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary ">
                    <h5 class="modal-title text-white" id="myLargeModalLabelClusterDisplay">Cluster</h5> &nbsp;<span class="badge bg-danger rounded-pill" id="totalClusterDisplay"></span>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="openModalClusterDisplay" style="width: 550px;">
                </div>
            </div>
        </div>
    </div>
    <div class="modal right fade" id="myModalGpsIdDisplay" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabelGpsIdDisplay" aria-hidden="true" data-backdrop="false">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary ">
                    <h5 class="modal-title text-white" id="myLargeModalLabelGpsIdDisplay">Kendaraan Listrik</h5> &nbsp;<span class="badge bg-danger rounded-pill" id="totalGpsIdDisplay"></span>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="openModalGpsIdDisplay" style="width: 550px;">
                </div>
            </div>
        </div>
    </div>
    <div class="modal right fade" id="myModalJadwalDisplay" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabelJadwalDisplay" aria-hidden="true" data-backdrop="false">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary ">
                    <h5 class="modal-title text-white" id="myLargeModalLabelJadwalDisplay">Jadwal Kegiatan</h5> &nbsp;<span class="badge bg-danger rounded-pill" id="totalJadwalDisplay"></span>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="openModalJadwalDisplay" style="width: 550px;">
                </div>
            </div>
        </div>
    </div>
    <div class="modal right fade" id="myModalCctvDisplay" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabelCctvDisplay" aria-hidden="true" data-backdrop="false">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary ">
                    <h5 class="modal-title text-white" id="myLargeModalLabelCctvDisplay">CCTV</h5> &nbsp;<span class="badge bg-danger rounded-pill" id="totalCctvDisplay"></span>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="openModalCctvDisplay" style="width: 550px;">
                </div>
            </div>
        </div>
    </div>
    <div class="modal right fade" id="myModalLaporanDisplay" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabelLaporanDisplay" aria-hidden="true" data-backdrop="false">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary ">
                    <h5 class="modal-title text-white" id="myLargeModalLabelLaporanDisplay">Laporan Operasi</h5> &nbsp;<span class="badge bg-danger rounded-pill" id="totalLaporanDisplay"></span>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="openModalLaporanDisplay" style="width: 550px;">
                </div>
            </div>
        </div>
    </div>
    <div class="modal right fade" id="myModalPanicDisplay" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabelPanicDisplay" aria-hidden="true" data-backdrop="false">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary ">
                    <h5 class="modal-title text-white" id="myLargeModalLabelPanicDisplay">Panic Button</h5> &nbsp;<span class="badge bg-danger rounded-pill" id="totalPanicDisplay"></span>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="openModalPanicDisplay" style="width: 550px;">
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.socket.io/4.5.3/socket.io.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/bataspolda/data/BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1.js"></script>
    <script>
        let app_url = '<%-app_url%>'
        let path = '<%-path%>'

        let data = [];
        let connected = false;
        var socket = io('http://103.163.139.100:3005/', {
            transports: ['websocket'],
            // socketRef.current = io('http://10.10.7.40:3001/', {
            path: '/socket.io',
            query: {


                username: "Kakor",
                password: "a",

                type: "Admin"
            }
        });
        var socketKe2 = io('http://103.163.139.100:3001/', {
            transports: ['websocket'],
            // socketRef.current = io('http://10.10.7.40:3001/', {
            path: '/socket.io',
            query: {


                username: "Kakor",
                password: "a",

                type: "Admin"
            }
        });
        // var socketGps = io('http://gps-so.korlantaspolri.id');

        // console.log({a:'ini soket' ,b:socket});
        var markerArray = new Array();
        var markerGpsId = new Array();
        var markerJadwal = new Array();
        var markerCCTV = new Array();
        var markerLaporanPanic = new Array();
        var markerLaporan = new Array();
        var markerFasum = new Array();
        var markerFasumKhusus = new Array();
        var markerCluster = new Array();
        var markerPolres = new Array();
        var markerPolda = new Array();
        var routingJadwal = new Array();

        var routingJadwalRenpam = new Array();
        var routingJadwalRenpam1 = new Array();
        var routingJadwalRenpam2 = new Array();
        var routingJadwalRenpam3 = new Array();
        var routingJadwalRenpam4 = new Array();

        var routingRenpam = new Array();
        var routingRenpam1 = new Array();
        var routingRenpam2 = new Array();
        var routingRenpam3 = new Array();
        var routingRenpam4 = new Array();
        var arrayFilter = [];
        var arrayFilterFasumKategori = [];

        var cctvClusterGroup;
        var jadwalClusterGroup;
        var fasumKhususClusterGroup;
        var laporanClusterGroup;
        var panicClusterGroup;
        var userDataTable;



        var dummyIdKendaraanGpsId = new Array();
        var autoGpsId;


        var autoGetLogout;


        var openDisplay = 'petugas';
        var ressFasumKhusus;
        var ressGetGpsId;

        var statusSocket = true;

        var dataTablePetugasDisplay;

        $(document).ready(function() {
            var marker = new Array();

            let filter = 0;
            let id = '<?= $data['id'] ?>'
            var date = new Date();
            var firstDay = new Date(date.getFullYear(), 0).toLocaleDateString("en-GB").split('/').reverse().join('-');
            var lastDay = new Date(date.getFullYear(), 11, 31).toLocaleDateString("en-GB").split('/').reverse().join('-');
            var polda_id = $('#polda_,#polda_id').val();
            // console.log(polda_id)

            // const offset = yourDate.getTimezoneOffset()
            // yourDate = new Date(yourDate.getTime() - (offset * 60 * 1000))
            // let a = firstDay.toISOString().split('T')[0]
            // let b = lastDay.toISOString().split('T')[0]
            // console.log(firstDay, lastDay)
            $("#overlay").fadeIn(300);
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>executive/polda_executive/getDetailPolda",
                data: {
                    id: id
                },
                dataType: "JSON",
                success: function(result) {
                    console.log(result);
                    var ressPoldaall = result.poldaall;
                    var ressPolda = result.polda;
                    var namaPolda = ressPolda['name_polda'];
                    $("#overlay").fadeOut(300);

                    for (let i = 0; i < ressPoldaall.length; i++) {
                        id = i;
                        var latitude = parseFloat(ressPoldaall[i].latitude);
                        var longitude = parseFloat(ressPoldaall[i].longitude);
                        marker = ([latitude, longitude])
                    }

                    $('#motor').html(`<span class="fs-6">${result.motor}</span class="fs-6">`);
                    $('#turjagwali').html(`<span class="fs-6">${result.turjagwali}</span class="fs-6">`);
                    $('#garlantas').html(`<span class="fs-6">${result.garlantas}</span class="fs-6">`);
                    $('#lakalantas').html(`<span class="fs-6">${result.lakalantas}</span class="fs-6">`);
                    $('#logo').html(`<img src="<?= url_api() . 'polda/logo/' ?>${ressPolda.logo_polda}" alt="img-polda" width="50px">`);
                    $('#nama').html(`<span class="fs-3 fw-bold" style="color:#007DD8 ; text-transform:uppercase;">Polda ${ressPolda.name_polda}</span>`);
                    $('#namaditgakkum').html(`<h4 class="card-title mb-0 text-uppercase">Data Ditgakkum Polda ${ressPolda.name_polda}</h4>`);
                    $('#namaditkamsel').html(`<h4 class="card-title mb-0 text-uppercase">Data Ditkamsel Polda ${ressPolda.name_polda}</h4>`);
                    $('#namaditregident').html(`<h4 class="card-title mb-0 text-uppercase">Data Ditregident Polda ${ressPolda.name_polda}</h4>`);
                    $('#statistik').html(`<h4 style="text-transform: uppercase; color:#007DD8;">Statistik Polda ${ressPolda.name_polda}</h4>`);
                    $('#polda_').html(`<label for="waktu" class="form-label  text-uppercase">Wilayah</label>
                        <select class="form-control" id="polda_id" name="polda_id">
                            <option value="${result.polda.id}">Polda ${result.polda.name_polda}</option>
                        </select>
                        `)
                    $.each(ressPoldaall, (i, resp) => {
                        $('#polda_id').append(`<option value="${resp.id}">Polda ${resp.name_polda}</option>`)
                    })
                    $("#charta").html(`<div id="chart"></div>`);
                    $("#chartb").html(`<div id="chart2"></div>`);
                    $("#chartc").html(`<div id="chart3"></div>`);



                    let zxc = ressPolda.zoomview.split(",")
                    let lat = parseFloat(zxc[0])
                    let long = parseFloat(zxc[1])


                    var initialCenter = [lat, long];

                    var initialZoom = 9;


                    var googleStreet = L.tileLayer('https://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
                        maxZoom: 20,
                        subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
                    });
                    var googleHybrid = L.tileLayer('https://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
                        maxZoom: 20,
                        subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
                        attribution: '&copy; <a href="https://maps.google.com/">Google Map <?= date('Y') ?></a> contributors'
                    });
                    var googleSatelite = L.tileLayer('https://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
                        maxZoom: 20,
                        subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
                        attribution: '&copy; <a href="https://maps.google.com/">Google Map <?= date('Y') ?></a> contributors'
                    });
                    var googleTerrain = L.tileLayer('https://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}', {
                        maxZoom: 20,
                        subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
                        attribution: '&copy; <a href="https://maps.google.com/">Google Map <?= date('Y') ?></a> contributors'
                    });
                    var gl = L.mapboxGL({
                        accessToken: 'pk.eyJ1IjoibW9yZ2Vua2FmZmVlIiwiYSI6IjIzcmN0NlkifQ.0LRTNgCc-envt9d5MzR75w',
                        style: 'mapbox://styles/mapbox/traffic-day-v2'
                    });

                    var trafficMutant = L.gridLayer.googleMutant({
                        maxZoom: 24,
                        type: "hybrid",
                    }).addGoogleLayer("TrafficLayer");

                    var trafficMutantRoad = L.gridLayer.googleMutant({
                        maxZoom: 24,
                        type: "roadmap",
                    }).addGoogleLayer("TrafficLayer");



                    // StART MAP SECTION
                    var mapContainer = L.map('mapG20Dashboard', {
                        maxZoom: 20,
                        minZoom: 1,
                        zoomSnap: 0.25,
                        zoomControl: false,
                        layers: [googleHybrid]
                    }).setView(initialCenter, initialZoom);

                    var myRenderer = L.canvas({
                        padding: 0.5
                    });

                    var markerClusterGroup = L.markerClusterGroup();
                    var icon = L.icon({
                        iconUrl: 'http://tourbanyuwangi.com/wp-content/uploads/2018/05/map.png',
                        iconSize: [80, 80], // size of the icon
                    });


                    var baseMaps = {
                        "Google Map Street": googleStreet,
                        "Google Map Satelite": googleSatelite,
                        "Google Map Hybrid": googleHybrid,
                        "Google Map Terrain": googleTerrain,
                        "Google Map Street Traffic": trafficMutantRoad,
                        "Google Map Hybrid Traffic": trafficMutant,
                        "MappBox Traffic": gl,
                    };
                    var overlayMaps = {

                    };
                    L.control.layers(baseMaps, overlayMaps, {
                        position: 'topright'
                    }).addTo(mapContainer);
                    L.control.zoom({
                        position: 'topright'
                    }).addTo(mapContainer);

                    mapContainer.doubleClickZoom.enable();





                    var autolinker = new Autolinker({
                        truncate: {
                            length: 30,
                            location: 'smart'
                        }
                    });
                    var bounds_group = new L.featureGroup([]);

                    function setBounds() {}


                    function pop_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1(feature, layer) {
                        var popupContent = `<table> 
                            <tr>
                                <h5>Provinsi</h5>
                                <td colspan="2"> ${feature.properties['PROVINSI'] !== null ? autolinker.link(feature.properties['PROVINSI'].toLocaleString()) : ''} </td>
                            </tr> 
                        </table>`;
                        layer.bindPopup(popupContent, {
                            maxHeight: 400
                        });
                    }

                    function style_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1_0(feature) {
                        switch (String(feature.properties['PROVINSI'])) {
                            case 'ACEH':
                                return {
                                    pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                                        opacity: 1,
                                        color: 'rgba(51,160,44,1.0)',
                                        dashArray: '10,5',
                                        lineCap: 'butt',
                                        lineJoin: 'miter',
                                        weight: 3.0,
                                        fill: true,
                                        fillOpacity: 1,
                                        fillColor: 'rgba(215,25,28,0.00392156862745098)',
                                        interactive: true,
                                }
                                break;
                            case 'BALI':
                                return {
                                    pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                                        opacity: 1,
                                        color: 'rgba(255,5,13,1.0)',
                                        dashArray: '10,5',
                                        lineCap: 'butt',
                                        lineJoin: 'miter',
                                        weight: 3.0,
                                        fill: true,
                                        fillOpacity: 1,
                                        fillColor: 'rgba(219,43,36,0.0)',
                                        interactive: true,
                                }
                                break;
                            case 'BANTEN':
                                return {
                                    pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                                        opacity: 1,
                                        color: 'rgba(0,0,0,1.0)',
                                        dashArray: '10,5',
                                        lineCap: 'butt',
                                        lineJoin: 'miter',
                                        weight: 3.0,
                                        fill: true,
                                        fillOpacity: 1,
                                        fillColor: 'rgba(224,60,44,0.0)',
                                        interactive: true,
                                }
                                break;
                            case 'BENGKULU':
                                return {
                                    pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                                        opacity: 1,
                                        color: 'rgba(251,230,44,1.0)',
                                        dashArray: '10,5',
                                        lineCap: 'butt',
                                        lineJoin: 'miter',
                                        weight: 3.0,
                                        fill: true,
                                        fillOpacity: 1,
                                        fillColor: 'rgba(228,78,52,0.0)',
                                        interactive: true,
                                }
                                break;
                            case 'DAERAH ISTIMEWA YOGYAKARTA':
                                return {
                                    pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                                        opacity: 1,
                                        color: 'rgba(73,211,126,1.0)',
                                        dashArray: '10,5',
                                        lineCap: 'butt',
                                        lineJoin: 'miter',
                                        weight: 3.0,
                                        fill: true,
                                        fillOpacity: 1,
                                        fillColor: 'rgba(233,95,60,0.0)',
                                        interactive: true,
                                }
                                break;
                            case 'DKI JAKARTA':
                                return {
                                    pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                                        opacity: 1,
                                        color: 'rgba(166,206,227,1.0)',
                                        dashArray: '10,5',
                                        lineCap: 'butt',
                                        lineJoin: 'miter',
                                        weight: 3.0,
                                        fill: true,
                                        fillOpacity: 1,
                                        fillColor: 'rgba(237,113,69,0.0)',
                                        interactive: true,
                                }
                                break;
                            case 'GORONTALO':
                                return {
                                    pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                                        opacity: 1,
                                        color: 'rgba(178,223,138,1.0)',
                                        dashArray: '10,5',
                                        lineCap: 'butt',
                                        lineJoin: 'miter',
                                        weight: 3.0,
                                        fill: true,
                                        fillOpacity: 1,
                                        fillColor: 'rgba(242,130,77,0.0)',
                                        interactive: true,
                                }
                                break;
                            case 'JAMBI':
                                return {
                                    pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                                        opacity: 1,
                                        color: 'rgba(255,127,0,1.0)',
                                        dashArray: '10,5',
                                        lineCap: 'butt',
                                        lineJoin: 'miter',
                                        weight: 3.0,
                                        fill: true,
                                        fillOpacity: 1,
                                        fillColor: 'rgba(246,148,85,0.0)',
                                        interactive: true,
                                }
                                break;
                            case 'JAWA BARAT':
                                return {
                                    pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                                        opacity: 1,
                                        color: 'rgba(202,0,32,1.0)',
                                        dashArray: '10,5',
                                        lineCap: 'butt',
                                        lineJoin: 'miter',
                                        weight: 3.0,
                                        fill: true,
                                        fillOpacity: 1,
                                        fillColor: 'rgba(251,165,93,0.0196078431372549)',
                                        interactive: true,
                                }
                                break;
                            case 'JAWA TENGAH':
                                return {
                                    pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                                        opacity: 1,
                                        color: 'rgba(251,154,153,1.0)',
                                        dashArray: '10,5',
                                        lineCap: 'butt',
                                        lineJoin: 'miter',
                                        weight: 3.0,
                                        fill: true,
                                        fillOpacity: 1,
                                        fillColor: 'rgba(253,179,103,0.0)',
                                        interactive: true,
                                }
                                break;
                            case 'JAWA TIMUR':
                                return {
                                    pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                                        opacity: 1,
                                        color: 'rgba(166,206,227,1.0)',
                                        dashArray: '10,5',
                                        lineCap: 'butt',
                                        lineJoin: 'miter',
                                        weight: 3.0,
                                        fill: true,
                                        fillOpacity: 1,
                                        fillColor: 'rgba(253,188,114,0.0)',
                                        interactive: true,
                                }
                                break;
                            case 'KALIMANTAN BARAT':
                                return {
                                    pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                                        opacity: 1,
                                        color: 'rgba(31,120,180,1.0)',
                                        dashArray: '10,5',
                                        lineCap: 'butt',
                                        lineJoin: 'miter',
                                        weight: 3.0,
                                        fill: true,
                                        fillOpacity: 1,
                                        fillColor: 'rgba(254,198,125,0.0)',
                                        interactive: true,
                                }
                                break;
                            case 'KALIMANTAN SELATAN':
                                return {
                                    pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                                        opacity: 1,
                                        color: 'rgba(253,191,111,1.0)',
                                        dashArray: '10,5',
                                        lineCap: 'butt',
                                        lineJoin: 'miter',
                                        weight: 3.0,
                                        fill: true,
                                        fillOpacity: 1,
                                        fillColor: 'rgba(254,207,136,0.0)',
                                        interactive: true,
                                }
                                break;
                            case 'KALIMANTAN TENGAH':
                                return {
                                    pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                                        opacity: 1,
                                        color: 'rgba(178,223,138,1.0)',
                                        dashArray: '10,5',
                                        lineCap: 'butt',
                                        lineJoin: 'miter',
                                        weight: 3.0,
                                        fill: true,
                                        fillOpacity: 1,
                                        fillColor: 'rgba(254,217,147,0.0)',
                                        interactive: true,
                                }
                                break;
                            case 'KALIMANTAN TIMUR':
                                return {
                                    pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                                        opacity: 1,
                                        color: 'rgba(145,82,45,1.0)',
                                        dashArray: '10,5',
                                        lineCap: 'butt',
                                        lineJoin: 'miter',
                                        weight: 3.0,
                                        fill: true,
                                        fillOpacity: 1,
                                        fillColor: 'rgba(254,226,158,0.0)',
                                        interactive: true,
                                }
                                break;
                            case 'KALIMANTAN UTARA':
                                return {
                                    pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                                        opacity: 1,
                                        color: 'rgba(213,180,60,1.0)',
                                        dashArray: '10,5',
                                        lineCap: 'butt',
                                        lineJoin: 'miter',
                                        weight: 3.0,
                                        fill: true,
                                        fillOpacity: 1,
                                        fillColor: 'rgba(255,236,170,0.0)',
                                        interactive: true,
                                }
                                break;
                            case 'KEPULAUAN BANGKA BELITUNG':
                                return {
                                    pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                                        opacity: 1,
                                        color: 'rgba(141,90,153,1.0)',
                                        dashArray: '10,5',
                                        lineCap: 'butt',
                                        lineJoin: 'miter',
                                        weight: 3.0,
                                        fill: true,
                                        fillOpacity: 1,
                                        fillColor: 'rgba(255,245,181,0.0)',
                                        interactive: true,
                                }
                                break;
                            case 'KEPULAUAN RIAU':
                                return {
                                    pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                                        opacity: 1,
                                        color: 'rgba(232,113,141,1.0)',
                                        dashArray: '10,5',
                                        lineCap: 'butt',
                                        lineJoin: 'miter',
                                        weight: 3.0,
                                        fill: true,
                                        fillOpacity: 1,
                                        fillColor: 'rgba(255,255,192,0.0)',
                                        interactive: true,
                                }
                                break;
                            case 'LAMPUNG':
                                return {
                                    pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                                        opacity: 1,
                                        color: 'rgba(190,178,151,1.0)',
                                        dashArray: '10,5',
                                        lineCap: 'butt',
                                        lineJoin: 'miter',
                                        weight: 3.0,
                                        fill: true,
                                        fillOpacity: 1,
                                        fillColor: 'rgba(245,251,182,0.0)',
                                        interactive: true,
                                }
                                break;
                            case 'MALUKU':
                                return {
                                    pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                                        opacity: 1,
                                        color: 'rgba(183,72,75,1.0)',
                                        dashArray: '10,5',
                                        lineCap: 'butt',
                                        lineJoin: 'miter',
                                        weight: 3.0,
                                        fill: true,
                                        fillOpacity: 1,
                                        fillColor: 'rgba(234,246,172,0.0)',
                                        interactive: true,
                                }
                                break;
                            case 'MALUKU UTARA':
                                return {
                                    pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                                        opacity: 1,
                                        color: 'rgba(225,89,137,1.0)',
                                        dashArray: '10,5',
                                        lineCap: 'butt',
                                        lineJoin: 'miter',
                                        weight: 3.0,
                                        fill: true,
                                        fillOpacity: 1,
                                        fillColor: 'rgba(224,242,162,0.0)',
                                        interactive: true,
                                }
                                break;
                            case 'NUSA TENGGARA BARAT':
                                return {
                                    pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                                        opacity: 1,
                                        color: 'rgba(125,139,143,1.0)',
                                        dashArray: '10,5',
                                        lineCap: 'butt',
                                        lineJoin: 'miter',
                                        weight: 3.0,
                                        fill: true,
                                        fillOpacity: 1,
                                        fillColor: 'rgba(213,237,152,0.0)',
                                        interactive: true,
                                }
                                break;
                            case 'NUSA TENGGARA TIMUR':
                                return {
                                    pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                                        opacity: 1,
                                        color: 'rgba(213,180,60,1.0)',
                                        dashArray: '10,5',
                                        lineCap: 'butt',
                                        lineJoin: 'miter',
                                        weight: 3.0,
                                        fill: true,
                                        fillOpacity: 1,
                                        fillColor: 'rgba(203,233,141,0.0)',
                                        interactive: true,
                                }
                                break;
                            case 'PAPUA':
                                return {
                                    pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                                        opacity: 1,
                                        color: 'rgba(243,166,178,1.0)',
                                        dashArray: '10,5',
                                        lineCap: 'butt',
                                        lineJoin: 'miter',
                                        weight: 3.0,
                                        fill: true,
                                        fillOpacity: 1,
                                        fillColor: 'rgba(192,228,131,0.0)',
                                        interactive: true,
                                }
                                break;
                            case 'PAPUA BARAT':
                                return {
                                    pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                                        opacity: 1,
                                        color: 'rgba(125,183,140,1.0)',
                                        dashArray: '10,5',
                                        lineCap: 'butt',
                                        lineJoin: 'miter',
                                        weight: 3.0,
                                        fill: true,
                                        fillOpacity: 1,
                                        fillColor: 'rgba(182,224,121,0.0)',
                                        interactive: true,
                                }
                                break;
                            case 'RIAU':
                                return {
                                    pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                                        opacity: 1,
                                        color: 'rgba(150,227,255,1.0)',
                                        dashArray: '10,5',
                                        lineCap: 'butt',
                                        lineJoin: 'miter',
                                        weight: 3.0,
                                        fill: true,
                                        fillOpacity: 1,
                                        fillColor: 'rgba(171,219,111,0.0)',
                                        interactive: true,
                                }
                                break;
                            case 'SULAWESI BARAT':
                                return {
                                    pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                                        opacity: 1,
                                        color: 'rgba(125,183,162,1.0)',
                                        dashArray: '10,5',
                                        lineCap: 'butt',
                                        lineJoin: 'miter',
                                        weight: 3.0,
                                        fill: true,
                                        fillOpacity: 1,
                                        fillColor: 'rgba(158,213,104,0.0)',
                                        interactive: true,
                                }
                                break;
                            case 'SULAWESI SELATAN':
                                return {
                                    pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                                        opacity: 1,
                                        color: 'rgba(153,164,88,1.0)',
                                        dashArray: '10,5',
                                        lineCap: 'butt',
                                        lineJoin: 'miter',
                                        weight: 3.0,
                                        fill: true,
                                        fillOpacity: 1,
                                        fillColor: 'rgba(141,205,99,0.0)',
                                        interactive: true,
                                }
                                break;
                            case 'SULAWESI TENGAH':
                                return {
                                    pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                                        opacity: 1,
                                        color: 'rgba(198,113,232,1.0)',
                                        dashArray: '10,5',
                                        lineCap: 'butt',
                                        lineJoin: 'miter',
                                        weight: 3.0,
                                        fill: true,
                                        fillOpacity: 1,
                                        fillColor: 'rgba(125,197,94,0.0)',
                                        interactive: true,
                                }
                                break;
                            case 'SULAWESI TENGGARA':
                                return {
                                    pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                                        opacity: 1,
                                        color: 'rgba(98,113,72,1.0)',
                                        dashArray: '10,5',
                                        lineCap: 'butt',
                                        lineJoin: 'miter',
                                        weight: 3.0,
                                        fill: true,
                                        fillOpacity: 1,
                                        fillColor: 'rgba(108,189,89,0.0)',
                                        interactive: true,
                                }
                                break;
                            case 'SULAWESI UTARA':
                                return {
                                    pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                                        opacity: 1,
                                        color: 'rgba(231,209,72,1.0)',
                                        dashArray: '10,5',
                                        lineCap: 'butt',
                                        lineJoin: 'miter',
                                        weight: 3.0,
                                        fill: true,
                                        fillOpacity: 1,
                                        fillColor: 'rgba(92,182,84,0.0)',
                                        interactive: true,
                                }
                                break;
                            case 'SUMATERA BARAT':
                                return {
                                    pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                                        opacity: 1,
                                        color: 'rgba(80,207,104,1.0)',
                                        dashArray: '10,5',
                                        lineCap: 'butt',
                                        lineJoin: 'miter',
                                        weight: 3.0,
                                        fill: true,
                                        fillOpacity: 1,
                                        fillColor: 'rgba(75,174,79,0.0)',
                                        interactive: true,
                                }
                                break;
                            case 'SUMATERA SELATAN':
                                return {
                                    pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                                        opacity: 1,
                                        color: 'rgba(141,125,143,1.0)',
                                        dashArray: '10,5',
                                        lineCap: 'butt',
                                        lineJoin: 'miter',
                                        weight: 3.0,
                                        fill: true,
                                        fillOpacity: 1,
                                        fillColor: 'rgba(59,166,75,0.0)',
                                        interactive: true,
                                }
                                break;
                            case 'SUMATERA UTARA':
                                return {
                                    pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                                        opacity: 1,
                                        color: 'rgba(35,35,35,1.0)',
                                        dashArray: '10,5',
                                        lineCap: 'butt',
                                        lineJoin: 'miter',
                                        weight: 3.0,
                                        fill: true,
                                        fillOpacity: 1,
                                        fillColor: 'rgba(42,158,70,0.0)',
                                        interactive: true,
                                }
                                break;
                            default:
                                return {
                                    pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                                        opacity: 1,
                                        color: 'rgba(35,35,35,1.0)',
                                        dashArray: '',
                                        lineCap: 'butt',
                                        lineJoin: 'miter',
                                        weight: 1.0,
                                        fill: true,
                                        fillOpacity: 1,
                                        fillColor: 'rgba(26,150,65,1.0)',
                                        interactive: true,
                                }
                                break;
                        }
                    }
                    mapContainer.createPane('pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1');
                    mapContainer.getPane('pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1').style.zIndex = 401;
                    mapContainer.getPane('pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1').style['mix-blend-mode'] = 'normal';
                    var layer_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1 = new L.geoJson(json_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1, {
                        attribution: '',
                        interactive: true,
                        dataVar: 'json_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                        layerName: 'layer_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                        pane: 'pane_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1',
                        onEachFeature: pop_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1,
                        style: style_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1_0,
                    });
                    bounds_group.addLayer(layer_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1);
                    mapContainer.addLayer(layer_BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL_1);
                    setBounds();


                    socket.on("connected", function(resSocket) {
                        console.log(socket.id);
                        console.log(resSocket);
                        console.log('ido1');
                    });
                    socketKe2.on("connected", function(resSocket) {
                        console.log(socketKe2.id);
                        console.log(resSocket);
                        console.log('ido1');
                    });
                    // socket.emit("trackingUser", {
                    //     lat: 1234,
                    //     lon: 1234234
                    // }) 

                    function client() {
                        $(".goPetugas").on("click", function(event) {
                            mapContainer.flyTo([parseFloat($(this).data("lat")), parseFloat($(this).data("lng"))], 17);
                            $('html, body').animate({
                                scrollTop: 0
                            }, '300');
                            // alert($(this).data("lat"));
                        });
                    }


                    $("[name=searchAlamat]").on("change", function(e) {
                        $('#listAddress').show();
                        // console.log(this.value);
                        $.get(`https://nominatim.openstreetmap.org/search?format=json&q=${this.value}`, function(ress) {
                            console.log(ress);
                            countlist = 0;
                            list = "";
                            ress.forEach(el => {
                                countlist += 1;
                                list += `<a class="list-group-item" style="width: 300px;"
                            id="list${countlist}"   
                            data-alamat="${el.display_name}"
                            data-cords="${el.lat},${el.lon}" href="javascript:void(0)">${el.display_name}</a>`;
                                $('#listAddress').html(list);
                            });


                            if (list == "") {
                                countlist = 0;
                                list = "";
                                $('#listAddress').html(list);
                            }


                            for (let i = 0; i < ress.length; i++) {
                                $(`#list${i+1}`).click(function() {
                                    var latlong = $(this).data('cords').split(',');
                                    var latitude = parseFloat(latlong[0]);
                                    var longitude = parseFloat(latlong[1]);

                                    $('#listAddress').hide();
                                    // console.log({a:latitude, b:longitude});
                                    $('[name=address]').val($(this).data('alamat'));
                                    $('[name=cordinate]').val($(this).data('cords'));
                                    mapContainer.flyTo([latitude, longitude], 17);
                                });
                            }
                        });
                    });

                    function getGpsId() {
                        $.ajax({
                            type: "POST",
                            url: "<?php echo base_url(); ?>dashboard/gpsIdPost",
                            data: {
                                "status": '1',
                            },
                            dataType: "JSON",
                            success: function(result) {
                                // console.log({a:'ini GPS ID', b:result[0]['data']});
                                var ress = result[0]['data'];
                                ressGetGpsId = ress;

                                var jenis = ``;
                                ress.forEach(el => {

                                    var validasiId = dummyIdKendaraanGpsId.filter(function(val) {
                                        return val == el.VehicleId;
                                    });
                                    if (validasiId > 0) {
                                        // console.log('id sudah ada');
                                    } else {
                                        dummyIdKendaraanGpsId.push(el.VehicleId);
                                        // console.log('id tidak ada');
                                    }


                                    if (el.VehicleType == 'Motorcycle') {
                                        jenis = `
                                    <div>
                                        <div>
                                            <img src="<?php echo base_url(); ?>assets/icon/gpsIdMotor.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">
                                        </div>
                                        <div style="margin-top: -30px;">
                                        <span class="badge rounded-pill" style="background-color: #169fda">${el.VehicleNumber}</span>
                                        </div>
                                    </div>`;
                                    } else {
                                        jenis = `
                                    <div>
                                        <div>
                                            <img src="<?php echo base_url(); ?>assets/icon/gpsIdMobil.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">
                                        </div>
                                        <div style="margin-top: -30px;">
                                        <span class="badge rounded-pill" style="background-color: #169fda">${el.VehicleNumber}</span>
                                        </div>
                                    </div>`;
                                    }

                                    if (markerGpsId[el.VehicleId] != null) {
                                        var fotoPetugas = "";
                                        markerGpsId[el.VehicleId].setLatLng([el.Lat, el.Lon], {
                                            icon: L.divIcon({
                                                // className: 'location-pin',
                                                html: jenis,
                                                iconSize: [5, 5],
                                                iconAnchor: [5, 10]
                                                // iconAnchor: [10, 33]
                                            })
                                        }).bindPopup(`
                                        <div class="text-center" style="width: 300px;">  
                                            <div class="row mt-3"> 
                                                <div class="col-md-12" id="benderaForGpsId${el.VehicleId}">
                                                
                                                </div> 
                                            </div>
                                            <div class="row text-start mt-3">
                                                <div class="col-md-4">
                                                    <span style="font-size: 12px;font-weight: bold;">Nomor Polisi</span>  
                                                </div>
                                                <div class="col-md-8">
                                                    <span style="font-size: 12px;">: &nbsp;&nbsp;&nbsp;${el.VehicleNumber}</span>
                                                </div>  

                                                <div class="col-md-4">
                                                    <span style="font-size: 12px;font-weight: bold;">Status Mobil</span>  
                                                </div> 
                                                <div class="col-md-8">
                                                    : &nbsp;&nbsp;&nbsp;<span class="badge rounded-pill bg-primary" style="font-size: 12px;">${el.Car_Status}</span> 
                                                </div>  

                                                <div class="col-md-4">
                                                    <span style="font-size: 12px;font-weight: bold;">Kecepatan</span>  
                                                </div> 
                                                <div class="col-md-8">
                                                    <span style="font-size: 12px;">: &nbsp;&nbsp;&nbsp;${el.Speed}</span>
                                                </div>    

                                                <div class="col-md-4">
                                                    <span style="font-size: 12px;font-weight: bold;">Odometer</span>  
                                                </div> 
                                                <div class="col-md-8">
                                                    <span style="font-size: 12px;">: &nbsp;&nbsp;&nbsp;${el.Odometer}</span>
                                                </div>   

                                                <div class="col-md-4">
                                                    <span style="font-size: 12px;font-weight: bold;">Status Engine</span>  
                                                </div> 
                                                <div class="col-md-8">
                                                    <span style="font-size: 12px;">: &nbsp;&nbsp;&nbsp;${el.Engine}</span>
                                                </div>  

                                                <div class="col-md-4">
                                                    <span style="font-size: 12px;font-weight: bold;">Petugas 1</span>  
                                                </div> 
                                                <div class="col-md-8">
                                                    <span style="font-size: 12px;">: &nbsp;&nbsp;&nbsp;${el.Petugas1}</span>
                                                </div>  

                                                <div class="col-md-4">
                                                    <span style="font-size: 12px;font-weight: bold;">Petugas 2</span>  
                                                </div> 
                                                <div class="col-md-8">
                                                    <span style="font-size: 12px;">: &nbsp;&nbsp;&nbsp;${el.Petugas2}</span>
                                                </div>  

                                                <div class="col-md-4">
                                                    <span style="font-size: 12px;font-weight: bold;">Delegasi</span>  
                                                </div> 
                                                <div class="col-md-8">
                                                    <span style="font-size: 12px;" id="namaDelegasiGpsId${el.VehicleId}"></span>
                                                </div>  

                                                <div class="col-md-12 text-center  mt-3">
                                                    <span class="badge rounded-pill bg-primary" style="font-size: 12px;">Lokasi Kendaraan</span>  
                                                    <p style="font-size: 12px;">${el.GpsLocation}</p>
                                                </div> 
                                            </div> 
                                                
                                        </div>
                                    `).update().on('click', function(e) {
                                            // console.log('click marker');
                                            $.ajax({
                                                type: "POST",
                                                url: "<?php echo base_url(); ?>dashboard/getIdCountry",
                                                data: {
                                                    "id_country": el.Delegasi,
                                                },
                                                dataType: "JSON",
                                                success: function(result) {
                                                    if (result['data'] != null) {
                                                        $(`#namaDelegasiGpsId${el.VehicleId}`).html(`: &nbsp;&nbsp;&nbsp; ${result['data']['name_country']}`);
                                                        $(`#benderaForGpsId${el.VehicleId}`).html(`<a href="javascript:void(0);"><img alt="" style="width: 20%;margin-bottom: 10px;" src="<?= url_api() ?>country/${result['data']['photo_country']}"></a>`);
                                                    }
                                                }
                                            });
                                        });
                                    } else {
                                        markerGpsId[el.VehicleId] = L.marker([el.Lat, el.Lon], {
                                            icon: L.divIcon({
                                                // className: 'location-pin',
                                                html: jenis,
                                                iconSize: [5, 5],
                                                iconAnchor: [5, 10]
                                                // iconAnchor: [10, 33]
                                            })
                                        }).bindPopup(`
                                        <div class="text-center" style="width: 300px;">  
                                            <div class="row mt-3"> 
                                                <div class="col-md-12"  id="benderaForGpsId${el.VehicleId}">
                                            
                                                </div> 
                                            </div>
                                            
                                            <div class="row text-start mt-3">
                                                <div class="col-md-4">
                                                    <span style="font-size: 12px;font-weight: bold;">Nama</span>  
                                                </div>
                                                <div class="col-md-8">
                                                    <span style="font-size: 12px;">: &nbsp;&nbsp;&nbsp;${el.VehicleNumber}</span>
                                                </div>   

                                                <div class="col-md-4">
                                                    <span style="font-size: 12px;font-weight: bold;">Status Mobil</span>  
                                                </div> 
                                                <div class="col-md-8">
                                                    : &nbsp;&nbsp;&nbsp;<span class="badge rounded-pill bg-primary" style="font-size: 12px;">${el.Car_Status}</span> 
                                                </div>  

                                                <div class="col-md-4">
                                                    <span style="font-size: 12px;font-weight: bold;">Kecepatan</span>  
                                                </div> 
                                                <div class="col-md-8">
                                                    <span style="font-size: 12px;">: &nbsp;&nbsp;&nbsp;${el.Speed}</span>
                                                </div>    

                                                <div class="col-md-4">
                                                    <span style="font-size: 12px;font-weight: bold;">Odometer</span>  
                                                </div> 
                                                <div class="col-md-8">
                                                    <span style="font-size: 12px;">: &nbsp;&nbsp;&nbsp;${el.Odometer}</span>
                                                </div>   

                                                <div class="col-md-4">
                                                    <span style="font-size: 12px;font-weight: bold;">Status Engine</span>  
                                                </div> 
                                                <div class="col-md-8">
                                                    <span style="font-size: 12px;">: &nbsp;&nbsp;&nbsp;${el.Engine}</span>
                                                </div> 

                                                <div class="col-md-4">
                                                    <span style="font-size: 12px;font-weight: bold;">Petugas 1</span>  
                                                </div> 
                                                <div class="col-md-8">
                                                    <span style="font-size: 12px;">: &nbsp;&nbsp;&nbsp;${el.Petugas1}</span>
                                                </div>  

                                                <div class="col-md-4">
                                                    <span style="font-size: 12px;font-weight: bold;">Petugas 2</span>  
                                                </div> 
                                                <div class="col-md-8">
                                                    <span style="font-size: 12px;">: &nbsp;&nbsp;&nbsp;${el.Petugas2}</span>
                                                </div>  

                                                <div class="col-md-4">
                                                    <span style="font-size: 12px;font-weight: bold;">Delegasi</span>  
                                                </div> 
                                                <div class="col-md-8">
                                                    <span style="font-size: 12px;" id="namaDelegasiGpsId${el.VehicleId}"></span>
                                                </div>   

                                                <div class="col-md-12 text-center  mt-3">
                                                    <span class="badge rounded-pill bg-primary" style="font-size: 12px;">Lokasi Kendaraan</span>  
                                                    <p style="font-size: 12px;">${el.GpsLocation}</p>
                                                </div> 
                                            </div> 
                                                
                                        </div>
                                    `).addTo(mapContainer).on('click', function(e) {
                                            // console.log('click marker');
                                            $.ajax({
                                                type: "POST",
                                                url: "<?php echo base_url(); ?>dashboard/getIdCountry",
                                                data: {
                                                    "id_country": el.Delegasi,
                                                },
                                                dataType: "JSON",
                                                success: function(result) {
                                                    if (result['data'] != null) {
                                                        $(`#namaDelegasiGpsId${el.VehicleId}`).html(`: &nbsp;&nbsp;&nbsp; ${result['data']['name_country']}`);
                                                        $(`#benderaForGpsId${el.VehicleId}`).html(`<a href="javascript:void(0);"><img alt="" style="width: 20%;margin-bottom: 10px;" src="<?= url_api() ?>country/${result['data']['photo_country']}"></a>`);
                                                    }
                                                }
                                            });
                                        });
                                    }
                                });

                            }
                        });
                    }


                    function gpsId() {
                        fetch('<?php echo base_url() ?>dataVendor/gpsId.json')
                            .then((response) => response.json())
                            .then((ress) => {
                                // console.log(ress[0].VehicleNumber);
                                var validasiId = dummyIdKendaraanGpsId.filter(function(val) {
                                    return val == ress[0].VehicleId;
                                });
                                if (validasiId > 0) {
                                    // console.log('id sudah ada');
                                } else {
                                    dummyIdKendaraanGpsId.push(ress[0].VehicleId);
                                    // console.log('id tidak ada');
                                }

                                var jenis = ``;

                                if (ress[0].VehicleType == 'Motorcycle') {
                                    jenis = `
                            <div>
                                <div>
                                    <img src="<?php echo base_url(); ?>assets/icon/gpsIdMotor.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">
                                </div>
                                <div style="margin-top: -30px;">
                                <span class="badge rounded-pill" style="background-color: #169fda">${ress[0].VehicleNumber}</span>
                                </div>
                            </div>`;
                                } else {
                                    jenis = `
                            <div>
                                <div>
                                    <img src="<?php echo base_url(); ?>assets/icon/gpsIdMobil.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">
                                </div>
                                <div style="margin-top: -30px;">
                                <span class="badge rounded-pill" style="background-color: #169fda">${ress[0].VehicleNumber}</span>
                                </div>
                            </div>`;
                                }



                                if (markerGpsId[ress[0].VehicleId] != null) {
                                    var fotoPetugas = "";
                                    markerGpsId[ress[0].VehicleId].setLatLng([ress[0].Lat, ress[0].Lon], {
                                        icon: L.divIcon({
                                            // className: 'location-pin',
                                            html: jenis,
                                            iconSize: [5, 5],
                                            iconAnchor: [5, 10]
                                            // iconAnchor: [10, 33]
                                        })
                                    }).bindPopup(`
                                <div class="text-center" style="width: 300px;">  
                                    <div class="row mt-3"> 
                                        <div class="col-md-12" id="benderaForGpsId${ress[0].VehicleId}">
                                        
                                        </div> 
                                    </div>
                                    <div class="row text-start mt-3">
                                        <div class="col-md-4">
                                            <span style="font-size: 12px;font-weight: bold;">Nomor Polisi</span>  
                                        </div>
                                        <div class="col-md-8">
                                            <span style="font-size: 12px;">: &nbsp;&nbsp;&nbsp;${ress[0].VehicleNumber}</span>
                                        </div>  

                                        <div class="col-md-4">
                                            <span style="font-size: 12px;font-weight: bold;">Status Mobil</span>  
                                        </div> 
                                        <div class="col-md-8">
                                            : &nbsp;&nbsp;&nbsp;<span class="badge rounded-pill bg-primary" style="font-size: 12px;">${ress[0].Car_Status}</span> 
                                        </div>  

                                        <div class="col-md-4">
                                            <span style="font-size: 12px;font-weight: bold;">Kecepatan</span>  
                                        </div> 
                                        <div class="col-md-8">
                                            <span style="font-size: 12px;">: &nbsp;&nbsp;&nbsp;${ress[0].Speed}</span>
                                        </div>    

                                        <div class="col-md-4">
                                            <span style="font-size: 12px;font-weight: bold;">Odometer</span>  
                                        </div> 
                                        <div class="col-md-8">
                                            <span style="font-size: 12px;">: &nbsp;&nbsp;&nbsp;${ress[0].Odometer}</span>
                                        </div>   

                                        <div class="col-md-4">
                                            <span style="font-size: 12px;font-weight: bold;">Status Engine</span>  
                                        </div> 
                                        <div class="col-md-8">
                                            <span style="font-size: 12px;">: &nbsp;&nbsp;&nbsp;${ress[0].Engine}</span>
                                        </div>  

                                        <div class="col-md-4">
                                            <span style="font-size: 12px;font-weight: bold;">Petugas 1</span>  
                                        </div> 
                                        <div class="col-md-8">
                                            <span style="font-size: 12px;">: &nbsp;&nbsp;&nbsp;${ress[0].Petugas1}</span>
                                        </div>  

                                        <div class="col-md-4">
                                            <span style="font-size: 12px;font-weight: bold;">Petugas 2</span>  
                                        </div> 
                                        <div class="col-md-8">
                                            <span style="font-size: 12px;">: &nbsp;&nbsp;&nbsp;${ress[0].Petugas2}</span>
                                        </div>  

                                        <div class="col-md-4">
                                            <span style="font-size: 12px;font-weight: bold;">Delegasi</span>  
                                        </div> 
                                        <div class="col-md-8">
                                            <span style="font-size: 12px;" id="namaDelegasiGpsId${ress[0].VehicleId}"></span>
                                        </div>  

                                        <div class="col-md-12 text-center  mt-3">
                                            <span class="badge rounded-pill bg-primary" style="font-size: 12px;">Lokasi Kendaraan</span>  
                                            <p style="font-size: 12px;">${ress[0].GpsLocation}</p>
                                        </div> 
                                    </div> 
                                        
                                </div>
                            `).update().on('click', function(e) {
                                        $.ajax({
                                            type: "POST",
                                            url: "<?php echo base_url(); ?>dashboard/getIdCountry",
                                            data: {
                                                "id_country": ress[0].Delegasi,
                                            },
                                            dataType: "JSON",
                                            success: function(result) {
                                                if (result['data'] != null) {
                                                    $(`#namaDelegasiGpsId${ress[0].VehicleId}`).html(`: &nbsp;&nbsp;&nbsp; ${result['data']['name_country']}`);
                                                    $(`#benderaForGpsId${ress[0].VehicleId}`).html(`<a href="javascript:void(0);"><img alt="" style="width: 20%;margin-bottom: 10px;" src="<?= url_api() ?>country/${result['data']['photo_country']}"></a>`);
                                                }
                                            }
                                        });
                                    });
                                } else {
                                    markerGpsId[ress[0].VehicleId] = L.marker([ress[0].Lat, ress[0].Lon], {
                                        icon: L.divIcon({
                                            // className: 'location-pin',
                                            html: jenis,
                                            iconSize: [5, 5],
                                            iconAnchor: [5, 10]
                                            // iconAnchor: [10, 33]
                                        })
                                    }).bindPopup(`
                                <div class="text-center" style="width: 300px;">  
                                    <div class="row mt-3"> 
                                        <div class="col-md-12"  id="benderaForGpsId${ress[0].VehicleId}">
                                    
                                        </div> 
                                    </div>
                                    
                                    <div class="row text-start mt-3">
                                        <div class="col-md-4">
                                            <span style="font-size: 12px;font-weight: bold;">Nama</span>  
                                        </div>
                                        <div class="col-md-8">
                                            <span style="font-size: 12px;">: &nbsp;&nbsp;&nbsp;${ress[0].VehicleNumber}</span>
                                        </div>   

                                        <div class="col-md-4">
                                            <span style="font-size: 12px;font-weight: bold;">Status Mobil</span>  
                                        </div> 
                                        <div class="col-md-8">
                                            : &nbsp;&nbsp;&nbsp;<span class="badge rounded-pill bg-primary" style="font-size: 12px;">${ress[0].Car_Status}</span> 
                                        </div>  

                                        <div class="col-md-4">
                                            <span style="font-size: 12px;font-weight: bold;">Kecepatan</span>  
                                        </div> 
                                        <div class="col-md-8">
                                            <span style="font-size: 12px;">: &nbsp;&nbsp;&nbsp;${ress[0].Speed}</span>
                                        </div>    

                                        <div class="col-md-4">
                                            <span style="font-size: 12px;font-weight: bold;">Odometer</span>  
                                        </div> 
                                        <div class="col-md-8">
                                            <span style="font-size: 12px;">: &nbsp;&nbsp;&nbsp;${ress[0].Odometer}</span>
                                        </div>   

                                        <div class="col-md-4">
                                            <span style="font-size: 12px;font-weight: bold;">Status Engine</span>  
                                        </div> 
                                        <div class="col-md-8">
                                            <span style="font-size: 12px;">: &nbsp;&nbsp;&nbsp;${ress[0].Engine}</span>
                                        </div> 

                                        <div class="col-md-4">
                                            <span style="font-size: 12px;font-weight: bold;">Petugas 1</span>  
                                        </div> 
                                        <div class="col-md-8">
                                            <span style="font-size: 12px;">: &nbsp;&nbsp;&nbsp;${ress[0].Petugas1}</span>
                                        </div>  

                                        <div class="col-md-4">
                                            <span style="font-size: 12px;font-weight: bold;">Petugas 2</span>  
                                        </div> 
                                        <div class="col-md-8">
                                            <span style="font-size: 12px;">: &nbsp;&nbsp;&nbsp;${ress[0].Petugas2}</span>
                                        </div>  

                                        <div class="col-md-4">
                                            <span style="font-size: 12px;font-weight: bold;">Delegasi</span>  
                                        </div> 
                                        <div class="col-md-8">
                                        <span style="font-size: 12px;" id="namaDelegasiGpsId${ress[0].VehicleId}"></span>
                                        </div>   

                                        <div class="col-md-12 text-center  mt-3">
                                            <span class="badge rounded-pill bg-primary" style="font-size: 12px;">Lokasi Kendaraan</span>  
                                            <p style="font-size: 12px;">${ress[0].GpsLocation}</p>
                                        </div> 
                                    </div> 
                                        
                                </div>
                            `).addTo(mapContainer).on('click', function(e) {
                                        $.ajax({
                                            type: "POST",
                                            url: "<?php echo base_url(); ?>dashboard/getIdCountry",
                                            data: {
                                                "id_country": ress[0].Delegasi,
                                            },
                                            dataType: "JSON",
                                            success: function(result) {
                                                if (result['data'] != null) {
                                                    $(`#namaDelegasiGpsId${ress[0].VehicleId}`).html(`: &nbsp;&nbsp;&nbsp; ${result['data']['name_country']}`);
                                                    $(`#benderaForGpsId${ress[0].VehicleId}`).html(`<a href="javascript:void(0);"><img alt="" style="width: 20%;margin-bottom: 10px;" src="<?= url_api() ?>country/${result['data']['photo_country']}"></a>`);
                                                }
                                            }
                                        });
                                    });
                                }
                            });
                    }


                    // autoGpsId = setInterval(gpsId, 3000);
                    $("#gpsIdDisplay").on("change", function(e) {
                        if ($(this).is(':checked')) {
                            $("#gpsId").prop('checked', true);
                            $("#overlay").fadeIn(300);
                            getGpsId();
                            autoGpsId = setInterval(gpsId, 3000);
                            $("#overlay").fadeOut(300);
                            // $("#myModalGpsIdDisplay").modal('show');
                        } else {
                            $("#gpsId").prop('checked', false);
                            $("#gpsId").val();
                            clearInterval(autoGpsId);
                            for (let i = 0; i < dummyIdKendaraanGpsId.length; i++) {
                                mapContainer.removeLayer(markerGpsId[dummyIdKendaraanGpsId[i]]);
                            }
                            dummyIdKendaraanGpsId = new Array();
                            markerGpsId = new Array();
                        }
                    });

                    // serverSideGet();

                    function serverSideGet() {
                        $("#overlay").fadeIn(300);

                        let countlist = 0;
                        let list = "";

                        let countlistDisplay = 0;
                        let listDisplay = "";

                        let countlistCarListrik = 0;
                        let listCarListrik = "";
                        let countlistBikeListrik = 0;
                        let listBikeListrik = "";

                        let countlistCarFosil = 0;
                        let listCarFosil = "";
                        let countlistBikeFosil = 0;
                        let listBikeFosil = "";

                        let countlistNon = 0;
                        let listNon = "";
                        $.ajax({
                            type: "POST",
                            url: "<?php echo base_url(); ?>dashboard/getTracking",
                            data: {
                                "status": '1',
                            },
                            dataType: "JSON",
                            success: function(result) {
                                $("#overlay").fadeOut(300);
                                var dummyGetTracking = result['data'];
                                var jenis = '';
                                var bendera = '';
                                $('#openModalPetugasDisplay').html(`
                                <div id="overlayMenuDisplay">
                                    <div class="loading">
                                        <div class="spinner" style="margin-left: 55px;margin-bottom: 10px;"></div>
                                        <p style="color: white; font-size: 15px; margin-left: 3px; text-align: center;">Mohon Tunggu </br> Fitur Akan Aktif Segera</p> 
                                    </div>
                                </div>
                                <table id="datatablePetugasOnDisplay" class="table dt-responsive w-100" style="font-size: 12px;">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th> 
                                            <th>Delegasi</th> 
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody id="isiModalPetugasDisplay">
                                    </tbody>
                                </table>                     
                            `);
                                $('#totalPetugasDisplay').html(dummyGetTracking.length);
                                $("#overlayMenuDisplay").fadeIn(300);
                                if (dummyGetTracking.length > 0) {
                                    var filterDataTidakAktif = dummyGetTracking.filter(function(val) {
                                        return val.status_login == 0;
                                    });


                                    $('#totalPetugasAktif').html(dummyGetTracking.length - filterDataTidakAktif.length);
                                    $('#totalPetugasTidakAktif').html(filterDataTidakAktif.length);

                                    $('#totalPetugasAktifDisplay').html(dummyGetTracking.length - filterDataTidakAktif.length);
                                    $('#totalPetugasTidakAktifDisplay').html(filterDataTidakAktif.length);



                                    $("#gaturDisplay").prop('disabled', true);
                                    $("#r2ListrikDisplay").prop('disabled', true);
                                    $("#r4ListrikDisplay").prop('disabled', true);
                                    $("#r2FosilDisplay").prop('disabled', true);
                                    $("#r4FosilDisplay").prop('disabled', true);
                                    $("#loadGaturDisplay").html(`<i class="bx bx-loader bx-spin font-size-16 align-middle me-2"></i>PAM ROLAKIR`);
                                    $("#loadR2ListrikDisplay").html(`<i class="bx bx-loader bx-spin font-size-16 align-middle me-2"></i>R2 Listrik`);
                                    $("#loadR4ListrikDisplay").html(`<i class="bx bx-loader bx-spin font-size-16 align-middle me-2"></i>R4 Listrik`);
                                    $("#loadR2FosilDisplay").html(`<i class="bx bx-loader bx-spin font-size-16 align-middle me-2"></i>R2 Fosil`);
                                    $("#loadR4FosilDisplay").html(`<i class="bx bx-loader bx-spin font-size-16 align-middle me-2"></i>R4 Fosil`);


                                    tablePutugasTrack = `
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingPetugasGetTrackBikeListrik">
                                            <button id="openPetugasGetTrackBikeListrik" class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapsePetugasGetTrackBikeListrik" aria-expanded="false" aria-controls="flush-collapsePetugasGetTrackBikeListrik">
                                                <input checked type="checkbox" id="allPetugasBikeListrik"/>
                                                Jenis Kendaraan - R2 Listrik &nbsp;<span class="badge bg-info rounded-pill" id="totalPetugasGetTrackBikeListrik"></span>
                                            </button>
                                        </h2>
                                        <div id="flush-collapsePetugasGetTrackBikeListrik" class="accordion-collapse collapse" aria-labelledby="flush-headingPetugasGetTrackBikeListrik"
                                            data-bs-parent="#accordionFlushExampleBikeListrik">
                                            <div class="accordion-body text-muted">

                                                <table id="datatablePetugasGetTrackBikeListrik" class="table dt-responsive w-100">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama</th> 
                                                            <th>Delegasi</th> 
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="listPetugasGetTrackBikeListrik">
                                                    </tbody>
                                                </table> 
                                                
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingPetugasGetTrackCarListrik">
                                            <button id="openPetugasGetTrackCarListrik" class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapsePetugasGetTrackCarListrik" aria-expanded="false" aria-controls="flush-collapsePetugasGetTrackCarListrik">
                                                <input checked type="checkbox" id="allPetugasCarListrik"/>
                                                Jenis Kendaraan - R4 Listrik &nbsp;<span class="badge bg-info rounded-pill" id="totalPetugasGetTrackCarListrik"></span>
                                            </button>
                                        </h2>
                                        <div id="flush-collapsePetugasGetTrackCarListrik" class="accordion-collapse collapse" aria-labelledby="flush-headingPetugasGetTrackCarListrik"
                                            data-bs-parent="#accordionFlushExampleCarListrik">
                                            <div class="accordion-body text-muted">

                                                <table id="datatablePetugasGetTrackCarListrik" class="table dt-responsive w-100">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama</th> 
                                                            <th>Delegasi</th> 
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="listPetugasGetTrackCarListrik">
                                                    </tbody>
                                                </table> 
                                                
                                            </div>
                                        </div>
                                    </div> 

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingPetugasGetTrackBikeFosil">
                                            <button id="openPetugasGetTrackBikeFosil" class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapsePetugasGetTrackBikeFosil" aria-expanded="false" aria-controls="flush-collapsePetugasGetTrackBikeFosil">
                                                <input checked type="checkbox" id="allPetugasBikeFosil"/>
                                                Jenis Kendaraan - R2 Fosil &nbsp;<span class="badge bg-primary rounded-pill" id="totalPetugasGetTrackBikeFosil"></span>
                                            </button>
                                        </h2>
                                        <div id="flush-collapsePetugasGetTrackBikeFosil" class="accordion-collapse collapse" aria-labelledby="flush-headingPetugasGetTrackBikeFosil"
                                            data-bs-parent="#accordionFlushExampleBikeFosil">
                                            <div class="accordion-body text-muted">

                                                <table id="datatablePetugasGetTrackBikeFosil" class="table dt-responsive w-100">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama</th> 
                                                            <th>Delegasi</th> 
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="listPetugasGetTrackBikeFosil">
                                                    </tbody>
                                                </table> 
                                                
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingPetugasGetTrackCarFosil">
                                            <button id="openPetugasGetTrackCarFosil" class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapsePetugasGetTrackCarFosil" aria-expanded="false" aria-controls="flush-collapsePetugasGetTrackCarFosil">
                                                <input checked type="checkbox" id="allPetugasCarFosil"/>
                                                Jenis Kendaraan - R4 Fosil &nbsp;<span class="badge bg-primary rounded-pill" id="totalPetugasGetTrackCarFosil"></span>
                                            </button>
                                        </h2>
                                        <div id="flush-collapsePetugasGetTrackCarFosil" class="accordion-collapse collapse" aria-labelledby="flush-headingPetugasGetTrackCarFosil"
                                            data-bs-parent="#accordionFlushExampleCarFosil">
                                            <div class="accordion-body text-muted">

                                                <table id="datatablePetugasGetTrackCarFosil" class="table dt-responsive w-100">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama</th> 
                                                            <th>Delegasi</th> 
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="listPetugasGetTrackCarFosil">
                                                    </tbody>
                                                </table> 
                                                
                                            </div>
                                        </div>
                                    </div> 
                                    

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingPetugasGetTrackNon">
                                            <button id="openPetugasGetTrackNon" class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapsePetugasGetTrackNon" aria-expanded="false" aria-controls="flush-collapsePetugasGetTrackNon">
                                                <input checked type="checkbox" id="allPetugasNon"/>
                                                Petugas PAM ROLAKIR &nbsp;<span class="badge rounded-pill" style="background-color: #800080;" id="totalPetugasGetTrackNon"></span>
                                            </button>
                                        </h2>
                                        <div id="flush-collapsePetugasGetTrackNon" class="accordion-collapse collapse" aria-labelledby="flush-headingPetugasGetTrackNon"
                                            data-bs-parent="#accordionFlushExampleNon">
                                            <div class="accordion-body text-muted">

                                                <table id="datatablePetugasGetTrackNon" class="table dt-responsive w-100">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama</th> 
                                                            <th>Delegasi</th> 
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="listPetugasGetTrackNon">
                                                    </tbody>
                                                </table> 
                                                
                                            </div>
                                        </div>
                                    </div> 
                                `;
                                    $("#dataPetugasTrack").html(tablePutugasTrack);


                                    $("#allPetugasCarListrik").prop('disabled', true);
                                    $("#allPetugasBikeListrik").prop('disabled', true);
                                    $("#allPetugasCarFosil").prop('disabled', true);
                                    $("#allPetugasBikeFosil").prop('disabled', true);
                                    $("#allPetugasNon").prop('disabled', true);


                                    countlist = 0;
                                    list = "";
                                    sortRess = dummyGetTracking.sort((a, b) => a.name_officer + b.name_officer);

                                    var filterPetugasCarListrik = sortRess.filter(function(e) {
                                        return e.type_vehicle == 'Mobil' && e.fuel_vehicle == 'Listrik';
                                    });
                                    var filterPetugasBikeListrik = sortRess.filter(function(e) {
                                        return e.type_vehicle == 'Sepeda Motor' && e.fuel_vehicle == 'Listrik';
                                    });
                                    var filterPetugasCarFosil = sortRess.filter(function(e) {
                                        return e.type_vehicle == 'Mobil' && e.fuel_vehicle == 'Fosil';
                                    });
                                    var filterPetugasBikeFosil = sortRess.filter(function(e) {
                                        return e.type_vehicle == 'Sepeda Motor' && e.fuel_vehicle == 'Fosil';
                                    });


                                    var filterPetugasNon = sortRess.filter(function(e) {
                                        return e.no_vehicle == 'Pengaturan' && e.type_vehicle == 'Tanpa Kendaraan' && e.fuel_vehicle == 'Fosil';
                                    });


                                    $("#totalPetugasOn").html(`${sortRess.length}`);
                                    $("#totalPetugasGetTrackCarListrik").html(`${filterPetugasCarListrik.length}`);
                                    $("#totalPetugasGetTrackBikeListrik").html(`${filterPetugasBikeListrik.length}`);
                                    $("#totalPetugasGetTrackCarFosil").html(`${filterPetugasCarFosil.length}`);
                                    $("#totalPetugasGetTrackBikeFosil").html(`${filterPetugasBikeFosil.length}`);
                                    $("#totalPetugasGetTrackNon").html(`${filterPetugasNon.length}`);

                                    $("#totalPetugasCarListrikDisplay").html(`${filterPetugasCarListrik.length}`);
                                    $("#totalPetugasBikeListrikDisplay").html(`${filterPetugasBikeListrik.length}`);
                                    $("#totalPetugasCarFosilDisplay").html(`${filterPetugasCarFosil.length}`);
                                    $("#totalPetugasBikeFosilDisplay").html(`${filterPetugasBikeFosil.length}`);
                                    $("#totalPetugasNonDisplay").html(`${filterPetugasNon.length}`);

                                    // storeEditDayReport
                                    $.ajax({
                                        type: "POST",
                                        url: "<?php echo base_url(); ?>dashboard/storeEditDayReport",
                                        data: {
                                            "t_officer_active": sortRess.length,
                                            "t_officer_active_car": filterPetugasCarListrik.length + filterPetugasCarFosil.length,
                                            "t_officer_active_carListrik": filterPetugasCarListrik.length,
                                            "t_officer_active_carFosil": filterPetugasCarFosil.length,
                                            "t_officer_active_bike": filterPetugasBikeListrik.length + filterPetugasBikeFosil.length,
                                            "t_officer_active_bikeListrik": filterPetugasBikeListrik.length,
                                            "t_officer_active_bikeFosil": filterPetugasBikeFosil.length,
                                            "t_officer_active_not_driving": filterPetugasNon.length,
                                        },
                                        dataType: "JSON",
                                        success: function(result) {
                                            if (result['status'] == true) {
                                                console.log('update petugas aktif day report');
                                            } else {
                                                console.log('GAGAL update petugas aktif day report');
                                            }
                                        }
                                    });

                                    filterPetugasCarListrik.forEach(el => {
                                        if (el.handphone != null && el.handphone != '0') {
                                            let nomorDepan = el.handphone.substring(0, 2);
                                            if (nomorDepan === "62") {
                                                el.handphone = el.handphone;
                                            } else if (nomorDepan === "08") {
                                                el.handphone = "62" + el.handphone.substring(1);
                                            } else if (nomorDepan === "+6") {
                                                el.handphone = el.handphone.substring(1);
                                            } else {
                                                el.handphone = el.handphone;
                                            }
                                        } else {
                                            el.handphone = 0;
                                        }



                                        countlistCarListrik += 1;
                                        listCarListrik += `  
                                        <tr>
                                            <td>${el.status_login == 1 ? `<span class="badge rounded-pill bg-primary" style="font-size: 10px;">${countlistCarListrik}</span>` : `<span class="badge rounded-pill bg-danger" style="font-size: 10px;">${countlistCarListrik}</span>`}</td>
                                            <td><a href="<?php echo base_url() ?>operasi/Petugas" target="_blank"> ${el.rank_officer ? el.rank_officer : '' } - ${el.name_officer}</a></td>
                                            <td><a href="<?php echo base_url() ?>operasi/Akun" target="_blank"> ${el.name_country ? el.name_country : '-'} </a></td>
                                            <td> 
                                                ${el.status_login == 1 ? `<span style="font-size: 10px; display:none;">Sudah Aktif</span>` : `<span style="font-size: 10px; display:none;">Tidak Aktif</span>`}
                                                <div style="display: flex;">
                                                    <a class="btn" style="margin-top: -7px; color: #495057;" href="https://api.whatsapp.com/send?phone=${el.handphone}" target="_blank"><i class="fa fas fa-phone "></i></a> 
                                                    <a href="https://t.me/+${el.handphone}" target="_blank" style="margin-right: 10px;font-size: 17px;">
                                                    <i class="fab fa-telegram"></i>
                                                    </a>
                                                    <a class="btn" style="margin-left: -13px;margin-top: -7px; color: #495057;" href="<?php echo base_url('zoom'); ?>" target="_blank" onClick="sendZoomNonEncrypt('${el.id_officer}')"><i class="fa  fas fa-video "></i></a> 
                                                    <button class="btn" style="margin-left: -13px;margin-top: -13px;"
                                                        id="listPetugasClickCarListrik${countlistCarListrik}"  
                                                        data-id="${el.id_officer}"  
                                                        data-nama="${el.name_team}"  
                                                        data-akun="${el.name_account}" 
                                                        data-nrp="${el.nrp_user}"
                                                        data-telp="${el.handphone}"
                                                        data-cord="${el.latitude},${el.longitude}" >
                                                        <i style="color: #495057;" class="fa fas fa-eye"></i>
                                                    </button>
                                                    <div class="switch" style="margin-left: -11px;">
                                                        <input class="flag" type="checkbox" id="flagCarListrik${countlistCarListrik}" 
                                                        data-id="${el.id_officer}"  
                                                        data-nama="${el.name_team}"  
                                                        data-akun="${el.name_account}" 
                                                        data-nrp="${el.nrp_user}"
                                                        data-telp="${el.handphone}"
                                                        data-cord="${el.latitude},${el.longitude}"
                                                        data-toggle="toggle"  data-onstyle="success" data-offstyle="danger" data-on="Approved" data-off="Not Approved" data-size="lg"> 
                                                        <label for="flagCarListrik${countlistCarListrik}"></label>
                                                    </div>
                                                </div> 
                                            </td>
                                        </tr>
                                    `;
                                        $('#listPetugasGetTrackCarListrik').html(listCarListrik);
                                    });

                                    $(`#allPetugasCarListrik`).on('change', function(e) {
                                        if ($(`#allPetugasCarListrik`).is(':checked')) {
                                            $("#r4ListrikDisplay").prop('checked', true);
                                            for (let i = 0; i < countlistCarListrik; i++) {
                                                if (markerArray[filterPetugasCarListrik[i]['id_officer']] != null) {
                                                    mapContainer.addLayer(markerArray[filterPetugasCarListrik[i]['id_officer']]);
                                                }
                                            }
                                        } else {
                                            $("#r4ListrikDisplay").prop('checked', false);
                                            for (let i = 0; i < countlistCarListrik; i++) {
                                                if (markerArray[filterPetugasCarListrik[i]['id_officer']] != null) {
                                                    mapContainer.removeLayer(markerArray[filterPetugasCarListrik[i]['id_officer']]);
                                                }
                                            }
                                        }
                                    });

                                    $("#r4ListrikDisplay").on("change", function(e) {
                                        if ($(this).is(':checked')) {
                                            $("#allPetugasCarListrik").prop('checked', true);
                                            for (let i = 0; i < countlistCarListrik; i++) {
                                                if (markerArray[filterPetugasCarListrik[i]['id_officer']] != null) {
                                                    mapContainer.addLayer(markerArray[filterPetugasCarListrik[i]['id_officer']]);
                                                }
                                            }
                                            $("#myModalPetugasDisplay").modal('hide');
                                        } else {
                                            $("#allPetugasCarListrik").prop('checked', false);
                                            for (let i = 0; i < countlistCarListrik; i++) {
                                                if (markerArray[filterPetugasCarListrik[i]['id_officer']] != null) {
                                                    mapContainer.removeLayer(markerArray[filterPetugasCarListrik[i]['id_officer']]);
                                                }
                                            }
                                        }
                                    });

                                    for (let i = 0; i < countlistCarListrik; i++) {
                                        $(`#listPetugasClickCarListrik${i+1}`).click(function() {
                                            // console.log('masuk');
                                            var latlong = $(this).data('cord').split(',');
                                            var latitude = parseFloat(latlong[0]);
                                            var longitude = parseFloat(latlong[1]);
                                            mapContainer.flyTo([latitude, longitude], 20);
                                            markerArray[$(this).data('id')].openPopup();
                                        });

                                        $(`#flagCarListrik${i+1}`).on("change", function(e) {
                                            // alert($(this).data('id'));
                                            if ($(`#flagCarListrik${i+1}`).is(':checked')) {
                                                mapContainer.removeLayer(markerArray[$(this).data('id')]);
                                                $(`#listPetugasClickCarListrik${i+1}`).hide();
                                            } else {
                                                mapContainer.addLayer(markerArray[$(this).data('id')]);
                                                $(`#listPetugasClickCarListrik${i+1}`).show();
                                            }
                                        });

                                    }
                                    $('#datatablePetugasGetTrackCarListrik').DataTable({
                                        responsive: true,

                                        scrollX: true,

                                        sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

                                        buttons: ["excel", "csv", "pdf"],
                                        processing: true,
                                        oLanguage: {

                                            sSearch: 'Search:'

                                        },
                                    });



                                    filterPetugasBikeListrik.forEach(el => {
                                        if (el.handphone != null && el.handphone != '0') {
                                            let nomorDepan = el.handphone.substring(0, 2);
                                            if (nomorDepan === "62") {
                                                el.handphone = el.handphone;
                                            } else if (nomorDepan === "08") {
                                                el.handphone = "62" + el.handphone.substring(1);
                                            } else if (nomorDepan === "+6") {
                                                el.handphone = el.handphone.substring(1);
                                            } else {
                                                el.handphone = el.handphone;
                                            }
                                        } else {
                                            el.handphone = 0;
                                        }



                                        countlistBikeListrik += 1;
                                        listBikeListrik += `  
                                        <tr>
                                            <td>${el.status_login == 1 ? `<span class="badge rounded-pill bg-primary" style="font-size: 10px;">${countlistBikeListrik}</span>` : `<span class="badge rounded-pill bg-danger" style="font-size: 10px;">${countlistBikeListrik}</span>`}</td>
                                            <td> ${el.rank_officer ? el.rank_officer : '' } - ${el.name_officer}</td>
                                            <td> ${el.name_country ? el.name_country : '-'}</td>
                                            <td> 
                                                ${el.status_login == 1 ? `<span style="font-size: 10px; display:none;">Sudah Aktif</span>` : `<span style="font-size: 10px; display:none;">Tidak Aktif</span>`}
                                                <div style="display: flex;">
                                                    <a class="btn" style="margin-top: -7px; color: #495057;" href="https://api.whatsapp.com/send?phone=${el.handphone}" target="_blank"><i class="fa fas fa-phone "></i></a> 
                                                    <a href="https://t.me/+${el.handphone}" target="_blank" style="margin-right: 10px;font-size: 17px;">
                                                        <i class="fab fa-telegram"></i>
                                                    </a>
                                                    <a class="btn" style="margin-left: -13px;margin-top: -7px; color: #495057;" href="<?php echo base_url('zoom'); ?>" target="_blank" onClick="sendZoomNonEncrypt('${el.id_officer}')"><i class="fa  fas fa-video "></i></a> 
                                                    <button class="btn" style="margin-left: -13px;margin-top: -13px;"
                                                        id="listPetugasClickBikeListrik${countlistBikeListrik}"   
                                                        data-id="${el.id_officer}"  
                                                        data-nama="${el.name_team}"  
                                                        data-akun="${el.name_account}" 
                                                        data-nrp="${el.nrp_user}"
                                                        data-telp="${el.handphone}"
                                                        data-cord="${el.latitude},${el.longitude}" >
                                                        <i style="color: #495057;" class="fa fas fa-eye"></i>
                                                    </button>
                                                    <div class="switch" style="margin-left: -11px;">
                                                        <input class="flag" type="checkbox" id="flagBikeListrik${countlistBikeListrik}" 
                                                        data-id="${el.id_officer}"  
                                                        data-nama="${el.name_team}"  
                                                        data-akun="${el.name_account}" 
                                                        data-nrp="${el.nrp_user}"
                                                        data-telp="${el.handphone}"
                                                        data-cord="${el.latitude},${el.longitude}"
                                                        data-toggle="toggle"  data-onstyle="success" data-offstyle="danger" data-on="Approved" data-off="Not Approved" data-size="lg"> 
                                                        <label for="flagBikeListrik${countlistBikeListrik}"></label>
                                                    </div>
                                                </div> 
                                            </td>
                                        </tr>
                                    `;
                                        $('#listPetugasGetTrackBikeListrik').html(listBikeListrik);
                                    });



                                    $(`#allPetugasBikeListrik`).on('change', function(e) {
                                        if ($(`#allPetugasBikeListrik`).is(':checked')) {
                                            $("#r2ListrikDisplay").prop('checked', true);
                                            for (let i = 0; i < countlistBikeListrik; i++) {
                                                if (markerArray[filterPetugasBikeListrik[i]['id_officer']] != null) {
                                                    mapContainer.addLayer(markerArray[filterPetugasBikeListrik[i]['id_officer']]);
                                                }
                                            }
                                        } else {
                                            $("#r2ListrikDisplay").prop('checked', false);
                                            for (let i = 0; i < countlistBikeListrik; i++) {
                                                if (markerArray[filterPetugasBikeListrik[i]['id_officer']] != null) {
                                                    mapContainer.removeLayer(markerArray[filterPetugasBikeListrik[i]['id_officer']]);
                                                }
                                            }
                                        }
                                    });

                                    $("#r2ListrikDisplay").on("change", function(e) {
                                        if ($(this).is(':checked')) {
                                            $("#allPetugasBikeListrik").prop('checked', true);
                                            for (let i = 0; i < countlistBikeListrik; i++) {
                                                if (markerArray[filterPetugasBikeListrik[i]['id_officer']] != null) {
                                                    mapContainer.addLayer(markerArray[filterPetugasBikeListrik[i]['id_officer']]);
                                                }
                                            }
                                            $("#myModalPetugasDisplay").modal('show');
                                        } else {
                                            $("#allPetugasBikeListrik").prop('checked', false);
                                            for (let i = 0; i < countlistBikeListrik; i++) {
                                                if (markerArray[filterPetugasBikeListrik[i]['id_officer']] != null) {
                                                    mapContainer.removeLayer(markerArray[filterPetugasBikeListrik[i]['id_officer']]);
                                                }
                                            }
                                        }
                                    });

                                    for (let i = 0; i < countlistBikeListrik; i++) {
                                        $(`#listPetugasClickBikeListrik${i+1}`).click(function() {
                                            // console.log($(this).data('id'));
                                            var latlong = $(this).data('cord').split(',');
                                            var latitude = parseFloat(latlong[0]);
                                            var longitude = parseFloat(latlong[1]);
                                            mapContainer.flyTo([latitude, longitude], 20);
                                            markerArray[$(this).data('id')].openPopup();
                                        });

                                        $(`#flagBikeListrik${i+1}`).on("change", function(e) {
                                            // alert($(this).data('id'));
                                            if ($(`#flagBikeListrik${i+1}`).is(':checked')) {
                                                mapContainer.removeLayer(markerArray[$(this).data('id')]);
                                                $(`#listPetugasClickBikeListrik${i+1}`).hide();
                                            } else {
                                                mapContainer.addLayer(markerArray[$(this).data('id')]);
                                                $(`#listPetugasClickBikeListrik${i+1}`).show();
                                            }
                                        });

                                    }
                                    $('#datatablePetugasGetTrackBikeListrik').DataTable({
                                        responsive: true,

                                        scrollX: true,

                                        sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

                                        buttons: ["excel", "csv", "pdf"],
                                        processing: true,
                                        oLanguage: {

                                            sSearch: 'Search:'

                                        },
                                    });



                                    filterPetugasCarFosil.forEach(el => {
                                        if (el.handphone != null && el.handphone != '0') {
                                            let nomorDepan = el.handphone.substring(0, 2);
                                            if (nomorDepan === "62") {
                                                el.handphone = el.handphone;
                                            } else if (nomorDepan === "08") {
                                                el.handphone = "62" + el.handphone.substring(1);
                                            } else if (nomorDepan === "+6") {
                                                el.handphone = el.handphone.substring(1);
                                            } else {
                                                el.handphone = el.handphone;
                                            }
                                        } else {
                                            el.handphone = 0;
                                        }



                                        countlistCarFosil += 1;
                                        listCarFosil += `  
                                        <tr>
                                            <td>${el.status_login == 1 ? `<span class="badge rounded-pill bg-primary" style="font-size: 10px;">${countlistCarFosil}</span>` : `<span class="badge rounded-pill bg-danger" style="font-size: 10px;">${countlistCarFosil}</span>`}</td>
                                            <td><a href="<?php echo base_url() ?>operasi/Petugas" target="_blank"> ${el.rank_officer ? el.rank_officer : '' } - ${el.name_officer}</a></td>
                                            <td><a href="<?php echo base_url() ?>operasi/Akun" target="_blank"> ${el.name_country ? el.name_country : '-'} </a></td>
                                            <td> 
                                                ${el.status_login == 1 ? `<span style="font-size: 10px; display:none;">Sudah Aktif</span>` : `<span style="font-size: 10px; display:none;">Tidak Aktif</span>`}
                                                <div style="display: flex;">
                                                    <a class="btn" style="margin-top: -7px; color: #495057;" href="https://api.whatsapp.com/send?phone=${el.handphone}" target="_blank"><i class="fa fas fa-phone "></i></a> 
                                                    <a href="https://t.me/+${el.handphone}" target="_blank" style="margin-right: 10px;font-size: 17px;">
                                                    <i class="fab fa-telegram"></i>
                                                    </a>
                                                    <a class="btn" style="margin-left: -13px;margin-top: -7px; color: #495057;" href="<?php echo base_url('zoom'); ?>" target="_blank" onClick="sendZoomNonEncrypt('${el.id_officer}')"><i class="fa  fas fa-video "></i></a> 
                                                    <button class="btn" style="margin-left: -13px;margin-top: -13px;"
                                                        id="listPetugasClickCarFosil${countlistCarFosil}"  
                                                        data-id="${el.id_officer}"  
                                                        data-nama="${el.name_team}"  
                                                        data-akun="${el.name_account}" 
                                                        data-nrp="${el.nrp_user}"
                                                        data-telp="${el.handphone}"
                                                        data-cord="${el.latitude},${el.longitude}" >
                                                        <i style="color: #495057;" class="fa fas fa-eye"></i>
                                                    </button>
                                                    <div class="switch" style="margin-left: -11px;">
                                                        <input class="flag" type="checkbox" id="flagCarFosil${countlistCarFosil}" 
                                                        data-id="${el.id_officer}"  
                                                        data-nama="${el.name_team}"  
                                                        data-akun="${el.name_account}" 
                                                        data-nrp="${el.nrp_user}"
                                                        data-telp="${el.handphone}"
                                                        data-cord="${el.latitude},${el.longitude}"
                                                        data-toggle="toggle"  data-onstyle="success" data-offstyle="danger" data-on="Approved" data-off="Not Approved" data-size="lg"> 
                                                        <label for="flagCarFosil${countlistCarFosil}"></label>
                                                    </div>
                                                </div> 
                                            </td>
                                        </tr>
                                    `;
                                        $('#listPetugasGetTrackCarFosil').html(listCarFosil);
                                    });

                                    $(`#allPetugasCarFosil`).on('change', function(e) {
                                        if ($(`#allPetugasCarFosil`).is(':checked')) {
                                            $("#r4FosilDisplay").prop('checked', true);
                                            for (let i = 0; i < countlistCarFosil; i++) {
                                                if (markerArray[filterPetugasCarFosil[i]['id_officer']] != null) {
                                                    mapContainer.addLayer(markerArray[filterPetugasCarFosil[i]['id_officer']]);
                                                }
                                            }
                                        } else {
                                            $("#r4FosilDisplay").prop('checked', false);
                                            for (let i = 0; i < countlistCarFosil; i++) {
                                                if (markerArray[filterPetugasCarFosil[i]['id_officer']] != null) {
                                                    mapContainer.removeLayer(markerArray[filterPetugasCarFosil[i]['id_officer']]);
                                                }
                                            }
                                        }
                                    });

                                    $("#r4FosilDisplay").on("change", function(e) {
                                        if ($(this).is(':checked')) {
                                            $("#allPetugasCarFosil").prop('checked', true);
                                            for (let i = 0; i < countlistCarFosil; i++) {
                                                if (markerArray[filterPetugasCarFosil[i]['id_officer']] != null) {
                                                    mapContainer.addLayer(markerArray[filterPetugasCarFosil[i]['id_officer']]);
                                                }
                                            }
                                            $("#myModalPetugasDisplay").modal('show');
                                        } else {
                                            $("#allPetugasCarFosil").prop('checked', false);
                                            for (let i = 0; i < countlistCarFosil; i++) {
                                                if (markerArray[filterPetugasCarFosil[i]['id_officer']] != null) {
                                                    mapContainer.removeLayer(markerArray[filterPetugasCarFosil[i]['id_officer']]);
                                                }
                                            }
                                        }
                                    });

                                    for (let i = 0; i < countlistCarFosil; i++) {
                                        $(`#listPetugasClickCarFosil${i+1}`).click(function() {
                                            // console.log('masuk');
                                            var latlong = $(this).data('cord').split(',');
                                            var latitude = parseFloat(latlong[0]);
                                            var longitude = parseFloat(latlong[1]);
                                            mapContainer.flyTo([latitude, longitude], 20);
                                            markerArray[$(this).data('id')].openPopup();
                                        });

                                        $(`#flagCarFosil${i+1}`).on("change", function(e) {
                                            // alert($(this).data('id'));
                                            if ($(`#flagCarFosil${i+1}`).is(':checked')) {
                                                mapContainer.removeLayer(markerArray[$(this).data('id')]);
                                                $(`#listPetugasClickCarFosil${i+1}`).hide();
                                            } else {
                                                mapContainer.addLayer(markerArray[$(this).data('id')]);
                                                $(`#listPetugasClickCarFosil${i+1}`).show();
                                            }
                                        });

                                    }
                                    $('#datatablePetugasGetTrackCarFosil').DataTable({
                                        responsive: true,

                                        scrollX: true,

                                        sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

                                        buttons: ["excel", "csv", "pdf"],
                                        processing: true,
                                        oLanguage: {

                                            sSearch: 'Search:'

                                        },
                                    });



                                    filterPetugasBikeFosil.forEach(el => {
                                        if (el.handphone != null && el.handphone != '0') {
                                            let nomorDepan = el.handphone.substring(0, 2);
                                            if (nomorDepan === "62") {
                                                el.handphone = el.handphone;
                                            } else if (nomorDepan === "08") {
                                                el.handphone = "62" + el.handphone.substring(1);
                                            } else if (nomorDepan === "+6") {
                                                el.handphone = el.handphone.substring(1);
                                            } else {
                                                el.handphone = el.handphone;
                                            }
                                        } else {
                                            el.handphone = 0;
                                        }



                                        countlistBikeFosil += 1;
                                        listBikeFosil += `  
                                        <tr>
                                            <td>${el.status_login == 1 ? `<span class="badge rounded-pill bg-primary" style="font-size: 10px;">${countlistBikeFosil}</span>` : `<span class="badge rounded-pill bg-danger" style="font-size: 10px;">${countlistBikeFosil}</span>`}</td>
                                            <td> ${el.rank_officer ? el.rank_officer : '' } - ${el.name_officer}</td>
                                            <td> ${el.name_country ? el.name_country : '-'}</td>
                                            <td> 
                                                ${el.status_login == 1 ? `<span style="font-size: 10px; display:none;">Sudah Aktif</span>` : `<span style="font-size: 10px; display:none;">Tidak Aktif</span>`}
                                                <div style="display: flex;">
                                                    <a class="btn" style="margin-top: -7px; color: #495057;" href="https://api.whatsapp.com/send?phone=${el.handphone}" target="_blank"><i class="fa fas fa-phone "></i></a> 
                                                    <a href="https://t.me/+${el.handphone}" target="_blank" style="margin-right: 10px;font-size: 17px;">
                                                        <i class="fab fa-telegram"></i>
                                                    </a>
                                                    <a class="btn" style="margin-left: -13px;margin-top: -7px; color: #495057;" href="<?php echo base_url('zoom'); ?>" target="_blank" onClick="sendZoomNonEncrypt('${el.id_officer}')"><i class="fa  fas fa-video "></i></a> 
                                                    <button class="btn" style="margin-left: -13px;margin-top: -13px;"
                                                        id="listPetugasClickBikeFosil${countlistBikeFosil}"   
                                                        data-id="${el.id_officer}"  
                                                        data-nama="${el.name_team}"  
                                                        data-akun="${el.name_account}" 
                                                        data-nrp="${el.nrp_user}"
                                                        data-telp="${el.handphone}"
                                                        data-cord="${el.latitude},${el.longitude}" >
                                                        <i style="color: #495057;" class="fa fas fa-eye"></i>
                                                    </button>
                                                    <div class="switch" style="margin-left: -11px;">
                                                        <input class="flag" type="checkbox" id="flagBikeFosil${countlistBikeFosil}" 
                                                        data-id="${el.id_officer}"  
                                                        data-nama="${el.name_team}"  
                                                        data-akun="${el.name_account}" 
                                                        data-nrp="${el.nrp_user}"
                                                        data-telp="${el.handphone}"
                                                        data-cord="${el.latitude},${el.longitude}"
                                                        data-toggle="toggle"  data-onstyle="success" data-offstyle="danger" data-on="Approved" data-off="Not Approved" data-size="lg"> 
                                                        <label for="flagBikeFosil${countlistBikeFosil}"></label>
                                                    </div>
                                                </div> 
                                            </td>
                                        </tr>
                                    `;
                                        $('#listPetugasGetTrackBikeFosil').html(listBikeFosil);
                                    });



                                    $(`#allPetugasBikeFosil`).on('change', function(e) {
                                        if ($(`#allPetugasBikeFosil`).is(':checked')) {
                                            $("#r2FosilDisplay").prop('checked', true);
                                            for (let i = 0; i < countlistBikeFosil; i++) {
                                                if (markerArray[filterPetugasBikeFosil[i]['id_officer']] != null) {
                                                    mapContainer.addLayer(markerArray[filterPetugasBikeFosil[i]['id_officer']]);
                                                }
                                            }
                                        } else {
                                            $("#r2FosilDisplay").prop('checked', false);
                                            for (let i = 0; i < countlistBikeFosil; i++) {
                                                if (markerArray[filterPetugasBikeFosil[i]['id_officer']] != null) {
                                                    mapContainer.removeLayer(markerArray[filterPetugasBikeFosil[i]['id_officer']]);
                                                }
                                            }
                                        }
                                    });

                                    $("#r2FosilDisplay").on("change", function(e) {
                                        if ($(this).is(':checked')) {
                                            $("#allPetugasBikeFosil").prop('checked', true);
                                            for (let i = 0; i < countlistBikeFosil; i++) {
                                                if (markerArray[filterPetugasBikeFosil[i]['id_officer']] != null) {
                                                    mapContainer.addLayer(markerArray[filterPetugasBikeFosil[i]['id_officer']]);
                                                }
                                            }
                                            $("#myModalPetugasDisplay").modal('show');
                                        } else {
                                            $("#allPetugasBikeFosil").prop('checked', false);
                                            for (let i = 0; i < countlistBikeFosil; i++) {
                                                if (markerArray[filterPetugasBikeFosil[i]['id_officer']] != null) {
                                                    mapContainer.removeLayer(markerArray[filterPetugasBikeFosil[i]['id_officer']]);
                                                }
                                            }
                                        }
                                    });

                                    for (let i = 0; i < countlistBikeFosil; i++) {
                                        $(`#listPetugasClickBikeFosil${i+1}`).click(function() {
                                            // console.log($(this).data('id'));
                                            var latlong = $(this).data('cord').split(',');
                                            var latitude = parseFloat(latlong[0]);
                                            var longitude = parseFloat(latlong[1]);
                                            mapContainer.flyTo([latitude, longitude], 20);
                                            markerArray[$(this).data('id')].openPopup();
                                        });

                                        $(`#flagBikeFosil${i+1}`).on("change", function(e) {
                                            // alert($(this).data('id'));
                                            if ($(`#flagBikeFosil${i+1}`).is(':checked')) {
                                                mapContainer.removeLayer(markerArray[$(this).data('id')]);
                                                $(`#listPetugasClickBikeFosil${i+1}`).hide();
                                            } else {
                                                mapContainer.addLayer(markerArray[$(this).data('id')]);
                                                $(`#listPetugasClickBikeFosil${i+1}`).show();
                                            }
                                        });

                                    }
                                    $('#datatablePetugasGetTrackBikeFosil').DataTable({
                                        responsive: true,

                                        scrollX: true,

                                        sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

                                        buttons: ["excel", "csv", "pdf"],
                                        processing: true,
                                        oLanguage: {

                                            sSearch: 'Search:'

                                        },
                                    });


                                    filterPetugasNon.forEach(el => {
                                        if (el.handphone != null) {
                                            let nomorDepan = el.handphone.substring(0, 2);
                                            if (nomorDepan === "62") {
                                                el.handphone = el.handphone;
                                            } else if (nomorDepan === "08") {
                                                el.handphone = "62" + el.handphone.substring(1);
                                            } else if (nomorDepan === "+6") {
                                                el.handphone = el.handphone.substring(1);
                                            } else {
                                                el.handphone = el.handphone;
                                            }
                                        } else {
                                            el.handphone = 0;
                                        }

                                        countlistNon += 1;
                                        listNon += `  
                                        <tr>
                                            <td>${el.status_login == 1 ? `<span class="badge rounded-pill bg-primary" style="font-size: 10px;">${countlistNon}</span>` : `<span class="badge rounded-pill bg-danger" style="font-size: 10px;">${countlistNon}</span>`}</td>
                                            <td> ${el.rank_officer ? el.rank_officer : '' } - ${el.name_officer}</td>
                                            <td> ${el.name_country ? el.name_country : '-'}</td>
                                            <td> 
                                                ${el.status_login == 1 ? `<span style="font-size: 10px; display:none;">Sudah Aktif</span>` : `<span style="font-size: 10px; display:none;">Tidak Aktif</span>`}
                                                <div style="display: flex;">
                                                    <a class="btn" style="margin-top: -7px; color: #495057;" href="https://api.whatsapp.com/send?phone=${el.handphone}" target="_blank"><i class="fa fas fa-phone "></i></a> 
                                                    <a href="https://t.me/+${el.handphone}" target="_blank" style="margin-right: 10px;font-size: 17px;">
                                                    <i class="fab fa-telegram"></i>
                                                    </a>
                                                    <a class="btn" style="margin-left: -13px;margin-top: -7px; color: #495057;" href="<?php echo base_url('zoom'); ?>" target="_blank" onClick="sendZoomNonEncrypt('${el.id_officer}')"><i class="fa  fas fa-video "></i></a> 
                                                    <button class="btn" style="margin-left: -13px;margin-top: -13px;"
                                                        id="listPetugasClickNon${countlistNon}"  
                                                        data-id="${el.id_officer}"   
                                                        data-nama="${el.name_team}"  
                                                        data-akun="${el.name_account}" 
                                                        data-nrp="${el.nrp_user}"
                                                        data-telp="${el.handphone}"
                                                        data-cord="${el.latitude},${el.longitude}" >
                                                        <i style="color: #495057;" class="fa fas fa-eye"></i>
                                                    </button>
                                                    <div class="switch" style="margin-left: -11px;">
                                                        <input class="flag" type="checkbox" id="flagNon${countlistNon}" 
                                                        data-id="${el.id_officer}"  
                                                        data-nama="${el.name_team}"  
                                                        data-akun="${el.name_account}" 
                                                        data-nrp="${el.nrp_user}"
                                                        data-telp="${el.handphone}"
                                                        data-cord="${el.latitude},${el.longitude}"
                                                        data-toggle="toggle"  data-onstyle="success" data-offstyle="danger" data-on="Approved" data-off="Not Approved" data-size="lg"> 
                                                        <label for="flagNon${countlistNon}"></label>
                                                    </div>
                                                </div> 
                                            </td>
                                        </tr>
                                    `;
                                        $('#listPetugasGetTrackNon').html(listNon);
                                    });
                                    $(`#allPetugasNon`).on('change', function(e) {
                                        if ($(`#allPetugasNon`).is(':checked')) {
                                            $("#gaturDisplay").prop('checked', true);
                                            for (let i = 0; i < countlistNon; i++) {
                                                if (markerArray[filterPetugasNon[i]['id_officer']] != null) {
                                                    mapContainer.addLayer(markerArray[filterPetugasNon[i]['id_officer']]);
                                                }
                                            }
                                        } else {
                                            $("#gaturDisplay").prop('checked', false);
                                            for (let i = 0; i < countlistNon; i++) {
                                                if (markerArray[filterPetugasNon[i]['id_officer']] != null) {
                                                    mapContainer.removeLayer(markerArray[filterPetugasNon[i]['id_officer']]);
                                                }
                                            }
                                        }
                                    });
                                    $("#gaturDisplay").on("change", function(e) {
                                        if ($(this).is(':checked')) {
                                            $("#allPetugasNon").prop('checked', true);
                                            for (let i = 0; i < countlistNon; i++) {
                                                if (markerArray[filterPetugasNon[i]['id_officer']] != null) {
                                                    mapContainer.addLayer(markerArray[filterPetugasNon[i]['id_officer']]);
                                                }
                                            }
                                            $("#myModalPetugasDisplay").modal('show');
                                        } else {
                                            $("#allPetugasNon").prop('checked', false);
                                            for (let i = 0; i < countlistNon; i++) {
                                                if (markerArray[filterPetugasNon[i]['id_officer']] != null) {
                                                    mapContainer.removeLayer(markerArray[filterPetugasNon[i]['id_officer']]);
                                                }
                                            }
                                        }
                                    });
                                    for (let i = 0; i < countlistNon; i++) {
                                        $(`#listPetugasClickNon${i+1}`).click(function() {
                                            // console.log('masuk');
                                            var latlong = $(this).data('cord').split(',');
                                            var latitude = parseFloat(latlong[0]);
                                            var longitude = parseFloat(latlong[1]);
                                            mapContainer.flyTo([latitude, longitude], 20);
                                            markerArray[$(this).data('id')].openPopup();
                                        });

                                        $(`#flagNon${i+1}`).on("change", function(e) {
                                            // alert($(this).data('id'));
                                            if ($(`#flagNon${i+1}`).is(':checked')) {
                                                mapContainer.removeLayer(markerArray[$(this).data('id')]);
                                                $(`#listPetugasClickNon${i+1}`).hide();
                                            } else {
                                                mapContainer.addLayer(markerArray[$(this).data('id')]);
                                                $(`#listPetugasClickNon${i+1}`).show();
                                            }
                                        });

                                    }
                                    $('#datatablePetugasGetTrackNon').DataTable({
                                        responsive: true,

                                        scrollX: true,

                                        sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

                                        buttons: ["excel", "csv", "pdf"],
                                        processing: true,
                                        oLanguage: {

                                            sSearch: 'Search:'

                                        },
                                    });










                                    for (let i = 0; i < dummyGetTracking.length; i++) {
                                        setTimeout(() => {


                                            var cordLat = parseFloat(dummyGetTracking[i].latitude);
                                            var corLong = parseFloat(dummyGetTracking[i].longitude);

                                            if (dummyGetTracking[i].bawa_penumpang == 1) {
                                                // iconflagVip = `<img src="${dummyGetTracking[i].photo_country != '-' ? dummyGetTracking[i].photo_country : '<?php echo base_url(); ?>assets/no_image.png'}" style="width: 35px;margin-left: 10px;height: 30px;">
                                                //     <div style="position: absolute;margin-top: -45px;margin-left: 5px;">
                                                //         <span class="badge rounded-pill" style="background-color: black; color: white;">${dummyGetTracking[i].name_country}</span>
                                                //     </div>`;  
                                                iconflagVip = `<div style="width: 35px;margin-left: 10px;height: 30px;"></div>`;
                                            } else {
                                                iconflagVip = `<div style="width: 35px;margin-left: 10px;height: 30px;"></div>`;
                                            }

                                            jenis = '';
                                            if (dummyGetTracking[i].type_vehicle == 'Sepeda Motor' && dummyGetTracking[i].fuel_vehicle == "Fosil") {

                                                jenis = `
                                                <div>
                                                    <div style="position: relative;">
                                                        ${iconflagVip}
                                                        <img src="<?php echo base_url(); ?>assets/icon/motor.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">
                                                    </div>
                                                    <div style="position: absolute;margin-top: -29px;">
                                                        <span class="badge rounded-pill bg-primary">${dummyGetTracking[i].name_officer}</span>
                                                    </div>
                                                </div>`;
                                            } else if (dummyGetTracking[i].type_vehicle == 'Mobil' && dummyGetTracking[i].fuel_vehicle == "Fosil") {
                                                jenis = `
                                            <div>
                                                <div style="position: relative;">
                                                    ${iconflagVip}
                                                    <img src="<?php echo base_url(); ?>assets/icon/mobil.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">
                                                </div>
                                                <div style="position: absolute;margin-top: -29px;">
                                                    <span class="badge rounded-pill bg-primary">${dummyGetTracking[i].name_officer}</span>
                                                </div>
                                            </div>`;
                                            } else if (dummyGetTracking[i].type_vehicle == 'Sepeda Motor' && dummyGetTracking[i].fuel_vehicle == "Listrik") {
                                                jenis = `
                                            <div>
                                                <div>
                                                    ${iconflagVip}
                                                    <img src="<?php echo base_url(); ?>assets/icon/gpsIdMotor.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">
                                                </div>
                                                <div style="margin-top: -30px;">
                                                    <span class="badge rounded-pill" style="background-color: #169fda">${dummyGetTracking[i].name_officer}</span>
                                                </div>
                                            </div>`;
                                            } else if (dummyGetTracking[i].type_vehicle == 'Mobil' && dummyGetTracking[i].fuel_vehicle == "Listrik") {
                                                jenis = `
                                            <div>
                                                <div>
                                                    ${iconflagVip}
                                                    <img src="<?php echo base_url(); ?>assets/icon/gpsIdMobil.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">
                                                </div>
                                                <div style="margin-top: -30px;">
                                                    <span class="badge rounded-pill" style="background-color: #169fda">${dummyGetTracking[i].name_officer}</span>
                                                </div>
                                            </div>`;
                                            } else {

                                                jenis = `
                                            <div>
                                                <div style="position: relative;">
                                                    <img src="<?php echo base_url(); ?>assets/icon/topi.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">
                                                </div> 
                                                <div style="position: absolute;margin-top: -29px;">
                                                    <span class="badge rounded-pill bg-primary" ${`style="background-color: purple !important"`}>${dummyGetTracking[i].name_officer}</span>
                                                </div>
                                            </div>`;
                                            }

                                            if (dummyGetTracking[i].photo_officer || dummyGetTracking[i].photo_officer != null) {
                                                fotoPetugas = `<img src="<?php echo url_api(); ?>officer/${dummyGetTracking[i].photo_officer}" alt="" class="img-fluid rounded-circle d-block  float-center">`;
                                            } else {
                                                fotoPetugas = `<img src="<?php echo base_url(); ?>assets/user.jpg" alt="" class="img-fluid rounded-circle d-block  float-center">`;
                                            }

                                            if (dummyGetTracking[i].name_country || dummyGetTracking[i].name_country != '-' || dummyGetTracking[i].name_country != null) {
                                                bendera = `${dummyGetTracking[i].name_country}`;
                                            } else {
                                                bendera = `-`;
                                            }

                                            if (dummyGetTracking[i].photo_country || dummyGetTracking[i].photo_country != '-' || dummyGetTracking[i].photo_country != null) {
                                                fotoBendera = `<img src="${dummyGetTracking[i].photo_country}" alt="" style="width: 20%;margin-bottom: 10px;">`;
                                            } else {
                                                fotoBendera = ``;
                                            }



                                            // if(dummyGetTracking[i].status_login == 1){
                                            if (markerArray[dummyGetTracking[i].id_officer] != null) {
                                                var fotoPetugas = "";

                                                markerArray[dummyGetTracking[i].id_officer].remove();
                                                markerArray[dummyGetTracking[i].id_officer] = L.marker([dummyGetTracking[i].latitude, dummyGetTracking[i].longitude], {
                                                    renderer: myRenderer,
                                                    icon: L.divIcon({
                                                        //   className: 'location-pin',
                                                        html: jenis,
                                                        iconSize: [5, 5],
                                                        iconAnchor: [5, 10]
                                                        // iconAnchor: [10, 33]
                                                    })
                                                }).bindPopup(`
                                                    <div class="text-center" style="width: 300px;"> 
                                                        <div class="row mt-3"> 
                                                            <div class="col-md-12">
                                                                ${fotoBendera}
                                                            </div>
                                                            ${call_wa_dan_biasa(dummyGetTracking[i].handphone, dummyGetTracking[i].id_officer, 'no-encrypt')}
                                                        </div>
                            
                            
                                                            <div class="row text-start mt-3">
                                                                <div class="col-md-4">
                                                                    <span style="font-size: 12px;font-weight: bold;">Nama</span>  
                                                                </div>
                                                                <div class="col-md-1">
                                                                    :
                                                                </div>
                                                                <div class="col-md-7">
                                                                    <span style="font-size: 12px;">${dummyGetTracking[i].rank_officer} - ${dummyGetTracking[i].name_officer}</span>
                                                                </div> 
                        
                                                                <div class="col-md-4">
                                                                    <span style="font-size: 12px;font-weight: bold;">PAM</span>  
                                                                </div>
                                                                <div class="col-md-1">
                                                                    :
                                                                </div>
                                                                <div class="col-md-7">
                                                                    <span style="font-size: 12px;">${dummyGetTracking[i].pam_officer != null ? dummyGetTracking[i].pam_officer : '-'}</span>
                                                                </div> 
                                                                <div class="col-md-4">
                                                                    <span style="font-size: 12px;font-weight: bold;">Delegasi</span>  
                                                                </div>
                                                                <div class="col-md-1">
                                                                    :
                                                                </div>
                                                                <div class="col-md-7">
                                                                    <span style="font-size: 12px;">${bendera}</span>
                                                                </div> 
                        
                                                                <div class="col-md-4">
                                                                    <span style="font-size: 12px;font-weight: bold;">Status Login</span>  
                                                                </div>
                                                                <div class="col-md-1">
                                                                    :
                                                                </div>
                                                                <div class="col-md-7">
                                                                    ${dummyGetTracking[i].status_login == 1 ? '<span class="badge rounded-pill bg-primary" style="font-size: 12px;">Aktif</span>' : '<span class="badge rounded-pill bg-danger" style="font-size: 12px;">Tidak Aktif</span>'}
                                                                </div> 
                                
                                                                <div class="col-md-12 text-center  mt-3">
                                                                    <span class="badge rounded-pill bg-primary" style="font-size: 12px;">Lokasi Petugas</span>  
                                                                    <p style="font-size: 12px;" id="lokasiMarker${dummyGetTracking[i].id_officer}"></p>
                                                                </div> 
                                                            </div>  
                                                        
                                                    </div>
                                                `).addTo(mapContainer).on('click', function(e) {
                                                    // console.log(e.latlng);
                                                    $.ajax({
                                                        type: "POST",
                                                        url: "<?php echo base_url(); ?>dashboard/getAddres",
                                                        data: {
                                                            "lat": e.latlng['lat'],
                                                            "lng": e.latlng['lng'],
                                                        },
                                                        dataType: "JSON",
                                                        success: function(result) {
                                                            // console.log(result['responseMessage']);
                                                            $(`#lokasiMarker${dummyGetTracking[i].id_officer}`).html(`${result['responseMessage']}`);
                                                        }
                                                    });
                                                });
                                            } else {
                                                markerArray[dummyGetTracking[i].id_officer] = L.marker([dummyGetTracking[i].latitude, dummyGetTracking[i].longitude], {
                                                    renderer: myRenderer,
                                                    icon: L.divIcon({
                                                        // className: 'location-pin',
                                                        html: jenis,
                                                        iconSize: [5, 5],
                                                        iconAnchor: [5, 10]
                                                        // iconAnchor: [10, 33]
                                                    })
                                                }).bindPopup(`
                                                    <div class="text-center" style="width: 300px;"> 
                                                        <div class="row mt-3"> 
                                                            <div class="col-md-12">
                                                                ${fotoBendera}
                                                            </div>
                                                            ${call_wa_dan_biasa(dummyGetTracking[i].handphone, dummyGetTracking[i].id_officer, 'no-encrypt')}
                                                        </div>

                                                        
                                                        <div class="row text-start mt-3">
                                                            <div class="col-md-4">
                                                                <span style="font-size: 12px;font-weight: bold;">Nama</span>  
                                                            </div>
                                                            <div class="col-md-1">
                                                                :
                                                            </div>
                                                            <div class="col-md-7">
                                                                <span style="font-size: 12px;">${dummyGetTracking[i].rank_officer} - ${dummyGetTracking[i].name_officer}</span>
                                                            </div>  
                                                        
                                                            <div class="col-md-4">
                                                                <span style="font-size: 12px;font-weight: bold;">PAM</span>  
                                                            </div> 
                                                            <div class="col-md-1">
                                                                :
                                                            </div>
                                                            <div class="col-md-7">
                                                                <span style="font-size: 12px;">${dummyGetTracking[i].pam_officer != null ? dummyGetTracking[i].pam_officer : '-'}</span>
                                                            </div>  
                                                            <div class="col-md-4">
                                                                <span style="font-size: 12px;font-weight: bold;">Delegasi</span>  
                                                            </div> 
                                                            <div class="col-md-1">
                                                                :
                                                            </div>
                                                            <div class="col-md-7">
                                                                <span style="font-size: 12px;">${bendera}</span>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <span style="font-size: 12px;font-weight: bold;">Status Login</span>  
                                                            </div>
                                                            <div class="col-md-1">
                                                                :
                                                            </div>
                                                            <div class="col-md-7">
                                                            ${dummyGetTracking[i].status_login == 1 ? '<span class="badge rounded-pill bg-primary" style="font-size: 12px;">Aktif</span>' : '<span class="badge rounded-pill bg-danger" style="font-size: 12px;">Tidak Aktif</span>'}
                                                            </div> 

                                                            <div class="col-md-12 text-center  mt-3">
                                                                <span class="badge rounded-pill bg-primary" style="font-size: 12px;">Lokasi Petugas</span>  
                                                                <p style="font-size: 12px;" id="lokasiMarker${dummyGetTracking[i].id_officer}"></p>
                                                            </div> 
                                                        </div> 
                                                        
                                                    </div>
                                                `).addTo(mapContainer).on('click', function(e) {
                                                    // console.log(e.latlng);
                                                    $.ajax({
                                                        type: "POST",
                                                        url: "<?php echo base_url(); ?>dashboard/getAddres",
                                                        data: {
                                                            "lat": e.latlng['lat'],
                                                            "lng": e.latlng['lng'],
                                                        },
                                                        dataType: "JSON",
                                                        success: function(result) {
                                                            // console.log(result['responseMessage']);
                                                            $(`#lokasiMarker${dummyGetTracking[i].id_officer}`).html(`${result['responseMessage']}`);
                                                        }
                                                    });
                                                });
                                            }
                                            // }



                                            var iniNomor;
                                            if (dummyGetTracking[i].handphone != null && dummyGetTracking[i].handphone != '0') {
                                                let nomorDepan1 = dummyGetTracking[i].handphone.substring(0, 2);
                                                if (nomorDepan1 === "62") {
                                                    iniNomor = dummyGetTracking[i].handphone;
                                                } else if (nomorDepan1 === "08") {
                                                    iniNomor = "62" + dummyGetTracking[i].handphone.substring(1);
                                                } else if (nomorDepan1 === "+6") {
                                                    iniNomor = dummyGetTracking[i].handphone.substring(1);
                                                } else {
                                                    iniNomor = dummyGetTracking[i].handphone;
                                                }
                                            } else {
                                                iniNomor = 0;
                                            }

                                            countlistDisplay += 1;
                                            listDisplay += `  
                                            <tr>
                                                <td> ${dummyGetTracking[i].status_login == 1 ? `<span class="badge rounded-pill bg-primary" style="font-size: 10px;">${countlistDisplay}</span>` : `<span class="badge rounded-pill bg-danger" style="font-size: 10px;">${countlistDisplay}</span>`} </td>
                                                <td><a href="<?php echo base_url() ?>operasi/Petugas" target="_blank">${dummyGetTracking[i].rank_officer ? dummyGetTracking[i].rank_officer : '' } - ${dummyGetTracking[i].name_officer}</a></td>
                                                <td><a href="<?php echo base_url() ?>operasi/Akun" target="_blank"> ${dummyGetTracking[i].name_country ? dummyGetTracking[i].name_country : '-'} </a></td>
                                                <td> 
                                                    ${dummyGetTracking[i].status_login == 1 ? `<span style="font-size: 10px; display:none;">Sudah Aktif</span>` : `<span style="font-size: 10px; display:none;">Tidak Aktif</span>`}
                                                    <div style="display: flex;">
                                                        <a class="btn" style="margin-top: -7px; color: #495057;" href="https://api.whatsapp.com/send?phone=${iniNomor}" target="_blank"><i class="fa fas fa-phone "></i></a> 
                                                        <a href="https://t.me/+${iniNomor}" target="_blank" style="margin-right: 10px;font-size: 17px;">
                                                        <i class="fab fa-telegram"></i>
                                                        </a>
                                                        <a class="btn" style="margin-left: -13px;margin-top: -7px; color: #495057;" href="<?php echo base_url('zoom'); ?>" target="_blank" onClick="sendZoomNonEncrypt('${dummyGetTracking[i].id_officer}')"><i class="fa  fas fa-video "></i></a> 
                                                        <button class="btn" style="margin-left: -13px;margin-top: -13px;"
                                                            id="listPetugasClickDisplay${countlistDisplay}"   
                                                            data-id="${dummyGetTracking[i].id_officer}"
                                                            data-nama="${dummyGetTracking[i].name_team}"  
                                                            data-akun="${dummyGetTracking[i].name_account}" 
                                                            data-nrp="${dummyGetTracking[i].nrp_user}"
                                                            data-telp="${iniNomor}"
                                                            data-cord="${dummyGetTracking[i].latitude},${dummyGetTracking[i].longitude}" >
                                                            <i style="color: #495057;" class="fa fas fa-eye"></i>
                                                        </button>
                                                        <div class="switch" style="margin-left: -11px;">
                                                            <input class="flag" type="checkbox" id="flagDisplay${countlistDisplay}" 
                                                            data-id="${dummyGetTracking[i].id_officer}"  
                                                            data-nama="${dummyGetTracking[i].name_team}"  
                                                            data-akun="${dummyGetTracking[i].name_account}" 
                                                            data-nrp="${dummyGetTracking[i].nrp_user}"
                                                            data-telp="${iniNomor}"
                                                            data-cord="${dummyGetTracking[i].latitude},${dummyGetTracking[i].longitude}"
                                                            data-toggle="toggle"  data-onstyle="success" data-offstyle="danger" data-on="Approved" data-off="Not Approved" data-size="lg"> 
                                                            <label for="flagDisplay${countlistDisplay}"></label>
                                                        </div>
                                                    </div> 
                                                </td>
                                            </tr>
                                        `;
                                            $('#isiModalPetugasDisplay').html(listDisplay);
                                        }, i * 500);
                                    }





                                    setTimeout(() => {

                                        for (let i = 0; i < dummyGetTracking.length; i++) {

                                            $(`#listPetugasClickDisplay${i+1}`).click(function() {
                                                // console.log('masuk');
                                                var latlong = $(this).data('cord').split(',');
                                                var latitude = parseFloat(latlong[0]);
                                                var longitude = parseFloat(latlong[1]);
                                                mapContainer.flyTo([latitude, longitude], 20);
                                                markerArray[$(this).data('id')].openPopup();
                                            });

                                            $(`#flagDisplay${i+1}`).on("change", function(e) {
                                                // alert($(this).data('id'));
                                                if ($(`#flagDisplay${i+1}`).is(':checked')) {
                                                    mapContainer.removeLayer(markerArray[$(this).data('id')]);
                                                    $(`#listPetugasClickDisplay${i+1}`).hide();
                                                } else {
                                                    mapContainer.addLayer(markerArray[$(this).data('id')]);
                                                    $(`#listPetugasClickDisplay${i+1}`).show();
                                                }
                                            });

                                        }
                                        $('#datatablePetugasOnDisplay').DataTable({
                                            responsive: true,

                                            scrollX: true,

                                            sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

                                            buttons: ["excel", "csv", "pdf"],
                                            processing: true,
                                            oLanguage: {
                                                sSearch: 'Search:'
                                            },
                                        });


                                        $("#gaturDisplay").prop('disabled', false);
                                        $("#r2ListrikDisplay").prop('disabled', false);
                                        $("#r4ListrikDisplay").prop('disabled', false);
                                        $("#r2FosilDisplay").prop('disabled', false);
                                        $("#r4FosilDisplay").prop('disabled', false);
                                        $("#loadGaturDisplay").html(`PAM ROLAKIR`);
                                        $("#loadR2ListrikDisplay").html(`R2 Listrik`);
                                        $("#loadR4ListrikDisplay").html(`R4 Listrik`);
                                        $("#loadR2FosilDisplay").html(`R2 Fosil`);
                                        $("#loadR4FosilDisplay").html(`R4 Fosil`);

                                        $("#overlayMenuDisplay").fadeOut(300);


                                        $("#allPetugasCarListrik").prop('disabled', false);
                                        $("#allPetugasBikeListrik").prop('disabled', false);
                                        $("#allPetugasCarFosil").prop('disabled', false);
                                        $("#allPetugasBikeFosil").prop('disabled', false);
                                        $("#allPetugasNon").prop('disabled', false);



                                        // Swal.fire(
                                        //     `Fitur Sudah Dapat Di Gunakan`,
                                        //     'Terimakasih sudah Menunggu',
                                        //     'success'
                                        // ).then(function() {

                                        // });
                                    }, dummyGetTracking.length * 500);
                                    $("#overlay").fadeOut(300);

                                } else {
                                    $("#overlay").fadeOut(300);
                                }
                            },
                            error: function() {
                                $("#overlay").fadeOut(300);
                                console.log("gagal connect Tracking");
                            }
                        });
                    }

                    const call_wa_dan_biasa = (noTelp, officer_id, statusEncrypt) => {
                        // let castNoTelp = noTelp.sub


                        if (statusEncrypt == 'no-encrypt') {
                            sendNotifZ = `onClick="sendZoomNonEncrypt('${officer_id}')"`;
                        } else {
                            sendNotifZ = `onClick="sendZoom('${officer_id}')"`;
                        }

                        if (noTelp != null && noTelp != '0') {
                            let noDepan = noTelp.substring(0, 2);
                            if (noDepan === "62") {
                                noTelp = noTelp;
                            } else if (noDepan === "08") {
                                noTelp = "62" + noTelp.substring(1);
                            } else if (noDepan === "+6") {
                                noTelp = noTelp.substring(1);
                            } else {
                                noTelp = noTelp;
                            }


                            return `  
                            <div class="text-center">
                                <a href="https://api.whatsapp.com/send?phone=${noTelp}" target="_blank">
                                    <img src="https://img.icons8.com/3d-fluency/100/000000/whatsapp.png" style="width: 35px;height: 35px"/>
                                </a>
                                <a href="tel:+${noTelp}" target="_blank">
                                    <img src="https://img.icons8.com/color/48/000000/phone.png" style="width: 35px;height: 35px"/>
                                </a>
                                <a href="https://t.me/+${noTelp}" target="_blank">
                                    <img src="https://img.icons8.com/3d-fluency/100/000000/telegram.png" style="width: 35px;height: 35px"/>
                                </a>
                                <a class="btn" style="color: #495057;" href="https://bit.ly/k3izoom" ${sendNotifZ} target="_blank">
                                    <i class="fa  fas fa-video "></i>
                                </a> 
                            </div>
                        `
                        } else {
                            return `  
                            <div class="text-center"> 
                                <a class="btn" style="color: #495057;" href="https://bit.ly/k3izoom" ${sendNotifZ} target="_blank">
                                    <i class="fa  fas fa-video "></i>
                                </a> 
                            </div>
                        `
                        }
                    }

                    function togglePress(e) {
                        const btn = e.target;
                        const isPressed = btn.getAttribute("aria-pressed");
                        if (isPressed == "false") {
                            btn.setAttribute("aria-pressed", true);
                        } else {
                            btn.setAttribute("aria-pressed", false);
                        }
                    }
                    document.querySelector("button").addEventListener("click", togglePress);



                    // startSocket();

                    function startSocket() {
                        socket.on('sendToAdminMobile', function(ress) {

                            // console.log(ress); 
                            var flagVip = '';


                            // console.log(result); 

                            var cordLat = parseFloat(ress.latitude);
                            var corLong = parseFloat(ress.longitude);
                            var bendera = '';
                            var jenis = '';
                            // for (let i = 0; i < ress.length; i++) {  


                            // if(ress.type_vehicle == 'Sepeda Motor'){
                            //     // jenis = `<img src="<?php echo base_url(); ?>assets/admin/images/mobil.png"><div class="pin"></div><div class="pulse"></div>`;
                            //     jenis = `<img src="<?php echo base_url(); ?>assets/icon/motor.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">`;
                            // }else if(ress.type_vehicle == 'Mobil'){
                            //     jenis = `<img src="<?php echo base_url(); ?>assets/icon/mobil.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">`;
                            // }else{
                            //     // jenis = `<img src="<?php echo base_url(); ?>assets/admin/images/sepedaMotor.png"><div class="pin"></div><div class="pulse"></div>`
                            //     jenis = `<img src="<?php echo base_url(); ?>assets/icon/topi.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">`;
                            // } 



                            if (ress.bawa_penumpang == 1) {
                                // iconflagVip = `<img src="${ress.photo_country != '-' ? ress.photo_country : '<?php echo base_url(); ?>assets/no_image.png'}" style="width: 35px;margin-left: 10px;height: 30px;">
                                //             <div style="position: absolute;margin-top: -45px;margin-left: 5px;">
                                //                 <span class="badge rounded-pill" style="background-color: black; color: white;">${ress.name_country}</span>
                                //             </div>`;  
                                iconflagVip = `<div style="width: 35px;margin-left: 10px;height: 30px;"></div>`;
                            } else {
                                iconflagVip = `<div style="width: 35px;margin-left: 10px;height: 30px;"></div>`;
                            }

                            jenis = '';
                            if (ress.type_vehicle == 'Sepeda Motor' && ress.fuel_vehicle == "Fosil") {



                                jenis = `
                                    <div>
                                        <div style="position: relative;">
                                            ${iconflagVip}
                                            <img src="<?php echo base_url(); ?>assets/icon/motor.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">
                                        </div>
                                        <div style="position: absolute;margin-top: -29px;">
                                            <span class="badge rounded-pill bg-primary">${ress.name_officer}</span>
                                        </div>
                                    </div>`;
                            } else if (ress.type_vehicle == 'Mobil' && ress.fuel_vehicle == "Fosil") {



                                jenis = `
                                    <div>
                                        <div style="position: relative;">
                                            ${iconflagVip}
                                            <img src="<?php echo base_url(); ?>assets/icon/mobil.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">
                                        </div>
                                        <div style="position: absolute;margin-top: -29px;">
                                            <span class="badge rounded-pill bg-primary">${ress.name_officer}</span>
                                        </div>
                                    </div>`;
                            } else if (ress.type_vehicle == 'Sepeda Motor' && ress.fuel_vehicle == "Listrik") {



                                jenis = `
                                    <div>
                                        <div>
                                            ${iconflagVip}
                                            <img src="<?php echo base_url(); ?>assets/icon/gpsIdMotor.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">
                                        </div>
                                        <div style="margin-top: -30px;">
                                            <span class="badge rounded-pill" style="background-color: #169fda">${ress.name_officer}</span>
                                        </div>
                                    </div>`;
                            } else if (ress.type_vehicle == 'Mobil' && ress.fuel_vehicle == "Listrik") {



                                jenis = `
                                    <div>
                                        <div>
                                            ${iconflagVip}
                                            <img src="<?php echo base_url(); ?>assets/icon/gpsIdMobil.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">
                                        </div>
                                        <div style="margin-top: -30px;">
                                            <span class="badge rounded-pill" style="background-color: #169fda">${ress.name_officer}</span>
                                        </div>
                                    </div>`;
                            } else {



                                jenis = `
                                    <div>
                                        <div style="position: relative;">
                                            <img src="<?php echo base_url(); ?>assets/icon/topi.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">
                                        </div> 
                                        <div style="position: absolute;margin-top: -29px;">
                                            <span class="badge rounded-pill bg-primary" ${`style="background-color: purple !important"`}>${ress.name_officer}</span>
                                        </div>
                                    </div>`;
                            }

                            if (ress.photo_officer || ress.photo_officer != null) {
                                fotoPetugas = `<img src="<?php echo url_api(); ?>officer/${ress.photo_officer}" alt="" class="img-fluid rounded-circle d-block  float-center">`;
                            } else {
                                fotoPetugas = `<img src="<?php echo base_url(); ?>assets/user.jpg" alt="" class="img-fluid rounded-circle d-block  float-center">`;
                            }

                            if (ress.name_country || ress.name_country != '-' || ress.name_country != null) {
                                bendera = `${ress.name_country}`;
                            } else {
                                bendera = `-`;
                            }

                            if (ress.photo_country || ress.photo_country != '-' || ress.photo_country != null) {
                                fotoBendera = `<img src="${ress.photo_country}" alt="" style="width: 20%;margin-bottom: 10px;">`;
                            } else {
                                fotoBendera = ``;
                            }

                            // if(ress.status_login == 1){
                            if (markerArray[ress.id_officer] != null) {
                                console.log(`UPDATE Track Nama Petugas: B. ( ${ress.nrp_user} ${ress.name_officer} ) - ${ress.type_vehicle} - ST.PENUMPANG: ${ress.bawa_penumpang}`);


                                markerArray[ress.id_officer].remove();
                                markerArray[ress.id_officer] = L.marker([ress.latitude, ress.longitude], {
                                    renderer: myRenderer,
                                    icon: L.divIcon({
                                        //   className: 'location-pin',
                                        html: jenis,
                                        iconSize: [5, 5],
                                        iconAnchor: [5, 10]
                                        // iconAnchor: [10, 33]
                                    })
                                }).bindPopup(`
                                            <div class="text-center" style="width: 300px;"> 
                                                <div class="row mt-3"> 
                                                    <div class="col-md-12">
                                                        <a href="javascript:void(0);">
                                                        ${fotoBendera}
                                                        </a>
                                                    </div>
                                                    ${call_wa_dan_biasa(ress.handphone, ress.id_officer, 'no-encrypt')}
                                                </div>
                    
                    
                                                    <div class="row text-start mt-3">
                                                        <div class="col-md-4">
                                                            <span style="font-size: 12px;font-weight: bold;">Nama</span>  
                                                        </div>
                                                        <div class="col-md-1">
                                                            :
                                                        </div>
                                                        <div class="col-md-7">
                                                            <span style="font-size: 12px;">${ress.rank_officer} - ${ress.name_officer}</span>
                                                        </div> 
                
                                                        <div class="col-md-4">
                                                            <span style="font-size: 12px;font-weight: bold;">PAM</span>  
                                                        </div>
                                                        <div class="col-md-1">
                                                            :
                                                        </div>
                                                        <div class="col-md-7">
                                                            <span style="font-size: 12px;">${ress.pam_officer != null ? ress.pam_officer : '-'}</span>
                                                        </div> 
                                                        <div class="col-md-4">
                                                            <span style="font-size: 12px;font-weight: bold;">Delegasi</span>  
                                                        </div>
                                                        <div class="col-md-1">
                                                            :
                                                        </div>
                                                        <div class="col-md-7">
                                                            <span style="font-size: 12px;">${bendera}</span>
                                                        </div> 
                
                                                        <div class="col-md-4">
                                                            <span style="font-size: 12px;font-weight: bold;">Status Login</span>  
                                                        </div>
                                                        <div class="col-md-1">
                                                            :
                                                        </div>
                                                        <div class="col-md-7">
                                                            ${ress.status_login == 1 ? '<span class="badge rounded-pill bg-primary" style="font-size: 12px;">Aktif</span>' : '<span class="badge rounded-pill bg-danger" style="font-size: 12px;">Tidak Aktif</span>'}
                                                        </div> 
                        
                                                        <div class="col-md-12 text-center  mt-3">
                                                            <span class="badge rounded-pill bg-primary" style="font-size: 12px;">Lokasi Petugas</span>  
                                                            <p style="font-size: 12px;" id="lokasiMarker${ress.id_officer}"></p>
                                                        </div> 
                                                    </div>  
                                                
                                            </div>
                                        `).addTo(mapContainer).on('click', function(e) {
                                    // console.log(e.latlng);
                                    $.ajax({
                                        type: "POST",
                                        url: "<?php echo base_url(); ?>dashboard/getAddres",
                                        data: {
                                            "lat": e.latlng['lat'],
                                            "lng": e.latlng['lng'],
                                        },
                                        dataType: "JSON",
                                        success: function(result) {
                                            // console.log(result['responseMessage']);
                                            $(`#lokasiMarker${ress.id_officer}`).html(`${result['responseMessage']}`);
                                        }
                                    });
                                });
                            } else {
                                console.log(`NEW Track Nama Petugas: B. ( ${ress.nrp_user} ${ress.name_officer} ) - ${ress.type_vehicle}`);
                                markerArray[ress.id_officer] = L.marker([ress.latitude, ress.longitude], {
                                    renderer: myRenderer,
                                    icon: L.divIcon({
                                        //   className: 'location-pin',
                                        html: jenis,
                                        iconSize: [5, 5],
                                        iconAnchor: [5, 10]
                                        // iconAnchor: [10, 33]
                                    })
                                }).bindPopup(`
                                            <div class="text-center" style="width: 300px;"> 
                                                <div class="row mt-3"> 
                                                    <div class="col-md-12">
                                                        ${fotoBendera}
                                                    </div>
                                                    ${call_wa_dan_biasa(ress.handphone, ress.id_officer, 'no-encrypt')}
                                                </div>
                    
                    
                                                    <div class="row text-start mt-3">
                                                        <div class="col-md-4">
                                                            <span style="font-size: 12px;font-weight: bold;">Nama</span>  
                                                        </div>
                                                        <div class="col-md-1">
                                                            :
                                                        </div>
                                                        <div class="col-md-7">
                                                            <span style="font-size: 12px;">${ress.rank_officer} - ${ress.name_officer}</span>
                                                        </div> 
                
                                                        <div class="col-md-4">
                                                            <span style="font-size: 12px;font-weight: bold;">PAM</span>  
                                                        </div>
                                                        <div class="col-md-1">
                                                            :
                                                        </div>
                                                        <div class="col-md-7">
                                                            <span style="font-size: 12px;">${ress.pam_officer != null ? ress.pam_officer : '-'}</span>
                                                        </div> 
                                                        <div class="col-md-4">
                                                            <span style="font-size: 12px;font-weight: bold;">Delegasi</span>  
                                                        </div>
                                                        <div class="col-md-1">
                                                            :
                                                        </div>
                                                        <div class="col-md-7">
                                                            <span style="font-size: 12px;">${bendera}</span>
                                                        </div> 
                
                                                        <div class="col-md-4">
                                                            <span style="font-size: 12px;font-weight: bold;">Status Login</span>  
                                                        </div>
                                                        <div class="col-md-1">
                                                            :
                                                        </div>
                                                        <div class="col-md-7">
                                                            ${ress.status_login == 1 ? '<span class="badge rounded-pill bg-primary" style="font-size: 12px;">Aktif</span>' : '<span class="badge rounded-pill bg-danger" style="font-size: 12px;">Tidak Aktif</span>'}
                                                        </div> 
                        
                                                        <div class="col-md-12 text-center  mt-3">
                                                            <span class="badge rounded-pill bg-primary" style="font-size: 12px;">Lokasi Petugas</span>  
                                                            <p style="font-size: 12px;" id="lokasiMarker${ress.id_officer}"></p>
                                                        </div> 
                                                    </div>  
                                                
                                            </div>
                                        `).addTo(mapContainer).on('click', function(e) {
                                    // console.log(e.latlng);
                                    $.ajax({
                                        type: "POST",
                                        url: "<?php echo base_url(); ?>dashboard/getAddres",
                                        data: {
                                            "lat": e.latlng['lat'],
                                            "lng": e.latlng['lng'],
                                        },
                                        dataType: "JSON",
                                        success: function(result) {
                                            // console.log(result['responseMessage']);
                                            $(`#lokasiMarker${ress.id_officer}`).html(`${result['responseMessage']}`);
                                        }
                                    });
                                });
                            }
                            // }


                            // } 


                        });
                        socketKe2.on('sendToAdminMobile', function(ress) {
                            console.log(`get Track Nama Petugas: A. ( ${ress.nrp_user} ${ress.name_officer} ) - ${ress.type_vehicle}`);
                            // console.log(ress); 
                            var flagVip = '';
                            var iconflagVip = '';

                            // console.log(result); 

                            var cordLat = parseFloat(ress.latitude);
                            var corLong = parseFloat(ress.longitude);
                            var bendera = '';
                            var jenis = '';





                            // for (let i = 0; i < ress.length; i++) {  


                            // if(ress.type_vehicle == 'Sepeda Motor'){
                            //     // jenis = `<img src="<?php echo base_url(); ?>assets/admin/images/mobil.png"><div class="pin"></div><div class="pulse"></div>`;
                            //     jenis = `<img src="<?php echo base_url(); ?>assets/icon/motor.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">`;
                            // }else if(ress.type_vehicle == 'Mobil'){
                            //     jenis = `<img src="<?php echo base_url(); ?>assets/icon/mobil.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">`;
                            // }else{
                            //     // jenis = `<img src="<?php echo base_url(); ?>assets/admin/images/sepedaMotor.png"><div class="pin"></div><div class="pulse"></div>`
                            //     jenis = `<img src="<?php echo base_url(); ?>assets/icon/topi.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">`;
                            // } 


                            if (ress.bawa_penumpang == 1) {
                                // iconflagVip = `<a href="javascript:void(0);"><img src="${ress.photo_country != '-' ? ress.photo_country : '<?php echo base_url(); ?>assets/no_image.png'}" style="width: 35px;margin-left: 10px;height: 30px;"></a>
                                //             <div style="position: absolute;margin-top: -45px;margin-left: 5px;">
                                //                 <span class="badge rounded-pill" style="background-color: black; color: white;">${ress.name_country}</span>
                                //             </div>`;  
                                iconflagVip = `<div style="width: 35px;margin-left: 10px;height: 30px;"></div>`;
                            } else {
                                iconflagVip = `<div style="width: 35px;margin-left: 10px;height: 30px;"></div>`;
                            }

                            jenis = '';
                            if (ress.type_vehicle == 'Sepeda Motor' && ress.fuel_vehicle == "Fosil") {



                                jenis = `
                                    <div>
                                        <div style="position: relative;">
                                            ${iconflagVip}
                                            <img src="<?php echo base_url(); ?>assets/icon/motor.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">
                                        </div>
                                        <div style="position: absolute;margin-top: -29px;">
                                            <span class="badge rounded-pill bg-primary">${ress.name_officer}</span>
                                        </div>
                                    </div>`;
                            } else if (ress.type_vehicle == 'Mobil' && ress.fuel_vehicle == "Fosil") {



                                jenis = `
                                    <div>
                                        <div style="position: relative;">
                                            ${iconflagVip}
                                            <img src="<?php echo base_url(); ?>assets/icon/mobil.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">
                                        </div>
                                        <div style="position: absolute;margin-top: -29px;">
                                            <span class="badge rounded-pill bg-primary">${ress.name_officer}</span>
                                        </div>
                                    </div>`;
                            } else if (ress.type_vehicle == 'Sepeda Motor' && ress.fuel_vehicle == "Listrik") {



                                jenis = `
                                    <div>
                                        <div>
                                            ${iconflagVip}
                                            <img src="<?php echo base_url(); ?>assets/icon/gpsIdMotor.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">
                                        </div>
                                        <div style="margin-top: -30px;">
                                            <span class="badge rounded-pill" style="background-color: #169fda">${ress.name_officer}</span>
                                        </div>
                                    </div>`;
                            } else if (ress.type_vehicle == 'Mobil' && ress.fuel_vehicle == "Listrik") {



                                jenis = `
                                    <div>
                                        <div>
                                            ${iconflagVip}
                                            <img src="<?php echo base_url(); ?>assets/icon/gpsIdMobil.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">
                                        </div>
                                        <div style="margin-top: -30px;">
                                            <span class="badge rounded-pill" style="background-color: #169fda">${ress.name_officer}</span>
                                        </div>
                                    </div>`;
                            } else {



                                jenis = `
                                    <div>
                                        <div style="position: relative;">
                                            <img src="<?php echo base_url(); ?>assets/icon/topi.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">
                                        </div> 
                                        <div style="position: absolute;margin-top: -29px;">
                                            <span class="badge rounded-pill bg-primary" ${`style="background-color: purple !important"`}>${ress.name_officer}</span>
                                        </div>
                                    </div>`;
                            }

                            if (ress.photo_officer || ress.photo_officer != null) {
                                fotoPetugas = `<img src="<?php echo url_api(); ?>officer/${ress.photo_officer}" alt="" class="img-fluid rounded-circle d-block  float-center">`;
                            } else {
                                fotoPetugas = `<img src="<?php echo base_url(); ?>assets/user.jpg" alt="" class="img-fluid rounded-circle d-block  float-center">`;
                            }

                            if (ress.name_country || ress.name_country != '-' || ress.name_country != null) {
                                bendera = `${ress.name_country}`;
                            } else {
                                bendera = `-`;
                            }

                            if (ress.photo_country || ress.photo_country != '-' || ress.photo_country != null) {
                                fotoBendera = `<img src="${ress.photo_country}" alt="" style="width: 20%;margin-bottom: 10px;">`;
                            } else {
                                fotoBendera = ``;
                            }

                            // if(ress.status_login == 1){
                            if (markerArray[ress.id_officer] != null) {
                                markerArray[ress.id_officer].remove();
                                markerArray[ress.id_officer] = L.marker([ress.latitude, ress.longitude], {
                                    renderer: myRenderer,
                                    icon: L.divIcon({
                                        //   className: 'location-pin',
                                        html: jenis,
                                        iconSize: [5, 5],
                                        iconAnchor: [5, 10]
                                        // iconAnchor: [10, 33]
                                    })
                                }).bindPopup(`
                                            <div class="text-center" style="width: 300px;"> 
                                                <div class="row mt-3"> 
                                                    <div class="col-md-12">
                                                        <a href="javascript:void(0);">
                                                        ${fotoBendera}
                                                        </a>
                                                    </div>
                                                    ${call_wa_dan_biasa(ress.handphone, ress.id_officer, 'no-encrypt')}
                                                </div>
                    
                    
                                                    <div class="row text-start mt-3">
                                                        <div class="col-md-4">
                                                            <span style="font-size: 12px;font-weight: bold;">Nama</span>  
                                                        </div>
                                                        <div class="col-md-1">
                                                            :
                                                        </div>
                                                        <div class="col-md-7">
                                                            <span style="font-size: 12px;">${ress.rank_officer} - ${ress.name_officer}</span>
                                                        </div> 
                
                                                        <div class="col-md-4">
                                                            <span style="font-size: 12px;font-weight: bold;">PAM</span>  
                                                        </div>
                                                        <div class="col-md-1">
                                                            :
                                                        </div>
                                                        <div class="col-md-7">
                                                            <span style="font-size: 12px;">${ress.pam_officer != null ? ress.pam_officer : '-'}</span>
                                                        </div> 
                                                        <div class="col-md-4">
                                                            <span style="font-size: 12px;font-weight: bold;">Delegasi</span>  
                                                        </div>
                                                        <div class="col-md-1">
                                                            :
                                                        </div>
                                                        <div class="col-md-7">
                                                            <span style="font-size: 12px;">${bendera}</span>
                                                        </div> 
                
                                                        <div class="col-md-4">
                                                            <span style="font-size: 12px;font-weight: bold;">Status Login</span>  
                                                        </div>
                                                        <div class="col-md-1">
                                                            :
                                                        </div>
                                                        <div class="col-md-7">
                                                            ${ress.status_login == 1 ? '<span class="badge rounded-pill bg-primary" style="font-size: 12px;">Aktif</span>' : '<span class="badge rounded-pill bg-danger" style="font-size: 12px;">Tidak Aktif</span>'}
                                                        </div> 
                        
                                                        <div class="col-md-12 text-center  mt-3">
                                                            <span class="badge rounded-pill bg-primary" style="font-size: 12px;">Lokasi Petugas</span>  
                                                            <p style="font-size: 12px;" id="lokasiMarker${ress.id_officer}"></p>
                                                        </div> 
                                                    </div>  
                                                
                                            </div>
                                        `).addTo(mapContainer).on('click', function(e) {
                                    // console.log(e.latlng);
                                    $.ajax({
                                        type: "POST",
                                        url: "<?php echo base_url(); ?>dashboard/getAddres",
                                        data: {
                                            "lat": e.latlng['lat'],
                                            "lng": e.latlng['lng'],
                                        },
                                        dataType: "JSON",
                                        success: function(result) {
                                            // console.log(result['responseMessage']);
                                            $(`#lokasiMarker${ress.id_officer}`).html(`${result['responseMessage']}`);
                                        }
                                    });
                                });
                            } else {
                                markerArray[ress.id_officer] = L.marker([ress.latitude, ress.longitude], {
                                    renderer: myRenderer,
                                    icon: L.divIcon({
                                        //   className: 'location-pin',
                                        html: jenis,
                                        iconSize: [5, 5],
                                        iconAnchor: [5, 10]
                                        // iconAnchor: [10, 33]
                                    })
                                }).bindPopup(`
                                            <div class="text-center" style="width: 300px;"> 
                                                <div class="row mt-3"> 
                                                    <div class="col-md-12">
                                                        ${fotoBendera}
                                                    </div>
                                                    ${call_wa_dan_biasa(ress.handphone, ress.id_officer, 'no-encrypt')}
                                                </div>
                    
                    
                                                    <div class="row text-start mt-3">
                                                        <div class="col-md-4">
                                                            <span style="font-size: 12px;font-weight: bold;">Nama</span>  
                                                        </div>
                                                        <div class="col-md-1">
                                                            :
                                                        </div>
                                                        <div class="col-md-7">
                                                            <span style="font-size: 12px;">${ress.rank_officer} - ${ress.name_officer}</span>
                                                        </div> 

                                                        <div class="col-md-4">
                                                            <span style="font-size: 12px;font-weight: bold;">PAM</span>  
                                                        </div>
                                                        <div class="col-md-1">
                                                            :
                                                        </div>
                                                        <div class="col-md-7">
                                                            <span style="font-size: 12px;">${ress.pam_officer != null ? ress.pam_officer : '-'}</span>
                                                        </div> 
                                                        <div class="col-md-4">
                                                            <span style="font-size: 12px;font-weight: bold;">Delegasi</span>  
                                                        </div>
                                                        <div class="col-md-1">
                                                            :
                                                        </div>
                                                        <div class="col-md-7">
                                                            <span style="font-size: 12px;">${bendera}</span>
                                                        </div> 
                        
                                                        <div class="col-md-12 text-center  mt-3">
                                                            <span class="badge rounded-pill bg-primary" style="font-size: 12px;">Lokasi Petugas</span>  
                                                            <p style="font-size: 12px;" id="lokasiMarker${ress.id_officer}"></p>
                                                        </div> 
                                                    </div>  
                                                
                                            </div>
                                        `).addTo(mapContainer).on('click', function(e) {
                                    // console.log(e.latlng);
                                    $.ajax({
                                        type: "POST",
                                        url: "<?php echo base_url(); ?>dashboard/getAddres",
                                        data: {
                                            "lat": e.latlng['lat'],
                                            "lng": e.latlng['lng'],
                                        },
                                        dataType: "JSON",
                                        success: function(result) {
                                            // console.log(result['responseMessage']);
                                            $(`#lokasiMarker${ress.id_officer}`).html(`${result['responseMessage']}`);
                                        }
                                    });
                                });
                            }
                            // }


                            // } 


                        });
                    }


                    // socketGps.on('pub', function(ress){
                    //     console.log('dari luar soket IO')
                    //     console.log(ress);
                    // });



                    var openJalurBeatSt = false;
                    $("#jalurBeatDisplay").on("change", function(e) {
                        if ($(this).is(':checked')) {
                            openDisplay = this.value;
                            $("#myModalJalurBeatDisplay").modal('show');

                            if (openJalurBeatSt == false) {
                                $.ajax({
                                    type: "POST",
                                    url: "<?php echo base_url(); ?>dashboard/getCategoryScheduleByName",
                                    data: {
                                        "activity": 'JALUR BEAT',
                                    },
                                    dataType: "JSON",
                                    success: function(result) {
                                        if (result['data'].length > 0) {
                                            var ress = result['data'][0];
                                            console.log(ress);
                                            openJalurBeatSt = true;

                                            var countlist = 0;
                                            var countlistRenpam = 0;
                                            var list = "";
                                            var status = "";
                                            var checkboxJadwal = "";
                                            var nameJadwalRenpam = [];
                                            var typeJadwalRenpam = [];
                                            var awalJadwalRenpam = [];
                                            var akhirJadwalRenpam = [];

                                            var warnaRenpam = [];
                                            var nameRenpam = [];
                                            var dummyName = [];
                                            var dummyType = [];
                                            var dummyAwal = [];
                                            var dummyAkhir = [];

                                            var dummyWarna = [];
                                            var dummyNameRenpam = [];

                                            var dummy = [];
                                            var dummy1 = [];
                                            var dummy2 = [];
                                            var dummy3 = [];
                                            var dummy4 = [];


                                            var dummyJadwalRenpam = [];
                                            var dummyJadwalRenpamAlter = [];
                                            var dummyJadwalRenpamAlterr = [];
                                            var dummyJadwalRenpamAlterrr = [];
                                            var dummyJadwalRenpamAlterrrr = [];

                                            var checkedRoutJadwal = [];

                                            let dummyRenpam = '';

                                            var checkedRenpam1 = [];

                                            var route = [];
                                            var route1 = [];
                                            var route2 = [];
                                            var route3 = [];
                                            var route4 = [];

                                            var countlistCategoriByCateg = 0;

                                            var dummyPetugasRenpam = [];
                                            var petugasRenpam = [];

                                            if (ress['renpams'].length > 0) {
                                                var sortUrutanRenpam = ress['renpams'].sort((a, b) => {
                                                    return a.order_renpam - b.order_renpam;
                                                });
                                                for (let i = 0; i < sortUrutanRenpam.length; i++) {
                                                    countlistRenpam += 1;
                                                    checkedRenpam1.push({
                                                        name_renpam: sortUrutanRenpam[i]['name_renpam'],
                                                        checked: 0,
                                                    });

                                                    dummyName.push(sortUrutanRenpam[i]['name_renpam']);
                                                    dummyType.push(sortUrutanRenpam[i]['type_renpam']);
                                                    dummyAwal.push(sortUrutanRenpam[i]['awal_renpam']);
                                                    dummyAkhir.push(sortUrutanRenpam[i]['akhir_renpam']);

                                                    nameJadwalRenpam[countlist] = dummyName;
                                                    typeJadwalRenpam[countlist] = dummyType;
                                                    awalJadwalRenpam[countlist] = dummyAwal;
                                                    akhirJadwalRenpam[countlist] = dummyAkhir;

                                                    dummyWarna.push(sortUrutanRenpam[i]['warnaRoute_renpam']);
                                                    warnaRenpam[countlist] = dummyWarna;

                                                    dummyNameRenpam.push(sortUrutanRenpam[i]['name_renpam']);
                                                    nameRenpam[countlist] = dummyNameRenpam;

                                                    dummy.push(sortUrutanRenpam[i]['route']);
                                                    dummy1.push(sortUrutanRenpam[i]['route_alternatif_1']);
                                                    dummy2.push(sortUrutanRenpam[i]['route_alternatif_2']);
                                                    dummy3.push(sortUrutanRenpam[i]['route_masyarakat']);
                                                    dummy4.push(sortUrutanRenpam[i]['route_umum']);

                                                    dummyJadwalRenpam[countlist] = dummy;
                                                    dummyJadwalRenpamAlter[countlist] = dummy1;
                                                    dummyJadwalRenpamAlterr[countlist] = dummy2;
                                                    dummyJadwalRenpamAlterrr[countlist] = dummy3;
                                                    dummyJadwalRenpamAlterrrr[countlist] = dummy4;

                                                    var dataAccounts;
                                                    if (sortUrutanRenpam[i]['accounts'].length > 0) {
                                                        dataAccounts = sortUrutanRenpam[i]['accounts'];

                                                        dummyPetugasRenpam.push(sortUrutanRenpam[i]['accounts']);
                                                        petugasRenpam[countlist] = dummyPetugasRenpam;
                                                    } else {
                                                        dataAccounts = [];
                                                    }

                                                    var dataVIP = '';
                                                    if (sortUrutanRenpam[i]['vips'].length > 0) {
                                                        for (let ii = 0; ii < sortUrutanRenpam[i]['vips'].length; ii++) {
                                                            dataVIP += `${sortUrutanRenpam[i]['vips'][ii]['name_vip']} - (${sortUrutanRenpam[i]['vips'][ii]['country_arrival_vip']}),`;
                                                        }
                                                    } else {
                                                        dataVIP = '-';
                                                    }

                                                    dummyRenpam += `
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="form-input checkRenpam" name="selectRenpam" 
                                                        id="listRenpamDisplay${ress['id_category_schedule']}${countlistRenpam}"  
                                                        data-name="${sortUrutanRenpam[i]['name_renpam']}" 
                                                        data-cord='${JSON.stringify(sortUrutanRenpam[i]['route'])}' 
                                                        data-cord1='${JSON.stringify(sortUrutanRenpam[i]['route_alternatif_1'])}' 
                                                        data-cord2='${JSON.stringify(sortUrutanRenpam[i]['route_alternatif_2'])}' 
                                                        data-cord3='${JSON.stringify(sortUrutanRenpam[i]['route_masyarakat'])}' 
                                                        data-cord4='${JSON.stringify(sortUrutanRenpam[i]['route_umum'])}' 
                                                        data-type="${sortUrutanRenpam[i]['type_renpam']}" 
                                                        data-warna="${sortUrutanRenpam[i]['warnaRoute_renpam']}" 
                                                        data-jadwal="${sortUrutanRenpam[i]['schedule'] != null ? sortUrutanRenpam[i]['schedule']['activity'] : '' }" 
                                                        data-awal="${sortUrutanRenpam[i]['title_start']}" 
                                                        data-akhir="${sortUrutanRenpam[i]['title_end']}"> 
                                                        
                                                    </td>
                                                    <td>${i+1}</td> 
                                                    <td>${dataVIP}</td>
                                                    <td><a href="<?= base_url() ?>operasi/Renpam/edit/${sortUrutanRenpam[i]['id']}" target="_blank">${sortUrutanRenpam[i]['title_start']} Ke ${sortUrutanRenpam[i]['title_end']}</a></td>
                                                    <td>${sortUrutanRenpam[i]['start_time'] != null ? sortUrutanRenpam[i]['start_time'].substr(0, 5) : '-'}</td> 
                                                    <td>
                                                        <a class="btn" 
                                                            data-accounts='${JSON.stringify(dataAccounts)}'
                                                            title="Petugas" data-bs-toggle="modal" data-bs-target="#myModalPetugas"
                                                            href="javascript:void(0)">
                                                            <i style="color: #495057;" class="fa fas fa-user-shield"></i>
                                                        </a>
                                                    </td>
                                                    <td> 
                                                        <a class="btn" href="javascripte:void(0);"
                                                            style="font-size: 16px;"  
                                                            data-idnote="${sortUrutanRenpam[i]['id']}" 
                                                            data-note="${sortUrutanRenpam[i]['note_kakor']}"
                                                            data-status="${sortUrutanRenpam[i]['status_renpam']}"
                                                            data-accounts='${JSON.stringify(dataAccounts)}'
                                                            title="Catatan Uraian Kegiatan" data-bs-toggle="modal" data-bs-target="#myModalNoteKakor">
                                                            <i style="color: #495057;" class="mdi mdi-beaker-plus-outline"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            `;
                                                }
                                                checkboxJadwal = `
                                            <input type="checkbox" class="form-input" name="selectJadwalRenpam" 
                                            id="listJadwalRenpamClickDisplay"   
                                            data-totaldata="${sortUrutanRenpam.length}"
                                            >
                                        `;
                                            } else {
                                                checkboxJadwal = `<div style="width: 14px;"></div>`;
                                            }

                                            list += `
                                        <table style="font-size: 10px" id="datatableByCateg${ress['id_category_schedule']}${countlist}" class="table dt-responsive w-100">
                                            <thead>
                                                <tr>
                                                    <th>${checkboxJadwal}</th>
                                                    <th>No</th>
                                                    <th>Negara</th>
                                                    <th>Lokasi</th>
                                                    <th>Berangkat</th> 
                                                    <th>Petugas</th>
                                                    <th>Catatan</th>
                                                </tr>
                                            </thead> 
                                            <tbody>
                                                ${dummyRenpam}
                                            </tbody>
                                        </table>
                                    `;

                                            $(`#openModalJalurBeatDisplay`).html(list);


                                            $(`#listJadwalRenpamClickDisplay`).on("change", function(e) {



                                                for (let ii = 0; ii < nameJadwalRenpam[countlist].length; ii++) {

                                                    setTimeout(() => {

                                                        var titikAwal = nameJadwalRenpam[countlist][ii] == null ? '-' : nameJadwalRenpam[countlist][ii];
                                                        var titikAkhir = akhirJadwalRenpam[countlist][ii] == null ? '-' : akhirJadwalRenpam[countlist][ii];


                                                        var warna = warnaRenpam[countlist][ii] == null ? 'red' : warnaRenpam[countlist][ii];

                                                        var namaRen = nameRenpam[countlist][ii] == null ? 'red' : nameRenpam[countlist][ii];


                                                        // console.log({a:namaRen ,b:warna, c:akuns});





                                                        var typeRenpam = typeJadwalRenpam[countlist][ii];
                                                        if (typeRenpam == 3) { //penjagaan
                                                            iconMarkerRenpam = `https://cdn-icons-png.flaticon.com/512/1323/1323306.png`;
                                                            markerType = `<img src="${iconMarkerRenpam}"><div class="pin"></div><div class="pulse"></div>`;
                                                            markerTypeOther = `<img src="${iconMarkerRenpam}"><div class="pin" style="background: gray;"></div><div class="pulse"></div>`;
                                                            markerTypeEnd = `<img src="${iconMarkerRenpam}"><div class="pin" style="background: green;"></div><div class="pulse"></div>`;
                                                            styleRouteUtama = [{
                                                                color: warna,
                                                                weight: 5,
                                                                className: 'animateRoute'
                                                            }];
                                                        } else if (typeRenpam == 4) { //pengaturan 
                                                            iconMarkerRenpam = `https://cdn-icons-png.flaticon.com/512/196/196781.png`;
                                                            markerType = `<img src="${iconMarkerRenpam}"><div class="pin"></div><div class="pulse"></div>`;
                                                            markerTypeOther = `<img src="${iconMarkerRenpam}"><div class="pin" style="background: gray;"></div><div class="pulse"></div>`;
                                                            markerTypeEnd = `<img src="${iconMarkerRenpam}"><div class="pin" ></div><div class="pulse"></div>`;
                                                            styleRouteUtama = [{
                                                                color: warna,
                                                                weight: 5,
                                                                className: 'animateRoute'
                                                            }];
                                                        } else if (typeRenpam == 5) { //penutupan 
                                                            iconMarkerRenpam = `https://cdn-icons-png.flaticon.com/512/196/196764.png`;
                                                            markerType = `<img src="${iconMarkerRenpam}"><div class="pin"></div><div class="pulse"></div>`;
                                                            markerTypeOther = `<img src="${iconMarkerRenpam}"><div class="pin" style="background: gray;"></div><div class="pulse"></div>`;
                                                            markerTypeEnd = `<img src="${iconMarkerRenpam}"><div class="pin" ></div><div class="pulse"></div>`;
                                                            styleRouteUtama = [{
                                                                color: warna,
                                                                weight: 5,
                                                                className: 'animateRoute'
                                                            }];
                                                        } else if (typeRenpam == 1) {
                                                            iconMarkerRenpam = ``;
                                                            markerType = `<div class="pin" style="background: yellow;"><div style="transform: rotate(45deg);margin-left: 5px;margin-top: 10px;font-size: 14px;">${namaRen.substr(-2)}</div></div><div class="pulse"></div>`;
                                                            markerTypeOther = `<div class="pin" style="background: gray; display: none;"><div style="transform: rotate(45deg);margin-left: 5px;margin-top: 10px;font-size: 14px;">${namaRen.substr(-2)}</div></div><div class="pulse"></div>`;
                                                            markerTypeEnd = `<div class="pin" style="background: yellow; display: none;"><div style="transform: rotate(45deg);margin-left: 5px;margin-top: 10px;font-size: 14px; display: none;">${namaRen.substr(-2)}</div></div><div class="pulse"></div>`;
                                                            styleRouteUtama = [{
                                                                color: warna,
                                                                weight: 5
                                                            }];
                                                        } else {
                                                            iconMarkerRenpam = `https://cdn-icons-png.flaticon.com/512/178/178753.png`;
                                                            markerType = `<img style=" display: none;" src="${iconMarkerRenpam}"><div class="pin" style=" display: none;"></div><div class="pulse"></div>`;
                                                            markerTypeOther = `<img style=" display: none;" src="${iconMarkerRenpam}"><div class="pin" style="background: gray; display: none;"></div><div class="pulse"></div>`;
                                                            markerTypeEnd = `<img style=" display: none;" src="${iconMarkerRenpam}"><div class="pin" style="background: green; display: none;"></div><div class="pulse"></div>`;
                                                            styleRouteUtama = [{
                                                                color: warna,
                                                                weight: 5,
                                                                className: 'animateRoute'
                                                            }];
                                                        }

                                                        if (dummyJadwalRenpam[countlist][ii] != null && dummyJadwalRenpam[countlist][ii].length > 0 && dummyJadwalRenpam[countlist][ii][0]['latLng'] != null) {

                                                            if ($(this).is(':checked')) {
                                                                routingJadwalRenpam[`${countlist}${ii}`] = null;
                                                                routingJadwalRenpam[`${countlist}${ii}`] = L.Routing.control({
                                                                    show: false,
                                                                    draggableWaypoints: false,
                                                                    addWaypoints: false,
                                                                    waypoints: dummyJadwalRenpam[countlist][ii],
                                                                    router: new L.Routing.osrmv1({
                                                                        language: 'en',
                                                                        profile: 'car'
                                                                    }),
                                                                    lineOptions: {
                                                                        styles: styleRouteUtama
                                                                    },
                                                                    createMarker: function(i, wp, nWps) {
                                                                        if (i === 0 || i === nWps + 1) {
                                                                            // here change the starting and ending icons
                                                                            return L.marker(wp.latLng, {
                                                                                icon: L.divIcon({
                                                                                    className: "location-pin",
                                                                                    html: markerType,
                                                                                    iconSize: [5, 5],
                                                                                    //iconAnchor: [18, 30]
                                                                                    iconAnchor: [5, 10],
                                                                                }),
                                                                                draggable: this.draggableWaypoints,
                                                                            }).bindPopup(`
                                                                        <div id="overlayMenu">
                                                                            <div class="loading">
                                                                                <div class="spinner" style="margin-left: 23px;margin-bottom: 10px;"></div>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-center"> 
                                                                            <h5>${titikAwal}</h5>
                                                                            <div style="text-align: left;">
                                                                                <span class="text-start">Padal :</span>
                                                                                <ul style="margin-left: -18px;list-style-type: decimal;" id="dataAkuns${countlist}${ii}"> 
                                                                                <ul>
                                                                            </div>
                                                                        </div> 
                                                                    `).on("click", function(e) {
                                                                                $("#overlayMenu").fadeIn(300);
                                                                                var akuns = petugasRenpam[countlist][ii];
                                                                                var dataAkuns = '';
                                                                                for (let i = 0; i < akuns.length; i++) {
                                                                                    $.ajax({
                                                                                        type: "POST",
                                                                                        url: "<?php echo base_url(); ?>dashboard/getAkunId",
                                                                                        data: {
                                                                                            "id": akuns[i]['id'],
                                                                                        },
                                                                                        dataType: "JSON",
                                                                                        success: function(result) {
                                                                                            var ress = result['data'];
                                                                                            dataAkuns += `<li>${ress['officer']['rank_officer']} - ${ress['officer']['name_officer']}</li>`;
                                                                                            $(`#dataAkuns${countlist}${ii}`).html(dataAkuns);
                                                                                            $("#overlayMenu").fadeOut(300);
                                                                                        }
                                                                                    });
                                                                                }
                                                                            });
                                                                        } else if (i === nWps - 1) {
                                                                            return L.marker(wp.latLng, {
                                                                                icon: L.divIcon({
                                                                                    className: "location-pin",
                                                                                    html: markerTypeEnd,
                                                                                    iconSize: [5, 5],
                                                                                    //iconAnchor: [18, 30]
                                                                                    iconAnchor: [5, 10],
                                                                                }),
                                                                                draggable: this.draggableWaypoints,
                                                                            }).bindPopup(`
                                                                        <div id="overlayMenu">
                                                                            <div class="loading">
                                                                                <div class="spinner" style="margin-left: 23px;margin-bottom: 10px;"></div>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-center"> 
                                                                            <h5>${titikAkhir}</h5>
                                                                            <div style="text-align: left;">
                                                                                <span class="text-start">Padal :</span>
                                                                                <ul style="margin-left: -18px;list-style-type: decimal;" id="dataAkuns${countlist}${ii}"> 
                                                                                <ul>
                                                                            </div>
                                                                        </div> 
                                                                    `).on("click", function(e) {
                                                                                $("#overlayMenu").fadeIn(300);
                                                                                var akuns = petugasRenpam[countlist][ii];
                                                                                var dataAkuns = '';
                                                                                for (let i = 0; i < akuns.length; i++) {
                                                                                    $.ajax({
                                                                                        type: "POST",
                                                                                        url: "<?php echo base_url(); ?>dashboard/getAkunId",
                                                                                        data: {
                                                                                            "id": akuns[i]['id'],
                                                                                        },
                                                                                        dataType: "JSON",
                                                                                        success: function(result) {
                                                                                            var ress = result['data'];
                                                                                            dataAkuns += `<li>${ress['officer']['rank_officer']} - ${ress['officer']['name_officer']}</li>`;
                                                                                            $(`#dataAkuns${countlist}${ii}`).html(dataAkuns);
                                                                                            $("#overlayMenu").fadeOut(300);
                                                                                        }
                                                                                    });
                                                                                }
                                                                            });
                                                                        } else {
                                                                            // here change all the others
                                                                            var options = {
                                                                                    draggable: this.draggableWaypoints,
                                                                                },
                                                                                marker = L.marker(wp.latLng, {
                                                                                    icon: L.divIcon({
                                                                                        className: "location-pin",
                                                                                        html: markerTypeOther,
                                                                                        iconSize: [5, 5],
                                                                                        //iconAnchor: [18, 30]
                                                                                        iconAnchor: [5, 10],
                                                                                    }),
                                                                                    draggable: this.draggableWaypoints,
                                                                                });

                                                                            return marker;
                                                                        }
                                                                    },
                                                                    // geocoder: L.Control.Geocoder.nominatim({})
                                                                }).addTo(mapContainer);
                                                                // mapContainer.addControl(routingJadwalRenpam[`${countlist}${ii}`]);  
                                                                console.log('kebuka');
                                                            } else {
                                                                mapContainer.removeControl(routingJadwalRenpam[`${countlist}${ii}`]);
                                                            }
                                                        } else {
                                                            console.log('error route utama');
                                                        }

                                                        if (dummyJadwalRenpamAlter[countlist][ii] != null && dummyJadwalRenpamAlter[countlist][ii].length > 0 && dummyJadwalRenpamAlter[countlist][ii][0]['latLng'] != null) {

                                                            if ($(this).is(':checked')) {
                                                                routingJadwalRenpam1[`${countlist}${ii}`] = null;
                                                                routingJadwalRenpam1[`${countlist}${ii}`] = L.Routing.control({
                                                                    show: false,
                                                                    draggableWaypoints: false,
                                                                    addWaypoints: false,
                                                                    waypoints: dummyJadwalRenpamAlter[countlist][ii],
                                                                    router: new L.Routing.osrmv1({
                                                                        language: 'en',
                                                                        profile: 'car'
                                                                    }),
                                                                    lineOptions: {
                                                                        styles: [{
                                                                            color: "#b935b9",
                                                                            weight: 5,
                                                                            className: 'animateRoute'
                                                                        }]
                                                                    },
                                                                    createMarker: function(i, wp, nWps) {
                                                                        if (i === 0 || i === nWps + 1) {
                                                                            // here change the starting and ending icons
                                                                            return L.marker(wp.latLng, {
                                                                                icon: L.divIcon({
                                                                                    className: "location-pin",
                                                                                    html: markerType,
                                                                                    iconSize: [5, 5],
                                                                                    //iconAnchor: [18, 30]
                                                                                    iconAnchor: [5, 10],
                                                                                }),
                                                                                draggable: this.draggableWaypoints,
                                                                            }).bindPopup(`
                                                                        <div id="overlayMenu">
                                                                            <div class="loading">
                                                                                <div class="spinner" style="margin-left: 23px;margin-bottom: 10px;"></div>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-center"> 
                                                                            <h5>${titikAwal}</h5>
                                                                            <div style="text-align: left;">
                                                                                <span class="text-start">Padal :</span>
                                                                                <ul style="margin-left: -18px;list-style-type: decimal;" id="dataAkuns${countlist}${ii}"> 
                                                                                <ul>
                                                                            </div>
                                                                        </div> 
                                                                    `).on("click", function(e) {
                                                                                $("#overlayMenu").fadeIn(300);
                                                                                var akuns = petugasRenpam[countlist][ii];
                                                                                var dataAkuns = '';
                                                                                for (let i = 0; i < akuns.length; i++) {
                                                                                    $.ajax({
                                                                                        type: "POST",
                                                                                        url: "<?php echo base_url(); ?>dashboard/getAkunId",
                                                                                        data: {
                                                                                            "id": akuns[i]['id'],
                                                                                        },
                                                                                        dataType: "JSON",
                                                                                        success: function(result) {
                                                                                            var ress = result['data'];
                                                                                            dataAkuns += `<li>${ress['officer']['rank_officer']} - ${ress['officer']['name_officer']}</li>`;
                                                                                            $(`#dataAkuns${countlist}${ii}`).html(dataAkuns);
                                                                                            $("#overlayMenu").fadeOut(300);
                                                                                        }
                                                                                    });
                                                                                }
                                                                            });
                                                                        } else if (i === nWps - 1) {
                                                                            return L.marker(wp.latLng, {
                                                                                icon: L.divIcon({
                                                                                    className: "location-pin",
                                                                                    html: markerTypeEnd,
                                                                                    iconSize: [5, 5],
                                                                                    //iconAnchor: [18, 30]
                                                                                    iconAnchor: [5, 10],
                                                                                }),
                                                                                draggable: this.draggableWaypoints,
                                                                            }).bindPopup(`
                                                                        <div id="overlayMenu">
                                                                            <div class="loading">
                                                                                <div class="spinner" style="margin-left: 23px;margin-bottom: 10px;"></div>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-center"> 
                                                                            <h5>${titikAkhir}</h5>
                                                                            <div style="text-align: left;">
                                                                                <span class="text-start">Padal :</span>
                                                                                <ul style="margin-left: -18px;list-style-type: decimal;" id="dataAkuns${countlist}${ii}"> 
                                                                                <ul>
                                                                            </div>
                                                                        </div> 
                                                                    `).on("click", function(e) {
                                                                                $("#overlayMenu").fadeIn(300);
                                                                                var akuns = petugasRenpam[countlist][ii];
                                                                                var dataAkuns = '';
                                                                                for (let i = 0; i < akuns.length; i++) {
                                                                                    $.ajax({
                                                                                        type: "POST",
                                                                                        url: "<?php echo base_url(); ?>dashboard/getAkunId",
                                                                                        data: {
                                                                                            "id": akuns[i]['id'],
                                                                                        },
                                                                                        dataType: "JSON",
                                                                                        success: function(result) {
                                                                                            var ress = result['data'];
                                                                                            dataAkuns += `<li>${ress['officer']['rank_officer']} - ${ress['officer']['name_officer']}</li>`;
                                                                                            $(`#dataAkuns${countlist}${ii}`).html(dataAkuns);
                                                                                            $("#overlayMenu").fadeOut(300);
                                                                                        }
                                                                                    });
                                                                                }
                                                                            });
                                                                        } else {
                                                                            // here change all the others
                                                                            var options = {
                                                                                    draggable: this.draggableWaypoints,
                                                                                },
                                                                                marker = L.marker(wp.latLng, {
                                                                                    icon: L.divIcon({
                                                                                        className: "location-pin",
                                                                                        html: markerTypeOther,
                                                                                        iconSize: [5, 5],
                                                                                        //iconAnchor: [18, 30]
                                                                                        iconAnchor: [5, 10],
                                                                                    }),
                                                                                    draggable: this.draggableWaypoints,
                                                                                });

                                                                            return marker;
                                                                        }
                                                                    },
                                                                    // geocoder: L.Control.Geocoder.nominatim({})
                                                                }).addTo(mapContainer);
                                                                // mapContainer.addControl(routingJadwalRenpam1[`${countlist}${ii}`]);  
                                                            } else {
                                                                mapContainer.removeControl(routingJadwalRenpam1[`${countlist}${ii}`]);
                                                            }
                                                        } else {
                                                            console.log('error route alternative 1');
                                                        }


                                                        if (dummyJadwalRenpamAlterr[countlist][ii] != null && dummyJadwalRenpamAlterr[countlist][ii].length > 0 && dummyJadwalRenpamAlterr[countlist][ii][0]['latLng'] != null) {

                                                            if ($(this).is(':checked')) {
                                                                routingJadwalRenpam2[`${countlist}${ii}`] = null;
                                                                routingJadwalRenpam2[`${countlist}${ii}`] = L.Routing.control({
                                                                    show: false,
                                                                    draggableWaypoints: false,
                                                                    addWaypoints: false,
                                                                    waypoints: dummyJadwalRenpamAlterr[countlist][ii],
                                                                    router: new L.Routing.osrmv1({
                                                                        language: 'en',
                                                                        profile: 'car'
                                                                    }),
                                                                    lineOptions: {
                                                                        styles: [{
                                                                            color: "gray",
                                                                            weight: 5,
                                                                            className: 'animateRoute'
                                                                        }]
                                                                    },
                                                                    createMarker: function(i, wp, nWps) {
                                                                        if (i === 0 || i === nWps + 1) {
                                                                            // here change the starting and ending icons
                                                                            return L.marker(wp.latLng, {
                                                                                icon: L.divIcon({
                                                                                    className: "location-pin",
                                                                                    html: markerType,
                                                                                    iconSize: [5, 5],
                                                                                    //iconAnchor: [18, 30]
                                                                                    iconAnchor: [5, 10],
                                                                                }),
                                                                                draggable: this.draggableWaypoints,
                                                                            }).bindPopup(`
                                                                        <div id="overlayMenu">
                                                                            <div class="loading">
                                                                                <div class="spinner" style="margin-left: 23px;margin-bottom: 10px;"></div>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-center"> 
                                                                            <h5>${titikAwal}</h5>
                                                                            <div style="text-align: left;">
                                                                                <span class="text-start">Padal :</span>
                                                                                <ul style="margin-left: -18px;list-style-type: decimal;" id="dataAkuns${countlist}${ii}"> 
                                                                                <ul>
                                                                            </div>
                                                                        </div> 
                                                                    `).on("click", function(e) {
                                                                                $("#overlayMenu").fadeIn(300);
                                                                                var akuns = petugasRenpam[countlist][ii];
                                                                                var dataAkuns = '';
                                                                                for (let i = 0; i < akuns.length; i++) {
                                                                                    $.ajax({
                                                                                        type: "POST",
                                                                                        url: "<?php echo base_url(); ?>dashboard/getAkunId",
                                                                                        data: {
                                                                                            "id": akuns[i]['id'],
                                                                                        },
                                                                                        dataType: "JSON",
                                                                                        success: function(result) {
                                                                                            var ress = result['data'];
                                                                                            dataAkuns += `<li>${ress['officer']['rank_officer']} - ${ress['officer']['name_officer']}</li>`;
                                                                                            $(`#dataAkuns${countlist}${ii}`).html(dataAkuns);
                                                                                            $("#overlayMenu").fadeOut(300);
                                                                                        }
                                                                                    });
                                                                                }
                                                                            });
                                                                        } else if (i === nWps - 1) {
                                                                            return L.marker(wp.latLng, {
                                                                                icon: L.divIcon({
                                                                                    className: "location-pin",
                                                                                    html: markerTypeEnd,
                                                                                    iconSize: [5, 5],
                                                                                    //iconAnchor: [18, 30]
                                                                                    iconAnchor: [5, 10],
                                                                                }),
                                                                                draggable: this.draggableWaypoints,
                                                                            }).bindPopup(`
                                                                        <div id="overlayMenu">
                                                                            <div class="loading">
                                                                                <div class="spinner" style="margin-left: 23px;margin-bottom: 10px;"></div>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-center"> 
                                                                            <h5>${titikAkhir}</h5>
                                                                            <div style="text-align: left;">
                                                                                <span class="text-start">Padal :</span>
                                                                                <ul style="margin-left: -18px;list-style-type: decimal;" id="dataAkuns${countlist}${ii}"> 
                                                                                <ul>
                                                                            </div>
                                                                        </div> 
                                                                    `).on("click", function(e) {
                                                                                $("#overlayMenu").fadeIn(300);
                                                                                var akuns = petugasRenpam[countlist][ii];
                                                                                var dataAkuns = '';
                                                                                for (let i = 0; i < akuns.length; i++) {
                                                                                    $.ajax({
                                                                                        type: "POST",
                                                                                        url: "<?php echo base_url(); ?>dashboard/getAkunId",
                                                                                        data: {
                                                                                            "id": akuns[i]['id'],
                                                                                        },
                                                                                        dataType: "JSON",
                                                                                        success: function(result) {
                                                                                            var ress = result['data'];
                                                                                            dataAkuns += `<li>${ress['officer']['rank_officer']} - ${ress['officer']['name_officer']}</li>`;
                                                                                            $(`#dataAkuns${countlist}${ii}`).html(dataAkuns);
                                                                                            $("#overlayMenu").fadeOut(300);
                                                                                        }
                                                                                    });
                                                                                }
                                                                            });
                                                                        } else {
                                                                            // here change all the others
                                                                            var options = {
                                                                                    draggable: this.draggableWaypoints,
                                                                                },
                                                                                marker = L.marker(wp.latLng, {
                                                                                    icon: L.divIcon({
                                                                                        className: "location-pin",
                                                                                        html: markerTypeOther,
                                                                                        iconSize: [5, 5],
                                                                                        //iconAnchor: [18, 30]
                                                                                        iconAnchor: [5, 10],
                                                                                    }),
                                                                                    draggable: this.draggableWaypoints,
                                                                                });

                                                                            return marker;
                                                                        }
                                                                    },
                                                                    // geocoder: L.Control.Geocoder.nominatim({})
                                                                }).addTo(mapContainer);
                                                                // mapContainer.addControl(routingJadwalRenpam2[`${countlist}${ii}`]);  
                                                            } else {
                                                                mapContainer.removeControl(routingJadwalRenpam2[`${countlist}${ii}`]);
                                                            }
                                                        } else {
                                                            console.log('error route  alternative 2');
                                                        }


                                                        if (dummyJadwalRenpamAlterrr[countlist][ii] != null && dummyJadwalRenpamAlterrr[countlist][ii].length > 0 && dummyJadwalRenpamAlterrr[countlist][ii][0]['latLng'] != null) {

                                                            if ($(this).is(':checked')) {
                                                                routingJadwalRenpam3[`${countlist}${ii}`] = null;
                                                                routingJadwalRenpam3[`${countlist}${ii}`] = L.Routing.control({
                                                                    show: false,
                                                                    draggableWaypoints: false,
                                                                    addWaypoints: false,
                                                                    waypoints: dummyJadwalRenpamAlterrr[countlist][ii],
                                                                    router: new L.Routing.osrmv1({
                                                                        language: 'en',
                                                                        profile: 'car'
                                                                    }),
                                                                    lineOptions: {
                                                                        styles: [{
                                                                            color: "#000dda",
                                                                            weight: 5,
                                                                            className: 'animateRoute'
                                                                        }]
                                                                    },
                                                                    createMarker: function(i, wp, nWps) {
                                                                        if (i === 0 || i === nWps + 1) {
                                                                            // here change the starting and ending icons
                                                                            return L.marker(wp.latLng, {
                                                                                icon: L.divIcon({
                                                                                    className: "location-pin",
                                                                                    html: markerType,
                                                                                    iconSize: [5, 5],
                                                                                    //iconAnchor: [18, 30]
                                                                                    iconAnchor: [5, 10],
                                                                                }),
                                                                                draggable: this.draggableWaypoints,
                                                                            }).bindPopup(`
                                                                        <div id="overlayMenu">
                                                                            <div class="loading">
                                                                                <div class="spinner" style="margin-left: 23px;margin-bottom: 10px;"></div>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-center"> 
                                                                            <h5>${titikAwal}</h5>
                                                                            <div style="text-align: left;">
                                                                                <span class="text-start">Padal :</span>
                                                                                <ul style="margin-left: -18px;list-style-type: decimal;" id="dataAkuns${countlist}${ii}"> 
                                                                                <ul>
                                                                            </div>
                                                                        </div> 
                                                                    `).on("click", function(e) {
                                                                                $("#overlayMenu").fadeIn(300);
                                                                                var akuns = petugasRenpam[countlist][ii];
                                                                                var dataAkuns = '';
                                                                                for (let i = 0; i < akuns.length; i++) {
                                                                                    $.ajax({
                                                                                        type: "POST",
                                                                                        url: "<?php echo base_url(); ?>dashboard/getAkunId",
                                                                                        data: {
                                                                                            "id": akuns[i]['id'],
                                                                                        },
                                                                                        dataType: "JSON",
                                                                                        success: function(result) {
                                                                                            var ress = result['data'];
                                                                                            dataAkuns += `<li>${ress['officer']['rank_officer']} - ${ress['officer']['name_officer']}</li>`;
                                                                                            $(`#dataAkuns${countlist}${ii}`).html(dataAkuns);
                                                                                            $("#overlayMenu").fadeOut(300);
                                                                                        }
                                                                                    });
                                                                                }
                                                                            });
                                                                        } else if (i === nWps - 1) {
                                                                            return L.marker(wp.latLng, {
                                                                                icon: L.divIcon({
                                                                                    className: "location-pin",
                                                                                    html: markerTypeEnd,
                                                                                    iconSize: [5, 5],
                                                                                    //iconAnchor: [18, 30]
                                                                                    iconAnchor: [5, 10],
                                                                                }),
                                                                                draggable: this.draggableWaypoints,
                                                                            }).bindPopup(`
                                                                        <div id="overlayMenu">
                                                                            <div class="loading">
                                                                                <div class="spinner" style="margin-left: 23px;margin-bottom: 10px;"></div>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-center"> 
                                                                            <h5>${titikAkhir}</h5>
                                                                            <div style="text-align: left;">
                                                                                <span class="text-start">Padal :</span>
                                                                                <ul style="margin-left: -18px;list-style-type: decimal;" id="dataAkuns${countlist}${ii}"> 
                                                                                <ul>
                                                                            </div>
                                                                        </div> 
                                                                    `).on("click", function(e) {
                                                                                $("#overlayMenu").fadeIn(300);
                                                                                var akuns = petugasRenpam[countlist][ii];
                                                                                var dataAkuns = '';
                                                                                for (let i = 0; i < akuns.length; i++) {
                                                                                    $.ajax({
                                                                                        type: "POST",
                                                                                        url: "<?php echo base_url(); ?>dashboard/getAkunId",
                                                                                        data: {
                                                                                            "id": akuns[i]['id'],
                                                                                        },
                                                                                        dataType: "JSON",
                                                                                        success: function(result) {
                                                                                            var ress = result['data'];
                                                                                            dataAkuns += `<li>${ress['officer']['rank_officer']} - ${ress['officer']['name_officer']}</li>`;
                                                                                            $(`#dataAkuns${countlist}${ii}`).html(dataAkuns);
                                                                                            $("#overlayMenu").fadeOut(300);
                                                                                        }
                                                                                    });
                                                                                }
                                                                            });
                                                                        } else {
                                                                            // here change all the others
                                                                            var options = {
                                                                                    draggable: this.draggableWaypoints,
                                                                                },
                                                                                marker = L.marker(wp.latLng, {
                                                                                    icon: L.divIcon({
                                                                                        className: "location-pin",
                                                                                        html: markerTypeOther,
                                                                                        iconSize: [5, 5],
                                                                                        //iconAnchor: [18, 30]
                                                                                        iconAnchor: [5, 10],
                                                                                    }),
                                                                                    draggable: this.draggableWaypoints,
                                                                                });

                                                                            return marker;
                                                                        }
                                                                    },
                                                                    // geocoder: L.Control.Geocoder.nominatim({})
                                                                }).addTo(mapContainer);
                                                                // mapContainer.addControl(routingJadwalRenpam3[`${countlist}${ii}`]);  
                                                            } else {
                                                                mapContainer.removeControl(routingJadwalRenpam3[`${countlist}${ii}`]);
                                                            }
                                                        } else {
                                                            console.log('error route Masyarakat');
                                                        }


                                                        if (dummyJadwalRenpamAlterrrr[countlist][ii] != null && dummyJadwalRenpamAlterrrr[countlist][ii].length > 0 && dummyJadwalRenpamAlterrrr[countlist][ii][0]['latLng'] != null) {

                                                            if ($(this).is(':checked')) {
                                                                routingJadwalRenpam4[`${countlist}${ii}`] = null;
                                                                routingJadwalRenpam4[`${countlist}${ii}`] = L.Routing.control({
                                                                    show: false,
                                                                    draggableWaypoints: false,
                                                                    addWaypoints: false,
                                                                    waypoints: dummyJadwalRenpamAlterrrr[countlist][ii],
                                                                    router: new L.Routing.osrmv1({
                                                                        language: 'en',
                                                                        profile: 'car'
                                                                    }),
                                                                    lineOptions: {
                                                                        styles: [{
                                                                            color: "#bdbd0b",
                                                                            weight: 5,
                                                                            className: 'animateRoute'
                                                                        }]
                                                                    },
                                                                    createMarker: function(i, wp, nWps) {
                                                                        if (i === 0 || i === nWps + 1) {
                                                                            // here change the starting and ending icons
                                                                            return L.marker(wp.latLng, {
                                                                                icon: L.divIcon({
                                                                                    className: "location-pin",
                                                                                    html: markerType,
                                                                                    iconSize: [5, 5],
                                                                                    //iconAnchor: [18, 30]
                                                                                    iconAnchor: [5, 10],
                                                                                }),
                                                                                draggable: this.draggableWaypoints,
                                                                            }).bindPopup(`
                                                                        <div id="overlayMenu">
                                                                            <div class="loading">
                                                                                <div class="spinner" style="margin-left: 23px;margin-bottom: 10px;"></div>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-center"> 
                                                                            <h5>${titikAwal}</h5>
                                                                            <div style="text-align: left;">
                                                                                <span class="text-start">Padal :</span>
                                                                                <ul style="margin-left: -18px;list-style-type: decimal;" id="dataAkuns${countlist}${ii}"> 
                                                                                <ul>
                                                                            </div>
                                                                        </div> 
                                                                    `).on("click", function(e) {
                                                                                $("#overlayMenu").fadeIn(300);
                                                                                var akuns = petugasRenpam[countlist][ii];
                                                                                var dataAkuns = '';
                                                                                for (let i = 0; i < akuns.length; i++) {
                                                                                    $.ajax({
                                                                                        type: "POST",
                                                                                        url: "<?php echo base_url(); ?>dashboard/getAkunId",
                                                                                        data: {
                                                                                            "id": akuns[i]['id'],
                                                                                        },
                                                                                        dataType: "JSON",
                                                                                        success: function(result) {
                                                                                            var ress = result['data'];
                                                                                            dataAkuns += `<li>${ress['officer']['rank_officer']} - ${ress['officer']['name_officer']}</li>`;
                                                                                            $(`#dataAkuns${countlist}${ii}`).html(dataAkuns);
                                                                                            $("#overlayMenu").fadeOut(300);
                                                                                        }
                                                                                    });
                                                                                }
                                                                            });
                                                                        } else if (i === nWps - 1) {
                                                                            return L.marker(wp.latLng, {
                                                                                icon: L.divIcon({
                                                                                    className: "location-pin",
                                                                                    html: markerTypeEnd,
                                                                                    iconSize: [5, 5],
                                                                                    //iconAnchor: [18, 30]
                                                                                    iconAnchor: [5, 10],
                                                                                }),
                                                                                draggable: this.draggableWaypoints,
                                                                            }).bindPopup(`
                                                                        <div id="overlayMenu">
                                                                            <div class="loading">
                                                                                <div class="spinner" style="margin-left: 23px;margin-bottom: 10px;"></div>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-center"> 
                                                                            <h5>${titikAkhir}</h5>
                                                                            <div style="text-align: left;">
                                                                                <span class="text-start">Padal :</span>
                                                                                <ul style="margin-left: -18px;list-style-type: decimal;" id="dataAkuns${countlist}${ii}"> 
                                                                                <ul>
                                                                            </div>
                                                                        </div> 
                                                                    `).on("click", function(e) {
                                                                                $("#overlayMenu").fadeIn(300);
                                                                                var akuns = petugasRenpam[countlist][ii];
                                                                                var dataAkuns = '';
                                                                                for (let i = 0; i < akuns.length; i++) {
                                                                                    $.ajax({
                                                                                        type: "POST",
                                                                                        url: "<?php echo base_url(); ?>dashboard/getAkunId",
                                                                                        data: {
                                                                                            "id": akuns[i]['id'],
                                                                                        },
                                                                                        dataType: "JSON",
                                                                                        success: function(result) {
                                                                                            var ress = result['data'];
                                                                                            dataAkuns += `<li>${ress['officer']['rank_officer']} - ${ress['officer']['name_officer']}</li>`;
                                                                                            $(`#dataAkuns${countlist}${ii}`).html(dataAkuns);
                                                                                            $("#overlayMenu").fadeOut(300);
                                                                                        }
                                                                                    });
                                                                                }
                                                                            });
                                                                        } else {
                                                                            // here change all the others
                                                                            var options = {
                                                                                    draggable: this.draggableWaypoints,
                                                                                },
                                                                                marker = L.marker(wp.latLng, {
                                                                                    icon: L.divIcon({
                                                                                        className: "location-pin",
                                                                                        html: markerTypeOther,
                                                                                        iconSize: [5, 5],
                                                                                        //iconAnchor: [18, 30]
                                                                                        iconAnchor: [5, 10],
                                                                                    }),
                                                                                    draggable: this.draggableWaypoints,
                                                                                });

                                                                            return marker;
                                                                        }
                                                                    },
                                                                    // geocoder: L.Control.Geocoder.nominatim({})
                                                                }).addTo(mapContainer);
                                                                // mapContainer.addControl(routingJadwalRenpam4[`${countlist}${ii}`]);  
                                                            } else {
                                                                mapContainer.removeControl(routingJadwalRenpam4[`${countlist}${ii}`]);
                                                            }
                                                        } else {
                                                            console.log('error route Umum');
                                                        }

                                                    }, ii * 1000);

                                                }
                                            });

                                            for (let i = 0; i < countlistRenpam; i++) {
                                                $(`#listRenpamDisplay${ress['id_category_schedule']}${i+1}`).on("change", function(e) {
                                                    // console.log(checkedRenpam1);  
                                                    //Find index of specific object using findIndex method.    
                                                    objIndex = checkedRenpam1.findIndex((obj => obj.name_renpam == $(this).data('name')));
                                                    // console.log(objIndex);

                                                    //Log object to Console.
                                                    console.log("Before update: ", checkedRenpam1[objIndex]);

                                                    //Update object's name property.
                                                    if ($(this).is(':checked')) {
                                                        checkedRenpam1[objIndex].checked = 1;
                                                    } else {
                                                        checkedRenpam1[objIndex].checked = 0;
                                                    }

                                                    //Log object to console again.
                                                    console.log(`${$(this).data('type')} - After update: `, checkedRenpam1[objIndex]);

                                                    // console.log($(this).data('cord'));

                                                    var titikAwal = $(this).data('awal') == null ? '-' : $(this).data('awal');
                                                    var titikAkhir = $(this).data('akhir') == null ? '-' : $(this).data('akhir');

                                                    var warna = "";
                                                    if ($(this).data('jadwal') == "JALUR BEAT") {
                                                        warna = $(this).data('warna') == "" ? 'red' : $(this).data('warna');
                                                    } else {
                                                        warna = "red";
                                                    }

                                                    var namaRen = $(this).data('name');


                                                    var typeRenpam = $(this).data('type');
                                                    if (typeRenpam == 3) { //penjagaan
                                                        iconMarkerRenpam = `https://cdn-icons-png.flaticon.com/512/1323/1323306.png`;
                                                        markerType = `<img src="${iconMarkerRenpam}"><div class="pin"></div><div class="pulse"></div>`;
                                                        markerTypeOther = `<img src="${iconMarkerRenpam}"><div class="pin" style="background: gray;"></div><div class="pulse"></div>`;
                                                        markerTypeEnd = `<img src="${iconMarkerRenpam}"><div class="pin" style="background: green;"></div><div class="pulse"></div>`;
                                                        styleRouteUtama = [{
                                                            color: warna,
                                                            weight: 5,
                                                            className: 'animateRoute'
                                                        }];
                                                    } else if (typeRenpam == 4) { //pengaturan 
                                                        iconMarkerRenpam = `https://cdn-icons-png.flaticon.com/512/196/196781.png`;
                                                        markerType = `<img src="${iconMarkerRenpam}"><div class="pin"></div><div class="pulse"></div>`;
                                                        markerTypeOther = `<img src="${iconMarkerRenpam}"><div class="pin" style="background: gray;"></div><div class="pulse"></div>`;
                                                        markerTypeEnd = `<img src="${iconMarkerRenpam}"><div class="pin" ></div><div class="pulse"></div>`;
                                                        styleRouteUtama = [{
                                                            color: warna,
                                                            weight: 5,
                                                            className: 'animateRoute'
                                                        }];
                                                    } else if (typeRenpam == 5) { //penutupan 
                                                        iconMarkerRenpam = `https://cdn-icons-png.flaticon.com/512/196/196764.png`;
                                                        markerType = `<img src="${iconMarkerRenpam}"><div class="pin"></div><div class="pulse"></div>`;
                                                        markerTypeOther = `<img src="${iconMarkerRenpam}"><div class="pin" style="background: gray;"></div><div class="pulse"></div>`;
                                                        markerTypeEnd = `<img src="${iconMarkerRenpam}"><div class="pin" ></div><div class="pulse"></div>`;
                                                        styleRouteUtama = [{
                                                            color: warna,
                                                            weight: 5,
                                                            className: 'animateRoute'
                                                        }];
                                                    } else if (typeRenpam == 1) {
                                                        iconMarkerRenpam = ``;
                                                        markerType = `<div class="pin" style="background: yellow;"><div style="transform: rotate(45deg);margin-left: 5px;margin-top: 10px;font-size: 14px;">${namaRen.substr(-2)}</div></div><div class="pulse"></div>`;
                                                        markerTypeOther = `<div class="pin" style="background: gray; display: none;"><div style="transform: rotate(45deg);margin-left: 5px;margin-top: 10px;font-size: 14px;">${namaRen.substr(-2)}</div></div><div class="pulse"></div>`;
                                                        markerTypeEnd = `<div class="pin" style="background: yellow;display: none;"><div style="display: none; transform: rotate(45deg);margin-left: 5px;margin-top: 10px;font-size: 14px;">${namaRen.substr(-2)}</div></div><div class="pulse"></div>`;
                                                        styleRouteUtama = [{
                                                            color: warna,
                                                            weight: 5
                                                        }];
                                                    } else {
                                                        iconMarkerRenpam = `https://cdn-icons-png.flaticon.com/512/178/178753.png`;
                                                        markerType = `<img style=" display: none;" src="${iconMarkerRenpam}"><div class="pin" style=" display: none;"></div><div class="pulse"></div>`;
                                                        markerTypeOther = `<img style=" display: none;" src="${iconMarkerRenpam}"><div class="pin" style="background: gray; display: none;"></div><div class="pulse"></div>`;
                                                        markerTypeEnd = `<img style=" display: none;" src="${iconMarkerRenpam}"><div class="pin" style="background: green; display: none;"></div><div class="pulse"></div>`;
                                                        styleRouteUtama = [{
                                                            color: warna,
                                                            weight: 5,
                                                            className: 'animateRoute'
                                                        }];
                                                    }

                                                    var cordRute1 = $(this).data('cord1');
                                                    if (cordRute1 != null && cordRute1[0]['latLng'] != null) {
                                                        if ($(this).is(':checked')) {
                                                            routingRenpam1[i] = null;
                                                            routingRenpam1[i] = L.Routing.control({
                                                                show: false,
                                                                draggableWaypoints: false,
                                                                addWaypoints: false,
                                                                waypoints: cordRute1,
                                                                router: new L.Routing.osrmv1({
                                                                    language: 'en',
                                                                    profile: 'car'
                                                                }),
                                                                lineOptions: {
                                                                    styles: [{
                                                                        color: "#b935b9",
                                                                        weight: 5,
                                                                        className: 'animateRoute'
                                                                    }]
                                                                },
                                                                createMarker: function(i, wp, nWps) {
                                                                    if (i === 0 || i === nWps + 1) {
                                                                        // here change the starting and ending icons
                                                                        return L.marker(wp.latLng, {
                                                                            icon: L.divIcon({
                                                                                className: "location-pin",
                                                                                html: markerType,
                                                                                iconSize: [5, 5],
                                                                                //iconAnchor: [18, 30]
                                                                                iconAnchor: [5, 10],
                                                                            }),
                                                                            draggable: this.draggableWaypoints,
                                                                        }).bindPopup(`
                                                                    <div class="text-center"> 
                                                                        <h5>${titikAwal}</h5>
                                                                    </div> 
                                                                `);
                                                                    } else if (i === nWps - 1) {
                                                                        return L.marker(wp.latLng, {
                                                                            icon: L.divIcon({
                                                                                className: "location-pin",
                                                                                html: markerTypeEnd,
                                                                                iconSize: [5, 5],
                                                                                //iconAnchor: [18, 30]
                                                                                iconAnchor: [5, 10],
                                                                            }),
                                                                            draggable: this.draggableWaypoints,
                                                                        }).bindPopup(`
                                                                    <div class="text-center"> 
                                                                        <h5>${titikAkhir}</h5>
                                                                    </div> 
                                                                `);
                                                                    } else {
                                                                        // here change all the others
                                                                        var options = {
                                                                                draggable: this.draggableWaypoints,
                                                                            },
                                                                            marker = L.marker(wp.latLng, {
                                                                                icon: L.divIcon({
                                                                                    className: "location-pin",
                                                                                    html: markerTypeOther,
                                                                                    iconSize: [5, 5],
                                                                                    //iconAnchor: [18, 30]
                                                                                    iconAnchor: [5, 10],
                                                                                }),
                                                                                draggable: this.draggableWaypoints,
                                                                            });

                                                                        return marker;
                                                                    }
                                                                },
                                                                // geocoder: L.Control.Geocoder.nominatim({})
                                                            }).addTo(mapContainer);
                                                            // mapContainer.addControl(routingRenpam1[i]); 
                                                        } else {
                                                            mapContainer.removeControl(routingRenpam1[i]);
                                                        }


                                                    } else {}

                                                    var cordRute2 = $(this).data('cord2');
                                                    if (cordRute2 != null && cordRute2[0]['latLng'] != null) {
                                                        if ($(this).is(':checked')) {
                                                            routingRenpam2[i] = null;
                                                            routingRenpam2[i] = L.Routing.control({
                                                                show: false,
                                                                draggableWaypoints: false,
                                                                addWaypoints: false,
                                                                waypoints: cordRute2,
                                                                router: new L.Routing.osrmv1({
                                                                    language: 'en',
                                                                    profile: 'car'
                                                                }),
                                                                lineOptions: {
                                                                    styles: [{
                                                                        color: "#808080",
                                                                        weight: 5,
                                                                        className: 'animateRoute'
                                                                    }]
                                                                },
                                                                createMarker: function(i, wp, nWps) {
                                                                    if (i === 0 || i === nWps + 1) {
                                                                        // here change the starting and ending icons
                                                                        return L.marker(wp.latLng, {
                                                                            icon: L.divIcon({
                                                                                className: "location-pin",
                                                                                html: markerType,
                                                                                iconSize: [5, 5],
                                                                                //iconAnchor: [18, 30]
                                                                                iconAnchor: [5, 10],
                                                                            }),
                                                                            draggable: this.draggableWaypoints,
                                                                        }).bindPopup(`
                                                                    <div class="text-center"> 
                                                                        <h5>${titikAwal}</h5>
                                                                    </div> 
                                                                `);
                                                                    } else if (i === nWps - 1) {
                                                                        return L.marker(wp.latLng, {
                                                                            icon: L.divIcon({
                                                                                className: "location-pin",
                                                                                html: markerTypeEnd,
                                                                                iconSize: [5, 5],
                                                                                //iconAnchor: [18, 30]
                                                                                iconAnchor: [5, 10],
                                                                            }),
                                                                            draggable: this.draggableWaypoints,
                                                                        }).bindPopup(`
                                                                    <div class="text-center"> 
                                                                        <h5>${titikAkhir}</h5>
                                                                    </div> 
                                                                `);
                                                                    } else {
                                                                        // here change all the others
                                                                        var options = {
                                                                                draggable: this.draggableWaypoints,
                                                                            },
                                                                            marker = L.marker(wp.latLng, {
                                                                                icon: L.divIcon({
                                                                                    className: "location-pin",
                                                                                    html: markerTypeOther,
                                                                                    iconSize: [5, 5],
                                                                                    //iconAnchor: [18, 30]
                                                                                    iconAnchor: [5, 10],
                                                                                }),
                                                                                draggable: this.draggableWaypoints,
                                                                            });

                                                                        return marker;
                                                                    }
                                                                },
                                                                // geocoder: L.Control.Geocoder.nominatim({})
                                                            }).addTo(mapContainer);
                                                            // mapContainer.addControl(routingRenpam2[i]); 
                                                        } else {
                                                            mapContainer.removeControl(routingRenpam2[i]);
                                                        }


                                                    } else {}

                                                    var cordRute3 = $(this).data('cord3');
                                                    if (cordRute3 != null && cordRute3[0]['latLng'] != null) {
                                                        if ($(this).is(':checked')) {
                                                            routingRenpam3[i] = null;
                                                            routingRenpam3[i] = L.Routing.control({
                                                                show: false,
                                                                draggableWaypoints: false,
                                                                addWaypoints: false,
                                                                waypoints: cordRute3,
                                                                router: new L.Routing.osrmv1({
                                                                    language: 'en',
                                                                    profile: 'car'
                                                                }),
                                                                lineOptions: {
                                                                    styles: [{
                                                                        color: "#000dda",
                                                                        weight: 5,
                                                                        className: 'animateRoute'
                                                                    }]
                                                                },
                                                                createMarker: function(i, wp, nWps) {
                                                                    if (i === 0 || i === nWps + 1) {
                                                                        // here change the starting and ending icons
                                                                        return L.marker(wp.latLng, {
                                                                            icon: L.divIcon({
                                                                                className: "location-pin",
                                                                                html: markerType,
                                                                                iconSize: [5, 5],
                                                                                //iconAnchor: [18, 30]
                                                                                iconAnchor: [5, 10],
                                                                            }),
                                                                            draggable: this.draggableWaypoints,
                                                                        }).bindPopup(`
                                                                    <div class="text-center"> 
                                                                        <h5>${titikAwal}</h5>
                                                                    </div> 
                                                                `);
                                                                    } else if (i === nWps - 1) {
                                                                        return L.marker(wp.latLng, {
                                                                            icon: L.divIcon({
                                                                                className: "location-pin",
                                                                                html: markerTypeEnd,
                                                                                iconSize: [5, 5],
                                                                                //iconAnchor: [18, 30]
                                                                                iconAnchor: [5, 10],
                                                                            }),
                                                                            draggable: this.draggableWaypoints,
                                                                        }).bindPopup(`
                                                                    <div class="text-center"> 
                                                                        <h5>${titikAkhir}</h5>
                                                                    </div> 
                                                                `);
                                                                    } else {
                                                                        // here change all the others
                                                                        var options = {
                                                                                draggable: this.draggableWaypoints,
                                                                            },
                                                                            marker = L.marker(wp.latLng, {
                                                                                icon: L.divIcon({
                                                                                    className: "location-pin",
                                                                                    html: markerTypeOther,
                                                                                    iconSize: [5, 5],
                                                                                    //iconAnchor: [18, 30]
                                                                                    iconAnchor: [5, 10],
                                                                                }),
                                                                                draggable: this.draggableWaypoints,
                                                                            });

                                                                        return marker;
                                                                    }
                                                                },
                                                                // geocoder: L.Control.Geocoder.nominatim({})
                                                            }).addTo(mapContainer);
                                                            // mapContainer.addControl(routingRenpam3[i]); 
                                                        } else {
                                                            mapContainer.removeControl(routingRenpam3[i]);
                                                        }


                                                    } else {}

                                                    var cordRute4 = $(this).data('cord4');
                                                    if (cordRute4 != null && cordRute4[0]['latLng'] != null) {
                                                        if ($(this).is(':checked')) {
                                                            routingRenpam4[i] = null;
                                                            routingRenpam4[i] = L.Routing.control({
                                                                show: false,
                                                                draggableWaypoints: false,
                                                                addWaypoints: false,
                                                                waypoints: cordRute4,
                                                                router: new L.Routing.osrmv1({
                                                                    language: 'en',
                                                                    profile: 'car'
                                                                }),
                                                                lineOptions: {
                                                                    styles: [{
                                                                        color: "#bdbd0b",
                                                                        weight: 5,
                                                                        className: 'animateRoute'
                                                                    }]
                                                                },
                                                                createMarker: function(i, wp, nWps) {
                                                                    if (i === 0 || i === nWps + 1) {
                                                                        // here change the starting and ending icons
                                                                        return L.marker(wp.latLng, {
                                                                            icon: L.divIcon({
                                                                                className: "location-pin",
                                                                                html: markerType,
                                                                                iconSize: [5, 5],
                                                                                //iconAnchor: [18, 30]
                                                                                iconAnchor: [5, 10],
                                                                            }),
                                                                            draggable: this.draggableWaypoints,
                                                                        }).bindPopup(`
                                                                    <div class="text-center"> 
                                                                        <h5>${titikAwal}</h5>
                                                                    </div> 
                                                                `);
                                                                    } else if (i === nWps - 1) {
                                                                        return L.marker(wp.latLng, {
                                                                            icon: L.divIcon({
                                                                                className: "location-pin",
                                                                                html: markerTypeEnd,
                                                                                iconSize: [5, 5],
                                                                                //iconAnchor: [18, 30]
                                                                                iconAnchor: [5, 10],
                                                                            }),
                                                                            draggable: this.draggableWaypoints,
                                                                        }).bindPopup(`
                                                                    <div class="text-center"> 
                                                                        <h5>${titikAkhir}</h5>
                                                                    </div> 
                                                                `);
                                                                    } else {
                                                                        // here change all the others
                                                                        var options = {
                                                                                draggable: this.draggableWaypoints,
                                                                            },
                                                                            marker = L.marker(wp.latLng, {
                                                                                icon: L.divIcon({
                                                                                    className: "location-pin",
                                                                                    html: markerTypeOther,
                                                                                    iconSize: [5, 5],
                                                                                    //iconAnchor: [18, 30]
                                                                                    iconAnchor: [5, 10],
                                                                                }),
                                                                                draggable: this.draggableWaypoints,
                                                                            });

                                                                        return marker;
                                                                    }
                                                                },
                                                                // geocoder: L.Control.Geocoder.nominatim({})
                                                            }).addTo(mapContainer);
                                                            // mapContainer.addControl(routingRenpam4[i]); 
                                                        } else {
                                                            mapContainer.removeControl(routingRenpam4[i]);
                                                        }


                                                    } else {}

                                                    var cordRuteUtama = $(this).data('cord');
                                                    if (cordRuteUtama != null && cordRuteUtama[0]['latLng'] != null) {
                                                        if ($(this).is(':checked')) {
                                                            routingRenpam[i] = null;
                                                            routingRenpam[i] = L.Routing.control({
                                                                show: false,
                                                                draggableWaypoints: false,
                                                                addWaypoints: false,
                                                                waypoints: cordRuteUtama,
                                                                router: new L.Routing.osrmv1({
                                                                    language: 'en',
                                                                    profile: 'car'
                                                                }),
                                                                lineOptions: {
                                                                    styles: styleRouteUtama
                                                                },
                                                                createMarker: function(i, wp, nWps) {
                                                                    if (i === 0 || i === nWps + 1) {
                                                                        // here change the starting and ending icons
                                                                        return L.marker(wp.latLng, {
                                                                            icon: L.divIcon({
                                                                                className: "location-pin",
                                                                                html: markerType,
                                                                                iconSize: [5, 5],
                                                                                //iconAnchor: [18, 30]
                                                                                iconAnchor: [5, 10],
                                                                            }),
                                                                            draggable: this.draggableWaypoints,
                                                                        }).bindPopup(`
                                                                    <div class="text-center"> 
                                                                        <h5>${titikAwal}</h5>
                                                                    </div> 
                                                                `);
                                                                    } else if (i === nWps - 1) {
                                                                        return L.marker(wp.latLng, {
                                                                            icon: L.divIcon({
                                                                                className: "location-pin",
                                                                                html: markerTypeEnd,
                                                                                iconSize: [5, 5],
                                                                                //iconAnchor: [18, 30]
                                                                                iconAnchor: [5, 10],
                                                                            }),
                                                                            draggable: this.draggableWaypoints,
                                                                        }).bindPopup(`
                                                                    <div class="text-center"> 
                                                                        <h5>${titikAkhir}</h5>
                                                                    </div> 
                                                                `);
                                                                    } else {
                                                                        // here change all the others
                                                                        var options = {
                                                                                draggable: this.draggableWaypoints,
                                                                            },
                                                                            marker = L.marker(wp.latLng, {
                                                                                icon: L.divIcon({
                                                                                    className: "location-pin",
                                                                                    html: markerTypeOther,
                                                                                    iconSize: [5, 5],
                                                                                    //iconAnchor: [18, 30]
                                                                                    iconAnchor: [5, 10],
                                                                                }),
                                                                                draggable: this.draggableWaypoints,
                                                                            });

                                                                        return marker;
                                                                    }
                                                                },
                                                                // geocoder: L.Control.Geocoder.nominatim({})
                                                            }).addTo(mapContainer);
                                                            // mapContainer.addControl(routingRenpam[i]); 
                                                        } else {
                                                            mapContainer.removeControl(routingRenpam[i]);
                                                        }


                                                    } else {}
                                                });
                                            }

                                            // $("#listJadwalRenpamClickDisplay").prop('checked', true);  

                                            $(`#datatableByCateg${ress['id_category_schedule']}${countlist}`).DataTable({
                                                responsive: true,

                                                // scrollX: true,

                                                // sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

                                                // buttons: ["excel", "csv", "pdf"],
                                                processing: true,
                                                oLanguage: {

                                                    sSearch: 'Search:'

                                                },
                                            });

                                        }
                                    }
                                });

                            }


                        } else {
                            openDisplay = '';
                        }
                    });

                    function getLogout() {
                        $.ajax({
                            type: "POST",
                            url: "<?php echo base_url(); ?>dashboard/getLogout",
                            data: {
                                "status": '1',
                            },
                            dataType: "JSON",
                            success: function(result) {
                                var ress = result['data'];
                                console.log({
                                    a: 'GET LOGOUT',
                                    b: ress
                                });
                                if (result['data'] != null) {
                                    for (let i = 0; i < ress.length; i++) {
                                        // console.log(ress[i]['officer_id']);
                                        var id_officer = ress[i]['officer_id'];
                                        if (markerArray[id_officer] != null) {
                                            mapContainer.removeLayer(markerArray[id_officer]);
                                        }
                                    }
                                }
                            }
                        });

                    }
                    // autoGetLogout = setInterval(getLogout, 5000);
                    var centerMap = mapContainer.getCenter();
                    var centerLat = centerMap['lat'];
                    var centerLng = centerMap['lng'];

                    mapContainer.on('dragend', function(e) {
                        var ada = mapContainer.getCenter();
                        centerLat = ada['lat'];
                        centerLng = ada['lng'];
                        if ($('#fasum').is(':checked')) {
                            serverSideFilter();
                        }
                    });

                    $("#menuKategori").hide();
                    $("#fasum").on("change", function(e) {
                        if ($('#fasum').is(':checked')) {
                            $("#menuKategori").show();
                        } else {
                            $("#menuKategori").hide();
                        }
                    });


                    cctvClusterGroup = L.markerClusterGroup({
                        iconCreateFunction: function(cluster) {
                            return new L.DivIcon({
                                html: `
                            <div style="width: 35px; height: 35px; border-radius: 50%; background-color:#d3a53a;text-align: center;margin-top: -1px;margin-left: -1px;">
                            <b style="top: 8px;position: relative; font-size: 12px; color:#ffffff;"><i class="mdi mdi-cctv"></i>${cluster.getChildCount()}</b>
                            </div>`
                            });
                        }
                    });
                    jadwalClusterGroup = L.markerClusterGroup({
                        iconCreateFunction: function(cluster) {
                            return new L.DivIcon({
                                html: `
                            <div style="width: 35px; height: 35px; border-radius: 50%; background-color:#c41f30;text-align: center;margin-top: -1px;margin-left: -1px;">
                            <b style="top: 8px;position: relative; font-size: 12px; color:#ffffff;"><i class="mdi mdi-card-account-details-star"></i>${cluster.getChildCount()}</b>
                            </div>`
                            });
                        }
                    });
                    laporanClusterGroup = L.markerClusterGroup({
                        iconCreateFunction: function(cluster) {
                            return new L.DivIcon({
                                html: `
                            <div style="width: 35px; height: 35px; border-radius: 50%; background-color:#049901;text-align: center;margin-top: -1px;margin-left: -1px;">
                            <b style="top: 8px;position: relative; font-size: 12px; color:#ffffff;"><i class="mdi mdi-clipboard-flow"></i>${cluster.getChildCount()}</b>
                            </div>`
                            });
                        }
                    });
                    panicClusterGroup = L.markerClusterGroup({
                        iconCreateFunction: function(cluster) {
                            return new L.DivIcon({
                                html: `
                            <div style="width: 35px; height: 35px; border-radius: 50%; background-color:#a50000;text-align: center;margin-top: -1px;margin-left: -1px;">
                            <b style="top: 8px;position: relative; font-size: 12px; color:#ffffff;"><i class="mdi mdi-chat-alert"></i>${cluster.getChildCount()}</b>
                            </div>`
                            });
                        }
                    });
                    fasumKhususClusterGroup = L.markerClusterGroup({
                        iconCreateFunction: function(cluster) {
                            return new L.DivIcon({
                                html: `
                            <div style="width: 35px; height: 35px; border-radius: 50%; background-color:#000;text-align: center;margin-top: -1px;margin-left: -1px;">
                            <b style="top: 8px;position: relative; font-size: 12px; color:#ffffff;"><i class="fa far fa-building "></i>${cluster.getChildCount()}</b>
                            </div>`
                            });
                        }
                    });



                    serverSideFilter();

                    function serverSideFilter() {
                        // userDataTable.draw();

                        $("#overlay").fadeIn(300);
                        arrayFilter = [];
                        $("input:checkbox[name=filter]:checked").each(function() {
                            arrayFilter.push($(this).val());
                        });
                        // console.log(arrayFilter);

                        arrayFilterFasumKategori = [];
                        $("input:checkbox[name=filterFasumKateg]:checked").each(function() {
                            arrayFilterFasumKategori.push($(this).val());
                        });


                        for (let i = 0; i < markerJadwal.length; i++) {
                            jadwalClusterGroup.removeLayer(markerJadwal[i]);
                            // mapContainer.removeLayer(jadwalClusterGroup);
                        }
                        markerJadwal = new Array();


                        for (let i = 0; i < markerCCTV.length; i++) {
                            // mapContainer.removeLayer(markerCCTV[i]);
                            cctvClusterGroup.removeLayer(markerCCTV[i]);
                        }
                        markerCCTV = new Array();

                        for (let i = 0; i < markerFasum.length; i++) {
                            mapContainer.removeLayer(markerFasum[i]);
                        }
                        markerFasum = new Array();

                        for (let i = 0; i < markerFasumKhusus.length; i++) {
                            fasumKhususClusterGroup.removeLayer(markerFasumKhusus[i]);
                            // mapContainer.removeLayer(fasumKhususClusterGroup);
                        }
                        markerFasumKhusus = new Array();

                        for (let i = 0; i < markerCluster.length; i++) {
                            // fasumKhususClusterGroup.removeLayer(markerCluster[i]);
                            mapContainer.removeLayer(markerCluster[i]);
                        }
                        markerCluster = new Array();

                        for (let i = 0; i < markerPolres.length; i++) {
                            mapContainer.removeLayer(markerPolres[i]);
                        }
                        markerPolres = new Array();

                        for (let i = 0; i < markerLaporan.length; i++) {
                            laporanClusterGroup.removeLayer(markerLaporan[i]);
                            // mapContainer.removeLayer(laporanClusterGroup);
                        }
                        markerLaporan = new Array();

                        for (let i = 0; i < markerLaporanPanic.length; i++) {
                            panicClusterGroup.removeLayer(markerLaporanPanic[i]);
                            // mapContainer.removeLayer(panicClusterGroup);
                        }
                        markerLaporanPanic = new Array();

                        // console.log(`${centerLat},${centerLng}`);  


                        $.ajax({
                            type: "POST",
                            url: "<?php echo base_url(); ?>dashboard/getFilter",
                            data: {
                                "filter": arrayFilter.toString(),
                                "radius": 15000,
                                "coordinate": `${centerLat},${centerLng}`,
                                "type": arrayFilterFasumKategori.toString(),
                                "startdate": $("#startdate").val(),
                                "enddate": $("#enddate").val(),
                                "polda_id": ressPolda['id'],
                            },
                            dataType: "JSON",
                            success: function(result) {
                                $("#overlay").fadeOut(300);
                                var ressTurjawali = result['data']['turjawali'];

                                var ressPolres = result['data']['polres'];
                                var ressCctv = result['data']['cctv'];
                                var ressLAP = result['data']['titik_laporan'];
                                var ressPanic = result['data']['titik_panicButton'];
                                var ressFasum = result['data']['fasum'];
                                // var ressFasumKhusus = result['data']['fasum_khusus'];
                                ressFasumKhusus = result['data']['fasum_khusus'];

                                var ressCluster = result['data']['cluster'];
                                var ressTroublespot = result['data']['troublespot'];
                                var ressSchedule = result['data']['jadwal_kegiatan'];
                                var ressOperasi = result['data']['operasi'];
                                console.log(result['data']);

                                if (ressTurjawali && ressTurjawali.length > 0) {
                                    var filterTurjawali = ressTurjawali.filter(function(e) {
                                        return e.latitude != null && e.longitude != null;
                                    });
                                }




                                if (ressPolres && ressPolres.length > 0) {
                                    var filterpolres = ressPolres.filter(function(e) {
                                        return e.latitude != null && e.longitude != null;
                                    });

                                    if (filterpolres.length > 0) {
                                        var logoMarker = '';
                                        var logoBody = '';

                                        $('#openModalPolresDisplay').html(`
                                        <table id="datatablePolresOnDisplay" class="table dt-responsive w-100" style="font-size: 12px;">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Type</th> 
                                                    <th>Nama</th> 
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody id="isiModalPolresDisplay">
                                            </tbody>
                                        </table>                     
                                    `);
                                        var countPolresDisplay = 0;
                                        var listPolresDisplay = '';

                                        for (let i = 0; i < filterpolres.length; i++) {

                                            var latitudePolres = parseFloat(filterpolres[i].latitude);
                                            var longitudePolres = parseFloat(filterpolres[i].longitude);

                                            markerPolres[i] = L.marker([latitudePolres, longitudePolres], {
                                                icon: L.divIcon({
                                                    // className: 'location-pin',
                                                    html: `<img src="<?php echo base_url(); ?>assets/icon/polres.png" style="width: 22px;margin-top: -45px;margin-left: -18.5px;">`,
                                                    iconSize: [5, 5],
                                                    iconAnchor: [5, 10]
                                                    // iconAnchor: [10, 33]
                                                })
                                            }).bindPopup(`
                                                    <div class="text-center" style="width: 300px;"> 
                                                        <div class="row mt-3">
                                                            <div class="col-md-12 col-12" style="margin-left: 110px;margin-bottom: 10px;margin-top: 10px;">
                                                                <div class="avatar-xl me-3">
                                                                    <img src="<?php echo base_url(); ?>assets/icon/polres.png" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 100%;">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 mt-3">
                                                                <h5>${filterpolres[i].name_polres}</h5> 
                                                            </div>
                                                            <div class="col-md-12 mt-3">
                                                                <div class="row text-start">
                                                                    <div class="col-md-5 col-6">
                                                                        <span style="font-size: 12px;font-weight: bold;">Alamat</span>  
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <span style="font-size: 12px;"> : </span>
                                                                    </div>
                                                                    <div class="col-md-6 col-6">
                                                                        <span style="font-size: 12px;">${filterpolres[i].address}</span>
                                                                    </div>
                                                                </div> 
                                                            </div> 
                                                            <div class="col-md-12">
                                                                <div class="row text-start">
                                                                    <div class="col-md-5 col-6">
                                                                        <span style="font-size: 12px;font-weight: bold;">Kode</span>  
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <span style="font-size: 12px;"> : </span>
                                                                    </div>
                                                                    <div class="col-md-6 col-6">
                                                                        <span style="font-size: 12px;">${filterpolres[i].code_satpas}</span>
                                                                    </div>
                                                                </div> 
                                                            </div>  
                                                            <div class="col-md-12" >
                                                                <div class="row text-start">
                                                                    <div class="col-md-5 col-6">
                                                                        <span style="font-size: 12px;font-weight: bold;">No Telpon</span>  
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <span style="font-size: 12px;"> : </span>
                                                                    </div>
                                                                    <div class="col-md-6 col-6">
                                                                        <span style="font-size: 12px;">${filterpolres[i].phone_polres != null ? filterpolres[i].phone_polres : '-'}</span>
                                                                    </div>
                                                                </div> 
                                                            </div>  
                                                            <div class="col-md-12">
                                                                <div class="row text-start">
                                                                    <div class="col-md-5 col-6">
                                                                        <span style="font-size: 12px;font-weight: bold;">Waktu</span>  
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <span style="font-size: 12px;"> : </span>
                                                                    </div>
                                                                    <div class="col-md-6 col-6">
                                                                        <span style="font-size: 12px;">${filterpolres[i].open_time != null ? filterpolres[i].open_time : '00:00'} - ${filterpolres[i].close_time != null ? filterpolres[i].close_time : '00:00'} WITA</span>
                                                                    </div>
                                                                </div> 
                                                            </div>   
                                                        </div>
                                                    </div> 
                                            `, {
                                                minWidth: 100,
                                                maxWidth: 560,
                                                width: 400
                                            }).addTo(mapContainer);

                                            countPolresDisplay += 1;
                                            listPolresDisplay += `
                                            <tr>
                                                <td>${countPolresDisplay}</td>
                                                <td>${filterpolres[i].name_polres}</td> 
                                                <td>${filterpolres[i].address}</td> 
                                                <td>
                                                    <a class="btn" style="margin-top: -10px;"  
                                                        id="flyToMapFilterPolres${countPolresDisplay}"
                                                        data-cord="${filterpolres[i].latitude},${filterpolres[i].longitude}" 
                                                        href="javascript:void(0)">
                                                        <i style="color: #495057;" class="fa fas fa-eye"></i>
                                                    </a> 
                                                </td>
                                            </tr>
                                        `;
                                            $('#isiModalPolresDisplay').html(listPolresDisplay);
                                        }

                                        for (let i = 0; i < countPolresDisplay; i++) {
                                            // console.log(`${i+1}`);
                                            $(`#flyToMapFilterPolres${i+1}`).on("click", function(e) {
                                                var latlong = $(this).data('cord').split(',');
                                                var latitude = parseFloat(latlong[0]);
                                                var longitude = parseFloat(latlong[1]);
                                                mapContainer.flyTo([latitude, longitude], 20);
                                            });
                                        }

                                        $('#datatablePolresOnDisplay').DataTable({
                                            responsive: true,

                                            scrollX: true,

                                            sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

                                            buttons: ["excel", "csv", "pdf"],
                                            processing: true,
                                            oLanguage: {

                                                sSearch: 'Search:'

                                            },
                                        });
                                    }
                                }

                                if (ressCctv && ressCctv.length > 0) {
                                    var filterCctv = ressCctv.filter(function(e) {
                                        return e.lat_cctv != null && e.lng_cctv != null;
                                    });

                                    if (filterCctv.length > 0) {
                                        $('#openModalCctvDisplay').html(`
                                        <table id="datatableCctvOnDisplay" class="table dt-responsive w-100" style="font-size: 12px;">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Type</th> 
                                                    <th>Nama</th> 
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody id="isiModalCctvDisplay">
                                            </tbody>
                                        </table>                     
                                    `);
                                        var countCctvDisplay = 0;
                                        var listCctvDisplay = '';
                                        $('#totalCctvDisplay').html(filterCctv.length);

                                        for (let i = 0; i < filterCctv.length; i++) {
                                            countCctvDisplay += 1;
                                            listCctvDisplay += `
                                            <tr>
                                                <td>${countCctvDisplay}</td>
                                                <td><a href="<?= base_url() ?>masterdata/Cctv" target="_blank">${filterCctv[i].type_cctv}</a></td> 
                                                <td>${filterCctv[i].vms_cctv}</td> 
                                                <td>
                                                    <a class="btn" style="margin-top: -10px;"  
                                                        id="flyToMapFilterCctv${countCctvDisplay}"
                                                        data-cord="${filterCctv[i].lat_cctv},${filterCctv[i].lng_cctv}" 
                                                        href="javascript:void(0)">
                                                        <i style="color: #495057;" class="fa fas fa-eye"></i>
                                                    </a> 
                                                </td>
                                            </tr>
                                        `;
                                            $('#isiModalCctvDisplay').html(listCctvDisplay);



                                            id = i;
                                            var latitudeCCTV = parseFloat(filterCctv[i].lat_cctv);
                                            var longitudeCCTV = parseFloat(filterCctv[i].lng_cctv);

                                            var resource = '';
                                            if (filterCctv[i].ip_cctv == 'https://balisatudata.baliprov.go.id/peta-cctv') {
                                                resource = `<iframe id="myIframe" src="${filterCctv[i].link_cctv}" style="width: 300px; height: 250.25px;"></iframe>`;
                                            } else {
                                                resource = `<img style="width: 300px;" src="${filterCctv[i].link_cctv}" />`;
                                            }

                                            cctvClusterGroup.addLayer(markerCCTV[i] = L.marker([latitudeCCTV, longitudeCCTV], {
                                                icon: L.divIcon({
                                                    // className: 'location-pin',
                                                    html: `<img src="<?php echo base_url(); ?>assets/icon/cctv.png" style="width: 40px; margin-top: -45px;margin-left: -18.5px;">`,
                                                    iconSize: [5, 5],
                                                    iconAnchor: [5, 10]
                                                    // iconAnchor: [10, 33]
                                                })
                                            }).bindPopup(`
                                            <div style="width: 300px;">
                                                <div class="row">
                                                    <div class="col-md-12" style="text-align: center;">
                                                        <h5>${filterCctv[i].address_cctv}</h5>
                                                    </div>
                                                    <div class="col-md-12"> 
                                                        ${resource}
                                                    </div> 
                                                </div>
                                            </div>
                                                
                                            `, {
                                                minWidth: 100,
                                                maxWidth: 560,
                                                width: 400
                                            }));
                                        }


                                        for (let i = 0; i < countCctvDisplay; i++) {
                                            // console.log(`${i+1}`);
                                            $(`#flyToMapFilterCctv${i+1}`).on("click", function(e) {
                                                var latlong = $(this).data('cord').split(',');
                                                var latitude = parseFloat(latlong[0]);
                                                var longitude = parseFloat(latlong[1]);
                                                mapContainer.flyTo([latitude, longitude], 20);
                                            });
                                        }
                                        $('#datatableCctvOnDisplay').DataTable({
                                            responsive: true,

                                            scrollX: true,

                                            sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

                                            buttons: ["excel", "csv", "pdf"],
                                            processing: true,
                                            oLanguage: {

                                                sSearch: 'Search:'

                                            },
                                        });
                                        mapContainer.addLayer(cctvClusterGroup);
                                    }
                                }




                                if (ressLAP && ressLAP.length > 0) {
                                    var filterLaporan = ressLAP.filter(function(e) {
                                        return e.coordinate.latitude != "" && e.coordinate.longitude != "";
                                    });


                                    if (filterLaporan.length > 0) {
                                        $('#openModalLaporanDisplay').html(`
                                        <table id="datatableLaporanOnDisplay" class="table dt-responsive w-100" style="font-size: 12px;">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Code</th> 
                                                    <th>Nama Petugas</th> 
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody id="isiModalLaporanDisplay">
                                            </tbody>
                                        </table>                     
                                    `);
                                        var countLaporanDisplay = 0;
                                        var listLaporanDisplay = '';
                                        $('#totalLaporanDisplay').html(filterLaporan.length);

                                        for (let i = 0; i < filterLaporan.length; i++) {
                                            countLaporanDisplay += 1;
                                            listLaporanDisplay += `
                                            <tr>
                                                <td>${countLaporanDisplay}</td>
                                                <td><a href="<?= base_url() ?>laporan/operasi/Detail/${filterLaporan[i].id}" target="_blank">${filterLaporan[i].code}</a></td> 
                                                <td>${filterLaporan[i].officer.name_officer}</td> 
                                                <td>
                                                    <a class="btn" style="margin-top: -10px;"  
                                                        id="flyToMapFilterLaporan${countLaporanDisplay}"
                                                        data-cord="${filterLaporan[i].coordinate.latitude},${filterLaporan[i].coordinate.longitude}" 
                                                        href="javascript:void(0)">
                                                        <i style="color: #495057;" class="fa fas fa-eye"></i>
                                                    </a> 
                                                </td>
                                            </tr>
                                        `;
                                            $('#isiModalLaporanDisplay').html(listLaporanDisplay);

                                            id = i;
                                            var latitudeLapPnc = parseFloat(filterLaporan[i].coordinate.latitude);
                                            var longitudeLapPnc = parseFloat(filterLaporan[i].coordinate.longitude);
                                            var iconLapPanic;

                                            if (filterLaporan[i].status == 0 || filterLaporan[i].status == null) {
                                                $statusLapPnc = ` 
                                                <span class="badge rounded-pill bg-danger">Tidak Selesai</span> 
                                            `;

                                            } else {
                                                $statusLapPnc = ` 
                                                <span class="badge rounded-pill bg-success">Selesai</span> 
                                            `;
                                            }

                                            if (filterLaporan[i].categori == 1) {
                                                kategoriLaporan = 'Tindakan Kriminal';
                                                iconLapPanic = `<img src="<?php echo base_url(); ?>assets/icon/panic button - kriminal.png" style="width: 22px; margin-top: -45px;margin-left: -18.5px;">`;
                                            } else if (filterLaporan[i].categori == 2) {
                                                kategoriLaporan = 'Kecelakaan Lalu Lintas';
                                                iconLapPanic = `<img src="<?php echo base_url(); ?>assets/icon/panic button - kecelakaan.png" style="width: 22px; margin-top: -45px;margin-left: -18.5px;">`;
                                            } else if (filterLaporan[i].categori == 3) {
                                                kategoriLaporan = 'Bencana Alam';
                                                iconLapPanic = `<img src="<?php echo base_url(); ?>assets/icon/panic button - bencana alam.png" style="width: 22px; margin-top: -45px;margin-left: -18.5px;">`;
                                            } else if (filterLaporan[i].categori == 4) {
                                                kategoriLaporan = 'Kemacetan';
                                                iconLapPanic = `<img src="<?php echo base_url(); ?>assets/icon/panic button - kecelakaan.png" style="width: 22px; margin-top: -45px;margin-left: -18.5px;">`;
                                            } else if (filterLaporan[i].categori == 99) {
                                                kategoriLaporan = 'Lainnya';
                                                iconLapPanic = `<img src="<?php echo base_url(); ?>assets/icon/panic button - kecelakaan.png" style="width: 22px; margin-top: -45px;margin-left: -18.5px;">`;
                                            } else {
                                                kategoriLaporan = 'Lainnya Other';
                                                iconLapPanic = `<img src="<?php echo base_url(); ?>assets/icon/panic button - kecelakaan.png" style="width: 22px; margin-top: -45px;margin-left: -18.5px;">`;
                                            }

                                            console.log('ini laporan');

                                            laporanClusterGroup.addLayer(markerLaporan[i] = L.marker([latitudeLapPnc, longitudeLapPnc], {
                                                icon: L.divIcon({
                                                    // className: 'location-pin',
                                                    html: `<img src="<?php echo base_url(); ?>assets/icon/laporan penugasan.png" style="width: 22px; margin-top: -45px;margin-left: -18.5px;">`,
                                                    iconSize: [5, 5],
                                                    iconAnchor: [5, 10]
                                                    // iconAnchor: [10, 33]
                                                })
                                            }).bindPopup(`
                                            <div>
                                                <div class="row">
                                                    <div class="col-md-12" style="text-align: center;">
                                                        <a href="javascript:void(0);"><img src="<?php echo url_api() ?>/laporan/${filterLaporan[i].foto}" class="avatar-xl rounded-circle img-thumbnail"></a>
                                                    </div>
                                                    <div class="col-md-12" style="text-align: center;">
                                                        ${call_wa_dan_biasa(filterLaporan[i].officer.phone_officer, filterLaporan[i].officer.id, 'encrypt')}
                                                    </div>
                                                    <div class="col-md-12" style="text-align: center;">
                                                        <h5>${filterLaporan[i].code}</h5>
                                                    </div>
                                                </div> 
                                                <div class="row"> 
                                                    <div class="col-md-5">  
                                                        <span style="font-size: 12px;font-weight: bold;"> Nama Petugas</span> 
                                                    </div>  
                                                    <div class="col-md-7">  
                                                        <span style="font-size: 12px;"> : ${filterLaporan[i].officer.name_officer} </span> 
                                                    </div>  
                                                </div> 
                                                <div class="row"> 
                                                    <div class="col-md-5">  
                                                        <span style="font-size: 12px;font-weight: bold;"> Kategori</span> 
                                                    </div>  
                                                    <div class="col-md-7">  
                                                        <span style="font-size: 12px;"> : ${kategoriLaporan} </span> 
                                                    </div>  
                                                </div> 
                                                <div class="row"> 
                                                    <div class="col-md-5">  
                                                        <span style="font-size: 12px;font-weight: bold;"> Waktu</span> 
                                                    </div>  
                                                    <div class="col-md-7">  
                                                        <span style="font-size: 12px;"> : ${filterLaporan[i].created_at} </span> 
                                                    </div>  
                                                </div>   
                                                <div class="row"> 
                                                    <div class="col-md-5">  
                                                        <span style="font-size: 12px;font-weight: bold;"> Deskripsi</span> 
                                                    </div>  
                                                    <div class="col-md-7">  
                                                        <span style="font-size: 12px;"> : ${filterLaporan[i].description.replace(/\n/g, "<br />")} </span> 
                                                    </div>  
                                                </div> 
                                            </div>
                                                
                                        `, {
                                                minWidth: 100,
                                                maxWidth: 560,
                                                width: 400
                                            }));
                                        }


                                        for (let i = 0; i < countLaporanDisplay; i++) {
                                            $(`#flyToMapFilterLaporan${i+1}`).on("click", function(e) {
                                                var latlong = $(this).data('cord').split(',');
                                                var latitude = parseFloat(latlong[0]);
                                                var longitude = parseFloat(latlong[1]);
                                                mapContainer.flyTo([latitude, longitude], 20);
                                            });
                                        }
                                        $('#datatableLaporanOnDisplay').DataTable({
                                            responsive: true,

                                            scrollX: true,

                                            sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

                                            buttons: ["excel", "csv", "pdf"],
                                            processing: true,
                                            oLanguage: {

                                                sSearch: 'Search:'

                                            },
                                        });
                                        mapContainer.addLayer(laporanClusterGroup);
                                    }

                                }

                                if (ressPanic && ressPanic.length > 0) {
                                    var filterLaporanPanic = ressPanic.filter(function(e) {
                                        return e.coordinate.latitude != "" && e.coordinate.longitude != "";
                                    });

                                    if (filterLaporanPanic.length > 0) {

                                        $('#openModalPanicDisplay').html(`
                                        <table id="datatablePanicOnDisplay" class="table dt-responsive w-100" style="font-size: 12px;">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Kode</th> 
                                                    <th>Nama Petugas</th> 
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody id="isiModalPanicDisplay">
                                            </tbody>
                                        </table>                     
                                    `);
                                        var countPanicDisplay = 0;
                                        var listPanicDisplay = '';
                                        $('#totalPanicDisplay').html(filterLaporanPanic.length);

                                        for (let i = 0; i < filterLaporanPanic.length; i++) {

                                            countPanicDisplay += 1;
                                            listPanicDisplay += `
                                            <tr>
                                                <td>${countPanicDisplay}</td>
                                                <td><a href="<?= base_url() ?>laporan/panic/Detail/${filterLaporanPanic[i].id}" target="_blank">${filterLaporanPanic[i].code}</a></td> 
                                                <td>${filterLaporanPanic[i].officer.name_officer}</td> 
                                                <td>
                                                    <a class="btn" style="margin-top: -10px;"  
                                                        id="flyToMapFilterPanic${countPanicDisplay}"
                                                        data-cord="${filterLaporanPanic[i].coordinate.latitude},${filterLaporanPanic[i].coordinate.longitude}" 
                                                        href="javascript:void(0)">
                                                        <i style="color: #495057;" class="fa fas fa-eye"></i>
                                                    </a> 
                                                </td>
                                            </tr>
                                        `;
                                            $('#isiModalPanicDisplay').html(listPanicDisplay);

                                            id = i;
                                            var latitudeLapPnc = parseFloat(filterLaporanPanic[i].coordinate.latitude);
                                            var longitudeLapPnc = parseFloat(filterLaporanPanic[i].coordinate.longitude);
                                            var iconLapPanic;

                                            if (filterLaporanPanic[i].categori == 1) {
                                                kategoriLaporan = 'Tindakan Kriminal';
                                                iconLapPanic = `<img src="<?php echo base_url(); ?>assets/icon/panic button - kriminal.png" style="width: 40px; margin-top: -45px;margin-left: -18.5px;">`;
                                            } else if (filterLaporanPanic[i].categori == 2) {
                                                kategoriLaporan = 'Kecelakaan Lalu Lintas';
                                                iconLapPanic = `<img src="<?php echo base_url(); ?>assets/icon/panic button - kecelakaan.png" style="width: 40px; margin-top: -45px;margin-left: -18.5px;">`;
                                            } else if (filterLaporanPanic[i].categori == 3) {
                                                kategoriLaporan = 'Bencana Alam';
                                                iconLapPanic = `<img src="<?php echo base_url(); ?>assets/icon/panic button - bencana alam.png" style="width: 40px; margin-top: -45px;margin-left: -18.5px;">`;
                                            } else if (filterLaporanPanic[i].categori == 4) {
                                                kategoriLaporan = 'Kemacetan';
                                                iconLapPanic = `<img src="<?php echo base_url(); ?>assets/icon/panic button - kecelakaan.png" style="width: 40px; margin-top: -45px;margin-left: -18.5px;">`;
                                            } else if (filterLaporanPanic[i].categori == 99) {
                                                kategoriLaporan = 'Lainnya';
                                                iconLapPanic = `<img src="<?php echo base_url(); ?>assets/icon/panic button - kecelakaan.png" style="width: 40px; margin-top: -45px;margin-left: -18.5px;">`;
                                            } else {
                                                kategoriLaporan = 'Lainnya Other';
                                                iconLapPanic = `<img src="<?php echo base_url(); ?>assets/icon/panic button - kecelakaan.png" style="width: 40px; margin-top: -45px;margin-left: -18.5px;">`;
                                            }

                                            if (filterLaporanPanic[i].status == 0 || filterLaporanPanic[i].status == null) {
                                                $statusLapPnc = ` 
                                                <span class="badge rounded-pill bg-danger">Tidak Selesai</span> 
                                            `;

                                            } else {
                                                $statusLapPnc = ` 
                                                <span class="badge rounded-pill bg-success">Selesai</span> 
                                            `;
                                            }

                                            panicClusterGroup.addLayer(markerLaporanPanic[i] = L.marker([latitudeLapPnc, longitudeLapPnc], {
                                                icon: L.divIcon({
                                                    // className: 'location-pin',
                                                    html: iconLapPanic,
                                                    iconSize: [5, 5],
                                                    iconAnchor: [5, 10]
                                                    // iconAnchor: [10, 33]
                                                })
                                            }).bindPopup(`
                                            <div style="width: 300px;">
                                                <div class="row">
                                                    <div class="col-md-12" style="text-align: center;">
                                                    <a href="javascript:void(0);"><img src="<?php echo url_api() ?>/laporan/${filterLaporanPanic[i].foto}" class="avatar-xl rounded-circle img-thumbnail"></a>
                                                    </div>

                                                    <div class="col-md-12" style="text-align: center;">
                                                        ${call_wa_dan_biasa(filterLaporanPanic[i].officer.phone_officer, filterLaporanPanic[i].officer.id, 'encrypt')}
                                                    </div>

                                                    <div class="col-md-12" style="text-align: center;">
                                                        <h5>${filterLaporanPanic[i].code}</h5>
                                                    </div>
                                                </div> 
                                                <div class="row"> 
                                                    <div class="col-md-5">  
                                                        <span style="font-size: 12px;font-weight: bold;"> Nama Petugas</span> 
                                                    </div>  
                                                    <div class="col-md-7">  
                                                        <span style="font-size: 12px;"> : ${filterLaporanPanic[i].officer.name_officer} </span> 
                                                    </div>  
                                                </div> 
                                                <div class="row"> 
                                                    <div class="col-md-5">  
                                                        <span style="font-size: 12px;font-weight: bold;"> Kategori Laporan</span> 
                                                    </div>  
                                                    <div class="col-md-7">  
                                                        <span style="font-size: 12px;"> : ${kategoriLaporan} </span> 
                                                    </div>  
                                                </div> 
                                                <div class="row"> 
                                                    <div class="col-md-5">  
                                                        <span style="font-size: 12px;font-weight: bold;"> Waktu Insiden</span> 
                                                    </div>  
                                                    <div class="col-md-7">  
                                                        <span style="font-size: 12px;"> : ${filterLaporanPanic[i].created_at} </span> 
                                                    </div>  
                                                </div> 
                                                <div class="row"> 
                                                    <div class="col-md-5">  
                                                        <span style="font-size: 12px;font-weight: bold;"> Status</span> 
                                                    </div>  
                                                    <div class="col-md-7">  
                                                        <span style="font-size: 12px;"> : ${$statusLapPnc} </span> 
                                                    </div>  
                                                </div>  
                                                <div class="row"> 
                                                    <div class="col-md-5">  
                                                        <span style="font-size: 12px;font-weight: bold;"> Deskripsi</span> 
                                                    </div>  
                                                    <div class="col-md-7">  
                                                        <span style="font-size: 12px;"> : ${filterLaporanPanic[i].description != null ? filterLaporanPanic[i].description.replace(/\n/g, "<br />") : '-'} </span> 
                                                    </div>  
                                                </div> 
                                            </div>
                                                
                                        `, {
                                                minWidth: 100,
                                                maxWidth: 560,
                                                width: 400
                                            }));
                                        }


                                        for (let i = 0; i < countPanicDisplay; i++) {
                                            $(`#flyToMapFilterPanic${i+1}`).on("click", function(e) {
                                                var latlong = $(this).data('cord').split(',');
                                                var latitude = parseFloat(latlong[0]);
                                                var longitude = parseFloat(latlong[1]);
                                                mapContainer.flyTo([latitude, longitude], 20);
                                            });
                                        }
                                        $('#datatablePanicOnDisplay').DataTable({
                                            responsive: true,

                                            scrollX: true,

                                            sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

                                            buttons: ["excel", "csv", "pdf"],
                                            processing: true,
                                            oLanguage: {

                                                sSearch: 'Search:'

                                            },
                                        });
                                        mapContainer.addLayer(panicClusterGroup);
                                    }


                                }

                                if (ressCluster && ressCluster.length > 0) {
                                    var logoMarker = '';
                                    var logoBody = '';
                                    $('#openModalClusterDisplay').html(`
                                    <table id="datatableClusterOnDisplay" class="table dt-responsive w-100">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th> 
                                                <th>Radius</th> 
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody id="isiModalClusterDisplay">
                                        </tbody>
                                    </table>                     
                                `);
                                    var countClusterDisplay = 0;
                                    var listClusterDisplay = '';
                                    $('#totalClusterDisplay').html(ressCluster.length);

                                    for (let i = 0; i < ressCluster.length; i++) {
                                        countClusterDisplay += 1;
                                        listClusterDisplay += `
                                        <tr>
                                            <td>${countClusterDisplay}</td>
                                            <td><a href="<?= base_url() ?>masterdata/Fasilitasumum/radius" target="_blank">${ressCluster[i].fasum_name}</a></td> 
                                            <td>${ressCluster[i].fasum_radius} Kilometer</td> 
                                            <td>
                                                <a class="btn" style="margin-top: -10px;"  
                                                    id="flyToMapFilterCluster${countClusterDisplay}"
                                                    data-cord="${ressCluster[i].fasum_lat},${ressCluster[i].fasum_lng}" 
                                                    href="javascript:void(0)">
                                                    <i style="color: #495057;" class="fa fas fa-eye"></i>
                                                </a> 
                                            </td>
                                        </tr>
                                    `;
                                        $('#isiModalClusterDisplay').html(listClusterDisplay);

                                        var latitudeCluster = parseFloat(ressCluster[i].fasum_lat);
                                        var longitudeCluster = parseFloat(ressCluster[i].fasum_lng);
                                        var set = ressCluster[i].fasum_radius != null ? ressCluster[i].fasum_radius : 1;
                                        markerCluster[i] = L.circle([latitudeCluster, longitudeCluster], 1000 * set, {
                                            color: 'yellow',
                                            fillColor: '#f03',
                                            weight: 2,
                                            fillOpacity: 0.2
                                        }).bindPopup(`
                                                <div class="text-center" style="width: 400px;height: 400px;overflow-x: hidden;scrollbar-width: thin;overflow-y: auto;"> 
                                                    <div class="row mt-3"> 
                                                        <div class="col-md-12 col-12 mt-3">
                                                            <h5>${ressCluster[i].fasum_name}</h5> 
                                                            <span>- ${ressCluster[i].category_fasum.name_category_fasum} : ${set} Kilometer-</span>
                                                        </div>
                                                        
                                                        <div class="col-md-12 col-12 mt-2">
                                                            <div class="row text-start">
                                                                <div class="col-md-12 col-12 text-start">
                                                                    <p style="font-size: 12px;font-weight: bold;">Akomodasi</p>  
                                                                    <p style="font-size: 12px; margin-top: -13px;">${ressCluster[i].fasum_description.replace(/\n/g, "<br />")}</p>
                                                                </div>  
                                                                
                                                            </div> 
                                                        </div>   
                                                    </div>
                                                </div> 
                                        `, {
                                            minWidth: 100,
                                            maxWidth: 560,
                                            width: 400
                                        }).addTo(mapContainer);
                                    }


                                    for (let i = 0; i < countClusterDisplay; i++) {
                                        $(`#flyToMapFilterCluster${i+1}`).on("click", function(e) {
                                            var latlong = $(this).data('cord').split(',');
                                            var latitude = parseFloat(latlong[0]);
                                            var longitude = parseFloat(latlong[1]);
                                            mapContainer.flyTo([latitude, longitude], 14);
                                        });
                                    }
                                    $('#datatableClusterOnDisplay').DataTable({
                                        responsive: true,

                                        scrollX: true,

                                        sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

                                        buttons: ["excel", "csv", "pdf"],
                                        processing: true,
                                        oLanguage: {

                                            sSearch: 'Search:'

                                        },
                                    });
                                }

                                if (ressFasumKhusus && ressFasumKhusus.length > 0) {
                                    $('#openModalFasumKhususDisplay').html(`
                                    <table id="datatableFasumKhususOnDisplay" class="table dt-responsive w-100" style="font-size: 12px;">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th> 
                                                <th>Alamat</th> 
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody id="isiModalFasumKhususDisplay">
                                        </tbody>
                                    </table>                     
                                `);
                                    var countFasumKhususDisplay = 0;
                                    var listFasumKhususDisplay = '';
                                    $('#totalFasumKhususDisplay').html(ressFasumKhusus.length);

                                    var logoMarker = '';
                                    var logoBody = '';
                                    for (let i = 0; i < ressFasumKhusus.length; i++) {
                                        countFasumKhususDisplay += 1;
                                        listFasumKhususDisplay += `
                                        <tr>
                                            <td>${countFasumKhususDisplay}</td>
                                            <td><a href="<?= base_url() ?>masterdata/Fasilitasumum" target="_blank">${ressFasumKhusus[i].fasum_name}</a></td> 
                                            <td>${ressFasumKhusus[i].fasum_address}</td> 
                                            <td>
                                                <a class="btn" style="margin-top: -10px;"  
                                                    id="flyToMapFilterFasumKhusus${countFasumKhususDisplay}"
                                                    data-cord="${ressFasumKhusus[i].fasum_lat},${ressFasumKhusus[i].fasum_lng}" 
                                                    href="javascript:void(0)">
                                                    <i style="color: #495057;" class="fa fas fa-eye"></i>
                                                </a> 
                                            </td>
                                        </tr>
                                    `;
                                        $('#isiModalFasumKhususDisplay').html(listFasumKhususDisplay);

                                        if (ressFasumKhusus[i].fasum_type == 1) {
                                            logoMarker = `hotel.png`;
                                            logoBody = `hotel.png`;
                                        } else if (ressFasumKhusus[i].fasum_type == 2) {
                                            logoMarker = `rumah ibadah.png`;
                                            logoBody = `rumah ibadah.png`;
                                        } else if (ressFasumKhusus[i].fasum_type == 3) {
                                            logoMarker = `pom bensin.png`;
                                            logoBody = `pom bensin.png`;
                                        } else if (ressFasumKhusus[i].fasum_type == 4) {
                                            logoMarker = `rest_area.png`;
                                            logoBody = `rest_area.png`;
                                        } else if (ressFasumKhusus[i].fasum_type == 5) {
                                            logoMarker = `rumah makan.png`;
                                            logoBody = `rumah makan.png`;
                                        } else if (ressFasumKhusus[i].fasum_type == 6) {
                                            logoMarker = `wisata.png`;
                                            logoBody = `wisata.png`;
                                        } else if (ressFasumKhusus[i].fasum_type == 7) {
                                            logoMarker = `damkar.png`;
                                            logoBody = `damkar.png`;
                                        } else if (ressFasumKhusus[i].fasum_type == 8) {
                                            logoMarker = `rumah sakit umum.png`;
                                            logoBody = `rumah sakit umum.png`;
                                        }

                                        var latitudeFasum = parseFloat(ressFasumKhusus[i].fasum_lat);
                                        var longitudeFasum = parseFloat(ressFasumKhusus[i].fasum_lng);
                                        fasumKhususClusterGroup.addLayer(markerFasumKhusus[i] = L.marker([latitudeFasum, longitudeFasum], {
                                            icon: L.divIcon({
                                                // className: 'location-pin',
                                                html: `<img src="<?php echo url_api(); ?>fasum_khusus/${ressFasumKhusus[i].fasum_logo}" style="width: 40px; margin-top: -45px;margin-left: -18.5px;">`,
                                                iconSize: [5, 5],
                                                iconAnchor: [5, 10]
                                                // iconAnchor: [10, 33]
                                            })
                                        }).bindPopup(`
                                                <div class="text-center" style="width: 500px;height: 400px;overflow-x: hidden;scrollbar-width: thin;overflow-y: auto;"> 
                                                    <div class="row mt-3">
                                                        <div class="col-md-12 col-12" style="margin-left: 210px;margin-bottom: 10px;">
                                                            <div class="avatar-xl me-3">
                                                            <a href="javascript:void(0);"><img src="<?php echo url_api(); ?>fasum_khusus/${ressFasumKhusus[i].fasum_logo}" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 100%;"></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-12 mt-3">
                                                            <h5>${ressFasumKhusus[i].fasum_name}</h5> 
                                                            <span>- ${ressFasumKhusus[i].category_fasum.name_category_fasum} -</span>
                                                        </div>
                                                        

                                                        <div class="col-md-12 col-12 mt-2">
                                                            <div class="row text-start">
                                                                <div class="col-md-12 col-12">
                                                                    <p style="font-size: 12px;font-weight: bold;">Kegiatan</p>  
                                                                    <p style="font-size: 12px; margin-top: -15px;">${ressFasumKhusus[i].fasum_description != null ? ressFasumKhusus[i].fasum_description.replace(/\n/g, "<br />") : "-"}</p>
                                                                </div> 
                                                            </div> 
                                                        </div>  
                                                        <div class="col-md-12 col-12 mt-2">
                                                            <div class="row text-start">
                                                                <div class="col-md-12 col-12">
                                                                    <p style="font-size: 12px;font-weight: bold;">Alamat</p>  
                                                                    <p style="font-size: 12px; margin-top: -15px;">${ressFasumKhusus[i].fasum_address}</p>
                                                                </div> 
                                                            </div> 
                                                        </div>  
                                                        <div class="col-md-12 col-12"  style="margin-top: -30px;">
                                                            <div class="row text-start">
                                                                <div class="col-md-12 col-12">
                                                                    <p style="font-size: 12px;font-weight: bold;">No Telpon</p>  
                                                                    <p style="font-size: 12px; margin-top: -15px;">${ressFasumKhusus[i].fasum_phone}</p>
                                                                </div> 
                                                            </div> 
                                                        </div>  
                                                        <div class="col-md-12 col-12" style="margin-top: -30px;">
                                                            <div class="row text-start">
                                                                <div class="col-md-12 col-12">
                                                                    <p style="font-size: 12px;font-weight: bold;">Waktu</p>  
                                                                    <p style="font-size: 12px; margin-top: -15px;">${ressFasumKhusus[i].fasum_open_time != null ? ressFasumKhusus[i].fasum_open_time : '00:00'} - ${ressFasumKhusus[i].fasum_close_time != null ? ressFasumKhusus[i].fasum_close_time : '00:00'} WITA</p>
                                                                </div> 
                                                            </div> 
                                                        </div>   
                                                    </div>
                                                </div> 
                                        `, {
                                            minWidth: 100,
                                            maxWidth: 900,
                                            width: 500
                                        }));
                                    }


                                    for (let i = 0; i < countFasumKhususDisplay; i++) {
                                        $(`#flyToMapFilterFasumKhusus${i+1}`).on("click", function(e) {
                                            var latlong = $(this).data('cord').split(',');
                                            var latitude = parseFloat(latlong[0]);
                                            var longitude = parseFloat(latlong[1]);
                                            mapContainer.flyTo([latitude, longitude], 17);
                                        });
                                    }
                                    $('#datatableFasumKhususOnDisplay').DataTable({
                                        responsive: true,

                                        scrollX: true,

                                        sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

                                        buttons: ["excel", "csv", "pdf"],
                                        processing: true,
                                        oLanguage: {

                                            sSearch: 'Search:'

                                        },
                                    });
                                    mapContainer.addLayer(fasumKhususClusterGroup);
                                }

                                if (ressFasum && ressFasum.length > 0) {
                                    var filterFasum = ressFasum.filter(function(e) {
                                        return e.geometry.location.lat != null && e.geometry.location.lng != null;
                                    });

                                    if (filterFasum.length > 0) {
                                        var logoMarker = '';
                                        var logoBody = '';
                                        for (let i = 0; i < filterFasum.length; i++) {
                                            // if(filterFasum[i].fasum_type == 1){
                                            //     logoMarker = `hotel.png`;
                                            //     logoBody = `hotel.png`;
                                            // }else if(filterFasum[i].fasum_type == 2){
                                            //     logoMarker = `rumah ibadah.png`;
                                            //     logoBody = `rumah ibadah.png`;
                                            // }else if(filterFasum[i].fasum_type == 3){
                                            //     logoMarker = `pom bensin.png`;
                                            //     logoBody = `pom bensin.png`;
                                            // }else if(filterFasum[i].fasum_type == 4){
                                            //     logoMarker = `rest_area.png`;
                                            //     logoBody = `rest_area.png`;
                                            // }else if(filterFasum[i].fasum_type == 5){
                                            //     logoMarker = `rumah makan.png`;
                                            //     logoBody = `rumah makan.png`;
                                            // }else if(filterFasum[i].fasum_type == 6){
                                            //     logoMarker = `wisata.png`;
                                            //     logoBody = `wisata.png`;
                                            // }else if(filterFasum[i].fasum_type == 7){
                                            //     logoMarker = `damkar.png`;
                                            //     logoBody = `damkar.png`;
                                            // }else if(filterFasum[i].fasum_type == 8){
                                            //     logoMarker = `rumah sakit umum.png`;
                                            //     logoBody = `rumah sakit umum.png`;
                                            // }

                                            var latitudeFasum = parseFloat(filterFasum[i].geometry.location.lat);
                                            var longitudeFasum = parseFloat(filterFasum[i].geometry.location.lng);
                                            markerFasum[i] = L.marker([latitudeFasum, longitudeFasum], {
                                                icon: L.divIcon({
                                                    className: 'location-pin',
                                                    html: `<img style="background-color:${filterFasum[i].icon_background_color};" src="${filterFasum[i].icon}"><div class="pin" style="background-color:${filterFasum[i].icon_background_color}"></div>`,
                                                    iconSize: [5, 5],
                                                    //iconAnchor: [18, 30]
                                                    iconAnchor: [5, 10]

                                                })
                                            }).bindPopup(`
                                                    <div class="text-center" style="width: 300px;"> 
                                                        <div class="row mt-3">
                                                            <div class="col-md-12 col-12" style="margin-left: 110px;margin-bottom: 10px;margin-top: 10px;">
                                                                <div class="avatar-xl me-3">
                                                                    <img src="${filterFasum[i].icon}" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 100%;">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-12 mt-3">
                                                                <h5>Fasilitas Umum</h5>
                                                                <span style="font-size: 14px;">- ${filterFasum[i].name} -</span>
                                                            </div>
                                                            <div class="col-md-12 col-12 mt-3">
                                                                <div class="row text-start">
                                                                    <div class="col-md-5 col-6">
                                                                        <p style="font-size: 12px;font-weight: bold;">Nama Fasilitas</p>  
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <p style="font-size: 12px;"> : </p>
                                                                    </div>
                                                                    <div class="col-md-6 col-6">
                                                                        <p style="font-size: 12px;">${filterFasum[i].name}</p>
                                                                    </div>
                                                                </div> 
                                                            </div>     
                                                        </div>
                                                    </div> 
                                            `, {
                                                minWidth: 100,
                                                maxWidth: 560,
                                                width: 400
                                            }).addTo(mapContainer);

                                        }
                                    }
                                }
                                if (ressTroublespot && ressTroublespot.length > 0) {
                                    var filterTroublespot = ressTroublespot.filter(function(e) {
                                        return e.lat_cctv != null && e.lng_cctv != null;
                                    });
                                }

                                if (ressSchedule && ressSchedule.length > 0) {
                                    var filterSchedule = ressSchedule.filter(function(e) {
                                        return e.coordinate_schedule != null;
                                    });
                                    // console.log(filterSchedule); 
                                    if (filterSchedule.length > 0) {
                                        $('#openModalJadwalDisplay').html(`
                                    <table id="datatableJadwalOnDisplay" class="table dt-responsive w-100" style="font-size: 12px;">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th> 
                                                <th>Tanggal</th> 
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody id="isiModalJadwalDisplay">
                                        </tbody>
                                    </table>                     
                                `);
                                        var countJadwalDisplay = 0;
                                        var listJadwalDisplay = '';
                                        $('#totalJadwalDisplay').html(ressSchedule.length);

                                        for (var i = 0; i < filterSchedule.length; i++) {
                                            countJadwalDisplay += 1;
                                            listJadwalDisplay += `
                                            <tr>
                                                <td>${countJadwalDisplay}</td>
                                                <td><a href="<?= base_url() ?>operasi/Kegiatan/Detail/${filterSchedule[i].id}" target="_blank">${filterSchedule[i].activity}</a></td> 
                                                <td>${filterSchedule[i].date_schedule}</td> 
                                                <td>
                                                    <a class="btn" style="margin-top: -10px;"  
                                                        id="flyToMapFilterJadwal${countJadwalDisplay}"
                                                        data-cord="${filterSchedule[i].coordinate_schedule}" 
                                                        href="javascript:void(0)">
                                                        <i style="color: #495057;" class="fa fas fa-eye"></i>
                                                    </a> 
                                                </td>
                                            </tr>
                                        `;
                                            $('#isiModalJadwalDisplay').html(listJadwalDisplay);

                                            var cordinateJadwal = filterSchedule[i].coordinate_schedule;
                                            var latlongJadwal = cordinateJadwal.split(',');
                                            var latitudeJadwal = parseFloat(latlongJadwal[0]);
                                            var longitudeJadwal = parseFloat(latlongJadwal[1]);
                                            var iconJadwal = '';

                                            if (filterSchedule[i].id_category_schedule == '4') {
                                                iconJadwal = `<img src="<?php echo url_api(); ?>schedule/${filterSchedule[i].photo_schedule}" style="width: 30px;margin-top: -35px;margin-left: -13.5px;">`;
                                            } else {
                                                iconJadwal = `<img src="<?php echo url_api(); ?>schedule/${filterSchedule[i].photo_schedule}" style="width: 22px;margin-top: -45px;margin-left: -9.5px;">`;
                                            }

                                            jadwalClusterGroup.addLayer(markerJadwal[i] = L.marker([latitudeJadwal, longitudeJadwal], {
                                                icon: L.divIcon({
                                                    // className: 'location-pin',
                                                    html: iconJadwal,
                                                    iconSize: [5, 5],
                                                    iconAnchor: [5, 10]
                                                    // iconAnchor: [10, 33]
                                                })
                                            }).bindPopup(`
                                                    <div class="text-center" style="width: 300px;"> 
                                                        <div class="row mt-3"> 
                                                            <div class="col-md-12 col-12" style="margin-left: 110px;margin-bottom: 10px;margin-top: 10px;">
                                                                <div class="avatar-xl me-3">
                                                                    <a href="javascript:void(0);">
                                                                    <img src="<?php echo url_api(); ?>schedule/${filterSchedule[i].photo_schedule}" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 100%;">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-12 mt-3">
                                                                <h5>Jadwal Kegiatan</h5> 
                                                            </div>
                                                            <div class="col-md-12 col-12 mt-1">
                                                                <div class="row text-start">
                                                                    <div class="col-md-5">
                                                                        <p style="font-size: 12px;font-weight: bold;">Kegiatan</p>  
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <p style="font-size: 12px;"> : </p>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <p style="font-size: 12px;">${filterSchedule[i].activity}</p>
                                                                    </div>
                                                                </div> 
                                                            </div> 
                                                            <div class="col-md-12 col-12" style="margin-top: -30px;">
                                                                <div class="row text-start">
                                                                    <div class="col-md-5">
                                                                        <p style="font-size: 12px;font-weight: bold;">Tanggal Kegiatan</p>  
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <p style="font-size: 12px;"> : </p>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <p style="font-size: 12px;">${filterSchedule[i].date_schedule.substr(0, 10)}</p>
                                                                    </div>
                                                                </div> 
                                                            </div>  
                                                            <div class="col-md-12 col-12" style="margin-top: -30px;">
                                                                <div class="row text-start">
                                                                    <div class="col-md-5">
                                                                        <p style="font-size: 12px;font-weight: bold;">Waktu</p>  
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <p style="font-size: 12px;"> : </p>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <p style="font-size: 12px;">${filterSchedule[i].start_time.substr(0, 5)} - ${filterSchedule[i].end_time.substr(0, 5)} WITA</p>
                                                                    </div>
                                                                </div> 
                                                            </div>  
                                                            <div class="col-md-12 col-12" style="margin-top: -30px;">
                                                                <div class="row text-start">
                                                                    <div class="col-md-5">
                                                                        <p style="font-size: 12px;font-weight: bold;">Alamat</p>  
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <p style="font-size: 12px;"> : </p>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <p style="font-size: 12px;">${filterSchedule[i].address_schedule}</p>
                                                                    </div>
                                                                </div> 
                                                            </div>   
                                                        </div>
                                                    </div>
                                            `, {
                                                minWidth: 100,
                                                maxWidth: 560,
                                                width: 400
                                            }));
                                        }


                                        for (let i = 0; i < countJadwalDisplay; i++) {
                                            $(`#flyToMapFilterJadwal${i+1}`).on("click", function(e) {
                                                var latlong = $(this).data('cord').split(',');
                                                var latitude = parseFloat(latlong[0]);
                                                var longitude = parseFloat(latlong[1]);
                                                mapContainer.flyTo([latitude, longitude], 20);
                                            });
                                        }
                                        $('#datatableJadwalOnDisplay').DataTable({
                                            responsive: true,

                                            scrollX: true,

                                            sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

                                            buttons: ["excel", "csv", "pdf"],
                                            processing: true,
                                            oLanguage: {

                                                sSearch: 'Search:'

                                            },
                                        });
                                        mapContainer.addLayer(jadwalClusterGroup);
                                    }
                                }

                                if (ressOperasi && ressOperasi.length > 0) {
                                    var filterOperasi = ressOperasi.filter(function(e) {
                                        return e.lat_cctv != null && e.lng_cctv != null;
                                    });
                                }




                            }
                        });
                    }

                    $("#filterCari").on("click", function(e) {

                        if ($("#polda").is(':checked')) {
                            $("#poldaDisplay").prop('checked', true);
                            getPolda();
                            // $("#myModalClusterDisplay").modal('show');
                        } else {
                            $("#poldaDisplay").prop('checked', false);
                            for (let i = 0; i < markerPolda.length; i++) {
                                mapContainer.removeLayer(markerPolda[i]);
                            }
                            markerPolda = new Array();
                            $("#poldaDisplay").val();
                        }

                        if ($("#polres").is(':checked')) {
                            $("#polresDisplay").prop('checked', true);
                            $("#myModalClusterDisplay").modal('show');
                        } else {
                            $("#polresDisplay").prop('checked', false);
                            $("#polresDisplay").val();
                        }


                        if ($("#cctv").is(':checked')) {
                            $("#cctvDisplay").prop('checked', true);
                            // $("#myModalCctvDisplay").modal('show');
                        } else {
                            $("#cctvDisplay").prop('checked', false);
                            $("#cctvDisplay").val();
                        }
                        if ($("#fasum_khusus").is(':checked')) {
                            $("#fasumKhususDisplay").prop('checked', true);
                            // $("#myModalFasumKhususDisplay").modal('show');
                        } else {
                            $("#fasumKhususDisplay").prop('checked', false);
                            $("#fasumKhususDisplay").val();
                        }
                        if ($("#cluster").is(':checked')) {
                            $("#clusterDisplay").prop('checked', true);
                            // $("#myModalClusterDisplay").modal('show');
                        } else {
                            $("#clusterDisplay").prop('checked', false);
                            $("#clusterDisplay").val();
                        }

                        if ($("#jadwal").is(':checked')) {
                            $("#kegiatanDisplay").prop('checked', true);
                            // $("#myModalJadwalDisplay").modal('show');
                        } else {
                            $("#kegiatanDisplay").prop('checked', false);
                            $("#kegiatanDisplay").val();
                        }
                        if ($("#panic").is(':checked')) {
                            $("#panicDisplay").prop('checked', true);
                            // $("#myModalPanicDisplay").modal('show');
                        } else {
                            $("#panicDisplay").prop('checked', false);
                            $("#panicDisplay").val();
                        }
                        if ($("#operasi").is(':checked')) {
                            $("#operasiDisplay").prop('checked', true);
                            // $("#myModalLaporanDisplay").modal('show');
                        } else {
                            $("#operasiDisplay").prop('checked', false);
                            $("#operasiDisplay").val();
                        }
                        if ($("#gpsId").is(':checked')) {
                            $("#gpsIdDisplay").prop('checked', true);
                            // $("#myModalGpsIdDisplay").modal('show');
                            autoGpsId = setInterval(gpsId, 3000);
                        } else {
                            $("#gpsIdDisplay").prop('checked', false);
                            $("#gpsIdDisplay").val();
                            for (let i = 0; i < dummyIdKendaraanGpsId.length; i++) {
                                mapContainer.removeLayer(markerGpsId[dummyIdKendaraanGpsId[i]]);
                            }
                            dummyIdKendaraanGpsId = new Array();
                            markerGpsId = new Array();
                            clearInterval(autoGpsId);
                        }

                        serverSideFilter();
                    });






                    $("#poldaDisplay").on("change", function(e) {
                        if ($(this).is(':checked')) {
                            openDisplay = this.value;
                            $("#polda").prop('checked', true);
                            getPolda();
                            $("#myModalPoldaDisplay").modal('show');
                        } else {
                            openDisplay = '';
                            for (let i = 0; i < markerPolda.length; i++) {
                                mapContainer.removeLayer(markerPolda[i]);
                            }
                            markerPolda = new Array();
                            $("#polda").prop('checked', false);
                            $("#polda").val();
                        }
                        serverSideFilter();
                    });
                    $("#polresDisplay").on("change", function(e) {
                        if ($(this).is(':checked')) {
                            openDisplay = this.value;
                            $("#polres").prop('checked', true);
                            $("#myModalPolresDisplay").modal('show');
                        } else {
                            openDisplay = '';
                            $("#polres").prop('checked', false);
                            $("#polres").val();
                        }
                        serverSideFilter();
                    });

                    $("#fasumKhususDisplay").on("change", function(e) {
                        if ($(this).is(':checked')) {
                            openDisplay = this.value;
                            $("#fasum_khusus").prop('checked', true);
                            $("#myModalFasumKhususDisplay").modal('show');
                        } else {
                            openDisplay = '';
                            $("#fasum_khusus").prop('checked', false);
                            $("#fasum_khusus").val();
                        }
                        serverSideFilter();
                    });
                    $("#kegiatanDisplay").on("change", function(e) {
                        if ($(this).is(':checked')) {
                            openDisplay = this.value;
                            $("#jadwal").prop('checked', true);
                            $("#myModalJadwalDisplay").modal('show');
                        } else {
                            openDisplay = '';
                            $("#jadwal").prop('checked', false);
                            $("#jadwal").val();
                        }
                        serverSideFilter();
                    });
                    $("#cctvDisplay").on("change", function(e) {
                        if ($(this).is(':checked')) {
                            openDisplay = this.value;
                            $("#cctv").prop('checked', true);
                            $("#myModalCctvDisplay").modal('show');
                        } else {
                            openDisplay = '';
                            $("#cctv").prop('checked', false);
                            $("#cctv").val();
                        }
                        serverSideFilter();
                    });
                    $("#clusterDisplay").on("change", function(e) {
                        if ($(this).is(':checked')) {
                            openDisplay = this.value;
                            $("#cluster").prop('checked', true);
                            $("#myModalClusterDisplay").modal('show');
                        } else {
                            openDisplay = '';
                            $("#cluster").prop('checked', false);
                            $("#cluster").val();
                        }
                        serverSideFilter();
                    });
                    $("#panicDisplay").on("change", function(e) {
                        if ($(this).is(':checked')) {
                            openDisplay = this.value;
                            $("#panic").prop('checked', true);
                            $("#myModalPanicDisplay").modal('show');
                        } else {
                            openDisplay = '';
                            $("#panic").prop('checked', false);
                            $("#panic").val();
                        }
                        serverSideFilter();
                    });
                    $("#operasiDisplay").on("change", function(e) {
                        if ($(this).is(':checked')) {
                            openDisplay = this.value;
                            $("#operasi").prop('checked', true);
                            $("#myModalLaporanDisplay").modal('show');
                        } else {
                            openDisplay = '';
                            $("#operasi").prop('checked', false);
                            $("#operasi").val();
                        }
                        serverSideFilter();
                    });




                    $("#poldaFilterModal").on("click", function(e) {
                        $("#myModalPoldaDisplay").modal('show');
                    });
                    $("#polresFilterModal").on("click", function(e) {
                        $("#myModalPolresDisplay").modal('show');
                    });
                    $("#jalurBeatFilterModal").on("click", function(e) {
                        $("#myModalJalurBeatDisplay").modal('show');
                    });
                    $("#petugasFilterModal").on("click", function(e) {
                        $("#myModalPetugasDisplay").modal('show');
                    });
                    $("#jadwalFilterModal").on("click", function(e) {
                        $("#myModalJadwalDisplay").modal('show');
                    });
                    $("#clusterFilterModal").on("click", function(e) {
                        $("#myModalClusterDisplay").modal('show');
                    });
                    $("#cctvFilterModal").on("click", function(e) {
                        $("#myModalCctvDisplay").modal('show');
                    });
                    $("#fasumFilterModal").on("click", function(e) {
                        $("#myModalFasumKhususDisplay").modal('show');
                    });
                    $("#panicFilterModal").on("click", function(e) {
                        $("#myModalPanicDisplay").modal('show');
                    });
                    $("#operasiFilterModal").on("click", function(e) {
                        $("#myModalLaporanDisplay").modal('show');
                    });


                    $("#openLastDisplay").on("click", function(e) {
                        if (openDisplay != '') {
                            if (openDisplay == 'petugas') {
                                $("#myModalPetugasDisplay").modal('show');
                            } else if (openDisplay == 'fasum_khusus') {
                                $("#myModalFasumKhususDisplay").modal('show');
                            } else if (openDisplay == 'cluster') {
                                $("#myModalClusterDisplay").modal('show');
                            } else if (openDisplay == 'jadwal_kegiatan') {
                                $("#myModalJadwalDisplay").modal('show');
                            } else if (openDisplay == 'cctv') {
                                $("#myModalCctvDisplay").modal('show');
                            } else if (openDisplay == 'titik_laporan') {
                                $("#myModalLaporanDisplay").modal('show');
                            } else if (openDisplay == 'titik_panicButton') {
                                $("#myModalPanicDisplay").modal('show');
                            } else if (openDisplay == 'jalur_beat') {
                                $("#myModalJalurBeatDisplay").modal('show');
                            }
                        } else {
                            Swal.fire(
                                `Silahkan Pilih Filter Dahulu!`,
                                '',
                                'info'
                            ).then(function() {});
                        }
                    });




                    // var dummyDataJadwal = [];
                    var openMyModalFilter = false;
                    $('#myModalFilter').on('shown.bs.modal', function(e) {

                        if (openMyModalFilter == false) {
                            openMyModalFilter = true;
                            let countlistCategori = 0;
                            let countlistByIdCategetori = 0;
                            let listCategori = "";
                            var listJadwalByIdCategetori = '';
                            var dataJadwalbyIdCategori = [];

                            var openGet1 = false;
                            var openGet2 = false;
                            var openGet3 = false;
                            var openGet4 = false;
                            var openGet5 = false;

                            $.ajax({
                                type: "POST",
                                url: "<?php echo base_url(); ?>dashboard/getCategorySchedule",
                                data: {
                                    "status": '1',
                                },
                                dataType: "JSON",
                                success: function(result) {
                                    let ress = result['data'];
                                    // console.log(ress); 

                                    countlistCategori = 0;
                                    listCategori = "";


                                    for (let i = 0; i < ress.length; i++) {
                                        countlistCategori += 1;
                                        listCategori += `  
                                        <div class="accordion-item" >
                                            <h2 class="accordion-header" id="flush-heading${ress[i]['id']}">
                                                <button id="openCateg${ress[i]['id']}" class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#flush-collapse${ress[i]['id']}" aria-expanded="false" aria-controls="flush-collapse${ress[i]['id']}">
                                                    ${ress[i]['name_category_schedule']} &nbsp;<span class="badge bg-danger rounded-pill" id="totalCategJadwal${ress[i]['id']}"></span>
                                                </button>
                                            </h2>
                                            <div id="flush-collapse${ress[i]['id']}" class="accordion-collapse collapse" aria-labelledby="flush-heading${ress[i]['id']}"
                                                data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body text-muted">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="accordion accordion-flush listJadwalbyCateg${ress[i]['id']}" id="accordionFlushExampleByCateg${ress[i]['id']}">
                                    
                                                            </div> 
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>      
                                    `;
                                        $(".listCategoriSchedule").html(listCategori);

                                    }

                                    $(`#openPetugas`).on('click', function(e) {
                                        $("#turjawali").prop('checked', true);
                                        serverSideGet();
                                    });


                                    var countlistCategoriByCateg = 0;
                                    var listCategoriByCateg = "";


                                    for (let m = 0; m < ress.length; m++) {
                                        $(`#openCateg${ress[m]['id']}`).on('click', function(e) {

                                            countlistCategoriByCateg = 0;
                                            // if(openGet1 == false){
                                            $("#overlay").fadeIn(300);
                                            // openGet1 = true;
                                            listCategoriByCateg = "";
                                            $.ajax({
                                                type: "POST",
                                                url: "<?php echo base_url(); ?>dashboard/getJadwalId",
                                                data: {
                                                    "id_category_schedule": `${ress[m]['id']}`,
                                                },
                                                dataType: "JSON",
                                                success: function(result) {
                                                    $("#overlay").fadeOut(300);
                                                    let ressJadwalId = result['data'];
                                                    console.log(ressJadwalId);
                                                    var countlist = 0;
                                                    var countlistRenpam = 0;
                                                    var list = "";
                                                    var status = "";
                                                    var checkboxJadwal = "";
                                                    var nameJadwalRenpam = [];
                                                    var typeJadwalRenpam = [];
                                                    var awalJadwalRenpam = [];
                                                    var akhirJadwalRenpam = [];

                                                    var warnaRenpam = [];
                                                    var nameRenpam = [];
                                                    var dummyName = [];
                                                    var dummyType = [];
                                                    var dummyAwal = [];
                                                    var dummyAkhir = [];

                                                    var dummyWarna = [];
                                                    var dummyNameRenpam = [];

                                                    var dummy = [];
                                                    var dummy1 = [];
                                                    var dummy2 = [];
                                                    var dummy3 = [];
                                                    var dummy4 = [];


                                                    var dummyJadwalRenpam = [];
                                                    var dummyJadwalRenpamAlter = [];
                                                    var dummyJadwalRenpamAlterr = [];
                                                    var dummyJadwalRenpamAlterrr = [];
                                                    var dummyJadwalRenpamAlterrrr = [];

                                                    var checkedRoutJadwal = [];

                                                    let dummyRenpam = '';

                                                    var checkedRenpam1 = [];

                                                    var route = [];
                                                    var route1 = [];
                                                    var route2 = [];
                                                    var route3 = [];
                                                    var route4 = [];



                                                    ressJadwalId.forEach(el => {

                                                        $(`#totalCategJadwal${ress[m]['id']}`).html(ressJadwalId.length);
                                                        dummyName = [];
                                                        dummyType = [];
                                                        dummyAwal = [];
                                                        dummyAkhir = [];

                                                        // warnaRenpam = [];
                                                        // nameRenpam = [];

                                                        dummyWarna = [];
                                                        dummyNameRenpam = [];

                                                        dummy = [];
                                                        dummy1 = [];
                                                        dummy2 = [];
                                                        dummy3 = [];
                                                        dummy4 = [];

                                                        route = [];
                                                        route1 = [];
                                                        route2 = [];
                                                        route3 = [];
                                                        route4 = [];

                                                        dummyRenpam = '';

                                                        checkedRoutJadwal.push({
                                                            activity: el.activity,
                                                            checked: 0,
                                                        });

                                                        countlist += 1;
                                                        if (el.status_schedule == 1) {
                                                            status = `
                                                            <div>
                                                                <div class="rounded-circle m-auto" style="background:green; height:20px ; width:20px"></div>
                                                            </div>`;
                                                        } else {
                                                            status = `
                                                            <div>
                                                                <div class="rounded-circle m-auto" style="background:red; height:20px ; width:20px"></div>
                                                            </div>
                                                            `;
                                                        }



                                                        var totalJadwalRenpam = el.renpams.length;
                                                        countlistCategoriByCateg += 1;

                                                        if (el.renpams.length > 0) {
                                                            var sortUrutanRenpam = el.renpams.sort((a, b) => {
                                                                return a.order_renpam - b.order_renpam;
                                                            });
                                                            console.log({
                                                                a: `urutan`,
                                                                b: sortUrutanRenpam
                                                            });
                                                            for (let i = 0; i < sortUrutanRenpam.length; i++) {
                                                                // console.log({a: sortUrutanRenpam[i]['name_renpam'],b:sortUrutanRenpam[i]['order_renpam']});
                                                                countlistRenpam += 1;

                                                                checkedRenpam1.push({
                                                                    name_renpam: sortUrutanRenpam[i]['name_renpam'],
                                                                    checked: 0,
                                                                });

                                                                dummyName.push(sortUrutanRenpam[i]['name_renpam']);
                                                                dummyType.push(sortUrutanRenpam[i]['type_renpam']);
                                                                dummyAwal.push(sortUrutanRenpam[i]['awal_renpam']);
                                                                dummyAkhir.push(sortUrutanRenpam[i]['akhir_renpam']);

                                                                nameJadwalRenpam[countlist] = dummyName;
                                                                typeJadwalRenpam[countlist] = dummyType;
                                                                awalJadwalRenpam[countlist] = dummyAwal;
                                                                akhirJadwalRenpam[countlist] = dummyAkhir;

                                                                dummyWarna.push(sortUrutanRenpam[i]['warnaRoute_renpam']);
                                                                warnaRenpam[countlist] = dummyWarna;

                                                                dummyNameRenpam.push(sortUrutanRenpam[i]['name_renpam']);
                                                                nameRenpam[countlist] = dummyNameRenpam;

                                                                dummy.push(sortUrutanRenpam[i]['route']);
                                                                dummy1.push(sortUrutanRenpam[i]['route_alternatif_1']);
                                                                dummy2.push(sortUrutanRenpam[i]['route_alternatif_2']);
                                                                dummy3.push(sortUrutanRenpam[i]['route_masyarakat']);
                                                                dummy4.push(sortUrutanRenpam[i]['route_umum']);

                                                                dummyJadwalRenpam[countlist] = dummy;
                                                                dummyJadwalRenpamAlter[countlist] = dummy1;
                                                                dummyJadwalRenpamAlterr[countlist] = dummy2;
                                                                dummyJadwalRenpamAlterrr[countlist] = dummy3;
                                                                dummyJadwalRenpamAlterrrr[countlist] = dummy4;

                                                                var dataAccounts;
                                                                if (sortUrutanRenpam[i]['accounts'].length > 0) {
                                                                    dataAccounts = sortUrutanRenpam[i]['accounts'];
                                                                } else {
                                                                    dataAccounts = [];
                                                                }

                                                                // console.log(dummyJadwalRenpam);

                                                                var dataVIP = '';
                                                                if (sortUrutanRenpam[i]['vips'].length > 0) {
                                                                    for (let ii = 0; ii < sortUrutanRenpam[i]['vips'].length; ii++) {
                                                                        dataVIP += `${sortUrutanRenpam[i]['vips'][ii]['name_vip']} - (${sortUrutanRenpam[i]['vips'][ii]['country_arrival_vip']}),`;
                                                                    }
                                                                } else {
                                                                    dataVIP = '-';
                                                                }

                                                                dummyRenpam += `
                                                                    <tr>
                                                                        <td>
                                                                            <input type="checkbox" class="form-input checkRenpam" name="selectRenpam" 
                                                                            id="listRenpamModalClick${ress[m]['id']}${countlistRenpam}"  
                                                                            data-name="${sortUrutanRenpam[i]['name_renpam']}" 
                                                                            data-cord='${JSON.stringify(sortUrutanRenpam[i]['route'])}' 
                                                                            data-cord1='${JSON.stringify(sortUrutanRenpam[i]['route_alternatif_1'])}' 
                                                                            data-cord2='${JSON.stringify(sortUrutanRenpam[i]['route_alternatif_2'])}' 
                                                                            data-cord3='${JSON.stringify(sortUrutanRenpam[i]['route_masyarakat'])}' 
                                                                            data-cord4='${JSON.stringify(sortUrutanRenpam[i]['route_umum'])}' 
                                                                            data-type="${sortUrutanRenpam[i]['type_renpam']}" 
                                                                            data-warna="${sortUrutanRenpam[i]['warnaRoute_renpam']}" 
                                                                            data-jadwal="${sortUrutanRenpam[i]['schedule'] != null ? sortUrutanRenpam[i]['schedule']['activity'] : '' }" 
                                                                            data-awal="${sortUrutanRenpam[i]['title_start']}" 
                                                                            data-akhir="${sortUrutanRenpam[i]['title_end']}"> 
                                                                        
                                                                        </td>
                                                                        <td>${i+1}</td> 
                                                                        <td>${dataVIP}</td>
                                                                        <td><a href="<?= base_url() ?>operasi/Renpam/edit/${sortUrutanRenpam[i]['id']}" target="_blank">${sortUrutanRenpam[i]['title_start']} Ke ${sortUrutanRenpam[i]['title_end']}</a></td>
                                                                        <td>${sortUrutanRenpam[i]['start_time'] != null ? sortUrutanRenpam[i]['start_time'].substr(0, 5) : '-'}</td> 
                                                                        <td>
                                                                            <a class="btn" 
                                                                                data-accounts='${JSON.stringify(dataAccounts)}'
                                                                                title="Petugas" data-bs-toggle="modal" data-bs-target="#myModalPetugas"
                                                                                href="javascript:void(0)">
                                                                                <i style="color: #495057;" class="fa fas fa-user-shield"></i>
                                                                            </a>
                                                                        </td>
                                                                        <td> 
                                                                            <a class="btn" href="javascripte:void(0);"
                                                                                style="font-size: 16px;"  
                                                                                data-idnote="${sortUrutanRenpam[i]['id']}" 
                                                                                data-note="${sortUrutanRenpam[i]['note_kakor']}"
                                                                                data-status="${sortUrutanRenpam[i]['status_renpam']}"
                                                                                data-accounts='${JSON.stringify(dataAccounts)}'
                                                                                title="Catatan Uraian Kegiatan" data-bs-toggle="modal" data-bs-target="#myModalNoteKakor">
                                                                                <i style="color: #495057;" class="mdi mdi-beaker-plus-outline"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                `;
                                                            }
                                                            checkboxJadwal = `
                                                                <input type="checkbox" class="form-input" name="selectJadwalRenpam" 
                                                                id="listJadwalRenpamClick${ress[m]['id']}${countlistCategoriByCateg}"   
                                                                data-totaldata="${sortUrutanRenpam.length}"
                                                                >
                                                            `;

                                                        } else {
                                                            checkboxJadwal = `<div style="width: 14px;"></div>`;
                                                        }



                                                        list += `  
                                                            <div class="accordion-item" id="openCategByCateg${ress[m]['id']}${countlistCategoriByCateg}">
                                                                <h2 class="accordion-header" id="flush-headingByCateg${ress[m]['id']}${countlistCategoriByCateg}">
                                                                    <button id="openCategByCateg${ress[m]['id']}${countlistCategoriByCateg}"  class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#flush-collapseByCateg${ress[m]['id']}${countlistCategoriByCateg}" aria-expanded="false" aria-controls="flush-collapseByCateg${ress[m]['id']}${countlistCategoriByCateg}">
                                                                            
                                                                            <div  style="display: flex; font-size: 12px; position: absolute;">
                                                                                ${checkboxJadwal}
                                                                            
                                                                                <a class="btn" style="display: flex;margin-top: 2px;"
                                                                                    id="listJadwalClick${ress[m]['id']}${countlist}"   
                                                                                    data-alamat="${el.address_schedule}"  
                                                                                    data-cord="${el.coordinate_schedule}"
                                                                                    href="javascript:void(0)"><i style="color: #495057;" class="fa fas fa-eye"></i>
                                                                                </a>  
                                                                                <a style="margin-top: 1px;" target="_blank" href="<?= base_url() ?>operasi/Kegiatan/edit/${el.id}">${el.activity}</br>${el.date_schedule} - ${el.start_time.substr(0, 5)} s/d ${el.end_time.substr(0, 5)}</a>
                                                                                <div style="margin-left: 5px;">
                                                                                    <span class="badge bg-danger rounded-pill">${totalJadwalRenpam}</span>
                                                                                </div> 
                                                                            </div>
                                                                    </button>
                                                                </h2>
                                                                <div id="flush-collapseByCateg${ress[m]['id']}${countlistCategoriByCateg}" class="accordion-collapse collapse" aria-labelledby="flush-headingByCateg${ress[m]['id']}${countlistCategoriByCateg}"
                                                                    data-bs-parent="#accordionFlushExampleByCateg${ress[m]['id']}">
                                                                    <div class="accordion-body text-muted">
                                                                        
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <table style="font-size: 10px" id="datatableByCateg${ress[m]['id']}${countlist}" class="table dt-responsive w-100">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>Rute</th>
                                                                                            <th>No</th>
                                                                                            <th>Negara</th>
                                                                                            <th>Lokasi</th>
                                                                                            <th>Berangkat</th> 
                                                                                            <th>Petugas</th>
                                                                                            <th>Catatan</th>
                                                                                        </tr>
                                                                                    </thead> 
                                                                                    <tbody>
                                                                                        ${dummyRenpam}
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                                
                                                                    </div>
                                                                </div>
                                                            </div>   
                                                        `;
                                                        $(`.listJadwalbyCateg${ress[m]['id']}`).html(list);

                                                    });




                                                    for (let i = 0; i < countlistRenpam; i++) {
                                                        $(`#listRenpamModalClick${ress[m]['id']}${i+1}`).on("change", function(e) {
                                                            // console.log(checkedRenpam1);  
                                                            //Find index of specific object using findIndex method.    
                                                            objIndex = checkedRenpam1.findIndex((obj => obj.name_renpam == $(this).data('name')));
                                                            // console.log(objIndex);

                                                            //Log object to Console.
                                                            console.log("Before update: ", checkedRenpam1[objIndex]);

                                                            //Update object's name property.
                                                            if ($(this).is(':checked')) {
                                                                checkedRenpam1[objIndex].checked = 1;
                                                            } else {
                                                                checkedRenpam1[objIndex].checked = 0;
                                                            }

                                                            //Log object to console again.
                                                            console.log(`${$(this).data('type')} - After update: `, checkedRenpam1[objIndex]);

                                                            // console.log($(this).data('cord'));

                                                            var titikAwal = $(this).data('awal') == null ? '-' : $(this).data('awal');
                                                            var titikAkhir = $(this).data('akhir') == null ? '-' : $(this).data('akhir');

                                                            var warna = "";
                                                            if ($(this).data('jadwal') == "JALUR BEAT") {
                                                                warna = $(this).data('warna') == "" ? 'red' : $(this).data('warna');
                                                            } else {
                                                                warna = "red";
                                                            }


                                                            var typeRenpam = $(this).data('type');
                                                            if (typeRenpam == 3) { //penjagaan
                                                                iconMarkerRenpam = `https://cdn-icons-png.flaticon.com/512/1323/1323306.png`;
                                                                markerType = `<img src="${iconMarkerRenpam}"><div class="pin"></div><div class="pulse"></div>`;
                                                                markerTypeOther = `<img src="${iconMarkerRenpam}"><div class="pin" style="background: gray;"></div><div class="pulse"></div>`;
                                                                markerTypeEnd = `<img src="${iconMarkerRenpam}"><div class="pin" style="background: green;"></div><div class="pulse"></div>`;
                                                                styleRouteUtama = [{
                                                                    color: warna,
                                                                    weight: 5,
                                                                    className: 'animateRoute'
                                                                }];
                                                            } else if (typeRenpam == 4) { //pengaturan 
                                                                iconMarkerRenpam = `https://cdn-icons-png.flaticon.com/512/196/196781.png`;
                                                                markerType = `<img src="${iconMarkerRenpam}"><div class="pin"></div><div class="pulse"></div>`;
                                                                markerTypeOther = `<img src="${iconMarkerRenpam}"><div class="pin" style="background: gray;"></div><div class="pulse"></div>`;
                                                                markerTypeEnd = `<img src="${iconMarkerRenpam}"><div class="pin" ></div><div class="pulse"></div>`;
                                                                styleRouteUtama = [{
                                                                    color: warna,
                                                                    weight: 5,
                                                                    className: 'animateRoute'
                                                                }];
                                                            } else if (typeRenpam == 5) { //penutupan 
                                                                iconMarkerRenpam = `https://cdn-icons-png.flaticon.com/512/196/196764.png`;
                                                                markerType = `<img src="${iconMarkerRenpam}"><div class="pin"></div><div class="pulse"></div>`;
                                                                markerTypeOther = `<img src="${iconMarkerRenpam}"><div class="pin" style="background: gray;"></div><div class="pulse"></div>`;
                                                                markerTypeEnd = `<img src="${iconMarkerRenpam}"><div class="pin" ></div><div class="pulse"></div>`;
                                                                styleRouteUtama = [{
                                                                    color: warna,
                                                                    weight: 5,
                                                                    className: 'animateRoute'
                                                                }];
                                                            } else if (typeRenpam == 1) {
                                                                iconMarkerRenpam = ``;
                                                                markerType = `<div class="pin" style="background: yellow;"><div style="transform: rotate(45deg);margin-left: 5px;margin-top: 10px;font-size: 14px;">${namaRen.substr(-2)}</div></div><div class="pulse"></div>`;
                                                                markerTypeOther = `<div class="pin" style="background: gray; display: none;"><div style="transform: rotate(45deg);margin-left: 5px;margin-top: 10px;font-size: 14px;">${namaRen.substr(-2)}</div></div><div class="pulse"></div>`;
                                                                markerTypeEnd = `<div class="pin" style="display: none;background: yellow;"><div style="display: none;transform: rotate(45deg);margin-left: 5px;margin-top: 10px;font-size: 14px;">${namaRen.substr(-2)}</div></div><div class="pulse"></div>`;
                                                                styleRouteUtama = [{
                                                                    color: warna,
                                                                    weight: 5
                                                                }];
                                                            } else {
                                                                iconMarkerRenpam = `https://cdn-icons-png.flaticon.com/512/178/178753.png`;
                                                                markerType = `<img style=" display: none;" src="${iconMarkerRenpam}"><div class="pin" style=" display: none;"></div><div class="pulse"></div>`;
                                                                markerTypeOther = `<img style=" display: none;" src="${iconMarkerRenpam}"><div class="pin" style="background: gray; display: none;"></div><div class="pulse"></div>`;
                                                                markerTypeEnd = `<img style=" display: none;" src="${iconMarkerRenpam}"><div class="pin" style="background: green; display: none;"></div><div class="pulse"></div>`;
                                                                styleRouteUtama = [{
                                                                    color: warna,
                                                                    weight: 5,
                                                                    className: 'animateRoute'
                                                                }];
                                                            }

                                                            var cordRute1 = $(this).data('cord1');
                                                            if (cordRute1 != null && cordRute1[0]['latLng'] != null) {
                                                                if ($(this).is(':checked')) {
                                                                    routingRenpam1[i] = null;
                                                                    routingRenpam1[i] = L.Routing.control({
                                                                        show: false,
                                                                        draggableWaypoints: false,
                                                                        addWaypoints: false,
                                                                        waypoints: cordRute1,
                                                                        router: new L.Routing.osrmv1({
                                                                            language: 'en',
                                                                            profile: 'car'
                                                                        }),
                                                                        lineOptions: {
                                                                            styles: [{
                                                                                color: "#b935b9",
                                                                                weight: 5,
                                                                                className: 'animateRoute'
                                                                            }]
                                                                        },
                                                                        createMarker: function(i, wp, nWps) {
                                                                            if (i === 0 || i === nWps + 1) {
                                                                                // here change the starting and ending icons
                                                                                return L.marker(wp.latLng, {
                                                                                    icon: L.divIcon({
                                                                                        className: "location-pin",
                                                                                        html: markerType,
                                                                                        iconSize: [5, 5],
                                                                                        //iconAnchor: [18, 30]
                                                                                        iconAnchor: [5, 10],
                                                                                    }),
                                                                                    draggable: this.draggableWaypoints,
                                                                                }).bindPopup(`
                                                                                    <div class="text-center"> 
                                                                                        <h5>${titikAwal}</h5>
                                                                                    </div> 
                                                                                `);
                                                                            } else if (i === nWps - 1) {
                                                                                return L.marker(wp.latLng, {
                                                                                    icon: L.divIcon({
                                                                                        className: "location-pin",
                                                                                        html: markerTypeEnd,
                                                                                        iconSize: [5, 5],
                                                                                        //iconAnchor: [18, 30]
                                                                                        iconAnchor: [5, 10],
                                                                                    }),
                                                                                    draggable: this.draggableWaypoints,
                                                                                }).bindPopup(`
                                                                                    <div class="text-center"> 
                                                                                        <h5>${titikAkhir}</h5>
                                                                                    </div> 
                                                                                `);
                                                                            } else {
                                                                                // here change all the others
                                                                                var options = {
                                                                                        draggable: this.draggableWaypoints,
                                                                                    },
                                                                                    marker = L.marker(wp.latLng, {
                                                                                        icon: L.divIcon({
                                                                                            className: "location-pin",
                                                                                            html: markerTypeOther,
                                                                                            iconSize: [5, 5],
                                                                                            //iconAnchor: [18, 30]
                                                                                            iconAnchor: [5, 10],
                                                                                        }),
                                                                                        draggable: this.draggableWaypoints,
                                                                                    });

                                                                                return marker;
                                                                            }
                                                                        },
                                                                        // geocoder: L.Control.Geocoder.nominatim({})
                                                                    }).addTo(mapContainer);
                                                                    // mapContainer.addControl(routingRenpam1[i]); 
                                                                } else {
                                                                    mapContainer.removeControl(routingRenpam1[i]);
                                                                }


                                                            } else {}

                                                            var cordRute2 = $(this).data('cord2');
                                                            if (cordRute2 != null && cordRute2[0]['latLng'] != null) {
                                                                if ($(this).is(':checked')) {
                                                                    routingRenpam2[i] = null;
                                                                    routingRenpam2[i] = L.Routing.control({
                                                                        show: false,
                                                                        draggableWaypoints: false,
                                                                        addWaypoints: false,
                                                                        waypoints: cordRute2,
                                                                        router: new L.Routing.osrmv1({
                                                                            language: 'en',
                                                                            profile: 'car'
                                                                        }),
                                                                        lineOptions: {
                                                                            styles: [{
                                                                                color: "#808080",
                                                                                weight: 5,
                                                                                className: 'animateRoute'
                                                                            }]
                                                                        },
                                                                        createMarker: function(i, wp, nWps) {
                                                                            if (i === 0 || i === nWps + 1) {
                                                                                // here change the starting and ending icons
                                                                                return L.marker(wp.latLng, {
                                                                                    icon: L.divIcon({
                                                                                        className: "location-pin",
                                                                                        html: markerType,
                                                                                        iconSize: [5, 5],
                                                                                        //iconAnchor: [18, 30]
                                                                                        iconAnchor: [5, 10],
                                                                                    }),
                                                                                    draggable: this.draggableWaypoints,
                                                                                }).bindPopup(`
                                                                                    <div class="text-center"> 
                                                                                        <h5>${titikAwal}</h5>
                                                                                    </div> 
                                                                                `);
                                                                            } else if (i === nWps - 1) {
                                                                                return L.marker(wp.latLng, {
                                                                                    icon: L.divIcon({
                                                                                        className: "location-pin",
                                                                                        html: markerTypeEnd,
                                                                                        iconSize: [5, 5],
                                                                                        //iconAnchor: [18, 30]
                                                                                        iconAnchor: [5, 10],
                                                                                    }),
                                                                                    draggable: this.draggableWaypoints,
                                                                                }).bindPopup(`
                                                                                    <div class="text-center"> 
                                                                                        <h5>${titikAkhir}</h5>
                                                                                    </div> 
                                                                                `);
                                                                            } else {
                                                                                // here change all the others
                                                                                var options = {
                                                                                        draggable: this.draggableWaypoints,
                                                                                    },
                                                                                    marker = L.marker(wp.latLng, {
                                                                                        icon: L.divIcon({
                                                                                            className: "location-pin",
                                                                                            html: markerTypeOther,
                                                                                            iconSize: [5, 5],
                                                                                            //iconAnchor: [18, 30]
                                                                                            iconAnchor: [5, 10],
                                                                                        }),
                                                                                        draggable: this.draggableWaypoints,
                                                                                    });

                                                                                return marker;
                                                                            }
                                                                        },
                                                                        // geocoder: L.Control.Geocoder.nominatim({})
                                                                    }).addTo(mapContainer);
                                                                    // mapContainer.addControl(routingRenpam2[i]); 
                                                                } else {
                                                                    mapContainer.removeControl(routingRenpam2[i]);
                                                                }


                                                            } else {}

                                                            var cordRute3 = $(this).data('cord3');
                                                            if (cordRute3 != null && cordRute3[0]['latLng'] != null) {
                                                                if ($(this).is(':checked')) {
                                                                    routingRenpam3[i] = null;
                                                                    routingRenpam3[i] = L.Routing.control({
                                                                        show: false,
                                                                        draggableWaypoints: false,
                                                                        addWaypoints: false,
                                                                        waypoints: cordRute3,
                                                                        router: new L.Routing.osrmv1({
                                                                            language: 'en',
                                                                            profile: 'car'
                                                                        }),
                                                                        lineOptions: {
                                                                            styles: [{
                                                                                color: "#000dda",
                                                                                weight: 5,
                                                                                className: 'animateRoute'
                                                                            }]
                                                                        },
                                                                        createMarker: function(i, wp, nWps) {
                                                                            if (i === 0 || i === nWps + 1) {
                                                                                // here change the starting and ending icons
                                                                                return L.marker(wp.latLng, {
                                                                                    icon: L.divIcon({
                                                                                        className: "location-pin",
                                                                                        html: markerType,
                                                                                        iconSize: [5, 5],
                                                                                        //iconAnchor: [18, 30]
                                                                                        iconAnchor: [5, 10],
                                                                                    }),
                                                                                    draggable: this.draggableWaypoints,
                                                                                }).bindPopup(`
                                                                                    <div class="text-center"> 
                                                                                        <h5>${titikAwal}</h5>
                                                                                    </div> 
                                                                                `);
                                                                            } else if (i === nWps - 1) {
                                                                                return L.marker(wp.latLng, {
                                                                                    icon: L.divIcon({
                                                                                        className: "location-pin",
                                                                                        html: markerTypeEnd,
                                                                                        iconSize: [5, 5],
                                                                                        //iconAnchor: [18, 30]
                                                                                        iconAnchor: [5, 10],
                                                                                    }),
                                                                                    draggable: this.draggableWaypoints,
                                                                                }).bindPopup(`
                                                                                    <div class="text-center"> 
                                                                                        <h5>${titikAkhir}</h5>
                                                                                    </div> 
                                                                                `);
                                                                            } else {
                                                                                // here change all the others
                                                                                var options = {
                                                                                        draggable: this.draggableWaypoints,
                                                                                    },
                                                                                    marker = L.marker(wp.latLng, {
                                                                                        icon: L.divIcon({
                                                                                            className: "location-pin",
                                                                                            html: markerTypeOther,
                                                                                            iconSize: [5, 5],
                                                                                            //iconAnchor: [18, 30]
                                                                                            iconAnchor: [5, 10],
                                                                                        }),
                                                                                        draggable: this.draggableWaypoints,
                                                                                    });

                                                                                return marker;
                                                                            }
                                                                        },
                                                                        // geocoder: L.Control.Geocoder.nominatim({})
                                                                    }).addTo(mapContainer);
                                                                    // mapContainer.addControl(routingRenpam3[i]); 
                                                                } else {
                                                                    mapContainer.removeControl(routingRenpam3[i]);
                                                                }


                                                            } else {}

                                                            var cordRute4 = $(this).data('cord4');
                                                            if (cordRute4 != null && cordRute4[0]['latLng'] != null) {
                                                                if ($(this).is(':checked')) {
                                                                    routingRenpam4[i] = null;
                                                                    routingRenpam4[i] = L.Routing.control({
                                                                        show: false,
                                                                        draggableWaypoints: false,
                                                                        addWaypoints: false,
                                                                        waypoints: cordRute4,
                                                                        router: new L.Routing.osrmv1({
                                                                            language: 'en',
                                                                            profile: 'car'
                                                                        }),
                                                                        lineOptions: {
                                                                            styles: [{
                                                                                color: "#bdbd0b",
                                                                                weight: 5,
                                                                                className: 'animateRoute'
                                                                            }]
                                                                        },
                                                                        createMarker: function(i, wp, nWps) {
                                                                            if (i === 0 || i === nWps + 1) {
                                                                                // here change the starting and ending icons
                                                                                return L.marker(wp.latLng, {
                                                                                    icon: L.divIcon({
                                                                                        className: "location-pin",
                                                                                        html: markerType,
                                                                                        iconSize: [5, 5],
                                                                                        //iconAnchor: [18, 30]
                                                                                        iconAnchor: [5, 10],
                                                                                    }),
                                                                                    draggable: this.draggableWaypoints,
                                                                                }).bindPopup(`
                                                                                    <div class="text-center"> 
                                                                                        <h5>${titikAwal}</h5>
                                                                                    </div> 
                                                                                `);
                                                                            } else if (i === nWps - 1) {
                                                                                return L.marker(wp.latLng, {
                                                                                    icon: L.divIcon({
                                                                                        className: "location-pin",
                                                                                        html: markerTypeEnd,
                                                                                        iconSize: [5, 5],
                                                                                        //iconAnchor: [18, 30]
                                                                                        iconAnchor: [5, 10],
                                                                                    }),
                                                                                    draggable: this.draggableWaypoints,
                                                                                }).bindPopup(`
                                                                                    <div class="text-center"> 
                                                                                        <h5>${titikAkhir}</h5>
                                                                                    </div> 
                                                                                `);
                                                                            } else {
                                                                                // here change all the others
                                                                                var options = {
                                                                                        draggable: this.draggableWaypoints,
                                                                                    },
                                                                                    marker = L.marker(wp.latLng, {
                                                                                        icon: L.divIcon({
                                                                                            className: "location-pin",
                                                                                            html: markerTypeOther,
                                                                                            iconSize: [5, 5],
                                                                                            //iconAnchor: [18, 30]
                                                                                            iconAnchor: [5, 10],
                                                                                        }),
                                                                                        draggable: this.draggableWaypoints,
                                                                                    });

                                                                                return marker;
                                                                            }
                                                                        },
                                                                        // geocoder: L.Control.Geocoder.nominatim({})
                                                                    }).addTo(mapContainer);
                                                                    // mapContainer.addControl(routingRenpam4[i]); 
                                                                } else {
                                                                    mapContainer.removeControl(routingRenpam4[i]);
                                                                }


                                                            } else {}

                                                            var cordRuteUtama = $(this).data('cord');
                                                            if (cordRuteUtama != null && cordRuteUtama[0]['latLng'] != null) {
                                                                if ($(this).is(':checked')) {
                                                                    routingRenpam[i] = null;
                                                                    routingRenpam[i] = L.Routing.control({
                                                                        show: false,
                                                                        draggableWaypoints: false,
                                                                        addWaypoints: false,
                                                                        waypoints: cordRuteUtama,
                                                                        router: new L.Routing.osrmv1({
                                                                            language: 'en',
                                                                            profile: 'car'
                                                                        }),
                                                                        lineOptions: {
                                                                            styles: styleRouteUtama
                                                                        },
                                                                        createMarker: function(i, wp, nWps) {
                                                                            if (i === 0 || i === nWps + 1) {
                                                                                // here change the starting and ending icons
                                                                                return L.marker(wp.latLng, {
                                                                                    icon: L.divIcon({
                                                                                        className: "location-pin",
                                                                                        html: markerType,
                                                                                        iconSize: [5, 5],
                                                                                        //iconAnchor: [18, 30]
                                                                                        iconAnchor: [5, 10],
                                                                                    }),
                                                                                    draggable: this.draggableWaypoints,
                                                                                }).bindPopup(`
                                                                                    <div class="text-center"> 
                                                                                        <h5>${titikAwal}</h5>
                                                                                    </div> 
                                                                                `);
                                                                            } else if (i === nWps - 1) {
                                                                                return L.marker(wp.latLng, {
                                                                                    icon: L.divIcon({
                                                                                        className: "location-pin",
                                                                                        html: markerTypeEnd,
                                                                                        iconSize: [5, 5],
                                                                                        //iconAnchor: [18, 30]
                                                                                        iconAnchor: [5, 10],
                                                                                    }),
                                                                                    draggable: this.draggableWaypoints,
                                                                                }).bindPopup(`
                                                                                    <div class="text-center"> 
                                                                                        <h5>${titikAkhir}</h5>
                                                                                    </div> 
                                                                                `);
                                                                            } else {
                                                                                // here change all the others
                                                                                var options = {
                                                                                        draggable: this.draggableWaypoints,
                                                                                    },
                                                                                    marker = L.marker(wp.latLng, {
                                                                                        icon: L.divIcon({
                                                                                            className: "location-pin",
                                                                                            html: markerTypeOther,
                                                                                            iconSize: [5, 5],
                                                                                            //iconAnchor: [18, 30]
                                                                                            iconAnchor: [5, 10],
                                                                                        }),
                                                                                        draggable: this.draggableWaypoints,
                                                                                    });

                                                                                return marker;
                                                                            }
                                                                        },
                                                                        // geocoder: L.Control.Geocoder.nominatim({})
                                                                    }).addTo(mapContainer);
                                                                    // mapContainer.addControl(routingRenpam[i]); 
                                                                } else {
                                                                    mapContainer.removeControl(routingRenpam[i]);
                                                                }


                                                            } else {}
                                                        });


                                                    }

                                                    for (let i = 0; i < ressJadwalId.length; i++) {
                                                        // console.log(`listJadwalRenpamClick${ress[m]['id']}${i+1}`); 
                                                        $(`.checkAll${ress[m]['id']}${i+1}`).on("change", function(e) {
                                                            var checkboxes = $(`.checkRenpam`);
                                                            if ($(this).is(':checked')) {
                                                                for (var i = 0; i < checkboxes.length; i++) {
                                                                    if (checkboxes[i].type == 'checkbox') {
                                                                        checkboxes[i].checked = true;
                                                                    }
                                                                }
                                                            } else {
                                                                for (var i = 0; i < checkboxes.length; i++) {
                                                                    if (checkboxes[i].type == 'checkbox') {
                                                                        checkboxes[i].checked = false;
                                                                    }
                                                                }
                                                            }
                                                            alert(`checkAll${ress[m]['id']}${i+1}`);
                                                        });

                                                        $(`#listJadwalRenpamClick${ress[m]['id']}${i+1}`).on("change", function(e) {

                                                            for (let ii = 0; ii < nameJadwalRenpam[i + 1].length; ii++) {
                                                                //Find index of specific object using findIndex method.    
                                                                objIndex = checkedRoutJadwal.findIndex((obj => obj.activity == ressJadwalId[i]['activity']));
                                                                // console.log(objIndex);

                                                                //Log object to Console.
                                                                // console.log("Before update: ", checkedRoutJadwal[objIndex]);

                                                                //Update object's name property.
                                                                if ($(this).is(':checked')) {
                                                                    checkedRoutJadwal[objIndex].checked = 1;
                                                                } else {
                                                                    checkedRoutJadwal[objIndex].checked = 0;
                                                                }

                                                                var titikAwal = nameJadwalRenpam[i + 1][ii] == null ? '-' : nameJadwalRenpam[i + 1][ii];
                                                                var titikAkhir = akhirJadwalRenpam[i + 1][ii] == null ? '-' : akhirJadwalRenpam[i + 1][ii];



                                                                // console.log(dummyJadwalRenpam[i+1][ii]);

                                                                var warna = "";
                                                                if (ressJadwalId[i]['activity'] == "JALUR BEAT") {
                                                                    warna = warnaRenpam[i + 1][ii] == null ? 'red' : warnaRenpam[i + 1][ii];
                                                                } else {
                                                                    warna = "red";
                                                                }

                                                                var namaRen = nameRenpam[i + 1][ii] == null ? 'red' : nameRenpam[i + 1][ii];
                                                                console.log({
                                                                    a: namaRen,
                                                                    b: warna
                                                                });



                                                                var typeRenpam = typeJadwalRenpam[i + 1][ii];
                                                                if (typeRenpam == 3) { //penjagaan
                                                                    iconMarkerRenpam = `https://cdn-icons-png.flaticon.com/512/1323/1323306.png`;
                                                                    markerType = `<img src="${iconMarkerRenpam}"><div class="pin"></div><div class="pulse"></div>`;
                                                                    markerTypeOther = `<img src="${iconMarkerRenpam}"><div class="pin" style="background: gray;"></div><div class="pulse"></div>`;
                                                                    markerTypeEnd = `<img src="${iconMarkerRenpam}"><div class="pin" style="background: green;"></div><div class="pulse"></div>`;
                                                                    styleRouteUtama = [{
                                                                        color: warna,
                                                                        weight: 5,
                                                                        className: 'animateRoute'
                                                                    }];
                                                                } else if (typeRenpam == 4) { //pengaturan 
                                                                    iconMarkerRenpam = `https://cdn-icons-png.flaticon.com/512/196/196781.png`;
                                                                    markerType = `<img src="${iconMarkerRenpam}"><div class="pin"></div><div class="pulse"></div>`;
                                                                    markerTypeOther = `<img src="${iconMarkerRenpam}"><div class="pin" style="background: gray;"></div><div class="pulse"></div>`;
                                                                    markerTypeEnd = `<img src="${iconMarkerRenpam}"><div class="pin" ></div><div class="pulse"></div>`;
                                                                    styleRouteUtama = [{
                                                                        color: warna,
                                                                        weight: 5,
                                                                        className: 'animateRoute'
                                                                    }];
                                                                } else if (typeRenpam == 5) { //penutupan 
                                                                    iconMarkerRenpam = `https://cdn-icons-png.flaticon.com/512/196/196764.png`;
                                                                    markerType = `<img src="${iconMarkerRenpam}"><div class="pin"></div><div class="pulse"></div>`;
                                                                    markerTypeOther = `<img src="${iconMarkerRenpam}"><div class="pin" style="background: gray;"></div><div class="pulse"></div>`;
                                                                    markerTypeEnd = `<img src="${iconMarkerRenpam}"><div class="pin" ></div><div class="pulse"></div>`;
                                                                    styleRouteUtama = [{
                                                                        color: warna,
                                                                        weight: 5,
                                                                        className: 'animateRoute'
                                                                    }];
                                                                } else if (typeRenpam == 1) {
                                                                    iconMarkerRenpam = ``;
                                                                    markerType = `<div class="pin" style="background: yellow;"><div style="transform: rotate(45deg);margin-left: 5px;margin-top: 10px;font-size: 14px;">${namaRen.substr(-2)}</div></div><div class="pulse"></div>`;
                                                                    markerTypeOther = `<div class="pin" style="background: gray; display: none;"><div style="transform: rotate(45deg);margin-left: 5px;margin-top: 10px;font-size: 14px;">${namaRen.substr(-2)}</div></div><div class="pulse"></div>`;
                                                                    markerTypeEnd = `<div class="pin" style="display: none;background: yellow;"><div style="display: none;transform: rotate(45deg);margin-left: 5px;margin-top: 10px;font-size: 14px;">${namaRen.substr(-2)}</div></div><div class="pulse"></div>`;
                                                                    styleRouteUtama = [{
                                                                        color: warna,
                                                                        weight: 5
                                                                    }];
                                                                } else {
                                                                    iconMarkerRenpam = `https://cdn-icons-png.flaticon.com/512/178/178753.png`;
                                                                    markerType = `<img style=" display: none;" src="${iconMarkerRenpam}"><div class="pin" style=" display: none;"></div><div class="pulse"></div>`;
                                                                    markerTypeOther = `<img style=" display: none;" src="${iconMarkerRenpam}"><div class="pin" style="background: gray; display: none;"></div><div class="pulse"></div>`;
                                                                    markerTypeEnd = `<img style=" display: none;" src="${iconMarkerRenpam}"><div class="pin" style="background: green; display: none;"></div><div class="pulse"></div>`;
                                                                    styleRouteUtama = [{
                                                                        color: warna,
                                                                        weight: 5,
                                                                        className: 'animateRoute'
                                                                    }];
                                                                }



                                                                if (dummyJadwalRenpam[i + 1][ii] != null && dummyJadwalRenpam[i + 1][ii].length > 0 && dummyJadwalRenpam[i + 1][ii][0]['latLng'] != null) {

                                                                    if ($(this).is(':checked')) {
                                                                        routingJadwalRenpam[`${i+1}${ii}`] = null;
                                                                        routingJadwalRenpam[`${i+1}${ii}`] = L.Routing.control({
                                                                            show: false,
                                                                            draggableWaypoints: false,
                                                                            addWaypoints: false,
                                                                            waypoints: dummyJadwalRenpam[i + 1][ii],
                                                                            router: new L.Routing.osrmv1({
                                                                                language: 'en',
                                                                                profile: 'car'
                                                                            }),
                                                                            lineOptions: {
                                                                                styles: styleRouteUtama
                                                                            },
                                                                            createMarker: function(i, wp, nWps) {
                                                                                if (i === 0 || i === nWps + 1) {
                                                                                    // here change the starting and ending icons
                                                                                    return L.marker(wp.latLng, {
                                                                                        icon: L.divIcon({
                                                                                            className: "location-pin",
                                                                                            html: markerType,
                                                                                            iconSize: [5, 5],
                                                                                            //iconAnchor: [18, 30]
                                                                                            iconAnchor: [5, 10],
                                                                                        }),
                                                                                        draggable: this.draggableWaypoints,
                                                                                    }).bindPopup(`
                                                                                        <div class="text-center"> 
                                                                                            <h5>${titikAwal}</h5>
                                                                                        </div> 
                                                                                    `);
                                                                                } else if (i === nWps - 1) {
                                                                                    return L.marker(wp.latLng, {
                                                                                        icon: L.divIcon({
                                                                                            className: "location-pin",
                                                                                            html: markerTypeEnd,
                                                                                            iconSize: [5, 5],
                                                                                            //iconAnchor: [18, 30]
                                                                                            iconAnchor: [5, 10],
                                                                                        }),
                                                                                        draggable: this.draggableWaypoints,
                                                                                    }).bindPopup(`
                                                                                        <div class="text-center"> 
                                                                                            <h5>${titikAkhir}</h5>
                                                                                        </div> 
                                                                                    `);
                                                                                } else {
                                                                                    // here change all the others
                                                                                    var options = {
                                                                                            draggable: this.draggableWaypoints,
                                                                                        },
                                                                                        marker = L.marker(wp.latLng, {
                                                                                            icon: L.divIcon({
                                                                                                className: "location-pin",
                                                                                                html: markerTypeOther,
                                                                                                iconSize: [5, 5],
                                                                                                //iconAnchor: [18, 30]
                                                                                                iconAnchor: [5, 10],
                                                                                            }),
                                                                                            draggable: this.draggableWaypoints,
                                                                                        });

                                                                                    return marker;
                                                                                }
                                                                            },
                                                                            // geocoder: L.Control.Geocoder.nominatim({})
                                                                        }).addTo(mapContainer);
                                                                        // mapContainer.addControl(routingJadwalRenpam[`${i+1}${ii}`]);  
                                                                        console.log('kebuka');
                                                                    } else {
                                                                        mapContainer.removeControl(routingJadwalRenpam[`${i+1}${ii}`]);
                                                                    }
                                                                } else {
                                                                    console.log('error route utama');
                                                                }

                                                                if (dummyJadwalRenpamAlter[i + 1][ii] != null && dummyJadwalRenpamAlter[i + 1][ii].length > 0 && dummyJadwalRenpamAlter[i + 1][ii][0]['latLng'] != null) {

                                                                    if ($(this).is(':checked')) {
                                                                        routingJadwalRenpam1[`${i+1}${ii}`] = null;
                                                                        routingJadwalRenpam1[`${i+1}${ii}`] = L.Routing.control({
                                                                            show: false,
                                                                            draggableWaypoints: false,
                                                                            addWaypoints: false,
                                                                            waypoints: dummyJadwalRenpamAlter[i + 1][ii],
                                                                            router: new L.Routing.osrmv1({
                                                                                language: 'en',
                                                                                profile: 'car'
                                                                            }),
                                                                            lineOptions: {
                                                                                styles: [{
                                                                                    color: "#b935b9",
                                                                                    weight: 5,
                                                                                    className: 'animateRoute'
                                                                                }]
                                                                            },
                                                                            createMarker: function(i, wp, nWps) {
                                                                                if (i === 0 || i === nWps + 1) {
                                                                                    // here change the starting and ending icons
                                                                                    return L.marker(wp.latLng, {
                                                                                        icon: L.divIcon({
                                                                                            className: "location-pin",
                                                                                            html: markerType,
                                                                                            iconSize: [5, 5],
                                                                                            //iconAnchor: [18, 30]
                                                                                            iconAnchor: [5, 10],
                                                                                        }),
                                                                                        draggable: this.draggableWaypoints,
                                                                                    }).bindPopup(`
                                                                                        <div class="text-center"> 
                                                                                            <h5>${titikAwal}</h5>
                                                                                        </div> 
                                                                                    `);
                                                                                } else if (i === nWps - 1) {
                                                                                    return L.marker(wp.latLng, {
                                                                                        icon: L.divIcon({
                                                                                            className: "location-pin",
                                                                                            html: markerTypeEnd,
                                                                                            iconSize: [5, 5],
                                                                                            //iconAnchor: [18, 30]
                                                                                            iconAnchor: [5, 10],
                                                                                        }),
                                                                                        draggable: this.draggableWaypoints,
                                                                                    }).bindPopup(`
                                                                                        <div class="text-center"> 
                                                                                            <h5>${titikAkhir}</h5>
                                                                                        </div> 
                                                                                    `);
                                                                                } else {
                                                                                    // here change all the others
                                                                                    var options = {
                                                                                            draggable: this.draggableWaypoints,
                                                                                        },
                                                                                        marker = L.marker(wp.latLng, {
                                                                                            icon: L.divIcon({
                                                                                                className: "location-pin",
                                                                                                html: markerTypeOther,
                                                                                                iconSize: [5, 5],
                                                                                                //iconAnchor: [18, 30]
                                                                                                iconAnchor: [5, 10],
                                                                                            }),
                                                                                            draggable: this.draggableWaypoints,
                                                                                        });

                                                                                    return marker;
                                                                                }
                                                                            },
                                                                            // geocoder: L.Control.Geocoder.nominatim({})
                                                                        }).addTo(mapContainer);
                                                                        // mapContainer.addControl(routingJadwalRenpam1[`${i+1}${ii}`]);  
                                                                    } else {
                                                                        mapContainer.removeControl(routingJadwalRenpam1[`${i+1}${ii}`]);
                                                                    }
                                                                } else {
                                                                    console.log('error route alternative 1');
                                                                }


                                                                if (dummyJadwalRenpamAlterr[i + 1][ii] != null && dummyJadwalRenpamAlterr[i + 1][ii].length > 0 && dummyJadwalRenpamAlterr[i + 1][ii][0]['latLng'] != null) {

                                                                    if ($(this).is(':checked')) {
                                                                        routingJadwalRenpam2[`${i+1}${ii}`] = null;
                                                                        routingJadwalRenpam2[`${i+1}${ii}`] = L.Routing.control({
                                                                            show: false,
                                                                            draggableWaypoints: false,
                                                                            addWaypoints: false,
                                                                            waypoints: dummyJadwalRenpamAlterr[i + 1][ii],
                                                                            router: new L.Routing.osrmv1({
                                                                                language: 'en',
                                                                                profile: 'car'
                                                                            }),
                                                                            lineOptions: {
                                                                                styles: [{
                                                                                    color: "gray",
                                                                                    weight: 5,
                                                                                    className: 'animateRoute'
                                                                                }]
                                                                            },
                                                                            createMarker: function(i, wp, nWps) {
                                                                                if (i === 0 || i === nWps + 1) {
                                                                                    // here change the starting and ending icons
                                                                                    return L.marker(wp.latLng, {
                                                                                        icon: L.divIcon({
                                                                                            className: "location-pin",
                                                                                            html: markerType,
                                                                                            iconSize: [5, 5],
                                                                                            //iconAnchor: [18, 30]
                                                                                            iconAnchor: [5, 10],
                                                                                        }),
                                                                                        draggable: this.draggableWaypoints,
                                                                                    }).bindPopup(`
                                                                                        <div class="text-center"> 
                                                                                            <h5>${titikAwal}</h5>
                                                                                        </div> 
                                                                                    `);
                                                                                } else if (i === nWps - 1) {
                                                                                    return L.marker(wp.latLng, {
                                                                                        icon: L.divIcon({
                                                                                            className: "location-pin",
                                                                                            html: markerTypeEnd,
                                                                                            iconSize: [5, 5],
                                                                                            //iconAnchor: [18, 30]
                                                                                            iconAnchor: [5, 10],
                                                                                        }),
                                                                                        draggable: this.draggableWaypoints,
                                                                                    }).bindPopup(`
                                                                                        <div class="text-center"> 
                                                                                            <h5>${titikAkhir}</h5>
                                                                                        </div> 
                                                                                    `);
                                                                                } else {
                                                                                    // here change all the others
                                                                                    var options = {
                                                                                            draggable: this.draggableWaypoints,
                                                                                        },
                                                                                        marker = L.marker(wp.latLng, {
                                                                                            icon: L.divIcon({
                                                                                                className: "location-pin",
                                                                                                html: markerTypeOther,
                                                                                                iconSize: [5, 5],
                                                                                                //iconAnchor: [18, 30]
                                                                                                iconAnchor: [5, 10],
                                                                                            }),
                                                                                            draggable: this.draggableWaypoints,
                                                                                        });

                                                                                    return marker;
                                                                                }
                                                                            },
                                                                            // geocoder: L.Control.Geocoder.nominatim({})
                                                                        }).addTo(mapContainer);
                                                                        // mapContainer.addControl(routingJadwalRenpam2[`${i+1}${ii}`]);  
                                                                    } else {
                                                                        mapContainer.removeControl(routingJadwalRenpam2[`${i+1}${ii}`]);
                                                                    }
                                                                } else {
                                                                    console.log('error route  alternative 2');
                                                                }


                                                                if (dummyJadwalRenpamAlterrr[i + 1][ii] != null && dummyJadwalRenpamAlterrr[i + 1][ii].length > 0 && dummyJadwalRenpamAlterrr[i + 1][ii][0]['latLng'] != null) {

                                                                    if ($(this).is(':checked')) {
                                                                        routingJadwalRenpam3[`${i+1}${ii}`] = null;
                                                                        routingJadwalRenpam3[`${i+1}${ii}`] = L.Routing.control({
                                                                            show: false,
                                                                            draggableWaypoints: false,
                                                                            addWaypoints: false,
                                                                            waypoints: dummyJadwalRenpamAlterrr[i + 1][ii],
                                                                            router: new L.Routing.osrmv1({
                                                                                language: 'en',
                                                                                profile: 'car'
                                                                            }),
                                                                            lineOptions: {
                                                                                styles: [{
                                                                                    color: "#000dda",
                                                                                    weight: 5,
                                                                                    className: 'animateRoute'
                                                                                }]
                                                                            },
                                                                            createMarker: function(i, wp, nWps) {
                                                                                if (i === 0 || i === nWps + 1) {
                                                                                    // here change the starting and ending icons
                                                                                    return L.marker(wp.latLng, {
                                                                                        icon: L.divIcon({
                                                                                            className: "location-pin",
                                                                                            html: markerType,
                                                                                            iconSize: [5, 5],
                                                                                            //iconAnchor: [18, 30]
                                                                                            iconAnchor: [5, 10],
                                                                                        }),
                                                                                        draggable: this.draggableWaypoints,
                                                                                    }).bindPopup(`
                                                                                        <div class="text-center"> 
                                                                                            <h5>${titikAwal}</h5>
                                                                                        </div> 
                                                                                    `);
                                                                                } else if (i === nWps - 1) {
                                                                                    return L.marker(wp.latLng, {
                                                                                        icon: L.divIcon({
                                                                                            className: "location-pin",
                                                                                            html: markerTypeEnd,
                                                                                            iconSize: [5, 5],
                                                                                            //iconAnchor: [18, 30]
                                                                                            iconAnchor: [5, 10],
                                                                                        }),
                                                                                        draggable: this.draggableWaypoints,
                                                                                    }).bindPopup(`
                                                                                        <div class="text-center"> 
                                                                                            <h5>${titikAkhir}</h5>
                                                                                        </div> 
                                                                                    `);
                                                                                } else {
                                                                                    // here change all the others
                                                                                    var options = {
                                                                                            draggable: this.draggableWaypoints,
                                                                                        },
                                                                                        marker = L.marker(wp.latLng, {
                                                                                            icon: L.divIcon({
                                                                                                className: "location-pin",
                                                                                                html: markerTypeOther,
                                                                                                iconSize: [5, 5],
                                                                                                //iconAnchor: [18, 30]
                                                                                                iconAnchor: [5, 10],
                                                                                            }),
                                                                                            draggable: this.draggableWaypoints,
                                                                                        });

                                                                                    return marker;
                                                                                }
                                                                            },
                                                                            // geocoder: L.Control.Geocoder.nominatim({})
                                                                        }).addTo(mapContainer);
                                                                        // mapContainer.addControl(routingJadwalRenpam3[`${i+1}${ii}`]);  
                                                                    } else {
                                                                        mapContainer.removeControl(routingJadwalRenpam3[`${i+1}${ii}`]);
                                                                    }
                                                                } else {
                                                                    console.log('error route Masyarakat');
                                                                }


                                                                if (dummyJadwalRenpamAlterrrr[i + 1][ii] != null && dummyJadwalRenpamAlterrrr[i + 1][ii].length > 0 && dummyJadwalRenpamAlterrrr[i + 1][ii][0]['latLng'] != null) {

                                                                    if ($(this).is(':checked')) {
                                                                        routingJadwalRenpam4[`${i+1}${ii}`] = null;
                                                                        routingJadwalRenpam4[`${i+1}${ii}`] = L.Routing.control({
                                                                            show: false,
                                                                            draggableWaypoints: false,
                                                                            addWaypoints: false,
                                                                            waypoints: dummyJadwalRenpamAlterrrr[i + 1][ii],
                                                                            router: new L.Routing.osrmv1({
                                                                                language: 'en',
                                                                                profile: 'car'
                                                                            }),
                                                                            lineOptions: {
                                                                                styles: [{
                                                                                    color: "#bdbd0b",
                                                                                    weight: 5,
                                                                                    className: 'animateRoute'
                                                                                }]
                                                                            },
                                                                            createMarker: function(i, wp, nWps) {
                                                                                if (i === 0 || i === nWps + 1) {
                                                                                    // here change the starting and ending icons
                                                                                    return L.marker(wp.latLng, {
                                                                                        icon: L.divIcon({
                                                                                            className: "location-pin",
                                                                                            html: markerType,
                                                                                            iconSize: [5, 5],
                                                                                            //iconAnchor: [18, 30]
                                                                                            iconAnchor: [5, 10],
                                                                                        }),
                                                                                        draggable: this.draggableWaypoints,
                                                                                    }).bindPopup(`
                                                                                        <div class="text-center"> 
                                                                                            <h5>${titikAwal}</h5>
                                                                                        </div> 
                                                                                    `);
                                                                                } else if (i === nWps - 1) {
                                                                                    return L.marker(wp.latLng, {
                                                                                        icon: L.divIcon({
                                                                                            className: "location-pin",
                                                                                            html: markerTypeEnd,
                                                                                            iconSize: [5, 5],
                                                                                            //iconAnchor: [18, 30]
                                                                                            iconAnchor: [5, 10],
                                                                                        }),
                                                                                        draggable: this.draggableWaypoints,
                                                                                    }).bindPopup(`
                                                                                        <div class="text-center"> 
                                                                                            <h5>${titikAkhir}</h5>
                                                                                        </div> 
                                                                                    `);
                                                                                } else {
                                                                                    // here change all the others
                                                                                    var options = {
                                                                                            draggable: this.draggableWaypoints,
                                                                                        },
                                                                                        marker = L.marker(wp.latLng, {
                                                                                            icon: L.divIcon({
                                                                                                className: "location-pin",
                                                                                                html: markerTypeOther,
                                                                                                iconSize: [5, 5],
                                                                                                //iconAnchor: [18, 30]
                                                                                                iconAnchor: [5, 10],
                                                                                            }),
                                                                                            draggable: this.draggableWaypoints,
                                                                                        });

                                                                                    return marker;
                                                                                }
                                                                            },
                                                                            // geocoder: L.Control.Geocoder.nominatim({})
                                                                        }).addTo(mapContainer);
                                                                        // mapContainer.addControl(routingJadwalRenpam4[`${i+1}${ii}`]);  
                                                                    } else {
                                                                        mapContainer.removeControl(routingJadwalRenpam4[`${i+1}${ii}`]);
                                                                    }
                                                                } else {
                                                                    console.log('error route Umum');
                                                                }




                                                            }


                                                        });

                                                        $(`#listJadwalClick${ress[m]['id']}${i+1}`).click(function() {
                                                            var latlong = $(this).data('cord').split(',');
                                                            var latitude = parseFloat(latlong[0]);
                                                            var longitude = parseFloat(latlong[1]);
                                                            mapContainer.flyTo([latitude, longitude], 17);
                                                        });

                                                        $(`#datatableByCateg${ress[m]['id']}${i+1}`).DataTable({
                                                            responsive: true,

                                                            scrollX: true,

                                                            // sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

                                                            // buttons: ["excel", "csv", "pdf"],
                                                            processing: true,
                                                            oLanguage: {

                                                                sSearch: 'Search:'

                                                            },
                                                        });
                                                    }

                                                }
                                            });
                                            // }
                                        });
                                    }



                                    $(`#openUraianNonKegiatan`).on('click', function(e) {
                                        $.ajax({
                                            type: "POST",
                                            url: "<?php echo base_url(); ?>dashboard/getRenpam",
                                            data: {
                                                "status": '1',
                                                "schedule_id": 'null',
                                            },
                                            dataType: "JSON",
                                            success: function(result) {
                                                var ress = result['data'];
                                                var listNonRenpam = '';
                                                var countlistNonRenpam = 0;
                                                var checkedNonRenpam = [];


                                                $('#totalUraianNonKegiatan').html(ress.length);

                                                ress.forEach(el => {
                                                    countlistNonRenpam += 1;
                                                    var dataNonRenpamVIP = '';

                                                    var dataNonRenpamAccounts;
                                                    if (el.accounts.length > 0) {
                                                        dataNonRenpamAccounts = el.accounts;
                                                    } else {
                                                        dataNonRenpamAccounts = [];
                                                    }
                                                    if (el.vips.length > 0) {
                                                        for (let ii = 0; ii < el.vips.length; ii++) {
                                                            dataNonRenpamVIP += `${el.vips[ii]['name_vip']} - (${el.vips[ii]['country_arrival_vip']}),`;
                                                        }
                                                    } else {
                                                        dataNonRenpamVIP = '-';
                                                    }

                                                    checkedNonRenpam.push({
                                                        name_renpam: el.name_renpam,
                                                        checked: 0,
                                                    });

                                                    listNonRenpam += `
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" class="form-input" name="selectRenpam" 
                                                            id="listNonRenpamModalClick${countlistNonRenpam}"  
                                                            data-name="${el.name_renpam}" 
                                                            data-cord='${JSON.stringify(el.route)}' 
                                                            data-cord1='${JSON.stringify(el.route_alternatif_1)}' 
                                                            data-cord2='${JSON.stringify(el.route_alternatif_2)}' 
                                                            data-cord3='${JSON.stringify(el.route_masyarakat)}' 
                                                            data-cord4='${JSON.stringify(el.route_umum)}' 
                                                            data-type="${el.type_renpam}" 
                                                            data-warna="${el.warnaRoute_renpam}" 
                                                            data-jadwal="${el.schedule != null ? el.schedule.activity : '' }"
                                                            data-awal="${el.title_start}" 
                                                            data-akhir="${el.title_end}"> 
                                                        </td>
                                                        <td>${countlistNonRenpam}</td> 
                                                        <td>${dataNonRenpamVIP}</td>
                                                        <td><a href="<?= base_url() ?>operasi/Renpam/edit/${el.id}" target="_blank">${el.title_start} Ke ${el.title_end}</a></td>
                                                        <td>${el.start_time != null ? el.start_time.substr(0, 5) : '-'}</td> 
                                                        <td>
                                                            <div>
                                                                <a class="btn" 
                                                                    data-accounts='${JSON.stringify(dataNonRenpamAccounts)}'
                                                                    title="Petugas" data-bs-toggle="modal" data-bs-target="#myModalPetugas"
                                                                    href="javascript:void(0)">
                                                                    <i style="color: #495057;" class="fa fas fa-user-shield"></i>
                                                                </a>
                                                    
                                                            </div>
                                                        </td>
                                                        <td> 
                                                            <a class="btn" href="javascripte:void(0);"
                                                                style="font-size: 16px;"  
                                                                data-idnote="${el.id}" 
                                                                data-note="${el.note_kakor}"
                                                                data-status="${el.status_renpam}"
                                                                data-accounts='${JSON.stringify(dataNonRenpamAccounts)}'
                                                                title="Catatan Uraian Kegiatan" data-bs-toggle="modal" data-bs-target="#myModalNoteKakor">
                                                                <i style="color: #495057;" class="mdi mdi-beaker-plus-outline"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                `;
                                                    $("#listUraianNonKegiatan").html(listNonRenpam);
                                                });


                                                for (let i = 0; i < countlistNonRenpam; i++) {
                                                    $(`#listNonRenpamModalClick${i+1}`).on("change", function(e) {
                                                        console.log(checkedNonRenpam);
                                                        //Find index of specific object using findIndex method.    
                                                        objIndex = checkedNonRenpam.findIndex((obj => obj.name_renpam == $(this).data('name')));
                                                        // console.log(objIndex);

                                                        //Log object to Console.
                                                        console.log("Before update: ", checkedNonRenpam[objIndex]);

                                                        //Update object's name property.
                                                        if ($(this).is(':checked')) {
                                                            checkedNonRenpam[objIndex].checked = 1;
                                                        } else {
                                                            checkedNonRenpam[objIndex].checked = 0;
                                                        }

                                                        //Log object to console again.
                                                        // console.log("After update: ", checkedNonRenpam[objIndex]);

                                                        var titikAwal = $(this).data('awal') == null ? '-' : $(this).data('awal');
                                                        var titikAkhir = $(this).data('akhir') == null ? '-' : $(this).data('akhir');

                                                        var warna = "";
                                                        if ($(this).data('jadwal') == "JALUR BEAT") {
                                                            warna = $(this).data('warna') == "" ? 'red' : $(this).data('warna');
                                                        } else {
                                                            warna = "red";
                                                        }

                                                        var typeRenpam = $(this).data('type');
                                                        if (typeRenpam == 3) { //penjagaan
                                                            iconMarkerRenpam = `https://cdn-icons-png.flaticon.com/512/1323/1323306.png`;
                                                            markerType = `<img src="${iconMarkerRenpam}"><div class="pin"></div><div class="pulse"></div>`;
                                                            markerTypeOther = `<img src="${iconMarkerRenpam}"><div class="pin" style="background: gray;"></div><div class="pulse"></div>`;
                                                            markerTypeEnd = `<img src="${iconMarkerRenpam}"><div class="pin" style="background: green;"></div><div class="pulse"></div>`;
                                                            styleRouteUtama = [{
                                                                color: warna,
                                                                weight: 5,
                                                                className: 'animateRoute'
                                                            }];
                                                        } else if (typeRenpam == 4) { //pengaturan 
                                                            iconMarkerRenpam = `https://cdn-icons-png.flaticon.com/512/196/196781.png`;
                                                            markerType = `<img src="${iconMarkerRenpam}"><div class="pin"></div><div class="pulse"></div>`;
                                                            markerTypeOther = `<img src="${iconMarkerRenpam}"><div class="pin" style="background: gray;"></div><div class="pulse"></div>`;
                                                            markerTypeEnd = `<img src="${iconMarkerRenpam}"><div class="pin" ></div><div class="pulse"></div>`;
                                                            styleRouteUtama = [{
                                                                color: warna,
                                                                weight: 5,
                                                                className: 'animateRoute'
                                                            }];
                                                        } else if (typeRenpam == 5) { //penutupan 
                                                            iconMarkerRenpam = `https://cdn-icons-png.flaticon.com/512/196/196764.png`;
                                                            markerType = `<img src="${iconMarkerRenpam}"><div class="pin"></div><div class="pulse"></div>`;
                                                            markerTypeOther = `<img src="${iconMarkerRenpam}"><div class="pin" style="background: gray;"></div><div class="pulse"></div>`;
                                                            markerTypeEnd = `<img src="${iconMarkerRenpam}"><div class="pin" ></div><div class="pulse"></div>`;
                                                            styleRouteUtama = [{
                                                                color: warna,
                                                                weight: 5
                                                            }];
                                                        } else if (typeRenpam == 1) {
                                                            iconMarkerRenpam = ``;
                                                            markerType = `<div class="pin" style="background: yellow;"><div style="transform: rotate(45deg);margin-left: 5px;margin-top: 10px;font-size: 14px;">${namaRen.substr(-2)}</div></div><div class="pulse"></div>`;
                                                            markerTypeOther = `<div class="pin" style="background: gray; display: none;"><div style="transform: rotate(45deg);margin-left: 5px;margin-top: 10px;font-size: 14px;">${namaRen.substr(-2)}</div></div><div class="pulse"></div>`;
                                                            markerTypeEnd = `<div class="pin" style="display: none;background: yellow;"><div style="display: none;transform: rotate(45deg);margin-left: 5px;margin-top: 10px;font-size: 14px;">${namaRen.substr(-2)}</div></div><div class="pulse"></div>`;
                                                            styleRouteUtama = [{
                                                                color: warna,
                                                                weight: 5
                                                            }];
                                                        } else {
                                                            iconMarkerRenpam = `https://cdn-icons-png.flaticon.com/512/178/178753.png`;
                                                            markerType = `<img style=" display: none;" src="${iconMarkerRenpam}"><div class="pin" style=" display: none;"></div><div class="pulse"></div>`;
                                                            markerTypeOther = `<img style=" display: none;" src="${iconMarkerRenpam}"><div class="pin" style="background: gray; display: none;"></div><div class="pulse"></div>`;
                                                            markerTypeEnd = `<img style=" display: none;" src="${iconMarkerRenpam}"><div class="pin" style="background: green; display: none;"></div><div class="pulse"></div>`;
                                                            styleRouteUtama = [{
                                                                color: warna,
                                                                weight: 5,
                                                                className: 'animateRoute'
                                                            }];
                                                        }

                                                        var cordRute1 = $(this).data('cord1');
                                                        if (cordRute1 != null && cordRute1[0]['latLng'] != null) {
                                                            if ($(this).is(':checked')) {
                                                                routingRenpam1[i] = null;
                                                                routingRenpam1[i] = L.Routing.control({
                                                                    show: false,
                                                                    draggableWaypoints: false,
                                                                    addWaypoints: false,
                                                                    waypoints: cordRute1,
                                                                    router: new L.Routing.osrmv1({
                                                                        language: 'en',
                                                                        profile: 'car'
                                                                    }),
                                                                    lineOptions: {
                                                                        styles: [{
                                                                            color: "#b935b9",
                                                                            weight: 5,
                                                                            className: 'animateRoute'
                                                                        }]
                                                                    },
                                                                    createMarker: function(i, wp, nWps) {
                                                                        if (i === 0 || i === nWps + 1) {
                                                                            // here change the starting and ending icons
                                                                            return L.marker(wp.latLng, {
                                                                                icon: L.divIcon({
                                                                                    className: "location-pin",
                                                                                    html: markerType,
                                                                                    iconSize: [5, 5],
                                                                                    //iconAnchor: [18, 30]
                                                                                    iconAnchor: [5, 10],
                                                                                }),
                                                                                draggable: this.draggableWaypoints,
                                                                            }).bindPopup(`
                                                                            <div class="text-center"> 
                                                                                <h5>${titikAwal}</h5>
                                                                            </div> 
                                                                        `);
                                                                        } else if (i === nWps - 1) {
                                                                            return L.marker(wp.latLng, {
                                                                                icon: L.divIcon({
                                                                                    className: "location-pin",
                                                                                    html: markerTypeEnd,
                                                                                    iconSize: [5, 5],
                                                                                    //iconAnchor: [18, 30]
                                                                                    iconAnchor: [5, 10],
                                                                                }),
                                                                                draggable: this.draggableWaypoints,
                                                                            }).bindPopup(`
                                                                            <div class="text-center"> 
                                                                                <h5>${titikAkhir}</h5>
                                                                            </div> 
                                                                        `);
                                                                        } else {
                                                                            // here change all the others
                                                                            var options = {
                                                                                    draggable: this.draggableWaypoints,
                                                                                },
                                                                                marker = L.marker(wp.latLng, {
                                                                                    icon: L.divIcon({
                                                                                        className: "location-pin",
                                                                                        html: markerTypeOther,
                                                                                        iconSize: [5, 5],
                                                                                        //iconAnchor: [18, 30]
                                                                                        iconAnchor: [5, 10],
                                                                                    }),
                                                                                    draggable: this.draggableWaypoints,
                                                                                });

                                                                            return marker;
                                                                        }
                                                                    },
                                                                    // geocoder: L.Control.Geocoder.nominatim({})
                                                                }).addTo(mapContainer);
                                                                // mapContainer.addControl(routingRenpam1[i]); 
                                                            } else {
                                                                mapContainer.removeControl(routingRenpam1[i]);
                                                            }


                                                        } else {}

                                                        var cordRute2 = $(this).data('cord2');
                                                        if (cordRute2 != null && cordRute2[0]['latLng'] != null) {
                                                            if ($(this).is(':checked')) {
                                                                routingRenpam2[i] = null;
                                                                routingRenpam2[i] = L.Routing.control({
                                                                    show: false,
                                                                    draggableWaypoints: false,
                                                                    addWaypoints: false,
                                                                    waypoints: cordRute2,
                                                                    router: new L.Routing.osrmv1({
                                                                        language: 'en',
                                                                        profile: 'car'
                                                                    }),
                                                                    lineOptions: {
                                                                        styles: [{
                                                                            color: "#808080",
                                                                            weight: 5,
                                                                            className: 'animateRoute'
                                                                        }]
                                                                    },
                                                                    createMarker: function(i, wp, nWps) {
                                                                        if (i === 0 || i === nWps + 1) {
                                                                            // here change the starting and ending icons
                                                                            return L.marker(wp.latLng, {
                                                                                icon: L.divIcon({
                                                                                    className: "location-pin",
                                                                                    html: markerType,
                                                                                    iconSize: [5, 5],
                                                                                    //iconAnchor: [18, 30]
                                                                                    iconAnchor: [5, 10],
                                                                                }),
                                                                                draggable: this.draggableWaypoints,
                                                                            }).bindPopup(`
                                                                            <div class="text-center"> 
                                                                                <h5>${titikAwal}</h5>
                                                                            </div> 
                                                                        `);
                                                                        } else if (i === nWps - 1) {
                                                                            return L.marker(wp.latLng, {
                                                                                icon: L.divIcon({
                                                                                    className: "location-pin",
                                                                                    html: markerTypeEnd,
                                                                                    iconSize: [5, 5],
                                                                                    //iconAnchor: [18, 30]
                                                                                    iconAnchor: [5, 10],
                                                                                }),
                                                                                draggable: this.draggableWaypoints,
                                                                            }).bindPopup(`
                                                                            <div class="text-center"> 
                                                                                <h5>${titikAkhir}</h5>
                                                                            </div> 
                                                                        `);
                                                                        } else {
                                                                            // here change all the others
                                                                            var options = {
                                                                                    draggable: this.draggableWaypoints,
                                                                                },
                                                                                marker = L.marker(wp.latLng, {
                                                                                    icon: L.divIcon({
                                                                                        className: "location-pin",
                                                                                        html: markerTypeOther,
                                                                                        iconSize: [5, 5],
                                                                                        //iconAnchor: [18, 30]
                                                                                        iconAnchor: [5, 10],
                                                                                    }),
                                                                                    draggable: this.draggableWaypoints,
                                                                                });

                                                                            return marker;
                                                                        }
                                                                    },
                                                                    // geocoder: L.Control.Geocoder.nominatim({})
                                                                }).addTo(mapContainer);
                                                                // mapContainer.addControl(routingRenpam2[i]); 
                                                            } else {
                                                                mapContainer.removeControl(routingRenpam2[i]);
                                                            }


                                                        } else {}

                                                        var cordRute3 = $(this).data('cord3');
                                                        if (cordRute3 != null && cordRute3[0]['latLng'] != null) {
                                                            if ($(this).is(':checked')) {
                                                                routingRenpam3[i] = null;
                                                                routingRenpam3[i] = L.Routing.control({
                                                                    show: false,
                                                                    draggableWaypoints: false,
                                                                    addWaypoints: false,
                                                                    waypoints: cordRute3,
                                                                    router: new L.Routing.osrmv1({
                                                                        language: 'en',
                                                                        profile: 'car'
                                                                    }),
                                                                    lineOptions: {
                                                                        styles: [{
                                                                            color: "#000dda",
                                                                            weight: 5,
                                                                            className: 'animateRoute'
                                                                        }]
                                                                    },
                                                                    createMarker: function(i, wp, nWps) {
                                                                        if (i === 0 || i === nWps + 1) {
                                                                            // here change the starting and ending icons
                                                                            return L.marker(wp.latLng, {
                                                                                icon: L.divIcon({
                                                                                    className: "location-pin",
                                                                                    html: markerType,
                                                                                    iconSize: [5, 5],
                                                                                    //iconAnchor: [18, 30]
                                                                                    iconAnchor: [5, 10],
                                                                                }),
                                                                                draggable: this.draggableWaypoints,
                                                                            }).bindPopup(`
                                                                            <div class="text-center"> 
                                                                                <h5>${titikAwal}</h5>
                                                                            </div> 
                                                                        `);
                                                                        } else if (i === nWps - 1) {
                                                                            return L.marker(wp.latLng, {
                                                                                icon: L.divIcon({
                                                                                    className: "location-pin",
                                                                                    html: markerTypeEnd,
                                                                                    iconSize: [5, 5],
                                                                                    //iconAnchor: [18, 30]
                                                                                    iconAnchor: [5, 10],
                                                                                }),
                                                                                draggable: this.draggableWaypoints,
                                                                            }).bindPopup(`
                                                                            <div class="text-center"> 
                                                                                <h5>${titikAkhir}</h5>
                                                                            </div> 
                                                                        `);
                                                                        } else {
                                                                            // here change all the others
                                                                            var options = {
                                                                                    draggable: this.draggableWaypoints,
                                                                                },
                                                                                marker = L.marker(wp.latLng, {
                                                                                    icon: L.divIcon({
                                                                                        className: "location-pin",
                                                                                        html: markerTypeOther,
                                                                                        iconSize: [5, 5],
                                                                                        //iconAnchor: [18, 30]
                                                                                        iconAnchor: [5, 10],
                                                                                    }),
                                                                                    draggable: this.draggableWaypoints,
                                                                                });

                                                                            return marker;
                                                                        }
                                                                    },
                                                                    // geocoder: L.Control.Geocoder.nominatim({})
                                                                }).addTo(mapContainer);
                                                                // mapContainer.addControl(routingRenpam3[i]); 
                                                            } else {
                                                                mapContainer.removeControl(routingRenpam3[i]);
                                                            }


                                                        } else {}

                                                        var cordRute4 = $(this).data('cord4');
                                                        if (cordRute4 != null && cordRute4[0]['latLng'] != null) {
                                                            if ($(this).is(':checked')) {
                                                                routingRenpam4[i] = null;
                                                                routingRenpam4[i] = L.Routing.control({
                                                                    show: false,
                                                                    draggableWaypoints: false,
                                                                    addWaypoints: false,
                                                                    waypoints: cordRute4,
                                                                    router: new L.Routing.osrmv1({
                                                                        language: 'en',
                                                                        profile: 'car'
                                                                    }),
                                                                    lineOptions: {
                                                                        styles: [{
                                                                            color: "#bdbd0b",
                                                                            weight: 5,
                                                                            className: 'animateRoute'
                                                                        }]
                                                                    },
                                                                    createMarker: function(i, wp, nWps) {
                                                                        if (i === 0 || i === nWps + 1) {
                                                                            // here change the starting and ending icons
                                                                            return L.marker(wp.latLng, {
                                                                                icon: L.divIcon({
                                                                                    className: "location-pin",
                                                                                    html: markerType,
                                                                                    iconSize: [5, 5],
                                                                                    //iconAnchor: [18, 30]
                                                                                    iconAnchor: [5, 10],
                                                                                }),
                                                                                draggable: this.draggableWaypoints,
                                                                            }).bindPopup(`
                                                                            <div class="text-center"> 
                                                                                <h5>${titikAwal}</h5>
                                                                            </div> 
                                                                        `);
                                                                        } else if (i === nWps - 1) {
                                                                            return L.marker(wp.latLng, {
                                                                                icon: L.divIcon({
                                                                                    className: "location-pin",
                                                                                    html: markerTypeEnd,
                                                                                    iconSize: [5, 5],
                                                                                    //iconAnchor: [18, 30]
                                                                                    iconAnchor: [5, 10],
                                                                                }),
                                                                                draggable: this.draggableWaypoints,
                                                                            }).bindPopup(`
                                                                            <div class="text-center"> 
                                                                                <h5>${titikAkhir}</h5>
                                                                            </div> 
                                                                        `);
                                                                        } else {
                                                                            // here change all the others
                                                                            var options = {
                                                                                    draggable: this.draggableWaypoints,
                                                                                },
                                                                                marker = L.marker(wp.latLng, {
                                                                                    icon: L.divIcon({
                                                                                        className: "location-pin",
                                                                                        html: markerTypeOther,
                                                                                        iconSize: [5, 5],
                                                                                        //iconAnchor: [18, 30]
                                                                                        iconAnchor: [5, 10],
                                                                                    }),
                                                                                    draggable: this.draggableWaypoints,
                                                                                });

                                                                            return marker;
                                                                        }
                                                                    },
                                                                    // geocoder: L.Control.Geocoder.nominatim({})
                                                                }).addTo(mapContainer);
                                                                // mapContainer.addControl(routingRenpam4[i]); 
                                                            } else {
                                                                mapContainer.removeControl(routingRenpam4[i]);
                                                            }


                                                        } else {}

                                                        var cordRuteUtama = $(this).data('cord');
                                                        if (cordRuteUtama != null && cordRuteUtama[0]['latLng'] != null) {
                                                            if ($(this).is(':checked')) {
                                                                routingRenpam[i] = null;
                                                                routingRenpam[i] = L.Routing.control({
                                                                    show: false,
                                                                    draggableWaypoints: false,
                                                                    addWaypoints: false,
                                                                    waypoints: cordRuteUtama,
                                                                    router: new L.Routing.osrmv1({
                                                                        language: 'en',
                                                                        profile: 'car'
                                                                    }),
                                                                    lineOptions: {
                                                                        styles: styleRouteUtama
                                                                    },
                                                                    createMarker: function(i, wp, nWps) {
                                                                        if (i === 0 || i === nWps + 1) {
                                                                            // here change the starting and ending icons
                                                                            return L.marker(wp.latLng, {
                                                                                icon: L.divIcon({
                                                                                    className: "location-pin",
                                                                                    html: markerType,
                                                                                    iconSize: [5, 5],
                                                                                    //iconAnchor: [18, 30]
                                                                                    iconAnchor: [5, 10],
                                                                                }),
                                                                                draggable: this.draggableWaypoints,
                                                                            }).bindPopup(`
                                                                            <div class="text-center"> 
                                                                                <h5>${titikAwal}</h5>
                                                                            </div> 
                                                                        `);
                                                                        } else if (i === nWps - 1) {
                                                                            return L.marker(wp.latLng, {
                                                                                icon: L.divIcon({
                                                                                    className: "location-pin",
                                                                                    html: markerTypeEnd,
                                                                                    iconSize: [5, 5],
                                                                                    //iconAnchor: [18, 30]
                                                                                    iconAnchor: [5, 10],
                                                                                }),
                                                                                draggable: this.draggableWaypoints,
                                                                            }).bindPopup(`
                                                                            <div class="text-center"> 
                                                                                <h5>${titikAkhir}</h5>
                                                                            </div> 
                                                                        `);
                                                                        } else {
                                                                            // here change all the others
                                                                            var options = {
                                                                                    draggable: this.draggableWaypoints,
                                                                                },
                                                                                marker = L.marker(wp.latLng, {
                                                                                    icon: L.divIcon({
                                                                                        className: "location-pin",
                                                                                        html: markerTypeOther,
                                                                                        iconSize: [5, 5],
                                                                                        //iconAnchor: [18, 30]
                                                                                        iconAnchor: [5, 10],
                                                                                    }),
                                                                                    draggable: this.draggableWaypoints,
                                                                                });

                                                                            return marker;
                                                                        }
                                                                    },
                                                                    // geocoder: L.Control.Geocoder.nominatim({})
                                                                }).addTo(mapContainer);
                                                                // mapContainer.addControl(routingRenpam[i]); 
                                                            } else {
                                                                mapContainer.removeControl(routingRenpam[i]);
                                                            }


                                                        } else {}
                                                    });
                                                }
                                            }
                                        });
                                    });

                                    function clickJadwalRenpam() {
                                        alert('ido');
                                    }
                                }
                            });


                        }
                    });





                    $('#myModalPetugas').on('shown.bs.modal', function(event) {
                        var myAccounts = $(event.relatedTarget).data('accounts');
                        var modal = $(this);

                        // console.log(myAccounts);
                        $("#overlay").fadeIn(300);


                        var isiTable = '';
                        if (myAccounts.length > 0) {
                            for (let i = 0; i < myAccounts.length; i++) {
                                $.ajax({
                                    type: "POST",
                                    url: "<?php echo base_url(); ?>dashboard/getAkunId",
                                    data: {
                                        "id": myAccounts[i]['id'],
                                    },
                                    dataType: "JSON",
                                    success: function(result) {
                                        var ress = result['data'];
                                        // console.log({a:'get akun Id', b:ress['officers']});
                                        var getIdTracking = '';
                                        for (let ii = 0; ii < ress['officers'].length; ii++) {
                                            $.ajax({
                                                type: "POST",
                                                url: "<?php echo base_url(); ?>dashboard/getTrackingName",
                                                data: {
                                                    "name_officer": ress['officers'][ii]['name_officer'],
                                                },
                                                dataType: "JSON",
                                                success: function(result1) {
                                                    // console.log(result1);
                                                    if (result1['data'] != null) {
                                                        var trackPetugas = result1['data'];
                                                        getIdTracking = `
                                                        <a class="btn" style="margin-top: -10px;" 
                                                            id="listPetugasClickModal${trackPetugas['nrp_user']}"    
                                                            data-nama="${trackPetugas['name_team']}"  
                                                            data-akun="${trackPetugas['name_account']}" 
                                                            data-nrp="${trackPetugas['nrp_user']}"
                                                            data-telp="${trackPetugas['handphone']}"
                                                            data-cord="${trackPetugas['latitude']},${trackPetugas['longitude']}" 
                                                            href="javascript:void(0)">
                                                            <i style="color: #495057;" class="fa fas fa-eye"></i>
                                                        </a> 
                                                    `;
                                                        console.log('ada');
                                                    } else {
                                                        getIdTracking = `<div style="margin-top: -10px;"></div>`;
                                                        console.log('ga ada');
                                                    }


                                                    isiTable += `
                                                    <tr>
                                                        <td>${ii+1}</td>
                                                        <td>${ress['officers'][ii]['rank_officer']}</td>
                                                        <td>${ress['officers'][ii]['name_officer']}</td>
                                                        <td>${ress['officers'][ii]['nrp_officer']}</td>
                                                        <td>
                                                            ${getIdTracking}
                                                            <a class="btn" style="margin-top: -13px; color: #495057;" href="https://api.whatsapp.com/send?phone=${ress['officers'][ii]['phone_officer']}" target="_blank"><i class="fa fas fa-phone "></i></a>  
                                                            <a class="btn" style="margin-left: -13px;margin-top: -7px; color: #495057;" onClick="sendZoom('${ress['officers'][ii]['id']}')" href="<?php echo base_url('zoom'); ?>" target="_blank"><i class="fa  fas fa-video "></i></a> 
                                                        </td>
                                                    </tr>
                                                `;
                                                    $("#isiModalPetugas").html(`
                                                    <table id="datatablePetugas" class="table dt-responsive w-100">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Pangkat</th>
                                                                <th>Nama</th>
                                                                <th>NRP</th>
                                                                <th></th> 
                                                            </tr>
                                                        </thead> 
                                                        <tbody>
                                                            ${isiTable}
                                                        </tbody>
                                                    </table>
                                                `);

                                                    for (let x = 0; x < ress['officers'].length; x++) {
                                                        $(`#listPetugasClickModal${ress['officers'][x]['nrp_officer']}`).on("click", function(e) {
                                                            var latlong = $(this).data('cord').split(',');
                                                            var latitude = parseFloat(latlong[0]);
                                                            var longitude = parseFloat(latlong[1]);
                                                            $("#myModalPetugas").modal('hide');
                                                            mapContainer.flyTo([latitude, longitude], 17);
                                                        });
                                                    }


                                                }
                                            });

                                        }

                                    }
                                });
                            }
                            $("#overlay").fadeOut(300);




                        } else {
                            $("#isiModalPetugas").html(`
                            <table id="datatablePetugas" class="table dt-responsive w-100">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Pangkat</th>
                                        <th>Nama</th>
                                        <th>NRP</th>
                                        <th></th> 
                                    </tr>
                                </thead> 
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        `);
                        }

                    });


                    var checkedRenpam = [];
                    var openModalFilter = false;

                    function getRenpam() {
                        let countlist = 0;
                        let list = "";
                        var data = [];

                        $.ajax({
                            type: "POST",
                            url: "<?php echo base_url(); ?>dashboard/getRenpam",
                            data: {
                                "status": '1',
                                // "search" : $('#searchRenpam').val(),
                                // "type" : $('#filterTypeRenpam').val(),
                                "schedule_id": 'notNull',
                                // "page": $('[name=halaman]').val(),
                            },
                            dataType: "JSON",
                            success: function(result) {
                                let ress = result['data'];
                                // console.log(ress);
                                countlist = 0;
                                list = "";
                                var status = "";
                                var route = [];
                                var route1 = [];
                                var route2 = [];
                                var route3 = [];
                                var route4 = [];


                                if (ress.length > 0) {


                                    openModalFilter = true;
                                    $("#totalRenpamOn").html(`${ress.length}`);
                                    ress.forEach(el => {
                                        route.push(el.route);
                                        route1.push(el.route_alternatif_1);
                                        route2.push(el.route_alternatif_2);
                                        route3.push(el.route_masyarakat);
                                        route4.push(el.route_umum);

                                        checkedRenpam.push({
                                            name_renpam: el.name_renpam,
                                            checked: 0,
                                        });

                                        if (el.status_renpam == 1) {
                                            status = `
                                        <a href="<?php echo base_url() ?>operasi/renpam/edit/${el.id}" target="_blank">
                                            <div class="rounded-circle m-auto" style="background:green; height:15px ; width:15px"></div>
                                        </a>`;
                                        } else {
                                            status = `
                                        <a href="<?php echo base_url() ?>operasi/renpam/edit/${el.id}" target="_blank">
                                            <div class="rounded-circle m-auto" style="background:red; height:15px ; width:15px"></div>
                                        </a>
                                        `;
                                        }


                                        var cariIndex = checkedRenpam.findIndex((obj => obj.checked == 1));
                                        if (cariIndex) {

                                        }

                                        countlist += 1;
                                        list += `<li class="list-group-item text-start" style="display: flex;">
                                        <div class="row">
                                            <div class="col-md-2" style="display: flex;align-items: center;">
                                                ${status}
                                            </div>
                                            <div class="col-md-7">
                                                ${el.name_renpam}
                                            </div>
                                            <div class="col-md-3" style="display: flex;align-items: center;">
                                                <a class="btn" href="javascripte:void(0);"
                                                style="font-size: 16px;"  
                                                data-idnote="${el.id}" 
                                                data-note="${el.note_kakor}"
                                                data-accounts='${JSON.stringify(el.accounts)}'
                                                title="Catatan Uraian Kegiatan" data-bs-toggle="modal" data-bs-target="#myModalNoteKakor">
                                                    <i style="color: #495057;" class="mdi mdi-beaker-plus-outline"></i>
                                                </a>
                                                <input type="checkbox" class="form-input" name="selectRenpam" id="listRenpamClick${countlist}" data-jadwal="${el.schedule != null ? el.schedule.activity : '' }" data-warna="${el.warnaRoute_renpam}"  data-name="${el.name_renpam}" data-cord=${JSON.stringify(el.route)} data-type="${el.type_renpam}" data-awal="${el.title_start}" data-akhir="${el.title_end}">
                                            </div>
                                        </div>
                                    </li>`;
                                        $('#listRenpam').html(list);
                                    });

                                    $("#overlay").fadeOut(300);

                                    // $(function(){
                                    //     var getListItem = function() {
                                    //         var items = listWidget.element().find(".dx-list-item");
                                    //         var focusedItem = items.filter(".dx-state-focused").removeClass("dx-state-focused");
                                    //         return focusedItem.length && focusedItem || items.first();
                                    //     };

                                    //     var listWidget = $("#listRenpam").dxList({
                                    //         dataSource: ress,
                                    //         height: 400,
                                    //         searchEnabled: true,
                                    //         searchExpr: "name_renpam",
                                    //         searchEditorOptions: {
                                    //             onInitialized: function(e) {
                                    //                 var search = e.component;

                                    //                 search.on("valueChanged", function() {
                                    //                     clearTimeout(search.timeoutID);
                                    //                     search.timeoutID = setTimeout(function() {
                                    //                         getListItem().addClass("dx-state-focused");
                                    //                     }); 
                                    //                 });

                                    //                 search.registerKeyHandler("upArrow", function() {
                                    //                     getListItem().removeClass("dx-state-focused").prev().addClass("dx-state-focused");
                                    //                 });
                                    //                 search.registerKeyHandler("downArrow", function() {
                                    //                     getListItem().removeClass("dx-state-focused").next().addClass("dx-state-focused");
                                    //                 });
                                    //             },
                                    //             onDisposing: function(e) {
                                    //                 clearTimeout(e.component.timeoutID);
                                    //             }
                                    //         },
                                    //         itemTemplate: function(data) {
                                    //             var countList = 0;  
                                    //             console.log(countList + 1);

                                    //             if(data.status_renpam == 1){
                                    //                 status = `
                                    //                 <div>
                                    //                     <div class="rounded-circle m-auto" style="background:green; height:15px ; width:15px"></div>
                                    //                 </div>`;
                                    //             }else{
                                    //                 status = `
                                    //                 <div>
                                    //                     <div class="rounded-circle m-auto" style="background:red; height:15px ; width:15px"></div>
                                    //                 </div>
                                    //                 `;
                                    //             }
                                    //             var dummyList = ` 
                                    //                     <div class="row">
                                    //                         <div class="col-md-2" style="display: flex;align-items: center;">
                                    //                             ${status}
                                    //                         </div>
                                    //                         <div class="col-md-7">
                                    //                             ${data.name_renpam}
                                    //                         </div>
                                    //                         <div class="col-md-3" style="display: flex;align-items: center;">
                                    //                             <a class="btn" href="javascripte:void(0);"
                                    //                             style="font-size: 16px;"  
                                    //                             data-idnote="${data.id}" 
                                    //                             data-note="${data.note_kakor}"
                                    //                             title="Catatan Uraian Kegiatan" data-bs-toggle="modal" data-bs-target="#myModalNoteKakor">
                                    //                                 <i style="color: #495057;" class="mdi mdi-beaker-plus-outline"></i>
                                    //                             </a>
                                    //                             <input type="checkbox" class="form-input" name="selectRenpam" id="listRenpamClick${data.id}"  data-name="${data.name_renpam}" data-cord=${JSON.stringify(data.route)} data-type="${data.type_renpam}" >
                                    //                         </div>
                                    //                     </div>  
                                    //             `;

                                    //             return dummyList;
                                    //             // return $("div").text(data.name_renpam);
                                    //         },
                                    //         onSelectionClick: function(e){ 
                                    //             // if (e.jQueryEvent.target.closest('.dx-treelist-icon-container')) {
                                    //             //     console.log('expand button');
                                    //             // }
                                    //             // else {
                                    //             // change("Row clicked",0);}
                                    //             console.log(e);
                                    //         }
                                    //     }).dxList("instance");
                                    // }); 


                                    for (let i = 0; i < ress.length; i++) {
                                        $(`#listRenpamClick${i+1}`).on("change", function(e) {

                                            console.log(checkedRenpam);
                                            //Find index of specific object using findIndex method.    
                                            objIndex = checkedRenpam.findIndex((obj => obj.name_renpam == $(this).data('name')));
                                            console.log(objIndex);

                                            //Log object to Console.
                                            console.log("Before update: ", checkedRenpam[objIndex]);

                                            //Update object's name property.
                                            if ($(this).is(':checked')) {
                                                checkedRenpam[objIndex].checked = 1;
                                            } else {
                                                checkedRenpam[objIndex].checked = 0;
                                            }

                                            //Log object to console again.
                                            console.log("After update: ", checkedRenpam[objIndex]);

                                            var titikAwal = $(this).data('awal') == null ? '-' : $(this).data('awal');
                                            var titikAkhir = $(this).data('akhir') == null ? '-' : $(this).data('akhir');

                                            var warna = "";
                                            if ($(this).data('jadwal') == "JALUR BEAT") {
                                                warna = $(this).data('warna') == "" ? 'red' : $(this).data('warna');
                                            } else {
                                                warna = "red";
                                            }

                                            var typeRenpam = $(this).data('type');
                                            if (typeRenpam == 3) { //penjagaan
                                                iconMarkerRenpam = `https://cdn-icons-png.flaticon.com/512/1323/1323306.png`;
                                                markerType = `<img src="${iconMarkerRenpam}"><div class="pin"></div><div class="pulse"></div>`;
                                                markerTypeOther = `<img src="${iconMarkerRenpam}"><div class="pin" style="background: gray;"></div><div class="pulse"></div>`;
                                                markerTypeEnd = `<img src="${iconMarkerRenpam}"><div class="pin" style="background: green;"></div><div class="pulse"></div>`;
                                                styleRouteUtama = [{
                                                    color: warna,
                                                    weight: 5,
                                                    className: 'animateRoute'
                                                }];
                                            } else if (typeRenpam == 4) { //pengaturan 
                                                iconMarkerRenpam = `https://cdn-icons-png.flaticon.com/512/196/196781.png`;
                                                markerType = `<img src="${iconMarkerRenpam}"><div class="pin"></div><div class="pulse"></div>`;
                                                markerTypeOther = `<img src="${iconMarkerRenpam}"><div class="pin" style="background: gray;"></div><div class="pulse"></div>`;
                                                markerTypeEnd = `<img src="${iconMarkerRenpam}"><div class="pin" ></div><div class="pulse"></div>`;
                                                styleRouteUtama = [{
                                                    color: warna,
                                                    weight: 5,
                                                    className: 'animateRoute'
                                                }];
                                            } else if (typeRenpam == 5) { //penutupan 
                                                iconMarkerRenpam = `https://cdn-icons-png.flaticon.com/512/196/196764.png`;
                                                markerType = `<img src="${iconMarkerRenpam}"><div class="pin"></div><div class="pulse"></div>`;
                                                markerTypeOther = `<img src="${iconMarkerRenpam}"><div class="pin" style="background: gray;"></div><div class="pulse"></div>`;
                                                markerTypeEnd = `<img src="${iconMarkerRenpam}"><div class="pin" ></div><div class="pulse"></div>`;
                                                styleRouteUtama = [{
                                                    color: warna,
                                                    weight: 5,
                                                    className: 'animateRoute'
                                                }];
                                            } else if (typeRenpam == 1) {
                                                iconMarkerRenpam = ``;
                                                markerType = `<div class="pin" style="background: yellow;"><div style="transform: rotate(45deg);margin-left: 5px;margin-top: 10px;font-size: 14px;">${namaRen.substr(-2)}</div></div><div class="pulse"></div>`;
                                                markerTypeOther = `<div class="pin" style="background: gray; display: none;"><div style="transform: rotate(45deg);margin-left: 5px;margin-top: 10px;font-size: 14px;">${namaRen.substr(-2)}</div></div><div class="pulse"></div>`;
                                                markerTypeEnd = `<div class="pin" style="display: none;background: yellow;"><div style="display: none;transform: rotate(45deg);margin-left: 5px;margin-top: 10px;font-size: 14px;">${namaRen.substr(-2)}</div></div><div class="pulse"></div>`;
                                                styleRouteUtama = [{
                                                    color: warna,
                                                    weight: 5
                                                }];
                                            } else {
                                                iconMarkerRenpam = `https://cdn-icons-png.flaticon.com/512/178/178753.png`;
                                                markerType = `<img src="${iconMarkerRenpam}"><div class="pin"></div><div class="pulse"></div>`;
                                                markerTypeOther = `<img src="${iconMarkerRenpam}"><div class="pin" style="background: gray;"></div><div class="pulse"></div>`;
                                                markerTypeEnd = `<img src="${iconMarkerRenpam}"><div class="pin" style="background: green;"></div><div class="pulse"></div>`;
                                                styleRouteUtama = [{
                                                    color: warna,
                                                    weight: 5,
                                                    className: 'animateRoute'
                                                }];
                                            }

                                            if (route1[i] != null && route1[i][0]['latLng'] != null) {

                                                if ($(this).is(':checked')) {
                                                    routingRenpam1[i] = null;
                                                    routingRenpam1[i] = L.Routing.control({
                                                        show: false,
                                                        draggableWaypoints: false,
                                                        addWaypoints: false,
                                                        waypoints: route1[i],
                                                        router: new L.Routing.osrmv1({
                                                            language: 'en',
                                                            profile: 'car'
                                                        }),
                                                        lineOptions: {
                                                            styles: styleRouteUtama
                                                        },
                                                        createMarker: function(i, wp, nWps) {
                                                            if (i === 0 || i === nWps + 1) {
                                                                // here change the starting and ending icons
                                                                return L.marker(wp.latLng, {
                                                                    icon: L.divIcon({
                                                                        className: "location-pin",
                                                                        html: markerType,
                                                                        iconSize: [5, 5],
                                                                        //iconAnchor: [18, 30]
                                                                        iconAnchor: [5, 10],
                                                                    }),
                                                                    draggable: this.draggableWaypoints,
                                                                }).bindPopup(`
                                                                <div class="text-center"> 
                                                                    <h5>${titikAwal}</h5>
                                                                </div> 
                                                            `);
                                                            } else if (i === nWps - 1) {
                                                                return L.marker(wp.latLng, {
                                                                    icon: L.divIcon({
                                                                        className: "location-pin",
                                                                        html: markerTypeEnd,
                                                                        iconSize: [5, 5],
                                                                        //iconAnchor: [18, 30]
                                                                        iconAnchor: [5, 10],
                                                                    }),
                                                                    draggable: this.draggableWaypoints,
                                                                }).bindPopup(`
                                                                <div class="text-center"> 
                                                                    <h5>${titikAkhir}</h5>
                                                                </div> 
                                                            `);
                                                            } else {
                                                                // here change all the others
                                                                var options = {
                                                                        draggable: this.draggableWaypoints,
                                                                    },
                                                                    marker = L.marker(wp.latLng, {
                                                                        icon: L.divIcon({
                                                                            className: "location-pin",
                                                                            html: markerTypeOther,
                                                                            iconSize: [5, 5],
                                                                            //iconAnchor: [18, 30]
                                                                            iconAnchor: [5, 10],
                                                                        }),
                                                                        draggable: this.draggableWaypoints,
                                                                    });

                                                                return marker;
                                                            }
                                                        },
                                                        // geocoder: L.Control.Geocoder.nominatim({})
                                                    }).addTo(mapContainer);
                                                    // mapContainer.addControl(routingRenpam1[i]);  
                                                } else {
                                                    mapContainer.removeControl(routingRenpam1[i]);
                                                }
                                            } else {
                                                // Swal.fire(
                                                // `Route Alternative tidak ada, atau belum di daftarkan!`, 
                                                // '',
                                                // 'warning'
                                                // ).then(function() { 
                                                // });
                                            }

                                            if (route2[i] != null && route2[i][0]['latLng'] != null) {

                                                if ($(this).is(':checked')) {
                                                    routingRenpam2[i] = null;
                                                    routingRenpam2[i] = L.Routing.control({
                                                        show: false,
                                                        draggableWaypoints: false,
                                                        addWaypoints: false,
                                                        waypoints: route2[i],
                                                        router: new L.Routing.osrmv1({
                                                            language: 'en',
                                                            profile: 'car'
                                                        }),
                                                        lineOptions: {
                                                            styles: [{
                                                                color: "gray",
                                                                weight: 5,
                                                                className: 'animateRoute'
                                                            }]
                                                            // styles: [{className: 'animateLine'}]
                                                        },
                                                        createMarker: function(i, wp, nWps) {
                                                            if (i === 0 || i === nWps + 1) {
                                                                // here change the starting and ending icons
                                                                return L.marker(wp.latLng, {
                                                                    icon: L.divIcon({
                                                                        className: "location-pin",
                                                                        html: markerType,
                                                                        iconSize: [5, 5],
                                                                        //iconAnchor: [18, 30]
                                                                        iconAnchor: [5, 10],
                                                                    }),
                                                                    draggable: this.draggableWaypoints,
                                                                }).bindPopup(`
                                                                <div class="text-center"> 
                                                                    <h5>${titikAwal}</h5>
                                                                </div> 
                                                            `);
                                                            } else if (i === nWps - 1) {
                                                                return L.marker(wp.latLng, {
                                                                    icon: L.divIcon({
                                                                        className: "location-pin",
                                                                        html: markerTypeEnd,
                                                                        iconSize: [5, 5],
                                                                        //iconAnchor: [18, 30]
                                                                        iconAnchor: [5, 10],
                                                                    }),
                                                                    draggable: this.draggableWaypoints,
                                                                }).bindPopup(`
                                                                <div class="text-center"> 
                                                                    <h5>${titikAkhir}</h5>
                                                                </div> 
                                                            `);
                                                            } else {
                                                                // here change all the others
                                                                var options = {
                                                                        draggable: this.draggableWaypoints,
                                                                    },
                                                                    marker = L.marker(wp.latLng, {
                                                                        icon: L.divIcon({
                                                                            className: "location-pin",
                                                                            html: markerTypeOther,
                                                                            iconSize: [5, 5],
                                                                            //iconAnchor: [18, 30]
                                                                            iconAnchor: [5, 10],
                                                                        }),
                                                                        draggable: this.draggableWaypoints,
                                                                    });

                                                                return marker;
                                                            }
                                                        },
                                                        // geocoder: L.Control.Geocoder.nominatim({})
                                                    }).addTo(mapContainer);
                                                    // mapContainer.addControl(routingRenpam1[i]); 
                                                } else {
                                                    mapContainer.removeControl(routingRenpam2[i]);
                                                }
                                            } else {
                                                // Swal.fire(
                                                // `Route Escape tidak ada, atau belum di daftarkan!`, 
                                                // '',
                                                // 'warning'
                                                // ).then(function() { 
                                                // });
                                            }

                                            if (route3[i] != null && route3[i][0]['latLng'] != null) {

                                                if ($(this).is(':checked')) {
                                                    routingRenpam3[i] = null;
                                                    routingRenpam3[i] = L.Routing.control({
                                                        show: false,
                                                        draggableWaypoints: false,
                                                        addWaypoints: false,
                                                        waypoints: route3[i],
                                                        router: new L.Routing.osrmv1({
                                                            language: 'en',
                                                            profile: 'car'
                                                        }),
                                                        lineOptions: {
                                                            styles: [{
                                                                color: "#000dda",
                                                                weight: 5,
                                                                className: 'animateRoute'
                                                            }]
                                                        },
                                                        createMarker: function(i, wp, nWps) {
                                                            if (i === 0 || i === nWps + 1) {
                                                                // here change the starting and ending icons
                                                                return L.marker(wp.latLng, {
                                                                    icon: L.divIcon({
                                                                        className: "location-pin",
                                                                        // html: `<div class="pin"></div><div class="pulse"></div>`,
                                                                        iconSize: [5, 5],
                                                                        //iconAnchor: [18, 30]
                                                                        iconAnchor: [5, 10],
                                                                    }),
                                                                    draggable: this.draggableWaypoints,
                                                                }).bindPopup(`
                                                                <div class="text-center"> 
                                                                    <h5>${titikAwal}</h5>
                                                                </div> 
                                                            `);
                                                            } else if (i === nWps - 1) {
                                                                return L.marker(wp.latLng, {
                                                                    icon: L.divIcon({
                                                                        className: "location-pin",
                                                                        // html: `<div class="pin" style="background: green;"></div><div class="pulse"></div>`,
                                                                        iconSize: [5, 5],
                                                                        //iconAnchor: [18, 30]
                                                                        iconAnchor: [5, 10],
                                                                    }),
                                                                    draggable: this.draggableWaypoints,
                                                                }).bindPopup(`
                                                                <div class="text-center"> 
                                                                    <h5>${titikAkhir}</h5>
                                                                </div> 
                                                            `);
                                                            } else {
                                                                // here change all the others
                                                                var options = {
                                                                        draggable: this.draggableWaypoints,
                                                                    },
                                                                    marker = L.marker(wp.latLng, {
                                                                        icon: L.divIcon({
                                                                            className: "location-pin",
                                                                            // html: `<div class="pin" style="background: gray;"></div><div class="pulse"></div>`,
                                                                            iconSize: [5, 5],
                                                                            //iconAnchor: [18, 30]
                                                                            iconAnchor: [5, 10],
                                                                        }),
                                                                        draggable: this.draggableWaypoints,
                                                                    });

                                                                return marker;
                                                            }
                                                        },
                                                        // geocoder: L.Control.Geocoder.nominatim({})
                                                    }).addTo(mapContainer);
                                                    // mapContainer.addControl(routingRenpam1[i]); 
                                                } else {
                                                    mapContainer.removeControl(routingRenpam3[i]);
                                                }
                                            } else {
                                                // Swal.fire(
                                                // `Route Escape tidak ada, atau belum di daftarkan!`, 
                                                // '',
                                                // 'warning'
                                                // ).then(function() { 
                                                // });
                                            }


                                            if (route4[i] != null && route4[i][0]['latLng'] != null) {

                                                if ($(this).is(':checked')) {
                                                    routingRenpam4[i] = null;
                                                    routingRenpam4[i] = L.Routing.control({
                                                        show: false,
                                                        draggableWaypoints: false,
                                                        addWaypoints: false,
                                                        waypoints: route4[i],
                                                        router: new L.Routing.osrmv1({
                                                            language: 'en',
                                                            profile: 'car'
                                                        }),
                                                        lineOptions: {
                                                            styles: [{
                                                                color: "#bdbd0b",
                                                                weight: 5,
                                                                className: 'animateRoute'
                                                            }]
                                                        },
                                                        createMarker: function(i, wp, nWps) {
                                                            if (i === 0 || i === nWps + 1) {
                                                                // here change the starting and ending icons
                                                                return L.marker(wp.latLng, {
                                                                    icon: L.divIcon({
                                                                        className: "location-pin",
                                                                        // html: `<div class="pin"></div><div class="pulse"></div>`,
                                                                        iconSize: [5, 5],
                                                                        //iconAnchor: [18, 30]
                                                                        iconAnchor: [5, 10],
                                                                    }),
                                                                    draggable: this.draggableWaypoints,
                                                                }).bindPopup(`
                                                                <div class="text-center"> 
                                                                    <h5>${titikAwal}</h5>
                                                                </div> 
                                                            `);
                                                            } else if (i === nWps - 1) {
                                                                return L.marker(wp.latLng, {
                                                                    icon: L.divIcon({
                                                                        className: "location-pin",
                                                                        // html: `<div class="pin" style="background: green;"></div><div class="pulse"></div>`,
                                                                        iconSize: [5, 5],
                                                                        //iconAnchor: [18, 30]
                                                                        iconAnchor: [5, 10],
                                                                    }),
                                                                    draggable: this.draggableWaypoints,
                                                                }).bindPopup(`
                                                                <div class="text-center"> 
                                                                    <h5>${titikAkhir}</h5>
                                                                </div> 
                                                            `);
                                                            } else {
                                                                // here change all the others
                                                                var options = {
                                                                        draggable: this.draggableWaypoints,
                                                                    },
                                                                    marker = L.marker(wp.latLng, {
                                                                        icon: L.divIcon({
                                                                            className: "location-pin",
                                                                            // html: `<div class="pin" style="background: gray;"></div><div class="pulse"></div>`,
                                                                            iconSize: [5, 5],
                                                                            //iconAnchor: [18, 30]
                                                                            iconAnchor: [5, 10],
                                                                        }),
                                                                        draggable: this.draggableWaypoints,
                                                                    });

                                                                return marker;
                                                            }
                                                        },
                                                        // geocoder: L.Control.Geocoder.nominatim({})
                                                    }).addTo(mapContainer);
                                                    // mapContainer.addControl(routingRenpam1[i]); 
                                                } else {
                                                    mapContainer.removeControl(routingRenpam4[i]);
                                                }
                                            } else {
                                                // Swal.fire(
                                                // `Route Escape tidak ada, atau belum di daftarkan!`, 
                                                // '',
                                                // 'warning'
                                                // ).then(function() { 
                                                // });
                                            }



                                            if (route[i] != null && route[i][0]['latLng'] != null) {

                                                if ($(this).is(':checked')) {
                                                    routingRenpam[i] = null;
                                                    routingRenpam[i] = L.Routing.control({
                                                        show: false,
                                                        draggableWaypoints: false,
                                                        addWaypoints: false,
                                                        waypoints: route[i],
                                                        router: new L.Routing.osrmv1({
                                                            language: 'en',
                                                            profile: 'car'
                                                        }),
                                                        lineOptions: {
                                                            styles: [{
                                                                color: "red",
                                                                weight: 5,
                                                                className: 'animateRoute'
                                                            }]
                                                        },
                                                        createMarker: function(i, wp, nWps) {
                                                            if (i === 0 || i === nWps + 1) {
                                                                // here change the starting and ending icons
                                                                return L.marker(wp.latLng, {
                                                                    icon: L.divIcon({
                                                                        className: "location-pin",
                                                                        html: markerType,
                                                                        iconSize: [5, 5],
                                                                        //iconAnchor: [18, 30]
                                                                        iconAnchor: [5, 10],
                                                                    }),
                                                                    draggable: this.draggableWaypoints,
                                                                }).bindPopup(`
                                                                <div class="text-center"> 
                                                                    <h5>${titikAwal}</h5>
                                                                </div> 
                                                            `);
                                                            } else if (i === nWps - 1) {
                                                                return L.marker(wp.latLng, {
                                                                    icon: L.divIcon({
                                                                        className: "location-pin",
                                                                        html: markerTypeEnd,
                                                                        iconSize: [5, 5],
                                                                        //iconAnchor: [18, 30]
                                                                        iconAnchor: [5, 10],
                                                                    }),
                                                                    draggable: this.draggableWaypoints,
                                                                }).bindPopup(`
                                                                <div class="text-center"> 
                                                                    <h5>${titikAkhir}</h5>
                                                                </div> 
                                                            `);
                                                            } else {
                                                                // here change all the others
                                                                var options = {
                                                                        draggable: this.draggableWaypoints,
                                                                    },
                                                                    marker = L.marker(wp.latLng, {
                                                                        icon: L.divIcon({
                                                                            className: "location-pin",
                                                                            html: markerTypeOther,
                                                                            iconSize: [5, 5],
                                                                            //iconAnchor: [18, 30]
                                                                            iconAnchor: [5, 10],
                                                                        }),
                                                                        draggable: this.draggableWaypoints,
                                                                    });

                                                                return marker;
                                                            }
                                                        },
                                                        // geocoder: L.Control.Geocoder.nominatim({})
                                                    }).addTo(mapContainer);
                                                    // mapContainer.addControl(routingRenpam[i]); 
                                                } else {
                                                    mapContainer.removeControl(routingRenpam[i]);
                                                }


                                            } else {
                                                // Swal.fire(
                                                // `Route tidak ada, atau belum di daftarkan!`, 
                                                // '',
                                                // 'error'
                                                // ).then(function() { 
                                                // });
                                            }
                                            // console.log(routingRenpam);
                                        });
                                    }


                                } else {
                                    list = `<li class="list-group-item text-center">Data Tidak ada !</li>`;
                                    $('#listRenpam').html(list);
                                }
                            }
                        });
                    }


                    $('#filterTypeRenpam').on('change', function(e) {
                        openModalFilter = true;
                        // $("#overlay").fadeIn(300); 
                        // getRenpam(); 
                    });

                    $('#searchRenpam').on('change', function(e) {
                        openModalFilter = true;
                        getRenpam();
                    });



                    const groupBy = (array, key) => {
                        // Return the end result
                        return array.reduce((result, currentValue) => {
                            // If an array already present for key, push it to the array. Else create an array and push the object
                            (result[currentValue[key]] = result[currentValue[key]] || []).push(
                                currentValue
                            );
                            // Return the current iteration `result` value, this will be taken as next iteration `result` value and accumulate
                            // This is how the above code in multiple line
                            if (!result[currentValue[key]]) {
                                result[currentValue[key]] = [];
                            }
                            result[currentValue[key]].push(currentValue);
                        }, {}); // empty object is the initial value for result object
                    };



                    mapContainer.on('dblclick', function(e) {
                        $('#myModal').modal('show');
                    });

                    let arrayWaypoint = [];
                    $('#myModal').on('shown.bs.modal', function() {
                        $('[name=total_vehicle]').mask('000000000');
                        $('[name=order_renpam]').mask('000000000');
                        $('#startTime').clockpicker({
                            autoclose: true
                        });
                        $('#endTime').clockpicker({
                            autoclose: true
                        });

                        new Choices('#id_vip', {
                            searchEnabled: true,
                            removeItemButton: true,
                            removeItems: true,
                            itemSelectText: '',
                            classNames: {
                                containerOuter: 'choices select-choices',
                            },
                        });

                        new Choices('#id_account', {
                            searchEnabled: true,
                            removeItemButton: true,
                            removeItems: true,
                            itemSelectText: '',
                            classNames: {
                                containerOuter: 'choices select-choices',
                            },
                        });

                    });





                }
            });

            getDitgakkum(firstDay, lastDay, id, filter)
            getDitkamsel(firstDay, lastDay, id, filter)
            getDitregident(firstDay, lastDay, id, filter)

        });




        $('#btn_filter').on('click', function(e) {
            e.preventDefault();
            var date = new Date();
            var firstDay = new Date(date.getFullYear(), 0).toLocaleDateString("en-GB").split('/').reverse().join('-');
            var lastDay = new Date(date.getFullYear(), 11, 31).toLocaleDateString("en-GB").split('/').reverse().join('-');

            let filter = 1;
            let polda_id = $('#polda_id').val()
            let start_date = $('#start_date').val()
            let end_date = $('#end_date').val()
            $("#overlay").fadeIn(300);
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>executive/polda_executive/getDetailPolda_filter",
                data: {
                    id: polda_id,
                    start_date: start_date,
                    end_date: end_date
                },
                dataType: "JSON",
                success: function(result) {
                    var ressPolda = result.polda
                    $("#overlay").fadeOut(300);
                    $('#motor').html(`<h1>${result.motor}</h1>`);
                    $('#turjagwali').html(`<h1>${result.turjagwali}</h1>`);
                    $('#garlantas').html(`<h1>${result.garlantas}</h1>`);
                    $('#lakalantas').html(`<h1>${result.lakalantas}</h1>`);
                    $('#logo').html(`<img src="<?= url_api() . 'polda/logo/' ?>${ressPolda.logo_polda}" alt="img-polda" width="100px">`);
                    $('#btn_export').attr('href', `http://34.143.227.90:3001/v1/laporan_harian/export_laphar?polda_id=${polda_id}`)
                    $('#nama').html(`<h1 style="color:#007DD8 ; text-transform:uppercase;">Polda ${ressPolda.name_polda}</h1>`);
                    $('#namaditgakkum').html(`<h4 class="card-title mb-0 text-uppercase">Data Ditgakkum Polda ${ressPolda.name_polda}</h4>`);
                    $('#namaditkamsel').html(`<h4 class="card-title mb-0 text-uppercase">Data Ditkamsel Polda ${ressPolda.name_polda}</h4>`);
                    $('#namaditregident').html(`<h4 class="card-title mb-0 text-uppercase">Data Ditregident Polda ${ressPolda.name_polda}</h4>`);
                    $('#statistik').html(`<h4 style="text-transform: uppercase; color:#007DD8;">Statistik Polda ${ressPolda.name_polda}</h4>`);


                }
            })
            $("#charta").html(`<div id="chart"></div>`);
            $("#chartb").html(`<div id="chart2"></div>`);
            $("#chartc").html(`<div id="chart3"></div>`);

            getDitgakkum(start_date, end_date, polda_id, filter)
            getDitkamsel(start_date, end_date, polda_id, filter)
            getDitregident(start_date, end_date, polda_id, filter)
        })


        function getDitgakkum(firstDay, lastDay, id, filter) {
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>executive/polda_executive/getChartDitgakkum",
                data: {
                    id: id,
                    start_date: firstDay,
                    end_date: lastDay,
                    filter: filter
                },
                dataType: "JSON",
                success: function(result) {
                    // console.log(result)
                    var polda_month = result.data.polda_month;
                    var garlantas = result.data.garlantas;
                    var lakalantas = result.data.lakalantas;
                    var turjagwali = result.data.turjagwali;
                    var lakalanggar = result.data.lakalanggar;
                    var ditgakkum = {
                        series: [{
                            name: 'Garlantas',
                            type: 'line',
                            data: garlantas,
                            color: "#11347A"
                        }, {
                            name: 'Lakalantas',
                            type: 'line',
                            data: lakalantas,
                            color: "#CB2D3E"
                        }, {
                            name: 'Turjagwali',
                            type: 'line',
                            data: turjagwali,
                            color: "#E8D42F"
                        }, {
                            name: 'Lakalanggar',
                            type: 'line',
                            data: lakalanggar,
                            color: "#3CA55C"
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
                            offsetY: -15
                        },
                        markers: {
                            size: 4,
                            colors: '#kkk',
                            fillOpacity: 0.9,
                            shape: "circle",
                            radius: 2,
                        },
                        xaxis: {
                            categories: polda_month,
                        },
                        tooltip: {
                            custom: function({
                                series,
                                seriesIndex,
                                dataPointIndex,
                                seriesName,
                                w
                            }) {
                                if (w.globals.labels[dataPointIndex] == 2) {
                                    bulansebelumnya = polda_month[0]
                                    garlantassebelumnya = garlantas[0];
                                    lakalantassebelumnya = lakalantas[0];
                                    turjagwalisebelumnya = turjagwali[0];
                                    lakalanggarsebelumnya = lakalanggar[0];
                                    if (garlantas[0] < garlantas[1]) {
                                        persentasegarlantas = 'Naik'
                                    } else if (garlantas[0] > garlantas[1]) {
                                        persentasegarlantas = 'Turun'
                                    } else {
                                        persentasegarlantas = 'Seimbang'
                                    }
                                    if (lakalantas[0] < lakalantas[1]) {
                                        persentaselakalantas = 'Naik'
                                    } else if (lakalantas[0] > lakalantas[1]) {
                                        persentaselakalantas = 'Turun'
                                    } else {
                                        persentaselakalantas = 'Seimbang'
                                    }
                                    if (turjagwali[0] < turjagwali[1]) {
                                        persentaseturjagwali = 'Naik'
                                    } else if (turjagwali[0] > turjagwali[1]) {
                                        persentaseturjagwali = 'Turun'
                                    } else {
                                        persentaseturjagwali = 'Seimbang'
                                    }
                                    if (lakalanggar[0] < lakalanggar[1]) {
                                        persentaselakalanggar = 'Naik'
                                    } else if (lakalanggar[0] > lakalanggar[1]) {
                                        persentaselakalanggar = 'Turun'
                                    } else {
                                        persentaselakalanggar = 'Seimbang'
                                    }
                                } else if (w.globals.labels[dataPointIndex] == 3) {
                                    bulansebelumnya = polda_month[1]
                                    garlantassebelumnya = garlantas[1];
                                    lakalantassebelumnya = lakalantas[1];
                                    turjagwalisebelumnya = turjagwali[1];
                                    lakalanggarsebelumnya = lakalanggar[1];
                                    if (garlantas[1] < garlantas[2]) {
                                        persentasegarlantas = 'Naik'
                                    } else if (garlantas[1] > garlantas[2]) {
                                        persentasegarlantas = 'Turun'
                                    } else {
                                        persentasegarlantas = 'Seimbang'
                                    }
                                    if (lakalantas[1] < lakalantas[2]) {
                                        persentaselakalantas = 'Naik'
                                    } else if (lakalantas[1] > lakalantas[2]) {
                                        persentaselakalantas = 'Turun'
                                    } else {
                                        persentaselakalantas = 'Seimbang'
                                    }
                                    if (turjagwali[1] < turjagwali[2]) {
                                        persentaseturjagwali = 'Naik'
                                    } else if (turjagwali[1] > turjagwali[2]) {
                                        persentaseturjagwali = 'Turun'
                                    } else {
                                        persentaseturjagwali = 'Seimbang'
                                    }
                                    if (lakalanggar[1] < lakalanggar[2]) {
                                        persentaselakalanggar = 'Naik'
                                    } else if (lakalanggar[1] > lakalanggar[2]) {
                                        persentaselakalanggar = 'Turun'
                                    } else {
                                        persentaselakalanggar = 'Seimbang'
                                    }


                                } else if (w.globals.labels[dataPointIndex] == 4) {
                                    bulansebelumnya = polda_month[2]
                                    garlantassebelumnya = garlantas[2];
                                    lakalantassebelumnya = lakalantas[2];
                                    turjagwalisebelumnya = turjagwali[2];
                                    lakalanggarsebelumnya = lakalanggar[2];
                                    if (garlantas[2] < garlantas[3]) {
                                        persentasegarlantas = 'Naik'
                                    } else if (garlantas[2] > garlantas[3]) {
                                        persentasegarlantas = 'Turun'
                                    } else {
                                        persentasegarlantas = 'Seimbang'
                                    }
                                    if (lakalantas[2] < lakalantas[3]) {
                                        persentaselakalantas = 'Naik'
                                    } else if (lakalantas[2] > lakalantas[3]) {
                                        persentaselakalantas = 'Turun'
                                    } else {
                                        persentaselakalantas = 'Seimbang'
                                    }
                                    if (turjagwali[2] < turjagwali[3]) {
                                        persentaseturjagwali = 'Naik'
                                    } else if (turjagwali[2] > turjagwali[3]) {
                                        persentaseturjagwali = 'Turun'
                                    } else {
                                        persentaseturjagwali = 'Seimbang'
                                    }
                                    if (lakalanggar[2] < lakalanggar[3]) {
                                        persentaselakalanggar = 'Naik'
                                    } else if (lakalanggar[2] > lakalanggar[3]) {
                                        persentaselakalanggar = 'Turun'
                                    } else {
                                        persentaselakalanggar = 'Seimbang'
                                    }

                                } else if (w.globals.labels[dataPointIndex] == 5) {
                                    bulansebelumnya = polda_month[3]
                                    garlantassebelumnya = garlantas[3];
                                    lakalantassebelumnya = lakalantas[3];
                                    turjagwalisebelumnya = turjagwali[3];
                                    lakalanggarsebelumnya = lakalanggar[3];
                                    if (garlantas[3] < garlantas[4]) {
                                        persentasegarlantas = 'Naik'
                                    } else if (garlantas[3] > garlantas[4]) {
                                        persentasegarlantas = 'Turun'
                                    } else {
                                        persentasegarlantas = 'Seimbang'
                                    }
                                    if (lakalantas[3] < lakalantas[4]) {
                                        persentaselakalantas = 'Naik'
                                    } else if (lakalantas[3] > lakalantas[4]) {
                                        persentaselakalantas = 'Turun'
                                    } else {
                                        persentaselakalantas = 'Seimbang'
                                    }
                                    if (turjagwali[3] < turjagwali[4]) {
                                        persentaseturjagwali = 'Naik'
                                    } else if (turjagwali[3] > turjagwali[4]) {
                                        persentaseturjagwali = 'Turun'
                                    } else {
                                        persentaseturjagwali = 'Seimbang'
                                    }
                                    if (lakalanggar[3] < lakalanggar[4]) {
                                        persentaselakalanggar = 'Naik'
                                    } else if (lakalanggar[3] > lakalanggar[4]) {
                                        persentaselakalanggar = 'Turun'
                                    } else {
                                        persentaselakalanggar = 'Seimbang'
                                    }

                                } else if (w.globals.labels[dataPointIndex] == 6) {
                                    bulansebelumnya = polda_month[4]
                                    garlantassebelumnya = garlantas[4];
                                    lakalantassebelumnya = lakalantas[4];
                                    turjagwalisebelumnya = turjagwali[4];
                                    lakalanggarsebelumnya = lakalanggar[4];
                                    if (garlantas[4] < garlantas[5]) {
                                        persentasegarlantas = 'Naik'
                                    } else if (garlantas[4] > garlantas[5]) {
                                        persentasegarlantas = 'Turun'
                                    } else {
                                        persentasegarlantas = 'Seimbang'
                                    }
                                    if (lakalantas[4] < lakalantas[5]) {
                                        persentaselakalantas = 'Naik'
                                    } else if (lakalantas[4] > lakalantas[5]) {
                                        persentaselakalantas = 'Turun'
                                    } else {
                                        persentaselakalantas = 'Seimbang'
                                    }
                                    if (turjagwali[4] < turjagwali[5]) {
                                        persentaseturjagwali = 'Naik'
                                    } else if (turjagwali[4] > turjagwali[5]) {
                                        persentaseturjagwali = 'Turun'
                                    } else {
                                        persentaseturjagwali = 'Seimbang'
                                    }
                                    if (lakalanggar[4] < lakalanggar[5]) {
                                        persentaselakalanggar = 'Naik'
                                    } else if (lakalanggar[4] > lakalanggar[5]) {
                                        persentaselakalanggar = 'Turun'
                                    } else {
                                        persentaselakalanggar = 'Seimbang'
                                    }

                                } else if (w.globals.labels[dataPointIndex] == 7) {
                                    bulansebelumnya = polda_month[5]
                                    garlantassebelumnya = garlantas[5];
                                    lakalantassebelumnya = lakalantas[5];
                                    turjagwalisebelumnya = turjagwali[5];
                                    lakalanggarsebelumnya = lakalanggar[5];
                                    if (garlantas[5] < garlantas[6]) {
                                        persentasegarlantas = 'Naik'
                                    } else if (garlantas[5] > garlantas[6]) {
                                        persentasegarlantas = 'Turun'
                                    } else {
                                        persentasegarlantas = 'Seimbang'
                                    }
                                    if (lakalantas[5] < lakalantas[6]) {
                                        persentaselakalantas = 'Naik'
                                    } else if (lakalantas[5] > lakalantas[6]) {
                                        persentaselakalantas = 'Turun'
                                    } else {
                                        persentaselakalantas = 'Seimbang'
                                    }
                                    if (turjagwali[5] < turjagwali[6]) {
                                        persentaseturjagwali = 'Naik'
                                    } else if (turjagwali[5] > turjagwali[6]) {
                                        persentaseturjagwali = 'Turun'
                                    } else {
                                        persentaseturjagwali = 'Seimbang'
                                    }
                                    if (lakalanggar[5] < lakalanggar[6]) {
                                        persentaselakalanggar = 'Naik'
                                    } else if (lakalanggar[5] > lakalanggar[6]) {
                                        persentaselakalanggar = 'Turun'
                                    } else {
                                        persentaselakalanggar = 'Seimbang'
                                    }

                                } else if (w.globals.labels[dataPointIndex] == 8) {
                                    bulansebelumnya = polda_month[6]
                                    garlantassebelumnya = garlantas[6];
                                    lakalantassebelumnya = lakalantas[6];
                                    turjagwalisebelumnya = turjagwali[6];
                                    lakalanggarsebelumnya = lakalanggar[6];
                                    if (garlantas[6] < garlantas[7]) {
                                        persentasegarlantas = 'Naik'
                                    } else if (garlantas[6] > garlantas[7]) {
                                        persentasegarlantas = 'Turun'
                                    } else {
                                        persentasegarlantas = 'Seimbang'
                                    }
                                    if (lakalantas[6] < lakalantas[7]) {
                                        persentaselakalantas = 'Naik'
                                    } else if (lakalantas[6] > lakalantas[7]) {
                                        persentaselakalantas = 'Turun'
                                    } else {
                                        persentaselakalantas = 'Seimbang'
                                    }
                                    if (turjagwali[6] < turjagwali[7]) {
                                        persentaseturjagwali = 'Naik'
                                    } else if (turjagwali[6] > turjagwali[7]) {
                                        persentaseturjagwali = 'Turun'
                                    } else {
                                        persentaseturjagwali = 'Seimbang'
                                    }
                                    if (lakalanggar[6] < lakalanggar[7]) {
                                        persentaselakalanggar = 'Naik'
                                    } else if (lakalanggar[6] > lakalanggar[7]) {
                                        persentaselakalanggar = 'Turun'
                                    } else {
                                        persentaselakalanggar = 'Seimbang'
                                    }

                                } else if (w.globals.labels[dataPointIndex] == 9) {
                                    bulansebelumnya = polda_month[7]
                                    garlantassebelumnya = garlantas[7];
                                    lakalantassebelumnya = lakalantas[7];
                                    turjagwalisebelumnya = turjagwali[7];
                                    lakalanggarsebelumnya = lakalanggar[7];
                                    if (garlantas[7] < garlantas[8]) {
                                        persentasegarlantas = 'Naik'
                                    } else if (garlantas[7] > garlantas[8]) {
                                        persentasegarlantas = 'Turun'
                                    } else {
                                        persentasegarlantas = 'Seimbang'
                                    }
                                    if (lakalantas[7] < lakalantas[8]) {
                                        persentaselakalantas = 'Naik'
                                    } else if (lakalantas[7] > lakalantas[8]) {
                                        persentaselakalantas = 'Turun'
                                    } else {
                                        persentaselakalantas = 'Seimbang'
                                    }
                                    if (turjagwali[7] < turjagwali[8]) {
                                        persentaseturjagwali = 'Naik'
                                    } else if (turjagwali[7] > turjagwali[8]) {
                                        persentaseturjagwali = 'Turun'
                                    } else {
                                        persentaseturjagwali = 'Seimbang'
                                    }
                                    if (lakalanggar[7] < lakalanggar[8]) {
                                        persentaselakalanggar = 'Naik'
                                    } else if (lakalanggar[7] > lakalanggar[8]) {
                                        persentaselakalanggar = 'Turun'
                                    } else {
                                        persentaselakalanggar = 'Seimbang'
                                    }

                                } else if (w.globals.labels[dataPointIndex] == 10) {
                                    bulansebelumnya = polda_month[8]
                                    garlantassebelumnya = garlantas[8];
                                    lakalantassebelumnya = lakalantas[8];
                                    turjagwalisebelumnya = turjagwali[8];
                                    lakalanggarsebelumnya = lakalanggar[8];
                                    if (garlantas[8] < garlantas[9]) {
                                        persentasegarlantas = 'Naik'
                                    } else if (garlantas[8] > garlantas[9]) {
                                        persentasegarlantas = 'Turun'
                                    } else {
                                        persentasegarlantas = 'Seimbang'
                                    }
                                    if (lakalantas[8] < lakalantas[9]) {
                                        persentaselakalantas = 'Naik'
                                    } else if (lakalantas[8] > lakalantas[9]) {
                                        persentaselakalantas = 'Turun'
                                    } else {
                                        persentaselakalantas = 'Seimbang'
                                    }
                                    if (turjagwali[8] < turjagwali[9]) {
                                        persentaseturjagwali = 'Naik'
                                    } else if (turjagwali[8] > turjagwali[9]) {
                                        persentaseturjagwali = 'Turun'
                                    } else {
                                        persentaseturjagwali = 'Seimbang'
                                    }
                                    if (lakalanggar[8] < lakalanggar[9]) {
                                        persentaselakalanggar = 'Naik'
                                    } else if (lakalanggar[8] > lakalanggar[9]) {
                                        persentaselakalanggar = 'Turun'
                                    } else {
                                        persentaselakalanggar = 'Seimbang'
                                    }

                                } else if (w.globals.labels[dataPointIndex] == 11) {
                                    bulansebelumnya = polda_month[9]
                                    garlantassebelumnya = garlantas[9];
                                    lakalantassebelumnya = lakalantas[9];
                                    turjagwalisebelumnya = turjagwali[9];
                                    lakalanggarsebelumnya = lakalanggar[9];
                                    if (garlantas[9] < garlantas[10]) {
                                        persentasegarlantas = 'Naik'
                                    } else if (garlantas[9] > garlantas[10]) {
                                        persentasegarlantas = 'Turun'
                                    } else {
                                        persentasegarlantas = `Seimbang`
                                    }
                                    if (lakalantas[9] < lakalantas[10]) {
                                        persentaselakalantas = 'Naik'
                                    } else if (lakalantas[9] > lakalantas[10]) {
                                        persentaselakalantas = 'Turun'
                                    } else {
                                        persentaselakalantas = `Seimbang`
                                    }
                                    if (turjagwali[9] < turjagwali[10]) {
                                        persentaseturjagwali = 'Naik'
                                    } else if (turjagwali[9] > turjagwali[10]) {
                                        persentaseturjagwali = 'Turun'
                                    } else {
                                        persentaseturjagwali = `Seimbang`
                                    }
                                    if (lakalanggar[9] < lakalanggar[10]) {
                                        persentaselakalanggar = 'Naik'
                                    } else if (lakalanggar[9] > lakalanggar[10]) {
                                        persentaselakalanggar = 'Turun'
                                    } else {
                                        persentaselakalanggar = `Seimbang`
                                    }

                                } else if (w.globals.labels[dataPointIndex] == 12) {
                                    bulansebelumnya = polda_month[10]
                                    garlantassebelumnya = garlantas[10];
                                    lakalantassebelumnya = lakalantas[10];
                                    turjagwalisebelumnya = turjagwali[10];
                                    lakalanggarsebelumnya = lakalanggar[10];
                                    if (garlantas[10] < garlantas[11]) {
                                        persentasegarlantas = 'Naik'
                                    } else if (garlantas[10] > garlantas[11]) {
                                        persentasegarlantas = 'Turun'
                                    } else {
                                        persentasegarlantas = 'Seimbang'
                                    }
                                    if (lakalantas[10] < lakalantas[11]) {
                                        persentaselakalantas = 'Naik'
                                    } else if (lakalantas[10] > lakalantas[11]) {
                                        persentaselakalantas = 'Turun'
                                    } else {
                                        persentaselakalantas = 'Seimbang'
                                    }
                                    if (turjagwali[10] < turjagwali[11]) {
                                        persentaseturjagwali = 'Naik'
                                    } else if (turjagwali[10] > turjagwali[11]) {
                                        persentaseturjagwali = 'Turun'
                                    } else {
                                        persentaseturjagwali = 'Seimbang'
                                    }
                                    if (lakalanggar[10] < lakalanggar[11]) {
                                        persentaselakalanggar = 'Naik'
                                    } else if (lakalanggar[10] > lakalanggar[11]) {
                                        persentaselakalanggar = 'Turun'
                                    } else {
                                        persentaselakalanggar = 'Seimbang'
                                    }

                                }

                                return (
                                    `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 36rem; height:10rem;">`:'<div style="width: 16rem; height:10rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                <div class="my-2  text-center"">   
                                                    <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-8 ms-1">
                                                            <span class="fw-bold">Total Garlantas</span><br>
                                                            <span class="fw-bold">Total Lakalantas</span><br>
                                                            <span class="fw-bold">Total Turjagwali</span><br>
                                                            <span class="fw-bold">Total Lakalanggar</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${garlantassebelumnya}</span><br>
                                                            <span class="fw-bold">${lakalantassebelumnya}</span><br>
                                                            <span class="fw-bold">${turjagwalisebelumnya}</span><br>
                                                            <span class="fw-bold">${lakalanggarsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total Garlantas</span><br>
                                                            <span class="fw-bold">Total Lakalantas</span><br>
                                                            <span class="fw-bold">Total Turjagwali</span><br>
                                                            <span class="fw-bold">Total Lakalanggar</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${garlantas[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${lakalantas[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${turjagwali[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${lakalanggar[dataPointIndex]}</span><br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasegarlantas}</span><br>
                                                    <span class="fw-bold">${persentaselakalantas}</span><br>
                                                    <span class="fw-bold">${persentaseturjagwali}</span><br>
                                                    <span class="fw-bold">${persentaselakalanggar}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total Garlantas</span><br>
                                                            <span class="fw-bold">Total Lakalantas</span><br>
                                                            <span class="fw-bold">Total Turjagwali</span><br>
                                                            <span class="fw-bold">Total Lakalanggar</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${garlantas[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${lakalantas[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${turjagwali[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${lakalanggar[dataPointIndex]}</span><br>
                                                        </div>
                                                    </div>
                                                </div>`}
                                            </div>
                                        </div>
                                    </div>`

                                );
                            }
                        }

                    };
                    var ditgakkum = new ApexCharts(document.querySelector("#chart"), ditgakkum);
                    ditgakkum.render();
                }
            })
        }

        function getDitkamsel(firstDay, lastDay, id, filter) {
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>executive/polda_executive/getChartDitkamsel",
                data: {
                    id: id,
                    start_date: firstDay,
                    end_date: lastDay,
                    filter: filter
                },
                dataType: "JSON",
                success: function(result) {
                    // console.log(result)
                    let polda_month = result.data.polda_month
                    let dikmaslantas = result.data.dikmaslantas
                    let penyebaran = result.data.penyebaran
                    var ditkamsel = {
                        series: [{
                            name: 'Dikmaslantas',
                            type: 'line',
                            data: dikmaslantas,
                            color: "#11347A"
                        }, {
                            name: 'Penyebaran/Pemasangan',
                            type: 'line',
                            data: penyebaran,
                            color: "#CB2D3E"
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
                            offsetY: -15
                        },
                        markers: {
                            size: 4,
                            colors: '#kkk',
                            fillOpacity: 0.9,
                            shape: "circle",
                            radius: 2,
                        },
                        xaxis: {
                            categories: polda_month,
                        },
                        tooltip: {
                            custom: function({
                                series,
                                seriesIndex,
                                dataPointIndex,
                                seriesName,
                                w
                            }) {
                                if (w.globals.labels[dataPointIndex] == 2) {
                                    bulansebelumnya = polda_month[0]
                                    dikmaslantassebelumnya = dikmaslantas[0];
                                    penyebaransebelumnya = penyebaran[0];
                                    if (dikmaslantas[0] < dikmaslantas[1]) {
                                        persentasedikmaslantas = 'Naik'
                                    } else if (dikmaslantas[0] > dikmaslantas[1]) {
                                        persentasedikmaslantas = 'Turun'
                                    } else {
                                        persentasedikmaslantas = 'Seimbang'
                                    }
                                    if (penyebaran[0] < penyebaran[1]) {
                                        persentasepenyebaran = 'Naik'
                                    } else if (penyebaran[0] > penyebaran[1]) {
                                        persentasepenyebaran = 'Turun'
                                    } else {
                                        persentasepenyebaran = 'Seimbang'
                                    }
                                } else if (w.globals.labels[dataPointIndex] == 3) {
                                    bulansebelumnya = polda_month[1]
                                    dikmaslantassebelumnya = dikmaslantas[1];
                                    penyebaransebelumnya = penyebaran[1];

                                    if (dikmaslantas[1] < dikmaslantas[2]) {
                                        persentasedikmaslantas = 'Naik'
                                    } else if (dikmaslantas[1] > dikmaslantas[2]) {
                                        persentasedikmaslantas = 'Turun'
                                    } else {
                                        persentasedikmaslantas = 'Seimbang'
                                    }
                                    if (penyebaran[1] < penyebaran[2]) {
                                        persentasepenyebaran = 'Naik'
                                    } else if (penyebaran[1] > penyebaran[2]) {
                                        persentasepenyebaran = 'Turun'
                                    } else {
                                        persentasepenyebaran = 'Seimbang'
                                    }
                                } else if (w.globals.labels[dataPointIndex] == 4) {
                                    bulansebelumnya = polda_month[2]
                                    dikmaslantassebelumnya = dikmaslantas[2];
                                    penyebaransebelumnya = penyebaran[2];

                                    if (dikmaslantas[2] < dikmaslantas[3]) {
                                        persentasedikmaslantas = 'Naik'
                                    } else if (dikmaslantas[2] > dikmaslantas[3]) {
                                        persentasedikmaslantas = 'Turun'
                                    } else {
                                        persentasedikmaslantas = 'Seimbang'
                                    }
                                    if (penyebaran[2] < penyebaran[3]) {
                                        persentasepenyebaran = 'Naik'
                                    } else if (penyebaran[2] > penyebaran[3]) {
                                        persentasepenyebaran = 'Turun'
                                    } else {
                                        persentasepenyebaran = 'Seimbang'
                                    }
                                } else if (w.globals.labels[dataPointIndex] == 5) {
                                    bulansebelumnya = polda_month[3]
                                    dikmaslantassebelumnya = dikmaslantas[3];
                                    penyebaransebelumnya = penyebaran[3];

                                    if (dikmaslantas[3] < dikmaslantas[4]) {
                                        persentasedikmaslantas = 'Naik'
                                    } else if (dikmaslantas[3] > dikmaslantas[4]) {
                                        persentasedikmaslantas = 'Turun'
                                    } else {
                                        persentasedikmaslantas = 'Seimbang'
                                    }
                                    if (penyebaran[3] < penyebaran[4]) {
                                        persentasepenyebaran = 'Naik'
                                    } else if (penyebaran[3] > penyebaran[4]) {
                                        persentasepenyebaran = 'Turun'
                                    } else {
                                        persentasepenyebaran = 'Seimbang'
                                    }


                                } else if (w.globals.labels[dataPointIndex] == 6) {
                                    bulansebelumnya = polda_month[4]
                                    dikmaslantassebelumnya = dikmaslantas[4];
                                    penyebaransebelumnya = penyebaran[4];

                                    if (dikmaslantas[4] < dikmaslantas[5]) {
                                        persentasedikmaslantas = 'Naik'
                                    } else if (dikmaslantas[4] > dikmaslantas[5]) {
                                        persentasedikmaslantas = 'Turun'
                                    } else {
                                        persentasedikmaslantas = 'Seimbang'
                                    }
                                    if (penyebaran[4] < penyebaran[5]) {
                                        persentasepenyebaran = 'Naik'
                                    } else if (penyebaran[4] > penyebaran[5]) {
                                        persentasepenyebaran = 'Turun'
                                    } else {
                                        persentasepenyebaran = 'Seimbang'
                                    }


                                } else if (w.globals.labels[dataPointIndex] == 7) {
                                    bulansebelumnya = polda_month[5]
                                    dikmaslantassebelumnya = dikmaslantas[5];
                                    penyebaransebelumnya = penyebaran[5];

                                    if (dikmaslantas[5] < dikmaslantas[6]) {
                                        persentasedikmaslantas = 'Naik'
                                    } else if (dikmaslantas[5] > dikmaslantas[6]) {
                                        persentasedikmaslantas = 'Turun'
                                    } else {
                                        persentasedikmaslantas = 'Seimbang'
                                    }
                                    if (penyebaran[5] < penyebaran[6]) {
                                        persentasepenyebaran = 'Naik'
                                    } else if (penyebaran[5] > penyebaran[6]) {
                                        persentasepenyebaran = 'Turun'
                                    } else {
                                        persentasepenyebaran = 'Seimbang'
                                    }


                                } else if (w.globals.labels[dataPointIndex] == 8) {
                                    bulansebelumnya = polda_month[6]
                                    dikmaslantassebelumnya = dikmaslantas[6];
                                    penyebaransebelumnya = penyebaran[6];

                                    if (dikmaslantas[6] < dikmaslantas[7]) {
                                        persentasedikmaslantas = 'Naik'
                                    } else if (dikmaslantas[6] > dikmaslantas[7]) {
                                        persentasedikmaslantas = 'Turun'
                                    } else {
                                        persentasedikmaslantas = 'Seimbang'
                                    }
                                    if (penyebaran[6] < penyebaran[7]) {
                                        persentasepenyebaran = 'Naik'
                                    } else if (penyebaran[6] > penyebaran[7]) {
                                        persentasepenyebaran = 'Turun'
                                    } else {
                                        persentasepenyebaran = 'Seimbang'
                                    }


                                } else if (w.globals.labels[dataPointIndex] == 9) {
                                    bulansebelumnya = polda_month[7]
                                    dikmaslantassebelumnya = dikmaslantas[7];
                                    penyebaransebelumnya = penyebaran[7];

                                    if (dikmaslantas[7] < dikmaslantas[8]) {
                                        persentasedikmaslantas = 'Naik'
                                    } else if (dikmaslantas[7] > dikmaslantas[8]) {
                                        persentasedikmaslantas = 'Turun'
                                    } else {
                                        persentasedikmaslantas = 'Seimbang'
                                    }
                                    if (penyebaran[7] < penyebaran[8]) {
                                        persentasepenyebaran = 'Naik'
                                    } else if (penyebaran[7] > penyebaran[8]) {
                                        persentasepenyebaran = 'Turun'
                                    } else {
                                        persentasepenyebaran = 'Seimbang'
                                    }


                                } else if (w.globals.labels[dataPointIndex] == 10) {
                                    bulansebelumnya = polda_month[8]
                                    dikmaslantassebelumnya = dikmaslantas[8];
                                    penyebaransebelumnya = penyebaran[8];

                                    if (dikmaslantas[8] < dikmaslantas[9]) {
                                        persentasedikmaslantas = 'Naik'
                                    } else if (dikmaslantas[8] > dikmaslantas[9]) {
                                        persentasedikmaslantas = 'Turun'
                                    } else {
                                        persentasedikmaslantas = 'Seimbang'
                                    }
                                    if (penyebaran[8] < penyebaran[9]) {
                                        persentasepenyebaran = 'Naik'
                                    } else if (penyebaran[8] > penyebaran[9]) {
                                        persentasepenyebaran = 'Turun'
                                    } else {
                                        persentasepenyebaran = 'Seimbang'
                                    }


                                } else if (w.globals.labels[dataPointIndex] == 11) {
                                    bulansebelumnya = polda_month[9]
                                    dikmaslantassebelumnya = dikmaslantas[9];
                                    penyebaransebelumnya = penyebaran[9];

                                    if (dikmaslantas[9] < dikmaslantas[10]) {
                                        persentasedikmaslantas = 'Naik'
                                    } else if (dikmaslantas[9] > dikmaslantas[10]) {
                                        persentasedikmaslantas = 'Turun'
                                    } else {
                                        persentasedikmaslantas = `Seimbang`
                                    }
                                    if (penyebaran[9] < penyebaran[10]) {
                                        persentasepenyebaran = 'Naik'
                                    } else if (penyebaran[9] > penyebaran[10]) {
                                        persentasepenyebaran = 'Turun'
                                    } else {
                                        persentasepenyebaran = `Seimbang`
                                    }


                                } else if (w.globals.labels[dataPointIndex] == 12) {
                                    bulansebelumnya = polda_month[10]
                                    dikmaslantassebelumnya = dikmaslantas[10];
                                    penyebaransebelumnya = penyebaran[10];

                                    if (dikmaslantas[10] < dikmaslantas[11]) {
                                        persentasedikmaslantas = 'Naik'
                                    } else if (dikmaslantas[10] > dikmaslantas[11]) {
                                        persentasedikmaslantas = 'Turun'
                                    } else {
                                        persentasedikmaslantas = 'Seimbang'
                                    }
                                    if (penyebaran[10] < penyebaran[11]) {
                                        persentasepenyebaran = 'Naik'
                                    } else if (penyebaran[10] > penyebaran[11]) {
                                        persentasepenyebaran = 'Turun'
                                    } else {
                                        persentasepenyebaran = 'Seimbang'
                                    }
                                }
                                return (
                                    `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 36rem; height:10rem;">`:'<div style="width: 16rem; height:10rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                <div class="my-2  text-center"">   
                                                    <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-8 ms-1">
                                                            <span class="fw-bold">Total Dikmaslantas</span><br>
                                                            <span class="fw-bold">Total Penyebaran</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${dikmaslantassebelumnya}</span><br>
                                                            <span class="fw-bold">${penyebaransebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total Dikmaslantas</span><br>
                                                            <span class="fw-bold">Total Penyebaran</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${dikmaslantas[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${penyebaran[dataPointIndex]}</span><br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasedikmaslantas}</span><br>
                                                    <span class="fw-bold">${persentasepenyebaran}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total Dikmaslantas</span><br>
                                                            <span class="fw-bold">Total Penyebaran</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${dikmaslantas[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${penyebaran[dataPointIndex]}</span><br>
                                                        </div>
                                                    </div>
                                                </div>`}
                                            </div>
                                        </div>
                                    </div>`

                                );
                            }
                        }

                    };

                    var ditkamsel = new ApexCharts(document.querySelector("#chart2"), ditkamsel);
                    ditkamsel.render();
                }
            })
        }

        function getDitregident(firstDay, lastDay, id, filter) {
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>executive/polda_executive/getChartDitregident",
                data: {
                    id: id,
                    start_date: firstDay,
                    end_date: lastDay,
                    filter: filter
                },
                dataType: "JSON",
                success: function(result) {
                    let polda_month = result.data.polda_month
                    let bpkb = result.data.bpkb
                    let stnk = result.data.stnk
                    let sim = result.data.sim
                    let ranmor = result.data.ranmor
                    var ditregident = {
                        series: [{
                            name: 'BPKB',
                            type: 'line',
                            data: bpkb,
                            color: "#11347A"
                        }, {
                            name: 'STNK',
                            type: 'line',
                            data: stnk,
                            color: "#CB2D3E"
                        }, {
                            name: 'SIM',
                            type: 'line',
                            data: sim,
                            color: "#E8D42F"
                        }, {
                            name: 'RANMOR',
                            type: 'line',
                            data: ranmor,
                            color: "#3CA55C"
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
                            offsetY: -15
                        },
                        markers: {
                            size: 4,
                            colors: '#kkk',
                            fillOpacity: 0.9,
                            shape: "circle",
                            radius: 2,
                        },
                        xaxis: {
                            categories: polda_month,
                        },
                        tooltip: {
                            custom: function({
                                series,
                                seriesIndex,
                                dataPointIndex,
                                seriesName,
                                w
                            }) {
                                if (w.globals.labels[dataPointIndex] == 2) {
                                    bulansebelumnya = polda_month[0]
                                    bpkbsebelumnya = bpkb[0];
                                    stnksebelumnya = stnk[0];
                                    simsebelumnya = sim[0];
                                    ranmorsebelumnya = ranmor[0];
                                    if (bpkb[0] < bpkb[1]) {
                                        persentasebpkb = 'Naik'
                                    } else if (bpkb[0] > bpkb[1]) {
                                        persentasebpkb = 'Turun'
                                    } else {
                                        persentasebpkb = 'Seimbang'
                                    }
                                    if (stnk[0] < stnk[1]) {
                                        persentasestnk = 'Naik'
                                    } else if (stnk[0] > stnk[1]) {
                                        persentasestnk = 'Turun'
                                    } else {
                                        persentasestnk = 'Seimbang'
                                    }
                                    if (sim[0] < sim[1]) {
                                        persentasesim = 'Naik'
                                    } else if (sim[0] > sim[1]) {
                                        persentasesim = 'Turun'
                                    } else {
                                        persentasesim = 'Seimbang'
                                    }
                                    if (ranmor[0] < ranmor[1]) {
                                        persentaseranmor = 'Naik'
                                    } else if (ranmor[0] > ranmor[1]) {
                                        persentaseranmor = 'Turun'
                                    } else {
                                        persentaseranmor = 'Seimbang'
                                    }
                                } else if (w.globals.labels[dataPointIndex] == 3) {
                                    bulansebelumnya = polda_month[1]
                                    bpkbsebelumnya = bpkb[1];
                                    stnksebelumnya = stnk[1];
                                    simsebelumnya = sim[1];
                                    ranmorsebelumnya = ranmor[1];
                                    if (bpkb[1] < bpkb[2]) {
                                        persentasebpkb = 'Naik'
                                    } else if (bpkb[1] > bpkb[2]) {
                                        persentasebpkb = 'Turun'
                                    } else {
                                        persentasebpkb = 'Seimbang'
                                    }
                                    if (stnk[1] < stnk[2]) {
                                        persentasestnk = 'Naik'
                                    } else if (stnk[1] > stnk[2]) {
                                        persentasestnk = 'Turun'
                                    } else {
                                        persentasestnk = 'Seimbang'
                                    }
                                    if (sim[1] < sim[2]) {
                                        persentasesim = 'Naik'
                                    } else if (sim[1] > sim[2]) {
                                        persentasesim = 'Turun'
                                    } else {
                                        persentasesim = 'Seimbang'
                                    }
                                    if (ranmor[1] < ranmor[2]) {
                                        persentaseranmor = 'Naik'
                                    } else if (ranmor[1] > ranmor[2]) {
                                        persentaseranmor = 'Turun'
                                    } else {
                                        persentaseranmor = 'Seimbang'
                                    }


                                } else if (w.globals.labels[dataPointIndex] == 4) {
                                    bulansebelumnya = polda_month[2]
                                    bpkbsebelumnya = bpkb[2];
                                    stnksebelumnya = stnk[2];
                                    simsebelumnya = sim[2];
                                    ranmorsebelumnya = ranmor[2];
                                    if (bpkb[2] < bpkb[3]) {
                                        persentasebpkb = 'Naik'
                                    } else if (bpkb[2] > bpkb[3]) {
                                        persentasebpkb = 'Turun'
                                    } else {
                                        persentasebpkb = 'Seimbang'
                                    }
                                    if (stnk[2] < stnk[3]) {
                                        persentasestnk = 'Naik'
                                    } else if (stnk[2] > stnk[3]) {
                                        persentasestnk = 'Turun'
                                    } else {
                                        persentasestnk = 'Seimbang'
                                    }
                                    if (sim[2] < sim[3]) {
                                        persentasesim = 'Naik'
                                    } else if (sim[2] > sim[3]) {
                                        persentasesim = 'Turun'
                                    } else {
                                        persentasesim = 'Seimbang'
                                    }
                                    if (ranmor[2] < ranmor[3]) {
                                        persentaseranmor = 'Naik'
                                    } else if (ranmor[2] > ranmor[3]) {
                                        persentaseranmor = 'Turun'
                                    } else {
                                        persentaseranmor = 'Seimbang'
                                    }

                                } else if (w.globals.labels[dataPointIndex] == 5) {
                                    bulansebelumnya = polda_month[3]
                                    bpkbsebelumnya = bpkb[3];
                                    stnksebelumnya = stnk[3];
                                    simsebelumnya = sim[3];
                                    ranmorsebelumnya = ranmor[3];
                                    if (bpkb[3] < bpkb[4]) {
                                        persentasebpkb = 'Naik'
                                    } else if (bpkb[3] > bpkb[4]) {
                                        persentasebpkb = 'Turun'
                                    } else {
                                        persentasebpkb = 'Seimbang'
                                    }
                                    if (stnk[3] < stnk[4]) {
                                        persentasestnk = 'Naik'
                                    } else if (stnk[3] > stnk[4]) {
                                        persentasestnk = 'Turun'
                                    } else {
                                        persentasestnk = 'Seimbang'
                                    }
                                    if (sim[3] < sim[4]) {
                                        persentasesim = 'Naik'
                                    } else if (sim[3] > sim[4]) {
                                        persentasesim = 'Turun'
                                    } else {
                                        persentasesim = 'Seimbang'
                                    }
                                    if (ranmor[3] < ranmor[4]) {
                                        persentaseranmor = 'Naik'
                                    } else if (ranmor[3] > ranmor[4]) {
                                        persentaseranmor = 'Turun'
                                    } else {
                                        persentaseranmor = 'Seimbang'
                                    }

                                } else if (w.globals.labels[dataPointIndex] == 6) {
                                    bulansebelumnya = polda_month[4]
                                    bpkbsebelumnya = bpkb[4];
                                    stnksebelumnya = stnk[4];
                                    simsebelumnya = sim[4];
                                    ranmorsebelumnya = ranmor[4];
                                    if (bpkb[4] < bpkb[5]) {
                                        persentasebpkb = 'Naik'
                                    } else if (bpkb[4] > bpkb[5]) {
                                        persentasebpkb = 'Turun'
                                    } else {
                                        persentasebpkb = 'Seimbang'
                                    }
                                    if (stnk[4] < stnk[5]) {
                                        persentasestnk = 'Naik'
                                    } else if (stnk[4] > stnk[5]) {
                                        persentasestnk = 'Turun'
                                    } else {
                                        persentasestnk = 'Seimbang'
                                    }
                                    if (sim[4] < sim[5]) {
                                        persentasesim = 'Naik'
                                    } else if (sim[4] > sim[5]) {
                                        persentasesim = 'Turun'
                                    } else {
                                        persentasesim = 'Seimbang'
                                    }
                                    if (ranmor[4] < ranmor[5]) {
                                        persentaseranmor = 'Naik'
                                    } else if (ranmor[4] > ranmor[5]) {
                                        persentaseranmor = 'Turun'
                                    } else {
                                        persentaseranmor = 'Seimbang'
                                    }

                                } else if (w.globals.labels[dataPointIndex] == 7) {
                                    bulansebelumnya = polda_month[5]
                                    bpkbsebelumnya = bpkb[5];
                                    stnksebelumnya = stnk[5];
                                    simsebelumnya = sim[5];
                                    ranmorsebelumnya = ranmor[5];
                                    if (bpkb[5] < bpkb[6]) {
                                        persentasebpkb = 'Naik'
                                    } else if (bpkb[5] > bpkb[6]) {
                                        persentasebpkb = 'Turun'
                                    } else {
                                        persentasebpkb = 'Seimbang'
                                    }
                                    if (stnk[5] < stnk[6]) {
                                        persentasestnk = 'Naik'
                                    } else if (stnk[5] > stnk[6]) {
                                        persentasestnk = 'Turun'
                                    } else {
                                        persentasestnk = 'Seimbang'
                                    }
                                    if (sim[5] < sim[6]) {
                                        persentasesim = 'Naik'
                                    } else if (sim[5] > sim[6]) {
                                        persentasesim = 'Turun'
                                    } else {
                                        persentasesim = 'Seimbang'
                                    }
                                    if (ranmor[5] < ranmor[6]) {
                                        persentaseranmor = 'Naik'
                                    } else if (ranmor[5] > ranmor[6]) {
                                        persentaseranmor = 'Turun'
                                    } else {
                                        persentaseranmor = 'Seimbang'
                                    }

                                } else if (w.globals.labels[dataPointIndex] == 8) {
                                    bulansebelumnya = polda_month[6]
                                    bpkbsebelumnya = bpkb[6];
                                    stnksebelumnya = stnk[6];
                                    simsebelumnya = sim[6];
                                    ranmorsebelumnya = ranmor[6];
                                    if (bpkb[6] < bpkb[7]) {
                                        persentasebpkb = 'Naik'
                                    } else if (bpkb[6] > bpkb[7]) {
                                        persentasebpkb = 'Turun'
                                    } else {
                                        persentasebpkb = 'Seimbang'
                                    }
                                    if (stnk[6] < stnk[7]) {
                                        persentasestnk = 'Naik'
                                    } else if (stnk[6] > stnk[7]) {
                                        persentasestnk = 'Turun'
                                    } else {
                                        persentasestnk = 'Seimbang'
                                    }
                                    if (sim[6] < sim[7]) {
                                        persentasesim = 'Naik'
                                    } else if (sim[6] > sim[7]) {
                                        persentasesim = 'Turun'
                                    } else {
                                        persentasesim = 'Seimbang'
                                    }
                                    if (ranmor[6] < ranmor[7]) {
                                        persentaseranmor = 'Naik'
                                    } else if (ranmor[6] > ranmor[7]) {
                                        persentaseranmor = 'Turun'
                                    } else {
                                        persentaseranmor = 'Seimbang'
                                    }

                                } else if (w.globals.labels[dataPointIndex] == 9) {
                                    bulansebelumnya = polda_month[7]
                                    bpkbsebelumnya = bpkb[7];
                                    stnksebelumnya = stnk[7];
                                    simsebelumnya = sim[7];
                                    ranmorsebelumnya = ranmor[7];
                                    if (bpkb[7] < bpkb[8]) {
                                        persentasebpkb = 'Naik'
                                    } else if (bpkb[7] > bpkb[8]) {
                                        persentasebpkb = 'Turun'
                                    } else {
                                        persentasebpkb = 'Seimbang'
                                    }
                                    if (stnk[7] < stnk[8]) {
                                        persentasestnk = 'Naik'
                                    } else if (stnk[7] > stnk[8]) {
                                        persentasestnk = 'Turun'
                                    } else {
                                        persentasestnk = 'Seimbang'
                                    }
                                    if (sim[7] < sim[8]) {
                                        persentasesim = 'Naik'
                                    } else if (sim[7] > sim[8]) {
                                        persentasesim = 'Turun'
                                    } else {
                                        persentasesim = 'Seimbang'
                                    }
                                    if (ranmor[7] < ranmor[8]) {
                                        persentaseranmor = 'Naik'
                                    } else if (ranmor[7] > ranmor[8]) {
                                        persentaseranmor = 'Turun'
                                    } else {
                                        persentaseranmor = 'Seimbang'
                                    }

                                } else if (w.globals.labels[dataPointIndex] == 10) {
                                    bulansebelumnya = polda_month[8]
                                    bpkbsebelumnya = bpkb[8];
                                    stnksebelumnya = stnk[8];
                                    simsebelumnya = sim[8];
                                    ranmorsebelumnya = ranmor[8];
                                    if (bpkb[8] < bpkb[9]) {
                                        persentasebpkb = 'Naik'
                                    } else if (bpkb[8] > bpkb[9]) {
                                        persentasebpkb = 'Turun'
                                    } else {
                                        persentasebpkb = 'Seimbang'
                                    }
                                    if (stnk[8] < stnk[9]) {
                                        persentasestnk = 'Naik'
                                    } else if (stnk[8] > stnk[9]) {
                                        persentasestnk = 'Turun'
                                    } else {
                                        persentasestnk = 'Seimbang'
                                    }
                                    if (sim[8] < sim[9]) {
                                        persentasesim = 'Naik'
                                    } else if (sim[8] > sim[9]) {
                                        persentasesim = 'Turun'
                                    } else {
                                        persentasesim = 'Seimbang'
                                    }
                                    if (ranmor[8] < ranmor[9]) {
                                        persentaseranmor = 'Naik'
                                    } else if (ranmor[8] > ranmor[9]) {
                                        persentaseranmor = 'Turun'
                                    } else {
                                        persentaseranmor = 'Seimbang'
                                    }

                                } else if (w.globals.labels[dataPointIndex] == 11) {
                                    bulansebelumnya = polda_month[9]
                                    bpkbsebelumnya = bpkb[9];
                                    stnksebelumnya = stnk[9];
                                    simsebelumnya = sim[9];
                                    ranmorsebelumnya = ranmor[9];
                                    if (bpkb[9] < bpkb[10]) {
                                        persentasebpkb = 'Naik'
                                    } else if (bpkb[9] > bpkb[10]) {
                                        persentasebpkb = 'Turun'
                                    } else {
                                        persentasebpkb = `Seimbang`
                                    }
                                    if (stnk[9] < stnk[10]) {
                                        persentasestnk = 'Naik'
                                    } else if (stnk[9] > stnk[10]) {
                                        persentasestnk = 'Turun'
                                    } else {
                                        persentasestnk = `Seimbang`
                                    }
                                    if (sim[9] < sim[10]) {
                                        persentasesim = 'Naik'
                                    } else if (sim[9] > sim[10]) {
                                        persentasesim = 'Turun'
                                    } else {
                                        persentasesim = `Seimbang`
                                    }
                                    if (ranmor[9] < ranmor[10]) {
                                        persentaseranmor = 'Naik'
                                    } else if (ranmor[9] > ranmor[10]) {
                                        persentaseranmor = 'Turun'
                                    } else {
                                        persentaseranmor = `Seimbang`
                                    }

                                } else if (w.globals.labels[dataPointIndex] == 12) {
                                    bulansebelumnya = polda_month[10]
                                    bpkbsebelumnya = bpkb[10];
                                    stnksebelumnya = stnk[10];
                                    simsebelumnya = sim[10];
                                    ranmorsebelumnya = ranmor[10];
                                    if (bpkb[10] < bpkb[11]) {
                                        persentasebpkb = 'Naik'
                                    } else if (bpkb[10] > bpkb[11]) {
                                        persentasebpkb = 'Turun'
                                    } else {
                                        persentasebpkb = 'Seimbang'
                                    }
                                    if (stnk[10] < stnk[11]) {
                                        persentasestnk = 'Naik'
                                    } else if (stnk[10] > stnk[11]) {
                                        persentasestnk = 'Turun'
                                    } else {
                                        persentasestnk = 'Seimbang'
                                    }
                                    if (sim[10] < sim[11]) {
                                        persentasesim = 'Naik'
                                    } else if (sim[10] > sim[11]) {
                                        persentasesim = 'Turun'
                                    } else {
                                        persentasesim = 'Seimbang'
                                    }
                                    if (ranmor[10] < ranmor[11]) {
                                        persentaseranmor = 'Naik'
                                    } else if (ranmor[10] > ranmor[11]) {
                                        persentaseranmor = 'Turun'
                                    } else {
                                        persentaseranmor = 'Seimbang'
                                    }

                                }

                                return (
                                    `${w.globals.labels[dataPointIndex] != 1 ? `<div style="width: 36rem; height:10rem;">`:'<div style="width: 16rem; height:10rem;">'}
                                        <div class="col-md-12">
                                            <div class="row">
                                            ${w.globals.labels[dataPointIndex] != 1 ? `
                                                <div class="col-md-4">
                                                <div class="my-2  text-center"">   
                                                    <span class="fs-6 fw-bold">${bulansebelumnya}</span>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-8 ms-1">
                                                            <span class="fw-bold">Total Bpkb</span><br>
                                                            <span class="fw-bold">Total Stnk</span><br>
                                                            <span class="fw-bold">Total Sim</span><br>
                                                            <span class="fw-bold">Total Ranmor</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${bpkbsebelumnya}</span><br>
                                                            <span class="fw-bold">${stnksebelumnya}</span><br>
                                                            <span class="fw-bold">${simsebelumnya}</span><br>
                                                            <span class="fw-bold">${ranmorsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total Bpkb</span><br>
                                                            <span class="fw-bold">Total Stnk</span><br>
                                                            <span class="fw-bold">Total Sim</span><br>
                                                            <span class="fw-bold">Total Ranmor</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${bpkb[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${stnk[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${sim[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${ranmor[dataPointIndex]}</span><br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasebpkb}</span><br>
                                                    <span class="fw-bold">${persentasestnk}</span><br>
                                                    <span class="fw-bold">${persentasesim}</span><br>
                                                    <span class="fw-bold">${persentaseranmor}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total Bpkb</span><br>
                                                            <span class="fw-bold">Total Stnk</span><br>
                                                            <span class="fw-bold">Total Sim</span><br>
                                                            <span class="fw-bold">Total Ranmor</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${bpkb[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${stnk[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${sim[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${ranmor[dataPointIndex]}</span><br>
                                                        </div>
                                                    </div>
                                                </div>`}
                                            </div>
                                        </div>
                                    </div>`

                                );
                            }
                        }

                    };

                    var ditregident = new ApexCharts(document.querySelector("#chart3"), ditregident);
                    ditregident.render();
                }
            })
        }




        $(".formR").submit(function(e) {
            $("#overlay").fadeIn(300);
            e.preventDefault();

            // var routeArray = new Array();
            // routeArray = control.getWaypoints();
            // $('#ruteawal').val(JSON.stringify(routeArray)); 

            var formData = new FormData($('.formR')[0]);
            $.ajax({
                url: "<?php echo base_url(); ?>operasi/Renpam/store",
                method: "POST",
                data: formData,
                dataType: 'JSON',
                contentType: false,
                processData: false,
                success: function(data) {
                    $("#overlay").fadeOut(300);
                    if (data['status'] == true) {
                        Swal.fire(
                            `${data['message']}`,
                            '',
                            'success'
                        ).then(function() {
                            $("#myModal").modal('hide');
                            // userDataTable.draw(); 
                        });
                    } else {
                        Swal.fire(
                            `${data['message']}`,
                            '',
                            'error'
                        ).then(function() {});
                    }
                }
            });
        });





        function groupArrayOfObjects(list, key) {
            return list.reduce(function(rv, x) {
                (rv[x[key]] = rv[x[key]] || []).push(x);
                return rv;
            }, {});
        };


        var routingUtama = new Array();
        var routingAlternative1 = new Array();
        var routingAlternative2 = new Array();
        var routingAlternative3 = new Array();
        var routingAlternative4 = new Array();
        let arrayWaypointUtama = [];
        let arrayWaypoint1 = [];
        let arrayWaypoint2 = [];
        let arrayWaypoint3 = [];
        let arrayWaypoint4 = [];


        $('#myModalUtama').on('shown.bs.modal', function() {

            var initialCenter = [-8.751740, 115.149643];
            var initialZoom = 11.65;
            var googleStreet = L.tileLayer('https://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
                maxZoom: 20,
                subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
                attribution: '&copy; <a href="https://maps.google.com/">Google Map <?= date('Y') ?></a> contributors'
            });
            var googleHybrid = L.tileLayer('https://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
                maxZoom: 20,
                subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
                attribution: '&copy; <a href="https://maps.google.com/">Google Map <?= date('Y') ?></a> contributors'
            });
            var googleSatelite = L.tileLayer('https://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
                maxZoom: 20,
                subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
                attribution: '&copy; <a href="https://maps.google.com/">Google Map <?= date('Y') ?></a> contributors'
            });
            var googleTerrain = L.tileLayer('https://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}', {
                maxZoom: 20,
                subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
                attribution: '&copy; <a href="https://maps.google.com/">Google Map <?= date('Y') ?></a> contributors'
            });

            // StART MAP SECTION
            var mapContainerRenpamUtama = L.map('mapG20Kegiatan', {
                maxZoom: 20,
                minZoom: 1,
                zoomSnap: 0.25,
                zoomControl: false,
                layers: [googleHybrid]
            }).setView(initialCenter, initialZoom);

            var baseMaps = {
                "Google Map Street": googleStreet,
                "Google Map Satelite": googleSatelite,
                "Google Map Hybrid": googleHybrid,
                "Google Map Terrain": googleTerrain,
            };
            var overlayMaps = {};
            L.control.layers(baseMaps, overlayMaps, {
                position: 'topleft'
            }).addTo(mapContainerRenpamUtama);
            L.control.zoom({
                position: 'bottomleft'
            }).addTo(mapContainerRenpamUtama);


            mapContainerRenpamUtama.invalidateSize();

            for (let i = 0; i < ressFasumKhusus.length; i++) {

                var latitudeFasum = parseFloat(ressFasumKhusus[i].fasum_lat);
                var longitudeFasum = parseFloat(ressFasumKhusus[i].fasum_lng);
                L.marker([latitudeFasum, longitudeFasum], {
                    icon: L.divIcon({
                        // className: 'location-pin',
                        html: `<img src="<?php echo url_api(); ?>fasum_khusus/${ressFasumKhusus[i].fasum_logo}" style="width: 40px; margin-top: -45px;margin-left: -18.5px;">`,
                        iconSize: [5, 5],
                        iconAnchor: [5, 10]
                        // iconAnchor: [10, 33]
                    })
                }).bindPopup(`
                    <div class="text-center" style="width: 300px;"> 
                        <div class="row mt-3">
                            <div class="col-md-12 col-12" style="margin-left: 110px;margin-bottom: 10px;margin-top: 10px;">
                                <div class="avatar-xl me-3">
                                <a href="javascript:void(0);">
                                    <img src="<?php echo url_api(); ?>fasum_khusus/${ressFasumKhusus[i].fasum_logo}" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 100%;">
                                </a>
                                </div>
                            </div>
                            <div class="col-md-12 col-12 mt-3">
                                <h5>${ressFasumKhusus[i].fasum_name}</h5> 
                                <span>- ${ressFasumKhusus[i].category_fasum.name_category_fasum} -</span>
                            </div>
                            

                            <div class="col-md-12 col-12 mt-2">
                                <div class="row text-start">
                                    <div class="col-md-5 col-6">
                                        <p style="font-size: 12px;font-weight: bold;">Kegiatan</p>  
                                    </div>
                                    <div class="col-md-1">
                                        <p style="font-size: 12px;"> : </p>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <p style="font-size: 12px;">${ressFasumKhusus[i].fasum_description != null ? ressFasumKhusus[i].fasum_description.replace(/\n/g, "<br />") : "-"}</p>
                                    </div>
                                </div> 
                            </div>  
                            <div class="col-md-12 col-12 mt-2">
                                <div class="row text-start">
                                    <div class="col-md-5 col-6">
                                        <p style="font-size: 12px;font-weight: bold;">Alamat</p>  
                                    </div>
                                    <div class="col-md-1">
                                        <p style="font-size: 12px;"> : </p>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <p style="font-size: 12px;">${ressFasumKhusus[i].fasum_address}</p>
                                    </div>
                                </div> 
                            </div>  
                            <div class="col-md-12 col-12"  style="margin-top: -30px;">
                                <div class="row text-start">
                                    <div class="col-md-5 col-6">
                                        <p style="font-size: 12px;font-weight: bold;">No Telpon</p>  
                                    </div>
                                    <div class="col-md-1">
                                        <p style="font-size: 12px;"> : </p>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <p style="font-size: 12px;">${ressFasumKhusus[i].fasum_phone}</p>
                                    </div>
                                </div> 
                            </div>  
                            <div class="col-md-12 col-12" style="margin-top: -30px;">
                                <div class="row text-start">
                                    <div class="col-md-5 col-6">
                                        <p style="font-size: 12px;font-weight: bold;">Waktu</p>  
                                    </div>
                                    <div class="col-md-1">
                                        <p style="font-size: 12px;"> : </p>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <p style="font-size: 12px;">${ressFasumKhusus[i].fasum_open_time != null ? ressFasumKhusus[i].fasum_open_time : '00:00'} - ${ressFasumKhusus[i].fasum_close_time != null ? ressFasumKhusus[i].fasum_close_time : '00:00'} WITA</p>
                                    </div>
                                </div> 
                            </div>   
                        </div>
                    </div> 
            `, {
                    minWidth: 100,
                    maxWidth: 560,
                    width: 400
                }).addTo(mapContainerRenpamUtama);
            }


            var routeAlternativeUtama = L.Routing.control({
                waypoints: arrayWaypointUtama,
                router: new L.Routing.osrmv1({
                    language: 'en',
                    profile: 'car'
                }),
                // geocoder: L.Control.Geocoder.nominatim({})
            }).addTo(mapContainerRenpamUtama);


            function createButton(label, container) {
                var btn = L.DomUtil.create('button', '', container);
                btn.setAttribute('type', 'button');
                btn.innerHTML = label;
                return btn;
            }

            mapContainerRenpamUtama.on('click', function(e) {
                var container = L.DomUtil.create('div'),
                    startBtn = createButton('Start from this location', container),
                    destBtn = createButton('Go to this location', container);

                L.DomEvent.on(startBtn, 'click', function() {

                    routeAlternativeUtama.spliceWaypoints(0, 1, e.latlng);
                    mapContainerRenpamUtama.closePopup();
                });
                L.DomEvent.on(destBtn, 'click', function() {

                    routeAlternativeUtama.spliceWaypoints(routeAlternativeUtama.getWaypoints().length - 1, 1, e.latlng);
                    mapContainerRenpamUtama.closePopup();
                });
                L.popup()
                    .setContent(container)
                    .setLatLng(e.latlng)
                    .openOn(mapContainerRenpamUtama);


            });

            $("#submitAlternativeUtama").on('click', function(e) {
                routingAlternativeUtama = routeAlternativeUtama.getWaypoints();
                $('#ruteawal').val(JSON.stringify(routingAlternativeUtama));
                // $("#myModal1").modal('hide');
            });
        });


        $('#myModal1').on('shown.bs.modal', function() {

            var initialCenter = [-8.751740, 115.149643];
            var initialZoom = 11.65;
            var googleStreet = L.tileLayer('https://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
                maxZoom: 20,
                subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
                attribution: '&copy; <a href="https://maps.google.com/">Google Map <?= date('Y') ?></a> contributors'
            });
            var googleHybrid = L.tileLayer('https://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
                maxZoom: 20,
                subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
                attribution: '&copy; <a href="https://maps.google.com/">Google Map <?= date('Y') ?></a> contributors'
            });
            var googleSatelite = L.tileLayer('https://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
                maxZoom: 20,
                subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
                attribution: '&copy; <a href="https://maps.google.com/">Google Map <?= date('Y') ?></a> contributors'
            });
            var googleTerrain = L.tileLayer('https://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}', {
                maxZoom: 20,
                subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
                attribution: '&copy; <a href="https://maps.google.com/">Google Map <?= date('Y') ?></a> contributors'
            });

            // StART MAP SECTION
            var mapContainerRenpam = L.map('mapG20Alternative1', {
                maxZoom: 20,
                minZoom: 1,
                zoomSnap: 0.25,
                zoomControl: false,
                layers: [googleHybrid]
            }).setView(initialCenter, initialZoom);

            var baseMaps = {
                "Google Map Street": googleStreet,
                "Google Map Satelite": googleSatelite,
                "Google Map Hybrid": googleHybrid,
                "Google Map Terrain": googleTerrain,
            };
            var overlayMaps = {};
            L.control.layers(baseMaps, overlayMaps, {
                position: 'topleft'
            }).addTo(mapContainerRenpam);
            L.control.zoom({
                position: 'bottomleft'
            }).addTo(mapContainerRenpam);


            mapContainerRenpam.invalidateSize();

            for (let i = 0; i < ressFasumKhusus.length; i++) {

                var latitudeFasum = parseFloat(ressFasumKhusus[i].fasum_lat);
                var longitudeFasum = parseFloat(ressFasumKhusus[i].fasum_lng);
                L.marker([latitudeFasum, longitudeFasum], {
                    icon: L.divIcon({
                        // className: 'location-pin',
                        html: `<img src="<?php echo url_api(); ?>fasum_khusus/${ressFasumKhusus[i].fasum_logo}" style="width: 40px; margin-top: -45px;margin-left: -18.5px;">`,
                        iconSize: [5, 5],
                        iconAnchor: [5, 10]
                        // iconAnchor: [10, 33]
                    })
                }).bindPopup(`
                    <div class="text-center" style="width: 300px;"> 
                        <div class="row mt-3">
                            <div class="col-md-12 col-12" style="margin-left: 110px;margin-bottom: 10px;margin-top: 10px;">
                                <div class="avatar-xl me-3">
                                <a href="javascript:void(0);">
                                    <img src="<?php echo url_api(); ?>fasum_khusus/${ressFasumKhusus[i].fasum_logo}" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 100%;">
                                </a>
                                </div>
                            </div>
                            <div class="col-md-12 col-12 mt-3">
                                <h5>${ressFasumKhusus[i].fasum_name}</h5> 
                                <span>- ${ressFasumKhusus[i].category_fasum.name_category_fasum} -</span>
                            </div>
                            


                            <div class="col-md-12 col-12 mt-2">
                                <div class="row text-start">
                                    <div class="col-md-5 col-6">
                                        <p style="font-size: 12px;font-weight: bold;">Kegiatan</p>  
                                    </div>
                                    <div class="col-md-1">
                                        <p style="font-size: 12px;"> : </p>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <p style="font-size: 12px;">${ressFasumKhusus[i].fasum_description != null ? ressFasumKhusus[i].fasum_description.replace(/\n/g, "<br />") : "-"}</p>
                                    </div>
                                </div> 
                            </div>  
                            <div class="col-md-12 col-12 mt-2">
                                <div class="row text-start">
                                    <div class="col-md-5 col-6">
                                        <p style="font-size: 12px;font-weight: bold;">Alamat</p>  
                                    </div>
                                    <div class="col-md-1">
                                        <p style="font-size: 12px;"> : </p>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <p style="font-size: 12px;">${ressFasumKhusus[i].fasum_address}</p>
                                    </div>
                                </div> 
                            </div>  
                            <div class="col-md-12 col-12"  style="margin-top: -30px;">
                                <div class="row text-start">
                                    <div class="col-md-5 col-6">
                                        <p style="font-size: 12px;font-weight: bold;">No Telpon</p>  
                                    </div>
                                    <div class="col-md-1">
                                        <p style="font-size: 12px;"> : </p>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <p style="font-size: 12px;">${ressFasumKhusus[i].fasum_phone}</p>
                                    </div>
                                </div> 
                            </div>  
                            <div class="col-md-12 col-12" style="margin-top: -30px;">
                                <div class="row text-start">
                                    <div class="col-md-5 col-6">
                                        <p style="font-size: 12px;font-weight: bold;">Waktu</p>  
                                    </div>
                                    <div class="col-md-1">
                                        <p style="font-size: 12px;"> : </p>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <p style="font-size: 12px;">${ressFasumKhusus[i].fasum_open_time != null ? ressFasumKhusus[i].fasum_open_time : '00:00'} - ${ressFasumKhusus[i].fasum_close_time != null ? ressFasumKhusus[i].fasum_close_time : '00:00'} WITA</p>
                                    </div>
                                </div> 
                            </div>   
                        </div>
                    </div> 
            `, {
                    minWidth: 100,
                    maxWidth: 560,
                    width: 400
                }).addTo(mapContainerRenpam);
            }

            var routeAlternative1 = L.Routing.control({
                waypoints: arrayWaypoint1,
                router: new L.Routing.osrmv1({
                    language: 'en',
                    profile: 'car'
                }),
                // geocoder: L.Control.Geocoder.nominatim({})
            }).addTo(mapContainerRenpam);


            function createButton(label, container) {
                var btn = L.DomUtil.create('button', '', container);
                btn.setAttribute('type', 'button');
                btn.innerHTML = label;
                return btn;
            }

            mapContainerRenpam.on('click', function(e) {
                var container = L.DomUtil.create('div'),
                    startBtn = createButton('Start from this location', container),
                    destBtn = createButton('Go to this location', container);

                L.DomEvent.on(startBtn, 'click', function() {

                    routeAlternative1.spliceWaypoints(0, 1, e.latlng);
                    mapContainerRenpam.closePopup();
                });
                L.DomEvent.on(destBtn, 'click', function() {

                    routeAlternative1.spliceWaypoints(routeAlternative1.getWaypoints().length - 1, 1, e.latlng);
                    mapContainerRenpam.closePopup();
                });
                L.popup()
                    .setContent(container)
                    .setLatLng(e.latlng)
                    .openOn(mapContainerRenpam);


            });

            $("#submitAlternative1").on('click', function(e) {
                routingAlternative1 = routeAlternative1.getWaypoints();
                $('#coordsAlternative1').val(JSON.stringify(routingAlternative1));
                // $("#myModal1").modal('hide');
            });
        });


        $('#myModal2').on('shown.bs.modal', function() {

            var initialCenter = [-8.751740, 115.149643];
            var initialZoom = 11.65;
            var googleStreet = L.tileLayer('https://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
                maxZoom: 20,
                subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
                attribution: '&copy; <a href="https://maps.google.com/">Google Map <?= date('Y') ?></a> contributors'
            });
            var googleHybrid = L.tileLayer('https://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
                maxZoom: 20,
                subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
                attribution: '&copy; <a href="https://maps.google.com/">Google Map <?= date('Y') ?></a> contributors'
            });
            var googleSatelite = L.tileLayer('https://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
                maxZoom: 20,
                subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
                attribution: '&copy; <a href="https://maps.google.com/">Google Map <?= date('Y') ?></a> contributors'
            });
            var googleTerrain = L.tileLayer('https://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}', {
                maxZoom: 20,
                subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
                attribution: '&copy; <a href="https://maps.google.com/">Google Map <?= date('Y') ?></a> contributors'
            });

            // StART MAP SECTION
            var mapContainerRenpam2 = L.map('mapG20Alternative2', {
                maxZoom: 20,
                minZoom: 1,
                zoomSnap: 0.25,
                zoomControl: false,
                layers: [googleHybrid]
            }).setView(initialCenter, initialZoom);

            var baseMaps = {
                "Google Map Street": googleStreet,
                "Google Map Satelite": googleSatelite,
                "Google Map Hybrid": googleHybrid,
                "Google Map Terrain": googleTerrain,
            };
            var overlayMaps = {};
            L.control.layers(baseMaps, overlayMaps, {
                position: 'topleft'
            }).addTo(mapContainerRenpam2);
            L.control.zoom({
                position: 'bottomleft'
            }).addTo(mapContainerRenpam2);


            mapContainerRenpam2.invalidateSize();

            for (let i = 0; i < ressFasumKhusus.length; i++) {

                var latitudeFasum = parseFloat(ressFasumKhusus[i].fasum_lat);
                var longitudeFasum = parseFloat(ressFasumKhusus[i].fasum_lng);
                L.marker([latitudeFasum, longitudeFasum], {
                    icon: L.divIcon({
                        // className: 'location-pin',
                        html: `<img src="<?php echo url_api(); ?>fasum_khusus/${ressFasumKhusus[i].fasum_logo}" style="width: 40px; margin-top: -45px;margin-left: -18.5px;">`,
                        iconSize: [5, 5],
                        iconAnchor: [5, 10]
                        // iconAnchor: [10, 33]
                    })
                }).bindPopup(`
                    <div class="text-center" style="width: 300px;"> 
                        <div class="row mt-3">
                            <div class="col-md-12 col-12" style="margin-left: 110px;margin-bottom: 10px;margin-top: 10px;">
                                <div class="avatar-xl me-3">
                                <a href="javascript:void(0);">
                                    <img src="<?php echo url_api(); ?>fasum_khusus/${ressFasumKhusus[i].fasum_logo}" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 100%;">
                                </a>
                                </div>
                            </div>
                            <div class="col-md-12 col-12 mt-3">
                                <h5>${ressFasumKhusus[i].fasum_name}</h5> 
                                <span>- ${ressFasumKhusus[i].category_fasum.name_category_fasum} -</span>
                            </div>
                            

                            <div class="col-md-12 col-12 mt-2">
                                <div class="row text-start">
                                    <div class="col-md-5 col-6">
                                        <p style="font-size: 12px;font-weight: bold;">Kegiatan</p>  
                                    </div>
                                    <div class="col-md-1">
                                        <p style="font-size: 12px;"> : </p>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <p style="font-size: 12px;">${ressFasumKhusus[i].fasum_description != null ? ressFasumKhusus[i].fasum_description.replace(/\n/g, "<br />") : "-"}</p>
                                    </div>
                                </div> 
                            </div>  
                            <div class="col-md-12 col-12 mt-2">
                                <div class="row text-start">
                                    <div class="col-md-5 col-6">
                                        <p style="font-size: 12px;font-weight: bold;">Alamat</p>  
                                    </div>
                                    <div class="col-md-1">
                                        <p style="font-size: 12px;"> : </p>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <p style="font-size: 12px;">${ressFasumKhusus[i].fasum_address}</p>
                                    </div>
                                </div> 
                            </div>  
                            <div class="col-md-12 col-12"  style="margin-top: -30px;">
                                <div class="row text-start">
                                    <div class="col-md-5 col-6">
                                        <p style="font-size: 12px;font-weight: bold;">No Telpon</p>  
                                    </div>
                                    <div class="col-md-1">
                                        <p style="font-size: 12px;"> : </p>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <p style="font-size: 12px;">${ressFasumKhusus[i].fasum_phone}</p>
                                    </div>
                                </div> 
                            </div>  
                            <div class="col-md-12 col-12" style="margin-top: -30px;">
                                <div class="row text-start">
                                    <div class="col-md-5 col-6">
                                        <p style="font-size: 12px;font-weight: bold;">Waktu</p>  
                                    </div>
                                    <div class="col-md-1">
                                        <p style="font-size: 12px;"> : </p>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <p style="font-size: 12px;">${ressFasumKhusus[i].fasum_open_time != null ? ressFasumKhusus[i].fasum_open_time : '00:00'} - ${ressFasumKhusus[i].fasum_close_time != null ? ressFasumKhusus[i].fasum_close_time : '00:00'} WITA</p>
                                    </div>
                                </div> 
                            </div>   
                        </div>
                    </div> 
            `, {
                    minWidth: 100,
                    maxWidth: 560,
                    width: 400
                }).addTo(mapContainerRenpam2);
            }

            var routeAlternative2 = L.Routing.control({
                waypoints: arrayWaypoint2,
                router: new L.Routing.osrmv1({
                    language: 'en',
                    profile: 'car'
                }),
                // geocoder: L.Control.Geocoder.nominatim({})
            }).addTo(mapContainerRenpam2);


            function createButton(label, container) {
                var btn = L.DomUtil.create('button', '', container);
                btn.setAttribute('type', 'button');
                btn.innerHTML = label;
                return btn;
            }

            mapContainerRenpam2.on('click', function(e) {
                var container = L.DomUtil.create('div'),
                    startBtn = createButton('Start from this location', container),
                    destBtn = createButton('Go to this location', container);

                L.DomEvent.on(startBtn, 'click', function() {

                    routeAlternative2.spliceWaypoints(0, 1, e.latlng);
                    mapContainerRenpam2.closePopup();
                });
                L.DomEvent.on(destBtn, 'click', function() {

                    routeAlternative2.spliceWaypoints(routeAlternative2.getWaypoints().length - 1, 1, e.latlng);
                    mapContainerRenpam2.closePopup();
                });
                L.popup()
                    .setContent(container)
                    .setLatLng(e.latlng)
                    .openOn(mapContainerRenpam2);


            });

            $("#submitAlternative2").on('click', function(e) {
                routingAlternative2 = routeAlternative2.getWaypoints();
                $('#coordsAlternative2').val(JSON.stringify(routingAlternative2));
                // $("#myModal2").modal('hide');
            });
        });

        $('#myModal3').on('shown.bs.modal', function() {

            var initialCenter = [-8.751740, 115.149643];
            var initialZoom = 11.65;
            var googleStreet = L.tileLayer('https://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
                maxZoom: 20,
                subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
                attribution: '&copy; <a href="https://maps.google.com/">Google Map <?= date('Y') ?></a> contributors'
            });
            var googleHybrid = L.tileLayer('https://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
                maxZoom: 20,
                subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
                attribution: '&copy; <a href="https://maps.google.com/">Google Map <?= date('Y') ?></a> contributors'
            });
            var googleSatelite = L.tileLayer('https://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
                maxZoom: 20,
                subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
                attribution: '&copy; <a href="https://maps.google.com/">Google Map <?= date('Y') ?></a> contributors'
            });
            var googleTerrain = L.tileLayer('https://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}', {
                maxZoom: 20,
                subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
                attribution: '&copy; <a href="https://maps.google.com/">Google Map <?= date('Y') ?></a> contributors'
            });

            // StART MAP SECTION
            var mapContainerRenpam3 = L.map('mapG20Alternative3', {
                maxZoom: 20,
                minZoom: 1,
                zoomSnap: 0.25,
                zoomControl: false,
                layers: [googleHybrid]
            }).setView(initialCenter, initialZoom);

            var baseMaps = {
                "Google Map Street": googleStreet,
                "Google Map Satelite": googleSatelite,
                "Google Map Hybrid": googleHybrid,
                "Google Map Terrain": googleTerrain,
            };
            var overlayMaps = {};
            L.control.layers(baseMaps, overlayMaps, {
                position: 'topleft'
            }).addTo(mapContainerRenpam3);
            L.control.zoom({
                position: 'bottomleft'
            }).addTo(mapContainerRenpam3);


            mapContainerRenpam3.invalidateSize();

            for (let i = 0; i < ressFasumKhusus.length; i++) {

                var latitudeFasum = parseFloat(ressFasumKhusus[i].fasum_lat);
                var longitudeFasum = parseFloat(ressFasumKhusus[i].fasum_lng);
                L.marker([latitudeFasum, longitudeFasum], {
                    icon: L.divIcon({
                        // className: 'location-pin',
                        html: `<img src="<?php echo url_api(); ?>fasum_khusus/${ressFasumKhusus[i].fasum_logo}" style="width: 40px; margin-top: -45px;margin-left: -18.5px;">`,
                        iconSize: [5, 5],
                        iconAnchor: [5, 10]
                        // iconAnchor: [10, 33]
                    })
                }).bindPopup(`
                    <div class="text-center" style="width: 300px;"> 
                        <div class="row mt-3">
                            <div class="col-md-12 col-12" style="margin-left: 110px;margin-bottom: 10px;margin-top: 10px;">
                                <div class="avatar-xl me-3">
                                <a href="javascript:void(0);">
                                    <img src="<?php echo url_api(); ?>fasum_khusus/${ressFasumKhusus[i].fasum_logo}" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 100%;">
                                </a>
                                </div>
                            </div>
                            <div class="col-md-12 col-12 mt-3">
                                <h5>${ressFasumKhusus[i].fasum_name}</h5> 
                                <span>- ${ressFasumKhusus[i].category_fasum.name_category_fasum} -</span>
                            </div>
                            

                            <div class="col-md-12 col-12 mt-2">
                                <div class="row text-start">
                                    <div class="col-md-5 col-6">
                                        <p style="font-size: 12px;font-weight: bold;">Kegiatan</p>  
                                    </div>
                                    <div class="col-md-1">
                                        <p style="font-size: 12px;"> : </p>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <p style="font-size: 12px;">${ressFasumKhusus[i].fasum_description != null ? ressFasumKhusus[i].fasum_description.replace(/\n/g, "<br />") : "-"}</p>
                                    </div>
                                </div> 
                            </div>  
                            <div class="col-md-12 col-12 mt-2">
                                <div class="row text-start">
                                    <div class="col-md-5 col-6">
                                        <p style="font-size: 12px;font-weight: bold;">Alamat</p>  
                                    </div>
                                    <div class="col-md-1">
                                        <p style="font-size: 12px;"> : </p>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <p style="font-size: 12px;">${ressFasumKhusus[i].fasum_address}</p>
                                    </div>
                                </div> 
                            </div>  
                            <div class="col-md-12 col-12"  style="margin-top: -30px;">
                                <div class="row text-start">
                                    <div class="col-md-5 col-6">
                                        <p style="font-size: 12px;font-weight: bold;">No Telpon</p>  
                                    </div>
                                    <div class="col-md-1">
                                        <p style="font-size: 12px;"> : </p>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <p style="font-size: 12px;">${ressFasumKhusus[i].fasum_phone}</p>
                                    </div>
                                </div> 
                            </div>  
                            <div class="col-md-12 col-12" style="margin-top: -30px;">
                                <div class="row text-start">
                                    <div class="col-md-5 col-6">
                                        <p style="font-size: 12px;font-weight: bold;">Waktu</p>  
                                    </div>
                                    <div class="col-md-1">
                                        <p style="font-size: 12px;"> : </p>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <p style="font-size: 12px;">${ressFasumKhusus[i].fasum_open_time != null ? ressFasumKhusus[i].fasum_open_time : '00:00'} - ${ressFasumKhusus[i].fasum_close_time != null ? ressFasumKhusus[i].fasum_close_time : '00:00'} WITA</p>
                                    </div>
                                </div> 
                            </div>   
                        </div>
                    </div> 
            `, {
                    minWidth: 100,
                    maxWidth: 560,
                    width: 400
                }).addTo(mapContainerRenpam3);
            }

            var routeAlternative3 = L.Routing.control({
                waypoints: arrayWaypoint3,
                router: new L.Routing.osrmv1({
                    language: 'en',
                    profile: 'car'
                }),
                // geocoder: L.Control.Geocoder.nominatim({})
            }).addTo(mapContainerRenpam3);


            function createButton(label, container) {
                var btn = L.DomUtil.create('button', '', container);
                btn.setAttribute('type', 'button');
                btn.innerHTML = label;
                return btn;
            }

            mapContainerRenpam3.on('click', function(e) {
                var container = L.DomUtil.create('div'),
                    startBtn = createButton('Start from this location', container),
                    destBtn = createButton('Go to this location', container);

                L.DomEvent.on(startBtn, 'click', function() {

                    routeAlternative3.spliceWaypoints(0, 1, e.latlng);
                    mapContainerRenpam3.closePopup();
                });
                L.DomEvent.on(destBtn, 'click', function() {

                    routeAlternative3.spliceWaypoints(routeAlternative3.getWaypoints().length - 1, 1, e.latlng);
                    mapContainerRenpam3.closePopup();
                });
                L.popup()
                    .setContent(container)
                    .setLatLng(e.latlng)
                    .openOn(mapContainerRenpam3);


            });

            $("#submitAlternative3").on('click', function(e) {
                routingAlternative3 = routeAlternative3.getWaypoints();
                $('#coordsAlternative3').val(JSON.stringify(routingAlternative3));
                // $("#myModal2").modal('hide');
            });
        });


        $('#myModal4').on('shown.bs.modal', function() {

            var initialCenter = [-8.751740, 115.149643];
            var initialZoom = 11.65;
            var googleStreet = L.tileLayer('https://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
                maxZoom: 20,
                subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
                attribution: '&copy; <a href="https://maps.google.com/">Google Map <?= date('Y') ?></a> contributors'
            });
            var googleHybrid = L.tileLayer('https://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
                maxZoom: 20,
                subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
                attribution: '&copy; <a href="https://maps.google.com/">Google Map <?= date('Y') ?></a> contributors'
            });
            var googleSatelite = L.tileLayer('https://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
                maxZoom: 20,
                subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
                attribution: '&copy; <a href="https://maps.google.com/">Google Map <?= date('Y') ?></a> contributors'
            });
            var googleTerrain = L.tileLayer('https://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}', {
                maxZoom: 20,
                subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
                attribution: '&copy; <a href="https://maps.google.com/">Google Map <?= date('Y') ?></a> contributors'
            });

            // StART MAP SECTION
            var mapContainerRenpam4 = L.map('mapG20Alternative4', {
                maxZoom: 20,
                minZoom: 1,
                zoomSnap: 0.25,
                zoomControl: false,
                layers: [googleHybrid]
            }).setView(initialCenter, initialZoom);

            var baseMaps = {
                "Google Map Street": googleStreet,
                "Google Map Satelite": googleSatelite,
                "Google Map Hybrid": googleHybrid,
                "Google Map Terrain": googleTerrain,
            };
            var overlayMaps = {};
            L.control.layers(baseMaps, overlayMaps, {
                position: 'topleft'
            }).addTo(mapContainerRenpam4);
            L.control.zoom({
                position: 'bottomleft'
            }).addTo(mapContainerRenpam4);


            mapContainerRenpam4.invalidateSize();

            for (let i = 0; i < ressFasumKhusus.length; i++) {

                var latitudeFasum = parseFloat(ressFasumKhusus[i].fasum_lat);
                var longitudeFasum = parseFloat(ressFasumKhusus[i].fasum_lng);
                L.marker([latitudeFasum, longitudeFasum], {
                    icon: L.divIcon({
                        // className: 'location-pin',
                        html: `<img src="<?php echo url_api(); ?>fasum_khusus/${ressFasumKhusus[i].fasum_logo}" style="width: 40px; margin-top: -45px;margin-left: -18.5px;">`,
                        iconSize: [5, 5],
                        iconAnchor: [5, 10]
                        // iconAnchor: [10, 33]
                    })
                }).bindPopup(`
                    <div class="text-center" style="width: 300px;"> 
                        <div class="row mt-3">
                            <div class="col-md-12 col-12" style="margin-left: 110px;margin-bottom: 10px;margin-top: 10px;">
                                <div class="avatar-xl me-3">
                                <a href="javascript:void(0);">
                                    <img src="<?php echo url_api(); ?>fasum_khusus/${ressFasumKhusus[i].fasum_logo}" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 100%;">
                                </a>
                                </div>
                            </div>
                            <div class="col-md-12 col-12 mt-3">
                                <h5>${ressFasumKhusus[i].fasum_name}</h5> 
                                <span>- ${ressFasumKhusus[i].category_fasum.name_category_fasum} -</span>
                            </div>
                            

                            <div class="col-md-12 col-12 mt-2">
                                <div class="row text-start">
                                    <div class="col-md-5 col-6">
                                        <p style="font-size: 12px;font-weight: bold;">Kegiatan</p>  
                                    </div>
                                    <div class="col-md-1">
                                        <p style="font-size: 12px;"> : </p>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <p style="font-size: 12px;">${ressFasumKhusus[i].fasum_description != null ? ressFasumKhusus[i].fasum_description.replace(/\n/g, "<br />") : "-"}</p>
                                    </div>
                                </div> 
                            </div>  
                            <div class="col-md-12 col-12 mt-2">
                                <div class="row text-start">
                                    <div class="col-md-5 col-6">
                                        <p style="font-size: 12px;font-weight: bold;">Alamat</p>  
                                    </div>
                                    <div class="col-md-1">
                                        <p style="font-size: 12px;"> : </p>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <p style="font-size: 12px;">${ressFasumKhusus[i].fasum_address}</p>
                                    </div>
                                </div> 
                            </div>  
                            <div class="col-md-12 col-12"  style="margin-top: -30px;">
                                <div class="row text-start">
                                    <div class="col-md-5 col-6">
                                        <p style="font-size: 12px;font-weight: bold;">No Telpon</p>  
                                    </div>
                                    <div class="col-md-1">
                                        <p style="font-size: 12px;"> : </p>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <p style="font-size: 12px;">${ressFasumKhusus[i].fasum_phone}</p>
                                    </div>
                                </div> 
                            </div>  
                            <div class="col-md-12 col-12" style="margin-top: -30px;">
                                <div class="row text-start">
                                    <div class="col-md-5 col-6">
                                        <p style="font-size: 12px;font-weight: bold;">Waktu</p>  
                                    </div>
                                    <div class="col-md-1">
                                        <p style="font-size: 12px;"> : </p>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <p style="font-size: 12px;">${ressFasumKhusus[i].fasum_open_time != null ? ressFasumKhusus[i].fasum_open_time : '00:00'} - ${ressFasumKhusus[i].fasum_close_time != null ? ressFasumKhusus[i].fasum_close_time : '00:00'} WITA</p>
                                    </div>
                                </div> 
                            </div>   
                        </div>
                    </div> 
            `, {
                    minWidth: 100,
                    maxWidth: 560,
                    width: 400
                }).addTo(mapContainerRenpam4);
            }

            var routeAlternative4 = L.Routing.control({
                waypoints: arrayWaypoint4,
                router: new L.Routing.osrmv1({
                    language: 'en',
                    profile: 'car'
                }),
                // geocoder: L.Control.Geocoder.nominatim({})
            }).addTo(mapContainerRenpam4);


            function createButton(label, container) {
                var btn = L.DomUtil.create('button', '', container);
                btn.setAttribute('type', 'button');
                btn.innerHTML = label;
                return btn;
            }

            mapContainerRenpam4.on('click', function(e) {
                var container = L.DomUtil.create('div'),
                    startBtn = createButton('Start from this location', container),
                    destBtn = createButton('Go to this location', container);

                L.DomEvent.on(startBtn, 'click', function() {

                    routeAlternative4.spliceWaypoints(0, 1, e.latlng);
                    mapContainerRenpam4.closePopup();
                });
                L.DomEvent.on(destBtn, 'click', function() {

                    routeAlternative4.spliceWaypoints(routeAlternative4.getWaypoints().length - 1, 1, e.latlng);
                    mapContainerRenpam4.closePopup();
                });
                L.popup()
                    .setContent(container)
                    .setLatLng(e.latlng)
                    .openOn(mapContainerRenpam4);


            });

            $("#submitAlternative4").on('click', function(e) {
                routingAlternative4 = routeAlternative4.getWaypoints();
                $('#coordsAlternative4').val(JSON.stringify(routingAlternative4));
                // $("#myModal2").modal('hide');
            });
        });






        $('#myModalNoteKakor').on('shown.bs.modal', function(event) {
            var myId = $(event.relatedTarget).data('idnote');
            var myNote = $(event.relatedTarget).data('note');
            var myStatus = $(event.relatedTarget).data('status');
            var myAccounts = $(event.relatedTarget).data('accounts');
            var modal = $(this);

            modal.find('#idNoteKakor').val(myId);
            modal.find('#noteKakor').val(myNote);
            modal.find('#statusNoteKakor').val(myStatus);

            // console.log(myStatus);
            // if(myStatus || myStatus != null){
            //     $("statusRenpam").show();
            // }else{
            //     $("statusRenpam").hide();
            // }

            var arrayAccount = new Array();
            for (let i = 0; i < myAccounts.length; i++) {
                arrayAccount.push(myAccounts[i]['id']);
            }

            modal.find('#accountsNoteKakor').val(JSON.stringify(arrayAccount));


            // console.log(myAccounts);


        });

        $('#cekarrayTrack').on('click', function(e) {
            // console.log(markerFasum);
        });

        $(".formNoteKakor").submit(function(e) {
            $("#overlay").fadeIn(300);
            e.preventDefault();

            // var routeArray = new Array();
            // routeArray = control.getWaypoints();
            // $('#ruteawal').val(JSON.stringify(routeArray)); 

            var formData = new FormData($('.formNoteKakor')[0]);
            $.ajax({
                url: "<?php echo base_url(); ?>operasi/Renpam/storeEditNoteKakor",
                method: "POST",
                data: formData,
                dataType: 'JSON',
                contentType: false,
                processData: false,
                success: function(data) {
                    $("#overlay").fadeOut(300);
                    if (data['status'] == true) {
                        Swal.fire(
                            `${data['message']}`,
                            '',
                            'success'
                        ).then(function() {
                            $("#myModalNoteKakor").modal('hide');
                        });
                    } else {
                        Swal.fire(
                            `${data['message']}`,
                            '',
                            'error'
                        ).then(function() {});
                    }
                }
            });
        });


        function sendZoomNonEncrypt(id) {
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>dashboard/sendZoomNonEncrpyt",
                data: {
                    "officer_id": id,
                },
                dataType: "JSON",
                success: function(data) {
                    $("#overlay").fadeOut(300);
                    if (data['status'] == true) {
                        Swal.fire(
                            `Notifikasi Berhasil Terkirim`,
                            '',
                            'success'
                        ).then(function() {
                            // $(".TambahPetugas").modal('hide');
                            // userDataTable.draw(); 
                        });
                    } else {
                        Swal.fire(
                            `${data['message']}`,
                            '',
                            'error'
                        ).then(function() {});
                    }
                }
            });
        }

        function sendZoom(id) {
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>dashboard/sendZoom",
                data: {
                    "officer_id": id,
                },
                dataType: "JSON",
                success: function(data) {
                    $("#overlay").fadeOut(300);
                    if (data['status'] == true) {
                        Swal.fire(
                            `Notifikasi Berhasil Terkirim`,
                            '',
                            'success'
                        ).then(function() {
                            // $(".TambahPetugas").modal('hide');
                            // userDataTable.draw(); 
                        });
                    } else {
                        Swal.fire(
                            `${data['message']}`,
                            '',
                            'error'
                        ).then(function() {});
                    }
                }
            });

        }
    </script>