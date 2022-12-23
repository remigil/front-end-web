<!-- <button onClick="hitungGpsId()">cek marker tracking</button> -->
<div id="openLastDisplay" style="cursor: pointer; width: 23px;height: 45px;background-color: rgba(0, 13, 218, 0.79);border: 1px solid rgba(255, 255, 255, 0.39);border-radius: 5px 0px 0px 5px;position: fixed;right: 20px;z-index: 401;top: 400px;font-size: 25px;padding-left: 4px;color: white;padding-top: 3px;">
    <i class="fa fas fa-chevron-left"></i>
</div>
<div class="row">
    <div class="col-md-12">

        <!-- <a href='#' id='export'>Export Features</a> -->

        <div style="display:flex;z-index: 999;position: absolute;">
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
                    <button class="btn" style="color: #495057; margin-left: 10px; background-color: #fff;width: 40px;font-size: 15px;" data-bs-toggle="modal" data-bs-target="#myModalFilter">
                        <i style="margin-left: -2px;" class="fa fa-fw fas fa-filter"></i>
                    </button>
                    <div id="listAddress" style="position: absolute;top: 60px;margin-left: 4px;border-radius: 0.3rem;"></div>

                </div>

                <div class="row">

                    <div class="col-md-9" style="left: 330px;top: -53px;width: 80%;">

                        <div class="cat" style="margin-left: 10px;">
                            <label>
                                <div class="dropdown-toggle" id="dropdownMenuButtonDisplay" style="padding-top: 3px;color: #1967d2;" data-bs-toggle="dropdown" aria-expanded="false">
                                    &nbsp;&nbsp;&nbsp;&nbsp;<img width="20" src="<?= base_url()?>assets/icon/balon/PETUGAS.png" alt="">Petugas &nbsp;&nbsp;&nbsp;&nbsp;
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
                                        <button data-bs-toggle="modal" data-bs-target="#myModalPoldaPetugasDisplay" class="btn" style="color: #5f95df; background-color: #ffffff;height: 30px;margin-left: -10px;">
                                            Filter Personil Per Polda
                                        </button>
                                    </label>
                                    <label class="dropdown-item" style="width: 100%;height: 100%;">
                                        <button id="petugasFilterModal" class="btn" style="color: #5f95df; background-color: #ffffff;height: 30px;margin-left: -10px;">
                                            List Personil Lantas
                                        </button>
                                    </label>


                                </div>
                            </label>
                        </div>
                        <div class="cat poldaDisplay" style="margin-left: 10px; ">
                            <div class="btn-group">
                                <label>
                                    <input checked type="checkbox" value="polda" name="filter" id="poldaDisplay"><span><img width="20" src="<?= base_url()?>assets/icon/balon/POLDA.png" alt=""> Polda</span>
                                </label>
                                <button id="poldaFilterModal" class="btn" style="color: black; background-color: #ffffff;height: 30px;margin-left: -10px;">
                                    <i class="mdi mdi-chevron-down" style="bottom: 4px;position: relative;"></i>
                                </button>
                            </div>
                        </div>
                        <div class="cat polresDisplay" style="margin-left: 10px; display: none;">
                            <div class="btn-group">
                                <label>
                                    <input type="checkbox" value="polres" name="filter" id="polresDisplay"><span><i class="fa fas fa-vector-square"></i> Polres</span>
                                </label>
                                <button id="polresFilterModal" class="btn" style="color: black; background-color: #ffffff;height: 30px;margin-left: -10px;">
                                    <i class="mdi mdi-chevron-down" style="bottom: 4px;position: relative;"></i>
                                </button>
                            </div>
                        </div>
                        <div class="cat jalurDisplay" style="margin-left: 10px;">
                            <div class="btn-group">
                                <label>
                                    <input type="checkbox" value="jalur" name="filter" id="jalurDisplay"><span><i class="fa fas fa-route"></i> Jalur</span>
                                </label>
                                <button id="jalurFilterModal" class="btn" style="color: black; background-color: #ffffff;height: 30px;margin-left: -10px;">
                                    <i class="mdi mdi-chevron-down" style="bottom: 4px;position: relative;"></i>
                                </button>
                            </div>
                        </div>
                        <div class="cat gerbangtolDisplay" style="margin-left: 10px;">
                            <div class="btn-group">
                                <label>
                                    <input type="checkbox" value="gerbang_tol" name="filter" id="gerbangtolDisplay"><span><img width="20" src="<?= base_url()?>assets/icon/balon/Gerbang TOL.png" alt=""> Gerbang Tol</span>
                                </label>
                                <button id="gerbangtolFilterModal" class="btn" style="color: black; background-color: #ffffff;height: 30px;margin-left: -10px;">
                                    <i class="mdi mdi-chevron-down" style="bottom: 4px;position: relative;"></i>
                                </button>
                            </div>
                        </div>
                        <div class="cat restAreaDisplay" style="margin-left: 10px;">
                            <div class="btn-group">
                                <label>
                                    <input type="checkbox" value="rest_area" name="filter" id="restAreaDisplay"><span><img width="20" src="<?= base_url()?>assets/icon/balon/REST AREA.png" alt=""> Rest Area</span>
                                </label>
                                <button id="restAreaFilterModal" class="btn" style="color: black; background-color: #ffffff;height: 30px;margin-left: -10px;">
                                    <i class="mdi mdi-chevron-down" style="bottom: 4px;position: relative;"></i>
                                </button>
                            </div>
                        </div>
                        <div class="cat jalurBeatDisplay" style="margin-left: 10px; display: none;">
                            <div class="btn-group">
                                <label>
                                    <input type="checkbox" value="jalur_beat" name="filter" id="jalurBeatDisplay"><span><img width="20" src="<?= base_url()?>assets/icon/balon/JALUR.png" alt=""> Jalur Beat</span>
                                </label>
                                <button id="jalurBeatFilterModal" class="btn" style="color: black; background-color: #ffffff;height: 30px;margin-left: -10px;">
                                    <i class="mdi mdi-chevron-down" style="bottom: 4px;position: relative;"></i>
                                </button>
                            </div>
                        </div>

                        <div class="cat fasumKhususDisplay" style="margin-left: 10px;">
                            <div class="btn-group">
                                <label>
                                    <input type="checkbox" value="fasum_khusus" name="filter" id="fasumKhususDisplay"><span><img width="20" src="<?= base_url()?>assets/icon/balon/FASUM KHUSUS.png" alt=""> Fasum Khusus</span>
                                </label>
                                <button id="fasumFilterModal" class="btn" style="color: black; background-color: #ffffff;height: 30px;margin-left: -10px;">
                                    <i class="mdi mdi-chevron-down" style="bottom: 4px;position: relative;"></i>
                                </button>
                            </div>
                        </div>


                        <div class="cat radiusDisplay" style="margin-left: 10px;">
                            <div class="btn-group">
                                <label>
                                    <input type="checkbox" value="radius" name="filter" id="radiusDisplay"><span><img width="20" src="<?= base_url()?>assets/icon/balon/Radius.png" alt=""> Radius</span>
                                </label>
                                <button id="radiusFilterModal" class="btn" style="color: black; background-color: #ffffff;height: 30px;margin-left: -10px;">
                                    <i class="mdi mdi-chevron-down" style="bottom: 4px;position: relative;"></i>
                                </button>
                            </div>
                        </div>
                        <div class="cat clusterDisplay" style="margin-left: 10px;">
                            <div class="btn-group">
                                <label>
                                    <input type="checkbox" value="cluster" name="filter" id="clusterDisplay"><span><img width="20" src="<?= base_url()?>assets/icon/balon/cluster.png" alt=""> Cluster</span>
                                </label>
                                <button id="clusterFilterModal" class="btn" style="color: black; background-color: #ffffff;height: 30px;margin-left: -10px;">
                                    <i class="mdi mdi-chevron-down" style="bottom: 4px;position: relative;"></i>
                                </button>
                            </div>
                        </div>

                        <div class="cat gpsIdDisplay" style="margin-left: 10px;">
                            <label>
                                <input type="checkbox" value="gpsId" name="gpsId" id="gpsIdDisplay"><span><img width="20" src="<?= base_url()?>assets/icon/balon/KENDARAAN.png" alt=""> Kendaraan</span>
                            </label>
                        </div>

                        <div class="cat kegiatanDisplay">
                            <div class="btn-group">
                                <label>
                                    <input type="checkbox" value="jadwal_kegiatan" name="filter" id="kegiatanDisplay"><span><img width="20" src="<?= base_url()?>assets/icon/balon/Jadwal_kegiatan.png" alt=""> Jadwal Kegiatan</span>
                                </label>
                                <button id="jadwalFilterModal" class="btn" style="color: black; background-color: #ffffff;height: 30px;margin-left: -10px;">
                                    <i class="mdi mdi-chevron-down" style="bottom: 4px;position: relative;"></i>
                                </button>
                            </div>
                        </div>

                        <div class="cat cctvDisplay">
                            <div class="btn-group">
                                <label>
                                    <input type="checkbox" value="cctv" name="filter" id="cctvDisplay"><span><img width="20" src="<?= base_url()?>assets/icon/balon/CCTV.png" alt=""> CCTV</span>
                                </label>
                                <button id="cctvFilterModal" class="btn" style="color: black; background-color: #ffffff;height: 30px;margin-left: -10px;">
                                    <i class="mdi mdi-chevron-down" style="bottom: 4px;position: relative;"></i>
                                </button>
                            </div>
                        </div>
                        <div class="cat operasiDisplay">
                            <div class="btn-group">
                                <label>
                                    <input type="checkbox" value="titik_laporan" name="filter" id="operasiDisplay"><span><img width="20" src="<?= base_url()?>assets/icon/balon/Laporan.png" alt=""> Laporan</span>
                                </label>
                                <button id="operasiFilterModal" class="btn" style="color: black; background-color: #ffffff;height: 30px;margin-left: -10px;">
                                    <i class="mdi mdi-chevron-down" style="bottom: 4px;position: relative;"></i>
                                </button>
                            </div>
                        </div>

                        <div class="cat panicDisplay" style="margin-left: 10px;">
                            <div class="btn-group">
                                <label>
                                    <input type="checkbox" value="titik_panicButton" name="filter" id="panicDisplay"><span><img width="20" src="<?= base_url()?>assets/icon/balon/PANIC_Button.png" alt=""> Panic Button</span>
                                </label>
                                <button id="panicFilterModal" class="btn" style="color: black; background-color: #ffffff;height: 30px;margin-left: -10px;">
                                    <i class="mdi mdi-chevron-down" style="bottom: 4px;position: relative;"></i>
                                </button>
                            </div>
                        </div>


                        <div class="cat samsatDisplay" style="margin-left: 10px;">
                            <div class="btn-group">
                                <label>
                                    <input type="checkbox" value="samsat" name="filter" id="samsatDisplay"><span><img width="20" src="<?= base_url()?>assets/icon/balon/SAMSAT.png" alt=""> Samsat</span>
                                </label>
                                <button id="samsatFilterModal" class="btn" style="color: black; background-color: #ffffff;height: 30px;margin-left: -10px;">
                                    <i class="mdi mdi-chevron-down" style="bottom: 4px;position: relative;"></i>
                                </button>
                            </div>
                        </div>

                        <div class="cat trouble_spotDisplay" style="margin-left: 10px;">
                            <div class="btn-group">
                                <label>
                                    <input type="checkbox" value="trouble_spot" name="filter" id="trouble_spotDisplay"><span><img width="20" src="<?= base_url()?>assets/icon/balon/TROUBLE SPOT.png" alt=""> Trouble Spot</span>
                                </label>
                                <button id="troubleSpotFilterModal" class="btn" style="color: black; background-color: #ffffff;height: 30px;margin-left: -10px;">
                                    <i class="mdi mdi-chevron-down" style="bottom: 4px;position: relative;"></i>
                                </button>
                            </div>
                        </div>

                        <div class="cat blank_spotDisplay" style="margin-left: 10px;">
                            <div class="btn-group">
                                <label>
                                    <input type="checkbox" value="blank_spot" name="filter" id="blank_spotDisplay"><span><img width="20" src="<?= base_url()?>assets/icon/balon/Black Spot.png" alt=""> Black Spot</span>
                                </label>
                                <button id="blankSpotFilterModal" class="btn" style="color: black; background-color: #ffffff;height: 30px;margin-left: -10px;">
                                    <i class="mdi mdi-chevron-down" style="bottom: 4px;position: relative;"></i>
                                </button>
                            </div>
                        </div>



                        <div class="cat posPamDisplay" style="margin-left: 10px;">
                            <div class="btn-group">
                                <label>
                                    <input type="checkbox" value="pos_pam" name="filter" id="posPamDisplay"><span><img width="20" src="<?= base_url()?>assets/icon/balon/POSPAM.png" alt=""> POS PAM</span>
                                </label>
                                <button id="posPamFilterModal" class="btn" style="color: black; background-color: #ffffff;height: 30px;margin-left: -10px;">
                                    <i class="mdi mdi-chevron-down" style="bottom: 4px;position: relative;"></i>
                                </button>
                            </div>
                        </div>

                        <div class="cat posYanDisplay" style="margin-left: 10px;">
                            <div class="btn-group">
                                <label>
                                    <input type="checkbox" value="pos_yan" name="filter" id="posYanDisplay"><span><img width="20" src="<?= base_url()?>assets/icon/balon/POSYAN.png" alt=""> POS YAN</span>
                                </label>
                                <button id="posYanFilterModal" class="btn" style="color: black; background-color: #ffffff;height: 30px;margin-left: -10px;">
                                    <i class="mdi mdi-chevron-down" style="bottom: 4px;position: relative;"></i>
                                </button>
                            </div>
                        </div>

                        <div class="cat posTerpaduDisplay" style="margin-left: 10px;">
                            <div class="btn-group">
                                <label>
                                    <input type="checkbox" value="pos_terpadu" name="filter" id="posTerpaduDisplay"><span><img width="20" src="<?= base_url()?>assets/icon/balon/Pos_Terpadu.png" alt=""> POSTERPADU</span>
                                </label>
                                <button id="posTerpaduFilterModal" class="btn" style="color: black; background-color: #ffffff;height: 30px;margin-left: -10px;">
                                    <i class="mdi mdi-chevron-down" style="bottom: 4px;position: relative;"></i>
                                </button>
                            </div>
                        </div>

                        <div class="cat poskoDisplay" style="margin-left: 10px;">
                            <div class="btn-group">
                                <label>
                                    <input type="checkbox" value="posko" name="filter" id="poskoDisplay"><span><img width="20" src="<?= base_url()?>assets/icon/balon/POSKO.png" alt=""> POSKO</span>
                                </label>
                                <button id="poskoFilterModal" class="btn" style="color: black; background-color: #ffffff;height: 30px;margin-left: -10px;">
                                    <i class="mdi mdi-chevron-down" style="bottom: 4px;position: relative;"></i>
                                </button>
                            </div>
                        </div>

                        <div class="cat satPjrDisplay" style="margin-left: 10px;">
                            <div class="btn-group">
                                <label>
                                    <input type="checkbox" value="sat_pjr" name="filter" id="satPjrDisplay"><span><img src="<?= base_url() ?>assets/icon/PJR_icon_kecil.png" style="width: 18px;"> SAT PJR</span>
                                </label>
                                <button id="satPjrFilterModal" class="btn" style="color: black; background-color: #ffffff;height: 30px;margin-left: -10px;">
                                    <i class="mdi mdi-chevron-down" style="bottom: 4px;position: relative;"></i>
                                </button>
                            </div>
                        </div>

                        <div class="cat satPasDisplay" style="margin-left: 10px;">
                            <div class="btn-group">
                                <label>
                                    <input type="checkbox" value="sat_pas" name="filter" id="satPasDisplay"><span><img width="20" src="<?= base_url()?>assets/icon/balon/satpas_icon 1.png" alt=""> SATPAS</span>
                                </label>
                                <button id="satPasFilterModal" class="btn" style="color: black; background-color: #ffffff;height: 30px;margin-left: -10px;">
                                    <i class="mdi mdi-chevron-down" style="bottom: 4px;position: relative;"></i>
                                </button>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="dropdown-menu" style="background: transparent; border: transparent; box-shadow: none; ">
                    <div style="width: 308px; background-color: white;border-radius: 0.25rem;margin-left: 7px;margin-top: -80px;">
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
                                        <input type="checkbox" name="filter" value="polda" id="polda" class="form-input">
                                        <span>Polda</span>
                                    </div>
                                    <div class="col-md-6" display: none;>
                                        <input type="checkbox" name="filter" value="polres" id="polres" class="form-input">
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
                                        <input type="checkbox" name="filter" value="cctv" id="cctv" class="form-input">
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
                                        <input type="checkbox" name="filter" value="rest_area" id="rest_area" class="form-input">
                                        <span>Rest Area</span>
                                    </div>
                                    <div class="col-md-6" style="display: none;">
                                        <input type="checkbox" name="filter" value="gerbang_tol" id="gerbang_tol" class="form-input">
                                        <span>Gerbang Tol</span>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="checkbox" name="filter" value="sat_pas" id="sat_pas" class="form-input">
                                        <span>SATPAS</span>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="checkbox" name="filter" value="samsat" id="samsat" class="form-input">
                                        <span>SAMSAT</span>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="checkbox" name="filter" value="troublespot" id="trouble_spot" class="form-input">
                                        <span>Trouble Spot</span>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="checkbox" name="filter" value="blankspot" id="blank_spot" class="form-input">
                                        <span>Black Spot</span>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="checkbox" name="filter" value="radius" id="radius" class="form-input">
                                        <span>Radius</span>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="checkbox" name="filter" value="cluster" id="cluster" class="form-input">
                                        <span>Cluster</span>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="checkbox" name="filter" value="gpsId" id="gpsId" class="form-input">
                                        <span>Kendaraan</span>
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
        <div id="mapG20Dashboard">
            <div style="bottom: 0px;position: absolute;z-index: 999;background-color: #f5f3f4;border-radius: 0px 50px 0px 0px;padding: 20px;">
                <span style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776; <b style="font-size:15px;">Lihat Legenda</b></span>
            </div>
            <div id="mySidenav" class="sidenav2">

                <h5 class="judul">Legenda</h5>
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>


                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOneLegenda">
                            <button class="accordion-button fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneLegenda" aria-expanded="true" aria-controls="collapseOneLegenda">
                                Fasum Khusus
                            </button>
                        </h2>
                        <div id="collapseOneLegenda" class="accordion-collapse collapse show" aria-labelledby="headingOneLegenda" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row" style="margin: 10px;" id="isiLegendFasum"></div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwoLegenda">
                            <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoLegenda" aria-expanded="false" aria-controls="collapseTwoLegenda">
                                Jalur
                            </button>
                        </h2>
                        <div id="collapseTwoLegenda" class="accordion-collapse collapse" aria-labelledby="headingTwoLegenda" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row" style="margin: 10px;" id="isiLegendJalur">
                                    <div class="col-md-12" style="text-align: center;">
                                        <b style="font-size: 14px; text-transform: capitalize;">Mohon Untuk Aktifkan Jalur !</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end accordion -->
            </div>
        </div>
    </div>

    <!-- <div class="col-md-12 mt-3"> 
        <div class="card">
            <div class="card-body">
                <table id="datatable" class="table dt-responsive w-100">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Waktu Mulai</th> 
                            <th>Unit Pengawalan</th>
                            <th>Penugasan</th>
                            <th>Delegasi</th>
                            <th>Subjek</th> 
                            <th>Jarak Tempuh</th> 
                            <th>Waktu Tempuh</th>
                            
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div> -->
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
                                    <!-- <option value="6">Jalur</option>  -->
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
            <div class="modal-body" id="openModalPoldaDisplay" style="width: 300px;">
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


<div class="modal right fade" id="myModalJalurDisplay" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabelJalurDisplay" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabelJalurDisplay">Jalur</h5> &nbsp;<span class="badge bg-danger rounded-pill" id="totalJalurDisplay"></span>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="openModalJalurDisplay" style="width: 550px;">
            </div>
        </div>
    </div>
</div>
<div class="modal right fade" id="myModalGerbangtolDisplay" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabelGerbangtolDisplay" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabelGerbangtolDisplay">Gerbang Tol</h5> &nbsp;<span class="badge bg-danger rounded-pill" id="totalGerbangtolDisplay"></span>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="openModalGerbangtolDisplay" style="width: 550px;">
            </div>
        </div>
    </div>
</div>
<div class="modal right fade" id="myModalSamsatDisplay" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabelSamsatDisplay" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabelSamsatDisplay">SAMSAT</h5> &nbsp;<span class="badge bg-danger rounded-pill" id="totalSamsatDisplay"></span>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="openModalSamsatDisplay" style="width: 550px;">
            </div>
        </div>
    </div>
</div>
<div class="modal right fade" id="myModalTroubleSpotDisplay" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabelTroubleSpotDisplay" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabelTroubleSpotDisplay">Trouble Spot</h5> &nbsp;<span class="badge bg-danger rounded-pill" id="totalTroubleSpotDisplay"></span>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="openModalTroubleSpotDisplay" style="width: 550px;">
            </div>
        </div>
    </div>
</div>
<div class="modal right fade" id="myModalBlankSpotDisplay" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabelBlankSpotDisplay" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabelBlankSpotDisplay">Black Spot</h5> &nbsp;<span class="badge bg-danger rounded-pill" id="totalBlankSpotDisplay"></span>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="openModalBlankSpotDisplay" style="width: 550px;">
            </div>
        </div>
    </div>
</div>

<div class="modal right fade" id="myModalRestAreaDisplay" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabelRestAreaDisplay" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabelRestAreaDisplay">Rest Area</h5> &nbsp;<span class="badge bg-danger rounded-pill" id="totalRestAreaDisplay"></span>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="openModalRestAreaDisplay" style="width: 550px;">
            </div>
        </div>
    </div>
</div>
<div class="modal right fade" id="myModalPoldaPetugasDisplay" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabelPoldaPetugasDisplay" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabelPoldaPetugasDisplay">Filter Personil Per Polda</h5> &nbsp;<span class="badge bg-danger rounded-pill" id="totalPoldaPetugasDisplay"></span>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="width: 550px;">
                <div class="accordion row" id="openModalPoldaPetugasDisplay">

                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal right fade" id="myModalPosPamDisplay" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabelPosPamDisplay" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabelPosPamDisplay">POS PAM</h5> &nbsp;<span class="badge bg-danger rounded-pill" id="totalPosPamDisplay"></span>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="width: 550px;">
                <div class="accordion" id="openModalPosPamDisplay">

                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal right fade" id="myModalPosYanDisplay" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabelPosYanDisplay" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabelPosYanDisplay">POS YAN</h5> &nbsp;<span class="badge bg-danger rounded-pill" id="totalPosYanDisplay"></span>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="width: 550px;">
                <div class="accordion" id="openModalPosYanDisplay">

                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal right fade" id="myModalPosTerpaduDisplay" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabelPosTerpaduDisplay" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabelPosTerpaduDisplay">POS TERPADU</h5> &nbsp;<span class="badge bg-danger rounded-pill" id="totalPosTerpaduDisplay"></span>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="width: 550px;">
                <div class="accordion" id="openModalPosTerpaduDisplay">

                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal right fade" id="myModalPoskoDisplay" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabelPoskoDisplay" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabelPoskoDisplay">POSKO</h5> &nbsp;<span class="badge bg-danger rounded-pill" id="totalPoskoDisplay"></span>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="width: 550px;">
                <div class="accordion" id="openModalPoskoDisplay">

                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal right fade" id="myModalSatPjrDisplay" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabelSatPjrDisplay" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabelSatPjrDisplay">SAT PJR</h5> &nbsp;<span class="badge bg-danger rounded-pill" id="totalSatPjrDisplay"></span>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="width: 550px;">
                <div class="accordion" id="openModalSatPjrDisplay">

                </div>
            </div>
        </div>
    </div>
</div>




<div class="modal right fade" id="myModalSatPasDisplay" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabelSatPasDisplay" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabelSatPasDisplay">SATPAS</h5> &nbsp;<span class="badge bg-danger rounded-pill" id="totalSatPasDisplay"></span>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="openModalSatPasDisplay" style="width: 550px;">
            </div>
        </div>
    </div>
</div>


<div class="modal right fade" id="myModalRadiusDisplay" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabelRadiusDisplay" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabelRadiusDisplay">Radius</h5> &nbsp;<span class="badge bg-danger rounded-pill" id="totalRadiusDisplay"></span>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="openModalRadiusDisplay" style="width: 550px;">
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
<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->

<script src="https://cdn.socket.io/4.5.3/socket.io.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.js"></script> -->

<!-- <script>
      
        var socket = io('<?= ENV_SOCKET_IO_HTTP ?>', {
        // transports: ["websocket",],
        // path:'/socket.io/',
        query: {
        
            username: "Kakor",
            password: "a",
            
            type: "Admin"
        }
    });
    socket.on("connected", function(resSocket){
            console.log(socket.id);
            console.log(resSocket);
            console.log('ido1');
        });
            socket.on("sendToAdminMobile", function(resSocket){
            // console.log(socket.id);
            // console.log(resSocket);
            // console.log('sendToAdminMobile');
        });
            socket.on("from server", function(resSocket){
            // console.log(socket.id);
            console.log(resSocket);
            console.log('from server');
        });
        $('document').ready(function() {
            let no = 1

        socket.on("connected", function(resSocket){
            console.log(socket.id);
            console.log(resSocket);
            console.log('ido1');
        });
            socket.on("sendToAdminMobile", function(resSocket){
            // console.log(socket.id);
            // console.log(resSocket);
            // console.log('sendToAdminMobile');
        });
            socket.on("from server", function(resSocket){
            // console.log(socket.id);
            console.log(resSocket);
            console.log('from server');
        }); 
        }) 
      </script> -->


<script>
    let app_url = '<%-app_url%>'
    let path = '<%-path%>'

    let data = [];
    let connected = false;
    var socket = io('<?= ENV_SOCKET_IO_HTTP ?>', {
        transports: ['websocket'],
        // socketRef.current = io('http://10.10.7.40:3001/', {
        path: '/socket.io',
        query: {


            username: "Kakor",
            password: "a",

            type: "Admin"
        }
    });
    // var socketKe2 = io('http://103.163.139.100:3001/', {
    //     transports: ['websocket'],
    //     // socketRef.current = io('http://10.10.7.40:3001/', {
    //     path: '/socket.io',
    //     query: {


    //         username: "Kakor",
    //         password: "a",

    //         type: "Admin"
    //     }
    // });
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
    var markerRadius = new Array();
    var markerCluster = new Array();
    var routingJadwal = new Array();


    var markerTitikGlobal = new Array();

    var markerJalur = new Array();
    var markerSamsat = new Array();
    var markerTroubleSpot = new Array();
    var markerBlankSpot = new Array();
    var markerRestArea = new Array();
    var markerPosPam = new Array();
    var markerPosYan = new Array();

    var markerPosTerpadu = new Array();
    var markerPosko = new Array();
    var markerSatPjr = new Array();


    var markerGerbangtol = new Array();
    var markerSatPas = new Array();
    var markerPolres = new Array();
    var markerPolda = new Array();


    var routingJadwalRenpam = new Array();
    var routingJadwalRenpam1 = new Array();
    var routingJadwalRenpam2 = new Array();
    var routingJadwalRenpam3 = new Array();
    var routingJadwalRenpam4 = new Array();

    var routingTroubleSpot = new Array();
    var routingBlankSpot = new Array();
    var routingJalur = new Array();

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

    var samsatClusterGroup;
    var troubleSpotClusterGroup;
    var blankSpotClusterGroup;
    var restAreaClusterGroup;
    var posPamClusterGroup;
    var posYanClusterGroup;
    var posTerpaduClusterGroup;
    var poskoClusterGroup;
    var satPjrClusterGroup;


    var satPasClusterGroup;
    var gerbangTolClusterGroup;

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

        var initialCenter = [<?= $this->session->userdata['latlng_center'] ?>];
        var initialZoom = <?= $this->session->userdata['zoom_level'] ?>;
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


        var shpFile = new L.Shapefile(`<?php echo base_url(); ?>assets/admin/shp/BATAS_PROVINSI_DESEMBER_2019_DUKCAPIL`, {
            pointToLayer: function(feature, latlng) {

                var smallIcon = new L.divIcon({
                    iconAnchor: [20, 51],
                    popupAnchor: [0, -51],
                    className: 'listeo-marker-icon',
                    html: '<div class="marker-container">' +
                        '<div class="marker-card">' +
                        '<div class="front face"><i class="im im-icon-Globe"></i></div>' +
                        '<div class="back face"><i class="im im-icon-Globe"></i></div>' +
                        '<div class="marker-arrow"></div>' +
                        '</div>' +
                        '</div>'
                });


                var mark = L.marker(latlng, {
                    icon: smallIcon
                })
                cluster.addLayer(mark)
                return cluster;

            },
            onEachFeature: function(feature, layer) {
                if (feature.properties) {
                    layer.bindPopup(Object.keys(feature.properties).map(function(k) {
                        return (`<h5>${k}</h5><div>${feature.properties[k]}</div>`);
                    }).join("<hr>"), {
                        maxWidth: 400,
                        maxHeight: 250,
                        scrollbarWidth: 'thin',
                        className: 'leaflet-infoBox'
                    });
                }
            }
        });

        // StART MAP SECTION
        var mapContainer = L.map('mapG20Dashboard', {
            maxZoom: 20,
            minZoom: 1,
            zoomSnap: 0.25,
            zoomControl: false,
            layers: [googleStreet]
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
            "Batas Wilayah": shpFile,
        };
        L.control.layers(baseMaps, overlayMaps, {
            position: 'topright'
        }).addTo(mapContainer);
        L.control.zoom({
            position: 'topright'
        }).addTo(mapContainer);

        mapContainer.doubleClickZoom.disable();

        socket.on("connected", function(resSocket) {
            console.log(socket.id);
            console.log(resSocket);
            console.log('ido1');
        });
        // socketKe2.on("connected", function(resSocket) {
        //     console.log(socketKe2.id);
        //     console.log(resSocket);
        //     console.log('ido1');
        // });
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


        // getGpsId();

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





        getPolda();

        function getPolda() {
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>dashboard/getPolda",
                dataType: "JSON",
                success: function(result) {
                    // console.log(result);
                    $("#overlay").fadeOut(300);
                    let ressData = result;
                    // console.log();

                    $("#openModalPoldaDisplay").html(`
                        <table id="datatablePoldaOnDisplay" class="table dt-responsive w-100" style="font-size: 12px;">
                            <thead>
                                <tr>
                                    <th>Logo</th>
                                    <th>Nama</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="isiModalPoldaDisplay">
                            </tbody>
                        </table>
                    `);
                    var countPoldaDisplay = 0;
                    var listPoldaDisplay = '';


                    var listPoldaPetugasDisplay = '';

                    var listLIPoldaDisplay = '';
                    var listPosYanPoldaDisplay = '';

                    var listPosTerpaduPoldaDisplay = '';
                    var listPoskoPoldaDisplay = '';
                    var listSatPjrPoldaDisplay = '';

                    for (let i = 0; i < ressData.length; i++) {

                        if (ressData[i].latitude && ressData[i].longitude) {
                            id = i;
                            var latitude = parseFloat(ressData[i].latitude);
                            var longitude = parseFloat(ressData[i].longitude);

                            var resource = '';

                            countPoldaDisplay += 1;
                            markerPolda[i] = L.marker([latitude, longitude], {
                                icon: L.divIcon({
                                    // className: 'location-pin',
                                    html: `<img src="<?= base_url('assets/pin.png') ?>" style="width: 50px; margin-top: -35px;margin-left: -21px;">`,
                                    // html: `<img src="<?= url_api() . 'polda/logo/' ?>${ressData[i].logo_polda}" style="width: 25px; margin-top: -35px;margin-left: -14.5px;">`,
                                    iconSize: [5, 5],
                                    iconAnchor: [5, 10]
                                })
                            }).bindPopup(
                                `<div style="width: 450px;">
                                        <div class="row">
                                            <div class="col-md-2 text-center">
                                                <img src="<?= url_api() . 'polda/logo/' ?>${ressData[i].logo_polda}" style="width: 50px;">
                                            </div>
                                            <div class="col-md-10">
                                                <span class="fs-5 text-uppercase">Polda <b>${ressData[i].name_polda}</b></span><br>
                                                <span>${ressData[i].address}</span>
                                            </div>
                                            <div class="col-md-12 mt-3 text-center">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <span class="fs-6">Total <b> Kecelakaan</b> Lalu Lintas</span>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <span class="fs-6">Total <b>Pelanggaran</b> Lalu Lintas</span>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <span class="fs-6">Total <b>Turjagwali</b></span>
                                                    </div>    
                                                    <div class="col-md-3">
                                                        <span class="fs-6">Total <b>Kendaraan Bermotor</b></span>
                                                    </div>
                                                </div>    
                                            </div>
                                            
                                            <div class="col-md-12 mt-3 text-center">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <span class="fs-3"> <b>${ressData[i].lakalantas}</b></span>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <span class="fs-3"> <b>${ressData[i].garlantas}</b></span>
                                                    </div>
                                                    <div class="col-md-3">
                                                    <span class="fs-3"> <b>${ressData[i].turjagwali}</b></span>
                                                    </div>    
                                                    <div class="col-md-3">
                                                        <span class="fs-3"> <b>${ressData[i].sepeda_motor}</b></span>
                                                    </div>
                                                </div>    
                                            </div> 
                                        </div>
                                    </div>
                                            
                                    `, {
                                    minWidth: 100,
                                    maxWidth: 560,
                                    width: 400
                                }).on("click", function(e) {
                                // console.log(e.latlng.lat);
                                mapContainer.flyTo([e.latlng.lat, e.latlng.lng], 8);
                            }).addTo(mapContainer);





                            listPoldaDisplay += `
                                <tr>
                                    <td><img src="<?= url_api(); ?>polda/logo/${ressData[i].logo_polda}" style="width:35px;"></td>
                                    <td>${ressData[i].name_polda}</td>
                                    <td>
                                        <button class="btn" style="margin-left: -13px;margin-top: -13px;"
                                            id="flyToMapFilterPolda${countPoldaDisplay}"    
                                            data-cord=${latitude},${longitude}" >
                                            <i style="color: #495057;" class="fa fas fa-eye"></i>
                                        </button> 
                                    </td>
                                </tr>
                            `;



                            

                            listLIPoldaDisplay += ` 
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading${countPoldaDisplay}" data-nama="${ressData[i].name_polda}" data-poldaid="${ressData[i].id}">
                                        <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse${countPoldaDisplay}" aria-expanded="false" aria-controls="collapse${countPoldaDisplay}">
                                        ${ressData[i].name_polda}
                                        </button>
                                    </h2>
                                    <div id="collapse${countPoldaDisplay}" class="accordion-collapse multi-collapse collapse" aria-labelledby="heading${countPoldaDisplay}" data-bs-parent="#openModalPosPamDisplay">
                                        <div class="accordion-body">
                                            <div class="text-muted" id="isiPoldaPosPam${ressData[i].id}"> 
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            `;
                            listPosYanPoldaDisplay += ` 
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingPosYan${countPoldaDisplay}" data-nama="${ressData[i].name_polda}" data-poldaid="${ressData[i].id}">
                                        <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePosYan${countPoldaDisplay}" aria-expanded="false" aria-controls="collapsePosYan${countPoldaDisplay}">
                                        ${ressData[i].name_polda}
                                        </button>
                                    </h2>
                                    <div id="collapsePosYan${countPoldaDisplay}" class="accordion-collapse collapse" aria-labelledby="headingPosYan${countPoldaDisplay}" data-bs-parent="#openModalPosYanDisplay">
                                        <div class="accordion-body">
                                            <div class="text-muted" id="isiPoldaPosYan${ressData[i].id}"> 
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            `;
                            listPosTerpaduPoldaDisplay += ` 
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingPosTerpadu${countPoldaDisplay}" data-nama="${ressData[i].name_polda}" data-poldaid="${ressData[i].id}">
                                        <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePosTerpadu${countPoldaDisplay}" aria-expanded="false" aria-controls="collapsePosTerpadu${countPoldaDisplay}">
                                        ${ressData[i].name_polda}
                                        </button>
                                    </h2>
                                    <div id="collapsePosTerpadu${countPoldaDisplay}" class="accordion-collapse collapse" aria-labelledby="headingPosTerpadu${countPoldaDisplay}" data-bs-parent="#openModalPosTerpaduDisplay">
                                        <div class="accordion-body">
                                            <div class="text-muted" id="isiPoldaPosTerpadu${ressData[i].id}"> 
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            `;
                            listPoskoPoldaDisplay += ` 
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingPosko${countPoldaDisplay}" data-nama="${ressData[i].name_polda}" data-poldaid="${ressData[i].id}">
                                        <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePosko${countPoldaDisplay}" aria-expanded="false" aria-controls="collapsePosko${countPoldaDisplay}">
                                        ${ressData[i].name_polda}
                                        </button>
                                    </h2>
                                    <div id="collapsePosko${countPoldaDisplay}" class="accordion-collapse collapse" aria-labelledby="headingPosko${countPoldaDisplay}" data-bs-parent="#openModalPoskoDisplay">
                                        <div class="accordion-body">
                                            <div class="text-muted" id="isiPoldaPosko${ressData[i].id}"> 
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            `;
                            listSatPjrPoldaDisplay += ` 
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSatPjr${countPoldaDisplay}" data-nama="${ressData[i].name_polda}" data-poldaid="${ressData[i].id}">
                                        <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSatPjr${countPoldaDisplay}" aria-expanded="false" aria-controls="collapseSatPjr${countPoldaDisplay}">
                                        ${ressData[i].name_polda}
                                        </button>
                                    </h2>
                                    <div id="collapseSatPjr${countPoldaDisplay}" class="accordion-collapse collapse" aria-labelledby="headingSatPjr${countPoldaDisplay}" data-bs-parent="#openModalSatPjrDisplay">
                                        <div class="accordion-body">
                                            <div class="text-muted" id="isiPoldaSatPjr${ressData[i].id}"> 
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            `;


                            listPoldaPetugasDisplay += `
                                <div class="col-md-12">
                                    <div class="cat" style="margin-left: 10px; ">
                                        <div class="btn-group">
                                            <label>
                                                <input type="checkbox" value="${ressData[i].id}" name="poldaPetugas" id="listIsiPoldaPetugas${ressData[i].id}"><span>${ressData[i].name_polda}</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            `;
                            $('#openModalPoldaPetugasDisplay').html(listPoldaPetugasDisplay);
                            
                            
                            $('#isiModalPoldaDisplay').html(listPoldaDisplay);
                            $('#openModalPosPamDisplay').html(listLIPoldaDisplay);
                            $('#openModalPosYanDisplay').html(listPosYanPoldaDisplay);

                            $('#openModalPosTerpaduDisplay').html(listPosTerpaduPoldaDisplay);
                            $('#openModalPoskoDisplay').html(listPoskoPoldaDisplay);
                            $('#openModalSatPjrDisplay').html(listSatPjrPoldaDisplay);
                        }
                    }

                    for (let i = 0; i < countPoldaDisplay; i++) {
                        // console.log(`flyToMapFilterPolda${i+1}`);
                        $(`#flyToMapFilterPolda${i+1}`).on("click", function(e) {
                            var latlong = $(this).data('cord').split(',');
                            var latitude = parseFloat(latlong[0]);
                            var longitude = parseFloat(latlong[1]);
                            mapContainer.flyTo([latitude, longitude], 8);
                        });

                        $(`#heading${i+1}`).on("click", function(e) {
                            serverSideFilter($(this).data('poldaid'));
                        });
                        $(`#headingPosYan${i+1}`).on("click", function(e) {
                            serverSideFilter($(this).data('poldaid'));
                        });


                        $(`#headingPosTerpadu${i+1}`).on("click", function(e) {
                            serverSideFilter($(this).data('poldaid'));
                        });
                        $(`#headingPosko${i+1}`).on("click", function(e) {
                            serverSideFilter($(this).data('poldaid'));
                        });
                        $(`#headingSatPjr${i+1}`).on("click", function(e) {
                            serverSideFilter($(this).data('poldaid'));
                        });
                    }

                    $('#datatablePoldaOnDisplay').DataTable({
                        // responsive: true,

                        // scrollX: true,

                        // sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

                        // buttons: ["excel", "csv", "pdf"],
                        processing: true,
                        oLanguage: {
                            sSearch: 'Search:'
                        },
                        sDom: '<"top"f>t<"bottom"p><"clear">'
                    });

                }
            });
        }



        serverSideGet();
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

            var dummyGetTracking = [];
            var jenis = '';
            var bendera = '';

            var totalDocs = 0;
            var totalPages = 0;

            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>dashboard/getTracking",
                data: {
                    "limit": 500,
                    "page": 1,
                },
                dataType: "JSON",
                success: function(hasilRes) {
                    totalDocs = hasilRes['data']['totalDocs'];
                    totalPages = hasilRes['data']['totalPages'];
                    
                    // LOAD LOOPING PERPAGE GETTRACKING 
                    for (let ix = 0; ix < totalPages+1; ix++) {
                        setTimeout(() => {
                            console.log({a:`looping detik ${ix * 100000}`, b:totalDocs});
                            $.ajax({
                                type: "POST",
                                url: "<?php echo base_url(); ?>dashboard/getTracking",
                                data: {
                                    "limit": 500,
                                    "page": ix+1,
                                },
                                dataType: "JSON",
                                success: function(result) {
                                    // console.log({a:'data TRACKING' b:result});
                                    $("#overlay").fadeOut(300);
 
                                    if(result['data']['docs'].length > 0){
                                        result['data']['docs'].forEach(el => { 
                                            dummyGetTracking.push(el);
                                        }); 
                                        
                                        jenis = '';
                                        bendera = '';
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
                                        $('#totalPetugasDisplay').html(totalDocs);
                                        $("#overlayMenuDisplay").fadeIn(300);
                    
                    
                    
                                        if (dummyGetTracking.length > 0) {
                    
                                            var latBounds = [-300, -1];
                                            var lngBounds = [30, 200];
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
                    
                    
                                                    // var Rlat = Math.random() * (latBounds[1] - latBounds[0] + 1) + latBounds[0];
                                                    // var Rlng = Math.random() * (lngBounds[1] - lngBounds[0] + 1) + lngBounds[0];
                                                    // if(dummyGetTracking[i].status_login == 1){
                                                    if (markerArray[dummyGetTracking[i].id_officer] != null) {
                                                        var fotoPetugas = "";
                    
                                                        markerArray[dummyGetTracking[i].id_officer].remove();
                                                        markerArray[dummyGetTracking[i].id_officer] = L.marker([cordLat, corLong], {
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
                                                        markerArray[dummyGetTracking[i].id_officer] = L.marker([cordLat, corLong], {
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
                    
                    
                    
                    
                    
                                             
                                            
                    
                                        } else {
                                            $("#overlay").fadeOut(300);
                                        }
                                    }else{
                                        
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
                                        // $.ajax({
                                        //     type : "POST",
                                        //     url : "<?php echo base_url(); ?>dashboard/storeEditDayReport", 
                                        //     data : {
                                        //         "t_officer_active" : sortRess.length,
                                        //         "t_officer_active_car" : filterPetugasCarListrik.length + filterPetugasCarFosil.length,
                                        //         "t_officer_active_carListrik" : filterPetugasCarListrik.length,
                                        //         "t_officer_active_carFosil" : filterPetugasCarFosil.length,
                                        //         "t_officer_active_bike" : filterPetugasBikeListrik.length + filterPetugasBikeFosil.length,
                                        //         "t_officer_active_bikeListrik" : filterPetugasBikeListrik.length,
                                        //         "t_officer_active_bikeFosil" : filterPetugasBikeFosil.length,
                                        //         "t_officer_active_not_driving" : filterPetugasNon.length,
                                        //     }, 
                                        //     dataType : "JSON",
                                        //     success : function(result){ 
                                        //         if(result['status'] == true){
                                        //             console.log('update petugas aktif day report');
                                        //         }else{
                                        //             console.log('GAGAL update petugas aktif day report');
                                        //         }
                                        //     }
                                        // });
            
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
                                                $("#myModalPetugasDisplay").modal('show');
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
                                        $("#overlay").fadeOut(300);
                                        startSocket();
                                        autoGetLogout = setInterval(getLogout, 5000);
                                    }
                                },
                                error: function() {
                                    $("#overlay").fadeOut(300);
                                    console.log("gagal connect Tracking");
                                }
                            });
                        }, ix * 100000);
                    }

                    // LOAD PERTAMA KALI GETTRACKING
                    // if(hasilRes['data']['docs'].length > 0){
                    //     hasilRes['data']['docs'].forEach(el => { 
                    //         dummyGetTracking.push(el);
                    //     }); 
                        
                    //     jenis = '';
                    //     bendera = '';
                    //     $('#openModalPetugasDisplay').html(`
                    //         <div id="overlayMenuDisplay">
                    //             <div class="loading">
                    //                 <div class="spinner" style="margin-left: 55px;margin-bottom: 10px;"></div>
                    //                 <p style="color: white; font-size: 15px; margin-left: 3px; text-align: center;">Mohon Tunggu </br> Fitur Akan Aktif Segera</p> 
                    //             </div>
                    //         </div>
                    //         <table id="datatablePetugasOnDisplay" class="table dt-responsive w-100" style="font-size: 12px;">
                    //             <thead>
                    //                 <tr>
                    //                     <th>No</th>
                    //                     <th>Nama</th> 
                    //                     <th>Delegasi</th> 
                    //                     <th></th>
                    //                 </tr>
                    //             </thead>
                    //             <tbody id="isiModalPetugasDisplay">
                    //             </tbody>
                    //         </table>                     
                    //     `);
                    //     $('#totalPetugasDisplay').html(dummyGetTracking.length);
                    //     $("#overlayMenuDisplay").fadeIn(300);
    
    
    
                    //     if (dummyGetTracking.length > 0) {
    
                    //         var latBounds = [-300, -1];
                    //         var lngBounds = [30, 200];
                    //         for (let i = 0; i < dummyGetTracking.length; i++) {
                    //             setTimeout(() => {
    
    
                    //                 var cordLat = parseFloat(dummyGetTracking[i].latitude);
                    //                 var corLong = parseFloat(dummyGetTracking[i].longitude);
    
                    //                 if (dummyGetTracking[i].bawa_penumpang == 1) {
                    //                     // iconflagVip = `<img src="${dummyGetTracking[i].photo_country != '-' ? dummyGetTracking[i].photo_country : '<?php echo base_url(); ?>assets/no_image.png'}" style="width: 35px;margin-left: 10px;height: 30px;">
                    //                     //     <div style="position: absolute;margin-top: -45px;margin-left: 5px;">
                    //                     //         <span class="badge rounded-pill" style="background-color: black; color: white;">${dummyGetTracking[i].name_country}</span>
                    //                     //     </div>`;  
                    //                     iconflagVip = `<div style="width: 35px;margin-left: 10px;height: 30px;"></div>`;
                    //                 } else {
                    //                     iconflagVip = `<div style="width: 35px;margin-left: 10px;height: 30px;"></div>`;
                    //                 }
    
                    //                 jenis = '';
                    //                 if (dummyGetTracking[i].type_vehicle == 'Sepeda Motor' && dummyGetTracking[i].fuel_vehicle == "Fosil") {
    
                    //                     jenis = `
                    //                         <div>
                    //                             <div style="position: relative;">
                    //                                 ${iconflagVip}
                    //                                 <img src="<?php echo base_url(); ?>assets/icon/motor.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">
                    //                             </div>
                    //                             <div style="position: absolute;margin-top: -29px;">
                    //                                 <span class="badge rounded-pill bg-primary">${dummyGetTracking[i].name_officer}</span>
                    //                             </div>
                    //                         </div>`;
                    //                 } else if (dummyGetTracking[i].type_vehicle == 'Mobil' && dummyGetTracking[i].fuel_vehicle == "Fosil") {
                    //                     jenis = `
                    //                     <div>
                    //                         <div style="position: relative;">
                    //                             ${iconflagVip}
                    //                             <img src="<?php echo base_url(); ?>assets/icon/mobil.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">
                    //                         </div>
                    //                         <div style="position: absolute;margin-top: -29px;">
                    //                             <span class="badge rounded-pill bg-primary">${dummyGetTracking[i].name_officer}</span>
                    //                         </div>
                    //                     </div>`;
                    //                 } else if (dummyGetTracking[i].type_vehicle == 'Sepeda Motor' && dummyGetTracking[i].fuel_vehicle == "Listrik") {
                    //                     jenis = `
                    //                     <div>
                    //                         <div>
                    //                             ${iconflagVip}
                    //                             <img src="<?php echo base_url(); ?>assets/icon/gpsIdMotor.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">
                    //                         </div>
                    //                         <div style="margin-top: -30px;">
                    //                             <span class="badge rounded-pill" style="background-color: #169fda">${dummyGetTracking[i].name_officer}</span>
                    //                         </div>
                    //                     </div>`;
                    //                 } else if (dummyGetTracking[i].type_vehicle == 'Mobil' && dummyGetTracking[i].fuel_vehicle == "Listrik") {
                    //                     jenis = `
                    //                     <div>
                    //                         <div>
                    //                             ${iconflagVip}
                    //                             <img src="<?php echo base_url(); ?>assets/icon/gpsIdMobil.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">
                    //                         </div>
                    //                         <div style="margin-top: -30px;">
                    //                             <span class="badge rounded-pill" style="background-color: #169fda">${dummyGetTracking[i].name_officer}</span>
                    //                         </div>
                    //                     </div>`;
                    //                 } else {
    
                    //                     jenis = `
                    //                     <div>
                    //                         <div style="position: relative;">
                    //                             <img src="<?php echo base_url(); ?>assets/icon/topi.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">
                    //                         </div> 
                    //                         <div style="position: absolute;margin-top: -29px;">
                    //                             <span class="badge rounded-pill bg-primary" ${`style="background-color: purple !important"`}>${dummyGetTracking[i].name_officer}</span>
                    //                         </div>
                    //                     </div>`;
                    //                 }
    
                    //                 if (dummyGetTracking[i].photo_officer || dummyGetTracking[i].photo_officer != null) {
                    //                     fotoPetugas = `<img src="<?php echo url_api(); ?>officer/${dummyGetTracking[i].photo_officer}" alt="" class="img-fluid rounded-circle d-block  float-center">`;
                    //                 } else {
                    //                     fotoPetugas = `<img src="<?php echo base_url(); ?>assets/user.jpg" alt="" class="img-fluid rounded-circle d-block  float-center">`;
                    //                 }
    
                    //                 if (dummyGetTracking[i].name_country || dummyGetTracking[i].name_country != '-' || dummyGetTracking[i].name_country != null) {
                    //                     bendera = `${dummyGetTracking[i].name_country}`;
                    //                 } else {
                    //                     bendera = `-`;
                    //                 }
    
                    //                 if (dummyGetTracking[i].photo_country || dummyGetTracking[i].photo_country != '-' || dummyGetTracking[i].photo_country != null) {
                    //                     fotoBendera = `<img src="${dummyGetTracking[i].photo_country}" alt="" style="width: 20%;margin-bottom: 10px;">`;
                    //                 } else {
                    //                     fotoBendera = ``;
                    //                 }
    
    
                    //                 // var Rlat = Math.random() * (latBounds[1] - latBounds[0] + 1) + latBounds[0];
                    //                 // var Rlng = Math.random() * (lngBounds[1] - lngBounds[0] + 1) + lngBounds[0];
                    //                 // if(dummyGetTracking[i].status_login == 1){
                    //                 if (markerArray[dummyGetTracking[i].id_officer] != null) {
                    //                     var fotoPetugas = "";
    
                    //                     markerArray[dummyGetTracking[i].id_officer].remove();
                    //                     markerArray[dummyGetTracking[i].id_officer] = L.marker([cordLat, corLong], {
                    //                         renderer: myRenderer,
                    //                         icon: L.divIcon({
                    //                             //   className: 'location-pin',
                    //                             html: jenis,
                    //                             iconSize: [5, 5],
                    //                             iconAnchor: [5, 10]
                    //                             // iconAnchor: [10, 33]
                    //                         })
                    //                     }).bindPopup(`
                    //                             <div class="text-center" style="width: 300px;"> 
                    //                                 <div class="row mt-3"> 
                    //                                     <div class="col-md-12">
                    //                                         ${fotoBendera}
                    //                                     </div>
                    //                                     ${call_wa_dan_biasa(dummyGetTracking[i].handphone, dummyGetTracking[i].id_officer, 'no-encrypt')}
                    //                                 </div>
                        
                        
                    //                                     <div class="row text-start mt-3">
                    //                                         <div class="col-md-4">
                    //                                             <span style="font-size: 12px;font-weight: bold;">Nama</span>  
                    //                                         </div>
                    //                                         <div class="col-md-1">
                    //                                             :
                    //                                         </div>
                    //                                         <div class="col-md-7">
                    //                                             <span style="font-size: 12px;">${dummyGetTracking[i].rank_officer} - ${dummyGetTracking[i].name_officer}</span>
                    //                                         </div> 
                    
                    //                                         <div class="col-md-4">
                    //                                             <span style="font-size: 12px;font-weight: bold;">PAM</span>  
                    //                                         </div>
                    //                                         <div class="col-md-1">
                    //                                             :
                    //                                         </div>
                    //                                         <div class="col-md-7">
                    //                                             <span style="font-size: 12px;">${dummyGetTracking[i].pam_officer != null ? dummyGetTracking[i].pam_officer : '-'}</span>
                    //                                         </div> 
                    //                                         <div class="col-md-4">
                    //                                             <span style="font-size: 12px;font-weight: bold;">Delegasi</span>  
                    //                                         </div>
                    //                                         <div class="col-md-1">
                    //                                             :
                    //                                         </div>
                    //                                         <div class="col-md-7">
                    //                                             <span style="font-size: 12px;">${bendera}</span>
                    //                                         </div> 
                    
                    //                                         <div class="col-md-4">
                    //                                             <span style="font-size: 12px;font-weight: bold;">Status Login</span>  
                    //                                         </div>
                    //                                         <div class="col-md-1">
                    //                                             :
                    //                                         </div>
                    //                                         <div class="col-md-7">
                    //                                             ${dummyGetTracking[i].status_login == 1 ? '<span class="badge rounded-pill bg-primary" style="font-size: 12px;">Aktif</span>' : '<span class="badge rounded-pill bg-danger" style="font-size: 12px;">Tidak Aktif</span>'}
                    //                                         </div> 
                            
                    //                                         <div class="col-md-12 text-center  mt-3">
                    //                                             <span class="badge rounded-pill bg-primary" style="font-size: 12px;">Lokasi Petugas</span>  
                    //                                             <p style="font-size: 12px;" id="lokasiMarker${dummyGetTracking[i].id_officer}"></p>
                    //                                         </div> 
                    //                                     </div>  
                                                    
                    //                             </div>
                    //                         `).addTo(mapContainer).on('click', function(e) {
                    //                         // console.log(e.latlng);
                    //                         $.ajax({
                    //                             type: "POST",
                    //                             url: "<?php echo base_url(); ?>dashboard/getAddres",
                    //                             data: {
                    //                                 "lat": e.latlng['lat'],
                    //                                 "lng": e.latlng['lng'],
                    //                             },
                    //                             dataType: "JSON",
                    //                             success: function(result) {
                    //                                 // console.log(result['responseMessage']);
                    //                                 $(`#lokasiMarker${dummyGetTracking[i].id_officer}`).html(`${result['responseMessage']}`);
                    //                             }
                    //                         });
                    //                     });
                    //                 } else {
                    //                     markerArray[dummyGetTracking[i].id_officer] = L.marker([cordLat, corLong], {
                    //                         renderer: myRenderer,
                    //                         icon: L.divIcon({
                    //                             // className: 'location-pin',
                    //                             html: jenis,
                    //                             iconSize: [5, 5],
                    //                             iconAnchor: [5, 10]
                    //                             // iconAnchor: [10, 33]
                    //                         })
                    //                     }).bindPopup(`
                    //                             <div class="text-center" style="width: 300px;"> 
                    //                                 <div class="row mt-3"> 
                    //                                     <div class="col-md-12">
                    //                                         ${fotoBendera}
                    //                                     </div>
                    //                                     ${call_wa_dan_biasa(dummyGetTracking[i].handphone, dummyGetTracking[i].id_officer, 'no-encrypt')}
                    //                                 </div>
    
                                                    
                    //                                 <div class="row text-start mt-3">
                    //                                     <div class="col-md-4">
                    //                                         <span style="font-size: 12px;font-weight: bold;">Nama</span>  
                    //                                     </div>
                    //                                     <div class="col-md-1">
                    //                                         :
                    //                                     </div>
                    //                                     <div class="col-md-7">
                    //                                         <span style="font-size: 12px;">${dummyGetTracking[i].rank_officer} - ${dummyGetTracking[i].name_officer}</span>
                    //                                     </div>  
                                                    
                    //                                     <div class="col-md-4">
                    //                                         <span style="font-size: 12px;font-weight: bold;">PAM</span>  
                    //                                     </div> 
                    //                                     <div class="col-md-1">
                    //                                         :
                    //                                     </div>
                    //                                     <div class="col-md-7">
                    //                                         <span style="font-size: 12px;">${dummyGetTracking[i].pam_officer != null ? dummyGetTracking[i].pam_officer : '-'}</span>
                    //                                     </div>  
                    //                                     <div class="col-md-4">
                    //                                         <span style="font-size: 12px;font-weight: bold;">Delegasi</span>  
                    //                                     </div> 
                    //                                     <div class="col-md-1">
                    //                                         :
                    //                                     </div>
                    //                                     <div class="col-md-7">
                    //                                         <span style="font-size: 12px;">${bendera}</span>
                    //                                     </div>
    
                    //                                     <div class="col-md-4">
                    //                                         <span style="font-size: 12px;font-weight: bold;">Status Login</span>  
                    //                                     </div>
                    //                                     <div class="col-md-1">
                    //                                         :
                    //                                     </div>
                    //                                     <div class="col-md-7">
                    //                                     ${dummyGetTracking[i].status_login == 1 ? '<span class="badge rounded-pill bg-primary" style="font-size: 12px;">Aktif</span>' : '<span class="badge rounded-pill bg-danger" style="font-size: 12px;">Tidak Aktif</span>'}
                    //                                     </div> 
    
                    //                                     <div class="col-md-12 text-center  mt-3">
                    //                                         <span class="badge rounded-pill bg-primary" style="font-size: 12px;">Lokasi Petugas</span>  
                    //                                         <p style="font-size: 12px;" id="lokasiMarker${dummyGetTracking[i].id_officer}"></p>
                    //                                     </div> 
                    //                                 </div> 
                                                    
                    //                             </div>
                    //                         `).addTo(mapContainer).on('click', function(e) {
                    //                         // console.log(e.latlng);
                    //                         $.ajax({
                    //                             type: "POST",
                    //                             url: "<?php echo base_url(); ?>dashboard/getAddres",
                    //                             data: {
                    //                                 "lat": e.latlng['lat'],
                    //                                 "lng": e.latlng['lng'],
                    //                             },
                    //                             dataType: "JSON",
                    //                             success: function(result) {
                    //                                 // console.log(result['responseMessage']);
                    //                                 $(`#lokasiMarker${dummyGetTracking[i].id_officer}`).html(`${result['responseMessage']}`);
                    //                             }
                    //                         });
                    //                     });
                    //                 }
                    //                 // }
    
    
    
                    //                 var iniNomor;
                    //                 if (dummyGetTracking[i].handphone != null && dummyGetTracking[i].handphone != '0') {
                    //                     let nomorDepan1 = dummyGetTracking[i].handphone.substring(0, 2);
                    //                     if (nomorDepan1 === "62") {
                    //                         iniNomor = dummyGetTracking[i].handphone;
                    //                     } else if (nomorDepan1 === "08") {
                    //                         iniNomor = "62" + dummyGetTracking[i].handphone.substring(1);
                    //                     } else if (nomorDepan1 === "+6") {
                    //                         iniNomor = dummyGetTracking[i].handphone.substring(1);
                    //                     } else {
                    //                         iniNomor = dummyGetTracking[i].handphone;
                    //                     }
                    //                 } else {
                    //                     iniNomor = 0;
                    //                 }
    
                    //                 countlistDisplay += 1;
                    //                 listDisplay += `  
                    //                     <tr>
                    //                         <td> ${dummyGetTracking[i].status_login == 1 ? `<span class="badge rounded-pill bg-primary" style="font-size: 10px;">${countlistDisplay}</span>` : `<span class="badge rounded-pill bg-danger" style="font-size: 10px;">${countlistDisplay}</span>`} </td>
                    //                         <td><a href="<?php echo base_url() ?>operasi/Petugas" target="_blank">${dummyGetTracking[i].rank_officer ? dummyGetTracking[i].rank_officer : '' } - ${dummyGetTracking[i].name_officer}</a></td>
                    //                         <td><a href="<?php echo base_url() ?>operasi/Akun" target="_blank"> ${dummyGetTracking[i].name_country ? dummyGetTracking[i].name_country : '-'} </a></td>
                    //                         <td> 
                    //                             ${dummyGetTracking[i].status_login == 1 ? `<span style="font-size: 10px; display:none;">Sudah Aktif</span>` : `<span style="font-size: 10px; display:none;">Tidak Aktif</span>`}
                    //                             <div style="display: flex;">
                    //                                 <a class="btn" style="margin-top: -7px; color: #495057;" href="https://api.whatsapp.com/send?phone=${iniNomor}" target="_blank"><i class="fa fas fa-phone "></i></a> 
                    //                                 <a href="https://t.me/+${iniNomor}" target="_blank" style="margin-right: 10px;font-size: 17px;">
                    //                                 <i class="fab fa-telegram"></i>
                    //                                 </a>
                    //                                 <a class="btn" style="margin-left: -13px;margin-top: -7px; color: #495057;" href="<?php echo base_url('zoom'); ?>" target="_blank" onClick="sendZoomNonEncrypt('${dummyGetTracking[i].id_officer}')"><i class="fa  fas fa-video "></i></a> 
                    //                                 <button class="btn" style="margin-left: -13px;margin-top: -13px;"
                    //                                     id="listPetugasClickDisplay${countlistDisplay}"   
                    //                                     data-id="${dummyGetTracking[i].id_officer}"
                    //                                     data-nama="${dummyGetTracking[i].name_team}"  
                    //                                     data-akun="${dummyGetTracking[i].name_account}" 
                    //                                     data-nrp="${dummyGetTracking[i].nrp_user}"
                    //                                     data-telp="${iniNomor}"
                    //                                     data-cord="${dummyGetTracking[i].latitude},${dummyGetTracking[i].longitude}" >
                    //                                     <i style="color: #495057;" class="fa fas fa-eye"></i>
                    //                                 </button>
                    //                                 <div class="switch" style="margin-left: -11px;">
                    //                                     <input class="flag" type="checkbox" id="flagDisplay${countlistDisplay}" 
                    //                                     data-id="${dummyGetTracking[i].id_officer}"  
                    //                                     data-nama="${dummyGetTracking[i].name_team}"  
                    //                                     data-akun="${dummyGetTracking[i].name_account}" 
                    //                                     data-nrp="${dummyGetTracking[i].nrp_user}"
                    //                                     data-telp="${iniNomor}"
                    //                                     data-cord="${dummyGetTracking[i].latitude},${dummyGetTracking[i].longitude}"
                    //                                     data-toggle="toggle"  data-onstyle="success" data-offstyle="danger" data-on="Approved" data-off="Not Approved" data-size="lg"> 
                    //                                     <label for="flagDisplay${countlistDisplay}"></label>
                    //                                 </div>
                    //                             </div> 
                    //                         </td>
                    //                     </tr>
                    //                 `;
                    //                 $('#isiModalPetugasDisplay').html(listDisplay);
                    //             }, i * 500);
                    //         }
    
    
    
    
    
                                
                            
    
                    //     } else {
                    //         $("#overlay").fadeOut(300);
                    //     }
                    // }
               
                    
                    
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
            // socketKe2.on('sendToAdminMobile', function(ress) {
            //     console.log(`get Track Nama Petugas: A. ( ${ress.nrp_user} ${ress.name_officer} ) - ${ress.type_vehicle}`);
            //     // console.log(ress); 
            //     var flagVip = '';
            //     var iconflagVip = '';

            //     // console.log(result); 

            //     var cordLat = parseFloat(ress.latitude);
            //     var corLong = parseFloat(ress.longitude);
            //     var bendera = '';
            //     var jenis = '';





            //     // for (let i = 0; i < ress.length; i++) {  


            //     // if(ress.type_vehicle == 'Sepeda Motor'){
            //     //     // jenis = `<img src="<?php echo base_url(); ?>assets/admin/images/mobil.png"><div class="pin"></div><div class="pulse"></div>`;
            //     //     jenis = `<img src="<?php echo base_url(); ?>assets/icon/motor.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">`;
            //     // }else if(ress.type_vehicle == 'Mobil'){
            //     //     jenis = `<img src="<?php echo base_url(); ?>assets/icon/mobil.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">`;
            //     // }else{
            //     //     // jenis = `<img src="<?php echo base_url(); ?>assets/admin/images/sepedaMotor.png"><div class="pin"></div><div class="pulse"></div>`
            //     //     jenis = `<img src="<?php echo base_url(); ?>assets/icon/topi.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">`;
            //     // } 


            //     if (ress.bawa_penumpang == 1) {
            //         // iconflagVip = `<a href="javascript:void(0);"><img src="${ress.photo_country != '-' ? ress.photo_country : '<?php echo base_url(); ?>assets/no_image.png'}" style="width: 35px;margin-left: 10px;height: 30px;"></a>
            //         //             <div style="position: absolute;margin-top: -45px;margin-left: 5px;">
            //         //                 <span class="badge rounded-pill" style="background-color: black; color: white;">${ress.name_country}</span>
            //         //             </div>`;  
            //         iconflagVip = `<div style="width: 35px;margin-left: 10px;height: 30px;"></div>`;
            //     } else {
            //         iconflagVip = `<div style="width: 35px;margin-left: 10px;height: 30px;"></div>`;
            //     }

            //     jenis = '';
            //     if (ress.type_vehicle == 'Sepeda Motor' && ress.fuel_vehicle == "Fosil") {



            //         jenis = `
            //                 <div>
            //                     <div style="position: relative;">
            //                         ${iconflagVip}
            //                         <img src="<?php echo base_url(); ?>assets/icon/motor.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">
            //                     </div>
            //                     <div style="position: absolute;margin-top: -29px;">
            //                         <span class="badge rounded-pill bg-primary">${ress.name_officer}</span>
            //                     </div>
            //                 </div>`;
            //     } else if (ress.type_vehicle == 'Mobil' && ress.fuel_vehicle == "Fosil") {



            //         jenis = `
            //                 <div>
            //                     <div style="position: relative;">
            //                         ${iconflagVip}
            //                         <img src="<?php echo base_url(); ?>assets/icon/mobil.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">
            //                     </div>
            //                     <div style="position: absolute;margin-top: -29px;">
            //                         <span class="badge rounded-pill bg-primary">${ress.name_officer}</span>
            //                     </div>
            //                 </div>`;
            //     } else if (ress.type_vehicle == 'Sepeda Motor' && ress.fuel_vehicle == "Listrik") {



            //         jenis = `
            //                 <div>
            //                     <div>
            //                         ${iconflagVip}
            //                         <img src="<?php echo base_url(); ?>assets/icon/gpsIdMotor.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">
            //                     </div>
            //                     <div style="margin-top: -30px;">
            //                         <span class="badge rounded-pill" style="background-color: #169fda">${ress.name_officer}</span>
            //                     </div>
            //                 </div>`;
            //     } else if (ress.type_vehicle == 'Mobil' && ress.fuel_vehicle == "Listrik") {



            //         jenis = `
            //                 <div>
            //                     <div>
            //                         ${iconflagVip}
            //                         <img src="<?php echo base_url(); ?>assets/icon/gpsIdMobil.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">
            //                     </div>
            //                     <div style="margin-top: -30px;">
            //                         <span class="badge rounded-pill" style="background-color: #169fda">${ress.name_officer}</span>
            //                     </div>
            //                 </div>`;
            //     } else {



            //         jenis = `
            //                 <div>
            //                     <div style="position: relative;">
            //                         <img src="<?php echo base_url(); ?>assets/icon/topi.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">
            //                     </div> 
            //                     <div style="position: absolute;margin-top: -29px;">
            //                         <span class="badge rounded-pill bg-primary" ${`style="background-color: purple !important"`}>${ress.name_officer}</span>
            //                     </div>
            //                 </div>`;
            //     }

            //     if (ress.photo_officer || ress.photo_officer != null) {
            //         fotoPetugas = `<img src="<?php echo url_api(); ?>officer/${ress.photo_officer}" alt="" class="img-fluid rounded-circle d-block  float-center">`;
            //     } else {
            //         fotoPetugas = `<img src="<?php echo base_url(); ?>assets/user.jpg" alt="" class="img-fluid rounded-circle d-block  float-center">`;
            //     }

            //     if (ress.name_country || ress.name_country != '-' || ress.name_country != null) {
            //         bendera = `${ress.name_country}`;
            //     } else {
            //         bendera = `-`;
            //     }

            //     if (ress.photo_country || ress.photo_country != '-' || ress.photo_country != null) {
            //         fotoBendera = `<img src="${ress.photo_country}" alt="" style="width: 20%;margin-bottom: 10px;">`;
            //     } else {
            //         fotoBendera = ``;
            //     }

            //     // if(ress.status_login == 1){
            //     if (markerArray[ress.id_officer] != null) {
            //         markerArray[ress.id_officer].remove();
            //         markerArray[ress.id_officer] = L.marker([ress.latitude, ress.longitude], {
            //             renderer: myRenderer,
            //             icon: L.divIcon({
            //                 //   className: 'location-pin',
            //                 html: jenis,
            //                 iconSize: [5, 5],
            //                 iconAnchor: [5, 10]
            //                 // iconAnchor: [10, 33]
            //             })
            //         }).bindPopup(`
            //                         <div class="text-center" style="width: 300px;"> 
            //                             <div class="row mt-3"> 
            //                                 <div class="col-md-12">
            //                                     <a href="javascript:void(0);">
            //                                     ${fotoBendera}
            //                                     </a>
            //                                 </div>
            //                                 ${call_wa_dan_biasa(ress.handphone, ress.id_officer, 'no-encrypt')}
            //                             </div>
            
            
            //                                 <div class="row text-start mt-3">
            //                                     <div class="col-md-4">
            //                                         <span style="font-size: 12px;font-weight: bold;">Nama</span>  
            //                                     </div>
            //                                     <div class="col-md-1">
            //                                         :
            //                                     </div>
            //                                     <div class="col-md-7">
            //                                         <span style="font-size: 12px;">${ress.rank_officer} - ${ress.name_officer}</span>
            //                                     </div> 
        
            //                                     <div class="col-md-4">
            //                                         <span style="font-size: 12px;font-weight: bold;">PAM</span>  
            //                                     </div>
            //                                     <div class="col-md-1">
            //                                         :
            //                                     </div>
            //                                     <div class="col-md-7">
            //                                         <span style="font-size: 12px;">${ress.pam_officer != null ? ress.pam_officer : '-'}</span>
            //                                     </div> 
            //                                     <div class="col-md-4">
            //                                         <span style="font-size: 12px;font-weight: bold;">Delegasi</span>  
            //                                     </div>
            //                                     <div class="col-md-1">
            //                                         :
            //                                     </div>
            //                                     <div class="col-md-7">
            //                                         <span style="font-size: 12px;">${bendera}</span>
            //                                     </div> 
        
            //                                     <div class="col-md-4">
            //                                         <span style="font-size: 12px;font-weight: bold;">Status Login</span>  
            //                                     </div>
            //                                     <div class="col-md-1">
            //                                         :
            //                                     </div>
            //                                     <div class="col-md-7">
            //                                         ${ress.status_login == 1 ? '<span class="badge rounded-pill bg-primary" style="font-size: 12px;">Aktif</span>' : '<span class="badge rounded-pill bg-danger" style="font-size: 12px;">Tidak Aktif</span>'}
            //                                     </div> 
                
            //                                     <div class="col-md-12 text-center  mt-3">
            //                                         <span class="badge rounded-pill bg-primary" style="font-size: 12px;">Lokasi Petugas</span>  
            //                                         <p style="font-size: 12px;" id="lokasiMarker${ress.id_officer}"></p>
            //                                     </div> 
            //                                 </div>  
                                        
            //                         </div>
            //                     `).addTo(mapContainer).on('click', function(e) {
            //             // console.log(e.latlng);
            //             $.ajax({
            //                 type: "POST",
            //                 url: "<?php echo base_url(); ?>dashboard/getAddres",
            //                 data: {
            //                     "lat": e.latlng['lat'],
            //                     "lng": e.latlng['lng'],
            //                 },
            //                 dataType: "JSON",
            //                 success: function(result) {
            //                     // console.log(result['responseMessage']);
            //                     $(`#lokasiMarker${ress.id_officer}`).html(`${result['responseMessage']}`);
            //                 }
            //             });
            //         });
            //     } else {
            //         markerArray[ress.id_officer] = L.marker([ress.latitude, ress.longitude], {
            //             renderer: myRenderer,
            //             icon: L.divIcon({
            //                 //   className: 'location-pin',
            //                 html: jenis,
            //                 iconSize: [5, 5],
            //                 iconAnchor: [5, 10]
            //                 // iconAnchor: [10, 33]
            //             })
            //         }).bindPopup(`
            //                         <div class="text-center" style="width: 300px;"> 
            //                             <div class="row mt-3"> 
            //                                 <div class="col-md-12">
            //                                     ${fotoBendera}
            //                                 </div>
            //                                 ${call_wa_dan_biasa(ress.handphone, ress.id_officer, 'no-encrypt')}
            //                             </div>
            
            
            //                                 <div class="row text-start mt-3">
            //                                     <div class="col-md-4">
            //                                         <span style="font-size: 12px;font-weight: bold;">Nama</span>  
            //                                     </div>
            //                                     <div class="col-md-1">
            //                                         :
            //                                     </div>
            //                                     <div class="col-md-7">
            //                                         <span style="font-size: 12px;">${ress.rank_officer} - ${ress.name_officer}</span>
            //                                     </div> 

            //                                     <div class="col-md-4">
            //                                         <span style="font-size: 12px;font-weight: bold;">PAM</span>  
            //                                     </div>
            //                                     <div class="col-md-1">
            //                                         :
            //                                     </div>
            //                                     <div class="col-md-7">
            //                                         <span style="font-size: 12px;">${ress.pam_officer != null ? ress.pam_officer : '-'}</span>
            //                                     </div> 
            //                                     <div class="col-md-4">
            //                                         <span style="font-size: 12px;font-weight: bold;">Delegasi</span>  
            //                                     </div>
            //                                     <div class="col-md-1">
            //                                         :
            //                                     </div>
            //                                     <div class="col-md-7">
            //                                         <span style="font-size: 12px;">${bendera}</span>
            //                                     </div> 
                
            //                                     <div class="col-md-12 text-center  mt-3">
            //                                         <span class="badge rounded-pill bg-primary" style="font-size: 12px;">Lokasi Petugas</span>  
            //                                         <p style="font-size: 12px;" id="lokasiMarker${ress.id_officer}"></p>
            //                                     </div> 
            //                                 </div>  
                                        
            //                         </div>
            //                     `).addTo(mapContainer).on('click', function(e) {
            //             // console.log(e.latlng);
            //             $.ajax({
            //                 type: "POST",
            //                 url: "<?php echo base_url(); ?>dashboard/getAddres",
            //                 data: {
            //                     "lat": e.latlng['lat'],
            //                     "lng": e.latlng['lng'],
            //                 },
            //                 dataType: "JSON",
            //                 success: function(result) {
            //                     // console.log(result['responseMessage']);
            //                     $(`#lokasiMarker${ress.id_officer}`).html(`${result['responseMessage']}`);
            //                 }
            //             });
            //         });
            //     }
            //     // }


            //     // } 


            // });
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
                    if (ress.length > 0) {
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





        samsatClusterGroup = L.markerClusterGroup({
            iconCreateFunction: function(cluster) {
                return new L.DivIcon({
                    html: `
                <div style="width: 35px; height: 35px; border-radius: 50%; background-color:#420fd4;text-align: center;margin-top: -1px;margin-left: -1px;">
                <b style="top: 8px;position: relative; font-size: 12px; color:#ffffff;"><i class="mdi mdi-police-badge"></i>${cluster.getChildCount()}</b>
                </div>`
                });
            }
        });
        troubleSpotClusterGroup = L.markerClusterGroup({
            iconCreateFunction: function(cluster) {
                return new L.DivIcon({
                    html: `
                <div style="width: 35px; height: 35px; border-radius: 50%; background-color:#a50000;text-align: center;margin-top: -1px;margin-left: -1px;">
                <b style="top: 8px;position: relative; font-size: 12px; color:#ffffff;"><i class="mdi mdi-alert"></i>${cluster.getChildCount()}</b>
                </div>`
                });
            }
        });
        blankSpotClusterGroup = L.markerClusterGroup({
            iconCreateFunction: function(cluster) {
                return new L.DivIcon({
                    html: `
                <div style="width: 35px; height: 35px; border-radius: 50%; background-color:#a50000;text-align: center;margin-top: -1px;margin-left: -1px;">
                <b style="top: 8px;position: relative; font-size: 12px; color:#ffffff;"><i class="mdi mdi-alert"></i>${cluster.getChildCount()}</b>
                </div>`
                });
            }
        });
        restAreaClusterGroup = L.markerClusterGroup({
            iconCreateFunction: function(cluster) {
                return new L.DivIcon({
                    html: `
                <div style="width: 35px; height: 35px; border-radius: 50%; background-color:#007bb5;text-align: center;margin-top: -1px;margin-left: -1px;">
                <b style="top: 8px;position: relative; font-size: 12px; color:#ffffff;"><i class="mdi mdi-alert"></i>${cluster.getChildCount()}</b>
                </div>`
                });
            }
        });
        posPamClusterGroup = L.markerClusterGroup({
            iconCreateFunction: function(cluster) {
                return new L.DivIcon({
                    html: `
                <div style="width: 35px; height: 35px; border-radius: 50%; background-color:#420fd4;text-align: center;margin-top: -1px;margin-left: -1px;">
                <b style="top: 8px;position: relative; font-size: 12px; color:#ffffff;"><i class="mdi mdi-alert"></i>${cluster.getChildCount()}</b>
                </div>`
                });
            }
        });
        posYanClusterGroup = L.markerClusterGroup({
            iconCreateFunction: function(cluster) {
                return new L.DivIcon({
                    html: `
                <div style="width: 35px; height: 35px; border-radius: 50%; background-color:#420fd4;text-align: center;margin-top: -1px;margin-left: -1px;">
                <b style="top: 8px;position: relative; font-size: 12px; color:#ffffff;"><i class="mdi mdi-alert"></i>${cluster.getChildCount()}</b>
                </div>`
                });
            }
        });

        posTerpaduClusterGroup = L.markerClusterGroup({
            iconCreateFunction: function(cluster) {
                return new L.DivIcon({
                    html: `
                <div style="width: 35px; height: 35px; border-radius: 50%; background-color:#420fd4;text-align: center;margin-top: -1px;margin-left: -1px;">
                <b style="top: 8px;position: relative; font-size: 12px; color:#ffffff;"><i class="mdi mdi-alert"></i>${cluster.getChildCount()}</b>
                </div>`
                });
            }
        });
        poskoClusterGroup = L.markerClusterGroup({
            iconCreateFunction: function(cluster) {
                return new L.DivIcon({
                    html: `
                <div style="width: 35px; height: 35px; border-radius: 50%; background-color:#420fd4;text-align: center;margin-top: -1px;margin-left: -1px;">
                <b style="top: 8px;position: relative; font-size: 12px; color:#ffffff;"><i class="mdi mdi-alert"></i>${cluster.getChildCount()}</b>
                </div>`
                });
            }
        });
        satPjrClusterGroup = L.markerClusterGroup({
            iconCreateFunction: function(cluster) {
                return new L.DivIcon({
                    html: `
                <div style="width: 35px; height: 35px; border-radius: 50%; background-color:#fef607;text-align: center;margin-top: -1px;margin-left: -1px;">
                <b style="top: 8px;position: relative; font-size: 12px; color:#000000;"><i class="mdi mdi-alert"></i>${cluster.getChildCount()}</b>
                </div>`
                });
            }
        });
        gerbangTolClusterGroup = L.markerClusterGroup({
            iconCreateFunction: function(cluster) {
                return new L.DivIcon({
                    html: `
                <div style="width: 35px; height: 35px; border-radius: 50%; background-color:#a0b328;text-align: center;margin-top: -1px;margin-left: -1px;">
                <b style="top: 8px;position: relative; font-size: 12px; color:#ffffff;"><i class="fa fas fa-torii-gate"></i>${cluster.getChildCount()}</b>
                </div>`
                });
            }
        });

        satPasClusterGroup = L.markerClusterGroup({
            iconCreateFunction: function(cluster) {
                return new L.DivIcon({
                    html: `
                <div style="width: 35px; height: 35px; border-radius: 50%; background-color:#a50000;text-align: center;margin-top: -1px;margin-left: -1px;">
                <b style="top: 8px;position: relative; font-size: 12px; color:#ffffff;"><i class="mdi mdi-alert"></i>${cluster.getChildCount()}</b>
                </div>`
                });
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

        function serverSideFilter(polda_id) {
            // userDataTable.draw();
            console.log(polda_id);

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


            // $("#kegiatanDisplay").on("change", function(e) {
            //     if ($(this).is(':checked')) {

            //     }else{
            for (let i = 0; i < markerJadwal.length; i++) {
                if (markerJadwal[i]) {
                    jadwalClusterGroup.removeLayer(markerJadwal[i]);
                    // mapContainer.removeLayer(jadwalClusterGroup);
                }
            }
            markerJadwal = new Array();
            //     }
            // });


            // $("#cctvDisplay").on("change", function(e) {
            //     if ($(this).is(':checked')) {

            //     }else{ 
            for (let i = 0; i < markerCCTV.length; i++) {
                // mapContainer.removeLayer(markerCCTV[i]);
                if (markerCCTV[i]) {
                    cctvClusterGroup.removeLayer(markerCCTV[i]);
                }
            }
            markerCCTV = new Array();
            //     }
            // });


            // $("#samsatDisplay").on("change", function(e) {
            //     if ($(this).is(':checked')) {

            //     }else{ 
            for (let i = 0; i < markerSamsat.length; i++) {
                // mapContainer.removeLayer(markerSamsat[i]);
                if (markerSamsat[i]) {
                    samsatClusterGroup.removeLayer(markerSamsat[i]);
                }
            }
            markerSamsat = new Array();
            //     }
            // });


            // $("#samsatDisplay").on("change", function(e) {
            //     if ($(this).is(':checked')) {

            //     }else{  
            for (let i = 0; i < markerTroubleSpot.length; i++) {
                // mapContainer.removeLayer(markerTroubleSpot[i]);
                if (markerTroubleSpot[i]) {
                    troubleSpotClusterGroup.removeLayer(markerTroubleSpot[i]);
                }
            }
            markerTroubleSpot = new Array();
            //     }
            // });


            // $("#blank_spotDisplay").on("change", function(e) {
            //     if ($(this).is(':checked')) {

            //     }else{ 
            for (let i = 0; i < markerBlankSpot.length; i++) {
                // mapContainer.removeLayer(markerBlankSpot[i]);
                if (markerBlankSpot[i]) {
                    blankSpotClusterGroup.removeLayer(markerBlankSpot[i]);
                }
            }
            markerBlankSpot = new Array();
            //     }
            // });  


            // $("#restAreaDisplay").on("change", function(e) {
            //     if ($(this).is(':checked')) {

            //     }else{
            for (let i = 0; i < markerRestArea.length; i++) {
                // mapContainer.removeLayer(markerRestArea[i]);
                if (markerRestArea[i]) {
                    restAreaClusterGroup.removeLayer(markerRestArea[i]);
                }
            }
            markerRestArea = new Array();
            //     }
            // }); 

            for (let i = 0; i < markerPosPam.length; i++) {
                // mapContainer.removeLayer(markerPosPam[i]);
                if (markerPosPam[i]) {
                    posPamClusterGroup.removeLayer(markerPosPam[i]);
                }
            }
            markerPosPam = new Array();

            for (let i = 0; i < markerPosYan.length; i++) {
                // mapContainer.removeLayer(markerPosYan[i]);
                if (markerPosYan[i]) {
                    posYanClusterGroup.removeLayer(markerPosYan[i]);
                }
            }
            markerPosYan = new Array();

            for (let i = 0; i < markerPosTerpadu.length; i++) {
                // mapContainer.removeLayer(markerPosTerpadu[i]);
                if (markerPosTerpadu[i]) {
                    posTerpaduClusterGroup.removeLayer(markerPosTerpadu[i]);
                }
            }
            markerPosTerpadu = new Array();

            for (let i = 0; i < markerPosko.length; i++) {
                // mapContainer.removeLayer(markerPosko[i]);
                if (markerPosko[i]) {
                    poskoClusterGroup.removeLayer(markerPosko[i]);
                }
            }
            markerPosko = new Array();

            for (let i = 0; i < markerSatPjr.length; i++) {
                // mapContainer.removeLayer(markerSatPjr[i]);
                if (markerSatPjr[i]) {
                    satPjrClusterGroup.removeLayer(markerSatPjr[i]);
                }
            }
            markerSatPjr = new Array();


            // $("#gerbangtolDisplay").on("change", function(e) {
            //     if ($(this).is(':checked')) {

            //     }else{
            for (let i = 0; i < markerGerbangtol.length; i++) {
                // mapContainer.removeLayer(markerGerbangtol[i]);
                if (markerGerbangtol[i]) {
                    gerbangTolClusterGroup.removeLayer(markerGerbangtol[i]);
                }
            }
            markerGerbangtol = new Array();
            //     }
            // });


            // $("#satPasDisplay").on("change", function(e) {
            //     if ($(this).is(':checked')) {

            //     }else{
            for (let i = 0; i < markerSatPas.length; i++) {
                // mapContainer.removeLayer(markerSatPas[i]);
                if (markerSatPas[i]) {
                    satPasClusterGroup.removeLayer(markerSatPas[i]);
                }
            }
            markerSatPas = new Array();
            //     }
            // });

            for (let i = 0; i < markerFasum.length; i++) {
                if (markerFasum[i]) {
                    mapContainer.removeLayer(markerFasum[i]);
                }
            }
            markerFasum = new Array();


            // $("#fasumKhususDisplay").on("change", function(e) {
            //     if ($(this).is(':checked')) {

            //     }else{
            for (let i = 0; i < markerFasumKhusus.length; i++) {
                if (markerFasumKhusus[i]) {
                    fasumKhususClusterGroup.removeLayer(markerFasumKhusus[i]);
                }
            }
            markerFasumKhusus = new Array();
            //     }
            // });

            // $("#clusterDisplay").on("change", function(e) {
            //     if ($(this).is(':checked')) {

            //     }else{
            for (let i = 0; i < markerCluster.length; i++) {
                if (markerCluster[i]) {
                    mapContainer.removeLayer(markerCluster[i]);
                }
            }
            markerCluster = new Array();
            //     }
            // });


            // $("#radiusDisplay").on("change", function(e) {
            //     if ($(this).is(':checked')) {

            //     }else{
            for (let i = 0; i < markerRadius.length; i++) {
                if (markerRadius[i]) {
                    // fasumKhususRadiusGroup.removeLayer(markerRadius[i]);
                    mapContainer.removeLayer(markerRadius[i]);
                }
            }
            markerRadius = new Array();
            //     }
            // });


            // $("#polresDisplay").on("change", function(e) {
            //     if ($(this).is(':checked')) {

            //     }else{
            for (let i = 0; i < markerPolres.length; i++) {
                if (markerPolres[i]) {
                    mapContainer.removeLayer(markerPolres[i]);
                }
            }
            markerPolres = new Array();
            //     }
            // });


            // $("#operasiDisplay").on("change", function(e) {
            //     if ($(this).is(':checked')) {

            //     }else{
            for (let i = 0; i < markerLaporan.length; i++) {
                if (markerLaporan[i]) {
                    laporanClusterGroup.removeLayer(markerLaporan[i]);
                    // mapContainer.removeLayer(laporanClusterGroup);
                }
            }
            markerLaporan = new Array();
            //     }
            // });




            for (let i = 0; i < markerLaporanPanic.length; i++) {
                if (markerLaporanPanic[i]) {
                    panicClusterGroup.removeLayer(markerLaporanPanic[i]);
                    // mapContainer.removeLayer(panicClusterGroup);
                }
            }
            markerLaporanPanic = new Array();



            // console.log(`${centerLat},${centerLng}`);  

            var idPolda = polda_id;

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
                    "polda_id": polda_id ? polda_id : null,
                },
                dataType: "JSON",
                success: function(result) {
                    // console.log(result);

                    $("#overlay").fadeOut(300);
                    var ressTurjawali = result['data']['turjawali'];
                    var ressPolres = result['data']['polres'];
                    var ressCctv = result['data']['cctv'];

                    var ressSamsat = result['data']['samsat'];
                    var ressTroubleSpot = result['data']['trouble_spot'];
                    var ressBlankSpot = result['data']['blank_spot'];
                    var ressRestArea = result['data']['rest_area'];
                    var ressPosPam = result['data']['pos_pam'];
                    var ressPosYan = result['data']['pos_yan'];
                    var ressPosTerpadu = result['data']['pos_terpadu'];
                    var ressPosko = result['data']['posko'];
                    var ressSatPjr = result['data']['sat_pjr'];

                    var ressSatPas = result['data']['sat_pas'];

                    var ressLAP = result['data']['titik_laporan'];
                    var ressPanic = result['data']['titik_panicButton'];
                    var ressFasum = result['data']['fasum'];
                    // var ressFasumKhusus = result['data']['fasum_khusus'];
                    ressFasumKhusus = result['data']['fasum_khusus'];

                    // console.log(ressFasumKhusus);

                    var ressRadius = result['data']['radius'];
                    var ressCluster = result['data']['cluster'];
                    var ressSchedule = result['data']['jadwal_kegiatan'];
                    var ressOperasi = result['data']['operasi'];

                    var ressJalur = result['data']['jalur'];
                    var ressGerbangtol = result['data']['gerbang_tol'];
                    // console.log(ressGerbangtol);


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
                                setTimeout(() => {
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
                                            html: `
                                        <div>
                                            <div style="position: relative;">
                                                <img src="<?php echo base_url(); ?>assets/icon/cctv.png" style="width: 40px; margin-top: -45px;margin-left: -18.5px;">
                                            </div> 
                                            <div style="position: absolute;margin-top: -29px;">
                                                <span class="badge rounded-pill bg-primary" >${filterCctv[i].address_cctv}</span>
                                            </div>
                                        </div>
                                        `,
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
                                }, i * 500);
                            }


                            setTimeout(() => {
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
                            }, countCctvDisplay * 500);
                        }
                    }


                    if (ressSamsat && ressSamsat.length > 0) {
                        var filterSamsat = ressSamsat.filter(function(e) {
                            return e.samsat_lat != null && e.samsat_lng != null;
                        });

                        if (filterSamsat.length > 0) {
                            $('#openModalSamsatDisplay').html(`
                            <table id="datatableSamsatOnDisplay" class="table dt-responsive w-100" style="font-size: 12px;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th> 
                                        <th>Alamat</th> 
                                        <th>Waktu</th> 
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="isiModalSamsatDisplay">
                                </tbody>
                            </table>                     
                        `);
                            var countSamsatDisplay = 0;
                            var listSamsatDisplay = '';
                            $('#totalSamsatDisplay').html(filterSamsat.length);

                            for (let i = 0; i < filterSamsat.length; i++) {
                                countSamsatDisplay += 1;
                                listSamsatDisplay += `
                                <tr>
                                    <td>${countSamsatDisplay}</td>
                                    <td>${filterSamsat[i].name_samsat}</td> 
                                    <td>${filterSamsat[i].address}</td> 
                                    <td>${filterSamsat[i].samsat_open_time} - ${filterSamsat[i].samsat_close_time}</td> 
                                    <td>
                                        <a class="btn" style="margin-top: -10px;"  
                                            id="flyToMapFilterSamsat${countSamsatDisplay}"
                                            data-cord="${filterSamsat[i].samsat_lat},${filterSamsat[i].samsat_lng}" 
                                            href="javascript:void(0)">
                                            <i style="color: #495057;" class="fa fas fa-eye"></i>
                                        </a> 
                                    </td>
                                </tr>
                            `;
                                $('#isiModalSamsatDisplay').html(listSamsatDisplay);



                                id = i;
                                var latitudeSamsat = parseFloat(filterSamsat[i].samsat_lat);
                                var longitudeSamsat = parseFloat(filterSamsat[i].samsat_lng);


                                samsatClusterGroup.addLayer(markerSamsat[i] = L.marker([latitudeSamsat, longitudeSamsat], {
                                    icon: L.divIcon({
                                        // className: 'location-pin',
                                        html: `
                                        <div>
                                            <div style="position: relative;">
                                                <img src="<?php echo base_url(); ?>assets/icon/lainnya.png" style="width: 40px; margin-top: -45px;margin-left: -18.5px;">
                                            </div> 
                                            <div style="position: absolute;margin-top: -29px;">
                                                <span class="badge rounded-pill bg-primary" >${filterSamsat[i].name_samsat}</span>
                                            </div>
                                        </div>
                                        `,
                                        iconSize: [5, 5],
                                        iconAnchor: [5, 10]
                                        // iconAnchor: [10, 33]
                                    })
                                }).bindPopup(`
                                <div style="width: 300px;">
                                    <div class="row">
                                        <div class="col-md-12" style="text-align: center;">
                                            <h5>${filterSamsat[i].name_samsat}</h5>
                                        </div>
                                        <div class="col-md-12"> 
                                                
                                        </div> 
                                    </div>
                                </div>
                                    
                                `, {
                                    minWidth: 100,
                                    maxWidth: 560,
                                    width: 400
                                }));
                            }


                            for (let i = 0; i < countSamsatDisplay; i++) {
                                // console.log(`${i+1}`);
                                $(`#flyToMapFilterSamsat${i+1}`).on("click", function(e) {
                                    var latlong = $(this).data('cord').split(',');
                                    var latitude = parseFloat(latlong[0]);
                                    var longitude = parseFloat(latlong[1]);
                                    mapContainer.flyTo([latitude, longitude], 20);
                                });
                            }
                            $('#datatableSamsatOnDisplay').DataTable({
                                responsive: true,

                                scrollX: true,

                                sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

                                buttons: ["excel", "csv", "pdf"],
                                processing: true,
                                oLanguage: {

                                    sSearch: 'Search:'

                                },
                            });
                            mapContainer.addLayer(samsatClusterGroup);
                        }
                    }


                    if (ressJalur && ressJalur.length > 0) {
                        var filterJalur = ressJalur;

                        if (filterJalur.length > 0) {


                            var countIsiLegenJalur = 0;
                            var listIsiLegenJalur = '';


                            $('#openModalJalurDisplay').html(`
                                <table id="datatableJalurOnDisplay" class="table dt-responsive w-100" style="font-size: 12px;">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th> 
                                            <th>Keterangan</th>  
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="isiModalJalurDisplay">
                                    </tbody>
                                </table>                     
                            `);

                            var countJalurDisplay = 0;
                            var listJalurDisplay = '';
                            $('#totalJalurDisplay').html(filterJalur.length);
                            var countlistJalur = 0;
                            var checkedJalur1 = [];

                            for (let i = 0; i < filterJalur.length; i++) {
                                countJalurDisplay += 1;
                                countlistJalur += 1;
                                id = i;

                                listJalurDisplay += `
                                    <tr>
                                        <td>${countJalurDisplay}</td>
                                        <td>${filterJalur[i].fasum_name}</td> 
                                        <td>${filterJalur[i].fasum_description}</td>  
                                        <td>
                                            <input type="checkbox" class="form-input checkTs" name="selectTs" 
                                            id="listJlDisplay${countlistJalur}"  
                                            data-name="${filterJalur[i]['fasum_name']}" 
                                            data-warna="${filterJalur[i]['fasum_color']}" 
                                            data-geojson='${JSON.stringify(filterJalur[i]['fasum_geoJson'])}'
                                            data-cord='${JSON.stringify(filterJalur[i]['route'])}'> 
                                        </td>
                                    </tr>
                                `;
                                $('#isiModalJalurDisplay').html(listJalurDisplay);


                                checkedJalur1.push({
                                    fasum_name: filterJalur[i]['fasum_name'],
                                    checked: 0,
                                });




                                listIsiLegenJalur += `
                                    <div class="col-md-6">
                                        <b style="font-size: 14px; text-transform: capitalize;">${filterJalur[i].fasum_name}</b> 
                                    </div> 
                                    <div class="col-md-6"> 
                                        <div style="height: 10px;background-color: ${filterJalur[i].fasum_color}; margin-top: 8px;" ></div>
                                    </div>
                                `;
                                $('#isiLegendJalur').html(listIsiLegenJalur);

                            }

                            for (let i = 0; i < countlistJalur; i++) {
                                $(`#listJlDisplay${i+1}`).on("change", function(e) {

                                    var cordRute = $(this).data('cord');
                                    if (cordRute != null && cordRute[0]['latLng'] != null) {
                                        if ($(this).is(':checked')) {
                                            routingJalur[i] = null;
                                            routingJalur[i] = L.Routing.control({
                                                show: false,
                                                draggableWaypoints: false,
                                                addWaypoints: false,
                                                waypoints: cordRute,
                                                router: new L.Routing.osrmv1({
                                                    language: 'en',
                                                    profile: 'car'
                                                }),
                                                lineOptions: {
                                                    styles: [{
                                                        color: `${$(this).data('warna')}`,
                                                        weight: 5,
                                                        // className: 'animateRoute'
                                                    }]
                                                },
                                                createMarker: function(i, wp, nWps) {
                                                    if (i === 0 || i === nWps + 1) {
                                                        // here change the starting and ending icons
                                                        // return L.marker(wp.latLng);
                                                    } else if (i === nWps - 1) {
                                                        // return L.marker(wp.latLng);
                                                    } else {
                                                        // here change all the others
                                                        // var options = {
                                                        //         draggable: this.draggableWaypoints,
                                                        //     },
                                                        //     marker = L.marker(wp.latLng);

                                                        // return marker;
                                                    }
                                                },
                                                // geocoder: L.Control.Geocoder.nominatim({})
                                            }).addTo(mapContainer);
                                            // mapContainer.addControl(routingJalur[i]); 
                                        } else {
                                            mapContainer.removeControl(routingJalur[i]);
                                        }
                                    }

                                    var geoJson = $(this).data('geojson');
                                    if (geoJson || geoJson != null) {
                                        if ($(this).is(':checked')) {
                                            routingJalur[i] = L.geoJSON(geoJson, {
                                                style: {
                                                    fillColor: "yellow",
                                                    color: "yellow",
                                                }
                                            }).addTo(mapContainer);
                                        } else {
                                            mapContainer.removeLayer(routingJalur[i]);
                                        }
                                    }
                                });
                            }


                            $('#datatableJalurOnDisplay').DataTable({
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

                    if (ressTroubleSpot && ressTroubleSpot.length > 0) {
                        var filterTroubleSpot = ressTroubleSpot;

                        if (filterTroubleSpot.length > 0) {
                            $('#openModalTroubleSpotDisplay').html(`
                                <table id="datatableTroubleSpotOnDisplay" class="table dt-responsive w-100" style="font-size: 12px;">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th> 
                                            <th>Alamat</th> 
                                            <th>Waktu</th> 
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="isiModalTroubleSpotDisplay">
                                    </tbody>
                                </table>                     
                            `);

                            var countTroubleSpotDisplay = 0;
                            var listTroubleSpotDisplay = '';
                            $('#totalTroubleSpotDisplay').html(filterTroubleSpot.length);
                            var countlistTroubleSpot = 0;
                            var checkedTroubleSpot1 = [];

                            for (let i = 0; i < filterTroubleSpot.length; i++) {
                                countTroubleSpotDisplay += 1;
                                countlistTroubleSpot += 1;
                                id = i;

                                if (filterTroubleSpot[i].route == null) {
                                    listTroubleSpotDisplay += `
                                        <tr>
                                            <td>${countTroubleSpotDisplay}</td>
                                            <td>${filterTroubleSpot[i].reporter_name}</td> 
                                            <td>${filterTroubleSpot[i].location}</td> 
                                            <td>${filterTroubleSpot[i].desc}</td> 
                                            <td>
                                                <a class="btn" style="margin-top: -10px;"  
                                                    id="flyToMapFilterTroubleSpot${countTroubleSpotDisplay}"
                                                    data-cord="${filterTroubleSpot[i].latitude},${filterTroubleSpot[i].longitude}" 
                                                    href="javascript:void(0)">
                                                    <i style="color: #495057;" class="fa fas fa-eye"></i>
                                                </a> 
                                            </td>
                                        </tr>
                                    `;
                                    $('#isiModalTroubleSpotDisplay').html(listTroubleSpotDisplay);

                                    var latitudeTroubleSpot = parseFloat(filterTroubleSpot[i].latitude);
                                    var longitudeTroubleSpot = parseFloat(filterTroubleSpot[i].longitude);
                                    troubleSpotClusterGroup.addLayer(markerTroubleSpot[i] = L.marker([latitudeTroubleSpot, longitudeTroubleSpot], {
                                        icon: L.divIcon({
                                            // className: 'location-pin',
                                            html: `
                                            <div>
                                                <div style="position: relative;">
                                                    <img src="<?php echo base_url(); ?>assets/icon/troublespot.png" style="width: 30px; margin-top: -45px;margin-left: -18.5px;">
                                                </div> 
                                                <div style="position: absolute;margin-top: -29px;">
                                                    <span class="badge rounded-pill bg-primary" >${filterTroubleSpot[i].reporter_name}</span>
                                                </div>
                                            </div>
                                            `,
                                            iconSize: [5, 5],
                                            iconAnchor: [5, 10]
                                            // iconAnchor: [10, 33]
                                        })
                                    }).bindPopup(`
                                        <div style="width: 300px;">
                                            <div class="row">
                                                <div class="col-md-12" style="text-align: center;">
                                                    <h5>${filterTroubleSpot[i].reporter_name}</h5>
                                                </div>
                                                <div class="col-md-12"> 
                                                        
                                                </div> 
                                            </div>
                                        </div> 
                                    `, {
                                        minWidth: 100,
                                        maxWidth: 560,
                                        width: 400
                                    }));
                                } else {
                                    listTroubleSpotDisplay += `
                                        <tr>
                                            <td>${countTroubleSpotDisplay}</td>
                                            <td>${filterTroubleSpot[i].reporter_name}</td> 
                                            <td>${filterTroubleSpot[i].location}</td> 
                                            <td>${filterTroubleSpot[i].desc}</td> 
                                            <td>
                                                <input type="checkbox" class="form-input checkTs" name="selectTs" 
                                                id="listTsDisplay${countlistTroubleSpot}"  
                                                data-name="${filterTroubleSpot[i]['reporter_name']}" 
                                                data-cord='${JSON.stringify(filterTroubleSpot[i]['route'])}'> 
                                            </td>
                                        </tr>
                                    `;
                                    $('#isiModalTroubleSpotDisplay').html(listTroubleSpotDisplay);


                                    checkedTroubleSpot1.push({
                                        reporter_name: filterTroubleSpot[i]['reporter_name'],
                                        checked: 0,
                                    });
                                }
                            }

                            for (let i = 0; i < countlistTroubleSpot; i++) {
                                $(`#listTsDisplay${i+1}`).on("change", function(e) {

                                    var cordRute = $(this).data('cord');
                                    if (cordRute != null && cordRute[0]['latLng'] != null) {
                                        if ($(this).is(':checked')) {
                                            routingTroubleSpot[i] = null;
                                            routingTroubleSpot[i] = L.Routing.control({
                                                show: false,
                                                draggableWaypoints: false,
                                                addWaypoints: false,
                                                waypoints: cordRute,
                                                router: new L.Routing.osrmv1({
                                                    language: 'en',
                                                    profile: 'car'
                                                }),
                                                lineOptions: {
                                                    styles: [{
                                                        color: "#a50000",
                                                        weight: 5,
                                                        // className: 'animateRoute'
                                                    }]
                                                },
                                                createMarker: function(i, wp, nWps) {
                                                    if (i === 0 || i === nWps + 1) {
                                                        // here change the starting and ending icons
                                                        // return L.marker(wp.latLng);
                                                    } else if (i === nWps - 1) {
                                                        // return L.marker(wp.latLng);
                                                    } else {
                                                        // here change all the others
                                                        // var options = {
                                                        //         draggable: this.draggableWaypoints,
                                                        //     },
                                                        //     marker = L.marker(wp.latLng);

                                                        // return marker;
                                                    }
                                                },
                                                // geocoder: L.Control.Geocoder.nominatim({})
                                            }).addTo(mapContainer);
                                            // mapContainer.addControl(routingTroubleSpot[i]); 
                                        } else {
                                            mapContainer.removeControl(routingTroubleSpot[i]);
                                        }
                                    }
                                });
                            }

                            for (let i = 0; i < countTroubleSpotDisplay; i++) {

                                $(`#flyToMapFilterTroubleSpot${i+1}`).on("click", function(e) {
                                    var latlong = $(this).data('cord').split(',');
                                    var latitude = parseFloat(latlong[0]);
                                    var longitude = parseFloat(latlong[1]);
                                    mapContainer.flyTo([latitude, longitude], 20);
                                });
                            }
                            $('#datatableTroubleSpotOnDisplay').DataTable({
                                responsive: true,

                                scrollX: true,

                                sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

                                buttons: ["excel", "csv", "pdf"],
                                processing: true,
                                oLanguage: {

                                    sSearch: 'Search:'

                                },
                            });
                            mapContainer.addLayer(troubleSpotClusterGroup);
                        }
                    }

                    if (ressBlankSpot && ressBlankSpot.length > 0) {
                        var filterBlankSpot = ressBlankSpot;

                        if (filterBlankSpot.length > 0) {
                            $('#openModalBlankSpotDisplay').html(`
                                <table id="datatableBlankSpotOnDisplay" class="table dt-responsive w-100" style="font-size: 12px;">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th> 
                                            <th>Alamat</th> 
                                            <th>Waktu</th> 
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="isiModalBlankSpotDisplay">
                                    </tbody>
                                </table>                     
                            `);

                            var countBlankSpotDisplay = 0;
                            var listBlankSpotDisplay = '';
                            $('#totalBlankSpotDisplay').html(filterBlankSpot.length);
                            var countlistBlankSpot = 0;
                            var checkedBlankSpot1 = [];

                            for (let i = 0; i < filterBlankSpot.length; i++) {
                                countBlankSpotDisplay += 1;
                                countlistBlankSpot += 1;
                                id = i;

                                if (filterBlankSpot[i].route == null) {
                                    listBlankSpotDisplay += `
                                        <tr>
                                            <td>${countBlankSpotDisplay}</td>
                                            <td>${filterBlankSpot[i].reporter_name}</td> 
                                            <td>${filterBlankSpot[i].location}</td> 
                                            <td>${filterBlankSpot[i].desc}</td> 
                                            <td>
                                                <a class="btn" style="margin-top: -10px;"  
                                                    id="flyToMapFilterBlankSpot${countBlankSpotDisplay}"
                                                    data-cord="${filterBlankSpot[i].latitude},${filterBlankSpot[i].longitude}" 
                                                    href="javascript:void(0)">
                                                    <i style="color: #495057;" class="fa fas fa-eye"></i>
                                                </a> 
                                            </td>
                                        </tr>
                                    `;
                                    $('#isiModalBlankSpotDisplay').html(listBlankSpotDisplay);

                                    var latitudeBlankSpot = parseFloat(filterBlankSpot[i].latitude);
                                    var longitudeBlankSpot = parseFloat(filterBlankSpot[i].longitude);
                                    blankSpotClusterGroup.addLayer(markerBlankSpot[i] = L.marker([latitudeBlankSpot, longitudeBlankSpot], {
                                        icon: L.divIcon({
                                            // className: 'location-pin',
                                            html: `
                                            <div>
                                                <div style="position: relative;">
                                                    <img src="<?php echo base_url(); ?>assets/icon/blackspot.png" style="width: 30px; margin-top: -45px;margin-left: -18.5px;">
                                                </div> 
                                                <div style="position: absolute;margin-top: -29px;">
                                                    <span class="badge rounded-pill bg-primary" >${filterBlankSpot[i].reporter_name}</span>
                                                </div>
                                            </div>
                                            `,
                                            iconSize: [5, 5],
                                            iconAnchor: [5, 10]
                                            // iconAnchor: [10, 33]
                                        })
                                    }).bindPopup(`
                                        <div style="width: 300px;">
                                            <div class="row">
                                                <div class="col-md-12" style="text-align: center;">
                                                    <h5>${filterBlankSpot[i].reporter_name}</h5>
                                                </div>
                                                <div class="col-md-12"> 
                                                        
                                                </div> 
                                            </div>
                                        </div> 
                                    `, {
                                        minWidth: 100,
                                        maxWidth: 560,
                                        width: 400
                                    }));
                                } else {
                                    listBlankSpotDisplay += `
                                        <tr>
                                            <td>${countBlankSpotDisplay}</td>
                                            <td>${filterBlankSpot[i].reporter_name}</td> 
                                            <td>${filterBlankSpot[i].location}</td> 
                                            <td>${filterBlankSpot[i].desc}</td> 
                                            <td>
                                                <input type="checkbox" class="form-input checkTs" name="selectTs" 
                                                id="listTsDisplay${countlistBlankSpot}"  
                                                data-name="${filterBlankSpot[i]['reporter_name']}" 
                                                data-cord='${JSON.stringify(filterBlankSpot[i]['route'])}'> 
                                            </td>
                                        </tr>
                                    `;
                                    $('#isiModalBlankSpotDisplay').html(listBlankSpotDisplay);


                                    checkedBlankSpot1.push({
                                        reporter_name: filterBlankSpot[i]['reporter_name'],
                                        checked: 0,
                                    });
                                }
                            }

                            for (let i = 0; i < countlistBlankSpot; i++) {
                                $(`#listTsDisplay${i+1}`).on("change", function(e) {

                                    var cordRute = $(this).data('cord');
                                    if (cordRute != null && cordRute[0]['latLng'] != null) {
                                        if ($(this).is(':checked')) {
                                            routingBlankSpot[i] = null;
                                            routingBlankSpot[i] = L.Routing.control({
                                                show: false,
                                                draggableWaypoints: false,
                                                addWaypoints: false,
                                                waypoints: cordRute,
                                                router: new L.Routing.osrmv1({
                                                    language: 'en',
                                                    profile: 'car'
                                                }),
                                                lineOptions: {
                                                    styles: [{
                                                        color: "#a50000",
                                                        weight: 5,
                                                        // className: 'animateRoute'
                                                    }]
                                                },
                                                createMarker: function(i, wp, nWps) {
                                                    if (i === 0 || i === nWps + 1) {
                                                        // here change the starting and ending icons
                                                        // return L.marker(wp.latLng);
                                                    } else if (i === nWps - 1) {
                                                        // return L.marker(wp.latLng);
                                                    } else {
                                                        // here change all the others
                                                        // var options = {
                                                        //         draggable: this.draggableWaypoints,
                                                        //     },
                                                        //     marker = L.marker(wp.latLng);

                                                        // return marker;
                                                    }
                                                },
                                                // geocoder: L.Control.Geocoder.nominatim({})
                                            }).addTo(mapContainer);
                                            // mapContainer.addControl(routingBlankSpot[i]); 
                                        } else {
                                            mapContainer.removeControl(routingBlankSpot[i]);
                                        }
                                    }
                                });
                            }

                            for (let i = 0; i < countBlankSpotDisplay; i++) {

                                $(`#flyToMapFilterBlankSpot${i+1}`).on("click", function(e) {
                                    var latlong = $(this).data('cord').split(',');
                                    var latitude = parseFloat(latlong[0]);
                                    var longitude = parseFloat(latlong[1]);
                                    mapContainer.flyTo([latitude, longitude], 20);
                                });
                            }
                            $('#datatableBlankSpotOnDisplay').DataTable({
                                responsive: true,

                                scrollX: true,

                                sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

                                buttons: ["excel", "csv", "pdf"],
                                processing: true,
                                oLanguage: {

                                    sSearch: 'Search:'

                                },
                            });
                            mapContainer.addLayer(blankSpotClusterGroup);
                        }
                    }

                    if (ressRestArea && ressRestArea.length > 0) {
                        $('#openModalRestAreaDisplay').html(`
                            <table id="datatableRestAreaOnDisplay" class="table dt-responsive w-100" style="font-size: 12px;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th> 
                                        <th>Alamat</th> 
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="isiModalRestAreaDisplay">
                                </tbody>
                            </table>                     
                        `);
                        var countRestAreaDisplay = 0;
                        var listRestAreaDisplay = '';
                        $('#totalRestAreaDisplay').html(ressRestArea.length);

                        var logoMarker = '';
                        var logoBody = '';
                        for (let i = 0; i < ressRestArea.length; i++) {
                            countRestAreaDisplay += 1;
                            listRestAreaDisplay += `
                                <tr>
                                    <td>${countRestAreaDisplay}</td>
                                    <td><a href="<?= base_url() ?>masterdata/Fasilitasumum" target="_blank">${ressRestArea[i].fasum_name}</a></td> 
                                    <td>${ressRestArea[i].fasum_address}</td> 
                                    <td>
                                        <a class="btn" style="margin-top: -10px;"  
                                            id="flyToMapFilterRestArea${countRestAreaDisplay}"
                                            data-cord="${ressRestArea[i].fasum_lat},${ressRestArea[i].fasum_lng}" 
                                            href="javascript:void(0)">
                                            <i style="color: #495057;" class="fa fas fa-eye"></i>
                                        </a> 
                                    </td>
                                </tr>
                            `;
                            $('#isiModalRestAreaDisplay').html(listRestAreaDisplay);


                            var latitudeFasum = parseFloat(ressRestArea[i].fasum_lat);
                            var longitudeFasum = parseFloat(ressRestArea[i].fasum_lng);
                            restAreaClusterGroup.addLayer(markerRestArea[i] = L.marker([latitudeFasum, longitudeFasum], {
                                icon: L.divIcon({
                                    // className: 'location-pin',
                                    html: `
                                    <div>
                                        <div style="position: relative;">
                                            <img src="<?php echo base_url(); ?>assets/icon/rest_area.png" style="width: 40px; margin-top: -45px;margin-left: -18.5px;">
                                        </div> 
                                        <div style="position: absolute;margin-top: -29px;">
                                            <span class="badge rounded-pill bg-primary" >${ressRestArea[i].fasum_name}</span>
                                        </div>
                                    </div>
                                    `,
                                    iconSize: [5, 5],
                                    iconAnchor: [5, 10]
                                    // iconAnchor: [10, 33]
                                })
                            }).bindPopup(`
                                        <div class="text-center" style="width: 300px;height: 250px;overflow-x: hidden;scrollbar-width: thin;overflow-y: auto;"> 
                                            <div class="row mt-3">
                                                <div class="col-md-12 col-12" style="margin-bottom: 10px;">
                                                    <img src="${ressRestArea[i].fasum_logo}" alt="" class="float-center" style="width: 100%;"> 
                                                </div>
                                                <div class="col-md-12 col-12 mt-3">
                                                    <h5>${ressRestArea[i].fasum_name}</h5> 
                                                    <span>- ${ressRestArea[i].category_fasum.name_category_fasum} -</span>
                                                </div>
                                                

                                                <div class="col-md-12 col-12 mt-2">
                                                    <div class="row text-start">
                                                        <div class="col-md-12 col-12">
                                                            <p style="font-size: 12px;font-weight: bold;">Keterangan</p>  
                                                             ${ressRestArea[i].fasum_description != null ? ressRestArea[i].fasum_description.replace(/\n/g, "<br />") : "-"}
                                                        </div> 
                                                    </div> 
                                                </div>  
                                                <div class="col-md-12 col-12 mt-2">
                                                    <div class="row text-start">
                                                        <div class="col-md-12 col-12">
                                                            <p style="font-size: 12px;font-weight: bold;">Alamat</p>  
                                                            <p style="font-size: 12px; margin-top: -15px;">${ressRestArea[i].fasum_address}</p>
                                                        </div> 
                                                    </div> 
                                                </div>  
                                                <div class="col-md-12 col-12"  style="margin-top: -30px;">
                                                    <div class="row text-start">
                                                        <div class="col-md-12 col-12">
                                                            <p style="font-size: 12px;font-weight: bold;">No Telpon</p>  
                                                            <p style="font-size: 12px; margin-top: -15px;">${ressRestArea[i].fasum_phone}</p>
                                                        </div> 
                                                    </div> 
                                                </div>  
                                                <div class="col-md-12 col-12" style="margin-top: -30px;">
                                                    <div class="row text-start">
                                                        <div class="col-md-12 col-12">
                                                            <p style="font-size: 12px;font-weight: bold;">Waktu</p>  
                                                            <p style="font-size: 12px; margin-top: -15px;">${ressRestArea[i].fasum_open_time != null ? ressRestArea[i].fasum_open_time : '00:00'} - ${ressRestArea[i].fasum_close_time != null ? ressRestArea[i].fasum_close_time : '00:00'} WITA</p>
                                                        </div> 
                                                    </div> 
                                                </div>   
                                            </div>
                                        </div> 
                                `, {
                                minWidth: 100,
                                maxWidth: 900,
                                width: 300
                            }));
                        }


                        for (let i = 0; i < countRestAreaDisplay; i++) {
                            $(`#flyToMapFilterRestArea${i+1}`).on("click", function(e) {
                                var latlong = $(this).data('cord').split(',');
                                var latitude = parseFloat(latlong[0]);
                                var longitude = parseFloat(latlong[1]);
                                mapContainer.flyTo([latitude, longitude], 17);
                            });
                        }
                        $('#datatableRestAreaOnDisplay').DataTable({
                            responsive: true,

                            scrollX: true,

                            sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

                            buttons: ["excel", "csv", "pdf"],
                            processing: true,
                            oLanguage: {

                                sSearch: 'Search:'

                            },
                        });
                        mapContainer.addLayer(restAreaClusterGroup);
                    }

                    if (ressPosPam && ressPosPam.length > 0) {
                        $(`#isiPoldaPosPam${polda_id}`).html(`
                            <table id="datatablePosPamOnDisplay${polda_id}" class="table dt-responsive w-100" style="font-size: 12px;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th> 
                                        <th>Alamat</th> 
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="isiModalPosPamDisplay${polda_id}">
                                </tbody>
                            </table>                     
                        `);
                        var countPosPamDisplay = 0;
                        var listPosPamDisplay = '';
                        $('#totalPosPamDisplay').html(ressPosPam.length);

                        var logoMarker = '';
                        var logoBody = '';
                        $("#overlayMenu").fadeIn(300);

                        listPosPamDisplay = '';
                        for (let i = 0; i < ressPosPam.length; i++) {
                            if (ressPosPam[i].coordinate_guarding && ressPosPam[i].coordinate_guarding.lat != null && ressPosPam[i].coordinate_guarding.lng != null) {
                                // setTimeout(() => {
                                countPosPamDisplay += 1;
                                listPosPamDisplay += `
                                        <tr>
                                            <td>${countPosPamDisplay}</td>
                                            <td><a href="<?= base_url() ?>operasi/renpam/Edit/${ressPosPam[i].polda_id}" target="_blank">${ressPosPam[i].name_renpam}</a></td> 
                                            <td>${ressPosPam[i].title_start != null ? ressPosPam[i].title_start.replace(/\n/g, "<br />") : "-"}</td> 
                                            <td>
                                                <a class="btn" style="margin-top: -10px;"  
                                                    id="flyToMapFilterPosPam${countPosPamDisplay}"
                                                    data-akun="${ressPosPam[i].accounts}"
                                                    data-cord="${ressPosPam[i].coordinate_guarding.lat},${ressPosPam[i].coordinate_guarding.lng}" 
                                                    href="javascript:void(0)">
                                                    <i style="color: #495057;" class="fa fas fa-eye"></i>
                                                </a> 
                                            </td>
                                        </tr>
                                    `;
                                $(`#isiModalPosPamDisplay${polda_id}`).html(listPosPamDisplay);


                                var latitudeFasum = parseFloat(ressPosPam[i].coordinate_guarding.lat);
                                var longitudeFasum = parseFloat(ressPosPam[i].coordinate_guarding.lng);
                                posPamClusterGroup.addLayer(markerPosPam[i] = L.marker([latitudeFasum, longitudeFasum], {
                                    icon: L.divIcon({
                                        // className: 'location-pin',
                                        html: `
                                        <div>
                                            <div style="position: relative;">
                                                <img src="<?php echo base_url(); ?>assets/icon/POSPAM.png" style="width: 40px; margin-top: -45px;margin-left: -18.5px;">
                                            </div> 
                                            <div style="position: absolute;margin-top: -29px;">
                                                <span class="badge rounded-pill bg-primary" >${ressPosPam[i].name_renpam}</span>
                                            </div>
                                        </div>
                                        `,
                                        iconSize: [5, 5],
                                        iconAnchor: [5, 10]
                                        // iconAnchor: [10, 33]
                                    })
                                }).bindPopup(`
                                            <div class="text-center" style="width: 300px;height: 250px;overflow-x: hidden;scrollbar-width: thin;overflow-y: auto;"> 
                                                <div class="row mt-3"> 
                                                    <div class="col-md-12 col-12 mt-3">
                                                        <h5>${ressPosPam[i].name_renpam}</h5> 
                                                        <span>- ${ressPosPam[i].schedule.activity} -</span>
                                                    </div> 
                                                    
                                                  
                                                
                                            
                                                    <div class="col-md-12 col-12 text-start">
                                                        <p style="font-size: 12px;font-weight: bold;">Alamat</p>  
                                                        <p style="font-size: 12px; margin-top: -15px;">${ressPosPam[i].title_start}</p>
                                                    </div> 
                                                    
                                                    <div class="col-md-12 col-12 text-start" id="isiPospam${ressPosPam[i].id}">
                                                    
                                                    </div>
                                                </div>
                                            </div> 
                                    `, {
                                    minWidth: 100,
                                    maxWidth: 900,
                                    width: 300
                                }).on("click", function(e) {
                                    $("#overlayMenu").fadeIn(300);
                                    var akuns = ressPosPam[i].accounts;
                                    var dataAkuns = '';
                                    if (akuns.length > 0) {
                                        $.ajax({
                                            type: "POST",
                                            url: "<?php echo base_url(); ?>dashboard/getAkunId",
                                            data: {
                                                "id": akuns[0]['id'],
                                            },
                                            dataType: "JSON",
                                            success: function(result) {
                                                var ress = result['data'];
                                                console.log({
                                                    a: 'ada',
                                                    b: ress
                                                });
                                                // dataAkuns += `<li>${ress['officer']['rank_officer']} - ${ress['officer']['name_officer']}</li>`;

                                                $(`#isiPospam${ressPosPam[i].id}`).html(`
                                                            <p style="font-size: 12px;font-weight: bold;">Petugas</p>  
                                                            <div style="text-align: center">
                                                                <img src="<?php echo url_api(); ?>officer/${ress['officer']['photo_officer']}" class="img-thumbnail" alt="200x200" width="200" data-holder-rendered="true"></br>
                                                                <p class="mt-3" style="font-size: 12px; margin-top: -15px;">
                                                                    <b>Nama : </b> ${ress['officer']['rank_officer']} - ${ress['officer']['name_officer']} </br>
                                                                    <b>Nomor Telefon : </b> ${ress['officer']['phone_officer']} </br>
                                                                    <a class="btn" style="margin-top: -9px; color: #495057;" href="https://api.whatsapp.com/send?phone=${ress['officer']['phone_officer']}" target="_blank"><i class="fa fas fa-phone "></i></a>  
                                                                    <a class="btn" style="margin-left: -13px;margin-top: -7px; color: #495057;" onClick="sendZoom('${ress['officer']['id']}')" href="<?php echo base_url('zoom'); ?>" target="_blank"><i class="fa  fas fa-video "></i></a> 
                                                                </p>
                                                            </div>

                                                        `);
                                                $("#overlayMenu").fadeOut(300);
                                            }
                                        });
                                    } else {
                                        console.log({
                                            a: 'ga ada'
                                        });
                                    }
                                }));
                                // }, i * 200);
                            }
                            // $(`#datatablePosPamOnDisplay${polda_id}`).DataTable({
                            //     responsive: true,

                            //     scrollX: true,

                            //     sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

                            //     buttons: ["excel", "csv", "pdf"],
                            //     processing: true,
                            //     oLanguage: {

                            //         sSearch: 'Search:'

                            //     },
                            // }); 
                        }


                        for (let i = 0; i < countPosPamDisplay; i++) {
                            // setTimeout(() => {
                            $(`#flyToMapFilterPosPam${i+1}`).on("click", function(e) {
                                var latlong = $(this).data('cord').split(',');
                                var latitude = parseFloat(latlong[0]);
                                var longitude = parseFloat(latlong[1]);
                                mapContainer.flyTo([latitude, longitude], 17);
                            });

                            // }, countPosPamDisplay.length * 200); 
                        }

                        $("#overlayMenu").fadeOut(300);
                        mapContainer.addLayer(posPamClusterGroup);
                    }

                    if (ressPosYan && ressPosYan.length > 0) {
                        $(`#isiPoldaPosYan${polda_id}`).html(`
                            <table id="datatablePosYanOnDisplay${polda_id}" class="table dt-responsive w-100" style="font-size: 12px;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th> 
                                        <th>Alamat</th> 
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="isiModalPosYanDisplay${polda_id}">
                                </tbody>
                            </table>                     
                        `);
                        var countPosYanDisplay = 0;
                        var listPosYanDisplay = '';
                        $('#totalPosYanDisplay').html(ressPosYan.length);

                        var logoMarker = '';
                        var logoBody = '';
                        for (let i = 0; i < ressPosYan.length; i++) {

                            if (ressPosYan[i].coordinate_guarding && ressPosYan[i].coordinate_guarding.lat != null && ressPosYan[i].coordinate_guarding.lng != null) {
                                // setTimeout(() => {
                                countPosYanDisplay += 1;
                                listPosYanDisplay += `
                                        <tr>
                                            <td>${countPosYanDisplay}</td>
                                            <td><a href="<?= base_url() ?>operasi/renpam/Edit/${ressPosYan[i].polda_id}" target="_blank">${ressPosYan[i].name_renpam}</a></td> 
                                            <td>${ressPosYan[i].title_start != null ? ressPosYan[i].title_start.replace(/\n/g, "<br />") : "-"}</td> 
                                            <td>
                                                <a class="btn" style="margin-top: -10px;"  
                                                    id="flyToMapFilterPosYan${countPosYanDisplay}"
                                                    data-akun="${ressPosYan[i].accounts}"
                                                    data-cord="${ressPosYan[i].coordinate_guarding.lat},${ressPosYan[i].coordinate_guarding.lng}" 
                                                    href="javascript:void(0)">
                                                    <i style="color: #495057;" class="fa fas fa-eye"></i>
                                                </a> 
                                            </td>
                                        </tr>
                                    `;
                                $(`#isiModalPosYanDisplay${polda_id}`).html(listPosYanDisplay);


                                var latitudeFasum = parseFloat(ressPosYan[i].coordinate_guarding.lat);
                                var longitudeFasum = parseFloat(ressPosYan[i].coordinate_guarding.lng);
                                posYanClusterGroup.addLayer(markerPosYan[i] = L.marker([latitudeFasum, longitudeFasum], {
                                    icon: L.divIcon({
                                        // className: 'location-pin',
                                        html: `
                                        <div>
                                            <div style="position: relative;">
                                                <img src="<?php echo base_url(); ?>assets/icon/POSYAN.png" style="width: 40px; margin-top: -45px;margin-left: -18.5px;">
                                            </div> 
                                            <div style="position: absolute;margin-top: -29px;">
                                                <span class="badge rounded-pill bg-primary" >${ressPosYan[i].name_renpam}</span>
                                            </div>
                                        </div>
                                        `,
                                        iconSize: [5, 5],
                                        iconAnchor: [5, 10]
                                        // iconAnchor: [10, 33]
                                    })
                                }).bindPopup(`
                                            <div class="text-center" style="width: 300px;height: 250px;overflow-x: hidden;scrollbar-width: thin;overflow-y: auto;"> 
                                                <div class="row mt-3"> 
                                                    <div class="col-md-12 col-12 mt-3">
                                                        <h5>${ressPosYan[i].name_renpam}</h5> 
                                                        <span>- ${ressPosYan[i].schedule.activity} -</span>
                                                    </div> 
                                                
                                            
                                                    <div class="col-md-12 col-12 text-start">
                                                        <p style="font-size: 12px;font-weight: bold;">Alamat</p>  
                                                        <p style="font-size: 12px; margin-top: -15px;">${ressPosYan[i].title_start}</p>
                                                    </div> 
                                                    <div class="col-md-12 col-12 text-start" id="isiPosyan${ressPosYan[i].id}">
                                                    
                                                    </div>
                                                </div>
                                            </div> 
                                    `, {
                                    minWidth: 100,
                                    maxWidth: 900,
                                    width: 300
                                }).on("click", function(e) {
                                    $("#overlayMenu").fadeIn(300);
                                    var akuns = ressPosYan[i].accounts;
                                    var dataAkuns = '';
                                    if (akuns.length > 0) {
                                        $.ajax({
                                            type: "POST",
                                            url: "<?php echo base_url(); ?>dashboard/getAkunId",
                                            data: {
                                                "id": akuns[0]['id'],
                                            },
                                            dataType: "JSON",
                                            success: function(result) {
                                                var ress = result['data'];
                                                console.log({
                                                    a: 'ada',
                                                    b: ress
                                                });
                                                // dataAkuns += `<li>${ress['officer']['rank_officer']} - ${ress['officer']['name_officer']}</li>`;

                                                $(`#isiPosyan${ressPosYan[i].id}`).html(`
                                                            <p style="font-size: 12px;font-weight: bold;">Petugas</p>  
                                                            <div style="text-align: center">
                                                                <img src="<?php echo url_api(); ?>officer/${ress['officer']['photo_officer']}" class="img-thumbnail" alt="200x200" width="200" data-holder-rendered="true"></br>
                                                                <p class="mt-3" style="font-size: 12px; margin-top: -15px;">
                                                                    <b>Nama : </b> ${ress['officer']['rank_officer']} - ${ress['officer']['name_officer']} </br>
                                                                    <b>Nomor Telefon : </b> ${ress['officer']['phone_officer']} </br>
                                                                    <a class="btn" style="margin-top: -9px; color: #495057;" href="https://api.whatsapp.com/send?phone=${ress['officer']['phone_officer']}" target="_blank"><i class="fa fas fa-phone "></i></a>  
                                                                    <a class="btn" style="margin-left: -13px;margin-top: -7px; color: #495057;" onClick="sendZoom('${ress['officer']['id']}')" href="<?php echo base_url('zoom'); ?>" target="_blank"><i class="fa  fas fa-video "></i></a> 
                                                                </p>
                                                            </div>

                                                        `);
                                                $("#overlayMenu").fadeOut(300);
                                            }
                                        });
                                    } else {
                                        console.log({
                                            a: 'ga ada'
                                        });
                                    }
                                }));
                                // }, i * 500);
                            }
                        }


                        // setTimeout(() => {
                        for (let i = 0; i < countPosYanDisplay; i++) {
                            $(`#flyToMapFilterPosYan${i+1}`).on("click", function(e) {
                                var latlong = $(this).data('cord').split(',');
                                var latitude = parseFloat(latlong[0]);
                                var longitude = parseFloat(latlong[1]);
                                mapContainer.flyTo([latitude, longitude], 17);
                            });
                        }
                        // $(`#datatablePosYanOnDisplay${polda_id}`).DataTable({
                        //     responsive: true,

                        //     scrollX: true,

                        //     sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

                        //     buttons: ["excel", "csv", "pdf"],
                        //     processing: true,
                        //     oLanguage: {

                        //         sSearch: 'Search:'

                        //     },
                        // }); 
                        mapContainer.addLayer(posYanClusterGroup);
                        // }, countPosYanDisplay.length * 500);
                    }

                    if (ressPosTerpadu && ressPosTerpadu.length > 0) {
                        $(`#isiPoldaPosTerpadu${polda_id}`).html(`
                            <table id="datatablePosTerpaduOnDisplay${polda_id}" class="table dt-responsive w-100" style="font-size: 12px;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th> 
                                        <th>Alamat</th> 
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="isiModalPosTerpaduDisplay${polda_id}">
                                </tbody>
                            </table>                     
                        `);
                        var countPosTerpaduDisplay = 0;
                        var listPosTerpaduDisplay = '';
                        $('#totalPosTerpaduDisplay').html(ressPosTerpadu.length);

                        var logoMarker = '';
                        var logoBody = '';
                        for (let i = 0; i < ressPosTerpadu.length; i++) {

                            if (ressPosTerpadu[i].coordinate_guarding && ressPosTerpadu[i].coordinate_guarding.lat != null && ressPosTerpadu[i].coordinate_guarding.lng != null) {
                                // setTimeout(() => {
                                countPosTerpaduDisplay += 1;
                                listPosTerpaduDisplay += `
                                        <tr>
                                            <td>${countPosTerpaduDisplay}</td>
                                            <td><a href="<?= base_url() ?>operasi/renpam/Edit/${ressPosTerpadu[i].polda_id}" target="_blank">${ressPosTerpadu[i].name_renpam}</a></td> 
                                            <td>${ressPosTerpadu[i].title_start != null ? ressPosTerpadu[i].title_start.replace(/\n/g, "<br />") : "-"}</td> 
                                            <td>
                                                <a class="btn" style="margin-top: -10px;"  
                                                    id="flyToMapFilterPosTerpadu${countPosTerpaduDisplay}"
                                                    data-akun="${ressPosTerpadu[i].accounts}"
                                                    data-cord="${ressPosTerpadu[i].coordinate_guarding.lat},${ressPosTerpadu[i].coordinate_guarding.lng}" 
                                                    href="javascript:void(0)">
                                                    <i style="color: #495057;" class="fa fas fa-eye"></i>
                                                </a> 
                                            </td>
                                        </tr>
                                    `;
                                $(`#isiModalPosTerpaduDisplay${polda_id}`).html(listPosTerpaduDisplay);


                                var latitudeFasum = parseFloat(ressPosTerpadu[i].coordinate_guarding.lat);
                                var longitudeFasum = parseFloat(ressPosTerpadu[i].coordinate_guarding.lng);
                                posTerpaduClusterGroup.addLayer(markerPosTerpadu[i] = L.marker([latitudeFasum, longitudeFasum], {
                                    icon: L.divIcon({
                                        // className: 'location-pin',
                                        html: `
                                        <div>
                                            <div style="position: relative;">
                                                <img src="<?php echo base_url(); ?>assets/icon/POSYAN.png" style="width: 40px; margin-top: -45px;margin-left: -18.5px;">
                                            </div> 
                                            <div style="position: absolute;margin-top: -29px;">
                                                <span class="badge rounded-pill bg-primary" >${ressPosTerpadu[i].name_renpam}</span>
                                            </div>
                                        </div>
                                        `,
                                        iconSize: [5, 5],
                                        iconAnchor: [5, 10]
                                        // iconAnchor: [10, 33]
                                    })
                                }).bindPopup(`
                                            <div class="text-center" style="width: 300px;height: 250px;overflow-x: hidden;scrollbar-width: thin;overflow-y: auto;"> 
                                                <div class="row mt-3"> 
                                                    <div class="col-md-12 col-12 mt-3">
                                                        <h5>${ressPosTerpadu[i].name_renpam}</h5> 
                                                        <span>- ${ressPosTerpadu[i].schedule.activity} -</span>
                                                    </div> 
                                                
                                            
                                                    <div class="col-md-12 col-12 text-start">
                                                        <p style="font-size: 12px;font-weight: bold;">Alamat</p>  
                                                        <p style="font-size: 12px; margin-top: -15px;">${ressPosTerpadu[i].title_start}</p>
                                                    </div> 
                                                    <div class="col-md-12 col-12 text-start" id="isiPosTerpadu${ressPosPam[i].id}">
                                                    
                                                    </div>
                                                </div>
                                            </div> 
                                    `, {
                                    minWidth: 100,
                                    maxWidth: 900,
                                    width: 300
                                }).on("click", function(e) {
                                    $("#overlayMenu").fadeIn(300);
                                    var akuns = ressPosTerpadu[i].accounts;
                                    var dataAkuns = '';
                                    if (akuns.length > 0) {
                                        $.ajax({
                                            type: "POST",
                                            url: "<?php echo base_url(); ?>dashboard/getAkunId",
                                            data: {
                                                "id": akuns[0]['id'],
                                            },
                                            dataType: "JSON",
                                            success: function(result) {
                                                var ress = result['data'];
                                                console.log({
                                                    a: 'ada',
                                                    b: ress
                                                });
                                                // dataAkuns += `<li>${ress['officer']['rank_officer']} - ${ress['officer']['name_officer']}</li>`;

                                                $(`#isiPosTerpadu${ressPosTerpadu[i].id}`).html(`
                                                            <p style="font-size: 12px;font-weight: bold;">Petugas</p>  
                                                            <div style="text-align: center">
                                                                <img src="<?php echo url_api(); ?>officer/${ress['officer']['photo_officer']}" class="img-thumbnail" alt="200x200" width="200" data-holder-rendered="true"></br>
                                                                <p class="mt-3" style="font-size: 12px; margin-top: -15px;">
                                                                    <b>Nama : </b> ${ress['officer']['rank_officer']} - ${ress['officer']['name_officer']} </br>
                                                                    <b>Nomor Telefon : </b> ${ress['officer']['phone_officer']} </br>
                                                                    <a class="btn" style="margin-top: -9px; color: #495057;" href="https://api.whatsapp.com/send?phone=${ress['officer']['phone_officer']}" target="_blank"><i class="fa fas fa-phone "></i></a>  
                                                                    <a class="btn" style="margin-left: -13px;margin-top: -7px; color: #495057;" onClick="sendZoom('${ress['officer']['id']}')" href="<?php echo base_url('zoom'); ?>" target="_blank"><i class="fa  fas fa-video "></i></a> 
                                                                </p>
                                                            </div>

                                                        `);
                                                $("#overlayMenu").fadeOut(300);
                                            }
                                        });
                                    } else {
                                        console.log({
                                            a: 'ga ada'
                                        });
                                    }
                                }));
                                // }, i * 500);
                            }
                        }


                        // setTimeout(() => {
                        for (let i = 0; i < countPosTerpaduDisplay; i++) {
                            $(`#flyToMapFilterPosTerpadu${i+1}`).on("click", function(e) {
                                var latlong = $(this).data('cord').split(',');
                                var latitude = parseFloat(latlong[0]);
                                var longitude = parseFloat(latlong[1]);
                                mapContainer.flyTo([latitude, longitude], 17);
                            });
                        }
                        // $(`#datatablePosTerpaduOnDisplay${polda_id}`).DataTable({
                        //     responsive: true,

                        //     scrollX: true,

                        //     sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

                        //     buttons: ["excel", "csv", "pdf"],
                        //     processing: true,
                        //     oLanguage: {

                        //         sSearch: 'Search:'

                        //     },
                        // }); 
                        mapContainer.addLayer(posTerpaduClusterGroup);
                        // }, countPosTerpaduDisplay.length * 500);
                    }

                    if (ressPosko && ressPosko.length > 0) {
                        $(`#isiPoldaPosko${polda_id}`).html(`
                            <table id="datatablePoskoOnDisplay${polda_id}" class="table dt-responsive w-100" style="font-size: 12px;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th> 
                                        <th>Alamat</th> 
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="isiModalPoskoDisplay${polda_id}">
                                </tbody>
                            </table>                     
                        `);
                        var countPoskoDisplay = 0;
                        var listPoskoDisplay = '';
                        $('#totalPoskoDisplay').html(ressPosko.length);

                        var logoMarker = '';
                        var logoBody = '';
                        for (let i = 0; i < ressPosko.length; i++) {

                            if (ressPosko[i].coordinate_guarding && ressPosko[i].coordinate_guarding.lat != null && ressPosko[i].coordinate_guarding.lng != null) {
                                // setTimeout(() => {
                                countPoskoDisplay += 1;
                                listPoskoDisplay += `
                                        <tr>
                                            <td>${countPoskoDisplay}</td>
                                            <td><a href="<?= base_url() ?>operasi/renpam/Edit/${ressPosko[i].polda_id}" target="_blank">${ressPosko[i].name_renpam}</a></td> 
                                            <td>${ressPosko[i].title_start != null ? ressPosko[i].title_start.replace(/\n/g, "<br />") : "-"}</td> 
                                            <td>
                                                <a class="btn" style="margin-top: -10px;"  
                                                    id="flyToMapFilterPosko${countPoskoDisplay}"
                                                    data-akun="${ressPosko[i].accounts}"
                                                    data-cord="${ressPosko[i].coordinate_guarding.lat},${ressPosko[i].coordinate_guarding.lng}" 
                                                    href="javascript:void(0)">
                                                    <i style="color: #495057;" class="fa fas fa-eye"></i>
                                                </a> 
                                            </td>
                                        </tr>
                                    `;
                                $(`#isiModalPoskoDisplay${polda_id}`).html(listPoskoDisplay);


                                var latitudeFasum = parseFloat(ressPosko[i].coordinate_guarding.lat);
                                var longitudeFasum = parseFloat(ressPosko[i].coordinate_guarding.lng);
                                poskoClusterGroup.addLayer(markerPosko[i] = L.marker([latitudeFasum, longitudeFasum], {
                                    icon: L.divIcon({
                                        // className: 'location-pin',
                                        html: `
                                        <div>
                                            <div style="position: relative;">
                                                <img src="<?php echo base_url(); ?>assets/icon/POSYAN.png" style="width: 40px; margin-top: -45px;margin-left: -18.5px;">
                                            </div> 
                                            <div style="position: absolute;margin-top: -29px;">
                                                <span class="badge rounded-pill bg-primary" >${ressPosko[i].name_renpam}</span>
                                            </div>
                                        </div>
                                        `,
                                        iconSize: [5, 5],
                                        iconAnchor: [5, 10]
                                        // iconAnchor: [10, 33]
                                    })
                                }).bindPopup(`
                                    <div class="text-center" style="width: 300px;height: 250px;overflow-x: hidden;scrollbar-width: thin;overflow-y: auto;"> 
                                        <div class="row mt-3">  
                                            <div class="col-md-12 col-12 mt-3">
                                                <h5>${ressPosko[i].name_renpam}</h5> 
                                                <span>- ${ressPosko[i].schedule.activity} -</span>
                                            </div> 
                                            
                                            <div class="col-md-12 col-12 text-start">
                                                <p style="font-size: 12px;font-weight: bold;">Alamat</p>  
                                                <p style="font-size: 12px; margin-top: -15px;">${ressPosko[i].title_start != null ? ressPosko[i].title_start.replace(/\n/g, "<br />") : "-"}</p>
                                            </div>   

                                            <div class="col-md-12 col-12 text-start" id="isi${ressPosko[i].id}">
                                            
                                            </div>
                                                
                                        </div>
                                    </div> 
                                    `, {
                                    minWidth: 100,
                                    maxWidth: 900,
                                    width: 300
                                })).on("click", function(e) {
                                    $("#overlayMenu").fadeIn(300);
                                    var akuns = ressPosko[i].accounts;
                                    var dataAkuns = '';
                                    if (akuns.length > 0) {
                                        $.ajax({
                                            type: "POST",
                                            url: "<?php echo base_url(); ?>dashboard/getAkunId",
                                            data: {
                                                "id": akuns[0]['id'],
                                            },
                                            dataType: "JSON",
                                            success: function(result) {
                                                var ress = result['data'];
                                                console.log({
                                                    a: 'ada',
                                                    b: ress
                                                });
                                                // dataAkuns += `<li>${ress['officer']['rank_officer']} - ${ress['officer']['name_officer']}</li>`;

                                                $(`#isi${ressPosko[i].id}`).html(`
                                                            <p style="font-size: 12px;font-weight: bold;">Petugas</p>  
                                                            <div style="text-align: center">
                                                                <img src="<?php echo url_api(); ?>officer/${ress['officer']['photo_officer']}" class="img-thumbnail" alt="200x200" width="200" data-holder-rendered="true"></br>
                                                                <p class="mt-3" style="font-size: 12px; margin-top: -15px;">
                                                                    <b>Nama : </b> ${ress['officer']['rank_officer']} - ${ress['officer']['name_officer']} </br>
                                                                    <b>Nomor Telefon : </b> ${ress['officer']['phone_officer']} </br>
                                                                    <a class="btn" style="margin-top: -9px; color: #495057;" href="https://api.whatsapp.com/send?phone=${ress['officer']['phone_officer']}" target="_blank"><i class="fa fas fa-phone "></i></a>  
                                                                    <a class="btn" style="margin-left: -13px;margin-top: -7px; color: #495057;" onClick="sendZoom('${ress['officer']['id']}')" href="<?php echo base_url('zoom'); ?>" target="_blank"><i class="fa  fas fa-video "></i></a> 
                                                                </p>
                                                            </div>

                                                        `);
                                                $("#overlayMenu").fadeOut(300);
                                            }
                                        });
                                    } else {
                                        console.log({ a: 'ga ada'  });
                                    }
                                });
                                // }, i * 500);
                            }
                        }


                        // setTimeout(() => {
                        for (let i = 0; i < countPoskoDisplay; i++) {
                            $(`#flyToMapFilterPosko${i+1}`).on("click", function(e) {
                                var latlong = $(this).data('cord').split(',');
                                var latitude = parseFloat(latlong[0]);
                                var longitude = parseFloat(latlong[1]);
                                mapContainer.flyTo([latitude, longitude], 17);
                            });
                        }
                        // $(`#datatablePoskoOnDisplay${polda_id}`).DataTable({
                        //     responsive: true,

                        //     scrollX: true,

                        //     sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

                        //     buttons: ["excel", "csv", "pdf"],
                        //     processing: true,
                        //     oLanguage: {

                        //         sSearch: 'Search:'

                        //     },
                        // }); 
                        mapContainer.addLayer(poskoClusterGroup);
                        // }, countPoskoDisplay.length * 500);
                    }

                    if (ressSatPjr && ressSatPjr.length > 0) {
                        $(`#isiPoldaSatPjr${polda_id}`).html(`
                            <table id="datatableSatPjrOnDisplay${polda_id}" class="table dt-responsive w-100" style="font-size: 12px;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th> 
                                        <th>Alamat</th> 
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="isiModalSatPjrDisplay${polda_id}">
                                </tbody>
                            </table>                     
                        `);
                        var countSatPjrDisplay = 0;
                        var listSatPjrDisplay = '';
                        $('#totalSatPjrDisplay').html(ressSatPjr.length);

                        var logoMarker = '';
                        var logoBody = '';
                        for (let i = 0; i < ressSatPjr.length; i++) {

                            if (ressSatPjr[i].coordinate_guarding && ressSatPjr[i].coordinate_guarding.lat != null && ressSatPjr[i].coordinate_guarding.lng != null) {
                                // setTimeout(() => {
                                countSatPjrDisplay += 1;
                                listSatPjrDisplay += `
                                        <tr>
                                            <td>${countSatPjrDisplay}</td>
                                            <td><a href="<?= base_url() ?>operasi/renpam/Edit/${ressSatPjr[i].polda_id}" target="_blank">${ressSatPjr[i].name_renpam}</a></td> 
                                            <td>${ressSatPjr[i].title_start != null ? ressSatPjr[i].title_start.replace(/\n/g, "<br />") : "-"}</td> 
                                            <td>
                                                <a class="btn" style="margin-top: -10px;"  
                                                    id="flyToMapFilterSatPjr${countSatPjrDisplay}"
                                                    data-akun="${ressSatPjr[i].accounts}"
                                                    data-cord="${ressSatPjr[i].coordinate_guarding.lat},${ressSatPjr[i].coordinate_guarding.lng}" 
                                                    href="javascript:void(0)">
                                                    <i style="color: #495057;" class="fa fas fa-eye"></i>
                                                </a> 
                                            </td>
                                        </tr>
                                    `;
                                $(`#isiModalSatPjrDisplay${polda_id}`).html(listSatPjrDisplay);


                                var latitudeFasum = parseFloat(ressSatPjr[i].coordinate_guarding.lat);
                                var longitudeFasum = parseFloat(ressSatPjr[i].coordinate_guarding.lng);
                                satPjrClusterGroup.addLayer(markerSatPjr[i] = L.marker([latitudeFasum, longitudeFasum], {
                                    icon: L.divIcon({
                                        // className: 'location-pin',
                                        html: `
                                        <div>
                                            <div style="position: relative;">
                                                <img src="<?php echo base_url(); ?>assets/icon/marker_PJR.png" style="width: 40px; margin-top: -45px;margin-left: -18.5px;">
                                            </div> 
                                            <div style="position: absolute;margin-top: -29px;">
                                                <span class="badge rounded-pill bg-primary" ${`style="background-color: #f2d91b !important; color: black;"`}>${ressSatPjr[i].name_renpam}</span>
                                            </div>
                                        </div>
                                        
                                        `,
                                        iconSize: [5, 5],
                                        iconAnchor: [5, 10]
                                        // iconAnchor: [10, 33]
                                    })
                                }).bindPopup(`
                                            <div class="text-center" style="width: 300px;height: 250px;overflow-x: hidden;scrollbar-width: thin;overflow-y: auto;"> 
                                                <div class="row mt-3">  
                                                    <div class="col-md-12 col-12 mt-3">
                                                        <h5>${ressSatPjr[i].name_renpam}</h5> 
                                                        <span>- ${ressSatPjr[i].schedule.activity} -</span>
                                                    </div> 
                                                    
                                                    <div class="col-md-12 col-12 text-start">
                                                        <p style="font-size: 12px;font-weight: bold;">Alamat</p>  
                                                        <p style="font-size: 12px; margin-top: -15px;">${ressSatPjr[i].title_start != null ? ressSatPjr[i].title_start.replace(/\n/g, "<br />") : "-"}</p>
                                                    </div>   

                                                    <div class="col-md-12 col-12 text-start" id="isi${ressSatPjr[i].id}">
                                                    
                                                    </div>
                                                        
                                                </div>
                                            </div> 
                                        `, {
                                    minWidth: 100,
                                    maxWidth: 900,
                                    width: 300
                                }).on("click", function(e) {
                                    $("#overlayMenu").fadeIn(300);
                                    var akuns = ressSatPjr[i].accounts;
                                    var dataAkuns = '';
                                    if (akuns.length > 0) {
                                        $.ajax({
                                            type: "POST",
                                            url: "<?php echo base_url(); ?>dashboard/getAkunId",
                                            data: {
                                                "id": akuns[0]['id'],
                                            },
                                            dataType: "JSON",
                                            success: function(result) {
                                                var ress = result['data'];
                                                console.log({
                                                    a: 'ada',
                                                    b: ress
                                                });
                                                // dataAkuns += `<li>${ress['officer']['rank_officer']} - ${ress['officer']['name_officer']}</li>`;

                                                $(`#isi${ressSatPjr[i].id}`).html(`
                                                            <p style="font-size: 12px;font-weight: bold;">Petugas</p>  
                                                            <div style="text-align: center">
                                                                <img src="<?php echo url_api(); ?>officer/${ress['officer']['photo_officer']}" class="img-thumbnail" alt="200x200" width="200" data-holder-rendered="true"></br>
                                                                <p class="mt-3" style="font-size: 12px; margin-top: -15px;">
                                                                    <b>Nama : </b> ${ress['officer']['rank_officer']} - ${ress['officer']['name_officer']} </br>
                                                                    <b>Nomor Telefon : </b> ${ress['officer']['phone_officer']} </br>
                                                                    <a class="btn" style="margin-top: -9px; color: #495057;" href="https://api.whatsapp.com/send?phone=${ress['officer']['phone_officer']}" target="_blank"><i class="fa fas fa-phone "></i></a>  
                                                                    <a class="btn" style="margin-left: -13px;margin-top: -7px; color: #495057;" onClick="sendZoom('${ress['officer']['id']}')" href="<?php echo base_url('zoom'); ?>" target="_blank"><i class="fa  fas fa-video "></i></a> 
                                                                </p>
                                                            </div>

                                                        `);
                                                $("#overlayMenu").fadeOut(300);
                                            }
                                        });
                                    } else {
                                        console.log({
                                            a: 'ga ada'
                                        });
                                    }
                                }));
                                // }, i * 500);
                            }
                        }


                        // setTimeout(() => {
                        for (let i = 0; i < countSatPjrDisplay; i++) {
                            $(`#flyToMapFilterSatPjr${i+1}`).on("click", function(e) {
                                var latlong = $(this).data('cord').split(',');
                                var latitude = parseFloat(latlong[0]);
                                var longitude = parseFloat(latlong[1]);
                                mapContainer.flyTo([latitude, longitude], 17);
                            });
                        }
                        // $(`#datatableSatPjrOnDisplay${polda_id}`).DataTable({
                        //     responsive: true,

                        //     scrollX: true,

                        //     sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

                        //     buttons: ["excel", "csv", "pdf"],
                        //     processing: true,
                        //     oLanguage: {

                        //         sSearch: 'Search:'

                        //     },
                        // }); 
                        mapContainer.addLayer(satPjrClusterGroup);
                        // }, countSatPjrDisplay.length * 500);
                    }

                    if (ressGerbangtol && ressGerbangtol.length > 0) {
                        $('#openModalGerbangtolDisplay').html(`
                            <table id="datatableGerbangtolOnDisplay" class="table dt-responsive w-100" style="font-size: 12px;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th> 
                                        <th>Alamat</th> 
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="isiModalGerbangtolDisplay">
                                </tbody>
                            </table>                     
                        `);
                        var countGerbangtolDisplay = 0;
                        var listGerbangtolDisplay = '';
                        $('#totalGerbangtolDisplay').html(ressGerbangtol.length);

                        var logoMarker = '';
                        var logoBody = '';
                        for (let i = 0; i < ressGerbangtol.length; i++) {

                            if (ressGerbangtol[i].fasum_lat != null && ressGerbangtol[i].fasum_lng != null) {
                                countGerbangtolDisplay += 1;
                                listGerbangtolDisplay += `
                                    <tr>
                                        <td>${countGerbangtolDisplay}</td>
                                        <td><a href="<?= base_url() ?>masterdata/Fasilitasumum" target="_blank">${ressGerbangtol[i].fasum_name}</a></td> 
                                        <td>${ressGerbangtol[i].fasum_description != null ? ressGerbangtol[i].fasum_description.replace(/\n/g, "<br />") : "-"}</td> 
                                        <td>
                                            <a class="btn" style="margin-top: -10px;"  
                                                id="flyToMapFilterGerbangtol${countGerbangtolDisplay}" 
                                                data-cord="${ressGerbangtol[i].fasum_lat},${ressGerbangtol[i].fasum_lng}" 
                                                href="javascript:void(0)">
                                                <i style="color: #495057;" class="fa fas fa-eye"></i>
                                            </a> 
                                        </td>
                                    </tr>
                                `;
                                $('#isiModalGerbangtolDisplay').html(listGerbangtolDisplay);

                                var latitudeGerbang = parseFloat(ressGerbangtol[i].fasum_lat);
                                var longitudeGerbang = parseFloat(ressGerbangtol[i].fasum_lng);
                                gerbangTolClusterGroup.addLayer(markerGerbangtol[i] = L.marker([latitudeGerbang, longitudeGerbang], {
                                    icon: L.divIcon({
                                        // className: 'location-pin',
                                        html: `
                                    <div>
                                        <div style="position: relative;">
                                            <img src="<?php echo base_url(); ?>assets/icon/gerbang tol.png" style="width: 40px; margin-top: -45px;margin-left: -18.5px;">
                                        </div> 
                                        <div style="position: absolute;margin-top: -29px;">
                                            <span class="badge rounded-pill bg-primary">${ressGerbangtol[i].fasum_name}</span>
                                        </div>
                                    </div>
                                    `,
                                        iconSize: [5, 5],
                                        iconAnchor: [5, 10]
                                        // iconAnchor: [10, 33] 
                                    })
                                }).bindPopup(`
                                        <div class="text-center" style="width: 300px;height: 250px;overflow-x: hidden;scrollbar-width: thin;overflow-y: auto;"> 
                                            <div class="row mt-3"> 
                                                <div class="col-md-12 col-12 mt-3">
                                                    <h5>${ressGerbangtol[i].fasum_name}</h5> 
                                                    <span>- Gerbang Tol -</span>
                                                </div>
                                                <div class="col-md-12 mt-3">
                                                    <img src="${ressGerbangtol[i].fasum_logo}" alt="" class="img-fluid d-block" style="width: 100%;">
                                                </div>
                                                

                                                <div class="col-md-12 col-12 mt-2">
                                                    <div class="row text-start">
                                                        <div class="col-md-12 col-12">
                                                            <p style="font-size: 12px;font-weight: bold;">Note</p>  
                                                            <p style="font-size: 12px; margin-top: -15px;">${ressGerbangtol[i].fasum_description != null ? ressGerbangtol[i].fasum_description.replace(/\n/g, "<br />") : "-"}</p>
                                                        </div> 
                                                    </div> 
                                                </div>  
                                            </div>
                                        </div> 
                                `, {
                                    minWidth: 100,
                                    maxWidth: 900,
                                    width: 300
                                }).on("click", function(e) {
                                    mapContainer.flyTo([e.latlng.lat, e.latlng.lng], 17);
                                }));

                            }
                        }


                        for (let i = 0; i < countGerbangtolDisplay; i++) {
                            $(`#flyToMapFilterGerbangtol${i+1}`).on("click", function(e) {
                                var latlong = $(this).data('cord').split(',');
                                var latitude = parseFloat(latlong[0]);
                                var longitude = parseFloat(latlong[1]);
                                mapContainer.flyTo([latitude, longitude], 17);
                            });
                        }
                        $('#datatableGerbangtolOnDisplay').DataTable({
                            responsive: true,

                            scrollX: true,

                            sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

                            buttons: ["excel", "csv", "pdf"],
                            processing: true,
                            oLanguage: {

                                sSearch: 'Search:'

                            },
                        });
                        mapContainer.addLayer(gerbangTolClusterGroup);
                    }

                    if (ressSatPas && ressSatPas.length > 0) {
                        $('#openModalSatPasDisplay').html(`
                            <table id="datatableSatPasOnDisplay" class="table dt-responsive w-100" style="font-size: 12px;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th> 
                                        <th>Alamat</th> 
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="isiModalSatPasDisplay">
                                </tbody>
                            </table>                     
                        `);
                        var countSatPasDisplay = 0;
                        var listSatPasDisplay = '';
                        $('#totalSatPasDisplay').html(ressSatPas.length);

                        var logoMarker = '';
                        var logoBody = '';
                        for (let i = 0; i < ressSatPas.length; i++) {
                            countSatPasDisplay += 1;
                            listSatPasDisplay += `
                                <tr>
                                    <td>${countSatPasDisplay}</td>
                                    <td><a href="<?= base_url() ?>masterdata/Fasilitasumum" target="_blank">${ressSatPas[i].fasum_name}</a></td> 
                                    <td>${ressSatPas[i].fasum_address}</td> 
                                    <td>
                                        <a class="btn" style="margin-top: -10px;"  
                                            id="flyToMapFilterSatPas${countSatPasDisplay}"
                                            data-cord="${ressSatPas[i].fasum_lat},${ressSatPas[i].fasum_lng}" 
                                            href="javascript:void(0)">
                                            <i style="color: #495057;" class="fa fas fa-eye"></i>
                                        </a> 
                                    </td>
                                </tr>
                            `;
                            $('#isiModalSatPasDisplay').html(listSatPasDisplay);


                            var latitudeFasum = parseFloat(ressSatPas[i].fasum_lat);
                            var longitudeFasum = parseFloat(ressSatPas[i].fasum_lng);
                            satPasClusterGroup.addLayer(markerSatPas[i] = L.marker([latitudeFasum, longitudeFasum], {
                                icon: L.divIcon({
                                    // className: 'location-pin',
                                    html: `
                                    <div>
                                        <div style="position: relative;">
                                            <img src="<?php echo base_url(); ?>assets/pin2.png" style="width: 50px;  margin-top: -35px;margin-left: -15px;">
                                        </div> 
                                        <div style="position: absolute;margin-top: -29px;">
                                            <span class="badge rounded-pill bg-primary" ${`style="background-color: #f2d91b !important"`}>${ressSatPas[i].fasum_name}</span>
                                        </div>
                                    </div>
                                    `,
                                    iconSize: [5, 5],
                                    iconAnchor: [5, 10]
                                    // iconAnchor: [10, 33]
                                })
                            }).bindPopup(`
                                        <div class="text-center" style="width: 300px;height: 250px;overflow-x: hidden;scrollbar-width: thin;overflow-y: auto;"> 
                                            <div class="row mt-3">
                                                <div class="col-md-12 col-12" style="margin-left: 210px;margin-bottom: 10px;">
                                                    <div class="avatar-xl me-3">
                                                    <a href="javascript:void(0);"><img src="<?php echo url_api(); ?>fasum_khusus/${ressSatPas[i].fasum_logo}" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 100%;"></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12 mt-3">
                                                    <h5>${ressSatPas[i].fasum_name}</h5> 
                                                    <span>- ${ressSatPas[i].category_fasum.name_category_fasum} -</span>
                                                </div>
                                                

                                                <div class="col-md-12 col-12 mt-2">
                                                    <div class="row text-start">
                                                        <div class="col-md-12 col-12">
                                                            <p style="font-size: 12px;font-weight: bold;">Kegiatan</p>  
                                                            <p style="font-size: 12px; margin-top: -15px;">${ressSatPas[i].fasum_description != null ? ressSatPas[i].fasum_description.replace(/\n/g, "<br />") : "-"}</p>
                                                        </div> 
                                                    </div> 
                                                </div>  
                                                <div class="col-md-12 col-12 mt-2">
                                                    <div class="row text-start">
                                                        <div class="col-md-12 col-12">
                                                            <p style="font-size: 12px;font-weight: bold;">Alamat</p>  
                                                            <p style="font-size: 12px; margin-top: -15px;">${ressSatPas[i].fasum_address}</p>
                                                        </div> 
                                                    </div> 
                                                </div>  
                                                <div class="col-md-12 col-12"  style="margin-top: -30px;">
                                                    <div class="row text-start">
                                                        <div class="col-md-12 col-12">
                                                            <p style="font-size: 12px;font-weight: bold;">No Telpon</p>  
                                                            <p style="font-size: 12px; margin-top: -15px;">${ressSatPas[i].fasum_phone}</p>
                                                        </div> 
                                                    </div> 
                                                </div>  
                                                <div class="col-md-12 col-12" style="margin-top: -30px;">
                                                    <div class="row text-start">
                                                        <div class="col-md-12 col-12">
                                                            <p style="font-size: 12px;font-weight: bold;">Waktu</p>  
                                                            <p style="font-size: 12px; margin-top: -15px;">${ressSatPas[i].fasum_open_time != null ? ressSatPas[i].fasum_open_time : '00:00'} - ${ressSatPas[i].fasum_close_time != null ? ressSatPas[i].fasum_close_time : '00:00'} WITA</p>
                                                        </div> 
                                                    </div> 
                                                </div>   
                                            </div>
                                        </div> 
                                `, {
                                minWidth: 100,
                                maxWidth: 900,
                                width: 300
                            }));
                        }


                        for (let i = 0; i < countSatPasDisplay; i++) {
                            $(`#flyToMapFilterSatPas${i+1}`).on("click", function(e) {
                                var latlong = $(this).data('cord').split(',');
                                var latitude = parseFloat(latlong[0]);
                                var longitude = parseFloat(latlong[1]);
                                mapContainer.flyTo([latitude, longitude], 17);
                            });
                        }
                        $('#datatableSatPasOnDisplay').DataTable({
                            responsive: true,

                            scrollX: true,

                            sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

                            buttons: ["excel", "csv", "pdf"],
                            processing: true,
                            oLanguage: {

                                sSearch: 'Search:'

                            },
                        });
                        mapContainer.addLayer(satPasClusterGroup);
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

                    if (ressRadius && ressRadius.length > 0) {
                        var logoMarker = '';
                        var logoBody = '';
                        $('#openModalRadiusDisplay').html(`
                            <table id="datatableRadiusOnDisplay" class="table dt-responsive w-100">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th> 
                                        <th>Radius</th> 
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="isiModalRadiusDisplay">
                                </tbody>
                            </table>                     
                        `);
                        var countRadiusDisplay = 0;
                        var listRadiusDisplay = '';
                        $('#totalRadiusDisplay').html(ressRadius.length);

                        for (let i = 0; i < ressRadius.length; i++) {
                            countRadiusDisplay += 1;
                            listRadiusDisplay += `
                                <tr>
                                    <td>${countRadiusDisplay}</td>
                                    <td><a href="<?= base_url() ?>masterdata/Fasilitasumum/radius" target="_blank">${ressRadius[i].fasum_name}</a></td> 
                                    <td>${ressRadius[i].fasum_radius} Kilometer</td> 
                                    <td>
                                        <a class="btn" style="margin-top: -10px;"  
                                            id="flyToMapFilterRadius${countRadiusDisplay}"
                                            data-cord="${ressRadius[i].fasum_lat},${ressRadius[i].fasum_lng}" 
                                            href="javascript:void(0)">
                                            <i style="color: #495057;" class="fa fas fa-eye"></i>
                                        </a> 
                                    </td>
                                </tr>
                            `;
                            $('#isiModalRadiusDisplay').html(listRadiusDisplay);

                            var latitudeRadius = parseFloat(ressRadius[i].fasum_lat);
                            var longitudeRadius = parseFloat(ressRadius[i].fasum_lng);
                            var set = ressRadius[i].fasum_radius != null ? ressRadius[i].fasum_radius : 1;
                            markerRadius[i] = L.circle([latitudeRadius, longitudeRadius], 1000 * set, {
                                color: 'yellow',
                                fillColor: '#f03',
                                weight: 2,
                                fillOpacity: 0.2
                            }).bindPopup(`
                                        <div class="text-center" style="width: 400px;height: 400px;overflow-x: hidden;scrollbar-width: thin;overflow-y: auto;"> 
                                            <div class="row mt-3"> 
                                                <div class="col-md-12 col-12 mt-3">
                                                    <h5>${ressRadius[i].fasum_name}</h5> 
                                                    <span>- ${ressRadius[i].category_fasum.name_category_fasum} : ${set} Kilometer-</span>
                                                </div>
                                                
                                                <div class="col-md-12 col-12 mt-2">
                                                    <div class="row text-start">
                                                        <div class="col-md-12 col-12 text-start">
                                                            <p style="font-size: 12px;font-weight: bold;">Akomodasi</p>  
                                                            <p style="font-size: 12px; margin-top: -13px;">${ressRadius[i].fasum_description.replace(/\n/g, "<br />")}</p>
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


                        for (let i = 0; i < countRadiusDisplay; i++) {
                            $(`#flyToMapFilterRadius${i+1}`).on("click", function(e) {
                                var latlong = $(this).data('cord').split(',');
                                var latitude = parseFloat(latlong[0]);
                                var longitude = parseFloat(latlong[1]);
                                mapContainer.flyTo([latitude, longitude], 14);
                            });
                        }
                        $('#datatableRadiusOnDisplay').DataTable({
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

                            markerCluster[i] = L.geoJSON(ressCluster[i].fasum_geoJson).addTo(mapContainer);
                        }


                        for (let i = 0; i < countClusterDisplay; i++) {
                            $(`#flyToMapFilterCluster${i+1}`).on("click", function(e) {
                                var latlong = $(this).data('cord').split(',');
                                var latitude = parseFloat(latlong[0]);
                                var longitude = parseFloat(latlong[1]);
                                mapContainer.flyTo([latitude, longitude], 9);
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
                        var countIsiLegen = 0;
                        var listIsiLegen = '';
                        var arrayGroupBy = new Array();

                        const groupByCategory = ressFasumKhusus.reduce((group, product) => {
                            const {
                                fasum_type,
                                fasum_logo
                            } = product;

                            group[fasum_logo] = group[fasum_logo] ?? [];
                            group[fasum_logo].push(product);

                            return group;
                        }, {});
                        var dataArrayGroup = Object.keys(groupByCategory)
                        // console.log(dataArrayGroup);


                        listIsiLegen += `
                            <div class="col-md-4">
                                <div style="display: flex;align-items: center;">
                                    <img src="<?php echo base_url(); ?>assets/icon/troublespot.png" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 20%;">
                                    <b style="font-size: 14px; text-transform: capitalize;">trouble spot</b>
                                </div> 
                            </div> 
                            <div class="col-md-4">
                                <div style="display: flex;align-items: center;">
                                    <img src="<?php echo base_url(); ?>assets/icon/blackspot.png" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 20%;">
                                    <b style="font-size: 14px; text-transform: capitalize;">black spot</b>
                                </div> 
                            </div> 
                            <div class="col-md-4">
                                <div style="display: flex;align-items: center;">
                                    <img src="<?php echo base_url(); ?>assets/icon/POSPAM.png" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 20%;">
                                    <b style="font-size: 14px; text-transform: capitalize;">POSPAM</b>
                                </div> 
                            </div> 
                            <div class="col-md-4">
                                <div style="display: flex;align-items: center;">
                                    <img src="<?php echo base_url(); ?>assets/icon/POSYAN.png" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 20%;">
                                    <b style="font-size: 14px; text-transform: capitalize;">POSYAN</b>
                                </div> 
                            </div> 
                            <div class="col-md-4">
                                <div style="display: flex;align-items: center;">
                                    <img src="<?php echo base_url(); ?>assets/icon/gerbang tol.png" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 20%;">
                                    <b style="font-size: 14px; text-transform: capitalize;">Gerbang Tol</b>
                                </div> 
                            </div>  
                            <div class="col-md-4">
                                <div style="display: flex;align-items: center;">
                                    <img src="<?php echo base_url(); ?>assets/icon/rest_area.png" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 20%;">
                                    <b style="font-size: 14px; text-transform: capitalize;">Rest Area</b>
                                </div> 
                            </div> 
                            <div class="col-md-4">
                                <div style="display: flex;align-items: center;">
                                    <img src="<?php echo base_url(); ?>assets/icon/cctv.png" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 20%;">
                                    <b style="font-size: 14px; text-transform: capitalize;">CCTV</b>
                                </div> 
                            </div> 
                            <div class="col-md-4">
                                <div style="display: flex;align-items: center;">
                                    <img src="<?php echo base_url(); ?>assets/icon/hotel.png" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 20%;">
                                    <b style="font-size: 14px; text-transform: capitalize;">Hotel</b>
                                </div> 
                            </div> 
                            <div class="col-md-4">
                                <div style="display: flex;align-items: center;">
                                    <img src="<?php echo base_url(); ?>assets/icon/gereja.png" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 20%;">
                                    <b style="font-size: 14px; text-transform: capitalize;">Gereja</b>
                                </div> 
                            </div> 
                            <div class="col-md-4">
                                <div style="display: flex;align-items: center;">
                                    <img src="<?php echo base_url(); ?>assets/icon/masjid.png" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 20%;">
                                    <b style="font-size: 14px; text-transform: capitalize;">Masjid</b>
                                </div> 
                            </div> 
                            <div class="col-md-4">
                                <div style="display: flex;align-items: center;">
                                    <img src="<?php echo base_url(); ?>assets/icon/stasiun.png" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 20%;">
                                    <b style="font-size: 14px; text-transform: capitalize;">Stasiun</b>
                                </div> 
                            </div> 
                            <div class="col-md-4">
                                <div style="display: flex;align-items: center;">
                                    <img src="<?php echo base_url(); ?>assets/icon/pelabuhan.png" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 20%;">
                                    <b style="font-size: 14px; text-transform: capitalize;">Pelabuhan</b>
                                </div> 
                            </div> 
                            <div class="col-md-4">
                                <div style="display: flex;align-items: center;">
                                    <img src="<?php echo base_url(); ?>assets/icon/pasar.png" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 20%;">
                                    <b style="font-size: 14px; text-transform: capitalize;">Pasar</b>
                                </div> 
                            </div> 
                            <div class="col-md-4">
                                <div style="display: flex;align-items: center;">
                                    <img src="<?php echo base_url(); ?>assets/icon/marker_PJR.png" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 20%;">
                                    <b style="font-size: 14px; text-transform: capitalize;">SAT PJR</b>
                                </div> 
                            </div> 
                        `;
                        for (let i = 0; i < dataArrayGroup.length; i++) {
                            if (dataArrayGroup[i] != "null") {
                                countIsiLegen += 1;

                                // listIsiLegen += `
                                //     <div class="col-md-4">
                                //         <div style="display: flex;align-items: center;">
                                //             <img src="<?php echo url_api(); ?>fasum_khusus/${dataArrayGroup[i]}" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 20%;">
                                //             <b style="font-size: 14px; text-transform: capitalize;">${dataArrayGroup[i].replace('.png', "")}</b>
                                //         </div> 
                                //     </div> 
                                // `;
                            }
                        }
                        $('#isiLegendFasum').html(listIsiLegen);


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

                            if (ressFasumKhusus[i].fasum_lat != null && ressFasumKhusus[i].fasum_lng != null) {
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

                                if (ressFasumKhusus[i].fasum_type == 22) {
                                    logoMarker = `<?php echo base_url(); ?>assets/icon/gereja.png`;
                                    logoBody = `<img src="<?php echo url_api(); ?>fasum_khusus/${ressFasumKhusus[i].fasum_image}" class="img-thumbnail" alt="200x200" width="500" data-holder-rendered="true">`;
                                } else {
                                    logoMarker = `<?php echo url_api(); ?>fasum_khusus/${ressFasumKhusus[i].fasum_logo}`;
                                    logoBody = `<img src="<?php echo url_api(); ?>fasum_khusus/${ressFasumKhusus[i].fasum_image}" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 100%;">`;
                                }

                                var latitudeFasum = parseFloat(ressFasumKhusus[i].fasum_lat);
                                var longitudeFasum = parseFloat(ressFasumKhusus[i].fasum_lng);
                                fasumKhususClusterGroup.addLayer(markerFasumKhusus[i] = L.marker([latitudeFasum, longitudeFasum], {
                                    icon: L.divIcon({
                                        // className: 'location-pin',
                                        html: `
                                    <div>
                                        <div style="position: relative;">
                                            <img src="${logoMarker}" style="width: 40px; margin-top: -45px;margin-left: -18.5px;">
                                        </div> 
                                        <div style="position: absolute;margin-top: -29px;">
                                            <span class="badge rounded-pill bg-primary" >${ressFasumKhusus[i].fasum_name}</span>
                                        </div>
                                    </div>
                                    `,
                                        iconSize: [5, 5],
                                        iconAnchor: [5, 10]
                                        // iconAnchor: [10, 33]
                                    })
                                }).bindPopup(`
                                        <div class="text-center" style="width: 300px;height: 250px;overflow-x: hidden;scrollbar-width: thin;overflow-y: auto;"> 
                                            <div class="row mt-3">
                                                <div class="col-md-12 col-12 mt-3">
                                                    <h5>${ressFasumKhusus[i].fasum_name}</h5> 
                                                    <span>- ${ressFasumKhusus[i].category_fasum.name_category_fasum} -</span>
                                                </div>
                                                <div class="col-md-12 col-12 mt-3" style="margin-left: 210px;margin-bottom: 10px;">
                                                    <div class="avatar-xl me-3">
                                                        <a href="javascript:void(0);">
                                                            ${logoBody}
                                                        </a>
                                                    </div>
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
                                    width: 300
                                }));
                            }
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


            if ($("#samsat").is(':checked')) {
                $("#samsatDisplay").prop('checked', true);
                // $("#myModalPanicDisplay").modal('show');
            } else {
                $("#samsatDisplay").prop('checked', false);
                $("#samsatDisplay").val();
            }

            if ($("#jalur").is(':checked')) {
                $("#jalurDisplay").prop('checked', true);
                // $("#myModalPanicDisplay").modal('show');
            } else {
                $("#jalurDisplay").prop('checked', false);
                $("#jalurDisplay").val();
            }

            if ($("#gerbangtol").is(':checked')) {
                $("#gerbangtolDisplay").prop('checked', true);
                // $("#myModalPanicDisplay").modal('show');
            } else {
                $("#gerbangtolDisplay").prop('checked', false);
                $("#gerbangtolDisplay").val();
            }

            if ($("#trouble_spot").is(':checked')) {
                $("#trouble_spotDisplay").prop('checked', true);
                // $("#myModalPanicDisplay").modal('show');
            } else {
                $("#trouble_spotDisplay").prop('checked', false);
                $("#trouble_spotDisplay").val();
            }

            if ($("#blank_spot").is(':checked')) {
                $("#blank_spotDisplay").prop('checked', true);
                // $("#myModalPanicDisplay").modal('show');
            } else {
                $("#blank_spotDisplay").prop('checked', false);
                $("#blank_spotDisplay").val();
            }

            if ($("#rest_area").is(':checked')) {
                $("#restAreaDisplay").prop('checked', true);
            } else {
                $("#restAreaDisplay").prop('checked', false);
                $("#restAreaDisplay").val();
            }

            if ($("#pos_pam").is(':checked')) {
                $("#posPamDisplay").prop('checked', true);
            } else {
                $("#posPamDisplay").prop('checked', false);
                $("#posPamDisplay").val();
            }

            if ($("#pos_yan").is(':checked')) {
                $("#posYanDisplay").prop('checked', true);
            } else {
                $("#posYanDisplay").prop('checked', false);
                $("#posYanDisplay").val();
            }

            if ($("#pos_terpadu").is(':checked')) {
                $("#posTerpaduDisplay").prop('checked', true);
            } else {
                $("#posTerpaduDisplay").prop('checked', false);
                $("#posTerpaduDisplay").val();
            }

            if ($("#posko").is(':checked')) {
                $("#poskoDisplay").prop('checked', true);
            } else {
                $("#poskoDisplay").prop('checked', false);
                $("#poskoDisplay").val();
            }

            if ($("#sat_pjr").is(':checked')) {
                $("#satPjrDisplay").prop('checked', true);
            } else {
                $("#satPjrDisplay").prop('checked', false);
                $("#satPjrDisplay").val();
            }

            if ($("#polres").is(':checked')) {
                $("#polresDisplay").prop('checked', true);
                $("#myModalClusterDisplay").modal('show');
            } else {
                $("#polresDisplay").prop('checked', false);
                $("#polresDisplay").val();
            }

            if ($("#sat_pas").is(':checked')) {
                $("#satPasDisplay").prop('checked', true);
            } else {
                $("#satPasDisplay").prop('checked', false);
                $("#satPasDisplay").val();
            }


            if ($("#radius").is(':checked')) {
                $("#radiusDisplay").prop('checked', true);
                // $("#myModalRadiusDisplay").modal('show');
            } else {
                $("#radiusDisplay").prop('checked', false);
                $("#radiusDisplay").val();
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
                    if (markerPolda[i]) {
                        mapContainer.removeLayer(markerPolda[i]);
                    }
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






        $("#samsatDisplay").on("change", function(e) {
            if ($(this).is(':checked')) {
                openDisplay = this.value;
                $("#samsat").prop('checked', true);
                $("#myModalSamsatDisplay").modal('show');
            } else {
                openDisplay = '';
                $("#samsat").prop('checked', false);
                $("#samsat").val();
            }
            serverSideFilter();
        });

        $("#jalurDisplay").on("change", function(e) {
            if ($(this).is(':checked')) {
                openDisplay = this.value;
                $("#jalur").prop('checked', true);
                $("#myModalJalurDisplay").modal('show');
            } else {
                openDisplay = '';
                $("#jalur").prop('checked', false);
                $("#jalur").val();
            }
            serverSideFilter();
        });

        $("#gerbangtolDisplay").on("change", function(e) {
            if ($(this).is(':checked')) {
                openDisplay = this.value;
                $("#gerbangtol").prop('checked', true);
                $("#myModalGerbangtolDisplay").modal('show');
            } else {
                openDisplay = '';
                $("#gerbangtol").prop('checked', false);
                $("#gerbangtol").val();
            }
            serverSideFilter();
        });

        $("#trouble_spotDisplay").on("change", function(e) {
            if ($(this).is(':checked')) {
                openDisplay = this.value;
                $("#trouble_spot").prop('checked', true);
                $("#myModalTroubleSpotDisplay").modal('show');
            } else {
                openDisplay = '';
                $("#trouble_spot").prop('checked', false);
                $("#trouble_spot").val();
            }
            serverSideFilter();
        });

        $("#blank_spotDisplay").on("change", function(e) {
            if ($(this).is(':checked')) {
                openDisplay = this.value;
                $("#blank_spot").prop('checked', true);
                $("#myModalBlankSpotDisplay").modal('show');
            } else {
                openDisplay = '';
                $("#blank_spot").prop('checked', false);
                $("#blank_spot").val();
            }
            serverSideFilter();
        });
        $("#restAreaDisplay").on("change", function(e) {
            if ($(this).is(':checked')) {
                openDisplay = this.value;
                $("#rest_area").prop('checked', true);
                $("#myModalRestAreaDisplay").modal('show');
            } else {
                openDisplay = '';
                $("#rest_area").prop('checked', false);
                $("#rest_area").val();
            }
            serverSideFilter();
        });

        $("#posPamDisplay").on("change", function(e) {
            if ($(this).is(':checked')) {
                openDisplay = this.value;
                $("#pos_pam").prop('checked', true);
                $("#myModalPosPamDisplay").modal('show');
            } else {
                openDisplay = '';
                $("#pos_pam").prop('checked', false);
                $("#pos_pam").val();
            }
            // serverSideFilter();
        });

        $("#posYanDisplay").on("change", function(e) {
            if ($(this).is(':checked')) {
                openDisplay = this.value;
                $("#pos_yan").prop('checked', true);
                $("#myModalPosYanDisplay").modal('show');
            } else {
                openDisplay = '';
                $("#pos_yan").prop('checked', false);
                $("#pos_yan").val();
            }
            // serverSideFilter();
        });

        $("#posTerpaduDisplay").on("change", function(e) {
            if ($(this).is(':checked')) {
                openDisplay = this.value;
                $("#pos_terpadu").prop('checked', true);
                $("#myModalPosTerpaduDisplay").modal('show');
            } else {
                openDisplay = '';
                $("#pos_terpadu").prop('checked', false);
                $("#pos_terpadu").val();
            }
            // serverSideFilter();
        });

        $("#poskoDisplay").on("change", function(e) {
            if ($(this).is(':checked')) {
                openDisplay = this.value;
                $("#posko").prop('checked', true);
                $("#myModalPoskoDisplay").modal('show');
            } else {
                openDisplay = '';
                $("#posko").prop('checked', false);
                $("#posko").val();
            }
            // serverSideFilter();
        });

        $("#satPjrDisplay").on("change", function(e) {
            if ($(this).is(':checked')) {
                openDisplay = this.value;
                $("#satPjr").prop('checked', true);
                $("#myModalSatPjrDisplay").modal('show');
            } else {
                openDisplay = '';
                $("#satPjr").prop('checked', false);
                $("#satPjr").val();
            }
            // serverSideFilter();
        });

        $("#satPasDisplay").on("change", function(e) {
            if ($(this).is(':checked')) {
                openDisplay = this.value;
                $("#sat_pas").prop('checked', true);
                $("#myModalSatPasDisplay").modal('show');
            } else {
                openDisplay = '';
                $("#sat_pas").prop('checked', false);
                $("#sat_pas").val();
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

        $("#radiusDisplay").on("change", function(e) {
            if ($(this).is(':checked')) {
                openDisplay = this.value;
                $("#radius").prop('checked', true);
                $("#myModalRadiusDisplay").modal('show');
            } else {
                openDisplay = '';
                $("#radius").prop('checked', false);
                $("#radius").val();
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
        $("#radiusFilterModal").on("click", function(e) {
            $("#myModalClusterDisplay").modal('show');
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


        $("#samsatFilterModal").on("click", function(e) {
            $("#myModalSamsatDisplay").modal('show');
        });
        $("#jalurFilterModal").on("click", function(e) {
            $("#myModalJalurDisplay").modal('show');
        });
        $("#gerbangtolFilterModal").on("click", function(e) {
            $("#myModalGerbangtolDisplay").modal('show');
        });

        $("#troubleSpotFilterModal").on("click", function(e) {
            $("#myModalTroubleSpotDisplay").modal('show');
        });
        $("#blankSpotFilterModal").on("click", function(e) {
            $("#myModalBlankSpotDisplay").modal('show');
        });

        $("#restAreaFilterModal").on("click", function(e) {
            $("#myModalRestAreaDisplay").modal('show');
        });
        $("#posPamFilterModal").on("click", function(e) {
            $("#myModalPosPamDisplay").modal('show');
        });
        $("#posYanFilterModal").on("click", function(e) {
            $("#myModalPosYanDisplay").modal('show');
        });
        $("#posTerpaduFilterModal").on("click", function(e) {
            $("#myModalPosTerpaduDisplay").modal('show');
        });
        $("#poskoFilterModal").on("click", function(e) {
            $("#myModalPoskoDisplay").modal('show');
        });
        $("#satPjrFilterModal").on("click", function(e) {
            $("#myModalSatPjrDisplay").modal('show');
        });

        $("#satPasFilterModal").on("click", function(e) {
            $("#myModalSatPasDisplay").modal('show');
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
                } else if (openDisplay == 'radius') {
                    $("#myModalRadiusDisplay").modal('show');
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
                } else if (openDisplay == 'pos_pam') {
                    $("#myModalPosPamDisplay").modal('show');
                } else if (openDisplay == 'pos_yan') {
                    $("#myModalPosYanDisplay").modal('show');
                } else if (openDisplay == 'pos_terpadu') {
                    $("#myModalPosTerpaduDisplay").modal('show');
                } else if (openDisplay == 'posko') {
                    $("#myModalPoskoDisplay").modal('show');
                } else if (openDisplay == 'sat_pjr') {
                    $("#myModalSatPjrDisplay").modal('show');
                } else if (openDisplay == 'sat_pas') {
                    $("#myModalSatPasDisplay").modal('show');
                } else if (openDisplay == 'rest_area') {
                    $("#myModalRestAreaDisplay").modal('show');
                } else if (openDisplay == 'trouble_spot') {
                    $("#myModalTroubleSpotDisplay").modal('show');
                } else if (openDisplay == 'blank_spot') {
                    $("#myModalBlankSpotDisplay").modal('show');
                } else if (openDisplay == 'polres') {
                    $("#myModalPolresDisplay").modal('show');
                } else if (openDisplay == 'polda') {
                    $("#myModalPoldaDisplay").modal('show');
                } else if (openDisplay == 'jalur') {
                    $("#myModalJalurDisplay").modal('show');
                } else if (openDisplay == 'gerbang_tol') {
                    $("#myModalGerbangtolDisplay").modal('show');
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
                            // serverSideGet();
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
                                        var idJadwalRenpam = [];
                                        var awalJadwalRenpam = [];
                                        var akhirJadwalRenpam = [];

                                        var warnaRenpam = [];
                                        var nameRenpam = [];
                                        var dummyName = [];
                                        var dummyType = [];
                                        var dummyidJadwal = [];
                                        var dummyAwal = [];
                                        var dummyAkhir = [];

                                        var dummyWarna = [];
                                        var dummyNameRenpam = [];

                                        var dummyTitik = [];

                                        var dummy = [];
                                        var dummy1 = [];
                                        var dummy2 = [];
                                        var dummy3 = [];
                                        var dummy4 = [];


                                        var dummyJadwalRenpamTitik = [];

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

                                        var ruteKondisi = '';

                                        ressJadwalId.forEach(el => {

                                            $(`#totalCategJadwal${ress[m]['id']}`).html(ressJadwalId.length);
                                            dummyName = [];
                                            dummyType = [];
                                            dummyidJadwal = [];
                                            dummyAwal = [];
                                            dummyAkhir = [];

                                            // warnaRenpam = [];
                                            // nameRenpam = [];

                                            dummyWarna = [];
                                            dummyNameRenpam = [];

                                            dummyTitik = [];

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

                                            ruteKondisi = '';

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
                                                    dummyidJadwal.push(sortUrutanRenpam[i]['schedule_id']);
                                                    dummyAwal.push(sortUrutanRenpam[i]['awal_renpam']);
                                                    dummyAkhir.push(sortUrutanRenpam[i]['akhir_renpam']);

                                                    nameJadwalRenpam[countlist] = dummyName;
                                                    typeJadwalRenpam[countlist] = dummyType;
                                                    idJadwalRenpam[countlist] = dummyidJadwal;
                                                    awalJadwalRenpam[countlist] = dummyAwal;
                                                    akhirJadwalRenpam[countlist] = dummyAkhir;

                                                    dummyWarna.push(sortUrutanRenpam[i]['warnaRoute_renpam']);
                                                    warnaRenpam[countlist] = dummyWarna;

                                                    dummyNameRenpam.push(sortUrutanRenpam[i]['name_renpam']);
                                                    nameRenpam[countlist] = dummyNameRenpam;

                                                    dummyTitik.push(sortUrutanRenpam[i]['coordinate_guarding']);

                                                    dummy.push(sortUrutanRenpam[i]['route']);
                                                    dummy1.push(sortUrutanRenpam[i]['route_alternatif_1']);
                                                    dummy2.push(sortUrutanRenpam[i]['route_alternatif_2']);
                                                    dummy3.push(sortUrutanRenpam[i]['route_masyarakat']);
                                                    dummy4.push(sortUrutanRenpam[i]['route_umum']);


                                                    dummyJadwalRenpamTitik[countlist] = dummyTitik;

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

                                                    if (sortUrutanRenpam[i]['type_renpam'] == '3') {
                                                        ruteKondisi = `
                                                                <td>
                                                                    <button class="btn" style="margin-left: -13px;margin-top: -13px;"
                                                                        id="clickTitikPenjagaan${ress[m]['id']}${countlistRenpam}"   
                                                                        data-name="${sortUrutanRenpam[i]['name_renpam']}" 
                                                                        data-cord="${sortUrutanRenpam[i]['coordinate_guarding']['lat']},${sortUrutanRenpam[i]['coordinate_guarding']['lng']}" >
                                                                        <i style="color: #495057;" class="fa fas fa-eye"></i>
                                                                    </button>
                                                                </td>
                                                            `;
                                                    } else {
                                                        ruteKondisi = `
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
                                                            `;
                                                    }

                                                    dummyRenpam += `
                                                            <tr>
                                                                ${ruteKondisi}
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

                                                    checkboxJadwal = `
                                                            <input type="checkbox" class="form-input" name="selectJadwalRenpam" 
                                                            id="listJadwalRenpamClick${ress[m]['id']}${countlistCategoriByCateg}"  
                                                              
                                                            data-totaldata="${sortUrutanRenpam.length}"
                                                            >
                                                        `;
                                                }

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


                                            $(`#clickTitikPenjagaan${ress[m]['id']}${i+1}`).click(function() {
                                                console.log('ada');
                                                var latlong = $(this).data('cord').split(',');
                                                var latitude = parseFloat(latlong[0]);
                                                var longitude = parseFloat(latlong[1]);
                                                mapContainer.flyTo([latitude, longitude], 14);
                                            });

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



                                                    if (typeRenpam == 3) {

                                                        var iconMarkerPengjagaan = '';
                                                        var id_jadwal = idJadwalRenpam[i + 1][ii];
                                                        if (id_jadwal == '88') {
                                                            iconMarkerPengjagaan = `<img src="<?= base_url('assets/icon/POSPAM.png') ?>" style="width: 50px; margin-top: -35px;margin-left: -21px;">`;
                                                        } else {
                                                            iconMarkerPengjagaan = `<img src="<?= base_url('assets/icon/POSYAN.png') ?>" style="width: 50px; margin-top: -35px;margin-left: -21px;">`;
                                                        }

                                                        if ($(this).is(':checked')) {
                                                            markerTitikGlobal[[i + 1][ii]] = L.marker([dummyJadwalRenpamTitik[i + 1][ii]['lat'], dummyJadwalRenpamTitik[i + 1][ii]['lng']], {
                                                                renderer: myRenderer,
                                                                icon: L.divIcon({
                                                                    // className: 'location-pin',
                                                                    html: iconMarkerPengjagaan,
                                                                    iconSize: [5, 5],
                                                                    iconAnchor: [5, 10]
                                                                })
                                                            }).bindPopup(``).addTo(mapContainer);
                                                        } else {
                                                            mapContainer.removeLayer(markerTitikGlobal[[i + 1][ii]]);
                                                        }

                                                    } else {
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
                addItemText: (value) => {
                    return `Press Enter to add <b>"${value}"</b>`;
                },
            });

            // $("#id_account").on('keyup', function(e){
            //     console.log(this.value);
            // });

        });

    });

    function hitungGpsId() {
        console.log(markerGpsId.length);
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

        var initialCenter = [-0.8458708, 118.8661073];
        var initialZoom = 4.5;
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

        var initialCenter = [-0.8458708, 118.8661073];
        var initialZoom = 4.5;
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

        var initialCenter = [-0.8458708, 118.8661073];
        var initialZoom = 4.5;
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

        var initialCenter = [-0.8458708, 118.8661073];
        var initialZoom = 4.5;
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

        var initialCenter = [-0.8458708, 118.8661073];
        var initialZoom = 4.5;
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


    function openNav() {
        document.getElementById("mySidenav").style.width = "50%";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
</script>