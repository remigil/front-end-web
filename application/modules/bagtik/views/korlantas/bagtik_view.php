<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 align-self-center">
            <div id="nama">
                <div style="display: flex;">
                    <?php if ($this->session->userdata['role'] == 'KaBagOps' || $this->session->userdata['role'] == 'Kakorlantas') { ?>
                        <h3><a href="<?= base_url('dashboard') ?>" style="color:#007DD8 ;"><i class="fas fa-less-than"></i>|</a></h3>
                        &nbsp;&nbsp; <h3 style="text-transform: uppercase; color:#007DD8;"> BagTik</h3>
                    <?php } else { ?>
                        <h3 style="text-transform: uppercase; color:#007DD8;"> BagTik</h3>
                    <?php } ?>
                </div>
            </div>
            <p>Today is <?= date('l, j F Y') ?></p>
        </div>

        <?php $mobile = detect_mobile();
        if ($mobile === true) { ?>
            <div class="col-md-12" style="margin-left: -15px;">
                <button type="button" class="btn btn-primary ms-3" style=" border: 0.5px solid #0275d8; height:-20px" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <iconify-icon icon="mdi:file-document-multiple"></iconify-icon>
                </button>
                <a href="http://34.143.227.90:3001/v1/laporan_harian/export_laphar" class="text-center"><button class="btn btn-outline-primary" style="width: 200px; border-color:#007DD8;">Export Laporan</button></a>
            </div>
        <?php } else { ?>
            <div class="col-md-2 text-end align-self-center"></div>
            <div class="col-md-2 text-end align-self-center">
                <button type="button" class="btn btn-outline-primary" style="width: 200px; border-color:#007DD8;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <!-- <iconify-icon icon="mdi:file-document-multiple"></iconify-icon> -->
                    Struktur Organisasi
                </button>
            </div>
            <!-- <div class="col-md-2 text-end align-self-center" style="margin-left: -4%;">

                <div class="btn-group">
                    <button type="button" class="btn dropdown-toggle btn-outline-primary" data-bs-toggle="dropdown" aria-expanded="false" style="width: 200px; border-color:#007DD8;">
                        Pilih Laporan <i class="fas fa-caret-down"></i>
                    </button>

                    <div class="dropdown-menu" style="width: 200px; background-color:#D9D9D9">
                        <a class="dropdown-item" target="_blank" download href="<?= ApiUrl() ?>laporan_harian/export_laphar'); ?>">Harian</a>
                        <a class="dropdown-item" target="_blank" download href="<?= ApiUrl() ?>laporan_harian/export_laphar'); ?>">Mingguan</a>
                        <a class="dropdown-item" target="_blank" download href="<?= ApiUrl() ?>laporan_harian/export_laphar');?>">Bulanan</a>
                        <a class="dropdown-item" target="_blank" download href="<?= ApiUrl() ?>laporan_harian/export_laphar');?>">Triwulan</a>
                        <a class="dropdown-item" target="_blank" download href="<?= ApiUrl() ?>laporan_harian/export_laphar');?>">Tahunan</a>
                    </div>
                </div>
            </div> -->
            <!-- <div class="col-md-3 text-end align-self-center">
                <a href="http://34.143.227.90:3001/v1/" class="text-center"><button class="btn btn-outline-primary" style="width: 200px; border-color:#007DD8;">Export Laporan</button></a>
            </div> -->
        <?php } ?>

    </div>

    <!-- <div class="row">

        <div class="col-md-12 mt-5">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-4 mb-3">
                    <h4 style="text-transform: uppercase; color:#007DD8;">Statistik Nasional</h4>
                </div>

            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                        <div class="card-body">
                            <div class="row justify-content-between align-items-center" style="font-size: 40px;">
                                <div class="col-md-10 float-start">
                                    <p class="fs-5 float-start" style="color:#464646;">
                                        <span class="fw-bold">Total SUBBAG ANBANGSISTEK</span>
                                        <br>
                                        <span class="fs-6 fw-bold float-start" style="color:#464646;" id="subbagambangsistek"></span>
                                    <p class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detailsubrenop"></p>
                                    </p>
                                </div>
                                <div class=" col-md-2">
                                    <img src="<?= base_url('assets/icon/dashboard/Anbangsistek.png') ?>" alt="" style="width: 60px; margin-left:-25px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                        <div class="card-body">
                            <div class="row justify-content-between align-items-center" style="font-size: 40px;">
                                <div class="col-md-10 float-start">
                                    <p class="fs-5 float-start" style="color:#464646;">
                                        <span class="fw-bold">Total SUBBAG JARSISTEK</span>
                                        <br>
                                        <span class="fs-6 fw-bold float-start" style="color:#464646;" id="subbagjarsistek"></span>
                                    <p class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detailsubrenop"></p>
                                    </p>
                                </div>
                                <div class=" col-md-2">
                                    <img src="<?= base_url('assets/icon/dashboard/Jarsistek.png') ?>" alt="" style="width: 60px; margin-left:-25px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                        <div class="card-body">
                            <div class="row justify-content-between align-items-center" style="font-size: 40px;">
                                <div class="col-md-10 float-start">
                                    <p class="fs-5 float-start" style="color:#464646;">
                                        <span class="fw-bold">Total SUBBAG HARSISTEK</span>
                                        <br>
                                        <span class="fs-6 fw-bold float-start" style="color:#464646;" id="subbagharsistek"></span>
                                    <p class="float-start m-0 p-0 ms-2" style="font-size: 18px;" id="detailsubrenop"></p>
                                    </p>
                                </div>
                                <div class=" col-md-2">
                                    <img src="<?= base_url('assets/icon/dashboard/Harsistek.png') ?>" alt="" style="width: 60px; margin-left:-25px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

</div>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-around">
                <div class="col-md-5">
                    <center><span class="fs-2 fw-bold">RTMC</span><br></center>
                    <table class="table table-striped table-bordered fs-3 text-uppercase mt-2" style="line-height: 0.7;">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center table-primary" width="70%">Polda</th>
                                <th scope="col" class="text-center table-primary" width="30%">RTMC</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Polda Aceh</td>
                                <td class="text-end">12</td>
                            </tr>
                            <tr>
                                <td>Polda Sumut</td>
                                <td class="text-end">24</td>
                            </tr>
                            <tr>
                                <td>Polda Sumbar</td>
                                <td class="text-end">11</td>
                            </tr>
                            <tr>
                                <td>Polda Riau</td>
                                <td class="text-end">17</td>
                            </tr>
                            <tr>
                                <td>Polda Bengkulu</td>
                                <td class="text-end">14</td>
                            </tr>
                            <tr>
                                <td>Polda Jambi</td>
                                <td class="text-end">15</td>
                            </tr>
                            <tr>
                                <td>Polda Sumsel</td>
                                <td class="text-end">45</td>
                            </tr>
                            <tr>
                                <td>Polda Lampung</td>
                                <td class="text-end">22</td>
                            </tr>
                            <tr>
                                <td>Polda Metro Jaya</td>
                                <td class="text-end">24</td>
                            </tr>
                            <tr>
                                <td>Polda Jabar</td>
                                <td class="text-end">27</td>
                            </tr>
                            <tr>
                                <td>Polda Jateng</td>
                                <td class="text-end">21</td>
                            </tr>
                            <tr>
                                <td>Polda DIY</td>
                                <td class="text-end">14</td>
                            </tr>
                            <tr>
                                <td>Polda Jatim</td>
                                <td class="text-end">17</td>
                            </tr>
                            <tr>
                                <td>Polda Bali</td>
                                <td class="text-end">26</td>
                            </tr>
                            <tr>
                                <td>Polda NTB</td>
                                <td class="text-end">14</td>
                            </tr>
                            <tr>
                                <td>Polda NTT</td>
                                <td class="text-end">10</td>
                            </tr>
                            <tr>
                                <td>Polda Kalbar</td>
                                <td class="text-end">12</td>
                            </tr>
                            <tr>
                                <td>Polda Kalsel</td>
                                <td class="text-end">10</td>
                            </tr>
                            <tr>
                                <td>Polda Kalteng</td>
                                <td class="text-end">10</td>
                            </tr>
                            <tr>
                                <td>Polda Kaltim</td>
                                <td class="text-end">8</td>
                            </tr>
                            <tr>
                                <td>Polda Sulsel</td>
                                <td class="text-end">9</td>
                            </tr>
                            <tr>
                                <td>Polda Sultra</td>
                                <td class="text-end">6</td>
                            </tr>
                            <tr>
                                <td>Polda Sulteng</td>
                                <td class="text-end">15</td>
                            </tr>
                            <tr>
                                <td>Polda Sulut</td>
                                <td class="text-end">19</td>
                            </tr>
                            <tr>
                                <td>Polda Maluku</td>
                                <td class="text-end">17</td>
                            </tr>
                            <tr>
                                <td>Polda Papua</td>
                                <td class="text-end">6</td>
                            </tr>
                            <tr>
                                <td>Polda Babel</td>
                                <td class="text-end">7</td>
                            </tr>
                            <tr>
                                <td>Polda Banten</td>
                                <td class="text-end">19</td>
                            </tr>
                            <tr>
                                <td>Polda Gorontalo</td>
                                <td class="text-end">8</td>
                            </tr>
                            <tr>
                                <td>Polda Malut</td>
                                <td class="text-end">5</td>
                            </tr>
                            <tr>
                                <td>Polda Kepri</td>
                                <td class="text-end">10</td>
                            </tr>
                            <tr>
                                <td>Polda Papua Barat</td>
                                <td class="text-end">2</td>
                            </tr>
                            <tr>
                                <td>Polda Sulbar</td>
                                <td class="text-end">8</td>
                            </tr>
                            <tr>
                                <td>Polda Kaltara</td>
                                <td class="text-end">2</td>
                            </tr>
                            <tr>
                                <td>Pusdik Lantas</td>
                                <td class="text-end">21</td>
                            </tr>
                            <tr>
                                <td>Korlantas Polri</td>
                                <td class="text-end">86</td>
                            </tr>
                            <tr>
                                <th>Total</th>
                                <th class="text-end">593</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-5">
                    <center><span class="fs-2 fw-bold">TMC</span><br></center>
                    <table class="table table-striped table-bordered fs-3 text-uppercase mt-2" style="line-height: 0.7;">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center table-primary" width="70%">Polda</th>
                                <th scope="col" class="text-center table-primary" width="30%">TMC</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Polda Aceh</td>
                                <td class="text-end">12</td>
                            </tr>
                            <tr>
                                <td>Polda Sumut</td>
                                <td class="text-end">24</td>
                            </tr>
                            <tr>
                                <td>Polda Sumbar</td>
                                <td class="text-end">11</td>
                            </tr>
                            <tr>
                                <td>Polda Riau</td>
                                <td class="text-end">17</td>
                            </tr>
                            <tr>
                                <td>Polda Bengkulu</td>
                                <td class="text-end">14</td>
                            </tr>
                            <tr>
                                <td>Polda Jambi</td>
                                <td class="text-end">15</td>
                            </tr>
                            <tr>
                                <td>Polda Sumsel</td>
                                <td class="text-end">45</td>
                            </tr>
                            <tr>
                                <td>Polda Lampung</td>
                                <td class="text-end">22</td>
                            </tr>
                            <tr>
                                <td>Polda Metro Jaya</td>
                                <td class="text-end">24</td>
                            </tr>
                            <tr>
                                <td>Polda Jabar</td>
                                <td class="text-end">27</td>
                            </tr>
                            <tr>
                                <td>Polda Jateng</td>
                                <td class="text-end">21</td>
                            </tr>
                            <tr>
                                <td>Polda DIY</td>
                                <td class="text-end">14</td>
                            </tr>
                            <tr>
                                <td>Polda Jatim</td>
                                <td class="text-end">17</td>
                            </tr>
                            <tr>
                                <td>Polda Bali</td>
                                <td class="text-end">26</td>
                            </tr>
                            <tr>
                                <td>Polda NTB</td>
                                <td class="text-end">14</td>
                            </tr>
                            <tr>
                                <td>Polda NTT</td>
                                <td class="text-end">10</td>
                            </tr>
                            <tr>
                                <td>Polda Kalbar</td>
                                <td class="text-end">12</td>
                            </tr>
                            <tr>
                                <td>Polda Kalsel</td>
                                <td class="text-end">10</td>
                            </tr>
                            <tr>
                                <td>Polda Kalteng</td>
                                <td class="text-end">10</td>
                            </tr>
                            <tr>
                                <td>Polda Kaltim</td>
                                <td class="text-end">8</td>
                            </tr>
                            <tr>
                                <td>Polda Sulsel</td>
                                <td class="text-end">9</td>
                            </tr>
                            <tr>
                                <td>Polda Sultra</td>
                                <td class="text-end">6</td>
                            </tr>
                            <tr>
                                <td>Polda Sulteng</td>
                                <td class="text-end">15</td>
                            </tr>
                            <tr>
                                <td>Polda Sulut</td>
                                <td class="text-end">19</td>
                            </tr>
                            <tr>
                                <td>Polda Maluku</td>
                                <td class="text-end">17</td>
                            </tr>
                            <tr>
                                <td>Polda Papua</td>
                                <td class="text-end">6</td>
                            </tr>
                            <tr>
                                <td>Polda Babel</td>
                                <td class="text-end">7</td>
                            </tr>
                            <tr>
                                <td>Polda Banten</td>
                                <td class="text-end">19</td>
                            </tr>
                            <tr>
                                <td>Polda Gorontalo</td>
                                <td class="text-end">8</td>
                            </tr>
                            <tr>
                                <td>Polda Malut</td>
                                <td class="text-end">5</td>
                            </tr>
                            <tr>
                                <td>Polda Kepri</td>
                                <td class="text-end">10</td>
                            </tr>
                            <tr>
                                <td>Polda Papua Barat</td>
                                <td class="text-end">2</td>
                            </tr>
                            <tr>
                                <td>Polda Sulbar</td>
                                <td class="text-end">8</td>
                            </tr>
                            <tr>
                                <td>Polda Kaltara</td>
                                <td class="text-end">2</td>
                            </tr>
                            <tr>
                                <td>Pusdik Lantas</td>
                                <td class="text-end">21</td>
                            </tr>
                            <tr>
                                <td>Korlantas Polri</td>
                                <td class="text-end">86</td>
                            </tr>
                            <tr>
                                <th>Total</th>
                                <th class="text-end">593</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <hr>

            <div class="d-flex justify-content-around">
                <div class="col-md-5">
                    <center><span class="fs-2 fw-bold">CCTV</span><br></center>
                    <table class="table table-striped table-bordered fs-3 text-uppercase mt-2" style="line-height: 0.7;">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center table-primary" width="70%">Polda</th>
                                <th scope="col" class="text-center table-primary" width="30%">CCTV</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Polda Aceh</td>
                                <td class="text-end">30</td>
                            </tr>
                            <tr>
                                <td>Polda Sumut</td>
                                <td class="text-end">114</td>
                            </tr>
                            <tr>
                                <td>Polda Sumbar</td>
                                <td class="text-end">15</td>
                            </tr>
                            <tr>
                                <td>Polda Riau</td>
                                <td class="text-end">44</td>
                            </tr>
                            <tr>
                                <td>Polda Bengkulu</td>
                                <td class="text-end">28</td>
                            </tr>
                            <tr>
                                <td>Polda Jambi</td>
                                <td class="text-end">75</td>
                            </tr>
                            <tr>
                                <td>Polda Sumsel</td>
                                <td class="text-end">185</td>
                            </tr>
                            <tr>
                                <td>Polda Lampung</td>
                                <td class="text-end">223</td>
                            </tr>
                            <tr>
                                <td>Polda Metro Jaya</td>
                                <td class="text-end">241</td>
                            </tr>
                            <tr>
                                <td>Polda Jabar</td>
                                <td class="text-end">402</td>
                            </tr>
                            <tr>
                                <td>Polda Jateng</td>
                                <td class="text-end">81</td>
                            </tr>
                            <tr>
                                <td>Polda DIY</td>
                                <td class="text-end">28</td>
                            </tr>
                            <tr>
                                <td>Polda Jatim</td>
                                <td class="text-end">41</td>
                            </tr>
                            <tr>
                                <td>Polda Bali</td>
                                <td class="text-end">72</td>
                            </tr>
                            <tr>
                                <td>Polda NTB</td>
                                <td class="text-end">12</td>
                            </tr>
                            <tr>
                                <td>Polda NTT</td>
                                <td class="text-end">3</td>
                            </tr>
                            <tr>
                                <td>Polda Kalbar</td>
                                <td class="text-end">8</td>
                            </tr>
                            <tr>
                                <td>Polda Kalsel</td>
                                <td class="text-end">16</td>
                            </tr>
                            <tr>
                                <td>Polda Kalteng</td>
                                <td class="text-end">12</td>
                            </tr>
                            <tr>
                                <td>Polda Kaltim</td>
                                <td class="text-end">14</td>
                            </tr>
                            <tr>
                                <td>Polda Sulsel</td>
                                <td class="text-end">33</td>
                            </tr>
                            <tr>
                                <td>Polda Sultra</td>
                                <td class="text-end">19</td>
                            </tr>
                            <tr>
                                <td>Polda Sulteng</td>
                                <td class="text-end">36</td>
                            </tr>
                            <tr>
                                <td>Polda Sulut</td>
                                <td class="text-end">47</td>
                            </tr>
                            <tr>
                                <td>Polda Maluku</td>
                                <td class="text-end">54</td>
                            </tr>
                            <tr>
                                <td>Polda Papua</td>
                                <td class="text-end">10</td>
                            </tr>
                            <tr>
                                <td>Polda Babel</td>
                                <td class="text-end">6</td>
                            </tr>
                            <tr>
                                <td>Polda Banten</td>
                                <td class="text-end">78</td>
                            </tr>
                            <tr>
                                <td>Polda Gorontalo</td>
                                <td class="text-end">3</td>
                            </tr>
                            <tr>
                                <td>Polda Malut</td>
                                <td class="text-end">7</td>
                            </tr>
                            <tr>
                                <td>Polda Kepri</td>
                                <td class="text-end">13</td>
                            </tr>
                            <tr>
                                <td>Polda Papua Barat</td>
                                <td class="text-end">2</td>
                            </tr>
                            <tr>
                                <td>Polda Sulbar</td>
                                <td class="text-end">2</td>
                            </tr>
                            <tr>
                                <td>Polda Kaltara</td>
                                <td class="text-end">0</td>
                            </tr>
                            <tr>
                                <td>Pusdik Lantas</td>
                                <td class="text-end">46</td>
                            </tr>
                            <tr>
                                <td>Korlantas Polri</td>
                                <td class="text-end">99</td>
                            </tr>
                            <tr>
                                <th>Total</th>
                                <th class="text-end">2099</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-5">
                    <center><span class="fs-2 fw-bold">CCTV INTEGRASI</span><br></center>
                    <table class="table table-striped table-bordered fs-3 text-uppercase mt-2" style="line-height: 0.7;">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center table-primary" width="50%">Polda</th>
                                <th scope="col" class="text-center table-primary" width="50%">CCTV INTEGRASI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Polda Aceh</td>
                                <td class="text-end">12</td>
                            </tr>
                            <tr>
                                <td>Polda Sumut</td>
                                <td class="text-end">24</td>
                            </tr>
                            <tr>
                                <td>Polda Sumbar</td>
                                <td class="text-end">11</td>
                            </tr>
                            <tr>
                                <td>Polda Riau</td>
                                <td class="text-end">17</td>
                            </tr>
                            <tr>
                                <td>Polda Bengkulu</td>
                                <td class="text-end">14</td>
                            </tr>
                            <tr>
                                <td>Polda Jambi</td>
                                <td class="text-end">15</td>
                            </tr>
                            <tr>
                                <td>Polda Sumsel</td>
                                <td class="text-end">45</td>
                            </tr>
                            <tr>
                                <td>Polda Lampung</td>
                                <td class="text-end">22</td>
                            </tr>
                            <tr>
                                <td>Polda Metro Jaya</td>
                                <td class="text-end">24</td>
                            </tr>
                            <tr>
                                <td>Polda Jabar</td>
                                <td class="text-end">27</td>
                            </tr>
                            <tr>
                                <td>Polda Jateng</td>
                                <td class="text-end">21</td>
                            </tr>
                            <tr>
                                <td>Polda DIY</td>
                                <td class="text-end">14</td>
                            </tr>
                            <tr>
                                <td>Polda Jatim</td>
                                <td class="text-end">17</td>
                            </tr>
                            <tr>
                                <td>Polda Bali</td>
                                <td class="text-end">26</td>
                            </tr>
                            <tr>
                                <td>Polda NTB</td>
                                <td class="text-end">14</td>
                            </tr>
                            <tr>
                                <td>Polda NTT</td>
                                <td class="text-end">10</td>
                            </tr>
                            <tr>
                                <td>Polda Kalbar</td>
                                <td class="text-end">12</td>
                            </tr>
                            <tr>
                                <td>Polda Kalsel</td>
                                <td class="text-end">10</td>
                            </tr>
                            <tr>
                                <td>Polda Kalteng</td>
                                <td class="text-end">10</td>
                            </tr>
                            <tr>
                                <td>Polda Kaltim</td>
                                <td class="text-end">8</td>
                            </tr>
                            <tr>
                                <td>Polda Sulsel</td>
                                <td class="text-end">9</td>
                            </tr>
                            <tr>
                                <td>Polda Sultra</td>
                                <td class="text-end">6</td>
                            </tr>
                            <tr>
                                <td>Polda Sulteng</td>
                                <td class="text-end">15</td>
                            </tr>
                            <tr>
                                <td>Polda Sulut</td>
                                <td class="text-end">19</td>
                            </tr>
                            <tr>
                                <td>Polda Maluku</td>
                                <td class="text-end">17</td>
                            </tr>
                            <tr>
                                <td>Polda Papua</td>
                                <td class="text-end">6</td>
                            </tr>
                            <tr>
                                <td>Polda Babel</td>
                                <td class="text-end">7</td>
                            </tr>
                            <tr>
                                <td>Polda Banten</td>
                                <td class="text-end">19</td>
                            </tr>
                            <tr>
                                <td>Polda Gorontalo</td>
                                <td class="text-end">8</td>
                            </tr>
                            <tr>
                                <td>Polda Malut</td>
                                <td class="text-end">5</td>
                            </tr>
                            <tr>
                                <td>Polda Kepri</td>
                                <td class="text-end">10</td>
                            </tr>
                            <tr>
                                <td>Polda Papua Barat</td>
                                <td class="text-end">2</td>
                            </tr>
                            <tr>
                                <td>Polda Sulbar</td>
                                <td class="text-end">8</td>
                            </tr>
                            <tr>
                                <td>Polda Kaltara</td>
                                <td class="text-end">2</td>
                            </tr>
                            <tr>
                                <td>Pusdik Lantas</td>
                                <td class="text-end">21</td>
                            </tr>
                            <tr>
                                <td>Korlantas Polri</td>
                                <td class="text-end">86</td>
                            </tr>
                            <tr>
                                <th>Total</th>
                                <th class="text-end">593</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- <ul class="nav nav-pills  mt-3" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="pills-home-tab" data-toggle="pill" data-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Harian</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Bulanan</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-contact-tab" data-toggle="pill" data-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Tahunan</button>
    </li>
</ul>
<div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <section class="shadow-sm mt-5">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <div id="titlesubbagambangsistekday"></div>
                        </div>
                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                            <div class="main-chart">
                                <div id="chartdaysubbagambangsistek">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="shadow-sm mt-5">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <div id="titlesubbagjarsistekday"></div>
                        </div>
                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                            <div class="main-chart">
                                <div id="chartdaysubbagjarsistek">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="shadow-sm mt-5">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <div id="titlesubbagharsistekday"></div>
                        </div>
                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                            <div class="main-chart">
                                <div id="chartdaysubbagharsistek">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <section class="shadow-sm mt-5">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <div id="titlesubbagambangsistekmonth"></div>
                        </div>
                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                            <div class="main-chart">
                                <div id="chartmonthsubbagambangsistek">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="shadow-sm mt-5">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <div id="titlesubbagjarsistekmonth"></div>
                        </div>
                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                            <div class="main-chart">
                                <div id="chartmonthsubbagjarsistek">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="shadow-sm mt-5">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <div id="titlesubbagharsistekmonth"></div>
                        </div>
                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                            <div class="main-chart">
                                <div id="chartmonthsubbagharsistek">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
        <section class="shadow-sm mt-5">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <div id="titlesubbagambangsistekyear"></div>
                        </div>
                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                            <div class="main-chart">
                                <div id="chartyearsubbagambangsistek">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="shadow-sm mt-5">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <div id="titlesubbagjarsistekyear"></div>
                        </div>
                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                            <div class="main-chart">
                                <div id="chartyearsubbagjarsistek">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="shadow-sm mt-5">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <div id="titlesubbagharsistekyear"></div>
                        </div>
                        <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                            <div class="main-chart">
                                <div id="chartyearsubbagharsistek">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-uppercase" id="exampleModalLabel">Struktur Organisasi <?= $title; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <center>
                    <img src="<?= base_url('assets/fe/strukturorganisasi/strukturbagtik.png'); ?>" alt="" srcset="" width="100%">
                </center>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.36.3/apexcharts.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script>
    var date = new Date();
    var year = new Date();
    var firstDay = new Date(date.getFullYear(), 0).toLocaleDateString("en-GB").split('/').reverse().join('-');
    var lastDay = new Date(date.getFullYear(), 11, 31).toLocaleDateString("en-GB").split('/').reverse().join('-');
    var today = new Date().toLocaleDateString('en-GB').split('/').reverse().join('-')

    date.setDate(date.getDate() - 6);
    var seven_daysAgo = date.toLocaleDateString("en-GB").split('/').reverse().join('-');

    year.setFullYear(year.getFullYear() - 2);
    var dataawal = year.toLocaleDateString("en-GB").split('/').reverse().join('-');
    var daymonth = firstDay.split('-');
    var year = dataawal.split('-');
    var three_yearAgo = year[0] + '-' + daymonth[1] + '-' + daymonth[2];

    // Day
    $("#chartdaysubbagambangsistek").html(`<div id="chartday1"></div>`);
    $("#chartdaysubbagjarsistek").html(`<div id="chartday2"></div>`);
    $("#chartdaysubbagharsistek").html(`<div id="chartday3"></div>`);

    // Month
    $("#chartmonthsubbagambangsistek").html(`<div id="chart"></div>`);
    $("#chartmonthsubbagjarsistek").html(`<div id="chart2"></div>`);
    $("#chartmonthsubbagharsistek").html(`<div id="chart3"></div>`);

    // Year
    $("#chartyearsubbagambangsistek").html(`<div id="chartyear"></div>`);
    $("#chartyearsubbagjarsistek").html(`<div id="chartyear2"></div>`);
    $("#chartyearsubbagharsistek").html(`<div id="chartyear3"></div>`);

    getStatistik();

    function getStatistik() {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>bagtik/getStatistik",
            dataType: "JSON",
            success: function(result) {
                $("#overlay").fadeOut(300);
                $('#subbagambangsistek').html(`<span class="fs-4" >${result.subbagambangsistek}</span >`);
                $('#subbagjarsistek').html(`<span class="fs-4" >${result.subbagjarsistek}</span >`);
                $('#subbagharsistek').html(`<span class="fs-4" >${result.subbagharsistek}</span >`);
            }
        })
    }

    getBagtikday(today, seven_daysAgo)
    getBagtikmonth(firstDay, lastDay)
    getBagtikyear(three_yearAgo, lastDay)
    // Day
    function getBagtikday(today, seven_daysAgo) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>bagtik/getChartBagtik",
            data: {
                start_date: seven_daysAgo,
                end_date: today,
                filter: 'day'
            },
            dataType: "JSON",
            success: function(result) {
                let polda_month = result.data.polda_month
                let subbagambangsistek = result.data.subbagambangsistek
                let subbagjarsistek = result.data.subbagjarsistek
                let subbagharsistek = result.data.subbagharsistek

                $('#titlesubbagambangsistekday').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG AMBANGSISTEK HARIAN</h4>`);
                $('#titlesubbagjarsistekday').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG JARSISTEK HARIAN</h4>`);
                $('#titlesubbagharsistekday').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG HARSISTEK HARIAN</h4>`);

                var bagtiksubbagambangsistek = {
                    series: [{
                        name: 'SUBBAG AMBANGSISTEK',
                        type: 'line',
                        data: subbagambangsistek,
                        color: "#11347A"
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
                                subbagambangsisteksebelumnya = subbagambangsistek[0];

                                if (subbagambangsistek[0] < subbagambangsistek[1]) {
                                    persentasesubbagambangsistek = 'Naik'
                                } else if (subbagambangsistek[0] > subbagambangsistek[1]) {
                                    persentasesubbagambangsistek = 'Turun'
                                } else {
                                    persentasesubbagambangsistek = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbagambangsisteksebelumnya = subbagambangsistek[1];
                                if (subbagambangsistek[1] < subbagambangsistek[2]) {
                                    persentasesubbagambangsistek = 'Naik'
                                } else if (subbagambangsistek[1] > subbagambangsistek[2]) {
                                    persentasesubbagambangsistek = 'Turun'
                                } else {
                                    persentasesubbagambangsistek = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                subbagambangsisteksebelumnya = subbagambangsistek[2];
                                if (subbagambangsistek[2] < subbagambangsistek[3]) {
                                    persentasesubbagambangsistek = 'Naik'
                                } else if (subbagambangsistek[2] > subbagambangsistek[3]) {
                                    persentasesubbagambangsistek = 'Turun'
                                } else {
                                    persentasesubbagambangsistek = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                subbagambangsisteksebelumnya = subbagambangsistek[3];
                                if (subbagambangsistek[3] < subbagambangsistek[4]) {
                                    persentasesubbagambangsistek = 'Naik'
                                } else if (subbagambangsistek[3] > subbagambangsistek[4]) {
                                    persentasesubbagambangsistek = 'Turun'
                                } else {
                                    persentasesubbagambangsistek = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                subbagambangsisteksebelumnya = subbagambangsistek[4];
                                if (subbagambangsistek[4] < subbagambangsistek[5]) {
                                    persentasesubbagambangsistek = 'Naik'
                                } else if (subbagambangsistek[4] > subbagambangsistek[5]) {
                                    persentasesubbagambangsistek = 'Turun'
                                } else {
                                    persentasesubbagambangsistek = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                subbagambangsisteksebelumnya = subbagambangsistek[5];
                                if (subbagambangsistek[5] < subbagambangsistek[6]) {
                                    persentasesubbagambangsistek = 'Naik'
                                } else if (subbagambangsistek[5] > subbagambangsistek[6]) {
                                    persentasesubbagambangsistek = 'Turun'
                                } else {
                                    persentasesubbagambangsistek = 'Sama'
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
                                                            <span class="fw-bold">Total SUBBAG RENOP</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbagambangsisteksebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total SUBBAG RENOP</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagambangsistek[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesubbagambangsistek}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total SUBBAG RENOP</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagambangsistek[dataPointIndex]}</span><br>
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

                var bagtiksubbagambangsistek = new ApexCharts(document.querySelector("#chartday1"), bagtiksubbagambangsistek);
                bagtiksubbagambangsistek.render();


                var bagtiksubbagjarsistekday = {
                    series: [{
                        name: 'SUBBAG JARSISTEK',
                        type: 'line',
                        data: subbagjarsistek,
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
                                subbagjarsisteksebelumnya = subbagjarsistek[0];

                                if (subbagjarsistek[0] < subbagjarsistek[1]) {
                                    persentasesubbagjarsistek = 'Naik'
                                } else if (subbagjarsistek[0] > subbagjarsistek[1]) {
                                    persentasesubbagjarsistek = 'Turun'
                                } else {
                                    persentasesubbagjarsistek = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbagjarsisteksebelumnya = subbagjarsistek[1];
                                if (subbagjarsistek[1] < subbagjarsistek[2]) {
                                    persentasesubbagjarsistek = 'Naik'
                                } else if (subbagjarsistek[1] > subbagjarsistek[2]) {
                                    persentasesubbagjarsistek = 'Turun'
                                } else {
                                    persentasesubbagjarsistek = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                subbagjarsisteksebelumnya = subbagjarsistek[2];
                                if (subbagjarsistek[2] < subbagjarsistek[3]) {
                                    persentasesubbagjarsistek = 'Naik'
                                } else if (subbagjarsistek[2] > subbagjarsistek[3]) {
                                    persentasesubbagjarsistek = 'Turun'
                                } else {
                                    persentasesubbagjarsistek = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                subbagjarsisteksebelumnya = subbagjarsistek[3];
                                if (subbagjarsistek[3] < subbagjarsistek[4]) {
                                    persentasesubbagjarsistek = 'Naik'
                                } else if (subbagjarsistek[3] > subbagjarsistek[4]) {
                                    persentasesubbagjarsistek = 'Turun'
                                } else {
                                    persentasesubbagjarsistek = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[5]
                                subbagjarsisteksebelumnya = subbagjarsistek[4];
                                if (subbagjarsistek[4] < subbagjarsistek[5]) {
                                    persentasesubbagjarsistek = 'Naik'
                                } else if (subbagjarsistek[4] > subbagjarsistek[5]) {
                                    persentasesubbagjarsistek = 'Turun'
                                } else {
                                    persentasesubbagjarsistek = 'Sama'
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
                                                            <span class="fw-bold">Total SUBBAG DALOPS</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbagjarsisteksebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total SUBBAG DALOPS</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagjarsistek[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesubbagjarsistek}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total SUBBAG DALOPS</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagjarsistek[dataPointIndex]}</span><br>
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

                var bagtiksubbagjarsistekday = new ApexCharts(document.querySelector("#chartday2"), bagtiksubbagjarsistekday);
                bagtiksubbagjarsistekday.render();


                var bagtiksubbagharsistekday = {
                    series: [{
                        name: 'SUBBAG HARSISTEK',
                        type: 'line',
                        data: subbagharsistek,
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
                                subbagharsisteksebelumnya = subbagharsistek[0];

                                if (subbagharsistek[0] < subbagharsistek[1]) {
                                    presentasesubbagharsistek = 'Naik'
                                } else if (subbagharsistek[0] > subbagharsistek[1]) {
                                    presentasesubbagharsistek = 'Turun'
                                } else {
                                    presentasesubbagharsistek = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbagharsisteksebelumnya = subbagharsistek[1];
                                if (subbagharsistek[1] < subbagharsistek[2]) {
                                    presentasesubbagharsistek = 'Naik'
                                } else if (subbagharsistek[1] > subbagharsistek[2]) {
                                    presentasesubbagharsistek = 'Turun'
                                } else {
                                    presentasesubbagharsistek = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                subbagharsisteksebelumnya = subbagharsistek[2];
                                if (subbagharsistek[2] < subbagharsistek[3]) {
                                    presentasesubbagharsistek = 'Naik'
                                } else if (subbagharsistek[2] > subbagharsistek[3]) {
                                    presentasesubbagharsistek = 'Turun'
                                } else {
                                    presentasesubbagharsistek = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                subbagharsisteksebelumnya = subbagharsistek[3];
                                if (subbagharsistek[3] < subbagharsistek[4]) {
                                    presentasesubbagharsistek = 'Naik'
                                } else if (subbagharsistek[3] > subbagharsistek[4]) {
                                    presentasesubbagharsistek = 'Turun'
                                } else {
                                    presentasesubbagharsistek = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                subbagharsisteksebelumnya = subbagharsistek[4];
                                if (subbagharsistek[4] < subbagharsistek[5]) {
                                    presentasesubbagharsistek = 'Naik'
                                } else if (subbagharsistek[4] > subbagharsistek[5]) {
                                    presentasesubbagharsistek = 'Turun'
                                } else {
                                    presentasesubbagharsistek = 'Sama'
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
                                                            <span class="fw-bold">Total SUBBAG KERMA</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbagharsisteksebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total SUBBAG KERMA</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagharsistek[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${presentasesubbagharsistek}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total SUBBAG KERMA</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagharsistek[dataPointIndex]}</span><br>
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

                var bagtiksubbagharsistekday = new ApexCharts(document.querySelector("#chartday3"), bagtiksubbagharsistekday);
                bagtiksubbagharsistekday.render();

            }
        })
    }


    // // Month
    function getBagtikmonth(firstDay, lastDay) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>bagtik/getChartBagtik",
            data: {
                start_date: firstDay,
                end_date: lastDay,
                filter: 'month'
            },
            dataType: "JSON",
            success: function(result) {
                let polda_month = result.data.polda_month
                let subbagambangsistek = result.data.subbagambangsistek
                let subbagjarsistek = result.data.subbagjarsistek
                let subbagharsistek = result.data.subbagharsistek
                $('#titlesubbagambangsistekmonth').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG AMBANGSISTEK BULANAN</h4>`);
                $('#titlesubbagjarsistekmonth').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG JARSISTEK BULANAN</h4>`);
                $('#titlesubbagharsistekmonth').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG HARSISTEK BULANAN</h4>`);

                var bagtiksubbagambangsistekmonth = {
                    series: [{
                        name: 'SUBBAG AMBANGSISTEK',
                        type: 'line',
                        data: subbagambangsistek,
                        color: "#11347A"
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
                                subbagambangsisteksebelumnya = subbagambangsistek[0];

                                if (subbagambangsistek[0] < subbagambangsistek[1]) {
                                    persentasesubbagambangsistek = 'Naik'
                                } else if (subbagambangsistek[0] > subbagambangsistek[1]) {
                                    persentasesubbagambangsistek = 'Turun'
                                } else {
                                    persentasesubbagambangsistek = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbagambangsisteksebelumnya = subbagambangsistek[1];
                                if (subbagambangsistek[1] < subbagambangsistek[2]) {
                                    persentasesubbagambangsistek = 'Naik'
                                } else if (subbagambangsistek[1] > subbagambangsistek[2]) {
                                    persentasesubbagambangsistek = 'Turun'
                                } else {
                                    persentasesubbagambangsistek = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                subbagambangsisteksebelumnya = subbagambangsistek[2];
                                if (subbagambangsistek[2] < subbagambangsistek[3]) {
                                    persentasesubbagambangsistek = 'Naik'
                                } else if (subbagambangsistek[2] > subbagambangsistek[3]) {
                                    persentasesubbagambangsistek = 'Turun'
                                } else {
                                    persentasesubbagambangsistek = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                subbagambangsisteksebelumnya = subbagambangsistek[3];
                                if (subbagambangsistek[3] < subbagambangsistek[4]) {
                                    persentasesubbagambangsistek = 'Naik'
                                } else if (subbagambangsistek[3] > subbagambangsistek[4]) {
                                    persentasesubbagambangsistek = 'Turun'
                                } else {
                                    persentasesubbagambangsistek = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                subbagambangsisteksebelumnya = subbagambangsistek[4];
                                if (subbagambangsistek[4] < subbagambangsistek[5]) {
                                    persentasesubbagambangsistek = 'Naik'
                                } else if (subbagambangsistek[4] > subbagambangsistek[5]) {
                                    persentasesubbagambangsistek = 'Turun'
                                } else {
                                    persentasesubbagambangsistek = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                subbagambangsisteksebelumnya = subbagambangsistek[5];
                                if (subbagambangsistek[5] < subbagambangsistek[6]) {
                                    persentasesubbagambangsistek = 'Naik'
                                } else if (subbagambangsistek[5] > subbagambangsistek[6]) {
                                    persentasesubbagambangsistek = 'Turun'
                                } else {
                                    persentasesubbagambangsistek = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                subbagambangsisteksebelumnya = subbagambangsistek[6];
                                if (subbagambangsistek[6] < subbagambangsistek[7]) {
                                    persentasesubbagambangsistek = 'Naik'
                                } else if (subbagambangsistek[6] > subbagambangsistek[7]) {
                                    persentasesubbagambangsistek = 'Turun'
                                } else {
                                    persentasesubbagambangsistek = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                subbagambangsisteksebelumnya = subbagambangsistek[7];
                                if (subbagambangsistek[7] < subbagambangsistek[8]) {
                                    persentasesubbagambangsistek = 'Naik'
                                } else if (subbagambangsistek[7] > subbagambangsistek[8]) {
                                    persentasesubbagambangsistek = 'Turun'
                                } else {
                                    persentasesubbagambangsistek = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                subbagambangsisteksebelumnya = subbagambangsistek[8];
                                if (subbagambangsistek[8] < subbagambangsistek[9]) {
                                    persentasesubbagambangsistek = 'Naik'
                                } else if (subbagambangsistek[8] > subbagambangsistek[9]) {
                                    persentasesubbagambangsistek = 'Turun'
                                } else {
                                    persentasesubbagambangsistek = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                subbagambangsisteksebelumnya = subbagambangsistek[9];
                                if (subbagambangsistek[9] < subbagambangsistek[10]) {
                                    persentasesubbagambangsistek = 'Naik'
                                } else if (subbagambangsistek[9] > subbagambangsistek[10]) {
                                    persentasesubbagambangsistek = 'Turun'
                                } else {
                                    persentasesubbagambangsistek = `Sama`
                                }

                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                subbagambangsisteksebelumnya = subbagambangsistek[10];
                                if (subbagambangsistek[10] < subbagambangsistek[11]) {
                                    persentasesubbagambangsistek = 'Naik'
                                } else if (subbagambangsistek[10] > subbagambangsistek[11]) {
                                    persentasesubbagambangsistek = 'Turun'
                                } else {
                                    persentasesubbagambangsistek = 'Sama'
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
                                                            <span class="fw-bold">Total SUBBAG RENOP</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbagambangsisteksebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total SUBBAG RENOP</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagambangsistek[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesubbagambangsistek}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total SUBBAG RENOP</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagambangsistek[dataPointIndex]}</span><br>
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

                var bagtiksubbagambangsistekmonth = new ApexCharts(document.querySelector("#chart"), bagtiksubbagambangsistekmonth);
                bagtiksubbagambangsistekmonth.render();


                var bagtiksubbagjarsistekmonth = {
                    series: [{
                        name: 'SUBBAG JARSISTEK',
                        type: 'line',
                        data: subbagjarsistek,
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
                                subbagjarsisteksebelumnya = subbagjarsistek[0];

                                if (subbagjarsistek[0] < subbagjarsistek[1]) {
                                    persentasesubbagjarsistek = 'Naik'
                                } else if (subbagjarsistek[0] > subbagjarsistek[1]) {
                                    persentasesubbagjarsistek = 'Turun'
                                } else {
                                    persentasesubbagjarsistek = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbagjarsisteksebelumnya = subbagjarsistek[1];
                                if (subbagjarsistek[1] < subbagjarsistek[2]) {
                                    persentasesubbagjarsistek = 'Naik'
                                } else if (subbagjarsistek[1] > subbagjarsistek[2]) {
                                    persentasesubbagjarsistek = 'Turun'
                                } else {
                                    persentasesubbagjarsistek = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                subbagjarsisteksebelumnya = subbagjarsistek[2];
                                if (subbagjarsistek[2] < subbagjarsistek[3]) {
                                    persentasesubbagjarsistek = 'Naik'
                                } else if (subbagjarsistek[2] > subbagjarsistek[3]) {
                                    persentasesubbagjarsistek = 'Turun'
                                } else {
                                    persentasesubbagjarsistek = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                subbagjarsisteksebelumnya = subbagjarsistek[3];
                                if (subbagjarsistek[3] < subbagjarsistek[4]) {
                                    persentasesubbagjarsistek = 'Naik'
                                } else if (subbagjarsistek[3] > subbagjarsistek[4]) {
                                    persentasesubbagjarsistek = 'Turun'
                                } else {
                                    persentasesubbagjarsistek = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                subbagjarsisteksebelumnya = subbagjarsistek[4];
                                if (subbagjarsistek[4] < subbagjarsistek[5]) {
                                    persentasesubbagjarsistek = 'Naik'
                                } else if (subbagjarsistek[4] > subbagjarsistek[5]) {
                                    persentasesubbagjarsistek = 'Turun'
                                } else {
                                    persentasesubbagjarsistek = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                subbagjarsisteksebelumnya = subbagjarsistek[5];
                                if (subbagjarsistek[5] < subbagjarsistek[6]) {
                                    persentasesubbagjarsistek = 'Naik'
                                } else if (subbagjarsistek[5] > subbagjarsistek[6]) {
                                    persentasesubbagjarsistek = 'Turun'
                                } else {
                                    persentasesubbagjarsistek = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                subbagjarsisteksebelumnya = subbagjarsistek[6];
                                if (subbagjarsistek[6] < subbagjarsistek[7]) {
                                    persentasesubbagjarsistek = 'Naik'
                                } else if (subbagjarsistek[6] > subbagjarsistek[7]) {
                                    persentasesubbagjarsistek = 'Turun'
                                } else {
                                    persentasesubbagjarsistek = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                subbagjarsisteksebelumnya = subbagjarsistek[7];
                                if (subbagjarsistek[7] < subbagjarsistek[8]) {
                                    persentasesubbagjarsistek = 'Naik'
                                } else if (subbagjarsistek[7] > subbagjarsistek[8]) {
                                    persentasesubbagjarsistek = 'Turun'
                                } else {
                                    persentasesubbagjarsistek = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                subbagjarsisteksebelumnya = subbagjarsistek[8];
                                if (subbagjarsistek[8] < subbagjarsistek[9]) {
                                    persentasesubbagjarsistek = 'Naik'
                                } else if (subbagjarsistek[8] > subbagjarsistek[9]) {
                                    persentasesubbagjarsistek = 'Turun'
                                } else {
                                    persentasesubbagjarsistek = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                subbagjarsisteksebelumnya = subbagjarsistek[9];
                                if (subbagjarsistek[9] < subbagjarsistek[10]) {
                                    persentasesubbagjarsistek = 'Naik'
                                } else if (subbagjarsistek[9] > subbagjarsistek[10]) {
                                    persentasesubbagjarsistek = 'Turun'
                                } else {
                                    persentasesubbagjarsistek = `Sama`
                                }

                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                subbagjarsisteksebelumnya = subbagjarsistek[10];
                                if (subbagjarsistek[10] < subbagjarsistek[11]) {
                                    persentasesubbagjarsistek = 'Naik'
                                } else if (subbagjarsistek[10] > subbagjarsistek[11]) {
                                    persentasesubbagjarsistek = 'Turun'
                                } else {
                                    persentasesubbagjarsistek = 'Sama'
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
                                                            <span class="fw-bold">Total SUBBAG DALOPS</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbagjarsisteksebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total SUBBAG DALOPS</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagjarsistek[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesubbagjarsistek}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total SUBBAG DALOPS</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagjarsistek[dataPointIndex]}</span><br>
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

                var bagtiksubbagjarsistekmonth = new ApexCharts(document.querySelector("#chart2"), bagtiksubbagjarsistekmonth);
                bagtiksubbagjarsistekmonth.render();


                var subbagharsistekmonth = {
                    series: [{
                        name: 'SUBBAG HARSISTEK',
                        type: 'line',
                        data: subbagharsistek,
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
                                subbagharsisteksebelumnya = subbagharsistek[0];

                                if (subbagharsistek[0] < subbagharsistek[1]) {
                                    presentasesubbagharsistek = 'Naik'
                                } else if (subbagharsistek[0] > subbagharsistek[1]) {
                                    presentasesubbagharsistek = 'Turun'
                                } else {
                                    presentasesubbagharsistek = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbagharsisteksebelumnya = subbagharsistek[1];
                                if (subbagharsistek[1] < subbagharsistek[2]) {
                                    presentasesubbagharsistek = 'Naik'
                                } else if (subbagharsistek[1] > subbagharsistek[2]) {
                                    presentasesubbagharsistek = 'Turun'
                                } else {
                                    presentasesubbagharsistek = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                subbagharsisteksebelumnya = subbagharsistek[2];
                                if (subbagharsistek[2] < subbagharsistek[3]) {
                                    presentasesubbagharsistek = 'Naik'
                                } else if (subbagharsistek[2] > subbagharsistek[3]) {
                                    presentasesubbagharsistek = 'Turun'
                                } else {
                                    presentasesubbagharsistek = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                subbagharsisteksebelumnya = subbagharsistek[3];
                                if (subbagharsistek[3] < subbagharsistek[4]) {
                                    presentasesubbagharsistek = 'Naik'
                                } else if (subbagharsistek[3] > subbagharsistek[4]) {
                                    presentasesubbagharsistek = 'Turun'
                                } else {
                                    presentasesubbagharsistek = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                subbagharsisteksebelumnya = subbagharsistek[4];
                                if (subbagharsistek[4] < subbagharsistek[5]) {
                                    presentasesubbagharsistek = 'Naik'
                                } else if (subbagharsistek[4] > subbagharsistek[5]) {
                                    presentasesubbagharsistek = 'Turun'
                                } else {
                                    presentasesubbagharsistek = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                subbagharsisteksebelumnya = subbagharsistek[5];
                                if (subbagharsistek[5] < subbagharsistek[6]) {
                                    presentasesubbagharsistek = 'Naik'
                                } else if (subbagharsistek[5] > subbagharsistek[6]) {
                                    presentasesubbagharsistek = 'Turun'
                                } else {
                                    presentasesubbagharsistek = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                subbagharsisteksebelumnya = subbagharsistek[6];
                                if (subbagharsistek[6] < subbagharsistek[7]) {
                                    presentasesubbagharsistek = 'Naik'
                                } else if (subbagharsistek[6] > subbagharsistek[7]) {
                                    presentasesubbagharsistek = 'Turun'
                                } else {
                                    presentasesubbagharsistek = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                subbagharsisteksebelumnya = subbagharsistek[7];
                                if (subbagharsistek[7] < subbagharsistek[8]) {
                                    presentasesubbagharsistek = 'Naik'
                                } else if (subbagharsistek[7] > subbagharsistek[8]) {
                                    presentasesubbagharsistek = 'Turun'
                                } else {
                                    presentasesubbagharsistek = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                subbagharsisteksebelumnya = subbagharsistek[8];
                                if (subbagharsistek[8] < subbagharsistek[9]) {
                                    presentasesubbagharsistek = 'Naik'
                                } else if (subbagharsistek[8] > subbagharsistek[9]) {
                                    presentasesubbagharsistek = 'Turun'
                                } else {
                                    presentasesubbagharsistek = 'Sama'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                subbagharsisteksebelumnya = subbagharsistek[9];
                                if (subbagharsistek[9] < subbagharsistek[10]) {
                                    presentasesubbagharsistek = 'Naik'
                                } else if (subbagharsistek[9] > subbagharsistek[10]) {
                                    presentasesubbagharsistek = 'Turun'
                                } else {
                                    subbagharsistek = `Sama`
                                }

                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                subbagharsisteksebelumnya = subbagharsistek[10];
                                if (subbagharsistek[10] < subbagharsistek[11]) {
                                    presentasesubbagharsistek = 'Naik'
                                } else if (subbagharsistek[10] > subbagharsistek[11]) {
                                    presentasesubbagharsistek = 'Turun'
                                } else {
                                    presentasesubbagharsistek = 'Sama'
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
                                                            <span class="fw-bold">Total SUBBAG KERMA</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbagharsisteksebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total SUBBAG KERMA</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagharsistek[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${presentasesubbagharsistek}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total SUBBAG KERMA</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagharsistek[dataPointIndex]}</span><br>
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

                var subbagharsistekmonth = new ApexCharts(document.querySelector("#chart3"), subbagharsistekmonth);
                subbagharsistekmonth.render();

            }
        })
    }

    // Year
    function getBagtikyear(three_yearAgo, lastDay) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>bagtik/getChartBagtik",
            data: {
                start_date: three_yearAgo,
                end_date: lastDay,
                filter: 'year'
            },
            dataType: "JSON",
            success: function(result) {
                let polda_month = result.data.polda_month
                let subbagambangsistek = result.data.subbagambangsistek
                let subbagjarsistek = result.data.subbagjarsistek
                let subbagharsistek = result.data.subbagharsistek
                $('#titlesubbagambangsistekyear').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG AMBANGSISTEK TAHUNAN</h4>`);
                $('#titlesubbagjarsistekyear').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG JARSISTEK TAHUNAN</h4>`);
                $('#titlesubbagharsistekyear').html(`<h4 class="card-title mb-0 text-uppercase">DATA SUBBAG HARSISTEK TAHUNAN</h4>`);

                var bagtiksubbagambangsistekyear = {
                    series: [{
                        name: 'SUBBAG AMBANGSISTEK',
                        type: 'line',
                        data: subbagambangsistek,
                        color: "#11347A"
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
                                subbagambangsisteksebelumnya = subbagambangsistek[0];

                                if (subbagambangsistek[0] < subbagambangsistek[1]) {
                                    persentasesubbagambangsistek = 'Naik'
                                } else if (subbagambangsistek[0] > subbagambangsistek[1]) {
                                    persentasesubbagambangsistek = 'Turun'
                                } else {
                                    persentasesubbagambangsistek = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbagambangsisteksebelumnya = subbagambangsistek[1];
                                if (subbagambangsistek[1] < subbagambangsistek[2]) {
                                    persentasesubbagambangsistek = 'Naik'
                                } else if (subbagambangsistek[1] > subbagambangsistek[2]) {
                                    persentasesubbagambangsistek = 'Turun'
                                } else {
                                    persentasesubbagambangsistek = 'Sama'
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
                                                            <span class="fw-bold">Total SUBBAG RENOP</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbagambangsisteksebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total SUBBAG RENOP</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagambangsistek[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesubbagambangsistek}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total SUBBAG RENOP</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagambangsistek[dataPointIndex]}</span><br>
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

                var bagtiksubbagambangsistekyear = new ApexCharts(document.querySelector("#chartyear"), bagtiksubbagambangsistekyear);
                bagtiksubbagambangsistekyear.render();


                var bagtiksubbagjarsistekyear = {
                    series: [{
                        name: 'SUBBAG JARSISTEK',
                        type: 'line',
                        data: subbagjarsistek,
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
                                subbagjarsisteksebelumnya = subbagjarsistek[0];

                                if (subbagjarsistek[0] < subbagjarsistek[1]) {
                                    persentasesubbagjarsistek = 'Naik'
                                } else if (subbagjarsistek[0] > subbagjarsistek[1]) {
                                    persentasesubbagjarsistek = 'Turun'
                                } else {
                                    persentasesubbagjarsistek = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbagjarsisteksebelumnya = subbagjarsistek[1];
                                if (subbagjarsistek[1] < subbagjarsistek[2]) {
                                    persentasesubbagjarsistek = 'Naik'
                                } else if (subbagjarsistek[1] > subbagjarsistek[2]) {
                                    persentasesubbagjarsistek = 'Turun'
                                } else {
                                    persentasesubbagjarsistek = 'Sama'
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
                                                            <span class="fw-bold">Total SUBBAG DALOPS</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbagjarsisteksebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total SUBBAG DALOPS</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagjarsistek[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasesubbagjarsistek}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total SUBBAG DALOPS</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagjarsistek[dataPointIndex]}</span><br>
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

                var bagtiksubbagjarsistekyear = new ApexCharts(document.querySelector("#chartyear2"), bagtiksubbagjarsistekyear);
                bagtiksubbagjarsistekyear.render();


                var subbagharsistekyear = {
                    series: [{
                        name: 'SUBBAG HARSISTEK',
                        type: 'line',
                        data: subbagharsistek,
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
                                subbagharsisteksebelumnya = subbagharsistek[0];

                                if (subbagharsistek[0] < subbagharsistek[1]) {
                                    presentasesubbagharsistek = 'Naik'
                                } else if (subbagharsistek[0] > subbagharsistek[1]) {
                                    presentasesubbagharsistek = 'Turun'
                                } else {
                                    presentasesubbagharsistek = 'Sama'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                subbagharsisteksebelumnya = subbagharsistek[1];
                                if (subbagharsistek[1] < subbagharsistek[2]) {
                                    presentasesubbagharsistek = 'Naik'
                                } else if (subbagharsistek[1] > subbagharsistek[2]) {
                                    presentasesubbagharsistek = 'Turun'
                                } else {
                                    presentasesubbagharsistek = 'Sama'
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
                                                            <span class="fw-bold">Total SUBBAG KERMA</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${subbagharsisteksebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total SUBBAG KERMA</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagharsistek[dataPointIndex]}</span><br>                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${presentasesubbagharsistek}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total SUBBAG KERMA</span><br>
                                                            </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${subbagharsistek[dataPointIndex]}</span><br>
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

                var subbagharsistekyear = new ApexCharts(document.querySelector("#chartyear3"), subbagharsistekyear);
                subbagharsistekyear.render();

            }
        })
    }
</script>